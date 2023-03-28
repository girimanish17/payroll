-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2023 at 11:37 PM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_type`
--

CREATE TABLE `account_type` (
  `id` int(11) NOT NULL,
  `comp_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_type`
--

INSERT INTO `account_type` (`id`, `comp_id`, `account_type`, `status`, `created_date`) VALUES
(1, 'COMP11123', 'Bank', 1, '2022-09-15 06:12:11'),
(2, 'COMP11123', 'Cash', 1, '2022-09-15 06:12:47'),
(3, 'COMP11123', 'Cheque', 0, '2022-09-15 06:12:55'),
(4, 'COMP11123', 'Gpay', 0, '2022-09-15 06:13:01'),
(5, 'COMP11123', 'test', 0, '2022-09-15 06:36:31'),
(7, 'COM96421', 'test11', 1, '2022-12-19 01:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `comp_id` varchar(50) NOT NULL,
  `department_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `summary` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `comp_id`, `department_id`, `title`, `start_date`, `end_date`, `summary`, `message`, `image`, `created_at`, `updated_at`) VALUES
(6, 'COMP11123', 1, 'I did: there\'s no use in crying like that!\' said.', '2022-09-12', '2022-09-15', 'Dormouse sulkily remarked, \'If you can\'t swim, can you?\' he added, turning to the dance. So they.', 'Dormouse sulkily remarked, \'If you can\'t swim, can you?\' he added, turning to the dance. So they.', '56d429c82a8a6ac92783d685f38135926.jpg.jpg', '2022-12-22 13:12:02', '0000-00-00 00:00:00'),
(7, 'COMP11123', 1, 'Birthday celebration', '2022-09-12', '2022-09-24', 'Birthday celebration at 5pm at main hall.', 'Birthday celebration at 5pm at main hall.', '56d429c82a8a6ac92783d685f38135926.jpg.jpg', '2022-12-22 13:12:05', '0000-00-00 00:00:00'),
(8, 'COMP11123', 0, 'HAPPY NAVRATRI', '2022-09-26', '2022-09-26', 'HAPPY NAVRATRI', 'HAPPY NAVRATRI', '282253639c3d4df15998bf326f330927123456.jpg.jpg', '2022-12-22 13:12:07', '0000-00-00 00:00:00'),
(9, 'COMP11123', 1, 'Happy New Year', '2022-12-27', '2023-01-02', 'test', 'Happy New Year 2023', 'c97bacdf06f71f21f40e0bac757d47bf4.jpg.jpg', '2022-12-27 19:58:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comp_id` varchar(50) NOT NULL,
  `empId` varchar(50) NOT NULL,
  `attendence_date` date NOT NULL,
  `checkIn` varchar(50) NOT NULL,
  `checkOut` varchar(50) NOT NULL,
  `myIP` varchar(255) NOT NULL,
  `workingFrom` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `total_hour` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `user_id`, `comp_id`, `empId`, `attendence_date`, `checkIn`, `checkOut`, `myIP`, `workingFrom`, `note`, `total_hour`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 8, 'COMP11123', 'EB112', '2022-11-03', '17:37 PM', '17:48 PM', '27.6.226.211', 'home', 'test', '0hr11m', 1, 0, '2022-12-21 13:21:59', '2022-11-03 05:48:44'),
