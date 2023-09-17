
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
													color: 'blue'
												}
											]
										});
										calendar.render();
										});

										</script>
										<br /><br /><br /><div id='calendar'></div>


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