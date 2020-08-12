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
-- 表的结构 `doctorb`
--

CREATE TABLE IF NOT EXISTS `doctorb` (
  `id` int(255) NOT NULL,
  `aa` varchar(255) NOT NULL,
  `ab` varchar(255) NOT NULL,
  `ba` varchar(255) NOT NULL,
  `bb` varchar(255) NOT NULL,
  `ca` varchar(255) NOT NULL,
  `cb` varchar(255) NOT NULL,
  `da` varchar(255) NOT NULL,
  `db` varchar(255) NOT NULL,
  `ea` varchar(255) NOT NULL,
  `eb` varchar(255) NOT NULL,
  `fa` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `ga` varchar(255) NOT NULL,
  `gb` varchar(255) NOT NULL,
  `ha` varchar(255) NOT NULL,
  `hb` varchar(255) NOT NULL,
  `ia` varchar(255) NOT NULL,
  `ib` varchar(255) NOT NULL,
  `ja` varchar(255) NOT NULL,
  `jb` varchar(255) NOT NULL,
  `ka` varchar(255) NOT NULL,
  `kb` varchar(255) NOT NULL,
  `la` varchar(255) NOT NULL,
  `lb` varchar(255) NOT NULL,
  `ma` varchar(255) NOT NULL,
  `mb` varchar(255) NOT NULL,
  `na` varchar(255) NOT NULL,
  `nb` varchar(255) NOT NULL,
  `oa` varchar(255) NOT NULL,
  `ob` varchar(255) NOT NULL,
  `pa` varchar(255) NOT NULL,
  `pb` varchar(255) NOT NULL,
  `qa` varchar(255) NOT NULL,
  `qb` varchar(255) NOT NULL,
  `ra` varchar(255) NOT NULL,
  `rb` varchar(255) NOT NULL,
  `sa` varchar(255) NOT NULL,
  `sb` varchar(255) NOT NULL,
  `ta` varchar(255) NOT NULL,
  `tb` varchar(255) NOT NULL,
  `ua` varchar(255) NOT NULL,
  `ub` varchar(255) NOT NULL,
  `va` varchar(255) NOT NULL,
  `vb` varchar(255) NOT NULL,
  `wa` varchar(255) NOT NULL,
  `wb` varchar(255) NOT NULL,
  `xa` varchar(255) NOT NULL,
  `xb` varchar(255) NOT NULL,
  `ya` varchar(255) NOT NULL,
  `yb` varchar(255) NOT NULL,
  `za` varchar(255) NOT NULL,
  `zb` varchar(255) NOT NULL,
  `lia` varchar(255) NOT NULL,
  `lib` varchar(255) NOT NULL,
  `wua` varchar(255) NOT NULL,
  `wub` varchar(255) NOT NULL,
  `lva` varchar(255) NOT NULL,
  `lvb` varchar(255) NOT NULL,
  `xiaa` varchar(255) NOT NULL,
  `xiab` varchar(255) NOT NULL,
  `IgE` varchar(255) NOT NULL,
  `IgEb` varchar(255) NOT NULL,
  `pimao` varchar(255) NOT NULL,
  `pimaob` varchar(255) NOT NULL,
  `jianguo` varchar(255) NOT NULL,
  `jianguob` varchar(255) NOT NULL,
  `danbai` varchar(255) NOT NULL,
  `danbaib` varchar(255) NOT NULL,
  `cengman` varchar(255) NOT NULL,
  `cengmanb` varchar(255) NOT NULL,
  `zhenjun` varchar(255) NOT NULL,
  `zhenjunb` varchar(255) NOT NULL,
  `shufen` varchar(255) NOT NULL,
  `shufenb` varchar(255) NOT NULL,
  `caofen` varchar(255) NOT NULL,
  `caofenb` varchar(255) NOT NULL,
  `tuominzhonglei` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `doctorb`
--

INSERT INTO `doctorb` (`id`, `aa`, `ab`, `ba`, `bb`, `ca`, `cb`, `da`, `db`, `ea`, `eb`, `fa`, `fb`, `ga`, `gb`, `ha`, `hb`, `ia`, `ib`, `ja`, `jb`, `ka`, `kb`, `la`, `lb`, `ma`, `mb`, `na`, `nb`, `oa`, `ob`, `pa`, `pb`, `qa`, `qb`, `ra`, `rb`, `sa`, `sb`, `ta`, `tb`, `ua`, `ub`, `va`, `vb`, `wa`, `wb`, `xa`, `xb`, `ya`, `yb`, `za`, `zb`, `lia`, `lib`, `wua`, `wub`, `lva`, `lvb`, `xiaa`, `xiab`, `IgE`, `IgEb`, `pimao`, `pimaob`, `jianguo`, `jianguob`, `danbai`, `danbaib`, `cengman`, `cengmanb`, `zhenjun`, `zhenjunb`, `shufen`, `shufenb`, `caofen`, `caofenb`, `tuominzhonglei`) VALUES
(0, '', '', '3333', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '123', '', '', '', '323w', '', '', '', '', '', '', '', '', '', '', '', '1,室内尘土2,夏秋花粉Ⅰ'),
(2, '', '', '3333', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', '', '2', '', '2', '', '2', 'aa', '2', '', '2', '', '2', '', '2', '', '1，室内尘土4，大籽嵩花粉9，多价甲醛Ⅱ'),
(2, '', '', '3333', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', '', '2', '', '2', '', '2', 'aa', '2', '', '2', '', '2', '', '2', '', '1，室内尘土4，大籽嵩花粉9，多价甲醛Ⅱ'),
(0, '123', '', '', 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '22', '', 'aa', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1,室内尘土2,夏秋花粉Ⅰ'),
(3, '123', '', '', 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '22', '', 'aa', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '123', '', 'a', 'a', 's', '', 'd', '', 'f', 'f', 'g', '', 'h', 'df', '', '', '1,室内尘土2,夏秋花粉Ⅰ'),
(3, '123', '', '3333', '', '', '', 'aa', 'bb', 'cc', 'dd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '123', '', 'a', 'a', 's', '', 'd', '', 'f', 'f', 'g', '', 'h', 'df', '', '', '1,室内尘土2,夏秋花粉Ⅰ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
