-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 05:55 PM
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
-- Table structure for table `fotot`
--

CREATE TABLE `fotot` (
  `id` int(255) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Emri` varchar(255) NOT NULL,
  `offer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fotot`
--

INSERT INTO `fotot` (`id`, `Foto`, `Emri`, `offer_id`) VALUES
(1, 'https://www.travelandleisure.com/thmb/lI6nagO4MS8iZ0XRg0GbnbtvKW8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/TAL-amsterdam-AMSTERDAMTGGHOG0823-a2f9a769f3c44a23b08649daf25e1c8c.jpg', 'Amsterdam', NULL),
(2, 'https://s7g10.scene7.com/is/image/stena/20150820_berlin-brandenburg-gate:16-9?ts=1688733511559&dpr=off', 'Berlin', NULL),
(5, 'https://media.tacdn.com/media/attractions-splice-spp-674x446/07/03/1c/9c.jpg', 'Paris', NULL),
(6, 'https://www.telegraph.co.uk/content/dam/Travel/hotels/2021/November/ritz-carlton-maldives-p.jpg', 'Maldives', NULL),
(7, 'https://www.tahititourisme.com/app/uploads/2023/06/bora-bora-la-perle-du-pacifique-a-stephane-mailion-photography.webp', 'Borabora', NULL),
(8, 'https://upload.wikimedia.org/wikipedia/commons/7/7c/Downtown_of_Aspen%2C_Colorado.jpg', 'Aspen', NULL),
(9, 'https://static01.nyt.com/images/2023/12/07/multimedia/36hours-vienna-01-wklj/36hours-vienna-01-wklj-superJumbo.jpg', 'Vienna', NULL),
(10, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXVlbWGWKc8LCFw40lIstzgSOaZsDz9_3zmVgKgcxwUDA99GsR3NdETWkPpLSKOAsYjz0&usqp=CAU', 'London', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fotot`
--
ALTER TABLE `fotot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ofertat_id` (`offer_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fotot`
--
ALTER TABLE `fotot`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fotot`
--
ALTER TABLE `fotot`
  ADD CONSTRAINT `fotot_ibfk_1` FOREIGN KEY (`offer_id`) REFERENCES `ofertat` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
