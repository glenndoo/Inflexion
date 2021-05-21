<x-student-template data="Student Index" />
<div class="area fade-load"> <!-- put all content inside area, outside area will mess with side naviagtion-->
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<br/>
				<br/>
				<br/>
				<br/>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
			</div>
		</div>
		<!--start post to feed -->
		<div class="row d-flex justify-content-center">
			<div class="col-sm-8 ">
				<form action="{{ route('PostMessage') }}" method="post">
				@csrf
				<div class="panel shadow">
		            <div class="panel-body">
		        		<textarea class="form-control" rows="2" placeholder="What are you thinking?" name="postMessage" required></textarea><br/>
		        		<div class="mar-top clearfix">
		        			<button class="btn btn-sm btn-primary pull-right" type="submit"/><i class="fa fa-pencil-square-o"></i></button>
							<a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#" data-original-title="Add Video" data-toggle="tooltip"></a>
		        			<a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#" data-original-title="Add Photo" data-toggle="tooltip"></a>
		        			<a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#" data-original-title="Add File" data-toggle="tooltip"></a>
		        		</div>
		        	</div>
		        </div>
				</form>
			</div>
		</div>
		<!--post to feed end-->

		<!--start posts-->
		@if(count($details) > 0)
		@foreach($details as $post)
		<div class="row d-flex justify-content-center">
			<div class="col-sm-8 ">
				<div class="social-feed-box shadow">
			        <div class="pull-right social-action dropdown">
			            <button class="btn btn-sm"data-toggle="dropdown" class="dropdown-toggle btn-white">
			                <i class="fa fa-angle-down"></i>
			            </button>
						@php
						$id = $post->inflexion_post_id;
						@endphp
			            <ul class="dropdown-menu m-t-xs">
						@if($post->inflexion_post_poster == session()->get('info.userId'))
			                <li><a class="postUser" href="#" data-toggle="modal" data-target="#delete-post-{{$id}}">Delete</a></li>
			                <li><a class="postUser" href="#" data-toggle="modal" data-target="#edit-post-{{$id}}">Edit</a></li>
			            @else
			            	<li><a class="postUser" href="" data-toggle="modal" data-target="#report-post-{{$id}}">Report</a></li>
						@endif
			            </ul>
			        </div>


			        <div class="social-avatar">
			            <a href="" class="pull-left">
			                <img alt="image" src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png">
			            </a>
			            <div class="media-body">
			            	<div class=" form-inline">
			            		<!--this name of poster-->
			            		<a href="#">
				                    {{ $post->inflexion_detail_first.' '.$post->inflexion_detail_last}}
									@if($post->inflexion_post_poster == session()->get('info.userId'))
						                (You)
									@endif
				                </a>
				                <!--this trigger for hidden badges of poster note: only if tutor show trigger-->
				                <button class="btn btn-default btn-sm" type="button" data-toggle="collapse" data-target="#user-badge-{{$id}}" aria-expanded="false" aria-controls="collapseExample">
									<i class="fa fa-info-circle"></i>
								</button>
								<!--this hidden badges of poster note: only if tutor show badge-->
				                <div class="collapse" id="user-badge-{{$id}}">
				                	<span class="badge badge-primary">Primary</span>
									<span class="badge badge-secondary">Secondary</span>
									<span class="badge badge-success">Success</span>
									<span class="badge badge-danger">Danger</span>
									<span class="badge badge-warning">Warning</span>
									<span class="badge badge-info">Info</span>
									<span class="badge badge-light">Light</span>
									<span class="badge badge-dark">Dark</span>
				                </div>
			            	</div>
			                
			                <small class="text-muted">{{ $post->inflexion_post_timestamp }}</small>
			            </div>
			        </div>
			        <div class="social-body">
			        	<!--start post body
						note: (3 part collapse no JS, pure CSS)  put inside collapse_module for collapse property for two line paragraph
								add html class collapse_long_element for paragraph body
								add a pr button for collapse toggle (see example below) -Maiko
			        	-->

			        	<div class="collapse_module">
			        		<p class="collapse collapse_long_element" id="collapse_long_element" aria-expanded="false">
			                	{{ $post->inflexion_post_message }}
			            	</p>
							
			            	@if(strlen($post->inflexion_post_message)>154)
			            		<a role="button" class="collapsed" data-toggle="collapse" href=".collapse_long_element" aria-expanded="false" aria-controls="collapse_long_element"></a>
			            	@endif
			            	
			        	</div>
			            
			            <!--end post body-->
			            <div class="row post-status">
			           		<div class="btn-group">
			            		<div class="col-sm-12">
			            			<!--@if($post->inflexion_post_like == 1)
										{{ $post->inflexion_post_like }}<a href="#"><i class="fa fa-thumbs-up">person likes this</i></a>
									@elseif($post->inflexion_post_like > 1)
										<a href="">{{ $post->inflexion_post_like }}<i class="fa fa-thumbs-up">people like this</i></a>
									@else
									@endif-->
			            		</div>
			            	</div>
			            </div>
			            <div class="row post-react">
			            	<div class="btn-group">
			            		<div class="col-sm-12">
			            			@if($post->inflexion_post_like == 1)<!--just 1 like)-->
			            				<a href='{{ route("LikePost", [$id]) }}' title="{{ $post->inflexion_post_like }} user/s has liked this"><i class="fa fa-thumbs-up"></i>{{ $post->inflexion_post_like }} Like</a>
			            			@elseif($post->inflexion_post_like > 1)<!--more then 1 like)-->
			            				<a href='{{ route("LikePost", [$id]) }}' title="{{ $post->inflexion_post_like }} user/s has liked this"><i class="fa fa-thumbs-up"></i>{{ $post->inflexion_post_like }} Likes</a>
			            			@else($post->inflexion_post_like == 0)<!--no likes)-->
			            				<a href='{{ route("LikePost", [$id]) }}' class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like</a>
			            			@endif

			            			@php
						        		$rowCount = count($comments->where('poster_id', $id))
						        	@endphp
			            			@if($rowCount > 1)<!--more than 1 comment)-->
					                	<a data-toggle="collapse" href="#social-comment-{{$id}}"><i class="fa fa-comments">{{$rowCount}}</i> Comments</a>
					                @elseif($rowCount == 1)<!--just 1 comment)-->
					                	<a data-toggle="collapse" href="#social-comment-{{$id}}"><i class="fa fa-comments">{{$rowCount}}</i> Comment</a>
					                @else <!--no comments)-->
					                	<a data-toggle="collapse" href="#social-comment-{{$id}}"><i class="fa fa-comments"></i> Comment</a>
					                @endif
					               
					                <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
								</div>
			            	</div>
			            </div>
			        </div>

				        <div class="social-footer collapse" id="social-comment-{{$id}}">
						@foreach($comments as $comment)
						@if($id == $comment->poster_id )
			        	<!-- this comment-->
			            <div class="social-comment">
			                <div class="pull-right social-action dropdown">
					            @if($comment->comment_id == session()->get('info.userId'))
					            <button class="btn btn-sm"data-toggle="dropdown" class="dropdown-toggle btn-white">
					                <i class="fa fa-angle-down"></i>
					            </button>
					            <ul class="dropdown-menu m-t-xs">
					                <li><a class="postUser" href="">Delete</a></li>
					                <li><a class="postUser" href="#">Edit</a></li>
					            </ul>
					            @endif
					        </div>
			                <a href="" class="pull-left">
			                    <img alt="image" src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png">
			                </a>
			                <div class="media-body">
			                    <a href="#">
			                        
			                    {{ $comment->inflexion_detail_first.' '.$comment->inflexion_detail_last  }}
			                    </a>
			                    {{ $comment->comment_message }}
			                    <br>
			                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
			                    <small class="text-muted">12.06.2014</small>
								
			                </div>
			            </div>
			            @endif
			            @endforeach

			            <!-- this write comment part-->
			            <div class="row social-comment">
			            	<div class="col-sm-1">
			            		<a href="" class="pull-left">
			                    <img alt="image" src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png">
				                </a>
			            	</div>
			            	<div class="col-sm-11">
				                <div class="media-body">
									<form method="POST" action="{{ route('CommentPost', [$id]) }}">
										@csrf
										<input type='hidden' value='{{ $id }}' name='postId'/>
					                    <input type='textarea' class="form-control" placeholder="Write comment..." name='commentMessage' required/>
										<input type='submit' class="float-right btn btn-sm btn-primary"value='Post Comment' />
									</form>
				                </div>
				            </div>
			            </div>

			        </div>

			    </div>
			</div>
		</div>
		@endforeach
		@else
		{{ 'No posts to show' }}
		@endif
		<!--end posts-->
	</div>
