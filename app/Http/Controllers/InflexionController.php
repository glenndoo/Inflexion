<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\InflexionUserModel;
use App\Http\Model\InflexionDetailModel;
use App\Http\Model\InflexionPostModel;
use App\Http\Model\InflexionInboxModel;
use App\Http\Model\InflexionQuestionsModel;
use App\Http\Model\InflexionAnswersModel;
use App\Http\Model\ExamScheduleModel;
use App\Http\Model\CommentsModel;
use App\Http\Model\TutorDetailModel;
use App\Http\Model\TutorSchedule;
use App\Http\Model\StripePaymentModel;
use App\Http\Model\CreditTransactions;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Mail\RegisterMail;
use App\Mail\CompleteRegistryMail;
use App\Mail\TutorRegisterMail;
use App\Mail\TutorInterviewMail;
use App\Mail\BookingClassMail;
use App\Mail\ApprovedBookingMail;
use App\Mail\StudentMarkDoneMail;
use Monarobase\CountryList\CountryListFacade;

class InflexionController extends Controller
{
    protected $InflexionUserModel;
    protected $InflexionDetailModel;
    protected $InflexionPostModel;
    protected $InflexionInboxModel;
    protected $InflexionQuestionsModel;
    protected $InflexionAnswersModel;
    protected $CommentsModel;
    protected $ExamScheduleModel;
    protected $TutorDetailModel;
    protected $TutorSchedule;
    protected $StripePaymentModel;
    protected $CreditTransactions;

    public function __construct(){
        $this->InflexionUserModel = new InflexionUserModel();
        $this->InflexionDetailModel = new InflexionDetailModel();
        $this->InflexionPostModel = new InflexionPostModel();
        $this->InflexionInboxModel = new InflexionInboxModel();
        $this->InflexionQuestionsModel = new InflexionQuestionsModel();
        $this->InflexionAnswersModel = new InflexionAnswersModel();
        $this->CommentsModel = new CommentsModel();
        $this->ExamScheduleModel = new ExamScheduleModel();
        $this->TutorDetailModel = new TutorDetailModel();
        $this->TutorSchedule = new TutorSchedule();
        $this->StripePaymentModel = new StripePaymentModel();
        $this->CreditTransactions = new CreditTransactions();
    }

    //DISPLAY INDEX

    public function index(){
        $countries = CountryListFacade::getList('en');

        return view('welcome');
    }

