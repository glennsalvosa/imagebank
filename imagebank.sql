-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2015 at 02:50 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imagebank`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
`id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 204),
(2, 1, NULL, NULL, 'Pages', 2, 5),
(3, 2, NULL, NULL, 'display', 3, 4),
(4, 1, NULL, NULL, 'AclManagement', 6, 59),
(5, 4, NULL, NULL, 'Groups', 7, 18),
(6, 5, NULL, NULL, 'index', 8, 9),
(7, 5, NULL, NULL, 'view', 10, 11),
(8, 5, NULL, NULL, 'add', 12, 13),
(9, 5, NULL, NULL, 'edit', 14, 15),
(10, 5, NULL, NULL, 'delete', 16, 17),
(11, 4, NULL, NULL, 'UserPermissions', 19, 28),
(12, 11, NULL, NULL, 'index', 20, 21),
(13, 11, NULL, NULL, 'sync', 22, 23),
(14, 11, NULL, NULL, 'edit', 24, 25),
(15, 11, NULL, NULL, 'toggle', 26, 27),
(16, 4, NULL, NULL, 'Users', 29, 58),
(17, 16, NULL, NULL, 'login', 30, 31),
(18, 16, NULL, NULL, 'logout', 32, 33),
(19, 16, NULL, NULL, 'index', 34, 35),
(20, 16, NULL, NULL, 'view', 36, 37),
(21, 16, NULL, NULL, 'add', 38, 39),
(22, 16, NULL, NULL, 'edit', 40, 41),
(23, 16, NULL, NULL, 'delete', 42, 43),
(24, 16, NULL, NULL, 'toggle', 44, 45),
(25, 16, NULL, NULL, 'register', 46, 47),
(26, 16, NULL, NULL, 'confirm_register', 48, 49),
(27, 16, NULL, NULL, 'forgot_password', 50, 51),
(28, 16, NULL, NULL, 'activate_password', 52, 53),
(29, 16, NULL, NULL, 'edit_profile', 54, 55),
(30, 16, NULL, NULL, 'confirm_email_update', 56, 57),
(31, 1, NULL, NULL, 'Brands', 60, 71),
(32, 31, NULL, NULL, 'index', 61, 62),
(33, 31, NULL, NULL, 'view', 63, 64),
(34, 31, NULL, NULL, 'add', 65, 66),
(35, 31, NULL, NULL, 'edit', 67, 68),
(36, 31, NULL, NULL, 'delete', 69, 70),
(37, 1, NULL, NULL, 'Categories', 72, 83),
(38, 37, NULL, NULL, 'index', 73, 74),
(39, 37, NULL, NULL, 'view', 75, 76),
(40, 37, NULL, NULL, 'add', 77, 78),
(41, 37, NULL, NULL, 'edit', 79, 80),
(42, 37, NULL, NULL, 'delete', 81, 82),
(43, 1, NULL, NULL, 'Downloads', 84, 95),
(44, 43, NULL, NULL, 'index', 85, 86),
(45, 43, NULL, NULL, 'view', 87, 88),
(46, 43, NULL, NULL, 'add', 89, 90),
(47, 43, NULL, NULL, 'edit', 91, 92),
(48, 43, NULL, NULL, 'delete', 93, 94),
(49, 1, NULL, NULL, 'Histories', 96, 107),
(50, 49, NULL, NULL, 'index', 97, 98),
(51, 49, NULL, NULL, 'view', 99, 100),
(52, 49, NULL, NULL, 'add', 101, 102),
(53, 49, NULL, NULL, 'edit', 103, 104),
(54, 49, NULL, NULL, 'delete', 105, 106),
(55, 1, NULL, NULL, 'Images', 108, 119),
(56, 55, NULL, NULL, 'index', 109, 110),
(57, 55, NULL, NULL, 'view', 111, 112),
(58, 55, NULL, NULL, 'add', 113, 114),
(59, 55, NULL, NULL, 'edit', 115, 116),
(60, 55, NULL, NULL, 'delete', 117, 118),
(61, 1, NULL, NULL, 'UserProfiles', 120, 131),
(62, 61, NULL, NULL, 'index', 121, 122),
(63, 61, NULL, NULL, 'view', 123, 124),
(64, 61, NULL, NULL, 'add', 125, 126),
(65, 61, NULL, NULL, 'edit', 127, 128),
(66, 61, NULL, NULL, 'delete', 129, 130),
(67, 1, NULL, NULL, 'BrandCategories', 132, 143),
(68, 67, NULL, NULL, 'index', 133, 134),
(69, 67, NULL, NULL, 'view', 135, 136),
(70, 67, NULL, NULL, 'add', 137, 138),
(71, 67, NULL, NULL, 'edit', 139, 140),
(72, 67, NULL, NULL, 'delete', 141, 142),
(73, 1, NULL, NULL, 'Campaigns', 144, 155),
(74, 73, NULL, NULL, 'index', 145, 146),
(75, 73, NULL, NULL, 'view', 147, 148),
(76, 73, NULL, NULL, 'add', 149, 150),
(77, 73, NULL, NULL, 'edit', 151, 152),
(78, 73, NULL, NULL, 'delete', 153, 154),
(79, 1, NULL, NULL, 'Companies', 156, 167),
(80, 79, NULL, NULL, 'index', 157, 158),
(81, 79, NULL, NULL, 'view', 159, 160),
(82, 79, NULL, NULL, 'add', 161, 162),
(83, 79, NULL, NULL, 'edit', 163, 164),
(84, 79, NULL, NULL, 'delete', 165, 166),
(85, 1, NULL, NULL, 'Seasons', 168, 179),
(86, 85, NULL, NULL, 'index', 169, 170),
(87, 85, NULL, NULL, 'view', 171, 172),
(88, 85, NULL, NULL, 'add', 173, 174),
(89, 85, NULL, NULL, 'edit', 175, 176),
(90, 85, NULL, NULL, 'delete', 177, 178),
(91, 1, NULL, NULL, 'Staffs', 180, 191),
(92, 91, NULL, NULL, 'index', 181, 182),
(93, 91, NULL, NULL, 'view', 183, 184),
(94, 91, NULL, NULL, 'add', 185, 186),
(95, 91, NULL, NULL, 'edit', 187, 188),
(96, 91, NULL, NULL, 'delete', 189, 190),
(97, 1, NULL, NULL, 'Weeks', 192, 203),
(98, 97, NULL, NULL, 'index', 193, 194),
(99, 97, NULL, NULL, 'view', 195, 196),
(100, 97, NULL, NULL, 'add', 197, 198),
(101, 97, NULL, NULL, 'edit', 199, 200),
(102, 97, NULL, NULL, 'delete', 201, 202);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
`id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 4),
(2, NULL, 'Group', 2, NULL, 5, 6),
(3, NULL, 'Group', 3, NULL, 7, 8),
(4, NULL, 'Group', 4, NULL, 9, 10),
(5, NULL, 'Group', 5, NULL, 11, 12),
(6, NULL, 'Group', 6, NULL, 13, 14),
(7, 1, 'User', 1, NULL, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
`id` int(10) NOT NULL,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
`id` bigint(20) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `description` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand`, `description`, `created`, `modified`, `status`) VALUES
(1, 'Bench', 'Test Brand 1', '2015-01-02 01:34:33', '2015-01-02 01:38:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand_categories`
--

CREATE TABLE IF NOT EXISTS `brand_categories` (
`id` bigint(20) NOT NULL,
  `category` varchar(100) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand_categories`
--

INSERT INTO `brand_categories` (`id`, `category`, `brand_id`, `description`, `created`, `modified`, `status`) VALUES
(1, 'Test Brand Sub Category', 1, 'Test brand sub category', '2015-01-16 14:35:00', '2015-01-16 14:35:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE IF NOT EXISTS `campaigns` (
`id` bigint(20) NOT NULL,
  `campaign` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `campaign`, `description`, `created`, `modified`, `status`) VALUES
(1, 'Christmas Campaign', 'Test Campaign', '2015-01-16 15:34:34', '2015-01-16 15:34:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` bigint(20) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `description`, `created`, `modified`, `status`) VALUES
(1, 'Apparrel', 'Test Category 1', '2015-01-01 12:00:45', '2015-01-01 12:00:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
`id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `contact`, `description`, `created`, `modified`, `status`) VALUES
(1, 'Philscan', 'Makati City', '1234567890', 'Danish IT Company', '2015-01-16 16:28:33', '2015-01-16 16:28:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE IF NOT EXISTS `downloads` (
`id` bigint(20) NOT NULL,
  `image_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `image_id`, `user_id`, `created`, `modified`, `status`) VALUES
(1, 1, 1, '2015-01-06 12:27:31', '2015-01-06 12:27:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Admin', '2014-12-23 06:48:40', '2014-12-23 06:48:40'),
(2, 'Clients', '2014-12-23 06:48:58', '2014-12-23 06:48:58'),
(3, 'Members', '2014-12-23 06:49:07', '2014-12-23 06:49:07'),
(4, 'ExtraGroup1', '2014-12-23 06:49:19', '2014-12-23 06:49:19'),
(5, 'ExtraGroup2', '2014-12-23 06:49:28', '2014-12-23 06:49:28'),
(6, 'ExtraGroup3', '2014-12-23 06:49:39', '2014-12-23 06:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE IF NOT EXISTS `histories` (
`id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `user_id`, `created`, `modified`, `status`) VALUES
(1, 1, '2015-01-06 12:34:36', '2015-01-06 12:34:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`id` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `location` text,
  `description` text,
  `user_id` bigint(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `location`, `description`, `user_id`, `created`, `modified`, `status`) VALUES
(1, 'Test image', 'test image location', 'test image description', 1, '2015-01-06 11:57:35', '2015-01-21 01:09:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `images_brands`
--

CREATE TABLE IF NOT EXISTS `images_brands` (
`id` int(11) NOT NULL,
  `image_id` int(255) NOT NULL,
  `brand_id` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images_brands`
--

INSERT INTO `images_brands` (`id`, `image_id`, `brand_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `images_brand_categories`
--

CREATE TABLE IF NOT EXISTS `images_brand_categories` (
`id` int(255) NOT NULL,
  `image_id` int(255) NOT NULL,
  `brand_category_id` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images_brand_categories`
--

INSERT INTO `images_brand_categories` (`id`, `image_id`, `brand_category_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `images_campaigns`
--

CREATE TABLE IF NOT EXISTS `images_campaigns` (
`id` int(255) NOT NULL,
  `image_id` int(255) NOT NULL,
  `campaign_id` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images_campaigns`
--

INSERT INTO `images_campaigns` (`id`, `image_id`, `campaign_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `images_categories`
--

CREATE TABLE IF NOT EXISTS `images_categories` (
`id` int(255) NOT NULL,
  `image_id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images_categories`
--

INSERT INTO `images_categories` (`id`, `image_id`, `category_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `images_seasons`
--

CREATE TABLE IF NOT EXISTS `images_seasons` (
`id` int(255) NOT NULL,
  `image_id` int(255) NOT NULL,
  `season_id` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images_seasons`
--

INSERT INTO `images_seasons` (`id`, `image_id`, `season_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `images_staffs`
--

CREATE TABLE IF NOT EXISTS `images_staffs` (
`id` int(255) NOT NULL,
  `image_id` int(255) NOT NULL,
  `staff_id` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images_staffs`
--

INSERT INTO `images_staffs` (`id`, `image_id`, `staff_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `images_weeks`
--

CREATE TABLE IF NOT EXISTS `images_weeks` (
`id` int(255) NOT NULL,
  `image_id` int(255) NOT NULL,
  `week_id` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images_weeks`
--

INSERT INTO `images_weeks` (`id`, `image_id`, `week_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

CREATE TABLE IF NOT EXISTS `seasons` (
`id` bigint(20) NOT NULL,
  `season` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seasons`
--

INSERT INTO `seasons` (`id`, `season`, `description`, `created`, `modified`, `status`) VALUES
(1, 'Christmas Season', 'Test Season', '2015-01-16 15:53:51', '2015-01-16 15:53:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE IF NOT EXISTS `staffs` (
`id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `company_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `position`, `company_id`, `created`, `modified`, `status`) VALUES
(1, 'Ryan John Macabulos', 'IT Manager', 1, '2015-01-16 16:41:02', '2015-01-16 16:41:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` tinytext COLLATE utf8_unicode_ci COMMENT 'full url to avatar image file',
  `language` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `group_id`, `username`, `name`, `password`, `email`, `avatar`, `language`, `timezone`, `token`, `status`, `created`, `modified`, `last_login`) VALUES
(1, 1, NULL, 'Admin', '3c077f975548545af54e65fa27ccea1f7aa3b5a1', 'admin@admin.com', NULL, NULL, NULL, NULL, 1, '2014-12-23 06:50:29', '2015-01-20 08:27:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
`id` bigint(20) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` int(5) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `mobile_number` varchar(100) DEFAULT NULL,
  `land_line_nuber` varchar(100) DEFAULT NULL,
  `office_number` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `civil_status` int(1) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `weeks`
--

CREATE TABLE IF NOT EXISTS `weeks` (
`id` bigint(20) NOT NULL,
  `period` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weeks`
--

INSERT INTO `weeks` (`id`, `period`, `description`, `created`, `modified`, `status`) VALUES
(1, '1-4', 'Testing', '2015-01-16 16:20:35', '2015-01-16 16:20:35', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_categories`
--
ALTER TABLE `brand_categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_brands`
--
ALTER TABLE `images_brands`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_brand_categories`
--
ALTER TABLE `images_brand_categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_campaigns`
--
ALTER TABLE `images_campaigns`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_categories`
--
ALTER TABLE `images_categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_seasons`
--
ALTER TABLE `images_seasons`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_staffs`
--
ALTER TABLE `images_staffs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_weeks`
--
ALTER TABLE `images_weeks`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weeks`
--
ALTER TABLE `weeks`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brand_categories`
--
ALTER TABLE `brand_categories`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images_brands`
--
ALTER TABLE `images_brands`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images_brand_categories`
--
ALTER TABLE `images_brand_categories`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images_campaigns`
--
ALTER TABLE `images_campaigns`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images_categories`
--
ALTER TABLE `images_categories`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images_seasons`
--
ALTER TABLE `images_seasons`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images_staffs`
--
ALTER TABLE `images_staffs`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images_weeks`
--
ALTER TABLE `images_weeks`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seasons`
--
ALTER TABLE `seasons`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `weeks`
--
ALTER TABLE `weeks`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
