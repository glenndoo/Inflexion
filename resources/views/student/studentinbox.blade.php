<x-student-template data="Student Inbox" />
<div class="area"> <!-- put all content inside area, outside area will mess with side naviagtion-->
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<br/>
				<br/>
				<br/>
				<br/>
			</div>
		</div>
		<!--start SUCCESS ERROR MESSAGE -->
		<div class="row">
			<div class="col-sm-12">
				@if(isset($Success))
	                <div style="margin-top: 4.5rem; z-index: 9999; position: fixed; right: 1rem; " class="alert alert-warning alert-dismissible fade show" role="alert">
	                  <strong>{{ $Success}}</strong><br/>
	                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                  </button>
	                </div>
	            @endif
				@if(isset($Errors))
	                <div style="margin-top: 4.5rem; z-index: 9999; position: fixed; right: 1rem; " class="alert alert-warning alert-dismissible fade show" role="alert">
	                  <strong>{{ $Errors}}</strong><br/>
	                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                  </button>
	                </div>
	            @endif
				<h6>student>studentinbox Note: top email has modal</h6>
			</div>
		</div>
		<!--END SUCCESS ERROR MESSAGE -->


		<!-- BEGIN MAIL -->
		<div class="row">
			<div class="col-md-12">
				<div class="grid email shadow">
					<div class="grid-body">
						<div class="row">
							<!-- BEGIN INBOX MENU -->
							<div class="col-md-3">
								<h2 class="grid-title"><i class="fa fa-inbox"></i> Mail</h2>
								<a class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalCompose"><i class="fa fa-pencil"></i>&nbsp;&nbsp;NEW MESSAGE</a>

								<hr>


								<!-- START MAIL SIDE MENU -->
								<ul class="nav nav-tabs group-tabs" id="myTab" role="tablist">
							        <li class="nav-item  group-tabs"><!-- connected to active tab-pane tabpanel inboxMessages-->
							            <a class="nav-link active group-tabs" data-toggle="tab" href="#inboxMessages" role="tab" aria-controls="inboxMessages">
								            <i class="fa fa-inbox"></i>
								            Inbox <span class="badge badge-light"> {{ count($Messages) }}</span>
								        </a>
							        </li>
							        <li class="nav-item group-tabs"><!-- connected to tab-pane tabpanel sentMessages-->
							            <a class="nav-link group-tabs" data-toggle="tab" href="#sentMessages" role="tab" aria-controls="sentMessages">
								            <i class="fa fa-mail-forward"></i> Sent {{ $SentCount }}
								        </a>
							        </li>
							        <!-- for each start here for joined groups-->
							    </ul>
							</div>
							<!-- END MAIL SIDE MENU -->
							
							<!-- START TAB CONTENT CONTAINING PANELS LINK TO TAB-->
							<div class="col-md-9">
								<div class="tab-content">
									<!-- BEGIN INBOX CONTENT TAB PANEL -->
							  		<div class="tab-pane active" id="inboxMessages" role="tabpanel">
										<div class="row">
											<div class="col-sm-6">
												<div class="btn-group">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li><a href="#">Mark as read</a></li>
														<li><a href="#">Mark as unread</a></li>
														<li><a href="#">Mark as important</a></li>
														<li class="divider"></li>
														<li><a href="#">Report spam</a></li>
														<li><a href="#">Delete</a></li>
													</ul>
												</div>
											</div>

											<div class="col-md-6 search-form">
												<form action="#" class="text-right">
													<div class="input-group">
														<input type="text" class="form-control input-sm" placeholder="Search inbox...">

														<span class="input-group-btn">
				                                            <button type="submit" name="searchInbox" class="btn btn-primary form-control">
				                                            	<i class="fa fa-search"></i>
				                                            </button>
				                                        </span>
													</div>			 
												</form>
											</div>
										</div>
								
										<div class="padding"></div>
								
										<div class="table-responsive">
											<table class="table">
												<tbody>
												@if(count($Messages) > 0)
													@foreach($Messages as $msgs)
													<tr>
														<td class="action"><input type="checkbox" /></td>
														<td class="action"><i class="fa fa-star-o"></i></td>
														<td class="action"><i class="fa fa-bookmark-o"></i></td>
														<td class="name"><a href="#">{{ $msgs->inflexion_detail_first.' '.$msgs->inflexion_detail_last }}</a></td>
														<td class="subject" data-toggle="modal" data-target="#modalMessage"> <!--sample modal at the bottom, scroll down-->
															<a href="#">{{ $msgs->inflexion_inbox_subject }}</a>
														</td>
														<td class="time">{{ $msgs->inflexion_inbox_date }}</td>
													</tr>
													@endforeach
												@else
												No messages to show
												@endif
												</tbody>
											</table>
										</div>
										<ul class="pagination">
											<li class="disabled"><a href="#">«</a></li>
											<li class=""><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li><a href="#">»</a></li>
										</ul>
									</div>
									<!-- END INBOX CONTENT  TAB PANEL-->

									<!-- BEGIN SENT CONTENT TAB PANEL -->
							  		<div class="tab-pane" id="sentMessages" role="tabpanel">
										<div class="row">
											<div class="col-sm-6">
												<div class="btn-group">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li><a href="#">Mark as read</a></li>
														<li><a href="#">Mark as unread</a></li>
														<li><a href="#">Mark as important</a></li>
														<li class="divider"></li>
														<li><a href="#">Report spam</a></li>
														<li><a href="#">Delete</a></li>
													</ul>
												</div>
											</div>

											<div class="col-md-6 search-form">
												<!--form action="#" class="text-right">
													<div class="input-group">
														<input type="text" class="form-control input-sm" placeholder="Search sent...">

														<span class="input-group-btn">
				                                            <button type="submit" name="searchInbox" class="btn btn-primary form-control"><i class="fa fa-search"></i></button></span>
													</div>			 
												</form-->
											</div>
										</div>
								
										<div class="padding"></div>
								
										<div class="table-responsive">
											<table class="table">
												<tbody>
												@foreach($Sent as $sent)
													<tr>
														<td class="action"><input type="checkbox" /></td>
														<td class="action"><i class="fa fa-star-o"></i></td>
														<td class="action"><i class="fa fa-bookmark-o"></i></td>
														<td class="name"><a href="#">{{ $sent->inflexion_detail_first.' '.$sent->inflexion_detail_last }}</a></td>
														<td class="subject" data-toggle="modal" data-target="#modalMessage"> <!--sample modal at the bottom, scroll down-->
															<a href="#">{{ $sent->inflexion_inbox_subject }}</a>
														</td>
														<td class="time">{{ $sent->inflexion_inbox_date }}</td>
													</tr>
												@endforeach
												</tbody>
											</table>
										</div>
										<ul class="pagination">
											<li class="disabled"><a href="#">«</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li><a href="#">»</a></li>
										</ul>
									</div>
									<!-- END SENT CONTENT  TAB PANEL-->
								</div>					
							</div>
							<!-- END TAB CONTENT CONTAINING PANELS LINK TO TAB-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIL -->
	</div>
