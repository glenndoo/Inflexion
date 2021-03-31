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
        $status = 0;
        $checkInfo = $this->where('inflexion_username','=',$request->val)->first();
        // dd($checkInfo);
        if(Hash::check($request->val,$request->vry) && $request->token == $checkInfo->inflexion_user_token){
            if($checkInfo->inflexion_user_status == 0 && $checkInfo->inflexion_user_token == $request->token){
                $updateInfo = $this->where('inflexion_username','=',$request->val)->update(['inflexion_user_status' => 1, 'inflexion_user_token' => 'Validated']);
                    if($updateInfo){
                        $status = 1;
                        return $status;
                    }else{
                        $status = 2;
                        return $status;
                    }
            }else{
                $status = 3;
                return $status;
            }
        }else{
            return $status;
        }
        
                
    }


    public function checkLogin($request){
        $findUser = $this->where('inflexion_username','=',$request->username)->first();
        $status = 0;
        if($findUser->inflexion_user_status == 0){
            return $findUser;
        }else if($findUser->inflexion_user_status == 1){
            $check = $this->where('inflexion_username','=',$request->username)->first();
            return $check;
        }else{
            if($findUser){
                $check = $this->join('inflexion_user_details','inflexion_detail_id','=','inflexion_user_id')->where('inflexion_username','=',$request->username)->first();
            if($check != null){
                if(Hash::check($request->password, $check->inflexion_user_pass)){
                    return $check;
                }else{
                    return $check;
                }
            }
            }else{
                return $check;
            }
        }
        
        
    }


    public function findUserEmail($request){
        $find = $this->where('inflexion_username','=',$request)->first();

        if($find){
            return $find;
        }else{
            return false;
        }
    }

}
