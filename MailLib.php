<?php
require_once("phpmailer/class.phpmailer.php");
class MailLib
{
    public static function send_mail($user_email, $user_name, $subject, $body)
    {
        $mail = new PHPMail();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->CharSet = "utf-8";

        $mail->Username = "service@eatgo.com";
        $mail->Password = "pmlalala";

        //$mail->AddAttachment("");
    
        $mail->Subject = $subject;
        $mail->From = "service@eatgo.com";
        $mail->FromName = "走吧 客服中心";
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
