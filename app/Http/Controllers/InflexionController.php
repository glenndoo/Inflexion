<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Model\InflexionUserModel;
use App\Http\Model\InflexionDetailModel;
use App\Http\Model\InflexionPostModel;
use App\Http\Model\InflexionInboxModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;
use App\Mail\CompleteRegistryMail;
use Hash;
use Session;
use Monarobase\CountryList\CountryListFacade;

class InflexionController extends Controller
{
    public $InflexionUserModel;
    public $InflexionDetailModel;
    public $InflexionPostModel;
    public $InflexionInboxModel;
    public function __construct(InflexionUserModel $InflexionUserModel, InflexionDetailModel $InflexionDetailModel, InflexionPostModel $InflexionPostModel, InflexionInboxModel $InflexionInboxModel){
        $this->InflexionUserModel = $InflexionUserModel;
        $this->InflexionDetailModel = $InflexionDetailModel;
        $this->InflexionPostModel = $InflexionPostModel;
        $this->InflexionInboxModel = $InflexionInboxModel;
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
            'password' => 'required'
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
            $details = [
                'title' => 'Inflexion Global Registration',
                'body' => 'Congratulations! You have successfully registered an account with Inflexion Global. To fully verify your account and utilize all our services, please click the link below.',
                'token' => $token,
                'email' => Hash::make($request->username),
                'valid' => $request->username
            ];
            $mailerFunction = 'RegisterMail';
            $this->SendEmail($request->username, $token, $details, $mailerFunction);
            return view('welcome')->with('Success','Successfully registered! Please check your email to verify your account');
        }else{
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
                    return view('welcome')->with('Error','Cannot verify account');
                }else if($check == 3){
                    return view('welcome')->with('Error',"Account is already verified, please log in to your account");
                }else{
                    return view('welcome')->with('Error',"Invalid Verifcation Link");
                }
                
                
        }
    }


    //EMAILER FUNCTION
    public function SendEmail($email, $token, $details, $mailFunction){
        if($mailFunction == "RegisterMail"){
           Mail::to($email)->send(new RegisterMail($details));
        }else if($mailFunction == "CompleteRegistryMail"){
            Mail::to($email)->send(new CompleteRegistryMail($details));
        }else{

        }
           
    }


    //LOGIN FUNCTION
    public function LoginUser(Request $request){
        $Valid = Validator::make($request->all(),[

        ]);

        if($Valid->fails()){

        }else{
            $login = $this->InflexionUserModel->checkLogin($request);

            if(!$login){
                return view('/login')->with('Errors','Username not found'); //changed from return redirect()->back()->with('Errors','Username not found'); -maiko
            }else{
                if($login->inflexion_user_status == 1){
                    $countries = CountryListFacade::getList('en');
                    return view('completeprofile')->with('Details', $login)->with('Countries', $countries);
                }else if($login->inflexion_user_status == 0){
                    return view('/login')->with('Errors','Please check your email to verify your account'); //changed return "Please check your email to verify your account"; -maiko
                }else{
                    $sess = [
                        'status' => $login->inflexion_user_type,
                        'userId' => $login->inflexion_user_id,
                        'userName' => $login->inflexion_username,
                        'userWholeName' => $login->inflexion_detail_first.' '.$login->inflexion_detail_last
                    ];
                    $request->session()->put('info', $sess);
                    return redirect('/studentIndex');
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
       if($complete){
        $details = [
            'title' => 'Inflexion Global Profile Completion',
            'body' => 'You have successfully created your account! You are now able to access all the features of Inflexion Global! Thank you!',
        ];
        $mailerFunction = 'CompleteRegistryMail';
        $token = "";
            $this->SendEmail($request->email, $token, $details, $mailerFunction);
        return view('welcome')->with('Success','You have successfully created your account! You are now able to access all the features of Inflexion Global! Thank you!');
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
            return view('student.studentinbox')->with('Messages', $messages)->with('SentCount',count($sent))->with('Sent',$sent)->with('Success', 'Message sent successfully!');
        }else if($sendMessage == 1){
            return view('student.studentinbox')->with('Messages', $messages)->with('SentCount',count($sent))->with('Sent',$sent)->with('Errors', 'Failed to send message');
        }else{
            return view('student.studentinbox')->with('Messages', $messages)->with('SentCount',count($sent))->with('Sent',$sent)->with('Errors', 'Receipient not found');
        }
    }


    public function FetchSentMessages(Request $request){
        $fetchSent = $this->InflexionInboxModel->fetchSentMessages($request);

        return redirect()->back()->with('Sent', $fetchSent);
    }

}
