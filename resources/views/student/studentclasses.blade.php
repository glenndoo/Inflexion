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
							  		@foreach($notifs as $notif)<!--just to loop results for 4 days-->
									  @if($notif->status == 1 && $notif->student_status == 0 || $notif->status == 0 || $notif->status == 3)
									    <div class="row ">
											<div class="col-sm-12">
												<div class="group-card card shadow">
											  		<div class="card-header">
											  			<div class="row">
											  				<div class="col-sm-2 pull-left">
											  					<time datetime="2014-06-29" class="datebox">
																	<strong></strong>
																	<span></span>
																</time>
											  				</div>
											  				<div class="col-sm-6"> Tutor name: 
											  					<h4 title="Your Tutor for this class">
											  						{{ $notif->inflexion_detail_first . " " . $notif->inflexion_detail_last}}
											  						<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#t_Info_b">
											  							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
											  						</button>
											  					</h4>
											  					<h6></h6>
											  				</div>
											  				<div class="col-sm-4">
																  @if($notif->student_status == 0 && $notif->status == 1)
											  					<a href="#" class="btn btn-success form-control" data-toggle="modal" data-target="#markCompletedModal{{ $notif->id }}">Mark as Done</a>
																  Details: <br />
																  Tutor approved schedule<br />
																	Date and time of class: <strong>{{ $notif->schedule }}</strong><br />
																	Class booked
																  @elseif($notif->status == 0)
																  CLASS APPROVAL IS PENDING<br />
																  Details:<br />
																  Awaiting tutor approval<br />
																  Requested Date and time of class: <strong>{{ $notif->schedule }}</strong>
																@elseif($notif->student_status == 1)
																Details:
																Class marked done by student
																@elseif($notif->status == 3)
																<a href="#" class="btn btn-primary form-control" data-toggle="modal" data-target="#markCompletedModal{{ $notif->id }}">Mark as Done</a>
																Details:<br />
																Class marked done by your tutor
											  					  @endif
															</div>
											  			</div>
											  		</div>
													  @if($notif->student_status == 0 && $notif->status == 1)
											  		<div class="card-body">
											  			<div class="row">
											  				<div class="col-sm-8">
												    		
												  			</div>
												  			<div class="col-sm-2">
											  					<a href="#" class="btn btn-danger form-control" data-toggle="modal" data-target="#cancelClassModal">cancel</a>
											  				</div>
												  			<div class="col-sm-2">
											  					<a href="#" class="btn btn-primary form-control" data-toggle="modal" data-target="#reschedClassModal">resched</a>

											  				</div>
											  			</div>
											  		</div>
													  @endif
												</div>
											</div>
										</div>
										<!-- looped Modal -->
										<div class="modal fade" id="t_Info_b" tabindex="-1" role="dialog" aria-labelledby="t_Info_b" aria-hidden="true">
										  <div class="modal-dialog modal-dialog-centered" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLongTitle">John Doe</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										      	
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										        <button type="button" class="btn btn-primary">PROFILE</button>
										      </div>
										    </div>
										  </div>
										</div>

										<hr/><!--break to next entry-->
										<!-- mark completed Modal -->
<div class="modal fade" id="markCompletedModal{{ $notif->id }}" tabindex="-1" role="dialog" aria-labelledby="markCompletedModalTitle{{ $notif->id }}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Class Done</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        You are about to mark this class as done, are you sure?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{ route('markAsDoneStudent', ['id' => $notif->id, 'username' => $notif->inflexion_username]) }}" type="button" class="btn btn-success">Mark as Done</a>
      </div>
    </div>
  </div>
