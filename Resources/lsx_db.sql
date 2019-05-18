-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 18, 2019 at 04:05 PM
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
  `username` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ranking` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `ranking`) VALUES
('admin', 'admin', 'ADMIN'),
('dvip1999', 'thienan99', 'Diamond');

-- --------------------------------------------------------

--
-- Table structure for table `account_detail`
--

DROP TABLE IF EXISTS `account_detail`;
CREATE TABLE IF NOT EXISTS `account_detail` (
  `username_id` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `birthday` date NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`username_id`),
  UNIQUE KEY `Email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `account_detail`
--

INSERT INTO `account_detail` (`username_id`, `name`, `birthday`, `sex`, `email`) VALUES
('admin', 'Quản trị viên', '2019-05-15', 0, 'adminLSX@gmail.com'),
('dvip1999', 'Nguyễn Thiên Ân', '1999-05-01', 0, 'ndsg1964@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `composer`
--

DROP TABLE IF EXISTS `composer`;
CREATE TABLE IF NOT EXISTS `composer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `detail` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `composer`
--

INSERT INTO `composer` (`id`, `name`, `image`, `detail`) VALUES
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
  `username_id` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `song_id` int(11) NOT NULL,
  `stars` int(11) NOT NULL,
  PRIMARY KEY (`username_id`,`song_id`),
  KEY `Song_Id` (`song_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `history_vote`
--

INSERT INTO `history_vote` (`username_id`, `song_id`, `stars`) VALUES
('dvip1999', 6, 5),
('dvip1999', 20, 5);

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

DROP TABLE IF EXISTS `playlist`;
CREATE TABLE IF NOT EXISTS `playlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `username_id` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Username_Id` (`username_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `playlist_detail`
--

DROP TABLE IF EXISTS `playlist_detail`;
CREATE TABLE IF NOT EXISTS `playlist_detail` (
  `playlist_id` int(11) NOT NULL,
  `song_id` int(11) NOT NULL,
  PRIMARY KEY (`playlist_id`,`song_id`),
  KEY `Song_Id` (`song_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `singer`
--

DROP TABLE IF EXISTS `singer`;
CREATE TABLE IF NOT EXISTS `singer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `detail` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `singer`
--

INSERT INTO `singer` (`id`, `name`, `image`, `detail`) VALUES
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namesong` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `composer_id` int(11) NOT NULL,
  `singer_id` int(11) NOT NULL,
  `link` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Singer_Id` (`singer_id`),
  KEY `Composer_Id` (`composer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`id`, `namesong`, `composer_id`, `singer_id`, `link`) VALUES
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
  `top` int(11) NOT NULL,
  `song_id` int(11) NOT NULL,
  PRIMARY KEY (`top`,`song_id`),
  KEY `Song_Id` (`song_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `top_month`
--

INSERT INTO `top_month` (`top`, `song_id`) VALUES
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
  `top` int(11) NOT NULL,
  `song_id` int(11) NOT NULL,
  PRIMARY KEY (`top`,`song_id`),
  KEY `Song_Id` (`song_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `top_week`
--

INSERT INTO `top_week` (`top`, `song_id`) VALUES
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
  `song_id` int(11) NOT NULL,
  `stars` int(11) NOT NULL,
  `point` float NOT NULL,
  PRIMARY KEY (`song_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `vote_song`
--

INSERT INTO `vote_song` (`song_id`, `stars`, `point`) VALUES
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
  ADD CONSTRAINT `Account_Detail_ibfk_1` FOREIGN KEY (`username_id`) REFERENCES `account` (`username`);

--
-- Constraints for table `history_vote`
--
ALTER TABLE `history_vote`
  ADD CONSTRAINT `history_vote_ibfk_1` FOREIGN KEY (`song_id`) REFERENCES `song` (`id`),
  ADD CONSTRAINT `history_vote_ibfk_2` FOREIGN KEY (`username_id`) REFERENCES `account` (`username`);

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`username_id`) REFERENCES `account` (`username`);

--
-- Constraints for table `playlist_detail`
--
ALTER TABLE `playlist_detail`
  ADD CONSTRAINT `playlist_detail_ibfk_1` FOREIGN KEY (`song_id`) REFERENCES `song` (`id`),
  ADD CONSTRAINT `playlist_detail_ibfk_2` FOREIGN KEY (`playlist_id`) REFERENCES `playlist` (`id`);

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`singer_id`) REFERENCES `singer` (`id`),
  ADD CONSTRAINT `song_ibfk_2` FOREIGN KEY (`composer_id`) REFERENCES `composer` (`id`);

--
-- Constraints for table `vote_song`
--
ALTER TABLE `vote_song`
  ADD CONSTRAINT `vote_song_ibfk_1` FOREIGN KEY (`song_id`) REFERENCES `song` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
