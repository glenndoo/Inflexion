<x-tutor-template data="tutorsettings" />
<div class="area fade-load"> <!-- put all content inside area, outside area will mess with side naviagtion-->
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
				<h6>tutor>tutorsettings</h6>
			</div>
		</div>
		<!--post to feed end-->

		<!--settings start-->
		<div class="row">
			<div class="col-sm-12">
				<div class="panel container register-form">
		            <div class="panel-body form shadow">
		                <div class="note">
		                    <p>We will never share your information with anyone</p>
		                </div>
		                <!-- start Form Settings -->
		                <div class="form-content">
		                	<form  class="needs-validation" action="#" oninput='p3.setCustomValidity(p3.value != p2.value ? "Confirm Password does not match." : "") '>
			                    <div class="row">
			                        <div class="col-md-4">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="First Name *" value="{{ session()->get('info.userDetails.inflexion_detail_first') }}" name="first" required/>
			                            </div>
			                        </div>
			                        <div class="col-md-4">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="Middle Name*" value="{{ session()->get('info.userDetails.inflexion_detail_middle') }}" required/>
			                            </div>
			                        </div>
			                        <div class="col-md-4">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="Last Name*" value="{{ session()->get('info.userDetails.inflexion_detail_last') }}" required/>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="row">
			                        <div class="col-md-1">
			                            <div class="form-group">
			                                <label class="form-control" title="date of birth">DOB</label>
			                            </div>
			                        </div>
			                        <div class="col-md-3">
			                            <div class="form-group">
			                                <input type="text" class="form-control" value="{{ session()->get('info.userDetails.inflexion_detail_birth') }}" name="dob" disabled='disabled'/>
			                            </div>
			                        </div>
			                        <div class="col-md-4">
			                            <div class="form-group">
										    <select class="form-control" id="exampleFormControlSelect1" required>
										    	<option>select gender</option>    
										     	<option>Male</option>
										      	<option>Female</option>
										      	<option>Unspecified</option>
										    </select>
										  </div>
			                        </div>
			                        <div class="col-md-4">
			                            <div class="form-group">
										    <input type="text" class="form-control" value="" name="citizenship" placeholder="citizenship" required/>
										</div>
			                        </div>
			                    </div>
			                    <hr/>
			                    <div class="row">
			                        <div class="col-md-5">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="Email Address*" value="{{ session()->get('info.userDetails.inflexion_username') }}" disabled/>
			                            </div>
			                        </div>
			                        <div class="col-md-3">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="VALIDATED" value="{{ strtoupper(session()->get('info.userDetails.inflexion_user_token')) }} PROFILE" disabled />
			                            </div>
			                        </div>
			                        <div class="col-md-4">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="Phone Number*" value="{{ session()->get('info.userDetails.inflexion_detail_contact') }}"required/>
			                            </div>
			                        </div>
			                        <div class="col-md-2">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="Country" value="{{ session()->get('info.userDetails.inflexion_detail_country') }}"required/>
			                            </div>
			                        </div>
			                        <div class="col-md-2">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="State / province" value="{{ session()->get('info.userDetails.inflexion_detail_state') }}"required/>
			                            </div>
			                        </div>
			                        <div class="col-md-2">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="city / town" value="{{ session()->get('info.userDetails.inflexion_detail_city') }}"required/>
			                            </div>
			                        </div>
			                        <div class="col-md-1">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="Zip Code" value="{{ session()->get('info.userDetails.inflexion_detail_zip') }}"required/>
			                            </div>
			                        </div>
			                        <div class="col-md-5">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="street" value="{{ session()->get('info.userDetails.inflexion_detail_street') }}" required/>
			                            </div>
			                        </div>
			                    </div>
			                    <hr/>
			                    <!--div class="row">
			                        <div class="col-md-6">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="Taxpayer Identification Number (TIN):" value=""/>
			                            </div>
			                        </div>
			                        <div class="col-md-3">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="Beneficiary Bank*" value=""/>
			                            </div>
			                         </div>

			                        <div class="col-md-3">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="Account Number *" value=""/>
			                            </div>
			                        </div>
			                    </div>
			                    <hr/-->
			                    <div class="row">
			                        <div class="col-md-4">
			                            <div class="form-group">
			                                <input type="password" class="form-control" placeholder="Current Password"name="p1" required/>
			                            </div>
			                        </div>
			                        <div class="col-md-4">
			                            <div class="form-group">
			                                <input type="password" class="form-control" placeholder="New Password" name="p2" required/>
			                            </div>
			                        </div>
			                        <div class="col-md-4">
			                            <div class="form-group">
			                                <input type="password" class="form-control" placeholder="Confirm  New Password" name="p3" required/>
			                            </div>
			                         </div>
			                    </div>
			                    <button type="submit" class="btn btn-primary Submit">Submit</button>
		                	</form>
		                </div>
		                 <!-- End Form Settings -->
		            </div>
		        </div>
		        <h6>Side note:</h6> email sent to notify profile update / password update
			</div>
		</div>
		<!--end settings-->
	</div>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>