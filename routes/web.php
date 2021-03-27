<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


    Route::get('/', array(
        'as' => '/',
        'uses' => 'InflexionController@index'
    ));

    // Route::get('/completeprofile', array(
    //     'as' => 'completeprofile',
    //     'uses' => 'InflexionController@CompleteProfile'
    // ));
    
    Route::view('register','register');

    Route::view('login','login');

    Route::post('ValidateRegistry', array(
        'as' => 'ValidateRegistry',
        'uses' => 'InflexionController@ValidateRegistry'
    ));

    Route::post('LoginUser', array(
        'as' => 'LoginUser',
        'uses' => 'InflexionController@LoginUser'
    ));

    Route::get('email',function(){
        view('emails.register');
    });

    Route::post('ValidateRegistry', array(
        'as' => 'ValidateRegistry',
        'uses' => 'InflexionController@ValidateRegistry'
    ));

    Route::post('LoginUser', array(
        'as' => 'LoginUser',
        'uses' => 'InflexionController@LoginUser'
    ));

    Route::view('completeprofile','completeprofile');
    Route::get('RegistryVerification', array(
        'as' => 'RegistryVerification',
        'uses' => 'InflexionController@RegistryVerification'
    ));

    Route::get('LogoutUser', array(
        'as' => 'LogoutUser',
        'uses' => 'InflexionController@LogoutUser'
    ));
    Route::post('CompleteRegistration', array(
        'as' => 'CompleteRegistration',
        'uses' => 'InflexionController@CompleteRegistration'
    ));
    Route::get('DeletePost/{id}', array(
        'as' => 'DeletePost',
        'uses' => 'InflexionController@DeletePost'
    ));
    Route::get('LikePost/{id}', array(
        'as' => 'LikePost',
        'uses' => 'InflexionController@LikePost'
    ));


Route::group(['middleware' => 'Student'], function(){
    Route::post('PostMessage', array(
        'as' => 'PostMessage',
        'uses' => 'InflexionController@PostMessage'
    ));
    Route::get('/studentIndex', array(
        'as' => 'studentIndex',
        'uses' => 'StudentController@studentIndex'
    ));
    Route::get('/student/settings', function () { //added for testing maiko
        return view('student/studentsettings');
    });
    Route::get('/student/grofile', function () { //added for testing maiko
        return view('student/studentProfile');
    });
    Route::get('/student/groups', function () { //added for testing maiko
        return view('student/studentgroups');
    });
    Route::get('/student/inbox', function () { //added for testing maiko
        return view('student/studentinbox');
    });
});