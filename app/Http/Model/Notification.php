<?php

namespace App\Http\Model;

use App\Http\Model\InflexionUserModel;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    protected $connection = "mysql";
    protected $table = "notifications";
    public $timestamps = true;
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
      'user_id',
      'recipient_id',
      'message',
      'type',
      'data',
      'created_at',
      'updated_at'
    ];

    public function user(){
        return $this->belongsTo(InflexionUserModel::class);
    }
}
