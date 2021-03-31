<x-student-template data="studentgroups" />
<div class="area"> <!-- put all content inside area, outside area will mess with side naviagtion-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm">
				<br/>
				<br/>
			</div>
		</div>
		<!--start group main -->
		<div class="row">
			<div class="col-sm-3">
				<!--side search-->
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
				<!-- side sub nav-->
				<div class="row">
				    <div class="col-sm-12 collapse_module_page">
				      	<ul class="nav nav-tabs group-tabs collapse collapse_page_element" id="myTab" role="tablist" aria-expanded="false">
					        <li class="nav-item  group-tabs"><!-- connected to active tab-pane tabpanel allYourGroupFeed-->
					            <a class="nav-link active group-tabs" data-toggle="tab" href="#allYourGroupFeed" role="tab" aria-controls="allYourGroupFeed">Your Feed</a>
					        </li>
					        <li class="nav-item group-tabs"><!-- connected to tab-pane tabpanel discover-->
					            <a class="nav-link group-tabs" data-toggle="tab" href="#discover" role="tab" aria-controls="discover">Discover</a>
					        </li>

					        <hr/>

							<div class="row">
							    <div class="col-sm-12">
							      	<strong>Your groups</strong>
								</div>
							</div>
							<br/>

							<!-- for each start here for joined groups and "tab-pane" connected to each link should also be in another foreach
							 		example<a href="#joined_group_1"> points to <div class="tab-pane" id="joined_group_1" role="tabpanel"> -->

							<!-- This connected to tab-pane tabpanel joined_group_1 (start at line 241)-->
					        <li class="nav-item group-tabs">
					            <a class="nav-link group-tabs" data-toggle="tab" href="#joined_group_1" role="tab" aria-controls="joined_group_1">English for Begginers</a>
					        </li>

					        <!-- This connected to tab-pane tabpanel joined_group_2 (start at line 403)-->
					        <li class="nav-item group-tabs">
					            <a class="nav-link group-tabs" data-toggle="tab" href="#joined_group_2" role="tab" aria-controls="joined_group_2">ESL Master Chefs</a>
					        </li>

					        <!-- just for content-->
					        <li class="nav-item group-tabs">
					            <a class="nav-link group-tabs" data-toggle="tab" href="#" role="tab" aria-controls="">a third group</a>
					        </li>

					        <li class="nav-item group-tabs">
					            <a class="nav-link group-tabs" data-toggle="tab" href="#" role="tab" aria-controls="">a fourth group</a>
					        </li>
					        <!-- just for content end-->

					        <!-- for each end here for joined groups-->
					    </ul>
					    <a role="button" class="collapsed collapse_button" data-toggle="collapse" href="#myTab" aria-expanded="false" aria-controls="myTab"></a>
					</div>
				</div>
			</div>

			<div class="col-sm-9">
				<br/>
				<div class="panel panel-default">
					<!--tab content start-->
					<div class="tab-content">
						<!--all group posts start--> 
					  	<div class="tab-pane active" id="allYourGroupFeed" role="tabpanel">
							<h6>RECENT ACTIVITY</h6>
					    	<div class="row">
								<div class="col-sm-9">
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
								<div class="col-sm-3">
									
								</div>
							</div>
							
					  	</div>
					  	<!--all group posts end-->
					  	<br/>

					  	<!--Discover Starts-->
					  	<div class="tab-pane" id="discover" role="tabpanel">
					  		<div class="col-sm-9">
						  		<!--start results for groups not joined -->
								<div class="row ">
									<div class="col-sm-12">
										<div class="group-card card shadow">
									  		<div class="card-header">
									  			<div class="row">
									  				<div class="col-sm-6">
									  					<h5>Tasty Recipes</h5>By John Doe
									  				</div>
									  				<div class="col-sm-3">
									  					
									  				</div>
									  				<div class="col-sm-3 text-right">
									  					<a href="#" class="btn btn-primary">Join Group</a>
									  				</div>
									  			</div>
									  		</div>
									  		<div class="card-body">
									    		Watch, Cook, Share: Recipes and How-To’s for Real Life
									  		</div>
										</div>
									</div>
								</div>

								<hr/>
								
								<div class="row ">
									<div class="col-sm-12">
										<div class="group-card card shadow">
									  		<div class="card-header">
									  			<div class="row">
									  				<div class="col-sm-6">
									  					<h5>Photographers & Travel Nomads</h5>By Paul Smith
									  				</div>
									  				<div class="col-sm-3">
									  					
									  				</div>
									  				<div class="col-sm-3 text-right">
									  					<a href="#" class="btn btn-primary">Join Group</a>
									  				</div>
									  			</div>
									  		</div>
									  		<div class="card-body">
									    		Need travel inspiration? Some of the best travel photographers share their favourite pictures and the stories behind them in this group. This is the perfect place to discover new travel photographers as they capture beautiful images of people, landscapes, and animals around the world. They will provide you a little snapshot into their lives. 
									  		</div>
										</div>
									</div>
								</div>
								<!--end results for groups not joined -->

								<hr/>
							</div>
							<div class="col-sm-3">
								
							</div>
					  	</div>
					  	<!--Discover end-->

					  	<!--your Groups "joined_group_1" start-->
					  	<div class="tab-pane" id="joined_group_1" role="tabpanel">
							<div class="row ">
								<div class="col-sm-9">
									<!--start post status to this group -->
									<div class="group-card card shadow">
								  		<div class="card-header">
								  			<div class="row">
								  				<div class="col-sm-6">
								  					<h5>English for Begginers</h5>By Glen Dumaguing
								  				</div>
								  				<div class="col-sm-3">
								  					
								  				</div>
								  				<div class="col-sm-3 text-right">
								  					<a href="#" class="btn btn-success">Leave Group</a>
								  				</div>
								  			</div>
								  		</div>
								  		<div class="card-body">
								    		<form action="" method="post">
								        		<textarea class="form-control" rows="2" placeholder="What are you thinking?" name="postMessage" required></textarea>

								        		<br/>

								        		<div class="mar-top clearfix">
								        			<input class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i>
								        			<a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#" data-original-title="Add Video" data-toggle="tooltip"></a>
								        			<a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#" data-original-title="Add Photo" data-toggle="tooltip"></a>
								        			<a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#" data-original-title="Add File" data-toggle="tooltip"></a>
								        		</div>
											</form>
								  		</div>
									</div>
									<!--end post status to this group -->

									<hr/>

									<!--start post results in this group-->
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
								                <a href="#">Glenn Dumaguing</a>
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
									<!--end post results in this group-->
								</div>
								<div class="col-sm-3">
									<!--start members area-->
									<div class="group-members-card card shadow">
								      	<div class="card-body">
								        	<h5 class="card-title">MEMBERS</h5>
								        	<!--start post body
											note: (3 part collapse no JS, pure CSS)  put inside collapse_module for collapse property for two line paragraph
													add html class collapse_long_element for paragraph body
													add a pr button for collapse toggle (see example below) -Maiko
								        	-->
								        	<div class="collapse_module">
								        		<div class="collapse collapse_long_element" id="memberList_1" aria-expanded="false">
								        			<img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
								        		</div>

								        		<a role="button" class="collapsed" data-toggle="collapse" href="#memberList_1" aria-expanded="false" aria-controls="memberList_1"></a>
								        	</div>
								      	</div>
								    </div>
								    <!--start members area-->
								</div>
							</div>
					  	</div>
					  	<!--your Groups "joined_group_1" end-->


					  	<!--your Groups "joined_group_2" Start-->
					  	<div class="tab-pane" id="joined_group_2" role="tabpanel">
					  		
							<div class="row ">
								<div class="col-sm-9">
									<!--start post status to this group -->
									<div class="group-card card shadow">
								  		<div class="card-header">
								  			<div class="row">
								  				<div class="col-sm-6">
								  					<h5>ESL Master Chefs</h5>By Mark Robles
								  				</div>
								  				<div class="col-sm-3">
								  					
								  				</div>
								  				<div class="col-sm-3 text-right">
								  					<a href="#" class="btn btn-success">Leave Group</a>
								  				</div>
								  			</div>
								  		</div>
								  		<div class="card-body">
								    		<form action="" method="post">
								        		<textarea class="form-control" rows="2" placeholder="What are you thinking?" name="postMessage" required></textarea>

								        		<br/>

								        		<div class="mar-top clearfix">
								        			<input class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i>
								        			<a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#" data-original-title="Add Video" data-toggle="tooltip"></a>
								        			<a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#" data-original-title="Add Photo" data-toggle="tooltip"></a>
								        			<a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#" data-original-title="Add File" data-toggle="tooltip"></a>
								        		</div>
											</form>
								  		</div>
									</div>
									<!--end post status to this group -->
									<hr/>
									No post to show
								</div>
								<div class="col-sm-3">
									<!--start members area-->
									<div class="group-members-card card shadow">
								      	<div class="card-body">
								        	<h5 class="card-title">MEMBERS</h5>
								        	<!--start post body
											note: (3 part collapse no JS, pure CSS)  put inside collapse_module for collapse property for two line paragraph
													add html class collapse_long_element for paragraph body
													add a pr button for collapse toggle (see example below) -Maiko
								        	-->
								        	<div class="collapse_module">
								        		<div class="collapse collapse_long_element" id="memberList_2" aria-expanded="false">
								        			<img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar">
										        	<img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
								        		</div>

								        		<a role="button" class="collapsed" data-toggle="collapse" href="#memberList_2" aria-expanded="false" aria-controls="memberList_2"></a>
								        	</div>
								      	</div>
								    </div>
								    <!--start members area-->
								</div>
							</div>
							<br/>
							
					  	</div>
					  	<!--your Groups "joined_group_2" End-->
					</div>
					<!--tab content end-->
				    <div class="">
				    	
				    </div>
				</div>
			</div>
		</div>
		<!--end group main-->
	</div>
</div>
