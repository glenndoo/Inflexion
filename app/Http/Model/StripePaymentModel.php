<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class StripePaymentModel extends Model
{
    //
    protected $connection = "mysql";
    protected $table = "stripe_payment_models";
    public $timestamps = true;
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
      'student_id',
      'amount',
      'status',
      'currency',
      'created_at',
      'update_at'
    ];

    public function initiatePayment($id, $amount){
        $this::create([
            'student_id' => $id,
            'amount' => $amount,
        ]);
        $insertTransaction = $this->where('student_id', $id)->orderBy('created_at', 'desc')->first();
        return $insertTransaction;
    }

    public function processPayment($id){
        $process = $this::find($id);
        $process->status = "Pending";
    }

    public function finalizePayment($id, $status){
        $transaction = $this::find($id)->orderBy('created_at','desc')->first();
        if($status == 1){
            $transaction->status = "Success";
        }else{
            $transaction->status = "Failed";
        }
        $transaction->save();
        return $transaction;
    }
}
