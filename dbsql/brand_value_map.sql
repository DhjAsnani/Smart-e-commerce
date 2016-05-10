-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2016 at 11:42 AM
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
-- Table structure for table `brand_value_map`
--

CREATE TABLE `brand_value_map` (
  `brand` varchar(50) NOT NULL,
  `value_b` double(5,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand_value_map`
--

INSERT INTO `brand_value_map` (`brand`, `value_b`) VALUES
('samsung ', 12.000),
('xiomi', 7.000),
('micromax', 6.000),
('lenovo ', 8.000),
('motorola', 9.000),
('coolpad', 6.000),
('asus', 8.000),
('htc', 10.000),
('lg', 11.000),
('leaco', 7.000),
('apple ', 13.000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
