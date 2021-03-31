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
			</div>
		</div><!-- Middle Column end -->
	</div><!--end myclasses main-->
</div>