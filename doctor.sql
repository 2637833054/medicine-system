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
-- 表的结构 `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(255) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sex` varchar(255) CHARACTER SET utf8 NOT NULL,
  `age` int(255) NOT NULL,
  `birthday` varchar(255) CHARACTER SET utf8 NOT NULL,
  `national` varchar(255) CHARACTER SET utf8 NOT NULL,
  `place` varchar(255) CHARACTER SET utf8 NOT NULL,
  `longplace` varchar(255) CHARACTER SET utf8 NOT NULL,
  `longplaceb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `professional` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tell` varchar(255) CHARACTER SET utf8 NOT NULL,
  `linkman` varchar(255) CHARACTER SET utf8 NOT NULL,
  `linkmantell` varchar(255) CHARACTER SET utf8 NOT NULL,
  `medicalhistory` varchar(255) CHARACTER SET utf8 NOT NULL,
  `medicalhistoryb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `allergya` varchar(255) CHARACTER SET utf8 NOT NULL,
  `allergyb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `allergyc` varchar(255) CHARACTER SET utf8 NOT NULL,
  `familyhistory` varchar(255) CHARACTER SET utf8 NOT NULL,
  `height` varchar(255) CHARACTER SET utf8 NOT NULL,
  `weight` varchar(255) CHARACTER SET utf8 NOT NULL,
  `child` varchar(255) CHARACTER SET utf8 NOT NULL,
  `feeding` varchar(255) CHARACTER SET utf8 NOT NULL,
  `zaocan` varchar(255) CHARACTER SET utf8 NOT NULL,
  `primarydiagnosisa` varchar(255) CHARACTER SET utf8 NOT NULL,
  `primarydiagnosisb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `primarydiagnosisc` varchar(255) CHARACTER SET utf8 NOT NULL,
  `season` varchar(255) CHARACTER SET utf8 NOT NULL,
  `seasonb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sneezing` varchar(255) CHARACTER SET utf8 NOT NULL,
  `runnynose` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nasalitching` varchar(255) CHARACTER SET utf8 NOT NULL,
  `stuffynose` varchar(255) CHARACTER SET utf8 NOT NULL,
  `eyeitching` varchar(255) CHARACTER SET utf8 NOT NULL,
  `envy` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tears` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dayscore` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nightscore` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sneezingb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `runnynoseb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nasalitchingb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `stuffynoseb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `eyeitchingb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `envyb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tearsb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dayscoreb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nightscoreb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `NO` varchar(255) CHARACTER SET utf8 NOT NULL,
  `junzhi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sulv` varchar(255) CHARACTER SET utf8 NOT NULL,
  `huxi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `qidao` varchar(255) CHARACTER SET utf8 NOT NULL,
  `zhongxin` varchar(255) CHARACTER SET utf8 NOT NULL,
  `zhouwei` varchar(255) CHARACTER SET utf8 NOT NULL,
  `yaoqianFEV` varchar(255) CHARACTER SET utf8 NOT NULL,
  `yaohouFEV` varchar(255) CHARACTER SET utf8 NOT NULL,
  `yaoqianFVC` varchar(255) CHARACTER SET utf8 NOT NULL,
  `yaohouFVC` varchar(255) CHARACTER SET utf8 NOT NULL,
  `NOb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `junzhib` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sulvb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `huxib` varchar(255) CHARACTER SET utf8 NOT NULL,
  `qidaob` varchar(255) CHARACTER SET utf8 NOT NULL,
  `zhongxinb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `zhouweib` varchar(255) CHARACTER SET utf8 NOT NULL,
  `yaoqianFEVb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `yaohouFEVb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `yaoqianFVCb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `yaohouFVCb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `kangzuanbi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `kangzuanbit` varchar(255) CHARACTER SET utf8 NOT NULL,
  `kangzuankou` varchar(255) CHARACTER SET utf8 NOT NULL,
  `kangzuankout` varchar(255) CHARACTER SET utf8 NOT NULL,
  `kangbaisanxibi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `kangbaisanxibit` varchar(255) CHARACTER SET utf8 NOT NULL,
  `kangbaisanxikou` varchar(255) CHARACTER SET utf8 NOT NULL,
  `kangbaisanxikout` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tangpizhibi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tangpizhibit` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tangpizhikou` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tangpizhikout` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tangpizhixi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tangpizhixit` varchar(255) CHARACTER SET utf8 NOT NULL,
  `zhiqiguankou` varchar(255) CHARACTER SET utf8 NOT NULL,
  `zhiqiguankout` varchar(255) CHARACTER SET utf8 NOT NULL,
  `zhiqiguanxi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `zhiqiguanxit` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `doctor`
--

INSERT INTO `doctor` (`id`, `username`, `sex`, `age`, `birthday`, `national`, `place`, `longplace`, `longplaceb`, `professional`, `tell`, `linkman`, `linkmantell`, `medicalhistory`, `medicalhistoryb`, `allergya`, `allergyb`, `allergyc`, `familyhistory`, `height`, `weight`, `child`, `feeding`, `zaocan`, `primarydiagnosisa`, `primarydiagnosisb`, `primarydiagnosisc`, `season`, `seasonb`, `sneezing`, `runnynose`, `nasalitching`, `stuffynose`, `eyeitching`, `envy`, `tears`, `dayscore`, `nightscore`, `sneezingb`, `runnynoseb`, `nasalitchingb`, `stuffynoseb`, `eyeitchingb`, `envyb`, `tearsb`, `dayscoreb`, `nightscoreb`, `NO`, `junzhi`, `sulv`, `huxi`, `qidao`, `zhongxin`, `zhouwei`, `yaoqianFEV`, `yaohouFEV`, `yaoqianFVC`, `yaohouFVC`, `NOb`, `junzhib`, `sulvb`, `huxib`, `qidaob`, `zhongxinb`, `zhouweib`, `yaoqianFEVb`, `yaohouFEVb`, `yaoqianFVCb`, `yaohouFVCb`, `kangzuanbi`, `kangzuanbit`, `kangzuankou`, `kangzuankout`, `kangbaisanxibi`, `kangbaisanxibit`, `kangbaisanxikou`, `kangbaisanxikout`, `tangpizhibi`, `tangpizhibit`, `tangpizhikou`, `tangpizhikout`, `tangpizhixi`, `tangpizhixit`, `zhiqiguankou`, `zhiqiguankout`, `zhiqiguanxi`, `zhiqiguanxit`) VALUES
(1, '陈思', '女', 18, '1997.12.24', '卡莎族', '邵阳', '农村', '新宁', '学生', '12323', '陈超', '123456', '高血压', '你好', '蛋及蛋制品', '过敏', 'null', '没有', '172', '60', '第三胎', '混合', '早产', '鼻息肉', '444', '陈思', '有', '秋季', '4', '6', '3', '3', '6', '4', '4', '3', '3', '4', '2', '4', '6', '4', '5', '5', '1', '1', '1', '1', '2', '2', '4', '5', '5', 'rt', '5', '5', '3', '12', '32', '4', '3', '5', 't', 'y', '5', 'c', 'yt', '6', '不需要', '11', '需要', '', '需要', '', '不需要', '33', '需要', '', '需要', 'we', '需要', 'we', '需要', 'we', '需要', 'we'),
(2, '陈静', '女', 18, '1997.12.24', '汉', '邵阳', '农村', '新宁', '学生', '12323', '陈超', '123456', '高血压', '你好', '蛋及蛋制品', '过敏', 'null', '呃呃', '172', '60', '第四胎', '母乳', '早产', '过敏性鼻炎', '222', '陈静', '无', '秋季', '3', '6', '5', '5', '6', '6', '5', '2', '2', '2', '3', '5', '7', '4', '5', '7', '1', '1', '1', '1', '', '', '', '', '', 'rt', '', '', '', '', '', '', '3', '', '', '', '5', '', '', '', '需要', '11', '需要', '11', '需要', '22', '需要', '', '需要', '', '需要', '', '需要', '', '需要', '', '需要', ''),
(3, '黄超', '男', 18, '1997.12.24', '汉', '邵阳', '城市', '新宁', '学生', '1564645', '陈超', '123456', '血液病', '你好', '海产品', '过敏', 'null', '没有', '172', '66', '第三胎', '母乳', '早产', '变异性咳嗽', '444', '黄超', '有', '季节更替', '3', '3', '3', '3', '3', '3', '3', '3', '3', '4', '4', '4', '4', '4', '4', '4', '1', '1', '1', '', '2', '', '', '5', '', '', '', '5', '3', '12', '', '4', '', '', 't', '', '', '', '', '', '不需要', '11', '需要', '11', '需要', '22', '需要', '', '需要', '44', '需要', '', '需要', '', '需要', '', '需要', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
