<?php

use PHPMailer\PHPMailer\PHPMailer;

require './vendor/autoload.php';

class Mail
{
    public $to;
    public $subject;
    public $body;
    public $attachment;

    public function sendMail()
    {
        $mail = new PHPMailer;
        $mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';

        $mail->SMTPDebug = 0; // use 0 to disable debugging once working
        $mail->isSMTP();

        // Development SMTP settings
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Common fix for local environment SSL certificate issues
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // SMTP credentials
        $mail->Username = 'testingpageup@gmail.com';
        $mail->Password = 'joghbvzibjluivbn';
        $mail->From = 'testingpageup@gmail.com';
        $mail->FromName = 'Divine Recovery';

        // Add recipients
        foreach (explode(',', $this->to) as $to) {
            $mail->addAddress(trim($to));
        }

        // Attach file if set
        if (!empty($this->attachment)) {
            $mail->addAttachment($this->attachment);
        }

        $mail->isHTML(true);
        $mail->Subject = $this->subject;
        $mail->Body = $this->body;

        // Send mail and return error info or success flag
        if (!$mail->send()) {
            return $mail->ErrorInfo;
        } else {
            return 1;
        }
    }
}
