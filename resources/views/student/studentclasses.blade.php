<x-student-template data="studentclasses" />
<div class="area"> <!-- put all content inside area, outside area will mess with side naviagtion-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm">
				<br/>
				<br/>
			</div>
		</div>
		<!--start myclasses main -->
		<div class="row">
			<!-- side bar column-->
			<div class="col-sm-3">
				<!--side search-->
				<div class="row">
					<div class="col-sm-12 ">
						<div class="search ">
			            	<div type="text" class="search-input" placeholder="Search groups..." name="">
			            		<h4>Your Classes</h4>
			            		
			            	</div>
			            </div>
		            </div>
				</div>
				<br>
				<!-- side sub nav-->
				<div class="row">
				    <div class="col-sm-12 collapse_module_page">
				      	<ul class="nav nav-tabs group-tabs collapse collapse_page_element" id="myTab" role="tablist" aria-expanded="false">
					        <li class="nav-item  group-tabs"><!-- connected to active tab-pane tabpanel bookedClasses-->
					            <a class="nav-link active group-tabs" data-toggle="tab" href="#bookedClasses" role="tab" aria-controls="bookedClasses">Booked Classes</a>
					        </li>
					        <li class="nav-item group-tabs"><!-- connected to tab-pane tabpanel classHistory-->
					            <a class="nav-link group-tabs" data-toggle="tab" href="#classHistory" role="tab" aria-controls="classHistory">Class history</a>
					        </li>

					        <hr/>

					        <li class="nav-item group-tabs"><!-- connected to tab-pane tabpanel classTutors-->
					            <a class="nav-link group-tabs" data-toggle="tab" href="#classTutors" role="tab" aria-controls="discover">Your Tutors</a>
					        </li>
					    </ul>
					</div>
				</div>
			</div>
			<!-- side bar column end-->

			<!-- main tab column-->
			<div class="col-sm-9">
				<br/>
				<div class="panel panel-default">
					<!--tab content start-->
					<div class="tab-content">
						<!--all group posts start--> 
					  	<div class="tab-pane active" id="bookedClasses" role="tabpanel">
					  		<h6>booked classes tab pane (active)</h6>
					  	</div>
					  	<div class="tab-pane" id="classHistory" role="tabpanel">
					  		<h6>class history tab pane</h6>
					  	</div>
					  	<div class="tab-pane" id="classTutors" role="tabpanel">
					  		<h6>YOur Tutors tab pane</h6>
					  	</div>
					</div>
				</div>
			</div>
			<!-- main tab column end-->
		</div>
	</div>
	<!--end myclasses main-->
</div>
