<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Model\InflexionUserModel;
use App\Http\Model\InflexionDetailModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;
use App\Mail\CompleteRegistryMail;
use Hash;
use Session;

class InflexionController extends Controller
{
    public $InflexionUserModel;
    public $InflexionDetailModel;
    public function __construct(InflexionUserModel $InflexionUserModel, InflexionDetailModel $InflexionDetailModel){
        $this->InflexionUserModel = $InflexionUserModel;
        $this->InflexionDetailModel = $InflexionDetailModel;
    }

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
            if($login){
                return view('completeprofile')->with('Details', $login);
            }
            return $login;
        }
    }

    //LOGOUT FUNCTION
    public function LogoutUser(){
        Session::flush();
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
        return 'You have successfully created your account! You are now able to access all the features of Inflexion Global! Thank you!';
       }else{
        return 'Account creation failed';
       }
    }
}
