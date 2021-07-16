-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2021 at 07:40 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `616`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2017-01-24 16:21:18', '01-07-2020 03:25:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryid` int(11) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `categoryid`, `brand`, `creationDate`, `updationDate`) VALUES
(1, 1, 'Intel', '2021-06-16 03:13:26', NULL),
(2, 1, 'AMD', '2021-06-16 03:13:26', NULL),
(3, 2, 'ASUS', '2021-06-21 07:20:56', NULL),
(4, 2, 'MSI', '2021-06-21 07:20:56', NULL),
(5, 2, 'GIGABYTE', '2021-06-21 07:22:21', NULL),
(6, 2, 'ASRock', '2021-06-21 07:22:21', NULL),
(7, 3, 'CORSAIR', '2021-06-21 07:24:20', NULL),
(8, 3, 'ADATA', '2021-06-21 07:24:20', NULL),
(9, 3, 'G.SKILL', '2021-06-21 07:24:53', NULL),
(10, 3, 'KINGSTON', '2021-06-21 07:24:53', NULL),
(11, 3, 'PNY', '2021-06-21 07:25:52', NULL),
(12, 4, 'SAMSUNG', '2021-06-21 07:34:07', NULL),
(13, 4, 'SEAGATE', '2021-06-21 07:34:07', NULL),
(14, 4, 'KINGSTON', '2021-06-21 07:34:45', NULL),
(15, 4, 'LEXAR', '2021-06-21 07:34:45', NULL),
(16, 4, 'CORSAIR', '2021-06-21 07:35:25', NULL),
(17, 4, 'TOSHIBA', '2021-06-21 07:35:25', NULL),
(18, 5, 'NZXT', '2021-06-21 07:37:16', NULL),
(19, 5, 'COOLER MASTER', '2021-06-21 07:37:16', NULL),
(20, 5, 'ASUS', '2021-06-21 07:38:28', NULL),
(21, 5, 'CORSAIR', '2021-06-21 07:38:28', NULL),
(22, 6, 'ASUS', '2021-06-21 07:41:12', NULL),
(23, 6, 'NZXT', '2021-06-21 07:41:12', NULL),
(24, 6, 'CORSAIR', '2021-06-21 07:41:41', NULL),
(25, 6, 'COOLER MASTER', '2021-06-21 07:41:41', NULL),
(26, 7, 'ASUS', '2021-06-21 07:43:08', NULL),
(27, 7, 'COOLER MASTER', '2021-06-21 07:43:08', NULL),
(28, 7, 'NZXT', '2021-06-21 07:43:50', NULL),
(29, 7, 'CORSAIR', '2021-06-21 07:43:50', NULL),
(30, 8, 'ASUS', '2021-06-21 07:45:06', NULL),
(31, 8, 'MSI', '2021-06-21 07:45:06', NULL),
(32, 8, 'GIGABYTE', '2021-06-21 07:45:33', NULL),
(33, 8, 'ZOTAC', '2021-06-21 07:45:33', NULL),
(34, 8, 'PNY', '2021-06-21 07:46:05', NULL),
(35, 8, 'EVGA', '2021-06-21 07:46:05', NULL),
(36, 6, 'MSI', '2021-07-13 11:48:14', NULL),
(37, 7, 'MSI', '2021-07-13 11:50:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(1, 'Processor', 'Computer Processor', '2021-04-28 03:18:35', NULL),
(2, 'Motherboard', 'Computer Motherboard', '2021-04-28 06:55:12', NULL),
(3, 'Memory', 'Computer Ram', '2021-04-28 08:34:25', NULL),
(4, 'Storage', 'HDD, SSD', '2021-04-30 03:05:26', NULL),
(5, 'Power Supply', 'PSU', '2021-04-30 03:05:49', NULL),
(6, 'Casing', '', '2021-04-30 03:06:02', NULL),
(7, 'Cooler', 'Cpu Cooler', '2021-04-30 03:06:13', NULL),
(8, 'Graphic Cards', 'Gaming Graphic Cards', '2021-06-07 06:25:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `productId` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `orderSession` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`, `image`, `orderSession`) VALUES
(13, 1, '28', 1, '2021-06-13 07:17:07', 'Bank Transfer', 'Pending', NULL, 1),
(14, 1, '25', 1, '2021-06-13 07:18:05', 'Bank Transfer', 'In Process', NULL, 1),
(15, 1, '26', 1, '2021-06-13 08:07:17', 'Debit / Credit card', 'In Process', NULL, 1),
(16, 1, '28', 1, '2021-06-13 08:07:18', 'Debit / Credit card', 'Pending', NULL, 2),
(17, 1, '32', 1, '2021-06-13 08:07:18', 'Debit / Credit card', 'Delivered', NULL, 2),
(18, 1, '29', 1, '2021-06-13 10:02:19', 'Debit / Credit card', NULL, NULL, 2),
(19, 1, '32', 1, '2021-06-21 16:57:53', 'Debit / Credit card', NULL, NULL, 2),
(20, 1, '36', 1, '2021-06-21 17:07:48', 'Cash On Delivery', 'Pending', NULL, 3),
(21, 1, '36', 1, '2021-06-29 11:15:31', 'Debit / Credit card', NULL, NULL, 3),
(22, 16, '37', 1, '2021-07-09 05:41:17', 'Debit / Credit card', NULL, NULL, 3),
(23, 16, '31', 1, '2021-07-11 07:14:27', 'Debit / Credit card', NULL, NULL, 3),
(24, 16, '32', 1, '2021-07-11 07:14:27', 'Debit / Credit card', NULL, NULL, 4),
(25, 16, '35', 1, '2021-07-11 07:14:27', 'Debit / Credit card', NULL, NULL, 4),
(26, 16, '36', 1, '2021-07-11 07:14:27', 'Debit / Credit card', NULL, NULL, 4),
(27, 16, '37', 1, '2021-07-12 09:59:30', 'Debit / Credit card', NULL, NULL, 4),
(28, 16, '28', 1, '2021-07-12 10:08:52', 'Debit / Credit card', NULL, NULL, 5),
(29, 16, '28', 1, '2021-07-12 10:36:55', 'Debit / Credit card', NULL, NULL, 5),
(30, 16, '29', 1, '2021-07-12 10:36:55', 'Debit / Credit card', NULL, NULL, 5),
(31, 16, '24', 1, '2021-07-12 10:39:59', 'Debit / Credit card', NULL, NULL, 5),
(32, 16, '36', 1, '2021-07-12 11:43:07', 'Debit / Credit card', NULL, NULL, 6),
(33, 16, '38', 1, '2021-07-13 18:08:13', 'Debit / Credit card', NULL, NULL, 7),
(34, 16, '27', 1, '2021-07-13 18:08:46', 'Debit / Credit card', NULL, NULL, 8),
(35, 16, '32', 1, '2021-07-13 18:08:46', 'Debit / Credit card', NULL, NULL, 8),
(36, 16, '39', 1, '2021-07-13 18:08:46', 'Debit / Credit card', NULL, NULL, 8),
(37, 16, '38', 1, '2021-07-14 05:24:09', 'Debit / Credit card', NULL, NULL, 9),
(38, 16, '28', 1, '2021-07-14 05:27:47', 'Debit / Credit card', NULL, NULL, 10),
(39, 16, '27', 1, '2021-07-14 12:55:47', 'Debit / Credit card', NULL, NULL, 11),
(40, 16, '38', 1, '2021-07-14 12:55:47', 'Debit / Credit card', NULL, NULL, 11),
(41, 16, '39', 1, '2021-07-14 12:55:47', 'Debit / Credit card', NULL, NULL, 11),
(42, 16, '39', 3, '2021-07-14 15:01:08', 'Cash On Delivery', NULL, NULL, 12),
(43, 16, '24', 2, '2021-07-14 15:04:42', NULL, NULL, NULL, 13),
(44, 16, '28', 1, '2021-07-14 15:04:42', NULL, NULL, NULL, 13),
(45, 16, '31', 1, '2021-07-14 15:04:42', NULL, NULL, NULL, 13),
(46, 16, '32', 2, '2021-07-14 15:04:42', NULL, NULL, NULL, 13);

