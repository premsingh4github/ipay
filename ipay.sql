-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2015 at 12:34 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ipay`
--

-- --------------------------------------------------------

--
-- Table structure for table `bf_activities`
--

CREATE TABLE IF NOT EXISTS `bf_activities` (
`activity_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `activity` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `deleted` tinyint(12) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=462 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_activities`
--

INSERT INTO `bf_activities` (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES
(1, 1, 'logged in from: ::1', 'users', '2014-08-05 08:13:56', 0),
(2, 1, 'logged in from: ::1', 'users', '2014-08-05 12:43:31', 0),
(3, 1, 'Migrate Type: media_ to Version: 2 from: ::1', 'migrations', '2014-08-05 12:51:58', 0),
(4, 1, 'Migrate module: media Version: 2 from: ::1', 'migrations', '2014-08-05 12:51:58', 0),
(5, 1, 'Created record with ID: 1 : ::1', 'media', '2014-08-05 12:55:55', 0),
(6, 1, 'Created record with ID: 1 : ::1', 'media', '2014-08-05 13:00:31', 0),
(7, 1, 'logged in from: ::1', 'users', '2014-08-05 13:13:13', 0),
(8, 1, 'logged in from: ::1', 'users', '2014-08-05 13:33:51', 0),
(9, 1, 'Created Module: Banner : ::1', 'modulebuilder', '2014-08-05 13:53:44', 0),
(10, 1, 'Created record with ID: 1 : ::1', 'banner', '2014-08-05 13:57:46', 0),
(11, 1, 'logged in from: ::1', 'users', '2014-08-05 14:15:07', 0),
(12, 1, 'logged in from: ::1', 'users', '2014-08-06 05:39:20', 0),
(13, 1, 'logged in from: ::1', 'users', '2014-08-06 05:40:57', 0),
(14, 1, 'Created record with ID: 2 : ::1', 'banner', '2014-08-06 06:11:21', 0),
(15, 1, 'Created record with ID: 1 : ::1', 'media', '2014-08-06 06:49:13', 0),
(16, 1, 'Created record with ID: 1 : ::1', 'media', '2014-08-06 06:50:01', 0),
(17, 1, 'Created record with ID: 3 : ::1', 'banner', '2014-08-06 06:51:45', 0),
(18, 1, 'Deleted Module: Banner : ::1', 'builder', '2014-08-06 07:01:37', 0),
(19, 1, 'Created Module: Banner : ::1', 'modulebuilder', '2014-08-06 07:07:40', 0),
(20, 1, 'Deleted Module: Banner : ::1', 'builder', '2014-08-06 07:10:23', 0),
(21, 1, 'Created Module: Banner : ::1', 'modulebuilder', '2014-08-06 07:12:55', 0),
(22, 1, 'Created record with ID: 1 : ::1', 'banner', '2014-08-06 07:20:23', 0),
(23, 1, 'logged in from: ::1', 'users', '2014-08-06 07:33:54', 0),
(24, 1, 'logged in from: ::1', 'users', '2014-08-06 07:51:43', 0),
(25, 1, 'Migrate Type: menu_ to Version: 2 from: ::1', 'migrations', '2014-08-06 12:14:18', 0),
(26, 1, 'Migrate module: menu Version: 2 from: ::1', 'migrations', '2014-08-06 12:14:18', 0),
(27, 1, 'Created record with ID: 1 : ::1', 'menu', '2014-08-06 12:15:08', 0),
(28, 1, 'Deleted Module: Menu : ::1', 'builder', '2014-08-06 12:50:35', 0),
(29, 1, 'Migrate Type: menu_ to Version: 2 from: ::1', 'migrations', '2014-08-06 12:51:33', 0),
(30, 1, 'Migrate module: menu Version: 2 from: ::1', 'migrations', '2014-08-06 12:51:33', 0),
(31, 1, 'Migrate Type: sub_menu_ to Version: 2 from: ::1', 'migrations', '2014-08-06 12:52:24', 0),
(32, 1, 'Migrate module: sub_menu Version: 2 from: ::1', 'migrations', '2014-08-06 12:52:24', 0),
(33, 1, 'Created record with ID: 1 : ::1', 'menu', '2014-08-06 12:53:33', 0),
(34, 1, 'Created record with ID: 1 : ::1', 'sub_menu', '2014-08-06 12:54:23', 0),
(35, 1, 'Deleted Module: Menu : ::1', 'builder', '2014-08-06 13:05:33', 0),
(36, 1, 'Migrate Type: menu_ to Version: 2 from: ::1', 'migrations', '2014-08-06 13:06:26', 0),
(37, 1, 'Migrate module: menu Version: 2 from: ::1', 'migrations', '2014-08-06 13:06:26', 0),
(38, 1, 'Deleted Module: Menu : ::1', 'builder', '2014-08-06 13:08:36', 0),
(39, 1, 'Migrate Type: menu_ to Version: 2 from: ::1', 'migrations', '2014-08-06 13:09:31', 0),
(40, 1, 'Migrate module: menu Version: 2 from: ::1', 'migrations', '2014-08-06 13:09:31', 0),
(41, 1, 'Deleted Module: Menu : ::1', 'builder', '2014-08-06 13:10:33', 0),
(42, 1, 'Migrate Type: menu_ to Version: 2 from: ::1', 'migrations', '2014-08-06 13:11:51', 0),
(43, 1, 'Migrate module: menu Version: 2 from: ::1', 'migrations', '2014-08-06 13:11:51', 0),
(44, 1, 'Created record with ID: 1 : ::1', 'menu', '2014-08-06 13:12:17', 0),
(45, 1, 'logged in from: ::1', 'users', '2014-08-06 13:18:05', 0),
(46, 1, 'Created Module: Department : ::1', 'modulebuilder', '2014-08-06 13:30:21', 0),
(47, 1, 'Deleted Module: Department : ::1', 'builder', '2014-08-06 13:34:51', 0),
(48, 1, 'Created Module: Department : ::1', 'modulebuilder', '2014-08-06 13:38:17', 0),
(49, 1, 'Created record with ID: 1 : ::1', 'department', '2014-08-06 13:41:22', 0),
(50, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-06 13:41:40', 0),
(51, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-06 13:42:42', 0),
(52, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-06 14:08:11', 0),
(53, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-06 14:08:27', 0),
(54, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-06 14:12:23', 0),
(55, 1, 'logged in from: ::1', 'users', '2014-08-07 05:21:05', 0),
(56, 1, 'Created record with ID: 2 : ::1', 'department', '2014-08-07 05:22:27', 0),
(57, 1, 'Created record with ID: 1 : ::1', 'media', '2014-08-07 05:45:54', 0),
(58, 1, 'Created record with ID: 1 : ::1', 'media', '2014-08-07 05:46:57', 0),
(59, 1, 'Created record with ID: 1 : ::1', 'media', '2014-08-07 05:47:36', 0),
(60, 1, 'Created record with ID: 1 : ::1', 'media', '2014-08-07 05:48:27', 0),
(61, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-07 05:49:28', 0),
(62, 1, 'Updated record with ID: 2 : ::1', 'department', '2014-08-07 05:49:44', 0),
(63, 1, 'Created record with ID: 3 : ::1', 'department', '2014-08-07 05:50:24', 0),
(64, 1, 'Created record with ID: 4 : ::1', 'department', '2014-08-07 05:51:04', 0),
(65, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-07 05:51:27', 0),
(66, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-07 05:51:40', 0),
(67, 1, 'Created record with ID: 5 : ::1', 'department', '2014-08-07 05:53:22', 0),
(68, 1, 'Updated record with ID: 5 : ::1', 'department', '2014-08-07 05:54:17', 0),
(69, 1, 'Created record with ID: 6 : ::1', 'department', '2014-08-07 06:12:08', 0),
(70, 1, 'Updated record with ID: 6 : ::1', 'department', '2014-08-07 06:12:25', 0),
(71, 1, 'Deleted Module: Sub_menu : ::1', 'builder', '2014-08-07 10:51:49', 0),
(72, 1, 'Deleted Module: Menu : ::1', 'builder', '2014-08-07 10:51:56', 0),
(73, 1, 'Updated record with ID: 4 : ::1', 'department', '2014-08-07 13:05:11', 0),
(74, 1, 'Updated record with ID: 4 : ::1', 'department', '2014-08-07 13:05:24', 0),
(75, 1, 'logged in from: ::1', 'users', '2014-08-07 13:22:36', 0),
(76, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-07 13:50:30', 0),
(77, 1, 'logged in from: ::1', 'users', '2014-08-08 05:34:43', 0),
(78, 1, 'Updated record with ID:  : ::1', 'department', '2014-08-08 06:03:09', 0),
(79, 1, 'Updated record with ID: 2 : ::1', 'department', '2014-08-08 06:03:51', 0),
(80, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-08 06:03:56', 0),
(81, 1, 'Updated record with ID: 2 : ::1', 'department', '2014-08-08 06:04:42', 0),
(82, 1, 'Updated record with ID: 2 : ::1', 'department', '2014-08-08 06:06:08', 0),
(83, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-08 06:06:35', 0),
(84, 1, 'Updated record with ID: 2 : ::1', 'department', '2014-08-08 06:06:41', 0),
(85, 1, 'Created record with ID: 1 : ::1', 'media', '2014-08-08 06:13:38', 0),
(86, 1, 'Created record with ID: 2 : ::1', 'banner', '2014-08-08 06:14:27', 0),
(87, 1, 'Created record with ID: 4 : ::1', 'department', '2014-08-08 06:21:32', 0),
(88, 1, 'Updated record with ID: 4 : ::1', 'department', '2014-08-08 06:24:14', 0),
(89, 1, 'Updated record with ID: 4 : ::1', 'department', '2014-08-08 06:24:27', 0),
(90, 1, 'Updated record with ID: 2 : ::1', 'department', '2014-08-08 06:35:49', 0),
(91, 1, 'Updated record with ID: 2 : ::1', 'department', '2014-08-08 06:43:20', 0),
(92, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-08 06:43:27', 0),
(93, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-08 06:43:56', 0),
(94, 1, 'Created record with ID: 5 : ::1', 'department', '2014-08-08 06:46:22', 0),
(95, 1, 'Created record with ID: 6 : ::1', 'department', '2014-08-08 06:46:45', 0),
(96, 1, 'Updated record with ID: 6 : ::1', 'department', '2014-08-08 07:02:42', 0),
(97, 1, 'Updated record with ID: 5 : ::1', 'department', '2014-08-08 07:02:46', 0),
(98, 1, 'Updated record with ID: 5 : ::1', 'department', '2014-08-08 07:53:39', 0),
(99, 1, 'Updated record with ID: 6 : ::1', 'department', '2014-08-08 07:53:51', 0),
(100, 1, 'Updated record with ID: 6 : ::1', 'department', '2014-08-08 08:00:59', 0),
(101, 1, 'Updated record with ID: 5 : ::1', 'department', '2014-08-08 08:01:04', 0),
(102, 1, 'Updated record with ID: 1 : ::1', 'banner', '2014-08-08 08:39:44', 0),
(103, 1, 'Updated record with ID: 2 : ::1', 'banner', '2014-08-08 08:48:47', 0),
(104, 1, 'Updated record with ID: 2 : ::1', 'banner', '2014-08-08 08:49:12', 0),
(105, 1, 'Updated record with ID: 2 : ::1', 'banner', '2014-08-08 08:53:02', 0),
(106, 1, 'Updated record with ID: 1 : ::1', 'banner', '2014-08-08 09:04:06', 0),
(107, 1, 'Updated record with ID: 1 : ::1', 'banner', '2014-08-08 09:04:13', 0),
(108, 1, 'Updated record with ID: 1 : ::1', 'banner', '2014-08-08 09:20:06', 0),
(109, 1, 'Updated record with ID: 2 : ::1', 'banner', '2014-08-08 09:23:46', 0),
(110, 1, 'Updated record with ID: 1 : ::1', 'banner', '2014-08-08 09:24:48', 0),
(111, 1, 'Updated record with ID: 1 : ::1', 'banner', '2014-08-08 10:08:25', 0),
(112, 1, 'Updated record with ID: 1 : ::1', 'banner', '2014-08-08 10:14:21', 0),
(113, 1, 'Updated record with ID: 1 : ::1', 'banner', '2014-08-08 10:16:03', 0),
(114, 1, 'Updated record with ID: 1 : ::1', 'banner', '2014-08-08 10:29:11', 0),
(115, 1, 'Created record with ID: 3 : ::1', 'banner', '2014-08-08 10:34:17', 0),
(116, 1, 'Created record with ID: 4 : ::1', 'banner', '2014-08-08 10:47:32', 0),
(117, 1, 'logged in from: ::1', 'users', '2014-08-08 11:08:18', 0),
(118, 1, 'Updated record with ID: 1 : ::1', 'banner', '2014-08-08 11:29:18', 0),
(119, 1, 'Updated record with ID: 1 : ::1', 'banner', '2014-08-08 11:30:36', 0),
(120, 1, 'Updated record with ID: 2 : ::1', 'banner', '2014-08-08 11:31:03', 0),
(121, 1, 'Updated record with ID: 2 : ::1', 'banner', '2014-08-08 11:32:04', 0),
(122, 1, 'Updated record with ID: 1 : ::1', 'banner', '2014-08-08 11:32:26', 0),
(123, 1, 'Updated record with ID: 1 : ::1', 'banner', '2014-08-08 11:40:57', 0),
(124, 1, 'Updated record with ID: 1 : ::1', 'banner', '2014-08-08 11:41:21', 0),
(125, 1, 'Updated record with ID: 1 : ::1', 'banner', '2014-08-08 11:42:39', 0),
(126, 1, 'Updated record with ID: 1 : ::1', 'banner', '2014-08-08 11:43:02', 0),
(127, 1, 'Updated record with ID: 1 : ::1', 'banner', '2014-08-08 11:44:21', 0),
(128, 1, 'Updated record with ID: 2 : ::1', 'banner', '2014-08-08 11:44:44', 0),
(129, 1, 'Updated record with ID: 2 : ::1', 'banner', '2014-08-08 11:45:14', 0),
(130, 1, 'App settings saved from: ::1', 'core', '2014-08-08 12:17:13', 0),
(131, 1, 'App settings saved from: ::1', 'core', '2014-08-08 12:17:27', 0),
(132, 1, 'App settings saved from: ::1', 'core', '2014-08-08 12:17:34', 0),
(133, 1, 'App settings saved from: ::1', 'core', '2014-08-08 12:17:50', 0),
(134, 1, 'Created record with ID: 1 : ::1', 'media', '2014-08-08 13:28:23', 0),
(135, 1, 'logged in from: ::1', 'users', '2014-08-11 05:21:27', 0),
(136, 1, 'modified user: admin', 'users', '2014-08-11 08:06:48', 0),
(137, 1, 'logged in from: ::1', 'users', '2014-08-11 08:07:10', 0),
(138, 1, 'Created record with ID: 7 : ::1', 'department', '2014-08-11 08:19:32', 0),
(139, 1, 'Created record with ID: 8 : ::1', 'department', '2014-08-11 08:22:25', 0),
(140, 1, 'Created record with ID: 9 : ::1', 'department', '2014-08-11 08:26:34', 0),
(141, 1, 'Created record with ID: 10 : ::1', 'department', '2014-08-11 08:28:45', 0),
(142, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-11 08:35:18', 0),
(143, 1, 'Updated record with ID: 4 : ::1', 'department', '2014-08-11 08:36:25', 0),
(144, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-11 08:36:47', 0),
(145, 1, 'Updated record with ID: 2 : ::1', 'department', '2014-08-11 08:37:12', 0),
(146, 1, 'Updated record with ID: 3 : ::1', 'department', '2014-08-11 08:37:37', 0),
(147, 1, 'Updated record with ID: 10 : ::1', 'department', '2014-08-11 08:38:12', 0),
(148, 1, 'Updated record with ID: 4 : ::1', 'department', '2014-08-11 08:39:19', 0),
(149, 1, 'Created record with ID: 1 : ::1', 'media', '2014-08-11 08:58:47', 0),
(150, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-11 08:59:05', 0),
(151, 1, 'Created Module: ON-COUNTER : ::1', 'modulebuilder', '2014-08-11 09:36:18', 0),
(152, 1, 'Created record with ID: 1 : ::1', 'on_counter', '2014-08-11 09:56:17', 0),
(153, 1, 'Created Module: STEPS : ::1', 'modulebuilder', '2014-08-11 10:04:45', 0),
(154, 1, 'Created record with ID: 1 : ::1', 'steps', '2014-08-11 10:16:41', 0),
(155, 1, 'Updated record with ID: 1 : ::1', 'steps', '2014-08-11 10:17:45', 0),
(156, 1, 'Deleted Module: STEPS : ::1', 'builder', '2014-08-11 10:22:44', 0),
(157, 1, 'Created Module: STEPS : ::1', 'modulebuilder', '2014-08-11 10:27:16', 0),
(158, 1, 'Created record with ID: 1 : ::1', 'steps', '2014-08-11 10:45:07', 0),
(159, 1, 'Updated record with ID: 1 : ::1', 'steps', '2014-08-11 10:47:29', 0),
(160, 1, 'Updated record with ID: 1 : ::1', 'steps', '2014-08-11 10:47:46', 0),
(161, 1, 'Created record with ID: 2 : ::1', 'steps', '2014-08-11 10:50:20', 0),
(162, 1, 'Created record with ID: 3 : ::1', 'steps', '2014-08-11 10:50:51', 0),
(163, 1, 'Created record with ID: 4 : ::1', 'steps', '2014-08-11 10:51:44', 0),
(164, 1, 'logged in from: ::1', 'users', '2014-08-11 12:12:48', 0),
(165, 1, 'Created record with ID: 11 : ::1', 'department', '2014-08-11 12:35:02', 0),
(166, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-11 12:41:40', 0),
(167, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-11 12:58:31', 0),
(168, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-11 12:59:27', 0),
(169, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-11 13:00:54', 0),
(170, 1, 'Updated record with ID: 2 : ::1', 'department', '2014-08-11 13:01:31', 0),
(171, 1, 'Updated record with ID: 1 : ::1', 'department', '2014-08-11 13:02:16', 0),
(172, 1, 'Updated record with ID: 11 : ::1', 'department', '2014-08-11 13:02:33', 0),
(173, 1, 'Created record with ID: 5 : ::1', 'steps', '2014-08-11 13:05:01', 0),
(174, 1, 'Updated record with ID: 5 : ::1', 'steps', '2014-08-11 13:05:53', 0),
(175, 1, 'Deleted Module: ON_COUNTER : ::1', 'builder', '2014-08-11 13:09:13', 0),
(176, 1, 'logged in from: ::1', 'users', '2014-08-11 13:23:38', 0),
(177, 1, 'Updated record with ID: 4 : ::1', 'steps', '2014-08-11 13:24:02', 0),
(178, 1, 'Updated record with ID: 4 : ::1', 'steps', '2014-08-11 13:24:14', 0),
(179, 1, 'logged in from: ::1', 'users', '2014-08-12 05:47:21', 0),
(180, 1, 'Created Module: TAB : ::1', 'modulebuilder', '2014-08-12 08:44:16', 0),
(181, 1, 'Created record with ID: 1 : ::1', 'tab', '2014-08-12 08:44:57', 0),
(182, 1, 'Created record with ID: 2 : ::1', 'tab', '2014-08-12 08:47:22', 0),
(183, 1, 'Created record with ID: 3 : ::1', 'tab', '2014-08-12 09:14:15', 0),
(184, 1, 'Created record with ID: 7 : ::1', 'tab', '2014-08-12 09:26:54', 0),
(185, 1, 'Created record with ID: 8 : ::1', 'tab', '2014-08-12 09:27:26', 0),
(186, 1, 'Updated record with ID: 7 : ::1', 'tab', '2014-08-12 10:13:06', 0),
(187, 1, 'Updated record with ID: 7 : ::1', 'tab', '2014-08-12 10:13:54', 0),
(188, 1, 'Updated record with ID: 8 : ::1', 'tab', '2014-08-12 10:19:24', 0),
(189, 1, 'Updated record with ID: 8 : ::1', 'tab', '2014-08-12 10:19:43', 0),
(190, 1, 'Updated record with ID: 7 : ::1', 'tab', '2014-08-12 10:20:46', 0),
(191, 1, 'Created record with ID: 9 : ::1', 'tab', '2014-08-12 10:33:20', 0),
(192, 1, 'Updated record with ID: 9 : ::1', 'tab', '2014-08-12 10:34:19', 0),
(193, 1, 'Updated record with ID: 1 : ::1', 'steps', '2014-08-12 10:44:19', 0),
(194, 1, 'Updated record with ID: 5 : ::1', 'steps', '2014-08-12 10:44:36', 0),
(195, 1, 'Updated record with ID: 2 : ::1', 'steps', '2014-08-12 10:45:34', 0),
(196, 1, 'Updated record with ID: 4 : ::1', 'steps', '2014-08-12 10:45:50', 0),
(197, 1, 'Updated record with ID: 3 : ::1', 'steps', '2014-08-12 10:46:06', 0),
(198, 1, 'Created record with ID: 10 : ::1', 'tab', '2014-08-12 11:07:56', 0),
(199, 1, 'Updated record with ID: 10 : ::1', 'tab', '2014-08-12 11:08:37', 0),
(200, 1, 'Created record with ID: 11 : ::1', 'tab', '2014-08-12 11:37:35', 0),
(201, 1, 'Created record with ID: 12 : ::1', 'tab', '2014-08-12 11:40:31', 0),
(202, 1, 'Created record with ID: 13 : ::1', 'tab', '2014-08-12 11:40:59', 0),
(203, 1, 'Created record with ID: 14 : ::1', 'tab', '2014-08-12 11:43:27', 0),
(204, 1, 'Updated record with ID: 1 : ::1', 'steps', '2014-08-12 11:51:04', 0),
(205, 1, 'Updated record with ID: 12 : ::1', 'tab', '2014-08-12 12:16:01', 0),
(206, 1, 'Updated record with ID: 12 : ::1', 'tab', '2014-08-12 12:23:59', 0),
(207, 1, 'Updated record with ID: 12 : ::1', 'tab', '2014-08-12 12:40:49', 0),
(208, 1, 'Updated record with ID: 12 : ::1', 'tab', '2014-08-12 12:43:05', 0),
(209, 1, 'Updated record with ID: 12 : ::1', 'tab', '2014-08-12 12:43:19', 0),
(210, 1, 'Updated record with ID: 12 : ::1', 'tab', '2014-08-12 12:44:21', 0),
(211, 1, 'Updated record with ID: 12 : ::1', 'tab', '2014-08-12 12:44:36', 0),
(212, 1, 'Updated record with ID: 12 : ::1', 'tab', '2014-08-12 13:03:51', 0),
(213, 1, 'Updated record with ID: 13 : ::1', 'tab', '2014-08-12 13:06:55', 0),
(214, 1, 'Updated record with ID: 13 : ::1', 'tab', '2014-08-12 13:21:11', 0),
(215, 1, 'Updated record with ID: 14 : ::1', 'tab', '2014-08-12 13:46:42', 0),
(216, 1, 'Updated record with ID: 12 : ::1', 'tab', '2014-08-12 13:47:35', 0),
(217, 1, 'Updated record with ID: 12 : ::1', 'tab', '2014-08-12 13:52:28', 0),
(218, 1, 'Updated record with ID: 13 : ::1', 'tab', '2014-08-12 13:52:59', 0),
(219, 1, 'logged in from: ::1', 'users', '2014-08-12 13:58:58', 0),
(220, 1, 'logged in from: ::1', 'users', '2014-08-13 08:13:44', 0),
(221, 1, 'Created Module: Menu : ::1', 'modulebuilder', '2014-08-13 08:18:37', 0),
(222, 1, 'Deleted Module: Menu : ::1', 'builder', '2014-08-13 08:19:12', 0),
(223, 1, 'Created Module: Menu : ::1', 'modulebuilder', '2014-08-13 08:23:41', 0),
(224, 1, 'Created record with ID: 1 : ::1', 'menu', '2014-08-13 10:15:44', 0),
(225, 1, 'Created record with ID: 2 : ::1', 'menu', '2014-08-13 10:37:22', 0),
(226, 1, 'Created record with ID: 3 : ::1', 'menu', '2014-08-13 10:39:59', 0),
(227, 1, 'Created record with ID: 4 : ::1', 'menu', '2014-08-13 10:50:15', 0),
(228, 1, 'Created record with ID: 5 : ::1', 'menu', '2014-08-13 10:57:18', 0),
(229, 1, 'Created record with ID: 6 : ::1', 'menu', '2014-08-13 10:57:37', 0),
(230, 1, 'Created record with ID: 7 : ::1', 'menu', '2014-08-13 10:58:14', 0),
(231, 1, 'Created record with ID: 8 : ::1', 'menu', '2014-08-13 11:26:30', 0),
(232, 1, 'Created record with ID: 9 : ::1', 'menu', '2014-08-13 11:45:03', 0),
(233, 1, 'Updated record with ID: 3 : ::1', 'menu', '2014-08-13 13:04:06', 0),
(234, 1, 'Updated record with ID: 5 : ::1', 'menu', '2014-08-13 13:04:26', 0),
(235, 1, 'Created record with ID: 10 : ::1', 'menu', '2014-08-13 13:58:49', 0),
(236, 1, 'Created record with ID: 11 : ::1', 'menu', '2014-08-13 14:02:21', 0),
(237, 1, 'Created record with ID: 12 : ::1', 'menu', '2014-08-13 14:03:09', 0),
(238, 1, 'Created record with ID: 13 : ::1', 'menu', '2014-08-13 14:08:27', 0),
(239, 1, 'Created record with ID: 14 : ::1', 'menu', '2014-08-13 14:09:14', 0),
(240, 1, 'Created record with ID: 15 : ::1', 'menu', '2014-08-13 14:09:44', 0),
(241, 1, 'logged in from: ::1', 'users', '2014-08-14 05:26:03', 0),
(242, 1, 'Created record with ID: 16 : ::1', 'menu', '2014-08-14 05:45:26', 0),
(243, 1, 'Updated record with ID: 16 : ::1', 'menu', '2014-08-14 05:47:08', 0),
(244, 1, 'FIXME ("department_act_edit_record"):  : ::1', 'department', '2014-08-14 05:58:30', 0),
(245, 1, 'Updated record with ID:  : ::1', 'menu', '2014-08-14 06:00:01', 0),
(246, 1, 'Updated record with ID:  : ::1', 'menu', '2014-08-14 06:00:53', 0),
(247, 1, 'Updated record with ID:  : ::1', 'menu', '2014-08-14 06:02:12', 0),
(248, 1, 'Updated record with ID:  : ::1', 'menu', '2014-08-14 06:04:54', 0),
(249, 1, 'Updated record with ID:  : ::1', 'menu', '2014-08-14 06:05:00', 0),
(250, 1, 'Updated record with ID:  : ::1', 'menu', '2014-08-14 06:05:06', 0),
(251, 1, 'Updated record with ID:  : ::1', 'menu', '2014-08-14 06:05:16', 0),
(252, 1, 'Updated record with ID: 2 : ::1', 'menu', '2014-08-14 06:08:31', 0),
(253, 1, 'Updated record with ID:  : ::1', 'menu', '2014-08-14 06:08:39', 0),
(254, 1, 'Updated record with ID:  : ::1', 'menu', '2014-08-14 07:18:11', 0),
(255, 1, 'Updated record with ID:  : ::1', 'menu', '2014-08-14 07:18:17', 0),
(256, 1, 'Updated record with ID: 15 : ::1', 'menu', '2014-08-14 07:49:47', 0),
(257, 1, 'Updated record with ID: 15 : ::1', 'menu', '2014-08-14 07:49:53', 0),
(258, 1, 'logged in from: ::1', 'users', '2014-08-14 10:57:40', 0),
(259, 1, 'logged in from: ::1', 'users', '2014-08-14 10:59:44', 0),
(260, 1, 'logged in from: ::1', 'users', '2014-08-14 11:01:50', 0),
(261, 1, 'logged in from: ::1', 'users', '2014-08-14 11:03:19', 0),
(262, 1, 'created a new Editor: editor', 'users', '2014-08-14 11:52:18', 0),
(263, 2, 'logged in from: ::1', 'users', '2014-08-14 11:54:22', 0),
(264, 1, 'modified user: editor', 'users', '2014-08-14 12:10:34', 0),
(265, 1, 'modified user: editor', 'users', '2014-08-14 12:14:46', 0),
(266, 1, 'modified user: editor', 'users', '2014-08-14 12:16:03', 0),
(267, 1, 'modified user: editor', 'users', '2014-08-14 12:17:38', 0),
(268, 1, 'modified user: editor', 'users', '2014-08-14 12:17:55', 0),
(269, 2, 'logged in from: ::1', 'users', '2014-08-14 12:20:36', 0),
(270, 1, 'Updated record with ID: 2 : ::1', 'steps', '2014-08-14 13:35:03', 0),
(271, 1, 'Updated record with ID: 3 : ::1', 'steps', '2014-08-14 13:35:20', 0),
(272, 1, 'Updated record with ID: 4 : ::1', 'steps', '2014-08-14 13:35:40', 0),
(273, 1, 'Updated record with ID: 5 : ::1', 'steps', '2014-08-14 13:36:00', 0),
(274, 1, 'Updated record with ID: 2 : ::1', 'steps', '2014-08-14 13:47:02', 0),
(275, 1, 'Updated record with ID: 5 : ::1', 'steps', '2014-08-14 13:47:12', 0),
(276, 1, 'Updated record with ID: 5 : ::1', 'steps', '2014-08-14 13:47:16', 0),
(277, 1, 'logged in from: ::1', 'users', '2014-08-15 05:34:22', 0),
(278, 1, 'Created Module: Partner : ::1', 'modulebuilder', '2014-08-15 05:48:19', 0),
(279, 1, 'Created record with ID: 1 : ::1', 'partner', '2014-08-15 05:50:18', 0),
(280, 1, 'Updated record with ID: 1 : ::1', 'partner', '2014-08-15 05:52:55', 0),
(281, 1, 'Updated record with ID: 1 : ::1', 'partner', '2014-08-15 05:53:56', 0),
(282, 1, 'Updated record with ID: 1 : ::1', 'steps', '2014-08-15 06:04:55', 0),
(283, 1, 'Updated record with ID: 1 : ::1', 'steps', '2014-08-15 06:04:59', 0),
(284, 1, 'Updated record with ID: 14 : ::1', 'tab', '2014-08-15 06:52:16', 0),
(285, 1, 'Updated record with ID: 14 : ::1', 'tab', '2014-08-15 06:52:20', 0),
(286, 1, 'Updated record with ID: 1 : ::1', 'partner', '2014-08-15 06:53:38', 0),
(287, 1, 'Updated record with ID: 1 : ::1', 'partner', '2014-08-15 06:55:25', 0),
(288, 1, 'Updated record with ID: 1 : ::1', 'partner', '2014-08-15 06:55:30', 0),
(289, 1, 'Updated record with ID:  : ::1', 'menu', '2014-08-15 07:02:14', 0),
(290, 1, 'Updated record with ID:  : ::1', 'menu', '2014-08-15 07:02:18', 0),
(291, 1, 'Updated record with ID: 1 : ::1', 'partner', '2014-08-15 07:04:24', 0),
(292, 1, 'Updated record with ID: 1 : ::1', 'partner', '2014-08-15 07:04:55', 0),
(293, 1, 'Updated record with ID: 1 : ::1', 'partner', '2014-08-15 07:04:59', 0),
(294, 1, 'Updated record with ID: 1 : ::1', 'partner', '2014-08-15 07:07:42', 0),
(295, 1, 'Updated record with ID: 1 : ::1', 'partner', '2014-08-15 07:07:52', 0),
(296, 1, 'Updated record with ID: 3 : ::1', 'steps', '2014-08-15 07:28:28', 0),
(297, 1, 'Created record with ID: 2 : ::1', 'partner', '2014-08-15 07:34:26', 0),
(298, 1, 'Updated record with ID: 13 : ::1', 'menu', '2014-08-15 08:16:20', 0),
(299, 1, 'Updated record with ID: 2 : 202.166.221.71', 'banner', '2014-08-15 06:02:53', 0),
(300, 1, 'Updated record with ID: 1 : 202.166.221.71', 'department', '2014-08-15 06:03:30', 0),
(301, 1, 'Updated record with ID: 2 : 202.166.221.71', 'department', '2014-08-15 06:03:56', 0),
(302, 1, 'Updated record with ID: 3 : 202.166.221.71', 'department', '2014-08-15 06:04:18', 0),
(303, 1, 'Updated record with ID: 4 : 202.166.221.71', 'department', '2014-08-15 06:04:37', 0),
(304, 1, 'Updated record with ID: 12 : 202.166.221.71', 'tab', '2014-08-15 06:08:43', 0),
(305, 1, 'Updated record with ID: 13 : 202.166.221.71', 'tab', '2014-08-15 06:09:05', 0),
(306, 1, 'Updated record with ID: 14 : 202.166.221.71', 'tab', '2014-08-15 06:09:15', 0),
(307, 1, 'logged in from: 202.166.221.71', 'users', '2014-08-17 21:26:25', 0),
(308, 1, 'Migrate Type: social_link_ to Version: 2 from: 202.166.221.71', 'migrations', '2014-08-17 23:07:55', 0),
(309, 1, 'Migrate module: social_link Version: 2 from: 202.166.221.71', 'migrations', '2014-08-17 23:07:55', 0),
(310, 1, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-17 23:09:27', 0),
(311, 1, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-17 23:10:16', 0),
(312, 1, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-17 23:11:21', 0),
(313, 1, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-17 23:12:03', 0),
(314, 1, 'Created record with ID: 1 : 202.166.221.71', 'social_link', '2014-08-17 23:28:14', 0),
(315, 1, 'Created record with ID: 2 : 202.166.221.71', 'social_link', '2014-08-17 23:29:14', 0),
(316, 1, 'Updated record with ID: 1 : 202.166.221.71', 'social_link', '2014-08-17 23:29:28', 0),
(317, 1, 'Updated record with ID: 1 : 202.166.221.71', 'social_link', '2014-08-17 23:29:38', 0),
(318, 1, 'Created record with ID: 3 : 202.166.221.71', 'social_link', '2014-08-17 23:31:06', 0),
(319, 1, 'Created record with ID: 4 : 202.166.221.71', 'social_link', '2014-08-17 23:32:42', 0),
(320, 1, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-18 00:07:51', 0),
(321, 1, 'logged in from: 202.166.221.71', 'users', '2014-08-18 02:09:20', 0),
(322, 1, 'Updated record with ID: 12 : 202.166.221.71', 'tab', '2014-08-18 02:16:13', 0),
(323, 1, 'logged in from: 202.166.221.71', 'users', '2014-08-18 05:10:15', 0),
(324, 1, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-18 05:10:53', 0),
(325, 1, 'logged in from: 202.79.34.32', 'users', '2014-08-18 21:09:15', 0),
(326, 1, 'Created record with ID: 1 : 202.79.34.32', 'media', '2014-08-18 21:10:29', 0),
(327, 1, 'Created record with ID: 1 : 202.79.34.32', 'media', '2014-08-18 22:17:52', 0),
(328, 1, 'logged in from: 202.79.34.32', 'users', '2014-08-19 22:13:31', 0),
(329, 1, 'Updated record with ID: 2 : 202.79.34.32', 'banner', '2014-08-19 22:15:13', 0),
(330, 1, 'Updated record with ID: 4 : 202.79.34.32', 'social_link', '2014-08-19 22:16:03', 0),
(331, 1, 'Updated record with ID: 4 : 202.79.34.32', 'social_link', '2014-08-19 22:16:36', 0),
(332, 1, 'Updated record with ID: 3 : 202.79.34.32', 'banner', '2014-08-20 00:36:15', 0),
(333, 1, 'Updated record with ID: 3 : 202.79.34.32', 'banner', '2014-08-20 00:37:57', 0),
(334, 1, 'Updated record with ID: 3 : 202.79.34.32', 'banner', '2014-08-20 01:05:43', 0),
(335, 1, 'Updated record with ID: 1 : 202.79.34.32', 'banner', '2014-08-20 01:07:30', 0),
(336, 1, 'modified user: prem', 'users', '2014-08-20 02:18:39', 0),
(337, 2, 'logged in from: 202.79.34.32', 'users', '2014-08-20 02:19:23', 0),
(338, 1, 'logged in from: 202.79.34.32', 'users', '2014-08-20 02:21:00', 0),
(339, 2, 'modified user: admin', 'users', '2014-08-20 02:32:52', 0),
(340, 2, 'modified user: admin', 'users', '2014-08-20 02:39:30', 0),
(341, 2, 'logged in from: 202.79.34.32', 'users', '2014-08-20 03:23:33', 0),
(342, 2, 'Updated record with ID: 13 : 202.79.34.32', 'menu', '2014-08-20 04:02:06', 0),
(343, 2, 'logged in from: 202.166.221.71', 'users', '2014-08-20 21:41:43', 0),
(344, 2, 'Updated record with ID: 1 : 202.166.221.71', 'partner', '2014-08-20 21:44:30', 0),
(345, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-20 21:47:19', 0),
(346, 2, 'Updated record with ID: 1 : 202.166.221.71', 'partner', '2014-08-20 21:50:27', 0),
(347, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-20 21:52:07', 0),
(348, 2, 'Updated record with ID: 2 : 202.166.221.71', 'partner', '2014-08-20 21:52:24', 0),
(349, 2, 'Updated record with ID: 15 : 202.166.221.71', 'menu', '2014-08-20 22:15:30', 0),
(350, 2, 'Updated record with ID: 15 : 202.166.221.71', 'menu', '2014-08-20 23:08:10', 0),
(351, 2, 'Updated record with ID: 15 : 202.166.221.71', 'menu', '2014-08-20 23:09:13', 0),
(352, 2, 'Updated record with ID: 16 : 202.166.221.71', 'menu', '2014-08-21 00:14:34', 0),
(353, 2, 'Updated record with ID: 10 : 202.166.221.71', 'menu', '2014-08-21 00:59:42', 0),
(354, 2, 'Updated record with ID: 14 : 202.166.221.71', 'menu', '2014-08-21 00:59:58', 0),
(355, 2, 'Updated record with ID: 12 : 202.166.221.71', 'menu', '2014-08-21 01:00:13', 0),
(356, 2, 'Updated record with ID: 11 : 202.166.221.71', 'menu', '2014-08-21 01:00:32', 0),
(357, 2, 'Updated record with ID: 8 : 202.166.221.71', 'menu', '2014-08-21 01:01:08', 0),
(358, 2, 'Updated record with ID: 2 : 202.166.221.71', 'partner', '2014-08-21 02:06:34', 0),
(359, 2, 'Updated record with ID: 16 : 202.166.221.71', 'menu', '2014-08-21 02:07:56', 0),
(360, 2, 'logged in from: 202.166.221.71', 'users', '2014-08-21 02:18:02', 0),
(361, 2, 'Updated record with ID: 14 : 202.166.221.71', 'menu', '2014-08-21 02:19:43', 0),
(362, 2, 'Created record with ID: 17 : 202.166.221.71', 'menu', '2014-08-21 02:51:38', 0),
(363, 2, 'Created record with ID: 18 : 202.166.221.71', 'menu', '2014-08-21 02:52:06', 0),
(364, 2, 'logged in from: 202.166.221.71', 'users', '2014-08-24 03:17:17', 0),
(365, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-24 03:17:54', 0),
(366, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-24 03:18:37', 0),
(367, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-24 03:24:51', 0),
(368, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-24 05:29:02', 0),
(369, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-24 05:30:46', 0),
(370, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-24 05:42:58', 0),
(371, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-24 05:47:47', 0),
(372, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-24 06:02:11', 0),
(373, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-24 06:02:27', 0),
(374, 2, 'Updated record with ID: 1 : 202.166.221.71', 'banner', '2014-08-24 06:03:01', 0),
(375, 2, 'Updated record with ID: 12 : 202.166.221.71', 'tab', '2014-08-24 06:03:33', 0),
(376, 2, 'Updated record with ID: 13 : 202.166.221.71', 'tab', '2014-08-24 06:03:35', 0),
(377, 2, 'Updated record with ID: 14 : 202.166.221.71', 'tab', '2014-08-24 06:03:38', 0),
(378, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-24 06:05:42', 0),
(379, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-24 06:06:53', 0),
(380, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-24 06:08:13', 0),
(381, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-24 06:09:35', 0),
(382, 2, 'Updated record with ID: 4 : 202.166.221.71', 'social_link', '2014-08-24 06:10:28', 0),
(383, 2, 'Updated record with ID: 3 : 202.166.221.71', 'social_link', '2014-08-24 06:10:30', 0),
(384, 2, 'Updated record with ID: 2 : 202.166.221.71', 'social_link', '2014-08-24 06:10:33', 0),
(385, 2, 'Updated record with ID: 1 : 202.166.221.71', 'social_link', '2014-08-24 06:10:36', 0),
(386, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-24 06:12:43', 0),
(387, 2, 'Updated record with ID: 1 : 202.166.221.71', 'social_link', '2014-08-24 06:12:48', 0),
(388, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-24 06:14:04', 0),
(389, 2, 'Updated record with ID: 2 : 202.166.221.71', 'social_link', '2014-08-24 06:14:16', 0),
(390, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-24 06:14:57', 0),
(391, 2, 'Updated record with ID: 3 : 202.166.221.71', 'social_link', '2014-08-24 06:15:02', 0),
(392, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-24 06:15:39', 0),
(393, 2, 'Updated record with ID: 4 : 202.166.221.71', 'social_link', '2014-08-24 06:15:44', 0),
(394, 2, 'Updated record with ID: 4 : 202.166.221.71', 'social_link', '2014-08-24 06:17:06', 0),
(395, 2, 'Updated record with ID: 12 : 202.166.221.71', 'tab', '2014-08-24 06:25:07', 0),
(396, 2, 'Updated record with ID: 1 : 202.166.221.71', 'steps', '2014-08-24 06:25:41', 0),
(397, 2, 'logged in from: 202.166.221.71', 'users', '2014-08-24 21:36:36', 0),
(398, 2, 'logged in from: 202.166.221.71', 'users', '2014-08-25 04:01:14', 0),
(399, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-25 04:02:28', 0),
(400, 2, 'Created record with ID: 1 : 202.166.221.71', 'media', '2014-08-25 04:04:07', 0),
(401, 2, 'Updated record with ID:  : 202.166.221.71', 'menu', '2014-08-25 05:11:04', 0),
(402, 2, 'Updated record with ID:  : 202.166.221.71', 'menu', '2014-08-25 05:11:07', 0),
(403, 2, 'Updated record with ID:  : 202.166.221.71', 'menu', '2014-08-25 05:11:11', 0),
(404, 2, 'Updated record with ID:  : 202.166.221.71', 'menu', '2014-08-25 05:11:19', 0),
(405, 2, 'Updated record with ID:  : 202.166.221.71', 'menu', '2014-08-25 05:11:23', 0),
(406, 2, 'Updated record with ID:  : 202.166.221.71', 'menu', '2014-08-25 05:11:27', 0),
(407, 2, 'Updated record with ID:  : 202.166.221.71', 'menu', '2014-08-25 05:11:32', 0),
(408, 2, 'Updated record with ID:  : 202.166.221.71', 'menu', '2014-08-25 05:11:38', 0),
(409, 2, 'logged in from: 202.166.221.71', 'users', '2014-08-29 04:13:33', 0),
(410, 2, 'Updated record with ID: 1 : 202.166.221.71', 'banner', '2014-08-29 04:14:13', 0),
(411, 2, 'logged in from: 27.34.85.199', 'users', '2014-09-03 22:30:40', 0),
(412, 2, 'Updated record with ID:  : 27.34.85.199', 'menu', '2014-09-03 22:34:03', 0),
(413, 1, 'logged in from: 182.93.83.93', 'users', '2014-11-19 21:03:57', 0),
(414, 1, 'Updated record with ID: 2 : 182.93.83.93', 'banner', '2014-11-19 21:04:16', 0),
(415, 1, 'Updated record with ID: 3 : 182.93.83.93', 'banner', '2014-11-19 21:04:19', 0),
(416, 1, 'Updated record with ID: 1 : 182.93.83.93', 'banner', '2014-11-19 21:04:35', 0),
(417, 1, 'logged in from: 182.93.83.93', 'users', '2014-11-19 21:07:51', 0),
(418, 1, 'logged in from: 182.93.83.93', 'users', '2014-11-19 23:52:27', 0),
(419, 1, 'logged in from: 182.93.83.93', 'users', '2014-11-19 23:53:38', 0),
(420, 1, 'Migrate Type: forex_ to Version: 2 from: 182.93.83.93', 'migrations', '2014-11-20 00:00:19', 0),
(421, 1, 'Migrate module: forex Version: 2 from: 182.93.83.93', 'migrations', '2014-11-20 00:00:19', 0),
(422, 1, 'Created record with ID: 1 : 182.93.83.93', 'forex', '2014-11-20 00:01:26', 0),
(423, 1, 'logged in from: 182.93.83.93', 'users', '2014-11-20 02:06:00', 0),
(424, 1, 'Created record with ID: 2 : 182.93.83.93', 'forex', '2014-11-20 02:07:09', 0),
(425, 1, 'Migrate Type: pages_ to Version: 2 from: 182.93.83.93', 'migrations', '2014-11-20 02:28:54', 0),
(426, 1, 'Migrate module: pages Version: 2 from: 182.93.83.93', 'migrations', '2014-11-20 02:28:54', 0),
(427, 1, 'Created record with ID: 1 : 182.93.83.93', 'pages', '2014-11-20 02:30:08', 0),
(428, 1, 'Updated record with ID: 15 : 182.93.83.93', 'menu', '2014-11-20 02:30:35', 0),
(429, 2, 'logged in from: 182.93.83.93', 'users', '2014-11-20 02:53:42', 0),
(430, 2, 'logged in from: 182.93.83.93', 'users', '2014-11-24 01:25:43', 0),
(431, 2, 'logged in from: 182.93.83.93', 'users', '2014-11-24 02:58:58', 0),
(432, 2, 'logged in from: 182.93.83.93', 'users', '2014-11-27 23:32:48', 0),
(433, 2, 'logged in from: 182.93.83.93', 'users', '2014-11-28 03:37:41', 0),
(434, 2, 'logged in from: 182.93.83.93', 'users', '2015-02-18 03:13:51', 0),
(435, 2, 'Updated record with ID: 1 : 182.93.83.93', 'banner', '2015-02-18 03:14:45', 0),
(436, 2, 'Updated record with ID: 1 : 182.93.83.93', 'banner', '2015-02-18 03:15:17', 0),
(437, 2, 'logged in from: 182.93.83.93', 'users', '2015-05-20 05:00:56', 0),
(438, 2, 'Updated record with ID: 1 : 182.93.83.93', 'banner', '2015-05-20 05:17:30', 0),
(439, 2, 'logged in from: 182.93.83.93', 'users', '2015-05-21 22:09:09', 0),
(440, 2, 'logged in from: ::1', 'users', '2015-05-25 05:45:17', 0),
(441, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 05:45:28', 0),
(442, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 07:52:03', 0),
(443, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 07:52:25', 0),
(444, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 07:52:49', 0),
(445, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 07:53:13', 0),
(446, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 07:54:39', 0),
(447, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 08:03:42', 0),
(448, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 08:26:08', 0),
(449, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 08:26:30', 0),
(450, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 08:28:40', 0),
(451, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 08:29:06', 0),
(452, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 08:37:59', 0),
(453, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 08:39:02', 0),
(454, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 08:40:31', 0),
(455, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 08:40:54', 0),
(456, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 08:49:15', 0),
(457, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 10:09:11', 0),
(458, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 10:09:51', 0),
(459, 2, 'logged in from: ::1', 'users', '2015-05-25 12:40:20', 0),
(460, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 12:40:26', 0),
(461, 2, 'Updated record with ID: 1 : ::1', 'banner', '2015-05-25 12:40:46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bf_banner`
--

