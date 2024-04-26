<?php
// Functie: bewerk bestelling
// Auteur: Ethan

include_once "../Include pages/functions.php";

// Test of de wijzigingsknop is ingedrukt
if(isset($_POST['btn_wzg'])){   
    // Test of update gelukt is
    if(updateBestelling($_POST) == true){
        echo "<script>alert('Bestelling is gewijzigd')</script>";
        echo "<script>window.location.href = 'Bestellingen.php'</script>";
    } else {
        echo '<script>alert("Bestelling is niet gewijzigd")</script>';
    }
}

// Test of BestellingID is meegegeven in de URL
if(isset($_GET['bestellingid'])){
    // Haal alle informatie van de betreffende BestellingID
    $BestellingID = $_GET['bestellingid'];
    $row = getBestelling($BestellingID);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bewerk Bestelling</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <header>
        <?php include "../Include pages/Navmenu.php"; ?>
    </header>
  <form method="post">
    <input type="hidden" id="bestellingid" name="BestellingID" value="<?php echo $row['bestellingid']; ?>">
    <label for="productnaam">Naam:</label>
    <input type="text" id="productnaam" name="ProductNaam" required value="<?php echo $row['productnaam']; ?>"><br>

    <label for="leveranciernaam">leveranciernaam:</label>
    <input type="text" id="leveranciernaam" name="Leveranciernaam" required value="<?php echo $row['leveranciernaam']; ?>"><br>

    <label for="totaalprijs">totaalprijs:</label>
    <input type="number" id="totaalprijs" name="Totaalprijs" step="0.01" required value="<?php echo $row['totaalprijs']; ?>"><br>

    <label for="besteldatum">besteldatum:</label>
    <input type="date" id="besteldatum" name="Besteldatum" required value="<?php echo $row['besteldatum']; ?>"><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
    <footer>
        <?php include "../Include pages/Footer.php"; ?>
    </footer>
</body>
</html>

<?php
} else {
    echo "Geen BestellingID opgegeven<br>";
}
?>
