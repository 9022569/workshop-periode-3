<!DOCTYPE html>
<!-- Producten.php crud 
    Author: Dylan
-->
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
    <section>
        <?php
        include "../Include pages/functions.php";
        try {
            // Check if a search query is present
            if(isset($_GET['search']) && !empty($_GET['search'])) {
                $search_term = $_GET['search'];
                $products = searchProducts($search_term);
            } else {
                // If no search query, get all products
                $products = GetProducts();
            }
            printCrudProducts($products);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
    </section>
    <script>
        // JavaScript for adding to cart functionality 
        function addToCart(productName) {
            alert("Added " + productName + " to cart!");
        }
    </script>
</body>
<footer>
    <?php include "../Include pages/Footer.php"; ?>
</footer>
</html>
