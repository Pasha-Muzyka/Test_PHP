<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "testdb";

	$conn = new mysqli($servername, $username, $password, $database);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$result = $conn->query("SELECT id, login, password FROM users");

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row['id'];
	}
}

?>
