/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50537
Source Host           : localhost:3306
Source Database       : dt

Target Server Type    : MYSQL
Target Server Version : 50537
File Encoding         : 65001

Date: 2018-10-19 00:15:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dt_admin
-- ----------------------------
DROP TABLE IF EXISTS `dt_admin`;
CREATE TABLE `dt_admin` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `admin` varchar(50) NOT NULL DEFAULT '',
  `pwd` varchar(50) NOT NULL DEFAULT '',
  `systitle` varchar(50) NOT NULL,
  `regstate` tinyint(1) NOT NULL DEFAULT '-1',
  `regadmincheck` tinyint(1) NOT NULL DEFAULT '0',
  `styletotal` int(12) NOT NULL DEFAULT '60',
  `lastdeldate` date NOT NULL DEFAULT '2000-01-01',
  `skintype` int(12) NOT NULL DEFAULT '0',
  `skincolor` varchar(50) NOT NULL DEFAULT 'C9DDF0|F3F9FE',
  `smtpport` int(12) NOT NULL DEFAULT '25',
  `smtpaddress` varchar(50) NOT NULL,
  `smtpuser` varchar(50) NOT NULL,
  `smtppassword` varchar(50) NOT NULL,
  `allsearch` text NOT NULL,
  `otherset` text NOT NULL,
  `admincode` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin` (`admin`),
  UNIQUE KEY `admincode` (`admincode`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dt_admin
-- ----------------------------
INSERT INTO `dt_admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '谛听网站流量统计系统', '-1', '0', '60', '2018-10-18', '1', '#025DA6|#BFDEF8|#333333|#02418a|#FF0000', '25', 'smtp.qq.com', '120970577@qq.com', 'b', 'bing.com,q|yodao.com,q/lq|msn.com/live.com,q|yahoo.com/yahoo.cn/yahoo.com.cn,p|soso.com,w|sogou.com,query|zhongsou.com,word/w|google.com/google.cn/g.cn,q|baidu.com/baidu.com.cn/baidu.cn,wd/kw/word', '', '625997dcf606aba9b002664b14a3bd39');

-- ----------------------------
-- Table structure for dt_client_day
-- ----------------------------
DROP TABLE IF EXISTS `dt_client_day`;
CREATE TABLE `dt_client_day` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `adddate` date NOT NULL DEFAULT '0000-00-00',
  `alexacounter` int(12) NOT NULL DEFAULT '1',
  `os1` int(12) NOT NULL DEFAULT '0',
  `os2` int(12) NOT NULL DEFAULT '0',
  `os3` int(12) NOT NULL DEFAULT '0',
  `os4` int(12) NOT NULL DEFAULT '0',
  `os5` int(12) NOT NULL DEFAULT '0',
  `osother` int(12) NOT NULL DEFAULT '0',
  `browser1` int(12) NOT NULL DEFAULT '0',
  `browser2` int(12) NOT NULL DEFAULT '0',
  `browser3` int(12) NOT NULL DEFAULT '0',
  `browser4` int(12) NOT NULL DEFAULT '0',
  `browser5` int(12) NOT NULL DEFAULT '0',
  `browser6` int(12) NOT NULL DEFAULT '0',
  `browser7` int(12) NOT NULL DEFAULT '0',
  `browserother` int(12) NOT NULL DEFAULT '0',
  `screenwidth1` int(12) NOT NULL DEFAULT '0',
  `screenwidth2` int(12) NOT NULL DEFAULT '0',
  `screenwidth3` int(12) NOT NULL DEFAULT '0',
  `screenwidth4` int(12) NOT NULL DEFAULT '0',
  `screenwidth5` int(12) NOT NULL DEFAULT '0',
  `screenwidth6` int(12) NOT NULL DEFAULT '0',
  `screenwidth7` int(12) NOT NULL DEFAULT '0',
  `screenwidth8` int(12) NOT NULL DEFAULT '0',
  `screenwidth9` int(12) NOT NULL DEFAULT '0',
  `screenwidthother` int(12) NOT NULL DEFAULT '0',
  `screenheight1` int(12) NOT NULL DEFAULT '0',
  `screenheight2` int(12) NOT NULL DEFAULT '0',
  `screenheight3` int(12) NOT NULL DEFAULT '0',
  `screenheight4` int(12) NOT NULL DEFAULT '0',
  `screenheight5` int(12) NOT NULL DEFAULT '0',
  `screenheight6` int(12) NOT NULL DEFAULT '0',
  `screenheight7` int(12) NOT NULL DEFAULT '0',
  `screenheight8` int(12) NOT NULL DEFAULT '0',
  `screenheight9` int(12) NOT NULL DEFAULT '0',
  `screenheightother` int(12) NOT NULL DEFAULT '0',
  `screencolordepth1` int(12) NOT NULL DEFAULT '0',
  `screencolordepth2` int(12) NOT NULL DEFAULT '0',
  `screencolordepth3` int(12) NOT NULL DEFAULT '0',
  `screencolordepthother` int(12) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`adddate`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dt_client_day
