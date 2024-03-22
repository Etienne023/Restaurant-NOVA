<?php
session_start();
require 'database.php';
?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="src/output.css" rel="stylesheet">
</head>

<body>
  <div class="min-h-screen <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'bg-custom-image' : 'bg-black' ?> bg-cover bg-fixed bg-center relative text-white">
    <div class="absolute inset-0 <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'bg-black opacity-40' : '' ?> "></div>
    <div class="relative">
      <nav class="flex items-center justify-between p-6 pl-36 pr-36">
        <div>
          <a href="index.php">
            <ul>
              <li class="font-pacifico"><a href="index.php">de Goulash Grot</a></li>
            </ul>
          </a>
        </div>

        <ul class="flex space-x-14 font-playfair">
          <li><a href="index.php">Home</a></li>

          <li><a href="#">Menu</a></li>

          <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'directeur') { ?>
            <li><a href="#">beschikbare gerechten</a></li>
            <li><a href="#">medewerkers</a></li>
            <li><a href="#">tafel</a></li>
          <?php } ?>

          <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'manager') { ?>
            <li><a href="#">Medewerkers</a></li>
          <?php } ?>

          <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'klant') { ?>
            <li><a href="#">profiel</a></li>
          <?php } ?>

          <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'medewerker') { ?>
            <li><a href="#">beschikbare gerechten</a></li>
            <li><a href="#">medewerkers</a></li>
            <li><a href="#">tafels</a></li>
          <?php } ?>

          <?php if (!isset($_SESSION['loggedin'])) { ?>
            <li><a href="login.php">login</a></li>
            <li><a href="registreren.php">registeren</a></li>
          <?php } else { ?>
            <li><a href="logout.php">logout</a></li>
          <?php } ?>


      </nav>
    </div>