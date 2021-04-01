<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class InflexionAnswersModel extends Model
{
    protected $connection = "mysql";
    protected $table = "inflexion_test_answers";
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'inflexion_answer_id';
    protected $fillable = [
      'inflexion_answer_choice',
      'inflexion_answer_test',
      'inflexion_answer_value'
    ];


    public function fetchAnswers (){
        $answers = $this->get();
        return $answers;
    }

}