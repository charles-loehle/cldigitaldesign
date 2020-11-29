<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = trim(filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING));
        $email = trim(filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL));
        $message = trim(filter_input(INPUT_POST,'message',FILTER_SANITIZE_SPECIAL_CHARS));
		
        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "clguitar1@gmail.com";

        // Set the email subject.
        $subject = "New contact from $name";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: " . $email . "\n\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers. It is important to use "From: noreply@yourdomain.com\n";
        $email_headers = "From: noreply@yourdomain.com\n";
						

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>