(3, 8, 'COMP11123', 'EB112', '2022-11-04', '10:00 AM', '19:00 PM', '27.6.226.211', 'Office', 'test', '9hr00m', 1, 0, '2022-12-21 13:21:57', '2022-11-03 05:48:44'),
(4, 8, 'COMP11123', 'EB112', '2022-11-14', '10:00 AM', '16:30 PM', '', 'home', '', '6hr30m', 1, 2, '2022-12-21 13:21:55', '0000-00-00 00:00:00'),
(5, 8, 'COMP11123', 'EB112', '2022-10-04', '10:00 AM', '19:00 PM', '27.6.226.211', 'Office', 'test', '9hr00m', 1, 0, '2022-12-21 13:21:53', '2022-11-03 05:48:44'),
(6, 8, 'COMP11123', 'EB112', '2022-10-05', '10:00 AM', '19:00 PM', '27.6.226.211', 'Office', 'test', '9hr00m', 1, 2, '2022-12-21 13:21:51', '2022-11-03 05:48:44'),
(7, 8, 'COMP11123', 'EB112', '2022-11-15', '11:00 AM', '19:00 PM', '27.6.226.120', 'home', 'test', '8hr00m', 1, 0, '2022-12-21 13:21:48', '0000-00-00 00:00:00'),
(11, 8, 'COMP11123', 'EB112', '2022-11-16', '11:53 AM', '11:55 AM', '27.6.226.120', '', '', '0hr2m', 1, 0, '2022-12-21 13:21:44', '2022-11-16 11:55:20'),
(13, 8, 'COMP11123', 'EB112', '2022-12-21', '15:39 PM', '15:41 PM', '27.6.226.53', '', '', '0hr2m', 1, 0, '2022-12-21 10:11:13', '2022-12-21 03:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `comp_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `award_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cash_prize` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_user_id` int(11) NOT NULL,
  `month_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `comp_id`, `award_name`, `gift`, `cash_prize`, `emp_user_id`, `month_year`, `created_by`, `status`, `created_date`, `updated_date`) VALUES
(2, 'COMP11123', 'Employee Of The Month', 'Notepad', '500', 15, '2022-11', 2, 1, '2022-11-29 10:36:51', '0000-00-00 00:00:00'),
(3, 'COMP11123', 'Employee Of The Month', 'Pen', '1000', 8, '2022-12', 2, 1, '2022-11-29 10:42:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(49) DEFAULT NULL,
  `bank_ifsc` varchar(11) DEFAULT NULL,
  `bank_branch` varchar(74) DEFAULT NULL,
  `bank_address` varchar(195) DEFAULT NULL,
  `bank_city` varchar(50) DEFAULT NULL,
  `bank_district` varchar(50) DEFAULT NULL,
  `bank_state` varchar(26) DEFAULT NULL,
  `sss` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`bank_id`, `bank_name`, `bank_ifsc`, `bank_branch`, `bank_address`, `bank_city`, `bank_district`, `bank_state`, `sss`) VALUES
(285, 'AKOLA JANATA COMMERCIAL COOPERATIVE BANK', 'AKJB0000033', 'INDORE', 'CHETAK CENTRE,R.N.T.MARG,INDORE M.P.PIN 452 001', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(3355, 'ALLAHABAD BANK', 'ALLA0213297', 'ANNAPURNA NAGAR  INDORE', '5, VISHAL NAGAR, ANNAPURNA MANDIR ROAD, INDORE- 452009', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(6791, 'ANDHRA BANK', 'ANDB0002750', 'GEETA BHAVAN', 'NO 56 A,MANORAMA GANJ,GEETA BHAVAN,OPP SETH APARTEMENT,INDORE,MADHYA PRADESH,452001', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(13704, 'BANK OF BARODA', 'BARB0VIJIND', 'VIJAY NAGAR BRANCH', 'VIJAY NAGAR BRANCH,AA 14 SCH NO.54 VIJAY NAGAR A.B.ROAD INDORE,INDORE,452010', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(14416, 'BANDHAN BANK LIMITED', 'BDBL0001501', 'SHUJALPUR', 'PLOT NO.32,WARD NO 15,SHASTRI MARG,P.O.SHUJALPUR,MADHYA PRADESH,PIN 465333', 'INDORE', 'SHAJAPUR', 'MADHYA PRADESH', 0),
(16006, 'DENA BANK', 'BKDN0811636', 'CBB INDORE', 'DENA BANK GROUND FLOOR,BH 19,HIG,PD DEENDAYAL NAGAR,SUKHLIYA,INDORE', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(21282, 'BANK OF INDIA', 'BKID0NAMRGB', 'NARMADA MALWA GB-INDORE BR', '28, SOUTH RAJMOHALLA, INDORE - 452 002', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(21292, 'BHARATIYA MAHILA BANK LIMITED', 'BMBL0000009', 'INDORE GPO BRANCH', 'SBI COMPLEX,GPO CHAURAHA,INDORE 452 001', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(26251, 'CENTRAL BANK OF INDIA', 'CBIN0MPDCAO', 'INDORE PREMIER CO-OP. BANK LTD. INDORE', '24, MAHARANI ROAD, INDORE (M.P.) PIN CODE 452007', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(26341, 'CITI BANK', 'CITI0000020', 'INDORE', '3, PRINCESS BUSINESS SKYPARK, BLOCK 22, 23 AND 24, A. B. ROAD,OPPOSITE ORBIT MALL, INDORE, PINCODE 452 010', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(26587, 'CITY UNION BANK LIMITED', 'CIUB0000220', 'INDORE', '6 BY 1,THE MAGNATE,NEW PALASIA,CURE WELL HOSPITAL ROAD,INDORE 452001', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(32635, 'CANARA BANK', 'CNRB0007934', 'INDORE  CIRCLE OFFICE', 'OMEGA TOWER, 3RD FLOOR 32 MECHANIC NAGAR BHAMORI INDORE PIN 452010', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(35235, 'CORPORATION BANK', 'CORP0003386', 'INDORE-NEW LOHA MANDI', 'PLOT NO 75 A NEW LOHA MANDI SCHEME NO 78 I MAIN ROAD', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(35414, 'THE COSMOS CO OPERATIVE BANK LIMITED', 'COSB0000917', 'ANNAPURNA BRANCH', 'ANNAPURNA MANDIR  PARISAR, NEAR DASHERA MAIDAN, ANNAPURNA ROAD,INDORE-452009', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(36062, 'DCB BANK LIMITED', 'DCBL0000163', 'INDORE', 'CNT,SHOPNO1/2,PRINCESPRIE,21/3NEWPLSI,INORE,452001', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(37653, 'FEDERAL BANK', 'FDRL0002142', 'INDORE PIPLIYAHANA', 'C-3,BRAGESWARI EXTENSION,MAIN ROAD, IDA SCHEME NO.140,NEAR PIPLIYAHANA CHOURAHA,', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(42505, 'HDFC BANK', 'HDFC0CISWAM', 'INDORE SWAYAMSIDH MAHILA CO-OP BANK', '111,NAVNEET PLAZA,1ST FLOOR,OLD PALASIYA,INDORE -452001', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(43173, 'HSBC BANK', 'HSBC0452002', 'INDORE', 'DARSHAN MALL  UPPER GROUND FLOOR  15 BY 2  RACE COURSE ROAD  INDORE 452 001', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(45094, 'IDBI BANK', 'IBKL0001SNS', 'SHRAMIK NAGRIK SAHAKARI BANK LTD.', '123 DAVI AHILYA MARG SHRAM SHIVIR INDORE M.P.PIN CODE 452003', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(50181, 'ICICI BANK LIMITED', 'ICIC00INPRS', 'INDORE PARASPAR SAHAKARI BANK LIMITED', 'SAHAKAR SADAN, 221, TILAK PATH, INDORE 452 007', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(52747, 'INDIAN BANK', 'IDIB000V094', 'VIJAY NAGAR  INDORE', 'GF-7, SCHEME NO.54, SICA SCHOOL MAIN ROAD, VIJAY NAGAR, INDORE MP 452010', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(53631, 'INDUSIND BANK', 'INDB0000851', 'CLOTH MARKET', 'GR AND 1ST FLOOR PLOT NO 31 SIR HUKUMCHAND MARG ITWARIYA BAZAR NEAR SHISH MAHAL CLOTH MARKET INDORE 452 002 MP', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(56852, 'INDIAN OVERSEAS BANK', 'IOBA0003404', 'LIMBODI INDORE', 'KASTURBA VILLAGE,ASAND ENCLAVE,270,RANIBAGH COLONY,VILLAGE LIMBODI MP PIN 452020 DIST.INDORE', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(58870, 'KARNATAKA BANK LIMITED', 'KARB0000355', 'INDORE VIJAYANAGAR', 'GROUND FLOOR, NO DF-23, SCHEME NO. 74-C, NEAR BRILLIANT CONVENTION CENTER, VIJAYANAGAR, INDORE -452010', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(60111, 'KOTAK MAHINDRA BANK LIMITED', 'KKBK0005942', 'CLOTH MARKET BRANCH', 'GR FLOOR AND FIRST FLOOR 85 SIR HUKUM CHAND MARG CLOTH MARKET ITWARIYA BAZAR INDORE 452002', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(61730, 'KARUR VYSYA BANK', 'KVBL0002301', 'INDORE', '2-B RAJGARH KOTHI,A.B.ROAD,INDORE-452001', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(62592, 'LAXMI VILAS BANK', 'LAVB0000318', 'INDORE', '7 8, R N T MARG SILVER CASTLE BUILDING P B NO 503 INDORE 452 001 MADHY', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(64824, 'BANK OF MAHARASHTRA', 'MAHB0001930', 'NEW LOHAMANDI', 'A-107,SCHEME NO-78,PART - 1,INDORE-452010', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(65149, 'NAGPUR NAGARIK SAHAKARI BANK LIMITED', 'NGSB0000028', 'INDORE', '34,TILAKPATH,INDORE', 'INDORE', 'NAGPUR', 'MADHYA PRADESH', 0),
(67746, 'ORIENTAL BANK OF COMMERCE', 'ORBC0102181', 'INDORE  AIRPORT ROAD', '325, VENKATESH NAGAR, NEW 60 FT. ROAD, INDORE - 452005', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(69905, 'PUNJAB AND SIND BANK', 'PSIB0000734', 'NAND NAGAR INDORE', 'GURU TEG BAHADUR TRUST,NAND NAGAR, INDORE -452006', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(77440, 'PUNJAB NATIONAL BANK', 'PUNB0993400', 'RETAIL ASSET BRANCH INDORE', 'INDIRA COMP NAVLAKHA INDORE MADHYA PRADESH 452001', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(77675, 'RATNAKAR BANK LIMITED', 'RATN0000164', 'INDORE', 'THE RATNAKAR BANK LTD,SHOP NO.3, GROUND FLOOR, THE GRACE, PLOT NO. 1&2, KIBE COMPOUND, INDORE-452001', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(79507, 'STATE BANK OF BIKANER AND JAIPUR', 'SBBJ0011430', 'NEW PALASIYA INDORE', '6/6, NEW PALASIYA, INDORE, MADHYA PRADESH, PIN - 452001', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(80607, 'STATE BANK OF HYDERABAD', 'SBHY0021090', 'RNT MARGE', 'UG 3, CORPORATE HOUSE 169 RNT MARG INDORE MADHYA PRADESH', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(99429, 'STATE BANK OF INDIA', 'SBIN0060416', 'INDORE  SIYAGANJ', '22,JAWAHAR MARG SIYAGANJ INDORE MP 452007', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(100462, 'STATE BANK OF MYSORE', 'SBMY0041034', 'SCHEME NUMBER 94 INDORE', 'EB 247 SCHEME NO 94 NEAR PUNJAB NATIONAL BANK RING ROAD INDORE MP', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(101637, 'STATE BANK OF TRAVANCORE', 'SBTR0001109', 'MIDCORPORATE BRANCH INDORE', '202, 202A, SECOND FLOOR, MEGAPOLIS SQUARE, 579, M G ROAD, INDORE, MP 452001,MCBINDORE AT SBT.CO.IN', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(101841, 'STANDARD CHARTERED BANK', 'SCBL0036069', 'INDORE', 'D.M TOWERS', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(102373, 'SOUTH INDIAN BANK', 'SIBL0000442', 'INDORE', 'INDORE BRANCH, FF 27,28,OPP MANGAL MARILAND GARDENS, SCHEME NO:54,VIJAYANAGAR, INDORE, MADHYA PRADESH, PIN - 143001', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(103189, 'SARASWAT COOPERATIVE BANK LIMITED', 'SRCB0000428', 'ANNAPURNA ROAD', 'DECENT TOWER,SACCHIDANAND NAGAR,ANNAPURNA MAIN ROAD,INDORE,MADHYA PRADESH 452 009', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(104079, 'STATE BANK OF PATIALA', 'STBP0000895', 'MID CORPORATE INDORE', 'STATE BANK OF PATIALA MID CORPORATE BRANCH, ORBIT MALL, LOWER GROUND FLOOR,53 & 53A SCHEME NO.54 A B ROAD INDORE-452010', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(104722, 'THE SHAMRAO VITHAL COOPERATIVE BANK', 'SVCB0000122', 'BHANWAR KUWA-  INDORE', '7, GROUND FLOOR, MALWA TOWER, ASHOK NAGAR,BHANWAR KUWA MAIN ROAD, INDORE- 452001', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(107597, 'SYNDICATE BANK', 'SYNB0007809', 'MID CORPORATE BRANCH INDORE', '67,MTH COMPOUND RAJA RAM MOHAN ROY COMPLEX,OPP PALIKA PLAZA INDORE MADHYA PRADESH 452007', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(109684, 'TAMILNAD MERCANTILE BANK LIMITED', 'TMBL0000444', 'INDORE', 'SOUTH TUKOGANJ, STREET NO.3,MANAV TRADE CENTRE,INDORE 452 001,MADHYA PRADESH STATE', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(113877, 'UNION BANK OF INDIA', 'UBIN0574686', 'SCHEMENO INDORE', 'UBI SCHM 78 PLOT 1140 WARD 37 OPP SCHM 78 INDORE MADHYA PRADESH PINCODE 452010', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(116663, 'UCO BANK', 'UCBA0002871', 'TEJAJI NAGAR', '57 ANURADHA NAGAR,TEJAJI NAGARKALOD KARTAL INDORE', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(118080, 'UNITED BANK OF INDIA', 'UTBI0KHT665', 'KHATIWALA TANK', '529,KHATIWALA TANK,INDORE', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(121917, 'AXIS BANK', 'UTIB0002975', 'ANAND BAZAR INDORE', 'GROUND FLOOR 70 SHREE NAGAR EXT KHAJRANA MAIN ROAD ANAND BAZAR PIN 452001', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(123932, 'VIJAYA BANK', 'VIJB0007674', 'KHAJRANA ROAD-INDORE', '4/101 KALPNA LOK KHAJRANA ROAD INDORE PIN 452016', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(124878, 'ING VYSYA BANK', 'VYSA0008730', 'JAWAHAR MARG', '28,SOUTH RAJMOHALLA,OFF.JAWAHAR MAR,INDORE -452 002 STATE MADHYA PRADESH', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0),
(127566, 'YES BANK', 'YESB0VASB02', 'VYAPARIK AUDYOGIK SAH BANK MALHRGNJ', '2/4 MALHARGANJ INDORE - 452002', 'INDORE', 'INDORE', 'MADHYA PRADESH', 0);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `company_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'CompanyName',
  `package_id` int(11) NOT NULL,
  `premium` enum('Monthly','Annual') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_date` date NOT NULL,
  `next_pay_date` date NOT NULL,
  `login_status` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `admin_id`, `company_id`, `name`, `package_id`, `premium`, `amount`, `pay_date`, `next_pay_date`, `login_status`, `status`, `created_date`) VALUES
(1, 16, 'COM32901', 'New Test Company', 1, 'Monthly', '500', '2022-12-14', '2022-12-17', 0, 1, '2022-12-02 10:35:39'),
(3, 32, 'COM65591', 'Test', 1, 'Monthly', '500', '2022-12-28', '2022-12-31', 0, 1, '2022-12-08 09:55:22'),
(4, 33, 'COM96421', 'Kalcy Business Solutions Pvt Ltd', 3, 'Annual', '5000', '2023-01-10', '2024-01-10', 0, 2, '2022-12-15 11:43:51'),
(5, 2, 'COMP11123', 'Aakansha infograins', 3, 'Annual', '5000', '2023-01-10', '2024-01-10', 0, 1, '2022-12-15 11:43:51'),
(7, 41, 'COM45981', 'Kalcy Business Solutions Pvt Ltd', 3, 'Annual', '15000', '2022-12-26', '2023-12-26', 0, 2, '2022-12-26 09:25:18'),
(8, 42, 'COM82491', 'Kalcy Business Solutions Pvt Ltd', 3, 'Annual', '5000', '2023-01-03', '2024-01-03', 0, 1, '2023-01-03 08:27:12'),
(9, 44, 'COM18511', 'Iris Informatics', 1, 'Annual', '25000', '2023-03-01', '2023-05-01', 0, 1, '2023-03-01 07:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `compoff_emp_leaves`
--

CREATE TABLE `compoff_emp_leaves` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `leave_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `half_days` int(11) NOT NULL,
  `selected_days` int(11) NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `type` enum('single','multiple','compoff') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_status` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `compoff_emp_leaves`
--

INSERT INTO `compoff_emp_leaves` (`id`, `emp_id`, `comp_id`, `user_id`, `leave_type`, `half_days`, `selected_days`, `reason`, `from_date`, `to_date`, `type`, `status`, `leave_status`, `created_date`) VALUES
(5, 'EB112', 'COMP11123', 8, '6', 0, 1, 'test', '2022-12-14', '0000-00-00', 'compoff', 'Approved', 1, '2022-12-20 06:33:52'),
(6, 'EB112', 'COMP11123', 8, '6', 0, 1, 'test', '2022-12-30', '0000-00-00', 'compoff', 'Pending', 0, '2022-12-20 06:37:03'),
(7, 'EB112', 'COMP11123', 8, '6', 0, 1, 'test', '2023-03-24', '0000-00-00', 'compoff', 'Approved', 0, '2023-03-27 05:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `comp_general_options`
--

CREATE TABLE `comp_general_options` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `system_email` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_position` enum('Right','Left','Center') COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_id` int(11) NOT NULL,
  `openIdAuth` int(11) NOT NULL,
  `mobileAccessEmp` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comp_general_options`
--

INSERT INTO `comp_general_options` (`id`, `user_id`, `system_email`, `contact_email`, `logo_position`, `country_id`, `timezone`, `currency_id`, `openIdAuth`, `mobileAccessEmp`, `status`, `created_date`, `updated_date`) VALUES
(2, 2, 'jainaaka@gmail.com', 'jainaaka@gmail.com', 'Center', 1, '(UTC+5.30) Asia/Kolkata', 1, 1, 1, 1, '2022-11-24', '2022-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `comp_password_option`
--

CREATE TABLE `comp_password_option` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pass_min_length` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_expiry_limit` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_expiry_reminder_days` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memory_list_size` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allowed_invalid_login_attempts` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `welcome_mail_pass_expiry_days` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comp_password_option`
--

INSERT INTO `comp_password_option` (`id`, `user_id`, `pass_min_length`, `pass_expiry_limit`, `pass_expiry_reminder_days`, `memory_list_size`, `allowed_invalid_login_attempts`, `welcome_mail_pass_expiry_days`, `status`, `created_date`, `updated_date`) VALUES
(1, 2, '10', '0', '7', '10', '0', '4', 1, '2022-11-26', '2022-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `comp_sequence_numbers`
--

CREATE TABLE `comp_sequence_numbers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `format` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `index` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comp_sequence_numbers`
--

INSERT INTO `comp_sequence_numbers` (`id`, `user_id`, `name`, `type`, `key`, `format`, `index`, `status`, `created_date`) VALUES
(4, 2, 'Aakansha Jain', 'test', 'test', '0000', '2', 1, '2022-11-26'),
(5, 2, 'Test', 'test', 'test', '0000', '1', 1, '2022-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `status`) VALUES
(1, 'AF', 'Afghanistan', 93, 1),
(2, 'AL', 'Albania', 355, 1),
(3, 'DZ', 'Algeria', 213, 1),
(4, 'AS', 'American Samoa', 1684, 1),
(5, 'AD', 'Andorra', 376, 1),
(6, 'AO', 'Angola', 244, 1),
(7, 'AI', 'Anguilla', 1264, 1),
(8, 'AQ', 'Antarctica', 0, 1),
(9, 'AG', 'Antigua And Barbuda', 1268, 1),
(10, 'AR', 'Argentina', 54, 1),
(11, 'AM', 'Armenia', 374, 1),
(12, 'AW', 'Aruba', 297, 1),
(13, 'AU', 'Australia', 61, 1),
(14, 'AT', 'Austria', 43, 1),
(15, 'AZ', 'Azerbaijan', 994, 1),
(16, 'BS', 'Bahamas The', 1242, 1),
(17, 'BH', 'Bahrain', 973, 1),
(18, 'BD', 'Bangladesh', 880, 1),
(19, 'BB', 'Barbados', 1246, 1),
(20, 'BY', 'Belarus', 375, 1),
(21, 'BE', 'Belgium', 32, 1),
(22, 'BZ', 'Belize', 501, 1),
(23, 'BJ', 'Benin', 229, 1),
(24, 'BM', 'Bermuda', 1441, 1),
(25, 'BT', 'Bhutan', 975, 1),
(26, 'BO', 'Bolivia', 591, 1),
(27, 'BA', 'Bosnia and Herzegovina', 387, 1),
(28, 'BW', 'Botswana', 267, 1),
(29, 'BV', 'Bouvet Island', 0, 1),
(30, 'BR', 'Brazil', 55, 1),
(31, 'IO', 'British Indian Ocean Territory', 246, 1),
(32, 'BN', 'Brunei', 673, 1),
(33, 'BG', 'Bulgaria', 359, 1),
(34, 'BF', 'Burkina Faso', 226, 1),
(35, 'BI', 'Burundi', 257, 1),
(36, 'KH', 'Cambodia', 855, 1),
(37, 'CM', 'Cameroon', 237, 1),
(38, 'CA', 'Canada', 1, 1),
(39, 'CV', 'Cape Verde', 238, 1),
(40, 'KY', 'Cayman Islands', 1345, 1),
(41, 'CF', 'Central African Republic', 236, 1),
(42, 'TD', 'Chad', 235, 1),
(43, 'CL', 'Chile', 56, 1),
(44, 'CN', 'China', 86, 1),
(45, 'CX', 'Christmas Island', 61, 1),
(46, 'CC', 'Cocos (Keeling) Islands', 672, 1),
(47, 'CO', 'Colombia', 57, 1),
(48, 'KM', 'Comoros', 269, 1),
(49, 'CG', 'Republic Of The Congo', 242, 1),
(50, 'CD', 'Democratic Republic Of The Congo', 242, 1),
(51, 'CK', 'Cook Islands', 682, 1),
(52, 'CR', 'Costa Rica', 506, 1),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225, 1),
(54, 'HR', 'Croatia (Hrvatska)', 385, 1),
(55, 'CU', 'Cuba', 53, 1),
(56, 'CY', 'Cyprus', 357, 1),
(57, 'CZ', 'Czech Republic', 420, 1),
(58, 'DK', 'Denmark', 45, 1),
(59, 'DJ', 'Djibouti', 253, 1),
(60, 'DM', 'Dominica', 1767, 1),
(61, 'DO', 'Dominican Republic', 1809, 1),
(62, 'TP', 'East Timor', 670, 1),
(63, 'EC', 'Ecuador', 593, 1),
(64, 'EG', 'Egypt', 20, 1),
(65, 'SV', 'El Salvador', 503, 1),
(66, 'GQ', 'Equatorial Guinea', 240, 1),
(67, 'ER', 'Eritrea', 291, 1),
(68, 'EE', 'Estonia', 372, 1),
(69, 'ET', 'Ethiopia', 251, 1),
(70, 'XA', 'External Territories of Australia', 61, 1),
(71, 'FK', 'Falkland Islands', 500, 1),
(72, 'FO', 'Faroe Islands', 298, 1),
(73, 'FJ', 'Fiji Islands', 679, 1),
(74, 'FI', 'Finland', 358, 1),
(75, 'FR', 'France', 33, 1),
(76, 'GF', 'French Guiana', 594, 1),
(77, 'PF', 'French Polynesia', 689, 1),
(78, 'TF', 'French Southern Territories', 0, 1),
(79, 'GA', 'Gabon', 241, 1),
(80, 'GM', 'Gambia The', 220, 1),
(81, 'GE', 'Georgia', 995, 1),
(82, 'DE', 'Germany', 49, 1),
(83, 'GH', 'Ghana', 233, 1),
(84, 'GI', 'Gibraltar', 350, 1),
(85, 'GR', 'Greece', 30, 1),
(86, 'GL', 'Greenland', 299, 1),
(87, 'GD', 'Grenada', 1473, 1),
(88, 'GP', 'Guadeloupe', 590, 1),
(89, 'GU', 'Guam', 1671, 1),
(90, 'GT', 'Guatemala', 502, 1),
(91, 'XU', 'Guernsey and Alderney', 44, 1),
(92, 'GN', 'Guinea', 224, 1),
(93, 'GW', 'Guinea-Bissau', 245, 1),
(94, 'GY', 'Guyana', 592, 1),
(95, 'HT', 'Haiti', 509, 1),
(96, 'HM', 'Heard and McDonald Islands', 0, 1),
(97, 'HN', 'Honduras', 504, 1),
(98, 'HK', 'Hong Kong S.A.R.', 852, 1),
(99, 'HU', 'Hungary', 36, 1),
(100, 'IS', 'Iceland', 354, 1),
(101, 'IN', 'India', 91, 1),
(102, 'ID', 'Indonesia', 62, 1),
(103, 'IR', 'Iran', 98, 1),
(104, 'IQ', 'Iraq', 964, 1),
(105, 'IE', 'Ireland', 353, 1),
(106, 'IL', 'Israel', 972, 1),
(107, 'IT', 'Italy', 39, 1),
(108, 'JM', 'Jamaica', 1876, 1),
(109, 'JP', 'Japan', 81, 1),
(110, 'XJ', 'Jersey', 44, 1),
(111, 'JO', 'Jordan', 962, 1),
(112, 'KZ', 'Kazakhstan', 7, 1),
(113, 'KE', 'Kenya', 254, 1),
(114, 'KI', 'Kiribati', 686, 1),
(115, 'KP', 'Korea North', 850, 1),
(116, 'KR', 'Korea South', 82, 1),
(117, 'KW', 'Kuwait', 965, 1),
(118, 'KG', 'Kyrgyzstan', 996, 1),
(119, 'LA', 'Laos', 856, 1),
(120, 'LV', 'Latvia', 371, 1),
(121, 'LB', 'Lebanon', 961, 1),
(122, 'LS', 'Lesotho', 266, 1),
(123, 'LR', 'Liberia', 231, 1),
(124, 'LY', 'Libya', 218, 1),
(125, 'LI', 'Liechtenstein', 423, 1),
(126, 'LT', 'Lithuania', 370, 1),
(127, 'LU', 'Luxembourg', 352, 1),
(128, 'MO', 'Macau S.A.R.', 853, 1),
(129, 'MK', 'Macedonia', 389, 1),
(130, 'MG', 'Madagascar', 261, 1),
(131, 'MW', 'Malawi', 265, 1),
(132, 'MY', 'Malaysia', 60, 1),
(133, 'MV', 'Maldives', 960, 1),
(134, 'ML', 'Mali', 223, 1),
(135, 'MT', 'Malta', 356, 1),
(136, 'XM', 'Man (Isle of)', 44, 1),
(137, 'MH', 'Marshall Islands', 692, 1),
(138, 'MQ', 'Martinique', 596, 1),
(139, 'MR', 'Mauritania', 222, 1),
(140, 'MU', 'Mauritius', 230, 1),
(141, 'YT', 'Mayotte', 269, 1),
(142, 'MX', 'Mexico', 52, 1),
(143, 'FM', 'Micronesia', 691, 1),
(144, 'MD', 'Moldova', 373, 1),
(145, 'MC', 'Monaco', 377, 1),
(146, 'MN', 'Mongolia', 976, 1),
(147, 'MS', 'Montserrat', 1664, 1),
(148, 'MA', 'Morocco', 212, 1),
(149, 'MZ', 'Mozambique', 258, 1),
(150, 'MM', 'Myanmar', 95, 1),
(151, 'NA', 'Namibia', 264, 1),
(152, 'NR', 'Nauru', 674, 1),
(153, 'NP', 'Nepal', 977, 1),
(154, 'AN', 'Netherlands Antilles', 599, 1),
(155, 'NL', 'Netherlands The', 31, 1),
(156, 'NC', 'New Caledonia', 687, 1),
(157, 'NZ', 'New Zealand', 64, 1),
(158, 'NI', 'Nicaragua', 505, 1),
(159, 'NE', 'Niger', 227, 1),
(160, 'NG', 'Nigeria', 234, 1),
(161, 'NU', 'Niue', 683, 1),
(162, 'NF', 'Norfolk Island', 672, 1),
(163, 'MP', 'Northern Mariana Islands', 1670, 1),
(164, 'NO', 'Norway', 47, 1),
(165, 'OM', 'Oman', 968, 1),
(166, 'PK', 'Pakistan', 92, 1),
(167, 'PW', 'Palau', 680, 1),
(168, 'PS', 'Palestinian Territory Occupied', 970, 1),
(169, 'PA', 'Panama', 507, 1),
(170, 'PG', 'Papua new Guinea', 675, 1),
(171, 'PY', 'Paraguay', 595, 1),
(172, 'PE', 'Peru', 51, 1),
(173, 'PH', 'Philippines', 63, 1),
(174, 'PN', 'Pitcairn Island', 0, 1),
(175, 'PL', 'Poland', 48, 1),
(176, 'PT', 'Portugal', 351, 1),
(177, 'PR', 'Puerto Rico', 1787, 1),
(178, 'QA', 'Qatar', 974, 1),
(179, 'RE', 'Reunion', 262, 1),
(180, 'RO', 'Romania', 40, 1),
(181, 'RU', 'Russia', 70, 1),
(182, 'RW', 'Rwanda', 250, 1),
(183, 'SH', 'Saint Helena', 290, 1),
(184, 'KN', 'Saint Kitts And Nevis', 1869, 1),
(185, 'LC', 'Saint Lucia', 1758, 1),
(186, 'PM', 'Saint Pierre and Miquelon', 508, 1),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784, 1),
(188, 'WS', 'Samoa', 684, 1),
(189, 'SM', 'San Marino', 378, 1),
(190, 'ST', 'Sao Tome and Principe', 239, 1),
(191, 'SA', 'Saudi Arabia', 966, 1),
(192, 'SN', 'Senegal', 221, 1),
(193, 'RS', 'Serbia', 381, 1),
(194, 'SC', 'Seychelles', 248, 1),
(195, 'SL', 'Sierra Leone', 232, 1),
(196, 'SG', 'Singapore', 65, 1),
(197, 'SK', 'Slovakia', 421, 1),
(198, 'SI', 'Slovenia', 386, 1),
(199, 'XG', 'Smaller Territories of the UK', 44, 1),
(200, 'SB', 'Solomon Islands', 677, 1),
(201, 'SO', 'Somalia', 252, 1),
(202, 'ZA', 'South Africa', 27, 1),
(203, 'GS', 'South Georgia', 0, 1),
(204, 'SS', 'South Sudan', 211, 1),
(205, 'ES', 'Spain', 34, 1),
(206, 'LK', 'Sri Lanka', 94, 1),
(207, 'SD', 'Sudan', 249, 1),
(208, 'SR', 'Suriname', 597, 1),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47, 1),
(210, 'SZ', 'Swaziland', 268, 1),
(211, 'SE', 'Sweden', 46, 1),
(212, 'CH', 'Switzerland', 41, 1),
(213, 'SY', 'Syria', 963, 1),
(214, 'TW', 'Taiwan', 886, 1),
(215, 'TJ', 'Tajikistan', 992, 1),
(216, 'TZ', 'Tanzania', 255, 1),
(217, 'TH', 'Thailand', 66, 1),
(218, 'TG', 'Togo', 228, 1),
(219, 'TK', 'Tokelau', 690, 1),
(220, 'TO', 'Tonga', 676, 1),
(221, 'TT', 'Trinidad And Tobago', 1868, 1),
(222, 'TN', 'Tunisia', 216, 1),
(223, 'TR', 'Turkey', 90, 1),
(224, 'TM', 'Turkmenistan', 7370, 1),
(225, 'TC', 'Turks And Caicos Islands', 1649, 1),
(226, 'TV', 'Tuvalu', 688, 1),
(227, 'UG', 'Uganda', 256, 1),
(228, 'UA', 'Ukraine', 380, 1),
(229, 'AE', 'United Arab Emirates', 971, 1),
(230, 'GB', 'United Kingdom', 44, 1),
(231, 'US', 'United States', 1, 1),
(232, 'UM', 'United States Minor Outlying Islands', 1, 1),
(233, 'UY', 'Uruguay', 598, 1),
(234, 'UZ', 'Uzbekistan', 998, 1),
(235, 'VU', 'Vanuatu', 678, 1),
(236, 'VA', 'Vatican City State (Holy See)', 39, 1),
(237, 'VE', 'Venezuela', 58, 1),
(238, 'VN', 'Vietnam', 84, 1),
(239, 'VG', 'Virgin Islands (British)', 1284, 1),
(240, 'VI', 'Virgin Islands (US)', 1340, 1),
(241, 'WF', 'Wallis And Futuna Islands', 681, 1),
(242, 'EH', 'Western Sahara', 212, 1),
(243, 'YE', 'Yemen', 967, 1),
(244, 'YU', 'Yugoslavia', 38, 1),
(245, 'ZM', 'Zambia', 260, 1),
(246, 'ZW', 'Zimbabwe', 263, 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `iso` char(3) NOT NULL DEFAULT '',
  `iso3` char(3) DEFAULT NULL,
  `iso_numeric` int(10) DEFAULT NULL,
  `fips` char(3) DEFAULT NULL,
  `country` varchar(155) DEFAULT NULL,
  `capital` varchar(155) DEFAULT NULL,
  `area` int(10) DEFAULT NULL,
  `population` int(10) DEFAULT NULL,
  `continent` char(3) DEFAULT NULL,
  `tld` char(6) DEFAULT NULL,
  `currency_code` char(3) DEFAULT NULL,
  `currency_name` varchar(155) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `languages` varchar(125) DEFAULT NULL,
  `geonameid` int(10) DEFAULT NULL,
  `neighbours` varchar(125) DEFAULT NULL,
  `equivalent_fips_code` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `iso3`, `iso_numeric`, `fips`, `country`, `capital`, `area`, `population`, `continent`, `tld`, `currency_code`, `currency_name`, `phone`, `languages`, `geonameid`, `neighbours`, `equivalent_fips_code`) VALUES
(1, 'AD', 'AND', 20, 'AN', 'Andorra', 'Andorra la Vella', 468, 84000, 'EU', '.ad', 'EUR', 'Euro', 376, 'ca', 3041565, 'ES,FR', ''),
(2, 'AE', 'ARE', 784, 'AE', 'United Arab Emirates', 'Abu Dhabi', 82880, 4975593, 'AS', '.ae', 'AED', 'Dirham', 971, 'ar-AE,fa,en,hi,ur', 290557, 'SA,OM', ''),
(3, 'AF', 'AFG', 4, 'AF', 'Afghanistan', 'Kabul', 647500, 29121286, 'AS', '.af', 'AFN', 'Afghani', 93, 'fa-AF,ps,uz-AF,tk', 1149361, 'TM,CN,IR,TJ,PK,UZ', ''),
(4, 'AG', 'ATG', 28, 'AC', 'Antigua and Barbuda', 'St. John\'s', 443, 86754, 'NA', '.ag', 'XCD', 'Dollar', 1, 'en-AG', 3576396, '', ''),
(5, 'AI', 'AIA', 660, 'AV', 'Anguilla', 'The Valley', 102, 13254, 'NA', '.ai', 'XCD', 'Dollar', 1, 'en-AI', 3573511, '', ''),
(6, 'AL', 'ALB', 8, 'AL', 'Albania', 'Tirana', 28748, 2986952, 'EU', '.al', 'ALL', 'Lek', 355, 'sq,el', 783754, 'MK,GR,CS,ME,RS,XK', ''),
(7, 'AM', 'ARM', 51, 'AM', 'Armenia', 'Yerevan', 29800, 2968000, 'AS', '.am', 'AMD', 'Dram', 374, 'hy', 174982, 'GE,IR,AZ,TR', ''),
(8, 'AN', 'ANT', 530, 'NT', 'Netherlands Antilles', 'Willemstad', 960, 136197, 'NA', '.an', 'ANG', 'Guilder', 599, 'nl-AN,en,es', 0, 'GP', ''),
(9, 'AO', 'AGO', 24, 'AO', 'Angola', 'Luanda', 1246700, 13068161, 'AF', '.ao', 'AOA', 'Kwanza', 244, 'pt-AO', 3351879, 'CD,NA,ZM,CG', ''),
(10, 'AQ', 'ATA', 10, 'AY', 'Antarctica', '', 14000000, 0, 'AN', '.aq', '', '', 0, '', 6697173, '', ''),
(11, 'AR', 'ARG', 32, 'AR', 'Argentina', 'Buenos Aires', 2766890, 41343201, 'SA', '.ar', 'ARS', 'Peso', 54, 'es-AR,en,it,de,fr,gn', 3865483, 'CL,BO,UY,PY,BR', ''),
(12, 'AS', 'ASM', 16, 'AQ', 'American Samoa', 'Pago Pago', 199, 57881, 'OC', '.as', 'USD', 'Dollar', 1, 'en-AS,sm,to', 5880801, '', ''),
(13, 'AT', 'AUT', 40, 'AU', 'Austria', 'Vienna', 83858, 8205000, 'EU', '.at', 'EUR', 'Euro', 43, 'de-AT,hr,hu,sl', 2782113, 'CH,DE,HU,SK,CZ,IT,SI,LI', ''),
(14, 'AU', 'AUS', 36, 'AS', 'Australia', 'Canberra', 7686850, 21515754, 'OC', '.au', 'AUD', 'Dollar', 61, 'en-AU', 2077456, '', ''),
(15, 'AW', 'ABW', 533, 'AA', 'Aruba', 'Oranjestad', 193, 71566, 'NA', '.aw', 'AWG', 'Guilder', 297, 'nl-AW,es,en', 3577279, '', ''),
(16, 'AX', 'ALA', 248, '', 'Aland Islands', 'Mariehamn', 0, 26711, 'EU', '.ax', 'EUR', 'Euro', 358, 'sv-AX', 661882, '', 'FI'),
(17, 'AZ', 'AZE', 31, 'AJ', 'Azerbaijan', 'Baku', 86600, 8303512, 'AS', '.az', 'AZN', 'Manat', 994, 'az,ru,hy', 587116, 'GE,IR,AM,TR,RU', ''),
(18, 'BA', 'BIH', 70, 'BK', 'Bosnia and Herzegovina', 'Sarajevo', 51129, 4590000, 'EU', '.ba', 'BAM', 'Marka', 387, 'bs,hr-BA,sr-BA', 3277605, 'CS,HR,ME,RS', ''),
(19, 'BB', 'BRB', 52, 'BB', 'Barbados', 'Bridgetown', 431, 285653, 'NA', '.bb', 'BBD', 'Dollar', 1, 'en-BB', 3374084, '', ''),
(20, 'BD', 'BGD', 50, 'BG', 'Bangladesh', 'Dhaka', 144000, 156118464, 'AS', '.bd', 'BDT', 'Taka', 880, 'bn-BD,en', 1210997, 'MM,IN', ''),
(21, 'BE', 'BEL', 56, 'BE', 'Belgium', 'Brussels', 30510, 10403000, 'EU', '.be', 'EUR', 'Euro', 32, 'nl-BE,fr-BE,de-BE', 2802361, 'DE,NL,LU,FR', ''),
(22, 'BF', 'BFA', 854, 'UV', 'Burkina Faso', 'Ouagadougou', 274200, 16241811, 'AF', '.bf', 'XOF', 'Franc', 226, 'fr-BF', 2361809, 'NE,BJ,GH,CI,TG,ML', ''),
(23, 'BG', 'BGR', 100, 'BU', 'Bulgaria', 'Sofia', 110910, 7148785, 'EU', '.bg', 'BGN', 'Lev', 359, 'bg,tr-BG', 732800, 'MK,GR,RO,CS,TR,RS', ''),
(24, 'BH', 'BHR', 48, 'BA', 'Bahrain', 'Manama', 665, 738004, 'AS', '.bh', 'BHD', 'Dinar', 973, 'ar-BH,en,fa,ur', 290291, '', ''),
(25, 'BI', 'BDI', 108, 'BY', 'Burundi', 'Bujumbura', 27830, 9863117, 'AF', '.bi', 'BIF', 'Franc', 257, 'fr-BI,rn', 433561, 'TZ,CD,RW', ''),
(26, 'BJ', 'BEN', 204, 'BN', 'Benin', 'Porto-Novo', 112620, 9056010, 'AF', '.bj', 'XOF', 'Franc', 229, 'fr-BJ', 2395170, 'NE,TG,BF,NG', ''),
(27, 'BL', 'BLM', 652, 'TB', 'Saint Barthelemy', 'Gustavia', 21, 8450, 'NA', '.gp', 'EUR', 'Euro', 590, 'fr', 3578476, '', ''),
(28, 'BM', 'BMU', 60, 'BD', 'Bermuda', 'Hamilton', 53, 65365, 'NA', '.bm', 'BMD', 'Dollar', 1, 'en-BM,pt', 3573345, '', ''),
(29, 'BN', 'BRN', 96, 'BX', 'Brunei', 'Bandar Seri Begawan', 5770, 395027, 'AS', '.bn', 'BND', 'Dollar', 673, 'ms-BN,en-BN', 1820814, 'MY', ''),
(30, 'BO', 'BOL', 68, 'BL', 'Bolivia', 'Sucre', 1098580, 9947418, 'SA', '.bo', 'BOB', 'Boliviano', 591, 'es-BO,qu,ay', 3923057, 'PE,CL,PY,BR,AR', ''),
(31, 'BQ', 'BES', 535, '', 'Bonaire, Saint Eustatius and Saba ', '', 0, 18012, 'NA', '.bq', 'USD', 'Dollar', 599, 'nl,pap,en', 7626844, '', ''),
(32, 'BR', 'BRA', 76, 'BR', 'Brazil', 'Brasilia', 8511965, 201103330, 'SA', '.br', 'BRL', 'Real', 55, 'pt-BR,es,en,fr', 3469034, 'SR,PE,BO,UY,GY,PY,GF,VE,CO,AR', ''),
(33, 'BS', 'BHS', 44, 'BF', 'Bahamas', 'Nassau', 13940, 301790, 'NA', '.bs', 'BSD', 'Dollar', 1, 'en-BS', 3572887, '', ''),
(34, 'BT', 'BTN', 64, 'BT', 'Bhutan', 'Thimphu', 47000, 699847, 'AS', '.bt', 'BTN', 'Ngultrum', 975, 'dz', 1252634, 'CN,IN', ''),
(35, 'BV', 'BVT', 74, 'BV', 'Bouvet Island', '', 0, 0, 'AN', '.bv', 'NOK', 'Krone', 0, '', 3371123, '', ''),
(36, 'BW', 'BWA', 72, 'BC', 'Botswana', 'Gaborone', 600370, 2029307, 'AF', '.bw', 'BWP', 'Pula', 267, 'en-BW,tn-BW', 933860, 'ZW,ZA,NA', ''),
(37, 'BY', 'BLR', 112, 'BO', 'Belarus', 'Minsk', 207600, 9685000, 'EU', '.by', 'BYR', 'Ruble', 375, 'be,ru', 630336, 'PL,LT,UA,RU,LV', ''),
(38, 'BZ', 'BLZ', 84, 'BH', 'Belize', 'Belmopan', 22966, 314522, 'NA', '.bz', 'BZD', 'Dollar', 501, 'en-BZ,es', 3582678, 'GT,MX', ''),
(39, 'CA', 'CAN', 124, 'CA', 'Canada', 'Ottawa', 9984670, 33679000, 'NA', '.ca', 'CAD', 'Dollar', 1, 'en-CA,fr-CA,iu', 6251999, 'US', ''),
(40, 'CC', 'CCK', 166, 'CK', 'Cocos Islands', 'West Island', 14, 628, 'AS', '.cc', 'AUD', 'Dollar', 61, 'ms-CC,en', 1547376, '', ''),
(41, 'CD', 'COD', 180, 'CG', 'Democratic Republic of the Congo', 'Kinshasa', 2345410, 70916439, 'AF', '.cd', 'CDF', 'Franc', 243, 'fr-CD,ln,kg', 203312, 'TZ,CF,SS,RW,ZM,BI,UG,CG,AO', ''),
(42, 'CF', 'CAF', 140, 'CT', 'Central African Republic', 'Bangui', 622984, 4844927, 'AF', '.cf', 'XAF', 'Franc', 236, 'fr-CF,sg,ln,kg', 239880, 'TD,SD,CD,SS,CM,CG', ''),
(43, 'CG', 'COG', 178, 'CF', 'Republic of the Congo', 'Brazzaville', 342000, 3039126, 'AF', '.cg', 'XAF', 'Franc', 242, 'fr-CG,kg,ln-CG', 2260494, 'CF,GA,CD,CM,AO', ''),
(44, 'CH', 'CHE', 756, 'SZ', 'Switzerland', 'Berne', 41290, 7581000, 'EU', '.ch', 'CHF', 'Franc', 41, 'de-CH,fr-CH,it-CH,rm', 2658434, 'DE,IT,LI,FR,AT', ''),
(45, 'CI', 'CIV', 384, 'IV', 'Ivory Coast', 'Yamoussoukro', 322460, 21058798, 'AF', '.ci', 'XOF', 'Franc', 225, 'fr-CI', 2287781, 'LR,GH,GN,BF,ML', ''),
(46, 'CK', 'COK', 184, 'CW', 'Cook Islands', 'Avarua', 240, 21388, 'OC', '.ck', 'NZD', 'Dollar', 682, 'en-CK,mi', 1899402, '', ''),
(47, 'CL', 'CHL', 152, 'CI', 'Chile', 'Santiago', 756950, 16746491, 'SA', '.cl', 'CLP', 'Peso', 56, 'es-CL', 3895114, 'PE,BO,AR', ''),
(48, 'CM', 'CMR', 120, 'CM', 'Cameroon', 'Yaounde', 475440, 19294149, 'AF', '.cm', 'XAF', 'Franc', 237, 'en-CM,fr-CM', 2233387, 'TD,CF,GA,GQ,CG,NG', ''),
(49, 'CN', 'CHN', 156, 'CH', 'China', 'Beijing', 9596960, 1330044000, 'AS', '.cn', 'CNY', 'Yuan Renminbi', 86, 'zh-CN,yue,wuu,dta,ug,za', 1814991, 'LA,BT,TJ,KZ,MN,AF,NP,MM,KG,PK,KP,RU,VN,IN', ''),
(50, 'CO', 'COL', 170, 'CO', 'Colombia', 'Bogota', 1138910, 44205293, 'SA', '.co', 'COP', 'Peso', 57, 'es-CO', 3686110, 'EC,PE,PA,BR,VE', ''),
(51, 'CR', 'CRI', 188, 'CS', 'Costa Rica', 'San Jose', 51100, 4516220, 'NA', '.cr', 'CRC', 'Colon', 506, 'es-CR,en', 3624060, 'PA,NI', ''),
(52, 'CS', 'SCG', 891, 'YI', 'Serbia and Montenegro', 'Belgrade', 102350, 10829175, 'EU', '.cs', 'RSD', 'Dinar', 381, 'cu,hu,sq,sr', 0, 'AL,HU,MK,RO,HR,BA,BG', ''),
(53, 'CU', 'CUB', 192, 'CU', 'Cuba', 'Havana', 110860, 11423000, 'NA', '.cu', 'CUP', 'Peso', 53, 'es-CU', 3562981, 'US', ''),
(54, 'CV', 'CPV', 132, 'CV', 'Cape Verde', 'Praia', 4033, 508659, 'AF', '.cv', 'CVE', 'Escudo', 238, 'pt-CV', 3374766, '', ''),
(55, 'CW', 'CUW', 531, 'UC', 'Curacao', ' Willemstad', 0, 141766, 'NA', '.cw', 'ANG', 'Guilder', 599, 'nl,pap', 7626836, '', ''),
(56, 'CX', 'CXR', 162, 'KT', 'Christmas Island', 'Flying Fish Cove', 135, 1500, 'AS', '.cx', 'AUD', 'Dollar', 61, 'en,zh,ms-CC', 2078138, '', ''),
(57, 'CY', 'CYP', 196, 'CY', 'Cyprus', 'Nicosia', 9250, 1102677, 'EU', '.cy', 'EUR', 'Euro', 357, 'el-CY,tr-CY,en', 146669, '', ''),
(58, 'CZ', 'CZE', 203, 'EZ', 'Czech Republic', 'Prague', 78866, 10476000, 'EU', '.cz', 'CZK', 'Koruna', 420, 'cs,sk', 3077311, 'PL,DE,SK,AT', ''),
(59, 'DE', 'DEU', 276, 'GM', 'Germany', 'Berlin', 357021, 81802257, 'EU', '.de', 'EUR', 'Euro', 49, 'de', 2921044, 'CH,PL,NL,DK,BE,CZ,LU,FR,AT', ''),
(60, 'DJ', 'DJI', 262, 'DJ', 'Djibouti', 'Djibouti', 23000, 740528, 'AF', '.dj', 'DJF', 'Franc', 253, 'fr-DJ,ar,so-DJ,aa', 223816, 'ER,ET,SO', ''),
(61, 'DK', 'DNK', 208, 'DA', 'Denmark', 'Copenhagen', 43094, 5484000, 'EU', '.dk', 'DKK', 'Krone', 45, 'da-DK,en,fo,de-DK', 2623032, 'DE', ''),
(62, 'DM', 'DMA', 212, 'DO', 'Dominica', 'Roseau', 754, 72813, 'NA', '.dm', 'XCD', 'Dollar', 1, 'en-DM', 3575830, '', ''),
(63, 'DO', 'DOM', 214, 'DR', 'Dominican Republic', 'Santo Domingo', 48730, 9823821, 'NA', '.do', 'DOP', 'Peso', 1, 'es-DO', 3508796, 'HT', ''),
(64, 'DZ', 'DZA', 12, 'AG', 'Algeria', 'Algiers', 2381740, 34586184, 'AF', '.dz', 'DZD', 'Dinar', 213, 'ar-DZ', 2589581, 'NE,EH,LY,MR,TN,MA,ML', ''),
(65, 'EC', 'ECU', 218, 'EC', 'Ecuador', 'Quito', 283560, 14790608, 'SA', '.ec', 'USD', 'Dollar', 593, 'es-EC', 3658394, 'PE,CO', ''),
(66, 'EE', 'EST', 233, 'EN', 'Estonia', 'Tallinn', 45226, 1291170, 'EU', '.ee', 'EUR', 'Euro', 372, 'et,ru', 453733, 'RU,LV', ''),
(67, 'EG', 'EGY', 818, 'EG', 'Egypt', 'Cairo', 1001450, 80471869, 'AF', '.eg', 'EGP', 'Pound', 20, 'ar-EG,en,fr', 357994, 'LY,SD,IL', ''),
(68, 'EH', 'ESH', 732, 'WI', 'Western Sahara', 'El-Aaiun', 266000, 273008, 'AF', '.eh', 'MAD', 'Dirham', 212, 'ar,mey', 2461445, 'DZ,MR,MA', ''),
(69, 'ER', 'ERI', 232, 'ER', 'Eritrea', 'Asmara', 121320, 5792984, 'AF', '.er', 'ERN', 'Nakfa', 291, 'aa-ER,ar,tig,kun,ti-ER', 338010, 'ET,SD,DJ', ''),
(70, 'ES', 'ESP', 724, 'SP', 'Spain', 'Madrid', 504782, 46505963, 'EU', '.es', 'EUR', 'Euro', 34, 'es-ES,ca,gl,eu,oc', 2510769, 'AD,PT,GI,FR,MA', ''),
(71, 'ET', 'ETH', 231, 'ET', 'Ethiopia', 'Addis Ababa', 1127127, 88013491, 'AF', '.et', 'ETB', 'Birr', 251, 'am,en-ET,om-ET,ti-ET,so-ET,sid', 337996, 'ER,KE,SD,SS,SO,DJ', ''),
(72, 'FI', 'FIN', 246, 'FI', 'Finland', 'Helsinki', 337030, 5244000, 'EU', '.fi', 'EUR', 'Euro', 358, 'fi-FI,sv-FI,smn', 660013, 'NO,RU,SE', ''),
(73, 'FJ', 'FJI', 242, 'FJ', 'Fiji', 'Suva', 18270, 875983, 'OC', '.fj', 'FJD', 'Dollar', 679, 'en-FJ,fj', 2205218, '', ''),
(74, 'FK', 'FLK', 238, 'FK', 'Falkland Islands', 'Stanley', 12173, 2638, 'SA', '.fk', 'FKP', 'Pound', 500, 'en-FK', 3474414, '', ''),
(75, 'FM', 'FSM', 583, 'FM', 'Micronesia', 'Palikir', 702, 107708, 'OC', '.fm', 'USD', 'Dollar', 691, 'en-FM,chk,pon,yap,kos,uli,woe,nkr,kpg', 2081918, '', ''),
(76, 'FO', 'FRO', 234, 'FO', 'Faroe Islands', 'Torshavn', 1399, 48228, 'EU', '.fo', 'DKK', 'Krone', 298, 'fo,da-FO', 2622320, '', ''),
(77, 'FR', 'FRA', 250, 'FR', 'France', 'Paris', 547030, 64768389, 'EU', '.fr', 'EUR', 'Euro', 33, 'fr-FR,frp,br,co,ca,eu,oc', 3017382, 'CH,DE,BE,LU,IT,AD,MC,ES', ''),
(78, 'GA', 'GAB', 266, 'GB', 'Gabon', 'Libreville', 267667, 1545255, 'AF', '.ga', 'XAF', 'Franc', 241, 'fr-GA', 2400553, 'CM,GQ,CG', ''),
(79, 'GB', 'GBR', 826, 'UK', 'United Kingdom', 'London', 244820, 62348447, 'EU', '.uk', 'GBP', 'Pound', 44, 'en-GB,cy-GB,gd', 2635167, 'IE', ''),
(80, 'GD', 'GRD', 308, 'GJ', 'Grenada', 'St. George\'s', 344, 107818, 'NA', '.gd', 'XCD', 'Dollar', 1, 'en-GD', 3580239, '', ''),
(81, 'GE', 'GEO', 268, 'GG', 'Georgia', 'Tbilisi', 69700, 4630000, 'AS', '.ge', 'GEL', 'Lari', 995, 'ka,ru,hy,az', 614540, 'AM,AZ,TR,RU', ''),
(82, 'GF', 'GUF', 254, 'FG', 'French Guiana', 'Cayenne', 91000, 195506, 'SA', '.gf', 'EUR', 'Euro', 594, 'fr-GF', 3381670, 'SR,BR', ''),
(83, 'GG', 'GGY', 831, 'GK', 'Guernsey', 'St Peter Port', 78, 65228, 'EU', '.gg', 'GBP', 'Pound', 44, 'en,fr', 3042362, '', ''),
(84, 'GH', 'GHA', 288, 'GH', 'Ghana', 'Accra', 239460, 24339838, 'AF', '.gh', 'GHS', 'Cedi', 233, 'en-GH,ak,ee,tw', 2300660, 'CI,TG,BF', ''),
(85, 'GI', 'GIB', 292, 'GI', 'Gibraltar', 'Gibraltar', 7, 27884, 'EU', '.gi', 'GIP', 'Pound', 350, 'en-GI,es,it,pt', 2411586, 'ES', ''),
(86, 'GL', 'GRL', 304, 'GL', 'Greenland', 'Nuuk', 2166086, 56375, 'NA', '.gl', 'DKK', 'Krone', 299, 'kl,da-GL,en', 3425505, '', ''),
(87, 'GM', 'GMB', 270, 'GA', 'Gambia', 'Banjul', 11300, 1593256, 'AF', '.gm', 'GMD', 'Dalasi', 220, 'en-GM,mnk,wof,wo,ff', 2413451, 'SN', ''),
(88, 'GN', 'GIN', 324, 'GV', 'Guinea', 'Conakry', 245857, 10324025, 'AF', '.gn', 'GNF', 'Franc', 224, 'fr-GN', 2420477, 'LR,SN,SL,CI,GW,ML', ''),
(89, 'GP', 'GLP', 312, 'GP', 'Guadeloupe', 'Basse-Terre', 1780, 443000, 'NA', '.gp', 'EUR', 'Euro', 590, 'fr-GP', 3579143, 'AN', ''),
(90, 'GQ', 'GNQ', 226, 'EK', 'Equatorial Guinea', 'Malabo', 28051, 1014999, 'AF', '.gq', 'XAF', 'Franc', 240, 'es-GQ,fr', 2309096, 'GA,CM', ''),
(91, 'GR', 'GRC', 300, 'GR', 'Greece', 'Athens', 131940, 11000000, 'EU', '.gr', 'EUR', 'Euro', 30, 'el-GR,en,fr', 390903, 'AL,MK,TR,BG', ''),
(92, 'GS', 'SGS', 239, 'SX', 'South Georgia and the South Sandwich Islands', 'Grytviken', 3903, 30, 'AN', '.gs', 'GBP', 'Pound', 0, 'en', 3474415, '', ''),
(93, 'GT', 'GTM', 320, 'GT', 'Guatemala', 'Guatemala City', 108890, 13550440, 'NA', '.gt', 'GTQ', 'Quetzal', 502, 'es-GT', 3595528, 'MX,HN,BZ,SV', ''),
(94, 'GU', 'GUM', 316, 'GQ', 'Guam', 'Hagatna', 549, 159358, 'OC', '.gu', 'USD', 'Dollar', 1, 'en-GU,ch-GU', 4043988, '', ''),
(95, 'GW', 'GNB', 624, 'PU', 'Guinea-Bissau', 'Bissau', 36120, 1565126, 'AF', '.gw', 'XOF', 'Franc', 245, 'pt-GW,pov', 2372248, 'SN,GN', ''),
(96, 'GY', 'GUY', 328, 'GY', 'Guyana', 'Georgetown', 214970, 748486, 'SA', '.gy', 'GYD', 'Dollar', 592, 'en-GY', 3378535, 'SR,BR,VE', ''),
(97, 'HK', 'HKG', 344, 'HK', 'Hong Kong', 'Hong Kong', 1092, 6898686, 'AS', '.hk', 'HKD', 'Dollar', 852, 'zh-HK,yue,zh,en', 1819730, '', ''),
(98, 'HM', 'HMD', 334, 'HM', 'Heard Island and McDonald Islands', '', 412, 0, 'AN', '.hm', 'AUD', 'Dollar', 0, '', 1547314, '', ''),
(99, 'HN', 'HND', 340, 'HO', 'Honduras', 'Tegucigalpa', 112090, 7989415, 'NA', '.hn', 'HNL', 'Lempira', 504, 'es-HN', 3608932, 'GT,NI,SV', ''),
(100, 'HR', 'HRV', 191, 'HR', 'Croatia', 'Zagreb', 56542, 4491000, 'EU', '.hr', 'HRK', 'Kuna', 385, 'hr-HR,sr', 3202326, 'HU,SI,CS,BA,ME,RS', ''),
(101, 'HT', 'HTI', 332, 'HA', 'Haiti', 'Port-au-Prince', 27750, 9648924, 'NA', '.ht', 'HTG', 'Gourde', 509, 'ht,fr-HT', 3723988, 'DO', ''),
(102, 'HU', 'HUN', 348, 'HU', 'Hungary', 'Budapest', 93030, 9982000, 'EU', '.hu', 'HUF', 'Forint', 36, 'hu-HU', 719819, 'SK,SI,RO,UA,CS,HR,AT,RS', ''),
(103, 'ID', 'IDN', 360, 'ID', 'Indonesia', 'Jakarta', 1919440, 242968342, 'AS', '.id', 'IDR', 'Rupiah', 62, 'id,en,nl,jv', 1643084, 'PG,TL,MY', ''),
(104, 'IE', 'IRL', 372, 'EI', 'Ireland', 'Dublin', 70280, 4622917, 'EU', '.ie', 'EUR', 'Euro', 353, 'en-IE,ga-IE', 2963597, 'GB', ''),
(105, 'IL', 'ISR', 376, 'IS', 'Israel', 'Jerusalem', 20770, 7353985, 'AS', '.il', 'ILS', 'Shekel', 972, 'he,ar-IL,en-IL,', 294640, 'SY,JO,LB,EG,PS', ''),
(106, 'IM', 'IMN', 833, 'IM', 'Isle of Man', 'Douglas, Isle of Man', 572, 75049, 'EU', '.im', 'GBP', 'Pound', 44, 'en,gv', 3042225, '', ''),
(107, 'IN', 'IND', 356, 'IN', 'India', 'New Delhi', 3287590, 1173108018, 'AS', '.in', 'INR', 'Rupee', 91, 'en-IN,hi,bn,te,mr,ta,ur,gu,kn,ml,or,pa,as,bh,sat,ks,ne,sd,kok,doi,mni,sit,sa,fr,lus,inc', 1269750, 'CN,NP,MM,BT,PK,BD', ''),
(108, 'IO', 'IOT', 86, 'IO', 'British Indian Ocean Territory', 'Diego Garcia', 60, 4000, 'AS', '.io', 'USD', 'Dollar', 246, 'en-IO', 1282588, '', ''),
(109, 'IQ', 'IRQ', 368, 'IZ', 'Iraq', 'Baghdad', 437072, 29671605, 'AS', '.iq', 'IQD', 'Dinar', 964, 'ar-IQ,ku,hy', 99237, 'SY,SA,IR,JO,TR,KW', ''),
(110, 'IR', 'IRN', 364, 'IR', 'Iran', 'Tehran', 1648000, 76923300, 'AS', '.ir', 'IRR', 'Rial', 98, 'fa-IR,ku', 130758, 'TM,AF,IQ,AM,PK,AZ,TR', ''),
(111, 'IS', 'ISL', 352, 'IC', 'Iceland', 'Reykjavik', 103000, 308910, 'EU', '.is', 'ISK', 'Krona', 354, 'is,en,de,da,sv,no', 2629691, '', ''),
(112, 'IT', 'ITA', 380, 'IT', 'Italy', 'Rome', 301230, 60340328, 'EU', '.it', 'EUR', 'Euro', 39, 'it-IT,de-IT,fr-IT,sc,ca,co,sl', 3175395, 'CH,VA,SI,SM,FR,AT', ''),
(113, 'JE', 'JEY', 832, 'JE', 'Jersey', 'Saint Helier', 116, 90812, 'EU', '.je', 'GBP', 'Pound', 44, 'en,pt', 3042142, '', ''),
(114, 'JM', 'JAM', 388, 'JM', 'Jamaica', 'Kingston', 10991, 2847232, 'NA', '.jm', 'JMD', 'Dollar', 1, 'en-JM', 3489940, '', ''),
(115, 'JO', 'JOR', 400, 'JO', 'Jordan', 'Amman', 92300, 6407085, 'AS', '.jo', 'JOD', 'Dinar', 962, 'ar-JO,en', 248816, 'SY,SA,IQ,IL,PS', ''),
(116, 'JP', 'JPN', 392, 'JA', 'Japan', 'Tokyo', 377835, 127288000, 'AS', '.jp', 'JPY', 'Yen', 81, 'ja', 1861060, '', ''),
(117, 'KE', 'KEN', 404, 'KE', 'Kenya', 'Nairobi', 582650, 40046566, 'AF', '.ke', 'KES', 'Shilling', 254, 'en-KE,sw-KE', 192950, 'ET,TZ,SS,SO,UG', ''),
(118, 'KG', 'KGZ', 417, 'KG', 'Kyrgyzstan', 'Bishkek', 198500, 5508626, 'AS', '.kg', 'KGS', 'Som', 996, 'ky,uz,ru', 1527747, 'CN,TJ,UZ,KZ', ''),
(119, 'KH', 'KHM', 116, 'CB', 'Cambodia', 'Phnom Penh', 181040, 14453680, 'AS', '.kh', 'KHR', 'Riels', 855, 'km,fr,en', 1831722, 'LA,TH,VN', ''),
(120, 'KI', 'KIR', 296, 'KR', 'Kiribati', 'Tarawa', 811, 92533, 'OC', '.ki', 'AUD', 'Dollar', 686, 'en-KI,gil', 4030945, '', ''),
(121, 'KM', 'COM', 174, 'CN', 'Comoros', 'Moroni', 2170, 773407, 'AF', '.km', 'KMF', 'Franc', 269, 'ar,fr-KM', 921929, '', ''),
(122, 'KN', 'KNA', 659, 'SC', 'Saint Kitts and Nevis', 'Basseterre', 261, 51134, 'NA', '.kn', 'XCD', 'Dollar', 1, 'en-KN', 3575174, '', ''),
(123, 'KP', 'PRK', 408, 'KN', 'North Korea', 'Pyongyang', 120540, 22912177, 'AS', '.kp', 'KPW', 'Won', 850, 'ko-KP', 1873107, 'CN,KR,RU', ''),
(124, 'KR', 'KOR', 410, 'KS', 'South Korea', 'Seoul', 98480, 48422644, 'AS', '.kr', 'KRW', 'Won', 82, 'ko-KR,en', 1835841, 'KP', ''),
(125, 'KW', 'KWT', 414, 'KU', 'Kuwait', 'Kuwait City', 17820, 2789132, 'AS', '.kw', 'KWD', 'Dinar', 965, 'ar-KW,en', 285570, 'SA,IQ', ''),
(126, 'KY', 'CYM', 136, 'CJ', 'Cayman Islands', 'George Town', 262, 44270, 'NA', '.ky', 'KYD', 'Dollar', 1, 'en-KY', 3580718, '', ''),
(127, 'KZ', 'KAZ', 398, 'KZ', 'Kazakhstan', 'Astana', 2717300, 15340000, 'AS', '.kz', 'KZT', 'Tenge', 7, 'kk,ru', 1522867, 'TM,CN,KG,UZ,RU', ''),
(128, 'LA', 'LAO', 418, 'LA', 'Laos', 'Vientiane', 236800, 6368162, 'AS', '.la', 'LAK', 'Kip', 856, 'lo,fr,en', 1655842, 'CN,MM,KH,TH,VN', ''),
(129, 'LB', 'LBN', 422, 'LE', 'Lebanon', 'Beirut', 10400, 4125247, 'AS', '.lb', 'LBP', 'Pound', 961, 'ar-LB,fr-LB,en,hy', 272103, 'SY,IL', ''),
(130, 'LC', 'LCA', 662, 'ST', 'Saint Lucia', 'Castries', 616, 160922, 'NA', '.lc', 'XCD', 'Dollar', 1, 'en-LC', 3576468, '', ''),
(131, 'LI', 'LIE', 438, 'LS', 'Liechtenstein', 'Vaduz', 160, 35000, 'EU', '.li', 'CHF', 'Franc', 423, 'de-LI', 3042058, 'CH,AT', ''),
(132, 'LK', 'LKA', 144, 'CE', 'Sri Lanka', 'Colombo', 65610, 21513990, 'AS', '.lk', 'LKR', 'Rupee', 94, 'si,ta,en', 1227603, '', ''),
(133, 'LR', 'LBR', 430, 'LI', 'Liberia', 'Monrovia', 111370, 3685076, 'AF', '.lr', 'LRD', 'Dollar', 231, 'en-LR', 2275384, 'SL,CI,GN', ''),
(134, 'LS', 'LSO', 426, 'LT', 'Lesotho', 'Maseru', 30355, 1919552, 'AF', '.ls', 'LSL', 'Loti', 266, 'en-LS,st,zu,xh', 932692, 'ZA', ''),
(135, 'LT', 'LTU', 440, 'LH', 'Lithuania', 'Vilnius', 65200, 3565000, 'EU', '.lt', 'LTL', 'Litas', 370, 'lt,ru,pl', 597427, 'PL,BY,RU,LV', ''),
(136, 'LU', 'LUX', 442, 'LU', 'Luxembourg', 'Luxembourg', 2586, 497538, 'EU', '.lu', 'EUR', 'Euro', 352, 'lb,de-LU,fr-LU', 2960313, 'DE,BE,FR', ''),
(137, 'LV', 'LVA', 428, 'LG', 'Latvia', 'Riga', 64589, 2217969, 'EU', '.lv', 'EUR', 'Euro', 371, 'lv,ru,lt', 458258, 'LT,EE,BY,RU', ''),
(138, 'LY', 'LBY', 434, 'LY', 'Libya', 'Tripolis', 1759540, 6461454, 'AF', '.ly', 'LYD', 'Dinar', 218, 'ar-LY,it,en', 2215636, 'TD,NE,DZ,SD,TN,EG', ''),
(139, 'MA', 'MAR', 504, 'MO', 'Morocco', 'Rabat', 446550, 31627428, 'AF', '.ma', 'MAD', 'Dirham', 212, 'ar-MA,fr', 2542007, 'DZ,EH,ES', ''),
(140, 'MC', 'MCO', 492, 'MN', 'Monaco', 'Monaco', 2, 32965, 'EU', '.mc', 'EUR', 'Euro', 377, 'fr-MC,en,it', 2993457, 'FR', ''),
(141, 'MD', 'MDA', 498, 'MD', 'Moldova', 'Chisinau', 33843, 4324000, 'EU', '.md', 'MDL', 'Leu', 373, 'ro,ru,gag,tr', 617790, 'RO,UA', ''),
(142, 'ME', 'MNE', 499, 'MJ', 'Montenegro', 'Podgorica', 14026, 666730, 'EU', '.me', 'EUR', 'Euro', 382, 'sr,hu,bs,sq,hr,rom', 3194884, 'AL,HR,BA,RS,XK', ''),
(143, 'MF', 'MAF', 663, 'RN', 'Saint Martin', 'Marigot', 53, 35925, 'NA', '.gp', 'EUR', 'Euro', 590, 'fr', 3578421, 'SX', ''),
(144, 'MG', 'MDG', 450, 'MA', 'Madagascar', 'Antananarivo', 587040, 21281844, 'AF', '.mg', 'MGA', 'Ariary', 261, 'fr-MG,mg', 1062947, '', ''),
(145, 'MH', 'MHL', 584, 'RM', 'Marshall Islands', 'Majuro', 181, 65859, 'OC', '.mh', 'USD', 'Dollar', 692, 'mh,en-MH', 2080185, '', ''),
(146, 'MK', 'MKD', 807, 'MK', 'Macedonia', 'Skopje', 25333, 2062294, 'EU', '.mk', 'MKD', 'Denar', 389, 'mk,sq,tr,rmm,sr', 718075, 'AL,GR,CS,BG,RS,XK', ''),
(147, 'ML', 'MLI', 466, 'ML', 'Mali', 'Bamako', 1240000, 13796354, 'AF', '.ml', 'XOF', 'Franc', 223, 'fr-ML,bm', 2453866, 'SN,NE,DZ,CI,GN,MR,BF', ''),
(148, 'MM', 'MMR', 104, 'BM', 'Myanmar', 'Nay Pyi Taw', 678500, 53414374, 'AS', '.mm', 'MMK', 'Kyat', 95, 'my', 1327865, 'CN,LA,TH,BD,IN', ''),
(149, 'MN', 'MNG', 496, 'MG', 'Mongolia', 'Ulan Bator', 1565000, 3086918, 'AS', '.mn', 'MNT', 'Tugrik', 976, 'mn,ru', 2029969, 'CN,RU', ''),
(150, 'MO', 'MAC', 446, 'MC', 'Macao', 'Macao', 254, 449198, 'AS', '.mo', 'MOP', 'Pataca', 853, 'zh,zh-MO,pt', 1821275, '', ''),
(151, 'MP', 'MNP', 580, 'CQ', 'Northern Mariana Islands', 'Saipan', 477, 53883, 'OC', '.mp', 'USD', 'Dollar', 1, 'fil,tl,zh,ch-MP,en-MP', 4041468, '', ''),
(152, 'MQ', 'MTQ', 474, 'MB', 'Martinique', 'Fort-de-France', 1100, 432900, 'NA', '.mq', 'EUR', 'Euro', 596, 'fr-MQ', 3570311, '', ''),
(153, 'MR', 'MRT', 478, 'MR', 'Mauritania', 'Nouakchott', 1030700, 3205060, 'AF', '.mr', 'MRO', 'Ouguiya', 222, 'ar-MR,fuc,snk,fr,mey,wo', 2378080, 'SN,DZ,EH,ML', ''),
(154, 'MS', 'MSR', 500, 'MH', 'Montserrat', 'Plymouth', 102, 9341, 'NA', '.ms', 'XCD', 'Dollar', 1, 'en-MS', 3578097, '', ''),
(155, 'MT', 'MLT', 470, 'MT', 'Malta', 'Valletta', 316, 403000, 'EU', '.mt', 'EUR', 'Euro', 356, 'mt,en-MT', 2562770, '', ''),
(156, 'MU', 'MUS', 480, 'MP', 'Mauritius', 'Port Louis', 2040, 1294104, 'AF', '.mu', 'MUR', 'Rupee', 230, 'en-MU,bho,fr', 934292, '', ''),
(157, 'MV', 'MDV', 462, 'MV', 'Maldives', 'Male', 300, 395650, 'AS', '.mv', 'MVR', 'Rufiyaa', 960, 'dv,en', 1282028, '', ''),
(158, 'MW', 'MWI', 454, 'MI', 'Malawi', 'Lilongwe', 118480, 15447500, 'AF', '.mw', 'MWK', 'Kwacha', 265, 'ny,yao,tum,swk', 927384, 'TZ,MZ,ZM', ''),
(159, 'MX', 'MEX', 484, 'MX', 'Mexico', 'Mexico City', 1972550, 112468855, 'NA', '.mx', 'MXN', 'Peso', 52, 'es-MX', 3996063, 'GT,US,BZ', ''),
(160, 'MY', 'MYS', 458, 'MY', 'Malaysia', 'Kuala Lumpur', 329750, 28274729, 'AS', '.my', 'MYR', 'Ringgit', 60, 'ms-MY,en,zh,ta,te,ml,pa,th', 1733045, 'BN,TH,ID', ''),
(161, 'MZ', 'MOZ', 508, 'MZ', 'Mozambique', 'Maputo', 801590, 22061451, 'AF', '.mz', 'MZN', 'Metical', 258, 'pt-MZ,vmw', 1036973, 'ZW,TZ,SZ,ZA,ZM,MW', ''),
(162, 'NA', 'NAM', 516, 'WA', 'Namibia', 'Windhoek', 825418, 2128471, 'AF', '.na', 'NAD', 'Dollar', 264, 'en-NA,af,de,hz,naq', 3355338, 'ZA,BW,ZM,AO', ''),
(163, 'NC', 'NCL', 540, 'NC', 'New Caledonia', 'Noumea', 19060, 216494, 'OC', '.nc', 'XPF', 'Franc', 687, 'fr-NC', 2139685, '', ''),
(164, 'NE', 'NER', 562, 'NG', 'Niger', 'Niamey', 1267000, 15878271, 'AF', '.ne', 'XOF', 'Franc', 227, 'fr-NE,ha,kr,dje', 2440476, 'TD,BJ,DZ,LY,BF,NG,ML', ''),
(165, 'NF', 'NFK', 574, 'NF', 'Norfolk Island', 'Kingston', 35, 1828, 'OC', '.nf', 'AUD', 'Dollar', 672, 'en-NF', 2155115, '', ''),
(166, 'NG', 'NGA', 566, 'NI', 'Nigeria', 'Abuja', 923768, 154000000, 'AF', '.ng', 'NGN', 'Naira', 234, 'en-NG,ha,yo,ig,ff', 2328926, 'TD,NE,BJ,CM', ''),
(167, 'NI', 'NIC', 558, 'NU', 'Nicaragua', 'Managua', 129494, 5995928, 'NA', '.ni', 'NIO', 'Cordoba', 505, 'es-NI,en', 3617476, 'CR,HN', ''),
(168, 'NL', 'NLD', 528, 'NL', 'Netherlands', 'Amsterdam', 41526, 16645000, 'EU', '.nl', 'EUR', 'Euro', 31, 'nl-NL,fy-NL', 2750405, 'DE,BE', ''),
(169, 'NO', 'NOR', 578, 'NO', 'Norway', 'Oslo', 324220, 5009150, 'EU', '.no', 'NOK', 'Krone', 47, 'no,nb,nn,se,fi', 3144096, 'FI,RU,SE', ''),
(170, 'NP', 'NPL', 524, 'NP', 'Nepal', 'Kathmandu', 140800, 28951852, 'AS', '.np', 'NPR', 'Rupee', 977, 'ne,en', 1282988, 'CN,IN', ''),
(171, 'NR', 'NRU', 520, 'NR', 'Nauru', 'Yaren', 21, 10065, 'OC', '.nr', 'AUD', 'Dollar', 674, 'na,en-NR', 2110425, '', ''),
(172, 'NU', 'NIU', 570, 'NE', 'Niue', 'Alofi', 260, 2166, 'OC', '.nu', 'NZD', 'Dollar', 683, 'niu,en-NU', 4036232, '', ''),
(173, 'NZ', 'NZL', 554, 'NZ', 'New Zealand', 'Wellington', 268680, 4252277, 'OC', '.nz', 'NZD', 'Dollar', 64, 'en-NZ,mi', 2186224, '', ''),
(174, 'OM', 'OMN', 512, 'MU', 'Oman', 'Muscat', 212460, 2967717, 'AS', '.om', 'OMR', 'Rial', 968, 'ar-OM,en,bal,ur', 286963, 'SA,YE,AE', ''),
(175, 'PA', 'PAN', 591, 'PM', 'Panama', 'Panama City', 78200, 3410676, 'NA', '.pa', 'PAB', 'Balboa', 507, 'es-PA,en', 3703430, 'CR,CO', ''),
(176, 'PE', 'PER', 604, 'PE', 'Peru', 'Lima', 1285220, 29907003, 'SA', '.pe', 'PEN', 'Sol', 51, 'es-PE,qu,ay', 3932488, 'EC,CL,BO,BR,CO', ''),
(177, 'PF', 'PYF', 258, 'FP', 'French Polynesia', 'Papeete', 4167, 270485, 'OC', '.pf', 'XPF', 'Franc', 689, 'fr-PF,ty', 4030656, '', ''),
(178, 'PG', 'PNG', 598, 'PP', 'Papua New Guinea', 'Port Moresby', 462840, 6064515, 'OC', '.pg', 'PGK', 'Kina', 675, 'en-PG,ho,meu,tpi', 2088628, 'ID', ''),
(179, 'PH', 'PHL', 608, 'RP', 'Philippines', 'Manila', 300000, 99900177, 'AS', '.ph', 'PHP', 'Peso', 63, 'tl,en-PH,fil', 1694008, '', ''),
(180, 'PK', 'PAK', 586, 'PK', 'Pakistan', 'Islamabad', 803940, 184404791, 'AS', '.pk', 'PKR', 'Rupee', 92, 'ur-PK,en-PK,pa,sd,ps,brh', 1168579, 'CN,AF,IR,IN', ''),
(181, 'PL', 'POL', 616, 'PL', 'Poland', 'Warsaw', 312685, 38500000, 'EU', '.pl', 'PLN', 'Zloty', 48, 'pl', 798544, 'DE,LT,SK,CZ,BY,UA,RU', ''),
(182, 'PM', 'SPM', 666, 'SB', 'Saint Pierre and Miquelon', 'Saint-Pierre', 242, 7012, 'NA', '.pm', 'EUR', 'Euro', 508, 'fr-PM', 3424932, '', ''),
(183, 'PN', 'PCN', 612, 'PC', 'Pitcairn', 'Adamstown', 47, 46, 'OC', '.pn', 'NZD', 'Dollar', 870, 'en-PN', 4030699, '', ''),
(184, 'PR', 'PRI', 630, 'RQ', 'Puerto Rico', 'San Juan', 9104, 3916632, 'NA', '.pr', 'USD', 'Dollar', 1, 'en-PR,es-PR', 4566966, '', ''),
(185, 'PS', 'PSE', 275, 'WE', 'Palestinian Territory', 'East Jerusalem', 5970, 3800000, 'AS', '.ps', 'ILS', 'Shekel', 970, 'ar-PS', 6254930, 'JO,IL', ''),
(186, 'PT', 'PRT', 620, 'PO', 'Portugal', 'Lisbon', 92391, 10676000, 'EU', '.pt', 'EUR', 'Euro', 351, 'pt-PT,mwl', 2264397, 'ES', ''),
(187, 'PW', 'PLW', 585, 'PS', 'Palau', 'Melekeok', 458, 19907, 'OC', '.pw', 'USD', 'Dollar', 680, 'pau,sov,en-PW,tox,ja,fil,zh', 1559582, '', ''),
(188, 'PY', 'PRY', 600, 'PA', 'Paraguay', 'Asuncion', 406750, 6375830, 'SA', '.py', 'PYG', 'Guarani', 595, 'es-PY,gn', 3437598, 'BO,BR,AR', ''),
(189, 'QA', 'QAT', 634, 'QA', 'Qatar', 'Doha', 11437, 840926, 'AS', '.qa', 'QAR', 'Rial', 974, 'ar-QA,es', 289688, 'SA', ''),
(190, 'RE', 'REU', 638, 'RE', 'Reunion', 'Saint-Denis', 2517, 776948, 'AF', '.re', 'EUR', 'Euro', 262, 'fr-RE', 935317, '', ''),
(191, 'RO', 'ROU', 642, 'RO', 'Romania', 'Bucharest', 237500, 21959278, 'EU', '.ro', 'RON', 'Leu', 40, 'ro,hu,rom', 798549, 'MD,HU,UA,CS,BG,RS', ''),
(192, 'RS', 'SRB', 688, 'RI', 'Serbia', 'Belgrade', 88361, 7344847, 'EU', '.rs', 'RSD', 'Dinar', 381, 'sr,hu,bs,rom', 6290252, 'AL,HU,MK,RO,HR,BA,BG,ME,XK', ''),
(193, 'RU', 'RUS', 643, 'RS', 'Russia', 'Moscow', 17100000, 140702000, 'EU', '.ru', 'RUB', 'Ruble', 7, 'ru,tt,xal,cau,ady,kv,ce,tyv,cv,udm,tut,mns,bua,myv,mdf,chm,ba,inh,tut,kbd,krc,ava,sah,nog', 2017370, 'GE,CN,BY,UA,KZ,LV,PL,EE,LT,FI,MN,NO,AZ,KP', ''),
(194, 'RW', 'RWA', 646, 'RW', 'Rwanda', 'Kigali', 26338, 11055976, 'AF', '.rw', 'RWF', 'Franc', 250, 'rw,en-RW,fr-RW,sw', 49518, 'TZ,CD,BI,UG', ''),
(195, 'SA', 'SAU', 682, 'SA', 'Saudi Arabia', 'Riyadh', 1960582, 25731776, 'AS', '.sa', 'SAR', 'Rial', 966, 'ar-SA', 102358, 'QA,OM,IQ,YE,JO,AE,KW', ''),
(196, 'SB', 'SLB', 90, 'BP', 'Solomon Islands', 'Honiara', 28450, 559198, 'OC', '.sb', 'SBD', 'Dollar', 677, 'en-SB,tpi', 2103350, '', ''),
(197, 'SC', 'SYC', 690, 'SE', 'Seychelles', 'Victoria', 455, 88340, 'AF', '.sc', 'SCR', 'Rupee', 248, 'en-SC,fr-SC', 241170, '', ''),
(198, 'SD', 'SDN', 729, 'SU', 'Sudan', 'Khartoum', 1861484, 35000000, 'AF', '.sd', 'SDG', 'Pound', 249, 'ar-SD,en,fia', 366755, 'SS,TD,EG,ET,ER,LY,CF', ''),
(199, 'SE', 'SWE', 752, 'SW', 'Sweden', 'Stockholm', 449964, 9555893, 'EU', '.se', 'SEK', 'Krona', 46, 'sv-SE,se,sma,fi-SE', 2661886, 'NO,FI', ''),
(200, 'SG', 'SGP', 702, 'SN', 'Singapore', 'Singapur', 693, 4701069, 'AS', '.sg', 'SGD', 'Dollar', 65, 'cmn,en-SG,ms-SG,ta-SG,zh-SG', 1880251, '', ''),
(201, 'SH', 'SHN', 654, 'SH', 'Saint Helena', 'Jamestown', 410, 7460, 'AF', '.sh', 'SHP', 'Pound', 290, 'en-SH', 3370751, '', ''),
(202, 'SI', 'SVN', 705, 'SI', 'Slovenia', 'Ljubljana', 20273, 2007000, 'EU', '.si', 'EUR', 'Euro', 386, 'sl,sh', 3190538, 'HU,IT,HR,AT', ''),
(203, 'SJ', 'SJM', 744, 'SV', 'Svalbard and Jan Mayen', 'Longyearbyen', 62049, 2550, 'EU', '.sj', 'NOK', 'Krone', 47, 'no,ru', 607072, '', ''),
(204, 'SK', 'SVK', 703, 'LO', 'Slovakia', 'Bratislava', 48845, 5455000, 'EU', '.sk', 'EUR', 'Euro', 421, 'sk,hu', 3057568, 'PL,HU,CZ,UA,AT', ''),
(205, 'SL', 'SLE', 694, 'SL', 'Sierra Leone', 'Freetown', 71740, 5245695, 'AF', '.sl', 'SLL', 'Leone', 232, 'en-SL,men,tem', 2403846, 'LR,GN', ''),
(206, 'SM', 'SMR', 674, 'SM', 'San Marino', 'San Marino', 61, 31477, 'EU', '.sm', 'EUR', 'Euro', 378, 'it-SM', 3168068, 'IT', ''),
(207, 'SN', 'SEN', 686, 'SG', 'Senegal', 'Dakar', 196190, 12323252, 'AF', '.sn', 'XOF', 'Franc', 221, 'fr-SN,wo,fuc,mnk', 2245662, 'GN,MR,GW,GM,ML', ''),
(208, 'SO', 'SOM', 706, 'SO', 'Somalia', 'Mogadishu', 637657, 10112453, 'AF', '.so', 'SOS', 'Shilling', 252, 'so-SO,ar-SO,it,en-SO', 51537, 'ET,KE,DJ', ''),
(209, 'SR', 'SUR', 740, 'NS', 'Suriname', 'Paramaribo', 163270, 492829, 'SA', '.sr', 'SRD', 'Dollar', 597, 'nl-SR,en,srn,hns,jv', 3382998, 'GY,BR,GF', ''),
(210, 'SS', 'SSD', 728, 'OD', 'South Sudan', 'Juba', 644329, 8260490, 'AF', '', 'SSP', 'Pound', 211, 'en', 7909807, 'CD,CF,ET,KE,SD,UG,', ''),
(211, 'ST', 'STP', 678, 'TP', 'Sao Tome and Principe', 'Sao Tome', 1001, 175808, 'AF', '.st', 'STD', 'Dobra', 239, 'pt-ST', 2410758, '', ''),
(212, 'SV', 'SLV', 222, 'ES', 'El Salvador', 'San Salvador', 21040, 6052064, 'NA', '.sv', 'USD', 'Dollar', 503, 'es-SV', 3585968, 'GT,HN', ''),
(213, 'SX', 'SXM', 534, 'NN', 'Sint Maarten', 'Philipsburg', 0, 37429, 'NA', '.sx', 'ANG', 'Guilder', 599, 'nl,en', 7609695, 'MF', ''),
(214, 'SY', 'SYR', 760, 'SY', 'Syria', 'Damascus', 185180, 22198110, 'AS', '.sy', 'SYP', 'Pound', 963, 'ar-SY,ku,hy,arc,fr,en', 163843, 'IQ,JO,IL,TR,LB', ''),
(215, 'SZ', 'SWZ', 748, 'WZ', 'Swaziland', 'Mbabane', 17363, 1354051, 'AF', '.sz', 'SZL', 'Lilangeni', 268, 'en-SZ,ss-SZ', 934841, 'ZA,MZ', ''),
(216, 'TC', 'TCA', 796, 'TK', 'Turks and Caicos Islands', 'Cockburn Town', 430, 20556, 'NA', '.tc', 'USD', 'Dollar', 1, 'en-TC', 3576916, '', ''),
(217, 'TD', 'TCD', 148, 'CD', 'Chad', 'N\'Djamena', 1284000, 10543464, 'AF', '.td', 'XAF', 'Franc', 235, 'fr-TD,ar-TD,sre', 2434508, 'NE,LY,CF,SD,CM,NG', ''),
(218, 'TF', 'ATF', 260, 'FS', 'French Southern Territories', 'Port-aux-Francais', 7829, 140, 'AN', '.tf', 'EUR', 'Euro  ', 0, 'fr', 1546748, '', ''),
(219, 'TG', 'TGO', 768, 'TO', 'Togo', 'Lome', 56785, 6587239, 'AF', '.tg', 'XOF', 'Franc', 228, 'fr-TG,ee,hna,kbp,dag,ha', 2363686, 'BJ,GH,BF', ''),
(220, 'TH', 'THA', 764, 'TH', 'Thailand', 'Bangkok', 514000, 67089500, 'AS', '.th', 'THB', 'Baht', 66, 'th,en', 1605651, 'LA,MM,KH,MY', ''),
(221, 'TJ', 'TJK', 762, 'TI', 'Tajikistan', 'Dushanbe', 143100, 7487489, 'AS', '.tj', 'TJS', 'Somoni', 992, 'tg,ru', 1220409, 'CN,AF,KG,UZ', ''),
(222, 'TK', 'TKL', 772, 'TL', 'Tokelau', '', 10, 1466, 'OC', '.tk', 'NZD', 'Dollar', 690, 'tkl,en-TK', 4031074, '', ''),
(223, 'TL', 'TLS', 626, 'TT', 'East Timor', 'Dili', 15007, 1154625, 'OC', '.tl', 'USD', 'Dollar', 670, 'tet,pt-TL,id,en', 1966436, 'ID', ''),
(224, 'TM', 'TKM', 795, 'TX', 'Turkmenistan', 'Ashgabat', 488100, 4940916, 'AS', '.tm', 'TMT', 'Manat', 993, 'tk,ru,uz', 1218197, 'AF,IR,UZ,KZ', ''),
(225, 'TN', 'TUN', 788, 'TS', 'Tunisia', 'Tunis', 163610, 10589025, 'AF', '.tn', 'TND', 'Dinar', 216, 'ar-TN,fr', 2464461, 'DZ,LY', ''),
(226, 'TO', 'TON', 776, 'TN', 'Tonga', 'Nuku\'alofa', 748, 122580, 'OC', '.to', 'TOP', 'Pa\'anga', 676, 'to,en-TO', 4032283, '', ''),
(227, 'TR', 'TUR', 792, 'TU', 'Turkey', 'Ankara', 780580, 77804122, 'AS', '.tr', 'TRY', 'Lira', 90, 'tr-TR,ku,diq,az,av', 298795, 'SY,GE,IQ,IR,GR,AM,AZ,BG', ''),
(228, 'TT', 'TTO', 780, 'TD', 'Trinidad and Tobago', 'Port of Spain', 5128, 1228691, 'NA', '.tt', 'TTD', 'Dollar', 1, 'en-TT,hns,fr,es,zh', 3573591, '', ''),
(229, 'TV', 'TUV', 798, 'TV', 'Tuvalu', 'Funafuti', 26, 10472, 'OC', '.tv', 'AUD', 'Dollar', 688, 'tvl,en,sm,gil', 2110297, '', ''),
(230, 'TW', 'TWN', 158, 'TW', 'Taiwan', 'Taipei', 35980, 22894384, 'AS', '.tw', 'TWD', 'Dollar', 886, 'zh-TW,zh,nan,hak', 1668284, '', ''),
(231, 'TZ', 'TZA', 834, 'TZ', 'Tanzania', 'Dodoma', 945087, 41892895, 'AF', '.tz', 'TZS', 'Shilling', 255, 'sw-TZ,en,ar', 149590, 'MZ,KE,CD,RW,ZM,BI,UG,MW', ''),
(232, 'UA', 'UKR', 804, 'UP', 'Ukraine', 'Kiev', 603700, 45415596, 'EU', '.ua', 'UAH', 'Hryvnia', 380, 'uk,ru-UA,rom,pl,hu', 690791, 'PL,MD,HU,SK,BY,RO,RU', ''),
(233, 'UG', 'UGA', 800, 'UG', 'Uganda', 'Kampala', 236040, 33398682, 'AF', '.ug', 'UGX', 'Shilling', 256, 'en-UG,lg,sw,ar', 226074, 'TZ,KE,SS,CD,RW', ''),
(234, 'UM', 'UMI', 581, '', 'United States Minor Outlying Islands', '', 0, 0, 'OC', '.um', 'USD', 'Dollar ', 1, 'en-UM', 5854968, '', ''),
(235, 'US', 'USA', 840, 'US', 'United States', 'Washington', 9629091, 310232863, 'NA', '.us', 'USD', 'Dollar', 1, 'en-US,es-US,haw,fr', 6252001, 'CA,MX,CU', ''),
(236, 'UY', 'URY', 858, 'UY', 'Uruguay', 'Montevideo', 176220, 3477000, 'SA', '.uy', 'UYU', 'Peso', 598, 'es-UY', 3439705, 'BR,AR', ''),
(237, 'UZ', 'UZB', 860, 'UZ', 'Uzbekistan', 'Tashkent', 447400, 27865738, 'AS', '.uz', 'UZS', 'Som', 998, 'uz,ru,tg', 1512440, 'TM,AF,KG,TJ,KZ', ''),
(238, 'VA', 'VAT', 336, 'VT', 'Vatican', 'Vatican City', 0, 921, 'EU', '.va', 'EUR', 'Euro', 379, 'la,it,fr', 3164670, 'IT', ''),
(239, 'VC', 'VCT', 670, 'VC', 'Saint Vincent and the Grenadines', 'Kingstown', 389, 104217, 'NA', '.vc', 'XCD', 'Dollar', 1, 'en-VC,fr', 3577815, '', ''),
(240, 'VE', 'VEN', 862, 'VE', 'Venezuela', 'Caracas', 912050, 27223228, 'SA', '.ve', 'VEF', 'Bolivar', 58, 'es-VE', 3625428, 'GY,BR,CO', ''),
(241, 'VG', 'VGB', 92, 'VI', 'British Virgin Islands', 'Road Town', 153, 21730, 'NA', '.vg', 'USD', 'Dollar', 1, 'en-VG', 3577718, '', ''),
(242, 'VI', 'VIR', 850, 'VQ', 'U.S. Virgin Islands', 'Charlotte Amalie', 352, 108708, 'NA', '.vi', 'USD', 'Dollar', 1, 'en-VI', 4796775, '', ''),
(243, 'VN', 'VNM', 704, 'VM', 'Vietnam', 'Hanoi', 329560, 89571130, 'AS', '.vn', 'VND', 'Dong', 84, 'vi,en,fr,zh,km', 1562822, 'CN,LA,KH', ''),
(244, 'VU', 'VUT', 548, 'NH', 'Vanuatu', 'Port Vila', 12200, 221552, 'OC', '.vu', 'VUV', 'Vatu', 678, 'bi,en-VU,fr-VU', 2134431, '', ''),
(245, 'WF', 'WLF', 876, 'WF', 'Wallis and Futuna', 'Mata Utu', 274, 16025, 'OC', '.wf', 'XPF', 'Franc', 681, 'wls,fud,fr-WF', 4034749, '', ''),
(246, 'WS', 'WSM', 882, 'WS', 'Samoa', 'Apia', 2944, 192001, 'OC', '.ws', 'WST', 'Tala', 685, 'sm,en-WS', 4034894, '', ''),
(247, 'XK', 'XKX', 0, 'KV', 'Kosovo', 'Pristina', 0, 1800000, 'EU', '', 'EUR', 'Euro', 0, 'sq,sr', 831053, 'RS,AL,MK,ME', ''),
(248, 'YE', 'YEM', 887, 'YM', 'Yemen', 'Sanaa', 527970, 23495361, 'AS', '.ye', 'YER', 'Rial', 967, 'ar-YE', 69543, 'SA,OM', ''),
(249, 'YT', 'MYT', 175, 'MF', 'Mayotte', 'Mamoudzou', 374, 159042, 'AF', '.yt', 'EUR', 'Euro', 262, 'fr-YT', 1024031, '', ''),
(250, 'ZA', 'ZAF', 710, 'SF', 'South Africa', 'Pretoria', 1219912, 49000000, 'AF', '.za', 'ZAR', 'Rand', 27, 'zu,xh,af,nso,en-ZA,tn,st,ts,ss,ve,nr', 953987, 'ZW,SZ,MZ,BW,NA,LS', ''),
(251, 'ZM', 'ZMB', 894, 'ZA', 'Zambia', 'Lusaka', 752614, 13460305, 'AF', '.zm', 'ZMK', 'Kwacha', 260, 'en-ZM,bem,loz,lun,lue,ny,toi', 895949, 'ZW,TZ,MZ,CD,NA,MW,AO', ''),
(252, 'ZW', 'ZWE', 716, 'ZI', 'Zimbabwe', 'Harare', 390580, 11651858, 'AF', '.zw', 'ZWL', 'Dollar', 263, 'en-ZW,sn,nr,nd', 878675, 'ZA,MZ,BW,ZM', '');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `code` varchar(3) DEFAULT NULL,
  `symbol` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `name`, `code`, `symbol`) VALUES
