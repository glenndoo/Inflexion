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
      'created_at',
      'updated_at',
    ];
}
