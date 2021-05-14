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
				<h6>student>studentindex</h6>
			</div>
		</div>
		<!--start post to feed -->
		<div class="row d-flex justify-content-center">
			<div class="col-sm-8 ">
				<form action="{{ route('PostMessage') }}" method="post">
				@csrf
				<div class="panel shadow">
		            <div class="panel-body">
		        		<textarea class="form-control" rows="2" placeholder="What are you thinking?" name="postMessage" required></textarea>
		        		<div class="mar-top clearfix">
		        			<input class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i>
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
			                <li><a class="postUser" href="{{ route('DeletePost',[$id]) }}">Delete</a></li>
			                <li><a class="postUser" href="#">Edit</a></li>
						@endif
			            </ul>
			        </div>
			        <div class="social-avatar">
			            <a href="" class="pull-left">
			                <img alt="image" src="https://tinyurl.com/376azf5j">{{$id}}
			            </a>
			            <div class="media-body">
			                <a href="#">
			                    {{ $post->inflexion_detail_first.' '.$post->inflexion_detail_last}}
								@if($post->inflexion_post_poster == session()->get('info.userId'))
			                (You)
						@endif
			                </a>
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
			            			@if($post->inflexion_post_like == 1)
										{{ $post->inflexion_post_like }}<a href="#"><i class="fa fa-thumbs-up">person likes this</i></a>
									@elseif($post->inflexion_post_like > 1)
										<a href="">{{ $post->inflexion_post_like }}<i class="fa fa-thumbs-up">people like this</i></a>
									@else
									@endif
			            		</div>
			            	</div>
			            </div>
			            <div class="row post-react">
			            	<div class="btn-group">
			            		<div class="col-sm-12">
			            			<a href='{{ route("LikePost", [$id]) }}' class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like</a>
					                <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
					                <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
								</div>
			            	</div>
			            </div>
			        </div>

			        <div class="social-footer">

						@foreach($comments as $comment)
						@if($id == $comment->poster_id )
			        	<!-- this comment-->
			            <div class="social-comment">
			                <div class="pull-right social-action dropdown">
					            <button class="btn btn-sm"data-toggle="dropdown" class="dropdown-toggle btn-white">
					                <i class="fa fa-angle-down"></i>
					            </button>
					            <ul class="dropdown-menu m-t-xs">
					                <li><a class="postUser" href="">Delete</a></li>
					                <li><a class="postUser" href="#">Edit</a></li>
					            </ul>
					        </div>
			                <a href="" class="pull-left">
			                    <img alt="image" src="https://tinyurl.com/376azf5j">
			                </a>
			                <div class="media-body">
			                    <a href="#">
			                        Glenn Dumaguing
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
			                    <img alt="image" src="https://tinyurl.com/376azf5j">
				                </a>
			            	</div>
			            	<div class="col-sm-11">
			            		
				                <div class="media-body">
								<form method="POST" action="{{ route('CommentPost', [$id]) }}">
								@csrf
								<input type='hidden' value='{{ $id }}' name='postId'/>
				                     <input type='textarea' class="form-control" placeholder="Write comment..." name='commentMessage'></textarea>
									 <input type='submit' value='Post Comment' />
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
