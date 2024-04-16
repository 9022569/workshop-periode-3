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

function getProductById($pdo, $productID) {
    // Prepare SQL statement
    $stmt = $pdo->prepare("SELECT * FROM Producten WHERE ProductID = :productID");

    // Bind parameter
    $stmt->bindParam(':productID', $productID);

    // Execute statement
    $stmt->execute();

    // Fetch product data
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    // Return product data
    return $product;
}


// Function to handle login process
function loginUser($username, $password) {
    // Get database connection
    $conn = connectDb();
    
    // Prepare and execute SQL statement to fetch user data
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
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
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Geen resultaten gevonden";
    }
}
