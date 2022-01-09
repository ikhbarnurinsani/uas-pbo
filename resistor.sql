-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 03, 2022 at 08:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas-pbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `resistor`
--

CREATE TABLE `resistor` (
  `id` int(10) UNSIGNED NOT NULL,
  `gelang1` tinyint(1) NOT NULL,
  `gelang2` tinyint(1) NOT NULL,
  `gelang3` tinyint(1) NOT NULL,
  `gelang4` decimal(10,2) NOT NULL,
  `resistansi` bigint(20) UNSIGNED NOT NULL,
  `toleransi` decimal(30,2) NOT NULL,
  `batas_minimum` decimal(30,2) NOT NULL,
  `batas_maksimum` decimal(30,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resistor`
--

INSERT INTO `resistor` (`id`, `gelang1`, `gelang2`, `gelang3`, `gelang4`, `resistansi`, `toleransi`, `batas_minimum`, `batas_maksimum`) VALUES
(260, 9, 2, 1, '5.00', 920, '46.00', '874.00', '966.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resistor`
--
ALTER TABLE `resistor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gelang1` (`gelang1`,`gelang2`,`gelang3`,`gelang4`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resistor`
--
ALTER TABLE `resistor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
