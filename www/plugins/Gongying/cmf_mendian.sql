-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 03 月 16 日 17:36
-- 服务器版本: 5.5.40
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `thinkcmf`
--

-- --------------------------------------------------------

--
-- 表的结构 `cmf_gying`
--

CREATE TABLE IF NOT EXISTS `cmf_gying` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `leixing` text NOT NULL COMMENT '类型',
  `shijian` varchar(10) NOT NULL COMMENT '留言时间',
  `uname` text NOT NULL COMMENT '名字',
  `tel` varchar(11) NOT NULL COMMENT '电话',
  `pinpai` text NOT NULL COMMENT '品牌',
  `msg` text NOT NULL COMMENT '补充',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
