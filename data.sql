-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 06:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel14`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 35, '1613399260.jpg', '2021-02-15 07:27:40', '2021-02-15 07:27:40'),
(2, 35, '1613399260.jpg', '2021-02-15 07:27:40', '2021-02-15 07:27:40'),
(3, 35, '1613399260.jpg', '2021-02-15 07:27:40', '2021-02-15 07:27:40'),
(4, 35, '1613399260.jpg', '2021-02-15 07:27:40', '2021-02-15 07:27:40'),
(15, 36, '1613403783.7a0a5a14729af2329b31d5dc558477e9.png', '2021-02-15 08:43:03', '2021-02-15 08:43:03'),
(18, 36, '1613403783.1678884.jpg', '2021-02-15 08:43:03', '2021-02-15 08:43:03'),
(21, 36, '1613403783.photo-1549740425-5e9ed4d8cd34.jpeg', '2021-02-15 08:43:03', '2021-02-15 08:43:03'),
(22, 36, '1613403783.PT_hero_42_153645159.jpg', '2021-02-15 08:43:03', '2021-02-15 08:43:03'),
(23, 36, '1613403783.social_customer_care.svg', '2021-02-15 08:43:03', '2021-02-15 08:43:03'),
(24, 36, '1613403783.Social-Media-Branding.png', '2021-02-15 08:43:03', '2021-02-15 08:43:03'),
(25, 36, '1613403783.TvuM20.jpg', '2021-02-15 08:43:03', '2021-02-15 08:43:03'),
(26, 36, '1613403783.wallpapersden.com_k-nioh-2_3936x2215.jpg', '2021-02-15 08:43:03', '2021-02-15 08:43:03'),
(27, 36, '1613403783.windows-10-3840x2160-4k-5k-wallpaper-microsoft-blue-6992.jpg', '2021-02-15 08:43:03', '2021-02-15 08:43:03'),
(31, 36, '1613403951.windows-10-3840x2160-4k-5k-wallpaper-microsoft-blue-6992.jpg', '2021-02-15 08:45:51', '2021-02-15 08:45:51'),
(32, 36, '1613403951.windows-10-microsoft-windows-minimalist-blue-background-3840x2160-1557.jpg', '2021-02-15 08:45:51', '2021-02-15 08:45:51'),
(33, 36, '1613403951.windows-10-uhd-4k-wallpaper.jpg', '2021-02-15 08:45:52', '2021-02-15 08:45:52'),
(34, 36, '1613403952.x58BEZ.jpg', '2021-02-15 08:45:52', '2021-02-15 08:45:52'),
(35, 37, '1613569370.3175115.png', '2021-02-17 06:42:50', '2021-02-17 06:42:50'),
(36, 37, '1613569370.Darksiders-Genesis-1080P-Wallpaper.jpg', '2021-02-17 06:42:50', '2021-02-17 06:42:50'),
(37, 37, '1613569370.photo-1549740425-5e9ed4d8cd34.jpeg', '2021-02-17 06:42:50', '2021-02-17 06:42:50'),
(38, 37, '1613569370.PT_hero_42_153645159.jpg', '2021-02-17 06:42:50', '2021-02-17 06:42:50'),
(39, 38, '1613569394.10x-featured-social-media-image-size.png', '2021-02-17 06:43:14', '2021-02-17 06:43:14'),
(40, 38, '1613569394.220dbf930ed85073cb94f621baaa6c7b.jpg', '2021-02-17 06:43:14', '2021-02-17 06:43:14'),
(41, 38, '1613569394.1678884.jpg', '2021-02-17 06:43:14', '2021-02-17 06:43:14'),
(42, 45, '1613569611.3175115.png', '2021-02-17 06:46:51', '2021-02-17 06:46:51'),
(43, 45, '1613569611.Darksiders-Genesis-1080P-Wallpaper.jpg', '2021-02-17 06:46:51', '2021-02-17 06:46:51'),
(44, 45, '1613569611.photo-1549740425-5e9ed4d8cd34.jpeg', '2021-02-17 06:46:51', '2021-02-17 06:46:51'),
(45, 45, '1613569611.PT_hero_42_153645159.jpg', '2021-02-17 06:46:51', '2021-02-17 06:46:51'),
(46, 47, '1613569712.windows-10-3840x2160-4k-5k-wallpaper-microsoft-blue-6992.jpg', '2021-02-17 06:48:32', '2021-02-17 06:48:32'),
(47, 47, '1613569712.windows-10-microsoft-windows-minimalist-blue-background-3840x2160-1557.jpg', '2021-02-17 06:48:32', '2021-02-17 06:48:32'),
(48, 47, '1613569712.windows-10-uhd-4k-wallpaper.jpg', '2021-02-17 06:48:32', '2021-02-17 06:48:32'),
(49, 47, '1613569712.x58BEZ.jpg', '2021-02-17 06:48:32', '2021-02-17 06:48:32'),
(50, 51, '1613657868.windows-10-3840x2160-4k-5k-wallpaper-microsoft-blue-6992.jpg', '2021-02-18 07:17:48', '2021-02-18 07:17:48'),
(51, 51, '1613657868.windows-10-microsoft-windows-minimalist-blue-background-3840x2160-1557.jpg', '2021-02-18 07:17:48', '2021-02-18 07:17:48'),
(52, 51, '1613657868.windows-10-uhd-4k-wallpaper.jpg', '2021-02-18 07:17:48', '2021-02-18 07:17:48'),
(53, 51, '1613657868.x58BEZ.jpg', '2021-02-18 07:17:48', '2021-02-18 07:17:48'),
(54, 52, '1613658038.windows-10-3840x2160-4k-5k-wallpaper-microsoft-blue-6992.jpg', '2021-02-18 07:20:38', '2021-02-18 07:20:38'),
(55, 52, '1613658038.windows-10-microsoft-windows-minimalist-blue-background-3840x2160-1557.jpg', '2021-02-18 07:20:38', '2021-02-18 07:20:38'),
(56, 52, '1613658038.windows-10-uhd-4k-wallpaper.jpg', '2021-02-18 07:20:38', '2021-02-18 07:20:38'),
(57, 52, '1613658038.x58BEZ.jpg', '2021-02-18 07:20:38', '2021-02-18 07:20:38'),
(58, 53, '1613658058.windows-10-3840x2160-4k-5k-wallpaper-microsoft-blue-6992.jpg', '2021-02-18 07:20:58', '2021-02-18 07:20:58'),
(59, 53, '1613658058.windows-10-microsoft-windows-minimalist-blue-background-3840x2160-1557.jpg', '2021-02-18 07:20:58', '2021-02-18 07:20:58'),
(61, 53, '1613658058.x58BEZ.jpg', '2021-02-18 07:20:58', '2021-02-18 07:20:58'),
(62, 53, '1613658409.10x-featured-social-media-image-size.png', '2021-02-18 07:26:49', '2021-02-18 07:26:49'),
(63, 53, '1613658409.220dbf930ed85073cb94f621baaa6c7b.jpg', '2021-02-18 07:26:49', '2021-02-18 07:26:49'),
(64, 53, '1613658409.1678884.jpg', '2021-02-18 07:26:49', '2021-02-18 07:26:49'),
(65, 53, '1613658409.Darksiders-Genesis-1080P-Wallpaper.jpg', '2021-02-18 07:26:49', '2021-02-18 07:26:49'),
(66, 53, '1613658409.photo-1549740425-5e9ed4d8cd34.jpeg', '2021-02-18 07:26:49', '2021-02-18 07:26:49'),
(67, 53, '1613658409.PT_hero_42_153645159.jpg', '2021-02-18 07:26:49', '2021-02-18 07:26:49'),
(68, 53, '1613658409.Social-Media-Branding.png', '2021-02-18 07:26:49', '2021-02-18 07:26:49'),
(69, 53, '1613658409.TvuM20.jpg', '2021-02-18 07:26:49', '2021-02-18 07:26:49'),
(70, 53, '1613658409.wallpapersden.com_k-nioh-2_3936x2215.jpg', '2021-02-18 07:26:49', '2021-02-18 07:26:49'),
(71, 53, '1613658409.windows-10-microsoft-windows-minimalist-blue-background-3840x2160-1557.jpg', '2021-02-18 07:26:49', '2021-02-18 07:26:49'),
(72, 53, '1613658409.windows-10-uhd-4k-wallpaper.jpg', '2021-02-18 07:26:49', '2021-02-18 07:26:49'),
(73, 53, '1613658409.x58BEZ.jpg', '2021-02-18 07:26:49', '2021-02-18 07:26:49'),
(74, 54, '1613716722.Social-Media-Branding.png', '2021-02-18 23:38:42', '2021-02-18 23:38:42'),
(75, 54, '1613716722.TvuM20.jpg', '2021-02-18 23:38:42', '2021-02-18 23:38:42'),
(76, 54, '1613716722.wallpapersden.com_k-nioh-2_3936x2215.jpg', '2021-02-18 23:38:43', '2021-02-18 23:38:43'),
(77, 54, '1613716723.windows-10-3840x2160-4k-5k-wallpaper-microsoft-blue-6992.jpg', '2021-02-18 23:38:43', '2021-02-18 23:38:43'),
(78, 54, '1613716723.windows-10-microsoft-windows-minimalist-blue-background-3840x2160-1557.jpg', '2021-02-18 23:38:43', '2021-02-18 23:38:43'),
(79, 54, '1613716723.windows-10-uhd-4k-wallpaper.jpg', '2021-02-18 23:38:43', '2021-02-18 23:38:43'),
(80, 55, '1614228665.Darksiders-Genesis-1080P-Wallpaper.jpg', '2021-02-24 21:51:05', '2021-02-24 21:51:05'),
(81, 56, '1614236020.183392423_Untitled-51.jpg', '2021-02-24 23:53:40', '2021-02-24 23:53:40'),
(82, 56, '1614236020.628997965_DONG-HO-CHINH-HANG-8.jpg', '2021-02-24 23:53:40', '2021-02-24 23:53:40'),
(83, 56, '1614236020.2001779494_dong-ho-chihh-hang-3.jpg', '2021-02-24 23:53:40', '2021-02-24 23:53:40'),
(84, 57, '1614236925.183392423_Untitled-51.jpg', '2021-02-25 00:08:45', '2021-02-25 00:08:45'),
(85, 57, '1614236925.444246708_dong-ho-chihh-hang-10.jpg', '2021-02-25 00:08:45', '2021-02-25 00:08:45'),
(86, 57, '1614236925.628997965_DONG-HO-CHINH-HANG-8.jpg', '2021-02-25 00:08:45', '2021-02-25 00:08:45'),
(87, 57, '1614236925.1289690546_dmdweb2.jpg', '2021-02-25 00:08:45', '2021-02-25 00:08:45'),
(88, 57, '1614236925.1501088572_dmd1.jpg', '2021-02-25 00:08:45', '2021-02-25 00:08:45'),
(89, 57, '1614236925.1867468970_donghothoitrang10.jpg', '2021-02-25 00:08:45', '2021-02-25 00:08:45'),
(90, 57, '1614236925.1988848307_DONG-HO-CHINH-HANG-22.jpg', '2021-02-25 00:08:45', '2021-02-25 00:08:45'),
(91, 57, '1614236925.2001779494_dong-ho-chihh-hang-3.jpg', '2021-02-25 00:08:45', '2021-02-25 00:08:45'),
(92, 57, '1614236925.2030099416_dmdlenbao4.jpg', '2021-02-25 00:08:45', '2021-02-25 00:08:45'),
(93, 58, '1614237136.183392423_Untitled-51.jpg', '2021-02-25 00:12:16', '2021-02-25 00:12:16'),
(94, 58, '1614237136.444246708_dong-ho-chihh-hang-10.jpg', '2021-02-25 00:12:16', '2021-02-25 00:12:16'),
(95, 58, '1614237136.628997965_DONG-HO-CHINH-HANG-8.jpg', '2021-02-25 00:12:16', '2021-02-25 00:12:16'),
(96, 58, '1614237136.1289690546_dmdweb2.jpg', '2021-02-25 00:12:16', '2021-02-25 00:12:16'),
(97, 58, '1614237136.1501088572_dmd1.jpg', '2021-02-25 00:12:16', '2021-02-25 00:12:16'),
(98, 58, '1614237136.1867468970_donghothoitrang10.jpg', '2021-02-25 00:12:16', '2021-02-25 00:12:16'),
(99, 58, '1614237136.1988848307_DONG-HO-CHINH-HANG-22.jpg', '2021-02-25 00:12:16', '2021-02-25 00:12:16'),
(100, 58, '1614237136.2001779494_dong-ho-chihh-hang-3.jpg', '2021-02-25 00:12:16', '2021-02-25 00:12:16'),
(101, 58, '1614237136.2030099416_dmdlenbao4.jpg', '2021-02-25 00:12:16', '2021-02-25 00:12:16'),
(102, 59, '1614242570.183392423_Untitled-51.jpg', '2021-02-25 01:42:50', '2021-02-25 01:42:50'),
(103, 59, '1614242570.444246708_dong-ho-chihh-hang-10.jpg', '2021-02-25 01:42:50', '2021-02-25 01:42:50'),
(104, 59, '1614242570.628997965_DONG-HO-CHINH-HANG-8.jpg', '2021-02-25 01:42:50', '2021-02-25 01:42:50'),
(105, 59, '1614242570.1289690546_dmdweb2.jpg', '2021-02-25 01:42:50', '2021-02-25 01:42:50'),
(106, 59, '1614242570.1501088572_dmd1.jpg', '2021-02-25 01:42:50', '2021-02-25 01:42:50'),
(107, 59, '1614242570.1867468970_donghothoitrang10.jpg', '2021-02-25 01:42:50', '2021-02-25 01:42:50'),
(108, 59, '1614242570.1988848307_DONG-HO-CHINH-HANG-22.jpg', '2021-02-25 01:42:50', '2021-02-25 01:42:50'),
(109, 59, '1614242570.2001779494_dong-ho-chihh-hang-3.jpg', '2021-02-25 01:42:50', '2021-02-25 01:42:50'),
(110, 59, '1614242570.2030099416_dmdlenbao4.jpg', '2021-02-25 01:42:50', '2021-02-25 01:42:50'),
(111, 60, '1614243123.89009784_donghonhapkhau12.jpg', '2021-02-25 01:52:03', '2021-02-25 01:52:03'),
(112, 60, '1614243123.584395931_donghonu.jpg', '2021-02-25 01:52:03', '2021-02-25 01:52:03'),
(113, 60, '1614243123.1262374765_15145IG.jpg', '2021-02-25 01:52:03', '2021-02-25 01:52:03'),
(114, 60, '1614243123.1708797910_đòng-hồ-chính-hãng-24.jpg', '2021-02-25 01:52:03', '2021-02-25 01:52:03'),
(115, 60, '1614243123.1961731403_dong-ho-diamond-d-DM61195.jpg', '2021-02-25 01:52:03', '2021-02-25 01:52:03'),
(116, 60, '1614243123.2127487811_dong-ho-diamond-d-DM5308B5IG.jpg', '2021-02-25 01:52:03', '2021-02-25 01:52:03'),
(117, 62, '1614319553.183392423_Untitled-51.jpg', '2021-02-25 23:05:53', '2021-02-25 23:05:53'),
(118, 62, '1614319553.444246708_dong-ho-chihh-hang-10.jpg', '2021-02-25 23:05:53', '2021-02-25 23:05:53'),
(119, 62, '1614319553.628997965_DONG-HO-CHINH-HANG-8.jpg', '2021-02-25 23:05:53', '2021-02-25 23:05:53'),
(120, 62, '1614319553.1289690546_dmdweb2.jpg', '2021-02-25 23:05:53', '2021-02-25 23:05:53'),
(121, 62, '1614319553.1501088572_dmd1.jpg', '2021-02-25 23:05:53', '2021-02-25 23:05:53'),
(122, 62, '1614319553.1867468970_donghothoitrang10.jpg', '2021-02-25 23:05:53', '2021-02-25 23:05:53'),
(123, 62, '1614319553.1988848307_DONG-HO-CHINH-HANG-22.jpg', '2021-02-25 23:05:53', '2021-02-25 23:05:53'),
(124, 62, '1614319553.2001779494_dong-ho-chihh-hang-3.jpg', '2021-02-25 23:05:53', '2021-02-25 23:05:53'),
(125, 62, '1614319553.2030099416_dmdlenbao4.jpg', '2021-02-25 23:05:53', '2021-02-25 23:05:53'),
(126, 63, '1614326049.89009784_donghonhapkhau12.jpg', '2021-02-26 00:54:09', '2021-02-26 00:54:09'),
(127, 63, '1614326049.303830371_DỒNG-HỒ-CHÍNH-HÃNG-1.jpg', '2021-02-26 00:54:09', '2021-02-26 00:54:09'),
(128, 63, '1614326049.584395931_donghonu.jpg', '2021-02-26 00:54:09', '2021-02-26 00:54:09'),
(129, 63, '1614326049.1262374765_15145IG.jpg', '2021-02-26 00:54:09', '2021-02-26 00:54:09'),
(130, 63, '1614326049.1708797910_đòng-hồ-chính-hãng-24.jpg', '2021-02-26 00:54:09', '2021-02-26 00:54:09'),
(131, 63, '1614326049.1961731403_dong-ho-diamond-d-DM61195.jpg', '2021-02-26 00:54:09', '2021-02-26 00:54:09'),
(132, 63, '1614326049.2074122347_đòng-hồ-chính-hãng-32.jpg', '2021-02-26 00:54:09', '2021-02-26 00:54:09'),
(133, 63, '1614326049.2127487811_dong-ho-diamond-d-DM5308B5IG.jpg', '2021-02-26 00:54:09', '2021-02-26 00:54:09'),
(134, 64, '1614326119.89009784_donghonhapkhau12.jpg', '2021-02-26 00:55:19', '2021-02-26 00:55:19'),
(135, 64, '1614326119.303830371_DỒNG-HỒ-CHÍNH-HÃNG-1.jpg', '2021-02-26 00:55:19', '2021-02-26 00:55:19'),
(136, 64, '1614326119.584395931_donghonu.jpg', '2021-02-26 00:55:19', '2021-02-26 00:55:19'),
(137, 64, '1614326119.1262374765_15145IG.jpg', '2021-02-26 00:55:19', '2021-02-26 00:55:19'),
(138, 64, '1614326119.1708797910_đòng-hồ-chính-hãng-24.jpg', '2021-02-26 00:55:19', '2021-02-26 00:55:19'),
(139, 64, '1614326119.1961731403_dong-ho-diamond-d-DM61195.jpg', '2021-02-26 00:55:19', '2021-02-26 00:55:19'),
(140, 64, '1614326119.2074122347_đòng-hồ-chính-hãng-32.jpg', '2021-02-26 00:55:19', '2021-02-26 00:55:19'),
(141, 64, '1614326119.2127487811_dong-ho-diamond-d-DM5308B5IG.jpg', '2021-02-26 00:55:19', '2021-02-26 00:55:19'),
(142, 65, '1614326185.89009784_donghonhapkhau12.jpg', '2021-02-26 00:56:25', '2021-02-26 00:56:25'),
(143, 65, '1614326185.303830371_DỒNG-HỒ-CHÍNH-HÃNG-1.jpg', '2021-02-26 00:56:25', '2021-02-26 00:56:25'),
(144, 65, '1614326185.584395931_donghonu.jpg', '2021-02-26 00:56:25', '2021-02-26 00:56:25'),
(145, 65, '1614326185.1262374765_15145IG.jpg', '2021-02-26 00:56:25', '2021-02-26 00:56:25'),
(146, 65, '1614326185.1708797910_đòng-hồ-chính-hãng-24.jpg', '2021-02-26 00:56:25', '2021-02-26 00:56:25'),
(147, 65, '1614326185.1961731403_dong-ho-diamond-d-DM61195.jpg', '2021-02-26 00:56:25', '2021-02-26 00:56:25'),
(148, 65, '1614326185.2074122347_đòng-hồ-chính-hãng-32.jpg', '2021-02-26 00:56:25', '2021-02-26 00:56:25'),
(149, 65, '1614326185.2127487811_dong-ho-diamond-d-DM5308B5IG.jpg', '2021-02-26 00:56:25', '2021-02-26 00:56:25'),
(150, 66, '1614326249.89009784_donghonhapkhau12.jpg', '2021-02-26 00:57:29', '2021-02-26 00:57:29'),
(151, 66, '1614326249.303830371_DỒNG-HỒ-CHÍNH-HÃNG-1.jpg', '2021-02-26 00:57:29', '2021-02-26 00:57:29'),
(152, 66, '1614326249.584395931_donghonu.jpg', '2021-02-26 00:57:29', '2021-02-26 00:57:29'),
(153, 66, '1614326249.1262374765_15145IG.jpg', '2021-02-26 00:57:29', '2021-02-26 00:57:29'),
(154, 66, '1614326249.1708797910_đòng-hồ-chính-hãng-24.jpg', '2021-02-26 00:57:29', '2021-02-26 00:57:29'),
(155, 66, '1614326249.1961731403_dong-ho-diamond-d-DM61195.jpg', '2021-02-26 00:57:29', '2021-02-26 00:57:29'),
(156, 66, '1614326249.2074122347_đòng-hồ-chính-hãng-32.jpg', '2021-02-26 00:57:29', '2021-02-26 00:57:29'),
(157, 66, '1614326249.2127487811_dong-ho-diamond-d-DM5308B5IG.jpg', '2021-02-26 00:57:29', '2021-02-26 00:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `articlecategory_id` int(11) NOT NULL,
  `hot` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `name`, `slug`, `articlecategory_id`, `hot`, `status`, `description`, `avatar`, `content`, `created_at`, `updated_at`) VALUES
(8, 'Mua ngay Đồng hồ Vàng ngày vía thần tài để rước lộc may mắn cả năm!', 'mua-ngay-dong-ho-vang-ngay-via-than-tai-de-ruoc-loc-may-man-ca-nam-8', 74, 0, 1, 'Ngày vía Thần Tài được coi là ngày quan trọng trong năm đối với người làm kinh doanh. Thần tài là vị thần đem lại tiền tài, may mắn đến cho gia đình.', '1614364170.jpg', '<p><strong>1. Nguồn gốc và ý nghĩa ngày Thần tài</strong></p><p>Theo truyền thuyết từ xưa, Thần Tài là tiên nhân trên trời. Đây là vị thần nổi tiếng trong việc chuyên cai quản tiền bạc, tài lộc. Trong một lần đi chơi uống rượu, Thần Tài say quá nên rơi xuống trần gian. Khi tỉnh dậy Thần Tài bị mất trí nhớ phải đi xin ăn. Lạ kỳ, khi Thần Tài vào nhà nào xin ăn thì nhà đó buôn may bán đắt và trở nên giàu có. Vậy nên dân gian mới có câu “Thần Tài gõ cửa”.</p><p>Đến một ngày nọ, Thần Tài nhớ ra mọi chuyện và bay về trời. Đó là ngày mùng 10 tháng Giêng. Để tưởng nhớ Thần Tài, mọi người chọn ngày này là ngày vía Thần Tài. Từ đó, vào ngày này hàng năm người dân lại sắm sửa lễ vật cúng Thần Tài và mua vàng để cầu tài lộc may mắn, sung túc cho cả năm. Ai cũng mong muốn công việc làm ăn của mình thuận lợi, ai cũng mong được Thần Tài giúp đỡ trong năm mới.</p><p><strong>2. Ngày vía Thần tài 2021 là ngày nào?</strong><br><br>Theo lịch âm dương, ngày vía Thần Tài là ngày mùng 10 tháng Giêng âm lịch hàng năm. Vào ngày này, những người làm ăn, buôn bán thường sắm sửa lễ vật cúng Thần Tài và mua vàng ngày vía Thần Tài để cầu may, mong 1 năm buôn may bán đắt.</p><p>Năm nay, ngày Thần Tài năm 2021 rơi vào ngày Chủ nhật, ngày 21 tháng 2 năm 2021 theo dương lịch. Thực ra dân kinh doanh vẫn cúng ngày vía Thần Tài hàng tháng, tuy nhiên ngày 10 tháng Giêng được cho là ngày vía Thần Tài quan trọng nhất trong năm.</p><p>Theo chuyên gia phong thủy thì&nbsp;<strong>cúng thần tài giờ nào tốt</strong>&nbsp;không quan trọng bằng sự thành tâm. Trong ngày này thì gia chủ nên cúng vào các khung giờ Hoàng đạo sau:&nbsp;</p><ul><li><i><strong>Giờ Tý: 0h00</strong></i></li><li><i><strong>Giờ Sửu:&nbsp; 1h -3h</strong></i></li><li><i><strong>Giờ Mão: 5h -7h</strong></i></li><li><i><strong>Giờ Ngọ : 11h -13h</strong></i></li><li><i><strong>Giờ Thân: 15h -17h</strong></i></li><li><i><strong>Giờ Dậu: 17h -19h</strong></i></li></ul><p>Vào các ngày khác trong năm, gia chủ nên chọn&nbsp;<strong>thắp hương thần tài vào lúc nào</strong>&nbsp;ngay sau khi mở cửa để đón nhận lộc tài sớm. Có thể xem giờ hoàng đạo trong ngày để tiến hành cúng/ khấn, thắp hương cũng rất tốt cho hoạt động kinh doanh buôn bán.</p><h3>Ngày vía Thần tài nên mua gì để rước lộc may mắn cả năm</h3><p>Một phong tục rất phổ biến trong ngày vía Thần Tài của người dân Việt Nam là mua vàng để dâng lên bàn thờ cúng Thần Tài hoặc để tích trữ với mong muốn có 1 năm tiền bạc rủng rỉnh.<br><i><strong>Mua vàng tích trữ - đầu tư</strong></i><br><i><strong>Trang sức vàng – Đồng hồ Vàng Khai vận năm mới:</strong></i></p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong_ho_ngay_than_tai_2021.jpg\" alt=\"ĐỒNG HỒ PHILIPPE AUGUSTE PA-555.2\"></figure><p><a href=\"https://www.dangquangwatch.vn/sp/18083/dong-ho-philippe-auguste-pa-5552.html\"><i>ĐỒNG HỒ PHILIPPE AUGUSTE PA-555.2</i></a></p><p><i>V</i>ào ngày Thần Tài, nhiều người, nhất là những người làm ăn kinh doanh thường chọn mua 1 số trang sức, vật phẩm phong thủy để đổi vía, lấy hên đầu năm như, dây chuyền, Đồng hồ, vòng tay phong thủy,…cầu mong công việc thuận buồm xuôi gió, gặp nhiều may mắn. Nhiều người quan niệm rằng, những vật phẩm phong thủy vốn đã đem lại may mắn, nay mua vào đúng ngày Thần Tài thì may mắn sẽ được nhân đôi, giúp gia chủ “rước lộc, rước hên” vào nhà.<br><br>Mẫu đồng hồ Philippe Auguste phiên bản Kim Ngưu – mang linh vật con Trâu: con giáp đại diện cho năm 2021 cũng là sản phẩm được khách hàng săn đón trong ngày vía Thần Tài tới đây. Mua đồng hồ vàng hình con giáp ngày Thần Tài sẽ giúp cả năm thịnh vượng và may mắn vì được con vật phù trợ. Con trâu là đầu cơ nghiệp – linh vật gần với con người Việt Nam, hiền lành nhưng rất mạnh mẽ, siêng năng. Trâu mang ý nghĩa trấn yểm đất đai, mang đến cuộc sống sung túc, dư dả.</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong_ho_ngay_than_tai_2021_1.jpg\" alt=\"Đồng hồ chính hãng PA-555.1\"></figure><p><a href=\"https://www.dangquangwatch.vn/sp/18082/dong-ho-philippe-auguste-pa-5551.html\"><i>Đồng hồ Philippe Auguste PA-555.1</i></a></p><p>Đồng hồ còn là một motn phụ kiện thòi trang hoàn hảo mà còn được tin rằng sẽ đem tới may mắn cho người đeo khi năm mới đang đến. Vàng thuộc hành kim, tượng trưng cho tài vận, tiền bạc. Nhiều người quan niệm, sở hữu một chiếc dồng hồ vàng vào những ngày xuân năm mới và ngày Thần Tài để luôn mang theo bên mình chính là sở hữu cho mình một lá bùa cho năm mới như ý, mang lại năng lượng tích cực, hộ mệnh và mang lại tài vận cho người đeo.</p><p><br><i><strong>Mời quý khách tham khảo đặt mua ngay những mẫu đồng hồ Vàng – rước vía thần tài hot nhất 2021</strong></i></p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/upload/img_big/1512341723_donghonhapkhau55.jpg\" alt=\"Đồng hồ Aries Gold AG-G1009 G-RW\"></figure><p><a href=\"https://www.dangquangwatch.vn/sp/14493/dong-ho-aries-gold-ag-g1009-g-rw.html\"><i>Đồng hồ Aries Gold AG-G1009 G-RW</i></a></p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/upload/img_big/970653085_D%E1%BB%92NG-H%E1%BB%92-CH%C3%8DNH-H%C3%83NG-1.jpg\" alt=\"Đồng hồ Atlantic Swiss AT-29038.45.27MB\"></figure><p><a href=\"https://www.dangquangwatch.vn/sp/14949/dong-ho-atlantic-swiss-at-290384527mb.html\"><i>Đồng hồ Atlantic Swiss AT-29038.45.27MB</i></a></p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/upload/img_big/1518436098_dong-ho-chihh-hang-16.jpg\" alt=\"Đồng hồ Epos Swiss E-3437.132.22.16.32\"></figure><p><a href=\"https://www.dangquangwatch.vn/sp/14960/dong-ho-epos-swiss-e-3437132221632.html\"><i>Đồng hồ Epos Swiss E-3437.132.22.16.32</i></a></p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong_ho_nam_jacques_lemans_122020.jpg\" alt=\"Đồng hồ nam chính hãng\"></figure><p><a href=\"https://www.dangquangwatch.vn/sp/dong-ho-jacques-lemans.html\"><i>Đồng hồ Jacqueslemans</i></a><i>&nbsp;luôn nằm trong danh sách sản phẩm được khách hàng yêu thích nhất tại Đăng Quang Watch.</i></p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/upload/product/1120347529_1066729312_850292830_donghonu43.jpg\" alt=\"Đồng hồ Diamond D DM46325IG\"></figure><p><a href=\"https://www.dangquangwatch.vn/sp/18011/dong-ho-diamond-d-dm46325ig.html\"><i>Đồng hồ Diamond D DM46325IG</i></a></p>', '2021-02-26 11:29:30', '2021-02-26 11:29:30'),
(9, 'THƯ CẢM ƠN VÀ CHÚC MỪNG NĂM MỚI 2021', 'thu-cam-on-va-chuc-mung-nam-moi-2021-9', 74, 0, 1, 'Vậy là chỉ còn ít thời gian nữa năm cũ sẽ qua đi và năm mới lại đến. Cùng nhau khép lại năm cũ và chào đón một năm mới thật ý nghĩa, ĐĂNG QUANG WATCH xin gửi những lời chúc tốt đẹp nhất đến Quý khách hàng và đối tác. Kính chúc Quý khách hàng và đối tác cùng gia đình sẽ có một năm mới:', '1614364292.jpg', '<p>Năm 2020, là một năm có nhiều khó khăn và thách thức. Nhưng với tinh thần nỗ lực vượt khó của toàn thể đội ngũ nhân viên và ban lãnh đạo ĐĂNG QUANG WATCH – Cùng sự đồng hành, ủng hộ, tin tưởng tuyệt đối và giúp đỡ nhiệt tình của Quý khách hàng và Đối tác. Đã tạo động lực để ĐĂNG QUANG WATCH tiếp tục phát huy nội lực quyết tâm duy trì và tổ chức lại doanh nghiệp từng bước phát triển.</p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/chuc_mung_nam_moi_tab.jpg\" alt=\"Cười đón tài lộc\"></figure><p><i>Checkin liền tay - Nhận ngay IPhone 12 Promax</i></p><p>&nbsp;</p><p>Bước sang năm mới 2021, tiếp nối các thành công đã đạt được, ĐĂNG QUANG WATCH tiếp thu những ý kiến quý báu từ Khách Hàng, đưa ra thêm những Dịch vụ/Sản phẩm mới, tăng cường chất lượng thương hiệu để tự hoàn thiện mình từ đó mang lại những trải nghiệm tốt nhất, sự hài lòng và hạnh phúc cho Khách Hàng và Đối Tác.</p><p>Cuối cùng bằng tất cả sự kính trọng, ĐĂNG QUANG WATCH chân thành cảm ơn sự đồng hành quý báu của Quý Khách hàng trong suốt chặng đường phát triển vừa qua và mong muốn tiếp tục nhận được sự ủng hộ và hợp tác tốt đẹp từ Quý khách hàng và Đối tác.<br>Khép lại năm cũ chào đón năm mới 2021 với tinh thần chủ động, đổi mới và sáng tạo, tự tin chinh phục những thách thức của con đường phía trước, ĐĂNG QUANG WATCH một lần nữa xin gửi tới Quý khách hàng và gia đình một năm mới:</p><h4><strong>“Dồi dào Sức Khỏe – An Khang Thịnh Vượng – Vạn Sự Như Ý“</strong></h4>', '2021-02-26 11:31:32', '2021-02-26 11:31:32'),
(10, 'Đồng hồ đeo tay món quà ý nghĩa gắn kết yêu thương. Khuyến mại cực lớn nhân dịp Valentine 14/2', 'dong-ho-deo-tay-mon-qua-y-nghia-gan-ket-yeu-thuong-khuyen-mai-cuc-lon-nhan-dip-valentine-142-10', 74, 0, 1, 'Sắp đến ngày lễ tình yêu 14/2 mà bạn vẫn chưa nghĩ ra được món quà gì đặc biệt hơn so với mọi năm để dành tặng nửa kia của mình?', '1614364373.jpg', '<p>Tặng quà tưởng chừng là việc vô cùng đơn giản nhưng thật ra lại khiến biết bao chàng trai, cô gái đau đầu vì không biết nên chọn món quà nào thật ý nghĩa.</p><p>Chào đón Valentine – ngày của tình yêu ngọt ngào, Đăng Quang Watch chắc chắn sẽ giúp các cặp tình nhân đang tìm kiếm món quà dành tặng người mình yêu thương nhân dịp ngày lễ tình nhân 14/2 sắp tới lựa chọn được mẫu đồng hồ đôi không chỉ ý nghĩa mà còn vô cùng tinh tế, đặc biệt là phù hợp với khả năng tài chính của các cặp đôi với những chương trình khuyến mại cực hấp dẫn.</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/valentine_qua_tang_dong_ho.jpg\" alt=\"Khuyến mãi Valentine14/2\"></figure><p><i>Khuyến mãi Valentine14/2 - Đồng hồ món quà ý nghĩa gắn kết yêu thương</i></p><p>&nbsp;</p><p>Đồng hồ đeo tay được ví như hiện thân của thời gian - thứ tài sản vô hình nhưng vô cùng quý giá trong cuộc sống. Tặng đồng hồ, giống như bạn “tình nguyện” trao cho người kia quỹ thời gian của mình, như một lời cam kết bên nhau dài lâu. Mỗi giây phút về sau của các bạn sẽ luôn đáng trân trọng và ngập tràn hạnh phúc.</p><p>&nbsp;</p><p>Khi hai bạn không ở gần nhau, chiếc đồng hồ lại thay bạn bên cạnh người ấy, nhắc nhớ thời gian, nhắc nhớ sự kiện, kỷ niệm quan trọng. Hình ảnh của bạn xuất hiện mỗi lần người ấy đưa tay xem giờ. Thật hạnh phúc phải không? Có lẽ, chỉ những người đang yêu mới cảm nhận được hết sự ngọt ngào và lãng mạn của món quà thời gian.</p><p>&nbsp;</p><p><strong>Chào đón ngày Valentine, Đăng Quang Watch gửi đến quý khách hàng chương trình khuyến mãi cực khủng :</strong></p><ul><li>Khuyến mãi giảm 10% cho tất cả các mã đồng hồ khi mua kèm bút ký (Giảm thêm 5% khi có thẻ Member, 10% với thẻ VIP)</li><li>Flash Sale&nbsp; Giảm giá 30% các mẫu sản phẩm HOT trong ngày.</li><li>Checkin liền tay - Nhận ngay IPhone 12 Promax (TRAO GIÁ TRỊ, NHẬN NỤ CƯỜI)</li></ul><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/chuc_mung_nam_moi_tab.jpg\" alt=\"Cười đón tài lộc\"></figure><p><i>Checkin liền tay - Nhận ngay IPhone 12 Promax</i></p><p>&nbsp;</p><p><i><strong>Đăng Quang Watch xin giới thiệu tới quý khách hàng BST đồng hồ Nam, nữ và đồng hồ đôi &nbsp;mới nhất 2021 để quý khách hàng lựa chọn làm quà tặng valentine ý nghĩa cho một nửa kia của mình nhé</strong></i></p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong_ho_nu_diamond_d_1(1).jpg\" alt=\"Đồng hồ nữ Diamond D\"></figure><p><a href=\"https://www.dangquangwatch.vn/sp/18007/dong-ho-diamond-d-dm46325rg-r.html\"><i>Món quà ý nghĩa 14/2 - Đồng hồ nữ&nbsp;DM46325RG-R</i></a></p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong_ho_nam_philippe_Auguste_2021_1.jpg\" alt=\"Đồng hồ nam\"></figure><p><a href=\"https://www.dangquangwatch.vn/sp/17759/dong-ho-philippe-auguste-pa5008c.html\"><i>Đồng hồ nam Philippe Auguste PA5008C</i></a></p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong_ho_nu_diamond_d_2021_2.jpg\" alt=\"Đồng hồ Diamond D DM64205W-R\"></figure><p><a href=\"https://www.dangquangwatch.vn/sp/11616/dong-ho-diamond-d-dm64205w-r.html\"><i>Đồng hồ Diamond D DM64205W-R</i></a></p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong_ho_nam_philippe_Auguste_2021_2(1).jpg\" alt=\"Đồng hồ Philippe Auguste PA5002F\"></figure><p><a href=\"https://www.dangquangwatch.vn/sp/17713/dong-ho-philippe-auguste-pa5002f.html\"><i>Đồng hồ Philippe Auguste PA5002F</i></a></p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong_ho_nu_diamond_d_2021_3.jpg\" alt=\"Đồng hồ nữ Diamond D\"></figure><p><a href=\"https://www.dangquangwatch.vn/sp/18023/dong-ho-diamond-d-dm4633b5ig.html\"><i>Đồng hồ nữ Diamond DM4633B5IG</i></a></p><p><i><strong>Để biết thêm chi tiết về các chương trình khuyến mãi, thông tin sản phẩm quý khách vui lòng liên hệ:</strong></i></p><p>Đăng Quang Watch – Đẳng cấp doanh nhân, phong cách thượng lưu</p><p>Hotline: 1800 6005 - 098 668 1189</p><p>Wesbite:&nbsp;<a href=\"http://www.dangquangwatch.vn/\">www.dangquangwatch.vn</a></p>', '2021-02-26 11:32:53', '2021-02-26 11:32:53'),
(11, 'Giảm đến 50% Chào đón Giáng sinh và năm mới 2021', 'giam-den-50-chao-don-giang-sinh-va-nam-moi-2021-11', 75, 0, 1, 'Noel - Mùa của những yêu thương. Thời điểm chuẩn bị khép lại năm cũ 2020 và chào đón năm mới 2021, Đăng Quang Watch kính chúc Quý khách hàng và gia đình đón một mùa Giáng Sinh an lành, hạnh phúc cùng một năm mới an khang, thịnh vượng.', '1614364506.jpg', '<p>Như một món quà đầy yêu thương, <strong>Đăng Quang Watch</strong>&nbsp;xin gửi đến Quý khách chương trình&nbsp;<strong>Khuyến mãi Noel – Tết dương lịch 2021</strong>&nbsp;thay cho lời cảm ơn sâu sắc với những khách hàng đã luôn quan tâm, ủng hộ và sử dụng các sản phẩm của <strong>Đăng Quang Watch&nbsp;</strong>trong suốt thời gian qua.</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/merry-christmas-tab.jpg\" alt=\"SALE chào mừng Noel và năm mới\"></figure><p><i>Giảm đến 50% Chào đón Giáng sinh và năm mới 2021</i></p><h3><strong>Chương trình giảm giá chi tiết như sau:&nbsp;</strong></h3><p>- Giảm giá ngày <strong>20%</strong> Đồng hồ - Kính mắt - Hộp xoay đồng hồ - Phụ kiện dây đồng hồ <i>(Điều kiện: Mua kèm </i><a href=\"https://www.dangquangwatch.vn/sp/but-ky-cao-cap.html\"><i>Bút ký cao cấp</i></a><i>)</i></p><ul><li><i>Thẻ member giảm thêm 5%</i></li><li><i>Thẻ VIP giảm thêm 10%</i></li></ul><p>- Chương trình Flash Sale giảm đến 30% (<a href=\"https://www.dangquangwatch.vn/flash-sale.html\">Click Xem chi tiết</a>)</p><p>- Tham gia đấu giá sản phẩm giá khởi điểm giảm 50% (<a href=\"https://daugia.tv/\">Click tham gia đấu giá</a>)</p><p><i>Chương trình khuyến mại áp dụng từ 18/12/2020 đến 05/01/2021</i></p><p><i>Ngoài ra <strong>Đăng Quang</strong> còn áp dụng chương trình tri ân Quý khách hàng \"</i><strong>BẠN CƯỜI MAY MẮN Ở BÊN BẠN - CƠ HỘI TRÚNG ĐIỆN THOẠI IPHONE 12</strong>\" (<a href=\"https://www.dangquangwatch.vn/tin-tuc/736/DQW-Doi-nu-cuoi-lay-Iphone-12-%E2%80%93-Ban-co-muon-thu.html\"><i>Click tham gia chương trình</i></a>)</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-nu-diamond-d.jpg\" alt=\"Đồng hồ nữ Diamond D\"></figure><p><a href=\"https://www.dangquangwatch.vn/sp/dong-ho-diamond-d.html\"><i>Diamond D đốn tim phái đẹp ngay từ cái nhìn đầu tiên</i></a></p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dongh-ho-nam-pa-kinh-pa.jpg\" alt=\"Đồng hồ và kính mắt Philippe Auguste luôn có sức hấp dẫn đối với phái mạnh\"></figure><p><a href=\"https://www.dangquangwatch.vn/sp/dong-ho-nam.html\"><i>Đồng hồ và kính mắt Philippe Auguste luôn có sức hấp dẫn đối với phái mạnh</i></a></p><p>&nbsp;</p><p><i><strong>Để biết thêm chi tiết về các chương trình khuyến mãi, thông tin sản phẩm quý khách vui lòng liên hệ:</strong></i></p><p>Đăng Quang Watch – Đẳng cấp doanh nhân, phong cách thượng lưu</p><p>Hotline: 1800 6005 - 098 668 1189</p><p>Wesbite:&nbsp;<a href=\"http://www.dangquangwatch.vn/\">www.dangquangwatch.vn</a></p><p>Facebook:&nbsp;<a href=\"https://www.facebook.com/donghodangquang/\">https://www.facebook.com/donghodangquang/</a></p><p>Instagram:<a href=\"https://www.instagram.com/dangquang_official/?fbclid=IwAR3haQ21qeCONLLIdsMFUy6Jk4j1Pf77OJAVE9U2ZwX9l4xOKGvjOMP3lCY\">https://www.instagram.com/dangquang_official/</a></p><p><br>&nbsp;</p>', '2021-02-26 11:35:06', '2021-02-26 11:35:06'),
(12, 'DQW Đổi nụ cười lấy Iphone 12 – Bạn có muốn thử?', 'dqw-doi-nu-cuoi-lay-iphone-12-ban-co-muon-thu-12', 75, 0, 1, 'Trong khi Iphone 12 chính hãng vẫn đang khiến các tín đồ “Mê Táo” chao đảo săn lùng với mức giá khá cao, để mua hàng còn cần phải đặt trước, phải xếp hàng thì tại Đăng Quang Watch sở hữu siêu phẩm Iphone đời mới nhất chưa bao giờ dễ dàng như thế với chương trình khuyến mại cực kì hấp dẫn “Bạn cười may mắn sẽ ở bên bạn”', '1614364572.jpg', '<p>Chỉ cần chụp một bức ảnh cười thật tươi khi mua hàng tại Đăng Quang Watch là đã có thể trở thành chủ nhân của Iphone 12 rồi. Nụ cười không chỉ khiến chúng ta rạng rỡ hơn, yêu đời hơn mà còn mang đến rất nhiều may mắn trong cuộc sống, giúp chúng ta thành công và hạnh phúc mỗi ngày.</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/khac_hang_dang_quang_watch.jpg\" alt=\"Khách hàng mua sắm tại Đăng Quang Watch\"></figure><p><i>Khách hàng mua sắm tại Đăng Quang Watch</i></p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/Lan_Ngoc_2020_Tang_Iphone_12.jpg\" alt=\"Diễn viên Lan Ngọc\"></figure><p><i>Diễn viên: Ninh Dương Lan Ngọc</i></p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/Trung_ruoi_Dang_Quang_Watch_122020.jpg\" alt=\"Trung Ruồi tham gia chương trình tại Đăng Quang\"></figure><p><i>Nghệ sỹ Trung Ruồi tham gia chương trình đổi nụ cười lấy Iphone 12</i></p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/hoang_duc_tham_gia_cung_dang_quang.jpg\" alt=\"Cầu Thủ Hoàng Đức\"></figure><p><i>Cầu Thủ: Hoàng Đức</i></p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/Quynh_Kool_Dang_Quang_Watch_122020.jpg\" alt=\"Diễn Viên Quỳnh Kool\"></figure><p><i>Diễn Viên Quỳnh Kool</i></p><p>Chương trình được áp dụng trên hệ thống 100 showroom Đăng Quang Watch trên toàn quốc, kể từ ngày 2/12/2020 đến hết 1/1/2021. Vì vậy quý khách hàng hãy nhanh chân đến với cửa hàng gần nhất tham khảo lựa chọn sản phẩm đồng hồ, kính mắt mình yêu thích và tham gia ngay gia chương trình “Bạn cười may mắn sẽ ở bên bạn” để trở thành những người đầu tiên sở hữu Iphone 12 chính hãng.</p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong_ho_epos_swiss_122020.jpg\" alt=\"Đồng hồ Epos Swiss chính hãng\"></figure><p><a href=\"https://www.dangquangwatch.vn/sp/dong-ho-epos-swiss.html\"><i>Đồng hồ Thuỵ Sỹ Epos lịch lãm và đẳng cấp</i></a></p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/Dong_ho_nu_diamond_d_122020.jpg\" alt=\"Đồng hồ nữ Diamond D\"></figure><p><a href=\"https://www.dangquangwatch.vn/sp/dong-ho-diamond-d.html\"><i>Đồng hồ nữ chính hãng Diamond D</i></a></p><p><br>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/Dong_ho_nu_diamond_d_1220201.jpg\" alt=\"Đồng hồ cao cấp Diamond D\"></figure><p><br><i>Ngoài cơ hội trúng Iphone 12, khách hàng mua đồng hồ nữ Diamond D giá chỉ từ trên 4 triệu đồng sẽ nhận ngay cặp kính mắt thời trang Diamond D trị giá 6 triệu đồng</i></p><p>&nbsp;</p><p>Với mong muốn lan toả niềm vui, ý nghĩa may mắn khi chúng ta nở nụ cười không chỉ với giải thưởng siêu khủng mà Đăng Quang Watch còn dành tặng nhiều phần quà giá trị khác như: Kính mắt thời trang, bút kí, chương trình được áp dụng cho tất cả các quý khách hàng đến tham quan mua sắm tại Đăng Quang Watch, chỉ duy nhất trong tháng 12 này.</p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong_ho_nam_jacques_lemans_122020.jpg\" alt=\"Đồng hồ nam chính hãng\"></figure><p><a href=\"https://www.dangquangwatch.vn/sp/dong-ho-jacques-lemans.html\"><i>Đồng hồ Jacqueslemans</i></a><i> luôn nằm trong danh sách sản phẩm được khách hàng yêu thích nhất tại Đăng Quang Watch.</i></p><p>Để biết thêm chi tiết về các chương trình khuyến mãi, thông tin sản phẩm quý khách vui lòng liên hệ:</p><p>Đăng Quang Watch – Đẳng cấp doanh nhân, phong cách thượng lưu</p><p>Hotline: 1800 6005 - 098 668 1189</p><p>Wesbite:&nbsp;<a href=\"http://www.dangquangwatch.vn/\">www.dangquangwatch.vn</a></p><p>Facebook:&nbsp;<a href=\"https://www.facebook.com/donghodangquang/\">https://www.facebook.com/donghodangquang/</a></p><p>Instagram:<a href=\"https://www.instagram.com/dangquang_official/?fbclid=IwAR3haQ21qeCONLLIdsMFUy6Jk4j1Pf77OJAVE9U2ZwX9l4xOKGvjOMP3lCY\">https://www.instagram.com/dangquang_official/</a></p>', '2021-02-26 11:36:12', '2021-02-26 11:36:12'),
(13, 'Tuyển dụng vị trí bán hàng', 'tuyen-dung-vi-tri-ban-hang-13', 76, 0, 1, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '1614364850.jpeg', '<h3><strong>The standard Lorem Ipsum passage, used since the 1500s</strong></h3><p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p><h3><strong>Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</strong></h3><p>\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p><h3><strong>1914 translation by H. Rackham</strong></h3><p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p><h3><strong>Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</strong></h3><p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p><h3><strong>1914 translation by H. Rackham</strong></h3><p>\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', '2021-02-26 11:38:51', '2021-02-26 11:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `articlecategory`
--

CREATE TABLE `articlecategory` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articlecategory`
--

