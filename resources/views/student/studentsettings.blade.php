<x-student-template data="studentindex" />
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
				<h6>student>studentSettings</h6>
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
		                	<form>
			                    <div class="row">
			                        <div class="col-md-4">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="First Name *" value="{{ session()->get('persInfo.inflexion_detail_first') }}" name="first"/>
			                            </div>
			                        </div>
			                        <div class="col-md-4">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="Middle Name*" value="{{ session()->get('persInfo.inflexion_detail_middle') }}"/>
			                            </div>
			                        </div>
			                        <div class="col-md-4">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="Last Name*" value="{{ session()->get('persInfo.inflexion_detail_last') }}"/>
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
			                                <input type="date" class="form-control" value="" name="dob"/>
			                            </div>
			                        </div>
			                        <div class="col-md-4">
			                            <div class="form-group">
										    <select class="form-control" id="exampleFormControlSelect1">
										    	<option selected="true" disabled="disabled">select gender</option>    
										     	<option>Male</option>
										      	<option>Female</option>
										      	<option>Unspecified</option>
										    </select>
										  </div>
			                        </div>
			                        <div class="col-md-4">
			                            <div class="form-group">
										    <select class="form-control" id="exampleFormControlSelect1">
										    	<option selected="true" disabled="disabled">Citizenship</option>    
										     	<option>//Get from api</option>
										    </select>
										  </div>
			                        </div>
			                    </div>
			                    <hr/>
			                    <div class="row">
			                        <div class="col-md-4">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="Email Address*" value="{{ session()->get('persInfo.inflexion_username') }}" disabled/>
			                            </div>
			                        </div>
			                        <div class="col-md-2">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="VALIDATED" value="VALIDATED" disabled />
			                            </div>
			                        </div>
			                        <div class="col-md-6">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="Phone Number*" value="{{ session()->get('persInfo.inflexion_detail_contact') }}"/>
			                            </div>
			                        </div>
			                        <div class="col-md-3">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="Country" value=""/>
			                            </div>
			                        </div>
			                        <div class="col-md-3">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="State / province" value=""/>
			                            </div>
			                        </div>
			                        <div class="col-md-2">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="city / town" value=""/>
			                            </div>
			                        </div>
			                        <div class="col-md-2">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="Zip Code" value=""/>
			                            </div>
			                        </div>
			                        <div class="col-md-2">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="State" value=""/>
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
			                                <input type="text" class="form-control" placeholder="Current Password" value=""/>
			                            </div>
			                        </div>
			                        <div class="col-md-4">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="New Password" value=""/>
			                            </div>
			                        </div>
			                        <div class="col-md-4">
			                            <div class="form-group">
			                                <input type="text" class="form-control" placeholder="Confirm  New Password" value=""/>
			                            </div>
			                         </div>
			                    </div>
			                    <button type="button" class="btn btn-primary Submit">Submit</button>
		                	</form>
		                </div>
		                 <!-- End Form Settings -->
		            </div>
		        </div>
			</div>
		</div>
		<!--end settings-->
	</div>
</div>
