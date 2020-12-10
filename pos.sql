-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 11:52 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pos`
--
CREATE DATABASE IF NOT EXISTS `pos` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `pos`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `voucherno` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`voucherno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `address` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `phone` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `contact_person` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `total_debt` int(11) NOT NULL,
  `last_date` date NOT NULL,
  `date` date NOT NULL,
  `debt_expense` tinyint(4) NOT NULL,
  `type` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `customer_name`, `address`, `phone`, `contact_person`, `total_debt`, `last_date`, `date`, `debt_expense`, `type`) VALUES
(1, 'yar xin2', '', '', 'thet aung', 285000, '2019-05-09', '2019-05-09', 0, NULL),
(2, 'sky man', '', '', '', 0, '2019-05-10', '2019-05-10', 0, NULL),
(3, 'yarxin 1', '', '0949570393 / 0949570394', '', 0, '2019-05-10', '2019-05-10', 0, NULL),
(4, 'yangon crown', '', '', '', 0, '2019-05-10', '2019-05-10', 0, NULL),
(5, '888', '', '', '', 0, '2019-05-10', '2019-05-10', 0, NULL),
(6, '999', '', '', 'aung sann oo', 0, '2019-05-10', '2019-05-10', 0, NULL),
(7, 'yarxin 3', '', '', 'aung si phyo', 0, '2019-05-10', '2019-05-10', 0, NULL),
(8, 'new sea', '', '', 'thet ko ko', 0, '2019-05-10', '2019-05-10', 0, NULL),
(9, 'myanmar typical', '', '', '', 73200, '2019-05-10', '2019-05-10', 0, NULL),
(10, 'iron king', '', '', 'houle chan', 0, '2019-05-10', '2019-05-10', 0, NULL),
(11, 'cj', '', '0943003278 / 0989901995', 'ko tin yu', 0, '2019-05-10', '2019-05-10', 0, NULL),
(12, 'new standard', '', '09972539408', 'mr shuen', 0, '2019-05-10', '2019-05-10', 0, NULL),
(13, 'Paper Factory', 'Myaungtagar ', '09 5276117', 'Ko Sai Ko', 0, '2019-05-10', '2019-05-10', 0, NULL),
(14, 'mgmg', '', '09876545678', '', 0, '0000-00-00', '0000-00-00', 0, NULL),
(15, 'bo bo', '', '0987654345689', '', 0, '0000-00-00', '0000-00-00', 0, NULL),
(16, 'U Moe Kyaw', '', '', '', 0, '0000-00-00', '0000-00-00', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_balance_sheet`
--

CREATE TABLE IF NOT EXISTS `tbl_customer_balance_sheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `customer` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `total_debt` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `voucher_amount` int(11) NOT NULL,
  `returnamount` int(11) NOT NULL,
  `paymethod` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `payname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `note` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `sale_id` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_customer_balance_sheet`
--

INSERT INTO `tbl_customer_balance_sheet` (`id`, `customer_id`, `customer`, `total_debt`, `balance`, `voucher_amount`, `returnamount`, `paymethod`, `payname`, `note`, `date`, `sale_id`) VALUES
(1, 0, ' ', 0, 0, 3400, 3400, 'Voucher', '0000000014', '', '2019-05-10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_general_income`
--

CREATE TABLE IF NOT EXISTS `tbl_general_income` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` date NOT NULL,
  `authority` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `income_category` int(11) NOT NULL,
  `location` tinytext NOT NULL,
  `branch_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_general_outcome`
--

CREATE TABLE IF NOT EXISTS `tbl_general_outcome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `date` date NOT NULL,
  `authority` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `outcome_category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_general_outcome`
--

INSERT INTO `tbl_general_outcome` (`id`, `description`, `total`, `date`, `authority`, `outcome_category`) VALUES
(1, 'Yar Xin (2) (0000000011)', 2400, '2019-05-10', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_income_category`
--

CREATE TABLE IF NOT EXISTS `tbl_income_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_outcome_category`
--

CREATE TABLE IF NOT EXISTS `tbl_outcome_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_outcome_category`
--

INSERT INTO `tbl_outcome_category` (`id`, `title`, `amount`) VALUES
(1, 'Discount Amount', 0),
(2, 'General Outcome', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_p`
--

CREATE TABLE IF NOT EXISTS `tbl_p` (
  `voucherno` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`voucherno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tbl_p`
--

INSERT INTO `tbl_p` (`voucherno`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase`
--

CREATE TABLE IF NOT EXISTS `tbl_purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `product_code` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_name` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `unit` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `total` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `voucherno` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subwarehouse_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=199 ;

--
-- Dumping data for table `tbl_purchase`
--

INSERT INTO `tbl_purchase` (`id`, `p_id`, `product_code`, `product_name`, `price`, `quantity`, `category`, `type`, `unit`, `total`, `date`, `voucherno`, `subwarehouse_id`) VALUES
(67, 0, '001110', '1P - C -10A', 1266, 50, 'MCB Breaker', '', '', 63300, '2019-05-07', 'P-0000000015', 0),
(68, 0, '001116', '1P - C - 16A', 1266, 50, 'MCB Breaker', '', '', 63300, '2019-05-07', 'P-0000000015', 0),
(69, 0, '001120', '1P - C -20A', 1266, 10, 'MCB Breaker', '', '', 12660, '2019-05-07', 'P-0000000015', 0),
(70, 0, '001125', '1P - C -25A', 1266, 10, 'MCB Breaker', '', '', 12660, '2019-05-07', 'P-0000000015', 0),
(71, 0, '001216', '2P - C - 16A', 2666, 50, 'MCB Breaker', '', '', 133300, '2019-05-07', 'P-0000000015', 0),
(72, 0, '001225', '2P - C - 25A', 2666, 50, 'MCB Breaker', '', '', 133300, '2019-05-07', 'P-0000000015', 0),
(73, 0, '001232', '2P - C - 32A', 2666, 50, 'MCB Breaker', '', '', 133300, '2019-05-07', 'P-0000000015', 0),
(74, 0, '001263', '2P - C - 63A', 3111, 50, 'MCB Breaker', '', '', 155550, '2019-05-07', 'P-0000000015', 0),
(75, 0, '0012100', '2P - D - 100A', 7555, 3, 'MCB Breaker', '', '', 22665, '2019-05-07', 'P-0000000015', 0),
(76, 0, '0012125', '2P - D - 125A', 9466, 2, 'MCB Breaker', '', '', 18932, '2019-05-07', 'P-0000000015', 0),
(77, 0, '001332', '3P - C - 32A', 3924, 50, 'MCB Breaker', '', '', 196200, '2019-05-07', 'P-0000000015', 0),
(78, 0, '001363', '3P - C - 63A', 4631, 50, 'MCB Breaker', '', '', 231550, '2019-05-07', 'P-0000000015', 0),
(79, 0, '001380', '3P - D - 80A', 10444, 20, 'MCB Breaker', '', '', 208880, '2019-05-07', 'P-0000000015', 0),
(80, 0, '001432', '4P - C - 32A', 5333, 10, 'MCB Breaker', '', '', 53330, '2019-05-07', 'P-0000000015', 0),
(81, 0, '001463', '4P - C - 63A', 6333, 10, 'MCB Breaker', '', '', 63330, '2019-05-07', 'P-0000000015', 0),
(82, 0, '0014100', '4P - D - 100A', 16222, 3, 'MCB Breaker', '', '', 48666, '2019-05-07', 'P-0000000015', 0),
(83, 0, '00232', 'Magnetic Contactor (32A)', 12511, 50, 'Magnetic Contactor', '', '', 625550, '2019-05-07', 'P-0000000015', 0),
(84, 0, '00240', 'Magnetic Contactor (40A)', 22222, 20, 'Magnetic Contactor', '', '', 444440, '2019-05-07', 'P-0000000015', 0),
(85, 0, '00265', 'Magnetic Contactor (65A)', 34444, 10, 'Magnetic Contactor', '', '', 344440, '2019-05-07', 'P-0000000015', 0),
(86, 0, '00225', 'Magnetic Contactor (25A) NO', 8155, 10, 'Magnetic Contactor', '', '', 81550, '2019-05-07', 'P-0000000015', 0),
(87, 0, '002251', 'Magnetic Contactor (25A) ', 8155, 10, 'Magnetic Contactor', '', '', 81550, '2019-05-07', 'P-0000000015', 0),
(88, 0, '0031725', 'Pin Type (17-25A)', 5333, 20, 'Overload Relay', '', '', 106660, '2019-05-07', 'P-0000000015', 0),
(89, 0, '00346', 'Pin Type (4 - 6A)', 4755, 10, 'Overload Relay', '', '', 47550, '2019-05-07', 'P-0000000015', 0),
(90, 0, '003710', 'Pin Type (7-10A)', 4755, 10, 'Overload Relay', '', '', 47550, '2019-05-07', 'P-0000000015', 0),
(91, 0, '0031218', 'Pin Type (12-18A)', 5333, 30, 'Overload Relay', '', '', 159990, '2019-05-07', 'P-0000000015', 0),
(92, 0, '0031410', 'CT ( 4 - 10A)', 7755, 10, 'CT Overload Relay', '', '', 77550, '2019-05-07', 'P-0000000015', 0),
(93, 0, '00311640', 'CT(16-40A)', 7755, 10, 'CT Overload Relay', '', '', 77550, '2019-05-07', 'P-0000000015', 0),
(94, 0, '004100', '4P - 100A', 42000, 1, 'ATS', '', '', 42000, '2019-05-07', 'P-0000000015', 0),
(95, 0, '004250', '4P - 250A', 102666, 1, 'ATS', '', '', 102666, '2019-05-07', 'P-0000000015', 0),
(96, 0, '004400', '4P - 400A', 214666, 1, 'ATS', '', '', 214666, '2019-05-07', 'P-0000000015', 0),
(97, 0, '004630', '4P - 630A', 245000, 1, 'ATS', '', '', 245000, '2019-05-07', 'P-0000000015', 0),
(98, 0, '005400', '4P - 400A', 158133, 5, 'RCCB (Big Size)', '', '', 790665, '2019-05-07', 'P-0000000015', 0),
(99, 0, '005160', '4P - 160A', 54888, 2, 'RCCB (Big Size)', '', '', 109776, '2019-05-07', 'P-0000000015', 0),
(100, 0, '005630', '4P - 630A', 288222, 1, 'RCCB (Big Size)', '', '', 288222, '2019-05-07', 'P-0000000015', 0),
(101, 0, '00690', 'Motor Speed Contoller (90)', 27300, 5, 'Motor Speed Contoller', '', '', 136500, '2019-05-07', 'P-0000000015', 0),
(102, 0, '00640', 'Motor Speed Contoller (40)', 24733, 5, 'Motor Speed Contoller', '', '', 123665, '2019-05-07', 'P-0000000015', 0),
(103, 0, '007380', 'Telecrane Remode (380V)', 42273, 5, 'Telecrane Remode', '', '', 211365, '2019-05-07', 'P-0000000015', 0),
(104, 0, '00736', 'Telecrane Remode (36V)', 42273, 2, 'Telecrane Remode', '', '', 84546, '2019-05-07', 'P-0000000015', 0),
(105, 0, '008310', 'Scrope Meter', 140000, 2, 'Meter', '', '', 280000, '2019-05-07', 'P-0000000015', 0),
(106, 0, '0082017', 'Analog Multimeter (Green)', 29167, 10, 'Meter', '', '', 291670, '2019-05-07', 'P-0000000015', 0),
(107, 0, '0082018', 'Analog Multimeter (Blue)', 25667, 10, 'Meter', '', '', 256670, '2019-05-07', 'P-0000000015', 0),
(108, 0, '010630', '630A', 735000, 1, 'Air Circuit Breaker', '', '', 735000, '2019-05-07', 'P-0000000015', 0),
(109, 0, '0101600', '1600A', 982000, 1, 'Air Circuit Breaker', '', '', 982000, '2019-05-07', 'P-0000000015', 0),
(110, 0, '001132', '1P-C-32A', 1266, 10, 'MCB Breaker', '', '', 12660, '2019-05-07', 'P-0000000016', 0),
(111, 0, '008311', 'floatless level switch(with sensor)', 12300, 5, 'floatless level switch(with sensor)', '', '', 61500, '2019-05-07', 'P-0000000017', 0),
(112, 0, '008312', 'floatless level switch(not sensor)', 8400, 11, 'floatless level swich(not sensor)', '', '', 92400, '2019-05-07', 'P-0000000017', 0),
(113, 0, '00920', 'V - Safeguard', 13500, 8, 'V - Safeguard', '', '', 108000, '2019-05-07', 'P-0000000018', 0),
(114, 0, '00921', '(6.8-11A) Screw type', 2850, 3, 'Overload Relay', '', '', 8550, '2019-05-07', 'P-0000000018', 0),
(115, 0, '00923', '(10-16A)', 2850, 2, 'Overload Relay', '', '', 5700, '2019-05-07', 'P-0000000018', 0),
(116, 0, '00924', '(1-80A)', 15100, 7, 'CT Overload Relay', '', '', 105700, '2019-05-07', 'P-0000000018', 0),
(117, 0, '00925', '(CDP 6-32A)', 18900, 2, 'Motor Protactor', '', '', 37800, '2019-05-07', 'P-0000000018', 0),
(118, 0, '00926', 'F/R Slater Switch (HY2-15A) ', 3850, 2, 'F/R Slater Switch (HY2-15A) ', '', '', 7700, '2019-05-07', 'P-0000000018', 0),
(119, 0, '00927', 'TR 220-380/6,12,24,36', 9600, 1, 'Control TR', '', '', 9600, '2019-05-07', 'P-0000000018', 0),
(120, 0, '00928', '36V (CJX2-8011)', 48000, 5, 'Magnetic Contactor', '', '', 240000, '2019-05-07', 'P-0000000018', 0),
(121, 0, '00929', '36V (CDC6-5011)', 36400, 2, 'Magnetic Contactor', '', '', 72800, '2019-05-07', 'P-0000000018', 0),
(122, 0, '00930', '36V (CJX23201)', 13200, 3, 'Magnetic Contactor', '', '', 39600, '2019-05-07', 'P-0000000018', 0),
(123, 0, '008261', '(UT-261A) Square Meter', 45000, 1, 'Meter', '', '', 45000, '2019-05-08', 'P-0000000019', 0),
(124, 0, '008850', '(UT-850A) Square meter', 18000, 1, 'Meter', '', '', 18000, '2019-05-08', 'P-0000000019', 0),
(125, 0, '008921', '(Vc 921) Digital Multi Meter', 14500, 1, 'Meter', '', '', 14500, '2019-05-08', 'P-0000000019', 0),
(126, 0, '008453', '(WO 453) Digital Multi Meter', 7500, 1, 'Meter', '', '', 7500, '2019-05-08', 'P-0000000019', 0),
(127, 0, '008800', '(CD800a) Digital Multi Meter', 65000, 1, 'Meter', '', '', 65000, '2019-05-08', 'P-0000000019', 0),
(128, 0, '008770', '(CD770) Digital Multi Meter', 78500, 1, 'Meter', '', '', 78500, '2019-05-08', 'P-0000000019', 0),
(129, 0, '008360', '(YX 360 TRF) Analog Multi Meter', 64000, 1, 'Meter', '', '', 64000, '2019-05-08', 'P-0000000019', 0),
(130, 0, '00847', '(MF 47) Analog Multi Meter', 7000, 1, 'Meter', '', '', 7000, '2019-05-08', 'P-0000000019', 0),
(131, 0, '008530', '(As-530) Infrared termometer', 25000, 2, 'Meter', '', '', 50000, '2019-05-08', 'P-0000000019', 0),
(132, 0, '008320', '(AS-320) Infrared Termometer', 18000, 2, 'Meter', '', '', 36000, '2019-05-08', 'P-0000000019', 0),
(133, 0, '00811', 'Meter Probe', 1500, 19, 'Meter', '', '', 28500, '2019-05-08', 'P-0000000019', 0),
(134, 0, '00822', '50W LED Slight', 9500, 16, 'Slight', '', '', 152000, '2019-05-08', 'P-0000000019', 0),
(135, 0, '015342', '(3 core wire 3*42)', 85000, 1, 'Wire', '', '', 85000, '2019-05-08', 'P-0000000019', 0),
(136, 0, '008220', 'UT 220 Clamp Meter', 91000, 1, 'Meter', '', '', 91000, '2019-05-08', 'P-0000000019', 0),
(137, 0, '008206', '(UT 206A) Clamp Meter', 54000, 1, 'Meter', '', '', 54000, '2019-05-08', 'P-0000000019', 0),
(138, 0, '008204', '(UT-204A) Clamp Meter', 58000, 1, 'Meter', '', '', 58000, '2019-05-08', 'P-0000000019', 0),
(139, 0, '008522', '(UT-522) Earth Teaster', 215000, 1, 'Meter', '', '', 215000, '2019-05-08', 'P-0000000019', 0),
(140, 0, '01100', 'No-00 (200W×300H×150D) ', 13000, 2, 'Panel', '', '', 26000, '2019-05-08', 'P-0000000020', 0),
(141, 0, '0110', 'No-0 (250W×350H×150D)', 15000, 2, 'Panel', '', '', 30000, '2019-05-08', 'P-0000000020', 0),
(142, 0, '0111', 'No-1 (300W×450H×170D)mm', 21000, 2, 'Panel', '', '', 42000, '2019-05-08', 'P-0000000020', 0),
(143, 0, '0112', 'No-2 (350W×520H×170D) mm', 25000, 2, 'Panel', '', '', 50000, '2019-05-08', 'P-0000000020', 0),
(144, 0, '0113', 'No-3 (400W×570H×200D) mm', 32000, 2, 'Panel', '', '', 64000, '2019-05-08', 'P-0000000020', 0),
(145, 0, '0114', 'No-4 (440W×610H×230D) mm', 39000, 2, 'Panel', '', '', 78000, '2019-05-08', 'P-0000000020', 0),
(146, 0, '0115', 'No-5 (570W×690H×250D) mm', 67000, 2, 'Panel', '', '', 134000, '2019-05-08', 'P-0000000020', 0),
(147, 0, '0116', 'No-6 (600W×760H×250D) mm', 73000, 2, 'Panel', '', '', 146000, '2019-05-08', 'P-0000000020', 0),
(148, 0, '0117', 'No-7 (640W×920H×250D) mm', 92000, 2, 'Panel', '', '', 184000, '2019-05-08', 'P-0000000020', 0),
(149, 0, '00931', '4.7 K ohm ', 2500, 10, 'Induction furnace parts', '', '', 25000, '2019-05-08', 'P-0000000021', 0),
(150, 0, '009201', 'Air Solenoid Valve (Big)', 17500, 1, 'Air Solenoid Valve (Big)', '', '', 17500, '2019-05-08', 'P-0000000022', 0),
(151, 0, '009211', 'Air Solenoid Valve (Small)', 13000, 1, 'Air Solenoid Valve (Small)', '', '', 13000, '2019-05-08', 'P-0000000022', 0),
(152, 0, '0092', 'Son-D2A', 12000, 1, 'Charger', '', '', 12000, '2019-05-08', 'P-0000000022', 0),
(153, 0, '0093', '6V Battery', 6000, 1, 'Battery', '', '', 6000, '2019-05-08', 'P-0000000022', 0),
(154, 0, '0095', '24Hours Timer Relay', 18000, 1, '24Hours Timer Relay', '', '', 18000, '2019-05-08', 'P-0000000022', 0),
(155, 0, '0096', 'Panel Timer', 9500, 7, 'Timer', '', '', 66500, '2019-05-08', 'P-0000000022', 0),
(156, 0, '0097', 'Magnetic Timer ', 12500, 2, 'Magnetic Timer ', '', '', 25000, '2019-05-08', 'P-0000000022', 0),
(157, 0, '0098', '8-Pin Relay (10A)', 2500, 19, 'Miniature Relay ', '', '', 47500, '2019-05-08', 'P-0000000022', 0),
(158, 0, '0099', '11- Pin Relay (10A)', 2500, 5, 'Miniature Relay ', '', '', 12500, '2019-05-08', 'P-0000000022', 0),
(159, 0, '009912', 'Transformer', 1500, 2, 'Transformer', '', '', 3000, '2019-05-08', 'P-0000000023', 0),
(160, 0, '009612', 'Transformer', 1500, 2, 'Transformer', '', '', 3000, '2019-05-08', 'P-0000000023', 0),
(161, 0, '0096012', 'Power Supply', 1000, 1, 'Power Supply', '', '', 1000, '2019-05-08', 'P-0000000023', 0),
(162, 0, '009203', '2 clip', 1700, 5, 'Control Button', '', '', 8500, '2019-05-08', 'P-0000000023', 0),
(163, 0, '009112', '1 Clip', 1500, 6, 'Control Button', '', '', 9000, '2019-05-08', 'P-0000000023', 0),
(164, 0, '0093811', 'Green', 1500, 10, 'Control Button', '', '', 15000, '2019-05-08', 'P-0000000023', 0),
(165, 0, '00938110', 'Red', 1500, 10, 'Control Button', '', '', 15000, '2019-05-08', 'P-0000000023', 0),
(166, 0, '009224', 'Blue', 1500, 10, 'Button', '', '', 15000, '2019-05-08', 'P-0000000023', 0),
(167, 0, '009221', 'Yellow', 1500, 7, 'Button', '', '', 10500, '2019-05-08', 'P-0000000023', 0),
(168, 0, '009222', 'Green', 1500, 7, 'Button', '', '', 10500, '2019-05-08', 'P-0000000023', 0),
(169, 0, '009223', 'Red', 1500, 7, 'Button', '', '', 10500, '2019-05-08', 'P-0000000023', 0),
(170, 0, '00962511', 'Contactor Tripolares  (C.A)', 12000, 1, 'Contactor Tripolares  (C.A)', '', '', 12000, '2019-05-08', 'P-0000000023', 0),
(171, 0, '0093210', 'Contactor Motor Starter Relay', 18500, 4, 'Motor Starter Relay', '', '', 74000, '2019-05-08', 'P-0000000023', 0),
(172, 0, '0094011', 'Magnetic Contactor', 32500, 5, 'Magnetic Contactor', '', '', 162500, '2019-05-08', 'P-0000000023', 0),
(173, 0, '00940', 'Motor Speed Controller', 37500, 2, 'Motor Speed Contoller', '', '', 75000, '2019-05-08', 'P-0000000023', 0),
(174, 0, '00990', 'Motor Speed Controller', 41000, 2, 'Motor Speed Contoller', '', '', 82000, '2019-05-08', 'P-0000000023', 0),
(176, 0, '0101000', '1000A', 1400000, 1, 'ACB', '', '', 1400000, '2019-05-08', 'P-0000000025', 0),
(177, 0, '005100', 'RCBO - 3P+N - 100A', 23400, 5, 'RCBO Breaker', '', '', 117000, '2019-05-11', 'P-0000000029', 0),
(178, 0, '005063', 'RCBO - 3P+N - 63A', 11400, 10, 'RCBO Breaker', '', '', 114000, '2019-05-11', 'P-0000000029', 0),
(179, 0, '005263', 'RCBO - 2P - 63A', 8000, 50, 'RCBO Breaker', '', '', 400000, '2019-05-11', 'P-0000000029', 0),
(180, 0, '005232', 'RCBO - 2P - 32A', 5800, 50, 'RCBO Breaker', '', '', 290000, '2019-05-11', 'P-0000000029', 0),
(181, 0, '051032', 'RCBO - 1P+N - 32A', 4300, 50, 'RCBO Breaker', '', '', 215000, '2019-05-11', 'P-0000000029', 0),
(182, 0, '003804', '3PHASE PROTACTOR - 380V', 12200, 10, '3Phase Protactor', '', '', 122000, '2019-05-11', 'P-0000000029', 0),
(183, 0, '009200', 'V - Safeguard 2P-32A', 4200, 5, 'V - Safeguard 2P-32A', '', '', 21000, '2019-05-11', 'P-0000000029', 0),
(184, 0, '009210', 'V - Safeguard 2P-63A', 5900, 10, 'V - Safeguard 2P-63A', '', '', 59000, '2019-05-11', 'P-0000000029', 0),
(185, 0, '0097', 'Timer Relay 8pin 380V', 7600, 10, 'Timer Relay 8pin 380V', '', '', 76000, '2019-05-11', 'P-0000000029', 0),
(186, 0, '00972', 'Timer Relay 8pin 220V', 7600, 10, 'Timer Relay 8pin 220V', '', '', 76000, '2019-05-11', 'P-0000000029', 0),
(187, 0, '009211', 'Air Solenoid Valve  4V210-08', 7000, 5, 'Air Solenoid Valve 4V210-08', '', '', 35000, '2019-05-11', 'P-0000000029', 0),
(188, 0, '009201', 'Air Solenoid Valve 4V310-10', 11000, 5, 'Air Solenoid Valve 4V310-10', '', '', 55000, '2019-05-11', 'P-0000000029', 0),
(189, 0, '00241', 'CJX2S - 40 - 65 base coil 380V', 3800, 10, 'CJX2S - 40 - 65 base coil', '', '', 38000, '2019-05-11', 'P-0000000029', 0),
(190, 0, '0096011', 'DC power supply 12V 30A', 8900, 5, 'DC power supply 12V 30A', '', '', 44500, '2019-05-11', 'P-0000000029', 0),
(191, 0, '0096010', 'DC rectifier AC220V/380 90-108V', 8900, 5, 'DC rectifier AC220/380 90-108V', '', '', 44500, '2019-05-11', 'P-0000000029', 0),
(192, 0, '0095', '24Hours Timer Relay (english)', 4700, 10, '24Hours Timer Relay (english)', '', '', 47000, '2019-05-11', 'P-0000000029', 0),
(193, 0, '00951', '24Hours Timer Relay (chinese)', 9400, 5, '24Hours Timer Relay (chinese)', '', '', 47000, '2019-05-11', 'P-0000000029', 0),
(194, 0, '007380', 'Telecrane Remode (380V)', 50000, 1, 'Telecrane Remode', '', '', 50000, '2019-05-11', 'P-0000000029', 0),
(195, 0, '00928', '36V (CJX2-8011)', 45000, 1, 'Magnetic Contactor', '', '', 45000, '2019-05-11', 'P-0000000029', 0),
(196, 0, '', '', 0, 0, 'Magnetic Contactor', '', '', 0, '2019-05-11', 'P-0000000029', 0),
(197, 0, '01384', 'Sement LOGO', 102222, 1, 'PLC', '', '', 102222, '2019-05-13', 'P-0000000030', 0),
(198, 0, '0141000', 'TRD-J1000-RZ (Encoder)', 84450, 1, 'Encoder', '', '', 84450, '2019-05-13', 'P-0000000030', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_header`
--

CREATE TABLE IF NOT EXISTS `tbl_purchase_header` (
  `voucherno` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `supplier` tinytext NOT NULL,
  `totalqty` int(11) NOT NULL,
  `nettotal` int(11) NOT NULL,
  `total_debt` int(11) NOT NULL,
  `received` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `date` date NOT NULL,
  `delivery` tinyint(1) NOT NULL DEFAULT '0',
  `warehouse` varchar(100) NOT NULL,
  PRIMARY KEY (`voucherno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_purchase_header`
--

INSERT INTO `tbl_purchase_header` (`voucherno`, `supplier_id`, `supplier`, `totalqty`, `nettotal`, `total_debt`, `received`, `balance`, `date`, `delivery`, `warehouse`) VALUES
('P-0000000015', 0, '', 711, 8539714, 0, 0, 0, '2019-05-07', 0, ''),
('P-0000000016', 0, '', 10, 12660, 0, 0, 0, '2019-05-07', 0, ''),
('P-0000000017', 0, '', 16, 153900, 0, 153900, 0, '2019-05-07', 0, ''),
('P-0000000018', 0, '', 35, 635450, 0, 0, 0, '2019-05-07', 0, ''),
('P-0000000019', 0, '', 52, 1069000, 0, 1069000, 0, '2019-05-08', 0, ''),
('P-0000000020', 0, '', 18, 754000, 0, 754000, 0, '2019-05-08', 0, ''),
('P-0000000021', 0, '', 10, 25000, 0, 0, 0, '2019-05-08', 0, ''),
('P-0000000022', 0, '', 38, 218000, 0, 218000, 0, '2019-05-08', 0, ''),
('P-0000000023', 0, '', 81, 506500, 0, 506500, 0, '2019-05-08', 0, ''),
('P-0000000025', 0, '', 1, 1400000, 0, 1400000, 0, '2019-05-08', 0, ''),
('P-0000000029', 0, '', 257, 1896000, 0, 1896000, 0, '2019-05-11', 0, ''),
('P-0000000030', 0, '', 2, 186672, 0, 186672, 0, '2019-05-13', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_remind_purchase`
--

CREATE TABLE IF NOT EXISTS `tbl_remind_purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `unit` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `atleastqty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=115 ;

--
-- Dumping data for table `tbl_remind_purchase`
--

INSERT INTO `tbl_remind_purchase` (`id`, `product_code`, `product_name`, `unit`, `atleastqty`) VALUES
(42, '001110', '1P - C -10A', '', 5),
(43, '001116', '1P - C - 16A', '', 5),
(44, '001120', '1P - C -20A', '', 5),
(45, '001125', '1P - C -25A', '', 5),
(46, '001132', '1P-C-32A', '', 5),
(47, '001216', '2P - C - 16A', '', 5),
(48, '001225', '2P - C - 25A', '', 5),
(49, '001232', '2P - C - 32A', '', 5),
(50, '001263', '2P - C - 63A', '', 5),
(51, '0012100', '2P - D - 100A', '', 2),
(52, '0012125', '2P - D - 125A', '', 1),
(53, '001332', '3P - C - 32A', '', 5),
(54, '001363', '3P - C - 63A', '', 5),
(55, '001380', '3P - D - 80A', '', 5),
(56, '001432', '4P - C - 32A', '', 5),
(57, '001463', '4P - C - 63A', '', 5),
(58, '0014100', '4P - D - 100A', '', 1),
(59, '00232', 'Magnetic Contactor (32A)', '', 5),
(60, '00240', 'Magnetic Contactor (40A)', '', 5),
(61, '00265', 'Magnetic Contactor (65A)', '', 5),
(62, '00225', 'Magnetic Contactor (25A) NO', '', 5),
(63, '002251', 'Magnetic Contactor (25A) ', '', 5),
(64, '0031725', 'Pin Type (17-25A)', '', 5),
(65, '00346', 'Pin Type (4 - 6A)', '', 5),
(66, '003710', 'Pin Type (7-10A)', '', 5),
(67, '0031218', 'Pin Type (12-18A)', '', 5),
(68, '0031410', 'CT ( 4 - 10A)', '', 5),
(69, '00311640', 'CT(16-40A)', '', 5),
(70, '004100', '4P - 100A (ATS)', '', 0),
(71, '004250', '4P - 250A (ATS)', '', 0),
(72, '004400', '4P - 400A (ATS)', '', 0),
(73, '004630', '4P - 630A (ATS)', '', 0),
(74, '005400', '4P - 400A (RCCB)', '', 3),
(75, '005160', '4P - 160A (RCCB)', '', 1),
(76, '005630', '4P - 630A (RCCB)', '', 0),
(77, '00690', 'Motor Speed Contoller (90)', '', 2),
(78, '00640', 'Motor Speed Contoller (40)', '', 2),
(79, '007380', 'Telecrane Remode (380V)', '', 2),
(80, '00736', 'Telecrane Remode (36V)', '', 1),
(81, '008310', 'Scrope Meter', '', 1),
(82, '0082017', 'Analog Multimeter (Green)', '', 3),
(83, '0082018', 'Analog Multimeter (Blue)', '', 3),
(84, '008312', 'floatless level switch(not sensor)', '', 3),
(85, '008311', 'floatless level switch(with sensor)', '', 3),
(86, '008220', 'UT 220 Clamp Meter', '', 0),
(87, '008206', '(UT 206A) Clamp Meter', '', 0),
(88, '008204', '(UT-204A) Clamp Meter', '', 0),
(89, '008522', '(UT-522) Earth Teaster', '', 0),
(90, '010630', '630A', '', 0),
(91, '0101600', '1600A', '', 0),
(92, '0101000', '1000A ACB', '', 0),
(93, '0110', 'No-0 (250W×350H×150D) mm', '', 1),
(94, '01100', 'No-00 (200W×300H×150D) mm', '', 1),
(95, '0111', 'No-1 (300W×450H×170D)mm', '', 1),
(96, '0112', 'No-2 (350W×520H×170D) mm', '', 1),
(97, '0113', 'No-3 (400W×570H×200D) mm', '', 1),
(98, '0114', 'No-4 (440W×610H×230D) mm', '', 1),
(99, '0115', 'No-5 (570W×690H×250D) mm', '', 1),
(100, '0116', 'No-6 (600W×760H×250D) mm', '', 1),
(101, '0117', 'No-7 (640W×920H×250D) mm', '', 1),
(102, '008261', '(UT-261A) Squence Tester', '', 0),
(103, '008850', '(UT-850A) Squence Tester', '', 0),
(104, '008921', '(Vc 921) Digital Multi Meter', '', 0),
(105, '008453', '(WO 453) Digital Multi Meter', '', 0),
(106, '008800', '(CD800a) Digital Multi Meter', '', 0),
(107, '008770', '(CD770) Digital Multi Meter', '', 0),
(108, '008360', '(YX 360 TRF) Analog Multi Meter', '', 0),
(109, '00847', '(MF 47) Analog Multi Meter', '', 0),
(110, '008530', '(As-530) Infrared termometer', '', 0),
(111, '008320', '(AR-320) Infrared Termometer', '', 0),
(112, '00811', 'Test Probe', '', 5),
(113, '00822', '50W LED Slight', '', 3),
(114, '015342', '(3 core wire 3×42)', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sale`
--

CREATE TABLE IF NOT EXISTS `tbl_sale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_name` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` tinytext NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `total` bigint(20) NOT NULL,
  `discount` int(11) NOT NULL,
  `discount2` int(11) NOT NULL,
  `foc` int(11) NOT NULL,
  `date` date NOT NULL,
  `voucherno` int(10) unsigned zerofill NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer` tinytext NOT NULL,
  `sale_type` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_sale`
--

INSERT INTO `tbl_sale` (`id`, `product_code`, `product_name`, `category`, `type`, `price`, `quantity`, `unit`, `total`, `discount`, `discount2`, `foc`, `date`, `voucherno`, `customer_id`, `customer`, `sale_type`) VALUES
(4, '001225', '2P - C - 25A', 'MCB Breaker', NULL, 3550, 1, '', 3550, 0, 0, 0, '2019-05-09', 0000000004, 0, ' ', ''),
(5, '001263', '2P - C - 63A', 'MCB Breaker', NULL, 4170, 1, '', 4170, 0, 0, 0, '2019-05-09', 0000000005, 0, ' ', ''),
(8, '00930', '36V (CJX23201)', 'Magnetic Contactor', NULL, 18500, 3, '', 55500, 0, 0, 0, '2019-05-09', 0000000008, 1, 'yar xin2(  ) ', ''),
(9, '00265', 'Magnetic Contactor (65A)', 'Magnetic Contactor', NULL, 45900, 5, '', 229500, 0, 0, 0, '2019-05-09', 0000000008, 1, 'yar xin2(  ) ', ''),
(10, '00736', 'Telecrane Remode (36V)', 'Telecrane Remode', NULL, 56400, 2, '', 112800, 0, 0, 0, '2019-05-10', 0000000009, 0, ' ', ''),
(11, '001216', '2P - C - 16A', 'MCB Breaker', NULL, 3550, 2, '', 7100, 0, 0, 0, '2019-05-10', 0000000010, 13, 'Paper Factory( Myaungtagar  ) ', ''),
(12, '001232', '2P - C - 32A', 'MCB Breaker', NULL, 3550, 1, '', 3550, 0, 0, 0, '2019-05-10', 0000000010, 13, 'Paper Factory( Myaungtagar  ) ', ''),
(13, '001332', '3P - C - 32A', 'MCB Breaker', NULL, 5300, 8, '', 42400, 0, 0, 0, '2019-05-10', 0000000011, 1, 'yar xin2(  ) ', ''),
(14, '004400', '4P - 400A', 'ATS', NULL, 289000, 1, '', 289000, 0, 0, 0, '2019-05-10', 0000000012, 2, 'sky man(  ) ', ''),
(15, '005400', '4P - 400A', 'RCCB (Big Size)', NULL, 211000, 1, '', 211000, 0, 0, 0, '2019-05-10', 0000000013, 5, '888(  ) ', ''),
(16, '001110', '1P - C -10A', 'MCB Breaker', NULL, 1700, 2, '', 3400, 0, 0, 0, '2019-05-10', 0000000014, 0, ' ', ''),
(17, '001110', '1P - C -10A', 'MCB Breaker', NULL, 1700, 9, '', 15300, 0, 0, 0, '2019-05-10', 0000000015, 0, 'b', ''),
(18, '00811', 'Test Probe', 'Meter', NULL, 1500, 1, '', 1500, 0, 0, 0, '2019-05-10', 0000000016, 0, 'U', ''),
(19, '00847', '(MF 47) Analog Multi Meter', 'Meter', NULL, 7000, 1, '', 7000, 0, 0, 0, '2019-05-10', 0000000016, 0, 'U', ''),
(24, '0082017', 'Analog Multimeter (Green)', 'Meter', NULL, 38900, 1, '', 38900, 0, 0, 0, '2019-05-13', 0000000019, 9, '9', ''),
(25, '0082018', 'Analog Multimeter (Blue)', 'Meter', NULL, 34300, 1, '', 34300, 0, 0, 0, '2019-05-13', 0000000019, 9, '9', ''),
(26, '0093811', 'Push Button - GREEN', 'Push Button - GREEN', NULL, 1500, 2, '', 3000, 0, 0, 0, '2019-05-13', 0000000020, 0, ' ', ''),
(27, '00921', '(6.8-11A) Screw type', 'Overload Relay', NULL, 3500, 1, '', 3500, 0, 0, 0, '2019-05-13', 0000000020, 0, ' ', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sale_header`
--

CREATE TABLE IF NOT EXISTS `tbl_sale_header` (
  `voucherno` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `totalamount` int(11) NOT NULL,
  `totaldebt` int(11) NOT NULL,
  `nettotal` int(11) NOT NULL,
  `received` int(11) NOT NULL,
  `jackpot` int(11) NOT NULL,
  `deliveryfees` int(11) NOT NULL,
  `exceedamount` int(11) NOT NULL,
  `authority` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `staff` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `paytype` varchar(20) NOT NULL,
  `note` text NOT NULL,
  `location` tinytext,
  `order_voucherno` varchar(15) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`voucherno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_sale_header`
--

INSERT INTO `tbl_sale_header` (`voucherno`, `customer_id`, `customer_name`, `totalamount`, `totaldebt`, `nettotal`, `received`, `jackpot`, `deliveryfees`, `exceedamount`, `authority`, `staff`, `date`, `paytype`, `note`, `location`, `order_voucherno`, `type`) VALUES
(0000000004, 0, ' ', 3550, 0, 3550, 3550, 0, 0, 0, 'admin', '', '2019-05-09', 'cashdown', '', NULL, '', NULL),
(0000000005, 0, ' ', 4170, 0, 4170, 4170, 0, 0, 0, 'admin', '', '2019-05-09', 'cashdown', '', NULL, '', NULL),
(0000000008, 1, 'yar xin2(  ) ', 285000, 285000, 285000, 285000, 0, 0, 0, 'admin', '', '2019-05-09', 'cashdown', '', NULL, '', NULL),
(0000000009, 0, ' ', 112800, 0, 112800, 112800, 0, 0, 0, 'admin', '', '2019-05-10', 'cashdown', '', NULL, '', NULL),
(0000000010, 13, 'Paper Factory( Myaungtagar  ) ', 10650, 0, 10650, 10650, 0, 0, 0, 'admin', '', '2019-05-10', 'cashdown', '', NULL, '', NULL),
(0000000011, 1, 'yar xin2(  ) ', 42400, 285000, 42400, 42400, 0, 0, 0, 'admin', '', '2019-05-10', 'cashdown', '', NULL, '', NULL),
(0000000012, 2, 'sky man(  ) ', 289000, 0, 265880, 265880, 8, 0, 0, 'admin', '', '2019-05-10', 'cashdown', '', NULL, '', NULL),
(0000000013, 5, '888(  ) ', 211000, 0, 189900, 189900, 10, 0, 0, 'admin', '', '2019-05-10', 'cashdown', '', NULL, '', NULL),
(0000000014, 0, ' ', 3400, 0, 3400, 3400, 0, 0, 0, 'admin', '', '2019-05-10', 'credit', '', NULL, '', NULL),
(0000000015, 0, 'bo bo', 15300, 0, 15300, 15300, 0, 0, 0, 'admin', '', '2019-05-10', 'cashdown', '', NULL, '', NULL),
(0000000016, 0, 'U Moe Kyaw', 8500, 0, 8500, 8500, 0, 0, 0, 'admin', '', '2019-05-10', 'cashdown', '', NULL, '', NULL),
(0000000019, 9, '999(  )6', 73200, 0, 73200, 73200, 0, 0, 0, 'admin', '', '2019-05-13', 'cashdown', '', NULL, '', NULL),
(0000000020, 0, ' #0', 6500, 0, 6500, 6500, 0, 0, 0, 'admin', '', '2019-05-13', 'cashdown', '', NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_showroom`
--

CREATE TABLE IF NOT EXISTS `tbl_showroom` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `location` tinytext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_showroom`
--

INSERT INTO `tbl_showroom` (`id`, `name`, `location`) VALUES
(1, 'shop', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_showroom_stock`
--

CREATE TABLE IF NOT EXISTS `tbl_showroom_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_name` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) NOT NULL,
  `unit` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `showroom_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=139 ;

--
-- Dumping data for table `tbl_showroom_stock`
--

INSERT INTO `tbl_showroom_stock` (`id`, `product_code`, `product_name`, `type`, `unit`, `quantity`, `price`, `showroom_id`, `category`, `date`) VALUES
(1, '008310', 'Scrope Meter', '', 'pcs', 2, 140000, 1, 'Meter', '2019-05-07'),
(2, '0082017', 'Analog Multimeter (Green)', '0', 'pcs', 9, 29167, 1, 'Meter', '2019-05-07'),
(3, '0082018', 'Analog Multimeter (Blue)', '0', 'pcs', 9, 25667, 1, 'Meter', '2019-05-07'),
(4, '007380', 'Telecrane Remode (380V)', '', 'pcs', 6, 50000, 1, 'Telecrane Remode', '2019-05-11'),
(5, '00736', 'Telecrane Remode (36V)', '', 'pcs', 0, 42273, 1, 'Telecrane Remode', '2019-05-07'),
(6, '00690', 'Motor Speed Contoller (90)', '', 'pcs', 5, 27300, 1, 'Motor Speed Contoller', '2019-05-07'),
(7, '00640', 'Motor Speed Contoller (40)', '', 'pcs', 5, 24733, 1, 'Motor Speed Contoller', '2019-05-07'),
(8, '005400', 'RCCB 4P-400A', '0', 'pcs', 4, 158133, 1, 'RCCB 4P-400A', '1970-01-01'),
(9, '005160', 'RCCB 4P-160A', '0', 'pcs', 2, 54888, 1, 'RCCB 4P-160A', '1970-01-01'),
(10, '005630', 'RCCB 4P-630A', '0', 'pcs', 1, 288222, 1, 'RCCB 4P-630A', '1970-01-01'),
(11, '004100', '4P - 100A', '', 'pcs', 1, 42000, 1, 'ATS', '2019-05-07'),
(12, '004250', '4P - 250A', '', 'pcs', 1, 102666, 1, 'ATS', '2019-05-07'),
(13, '004400', '4P - 400A', '', 'pcs', 0, 214666, 1, 'ATS', '2019-05-07'),
(14, '004630', '4P - 630A', '', 'pcs', 1, 245000, 1, 'ATS', '2019-05-07'),
(15, '001110', '1P - C -10A', '', 'pcs', 39, 1266, 1, 'MCB Breaker', '2019-05-07'),
(16, '001116', '1P - C - 16A', '', 'pcs', 50, 1266, 1, 'MCB Breaker', '2019-05-07'),
(17, '001120', '1P - C -20A', '', 'pcs', 10, 1266, 1, 'MCB Breaker', '2019-05-07'),
(18, '001125', '1P - C -25A', '', 'pcs', 10, 1266, 1, 'MCB Breaker', '2019-05-07'),
(19, '001216', '2P - C - 16A', '', 'pcs', 48, 2666, 1, 'MCB Breaker', '2019-05-07'),
(20, '001225', '2P - C - 25A', '', 'pcs', 49, 2666, 1, 'MCB Breaker', '2019-05-07'),
(21, '001232', '2P - C - 32A', '', 'pcs', 49, 2666, 1, 'MCB Breaker', '2019-05-07'),
(22, '001263', '2P - C - 63A', '', 'pcs', 49, 3111, 1, 'MCB Breaker', '2019-05-07'),
(23, '0012100', '2P - D - 100A', '', 'pcs', 3, 7555, 1, 'MCB Breaker', '2019-05-07'),
(24, '0012125', '2P - D - 125A', '', 'pcs', 2, 9466, 1, 'MCB Breaker', '2019-05-07'),
(25, '001332', '3P - C - 32A', '', 'pcs', 42, 3924, 1, 'MCB Breaker', '2019-05-07'),
(26, '001363', '3P - C - 63A', '', 'pcs', 50, 4631, 1, 'MCB Breaker', '2019-05-07'),
(27, '001380', '3P - D - 80A', '', 'pcs', 20, 10444, 1, 'MCB Breaker', '2019-05-07'),
(28, '001432', '4P - C - 32A', '', 'pcs', 10, 5333, 1, 'MCB Breaker', '2019-05-07'),
(29, '001463', '4P - C - 63A', '', 'pcs', 10, 6333, 1, 'MCB Breaker', '2019-05-07'),
(30, '0014100', '4P - D - 100A', '', 'pcs', 3, 16222, 1, 'MCB Breaker', '2019-05-07'),
(31, '00232', 'Magnetic Contactor (32A)', '', 'pcs', 50, 12511, 1, 'Magnetic Contactor', '2019-05-07'),
(32, '00240', 'Magnetic Contactor (40A)', '', 'pcs', 20, 22222, 1, 'Magnetic Contactor', '2019-05-07'),
(33, '00265', 'Magnetic Contactor (65A)', '', 'pcs', 5, 34444, 1, 'Magnetic Contactor', '2019-05-07'),
(34, '00225', 'Magnetic Contactor (25A) NO', '0', 'pcs', 10, 8155, 1, 'Magnetic Contactor', '2019-05-07'),
(35, '002251', 'Magnetic Contactor (25A) ', '0', 'pcs', 10, 8155, 1, 'Magnetic Contactor', '2019-05-07'),
(36, '0031725', 'Pin Type (17-25A)', '', 'pcs', 20, 5333, 1, 'Overload Relay', '2019-05-07'),
(37, '00346', 'Pin Type (4 - 6A)', '', 'pcs', 10, 4755, 1, 'Overload Relay', '2019-05-07'),
(38, '003710', 'Pin Type (7-10A)', '', 'pcs', 10, 4755, 1, 'Overload Relay', '2019-05-07'),
(39, '0031218', 'Pin Type (12-18A)', '', 'pcs', 30, 5333, 1, 'Overload Relay', '2019-05-07'),
(40, '0031410', 'CD ( 4 - 10A)', '0', 'pcs', 10, 7755, 1, 'CT Overload Relay', '2019-05-07'),
(41, '00311640', 'CD (16-40A)', '0', 'pcs', 10, 7755, 1, 'CT Overload Relay', '2019-05-07'),
(42, '008311', 'floatless level switch(with sensor)', '0', 'pcs', 10, 12300, 1, 'floatless level switch(with sensor)', '2019-05-07'),
(43, '008312', 'floatless level switch(not sensor)', '0', 'pcs', 22, 8400, 1, 'floatless level swich(not sensor)', '2019-05-07'),
(44, '010630', 'Air Circuit Breaker (ACB)630A', '0', 'pcs', 1, 735000, 1, 'Air Circuit Breaker (ACB)630A', '1970-01-01'),
(45, '0101600', 'Air Circuit Breaker (ACB)1600A', '0', 'pcs', 1, 982000, 1, 'Air Circuit Breaker (ACB)1600A', '1970-01-01'),
(46, '001132', '1P-C-32A', '', 'pcs', 10, 1266, 1, 'MCB Breaker', '2019-05-10'),
(47, '0094', 'Temperature Controller', '', 'pcs', 1, 20300, 1, 'Temperature Controller', '2019-05-07'),
(48, '00910', 'Miniature Relay 8-Pin (5A) Square', '', 'pcs', 13, 3100, 1, 'Miniature Relay ', '2019-05-07'),
(49, '00911', 'Miniature Relay 11-Pin (5A) Square', '', 'pcs', 14, 3100, 1, 'Miniature Relay ', '2019-05-07'),
(50, '00912', 'Miniature Relay 14-Pin (5A) Square', '', 'pcs', 11, 3400, 1, 'Miniature Relay ', '2019-05-07'),
(51, '00913', 'Miniature Relay 14-Pin (5A) HH54p', '', 'pcs', 18, 1200, 1, 'Miniature Relay ', '2019-05-07'),
(52, '00914', 'Miniature Relay 8-Pin (10A) Square', '', 'pcs', 40, 1200, 1, 'Miniature Relay ', '2019-05-07'),
(53, '00915', 'Alarm Bell', '', 'pcs', 1, 35000, 1, 'Alarm', '2019-05-07'),
(54, '00916', 'Crane remote', '', 'pcs', 1, 4600, 1, 'Crane remote', '2019-05-07'),
(55, '00917', 'Alarm Speaker', '', 'pcs', 2, 12000, 1, 'Alarm', '2019-05-07'),
(56, '00918', 'Alarm Speaker', '', 'pcs', 1, 25000, 1, 'Alarm', '2019-05-07'),
(57, '00919', 'DOL Starter', '', 'pcs', 1, 37000, 1, 'DOL Starter', '2019-05-07'),
(58, '00922', 'Foot Pedal Switch', '', 'pcs', 2, 4000, 1, 'Foot Pedal Switch ', '2019-05-07'),
(59, '00920', 'V - Safeguard', '', 'pcs', 8, 13500, 1, 'V - Safeguard', '2019-05-07'),
(60, '00921', '(6.8-11A) Screw type', '', 'pcs', 2, 2850, 1, 'Overload Relay', '2019-05-07'),
(61, '00923', '(10-16A)', '', 'pcs', 2, 2850, 1, 'Overload Relay', '2019-05-07'),
(62, '00924', '(1-80A)', '', 'pcs', 7, 15100, 1, 'CT Overload Relay', '2019-05-07'),
(63, '00925', '(CDP 6-32A)', '', 'pcs', 2, 18900, 1, 'Motor Protactor', '2019-05-07'),
(64, '00926', 'F/R Slater Switch (HY2-15A) ', '', 'pcs', 2, 3850, 1, 'F/R Slater Switch (HY2-15A) ', '2019-05-07'),
(65, '00927', 'TR 220-380/6,12,24,36', '', 'pcs', 1, 9600, 1, 'Control TR', '2019-05-07'),
(66, '00928', '36V (CJX2-8011)', '', 'pcs', 6, 45000, 1, 'Magnetic Contactor', '2019-05-11'),
(67, '00929', '36V (CDC6-5011)', '', 'pcs', 2, 36400, 1, 'Magnetic Contactor', '2019-05-07'),
(68, '00930', '36V (CJX23201)', '', 'pcs', 0, 13200, 1, 'Magnetic Contactor', '2019-05-07'),
(69, '008261', '(UT-261A) Square Meter', '', 'pcs', 1, 45000, 1, 'Meter', '2019-05-08'),
(70, '008850', '(UT-850A) Square meter', '', 'pcs', 1, 18000, 1, 'Meter', '2019-05-08'),
(71, '008921', '(Vc 921) Digital Multi Meter', '', 'pcs', 1, 14500, 1, 'Meter', '2019-05-08'),
(72, '008453', '(WO 453) Digital Multi Meter', '', 'pcs', 1, 7500, 1, 'Meter', '2019-05-08'),
(73, '008800', '(CD800a) Digital Multi Meter', '', 'pcs', 1, 65000, 1, 'Meter', '2019-05-08'),
(74, '008770', '(CD770) Digital Multi Meter', '', 'pcs', 1, 78500, 1, 'Meter', '2019-05-08'),
(75, '008360', '(YX 360 TRF) Analog Multi Meter', '', 'pcs', 1, 64000, 1, 'Meter', '2019-05-08'),
(76, '00847', '(MF 47) Analog Multi Meter', '', 'pcs', 0, 7000, 1, 'Meter', '2019-05-08'),
(77, '008530', '(As-530) Infrared termometer', '', 'pcs', 2, 25000, 1, 'Meter', '2019-05-08'),
(78, '008320', '(AS-320) Infrared Termometer', '', 'pcs', 2, 18000, 1, 'Meter', '2019-05-08'),
(79, '00811', 'Meter Probe', '', 'pcs', 18, 1500, 1, 'Meter', '2019-05-08'),
(80, '00822', '50W LED Slight', '', 'pcs', 16, 9500, 1, 'Slight', '2019-05-08'),
(81, '015342', '(3 core wire 3*42)', '', 'pcs', 1, 85000, 1, 'Wire', '2019-05-08'),
(82, '008220', 'UT 220 Clamp Meter', '', 'pcs', 1, 91000, 1, 'Meter', '2019-05-08'),
(83, '008206', '(UT 206A) Clamp Meter', '', 'pcs', 1, 54000, 1, 'Meter', '2019-05-08'),
(84, '008204', '(UT-204A) Clamp Meter', '', 'pcs', 1, 58000, 1, 'Meter', '2019-05-08'),
(85, '008522', '(UT-522) Earth Teaster', '', 'pcs', 1, 215000, 1, 'Meter', '2019-05-08'),
(86, '01100', 'No-00 (200W×300H×150D) ', '', 'pcs', 2, 13000, 1, 'Panel', '2019-05-08'),
(87, '0110', 'No-0 (250W×350H×150D)', '', 'pcs', 2, 15000, 1, 'Panel', '2019-05-08'),
(88, '0111', 'No-1 (300W×450H×170D)mm', '', 'pcs', 2, 21000, 1, 'Panel', '2019-05-08'),
(89, '0112', 'No-2 (350W×520H×170D) mm', '', 'pcs', 2, 25000, 1, 'Panel', '2019-05-08'),
(90, '0113', 'No-3 (400W×570H×200D) mm', '', 'pcs', 2, 32000, 1, 'Panel', '2019-05-08'),
(91, '0114', 'No-4 (440W×610H×230D) mm', '', 'pcs', 2, 39000, 1, 'Panel', '2019-05-08'),
(92, '0115', 'No-5 (570W×690H×250D) mm', '', 'pcs', 2, 67000, 1, 'Panel', '2019-05-08'),
(93, '0116', 'No-6 (600W×760H×250D) mm', '', 'pcs', 2, 73000, 1, 'Panel', '2019-05-08'),
(94, '0117', 'No-7 (640W×920H×250D) mm', '', 'pcs', 2, 92000, 1, 'Panel', '2019-05-08'),
(95, '00931', '4.7 K ohm ', '', 'pcs', 10, 2500, 1, 'Induction furnace parts', '2019-05-08'),
(96, '009201', 'Air Solenoid Valve 4V310-10', '0', 'pcs', 6, 11000, 1, 'Air Solenoid Valve 4V310-10', '2019-05-11'),
(97, '009211', 'Air Solenoid Valve 4V210-08', '0', 'pcs', 6, 7000, 1, 'Air Solenoid Valve 4V210-08', '2019-05-11'),
(98, '0092', 'Son-D2A', '', 'pcs', 1, 12000, 1, 'Charger', '2019-05-08'),
(99, '0093', '6V Battery', '', 'pcs', 1, 6000, 1, 'Battery', '2019-05-08'),
(100, '0095', '24Hours Timer Relay', '0', 'pcs', 11, 4700, 1, '24Hours Timer Relay (english)', '2019-05-11'),
(101, '0096', 'Auxiliary Timer Relay', '0', 'pcs', 2, 10700, 1, 'Auxiliary Timer Relay', '1970-01-01'),
(102, '0097', 'Timer Relay 8pin 380V', '0', 'pcs', 12, 7600, 1, 'Timer Relay 8pin 380V', '2019-05-11'),
(103, '0098', '8-Pin Relay (10A)', '', 'pcs', 19, 2500, 1, 'Miniature Relay ', '2019-05-08'),
(104, '0099', '11- Pin Relay (10A)', '', 'pcs', 5, 2500, 1, 'Miniature Relay ', '2019-05-08'),
(105, '009912', 'Transformer', '', 'pcs', 2, 1500, 1, 'Transformer', '2019-05-08'),
(106, '009612', 'Transformer', '', 'pcs', 2, 1500, 1, 'Transformer', '2019-05-08'),
(107, '0096012', 'DC Power Supply 12V 5A', '0', 'pcs', 1, 1000, 1, 'DC Power Supply 12V 5A', '1970-01-01'),
(108, '009203', '2 clip', '', 'pcs', 5, 1700, 1, 'Control Button', '2019-05-08'),
(109, '009112', '1 Clip', '', 'pcs', 6, 1500, 1, 'Control Button', '2019-05-08'),
(110, '0093811', 'Green', '', 'pcs', 8, 1500, 1, 'Control Button', '2019-05-08'),
(111, '00938110', 'Push Button - RED', '0', 'pcs', 10, 1500, 1, 'Push Button - RED', '1970-01-01'),
(112, '009224', 'Push Button', '0', 'pcs', 10, 1500, 1, 'Push Button', '1970-01-01'),
(113, '009221', 'Yellow', '0', 'pcs', 7, 1500, 1, 'Push Button', '1970-01-01'),
(114, '009222', 'Green', '0', 'pcs', 7, 1500, 1, 'Push Button', '1970-01-01'),
(115, '009223', 'Red', '0', 'pcs', 7, 1500, 1, 'Push Button', '1970-01-01'),
(116, '00962511', '(380V) Magnetic Contactor', '0', 'pcs', 2, 12000, 1, 'Magnetic Contactor', '1970-01-01'),
(117, '0093210', 'Magnetic Contactor (32A / 36V)', '0', 'pcs', 4, 18500, 1, 'Magnetic Contactor ', '1970-01-01'),
(118, '0094011', 'Magnetic Contactor', '', 'pcs', 5, 32500, 1, 'Magnetic Contactor', '2019-05-08'),
(119, '00940', 'Motor Speed Controller', '', 'pcs', 2, 37500, 1, 'Motor Speed Contoller', '2019-05-08'),
(120, '00990', 'Motor Speed Controller', '', 'pcs', 2, 41000, 1, 'Motor Speed Contoller', '2019-05-08'),
(122, '0101000', 'Air Circuit Breaker (ACB) 1000A(with relay)', '0', 'pcs', 1, 1400000, 1, 'Air Circuit Breaker (ACB) 1000A(with relay)', '1970-01-01'),
(123, '005100', 'RCBO - 3P+N - 100A', '', 'pcs', 5, 23400, 1, 'RCBO Breaker', '2019-05-11'),
(124, '005063', 'RCBO - 3P+N - 63A', '', 'pcs', 10, 11400, 1, 'RCBO Breaker', '2019-05-11'),
(125, '005263', 'RCBO - 2P - 63A', '', 'pcs', 50, 8000, 1, 'RCBO Breaker', '2019-05-11'),
(126, '005232', 'RCBO - 2P - 32A', '', 'pcs', 50, 5800, 1, 'RCBO Breaker', '2019-05-11'),
(127, '051032', 'RCBO - 1P+N - 32A', '', 'pcs', 50, 4300, 1, 'RCBO Breaker', '2019-05-11'),
(128, '003804', '3PHASE PROTACTOR - 380V', '', 'pcs', 10, 12200, 1, '3Phase Protactor', '2019-05-11'),
(129, '009200', 'V - Safeguard 2P-32A', '', 'pcs', 5, 4200, 1, 'V - Safeguard 2P-32A', '2019-05-11'),
(130, '009210', 'V - Safeguard 2P-63A', '', 'pcs', 10, 5900, 1, 'V - Safeguard 2P-63A', '2019-05-11'),
(131, '00972', 'Timer Relay 8pin 220V', '', 'pcs', 10, 7600, 1, 'Timer Relay 8pin 220V', '2019-05-11'),
(132, '00241', 'CJX2S - 40 - 65 base coil 380V', '', 'pcs', 10, 3800, 1, 'CJX2S - 40 - 65 base coil', '2019-05-11'),
(133, '0096011', 'DC power supply 12V 30A', '', 'pcs', 5, 8900, 1, 'DC power supply 12V 30A', '2019-05-11'),
(134, '011235', 'ATS Control Panel set 3p-100A', '', 'pcs', 0, 136000, 1, 'ATS Control Panel set 3p-100A', '2019-05-11'),
(135, '0096010', 'DC rectifier AC220V/380 90-108V', '', 'pcs', 5, 8900, 1, 'DC rectifier AC220/380 90-108V', '2019-05-11'),
(136, '00951', '24Hours Timer Relay (chinese)', '', 'pcs', 5, 9400, 1, '24Hours Timer Relay (chinese)', '2019-05-11'),
(137, '01384', 'Sement LOGO', '', 'pcs', 1, 102222, 1, 'PLC', '2019-05-13'),
(138, '0141000', 'TRD-J1000-RZ (Encoder)', '', 'pcs', 1, 84450, 1, 'Encoder', '2019-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_showroom_stock_history`
--

CREATE TABLE IF NOT EXISTS `tbl_showroom_stock_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_name` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `unit` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `transferqty` int(11) NOT NULL,
  `soldoutqty` int(11) NOT NULL,
  `remainqty` int(11) NOT NULL,
  `price` double NOT NULL,
  `showroom_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `tbl_showroom_stock_history`
--

INSERT INTO `tbl_showroom_stock_history` (`id`, `product_code`, `product_name`, `unit`, `type`, `category`, `transferqty`, `soldoutqty`, `remainqty`, `price`, `showroom_id`, `date`) VALUES
(1, '008310', 'Scrope Meter', 'pcs', '', 'Meter', 0, 0, 2, 140000, 1, '2019-05-04'),
(2, '0082017', 'Analog Multimeter (Green)', 'pcs', '0', 'Meter', 0, 0, 10, 25666, 1, '2019-05-04'),
(3, '0082018', 'Analog Multimeter (Blue)', 'pcs', '0', 'Meter', 0, 0, 10, 25666, 1, '2019-05-04'),
(4, '007380', 'Telecrane Remode (380V)', 'pcs', '', 'Telecrane Remode', 0, 0, 5, 42273, 1, '2019-05-04'),
(5, '00736', 'Telecrane Remode (36V)', 'pcs', '', 'Telecrane Remode', 0, 0, 2, 42273, 1, '2019-05-04'),
(6, '00690', 'Motor Speed Contoller (90)', 'pcs', '', 'Motor Speed Contoller', 0, 0, 5, 27300, 1, '2019-05-04'),
(7, '00640', 'Motor Speed Contoller (40)', 'pcs', '', 'Motor Speed Contoller', 0, 0, 5, 24733, 1, '2019-05-04'),
(8, '005400', '4P - 400A', 'pcs', '', 'RCCB (Big Size)', 0, 0, 3, 158133, 1, '2019-05-04'),
(9, '005160', '4P - 160A', 'pcs', '', 'RCCB (Big Size)', 0, 0, 2, 54888, 1, '2019-05-04'),
(10, '005630', '4P - 630A', 'pcs', '', 'RCCB (Big Size)', 0, 0, 1, 288222, 1, '2019-05-04'),
(11, '004100', '4P - 100A', 'pcs', '', 'ATS', 0, 0, 1, 42000, 1, '2019-05-04'),
(12, '004250', '4P - 250A', 'pcs', '', 'ATS', 0, 0, 1, 102666, 1, '2019-05-04'),
(13, '004400', '4P - 400A', 'pcs', '', 'ATS', 0, 0, 0, 214666, 1, '2019-05-04'),
(14, '004630', '4P - 630A', 'pcs', '', 'ATS', 0, 0, 1, 245000, 1, '2019-05-04'),
(15, '001110', '1P - C -10A', 'pcs', '', 'MCB Breaker', 0, 0, 50, 1266, 1, '2019-05-04'),
(16, '001116', '1P - C - 16A', 'pcs', '', 'MCB Breaker', 0, 0, 50, 1266, 1, '2019-05-04'),
(17, '001120', '1P - C -20A', 'pcs', '', 'MCB Breaker', 0, 0, 10, 1266, 1, '2019-05-04'),
(18, '001125', '1P - C -25A', 'pcs', '', 'MCB Breaker', 0, 0, 10, 1266, 1, '2019-05-04'),
(19, '001216', '2P - C - 16A', 'pcs', '', 'MCB Breaker', 0, 0, 50, 2666, 1, '2019-05-04'),
(20, '001225', '2P - C - 25A', 'pcs', '', 'MCB Breaker', 0, 0, 49, 2666, 1, '2019-05-04'),
(21, '001232', '2P - C - 32A', 'pcs', '', 'MCB Breaker', 0, 0, 50, 2666, 1, '2019-05-04'),
(22, '001263', '2P - C - 63A', 'pcs', '', 'MCB Breaker', 0, 0, 49, 3111, 1, '2019-05-04'),
(23, '0012100', '2P - D - 100A', 'pcs', '', 'MCB Breaker', 0, 0, 3, 7555, 1, '2019-05-04'),
(24, '0012125', '2P - D - 125A', 'pcs', '', 'MCB Breaker', 0, 0, 2, 9466, 1, '2019-05-04'),
(25, '001332', '3P - C - 32A', 'pcs', '', 'MCB Breaker', 0, 0, 50, 3924, 1, '2019-05-04'),
(26, '001363', '3P - C - 63A', 'pcs', '', 'MCB Breaker', 0, 0, 50, 4631, 1, '2019-05-04'),
(27, '001380', '3P - D - 80A', 'pcs', '', 'MCB Breaker', 0, 0, 20, 10444, 1, '2019-05-04'),
(28, '001432', '4P - C - 32A', 'pcs', '', 'MCB Breaker', 0, 0, 10, 5333, 1, '2019-05-04'),
(29, '001463', '4P - C - 63A', 'pcs', '', 'MCB Breaker', 0, 0, 10, 6333, 1, '2019-05-04'),
(30, '0014100', '4P - D - 100A', 'pcs', '', 'MCB Breaker', 0, 0, 3, 16222, 1, '2019-05-04'),
(31, '00232', 'Magnetic Contactor (32A)', 'pcs', '', 'Magnetic Contactor', 0, 0, 50, 12511, 1, '2019-05-04'),
(32, '00240', 'Magnetic Contactor (40A)', 'pcs', '', 'Magnetic Contactor', 0, 0, 20, 22222, 1, '2019-05-04'),
(33, '00265', 'Magnetic Contactor (65A)', 'pcs', '', 'Magnetic Contactor', 0, 0, 10, 34444, 1, '2019-05-04'),
(34, '00225', 'Magnetic Contactor (25A) NO', 'pcs', '0', 'Magnetic Contactor', 0, 0, 10, 8155, 1, '2019-05-04'),
(35, '002251', 'Magnetic Contactor (25A) ', 'pcs', '0', 'Magnetic Contactor', 0, 0, 10, 8155, 1, '2019-05-04'),
(36, '0031725', 'Pin Type (17-25A)', 'pcs', '', 'Overload Relay', 0, 0, 20, 5333, 1, '2019-05-04'),
(37, '00346', 'Pin Type (4 - 6A)', 'pcs', '', 'Overload Relay', 0, 0, 10, 4755, 1, '2019-05-04'),
(38, '003710', 'Pin Type (7-10A)', 'pcs', '', 'Overload Relay', 0, 0, 10, 4755, 1, '2019-05-04'),
(39, '0031218', 'Pin Type (12-18A)', 'pcs', '', 'Overload Relay', 0, 0, 30, 5333, 1, '2019-05-04'),
(40, '0031410', 'CD ( 4 - 10A)', 'pcs', '0', 'Overload Relay', 0, 0, 10, 7755, 1, '2019-05-04'),
(41, '00311640', 'CD (16-40A)', 'pcs', '0', 'Overload Relay', 0, 0, 10, 7755, 1, '2019-05-04'),
(42, '008311', 'floatless level switch(with sensor)', 'pcs', '', 'floatless level switch(with sensor)', 0, 0, 5, 8400, 1, '2019-05-04'),
(43, '008312', 'floatless level switch(not sensor)', 'pcs', '', 'floatless level swich(not sensor)', 0, 0, 10, 12300, 1, '2019-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `staff` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `location` tinytext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE IF NOT EXISTS `tbl_supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `address` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `phone` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `contact_person` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `bankaccount` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `transferbank` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `transfername` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `transferphone` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `total_debt` int(11) DEFAULT NULL,
  `last_date` date NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id`, `supplier_name`, `address`, `phone`, `contact_person`, `bankaccount`, `transferbank`, `transfername`, `transferphone`, `total_debt`, `last_date`, `date`) VALUES
(1, 'supplier one', 'hmawb', '0987484545', 'mgmg', '', '', '', '', -20000, '2019-05-08', '2019-05-08'),
(2, 'U Thein Naing Soee', 'Myaungtagar', '09450013793', 'Hmawbi', '', '', '', '', -100000, '2019-05-08', '2019-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier_balance_sheet`
--

CREATE TABLE IF NOT EXISTS `tbl_supplier_balance_sheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_id` int(11) NOT NULL,
  `supplier` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `total_debt` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `voucher_amount` int(11) NOT NULL,
  `paidamount` int(11) NOT NULL,
  `returnamount` int(11) NOT NULL,
  `paymethod` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `payname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `note` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit`
--

CREATE TABLE IF NOT EXISTS `tbl_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_name` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `photo` tinytext NOT NULL,
  `category` tinytext NOT NULL,
  `type` varchar(20) NOT NULL,
  `unit` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `smallest_itemcount` int(11) NOT NULL,
  `discount` int(11) NOT NULL DEFAULT '0',
  `capital` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=141 ;

--
-- Dumping data for table `tbl_unit`
--

INSERT INTO `tbl_unit` (`id`, `product_code`, `product_name`, `photo`, `category`, `type`, `unit`, `price`, `smallest_itemcount`, `discount`, `capital`) VALUES
(1, '001110', '1P - C -10A', '1pole.PNG', 'MCB Breaker', '', 'pcs', 1700, 1, 0, 0),
(2, '001116', '1P - C - 16A', '1pole.PNG', 'MCB Breaker', '', 'pcs', 1700, 1, 0, 0),
(3, '001120', '1P - C -20A', '1pole.PNG', 'MCB Breaker', '', 'pcs', 1700, 1, 0, 0),
(4, '001125', '1P - C -25A', '1pole.PNG', 'MCB Breaker', '', 'pcs', 1700, 1, 0, 0),
(5, '001216', '2P - C - 16A', '2Pole.PNG', 'MCB Breaker', '', 'pcs', 3550, 1, 0, 0),
(6, '001225', '2P - C - 25A', '2Pole.PNG', 'MCB Breaker', '', 'pcs', 3550, 1, 0, 0),
(7, '001232', '2P - C - 32A', '2Pole.PNG', 'MCB Breaker', '', 'pcs', 3550, 1, 0, 0),
(8, '001263', '2P - C - 63A', '2Pole.PNG', 'MCB Breaker', '', 'pcs', 4170, 1, 0, 0),
(9, '0012100', '2P - D - 100A', '2Pole.PNG', 'MCB Breaker', '', 'pcs', 10100, 1, 0, 0),
(10, '0012125', '2P - D - 125A', '2Pole.PNG', 'MCB Breaker', '', 'pcs', 13000, 1, 0, 0),
(11, '001332', '3P - C - 32A', '3pole.PNG', 'MCB Breaker', '', 'pcs', 5300, 1, 0, 0),
(12, '001363', '3P - C - 63A', '3pole.PNG', 'MCB Breaker', '', 'pcs', 6200, 1, 0, 0),
(13, '001380', '3P - D - 80A', '3pole.PNG', 'MCB Breaker', '', 'pcs', 13900, 1, 0, 0),
(14, '001432', '4P - C - 32A', '4Pole.PNG', 'MCB Breaker', '', 'pcs', 7200, 1, 0, 0),
(15, '001463', '4P - C - 63A', '4Pole.PNG', 'MCB Breaker', '', 'pcs', 8400, 1, 0, 0),
(16, '0014100', '4P - D - 100A', '4Pole.PNG', 'MCB Breaker', '', 'pcs', 21600, 1, 0, 0),
(17, '00232', 'Magnetic Contactor (32A)', 'Magnetic_Contactor.PNG', 'Magnetic Contactor', '', 'pcs', 17000, 1, 0, 0),
(18, '00240', 'Magnetic Contactor (40A)', 'Magnetic_Contactor.PNG', 'Magnetic Contactor', '', 'pcs', 29700, 1, 0, 0),
(19, '00265', 'Magnetic Contactor (65A)', 'Magnetic_Contactor.PNG', 'Magnetic Contactor', '', 'pcs', 45900, 1, 0, 0),
(20, '00225', 'Magnetic Contactor (25A) NO', 'Magnetic_Contactor.PNG', 'Magnetic Contactor', '', 'pcs', 11000, 1, 0, 0),
(21, '002251', 'Magnetic Contactor (25A) ', 'Magnetic_Contactor.PNG', 'Magnetic Contactor', '', 'pcs', 11000, 1, 0, 0),
(22, '0031725', 'Pin Type (17-25A)', 'pin_type.PNG', 'Overload Relay', '', 'pcs', 7200, 1, 0, 0),
(23, '00346', 'Pin Type (4 - 6A)', 'pin_type.PNG', 'Overload Relay', '', 'pcs', 6400, 1, 0, 0),
(24, '003710', 'Pin Type (7-10A)', 'pin_type.PNG', 'Overload Relay', '', 'pcs', 6400, 1, 0, 0),
(25, '0031218', 'Pin Type (12-18A)', 'pin_type.PNG', 'Overload Relay', '', 'pcs', 7200, 1, 0, 0),
(26, '0031410', 'CT ( 4 - 10A)', 'CD_relay.PNG', 'CT Overload Relay', '', 'pcs', 10400, 1, 0, 0),
(27, '00311640', 'CT(16-40A)', 'CD_relay.PNG', 'CT Overload Relay', '', 'pcs', 10400, 1, 0, 0),
(28, '004100', '4P - 100A (ATS)', 'ATS1.PNG', 'ATS', '', 'pcs', 58300, 1, 0, 0),
(29, '004250', '4P - 250A (ATS)', 'ATS1.PNG', 'ATS', '', 'pcs', 139000, 1, 0, 0),
(30, '004400', '4P - 400A (ATS)', 'ATS1.PNG', 'ATS', '', 'pcs', 289000, 1, 0, 0),
(31, '004630', '4P - 630A (ATS)', 'ATS1.PNG', 'ATS', '', 'pcs', 329000, 1, 0, 0),
(33, '005400', 'RCCB 4P-400A', '1554303724125.jpg', 'RCCB 4P-400A', '', 'pcs', 211000, 1, 0, 0),
(34, '005160', 'RCCB 4P-160A', '1554303724125.jpg', 'RCCB 4P-160A', '', 'pcs', 74000, 1, 0, 0),
(35, '005630', 'RCCB 4P-630A', '1554303724125.jpg', 'RCCB 4P-630A', '', 'pcs', 385000, 1, 0, 0),
(36, '00690', 'Motor Speed Contoller (90)', 'MOTOR_speed_controller.PNG', 'Motor Speed Contoller', '', 'pcs', 36400, 1, 0, 0),
(37, '00640', 'Motor Speed Contoller (40)', 'MOTOR_speed_controller.PNG', 'Motor Speed Contoller', '', 'pcs', 32900, 1, 0, 0),
(38, '007380', 'Telecrane Remode (380V)', 'Remode.PNG', 'Telecrane Remode', '', 'pcs', 56400, 1, 0, 0),
(39, '00736', 'Telecrane Remode (36V)', 'Remode.PNG', 'Telecrane Remode', '', 'pcs', 56400, 1, 0, 0),
(40, '008310', 'Scrope Meter', 'Scrope_Meter.PNG', 'Meter', '', 'pcs', 187000, 1, 0, 0),
(41, '0082017', 'Analog Multimeter (Green)', '2017_meter.PNG', 'Meter', '', 'pcs', 38900, 1, 0, 0),
(42, '0082018', 'Analog Multimeter (Blue)', '2018.PNG', 'Meter', '', 'pcs', 34300, 1, 0, 0),
(43, '008311', 'floatless level switch(with sensor)', '-1848654993.jpg', 'floatless level switch(with sensor)', '', 'pcs', 16200, 1, 0, 0),
(44, '008312', 'floatless level switch(not sensor)', 'TB20D5VcPZnyKJjSZFxXXabIpXa_!!391449683.jpg', 'floatless level swich(not sensor)', '', 'pcs', 11500, 1, 0, 0),
(45, '010630', '630A (ACB)', 'ACB.PNG', 'Air Circuit Breaker', '', 'pcs', 1029000, 1, 0, 0),
(46, '0101600', '1600A (ACB)', 'ACB.PNG', 'Air Circuit Breaker', '', 'pcs', 1375000, 1, 0, 0),
(47, '001132', '1P-C-32A', '1pole.PNG', 'MCB Breaker', '', 'pcs', 1700, 1, 0, 0),
(48, '0094', 'Temperature Controller', 'Temperature_Controller.PNG', 'Temperature Controller', '', 'pcs', 20300, 1, 0, 0),
(49, '00910', 'Miniature Relay 8-Pin (5A) Square', 'Relay_8pin.PNG', 'Miniature Relay ', '', 'pcs', 1800, 1, 0, 0),
(50, '00911', 'Miniature Relay 11-Pin (5A) Square', 'Relay_8pin.PNG', 'Miniature Relay ', '', 'pcs', 1800, 1, 0, 0),
(51, '00912', 'Miniature Relay 14-Pin (5A) Square', 'Relay_8pin.PNG', 'Miniature Relay ', '', 'pcs', 2200, 1, 0, 0),
(52, '00913', 'Miniature Relay 14-Pin (5A) HH54p', 'Relay_8pin.PNG', 'Miniature Relay ', '', 'pcs', 1200, 1, 0, 0),
(53, '00914', 'Miniature Relay 8-Pin (10A) Square', 'Relay_8pin.PNG', 'Miniature Relay ', '', 'pcs', 1200, 1, 0, 0),
(54, '00915', 'Alarm Bell', 'Bell.PNG', 'Alarm', '', 'pcs', 35000, 1, 0, 0),
(55, '00916', 'Crane remote', 'Crane_remote.PNG', 'Crane remote', '', 'pcs', 4600, 1, 0, 0),
(56, '00917', 'Alarm Speaker', 'alarm_speaker_1.PNG', 'Alarm', '', 'pcs', 12000, 1, 0, 0),
(57, '00918', 'Alarm Speaker', 'Alarm_speaker.PNG', 'Alarm', '', 'pcs', 25000, 1, 0, 0),
(58, '00919', 'DOL Starter', 'Dol_Starter.PNG', 'DOL Starter', '', 'pcs', 30000, 1, 0, 0),
(59, '00922', 'Foot Pedal Switch ', 'Foot_control_pedal_foot_switch.PNG', 'Foot Pedal Switch ', '', 'pcs', 4000, 1, 0, 0),
(60, '00920', 'V - Safeguard', 'vsafe.PNG', 'V - Safeguard', '', 'pcs', 15000, 1, 0, 0),
(61, '00921', '(6.8-11A) Screw type', 'over_load_relay_screw_type.jpg', 'Overload Relay', '', 'pcs', 3500, 1, 0, 0),
(62, '00923', '(10-16A)', 'over_load_relay_screw_type.jpg', 'Overload Relay', '', 'pcs', 3500, 1, 0, 0),
(63, '00924', '(1-80A)', 'over_load_relay_ct_type.jpg', 'CT Overload Relay', '', 'pcs', 16600, 1, 0, 0),
(64, '00925', '(CDP 6-32A)', 'DELIXI-CDP-32_motor_protactor.jpg', 'Motor Protactor', '', 'pcs', 21000, 1, 0, 0),
(65, '00926', 'F/R Slater Switch (HY2-15A) ', 'F,R_Slator_switch_hy2-15a.jpg', 'F/R Slater Switch (HY2-15A) ', '', 'pcs', 5300, 1, 0, 0),
(66, '00927', 'TR 220-380/6,12,24,36', 'control_transformer.jpg', 'Control TR', '', 'pcs', 13500, 1, 0, 0),
(67, '00928', '36V (CJX2-8011)', 'magnetic_contactor_CJX2.jpg', 'Magnetic Contactor', '', 'pcs', 67000, 1, 0, 0),
(68, '00929', '36V (CDC6-5011)', 'magnetic_contactor_CDC6.jpg', 'Magnetic Contactor', '', 'pcs', 51000, 1, 0, 0),
(69, '00930', '36V (CJX23201)', 'magnetic_contactor_CJX2.jpg', 'Magnetic Contactor', '', 'pcs', 18500, 1, 0, 0),
(70, '009912', 'Transformer', 'Transformer.PNG', 'Transformer', '', 'pcs', 1500, 1, 0, 0),
(71, '009612', 'Transformer', 'Transformer.PNG', 'Transformer', '', 'pcs', 1500, 1, 0, 0),
(72, '0096012', 'DC Power Supply 12V 5A', 'DC_power_supply.jpg', ' DC Power Supply 12V 5A', '', 'pcs', 10000, 1, 0, 0),
(73, '009203', 'Slator Switch - 2way', 'clip.PNG', 'Slator Switch - 2way', '', 'pcs', 1700, 1, 0, 0),
(74, '009112', 'Slator Switch - 1way', 'clip.PNG', 'Slator Switch - 1way', '', 'pcs', 1500, 1, 0, 0),
(75, '0093811', 'Push Button - GREEN', 'push_button.jpg', 'Push Button - GREEN', '', 'pcs', 1500, 1, 0, 0),
(76, '00938110', 'Push Button - RED', 'push_button.jpg', 'Push Button - RED', '', 'pcs', 1500, 1, 0, 0),
(77, '009224', 'Blue', 'pilot_lamp.jpg', 'Pilot lamp', '', 'pcs', 1500, 1, 0, 0),
(78, '009221', 'Yellow', 'pilot_lamp.jpg', 'Pilot lamp', '', 'pcs', 1500, 1, 0, 0),
(79, '009222', 'Green', 'pilot_lamp.jpg', 'Pilot lamp', '', 'pcs', 1500, 1, 0, 0),
(80, '009223', 'Red', 'pilot_lamp.jpg', 'Pilot lamp', '', 'pcs', 1500, 1, 0, 0),
(81, '00962511', '(380V) Magnetic Contactor', 'magnetic_contactor_CDC6.jpg', 'Magnetic Contactor', '', 'pcs', 12000, 1, 0, 0),
(82, '0093210', 'Magnetic Contactor (32A / 36V)', 'Chint.PNG', 'Magnetic Contactor', '', 'pcs', 18500, 1, 0, 0),
(83, '0094011', 'Magnetic Contactor', 'magnetic_contactor_chint_cjx2.jpg', 'Magnetic Contactor', '', 'pcs', 32500, 1, 0, 0),
(84, '00940', 'Motor Speed Controller JD 1A-40', 'JD1A-40.jpg', 'Motor Speed Contoller', '', 'pcs', 37500, 1, 0, 0),
(85, '00990', 'Motor Speed Controller JD-1A90', 'JD1A-90.jpg', 'Motor Speed Contoller', '', 'pcs', 41000, 1, 0, 0),
(86, '0092', 'Son-D2A', 'Son.PNG', 'Charger', '', 'pcs', 12000, 1, 0, 0),
(87, '0095', '24Hours Timer Relay (english)', '24hr_timer_relay.jpg', '24Hours Timer Relay (english)', '', 'pcs', 13000, 1, 0, 0),
(88, '0096', 'Auxiliary Timer Relay', 'auxiliary_timer_relay.jpg', 'Auxiliary Timer Relay', '', 'pcs', 9500, 1, 0, 0),
(89, '0097', 'Timer Relay 8pin 380V', 'timer_relay_8pin.jpg', 'Timer Relay 8pin 380V', '', 'pcs', 10700, 1, 0, 0),
(90, '0098', '8-Pin Relay (10A)', 'relay_8pin_square.jpg', 'Miniature Relay ', '', 'pcs', 2500, 1, 0, 0),
(91, '0099', '11- Pin Relay (10A)', 'relay_8pin_square.jpg', 'Miniature Relay ', '', 'pcs', 2500, 1, 0, 0),
(92, '0093', '6V Battery', 'battery_6v.jpg', 'Battery', '', 'pcs', 6000, 1, 0, 0),
(93, '009201', 'Air Solenoid Valve 4V310-10', 'ASV.PNG', 'Air Solenoid Valve 4V310-10', '', 'pcs', 17500, 1, 0, 0),
(94, '009211', 'Air Solenoid Valve  4V210-08', 'ASV.PNG', 'Air Solenoid Valve 4V210-08', '', 'pcs', 13000, 1, 0, 0),
(95, '008220', 'UT 220 Clamp Meter', 'UT220q.PNG', 'Meter', '', 'pcs', 91000, 1, 0, 0),
(96, '008206', '(UT 206A) Clamp Meter', 'UT206A.PNG', 'Meter', '', 'pcs', 54000, 1, 0, 0),
(97, '008204', '(UT-204A) Clamp Meter', 'UT204A.PNG', 'Meter', '', 'pcs', 58000, 1, 0, 0),
(98, '008522', '(UT-522) Earth Teaster', 'UT522.PNG', 'Meter', '', 'pcs', 215000, 1, 0, 0),
(99, '008261', '(UT-261A) Squence Tester', 'UT261A.PNG', 'Meter', '', 'pcs', 45000, 1, 0, 0),
(100, '008850', '(UT-850A) Squence Tester', 'Squence_Tester_victor_850A.jpg', 'Meter', '', 'pcs', 18000, 1, 0, 0),
(101, '008921', '(Vc 921) Digital Multi Meter', 'Digital_multi_meter_VC921.jpg', 'Meter', '', 'pcs', 14500, 1, 0, 0),
(102, '008453', '(WO 453) Digital Multi Meter', 'W0.PNG', 'Meter', '', 'pcs', 7500, 1, 0, 0),
(103, '008800', '(CD800a) Digital Multi Meter', 'CD800a_digital_multi_meter.jpg', 'Meter', '', 'pcs', 65000, 1, 0, 0),
(104, '008770', '(CD770) Digital Multi Meter', 'CD770_digital_multi_meter.jpg', 'Meter', '', 'pcs', 78500, 1, 0, 0),
(105, '008360', '(YX 360 TRF) Analog Multi Meter', 'YX360TRF.PNG', 'Meter', '', 'pcs', 64000, 1, 0, 0),
(106, '00847', '(MF 47) Analog Multi Meter', 'mf47.PNG', 'Meter', '', 'pcs', 7000, 1, 0, 0),
(107, '008530', '(As-530) Infrared termometer', 'AR320.PNG', 'Meter', '', 'pcs', 25000, 1, 0, 0),
(108, '008320', '(AR-320) Infrared Termometer', 'AR320.PNG', 'Meter', '', 'pcs', 18000, 1, 0, 0),
(109, '00811', 'Test Probe', 'Test_probe.jpeg', 'Meter', '', 'pcs', 1500, 1, 0, 0),
(110, '00822', '50W LED Slight', 'slight.PNG', 'Slight', '', 'pcs', 9500, 1, 0, 0),
(111, '015342', '(3 core wire 3×42)', '3core_wire.PNG', 'Wire', '', 'pcs', 85000, 1, 0, 0),
(112, '01100', 'No-00 (200W×300H×150D) mm', 'panel.PNG', 'Panel', '', 'pcs', 16900, 1, 0, 0),
(113, '0110', 'No-0 (250W×350H×150D) mm', 'panel.PNG', 'Panel', '', 'pcs', 19500, 1, 0, 0),
(114, '0111', 'No-1 (300W×450H×170D)mm', 'panel.PNG', 'Panel', '', 'pcs', 27300, 1, 0, 0),
(115, '0112', 'No-2 (350W×520H×170D) mm', 'panel.PNG', 'Panel', '', 'pcs', 32500, 1, 0, 0),
(116, '0113', 'No-3 (400W×570H×200D) mm', 'panel.PNG', 'Panel', '', 'pcs', 41600, 1, 0, 0),
(117, '0114', 'No-4 (440W×610H×230D) mm', 'panel.PNG', 'Panel', '', 'pcs', 50700, 1, 0, 0),
(118, '0115', 'No-5 (570W×690H×250D) mm', 'panel.PNG', 'Panel', '', 'pcs', 87100, 1, 0, 0),
(119, '0116', 'No-6 (600W×760H×250D) mm', 'panel.PNG', 'Panel', '', 'pcs', 94900, 1, 0, 0),
(120, '0117', 'No-7 (640W×920H×250D) mm', 'panel.PNG', 'Panel', '', 'pcs', 119600, 1, 0, 0),
(121, '00931', '4.7 K ohm ', '4k7_variable_resister.jpg', 'Induction furnace parts', '', 'pcs', 7500, 1, 0, 0),
(122, '0101000', 'Air Circuit Breaker (ACB)1000A with relay', 'ACB_with_relay.jpg', 'Air Circuit Breaker (ACB)1000A with relay', '', 'pcs', 1400000, 1, 0, 0),
(123, '011234', '115 KW (DC Motor Controller)', 'panel_big.PNG', '115 KW (DC motor controller)', '', 'pcs', 4666000, 1, 0, 0),
(124, '012641', 'Sensor (KDH6-4ZC1)', 'sensor.PNG', 'Sensor', '', 'pcs', 809200, 1, 0, 0),
(125, '005100', 'RCBO - 3P+N - 100A', '3p_rcbo.jpg', 'RCBO Breaker', '', 'pcs', 32700, 1, 0, 0),
(126, '005063', 'RCBO - 3P+N - 63A', '3p_rcbo.jpg', 'RCBO Breaker', '', 'pcs', 15900, 1, 0, 0),
(127, '005263', 'RCBO - 2P - 63A', '2p_rcbo.jpg', 'RCBO Breaker', '', 'pcs', 18000, 1, 0, 0),
(128, '005232', 'RCBO - 2P - 32A', '2p_rcbo.jpg', 'RCBO Breaker', '', 'pcs', 15000, 1, 0, 0),
(129, '051032', 'RCBO - 1P+N - 32A', '2p_rcbo.jpg', 'RCBO Breaker', '', 'pcs', 12000, 1, 0, 0),
(130, '003804', '3PHASE PROTACTOR - 380V', '3phase_protactor_relay.jpg', '3Phase Protactor', '', 'pcs', 17000, 1, 0, 0),
(131, '009200', 'V - Safeguard 2P-32A', '2p_safeguard.jpg', 'V - Safeguard 2P-32A', '', 'pcs', 7500, 1, 0, 0),
(132, '009210', 'V - Safeguard 2P-63A', '2p_safeguard.jpg', 'V - Safeguard 2P-63A', '', 'pcs', 11000, 1, 0, 0),
(133, '00972', 'Timer Relay 8pin 220V', 'timer_relay_8pin.jpg', 'Timer Relay 8pin 220V', '', 'pcs', 10700, 1, 0, 0),
(134, '00241', 'CJX2S - 40 - 65 base coil 380V', 'cjx2s_base_coil.jpg', 'CJX2S - 40 - 65 base coil', '', 'pcs', 7500, 1, 0, 0),
(135, '0096011', 'DC power supply 12V 30A', 'DC_power_supply.jpg', 'DC power supply 12V 30A', '', 'pcs', 25000, 1, 0, 0),
(136, '011235', 'ATS Control Panel set 3p-100A', '', 'ATS Control Panel set 3p-100A', '', 'pcs', 200000, 1, 0, 0),
(137, '0096010', 'DC rectifier AC220V/380 90-108V', '108vdc_rectifier.jpg', 'DC rectifier AC220/380 90-108V', '', 'pcs', 15000, 1, 0, 0),
(138, '00951', '24Hours Timer Relay (chinese)', 'KG316T_chinese.jpg', '24Hours Timer Relay (chinese)', '', 'pcs', 15000, 1, 0, 0),
(139, '01384', 'Sement LOGO', 'plc.PNG', 'PLC', '', 'pcs', 143100, 1, 0, 0),
(140, '0141000', 'TRD-J1000-RZ (Encoder)', 'Encoder.PNG', 'Encoder', '', 'pcs', 118500, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `display_name` tinytext NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `computer_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_role` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `display_name`, `username`, `password`, `ip_address`, `computer_name`, `user_role`, `date`) VALUES
(9, '0', 'cashier', '21232f297a57a5a743894a0e4a801fc3', '', '', 'cashier', '2019-04-11'),
(11, '0', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', 'administrator', '2019-05-02'),
(13, '0', 'S Reubin', 'f64579b4c5722c7b747934635b3ce8fa', '', '', 'administrator', '2019-04-30'),
(14, '0', 'Ma Ma', '827ccb0eea8a706c4c34a16891f84e7b', '', '', 'cashier', '2019-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_voucherno`
--

CREATE TABLE IF NOT EXISTS `tbl_voucherno` (
  `voucherno` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`voucherno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
