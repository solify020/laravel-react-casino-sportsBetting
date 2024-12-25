/*
 Navicat Premium Dump SQL

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100427 (10.4.27-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : winnerslots

 Target Server Type    : MySQL
 Target Server Version : 100427 (10.4.27-MariaDB)
 File Encoding         : 65001

 Date: 13/12/2024 02:49:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for w_categories
-- ----------------------------
DROP TABLE IF EXISTS `w_categories`;
CREATE TABLE `w_categories`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `parent` int NOT NULL DEFAULT 0,
  `position` int NOT NULL,
  `href` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_id` int NOT NULL DEFAULT 0,
  `shop_id` int NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `shop_id`(`shop_id`) USING BTREE,
  INDEX `parent`(`parent`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 33 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of w_categories
-- ----------------------------
INSERT INTO `w_categories` VALUES (2, 'Playngo', NULL, 0, 2, 'playngo', 0, 0);
INSERT INTO `w_categories` VALUES (3, 'Egt', NULL, 0, 3, 'egt', 0, 0);
INSERT INTO `w_categories` VALUES (4, 'iSoftBet', NULL, 0, 4, 'isoftbet', 0, 0);
INSERT INTO `w_categories` VALUES (5, 'Gamomat', NULL, 0, 5, 'gamomat', 0, 0);
INSERT INTO `w_categories` VALUES (6, 'Playtech', NULL, 0, 6, 'playtech', 0, 0);
INSERT INTO `w_categories` VALUES (7, 'Amatic', NULL, 0, 7, 'amatic', 0, 0);
INSERT INTO `w_categories` VALUES (8, 'Aristocrat', NULL, 0, 8, 'aristocrat', 0, 0);
INSERT INTO `w_categories` VALUES (9, 'C-Technology', NULL, 0, 9, 'casino-technology', 0, 0);
INSERT INTO `w_categories` VALUES (10, 'Greentube', NULL, 0, 10, 'greentube', 0, 0);
INSERT INTO `w_categories` VALUES (11, 'Igrosoft', NULL, 0, 11, 'igrosoft', 0, 0);
INSERT INTO `w_categories` VALUES (12, 'NetEnt', NULL, 0, 12, 'netent', 0, 0);
INSERT INTO `w_categories` VALUES (13, 'Novomatic', NULL, 0, 13, 'novomatic', 0, 0);
INSERT INTO `w_categories` VALUES (14, 'Pragmatic', NULL, 0, 14, 'pragmatic', 0, 0);
INSERT INTO `w_categories` VALUES (15, 'Skywind', NULL, 0, 15, 'skywind', 0, 0);
INSERT INTO `w_categories` VALUES (16, 'Mainama', NULL, 0, 16, 'mainama', 0, 0);
INSERT INTO `w_categories` VALUES (17, 'Ka-Gaming', NULL, 0, 17, 'ka-gaming', 0, 0);
INSERT INTO `w_categories` VALUES (18, 'Wazdan', NULL, 0, 18, 'wazdan', 0, 0);
INSERT INTO `w_categories` VALUES (19, 'Vision', NULL, 0, 19, 'vision', 0, 0);
INSERT INTO `w_categories` VALUES (20, 'Keno', NULL, 0, 20, 'keno', 0, 0);
INSERT INTO `w_categories` VALUES (21, 'Card', NULL, 0, 21, 'card', 0, 0);
INSERT INTO `w_categories` VALUES (22, 'Roulette', NULL, 0, 22, 'roulette', 0, 0);
INSERT INTO `w_categories` VALUES (23, 'Bingo', NULL, 0, 23, 'bingo', 0, 0);
INSERT INTO `w_categories` VALUES (24, 'Arcade', NULL, 0, 1000, 'arcade', 0, 0);
INSERT INTO `w_categories` VALUES (25, 'Playgt', NULL, 0, 25, 'playgt', 0, 0);
INSERT INTO `w_categories` VALUES (26, 'CQ9 Gaming', NULL, 0, 26, 'cq9', 0, 0);
INSERT INTO `w_categories` VALUES (27, 'GD Games', NULL, 0, 27, 'gdgames', 0, 0);
INSERT INTO `w_categories` VALUES (28, 'BetSoft', NULL, 0, 28, 'betsoft', 0, 0);
INSERT INTO `w_categories` VALUES (29, 'NetGame', NULL, 0, 29, 'netgame', 0, 0);
INSERT INTO `w_categories` VALUES (30, 'New', NULL, 0, 5, 'new', 0, 0);
INSERT INTO `w_categories` VALUES (31, 'Jackpots', '', 0, 9, 'jackpots', 0, 0);
INSERT INTO `w_categories` VALUES (32, 'Slots', '', 0, 8, 'slots', 0, 0);

SET FOREIGN_KEY_CHECKS = 1;
