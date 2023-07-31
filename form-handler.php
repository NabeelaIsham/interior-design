<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Insert data into the database
    $sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    if ($conn->query($sql) === TRUE) {
        // Database insert successful
        // Send email
        $to = "nabeelaisham28@gmail.com";
        $subject = "New Contact Form Submission";
        $email_message = "Name: $name\n";
        $email_message .= "Email: $email\n";
        $email_message .= "Subject: $subject\n";
        $email_message .= "Message: $message\n";
        $headers = "From: $email";

        // Uncomment the line below to send the email
        // mail($to, $subject, $email_message, $headers);

        echo "Thank you for your message! We will get back to you soon.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
