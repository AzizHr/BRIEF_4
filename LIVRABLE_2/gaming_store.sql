-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 10:25 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaming_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID_CAT` int(11) NOT NULL,
  `LIBELLE_CAT` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID_CAT`, `LIBELLE_CAT`) VALUES
(1, 'Computers'),
(2, 'Keyboards'),
(3, 'Mouses'),
(4, 'Speakers');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `LIBELLE` varchar(100) NOT NULL,
  `QUANTITE` int(11) NOT NULL,
  `PRIX` float NOT NULL,
  `ID_CAT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `LIBELLE`, `QUANTITE`, `PRIX`, `ID_CAT`) VALUES
(1, 'Computer1', 25, 500, 1),
(2, 'Computer2', 12, 600, 2),
(3, 'Computer3', 15, 400, 3),
(4, 'Computer4', 12, 430, 4),
(5, 'Keyboard1', 35, 40, 1),
(6, 'Keyboard2', 45, 45, 2),
(7, 'Keyboard3', 25, 32, 3),
(8, 'Keyboard4', 17, 38, 4),
(9, 'Mouse1', 47, 20, 1),
(10, 'Mouse2', 57, 17, 2),
(11, 'Mouse3', 60, 24, 3),
(12, 'Mouse4', 28, 14, 4),
(13, 'Speaker1', 31, 70, 1),
(14, 'Speaker2', 37, 52, 2),
(15, 'Speaker3', 87, 95, 3),
(16, 'Speaker4', 66, 74, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_CAT`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_CAT` (`ID_CAT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID_CAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ID_CAT`) REFERENCES `category` (`ID_CAT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
