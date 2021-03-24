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
	    <img src="{{ asset('img/inflex_icon.png') }}" width="2.5%">
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	        <ul class="navbar-nav mr-auto">
	            <li class="nav-item active">
	                <li class="nav-item">
		                <!--<a class="nav-link" href="#"   data-toggle="collapse" data-target="#collapseNaviagtion" aria-expanded="false" aria-controls="collapseNaviagtion">+About Us</a>-->
		            </li>
	            </li>
	        </ul>
	        <ul class="navbar-nav">
	            <li class="nav-item">
	                <a class="nav-link" href="#">(name) Logout</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="#" data-toggle="modal" data-target="#signUpModal"></a>
	            </li>
	        </ul>
	    </div>
	</nav>
	@if(isset($Errors))
	    @foreach($Errors as $err)
	    	{{ $err }}
	    @endforeach
	@endif
</body>
</html>