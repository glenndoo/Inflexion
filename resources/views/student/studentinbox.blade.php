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
		<!--start post to feed -->
		<div class="row">
			<div class="col-sm-12">
				<h6>student>studentinbox Note: top email (justnow) message has modal</h6>
			</div>
		</div>
		<!--post to feed end-->

		<!--student groups start-->
		<div class="row">
			<!-- BEGIN INBOX -->
			<div class="col-md-12">
				<div class="grid email shadow">
					<div class="grid-body">
						<div class="row">
							<!-- BEGIN INBOX MENU -->
							<div class="col-md-3">
								<h2 class="grid-title"><i class="fa fa-inbox"></i> Inbox</h2>
								<a class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalCompose"><i class="fa fa-pencil"></i>&nbsp;&nbsp;NEW MESSAGE</a>

								<hr>

								<div>
									<div class="nav nav-pills nav-stacked">
										<div class="row">
											<div class="col-sm-12 header">Folders</div>
											<div class="col-sm-12 active"><a href="#"><i class="fa fa-inbox"></i> Inbox {{ count($Messages) }}</a></div>
											<div class="col-sm-12"><a href="#"><i class="fa fa-mail-forward"></i> Sent</a></div>
										</div>
									</div>
								</div>
							</div>
							<!-- END INBOX MENU -->
							
							<!-- BEGIN INBOX CONTENT -->
							<div class="col-md-9">
								<div class="row">
									<div class="col-sm-6">
										<label style="margin-right: 8px;" class="">
											<div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="check-all" class="icheck" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
										</label>
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
		                                            <button type="submit" name="searchInbox" class="btn btn-primary form-control"><i class="fa fa-search"></i></button></span>
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
												<td class="name"><a href="#">{{ $msgs->inflexion_inbox_sender }}</a></td>
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
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">»</a></li>
								</ul>						
							</div>
							<!-- END INBOX CONTENT -->
						</div>
					</div>
				</div>
			</div>
			<!-- END INBOX -->
		</div>
		<!--end settings-->
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
		      <input type="text" class="form-control" id="staticEmail" value="glenn@email.com" disabled placeholder="recievers name">
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
		      <input type="text" class="form-control" id="staticEmail" value="" placeholder="Receipient Email" name='rcpt'>
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