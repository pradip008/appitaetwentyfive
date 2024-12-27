jQuery(document).ready(function ($) {
    $('#contact-form').on('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        // Collect form data
        var formData = {
            action: 'send_email', // Action name for the AJAX handler
            username: $('input[name="username"]').val(),
            email: $('input[name="email"]').val(),
            message: $('textarea[name="message"]').val(),
        };

        // Send AJAX request
        $.ajax({
            url: ajaxurl, // AJAX handler URL (provided by WordPress)
            type: 'POST',
            data: formData,
            success: function (response) {
                alert(response.message); // Show success message
            },
            error: function (error) {
                alert('Something went wrong. Please try again.');
            },
        });
    });
});
