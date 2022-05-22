<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class ExamScheduleModel extends Model
{
    protected $connection = "mysql";
    protected $table = "exam_schedule";
    public $timestamps = true;
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
      'tutor_id',
      'skype_account',
      'interview_status',
      'created_at',
      'updated_at'
    ];

    public function insertSched($data, $id){
        $this->firstOrCreate(['skype_account' => $data->skypeAccount],[
          'tutor_id' => $id,
          'skype_account' => $data->skype_account,
          'interview_status' => 0
        ]);
    }

    public function updateInterviewStatus($id, $remarks){
      $this->where('tutor_id', $id)->update(['interview_status' => '3', 'remarks' => $remarks]);
    }
}
