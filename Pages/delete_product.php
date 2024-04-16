<?php
include_once "../Include pages/functions.php";

// Check if product ID is provided in the URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Get the product ID from the URL
    $product_id = $_GET['id'];
    
    // Delete the product from the database
    try {
        deleteProduct($product_id);
        echo "Product deleted successfully.";
    } catch(Exception $e) {
        echo "Error deleting product: " . $e->getMessage();
    }
} else {
    echo "Product ID not provided.";
}
?>
