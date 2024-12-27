jQuery(document).ready(function ($) {
    $('#contact-form').on('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        // Collect form data
        var formData = {
            action: 'send_email',
            username: $('input[name="username"]').val(),
            email: $('input[name="email"]').val(),
            message: $('textarea[name="message"]').val(),
        };

        // Send AJAX request
        $.ajax({
            url: ajaxurl, // The URL for the AJAX handler
            type: 'POST',
            data: formData,
            success: function (response) {
                // Check if the response was successful
               // console.log(response);
               $('#response-message').removeClass('error success').html('');

                if (response.success) {
                    // Success message
                    $('#response-message')
                        .addClass('success')
					    .removeClass('error-massage')
                        .html(response.data.message)
                        .show(); // Show the response message
                } else {
                    // Error message
                    $('#response-message')
                        .addClass('error-massage')
                        .html(response.data.message)
                        .show(); // Show the response message
                }
            },
            error: function (error) {
                console.error('Error:', error); // Log the error
                $('#response-message')
                    .addClass('error-massage')
                    .html('Something went wrong. Please try again.')
                    .show(); // Show error message
            },
        });
    });
});
