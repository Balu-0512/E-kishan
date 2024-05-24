<?php
// Establish database connection
$host = 'localhost';
$dbname = 'webathon';
$username = 'root';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}


// Get selected crop and date from form submission
$crop = $_POST['crop'];
$date = $_POST['date'];

// Retrieve prices from the database based on the selected crop and date
$query = "SELECT price FROM prices WHERE type = :crop AND date = :date";
$stmt = $db->prepare($query);
$stmt->bindParam(':crop', $crop);
$stmt->bindParam(':date', $date);
$stmt->execute();
$prices = $stmt->fetchAll(PDO::FETCH_COLUMN);
function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');window.location.href='marget.html';</script>";
}

// Display the prices
 if (count($prices) > 0) {
           // echo "<h2>Prices for $crop on $date:</h2>";
            //echo "<ul>";
            foreach ($prices as $price) {
                function_alert(" $date న ధర:  $price");
                // echo "<li>$price</li>";
            }
            //echo "</ul>";
        } else {
            function_alert(" $date న ధర అందుబాటులో లేదు");
        }

?>
