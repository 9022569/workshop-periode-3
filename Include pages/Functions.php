<?php
// functie: algemene functies tbv hergebruik

include_once "config.php";

// Define the connectDb() function only if it's not already defined
if (!function_exists('connectDb')) {
    function connectDb(){
        $servername = SERVERNAME;
        $username = USERNAME;
        $password = PASSWORD;
        $dbname = DATABASE;
       
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $conn;
        } 
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
if (!function_exists('GetFooterProducts')) {
    function GetFooterProducts(){
        $conn = connectDb();
        $sql = "SELECT productnaam FROM producten ORDER BY prijs DESC LIMIT 5";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
 function printCrudFooter($result){
    // haal de kolommen uit de eerste rij [0] van het array $result mbv array_keys
    $headers = array_keys($result[0]);
    foreach ($result as $row) {
        // print elke kolom uit de huidige rij
        echo "<ul>";
        foreach ($headers as $header) {
            echo "<li>" . $row[$header] . "</li>";
        }
        echo "</ul>";
        
     }
}

// Function to retrieve product data from the database
function GetProducts() {
    // Establish database connection
    $conn = connectDb();

    // Query to fetch product data
    $sql = "SELECT * FROM Producten";

    try {
        // Prepare and execute the query
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // Fetch all rows of product data
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Close statement and connection
        $stmt->closeCursor();
        $conn = null;

        // Return the array of product data
        return $products;
    } catch (PDOException $e) {
        // Error handling
        throw new Exception("Error retrieving products: " . $e->getMessage());
    }
}


// Function to print product data
function printCrudProducts($products) {
    if (empty($products)) {
        echo "<p>No products found.</p>";
    } else {
        echo "<div class='product-container'>";
        foreach ($products as $product) {
            echo "<div class='product'>";
            echo "<img src='" . $product['Foto'] . "' alt='" . $product['ProductNaam'] . "' class='product-image'>";
            echo "<div class='product-info'>";
            echo "<h3 class='product-name'>" . $product['ProductNaam'] . "</h3>";
            echo "<p class='product-brand'>Brand: " . $product['Merk'] . "</p>";
            echo "<p class='product-price'>Price: $" . $product['Prijs'] . "</p>";
            echo "<p class='product-description'>" . $product['Omschrijving'] . "</p>";
            echo "<a href='edit_product.php?id=" . $product['ProductID'] . "' class='edit-product-btn'>Edit</a>";
            echo "<button onclick='deleteProduct(" . $product['ProductID'] . ")' class='delete-product-btn'>Delete</button>";
            echo "<button onclick='addToCart(\"" . $product['ProductNaam'] . "\")' class='add-to-cart-btn'>Add to Cart</button>";
            echo "</div>"; 
            echo "</div>"; 
        }
        echo "</div>"; 
    }
}

// Function to search products by name
function searchProducts($search_term) {
    $conn = connectDb();
    $sql = "SELECT * FROM Producten WHERE ProductNaam LIKE :search_term";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':search_term', "%$search_term%", PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function displayBestellingenTable() {
    // Verbinding maken met de database
    $conn = connectDb();

    // SQL-query om bestellingen op te halen
    $sql = "SELECT * FROM bestellingen";

    // Uitvoeren van de query
    $stmt = $conn->query($sql);

    // Controleren of er resultaten zijn
    if ($stmt->rowCount() > 0) {
        // Output van gegevens in een tabel
        echo "<table>";
        echo "<tr><th>Bestelling Nummer</th><th>Product Naam</th><th>Leverancier Naam</th><th>Totaalprijs</th><th>Besteldatum</th></tr>";
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["bestellingnummer"] . "</td>";
            echo "<td>" . $row["productnaam"] . "</td>";
            echo "<td>" . $row["leveranciernaam"] . "</td>";
            echo "<td>" . $row["totaalprijs"] . "</td>";
            echo "<td>" . $row["besteldatum"] . "</td>";
            echo "<td><a href='Bestellingen_edit.php?bestellingid=" . $row['bestellingid'] . "'>" . "Wijzig</a></td>";
            echo "<td><a href='Bestellingen_delete.php?bestellingid=" . $row['bestellingid'] . "'>" . "Verwijderen</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Geen resultaten gevonden";
    }
}
// Functie om bestellingen te filteren op basis van productnaam of leveranciernaam
function displayFilteredBestellingenTable($search_keyword) {
    $conn = connectDb();
    
    // SQL-query om bestellingen op te halen op basis van productnaam of leveranciernaam
    $sql = "SELECT * FROM bestellingen WHERE productnaam LIKE :search_keyword OR leveranciernaam LIKE :search_keyword";
    
    // Uitvoeren van de query
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':search_keyword', "%$search_keyword%", PDO::PARAM_STR);
    $stmt->execute();
    
    // Controleren of er resultaten zijn
    if ($stmt->rowCount() > 0) {
        // Output van gegevens in een tabel
        echo "<table>";
        echo "<tr><th>Bestelling Nummer</th><th>Product Naam</th><th>Leverancier Naam</th><th>Totaalprijs</th><th>Besteldatum</th></tr>";
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["bestellingnummer"] . "</td>";
            echo "<td>" . $row["productnaam"] . "</td>";
            echo "<td>" . $row["leveranciernaam"] . "</td>";
            echo "<td>" . $row["totaalprijs"] . "</td>";
            echo "<td>" . $row["besteldatum"] . "</td>";
            echo "<td><a href='Bestellingen_edit.php?bestellingid=" . $row['bestellingid'] . "'>" . "Wijzig</a></td>";
            echo "<td><a href='Bestellingen_delete.php?bestellingid=" . $row['bestellingid'] . "'>" . "Verwijderen</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Geen resultaten gevonden voor zoekwoord: $search_keyword";
    }
}

// Functie om bestellingen bij te werken
function updateBestelling($data) {
    $conn = connectDb();
    
    // SQL-query om bestelling bij te werken
    $sql = "UPDATE bestellingen SET productnaam = :ProductNaam, leveranciernaam = :Leveranciernaam, totaalprijs = :Totaalprijs, besteldatum = :Besteldatum WHERE bestellingid = :BestellingID";
    
    try {
        // Bereid de SQL-statement voor
        $stmt = $conn->prepare($sql);
        
        // Bind parameters
        $stmt->bindParam(':ProductNaam', $data['ProductNaam']);
        $stmt->bindParam(':Leveranciernaam', $data['Leveranciernaam']);
        $stmt->bindParam(':Totaalprijs', $data['Totaalprijs']);
        $stmt->bindParam(':Besteldatum', $data['Besteldatum']);
        $stmt->bindParam(':BestellingID', $data['BestellingID']);
        
        // Voer de statement uit
        $stmt->execute();
        
        // Controleer of er rijen zijn beïnvloed
        if ($stmt->rowCount() > 0) {
            return true; // Succesvol bijgewerkt
        } else {
            return false; // Geen rijen beïnvloed, waarschijnlijk geen wijziging gemaakt
        }
    } catch (PDOException $e) {
        // Foutafhandeling
        throw new Exception("Fout bijwerken van bestelling: " . $e->getMessage());
    }
}

// Functie om bestelgegevens op te halen aan de hand van ID
function getBestelling($BestellingID) {
    $conn = connectDb();
    
    // Voorbereiden van de SQL-query om bestelling op te halen aan de hand van ID
    $sql = "SELECT * FROM bestellingen WHERE bestellingid = :BestellingID";
    
    try {
        // Voorbereiden van de statement
        $stmt = $conn->prepare($sql);
        
        // Parameter binden
        $stmt->bindParam(':BestellingID', $BestellingID);
        
        // Uitvoeren van de statement
        $stmt->execute();
        
        // Bestelgegevens ophalen
        $bestelling = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $bestelling;
    } catch (PDOException $e) {
        // Foutafhandeling
        throw new Exception("Fout bij ophalen van bestelling: " . $e->getMessage());
    }
}

// Functie om een nieuwe bestelling toe te voegen aan de database
function addBestelling($Bestellingnummer, $ProductID, $LeverancierID, $Productnaam, $Leveranciernaam, $Totaalprijs, $Besteldatum) {
    // Verbinding maken met de database
    $conn = connectDb();

    // SQL-query om een nieuwe bestelling toe te voegen
    $sql = "INSERT INTO bestellingen (bestellingnummer, productid, leverancierid, productnaam, leveranciernaam, totaalprijs, besteldatum) 
            VALUES (:Bestellingnummer, :ProductID, :LeverancierID, :Productnaam, :Leveranciernaam, :Totaalprijs, :Besteldatum)";
    
    try {
        // Voorbereiden van de SQL-statement
        $stmt = $conn->prepare($sql);

        // Bind de parameters
        $stmt->bindParam(':Bestellingnummer', $Bestellingnummer);
        $stmt->bindParam(':ProductID', $ProductID);
        $stmt->bindParam(':LeverancierID', $LeverancierID);
        $stmt->bindParam(':Productnaam', $Productnaam);
        $stmt->bindParam(':Leveranciernaam', $Leveranciernaam);
        $stmt->bindParam(':Totaalprijs', $Totaalprijs);
        $stmt->bindParam(':Besteldatum', $Besteldatum);

        // Uitvoeren van de statement
        $stmt->execute();
    } catch (PDOException $e) {
        // Foutafhandeling
        throw new Exception("Fout bij het toevoegen van bestelling: " . $e->getMessage());
    }
}

// Functie om een bestelling te verwijderen op basis van bestelling ID
function deleteBestelling($bestelling_id) {
    $conn = connectDb();
    
    try {
        // Voorbereiden van de SQL-query om bestelling te verwijderen op basis van bestelling ID
        $sql = "DELETE FROM bestellingen WHERE bestellingid = :bestelling_id";
        
        // Voorbereiden van de statement
        $stmt = $conn->prepare($sql);
        
        // Parameter binden
        $stmt->bindParam(':bestelling_id', $bestelling_id);
        
        // Uitvoeren van de statement
        $stmt->execute();
        
        // Controleren of er rijen zijn verwijderd
        if ($stmt->rowCount() > 0) {
            return true; // Succesvol verwijderd
        } else {
            return false; // Geen rijen verwijderd, bestelling ID mogelijk niet gevonden
        }
    } catch (PDOException $e) {
        // Foutafhandeling
        throw new Exception("Fout bij het verwijderen van bestelling: " . $e->getMessage());
    }
}

// Function to update product data
function updateProduct($data) {
    $conn = connectDb();
    
    // Prepare SQL statement to update product
    $sql = "UPDATE Producten SET ProductNaam = :ProductNaam, Merk = :Merk, Prijs = :Prijs, Omschrijving = :Omschrijving WHERE ProductID = :ProductID";
    
    try {
        // Prepare the statement
        $stmt = $conn->prepare($sql);
        
        // Bind parameters
        $stmt->bindParam(':ProductNaam', $data['ProductNaam']);
        $stmt->bindParam(':Merk', $data['Merk']);
        $stmt->bindParam(':Prijs', $data['Prijs']);
        $stmt->bindParam(':Omschrijving', $data['Omschrijving']);
        $stmt->bindParam(':ProductID', $data['ProductID']);
        
        // Execute the statement
        $stmt->execute();
        
        // Check if any rows were affected
        if ($stmt->rowCount() > 0) {
            return true; // Updated successfully
        } else {
            return false; // No rows affected, probably no change made
        }
    } catch (PDOException $e) {
        // Error handling
        throw new Exception("Error updating product: " . $e->getMessage());
    }
}

// Function to get product data by ID
function getProduct($ProductID) {
    $conn = connectDb();
    
    // Prepare SQL statement to select product by ID
    $sql = "SELECT * FROM Producten WHERE ProductID = :ProductID";
    
    try {
        // Prepare the statement
        $stmt = $conn->prepare($sql);
        
        // Bind parameter
        $stmt->bindParam(':ProductID', $ProductID);
        
        // Execute the statement
        $stmt->execute();
        
        // Fetch the product data
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $product;
    } catch (PDOException $e) {
        // Error handling
        throw new Exception("Error retrieving product: " . $e->getMessage());
    }
}
// Function to delete a product by ID
function deleteProduct($product_id) {
    $conn = connectDb();
    
    // Prepare SQL statement to delete product
    $sql = "DELETE FROM Producten WHERE ProductID = :ProductID";
    
    try {
        // Prepare the statement
        $stmt = $conn->prepare($sql);
        
        // Bind parameter
        $stmt->bindParam(':ProductID', $product_id);
        
        // Execute the statement
        $stmt->execute();
        
        // Check if any rows were affected
        if ($stmt->rowCount() > 0) {
            return true; // Deleted successfully
        } else {
            return false; // No rows affected, product may not exist
        }
    } catch (PDOException $e) {
        // Error handling
        throw new Exception("Error deleting product: " . $e->getMessage());
    }
}
