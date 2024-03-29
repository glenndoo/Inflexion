<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inflexion</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  	<script src="{{ asset('js/kinetic.min.js') }}"></script>
  	<script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>

	<!-- Credits -->
	<script src="{{ asset('js/credits.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/studentIndex.css') }}" rel="stylesheet">
    <link href="{{ asset('img/inflex_icon.png') }}" rel="icon">
    <link href="{{ asset('css/custom-style-template.css') }}" rel="stylesheet">

     <!-- Enjoyhint library -->
  	<!-- <link href="{{ asset('enjoyhint/enjoyhint.css') }}" rel="stylesheet">
  	<script src="{{ asset('enjoyhint/enjoyhint.min.js') }}"></script> -->
</head>
<body id="app">

	<!--nav class="navbar navbar-expand-md navbar-light bg-light navbar-custom fixed-top ease-loadTop">
	    <a href="#" class="navbar-brand">
	       <img class="" src="{{ asset('img/inflex_icon.png') }}" >
	    </a>
	    <button type="button" class="navbar-toggler float-right" data-toggle="collapse" data-target="#navbarCollapse">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarCollapse">
	        <div class="navbar-nav">
				<a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#modalCredits">
					<i class="fa fa-credit-card-alt" aria-hidden="true"></i>credits
				</a>
	        </div>
	        <div class="navbar-nav ml-auto">
	        	<div class="btn-group">
				  	<div class="dropdown-menu dropdown-menu-left shadow">
				    	<ul class="Notification-ul">
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
				    		<li>
				    			<div class="dropdown-item">
				    				<div class="col-sm-12 text-center">
				    					<a href=""><i>see more</i></a>
				    				</div>
				    			</div>
				    		</li>
				    	</ul>
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
				    	<button class="dropdown-item" type="button"><a href="/studentSettings" class="">Settings</a></button>
				    	<button class="dropdown-item" type="button"><a href="/studentProfile" class="">Profile</a></button>
				    	<hr/>
				    	<button class="dropdown-item" type="button"><a href="{{ route('LogoutUser') }}" class="">Logout</a></button>
				  	</div>
				</div>
	        </div>
	    </div>
	</nav-->
		<!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white navbar-custom ease-loadTop">
                <a class="navbar-brand" href="/adminIndex"><img class="" src="{{ asset('img/inflex_icon.png') }}" ></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
						<span style="color: black !important;">Credits available: 
						@if(session()->get('info.credits'))
						<center>
						<strong><p id="credits"></p></strong>
						</center>
						@elseif(!session()->get('info.credits'))
						0
						@endif
						</span>
						</li>
						<li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons guidestep4" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title">Notifications</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active guidestep5">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="{{ asset('img/placeholder-male-square.png') }}" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <!--li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="{{ asset('img/placeholder-male-square.png') }}" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="{{ asset('img/placeholder-male-square.png') }}" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="{{ asset('img/placeholder-male-square.png') }}" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="{{ asset('img/placeholder-male-square.png') }}" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="{{ asset('img/placeholder-male-square.png') }}" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="{{ asset('img/placeholder-male-square.png') }}" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li-->
                        <li class="nav-item dropdown nav-user guidestep6">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            	<img src="{{ asset('img/placeholder-male-square.png') }}" alt="" class="user-avatar-md rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">{{ session()->get('info.userWholeName') }}</h5>
                                    <!--span class="status"></span><span class="ml-2">Available</span-->
                                </div>
                                <a class="dropdown-item guidestep7" href="/studentSettings"><i class="fa fa-user mr-2"></i>Settings</a>
                                <a class="dropdown-item guidestep8" href="/studentProfile"><i class="fa fa-cog mr-2"></i>Profile</a>
                                <a class="dropdown-item guidestep9" href="#"data-toggle="modal" data-target="#modalCredits"><i class="fa fa-credit-card mr-2"></i>Credits</a>
                                <a class="dropdown-item guidestep10" href="{{ route('LogoutUser') }}"><i class="fa fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
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
	            <a href="/studentGroups">
	                <i class="fa fa-users icon-side fa-size"></i>
	                <span class="nav-text">
	                    Groups
	                </span>
	            </a>
	            
	        </li> -->
	        <li class="has-subnav">
	            <a href="/getNotificationsStudent">
	               <i class="fa fa-list icon-side fa-size"></i>
	                <span class="nav-text">
	                    My classes
	                </span>
	            </a>
	            
	        </li>
			<li>
	            <a href="/calendar?sId={{Session::get('info.userId')}}">
	               <i class="fa fa-calendar icon-side fa-size"></i>
	                <span class="nav-text">
	                    My Calendar
	                </span>
	            </a>
	        </li>
	        <!-- <li class="has-subnav">
	            <a href="{{ route('ShowInbox') }}">
	               <i class="fa fa-envelope icon-side fa-size"></i>
	                <span class="nav-text">
	                    Mailbox
	                </span>
	            </a>
	           
	        </li> -->
	        <li>
	            <a href="/studentFindTutor">
	                <i class="fa fa-users icon-side fa-size"></i>
	                <span class="nav-text">
	                   Find Tutor
	                </span>
	            </a>
	        </li>
	        
	        <li>
	            <a href="/studentLibrary">
	               <i class="fa fa-book icon-side fa-size"></i>
	                <span class="nav-text">
	                    Library
	                </span>
	            </a>
	        </li>
	        <li>
	            <a href="/studentHelp">
	               <i class="fa fa-question-circle icon-side fa-size"></i>
	                <span class="nav-text">
	                    Help
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
        <h5 class="modal-title" id="exampleModalLongTitle">Credits</h5>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-sm-3">
        		<label>Available credits: 
					@if(session()->get('info.credits'))
					<strong>{{ session()->get('info.credits') }}</strong></label>
					@elseif(!session()->get('info.credits'))
					<strong>0</strong>
					@endif
				</div>
        	<div class="col-sm-10 text-right">
        		<label><b title="Inflexion Global Credits"></b> </label>
        	</div>
        	<div class="col-sm-12 text-right">
        	</div>
        </div>
        <hr/>
		<form method="POST" action="{{ route('initiatePayment') }}">
			@csrf
        <div class="row">
        	<div class="col-sm-6">Payment amount (2 credits = 1 USD):
        		<i title="desired amount of credits 1 IGC = 1$."class="fa fa-info-circle" aria-hidden="true"></i>
        		<input type="number" name="amount" min="50" id="amount" />
        	</div>
        	<div class="col-sm-2">
        		<i title="You will be forwarded to a secure page to complete your credit purchase"class="fa fa-info-circle" aria-hidden="true"></i>
        		<input type="submit" class="form-control btn btn-primary" value="Buy credits"></button>
			</form>
        	</div>
        	<div class="col-sm-12">
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <!--button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button-->
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	//initialize instance
var enjoyhint_instance = new EnjoyHint({});

//simple config.
//hide EnjoyHint after a click on the button.
var enjoyhint_script_steps = [
  {
    'click .guidestep1' : 'Share your thoughts to the community'
  },
  {
    'click .guidestep2' : 'This displays the total number of posts'
  },
  {
    'click .guidestep3' : 'this shows the number of posts in groups you are part of'
  },
  {
    'click .guidestep4' : 'view your notifications and alerts'
  },
  {
    'click .guidestep5' : 'description'
  },
  {
    'click .guidestep6' : 'description1'
  },
  {
    'click .guidestep7' : 'description1'
  }
];


//set script config
enjoyhint_instance.set(enjoyhint_script_steps);

//run Enjoyhint script
enjoyhint_instance.run();
</script>
</body>
</html>