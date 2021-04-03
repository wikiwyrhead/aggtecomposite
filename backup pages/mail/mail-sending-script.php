<?php
if(!empty($_POST["send"])) {
    require_once ('phpmailer/class.phpmailer.php');

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;

    $mail->Port = 587;

    $mail->Username = "YOUR SMTP USERNAME";
    $mail->Password = "YOUR SMTP PASSWORD";

    $mail->Mailer = "smtp";

    if (isset($_POST["userEmail"])) {
        $userEmail = $_POST["userEmail"];
    }
    if (isset($_POST["userName"])) {
        $userName = $_POST["userName"];
    }
    if (isset($_POST["subject"])) {
        $subject = $_POST["subject"];
    }
    if (isset($_POST["userMessage"])) {
        $message = $_POST["userMessage"];
    }
    $mail->SetFrom($userEmail, $userName);
    $mail->AddReplyTo($userEmail, $userName);
    $mail->AddAddress("YOUR RECIPIENT EMAIL"); // set recipient email address

    $mail->Subject = $subject;
    $mail->WordWrap = 80;
    $mail->MsgHTML($message);

    $mail->IsHTML(true);

    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';

    if (! empty($_FILES['attachment'])) {
        $count = count($_FILES['attachment']['name']);
        if ($count > 0) {
            // Attaching multiple files with the email
            for ($i = 0; $i < $count; $i ++) {
                if (! empty($_FILES["attachment"]["name"])) {

                    $tempFileName = $_FILES["attachment"]["tmp_name"][$i];
                    $fileName = $_FILES["attachment"]["name"][$i];
                    $mail->AddAttachment($tempFileName, $fileName);
                }
            }
        }
    }
    if (! $mail->Send()) {
        $message = "Problem in sending email";
        $type = "error";
    } else {
        $message = "Mail sent successfully";
        $type = "success";
    }
}
