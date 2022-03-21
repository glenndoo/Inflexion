@extends('layouts/app')
@section('title', 'Inflexion')
@section('content')
    <!-- End Navbar -->
        <div class="container">
            <div class="rounded-3 p-4">

            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-lg-5">
                            <img class="w-100 rounded-3 shadow-lg" src={{ asset("assets/img/bruce-mars.jpg") }}>
                        </div>
                        <div class="col-lg-7">
                            <div class=" text-left">
                                <h5 class="font-weight-bolder mb-0">Joshua Jackson</h5>
                                <p class="text-uppercase text-sm font-weight-bold mb-2">BS English Literature</p>
                                <span class="badge bg-gradient-success p-1">Online</span>
                                <p class="mb-4">Success is not final, failure is not fatal: it is the courage to continue that counts...</p>
                                <small>Language Speak: English, French, Chinese, Japanese</small>
                                <small>Lesson: 7 Subjects</small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
   
      
      {{-- <div class="container-fluid">
          
      </div> --}}
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-9">
            <div class="col-12 mb-3">
                <div class="card card-plain bg-white h-100">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">About Me</h6>
                    </div>
                    <div class="card-body p-3">
                        <p class="text-sm">
                        Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
                        </p>
                    </div>
                </div>
             </div>
             <div class="col-12 mb-3">
                <div class="card card-plain bg-white h-100">
                    <div class="card-header pb-0 p-3">
                        <h6>Schedule</h6>
                    </div>
                    <div class="card-body p-3">
                        <p>Put the schedule here.</p> 
                    </div>
                </div>
             </div>
             <div class="col-12">
                <div class="card card-plain bg-white h-100">
                    <div class="card-header pb-0 p-3">
                        <h6>Subject</h6>
                    </div>
                    <div class="card-body p-3">
                        <p>Subject Available</p> 
                    </div>
                </div>
             </div>
        </div>
        <div class="col-3">
          <div class="row">
              <div class="col-12">
                  <div class="card card-plain bg-white h-100">
                    <div class="card-header pb-0 p-3">
                    <div class="row">
                        <h6 class="mb-0">Reviews</h6>
                    </div>
                    </div>
                    <div class="card-body p-3">
                    <p class="text-sm">
                        Great tutor. Highly Recommended.
                    </p>
                    </div>
                </div>
              </div>
          </div>
        </div>
    </div>
@endsection