<?php
    $name = $_POST['name'];
    $visitor_number = $_POST['phonenumber'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    $email_from =  "jjanzen.go@gmail.com";
	$email_subject = "New Quotation";
	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".
    $to = "jjanzen.go@gmail.com";
    $headers =  'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: Your name <info@address.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    mail($to, $email_subject, $email_body, $headers);
    function IsInjected($str){
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
    $inject = join('|', $injections);
    $inject = "/$inject/i";

    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

    if(IsInjected($visitor_email)) {
    echo "Bad email value!";
    exit;
    }
?>