-- ----------------------------

-- ----------------------------
-- Table structure for dt_count_day
-- ----------------------------
DROP TABLE IF EXISTS `dt_count_day`;
CREATE TABLE `dt_count_day` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `usercounter` int(12) NOT NULL DEFAULT '1',
  `ipcounter` int(12) NOT NULL DEFAULT '1',
  `adddate` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`adddate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dt_count_day
-- ----------------------------

-- ----------------------------
-- Table structure for dt_count_hour
-- ----------------------------
DROP TABLE IF EXISTS `dt_count_hour`;
CREATE TABLE `dt_count_hour` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `usercounter` int(12) NOT NULL DEFAULT '1',
  `ipcounter` int(12) DEFAULT '1',
  `adddate` date DEFAULT '0000-00-00',
  `addhour` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`adddate`,`addhour`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dt_count_hour
-- ----------------------------

-- ----------------------------
-- Table structure for dt_gbook
-- ----------------------------
DROP TABLE IF EXISTS `dt_guest_book`;
CREATE TABLE `dt_guest_book` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `contact` text NOT NULL,
  `msg` varchar(255) NOT NULL,
  `currweb` varchar(255) NOT NULL,
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dt_gbook
-- ----------------------------

-- ----------------------------
-- Table structure for dt_ipaddress
-- ----------------------------
DROP TABLE IF EXISTS `dt_ipaddress`;
CREATE TABLE `dt_ipaddress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_1` bigint(10) NOT NULL DEFAULT '0',
  `ip_2` bigint(10) NOT NULL DEFAULT '0',
  `area` varchar(255) DEFAULT NULL,
  `area_2` varchar(255) DEFAULT NULL,
  `area_3` varchar(255) DEFAULT NULL,
  `area_4` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip_1` (`ip_1`,`ip_2`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dt_ipaddress
-- ----------------------------

-- ----------------------------
-- Table structure for dt_ly_day
-- ----------------------------
DROP TABLE IF EXISTS `dt_msg_day`;
CREATE TABLE `dt_msg_day` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `msghead` varchar(255) NOT NULL DEFAULT '',
  `usercounter` int(12) NOT NULL DEFAULT '1',
  `ipcounter` int(12) NOT NULL DEFAULT '1',
  `msg` varchar(255) NOT NULL DEFAULT '',
  `adddate` date NOT NULL DEFAULT '0000-00-00',
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lasttime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`msghead`,`adddate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dt_ly_day
-- ----------------------------

-- ----------------------------
-- Table structure for dt_searchkeyword_day
-- ----------------------------
DROP TABLE IF EXISTS `dt_searchkeyword_day`;
CREATE TABLE `dt_searchkeyword_day` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `siteflag` varchar(50) NOT NULL DEFAULT '',
  `keyword` varchar(50) NOT NULL DEFAULT '',
  `usercounter` int(12) NOT NULL DEFAULT '1',
  `ipcounter` int(12) NOT NULL DEFAULT '1',
  `adddate` date NOT NULL DEFAULT '0000-00-00',
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lasttime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastly` varchar(255) NOT NULL DEFAULT '',
  `indexcode` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `indexcode` (`indexcode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dt_searchkeyword_day
-- ----------------------------

-- ----------------------------
-- Table structure for dt_search_day
-- ----------------------------
DROP TABLE IF EXISTS `dt_search_day`;
CREATE TABLE `dt_search_day` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `siteflag` varchar(50) NOT NULL DEFAULT '',
  `usercounter` int(12) NOT NULL DEFAULT '1',
  `ipcounter` int(12) NOT NULL DEFAULT '1',
  `adddate` date NOT NULL DEFAULT '2000-01-01',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`siteflag`,`adddate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dt_search_day
-- ----------------------------

-- ----------------------------
-- Table structure for dt_search_set
-- ----------------------------
DROP TABLE IF EXISTS `dt_search_set`;
CREATE TABLE `dt_search_set` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `sitedesc` varchar(50) NOT NULL DEFAULT '',
  `siteflag` varchar(50) NOT NULL DEFAULT '',
  `keywordflag` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `siteflag` (`siteflag`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dt_search_set
-- ----------------------------
INSERT INTO `dt_search_set` VALUES ('1', '百度', 'baidu.com', 'wd/kw/word');
INSERT INTO `dt_search_set` VALUES ('2', '搜狗', 'sogou.com', 'query');
INSERT INTO `dt_search_set` VALUES ('3', '360搜索', 'so.com', 'q');
INSERT INTO `dt_search_set` VALUES ('4', 'soso', 'soso.com', 'w');
INSERT INTO `dt_search_set` VALUES ('5', '微软必应', 'bing.com', 'q');
INSERT INTO `dt_search_set` VALUES ('6', '网易', 'yodao.com', 'q/lq');
INSERT INTO `dt_search_set` VALUES ('7', 'google', 'google.com/google.com.hk', 'q');
INSERT INTO `dt_search_set` VALUES ('8', '雅虎', 'yahoo.com', 'p');
INSERT INTO `dt_search_set` VALUES ('9', 'msn', 'msn.com', 'q');


-- ----------------------------
-- Table structure for dt_upfile
-- ----------------------------
DROP TABLE IF EXISTS `dt_upfile`;
CREATE TABLE `dt_upfile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `filename` varchar(50) NOT NULL,
  `filesizenum` int(11) NOT NULL DEFAULT '0',
  `addtime` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `filename` (`filename`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



-- ----------------------------
-- Table structure for dt_user
-- ----------------------------
DROP TABLE IF EXISTS `dt_user`;
CREATE TABLE `dt_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `pwd` varchar(50) NOT NULL DEFAULT '',
  `pwd_view` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `qq` varchar(50) NOT NULL,
  `pagename` varchar(50) NOT NULL DEFAULT '',
  `pageurl` varchar(50) NOT NULL DEFAULT '',
  `showtotal` int(12) NOT NULL DEFAULT '0',
  `realshowtotal` int(12) NOT NULL DEFAULT '0',
  `realiptotal` int(12) NOT NULL DEFAULT '0',
  `adddate` date NOT NULL DEFAULT '2000-01-01',
  `countershow` tinyint(1) NOT NULL DEFAULT '1',
  `style` int(12) NOT NULL DEFAULT '1',
  `imgfilename` varchar(50) NOT NULL DEFAULT 'default.jpg',
  `imgselftext` varchar(2000) NOT NULL DEFAULT '',
  `guestbookstate` smallint(1) NOT NULL DEFAULT '-1',
  `userstate` smallint(1) NOT NULL DEFAULT '-1',
  `lasttime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `otherset` text NOT NULL,
  `usercode` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `usercode` (`usercode`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dt_user
-- ----------------------------
INSERT INTO `dt_user` VALUES ('1', 'detect', 'a599d36c4c7a71ddcc1bc7259a15ac3a', 'a599d36c4c7a71ddcc1bc7259a15ac3a', '123456789@qq.com', '', '信息通信基地', 'http://xxtxjd.qjw.zy', '101538', '136', '21', '2018-10-01', '1', '4', 'default.jpg', '　\r\n　总访问:{imgcounter} \r\n　今天PV:{todaytotal} \r\n　今天IP:{todayiptotal} \r\n　昨天PV:{yesterdaytotal} \r\n　昨天IP:{yesterdayiptotal} \r\n　IP:{ip} ', '-1', '-1', '2018-10-19 14:53:13', '', '3d5fed4ecc0bbee777edee3ee85eae94');

-- ----------------------------
-- Table structure for dt_visit_last
-- ----------------------------
DROP TABLE IF EXISTS `dt_visit_last`;
CREATE TABLE `dt_visit_last` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `userid` int(12) NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  `pvtotal` int(12) NOT NULL DEFAULT '1',
  `msg` varchar(255) NOT NULL DEFAULT '',
  `webtitle` varchar(255) NOT NULL DEFAULT '',
  `currweb` varchar(255) NOT NULL DEFAULT '',
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lasttime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `screenwidth` int(12) NOT NULL DEFAULT '0',
  `screenheight` int(12) NOT NULL DEFAULT '0',
  `screencolordepth` int(12) NOT NULL DEFAULT '0',
  `ostype` varchar(50) NOT NULL DEFAULT '',
  `browsertype` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userid` (`username`,`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dt_visit_last
-- ----------------------------

-- ----------------------------
-- Table structure for dt_web_day
-- ----------------------------
DROP TABLE IF EXISTS `dt_web_day`;
CREATE TABLE `dt_web_day` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `weburl` varchar(255) NOT NULL DEFAULT '',
  `usercounter` int(12) NOT NULL DEFAULT '1',
  `adddate` date NOT NULL DEFAULT '0000-00-00',
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lasttime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `indexcode` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `indexcode` (`indexcode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dt_web_day
-- ----------------------------
