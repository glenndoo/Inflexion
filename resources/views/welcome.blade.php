<x-template data='Welcome' />
    <div class="container fade-load">
        <div class="row">
            @if(isset($Success))
                <div style="margin-top: 4.5rem; z-index: 9999; position: fixed; right: 1rem; " class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>{{ $Success}}</strong><br/>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            @endif
            <div class="col-sm-12 top-carousel" >
                <div id="carouselControls" class="carousel slide" data-interval="false">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-block w-75 mx-auto">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h1>English as a Second Language</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                                    <button class="btn btn-primary">Read more</button>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="{{ asset('img/placeholder5.jpg')}}" alt="..." class="carousel-image-top">
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="{{ asset('img/placeholder6.jpg')}}" alt="..." class="carousel-image-top">
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-block w-75 mx-auto">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h1>About US</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <button class="btn btn-primary">Read more</button>
                                </div>
                                <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-11">
                                                <img src="{{ asset('img/placeholder7.jpg')}}" alt="..." class="carousel-image-top">
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-block w-75 mx-auto">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h1>Become a Tutor</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <button class="btn btn-primary">Read more</button>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="{{ asset('img/placeholder1.jpg')}}" alt="..." class="carousel-image-small">
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="{{ asset('img/placeholder4.jpg')}}" alt="..." class="carousel-image-small">
                                           
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="{{ asset('img/placeholder3.jpg')}}" alt="..." class="carousel-image-small">
                                            
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="{{ asset('img/placeholder2.jpg')}}" alt="..." class="carousel-image-small">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
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
            <div class="col-sm-12 carousel-bot">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner text-center rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Meet our new teachers!</span>
                        </h2>
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="4000"><!--slide interval speed 1000 = 1 sec-->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/placeholder-male-1.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-2.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-3.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-4.png')}}" alt="..." class="bannerImageSplash">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/placeholder-male-4.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-3.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-1.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-2.png')}}" alt="..." class="bannerImageSplash">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/placeholder-male-3.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-1.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-2.png')}}" alt="..." class="bannerImageSplash">
                                    <img src="{{ asset('img/placeholder-male-4.png')}}" alt="..." class="bannerImageSplash">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
        </div>
    </div>
<!--FOOTER-->
  <footer class="py-4 bg-dark flex-shrink-0 ease-loadBot">
    <div class="container text-center">
      <a href="" class="text-muted">Copyright ©  2021 Inflexion Global</a>
    </div>
  </footer>
<!--END FOOTER-->