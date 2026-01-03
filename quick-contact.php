<?php
date_default_timezone_set('Asia/Kolkata');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');

$requestId   = 'REQ-' . date('Ymd') . '-' . rand(1000, 9999);
$submittedAt = date('d M Y, g:i A');

if (empty($name) || empty($email)) {
    header("Location: index.php?error=1");
    exit;
}

$mail = new PHPMailer(true);

try {
    // SMTP SETTINGS (GMAIL)
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'sahilmondal9879@gmail.com';   // 🔴 replace
    $mail->Password   = 'lpwb tkmh zovg bzbc';      // 🔴 replace
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // EMAIL SETTINGS
    $mail->setFrom('sahilmondal9879@gmail.com', 'RMCL Website');
    $mail->addAddress('contact@rmcl.co.in');
    // $mail->addAddress('j.jani@rmcl.co.in');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);

    $mail->Subject = 'RMCL: Enquiry Request';

    $requestId  = 'REQ-' . date('Ymd') . '-' . rand(1000, 9999);
    $submittedAt = date('g:i A');

    $mail->Body = <<<HTML
    <div style="font-family: Arial, sans-serif; background:#f4f6f8; padding:30px;">
      <div style="max-width:700px; margin:auto; background:#ffffff; border-radius:10px; overflow:hidden;">
    
        <div style="background:#0d6efd; color:#fff; padding:20px;">
          <h2 style="margin:0;">New Enquiry Request</h2>
          <p style="margin:5px 0 0;">Rajasthan Minerals & Chemicals</p>
        </div>
    
        <div style="padding:25px;">
    
          <table width="100%" cellpadding="10" cellspacing="0" style="border-collapse:collapse;">
            <tr>
              <td style="background:#f8f9fa; font-weight:bold;">Name</td>
              <td>{$name}</td>
            </tr>
            <tr>
              <td style="background:#f8f9fa; font-weight:bold;">Email</td>
              <td>{$email}</td>
            </tr>
            <tr>
              <td style="background:#f8f9fa; font-weight:bold;">Phone</td>
              <td>{$phone}</td>
            </tr>
          </table>
    
          <div style="margin-top:25px;">
            <h3 style="margin-bottom:10px;">Message</h3>
            <div style="background:#f8f9fa; padding:15px; border-radius:6px;">
              {$message}
            </div>
          </div>
    
          <div style="margin-top:30px; font-size:12px; color:#6c757d; text-align:center;">
            <p>Request ID: <strong>{$requestId}</strong></p>
            <p>Submitted on {$submittedAt}</p>
          </div>
    
        </div>
    
      </div>
    </div>
    HTML;

    $mail->send();
    header("Location: index.php");

} catch (Exception $e) {
    header("Location: index.php");
}
exit;
