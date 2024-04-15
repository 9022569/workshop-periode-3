<!DOCTYPE html>

<!-- Klachtweb.php 
    Author: Dylan
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include "../Include pages/Navmenu.php"; ?>
    </header>
    <div class="form-container">
        <form action="Klachtweb_process.php" method="POST" class="form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required><br><br>

            <label for="postcode">Postcode:</label>
            <input type="text" id="postcode" name="postcode" required><br><br>
            
            <label for="complaint">Complaint Description:</label><br>
            <textarea id="complaint" name="complaint" rows="4" cols="50" required></textarea><br><br>

            <label for="suggestion">Suggested Website Change:</label><br>
            <textarea id="suggestion" name="suggestion" rows="4" cols="50" required></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
    <footer>
        <?php include "../Include pages/Footer.php"; ?>
    </footer>
</body>
</html>
