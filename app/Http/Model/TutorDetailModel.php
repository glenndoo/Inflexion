<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class TutorDetailModel extends Model
{
    //
    protected $connection = "mysql";
    protected $table = "tutor_detail_models";
    public $timestamps = true;
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
      'tutor_id',
      'hobbies',
      'tags',
      'interests',
      'about_me',
      'credit_charge'
    ];

    public function creditCharge($id, $amount){
      $this->where("tutor_id", $id)->update([
        'credit_charge' => $amount
      ]);
    }

    public function insertDetail($id, $hobbs = null, $tags = null, $intrs = null, $about = null){
      $details = $this::create([
        'tutor_id' => $id,
        'hobbies' => $hobbs,
        'tags' => $tags,
        'interests' => $intrs,
        'about_me' => $about,
      ]);
    }
}
