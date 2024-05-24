<?php
//Start the session
session_start();

// Destroy all session data
session_destroy();

// Redirect to the login page or any other page
header("Location: index.php");
exit;





// // Start or resume the session
// session_start();

// // Check if the user is logged in
// if (!isset($_SESSION['name'])) {
//     // Redirect the user to the login page or perform other actions
//     header("Location: index.php");
//     exit();
// }

// // Logout functionality
// if (isset($_POST['logout'])) {
//     // Clear session data
//     session_unset();
//     session_destroy();

//     // Redirect the user to the login page or perform other actions
//     header("Location: index.php");
//     exit();
// }

?>
