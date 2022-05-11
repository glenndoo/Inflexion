<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
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
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;
use App\Mail\CompleteRegistryMail;
use App\Mail\TutorRegisterMail;
use App\Mail\TutorInterviewMail;
use App\Mail\BookingClassMail;
use App\Mail\ApprovedBookingMail;
use App\Mail\StudentMarkDoneMail;
use Hash;
use Illuminate\Support\Facades\DB;
use Session;
use Monarobase\CountryList\CountryListFacade;

class InflexionController extends Controller
{
    public $InflexionUserModel;
    public $InflexionDetailModel;
    public $InflexionPostModel;
    public $InflexionInboxModel;
    public $InflexionQuestionsModel;
    public $InflexionAnswersModel;
    public $CommentsModel;
    public $ExamScheduleModel;
    public $TutorDetailModel;
    public $TutorSchedule;
    public $StripePaymentModel;
    public function __construct(InflexionUserModel $InflexionUserModel, InflexionDetailModel $InflexionDetailModel, InflexionPostModel $InflexionPostModel, InflexionInboxModel $InflexionInboxModel, InflexionQuestionsModel $InflexionQuestionsModel, InflexionAnswersModel $InflexionAnswersModel, CommentsModel $CommentsModel, ExamScheduleModel $ExamScheduleModel, TutorDetailModel $TutorDetailModel, TutorSchedule $TutorSchedule, StripePaymentModel $StripePaymentModel){
        $this->InflexionUserModel = $InflexionUserModel;
        $this->InflexionDetailModel = $InflexionDetailModel;
        $this->InflexionPostModel = $InflexionPostModel;
        $this->InflexionInboxModel = $InflexionInboxModel;
        $this->InflexionQuestionsModel = $InflexionQuestionsModel;
        $this->InflexionAnswersModel = $InflexionAnswersModel;
        $this->CommentsModel = $CommentsModel;
        $this->ExamScheduleModel = $ExamScheduleModel;
        $this->TutorDetailModel = $TutorDetailModel;
        $this->TutorSchedule = $TutorSchedule;
        $this->StripePaymentModel = $StripePaymentModel;
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
        $Valid = Validator::make($request->all(),[
            'username' => 'required',
            'password' => 'required'
        ]);
        if($Valid->fails()){
            
        }else{
            if(isset($request->details) && !empty($request->retake == 1)){
                // dd($request->details['inflexion_username']);
                $dts = $this->InflexionUserModel->findUserEmail($request->details['inflexion_username']);
                return $dts;
            }else{
                $login = $this->InflexionUserModel->checkLogin($request);
                // CHECK RETURN STATUS
                if(isset($login->inflexion_user_status) && $login->inflexion_user_status == 0){
                    return view('/login')->with('Errors','Please check your email to verify your account'); //changed return "Please check your email to verify your account"; -maiko
    
                }else if(isset($login->inflexion_user_status) && $login->inflexion_user_status == 1){
    
                    // CHECK USER TYPE
                    if($login->inflexion_user_type == 1){
                        $countries = CountryListFacade::getList('en');
                        return view('completeprofile')->with('Details', $login)->with('Countries', $countries);
                    
                    // FIRST TIME TAKING THE EXAM
                    }else if($login->inflexion_user_type == 2 && $login->inflexion_user_tutor == 0){
                        $Questions = $this->FetchQuestions();
                        $Answers = $this->FetchAnswers();
                        $take = $login->inflexion_user_take;
                        $this->InflexionUserModel->insertTake($take, $login->inflexion_user_id);
                        $checkTake = $this->InflexionUserModel->findUserEmail($login->inflexion_username);
                        if($checkTake->inflexion_user_take <= 3){
                            return view('tutorexam')->with('Details', $login)->with('Questions', $Questions)->with('Answers', $Answers);
                        }else{
                            return view('welcome')->with('Success','You have already exceeded the maximum number of attempts.');
                        }
                    // FOR NTH TAKER
                    }else if($login->inflexion_user_type == 2 && $login->inflexion_user_tutor > 0){
                        $Questions = $this->FetchQuestions();
                        $Answers = $this->FetchAnswers();
                        $take = $login->inflexion_user_take;
                        $this->InflexionUserModel->insertTake($take, $login->inflexion_user_id);
                        $checkTake = $this->InflexionUserModel->findUserEmail($login->inflexion_username);
                        if($checkTake->inflexion_user_take <= 3){
                            return view('tutorexam')->with('Details', $login)->with('Questions', $Questions)->with('Answers', $Answers);
                        }else{
                            return view('welcome')->with('Success','You have already exceeded the maximum number of attempts.');
                        }
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
                            return view('welcome')->with('Success','Sorry, but you have already exceeded the maximum number of attempts to retake the exam');
                        }
                // IF USER IS VALID
                }else{
                        $sess = [
                            'status' => $login->inflexion_user_type,
                            'userId' => $login->inflexion_user_id,
                            'userName' => $login->inflexion_username,
                            'userWholeName' => $login->inflexion_detail_first.' '.$login->inflexion_detail_last,
                            'userDetails' => $login,
                            'credits' => $login->credits
                        ];
                        $request->session()->put('info', $sess);
                        if($login->inflexion_user_type == 1){
                            return redirect('/studentIndex');
                        }elseif($login->inflexion_user_type == 0){//added by maiko for testing admin
                            return redirect('/adminIndex');
                        }else{
                            return view('tutor.tutorindex');
                        }
                        
                    
                }
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
           }else if($complete->inflexion_user_type == 2){
            $details = [
                'title' => 'Inflexion Global Tutor Profile Completion',
                'body' => 'You have successfully created your account! ',
            ];
            $mailerFunction = 'CompleteRegistryMail';
            $token = "";
                $this->SendEmail($request->email, $token, $details, $mailerFunction);
            $details = $this->InflexionUserModel->fetchUserDetails($request->email);
            return view('tutorExamResult')->with('Details', $details)->with('skype',$request->skypeAccount);
           }
        
       }else{
        return view('welcome')->with('Errors','Account creation failed');
       }
    }

