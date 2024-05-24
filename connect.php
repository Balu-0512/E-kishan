<?php
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	// $name = $_POST['name'];

	//Database connection
	$conn =new mysqli('localhost','root','','webathon');
	if($conn->connect_error)
	{
		die('connection failed : '.$conn->connect_error);
	}
	else{
		$stmt=$conn->prepare("insert into registration(name,mobile,password) values(? ,? ,? )");
		$stmt->bind_param("sis",$name,$mobile,$password);
		$stmt->execute();
		header("Location: login.php");
		$stmt->close();
		$conn->close();
	}
?>