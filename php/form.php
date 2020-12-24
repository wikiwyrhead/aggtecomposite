<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $to = "jjanzen.go@gmail.com";
    $subject = "New Quote";
    $phoneNumber = $_POST['phone_number'];
    $message = $_POST['message'];
    $headers = "From: $email" . "\r\n" .
                "CC: somebodyelse@example.com";
    $send = @mail($to,$subject,$message,$headers);
    if(@mail($to,$subject,$message,$headers)) {
        echo "Message was sent";
    }
    else{
        echo "<h1><marquee>Message not sent.</marquee><h1>";
    }
?>
