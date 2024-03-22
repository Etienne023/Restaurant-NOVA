<?php
include 'nav.php';
?>
<div class="justify-center text-center relative">
    <h2>Registration Form</h2>
    <form method="post" action="registreren-process.php">
        Voornaam: <input type="text" name="voornaam" required>
        <br><br>
        Achternaam: <input type="text" name="achternaam" required>
        <br><br>
        E-mail: <input type="text" name="email" required>
        <br><br>
        Wachtwoord: <input type="password" name="wachtwoord" required>
        <br><br>
        Rol: <select name="rol" required>
            <option value="directeur">Directeur</option>
            <option value="manager">Manager</option>
            <option value="medewerker">Medewerker</option>
            <option value="klant">klant</option>
        </select>
        <br><br>
        Straatnaam: <input type="text" name="straatnaam" required>
        <br><br>
        Postcode: <input type="text" name="postcode" required>
        <br><br>
        Huisnummer: <input type="text" name="huisnummer" required>
        <br><br>
        Woonplaats: <input type="text" name="woonplaats" required>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>