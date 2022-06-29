-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 05:06 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `ID` int(11) NOT NULL,
  `id_Number` decimal(10,0) DEFAULT NULL,
  `first_Name` varchar(255) DEFAULT NULL,
  `middle_Name` varchar(255) DEFAULT NULL,
  `last_Name` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `contact_num` decimal(10,0) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `timeNday` datetime DEFAULT current_timestamp(),
  `SIGN_IN` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`ID`, `id_Number`, `first_Name`, `middle_Name`, `last_Name`, `province`, `city`, `barangay`, `contact_num`, `email`, `timeNday`, `SIGN_IN`) VALUES
(1, '12345', 'Monkey', 'D.', 'Luffy', 'Cebu', 'Cebu City', 'Banilad', NULL, NULL, '2021-06-04 22:52:54', 0),
(2, '18102932', 'test', 't', 'est', 'test', 'test', 'test', NULL, NULL, '2021-06-04 14:02:01', 1),
(3, NULL, 'test', 't', 'est', 'test', 'test', 'test', NULL, NULL, '2021-06-04 22:18:16', 1),
(4, '18102931', 'Chopper', 'D', 'Doctor', 'East Blue', 'Logia', 'Blue', '987654321', 'test@test.com', '2021-06-04 22:53:34', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `id_Number` (`id_Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
