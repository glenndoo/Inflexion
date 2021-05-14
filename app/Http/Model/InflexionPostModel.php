<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class InflexionPostModel extends Model
{
    protected $connection = "mysql";
    protected $table = "inflexion_posts";
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'inflexion_post_id';
    protected $fillable = [
      'inflexion_post_message',
      'inflexion_post_timestamp',
      'inflexion_post_poster'
    ];

    public function insertPost($request){
        $insPost = $this;
        $insPost->inflexion_post_message = $request->postMessage;
        $insPost->inflexion_post_timestamp = Carbon::now();
        $insPost->inflexion_post_poster = $request->session()->get('info.userId');

        if($insPost->save()){
            return true;
        }else{
            return false;
        }
    }
/**this before maiko edit
    public function fetchAllPosts(){
        $posts = $this->join('inflexion_user_details','inflexion_detail_id','=', 'inflexion_posts.inflexion_post_poster')->join('comments_models','comments_models.poster_id','=','inflexion_posts.inflexion_post_id')->distinct()->orderBy('inflexion_post_timestamp','desc')->get();
        return $posts;
    }**/

//this after maiko edit

    public function fetchAllPosts(){
        $posts = $this->join('inflexion_user_details','inflexion_detail_id','=', 'inflexion_posts.inflexion_post_poster')->distinct()->orderBy('inflexion_post_timestamp','desc')->get();
        return $posts;
    }

    public function fetchAllComments(){
        $posts = $this->join('comments_models','comments_models.poster_id','=','inflexion_posts.inflexion_post_id')->distinct()->orderBy('inflexion_post_timestamp','desc')->get();
        return $posts;
    }

    public function deletePost($id){
        $delete = $this->where('inflexion_post_id','=',$id)->delete();

        if($delete){
            return true;
        }else{
            return false;
        }
    }

    public function likePost($request, $id){
        $likePost = $this->where('inflexion_post_id','=',$id)->first();
        $likeCount = $likePost->inflexion_post_like + 1;
        
        $save = $this->where('inflexion_post_id','=',$id)->update(['inflexion_post_like' => $likeCount]);

        if($save){
            return true;
        }else{

        }
    }
}