<x-template data="tutorBeforeExam" />
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
				<div class="tab-content"><!--inside this are tab panels-->
				 	<!--disclosure start-->
				 	<div class="tab-pane active" id="disclosure" role="tabpanel"><!-- tab panel marked active is shown first-->
						<div class="card">
							<div class="card-header text-center">
								GOOD DAY, JONATHAN DOE!
							</div>

							<div class="card-body text-center">
								<div class="h3">Thank you for applying as a Tutor with Inflexion Global!</div>
								<br/>
								<br/>

								<div class="h5">
									<p>After your email address has been verified,<br/> you will be given an online English Proficiency Exam on your first login.</p><br/>

									<p>The exam is good for 15 minutes with a total of 25 questions - multiple choice.</p><br/>


								</div>
								<p>Please do not take this exam on a mobile device</p>
								<p>You are only given a <b>total of 3 Attempts</b></p>

								<p>
									After the exam is finished your score will be automatically calculated and upon getting a passing score<br/> you will be asked to 
									provide your contact information.
									<br/><br/>
									<h3>We will require your skype acount for the interview phase if you pass the exam, so please have it ready.<h3>
								</p>
								<hr/>
								<h4 class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
									Once you login, The exam will start and will be counted as your<br/>
									<!--if(tries=0)-->
									first Attempt
									<!--else
									second attempt
									elseif
									final attempt
									endif
									-->
									and it cannot be canceled
								</h4>
							</div>

							<div class="card-footer d-flex justify-content-center">

								@php
								$count = 1;
								@endphp
								<a href="" role="tab">
									VERIFY YOUR ACCOUNT
								</a>
							</div>
						</div>
					</div>
					<br/>
					<!--disclosure start-->
				</div>
			</div>
			<!-- Middle Column end -->
		</div>
	</div>
	<!--end myclasses main-->
</div>