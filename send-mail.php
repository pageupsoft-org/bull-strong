<?php
ob_start();
session_start();
require 'Mail.php'; // <-- Make sure Mail.php exists and works

// Google reCAPTCHA Secret Key
// $secretKey = '6Lc5UfQrAAAAABINNrjFN9c65o7qAwCUzQUn6yUX';

// Check request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}


// Common fields
$fullname   = trim($_POST['fullname'] ?? '');
$email   = trim($_POST['email'] ?? '');
$service = trim($_POST['service'] ?? '');

// Common validation
if (empty($fullname) || empty($email)) {
    $_SESSION['isSuccess'] = false;
    $_SESSION['msg'] = "Please fill all required fields.";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

$subject = "Divine Recovery Contact from";

// Validate name
if (!preg_match('/^[a-zA-Z ]+$/', $fullname)) {
    $_SESSION['isSuccess'] = false;
    $_SESSION['msg'] = "Please enter a valid name.";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

// Validate email server-side
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['isSuccess'] = false;
    $_SESSION['msg'] = "Please enter a valid email address.";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}


$finalHtml = "
    <table>
        <tbody>
        <tr><td colspan='2'><h3><b>Contact Details</b></h3></td></tr>
        <tr><td><b>Full Name:</b></td><td>" . htmlspecialchars($fullname) . "</td></tr>
        <tr><td><b>Email:</b></td><td>" . htmlspecialchars($email) . "</td></tr>
        <tr><td><b>Service:</b></td><td>" . nl2br(htmlspecialchars($service)) . "</td></tr>
        </tbody>
    </table>";


// Send email
$mail = new Mail();
$mail->to = 'shivi09gupta13@gmail.com';
$mail->subject = $subject;
$mail->body = $finalHtml;

$result = $mail->sendMail();
// Response
if ($result == 1) {
    $_SESSION['isSuccess'] = true;
    $_SESSION['msg'] = "Your request has been submitted successfully.";
} else {
    $_SESSION['isSuccess'] = false;
    $_SESSION['msg'] = "Internal server error: Email sending failed.";
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
