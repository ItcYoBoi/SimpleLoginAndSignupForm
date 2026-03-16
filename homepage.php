<?php
require_once "authentication_guard.php";
?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
		<title>Home page</title>
		<link rel = "stylesheet" href = "style.css">
	</head>
	<body>
		<div>
			<h1>Welcome, <?= htmlspecialchars($_SESSION["name"]); ?>!</h1>
			<button onclick = "window.location.href = 'change_username.php'">Change the user name</button>
			<button onclick = "window.location.href = 'change_password.php'">Change the password</button>
			<button onclick = "window.location.href = 'logout.php'">Log out</button>
		</div>
	</body>
</html>