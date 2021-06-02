<x-student-template data="studentclasses" />
<div class="area"> <!-- put all content inside area, outside area will mess with side naviagtion-->
	<div class="container-fluid"><!--container start-->
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
											  					<a href="#" class="btn btn-success form-control" data-toggle="modal" data-target="#markCompletedModal">Mark as Completed</a>
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
											  					<a href="#" class="btn btn-danger form-control" data-toggle="modal" data-target="#cancelClassModal">cancel</a>
											  				</div>
												  			<div class="col-sm-2">
											  					<a href="#" class="btn btn-primary form-control" data-toggle="modal" data-target="#reschedClassModal">resched</a>
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
									    <div class="col-sm-12">
											<!--div class="group-card card shadow"-->
											<div class="card shadow">
										  		<div class="card-header">
										  			<div class="row">
										  				<div class="col-sm-4">
										  					<h5>John Doe</h5>
										  				</div>
										  				<div class="col-sm-8 text-right">
										  					<span class="badge badge-secondary">TOEIC</span>
													    	<span class="badge badge-secondary">FREETALKING</span>
													    	<span class="badge badge-secondary">BEGGINER ENGLISH</span>
													    	<span class="badge badge-secondary">BUSINESS ENGLISH</span>
													    	<span class="badge badge-secondary">AVAILABLE FOR KIDS</span>
										  				</div>
										  			</div>
										  		</div>
										  		<div class="card-body">
										    		<div class="row">
										    			<div class="col-sm-11 form-inline">
										    				<div class="col-sm-3">
										    					<img class="img-responsive" src="{{ asset('img/placeholder-male-square.png')}}" alt="" width="100%">
										    				</div>
										    				<div class="col-sm-9">
										    					<div class="collapse_module">
										    						@php
										    							$aboutTutor = "Loremjjjkd Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Loremjjjkd Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
										    						@endphp
													        		<p class="collapse collapse_long_element" id="collapse_long_element" aria-expanded="false">
													                	<b>About: </b>{{$aboutTutor}}
													            	</p>
													            	@if(strlen($aboutTutor<140))
													            		<a role="button" class="collapsed" data-toggle="collapse" href=".collapse_long_element" aria-expanded="false" aria-controls="collapse_long_element"></a>
													            	@endif
													        	</div>
										    				</div>
										    			</div>
										    			<div class="col-sm-1">
										    				<a href="#" class="btn btn-primary form-control float-right" title="profile" data-toggle="modal" data-target="#profileModal">
										    					<i class="fa fa-user" aria-hidden="true"></i>
										    				</a>
										    				<a class="btn btn-info form-control float-right" title="Schedule"class="btn btn-primary" data-toggle="modal" data-target="#scheduleModal">
										    					<i class="fa fa-calendar" aria-hidden="true"></i>
										    				</a>
										    				<a href="#" class="btn btn-warning form-control float-right" title="message">
										    					<i class="fa fa-envelope-o" aria-hidden="true"></i>
										    				</a>
										    			</div>
										    		</div>
										  		</div>
										  		<!-- Modal Schedule -->
												<div class="modal fade" id="scheduleModal" tabindex="-1" role="dialog" aria-labelledby="scheduleModal" aria-hidden="true">
												  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
												    	<div class="modal-content">
												     		<div class="modal-header">
												        		<div class="modal-title" id="scheduleModaltitle">
												        		BOOK A LESSON WITH JOHN DOE
												        		</div>
												        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												          		<span aria-hidden="true">&times;</span>
												        		</button>
												      		</div>
													      	<div class="modal-body">
													      		
													      	</div>
													      	<div class="modal-footer">
													      		<button class="btn btn-success" type="submit">SAVE</button>
													      	</div>
												    	</div>
												  	</div>
												</div>
										  		<!-- Modal -->
										  		<!-- Modal Schedule -->
												<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalTitle" aria-hidden="true">
												  	<div class="modal-dialog modal-dialog-centered" role="document">
												    	<div class="modal-content">
												     		<div class="modal-header">
												        		<div class="modal-title" id="profileModalrTitle">
												        		Profile Modal
												        		</div>
												        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												          		<span aria-hidden="true">&times;</span>
												        		</button>
												      		</div>
													      	<div class="modal-body">
													      		
															</div>
													      	<div class="modal-footer">
													      		<button class="btn btn-success" type="submit">Full Profile</button>
													      	</div>
												    	</div>
												  	</div>
												</div>
										  		<!-- Modal -->
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
	</div><!--container end-->
</div>

<!-- mark completed Modal -->
<div class="modal fade" id="markCompletedModal" tabindex="-1" role="dialog" aria-labelledby="markCompletedModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- cancel Modal -->
<div class="modal fade" id="cancelClassModal" tabindex="-1" role="dialog" aria-labelledby="cancelClassModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--resched Modal -->
<div class="modal fade" id="reschedClassModal" tabindex="-1" role="dialog" aria-labelledby="reschedClassModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>