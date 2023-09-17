<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class TutorSchedule extends Model
{
    //
    protected $connection = "mysql";
    protected $table = "tutor_schedules";
    public $timestamps = true;
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
      'tutor_id',
      'student_id',
      'schedule',
      'read',
      'status',
      'created_at',
      'updated_at',
      'credit_charged'
    ];

    public function insertSchedule($date, $id, $tutorId){
        $insert = $this->firstOrCreate([
            'tutor_id' => $tutorId,
            'student_id' => $id,
            'schedule' => $date,
            'status' => false
        ]);
        return $insert;
    }

    public function getNotifications($id){
        $result = $this->join('inflexion_user_details','inflexion_detail_id','=','student_id')->join('inflexion_users', 'inflexion_user_id', '=', 'student_id')->where('tutor_id', $id)->orderBy('schedule','desc')->get();
        return $result;
    }

    public function getNotificationsStudent($id){
        $result = $this->join('inflexion_user_details','inflexion_detail_id','=','student_id')->join('inflexion_users','inflexion_user_id','=','tutor_id')->where('student_id', $id)->orderBy('schedule', 'desc')->get();
        return $result;
    }

    public function approveScheduleStudent($id, $credit){
        $result = $this->where('id', $id)->update(['read' => 1, 'status'=> 1, 'credit_charged' => $credit]);
        return $result;
    }

    public function declineScheduleStudent($id){
        $this->where('id', $id)->update(['read' => 1, 'status'=> 2]);
    }

    public function doneScheduleStudent($id){
        $result = $this->where('id', $id)->update(['read' => 1, 'status'=> 3]);
        $parties = $this->where('id', $id)->orderBy('created_at', 'desc')->first();
        if($parties->status == 3 && $parties->student_status == 1){
            $this->where('id', $id)->update(['parties_approved' => 1, 'status' => 4]);
            $result = $this->where('id', $id)->orderBy('created_at', 'desc')->first();
            return $result;
        }
        return $result;
    }

    public function modifyScheduleStudent($id, $sched){
        $this->where('id', $id)->update(['schedule' => $sched]);
    }

    public function doneClassStudent($id){
        $result = $this->where('id', $id)->update(['student_status'=> 1]);
        $parties = $this->where('id', $id)->orderBy('created_at', 'desc')->first();
        if($parties->status == 3 && $parties->student_status == 1){
            $this->where('id', $id)->update(['parties_approved' => 1, 'status' => 4]);
            $result = $this->where('id', $id)->orderBy('created_at', 'desc')->first();
            return $result;
        }
        return $result;

    }

    public function fetchTotalClasses(){
        $allClasses = $this->join('inflexion_users','inflexion_user_id','=','tutor_id')->where('parties_approved',1)->orderBy('tutor_id')->get();
        return $allClasses;
    }

    public function creditsEarned($id){
        $credits = $this->where('tutor_id', $id)->where('paid',null)->get();
        return $credits;
    }

    public function getSchedule($id){
        $sched = $this->join('inflexion_user_details','inflexion_detail_id','=','student_id')->where('tutor_id',$id)->get();
        return $sched;
    }
}
