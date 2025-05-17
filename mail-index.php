<?php 
if (isset($_POST['submit'])) {
    $to = "smile@toothandgumclinic.com"; // This is your email address
    $from = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL); // Validate sender's email address
    $name = htmlspecialchars($_POST['name']); // Sanitize user input
    $subject = htmlspecialchars($_POST['subject']); // Sanitize user input
    $mobile = htmlspecialchars($_POST['phone']); // Sanitize user input

    // Subject for the recipient and sender
    $subject2 = "Your form submission";

    // Message body
    $message = "Enquiry For: " . $subject . "\n\n" .
               "Name: " . $name . "\n\n" .
               "Mobile No: " . $mobile . "\n\n" .
               "Email: " . $from;

    $message2 = "Thank you for reaching out to us!\n\n" .
                "Here is a copy of your enquiry:\n\n" .
                "Enquiry For: " . $subject . "\n\n" .
                "Name: " . $name . "\n\n" .
                "Mobile No: " . $mobile . "\n\n" .
                "Email: " . $from . "\n\n" .
                "We will contact you shortly!";

    // Headers
    $headers = "From: " . $from;
    $headers2 = "From: " . $to;

    // Send the emails
    $mailToAdmin = mail($to, $subject, $message, $headers);
    $mailToSender = mail($from, $subject2, $message2, $headers2);

    // Check if emails were successfully sent
    if ($mailToAdmin && $mailToSender) {
        // Redirect to thank-you.php page
        header("Location: thank-you");
        exit;
    } else {
        // Handle email sending error
        echo "<script>
                alert('There was an error processing your request. Please try again later.');
                window.history.back();
              </script>";
    }
}
?>
