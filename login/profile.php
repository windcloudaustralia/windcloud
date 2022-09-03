<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'u210039736_root';
$DATABASE_PASS = 'WindAus21!';
$DATABASE_NAME = 'u210039736_phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link href="profilePHP.css" rel="stylesheet" type="text/css">
	<title>Profile Page - Wind Cloud</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Local weather, hyper-local, local, weather, sydney, Sydney, Australia, WindCloud, Wind Cloud">
	<meta name="author" content="Wind Cloud">
	<link rel="shortcut icon" type="image/ico" href="/imgs/favicon.ico" />
	<!-- Primary Meta Tags -->
	<meta name="title" content="Wind Cloud">
	<meta name="description" content="Welcome to Wind Cloud. We aim to provide hyper-local and accurate weather information, using our ever-expanding network of sensors. Visit the different pages on this website to view data at your desired location.">
	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://windcloud.com.au/">
	<meta property="og:title" content="Wind Cloud ">
	<meta property="og:description" content="Welcome to Wind Cloud. We aim to provide hyper-local and accurate weather information, using our ever-expanding network of sensors. Visit the different pages on this website to view data at your desired location.">
	<meta property="og:image" content="https://windcloud.com.au/imgs/banner.png">
	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://windcloud.com.au/">
	<meta property="twitter:title" content="Wind Cloud">
	<meta property="twitter:description" content="Welcome to Wind Cloud. We aim to provide hyper-local and accurate weather information, using our ever-expanding network of sensors. Visit the different pages on this website to view data at your desired location.">
	<meta property="twitter:image" content="https://windcloud.com.au/imgs/banner.png">

</head>

<body class="loggedin">
	<nav class="navtop">
		<div>
			<h1>Wind Cloud</h1>
			<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
		</div>
	</nav>

	<div class="content">
		<h2>Profile Page</h2>
		<div>
			<p>Your account details are below:</p>
			<table>
				<tr>
					<td>Username:</td>
					<td><?= $_SESSION['name'] ?></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><?= $password ?></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><?= $email ?></td>
				</tr>
			</table>
			<p>Return to home</p><a href="/">
				<div class="homeIcon"><i class="fas fa-home"></i>
			</a>
		</div>
	</div>
	</div>

</body>
<script type="text/javascript" src="indexHTML.js"></script>

</html>