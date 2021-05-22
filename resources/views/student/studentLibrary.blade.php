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
		<!--start post to feed -->
		<div class="row">
			<div class="col-sm-12">
				<!-- search bar start-->
				<div class="group-card card shadow">
			  		<div class="card-header">
			  			<div class="row">
			  				<p><b>{{count($files)}} </b>books are available to view</p>
			  			</div>
			  		</div>
			  		<div class="card-body">
			  			<div class="form-group row">
						    <div class="col-sm-12">
						    	<!--label for="countryCitizenship" class="col-form-label">Citizenship</label-->
						      	<select class="form-control" id="countryCitizenship" ONCHANGE="document.getElementById('youriframe').src = this.options[this.selectedIndex].value">
						      		<option selected>select a title</option>

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
				<!-- search bar end-->
			</div>
		</div>
		<!--post to feed end-->

		<!--settings start-->
		<div class="row">
			<div class="col-sm-12">
				<iframe name="iframe" id="youriframe" src=""  type="application/pdf" width="100%" height="700rem"></iframe>
				<!--embed src="https://pdfobject.com/pdf/sample.pdf" type="application/pdf" width="100%" height="700rem"-->
			</div>
		</div>
		<!--end settings-->
	</div>
</div>