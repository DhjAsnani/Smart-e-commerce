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
-- Table structure for table `logindetails`
--

CREATE TABLE `logindetails` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `login` int(11) NOT NULL DEFAULT '0',
  `prefprob` varchar(30) NOT NULL DEFAULT '0',
  `mycart` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`id`, `name`, `email`, `password`, `gender`, `login`, `prefprob`, `mycart`) VALUES
(145, 'kom', 'komm@k.com', 'kio', 'Male', 0, '0', ''),
(161, 'supersaiyan vegeta', 'meun@h.com', '1234', 'Male', 0, '0', ''),
(164, 'supersaiyan vegeta', 'meun1@h.com', '1234', 'Female', 0, '0', ''),
(151, 'abcd', 'abcd@gmail.com', '1234', 'Male', 0, '0', ''),
(181, 'Dheeraj Asnani', 'asnani.dheeraj@yahoo.com', 'kamehameha1234', 'Male', 1, '48', ',,11'),
(176, 'Dheeraj Asnani', 'asnani.dheeraj@yahoo.co', 'kamehameha', 'Male', 0, '111', ',63,85,8,2,2,'),
(158, 'asnani', 'dhj@yahoo.com', 'kamehameha', 'Male', 0, '0', ''),
(159, 'sansa stark', 'sansa@got.com', '1234', 'Female', 0, '102', ''),
(149, 'abcd', 'asd@yahoo.com', '123', 'Male', 0, '0', ''),
(153, 'yahoo', 'itsyou@yahoo.com', '147', 'Male', 0, '122', ','),
(150, 'acbd', 'asdf@yahoo.com', '123', 'Male', 0, '0', ''),
(155, 'kol', 'lok@yahoo.com', '12345678', 'Female', 0, '0', ',,,,,,'),
(162, 'Gautam', 'gautam@gmail.com', 'gautamkumar', 'Male', 0, '126', ',,,,');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