-- --------------------------------------------------------

--
-- Table structure for table `paymentproof`
--

DROP TABLE IF EXISTS `paymentproof`;
CREATE TABLE IF NOT EXISTS `paymentproof` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentproof`
--

INSERT INTO `paymentproof` (`id`, `image`) VALUES
(1, '2'),
(2, 'Capture.PNG'),
(3, 'Capture.PNG'),
(4, 'Capture.PNG'),
(5, 'Capture.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `pcbuildorders`
--

DROP TABLE IF EXISTS `pcbuildorders`;
CREATE TABLE IF NOT EXISTS `pcbuildorders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `cpu` varchar(255) DEFAULT NULL,
  `mboard` varchar(255) DEFAULT NULL,
  `ram` varchar(255) DEFAULT NULL,
  `hdd` varchar(255) DEFAULT NULL,
  `psu` varchar(255) DEFAULT NULL,
  `casing` varchar(255) DEFAULT NULL,
  `cooler` varchar(255) DEFAULT NULL,
  `gpu` varchar(255) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pcbuildorders`
--

INSERT INTO `pcbuildorders` (`id`, `userId`, `category`, `cpu`, `mboard`, `ram`, `hdd`, `psu`, `casing`, `cooler`, `gpu`, `orderDate`, `paymentMethod`, `orderStatus`) VALUES
(5, 16, '', '25', '', '33', '', '', '', '', '', '2021-07-01 14:00:07', 'Debit / Credit card', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pccombinations`
--

