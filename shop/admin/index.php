<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
 include 'theme/header.php';
include 'theme/sidebar.php';
include 'theme/breadcrumbs.php';
include 'theme/footer.php';

}
 ?>

