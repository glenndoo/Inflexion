@php
  $dt = request()->all();
  foreach($dt as $d => $value){
    $list[] = $d;
  }
  $details = explode('|',$list[0]);
  try{
    $fullName = str_replace('_',' ',$details[2]);
  $tutorId = $details[0];
  $studentId = $details[1];
  $email = $details[2];
  $check = true;
  }catch(Exception $e){
    $check = false;
  }
  
  
@endphp
<div class="fade-load"> <!-- put all content inside area, outside area will mess with side naviagtion-->
<script src="{{ asset('js/app.js') }}" defer></script>
   

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  	<script src="{{ asset('js/kinetic.min.js') }}"></script>
  	<script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>

	<!-- Credits -->
	<script src="{{ asset('js/credits.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/studentIndex.css') }}" rel="stylesheet">
    <link href="{{ asset('img/inflex_icon.png') }}" rel="icon">
    <link href="{{ asset('css/custom-style-template.css') }}" rel="stylesheet">
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
										
            <script src="{{ asset('js/schedule.js') }}"></script>
										<br /><br /><br /><div id='calendar'></div>


</div>
<!-- Time Slot Selection Modal -->
<div class="modal fade" id="timeSlotModal" tabindex="-1" role="dialog" aria-labelledby="timeSlotModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="timeSlotModalLabel">Select Time Slot for</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add your time slot selection controls here -->
        <!-- For example, a dropdown to select the time -->
        <div class="form-group">
      @if ($check)
      <div>Book class with <b>{{ $fullName }}</b></div>
        
      @endif

			<p class="timeSlot"></p>

          <label for="timeSlot">Select Time Slot:</label>
          <form method="POST" action="/bookSchedule">
            @csrf
          <select class="form-control" id="timeSlot" name="timeSlot">
            <!-- Add more options as needed -->
          </select>
        </div>
      </div>
      <div class="modal-footer">
        @if ($check)
        <input type="hidden" value="{{ $tutorId }}" name="tutorId" />
        <input type="hidden" value="{{ $studentId }}" name="studentId" />
        <input type="hidden" value="{{ $email }}" name="studentId" />
        <input type="submit" class="btn btn-secondary" value="Book Class" />
          
        @endif
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Class Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Content of your popup here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- Additional buttons or actions here -->
            </div>
        </div>
    </div>
</div>
