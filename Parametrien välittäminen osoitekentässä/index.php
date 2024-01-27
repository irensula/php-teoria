<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
    // we write in the address line of browser: 'index.php?name=Tiina'
    // so we get 'Hello, Tiina'
    // echo "Hello, " .  $_GET['name'] . "!\n"; 

    // to prevent use of harmfull code
    // echo "Hello, " .  htmlspecialchars($_GET['name'] . "(with htmlspecialchars)") . "!\n";

    // demotehtävä 1

    // we write in the address line of browser: 'index.php?name=<a href="http://google.com">Anna</a>'
    // so we get 'Hello, Anna', where 'Anna' is a link to Google

    // we write in the address line of browser: 'index.php?name=<script>alert("You got hacked!")</script>'
    // so we get alert with text 'You got hacked!'

?>

<!-- demotehtävä 2 -->

<?php
    if(isset($_GET['greeting'])){
        $greeting = htmlspecialchars($_GET['greeting']);
        if(isset($greeting))
            echo $greeting;
    } else {
            echo "I don't know how to greet you";
    }
?>

<?php if(isset($_GET['greeting'])) : ?>
    <p><?= $greeting ?> (with html)</p>
<?php else : ?>
    <p>I don't know how to greet you (with html)</p>
<?php endif?>

</body>
</html>

