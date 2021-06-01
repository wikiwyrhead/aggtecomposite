<?php

require "config/constants.php";

$servername = "localhost";
$username = "flwbmkwa_user1";
$password = ")pDhvm(T}O_x";
$db = "flwbmkwa_aggteprod";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Succesfuly";

?>