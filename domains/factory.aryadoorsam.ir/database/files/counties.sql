-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.9.1-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for example
CREATE DATABASE IF NOT EXISTS `laravel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci */;
USE `laravel`;

-- Dumping structure for table example.counties
CREATE TABLE IF NOT EXISTS `counties` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `province_id` bigint(20) unsigned NOT NULL,
    `distance` int(11) NOT NULL,
    `distance_time` time NOT NULL,
    PRIMARY KEY (`id`),
    KEY `counties_province_id_foreign` (`province_id`),
    CONSTRAINT `counties_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=430 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table example.counties: ~429 rows (approximately)
/*!40000 ALTER TABLE `counties` DISABLE KEYS */;
REPLACE INTO `counties` (`id`, `title`, `province_id`, `distance`, `distance_time`) VALUES
	(1, 'آذرشهر', 1, 666, '05:59:00'),
	(2, 'اسکو', 1, 643, '05:47:00'),
	(3, 'اهر', 1, 686, '06:12:00'),
	(4, 'بستان آباد', 1, 565, '05:03:00'),
	(5, 'بناب', 1, 595, '05:37:00'),
	(6, 'تبریز', 1, 612, '05:28:00'),
	(7, 'جلفا', 1, 751, '06:51:00'),
	(8, 'چاراویماق', 1, 0, '00:00:00'),
	(9, 'خداآفرین', 1, 0, '00:00:00'),
	(10, 'سراب', 1, 636, '05:45:00'),
	(11, 'شبستر', 1, 684, '06:08:00'),
	(12, 'عجب شیر', 1, 617, '05:49:00'),
	(13, 'کلیبر', 1, 749, '06:59:00'),
	(14, 'مراغه', 1, 578, '05:27:00'),
	(15, 'مرند', 1, 685, '06:10:00'),
	(16, 'ملکان', 1, 617, '05:50:00'),
	(17, 'میانه', 1, 456, '04:15:00'),
	(18, 'ورزقان', 1, 667, '06:10:00'),
	(19, 'هریس', 1, 635, '06:02:00'),
	(20, 'هشترود', 1, 513, '04:40:00'),
	(21, 'ارومیه', 2, 753, '06:51:00'),
	(22, 'اشنویه', 2, 743, '07:26:00'),
	(23, 'بوکان', 2, 653, '06:32:00'),
	(24, 'پلدشت', 2, 833, '07:53:00'),
	(25, 'پیرانشهر', 2, 760, '07:30:00'),
	(26, 'تکاب', 2, 514, '05:38:00'),
	(27, 'چالدران', 2, 853, '08:32:00'),
	(28, 'چایپاره', 2, 798, '00:00:00'),
	(29, 'خوی', 2, 779, '07:11:00'),
	(30, 'سردشت', 2, 748, '07:44:00'),
	(31, 'سلماس', 2, 777, '07:13:00'),
	(32, 'شاهین دژ', 2, 596, '06:39:00'),
	(33, 'شوط', 2, 836, '08:10:00'),
	(34, 'ماکو', 2, 870, '08:22:00'),
	(35, 'مهاباد', 2, 687, '06:40:00'),
	(36, 'میاندوآب', 2, 640, '06:03:00'),
	(37, 'نقده', 2, 713, '06:56:00'),
	(38, 'اردبیل', 3, 573, '05:30:00'),
	(39, 'بیله سوار', 3, 731, '07:31:00'),
	(40, 'پارس آباد', 3, 797, '08:06:00'),
	(41, 'خلخال', 3, 461, '04:28:00'),
	(42, 'سرعین', 3, 601, '05:46:00'),
	(43, 'کوثر', 3, 0, '00:00:00'),
	(44, 'گرمی', 3, 679, '06:51:00'),
	(45, 'مشگین شهر', 3, 662, '06:21:00'),
	(46, 'نمین', 3, 546, '05:13:00'),
	(47, 'نیر', 3, 608, '05:49:00'),
	(48, 'آران وبیدگل', 4, 252, '02:19:00'),
	(49, 'اردستان', 4, 359, '03:13:00'),
	(50, 'اصفهان', 4, 436, '03:52:00'),
	(51, 'برخوار', 4, 0, '00:00:00'),
	(52, 'بویین و میاندشت', 4, 447, '04:33:00'),
	(53, 'تیران وکرون', 4, 469, '04:10:00'),
	(54, 'چادگان', 4, 455, '04:47:00'),
	(55, 'خمینی شهر', 4, 443, '03:57:00'),
	(56, 'خوانسار', 4, 383, '03:53:00'),
	(57, 'خور و بیابانک', 4, 696, '06:53:00'),
	(58, 'دهاقان', 4, 538, '04:52:00'),
	(59, 'سمیرم', 4, 597, '05:27:00'),
	(60, 'شاهین شهرومیمه', 4, 422, '03:45:00'),
	(61, 'شهرضا', 4, 516, '04:40:00'),
	(62, 'فریدن', 4, 0, '00:00:00'),
	(63, 'فریدونشهر', 4, 462, '04:53:00'),
	(64, 'فلاورجان', 4, 458, '04:04:00'),
	(65, 'کاشان', 4, 246, '02:12:00'),
	(66, 'گلپایگان', 4, 357, '03:34:00'),
	(67, 'لنجان', 4, 0, '00:00:00'),
	(68, 'مبارکه', 4, 501, '04:26:00'),
	(69, 'نایین', 4, 452, '04:09:00'),
	(70, 'نجف آباد', 4, 463, '04:10:00'),
	(71, 'نطنز', 4, 322, '02:54:00'),
	(72, 'اشتهارد', 5, 100, '01:00:00'),
	(73, 'ساوجبلاغ', 5, 0, '00:00:00'),
	(74, 'طالقان', 5, 140, '01:24:00'),
	(75, 'فردیس', 5, 44, '00:28:00'),
	(76, 'کرج', 5, 44, '00:26:00'),
	(77, 'نظرآباد', 5, 87, '00:48:00'),
	(78, 'آبدانان', 6, 651, '07:02:00'),
	(79, 'ایلام', 6, 669, '06:33:00'),
	(80, 'ایوان', 6, 633, '06:07:00'),
	(81, 'بدره', 6, 654, '06:52:00'),
	(82, 'چرداول', 6, 0, '00:00:00'),
	(83, 'دره شهر', 6, 611, '06:21:00'),
	(84, 'دهلران', 6, 752, '07:23:00'),
	(85, 'سیروان', 6, 0, '00:00:00'),
	(86, 'ملکشاهی', 6, 0, '00:00:00'),
	(87, 'مهران', 6, 750, '07:25:00'),
	(88, 'بوشهر', 7, 1033, '10:26:00'),
	(89, 'تنگستان', 7, 0, '00:00:00'),
	(90, 'جم', 7, 1188, '11:50:00'),
	(91, 'دشتستان', 7, 0, '00:00:00'),
	(92, 'دشتی', 7, 0, '00:00:00'),
	(93, 'دیر', 7, 1188, '12:02:00'),
	(94, 'دیلم', 7, 1022, '09:41:00'),
	(95, 'عسلویه', 7, 1258, '12:32:00'),
	(96, 'کنگان', 7, 1188, '11:56:00'),
	(97, 'گناوه', 7, 1092, '10:23:00'),
	(98, 'اسلامشهر', 8, 27, '00:16:00'),
	(99, 'بهارستان', 8, 6, '00:05:00'),
	(100, 'پاکدشت', 8, 41, '00:27:00'),
	(101, 'پردیس', 8, 41, '00:27:00'),
	(102, 'پیشوا', 8, 62, '00:40:00'),
	(103, 'تهران', 8, 1, '00:00:00'),
	(104, 'دماوند', 8, 71, '00:46:00'),
	(105, 'رباطکریم', 8, 41, '00:24:00'),
	(106, 'ری', 8, 17, '00:11:00'),
	(107, 'شمیرانات', 8, 0, '00:00:00'),
	(108, 'شهریار', 8, 39, '00:25:00'),
	(109, 'فیروزکوه', 8, 142, '01:24:00'),
	(110, 'قدس', 8, 28, '00:18:00'),
	(111, 'قرچک', 8, 40, '00:25:00'),
	(112, 'ملارد', 8, 43, '00:25:00'),
	(113, 'ورامین', 8, 53, '00:34:00'),
	(114, 'اردل', 9, 602, '05:39:00'),
	(115, 'بروجن', 9, 544, '05:02:00'),
	(116, 'بن', 9, 0, '00:00:00'),
	(117, 'سامان', 9, 510, '04:42:00'),
	(118, 'شهرکرد', 9, 538, '04:51:00'),
	(119, 'فارسان', 9, 572, '05:12:00'),
	(120, 'کوهرنگ', 9, 514, '05:46:00'),
	(121, 'کیار', 9, 0, '00:00:00'),
	(122, 'لردگان', 9, 644, '06:07:00'),
	(123, 'بشرویه', 10, 979, '10:34:00'),
	(124, 'بیرجند', 10, 1135, '11:55:00'),
	(125, 'خوسف', 10, 1123, '12:07:00'),
	(126, 'درمیان', 10, 0, '00:00:00'),
	(127, 'زیرکوه', 10, 0, '00:00:00'),
	(128, 'سرایان', 10, 977, '10:15:00'),
	(129, 'سربیشه', 10, 1199, '12:31:00'),
	(130, 'طبس', 10, 886, '09:14:00'),
	(131, 'فردوس', 10, 940, '09:47:00'),
	(132, 'قاینات', 10, 0, '00:00:00'),
	(133, 'نهبندان', 10, 1324, '14:01:00'),
	(134, 'باخرز', 11, 1034, '10:25:00'),
	(135, 'بجستان', 11, 873, '09:08:00'),
	(136, 'بردسکن', 11, 781, '08:01:00'),
	(137, 'بینالود', 11, 828, '08:09:00'),
	(138, 'تایباد', 11, 1053, '10:36:00'),
	(139, 'تربت جام', 11, 990, '09:53:00'),
	(140, 'تربت حیدریه', 11, 936, '09:22:00'),
	(141, 'جغتای', 11, 744, '07:48:00'),
	(142, 'جوین', 11, 0, '00:00:00'),
	(143, 'چناران', 11, 843, '08:41:00'),
	(144, 'خلیل آباد', 11, 808, '08:22:00'),
	(145, 'خواف', 11, 1058, '10:47:00'),
	(146, 'خوشاب', 11, 0, '00:00:00'),
	(147, 'داورزن', 11, 582, '05:46:00'),
	(148, 'درگز', 11, 950, '10:01:00'),
	(149, 'رشتخوار', 11, 990, '09:59:00'),
	(150, 'زاوه', 11, 0, '00:00:00'),
	(151, 'سبزوار', 11, 657, '06:30:00'),
	(152, 'سرخس', 11, 1049, '10:44:00'),
	(153, 'فریمان', 11, 901, '08:58:00'),
	(154, 'فیروزه', 11, 776, '07:39:00'),
	(155, 'قوچان', 11, 819, '08:21:00'),
	(156, 'کاشمر', 11, 824, '08:31:00'),
	(157, 'کلات', 11, 1044, '10:34:00'),
	(158, 'گناباد', 11, 922, '09:45:00'),
	(159, 'مشهد', 11, 904, '08:52:00'),
	(160, 'مه ولات', 11, 0, '00:00:00'),
	(161, 'نیشابور', 11, 766, '07:34:00'),
	(162, 'اسفراین', 12, 764, '07:48:00'),
	(163, 'بجنورد', 12, 692, '07:05:00'),
	(164, 'جاجرم', 12, 592, '06:37:00'),
	(165, 'راز و جرگلان', 12, 0, '00:00:00'),
	(166, 'شیروان', 12, 754, '07:43:00'),
	(167, 'فاروج', 12, 788, '08:02:00'),
	(168, 'گرمه', 12, 583, '06:31:00'),
	(169, 'مانه وسملقان', 12, 0, '00:00:00'),
	(170, 'آبادان', 13, 896, '08:33:00'),
	(171, 'آغاجاری', 13, 918, '08:55:00'),
	(172, 'امیدیه', 13, 903, '08:42:00'),
	(173, 'اندیکا', 13, 0, '00:00:00'),
	(174, 'اندیمشک', 13, 625, '05:50:00'),
	(175, 'اهواز', 13, 781, '07:24:00'),
	(176, 'ایذه', 13, 767, '07:38:00'),
	(177, 'باغ ملک', 13, 808, '08:04:00'),
	(178, 'باوی', 13, 0, '00:00:00'),
	(179, 'بندرماهشهر', 13, 887, '08:21:00'),
	(180, 'بهبهان', 13, 972, '09:29:00'),
	(181, 'حمیدیه', 13, 798, '07:32:00'),
	(182, 'خرمشهر', 13, 906, '08:40:00'),
	(183, 'دزفول', 13, 636, '05:58:00'),
	(184, 'دشت آزادگان', 13, 0, '00:00:00'),
	(185, 'رامشیر', 13, 877, '08:23:00'),
	(186, 'رامهرمز', 13, 868, '08:15:00'),
	(187, 'شادگان', 13, 873, '08:30:00'),
	(188, 'شوش', 13, 665, '06:04:00'),
	(189, 'شوشتر', 13, 693, '06:31:00'),
	(190, 'کارون', 13, 0, '00:00:00'),
	(191, 'گتوند', 13, 694, '06:37:00'),
	(192, 'لالی', 13, 715, '07:19:00'),
	(193, 'مسجدسلیمان', 13, 758, '07:18:00'),
	(194, 'هفتکل', 13, 803, '07:54:00'),
	(195, 'هندیجان', 13, 964, '09:07:00'),
	(196, 'هویزه', 13, 842, '07:58:00'),
	(197, 'ابهر', 14, 236, '02:11:00'),
	(198, 'ایجرود', 14, 0, '00:00:00'),
	(199, 'خدابنده', 14, 0, '00:00:00'),
	(200, 'خرمدره', 14, 238, '02:14:00'),
	(201, 'زنجان', 14, 324, '02:57:00'),
	(202, 'سلطانیه', 14, 291, '02:40:00'),
	(203, 'طارم', 14, 0, '00:00:00'),
	(204, 'ماهنشان', 14, 428, '04:31:00'),
	(205, 'آرادان', 15, 125, '01:16:00'),
	(206, 'دامغان', 15, 336, '03:21:00'),
	(207, 'سرخه', 15, 200, '02:00:00'),
	(208, 'سمنان', 15, 221, '02:13:00'),
	(209, 'شاهرود', 15, 405, '04:02:00'),
	(210, 'گرمسار', 15, 111, '01:10:00'),
	(211, 'مهدی شهر', 15, 235, '02:25:00'),
	(212, 'میامی', 15, 466, '04:37:00'),
	(213, 'ایرانشهر', 16, 1509, '15:19:00'),
	(214, 'چابهار', 16, 1802, '19:01:00'),
	(215, 'خاش', 16, 1652, '16:37:00'),
	(216, 'دلگان', 16, 1793, '18:59:00'),
	(217, 'زابل', 16, 1494, '16:10:00'),
	(218, 'زاهدان', 16, 1474, '14:29:00'),
	(219, 'زهک', 16, 1519, '16:29:00'),
	(220, 'سراوان', 16, 1735, '18:08:00'),
	(221, 'سرباز', 16, 1630, '16:53:00'),
	(222, 'سیب و سوران', 16, 1702, '17:46:00'),
	(223, 'فنوج', 16, 1604, '17:35:00'),
	(224, 'قصرقند', 16, 1735, '18:22:00'),
	(225, 'کنارک', 16, 1779, '18:50:00'),
	(226, 'مهرستان', 16, 1634, '16:51:00'),
	(227, 'میرجاوه', 16, 1564, '15:37:00'),
	(228, 'نیک شهر', 16, 1662, '17:17:00'),
	(229, 'نیمروز', 16, 0, '00:00:00'),
	(230, 'هامون', 16, 1496, '16:28:00'),
	(231, 'هیرمند', 16, 0, '00:00:00'),
	(232, 'آباده', 17, 640, '05:55:00'),
	(233, 'ارسنجان', 17, 825, '07:47:00'),
	(234, 'استهبان', 17, 1013, '10:12:00'),
	(235, 'اقلید', 17, 687, '06:25:00'),
	(236, 'بوانات', 17, 772, '07:20:00'),
	(237, 'پاسارگاد', 17, 785, '07:20:00'),
	(238, 'جهرم', 17, 1095, '10:24:00'),
	(239, 'خرامه', 17, 885, '08:50:00'),
	(240, 'خرم بید', 17, 0, '00:00:00'),
	(241, 'خنج', 17, 1186, '11:48:00'),
	(242, 'داراب', 17, 1164, '11:15:00'),
	(243, 'رستم', 17, 0, '00:00:00'),
	(244, 'زرین دشت', 17, 0, '00:00:00'),
	(245, 'سپیدان', 17, 0, '00:00:00'),
	(246, 'سروستان', 17, 994, '09:24:00'),
	(247, 'شیراز', 17, 910, '08:35:00'),
	(248, 'فراشبند', 17, 1075, '10:24:00'),
	(249, 'فسا', 17, 1054, '10:01:00'),
	(250, 'فیروزآباد', 17, 1020, '09:44:00'),
	(251, 'قیروکارزین', 17, 0, '00:00:00'),
	(252, 'کازرون', 17, 903, '09:09:00'),
	(253, 'کوار', 17, 960, '09:04:00'),
	(254, 'گراش', 17, 1266, '12:30:00'),
	(255, 'لار', 17, 1248, '12:17:00'),
	(256, 'لامرد', 17, 1273, '12:42:00'),
	(257, 'مرودشت', 17, 862, '08:07:00'),
	(258, 'ممسنی', 17, 0, '00:00:00'),
	(259, 'مهر', 17, 1230, '12:16:00'),
	(260, 'نی ریز', 17, 997, '09:55:00'),
	(261, 'آبیک', 18, 93, '00:51:00'),
	(262, 'آوج', 18, 231, '02:20:00'),
	(263, 'البرز', 18, 0, '00:00:00'),
	(264, 'بویین زهرا', 18, 128, '01:16:00'),
	(265, 'تاکستان', 18, 183, '01:42:00'),
	(266, 'قزوین', 18, 147, '01:20:00'),
	(267, 'قم', 19, 144, '01:20:00'),
	(268, 'بانه', 20, 680, '06:53:00'),
	(269, 'بیجار', 20, 466, '04:44:00'),
	(270, 'دهگلان', 20, 431, '04:00:00'),
	(271, 'دیواندره', 20, 527, '05:13:00'),
	(272, 'سروآباد', 20, 578, '05:59:00'),
	(273, 'سقز', 20, 621, '06:09:00'),
	(274, 'سنندج', 20, 485, '04:35:00'),
	(275, 'قروه', 20, 395, '03:38:00'),
	(276, 'کامیاران', 20, 550, '05:10:00'),
	(277, 'مریوان', 20, 593, '05:55:00'),
	(278, 'ارزوییه', 21, 0, '00:00:00'),
	(279, 'انار', 21, 772, '07:17:00'),
	(280, 'بافت', 21, 1074, '10:24:00'),
	(281, 'بردسیر', 21, 994, '09:29:00'),
	(282, 'بم', 21, 1159, '11:05:00'),
	(283, 'جیرفت', 21, 1199, '11:35:00'),
	(284, 'رابر', 21, 1105, '10:46:00'),
	(285, 'راور', 21, 942, '09:48:00'),
	(286, 'رفسنجان', 21, 867, '08:13:00'),
	(287, 'رودبارجنوب', 21, 1284, '12:30:00'),
	(288, 'ریگان', 21, 0, '00:00:00'),
	(289, 'زرند', 21, 903, '09:04:00'),
	(290, 'سیرجان', 21, 969, '09:15:00'),
	(291, 'شهربابک', 21, 870, '08:14:00'),
	(292, 'عنبرآباد', 21, 1227, '11:59:00'),
	(293, 'فاریاب', 21, 1303, '12:54:00'),
	(294, 'فهرج', 21, 1214, '11:37:00'),
	(295, 'قلعه گنج', 21, 1365, '13:27:00'),
	(296, 'کرمان', 21, 981, '09:22:00'),
	(297, 'کوهبنان', 21, 868, '08:32:00'),
	(298, 'کهنوج', 21, 1295, '12:33:00'),
	(299, 'منوجان', 21, 1363, '13:18:00'),
	(300, 'نرماشیر', 21, 1193, '11:25:00'),
	(301, 'اسلام آبادغرب', 22, 565, '05:19:00'),
	(302, 'پاوه', 22, 611, '06:02:00'),
	(303, 'ثلاث باباجانی', 22, 578, '05:49:00'),
	(304, 'جوانرود', 22, 579, '05:39:00'),
	(305, 'دالاهو', 22, 0, '00:00:00'),
	(306, 'روانسر', 22, 555, '05:20:00'),
	(307, 'سرپل ذهاب', 22, 644, '06:06:00'),
	(308, 'سنقر', 22, 418, '04:16:00'),
	(309, 'صحنه', 22, 432, '04:01:00'),
	(310, 'قصرشیرین', 22, 675, '06:29:00'),
	(311, 'کرمانشاه', 22, 497, '04:39:00'),
	(312, 'کنگاور', 22, 399, '03:42:00'),
	(313, 'گیلانغرب', 22, 645, '06:29:00'),
	(314, 'هرسین', 22, 491, '04:36:00'),
	(315, 'باشت', 23, 853, '08:42:00'),
	(316, 'بویراحمد', 23, 0, '00:00:00'),
	(317, 'بهمیی', 23, 0, '00:00:00'),
	(318, 'چرام', 23, 920, '09:54:00'),
	(319, 'دنا', 23, 0, '00:00:00'),
	(320, 'کهگیلویه', 23, 0, '00:00:00'),
	(321, 'گچساران', 23, 892, '09:06:00'),
	(322, 'لنده', 23, 849, '10:16:00'),
	(323, 'آزادشهر', 24, 461, '04:34:00'),
	(324, 'آق قلا', 24, 402, '03:58:00'),
	(325, 'بندرگز', 24, 342, '03:23:00'),
	(326, 'ترکمن', 24, 0, '00:00:00'),
	(327, 'رامیان', 24, 464, '04:38:00'),
	(328, 'علی آباد', 24, 427, '04:12:00'),
	(329, 'کردکوی', 24, 355, '03:30:00'),
	(330, 'کلاله', 24, 509, '05:01:00'),
	(331, 'گالیکش', 24, 495, '04:53:00'),
	(332, 'گرگان', 24, 385, '03:49:00'),
	(333, 'گمیشان', 24, 382, '03:58:00'),
	(334, 'گنبدکاووس', 24, 480, '04:44:00'),
	(335, 'مراوه تپه', 24, 600, '06:10:00'),
	(336, 'مینودشت', 24, 486, '04:48:00'),
	(337, 'آستارا', 25, 492, '04:34:00'),
	(338, 'آستانه اشرفیه', 25, 304, '03:06:00'),
	(339, 'املش', 25, 284, '02:59:00'),
	(340, 'بندرانزلی', 25, 362, '03:17:00'),
	(341, 'رشت', 25, 325, '05:56:00'),
	(342, 'رضوانشهر', 25, 384, '03:30:00'),
	(343, 'رودبار', 25, 262, '02:20:00'),
	(344, 'رودسر', 25, 267, '02:45:00'),
	(345, 'سیاهکل', 25, 329, '03:02:00'),
	(346, 'شفت', 25, 335, '03:03:00'),
	(347, 'صومعه سرا', 25, 347, '03:08:00'),
	(348, 'طوالش', 25, 0, '00:00:00'),
	(349, 'فومن', 25, 340, '03:04:00'),
	(350, 'لاهیجان', 25, 294, '03:01:00'),
	(351, 'لنگرود', 25, 280, '02:53:00'),
	(352, 'ماسال', 25, 369, '03:26:00'),
	(353, 'ازنا', 26, 364, '03:40:00'),
	(354, 'الیگودرز', 26, 385, '03:50:00'),
	(355, 'بروجرد', 26, 385, '03:42:00'),
	(356, 'پلدختر', 26, 565, '05:39:00'),
	(357, 'خرم آباد', 26, 451, '04:15:00'),
	(358, 'دلفان', 26, 0, '00:00:00'),
	(359, 'دورود', 26, 422, '04:01:00'),
	(360, 'دوره', 26, 0, '00:00:00'),
	(361, 'رومشکان', 26, 0, '00:00:00'),
	(362, 'سلسله', 26, 0, '00:00:00'),
	(363, 'کوهدشت', 26, 540, '05:24:00'),
	(364, 'آمل', 27, 182, '01:49:00'),
	(365, 'بابل', 27, 211, '02:05:00'),
	(366, 'بابلسر', 27, 230, '02:18:00'),
	(367, 'بهشهر', 27, 302, '03:00:00'),
	(368, 'تنکابن', 27, 199, '02:05:00'),
	(369, 'جویبار', 27, 252, '02:32:00'),
	(370, 'چالوس', 27, 146, '01:33:00'),
	(371, 'رامسر', 27, 224, '02:19:00'),
	(372, 'ساری', 27, 251, '02:29:00'),
	(373, 'سوادکوه', 27, 0, '00:00:00'),
	(374, 'سوادکوه شمالی', 27, 0, '00:00:00'),
	(375, 'سیمرغ', 27, 0, '00:00:00'),
	(376, 'عباس آباد', 27, 176, '01:51:00'),
	(377, 'فریدونکنار', 27, 215, '02:12:00'),
	(378, 'قائم شهر', 27, 230, '02:17:00'),
	(379, 'کلاردشت', 27, 144, '01:47:00'),
	(380, 'گلوگاه', 27, 328, '03:15:00'),
	(381, 'محمودآباد', 27, 203, '02:04:00'),
	(382, 'میاندورود', 27, 0, '00:00:00'),
	(383, 'نکا', 27, 278, '02:46:00'),
	(384, 'نور', 27, 201, '02:05:00'),
	(385, 'نوشهر', 27, 153, '01:39:00'),
	(386, 'آشتیان', 28, 243, '02:23:00'),
	(387, 'اراک', 28, 275, '02:35:00'),
	(388, 'تفرش', 28, 235, '02:35:00'),
	(389, 'خمین', 28, 330, '03:07:00'),
	(390, 'خنداب', 28, 359, '03:46:00'),
	(391, 'دلیجان', 28, 248, '02:30:00'),
	(392, 'زرندیه', 28, 0, '00:00:00'),
	(393, 'ساوه', 28, 135, '01:15:00'),
	(394, 'شازند', 28, 311, '02:59:00'),
	(395, 'فراهان', 28, 0, '00:00:00'),
	(396, 'کمیجان', 28, 321, '03:09:00'),
	(397, 'محلات', 28, 276, '02:39:00'),
	(398, 'ابوموسی', 29, 1465, '14:11:00'),
	(399, 'بستک', 29, 1367, '13:47:00'),
	(400, 'بشاگرد', 29, 0, '00:00:00'),
	(401, 'بندرعباس', 29, 1276, '12:15:00'),
	(402, 'بندرلنگه', 29, 1452, '13:57:00'),
	(403, 'پارسیان', 29, 1310, '13:00:00'),
	(404, 'جاسک', 29, 1585, '15:53:00'),
	(405, 'حاجی اباد', 29, 1110, '10:37:00'),
	(406, 'خمیر', 29, 1361, '13:03:00'),
	(407, 'رودان', 29, 0, '00:00:00'),
	(408, 'سیریک', 29, 1438, '14:05:00'),
	(409, 'قشم', 29, 1417, '14:30:00'),
	(410, 'میناب', 29, 1359, '13:04:00'),
	(411, 'اسدآباد', 30, 364, '03:20:00'),
	(412, 'بهار', 30, 327, '02:59:00'),
	(413, 'تویسرکان', 30, 405, '03:49:00'),
	(414, 'رزن', 30, 265, '02:40:00'),
	(415, 'فامنین', 30, 254, '02:21:00'),
	(416, 'کبودرآهنگ', 30, 289, '02:44:00'),
	(417, 'ملایر', 30, 376, '03:35:00'),
	(418, 'نهاوند', 30, 423, '04:08:00'),
	(419, 'همدان', 30, 316, '02:53:00'),
	(420, 'ابرکوه', 31, 708, '06:35:00'),
	(421, 'اردکان', 31, 564, '05:15:00'),
	(422, 'اشکذر', 31, 605, '05:39:00'),
	(423, 'بافق', 31, 741, '06:59:00'),
	(424, 'بهاباد', 31, 828, '08:12:00'),
	(425, 'تفت', 31, 641, '05:59:00'),
	(426, 'خاتم', 31, 0, '00:00:00'),
	(427, 'مهریز', 31, 661, '06:11:00'),
	(428, 'میبد', 31, 574, '00:00:00'),
	(429, 'یزد', 31, 623, '05:51:00');
/*!40000 ALTER TABLE `counties` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;