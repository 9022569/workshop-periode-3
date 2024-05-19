<!-- register.php 
    Author: Ethan
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include "../Include pages/Navmenu.php"; ?>
    </header>
    <div class="form-container">
        <form action="register_process.php" method="POST" class="form">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <input type="submit" value="Register">
        </form>
    </div>
</body>
<footer>
    <?php include "../Include pages/Footer.php"; ?>
</footer>
</html>
