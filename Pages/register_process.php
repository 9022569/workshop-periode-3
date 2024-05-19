<?php
// register_process.php
include '../Include pages/functions.php';
$conn = connectDb();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user inputs
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Validate inputs (basic validation, consider more extensive validation)
    if (!empty($username) && !empty($password) && !empty($email)) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute SQL statement to insert new user
        try {
            $stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
            $stmt->execute([$username, $hashed_password, $email]);

            // Registration successful, redirect to login page
            header("Location: login.php");
            exit();
        } catch(PDOException $e) {
            // Error during insertion
            echo "Error: " . $e->getMessage();
        }
    } else {
        // Missing input
        echo "All fields are required.";
    }
} else {
    // Not a POST request
    echo "Invalid request method.";
}
?>
