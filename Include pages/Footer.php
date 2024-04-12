<footer>
    <img src="../Images/Mobile magic logo.png" alt="footer Logo" class="footer_logo">
    <div class="footer_list_1">
    </div>
    <table>
        <tr class="footer_items">
            <th>Most Expensive Products</th>
        </tr>
        <?php
        include "functions.php";
        try {
            $products = getProducts();
            printCrudFooter($products);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
        <tr class="footer_socials"> 
            <th>Our Socials</th>

            <td><a href="https://www.Github.com">"><img src="../Images/Github logo.png" alt="Github logo" class="footer_logo">Github</a></td>
            <td><a href="https://www.twitter.com"><img src="../Images/Twitter logo.png" alt="Twitter logo" class="footer_logo">Twitter/X</a></td>
            <td><a href="https://www.instagram.com"><img src="../Images/Instagram logo.png" alt="Instagram logo" class="footer_logo">Instagram</a></td>
            <td><a href="https://www.E-mail.com"><img src="../Images/E-mail logo.png" alt="E-mail logo" class="footer_logo"> E-mail</a></td>
        </tr>
        

    </table>
</footer>