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
    <link href="{{ asset('css/custom-style-template.css') }}" rel="stylesheet">
</head>
<body id="app">
	<!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top navbar-custom
ease-loadTop">
                <a class="navbar-brand" href="/adminIndex"><img class="" src="{{ asset('img/inflex_icon.png') }}" ></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="{{ asset('img/placeholder-male-square.png') }}" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="{{ asset('img/placeholder-male-square.png') }}" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="{{ asset('img/placeholder-male-square.png') }}" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="{{ asset('img/placeholder-male-square.png') }}" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
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
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            	<img src="{{ asset('img/placeholder-male-square.png') }}" alt="" class="user-avatar-md rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">{{ session()->get('info.userWholeName') }}</h5>
                                    <!--span class="status"></span><span class="ml-2">Available</span-->
                                </div>
                                <!--a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a-->
                                <!--a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a-->
                                <a class="dropdown-item" href="{{ route('LogoutUser') }}"><i class="fa fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
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
				    	<hr/>
				    	<button class="dropdown-item" type="button"><a href="{{ route('LogoutUser') }}" class="">Logout</a></button>
				  	</div>
				</div>
	        </div>
	    </div>
	</nav-->
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
	            <a href="/adminUserList">
	                <i class="fa fa-users icon-side fa-size"></i>
	                <span class="nav-text">
	                    Users
	                </span>
	            </a>
	        </li>
	        <li>
	            <a href="/adminUserPosts">
	                <i class="fa fa-globe icon-side fa-size"></i>
	                <span class="nav-text">
	                    Posts
	                </span>
	            </a>
	        </li>
	        <li>
	            <a href="/adminAnnouncements">
	                <i class="fa fa-bullhorn icon-side fa-size"></i>
	                <span class="nav-text">
	                    Announcements
	                </span>
	            </a>
	        </li>
	        <li>
	            <a href="/adminLibrary">
	                <i class="fa fa-graduation-cap icon-side fa-size"></i>
	                <span class="nav-text">
	                    Site Library
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