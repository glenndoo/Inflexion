<x-student-template data="studentclasses" />
<div class="area"> <!-- put all content inside area, outside area will mess with side naviagtion-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm">
				<br/>
				<br/>
			</div>
		</div>
		<!--start myclasses main -->
		<div class="row">
			<!-- side bar column-->
			<div class="col-sm-3">
				<!--side search-->
				<div class="row">
					<div class="col-sm-12 ">
						<div class="search ">
			            	<div type="text" class="search-input" placeholder="Search groups..." name="">
			            		<h4>Your Classes</h4>
			            	</div>
			            </div>
		            </div>
				</div>
				<br>
				<!-- side sub nav-->
				<div class="row">
				    <div class="col-sm-12 collapse_module_page">
				      	<ul class="nav nav-tabs group-tabs collapse collapse_page_element" id="myTab" role="tablist" aria-expanded="false">
					        <li class="nav-item  group-tabs"><!-- connected to active tab-pane tabpanel bookedClasses-->
					            <a class="nav-link active group-tabs" data-toggle="tab" href="#bookedClasses" role="tab" aria-controls="bookedClasses">Booked Classes</a>
					        </li>
					        <li class="nav-item group-tabs"><!-- connected to tab-pane tabpanel classHistory-->
					            <a class="nav-link group-tabs" data-toggle="tab" href="#classHistory" role="tab" aria-controls="classHistory">Class history</a>
					        </li>

					        <hr/>

					        <li class="nav-item group-tabs"><!-- connected to tab-pane tabpanel classTutors-->
					            <a class="nav-link group-tabs" data-toggle="tab" href="#classTutors" role="tab" aria-controls="discover">Your Tutors</a>
					        </li>
					    </ul>
					</div>
				</div>
			</div>
			<!-- side bar column end-->

			<!-- main tab column-->
			<div class="col-sm-9">
				<br/>
				<div class="panel panel-default">
					<!--tab content start-->
					<div class="tab-content">
						<!--all group posts start--> 
					  	<div class="tab-pane active" id="bookedClasses" role="tabpanel">
					  		<h6>BOOKED CLASSES</h6>
					  		<div class="row ">
					  			<!--middle column this tab-->
						  		<div class="col-sm-9">
							  		<!--start results for booked -->
							  		@foreach(range(date('d')-3, date('d')) as $d)<!--just to loop results for 4 days-->
									    <div class="row ">
											<div class="col-sm-12">
												<div class="group-card card shadow">
											  		<div class="card-header">
											  			<div class="row">
											  				<div class="col-sm-2 pull-left">
											  					<time datetime="2014-06-29" class="datebox">
																	<strong>Mar</strong>
																	<span>{{$d}}</span>
																</time>
											  				</div>
											  				<div class="col-sm-6">
											  					<h4 title="Your Tutor for this class">
											  						 John Doe
											  						<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#t_Info_b{{$d}}">
											  							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
											  						</button>
											  					</h4>
											  					<h6>Monday March {{$d}} 2021 at 3:30pm</h6>
											  				</div>
											  				<div class="col-sm-4">
											  					<a href="#" class="btn btn-success form-control">Mark as Completed</a>
											  					<small><i>45 IG credits used</i></small>
											  				</div>
											  			</div>
											  		</div>
											  		<div class="card-body">
											  			<div class="row">
											  				<div class="col-sm-8">
												    		ENGLISH FOR BEGGINERS
												  			</div>
												  			<div class="col-sm-2">
											  					<a href="#" class="btn btn-danger form-control">cancel</a>
											  				</div>
												  			<div class="col-sm-2">
											  					<a href="#" class="btn btn-primary form-control">resched</a>
											  				</div>
											  			</div>
											  		</div>
												</div>
											</div>
										</div>
										<!-- looped Modal -->
										<div class="modal fade" id="t_Info_b{{$d}}" tabindex="-1" role="dialog" aria-labelledby="t_Info_b{{$d}}" aria-hidden="true">
										  <div class="modal-dialog modal-dialog-centered" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLongTitle">John Doe</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										      	{{$d}}
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										        <button type="button" class="btn btn-primary">PROFILE</button>
										      </div>
										    </div>
										  </div>
										</div>

										<hr/><!--break to next entry-->
									@endforeach
									<!--end results for booked -->
								</div>
								<!--right most column this tab-->
								<div class="col-sm-3">
									empty column
								</div>
							</div>

					  	</div>
					  	<div class="tab-pane" id="classHistory" role="tabpanel">
					  		<h6>CLASSES HISTORY</h6>
					  		<div class="row ">
					  			<!--middle column this tab-->
						  		<div class="col-sm-9">
						  			<!--start results for history -->
							  		@foreach(range(date('d')-3, date('d')) as $d)<!--just to loop results for 4 days-->
									    <div class="row ">
											<div class="col-sm-12">
												<div class="group-card card shadow">
											  		<div class="card-header">
											  			<div class="row">
											  				<div class="col-sm-1">
											  					<time datetime="2014-06-29" class="pull-left datebox">
																	<strong>Feb</strong>
																	<span>{{$d}}</span>
																</time>
											  				</div>
											  				<div class="col-sm-7">
											  					<h4 title="Your Tutor for this class">
											  						 John Doe
											  						<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#t_info_h{{$d}}">
											  							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
											  						</button>
											  					</h4>
											  					<h6>Monday February {{$d}} 2021 at 3:30pm</h6>
											  				</div>
											  				<div class="col-sm-4 text-right">
											  					<a href="#" class="btn btn-secondary form-control">Completed</a>
											  					<small><i>45 IG credits used</i></small>
											  				</div>
											  			</div>
											  		</div>
											  		<div class="card-body">
											  			<div class="row">
											  				<div class="col-sm-12">
												    		ENGLISH FOR BEGGINERS
												  			</div>
											  			</div>
											  			
											  		</div>
												</div>
											</div>
										</div>

										<!-- looped Modal -->
										<div class="modal fade" id="t_info_h{{$d}}" tabindex="-1" role="dialog" aria-labelledby="t_info_h{{$d}}" aria-hidden="true">
										  <div class="modal-dialog modal-dialog-centered" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLongTitle">John Doe</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										      	{{$d}}
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										        <button type="button" class="btn btn-primary">PROFILE</button>
										      </div>
										    </div>
										  </div>
										</div>

										<hr/><!--break to next entry-->
									@endforeach
									<!--end results for history -->
						  		</div>
						  		<!--right most column this tab-->
						  		<div class="col-sm-3">
									empty column
								</div>
							</div>
					  	</div>
					  	<div class="tab-pane" id="classTutors" role="tabpanel">
					  		<h6>Your Tutors tab pane</h6>
					  		<div class="row ">
					  			<!--middle column this tab-->
						  		<div class="col-sm-9">
						  			<!--start results for history -->
							  		@foreach(range(date('d')-2, date('d')) as $d)<!--just to loop results for 4 days-->
									    <div class="row ">
											<div class="col-sm-12">
												<div class="group-card card shadow">
											  		<div class="card-header">
											  			<div class="row">
											  				<div class="col-sm-1">
											  					B
											  				</div>
											  				<div class="col-sm-7">
											  					<h4 title="Your Tutor for this class">
											  						D
											  					</h4>
											  					<h6>C</h6>
											  				</div>
											  				<div class="col-sm-4 text-right">
											  					A
											  				</div>
											  			</div>
											  		</div>
											  		<div class="card-body">
											  			<div class="row">
											  				<div class="col-sm-4">
												    		F
												  			</div>
											  				<div class="col-sm-4">
												    		G
												  			</div>
											  				<div class="col-sm-4">
												    		H
												  			</div>
											  			</div>
											  			
											  			<div class="row">
											  				<div class="col-sm-4">
												    		I
												  			</div>
											  				<div class="col-sm-4">
												    		J
												  			</div>
											  				<div class="col-sm-4">
												    		K
												  			</div>
											  			</div>
											  			
											  		</div>
												</div>
											</div>
										</div>
										<hr/><!--break to next entry-->
									@endforeach
									<!--end results for history -->
						  		</div>
						  		<!--right most column this tab-->
						  		<div class="col-sm-3">
									empty column
								</div>
							</div>
					  	</div>
					</div>
				</div>
			</div>
			<!-- main tab column end-->
		</div>
		<!--end myclasses main-->
	</div>
</div>