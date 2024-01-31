-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2024 at 02:55 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Emri` varchar(255) NOT NULL,
  `Mbiemri` varchar(255) NOT NULL,
  `Emaili` varchar(255) NOT NULL,
  `Passwordi` varchar(255) NOT NULL,
  `CPassword` varchar(255) NOT NULL,
  `Gjinia` varchar(255) NOT NULL,
  `NrTel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Emri`, `Mbiemri`, `Emaili`, `Passwordi`, `CPassword`, `Gjinia`, `NrTel`) VALUES
(1, 'Rina', 'Qerkezi', 'rq@ubt-uni.net', 'f9d2bcc64f597e4ab8770f4624e79c8601148ce2', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Female', '123-444-555'),
(2, 'Olsa', 'Muhaxhiri', 'om@ubt-uni.net', '09abb9e064331d829943b9dcd18d97f92049a7c4', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Female', '888-999-777'),
(3, 'Sasa', 'Gashi', 'ss@gmail.com', '523edc26653af50ebbe0b077ffad4ad2081d72f9', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Female', '222-333-444'),
(4, 'Erris', 'Xharavina', 'err@gmail.com', '8b539d5fd69357a6e65fb619171df1cf516dc276', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Male', '123-456-789');

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
  `NrTel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`id`, `Emri`, `Mbiemri`, `Emaili`, `Passwordi`, `CPassword`, `Gjinia`, `NrTel`) VALUES
(1, 'Rina', 'Qerkezi', 'rq@ubt-uni.net', 'f9d2bcc64f597e4ab8770f4624e79c8601148ce2', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Female', '123-444-555'),
(2, 'Olsa', 'Muhaxhiri', 'om@ubt-uni.net', '09abb9e064331d829943b9dcd18d97f92049a7c4', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Female', '888-999-777'),
(3, 'Sasa', 'Gashi', 'ss@gmail.com', '523edc26653af50ebbe0b077ffad4ad2081d72f9', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Female', '222-333-444'),
(4, 'Erris', 'Xharavina', 'err@gmail.com', '8b539d5fd69357a6e65fb619171df1cf516dc276', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Male', '123-456-789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Mbiemri` (`id`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