</div>

<!--nilagay ko dito modal sa baba kasi nag contradict sya sa css ng naviagtion ganun din dapat para sa modal ng comments-->
@foreach($details as $post)
@php
$post_id = $post->inflexion_post_id;
@endphp
<!-- Modal edit -->
<div class="modal fade" id="edit-post-{{$post_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">EDIT YOUR POST</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       //POST id {{$post_id}} <br/>
       <textarea class="form-control" rows="2" placeholder="What are you thinking?" name="editPost">{{ $post->inflexion_post_message }}</textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>Cancel</button>
        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-check" aria-hidden="true"></i>Save</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal delete -->
<div class="modal fade" id="delete-post-{{$post_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to delete this post?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       {{ $post->inflexion_post_message }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>Cancel</button>
        <a href="{{ route('DeletePost',[$post_id]) }}" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal report -->
<div class="modal fade" id="report-post-{{$post_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Report this post?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	
      	<div class="row">
      		<div class="col-sm-8">
      		If someone is in immediate danger, get help before reporting to Inflexion Global, Don't wait.
      		Report this post if it violates any of Inflexion Global's guidelines.<br/>
      	</div>
	      	<div class="col-sm-4">
	      		<i style="font-size: 6rem;"class="text-danger fa fa-exclamation-triangle" aria-hidden="true"></i>
	      	</div>
      	</div>

      	
      	<hr/>
      	<b>Name:</b>
      	{{ $post->inflexion_detail_first.' '.$post->inflexion_detail_last}}<br/>
      	<b>POST:</b>
       {{ $post->inflexion_post_message }}<br/>
       <b>Date Posted:</b>
       {{ $post->inflexion_post_timestamp }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>Cancel</button>
        <a href="{{ route('DeletePost',[$post_id]) }}" type="button" class="btn btn-danger btn-sm"><i class="fa fa-check" aria-hidden="true"></i>Submit</a>
      </div>
    </div>
  </div>
</div>
@endforeach
