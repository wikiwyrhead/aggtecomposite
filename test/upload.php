<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>E-mail with Attachment</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){

   // we'll begin by assigning the To address and message subject
   $to="me@me.com";
   $subject="E-mail with attachment";

   // get the sender's name and email address
   // we'll just plug them a variable to be used later
   $from = stripslashes($_POST['fromname'])."<".stripslashes($_POST['fromemail']).">";

   // generate a random string to be used as the boundary marker
   $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

   // now we'll build the message headers
   $headers = "From: $from\r\n" .
   "MIME-Version: 1.0\r\n" .
      "Content-Type: multipart/mixed;\r\n" .
      " boundary=\"{$mime_boundary}\"";

   // here, we'll start the message body.
   // this is the text that will be displayed
   // in the e-mail
   $message="This is an example";

   $message .= "Name:".$_POST["fromname"]."Message Posted:".$_POST["modlist"];

   // next, we'll build the invisible portion of the message body
   // note that we insert two dashes in front of the MIME boundary
   // when we use it
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
            " filename=\"{$fileatt_name}\"\n" .
            "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n";
      }
   }
   // here's our closing mime boundary that indicates the last of the message
   $message.="--{$mime_boundary}--\n";
   // now we just send the message
   if (@mail($to, $subject, $message, $headers))
      echo "Message Sent";
   else
      echo "Failed to send";
} else {
?>
<p>Send an e-mail with an attachment:</p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
   enctype="multipart/form-data" name="form1">
   <p>Your name: <input type="text" name="fromname"></p>
   <p>Your e-mail: <input type="text" name="fromemail"></p>
   <p>Mod List: <textarea  name="question" maxlength="1000" cols="25" rows="6" name="modlist"></textarea>
   <p>File: <input type="file" name="file1"></p>
   <p>File: <input type="file" name="file2"></p>
   <p>File: <input type="file" name="file3"></p>
   <p>File: <input type="file" name="file4"></p>
   <p>File: <input type="file" name="file5"></p>
   <p>File: <input type="file" name="file6"></p>
   <p>File: <input type="file" name="file7"></p>
   <p>File: <input type="file" name="file8"></p>
   <p><input type="submit" name="Submit" value="Submit"></p>
</form>
<?php } ?>
</body>
</html>
