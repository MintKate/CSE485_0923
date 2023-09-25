-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               11.1.2-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for btth01_ex02
CREATE DATABASE IF NOT EXISTS `btth01_ex02` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `btth01_ex02`;

-- Dumping structure for table btth01_ex02.baiviet
CREATE TABLE IF NOT EXISTS `baiviet` (
  `ma_bviet` int(3) unsigned NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `ten_bhat` varchar(100) NOT NULL,
  `ma_tloai` int(3) unsigned NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text DEFAULT NULL,
  `ma_tgia` int(3) unsigned NOT NULL,
  `ngayviet` datetime DEFAULT current_timestamp(),
  `hinhanh` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ma_bviet`),
  KEY `ma_tloai` (`ma_tloai`),
  KEY `ma_tgia` (`ma_tgia`),
  CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`ma_tloai`) REFERENCES `theloai` (`ma_tloai`),
  CONSTRAINT `baiviet_ibfk_2` FOREIGN KEY (`ma_tgia`) REFERENCES `tacgia` (`ma_tgia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table btth01_ex02.tacgia
CREATE TABLE IF NOT EXISTS `tacgia` (
  `ma_tgia` int(3) unsigned NOT NULL,
  `ten_tgia` varchar(100) NOT NULL,
  `hinh_tgia` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ma_tgia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table btth01_ex02.theloai
CREATE TABLE IF NOT EXISTS `theloai` (
  `ma_tloai` int(3) unsigned NOT NULL,
  `ten_tloai` varchar(200) NOT NULL,
  PRIMARY KEY (`ma_tloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for view btth01_ex02.vw_music
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `vw_music` (
	`ma_bviet` INT(3) UNSIGNED NOT NULL,
	`tieude` VARCHAR(200) NOT NULL COLLATE 'utf8mb4_general_ci',
	`ten_bhat` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`ten_tloai` VARCHAR(200) NOT NULL COLLATE 'utf8mb4_general_ci',
	`ten_tgia` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Dumping structure for view btth01_ex02.vw_music
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `vw_music`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vw_music` AS SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, theloai.ten_tloai, tacgia.ten_tgia
FROM baiviet
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia ;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
