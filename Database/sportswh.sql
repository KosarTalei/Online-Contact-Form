-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 01:17 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportswh`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`) VALUES
(1, 'Shoes'),
(2, 'Helmets'),
(3, 'Pants'),
(4, 'Tops'),
(5, 'Balls'),
(6, 'Equipment'),
(7, 'Training Gear');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemId` int(11) NOT NULL,
  `itemName` varchar(150) NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `salePrice` decimal(10,2) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `featured` tinyint(1) NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemId`, `itemName`, `photo`, `price`, `salePrice`, `description`, `featured`, `categoryId`) VALUES
(1, 'Adidas Euro16 Top Soccer Ball', 'soccerBall.jpg', '46.00', '35.95', 'adidas Performance Euro 16 Official Match Soccer Ball, Size 5, White/Bright Blue/Solar', 1, 5),
(2, 'Pro-tec Classic Skate Helmet', 'skateHelmet.jpg', '70.00', '0.00', 'Get the classic Pro-Tec look with proven protection. Shop a wide range of skate, bmx & water helmets online at Pro-Tec Australia.', 1, 2),
(3, 'Nike sport 600ml Water Bottle', 'waterBottle.jpg', '17.50', '15.00', 'Rehydrate your body and revive your day with the Nike Sport 600ml Water Bottle. The asymmetrical, one-hand design provides easy grasping while the leakproof valve to prevent leakage. ', 1, 6),
(4, 'String ArmaPlus Boxing Gloves', 'boxingGloves.jpg', '79.95', NULL, 'Get the perfect hand feel with the anatomically designed square shouldered mould to help you feel every shot land.', 1, 7),
(5, 'Asics Gel Lethal Tigreor 8 IT Men\'s', 'footyBoots.jpg', '160.00', NULL, 'The GEL-Lethal Tigreor 8 IT is an advanced lightweight football boot designed for high performance and speed. This boot features HG10mm technology.', 1, 1),
(6, 'Asics GEL Kayano 27 Kids Running Shoes', 'runningShoes.jpg', '179.99', NULL, 'Asics refine running for the next generation of young athletes with the Asics GEL Kayano 27. The exceptional support and comfort of the Kayano return in a lighter even more comfortable runner thanks to the two-piece, Flightfoam Propel midsole. ', 0, 1),
(7, 'Adidas must have stripes tee', 'blackTop.jpg', '34.99', NULL, 'Built for busy training schedules, the adidas Boys Aeroready 3-Stripes Tee is a must have for budding young athletes.', 0, 4),
(8, 'Nike girls Futura Air tee', 'whitePinkTop.jpg', '29.99', '24.99', 'Your child will be motivated to perform her best at training in the Nike Girls Futura Air Tee. The comfortable, non-restrictive crew neckline offers durability, while the iconic Nike Air logo is featured across the front and on the sleeve to highlight her sporty vibe.', 0, 4),
(9, 'Adidas 3 stripes flare pants', 'tracksuit.jpg', '69.99', '55.99', 'Kick it old school this winter when you step out in the adidas Women\'s Tricot 3-Stripes Flare Pants. Ideal for post-gym wear, the stretchy tricot fabric allows you to move with ease as you recover from your big session. ', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `itemId` int(11) NOT NULL,
  `shoppingOrderId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shoppingorder`
--

CREATE TABLE `shoppingorder` (
  `shoppingOrderId` int(11) NOT NULL,
  `orderDate` datetime NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contactNumber` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `creditCardNumber` varchar(20) NOT NULL,
  `expiryDate` varchar(10) NOT NULL,
  `nameOnCard` varchar(50) NOT NULL,
  `csv` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemId`),
  ADD KEY `itemId` (`itemId`),
  ADD KEY `FK_itemCategory` (`categoryId`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`itemId`,`shoppingOrderId`),
  ADD KEY `shoppingOrderId` (`shoppingOrderId`);

--
-- Indexes for table `shoppingorder`
--
ALTER TABLE `shoppingorder`
  ADD PRIMARY KEY (`shoppingOrderId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shoppingorder`
--
ALTER TABLE `shoppingorder`
  MODIFY `shoppingOrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `FK_itemCategory` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`);

--
-- Constraints for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD CONSTRAINT `orderitem_ibfk_1` FOREIGN KEY (`itemId`) REFERENCES `item` (`itemId`),
  ADD CONSTRAINT `orderitem_ibfk_2` FOREIGN KEY (`shoppingOrderId`) REFERENCES `shoppingorder` (`shoppingOrderId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
