<?php
/**
 * Ottaa yhteyden tietokantaan, palauttaa 
 * pdo-olion.
 * 13.2.2023/EM
 */
function connect() {
    $servername = "irysul23.treok.io";
    $username = "irysul23_sasp";
    $password = "W8MS0s1Vn_,M";
    //$port = 3306;
    $dbname = "irysul23_sasp";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
}