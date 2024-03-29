<x-template data="tutorExamResult" />
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
							<h2>{{ $Details->inflexion_detail_first.' '.$Details->inflexion_detail_last }}</h2>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-12">
									<h1>
										<i class="fa fa-check-circle-o exam-pass" aria-hidden="true" ></i>
									</h1>
									<br/>
									<h3 class="d-flex justify-content-center">
										You scored {{ $Details->inflexion_user_tutor }}% on the exam. Congratulations!
									</h3>
									<br/>
									<!-- if fail
									<h1>
										<i class="fa fa-times-circle-o exam-fail" aria-hidden="true" ></i>
									</h1>
									<br/>
									<h3 class="text-center">
										You have completed your exam but unfortunately your score is below the passing rate. <br/>you still have 2 tries for your exam<br/>
										<a href="#" class="btn btn-primary">RETAKE EXAM NOW?</a> <!--not sure if needed
									</h3>
									<br/>-->
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<p class=" d-flex justify-content-center">
										You will receive an email regarding your interview schedule to your provided email address:</p>
									<br/>
									<p class="text-center">
									<b>{{ $Details->inflexion_username }}</b>
									</p>
									<br/>
									<p class=" d-flex justify-content-center">
										the skype account you have provided us is:
									</p>
									<br/>
									<p class=" d-flex justify-content-center">
										<b>{{ $skype }}</b>
									</p>
								</div>
							</div>

						</div>
						<div class="card-footer">
							<p class="text-center">
								Once you have passed the interview your account will be activated within 24 hours and will be able to login to the site
							</p>
						</div>
					</div>
			</div>
			<!-- Middle Column end -->
		</div>
	</div>
	<!--end myclasses main-->
</div>