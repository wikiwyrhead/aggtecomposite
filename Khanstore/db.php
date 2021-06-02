<?php

require "config/constants.php";

$servername = 'localhost';
$username = 'root';
$password = '0917379784009173797840';
$db = 'khanstore';

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>