<!DOCTYPE html>
<!-- Medewerkers.php 
    Author: Ethan
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medewerkers page</title>
    <link rel="stylesheet" href="Style.css">
</head>
<header>
    <nav>
        <?php include "../Include pages/Navmenu.php"; ?>
    </nav>
</header>
<body>
<main>
    <section class="medewerkers">
        <div class="medewerker">
            <img src="../Images/clown.png" alt="Medewerker 1">
            <p>Naam: Bob</p>
            <p>Hoofdmanager</p>
            <p>Karakter: Bob is een vriendelijk persoon, hij zorgt dat er altijd geen problemen zijn met de higher ups. En haalt soms grapjes uit om het sfeer goed positief te houden.</p>
        </div>
        <div class="medewerker">
            <img src="../Images/pikachu1.png" alt="Medewerker 2">
            <p>Naam: Pikachu</p>
            <p>Manager</p>
            <p>Karakter: Pikachu is hard werkend en wilt ook zorgen dat iedereen top en efficient werkt. Hij geeft dus ook veel tips en advice aan medewerkers om slimmer en beter te werken.</p>
        </div>
        <div class="medewerker">
            <img src="../Images/snivy.png" alt="Medewerker 3">
            <p>Naam: Snivy</p>
            <p>Logistiek manager</p>
            <p>Karakter: Snivy is calm en zorgt altijd ervoor dat alles volledig vol is en dat er altijd wat te verkopen is. Zij kan dus snel een overzicht krijgen van wat er op dit moment nodig is.</p>
        </div>
    </section>
</main>

</body>
<footer>
    <?php include "../Include pages/Footer.php"; ?>
</footer>
</html>