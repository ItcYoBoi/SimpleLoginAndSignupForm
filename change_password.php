<?php
require_once "authentication_guard.php";
?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
		<title>Change the password</title>
		<link rel = "stylesheet" href = "style.css">
	</head>
	<body>
		<div class = "form_box">
			<form action = "request.php" method = "post">
				<h2>Change the password</h2>
				<input type = "password" name = "new_password" placeholder = "New password">
				<button type = "submit" name = "change_password_button">Change the password</button>
				<p><a href = "homepage.php">Go back to the home page?</a></p>
			</form>
		</div>
	</body>
</html>