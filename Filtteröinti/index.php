<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/main.css">

    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1 class="title">Filtteröinti</h1>
    <form action="index.php" method="get">
        <label for="name">Nimi:</label>
        <input type="text" name="name" id="name">
        <label for="year">Syntymävuosi:</label>
        <input type="number" name="year" id="year" min="1920" max="2024">
        <label for="email">Sähköposti:</label>
        <input type="email" name="email" id="email">
        <button type="submit">Submit</button>
    </form>
    </div>  
    
</body>
</html>

<?php
    if(isset($_GET["name"], $_GET["year"], $_GET["email"])){
        $name = htmlspecialchars($_GET['name']);
        $email = htmlspecialchars($_GET['email']);
        $year = htmlspecialchars($_GET['year']);

        $name = htmlspecialchars($name, ENT_QUOTES);

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            echo("$email is a valid email address.<br>");
        } else {
            echo("$email is not a valid email address.<br>");
        }

        $intYear = filter_var($year, FILTER_SANITIZE_NUMBER_INT);
        if (filter_var($intYear, FILTER_VALIDATE_INT) === 0 || !filter_var($intYear, FILTER_VALIDATE_INT) === false) {
            echo("Year is a number.<br>");
        } else {
            echo("Year must be a number.<br>");
        }

        $min = 1999;
        $max = 2009;
        if (filter_var($intYear, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
        echo("Year is not within the legal range.<br>");
        } else {
        echo("Year is within the legal range.<br>");
        }

        echo "Nimi: " . $name . ",<br>Syntymävuosi: " . $intYear . ",<br>Sähköposti: " . $email . ".<br>";
    }

   
?>