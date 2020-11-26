<?php
	session_start();

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "testdb";

	$conn = mysqli_connect($servername, $username, $password, $database);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if (isset($_SESSION['login'])) {
		$login = $_SESSION['login'];
		$password = $_SESSION['password'];
		
		$res = mysqli_query ($conn, "SELECT * FROM `users` WHERE login ='$login' AND password ='$password'");
		$row = mysqli_fetch_array($res);
		if (is_array($row)) {
			$_SESSION['id'] = $row['id'];
			$_SESSION['login'] = $row['login'];
			$_SESSION['id_role'] = $row['id_role'];
		} else {
			echo 'Invalid password';
			session_unset();
		}
	}
?>
