<?php
define('DBSERVER', 'localhost'); // Database server
define('DBUSERNAME', 'u210039736_admin'); // Database username
define('DBPASSWORD', 'WindCloudAusPTYLTD_MySQL_auth01!$'); // Database password
define('DBNAME', 'u210039736_user_accounts'); // Database name

/* connect to MySQL database */
$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

// Check connection
if ($db === false) {
    die("Error: connection error. " . mysqli_connect_error());
}
?>