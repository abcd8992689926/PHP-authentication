-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2020-12-27 17:13:33
-- 伺服器版本: 5.7.15-log
-- PHP 版本： 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `phpwork`
--
CREATE DATABASE IF NOT EXISTS `phpwork` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phpwork`;

-- --------------------------------------------------------

--
-- 資料表結構 `accountdata`
--

CREATE TABLE `accountdata` (
  `UserName` char(11) NOT NULL,
  `Password` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `accountdata`
--

INSERT INTO `accountdata` (`UserName`, `Password`) VALUES
('abc123', '1234'),
('abc123', '1234'),
('adfj4889', 'ga1h5d6fah'),
('nlk', '564'),
('', ''),
('gah61', 'h5as1ha'),
('Abc123', 'fasdg'),
('ABc123', 'Fasdg'),
('aaa789', 'sasd'),
('qqq123', 'qwertty');

-- --------------------------------------------------------

--
-- 資料表結構 `emeo`
--

CREATE TABLE `emeo` (
  `UserName` char(11) NOT NULL,
  `Text` text NOT NULL,
  `Date` char(12) NOT NULL DEFAULT '0',
  `Time` int(4) NOT NULL,
  `Flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `emeo`
--

INSERT INTO `emeo` (`UserName`, `Text`, `Date`, `Time`, `Flag`) VALUES
('abc123', 'eeeeeeeeeeeeeeeeeeee', '2020-03-03', 6666, 0),
('abc123', 'rrrrrrrrrrrrrrrrrrrr', '2020-05-05', 5555, 1),
('abc123', 'tttttttttttttttttttt', '2020-12-31', 8888, 1),
('abc123', 'dafhdh', '2020-12-02', 9818, 0),
('abc123', 'dahsh', '2020-12-02', 8555, 0),
('abc123', 'gag', '2020-12-10', 6555, 0),
('abc123', 'qqqqqqqqqqqqqqqqqqqq', '2020-12-12', 1212, 0),
('abc123', 'trhsh', '2020-12-03', 1511, 1),
('abc123', 'wwwwwwwwwwwwwwwwwwww', '2020-01-03', 3333, 1),
('abc123', 'aaaaaaaaaaaaaaaaaaaa', '2020-12-18', 1111, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `one`
--

CREATE TABLE `one` (
  `test` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `one`
--

INSERT INTO `one` (`test`) VALUES
(123);

-- --------------------------------------------------------

--
-- 資料表結構 `test`
--
-- 使用中(#1146 - Table 'phpwork.test' doesn't exist)
-- 讀取資料錯誤: (#1146 - Table 'phpwork.test' doesn't exist)

-- --------------------------------------------------------

--
-- 資料表結構 `usersdata`
--
-- 使用中(#1146 - Table 'phpwork.usersdata' doesn't exist)
-- 讀取資料錯誤: (#1146 - Table 'phpwork.usersdata' doesn't exist)

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