DROP TABLE IF EXISTS `pccombinations`;
CREATE TABLE IF NOT EXISTS `pccombinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pcCategory` varchar(255) DEFAULT NULL,
  `mboard` varchar(255) DEFAULT NULL,
  `cpu1` varchar(255) DEFAULT NULL,
  `ram1` varchar(255) DEFAULT NULL,
  `hdd1` varchar(255) DEFAULT NULL,
  `psu1` varchar(255) DEFAULT NULL,
  `cooler1` varchar(255) DEFAULT NULL,
  `case1` varchar(255) DEFAULT NULL,
  `gpu1` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pccombinations`
--

INSERT INTO `pccombinations` (`id`, `pcCategory`, `mboard`, `cpu1`, `ram1`, `hdd1`, `psu1`, `cooler1`, `case1`, `gpu1`) VALUES
(1, 'Home Desktop', 'Intel B560', 'Intel 10th gen', 'DDR4 3600', 'SSD - SATA', 'psu1', NULL, NULL, NULL),
(2, 'Gaming Lite', '18', '9', '6', '22', 'psu1', NULL, NULL, NULL),
(3, 'Home Desktop', '18', '8', '6', '23', '28', NULL, NULL, NULL),
(4, 'Home Desktop', '18', '8', '6', '23', '28', '', NULL, NULL),
(5, 'Gaming Lite', '18', '8', '6', '24', '27', '35', NULL, NULL),
(6, '', '14', '7', '', '', '', '', NULL, NULL),
(7, 'Home Desktop', '46', '7', '', '', '', '', NULL, NULL),
(8, '', '44', '9', '', '', '', '', NULL, NULL),
(9, 'Office Desktop', '18', '7', '6', '21', '29', '34', NULL, NULL),
(10, 'Office Desktop', '52', '10', '6', '21', '26', '35', NULL, NULL),
(11, 'Home Desktop', '13', '7', '6', '23', '27', '36', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

DROP TABLE IF EXISTS `productreviews`;
CREATE TABLE IF NOT EXISTS `productreviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productId` int(11) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `review` longtext,
  `reviewDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `subCategory` int(11) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productCompany` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productPriceBeforeDiscount` int(11) DEFAULT NULL,
  `productDescription` longtext,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `productAmount` int(10) DEFAULT NULL,
  `productAvailability` varchar(20) GENERATED ALWAYS AS (if((`productAmount` > 0),'In Stock','Out Of Stock')) VIRTUAL,
  `warranty` varchar(255) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `subCategory`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`, `productImage1`, `productImage2`, `productImage3`, `postingDate`, `productAmount`, `warranty`, `updationDate`) VALUES
(8, 3, 5, 'RAM 3200', 'CORSAIR', 12000, 12000, 'bbg', '8.jpg', '8.jpg', '8.jpg', '2021-04-28 08:37:08', NULL, NULL, '2021-06-22 04:47:28'),
(23, 1, 7, 'INTEL CORE I9-10900K', 'Intell', 100000, 100000, '<table width=\"620\" style=\"background-color: rgb(255, 255, 255); border: 0px none; margin: 0px; outline: none 0px; padding: 0px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><tbody style=\"box-sizing: border-box;\"><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"364\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\">Product Collection</td><td width=\"256\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\">10th Generation IntelÂ® Coreâ„¢ i9 Processors</td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"364\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\">Code Name</td><td width=\"256\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\">Products formerly Comet Lake</td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"364\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\">Vertical Segment</td><td width=\"256\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"></td></tr></tbody></table>', '2758.jpg', '2759.jpg', 'I9-10900K-500x500.png', '2021-06-08 04:29:51', 10, NULL, '2021-06-22 04:47:28'),
(24, 1, 7, 'INTEL CORE I5-10400 ', 'Intel', 45000, 45000, '<br>', '2448.jpg', '2449.jpg', '2450.jpg', '2021-06-08 04:38:57', 17, '1 Year', '2021-06-22 04:47:28'),
(25, 1, 9, 'INTEL CORE I9-11900K', 'Intel', 125000, 125000, '<div>Processor Base Frequency</div><div>3.50 GHz</div><div><br></div><div>Max Turbo Frequency</div><div>5.30 GHz</div><div><br></div><div>IntelÂ® Thermal Velocity Boost Frequency</div><div>5.30 GHz</div>', '1934-20210505084453-i9.png', '1934-20210505084453-i9.png', '1934-20210505084453-i9.png', '2021-06-08 04:41:24', 15, NULL, '2021-06-22 04:47:28'),
(26, 1, 10, 'AMD RYZEN 5 3500', 'AMD', 25000, 25000, '<table width=\"436\" style=\"background-color: rgb(255, 255, 255); border: 0px none; margin: 0px; outline: none 0px; padding: 0px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><tbody style=\"box-sizing: border-box;\"><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"171\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">Specifications</p></td><td width=\"64\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"201\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"171\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"64\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"201\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"171\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\"># of CPU Cores</p></td><td width=\"64\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"201\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">6</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"171\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"64\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"201\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"171\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\"># of Threads</p></td><td width=\"64\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"201\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">6</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"171\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"64\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"201\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"171\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">Base Clock</p></td><td width=\"64\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"201\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">3.6GHz</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"171\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"64\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"201\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"171\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">Max Boost Clock&nbsp;</p></td><td width=\"64\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"201\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">Up to 4.1GHz</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"171\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"64\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"201\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"171\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">Unlocked&nbsp;</p></td><td width=\"64\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"201\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">Yes</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"171\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"64\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"201\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"171\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">Package</p></td><td width=\"64\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"201\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">AM4</p></td></tr></tbody></table>', '2766.jpg', '2767.jpg', '2768.jpg', '2021-06-08 04:47:01', 15, NULL, '2021-06-22 04:47:28'),
(27, 1, 11, 'Ryzen 7 5800X', 'AMD', 112500, 112500, '<table width=\"468\" style=\"background-color: rgb(255, 255, 255); border: 0px none; margin: 0px; outline: none 0px; padding: 0px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><tbody style=\"box-sizing: border-box;\"><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"233\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">Specifications</p></td><td width=\"235\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"233\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"235\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"233\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\"># of CPU Cores</p></td><td width=\"235\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">8</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"233\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"235\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"233\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\"># of Threads</p></td><td width=\"235\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">16</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"233\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"235\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"233\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">Base Clock</p></td><td width=\"235\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">3.8GHz</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"233\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\"><br></p></td><td width=\"235\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"233\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\"><br></p></td><td width=\"235\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"></td></tr></tbody></table>', '2850.jpg', '2851.jpg', '2852.jpg', '2021-06-08 04:55:02', 15, '3 Years', '2021-06-22 04:47:28'),
(28, 2, 18, 'ASUS PRIME H410M-E', 'MSI', 16000, 16000, '<div><br></div><div><table width=\"1064\" style=\"background-color: rgb(255, 255, 255); border: 0px none; margin: 0px; outline: none 0px; padding: 0px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><tbody style=\"box-sizing: border-box;\"><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"871\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">IntelÂ® Socket 1200&nbsp;for 10th&nbsp;Gen IntelÂ®&nbsp;Coreâ„¢, PentiumÂ®&nbsp;Gold and CeleronÂ®&nbsp;Processors *</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"129\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"64\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"871\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">Supports IntelÂ® 14&nbsp;nm CPU</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"129\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"64\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"871\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">Supports IntelÂ® Turbo Boost Technology 2.0 and IntelÂ® Turbo Boost Max Technology 3.0**</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"129\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"64\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"871\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">* Refer to&nbsp;www.asus.com&nbsp;for CPU support list</p></td></tr><tr style=\"box-sizing: border-box; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><td width=\"129\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"64\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">&nbsp;</p></td><td width=\"871\" style=\"box-sizing: border-box; padding: 0px; border: 0px none; margin: 0px; outline: none 0px;\"><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">**IntelÂ® Turbo Boost Max Technology 3.0 support depends on the CPU types.</p></td></tr></tbody></table></div>', '3174.jpg', '3175.jpg', '3176.jpg', '2021-06-08 06:05:11', 10, NULL, '2021-06-22 04:47:28'),
(29, 2, 13, 'ASUS TUF B460M-PLUS GAMING', 'ASUS', 32000, 3200, '<div>Â» BRAND: ASUS</div><div>Â» PART NUMBER: 90MB14D0- M0UAY0</div><div>Â» FORM FACTOR: Micro ATX</div><div>Â» CPU SOCKET TYPE: LGA 1200</div>', '2454.jpg', '2455.jpg', '2456.jpg', '2021-06-08 06:09:28', 15, '2 Years', '2021-07-12 10:48:09'),
(30, 2, 52, 'ASUS TUF GAMING X570-PLUS', 'ASUS', 56000, 56000, '<p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\">CPU<br style=\"box-sizing: border-box;\">AMD AM4 Socket 2nd and 1st Gen AMD Ryzenâ„¢ with Radeonâ„¢ Vega Graphics/AMD Ryzenâ„¢ 2nd Generation/3rd Gen AMD Ryzenâ„¢ Processors</p><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\"><br style=\"box-sizing: border-box;\">Chipset<br style=\"box-sizing: border-box;\">AMD X570</p><p style=\"box-sizing: border-box; margin-bottom: 0px; border: 0px none; outline: none 0px; padding: 0px; font-family: calibri, verdana, tahoma; font-size: 16px; line-height: 1.6em; color: rgb(102, 102, 102) !important;\"><br style=\"box-sizing: border-box;\">Memory<br style=\"box-sizing: border-box;\">3rd Gen AMD Ryzenâ„¢ Processors<br style=\"box-sizing: border-box;\">4 x DIMM, Max. 128GB, DDR4 4400(O.C)/3466(O.C.)/3400(O.C.)/3200(O.C.)/3000(O.C.)/2933(O.C.)/2800(O.C.)/2666/2400/2133 MHz Un-buffered Memory<br style=\"box-sizing: border-box;\">2nd Gen AMD Ryzenâ„¢ Processors<br style=\"box-sizing: border-box;\">4 x DIMM, Max. 128GB, DDR4 3600(O.C.)/3466(O.C.)/3400(O.C.)/3200(O.C.)/3000(O.C.)/2933(O.C.)/2800(O.C.)/2666/2400/2133 MHz Un-buffered Memory<br style=\"box-sizing: border-box;\">2nd and 1st Gen AMD Ryzenâ„¢ with Radeonâ„¢ Vega Graphics Processors<br style=\"box-sizing: border-box;\">4 x DIMM, Max. 128GB, DDR4 3200(O.C.)/3000(O.C.)/2933(O.C.)/2800(O.C.)/2666/2400/2133 MHz Un-buffered Memory</p>', '1900.jpg', '1901.jpg', '1902.jpg', '2021-06-08 06:29:33', 20, NULL, '2021-06-22 04:47:28'),
(31, 2, 50, 'GIGABYTE B450M DS3H V2', 'GIGABYTE', 17000, 17000, '<p class=\"MsoListParagraphCxSpFirst\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">Â·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]-->Supports AMD Ryzenâ„¢ 5000 series/ 3rd Gen Ryzenâ„¢/\r\n2nd Gen Ryzenâ„¢/ 1st Gen Ryzenâ„¢/ 2nd Gen Ryzenâ„¢ with Radeonâ„¢ Vega Graphics/ 1st\r\nGen Ryzenâ„¢ with Radeonâ„¢ Vega Graphics/ Athlonâ„¢ with Radeonâ„¢ Vega Graphics\r\nProcessors<o:p></o:p></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">Â·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]-->Dual Channel Non-ECC Unbuffered DDR4, 4 DIMMs<o:p></o:p></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">Â·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]-->Feature Digital VRM Solution with Low RDS(on)\r\nMOSFETs<o:p></o:p></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">Â·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]-->HDMI, DVI-D Ports for Multiple Display<o:p></o:p></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">Â·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]-->Ultra-Fast PCIe Gen3 x4 M.2 with PCIe NVMe &amp;\r\nSATA mode support<o:p></o:p></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">Â·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]-->High Quality Audio Capacitors and Audio Noise\r\nGuard with LED Trace Path Lighting<o:p></o:p></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">Â·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]-->GIGABYTE Exclusive 8118 Gaming LAN with\r\nBandwidth Management<o:p></o:p></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">Â·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]-->RGB Fusion supports RGB LED Strips in 7-Colors<o:p></o:p></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">Â·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]-->Smart Fan 5 Features 5 Temperature Sensors and 2\r\nHybrid Fan Headers with FAN STOP<o:p></o:p></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">Â·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]-->APP Center Including EasyTuneâ„¢ and Cloud\r\nStationâ„¢ Utilities<o:p></o:p></p>\r\n\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">Â·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]-->CEC 2019 Ready, Save Power with a Simple Click<o:p></o:p></p>', '2904.jpg', '2905.jpg', '2906.jpg', '2021-06-08 06:48:44', 15, NULL, '2021-06-22 04:47:28'),
(32, 3, 5, 'ADATA XPG GAMING D30 8GB', 'ADATA', 9000, 9000, '<div><font color=\"#333333\" face=\"Helvetica Neue, Helvetica, Arial, sans-serif\"><span style=\"font-size: 14px;\">Color: Black / Red</span></font></div><div><font color=\"#333333\" face=\"Helvetica Neue, Helvetica, Arial, sans-serif\"><span style=\"font-size: 14px;\"><br></span></font></div><div><font color=\"#333333\" face=\"Helvetica Neue, Helvetica, Arial, sans-serif\"><span style=\"font-size: 14px;\">Capacity: 8GB / 16GB</span></font></div><div><font color=\"#333333\" face=\"Helvetica Neue, Helvetica, Arial, sans-serif\"><span style=\"font-size: 14px;\"><br></span></font></div><div><font color=\"#333333\" face=\"Helvetica Neue, Helvetica, Arial, sans-serif\"><span style=\"font-size: 14px;\">Dimensions (L x W x H): 133.3 x 44.7 x 8.1mm</span></font></div><div><font color=\"#333333\" face=\"Helvetica Neue, Helvetica, Arial, sans-serif\"><span style=\"font-size: 14px;\"><br></span></font></div><div><font color=\"#333333\" face=\"Helvetica Neue, Helvetica, Arial, sans-serif\"><span style=\"font-size: 14px;\">Weight: 39</span></font></div><div><font color=\"#333333\" face=\"Helvetica Neue, Helvetica, Arial, sans-serif\"><span style=\"font-size: 14px;\"><br></span></font></div><div><font color=\"#333333\" face=\"Helvetica Neue, Helvetica, Arial, sans-serif\"><span style=\"font-size: 14px;\">Interface: DDR4 U-DIMM 2666-4133MHz</span></font></div>', '2294.jpg', '2295.jpg', '2296.jpg', '2021-06-08 06:54:18', 10, NULL, '2021-06-22 04:47:28'),
(33, 3, 19, 'CORSAIR VENGEANCE RGB PRO 16GB', 'CORSAIR', 25000, 25000, 'description', '2294.jpg', '2295.jpg', '2296.jpg', '2021-06-08 07:04:47', 0, NULL, '2021-06-22 04:47:28'),
(34, 8, 37, 'MSI GTX 1650 Super', 'MSI', 55000, 55000, 'GPU', '2835.jpg', '2837.jpg', '2836.jpg', '2021-06-15 02:08:09', 13, NULL, '2021-06-22 04:47:28'),
(35, 1, 7, 'Ryzen 9 5950X', 'AMD', 165000, 16500, '<table class=\"a-normal a-spacing-micro\" style=\"width: 440.047px; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255); margin-bottom: 4px !important;\"><tbody style=\"box-sizing: border-box;\"><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"vertical-align: top; padding: 0px 3px 3px 0px; margin-right: 0px; width: 115.203px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Brand</span></td><td class=\"a-span9\" style=\"vertical-align: top; padding: 0px 0px 3px 3px; margin-right: 0px; width: 324.844px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">AMD</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"vertical-align: top; padding: 3px 3px 3px 0px; margin-right: 0px; width: 115.203px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">CPU Manufacturer</span></td><td class=\"a-span9\" style=\"vertical-align: top; padding: 3px 0px 3px 3px; margin-right: 0px; width: 324.844px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">AMD</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"vertical-align: top; padding: 3px 3px 3px 0px; margin-right: 0px; width: 115.203px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">CPU Model</span></td><td class=\"a-span9\" style=\"vertical-align: top; padding: 3px 0px 3px 3px; margin-right: 0px; width: 324.844px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Ryzen 9</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"vertical-align: top; padding: 3px 3px 3px 0px; margin-right: 0px; width: 115.203px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">CPU Speed</span></td><td class=\"a-span9\" style=\"vertical-align: top; padding: 3px 0px 3px 3px; margin-right: 0px; width: 324.844px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">4.9 GHz</span></td></tr><tr class=\"a-spacing-small\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"vertical-align: top; padding: 3px 3px 0px 0px; margin-right: 0px; width: 115.203px;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; font-weight: 700 !important; line-height: 20px !important;\">Platform</span></td><td class=\"a-span9\" style=\"vertical-align: top; padding: 3px 0px 0px 3px; margin-right: 0px; width: 324.844px;\"><span class=\"a-size-base\" style=\"box-sizing: border-box; line-height: 20px !important;\">Linux, Windows</span></td></tr></tbody></table>', '61gMd1izD5L._AC_SL1500_.jpg', '81ELwC1st2L._AC_SL1500_.jpg', '616VM20+AzL._AC_SL1384_.jpg', '2021-06-16 03:21:56', 14, '2 Years', '2021-07-12 10:48:22'),
(36, 1, 7, 'testing processor', 'AMD', 10000, 500, 'fghfghgfh', '2766.jpg', '2850.jpg', '2850.jpg', '2021-06-21 17:06:56', 30, '5 Years', '2021-06-22 04:49:37'),
(37, 3, 6, 'ADATA 16GB (1X16GB) DDR4', 'ADATA', 16000, 16000, 'DDR 4 2666', '2254.jpg', '2254.jpg', '2254.jpg', '2021-06-29 11:08:29', 30, '2 Years', '2021-06-29 11:08:29'),
(38, 8, 37, 'ASUS GTX 1050TI OC 4GB GDDR5', 'ASUS', 35000, 3500, '<div>Graphic Engine<span style=\"white-space:pre\">	</span>NVIDIAÂ® GeForce GTX 1050 Ti</div><div>Bus Standard<span style=\"white-space:pre\">	</span>PCI Express 3.0</div><div>Video Memory<span style=\"white-space:pre\">	</span>4GB GDDR5</div><div>Resolution<span style=\"white-space:pre\">	</span>Digital Max Resolution 7680 x 4320<span style=\"white-space:pre\">	</span>&nbsp;</div><div>Interface<span style=\"white-space:pre\">	</span>Yes x 1 (Native DVI-D</div><div>&nbsp;<span style=\"white-space:pre\">		</span>Yes x 1 (Native HDMI 2.0b)</div><div>&nbsp;<span style=\"white-space:pre\">		</span>HDCP Support Yes (2.2)</div>', '3198.jpg', '3199.jpg', '3200.jpg', '2021-06-29 11:23:42', 50, '1 Year', '2021-07-12 10:48:39'),
(39, 2, 18, 'ASUS H410 Prime', 'GIGABYTE', 15000, 15000, 'fdgdfgfg', '2081.jpg', '2472.jpg', '2474.jpg', '2021-07-12 14:12:23', 50, '3 Years', '2021-07-12 14:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `salesrecords`
--

DROP TABLE IF EXISTS `salesrecords`;
CREATE TABLE IF NOT EXISTS `salesrecords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Sales` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salesrecords`
--

