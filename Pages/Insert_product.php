<!DOCTYPE html>
<!-- Insert_product.php 
    Author: Dylan
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product page</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <header>
        <?php include "../Include pages/Navmenu.php"; ?>
    </header>

    <form action="process_insert_product.php" method="POST" id="Product-form">
        <label for="Productnaam">Product naam:</label>
        <input type="text" id="Productnaam" name="Productnaam" required><br>

        <label for="Merk">Merk:</label>
        <input type="text" id="Merk" name="Merk" required><br>

        <label for="Prijs">Prijs:</label>
        <input type="number" id="Prijs" name="Prijs" required><br>

        <label for="Omschrijving">Omschrijving:</label>
        <input type="text" id="Omschrijving" name="Omschrijving" required><br>

        <label for="foto">Image:</label>
        <input type="text" id="foto" name="foto" required><br>
        
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" required><br>

        <label for="color">Color:</label>
        <input type="text" id="color" name="color" required><br>

        <label for="capacity">Capacity:</label>
        <input type="text" id="capacity" name="capacity" required><br>

        <label for="ram">RAM:</label>
        <input type="text" id="ram" name="ram" required><br>

        <label for="screen_size">Screen Size:</label>
        <input type="text" id="screen_size" name="screen_size" required><br>

        <label for="camera">Camera:</label>
        <input type="text" id="camera" name="camera" required><br>

        <label for="os">Operating System:</label>
        <input type="text" id="os" name="os" required><br>

        <label for="release_year">Release Year:</label>
        <input type="text" id="release_year" name="release_year" required><br>

        <input type="submit" value="Submit" >
    </form>

    <footer>
        <?php include "../Include pages/Footer.php"; ?>
    </footer>
</body>
</html>
