<?php
       // The same dapat ang input name sa Add kag Update.....WHAT THE MEN!
       include('../includes/connection.php');

       		if (isset($_POST['submit'])) {
						$sm = $_POST['supplier'];
					    $contact = $_POST['contact'];
					    $email = $_POST['email'];
						$address = $_POST['address'];

			if ($_GET['action'] == 'add') {
			if ($sm == "") {
              header("Location: supplieradd.php?required=name");
            }elseif ($contact == "" || $contact < 0 ) {
              header("Location: supplieradd.php?required=contact");
            }elseif ($email == "" ) {
              header("Location: supplieradd.php?required=email");
            }elseif ($address == "") {
              header("Location: supplieradd.php?required=address");
            }else{
				$query = "INSERT INTO tblsupplier(supplier_id,supplier_name,contact,email,address)
				VALUES ('Null','".$sm."','".$contact."','".$email."','".$address."')";
				mysqli_query($db,$query)or die (mysqli_error($db));
				?>
				<script type="text/javascript">
				alert("Successfully added.");
				window.location = "supplier.php";
				</script>
				<?php
			}
			}
			if ($_GET['action'] == 'update') {
            	$id = $_POST['id'];
			if ($sm == "") {
              header("Location: supplierupdate.php?required=name&id=".$id."");
            }elseif ($contact == "" || $contact < 0 ) {
              header("Location: supplierupdate.php?required=contact&id=".$id."");
            }elseif ($email == "" ) {
              header("Location: supplierupdate.php?required=email&id=".$id."");
            }elseif ($address == "") {
              header("Location: supplierupdate.php?required=address&id=".$id."");
            }else{
				$query = 'UPDATE tblsupplier set supplier_name ="'.$sm.'",contact ='.$contact.', email="'.$email.'",address ="'.$address.'" WHERE supplier_id ="'.$id.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
				?>
				<script type="text/javascript">
				alert("Update Successful.");
				window.location = "supplier.php";
				</script>
				<?php
			}
			}
		}
			?>

