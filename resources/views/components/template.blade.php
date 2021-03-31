<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top ease-loadTop">
	    <img src="{{ asset('img/inflex_logo.png') }}" width="10%">
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
	                <a class="nav-link" href="#"  data-toggle="modal" data-target="#logInTeacherModal">Login</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="#" data-toggle="modal" data-target="#signUpModal">Register</a>
	            </li>
	        </ul>
	    </div>
	</nav>
    @if(isset($Errors))
        @foreach($Errors as $err)
        {{ $err }}
        @endforeach
    @endif

    <!-- login Modal -->
    <div class="splashModal modal fade" id="logInTeacherModal" tabindex="-1" role="dialog" aria-labelledby="logInTeacherModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="wrapper fadeInDown">
                      <div id="formContent">
                        <!-- Login Form -->
                        <form action="{{ route('LoginUser') }}" method="post">
                        @csrf
                            <input class="form-control" type='text' name='username' placeholder="enter email e.g example@gmail.com " required/><br />
                            <input class="form-control" type='password' name='password' placeholder ="password" required/><br />
                            <button class="btn btn-primary" type='submit' value='Login'>Login</button>
                        </form>

                        <!-- Remind Passowrd -->
                        <div id="formFooter">
                          <a class="underlineHover" href="#">Forgot Password?</a>
                        </div>

                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- register / signup Modal -->
    <div class="splashModal modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Sign-up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="wrapper fadeInDown">
                        <div id="formContent">
                            <!-- Login Form -->
                            <form action="{{ route('ValidateRegistry') }}" method="post" oninput='confirmPassword.setCustomValidity(confirmPassword.value != password.value ? "Passwords do not match." : "")'>
                                @csrf
                                    <div class="form-group row">
                                        <div class="col-sm">
                                            <input class="form-control" type='email' name='username' placeholder="email address" required /><br />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm">
                                            <input class="form-control" type='password' name='password' placeholder="password" required/><br />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm">
                                            <input class="form-control" type='password' name='confirmPassword' placeholder="confirm password" required/><br />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-8 align-middle">
                                            <select class="form-control" name='type' required>
                                                <option value="" disabled selected>are you student or teacher?</option>
                                                <option value='1' >Student</option>
                                                <option value='2'>Tutor</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <button class="btn btn-primary form-control" type='submit' value='Register'>Register</button> 
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>