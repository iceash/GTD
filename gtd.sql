/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : gtd

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2017-05-15 13:46:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for material
-- ----------------------------
DROP TABLE IF EXISTS `material`;
CREATE TABLE `material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `type` int(10) unsigned DEFAULT '0' COMMENT '0为未处理的材料，1表示已生成项目，2为参考资料，3为备忘录',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of material
-- ----------------------------
INSERT INTO `material` VALUES ('1', '测试，项目1122', '2');
INSERT INTO `material` VALUES ('2', '1234444', '0');
INSERT INTO `material` VALUES ('4', '测试材料，参考资料11', '2');
INSERT INTO `material` VALUES ('5', '一个测试材料，关于一个创业计划', '0');
INSERT INTO `material` VALUES ('8', '一个新的材料', '1');
INSERT INTO `material` VALUES ('10', '一个新的材料666', '1');
INSERT INTO `material` VALUES ('11', '这是一个备忘录', '3');

-- ----------------------------
-- Table structure for plan
-- ----------------------------
DROP TABLE IF EXISTS `plan`;
CREATE TABLE `plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_type` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `urgency` varchar(255) DEFAULT '' COMMENT '紧急程度',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of plan
-- ----------------------------
INSERT INTO `plan` VALUES ('1', 'day', '项目：一个新的材料。日程：222', '1', '2017-5-4', '20', '一般');
INSERT INTO `plan` VALUES ('2', 'week', '项目：一个新的材料。周计划：', '1', '2017-05-01', '20', '紧急');
INSERT INTO `plan` VALUES ('3', 'month', '本月计划，测试，测试', '1', '2017-5', '20', '一般');
INSERT INTO `plan` VALUES ('4', 'year', '2017年，我们准备。。。。', '1', '2017', '40', '一般');
INSERT INTO `plan` VALUES ('5', 'week', '测试周计划', '1', '2017-05-15', '40', '十分紧急');
INSERT INTO `plan` VALUES ('6', 'year', '今年的第二个计划', '1', '2017', '40', '延后');
INSERT INTO `plan` VALUES ('7', 'day', '5.24日准备去。。。', '1', '2017-05-24', '0', '紧急');
INSERT INTO `plan` VALUES ('8', 'day', '测试日程', '1', '2017-05-02', '20', '十分紧急');
INSERT INTO `plan` VALUES ('9', 'day', '这是一个紧急日程', '2', '2017-05-15', '0', '紧急');

-- ----------------------------
-- Table structure for project
-- ----------------------------
DROP TABLE IF EXISTS `project`;
CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material_id` int(11) DEFAULT NULL,
  `content` text,
  `period` varchar(255) DEFAULT NULL COMMENT '项目时长',
  `date1` date DEFAULT NULL COMMENT '项目开始日期',
  `date2` date DEFAULT NULL COMMENT '项目结束日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of project
-- ----------------------------
INSERT INTO `project` VALUES ('1', '8', '一个新的材料', '3个月', '2017-04-25', '2017-07-25');
INSERT INTO `project` VALUES ('2', '10', '一个新的材料555', '1个月', '2017-04-25', '2017-05-25');
