<?php
session_start();
// echo "welcome".$_SESSION['name'];
?>
<!DOCTYPE html>
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
                <!-- <li><a href="crops.html">పంటలు</a></li> -->
                <!-- <li><a href="weather/index.html">వాతావరణం</a></li> -->
                <li><a href="test.html">మార్కెట్ సమాచారం</a></li>
                <!-- <li><a href="#">Agricultural Loans</a></li> -->
                <li><a href="table.php">వ్యవసాయ సామగ్రి అద్దె</a></li>
                <li><a href="logout.php">నిష్క్రమించండి</a></li>
            </ul>
            <!-- <form action="logout.php" method="post">
    <input type="submit" value="Logout">
</form> -->

        </nav>
    </header>
    <main>
        <section>
            <h2>రైతుల సహాయక యాప్‌కు స్వాగతం!</h2>
            <p>రైతులు తమ పంటను కాపాడుకోవడానికి, వివిధ సౌకర్యాలకు ప్రాప్యతను అందించడానికి మరియు వారి చేతివేళ్లకు సౌకర్యాలను అందించడం ద్వారా వారి పనులను సులభతరం చేయడానికి సహాయపడే ప్రాథమిక సమాచారాన్ని ముందుగానే యాక్సెస్ చేయడంలో సహాయపడటానికి ఈ యాప్ రూపొందించబడింది.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Farmers' Helper App. All rights reserved.</p>
    </footer>
</body>

</html>