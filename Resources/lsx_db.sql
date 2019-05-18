-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 18, 2019 at 02:21 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

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
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `Username` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Ranking` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_detail`
--

DROP TABLE IF EXISTS `account_detail`;
CREATE TABLE IF NOT EXISTS `account_detail` (
  `Username_Id` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Birthday` date NOT NULL,
  `Sex` tinyint(1) NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`Username_Id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `composer`
--

DROP TABLE IF EXISTS `composer`;
CREATE TABLE IF NOT EXISTS `composer` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Image` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Detail` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_vote`
--

DROP TABLE IF EXISTS `history_vote`;
CREATE TABLE IF NOT EXISTS `history_vote` (
  `Username_Id` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Song_Id` int(11) NOT NULL,
  `Stars` int(11) NOT NULL,
  PRIMARY KEY (`Username_Id`,`Song_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

DROP TABLE IF EXISTS `playlist`;
CREATE TABLE IF NOT EXISTS `playlist` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Username_Id` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `playlist_detail`
--

DROP TABLE IF EXISTS `playlist_detail`;
CREATE TABLE IF NOT EXISTS `playlist_detail` (
  `Playlist_Id` int(11) NOT NULL,
  `Song_Id` int(11) NOT NULL,
  PRIMARY KEY (`Playlist_Id`,`Song_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `singer`
--

DROP TABLE IF EXISTS `singer`;
CREATE TABLE IF NOT EXISTS `singer` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Image` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Detail` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

DROP TABLE IF EXISTS `song`;
CREATE TABLE IF NOT EXISTS `song` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NameSong` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Composer_Id` int(11) NOT NULL,
  `Singer_Id` int(11) NOT NULL,
  `Link` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `top_month`
--

DROP TABLE IF EXISTS `top_month`;
CREATE TABLE IF NOT EXISTS `top_month` (
  `Top` int(11) NOT NULL,
  `Song_Id` int(11) NOT NULL,
  PRIMARY KEY (`Top`,`Song_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `top_week`
--

DROP TABLE IF EXISTS `top_week`;
CREATE TABLE IF NOT EXISTS `top_week` (
  `Top` int(11) NOT NULL,
  `Song_Id` int(11) NOT NULL,
  PRIMARY KEY (`Top`,`Song_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vote_song`
--

DROP TABLE IF EXISTS `vote_song`;
CREATE TABLE IF NOT EXISTS `vote_song` (
  `Song_Id` int(11) NOT NULL,
  `Stars` int(11) NOT NULL,
  `point` float NOT NULL,
  PRIMARY KEY (`Song_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `Account_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `account_detail` (`Username_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `account_detail`
--
ALTER TABLE `account_detail`
  ADD CONSTRAINT `Account_Detail_ibfk_1` FOREIGN KEY (`Username_Id`) REFERENCES `account` (`Username`);

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `Song_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `vote_song` (`Song_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
