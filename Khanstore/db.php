<?php

require "config/constants.php";

$servername = 'localhost';
$username = 'flwbmkwa_root';
$password = 'FLg-oggtq3Oh';
$db = 'flwbmkwa_khanstore';

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>