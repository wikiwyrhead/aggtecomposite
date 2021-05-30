<?php

require "config/constants.php";

$servername = "localhost";
$username = "flwbmkwa_janzen";
$password = "09173797840JanzenGo";
$db = "flwbmkwa_aggtedeck_products";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>