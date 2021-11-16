/*
 Navicat Premium Data Transfer

 Source Server         : Mysql
 Source Server Type    : MySQL
 Source Server Version : 100419
 Source Host           : localhost:3306
 Source Schema         : pretty

 Target Server Type    : MySQL
 Target Server Version : 100419
 File Encoding         : 65001

 Date: 16/11/2021 03:50:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for blogs
-- ----------------------------
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc` varchar(3000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `read_cnt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  `comment_cnt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  `like_cnt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  `dislike_cnt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  `user_id` int(11) NULL DEFAULT NULL,
  `img_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of blogs
-- ----------------------------
INSERT INTO `blogs` VALUES (1, '10 Tips For Growing Your Business', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:36:13', '2021-11-08 06:36:13', '1', '0', NULL, NULL, 100, '1.png');
INSERT INTO `blogs` VALUES (2, 'Amazing Multipage & Onepage', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:36:13', '2021-11-17 06:36:13', '3', '0', NULL, NULL, 100, '2.png');
INSERT INTO `blogs` VALUES (3, 'Awesome Vimeo Video Song Ever', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:40:23', '2021-11-16 06:40:23', '12', '0', NULL, NULL, 100, '3.jpg');
INSERT INTO `blogs` VALUES (4, 'What Makes Us Best In The World?', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedMirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedMirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:55:41', '2021-11-01 06:55:41', '56', '0', NULL, NULL, 2, '4.jpg');
INSERT INTO `blogs` VALUES (5, 'Tips For Success In 2017', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 07:06:37', '2021-11-16 07:06:37', '48', '0', NULL, NULL, 3, '5.png');
INSERT INTO `blogs` VALUES (6, 'tests', 'descricption.', '2021-11-16 06:36:13', '2021-11-16 06:36:13', '0', '0', NULL, NULL, 4, '6.jpg');
INSERT INTO `blogs` VALUES (7, 'wer', 'wer', '2021-11-16 06:40:23', '2021-11-05 06:40:23', '0', '0', NULL, NULL, 6, '6.jpg');
INSERT INTO `blogs` VALUES (8, 'test1', 'tests2', '2021-11-16 06:55:41', '2021-11-16 06:55:41', '0', '0', NULL, NULL, 2, '1637045741_5.jpg');
INSERT INTO `blogs` VALUES (9, '1111', '111', '2021-11-16 07:06:37', '2021-11-16 07:06:37', '0', '0', NULL, NULL, 6, '1637046397_6.jpg');
INSERT INTO `blogs` VALUES (10, '132', '123', '2021-11-16 07:08:21', '2021-11-06 07:08:21', '0', '0', NULL, NULL, 5, '5.png');
INSERT INTO `blogs` VALUES (11, '24', '234', '2021-11-16 07:10:20', '2021-11-16 07:10:20', '0', '0', NULL, NULL, 3, '1637046620_3.jpg');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NULL DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES (1, 2, 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by inject', '2021-11-16 09:06:41', '2021-11-16 09:06:41', 100);
INSERT INTO `comments` VALUES (2, 2, 'xcv', '2021-11-16 09:06:41', '2021-11-16 09:06:41', 3);
INSERT INTO `comments` VALUES (3, 2, '1111', '2021-11-16 09:07:19', '2021-11-16 09:07:19', 4);
INSERT INTO `comments` VALUES (4, 2, '1111', '2021-11-16 09:07:19', '2021-11-16 09:07:19', 2);
INSERT INTO `comments` VALUES (5, 2, 'd', '2021-11-16 09:07:32', '2021-11-16 09:07:32', 5);

-- ----------------------------
-- Table structure for slides
-- ----------------------------
DROP TABLE IF EXISTS `slides`;
CREATE TABLE `slides`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `order` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 70 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of slides
-- ----------------------------
INSERT INTO `slides` VALUES (64, '1.png', NULL, '2021-05-24 12:10:11', '2021-05-24 12:10:11', 1);
INSERT INTO `slides` VALUES (65, '2.png', NULL, '2021-05-24 12:10:11', '2021-05-24 12:10:11', 2);
INSERT INTO `slides` VALUES (67, 'portfolioapp_4x.png', NULL, '2021-05-24 12:20:30', '2021-05-24 12:20:30', 4);
INSERT INTO `slides` VALUES (69, '5a81539babea8.jpg', NULL, '2021-05-24 12:38:37', '2021-05-24 12:38:37', 3);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `role` int(11) NULL DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 102 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (2, 'Eric Julian', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'today.julian.lim@gmail.com', '2021-05-24 12:33:42', '2021-05-24 12:33:42', 1, '1.jpg');
INSERT INTO `users` VALUES (3, 'Alex Weber', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'web.senior.dev@gmail.com', '2021-05-24 12:43:58', '2021-05-24 12:43:58', 1, '2.jpg');
INSERT INTO `users` VALUES (4, 'Tsimafei Setchinava', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'tsimafeisetcinava@gmail.com', '2021-05-24 12:53:48', '2021-05-24 12:53:48', 1, '3.jpg');
INSERT INTO `users` VALUES (5, 'Wang ShiFu', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'senior.zsoftware@gmail.com', '2021-05-24 12:52:21', '2021-05-24 12:52:21', 1, '4.jpg');
INSERT INTO `users` VALUES (6, 'Michel Fayad', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'leonmarushko@gmail.com', '2021-05-24 12:29:34', '2021-05-24 12:29:34', 1, '5.jpg');
INSERT INTO `users` VALUES (100, 'administrator', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'admin@gmail.com', '2021-05-26 05:47:36', '2021-05-26 05:47:36', 2, '1.jpg');

SET FOREIGN_KEY_CHECKS = 1;
