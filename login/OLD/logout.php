<?php
// start the session
session_start();

// destroy the session 
if (session_destroy()) {
    // redirect the user to the login page
    header("location: login.php");
    exit;
}

?>
