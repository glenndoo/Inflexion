<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class InflexionQuestionsModel extends Model
{
    protected $connection = "mysql";
    protected $table = "inflexion_test_questions";
    public $timestamps = true;
    public $incrementing = false;
    protected $primaryKey = 'inflexion_test_id';
    protected $fillable = [
      'inflexion_test_quest'
    ];


    public function fetchQuestions(){
        $questions = $this->inRandomOrder()->limit(30)->get();
        return $questions;
    }

}