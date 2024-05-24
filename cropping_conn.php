<?php
	$name = $_POST['name'];
	$mobile = $_POST['phone'];
	$equipment = $_POST['equipment'];
	$date = $_POST['date'];
	$message=$_POST['message'];
	function function_alert($message) {
    
    // Display the alert box 
    echo "<script>alert('$message');window.location.href='croping.html';</script>";
}
	//Database connection
	$conn =new mysqli('localhost','root','','webathon');
	if($conn->connect_error)
	{
		die('connection failed : '.$conn->connect_error);
	}
	else{
		$stmt=$conn->prepare("insert into contact(name,mobile,equipment,date,message) values(? ,? ,? ,? ,? )");
		$stmt->bind_param("sisss",$name,$mobile,$equipment,$date,$message);
		$stmt->execute();
		// header("Location: croping.html");
		function_alert("మీ అభ్యర్థన విజయవంతంగా నమోదు చేయబడింది. మేము త్వరలో మిమ్మల్ని సంప్రదిస్తాము");
		echo "Successfull";
		$stmt->close();
		$conn->close();
	}
?>