<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminIndex</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/studentIndex.css') }}" rel="stylesheet">
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
	            <!--<a href="#" class="nav-item nav-link">Profile</a>-->

	            <!-- trigger modalMail
				<a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#modalMail">
					<i class="fa fa-envelope" aria-hidden="true"></i>mail
				</a>
				-->
				<!-- trigger modalCredits -->
				<a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#modalCredits">
					<i class="fa fa-credit-card-alt" aria-hidden="true"></i>credits
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
	            <a href="/adminIndex">
	                <i class="fa fa-home icon-side fa-size"></i>
	                <span class="nav-text">
	                    Dashboard
	                </span>
	            </a>
	        </li>
	        <li>
	            <a href="/adminIndex">
	                <i class="fa fa-users icon-side fa-size"></i>
	                <span class="nav-text">
	                    Users
	                </span>
	            </a>
	        </li>
	        <li>
	            <a href="/adminIndex">
	                <i class="fa fa-globe icon-side fa-size"></i>
	                <span class="nav-text">
	                    Posts
	                </span>
	            </a>
	        </li>
	        <li>
	            <a href="/adminIndex">
	                <i class="fa fa-bullhorn icon-side fa-size"></i>
	                <span class="nav-text">
	                    Announcements
	                </span>
	            </a>
	        </li>
	        <li>
	            <a href="/adminIndex">
	                <i class="fa fa-graduation-cap icon-side fa-size"></i>
	                <span class="nav-text">
	                    Classes
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
</body>
</html>