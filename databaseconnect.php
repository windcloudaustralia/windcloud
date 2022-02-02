<?php
$servername = "localhost";
$database = "user_accounts";
$username = "admin";
$password = "qX*O:=aZ^5m";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>