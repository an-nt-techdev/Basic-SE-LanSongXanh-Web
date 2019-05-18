-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 18, 2019 at 03:53 PM
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

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Username`, `Password`, `Ranking`) VALUES
('admin', 'admin', 'ADMIN'),
('dvip1999', 'thienan99', 'Diamond');

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

--
-- Dumping data for table `account_detail`
--

INSERT INTO `account_detail` (`Username_Id`, `Name`, `Birthday`, `Sex`, `Email`) VALUES
('admin', 'Quản trị viên', '2019-05-15', 0, 'adminLSX@gmail.com'),
('dvip1999', 'Nguyễn Thiên Ân', '1999-05-01', 0, 'ndsg1964@gmail.com');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `composer`
--

INSERT INTO `composer` (`Id`, `Name`, `Image`, `Detail`) VALUES
(1, 'Bảo Chấn', '/View/images/Composer/BaoChan.jpg', 'Một trong số những nhạc sĩ nổi tiếng nhất thời kì hoàng kim của Làn Sóng Xanh'),
(2, 'Bảo Phúc', '/View/images/Composer/BaoPhuc.jpg', 'Anh em cũng cha khác ông nội của nhạc sĩ Bảo Chấn'),
(3, 'Đức Trí', '/View/images/Composer/DucTri.jpg', 'Nhạc sĩ, nhà sản xuất nhạc tài năng của Việt Nam, hiện nay vẫn đang giảng dạy tại Nhạc Viện TPHCM'),
(4, 'Hoài An', '/View/images/Composer/HoaiAn.jpg', 'Một trong số những nhạc sĩ có khí chất khá lãng tử'),
(5, 'Ngô Thụy Miên', '/View/images/Composer/NgoThuyMien.jpg', 'Một trong số những nhạc sĩ tuyệt vời với dòng nhạc tình bất hủ, nhạc sang của Việt Nam'),
(6, 'Nguyễn Ngọc Thiện', '/View/images/Composer/NguyenNgocThien.jpg', 'Bác này tao không rõ nữa :v'),
(7, 'Nguyễn Nhất Huy', '/View/images/Composer/NguyenNhatHuy.jpg', 'Nhìn ngầu ngầu vậy thôi chứ đạo nhạc khỏe vl ra :v'),
(8, 'Quốc Dũng', '/View/images/Composer/QuocDung.jpg', 'Mức độ nổi tiếng và ảnh hưởng đến nền âm nhạc Việt Nam cũng ngang Bảo Chấn'),
(9, 'Vũ Thành An', '/View/images/Composer/VuThanhAn.jpg', 'Một nhạc sĩ Công Giáo với những tác phẩm không tên du dương và tuyệt vời !!'),
(10, 'Minh Khang', '/View/images/Singer/MinhKhang.jpg', 'Giỏi'),
(11, 'Trường Huy', '/View/images/Composer/TruongHuy.jpg', 'Không rõ bác này luôn');

-- --------------------------------------------------------

--
-- Table structure for table `history_vote`
--

DROP TABLE IF EXISTS `history_vote`;
CREATE TABLE IF NOT EXISTS `history_vote` (
  `Username_Id` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Song_Id` int(11) NOT NULL,
  `Stars` int(11) NOT NULL,
  PRIMARY KEY (`Username_Id`,`Song_Id`),
  KEY `Song_Id` (`Song_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `history_vote`
--

INSERT INTO `history_vote` (`Username_Id`, `Song_Id`, `Stars`) VALUES
('dvip1999', 6, 5),
('dvip1999', 20, 5);

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

DROP TABLE IF EXISTS `playlist`;
CREATE TABLE IF NOT EXISTS `playlist` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Username_Id` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Username_Id` (`Username_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `playlist_detail`
--

DROP TABLE IF EXISTS `playlist_detail`;
CREATE TABLE IF NOT EXISTS `playlist_detail` (
  `Playlist_Id` int(11) NOT NULL,
  `Song_Id` int(11) NOT NULL,
  PRIMARY KEY (`Playlist_Id`,`Song_Id`),
  KEY `Song_Id` (`Song_Id`)
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `singer`
--

INSERT INTO `singer` (`Id`, `Name`, `Image`, `Detail`) VALUES
(1, 'Đan Trường', '/View/images/Singer/DanTruong.jpg', 'Thần tượng lớn nhất của tao đấy !!'),
(2, 'Lam Trường', '/View/images/Singer/LamTruong.jpg', 'Một trong số những nam ca sĩ nổi nhất thời kì đầu của Làn Sóng Xanh'),
(3, 'Cẩm Ly', '/View/images/Singer/CamLy.jpg', 'Nữ ca sĩ song ca hay nhất với Đan Trường'),
(4, 'Bằng Kiều', '/View/images/Singer/BangKieu.jpg', 'Giọng cao vl'),
(5, 'Minh Thuận', '/View/images/Singer/MinhThuan.jpg', 'Nam ca sĩ tài năng nhưng yểu mệnh'),
(6, 'Mỹ Tâm', '/View/images/Singer/MyTam.JPG', 'Người đâu trẻ đẹp mãi vậy !!'),
(7, 'Phương Thanh', '/View/images/Singer/PhuongThanh.jpg', 'Giọng hơi khàn nhưng nội lực vl'),
(8, 'Thanh Thảo', '/View/images/Singer/ThanhThao.jpg', 'Bánh bèo của nhạc sĩ Đức Trí');

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
  PRIMARY KEY (`Id`),
  KEY `Singer_Id` (`Singer_Id`),
  KEY `Composer_Id` (`Composer_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`Id`, `NameSong`, `Composer_Id`, `Singer_Id`, `Link`) VALUES
(3, 'Cho tình mãi xa', 10, 1, '2Ii_NpKal8U'),
(4, 'Bóng dáng thiên thần', 6, 1, 'UhG6aIo-QgM'),
(5, 'Bóng Biển', 8, 1, '-B1pQT9upic'),
(6, 'Còn lại một mình', 6, 1, 'hLl8OfV2z0k'),
(7, 'Kiếp ve sầu', 1, 1, 'ccCig7MGs_g'),
(8, 'Mãi là niềm đau', 7, 1, 'yiuDUHSEoXY'),
(9, 'Mưa buồn', 4, 1, 't0fQEEZ5usk'),
(10, 'Katy Katy', 3, 2, 'fPgAKkz9FC4'),
(11, 'Tình thôi xót xa', 1, 2, '1IvcTNRlaNA'),
(12, 'Gót hồng', 2, 2, 'cu24COn7wfQ'),
(13, 'Xin được là tình cuối', 8, 3, 'IASkylWIigg'),
(14, 'Một ngày mùa đông', 1, 4, '9Gg_UU36d4U'),
(15, 'Nỗi đau ngọt ngào', 8, 5, 'aJ7eivfOcko'),
(16, 'Một thời đã xa', 11, 7, 'P2Q1qeWbfwg'),
(17, 'Tình xa khuất', 11, 7, 'ILZeCE2YMUc'),
(18, 'Ta chẳng còn ai', 3, 7, '6NDR_F5HZIw'),
(19, 'Ta chẳng còn ai', 3, 8, 'v5H8FZ18cIA'),
(20, 'Có quên được đâu', 3, 8, 'Jk_GQfl9NbI'),
(21, 'Khi giấc mơ về', 3, 7, 'Tgj5jL6CC9o');

-- --------------------------------------------------------

--
-- Table structure for table `top_month`
--

DROP TABLE IF EXISTS `top_month`;
CREATE TABLE IF NOT EXISTS `top_month` (
  `Top` int(11) NOT NULL,
  `Song_Id` int(11) NOT NULL,
  PRIMARY KEY (`Top`,`Song_Id`),
  KEY `Song_Id` (`Song_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `top_month`
--

INSERT INTO `top_month` (`Top`, `Song_Id`) VALUES
(1, 11),
(2, 12),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `top_week`
--

DROP TABLE IF EXISTS `top_week`;
CREATE TABLE IF NOT EXISTS `top_week` (
  `Top` int(11) NOT NULL,
  `Song_Id` int(11) NOT NULL,
  PRIMARY KEY (`Top`,`Song_Id`),
  KEY `Song_Id` (`Song_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `top_week`
--

INSERT INTO `top_week` (`Top`, `Song_Id`) VALUES
(1, 11),
(2, 12),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

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
-- Dumping data for table `vote_song`
--

INSERT INTO `vote_song` (`Song_Id`, `Stars`, `point`) VALUES
(3, 5, 5),
(4, 5, 5),
(5, 4, 4.5),
(6, 5, 5),
(7, 5, 5),
(8, 3, 3.8),
(9, 5, 5),
(10, 4, 4.7),
(11, 5, 5),
(12, 5, 5);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_detail`
--
ALTER TABLE `account_detail`
  ADD CONSTRAINT `Account_Detail_ibfk_1` FOREIGN KEY (`Username_Id`) REFERENCES `account` (`Username`);

--
-- Constraints for table `history_vote`
--
ALTER TABLE `history_vote`
  ADD CONSTRAINT `history_vote_ibfk_1` FOREIGN KEY (`Song_Id`) REFERENCES `song` (`Id`),
  ADD CONSTRAINT `history_vote_ibfk_2` FOREIGN KEY (`Username_Id`) REFERENCES `account` (`Username`);

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`Username_Id`) REFERENCES `account` (`Username`);

--
-- Constraints for table `playlist_detail`
--
ALTER TABLE `playlist_detail`
  ADD CONSTRAINT `playlist_detail_ibfk_1` FOREIGN KEY (`Song_Id`) REFERENCES `song` (`Id`),
  ADD CONSTRAINT `playlist_detail_ibfk_2` FOREIGN KEY (`Playlist_Id`) REFERENCES `playlist` (`Id`);

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`Singer_Id`) REFERENCES `singer` (`Id`),
  ADD CONSTRAINT `song_ibfk_2` FOREIGN KEY (`Composer_Id`) REFERENCES `composer` (`Id`);

--
-- Constraints for table `vote_song`
--
ALTER TABLE `vote_song`
  ADD CONSTRAINT `vote_song_ibfk_1` FOREIGN KEY (`Song_Id`) REFERENCES `song` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
