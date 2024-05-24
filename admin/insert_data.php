<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "webathon";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');window.location.href='test.html';</script>";
}
// Assuming you have established a connection to your database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $date = $_POST["date"];
  $type = $_POST["type"];
  $price = $_POST["price"];

  // Perform any necessary data validation and sanitization before inserting into the database

  // Prepare and execute the SQL query
  $stmt = $conn->prepare("INSERT INTO prices (date, type, price) VALUES (?, ?, ?)");
  $stmt->execute([$date, $type, $price]);
    function_alert("ధర విజయవంతంగా నవీకరించబడింది");
    
    $stmt->close();
    $conn->close();
  }
?>
