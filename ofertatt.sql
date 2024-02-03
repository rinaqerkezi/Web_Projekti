-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 04:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `ofertat`
--

CREATE TABLE `ofertat` (
  `ID` int(11) NOT NULL,
  `cmimi` int(255) NOT NULL,
  `vendi` varchar(30) NOT NULL,
  `koment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ofertat`
--

INSERT INTO `ofertat` (`ID`, `cmimi`, `vendi`, `koment`) VALUES
(1, 500, 'Paris', 'Book now a trip to the City of Love and get 20% off!'),
(2, 800, 'Aspen', 'Aspen Adventure Awaits!!'),
(3, 1200, 'Bora-Bora', 'Nature\'s Masterpiece.'),
(4, 600, 'Vienna', 'Vienna: Symphony of Elegance.'),
(5, 700, 'Berlin', 'Vibrant, Bold, Berlin Gold!'),
(6, 1000, 'Maldives', 'Maldives Majesty: Dive into Paradise.'),
(7, 900, 'London', 'London Lights, Big City Delights'),
(8, 750, 'Amsterdam', 'Canvas of Culture and Canals.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ofertat`
--
ALTER TABLE `ofertat`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ofertat`
--
ALTER TABLE `ofertat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
