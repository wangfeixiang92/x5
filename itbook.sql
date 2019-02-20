/*
Navicat MySQL Data Transfer

Source Server         : 虚拟机
Source Server Version : 50725
Source Host           : 192.168.33.10:3306
Source Database       : itbook

Target Server Type    : MYSQL
Target Server Version : 50725
File Encoding         : 65001

Date: 2019-02-20 19:18:46
*/

SET FOREIGN_KEY_CHECKS=0;

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
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uId` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `userName` varchar(30) DEFAULT '' COMMENT '用户昵称',
  `password` varchar(50) DEFAULT '' COMMENT '密码',
  `cName` varchar(30) DEFAULT '' COMMENT '匿名',
  `phone` varchar(20) DEFAULT '' COMMENT '手机号',
  `email` varchar(100) DEFAULT '' COMMENT '邮箱',
  `level` tinyint(3) DEFAULT '0' COMMENT '等级',
  `levelName` varchar(30) DEFAULT '' COMMENT '等级称号',
  `experience` int(10) DEFAULT NULL,
  `ITmoney` int(10) DEFAULT '0' COMMENT 'IT币',
  `money` int(10) DEFAULT '0' COMMENT '余额',
  `status` tinyint(2) DEFAULT '0' COMMENT '0-正常  -1-黑名单',
  `isDelete` tinyint(2) DEFAULT '0' COMMENT '0-正常 1-删除',
  `registerTime` datetime DEFAULT NULL COMMENT '注册时间',
  `logoutTime` varchar(20) DEFAULT '' COMMENT '上次退出时间',
  `loginTime` varchar(20) DEFAULT '' COMMENT '最近登陆时间',
  `isSystem` tinyint(2) DEFAULT '0' COMMENT '0-正常用户 1-系统用户',
  PRIMARY KEY (`uId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
