<!DOCTYPE html>

<!-- Klachtproduct.php 
    Author: Emir
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Complaint Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include "../Include pages/Navmenu.php"; ?>
    </header>
    <div class="form-container">
        <form action="ProductComplaint_process.php" method="POST" class="form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" required><br><br>

            <label for="product_id">Product ID:</label>
            <input type="text" id="product_id" name="product_id" required><br><br>

            <label for="complaint">Complaint Description:</label><br>
            <textarea id="complaint" name="complaint" rows="4" cols="50" required></textarea><br><br>

            <label for="suggestion">Suggested Improvement:</label><br>
            <textarea id="suggestion" name="suggestion" rows="4" cols="50"></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
    <footer>
        <?php include "../Include pages/Footer.php"; ?>
    </footer>
</body>
</html>