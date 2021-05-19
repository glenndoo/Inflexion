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
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal_1">Read more</button>
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
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal_2">Read more</button>
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
                                    <button class="btn btn-primary"  data-toggle="modal" data-target="#modal_3">Read more</button>
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
  <footer id="footer" class="py-4 bg-dark flex-shrink-0 ease-loadBot">


        <div id="footerbuttonup">&#9650;</div>
            
      <div id="footerbuttondown">&#9660;</div>

      <div class="row">
          <div id="footercopyright">
               <a href="" class="text-muted">Copyright ©  2021 Inflexion Global</a>
          </div>
      </div>

      <div class="container">
          <div class="row"id="footercont">
              <!--First column-->
            <div class="col-md-4">
                <h5 class="title mb-4 mt-3 font-bold">Footer Content</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <!--/.First column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Second column-->
            <div class="col-md-2 mx-auto">
                <h5 class="title mb-4 mt-3 font-bold">Contact us</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Third column-->
            <div class="col-md-2 mx-auto">
                <h5 class="title mb-4 mt-3 font-bold">FAQs</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Fourth column-->
            <div class="col-md-2 mx-auto">
                <h5 class="title mb-4 mt-3 font-bold ">The Team</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->
          </div>
      </div>
  </footer>
<!--END FOOTER-->

<!-- Modal -->
<div class="modal fade" id="modal_1" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ENGLISH AS A SECOND LANGUAGE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <h1>What is Lorem Ipsum?</h1>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

        <h1>Why do we use it?</h1>
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


        <h1>Where does it come from?</h1>
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_2" tabindex="-1" role="dialog" aria-labelledby="modal_2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ABOUT US</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <h1>What is Lorem Ipsum?</h1>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

        <h1>Why do we use it?</h1>
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


        <h1>Where does it come from?</h1>
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal_3" tabindex="-1" role="dialog" aria-labelledby="modal_3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">BECOME A TUTOR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <h1>What is Lorem Ipsum?</h1>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

        <h1>Why do we use it?</h1>
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


        <h1>Where does it come from?</h1>
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

    document.getElementById("footerbuttondown").onclick = function(){shrink()};
    document.getElementById("footerbuttonup").onclick = function(){ expand()};
    document.getElementById("footer").style.height= "30px"; 
 
function shrink(){
  if(document.getElementById("footer").style.height= "300px"){
  
    document.getElementById("footer").style.height= "30px";
    document.getElementById("footerbuttondown").style.visibility="hidden";  
    document.getElementById("footerbuttonup").style.visibility="visible";  
    document.getElementById("footercont").style.opacity="0";  
    document.getElementById("footercont").style.visibility="hidden";
                                      
  }
}

function expand(){
  if(document.getElementById("footer").style.height= "30px"){
    document.getElementById("footer").style.height= "300px";
    document.getElementById("footerbuttondown").style.visibility="visible";  
    document.getElementById("footerbuttonup").style.visibility="hidden";  
    document.getElementById("footercont").style.opacity="1";  
    document.getElementById("footercont").style.visibility="visible";

                                                  
  }
}

</script>