
<x-tutor-template data="detailedSchedule" />
<div class="area fade-load"> <!-- put all content inside area, outside area will mess with side naviagtion-->
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
										<script>

document.addEventListener('DOMContentLoaded', function() {
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
        url: '/classSchedules',
        method: 'GET',
        failure: function(xhr) {
          alert('Error fetching data: ' + xhr.status);
        },
        success: function(data) {
          // Handle successful data retrieval if needed
        },
        color: 'green'
      }
    ],
    selectable: true, // Enable time slot selection
    select: function(data) {
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
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>