    //CREATE POST FUNCTION
    public function PostMessage(Request $request){
        $savePost = $this->InflexionPostModel->insertPost($request);
        
        if($savePost){
            return redirect('/studentIndex');
        }else{
            return "Post failed";
        }
    }

    //DELETE POST FUNCTION
    public function DeletePost(Request $request, $id){
        $deletePost = $this->InflexionPostModel->deletePost($id);

        if($deletePost){
            return redirect('/studentIndex')->with('Success','Successfully deleted post');
        }else{
            return redirect('/studentIndex')->with('Errors','Failed to delete post');
        }
    }

    //LIKE POST FUNCTION
    public function LikePost(Request $request, $id){
        $likePost = $this->InflexionPostModel->likePost($request, $id);

        return redirect('/studentIndex');
    }

    //COMMENT ON POST FUNCTION
    public function CommentPost(Request $request){
        $commentPost = $this->CommentsModel->addComment($request);
        return redirect('/studentIndex');
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
        
        if($total >= 70){
            return view('completeprofile')->with('Results',$total)->with('Details', json_decode(json_encode($details)))->with('Countries', $countries);
        }else{
            return view('tutorExamFailed')->with('Details',"You got ".$total."% out of 100%. Don't worry! You still have ".(3-$checkUserTake->inflexion_user_take)." attempt/s left out of 3.")->with('info',$details);
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
            return view('welcome')->with('Success','You have already exceeded the maximum number of attempts.');
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
        $this->InflexionUserModel->approveTutor($details);
        return back();
    }

    // SET HOBBIES FOR TUTOR
    public function setHobbies(Request $request){
        $exist = $this->TutorDetailModel::where('tutor_id', $request->id)->first();
        $this->TutorDetailModel::where('tutor_id', $request->id)->update(['hobbies' => !$exist->hobbies ? $request->hobbies : $exist->hobbies."|".$request->hobbies]);
        $finalHobbies = $this->TutorDetailModel::where('tutor_id', $request->id)->first();
        $hobbs = explode("|",$finalHobbies->hobbies);
        $finalTags = $this->TutorDetailModel::where('tutor_id', $request->id)->first();
        $tags = explode("|",$finalTags->tags);
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
        $hobbs = explode("|",$finalHobbies->hobbies);
        $finalHobbies = $this->TutorDetailModel::where('tutor_id', session()->get('info.userDetails.inflexion_user_id'))->first();
        $tags = explode("|",$finalHobbies->tags);
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

    // FETCH TUTOR FOR STUDENT VIEW
    public function fetchTutor(){
        $sess = Session::get('info');
        $userId = $sess['userId'];
        $tutor = $this->InflexionUserModel->getAllTutors();
        $hobbies = $this->InflexionUserModel->getTutorHobbies();
        return view('student.studentFindTutor')->with('tutors', $tutor)->with('hobbies', $hobbies)->with('userId', $userId);
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
        $approve = $this->TutorSchedule->approveScheduleStudent($request->id);
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
        $this->TutorSchedule->doneScheduleStudent($request->id);
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
        } catch (Error $e) {
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

    public function getPaymentDetails(Request $request){
        if($request->redirect_status == 'succeeded'){
            $updateCredit = $this->StripePaymentModel->finalizePayment($request->transactId, 1);
            $creditAmount = ($updateCredit->amount/100)*2;
            $creditSession = $this->InflexionUserModel->insertCredit($updateCredit->student_id, $creditAmount);
            Session::put('info.credits', $creditSession);
            return redirect()->to('studentIndex')->with('Success','Payment successful!');
        }else{
            $this->StripePaymentModel->finalizePayment($request->transactId, 0);
            return redirect()->to('studentIndex')->with('Success','Payment failed');
        }
        return $request;
    }

    public function initiatePayment(Request $request){
        $userId = Session::get('info');
        $userId = $userId['userId'];
        $result = $this->StripePaymentModel->initiatePayment($userId, $request->amount);
        // $amount = $request->creditAmount/100;
        // if($amount >= 50){
            $data = [
                'amount' => $result->amount,
                'currency' => "$",
                'transact_id' => $result->id
            ];
            return view('student.checkout')->with('data', $data);
        // }else{
        //     return "Invalid amount";
        // }
        
    }
}
