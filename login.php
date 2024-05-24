
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login_css.css">
<center><h1 > E-Kishaan </h1>
    <h3>LOGIN </h3></center>
    <title>Login</title>
</head>

<body>

    <center>
        
<form method="post"  >  
  పేరు:        <input type="text" name="name" id="name" required>
  <span class="error">* </span>
  <br><br>
  Password: <input type="password" name="password" id="password" required>
  <span class="error">* </span>
  <br><br>
 <input type="submit" name="SUBMIT" value="సమర్పించండి" id="submit" required>  
 <p>ఖాతా లేదు?<a href="index.php" > Sign up</a></p>
  <p>మీరు నిర్వాహకులా ?<a href="admin/index.php" > Login</a></p>




</form>
    </center>
</body>

</html>

<?php
    $conn =mysqli_connect('localhost','root','','webathon') or die("Connection failed");
    if(!empty($_POST['SUBMIT']))
    {
        $username=$_POST['name'];
        $password=$_POST['password'];
        $query="select * from registration where name='$username' and password='$password'";
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
        if($count>0)
        {
             header("Location: homepage.php");
            // die();
             echo "LOgin successfull";
        }
        else{
             echo "<script>alert('చెల్లని పేరు లేదా పాస్‌వర్డ్');window.location.href='login.php';</script>";

            // echo "unsuccesfull";
        }
    }
?>
