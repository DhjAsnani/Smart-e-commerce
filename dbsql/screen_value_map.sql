-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2016 at 11:44 AM
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
-- Table structure for table `screen_value_map`
--

CREATE TABLE `screen_value_map` (
  `screen` decimal(3,2) NOT NULL,
  `value_s` double(5,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `screen_value_map`
--

INSERT INTO `screen_value_map` (`screen`, `value_s`) VALUES
('5.00', 8.000),
('5.50', 8.000),
('4.70', 7.000),
('5.20', 8.000),
('4.50', 7.000),
('4.00', 6.000),
('4.30', 6.000),
('5.30', 8.000),
('6.00', 9.000),
('5.25', 8.000),
('3.50', 5.000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
