<?php

require "config/constants.php";

$servername = "localhost";
$username = "flwbmkwa_janzen";
$password = "P@ssw0rd#####";
$db = "flwbmkwa_aggte";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>