-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2016 at 11:43 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartecommuserdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobiledb`
--

CREATE TABLE `mobiledb` (
  `ID` int(3) DEFAULT NULL,
  `brand` varchar(8) DEFAULT NULL,
  `name` varchar(28) DEFAULT NULL,
  `camera` int(2) DEFAULT NULL,
  `screen` decimal(3,2) DEFAULT NULL,
  `price` int(5) DEFAULT NULL,
  `rating_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobiledb`
--

INSERT INTO `mobiledb` (`ID`, `brand`, `name`, `camera`, `screen`, `price`, `rating_value`) VALUES
(1, 'samsung ', 'galaxy J3', 8, '5.00', 8990, 107),
(2, 'xiomi', 'redmi note 3', 16, '5.50', 9998, 112),
(3, 'xiomi', 'redmi 3', 13, '5.00', 7199, 126),
(4, 'micromax', 'canvas sparks 3', 8, '5.50', 5000, 96),
(5, 'lenovo ', 'Vibe k5', 13, '5.00', 8499, 122),
(6, 'samsung ', 'galaxy j2', 5, '4.70', 7580, 69),
(7, 'motorola', 'moto g3', 13, '5.00', 9999, 117),
(8, 'lenovo ', 'k3 note', 13, '5.50', 9199, 113),
(9, 'xiomi', 'redmi pro 3', 13, '5.00', 9999, 91),
(10, 'coolpad', 'note 3', 13, '5.00', 6999, 111),
(11, 'lenovo ', 'lemon 3', 13, '5.00', 7499, 139),
(12, 'samsung ', 'galaxy on5', 8, '5.00', 8190, 117),
(13, 'xiomi', 'redmi note 2', 13, '5.50', 9999, 91),
(14, 'micromax', 'canvas 5', 13, '5.20', 9999, 78),
(15, 'micromax', 'canvas mega 4G', 13, '5.50', 8638, 90),
(16, 'xiomi', 'redmi 2 prime', 8, '4.70', 6999, 70),
(17, 'asus', 'Zenfone Max ZC550', 13, '5.50', 9599, 108),
(18, 'lenovo ', 'A6000', 8, '5.00', 6999, 91),
(19, 'lenovo ', 'Vibe p1m', 8, '5.00', 7500, 85),
(20, 'coolpad', 'note 3', 13, '5.50', 9000, 87),
(21, 'asus', 'Zenfone 2 Laser', 13, '5.50', 9999, 104),
(22, 'samsung ', 'tizen z3', 8, '5.00', 6930, 139),
(23, 'motorola', 'moto e2', 5, '4.50', 6999, 56),
(24, 'micromax', 'yu yuphoria ', 8, '5.00', 7290, 66),
(25, 'micromax', 'canvas sparks ', 8, '4.70', 5999, 70),
(26, 'samsung ', 'galaxy star pro duos', 2, '4.00', 4600, 39),
(27, 'micromax', 'canvas xpress 2', 13, '5.00', 6199, 126),
(28, 'samsung ', 'galaxy grand prime', 8, '5.00', 8249, 116),
(29, 'micromax', 'yu yu5200', 13, '5.20', 8999, 87),
(30, 'micromax', 'canvas xpress 4g', 8, '5.00', 6599, 73),
(31, 'samsung ', 'galaxy j1', 5, '4.30', 5990, 75),
(32, 'lenovo ', 'a7000', 8, '5.50', 7949, 81),
(33, 'lenovo ', 'a2010', 5, '4.50', 4990, 70),
(34, 'htc', 'desire 526G plus', 8, '4.70', 7399, 95),
(35, 'htc', 'desire 620 dual sim', 8, '5.00', 8389, 95),
(36, 'micromax', 'canvas juice 3', 8, '5.50', 7199, 67),
(37, 'xiomi', 'redmi note prime', 13, '5.50', 7999, 114),
(38, 'micromax', 'canvas fire', 8, '4.70', 5699, 74),
(39, 'samsung ', 'galaxy core prime ', 5, '4.50', 5990, 88),
(40, 'samsung ', 'galaxy core 2', 5, '4.50', 6799, 77),
(41, 'lg', 'k7', 5, '5.00', 8999, 61),
(42, 'samsung ', 'galaxy s duos', 5, '4.00', 8899, 51),
(43, 'micromax', 'canvas juice 2', 8, '5.00', 6249, 77),
(44, 'asus', 'zenfone 2 ze551ml', 13, '5.50', 9999, 104),
(45, 'samsung ', 'grand prime ', 8, '5.00', 8250, 116),
(46, 'micromax', 'canvas silver 5', 8, '4.70', 6691, 63),
(47, 'coolpad', 'dazen 1', 8, '5.00', 6299, 76),
(48, 'micromax', 'canvas nitro 3', 13, '5.00', 7999, 98),
(49, 'motorola', 'moto e 2 4G', 5, '4.50', 6999, 56),
(50, 'micromax', 'unite 3', 8, '4.70', 5729, 73),
(51, 'xiomi', 'redmi note 3 32gb', 16, '5.50', 11998, 93),
(52, 'samsung ', ' galaxy j7', 13, '5.50', 14150, 110),
(53, 'samsung ', 'galaxy j5', 13, '5.00', 11379, 137),
(54, 'micromax', 'canvas 6 ', 13, '5.50', 13999, 56),
(55, 'lenovo ', 'k4 note', 13, '5.50', 11999, 87),
(56, 'leaco', 'le 1s', 13, '5.50', 10999, 83),
(57, 'motorola', 'moto g turbo', 13, '5.00', 12499, 94),
(58, 'samsung ', 'galaxy on7', 13, '5.50', 10190, 153),
(59, 'xiomi', 'redmi 3 proffesional', 13, '5.00', 10000, 91),
(60, 'lenovo', 'k5 note', 13, '5.50', 11999, 87),
(61, 'micromax', 'canvas 5', 13, '5.20', 10000, 78),
(62, 'samsung ', 'galaxy j5', 13, '5.20', 12999, 120),
(63, 'samsung ', 'galaxy s4', 13, '5.00', 11990, 130),
(64, 'htc', 'desire 626 plus ', 13, '5.00', 10195, 128),
(65, 'lg', 'k10', 13, '5.30', 12740, 112),
(66, 'micromax', 'yu yureka note', 13, '6.00', 13499, 65),
(67, 'leaco', 'le2 ', 16, '5.50', 11599, 97),
(68, 'xiomi', 'mi4', 13, '5.00', 14789, 62),
(69, 'samsung ', 'galaxy e5 ', 8, '5.00', 11490, 84),
(70, 'htc', 'desire 728 ', 13, '5.50', 14399, 90),
(71, 'xiomi', 'mi4i', 13, '5.00', 11999, 76),
(72, 'lenovo ', 'vibe p1', 13, '5.50', 14999, 69),
(73, 'asus', 'zenfone 2 Laser ZE550KL  3GB', 13, '5.50', 12888, 81),
(74, 'htc ', 'desire 820G plus', 13, '5.50', 13595, 96),
(75, 'asus', 'zenfone 2 ze551ml 2GB', 12, '5.50', 10999, 87),
(76, 'lenovo ', 'vibe s1', 13, '5.00', 14999, 69),
(77, 'lenovo ', 'k3 note music ', 13, '5.50', 10000, 104),
(78, 'asus', 'zenfone 3', 16, '5.50', 14999, 85),
(79, 'samsung ', 'galaxy grand max', 13, '5.25', 14999, 104),
(80, 'lenovo ', 'a7000 turbo', 13, '5.50', 10199, 102),
(81, 'apple ', 'iphone 4s 8GB', 8, '3.50', 13499, 48),
(82, 'samsung ', 'galaxy grand 2 ', 8, '5.25', 11499, 83),
(83, 'lenovo', 'a7010', 13, '5.50', 10999, 95),
(84, 'lenovo ', 'p70', 13, '5.00', 10000, 104),
(85, 'lg', ' g3 stylus ', 13, '5.50', 11000, 130),
(86, 'lg ', 'g4 stylus ', 13, '5.50', 10000, 143),
(87, 'asus ', 'zenfone selfie ZD551KL', 13, '5.50', 14849, 70),
(88, 'motorola', 'moto x 2nd gen', 13, '5.20', 14999, 78),
(89, 'samsung ', 'grand quattro', 5, '4.70', 10000, 53),
(90, 'micromax', 'canvas knight 2 4g', 13, '5.00', 10999, 71),
(91, 'samsung ', 'galaxy mega 2', 8, '6.00', 13999, 77),
(92, 'lenovo ', 's90 sisley', 13, '5.00', 10990, 95),
(93, 'lg ', 'magna', 8, '5.00', 10000, 88),
(94, 'samsung ', 'galaxy a3', 8, '4.50', 13490, 62),
(95, 'htc ', 'desire 520', 8, '4.50', 10990, 64),
(96, 'samsung ', 'galaxy s2 plus ', 8, '4.30', 13900, 52),
(97, 'xiomi', 'mi 4c', 13, '5.00', 13999, 65),
(98, 'lenovo', 'vibe s1 lite', 13, '5.00', 13299, 78),
(99, 'lg', 'G3 beat', 8, '5.00', 10650, 83),
(100, 'asus', 'pegasus 5000', 13, '5.50', 12999, 80);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
