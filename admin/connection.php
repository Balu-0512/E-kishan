<?php

$conn = "";

try {
	$servername = "localhost";
	$dbname = "webathon";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=webathon",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
