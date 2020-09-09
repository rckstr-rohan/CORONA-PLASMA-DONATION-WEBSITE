<?php
$servername = "localhost";
$username = "id10219500_first";
$password = "LODANIYATI@DREAM";
$dbname = "id10219500_registation";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>