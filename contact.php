<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Customize the email subject and content as needed
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Replace with your own email address
  $recipient = "chetan.11pat@gmail.com";

  // Send the email
  if (mail($recipient, $subject, $body)) {
    // Email sent successfully
    echo "Thank you for contacting us!";
  } else {
    // Error occurred while sending the email
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>
