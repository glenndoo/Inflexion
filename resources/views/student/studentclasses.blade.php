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

					  		<div class="col-sm-9">
						  		<!--start results for groups not joined -->
								<div class="row ">
									<div class="col-sm-12">
										<div class="group-card card shadow">
									  		<div class="card-header">
									  			<div class="row">
									  				<div class="col-sm-1">
									  					<time datetime="2014-06-29" class="pull-left datebox">
															<strong>Mar</strong>
															<span>29</span>
														</time>
									  				</div>
									  				<div class="col-sm-7">
									  					<h4 title="Your Tutor for this class">
									  						 Glenn Dumaguing
									  						<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tutorInfo_1">
									  							<i class="fa fa-user" aria-hidden="true"></i>
									  						</button>
									  					</h4>
									  					<h6>Monday March 29 2021 at 3:30pm</h6>
									  				</div>
									  				<div class="col-sm-4 text-right">
									  					<a href="#" class="btn btn-success form-control">Mark as Completed</a>
									  				</div>
									  			</div>
									  		</div>
									  		<div class="card-body">
									    		ENGLISH FOR BEGGINERS
									  		</div>
										</div>
									</div>
								</div>

								<hr/><!--break to next entry-->

								<div class="row ">
									<div class="col-sm-12">
										<div class="group-card card shadow">
									  		<div class="card-header">
									  			<div class="row">
									  				<div class="col-sm-1">
									  					<time datetime="2014-06-29" class="pull-left datebox">
															<strong>Mar</strong>
															<span>30</span>
														</time>
									  				</div>
									  				<div class="col-sm-7">
									  					<h4 title="Your Tutor for this class">
									  						 Glenn Dumaguing
									  						<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tutorInfo_2">
									  							<i class="fa fa-user" aria-hidden="true"></i>
									  						</button>
									  					</h4>
									  					<h6>Monday March 30 2021 at 3:30pm</h6>
									  				</div>
									  				<div class="col-sm-4 text-right ">
									  					<div class="row">
									  						<div class="col-sm-6">
										  						<a href="#" class="btn btn-danger form-control">CANCEL</a>
										  					</div>
										  					<div class="col-sm-6">
										  						<a href="#" class="btn btn-primary form-control">RESCHED</a>
															</div>
									  					</div>
									  				</div>
									  			</div>
									  		</div>
									  		<div class="card-body">
									    		ENGLISH FOR BEGGINERS
									  		</div>
										</div>
									</div>
								</div>

								<!--end results for groups not joined -->
							</div>

							<div class="col-sm-3">
								
							</div>

					  	</div>
					  	<div class="tab-pane" id="classHistory" role="tabpanel">
					  		<h6>class history tab pane</h6>
					  	</div>
					  	<div class="tab-pane" id="classTutors" role="tabpanel">
					  		<h6>YOur Tutors tab pane</h6>
					  	</div>
					</div>
				</div>
			</div>
			<!-- main tab column end-->
		</div>
	</div>
	<!--end myclasses main-->
</div>

<!-- Modal -->
<div class="modal fade" id="tutorInfo_1" tabindex="-1" role="dialog" aria-labelledby="tutorInfo_1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Glenn Dumaguing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        MODAL ONE
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">PROFILE</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="tutorInfo_2" tabindex="-1" role="dialog" aria-labelledby="tutorInfo_2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Glenn Dumaguing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	MODAL TWO
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">PROFILE</button>
      </div>
    </div>
  </div>
</div>