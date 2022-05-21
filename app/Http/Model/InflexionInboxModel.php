<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Session;
use Carbon\Carbon;

class InflexionInboxModel extends Model
{
    protected $connection = "mysql";
    protected $table = "inflexion_inbox";
    public $timestamps = true;
    public $incrementing = false;
    protected $primaryKey = 'inflexion_inbox_id';
    protected $fillable = [
      'inflexion_inbox_owner',
      'inflexion_inbox_subject',
      'inflexion_inbox_message',
      'inflexion_inbox_rcpt',
      'inflexion_inbox_date',
      'inflexion_inbox_read',
      'inflexion_inbox_type'
    ];

    public function fetchAllMessages($request){
        $fetchMessage = $this->join('inflexion_users','inflexion_user_id','=','inflexion_inbox_rcpt')->join('inflexion_user_details','inflexion_detail_id','=','inflexion_inbox_rcpt')->where('inflexion_user_id','=',$request->session()->get('info.userId'))->orderBy('inflexion_inbox_date','desc')->get();
        return $fetchMessage;
    }

    public function sendMessage($request){
        $clientDetails = new InflexionUserModel;
        $checkUser = $clientDetails->findUserEmail($request->rcpt);
        $status = 0;
        if($checkUser){
            $sendMsg = $this;

            $sendMsg->inflexion_inbox_owner = $request->session()->get('info.userId');
            $sendMsg->inflexion_inbox_message = $request->message;
            $sendMsg->inflexion_inbox_subject = $request->subject;
            $sendMsg->inflexion_inbox_rcpt = $checkUser->inflexion_user_id;
            $sendMsg->inflexion_inbox_date = Carbon::now();
            $sendMsg->inflexion_inbox_read = 0;
            $sendMsg->inflexion_inbox_type = 1;
            
            if($sendMsg->save()){
                return $status;
            }else{
                $status = 1;
                return $status;
            }
        }else{
            $status = 2;
            return $status;
        }
    }


    public function fetchSentMessages($request){
        $fetch = $this->join('inflexion_users','inflexion_user_id','=','inflexion_inbox_rcpt')->join('inflexion_user_details','inflexion_detail_id','=','inflexion_user_id')->where('inflexion_inbox_owner','=',$request->session()->get('info.userId'))->orderBy('inflexion_inbox_date','desc')->get();
        return $fetch;
    }

    public function showMessage($id){
        $show = $this->where('inflexion_inbox_id','=',$id)->first();
        return $show;
    }

    public function deleteMessage($id){
        $delete = $this->where('inflexion_inbox_id','=',$id)->delete();

        if($delete){
            return true;
        }else{
            return false;
        }
    }
}