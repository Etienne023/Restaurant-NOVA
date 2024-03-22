<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $wachtwoord = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);
    $rol = $_POST['rol'];
    $straatnaam = $_POST['straatnaam'];
    $postcode = $_POST['postcode'];
    $huisnummer = $_POST['huisnummer'];
    $woonplaats = $_POST['woonplaats'];

    // Insert the adres into the Adres table and get the ID
    $sql = "INSERT INTO adres (straatnaam, postcode, huisnummer, woonplaats) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$straatnaam, $postcode, $huisnummer, $woonplaats]);
    $adres_ID = $pdo->lastInsertId();

    // Use the adres_ID when inserting the new user
    $sql = "INSERT INTO gebruiker (voornaam, achternaam, email, wachtwoord, rol, adres_ID) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$voornaam, $achternaam, $email, $wachtwoord, $rol, $adres_ID]);
}
header('Location: login.php');
?>