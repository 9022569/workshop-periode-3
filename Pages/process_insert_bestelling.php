<?php
// process_insert_bestelling.php

// Inclusie van de vereiste bestanden en functies
include_once "../Include pages/functions.php";

// Test of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ontvangen van de formuliergegevens
    $Bestellingnummer = $_POST["Bestellingnummer"];
    $ProductID = $_POST["ProductID"];
    $LeverancierID = $_POST["LeverancierID"];
    $Productnaam = $_POST["Productnaam"];
    $Leveranciernaam = $_POST["Leveranciernaam"];
    $Totaalprijs = $_POST["Totaalprijs"];
    $Besteldatum = $_POST["Besteldatum"];

    // Voeg de bestelling toe aan de database
    try {
        addBestelling($Bestellingnummer, $ProductID, $LeverancierID, $Productnaam, $Leveranciernaam, $Totaalprijs, $Besteldatum);
        // Als de invoeging succesvol is, stuur de gebruiker door naar de bestellingenpagina
        header("Location: Bestellingen.php");
        exit();
    } catch (Exception $e) {
        // Als er een fout optreedt, geef een foutmelding weer
        echo "Fout bij het toevoegen van bestelling: " . $e->getMessage();
    }
} else {
    // Als het formulier niet is ingediend via POST, toon een foutmelding
    echo "Geen gegevens ontvangen van het formulier.";
}
?>