INSERT INTO `articlecategory` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(74, 'Tin tức', 'tin-tuc-74', 1, '2021-02-25 05:21:53', '2021-02-25 05:21:53'),
(75, 'Sự kiện', 'su-kien-75', 1, '2021-02-25 05:22:01', '2021-02-25 05:22:01'),
(76, 'Tuyển dụng', 'tuyen-dung-76', 1, '2021-02-26 11:25:35', '2021-02-26 11:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `attr`
--

CREATE TABLE `attr` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_parent_id` int(11) NOT NULL DEFAULT 0,
  `a_category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attr`
--

INSERT INTO `attr` (`id`, `a_name`, `a_slug`, `a_parent_id`, `a_category_id`, `created_at`, `updated_at`, `status`) VALUES
(46, 'Thương hiệu', 'thuong-hieu-46', 0, 19, '2021-02-24 23:24:40', '2021-02-24 23:24:40', 1),
(47, 'Mức giá', 'muc-gia-47', 0, 19, '2021-02-24 23:25:24', '2021-02-24 23:25:24', 1),
(48, 'Đường kính mặt', 'duong-kinh-mat-48', 0, 19, '2021-02-24 23:26:13', '2021-02-24 23:26:13', 1),
(49, 'Năng lượng sử dụng', 'nang-luong-su-dung-49', 0, 19, '2021-02-24 23:26:26', '2021-02-24 23:26:26', 1),
(50, 'Loại dây', 'loai-day-50', 0, 19, '2021-02-24 23:26:32', '2021-02-24 23:26:32', 1),
(51, 'Diamond D', 'diamond-d-51', 46, 19, '2021-02-24 23:28:09', '2021-02-24 23:28:09', 1),
(52, 'Q&Q', 'qq-52', 46, 19, '2021-02-24 23:28:28', '2021-02-24 23:28:28', 1),
(53, 'Citizen', 'citizen-53', 46, 19, '2021-02-24 23:28:44', '2021-02-24 23:28:44', 1),
(54, 'Dưới 2 triệu', 'duoi-2-trieu-54', 47, 19, '2021-02-24 23:29:39', '2021-02-24 23:29:39', 1),
(55, 'Từ 2-5 triệu', 'tu-2-5-trieu-55', 47, 19, '2021-02-24 23:29:54', '2021-02-24 23:29:54', 1),
(56, 'Từ 5-10 Triệu', 'tu-5-10-trieu-56', 47, 19, '2021-02-24 23:30:13', '2021-02-24 23:30:13', 1),
(57, 'Trên 10 triệu', 'tren-10-trieu-57', 47, 19, '2021-02-24 23:31:12', '2021-02-24 23:31:12', 1),
(58, 'Dưới 25mm', 'duoi-25mm-58', 48, 19, '2021-02-24 23:32:44', '2021-02-24 23:32:44', 1),
(59, 'Từ 25-37 mm', 'tu-25-37-mm-59', 48, 19, '2021-02-24 23:33:05', '2021-02-24 23:33:05', 1),
(60, 'Trên 37 mm', 'tren-37-mm-60', 48, 19, '2021-02-24 23:33:40', '2021-02-24 23:33:40', 1),
(61, 'Đồng hồ cơ', 'dong-ho-co-61', 49, 19, '2021-02-24 23:33:56', '2021-02-24 23:33:56', 1),
(62, 'Đồng hồ điện tử', 'dong-ho-dien-tu-62', 49, 19, '2021-02-24 23:34:09', '2021-02-24 23:34:09', 1),
(63, 'Dây da', 'day-da-63', 50, 19, '2021-02-24 23:34:31', '2021-02-24 23:34:31', 1),
(64, 'Dây mạ vàng', 'day-ma-vang-64', 50, 19, '2021-02-24 23:34:40', '2021-02-24 23:34:40', 1),
(65, 'Dây nhựa', 'day-nhua-65', 50, 19, '2021-02-24 23:34:53', '2021-02-24 23:34:53', 1),
(66, 'Thương hiệu', 'thuong-hieu-66', 0, 20, '2021-02-26 10:18:37', '2021-02-26 10:18:37', 1),
(67, 'Prada', 'prada-67', 66, 20, '2021-02-26 10:18:55', '2021-02-26 10:18:55', 1),
(68, 'Coach', 'coach-68', 66, 20, '2021-02-26 10:19:20', '2021-02-26 10:19:20', 1),
(69, 'Vogue', 'vogue-69', 66, 20, '2021-02-26 10:19:33', '2021-02-26 10:19:33', 1),
(70, 'Mức giá', 'muc-gia-70', 0, 20, '2021-02-26 10:20:47', '2021-02-26 10:20:47', 1),
(73, 'Dưới 1 triệu', 'duoi-1-trieu-73', 70, 20, '2021-02-26 10:23:20', '2021-02-26 10:23:20', 1),
(74, 'Từ 1-3 triệu', 'tu-1-3-trieu-74', 70, 20, '2021-02-26 10:23:57', '2021-02-26 10:23:57', 1),
(75, 'Từ 3-5 triệu', 'tu-3-5-trieu-75', 70, 20, '2021-02-26 10:24:13', '2021-02-26 10:24:13', 1),
(76, 'Trên 5 triệu', 'tren-5-trieu-76', 70, 20, '2021-02-26 10:24:42', '2021-02-26 10:24:42', 1),
(77, 'Thương hiệu', 'thuong-hieu-77', 0, 21, '2021-02-26 10:25:57', '2021-02-26 10:25:57', 1),
(78, 'Atlantic', 'atlantic-78', 77, 21, '2021-02-26 10:26:31', '2021-02-26 10:47:30', 1),
(79, 'Bruno', 'bruno-79', 77, 21, '2021-02-26 10:26:37', '2021-02-26 10:47:29', 1),
(80, 'Epos', 'epos-80', 77, 21, '2021-02-26 10:26:49', '2021-02-26 10:47:28', 1),
(81, 'Mức giá', 'muc-gia-81', 0, 21, '2021-02-26 10:27:02', '2021-02-26 10:47:17', 1),
(82, 'Dưới 1 triệu', 'duoi-1-trieu-82', 81, 21, '2021-02-26 10:27:30', '2021-02-26 10:27:30', 1),
(83, 'Từ 1-3 triệu', 'tu-1-3-trieu-83', 81, 21, '2021-02-26 10:28:16', '2021-02-26 10:28:16', 1),
(84, 'Trên 3 triệu', 'tren-3-trieu-84', 81, 21, '2021-02-26 10:28:30', '2021-02-26 11:01:28', 1),
(86, 'Dành cho', 'danh-cho-86', 0, 20, '2021-02-26 10:52:32', '2021-02-26 10:52:32', 1),
(87, 'Nam', 'nam-87', 86, 20, '2021-02-26 10:52:40', '2021-02-26 10:52:40', 1),
(88, 'Nữ', 'nu-88', 86, 20, '2021-02-26 10:52:46', '2021-02-26 10:52:46', 1),
(89, 'Dành cho', 'danh-cho-89', 0, 19, '2021-02-26 10:52:51', '2021-02-26 10:52:52', 1),
(90, 'Nam', 'nam-90', 89, 19, '2021-02-26 10:52:58', '2021-02-26 10:52:58', 1),
(91, 'Nữ', 'nu-91', 89, 19, '2021-02-26 10:53:03', '2021-02-26 10:53:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_hot` tinyint(4) NOT NULL DEFAULT 0,
  `c_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `c_name`, `c_slug`, `c_avatar`, `c_banner`, `c_description`, `c_hot`, `c_status`, `created_at`, `updated_at`) VALUES
(19, 'Đồng hồ chính hãng', 'dong-ho-chinh-hang', NULL, NULL, NULL, 0, 1, '2021-02-24 23:22:51', '2021-02-24 23:22:51'),
(20, 'Kính mắt thời trang', 'kinh-mat-thoi-trang', NULL, NULL, NULL, 0, 1, '2021-02-24 23:22:59', '2021-02-24 23:22:59'),
(21, 'Phụ kiện đồng hồ', 'phu-kien-dong-ho', NULL, NULL, NULL, 0, 1, '2021-02-24 23:23:19', '2021-02-24 23:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `name`, `content`, `type`, `created_at`, `updated_at`, `link`) VALUES
(2, 'Email', 'nobmtpro1@gmail.com', 'mailto:', '2021-02-16 23:42:46', '2021-02-16 23:42:46', NULL),
(3, 'Fanpage', 'Larovo', 'link', '2021-02-16 23:43:58', '2021-02-18 21:38:35', 'https://www.facebook.com/'),
(5, 'Address', '296 Nguyễn Trãi – Hà Đông – Hà Nội', 'info', '2021-02-17 00:10:35', '2021-02-17 00:10:35', NULL),
(6, 'Giờ mở cửa', '7h00 - 21h00 hàng ngày', 'info', '2021-02-17 00:13:05', '2021-02-17 00:13:05', NULL),
(7, 'Gọi đặt hàng', '098.568.1189', 'tel:', '2021-02-17 00:15:23', '2021-02-17 00:15:23', NULL),
(8, 'Hotline', '1800.4354', 'tel:', '2021-02-17 00:15:51', '2021-02-17 00:15:51', NULL),
(9, 'Hỗ trợ kỹ thuật', '094389485', 'tel:', '2021-02-17 00:17:20', '2021-02-17 00:17:20', NULL),
(10, 'Youtube', 'Đồng hồ Larovo', 'link', '2021-02-18 21:41:59', '2021-02-18 21:41:59', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_uses` int(10) UNSIGNED DEFAULT NULL,
  `max_uses_user` int(10) UNSIGNED DEFAULT NULL,
  `type` tinyint(3) UNSIGNED DEFAULT NULL,
  `discount_amount` int(11) NOT NULL,
  `is_fixed` tinyint(1) NOT NULL DEFAULT 1,
  `starts_at` timestamp NULL DEFAULT NULL,
  `expired_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `uses` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `code`, `name`, `description`, `max_uses`, `max_uses_user`, `type`, `discount_amount`, `is_fixed`, `starts_at`, `expired_at`, `created_at`, `updated_at`, `status`, `uses`) VALUES
(4, '1', 'Giảm giá', NULL, NULL, NULL, NULL, 500000, 1, '2021-02-09 17:00:00', '2021-03-08 17:00:00', '2021-02-27 15:16:05', '2021-02-27 15:16:05', 1, 98);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keyword`
--

CREATE TABLE `keyword` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `k_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `k_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `k_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_hot` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keyword`
--

INSERT INTO `keyword` (`id`, `k_name`, `k_slug`, `k_description`, `k_hot`, `created_at`, `updated_at`) VALUES
(2, 'z', 'z', 'z', 0, '2021-02-04 06:00:18', '2021-02-04 06:02:28'),
(3, 'Hàng mới', 'hang-moi', 'Hàng mới', 0, '2021-02-09 22:38:59', '2021-02-09 22:38:59'),
(4, 'Hàng cũ', 'hang-cu', 'Hàng cũ', 0, '2021-02-09 22:39:09', '2021-02-09 22:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_04_025835_create_tbl_category', 2),
(5, '2021_02_04_122742_create_tbl_keyword', 3),
(6, '2021_02_04_130452_create_tbl_product', 4),
(7, '2021_02_05_094439_create_attr', 5),
(8, '2021_02_09_120314_create_transaction_table', 6),
(9, '2021_02_09_120433_create_order_table', 6),
(10, '2021_02_10_054059_create_product_keyword_table', 7),
(11, '2021_02_10_133157_create_article_table', 8),
(12, '2021_02_10_135250_create_articlecategory_table', 9),
(13, '2021_02_12_132726_create_views_table', 10),
(14, '2021_02_13_134037_create_slide_table', 11),
(15, '2021_02_15_074106_create_review_table', 12),
(16, '2021_02_15_141718_create_album_table', 13),
(17, '2021_02_17_061241_create_config_table', 14),
(18, '2021_02_17_072023_create_static_table', 15),
(19, '2021_02_18_015451_create_coupon_table', 16),
(20, '2021_02_18_021432_create_user_coupon_table', 16),
(21, '2021_02_19_130558_create_role_table', 17),
(22, '2021_02_19_130714_create_permission_table', 17),
(23, '2021_02_19_130759_create_user_role_table', 17),
(24, '2021_02_19_130929_create_role_permission_table', 17),
(25, '2021_02_20_130647_create_permission_tables', 18),
(26, '2021_02_27_062546_update_relationship_review_user', 19),
(27, '2021_02_27_064149_update_relationship_review_user_2', 20);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(10, 'App\\User', 35);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL,
  `sale` int(11) NOT NULL DEFAULT 0,
  `qty` int(11) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL DEFAULT 0,
  `sale_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `transaction_id`, `product_id`, `sale`, `qty`, `price`, `sale_type`, `created_at`, `updated_at`) VALUES
