<?php
require_once("phpmailer/class.phpmailer.php");
class mail
{
    public static function sendmail($user_email, $user_name, $subject, $body)
    {
        $mail = new PHPMail();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->CharSet = "utf-8";

        $mail->Username = "xxxxxx@xxxxxx";
        $mail->Password = "ur password";

        //$mail->AddAttachment("");
    
        $mail->Subject = $subject;
        $mail->From = "xxxxxx@xxxxxx";
        $mail->FromName = "xxxxxxxxx";
        $mail->Body = $body;
        $mail->IsHTML(true);
        $mail->AddAddress($user_email, $user_name);
        if (!$mail->Send()) {
            echo 'OOPs!! Fail to send email'.$mail->ErrorInfo;
            return $this->noview();
        } else {
        //
        }
    }
}
