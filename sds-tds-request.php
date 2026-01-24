<?php

// TIMEZONE (IMPORTANT)
date_default_timezone_set('Asia/Kolkata');

// PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: sds-tds.php');
    exit;
}

// Sanitize inputs
function clean($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Get form data with new field names
$company_name    = clean($_POST['company_name'] ?? '');
$designation     = clean($_POST['designation'] ?? '');
$name            = clean($_POST['name'] ?? '');
$phone           = clean($_POST['phone'] ?? '');
$email           = clean($_POST['email'] ?? '');
$city_state      = clean($_POST['city_state'] ?? '');
$product_name    = clean($_POST['product_name'] ?? '');
$document_type   = clean($_POST['document_type'] ?? '');
$request_for     = clean($_POST['request_for'] ?? '');
$additional_info = clean($_POST['additional_info'] ?? '');

// Required fields check - updated with new required fields
if (empty($name) || empty($phone) || empty($email) || empty($product_name) || empty($document_type) || empty($request_for)) {
    header('Location: sds&tds.php?error=1');
    exit;
}

// Request meta
$requestId   = 'REQ-' . date('Ymd') . '-' . rand(1000, 9999);
$submittedAt = date('d M Y, g:i A');

// SEND EMAIL TO RMCL
$mail = new PHPMailer(true);

try {
    // SMTP SETTINGS
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // change if needed
    $mail->SMTPAuth   = true;
    $mail->Username   = 'sahilmondal9879@gmail.com'; // CHANGE
    $mail->Password   = 'lpwb tkmh zovg bzbc';    // CHANGE
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // EMAIL HEADERS
    $mail->setFrom('no-reply@rmcl.co.in', 'RMCL Website');
    $mail->addAddress('contact@rmcl.co.in', 'RMCL SDS/TDS Team');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = "New SDS/TDS Request - {$product_name} ({$requestId})";

    // EMAIL BODY (ADMIN) - Updated with new fields
    $mail->Body = <<<HTML
<div style="font-family: Arial, sans-serif; color:#333; line-height:1.6;">
  <h2 style="color:#0d6efd;">New SDS / TDS Request</h2>

  <table cellpadding="10" cellspacing="0" width="100%" style="border-collapse:collapse;">
    <tr><td><strong>Request ID</strong></td><td>{$requestId}</td></tr>
    <tr><td><strong>Submitted At</strong></td><td>{$submittedAt}</td></tr>
    <tr><td><strong>Company Name</strong></td><td>{$company_name}</td></tr>
    <tr><td><strong>Designation/Department</strong></td><td>{$designation}</td></tr>
    <tr><td><strong>Name</strong></td><td>{$name}</td></tr>
    <tr><td><strong>Phone</strong></td><td>{$phone}</td></tr>
    <tr><td><strong>Email</strong></td><td>{$email}</td></tr>
    <tr><td><strong>City / State</strong></td><td>{$city_state}</td></tr>
    <tr><td><strong>Product Name</strong></td><td>{$product_name}</td></tr>
    <tr><td><strong>Document Type</strong></td><td>{$document_type}</td></tr>
    <tr><td><strong>Requesting For</strong></td><td>{$request_for}</td></tr>
  </table>

  <h3 style="margin-top:25px;">Additional Information</h3>
  <div style="background:#f8f9fa;padding:15px;border-radius:6px;">
    {$additional_info}
  </div>

  <p style="margin-top:30px;font-size:12px;color:#777;">
    This request was submitted through the RMCL SDS/TDS Request Form.
  </p>
</div>
HTML;

    $mail->send();

    // AUTO-REPLY TO USER
    $auto = new PHPMailer(true);
    $auto->isSMTP();
    $auto->Host       = 'smtp.gmail.com';
    $auto->SMTPAuth   = true;
    $auto->Username   = 'sahilmondal9879@gmail.com'; // SAME
    $auto->Password   = 'lpwb tkmh zovg bzbc';
    $auto->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $auto->Port       = 587;

    $auto->setFrom('contact@rmcl.co.in', 'Rajasthan Minerals & Chemicals');
    $auto->addAddress($email, $name);
    $auto->isHTML(true);

    $auto->Subject = "SDS/TDS Request Received - {$product_name}";

    $auto->Body = <<<HTML
<div style="font-family: Arial, sans-serif; color:#333; line-height:1.6;">
  <h2>Thank You for Your Request</h2>

  <p>Dear {$name},</p>

  <p>
    We have received your request for <strong>{$document_type}</strong>
    related to <strong>{$product_name}</strong>.
  </p>

  <p>
    Our team will review your request and respond within
    <strong>24–48 business hours</strong>.
  </p>

  <p>
    <strong>Request ID:</strong> {$requestId}<br>
    <strong>Submitted At:</strong> {$submittedAt}
  </p>

  <p>
    If you have any urgent requirements, feel free to contact us directly.
  </p>

  <p>
    Regards,<br>
    <strong>Rajasthan Minerals & Chemicals</strong><br>
    📞 +91-2697-222337<br>
    ✉ contact@rmcl.co.in
  </p>
</div>
HTML;

    $auto->send();

    // SUCCESS - Fixed redirect URL
    header('Location: sds&tds.php?success=1');
    exit;

} catch (Exception $e) {
    // ERROR - Fixed redirect URL
    header('Location: sds&tds.php?error=1&message=' . urlencode($e->getMessage()));
    exit;
}