<x-template data="tutorexam" />
<div class="area"> <!-- put all content inside area, outside area will mess with side naviagtion-->
	<div class="container fade-load">
		<div class="row">
			<div class="col-sm-12">
				<br/>
				<br/>
				<br/>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
					<form action="{{ route('ValidateAnswers') }}" method="POST" id="form1">
					@csrf
					<input type="hidden" name="userId" value="{{ $Details->inflexion_user_id }}" />
					<input type="hidden" name="userName" value="{{ $Details->inflexion_username }}" />
						 <div class="tab-content"><!--inside this are tab panels-->
						 	<!--disclosure start-->
						 	<div class="tab-pane active" id="disclosure" role="tabpanel"><!-- tab panel marked active is shown first-->
								<div class="card">
									<div class="card-header text-center">
										<ul id="progress">
										<li class="fa fa-check">Completed information</li>

										    <li  class="active">
												ENGLISH PROFICIENCY EXAM
											</li>
										    <li>Finish</li>
										</ul>
									</div>

									<div class="card-body text-center">
										<h2>YOUR EXAM STARTED</h2>
										<div class="h3" id="clockdiv"></div><!--timer shows here-->
									</div>

									<div class="card-footer d-flex justify-content-center">

										@php
										$count = 1;
										@endphp
										<a class="btn btn-success" data-toggle="tab" href="#question_{{ $count }}" role="tab" aria-controls="question_{{ $count }}">
											Go to question <i class="fa fa-forward" aria-hidden="true"></i>{{ $count }}
										</a>
									</div>
								</div>
							</div>
							<!--disclosure start-->

							<!--questions start-->
					  		@foreach($Questions as $quest)<!--loops the next divs + 1-->
				  			<div class="tab-pane" id="question_{{ $count }}" role="tabpanel">

							    <div class="row">
								    <div class="col-sm-12">
										<div class="card">
											<div class="card-header text-center">
												<ul id="progress">
												    <li  class="active inline-block">
														EXAM {{$count}} / 30
													</li>
												    <li>Complete information</li>
												    <li>Finish</li>
												</ul>
											</div>
											<div class="card-header">
												<div class="col-sm-12 ">
													<p>{{ $count }}. {{ $quest->inflexion_test_quest }}</p><!--this question-->
												</div>
											</div>
											@foreach($Answers as $ans)
											@if($ans->inflexion_answer_test == $quest->inflexion_test_id)
											<div class="card-body">
												<div class="form-check">
												  <input class="form-check-input" type="radio" value="{{ $ans->inflexion_answer_value }}" name="question[{{$count}}]">
												  <label class="form-check-label" for="defaultCheck1">
												    {{ $ans->inflexion_answer_choice }}
												  </label>
												</div>
											</div>
											@endif
											@endforeach
											<div class="card-footer">
												<div class="float-left text-muted" id="clockdiv2"></div><!--timer shows here-->
												@if($count != 30)
													<div class="float-right">
														<a class="btn btn-success" data-toggle="tab" href="#question_{{ $count+1 }}" role="tab" aria-controls="question_{{$count}}">
															Next <i class="fa fa-forward" aria-hidden="true"></i>{{ $count+1 }}
														</a>
													</div>
												@else
													<div class="pull-right">
														<input type="submit" form="form1" value="Submit" class="btn btn-success" />
													</div>
												@endif
											</div>
											
										</div>
									</div>
								</div>
							</div>
							@php
							$count++;
							@endphp
							@endforeach
							<!--questions end-->
						</div>
					</form>
			</div>
			<!-- Middle Column end -->
		</div>
	</div>
	<!--end myclasses main-->
</div>

<script type="text/javascript">
// 15 minutes from now
var time_in_minutes = 15;
var current_time = Date.parse(new Date());
var deadline = new Date(current_time + time_in_minutes*60*1000);


function time_remaining(endtime){
	var t = Date.parse(endtime) - Date.parse(new Date());
	var seconds = Math.floor( (t/1000) % 60 );
	var minutes = Math.floor( (t/1000/60) % 60 );
	var hours = Math.floor( (t/(1000*60*60)) % 24 );
	var days = Math.floor( t/(1000*60*60*24) );
	return {'total':t, 'days':days, 'hours':hours, 'minutes':minutes, 'seconds':seconds};
}
function run_clock(id,endtime){
	var clock = document.getElementById(id);
	function update_clock(){
		var t = time_remaining(endtime);
		clock.innerHTML = '00'+': '+t.minutes+': '+t.seconds;
		if(t.total<=0){ clearInterval(timeinterval); }
	}
	update_clock(); // run function once at first to avoid delay
	var timeinterval = setInterval(update_clock,1000);
}
run_clock('clockdiv',deadline);
run_clock('clockdiv2',deadline);
</script>