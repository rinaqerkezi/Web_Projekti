-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 07:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprojekti`
--

-- --------------------------------------------------------

--
-- Table structure for table `bileta`
--

CREATE TABLE `bileta` (
  `ID` int(30) NOT NULL,
  `dataArritjes` date DEFAULT NULL,
  `dataKthimit` date NOT NULL,
  `nrAdults` int(10) NOT NULL,
  `nrKids` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bileta`
--

INSERT INTO `bileta` (`ID`, `dataArritjes`, `dataKthimit`, `nrAdults`, `nrKids`) VALUES
(2, '2026-02-01', '2026-02-16', 3, 7),
(3, '2024-08-20', '2024-08-25', 1, 3),
(4, '2024-07-01', '2024-07-08', 2, 2),
(5, '2024-06-10', '2024-06-15', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bileta`
--
ALTER TABLE `bileta`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bileta`
--
ALTER TABLE `bileta`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
