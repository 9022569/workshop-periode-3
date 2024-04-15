<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complimenten form</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<header>
    <nav>
        <?php include "../Include pages/navmenu.php"; ?>
    </nav>
</header>

<main class="main-form">
    <div class="form-container">
        <form class="form" action="" method="post">
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" required>

            <label for="message">Bericht:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <input type="submit" value="Verstuur">
        </form>
    </div>
</main>

</body>
</html>