INSERT INTO `salesrecords` (`id`, `Date`, `Sales`) VALUES
(1, '2021-07-07', 10),
(2, '2021-07-08', 4),
(3, '2021-07-08', 14),
(4, '2021-07-09', 7),
(5, '2021-07-10', 8),
(6, '2021-07-11', 5);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(5, 3, 'DDR4 3200', '2021-04-28 08:34:46', NULL),
(6, 3, 'DDR4 2666', '2021-04-28 08:35:06', NULL),
(7, 1, 'Intel 10th gen', '2021-06-08 03:31:27', NULL),
(8, 1, 'Intel 9th gen', '2021-06-08 03:31:59', NULL),
(9, 1, 'Intel 11th gen', '2021-06-08 03:32:20', NULL),
(10, 1, 'Ryzen 3000', '2021-06-08 03:39:41', NULL),
(11, 1, 'Ryzen 5000', '2021-06-08 03:39:41', NULL),
(12, 1, 'Ryzen 2000', '2021-06-08 03:40:15', NULL),
(13, 2, 'Intel B460', '2021-06-08 03:42:31', NULL),
(14, 2, 'Intel B560', '2021-06-08 03:42:31', NULL),
(18, 2, 'Intel H410', '2021-06-08 03:46:12', NULL),
(19, 3, 'DDR4 3600', '2021-06-08 03:48:02', NULL),
(20, 3, 'DDR4 4000', '2021-06-08 03:48:02', NULL),
(21, 4, 'Desktop HDD - SATA', '2021-06-08 03:50:07', NULL),
(22, 4, 'Laptop HDD - SATA', '2021-06-08 03:50:07', NULL),
(23, 4, 'SSD - SATA', '2021-06-08 03:51:20', NULL),
(24, 4, 'SSD - M.2 ', '2021-06-08 03:51:20', NULL),
(25, 4, 'SSD - M.2 - NVMe', '2021-06-08 03:51:54', NULL),
(26, 5, '650W', '2021-06-08 03:56:55', NULL),
(27, 5, '750W', '2021-06-08 03:56:55', NULL),
(28, 5, '1000W', '2021-06-08 03:57:23', NULL),
(29, 5, '500W', '2021-06-08 03:57:23', NULL),
(30, 6, 'ATX - Gaming', '2021-06-08 04:02:00', NULL),
(31, 6, 'Mini ATX - Gaming', '2021-06-08 04:02:00', NULL),
(32, 6, 'ATX - Office', '2021-06-08 04:03:11', NULL),
(33, 6, 'Micro ATX - Office', '2021-06-08 04:03:11', NULL),
(34, 7, 'CPU Air Cooler', '2021-06-08 04:05:36', NULL),
(35, 7, 'CPU Liquid Cooler 120mm', '2021-06-08 04:05:36', NULL),
(36, 7, 'CPU Liquid Cooler 240mm', '2021-06-08 04:06:08', NULL),
(37, 8, 'GTX 1650', '2021-06-08 04:15:48', NULL),
(38, 8, 'GTX 1660', '2021-06-08 04:15:48', NULL),
(39, 8, 'RTX 3070', '2021-06-08 04:16:31', NULL),
(40, 8, 'RTX 3080', '2021-06-08 04:16:31', NULL),
(41, 8, 'RX 5600', '2021-06-08 04:18:22', NULL),
(42, 8, 'RX 6800XT', '2021-06-08 04:18:22', NULL),
(44, 2, 'Intel H510', '2021-06-11 06:19:31', NULL),
(46, 2, 'Intel Z490', '2021-06-11 06:20:22', NULL),
(47, 2, 'Intel Z590', '2021-06-11 06:20:59', NULL),
(48, 2, 'AMD A320', '2021-06-11 06:33:07', NULL),
(49, 2, 'AMD A520', '2021-06-11 06:33:07', NULL),
(50, 2, 'AMD B450', '2021-06-11 06:36:03', NULL),
(51, 2, 'AMD B550', '2021-06-11 06:36:03', NULL),
(52, 2, 'AMD X570', '2021-06-11 06:36:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` varchar(12) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `shippingAddress` longtext,
  `shippingState` varchar(255) DEFAULT NULL,
  `shippingCity` varchar(255) DEFAULT NULL,
  `shippingPincode` int(11) DEFAULT NULL,
  `billingAddress` longtext,
  `billingState` varchar(255) DEFAULT NULL,
  `billingCity` varchar(255) DEFAULT NULL,
  `billingPincode` int(11) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contactno`, `password`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `billingAddress`, `billingState`, `billingCity`, `billingPincode`, `regDate`, `updationDate`) VALUES
(1, 'infinity pc', 'infinity@pc.com', '077165113', '48bfb974862e64b2821597faa7040594', '589', 'Rathnapura', 'Balangoda', 4597, '5893', 'Kegalle', 'Warakapola', 4597, '2021-04-30 03:18:45', NULL),
(2, 'abcd efgh', 'abcdefgh@gmail.com', NULL, '37609a583d185e7ea47eff604b4d6ec0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-10 01:35:52', NULL),
(3, 'abcd efgh', 'abcdefgh@gmail.com', NULL, '37609a583d185e7ea47eff604b4d6ec0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-10 01:37:03', NULL),
(4, 'chamith shehan', 'chamith@shehan.com', NULL, 'd41a2d3d6e50d9a189523ef5060e2eaf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-05 07:05:45', NULL),
(5, 'chamith shehan', 'infinity@pc.com', NULL, '48bfb974862e64b2821597faa7040594', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-05 11:40:49', NULL),
(6, 'ccc', 'ccc', NULL, '9df62e693988eb4e1e1444ece0578579', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-09 03:32:30', NULL),
(7, 'Bandara Bandara', 'bandara@bbc.com', NULL, '598035733f99dce80ced237c5b780908', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-09 04:07:16', NULL),
(8, 'Bandara k Bandara', 'kbandara@bbc.com', NULL, '88316675d7882e3fdbe066000273842c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-09 04:43:44', NULL),
(9, 'Bandara k Bandara', 'kbandara@bbc.com', NULL, '88316675d7882e3fdbe066000273842c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-09 04:47:16', NULL),
(10, 'Bandara k n Bandara', 'knbandara@bbc.com', NULL, '48bfb974862e64b2821597faa7040594', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-09 04:49:02', NULL),
(11, 'Bandara k n Bandara', 'knbandara@bbc.com', NULL, '48bfb974862e64b2821597faa7040594', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-09 04:50:58', NULL),
(12, 'Bandara k n Bandara', 'knbandara@bbc.com', NULL, '48bfb974862e64b2821597faa7040594', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-09 04:51:30', NULL),
(13, 'Bandara k n Bandara', 'knbandara@bbc.com', NULL, '48bfb974862e64b2821597faa7040594', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-09 04:51:53', NULL),
(14, 'Infinity PC Solutionss', 'infinitypc@abc.com', '771010589', 'a5ddc7c32004d660c7da249addbd1897', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-09 07:39:26', NULL),
(15, 'Kamal Bandara', 'kbandara@bbc.com', '771010589', '630fe2bcedcab25516f39e9a9a999060', NULL, NULL, NULL, NULL, 'ad/125', 'Warakapola', 'galle', 4597, '2021-06-09 11:14:10', NULL),
(16, 'shehanw', 'shehan@gmail.com', '0771651033', '48bfb974862e64b2821597faa7040594', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-29 12:21:32', NULL),
(17, 'codebusters', 'chamithshehan@hotmail.com', NULL, '383c1f75d623c1939d606f5421086441', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-15 07:17:03', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
