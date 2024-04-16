<!DOCTYPE html>
<!-- Klachtwerker.php 
    Author: Ethan
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Complaint Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include "../Include pages/Navmenu.php"; ?>
    </header>
    <div class="form-container">
        <form action="" method="POST" class="form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="employee_id">Employee ID:</label>
            <input type="text" id="employee_id" name="employee_id" required><br><br>

            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required><br><br>

            <label for="complaint">Complaint Description:</label><br>
            <textarea id="complaint" name="complaint" rows="4" cols="50" required></textarea><br><br>

            <label for="suggestion">Suggested Improvement:</label><br>
            <textarea id="suggestion" name="suggestion" rows="4" cols="50" required></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
    
</body>
<footer>
        <?php include "../Include pages/Footer.php"; ?>
    </footer>
</html>
