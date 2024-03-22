-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 04:05 PM
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
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `id` int(11) NOT NULL,
  `Emri` varchar(255) NOT NULL,
  `Mbiemri` varchar(255) NOT NULL,
  `Emaili` varchar(255) NOT NULL,
  `Passwordi` varchar(255) NOT NULL,
  `CPassword` varchar(255) NOT NULL,
  `Gjinia` varchar(255) NOT NULL,
  `NrTel` varchar(255) NOT NULL,
  `user_type` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`id`, `Emri`, `Mbiemri`, `Emaili`, `Passwordi`, `CPassword`, `Gjinia`, `NrTel`, `user_type`) VALUES
(1, 'Rina', 'Qerkezi', 'rq@ubt-uni.net', 'f9d2bcc64f597e4ab8770f4624e79c8601148ce2', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Female', '123-444-555', 'admin'),
(2, 'Olsa', 'Muhaxhiri', 'om@ubt-uni.net', '09abb9e064331d829943b9dcd18d97f92049a7c4', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Female', '888-999-777', 'admin'),
(25, 'Lisa', 'charr', 'lc@gamil.com', '38f9768faaf192b1d9afc352947d8069221ca99a', '38f9768faaf192b1d9afc352947d8069221ca99a', 'male', '111-111-111', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
