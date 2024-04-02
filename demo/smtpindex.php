<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

$mail->SMTPDebug = 4;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Port = 465;

$mail->mailer = "smtp";

$mail->Username = 'jayasreevcm23@gmail.com';
$mail->Password = 'hfcztpteeycjgroi';

// Sender and recipient address
$mail->SetFrom('jayasreevcm23@gmail.com', 'jayasree');
$mail->addAddress('jayasreevcm23@gmail.com', 'jay');
$mail->addReplyTo('jayasreevcm23@gmail.com', 'sree');

// Setting the subject and body
$mail->IsHTML(true);
$mail->Subject = "Send email from localhost using PHP";

$mail->Body = 'hello guys';

if ($mail->send()) {
    echo "Email is sent successfully.";
} else {
    echo "Error in sending an email. Mailer Error: {$mail->ErrorInfo}";
}
?>