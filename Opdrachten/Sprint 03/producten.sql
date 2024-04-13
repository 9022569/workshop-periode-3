-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2024 at 02:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile magic`
--

-- --------------------------------------------------------

--
-- Table structure for table `producten`
--

CREATE TABLE `producten` (
  `ProductID` int(11) NOT NULL,
  `LeveranciersID` int(11) DEFAULT NULL,
  `ProductNaam` varchar(255) NOT NULL,
  `Merk` varchar(100) NOT NULL,
  `Prijs` decimal(10,2) NOT NULL,
  `Omschrijving` text DEFAULT NULL,
  `Foto` varchar(255) DEFAULT NULL,
  `voorraad` int(11) NOT NULL,
  `Productkleur` varchar(50) DEFAULT NULL,
  `Capaciteit` varchar(20) DEFAULT NULL,
  `RAM` varchar(10) DEFAULT NULL,
  `Schermgrootte` varchar(20) DEFAULT NULL,
  `Camera` varchar(100) DEFAULT NULL,
  `OS` varchar(50) DEFAULT NULL,
  `Uitkomstjaar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producten`
--

INSERT INTO `producten` (`ProductID`, `LeveranciersID`, `ProductNaam`, `Merk`, `Prijs`, `Omschrijving`, `Foto`, `voorraad`, `Productkleur`, `Capaciteit`, `RAM`, `Schermgrootte`, `Camera`, `OS`, `Uitkomstjaar`) VALUES
(1, 2, 'Smartphone A', 'Samsung', 599.99, 'Een geweldige smartphone met indrukwekkende functies.', 'https://example.com/smartphone_a.jpg', 100, 'Zwart', '128GB', '6GB', '6.4 inches', '48MP + 12MP', 'Android', '2014-06-15'),
(2, 3, 'Smartphone B', 'Apple', 799.99, 'De nieuwste iPhone met krachtige prestaties.', 'https://example.com/smartphone_b.jpg', 50, 'Zilver', '256GB', '8GB', '6.7 inches', '12MP + 12MP + 12MP', 'iOS', '2014-06-05'),
(3, 4, 'Smartphone C', 'OnePlus', 699.99, 'Een betaalbare smartphone met vlaggenschipfuncties.', 'https://example.com/smartphone_c.jpg', 75, 'Blauw', '256GB', '12GB', '6.5 inches', '64MP + 16MP + 8MP', 'Android', '2014-08-20'),
(4, 5, 'Smartphone D', 'Xiaomi', 499.99, 'Een krachtige smartphone voor een betaalbare prijs.', 'https://example.com/smartphone_d.jpg', 120, 'Zwart', '128GB', '6GB', '6.3 inches', '48MP + 8MP + 5MP', 'Android', '2015-10-04'),
(5, 1, 'Smartphone E', 'Huawei', 649.99, 'Een elegante smartphone met geavanceerde camerafuncties.', 'https://example.com/smartphone_e.jpg', 80, 'Zilver', '256GB', '8GB', '6.6 inches', '50MP + 20MP + 12MP', 'Android', '2015-09-30'),
(6, 2, 'Smartphone F', 'Sony', 749.99, 'Een waterdichte smartphone met een prachtig OLED-scherm.', 'https://example.com/smartphone_f.jpg', 60, 'Roze', '128GB', '8GB', '6.1 inches', '64MP + 12MP + 8MP', 'Android', '2017-04-30'),
(7, 3, 'Smartphone G', 'Google', 899.99, 'Een premium smartphone met de nieuwste AI-functies.', 'https://example.com/smartphone_g.jpg', 40, 'Wit', '512GB', '12GB', '6.8 inches', '12.2MP + 16MP + 12.2MP', 'Android', '2015-04-12'),
(8, 4, 'Smartphone H', 'Motorola', 399.99, 'Een robuuste smartphone met een lange batterijduur.', 'https://example.com/smartphone_h.jpg', 90, 'Groen', '64GB', '4GB', '6.0 inches', '48MP + 8MP', 'Android', '2015-04-09'),
(9, 5, 'Smartphone I', 'Nokia', 299.99, 'Een betrouwbare smartphone met een klassiek ontwerp.', 'https://example.com/smartphone_i.jpg', 150, 'Zwart', '32GB', '3GB', '5.5 inches', '16MP + 8MP', 'Android', '2016-05-16'),
(10, 1, 'Smartphone J', 'LG', 599.99, 'Een innovatieve smartphone met een zwevende lenscamera.', 'https://example.com/smartphone_j.jpg', 70, 'Blauw', '128GB', '6GB', '6.2 inches', '64MP + 12MP + 5MP', 'Android', '2016-12-05'),
(11, 2, 'Smartphone K', 'Asus', 449.99, 'Een krachtige gaming-smartphone met een verversingssnelheid van 144 Hz.', 'https://example.com/smartphone_k.jpg', 80, 'Rood', '256GB', '12GB', '6.78 inches', '64MP + 13MP + 5MP', 'Android', '2016-05-24'),
(12, 3, 'Smartphone L', 'Realme', 349.99, 'Een budgetvriendelijke smartphone met snelle prestaties.', 'https://example.com/smartphone_l.jpg', 110, 'Zwart', '128GB', '4GB', '6.5 inches', '48MP + 8MP + 2MP', 'Android', '2017-01-18'),
(13, 4, 'Smartphone M', 'Oppo', 599.99, 'Een stijlvolle smartphone met een uitschuifbare selfiecamera.', 'https://example.com/smartphone_m.jpg', 60, 'Goud', '256GB', '8GB', '6.4 inches', '48MP + 20MP + 2MP', 'Android', '2016-12-05'),
(14, 5, 'Smartphone N', 'ZTE', 299.99, 'Een eenvoudige en betaalbare smartphone voor dagelijks gebruik.', 'https://example.com/smartphone_n.jpg', 120, 'Zwart', '64GB', '4GB', '6.1 inches', '16MP + 8MP + 2MP', 'Android', '2014-05-14'),
(15, 1, 'Smartphone O', 'Lenovo', 399.99, 'Een veelzijdige smartphone met een groot scherm en lange batterijduur.', 'https://example.com/smartphone_o.jpg', 100, 'Blauw', '128GB', '6GB', '6.7 inches', '48MP + 16MP + 5MP', 'Android', '2016-11-24'),
(16, 2, 'Smartphone P', 'Vivo', 549.99, 'Een elegante smartphone met geavanceerde gezichtsherkenningstechnologie.', 'https://example.com/smartphone_p.jpg', 80, 'Zwart', '256GB', '8GB', '6.44 inches', '50MP + 8MP + 2MP', 'Android', '2017-04-08'),
(17, 3, 'Smartphone Q', 'Honor', 299.99, 'Een betaalbare smartphone met een hoogwaardige camera.', 'https://example.com/smartphone_q.jpg', 130, 'Grijs', '64GB', '4GB', '6.3 inches', '48MP + 8MP + 2MP', 'Android', '2016-07-08'),
(18, 4, 'Smartphone R', 'Meizu', 399.99, 'Een stijlvolle smartphone met een uniek ontwerp en krachtige prestaties.', 'https://example.com/smartphone_r.jpg', 90, 'Rood', '128GB', '6GB', '6.1 inches', '48MP + 12MP + 5MP', 'Android', '2016-08-24'),
(19, 5, 'Smartphone S', 'BlackBerry', 499.99, 'Een veilige en betrouwbare smartphone met een fysiek toetsenbord.', 'https://example.com/smartphone_s.jpg', 70, 'Zwart', '128GB', '6GB', '4.5 inches', '12MP + 8MP', 'Android', '2014-07-20'),
(20, 1, 'Smartphone T', 'Razer', 699.99, 'Een krachtige gaming-smartphone met een verversingssnelheid van 120 Hz.', 'https://example.com/smartphone_t.jpg', 60, 'Zwart', '256GB', '12GB', '6.65 inches', '64MP + 13MP + 2MP', 'Android', '2018-08-31'),
(21, 2, 'Smartphone U', 'CAT', 599.99, 'Een robuuste smartphone die bestand is tegen extreme omstandigheden.', 'https://example.com/smartphone_u.jpg', 80, 'Geel', '128GB', '6GB', '5.5 inches', '12MP + 8MP', 'Android', '2015-07-22'),
(22, 3, 'Smartphone V', 'TCL', 449.99, 'Een betaalbare smartphone met een helder en kleurrijk scherm.', 'https://example.com/smartphone_v.jpg', 100, 'Blauw', '128GB', '4GB', '6.22 inches', '48MP + 8MP + 2MP', 'Android', '2017-08-19'),
(23, 4, 'Smartphone W', 'Sharp', 499.99, 'Een compacte smartphone met een scherp en helder display.', 'https://example.com/smartphone_w.jpg', 90, 'Wit', '256GB', '6GB', '5.9 inches', '12MP + 8MP', 'Android', '2017-05-17'),
(24, 5, 'Smartphone X', 'Alcatel', 299.99, 'Een eenvoudige en gebruiksvriendelijke smartphone voor beginners.', 'https://example.com/smartphone_x.jpg', 120, 'Zwart', '64GB', '3GB', '5.7 inches', '16MP + 5MP', 'Android', '2014-11-04'),
(25, 1, 'Smartphone Y', 'HMD Global', 399.99, 'Een stijlvolle smartphone met een lange batterijduur en snelle updates.', 'https://example.com/smartphone_y.jpg', 80, 'Goud', '128GB', '4GB', '6.2 inches', '48MP + 8MP + 5MP', 'Android', '2017-12-11'),
(26, 2, 'Smartphone Z', 'ZUK', 449.99, 'Een krachtige smartphone met een uniek ontwerp en geavanceerde functies.', 'https://example.com/smartphone_z.jpg', 70, 'Zwart', '256GB', '8GB', '6.3 inches', '64MP + 16MP + 8MP', 'Android', '2016-01-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `FK_LeveranciersID` (`LeveranciersID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producten`
--
ALTER TABLE `producten`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `producten`
--
ALTER TABLE `producten`
  ADD CONSTRAINT `FK_LeveranciersID` FOREIGN KEY (`LeveranciersID`) REFERENCES `leveranciers` (`leveranciersid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
