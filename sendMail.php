<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$msg = '';

if (array_key_exists('userfile', $_FILES)) {
    $mail = new PHPMailer();

    $mail->IsSMTP();
    $mail->Mailer = "smtp";

    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "timy05popovici@gmail.com";
    $mail->Password   = "";

    $mail->IsHTML(true);
    $mail->AddAddress("timy2017popovici@gmail.com", "Timy");
    $mail->SetFrom("timy05popovici@gmail.com", "Timotei Popovici Lazarian");
    $mail->AddCC("timy2017popovici@gmail.com", "cc-recipient-name");
    $mail->Subject = "Provaa";

    $textarea = $_POST['option'];

    $mail->Body = "<html><h2><b>$textarea</b></h2></html>";

    for ($ct = 0, $ctMax = count($_FILES['userfile']['tmp_name']); $ct < $ctMax; $ct++) {
        //Extract an extension from the provided filename
        $ext = PHPMailer::mb_pathinfo($_FILES['userfile']['name'][$ct], PATHINFO_EXTENSION);
        //Define a safe location to move the uploaded file to, preserving the extension
        $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['userfile']['name'][$ct])) . '.' . $ext;
        $filename = $_FILES['userfile']['name'][$ct];
        if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {
            if (!$mail->addAttachment($uploadfile, $filename)) {
                $msg .= 'Failed to attach file ' . $filename;
            }
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    if (!$mail->send()) {
        $msg .= 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        $msg .= 'Arxius enviats! Moltes gràcies!';
    }
}
?>
