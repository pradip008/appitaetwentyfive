<?php

function send_email_handler() {
    // Get the form data
    $username = sanitize_text_field($_POST['username']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validate the data
    if (empty($username) || empty($email) || empty($message)) {
        wp_send_json_error(['message' => 'All Fields are Required. Please Fill all Fields']);
    }

    // Prepare email details
    $to = 'sales@appitae.com'; // Replace with your email address
    $subject = 'Contact Form Submission';
    $body = "Name: $username\nEmail: $email\nMessage:\n$message";
    $headers = ['Content-Type: text/plain; charset=UTF-8'];

    // Send the email
    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json_success(['message' => 'Thank you for contacting us. We will get back to you soon.']);
    } else {
        wp_send_json_error(['message' => 'Failed to send email. Please try again.']);
    }

    wp_die(); // Required to terminate the script properly
}

add_action('wp_ajax_send_email', 'send_email_handler');
add_action('wp_ajax_nopriv_send_email', 'send_email_handler');

