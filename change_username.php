<?php
require_once "authentication_guard.php";
?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
		<title>Change the user name</title>
		<link rel = "stylesheet" href = "style.css">
	</head>
	<body>
		<div class = "form_box">
			<form action = "request.php" method = "post">
				<h2>Change the user name</h2>
				<input type = "text" name = "new_username" placeholder = "New user name">
				<button type = "submit" name = "change_username_button">Change the user name</button>
				<p><a href = "homepage.php">Go back to the home page?</a></p>
			</form>
		</div>
	</body>
</html>