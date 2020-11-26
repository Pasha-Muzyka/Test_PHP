<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "testdb";

	$conn = mysqli_connect($servername, $username, $password, $database);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
		
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$login = $_POST['login'];
	$password = $_POST['password'];
	
	if($_POST['role'] == "admin") {
		$id_role = 1;
	} else {
		$id_role = 2;
	}
	
	mysqli_query($conn, "INSERT INTO `users` (`first_name`, `last_name`, `password`, `login`, `id_role`) 
	VALUES ('$first_name', '$last_name', '$password', '$login', '$id_role')");

	mysqli_close($conn);
	header('Location: login.php');
?>