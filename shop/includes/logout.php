 <?php

session_start();
session_unset($_SESSION['cid']);
session_unset($_SESSION['cuser']);
session_unset($_SESSION['email']);
session_unset($_SESSION['fname']);
session_unset($_SESSION['lname']);
session_unset($_SESSION['address']);
session_unset($_SESSION['contact']);
session_unset($_SESSION['cart']);
header("Location: ../index.php");
?>
