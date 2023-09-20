const urlParams = new URLSearchParams(window.location.search);
                params = urlParams.toString();
                var fetchUrl = "";
                var tutorName = "";
                if(params.includes("sId")){
                    fetchUrl = '/fetchStudentSchedule?'+params;
                }else{
                    params = params.replace("=",'');
                    params = params.split("|");
                    const tutorId = params[1];
                    const studentId = params[0];
                    fetchUrl = '/fetchStudentSchedule?studentId='+studentId+"&tutorId="+tutorId
                }
                // Replace &amp; with &
                

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
                        url: fetchUrl,
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
                    eventContent: function(info) {
                        console.log(info);
                        if(info.event.title == "Scheduled Class"){
                            var titleEl = document.createElement('div');
                            titleEl.classList.add('fc-title');
                            titleEl.style.color = 'green'; // Set the font color here (e.g., red)

                            var titleText = document.createElement('span');
                            titleText.textContent = info.timeText + "m " + info.event.title;

                            titleEl.appendChild(titleText);
                            return { domNodes: [titleEl] };

                        }else if(info.event.title == "Class is Done"){
                            var titleEl = document.createElement('div');
                            titleEl.classList.add('fc-title');
                            titleEl.style.color = 'gray'; // Set the font color here (e.g., red)

                            var titleText = document.createElement('span');
                            titleText.textContent = info.timeText + "m " + info.event.title;

                            titleEl.appendChild(titleText);
                            return { domNodes: [titleEl] };

                        }else if(info.event.title == "Class Pending Approval"){
                            var titleEl = document.createElement('div');
                            titleEl.classList.add('fc-title');
                            titleEl.style.color = 'blue'; // Set the font color here (e.g., red)

                            var titleText = document.createElement('span');
                            titleText.textContent = info.timeText + "m " + info.event.title;

                            titleEl.appendChild(titleText);
                            return { domNodes: [titleEl] };

                        }
                        
                    },
                    selectable: params.includes("sId") ? false : true, // Enable time slot selection
                    select: function(data) {
                        // console.log("data is", dateList);
                        var date = data.start;
                        var year = date.getFullYear();
                        var month = (date.getMonth() + 1).toString().padStart(2, '0'); // Month is zero-based
                        var day = date.getDate().toString().padStart(2, '0');
                        // Construct the formatted date string (yyyy-MM-dd)
                        var formattedDate = `${year}-${month}-${day}`;
                        $('#timeSlot').empty();
                        // dateList.forEach(function(date){
                            if(dateList.length === 0){
                                for (var i = 0; i < newTimeOptions.length; i++) {
                                    $('#timeSlot').append($('<option>', {
                                    value: formattedDate + " " + newTimeOptions[i].value,
                                    text: newTimeOptions[i].text
                                    }));
                                }
                            }else{
                                for(let x = 0; x < dateList.length; x++){
                                    if(dateList[x]['date'] === formattedDate){
                                        updatedTimeSlot = newTimeOptions.filter(function(item) {
                                        return !itemsToRemove.some(function(removeItem) {
                                            return removeItem.value === item.value;
                                        });
                                        });
                                        for (var i = 0; i < updatedTimeSlot.length; i++) {
                                            $('#timeSlot').append($('<option>', {
                                                value: formattedDate + " " + newTimeOptions[i].value,
                                            text: updatedTimeSlot[i].text
                                            }));
                                        }
                                        break;
                                    }else{
                                        for (var i = 0; i < newTimeOptions.length; i++) {
                                            $('#timeSlot').append($('<option>', {
                                                value: formattedDate + " " + newTimeOptions[i].value,
                                            text: newTimeOptions[i].text
                                            }));
                                        }
                                    }
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
                    // console.log("event mount ",data);
                    var today = new Date();
                    today.setDate(today.getDate() + 2);
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
                    var tutorName = data.event._def.extendedProps.tutorName;

                    // Format the date as needed (you can use a library like moment.js)
                    var formattedDate = clickedDate.toLocaleString(); // Example format

                    // Display the formatted date in the modal
                    var modalContent = '<p>' + clickedName + '</p>';
                    modalContent += '<p>Date: ' + formattedDate + '</p>';
                    if(params.includes("sId")){
                        modalContent += '<p>Tutor Name: ' + tutorName + "</p>";
                    }
                    var today = new Date();
                    today.setDate(today.getDate() + 2);
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
                    today.setDate(today.getDate() + 2);

                    return selectInfo.start >= today;
                    }
                });
                calendar.render();
                });