(1, 'Leke', 'ALL', 'Lek'),
(2, 'Dollars', 'USD', '$'),
(3, 'Afghanis', 'AFN', '؋'),
(4, 'Pesos', 'ARS', '$'),
(5, 'Guilders', 'AWG', 'ƒ'),
(6, 'Dollars', 'AUD', '$'),
(7, 'New Manats', 'AZN', 'ман'),
(8, 'Dollars', 'BSD', '$'),
(9, 'Dollars', 'BBD', '$'),
(10, 'Rubles', 'BYR', 'p.'),
(11, 'Euro', 'EUR', '€'),
(12, 'Dollars', 'BZD', 'BZ$'),
(13, 'Dollars', 'BMD', '$'),
(14, 'Bolivianos', 'BOB', '$b'),
(15, 'Convertible Marka', 'BAM', 'KM'),
(16, 'Pula', 'BWP', 'P'),
(17, 'Leva', 'BGN', 'лв'),
(18, 'Reais', 'BRL', 'R$'),
(19, 'Pounds', 'GBP', '£'),
(20, 'Dollars', 'BND', '$'),
(21, 'Riels', 'KHR', '៛'),
(22, 'Dollars', 'CAD', '$'),
(23, 'Dollars', 'KYD', '$'),
(24, 'Pesos', 'CLP', '$'),
(25, 'Yuan Renminbi', 'CNY', '¥'),
(26, 'Pesos', 'COP', '$'),
(27, 'Colón', 'CRC', '₡'),
(28, 'Kuna', 'HRK', 'kn'),
(29, 'Pesos', 'CUP', '₱'),
(30, 'Koruny', 'CZK', 'Kč'),
(31, 'Kroner', 'DKK', 'kr'),
(32, 'Pesos', 'DOP', 'RD$'),
(33, 'Dollars', 'XCD', '$'),
(34, 'Pounds', 'EGP', '£'),
(35, 'Colones', 'SVC', '$'),
(36, 'Pounds', 'FKP', '£'),
(37, 'Dollars', 'FJD', '$'),
(38, 'Cedis', 'GHC', '¢'),
(39, 'Pounds', 'GIP', '£'),
(40, 'Quetzales', 'GTQ', 'Q'),
(41, 'Pounds', 'GGP', '£'),
(42, 'Dollars', 'GYD', '$'),
(43, 'Lempiras', 'HNL', 'L'),
(44, 'Dollars', 'HKD', '$'),
(45, 'Forint', 'HUF', 'Ft'),
(46, 'Kronur', 'ISK', 'kr'),
(47, 'Rupees', 'INR', 'Rp'),
(48, 'Rupiahs', 'IDR', 'Rp'),
(49, 'Rials', 'IRR', '﷼'),
(50, 'Pounds', 'IMP', '£'),
(51, 'New Shekels', 'ILS', '₪'),
(52, 'Dollars', 'JMD', 'J$'),
(53, 'Yen', 'JPY', '¥'),
(54, 'Pounds', 'JEP', '£'),
(55, 'Tenge', 'KZT', 'лв'),
(56, 'Won', 'KPW', '₩'),
(57, 'Won', 'KRW', '₩'),
(58, 'Soms', 'KGS', 'лв'),
(59, 'Kips', 'LAK', '₭'),
(60, 'Lati', 'LVL', 'Ls'),
(61, 'Pounds', 'LBP', '£'),
(62, 'Dollars', 'LRD', '$'),
(63, 'Switzerland Francs', 'CHF', 'CHF'),
(64, 'Litai', 'LTL', 'Lt'),
(65, 'Denars', 'MKD', 'ден'),
(66, 'Ringgits', 'MYR', 'RM'),
(67, 'Rupees', 'MUR', '₨'),
(68, 'Pesos', 'MXN', '$'),
(69, 'Tugriks', 'MNT', '₮'),
(70, 'Meticais', 'MZN', 'MT'),
(71, 'Dollars', 'NAD', '$'),
(72, 'Rupees', 'NPR', '₨'),
(73, 'Guilders', 'ANG', 'ƒ'),
(74, 'Dollars', 'NZD', '$'),
(75, 'Cordobas', 'NIO', 'C$'),
(76, 'Nairas', 'NGN', '₦'),
(77, 'Krone', 'NOK', 'kr'),
(78, 'Rials', 'OMR', '﷼'),
(79, 'Rupees', 'PKR', '₨'),
(80, 'Balboa', 'PAB', 'B/.'),
(81, 'Guarani', 'PYG', 'Gs'),
(82, 'Nuevos Soles', 'PEN', 'S/.'),
(83, 'Pesos', 'PHP', 'Php'),
(84, 'Zlotych', 'PLN', 'zł'),
(85, 'Rials', 'QAR', '﷼'),
(86, 'New Lei', 'RON', 'lei'),
(87, 'Rubles', 'RUB', 'руб'),
(88, 'Pounds', 'SHP', '£'),
(89, 'Riyals', 'SAR', '﷼'),
(90, 'Dinars', 'RSD', 'Дин.'),
(91, 'Rupees', 'SCR', '₨'),
(92, 'Dollars', 'SGD', '$'),
(93, 'Dollars', 'SBD', '$'),
(94, 'Shillings', 'SOS', 'S'),
(95, 'Rand', 'ZAR', 'R'),
(96, 'Rupees', 'LKR', '₨'),
(97, 'Kronor', 'SEK', 'kr'),
(98, 'Dollars', 'SRD', '$'),
(99, 'Pounds', 'SYP', '£'),
(100, 'New Dollars', 'TWD', 'NT$'),
(101, 'Baht', 'THB', '฿'),
(102, 'Dollars', 'TTD', 'TT$'),
(103, 'Lira', 'TRY', '₺'),
(104, 'Liras', 'TRL', '£'),
(105, 'Dollars', 'TVD', '$'),
(106, 'Hryvnia', 'UAH', '₴'),
(107, 'Pesos', 'UYU', '$U'),
(108, 'Sums', 'UZS', 'лв'),
(109, 'Bolivares Fuertes', 'VEF', 'Bs'),
(110, 'Dong', 'VND', '₫'),
(111, 'Rials', 'YER', '﷼'),
(112, 'Zimbabwe Dollars', 'ZWD', 'Z$'),
(113, 'Rupees', 'INR', '₹');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `comp_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `comp_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'COMP11123', 'HR Department ', '2023-01-13 13:34:07', '0000-00-00 00:00:00'),
(3, 'COMP11123', 'Backend Department', '2022-12-21 18:21:34', '0000-00-00 00:00:00'),
(5, 'COMP11123', 'Finance', '2022-12-21 18:21:37', '0000-00-00 00:00:00'),
(8, 'COMP11123', 'dial42home', '2022-12-21 18:21:40', '0000-00-00 00:00:00'),
(9, 'COM96421', 'test', '2022-12-22 12:53:12', '0000-00-00 00:00:00'),
(10, 'COM96421', 'Finance', '2022-12-26 18:24:37', '0000-00-00 00:00:00'),
(11, 'COM96421', 'HR', '2022-12-26 18:24:47', '0000-00-00 00:00:00'),
(12, 'COM96421', 'Sales', '2022-12-26 18:24:56', '0000-00-00 00:00:00'),
(13, 'COM96421', 'Management', '2022-12-26 18:25:07', '0000-00-00 00:00:00'),
(14, 'COM82491', 'Accounts', '2023-01-03 08:29:20', '0000-00-00 00:00:00'),
(15, 'COM82491', 'Management', '2023-01-03 08:29:30', '0000-00-00 00:00:00'),
(16, 'COM82491', 'Admin', '2023-01-03 08:29:37', '0000-00-00 00:00:00'),
(17, 'COM82491', 'HR', '2023-01-03 08:29:48', '0000-00-00 00:00:00'),
(18, 'COM82491', 'Finance', '2023-01-03 08:29:56', '0000-00-00 00:00:00'),
(19, 'COM82491', 'Sales', '2023-01-03 08:30:04', '0000-00-00 00:00:00'),
(20, 'COM82491', 'Development', '2023-01-03 08:30:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `comp_id` varchar(50) NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `comp_id`, `department_id`, `designation_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'COMP11123', 1, 'Hr Intern', 'Testing', '2022-12-21 18:21:15', '0000-00-00 00:00:00'),
(4, 'COMP11123', 5, 'Sr. Accounts Manager', 'Fiancne', '2022-12-21 18:21:20', '0000-00-00 00:00:00'),
(6, 'COMP11123', 3, 'Manager', 'Backend', '2022-12-21 18:21:51', '0000-00-00 00:00:00'),
(7, 'COM96421', 9, 'test2', 'test2', '2022-12-22 12:53:36', '0000-00-00 00:00:00'),
(8, 'COM96421', 10, 'Accounts Executive', 'Accounting', '2022-12-26 18:25:51', '0000-00-00 00:00:00'),
(9, 'COM96421', 13, 'Director', 'Company Director', '2022-12-26 18:28:18', '0000-00-00 00:00:00'),
(10, 'COM82491', 14, 'Sr. Accounts Manager', 'Sr. Accounts Manager', '2023-01-03 08:30:32', '0000-00-00 00:00:00'),
(11, 'COM82491', 15, 'Director', 'Director', '2023-01-03 08:30:45', '0000-00-00 00:00:00'),
(12, 'COM82491', 16, 'Driver Cum Assistant', 'Driver Cum Assistant', '2023-01-03 08:31:07', '0000-00-00 00:00:00'),
(13, 'COM82491', 14, 'Jr. Accounts Manager', 'Jr. Accounts Manager', '2023-01-03 08:31:32', '0000-00-00 00:00:00'),
(14, 'COM82491', 14, 'Accounts Executive', 'Accounts Executive', '2023-01-03 08:31:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(11) NOT NULL,
  `template_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `varialbles` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `template_name`, `subject`, `description`, `varialbles`, `created_date`) VALUES
(1, 'LICENSE_EXPIRED	', 'License Expired	', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.aaa', '##PRODUCT## ', '2022-09-06 10:36:33'),
(3, 'SIGNUP', 'Signup', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.aaa', '##NAME## ', '2022-09-06 10:36:33'),
(4, 'LEAVE', 'Leave', 'Hi\r\n\r\nYour leave request of date ##DATE## has been ##STATUS##', '##DATE## ##STATUS##', '2022-11-29 12:51:20'),
(5, 'Test', 'Test', 'Test', '##TEST## ', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `emp_attendance`
--

CREATE TABLE `emp_attendance` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `empId` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attendance_date` date NOT NULL,
  `in_time` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `out_time` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emp_attendance`
--

INSERT INTO `emp_attendance` (`id`, `user_id`, `empId`, `attendance_date`, `in_time`, `out_time`, `created_date`) VALUES
(1, 8, 'EB112', '2022-09-11', '11:05 AM', '18:10 PM', '2022-09-14 05:29:47'),
(2, 9, 'EB115', '2022-09-13', '10:05 AM', '19:05 PM', '2022-09-14 11:03:44'),
(3, 8, 'EB112', '2022-09-02', '10:00 AM', '19:00 PM', '2022-09-14 06:24:01'),
(4, 6, 'EB111', '2022-09-26', '09:17 AM', '17:17 PM', '2022-09-26 05:17:48');

-- --------------------------------------------------------

--
-- Table structure for table `emp_expense_claims`
--

CREATE TABLE `emp_expense_claims` (
  `id` int(11) NOT NULL,
  `comp_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `request_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `emp_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SSN` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_date` date NOT NULL,
  `pay_fromdate` date NOT NULL,
  `pay_todate` date NOT NULL,
  `designation` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `manager` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expense_type` int(11) NOT NULL,
  `amount` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0=Pending,1=Approved,2=Rejected',
  `manager_remarks` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_from` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emp_expense_claims`
--

INSERT INTO `emp_expense_claims` (`id`, `comp_id`, `request_no`, `user_id`, `emp_id`, `SSN`, `purpose`, `purchase_date`, `pay_fromdate`, `pay_todate`, `designation`, `department`, `manager`, `description`, `account_type`, `expense_type`, `amount`, `bill`, `status`, `manager_remarks`, `created_date`, `updated_date`, `item_name`, `price`, `purchase_from`) VALUES
(1, 'COMP11123', 'EXP32258', 8, 'EB112', '235689', 'test', '2022-08-03', '2022-08-15', '2022-08-17', 0, 0, 2, 'sss', 'Cheque', 2, '500', '5896c0b2037100fea6a1230517f9bf937.jpg.jpg', 1, 'Test1  ', '2022-08-09 06:41:09', '2022-09-15 05:12:08', '', '', ''),
(2, 'COMP11123', 'EXP30708', 8, 'EB112', '2223568999', 'test1', '2022-08-05', '2022-08-25', '2022-08-27', 0, 0, 10, 'test111', 'Gpay', 5, '', '19bc9cca7859fdf89b26eb1adbda2bd25.jpg.jpg', 0, '', '2022-08-10 05:04:35', '0000-00-00 00:00:00', '', '', ''),
(3, 'COMP11123', 'EXP86348', 8, 'EB112', '222333444', 'testme', '2022-08-06', '2022-08-08', '2022-08-12', 0, 0, 2, 'test3', 'Bank', 1, '', '79f782d35840042fe4607f30192836f8bill.png.jpg', 2, 'Test2', '2022-08-12 07:07:18', '2022-08-17 07:07:20', '', '', ''),
(4, 'COMP11123', 'EXP57898', 8, 'EB112', '222356888', 'test15', '2022-09-13', '2022-09-15', '2022-09-30', 0, 0, 2, 'test', 'Cash', 2, '', '0078fcb318a19a91b04d4d8b69ac0739demologo.png.jpg', 0, '', '2022-09-15 05:03:09', '0000-00-00 00:00:00', '', '', ''),
(5, 'COMP11123', 'EXP91838', 8, 'EB112', '22225555', 'abc', '2022-09-05', '2022-09-26', '2022-09-30', 0, 0, 2, 'test', 'Cheque', 3, '200', '8ad3d2da3bdb41c05ab6e6f586d36b9fdemologo.png.jpg', 0, '', '2022-09-15 05:10:17', '0000-00-00 00:00:00', '', '', ''),
(6, 'COMP11123', 'EXP40778', 8, 'EB112', '2223568999', 'testaaaa', '2022-09-12', '2022-08-17', '2022-08-20', 0, 0, 2, 'aaa', 'Bank', 1, '5000', '', 0, '', '2022-09-15 06:43:55', '0000-00-00 00:00:00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `emp_leaves`
--

CREATE TABLE `emp_leaves` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `leave_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `half_days` int(11) NOT NULL,
  `selected_days` int(11) NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `type` enum('single','multiple','compoff') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_status` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emp_leaves`
--

INSERT INTO `emp_leaves` (`id`, `emp_id`, `comp_id`, `user_id`, `leave_type`, `half_days`, `selected_days`, `reason`, `from_date`, `to_date`, `type`, `status`, `leave_status`, `created_date`) VALUES
(8, 'EB112', 'COMP11123', 8, '2', 1, 0, 'test', '2022-07-28', '0000-00-00', 'single', 'Approved', 0, '2022-07-27 06:50:48'),
(15, 'EB112', 'COMP11123', 8, '2', 0, 5, 'test', '2022-09-01', '2022-09-05', 'multiple', 'Approved', 0, '2022-08-03 05:38:37'),
(30, 'EB112', 'COMP11123', 8, '2', 0, 1, 'test', '2022-11-07', '0000-00-00', 'single', 'Pending', 0, '2022-11-04 11:56:11'),
(33, 'EB112', 'COMP11123', 8, '4', 0, 1, 'test', '2022-10-08', '0000-00-00', 'single', 'Approved', 0, '2022-11-04 11:56:11'),
(34, 'EB112', 'COMP11123', 8, '1', 0, 1, 'test', '2022-12-15', '0000-00-00', 'single', 'Pending', 0, '2022-12-01 12:21:54'),
(35, 'EB112', 'COMP11123', 8, '6', 0, 1, 'test', '2022-12-24', '0000-00-00', 'single', 'Pending', 0, '2022-12-01 01:36:33'),
(36, 'EB112', 'COMP11123', 8, '1', 0, 1, 'test', '2022-12-16', '0000-00-00', 'single', 'Approved', 0, '2022-12-15 05:23:05'),
(42, 'EB112', 'COMP11123', 8, '6', 0, 1, 'fdsf', '2022-12-30', '0000-00-00', 'single', 'Pending', 0, '2022-12-20 06:56:32'),
(43, 'EB987', 'COM96421', 13, '1', 0, 1, 'test', '2022-12-22', '0000-00-00', 'single', 'Approved', 0, '2022-12-21 12:45:09'),
(44, 'EB112', 'COMP11123', 8, '1', 0, 1, 'test', '2023-03-17', '0000-00-00', 'single', 'Approved', 0, '2023-03-27 05:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `expense_types`
--

CREATE TABLE `expense_types` (
  `id` int(11) NOT NULL,
  `comp_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expense_types`
--

INSERT INTO `expense_types` (`id`, `comp_id`, `name`, `status`, `created_date`) VALUES
(1, 'COMP11123', 'Accomodation', 1, '2023-03-27 12:05:38'),
(2, 'COMP11123', 'Flight/Bus', 1, '2023-03-27 12:05:40'),
(3, 'COMP11123', 'Cab', 1, '2023-03-27 12:05:43'),
(4, 'COMP11123', 'Meals', 1, '2023-03-27 12:05:54'),
(5, 'COMP11123', 'Phone', 1, '2023-03-27 12:05:57'),
(6, 'COMP11123', 'Internet', 0, '2022-12-19 19:56:04'),
(7, 'COMP11123', 'ttest', 0, '2023-03-27 12:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `category_id`, `title`, `content`, `status`, `created_date`) VALUES
(1, 1, 'test', 'test', 2, '2022-09-02 08:16:52'),
(2, 1, 'What are my flexible benefit components?', 'Lorem Ipsum, sometimes referred to as \'lipsum\', is the placeholder text used in design when creating content. It helps designers plan out where the content will sit, without needing to wait for the content to be written and approved. It originally comes from a Latin text, but to today\'s reader, it\'s seen as gibberish.', 1, '2022-09-02 09:11:35'),
(4, 2, 'What is the standard deduction?', 'Lorem Ipsum, sometimes referred to as \'lipsum\', is the placeholder text used in design when creating content. It helps designers plan out where the content will sit, without needing to wait for the content to be written and approved. It originally comes from a Latin text, but to today\'s reader, it\'s seen as gibberish.', 1, '2022-09-02 10:03:04'),
(5, 4, 'When will I receive my salary and what happens if my payday is a holiday?', 'Lorem Ipsum, sometimes referred to as \'lipsum\', is the placeholder text used in design when creating content. It helps designers plan out where the content will sit, without needing to wait for the content to be written and approved. It originally comes from a Latin text, but to today\'s reader, it\'s seen as gibberish.', 2, '2022-09-02 10:03:41'),
(6, 2, 'rtjl', 'tfy,guil', 1, '2022-11-04 06:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `faq_category`
--

CREATE TABLE `faq_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_category`
--

INSERT INTO `faq_category` (`id`, `name`, `status`, `created_date`) VALUES
(1, 'Test1', 1, '2022-08-26 10:02:15'),
(2, 'Test2', 1, '2022-08-26 10:06:50'),
(3, 'Test3', 1, '2022-08-26 10:06:59'),
(4, 'Test33', 1, '2022-09-02 12:25:47');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(11) NOT NULL,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `app_update` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `app_name`, `comp_address`, `phone`, `email`, `name`, `currency_id`, `lang_id`, `app_update`, `logo`, `created_date`) VALUES
(1, 'HRMS', '1St floor ,Indore', '9874563215', 'jainaaka@gmail.com', 'Aakansha Jain', 113, 16, '1', 'dd640d3ff17584fbc990316c20ef84dcdemologo.png.jpg', '2022-09-06 07:23:48');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'applied by',
  `comp_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_date` date NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0=pending,1=Approved',
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `user_id`, `comp_id`, `position_id`, `name`, `email`, `phone`, `cover`, `application_date`, `resume`, `status`, `created_date`) VALUES
(3, 8, 'COMP11123', 1, 'Aaka Jain', 'jainaaka@gmail.com', '9874567154', 'test', '2022-11-10', '83da283046a64cfcfca9953633938cd8sample.pdf.jpg', 0, '2022-11-10 04:46:29'),
(10, 8, 'COMP11123', 3, 'Aakansha Jain', 'jainaaka@gmail.com', '9877567154', 'aa', '2022-11-16', '7680bacb63dd62e46ca254b501f9e8b4sample.pdf', 2, '2022-11-16 12:49:26');

-- --------------------------------------------------------

--
-- Table structure for table `job_vacancies`
--

CREATE TABLE `job_vacancies` (
  `id` int(11) NOT NULL,
  `comp_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `postedDate` date NOT NULL,
  `lastDateToapply` date NOT NULL,
  `closeDate` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_vacancies`
--

INSERT INTO `job_vacancies` (`id`, `comp_id`, `position`, `description`, `postedDate`, `lastDateToapply`, `closeDate`, `created_by`, `status`, `created_date`) VALUES
(1, 'COMP11123', 'Php', 'Lorem ut ipsum distinctio est est accusantium. At reiciendis voluptatum omnis id. Nisi aut quidem molestiae voluptate ut. Fugiat quo et perspiciatis suscipit magnam voluptate tenetur.', '2022-11-08', '2022-11-18', '2022-11-18', 2, 1, '2022-11-10 08:26:59'),
(3, 'COMP11123', 'Fresher Laravel Developer', 'Aut ipsum distinctio est est accusantium. At reiciendis voluptatum omnis id. Nisi aut quidem molestiae voluptate ut. Fugiat quo et perspiciatis suscipit magnam voluptate tenetur.', '2022-11-10', '2022-11-17', '2022-11-18', 2, 1, '2022-11-10 08:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `locale`, `language`, `status`, `created_date`) VALUES
(1, 'aa', 'aa', 2, '2022-09-08 06:51:06'),
(2, 'bb', 'bb', 2, '2022-09-08 06:52:01'),
(3, 'cc', 'cc', 2, '2022-09-08 06:52:23'),
(4, 'bb', 'bb', 0, '2022-09-08 07:36:41'),
(5, 'cc', 'cc', 0, '2022-09-08 07:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`) VALUES
(2, 'Afrikaans', 'AF'),
(3, 'Albanian', 'SQ'),
(4, 'Arabic', 'AR'),
(5, 'Armenian', 'HY'),
(6, 'Basque', 'EU'),
(7, 'Bengali', 'BN'),
(8, 'Bulgarian', 'BG'),
(9, 'Catalan', 'CA'),
(10, 'Cambodian', 'KM'),
(11, 'Chinese (Mandarin)', 'ZH'),
(12, 'Croatian', 'HR'),
(13, 'Czech', 'CS'),
(14, 'Danish', 'DA'),
(15, 'Dutch', 'NL'),
(16, 'English', 'EN'),
(17, 'Estonian', 'ET'),
(18, 'Fiji', 'FJ'),
(19, 'Finnish', 'FI'),
(20, 'French', 'FR'),
(21, 'Georgian', 'KA'),
(22, 'German', 'DE'),
(23, 'Greek', 'EL'),
(24, 'Gujarati', 'GU'),
(25, 'Hebrew', 'HE'),
(26, 'Hindi', 'HI'),
(27, 'Hungarian', 'HU'),
(28, 'Icelandic', 'IS'),
(29, 'Indonesian', 'ID'),
(30, 'Irish', 'GA'),
(31, 'Italian', 'IT'),
(32, 'Japanese', 'JA'),
(33, 'Javanese', 'JW'),
(34, 'Korean', 'KO'),
(35, 'Latin', 'LA'),
(36, 'Latvian', 'LV'),
(37, 'Lithuanian', 'LT'),
(38, 'Macedonian', 'MK'),
(39, 'Malay', 'MS'),
(40, 'Malayalam', 'ML'),
(41, 'Maltese', 'MT'),
(42, 'Maori', 'MI'),
(43, 'Marathi', 'MR'),
(44, 'Mongolian', 'MN'),
(45, 'Nepali', 'NE'),
(46, 'Norwegian', 'NO'),
(47, 'Persian', 'FA'),
(48, 'Polish', 'PL'),
(49, 'Portuguese', 'PT'),
(50, 'Punjabi', 'PA'),
(51, 'Quechua', 'QU'),
(52, 'Romanian', 'RO'),
(53, 'Russian', 'RU'),
(54, 'Samoan', 'SM'),
(55, 'Serbian', 'SR'),
(56, 'Slovak', 'SK'),
(57, 'Slovenian', 'SL'),
(58, 'Spanish', 'ES'),
(59, 'Swahili', 'SW'),
(60, 'Swedish', 'SV'),
(61, 'Tamil', 'TA'),
(62, 'Tatar', 'TT'),
(63, 'Telugu', 'TE'),
(64, 'Thai', 'TH'),
(65, 'Tibetan', 'BO'),
(66, 'Tonga', 'TO'),
(67, 'Turkish', 'TR'),
(68, 'Ukrainian', 'UK'),
(69, 'Urdu', 'UR'),
(70, 'Uzbek', 'UZ'),
(71, 'Vietnamese', 'VI'),
(72, 'Welsh', 'CY'),
(73, 'Xhosa', 'XH');

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

CREATE TABLE `leave_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days_per_year` int(11) NOT NULL,
  `req_approval` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `comp_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_type`
--

INSERT INTO `leave_type` (`id`, `name`, `days_per_year`, `req_approval`, `status`, `comp_id`, `created_date`) VALUES
(1, 'Earned', 6, 'Yes', 1, '', '0000-00-00 00:00:00'),
(2, 'casual', 12, 'Yes', 1, '', '0000-00-00 00:00:00'),
(4, 'Optional', 12, 'Yes', 1, '', '0000-00-00 00:00:00'),
(6, 'Compoff', 10, 'Yes', 1, '', '2022-10-13 13:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `offer_breakup`
--

CREATE TABLE `offer_breakup` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `location` varchar(250) NOT NULL,
  `offer_date` date NOT NULL,
  `p_company` varchar(250) NOT NULL,
  `calculate_p` int(11) NOT NULL,
  `calculate_per` float(100,2) NOT NULL,
  `g_ctc` float(100,2) NOT NULL,
  `veriable_pay` float(100,2) NOT NULL,
  `retention_bonus` float(100,2) NOT NULL,
  `mediclaim_insurance` float(100,2) NOT NULL,
  `atc_annual` float(100,2) NOT NULL,
  `atc_monthly` float(100,2) NOT NULL,
  `pvb_annual` float(100,2) NOT NULL,
  `pvb_monthly` float(100,2) NOT NULL,
  `rba_annual` float(100,2) NOT NULL,
  `rba_monthly` float(100,2) NOT NULL,
  `actpf_annual` float(100,2) NOT NULL,
  `actpf_monthly` float(100,2) NOT NULL,
  `mip_annual` float(100,2) NOT NULL,
  `mip_monthly` float(100,2) NOT NULL,
  `netctc` float(100,2) NOT NULL,
  `netctc_m` float(100,2) NOT NULL,
  `basic_annualized` float(100,2) NOT NULL,
  `basic_per_month` float(100,2) NOT NULL,
  `hra_annualized` float(100,2) NOT NULL,
  `hra_per_month` float(100,2) NOT NULL,
  `cma_annualized` float(100,2) NOT NULL,
  `cma_per_month` float(100,2) NOT NULL,
  `ja_annualized` float(100,2) NOT NULL,
  `ja_per_month` float(100,2) NOT NULL,
  `ma_annualized` float(100,2) NOT NULL,
  `ma_per_month` float(100,2) NOT NULL,
  `cea_annualized` float(100,2) NOT NULL,
  `cea_per_month` float(100,2) NOT NULL,
  `ua_annualized` float(100,2) NOT NULL,
  `ua_per_month` float(100,2) NOT NULL,
  `sp_annualized` float(100,2) NOT NULL,
  `sp_per_month` float(100,2) NOT NULL,
  `totalfc` float(100,2) NOT NULL,
  `totalfc_m` float(100,2) NOT NULL,
  `pf_annualized` float(100,2) NOT NULL,
  `pf_per_month` float(100,2) NOT NULL,
  `pt_annualized` float(100,2) NOT NULL,
  `pt_per_month` float(100,2) NOT NULL,
  `esic_annualized` float(100,2) NOT NULL,
  `esic_per_month` float(100,2) NOT NULL,
  `it_annualized` float(100,2) NOT NULL,
  `it_per_month` float(100,2) NOT NULL,
  `mlwf_annualized` float(100,2) NOT NULL,
  `mlwf_per_month` float(100,2) NOT NULL,
  `totalded` float(100,2) NOT NULL,
  `totalded_m` float(100,2) NOT NULL,
  `nettake` float(100,2) NOT NULL,
  `nettake_m` float(100,2) NOT NULL,
  `entry_date` date NOT NULL,
  `entry_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer_breakup`
--

INSERT INTO `offer_breakup` (`id`, `user_id`, `name`, `department_id`, `designation_id`, `location`, `offer_date`, `p_company`, `calculate_p`, `calculate_per`, `g_ctc`, `veriable_pay`, `retention_bonus`, `mediclaim_insurance`, `atc_annual`, `atc_monthly`, `pvb_annual`, `pvb_monthly`, `rba_annual`, `rba_monthly`, `actpf_annual`, `actpf_monthly`, `mip_annual`, `mip_monthly`, `netctc`, `netctc_m`, `basic_annualized`, `basic_per_month`, `hra_annualized`, `hra_per_month`, `cma_annualized`, `cma_per_month`, `ja_annualized`, `ja_per_month`, `ma_annualized`, `ma_per_month`, `cea_annualized`, `cea_per_month`, `ua_annualized`, `ua_per_month`, `sp_annualized`, `sp_per_month`, `totalfc`, `totalfc_m`, `pf_annualized`, `pf_per_month`, `pt_annualized`, `pt_per_month`, `esic_annualized`, `esic_per_month`, `it_annualized`, `it_per_month`, `mlwf_annualized`, `mlwf_per_month`, `totalded`, `totalded_m`, `nettake`, `nettake_m`, `entry_date`, `entry_date_time`) VALUES
(1, 2, 'brajesh', 1, 1, 'indore', '2023-01-30', '200000', 0, 0.00, 260000.00, 1000.00, 1000.00, 0.00, 260000.00, 21667.00, 1000.00, 0.00, 1000.00, 0.00, 18720.00, 0.00, 0.00, 0.00, 239280.00, 19940.00, 156000.00, 13000.00, 62400.00, 5200.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 20880.00, 1740.00, 239280.00, 19940.00, 18720.00, 1560.00, 2500.00, 200.00, 1795.00, 150.00, 0.00, 0.00, 24.00, 0.00, 23039.00, 1910.00, 216241.00, 18030.00, '2023-01-19', '2023-01-19 11:50:31'),
(3, 2, 'Kalyani Dhamdhere', 5, 4, 'Pune', '2023-01-19', '4500000', 0, 0.00, 5500000.00, 200000.00, 0.00, 0.00, 5500000.00, 458333.00, 200000.00, 0.00, 0.00, 0.00, 396000.00, 0.00, 0.00, 0.00, 4904000.00, 408667.00, 3300000.00, 275000.00, 1320000.00, 110000.00, 21600.00, 1800.00, 12000.00, 1000.00, 24000.00, 2000.00, 4800.00, 400.00, 24000.00, 2000.00, 197600.00, 16467.00, 4904000.00, 408667.00, 396000.00, 33000.00, 2500.00, 200.00, 0.00, 0.00, 0.00, 0.00, 24.00, 0.00, 398524.00, 33200.00, 4505476.00, 375467.00, '2023-01-19', '2023-01-19 18:00:34'),
(4, 2, 'Nayana Hajare', 3, 6, 'Pune', '2023-01-19', '578900', 0, 0.00, 950000.00, 0.00, 50000.00, 0.00, 950000.00, 79167.00, 0.00, 0.00, 50000.00, 0.00, 68400.00, 0.00, 0.00, 0.00, 831600.00, 69300.00, 570000.00, 47500.00, 228000.00, 19000.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 33600.00, 2800.00, 831600.00, 69300.00, 68400.00, 5700.00, 2500.00, 200.00, 0.00, 0.00, 0.00, 0.00, 24.00, 0.00, 70924.00, 5900.00, 760676.00, 63400.00, '2023-01-19', '2023-01-19 18:04:45'),
(5, 2, 'Kalyani R', 1, 1, 'Delhi', '2023-01-19', '1240000', 1, 20.00, 1488000.00, 0.00, 150000.00, 0.00, 1488000.00, 124000.00, 0.00, 0.00, 150000.00, 0.00, 80352.00, 0.00, 0.00, 0.00, 1257648.00, 104804.00, 669600.00, 55800.00, 267840.00, 22320.00, 21600.00, 1800.00, 12000.00, 1000.00, 24000.00, 2000.00, 4800.00, 400.00, 24000.00, 2000.00, 233808.00, 19484.00, 1257648.00, 104804.00, 80352.00, 6696.00, 2500.00, 200.00, 0.00, 0.00, 0.00, 0.00, 24.00, 0.00, 82876.00, 6896.00, 1174772.00, 97908.00, '2023-01-19', '2023-01-19 18:07:50'),
(6, 2, 'brajesh Test', 1, 1, 'indore', '2023-01-30', '250000', 1, 10.00, 275000.00, 1000.00, 1000.00, 0.00, 275000.00, 22917.00, 1000.00, 0.00, 1000.00, 0.00, 1800.00, 0.00, 0.00, 0.00, 271200.00, 22600.00, 15000.00, 1250.00, 6000.00, 500.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 250200.00, 20850.00, 271200.00, 22600.00, 1800.00, 150.00, 2500.00, 200.00, 0.00, 0.00, 0.00, 0.00, 24.00, 0.00, 4324.00, 350.00, 266876.00, 22250.00, '2023-01-20', '2023-01-20 08:34:54'),
(7, 2, 'Kalyani D', 1, 1, 'Delhi', '2023-01-22', '1500000', 1, 25.00, 1875000.00, 150000.00, 0.00, 0.00, 1875000.00, 156250.00, 150000.00, 0.00, 0.00, 0.00, 101250.00, 0.00, 0.00, 0.00, 1623750.00, 135313.00, 843750.00, 70313.00, 337500.00, 28125.00, 21600.00, 1800.00, 12000.00, 1000.00, 24000.00, 2000.00, 4800.00, 400.00, 24000.00, 2000.00, 356100.00, 29675.00, 1623750.00, 135313.00, 101250.00, 8438.00, 2500.00, 200.00, 0.00, 0.00, 0.00, 0.00, 24.00, 0.00, 103774.00, 8638.00, 1519976.00, 126675.00, '2023-01-22', '2023-01-22 13:06:52'),
(8, 2, 'Kalyani Dhamdhere', 1, 1, 'Pune', '2023-01-28', '4500000', 1, 15.00, 5175000.00, 100000.00, 0.00, 0.00, 5175000.00, 431250.00, 100000.00, 0.00, 0.00, 0.00, 279450.00, 0.00, 0.00, 0.00, 4795550.00, 399629.00, 2328750.00, 194063.00, 931500.00, 77625.00, 21600.00, 1800.00, 12000.00, 1000.00, 24000.00, 2000.00, 4800.00, 400.00, 24000.00, 2000.00, 1448900.00, 120742.00, 4795550.00, 399629.00, 279450.00, 23288.00, 2500.00, 200.00, 0.00, 0.00, 0.00, 0.00, 24.00, 0.00, 281974.00, 23488.00, 4513576.00, 376141.00, '2023-01-28', '2023-01-28 14:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `overtime_request`
--

CREATE TABLE `overtime_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `Intime` time NOT NULL,
  `outTime` time NOT NULL,
  `reason` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `status`) VALUES
(1, 'Basic', 1),
(2, 'Premium', 1),
(3, 'Advanced', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_settings`
--

CREATE TABLE `payment_settings` (
  `id` int(11) NOT NULL,
  `publishable_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_secret` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` int(11) NOT NULL,
  `stripe_webhook_secret` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paypal_client_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paypal_secret_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `environment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `webhook_URL` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paypal_status` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_settings`
--

INSERT INTO `payment_settings` (`id`, `publishable_key`, `stripe_secret`, `stripe_status`, `stripe_webhook_secret`, `paypal_client_id`, `paypal_secret_key`, `environment`, `webhook_URL`, `paypal_status`, `created_date`) VALUES
(1, '12345ghj5697', '1234567890', 1, '123opop12123', 'test1234test', 'abc123abc', 'sandbox', '', 0, '2022-12-07 10:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` int(11) NOT NULL,
  `comp_id` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `comp_id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'COMP11123', 'Test1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '3cca71f4aacb0b5936b494892fda1cae6.jpg.jpg', '2022-12-22 13:12:15', '0000-00-00 00:00:00'),
(3, 'COMP11123', 'test', 'testttt tetstst testttt ', '97a3c72a94b80ce9a086c0479f0880bbdownload (2).jpg.jpg', '2022-12-22 13:12:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_plans`
--

CREATE TABLE `subscription_plans` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_monthly_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_annual_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthly_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annual_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscription_plans`
--

INSERT INTO `subscription_plans` (`id`, `name`, `s_monthly_id`, `s_annual_id`, `monthly_price`, `annual_price`, `start_user`, `end_user`, `comment`, `status`, `created_date`) VALUES
(1, 'Basic', 'hrm_basic_plan_monthly', 'hrm_basic_plan_annual', '500', '5000', '01', '30', 'Test', 0, '2022-09-07 06:51:18'),
(2, 'Premium', 'hrm_basic_plan_monthly', 'hrm_basic_plan_annual', '1000', '10000', '0', '50', 'Test2', 1, '2022-09-07 06:53:04'),
(3, 'Advanced', 'hrm_advance_plan_monthly', 'hrm_advance_plan_annual', '1500', '15000', '0', '100', 'test3', 0, '2022-09-07 06:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `timezone`
--

CREATE TABLE `timezone` (
  `id` int(11) NOT NULL,
  `country_code` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timezone` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `gmt_offset` float(10,2) DEFAULT NULL,
  `dst_offset` float(10,2) DEFAULT NULL,
  `raw_offset` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timezone`
--

INSERT INTO `timezone` (`id`, `country_code`, `timezone`, `gmt_offset`, `dst_offset`, `raw_offset`) VALUES
(1, 'AD', 'Europe/Andorra', 1.00, 2.00, 1.00),
(2, 'AE', 'Asia/Dubai', 4.00, 4.00, 4.00),
(3, 'AF', 'Asia/Kabul', 4.50, 4.50, 4.50),
(4, 'AG', 'America/Antigua', -4.00, -4.00, -4.00),
(5, 'AI', 'America/Anguilla', -4.00, -4.00, -4.00),
(6, 'AL', 'Europe/Tirane', 1.00, 2.00, 1.00),
(7, 'AM', 'Asia/Yerevan', 4.00, 4.00, 4.00),
(8, 'AO', 'Africa/Luanda', 1.00, 1.00, 1.00),
(9, 'AQ', 'Antarctica/Casey', 8.00, 8.00, 8.00),
(10, 'AQ', 'Antarctica/Davis', 7.00, 7.00, 7.00),
(11, 'AQ', 'Antarctica/DumontDUrville', 10.00, 10.00, 10.00),
(12, 'AQ', 'Antarctica/Mawson', 5.00, 5.00, 5.00),
(13, 'AQ', 'Antarctica/McMurdo', 13.00, 12.00, 12.00),
(14, 'AQ', 'Antarctica/Palmer', -3.00, -4.00, -4.00),
(15, 'AQ', 'Antarctica/Rothera', -3.00, -3.00, -3.00),
(16, 'AQ', 'Antarctica/South_Pole', 13.00, 12.00, 12.00),
(17, 'AQ', 'Antarctica/Syowa', 3.00, 3.00, 3.00),
(18, 'AQ', 'Antarctica/Vostok', 6.00, 6.00, 6.00),
(19, 'AR', 'America/Argentina/Buenos_Aires', -3.00, -3.00, -3.00),
(20, 'AR', 'America/Argentina/Catamarca', -3.00, -3.00, -3.00),
(21, 'AR', 'America/Argentina/Cordoba', -3.00, -3.00, -3.00),
(22, 'AR', 'America/Argentina/Jujuy', -3.00, -3.00, -3.00),
(23, 'AR', 'America/Argentina/La_Rioja', -3.00, -3.00, -3.00),
(24, 'AR', 'America/Argentina/Mendoza', -3.00, -3.00, -3.00),
(25, 'AR', 'America/Argentina/Rio_Gallegos', -3.00, -3.00, -3.00),
(26, 'AR', 'America/Argentina/Salta', -3.00, -3.00, -3.00),
(27, 'AR', 'America/Argentina/San_Juan', -3.00, -3.00, -3.00),
(28, 'AR', 'America/Argentina/San_Luis', -3.00, -3.00, -3.00),
(29, 'AR', 'America/Argentina/Tucuman', -3.00, -3.00, -3.00),
(30, 'AR', 'America/Argentina/Ushuaia', -3.00, -3.00, -3.00),
(31, 'AS', 'Pacific/Pago_Pago', -11.00, -11.00, -11.00),
(32, 'AT', 'Europe/Vienna', 1.00, 2.00, 1.00),
(33, 'AU', 'Antarctica/Macquarie', 11.00, 11.00, 11.00),
(34, 'AU', 'Australia/Adelaide', 10.50, 9.50, 9.50),
(35, 'AU', 'Australia/Brisbane', 10.00, 10.00, 10.00),
(36, 'AU', 'Australia/Broken_Hill', 10.50, 9.50, 9.50),
(37, 'AU', 'Australia/Currie', 11.00, 10.00, 10.00),
(38, 'AU', 'Australia/Darwin', 9.50, 9.50, 9.50),
(39, 'AU', 'Australia/Eucla', 8.75, 8.75, 8.75),
(40, 'AU', 'Australia/Hobart', 11.00, 10.00, 10.00),
(41, 'AU', 'Australia/Lindeman', 10.00, 10.00, 10.00),
(42, 'AU', 'Australia/Lord_Howe', 11.00, 10.50, 10.50),
(43, 'AU', 'Australia/Melbourne', 11.00, 10.00, 10.00),
(44, 'AU', 'Australia/Perth', 8.00, 8.00, 8.00),
(45, 'AU', 'Australia/Sydney', 11.00, 10.00, 10.00),
(46, 'AW', 'America/Aruba', -4.00, -4.00, -4.00),
(47, 'AX', 'Europe/Mariehamn', 2.00, 3.00, 2.00),
(48, 'AZ', 'Asia/Baku', 4.00, 5.00, 4.00),
(49, 'BA', 'Europe/Sarajevo', 1.00, 2.00, 1.00),
(50, 'BB', 'America/Barbados', -4.00, -4.00, -4.00),
(51, 'BD', 'Asia/Dhaka', 6.00, 6.00, 6.00),
(52, 'BE', 'Europe/Brussels', 1.00, 2.00, 1.00),
(53, 'BF', 'Africa/Ouagadougou', 0.00, 0.00, 0.00),
(54, 'BG', 'Europe/Sofia', 2.00, 3.00, 2.00),
(55, 'BH', 'Asia/Bahrain', 3.00, 3.00, 3.00),
(56, 'BI', 'Africa/Bujumbura', 2.00, 2.00, 2.00),
(57, 'BJ', 'Africa/Porto-Novo', 1.00, 1.00, 1.00),
(58, 'BL', 'America/St_Barthelemy', -4.00, -4.00, -4.00),
(59, 'BM', 'Atlantic/Bermuda', -4.00, -3.00, -4.00),
(60, 'BN', 'Asia/Brunei', 8.00, 8.00, 8.00),
(61, 'BO', 'America/La_Paz', -4.00, -4.00, -4.00),
(62, 'BQ', 'America/Kralendijk', -4.00, -4.00, -4.00),
(63, 'BR', 'America/Araguaina', -3.00, -3.00, -3.00),
(64, 'BR', 'America/Bahia', -3.00, -3.00, -3.00),
(65, 'BR', 'America/Belem', -3.00, -3.00, -3.00),
(66, 'BR', 'America/Boa_Vista', -4.00, -4.00, -4.00),
(67, 'BR', 'America/Campo_Grande', -3.00, -4.00, -4.00),
(68, 'BR', 'America/Cuiaba', -3.00, -4.00, -4.00),
(69, 'BR', 'America/Eirunepe', -5.00, -5.00, -5.00),
(70, 'BR', 'America/Fortaleza', -3.00, -3.00, -3.00),
(71, 'BR', 'America/Maceio', -3.00, -3.00, -3.00),
(72, 'BR', 'America/Manaus', -4.00, -4.00, -4.00),
(73, 'BR', 'America/Noronha', -2.00, -2.00, -2.00),
(74, 'BR', 'America/Porto_Velho', -4.00, -4.00, -4.00),
(75, 'BR', 'America/Recife', -3.00, -3.00, -3.00),
(76, 'BR', 'America/Rio_Branco', -5.00, -5.00, -5.00),
(77, 'BR', 'America/Santarem', -3.00, -3.00, -3.00),
(78, 'BR', 'America/Sao_Paulo', -2.00, -3.00, -3.00),
(79, 'BS', 'America/Nassau', -5.00, -4.00, -5.00),
(80, 'BT', 'Asia/Thimphu', 6.00, 6.00, 6.00),
(81, 'BW', 'Africa/Gaborone', 2.00, 2.00, 2.00),
(82, 'BY', 'Europe/Minsk', 3.00, 3.00, 3.00),
(83, 'BZ', 'America/Belize', -6.00, -6.00, -6.00),
(84, 'CA', 'America/Atikokan', -5.00, -5.00, -5.00),
(85, 'CA', 'America/Blanc-Sablon', -4.00, -4.00, -4.00),
(86, 'CA', 'America/Cambridge_Bay', -7.00, -6.00, -7.00),
(87, 'CA', 'America/Creston', -7.00, -7.00, -7.00),
(88, 'CA', 'America/Dawson', -8.00, -7.00, -8.00),
(89, 'CA', 'America/Dawson_Creek', -7.00, -7.00, -7.00),
(90, 'CA', 'America/Edmonton', -7.00, -6.00, -7.00),
(91, 'CA', 'America/Glace_Bay', -4.00, -3.00, -4.00),
(92, 'CA', 'America/Goose_Bay', -4.00, -3.00, -4.00),
(93, 'CA', 'America/Halifax', -4.00, -3.00, -4.00),
(94, 'CA', 'America/Inuvik', -7.00, -6.00, -7.00),
(95, 'CA', 'America/Iqaluit', -5.00, -4.00, -5.00),
(96, 'CA', 'America/Moncton', -4.00, -3.00, -4.00),
(97, 'CA', 'America/Montreal', -5.00, -4.00, -5.00),
(98, 'CA', 'America/Nipigon', -5.00, -4.00, -5.00),
(99, 'CA', 'America/Pangnirtung', -5.00, -4.00, -5.00),
(100, 'CA', 'America/Rainy_River', -6.00, -5.00, -6.00),
(101, 'CA', 'America/Rankin_Inlet', -6.00, -5.00, -6.00),
(102, 'CA', 'America/Regina', -6.00, -6.00, -6.00),
(103, 'CA', 'America/Resolute', -6.00, -5.00, -6.00),
(104, 'CA', 'America/St_Johns', -3.50, -2.50, -3.50),
(105, 'CA', 'America/Swift_Current', -6.00, -6.00, -6.00),
(106, 'CA', 'America/Thunder_Bay', -5.00, -4.00, -5.00),
(107, 'CA', 'America/Toronto', -5.00, -4.00, -5.00),
(108, 'CA', 'America/Vancouver', -8.00, -7.00, -8.00),
(109, 'CA', 'America/Whitehorse', -8.00, -7.00, -8.00),
(110, 'CA', 'America/Winnipeg', -6.00, -5.00, -6.00),
(111, 'CA', 'America/Yellowknife', -7.00, -6.00, -7.00),
(112, 'CC', 'Indian/Cocos', 6.50, 6.50, 6.50),
(113, 'CD', 'Africa/Kinshasa', 1.00, 1.00, 1.00),
(114, 'CD', 'Africa/Lubumbashi', 2.00, 2.00, 2.00),
(115, 'CF', 'Africa/Bangui', 1.00, 1.00, 1.00),
(116, 'CG', 'Africa/Brazzaville', 1.00, 1.00, 1.00),
(117, 'CH', 'Europe/Zurich', 1.00, 2.00, 1.00),
(118, 'CI', 'Africa/Abidjan', 0.00, 0.00, 0.00),
(119, 'CK', 'Pacific/Rarotonga', -10.00, -10.00, -10.00),
(120, 'CL', 'America/Santiago', -3.00, -4.00, -4.00),
(121, 'CL', 'Pacific/Easter', -5.00, -6.00, -6.00),
(122, 'CM', 'Africa/Douala', 1.00, 1.00, 1.00),
(123, 'CN', 'Asia/Chongqing', 8.00, 8.00, 8.00),
(124, 'CN', 'Asia/Harbin', 8.00, 8.00, 8.00),
(125, 'CN', 'Asia/Kashgar', 8.00, 8.00, 8.00),
(126, 'CN', 'Asia/Shanghai', 8.00, 8.00, 8.00),
(127, 'CN', 'Asia/Urumqi', 8.00, 8.00, 8.00),
(128, 'CO', 'America/Bogota', -5.00, -5.00, -5.00),
(129, 'CR', 'America/Costa_Rica', -6.00, -6.00, -6.00),
(130, 'CU', 'America/Havana', -5.00, -4.00, -5.00),
(131, 'CV', 'Atlantic/Cape_Verde', -1.00, -1.00, -1.00),
(132, 'CW', 'America/Curacao', -4.00, -4.00, -4.00),
(133, 'CX', 'Indian/Christmas', 7.00, 7.00, 7.00),
(134, 'CY', 'Asia/Nicosia', 2.00, 3.00, 2.00),
(135, 'CZ', 'Europe/Prague', 1.00, 2.00, 1.00),
(136, 'DE', 'Europe/Berlin', 1.00, 2.00, 1.00),
(137, 'DE', 'Europe/Busingen', 1.00, 2.00, 1.00),
(138, 'DJ', 'Africa/Djibouti', 3.00, 3.00, 3.00),
(139, 'DK', 'Europe/Copenhagen', 1.00, 2.00, 1.00),
(140, 'DM', 'America/Dominica', -4.00, -4.00, -4.00),
(141, 'DO', 'America/Santo_Domingo', -4.00, -4.00, -4.00),
(142, 'DZ', 'Africa/Algiers', 1.00, 1.00, 1.00),
(143, 'EC', 'America/Guayaquil', -5.00, -5.00, -5.00),
(144, 'EC', 'Pacific/Galapagos', -6.00, -6.00, -6.00),
(145, 'EE', 'Europe/Tallinn', 2.00, 3.00, 2.00),
(146, 'EG', 'Africa/Cairo', 2.00, 2.00, 2.00),
(147, 'EH', 'Africa/El_Aaiun', 0.00, 0.00, 0.00),
(148, 'ER', 'Africa/Asmara', 3.00, 3.00, 3.00),
(149, 'ES', 'Africa/Ceuta', 1.00, 2.00, 1.00),
(150, 'ES', 'Atlantic/Canary', 0.00, 1.00, 0.00),
(151, 'ES', 'Europe/Madrid', 1.00, 2.00, 1.00),
(152, 'ET', 'Africa/Addis_Ababa', 3.00, 3.00, 3.00),
(153, 'FI', 'Europe/Helsinki', 2.00, 3.00, 2.00),
(154, 'FJ', 'Pacific/Fiji', 13.00, 12.00, 12.00),
(155, 'FK', 'Atlantic/Stanley', -3.00, -3.00, -3.00),
(156, 'FM', 'Pacific/Chuuk', 10.00, 10.00, 10.00),
(157, 'FM', 'Pacific/Kosrae', 11.00, 11.00, 11.00),
(158, 'FM', 'Pacific/Pohnpei', 11.00, 11.00, 11.00),
(159, 'FO', 'Atlantic/Faroe', 0.00, 1.00, 0.00),
(160, 'FR', 'Europe/Paris', 1.00, 2.00, 1.00),
(161, 'GA', 'Africa/Libreville', 1.00, 1.00, 1.00),
(162, 'GB', 'Europe/London', 0.00, 1.00, 0.00),
(163, 'GD', 'America/Grenada', -4.00, -4.00, -4.00),
(164, 'GE', 'Asia/Tbilisi', 4.00, 4.00, 4.00),
(165, 'GF', 'America/Cayenne', -3.00, -3.00, -3.00),
(166, 'GG', 'Europe/Guernsey', 0.00, 1.00, 0.00),
(167, 'GH', 'Africa/Accra', 0.00, 0.00, 0.00),
(168, 'GI', 'Europe/Gibraltar', 1.00, 2.00, 1.00),
(169, 'GL', 'America/Danmarkshavn', 0.00, 0.00, 0.00),
(170, 'GL', 'America/Godthab', -3.00, -2.00, -3.00),
(171, 'GL', 'America/Scoresbysund', -1.00, 0.00, -1.00),
(172, 'GL', 'America/Thule', -4.00, -3.00, -4.00),
(173, 'GM', 'Africa/Banjul', 0.00, 0.00, 0.00),
(174, 'GN', 'Africa/Conakry', 0.00, 0.00, 0.00),
(175, 'GP', 'America/Guadeloupe', -4.00, -4.00, -4.00),
(176, 'GQ', 'Africa/Malabo', 1.00, 1.00, 1.00),
(177, 'GR', 'Europe/Athens', 2.00, 3.00, 2.00),
(178, 'GS', 'Atlantic/South_Georgia', -2.00, -2.00, -2.00),
(179, 'GT', 'America/Guatemala', -6.00, -6.00, -6.00),
(180, 'GU', 'Pacific/Guam', 10.00, 10.00, 10.00),
(181, 'GW', 'Africa/Bissau', 0.00, 0.00, 0.00),
(182, 'GY', 'America/Guyana', -4.00, -4.00, -4.00),
(183, 'HK', 'Asia/Hong_Kong', 8.00, 8.00, 8.00),
(184, 'HN', 'America/Tegucigalpa', -6.00, -6.00, -6.00),
(185, 'HR', 'Europe/Zagreb', 1.00, 2.00, 1.00),
(186, 'HT', 'America/Port-au-Prince', -5.00, -4.00, -5.00),
(187, 'HU', 'Europe/Budapest', 1.00, 2.00, 1.00),
(188, 'ID', 'Asia/Jakarta', 7.00, 7.00, 7.00),
(189, 'ID', 'Asia/Jayapura', 9.00, 9.00, 9.00),
(190, 'ID', 'Asia/Makassar', 8.00, 8.00, 8.00),
(191, 'ID', 'Asia/Pontianak', 7.00, 7.00, 7.00),
(192, 'IE', 'Europe/Dublin', 0.00, 1.00, 0.00),
(193, 'IL', 'Asia/Jerusalem', 2.00, 3.00, 2.00),
(194, 'IM', 'Europe/Isle_of_Man', 0.00, 1.00, 0.00),
(195, 'IN', 'Asia/Kolkata', 5.50, 5.50, 5.50),
(196, 'IO', 'Indian/Chagos', 6.00, 6.00, 6.00),
(197, 'IQ', 'Asia/Baghdad', 3.00, 3.00, 3.00),
(198, 'IR', 'Asia/Tehran', 3.50, 4.50, 3.50),
(199, 'IS', 'Atlantic/Reykjavik', 0.00, 0.00, 0.00),
(200, 'IT', 'Europe/Rome', 1.00, 2.00, 1.00),
(201, 'JE', 'Europe/Jersey', 0.00, 1.00, 0.00),
(202, 'JM', 'America/Jamaica', -5.00, -5.00, -5.00),
(203, 'JO', 'Asia/Amman', 2.00, 3.00, 2.00),
(204, 'JP', 'Asia/Tokyo', 9.00, 9.00, 9.00),
(205, 'KE', 'Africa/Nairobi', 3.00, 3.00, 3.00),
(206, 'KG', 'Asia/Bishkek', 6.00, 6.00, 6.00),
(207, 'KH', 'Asia/Phnom_Penh', 7.00, 7.00, 7.00),
(208, 'KI', 'Pacific/Enderbury', 13.00, 13.00, 13.00),
(209, 'KI', 'Pacific/Kiritimati', 14.00, 14.00, 14.00),
(210, 'KI', 'Pacific/Tarawa', 12.00, 12.00, 12.00),
(211, 'KM', 'Indian/Comoro', 3.00, 3.00, 3.00),
(212, 'KN', 'America/St_Kitts', -4.00, -4.00, -4.00),
(213, 'KP', 'Asia/Pyongyang', 9.00, 9.00, 9.00),
(214, 'KR', 'Asia/Seoul', 9.00, 9.00, 9.00),
(215, 'KW', 'Asia/Kuwait', 3.00, 3.00, 3.00),
(216, 'KY', 'America/Cayman', -5.00, -5.00, -5.00),
(217, 'KZ', 'Asia/Almaty', 6.00, 6.00, 6.00),
(218, 'KZ', 'Asia/Aqtau', 5.00, 5.00, 5.00),
(219, 'KZ', 'Asia/Aqtobe', 5.00, 5.00, 5.00),
(220, 'KZ', 'Asia/Oral', 5.00, 5.00, 5.00),
(221, 'KZ', 'Asia/Qyzylorda', 6.00, 6.00, 6.00),
(222, 'LA', 'Asia/Vientiane', 7.00, 7.00, 7.00),
(223, 'LB', 'Asia/Beirut', 2.00, 3.00, 2.00),
(224, 'LC', 'America/St_Lucia', -4.00, -4.00, -4.00),
(225, 'LI', 'Europe/Vaduz', 1.00, 2.00, 1.00),
(226, 'LK', 'Asia/Colombo', 5.50, 5.50, 5.50),
(227, 'LR', 'Africa/Monrovia', 0.00, 0.00, 0.00),
(228, 'LS', 'Africa/Maseru', 2.00, 2.00, 2.00),
(229, 'LT', 'Europe/Vilnius', 2.00, 3.00, 2.00),
(230, 'LU', 'Europe/Luxembourg', 1.00, 2.00, 1.00),
(231, 'LV', 'Europe/Riga', 2.00, 3.00, 2.00),
(232, 'LY', 'Africa/Tripoli', 2.00, 2.00, 2.00),
(233, 'MA', 'Africa/Casablanca', 0.00, 0.00, 0.00),
(234, 'MC', 'Europe/Monaco', 1.00, 2.00, 1.00),
(235, 'MD', 'Europe/Chisinau', 2.00, 3.00, 2.00),
(236, 'ME', 'Europe/Podgorica', 1.00, 2.00, 1.00),
(237, 'MF', 'America/Marigot', -4.00, -4.00, -4.00),
(238, 'MG', 'Indian/Antananarivo', 3.00, 3.00, 3.00),
(239, 'MH', 'Pacific/Kwajalein', 12.00, 12.00, 12.00),
(240, 'MH', 'Pacific/Majuro', 12.00, 12.00, 12.00),
(241, 'MK', 'Europe/Skopje', 1.00, 2.00, 1.00),
(242, 'ML', 'Africa/Bamako', 0.00, 0.00, 0.00),
(243, 'MM', 'Asia/Rangoon', 6.50, 6.50, 6.50),
(244, 'MN', 'Asia/Choibalsan', 8.00, 8.00, 8.00),
(245, 'MN', 'Asia/Hovd', 7.00, 7.00, 7.00),
(246, 'MN', 'Asia/Ulaanbaatar', 8.00, 8.00, 8.00),
(247, 'MO', 'Asia/Macau', 8.00, 8.00, 8.00),
(248, 'MP', 'Pacific/Saipan', 10.00, 10.00, 10.00),
(249, 'MQ', 'America/Martinique', -4.00, -4.00, -4.00),
(250, 'MR', 'Africa/Nouakchott', 0.00, 0.00, 0.00),
(251, 'MS', 'America/Montserrat', -4.00, -4.00, -4.00),
(252, 'MT', 'Europe/Malta', 1.00, 2.00, 1.00),
(253, 'MU', 'Indian/Mauritius', 4.00, 4.00, 4.00),
(254, 'MV', 'Indian/Maldives', 5.00, 5.00, 5.00),
(255, 'MW', 'Africa/Blantyre', 2.00, 2.00, 2.00),
(256, 'MX', 'America/Bahia_Banderas', -6.00, -5.00, -6.00),
(257, 'MX', 'America/Cancun', -6.00, -5.00, -6.00),
(258, 'MX', 'America/Chihuahua', -7.00, -6.00, -7.00),
(259, 'MX', 'America/Hermosillo', -7.00, -7.00, -7.00),
(260, 'MX', 'America/Matamoros', -6.00, -5.00, -6.00),
(261, 'MX', 'America/Mazatlan', -7.00, -6.00, -7.00),
(262, 'MX', 'America/Merida', -6.00, -5.00, -6.00),
(263, 'MX', 'America/Mexico_City', -6.00, -5.00, -6.00),
(264, 'MX', 'America/Monterrey', -6.00, -5.00, -6.00),
(265, 'MX', 'America/Ojinaga', -7.00, -6.00, -7.00),
(266, 'MX', 'America/Santa_Isabel', -8.00, -7.00, -8.00),
(267, 'MX', 'America/Tijuana', -8.00, -7.00, -8.00),
(268, 'MY', 'Asia/Kuala_Lumpur', 8.00, 8.00, 8.00),
(269, 'MY', 'Asia/Kuching', 8.00, 8.00, 8.00),
(270, 'MZ', 'Africa/Maputo', 2.00, 2.00, 2.00),
(271, 'NA', 'Africa/Windhoek', 2.00, 1.00, 1.00),
(272, 'NC', 'Pacific/Noumea', 11.00, 11.00, 11.00),
(273, 'NE', 'Africa/Niamey', 1.00, 1.00, 1.00),
(274, 'NF', 'Pacific/Norfolk', 11.50, 11.50, 11.50),
(275, 'NG', 'Africa/Lagos', 1.00, 1.00, 1.00),
(276, 'NI', 'America/Managua', -6.00, -6.00, -6.00),
(277, 'NL', 'Europe/Amsterdam', 1.00, 2.00, 1.00),
(278, 'NO', 'Europe/Oslo', 1.00, 2.00, 1.00),
(279, 'NP', 'Asia/Kathmandu', 5.75, 5.75, 5.75),
(280, 'NR', 'Pacific/Nauru', 12.00, 12.00, 12.00),
(281, 'NU', 'Pacific/Niue', -11.00, -11.00, -11.00),
(282, 'NZ', 'Pacific/Auckland', 13.00, 12.00, 12.00),
(283, 'NZ', 'Pacific/Chatham', 13.75, 12.75, 12.75),
(284, 'OM', 'Asia/Muscat', 4.00, 4.00, 4.00),
(285, 'PA', 'America/Panama', -5.00, -5.00, -5.00),
(286, 'PE', 'America/Lima', -5.00, -5.00, -5.00),
(287, 'PF', 'Pacific/Gambier', -9.00, -9.00, -9.00),
(288, 'PF', 'Pacific/Marquesas', -9.50, -9.50, -9.50),
(289, 'PF', 'Pacific/Tahiti', -10.00, -10.00, -10.00),
(290, 'PG', 'Pacific/Port_Moresby', 10.00, 10.00, 10.00),
(291, 'PH', 'Asia/Manila', 8.00, 8.00, 8.00),
(292, 'PK', 'Asia/Karachi', 5.00, 5.00, 5.00),
(293, 'PL', 'Europe/Warsaw', 1.00, 2.00, 1.00),
(294, 'PM', 'America/Miquelon', -3.00, -2.00, -3.00),
(295, 'PN', 'Pacific/Pitcairn', -8.00, -8.00, -8.00),
(296, 'PR', 'America/Puerto_Rico', -4.00, -4.00, -4.00),
(297, 'PS', 'Asia/Gaza', 2.00, 3.00, 2.00),
(298, 'PS', 'Asia/Hebron', 2.00, 3.00, 2.00),
(299, 'PT', 'Atlantic/Azores', -1.00, 0.00, -1.00),
(300, 'PT', 'Atlantic/Madeira', 0.00, 1.00, 0.00),
(301, 'PT', 'Europe/Lisbon', 0.00, 1.00, 0.00),
(302, 'PW', 'Pacific/Palau', 9.00, 9.00, 9.00),
(303, 'PY', 'America/Asuncion', -3.00, -4.00, -4.00),
(304, 'QA', 'Asia/Qatar', 3.00, 3.00, 3.00),
(305, 'RE', 'Indian/Reunion', 4.00, 4.00, 4.00),
(306, 'RO', 'Europe/Bucharest', 2.00, 3.00, 2.00),
(307, 'RS', 'Europe/Belgrade', 1.00, 2.00, 1.00),
(308, 'RU', 'Asia/Anadyr', 12.00, 12.00, 12.00),
(309, 'RU', 'Asia/Irkutsk', 9.00, 9.00, 9.00),
(310, 'RU', 'Asia/Kamchatka', 12.00, 12.00, 12.00),
(311, 'RU', 'Asia/Khandyga', 10.00, 10.00, 10.00),
(312, 'RU', 'Asia/Krasnoyarsk', 8.00, 8.00, 8.00),
(313, 'RU', 'Asia/Magadan', 12.00, 12.00, 12.00),
(314, 'RU', 'Asia/Novokuznetsk', 7.00, 7.00, 7.00),
(315, 'RU', 'Asia/Novosibirsk', 7.00, 7.00, 7.00),
(316, 'RU', 'Asia/Omsk', 7.00, 7.00, 7.00),
(317, 'RU', 'Asia/Sakhalin', 11.00, 11.00, 11.00),
(318, 'RU', 'Asia/Ust-Nera', 11.00, 11.00, 11.00),
(319, 'RU', 'Asia/Vladivostok', 11.00, 11.00, 11.00),
(320, 'RU', 'Asia/Yakutsk', 10.00, 10.00, 10.00),
(321, 'RU', 'Asia/Yekaterinburg', 6.00, 6.00, 6.00),
(322, 'RU', 'Europe/Kaliningrad', 3.00, 3.00, 3.00),
(323, 'RU', 'Europe/Moscow', 4.00, 4.00, 4.00),
(324, 'RU', 'Europe/Samara', 4.00, 4.00, 4.00),
(325, 'RU', 'Europe/Volgograd', 4.00, 4.00, 4.00),
(326, 'RW', 'Africa/Kigali', 2.00, 2.00, 2.00),
(327, 'SA', 'Asia/Riyadh', 3.00, 3.00, 3.00),
(328, 'SB', 'Pacific/Guadalcanal', 11.00, 11.00, 11.00),
(329, 'SC', 'Indian/Mahe', 4.00, 4.00, 4.00),
(330, 'SD', 'Africa/Khartoum', 3.00, 3.00, 3.00),
(331, 'SE', 'Europe/Stockholm', 1.00, 2.00, 1.00),
(332, 'SG', 'Asia/Singapore', 8.00, 8.00, 8.00),
(333, 'SH', 'Atlantic/St_Helena', 0.00, 0.00, 0.00),
(334, 'SI', 'Europe/Ljubljana', 1.00, 2.00, 1.00),
(335, 'SJ', 'Arctic/Longyearbyen', 1.00, 2.00, 1.00),
(336, 'SK', 'Europe/Bratislava', 1.00, 2.00, 1.00),
(337, 'SL', 'Africa/Freetown', 0.00, 0.00, 0.00),
(338, 'SM', 'Europe/San_Marino', 1.00, 2.00, 1.00),
(339, 'SN', 'Africa/Dakar', 0.00, 0.00, 0.00),
(340, 'SO', 'Africa/Mogadishu', 3.00, 3.00, 3.00),
(341, 'SR', 'America/Paramaribo', -3.00, -3.00, -3.00),
(342, 'SS', 'Africa/Juba', 3.00, 3.00, 3.00),
(343, 'ST', 'Africa/Sao_Tome', 0.00, 0.00, 0.00),
(344, 'SV', 'America/El_Salvador', -6.00, -6.00, -6.00),
(345, 'SX', 'America/Lower_Princes', -4.00, -4.00, -4.00),
(346, 'SY', 'Asia/Damascus', 2.00, 3.00, 2.00),
(347, 'SZ', 'Africa/Mbabane', 2.00, 2.00, 2.00),
(348, 'TC', 'America/Grand_Turk', -5.00, -4.00, -5.00),
(349, 'TD', 'Africa/Ndjamena', 1.00, 1.00, 1.00),
(350, 'TF', 'Indian/Kerguelen', 5.00, 5.00, 5.00),
(351, 'TG', 'Africa/Lome', 0.00, 0.00, 0.00),
(352, 'TH', 'Asia/Bangkok', 7.00, 7.00, 7.00),
(353, 'TJ', 'Asia/Dushanbe', 5.00, 5.00, 5.00),
(354, 'TK', 'Pacific/Fakaofo', 13.00, 13.00, 13.00),
(355, 'TL', 'Asia/Dili', 9.00, 9.00, 9.00),
(356, 'TM', 'Asia/Ashgabat', 5.00, 5.00, 5.00),
(357, 'TN', 'Africa/Tunis', 1.00, 1.00, 1.00),
(358, 'TO', 'Pacific/Tongatapu', 13.00, 13.00, 13.00),
(359, 'TR', 'Europe/Istanbul', 2.00, 3.00, 2.00),
(360, 'TT', 'America/Port_of_Spain', -4.00, -4.00, -4.00),
(361, 'TV', 'Pacific/Funafuti', 12.00, 12.00, 12.00),
(362, 'TW', 'Asia/Taipei', 8.00, 8.00, 8.00),
(363, 'TZ', 'Africa/Dar_es_Salaam', 3.00, 3.00, 3.00),
(364, 'UA', 'Europe/Kiev', 2.00, 3.00, 2.00),
(365, 'UA', 'Europe/Simferopol', 2.00, 4.00, 4.00),
(366, 'UA', 'Europe/Uzhgorod', 2.00, 3.00, 2.00),
(367, 'UA', 'Europe/Zaporozhye', 2.00, 3.00, 2.00),
(368, 'UG', 'Africa/Kampala', 3.00, 3.00, 3.00),
(369, 'UM', 'Pacific/Johnston', -10.00, -10.00, -10.00),
(370, 'UM', 'Pacific/Midway', -11.00, -11.00, -11.00),
(371, 'UM', 'Pacific/Wake', 12.00, 12.00, 12.00),
(372, 'US', 'America/Adak', -10.00, -9.00, -10.00),
(373, 'US', 'America/Anchorage', -9.00, -8.00, -9.00),
(374, 'US', 'America/Boise', -7.00, -6.00, -7.00),
(375, 'US', 'America/Chicago', -6.00, -5.00, -6.00),
(376, 'US', 'America/Denver', -7.00, -6.00, -7.00),
(377, 'US', 'America/Detroit', -5.00, -4.00, -5.00),
(378, 'US', 'America/Indiana/Indianapolis', -5.00, -4.00, -5.00),
(379, 'US', 'America/Indiana/Knox', -6.00, -5.00, -6.00),
(380, 'US', 'America/Indiana/Marengo', -5.00, -4.00, -5.00),
(381, 'US', 'America/Indiana/Petersburg', -5.00, -4.00, -5.00),
(382, 'US', 'America/Indiana/Tell_City', -6.00, -5.00, -6.00),
(383, 'US', 'America/Indiana/Vevay', -5.00, -4.00, -5.00),
(384, 'US', 'America/Indiana/Vincennes', -5.00, -4.00, -5.00),
(385, 'US', 'America/Indiana/Winamac', -5.00, -4.00, -5.00),
(386, 'US', 'America/Juneau', -9.00, -8.00, -9.00),
(387, 'US', 'America/Kentucky/Louisville', -5.00, -4.00, -5.00),
(388, 'US', 'America/Kentucky/Monticello', -5.00, -4.00, -5.00),
(389, 'US', 'America/Los_Angeles', -8.00, -7.00, -8.00),
(390, 'US', 'America/Menominee', -6.00, -5.00, -6.00),
(391, 'US', 'America/Metlakatla', -8.00, -8.00, -8.00),
(392, 'US', 'America/New_York', -5.00, -4.00, -5.00),
(393, 'US', 'America/Nome', -9.00, -8.00, -9.00),
(394, 'US', 'America/North_Dakota/Beulah', -6.00, -5.00, -6.00),
(395, 'US', 'America/North_Dakota/Center', -6.00, -5.00, -6.00),
(396, 'US', 'America/North_Dakota/New_Salem', -6.00, -5.00, -6.00),
(397, 'US', 'America/Phoenix', -7.00, -7.00, -7.00),
(398, 'US', 'America/Shiprock', -7.00, -6.00, -7.00),
(399, 'US', 'America/Sitka', -9.00, -8.00, -9.00),
(400, 'US', 'America/Yakutat', -9.00, -8.00, -9.00),
(401, 'US', 'Pacific/Honolulu', -10.00, -10.00, -10.00),
(402, 'UY', 'America/Montevideo', -2.00, -3.00, -3.00),
(403, 'UZ', 'Asia/Samarkand', 5.00, 5.00, 5.00),
(404, 'UZ', 'Asia/Tashkent', 5.00, 5.00, 5.00),
(405, 'VA', 'Europe/Vatican', 1.00, 2.00, 1.00),
(406, 'VC', 'America/St_Vincent', -4.00, -4.00, -4.00),
(407, 'VE', 'America/Caracas', -4.50, -4.50, -4.50),
(408, 'VG', 'America/Tortola', -4.00, -4.00, -4.00),
(409, 'VI', 'America/St_Thomas', -4.00, -4.00, -4.00),
(410, 'VN', 'Asia/Ho_Chi_Minh', 7.00, 7.00, 7.00),
(411, 'VU', 'Pacific/Efate', 11.00, 11.00, 11.00),
(412, 'WF', 'Pacific/Wallis', 12.00, 12.00, 12.00),
(413, 'WS', 'Pacific/Apia', 14.00, 13.00, 13.00),
(414, 'YE', 'Asia/Aden', 3.00, 3.00, 3.00),
(415, 'YT', 'Indian/Mayotte', 3.00, 3.00, 3.00),
(416, 'ZA', 'Africa/Johannesburg', 2.00, 2.00, 2.00),
(417, 'ZM', 'Africa/Lusaka', 2.00, 2.00, 2.00),
(418, 'ZW', 'Africa/Harare', 2.00, 2.00, 2.00);

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_holidays`
--

CREATE TABLE `upcoming_holidays` (
  `id` int(11) NOT NULL,
  `comp_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holiday_date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upcoming_holidays`
--

INSERT INTO `upcoming_holidays` (`id`, `comp_id`, `name`, `holiday_date`, `description`, `created_by`, `status`, `created_date`, `updated_date`) VALUES
(1, 'COMP11123', 'Test', '2022-11-30', 'test', 2, 1, '2022-11-28 07:40:23', '2022-11-28 09:52:04'),
(3, 'COMP11123', 'Test2', '2022-11-29', 'Test2', 2, 1, '2022-11-28 09:52:37', '0000-00-00 00:00:00'),
(4, 'COMP11123', 'Test25', '2022-11-25', 'Test2', 2, 1, '2022-11-28 09:52:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `emp_id` varchar(50) CHARACTER SET utf8 NOT NULL,
  `comp_id` varchar(50) NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '3=superAdmin,2=admin,1=employee',
  `username` varchar(100) NOT NULL,
  `first_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pw` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `local_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `user_role` varchar(30) NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `basic_salary` float(100,2) NOT NULL,
  `hourly_rate` float(100,2) NOT NULL,
  `credit_leaves` int(11) NOT NULL,
  `leave_date` date NOT NULL,
  `leave_opening_el` int(11) NOT NULL,
  `leave_el` int(11) NOT NULL,
  `leave_cl` int(11) NOT NULL,
  `leave_optional` int(11) NOT NULL,
  `leave_compOff` int(11) NOT NULL,
  `optional_leaves` int(11) NOT NULL,
  `casual_leaves` int(11) NOT NULL,
  `date_of_joining` varchar(100) NOT NULL,
  `reporting` text NOT NULL,
  `payslip` varchar(100) NOT NULL,
  `PAN_no` varchar(255) NOT NULL,
  `AADHAR_no` varchar(255) NOT NULL,
  `ESIC` varchar(255) NOT NULL,
  `UAN_no` varchar(255) NOT NULL,
  `gross` varchar(50) NOT NULL,
  `variable_pay` varchar(50) NOT NULL,
  `retention_bonus` varchar(50) NOT NULL,
  `incentive` varchar(50) NOT NULL,
  `net_ctc` varchar(50) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=active',
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL COMMENT '1=deleted',
  `logged_in` int(11) NOT NULL,
  `terminate` int(11) NOT NULL,
  `termination_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `emp_id`, `comp_id`, `user_type`, `username`, `first_name`, `last_name`, `father_name`, `email`, `phone`, `password`, `pw`, `gender`, `dob`, `country`, `local_address`, `permanent_address`, `user_role`, `department_id`, `designation_id`, `basic_salary`, `hourly_rate`, `credit_leaves`, `leave_date`, `leave_opening_el`, `leave_el`, `leave_cl`, `leave_optional`, `leave_compOff`, `optional_leaves`, `casual_leaves`, `date_of_joining`, `reporting`, `payslip`, `PAN_no`, `AADHAR_no`, `ESIC`, `UAN_no`, `gross`, `variable_pay`, `retention_bonus`, `incentive`, `net_ctc`, `profile_img`, `admin_id`, `status`, `created_by`, `created_at`, `updated_at`, `is_deleted`, `logged_in`, `terminate`, `termination_date`) VALUES
(1, 'SUPER11', 'SUPER11', 3, 'SuperAdmin', 'Aakansha', 'Jain', '', 'superadmin@gmail.com', '9879879879', '$2y$10$tFb3q6BsfEbmCV1SQaJgPeXpytm0sJXBcBZF021ZNsI2dwTXpqEdi', '123456', 'Female', '', '', '10, migs colony', '10,migs, gitabhavan', '', 0, 0, 0.00, 0.00, 0, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '8bd38701c9282748100940222cc8d5985.jpg.jpg', 0, 1, 0, '2022-12-27 14:00:02', '2022-11-22 06:18:03', 0, 0, 0, '0000-00-00'),
(2, 'COMP11123', 'COMP11123', 2, 'Aakansha', 'Aakansha', 'Jain', 'Test2', 'admin@gmail.com', '9039677154', '$2y$10$bWhWuPaw3yd7X94mHYllGO5OkY6d8sj9nZm5.sCKLuw3WXJbkSVH6', '123456', 'Female', '2022-07-01', '', '10', '10', '', 0, 0, 0.00, 0.00, 0, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 'c3a32819a3e9ad510e00c6e96a99694d5.jpg.jpg', 0, 1, 0, '2022-12-27 14:00:08', '2022-09-27 11:52:59', 0, 0, 0, '0000-00-00'),
(6, 'EB111', 'COMP11123', 1, '', 'amit', 'Kumar', 'Dinesh Prasad', 'alok@yopmail.com', '9074857981', '$2y$10$CNwuyeG3fOBbfVC80/1R6Oja1wsYoPi45ogUxFWTEGMG68.2S3/py', '', 'Male', '1993-08-18', '', 'Indore', 'Indore', '', 5, 4, 35000.00, 300.00, 26, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, '2022-07-05', 'brajesh@gmail.com', '', '', '', '', '', '12000', '1200', '1200', '12000', '12000', '1267fa15c0fea330cdac63cb7d4940f0vlcsnap-2018-02-02-23h46m39s393.png.jpg', 0, 1, 0, '2023-01-14 07:01:34', '2023-01-14 07:01:34', 0, 0, 0, '0000-00-00'),
(8, 'EB112', 'COMP11123', 1, '', 'Akki', 'Jain', 'Test1', 'jainaaka@gmail.com', '9039677154', '$2y$10$tFb3q6BsfEbmCV1SQaJgPeXpytm0sJXBcBZF021ZNsI2dwTXpqEdi', '123456', 'Female', '2002-08-05', '', ' 210-G, Rajdhani Apartment', ' 210-G, Rajdhani Apartment                                                             Preet Vihar, Delhi, 110092 ', '', 1, 1, 50000.00, 1000.00, 12, '0000-00-00', 12, 4, 4, 4, 0, 0, 0, '2011-01-08', '', '', '', '', '', '', '100000', '10000', '10000', '10000', '1000000', '173e4d13106ea23c42d158e6c3a59dfe6.jpg.jpg', 0, 1, 0, '2022-12-27 14:00:20', '2022-12-21 12:12:46', 0, 0, 0, '0000-00-00'),
(9, 'EB115', 'COMP11123', 1, '', 'Demo', 'demo', 'test', 'demo@gmail.com', '9039677155', '$2y$10$tFb3q6BsfEbmCV1SQaJgPeXpytm0sJXBcBZF021ZNsI2dwTXpqEdi', '123456', 'Female', '2022-06-28', '', 'demo@gmail.com', '10', '', 5, 4, 50000.00, 1000.00, 5, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, '2022-06-06', '', '', '', '', '', '', '', '', '', '', '', 'd47288e6c0d25bc42ee58322a87e4c606.jpg.jpg', 0, 1, 0, '2022-12-27 14:20:23', '2022-07-19 01:56:37', 0, 0, 0, '0000-00-00'),
(15, 'EB113', 'COMP11123', 1, '', 'test', 'test2', 'Test', 'test1@gmail.com', '9874563217', '$2y$10$tFb3q6BsfEbmCV1SQaJgPeXpytm0sJXBcBZF021ZNsI2dwTXpqEdi', '123456', 'Male', '2022-08-04', '', '10', '10', '', 3, 6, 0.00, 0.00, 10, '2021-01-01', 10, 2, 2, 6, 2, 0, 0, '2021-01-19', '', '', '11111', '1111111111111', '11111111111', '123654789654', '', '', '', '', '', 'f52b934d94442884d7b3b4e0cf5d8ba15.jpg.jpg', 0, 1, 0, '2022-12-27 14:20:27', '2022-11-17 09:15:43', 0, 0, 0, '0000-00-00'),
(33, 'COM96421', 'COM96421', 2, '', 'Kalyani', 'Dhamdhere', '', 'Info1@kalcy.in', '8308827651', '$2y$10$tFb3q6BsfEbmCV1SQaJgPeXpytm0sJXBcBZF021ZNsI2dwTXpqEdi', '123456', 'Female', '', '', 'Bhairavnath Complex, Tukai Darshan, Hadapsar - Saswad Road,', '', '', 0, 0, 0.00, 0.00, 0, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '62163065bcb224d0eb464a5338b21860Kalcy Logo 100x82.png.jpg', 0, 2, 1, '2022-12-27 14:21:35', '2022-12-26 09:26:01', 1, 0, 0, '0000-00-00'),
(41, 'COM45981', 'COM45981', 2, '', 'Kalyani', 'Dhamdhere', '', 'info@kalcy.in', '', '$2y$10$tFb3q6BsfEbmCV1SQaJgPeXpytm0sJXBcBZF021ZNsI2dwTXpqEdi', '123456', '', '', '', '', '', '', 0, 0, 0.00, 0.00, 0, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 'a3806a331f7a9c471315e18cc74c8cf0KalcyLogo.png.jpg', 0, 2, 1, '2023-01-03 08:24:59', '0000-00-00 00:00:00', 1, 0, 0, '0000-00-00'),
(42, 'COM82491', 'COM82491', 2, '', 'Kalyani', 'Ramesh', '', 'director@kalcy.in', '9970827651', '$2y$10$o/HRlfJFGOrh3Gu31ryiX.9B4DMv69PnCW.NdySFZAYjhSqeNti1W', '2511', 'Female', '1986-07-25', '', 'Hadapsar, Pune', 'Hadapsar, Pune', '', 0, 0, 0.00, 0.00, 0, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '23e74a309d462a7d82cd105ad0065617KalcyLogo.jpg.jpg', 0, 1, 1, '2023-01-03 08:28:11', '2023-01-03 08:28:11', 0, 0, 0, '0000-00-00'),
(43, 'EMP57472', 'COMP11123', 1, '', 'brajesh', 'vaishnav', 'ramesh chandra', 'brajesh@gmail.com', '9098343935', '$2y$10$P63PXCSxl/L6lCIjl05se.ssmbqma8OBOylMtsV1A.2fcaBx8hT.C', '123456', 'Male', '1990-01-10', '', 'indore', 'indore', '', 3, 6, 0.00, 0.00, 10, '0000-00-00', 1, 1, 1, 1, 1, 0, 0, '2023-12-01', '', '', '', '', '', '123', '100000', '80000', '5000', '5000', '10000', 'a4fa17ddd23b27b2713997cb168e193csignin-image.jpg.jpg', 0, 1, 0, '2023-01-13 18:10:44', '2023-01-13 11:10:44', 0, 0, 0, '0000-00-00'),
(44, 'COM18511', 'COM18511', 2, '', 'Manish', 'Giri', '', 'iris@gmail.com', '', '$2y$10$UZNxfw7AtBi6UKGQlPtJT.zVqkNZ5GyTaOeHot/93Wd8CiTb7Z7sO', '123456', '', '', '', '', '', '', 0, 0, 0.00, 0.00, 0, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 'f114c3d417fe026b989f6a7a515b7b6ecoding2.png.jpg', 0, 1, 1, '2023-03-01 07:45:55', '0000-00-00 00:00:00', 0, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_bank_detail`
--

CREATE TABLE `user_bank_detail` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_holder_name` varchar(50) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `bank_ifsc_code` varchar(50) NOT NULL,
  `branch_location` varchar(50) NOT NULL,
  `tax_payer_id` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_bank_detail`
--

INSERT INTO `user_bank_detail` (`id`, `user_id`, `account_holder_name`, `account_number`, `bank_name`, `bank_ifsc_code`, `branch_location`, `tax_payer_id`, `created_at`, `updated_at`) VALUES
(3, 6, 'Amit Kumar', '673547324623', 'Select bank', 'SBI123', 'INDORE', '23453455', '2023-01-14 14:01:34', '2023-01-14 07:01:34'),
(5, 8, 'Aakansha Jain', '1111222233334444', 'Select bank', 'SBI123', 'Indore', 'test', '2022-12-22 13:27:07', '2022-12-02 05:29:35'),
(6, 9, 'Demo', '1111999911119999', 'SBI', 'SBI123', 'Indore', 'test', '2022-07-15 18:55:40', '2022-07-15 11:55:40'),
(7, 10, 'Demo', '1111999911119999', 'SBI', 'SBI123', 'Indore', 'test', '2022-07-15 18:57:15', '2022-07-15 11:57:15'),
(11, 13, 'Aka Jain', '1111999911119999', 'SYNDICATE BANK', '', 'Indore', 'test', '2022-09-30 17:38:32', '2022-09-30 10:38:32'),
(12, 15, 'Demo', '1111999911119999', 'IDBI BANK', 'SBI123', 'Indore', 'test', '2022-11-17 16:15:43', '2022-11-17 09:15:43'),
(21, 24, 'Aakansha Jain', '1111999911119999', 'ALLAHABAD BANK', 'SBI123', 'Indore', 'test', '2022-11-17 17:01:44', '2022-11-17 10:01:44'),
(28, 34, 'aaa12 Jain', '1111999911119999', 'HDFC BANK', 'SBI123', 'Indore', 'test', '2022-12-19 18:39:00', '2022-12-19 11:39:00'),
(29, 35, 'Aakansha Jain', '1111999911119999', 'HDFC BANK', 'SBI123', 'Indore', 'test', '2022-12-19 18:41:26', '2022-12-19 11:41:26'),
(30, 36, 'Aakansha Jain', '1111999911119999', 'ALLAHABAD BANK', 'SBI123', 'Indore', 'test', '2022-12-19 18:48:56', '2022-12-19 11:48:56'),
(31, 43, 'brajesh', '123', 'STATE BANK OF INDIA', '432001', 'indore', '123', '2023-01-13 18:10:44', '2023-01-13 11:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `user_document`
--

CREATE TABLE `user_document` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `offer_letter` varchar(255) NOT NULL,
  `joining_letter` varchar(255) NOT NULL,
  `contract_letter` varchar(100) NOT NULL,
  `id_proof` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_document`
--

INSERT INTO `user_document` (`id`, `user_id`, `resume`, `offer_letter`, `joining_letter`, `contract_letter`, `id_proof`, `created_at`, `updated_at`) VALUES
(1, 1, '', '', '', '', '', '2022-11-17 17:01:44', '0000-00-00 00:00:00'),
(2, 1, '', '', '', '', '', '2022-11-17 17:27:45', '0000-00-00 00:00:00'),
(3, 34, 'f9c6bf1ffb1e8e580addc5f875c5ca3a.jpg', '', '', '', 'f9c6bf1ffb1e8e580addc5f875c5ca3a.jpg', '2022-12-19 18:39:00', '0000-00-00 00:00:00'),
(4, 35, 'a6004038ab02d0404f01b0f3742655df.jpg', '', '', '', 'a6004038ab02d0404f01b0f3742655df.jpg', '2022-12-19 18:41:26', '0000-00-00 00:00:00'),
(5, 1, '', '', '', '', '', '2022-12-19 18:48:56', '0000-00-00 00:00:00'),
(6, 43, 'a4fa17ddd23b27b2713997cb168e193clogin.jpg.jpg', '', '', '', 'a4fa17ddd23b27b2713997cb168e193csignup-image.jpg.jpg', '2023-01-13 11:10:44', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_type`
--
ALTER TABLE `account_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compoff_emp_leaves`
--
ALTER TABLE `compoff_emp_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comp_general_options`
--
ALTER TABLE `comp_general_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comp_password_option`
--
ALTER TABLE `comp_password_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comp_sequence_numbers`
--
ALTER TABLE `comp_sequence_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_attendance`
--
ALTER TABLE `emp_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_expense_claims`
--
ALTER TABLE `emp_expense_claims`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_leaves`
--
ALTER TABLE `emp_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_types`
--
ALTER TABLE `expense_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_category`
--
ALTER TABLE `faq_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_vacancies`
--
ALTER TABLE `job_vacancies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_type`
--
ALTER TABLE `leave_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_breakup`
--
ALTER TABLE `offer_breakup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overtime_request`
--
ALTER TABLE `overtime_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_settings`
--
ALTER TABLE `payment_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timezone`
--
ALTER TABLE `timezone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_holidays`
--
ALTER TABLE `upcoming_holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_bank_detail`
--
ALTER TABLE `user_bank_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_document`
--
ALTER TABLE `user_document`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_type`
--
ALTER TABLE `account_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127567;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `compoff_emp_leaves`
--
ALTER TABLE `compoff_emp_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comp_general_options`
--
ALTER TABLE `comp_general_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comp_password_option`
--
ALTER TABLE `comp_password_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comp_sequence_numbers`
--
ALTER TABLE `comp_sequence_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_attendance`
--
ALTER TABLE `emp_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emp_expense_claims`
--
ALTER TABLE `emp_expense_claims`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `emp_leaves`
--
ALTER TABLE `emp_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `expense_types`
--
ALTER TABLE `expense_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faq_category`
--
ALTER TABLE `faq_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_vacancies`
--
ALTER TABLE `job_vacancies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `leave_type`
--
ALTER TABLE `leave_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `offer_breakup`
--
ALTER TABLE `offer_breakup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `overtime_request`
--
ALTER TABLE `overtime_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_settings`
--
ALTER TABLE `payment_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timezone`
--
ALTER TABLE `timezone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=419;

--
-- AUTO_INCREMENT for table `upcoming_holidays`
--
ALTER TABLE `upcoming_holidays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user_bank_detail`
--
ALTER TABLE `user_bank_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_document`
--
ALTER TABLE `user_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