CREATE TABLE IF NOT EXISTS `bf_banner` (
`ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `button_icon` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `from` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_banner`
--

INSERT INTO `bf_banner` (`ID`, `title`, `subtitle`, `button_text`, `button_icon`, `image`, `url`, `alt`, `position`, `from`, `end_date`, `added`, `updated`, `status`) VALUES
(1, 'Your worldwide remittance partner', 'At your service, always', 'send', 'http://ipay.cntlsolutions.com/public/uploads/send-11.png', 'http://ipay.cntlsolutions.com/public/uploads/banner-21.png', 'http://localhost/ipay/public/index.php/', 'ALT', '0', '2015/05/25', '2017/01/12', '2014-08-06 07:20:23', '2015-05-25 08:49:15', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bf_countries`
--

CREATE TABLE IF NOT EXISTS `bf_countries` (
  `iso` char(2) NOT NULL DEFAULT 'US',
  `name` varchar(80) NOT NULL,
  `printable_name` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_countries`
--

INSERT INTO `bf_countries` (`iso`, `name`, `printable_name`, `iso3`, `numcode`) VALUES
('AD', 'ANDORRA', 'Andorra', 'AND', 20),
('AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784),
('AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4),
('AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28),
('AI', 'ANGUILLA', 'Anguilla', 'AIA', 660),
('AL', 'ALBANIA', 'Albania', 'ALB', 8),
('AM', 'ARMENIA', 'Armenia', 'ARM', 51),
('AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530),
('AO', 'ANGOLA', 'Angola', 'AGO', 24),
('AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL),
('AR', 'ARGENTINA', 'Argentina', 'ARG', 32),
('AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16),
('AT', 'AUSTRIA', 'Austria', 'AUT', 40),
('AU', 'AUSTRALIA', 'Australia', 'AUS', 36),
('AW', 'ARUBA', 'Aruba', 'ABW', 533),
('AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31),
('BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70),
('BB', 'BARBADOS', 'Barbados', 'BRB', 52),
('BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50),
('BE', 'BELGIUM', 'Belgium', 'BEL', 56),
('BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854),
('BG', 'BULGARIA', 'Bulgaria', 'BGR', 100),
('BH', 'BAHRAIN', 'Bahrain', 'BHR', 48),
('BI', 'BURUNDI', 'Burundi', 'BDI', 108),
('BJ', 'BENIN', 'Benin', 'BEN', 204),
('BM', 'BERMUDA', 'Bermuda', 'BMU', 60),
('BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96),
('BO', 'BOLIVIA', 'Bolivia', 'BOL', 68),
('BR', 'BRAZIL', 'Brazil', 'BRA', 76),
('BS', 'BAHAMAS', 'Bahamas', 'BHS', 44),
('BT', 'BHUTAN', 'Bhutan', 'BTN', 64),
('BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL),
('BW', 'BOTSWANA', 'Botswana', 'BWA', 72),
('BY', 'BELARUS', 'Belarus', 'BLR', 112),
('BZ', 'BELIZE', 'Belize', 'BLZ', 84),
('CA', 'CANADA', 'Canada', 'CAN', 124),
('CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL),
('CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180),
('CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140),
('CG', 'CONGO', 'Congo', 'COG', 178),
('CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756),
('CI', 'COTE D''IVOIRE', 'Cote D''Ivoire', 'CIV', 384),
('CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184),
('CL', 'CHILE', 'Chile', 'CHL', 152),
('CM', 'CAMEROON', 'Cameroon', 'CMR', 120),
('CN', 'CHINA', 'China', 'CHN', 156),
('CO', 'COLOMBIA', 'Colombia', 'COL', 170),
('CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188),
('CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL),
('CU', 'CUBA', 'Cuba', 'CUB', 192),
('CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132),
('CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL),
('CY', 'CYPRUS', 'Cyprus', 'CYP', 196),
('CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203),
('DE', 'GERMANY', 'Germany', 'DEU', 276),
('DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262),
('DK', 'DENMARK', 'Denmark', 'DNK', 208),
('DM', 'DOMINICA', 'Dominica', 'DMA', 212),
('DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214),
('DZ', 'ALGERIA', 'Algeria', 'DZA', 12),
('EC', 'ECUADOR', 'Ecuador', 'ECU', 218),
('EE', 'ESTONIA', 'Estonia', 'EST', 233),
('EG', 'EGYPT', 'Egypt', 'EGY', 818),
('EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732),
('ER', 'ERITREA', 'Eritrea', 'ERI', 232),
('ES', 'SPAIN', 'Spain', 'ESP', 724),
('ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231),
('FI', 'FINLAND', 'Finland', 'FIN', 246),
('FJ', 'FIJI', 'Fiji', 'FJI', 242),
('FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238),
('FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583),
('FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234),
('FR', 'FRANCE', 'France', 'FRA', 250),
('GA', 'GABON', 'Gabon', 'GAB', 266),
('GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826),
('GD', 'GRENADA', 'Grenada', 'GRD', 308),
('GE', 'GEORGIA', 'Georgia', 'GEO', 268),
('GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254),
('GH', 'GHANA', 'Ghana', 'GHA', 288),
('GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292),
('GL', 'GREENLAND', 'Greenland', 'GRL', 304),
('GM', 'GAMBIA', 'Gambia', 'GMB', 270),
('GN', 'GUINEA', 'Guinea', 'GIN', 324),
('GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312),
('GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226),
('GR', 'GREECE', 'Greece', 'GRC', 300),
('GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL),
('GT', 'GUATEMALA', 'Guatemala', 'GTM', 320),
('GU', 'GUAM', 'Guam', 'GUM', 316),
('GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624),
('GY', 'GUYANA', 'Guyana', 'GUY', 328),
('HK', 'HONG KONG', 'Hong Kong', 'HKG', 344),
('HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL),
('HN', 'HONDURAS', 'Honduras', 'HND', 340),
('HR', 'CROATIA', 'Croatia', 'HRV', 191),
('HT', 'HAITI', 'Haiti', 'HTI', 332),
('HU', 'HUNGARY', 'Hungary', 'HUN', 348),
('ID', 'INDONESIA', 'Indonesia', 'IDN', 360),
('IE', 'IRELAND', 'Ireland', 'IRL', 372),
('IL', 'ISRAEL', 'Israel', 'ISR', 376),
('IN', 'INDIA', 'India', 'IND', 356),
('IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL),
('IQ', 'IRAQ', 'Iraq', 'IRQ', 368),
('IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364),
('IS', 'ICELAND', 'Iceland', 'ISL', 352),
('IT', 'ITALY', 'Italy', 'ITA', 380),
('JM', 'JAMAICA', 'Jamaica', 'JAM', 388),
('JO', 'JORDAN', 'Jordan', 'JOR', 400),
('JP', 'JAPAN', 'Japan', 'JPN', 392),
('KE', 'KENYA', 'Kenya', 'KEN', 404),
('KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417),
('KH', 'CAMBODIA', 'Cambodia', 'KHM', 116),
('KI', 'KIRIBATI', 'Kiribati', 'KIR', 296),
('KM', 'COMOROS', 'Comoros', 'COM', 174),
('KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659),
('KP', 'KOREA, DEMOCRATIC PEOPLE''S REPUBLIC OF', 'Korea, Democratic People''s Republic of', 'PRK', 408),
('KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410),
('KW', 'KUWAIT', 'Kuwait', 'KWT', 414),
('KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136),
('KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398),
('LA', 'LAO PEOPLE''S DEMOCRATIC REPUBLIC', 'Lao People''s Democratic Republic', 'LAO', 418),
('LB', 'LEBANON', 'Lebanon', 'LBN', 422),
('LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662),
('LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438),
('LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144),
('LR', 'LIBERIA', 'Liberia', 'LBR', 430),
('LS', 'LESOTHO', 'Lesotho', 'LSO', 426),
('LT', 'LITHUANIA', 'Lithuania', 'LTU', 440),
('LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442),
('LV', 'LATVIA', 'Latvia', 'LVA', 428),
('LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434),
('MA', 'MOROCCO', 'Morocco', 'MAR', 504),
('MC', 'MONACO', 'Monaco', 'MCO', 492),
('MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498),
('MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450),
('MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584),
('MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807),
('ML', 'MALI', 'Mali', 'MLI', 466),
('MM', 'MYANMAR', 'Myanmar', 'MMR', 104),
('MN', 'MONGOLIA', 'Mongolia', 'MNG', 496),
('MO', 'MACAO', 'Macao', 'MAC', 446),
('MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580),
('MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474),
('MR', 'MAURITANIA', 'Mauritania', 'MRT', 478),
('MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500),
('MT', 'MALTA', 'Malta', 'MLT', 470),
('MU', 'MAURITIUS', 'Mauritius', 'MUS', 480),
('MV', 'MALDIVES', 'Maldives', 'MDV', 462),
('MW', 'MALAWI', 'Malawi', 'MWI', 454),
('MX', 'MEXICO', 'Mexico', 'MEX', 484),
('MY', 'MALAYSIA', 'Malaysia', 'MYS', 458),
('MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508),
('NA', 'NAMIBIA', 'Namibia', 'NAM', 516),
('NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540),
('NE', 'NIGER', 'Niger', 'NER', 562),
('NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574),
('NG', 'NIGERIA', 'Nigeria', 'NGA', 566),
('NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558),
('NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528),
('NO', 'NORWAY', 'Norway', 'NOR', 578),
('NP', 'NEPAL', 'Nepal', 'NPL', 524),
('NR', 'NAURU', 'Nauru', 'NRU', 520),
('NU', 'NIUE', 'Niue', 'NIU', 570),
('NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554),
('OM', 'OMAN', 'Oman', 'OMN', 512),
('PA', 'PANAMA', 'Panama', 'PAN', 591),
('PE', 'PERU', 'Peru', 'PER', 604),
('PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258),
('PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598),
('PH', 'PHILIPPINES', 'Philippines', 'PHL', 608),
('PK', 'PAKISTAN', 'Pakistan', 'PAK', 586),
('PL', 'POLAND', 'Poland', 'POL', 616),
('PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666),
('PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612),
('PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630),
('PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL),
('PT', 'PORTUGAL', 'Portugal', 'PRT', 620),
('PW', 'PALAU', 'Palau', 'PLW', 585),
('PY', 'PARAGUAY', 'Paraguay', 'PRY', 600),
('QA', 'QATAR', 'Qatar', 'QAT', 634),
('RE', 'REUNION', 'Reunion', 'REU', 638),
('RO', 'ROMANIA', 'Romania', 'ROM', 642),
('RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643),
('RW', 'RWANDA', 'Rwanda', 'RWA', 646),
('SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682),
('SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90),
('SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690),
('SD', 'SUDAN', 'Sudan', 'SDN', 736),
('SE', 'SWEDEN', 'Sweden', 'SWE', 752),
('SG', 'SINGAPORE', 'Singapore', 'SGP', 702),
('SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654),
('SI', 'SLOVENIA', 'Slovenia', 'SVN', 705),
('SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744),
('SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703),
('SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694),
('SM', 'SAN MARINO', 'San Marino', 'SMR', 674),
('SN', 'SENEGAL', 'Senegal', 'SEN', 686),
('SO', 'SOMALIA', 'Somalia', 'SOM', 706),
('SR', 'SURINAME', 'Suriname', 'SUR', 740),
('ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678),
('SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222),
('SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760),
('SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748),
('TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796),
('TD', 'CHAD', 'Chad', 'TCD', 148),
('TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL),
('TG', 'TOGO', 'Togo', 'TGO', 768),
('TH', 'THAILAND', 'Thailand', 'THA', 764),
('TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762),
('TK', 'TOKELAU', 'Tokelau', 'TKL', 772),
('TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL),
('TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795),
('TN', 'TUNISIA', 'Tunisia', 'TUN', 788),
('TO', 'TONGA', 'Tonga', 'TON', 776),
('TR', 'TURKEY', 'Turkey', 'TUR', 792),
('TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780),
('TV', 'TUVALU', 'Tuvalu', 'TUV', 798),
('TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158),
('TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834),
('UA', 'UKRAINE', 'Ukraine', 'UKR', 804),
('UG', 'UGANDA', 'Uganda', 'UGA', 800),
('UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL),
('US', 'UNITED STATES', 'United States', 'USA', 840),
('UY', 'URUGUAY', 'Uruguay', 'URY', 858),
('UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860),
('VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336),
('VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670),
('VE', 'VENEZUELA', 'Venezuela', 'VEN', 862),
('VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92),
('VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850),
('VN', 'VIET NAM', 'Viet Nam', 'VNM', 704),
('VU', 'VANUATU', 'Vanuatu', 'VUT', 548),
('WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876),
('WS', 'SAMOA', 'Samoa', 'WSM', 882),
('YE', 'YEMEN', 'Yemen', 'YEM', 887),
('YT', 'MAYOTTE', 'Mayotte', NULL, NULL),
('ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710),
('ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894),
('ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716);

-- --------------------------------------------------------

--
-- Table structure for table `bf_department`
--

CREATE TABLE IF NOT EXISTS `bf_department` (
`ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_department`
--

INSERT INTO `bf_department` (`ID`, `name`, `image`, `slug`, `status`, `added`, `updated`, `logo`) VALUES
(1, 'REMITTANCE', 'http://ipay.cntlsolutions.com/public/uploads/banner-2.png', 'remittance', '1', '2014-08-06 13:41:22', '2014-08-15 06:03:30', 'http://ipay.cntlsolutions.com/public/uploads/icon-remittance.png'),
(2, 'CORPORATE PAYMENTS', 'http://ipay.cntlsolutions.com/public/uploads/banner-2.png', 'corporate-payments', '1', '2014-08-07 05:22:27', '2014-08-15 06:03:56', 'http://ipay.cntlsolutions.com/public/uploads/icon-corporate-payment.png'),
(3, 'Travel Card', 'http://ipay.cntlsolutions.com/public/uploads/banner-2.png', 'travel-card', '1', '2014-08-07 05:50:24', '2014-08-15 06:04:18', 'http://ipay.cntlsolutions.com/public/uploads/icon-travel-cards.png'),
(4, 'Banknotes', 'http://ipay.cntlsolutions.com/public/uploads/banner-2.png', 'banknotes', '1', '2014-08-08 06:21:32', '2014-08-15 06:04:37', 'http://ipay.cntlsolutions.com/public/uploads/icon-banknotes.png'),
(11, 'Banknotes2', 'http://localhost/ipay/public/uploads/banner-2.png', 'banknotes2', '0', '2014-08-11 12:35:02', '0000-00-00 00:00:00', 'http://localhost/ipay/public/uploads/team-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bf_email_queue`
--

CREATE TABLE IF NOT EXISTS `bf_email_queue` (
`id` int(11) NOT NULL,
  `to_email` varchar(128) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `alt_message` text,
  `max_attempts` int(11) NOT NULL DEFAULT '3',
  `attempts` int(11) NOT NULL DEFAULT '0',
  `success` tinyint(1) NOT NULL DEFAULT '0',
  `date_published` datetime DEFAULT NULL,
  `last_attempt` datetime DEFAULT NULL,
  `date_sent` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bf_forex`
--

CREATE TABLE IF NOT EXISTS `bf_forex` (
`id` int(11) NOT NULL,
  `from_country` varchar(255) NOT NULL,
  `from_currency` varchar(255) NOT NULL,
  `to_country` varchar(255) NOT NULL,
  `to_currency` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_forex`
--

INSERT INTO `bf_forex` (`id`, `from_country`, `from_currency`, `to_country`, `to_currency`, `status`, `added`, `updated`) VALUES
(1, 'Nepal', 'NPR', 'Malaysia', 'MYR', '1', '2014-11-20 00:01:26', '0000-00-00 00:00:00'),
(2, 'Nepal', 'NPR', 'United States', 'USD', '1', '2014-11-20 02:07:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bf_info`
--

CREATE TABLE IF NOT EXISTS `bf_info` (
`id` int(11) NOT NULL,
  `info_key` varchar(255) NOT NULL,
  `info_value` mediumblob,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bf_info`
--

INSERT INTO `bf_info` (`id`, `info_key`, `info_value`, `status`) VALUES
(1, 'status', 0x30, '1'),
(2, 'offline_mssage', 0x436f6d6d696e6720536f6f6e202e2e2e2e2e, '1'),
(3, 'admin_email', 0x61646d696e40697061792e636f6d202020202020202020, '1'),
(4, 'admin_number', 0x202b322d3233342d3536372d393837362020202020202020, '1'),
(5, 'address', 0x20616464726573732020, '1'),
(6, 'postal', 0x20436974792c2053746174652c20506f7374616c20436f6465202020202020, '1');

-- --------------------------------------------------------

--
-- Table structure for table `bf_login_attempts`
--

CREATE TABLE IF NOT EXISTS `bf_login_attempts` (
`id` bigint(20) NOT NULL,
  `ip_address` varchar(40) NOT NULL,
  `login` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bf_media`
--

CREATE TABLE IF NOT EXISTS `bf_media` (
`ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_media`
--

INSERT INTO `bf_media` (`ID`, `title`, `file`, `added`, `user_ID`) VALUES
(2, 'logo', 'images1.jpg', '2014-08-05 13:00:31', 1),
(3, 'banner icon', 'send-1.png', '2014-08-06 06:49:13', 1),
(4, 'banner1', 'banner-1.png', '2014-08-06 06:50:01', 1),
(5, 'bank note', 'icon-banknotes.png', '2014-08-07 05:45:53', 1),
(6, 'Travel Card', 'icon-travel-cards.png', '2014-08-07 05:46:57', 1),
(7, 'Corporate payment', 'icon-corporate-payment.png', '2014-08-07 05:47:36', 1),
(8, 'Remittance', 'icon-remittance.png', '2014-08-07 05:48:27', 1),
(9, 'Team', 'team-1.jpg', '2014-08-08 06:13:38', 1),
(10, 'ajaxloader', 'ajax-loader.gif', '2014-08-08 13:28:23', 1),
(11, 'banner2', 'banner-2.png', '2014-08-11 08:58:47', 1),
(12, 'icon-fb', 'icon-facebook-37.png', '2014-08-17 23:09:27', 1),
(13, 'icon-google+', 'icon-googleplus-37.png', '2014-08-17 23:10:16', 1),
(14, 'icon-linkedin', 'icon-linkedin-37.png', '2014-08-17 23:11:21', 1),
(15, 'icon-twitter', 'icon-twitter-37.png', '2014-08-17 23:12:03', 1),
(16, 'video-demo', 'video-demo.mp4', '2014-08-18 00:07:51', 1),
(17, 'laravel', 'l4.pdf', '2014-08-18 05:10:53', 1),
(19, 'test image', 'information1.jpg', '2014-08-18 22:17:52', 1),
(20, 'continental logo', 'logo.jpg', '2014-08-20 21:47:19', 2),
(21, 'pramac', 'pramac.jpg', '2014-08-20 21:52:07', 2),
(22, 'video2', 'Dummy+Video-HD.mp4', '2014-08-24 03:17:54', 2),
(23, 'video3', 'Dummy+Video-HD1.mp4', '2014-08-24 03:18:37', 2),
(24, 'pdffile', 'l41.pdf', '2014-08-24 03:24:51', 2),
(29, 'SEND', 'send-11.png', '2014-08-24 06:02:11', 2),
(30, 'BANNER', 'banner-21.png', '2014-08-24 06:02:27', 2),
(31, 'REMITTANCE_ICAN', 'icon-remittance.png', '2014-08-24 06:05:42', 2),
(32, 'corporate icon', 'icon-corporate-payment.png', '2014-08-24 06:06:53', 2),
(33, 'travel-icon', 'icon-travel-cards.png', '2014-08-24 06:08:13', 2),
(34, 'bank-note', 'icon-banknotes.png', '2014-08-24 06:09:35', 2),
(35, 'fb', 'icon-facebook-37.png', '2014-08-24 06:12:43', 2),
(36, 'twitter', 'icon-twitter-37.png', '2014-08-24 06:14:04', 2),
(37, 'linkedin', 'icon-linkedin-37.png', '2014-08-24 06:14:57', 2),
(38, 'google+', 'icon-googleplus-37.png', '2014-08-24 06:15:39', 2),
(39, 'paramic', 'pramac.jpg', '2014-08-25 04:02:28', 2),
(40, 'logo', 'logo.jpg', '2014-08-25 04:04:07', 2);

-- --------------------------------------------------------

--
-- Table structure for table `bf_menu`
--

CREATE TABLE IF NOT EXISTS `bf_menu` (
`id` int(11) NOT NULL,
  `parent_ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `department_ID` int(11) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_menu`
--

INSERT INTO `bf_menu` (`id`, `parent_ID`, `name`, `url`, `status`, `added`, `updated`, `department_ID`, `position`) VALUES
(5, 8, 'corporate_menu1', 'index.php', '1', '2014-08-13 10:57:18', '2014-08-13 13:04:26', 2, 0),
(6, 5, 'corporate_menu1_1', 'index.php', '1', '2014-08-13 10:57:37', '0000-00-00 00:00:00', 2, 0),
(7, 5, 'corporate_menu1_2', 'index.php', '0', '2014-08-13 10:58:14', '0000-00-00 00:00:00', 2, 0),
(8, 0, 'travel_menu1', 'ttp://ipay.cntlsolutions.com/public/index.php/department/index/remittance', '0', '2014-08-13 11:26:30', '2014-08-21 01:01:08', 3, 0),
(10, 0, 'Send Money', 'ttp://ipay.cntlsolutions.com/public/index.php/department/index/remittance', '0', '2014-08-13 13:58:49', '2014-08-21 00:59:42', 1, 0),
(11, 0, 'Tracking', 'ttp://ipay.cntlsolutions.com/public/index.php/department/index/remittance', '0', '2014-08-13 14:02:21', '2014-08-21 01:00:32', 1, 0),
(12, 0, 'Calculator', 'ttp://ipay.cntlsolutions.com/public/index.php/department/index/remittance', '0', '2014-08-13 14:03:09', '2014-08-21 01:00:13', 1, 0),
(13, 0, 'Our Partner', 'http://ipay.cntlsolutions.com/public/index.php/department/partner/remittance', '1', '2014-08-13 14:08:27', '2014-08-20 04:02:06', 1, 0),
(14, 0, 'Download', 'ttp://ipay.cntlsolutions.com/public/index.php/department', '0', '2014-08-13 14:09:14', '2014-08-21 02:19:43', 1, 0),
(15, 0, 'Contact Us', '1', '1', '2014-08-13 14:09:44', '2014-11-20 02:30:35', 1, 3),
(16, 0, 'Recieve money', '#', '0', '2014-08-14 05:45:26', '2014-08-21 02:07:56', 1, 0),
(17, 10, 'menu_test', '#', '0', '2014-08-21 02:51:38', '0000-00-00 00:00:00', 1, 0),
(18, 17, 'edd', '#', '0', '2014-08-21 02:52:06', '0000-00-00 00:00:00', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `bf_pages`
--

CREATE TABLE IF NOT EXISTS `bf_pages` (
`ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `body` mediumblob NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_pages`
--

INSERT INTO `bf_pages` (`ID`, `name`, `description`, `body`, `slug`, `status`, `updated`) VALUES
(1, 'contact us', '', '', 'contact-us', 'active', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bf_partner`
--

CREATE TABLE IF NOT EXISTS `bf_partner` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_partner`
--

INSERT INTO `bf_partner` (`id`, `name`, `logo`, `alt`, `url`, `status`, `added`, `updated`) VALUES
(1, 'continental', 'http://ipay.cntlsolutions.com/public/uploads/logo.jpg', 'Alt', 'http://www.continental.com.np/pages/index.html', '1', '2014-08-15 05:50:18', '2014-08-20 21:50:27'),
(2, 'KIA', 'http://ipay.cntlsolutions.com/public/uploads/pramac.jpg', 'Alt', 'http://www.continental.com.np/pages/index.html', '1', '2014-08-15 07:34:26', '2014-08-21 02:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `bf_permissions`
--

CREATE TABLE IF NOT EXISTS `bf_permissions` (
`permission_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` enum('active','inactive','deleted') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_permissions`
--

INSERT INTO `bf_permissions` (`permission_id`, `name`, `description`, `status`) VALUES
(2, 'Site.Content.View', 'Allow users to view the Content Context', 'active'),
(3, 'Site.Reports.View', 'Allow users to view the Reports Context', 'active'),
(4, 'Site.Settings.View', 'Allow users to view the Settings Context', 'active'),
(5, 'Site.Developer.View', 'Allow users to view the Developer Context', 'active'),
(6, 'Bonfire.Roles.Manage', 'Allow users to manage the user Roles', 'active'),
(7, 'Bonfire.Users.Manage', 'Allow users to manage the site Users', 'active'),
(8, 'Bonfire.Users.View', 'Allow users access to the User Settings', 'active'),
(9, 'Bonfire.Users.Add', 'Allow users to add new Users', 'active'),
(10, 'Bonfire.Database.Manage', 'Allow users to manage the Database settings', 'active'),
(11, 'Bonfire.Emailer.Manage', 'Allow users to manage the Emailer settings', 'active'),
(12, 'Bonfire.Logs.View', 'Allow users access to the Log details', 'active'),
(13, 'Bonfire.Logs.Manage', 'Allow users to manage the Log files', 'active'),
(14, 'Bonfire.Emailer.View', 'Allow users access to the Emailer settings', 'active'),
(15, 'Site.Signin.Offline', 'Allow users to login to the site when the site is offline', 'active'),
(16, 'Bonfire.Permissions.View', 'Allow access to view the Permissions menu unders Settings Context', 'active'),
(17, 'Bonfire.Permissions.Manage', 'Allow access to manage the Permissions in the system', 'active'),
(18, 'Bonfire.Roles.Delete', 'Allow users to delete user Roles', 'active'),
(19, 'Bonfire.Modules.Add', 'Allow creation of modules with the builder.', 'active'),
(20, 'Bonfire.Modules.Delete', 'Allow deletion of modules.', 'active'),
(21, 'Permissions.Administrator.Manage', 'To manage the access control permissions for the Administrator role.', 'active'),
(22, 'Permissions.Editor.Manage', 'To manage the access control permissions for the Editor role.', 'active'),
(24, 'Permissions.User.Manage', 'To manage the access control permissions for the User role.', 'active'),
(25, 'Permissions.Developer.Manage', 'To manage the access control permissions for the Developer role.', 'active'),
(27, 'Activities.Own.View', 'To view the users own activity logs', 'active'),
(28, 'Activities.Own.Delete', 'To delete the users own activity logs', 'active'),
(29, 'Activities.User.View', 'To view the user activity logs', 'active'),
(30, 'Activities.User.Delete', 'To delete the user activity logs, except own', 'active'),
(31, 'Activities.Module.View', 'To view the module activity logs', 'active'),
(32, 'Activities.Module.Delete', 'To delete the module activity logs', 'active'),
(33, 'Activities.Date.View', 'To view the users own activity logs', 'active'),
(34, 'Activities.Date.Delete', 'To delete the dated activity logs', 'active'),
(35, 'Bonfire.UI.Manage', 'Manage the Bonfire UI settings', 'active'),
(36, 'Bonfire.Settings.View', 'To view the site settings page.', 'active'),
(37, 'Bonfire.Settings.Manage', 'To manage the site settings.', 'active'),
(38, 'Bonfire.Activities.View', 'To view the Activities menu.', 'active'),
(39, 'Bonfire.Database.View', 'To view the Database menu.', 'active'),
(40, 'Bonfire.Migrations.View', 'To view the Migrations menu.', 'active'),
(41, 'Bonfire.Builder.View', 'To view the Modulebuilder menu.', 'active'),
(42, 'Bonfire.Roles.View', 'To view the Roles menu.', 'active'),
(43, 'Bonfire.Sysinfo.View', 'To view the System Information page.', 'active'),
(44, 'Bonfire.Translate.Manage', 'To manage the Language Translation.', 'active'),
(45, 'Bonfire.Translate.View', 'To view the Language Translate menu.', 'active'),
(46, 'Bonfire.UI.View', 'To view the UI/Keyboard Shortcut menu.', 'active'),
(49, 'Bonfire.Profiler.View', 'To view the Console Profiler Bar.', 'active'),
(50, 'Bonfire.Roles.Add', 'To add New Roles', 'active'),
(51, 'Media.Content.View', '', 'active'),
(52, 'Media.Content.Create', '', 'active'),
(53, 'Media.Content.Edit', '', 'active'),
(54, 'Media.Content.Delete', '', 'active'),
(63, 'Banner.Content.View', '', 'active'),
(64, 'Banner.Content.Create', '', 'active'),
(65, 'Banner.Content.Edit', '', 'active'),
(66, 'Banner.Content.Delete', '', 'active'),
(95, 'Department.Content.View', '', 'active'),
(96, 'Department.Content.Create', '', 'active'),
(97, 'Department.Content.Edit', '', 'active'),
(98, 'Department.Content.Delete', '', 'active'),
(107, 'STEPS.Content.View', '', 'active'),
(108, 'STEPS.Content.Create', '', 'active'),
(109, 'STEPS.Content.Edit', '', 'active'),
(110, 'STEPS.Content.Delete', '', 'active'),
(111, 'TAB.Content.View', '', 'active'),
(112, 'TAB.Content.Create', '', 'active'),
(113, 'TAB.Content.Edit', '', 'active'),
(114, 'TAB.Content.Delete', '', 'active'),
(131, 'Menu.Content.View', '', 'active'),
(132, 'Menu.Content.Create', '', 'active'),
(133, 'Menu.Content.Edit', '', 'active'),
(134, 'Menu.Content.Delete', '', 'active'),
(135, 'Permissions.CMS.Manage', 'To manage the access control permissions for the CMS role.', 'active'),
(136, 'Partner.Content.View', '', 'active'),
(137, 'Partner.Content.Create', '', 'active'),
(138, 'Partner.Content.Edit', '', 'active'),
(139, 'Partner.Content.Delete', '', 'active'),
(144, 'Social_Link.Content.View', '', 'active'),
(145, 'Social_Link.Content.Create', '', 'active'),
(146, 'Social_Link.Content.Edit', '', 'active'),
(147, 'Social_Link.Content.Delete', '', 'active'),
(148, 'Forex.Content.View', '', 'active'),
(149, 'Forex.Content.Create', '', 'active'),
(150, 'Forex.Content.Edit', '', 'active'),
(151, 'Forex.Content.Delete', '', 'active'),
(152, 'Pages.Content.View', '', 'active'),
(153, 'Pages.Content.Create', '', 'active'),
(154, 'Pages.Content.Edit', '', 'active'),
(155, 'Pages.Content.Delete', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `bf_roles`
--

CREATE TABLE IF NOT EXISTS `bf_roles` (
`role_id` int(11) NOT NULL,
  `role_name` varchar(60) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `can_delete` tinyint(1) NOT NULL DEFAULT '1',
  `login_destination` varchar(255) NOT NULL DEFAULT '/',
  `deleted` int(1) NOT NULL DEFAULT '0',
  `default_context` varchar(255) NOT NULL DEFAULT 'content'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_roles`
--

INSERT INTO `bf_roles` (`role_id`, `role_name`, `description`, `default`, `can_delete`, `login_destination`, `deleted`, `default_context`) VALUES
(1, 'Administrator', 'Has full control over every aspect of the site.', 0, 0, '', 0, 'content'),
(2, 'Editor', 'Can handle day-to-day management, but does not have full power.', 0, 1, '', 0, 'content'),
(4, 'User', 'This is the default user with access to login.', 0, 0, '', 0, 'content'),
(6, 'Developer', 'Developers typically are the only ones that can access the developer tools. Otherwise identical to Administrators, at least until the site is handed off.', 0, 1, '', 0, 'content'),
(7, 'CMS', 'To manage conten', 1, 1, 'admin/content', 0, 'content');

-- --------------------------------------------------------

--
-- Table structure for table `bf_role_permissions`
--

CREATE TABLE IF NOT EXISTS `bf_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_role_permissions`
--

INSERT INTO `bf_role_permissions` (`role_id`, `permission_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 24),
(1, 25),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 63),
(1, 64),
(1, 65),
(1, 66),
(1, 95),
(1, 96),
(1, 97),
(1, 98),
(1, 107),
(1, 108),
(1, 109),
(1, 110),
(1, 111),
(1, 112),
(1, 113),
(1, 114),
(1, 131),
(1, 132),
(1, 133),
(1, 134),
(1, 135),
(1, 136),
(1, 137),
(1, 138),
(1, 139),
(1, 144),
(1, 145),
(1, 146),
(1, 147),
(1, 148),
(1, 149),
(1, 150),
(1, 151),
(1, 152),
(1, 153),
(1, 154),
(1, 155),
(2, 2),
(2, 8),
(2, 9),
(2, 15),
(2, 21),
(2, 22),
(2, 24),
(2, 25),
(2, 27),
(2, 39),
(2, 49),
(2, 51),
(2, 52),
(2, 53),
(2, 54),
(2, 63),
(2, 64),
(2, 65),
(2, 66),
(2, 95),
(2, 96),
(2, 97),
(2, 98),
(2, 107),
(2, 108),
(2, 109),
(2, 110),
(2, 111),
(2, 112),
(2, 113),
(2, 114),
(2, 131),
(2, 132),
(2, 133),
(2, 134),
(2, 135),
(2, 136),
(2, 137),
(2, 138),
(2, 139),
(2, 144),
(2, 145),
(2, 146),
(2, 147),
(2, 148),
(2, 149),
(2, 150),
(2, 151),
(2, 152),
(2, 153),
(2, 154),
(2, 155),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(6, 8),
(6, 9),
(6, 10),
(6, 11),
(6, 12),
(6, 13),
(6, 49),
(7, 2),
(7, 4),
(7, 15),
(7, 27),
(7, 28),
(7, 49),
(7, 51),
(7, 52),
(7, 53),
(7, 54),
(7, 135);

-- --------------------------------------------------------

--
-- Table structure for table `bf_schema_version`
--

CREATE TABLE IF NOT EXISTS `bf_schema_version` (
  `type` varchar(40) NOT NULL,
  `version` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_schema_version`
--

INSERT INTO `bf_schema_version` (`type`, `version`) VALUES
('banner_', 2),
('core', 37),
('department_', 2),
('forex_', 2),
('media_', 2),
('menu_', 2),
('pages_', 2),
('partner_', 2),
('social_link_', 2),
('steps_', 2),
('tab_', 2);

-- --------------------------------------------------------

--
-- Table structure for table `bf_sessions`
--

CREATE TABLE IF NOT EXISTS `bf_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bf_settings`
--

CREATE TABLE IF NOT EXISTS `bf_settings` (
  `name` varchar(30) NOT NULL,
  `module` varchar(50) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_settings`
--

INSERT INTO `bf_settings` (`name`, `module`, `value`) VALUES
('auth.allow_name_change', 'core', '1'),
('auth.allow_register', 'core', '1'),
('auth.allow_remember', 'core', '1'),
('auth.do_login_redirect', 'core', '1'),
('auth.login_type', 'core', 'email'),
('auth.name_change_frequency', 'core', '1'),
('auth.name_change_limit', 'core', '1'),
('auth.password_force_mixed_case', 'core', '0'),
('auth.password_force_numbers', 'core', '0'),
('auth.password_force_symbols', 'core', '0'),
('auth.password_min_length', 'core', '8'),
('auth.password_show_labels', 'core', '0'),
('auth.remember_length', 'core', '1209600'),
('auth.user_activation_method', 'core', '0'),
('auth.use_extended_profile', 'core', '0'),
('auth.use_usernames', 'core', '1'),
('ext.country', 'core', 'US'),
('ext.state', 'core', 'CA'),
('ext.street_name', 'core', ''),
('ext.type', 'core', 'small'),
('form_save', 'core.ui', 'ctrl+s/⌘+s'),
('goto_content', 'core.ui', 'alt+c'),
('mailpath', 'email', '/usr/sbin/sendmail'),
('mailtype', 'email', 'text'),
('password_iterations', 'users', '8'),
('protocol', 'email', 'mail'),
('sender_email', 'email', ''),
('site.languages', 'core', 'a:3:{i:0;s:7:"english";i:1;s:7:"persian";i:2;s:10:"portuguese";}'),
('site.list_limit', 'core', '25'),
('site.show_front_profiler', 'core', '0'),
('site.show_profiler', 'core', '0'),
('site.status', 'core', '1'),
('site.system_email', 'core', 'admin@mybonfire.com'),
('site.title', 'core', 'IPAY ADMIN'),
('smtp_host', 'email', ''),
('smtp_pass', 'email', ''),
('smtp_port', 'email', ''),
('smtp_timeout', 'email', ''),
('smtp_user', 'email', ''),
('updates.bleeding_edge', 'core', '0'),
('updates.do_check', 'core', '0');

-- --------------------------------------------------------

--
-- Table structure for table `bf_social_link`
--

CREATE TABLE IF NOT EXISTS `bf_social_link` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_social_link`
--

INSERT INTO `bf_social_link` (`id`, `name`, `icon`, `url`, `alt`, `status`, `added`, `updated`) VALUES
(1, 'facebook', 'http://ipay.cntlsolutions.com/public/uploads/icon-facebook-37.png', 'http://fb.com', 'facebook', '1', '2014-08-17 23:28:14', '0000-00-00 00:00:00'),
(2, 'twitter', 'http://ipay.cntlsolutions.com/public/uploads/icon-twitter-37.png', 'http://twitter.com', 'twitter', '1', '2014-08-17 23:29:14', '0000-00-00 00:00:00'),
(3, 'linkedin', 'http://ipay.cntlsolutions.com/public/uploads/icon-linkedin-37.png', 'http://linkedin.com', 'linkedin', '1', '2014-08-17 23:31:06', '0000-00-00 00:00:00'),
(4, 'Google+', 'http://ipay.cntlsolutions.com/public/uploads/icon-googleplus-37.png', 'http://google.com', 'Google', '1', '2014-08-17 23:32:42', '2014-08-24 06:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `bf_states`
--

CREATE TABLE IF NOT EXISTS `bf_states` (
`id` int(11) NOT NULL,
  `name` char(40) NOT NULL,
  `abbrev` char(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_states`
--

INSERT INTO `bf_states` (`id`, `name`, `abbrev`) VALUES
(1, 'Alaska', 'AK'),
(2, 'Alabama', 'AL'),
(3, 'American Samoa', 'AS'),
(4, 'Arizona', 'AZ'),
(5, 'Arkansas', 'AR'),
(6, 'California', 'CA'),
(7, 'Colorado', 'CO'),
(8, 'Connecticut', 'CT'),
(9, 'Delaware', 'DE'),
(10, 'District of Columbia', 'DC'),
(11, 'Florida', 'FL'),
(12, 'Georgia', 'GA'),
(13, 'Guam', 'GU'),
(14, 'Hawaii', 'HI'),
(15, 'Idaho', 'ID'),
(16, 'Illinois', 'IL'),
(17, 'Indiana', 'IN'),
(18, 'Iowa', 'IA'),
(19, 'Kansas', 'KS'),
(20, 'Kentucky', 'KY'),
(21, 'Louisiana', 'LA'),
(22, 'Maine', 'ME'),
(23, 'Marshall Islands', 'MH'),
(24, 'Maryland', 'MD'),
(25, 'Massachusetts', 'MA'),
(26, 'Michigan', 'MI'),
(27, 'Minnesota', 'MN'),
(28, 'Mississippi', 'MS'),
(29, 'Missouri', 'MO'),
(30, 'Montana', 'MT'),
(31, 'Nebraska', 'NE'),
(32, 'Nevada', 'NV'),
(33, 'New Hampshire', 'NH'),
(34, 'New Jersey', 'NJ'),
(35, 'New Mexico', 'NM'),
(36, 'New York', 'NY'),
(37, 'North Carolina', 'NC'),
(38, 'North Dakota', 'ND'),
(39, 'Northern Mariana Islands', 'MP'),
(40, 'Ohio', 'OH'),
(41, 'Oklahoma', 'OK'),
(42, 'Oregon', 'OR'),
(43, 'Palau', 'PW'),
(44, 'Pennsylvania', 'PA'),
(45, 'Puerto Rico', 'PR'),
(46, 'Rhode Island', 'RI'),
(47, 'South Carolina', 'SC'),
(48, 'South Dakota', 'SD'),
(49, 'Tennessee', 'TN'),
(50, 'Texas', 'TX'),
(51, 'Utah', 'UT'),
(52, 'Vermont', 'VT'),
(53, 'Virgin Islands', 'VI'),
(54, 'Virginia', 'VA'),
(55, 'Washington', 'WA'),
(56, 'West Virginia', 'WV'),
(57, 'Wisconsin', 'WI'),
(58, 'Wyoming', 'WY'),
(59, 'Armed Forces Africa', 'AE'),
(60, 'Armed Forces Canada', 'AE'),
(61, 'Armed Forces Europe', 'AE'),
(62, 'Armed Forces Middle East', 'AE'),
(63, 'Armed Forces Pacific', 'AP');

-- --------------------------------------------------------

--
-- Table structure for table `bf_steps`
--

CREATE TABLE IF NOT EXISTS `bf_steps` (
`ID` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `step_title` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `information` mediumblob NOT NULL,
  `status` enum('1','0') NOT NULL,
  `added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_steps`
--

INSERT INTO `bf_steps` (`ID`, `department`, `step_title`, `order`, `information`, `status`, `added`, `updated`) VALUES
(1, 12, 'Find Agent', 1, 0x3c756c3e0d0a3c6c693e312e204c6f72656d20697073756d20646f6c6f72207369743c2f6c693e0d0a3c6c693e322e20416d65742c20636f6e73656374657475722061646970697363696e6720656c69742e204e756c6c61207175616d2076656c69742c3c2f6c693e0d0a3c6c693e332e2056756c707574617465206575207068617265747261206e65633c2f6c693e0d0a3c6c693e342e204d6174746973206163206e657175653c2f6c693e0d0a3c2f756c3e, '0', '2014-08-11 10:45:07', '2014-08-12 11:51:04'),
(2, 13, 'Get your Id', 2, 0x3c703e4c6f72656d20497073756d2069732073696d706c792064756d6d792074657874206f6620746865207072696e74696e6720616e64207479706573657474696e6720696e6475737472792e204c6f72656d20497073756d20686173206265656e2074686520696e6475737472792773207374616e646172642064756d6d79207465787420657665722073696e6365207468652031353030732c207768656e20616e20756e6b6e6f776e207072696e74657220746f6f6b20612067616c6c6579206f66207479706520616e6420736372616d626c656420697420746f206d616b65206120747970652073706563696d656e20626f6f6b2e20497420686173207375727669766564206e6f74206f6e6c7920666976652063656e7475726965732c2062757420616c736f20746865206c65617020696e746f20656c656374726f6e6963207479706573657474696e672c2072656d61696e696e6720657373656e7469616c6c7920756e6368616e6765642e2049742077617320706f70756c61726973656420696e207468652031393630732077697468207468652072656c65617365206f66204c657472617365742073686565747320636f6e7461696e696e67204c6f72656d20497073756d2070617373616765732c20616e64206d6f726520726563656e746c792077697468206465736b746f70207075626c697368696e6720736f667477617265206c696b6520416c64757320506167654d616b657220696e636c7564696e672076657273696f6e73206f66204c6f72656d20497073756d2e3c2f703e, '1', '2014-08-11 10:50:20', '2014-08-14 13:35:03'),
(3, 14, 'Fill Form', 3, 0x3c703e49742069732061206c6f6e672065737461626c6973686564206661637420746861742061207265616465722077696c6c206265206469737472616374656420627920746865207265616461626c6520636f6e74656e74206f6620612070616765207768656e206c6f6f6b696e6720617420697473206c61796f75742e2054686520706f696e74206f66207573696e67204c6f72656d20497073756d2069732074686174206974206861732061206d6f72652d6f722d6c657373206e6f726d616c20646973747269627574696f6e206f66206c6574746572732c206173206f70706f73656420746f207573696e672027436f6e74656e7420686572652c20636f6e74656e742068657265272c206d616b696e67206974206c6f6f6b206c696b65207265616461626c6520456e676c6973682e204d616e79206465736b746f70207075626c697368696e67207061636b6167657320616e6420776562207061676520656469746f7273206e6f7720757365204c6f72656d20497073756d2061732074686569722064656661756c74206d6f64656c20746578742c20616e6420612073656172636820666f7220276c6f72656d20697073756d272077696c6c20756e636f766572206d616e7920776562207369746573207374696c6c20696e20746865697220696e66616e63792e20566172696f75732076657273696f6e7320686176652065766f6c766564206f766572207468652079656172732c20736f6d6574696d6573206279206163636964656e742c20736f6d6574696d6573206f6e20707572706f73652028696e6a65637465642068756d6f757220616e6420746865206c696b65292e3c2f703e, '0', '2014-08-11 10:50:51', '2014-08-14 13:35:20'),
(4, 13, 'Send Money', 4, 0x3c703e546865207374616e64617264206368756e6b206f66204c6f72656d20497073756d20757365642073696e63652074686520313530307320697320726570726f64756365642062656c6f7720666f722074686f736520696e74657265737465642e2053656374696f6e7320312e31302e333220616e6420312e31302e33332066726f6d202264652046696e6962757320426f6e6f72756d206574204d616c6f72756d222062792043696365726f2061726520616c736f20726570726f647563656420696e207468656972206578616374206f726967696e616c20666f726d2c206163636f6d70616e69656420627920456e676c6973682076657273696f6e732066726f6d207468652031393134207472616e736c6174696f6e20627920482e205261636b68616d2e3c2f703e, '1', '2014-08-11 10:51:44', '2014-08-14 13:35:40'),
(5, 13, 'Find Agent', 1, 0x3c703e696e666f726d6174696f6e3c2f703e, '1', '2014-08-11 13:05:01', '2014-08-14 13:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `bf_tab`
--

CREATE TABLE IF NOT EXISTS `bf_tab` (
`ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `video` varchar(255) NOT NULL,
  `information` mediumblob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_tab`
--

INSERT INTO `bf_tab` (`ID`, `name`, `status`, `added`, `updated`, `video`, `information`) VALUES
(12, 'ONLINE', '1', '2014-08-12 11:40:31', '2014-08-18 02:16:13', 'http://ipay.cntlsolutions.com/public/uploads/video-demo.mp4', 0x3c64697620636c6173733d227461622d636f6e74656e74207472616e73706172656e74223e0a3c6469762069643d22746162312220636c6173733d227461622d70616e6520616374697665223e0a3c703e3c6120687265663d22687474703a2f2f7777772e77337363686f6f6c732e636f6d2f68746d6c2f74727969742e6173703f66696c656e616d653d74727968746d6c5f6c6567656e6422207461726765743d225f626c616e6b223e4669656c647365742061726f756e6420666f726d2d646174613c2f613e3c6272202f3e20486f7720746f20637265617465206120626f726465722061726f756e6420656c656d656e747320696e206120666f726d2e3c2f703e0a3c703e3c6120687265663d22687474703a2f2f7777772e77337363686f6f6c732e636f6d2f68746d6c2f74727969742e6173703f66696c656e616d653d74727968746d6c5f666f726d5f7375626d697422207461726765743d225f626c616e6b223e466f726d20776974682074657874206669656c647320616e642061207375626d697420627574746f6e3c2f613e3c6272202f3e20486f7720746f20637265617465206120666f726d20776974682074776f2074657874206669656c647320616e642061207375626d697420627574746f6e2e3c2f703e0a3c703e3c6120687265663d22687474703a2f2f7777772e77337363686f6f6c732e636f6d2f68746d6c2f74727969742e6173703f66696c656e616d653d74727968746d6c5f666f726d5f636865636b626f7822207461726765743d225f626c616e6b223e466f726d207769746820636865636b626f7865733c2f613e3c6272202f3e20486f7720746f20637265617465206120666f726d20776974682074776f20636865636b626f78657320616e642061207375626d697420627574746f6e2e3c2f703e0a3c703e3c6120687265663d22687474703a2f2f7777772e77337363686f6f6c732e636f6d2f68746d6c2f74727969742e6173703f66696c656e616d653d74727968746d6c5f666f726d5f726164696f22207461726765743d225f626c616e6b223e466f726d207769746820726164696f20627574746f6e733c2f613e3c6272202f3e20486f7720746f20637265617465206120666f726d20776974682074776f20726164696f20627574746f6e732c20616e642061207375626d697420627574746f6e2e3c2f703e0a3c703e3c6120687265663d22687474703a2f2f7777772e77337363686f6f6c732e636f6d2f68746d6c2f74727969742e6173703f66696c656e616d653d74727968746d6c5f666f726d5f6d61696c22207461726765743d225f626c616e6b223e53656e6420652d6d61696c2066726f6d206120666f726d3c2f613e3c6272202f3e20486f7720746f2073656e6420652d6d61696c2066726f6d206120666f726d3c2f703e0a3c2f6469763e0a3c2f6469763e),
(13, 'ON-COUNTER', '0', '2014-08-12 11:40:59', '2014-08-15 06:09:05', 'http://ipay.cntlsolutions.com/public/themes/ipay/video/video-demo.mp4', 0x3c703e3c6120687265663d22687474703a2f2f7777772e77337363686f6f6c732e636f6d2f68746d6c2f74727969742e6173703f66696c656e616d653d74727968746d6c5f6c6567656e6422207461726765743d225f626c616e6b223e4669656c647365742061726f756e6420666f726d2d646174613c2f613e3c6272202f3e20486f7720746f20637265617465206120626f726465722061726f756e6420656c656d656e747320696e206120666f726d2e3c2f703e0a3c703e3c6120687265663d22687474703a2f2f7777772e77337363686f6f6c732e636f6d2f68746d6c2f74727969742e6173703f66696c656e616d653d74727968746d6c5f666f726d5f7375626d697422207461726765743d225f626c616e6b223e466f726d20776974682074657874206669656c647320616e642061207375626d697420627574746f6e3c2f613e3c6272202f3e20486f7720746f20637265617465206120666f726d20776974682074776f2074657874206669656c647320616e642061207375626d697420627574746f6e2e3c2f703e0a3c703e3c6120687265663d22687474703a2f2f7777772e77337363686f6f6c732e636f6d2f68746d6c2f74727969742e6173703f66696c656e616d653d74727968746d6c5f666f726d5f636865636b626f7822207461726765743d225f626c616e6b223e466f726d207769746820636865636b626f7865733c2f613e3c6272202f3e20486f7720746f20637265617465206120666f726d20776974682074776f20636865636b626f78657320616e642061207375626d697420627574746f6e2e3c2f703e0a3c703e3c6120687265663d22687474703a2f2f7777772e77337363686f6f6c732e636f6d2f68746d6c2f74727969742e6173703f66696c656e616d653d74727968746d6c5f666f726d5f726164696f22207461726765743d225f626c616e6b223e466f726d207769746820726164696f20627574746f6e733c2f613e3c6272202f3e20486f7720746f20637265617465206120666f726d20776974682074776f20726164696f20627574746f6e732c20616e642061207375626d697420627574746f6e2e3c2f703e0a3c703e3c6120687265663d22687474703a2f2f7777772e77337363686f6f6c732e636f6d2f68746d6c2f74727969742e6173703f66696c656e616d653d74727968746d6c5f666f726d5f6d61696c22207461726765743d225f626c616e6b223e53656e6420652d6d61696c2066726f6d206120666f726d3c2f613e3c6272202f3e20486f7720746f2073656e6420652d6d61696c2066726f6d206120666f726d3c2f703e),
(14, 'ON-COUNTER2', '0', '2014-08-12 11:43:27', '2014-08-15 06:09:15', '', 0x3c703e4c6f72656d20697073756d20646f6c6f722073697420616d65742c20636f6e73656374657475722061646970697363696e6720656c69742e3c2f703e0a3c703e4e756c6c61207175616d2076656c69742c2076756c707574617465206575207068617265747261206e65632c206d6174746973206163206e657175652e20447569732076756c707574617465203c6272202f3e20636f6d6d6f646f206c65637475732c20616320626c616e64697420656c69742074696e636964756e742069642e3c2f703e);

-- --------------------------------------------------------

--
-- Table structure for table `bf_tab_department`
--

CREATE TABLE IF NOT EXISTS `bf_tab_department` (
  `tab_ID` int(11) NOT NULL,
  `department_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bf_tab_department`
--

INSERT INTO `bf_tab_department` (`tab_ID`, `department_ID`) VALUES
(13, 1),
(13, 2),
(14, 1),
(12, 1),
(12, 2),
(12, 3),
(12, 4),
(12, 11);

-- --------------------------------------------------------

--
-- Table structure for table `bf_users`
--

CREATE TABLE IF NOT EXISTS `bf_users` (
`id` bigint(20) unsigned NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '4',
  `email` varchar(120) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password_hash` char(60) NOT NULL,
  `reset_hash` varchar(40) DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(40) NOT NULL DEFAULT '',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `reset_by` int(10) DEFAULT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_message` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT '',
  `display_name_changed` date DEFAULT NULL,
  `timezone` char(4) NOT NULL DEFAULT 'UM6',
  `language` varchar(20) NOT NULL DEFAULT 'english',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `activate_hash` varchar(40) NOT NULL DEFAULT '',
  `password_iterations` int(4) NOT NULL,
  `force_password_reset` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_users`
--

INSERT INTO `bf_users` (`id`, `role_id`, `email`, `username`, `password_hash`, `reset_hash`, `last_login`, `last_ip`, `created_on`, `deleted`, `reset_by`, `banned`, `ban_message`, `display_name`, `display_name_changed`, `timezone`, `language`, `active`, `activate_hash`, `password_iterations`, `force_password_reset`) VALUES
(1, 1, 'prem@ipay.com', 'prem', '$2a$08$A2e/Jotpnrz3acS2YpUKEeo9376HXMHVPylRNlGSbTI1YB7fbruq6', NULL, '2014-11-20 02:06:00', '182.93.83.93', '2014-08-05 08:12:26', 0, NULL, 0, NULL, 'prem', NULL, 'UM6', 'english', 1, '', 0, 0),
(2, 2, 'admin@ipay.com', 'admin', '$2a$08$9gFZWXpCqxb/.9q9HVMbeerGd7Qo5uPx/gxRAvOv22wdaYruUqfgq', '', '2015-05-25 12:40:20', '::1', '2014-08-14 11:52:18', 0, 0, 0, NULL, 'admin', NULL, 'UM6', 'english', 1, '', 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bf_user_cookies`
--

CREATE TABLE IF NOT EXISTS `bf_user_cookies` (
  `user_id` bigint(20) NOT NULL,
  `token` varchar(128) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bf_user_meta`
--

CREATE TABLE IF NOT EXISTS `bf_user_meta` (
`meta_id` int(20) unsigned NOT NULL,
  `user_id` int(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) NOT NULL DEFAULT '',
  `meta_value` text
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bf_user_meta`
--

INSERT INTO `bf_user_meta` (`meta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'street_name', ''),
(2, 1, 'state', 'SC'),
(3, 1, 'country', 'US'),
(4, 1, 'type', 'small'),
(5, 2, 'street_name', ''),
(6, 2, 'state', 'SC'),
(7, 2, 'country', 'US'),
(8, 2, 'type', 'small');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bf_activities`
--
ALTER TABLE `bf_activities`
 ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `bf_banner`
--
ALTER TABLE `bf_banner`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bf_countries`
--
ALTER TABLE `bf_countries`
 ADD PRIMARY KEY (`iso`);

--
-- Indexes for table `bf_department`
--
ALTER TABLE `bf_department`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bf_email_queue`
--
ALTER TABLE `bf_email_queue`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_forex`
--
ALTER TABLE `bf_forex`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_info`
--
ALTER TABLE `bf_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `info_key` (`info_key`);

--
-- Indexes for table `bf_login_attempts`
--
ALTER TABLE `bf_login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_media`
--
ALTER TABLE `bf_media`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bf_menu`
--
ALTER TABLE `bf_menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_pages`
--
ALTER TABLE `bf_pages`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bf_partner`
--
ALTER TABLE `bf_partner`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_permissions`
--
ALTER TABLE `bf_permissions`
 ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `bf_roles`
--
ALTER TABLE `bf_roles`
 ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `bf_role_permissions`
--
ALTER TABLE `bf_role_permissions`
 ADD PRIMARY KEY (`role_id`,`permission_id`);

--
-- Indexes for table `bf_schema_version`
--
ALTER TABLE `bf_schema_version`
 ADD PRIMARY KEY (`type`);

--
-- Indexes for table `bf_sessions`
--
ALTER TABLE `bf_sessions`
 ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `bf_settings`
--
ALTER TABLE `bf_settings`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `bf_social_link`
--
ALTER TABLE `bf_social_link`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_states`
--
ALTER TABLE `bf_states`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_steps`
--
ALTER TABLE `bf_steps`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bf_tab`
--
ALTER TABLE `bf_tab`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bf_users`
--
ALTER TABLE `bf_users`
 ADD PRIMARY KEY (`id`), ADD KEY `email` (`email`);

--
-- Indexes for table `bf_user_cookies`
--
ALTER TABLE `bf_user_cookies`
 ADD KEY `token` (`token`);

--
-- Indexes for table `bf_user_meta`
--
ALTER TABLE `bf_user_meta`
 ADD PRIMARY KEY (`meta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bf_activities`
--
ALTER TABLE `bf_activities`
MODIFY `activity_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=462;
--
-- AUTO_INCREMENT for table `bf_banner`
--
ALTER TABLE `bf_banner`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bf_department`
--
ALTER TABLE `bf_department`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `bf_email_queue`
--
ALTER TABLE `bf_email_queue`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bf_forex`
--
ALTER TABLE `bf_forex`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bf_info`
--
ALTER TABLE `bf_info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bf_login_attempts`
--
ALTER TABLE `bf_login_attempts`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bf_media`
--
ALTER TABLE `bf_media`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `bf_menu`
--
ALTER TABLE `bf_menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `bf_pages`
--
ALTER TABLE `bf_pages`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bf_partner`
--
ALTER TABLE `bf_partner`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bf_permissions`
--
ALTER TABLE `bf_permissions`
MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=156;
--
-- AUTO_INCREMENT for table `bf_roles`
--
ALTER TABLE `bf_roles`
MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bf_social_link`
--
ALTER TABLE `bf_social_link`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bf_states`
--
ALTER TABLE `bf_states`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `bf_steps`
--
ALTER TABLE `bf_steps`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bf_tab`
--
ALTER TABLE `bf_tab`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `bf_users`
--
ALTER TABLE `bf_users`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bf_user_meta`
--
ALTER TABLE `bf_user_meta`
MODIFY `meta_id` int(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
