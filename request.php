<?php

session_start();
require_once "connect.php";

if($_SERVER["REQUEST_METHOD"] === "POST")
{
	if(isset($_POST["sign_up_button"]))
	{
		$name = $_POST["name"];
		$email = $_POST["email"];
		$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

		$query = $connection->prepare("SELECT * FROM users WHERE email = ?");
		$query->bind_param("s", $email);
		$query->execute();
		$email_check = $query->get_result();
		if($email_check->num_rows > 0)
		{
			$_SESSION["error"] = "An account with the given email already exists.";
		}
		else
		{
			$query = $connection->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
			$query->bind_param("sss", $name, $email, $password);
			$query->execute();
		}

		header("Location: signup.php");
		exit();
	}
	else if(isset($_POST["log_in_button"]))
	{
		$email = $_POST["email"];
		$password = $_POST["password"];

		$query = $connection->prepare("SELECT * FROM users WHERE email = ?");
		$query->bind_param("s", $email);
		$query->execute();
		$record_check = $query->get_result();
		if($record_check->num_rows > 0)
		{
			$user = $record_check->fetch_assoc();
			if(password_verify($password, $user["password"]))
			{
				$_SESSION["name"] = $user["name"];
				$_SESSION["email"] = $user["email"];
				header("Location: homepage.php");
				exit();
			}

			$_SESSION["error"] = "Incorrect password.";
			header("Location: login.php");
			exit();
		}

		$_SESSION["error"] = "There is no account associated with this email.";
		header("Location: login.php");
		exit();
	}
	else if(isset($_POST["change_username_button"]))
	{
		$new_username = $_POST["new_username"];
		$email = $_SESSION["email"];

		$query = $connection->prepare("UPDATE users SET name = ? WHERE email = ?");
		$query->bind_param("ss", $new_username, $email);
		$query->execute();
		$_SESSION["name"] = $new_username;
		header("Location: homepage.php");
		exit();
	}
	else if(isset($_POST["change_password_button"]))
	{
		$new_password = password_hash($_POST["new_password"], PASSWORD_DEFAULT);
		$email = $_SESSION["email"];

		$query = $connection->prepare("UPDATE users SET password = ? WHERE email = ?");
		$query->bind_param("ss", $new_password, $email);
		$query->execute();
		header("Location: homepage.php");
		exit();
	}
}