(94, 59, 47, 300, 1, 700, 'amount', '2021-02-18 22:35:33', '2021-02-18 22:35:33'),
(95, 59, 21, 30, 1, 700, '%', '2021-02-18 22:35:33', '2021-02-18 22:35:33'),
(96, 59, 22, 1, 1, 999, 'amount', '2021-02-18 22:35:33', '2021-02-18 22:35:33'),
(97, 60, 21, 30, 1, 700, '%', '2021-02-18 22:56:29', '2021-02-18 22:56:29'),
(98, 60, 22, 1, 1, 999, 'amount', '2021-02-18 22:56:29', '2021-02-18 22:56:29'),
(99, 60, 47, 300, 1, 700, 'amount', '2021-02-18 22:56:29', '2021-02-18 22:56:29'),
(100, 60, 50, 1, 1, 1, '%', '2021-02-18 22:56:29', '2021-02-18 22:56:29'),
(101, 60, 46, 9, 1, 8, '%', '2021-02-18 22:56:29', '2021-02-18 22:56:29'),
(102, 61, 48, 12312, 1, -15046772, '%', '2021-02-18 22:56:47', '2021-02-18 22:56:47'),
(103, 62, 50, 1, 1, 1, '%', '2021-02-18 23:10:53', '2021-02-18 23:10:53'),
(104, 63, 47, 300, 7, 700, 'amount', '2021-02-18 23:11:21', '2021-02-18 23:11:21'),
(105, 64, 21, 30, 1, 700, '%', '2021-02-18 23:12:47', '2021-02-18 23:12:47'),
(106, 65, 46, 9, 1, 8, '%', '2021-02-19 01:53:01', '2021-02-19 01:53:01'),
(107, 66, 50, 1, 1, 1, '%', '2021-02-19 01:57:48', '2021-02-19 01:57:48'),
(108, 67, 47, 300, 1, 700, 'amount', '2021-02-19 01:58:10', '2021-02-19 01:58:10'),
(109, 68, 47, 300, 1, 700, 'amount', '2021-02-19 01:58:27', '2021-02-19 01:58:27'),
(110, 69, 47, 300, 1, 700, 'amount', '2021-02-19 21:36:58', '2021-02-19 21:36:58'),
(111, 69, 22, 1, 1, 999, 'amount', '2021-02-19 21:36:58', '2021-02-19 21:36:58'),
(112, 70, 21, 30, 3, 700, '%', '2021-02-19 21:38:19', '2021-02-19 21:38:19'),
(113, 70, 22, 1, 3, 999, 'amount', '2021-02-19 21:38:19', '2021-02-19 21:38:19'),
(114, 71, 56, 500000, 1, 4500000, 'amount', '2021-02-27 05:51:10', '2021-02-27 05:51:10'),
(115, 72, 66, 2000000, 1, 21000000, 'amount', '2021-02-27 05:57:00', '2021-02-27 05:57:00'),
(116, 73, 66, 2000000, 1, 21000000, 'amount', '2021-02-27 05:57:28', '2021-02-27 05:57:28'),
(117, 74, 66, 2000000, 1, 21000000, 'amount', '2021-02-27 05:57:46', '2021-02-27 05:57:46'),
(118, 75, 68, 10, 2, 2250000, '%', '2021-02-27 15:26:52', '2021-02-27 15:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'web',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(9, 'Thêm người dùng', 'web', '2021-02-21 01:26:40', '2021-02-21 01:26:40'),
(10, 'Sửa người dùng', 'web', NULL, NULL),
(11, 'Xóa người dùng', 'web', NULL, NULL),
(12, 'Xem người dùng', 'web', NULL, NULL),
(13, 'Xem loại sản phẩm', 'web', NULL, NULL),
(14, 'Sửa loại sản phẩm', 'web', NULL, NULL),
(15, 'Xóa loại sản phẩm', 'web', NULL, NULL),
(16, 'Thêm loại sản phẩm', 'web', NULL, NULL),
(17, 'Xem sản phẩm', 'web', NULL, NULL),
(18, 'Thêm sản phẩm', 'web', NULL, NULL),
(19, 'Sửa sản phẩm', 'web', NULL, NULL),
(20, 'Xóa sản phẩm', 'web', NULL, NULL),
(21, 'Xem thuộc tính', 'web', NULL, NULL),
(22, 'Thêm thuộc tính', 'web', NULL, NULL),
(23, 'Sửa thuộc tính', 'web', NULL, NULL),
(24, 'Xóa thuộc tính', 'web', NULL, NULL),
(25, 'Xem loại bài viết', 'web', NULL, NULL),
(26, 'Thêm loại bài viết', 'web', NULL, NULL),
(27, 'Sửa loại bài viết', 'web', NULL, NULL),
(28, 'Xóa loại bài viết', 'web', NULL, NULL),
(29, 'Xem đơn hàng', 'web', NULL, NULL),
(30, 'Xem bài viết', 'web', NULL, NULL),
(31, 'Thêm bài viết', 'web', NULL, NULL),
(32, 'Sửa bài viết', 'web', NULL, NULL),
(33, 'Xóa bài viết', 'web', NULL, NULL),
(34, 'Xem slide', 'web', NULL, NULL),
(35, 'Thêm slide', 'web', NULL, NULL),
(36, 'Sửa slide', 'web', NULL, NULL),
(37, 'Xóa slide', 'web', NULL, NULL),
(38, 'Xem đánh giá', 'web', NULL, NULL),
(39, 'Xem cài đặt thông tin', 'web', NULL, NULL),
(40, 'Thêm cài đặt thông tin', 'web', NULL, NULL),
(41, 'Sửa cài đặt thông tin', 'web', NULL, NULL),
(42, 'Xóa cài đặt thông tin', 'web', NULL, NULL),
(43, 'Xem trang tĩnh', 'web', NULL, NULL),
(44, 'Thêm trang tĩnh', 'web', NULL, NULL),
(45, 'Sửa trang tĩnh', 'web', NULL, NULL),
(46, 'Xóa trang tĩnh', 'web', NULL, NULL),
(47, 'Xem mã giảm giá', 'web', NULL, NULL),
(48, 'Thêm mã giảm giá', 'web', NULL, NULL),
(49, 'Sửa mã giảm giá', 'web', NULL, NULL),
(50, 'Xem vai trò', 'web', NULL, NULL),
(51, 'Thêm vai trò', 'web', NULL, NULL),
(52, 'Sửa vai trò', 'web', NULL, NULL),
(53, 'Xóa vai trò', 'web', NULL, NULL),
(54, 'Sửa đơn hàng', 'web', NULL, NULL),
(55, 'Xóa đơn hàng', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_price` int(11) NOT NULL DEFAULT 0,
  `p_price_entry` int(11) NOT NULL DEFAULT 0 COMMENT 'giá nhập',
  `p_category_id` int(11) DEFAULT NULL,
  `p_admin_id` int(11) NOT NULL DEFAULT 0,
  `p_sale` int(11) NOT NULL DEFAULT 0,
  `p_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_view` int(11) NOT NULL DEFAULT 0,
  `p_hot` int(11) NOT NULL DEFAULT 0,
  `p_status` int(11) NOT NULL DEFAULT 1,
  `p_description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_buy` int(11) NOT NULL DEFAULT 0,
  `p_review_total` int(11) NOT NULL DEFAULT 0,
  `p_review_star` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `p_sale_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_qty` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_name`, `p_slug`, `p_price`, `p_price_entry`, `p_category_id`, `p_admin_id`, `p_sale`, `p_avatar`, `p_view`, `p_hot`, `p_status`, `p_description`, `p_content`, `p_buy`, `p_review_total`, `p_review_star`, `created_at`, `updated_at`, `p_sale_type`, `p_qty`) VALUES
(56, 'Đồng hồ Diamond D DM5308B5IG', 'dong-ho-diamond-d-dm5308b5ig-56', 5000000, 0, 19, 0, 500000, '1614235401.jpg', 26, 1, 1, NULL, '<p>&nbsp;</p><p><strong>Thương hiệu:&nbsp;</strong><a href=\"http://www.dangquangwatch.vn/sp/Dong-ho-Diamond-D/557-0-0-0-0-0-0.html\"><strong>Đồng hồ nữ Diamond D</strong></a></p><p><strong>Kiểu dáng:&nbsp;</strong><a href=\"http://www.dangquangwatch.vn/sp/t-2/Dong-ho-nu.html\"><strong>Đồng hồ nữ</strong></a></p><p><strong>Máy:&nbsp;Quartz</strong></p><p><strong>Chất liệu vỏ:&nbsp;Hợp kim mạ PVD , đính đá swarovsky</strong></p><p><strong>Chất liệu dây:&nbsp;Hợp kim mạ PVD , đính đá swarovsky</strong></p><p><strong>Mặt kính:&nbsp;Sapphire ( Kính chống trầy )</strong></p><p><strong>Kích thước:&nbsp;25 mm</strong></p><p><strong>Chống nước:&nbsp;3 ATM</strong></p><p><strong>Bảo hành:&nbsp;10 năm về máy và đá , 2 năm về pin</strong></p><p><strong>Thương hiệu:&nbsp;Anh&nbsp;</strong></p><p><strong>Máy:&nbsp;Japan Myota citizen Quartz</strong></p><p><strong>Gọi để được tư vấn và đặt hàng: 098.668.1189</strong></p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/DM5308B5IG.jpg\" alt=\"DM5308B5IG\"></figure><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/%C4%90%E1%BB%93ng%20h%E1%BB%93%20Diamond%20D%20DM5308B5IG.jpg\" alt=\"DM5308B5IG\"></figure>', 1, 0, 0, '2021-02-24 23:43:21', '2021-02-27 05:51:11', 'amount', 49),
(57, 'Đồng hồ Diamond D DM61195', 'dong-ho-diamond-d-dm61195-57', 6500000, 0, 19, 0, 500000, '1614236925.jpg', 1, 1, 1, NULL, '<p><strong>Sản phẩm thương hiệu Diamond D chuyên sử dụng mặt kính sapphire chống xước 99%, độ trong suốt cao, giúp người dùng luôn có sản phẩm đẹp mà không lo bị xước.</strong></p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/a1(12).jpg\" alt=\"\"></figure><p>&nbsp;</p><p>&nbsp;</p><p><strong>Độ chịu nước 3 ATM có thể đi mưa, rửa tay. Không mang đi tắm, đi bơi và không mang đi xông hơi hay sử dụng với nước nóng.</strong></p><p>&nbsp;</p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/a2(13).jpg\" alt=\"\"></figure><p>&nbsp;</p><p>&nbsp;</p><p><strong>Size dây 12 mm nhỏ nhắn, phù hợp với nhiều kích thước cổ tay của các cô nàng.</strong></p><p>&nbsp;</p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/a3(13).jpg\" alt=\"\"></figure><p>&nbsp;</p><p><strong>Bảo hành trọn đời về đá và máy, bảo hành đá cả lỗi người dùng nên các bạn có thể yên tâm sử dụng sản phẩm.</strong></p><p>&nbsp;</p><p>&nbsp;</p><p><strong>Thương hiệu:&nbsp;Đồng hồ nữ Diamond D</strong></p><p><strong>Kiểu dáng:&nbsp;Đồng hồ nữ</strong></p><p><strong>Năng lượng:&nbsp;Quartz</strong></p><p><strong>Chất liệu vỏ:&nbsp;Thép không gỉ , đính đá swarovsky</strong></p><p><strong>Chất liệu dây:&nbsp;Thép không gỉ&nbsp;</strong></p><p><strong>Mặt kính:&nbsp;Sapphire ( Kính chống trầy )</strong></p><p><strong>Đường kính mặt: 28mm</strong></p><p><strong>Chống nước: 3ATM</strong></p><p><strong>Bảo hành:&nbsp;10 năm về máy và đá , 2 năm về pin</strong></p><p><strong>Thương hiệu:&nbsp;Anh</strong></p><p><strong>Máy:&nbsp;Japan Myota citizen Quartz</strong></p><p><strong>Gọi để được tư vấn và đặt hàng: 098.668.1189</strong></p>', 0, 0, 0, '2021-02-25 00:08:45', '2021-02-26 11:06:13', 'amount', 12),
(58, 'ĐỒNG HỒ DIAMOND D DM38025IG', 'dong-ho-diamond-d-dm38025ig-58', 12000000, 0, 19, 0, 20, '1614237281.jpg', 7, 1, 1, NULL, '<p><strong>Thương hiệu:&nbsp;</strong><a href=\"http://www.dangquangwatch.vn/sp/Dong-ho-Diamond-D/557-0-0-0-0-0-0.html\"><strong>Đồng hồ nữ Diamond D</strong></a></p><p><strong>Kiểu dáng:&nbsp;</strong><a href=\"http://www.dangquangwatch.vn/sp/t-2/Dong-ho-nu.html\"><strong>Đồng hồ nữ</strong></a></p><p><strong>Máy:&nbsp;Quartz</strong></p><p><strong>Chất liệu vỏ:&nbsp;Hợp kim mạ PVD , đính đá swarovsky</strong></p><p><strong>Chất liệu dây:&nbsp;Hợp kim mạ PVD , đính đá swarovsky</strong></p><p><strong>Mặt kính:&nbsp;Sapphire ( Kính chống trầy )</strong><br><br><strong>Kích thước : 26mm</strong><br><br><strong>Chống nước : 3 ATM</strong></p><p><strong>Bảo hành: 10 năm về máy và đá , 2 năm về pin</strong></p><p><strong>Thương hiệu:&nbsp;Anh&nbsp;</strong></p><p><strong>Máy:&nbsp;Japan Myota citizen Quartz</strong></p><p><strong>Gọi để được tư vấn và đặt hàng: 098.668.1189</strong></p>', 0, 0, 0, '2021-02-25 00:12:16', '2021-02-26 11:06:16', '%', 44),
(59, 'Đồng hồ Jacques Lemans JL-1-1654.2ZD', 'dong-ho-jacques-lemans-jl-1-16542zd-59', 1500000, 0, 19, 0, 500000, '1614242570.jpg', 1, 1, 1, NULL, '<h3><strong>Đồng hồ Jacques Lemans JL-1-1654.2ZD</strong></h3><h3>Thiết kế hiện đại và trẻ trung phù hợp với những chàng trai năng động. JL-1-1654.2ZD thương hiệu&nbsp;<a href=\"https://www.dangquangwatch.vn/sp/dong-ho-jacques-lemans.html\"><strong>Jacques Lemans</strong></a>&nbsp;nổi tiếng Áo, là phụ kiện thời trang không thể thiếu cho các bạn nam.</h3><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/JL-1654_2ZD.jpg\" alt=\"\"></figure><p>Thiết kế thể thao năng động, phong cách và khỏe khoắn<br>Size mặt 40mm, chất liệu cường lực chống va đập tốt nhất<br>Vỏ thép không gỉ nguyên bản 316L cao cấp mạ tĩnh điện PVD màu vàng, chống oxi hóa, chống ăn mòn<br>Độ chịu nước 10 ATM: đi mưa, rửa tay, tắm và đi bơi&nbsp;<br>Dây da chính hãng size 20mm, màu nâu vân nổi</p>', 0, 0, 0, '2021-02-25 01:42:50', '2021-02-26 11:06:18', 'amount', 343),
(60, 'Đồng hồ Jacques Lemans JL-42-5F', 'dong-ho-jacques-lemans-jl-42-5f-60', 8000000, 0, 19, 0, 10, '1614243123.jpg', 1, 1, 1, NULL, '<p>Hãng sản xuất: &nbsp; Jacques Lemans&nbsp;</p><p>Thương hiệu: &nbsp; &nbsp;Đồng hồ Jacques Lemans</p><p>Loại đồng hồ: &nbsp; &nbsp;Đồng hồ nam</p><p>Xuất xứ: Áo</p><p>Năng lượng sử dụng: &nbsp; &nbsp;Đồng hồ điện tử</p><p>Đường kính mặt: &nbsp; &nbsp;42mm</p><p>Loại kính: &nbsp;hardened crystex crystal (Kính cứng )</p><p>Chất liệu vỏ: &nbsp; &nbsp;Thép không gỉ</p><p>Chất liệu dây: &nbsp; Thép không gỉ</p><p>Độ chịu nước: &nbsp; &nbsp;10ATM</p><p>Bảo hành: &nbsp; &nbsp;2 năm tại Đăng Quang Watch</p><p>Tư vấn khách hàng: &nbsp; &nbsp;098.668.1189</p><p>Thanh toán: &nbsp; &nbsp;Giao hàng tận nơi, thanh toán trực tiếp khi nhận hàng</p><p>Vận chuyển: &nbsp; &nbsp;Miễn phí toàn quốc</p>', 0, 0, 0, '2021-02-25 01:52:03', '2021-02-26 11:06:21', '%', 123),
(62, 'Stuhrling Original ST-207.03 - Nam', 'stuhrling-original-st-20703-nam-62', 15000000, 0, 19, 0, 10, '1614319553.jpg', 15, 1, 1, NULL, '<p>&nbsp;</p><p>sadsa</p>', 0, 0, 0, '2021-02-25 23:05:53', '2021-02-26 11:06:25', '%', 42),
(63, 'Đồng hồ Jacques Lemans JL-1-1654.2ZD', 'dong-ho-jacques-lemans-jl-1-16542zd-63', 9000000, 0, 19, 0, 1000000, '1614326049.jpg', 1, 0, 1, NULL, '<p><strong>Thương hiệu:&nbsp;</strong><a href=\"http://www.dangquangwatch.vn/sp/Dong-ho-Diamond-D/557-0-0-0-0-0-0.html\"><strong>Đồng hồ nữ Diamond D</strong></a></p><p><strong>Kiểu dáng:&nbsp;</strong><a href=\"http://www.dangquangwatch.vn/sp/t-2/Dong-ho-nu.html\"><strong>Đồng hồ nữ</strong></a></p><p><strong>Máy:&nbsp;Quartz</strong></p><p><strong>Chất liệu vỏ:&nbsp;Hợp kim mạ PVD , đính đá swarovsky</strong></p><p><strong>Chất liệu dây:&nbsp;Hợp kim mạ PVD , đính đá swarovsky</strong></p><p><strong>Mặt kính:&nbsp;Sapphire ( Kính chống trầy )</strong></p><p><strong>Kích thước:&nbsp;25 mm</strong></p><p><strong>Chống nước:&nbsp;3 ATM</strong></p><p><strong>Bảo hành:&nbsp;10 năm về máy và đá , 2 năm về pin</strong></p><p><strong>Thương hiệu:&nbsp;Anh&nbsp;</strong></p><p><strong>Máy:&nbsp;Japan Myota citizen Quartz</strong></p><p><strong>Gọi để được tư vấn và đặt hàng: 098.668.1189</strong></p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/DM5308B5IG.jpg\" alt=\"DM5308B5IG\"></figure><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/%C4%90%E1%BB%93ng%20h%E1%BB%93%20Diamond%20D%20DM5308B5IG.jpg\" alt=\"DM5308B5IG\"></figure>', 0, 0, 0, '2021-02-26 00:54:09', '2021-02-26 00:54:09', 'amount', 343),
(64, 'Đồng hồ Jacques Lemans JL-1-1654.2ZB', 'dong-ho-jacques-lemans-jl-1-16542zb-64', 4500000, 0, 19, 0, 10, '1614326119.jpg', 0, 0, 1, NULL, '<p><strong>Thương hiệu:&nbsp;</strong><a href=\"http://www.dangquangwatch.vn/sp/Dong-ho-Diamond-D/557-0-0-0-0-0-0.html\"><strong>Đồng hồ nữ Diamond D</strong></a></p><p><strong>Kiểu dáng:&nbsp;</strong><a href=\"http://www.dangquangwatch.vn/sp/t-2/Dong-ho-nu.html\"><strong>Đồng hồ nữ</strong></a></p><p><strong>Máy:&nbsp;Quartz</strong></p><p><strong>Chất liệu vỏ:&nbsp;Hợp kim mạ PVD , đính đá swarovsky</strong></p><p><strong>Chất liệu dây:&nbsp;Hợp kim mạ PVD , đính đá swarovsky</strong></p><p><strong>Mặt kính:&nbsp;Sapphire ( Kính chống trầy )</strong></p><p><strong>Kích thước:&nbsp;25 mm</strong></p><p><strong>Chống nước:&nbsp;3 ATM</strong></p><p><strong>Bảo hành:&nbsp;10 năm về máy và đá , 2 năm về pin</strong></p><p><strong>Thương hiệu:&nbsp;Anh&nbsp;</strong></p><p><strong>Máy:&nbsp;Japan Myota citizen Quartz</strong></p><p><strong>Gọi để được tư vấn và đặt hàng: 098.668.1189</strong></p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/DM5308B5IG.jpg\" alt=\"DM5308B5IG\"></figure><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/%C4%90%E1%BB%93ng%20h%E1%BB%93%20Diamond%20D%20DM5308B5IG.jpg\" alt=\"DM5308B5IG\"></figure>', 0, 0, 0, '2021-02-26 00:55:19', '2021-02-26 00:55:19', '%', 33),
(65, 'ĐỒNG HỒ JACQUES LEMANS JL-1-1654.2ZA', 'dong-ho-jacques-lemans-jl-1-16542za-65', 1300000, 0, 19, 0, 300000, '1614326185.jpg', 1, 0, 1, NULL, '<p><strong>Thương hiệu:&nbsp;</strong><a href=\"http://www.dangquangwatch.vn/sp/Dong-ho-Diamond-D/557-0-0-0-0-0-0.html\"><strong>Đồng hồ nữ Diamond D</strong></a></p><p><strong>Kiểu dáng:&nbsp;</strong><a href=\"http://www.dangquangwatch.vn/sp/t-2/Dong-ho-nu.html\"><strong>Đồng hồ nữ</strong></a></p><p><strong>Máy:&nbsp;Quartz</strong></p><p><strong>Chất liệu vỏ:&nbsp;Hợp kim mạ PVD , đính đá swarovsky</strong></p><p><strong>Chất liệu dây:&nbsp;Hợp kim mạ PVD , đính đá swarovsky</strong></p><p><strong>Mặt kính:&nbsp;Sapphire ( Kính chống trầy )</strong></p><p><strong>Kích thước:&nbsp;25 mm</strong></p><p><strong>Chống nước:&nbsp;3 ATM</strong></p><p><strong>Bảo hành:&nbsp;10 năm về máy và đá , 2 năm về pin</strong></p><p><strong>Thương hiệu:&nbsp;Anh&nbsp;</strong></p><p><strong>Máy:&nbsp;Japan Myota citizen Quartz</strong></p><p><strong>Gọi để được tư vấn và đặt hàng: 098.668.1189</strong></p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/DM5308B5IG.jpg\" alt=\"DM5308B5IG\"></figure><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/%C4%90%E1%BB%93ng%20h%E1%BB%93%20Diamond%20D%20DM5308B5IG.jpg\" alt=\"DM5308B5IG\"></figure>', 0, 0, 0, '2021-02-26 00:56:25', '2021-02-26 00:56:25', 'amount', 43),
(66, 'Đồng hồ Jacques Lemans JL-40-1D', 'dong-ho-jacques-lemans-jl-40-1d-66', 23000000, 0, 19, 0, 2000000, '1614326249.jpg', 3, 0, 1, NULL, '<p><strong>Thương hiệu:&nbsp;</strong><a href=\"http://www.dangquangwatch.vn/sp/Dong-ho-Diamond-D/557-0-0-0-0-0-0.html\"><strong>Đồng hồ nữ Diamond D</strong></a></p><p><strong>Kiểu dáng:&nbsp;</strong><a href=\"http://www.dangquangwatch.vn/sp/t-2/Dong-ho-nu.html\"><strong>Đồng hồ nữ</strong></a></p><p><strong>Máy:&nbsp;Quartz</strong></p><p><strong>Chất liệu vỏ:&nbsp;Hợp kim mạ PVD , đính đá swarovsky</strong></p><p><strong>Chất liệu dây:&nbsp;Hợp kim mạ PVD , đính đá swarovsky</strong></p><p><strong>Mặt kính:&nbsp;Sapphire ( Kính chống trầy )</strong></p><p><strong>Kích thước:&nbsp;25 mm</strong></p><p><strong>Chống nước:&nbsp;3 ATM</strong></p><p><strong>Bảo hành:&nbsp;10 năm về máy và đá , 2 năm về pin</strong></p><p><strong>Thương hiệu:&nbsp;Anh&nbsp;</strong></p><p><strong>Máy:&nbsp;Japan Myota citizen Quartz</strong></p><p><strong>Gọi để được tư vấn và đặt hàng: 098.668.1189</strong></p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/DM5308B5IG.jpg\" alt=\"DM5308B5IG\"></figure><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/%C4%90%E1%BB%93ng%20h%E1%BB%93%20Diamond%20D%20DM5308B5IG.jpg\" alt=\"DM5308B5IG\"></figure>', 3, 0, 0, '2021-02-26 00:57:29', '2021-02-27 05:57:46', 'amount', 340),
(67, 'Đồng hồ Jacques Lemans JL-42-6G', 'dong-ho-jacques-lemans-jl-42-6g-67', 7800000, 0, 19, 0, 500000, '1614326361.jpg', 1, 0, 1, NULL, '<p><strong>Thương hiệu:&nbsp;</strong><a href=\"http://www.dangquangwatch.vn/sp/Dong-ho-Diamond-D/557-0-0-0-0-0-0.html\"><strong>Đồng hồ nữ Diamond D</strong></a></p><p><strong>Kiểu dáng:&nbsp;</strong><a href=\"http://www.dangquangwatch.vn/sp/t-2/Dong-ho-nu.html\"><strong>Đồng hồ nữ</strong></a></p><p><strong>Máy:&nbsp;Quartz</strong></p><p><strong>Chất liệu vỏ:&nbsp;Hợp kim mạ PVD , đính đá swarovsky</strong></p><p><strong>Chất liệu dây:&nbsp;Hợp kim mạ PVD , đính đá swarovsky</strong></p><p><strong>Mặt kính:&nbsp;Sapphire ( Kính chống trầy )</strong></p><p><strong>Kích thước:&nbsp;25 mm</strong></p><p><strong>Chống nước:&nbsp;3 ATM</strong></p><p><strong>Bảo hành:&nbsp;10 năm về máy và đá , 2 năm về pin</strong></p><p><strong>Thương hiệu:&nbsp;Anh&nbsp;</strong></p><p><strong>Máy:&nbsp;Japan Myota citizen Quartz</strong></p><p><strong>Gọi để được tư vấn và đặt hàng: 098.668.1189</strong></p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/DM5308B5IG.jpg\" alt=\"DM5308B5IG\"></figure><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/%C4%90%E1%BB%93ng%20h%E1%BB%93%20Diamond%20D%20DM5308B5IG.jpg\" alt=\"DM5308B5IG\"></figure>', 0, 0, 0, '2021-02-26 00:59:21', '2021-02-26 00:59:21', 'amount', 34),
(68, 'Đồng hồ Jacques Lemans JL-1-1654.2ZK', 'dong-ho-jacques-lemans-jl-1-16542zk-68', 2500000, 0, 19, 0, 10, '1614326423.jpg', 1, 0, 1, NULL, '<p><strong>Thương hiệu:&nbsp;</strong><a href=\"http://www.dangquangwatch.vn/sp/Dong-ho-Diamond-D/557-0-0-0-0-0-0.html\"><strong>Đồng hồ nữ Diamond D</strong></a></p><p><strong>Kiểu dáng:&nbsp;</strong><a href=\"http://www.dangquangwatch.vn/sp/t-2/Dong-ho-nu.html\"><strong>Đồng hồ nữ</strong></a></p><p><strong>Máy:&nbsp;Quartz</strong></p><p><strong>Chất liệu vỏ:&nbsp;Hợp kim mạ PVD , đính đá swarovsky</strong></p><p><strong>Chất liệu dây:&nbsp;Hợp kim mạ PVD , đính đá swarovsky</strong></p><p><strong>Mặt kính:&nbsp;Sapphire ( Kính chống trầy )</strong></p><p><strong>Kích thước:&nbsp;25 mm</strong></p><p><strong>Chống nước:&nbsp;3 ATM</strong></p><p><strong>Bảo hành:&nbsp;10 năm về máy và đá , 2 năm về pin</strong></p><p><strong>Thương hiệu:&nbsp;Anh&nbsp;</strong></p><p><strong>Máy:&nbsp;Japan Myota citizen Quartz</strong></p><p><strong>Gọi để được tư vấn và đặt hàng: 098.668.1189</strong></p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/DM5308B5IG.jpg\" alt=\"DM5308B5IG\"></figure><p>&nbsp;</p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/%C4%90%E1%BB%93ng%20h%E1%BB%93%20Diamond%20D%20DM5308B5IG.jpg\" alt=\"DM5308B5IG\"></figure>', 2, 0, 0, '2021-02-26 01:00:23', '2021-02-27 15:26:52', '%', 33),
(69, 'Kính mát Burberry BUR-3092QF-1145/71(60IT) - Nữ', 'kinh-mat-burberry-bur-3092qf-11457160it-nu-69', 500000, 0, 20, 0, 0, '1614362237.jpg', 0, 0, 1, NULL, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 0, 0, 0, '2021-02-26 10:57:17', '2021-02-26 10:57:17', '%', 242),
(70, 'Kính Burberry BUR-3092QF-1243/7J(60IT)', 'kinh-burberry-bur-3092qf-12437j60it-70', 1300000, 0, 20, 0, 10, '1614362310.jpg', 0, 0, 1, NULL, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br>&nbsp;</p>', 0, 0, 0, '2021-02-26 10:58:30', '2021-02-26 10:58:30', '%', 2323),
(71, 'Kính mát Rayban RB-3025-112/17(58IT)', 'kinh-mat-rayban-rb-3025-1121758it-71', 3500000, 0, 20, 0, 700000, '1614362368.jpg', 0, 0, 1, NULL, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br>&nbsp;</p>', 0, 0, 0, '2021-02-26 10:59:28', '2021-02-26 10:59:28', 'amount', 4343),
(72, 'Kính mát Rayban RB-3025-001/3E(58IT)', 'kinh-mat-rayban-rb-3025-0013e58it-72', 6000000, 0, 20, 0, 0, '1614362460.jpg', 0, 1, 1, NULL, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br>&nbsp;</p>', 0, 0, 0, '2021-02-26 11:01:00', '2021-02-26 11:06:40', '%', 343),
(73, 'Kính RAYBAN RB-4278-6282/71(51IT)', 'kinh-rayban-rb-4278-62827151it-73', 400000, 0, 20, 0, 0, '1614362610.jpg', 0, 1, 1, NULL, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br>&nbsp;</p>', 0, 0, 0, '2021-02-26 11:03:30', '2021-02-26 11:06:36', '%', 343),
(74, 'Kính mát Diamond D DM-29329-60/C22', 'kinh-mat-diamond-d-dm-29329-60c22-74', 3000000, 0, 20, 0, 0, '1614362675.jpg', 0, 1, 1, NULL, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br>&nbsp;</p>', 0, 0, 0, '2021-02-26 11:04:35', '2021-02-26 11:06:30', '%', 343),
(75, 'Dây da Diamond D D DM W 12', 'day-da-diamond-d-d-dm-w-12-75', 700000, 0, 21, 0, 0, '1614363214.jpg', 0, 0, 1, NULL, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br>&nbsp;</p>', 0, 0, 0, '2021-02-26 11:13:34', '2021-02-26 11:13:34', '%', 453),
(76, 'Dây D DM W 14', 'day-d-dm-w-14-76', 2500000, 0, 21, 0, 10, '1614363279.jpg', 0, 0, 1, NULL, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br>&nbsp;</p>', 0, 0, 0, '2021-02-26 11:14:39', '2021-02-26 11:14:39', '%', 435),
(77, 'Dây da Diamond D D DM R 12', 'day-da-diamond-d-d-dm-r-12-77', 4500000, 0, 21, 0, 500000, '1614363342.jpg', 0, 0, 1, NULL, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br>&nbsp;</p>', 0, 0, 0, '2021-02-26 11:15:42', '2021-02-26 11:15:42', 'amount', 543543),
(78, 'Dây da Diamond D D DM B 12', 'day-da-diamond-d-d-dm-b-12-78', 300000, 0, 21, 0, 0, '1614363411.jpg', 0, 0, 1, NULL, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br>&nbsp;</p>', 0, 0, 0, '2021-02-26 11:16:51', '2021-02-26 11:16:51', '%', 5345),
(79, 'Dây da Bruno D BS-71C-443-04/20', 'day-da-bruno-d-bs-71c-443-0420-79', 2500000, 0, 21, 0, 0, '1614363523.jpg', 0, 0, 1, NULL, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br>&nbsp;</p>', 0, 0, 0, '2021-02-26 11:18:43', '2021-02-26 11:18:43', '%', 534),
(80, 'Dây da Epos DD E-D 22BK', 'day-da-epos-dd-e-d-22bk-80', 400000, 0, 21, 0, 10, '1614363564.jpg', 1, 0, 1, NULL, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br>&nbsp;</p>', 0, 0, 0, '2021-02-26 11:19:24', '2021-02-26 11:19:24', '%', 43);

-- --------------------------------------------------------

--
-- Table structure for table `product_attr`
--

CREATE TABLE `product_attr` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `attr_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_attr`
--

INSERT INTO `product_attr` (`id`, `product_id`, `attr_id`, `created_at`, `updated_at`) VALUES
(131, 21, 29, '2021-02-17 13:39:03', '2021-02-17 13:39:03'),
(132, 21, 32, '2021-02-17 13:39:03', '2021-02-17 13:39:03'),
(133, 21, 39, '2021-02-17 13:39:03', '2021-02-17 13:39:03'),
(134, 22, 30, '2021-02-17 13:39:24', '2021-02-17 13:39:24'),
(135, 22, 33, '2021-02-17 13:39:24', '2021-02-17 13:39:24'),
(136, 22, 40, '2021-02-17 13:39:24', '2021-02-17 13:39:24'),
(137, 37, 29, '2021-02-17 13:42:50', '2021-02-17 13:42:50'),
(138, 37, 32, '2021-02-17 13:42:50', '2021-02-17 13:42:50'),
(139, 37, 39, '2021-02-17 13:42:50', '2021-02-17 13:42:50'),
(140, 38, 30, '2021-02-17 13:43:14', '2021-02-17 13:43:14'),
(141, 38, 33, '2021-02-17 13:43:14', '2021-02-17 13:43:14'),
(142, 38, 39, '2021-02-17 13:43:14', '2021-02-17 13:43:14'),
(143, 40, 30, '2021-02-17 13:44:39', '2021-02-17 13:44:39'),
(144, 40, 32, '2021-02-17 13:44:39', '2021-02-17 13:44:39'),
(145, 40, 40, '2021-02-17 13:44:39', '2021-02-17 13:44:39'),
(146, 41, 29, '2021-02-17 13:45:17', '2021-02-17 13:45:17'),
(147, 41, 33, '2021-02-17 13:45:17', '2021-02-17 13:45:17'),
(148, 41, 39, '2021-02-17 13:45:17', '2021-02-17 13:45:17'),
(149, 42, 29, '2021-02-17 13:45:35', '2021-02-17 13:45:35'),
(150, 42, 33, '2021-02-17 13:45:35', '2021-02-17 13:45:35'),
(151, 42, 40, '2021-02-17 13:45:35', '2021-02-17 13:45:35'),
(152, 43, 30, '2021-02-17 13:45:53', '2021-02-17 13:45:53'),
(153, 43, 32, '2021-02-17 13:45:53', '2021-02-17 13:45:53'),
(154, 43, 39, '2021-02-17 13:45:53', '2021-02-17 13:45:53'),
(155, 44, 29, '2021-02-17 13:46:15', '2021-02-17 13:46:15'),
(156, 44, 33, '2021-02-17 13:46:15', '2021-02-17 13:46:15'),
(157, 44, 39, '2021-02-17 13:46:15', '2021-02-17 13:46:15'),
(158, 45, 29, '2021-02-17 13:46:51', '2021-02-17 13:46:51'),
(159, 45, 33, '2021-02-17 13:46:51', '2021-02-17 13:46:51'),
(160, 45, 40, '2021-02-17 13:46:51', '2021-02-17 13:46:51'),
(161, 46, 29, '2021-02-17 13:47:49', '2021-02-17 13:47:49'),
(162, 46, 33, '2021-02-17 13:47:49', '2021-02-17 13:47:49'),
(163, 46, 39, '2021-02-17 13:47:49', '2021-02-17 13:47:49'),
(164, 47, 30, '2021-02-17 13:48:32', '2021-02-17 13:48:32'),
(165, 47, 33, '2021-02-17 13:48:32', '2021-02-17 13:48:32'),
(166, 47, 39, '2021-02-17 13:48:32', '2021-02-17 13:48:32'),
(167, 50, 29, '2021-02-18 14:04:33', '2021-02-18 14:04:33'),
(168, 50, 33, '2021-02-18 14:04:33', '2021-02-18 14:04:33'),
(169, 50, 40, '2021-02-18 14:04:33', '2021-02-18 14:04:33'),
(170, 50, 36, '2021-02-18 14:04:33', '2021-02-18 14:04:33'),
(183, 53, 30, '2021-02-18 14:26:54', '2021-02-18 14:26:54'),
(184, 53, 32, '2021-02-18 14:26:54', '2021-02-18 14:26:54'),
(185, 53, 40, '2021-02-18 14:26:54', '2021-02-18 14:26:54'),
(186, 53, 37, '2021-02-18 14:26:54', '2021-02-18 14:26:54'),
(187, 54, 29, '2021-02-19 06:38:43', '2021-02-19 06:38:43'),
(188, 54, 33, '2021-02-19 06:38:43', '2021-02-19 06:38:43'),
(189, 54, 39, '2021-02-19 06:38:43', '2021-02-19 06:38:43'),
(190, 55, 30, '2021-02-25 04:51:05', '2021-02-25 04:51:05'),
(191, 55, 33, '2021-02-25 04:51:05', '2021-02-25 04:51:05'),
(192, 55, 39, '2021-02-25 04:51:05', '2021-02-25 04:51:05'),
(213, 58, 53, '2021-02-25 07:14:41', '2021-02-25 07:14:41'),
(214, 58, 57, '2021-02-25 07:14:41', '2021-02-25 07:14:41'),
(215, 58, 60, '2021-02-25 07:14:41', '2021-02-25 07:14:41'),
(216, 58, 61, '2021-02-25 07:14:41', '2021-02-25 07:14:41'),
(217, 58, 65, '2021-02-25 07:14:41', '2021-02-25 07:14:41'),
(223, 60, 52, '2021-02-25 08:52:03', '2021-02-25 08:52:03'),
(224, 60, 56, '2021-02-25 08:52:03', '2021-02-25 08:52:03'),
(225, 60, 60, '2021-02-25 08:52:03', '2021-02-25 08:52:03'),
(226, 60, 62, '2021-02-25 08:52:03', '2021-02-25 08:52:03'),
(227, 60, 64, '2021-02-25 08:52:03', '2021-02-25 08:52:03'),
(228, 61, 51, '2021-02-26 05:50:18', '2021-02-26 05:50:18'),
(229, 61, 56, '2021-02-26 05:50:18', '2021-02-26 05:50:18'),
(230, 61, 59, '2021-02-26 05:50:18', '2021-02-26 05:50:18'),
(231, 61, 62, '2021-02-26 05:50:18', '2021-02-26 05:50:18'),
(232, 61, 64, '2021-02-26 05:50:18', '2021-02-26 05:50:18'),
(348, 62, 53, '2021-02-26 07:03:11', '2021-02-26 07:03:11'),
(349, 62, 57, '2021-02-26 07:03:11', '2021-02-26 07:03:11'),
(350, 62, 60, '2021-02-26 07:03:11', '2021-02-26 07:03:11'),
(351, 62, 62, '2021-02-26 07:03:11', '2021-02-26 07:03:11'),
(352, 62, 65, '2021-02-26 07:03:11', '2021-02-26 07:03:11'),
(353, 63, 52, '2021-02-26 07:54:09', '2021-02-26 07:54:09'),
(354, 63, 56, '2021-02-26 07:54:09', '2021-02-26 07:54:09'),
(355, 63, 59, '2021-02-26 07:54:09', '2021-02-26 07:54:09'),
(356, 63, 61, '2021-02-26 07:54:09', '2021-02-26 07:54:09'),
(357, 63, 64, '2021-02-26 07:54:09', '2021-02-26 07:54:09'),
(358, 64, 51, '2021-02-26 07:55:19', '2021-02-26 07:55:19'),
(359, 64, 55, '2021-02-26 07:55:19', '2021-02-26 07:55:19'),
(360, 64, 58, '2021-02-26 07:55:19', '2021-02-26 07:55:19'),
(361, 64, 62, '2021-02-26 07:55:19', '2021-02-26 07:55:19'),
(362, 64, 63, '2021-02-26 07:55:19', '2021-02-26 07:55:19'),
(363, 65, 53, '2021-02-26 07:56:25', '2021-02-26 07:56:25'),
(364, 65, 54, '2021-02-26 07:56:25', '2021-02-26 07:56:25'),
(365, 65, 60, '2021-02-26 07:56:25', '2021-02-26 07:56:25'),
(366, 65, 62, '2021-02-26 07:56:25', '2021-02-26 07:56:25'),
(367, 65, 65, '2021-02-26 07:56:25', '2021-02-26 07:56:25'),
(373, 67, 51, '2021-02-26 07:59:21', '2021-02-26 07:59:21'),
(374, 67, 56, '2021-02-26 07:59:21', '2021-02-26 07:59:21'),
(375, 67, 58, '2021-02-26 07:59:21', '2021-02-26 07:59:21'),
(376, 67, 62, '2021-02-26 07:59:21', '2021-02-26 07:59:21'),
(377, 67, 63, '2021-02-26 07:59:21', '2021-02-26 07:59:21'),
(378, 68, 53, '2021-02-26 08:00:23', '2021-02-26 08:00:23'),
(379, 68, 55, '2021-02-26 08:00:23', '2021-02-26 08:00:23'),
(380, 68, 59, '2021-02-26 08:00:23', '2021-02-26 08:00:23'),
(381, 68, 62, '2021-02-26 08:00:23', '2021-02-26 08:00:23'),
(382, 68, 65, '2021-02-26 08:00:23', '2021-02-26 08:00:23'),
(388, 57, 52, '2021-02-26 08:01:31', '2021-02-26 08:01:31'),
(389, 57, 56, '2021-02-26 08:01:31', '2021-02-26 08:01:31'),
(390, 57, 59, '2021-02-26 08:01:31', '2021-02-26 08:01:31'),
(391, 57, 62, '2021-02-26 08:01:31', '2021-02-26 08:01:31'),
(392, 57, 64, '2021-02-26 08:01:31', '2021-02-26 08:01:31'),
(393, 59, 53, '2021-02-26 08:01:58', '2021-02-26 08:01:58'),
(394, 59, 57, '2021-02-26 08:01:58', '2021-02-26 08:01:58'),
(395, 59, 59, '2021-02-26 08:01:58', '2021-02-26 08:01:58'),
(396, 59, 62, '2021-02-26 08:01:58', '2021-02-26 08:01:58'),
(397, 59, 65, '2021-02-26 08:01:58', '2021-02-26 08:01:58'),
(413, 66, 52, '2021-02-26 17:53:19', '2021-02-26 17:53:19'),
(414, 66, 57, '2021-02-26 17:53:19', '2021-02-26 17:53:19'),
(415, 66, 59, '2021-02-26 17:53:19', '2021-02-26 17:53:19'),
(416, 66, 61, '2021-02-26 17:53:19', '2021-02-26 17:53:19'),
(417, 66, 64, '2021-02-26 17:53:19', '2021-02-26 17:53:19'),
(418, 66, 90, '2021-02-26 17:53:19', '2021-02-26 17:53:19'),
(419, 56, 52, '2021-02-26 17:53:38', '2021-02-26 17:53:38'),
(420, 56, 56, '2021-02-26 17:53:38', '2021-02-26 17:53:38'),
(421, 56, 59, '2021-02-26 17:53:38', '2021-02-26 17:53:38'),
(422, 56, 62, '2021-02-26 17:53:38', '2021-02-26 17:53:38'),
(423, 56, 64, '2021-02-26 17:53:38', '2021-02-26 17:53:38'),
(424, 56, 91, '2021-02-26 17:53:38', '2021-02-26 17:53:38'),
(425, 69, 67, '2021-02-26 17:57:17', '2021-02-26 17:57:17'),
(426, 69, 73, '2021-02-26 17:57:17', '2021-02-26 17:57:17'),
(427, 69, 87, '2021-02-26 17:57:17', '2021-02-26 17:57:17'),
(428, 70, 68, '2021-02-26 17:58:30', '2021-02-26 17:58:30'),
(429, 70, 74, '2021-02-26 17:58:30', '2021-02-26 17:58:30'),
(430, 70, 88, '2021-02-26 17:58:30', '2021-02-26 17:58:30'),
(431, 71, 69, '2021-02-26 17:59:28', '2021-02-26 17:59:28'),
(432, 71, 75, '2021-02-26 17:59:28', '2021-02-26 17:59:28'),
(433, 71, 87, '2021-02-26 17:59:28', '2021-02-26 17:59:28'),
(434, 72, 67, '2021-02-26 18:01:00', '2021-02-26 18:01:00'),
(435, 72, 76, '2021-02-26 18:01:00', '2021-02-26 18:01:00'),
(436, 72, 88, '2021-02-26 18:01:00', '2021-02-26 18:01:00'),
(437, 73, 67, '2021-02-26 18:03:30', '2021-02-26 18:03:30'),
(438, 73, 73, '2021-02-26 18:03:30', '2021-02-26 18:03:30'),
(439, 73, 87, '2021-02-26 18:03:30', '2021-02-26 18:03:30'),
(440, 74, 68, '2021-02-26 18:04:35', '2021-02-26 18:04:35'),
(441, 74, 75, '2021-02-26 18:04:35', '2021-02-26 18:04:35'),
(442, 74, 88, '2021-02-26 18:04:35', '2021-02-26 18:04:35'),
(443, 75, 78, '2021-02-26 18:13:34', '2021-02-26 18:13:34'),
(444, 75, 82, '2021-02-26 18:13:34', '2021-02-26 18:13:34'),
(445, 76, 79, '2021-02-26 18:14:39', '2021-02-26 18:14:39'),
(446, 76, 83, '2021-02-26 18:14:39', '2021-02-26 18:14:39'),
(447, 77, 80, '2021-02-26 18:15:42', '2021-02-26 18:15:42'),
(448, 77, 84, '2021-02-26 18:15:42', '2021-02-26 18:15:42'),
(449, 78, 78, '2021-02-26 18:16:51', '2021-02-26 18:16:51'),
(450, 78, 82, '2021-02-26 18:16:51', '2021-02-26 18:16:51'),
(451, 79, 79, '2021-02-26 18:18:43', '2021-02-26 18:18:43'),
(452, 79, 83, '2021-02-26 18:18:43', '2021-02-26 18:18:43'),
(453, 80, 80, '2021-02-26 18:19:24', '2021-02-26 18:19:24'),
(454, 80, 84, '2021-02-26 18:19:24', '2021-02-26 18:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_keyword`
--

CREATE TABLE `product_keyword` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `keyword_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_keyword`
--

INSERT INTO `product_keyword` (`id`, `product_id`, `keyword_id`, `created_at`, `updated_at`) VALUES
(1, 23, 3, NULL, NULL),
(2, 23, 4, NULL, NULL),
(6, 26, 2, NULL, NULL),
(7, 26, 3, NULL, NULL),
(8, 26, 4, NULL, NULL),
(9, 27, 4, NULL, NULL),
(10, 28, 2, NULL, NULL),
(11, 36, 3, NULL, NULL),
(12, 36, 3, NULL, NULL),
(13, 36, 3, NULL, NULL),
(14, 36, 3, NULL, NULL),
(15, 36, 3, NULL, NULL),
(16, 36, 3, NULL, NULL),
(17, 36, 3, NULL, NULL),
(18, 36, 3, NULL, NULL),
(19, 36, 3, NULL, NULL),
(20, 36, 3, NULL, NULL),
(26, 21, 3, NULL, NULL),
(27, 22, 4, NULL, NULL),
(28, 37, 3, NULL, NULL),
(29, 38, 4, NULL, NULL),
(30, 40, 3, NULL, NULL),
(31, 41, 4, NULL, NULL),
(32, 42, 3, NULL, NULL),
(33, 43, 4, NULL, NULL),
(34, 44, 3, NULL, NULL),
(35, 45, 4, NULL, NULL),
(36, 46, 3, NULL, NULL),
(37, 47, 3, NULL, NULL),
(38, 48, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `star` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(10, 'admin', 'web', '2021-02-20 09:01:55', '2021-02-20 09:01:55'),
(11, 'content', 'web', '2021-02-20 09:02:02', '2021-02-20 09:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(9, 10),
(10, 10),
(11, 10),
(12, 10),
(13, 10),
(14, 10),
(15, 10),
(16, 10),
(17, 10),
(17, 11),
(18, 10),
(18, 11),
(19, 10),
(19, 11),
(20, 10),
(20, 11),
(21, 10),
(22, 10),
(23, 10),
(24, 10),
(25, 10),
(26, 10),
(27, 10),
(28, 10),
(29, 10),
(30, 10),
(30, 11),
(31, 10),
(31, 11),
(32, 10),
(32, 11),
(33, 10),
(33, 11),
(34, 10),
(34, 11),
(35, 10),
(35, 11),
(36, 10),
(36, 11),
(37, 10),
(37, 11),
(38, 10),
(38, 11),
(39, 10),
(40, 10),
(41, 10),
(42, 10),
(43, 10),
(44, 10),
(45, 10),
(46, 10),
(47, 10),
(48, 10),
(49, 10),
(50, 10),
(51, 10),
(52, 10),
(53, 10),
(54, 10),
(55, 10);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `sort` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `title`, `link`, `image`, `status`, `sort`, `created_at`, `updated_at`, `content`) VALUES
(8, NULL, 'https://www.youtube.com/', '1614318973.jpg', 1, 2, '2021-02-25 05:15:21', '2021-02-25 22:57:50', NULL),
(9, NULL, 'https://www.youtube.com/', '1614319057.jpg', 1, 1, '2021-02-25 22:57:37', '2021-02-25 22:57:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE `static` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `position` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`id`, `title`, `slug`, `content`, `created_at`, `updated_at`, `status`, `position`) VALUES
(1, 'Chính sách bảo hành', 'chinh-sach-bao-hanh-1', '<h2>1. Chính sách bảo hành</h2><h2><strong>1. Địa chỉ Trung tâm bảo hành của </strong><a href=\"https://www.dangquangwatch.vn/\"><strong>Đăng Quang Watch</strong></a><strong>:</strong></h2><ol><li>Hà Nội: Số 55 Trần Đăng Ninh, Quận Cầu Giấy, Hà Nội | Tel:&nbsp;024.3793.9481</li><li>Đà Nẵng: Số 36 Hoàng Hoa Thám, Thanh Khê, TP. Đà Nẵng |&nbsp;02363555680</li><li>Hồ Chí Minh: Số 245 Trần Quang Khải, P Tân Định, Quận 1, TP. HCM&nbsp;| Tel:&nbsp;02866.796.555</li></ol><h2><strong>2.&nbsp;Thời gian nhận và trả bảo hành:</strong></h2><p>v&nbsp; Tại trung tâm bảo hành: Từ 8h30 đến 17h00 các ngày trong tuần (trừ chủ nhật và các ngày lễ, Tết).</p><p>v&nbsp; Tại các hệ thống 100 cửa hàng Đăng Quang Watch trên toàn quốc tất cả các ngày trong tuần kể cả ngày lễ và chủ nhật, từ 8h30 đến 21h</p><h2><strong>3. Chính sách bảo hành:</strong></h2><ol><li>Đồng hồ được bảo hành từ 1-10 năm kể từ ngày mua theo quy định của hãng sản xuất (tùy từng hãng sẽ có thời gian bảo hành khác nhau).</li><li>Riêng khách hàng mua đồng hồ tại hệ thống Đăng Quang Watch sẽ được hưởng thêm những quyền lợi sau:</li><li>Thay pin miễn phí trọn đời sản phẩm áp dụng&nbsp;đối với 1 số thương hiệu đồng hồ khi mua tại Đăng Quang Watch</li></ol><h2><strong>4. Phạm</strong>&nbsp;<strong>vi tiếp nhận đồng hồ bảo hành và sửa chữa:</strong></h2><ol><li>Đăng Quang Watch tiếp nhận bảo hành và sửa chữa đối với tất cả các sản phẩm được mua tại hệ thống Đăng Quang&nbsp;Watch.</li><li>Những sản phẩm mang thương hiệu mà Đăng Quang&nbsp;Watch là nhà phân phối độc quyền tại Việt Nam cũng sẽ tiếp nhận bảo hành và sửa chữa.</li><li>Ngoài những trường hợp nêu trên, Đăng Quang&nbsp;Watch sẽ tiếp nhận đồng hồ để bảo hành hoặc sửa chữa cho quý khách hàng.</li></ol><h2><strong>5. Điều kiện để đồng hồ được bảo hành miễn phí và cách tính phí đối với đồng hồ sửa chữa:</strong></h2><ol><li>Nếu đồng hồ mua tại Đăng Quang&nbsp;Watch và còn trong thời gian bảo hành, khách hàng phải xuất trình được những giấy tờ liên quan đến sản phẩm như sổ bảo hành hoặc hóa đơn mua hàng…, khách hàng sẽ được bảo hành miễn phí theo như quy định của hãng sản xuất.</li><li>Nếu đồng hồ hết thời gian bảo hành hoặc Khách hàng không mang theo giấy tờ cần thiết liên quan đến sản phẩm thì Khách hàng sẽ mất phí sửa chữa.</li></ol><h2><strong>6. Phạm vi bảo hành đồng hồ:</strong></h2><ol><li>Đăng Quang&nbsp;Watch chỉ bảo hành các lỗi kỹ thuật về máy (như đồng hồ không chạy, chạy không chính xác), độ chịu nước và pin đồng hồ.</li><li>Nếu đồng hồ gặp các vấn đề về lỗi kỹ thuật như đồng hồ không chạy hoặc chạy không chính xác, hơi nước trên mặt đồng hồ, dây hoặc vỏ đồng hồ bị bong tróc hoặc phai lớp mạ, các lỗi kỹ thuật khác bắt nguồn từ sản phẩm thì Đăng Quang&nbsp;Watch sẽ trực tiếp kiểm tra và đổi mới sản phẩm cho Khách hàng nếu nghiêm trọng.</li></ol><h2><strong>7. Các trường hợp không nằm trong phạm vi bảo hành:</strong></h2><ol><li>Các lỗi về vỏ và dây của đồng hồ như bong tróc hoặc phai lớp mại, ố mặt số…</li><li>Các lỗi rơi vỡ, va đập làm xước kính trong quá trình Khách hàng sử dụng gây ra.</li><li>Dây da bị gẫy, nứt hoặc bong.</li><li>Không bảo hành cho trường hợp điều chỉnh, sử dụng không đúng cách của người dùng.</li><li>Không bảo hành cho đồng hồ đã sửa chữa tại những nơi không phải là trung tâm bảo hành của Đăng Quang&nbsp;Watch.</li></ol><p>Trong thời gian sử dụng nếu gặp bất kỳ trục trặc nào Khách hàng có thể liên hệ trực tiếp với Trung tâm bảo hành của Hãng hoặc phòng CSKH của Công ty Cổ phần Trực tuyến Đăng Quang để được trợ giúp theo số điện thoại: 04.3622.8508 – 0986.68.1189</p><p>Chúng tôi cam kết bảo hành một cách trung thực nhất đảm bảo quyền lợi cho Quý khách, xin Quý khách vui lòng đọc kỹ các quy định bảo hành ghi ở mặt sau phiếu trước khi thực hiện bảo hành sản phẩm.</p><p>Lưu ý:</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Khách hàng chịu trách nhiệm cho chi phí vận chuyển đến Trung tâm bảo hành.</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hết thời hạn bảo hành, chi phí sửa chữa sẽ được trung tâm bảo hành hỗ trợ với giá ưu đãi nhất.</p>', NULL, '2021-02-17 01:12:53', 1, 0),
(3, 'Chính sách đổi hàng', 'chinh-sach-doi-hang-3', '<h2>2. Chính sách đổi hàng</h2><p>&nbsp;</p><p>Chính sách đổi trả hàng nhằm đảm bảo quyền lợi tối đa cho khách hàng khi mua sắm hàng hóa tại Dangquangwatch.vn, cụ thể như sau:</p><p>&nbsp;</p><p>Nhằm đảm bảo quyền lợi người tiêu dùng, nâng cao chất lượng dịch vụ sau bán hàng, Khách hàng được đổi sản phẩm mới cùng loại khi sản phẩm gặp sự cố không thể khắc phục được (do lỗi kỹ thuật của nhà sản xuất). Sản phẩm lỗi chỉ được đổi sau khi đã có xác nhận của kỹ thuật và tuân thủ theo các điều kiện sau đây:</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sản phẩm mới mua trong vòng 01 ngày kể từ ngày xuất bán. Khách hàng mua trực tuyến, thời gian được tính từ ngày khách nhận được sản phẩm;</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hàng hóa được xác định nguồn gốc mua tại Công ty Cổ phần Trực tuyến Đăng Quang (căn cứ vào hóa đơn mua hàng, phiếu bảo hành và tem nhận diện dán trên sản phẩm);</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hàng hóa được xác nhận bị lỗi kỹ thuật của Kỹ thuật viên của Trung Tâm Bảo Hành của Hãng;</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hàng hóa vẫn còn nguyên tem niêm phong (không bị rách vỡ hoặc dán lại) của nhà sản xuất hoặc tem của Đăng QuangWatch, phải còn nguyên vẹn vỏ thùng, xốp và đầy đủ các phụ kiện kèm theo, quà khuyến mại (nếu có)…</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hàng hóa nhận lại không bị lỗi hình thức (trầy xước, móp méo, ố vàng, vỡ …)</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hàng hóa nhận lại phải còn đầy đủ linh kiện.</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hàng hóa khi nhận lại phải có đầy đủ các chứng từ kèm theo (Phiếu bảo hành, sách hướng dẫn … )</p><p>Đồng hồ Đăng Quang sẽ thực hiện đổi hàng cho khách, nhưng không hoàn lại phí vận chuyển/ giao hàng (nếu có), trừ những trường hợp sau:</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Không đúng chủng loại, mẫu mã như quý khách đã đặt hàng.</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Không đủ số lượng, không đủ bộ/ thông tin như trong đơn hàng ban đầu.</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Không đạt chất lượng như: quá hạn sử dụng, hết bảo hành, không vận hành được, hỏng hóc khách quan trong phạm vi bảo hành của nhà cung cấp, nhà sản xuất,..</p><h2><strong>Trường hợp không chấp nhận đổi hoặc trả sản phẩm:</strong></h2><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Quý khách muốn thay đổi mẫu mã, chủng loại sản phẩm;</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lỗi do người sử dụng;</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Không chấp nhận các lỗi ngoại quan (xước, móp, méo, vỡ, sứt…) khi khách hàng đã mang sản phẩm ra khỏi cửa hàng Công ty;</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Quý khách vận hành không đúng chỉ dẫn, gây hỏng hóc sản phẩm, hàng hóa;</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Quý khách tự làm ảnh hưởng tình trạng bên ngoài như &nbsp;bong tróc, bể vỡ, …;</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Quý khách yêu cầu đổi trả hàng hóa vì lý do sai phạm về hình thức (trầy xước, móp méo, ố vàng, bể vỡ,…) mà khi quý khách mua hàng hóa vẫn còn nguyên vẹn.</p><p>Chú ý: Khách hàng xem kỹ sản phẩm trước khi mua, sản phẩm đã bán ra không nhập lại. Để đảm bảo cho mọi khách hàng luôn mua được sản phẩm mới.</p><h2><strong>Qui trình xử lý thủ tục đổi trả hàng:</strong></h2><p>&nbsp;Khách hàng có thể liên hệ trực tiếp với Trung Tâm Bảo Hành của Hãng hoặc thông qua Phòng Bảo hành của Công ty để thay mặt chuyển hàng hóa đến Hãng để kiểm tra. Sau khi có Giấy Xác Nhận Tình Trạng với nội dung hàng hóa hư hỏng do lỗi kỹ thuật không thể sửa chữa, chấp nhận đổi mới. Việc đổi hàng sẽ được thực hiện theo đúng quy định của Công ty.</p>', '2021-02-17 00:55:04', '2021-02-17 00:55:04', 1, 0),
(4, 'Chính sách bảo mật', 'chinh-sach-bao-mat-4', '<h2>3. Chính sách bảo mật</h2><p>Dangquangwatch.vn cam kết sẽ bảo mật những thông tin mang tính riêng tư của khách hàng. Quý khách vui lòng đọc bản “Chính sách bảo mật” dưới đây để hiểu hơn những cam kết mà chúng tôi thực hiện, nhằm tôn trọng và bảo vệ quyền lợi của người truy cập:</p><h2><strong>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mục đích và phạm vi thu thập:</strong></h2><p>Để truy cập và sử dụng một số dịch vụ tại&nbsp;dangquangwatch.vn, quý khách có thể được yêu cầu đăng ký với chúng tôi thông tin cá nhân (thành viên), bao gồm: Email, Họ tên, số ĐT liên lạc, địa chỉ, tên đăng nhập, mật khẩu.</p><p>Chúng tôi cũng thu thập thông tin về số lần viếng thăm, bao gồm số trang quý khách xem, số links (liên kết) bạn click, những thông tin khác liên quan đến việc kết nối đến Donghodangquang.com và các thông tin mà trình duyệt Web (Browser) quý khách sử dụng mỗi khi truy cập vào website&nbsp;http://www.dangquangwatch.vn/, gồm: địa chỉ IP, loại Browser, ngôn ngữ sử dụng, thời gian và những địa chỉ mà Browser truy xuất đến.</p><h2><strong>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phạm vi sử dụng thông tin:</strong></h2><p>Các thông tin thu thập thông qua website &nbsp;dangquangwatch.vn&nbsp;sẽ giúp chúng tôi:</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hỗ trợ khách hàng khi mua sản phẩm;</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Giải đáp thắc mắc khách hàng;</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cung cấp cho bạn thông tin mới nhất trên Website của chúng tôi;</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Xem xét và nâng cấp nội dung và giao diện của Website;</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thực hiện các bản khảo sát khách hàng;</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thực hiện các hoạt động quảng bá liên quan đến các sản phẩm và dịch vụ của Đồng hồ Đăng Quang.</p><h2><strong>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thời gian lưu trữ thông tin:</strong></h2><p>Dữ liệu cá nhân của thành viên sẽ được lưu trữ cho đến khi có yêu cầu hủy bỏ hoặc tự thành viên đăng nhập và thực hiện hủy bỏ. Còn lại trong mọi trường hợp thông tin cá nhân Thành viên sẽ được bảo mật trên máy chủ của Đăng Quang Watch</p><h2><strong>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Địa chỉ của đơn vị thu thập và quản lý thông tin cá nhân</strong></h2><p><strong>Công ty Cổ phần Trực tuyến Đăng Quang</strong></p><p>Địa chỉ: Tổ 13, phường Thượng Thanh, Q. Long Biên, Tp Hà Nội.</p><p>Tel: 024.36228508</p><p>Email: <a href=\"mailto:sieuthidangquang@gmail.com\">sieuthidangquang@gmail.com</a></p><h2><strong>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phương tiện và công cụ để người dùng tiếp cận và chỉnh sửa dữ liệu cá nhân của mình:</strong></h2><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thành viên có quyền tự kiểm tra, cập nhật, điều chỉnh hoặc hủy bỏ thông tin cá nhân của mình bằng cách đăng nhập vào tài khoản và chỉnh sửa thông tin cá nhân hoặc yêu cầu Đồng hồ Đăng Quang thực hiện việc này;</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thành viên có quyền gửi khiếu nại về người bán đến Ban quản trị của Đồng hồ Đăng Quang tại địa chỉ sieuthidangquang@gmail.com . Khi tiếp nhận những phản hồi này, Đồng hồ Đăng Quang sẽ xác nhận lại thông tin, trường hợp đúng như phản ánh của Thành viên tùy theo mức độ, Đồng hồ Đăng Quang sẽ có những biện pháp xử lý kịp thời.</p><h2><strong>6.&nbsp; &nbsp; &nbsp; Cam kết bảo mật thông tin cá nhân khách hàng:</strong></h2><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thông tin cá nhân của Thành viên trên Donghodangquang.com được chúng tôi cam kết bảo mật tuyệt đối theo chính sách bảo vệ thông tin cá nhân của Đồng hồ Đăng Quang. Việc thu thập và sử dụng thông tin của mỗi Thành viên chỉ được thực hiện khi có sự đồng ý của khách hàng đó trừ những trường hợp pháp luật có quy định khác.</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Không sử dụng, không chuyển giao, cung cấp hay tiết lộ cho bên thứ ba nào về thông tin cá nhân của Thành viên khi không có sự cho phép đồng ý từ Thành viên;</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trong trường hợp máy chủ lưu trữ thông tin bị hacker tấn công dẫn đến mất mát dữ liệu cá nhân Thành viên, Đồng hồ Đăng Quang sẽ có trách nhiện thông báo vụ việc cho cơ quan chức năng điều tra xử lý kịp thời và thông báo cho Thành viên được biết.</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bảo mật tuyệt đối mọi thông tin giao dịch trực tuyến của Thành viên bao gồm thông tin hóa đơn kế toán chứng từ số hóa tại khu vực dữ liệu trung tâm an toán cấp 1 của Đồng hồ Đăng Quang.</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ban quản trị Đồng hồ Đăng Quang yêu cầu các cá nhân khi đăngkí/mua hàng là Thành viên, phải cung cấp đầy đủ thông tin cá nhân có liên quan như: họ và tên, địa chỉ liên lạc, email, số thẻ thanh toán, … và chịu trách nhiệm về tính pháp lý của những thông tin trên. Ban quản trị Đồng hồ Đăng Quang không chịu trách nhiệm cũng như không giải quyết mọi khiếu nại có liên quan đến quyền lợi của Thành viên đó nếu xét thấy tất cả thông tin cá nhân của Thành viên đó cung cấp khi đăng ký ban đầu là không chính xác.</p><p>&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ban quản trị khuyến cáo Thành viên nên bảo mật các thông tin liên qua đến mật khẩu truy xuất của mình và không nên chia sẻ với bất kỳ người nào khác. Nếu sử dụng máy tính chung nhiều người, Thành viên nên đăng xuất, hoặc thoát hết tất cả các cửa sổ Website đang mở.</p>', '2021-02-17 01:35:54', '2021-02-17 01:35:54', 1, 0),
(5, 'Chính sách vận chuyển', 'chinh-sach-van-chuyen-5', '<h2>4. Chính sách vận chuyển</h2><p>Ngay sau khi đơn hàng được gửi đến, chúng tôi sẽ gửi thư (hoặc gọi điện) xác nhận rằng hàng hóa của Quý khách đang được chuyển đi. Hàng sẽ đến tận tay Quý khách trong vòng từ 1 đến 5 ngày (trừ ngày lễ và chủ nhật).</p><p>- Phí vận chuyển: Khách hàng được <strong>MIỄN PHÍ </strong>vận chuyển trên <strong>Toàn quốc</strong>.</p><h2>- Thời gian xử lý đơn hàng:</h2><p>+ Đơn đặt hàng từ 8h30 đến 17h30 thì chúng tôi sẽ liên hệ trong ngày.</p><p>+ Đơn đặt hàng sau 17h30 thì chúng tôi sẽ liên hệ vào sáng hôm sau.</p><h2>- Thời gian giao hàng:</h2><p>+ Giao hàng trong ngày hoặc từ 1 - 2 ngày cho khách hàng có địa chỉ ở các quận nội thành Thành phố Hà Nội và các tỉnh lân cận.</p><p>+ Giao hàng từ 2 – 5 ngày cho khách hàng có địa chỉ ở các tỉnh xa, miền Trung và miền Nam.</p><p>+ Tuy nhiên, vào thời gian cao điểm (lễ, tết…) chúng tôi không thể giao hàng ngay nên sẽ thỏa thuận thời gian giao hàng cho Quý khách. Kính mong Quý khách thông cảm!</p><p>Trước khi giao hàng chúng tôi sẽ gọi điện xác nhận rằng hàng hóa của Quý khách đang được chuyển đi. Hàng sẽ đến tận tay Quý khách trong vòng từ 1 đến 5 ngày (trừ ngày lễ và chủ nhật).</p><p>Chúng tôi đảm bảo giao hàng trong vòng 24 - 48h (kể cả thứ 7 và Chủ Nhật) trong nội thành Hà Nội. Việc giao hàng sẽ được tiến hành ngay khi chúng tôi xác nhận được giao dịch. Nếu trong đợt giao hàng đầu tiên Quý khách không có mặt, chúng tôi sẽ gửi email (hoặc gọi điện) đến Quý khách để sắp xếp thời gian giao hàng khác thuận tiện hơn. Nếu đợt giao hàng thứ hai bị hoãn với cùng lý do, Quý khách sẽ đến kho hàng của chúng tôi để nhận hàng trong thời gian hoạt động từ 8h30 đến 21h30.</p><p>&nbsp;Tuy hiếm xảy ra nhưng nếu quý khách phát hiện sản phẩm bị khiếm khuyết hay thiếu sản phẩm trong đơn hàng, Quý khách có thể tham khảo quy định đổi trả hàng hoặc liên hệ với chúng tôi qua số điện thoại (04) 3622 8508 hoặc hotline 0986681189, chúng tôi cam kết sẽ giải quyết sớm nhất cho Quý khách./</p>', '2021-02-17 01:36:18', '2021-02-17 01:36:18', 1, 0),
(6, 'Hướng dẫn thanh toán', 'huong-dan-thanh-toan-6', '<h2>5. Hướng dẫn thanh toán</h2><p>&nbsp;</p><p>Quý khách có thể thanh toán khi mua hàng tại hệ thống cửa hàng ĐĂNG QUANG&nbsp;WATCH hoặc đặt mua hàng Online bằng những cách sau:</p><p>&nbsp;</p><h2><strong>1. Thanh toán tiền mặt tại nhà khi nhận hàng thông qua hình thức giao hàng trực tiếp, chuyển phát nhanh hoặc COD:</strong></h2><p>Khi nhân viên giao hàng giao phát, khách hàng kiểm tra sản phẩm về hình thức đảm bảo, khách hàng nhận hàng và thanh toán trực tiếp cho nhân viên giao hàng theo giá trị tiền trên hóa đơn. Ngoài ra khách hàng không phải thanh toán bất kỳ 1 chi phí nào khác.</p><p>&nbsp;Đơn giản, An toàn, Không chút rắc rối mà lại an tâm tuyệt đối khi quý khách chọn thanh toán COD tại Đăng Quang Watch.</p><h2><strong>2. Thanh toán tiền mặt tại cửa hàng:</strong></h2><p>Khách hàng đến cửa hàng tham quan, mua sản phẩm sẽ thanh toán trực tiếp bằng tiền mặt hoặc quẹt thẻ qua POS ngân hàng tại cửa hàng.</p><h2><strong>3. Chuyển khoản qua ngân hàng:</strong></h2><p>Nếu địa điểm giao hàng là ngoại thành, ngoại tỉnh nhưng khác với địa điểm thanh toán (trong trường hợp Quý khách gửi quà, gửi hàng cho bạn bè, đối tác …) chúng tôi sẽ thu tiền trước 100% giá trị hàng bằng phương thức chuyển khoản trước khi giao hàng. Khách hàng được miễn phí vận chuyển</p><p>Khách hàng có thể hoàn toàn yên tâm với hình thức thanh toán này. vì khi chuyển tiền ở ngân hàng , ngân hàng sẽ đưa cho bạn một giấy ủy nhiệm chi trong đó có số tiền và số TK mà&nbsp; bạn chuyển tiền tới, nên các bạn&nbsp; không phải lo lắng mình chuyển tiền rồi mà ĐĂNG&nbsp;QUANG&nbsp;WATCH không chuyển hàng, giấy ủy nhiệm chi đó chính là bằng chứng bạn đã chuyển tiền&nbsp; và&nbsp; ngân hàng&nbsp; mà bạn chuyên tiền có thể làm rõ điều đó cho bạn. Chúng tôi&nbsp; bán hàng luôn đăt chữ&nbsp; tín&nbsp; lên đầu và luôn cố gắng có những chất lượng dịch vụ tốt nhất với khách hàng.</p><p>&nbsp;<i>a. Thanh toán chuyển khoản trực tiếp (nhận hàng sau):</i></p><p>&nbsp;Chủ tài khoản:&nbsp;<strong>Đặng Vinh Quang</strong></p><p>-Số tài khoản:&nbsp;<strong>12410006669669&nbsp;</strong>Ngân hàng<strong>&nbsp;Đầu tư và phát triển BIDV</strong>&nbsp;Chi nhánh Hoàn Kiếm - Hà Nội</p><p>-Số tài khoản :<strong>&nbsp; 1604205334030</strong>&nbsp;Ngân hàng&nbsp;<strong>Agribank</strong>&nbsp;chi nhánh Phú Nhuận – TP HCM</p><p>Ngay sau khi chúng tôi nhận được tiền, Qúy khách sẽ nhận được hàng từ 2-3 ngày.</p><p>Để biết thêm thông tin chi tiết, Quý khách vui lòng liên hệ trực tiếp với nhân viên tư vấn bán hàng hoặc liên hệ theo số tổng đài miễn phí 18006005 để được hỗ trợ.Xin trân trọng cảm ơn!</p>', '2021-02-17 01:36:38', '2021-02-17 01:36:38', 1, 0),
(7, 'Hướng dẫn mua hàng', 'huong-dan-mua-hang-7', '<h2>6. Hướng dẫn mua hàng</h2><p>Mua hàng qua mạng không phức tạp như nhiều người nghĩ, chúng tôi vui mừng khi bạn không có suy nghĩ như vậy, hãy tìm kiếm sản phẩm bạn ưa thích và làm theo hướng dẫn.</p><h2><strong>I. TÌM KIẾM SẢN PHẨM</strong></h2><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/B1.jpg\" alt=\"\"></figure><p>Bạn có thể lựa chọn một trong những cách mua hàng sau :</p><p><strong>a. Gọi điện thoại</strong>&nbsp;đến tổng đài (<strong>04-3622.8508</strong>) hoặc hotline (<strong>0986.68.1189</strong>) từ&nbsp;<strong>8h30-21h30</strong>&nbsp;(cả CN &amp; ngày lễ) nhân viên chúng tôi luôn sẵn sàng phục vụ bạn.</p><h2><strong>b. Đặt mua hàng trên website.</strong></h2><p>Tìm sản phẩm cần mua: Bạn có thể tìm kiếm sản phẩm theo nhiều cách:</p><p><strong>- Cách 1</strong>: Tìm nhanh khi đã biết tên sản phẩm. Bạn chỉ cần gõ \"Tên sản phẩm\" vào box tìm kiếm, hệ thống sẽ gợi ý bạn tên sản phẩm đúng nhất hiện có trong hệ thống.</p><p><strong>- Cách 2</strong>: Vào \"Danh mục sản phẩm\" trên Menu ngang của website. Có thể tìm sản phẩm theo hãng hoặc theo các tiêu chí lọc theo tính năng sản phẩm bên trái.</p><h2><strong>II.&nbsp;XEM THÔNG TIN&nbsp;CHI TIẾT SẢN PHẨM&nbsp;</strong></h2><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/B2.jpg\" alt=\"\"></figure><h2><strong>III.&nbsp;THÊM SẢN PHẨM VÀO GIỎ HÀNG</strong></h2><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/B3.jpg\" alt=\"\"></figure><p><strong>IV. CHI TIẾT GIỎ HÀNG CỦA BẠN</strong></p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/B4.jpg\" alt=\"\"></figure><p>Sau khi xem thông tin chi tiết sản phẩm, bạn đã ưng ý sản phẩm hãy nhanh tay đặt nhấn nút \" đặt mua \".</p><h2><strong>V. ĐẶT MUA SẢN PHẨM</strong></h2><p><strong>- Nhập đầy đủ các thông tin và tiến hành mua sản phẩm</strong></p><figure class=\"image\"><img src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/B5.jpg\" alt=\"\"></figure><p><strong>Hoàn thành việc mua sản phẩm: Như vậy bạn đã đặt hàng thành công tại Đăng Quang Watch</strong></p><p>Sau khi đặt hàng thành công, Đăng Quang Watch&nbsp;sẽ liên hệ lại bạn để xác nhận đơn hàng và tư vấn cụ thể về các chính sách khác như ưu đãi khi mua hàng, hình thức giao hàng, hình thức thanh toán...</p><p>&nbsp;</p>', '2021-02-17 01:37:22', '2021-02-17 01:38:03', 1, 0),
(9, 'Thông tin về chúng tôi', 'thong-tin-ve-chung-toi-9', '<h3><strong>The standard Lorem Ipsum passage, used since the 1500s</strong></h3><p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p><h3><strong>Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</strong></h3><p>\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p><h3><strong>1914 translation by H. Rackham</strong></h3><p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p><h3><strong>Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</strong></h3><p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p><h3><strong>1914 translation by H. Rackham</strong></h3><p>\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', '2021-02-19 01:07:52', '2021-02-26 11:22:30', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `total_money` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `type` int(11) NOT NULL DEFAULT 1 COMMENT '1 thanh toan thuong, 2 thanh toan online',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `user_id`, `total_money`, `name`, `email`, `phone`, `address`, `note`, `status`, `type`, `created_at`, `updated_at`) VALUES
(71, 35, '4,500,000.00', 'Nguyễn Bá Thái', 'nobmtpro1@gmail.com', '0855566906', '4 dsfjh', NULL, 3, 1, '2021-02-27 05:51:10', '2021-02-27 06:35:59'),
(72, 35, '21,000,000.00', 'Nguyễn Bá Thái', 'nobmtpro1@gmail.com', '0855566906', '4 dsfjh', NULL, 1, 1, '2021-02-27 05:57:00', '2021-02-27 05:57:00'),
(73, 35, '21,000,000.00', 'Nguyễn Bá Thái', 'nobmtpro1@gmail.com', '0855566906', '4 dsfjh', NULL, 3, 1, '2021-02-27 05:57:28', '2021-02-27 06:36:02'),
(74, 35, '21,000,000.00', 'Nguyễn Bá Thái', 'nobmtpro1@gmail.com', '0855566906', '4 dsfjh', NULL, 1, 1, '2021-02-27 05:57:46', '2021-02-27 06:35:39'),
(75, 35, '4,000,000.00', 'Nguyễn Bá Thái', 'nobmtpro1@gmail.com', '0855566906', '4 dsfjh', NULL, 1, 1, '2021-02-27 15:26:52', '2021-02-27 15:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT 0,
  `confirmed` int(11) NOT NULL DEFAULT 0,
  `confirmcode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `avatar`, `remember_token`, `created_at`, `updated_at`, `level`, `confirmed`, `confirmcode`) VALUES
(35, 'Nguyễn Bá Thái', 'nobmtpro1@gmail.com', NULL, '$2y$10$Hd827.TPz28kWOozYLvAsuuVBCxwrcCctrEDJx/XG8Ep7sU7v.7.y', '0855566906', '4 dsfjh', NULL, 'tXAUPPZUE84ttQOUpcluNk299LKk1LyELcY4N7ErJRiAj0QTnzjqkEkWwnEU', '2021-02-20 09:02:54', '2021-02-24 23:15:58', 1, 1, NULL),
(45, 'nobmtpro111@gmail.com', 'nobmtpro111@gmail.com', NULL, '$2y$10$2nlkpXdcDf6ukeX8HP1l/OuU0CCTATgtaFviSGiDPGJjqpqjUGEMK', '1', NULL, NULL, NULL, '2021-02-26 02:15:54', '2021-02-26 02:16:07', 0, 0, 1614330967);

-- --------------------------------------------------------

--
-- Table structure for table `user_coupon`
--

CREATE TABLE `user_coupon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `voucher_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_slug_index` (`slug`),
  ADD KEY `article_hot_index` (`hot`),
  ADD KEY `article_active_index` (`status`),
  ADD KEY `articlecategory_id` (`articlecategory_id`);

--
-- Indexes for table `articlecategory`
--
ALTER TABLE `articlecategory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articlecategory_slug_unique` (`slug`);

--
-- Indexes for table `attr`
--
ALTER TABLE `attr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `a_category_id` (`a_category_id`),
  ADD KEY `a_category_id_2` (`a_category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_c_slug_unique` (`c_slug`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keyword`
--
ALTER TABLE `keyword`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `keyword_k_slug_unique` (`k_slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_p_slug_unique` (`p_slug`),
  ADD KEY `product_p_hot_index` (`p_hot`),
  ADD KEY `product_p_status_index` (`p_status`),
  ADD KEY `p_brand_id` (`p_category_id`);

--
-- Indexes for table `product_attr`
--
ALTER TABLE `product_attr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `attr_id` (`attr_id`);

--
-- Indexes for table `product_keyword`
--
ALTER TABLE `product_keyword`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_keyword_product_id_index` (`product_id`),
  ADD KEY `product_keyword_keyword_id_index` (`keyword_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `review_user_id_index` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static`
--
ALTER TABLE `static`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_coupon`
--
ALTER TABLE `user_coupon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_coupon_user_id_voucher_id_unique` (`user_id`,`voucher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `articlecategory`
--
ALTER TABLE `articlecategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `attr`
--
ALTER TABLE `attr`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keyword`
--
ALTER TABLE `keyword`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `product_attr`
--
ALTER TABLE `product_attr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=455;

--
-- AUTO_INCREMENT for table `product_keyword`
--
ALTER TABLE `product_keyword`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `static`
--
ALTER TABLE `static`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user_coupon`
--
ALTER TABLE `user_coupon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`articlecategory_id`) REFERENCES `articlecategory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attr`
--
ALTER TABLE `attr`
  ADD CONSTRAINT `attr_ibfk_1` FOREIGN KEY (`a_category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`p_category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
