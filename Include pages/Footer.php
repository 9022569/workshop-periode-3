<footer>
    <img src="../Images/Mobile magic logo.png" alt="footer Logo" class="footer_logo">
    <table>
        <ul>
            <li id="Footer_Product_title">Most Popular Products</li>
            <?php
            include_once "../Include pages/functions.php";
            try {
                $products = GetfooterProducts();
                printCrudFooter($products);
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
            ?>
        </ul>
    <ul class="social-icons">
            <li id="Footer_social_title">Social Media</li>
            <li><a href="https://github.com"><img src="../Images/Github.png" alt="Github">Github</a></li>
            <li><a href="https://instagram.com"><img src="../Images/Instagram.png" alt="Instagram">Instagram</a></li>
            <li><a href="https://twitter.com"><img src="../Images/X.png" alt="Twitter">Twitter/X</a></li>
            <li><a href="mailto:Rawr@example.com"><img src="../Images/Gmail.png" alt="Email">Email</a></li>
    </ul>

</footer>