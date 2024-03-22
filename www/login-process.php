<?php
require 'database.php';

$emailForm = $_POST['email'];
$passwordForm = $_POST['wachtwoord'];

$stmt = $pdo->prepare("SELECT * FROM gebruiker WHERE email=:email");
$stmt->bindParam(":email", $emailForm);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $dbuser  = $stmt->fetch(PDO::FETCH_ASSOC);

    if (password_verify($passwordForm, $dbuser['wachtwoord'])) {
        session_start();
        $_SESSION['user_id']    = $dbuser['ID'];
        $_SESSION['email']      = $dbuser['email'];
        $_SESSION['voornaam']  = $dbuser['voornaam'];
        $_SESSION['achternaam']   = $dbuser['achternaam'];
        $_SESSION['rol']       = $dbuser['rol'];

        header("Location: dashboard.php");
        exit;
    } else {
        include 'nav.php';
        echo "Invalid password.";
    }
} else {
    include 'nav.php';
    echo "No user found with this email.";
}
