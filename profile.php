
<html>

<head>
    <link rel="stylesheet" href="./styles.css">
    <title>Farmers' Helper App</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
    
        <h1>Farmers' Helper App</h1>
        <nav>
            <ul>
               <li><a href="homepage.php">హోమ్</a></li>
                <li><a href="crops.html">పంటలు</a></li>
                <li><a href="weather/index.html">వాతావరణం</a></li>
                <li><a href="marget.html">మార్కెట్ సమాచారం</a></li>
                <!-- <li><a href="#">Agricultural Loans</a></li> -->
                <li><a href="croping.html">వ్యవసాయ సామగ్రి అద్దె</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <center>
    <?php
    echo $_SESSION['name'];
    ?>
</center>

    <footer>
        <p>&copy; 2023 Farmers' Helper App. All rights reserved.</p>
    </footer>
</body>

</html>