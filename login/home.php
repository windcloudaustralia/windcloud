<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page:
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}

// The end of our PHP code is below. The rest is simple HTML/CSS
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="homePHP.css">
	<title>Profile Page - WindCloud</title>
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

<!-- Style is located in "homePHP.css" in this folder/directory -->

<body class="loggedin">
	<nav class="navtop">
		<div>
			<h1>Wind Cloud</h1>
			<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
		</div>
	</nav>
	<div class="content">
		<h2>Home Page</h2>
		<p>Welcome back, <?= $_SESSION['name'] ?>!</p> <!-- Some inline PHP to update PHP variables with HTML -->
	</div>
</body>

<script type="text/javascript" src="indexHTML.js"></script>
</html>