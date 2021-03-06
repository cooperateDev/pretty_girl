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

 Date: 18/11/2021 00:41:40
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
  `desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `read_cnt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  `comment_cnt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  `like_cnt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  `dislike_cnt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  `user_id` int(11) NULL DEFAULT NULL,
  `img_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of blogs
-- ----------------------------
INSERT INTO `blogs` VALUES (1, '10 Tips For Growing Your Business', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised 32325232', '2021-11-16 06:36:13', '2021-11-17 00:04:01', '16', '11', NULL, NULL, 3, '1637089178_5.jpg');
INSERT INTO `blogs` VALUES (2, 'Amazing Multipage & Onepage', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:36:13', '2021-11-16 18:52:43', '7', '5', NULL, NULL, 100, '2.png');
INSERT INTO `blogs` VALUES (3, 'Awesome Vimeo Video Song Ever', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:40:23', '2021-11-16 17:11:12', '6', '1', NULL, NULL, 100, '3.jpg');
INSERT INTO `blogs` VALUES (4, 'What Makes Us Best In The World?', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedMirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedMirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:55:41', '2021-11-17 21:39:19', '10', '1', NULL, NULL, 2, '4.jpg');
INSERT INTO `blogs` VALUES (5, 'Tips For Success In 2017', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 07:06:37', '2021-11-16 18:04:08', '4', '0', NULL, NULL, 3, '5.png');
INSERT INTO `blogs` VALUES (13, 'test Blogs', 'This is the test blog page.', '2021-11-16 17:18:07', '2021-11-17 20:40:36', '159', '28', '0', '0', 3, '1637083087_3.jpg');
INSERT INTO `blogs` VALUES (14, 'Image preview123', 'This is for the test preview image.12312312312312', '2021-11-16 18:39:28', '2021-11-16 18:52:11', '12', '0', '0', '0', 3, '1637088139_3.jpg');
INSERT INTO `blogs` VALUES (15, '10 Tips For Growing Your Business', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised 32325232', '2021-11-16 06:36:13', '2021-11-17 00:04:01', '16', '11', NULL, NULL, 3, '1637089178_5.jpg');
INSERT INTO `blogs` VALUES (16, 'Amazing Multipage & Onepage', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:36:13', '2021-11-17 21:25:58', '45', '18', NULL, NULL, 3, '2.png');
INSERT INTO `blogs` VALUES (17, 'Awesome Vimeo Video Song Ever', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:40:23', '2021-11-16 17:11:12', '6', '1', NULL, NULL, 100, '3.jpg');
INSERT INTO `blogs` VALUES (18, 'What Makes Us Best In The World?', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedMirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedMirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:55:41', '2021-11-17 20:39:59', '27', '3', NULL, NULL, 2, '4.jpg');
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
INSERT INTO `blogs` VALUES (32, 'What Makes Us Best In The World?', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedMirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedMirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 06:55:41', '2021-11-17 04:52:11', '10', '1', NULL, NULL, 2, '4.jpg');
INSERT INTO `blogs` VALUES (33, 'Tips For Success In 2017', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '2021-11-16 07:06:37', '2021-11-16 18:04:08', '4', '0', NULL, NULL, 3, '5.png');
INSERT INTO `blogs` VALUES (34, 'test Blogs', 'This is the test blog page.', '2021-11-16 17:18:07', '2021-11-16 17:19:56', '2', '0', '0', '0', 3, '1637083087_3.jpg');
INSERT INTO `blogs` VALUES (35, 'Image preview123', 'This is for the test preview image.12312312312312', '2021-11-16 18:39:28', '2021-11-16 18:52:11', '12', '0', '0', '0', 3, '1637088139_3.jpg');
INSERT INTO `blogs` VALUES (36, 'ghgj', 'ghjghj', '2021-11-17 05:23:44', '2021-11-17 05:23:44', '0', '0', '0', '0', 3, '1637126624_6.jpg');
INSERT INTO `blogs` VALUES (37, 'dfg', 'sdfg', '2021-11-17 05:24:27', '2021-11-17 05:24:27', '0', '0', '0', '0', 3, '1637126667_5.jpg');
INSERT INTO `blogs` VALUES (38, '123', '325345', '2021-11-17 05:34:52', '2021-11-17 18:19:46', '83', '3', '0', '0', 3, '1637127292_5.jpg');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NULL DEFAULT NULL,
  `desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `comments` VALUES (23, 18, 'asdfasdfsafsfsafsadsf', '2021-11-17 01:46:36', '2021-11-17 01:46:36', 3);
INSERT INTO `comments` VALUES (24, 38, 'r', '2021-11-17 05:35:28', '2021-11-17 05:35:28', 3);
INSERT INTO `comments` VALUES (25, 38, 'dfreeeeeeeeeeeeeeettt tttttttdddddddddddddh hhhhhhhhhhhhcccccccccccccccnnnnnnnnnnnhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhh', '2021-11-17 05:36:29', '2021-11-17 05:36:29', 100);
INSERT INTO `comments` VALUES (26, 38, 'Test project.', '2021-11-17 05:52:22', '2021-11-17 05:52:22', 100);
INSERT INTO `comments` VALUES (27, 13, 'sfsaasfasdf', '2021-11-17 18:20:32', '2021-11-17 18:20:32', 100);
INSERT INTO `comments` VALUES (28, 13, 'ewttwetwetwetwtewe', '2021-11-17 18:20:38', '2021-11-17 18:20:38', 100);
INSERT INTO `comments` VALUES (29, 13, 'Thank you very much. Best regards.', '2021-11-17 20:33:19', '2021-11-17 20:33:19', 100);
INSERT INTO `comments` VALUES (30, 18, 'Test sentences.', '2021-11-17 20:39:58', '2021-11-17 20:39:58', 3);
INSERT INTO `comments` VALUES (31, 16, 'That\'s because you are posting parameters to the controller\'s action, but it expects no parameters.\r\n\r\nIf you are passing an object to Action(in your case the serialized form data), you should specify the expected type of the posted data as acceptable parameter in the Controller Action.\r\n\r\npublic JsonResult YourActionName(PostedDataType data)\r\n{\r\n    //Process your code here...\r\n    return Json(new { Success = true });\r\n}\r\nA better way is to assemble your data from the javascript into some object with the same properties as the expected Action\'s parameter. For example:\r\n\r\nformData: {\r\n    Field1: $(\'#field1\').val(),\r\n    Field2: $(\'#field2\').val(),\r\n    ...\r\n}\r\nWhere Field1 and Field2 are properties of the \"PostedDataType\" class.\r\n\r\nHope this helps.\r\n\r\nMarked as answer by Anonymous Thursday, October 7, 2021 12:00 AM', '2021-11-17 20:43:41', '2021-11-17 20:43:41', 3);
INSERT INTO `comments` VALUES (32, 16, 'Test', '2021-11-17 21:25:11', '2021-11-17 21:25:11', 3);
INSERT INTO `comments` VALUES (33, 16, 'Test', '2021-11-17 21:25:49', '2021-11-17 21:25:49', 3);

-- ----------------------------
-- Table structure for replies
-- ----------------------------
DROP TABLE IF EXISTS `replies`;
CREATE TABLE `replies`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_id` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of replies
-- ----------------------------
INSERT INTO `replies` VALUES (1, 27, 100, '444444444444444444444', '2021-11-17 19:46:05', '2021-11-17 19:46:05');
INSERT INTO `replies` VALUES (2, 28, 100, 'sddddddddddd', '2021-11-17 19:47:20', '2021-11-17 19:47:20');
INSERT INTO `replies` VALUES (3, 28, 100, 'sdffffffffffffffffffffff', '2021-11-17 19:53:22', '2021-11-17 19:53:22');
INSERT INTO `replies` VALUES (4, 28, 100, 'This is reply testing sentences. Okay.', '2021-11-17 20:03:19', '2021-11-17 20:03:19');
INSERT INTO `replies` VALUES (5, 27, 100, '66666666666666666666666666666666666666666666666  \r\n645hrrrrrrrrrrrrrrrrrrrrrrrr\r\ndhhhhhhhhjhhhhhhhhhhhhhhhhh\r\nkkkkkkkkkkkkkkkkkkk', '2021-11-17 20:08:52', '2021-11-17 20:08:52');
INSERT INTO `replies` VALUES (6, 27, 100, 'sdfsdffsdfsssssssssssssssssssssssssssssssss\r\nsdfffffffffffffffff\r\neeeeeeeeeeeeeeeeeeeeeee\r\nggggggggggggggggggggg\r\nsssssssssssssssssss\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\neeeeeeeeeeeeeeeeeeeeeeeeeee\r\nThank you.', '2021-11-17 20:32:52', '2021-11-17 20:32:52');
INSERT INTO `replies` VALUES (7, 29, 100, 'Thank you very much, See you again.', '2021-11-17 20:34:39', '2021-11-17 20:34:39');
INSERT INTO `replies` VALUES (8, 29, 3, 'Thank you.', '2021-11-17 20:35:33', '2021-11-17 20:35:33');
INSERT INTO `replies` VALUES (9, 29, 3, 'Thank you', '2021-11-17 20:35:53', '2021-11-17 20:35:53');
INSERT INTO `replies` VALUES (10, 28, 3, 'TEst sentences. Thank you.', '2021-11-17 20:40:28', '2021-11-17 20:40:28');
INSERT INTO `replies` VALUES (11, 28, 3, 'TEst sentences. Thank you.', '2021-11-17 20:40:30', '2021-11-17 20:40:30');
INSERT INTO `replies` VALUES (12, 28, 3, 'TEst sentences. Thank you.', '2021-11-17 20:40:31', '2021-11-17 20:40:31');
INSERT INTO `replies` VALUES (13, 28, 3, 'TEst sentences. Thank you.', '2021-11-17 20:40:31', '2021-11-17 20:40:31');
INSERT INTO `replies` VALUES (14, 28, 3, 'TEst sentences. Thank you.', '2021-11-17 20:40:31', '2021-11-17 20:40:31');
INSERT INTO `replies` VALUES (15, 28, 3, 'TEst sentences. Thank you.', '2021-11-17 20:40:32', '2021-11-17 20:40:32');
INSERT INTO `replies` VALUES (16, 28, 3, 'TEst sentences. Thank you.', '2021-11-17 20:40:32', '2021-11-17 20:40:32');
INSERT INTO `replies` VALUES (17, 28, 3, 'TEst sentences. Thank you.', '2021-11-17 20:40:32', '2021-11-17 20:40:32');
INSERT INTO `replies` VALUES (18, 28, 3, 'TEst sentences. Thank you.', '2021-11-17 20:40:32', '2021-11-17 20:40:32');
INSERT INTO `replies` VALUES (19, 28, 3, 'TEst sentences. Thank you.', '2021-11-17 20:40:32', '2021-11-17 20:40:32');
INSERT INTO `replies` VALUES (20, 28, 3, 'TEst sentences. Thank you.', '2021-11-17 20:40:32', '2021-11-17 20:40:32');
INSERT INTO `replies` VALUES (21, 28, 3, 'TEst sentences. Thank you.', '2021-11-17 20:40:32', '2021-11-17 20:40:32');
INSERT INTO `replies` VALUES (22, 28, 3, 'TEst sentences. Thank you.', '2021-11-17 20:40:33', '2021-11-17 20:40:33');
INSERT INTO `replies` VALUES (23, 28, 3, 'TEst sentences. Thank you.', '2021-11-17 20:40:33', '2021-11-17 20:40:33');
INSERT INTO `replies` VALUES (24, 28, 3, 'TEst sentences. Thank you.', '2021-11-17 20:40:33', '2021-11-17 20:40:33');
INSERT INTO `replies` VALUES (25, 28, 3, 'TEst sentences. Thank you.', '2021-11-17 20:40:33', '2021-11-17 20:40:33');
INSERT INTO `replies` VALUES (26, 31, 3, 'Thank you very much.', '2021-11-17 20:45:50', '2021-11-17 20:45:50');
INSERT INTO `replies` VALUES (27, 31, 3, 'Thank you very much.', '2021-11-17 20:45:52', '2021-11-17 20:45:52');
INSERT INTO `replies` VALUES (28, 21, 3, 's', '2021-11-17 20:46:02', '2021-11-17 20:46:02');
INSERT INTO `replies` VALUES (29, 31, 3, 's', '2021-11-17 20:51:33', '2021-11-17 20:51:33');
INSERT INTO `replies` VALUES (30, 31, 3, 'ssssssss', '2021-11-17 21:08:37', '2021-11-17 21:08:37');
INSERT INTO `replies` VALUES (31, 21, 3, 'sdfsdf', '2021-11-17 21:12:31', '2021-11-17 21:12:31');
INSERT INTO `replies` VALUES (32, 21, 3, 'Okay', '2021-11-17 21:16:18', '2021-11-17 21:16:18');
INSERT INTO `replies` VALUES (33, 21, 3, 'Restore.', '2021-11-17 21:16:34', '2021-11-17 21:16:34');
INSERT INTO `replies` VALUES (34, 32, 3, 'dfd', '2021-11-17 21:25:57', '2021-11-17 21:25:57');

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
) ENGINE = InnoDB AUTO_INCREMENT = 106 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (2, 'Eric Julian', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'today.julian.lim@gmail.com', '2021-05-24 12:33:42', '2021-05-24 12:33:42', 1, '1.jpg');
INSERT INTO `users` VALUES (3, 'Alex Weber', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'web.senior.dev@gmail.com', '2021-05-24 12:43:58', '2021-05-24 12:43:58', 1, '2.jpg');
INSERT INTO `users` VALUES (4, 'Tsimafei Setchinava', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'tsimafeisetcinava@gmail.com', '2021-05-24 12:53:48', '2021-05-24 12:53:48', 1, '3.jpg');
INSERT INTO `users` VALUES (5, 'Wang ShiFu', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'senior.zsoftware@gmail.com', '2021-05-24 12:52:21', '2021-05-24 12:52:21', 1, '4.jpg');
INSERT INTO `users` VALUES (6, 'Michel Fayad', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'leonmarushko@gmail.com', '2021-05-24 12:29:34', '2021-05-24 12:29:34', 1, '5.jpg');
INSERT INTO `users` VALUES (100, 'administrator', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'admin@gmail.com', '2021-05-26 05:47:36', '2021-05-26 05:47:36', 2, '1.jpg');
INSERT INTO `users` VALUES (102, 'Alex Weber', '$2y$10$EF3BV90cOtsrGwW4v7LI/uwb.EmukmeVHWRefvpiB7IzSut8o.oZK', 'Alex@gmail.com', '2021-11-17 21:31:14', '2021-11-17 21:31:14', 1, 'default.jpg');
INSERT INTO `users` VALUES (103, 'Test', '$2y$10$rx9Oo1PinBW/TGwrmGTwFOxYKZfbgUJQwCWY4Ob656VYKHufoRism', 'Test@gmail.com', '2021-11-17 21:32:13', '2021-11-17 21:32:13', 1, 'default.jpg');
INSERT INTO `users` VALUES (104, 'Test@gmail.com', '$2y$10$18nSezNn8NpnpXKXpRyzLuUkcCP0xCswkmdwTqQMCCTytKAdvyN0u', 'Test1@gmail.com', '2021-11-17 21:33:29', '2021-11-17 21:33:29', 1, 'default.jpg');
INSERT INTO `users` VALUES (105, 'Test', '$2y$10$EqndknAQjb3fIWejgZAop.V8P6rMELQHlRpa4EVrOdn8HU2mzP8Ee', 'text@gmail.com', '2021-11-17 21:34:05', '2021-11-17 21:34:05', 1, 'default.jpg');

SET FOREIGN_KEY_CHECKS = 1;
