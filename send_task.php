<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $businessType = htmlspecialchars($_POST['businessType']);
    $taskDescription = htmlspecialchars($_POST['taskDescription']);

    $to = "yourtradiesupp@gmail.com";
    $subject = "New Task Submission from Your Tradie Support Website";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Business Type: $businessType\n";
    $message .= "Task Description:\n$taskDescription\n";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Thanks! Your task has been sent successfully.</p>";
    } else {
        echo "<p>Sorry, there was an error sending your task. Please try again later.</p>";
    }
}
?>
