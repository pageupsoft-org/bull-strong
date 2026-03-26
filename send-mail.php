<?php
ob_start();
session_start();
require 'Mail.php';

// Check request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

// Common fields
$form_type = trim($_POST['form_type'] ?? 'contact');
$fullname  = trim($_POST['fullname'] ?? '');
$phone     = trim($_POST['phone'] ?? '');
$email     = trim($_POST['email'] ?? '');
$city      = trim($_POST['city'] ?? '');

// Common validation
if (empty($fullname) || empty($phone)) {
    $_SESSION['isSuccess'] = false;
    $_SESSION['msg'] = "Please fill all required fields.";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

$subject = "New Inquiry from Bull Strong Website";
$finalHtml = "<h3><b>Form Submission Details</b></h3><table><tbody>";
$finalHtml .= "<tr><td><b>Form Type:</b></td><td>" . strtoupper(htmlspecialchars($form_type)) . "</td></tr>";
$finalHtml .= "<tr><td><b>Full Name:</b></td><td>" . htmlspecialchars($fullname) . "</td></tr>";
$finalHtml .= "<tr><td><b>Phone:</b></td><td>" . htmlspecialchars($phone) . "</td></tr>";

if (!empty($email)) {
    $finalHtml .= "<tr><td><b>Email:</b></td><td>" . htmlspecialchars($email) . "</td></tr>";
}
if (!empty($city)) {
    $finalHtml .= "<tr><td><b>City/Location:</b></td><td>" . htmlspecialchars($city) . "</td></tr>";
}

// Form specific fields
if ($form_type === 'contact') {
    $subject = "Contact Inquiry - Bull Strong";
    $inquiry_type = trim($_POST['inquiry_type'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (!empty($inquiry_type)) {
        $finalHtml .= "<tr><td><b>Inquiry Type:</b></td><td>" . htmlspecialchars($inquiry_type) . "</td></tr>";
    }
    if (!empty($message)) {
        $finalHtml .= "<tr><td><b>Message:</b></td><td>" . nl2br(htmlspecialchars($message)) . "</td></tr>";
    }
} elseif ($form_type === 'distributor') {
    $subject = "Become a Distributor Inquiry - Bull Strong";
    $user_type = trim($_POST['user_type'] ?? '');
    $interest = trim($_POST['interest'] ?? '');

    if (!empty($user_type)) {
        $finalHtml .= "<tr><td><b>User Type:</b></td><td>" . htmlspecialchars($user_type) . "</td></tr>";
    }
    if (!empty($interest)) {
        $finalHtml .= "<tr><td><b>Interest:</b></td><td>" . htmlspecialchars($interest) . "</td></tr>";
    }
} elseif ($form_type === 'quote') {
    $subject = "Request a Quote - Bull Strong";
    $project_type = trim($_POST['project_type'] ?? '');
    $product_name = trim($_POST['product_name'] ?? '');
    $quantity = trim($_POST['quantity'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (!empty($project_type)) {
        $finalHtml .= "<tr><td><b>Project Type:</b></td><td>" . htmlspecialchars($project_type) . "</td></tr>";
    }
    if (!empty($product_name)) {
        $finalHtml .= "<tr><td><b>Product Name:</b></td><td>" . htmlspecialchars($product_name) . "</td></tr>";
    }
    if (!empty($quantity)) {
        $finalHtml .= "<tr><td><b>Quantity:</b></td><td>" . htmlspecialchars($quantity) . "</td></tr>";
    }
    if (!empty($message)) {
        $finalHtml .= "<tr><td><b>Message:</b></td><td>" . nl2br(htmlspecialchars($message)) . "</td></tr>";
    }
}

$finalHtml .= "</tbody></table>";

// Send email
$mail = new Mail();
$mail->to = 'shivani.gupta@pageupsoft.com'; // User's requested recipient
$mail->subject = $subject;
$mail->body = $finalHtml;

$result = $mail->sendMail();

// Response
if ($result == 1) {
    $_SESSION['isSuccess'] = true;
    $_SESSION['msg'] = "Your request has been submitted successfully.";
} else {
    $_SESSION['isSuccess'] = false;
    $_SESSION['msg'] = "Internal server error: Email sending failed. " . (is_string($result) ? $result : "");
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
