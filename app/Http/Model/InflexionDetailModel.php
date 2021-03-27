<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use App\Http\Model\InflexionUserModel;

class InflexionDetailModel extends Model
{
    protected $connection = "mysql";
    protected $table = "inflexion_user_details";
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'inflexion_detail_id';
    protected $fillable = [
      'inflexion_detail_first',
      'inflexion_detail_middle',
      'inflexion_detail_last',
      'inflexion_detail_street',
      'inflexion_detail_city',
      'inflexion_detail_state',
      'inflexion_detail_country',
      'inflexion_detail_zip',
      'inflexion_detail_contact',
      'inflexion_detail_birth'
    ];
    public $InflexionUserModel;

    public function __construct(InflexionUserModel $InflexionUserModel){
        $this->InflexionUserModel = $InflexionUserModel;
    }

    public function completeRegistration($request){
        $save = $this;
        $save->inflexion_detail_id = $request->id;
        $save->inflexion_detail_first = $request->firstName;
        $save->inflexion_detail_middle = $request->middleName;
        $save->inflexion_detail_last = $request->lastName;
        $save->inflexion_detail_street = $request->street;
        $save->inflexion_detail_city = $request->city;
        $save->inflexion_detail_state = $request->state;
        $save->inflexion_detail_country = $request->country;
        $save->inflexion_detail_zip = $request->zipCode;
        $save->inflexion_detail_contact = $request->contactNumber;
        $save->inflexion_detail_birth = $request->dateOfBirth;

        if($save->save()){
            $this->InflexionUserModel->where('inflexion_user_id','=',$request->id)->update(['inflexion_user_status' => 2,'inflexion_user_token' => 'Completed']);
            return true;
        }else{
            return false;
        }
    }
}
