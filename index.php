

<!DOCTYPE html>
<html lang="en">
<head>
    <center><h1> E-Kishaan </h1></center>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="registeration_css.css">
    <title>Registration</title>
</head>
<body>
    <center>
        <form action="connect.php" method="post">
        <!-- <form method="post" action="login.in.php"> -->
            <label for="">పేరు :</label>
            <input type="text" name="name" id="name" required ><span class="error" > *</span><br><br>
            <label for="">మొబైల్ నంబర్ :</label>
            <input type="tel" name="mobile" id="Mobile Number" required ><span class="error"> *</span><br><br>
            <label for="">Password :</label>
            <input type="password" name="password" id="Password"  required><span class="error" > *</span><br><br>
            <!-- <label for=""> Confirm Password</label>
            <input type="password" name="confirm_password" id="Confirm_Password"  ><span class="error"> *</span><br><br> -->
            <p id="message"></p>
            <input type="submit" name="Sign up" onclick="validatePassword()" value="సమర్పించండి" id="Sign up" >
            <p>మీరు ఇప్పటికే నమోదు చేసుకున్నారా ?<a href="login.php" > Login</a></p>
            <p>మీరు నిర్వాహకులా ?<a href="admin/index.php" > admin Login</a></p>
           
            <!-- <a href="./homepage.html"></a><input type="button" name="reset" value="reset"> -->
            </form> 
         <script src="script.js"></script>
    </center>
</body>
</html>
