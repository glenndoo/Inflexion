<x-tutor-template data="tutorprofile" />
<div class="area fade-load"> <!-- put all content inside area, outside area will mess with side naviagtion-->
	<div class="container ">
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
				<h6></h6>
			</div>
		</div>
		<!--post to feed end-->
		@php $id = session()->get('info.userDetails.inflexion_user_id') @endphp

		<!--start profile-->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-profile">
					<div class="row">
						<!-- COL 1 -->
						<div class="col-md-3">
							<section class="panel shadow">
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
										@if(!empty($hobby))
															@foreach($hobby as $hobbs)
															<a href="#"><span class="badge badge-secondary">{{ $hobbs }}</span>
														@endforeach
														@else
														Add your hobbies and interests now
														@endif
										</li>
									</ul><!-- /updated -->

									<hr class="half-margins">
									<!-- Social -->
									<h6>RATING</h6>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half"></i>
										4.89 / 5
									<!-- /Social -->
									<hr class="half-margins">

									<!-- About -->
									<h3 class="text-black">
										{{ session()->get('info.userWholeName')}} 
										<small class="text-gray size-14"> Tutor</small>
									</h3>
									<p class="size-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.</p>
									<!-- /About -->
								</div>
							</section>
						</div><!-- /COL 1 -->

						<!-- COL 2 -->
						<div class="middle-col col-md-5">

							<div class="tabs white nomargin-top shad">
								<ul class="nav nav-tabs tabs-primary">
									<li class="active">
										<a href="#overview" data-toggle="tab" class="form-control">Overview</a>
									</li>
									<li>
										<a href="#edit" data-toggle="tab" class="form-control">Edit</a>
									</li>
								</ul>

								<div class="tab-content shadow">
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

										<form class="form-horizontal padding-10" method="POST" action="{{ route('insertHobby', ['id' => $id]) }}">
											@csrf
											<h4>YOUR BADGES</h4>
											<fieldset>
												<!--start hobbies And Interests input-->
												<div class="form-group">
													<div class="row">
														<label class="col-md control-label" for="profileFirstName">Hobbies and Interest</label>
													</div>
													<div class="row">
														<div class="col-md">
															@if(!empty($hobby))
															@foreach($hobby as $hobbs)
														<a style="font-size: 7pt;" class="badge badge-secondary" aria-label="Close">{{ $hobbs }}<span aria-hidden="true">&times;</span></a>
														@endforeach
														@else
														Add your hobbies and interests now
														@endif
														</div>
													</div>
													<div class="row">
														<div class="col-md-10">
															
															<input type="text" class="form-control" name="hobbies" />
														</div>
														<div class="col-md-2">
															<input type="submit"><i class="fa fa-plus"></i></input>
														</div>
														
													</div>
													
												</div>
												</form>
												<!--end hobbies And Interests input-->
												<hr/>
												<!--end tags input-->
												<div class="form-group">
													<div class="row">
														<label class="col-md control-label" for="tags">Tags</label>
													</div>
													<div class="row">
												<form class="form-horizontal padding-10" method="POST" action="{{ route('insertTag', ['id' => $id]) }}">
													@csrf
														<div class="col-md">
															@if(isset($tag))
															@foreach($tag as $tags)
															<a style="font-size: 7pt;" class="badge badge-success" aria-label="Close">{{ $tags }}<span aria-hidden="true">&times;</span></a>

															@endforeach
															@else
															Add your tags here now
															@endif
																
														</div>
													</div>
													<div class="row">
														<div class="col-md-10">
															<input type="text" class="form-control" id="tags" name="tags" />
														</div>
														<div class="col-md-2">
															<input type='submit' class="form-control btn btn-sm btn-primary"><i class="fa fa-plus"></i></input>
														</div>
													</div>
												</form>
												</div>
												<!--end tags input-->
											</fieldset>

											<hr>

											<h4>About me</h4>
											<fieldset>
												<form method="POST" action="">
												<div class="form-group">
													<div class="row">
														<div class="col-md-12">
															<label class="control-label" for="profileBio">Information</label>
														</div>
													</div>

													<div class="row">
														<div class="col-md-10">
															<textarea class="form-control" rows="3" id="profileBio" name="about"></textarea>
														</div>
														<div class="col-md-2">
															<button class="form-control btn btn-sm btn-primary"><i class="fa fa-save"></i></button>
														</div>
													</div>
												</form>
													
													<div class="col-md-8">
														
													</div>
												</div>

												<hr/>

												<div class="form-group">
													<div class="row">
														<div class="col-md-12">
															<label class="control-label">Profile Image</label>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="sky-form">
																<label for="file" class="input input-file">
																	<div class="button">
																		<input type="file" id="file" onchange="this.parentNode.nextSibling.value = this.value">
																	</div>
																</label>
																<a href="#" class="btn btn-danger btn-xs nomargin"><i class="fa fa-times"></i> Remove Current Image</a>
															</div>
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

									</div>
								</div>
							</div>

						</div><!-- /COL 2 -->

						<!-- COL 3 -->
						<div class="col-md-4">
							<!-- projects -->
							<section class="panel panel-default shadow">
								<header class="panel-heading">
									<h2 class="panel-title elipsis">
										<i class="fa fa-tag"></i> TAGS
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
							<section class="panel panel-default shadow">
								<header class="panel-heading">
									<h2 class="panel-title elipsis">
										<i class="fa fa-list"></i> SCHEDULE
									</h2> (for tutor)
									<div class="row">
												<div class="col-sm-4">
													<a class="sched-button legend form-control btn btn-secondary disabled">CLOSED</a>
												</div>
												<div class="col-sm-4">
													<a class="sched-button legend form-control btn btn-success disabled">OPEN</a>
												</div>
												<div class="col-sm-4">
													<a class="sched-button legend form-control btn btn-primary disabled">BOOKED</a>
												</div>
											</div>
											<hr/>
								</header>

								<div class="panel-body noradius padding-10">
									<!-- activity list -->
									<div class="row profile-activity">
										<!-- activity item -->
										<div class="col-sm-2">
											<time datetime="2014-06-29" class="datebox">
												<strong>Mar</strong>
												<span>29</span>
											</time>
										</div>

										<div class="col-sm-10">
											<div class="row">
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">8:00</a>
													</div>
													<div class="col-sm-4">
														<a  class="sched-button form-control btn btn-success">9:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">10:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">11:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">12:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-primary disabled">13:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-secondary disabled">14:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">15:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">16:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">17:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-primary disabled">18:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-primary disabled">19:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-primary disabled">20:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-primary disabled">21:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-primary disabled">22:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">23:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">24:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">10:00</a>
													</div>
											</div>
											
											
										</div>
										<!-- /activity item -->

										<div class="col-sm-12">
											<hr class="half-margins">
										</div><!-- /activity separator -->

										<!-- activity item -->
										<div class="col-sm-2">
											<time datetime="2014-06-29" class="datebox">
												<strong>Mar</strong>
												<span>30</span>
											</time>
										</div>

										<div class="col-sm-10">
											<div class="row">
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">8:00</a>
													</div>
													<div class="col-sm-4">
														<a  class="sched-button form-control btn btn-success">9:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">10:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">11:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">12:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-primary disabled">13:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-secondary disabled">14:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">15:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">16:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">17:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-primary disabled">18:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-primary disabled">19:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-primary disabled">20:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-primary disabled">21:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-primary disabled">22:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">23:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">24:00</a>
													</div>
													<div class="col-sm-4">
														<a class="sched-button form-control btn btn-success">00:00</a>
													</div>
											</div>
										</div>
										<!-- /activity item -->

										<div class="col-sm-12">
											<hr class="half-margins">
										</div><!-- /activity separator -->

										<!-- paginatoin -->
										<div class="col-sm-12">
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
