<x-admin-template data="adminUserPosts" />
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
						<h1>USER POSTS</h1>
						<!-- TABLE ULI ITO -->
						Date Posted &nbsp; Post &nbsp; Posted by<br />
						@foreach($posts as $post)
							{{ $post->inflexion_post_timestamp }}
							{{ $post->inflexion_post_message }}
							{{ $post->inflexion_detail_first }}
							{{ $post->inflexion_detail_last }}
						@endforeach
			        </div>
				</div>
			</div>
		</div>
		<!--end settings-->
	</div>
</div>
