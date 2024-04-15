<!DOCTYPE html>

<!-- Index.php 
    Author: Emir
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index.php</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
        <nav>
            <?php include "../Include pages/navmenu.php"; ?>
        </nav>
    </header>
<body id="Index-body">

    <div class="container">
        <div class="search-container">
            <form action="search.php" method="GET">
                <label for="query" class="sr-only"></label>
                <input type="text" id="query" name="query" class="search-bar" placeholder="Search here...">
                <input type="submit" value="Search" class="search-button">
            </form>
        </div>
        <div class="boxes-container">
            <div class="box">
                <img src="../images/mobile-apps.png" alt="Image 1" id="Index-img-1">
            </div>
            <div class="box">
                <img src="../images/mobile-apps-2.png" alt="Image 2">
            </div>
            <div class="box">
                <img src="../images/mobile-apps-3.png" alt="Image 3">
            </div>
        </div>
    </div>
    
</body>
<footer>
        <?php include "../Include pages/Footer.php"; ?>
</footer>
</html>
