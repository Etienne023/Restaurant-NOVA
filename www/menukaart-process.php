<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_ID = $_POST['product_ID'];
    $is_vega = isset($_POST['is_vega']) ? 1 : 0;
    $voorraad = $_POST['voorraad'];
    $naam = $_POST['naam'];
    $afbeelding = $_FILES['afbeelding']['name'];
    $aantal_ingredienten = $_POST['aantal_ingredienten'];
    $duur = $_POST['duur'];
    $beschrijving = $_POST['beschrijving'];
    $inkoop_prijs = $_POST['inkoop_prijs'];
    $verkoop_prijs = $_POST['verkoop_prijs'];
    $Catogorie_ID = $_POST['Catogorie_ID'];

    // TODO: Add your code here to handle the form data, such as saving it to a database.
}
?>