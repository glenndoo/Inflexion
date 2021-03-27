<x-student-template data="studentgroups" />
<div class="area"> <!-- put all content inside area, outside area will mess with side naviagtion-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm">
				<br/>
				<br/>
			</div>
		</div>
		<!--start post to feed -->
		<div class="row">
			<div class="col-sm-3">
				<div class="row">
					<div class="col-sm-12 ">
						<div class="search ">
			            	<input type="text" class="search-input" placeholder="Search groups..." name="">
		            		<a href="#" class="search-icon">
		            			<i class="fa fa-search"></i>
		            		</a>
			            </div>
		            </div>
				</div>
				<div class="">
				    <div class="">
				      <ul class="nav nav-tabs group-tabs" id="myTab" role="tablist">
				        <li class="nav-item">
				            <a class="nav-link active" data-toggle="tab" href="#yourFeed" role="tab" aria-controls="yourFeed">Your Feed</a>
				        </li>
				        <li class="nav-item"><!-- connected to tab-pane tabpanel discover-->
				            <a class="nav-link" data-toggle="tab" href="#discover" role="tab" aria-controls="discover">Discover</a>
				        </li>
				        </li>
				    </ul>
					</div>

				</div>
			</div>
			<div class="col-sm-6">

				<br/>
				<h6>RECENT ACTIVITY</h6>
				<div class="panel panel-default">
					<div class="tab-content"> 
					  	<div class="tab-pane active" id="yourFeed" role="tabpanel">
						  	<!--all group posts start--> 
					    	<div class="row">
								<div class="col-sm-12">
									<div class="social-feed-box shadow">
								        <div class="pull-right social-action dropdown">
								            <button class="btn btn-sm"data-toggle="dropdown" class="dropdown-toggle btn-white">
								                <i class="fa fa-angle-down"></i>
								            </button>
								            <ul class="dropdown-menu m-t-xs">
								                <li><a class="postUser" href="#">Delete</a></li>
								                <li><a class="postUser" href="#">Edit</a></li>
								            </ul>
								        </div>
								        <div class="social-avatar">
								            <a href="" class="pull-left">
								                <img alt="image" src="https://tinyurl.com/376azf5j">
								            </a>
								            <div class="media-body">
								                <a href="#">Maiko Robles<i class="fa fa-caret-right" aria-hidden="true"></i>Group Name</a>
								            </div>
								        </div>
								        <div class="social-body">
								            <p>
								                lorem ipsum
								            </p>
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
								            			<a href='#' class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like</a>
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
							<!--all group posts end-->
					  	</div>
					  	<div class="tab-pane" id="discover" role="tabpanel">..2.</div>
					</div>
				    <div class="">
				    	
				    </div>
				</div>
			</div>
		</div>
		<!--post to feed end-->

		<!--student groups start-->
		<div class="row">
			
		</div>
		<!--end settings-->
	</div>
</div>
