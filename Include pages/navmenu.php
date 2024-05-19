<?php
session_start();
?>
<nav class="nav">
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="Producten.php">Check out our products here</a></li>
        <li><a href="Medewerkers.php">Meet our team</a></li>
        <li><a href="geschiedenis.php">Our history</a></li>
        <li><a href="Doelen.php">Our goals</a></li>
        <li class="dropdown">
            <button class="dropbtn">Klachten of complimenten</button>
            <div class="dropdown-content">
                <a href="complimenten.php">Complimenteren</a>
                <a href="klachtweb.php">Klacht over website</a>
                <a href="klachtproduct.php">Klacht over product</a>
                <a href="klachtwerker.php">Klacht over medewerker</a>
            </div>
        </li>
        <li><a href="Bestellingen.php">Your orders</a></li>
        <?php if (isset($_SESSION['userid'])): ?>
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        <?php endif; ?>
    </ul>
</nav>
