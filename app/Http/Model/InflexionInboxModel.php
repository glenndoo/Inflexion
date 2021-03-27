<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Session;

class InflexionInboxModel extends Model
{
    protected $connection = "mysql";
    protected $table = "inflexion_inbox";
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'inflexion_inbox_id';
    protected $fillable = [
      'inflexion_inbox_owner',
      'inflexion_inbox_message'
    ];


    public function fetchAllMessages($request){
        $fetchMessage = $this->where('inflexion_inbox_owner','=',$request->session()->get('info.userId'))->get();
        return $fetchMessage;
    }
}