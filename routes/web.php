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


Route::group(['middleware' => 'access'], function(){
    Route::get('/', function () {
        return view('welcome');
    });

    
    
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
});

Route::group(['middleware' => 'access'], function(){
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
});

Route::group(['middleware' => 'Student'], function(){
    Route::post('PostMessage', array(
        'as' => 'PostMessage',
        'uses' => 'InflexionController@PostMessage'
    ));
    Route::get('/student', function () {  //added by maiko 
        return view('student/studentindex');
    });    
    Route::get('/studentIndex', array(
        'as' => 'studentIndex',
        'uses' => 'StudentController@studentIndex'
    ));
});