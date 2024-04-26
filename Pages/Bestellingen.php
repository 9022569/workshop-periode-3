<!DOCTYPE html>
<!-- Bestellingen.php 
    Auteur: Ethan
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
</head>
<header>
    <?php include "../Include pages/Navmenu.php"; ?>
</header>
<body>
    <section>
        <!-- Filter voor product of leverancier -->
        <form method="GET">
            <label for="search_keyword">Zoek op productnaam of leveranciernaam:</label>
            <input type="text" id="search_keyword" name="search_keyword">
            <button type="submit">Zoeken</button>
        </form>

        <?php
        include "../Include pages/Functions.php";

        // Controleren of er een zoekopdracht is ingediend
        if(isset($_GET['search_keyword']) && !empty($_GET['search_keyword'])) {
            $search_keyword = $_GET['search_keyword'];
            // Zoek bestellingen op basis van zoekwoord en toon resultaten
            displayFilteredBestellingenTable($search_keyword);
        } else {
            // Toon standaard bestellingen zonder filter
            displayBestellingenTable();
        }
        ?>

        <!-- Toevoegen, Wijzigen en Verwijderen knoppen -->
        <div>
            <button onclick="window.location.href = 'bestellingen_add.php';">Toevoegen</button>
        </div>
    </section>
</body>
<footer>
    <?php include "../Include pages/Footer.php"; ?>
</footer>
</html>
