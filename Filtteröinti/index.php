<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="name">Nimi:</label>
        <input type="text" name="name" id="name">
        <label for="year">Syntymävuosi:</label>
        <input type="number" name="year" id="year" min="1920" max="2024">
        <label for="email">Sähköposti:</label>
        <input type="email" name="email" id="email">
        <button type="submit">Submit</button>
    </form>
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
        echo "Nimi: " . $name . ",<br>Syntymävuosi: " . $intYear . ",<br>Sähköposti: " . $email . ".<br>";
    }
   
?>