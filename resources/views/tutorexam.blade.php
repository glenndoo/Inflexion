<x-template data="tutorexam" />
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
				<h6>TEST EXAM</h6>
					<form action="#" method="get" id="form1">
						 <div class="tab-content"><!--inside this are tab panels-->
						 	<div class="tab-pane active" id="question_1" role="tabpanel"><!-- tab panel marked active is shown first-->
								<div class="row">
									<p>DISCLOSURE HERE</p>
							@php
							$count = 1;
							@endphp
								<a class="btn btn-success" data-toggle="tab" href="#question_{{ $count }}" role="tab" aria-controls="question_{{ $count }}" >to question {{ $count }}</a>
							</div>
							</div>
							</div>
					  		@foreach($Questions as $quest)<!--loops the next divs + 1-->
					  			<div class="tab-pane" id="question_{{ $count }}" role="tabpanel">
								    <div class="row">
										<div class="col-sm-12">
											<div class="row">
												<p>{{ $count }}. {{ $quest->inflexion_test_quest }}</p>
											</div>
											@foreach($Answers as $ans)
											@if($ans->inflexion_answer_test == $quest->inflexion_test_id)
											<div class="row">
												<div class="form-check">
												  <input class="form-check-input" type="radio" value="{{ $ans->inflexion_answer_value }}" name="question[]" id="defaultCheck1">
												  <label class="form-check-label" for="defaultCheck1">
												    {{ $ans->inflexion_answer_choice }}
												  </label>
												</div>
											</div>
											@endif
											@endforeach

											@if($count != 30)
												<a class="btn btn-success" data-toggle="tab" href="#question_{{ $count+1 }}" role="tab" aria-controls="question_{{$count}}">to question {{ $count+1 }}</a>
											@else
												<button type="submit" form="form1" value="Submit" class="btn btn-success">Submit</button>
											@endif
										</div>
									</div>
								</div>
								@php
								$count++;
								@endphp
							@endforeach
						</div>
					</form>
			</div>
			<!-- Middle Column end -->
		</div>
	</div>
	<!--end myclasses main-->
</div>