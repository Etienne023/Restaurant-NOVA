<?php
include 'nav.php';
?>
<div class="justify-center text-center relative">
    <h2>Login Form</h2>
    <form method="post" action="login-process.php">
        E-mail: <input type="text" name="email" required>
        <br><br>
        Wachtwoord: <input type="password" name="wachtwoord" required>
        <br><br>
        <input type="submit" value="Login">
    </form>
</div>