<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\InflexionUserModel;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $InflexionUserModel;
    public function __construct(InflexionUserModel $InflexionUserModel){
        $this->$InflexionUserModel = $InflexionUserModel;
    }

    public function index()
    {
        $userList = InflexionUserModel::where('inflexion_user_type','not like','0')->get();
        $studentList = InflexionUserModel::join('inflexion_user_details', 'inflexion_detail_id', '=', 'inflexion_user_id')->get();
        $unverifiedTutorList = InflexionUserModel::join('exam_schedule', 'tutor_id', '=', 'inflexion_user_id')->get();
        $tutors = InflexionUserModel::join('exam_schedule', 'tutor_id', '=', 'inflexion_user_id')->join('inflexion_user_details', 'inflexion_detail_id', '=', 'inflexion_user_id')->get();
        return view('admin/adminindex')->with('users',$userList)->with('tutors', $tutors)->with('students',$studentList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
