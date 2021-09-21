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
			</div>
		</div>
		<!--end settings-->
		<!--settings start-->
		<div class="row">
			<div class="col-sm-12">
				<!-- ================================table tutor start============================== -->

	                <div class="card">
	                     <h5 class="card-header">There are a total of {{ $posts->count() }} community post/s</h5>
	                    <div class="card-body">
	                        <table class="table">
	                            <thead>
	                                <tr>
	                                    <th scope="col"><b>Date posted</b></th>
	                                    <th scope="col"><b>Post Content</b></th>
	                                    <th scope="col"><b>Posted by</b></th>
	                                    <th scope="col"><b>Options</b></th>
	                                </tr>
	                            </thead>
	                            <tbody>
                                	@foreach($posts as $post)
                                		@if($post->inflexion_user_type == 0)
			                                <tr>
												<td>{{ $post->inflexion_post_timestamp }}</td>
												<td width="50%">

													{{ $post->inflexion_post_message }}
												</td>
												<td>{{ $post->inflexion_detail_first }} {{ $post->inflexion_detail_last }} ({{ $post->inflexion_detail_country }})</td>
												<td>
													<button class="btn btn-sm btn-primary" title="edit details"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
													<button class="btn btn-sm btn-warning" title="flag post"><i class="fa fa-flag" aria-hidden="true"></i></i></button>
													<button class="btn btn-sm btn-secondary" title="delete post"><i class="fa fa-trash" aria-hidden="true"></i></button>
												</td>

			                                </tr>
	                                	@endif
									@endforeach
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            <!-- ==============================table user end ========================== -->
			</div>
		</div>
		<!--end settings-->
	</div>
</div>
