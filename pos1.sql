-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 09:52 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pos`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=81 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `customer_name`, `address`, `phone`, `contact_person`, `total_debt`, `last_date`, `date`, `debt_expense`, `type`) VALUES
(1, 'မ၀င္၀င္ေမာ္', 'မ ဥကာလာပ', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(2, 'ျမေရႊစင္', 'ႏြယ္နီလမ္း မ ဥ', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(3, 'စံပယ္ စတိုး', 'ဘုန္းျကီးလမ္၊ မ ဥကလ', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(4, 'ေရႊယမင္ စတိုး', 'ေမခလာလမ္း၊ အမွတ္၂၉ ေက်ာင္းေရွ႕  တ/ Okkala', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(5, 'WIN Mart ', 'သံသုမာလမ္း တ/Okkala', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(6, 'ျကယ္စင္ကို စတိုး', 'တ/ Okala', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(8, 'Horizon Mart ', 'သံသုမာလမ္း  တ/ Okkala', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(9, 'မသိတာ 764  စတိုး', 'ဦၚေငြကိုင္လမ္း မ/ဒဂုံ', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(10, 'လင္းလတ္ျကယ္ စတိုး', 'မ/ဒဂုံ', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(11, 'ပြင့္ျဖူ  စတိုး', 'လိွုင္ထိပ္ေခါင္တင္လမ္း၊ မ-ဒဂုံ', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(12, 'La Myit Zu စတိုး', 'မင္ရဲေက်ာ္စြာလမ္း မ-ဒဂုံ', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(13, 'Yello စတိုး', 'ဗိုလ္မႈဗထူလမ္း   မ-ဒဂုံ', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(14, 'ေအာင္ စတိုး', 'ဗိုလ္မႈဗထူလမ္း  မ-ဒဂုံ', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(16, 'မခ်ဳိ  စတိုး', 'မဟာသုခိတာလမ္၊ အင္းစိန္', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(17, 'လျပည့္  စတိုး', 'ေအာင္သိဒိြလမ္း ၊ အင္းစိန္', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(18, 'KMC Store', 'မရမ္းကုန္း ၊ ဘုရင့္ေနာင္လမ္းဆုံ', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(19, 'ဦးေမာင္သန္း  စတိုး', 'လႈိင္ေစ်းျကီး', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(20, 'ေအး စတိုး', 'ပါရမီလမ္း ၊ တ-OKKALA', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(21, 'ေရႊျည္မိုး စတိုး', 'ဦး၀ိစာရလမ္း၊ မ-ဒဂုံ', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(22, 'သိန္သန္းစံ စတိုး', 'မယ္ဇီကုန္းလမ္း၊  လႈိင္', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(23, 'သာက၀န္ စတိုး', 'ဗဟိုလမ္း ၊  လႈိင္', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(24, 'ထူ စတိုး', 'ဗဟိုလမ္း ၊ ဂါနမာလမ္း ေရွ႕', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(25, 'ခ်ယ္ရီ စတိုး', 'ေအာက္ျကည္ျမင့္တိုင္၊ ', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(26, 'David III Store', 'သုခလမ္း၊ အင္းစိန္', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(27, 'လမင္တစ္ရ စတိုး', 'ဒညုင္ကုန္းလမ္းမ', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(28, 'ဧကရိ စတိုး', 'နတ္စင္လမ္း', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(29, 'ဆင္တဲ၀ စတိုး', 'သရက္ေတာ ၅လမ္း', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(30, 'ေသာ္ေသာ္  စတိုး', '5ခန္းတဲြ 4လမ္း၊ ေအာင္ဆန္၊အင္းစိန္း', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(31, 'ကိုျဖိုျကီး စတိုး', 'အင္းစိန္', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(32, 'ေဒၚသန္းသန္းနွ', 'ေဖာ့ကန္ေစ်း၊ ေအာင္သိဒိြလမ္း။ ေအာက္မဂၤလာဒုံ၊ အင္းစိန္', '09420427832', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(33, 'မခိ်ဳခ်ိုျမင့္ စတိုး', 'ဒညွင္ကုန္း ၊ ေက်ာင္းလမ္း', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(34, 'စြမ္းအားျမင့္ စတိုး', 'ဒညွင္ကုန္၊ ေက်ာင္လမ္း၊ အင္စိန္', '', '', 0, '0000-00-00', '2017-09-02', 0, NULL),
(35, 'အန္တီမႈ', 'NO. 1306 ပုလဲလမ္း၊ ေရႊျပည္သာ', '09254216471', 'အန္တီမႈ', 0, '0000-00-00', '2017-09-04', 0, NULL),
(36, 'ဇာေလး စတိုး', 'သိရိမဂၤလာျမို႕ပတ္လမ္း ၊ ေရႊျပည္သာ', '09790170889', '', 0, '0000-00-00', '2017-09-04', 0, NULL),
(37, 'လွယမင္း', 'ဘုရင့္ေနာင္လမ္း', '', '', 0, '0000-00-00', '2017-09-04', 0, NULL),
(38, 'လႈိင္လႈိင္ စတိုး', 'အိမ္မဲျကီး ေရႊျပည္သာ', '09262721399', '', 0, '0000-00-00', '2017-09-04', 0, NULL),
(39, 'မစု မုန္႕ဆိုင္', 'မဟာျမိုင္လမ္း', '09790117123', 'မစု', 0, '0000-00-00', '2017-09-04', 0, NULL),
(40, 'ေကာင္းေကာင္း', 'စစ္ေတာင္းလမ္း ', '09253631743', '', 0, '0000-00-00', '2017-09-04', 0, NULL),
(41, 'David Store Hlaing', 'thiri 5, Hlaing,', '', '', 0, '0000-00-00', '2017-09-05', 0, NULL),
(42, 'Shew Pyi Tha ', '', '', '', 0, '0000-00-00', '2017-09-06', 0, NULL),
(43, 'Daw Aye than', 'Aung San', '', '', 0, '0000-00-00', '2017-09-06', 0, NULL),
(44, 'U Nay Win', '', '', '', 0, '0000-00-00', '2017-09-06', 0, NULL),
(45, 'Daw Khin', '', '', '', 0, '0000-00-00', '2017-09-06', 0, NULL),
(46, 'ခ်စ္သမီး', '', '', '', 0, '0000-00-00', '2017-09-06', 0, NULL),
(47, 'ဆရာမေလး', '', '', '', 0, '0000-00-00', '2017-09-06', 0, NULL),
(48, 'ေသာ္ေသာ္', '', '', '', 0, '0000-00-00', '2017-09-06', 0, NULL),
(49, 'Japan street', '', '', '', 0, '0000-00-00', '2017-09-06', 0, NULL),
(50, 'မြန္မေလး', '', '', '', 0, '0000-00-00', '2017-09-06', 0, NULL),
(51, 'Min Chit Tu', '', '', '', 0, '0000-00-00', '2017-09-08', 0, NULL),
(53, '818 Store', 'Hlaing TA YA', '', '', 0, '2019-04-10', '2017-09-08', 0, NULL),
(54, 'Ma Khin Tidar', '', '', '', 0, '0000-00-00', '2017-09-08', 0, NULL),
(55, 'DAW KHIN THAN MYIT', '', '', '', 0, '0000-00-00', '2017-09-08', 0, NULL),
(57, 'K Than Tay', '', '', '', 0, '0000-00-00', '2017-09-08', 0, NULL),
(58, 'Honey Great Store', 'အင္စိန္း', '', '', 0, '0000-00-00', '2017-09-08', 0, NULL),
(59, 'Ma Sandar ', 'ႏြယ္နီးလမ္း', '', '', 0, '0000-00-00', '2017-09-08', 0, NULL),
(60, 'အေ၀ရာ Store', '', '', '', 0, '0000-00-00', '2017-09-08', 0, NULL),
(61, 'Staff, House Use', 'D&K ', '', 'Ko Kishore', 0, '0000-00-00', '2017-09-09', 0, NULL),
(62, 'နူိင္ Store', '', '', '', 0, '0000-00-00', '2017-09-11', 0, NULL),
(63, 'ဇာေလး Store', '', '09790170889', '', 0, '0000-00-00', '2017-09-13', 0, NULL),
(68, 'New Rainbow', 'Shew Pyi Tha', '', '', 0, '0000-00-00', '2017-09-12', 0, NULL),
(69, 'ကို၀င္ထြဠ္', '', '', '', 0, '0000-00-00', '2017-09-16', 0, NULL),
(70, 'ေဆြသဟာ Store ', 'Aung Zee Ya ', '', '', 0, '0000-00-00', '2017-09-16', 0, NULL),
(78, 'TAN SANG မုန္႕ဆိုင္', 'N P L Z', '09', 'AARI', 0, '2018-11-01', '2018-11-01', 0, NULL),
(79, 'CHAIN TAY NEE ', 'THAN KYI ZAY', '09', '', -119250, '2018-11-12', '2018-11-01', 0, NULL),
(80, 'KZ Mobile', 'naypyitaw', '09783473', 'Htet Htet Aung', -100000, '2019-04-10', '2019-04-10', 0, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_customer_balance_sheet`
--