</div>
									@endif
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
							  		@foreach($notifs as $notif)<!--just to loop results for 4 days-->
									    <div class="row ">
											<div class="col-sm-12">
												<div class="group-card card shadow">
											  		<div class="card-header">
											  			<div class="row">
											  				<div class="col-sm-2 pull-left">
											  					<time datetime="2014-06-29" class="datebox">
																	<strong></strong>
																	<span></span>
																</time>
											  				</div>
											  				<div class="col-sm-6">
											  					<h4 title="Your Tutor for this class">
											  						 {{ $notif->inflexion_detail_first . " " . $notif->inflexion_detail_last}}
											  						<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#t_Info_b">
											  							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
											  						</button>
											  					</h4>
											  					<h6></h6>
											  				</div>
											  				<div class="col-sm-4">
																  <strong>CLASS STATUS: </strong><br />
																  @if($notif->status == 1 && $notif->student_status == 0)
											  					<a href="#" class="btn btn-primary form-control" data-toggle="modal" data-target="#markCompletedModal{{ $notif->id }}">Mark as Done</a>
											  					Details: <br />
																  Tutor approved schedule<br />
																	Date and time of class: <strong>{{ $notif->schedule }}</strong><br />
																	Class in progress<br />
																  @elseif($notif->status == 0)
																  <button class="btn btn-primary btn-sm" disabled>PENDING APPROVAL</button>
																  Details:<br />
																  Awaiting tutor approval
																  @elseif($notif->status == 2)
																  <button class="btn btn-danger btn-sm" disabled>DECLINED</button>
																  @elseif($notif->status == 4)
																  <button class="btn btn-success btn-sm" disabled>CLASS COMPLETED</button><br />
																  Details: <br />
																  Tutor approved schedule<br />
																	Date and time of class: <strong>{{ $notif->schedule }}</strong><br />
																	<strong>Class completed</strong>
																  @elseif($notif->student_status == 1)
																  <button class="btn btn-primary btn-sm" disabled>YOU'VE MARKED THIS CLASS AS DONE</button>
																  @elseif($notif->status == 3)
																  <a href="#" class="btn btn-success form-control" data-toggle="modal" data-target="#markCompletedModal{{ $notif->id }}">Mark as Done</a>
																  Details:<br />
																Class marked done by your tutor 
																  @endif
															</div>
											  			</div>
											  		</div>
											  		<div class="card-body">
											  			
											  		</div>
												</div>
											</div>
										</div>
										<!-- looped Modal -->
										<div class="modal fade" id="t_Info_b" tabindex="-1" role="dialog" aria-labelledby="t_Info_b" aria-hidden="true">
										  <div class="modal-dialog modal-dialog-centered" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLongTitle">John Doe</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										      	
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
													      		@php
													      		$date = date('Y-m-d'); //date today, starts week table today
																$weekOfdays = array();
																$begin = new DateTime($date, new DateTimeZone('Asia/Manila'));
																$end = new DateTime($date);
																$end = $end->add(new DateInterval('P7D'));
																$interval = new DateInterval('P1D');
																$daterange = new DatePeriod($begin, $interval ,$end);

													      		@endphp
													      		<div class="row d-flex justify-content-center">
													      			<div class="col-sm-2">
													      				<div href="" class="disabled btn-warning text-center">Your Booking</div>
													      			</div>
													      			<div class="col-sm-2">
														       	 		<div href="" class="disabled btn-secondary text-center">Reserved</div>
														       	 	</div>
														       	 	<div class="col-sm-2">
														       	 		<div href="" class="disabled btn-primary text-center">Open</div>
													      			</div>
													      		</div>
													      		<hr/>
													      		<div class="row d-flex">
														      		<div class="col-sm-12 text-center">
														      			<SELECT>
														      				<option>
														      					<b>Timezone {{date_format($begin, 'Y-m-d P (e)')}}</b><!--this shows timezone of $begin, idk yet hot to set using this slect option-->
														      				</option>
														      			</SELECT>
														      			
														      		</div>
														      	</div>
													      		<hr/>
													      		<div class="row">
													      			<table class="table">
																	  	<thead class="thead-dark">
																	  		<tr>
																	    	@foreach($daterange as $dt)
																	        	<th scope="col" class=" text-center">
																	        		<h6>{{$weekOfdays[] = $dt->format('D')}}<br/></h6>
															    					<small>{{ $weekOfdays[] = $dt->format('m-d')}}</small>
															    				</th>
																	    	@endforeach
																	  		</tr>
																		</thead>
																		  <tbody>
																		    <tr>
																		    	@foreach($daterange as $dt)
																		      	<td class="check-time">
																		      		<!--if booking exists for this user-->
																					<label class="btn btn-warning form-control active">
																						<input class="float-left" type="checkbox" autocomplete="off" checked name="" value="{{ $weekOfdays[] = $dt->format('y-m-d')}}" />
																						<p class="text-right">10:00</p>
																						<span class="fa fa-check "></span>
																					</label>
																					<!--end-->
																					
																					<!--if booked by other user-->
																					<label class="bg-secondary form-control text-left">
																						<p class="text-right">11:00</p>
																						<span class="fa fa-check"></span>
																					</label>	
																					<!--end-->
																				
																					<!--if time slot is open-->
																					<label class="btn btn-primary form-control text-left">
																						<input class="float-left" type="checkbox" autocomplete="off" name="" value="{{ $weekOfdays[] = $dt->format('y-m-d')}}" />
																						<p class="text-right">12:00</p>
																						<span class="fa fa-check"></span>
																					</label>
																					<!--end-->

																		      	</td>
																		     	@endforeach
																		    </tr>
																		  </tbody>
																		</table>
													      		</div>
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