<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class CreditTransactions extends Model
{
    //
    protected $connection = "mysql";
    protected $table = "credit_transactions";
    public $timestamps = true;
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
      'student_id',
      'transaction_type',
      'tutor_id',
      'credit_amount',
      'current_credit',
      'stripe_id'
    ];

    public function insertTransaction($id, $transactionType, $tutor = null, $creditAmount, $currentCredit, $stripeId = null){
        $this->create([
            'student_id' => $id,
            'transaction_type' => $transactionType,
            'current_credit' => $currentCredit,
            'credit_amount' => $creditAmount,
            'tutor_id' => $tutor,
            'stripe_id' => $stripeId
        ]);
    }
}
