<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Session;

class InflexionUserModel extends Model
{
    protected $connection = "mysql";
    protected $table = "inflexion_users";
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'inflexion_user_id';
    protected $fillable = [
      'inflexion_username',
      'inflexion_user_pass',
      'inflexion_user_type',
      'inflexion_user_status'
    ];


    public function saveRegistry($request, $token){
        $password = Hash::make($request->password);
        $checkUsername = $this->where('inflexion_username','=',$request->username)->first();

        if($checkUsername){
            return false;
        }else{
            $saveReg = $this;
            $saveReg->inflexion_username = $request->username;
            $saveReg->inflexion_user_pass = $password;
            $saveReg->inflexion_user_type = $request->type;
            $saveReg->inflexion_user_status = 0;
            $saveReg->inflexion_user_token = $token;
                if($saveReg->save()){
                    return true;
                }else{
                    return false;
                }
        }
    }


    public function verifyRegistry($request){
        $checkInfo = $this->where('inflexion_username','=',$request->val)->first();
        
        if($checkInfo->inflexion_user_status == 0){
            $updateInfo = $this->where('inflexion_username','=',$request->val)->update(['inflexion_user_status' => 1, 'inflexion_user_token' => 'Validated']);
                if($updateInfo){
                    return "Successfully verified!";
                }else{
                    return "Failed to verify account";
                }
        }else{
            return "Account has already been verified. Please login.";
        }
                
    }


    public function checkLogin($request){
        $check = $this->where('inflexion_username','=',$request->username)->first();

        if($check){
            if(Hash::check($request->password, $check->inflexion_user_pass)){
                return $check;
            }else{
                return "Invalid username/password";
            }
        }else{
            return 'User not found';
        }
    }

}
