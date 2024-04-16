<?php
// Include database connection file
include_once "../Include pages/Config.php";
include_once "../include pages/Functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $productnaam = $_POST['Productnaam'];
    $merk = $_POST['Merk'];
    $prijs = $_POST['Prijs'];
    $omschrijving = $_POST['Omschrijving'];
    $foto = $_POST['Foto'];
    $stock = $_POST['stock'];
    $color = $_POST['color'];
    $capacity = $_POST['capacity'];
    $ram = $_POST['ram'];
    $screen_size = $_POST['screen_size'];
    $camera = $_POST['camera'];
    $os = $_POST['os'];
    $release_year = $_POST['release_year'];

    try {
        // Establish database connection
        $conn = connectDb();

        // Prepare SQL statement to insert product data
        $sql = "INSERT INTO Producten (ProductNaam, Merk, Prijs, omschrijving, foto, Voorraad, Productkleur, Capaciteit, RAM, Schermgrootte, Camera, OS, Uitkomstjaar) 
                VALUES (:Productnaam, :Merk, :Prijs, :Omschrijving, :foto, :Voorraad, :Productkleur, :Capaciteit, :RAM, :Schermgrootte, :Camera, :OS, :Uitkomstjaar)";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':Productnaam', $productnaam);
        $stmt->bindParam(':Merk', $merk);
        $stmt->bindParam(':Prijs', $prijs);
        $stmt->bindParam(':Omschrijving', $omschrijving);
        $stmt->bindParam(':foto', $foto);
        $stmt->bindParam(':Voorraad', $stock);
        $stmt->bindParam(':Productkleur', $color);
        $stmt->bindParam(':Capaciteit', $capacity);
        $stmt->bindParam(':RAM', $ram);
        $stmt->bindParam(':Schermgrootte', $screen_size);
        $stmt->bindParam(':Camera', $camera);
        $stmt->bindParam(':OS', $os);
        $stmt->bindParam(':Uitkomstjaar', $release_year);

        // Execute the statement
        $stmt->execute();

        // Close statement and connection
        $stmt->closeCursor();
        $conn = null;

        // Redirect back to the form page with a success message
        header("Location: Insert_product.php?success=1");
        exit();
    } catch (PDOException $e) {
        // Redirect back to the form page with an error message
        header("Location: Insert_product.php?error=" . urlencode($e->getMessage()));
        exit();
    }
} else {
    // Redirect back to the form page if accessed directly
    header("Location: Insert_product.php");
    exit();
}
?>
