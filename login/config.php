<?php
define('DBSERVER', 'localhost'); // Database server
define('DBUSERNAME', 'admin'); // Database username
define('DBPASSWORD', 'xxxxxxxx'); // Database password
define('DBNAME', 'users'); // Database name

/* connect to MySQL database */
$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

// Check connection
if ($db === false) {
    die("Error: connection error. " . mysqli_connect_error());
}
?>