INSERT INTO `tbl_customer_balance_sheet` (`id`, `customer_id`, `customer`, `total_debt`, `balance`, `voucher_amount`, `returnamount`, `paymethod`, `payname`, `note`, `date`, `sale_id`) VALUES
(1, 79, 'CHAIN TAY NEE ( THAN KYI ZAY ) ', 0, -119250, 119250, 0, 'Voucher', '0000000002', '', '2018-11-12', 0),
(2, 53, '818 Store( Hlaing TA YA ) ', 0, -3500, 3500, 0, 'Voucher', '0000000005', '', '2019-01-10', 0),
(3, 53, '818 Store( Hlaing TA YA ) ', -3500, 0, 0, 3500, '', 'ma ma', '\r\n                gfghguy f', '2019-04-10', 0),
(4, 80, 'KZ Mobile( naypyitaw ) ', 0, -100000, 300000, 200000, 'Voucher', '0000000007', '', '2019-04-10', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_general_income`
--

INSERT INTO `tbl_general_income` (`id`, `description`, `price`, `quantity`, `total`, `date`, `authority`, `income_category`, `location`, `branch_id`) VALUES
(1, 'dfsfsdf', 0, 0, 7000, '2019-04-10', '', 1, '', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_general_outcome`
--

INSERT INTO `tbl_general_outcome` (`id`, `description`, `total`, `date`, `authority`, `outcome_category`) VALUES
(1, 'NAY KYI AMGL 15P', 15000, '2018-11-10', '', 8),
(2, 'TTA - SHEW ZIN 4-P', 15000, '2018-11-12', '', 8),
(3, 'Nay Khar', 59000, '2018-11-13', '', 8),
(4, '36548 oil', 10000, '2019-04-10', '', 7);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_income_category`
--

INSERT INTO `tbl_income_category` (`id`, `title`, `amount`, `branch_id`) VALUES
(1, 'fgdfgd', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_outcome_category`
--

CREATE TABLE IF NOT EXISTS `tbl_outcome_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_outcome_category`
--

INSERT INTO `tbl_outcome_category` (`id`, `title`, `amount`) VALUES
(1, 'Car Rental', 0),
(2, 'Staff Salary', 0),
(3, 'Car Repair Fee', 0),
(4, 'Other Expenses ', 0),
(5, 'Advance Salary (ျကိုတင္ေပးေငြ)', 0),
(6, 'စာသုံးစရိတ္', 0),
(7, 'ကား ဒီဇယ္၊ ဓါတ္ဆီး / စာသုံးစရိတ္', 0),
(8, 'Transportation Charges TAMU - YGN', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_p`
--

CREATE TABLE IF NOT EXISTS `tbl_p` (
  `voucherno` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`voucherno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_p`
--

INSERT INTO `tbl_p` (`voucherno`) VALUES
(1),
(2),
(3),
(4),
(5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_purchase`
--

INSERT INTO `tbl_purchase` (`id`, `p_id`, `product_code`, `product_name`, `price`, `quantity`, `category`, `type`, `unit`, `total`, `date`, `voucherno`, `subwarehouse_id`) VALUES
(1, 0, 'BMO001', 'Beats Masala Orange', 2100, 150, 'CANDY', '', '', 315000, '2018-11-10', 'P-0000000001', 0),
(2, 0, 'AMC001', 'Amul Chocominis box ', 2550, 60, 'Choco Candy', '', '', 153000, '2018-11-10', 'P-0000000001', 0),
(3, 0, 'HORL001', 'Horlicks Biscuits 150g', 507, 240, 'Biscuits', '', '', 121680, '2018-11-12', 'P-0000000002', 0),
(4, 0, 'BMM001', 'Beats Mango ', 2100, 405, 'CANDY', '', '', 850500, '2018-11-13', 'P-0000000003', 0),
(5, 0, 'BMI001', 'Beats Masala Imil', 2100, 240, 'CANDY', '', '', 504000, '2018-11-13', 'P-0000000003', 0),
(6, 0, '', '', 0, 0, 'CANDY', '', '', 0, '2018-11-13', 'P-0000000003', 0),
(7, 0, 'AMC001', 'Amul Chocominis box ', 700, 6, 'Choco Candy', '', '', 4200, '2018-11-14', 'P-0000000004', 0),
(8, 0, '001A4', 'OPPO F9', 30000, 1, 'Phone', '', '', 30000, '2019-04-10', 'P-0000000005', 0);

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
('P-0000000001', 2, 'Raghu Tamu', 210, 468000, 0, 0, 0, '2018-11-10', 0, ''),
('P-0000000002', 3, 'Tamu MAMA Kyi', 240, 121680, 0, 0, 0, '2018-11-12', 0, ''),
('P-0000000003', 2, 'Raghu Tamu', 645, 1354500, 0, 0, 0, '2018-11-13', 0, ''),
('P-0000000004', 3, 'Tamu MAMA Kyi', 6, 4200, 0, 0, -4200, '2018-11-14', 0, ''),
('P-0000000005', 4, 'Laser', 1, 30000, 0, 30000, 0, '2019-04-10', 0, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_remind_purchase`
--

INSERT INTO `tbl_remind_purchase` (`id`, `product_code`, `product_name`, `unit`, `atleastqty`) VALUES
(1, 'BMI001', 'Beats Masala Imil', '', 100),
(2, 'HORL001', 'Horlicks Biscuits 150g', '', 1000),
(3, '001A4', 'OPPO F9', '', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_sale`
--

INSERT INTO `tbl_sale` (`id`, `product_code`, `product_name`, `category`, `type`, `price`, `quantity`, `unit`, `total`, `discount`, `discount2`, `foc`, `date`, `voucherno`, `customer_id`, `customer`, `sale_type`) VALUES
(1, 'BMO001', 'Beats Masala Orange', '', NULL, 2700, 14, '', 37800, 0, 0, 0, '2018-11-12', 0000000001, 78, 'TAN SANG မုန္႕ဆိုင္( N P L Z ) ', ''),
(2, 'HORL001', 'Horlicks Biscuits 150g', '', NULL, 600, 60, '', 36000, 0, 0, 0, '2018-11-12', 0000000001, 78, 'TAN SANG မုန္႕ဆိုင္( N P L Z ) ', ''),
(3, 'BMM001', 'Beats Mango ', '', NULL, 2650, 15, '', 39750, 0, 0, 0, '2018-11-12', 0000000002, 79, 'CHAIN TAY NEE ( THAN KYI ZAY ) ', ''),
(4, 'BMI001', 'Beats Masala Imil', '', NULL, 2650, 15, '', 39750, 0, 0, 0, '2018-11-12', 0000000002, 79, 'CHAIN TAY NEE ( THAN KYI ZAY ) ', ''),
(5, 'BMO001', 'Beats Masala Orange', '', NULL, 2650, 15, '', 39750, 0, 0, 0, '2018-11-12', 0000000002, 79, 'CHAIN TAY NEE ( THAN KYI ZAY ) ', ''),
(6, 'BMO001', 'Beats Masala Orange', '', NULL, 2700, 14, '', 37800, 0, 0, 0, '2018-11-12', 0000000003, 78, 'TAN SANG မုန္႕ဆိုင္( N P L Z ) ', ''),
(7, 'HORL001', 'Horlicks Biscuits 150g', '', NULL, 600, 120, '', 72000, 0, 0, 0, '2018-11-12', 0000000003, 78, 'TAN SANG မုန္႕ဆိုင္( N P L Z ) ', ''),
(8, 'BMM001', 'Beats Mango ', '', NULL, 2650, 15, '', 39750, 0, 0, 0, '2018-11-12', 0000000004, 79, 'CHAIN TAY NEE ( THAN KYI ZAY ) ', ''),
(9, 'BMO001', 'Beats Masala Orange', '', NULL, 2650, 15, '', 39750, 0, 0, 0, '2018-11-12', 0000000004, 79, 'CHAIN TAY NEE ( THAN KYI ZAY ) ', ''),
(10, 'BMI001', 'Beats Masala Imil', '', NULL, 2650, 15, '', 39750, 0, 0, 0, '2018-11-12', 0000000004, 79, 'CHAIN TAY NEE ( THAN KYI ZAY ) ', ''),
(11, 'AMC001', 'Amul Chocominis box ', '', NULL, 3500, 1, '', 3500, 0, 0, 0, '2019-01-10', 0000000005, 53, '818 Store( Hlaing TA YA ) ', ''),
(12, '001A4', 'OPPO F9', 'Phone', NULL, 300000, 2, '', 600000, 0, 0, 0, '2019-04-10', 0000000006, 80, 'KZ Mobile( naypyitaw ) ', ''),
(13, '001A4', 'OPPO F9', 'Phone', NULL, 300000, 1, '', 300000, 0, 0, 0, '2019-04-10', 0000000007, 80, 'KZ Mobile( naypyitaw ) ', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_sale_header`
--

INSERT INTO `tbl_sale_header` (`voucherno`, `customer_id`, `customer_name`, `totalamount`, `totaldebt`, `nettotal`, `received`, `jackpot`, `deliveryfees`, `exceedamount`, `authority`, `staff`, `date`, `paytype`, `note`, `location`, `order_voucherno`, `type`) VALUES
(0000000001, 78, 'TAN SANG မုန္႕ဆိုင္( N P L Z ) ', 73800, 0, 73800, 73800, 0, 0, 0, 'admin', '', '2018-11-14', 'cashdown', '', NULL, '', NULL),
(0000000002, 79, 'CHAIN TAY NEE ( THAN KYI ZAY ) ', 119250, 0, 119250, 0, 0, 0, -119250, 'admin', '', '2018-11-12', 'credit', '', NULL, '', NULL),
(0000000003, 78, 'TAN SANG မုန္႕ဆိုင္( N P L Z ) ', 109800, 0, 109800, 109800, 0, 0, 0, 'admin', '', '2018-11-12', 'cashdown', '', NULL, '', NULL),
(0000000004, 79, 'CHAIN TAY NEE ( THAN KYI ZAY ) ', 119250, 0, 119250, 119250, 0, 0, 0, 'admin', '', '2018-11-12', 'cashdown', '', NULL, '', NULL),
(0000000005, 53, '818 Store( Hlaing TA YA ) ', 3500, 0, 3500, 0, 0, 0, -3500, 'admin', '၀ငး္၀င္းလိႈင္', '2019-01-10', 'credit', '', NULL, '', NULL),
(0000000006, 80, 'KZ Mobile( naypyitaw ) ', 600000, 0, 600000, 600000, 0, 0, 0, 'admin', '၀ငး္၀င္းလိႈင္', '2019-04-10', 'cashdown', '', NULL, '', NULL),
(0000000007, 80, 'KZ Mobile( naypyitaw ) ', 300000, 0, 300000, 200000, 0, 0, -100000, 'admin', '', '2019-04-10', 'credit', '', NULL, '', NULL);

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
(1, 'D&K', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_showroom_stock`
--

INSERT INTO `tbl_showroom_stock` (`id`, `product_code`, `product_name`, `type`, `unit`, `quantity`, `price`, `showroom_id`, `category`, `date`) VALUES
(1, 'BMO001', 'Beats Masala Orange', 'biscuit', 'pcs', 92, 2100, 1, 'CANDY', '2018-11-10'),
(2, 'AMC001', 'Amul Chocominis box ', 'biscuit', 'pcs', 66, 700, 1, 'Choco Candy', '2018-11-14'),
(3, 'HORL001', 'Horlicks Biscuits 150g', 'biscuit', 'pcs', 600, 507, 1, 'Biscuits', '1970-01-01'),
(5, 'DFC001', 'Dark Fantasy choco fill', 'biscuit', 'pcs', 640, 600, 1, 'Biscuits', '2018-11-13'),
(6, 'BMI001', 'Beats Masala Imil', 'biscuit', 'pcs', 240, 2100, 1, 'CANDY', '2018-11-13'),
(7, 'BMM001', 'Beats Mango', 'biscuit', 'pcs', 405, 2100, 1, 'CANDY', '1970-01-01'),
(8, '001A4', 'OPPO F9', '', 'pcs', 1, 30000, 1, 'Phone', '2019-04-10');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `tbl_showroom_stock_history`
--

INSERT INTO `tbl_showroom_stock_history` (`id`, `product_code`, `product_name`, `unit`, `type`, `category`, `transferqty`, `soldoutqty`, `remainqty`, `price`, `showroom_id`, `date`) VALUES
(1, 'BMO001', 'Beats Masala Orange', 'pcs', 'biscuit', 'CANDY', 0, 0, 92, 2100, 1, '2019-01-14'),
(2, 'AMC001', 'Amul Chocominis box ', 'pcs', 'biscuit', 'Choco Candy', 0, 0, 66, 700, 1, '2019-01-14'),
(3, 'HORL001', 'Horlicks Biscuits 150g', 'pcs', 'biscuit', 'Biscuits', 0, 0, 600, 507, 1, '2019-01-14'),
(4, 'DFC001', 'Dark Fantasy choco fill', 'pcs', 'biscuit', 'Biscuits', 0, 0, 640, 600, 1, '2019-01-14'),
(5, 'BMI001', 'Beats Masala Imil', 'pcs', 'biscuit', 'CANDY', 0, 0, 240, 2100, 1, '2019-01-14'),
(6, 'BMM001', 'Beats Mango', 'pcs', 'biscuit', 'CANDY', 0, 0, 405, 2100, 1, '2019-01-14'),
(7, 'BMO001', 'Beats Masala Orange', 'pcs', 'biscuit', 'CANDY', 0, 0, 92, 2100, 1, '2019-04-10'),
(8, 'AMC001', 'Amul Chocominis box ', 'pcs', 'biscuit', 'Choco Candy', 0, 0, 66, 700, 1, '2019-04-10'),
(9, 'HORL001', 'Horlicks Biscuits 150g', 'pcs', 'biscuit', 'Biscuits', 0, 0, 600, 507, 1, '2019-04-10'),
(10, 'DFC001', 'Dark Fantasy choco fill', 'pcs', 'biscuit', 'Biscuits', 0, 0, 640, 600, 1, '2019-04-10'),
(11, 'BMI001', 'Beats Masala Imil', 'pcs', 'biscuit', 'CANDY', 0, 0, 240, 2100, 1, '2019-04-10'),
(12, 'BMM001', 'Beats Mango', 'pcs', 'biscuit', 'CANDY', 0, 0, 405, 2100, 1, '2019-04-10'),
(13, 'BMO001', 'Beats Masala Orange', 'pcs', 'biscuit', 'CANDY', 0, 0, 92, 2100, 1, '2019-04-11'),
(14, 'AMC001', 'Amul Chocominis box ', 'pcs', 'biscuit', 'Choco Candy', 0, 0, 66, 700, 1, '2019-04-11'),
(15, 'HORL001', 'Horlicks Biscuits 150g', 'pcs', 'biscuit', 'Biscuits', 0, 0, 600, 507, 1, '2019-04-11'),
(16, 'DFC001', 'Dark Fantasy choco fill', 'pcs', 'biscuit', 'Biscuits', 0, 0, 640, 600, 1, '2019-04-11'),
(17, 'BMI001', 'Beats Masala Imil', 'pcs', 'biscuit', 'CANDY', 0, 0, 240, 2100, 1, '2019-04-11'),
(18, 'BMM001', 'Beats Mango', 'pcs', 'biscuit', 'CANDY', 0, 0, 405, 2100, 1, '2019-04-11'),
(19, '001A4', 'OPPO F9', 'pcs', '', 'Phone', 0, 0, 1, 30000, 1, '2019-04-11'),
(20, 'BMO001', 'Beats Masala Orange', 'pcs', 'biscuit', 'CANDY', 0, 0, 92, 2100, 1, '2019-04-11'),
(21, 'AMC001', 'Amul Chocominis box ', 'pcs', 'biscuit', 'Choco Candy', 0, 0, 66, 700, 1, '2019-04-11'),
(22, 'HORL001', 'Horlicks Biscuits 150g', 'pcs', 'biscuit', 'Biscuits', 0, 0, 600, 507, 1, '2019-04-11'),
(23, 'DFC001', 'Dark Fantasy choco fill', 'pcs', 'biscuit', 'Biscuits', 0, 0, 640, 600, 1, '2019-04-11'),
(24, 'BMI001', 'Beats Masala Imil', 'pcs', 'biscuit', 'CANDY', 0, 0, 240, 2100, 1, '2019-04-11'),
(25, 'BMM001', 'Beats Mango', 'pcs', 'biscuit', 'CANDY', 0, 0, 405, 2100, 1, '2019-04-11'),
(26, '001A4', 'OPPO F9', 'pcs', '', 'Phone', 0, 0, 1, 30000, 1, '2019-04-11'),
(27, 'BMO001', 'Beats Masala Orange', 'pcs', 'biscuit', 'CANDY', 0, 0, 92, 2100, 1, '2019-04-11'),
(28, 'AMC001', 'Amul Chocominis box ', 'pcs', 'biscuit', 'Choco Candy', 0, 0, 66, 700, 1, '2019-04-11'),
(29, 'HORL001', 'Horlicks Biscuits 150g', 'pcs', 'biscuit', 'Biscuits', 0, 0, 600, 507, 1, '2019-04-11'),
(30, 'DFC001', 'Dark Fantasy choco fill', 'pcs', 'biscuit', 'Biscuits', 0, 0, 640, 600, 1, '2019-04-11'),
(31, 'BMI001', 'Beats Masala Imil', 'pcs', 'biscuit', 'CANDY', 0, 0, 240, 2100, 1, '2019-04-11'),
(32, 'BMM001', 'Beats Mango', 'pcs', 'biscuit', 'CANDY', 0, 0, 405, 2100, 1, '2019-04-11'),
(33, '001A4', 'OPPO F9', 'pcs', '', 'Phone', 0, 0, 1, 30000, 1, '2019-04-11'),
(34, 'BMO001', 'Beats Masala Orange', 'pcs', 'biscuit', 'CANDY', 0, 0, 92, 2100, 1, '2019-04-11'),
(35, 'AMC001', 'Amul Chocominis box ', 'pcs', 'biscuit', 'Choco Candy', 0, 0, 66, 700, 1, '2019-04-11'),
(36, 'HORL001', 'Horlicks Biscuits 150g', 'pcs', 'biscuit', 'Biscuits', 0, 0, 600, 507, 1, '2019-04-11'),
(37, 'DFC001', 'Dark Fantasy choco fill', 'pcs', 'biscuit', 'Biscuits', 0, 0, 640, 600, 1, '2019-04-11'),
(38, 'BMI001', 'Beats Masala Imil', 'pcs', 'biscuit', 'CANDY', 0, 0, 240, 2100, 1, '2019-04-11'),
(39, 'BMM001', 'Beats Mango', 'pcs', 'biscuit', 'CANDY', 0, 0, 405, 2100, 1, '2019-04-11'),
(40, '001A4', 'OPPO F9', 'pcs', '', 'Phone', 0, 0, 1, 30000, 1, '2019-04-11'),
(41, 'BMO001', 'Beats Masala Orange', 'pcs', 'biscuit', 'CANDY', 0, 0, 92, 2100, 1, '2019-04-11'),
(42, 'AMC001', 'Amul Chocominis box ', 'pcs', 'biscuit', 'Choco Candy', 0, 0, 66, 700, 1, '2019-04-11'),
(43, 'HORL001', 'Horlicks Biscuits 150g', 'pcs', 'biscuit', 'Biscuits', 0, 0, 600, 507, 1, '2019-04-11'),
(44, 'DFC001', 'Dark Fantasy choco fill', 'pcs', 'biscuit', 'Biscuits', 0, 0, 640, 600, 1, '2019-04-11'),
(45, 'BMI001', 'Beats Masala Imil', 'pcs', 'biscuit', 'CANDY', 0, 0, 240, 2100, 1, '2019-04-11'),
(46, 'BMM001', 'Beats Mango', 'pcs', 'biscuit', 'CANDY', 0, 0, 405, 2100, 1, '2019-04-11'),
(47, '001A4', 'OPPO F9', 'pcs', '', 'Phone', 0, 0, 1, 30000, 1, '2019-04-11'),
(48, 'BMO001', 'Beats Masala Orange', 'pcs', 'biscuit', 'CANDY', 0, 0, 92, 2100, 1, '2019-04-11'),
(49, 'AMC001', 'Amul Chocominis box ', 'pcs', 'biscuit', 'Choco Candy', 0, 0, 66, 700, 1, '2019-04-11'),
(50, 'HORL001', 'Horlicks Biscuits 150g', 'pcs', 'biscuit', 'Biscuits', 0, 0, 600, 507, 1, '2019-04-11'),
(51, 'DFC001', 'Dark Fantasy choco fill', 'pcs', 'biscuit', 'Biscuits', 0, 0, 640, 600, 1, '2019-04-11'),
(52, 'BMI001', 'Beats Masala Imil', 'pcs', 'biscuit', 'CANDY', 0, 0, 240, 2100, 1, '2019-04-11'),
(53, 'BMM001', 'Beats Mango', 'pcs', 'biscuit', 'CANDY', 0, 0, 405, 2100, 1, '2019-04-11'),
(54, '001A4', 'OPPO F9', 'pcs', '', 'Phone', 0, 0, 1, 30000, 1, '2019-04-11');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id`, `staff`, `salary`, `location`) VALUES
(1, 'ကိုစိုးမင္းလတ္', 200000, 'မံုရြာ'),
(8, '၀ငး္၀င္းလိႈင္', 150000, 'ေတာင္တြင္း'),
(9, 'ကိုသက္', 150000, 'ေအာင္လံ'),
(10, 'ဆုေ၀လြင္', 50000, 'ေတာင္တြင္း'),
(11, 'မတင္ႏု', 180000, 'ေတာင္တြင္း');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id`, `supplier_name`, `address`, `phone`, `contact_person`, `bankaccount`, `transferbank`, `transfername`, `transferphone`, `total_debt`, `last_date`, `date`) VALUES
(2, 'Raghu Tamu', 'Tamu', '09', 'Raghu', '', '', '', '', 0, '2018-11-12', '2018-11-12'),
(3, 'Tamu MAMA Kyi', 'tamu', '', '', '', '', '', '', -4200, '2018-11-12', '2018-11-12'),
(4, 'Laser', 'Naypyitaw', '09434727878', 'Mi Aung Kyi', '', '', '', '', 0, '2019-04-10', '2019-04-10');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_supplier_balance_sheet`
--

INSERT INTO `tbl_supplier_balance_sheet` (`id`, `supplier_id`, `supplier`, `total_debt`, `balance`, `voucher_amount`, `paidamount`, `returnamount`, `paymethod`, `payname`, `note`, `date`) VALUES
(1, 2, 'Raghu Tamu', 0, 0, 468000, 0, 0, 'Voucher', 'P-0000000001', '', '2018-11-10'),
(2, 3, 'Tamu MAMA Kyi', 0, 0, 121680, 0, 0, 'Voucher', 'P-0000000002', '', '2018-11-12'),
(3, 2, 'Raghu Tamu', 0, 0, 1354500, 0, 0, 'Voucher', 'P-0000000003', '', '2018-11-13'),
(4, 3, 'Tamu MAMA Kyi', 0, -4200, 4200, 0, 0, 'Voucher', 'P-0000000004', '', '2018-11-14'),
(5, 4, 'Laser', 0, 0, 30000, 30000, 0, 'Voucher', 'P-0000000005', '', '2019-04-10');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_unit`
--

INSERT INTO `tbl_unit` (`id`, `product_code`, `product_name`, `photo`, `category`, `type`, `unit`, `price`, `smallest_itemcount`, `discount`, `capital`) VALUES
(1, 'BMM001', 'Beats Mango ', 'beats1.jpg', 'CANDY', '', 'pcs', 2700, 1, 0, 0),
(2, 'BMI001', 'Beats Masala Imil', 'beats1.jpg', 'CANDY', '', 'pcs', 2700, 1, 0, 0),
(3, 'BMG001', 'Beats Masala Guava ', 'beats1.jpg', 'CANDY', '', 'pcs', 2700, 1, 0, 0),
(4, 'BMC001', 'Beats Masala cola ', 'beats1.jpg', 'CANDY', '', 'pcs', 2700, 1, 0, 0),
(5, 'BMO001', 'Beats Masala Orange', 'beats1.jpg', 'CANDY', '', 'pcs', 2700, 1, 0, 0),
(6, 'CFG001', 'Center Fresh Mint blue', 'center Fresh & fruit.jpg', 'CANDY', '', 'pcs', 4500, 1, 0, 0),
(7, 'CFG002', 'Center Fruits WM-FT-MG-BRY', 'center Fresh & fruit.jpg', 'CANDY', '', 'pcs', 4300, 1, 0, 0),
(8, 'DFC001', 'Dark Fantasy choco fill', 'dark fantasy.jpg', 'Choco & Cookies ', '', 'pcs', 800, 1, 0, 0),
(9, 'MCD001', 'MILANO CHOCO FILLS', 'milano Biscuit.jpg', 'Choco & Cookies ', '', 'pcs', 1200, 1, 0, 0),
(10, 'ECL001', 'Eclairs chatpati', '', 'CANDY', '', 'pcs', 2500, 1, 0, 0),
(11, 'TCD001', 'Twist chatpati candy', '', 'CANDY', '', 'pcs', 2500, 1, 0, 0),
(12, 'VIC001', 'Vicks Manthols Candy', '', 'CANDY', '', 'pcs', 4500, 1, 0, 0),
(13, 'WAF001', 'Mr.Wafer Choco Stick', '', 'WAFER STICKS', '', 'pcs', 4000, 1, 0, 0),
(14, 'WAF002', 'Mr.Wafer vanilla Sticks', '', 'WAFER STICKS', '', 'pcs', 4000, 1, 0, 0),
(15, 'AMC001', 'Amul Chocominis box ', '', 'Choco Candy', '', 'pcs', 3500, 1, 0, 0),
(16, 'BSP001', ' BIKAJI SOAN PAPDI 250G', 'Bikaji SPM.jpg', 'SANJU', '', 'pcs', 1500, 1, 0, 0),
(17, 'JFC001', 'Jillies Furits chew (stw)', 'jollies2.jpg', 'Jally Candy', '', 'pcs', 4500, 1, 0, 0),
(18, 'HORL001', 'Horlicks Biscuits 150g', 'horlicks bis.jpg', 'Biscuits', '', 'pcs', 750, 1, 0, 0),
(19, '001A4', 'OPPO F9', '', 'Phone', '', 'pcs', 300000, 1, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `display_name`, `username`, `password`, `ip_address`, `computer_name`, `user_role`, `date`) VALUES
(1, 'administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', 'administrator', '2016-07-12'),
(2, 'sale man', 'sale1', 'd177d2da3228a2aaa2e7e1e1474347d2', '', '', 'cashier', '0000-00-00'),
(4, '0', 'Kishore', '3384ace9a48c23d689f347236c7ab49a', '', '', 'cashier', '2018-11-12'),
(5, '0', 'Raj', '3384ace9a48c23d689f347236c7ab49a', '', '', 'cashier', '2018-11-12'),
(6, '0', 'sale1', 'd177d2da3228a2aaa2e7e1e1474347d2', '', '', 'cashier', '2019-04-10');

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
