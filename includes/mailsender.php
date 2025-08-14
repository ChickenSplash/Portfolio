<?php

require BASE_PATH . "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// 

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = $_ENV["ML_HOST"];
    $mail->SMTPAuth = true;
    $mail->Port = $_ENV["ML_PORT"];
    $mail->Username = $_ENV["ML_USER"];
    $mail->Password = $_ENV["ML_PASSWORD"];
    $mail->SMTPSecure = 'tls';

    // Recipients
    $mail->setFrom($_ENV["ML_SEND_FROM"], 'Portfolio Website');
    $mail->addAddress($_ENV["ML_SEND_TO"]);

    // Content
    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->Body    = "
        <div style='font-size: 18px; font-family: Arial, sans-serif;'>
            <p>{$_POST["forename"]} {$_POST["surname"]}</p>
            <p>{$_POST["email"]}</p>
            <p>{$_POST["message"]}</p>
        </div>
    ";

    $mail->send();
} catch (Exception $e) {
    $status["warning"] = "Warning: Message added to database but email failed to send";
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
