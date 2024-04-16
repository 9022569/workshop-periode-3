<?php
// functie: edit product
// auteur: Dylan van Schouwen

include_once "../Include pages/functions.php";

// Test of er op de wijzig-knop is gedrukt 
if(isset($_POST['btn_wzg'])){
    // test of update gelukt is
    if(updateProduct($_POST) == true){
        echo "<script>alert('Product is gewijzigd')</script>";
        echo "<script>window.location.href = 'Producten.php'</script>";
    } else {
        echo '<script>alert("Product is niet gewijzigd")</script>';
    }
}

// Test of ProductID is meegegeven in de URL
if(isset($_GET['id'])){  
    // Haal alle info van het betreffende ProductID
    $ProductID = $_GET['id'];
    $row = getProduct($ProductID);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Edit Product</title>
</head>
<body>
  <form method="post">
    <input type="hidden" id="ProductID" name="ProductID" value="<?php echo $row['ProductID']; ?>">
    <label for="ProductNaam">Naam:</label>
    <input type="text" id="ProductNaam" name="ProductNaam" required value="<?php echo $row['ProductNaam']; ?>"><br>

    <label for="Merk">Merk:</label>
    <input type="text" id="Merk" name="Merk" required value="<?php echo $row['Merk']; ?>"><br>

    <label for="Prijs">Prijs:</label>
    <input type="number" id="Prijs" name="Prijs" step="0.01" required value="<?php echo $row['Prijs']; ?>"><br>

    <label for="Omschrijving">Omschrijving:</label>
    <textarea id="Omschrijving" name="Omschrijving" required><?php echo $row['Omschrijving']; ?></textarea><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
</body>
</html>

<?php
} else {
    echo "Geen ProductID opgegeven<br>";
}
?>
