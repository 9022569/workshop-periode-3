<!DOCTYPE html>
<!-- Insert_bestelling.php 
    Author: Ethan
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestelling Toevoegen</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <header>
        <?php include "../Include pages/Navmenu.php"; ?>
    </header>

    <form action="process_insert_bestelling.php" method="POST" id="Bestelling-form">
        <label for="Bestellingnummer">Bestelling Nummer:</label>
        <input type="text" id="Bestellingnummer" name="Bestellingnummer" required><br>

        <label for="ProductID">Product ID:</label>
        <input type="number" id="ProductID" name="ProductID" required><br>

        <label for="LeverancierID">Leverancier ID:</label>
        <input type="number" id="LeverancierID" name="LeverancierID" required><br>

        <label for="Productnaam">Product Naam:</label>
        <input type="text" id="Productnaam" name="Productnaam" required><br>

        <label for="Leveranciernaam">Leverancier Naam:</label>
        <input type="text" id="Leveranciernaam" name="Leveranciernaam" required><br>

        <label for="Totaalprijs">Totaalprijs:</label>
        <input type="number" id="Totaalprijs" name="Totaalprijs" step="0.01" required><br>

        <label for="Besteldatum">Besteldatum:</label>
        <input type="date" id="Besteldatum" name="Besteldatum" required><br>

        <input type="submit" value="Submit">
    </form>

    <footer>
        <?php include "../Include pages/Footer.php"; ?>
    </footer>
</body>
</html>
