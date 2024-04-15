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
include_once "config.php";
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
    // Include config file
    include_once "config.php";

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
            echo "<button onclick='addToCart(\"" . $product['ProductNaam'] . "\")' class='add-to-cart-btn'>Add to Cart</button>";
            echo "</div>"; // Closing product-info div
            echo "</div>"; // Closing product div
        }
        echo "</div>"; // Closing product-container div
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

// Function to get product details by ID
function getProductById($product_id) {
    $conn = connectDb();
    $sql = "SELECT * FROM Producten WHERE id = :product_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':product_id', $product_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}