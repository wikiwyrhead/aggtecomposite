
<style>
    .preloader{position:fixed; left:0px; top:0px; width:100%; height:100%; z-index:99999999; background-color:#ffffff; background-position:center center;	background-repeat:no-repeat; background-image:url(../images/preloader2.gif);}
</style>

<?php

//Variable Declaraton

    $name = $_POST['name'];
    $email = $_POST['email'];
    $to_email = "quote@aggtedeck.com";
    $subject = "New Quote";
    $phoneNumber = $_POST['phone_number'];
    $call = $_POST['call'];
    $message = "From: $email\n" . "Client Sender: $name \n" . "Client Number: $phoneNumber\n" . "Call Back?: $call\n" . "\n\n" . "Message: \n\n" .  $_POST['message'];
    $headers = 'New Quotation Request <admin@aggtedeck.com>';

//EMAIL CONFIRMATION
// --- Subject of confirmation email. ---------

$conf_subject = 'Your recent enquiry';

// Who should the confirmation email be from?
$conf_sender = 'AGGTE WPC Cladding & Decking <quote@aggtedeck.com>';
$msg = "Your email: $email\n" . "Your Number: $phoneNumber\n" . "\n" ."Hi" ." ". $_POST['name'] . ",\n\nThank you for your recent enquiry. A member of our team will respond to your message as soon as possible.";
mail( $_POST['email'], $conf_subject, $msg, 'From: ' . $conf_sender );


/* Attachement */

if (isset($_POST['submit'])) {
    $j = 0; //Variable for indexing uploaded image

 $target_path = "uploads/"; //Declaring Path for uploaded images
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {//loop to get individual element from the array

        $validextensions = array("jpeg", "jpg", "png", "pdf");  //Extensions which are allowed
        $ext = explode('.', basename($_FILES['file']['name'][$i]));//explode file name from dot(.)
        $file_extension = end($ext); //store extensions in the variable

  $target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];//set the target path with a new name of image
        $j = $j + 1;//increment the number of uploaded images according to the files in array

   if (($_FILES["file"]["size"][$i] < 250000) //Approx. 250000kb files can be uploaded.
                && in_array($file_extension, $validextensions)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {//if file moved to uploads folder
                echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
            } else {//if file was not moved.
                echo $j. ').<span id="error">please try again!.</span><br/><br/>';
            }
        } else {//if file size and file type was incorrect.
            echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
        }
    }
}

//----------Send to company email. ---------

    /* $send = @mail($to_email,$subject,$message,$headers); */
    if(@mail($to_email,$subject,$message,$headers)) {
        echo "<div class='preloader'></div><center><h1 style='position: relative;top: 250px;font-family:Arial;'>Your message was successfully sent!</h1></center>";
        echo "<script>
            window.setTimeout(function() {
            window.location.href='../index.php';
            }, 2000);
            </script>";
    }
    else{
        echo "<script>
            window.location.href='error.php';
            </script>";
}


?>
