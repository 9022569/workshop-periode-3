<!DOCTYPE html>

<!-- klachtweb_process.php 
    Author: Dylan
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Form Submission</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include "../Include pages/navmenu.php"; ?>
    </header>
    <div class="container">
        <div class="klacht-header"> 
            <h1>Complaint Form Submission</h1>
        </div>
        <div class="klacht-content"> 
            <h2>Submitted Information:</h2>
            <p>Name: <?php echo $_POST['name']; ?></p>
            <p>Phone Number: <?php echo $_POST['phone']; ?></p>
            <p>Postcode: <?php echo $_POST['postcode']; ?></p>
            <p>Gender: <?php echo $_POST['gender']; ?></p>
            <p>Complaint Description:<br><?php echo $_POST['complaint']; ?></p>
            <p>Suggested Website Change:<br><?php echo $_POST['suggestion']; ?></p>
        </div>
        <div class="klacht-footer">
            Thank you for your feedback!
        </div>
    </div>
    <footer>
        <?php include "../Include pages/Footer.php"; ?>
    </footer>
</body>
</html>
