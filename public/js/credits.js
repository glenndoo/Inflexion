        function fetchData() {
            $.ajax({
                url: '/fetchCredits', // URL of the PHP script
                dataType: 'json',
                success: function(data) {
                    // Process and display the fetched data
                    // var output = '';
                    // for (var i = 0; i < data.length; i++) {
                    //     output += '<p>' + data[i] + '</p>';
                    // }
                    // $('#data-container').html(output);
					$('#credits').text(data);
                }
            });
        }

        // Fetch data every 5 seconds (5000 milliseconds)
        setInterval(fetchData, 5000);

        // Initial fetch when the page loads
        fetchData();
