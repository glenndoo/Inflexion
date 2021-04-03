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
								<ul id="progress">
								    <li  class="active">
										ENGLISH PROFICIENCY EXAM
									</li>
								    <li>Complete information</li>
								    <li>Finish</li>
								</ul>
							</div>

							<div class="card-body text-center">
								<div class="h3">This is an English proficiency test to determine<br/>your level of knowledge in English  </div>
								<br/>
								<br/>

								<div class="h5">
									<p>-30 random questions</p>

									<p>-Time limit of 15 minutes</p>
									<p>-Multiple Choice</p>
								</div>

								<br/>
								<br/>

								<p>Please do not take this exam on a mobile device</p>
								<p>You are only given a total of 3 Attempts</p>

								<p>
									After the exam is finished your score will be automatically calculated and upon getting a passing score<br/> you will be asked to 
									provide your contact information.
									<br/><br/>
									We will require your skype acount for the interview phase if you pass the exam, so please have it ready.
								</p>
								<hr/>
								<h4 class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
									Once you click AGREE, The exam will start and will be counted as your<br/>
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
								<a class="btn btn-success" href="" role="tab">
									AGREE <i class="fa fa-forward" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
					<!--disclosure start-->
				</div>
			</div>
			<!-- Middle Column end -->
		</div>
	</div>
	<!--end myclasses main-->
</div>