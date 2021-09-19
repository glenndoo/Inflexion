<x-admin-template data="adminUserList" />
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
		<!--settings start-->
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="row">
						<h1>USER LIST (ALL)</h1><br />
						<!-- PAGAWA NG TABLE MGA ITO -->
						Usernames: <br />
						First Name: <br />
						Last Name: <br />
						Country: <br />
						@foreach($users as $details)
						{{ $details->inflexion_username }} <br />
						{{ $details->inflexion_detail_first }}
						{{ $details->inflexion_detail_last }} <br />
						{{ $details->inflexion_detail_country }} <br />

						@endforeach
			        </div>
				</div>
			</div>
		</div>
		<!--end settings-->
	</div>
</div>
