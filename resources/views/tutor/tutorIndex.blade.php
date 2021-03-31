<x-tutor-template data="tutorIndex" />
<div class="area"> <!-- put all content inside area, outside area will mess with side naviagtion-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
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
				<h6>Tutor Index</h6>
				<form action="" method="post">
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
		<div class="row d-flex justify-content-center">
			<div class="col-sm-8 ">
				<div class="social-feed-box shadow">
			        <div class="pull-right social-action dropdown">
			            <button class="btn btn-sm"data-toggle="dropdown" class="dropdown-toggle btn-white">
			                <i class="fa fa-angle-down"></i>
			            </button>
			            <ul class="dropdown-menu m-t-xs">
			                <li><a class="postUser" href="">Delete</a></li>
			                <li><a class="postUser" href="#">Edit</a></li>
			            </ul>
			        </div>
			        <div class="social-avatar">
			            <a href="" class="pull-left">
			                <img alt="image" src="https://tinyurl.com/376azf5j">
			            </a>
			            <div class="media-body">
			                <a href="#">
			                    name
			                </a>
			                <small class="text-muted"></small>
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
			                	Message
			            	</p>
			            	<!--if(strlen($post->inflexion_post_message)>154)
			            		<a role="button" class="collapsed" data-toggle="collapse" href=".collapse_long_element" aria-expanded="false" aria-controls="collapse_long_element"></a>
			            	endif
			            -->
			            	
			        	</div>
			            
			            <!--end post body-->
			            <div class="row post-status">
			           		<div class="btn-group">
			            		<div class="col-sm-12">
			            			<a href="#"><i class="fa fa-thumbs-up">person likes this</i></a>
									<a href=""><i class="fa fa-thumbs-up">people like this</i></a>
			            		</div>
			            	</div>
			            </div>
			            <div class="row post-react">
			            	<div class="btn-group">
			            		<div class="col-sm-12">
			            			<a href='' class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like</a>
					                <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
					                <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
								</div>
			            	</div>
			            </div>
			        </div>

			        <div class="social-footer">
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
			                    Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.
			                    <br>
			                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
			                    <small class="text-muted">12.06.2014</small>
			                </div>
			            </div>

			            <!-- this write comment part-->
			            <div class="row social-comment">
			            	<div class="col-sm-1">
			            		<a href="" class="pull-left">
			                    <img alt="image" src="https://tinyurl.com/376azf5j">
				                </a>
			            	</div>
			            	<div class="col-sm-11">
			            		
				                <div class="media-body">
				                     <textarea class="form-control" placeholder="Write comment..."></textarea>
				                </div>
				            </div>
			            </div>

			        </div>

			    </div>
			</div>
		</div>
		<!--end posts-->
	</div>
	<!--end myclasses main-->
</div>