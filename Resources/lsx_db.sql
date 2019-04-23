-- phpMyAdmin SQL Dump
-- version 5.0.0-dev
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.30.23
-- Generation Time: Apr 23, 2019 at 01:12 PM
-- Server version: 8.0.3-rc-log
-- PHP Version: 7.2.16-1+0~20190307202415.17+stretch~1.gbpa7be82

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsx_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Account`
--

CREATE TABLE `Account` (
  `Username` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Ranking` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Account_Detail`
--

CREATE TABLE `Account_Detail` (
  `Username_Id` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Birthday` date NOT NULL,
  `Sex` tinyint(1) NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Composer`
--

CREATE TABLE `Composer` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Image` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Detail` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Favorite_Song`
--

CREATE TABLE `Favorite_Song` (
  `Username_Id` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Song_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `History_Vote`
--

CREATE TABLE `History_Vote` (
  `Username_Id` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Song_Id` int(11) NOT NULL,
  `Stars` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Playlist`
--

CREATE TABLE `Playlist` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Username_Id` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Playlist_Detail`
--

CREATE TABLE `Playlist_Detail` (
  `Playlist_Id` int(11) NOT NULL,
  `Song_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Singer`
--

CREATE TABLE `Singer` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Image` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Detail` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Song`
--

CREATE TABLE `Song` (
  `Id` int(11) NOT NULL,
  `NameSong` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Composer_Id` int(11) NOT NULL,
  `ComposerSecond_Id` int(11) NOT NULL,
  `Singer_Id` int(11) NOT NULL,
  `SingerSecond_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Vote_Song`
--

CREATE TABLE `Vote_Song` (
  `Song_Id` int(11) NOT NULL,
  `One_Star` int(11) NOT NULL,
  `Two_Stars` int(11) NOT NULL,
  `Three_Stars` int(11) NOT NULL,
  `Four_Stars` int(11) NOT NULL,
  `Five_Stars` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Account`
--
ALTER TABLE `Account`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `Account_Detail`
--
ALTER TABLE `Account_Detail`
  ADD PRIMARY KEY (`Username_Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `Composer`
--
ALTER TABLE `Composer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Favorite_Song`
--
ALTER TABLE `Favorite_Song`
  ADD PRIMARY KEY (`Username_Id`,`Song_Id`);

--
-- Indexes for table `History_Vote`
--
ALTER TABLE `History_Vote`
  ADD PRIMARY KEY (`Username_Id`,`Song_Id`);

--
-- Indexes for table `Playlist`
--
ALTER TABLE `Playlist`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Playlist_Detail`
--
ALTER TABLE `Playlist_Detail`
  ADD PRIMARY KEY (`Playlist_Id`,`Song_Id`);

--
-- Indexes for table `Singer`
--
ALTER TABLE `Singer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Song`
--
ALTER TABLE `Song`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Vote_Song`
--
ALTER TABLE `Vote_Song`
  ADD PRIMARY KEY (`Song_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Composer`
--
ALTER TABLE `Composer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Playlist`
--
ALTER TABLE `Playlist`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Singer`
--
ALTER TABLE `Singer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Song`
--
ALTER TABLE `Song`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Account`
--
ALTER TABLE `Account`
  ADD CONSTRAINT `Account_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `Account_Detail` (`username_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Account_Detail`
--
ALTER TABLE `Account_Detail`
  ADD CONSTRAINT `Account_Detail_ibfk_1` FOREIGN KEY (`Username_Id`) REFERENCES `Account` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

