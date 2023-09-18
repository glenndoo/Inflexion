
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
										
            <script>

                document.addEventListener('DOMContentLoaded', function() {
                var updatedTimeSlot;
                var dateList = [];
                var itemsToRemove = [];
                var newTimeOptions = [];
                for (var hour = 0; hour < 24; hour++) {
                    for (var minute = 0; minute < 60; minute += 30) {
                        var formattedHour = hour.toString().padStart(2, '0');
                        var formattedMinute = minute.toString().padStart(2, '0');
                        var formattedSecond = minute.toString().padStart(2, '0');

                        var timeValue = formattedHour + ':' + formattedMinute + ':00';
                        var timeText = formattedHour + ':' + formattedMinute + ':00';
                        newTimeOptions.push({ value: timeValue, text: timeText });
                    }
                }
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth'
                    },
                    eventSources: [
                    {
                        url: '/fetchStudentSchedule?studentId=3&tutorId=2',
                        method: 'GET',
                        failure: function(xhr) {
                        alert('Error fetching data: ' + xhr.status);
                        },
                        success: function(data) {
                        // Handle successful data retrieval if needed
                        data.forEach(function(times){
                            itemsToRemove.push({value: times.time, text: times.time});
                            dateList.push({date: times.date})
                        });
                        // console.log(itemsToRemove);
                        
                        },
                        color: 'blue'
                    }
                    ],
                    selectable: true, // Enable time slot selection
                    select: function(data) {
                        // console.log("data is", dateList);
                        var holdDate = [];
                        var date = data.start;
                        var year = date.getFullYear();
                        var month = (date.getMonth() + 1).toString().padStart(2, '0'); // Month is zero-based
                        var day = date.getDate().toString().padStart(2, '0');
                        // Construct the formatted date string (yyyy-MM-dd)
                        var formattedDate = `${year}-${month}-${day}`;
                        $('#timeSlot').empty();
                        // dateList.forEach(function(date){
                        console.log(dateList.length);
                        for(let x = 0; x < dateList.length; x++){
                            if(dateList[x]['date'] === formattedDate){
                                console.log("match");
                                updatedTimeSlot = newTimeOptions.filter(function(item) {
                                return !itemsToRemove.some(function(removeItem) {
                                    return removeItem.value === item.value;
                                });
                                });
                                for (var i = 0; i < updatedTimeSlot.length; i++) {
                                    $('#timeSlot').append($('<option>', {
                                    value: updatedTimeSlot[i].value,
                                    text: updatedTimeSlot[i].text
                                    }));
                                }
                                break;
                            }else{
                                updatedTimeSlot = newTimeOptions.filter(function(item) {
                                return !itemsToRemove.some(function(removeItem) {
                                    return removeItem.value === item.value;
                                });
                                });
                                for (var i = 0; i < updatedTimeSlot.length; i++) {
                                    $('#timeSlot').append($('<option>', {
                                    value: updatedTimeSlot[i].value,
                                    text: updatedTimeSlot[i].text
                                    }));
                                }
                                break;
                            }
                        }    
                        
                                // console.log("Date format: ",date.date);
                                // 
                        
                        

                    // The 'info' object contains information about the selected time slot.
                    // You can access the start and end dates of the selection from 'info.start' and 'info.end'.

                    // Example: Display the selected time slot's start and end times
                    var modalContent = data.startStr;
                    $('#timeSlotModal').find('.modal-title').html(modalContent);

                    // Show the modal to select a time
                    $('#timeSlotModal').modal('show');
                    },
                    slotDuration: '00:30:00', // Set the duration of each time slot (e.g., 30 minutes)
                    slotLabelFormat: {
                    hour: '2-digit',
                    minute: '2-digit',
                    omitZeroMinute: false,
                    meridiem: 'short'
                    },
                    slotMinTime: '00:00:00', // Set the minimum time for slots (e.g., midnight)
                    slotMaxTime: '23:59:59', // Set the maximum time for slots (e.g., just before midnight)
                    dayCellDidMount: function(data) {
                    // Check if the date has already passed
                    var today = new Date();
                    if (data.date < today) {
                        // Get the day cell element
                        var dayCell = data.el;
                        dayCell.classList.add('past-date');
                        // Set the background color for past dates
                        dayCell.style.backgroundColor = '#D3D3D3'; // Change the color to red (customize as needed)
                        dayCell.classList.add('fc-day-disabled');
                    }
                    },
                    eventClick: function(data) {
                    var clickedDate = data.event.start;
                    var clickedName = data.event.title;

                    // Format the date as needed (you can use a library like moment.js)
                    var formattedDate = clickedDate.toLocaleString(); // Example format

                    // Display the formatted date in the modal
                    var modalContent = '<p>' + clickedName + '</p>';
                    modalContent += '<p>Date: ' + formattedDate + '</p>';
                    var today = new Date();
                    if (data.event.start < today) {
                        // Display additional text for past date events
                        var additionalText = 'This event is associated with a past date.';
                        // You can customize the additional text as needed
                        data.jsEvent.preventDefault(); // Prevent the default behavior (e.g., navigating to event URL)
                        modalContent += '<strong><p>Class Done</p></strong>';
                    }
                    // Set the modal content
                    $('#myModal').find('.modal-body').html(modalContent);

                    // Show the modal
                    $('#myModal').modal('show');
                    },
                    selectAllow: function(selectInfo) {
                    // Check if the selected date is in the past
                    var today = new Date();
                    return selectInfo.start >= today;
                    }
                });
                calendar.render();
                });
                </script>
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
			<p class="timeSlot"></p>
          <label for="timeSlot">Select Time Slot:</label>
          <select class="form-control" id="timeSlot">
            <option value="8:00">8:00 AM</option>
            <option value="9:00">9:00 AM</option>
            <!-- Add more options as needed -->
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
