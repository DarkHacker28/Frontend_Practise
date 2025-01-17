-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 02:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fila`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_detail`
--

CREATE TABLE `contact_detail` (
  `id` int(10) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_detail`
--

INSERT INTO `contact_detail` (`id`, `firstname`, `lastname`, `email`, `phone`) VALUES
(1, 'sakshee', 'radadiya', 'ashakeshvala99@gmail.com', 2147483647),
(2, 'sakshee', 'radadiya', 'sakshee3131@gmail.com', 2147483647),
(3, 'hiten', 'tank', 'bodoko8618@shopxda.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `signin_detail`
--

CREATE TABLE `signin_detail` (
  `id` int(10) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin_detail`
--

INSERT INTO `signin_detail` (`id`, `email`, `password`) VALUES
(1, 'sakshee3131@gmail.com', 85241),
(2, 'bodoko8618@shopxda.com', 84654568);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_detail`
--
ALTER TABLE `contact_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin_detail`
--
ALTER TABLE `signin_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_detail`
--
ALTER TABLE `contact_detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signin_detail`
--
ALTER TABLE `signin_detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
