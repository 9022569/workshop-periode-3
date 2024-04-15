<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <header>
    <?php include "../Include pages/functions.php"; ?>
    </header>
<?php
    // Check if a product ID is provided in the URL
    if(isset($_GET['id']) && !empty($_GET['id'])) {
        $product_id = $_GET['id'];

        // Retrieve product details from the database based on the provided ID
        try {
            $product = getProductById($product_id);
            
            // Check if product exists
            if($product) {
                // Display product details
                echo "<div class='product-details'>";
                echo "<h2>{$product['ProductNaam']}</h2>";
                echo "<p>Brand: {$product['Merk']}</p>";
                echo "<p>Price: {$product['Prijs']}</p>";
                echo "<p>Description: {$product['Omschrijving']}</p>";
                echo "<img src='{$product['Photo']}' alt='{$product['ProductNaam']}'/>";
                echo "<button onclick='addToCart(\"{$product['ProductNaam']}\")'>Add to Cart</button>";
                echo "</div>";
            } else {
                echo "<p>Product not found.</p>";
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "<p>No product ID provided.</p>";
    }
    ?>
    
    <script>
        // JavaScript function to add product to cart
        function addToCart(productName) {
            alert("Added " + productName + " to cart!");
        }
    </script>
    <footer>
        <?php include "../Include pages/footer.php"; ?>
    </footer>
</body>
</html>
