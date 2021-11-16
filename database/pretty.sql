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

 Date: 13/11/2021 05:37:48
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
  `read_cnt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `comment_cnt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `like_cnt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `dislike_cnt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `img_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of blogs
-- ----------------------------
INSERT INTO `blogs` VALUES (1, '10 Tips For Growing Your Business', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', NULL, NULL, '1', NULL, NULL, NULL, 100, '1.png');
INSERT INTO `blogs` VALUES (2, 'Amazing Multipage & Onepage', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', NULL, NULL, '3', NULL, NULL, NULL, 100, '2.png');
INSERT INTO `blogs` VALUES (3, 'Awesome Vimeo Video Song Ever', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', NULL, NULL, '12', NULL, NULL, NULL, 100, '3.jpg');
INSERT INTO `blogs` VALUES (4, 'What Makes Us Best In The World?', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', NULL, NULL, '56', NULL, NULL, NULL, 2, '4.jpg');
INSERT INTO `blogs` VALUES (5, 'Tips For Success In 2017', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', NULL, NULL, '48', NULL, NULL, NULL, 3, '5.png');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `img_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES (1, 2, 'BEST MARKETING WAYS OF 2017', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by inject', NULL, NULL, 100, NULL);

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
  `skill` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
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
INSERT INTO `users` VALUES (2, 'Eric Julian', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'Frontend Developer', 'today.julian.lim@gmail.com', '2021-05-24 12:33:42', '2021-05-24 12:33:42', 1, 'Image31.png');
INSERT INTO `users` VALUES (3, 'Alex Weber', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'Backend Developer', 'web.senior.dev@gmail.com', '2021-05-24 12:43:58', '2021-05-24 12:43:58', 1, 'image.jpg');
INSERT INTO `users` VALUES (4, 'Tsimafei Setchinava', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'CEO', 'tsimafeisetcinava@gmail.com', '2021-05-24 12:53:48', '2021-05-24 12:53:48', 1, 'imgpsh_fullsize_anim (1111).jpg');
INSERT INTO `users` VALUES (5, 'Wang ShiFu', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'Blockchain Developer', 'senior.zsoftware@gmail.com', '2021-05-24 12:52:21', '2021-05-24 12:52:21', 1, 'face.png');
INSERT INTO `users` VALUES (6, 'Michel Fayad', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'Mobile App Developer', 'leonmarushko@gmail.com', '2021-05-24 12:29:34', '2021-05-24 12:29:34', 1, 'imgpsh_fullsize_anim.jpg');
INSERT INTO `users` VALUES (100, 'administrator', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', NULL, 'admin@gmail.com', '2021-05-26 05:47:36', '2021-05-26 05:47:36', 2, 'face.png');

SET FOREIGN_KEY_CHECKS = 1;
