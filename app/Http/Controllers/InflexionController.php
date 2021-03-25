<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Model\InflexionUserModel;
use App\Http\Model\InflexionDetailModel;
use App\Http\Model\InflexionPostModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;
use App\Mail\CompleteRegistryMail;
use Hash;
use Session;

class InflexionController extends Controller
{
    public $InflexionUserModel;
    public $InflexionDetailModel;
    public $InflexionPostModel;
    public function __construct(InflexionUserModel $InflexionUserModel, InflexionDetailModel $InflexionDetailModel, InflexionPostModel $InflexionPostModel){
        $this->InflexionUserModel = $InflexionUserModel;
        $this->InflexionDetailModel = $InflexionDetailModel;
        $this->InflexionPostModel = $InflexionPostModel;
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
            return view('welcome')->with('Success','Successfully registered!');
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
        ]);

        if($Valid->fails()){
            return view('welcome');
        }else{
            if(Hash::check($request->val,$request->vry)){
                $check = $this->InflexionUserModel->verifyRegistry($request);
                return $check;
            }else{
                return "Invalid link.";
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
                    return view('completeprofile')->with('Details', $login);
                }else if($login->inflexion_user_status == 0){
                    return view('/login')->with('Errors','Please check your email to verify your account'); //changed return "Please check your email to verify your account"; -maiko
                }else{
                    $sess = [
                        'status' => $login->inflexion_user_type,
                        'userId' => $login->inflexion_user_id
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
        return view('welcome');
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
        return 'Account creation failed';
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
}
