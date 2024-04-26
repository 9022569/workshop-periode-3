<?php
include_once "../Include pages/functions.php";

// Controleren of bestelling ID is opgegeven in de URL
if(isset($_GET['bestellingid']) && !empty($_GET['bestellingid'])) {
    // Bestel-ID ophalen uit de URL
    $bestelling_id = $_GET['bestellingid'];
    
    // Bestelling verwijderen uit de database
    try {
        deleteBestelling($bestelling_id);
        echo "Bestelling succesvol verwijderd.";
    } catch(Exception $e) {
        echo "Fout bij het verwijderen van bestelling: " . $e->getMessage();
    }
} else {
    echo "Bestelling ID niet opgegeven.";
}
header("Location: Bestellingen.php");
exit;
?>
