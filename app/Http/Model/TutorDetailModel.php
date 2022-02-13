<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class TutorDetailModel extends Model
{
    //
    protected $connection = "mysql";
    protected $table = "tutor_detail_models";
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
      'tutor_id',
      'hobbies',
      'tags',
      'interests',
      'about_me',
    ];
}
