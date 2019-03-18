/*
Navicat MySQL Data Transfer

Source Server         : 虚拟机
Source Server Version : 50725
Source Host           : 192.168.33.10:3306
Source Database       : itbook

Target Server Type    : MYSQL
Target Server Version : 50725
File Encoding         : 65001

Date: 2019-03-15 18:25:05
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
INSERT INTO `levelName` VALUES ('1', '小白期', '1', '10', '', '0', '1.0');
INSERT INTO `levelName` VALUES ('2', '菜鸟期', '2', '100', '', '0', '1.5');
INSERT INTO `levelName` VALUES ('3', '发车期', '3', '200', '', '0', '2.0');
INSERT INTO `levelName` VALUES ('4', '飙车期', '4', '400', '', '0', '2.5');
INSERT INTO `levelName` VALUES ('5', '超车期', '5', '800', '', '0', '3.0');
INSERT INTO `levelName` VALUES ('6', '老司机', '6', '1600', '', '0', '3.5');
INSERT INTO `levelName` VALUES ('7', '掉发期', '7', '3200', '', '0', '4.0');
INSERT INTO `levelName` VALUES ('8', '元婴期', '8', '6400', '', '0', '4.5');
INSERT INTO `levelName` VALUES ('9', '出窍期', '9', '12800', '', '0', '5.0');
INSERT INTO `levelName` VALUES ('10', '分神期', '10', '25600', '', '0', '5.5');
INSERT INTO `levelName` VALUES ('11', '合体期', '11', '51200', '', '0', '6.0');
INSERT INTO `levelName` VALUES ('12', '渡劫期', '12', '102400', '', '0', '6.5');
INSERT INTO `levelName` VALUES ('13', '大乘期', '13', '204800', '', '0', '7.0');

-- ----------------------------
-- Table structure for subject
-- ----------------------------
DROP TABLE IF EXISTS `subject`;
CREATE TABLE `subject` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '科目名称',
  `sort` int(5) NOT NULL DEFAULT '0' COMMENT '排序',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否删除',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1-可以访问 0 禁止访问',
  `pid` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0' COMMENT '父级id',
  `level` int(3) NOT NULL DEFAULT '0' COMMENT '等级',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of subject
-- ----------------------------
INSERT INTO `subject` VALUES ('1', '网站模板', '0', '0', '1', '0', '0');
INSERT INTO `subject` VALUES ('2', '素材插件', '1', '0', '1', '0', '0');
INSERT INTO `subject` VALUES ('3', '工具类库', '2', '0', '1', '0', '0');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uId` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `userName` varchar(30) DEFAULT '' COMMENT '用户昵称',
  `password` varchar(255) DEFAULT '' COMMENT '密码',
  `photo` varchar(255) DEFAULT '' COMMENT '照片',
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('22', 'wfx', '$2y$13$Ci7tPfZ1nbHi08NvMA6GxumuHgzJgTaDCj9qlE57MLf18ryg.6bR6', 'https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=1544115163,3199727295&fm=26&gp=0.jpg', '', '', '2579552905@qq.com', '2', '1', '小白期', '0', '0', '0', '0', '0', '2019-03-13 07:35:46', '1552464624', '1552462546', '0', '1552462546', 'QING_gdqetmvW4ImXKRyXPIrd3g6uWwg');

-- ----------------------------
-- Table structure for webSource
-- ----------------------------
DROP TABLE IF EXISTS `webSource`;
CREATE TABLE `webSource` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `uId` int(10) NOT NULL DEFAULT '0' COMMENT '用户Id',
  `title` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '标题',
  `keyword` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '关键字',
  `describe` text CHARACTER SET utf8 COMMENT '描述',
  `manual` text CHARACTER SET utf8 COMMENT '使用手册，说明',
  `subjectId` int(10) NOT NULL DEFAULT '0' COMMENT '科目Id',
  `oldUrl` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '官网地址',
  `coverUrl` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '封面图',
  `soureUrl` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '资源Url',
  `browseNum` int(10) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `collectionNum` int(10) NOT NULL DEFAULT '0' COMMENT '收藏数',
  `likeNum` int(10) NOT NULL DEFAULT '0' COMMENT '点赞数',
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of webSource
-- ----------------------------
INSERT INTO `webSource` VALUES ('1', '0', '2131213', '123312', '123', '<p>123122222222222</p>\r\n', '1', 'http://www.baidu.com', '', 'resources/web/190313/283897.zip', '0', '0', '0', '0', '0', '0', '132', '2019-03-13 09:52:49', '1552443946', '0', '0', '8', '0', '0', '1', '1', '1', '1', '0');
INSERT INTO `webSource` VALUES ('2', '0', '2131213', '123312', '123', '<p>123122222222222</p>\r\n', '1', 'http://www.baidu.com', '', 'resources/web/190313/410495.zip', '0', '0', '0', '0', '0', '0', '132', '2019-03-13 09:52:52', '1552445578', '0', '0', '8', '0', '0', '1', '1', '1', '1', '0');
