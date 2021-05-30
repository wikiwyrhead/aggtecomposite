<?php

require "config/constants.php";

$servername = "localhost";
$username = "janzen";
$password = "09173797840JanzenGo";
$db = "aggtedeck_products";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>