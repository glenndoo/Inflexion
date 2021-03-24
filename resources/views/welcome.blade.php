<x-template data='welcome' />
<div class="container">
        <div class="container">
            <div id="carouselControls" class="carousel slide" data-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-75 mx-auto" src="{{ asset('img/placeholder-image.png')}}" alt="First slide" >
                </div>
                <div class="carousel-item">
                  <img class="d-block w-75 mx-auto" src="{{ asset('img/placeholder-image.png')}}" alt="Second slide" >
                </div>
                <div class="carousel-item">
                  <img class="d-block w-75 mx-auto" src="{{ asset('img/placeholder-image.png')}}" alt="Third slide" >
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev" >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner text-center rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Meet our new teachers!</span>
                        </h2>
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="4000"><!--slide interval speed 1000 = 1 sec-->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/placeholder-male-square.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-square.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-square.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-square.png')}}" alt="..." class="bannerImageSplash">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/placeholder-male-square.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-square.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-square.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-square.png')}}" alt="..." class="bannerImageSplash">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/placeholder-male-square.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-square.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-square.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-square.png')}}" alt="..." class="bannerImageSplash">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


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
                        <input type='text' name='username' placeholder="enter email e.g example@gmail.com " required/><br />
                        <input type='password' name='password' placeholder ="password" required/><br />
                        <input type='submit' value='Login' />
                    </form>

                    <!-- Remind Passowrd -->
                    <div id="formFooter">
                      <a class="underlineHover" href="#">Forgot Password?</a>
                    </div>

                  </div>
                </div>
            </div>
            <div class="modal-footer">
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
                    <form action="{{ route('ValidateRegistry') }}" method="post">
                        @csrf
                           
                           
                            
                            <div class="form-group row">
                                <div class="col-sm">
                                    <input type='email' name='username' placeholder="email address" /><br />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <input type='password' name='password' placeholder="password" /><br />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <input type='password' name='confirmPassword' placeholder="confirm password" /><br />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 align-middle">
                                    <select class="" name='type'>
                                        <option value="" disabled selected>are you student or teacher?</option>
                                        <option value='0'>Student</option>
                                        <option value='1'>Tutor</option>
                                    </select>
                                </div>
                                <div class="col-sm-12">
                                    
                                <input type='submit' value='Register' />
                                </div>
                            </div>
                            <div class="form-group row">
                                
                            </div>

                    </form>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
            
            </div>
        </div>
    </div>
</div>