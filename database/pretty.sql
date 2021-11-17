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

 Date: 16/11/2021 18:40:53
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
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of blogs
-- ----------------------------
INSERT INTO `blogs` VALUES (1, '10 Tips For Growing Your Business', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised 32325232', '2021-11-16 06:36:13', '2021-11-17 00:04:01', '16', '11', NULL, NULL, 3, '1637089178_5.jpg');
INSERT INTO `blogs` VALUES (2, 'Amazing Multipage & Onepage', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:36:13', '2021-11-16 18:52:43', '7', '5', NULL, NULL, 100, '2.png');
INSERT INTO `blogs` VALUES (3, 'Awesome Vimeo Video Song Ever', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:40:23', '2021-11-16 17:11:12', '6', '1', NULL, NULL, 100, '3.jpg');
INSERT INTO `blogs` VALUES (4, 'What Makes Us Best In The World?', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedMirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedMirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:55:41', '2021-11-16 17:16:36', '8', '1', NULL, NULL, 2, '4.jpg');
INSERT INTO `blogs` VALUES (5, 'Tips For Success In 2017', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 07:06:37', '2021-11-16 18:04:08', '4', '0', NULL, NULL, 3, '5.png');
INSERT INTO `blogs` VALUES (13, 'test Blogs', 'This is the test blog page.', '2021-11-16 17:18:07', '2021-11-16 17:19:56', '2', '0', '0', '0', 3, '1637083087_3.jpg');
INSERT INTO `blogs` VALUES (14, 'Image preview123', 'This is for the test preview image.12312312312312', '2021-11-16 18:39:28', '2021-11-16 18:52:11', '12', '0', '0', '0', 3, '1637088139_3.jpg');
INSERT INTO `blogs` VALUES (15, '10 Tips For Growing Your Business', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised 32325232', '2021-11-16 06:36:13', '2021-11-17 00:04:01', '16', '11', NULL, NULL, 3, '1637089178_5.jpg');
INSERT INTO `blogs` VALUES (16, 'Amazing Multipage & Onepage', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:36:13', '2021-11-17 01:36:37', '13', '6', NULL, NULL, 3, '2.png');
INSERT INTO `blogs` VALUES (17, 'Awesome Vimeo Video Song Ever', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:40:23', '2021-11-16 17:11:12', '6', '1', NULL, NULL, 100, '3.jpg');
INSERT INTO `blogs` VALUES (18, 'What Makes Us Best In The World?', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedMirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedMirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:55:41', '2021-11-17 01:27:52', '10', '1', NULL, NULL, 2, '4.jpg');
INSERT INTO `blogs` VALUES (19, 'Tips For Success In 2017', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 07:06:37', '2021-11-16 18:04:08', '4', '0', NULL, NULL, 3, '5.png');
INSERT INTO `blogs` VALUES (20, 'test Blogs', 'This is the test blog page.', '2021-11-16 17:18:07', '2021-11-16 17:19:56', '2', '0', '0', '0', 3, '1637083087_3.jpg');
INSERT INTO `blogs` VALUES (21, 'Image preview123', 'This is for the test preview image.12312312312312', '2021-11-16 18:39:28', '2021-11-16 18:52:11', '12', '0', '0', '0', 3, '1637088139_3.jpg');
INSERT INTO `blogs` VALUES (22, '10 Tips For Growing Your Business', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised 32325232', '2021-11-16 06:36:13', '2021-11-17 01:38:56', '26', '12', NULL, NULL, 3, '1637089178_5.jpg');
INSERT INTO `blogs` VALUES (23, 'Amazing Multipage & Onepage', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:36:13', '2021-11-16 18:52:43', '7', '5', NULL, NULL, 100, '2.png');
INSERT INTO `blogs` VALUES (24, 'Awesome Vimeo Video Song Ever', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:40:23', '2021-11-16 17:11:12', '6', '1', NULL, NULL, 100, '3.jpg');
INSERT INTO `blogs` VALUES (25, 'What Makes Us Best In The World?', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedMirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedMirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:55:41', '2021-11-16 17:16:36', '8', '1', NULL, NULL, 2, '4.jpg');
INSERT INTO `blogs` VALUES (26, 'Tips For Success In 2017', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 07:06:37', '2021-11-16 18:04:08', '4', '0', NULL, NULL, 3, '5.png');
INSERT INTO `blogs` VALUES (27, 'test Blogs', 'This is the test blog page.', '2021-11-16 17:18:07', '2021-11-16 17:19:56', '2', '0', '0', '0', 3, '1637083087_3.jpg');
INSERT INTO `blogs` VALUES (28, 'Image preview123', 'This is for the test preview image.12312312312312', '2021-11-16 18:39:28', '2021-11-16 18:52:11', '12', '0', '0', '0', 3, '1637088139_3.jpg');
INSERT INTO `blogs` VALUES (29, '10 Tips For Growing Your Business', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised 32325232', '2021-11-16 06:36:13', '2021-11-17 00:04:01', '16', '11', NULL, NULL, 3, '1637089178_5.jpg');
INSERT INTO `blogs` VALUES (30, 'Amazing Multipage & Onepage', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:36:13', '2021-11-16 18:52:43', '7', '5', NULL, NULL, 100, '2.png');
INSERT INTO `blogs` VALUES (31, 'Awesome Vimeo Video Song Ever', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:40:23', '2021-11-16 17:11:12', '6', '1', NULL, NULL, 100, '3.jpg');
INSERT INTO `blogs` VALUES (32, 'What Makes Us Best In The World?', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedMirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedMirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:55:41', '2021-11-16 17:16:36', '8', '1', NULL, NULL, 2, '4.jpg');
INSERT INTO `blogs` VALUES (33, 'Tips For Success In 2017', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 07:06:37', '2021-11-16 18:04:08', '4', '0', NULL, NULL, 3, '5.png');
INSERT INTO `blogs` VALUES (34, 'test Blogs', 'This is the test blog page.', '2021-11-16 17:18:07', '2021-11-16 17:19:56', '2', '0', '0', '0', 3, '1637083087_3.jpg');
INSERT INTO `blogs` VALUES (35, 'Image preview123', 'This is for the test preview image.12312312312312', '2021-11-16 18:39:28', '2021-11-16 18:52:11', '12', '0', '0', '0', 3, '1637088139_3.jpg');

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
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES (1, 2, 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by inject', '2021-11-16 09:06:41', '2021-11-16 09:06:41', 100);
INSERT INTO `comments` VALUES (2, 2, 'xcv', '2021-11-16 09:06:41', '2021-11-16 09:06:41', 3);
INSERT INTO `comments` VALUES (3, 2, '1111', '2021-11-16 09:07:19', '2021-11-16 09:07:19', 4);
INSERT INTO `comments` VALUES (4, 2, '1111', '2021-11-16 09:07:19', '2021-11-16 09:07:19', 2);
INSERT INTO `comments` VALUES (5, 2, 'd', '2021-11-16 09:07:32', '2021-11-16 09:07:32', 5);
INSERT INTO `comments` VALUES (6, 1, 'The website is very wonderful.\r\nThis is a blog site.\r\nOn the blog site, you can post the blog data using your name.', '2021-11-16 11:01:55', '2021-11-16 11:01:55', 3);
INSERT INTO `comments` VALUES (7, 1, 'The quras.io project is Blockchain project.\r\nThe project is very wonderful, There are many people that use this project.\r\nThank you. Best reagards.', '2021-11-16 16:27:37', '2021-11-16 16:27:37', 3);
INSERT INTO `comments` VALUES (8, 1, 'The quras.io project is Blockchain project.\r\nThe project is very wonderful, There are many people that use this project.\r\nThank you. Best reagards.', '2021-11-16 16:32:42', '2021-11-16 16:32:42', 3);
INSERT INTO `comments` VALUES (9, 1, 'The quras.io project is Blockchain project.\r\nThe project is very wonderful, There are many people that use this project.\r\nThank you. Best reagards.', '2021-11-16 16:33:28', '2021-11-16 16:33:28', 3);
INSERT INTO `comments` VALUES (10, 1, '132321', '2021-11-16 16:39:00', '2021-11-16 16:39:00', 3);
INSERT INTO `comments` VALUES (11, 1, '132321', '2021-11-16 16:39:38', '2021-11-16 16:39:38', 3);
INSERT INTO `comments` VALUES (12, 1, '132321', '2021-11-16 16:40:53', '2021-11-16 16:40:53', 3);
INSERT INTO `comments` VALUES (13, 1, '132321', '2021-11-16 16:42:38', '2021-11-16 16:42:38', 3);
INSERT INTO `comments` VALUES (14, 1, '132321', '2021-11-16 16:43:02', '2021-11-16 16:43:02', 3);
INSERT INTO `comments` VALUES (15, 1, '2352323', '2021-11-16 16:46:20', '2021-11-16 16:46:20', 3);
INSERT INTO `comments` VALUES (16, 1, 'vvvvvvvvvvvvv', '2021-11-16 16:46:36', '2021-11-16 16:46:36', 3);
INSERT INTO `comments` VALUES (17, 7, 'sdfsdf', '2021-11-16 16:49:50', '2021-11-16 16:49:50', 3);
INSERT INTO `comments` VALUES (18, 7, 'sssssssssss', '2021-11-16 16:50:46', '2021-11-16 16:50:46', 3);
INSERT INTO `comments` VALUES (19, 3, 'Test comment', '2021-11-16 17:10:57', '2021-11-16 17:10:57', 3);
INSERT INTO `comments` VALUES (20, 4, 'test comment.', '2021-11-16 17:15:56', '2021-11-16 17:15:56', 3);
INSERT INTO `comments` VALUES (21, 16, 'asdassa', '2021-11-17 01:31:34', '2021-11-17 01:31:34', 3);
INSERT INTO `comments` VALUES (22, 22, 'sdfhghkjkl;;\'', '2021-11-17 01:38:55', '2021-11-17 01:38:55', 3);

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
