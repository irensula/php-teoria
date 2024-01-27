<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Istunnot</title>
</head>
<body>
    <?php
    // $array = isset($_SESSION['array']) ? $_SESSION['array']: [];
        if(isset($_SESSION['my_favourite_game'])) {
            echo "My favourite game is " . $_SESSION['my_favourite_game'] . ".";
        } else {
            $_SESSION['my_favourite_game'] = 'No game catches my fancy';
            echo "My favourite game is " . $_SESSION['my_favourite_game'] . ".";
        }; 
    ?>
</body>
</html>