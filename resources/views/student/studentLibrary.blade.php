<x-student-template data="studentLibrary" />
<div class="area fade-load"> <!-- put all content inside area, outside area will mess with side naviagtion-->
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<br/>
				<br/>
				<br/>
				<br/>
			</div>
		</div>
		<!--start search library pdf -->
		<div class="row">
			<div class="col-sm-12">
				<!-- search pdf start-->
				<div class="group-card card shadow">
			  		<div class="card-header bg-info">
			  			<div class="row">
			  				<p><b>{{count($files)}} </b>books are available to view</p>
			  			</div>
			  		</div>
			  		<div class="card-body">
			  			<div class="form-group row">
						    <div class="col-sm-12">
						    	<!--javascript change iframe to selected pdf-->
						      	<select class="form-control" id="countryCitizenship" ONCHANGE="document.getElementById('youriframe').src = this.options[this.selectedIndex].value">
						      		<option selected disabled>select a title</option>

						      		<!--this loads pdf directory array-->
					  				@foreach($files as $pdf)
						  				@php
							      		$filename = basename($pdf);
							      		@endphp
									    <option value="{{ asset('pdf/'.$filename.'')}}">{{$filename}}</option>
					  				@endforeach
							    </select>
						    </div>
						</div>
			  			<div class="form-group">
						</div>
			  		</div>
				</div>
				<!-- search pdf end-->
			</div>
		</div>
		<!--post to search library pdf-->

		<!--iframe start-->
		<div class="row">
			<div class="col-sm-12">
				<div class="">
					<div class="card-body">
						<!--iframe to output selected pdf-->
						<embed class="shadow"name="iframe" id="youriframe" src=""  type="application/pdf" width="100%" height="670rem"></embed>
						<!--embed src="https://pdfobject.com/pdf/sample.pdf" type="application/pdf" width="100%" height="700rem"-->
					</div>
				</div>
				
			</div>
		</div>
		<!--end iframe-->
	</div>
</div>