<?php

//Variable Declaraton

    $name = $_POST['name'];
    $email = $_POST['email'];
    $to_email = "jjanzen.go@gmail.com";
    $subject = "New Quote";
    $phoneNumber = $_POST['phone_number'];
    $call = $_POST['call'];
    $message = "From: $email\n" . "Client Sender: $name \n" . "Client Number: $phoneNumber\n" . "Call Back?: $call\n" . "\n\n" . "Message: \n\n" .  $_POST['message'];
    $headers = 'WPC Cladding & Decking Website <no-reply@aggtrading.com>';


//EMAIL CONFIRMATION
// --- Subject of confirmation email. ---------

$conf_subject = 'Your recent enquiry';

// Who should the confirmation email be from?
$conf_sender = 'AGGTE WPC Cladding & Decking <no-reply@aggtecomposites.com>';
$msg = "Your email: $email\n" . "Your Number: $phoneNumber\n" . "\n" ."Hi" ." ". $_POST['name'] . ",\n\nThank you for your recent enquiry. A member of our team will respond to your message as soon as possible.";
mail( $_POST['email'], $conf_subject, $msg, 'From: ' . $conf_sender );

//----------Send to company email. ---------

    /* $send = @mail($to_email,$subject,$message,$headers); */
    if(@mail($to_email,$subject,$message,$headers)) {
        echo "<center><h1>Message was sent</h1><center>";
    }
    else{
        echo "<h1>Message not sent.</h1>";
    }
?>
