$(document).ready(function() {
    // Set up CSRF token for AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Handle click events on pagination links for deposits
    $(document).on('click', '.deposite-table .pagination a', function(event) {
        event.preventDefault(); // Prevent the default link behavior

        // Get the URL from the clicked link
        var url = $(this).attr('href');

        // Perform an AJAX request to fetch the page content
        $.ajax({
            url: url,
            type: 'GET',
            success: function(response) {
                // Replace the content of the deposit table and pagination with the new data
                $('.deposite-table').html($(response).find('.deposite-table').html());
                $('.deposite-table .pagination').html($(response).find('.deposite-table .pagination').html());
            },
            error: function(xhr) {
                console.error('An error occurred while fetching the data:', xhr.responseText);
            }
        });
    });

    // Handle click events on pagination links for withdrawals
    $(document).on('click', '.withdrawal-table .pagination a', function(event) {
        event.preventDefault(); // Prevent the default link behavior

        // Get the URL from the clicked link
        var url = $(this).attr('href');

        // Perform an AJAX request to fetch the page content
        $.ajax({
            url: url,
            type: 'GET',
            success: function(response) {
                // Replace the content of the withdrawal table and pagination with the new data
                $('.withdrawal-table').html($(response).find('.withdrawal-table').html());
                $('.withdrawal-table .pagination').html($(response).find('.withdrawal-table .pagination').html());
            },
            error: function(xhr) {
                console.error('An error occurred while fetching the data:', xhr.responseText);
            }
        });
    });
});
