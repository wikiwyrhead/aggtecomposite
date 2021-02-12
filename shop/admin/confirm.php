<?php
include('../includes/connection.php');

if (isset($_GET['cancel'])) {
	mysqli_query($db, "UPDATE tbltransacdetail SET status = 'Cancelled', remarks = 'Your order has been cancelled <br>
	 due to lack of communication <br> and incomplete informatio!' WHERE transac_code='".$_GET['cancel']."'")or die(mysqli_error($db));
}
elseif (isset($_GET['confirm'])) {
	mysqli_query($db, "UPDATE tbltransacdetail SET status = 'Confirmed', remarks = 'Your order has been confirmed!' WHERE transac_code='".$_GET['confirm']."'")or die(mysqli_error($db));
}
 ?>
 <script type="text/javascript">
			alert("Transaction Updated.");
			window.location = "detail.php";
		</script>
