<x-admin-template data="adminIndex" />
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
				<h6>adminIndex</h6>
			</div>
		</div>
		<!--post to feed end-->
		Students<br />
		@foreach($users as $user)
			@if($user->inflexion_user_type == 1)
				{{ $user->inflexion_username }}
				<br />
			@endif
			
		@endforeach
		<br />
		Tutors<br />
		@foreach($users as $user)
			@if($user->inflexion_user_type == 2)
			{{ $user->inflexion_username }}
				@if($user->inflexion_user_status == 4)
				<a href="">For Interview</a>
				@elseif($user->inflexion_user_status == 3)
				Failed
				@endif
				<br />
			@endif
				
		@endforeach
		<!--settings start-->
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="row">
						
			        </div>
				</div>
			</div>
		</div>
		<!--end settings-->
	</div>
</div>
