<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class CommentsModel extends Model
{
    protected $connection = "mysql";
    protected $table = "comments_models";
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
      'poster_id',
      'comment_id',
      'comment_message'
    ];


    public function addComment($data){
        $postComment = new CommentsModel;
        $postComment->poster_id = $data->postId;
        $postComment->comment_id = $data->session()->get('info.userId');
        $postComment->comment_message = $data->commentMessage;
        $postComment->created_at = Carbon::now();
        $postComment->save();
    }
}
