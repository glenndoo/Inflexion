<x-template data="tutorExamFailed" />
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
					<div class="card shadow">
						<div class="card-header">
							<ul id="progress">
		                        <li>
		                            <i class="fa fa-check" aria-hidden="true"></i> EXAM
		                        </li>
		                        <li>
		                        	<i class="fa fa-check" aria-hidden="true"></i> Complete information
		                        </li>
		                        <li class="active">Finish</li>
		                    </ul>
		                </div>
		                <div class="card-header text-center">
							<h2>Exam Result</h2>
						</div>

						<div class="card-body">
							<div class="row">
								<div class="col-sm-12">
									<!-- <h1>
										<i class="fa fa-check-circle-o exam-pass" aria-hidden="true" ></i>
									</h1> -->
									<br/>
									<h3 class="d-flex justify-content-center">
										{{ $Details }}<br />
										Click the button below to retake the exam
									</h3>
									<br/>
									<!-- if fail -->
									<h1>
										<i class="fa fa-times-circle-o exam-fail" aria-hidden="true" ></i>
									</h1>
									<br/>
									<h3 class="text-center">
										<a href="{{ route('retakeExam', ['details' => $info, 'retake' => 1]) }}" class="btn btn-primary">CLICK HERE TO RETAKE EXAM NOW</a>
									</h3>
									<br/>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<p class=" d-flex justify-content-center">
										
									</p>
									<br/>
									<p class="text-center">
										
									</p>
									<br/>
									<p class=" d-flex justify-content-center">
										
									</p>
									<br/>
									<p class=" d-flex justify-content-center">
										
									</p>
								</div>
							</div>

						</div>
						<div class="card-footer">
							<p class="text-center">
								
							</p>
						</div>
					</div>
			</div>
			<!-- Middle Column end -->
		</div>
	</div>
	<!--end myclasses main-->
</div>