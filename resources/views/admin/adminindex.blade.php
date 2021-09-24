<x-admin-template data="adminIndex" />
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
		<div class="row">
			<!-- total users   -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-inline-block">
                            <h5 class="text-muted">Registered Users</h5>
                            <h2 class="mb-0">{{count($users)}}</h2>
                        </div>
                        <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                            <i class="fa fa-user fa-fw fa-sm text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end total users   -->

            <!-- Active tutors   -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-inline-block">
                            <h5 class="text-muted">Active tutors</h5>
                            <h2 class="mb-0">{{ $users->where('inflexion_user_type', '2')->where('inflexion_user_status', '2')->count() }}</h2>
                        </div>
                        <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                            <i class="fa fa-user fa-fw fa-sm text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end Active tutors   -->
            
            <!-- active students   -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-inline-block">
                            <h5 class="text-muted">Active Students</h5>
                            <h2 class="mb-0">{{ $users->where('inflexion_user_type', '1')->where('inflexion_user_status', '2')->count() }}</h2>
                        </div>
                        <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                            <i class="fa fa-user fa-fw fa-sm text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end Active tutors   -->

            <!-- Interview tutors   -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-inline-block">
                            <h5 class="text-muted">Tutor/s to Interview</h5>
                            <h2 class="mb-0">{{ $users->where('inflexion_user_type', '2')->where('inflexion_user_status', '4')->count() }}</h2>
                        </div>
                        <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                            <i class="fa fa-user fa-fw fa-sm text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end Interview tutors   -->
		</div>
		<!--start top row-->
		<div class="row">
			<div class="col-sm-12">
				<div class="simple-card">
		        	<ul class="nav nav-tabs" id="myTab5" role="tablist">
		                <li class="nav-item">
		                    <a class="nav-link active border-left-0" id="product-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="product-tab-1" aria-selected="true">
		                    	<span class="badge badge-primary badge-pill">{{ $users->where('inflexion_user_type', '2')->count() }}</span>Tutors Accounts
		                	</a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link" id="product-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="product-tab-2" aria-selected="false">
		                    	<span class="badge badge-primary badge-pill">{{ $users->where('inflexion_user_type', '1')->count() }}</span>
		                    	Student Accounts
		                	</a>
		                </li>
		            </ul>
		            <div class="tab-content" id="myTabContent5">
		            	<!-- ================================table tutor start============================== --> <!--hindi pa to tapos will limit it to five on this page-->
		                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="product-tab-1">
		                    <div class="card">
		                        <h5 class="card-header">Recent Tutor Accounts</h5>
		                        <div class="card-body p-0">
		                            <div class="table-responsive container">
		                                <table class="table">
		                                    <thead class="bg-light">
		                                        <tr class="border-0">
		                                            <th class="border-0">Image</th>
		                                            <th class="border-0">Username</th>
		                                            <!--th class="border-0">User Id</th-->
		                                            <th class="border-0" colspan=2>User Status</th>
		                                            <th class="border-0">Account Status</th>
		                                            <th class="border-0 text-center">Options</th>
		                                        </tr>
		                                    </thead>
		                                    <tbody>
		                                    	@foreach($users as $tutor)
													@if($tutor->inflexion_user_type == 2)
				                                        <tr>
				                                            <td>
				                                                <div class="m-r-10"><img src="{{ asset('img/placeholder-male-square.png') }}" alt="user" class="rounded" width="45"></div>
				                                            </td>
				                                            <td>{{ $tutor->inflexion_username }}</td>
				                                            <td>{{ $tutor->inflexion_user_status }}</td>

				                                            <!---------------------------------------------------------------------->
				                                            <!--tutor just verified email but has not tried to login yet has not seen exam-->
				                                            @if($tutor->inflexion_user_status == 1 && $tutor->inflexion_user_take == 0)
				                                            <td>
				                                            	<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="{{ $tutor->inflexion_user_status }}" aria-valuemin="0" aria-valuemax="4">
																		25%
																	</div>
																</div>
																<i class="fa fa-check" aria-hidden="true"></i>email
																<i class="fa fa-times" aria-hidden="true"></i>test {{$tutor->inflexion_user_take}}/3
															</td>
				                                            <td>
				                                            	INACTIVE
				                                            </td>
				                                            <td class="text-center row">
				                                            	<div class="col-sm-2">
				                                            		<button type="button" class="btn-sm btn btn-warning" title="option unavailable" disabled><i class="fa fa-power-off" aria-hidden="true"></i></button>
				                                            	</div>
				                                            	<div class="col-sm-2">
				                                            		<button type="button" class="btn-sm btn btn-danger" title="delete this account"><i class="fa fa-trash" aria-hidden="true"></i></button>
				                                            	</div>
				                                            	<div class="col-sm-8">
				                                            		<button type="button" class="btn-sm btn btn-primary form-control" title="Send email for test reminder" data-toggle="modal" data-target="#tutor-modal-{{ $tutor->inflexion_user_id }} ">EMAIL TEST REMINDER</button>
				                                            	</div>
				                                            </td>
				                                            <!---------------------------------------------------------------------->
				                                            <!--tutor just verified email and has tried to login and take exam but test takes is is less than 3(max)-->
				                                            @elseif($tutor->inflexion_user_status == 3 && $tutor->inflexion_user_take < 3 && $tutor->inflexion_user_take != 0)
				                                            <td>
				                                            	<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="{{ $tutor->inflexion_user_status }}" aria-valuemin="0" aria-valuemax="4">
																		25%
																	</div>
																</div>
																<i class="fa fa-check" aria-hidden="true"></i>email verified
															</td>
				                                            <td>
				                                            	INACTIVE
				                                            </td>
				                                            <td class="text-center row">
				                                            	<div class="col-sm-2">
				                                            		<button type="button" class="btn-sm btn btn-warning" title="option unavailable" disabled><i class="fa fa-power-off" aria-hidden="true"></i></button>
				                                            	</div>
				                                            	<div class="col-sm-2">
				                                            		<button type="button" class="btn-sm btn btn-danger" title="delete this account"><i class="fa fa-trash" aria-hidden="true"></i></button>
				                                            	</div>
				                                            	<div class="col-sm-8">
				                                            		<button type="button" class="btn-sm btn btn-primary form-control" title="reset this account to status 0 (unverified email and incomplete details" data-toggle="modal" data-target="#tutor-modal-{{ $tutor->inflexion_user_id }} ">RESET TEST</button>
				                                            	</div>
				                                            </td>
				                                            <!---------------------------------------------------------------------->
				                                            <!--tutor has reached maximum ammount of test tries and failed-->
				                                            @elseif($tutor->inflexion_user_status == 3 && $tutor->inflexion_user_take == 3)
				                                            <td>
				                                            	<i class="fa fa-times" aria-hidden="true"></i>Failed test {{$tutor->inflexion_user_take}}/3
															</td>
				                                            <td>
				                                            	INACTIVE
				                                            </td>
				                                            <td class="text-center row">
				                                            	<div class="col-sm-2">
				                                            		<button type="button" class="btn-sm btn btn-warning" title="option unavailable" disabled><i class="fa fa-power-off" aria-hidden="true"></i></button>
				                                            	</div>
				                                            	<div class="col-sm-2">
				                                            		<button type="button" class="btn-sm btn btn-danger" title="delete this account"><i class="fa fa-trash" aria-hidden="true"></i></button>
				                                            	</div>
				                                            	<div class="col-sm-8">
				                                            		<button type="button" class="btn-sm btn btn-primary form-control" title="reset this account to status 0 (unverified email and incomplete details" data-toggle="modal" data-target="#tutor-modal-{{ $tutor->inflexion_user_id }} ">RESET TEST</button>
				                                            	</div>
				                                            </td>
				                                            <!---------------------------------------------------------------------->
				                                            <!--tutor has passed exam waiting for interview-->
				                                            @elseif($tutor->inflexion_user_status == 4)
				                                            <td>
				                                            	<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="{{ $tutor->inflexion_user_status }}" aria-valuemin="0" aria-valuemax="4">
																		75%
																	</div>
																</div>
																<i class="fa fa-check" aria-hidden="true"></i>email
																<i class="fa fa-check" aria-hidden="true"></i>test {{$tutor->inflexion_user_take}}/3
															</td>
				                                            <td>
				                                            	<b>FOR INTERVIEW</b>
				                                            </td>
				                                            <td class="text-center row">
				                                            	<div class="col-sm-2">
				                                            		<button type="button" class="btn-sm btn btn-success" title="activate this account"><i class="fa fa-power-off" aria-hidden="true"></i></button>
				                                            	</div>
				                                            	<div class="col-sm-2">
				                                            		<a class="btn-sm btn btn-danger" title="delete this account"><i class="fa fa-trash" aria-hidden="true"></i></a>
				                                            	</div>
				                                            	<div class="col-sm-8">
				                                            		<a type="button" class="btn-sm btn btn-primary form-control" title="reset this account to status 0 (unverified email and incomplete details" data-toggle="modal" data-target="#tutor-modal-{{ $tutor->inflexion_user_id }} ">SCHEDULE INTERVIEW </a>
				                                            	</div>
				                                            </td>
				                                            <!---------------------------------------------------------------------->
				                                            <!--tutor has passed exam passed interview and account is now active-->
				                                            @elseif($tutor->inflexion_user_status == 2)
				                                            <td>
				                                            	<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="{{ $tutor->inflexion_user_status }}" aria-valuemin="0" aria-valuemax="4">
																		100%
																	</div>
																</div>
															</td>
				                                            <td>
				                                            	ACTIVE
				                                            </td>
				                                            <td class="text-center row">
				                                            	<div class="col-sm-2">
				                                            		<button type="button" class="btn-sm btn btn-warning" title="deactivate this account"><i class="fa fa-power-off" aria-hidden="true"></i></button>
				                                            	</div>
				                                            	<div class="col-sm-2">
				                                            		<button type="button" class="btn-sm btn btn-danger" title="delete this account"><i class="fa fa-trash" aria-hidden="true"></i></button>
				                                            	</div>
				                                            	<div class="col-sm-8">
				                                            		<button type="button" class="btn-sm btn btn-primary form-control" title="reset this account to status 0 (unverified email and incomplete details" data-toggle="modal" data-target="#tutor-modal-{{ $tutor->inflexion_user_id }} ">INTERVIEW DETAILS</button>
				                                            	</div>
				                                            </td><!---------------------------------------------------------------------->
				                                            <!--tutor has passed exam passed interview and account is now active-->
				                                            @elseif($tutor->inflexion_user_status == 0)
				                                            <td>
				                                            	<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="{{ $tutor->inflexion_user_status }}" aria-valuemin="0" aria-valuemax="4">
																		0%
																	</div>
				                                            		
																</div>
																<i class="fa fa-times" aria-hidden="true"></i>email verification
															</td>
				                                            <td>
				                                            	INACTIVE
				                                            </td>
				                                            <td class="text-center row">
				                                            	<div class="col-sm-2">
				                                            		<button type="button" class="btn-sm btn btn-warning" title="deactivate this account"><i class="fa fa-power-off" aria-hidden="true"></i></button>
				                                            	</div>
				                                            	<div class="col-sm-2">
																<a href="deleteUser?$tutor->inflexion_user_id" class="btn-sm btn btn-danger" title="delete this account"><i class="fa fa-trash" aria-hidden="true"></i></a>

				                                            	</div>
				                                            	<div class="col-sm-8">
				                                            		<button type="button" class="btn-sm btn btn-primary form-control" title="reset this account to status 0 (unverified email and incomplete details" data-toggle="modal" data-target="#tutor-modal-{{ $tutor->inflexion_user_id }} ">RESEND VERIFICATION</button>
				                                            	</div>
				                                            </td>
				                                            @endif
				                                        </tr>
				                                	@endif
												@endforeach
		                                        <tr>
		                                            <td colspan="9"><a href="/showAllUsers" class="btn btn-outline-dark float-right">View all</a></td>
		                                        </tr>
		                                    </tbody>
		                                </table>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <!-- ================================table tutor end============================== -->
		                <!-- ================================table student start============================== -->
		                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="product-tab-2">
		                    <div class="card">
		                        <h5 class="card-header">Recent Student Accounts</h5>
		                        <div class="card-body p-0">
		                            <div class="table-responsive container">
		                                <table class="table">
		                                    <thead class="bg-light">
		                                        <tr class="border-0">
		                                            <th class="border-0">Image</th>
		                                            <th class="border-0">Username</th>
		                                            <th class="border-0">User Id</th>
		                                            <th class="border-0">User Status</th>
		                                            <th class="border-0">Account Status</th>
		                                            <th class="border-0 text-center">Options</th>
		                                        </tr>
		                                    </thead>
		                                    <tbody>
		                                    	@foreach($users as $student)
													@if($student->inflexion_user_type == 1)
				                                        <tr>
				                                            <td>
				                                                <div class="m-r-10"><img src="{{ asset('img/placeholder-male-square.png') }}" alt="user" class="rounded" width="45"></div>
				                                            </td>
				                                            <td>{{ $student->inflexion_username }}</td>
				                                            <td>{{ $student->inflexion_user_id }}</td>

				                                            @if($student->inflexion_user_status == 2)
				                                            <td>
				                                            	<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="{{ $student->inflexion_user_status }}" aria-valuemin="0" aria-valuemax="2">
																		100%
																	</div>
																</div>
															</td>
				                                            <td class="text-center">
				                                            	ACTIVE
				                                            </td>
				                                           <td class="text-center row">
				                                            	<div class="col-sm-2">
				                                            		<button type="button" class="btn-sm btn btn-warning" title="Deactivate Account"><i class="fa fa-power-off" aria-hidden="true"></i></button>
				                                            	</div>
				                                            	<div class="col-sm-2">
																<a href="{{ route('deleteUser', ['user' => $student->inflexion_user_id]) }}" class="btn-sm btn btn-danger" title="delete this account"><i class="fa fa-trash" aria-hidden="true"></i></a>

				                                            	</div>
				                                            	<div class="col-sm-8">
				                                            		<button type="button" class="form-control btn-sm btn btn-primary" title="Reset account status to 0">Reset to 0</button>
				                                            	</div>
				                                            </td>
				                                            @elseif($student->inflexion_user_status == 1)
				                                            <td>
				                                            	<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="{{ $student->inflexion_user_status }}" aria-valuemin="0" aria-valuemax="2">
																		Verified 50%
																	</div>
																</div>
				                                            	<i class="fa fa-times" aria-hidden="true"></i>account details
				                                            </td>
				                                            <td class="text-center">
				                                            	PENDING COMPLETION
				                                            </td>
				                                            <td class="text-center row">
				                                            	<div class="col-sm-2">
				                                            		<button type="button" class="btn-sm btn btn-warning" title="option not available" disabled><i class="fa fa-power-off" aria-hidden="true"></i></button>
				                                            	</div>
				                                            	<div class="col-sm-2">
				                                            		<button type="button" class="btn-sm btn btn-danger" title="delete this account"><i class="fa fa-trash" aria-hidden="true"></i></button>
				                                            	</div>
				                                            	<div class="col-sm-8">
				                                            		<button type="button" class="form-control btn-sm btn btn-primary" title="send email reminder to complete account">Remind</button>
				                                            	</div>
				                                            </td>
				                                            @else
				                                            <td>
				                                            	<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="{{ $student->inflexion_user_status }}" aria-valuemin="0" aria-valuemax="2">
																		25%
																	</div>
																</div>
				                                            	<i class="fa fa-times" aria-hidden="true"></i>email verification
				                                            </td>

				                                            <td class="text-center">
				                                            	INACTIVE
				                                            </td>
				                                           <td class="text-center row">
				                                            	<div class="col-sm-2">
				                                            		<button type="button" class="btn-sm btn btn-warning" title="option not available" disabled><i class="fa fa-power-off" aria-hidden="true"></i></button>
				                                            	</div>
				                                            	<div class="col-sm-2">
				                                            		<button type="button" class="btn-sm btn btn-danger" title="delete this account"><i class="fa fa-trash" aria-hidden="true"></i></button>
				                                            	</div>
				                                            	<div class="col-sm-8">
				                                            		<button type="button" class="form-control btn-sm btn btn-primary" title="send email reminder to complete account">Resend</button>
				                                            	</div>
				                                            </td>
				                                            @endif
				                                        </tr>
				                                	@endif
												@endforeach
		                                        <tr>
		                                            <td colspan="9"><a href="/adminUserList" class="btn btn-outline-dark float-right">View all</a></td>
		                                        </tr>
		                                    </tbody>
		                                </table>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <!-- ================================table student end============================== -->
		            </div>
		        </div>
			</div>
		</div>
		<!--end top row-->

		<!--settings start-->
		<div class="row">
			<div class="col-sm-12">
				<!--i dont know what to put here yet-->
			</div>
		</div>
		<!--end settings-->
	</div>
