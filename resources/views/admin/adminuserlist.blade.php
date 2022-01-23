<x-admin-template data="adminUserList" />
<div class="area fade-load">
	<!-- put all content inside area, outside area will mess with side naviagtion-->
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<br />
				<br />
				<br />
				<br />
			</div>
		</div>
		<!--settings start-->
		<div class="row">

		</div>
		<div class="row">


			<div class="col-sm-12 simple-card">
				<ul class="nav nav-tabs" id="myTab5" role="tablist">
					<li class="nav-item">
						<a class="nav-link active border-left-0" id="product-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="product-tab-1" aria-selected="true">
							Admin Accounts
							<span class="badge badge-primary badge-pill">{{ $users->where('inflexion_user_type', '0')->count() }}</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="product-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="product-tab-2" aria-selected="false">
							Student Accounts
							<span class="badge badge-primary badge-pill">{{ $users->where('inflexion_user_type', '1')->count() }}</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="product-tab-2" data-toggle="tab" href="#tab-3" role="tab" aria-controls="product-tab-2" aria-selected="false">
							Tutor Accounts
							<span class="badge badge-light badge-pill">{{ $users->where('inflexion_user_type', '2')->count() }}</span>
						</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent5">
					<!-- ================================table tutor start============================== -->
					<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="product-tab-1">
						<div class="card">
							<h5 class="card-header">{{ $users->where('inflexion_user_type', '0')->count() }} admin account/s active</h5>
							<div class="card-body">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Usernames</th>
											<th scope="col">First Name</th>
											<th scope="col">Last Name</th>
											<th scope="col">Country</th>
											<th scope="col">Options</th>
										</tr>
									</thead>
									<tbody>
										@foreach($users as $details)
										@if($details->inflexion_user_type == 0)
										<tr>
											<th scope="row"></th>
											<td>{{ $details->inflexion_username }}</td>
											<td>{{ $details->inflexion_detail_first }}</td>
											<td>{{ $details->inflexion_detail_last }}</td>
											<td>{{ $details->inflexion_detail_country }}</td>
											<td>
												<button class="btn btn-sm btn-primary" title="edit details"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
												<button class="btn btn-sm btn-warning" title="suspend user"><i class="fa fa-ban" aria-hidden="true"></i></button>
												<button class="btn btn-sm btn-secondary" title="archive user"><i class="fa fa-archive" aria-hidden="true"></i></button>
											</td>

										</tr>
										@endif
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- ==============================table user end ========================== -->
					<!-- ================================table student start============================== -->
					<div class="tab-pane fade show" id="tab-2" role="tabpanel" aria-labelledby="product-tab-2">
						<div class="card">
							<h5 class="card-header">{{ $users->where('inflexion_user_type', '1')->count() }} student account/s active</h5>
							<div class="card-body">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Usernames</th>
											<th scope="col">First Name</th>
											<th scope="col">Last Name</th>
											<th scope="col">Country</th>
											<th scope="col">Options</th>
										</tr>
									</thead>
									<tbody>
										@foreach($users as $details)
										@if($details->inflexion_user_type == 1)
										<tr>
											<th scope="row"></th>
											<td>{{ $details->inflexion_username }}</td>
											<td>{{ $details->inflexion_detail_first }}</td>
											<td>{{ $details->inflexion_detail_last }}</td>
											<td>{{ $details->inflexion_detail_country }}</td>
											<td>
												<button class="btn btn-sm btn-primary" title="edit details"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
												@if($details->inflexion_user_status == 9)
												<a href="{{ route('reactivateAccount', ['user' => $details->inflexion_user_id]) }}" class="btn-sm btn btn-success" title="Reactivate Account"><i class="fa fa-power-off" aria-hidden="true"></i></a>
												@else
												<a href="{{ route('deleteUser', ['user' => $details->inflexion_user_id]) }}" class="btn-sm btn btn-success" title="Suspend Account"><i class="fa fa-ban" aria-hidden="true"></i></a>
												@endif
												<!-- <button class="btn btn-sm btn-secondary" title="archive user"><i class="fa fa-archive" aria-hidden="true"></i></button> -->
											</td>

										</tr>
										@endif
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- ==============================table user end ========================== -->
					<!-- ================================table tutor start============================== -->
					<div class="tab-pane fade show" id="tab-3" role="tabpanel" aria-labelledby="product-tab-3">
						<div class="card">
							<h5 class="card-header">{{ $users->where('inflexion_user_type', '2')->count() }} tutor account/s active</h5>
							<div class="card-body">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Usernames</th>
											<th scope="col">First Name</th>
											<th scope="col">Last Name</th>
											<th scope="col">Country</th>
											<th scope="col">Options</th>
										</tr>
									</thead>
									<tbody>
										@foreach($users as $details)
										@if($details->inflexion_user_type == 2)
										<tr>
											<th scope="row"></th>
											<td>{{ $details->inflexion_username }}</td>
											<td>{{ $details->inflexion_detail_first }}</td>
											<td>{{ $details->inflexion_detail_last }}</td>
											<td>{{ $details->inflexion_detail_country }}</td>
											<td>
												<button class="btn btn-sm btn-primary" title="edit details"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
												<button class="btn btn-sm btn-warning" title="suspend user"><i class="fa fa-ban" aria-hidden="true"></i></button>
												<button class="btn btn-sm btn-secondary" title="archive user"><i class="fa fa-archive" aria-hidden="true"></i></button>
											</td>

										</tr>
										@endif
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- ==============================table user end ========================== -->
				</div>
			</div>
		</div>
		<!--end settings-->
	</div>
</div>