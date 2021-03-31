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
							      	<option>1</option>
							      	<option>2</option>
							      	<option>3</option>
							      	<option>4</option>
							      	<option>5</option>
							    </select>
						    </div>
						    <div class="col-sm-2">
						    	<label for="tutorAge" class="col-form-label">Age</label>
						      	<input type="text" class="form-control" id="tutorAge" placeholder="tutor name e.g JOHN">
						    </div>
						    <div class="col-sm-2">
						    	<label for="tutorAge" class="col-form-label">Gender</label>
						      	<select class="form-control" id="countryCitizenship">
							      	<option selected disabled>Select Gender</option>
							      	<option>Male</option>
							      	<option>Female</option>
							    </select>
						    </div>
						</div>
			  			<div class="form-group row">
						    <div class="col-sm-6">
						    	<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								  <label class="form-check-label" for="inlineCheckbox1">FREE TALKING</label>
								</div>
						    	<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								  <label class="form-check-label" for="inlineCheckbox1">NATIVE SPEAKER</label>
								</div>
						    	<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								  <label class="form-check-label" for="inlineCheckbox1">AVALABLE FOR KIDS</label>
								</div>
						    	<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								  <label class="form-check-label" for="inlineCheckbox1">FOR BEGGINERS</label>
								</div>
						    </div>
						</div>
			  		</div>
				</div>
			</div>
			<!-- Middle Column end -->
		</div>
	</div>
	<!--end myclasses main-->
</div>