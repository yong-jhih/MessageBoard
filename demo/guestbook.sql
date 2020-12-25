-- --------------------------------------------------------
-- 主機:                           127.0.0.1
-- 伺服器版本:                        10.4.6-MariaDB - mariadb.org binary distribution
-- 伺服器作業系統:                      Win64
-- HeidiSQL 版本:                  11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- 傾印 project 的資料庫結構
CREATE DATABASE IF NOT EXISTS `project` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `project`;

-- 傾印  資料表 project.member 結構
CREATE TABLE IF NOT EXISTS `member` (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `memberAC` varchar(16) NOT NULL,
  `memberPW` varchar(100) NOT NULL,
  `memberName` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `permission` tinyint(4) NOT NULL DEFAULT 1,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `lastModify` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Face` varchar(100) NOT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- 取消選取資料匯出。

-- 傾印  資料表 project.message 結構
CREATE TABLE IF NOT EXISTS `message` (
  `postID` int(10) NOT NULL AUTO_INCREMENT,
  `subID` int(10) DEFAULT NULL,
  `author` varchar(16) NOT NULL,
  `subject` tinytext NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `memberID` int(11) DEFAULT NULL,
  `img` varchar(100) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`postID`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- 取消選取資料匯出。

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