</div>

<!-- modalMessage -->
<div class="modal fade" id="modalMessage" tabindex="-1" role="dialog" aria-labelledby="modalMessage" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Compose Mail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  	 	<div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">From:</label>
		    <div class="col-sm-5">
		      <input type="text" class="form-control" id="name" value="Glenn Dumaguin" disabled placeholder="recievers name">
		    </div>
		    <div class="col-sm-5">
		      <input type="text" class="form-control" id="staticEmail" value="" disabled placeholder="recievers name">
		    </div>
	  	</div>
  	 	<div class="form-group row">
		    <label for="staticSubject" class="col-sm-2 col-form-label">Subject:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="staticSubject" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed" placeholder="e.g last lesson" disabled>
		    </div>
	  	</div>

	  	<hr/>

        <div class="form-group">
		  <label for="comment">Message:</label>
		  <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		  </p>
		</div>
      </div>
      <div class="modal-footer">
        <a href="" type="button" class="btn btn-primary mr-auto"><i class="fa fa-inbox"></i>reply</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>delete</button>
        <button type="button" class="btn btn-secondary"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>archive</button>
      </div>
    </div>
  </div>
</div>

<!-- modalCompose -->
<form action="{{ route('SendMessageInbox') }}" method="post">
@csrf
<div class="modal fade" id="modalCompose" tabindex="-1" role="dialog" aria-labelledby="modalCompose" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Compose Mail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  	 	<div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">To:</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="staticEmail" value="" placeholder="Receipient Email" name='rcpt'>
		    </div>
	  	</div>
  	 	<div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Subject:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="staticEmail" value="" placeholder="e.g last lesson" name='subject'>
		    </div>
	  	</div>

	  	<hr/>

        <div class="form-group">
		  <label for="comment">Message:</label>
		  <textarea class="form-control" rows="5" id="comment" name='message'></textarea>
		</div>
      </div>
      <div class="modal-footer">
        <!--a href="/studentinbox" type="button" class="btn btn-primary mr-auto"><i class="fa fa-inbox"></i>Inbox</a>-->
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
        <input type="submit" class="btn btn-secondary"><Send</button>
      </div>
    </div>
  </div>
</div>
</form>