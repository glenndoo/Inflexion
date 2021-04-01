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
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									
								</div>
								<div class="row">
									<div class="form-check">
									  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
									  <label class="form-check-label" for="defaultCheck1">
									    Default checkbox
									  </label>
									</div>
								</div>
								<div class="row">
									<div class="form-check">
									  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
									  <label class="form-check-label" for="defaultCheck1">
									    Default checkbox
									  </label>
									</div>
								</div>
								<div class="row">
									<div class="form-check">
									  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
									  <label class="form-check-label" for="defaultCheck1">
									    Default checkbox
									  </label>
									</div>
								</div>
								<a class="btn btn-success" data-toggle="tab" href="#question_2" role="tab" aria-controls="question_2" >to question 2</a>
							</div>
					  		@for($i = 0; $i < 10; $i++)<!--loops the next divs + 1-->
					  			<div class="tab-pane" id="question_{{$i}}" role="tabpanel">
								    <div class="row">
										<div class="col-sm-12">
											<div class="row">
												<p>{{$i}} Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
											</div>
											<div class="row">
												<div class="form-check">
												  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
												  <label class="form-check-label" for="defaultCheck1">
												    Default checkbox
												  </label>
												</div>
											</div>
											<div class="row">
												<div class="form-check">
												  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
												  <label class="form-check-label" for="defaultCheck1">
												    Default checkbox
												  </label>
												</div>
											</div>
											<div class="row">
												<div class="form-check">
												  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
												  <label class="form-check-label" for="defaultCheck1">
												    Default checkbox
												  </label>
												</div>
											</div>
											@if($i != 9)
												<a class="btn btn-success" data-toggle="tab" href="#question_{{$i+1}}" role="tab" aria-controls="question_{{$i}}">to question {{$i+1}}</a>
											@else
												<button type="submit" form="form1" value="Submit" class="btn btn-success">Submit</button>
											@endif
										</div>
									</div>
								</div>
							@endfor
						</div>
					</form>
			</div>
			<!-- Middle Column end -->
		</div>
	</div>
	<!--end myclasses main-->
</div>