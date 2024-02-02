<?php

  require "./dbfunctions.php";

  // $pdo = connect(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
</head>
<body>
  
  <h2>Show All Games</h2>
  <!-- find all games from the table 'test_games' -->
  <ul>
    <?php
      $games = getAllGames();
      foreach($games as $game) {
        echo "<li>" . $game["name"] . "</li>";
      }
    ?>
  </ul>

  <h2>Show Games By Company's Name</h2>
  <!-- find games by company -->
  <ul>
    <?php
      $games =  getGameByCompany('Electronic Arts');
      foreach($games as $game) {
        echo "<li>" . $game["name"] . "</li>";
      }
    ?>
  </ul>
  
  <h2>Show Game By ID</h2>
  <!-- find game by id -->
  <?php 
      $game = getGameByID('1');
      echo $game['name'];  
  ?>

  <h2>Create New Game</h2>
  <!-- create new game -->
  <?php
   // echo insertNewGame('World of Warcraft', 'Blizzard Entertainment', '2004'); 
   // echo insertNewGame('The Lord of the Rings: Heroes of Middle-earth', 'Electronic Arts', '2023'); 
  ?>
  
  <h2>Update Game</h2>
  <!-- update game -->
  <?php
   //  echo updateGame('Need for Speed: Underground 2', 'Electronic Arts', '2004', '1');
  ?>

  <h2>Delete Game</h2>
  <!-- delete game -->
  <?php
   // echo deleteGame('5');
  ?>

  <h2>Show All Games Button</h2>
  <!-- show all games button -->
  <form action='index.php' method='post'>
  <input type='submit' name='submit' value='Show All Games'>
  
  <ul>
    <?php
      $games = getAllGamesButton();
      foreach($games as $game) {
        echo "<li>" . $game["name"] . "</li>";
      }
    ?>
  </ul>
  
</body>
</html>


