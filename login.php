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
		<title>Log in page</title>
		<link rel = "stylesheet" href = "style.css">
	</head>
	<body>
		<div class = "form_box">
			<form action = "request.php" method = "post">
				<h2>Log in</h2>
				<?= show_error($error); ?>
				<input type = "email" name = "email" placeholder = "Email" required>
				<input type = "password" name = "password" placeholder = "Password" required>
				<button type = "submit" name = "log_in_button">Log in</button>
				<p>Don't have an account yet? <a href = "signup.php">Sign up!</a></p>
			</form>
		</div>
	</body>
</html>