<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studentIndex</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/studentIndex.css') }}" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light bg-light navbar-custom fixed-top ease-loadTop">
	    <a href="#" class="navbar-brand">
	       <img class="" src="{{ asset('img/inflex_icon.png') }}" >
	    </a>
	    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
	        <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="navbarCollapse">
	        <div class="navbar-nav">
	            <!--<a href="#" class="nav-item nav-link">Profile</a>-->

	            <!-- trigger modalMail -->
				<a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#modalMail">
					<i class="fa fa-envelope" aria-hidden="true"></i>mail
				</a>
				<!-- trigger modalCredits -->
				<a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#modalCredits">
					<i class="fa fa-credit-card-alt" aria-hidden="true"></i>credits
				</a>
	            
	        </div>
	        <div class="navbar-nav ml-auto">
	        	
	        	
	            <div class="search ">
	            	<input type="text" class="search-input" placeholder="Search..." name="">
	            		<a href="#" class="search-icon">
	            			<i class="fa fa-search"></i>
	            		</a>
	            </div>
	        	<div class="btn-group">
				  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  	<a href="#" class="dropdown-button disabled" tabindex="-1"><img class="circleLogo" src="{{ asset('img/placeholder-male-square.png') }}"></a>
				  </button>
				  <div class="dropdown-menu dropdown-menu-right">
				    <button class="dropdown-item" type="button">User's Name</button>
				    <button class="dropdown-item" type="button"><a href="/studentSettings" class="">Settings</a></button>
				    <button class="dropdown-item" type="button"><a href="/studentProfile" class="">Profile</a></button>
				    <!--button class="dropdown-item" type="button">Profile</button-->
				    
				  </div>
				</div>
	        </div>
	    </div>
	</nav>
	@if(isset($Errors))
	    @foreach($Errors as $err)
	    	{{ $err }}
	    @endforeach
	@endif
	
	<nav class="main-menu ease-loadLeft">
	    <ul>
	        <li>
	            <a href="/studentIndex">
	                <i class="fa fa-home icon-side fa-size"></i>
	                <span class="nav-text">
	                    Dashboard
	                </span>
	            </a>
	          
	        </li>
	        <li class="has-subnav">
	            <a href="/studentGroups">
	                <i class="fa fa-users icon-side fa-size"></i>
	                <span class="nav-text">
	                    Groups
	                </span>
	            </a>
	            
	        </li>
	        <li class="has-subnav">
	            <a href="#">
	               <i class="fa fa-list icon-side fa-size"></i>
	                <span class="nav-text">
	                    Schedule
	                </span>
	            </a>
	            
	        </li>
	        <li class="has-subnav">
	            <a href="#">
	               <i class="fa fa-folder-open icon-side fa-size"></i>
	                <span class="nav-text">
	                    link
	                </span>
	            </a>
	           
	        </li>
	        <li>
	            <a href="#">
	                <i class="fa fa-bar-chart-o icon-side fa-size"></i>
	                <span class="nav-text">
	                    link
	                </span>
	            </a>
	        </li>
	        <li>
	            <a href="#">
	                <i class="fa fa-font icon-side fa-size"></i>
	                <span class="nav-text">
	                   link
	                </span>
	            </a>
	        </li>
	        <li>
	           <a href="#">
	               <i class="fa fa-table icon-side fa-size"></i>
	                <span class="nav-text">
	                    link
	                </span>
	            </a>
	        </li>
	        <li>
	           <a href="#">
	                <i class="fa fa-map-marker icon-side fa-size"></i>
	                <span class="nav-text">
	                    link
	                </span>
	            </a>
	        </li>
	        <li>
	            <a href="#">
	               <i class="fa fa-info icon-side fa-size"></i>
	                <span class="nav-text">
	                    Documentation
	                </span>
	            </a>
	        </li>
	    </ul>

	    <ul class="logout">
	        <li>
	           <a href="{{ route('LogoutUser') }}">
	                 <i class="fa fa-power-off icon-side fa-size"></i>
	                <span class="nav-text">
	                    Logout
	                </span>
	            </a>
	        </li>  
	    </ul>
	</nav>

<!-- modalMail -->
<div class="modal fade" id="modalMail" tabindex="-1" role="dialog" aria-labelledby="modalMail" aria-hidden="true">
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
		      <input type="text" class="form-control" id="staticEmail" value="" placeholder="recievers name">
		    </div>
	  	</div>
  	 	<div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Subject:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="staticEmail" value="" placeholder="e.g last lesson">
		    </div>
	  	</div>

	  	<hr/>

        <div class="form-group">
		  <label for="comment">Message:</label>
		  <textarea class="form-control" rows="5" id="comment"></textarea>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary mr-auto" data-dismiss="modal"><i class="fa fa-inbox" aria-hidden="true"></i>Inbox</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-secondary"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>send</button>
      </div>
    </div>
  </div>
</div>

<!-- modalCredits -->
<div class="modal fade" id="modalCredits" tabindex="-1" role="dialog" aria-labelledby="modalCredits" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">modalCredits</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>