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
      'inflexion_user_status',
      'inflexion_user_token',
      'inflexion_user_tutor',
      'inflexion_user_take'
    ];


    public function saveRegistry($request, $token){
        $password = Hash::make($request->password);
        $checkUsername = $this->where('inflexion_username','=',$request->username)->first();

        if($checkUsername){
            return false;
        }else{
            $saveReg = $this;
            $saveReg->inflexion_username = strtolower($request->username);
            $saveReg->inflexion_user_pass = $password;
            $saveReg->inflexion_user_type = $request->type;
            $saveReg->inflexion_user_status = 0;
            $saveReg->inflexion_user_token = $token;
            if($request->type == 2){
                $saveReg->inflexion_user_tutor = 0;
            }
            if($request->type == 2){
                $saveReg->inflexion_user_take = 0;
            }
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
        if(Hash::check($request->val,$request->vry) && $request->token == $checkInfo->inflexion_user_token && $checkInfo->inflexion_user_status == 0){
                    $updateInfo = $this->where('inflexion_username','=',$request->val)->update(['inflexion_user_status' => 1, 'inflexion_user_token' => 'Validated']);
                    if($updateInfo){
                        $status = 1;
                        return $status;
                    }else{
                        $status = 2;
                        return $status;
                    }
        }else if($checkInfo->inflexion_user_status == 1){
            
            $status = 3;
            return $status;
        }else if($checkInfo->inflexion_user_status == 2){
            $status = 3;
            return $status;
        }else{
            // dd($status);
            return $status;
        }
        
                
    }


    public function checkLogin($request){
        $findUser = $this->where('inflexion_username','=',$request->username)->first();
        $status = 0;
        // dd($findUser);
        if(!empty($findUser)){
            
            // IF USER HAS NOT YET VERIFIED THEIR EMAIL
            if($findUser->inflexion_user_status == 0){
                return $findUser;

            // IF USER HAS ALREADY COMPLETED THE REGISTRATION PROCESS
            }else if($findUser->inflexion_user_status == 2){
                    $check = $this->join('inflexion_user_details','inflexion_detail_id','=','inflexion_user_id')->where('inflexion_username','=',$request->username)->first();
                
                if($check != null){
                    // IF USER ENTERED VALID CREDENTIALS
                    if(Hash::check($request->password, $check->inflexion_user_pass)){
                        return $check;

                    // IF USER ENTERED INVALID CREDENTIALS
                    }else{
                        $status = 3;
                        return $status;
                    }
                }
            
            // IF USER HAS NOT COMPLETED THEIR REGISTRATION YET
            }else if($findUser->inflexion_user_status == 1){
                return $findUser;
            }else if($findUser->inflexion_user_status == 3){
                return $findUser;
            }
        
        // IF USERNAME WAS NOT FOUND
        }else{
            $status = 4;
            return $status;
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

    public function verifyTutorRegistry($request){
        $status = 0;
        $checkInfo = $this->where('inflexion_username','=',$request->val)->first();
        // dd($checkInfo);
        if(Hash::check($request->val,$request->vry) && $request->token == $checkInfo->inflexion_user_token){
            if($checkInfo->inflexion_user_status == 0 && $checkInfo->inflexion_user_token == $request->token && $checkInfo->inflexion_user_tutor == 0){
                if(empty($checkInfo->inflexion_)){
                    $updateInfo = $this->where('inflexion_username','=',$request->val)->update(['inflexion_user_status' => 1, 'inflexion_user_token' => 'Validated']);
                    if($updateInfo){
                        $status = 1;
                        return $status;
                    }else{
                        $status = 2;
                        return $status;
                    }
                }else{

                }
                
            }else{
                $status = 3;
                return $status;
            }
        }else{
            return $status;
        }
    }

    public function userScore($score, $id){
        $this->where('inflexion_user_id','=',$id)->update(['inflexion_user_tutor' => $score]);
    }

    public function insertTake($take, $id){
        $take = $take + 1;
        $result = $this->where('inflexion_user_id','=',$id)->update(['inflexion_user_take' => $take]);
    }

    public function updateTake($take, $id){
        $take = $take + 1;
        $result = $this->where('inflexion_user_id','=',$id)->update(['inflexion_user_take' => $take]);
    }

    public function fetchUserDetails($userName){
        $result = $this->join('inflexion_user_details','inflexion_detail_id','=','inflexion_user_id')->where('inflexion_username','=',$userName)->first();
        return $result;
    }
}
