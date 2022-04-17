<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class TutorSchedule extends Model
{
    //
    protected $connection = "mysql";
    protected $table = "tutor_schedules";
    public $timestamps = false;
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
}
