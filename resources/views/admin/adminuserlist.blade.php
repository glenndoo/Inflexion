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
						<h1>USER LIST (ALL)</h1>
						<!-- PAGAWA NG TABLE MGA ITO -->
						Usernames: 
						First Name: 
						Last Name: 
						Country: 
						User Type: 
						@foreach($users as $details)
						{{ $details->inflexion_username }} 
						{{ $details->inflexion_detail_first }}
						{{ $details->inflexion_detail_last }} 
						{{ $details->inflexion_detail_country }} 
							@if($details->inflexion_user_type == 1)
								Student
							@elseif($details->inflexion_user_type == 2)
								Tutor
							@else
								Admin
							@endif
						<a href="">Disable</a>
						<a href="">Delete</a>
						@endforeach
			        </div>
				</div>
			</div>
		</div>
		<!--end settings-->
	</div>
</div>
