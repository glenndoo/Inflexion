@extends('layouts/app')
@section('title', 'Inflexion')
@section('content')
    <div class="container-fluid py-4">
        <div class="vh-100 bg-white rounded-1 shadow">
            <div class="container p-5">
                <h3>Find your tutor</h3>
                <small>24 results</small>
                <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Rating</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Price</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Language</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="card border border-info mb-3">
                        <div class="row rounded p-3 shadow-1 ">
                            <div class="col-sm-2 "> 
                               <img src={{ asset("assets/img/bruce-mars.jpg") }} class="tutor-avatar rounded-3">
                                
                            </div>
                            <div class="col-sm-8">
                                <span class="badge bg-gradient-info">Math</span>
                                <span class="badge bg-gradient-info">Science</span>
                                <h5>John Doe</h5>
                                <small>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste corrupti id saepe quibusdam dolore laudantium illo nam fugiat minus.</small>
                               <div>
                                    <span class="fa fa-star text-warning s"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                               </div>
                            </div>
                            <div class="col-sm-2">
                                <h4 class="mb-0 ">$5.00</h4>
                                <small class="mt-0">per hour</small>
                            </div>
                        </div> 
                    </div>

                    <div class="card">
                        <div class="row rounded p-3 shadow-1 ">
                            <div class="col-sm-2 "> 
                               <img src={{ asset("assets/img/bruce-mars.jpg") }} class="tutor-avatar rounded-3">
                                
                            </div>
                            <div class="col-sm-8">
                                <span class="badge bg-gradient-info">Math</span>
                                <span class="badge bg-gradient-info">Science</span>
                                <h5>John Doe</h5>
                                <small>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste corrupti id saepe quibusdam dolore laudantium illo nam fugiat minus.</small>
                               <div>
                                    <span class="fa fa-star text-warning s"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                               </div>
                            </div>
                            <div class="col-sm-2">
                                <h4 class="mb-0 ">$5.00</h4>
                                <small class="mt-0">per hour</small>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-4"> 
                    <h4 >More tutor information</h4>
                    <img src={{ asset("assets/img/bruce-mars.jpg") }} class="tutor-banner rounded-3">
                    <h3 class="mt-2">John Doe</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio assumenda id reiciendis voluptate quidem non aliquid, illo a qui porro deserunt tempora fuga inventore earum soluta eius unde sed laboriosam!</p>
                    <p><strong>Language: </strong>English, French</p>
                    <p><strong>Subject: </strong>Math, Science</p>
                    <p><strong>Level: </strong>Expert</p>
                    <button type="button" class="btn bg-gradient-success rounded-pill mt-1">View Profile</button>
                </div>
            </div>
            </div>
            
            
        </div>
    </div>
@endsection