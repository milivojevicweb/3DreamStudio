-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 06:25 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3dreamdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `idContact` int(11) NOT NULL,
  `nameLastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `text` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL,
  `datesend` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`idContact`, `nameLastName`, `email`, `text`, `status`, `date`, `datesend`) VALUES
(1, 'Marko Milivojevic', 'markoczv314@gmail.com', 'Poruka!', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Proba Proba', 'proba@proba.com', 'Proba1', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Proba Proba', 'proba@proba.com', 'Proba3', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Proba', 'proba@proba.com', 'Proba6', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Proba', 'proba@proba.com', 'Proba7', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'kmkmkm', 'kmkmkmkmk', 'mm m m n ', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'fghfgh', 'fghfgh', 'fghfgh', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'fghfgh', 'fghfgh', 'fghfgh', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'fghfgh', 'fghfgh', 'fghfgh', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Proba Proba', 'markoczv314@gmail.com', 'Proba', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Marko Milivojevic', 'markoczv314@gmail.com', 'Probaa', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Marko Milivojevic', 'markoczv314@gmail.com', 'Proba', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Marko Milivojevic', 'markoczv314@gmail.com', 'adssad', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Marko Milivojevic', 'markoczv314@gmail.com', 'adssad', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `idImage` int(255) NOT NULL,
  `path` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idProject` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`idImage`, `path`, `alt`, `idProject`) VALUES
(6, '1705355298klisura.jpg', 'Đerdapska klisura', 6),
(7, '1705355563pingvin.jpg', 'Pingvin', 7),
(8, '1705355747grut.jpg', 'Groot', 8),
(9, '1705355964joda.jpg', 'Baby Yoda', 9),
(10, '1705356127gavran.jpg', 'Gavran', 10),
(11, '1705357994noz.jpg', 'Kunai nož', 11),
(13, '1705358204sah.jpg', 'Figurica za šah', 13);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `idProject` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `idUser` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`idProject`, `name`, `text`, `idUser`) VALUES
(6, 'Đerdapska klisura', 'Prototip modela Djerdapske klisure. \r\nIzradjen pomocu realnog generatora terena i Google lokacije. \r\n16x11x5cm', NULL),
(7, 'Pingvin', 'Izrađen tehnologijom 3D štampe, PLA+ materijal, ojačan I otporan na lomljenje I habanje.', NULL),
(8, 'Groot', '\"I am Groot\"\r\nGuardians of the galaxy.\r\n\r\nGroot (gold) 6cm. \r\nFigura po narudzbini', NULL),
(9, 'Baby Yoda', 'Neka sila bude sa tobom! \r\nČuveni Baby Yoda u baby veličini. \r\nIzradjen tehnologijom 3D štampe. \r\nBaby Yoda (silver) 8.5cm \r\nFigura po narudžbini', NULL),
(10, 'Gavran', 'Gavran 17cm. \r\nIzrađen od PLA + materijala, otpornog na habanje I lomljenje.', NULL),
(11, 'Kunai nož', 'Minato kunai (narudzbina). \r\n35cm', NULL),
(13, 'Figurica za šah', 'Za ljubitelje šaha.  U izradi set figurica za šah - Star Wars edicija, po porudzbini.  PLA+ materijal', 6);

-- --------------------------------------------------------

--
-- Table structure for table `registrationkey`
--

CREATE TABLE `registrationkey` (
  `idRegistrationKey` int(255) NOT NULL,
  `registrationKey` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registrationkey`
--

INSERT INTO `registrationkey` (`idRegistrationKey`, `registrationKey`) VALUES
(1, 'sifra123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `token` int(255) DEFAULT NULL,
  `developer` tinyint(1) NOT NULL,
  `idUserLevel` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `name`, `lastName`, `email`, `password`, `created`, `updated`, `token`, `developer`, `idUserLevel`) VALUES
(6, 'Marko', 'Milivojevic', 'marko.milivojevic.167.17@ict.edu.rs', '4fb6f7fdae2dbc006a1d90cd0405bcc9', '2022-02-01 02:50:09', '2022-02-01 02:50:09', 1644771651, 1, 2),
(8, 'Marko', 'Milivojevic', 'markoczv314@gmail.com', 'f7741f81f9edb5fb4880bf093e66f8b5', '2022-02-06 23:16:13', '2022-02-06 23:24:52', NULL, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `userlevel`
--

CREATE TABLE `userlevel` (
  `idUserLevel` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userlevel`
--

INSERT INTO `userlevel` (`idUserLevel`, `name`) VALUES
(1, 'Korisnik'),
(2, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idContact`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`idImage`),
  ADD KEY `idProject` (`idProject`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`idProject`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `registrationkey`
--
ALTER TABLE `registrationkey`
  ADD PRIMARY KEY (`idRegistrationKey`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idUserLevel` (`idUserLevel`);

--
-- Indexes for table `userlevel`
--
ALTER TABLE `userlevel`
  ADD PRIMARY KEY (`idUserLevel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `idContact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `idImage` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `idProject` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registrationkey`
--
ALTER TABLE `registrationkey`
  MODIFY `idRegistrationKey` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userlevel`
--
ALTER TABLE `userlevel`
  MODIFY `idUserLevel` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`idProject`) REFERENCES `project` (`idProject`) ON DELETE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE SET NULL;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idUserLevel`) REFERENCES `userlevel` (`idUserLevel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
