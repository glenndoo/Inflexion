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
	<nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top ease-loadTop">
	    <img class="circleLogo" src="{{ asset('img/inflex_icon.png') }}" width="2.5%">
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	        <ul class="navbar-nav mr-auto">
	            <li class="nav-item active">
	                <li class="nav-item">
		                 <a class="nav-link" href="#" title="home"><i class="fa fa-home"></i></i></a>
		            </li>
	                <li class="nav-item">
		                 <a class="nav-link" href="#" title="home"><i class="fa fa-envelope"></i></a>
		            </li>
	            </li>
	        </ul>
	        <ul class="navbar-nav">
	            <li class="nav-item">
	                <img class="circleLogo" src="{{ asset('img/placeholder-male-square.png') }}" width=30rem">user</img>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="#" data-toggle="modal" data-target="#signUpModal" title="setting"><i class="fa fa-bell"></i></a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="#" data-toggle="modal" data-target="#signUpModal" title="setting"><i class="fa fa-cog"></i></a>
	            </li>
	        </ul>
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
	            <a href="">
	                <i class="fa fa-home fa-2x"></i>
	                <span class="nav-text">
	                    Dashboard
	                </span>
	            </a>
	          
	        </li>
	        <li class="has-subnav">
	            <a href="#">
	                <i class="fa fa-laptop fa-2x"></i>
	                <span class="nav-text">
	                    Stars Components
	                </span>
	            </a>
	            
	        </li>
	        <li class="has-subnav">
	            <a href="#">
	               <i class="fa fa-list fa-2x"></i>
	                <span class="nav-text">
	                    Forms
	                </span>
	            </a>
	            
	        </li>
	        <li class="has-subnav">
	            <a href="#">
	               <i class="fa fa-folder-open fa-2x"></i>
	                <span class="nav-text">
	                    Pages
	                </span>
	            </a>
	           
	        </li>
	        <li>
	            <a href="#">
	                <i class="fa fa-bar-chart-o fa-2x"></i>
	                <span class="nav-text">
	                    Graphs and Statistics
	                </span>
	            </a>
	        </li>
	        <li>
	            <a href="#">
	                <i class="fa fa-font fa-2x"></i>
	                <span class="nav-text">
	                   Quotes
	                </span>
	            </a>
	        </li>
	        <li>
	           <a href="#">
	               <i class="fa fa-table fa-2x"></i>
	                <span class="nav-text">
	                    Tables
	                </span>
	            </a>
	        </li>
	        <li>
	           <a href="#">
	                <i class="fa fa-map-marker fa-2x"></i>
	                <span class="nav-text">
	                    Maps
	                </span>
	            </a>
	        </li>
	        <li>
	            <a href="#">
	               <i class="fa fa-info fa-2x"></i>
	                <span class="nav-text">
	                    Documentation
	                </span>
	            </a>
	        </li>
	    </ul>

	    <ul class="logout">
	        <li>
	           <a href="#">
	                 <i class="fa fa-power-off fa-2x"></i>
	                <span class="nav-text">
	                    Logout
	                </span>
	            </a>
	        </li>  
	    </ul>
	</nav>
</body>
</html>