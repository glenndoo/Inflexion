<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class InflexionQuestionsModel extends Model
{
    protected $connection = "mysql";
    protected $table = "inflexion_test_questions";
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'inflexion_test_id';
    protected $fillable = [
      'inflexion_test_quest'
    ];


    public function fetchQuestions(){
        $questions = $this->join('inflexion_test_answers','inflexion_answer_test','=','inflexion_test_id')->get();
        return $questions;
    }
}