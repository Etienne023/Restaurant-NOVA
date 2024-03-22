<?php
include 'nav.php';
?>
<div class="justify-center text-center relative">
    <form action="submit.php" method="post">
        Product ID: <input type="text" name="product_ID" required class="mb-4"><br><br>
        Is Vega: <input type="checkbox" name="is_vega" class="mb-4"><br><br>
        Voorraad: <input type="number" name="voorraad" required class="mb-4"><br><br>
        Naam: <input type="text" name="naam" required class="mb-4"><br><br>
        Afbeelding: <input type="file" name="afbeelding" required class="mb-4"><br><br>
        Aantal Ingredienten: <input type="number" name="aantal_ingredienten" required class="mb-4"><br><br>
        Duur: <input type="text" name="duur" required class="mb-4"><br><br>
        Beschrijving: <textarea name="beschrijving" required class="mb-4"></textarea><br><br>
        Inkoop Prijs: <input type="number" name="inkoop_prijs" step="0.01" required class="mb-4"><br><br>
        Verkoop Prijs: <input type="number" name="verkoop_prijs" step="0.01" required class="mb-4"><br><br>
        Catogorie ID: <input type="text" name="Catogorie_ID" required class="mb-4"><br><br>
        <input type="submit" name="submit" value="Submit" class="mt-4">
    </form>
</div>