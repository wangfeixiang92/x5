/*
Navicat MySQL Data Transfer

Source Server         : 虚拟机
Source Server Version : 50725
Source Host           : 192.168.33.10:3306
Source Database       : itbook_log

Target Server Type    : MYSQL
Target Server Version : 50725
File Encoding         : 65001

Date: 2019-03-15 18:25:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for everDayData
-- ----------------------------
DROP TABLE IF EXISTS `everDayData`;
CREATE TABLE `everDayData` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `registerNum` int(10) NOT NULL DEFAULT '0' COMMENT '注册数',
  `loginNum` int(10) NOT NULL DEFAULT '0' COMMENT '登陆数',
  `indexPv` int(10) NOT NULL DEFAULT '0' COMMENT '首页pv',
  `indexIp` int(10) NOT NULL DEFAULT '0' COMMENT '首页ip',
  `submitWebNum` int(10) NOT NULL DEFAULT '0' COMMENT '当日新发布的网站模板数',
  `newWebNum` int(10) NOT NULL DEFAULT '0' COMMENT '当日新发布的网站模板数',
  `date` date DEFAULT NULL COMMENT '日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of everDayData
-- ----------------------------

-- ----------------------------
-- Table structure for userLogin
-- ----------------------------
DROP TABLE IF EXISTS `userLogin`;
CREATE TABLE `userLogin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL DEFAULT '0' COMMENT 'uid',
  `loginTime` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '登陆时间',
  `logoutTime` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '退出时间',
  `client` varchar(255) CHARACTER SET utf8 DEFAULT '' COMMENT '登陆客户端',
  `ip` varchar(50) CHARACTER SET utf8 DEFAULT '' COMMENT 'ip',
  `address` varchar(255) CHARACTER SET utf8 DEFAULT '' COMMENT '地址',
  `country` varchar(255) CHARACTER SET utf8 DEFAULT '' COMMENT '国家',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of userLogin
-- ----------------------------
INSERT INTO `userLogin` VALUES ('16', '22', '1552462547', '1552464624', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLogin` VALUES ('17', '22', '1552464647', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLogin` VALUES ('18', '22', '1552465616', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLogin` VALUES ('19', '22', '1552467581', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
