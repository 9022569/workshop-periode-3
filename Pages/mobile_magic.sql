-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 01:22 PM
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
-- Table structure for table `bestellingen`
--

CREATE TABLE `bestellingen` (
  `bestellingid` int(11) NOT NULL,
  `bestellingnummer` varchar(255) DEFAULT NULL,
  `productid` int(11) DEFAULT NULL,
  `leverancierid` int(11) DEFAULT NULL,
  `productnaam` varchar(255) DEFAULT NULL,
  `leveranciernaam` varchar(255) DEFAULT NULL,
  `totaalprijs` decimal(10,2) DEFAULT NULL,
  `besteldatum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bestellingen`
--

INSERT INTO `bestellingen` (`bestellingid`, `bestellingnummer`, `productid`, `leverancierid`, `productnaam`, `leveranciernaam`, `totaalprijs`, `besteldatum`) VALUES
(1, 'ORD001', 1, 1, 'Smartphone A', 'TechGlobe', 799.99, '2024-01-15'),
(2, 'ORD002', 2, 2, 'Smartphone B', 'ElectroTech', 899.99, '2024-01-16'),
(3, 'ORD003', 3, 3, 'Smartphone C', 'GadgetWorld', 699.99, '2024-01-17'),
(4, 'ORD004', 4, 4, 'Smartphone D', 'TechZone', 999.99, '2024-01-18'),
(5, 'ORD005', 5, 5, 'Smartphone E', 'SmartDevices', 599.99, '2024-01-19'),
(6, 'ORD006', 6, 1, 'Smartphone F', 'TechGlobe', 849.99, '2024-01-20'),
(7, 'ORD007', 7, 2, 'Smartphone G', 'ElectroTech', 749.99, '2024-01-21'),
(8, 'ORD008', 8, 3, 'Smartphone H', 'GadgetWorld', 1099.99, '2024-01-22'),
(9, 'ORD009', 9, 4, 'Smartphone I', 'TechZone', 799.99, '2024-01-23'),
(10, 'ORD010', 10, 5, 'Smartphone J', 'SmartDevices', 699.99, '2024-01-24'),
(11, 'ORD011', 11, 1, 'Smartphone K', 'TechGlobe', 999.99, '2024-01-25'),
(12, 'ORD012', 12, 2, 'Smartphone L', 'ElectroTech', 899.99, '2024-01-26'),
(13, 'ORD013', 13, 3, 'Smartphone M', 'GadgetWorld', 749.99, '2024-01-27'),
(14, 'ORD014', 14, 4, 'Smartphone N', 'TechZone', 1199.99, '2024-01-28'),
(15, 'ORD015', 15, 5, 'Smartphone O', 'SmartDevices', 649.99, '2024-01-29'),
(16, 'ORD016', 16, 1, 'Smartphone P', 'TechGlobe', 899.99, '2024-01-30'),
(17, 'ORD017', 17, 2, 'Smartphone Q', 'ElectroTech', 799.99, '2024-01-31'),
(18, 'ORD018', 18, 3, 'Smartphone R', 'GadgetWorld', 999.99, '2024-02-01'),
(19, 'ORD019', 19, 4, 'Smartphone S', 'TechZone', 749.99, '2024-02-02'),
(20, 'ORD020', 20, 5, 'Smartphone T', 'SmartDevices', 1099.99, '2024-02-03'),
(21, 'ORD021', 21, 1, 'Smartphone U', 'TechGlobe', 799.99, '2024-02-04'),
(22, 'ORD022', 22, 2, 'Smartphone V', 'ElectroTech', 849.99, '2024-02-05'),
(23, 'ORD023', 23, 3, 'Smartphone W', 'GadgetWorld', 1199.99, '2024-02-06'),
(24, 'ORD024', 24, 4, 'Smartphone X', 'TechZone', 699.99, '2024-02-07'),
(25, 'ORD025', 25, 5, 'Smartphone Y', 'SmartDevices', 999.99, '2024-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `klanten`
--

CREATE TABLE `klanten` (
  `Klantid` int(255) NOT NULL,
  `Voornaam` varchar(255) NOT NULL,
  `Achternaam` varchar(255) NOT NULL,
  `Adress` varchar(255) NOT NULL,
  `Postcode` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Telefoonnummer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klanten`
--

INSERT INTO `klanten` (`Klantid`, `Voornaam`, `Achternaam`, `Adress`, `Postcode`, `Email`, `Telefoonnummer`) VALUES
(1, 'John', 'Doe', '123 Main St', '12345', 'john@example.com', '555-123-4567'),
(2, 'Jane', 'Smith', '456 Elm St', '54321', 'jane@example.com', '555-987-6543'),
(3, 'Michael', 'Johnson', '789 Oak St', '67890', 'michael@example.com', '555-456-7890'),
(4, 'Emily', 'Brown', '101 Maple St', '09876', 'emily@example.com', '555-321-0987'),
(5, 'David', 'Williams', '202 Pine St', '54321', 'david@example.com', '555-789-0123'),
(6, 'Sarah', 'Jones', '303 Cedar St', '13579', 'sarah@example.com', '555-234-5678'),
(7, 'Matthew', 'Garcia', '404 Birch St', '24680', 'matthew@example.com', '555-890-1234'),
(8, 'Jessica', 'Martinez', '505 Walnut St', '98765', 'jessica@example.com', '555-567-8901'),
(9, 'Christopher', 'Lopez', '606 Spruce St', '13579', 'christopher@example.com', '555-012-3456'),
(10, 'Ashley', 'Hernandez', '707 Chestnut St', '80210', 'ashley@example.com', '555-789-0123'),
(11, 'Daniel', 'Gonzalez', '808 Cedar St', '98765', 'daniel@example.com', '555-345-6789'),
(12, 'Brittany', 'Wilson', '909 Pine St', '35791', 'brittany@example.com', '555-901-2345'),
(13, 'Andrew', 'Walker', '111 Oak St', '02468', 'andrew@example.com', '555-678-9012'),
(14, 'Samantha', 'Perez', '222 Maple St', '13579', 'samantha@example.com', '555-123-4567'),
(15, 'Joseph', 'Robinson', '333 Elm St', '86420', 'joseph@example.com', '555-890-1234'),
(16, 'Lauren', 'Taylor', '444 Walnut St', '97531', 'lauren@example.com', '555-234-5678'),
(17, 'Nicholas', 'Thomas', '555 Cedar St', '24680', 'nicholas@example.com', '555-567-8901'),
(18, 'Olivia', 'Moore', '666 Birch St', '13579', 'olivia@example.com', '555-012-3456'),
(19, 'Jacob', 'Jackson', '777 Pine St', '80210', 'jacob@example.com', '555-789-0123'),
(20, 'Elizabeth', 'White', '888 Oak St', '98765', 'elizabeth@example.com', '555-345-6789'),
(21, 'William', 'Harris', '999 Maple St', '35791', 'william@example.com', '555-901-2345'),
(22, 'Amanda', 'Clark', '1212 Elm St', '97531', 'amanda@example.com', '555-678-9012'),
(23, 'Tyler', 'Lewis', '1313 Walnut St', '02468', 'tyler@example.com', '555-123-4567'),
(24, 'Taylor', 'Lee', '1414 Cedar St', '13579', 'taylor@example.com', '555-890-1234'),
(25, 'Megan', 'Walker', '1515 Birch St', '24680', 'megan@example.com', '555-234-5678'),
(26, 'Ryan', 'Hall', '1616 Pine St', '35791', 'ryan@example.com', '555-567-8901'),
(27, 'Kayla', 'Young', '1717 Oak St', '80210', 'kayla@example.com', '555-012-3456'),
(28, 'Zachary', 'King', '1818 Elm St', '97531', 'zachary@example.com', '555-789-0123'),
(29, 'Victoria', 'Allen', '1919 Walnut St', '98765', 'victoria@example.com', '555-345-6789'),
(30, 'Justin', 'Scott', '2020 Cedar St', '13579', 'justin@example.com', '555-901-2345'),
(31, 'Hannah', 'Green', '2121 Birch St', '24680', 'hannah@example.com', '555-678-9012'),
(32, 'Brandon', 'Baker', '2222 Pine St', '35791', 'brandon@example.com', '555-123-4567'),
(33, 'Rachel', 'Adams', '2323 Oak St', '80210', 'rachel@example.com', '555-890-1234'),
(34, 'Courtney', 'Nelson', '2424 Elm St', '97531', 'courtney@example.com', '555-234-5678'),
(35, 'Kyle', 'Carter', '2525 Walnut St', '02468', 'kyle@example.com', '555-567-8901'),
(36, 'Megan', 'Ramirez', '2626 Cedar St', '13579', 'megan@example.com', '555-012-3456'),
(37, 'Jordan', 'Phillips', '2727 Birch St', '24680', 'jordan@example.com', '555-789-0123'),
(38, 'Alyssa', 'Evans', '2828 Pine St', '35791', 'alyssa@example.com', '555-345-6789'),
(39, 'Kevin', 'Gutierrez', '2929 Oak St', '80210', 'kevin@example.com', '555-901-2345'),
(40, 'Julia', 'Butler', '3030 Elm St', '97531', 'julia@example.com', '555-678-9012'),
(41, 'Eric', 'Flores', '3131 Walnut St', '02468', 'eric@example.com', '555-123-4567'),
(42, 'Gabrielle', 'Gonzales', '3232 Cedar St', '13579', 'gabrielle@example.com', '555-890-1234'),
(43, 'Dylan', 'Perry', '3333 Birch St', '24680', 'dylan@example.com', '555-234-5678'),
(44, 'Katie', 'Howard', '3434 Pine St', '35791', 'katie@example.com', '555-567-8901'),
(45, 'Steven', 'Long', '3535 Oak St', '80210', 'steven@example.com', '555-012-3456'),
(46, 'Madison', 'Gomez', '3636 Elm St', '97531', 'madison@example.com', '555-789-0123'),
(47, 'Connor', 'Hill', '3737 Walnut St', '02468', 'connor@example.com', '555-345-6789'),
(48, 'Alexis', 'Russell', '3838 Cedar St', '13579', 'alexis@example.com', '555-901-2345'),
(49, 'Richard', 'Sullivan', '3939 Birch St', '24680', 'richard@example.com', '555-678-9012'),
(50, 'Christina', 'Coleman', '4040 Pine St', '35791', 'christina@example.com', '555-123-4567'),
(51, 'Jared', 'Sanchez', '4141 Oak St', '80210', 'jared@example.com', '555-890-1234'),
(52, 'Breanna', 'Foster', '4242 Elm St', '97531', 'breanna@example.com', '555-234-5678'),
(53, 'Gregory', 'Barnes', '4343 Walnut St', '02468', 'gregory@example.com', '555-567-8901'),
(54, 'Alexandra', 'Bennett', '4444 Cedar St', '13579', 'alexandra@example.com', '555-012-3456'),
(55, 'Tyler', 'Gray', '4545 Birch St', '24680', 'tyler@example.com', '555-789-0123'),
(56, 'Casey', 'Cole', '4646 Pine St', '35791', 'casey@example.com', '555-345-6789'),
(57, 'Allison', 'Howard', '4747 Oak St', '80210', 'allison@example.com', '555-901-2345'),
(58, 'Gabriel', 'Ward', '4848 Elm St', '97531', 'gabriel@example.com', '555-678-9012'),
(59, 'Haley', 'Torres', '4949 Walnut St', '02468', 'haley@example.com', '555-123-4567'),
(60, 'Jeremy', 'Peterson', '5050 Cedar St', '13579', 'jeremy@example.com', '555-890-1234'),
(61, 'Melissa', 'Gray', '5151 Birch St', '24680', 'melissa@example.com', '555-234-5678'),
(62, 'Benjamin', 'Ward', '5252 Pine St', '35791', 'benjamin@example.com', '555-567-8901'),
(63, 'Rebecca', 'Morgan', '5353 Oak St', '80210', 'rebecca@example.com', '555-012-3456'),
(64, 'Bryan', 'Torres', '5454 Elm St', '97531', 'bryan@example.com', '555-789-0123'),
(65, 'Heather', 'Murphy', '5555 Walnut St', '02468', 'heather@example.com', '555-345-6789'),
(66, 'Natalie', 'Johnson', '5656 Cedar St', '13579', 'natalie@example.com', '555-901-2345'),
(67, 'Cody', 'Barnes', '5757 Birch St', '24680', 'cody@example.com', '555-678-9012'),
(68, 'Kristen', 'Sanders', '5858 Pine St', '35791', 'kristen@example.com', '555-123-4567'),
(69, 'Vincent', 'Ramirez', '5959 Oak St', '80210', 'vincent@example.com', '555-890-1234'),
(70, 'April', 'Stewart', '6060 Elm St', '97531', 'april@example.com', '555-234-5678'),
(71, 'Jasmine', 'Perry', '6161 Walnut St', '02468', 'jasmine@example.com', '555-567-8901'),
(72, 'Edward', 'Hernandez', '6262 Cedar St', '13579', 'edward@example.com', '555-012-3456'),
(73, 'Alicia', 'Lopez', '6363 Birch St', '24680', 'alicia@example.com', '555-789-0123'),
(74, 'Jeffrey', 'Gomez', '6464 Pine St', '35791', 'jeffrey@example.com', '555-345-6789'),
(75, 'Maria', 'Sullivan', '6565 Oak St', '80210', 'maria@example.com', '555-901-2345'),
(76, 'Brett', 'Evans', '6666 Elm St', '97531', 'brett@example.com', '555-234-5678'),
(77, 'Tiffany', 'King', '6767 Walnut St', '02468', 'tiffany@example.com', '555-567-8901'),
(78, 'Philip', 'Hill', '6868 Cedar St', '13579', 'philip@example.com', '555-012-3456'),
(79, 'Leah', 'Rivera', '6969 Birch St', '24680', 'leah@example.com', '555-789-0123'),
(80, 'Shane', 'Mitchell', '7070 Pine St', '35791', 'shane@example.com', '555-345-6789'),
(81, 'Paige', 'Garcia', '7171 Oak St', '80210', 'paige@example.com', '555-901-2345'),
(82, 'Jesse', 'Fisher', '7272 Elm St', '97531', 'jesse@example.com', '555-234-5678'),
(83, 'Caroline', 'Adams', '7373 Walnut St', '02468', 'caroline@example.com', '555-567-8901'),
(84, 'Larry', 'Jenkins', '7474 Cedar St', '13579', 'larry@example.com', '555-012-3456'),
(85, 'Diana', 'Stewart', '7575 Birch St', '24680', 'diana@example.com', '555-789-0123'),
(86, 'Marcus', 'Parker', '7676 Pine St', '35791', 'marcus@example.com', '555-345-6789'),
(87, 'Julie', 'Wright', '7777 Oak St', '80210', 'julie@example.com', '555-901-2345'),
(88, 'Shawn', 'Morgan', '7878 Elm St', '97531', 'shawn@example.com', '555-234-5678'),
(89, 'Andrea', 'Collins', '7979 Walnut St', '02468', 'andrea@example.com', '555-567-8901'),
(90, 'Caleb', 'Ferguson', '8080 Cedar St', '13579', 'caleb@example.com', '555-012-3456'),
(91, 'Monica', 'Gonzales', '8181 Birch St', '24680', 'monica@example.com', '555-789-0123'),
(92, 'Nathan', 'Bell', '8282 Pine St', '35791', 'nathan@example.com', '555-345-6789'),
(93, 'Rachael', 'Powell', '8383 Oak St', '80210', 'rachael@example.com', '555-901-2345'),
(94, 'Jenna', 'Harrison', '8484 Elm St', '97531', 'jenna@example.com', '555-234-5678'),
(95, 'Keith', 'Gardner', '8585 Walnut St', '02468', 'keith@example.com', '555-567-8901'),
(96, 'Lindsey', 'Diaz', '8686 Cedar St', '13579', 'lindsey@example.com', '555-012-3456'),
(97, 'Aaron', 'Lopez', '8787 Birch St', '24680', 'aaron@example.com', '555-789-0123'),
(98, 'Kaitlyn', 'Price', '8888 Pine St', '35791', 'kaitlyn@example.com', '555-345-6789'),
(99, 'Derek', 'Stevens', '8989 Oak St', '80210', 'derek@example.com', '555-901-2345'),
(100, 'Brianna', 'Watson', '9090 Elm St', '97531', 'brianna@example.com', '555-234-5678'),
(101, 'Jan', 'de Vries', 'Amsterdamseweg 123', '1234 AB', 'jan@example.com', '+31 6 12345678'),
(102, 'Lisa', 'Jansen', 'Keizersgracht 456', '5678 CD', 'lisa@example.com', '+31 6 23456789'),
(103, 'Pieter', 'van den Berg', 'Prinsengracht 789', '9012 EF', 'pieter@example.com', '+31 6 34567890'),
(104, 'Eva', 'van Dijk', 'Rembrandtplein 10', '3456 GH', 'eva@example.com', '+31 6 45678901'),
(105, 'Maarten', 'Bakker', 'Kalverstraat 11', '7890 IJ', 'maarten@example.com', '+31 6 56789012'),
(106, 'Sophie', 'Kramer', 'Leidsestraat 12', '3456 KL', 'sophie@example.com', '+31 6 67890123'),
(107, 'Daan', 'de Boer', 'Damstraat 13', '7890 MN', 'daan@example.com', '+31 6 78901234'),
(108, 'Emma', 'Visser', 'Jordaan 14', '2345 OP', 'emma@example.com', '+31 6 89012345'),
(109, 'Luuk', 'Hendriks', 'Oudezijds Voorburgwal 15', '6789 QR', 'luuk@example.com', '+31 6 90123456'),
(110, 'Fleur', 'van der Meer', 'Nieuwezijds Voorburgwal 16', '0123 ST', 'fleur@example.com', '+31 6 01234567'),
(111, 'Thijs', 'Smit', 'Zeilstraat 17', '4567 UV', 'thijs@example.com', '+31 6 12345678'),
(112, 'Lotte', 'Mulder', 'Olympiaplein 18', '8901 WX', 'lotte@example.com', '+31 6 23456789'),
(113, 'Tim', 'van Leeuwen', 'Beethovenstraat 19', '2345 YZ', 'tim@example.com', '+31 6 34567890'),
(114, 'Julia', 'Hoekstra', 'Museumplein 20', '6789 AB', 'julia@example.com', '+31 6 45678901'),
(115, 'Bram', 'Kuijpers', 'Vondelpark 21', '0123 CD', 'bram@example.com', '+31 6 56789012'),
(116, 'Sanne', 'van der Laan', 'Sarphatipark 22', '4567 EF', 'sanne@example.com', '+31 6 67890123'),
(117, 'Max', 'de Jong', 'Rijksmuseumstraat 23', '8901 GH', 'max@example.com', '+31 6 78901234'),
(118, 'Roos', 'Vermeulen', 'Oosterpark 24', '2345 IJ', 'roos@example.com', '+31 6 89012345'),
(119, 'Timo', 'Kok', 'Weesperplein 25', '6789 KL', 'timo@example.com', '+31 6 90123456'),
(120, 'Noa', 'van Vliet', 'Olympiaweg 26', '0123 MN', 'noa@example.com', '+31 6 01234567'),
(121, 'Mees', 'de Wit', 'Amstelpark 27', '4567 OP', 'mees@example.com', '+31 6 12345678'),
(122, 'Fenna', 'Bos', 'Zuidas 28', '8901 QR', 'fenna@example.com', '+31 6 23456789'),
(123, 'Thijmen', 'Vos', 'Dam Square 29', '2345 ST', 'thijmen@example.com', '+31 6 34567890'),
(124, 'Nina', 'de Graaf', 'Jordaan 30', '6789 UV', 'nina@example.com', '+31 6 45678901'),
(125, 'Tess', 'Koster', 'Leidseplein 31', '0123 WX', 'tess@example.com', '+31 6 56789012'),
(126, 'Sem', 'Bakker', 'Rembrandtplein 32', '4567 AB', 'sem@example.com', '+31 6 67890123'),
(127, 'Dylan', 'van Schoweun', 'Achthuizensedijk 106', '3069 BC', 'Dylanvanschouwen@gmail.com', '+31 6 14786052');

-- --------------------------------------------------------

--
-- Table structure for table `leveranciers`
--

CREATE TABLE `leveranciers` (
  `leveranciersid` int(11) NOT NULL,
  `leveranciernaam` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `leveranciernummer` varchar(20) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `land` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leveranciers`
--

INSERT INTO `leveranciers` (`leveranciersid`, `leveranciernaam`, `Email`, `leveranciernummer`, `adress`, `land`) VALUES
(1, 'TechGlobe', 'info@techglobe.com', '+1234567890', '123 Main Street', 'USA'),
(2, 'ElectroTech', 'sales@electrotech.com', '+9876543210', '456 Elm Avenue', 'UK'),
(3, 'GadgetWorld', 'contact@gadgetworld.com', '+1122334455', '789 Oak Lane', 'Canada'),
(4, 'TechZone', 'support@techzone.com', '+9988776655', '321 Pine Street', 'Germany'),
(5, 'SmartDevices', 'info@smartdevices.com', '+6655443322', '987 Cedar Road', 'France');

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

INSERT INTO `producten` (`S
(1, 2, 'Smartphone A', 'Samsung', 5ProductID`, `LeveranciersID`, `ProductNaam`, `Merk`, `Prijs`, `Omschrijving`, `Foto`, `voorraad`, `Productkleur`, `Capaciteit`, `RAM`, `Schermgrootte`, `Camera`, `OS`, `Uitkomstjaar`) VALUE99.99, 'Een geweldige smartphone met indrukwekkende functies.', 'https://example.com/smartphone_a.jpg', 100, 'Zwart', '128GB', '6GB', '6.4 inches', '48MP + 12MP', 'Android', '2014-06-15'),
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
-- Indexes for table `bestellingen`
--
ALTER TABLE `bestellingen`
  ADD PRIMARY KEY (`bestellingid`),
  ADD KEY `productid` (`productid`),
  ADD KEY `leverancierid` (`leverancierid`);

--
-- Indexes for table `klanten`
--
ALTER TABLE `klanten`
  ADD PRIMARY KEY (`Klantid`);

--
-- Indexes for table `leveranciers`
--
ALTER TABLE `leveranciers`
  ADD PRIMARY KEY (`leveranciersid`);

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
-- AUTO_INCREMENT for table `bestellingen`
--
ALTER TABLE `bestellingen`
  MODIFY `bestellingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `klanten`
--
ALTER TABLE `klanten`
  MODIFY `Klantid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `producten`
--
ALTER TABLE `producten`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bestellingen`
--
ALTER TABLE `bestellingen`
  ADD CONSTRAINT `bestellingen_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `producten` (`ProductID`),
  ADD CONSTRAINT `bestellingen_ibfk_2` FOREIGN KEY (`leverancierid`) REFERENCES `leveranciers` (`leveranciersid`);

--
-- Constraints for table `producten`
--
ALTER TABLE `producten`
  ADD CONSTRAINT `FK_LeveranciersID` FOREIGN KEY (`LeveranciersID`) REFERENCES `leveranciers` (`leveranciersid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
