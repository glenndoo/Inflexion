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
					<form action="#" method="get" id="form1">
						 <div class="tab-content"><!--inside this are tab panels-->
						 	<!--disclosure start-->
						 	<div class="tab-pane active" id="disclosure" role="tabpanel"><!-- tab panel marked active is shown first-->
								<div class="row">
									<div class="card">
										<div class="card-header d-flex justify-content-center">
											<h5>THE INFLEXION GLOBAL CONFIDENTIALITY AGREEMENT:</h5>
										</div>

										<div class="card-body">
											<p>
											This is an agreement ("Agreement") between You and INFLEXION GLOBAL that sets forth the terms and conditions of your use and disclosure of the Exam Materials.

											You hereby understand, acknowledge, and agree:<br/><br/>

											1. That INFLEXION GLOBAL spends substantial sums of time and money in developing and administering its Exam Materials and carefully guards their integrity and confidentiality;<br/>
											2. That the questions and answers of the Exam are the exclusive and confidential property of INFLEXION GLOBAL and are protected by INFLEXION GLOBAL's intellectual property rights;<br/>
											3. That You may not disclose the Exam questions or answers or discuss any of the content of the Exam Materials with any person, without prior written approval of INFLEXION GLOBAL;<br/>
											4. That You will not remove from the examination room any Exam Materials of any kind provided to You or any other material related to the Exam, including, without limitation, any notes or calculations;<br/>
											5. That You will not copy or attempt to make copies (written, photocopied, or otherwise) of any Exam Material, including, without limitation, any exam questions or answers;<br/>
											6. That You will not sell, license, distribute, give away, or obtain from any other source other OPEN GROUP Exam materials, questions or answers.<hr/>

											You hereby acknowledge and agree that violation of any of these provisions will cause irreparable harm to INFLEXION GLOBAL for which monetary remedies may be inadequate, and that INFLEXION GLOBAL shall be entitled, without waiving any other rights or remedies, to take all appropriate actions to remedy or prevent such disclosure or misuse, including obtaining an immediate injunction.<br/><br/>

											Neither this Agreement nor any right granted hereunder shall be assignable or otherwise transferable by You. This Agreement may be modified only by a writing signed by both parties. This Agreement shall be construed in accordance with the laws of the Commonwealth of Massachusetts, without giving effect to any choice of law rule. This Agreement represents the entire Agreement of the parties hereto pertaining to the subject matter of this Agreement, and supersedes any and all prior oral discussions and/or written correspondence or</p>
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
								<div class="row">
									<br/><br/>
								</div>
							</div>
							<!--disclosure start-->
							<!--questions start-->
					  		@foreach($Questions as $quest)<!--loops the next divs + 1-->
				  			<div class="tab-pane" id="question_{{ $count }}" role="tabpanel">
							    <div class="row">
								    <div class="col-sm-12">
										<div class="card">
											<div class="card-header">
												<div class="col-sm-12">
													<p>{{ $count }}. {{ $quest->inflexion_test_quest }}</p><!--this question-->
												</div>
											</div>
											@foreach($Answers as $ans)
											@if($ans->inflexion_answer_test == $quest->inflexion_test_id)
											<div class="card-body">
												<div class="form-check">
												  <input class="form-check-input" type="radio" value="{{ $ans->inflexion_answer_value }}" name="question[]">
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
														<button type="submit" form="form1" value="Submit" class="btn btn-success">Submit</button>
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