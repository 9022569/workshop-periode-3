<?php
// login_process.php
session_start();

// DB connection
include '../Include pages/functions.php';
$conn = connectDb();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user inputs
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Validate inputs (this is a basic example, consider more validation and sanitization)
    if (!empty($username) && !empty($password) && !empty($email)) {
        // Prepare and execute SQL statement to fetch user data
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND email = ?");
        $stmt->execute([$username, $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Password is correct, start a session and redirect to a protected page
                $_SESSION['userid'] = $user['userid'];
                $_SESSION['username'] = $user['username'];
                header("Location: userpage.php");
                exit();
            } else {
                // Invalid password
                echo "Invalid password.";
            }
        } else {
            // No user found
            echo "No user found with the provided details.";
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
