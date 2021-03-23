<style>
    .preloader{position:fixed; left:0px; top:0px; width:100%; height:100%; z-index:99999999; background-color:#ffffff; background-position:center center;	background-repeat:no-repeat; background-image:url(../images/preloader2.gif);}
</style>

<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){

//Variable Declaraton

    $name = $_POST['name'];
    $email = $_POST['email'];
    $to_email = "quote@aggtedeck.com";
    $subject = "New Quote";
    $phoneNumber = $_POST['phone_number'];
    $call = $_POST['call'];
    $message = "From: $email\n" . "Client Sender: $name \n" . "Client Number: $phoneNumber\n" . "Call Back?: $call\n" . "\n\n" . "Message: \n\n" .  $_POST['message'];
    $headers = 'New Quotation Request <admin@aggtedeck.com>';



   // get the sender's name and email address
   // we'll just plug them a variable to be used later
   $from = stripslashes($_POST['name'])."<".stripslashes($_POST['email']).">";


   // here, we'll start the message body.
   // this is the text that will be displayed
   // in the e-mail
   $message = "From: $email\n" . "Client Sender: $name \n" . "Client Number: $phoneNumber\n" . "Call Back?: $call\n" . "\n\n" . "Message: \n\n" .  $_POST['message'];

   $message .= "Name:".$_POST["name"]."Message Posted:".$_POST["message"];

   // next, we'll build the invisible portion of the message body
   // note that we insert two dashes in front of the MIME boundary
   // when we use it

    $uid = md5(time()); $mime_boundary = "==Multipart_Boundary_x{$uid}x";
    $message = "This is a multi-part message in MIME format.\n\n" .
      "--{$mime_boundary}\n" .
      "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
      "Content-Transfer-Encoding: 7bit\n\n" .
   $message . "\n\n";


   // now we'll process our uploaded files
   foreach($_FILES as $userfile){
      // store the file information to variables for easier access
      $tmp_name = $userfile['tmp_name'];
      $type = $userfile['type'];
      $name = $userfile['name'];
      $size = $userfile['size'];

      // if the upload succeded, the file will exist
      if (file_exists($tmp_name)){

         // check to make sure that it is an uploaded file and not a system file
         if(is_uploaded_file($tmp_name)){

            // open the file for a binary read
            $file = fopen($tmp_name,'rb');

            // read the file content into a variable
            $data = fread($file,filesize($tmp_name));

            // close the file
            fclose($file);

            // now we encode it and split it into acceptable length lines
            $data = chunk_split(base64_encode($data));
         }

         // now we'll insert a boundary to indicate we're starting the attachment
         // we have to specify the content type, file name, and disposition as
         // an attachment, then add the file content.
         // NOTE: we don't set another boundary to indicate that the end of the
         // file has been reached here. we only want one boundary between each file
         // we'll add the final one after the loop finishes.
         $message .= "--{$mime_boundary}\n" .
            "Content-Type: {$type};\n" .
            " name=\"{$name}\"\n" .
            "Content-Disposition: attachment;\n" .
            " filename=\"{$file_name}\"\n" .
            "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n";
      }
   // here's our closing mime boundary that indicates the last of the message
   $message.="--{$mime_boundary}--\n";
    $message .= "--".$uid."--";

   // now we just send the message
   if (@mail($to_email, $subject, $message, $headers))
      echo "Message Sent";
   else
      echo "Failed to send";
   }
}
?>
