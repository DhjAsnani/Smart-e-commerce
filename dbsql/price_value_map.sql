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
-- Table structure for table `price_value_map`
--

CREATE TABLE `price_value_map` (
  `price` int(11) NOT NULL,
  `value_p` double(5,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price_value_map`
--

INSERT INTO `price_value_map` (`price`, `value_p`) VALUES
(8990, 8.990),
(9998, 9.998),
(7199, 7.199),
(5000, 5.000),
(8499, 8.499),
(7580, 7.580),
(9999, 9.999),
(9199, 9.199),
(6999, 6.999),
(7499, 7.499),
(8190, 8.190),
(8638, 8.638),
(9599, 9.599),
(7500, 7.500),
(9000, 9.000),
(6930, 6.930),
(7290, 7.290),
(5999, 5.999),
(4600, 4.600),
(6199, 6.199),
(8249, 8.249),
(8999, 8.999),
(6599, 6.599),
(5990, 5.990),
(7949, 7.949),
(4990, 4.990),
(7399, 7.399),
(8389, 8.389),
(7999, 7.999),
(5699, 5.699),
(6799, 6.799),
(8899, 8.899),
(6249, 6.249),
(8250, 8.250),
(6691, 6.691),
(6299, 6.299),
(5729, 5.729),
(11998, 11.998),
(14150, 14.150),
(11379, 11.379),
(13999, 13.999),
(11999, 11.999),
(10999, 10.999),
(12499, 12.499),
(10190, 10.190),
(10000, 10.000),
(12999, 12.999),
(11990, 11.990),
(10195, 10.195),
(12740, 12.740),
(13499, 13.499),
(11599, 11.599),
(14789, 14.789),
(11490, 11.490),
(14399, 14.399),
(14999, 14.999),
(12888, 12.888),
(13595, 13.595),
(10199, 10.199),
(11499, 11.499),
(11000, 11.000),
(14849, 14.849),
(10990, 10.990),
(13490, 13.490),
(13900, 13.900),
(13299, 13.299),
(10650, 10.650);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