</div>

<!--modal show be here outside of <div class="area" z-index purposes and easy to find maiko-->
@foreach($users as $tutor)
	@if($tutor->inflexion_user_type == 2)
	<!-- tutor Modal -->
	<div class="modal fade" id="tutor-modal-{{ $tutor->inflexion_user_id }}" tabindex="-1" role="dialog" aria-labelledby="tutor-modal-{{ $tutor->inflexion_user_id }}" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
	    	<div class="modal-content">
	     		<div class="modal-header">
	        		<h5 class="modal-title" id="exampleModalLongTitle">OPTION</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
	      		</div>
			    <!---------------------------------------------------------------------->
				<!--tutor just verified email but has not tried to login yet has not seen exam-->
				@if($tutor->inflexion_user_status == 1 && $tutor->inflexion_user_take == 0)
				<div class="modal-body">
			      	/*email verified no exam tries*/
			    </div>
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
	        		<button type="button" class="btn btn-primary">Send Email reminder</button>
	      		</div>

				<!---------------------------------------------------------------------->
				<!--tutor just verified email and has tried to login and take exam but test takes is is less than 3(max)-->
				@elseif($tutor->inflexion_user_status == 3 && $tutor->inflexion_user_take < 3 && $tutor->inflexion_user_take != 0)
				<div class="modal-body">
			      	/*email verified has tried for exam and exam tries under 3 takes*/
			    </div>
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
	      		</div>

				<!---------------------------------------------------------------------->
				<!--tutor has reached maximum ammount of test tries and failed-->
				@elseif($tutor->inflexion_user_status == 3 && $tutor->inflexion_user_take == 3)
				<div class="modal-body">
			      	/*email verified maxed exam tries yet*/
			    </div>
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
	        		<button type="button" class="btn btn-primary">Reset exam tries</button>
	      		</div>

				<!---------------------------------------------------------------------->
				<!--tutor has passed exam waiting for interview-->
				@elseif($tutor->inflexion_user_status == 4)
	      		<!--interview form start-->
	      		<form>
					<div class="modal-body">
				      	/*comment: waiting for interview*/
				      	<div class="form-group">

				      			<div class="input-group input-group-lg mb-3" title="tutor's skype account">
			                        <div class="input-group-prepend">
			                        	<span class="input-group-text">
			                        		<i class="text-primary fa fa-skype" aria-hidden="true"></i>
			                        	</span>
			                        </div>
			                        <input type="text" placeholder="tutorSkypeAccount" class="form-control" id="" disabled/>
			                    </div>
								<div class="input-group input-group-lg mb-3" title="tutor's interview schedule">
			                        <div class="input-group-prepend">
			                        	<span class="input-group-text">
			                        		<i class="fa fa-clock-o" aria-hidden="true"></i>
			                        	</span>
			                        </div>
			                         <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="" disabled>
			                    </div>
								<div class="input-group input-group-lg mb-3" title="tutor's email">
			                        <div class="input-group-prepend">
			                        	<span class="input-group-text">
			                        		<i class="fa fa-envelope-o" aria-hidden="true"></i>
			                        	</span>
			                        </div>
			                        <input type="text" placeholder="tutorSkypeAccount" class="form-control" value="{{ $tutor->inflexion_username }}" id=""disabled/>
			                    </div>
		                </div>
				    </div>
		      		<div class="modal-footer">
		        		<button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
		        		<button type="submit" class="btn btn-success">Send Interview Email</button>
		      		</div>
	      		</form>
			    <!--interview form end-->

				<!---------------------------------------------------------------------->
				<!--tutor has passed exam passed interview and account is now active-->
				@elseif($tutor->inflexion_user_status == 2)

				<div class="modal-body">
			      	/*active*/
			    </div>
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
	      		</div>


				<!--tutor has account is unverified-->
				@elseif($tutor->inflexion_user_status == 0)
				<div class="modal-body">
			      	/*email unverified*/
			    </div>
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
	        		<button type="button" class="btn btn-primary">Email reminder</button>
	      		</div>

				@endif
	    	</div>
	  	</div>
	</div>
	@endif
@endforeach
