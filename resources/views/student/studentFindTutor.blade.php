<x-student-template data="studentfindtutor" />
<!-- Include Bootstrap CSS and JS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Include FullCalendar CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.js"></script>

<div class="area"> <!-- put all content inside area, outside area will mess with side naviagtion-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm">
				<br/>
			</div>
		</div>
            <div class=" row influence-finder">
                <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- search bar  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                    	<input class="form-control form-control-lg" type="search" placeholder="Search..." aria-label="Search">
                                    		
                                        
                                        
                                        <div class="row d-flex justify-content-center">
							  				<a class="float-right"data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
										    +Advanced Options
										  	</a>
										</div>
                                        <div class="form-group">
									    	<div class="collapse row" id="collapseExample">
									    		<div class="col-sm-12 form-check-inline d-flex justify-content-center">
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
													    	<label for="tutorName" class="col-form-label">Hobbies or Interest</label>
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
										<br/>
										<br/>
                                    	<button class="btn btn-primary search-btn" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end search bar  -->
                        <!-- ============================================================== -->

                        <div class="col-xl-12 col-lg-8 col-md-8 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- card tutor one -->
                            <!-- ============================================================== -->
                            @foreach($tutors as $tutor)
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="user-avatar float-xl-left pr-4 float-none">
                                                <img src="{{ asset('img/placeholder-male-square.png')}}" alt="User Avatar" class="rounded-circle user-avatar-xl">
                                                    </div>
                                                <div class="pl-xl-3">
                                                    <div class="m-b-0">
                                                        <div class="user-avatar-name d-inline-block">
                                                            <h2 class="font-24 m-b-10">{{ $tutor->inflexion_detail_first . " " . $tutor->inflexion_detail_last}}</h2>
                                                        </div>
                                                        <div class="rating-star d-inline-block pl-xl-2 mb-2 mb-xl-0">
                                                            <!-- <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i> -->
                                                            <p class="d-inline-block text-dark"></p>
                                                        </div>
                                                    </div>
                                                    <div class="user-avatar-address">
                                                    @php
                                                            $hobb = [];
                                                            $details = "";
                                                            $age = 0;
                                                            $details = $tutor->about_me;
                                                            $age = new DateTime($tutor->inflexion_detail_birth);
                                                            $now = new DateTime();
                                                            $age = $now->diff($age);
                                                            $age = $age->y;
                                                            $hobb = explode('|', $tutor->hobbies);
                                                            @endphp
                                                        <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>{{ $tutor->inflexion_detail_country }}<span class="m-l-20">{{ $age }} Years Old</span>
                                                        </p>
                                                        <div class="mt-3">
                                                            @foreach($hobb as $hb)
                                                            <a href="#" class="mr-1 badge badge-light">{{ $hb }}</a>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="float-xl-right float-none mt-xl-0 mt-4">
                                                    <!-- <a href="#" class="btn btn-info" title="book class" data-toggle="modal" data-target="#calendarSchedule{{ $tutor->inflexion_user_id }}">
                                                    	<i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </a> -->
                                                    <button type="button" class="btn btn-primary" id="openCalendarButton{{$tutor->inflexion_user_id}}"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                                                    <a href="#" class="btn btn-info" title="vew profile"  data-toggle="modal" data-target="#tutorViewProfile{{ $tutor->inflexion_user_id }}">
                                                    	<i class="fa fa-user" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top user-social-box">
                                        <div class="text-primary user-social-media d-xl-inline-block" title="Classes completed"><span class="mr-2"> <i class="fa fa-book"  aria-hidden="true"></i></span><span>
                                            @php
                                            $classCount = 0;
                                                if(isset($classes)){
                                                    foreach($classes as $class){
                                                        if($class->tutor_id == $tutor->tutor_id)
                                                        $classCount += 1;
                                                    }
                                                }
                                            @endphp
                                            <b>{{ $classCount }}</b> {{ $classCount > 1 ? ' classes ' :' class ' }} completed
                                        </span></div>
                                        <div class="text-primary user-social-media d-xl-inline-block" title="posts and comments made"><span class="mr-2"><i class="fa fa-comments-o" aria-hidden="true"></i></span><span>100</span></div>
                                        <div class="text-primary user-social-media d-xl-inline-block" title="years teaching"><span class="mr-2"><i class="fa fa-black-tie" aria-hidden="true"></i></span><span>3</span></div>
                                        <div class="text-primary user-social-media d-xl-inline-block" title="available images"><span class="mr-2"><i class="fa fa-picture-o" aria-hidden="true"></i></span><span>10</span></div>
                                        <div class="text-primary user-social-media d-xl-inline-block" title="last active"><span class="mr-2"><i class="fa fa-clock-o" aria-hidden="true"></i></span><span>1 day ago</span></div>
                                        <div class="user-social-media d-xl-inline-block"><span class="mr-2"></span><span></span></div>
                                    </div>
                                </div>
                                @php
                                            $userId = Session::get('info.userId');
                                    @endphp
                                <script>
                                    document.getElementById('openCalendarButton{{$tutor->inflexion_user_id}}').addEventListener('click', function() {
                                    // Define the URL of the page that will contain the FullCalendar
                                    
                                    var calendarUrl = '{{ asset("calendar?$tutor->inflexion_user_id|$userId") }}'; // Replace with your actual calendar page URL

                                    // Open a new browser window with the calendar page
                                    var popup = window.open(calendarUrl, 'FullCalendarPopup', 'width=1280,height=800');
                                    popup.focus();
                                    });
                                    </script>
                                
                                <!-- Modal calendar
								<div class="modal fade" id="calendarSchedule{{ $tutor->inflexion_user_id }}" tabindex="-1" role="dialog" aria-labelledby="calendarSchedule{{ $tutor->inflexion_user_id }}" aria-hidden="true">
								  <div class="modal-dialog modal-dialog-centered" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLongTitle">Book class</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
                                        
                                          Please select your preferred schedule:
								        <form method="POST" action="{{ route('bookSchedule', ['userId' => $userId, 'tutorId' => $tutor->inflexion_user_id, 'username' => $tutor->inflexion_username]) }}">
                                            @csrf
                                            <input type="datetime-local" name="schedule" placeholder="Preffered date" /></br >
                                        <br />
                                        ** <strong>BOOKINGS SHOULD BE DONE 2 DAYS BEFORE PREFERRED SCHEDULE</strong><br />
                                        ** You will be notified immediately as soon as the tutor reviews your preferred schedule
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        @php
                                            $creditCheck = Session::get('info.credits');
                                        @endphp
								        @if( $creditCheck >= 1)
                                        <input type="submit" type="button" class="btn btn-primary" value="Book Class">
                                        @else
                                        <input type="submit" type="button" class="btn btn-primary" value="No credits" disabled>
                                        @endif
                                        </form>
								      </div>
								    </div>
								  </div>
								</div> -->


								<!-- Modal Profile -->
								<div class="modal fade" id="tutorViewProfile{{ $tutor->inflexion_user_id }}" tabindex="-1" role="dialog" aria-labelledby="tutorViewProfile{{ $tutor->inflexion_user_id }}" aria-hidden="true">
								  <div class="modal-dialog modal-dialog-centered" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLongTitle">Modal for {{ $tutor->inflexion_detail_first }}</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true"></span>
								        </button>
								      </div>
								      <div class="modal-body">
                                          About me
                                      {{ $details }}
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								        <button type="button" class="btn btn-primary">Click here to view my Full Profile</button>
								      </div>
								    </div>
								  </div>
								</div>
                                @endforeach
                                <!-- ============================================================== -->
                                <!-- end card tutor one -->
                                <!-- ============================================================== -->
                            </div>
                            <!-- ============================================================== -->
                            <!-- influencer sidebar  -->
                            <!-- ============================================================== -->
                            <!-- <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="font-16">Filter By</h3>
                                        <select class="form-control">
                                            <option>Followers</option>
                                            <option>Followers</option>
                                        </select>
                                    </div>
                                    <div class="card-body border-top">
                                        <h3 class="font-16">Influncer by Rating</h3>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1"><i class="fa fa-star rating-color fa-xs"></i></label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2"><i class="fa fa-star rating-color fa-xs"></i><i class="fa fa-star rating-color fa-xs"></i></label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio3"><i class="fa fa-star rating-color fa-xs"></i><i class="fa fa-star rating-color fa-xs"></i><i class="fa fa-star rating-color fa-xs"></i></label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio4"><i class="fa fa-star rating-color fa-xs"></i><i class="fa fa-star rating-color fa-xs"></i><i class="fa fa-star rating-color fa-xs"></i><i class="fa fa-star rating-color fa-xs"></i></label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio5"><i class="fa fa-star rating-color fa-xs"></i><i class="fa fa-star rating-color fa-xs fa-xs"></i><i class="fa fa-star rating-color fa-xs fa-xs"></i><i class="fa fa-star rating-color fa-xs fa-xs"></i><i class="fa fa-star rating-color fa-xs fa-xs"></i></label>
                                        </div>
                                    </div>
                                    <div class="card-body border-top">
                                        <h3 class="font-16">Social Media Platform</h3>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                                            <label class="custom-control-label" for="customCheck10">Facebook</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                                            <label class="custom-control-label" for="customCheck11">Instagram</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                                            <label class="custom-control-label" for="customCheck12">Pinterest</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                                            <label class="custom-control-label" for="customCheck13">Twitter</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck14">
                                            <label class="custom-control-label" for="customCheck14">Youtube</label>
                                        </div>
                                    </div>
                                    <div class="card-body border-top">
                                        <h3 class="font-16">Influncer Category</h3>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck15">
                                            <label class="custom-control-label" for="customCheck15">Business</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck16">
                                            <label class="custom-control-label" for="customCheck16">Lifestyle</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck17">
                                            <label class="custom-control-label" for="customCheck17">Fitness</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck18">
                                            <label class="custom-control-label" for="customCheck18">Sports</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck19">
                                            <label class="custom-control-label" for="customCheck19">Clothing</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck20">
                                            <label class="custom-control-label" for="customCheck20">Pets & Animals</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck21">
                                            <label class="custom-control-label" for="customCheck21">Beauty & Makeup</label>
                                        </div>
                                    </div>
                                    <div class="card-body border-top">
                                        <h3 class="font-16">Age Demographics</h3>
                                        <select class="form-control">
                                            <option selected>Select the Age</option>
                                            <option value="20-30">20-30</option>
                                            <option value="30-40">30-40</option>
                                            <option value="40-50">40-50</option>
                                        </select>
                                    </div>
                                    <div class="card-body border-top">
                                        <a href="#" class="btn btn-secondary btn-lg btn-block">Submit</a>
                                    </div>
                                </div>
                            </div> -->
                            <!-- ============================================================== -->
                            <!-- end influencer sidebar  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- footer -->
                    <!-- ==============================================================
                    <div class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    Copyright © 2021 Inflexion. All rights reserved.
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="text-md-right footer-links d-none d-sm-block">
                                        <a href="javascript: void(0);">About</a>
                                        <a href="javascript: void(0);">Support</a>
                                        <a href="javascript: void(0);">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end footer -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end wrapper  -->
                <!-- ============================================================== -->
            </div>
        
	</div><!--end myclasses main-->
</div>

