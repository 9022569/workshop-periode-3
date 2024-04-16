<?php
// Include your getProductById() function here
include_once('../Include pages/Functions.php');

$product_id = $_GET['id'] ?? null; // Change 'product_id' to 'id'

if ($product_id) {
    try {
        $product = getProductById($pdo, $product_id);
  
        ?>
        <form action="update_product.php" method="POST">
            <input type="hidden" name="product_id" value="<?php echo $product['ProductID']; ?>">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo $product['ProductNaam']; ?>"><br> <!-- Change to ProductNaam -->
            <label for="brand">Brand:</label>
            <input type="text" name="brand" id="brand" value="<?php echo $product['Merk']; ?>"><br> <!-- Change to Merk -->
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" value="<?php echo $product['Prijs']; ?>"><br> <!-- Change to Prijs -->
            <label for="description">Description:</label>
            <textarea name="description" id="description"><?php echo $product['Omschrijving']; ?></textarea><br> <!-- Change to Omschrijving -->
            <label for="photo">Photo:</label>
            <input type="text" name="photo" id="photo" value="<?php echo $product['Foto']; ?>"><br> <!-- Change to Foto -->
            <!-- Add more fields as needed -->
            <input type="submit" value="Update">
        </form>
        <?php
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Product ID not provided.";
}
?>
