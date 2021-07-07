<?php include 'cart_name.php'; ?>
<style>
    .preloader{position:fixed; left:0px; top:0px; width:100%; height:100%; z-index:99999999; background-color:#ffffff; background-position:center center;	background-repeat:no-repeat; background-image:url(../images/preloader.gif);}
</style>
<!-- Mail Email -->
<?php 
    if(isset($_POST['submit'])){
   
    //array initializations
    $checkArray = array();
    $claddingArea = $_POST['claddingArea'];
    $deckingArea = $_POST['deckingArea'];
    $claddingPerim = $_POST['claddingPerim'];
    $deckingPerim = $_POST['deckingPerim'];
    $mainMessage = $_POST['rq-message'];
    $to = "webdev@aggtedeck.com";
    $clientName = $_POST['clientName'];
    $phone = $_POST['phone_number'];
    $subject = "New Product Quotation from $clientName!"; 
    $from = $_POST['email']; 
    $radioSelection = $_POST['call'];
    $checkValue = $_POST['check'];
    $countKey = 0;
    foreach($checkValue as $key=>$value){
        $checkArray[$countKey] = $value;
        $countKey++;
    }
    $message = "From: $from\n" . "Client Name: $clientName \n" . "Client Contact Number: $phone \n" . "Call: $radioSelection \n";
    $message .= "\nInstallation type(s): \n";
    while ($countKey != 0) {
        $countKey--;
        if($checkArray[$countKey] == "Decking"){
            $message .= $checkArray[$countKey].": (Decking Total Area: $deckingArea"."sqm) (Decking Total Perimeter: $deckingPerim"."m)\n";
        }
        else if($checkArray[$countKey] == "Cladding"){
            $message .= $checkArray[$countKey].": (Cladding Total Area: $claddingArea"."sqm) (Cladding Total Perimeter: $claddingPerim"."m)\n";
        }
        else {
            $message .= $checkArray[$countKey]."\n";
        }
    }
    $message .= "\nMaterials for Quotation: \n";
    $cartArr = 0;
    $cartNum = count($_SESSION['cart']);
    while($cartNum != 0){
        $cartNum--;
        $message .= $items[$cartArr] . "\n";
    $cartArr++;
    }
    $message .= "\nMessage: $mainMessage \n";
}
?>

<!-- Email To Sender -->
<?php 
$senderEmail = $_POST["email"];
$confSubject = "AGGTEDeck: Your recent inquiry";
$confHeader = "From: AGGTEDeck WPC Cladding & Decking <no-reply@aggtedeck.com>";
$sendMessage = "Your email: $senderEmail \n";
$sendMessage .= "Hi $clientName! \nThank you for your inquiries. A member of our team will respond to your message as soon as possible.\n";
$sendMessage .= "\nMaterials for Quotation: \n";
$cartArrC = 0;
    $cartNumC = count($_SESSION['cart']);
    while($cartNumC != 0){
        $cartNumC--;
        $sendMessage .= $items[$cartArrC] . "\n";
    $cartArrC++;
}
$sendMessage .= "\nSincerly yours, \n -AGGTEDeck WPC Cladding & Decking Team\n";
mail($senderEmail, $confSubject, $sendMessage, $confHeader);
?>

<!-- Attachment -->

<?php
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
if(isset($_FILES) && (bool) $_FILES) {
	$allowedExtensions = array("pdf","jpeg","jpg","png");
	$files = array();
	foreach($_FILES as $name=>$file) {
		$file_name = $file['name']; 
		$temp_name = $file['tmp_name'];
		$file_type = $file['type'];
		$path_parts = pathinfo($file_name);
		$ext = $path_parts['extension'];
		if(!in_array($ext,$allowedExtensions)) {
			die("File $file_name has the extensions $ext which is not allowed");
		}
		array_push($files,$file);
	}
	$headers = "From: $from";
	// boundary 
	$semi_rand = md5(time()); 
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
	 
	// headers for attachment 
	$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
	// multipart boundary 
	$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
	$message .= "--{$mime_boundary}\n";
	// preparing attachments
	for($x=0;$x<count($files);$x++){
		$file = fopen($files[$x]['tmp_name'],"rb");
		$data = fread($file,filesize($files[$x]['tmp_name']));
		fclose($file);
		$data = chunk_split(base64_encode($data));
		$name = $files[$x]['name'];
		$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" . 
		"Content-Disposition: attachment;\n" . " filename=\"$name\"\n" . 
		"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
		$message .= "--{$mime_boundary}\n";
	}
	// send
	$ok = mail($to, $subject, $message, $headers); 
	if ($ok) {
        echo "<div class='preloader'></div><center><h1 style='position: relative;top: 250px;font-family:Arial;'>Your message was successfully sent!</h1></center>";
        session_start();
        session_destroy();
        echo "<script>
            window.setTimeout(function() {
            window.location.href='/products/';
            }, 2000);
            </script>";
	} else { 
		echo "<script>
            window.setTimeout(function() {
            window.location.href='../products/errorcon.php';
            }, 2000);
            </script>";
	} 
}	
?>
<?php include 'includes/scripts.php'; ?>
<script>
var total = 0;
function getDetails(){
	$.ajax({
		type: 'POST',
		url: 'cart_name.php',
		dataType: 'json',
		success: function(response){
			$('#tbody').html(response);
			getCart();
		}
	});
}
</script>