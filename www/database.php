<?php

$servername = "mariadb";
$username = "root";
$password = "password";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=restaurant_nova", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
