<?php
include "includes/connection.php";
 session_start();

          $del = $_POST['del'];
            $query = 'SELECT current_date FROM tblusers';
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {
               $date = $row['current_date'];
              }
        $tat=time();
if($_GET["action"]=='adds') {
            foreach($_SESSION['cart'] as $id => $value) {

            //Save Transaction
     $query2 = "INSERT INTO tbltransac(transac_code,date,customer_id,product_code,qty,price,total)values('".$tat."','".$date."','".$_SESSION['cid']."','".$value['ids']."','".$value['quantity']."','".$value['price']."','".$value['quantity'] * $value['price']."')";
     mysqli_query($db,$query2)or die(mysqli_error($db));

     //Update Product
     $sql = "UPDATE tblproducts SET quantity = quantity - '".$value['quantity']."' WHERE product_code='".$value['ids']."'";
     mysqli_query($db,$sql)or die(mysqli_error($db));
  }
  //Save Transaction Detail
  $query3 = "INSERT INTO tbltransacdetail(transac_code,date,customer_id,deliveryfee,pay_met,totalprice,status,delivery_date)VALUES('".$tat."','".$date."','".$_SESSION['cid']."',150,'".$met."','".$_SESSION['mm']."'+150,'Pending','".$del."')";
 mysqli_query($db,$query3)or die(mysqli_error($db));



}

						 unset($_SESSION["cart"]);
             unset($_SESSION['mm']);
				?>

<script type="text/javascript">
			alert("Successfully added.");
			window.location = "order.php";
		</script>
