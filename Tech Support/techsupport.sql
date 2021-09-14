-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2021 at 09:20 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techsupport`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `ID` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `user_password` text NOT NULL,
  `user_perm` varchar(9) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`ID`, `user_id`, `user_password`, `user_perm`, `user_name`, `user_location`) VALUES
(9, 'ac', '5690dddfa28ae085d23518a035707282', 'kullanici', 'asdasdas', 'sgsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `ID` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_location` varchar(50) NOT NULL,
  `yazici` varchar(50) NOT NULL,
  `sistem` varchar(50) NOT NULL,
  `monitor` varchar(50) NOT NULL,
  `kartus` varchar(50) NOT NULL,
  `diger` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`ID`, `user_name`, `user_location`, `yazici`, `sistem`, `monitor`, `kartus`, `diger`) VALUES
(12, 'asdasdas', 'sgsdfsdf', 'Yazici Arizasi', '-', 'Monitor Arizasi', 'Kartus Dolumu', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(13, 'asdasdas', 'sgsdfsdf', 'Yazici Arizasi', '-', 'Monitor Arizasi', 'Kartus Dolumu', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
