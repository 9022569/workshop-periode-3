<footer>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-o7GpxMyE/Id0mFrO76BHgkDTM4lLzbi3LGaTOhcuEQo5wOlnXgMmYbGzSdHXdQQb3PGBRwXUvxRnG8vO7ZGuGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <img src="../Images/Mobile magic logo.png" alt="footer Logo" class="footer_logo">
    <table>
        <ul>
            <li id="Footer_Product_title">Most Popular Products</li>
        
            <?php
            include "functions.php";
            try {
                $products = getProducts();
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