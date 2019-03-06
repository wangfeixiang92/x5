/*
Navicat MySQL Data Transfer

Source Server         : 虚拟机
Source Server Version : 50725
Source Host           : 192.168.33.10:3306
Source Database       : itbook

Target Server Type    : MYSQL
Target Server Version : 50725
File Encoding         : 65001

Date: 2019-03-06 18:58:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for everDayDataLog
-- ----------------------------
DROP TABLE IF EXISTS `everDayDataLog`;
CREATE TABLE `everDayDataLog` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `registerNum` int(10) NOT NULL DEFAULT '0' COMMENT '注册数',
  `loginNum` int(10) NOT NULL DEFAULT '0' COMMENT '登陆数',
  `index_pv` int(10) NOT NULL DEFAULT '0' COMMENT '首页pv',
  `index_ip` int(10) NOT NULL DEFAULT '0' COMMENT '首页ip',
  `date` date DEFAULT NULL COMMENT '日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of everDayDataLog
-- ----------------------------

-- ----------------------------
-- Table structure for levelName
-- ----------------------------
DROP TABLE IF EXISTS `levelName`;
CREATE TABLE `levelName` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `levelName` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '等级',
  `level` tinyint(3) NOT NULL DEFAULT '0' COMMENT '等级',
  `experience` int(10) NOT NULL DEFAULT '0' COMMENT '经验',
  `describe` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '描述',
  `isDelete` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0-存在 1-删除',
  `reward` float(2,1) NOT NULL DEFAULT '0.0' COMMENT 'IT币奖励倍数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of levelName
-- ----------------------------
INSERT INTO `levelName` VALUES ('1', '炼气期', '1', '10', '', '0', '1.0');
INSERT INTO `levelName` VALUES ('2', '筑基期', '2', '100', '', '0', '1.5');
INSERT INTO `levelName` VALUES ('3', '旋照期', '3', '200', '', '0', '2.0');
INSERT INTO `levelName` VALUES ('4', '融合期', '4', '400', '', '0', '2.5');
INSERT INTO `levelName` VALUES ('5', '心动期', '5', '800', '', '0', '3.0');
INSERT INTO `levelName` VALUES ('6', '金丹期', '6', '1600', '', '0', '3.5');
INSERT INTO `levelName` VALUES ('7', '灵寂期', '7', '3200', '', '0', '4.0');
INSERT INTO `levelName` VALUES ('8', '元婴期', '8', '6400', '', '0', '4.5');
INSERT INTO `levelName` VALUES ('9', '出窍期', '9', '12800', '', '0', '5.0');
INSERT INTO `levelName` VALUES ('10', '分神期', '10', '25600', '', '0', '5.5');
INSERT INTO `levelName` VALUES ('11', '合体期', '11', '51200', '', '0', '6.0');
INSERT INTO `levelName` VALUES ('12', '渡劫期', '12', '102400', '', '0', '6.5');
INSERT INTO `levelName` VALUES ('13', '大乘期', '13', '204800', '', '0', '7.0');

-- ----------------------------
-- Table structure for source
-- ----------------------------
DROP TABLE IF EXISTS `source`;
CREATE TABLE `source` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `uId` int(10) NOT NULL DEFAULT '0' COMMENT '用户Id',
  `title` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '标题',
  `keyword` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '关键字',
  `describe` text CHARACTER SET utf8 COMMENT '描述',
  `subjectId` int(10) NOT NULL DEFAULT '0' COMMENT '科目Id',
  `coverUrl` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '封面图',
  `soureUrl` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '资源Url',
  `browseNum` int(10) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `collectionNum` int(10) NOT NULL DEFAULT '0' COMMENT '收藏数',
  `shareNum` int(10) NOT NULL DEFAULT '0' COMMENT '分享数',
  `commentNum` int(10) NOT NULL DEFAULT '0' COMMENT '评论数',
  `downloadNum` int(10) NOT NULL DEFAULT '0' COMMENT '下载数',
  `price` int(10) NOT NULL DEFAULT '0' COMMENT '价格',
  `registerTime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  `updateTime` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '更新时间',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '-1 锁定 0-审核 1上线 ',
  `isDelete` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否删除',
  `IE` tinyint(2) NOT NULL DEFAULT '8' COMMENT 'IE兼容',
  `isBoutique` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否精品',
  `isIndex` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否首页展示',
  `isIE` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否兼容IE',
  `isFirefox` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否兼容火狐',
  `isChrome` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否兼容Chrome',
  `isSafari` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否兼容Safari',
  `isResponseType` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否响应式',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of source
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uId` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `userName` varchar(30) DEFAULT '' COMMENT '用户昵称',
  `password` varchar(255) DEFAULT '' COMMENT '密码',
  `cName` varchar(30) DEFAULT '' COMMENT '匿名',
  `phone` varchar(20) DEFAULT '' COMMENT '手机号',
  `email` varchar(100) DEFAULT '' COMMENT '邮箱',
  `sex` tinyint(1) DEFAULT '2' COMMENT '1-男 0-女 2-未知',
  `level` tinyint(3) DEFAULT '0' COMMENT '等级',
  `levelName` varchar(30) DEFAULT '' COMMENT '等级称号',
  `experience` int(10) DEFAULT '0' COMMENT '经验',
  `ITmoney` int(10) DEFAULT '0' COMMENT 'IT币',
  `money` int(10) NOT NULL DEFAULT '0' COMMENT '余额',
  `status` tinyint(2) DEFAULT '0' COMMENT '0-正常  -1-黑名单',
  `isDelete` tinyint(2) DEFAULT '0' COMMENT '0-正常 1-删除',
  `registerTime` datetime DEFAULT NULL COMMENT '注册时间',
  `logoutTime` varchar(20) DEFAULT '' COMMENT '上次退出时间',
  `loginTime` varchar(20) DEFAULT '' COMMENT '最近登陆时间',
  `isSystem` tinyint(2) DEFAULT '0' COMMENT '0-正常用户 1-系统用户',
  `updateTime` varchar(20) DEFAULT '' COMMENT '更新时间',
  `salt` varchar(32) DEFAULT '' COMMENT '密码盐值',
  PRIMARY KEY (`uId`,`money`),
  UNIQUE KEY `userName` (`userName`,`isDelete`) USING BTREE,
  UNIQUE KEY `email` (`email`,`isDelete`) USING BTREE,
  UNIQUE KEY `phone` (`phone`,`isDelete`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('12', 'wfx', '$2y$13$aglFYQTqQAiQnsqPSbe.4uqT2fPnr9cvw17Q8dGrQ4qheVM12N3tS', '', '', '2579552905@qq.com', '2', '1', '炼气期', '0', '0', '0', '0', '0', '2019-03-01 03:35:01', '1551439336', '1551411301', '0', '1551438460', 'xPT5JkxYHKlKNZZbaP1KUZqgpwIdlTpq');

-- ----------------------------
-- Table structure for userLoginLog
-- ----------------------------
DROP TABLE IF EXISTS `userLoginLog`;
CREATE TABLE `userLoginLog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL DEFAULT '0' COMMENT 'uid',
  `loginTime` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '登陆时间',
  `logoutTime` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '退出时间',
  `client` varchar(255) CHARACTER SET utf8 DEFAULT '' COMMENT '登陆客户端',
  `ip` varchar(50) CHARACTER SET utf8 DEFAULT '' COMMENT 'ip',
  `address` varchar(255) CHARACTER SET utf8 DEFAULT '' COMMENT '地址',
  `country` varchar(255) CHARACTER SET utf8 DEFAULT '' COMMENT '国家',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of userLoginLog
-- ----------------------------
INSERT INTO `userLoginLog` VALUES ('1', '12', '1551411301', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLoginLog` VALUES ('2', '12', '1551422849', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLoginLog` VALUES ('3', '12', '1551422898', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLoginLog` VALUES ('4', '12', '1551425866', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLoginLog` VALUES ('5', '12', '1551426334', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLoginLog` VALUES ('6', '12', '1551438539', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLoginLog` VALUES ('7', '12', '1551438557', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLoginLog` VALUES ('8', '12', '1551438707', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLoginLog` VALUES ('9', '12', '1551438713', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLoginLog` VALUES ('10', '12', '1551438774', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLoginLog` VALUES ('11', '12', '1551438814', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLoginLog` VALUES ('12', '12', '1551438823', '1551439336', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
