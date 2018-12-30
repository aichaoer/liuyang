/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : user

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-06-09 08:45:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `userinfo`
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `sex` char(2) NOT NULL DEFAULT '男',
  `age` tinyint(4) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userinfo
-- ----------------------------
INSERT INTO `userinfo` VALUES ('aa', '111', '男', '21', 'aa@126.com', null);
INSERT INTO `userinfo` VALUES ('cc', 'e10adc3949ba59abbe56e057f20f883e', '女', '22', 'cc@qq.com', './image/20170609002507cc.gif');
