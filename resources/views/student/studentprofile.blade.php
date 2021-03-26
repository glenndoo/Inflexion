<x-student-template data="studentindex" />
<div class="area"> <!-- put all content inside area, outside area will mess with side naviagtion-->
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<br/>
				<br/>
				<br/>
				<br/>
			</div>
		</div>
		<!--start post to feed -->
		<div class="row">
			<div class="col-sm-12">
				<h1>Profile</h1>
			</div>
		</div>
		<!--post to feed end-->

		<!--start profile-->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-profile">
					<div class="row">
						<!-- COL 1 -->
						<div class="col-md-3">
							<section class="panel">
								<div class="panel-body noradius padding-10">
									<figure class="margin-bottom-10"><!-- image -->
										<img class="img-responsive" src="{{ asset('img/placeholder-male-square.png')}}" alt="" width="235rem">
									</figure><!-- /image -->

									<!-- progress bar -->
									<h6 class="progress-head">Hobbies and Interest<span class="pull-right"></span></h6>
									<!--div class="progress progress-xs">
										<div class="progress-bar" role="progressbar" style="width: 60%;"></div>
									</div><!-- /progress bar -->

									<!-- updated -->
									<ul class="list-unstyled size-13">
										<li class="text-gray">
											<a href="#"><span class="badge badge-secondary">PHOTOGRAPHY</span>
											<a href="#"><span class="badge badge-secondary">ART</span>
											<a href="#"><span class="badge badge-secondary">TRAVEL</span>
											<a href="#"><span class="badge badge-secondary">MUSIC</span>
											<a href="#"><span class="badge badge-secondary">BOOKS</span>
										</li>
									</ul><!-- /updated -->

									<hr class="half-margins">
									
									<!-- About -->
									<h3 class="text-black">
										John Doe 
										<small class="text-gray size-14"> / Tutor</small>
									</h3>
									<p class="size-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.</p>
									<!-- /About -->

									<hr class="half-margins">
									<!-- Social -->
									<h6>Hobbies and Interest</h6>
									<a href="#" class="btn ico-only btn-facebook btn-xs" title="Facebook"><i class="fa fa-facebook"></i></a>
									<a href="#" class="btn ico-only btn-twitter btn-xs" title="Twitter"><i class="fa fa-twitter"></i></a>
									<a href="#" class="btn ico-only btn-google-plus btn-xs" title="Google plus"><i class="fa fa-google-plus"></i></a>
									<a href="#" class="btn ico-only btn-linkedin btn-xs" title="Linked In"><i class="fa fa-linkedin"></i></a>
									<a href="#" class="btn ico-only btn-pinterest btn-xs" title="Pinterest"><i class="fa fa-pinterest"></i></a>
									<a href="#" class="btn ico-only btn-flickr btn-xs" title="Flickr"><i class="fa fa-flickr"></i></a>
									<a href="#" class="btn ico-only btn-tumblr btn-xs" title="Tumblr"><i class="fa fa-tumblr"></i></a>
									<a href="#" class="btn ico-only btn-skype btn-xs" title="Skype"><i class="fa fa-skype"></i></a>
									<a href="#" class="btn ico-only btn-stackoverflow btn-xs" title="Stack Overflow"><i class="fa fa-stack-overflow"></i></a>
									<a href="#" class="btn ico-only btn-instagram btn-xs" title="Instagram"><i class="fa fa-instagram"></i></a>
									<a href="#" class="btn ico-only btn-dribbble btn-xs" title="Dribble"><i class="fa fa-dribbble"></i></a>
									<a href="#" class="btn ico-only btn-youtube btn-xs" title="Youtube"><i class="fa fa-youtube"></i></a>
									<a href="#" class="btn ico-only btn-vimeo btn-xs" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
									<a href="#" class="btn ico-only btn-rss btn-xs" title="Rss"><i class="fa fa-rss"></i></a>
									<!-- /Social -->

								</div>
							</section>
						</div><!-- /COL 1 -->

						<!-- COL 2 -->
						<div class="middle-col col-md-5">

							<div class="tabs white nomargin-top">
								<ul class="nav nav-tabs tabs-primary">
									<li class="active">
										<a href="#overview" data-toggle="tab">Overview</a>
									</li>
									<li>
										<a href="#edit" data-toggle="tab">Edit</a>
									</li>
								</ul>

								<div class="tab-content">
									<!-- Overview -->
									<div id="overview" class="tab-pane active">
										<form class="well">
											<textarea rows="2" class="form-control" placeholder="What's on your mind?"></textarea>
											<div class="margin-top-10">
												<button type="submit" class="btn btn-sm btn-primary pull-right">Post</button>
												<a href="#" class="btn btn-link profile-btn-link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add a Location"><i class="fa fa-map-marker"></i></a>
												<a href="#" class="btn btn-link profile-btn-link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add Photo"><i class="fa fa-camera"></i></a>
												<a href="#" class="btn btn-link profile-btn-link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add File"><i class="fa fa-file"></i></a>
											</div>
										</form>

										<hr class="invisible half-margins">
										<!-- COMMENT -->
										<ul class="comment list-unstyled padding-10">
											<li class="comment">
												<!-- avatar -->
												<img class="avatar" src="{{ asset('img/placeholder-male-square.png')}}" width="50" height="50" alt="avatar">
												<!-- comment body -->
												<div class="comment-body"> 
													<a href="#" class="comment-author">
														<small class="text-muted pull-right"> 12 Minutes ago </small>
														<span>Melisa Doe</span>
													</a>
													<p>
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
														euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet 
														dolore magna aliquam tincidunt erat volutpat.  
													</p>
												</div><!-- /comment body -->

												<!-- options -->
												<ul class="list-inline size-11 margin-top-10">
													<li>
														<a href="#" class="text-info"><i class="fa fa-reply"></i> Reply</a>
													</li>
													<li>
														<a href="#" class="text-success"><i class="fa fa-thumbs-up"></i> Like</a>
													</li>
													<li>
														<a href="#" class="text-muted">Show All Comments (36)</a>
													</li>
													<li class="pull-right">
														<a href="#" class="text-danger">Delete</a>
													</li>
													<li class="pull-right">
														<a href="#" class="text-primary">Edit</a>
													</li>
												</ul>
											</li><!-- /options -->
											<hr/>
											<li class="comment comment-reply">

												<!-- avatar -->
												<img class="avatar" src="{{ asset('img/placeholder-male-square.png')}}" width="35" height="35" alt="avatar">

												<!-- comment body -->
												<div class="comment-body"> 
													<a href="#" class="comment-author">
														<small class="text-muted pull-right"> 4 Minutes ago </small>
														<span>Ioana Doe</span>
													</a>
													<p>
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy! <i class="fa fa-smile-o green"></i> 
													</p>
												</div><!-- /comment body -->

												<!-- options -->
												<ul class="list-inline size-11">
													<li>
														<a href="#" class="text-success"><i class="fa fa-thumbs-up"></i> Like</a>
													</li>
													<li class="pull-right">
														<a href="#" class="text-danger">Delete</a>
													</li>
													<li class="pull-right">
														<a href="#" class="text-primary">Edit</a>
													</li>
												</ul><!-- /options -->

											</li>

											<hr/>

											<li class="comment comment-reply">

												<!-- avatar -->
												<img class="avatar" src="{{ asset('img/placeholder-male-square.png')}}" width="35" height="35" alt="avatar">

												<!-- comment body -->
												<div class="comment-body"> 
													<a href="#" class="comment-author">
														<small class="text-muted pull-right"> a moment ago </small>
														<span>Simona Doe</span>
													</a>
													<p>
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy! <i class="fa fa-smile-o green"></i> 
													</p>
												</div><!-- /comment body -->

												<!-- options -->
												<ul class="list-inline size-11">
													<li>
														<a href="#" class="text-success"><i class="fa fa-thumbs-up"></i> Like</a>
													</li>
													<li class="pull-right">
														<a href="#" class="text-danger">Delete</a>
													</li>
													<li class="pull-right">
														<a href="#" class="text-primary">Edit</a>
													</li>
												</ul><!-- /options -->

											</li>
										</ul>
										<!-- /COMMENT -->
									</div>

									<!-- Edit -->
									<div id="edit" class="tab-pane">

										<form class="form-horizontal padding-10" method="get">
											<h4>Personal Information</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">First Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileFirstName">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileLastName">Last Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileLastName">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">Address</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileAddress">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Company</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileCompany">
													</div>
												</div>
											</fieldset>

											<hr>

											<h4>About</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-xs-3 control-label">Public Profile</label>
													<div class="col-md-8">
														<label class="checkbox">
															<input type="checkbox" value="1" checked="checked" id="profilePublic">
															<i></i> Checkbox 1
														</label>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileBio">Biographical Info</label>
													<div class="col-md-8">
														<textarea class="form-control" rows="3" id="profileBio"></textarea>
													</div>
												</div>
												<div class="form-group">
													<div class="sky-form">
														<label class="col-xs-3 control-label">Profile Image</label>
														<div class="col-md-8">
															<label for="file" class="input input-file">
																<div class="button">
																	<input type="file" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse
																</div>
																<input type="text" readonly="">
															</label>
															<a href="#" class="btn btn-danger btn-xs nomargin"><i class="fa fa-times"></i> Remove Current Image</a>
														</div>
													</div>
												</div>


											</fieldset>

											<hr>
											<!--
											<h4>Change Password</h4>
											<fieldset class="mb-xl">
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPassword">New Password</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileNewPassword">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPasswordRepeat">Repeat New Password</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileNewPasswordRepeat">
													</div>
												</div>
											</fieldset>

											<div class="row">
												<div class="col-md-9 col-md-offset-3">
													<button type="submit" class="btn btn-primary">Submit</button>
													<button type="reset" class="btn btn-default">Reset</button>
												</div>
											</div>
											-->

										</form>

									</div>
								</div>
							</div>

						</div><!-- /COL 2 -->

						<!-- COL 3 -->
						<div class="col-md-4">
							<!-- projects -->
							<section class="panel panel-default">
								<header class="panel-heading">
									<h2 class="panel-title elipsis">
										<i class="fa fa-rss"></i> TAGS
									</h2>
								</header>

								<div class="panel-body noradius padding-10">
									<ul class="bullet-list list-unstyled">
										<li class="red">
											<h3>TOEIC</h3>
											<span class="text-gray size-12">Lorem ipsum dolor sit amet, consectetuer adipiscing </span>
										</li>
										<li class="green">
											<h3>FREE TALKING</h3>
											<span class="text-gray size-12">Lorem ipsum dolor sit amet, consectetuer adipiscing </span>
										</li>
										<li class="blue">
											<h3>AVAILABLE FOR KIDS</h3>
											<span class="text-gray size-12">Lorem ipsum dolor sit amet, consectetuer adipiscing </span>
										</li>
										<li class="orange">
											<h3>BUSINESS CONVERSATION</h3>
											<span class="text-gray size-12">Lorem ipsum dolor sit amet, consectetuer adipiscing </span>
										</li>
									</ul>
								</div>
							</section>
							<!-- /projects -->

							<!-- activity -->
							<section class="panel panel-default">
								<header class="panel-heading">
									<h2 class="panel-title elipsis">
										<i class="fa fa-rss"></i> SCHEDULE
									</h2>
								</header>

								<div class="panel-body noradius padding-10">
									<!-- activity list -->
									<div class="row profile-activity">
										<!-- activity item -->
										<div class="col-xs-2 col-sm-1">
											<time datetime="2014-06-29" class="datebox">
												<strong>Mar</strong>
												<span>29</span>
											</time>
										</div>

										<div class="col-xs-10 col-sm-11">
											<h6><a href="page-sidebar.html">Lorem ipsum dolor sit amet</a></h6>
											<p>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
												tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam 
												tincidunt erat volutpat.
											</p>
										</div>
										<!-- /activity item -->

										<div class="col-sm-12">
											<hr class="half-margins">
										</div><!-- /activity separator -->

										<!-- activity item -->
										<div class="col-xs-2 col-sm-1">
											<time datetime="2014-06-29" class="datebox">
												<strong>Mar</strong>
												<span>30</span>
											</time>
										</div>

										<div class="col-xs-10 col-sm-11">
											<h6><a href="page-sidebar.html">Sed diam nonummy nibh euismod</a></h6>
											<p>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
												tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam 
												tincidunt erat volutpat.
											</p>
										</div>
										<!-- /activity item -->

										<div class="col-sm-12">
											<hr class="half-margins">
										</div><!-- /activity separator -->

										<!-- paginatoin -->
										<div class="text-center">
											<ul class="pagination pagination-sm">
												<li class="disabled"><a href="#">Prev</a></li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">Next</a></li>
											</ul>													
										</div>
										<!-- /paginatoin -->
									</div>
									<!-- /activity list -->
								</div>
							</section>
							<!-- /activity -->
						</div><!-- /COL 3 -->
					</div>
				</div>
			</div>
		</div>
		<!--end posts-->
	</div>
</div>