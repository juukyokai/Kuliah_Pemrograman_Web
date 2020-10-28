-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2020 at 04:18 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah_pemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `ID` int(11) NOT NULL,
  `NAMA` varchar(255) DEFAULT NULL,
  `Y_BEGIN` varchar(5) DEFAULT NULL,
  `Y_END` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`ID`, `NAMA`, `Y_BEGIN`, `Y_END`) VALUES
(1, 'SDN MOJO VIII/227', '2006', '2012'),
(2, 'SMP NEGERI 1 SURABAYA', '2012', '2015'),
(3, 'SMA NEGERI 1 SURABAYA', '2015', '2018'),
(4, 'UPN \"VETERAN\" JAWA TIMUR', '2018', 'NOW');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `NPM` bigint(11) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) DEFAULT NULL,
  `TELP` bigint(11) DEFAULT NULL,
  `MAIL` varchar(255) DEFAULT NULL,
  `GITHUB` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`NPM`, `NAMA`, `ALAMAT`, `TELP`, `MAIL`, `GITHUB`) VALUES
(18081010001, 'MOHAMMAD FAISAL RIFTIARRASYID', 'JL. JOJORAN 4/16 C SURABAYA', 82217401318, 'm.faisal.riftiarrasyid@gmail.com', 'https://github.com/juukyokai');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `ID` int(11) NOT NULL,
  `NAMA` varchar(255) DEFAULT NULL,
  `JENIS` varchar(255) DEFAULT NULL,
  `MASTERY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`ID`, `NAMA`, `JENIS`, `MASTERY`) VALUES
(1, 'PHOTOSHOP', 'P_SKILL', 75),
(2, 'MS. WORD', 'P_SKILL', 80),
(3, 'MS. POWER POINT', 'P_SKILL', 75),
(4, 'WEB DESIGN', 'P_SKILL', 60),
(5, 'SYSTEM ANALISYS', 'P_SKILL', 50),
(6, 'PROGRAMMING', 'P_SKILL', 60),
(7, 'INDONESIA', 'L_SKILL', 90),
(8, 'ENGLISH', 'L_SKILL', 80),
(9, 'JAPANESE', 'L_SKILL', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`NPM`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
