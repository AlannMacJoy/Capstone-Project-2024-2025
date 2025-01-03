-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2024 at 06:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `family_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `brgy` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bday` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deceased_persons`
--

CREATE TABLE `deceased_persons` (
  `deceased_id` int(11) NOT NULL,
  `lot_owner_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `lot_id` int(50) NOT NULL,
  `dead_family_name` varchar(255) NOT NULL,
  `dead_fname` varchar(255) NOT NULL,
  `dead_mname` varchar(255) NOT NULL,
  `dead_gender` varchar(255) NOT NULL,
  `dead_citizenship` varchar(255) NOT NULL,
  `dead_civil_status` varchar(255) NOT NULL,
  `dead_relative` varchar(255) NOT NULL,
  `dead_relative_surname` varchar(255) NOT NULL,
  `dead_relationship` varchar(255) NOT NULL,
  `internment_date` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `date_of_death` varchar(255) NOT NULL,
  `death_cert` varchar(255) NOT NULL,
  `burial_permit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lot_owners`
--

CREATE TABLE `lot_owners` (
  `lot_owner_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `lot_id` int(11) NOT NULL,
  `deed_of_sale` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(50) NOT NULL,
  `news_subtitle` varchar(50) NOT NULL,
  `news_description` varchar(250) NOT NULL,
  `news_date` varchar(150) NOT NULL,
  `news_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `slideshow_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `what` longtext NOT NULL,
  `when` varchar(255) NOT NULL,
  `where` varchar(255) NOT NULL,
  `who` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blocks`
--

CREATE TABLE `tbl_blocks` (
  `block_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `block_name` varchar(255) NOT NULL,
  `sector` varchar(255) NOT NULL,
  `total_lots` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_blocks`
--

INSERT INTO `tbl_blocks` (`block_id`, `site_id`, `block_name`, `sector`, `total_lots`) VALUES
(1, 1, '1', 'C', '8'),
(2, 1, '2', 'C', '8'),
(3, 1, '3', 'C', '10'),
(4, 1, '4', 'C', '8'),
(5, 1, '5', 'C', '8'),
(6, 1, '6', 'C', '8'),
(7, 1, '7', 'C', '8'),
(8, 1, '8', 'C', '8'),
(9, 1, '9', 'C', '8'),
(10, 1, '10', 'C', '10'),
(11, 1, '11', 'C', '8'),
(12, 1, '12', 'C', '8'),
(13, 1, '13', 'C', '8'),
(14, 1, '14', 'C', '8'),
(15, 1, '15', 'C', '10'),
(16, 1, '16', 'C', '8'),
(17, 1, '17', 'C', '8'),
(18, 1, '18', 'C', '8'),
(19, 1, '19', 'C', '8'),
(20, 1, '20', 'C', '8'),
(21, 1, '21', 'C', '8'),
(22, 1, '22', 'C', '10'),
(23, 1, '23', 'C', '8'),
(24, 1, '24', 'C', '8'),
(25, 1, '25', 'C', '8'),
(26, 1, '26', 'C', '8'),
(27, 1, '27', 'C', '10'),
(28, 1, '28', 'C', '8'),
(29, 1, '29', 'C', '8'),
(30, 1, '30', 'C', '8'),
(31, 1, '31', 'C', '8'),
(32, 1, '32', 'C', '8'),
(33, 1, '33', 'C', '8'),
(34, 1, '34', 'C', '10'),
(35, 1, '35', 'C', '8'),
(36, 1, '36', 'C', '8'),
(37, 1, '37', 'C', '8'),
(38, 1, '38', 'C', '8'),
(39, 1, '39', 'C', '10'),
(40, 1, '40', 'C', '8'),
(41, 1, '41', 'C', '8'),
(42, 1, '42', 'C', '8'),
(43, 1, '43', 'C', '8'),
(44, 1, '44', 'C', '8'),
(45, 1, '45', 'C', '8'),
(46, 1, '46', 'C', '10'),
(47, 1, '47', 'C', '8'),
(48, 1, '48', 'C', '8');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lots`
--

CREATE TABLE `tbl_lots` (
  `lot_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `lot_name` varchar(50) DEFAULT NULL,
  `lawn_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_lots`
--

INSERT INTO `tbl_lots` (`lot_id`, `block_id`, `site_id`, `lot_name`, `lawn_type`) VALUES
(1, 1, 1, '1', 'Special-premium'),
(2, 1, 1, '2', 'Special-premium'),
(3, 1, 1, '3', 'Special-premium'),
(4, 1, 1, '4', 'Special-premium'),
(5, 1, 1, '5', 'Special-premium'),
(6, 1, 1, '6', 'Special-premium'),
(7, 1, 1, '7', 'Special-premium'),
(8, 1, 1, '8', 'Special-premium'),
(9, 2, 1, '1', 'Premium'),
(10, 2, 1, '2', 'Premium'),
(11, 2, 1, '3', 'Premium'),
(12, 2, 1, '4', 'Premium'),
(13, 2, 1, '5', 'Premium'),
(14, 2, 1, '6', 'Premium'),
(15, 2, 1, '7', 'Premium'),
(16, 2, 1, '8', 'Premium'),
(17, 3, 1, '1', 'Premium'),
(18, 3, 1, '2', 'Premium'),
(19, 3, 1, '3', 'Premium'),
(20, 3, 1, '4', 'Premium'),
(21, 3, 1, '5', 'Premium'),
(22, 3, 1, '6', 'Premium'),
(23, 3, 1, '7', 'Premium'),
(24, 3, 1, '8', 'Premium'),
(25, 3, 1, '9', 'Premium'),
(26, 3, 1, '10', 'Premium'),
(27, 4, 1, '1', 'Premium'),
(28, 4, 1, '2', 'Premium'),
(29, 4, 1, '3', 'Premium'),
(30, 4, 1, '4', 'Premium'),
(31, 4, 1, '5', 'Premium'),
(32, 4, 1, '6', 'Premium'),
(33, 4, 1, '7', 'Premium'),
(34, 4, 1, '8', 'Premium'),
(35, 5, 1, '1', 'Premium'),
(36, 5, 1, '2', 'Premium'),
(37, 5, 1, '3', 'Premium'),
(38, 5, 1, '4', 'Premium'),
(39, 5, 1, '5', 'Premium'),
(40, 5, 1, '6', 'Premium'),
(41, 5, 1, '7', 'Premium'),
(42, 5, 1, '8', 'Premium'),
(43, 6, 1, '1', 'Premium'),
(44, 6, 1, '2', 'Premium'),
(45, 6, 1, '3', 'Premium'),
(46, 6, 1, '4', 'Premium'),
(47, 6, 1, '5', 'Premium'),
(48, 6, 1, '6', 'Premium'),
(49, 6, 1, '7', 'Premium'),
(50, 6, 1, '8', 'Premium'),
(51, 7, 1, '1', 'Standard'),
(52, 7, 1, '2', 'Standard'),
(53, 7, 1, '3', 'Standard'),
(54, 7, 1, '4', 'Standard'),
(55, 7, 1, '5', 'Standard'),
(56, 7, 1, '6', 'Standard'),
(57, 7, 1, '7', 'Standard'),
(58, 7, 1, '8', 'Standard'),
(59, 8, 1, '1', 'Standard'),
(60, 8, 1, '2', 'Standard'),
(61, 8, 1, '3', 'Standard'),
(62, 8, 1, '4', 'Standard'),
(63, 8, 1, '5', 'Standard'),
(64, 8, 1, '6', 'Standard'),
(65, 8, 1, '7', 'Standard'),
(66, 8, 1, '8', 'Standard'),
(67, 9, 1, '1', 'Standard'),
(68, 9, 1, '2', 'Standard'),
(69, 9, 1, '3', 'Standard'),
(70, 9, 1, '4', 'Standard'),
(71, 9, 1, '5', 'Standard'),
(72, 9, 1, '6', 'Standard'),
(73, 9, 1, '7', 'Standard'),
(74, 9, 1, '8', 'Standard'),
(75, 10, 1, '1', 'Standard'),
(76, 10, 1, '2', 'Standard'),
(77, 10, 1, '3', 'Standard'),
(78, 10, 1, '4', 'Standard'),
(79, 10, 1, '5', 'Standard'),
(80, 10, 1, '6', 'Standard'),
(81, 10, 1, '7', 'Standard'),
(82, 10, 1, '8', 'Standard'),
(83, 10, 1, '9', 'Standard'),
(84, 10, 1, '10', 'Standard'),
(85, 11, 1, '1', 'Premium'),
(86, 11, 1, '2', 'Premium'),
(87, 11, 1, '3', 'Premium'),
(88, 11, 1, '4', 'Premium'),
(89, 11, 1, '5', 'Premium'),
(90, 11, 1, '6', 'Premium'),
(91, 11, 1, '7', 'Premium'),
(92, 11, 1, '8', 'Premium'),
(93, 12, 1, '1', 'Special-premium'),
(94, 12, 1, '2', 'Special-premium'),
(95, 12, 1, '3', 'Special-premium'),
(96, 12, 1, '4', 'Special-premium'),
(97, 12, 1, '5', 'Special-premium'),
(98, 12, 1, '6', 'Special-premium'),
(99, 12, 1, '7', 'Special-premium'),
(100, 12, 1, '8', 'Special-premium'),
(101, 13, 1, '1', 'Special-premium'),
(102, 13, 1, '2', 'Special-premium'),
(103, 13, 1, '3', 'Special-premium'),
(104, 13, 1, '4', 'Special-premium'),
(105, 13, 1, '5', 'Special-premium'),
(106, 13, 1, '6', 'Special-premium'),
(107, 13, 1, '7', 'Special-premium'),
(108, 13, 1, '8', 'Special-premium'),
(109, 14, 1, '1', 'Premium'),
(110, 14, 1, '2', 'Premium'),
(111, 14, 1, '3', 'Premium'),
(112, 14, 1, '4', 'Premium'),
(113, 14, 1, '5', 'Premium'),
(114, 14, 1, '6', 'Premium'),
(115, 14, 1, '7', 'Premium'),
(116, 14, 1, '8', 'Premium'),
(117, 15, 1, '1', 'Standard'),
(118, 15, 1, '2', 'Standard'),
(119, 15, 1, '3', 'Standard'),
(120, 15, 1, '4', 'Standard'),
(121, 15, 1, '5', 'Standard'),
(122, 15, 1, '6', 'Standard'),
(123, 15, 1, '7', 'Standard'),
(124, 15, 1, '8', 'Standard'),
(125, 15, 1, '9', 'Standard'),
(126, 15, 1, '10', 'Standard'),
(127, 16, 1, '1', 'Standard'),
(128, 16, 1, '2', 'Standard'),
(129, 16, 1, '3', 'Standard'),
(130, 16, 1, '4', 'Standard'),
(131, 16, 1, '5', 'Standard'),
(132, 16, 1, '6', 'Standard'),
(133, 16, 1, '7', 'Standard'),
(134, 16, 1, '8', 'Standard'),
(135, 17, 1, '1', 'Standard'),
(136, 17, 1, '2', 'Standard'),
(137, 17, 1, '3', 'Standard'),
(138, 17, 1, '4', 'Standard'),
(139, 17, 1, '5', 'Standard'),
(140, 17, 1, '6', 'Standard'),
(141, 17, 1, '7', 'Standard'),
(142, 17, 1, '8', 'Standard'),
(143, 18, 1, '1', 'Standard'),
(144, 18, 1, '2', 'Standard'),
(145, 18, 1, '3', 'Standard'),
(146, 18, 1, '4', 'Standard'),
(147, 18, 1, '5', 'Standard'),
(148, 18, 1, '6', 'Standard'),
(149, 18, 1, '7', 'Standard'),
(150, 18, 1, '8', 'Standard'),
(151, 19, 1, '1', 'Standard'),
(152, 19, 1, '2', 'Standard'),
(153, 19, 1, '3', 'Standard'),
(154, 19, 1, '4', 'Standard'),
(155, 19, 1, '5', 'Standard'),
(156, 19, 1, '6', 'Standard'),
(157, 19, 1, '7', 'Standard'),
(158, 19, 1, '8', 'Standard'),
(159, 20, 1, '1', 'Standard'),
(160, 20, 1, '2', 'Standard'),
(161, 20, 1, '3', 'Standard'),
(162, 20, 1, '4', 'Standard'),
(163, 20, 1, '5', 'Standard'),
(164, 20, 1, '6', 'Standard'),
(165, 20, 1, '7', 'Standard'),
(166, 20, 1, '8', 'Standard'),
(167, 21, 1, '1', 'Standard'),
(168, 21, 1, '2', 'Standard'),
(169, 21, 1, '3', 'Standard'),
(170, 21, 1, '4', 'Standard'),
(171, 21, 1, '5', 'Standard'),
(172, 21, 1, '6', 'Standard'),
(173, 21, 1, '7', 'Standard'),
(174, 21, 1, '8', 'Standard'),
(175, 22, 1, '1', 'Standard'),
(176, 22, 1, '2', 'Standard'),
(177, 22, 1, '3', 'Standard'),
(178, 22, 1, '4', 'Standard'),
(179, 22, 1, '5', 'Standard'),
(180, 22, 1, '6', 'Standard'),
(181, 22, 1, '7', 'Standard'),
(182, 22, 1, '8', 'Standard'),
(183, 22, 1, '9', 'Standard'),
(184, 22, 1, '10', 'Standard'),
(185, 23, 1, '1', 'Premium'),
(186, 23, 1, '2', 'Premium'),
(187, 23, 1, '3', 'Premium'),
(188, 23, 1, '4', 'Premium'),
(189, 23, 1, '5', 'Premium'),
(190, 23, 1, '6', 'Premium'),
(191, 23, 1, '7', 'Premium'),
(192, 23, 1, '8', 'Premium'),
(193, 24, 1, '1', 'Special-premium'),
(194, 24, 1, '2', 'Special-premium'),
(195, 24, 1, '3', 'Special-premium'),
(196, 24, 1, '4', 'Special-premium'),
(197, 24, 1, '5', 'Special-premium'),
(198, 24, 1, '6', 'Special-premium'),
(199, 24, 1, '7', 'Special-premium'),
(200, 24, 1, '8', 'Special-premium'),
(201, 25, 1, '1', 'Special-premium'),
(202, 25, 1, '2', 'Special-premium'),
(203, 25, 1, '3', 'Special-premium'),
(204, 25, 1, '4', 'Special-premium'),
(205, 25, 1, '5', 'Special-premium'),
(206, 25, 1, '6', 'Special-premium'),
(207, 25, 1, '7', 'Special-premium'),
(208, 25, 1, '8', 'Special-premium'),
(209, 26, 1, '1', 'Premium'),
(210, 26, 1, '2', 'Premium'),
(211, 26, 1, '3', 'Premium'),
(212, 26, 1, '4', 'Premium'),
(213, 26, 1, '5', 'Premium'),
(214, 26, 1, '6', 'Premium'),
(215, 26, 1, '7', 'Premium'),
(216, 26, 1, '8', 'Premium'),
(217, 27, 1, '1', 'Standard'),
(218, 27, 1, '2', 'Standard'),
(219, 27, 1, '3', 'Standard'),
(220, 27, 1, '4', 'Standard'),
(221, 27, 1, '5', 'Standard'),
(222, 27, 1, '6', 'Standard'),
(223, 27, 1, '7', 'Standard'),
(224, 27, 1, '8', 'Standard'),
(225, 27, 1, '9', 'Standard'),
(226, 27, 1, '10', 'Standard'),
(228, 28, 1, '1', 'Standard'),
(229, 28, 1, '2', 'Standard'),
(230, 28, 1, '3', 'Standard'),
(231, 28, 1, '4', 'Standard'),
(232, 28, 1, '5', 'Standard'),
(233, 28, 1, '6', 'Standard'),
(234, 28, 1, '7', 'Standard'),
(235, 28, 1, '8', 'Standard'),
(236, 29, 1, '1', 'Standard'),
(237, 29, 1, '2', 'Standard'),
(238, 29, 1, '3', 'Standard'),
(239, 29, 1, '4', 'Standard'),
(240, 29, 1, '5', 'Standard'),
(241, 29, 1, '6', 'Standard'),
(242, 29, 1, '7', 'Standard'),
(243, 29, 1, '8', 'Standard'),
(244, 30, 1, '1', 'Standard'),
(245, 30, 1, '2', 'Standard'),
(246, 30, 1, '3', 'Standard'),
(247, 30, 1, '4', 'Standard'),
(248, 30, 1, '5', 'Standard'),
(249, 30, 1, '6', 'Standard'),
(250, 30, 1, '7', 'Standard'),
(251, 30, 1, '8', 'Standard'),
(252, 31, 1, '1', 'Standard'),
(253, 31, 1, '2', 'Standard'),
(254, 31, 1, '3', 'Standard'),
(255, 31, 1, '4', 'Standard'),
(256, 31, 1, '5', 'Standard'),
(257, 31, 1, '6', 'Standard'),
(258, 31, 1, '7', 'Standard'),
(259, 31, 1, '8', 'Standard'),
(260, 32, 1, '1', 'Standard'),
(261, 32, 1, '2', 'Standard'),
(262, 32, 1, '3', 'Standard'),
(263, 32, 1, '4', 'Standard'),
(264, 32, 1, '5', 'Standard'),
(265, 32, 1, '6', 'Standard'),
(266, 32, 1, '7', 'Standard'),
(267, 32, 1, '8', 'Standard'),
(268, 33, 1, '1', 'Standard'),
(269, 33, 1, '2', 'Standard'),
(270, 33, 1, '3', 'Standard'),
(271, 33, 1, '4', 'Standard'),
(272, 33, 1, '5', 'Standard'),
(273, 33, 1, '6', 'Standard'),
(274, 33, 1, '7', 'Standard'),
(275, 33, 1, '8', 'Standard'),
(276, 34, 1, '1', 'Standard'),
(277, 34, 1, '2', 'Standard'),
(278, 34, 1, '3', 'Standard'),
(279, 34, 1, '4', 'Standard'),
(280, 34, 1, '5', 'Standard'),
(281, 34, 1, '6', 'Standard'),
(282, 34, 1, '7', 'Standard'),
(283, 34, 1, '8', 'Standard'),
(284, 34, 1, '9', 'Standard'),
(285, 34, 1, '10', 'Standard'),
(286, 35, 1, '1', 'Premium'),
(287, 35, 1, '2', 'Premium'),
(288, 35, 1, '3', 'Premium'),
(289, 35, 1, '4', 'Premium'),
(290, 35, 1, '5', 'Premium'),
(291, 35, 1, '6', 'Premium'),
(292, 35, 1, '7', 'Premium'),
(293, 35, 1, '8', 'Premium'),
(294, 36, 1, '1', 'Special-premium'),
(295, 36, 1, '2', 'Special-premium'),
(296, 36, 1, '3', 'Special-premium'),
(297, 36, 1, '4', 'Special-premium'),
(298, 36, 1, '5', 'Special-premium'),
(299, 36, 1, '6', 'Special-premium'),
(300, 36, 1, '7', 'Special-premium'),
(301, 36, 1, '8', 'Special-premium'),
(302, 37, 1, '1', 'Special-premium'),
(303, 37, 1, '2', 'Special-premium'),
(304, 37, 1, '3', 'Special-premium'),
(305, 37, 1, '4', 'Special-premium'),
(306, 37, 1, '5', 'Special-premium'),
(307, 37, 1, '6', 'Special-premium'),
(308, 37, 1, '7', 'Special-premium'),
(309, 37, 1, '8', 'Special-premium'),
(400, 38, 1, '1', 'Premium'),
(401, 38, 1, '2', 'Premium'),
(402, 38, 1, '3', 'Premium'),
(403, 38, 1, '4', 'Premium'),
(404, 38, 1, '5', 'Premium'),
(405, 38, 1, '6', 'Premium'),
(406, 38, 1, '7', 'Premium'),
(407, 38, 1, '8', 'Premium'),
(408, 39, 1, '1', 'Standard'),
(409, 39, 1, '2', 'Standard'),
(410, 39, 1, '3', 'Standard'),
(411, 39, 1, '4', 'Standard'),
(412, 39, 1, '5', 'Standard'),
(413, 39, 1, '6', 'Standard'),
(414, 39, 1, '7', 'Standard'),
(415, 39, 1, '8', 'Standard'),
(416, 39, 1, '9', 'Standard'),
(417, 39, 1, '10', 'Standard'),
(418, 40, 1, '1', 'Standard'),
(419, 40, 1, '2', 'Standard'),
(420, 40, 1, '3', 'Standard'),
(421, 40, 1, '4', 'Standard'),
(422, 40, 1, '5', 'Standard'),
(423, 40, 1, '6', 'Standard'),
(424, 40, 1, '7', 'Standard'),
(425, 40, 1, '8', 'Standard'),
(426, 41, 1, '1', 'Standard'),
(427, 41, 1, '2', 'Standard'),
(428, 41, 1, '3', 'Standard'),
(429, 41, 1, '4', 'Standard'),
(430, 41, 1, '5', 'Standard'),
(431, 41, 1, '6', 'Standard'),
(432, 41, 1, '7', 'Standard'),
(433, 41, 1, '8', 'Standard'),
(434, 42, 1, '1', 'Standard'),
(435, 42, 1, '2', 'Standard'),
(436, 42, 1, '3', 'Standard'),
(437, 42, 1, '4', 'Standard'),
(438, 42, 1, '5', 'Standard'),
(439, 42, 1, '6', 'Standard'),
(440, 42, 1, '7', 'Standard'),
(441, 42, 1, '8', 'Standard'),
(442, 43, 1, '1', 'Premium'),
(443, 43, 1, '2', 'Premium'),
(444, 43, 1, '3', 'Premium'),
(445, 43, 1, '4', 'Premium'),
(446, 43, 1, '5', 'Premium'),
(447, 43, 1, '6', 'Premium'),
(448, 43, 1, '7', 'Premium'),
(449, 43, 1, '8', 'Premium'),
(450, 44, 1, '1', 'Premium'),
(451, 44, 1, '2', 'Premium'),
(452, 44, 1, '3', 'Premium'),
(453, 44, 1, '4', 'Premium'),
(454, 44, 1, '5', 'Premium'),
(455, 44, 1, '6', 'Premium'),
(456, 44, 1, '7', 'Premium'),
(457, 44, 1, '8', 'Premium'),
(458, 45, 1, '1', 'Premium'),
(459, 45, 1, '2', 'Premium'),
(460, 45, 1, '3', 'Premium'),
(461, 45, 1, '4', 'Premium'),
(462, 45, 1, '5', 'Premium'),
(463, 45, 1, '6', 'Premium'),
(464, 45, 1, '7', 'Premium'),
(465, 45, 1, '8', 'Premium'),
(466, 46, 1, '1', 'Premium'),
(467, 46, 1, '2', 'Premium'),
(468, 46, 1, '3', 'Premium'),
(469, 46, 1, '4', 'Premium'),
(470, 46, 1, '5', 'Premium'),
(471, 46, 1, '6', 'Premium'),
(472, 46, 1, '7', 'Premium'),
(473, 46, 1, '8', 'Premium'),
(474, 46, 1, '9', 'Premium'),
(475, 46, 1, '10', 'Premium'),
(476, 47, 1, '1', 'Premium'),
(477, 47, 1, '2', 'Premium'),
(478, 47, 1, '3', 'Premium'),
(479, 47, 1, '4', 'Premium'),
(480, 47, 1, '5', 'Premium'),
(481, 47, 1, '6', 'Premium'),
(482, 47, 1, '7', 'Premium'),
(483, 47, 1, '8', 'Premium'),
(484, 48, 1, '1', 'Special-premium'),
(485, 48, 1, '2', 'Special-premium'),
(486, 48, 1, '3', 'Special-premium'),
(487, 48, 1, '4', 'Special-premium'),
(488, 48, 1, '5', 'Special-premium'),
(489, 48, 1, '6', 'Special-premium'),
(490, 48, 1, '7', 'Special-premium'),
(491, 48, 1, '8', 'Special-premium');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sites`
--

CREATE TABLE `tbl_sites` (
  `site_id` int(11) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `site_sqm2` varchar(255) NOT NULL,
  `total_blocks` varchar(255) NOT NULL,
  `total_lots` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sites`
--

INSERT INTO `tbl_sites` (`site_id`, `site_name`, `site_sqm2`, `total_blocks`, `total_lots`) VALUES
(1, 'AZALEA', '2.324sqm', '48', '400');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `deceased_persons`
--
ALTER TABLE `deceased_persons`
  ADD PRIMARY KEY (`deceased_id`);

--
-- Indexes for table `lot_owners`
--
ALTER TABLE `lot_owners`
  ADD PRIMARY KEY (`lot_owner_id`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`slideshow_id`);

--
-- Indexes for table `tbl_blocks`
--
ALTER TABLE `tbl_blocks`
  ADD PRIMARY KEY (`block_id`);

--
-- Indexes for table `tbl_lots`
--
ALTER TABLE `tbl_lots`
  ADD PRIMARY KEY (`lot_id`);

--
-- Indexes for table `tbl_sites`
--
ALTER TABLE `tbl_sites`
  ADD PRIMARY KEY (`site_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deceased_persons`
--
ALTER TABLE `deceased_persons`
  MODIFY `deceased_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lot_owners`
--
ALTER TABLE `lot_owners`
  MODIFY `lot_owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `slideshow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_blocks`
--
ALTER TABLE `tbl_blocks`
  MODIFY `block_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_lots`
--
ALTER TABLE `tbl_lots`
  MODIFY `lot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=492;

--
-- AUTO_INCREMENT for table `tbl_sites`
--
ALTER TABLE `tbl_sites`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
