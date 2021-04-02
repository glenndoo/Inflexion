<x-student-template data="studentfindtutor" />
<div class="area"> <!-- put all content inside area, outside area will mess with side naviagtion-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm">
				<br/>
				<br/>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-1">
			</div>
			<!-- Middle Column -->
			<div class="col-sm-10">
				<br/>
				<h6>Find tutor</h6>
				<!-- search bar start-->
				<div class="group-card card shadow">
			  		<div class="card-header">
			  			<div class="row">
			  				<div class="col-sm-4">SEARCH TUTORS</div>
			  				<div class="col-sm-4 text-right"><smalll><i>1000 tutors registered</i></smalll></div>
			  			</div>
			  		</div>
			  		<div class="card-body">
			  			<div class="form-group row">
						    <div class="col-sm-6">
						    	<label for="tutorName" class="col-form-label">Tutor Name</label>
						      	<input type="text" class="form-control" id="tutorName" placeholder="e.g JOHN">
						    </div>
						    <div class="col-sm-2">
						    	<label for="countryCitizenship" class="col-form-label">Country of Citizenship</label>
						      	<select class="form-control" id="countryCitizenship">
							      	<option selected>unspecified</option>
							      	<option>Country from API</option>
							    </select>
						    </div>
						    <div class="col-sm-2">
						    	<label for="tutorAge" class="col-form-label">Age</label>
						      	<input type="text" class="form-control" id="tutorAge" placeholder="e.g 30">
						    </div>
						    <div class="col-sm-2">
						    	<label for="tutorAge" class="col-form-label">Gender</label>
						      	<select class="form-control" id="countryCitizenship">
							      	<option selected>Unspecified</option>
							      	<option>Male</option>
							      	<option>Female</option>
							    </select>
						    </div>
						</div>
			  			<div class="form-group">
			  				<div class="row  d-flex justify-content-center">
				  				<a class="float-right"data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
							    +Advanced Options
							  	</a>
							</div>
							<br/>
					    	<div class="collapse row" id="collapseExample">
					    		<div class="col-sm-12 form-check-inline d-flex justify-content-center">
						    		<ul class="chec-radio">
										<li class="pz">
											<label class="radio-inline">
												<input type="checkbox" id="pro-chx-residential" name="gas_availability" class="pro-chx" value="yes">
												<div class="clab">
													<i class="fa fa-black-tie" aria-hidden="true"></i>Native Speaker
												</div>
											</label>
										</li>
										<li class="pz">
											<label class="radio-inline">
												<input type="checkbox" id="pro-chx-residential" name="electricity_availability" class="pro-chx" value="yes">
												<div class="clab">
													<i class="fa fa-child" aria-hidden="true"></i>Available for kids
												</div>
											</label>
										</li>
										<li class="pz">
											<label class="radio-inline">
												<input type="checkbox" id="pro-chx-residential" name="phone_internet" class="pro-chx" value="yes">
												<div class="clab">
													<i class="fa fa-comment" aria-hidden="true"></i>Free talking
												</div>
											</label>
										</li>
										<li class="pz">
											<label class="radio-inline">
												<input type="checkbox" id="pro-chx-residential" name="water_availability" class="pro-chx" value="yes">
												<div class="clab">
													<i class="fa fa-book" aria-hidden="true"></i>For begginers
												</div>
											</label>
										</li>
										<li class="pz">
											<label class="radio-inline">
												<input type="checkbox" id="pro-chx-residential" name="sanitation" class="pro-chx" value="yes">
												<div class="clab"><i class="fa fa-users" aria-hidden="true"></i> Group Class</div>
											</label>
										</li>
									</ul>
								</div>

					    		<div class="col-sm-3">
				    				<div class="form-group">
									    	<label for="tutorName" class="col-form-label">Hobbies & Interest</label>
									      	<input type="text" class="form-control" id="tutorName" placeholder="e.g Photography">
									</div>
					    		</div>
					    		<div class="col-sm-3">
				    				<div class="form-group">
									    	<label for="tutorName" class="col-form-label">Tags</label>
									      	<input type="text" class="form-control" id="tutorName" placeholder="e.g TOEIC">
									</div>
					    		</div>
					    		<div class="col-sm-2">
				    				<label for="countryCitizenship" class="col-form-label">Preferred Time</label>
							      	<select class="form-control" id="countryCitizenship">
								      	<option selected>unspecified</option>
								      	<option>Morning</option>
								      	<option>Afternoon</option>
								      	<option>Evening</option>
								    </select>
					    		</div>
					    		<div class="col-sm-2">
				    				<label for="countryCitizenship" class="col-form-label">Schedule availability</label>
							      	<select class="form-control" id="countryCitizenship">
								      	<option selected>unspecified</option>
								      	<option>MWF</option>
								      	<option>TTHS</option>
								      	<option>Weekdays</option>
								      	<option>Weekends</option>
								    </select>
					    		</div>
					    		<div class="col-sm-2">
				    				<div class="form-group">
									    	<label for="tutorName" class="col-form-label">Minimum credits</label>
									      	<input type="text" class="form-control" id="tutorName" placeholder="e.g 25">
									</div>
					    		</div>
							</div>
						</div>
			  		</div>
				</div>
				<!-- search bar end-->

				<hr/>

				<!--result start -->
				<div class="row d-flex justify-content-center">
					<div class="col-sm-8">
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
					    					<img class="img-responsive" src="{{ asset('img/placeholder-male-square.png')}}" alt="" width="100rem">

					    				</div>
					    				<div class="col-sm-9">
					    					<p>Loremjjjkd Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					    				</div>
					    				
					    			</div>
					    			<div class="col-sm-1">
					    				<a href="#" class="btn btn-primary form-control float-right" title="profile">
					    					<i class="fa fa-user" aria-hidden="true"></i>
					    				</a>
					    				<a class="btn btn-info form-control float-right" title="Schedule"class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
					    					<i class="fa fa-calendar" aria-hidden="true"></i>
					    				</a>
					    				<a href="#" class="btn btn-warning form-control float-right" title="message">
					    					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					    				</a>
					    			</div>
					    		</div>
					  		</div>
					  		<!-- Modal -->
							<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							    	<div class="modal-content">
							     		<div class="modal-header">
							        		<div class="modal-title" id="exampleModalCenterTitle">
							        		BOOK A LESSON WITH JOHN DOE
							        		</div>
							        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          		<span aria-hidden="true">&times;</span>
							        		</button>
							      		</div>
								      	<div class="modal-body">
								      		<div class="row d-flex justify-content-center">
								      			<div class="col-sm-2">
								      				<div href="" class="disabled btn-success text-center">Your Booking</div>
								      			</div>
								      			<div class="col-sm-2">
									       	 		<div href="" class="disabled btn-secondary text-center">Reserved</div>
									       	 	</div>
									       	 	<div class="col-sm-2">
									       	 		<div href="" class="disabled btn-primary text-center">Open</div>
								      			</div>
								      		</div>

								      		<hr/>
								      		@php
											$begin = new DateTime('2021-04-05');
											$end = new DateTime('2021-04-12');

											$interval = DateInterval::createFromDateString('1 day');
											$period = new DatePeriod($begin, $interval, $end);
											@endphp
								      		<div class="row">
								      			<div class="col-sm-12">
										        	<table class="table table-bordered">
													  	<thead class="thead-dark">
														    <tr>
														    	@foreach ($period as $dt)
														    		<th scope="col">{{$dt->format("l")}}<br/><small>{{$dt->format("Y-m-d")}}</small></th>
														    	@endforeach
														    </tr>
													  	</thead>
														<tbody>
														    <tr>
														    	@foreach ($period as $dt)
														    		<!--foreach($tutorSchedTime) somthing something from database idk well shit-->
															      	<td class="text-center">
															      		<button class="btn-primary btn btn-schedule">8:00am</button><br/>
															      		<button class="btn-secondary btn btn-schedule">9:00am</button><br/>
															      		<button class="btn-success btn btn-schedule">10:00am</button><br/>
															      		<button class="btn-primary btn btn-schedule">11:00am</button><br/>
															      		<button class="btn-primary btn btn-schedule">12:00am</button><br/>
															      	</td>
															      	<!--endforeach-->
														      	@endforeach
														    </tr>
														</tbody>
													</table>
								      			</div>
								      		</div>
								      	</div>
								      	<div class="modal-footer">
								      	</div>
							    	</div>
							  	</div>
							</div>
					  		<!-- Modal -->
						</div>
					</div>
				</div>
				<div class="row  d-flex justify-content-center"> <!-- this row div just separates result div-->
					<div class="col-sm-8">
					<hr/>
					</div>
				</div>
				<!--result start end-->
			</div>
		</div><!-- Middle Column end -->
	</div><!--end myclasses main-->
</div>