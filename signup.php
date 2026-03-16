<?php
session_start();
$error = $_SESSION["error"] ?? "";
session_unset();

function show_error($error)
{
	if(!empty($error))
	{
		return "<p class = \"error_message\">$error</p>";
	}
	else
	{
		return "";
	}
}
?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
		<title>Sign up page</title>
		<link rel = "stylesheet" href = "style.css">
	</head>
	<body>
		<div class = "form_box">
			<form action = "request.php" method = "post">
				<h2>Sign up</h2>
				<?= show_error($error); ?>
				<input type = "text" name = "name" placeholder = "User name" required>
				<input type = "email" name = "email" placeholder = "Email" required>
				<input type = "password" name = "password" placeholder = "Password" required>
				<button type = "submit" name = "sign_up_button">Sign up</button>
				<p>Already have an account? <a href = "login.php">Log in!</a></p>
			</form>
		</div>
	</body>
</html>