<?php
// start the session
session_start();

// check if the user is not logged in, then redirect the user to the login page
if (!isset($_SESSION["userid"]) || $_SESSION["userid"] !== true) {
    exit;
}

?>

<!DOCTYPE html>
<html lang="eng">
    <head> 
        <meta charset="UTF-8">
        <title>Welcome <?php echo $_SESSION["name"]; ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Hello, <strong><?php echo $_SESSION["name"]; ?></strong>. Welcome to Wind Cloud</h1>
                </div>
                <p>
                    <a href="logout.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Logout</a>
                </p>
                </div>
            </div>
        </div>
    </body>
</html>


