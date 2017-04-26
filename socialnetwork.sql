-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 11:15 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialnetwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `atteli`
--

CREATE TABLE `atteli` (
  `id` int(11) NOT NULL,
  `attels` mediumblob NOT NULL,
  `lietotajs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `atttab`
--

CREATE TABLE `atttab` (
  `id` int(11) NOT NULL,
  `attels` int(11) NOT NULL,
  `komentars` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `draugi`
--

CREATE TABLE `draugi` (
  `id` int(11) NOT NULL,
  `lietotajs` int(11) NOT NULL,
  `draugs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE `komentari` (
  `id` int(11) NOT NULL,
  `teksts` varchar(255) NOT NULL,
  `lietotajs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lietotaji`
--

CREATE TABLE `lietotaji` (
  `id` int(11) NOT NULL,
  `vards` varchar(20) NOT NULL,
  `uzvards` varchar(30) NOT NULL,
  `iesauka` varchar(20) DEFAULT NULL,
  `pieregistrejas` datetime NOT NULL,
  `valsts` varchar(40) DEFAULT NULL,
  `lietotajvards` varchar(20) NOT NULL,
  `parole` varchar(40) NOT NULL,
  `tiesibas` int(11) DEFAULT NULL,
  `epasts` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lietotaji`
--

INSERT INTO `lietotaji` (`id`, `vards`, `uzvards`, `iesauka`, `pieregistrejas`, `valsts`, `lietotajvards`, `parole`, `tiesibas`, `epasts`) VALUES
(1, 'John', 'Doe', 'Doe', '2017-04-24 12:51:05', 'Latvija', 'Lietotajs2', '123', 0, 'john@example.com'),
(10, 'Matiss', 'Vanags', NULL, '2017-04-26 22:51:33', NULL, 'Ever', 'e98adc2ec5eea85abc7d435a90692871', NULL, 'Matiss@vanags.lv'),
(18, '3', '3', NULL, '2017-04-26 23:04:57', NULL, '3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', NULL, '3');

-- --------------------------------------------------------

--
-- Table structure for table `tiesibas`
--

CREATE TABLE `tiesibas` (
  `id` int(11) NOT NULL,
  `tiesibas` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiesibas`
--

INSERT INTO `tiesibas` (`id`, `tiesibas`) VALUES
(1, 'visas');

-- --------------------------------------------------------

--
-- Table structure for table `tiestab`
--

CREATE TABLE `tiestab` (
  `id` int(11) NOT NULL,
  `lietotajs` int(11) NOT NULL,
  `tiesibas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vestules`
--

CREATE TABLE `vestules` (
  `id` int(11) NOT NULL,
  `teksts` varchar(255) NOT NULL,
  `sutitajs` int(11) NOT NULL,
  `sanemejs` int(11) NOT NULL,
  `datums` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atteli`
--
ALTER TABLE `atteli`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lietotajs` (`lietotajs`);

--
-- Indexes for table `atttab`
--
ALTER TABLE `atttab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attels` (`attels`),
  ADD KEY `komentars` (`komentars`);

--
-- Indexes for table `draugi`
--
ALTER TABLE `draugi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lietotajs` (`lietotajs`),
  ADD KEY `draugs` (`draugs`);

--
-- Indexes for table `komentari`
--
ALTER TABLE `komentari`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lietotajs` (`lietotajs`);

--
-- Indexes for table `lietotaji`
--
ALTER TABLE `lietotaji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiesibas`
--
ALTER TABLE `tiesibas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiestab`
--
ALTER TABLE `tiestab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lietotajs` (`lietotajs`),
  ADD KEY `tiesibas` (`tiesibas`);

--
-- Indexes for table `vestules`
--
ALTER TABLE `vestules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanemejs` (`sanemejs`),
  ADD KEY `sutitajs` (`sutitajs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atteli`
--
ALTER TABLE `atteli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `atttab`
--
ALTER TABLE `atttab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `draugi`
--
ALTER TABLE `draugi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `komentari`
--
ALTER TABLE `komentari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lietotaji`
--
ALTER TABLE `lietotaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tiesibas`
--
ALTER TABLE `tiesibas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tiestab`
--
ALTER TABLE `tiestab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vestules`
--
ALTER TABLE `vestules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `atteli`
--
ALTER TABLE `atteli`
  ADD CONSTRAINT `atteli_ibfk_1` FOREIGN KEY (`lietotajs`) REFERENCES `lietotaji` (`id`);

--
-- Constraints for table `atttab`
--
ALTER TABLE `atttab`
  ADD CONSTRAINT `atttab_ibfk_1` FOREIGN KEY (`attels`) REFERENCES `atteli` (`id`),
  ADD CONSTRAINT `atttab_ibfk_2` FOREIGN KEY (`komentars`) REFERENCES `komentari` (`id`);

--
-- Constraints for table `draugi`
--
ALTER TABLE `draugi`
  ADD CONSTRAINT `draugi_ibfk_1` FOREIGN KEY (`lietotajs`) REFERENCES `lietotaji` (`id`),
  ADD CONSTRAINT `draugi_ibfk_2` FOREIGN KEY (`draugs`) REFERENCES `lietotaji` (`id`);

--
-- Constraints for table `komentari`
--
ALTER TABLE `komentari`
  ADD CONSTRAINT `komentari_ibfk_1` FOREIGN KEY (`lietotajs`) REFERENCES `lietotaji` (`id`);

--
-- Constraints for table `tiestab`
--
ALTER TABLE `tiestab`
  ADD CONSTRAINT `tiestab_ibfk_1` FOREIGN KEY (`tiesibas`) REFERENCES `tiesibas` (`id`),
  ADD CONSTRAINT `tiestab_ibfk_3` FOREIGN KEY (`lietotajs`) REFERENCES `lietotaji` (`id`);

--
-- Constraints for table `vestules`
--
ALTER TABLE `vestules`
  ADD CONSTRAINT `vestules_ibfk_1` FOREIGN KEY (`sutitajs`) REFERENCES `lietotaji` (`id`),
  ADD CONSTRAINT `vestules_ibfk_2` FOREIGN KEY (`sanemejs`) REFERENCES `lietotaji` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
