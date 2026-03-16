<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "users_db";

try
{
	$connection = new mysqli($host, $user, $password, $database);
}
catch(mysqli_sql_exception)
{
	session_start();
	$_SESSION["error"] = "The connection has failed.";
	header("Location: login.php");
	exit();
}