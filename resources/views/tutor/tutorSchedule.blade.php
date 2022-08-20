<x-tutor-template data="tutorSchedule" />
<div class="area"> <!-- put all content inside area, outside area will mess with side naviagtion-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm">
				<br/>
				<br/>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
			</div>
			<!-- Middle Column -->
			<div class="col-sm-8">
				<br/>
			</div>

			<!-- Middle Column end -->
			<div class="tab-content" id="myTabContent5">
			<!-- schedule table -->
			<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="product-tab-1">
							<div class="card">
								<h5 class="card-header">Recent Active/Pending Class Booking</h5>
								<div class="card-body p-0">
									<div class="table-responsive container">
										<table class="table">
											<thead class="bg-light">
												<tr class="border-0">
													<th class="border-0">Student Name</th>
													<th class="border-0">Schedule</th>
													<th class="border-0">Country</th>
													<th class="border-0">Age</th>
													<th class="border-0">Status</th>
													<th class="border-0 text-center">Options</th>
												</tr>
											</thead>
											<tbody>
												
												@foreach($notifs as $notif)
												<tr>
													@php
													$status = "Pending";
													if($notif->status == 1 && $notif->student_status != 1){
														$status = "Class Booked";
													}else if($notif->status == 2){
														$status = "Declined";
													}else if($notif->status == 3){
														$status = "You've marked this as Done";
													}else if($notif->status == 4){
														$status = "Class completed";
													}else if($notif->status == 1 && $notif->student_status == 1){
														$status = "Student marked class as done";
													}else{
														$status = $status;
													}
													@endphp
														<td>{{ $notif->inflexion_detail_first . " " . $notif->inflexion_detail_last }}</td>
														<td>{{ $notif->schedule }}</td>
														<td>{{ $notif->inflexion_detail_country }}</td>
														<td>31</td>
														<td>{{ $status }}</td>
														@if($notif->status == 2)
														<td>--</td>
														@elseif($notif->status == 1 && $notif->student_status != 1)
														<td><a href="" class="btn btn-success" title="Mark as done" data-toggle="modal" data-target="#done-modal-{{ $notif->id }}">Mark as Done</a><a href="" class="btn btn-primary" title="Mark as done" data-toggle="modal" data-target="#done-modal-{{ $notif->id }}">Reschedule</a></td>
														@elseif($notif->status == 1 && $notif->student_status == 1)
														<td><a href="" class="btn btn-success" title="Mark as done" data-toggle="modal" data-target="#done-modal-{{ $notif->id }}">Mark as Done</a><a href="" class="btn btn-primary" title="Mark as done" data-toggle="modal" data-target="#done-modal-{{ $notif->id }}">Reschedule</a></td>
														@elseif($notif->status == 3)
														<td><button class="btn btn-primary btn-sm" disabled>Waiting for student approval</button></td>
														@elseif($notif->status == 4)
														<td><button class="btn btn-success btn-sm" disabled>Class completed</button></td>
														@else
														<td><a class="btn btn-success" title="Approve booked class" data-toggle="modal" data-target="#student-modal-{{ $notif->id }}">Approve</a><a href="" class="btn btn-danger" title="Decline booked class" data-toggle="modal" data-target="#decline-modal-{{ $notif->id }}">Decline</a><a href="" class="btn btn-primary" title="Modify booked class" data-toggle="modal" data-target="#modify-modal-{{ $notif->id }}">Modify</a></td>
														@endif
														<!-- APPROVE MODAL -->
														<div class="modal fade" id="student-modal-{{ $notif->id }}" tabindex="-1" role="dialog" aria-labelledby="student-modal-{{ $notif->id }}" aria-hidden="true">
															<div class="modal-dialog modal-dialog-centered" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLongTitle">Approve Schedule</h5>
												</div>
																		<div class="modal-body">
																			You are about to approve this booking schedule, are you sure?
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
																			<a href="{{ route('approveScheduleStudent', ['id' => $notif->id, 'username' => $notif->inflexion_username, 'schedule' => $notif->schedule ])}}" type="button" class="btn btn-success">Approve Booking</a>
																		</div>
																	</div>
																</div>
															</div>
												</div>
												<!-- DECLINE MODAL -->
												<div class="modal fade" id="decline-modal-{{ $notif->id }}" tabindex="-1" role="dialog" aria-labelledby="decline-modal-{{ $notif->id }}" aria-hidden="true">
															<div class="modal-dialog modal-dialog-centered" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLongTitle">Decline Schedule</h5>
												</div>
																		<div class="modal-body">
																			You are about to decline this booking schedule, are you sure?
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
																			<a href="{{ route('declineScheduleStudent', ['id' => $notif->id ])}}" type="button" class="btn btn-danger">Decline Booking</a>
																		</div>
																	</div>
																</div>
															</div>
												</div>
												<!-- MODIFY MODAL -->
												<div class="modal fade" id="modify-modal-{{ $notif->id }}" tabindex="-1" role="dialog" aria-labelledby="modify-modal-{{ $notif->id }}" aria-hidden="true">
															<div class="modal-dialog modal-dialog-centered" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLongTitle">Modify Schedule</h5>
												</div>
																		<div class="modal-body">
																			<form method="POST" action="{{ route('modifyScheduleStudent', ['id' => $notif->id]) }}">
																				@csrf
																			<input type="dateTime-local" name="newSchedule" /><br />
																			
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
																			<input type="submit" class="btn btn-primary" value="Modify" />
																			</form>
																		</div>
																	</div>
																</div>
															</div>
												</div>
												<!-- DONE MODAL -->
												<div class="modal fade" id="done-modal-{{ $notif->id }}" tabindex="-1" role="dialog" aria-labelledby="done-modal-{{ $notif->id }}" aria-hidden="true">
															<div class="modal-dialog modal-dialog-centered" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLongTitle">Mark as done</h5>
												</div>
																		<div class="modal-body">
																			You are about to mark this class as done, are you sure?
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
																			<a href="{{ route('doneScheduleStudent', ['id' => $notif->id ])}}" type="button" class="btn btn-primary">Mark as Done</a>

																		</div>
																	</div>
																</div>
															</div>
												</div>
												</tr>
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
		</div>
</div>
	</div>
	<!--end myclasses main-->
	<!-- BOOKING MODAL -->
	
</div>