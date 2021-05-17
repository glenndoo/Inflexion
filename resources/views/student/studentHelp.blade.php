<x-student-template data="studentHelp" />
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
				<h6>student>studentGuide</h6>
			</div>
		</div>
		<!--post to feed end-->

		<!--settings start-->
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="row">
						@for ($i = 0; $i < 10; $i++)
			            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"data-target="#image-gallery_{{$i}}">
			                    <img class="img-thumbnail"
			                         src="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
			                         alt="Another alt text">
			                </a>
			            </div>

						@endfor
			        </div>
				</div>
			</div>
		</div>
		<!--end settings-->
	</div>
</div>

@for ($i = 0; $i < 10; $i++)
<div class="modal fade" id="image-gallery_{{$i}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="image-gallery-title">array image #{{$i}}</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive col-md-12" src="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
            </div><!--
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                </button>

                <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                </button>
            </div>-->
        </div>
    </div>
</div>
@endfor