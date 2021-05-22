<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\InflexionPostModel;
use File;
use Storage;

class StudentController extends Controller
{
    //
    public $InflexionPostModel;

    public function __construct(InflexionPostModel $InflexionPostModel){
        $this->InflexionPostModel = $InflexionPostModel;
    }

    public function studentIndex(Request $request){
        $details = $this->InflexionPostModel->fetchAllPosts();
        $comments = $this->InflexionPostModel->fetchAllComments();//added by maiko

        return view('student.studentindex')->with('details',$details)->with('comments',$comments);//modified by maiko added 2nd "with"
    }
    public function studentLibrary(Request $request){//added by maiko loads files in directory outputs to blade file
        $path = public_path('pdf');
        $files = File::files($path);

        return view('student.studentlibrary')->with('files',$files);
    }
}
