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

    Route::view('register','register');

    
    Route::view('tutorexam','tutorexam');//added by maiko
    Route::view('tutorBeforeExam','tutorBeforeExam');//added by maiko
    Route::view('tutorExamResult','tutorExamResult');//added by maiko this after completeprofile submit
    Route::view('examResult','tutorExamFailed');//for failed exam
    Route::view('login','login');
    Route::get('/retakeExam', array(
        'as' => 'retakeExam',
        'uses' => 'InflexionController@retakeExam'
    ));

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

    Route::post('CommentPost/{id}', array(
        'as' => 'CommentPost',
        'uses' => 'InflexionController@CommentPost'
    ));

    Route::get('ShowMessage/{id}', array(
        'as' => 'ShowMessage',
        'uses' => 'InflexionController@ShowMessage'
    ));

    Route::get('/ShowInbox', array(
        'as' => 'ShowInbox',
        'uses' => 'InflexionController@ShowInbox'
    ));

    Route::post('/SendMessageInbox', array(
        'as' => 'SendMessageInbox',
        'uses' => 'InflexionController@SendMessageInbox'
    ));

    Route::get('DeleteInboxMessage/{id}', array(
        'as' => 'DeleteInboxMessage',
        'uses' => 'InflexionController@DeleteInboxMessage'
    ));

    Route::get('TutorRegistryVerification', array(
        'as' => 'TutorRegistryVerification',
        'uses' => 'InflexionController@TutorRegistryVerification'
    ));

    Route::get('FetchQuestions', array(
        'as' => 'FetchQuestions',
        'uses' => 'InflexionController@FetchQuestions'
    ));

    Route::post('ValidateAnswers', array(
        'as' => 'ValidateAnswers',
        'uses' => 'InflexionController@ValidateAnswers'
    ));

    //STUDENT GROUP ROUTE
    Route::group(['middleware' => 'Student'], function(){

        Route::post('PostMessage', array(
            'as' => 'PostMessage',
            'uses' => 'InflexionController@PostMessage'
        ));

        Route::get('/studentIndex', array(
            'as' => 'studentIndex',
            'uses' => 'StudentController@studentIndex'
        ));

        Route::get('/studentSettings', function () { //added for testing maiko
            return view('student.studentsettings');
        });

        Route::get('/studentProfile', function () { //added for testing maiko
            return view('student.studentProfile');
        });

        Route::get('/studentGroups', function () { //added for testing maiko
            return view('student.studentgroups');
        });
        
        Route::get('/studentInbox', function () { //added for testing maiko
            return view('student.studentinbox');
        });
        Route::get('/studentClasses', function () { //added for testing maiko
            return view('student.studentclasses');
        });
        Route::get('/studentFindTutor', function () { //added for testing maiko
            return view('student.studentFindTutor');
        });

        Route::get('/studentLibrary', array ( //added by maiko
            'as' => 'studentLibrary',
            'uses' => 'StudentController@studentLibrary'
        ));

        Route::get('/studentHelp', function () { //added for testing maiko
            return view('student.studentHelp');
        });
        

    });


    //TUTOR GROUP ROUTE
    Route::group(['middleware' => 'Tutor'], function(){
        Route::get('/tutorIndex', function () { //added for testing maiko
        return view('tutor.tutorIndex');

        });
        Route::get('/tutorSettings', function () { //added for testing maiko
        return view('tutor.tutorSettings');

        });
        Route::get('/tutorProfile', array(
            'as' => 'tutorProfile',
            'uses' => 'InflexionController@fetchProfile'
        ));
        Route::get('/tutorGroups', function () { //added for testing maiko
        return view('tutor.tutorGroups');

        });
        Route::get('/tutorSchedule', function () { //added for testing maiko
        return view('tutor.tutorSchedule');

        });
        Route::get('/tutorInbox', function () { //added for testing maiko
        return view('tutor.tutorInbox');
        });
        Route::post('/insertHobby', array(
            'as' => 'insertHobby',
            'uses' => 'InflexionController@setHobbies'
        ));
        Route::post('/insertTag', array(
            'as' => 'insertTag',
            'uses' => 'InflexionController@setTags'
        ));
    });
    
    //ADMIN GROUP ROUTE
    Route::group(['middleware' => 'Admin'], function(){
        Route::get('/adminIndex', array(
            'as' => 'adminIndex',
            'uses' => 'AdminController@index'
        ));
        Route::get('/showAllUsers', array(
            'as' => 'showAllUsers',
            'uses' => 'InflexionController@showAllUsers'
        ));
        Route::get('/showAllPosts', array(
            'as' => 'showAllPosts',
            'uses' => 'InflexionController@showAllPosts'
        ));
        Route::get('/deleteUser', array(
            'as' => 'deleteUser',
            'uses' => 'InflexionController@deleteUser'
        ));
        Route::get('/reactivateAccount', array(
            'as' => 'reactivateAccount',
            'uses' => 'InflexionController@reactivateAccount'
        ));
        Route::get('/adminAnnouncements', function () { //added for testing maiko
            return view('admin.adminannouncements');
        });
        Route::get('/adminLibrary', function () { //added for testing maiko
            return view('admin.adminLibrary');
        });
        Route::get('/sendInterviewEmail', array(
            'as' => 'sendInterviewEmail',
            'uses' => 'InflexionController@sendInterviewEmail'
        ));
        Route::get('/interviewResult', array(
            'as' => 'interviewResult',
            'uses' => 'InflexionController@interviewResult'
        ));
        Route::get('/tutorApproval', array(
            'as' => 'tutorApproval',
            'uses' => 'InflexionController@tutorApproval'
        ));
    });