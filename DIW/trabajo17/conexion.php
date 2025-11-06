<?php
$servername = "localhost";
$database = "trabajo_diw";
$username = "root";
$password = "mysql";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
//mysqli_close($conn);
?>