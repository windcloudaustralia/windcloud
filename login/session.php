<?php
// Start the session

session start();
// if the user is already logged in then redirect user to welcome page
if (isset ($_SESSION["userid"]) && $_SESSION["userid"] === true) {
    header ("location: /archive/index.html");
    exit;
}
?>