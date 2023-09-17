<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/studentIndex.css') }}" rel="stylesheet">
    <link href="{{ asset('img/inflex_icon.png') }}" rel="icon">
	<script src="{{ asset('js/credits.js') }}" defer></script>
</head>
<body id="app">
	<nav class="navbar navbar-expand-md navbar-light bg-light navbar-custom fixed-top ease-loadTop">
	    <a href="#" class="navbar-brand">
	       <img class="" src="{{ asset('img/inflex_icon.png') }}" >
	    </a>
	    <button type="button" class="navbar-toggler float-right" data-toggle="collapse" data-target="#navbarCollapse">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarCollapse">
	        <div class="navbar-nav">
				<!-- trigger modalCredits -->
				<a href="#" class="nav-item nav-link" style="color: black !important" data-toggle="modal" data-target="#modalCredits">
		            <center>
		            	<i class="fa fa-credit-card-alt" aria-hidden="true"></i>&nbspCredits Earned: <strong><p id="credits"></p></strong>
		            </center>
				</a>
	        </div>
	        <div class="navbar-nav ml-auto">
	        	<div class="btn-group">
				  	<div class="dropdown-menu dropdown-menu-left shadow">
				    	<ul class="Notification-ul">
				    		<!--should only show 3 latest-->
				    		<li>
				    			<div class="dropdown-item">
				    				<div class="col-sm-12 ">
				    					<a>Class Canceled<small class="float-right"><i>9:00am 30/3/21</i></small></a>
				    				</div>
				    			</div>
				    		</li>
				    		<li>
				    			<div class="dropdown-item">
				    				<div class="col-sm-12 ">
				    					<a>Class Booked<small class="float-right"><i>9:00am 30/3/21</i></small></a>
				    				</div>
				    			</div>
				    		</li>
				    		<li>
				    			<div class="dropdown-item">
				    				<div class="col-sm-12 ">
				    					<a>You Missed a class<small class="float-right"><i>9:00am 30/3/21</i></small></a>
				    				</div>
				    			</div>
				    		</li>

				    		<!--see more link for modal-->
				    		<li>
				    			<div class="dropdown-item">
				    				<div class="col-sm-12 text-center">
				    					<a href=""><i>see more</i></a>
				    				</div>
				    			</div>
				    		</li>
				    	</ul>
				   	 <!--button class="dropdown-item" type="button">Profile</button-->
				  	</div>
				</div>
	            <div class="search ">
	            	<input type="text" class="search-input" placeholder="Search..." name=""/>
            		<a href="#" class="search-icon">
            			<i class="fa fa-search"></i>
            		</a>
	            </div>
	            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Notifications">
				  	<a href="#" class="bell-icon dropdown-button disabled" tabindex="-1"><i class="fa fa-bell" aria-hidden="true"></i></a>
				  </button>
	        	<div class="btn-group">
				  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  	<a href="#" class="dropdown-button disabled" tabindex="-1"><img class="circleLogo" src="{{ asset('img/placeholder-male-square.png') }}"></a>
				  </button>
				  	<div class="dropdown-menu dropdown-menu-right shadow">
				    	<button class="dropdown-item" type="button">{{ session()->get('info.userWholeName') }}</button>
				    	<button class="dropdown-item" type="button"><a href="/tutorSettings" class="">Settings</a></button>
				    	<button class="dropdown-item" type="button"><a href="/tutorProfile" class="">Profile</a></button>
				    	<hr/>
				    	<button class="dropdown-item" type="button"><a href="{{ route('LogoutUser') }}" class="">Logout</a></button>
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
	            <a href="/inflexionIndex">
	                <i class="fa fa-home icon-side fa-size"></i>
	                <span class="nav-text">
	                    Dashboard
	                </span>
	            </a>
	          
	        </li>
	        <!-- <li class="has-subnav">
	            <a href="/tutorGroups">
	                <i class="fa fa-users icon-side fa-size"></i>
	                <span class="nav-text">
	                    Groups
	                </span>
	            </a>
	            
	        </li> -->
	        <li class="has-subnav">
	            <a href="{{ route('getNotificationsTutor') }}">
	               <i class="fa fa-list icon-side fa-size"></i>
	                <span class="nav-text">
	                    My Classes
	                </span>
	            </a>
	            
	        </li>
			<li class="has-subnav">
	            <a href="/detailedSchedule">
	               <i class="fa fa-calendar icon-side fa-size"></i>
	                <span class="nav-text">
	                    My Schedule
	                </span>
	            </a>
	            
	        </li>
	        <!-- <li class="has-subnav">
	            <a href="/tutorInbox">
	               <i class="fa fa-envelope icon-side fa-size"></i>
	                <span class="nav-text">
	                    Mailbox
	                </span>
	            </a>
	           
	        </li> -->
	        <!-- <li>
	            <a href="#">
	                <i class="fa fa-usd icon-side fa-size"></i>
	                <span class="nav-text">
	                   Payment
	                </span>
	            </a>
	        </li> -->
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

<!-- modalCredits -->
<div class="modal fade" id="modalCredits" tabindex="-1" role="dialog" aria-labelledby="modalCredits" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Credits Earned</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-sm-2">
        		<label></label>
        	</div>
        	<div class="col-sm-10 text-right">
        		<label><b title="Inflexion Global Credits">
				</b></label>
        	</div>
        	<div class="col-sm-12 text-right">
        		<small><i>Exchange rate for credits</i></small>
        	</div>
        </div>

        <hr/>

        <div class="row">
        	<div class="col-sm-3">
        		
        	</div>
        	<div class="col-sm-5">
        		
        	</div>
        	<div class="col-sm-2">
        		
        	</div>
        	<!-- <div class="col-sm-2">
        		<button class="form-control btn btn-primary">payout</button>
        	</div> -->
        </div>
      </div>
      <div class="modal-footer">
        <!--button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button-->
      </div>
    </div>
  </div>
</div>

</body>
</html>