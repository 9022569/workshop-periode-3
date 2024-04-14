<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud-Producten page</title>
    <link rel="stylesheet" href="Style.css">
</head>
<header>
    <nav>
        <?php include "../Include pages/navmenu.php"; ?>
    </nav>
</header>
<body>
    <?php
    include_once "../Include pages/functions.php";

    try {
        $products = getProducts("producten");
        printCrudProducts($products);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>

</body>
<footer>
    <?php include "../Include pages/Footer.php"; ?>
</footer>
</html>
