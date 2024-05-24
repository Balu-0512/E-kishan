<?php
session_start();
if(isset($_POST['Sign up'])){
    //store the session data
	$_SESSION['name'] = $_POST['name'];
	$_SESSION['mobile'] = $_POST['mobile'];
	// $_SESSION['phone_no'] = $_POST['phone_no'];
    //print_r($_SESSION);
    echo "welcome".$_SESSION['name'];
    header("Location:login.html?signup=success");
    header("Location:login.html?signup=success");

}
