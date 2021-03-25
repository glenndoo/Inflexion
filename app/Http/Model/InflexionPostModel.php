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

    public function fetchAllPosts(){
        $posts = $this->join('inflexion_user_details','inflexion_detail_id','=', 'inflexion_posts.inflexion_post_poster')->distinct()->get();
        return $posts;
    }
}