<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $service = $_POST["service"];
    $requestDetails = $_POST["requestDetails"];
    $userEmail = $_POST["userEmail"]; // Additional input for user's email

    // Send an email with the form data
    $to = "brocodewithme@gmail.com"; // Replace with your actual email address
    $subject = "New Form Submission";
    $message = "Full Name: $fullName\nEmail: $email\nService: $service\nRequest Details: $requestDetails\nUser's Email: $userEmail";
    mail($to, $subject, $message);

    // Redirect to a thank you page or back to the form page
    header("Location: thank_you.html");
    exit();
}
?>
