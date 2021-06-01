<?php

require "config/constants.php";

$servername = "Localhost";
$username = "flwbmkwa_janzen";
$password = "0917379784009173797840";
$db = "flwbmkwa_aggte";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>