<!DOCTYPE html>
<!-- Producten.php crud 
    Author: Dylan
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Producten page</title>
    <link rel="stylesheet" href="Style.css">
</head>
<header>
    <nav>
        <?php include "../Include pages/navmenu.php"; ?>
    </nav>
</header>
<body>
    <section>
        <button onclick='addProduct()' class='add_product_btn'>Add Product</button>
        <?php
        include "../Include pages/functions.php";
        try {
            $products = GetProducts();
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
        function addProduct() {
            // Redirect to insert_product.php page
            window.location.href = 'insert_product.php';
        }

        // JavaScript for adding to cart functionality 
        function addToCart(productName) {
            alert("Added " + productName + " to cart!");
        }

        function deleteProduct(productId) {
            if (confirm('Are you sure you want to delete this product?')) {
                // Redirect to delete_product.php with the product ID
                window.location.href = 'delete_product.php?id=' + productId;
            }
        }
    </script>

</body>
<footer>
    <?php include "../Include pages/Footer.php"; ?>
</footer>
</html>
