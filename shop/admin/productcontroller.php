<?php
    // The same dapat ang input name sa Add kag Update.....WHAT THE MEN!!!
     include('../includes/connection.php');
     if (isset($_POST['submit'])) {

		if ($_GET['action'] == 'add') {
		$product = $_POST['product'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		$markup = $_POST['markup'];
		$category = $_POST['category'];
		$supplier = $_POST['supplier'];
			$result = mysqli_query($db, "SELECT * FROM tblproducts WHERE product_name = '".$product."'");
			$checkprod = mysqli_num_rows($result);
			if ($checkprod > 0) {
              header("Location: productadd.php?required=producttaken");
            }elseif ($product == "") {
              header("Location: productadd.php?required=product");
            }elseif ($quantity == "" || $quantity < 0 ) {
              header("Location: productadd.php?required=quantity");
            }elseif ($price == "" || $price < 0 ) {
              header("Location: productadd.php?required=price");
            }elseif ($markup == "" || $markup < 0 ) {
              header("Location: productadd.php?required=markup");
            }elseif ($category == "") {
              header("Location: productadd.php?required=category");
            }elseif ($supplier == "") {
              header("Location: productadd.php?required=supplier");
            }else{
            	$code = $_POST['code'];
				$date = $_POST['date'];
				$user = $_POST['user'];
            	$query = "INSERT INTO `tblproducts`(`product_name`, `quantity`, `price`, `profit`, `date_in`, `category_id`, `supplier_id`, `user_id`, `product_code`, `status`)
				VALUES ('".$product."','".$quantity."','".$price."','".$markup."','".$date."','".$category."','".$supplier."','".$user."','".$code."','Available')";
				mysqli_query($db,$query)or die (mysqli_error($db));
				$sql = "UPDATE `tblautonumber` SET `end`=`end`+`increment` WHERE `desc` = 'PROD'";
				mysqli_query($db,$sql)or die (mysqli_error($db));
				?>
				<script type="text/javascript">
				alert("Successfully added.");
				window.location = "product.php";
				</script>
				<?php
		}
		}if ($_GET['action'] == 'update') {
		$product = $_POST['product'];
		$price = $_POST['price'];
		$markup = $_POST['markup'];
		$category = $_POST['category'];
		$supplier = $_POST['supplier'];
			$id = $_POST['id'];
			if ($product == "") {
              header("Location: productupdate.php?required=product&id=".$id."");
            }elseif ($price == "" || $price < 0 ) {
              header("Location: productupdate.php?required=price&id=".$id."");
            }elseif ($markup == "" || $markup < 0 ) {
              header("Location: productupdate.php?required=markup&id=".$id."");
            }elseif ($category == "") {
              header("Location: productupdate.php?required=category&id=".$id."");
            }elseif ($supplier == "") {
              header("Location: productupdate.php?required=supplier&id=".$id."");
            }else{
            	$query = 'UPDATE tblproducts set product_name ="'.$product.'", price="'.$price.'",
					profit ="'.$markup.'",`category_id`="'.$category.'",`supplier_id`="'.$supplier.'" WHERE product_code ="'.$id.'"';
				mysqli_query($db, $query) or die(mysqli_error($db));

					?>
				<script type="text/javascript">
				alert("Update successfully.");
				window.location = "product.php";
				</script>
				<?php
		}
		}if ($_GET['action'] == 'updatequantity') {
		$quantity = $_POST['quantity'];
			$id = $_POST['id'];
			if (empty($quantity) || $quantity < 0) {
				header("Location: updatequantity.php?required=quant&id=".$id."");
			}else{
				$sql = 'UPDATE tblproducts set quantity = quantity + "'.$quantity.'" WHERE product_code ="'.$id.'"';
				mysqli_query($db, $sql) or die(mysqli_error($db));
				?>
				<script type="text/javascript">
				alert("Update successfully.");
				window.location = "product.php";
				</script>
				<?php
			}
		}
		}
				?>
