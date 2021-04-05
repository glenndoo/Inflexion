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

				<!--result start this is a teacher's div from here-->
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
					    					<img class="img-responsive" src="{{ asset('img/placeholder-male-square.png')}}" alt="" width="100%">
					    				</div>
					    				<div class="col-sm-9">
					    					<div class="collapse_module">
					    						@php
					    							$aboutTutor = "Loremjjjkd Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Loremjjjkd Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
					    						@endphp
								        		<p class="collapse collapse_long_element" id="collapse_long_element" aria-expanded="false">
								                	{{$aboutTutor}}
								            	</p>
								            	@if(strlen($aboutTutor<140))
								            		<a role="button" class="collapsed" data-toggle="collapse" href=".collapse_long_element" aria-expanded="false" aria-controls="collapse_long_element"></a>
								            	@endif
								        	</div>
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
					  		<!-- Modal Schedule -->
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
								      		@php
								      		$date = date('Y-m-d'); //date today, starts week table today
											$weekOfdays = array();
											$begin = new DateTime($date);
											$end = new DateTime($date);
											$end = $end->add(new DateInterval('P7D'));
											$interval = new DateInterval('P1D');
											$daterange = new DatePeriod($begin, $interval ,$end);

								      		@endphp
								      		<div class="row">
								      			<div class="col-sm-12">
										        	<table class="table table-bordered">
													  	<thead class="thead-dark">
														    <tr>
														    	@foreach($daterange as $dt)
														    		<th scope="col">
														    			 {{$weekOfdays[] = $dt->format('l')}}<br/>
														    			<small>{{ $weekOfdays[] = $dt->format('Y-M-d')}}</small>
														    		</th>
														    		
														    	@endforeach
														    </tr>
													  	</thead>
														<tbody>
														    <tr>
														    	@foreach($daterange as $dt)
														    		
															      	<td class="text-left">
															      		<div class="form-check btn-primary">
																	    	<input type="checkbox" class="form-check-input">
																	    	<label class="form-check-label" for="">9:00</label>
																	  	</div>

																	  	<br/>

																	  	<div class="form-check btn-secondary">
																	    	<label class="form-check-label" for="">11:00</label>
																	  	</div>

																	  	<br/>

																	  	<div class="form-check btn-warning">
																	    	<input type="checkbox" class="form-check-input" checked>
																	    	<label class="form-check-label" for="">11:00</label>
																	  	</div>
															      	</td>
														    	@endforeach
														    </tr>
														</tbody>
													</table>
								      			</div>
								      		</div>
								      	</div>
								      	<div class="modal-footer">
								      		<button class="btn btn-success" type="submit">SAVE</button>
								      	</div>
							    	</div>
							  	</div>
							</div>
					  		<!-- Modal -->
						</div>
					</div>
				</div>
				<!--result end teacher's div, new tutor div insert from here-->

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