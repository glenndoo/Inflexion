<x-template data="tutorexam" />
<div class="area"> <!-- put all content inside area, outside area will mess with side naviagtion-->
	<div class="container">
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
										    <li  class="active">
												ENGLISH PROFICIENCY EXAM
											</li>
										    <li>Complete information</li>
										    <li>Skype Interview</li>
										</ul>
									</div>

									<div class="card-body text-left">
										<h4>This is an English proficiency test to determine your level of knowledge in English  </h4>

										<br>
										<hr/>

										<p>-30 random questions</p>

										<p>-Time limit of 15 minutes</p>
										<p>-Multiple Choice</p>

										<hr/>

										<p>do not take this exam on a mobile device</p>
										<p>Once you have clicked egree the exam will start and it cannot be canceled, you are given a total of 3 tries</p>

										<p>
											After the exam is finished your score will be automatically calculated and upon getting a passing score<br/> you will be asked to 
											provide your contact information.
											<br/><br/>
											We require your skype acount for the interview phase, so please have it ready.

										</p>
									</div>

									<div class="card-footer d-flex justify-content-center">

										@php
										$count = 1;
										@endphp
										<a class="btn btn-success" data-toggle="tab" href="#question_{{ $count }}" role="tab" aria-controls="question_{{ $count }}">AGREE
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
												    <li  class="active">
														EXAM {{$count}} / 30
													</li>
												    <li>Complete information</li>
												    <li>Skype Interview</li>
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
												@if($count != 30)
													<div class="pull-right">
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