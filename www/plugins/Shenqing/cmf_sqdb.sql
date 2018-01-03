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



CREATE TABLE IF NOT EXISTS `cmf_sqdb` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sqmigncheng` text NOT NULL COMMENT '店铺名称',
  `sqdizhi` text NOT NULL COMMENT '地址',
  `sqxingming` varchar(55) NOT NULL COMMENT '店主姓名',
  `sqdianhua` text NOT NULL COMMENT '联系电话',
  `sqid` text NOT NULL COMMENT '商户ID',
  `sqnicheng` varchar(55) NOT NULL COMMENT '商户昵称',
  `sqzhizhao` text NOT NULL COMMENT '营业执照',
  `sqsfzzheng` text NOT NULL COMMENT '身份证正面',
  `sqsfzfan` text NOT NULL COMMENT '身份证反面',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
