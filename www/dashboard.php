<?php
session_start();

if (!isset($_SESSION['rol'])) {
    header('Location: login.php');
    exit;
}

$rol = $_SESSION['rol'];
$_SESSION['loggedin'] = true;

header('Location: index.php');
exit;
