<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klachtenformulier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>Klachtenformulier</h1>
            <?php
            if(isset($_POST['submit'])) {
                //hier moet je als het goed is linken geen idee hoe dat werkt...
                echo "<p>Klacht verzonden!</p>";
            } else {
            ?>
            <form action="klachtenformulier.php" method="POST">
                <div class="row">
                    <div class="col-half">
                        <div class="form-group">
                            <label for="voornaam">Naam:</label>
                            <input type="text" id="voornaam" name="voornaam" required>
                        </div>
                    </div>
                    <div class="col-half">
                        <div class="form-group">
                            <label for="achternaam">Achternaam:</label>
                            <input type="text" id="achternaam" name="achternaam" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-half">
                        <div class="form-group">
                            <label for="woonplaats">Woonplaats:</label>
                            <input type="text" id="woonplaats" name="woonplaats" required>
                        </div>
                    </div>
                    <div class="col-half">
                        <div class="form-group">
                            <label for="postcode">Postcode:</label>
                            <input type="text" id="postcode" name="postcode" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="telefoonnummer">Telefoonnummer:</label>
                            <input type="tel" id="telefoonnummer" name="telefoonnummer" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="klacht">Klacht:</label>
                            <textarea id="klacht" name="klacht" rows="4" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="omschrijving">Omschrijving van de klacht:</label>
                            <textarea id="omschrijving" name="omschrijving" rows="4" required></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" name="submit">Verzenden</button>
            </form>
            <?php } ?>
        </div>
    </div>
</body>
</html>

