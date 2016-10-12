-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 10 月 12 日 12:57
-- 服务器版本: 5.5.47
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `voime`
--

-- --------------------------------------------------------

--
-- 表的结构 `collections`
--
-- 创建时间: 2016 年 03 月 23 日 06:42
-- 最后更新: 2016 年 03 月 23 日 06:42
--

CREATE TABLE IF NOT EXISTS `collections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `use_id` int(11) NOT NULL,
  `record_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `follows`
--
-- 创建时间: 2016 年 03 月 23 日 06:42
-- 最后更新: 2016 年 03 月 23 日 06:42
--

CREATE TABLE IF NOT EXISTS `follows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `followed_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `logins`
--
-- 创建时间: 2016 年 03 月 23 日 06:42
-- 最后更新: 2016 年 03 月 23 日 06:42
--

CREATE TABLE IF NOT EXISTS `logins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `time` datetime NOT NULL,
  `avatar` varchar(60) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=5 ;


-- --------------------------------------------------------

--
-- 表的结构 `messages`
--
-- 创建时间: 2016 年 03 月 23 日 06:42
-- 最后更新: 2016 年 03 月 23 日 06:42
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `record_id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL DEFAULT '游客',
  `body` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `record_id` (`record_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `records`
--
-- 创建时间: 2016 年 03 月 23 日 06:42
-- 最后更新: 2016 年 03 月 23 日 06:42
--

CREATE TABLE IF NOT EXISTS `records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `record_url` varchar(60) NOT NULL,
  `goods` int(11) NOT NULL DEFAULT '0',
  `collections` int(11) NOT NULL DEFAULT '0',
  `time` date NOT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
