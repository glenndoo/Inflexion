<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class ExamScheduleModel extends Model
{
    protected $connection = "mysql";
    protected $table = "exam_schedule";
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
      'tutor_id',
      'skype_account',
      'created_at',
      'updated_at'
    ];

    public function insertSched($data, $id){
        $insert = $this;
        $insert->tutor_id = $id;
        $insert->skype_account = $data->skypeAccount;
        $insert->save();
    }
}