    //VALIDATE REGISTRY FUNCTION
    public function ValidateRegistry(Request $request){
        $Valid = Validator::make($request->all(),[
            'username' => 'required',
            'password' => 'required',
            'type' => 'required'
        ],[
            'username.required' => 'Please enter your email address',
            'password.required' => 'Please set your password'
        ]);

        if($Valid->fails()){
            return redirect()->back()->with('Errors',$Valid->errors());
        }
        //GENERATE TOKEN FOR REGISTRATION
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];
        $token = str_shuffle($pin);
        $SaveRegistry = $this->InflexionUserModel->saveRegistry($request, $token);
        if($SaveRegistry){
            

            if($request->type == 1){
                $details = [
                    'title' => 'Inflexion Global Registration',
                    'body' => 'Congratulations! You have successfully registered an account with Inflexion Global. To fully verify your account and utilize all our services, please click the link below.',
                    'token' => $token,
                    'email' => Hash::make($request->username),
                    'valid' => $request->username
                ];
                $mailerFunction = 'RegisterMail';
                $this->SendEmail($request->username, $token, $details, $mailerFunction);
            }else{
                $details = [
                    'title' => 'Inflexion Global Tutor Registration',
                    'body' => 'Congratulations! You have successfully registered a tutor account with Inflexion Global. To fully verify your account and utilize all our services, you must first pass the qualifying test. Please click the link below to proceed to the qualifying test.',
                    'token' => $token,
                    'email' => Hash::make($request->username),
                    'valid' => $request->username
                ];
                $mailerFunction = "TutorRegisterMail";
                $this->SendEmail($request->username, $token, $details, $mailerFunction);
            }
            
            return view('welcome')->with('Success','Successfully registered! Please check your email to verify your account');
        }else{
            // dd($SaveRegistry);
            return view('register')->with("Errors","Username already taken");
        }
    }



    //CHECK IF TOKEN RETURNED FROM VERIFICATION IS VALID
    public function RegistryVerification(Request $request){
        $Valid = Validator::make($request->all(),[
            'token' => 'required',
            'vry' => 'required',
            'val' => 'required'
        ],[

        ]
        );

        if($Valid->fails()){
            return view('welcome');
        }else{
            
                $check = $this->InflexionUserModel->verifyRegistry($request);

                if($check == 1){
                    return view('welcome')->with('Success','Account successfully verified. You may now login.');
                }else if($check == 2){
                    return view('welcome')->with('Success','Cannot verify account');
                }else if($check == 3){
                    return view('welcome')->with('Success',"Account is already verified, please log in to your account");
                }else{
                    return view('welcome')->with('Success',"Invalid Verifcation Link");
                }
                
                
        }
    }


    //EMAILER FUNCTION
    public function SendEmail($email, $token, $details, $mailFunction){
        if($mailFunction == "RegisterMail"){
           Mail::to($email)->send(new RegisterMail($details));
        }else if($mailFunction == "CompleteRegistryMail"){
            Mail::to($email)->send(new CompleteRegistryMail($details));
        }else if($mailFunction == "TutorRegisterMail"){
            Mail::to($email)->send(new TutorRegisterMail($details));
        }else if($mailFunction == "TutorInterviewMail"){
            Mail::to($email)->send(new TutorInterviewMail($details));
        }else if($mailFunction == "BookingClassMail"){
            Mail::to($email)->send(new BookingClassMail($details));
        }else if($mailFunction == "ApprovedBooking"){
            Mail::to($email)->send(new ApprovedBookingMail($details));
        }else if($mailFunction == "StudentMarkDone"){
            Mail::to($email)->send(new StudentMarkDoneMail($details));
        }
           
    }


    //LOGIN FUNCTION
    public function LoginUser(Request $request){

                // TEST FOR TUTOR REGISTRATION BEFORE EXAM
                $login = $this->InflexionUserModel->checkLogin($request);
                if($login->inflexion_user_type == 2){
                $checkTutor = $this->InflexionDetailModel->find($login->inflexion_user_id);
                    if(empty($checkTutor)){
                        $countries = CountryListFacade::getList('en');
                        return view('completeprofile')->with('Details', $login)->with('Countries', $countries);
                    }
                    if($login->inflexion_user_tutor <= 69 && $login->inflexion_user_status == 5){
                        $Questions = $this->FetchQuestions();
                        $Answers = $this->FetchAnswers();
                        $take = $login->inflexion_user_take;
                        $this->InflexionUserModel->insertTake($take, $login->inflexion_user_id);
                        $checkTake = $this->InflexionUserModel->findUserEmail($login->inflexion_username);
                        if($checkTake->inflexion_user_take <= 3){
                            return view('tutorexam')->with('Details', $login)->with('Questions', $Questions)->with('Answers', $Answers);
                        }else{
                            return view('welcome')->with('Success','You have already exceeded the maximum number of attempts please contact the system administrator');
                        }
                    // FOR NTH TAKER
                    }
                }

                // CHECK RETURN STATUS
                if(isset($login->inflexion_user_status) && $login->inflexion_user_status == 0){
                    return view('/login')->with('Errors','Please check your email to verify your account'); //changed return "Please check your email to verify your account"; -maiko
    
                }else if(isset($login->inflexion_user_status) && $login->inflexion_user_status == 1){
    
                    // CHECK USER TYPE
                    if($login->inflexion_user_type == 1){
                        $countries = CountryListFacade::getList('en');
                        return view('completeprofile')->with('Details', $login)->with('Countries', $countries);
                    
                    // FIRST TIME TAKING THE EXAM
                    }
                // IF USER ENTERED INVALID CREDENTIALS     
                }else if(is_int($login) && $login == 3){
                    return view('/login')->with('Errors', 'Invalid username/password');
    
                // IF USERNAME IS NOT FOUND
                }else if(is_int($login) && $login == 4){
                    // dd($login);
                    return view('/login')->with('Errors', 'Username does not exist');
    
               
                }else if($login->inflexion_user_status == 3){
                        // CHECK HOW MANY TAKES USER HAS
                        $takeAgain = $login->inflexion_user_take;
    
                        if($takeAgain <= 3){
                            $Questions = $this->FetchQuestions();
                            $Answers = $this->FetchAnswers();
                            $insertTake = $this->InflexionUserModel->updateTake($takeAgain, $login->inflexion_user_id);
                            return view('tutorexam')->with('Details', $login)->with('Questions', $Questions)->with('Answers', $Answers);
                        }else{
                            return view('welcome')->with('Success','Sorry, but you have already exceeded the maximum number of attempts to retake the exam. Please contact the system administrator');
                        }
                // IF USER IS VALID
                }else{
                    $tutorDetailId = null;
                    $earnings = 0;
                    if($login->inflexion_user_type == 2){
                        $tutorDetailId = $this->TutorDetailModel->where('tutor_id', $login->inflexion_user_id)->first();
                        $tutorEarnings = $this->TutorSchedule->select('credit_charged')->where('tutor_id', $login->inflexion_user_id)->where('paid', NULL)->get();
                        foreach($tutorEarnings as $earn){
                           $earnings += $earn->credit_charged;
                        }
                    }
                        $sess = [
                            'status' => $login->inflexion_user_type,
                            'userId' => $login->inflexion_user_id,
                            'userName' => $login->inflexion_username,
                            'userWholeName' => $login->inflexion_detail_first.' '.$login->inflexion_detail_last,
                            'userDetails' => $login,
                            'credits' => $login->credits,
                            'creditCharge' => isset($tutorDetailId->credit_charge) ? $tutorDetailId->credit_charge : null,
                            'earnings' => $earnings,
                        ];
                        $request->session()->put('info', $sess);
                        if($login->inflexion_user_type == 1){
                            return redirect('/inflexionIndex');
                        }elseif($login->inflexion_user_type == 0){//added by maiko for testing admin
                            return redirect('/adminIndex');
                        }else{
                            return redirect('/inflexionIndex');
                        }
                        
                    
                }
                
            
            
        
    }

    //LOGOUT FUNCTION
    public function LogoutUser(){
        Session::flush();
        return redirect('/');
    }


    //COMPLETE REGISTRATION FUNCTION
    public function CompleteRegistration(Request $request){
        $Valid = Validator::make($request->all(),[

        ]);
       $complete = $this->InflexionDetailModel->completeRegistration($request);
    //    dd($complete);
       $insertSchedule = $this->ExamScheduleModel->insertSched($request, $complete->inflexion_user_id);
       if($complete){
           // CHECK IF USER TYPE
           if($complete->inflexion_user_type == 1){
            $details = [
                'title' => 'Inflexion Global Profile Completion',
                'body' => 'You have successfully created your account! You are now able to access all the features of Inflexion Global! Thank you!',
            ];
            $mailerFunction = 'CompleteRegistryMail';
            $token = "";
                $this->SendEmail($request->email, $token, $details, $mailerFunction);
            return view('welcome')->with('Success','You have successfully created your account! You are now able to access all the features of Inflexion Global! Thank you!');
           // IF TUTOR
           }else if($complete->inflexion_user_type == 2 && $complete->inflexion_user_take <= 1){
            $details = [
                'title' => 'Inflexion Global Tutor Profile Completion',
                'body' => 'You have successfully created your account! ',
            ];
            $mailerFunction = 'CompleteRegistryMail';
            $token = "";
                $this->SendEmail($request->email, $token, $details, $mailerFunction);
            $details = $this->InflexionUserModel->fetchUserDetails($request->email);
            $Questions = $this->FetchQuestions();
            $Answers = $this->FetchAnswers();
            $login = $this->InflexionUserModel->find($complete->inflexion_user_id);
            return view('tutorexam')->with('Details', $login)->with('Questions', $Questions)->with('Answers', $Answers);
            // return view('tutorExamResult')->with('Details', $details)->with('skype',$request->skypeAccount);
           }else if($complete->inflexion_user_type == 2 && $complete->inflexion_user_take >= 4){
            return view('welcome')->with('Success','You have already exceeded the maximum number of attempts please contact the system administrator.');
           }else if($complete->inflexion_user_type == 2 && $complete->inflexion_user_take <= 3){
            $details = $this->InflexionUserModel->fetchUserDetails($request->email);
            $Questions = $this->FetchQuestions();
            $Answers = $this->FetchAnswers();
            $login = $this->InflexionUserModel->find($complete->inflexion_user_id);
            return view('tutorexam')->with('Details', $login)->with('Questions', $Questions)->with('Answers', $Answers);
           }
        
       }else{
        return view('welcome')->with('Errors','Account creation failed');
       }
    }

    //CREATE POST FUNCTION
    public function PostMessage(Request $request){
        $savePost = $this->InflexionPostModel->insertPost($request);
        
        if($savePost){
            return redirect('/inflexionIndex');
        }else{
            return "Post failed";
        }
    }

    //DELETE POST FUNCTION
    public function DeletePost(Request $request, $id){
        $deletePost = $this->InflexionPostModel->deletePost($id);

        if($deletePost){
            return redirect('/inflexionIndex')->with('Success','Successfully deleted post');
        }else{
            return redirect('/inflexionIndex')->with('Errors','Failed to delete post');
        }
    }

    //LIKE POST FUNCTION
    public function LikePost(Request $request, $id){
        $likePost = $this->InflexionPostModel->likePost($request, $id);

        return redirect('/inflexionIndex');
    }

    //COMMENT ON POST FUNCTION
    public function CommentPost(Request $request){
        $commentPost = $this->CommentsModel->addComment($request);
        return redirect('/inflexionIndex');
    }

    //INBOX FUNCTION
    public function ShowInbox(Request $request){
        $messages = $this->InflexionInboxModel->fetchAllMessages($request);
        $sent = $this->InflexionInboxModel->fetchSentMessages($request);
        
        return view('student.studentinbox')->with('Messages', $messages)->with('SentCount',count($sent))->with('Sent', $sent);
    }


    //SEND MESSAGE FUNCTION
    public function SendMessageInbox(Request $request){
        $sendMessage = $this->InflexionInboxModel->sendMessage($request);
        $messages = $this->InflexionInboxModel->fetchAllMessages($request);
        $sent = $this->InflexionInboxModel->fetchSentMessages($request);
        // dd($messages);
        if($sendMessage == 0){
            return redirect()->back()->with('Messages', $messages)->with('SentCount',count($sent))->with('Sent',$sent)->with('Success', 'Message sent successfully!');
        }else if($sendMessage == 1){
            return redirect()->back()->with('Messages', $messages)->with('SentCount',count($sent))->with('Sent',$sent)->with('Errors', 'Failed to send message');
        }else{
            return redirect()->back()->with('Messages', $messages)->with('SentCount',count($sent))->with('Sent',$sent)->with('Errors', 'Receipient not found');
        }
    }

    //SHOW MESSAGE FOR MAIL
    public function ShowMessage(Request $request,$id){
        $showMess = $this->InflexionInboxModel->showMessage($id);

        return redirect()->back()->with('MessageDetails',$showMess);
    }

    //DELETE INBOX MESSAGE
    public function DeleteInboxMessage(Request $request, $id){
        $deleteMessage = $this->InflexionInboxModel->deleteMessage($id);
        if($deleteMessage){
            return redirect()->back()->with('Success', 'Message deleted');
        }else{
            return redirect()->back()->with('Errors', 'Failed to delete message');
        }
    }

    //TUTOR EMAIL VERIFICATION
    public function TutorRegistryVerification(Request $request){
        $Valid = Validator::make($request->all(),[
            'token' => 'required',
            'vry' => 'required',
            'val' => 'required'
        ],[

        ]
        );

        if($Valid->fails()){
            return view('welcome');
        }else{
            
                $check = $this->InflexionUserModel->verifyTutorRegistry($request);

                if($check == 1){
                    return view('welcome')->with('Success', 'Account verified, you may now login.');
                }else if($check == 2){
                    return view('welcome')->with('Error','Cannot verify account');
                }else if($check == 3){
                    return view('welcome')->with('Error',"Account is already verified, please log in to your account");
                }else{
                    return view('welcome')->with('Error',"Invalid Verifcation Link");
                }
                
                
        }
    }

    // FOR TUTOR EXAM
    public function FetchQuestions(){
        $quests = $this->InflexionQuestionsModel->fetchQuestions();
        return $quests;
    }

    public function FetchAnswers(){
        $answers = $this->InflexionAnswersModel->fetchAnswers();
        return $answers;
    }

    public function ValidateAnswers(Request $request){
        $details = [
            'inflexion_user_id' => $request->userId,
            'inflexion_username' => $request->userName
        ];
        $score = 0;
        foreach($request->question as $ans){
            if($ans == 1){
                $score++;
            }
        }
        $countries = CountryListFacade::getList('en');
        $total = number_format(($score/count($request->question))*100,2);
        $insert = $this->InflexionUserModel->userScore($total,$request->userId);
        $checkUserTake = $this->InflexionUserModel->findUserEmail($request->userName);
        
        if($total <= 69){
            return view('tutorExamFailed')->with('Details',"You got ".$total."% out of 100%. Don't worry! You still have ".(3-$checkUserTake->inflexion_user_take)." attempt/s left out of 3.")->with('info',$details);

        }else{
            // return view('completeprofile')->with('Results',$total)->with('Details', json_decode(json_encode($details)))->with('Countries', $countries);
            $this->InflexionUserModel->updateTutorStatus($request->userId);
            $details = $this->InflexionDetailModel->join('inflexion_users','inflexion_user_id', '=', 'inflexion_detail_id')->join('exam_schedule','tutor_id','=','inflexion_detail_id')->where('inflexion_user_id', $request->userId)->first();
            return view('tutorExamResult')->with('Details', $details)->with('skype',$details->skype_account);
        }
            

        
    }

    //ADMIN FOR SHOWING ALL USERS
    public function showAllUsers(){
        $users = $this->InflexionUserModel->showAllUsers();
        return view('admin/adminuserlist')->with('users', $users);
    }

    // ADMIN FOR SHOWING ALL POSTS
    public function showAllPosts(){
        $posts = $this->InflexionPostModel->fetchAllPosts();
        return view('admin/adminuserposts')->with('posts', $posts);
    }

    //ADMIN DELETE PARTICULAR USER
    public function deleteUser(Request $request){
        $user = $this->InflexionUserModel->deleteUser($request->user);
        if($user == 1){
            return redirect('/adminIndex')->with('success');

        }else{
            return redirect('/adminIndex')->with('error');

        }
    }

    //ADMIN REACTIVATE PARTICULAR USER
    public function reactivateAccount(Request $request){
        $user = $this->InflexionUserModel->reactivateAccount($request->user);
        if($user == 1){
            return redirect('/adminIndex')->with('success');

        }else{
            return redirect('/adminIndex')->with('error');

        }
    }

    //RETAKE EXAM REROUTE
    public function retakeExam(Request $request){
        // dd($request->details);
        $details = [
            'inflexion_user_id' => $request->details['inflexion_user_id'],
            'inflexion_username' => $request->details['inflexion_username']
        ];
        $Questions = $this->FetchQuestions();
        $Answers = $this->FetchAnswers();
        $detailObj = (object) $details;
        $result = $this->loginUser($request);
        $take = $result->inflexion_user_take;
        $this->InflexionUserModel->insertTake($take, $result->inflexion_user_id);
        if($result->inflexion_user_take <= 2){
            return view('tutorexam')->with('Details', $detailObj)->with('Answers',$Answers)->with('Questions',$Questions);
        }else{
            return view('welcome')->with('Success','You have already exceeded the maximum number of attempts please contact the system administrator.');
        }
    }

    // ADMIN SEND TUTOR INTERVIEW EMAIL
    public function sendInterviewEmail(Request $request){
        $details = [
            'title' => 'Inflexion Global Tutor Interview Invite',
            'body' => 'Congratulations! You have received this email to confirm that your interview schedule will be on: ',
            'skype' => $request->skype,
            'schedule' => $request->schedule
        ];
        $mailerFunction = 'TutorInterviewMail';
        $token = "interviewinvite";
        $this->SendEmail($request->username, $token, $details, $mailerFunction);
        $this->ExamScheduleModel->where('tutor_id', $request->id)->update(['interview_status' => 1]);
        return back()->with('Success','Successfully sent Interview Invite');
    }

    // ADMIN APPROVE TUTOR
    public function tutorApproval(Request $request){
        // dd($request->all());
        $details = [
            'user_id' => $request->id,
            'status' => $request->eval
        ];
        $this->ExamScheduleModel->updateInterviewStatus($request->id, $request->remarks);
        $this->InflexionUserModel->approveTutor($details);
        return back();
    }

    // SET HOBBIES FOR TUTOR
    public function setHobbies(Request $request){
        $exist = $this->TutorDetailModel::where('tutor_id', $request->id)->first();
        if($exist){
            $this->TutorDetailModel::where('tutor_id', $request->id)->update(['hobbies' => !$exist->hobbies ? $request->hobbies : $exist->hobbies."|".$request->hobbies]);
        }else{
            $this->TutorDetailModel->insertDetail($request->id, $request->hobbies, $request->tags, $request->interest, $request->about);
        }
        $finalHobbies = $this->TutorDetailModel::where('tutor_id', $request->id)->first();
            $hobbs = explode("|",$finalHobbies->hobbies);
            $tags = explode("|",$finalHobbies->tags);
        return redirect()->back()->with('hobby', $hobbs)->with('tag',$tags);
    }

    // FETCH HOBBIES FOR TUTOR
    public function fetchHobbies($id){
        $finalHobbies = $this->TutorDetailModel::where('tutor_id', $id)->first();
        $hobbs = explode("|",$finalHobbies->hobbies);
        $finalTags = $this->TutorDetailModel::where('tutor_id', $id)->first();
        $tags = explode("|",$finalTags->tags);
        return view('tutor.tutorprofile')->with('hobby', $hobbs)->with('tag',$tags);
    }

    // FETCH TUTOR PROFILE
    public function fetchProfile(){
        $finalHobbies = $this->TutorDetailModel::where('tutor_id', session()->get('info.userDetails.inflexion_user_id'))->first();
        if($finalHobbies){
            $hobbs = explode("|",$finalHobbies->hobbies);
            $tags = explode("|",$finalHobbies->tags);
        }else{
            $hobbs = [];
            $tags = [];
        }
        
        return view('tutor.tutorprofile')->with('hobby', $hobbs)->with('tag',$tags);
    }

    // SET TAGS FOR TUTOR
    public function setTags(Request $request){
        $exist = $this->TutorDetailModel::where('tutor_id', $request->id)->first();
        $this->TutorDetailModel::where('tutor_id', $request->id)->update(['tags' => !$exist->tags ? $request->tags : $exist->tags."|".$request->tags]);
        $finalTags = $this->TutorDetailModel::where('tutor_id', $request->id)->first();
        $tags = explode("|",$finalTags->tags);
        $finalHobbies = $this->TutorDetailModel::where('tutor_id', $request->id)->first();
        $hobbs = explode("|",$finalHobbies->hobbies);
        return redirect()->back()->with('tag', $tags)->with('hobby', $hobbs);
    }

    // SET CREDIT CHARGE FOR TUTOR
    public function setCreditCharge(Request $request){
        $this->TutorDetailModel->creditCharge($request->id, $request->creditCharge);
        return redirect()->back();
    }

    // FETCH TUTOR FOR STUDENT VIEW
    public function fetchTutor(){
        $sess = Session::get('info');
        $userId = $sess['userId'];
        $tutor = $this->InflexionUserModel->getAllTutors();
        $classes = $this->TutorSchedule->fetchTotalClasses();
        return view('student.studentFindTutor')->with('tutors', $tutor)->with('userId', $userId)->with('classes', $classes);
    }

    // BOOK SCHEDULE FROM STUDENT 
    public function bookSchedule(Request $request){
        $date = $request->schedule;
        $id = $request->userId; 
        $tutorId = $request->tutorId;
        $data = $this->TutorSchedule->insertSchedule($date, $id, $tutorId);

        if($data){
            $details = [
                'title' => 'Class booking from student',
                'body' => 'Congratulations! A student has booked a class with you! Please login to your profile to check the booking details.'
            ];
            $mailerFunction = 'BookingClassMail';
            $token = "bookingrequest";
            $this->SendEmail($request->username, $token, $details, $mailerFunction);
            return redirect()->back();
        }else{

        }
    }

    // GET SCHEDULES TUTOR
    public function getNotificationsTutor(){
        $userId = Session::get('info');
        $userId = $userId['userId'];
        $notification = $this->TutorSchedule->getNotifications($userId);
        return view('tutor.tutorSchedule')->with('notifs', $notification);
    }

    // GET SCHEDULES STUDENT
    public function getNotificationsStudent(){
        $userId = Session::get('info');
        $userId = $userId['userId'];
        $notification = $this->TutorSchedule->getNotificationsStudent($userId);
        return view('student.studentclasses')->with('notifs', $notification);
    }

    // APPROVE STUDENT SCHEDULE
    public function approveScheduleStudent(Request $request){
        $creditCharge = Session::get('info.creditCharge');
        $approve = $this->TutorSchedule->approveScheduleStudent($request->id, $creditCharge);
        if($approve){
            $details = [
                'title' => 'Class booking approved',
                'body' => 'Congratulations! Your class booking for ' . $request->schedule . ' has been approved. Please login to your profile to view the details of your booked class.'
            ];
            $mailerFunction = 'ApprovedBooking';
            $token = "approvebooking";
            $this->SendEmail($request->username, $token, $details, $mailerFunction);
        return redirect()->back();
        }
    }

    // DECLINE STUDENT SCHEDULE
    public function declineScheduleStudent(Request $request){
        $this->TutorSchedule->declineScheduleStudent($request->id);
        return redirect()->back();
    }

    // MARK AS DONE SCHEDULE
    public function doneScheduleStudent(Request $request){
        $charge = Session::get('info');
        $creditCharge = $charge['creditCharge'];
        $done = $this->TutorSchedule->doneScheduleStudent($request->id);
        if(isset($done->parties_approved) == 1){
            $currentCredit = $this->InflexionUserModel->insertCredit($done->student_id, ($creditCharge)*-1);
            $this->CreditTransactions->insertTransaction($done->student_id, 1, $done->tutor_id, $creditCharge, $currentCredit);
        }
        return redirect()->back();
    }

    // MODIFY STUDENT SCHEDULE
    public function modifyScheduleStudent(Request $request){
        $this->TutorSchedule->modifyScheduleStudent($request->id, $request->newSchedule);
        return redirect()->back();
    }

    // STUDENT MARK AS DONE
    public function markAsDoneStudent(Request $request){
        
        $approve = $this->TutorSchedule->doneClassStudent($request->id);
        if($approve){
            $details = [
                'title' => 'Class marked as done',
                'body' => 'Congratulations! One of your students marked your class as done!'
            ];
            $mailerFunction = 'StudentMarkDone';
            $token = "approvebooking";
            $this->SendEmail($request->username, $token, $details, $mailerFunction);
            if(isset($approve->parties_approved) == 1){
                $creditCharge = $this->TutorSchedule->where('student_id', $approve->student_id)->orderBy('created_at', 'desc')->first();
                $currentCredit = $this->InflexionUserModel->insertCredit($approve->student_id, ($creditCharge->credit_charged)*-1);
                $this->CreditTransactions->insertTransaction($approve->student_id, 1, $approve->tutor_id, $creditCharge->credit_charged, $currentCredit);
                Session::put('info.credits', $currentCredit);
            }
        return redirect()->back();
        }
    }

    //STRIPE INTEGRATION
    public function paymentIntent(Request $request){
        $this->connectToStripe();
        header('Content-Type: application/json');
        try {
            // retrieve JSON from POST body
            $jsonStr = file_get_contents('php://input');
            $jsonObj = json_decode($jsonStr, true);
            
            // Create a PaymentIntent with amount and currency
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => $this->calculateOrderAmount($jsonObj),
                'currency' => 'usd',
                'payment_method_types' => ['card'],
            ]);

            $output = [
                'clientSecret' => $paymentIntent->client_secret,
                'amount' => $paymentIntent->amount
            ];

            return json_encode($output);
        } catch (\Error $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    public function connectToStripe(){
        \Stripe\Stripe::setApiKey('sk_test_51KpWYEJS8Zj3NqcQvt4A2eT1INbYsTzzEVk69WyVT55yW75e05r3e6qvLxWQkuTDAYdahGD2W95fR54hs3XSHdoP00ZlYMGfsN');
    }

    public function calculateOrderAmount(array $items): int {
        // Replace this constant with a calculation of the order's amount
        // Calculate the order total on the server to prevent
        // people from directly manipulating the amount on the client
        $this->processPayment($items['items'][0]['transactId']);
        return $items['items'][0]['paymentAmount'];
    }

    public function processPayment($id){
        $this->StripePaymentModel->processPayment($id);
    }

    // INSERT INTO CREDIT TRANSACTION
    public function getPaymentDetails(Request $request){
        if($request->redirect_status == 'succeeded'){
            $updateCredit = $this->StripePaymentModel->finalizePayment($request->transactId, 1);
            $creditAmount = ($updateCredit->amount)*2;
            $creditSession = $this->InflexionUserModel->insertCredit($updateCredit->student_id, $creditAmount);
            $this->CreditTransactions->insertTransaction($updateCredit->student_id, 0, null, $creditAmount, $creditSession, $updateCredit->id);
            Session::put('info.credits', $creditSession);
            return redirect()->to('inflexionIndex')->with('Success','Payment successful!');
        }else{
            $this->StripePaymentModel->finalizePayment($request->transactId, 0);
            return redirect()->to('inflexionIndex')->with('Success','Payment failed');
        }
        return $request;
    }

    // FOR STUDENT WHEN INPUTTING AMOUNT
    public function initiatePayment(Request $request){
        $userId = Session::get('info');
        $userId = $userId['userId'];
        $result = $this->StripePaymentModel->initiatePayment($userId, $request->amount);
        // $amount = $request->creditAmount/100;
        // if($amount >= 50){
            $data = [
                'amount' => ($result->amount)*100,
                'currency' => "$",
                'transact_id' => $result->id
            ];
            // dd($data['amount']);
            return view('student.checkout')->with('data', $data);
        // }else{
        //     return "Invalid amount";
        // }
        
    }

    // ADMIN VIEW ALL TRANSACTIONS
    public function viewAllTutorClassTransactions(){
        $total = 0;
        $name = "";
        $tutorSummary = $this->CreditTransactions->join('inflexion_user_details','inflexion_detail_id','=','tutor_id')->select('credit_amount','tutor_id','inflexion_detail_last')->get();
        return count($tutorSummary);
    }
}
