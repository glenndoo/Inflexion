function fetchData() {
    $.ajax({
        url: '/fetchStudentSchedule?studentId=3&tutorId=2', // URL of the PHP script
        dataType: 'json',
        success: function(data) {
            // Process and display the fetched data
            // var output = '';
            // for (var i = 0; i < data.length; i++) {
            //     output += '<p>' + data[i] + '</p>';
            // }
            // $('#data-container').html(output);
            $('#schedule').text(data);
        }
    });
}

// Fetch data every 5 seconds (5000 milliseconds)
setInterval(fetchData, 5000);

// Initial fetch when the page loads
fetchData();
