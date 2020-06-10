-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `guestbook`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `memberID` int(11) NOT NULL,
  `memberAC` varchar(16) NOT NULL,
  `memberPW` varchar(100) NOT NULL,
  `memberName` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `permission` tinyint(4) NOT NULL DEFAULT 1,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `lastModify` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Face` varchar(255) DEFAULT NULL,
  `GameCoin` int(100) NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`memberID`, `memberAC`, `memberPW`, `memberName`, `email`, `permission`, `createDate`, `lastModify`, `Face`, `GameCoin`) VALUES
(0, 'GM123456', '09be0f5b0b4ffd1ce726ff89a73f3a0c', 'GM', 'GM123456@aaa.bbb', 0, '2020-01-14 15:04:26', '2020-06-10 10:07:43', 'upload/020200610040743下載.jpg', 100),
(53, 'abc123456', 'c9cbca5eecdaaad8fb5276e840afb73c', 'Sarah princess', 'abc123456@aaa.bbb', 1, '2020-01-16 16:27:41', '2020-06-10 10:03:42', 'upload/5320200610040342下載 (1).jpg', 100),
(54, 'cba123456', 'd87e0c67be4ce766399b14e57eedd05c', 'callmebaby', 'cba123456@aaa.bbb', 1, '2020-01-16 16:56:10', '2020-06-10 10:13:01', NULL, 100);

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `postID` int(11) NOT NULL,
  `subID` int(11) DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1,
  `date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `memberID` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `message`
--

INSERT INTO `message` (`postID`, `subID`, `type`, `date`, `memberID`, `img`, `content`, `subject`) VALUES
(104, NULL, 1, '2020-01-16 17:37:10', 54, 'upload/5420200116095918d8df320e5ed729f438d6c758d3d68b47.jpg', '吃', '大吉大利明天吃雞'),
(106, 104, 2, '2020-01-16 10:12:02', 53, NULL, '死肥豬一直吃', 'RE.大吉大利明天吃雞'),
(107, NULL, 1, '2020-01-16 10:13:10', 0, NULL, '小心ban你', '請勿人身攻擊'),
(108, 104, 2, '2020-01-16 10:13:29', 0, NULL, '請勿人身攻擊', 'RE.大吉大利明天吃雞'),
(109, NULL, 1, '2020-01-16 10:40:08', 0, 'upload/020200116104008GM.png', '即日起儲100 送1000\r\n心動不如馬上行動', '號外號外'),
(110, NULL, 1, '2020-01-17 02:51:59', 53, NULL, '哭哭', '今天天氣差'),
(111, 110, 2, '2020-01-17 02:53:26', 54, NULL, '哭屁哭', 'RE.今天天氣差'),
(112, 110, 2, '2020-01-17 02:54:43', 53, NULL, 'sad', 'RE.今天天氣差'),
(113, NULL, 1, '2020-01-17 02:58:28', 54, NULL, '瞎', '嗐'),
(114, 113, 2, '2020-01-17 02:58:45', 54, NULL, '真瞎', 'RE.嗐'),
(115, NULL, 1, '2020-01-17 03:14:35', 54, 'upload/5420200117031435123.jpg', '123', '123'),
(116, 115, 2, '2020-01-17 03:14:49', 54, NULL, '這是我的死對頭', 'RE.123'),
(117, 115, 2, '2020-01-17 03:27:54', 53, NULL, '你真是讓我又愛又恨', 'RE.123'),
(118, NULL, 1, '2020-01-20 04:30:39', 0, NULL, 'srthsrhsrhsr', 'trshrthsrh'),
(119, NULL, 1, '2020-01-20 04:30:43', 0, NULL, 'strhtrhsrthrth', 'sthsrthstrsrh'),
(120, NULL, 1, '2020-01-20 04:30:46', 0, NULL, 'srthrthrt', 'strhstrhrst'),
(121, NULL, 1, '2020-01-20 04:30:50', 0, NULL, 'strhrthsrth', 'rtshtrsrh'),
(122, NULL, 1, '2020-01-20 04:31:01', 0, NULL, 'strhrsthsrth', 'strhsrsrt'),
(123, NULL, 1, '2020-01-20 04:37:35', 0, NULL, 'sfbsbsbs', 'sfbsfbsfb'),
(124, NULL, 1, '2020-02-04 07:19:40', 53, NULL, '2133333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333\r\n2121321\r\n21312323\r\n32131321\r\n2313213\r\n12312313\r\n12313\r\n121\r\n212\r\n12\r\n1\r\n231\r\n31\r\n321\r\n32\r\n1', '123'),
(125, NULL, 1, '2020-02-04 07:19:59', 53, NULL, '123', '123'),
(126, 107, 2, '2020-06-10 04:11:23', 54, NULL, '來啊來啊', 'RE.請勿人身攻擊');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberID`);

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`postID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `message`
--
ALTER TABLE `message`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
