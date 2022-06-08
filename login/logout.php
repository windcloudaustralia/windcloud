<?php
session_start();
session_destroy(); // removes the login credentials from this session
// Redirect to the login page:
header('Location: /login');
?>