-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 12:01 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `ofertat`
--

CREATE TABLE `ofertat` (
  `ID` int(11) NOT NULL,
  `cmimi` int(255) NOT NULL,
  `vendi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `ID` int(22) NOT NULL,
  `user_id` int(20) NOT NULL,
  `title` varchar(40) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userat`
--

CREATE TABLE `userat` (
  `ID` int(11) NOT NULL,
  `Emri` varchar(20) NOT NULL,
  `Mbiemri` varchar(30) NOT NULL,
  `passwordi` varchar(30) NOT NULL,
  `nrTel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emri`, `email`, `password`, `user_type`) VALUES
(1, 'rina', 'rq@ubt-uni.net', 'f9d2bcc64f597e4ab8770f4624e79c8601148ce2', 'admin'),
(2, 'olsa', 'om@ubt-uni.net', '09abb9e064331d829943b9dcd18d97f92049a7c4', 'admin'),
(3, 'sasa', 'ss@gmail.com', '523edc26653af50ebbe0b077ffad4ad2081d72f9', 'user'),
(4, 'Erris', 'err@gmail.com', '8b539d5fd69357a6e65fb619171df1cf516dc276', 'user');

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
(2, 'Olsa', 'Muhaxhiri', 'om@ubt-uni.net', '09abb9e064331d829943b9dcd18d97f92049a7c4', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Female', '888-999-777'),
(21, 'loo', 'charles', 'lc@gamil.com', 'af6d85598d89c36aed517133c4fc86d3c9e0c62d', 'af6d85598d89c36aed517133c4fc86d3c9e0c62d', 'male', ' 222-222-222'),
(22, 'Lisa', 'charles', 'lq@gmail.com', 'a24c3aa1a185b50f2a05f4acac64f7e64f1b9541', 'e934e371b0c113ea847ecd147a707084dd6a1ad0', 'male', ' 333-333-333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bileta`
--
ALTER TABLE `bileta`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_ofertat` (`nrAdults`);

--
-- Indexes for table `ofertat`
--
ALTER TABLE `ofertat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_users` (`user_id`);

--
-- Indexes for table `userat`
--
ALTER TABLE `userat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bileta`
--
ALTER TABLE `bileta`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ofertat`
--
ALTER TABLE `ofertat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userat`
--
ALTER TABLE `userat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bileta`
--
ALTER TABLE `bileta`
  ADD CONSTRAINT `FK_ofertat` FOREIGN KEY (`nrAdults`) REFERENCES `ofertat` (`ID`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
