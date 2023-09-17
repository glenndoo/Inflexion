
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
												right: 'dayGridMonth,timeGridWeek,timeGridDay'
											},
											eventSources: [
												{
													url: '/classSchedules',
													method: 'GET',
													failure: function(xhr) {
													alert('Error fetching data: ' + xhr.status);
													},
													success: function(data) {
													},
													color: 'green'
												}
											],
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
										});
										calendar.render();
										});

										</script>
										<br /><br /><br /><div id='calendar'></div>


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