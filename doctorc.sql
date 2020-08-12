-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 年 07 月 25 日 03:26
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `doctorc`
--

CREATE TABLE IF NOT EXISTS `doctorc` (
  `id` int(255) NOT NULL,
  `kangzuanbi` varchar(255) NOT NULL,
  `kangzuanbit` varchar(255) NOT NULL,
  `kangzuankou` varchar(255) NOT NULL,
  `kangzuankout` varchar(255) NOT NULL,
  `kangbaisanxibi` varchar(255) NOT NULL,
  `kangbaisanxibit` varchar(255) NOT NULL,
  `kangbaisanxikou` varchar(255) NOT NULL,
  `kangbaisanxikout` varchar(255) NOT NULL,
  `tangpizhibi` varchar(255) NOT NULL,
  `tangpizhibit` varchar(255) NOT NULL,
  `tangpizhikou` varchar(255) NOT NULL,
  `tangpizhikout` varchar(255) NOT NULL,
  `tangpizhixi` varchar(255) NOT NULL,
  `tangpizhixit` varchar(255) NOT NULL,
  `zhiqiguankou` varchar(255) NOT NULL,
  `zhiqiguankout` varchar(255) NOT NULL,
  `zhiqiguanxi` varchar(255) NOT NULL,
  `zhiqiguanxit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `doctorc`
--

INSERT INTO `doctorc` (`id`, `kangzuanbi`, `kangzuanbit`, `kangzuankou`, `kangzuankout`, `kangbaisanxibi`, `kangbaisanxibit`, `kangbaisanxikou`, `kangbaisanxikout`, `tangpizhibi`, `tangpizhibit`, `tangpizhikou`, `tangpizhikout`, `tangpizhixi`, `tangpizhixit`, `zhiqiguankou`, `zhiqiguankout`, `zhiqiguanxi`, `zhiqiguanxit`) VALUES
(1, '需要', '11', '需要', '11', '需要', '22', '需要', '33', '需要', '44', '需要', 'we', '需要', 'we', '需要', 'we', '需要', 'we'),
(2, '需要', '11', '需要', '', '需要', '22', '需要', '', '需要', '44', '需要', 'we', '需要', '', '需要', '', '需要', ''),
(2, '需要', '11', '需要', '', '需要', '22', '需要', '', '需要', '44', '需要', 'we', '需要', '', '需要', '', '需要', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
