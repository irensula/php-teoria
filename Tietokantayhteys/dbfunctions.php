<?php
/**
 * Ottaa yhteyden tietokantaan, palauttaa 
 * pdo-olion.
 * 13.2.2023/EM
 */
function connect() {
    $servername = "irysul23.treok.io";
    $username = "irysul23_sasp";
    $password = "saspiDm18&86";
    //$port = 3306;
    $dbname = "irysul23_sasp";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
}

// find all games from the table 'test_games'
function getAllGames() {
    $pdo = connect();
    $sql = "SELECT * FROM test_games";
    $stm = $pdo->query($sql);
    $games = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $games;
}

// find game by id
function getGameByID($id) {
    $pdo = connect();
    $sql = "SELECT * FROM test_games WHERE gameID=?";
    $stm = $pdo->prepare($sql);
    $stm->execute([$id]);
    $game = $stm->fetch(PDO::FETCH_ASSOC);
    return $game;
}
// find games by company
function getGameByCompany($company) {
    $pdo = connect();
    $sql = "SELECT * FROM test_games WHERE company=?";
    $stm = $pdo->prepare($sql);
    $stm->execute([$company]);
    $game = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $game;
}

// create new game
function insertNewGame($name, $company, $release) {
    $pdo = connect();
    $sql = "INSERT INTO test_games (`name`, `company`, `release`) VALUES (?,?,?)";
    $stm = $pdo->prepare($sql);
    $ok = $stm->execute([$name, $company, $release]);
    return $ok;
}

// update game
function updateGame($name, $company, $release, $id) {
    $pdo = connect();
    $sql = "UPDATE test_games SET `name`=?, `company`=?, `release`=? WHERE gameID=?";
    $stm = $pdo->prepare($sql);
    $ok = $stm->execute([$name, $company, $release, $id]);
    return $ok;
}

// delete game
function deleteGame($id) {
    $pdo = connect();
    $sql = "DELETE FROM test_games WHERE gameID=?";
    $stm = $pdo->prepare($sql);
    $ok = $stm->execute([$id]);
    return $ok;
}

// find all games from the table 'test_games'
if(isset($_GET['submit'])) {   
    function getAllGamesButton() {
        $pdo = connect();
        $sql = "SELECT * FROM test_games";
        $stm = $pdo->query($sql);
        $games = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $games;
    } 
}

?>