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
		<!--start user row-->
		<div class="row">
			<div class="col-sm-12">
                <!-- ================================table student start============================== -->
                    <div class="card">
                        <h5 class="card-header">Recent Student Accounts</h5>
                        <div class="card-body p-0">
                            <div class="table-responsive">
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
		                                            <td class="text-center">
		                                            	<button type="button" class="btn-sm btn btn-warning" title="deactivate this account"><i class="fa fa-power-off" aria-hidden="true"></i></button>
		                                            	<button type="button" class="btn-sm btn btn-danger" title="delete this account"><i class="fa fa-trash" aria-hidden="true"></i></button>
		                                            	<button type="button" class="btn-sm btn btn-primary" title="reset this account to status 0 (unverified email and incomplete details">Reset 0</button>
		                                            </td>
		                                            @elseif($student->inflexion_user_status == 1)
		                                            <td>
		                                            	<div class="progress">
															<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="{{ $student->inflexion_user_status }}" aria-valuemin="0" aria-valuemax="2">
																Verified 50%
															</div>
														</div>
		                                            	<i class="fa fa-times" aria-hidden="true"></i>account
		                                            </td>
		                                            <td class="text-center">
		                                            	PENDING COMPLETION
		                                            </td>
		                                            <td class="text-center">
		                                            	<button type="button" class="btn-sm btn btn-warning" title="option not available" disabled><i class="fa fa-power-off" aria-hidden="true"></i></button>
		                                            	<button type="button" class="btn-sm btn btn-danger" title="delete this account"><i class="fa fa-trash" aria-hidden="true"></i></button>
		                                            	<button type="button" class="btn-sm btn btn-primary" title="send email reminder to complete account">Remind</button>
		                                            </td>
		                                            @else
		                                            <td>
		                                            	<div class="progress">
															<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="{{ $student->inflexion_user_status }}" aria-valuemin="0" aria-valuemax="2">
																
															</div>
														</div>
		                                            	<i class="fa fa-times" aria-hidden="true"></i>email unverfied
		                                            </td>

		                                            <td class="text-center">
		                                            	INACTIVE
		                                            </td>
		                                            <td class="text-center">
		                                            	<button type="button" class="btn-sm btn btn-warning" title="option not available" disabled><i class="fa fa-power-off" aria-hidden="true"></i></button>
		                                            	<button type="button" class="btn-sm btn btn-danger" title="delete this account"><i class="fa fa-trash" aria-hidden="true"></i></button>
		                                            	<button type="button" class="btn-sm btn btn-primary" title="resend email verification">Resend</button>
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
                <!-- ================================table student end============================== -->
			</div>
		</div>
		<!--end user row-->

		<!--start top row-->
		<div class="row">
			<div class="col-sm-12">
                <!-- ================================table tutor start============================== --> <!--hindi pa to tapos-->
                    <div class="card">
                        <h5 class="card-header">Recent Tutor Accounts</h5>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">Image</th>
                                            <th class="border-0">Username</th>
                                            <th class="border-0">User Id</th>
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
		                                            <td>{{ $tutor->inflexion_user_id }}</td>
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
														<i class="fa fa-check" aria-hidden="true"></i>email verified
													</td>
		                                            <td>
		                                            	has not taken any test
		                                            </td>
		                                            <td>
		                                            	<button type="button" class="btn-sm btn btn-warning" title="option unavailable" disabled><i class="fa fa-power-off" aria-hidden="true"></i></button>
		                                            	<button type="button" class="btn-sm btn btn-danger" title="delete this account"><i class="fa fa-trash" aria-hidden="true"></i></button>
		                                            	<button type="button" class="btn-sm btn btn-primary float-right" title="reset this account to status 0 (unverified email and incomplete details">EMAIL REMINDER</button>
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
		                                            	{{$tutor->inflexion_user_take}} exam tries
		                                            </td>
		                                            <td>
		                                            	options
		                                            </td>
		                                            <!---------------------------------------------------------------------->
		                                            <!--tutor has reached maximum ammount of test tries and failed-->
		                                            @elseif($tutor->inflexion_user_status == 3 && $tutor->inflexion_user_take == 3)
		                                            <td>
		                                            	FAILED 3 TIMES
													</td>
		                                            <td>
		                                            	{{$tutor->inflexion_user_take}} exam tries
		                                            </td>
		                                            <td>
		                                            	<button type="button" class="btn-sm btn btn-warning" title="option unavailable" disabled><i class="fa fa-power-off" aria-hidden="true"></i></button>
		                                            	<button type="button" class="btn-sm btn btn-danger" title="delete this account"><i class="fa fa-trash" aria-hidden="true"></i></button>
		                                            	<button type="button" class="btn-sm btn btn-primary float-right" title="reset this account to status 0 (unverified email and incomplete details">RESET EXAM TAKES</button>
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
													</td>
		                                            <td>
		                                            	PASSED(Tries: {{$tutor->inflexion_user_take}}) <b>FOR INTERVIEW</b>
		                                            </td>
		                                            <td>
		                                            	<button type="button" class="btn-sm btn btn-success" title="activate this account"><i class="fa fa-power-off" aria-hidden="true"></i></button>
		                                            	<button type="button" class="btn-sm btn btn-danger" title="delete this account"><i class="fa fa-trash" aria-hidden="true"></i></button>
		                                            	<button type="button" class="btn-sm btn btn-primary float-right" title="reset this account to status 0 (unverified email and incomplete details">SCHED INTERVIEW</button>
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
		                                            <td>
		                                            	<button type="button" class="btn-sm btn btn-warning" title="deactivate this account"><i class="fa fa-power-off" aria-hidden="true"></i></button>
		                                            	<button type="button" class="btn-sm btn btn-danger" title="delete this account"><i class="fa fa-trash" aria-hidden="true"></i></button>
		                                            	<button type="button" class="btn-sm btn btn-primary float-right" title="reset this account to status 0 (unverified email and incomplete details">INTERVIEW DETAILS</button>
		                                            </td><!---------------------------------------------------------------------->
		                                            <!--tutor has passed exam passed interview and account is now active-->
		                                            @elseif($tutor->inflexion_user_status == 0)
		                                            <td>
		                                            	<div class="progress">
															<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="{{ $tutor->inflexion_user_status }}" aria-valuemin="0" aria-valuemax="4">
																0%
															</div>
														</div>
													</td>
		                                            <td>
		                                            	EMAIL UNVERIFIED
		                                            </td>
		                                            <td>
		                                            	<button type="button" class="btn-sm btn btn-warning" title="deactivate this account"><i class="fa fa-power-off" aria-hidden="true"></i></button>
		                                            	<button type="button" class="btn-sm btn btn-danger" title="delete this account"><i class="fa fa-trash" aria-hidden="true"></i></button>
		                                            	<button type="button" class="btn-sm btn btn-primary float-right" title="reset this account to status 0 (unverified email and incomplete details">INTERVIEW DETAILS</button>
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
                <!-- ================================table student end============================== -->
			</div>
		</div>
		<!--end top row-->
		Tutors<br />
		@foreach($users as $user)
			@if($user->inflexion_user_type == 2)
			{{ $user->inflexion_username }}
				@if($user->inflexion_user_status == 4)
				<a href="">For Interview</a>
				@elseif($user->inflexion_user_status == 3)
				Failed
				@endif
				<br />
			@endif
				
		@endforeach

		<!--settings start-->
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="row">
						
			        </div>
				</div>
			</div>
		</div>
		<!--end settings-->
	</div>
</div>
