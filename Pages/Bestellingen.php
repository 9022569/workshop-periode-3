<!DOCTYPE html>
<!-- Bestellingen.php 
    Author: Ethan
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
        <?php
        include "../Include pages/Functions.php";
        displayBestellingenTable();
        ?>
    </section>
</body>
<footer>
    <?php include "../Include pages/Footer.php"; ?>
</footer>
</html>