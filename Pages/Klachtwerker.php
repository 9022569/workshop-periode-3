<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <nav>
        <?php include "../Include pages/Navmenu.php"; ?>
    </nav>

    <main class="main-form">
    <div class="form-container">
        <form class="form" action="" method="post">
        <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required><br><br>

            <label for="postcode">Postcode:</label>
            <input type="text" id="postcode" name="postcode" required><br><br>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select><br><br>

            <label for="complaint">Your complaint about employee:</label><br>
            <textarea id="complaint" name="complaint" rows="4" cols="50" required></textarea><br><br>

            <label for="suggestion">What could the employee do better?:</label><br>
            <textarea id="suggestion" name="suggestion" rows="4" cols="50" required></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</main>

<footer>
    <?php include "../Include pages/Footer.php"; ?>
</footer>

</body>
</html>