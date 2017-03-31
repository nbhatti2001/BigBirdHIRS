-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2017 at 06:26 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `payroll_15112016`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE IF NOT EXISTS `banks` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(100) DEFAULT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `is_active`, `user_id`, `created`, `modified`) VALUES
(1, 'Big Bird Poultry Breeders (PVT.) LTD.', 1, NULL, '2016-12-28', '2016-12-28'),
(2, 'Big Feed (PVT.) LTD.', 1, NULL, '2016-12-28', '2016-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` smallint(6) NOT NULL DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `company_id` smallint(6) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `company_id`, `user_id`, `created`, `modified`, `modified_by`, `is_active`) VALUES
(1001, 'ACCOUNTS DEPARTMENT', 3, NULL, NULL, NULL, NULL, 1),
(1002, 'SALES DEPARTMENT', 3, NULL, NULL, NULL, NULL, 1),
(1003, 'PRODUCTION HATCHERY', 3, NULL, NULL, NULL, NULL, 1),
(1004, 'ADMIN DEPARTMENT', 3, NULL, NULL, NULL, NULL, 1),
(1005, 'PRODUCTION WORKER', 3, NULL, NULL, NULL, NULL, 1),
(1008, 'PRODUCTION STAFF', 3, NULL, NULL, NULL, NULL, 1),
(1009, 'MARKETING AND SALES', 3, NULL, NULL, NULL, NULL, 1),
(1010, 'ENGINEERING & MAINTENANCE', 3, NULL, NULL, NULL, NULL, 1),
(1011, 'PROCESSING PLANT', 3, NULL, NULL, NULL, NULL, 1),
(1012, 'PROCUREMENT & STORES', 3, NULL, NULL, NULL, NULL, 1),
(1013, 'HUMAN RESOURCE', 3, NULL, NULL, NULL, NULL, 1),
(1014, 'I.T. DEPARTMENT', 3, NULL, NULL, NULL, NULL, 1),
(1015, 'PRIMARY PROCESSING (LIVE BIRD', 3, NULL, NULL, NULL, NULL, 1),
(1016, 'PRIMARY PROCESSING (DEBONING)', 3, NULL, NULL, NULL, NULL, 1),
(1017, 'FURTHER PROCESSING (REGULAR LI', 3, NULL, NULL, NULL, NULL, 1),
(1018, 'SALE & VACCINATION', 3, NULL, NULL, NULL, NULL, 1),
(1019, 'DISTRIBUTION', 3, NULL, NULL, NULL, NULL, 1),
(1020, 'FURTHER PROCESSING (TRADITIONA', 3, NULL, NULL, NULL, NULL, 1),
(1021, 'ENGINEERING (REFRIGERATION & U', 3, NULL, NULL, NULL, NULL, 1),
(1022, 'ENGINEERING (E&I)', 3, NULL, NULL, NULL, NULL, 1),
(1023, 'ENGINEERING (ELECTRICAL)', 3, NULL, NULL, NULL, NULL, 1),
(1024, 'ENGINEERING (BOILER)', 3, NULL, NULL, NULL, NULL, 1),
(1025, 'QUALITY', 3, NULL, NULL, NULL, NULL, 1),
(1026, 'R&D', 3, NULL, NULL, NULL, NULL, 1),
(1027, 'SUPPLY CHAIN (WAREHOUSE)', 3, NULL, NULL, NULL, NULL, 1),
(1028, 'SUPPLY CHAIN (DISTRIBUTION & L', 3, NULL, NULL, NULL, NULL, 1),
(1029, 'MARKETING & SALES (FAIR PRICE', 3, NULL, NULL, NULL, NULL, 1),
(1030, 'M&S (MARKETING)', 3, NULL, NULL, NULL, NULL, 1),
(1031, 'M&S (BCS CENTRAL)', 3, NULL, NULL, NULL, NULL, 1),
(1032, 'M&S (BCS SOUTH)', 3, NULL, NULL, NULL, NULL, 1),
(1033, 'M&S (BCS NORTH)', 3, NULL, NULL, NULL, NULL, 1),
(1034, 'M&S (G.T. CENTRAL)', 3, NULL, NULL, NULL, NULL, 1),
(1035, 'M&S (FOOD SERVICES CENTRAL)', 3, NULL, NULL, NULL, NULL, 1),
(1036, 'M&S (KEY ACCOUNTS CENTRAL)', 3, NULL, NULL, NULL, NULL, 1),
(1037, 'M&S (G.T. NORTH)', 3, NULL, NULL, NULL, NULL, 1),
(1038, 'M&S (FOOD SERVICES + KEY ACCOU', 3, NULL, NULL, NULL, NULL, 1),
(1039, 'M&S (WAREHOUSE & DISTRIBUTION', 3, NULL, NULL, NULL, NULL, 1),
(1040, 'M&S (WAREHOUSE & DISTRIBUTION', 3, NULL, NULL, NULL, NULL, 1),
(1041, 'M&S (G.T. SOUTH)', 3, NULL, NULL, NULL, NULL, 1),
(1042, 'M&S (FOOD SERVICES + KEY ACCOU', 3, NULL, NULL, NULL, NULL, 1),
(1043, 'R & D', 3, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE IF NOT EXISTS `designations` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `payscale` varchar(10) NOT NULL,
  `company_id` smallint(6) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1109 ;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `payscale`, `company_id`, `user_id`, `created`, `modified`, `modified_by`, `is_active`) VALUES
(1001, 'FINANCE MANAGER', 'M-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1002, 'ASTT. MANAGER', 'M-II', 3, NULL, NULL, NULL, NULL, NULL),
(1003, 'CHIEF ACCOUNTANT', 'M-III', 3, NULL, NULL, NULL, NULL, NULL),
(1004, 'ACCOUNT OFFICER', 'M-I', 3, NULL, NULL, NULL, NULL, NULL),
(1005, 'ACC. ASSITT', 'S-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1006, 'GEN. ASTT', 'S-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1007, 'SALE MANAGER', 'M-III', 3, NULL, NULL, NULL, NULL, NULL),
(1008, 'A.S.M', 'M-II', 3, NULL, NULL, NULL, NULL, NULL),
(1009, 'SALES OFFICER', 'M-I', 3, NULL, NULL, NULL, NULL, NULL),
(1010, 'ASTT. SALE OFFICER', 'S-V', 3, NULL, NULL, NULL, NULL, NULL),
(1011, 'VACCINATOR', 'S-III', 3, NULL, NULL, NULL, NULL, NULL),
(1012, 'ADMIN OFFICER', 'M-I', 3, NULL, NULL, NULL, NULL, NULL),
(1013, 'STENOGRAPH', 'S-V', 3, NULL, NULL, NULL, NULL, NULL),
(1014, 'ASSTT. SUPERVISOR', 'S-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1015, 'STORE KEEPER', 'S-III', 3, NULL, NULL, NULL, NULL, NULL),
(1016, 'DRIVER', 'S-III', 3, NULL, NULL, NULL, NULL, NULL),
(1017, 'OFFICE ATTENDANT', 'S-I', 3, NULL, NULL, NULL, NULL, NULL),
(1018, 'ASTT. SECRETARY', 'S-V', 3, NULL, NULL, NULL, NULL, NULL),
(1019, 'OFFICE ATTENDANT', 'S-I', 3, NULL, NULL, NULL, NULL, NULL),
(1020, 'SUPERVISOR', 'S-V', 3, NULL, NULL, NULL, NULL, NULL),
(1021, 'O/A', '', 3, NULL, NULL, NULL, NULL, NULL),
(1022, 'ELECTRICIAN', 'M-I', 3, NULL, NULL, NULL, NULL, NULL),
(1023, 'H/A', 'S-I', 3, NULL, NULL, NULL, NULL, NULL),
(1024, 'COOK', 'S-I', 3, NULL, NULL, NULL, NULL, NULL),
(1025, 'H/S', 'S-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1026, 'HELPER', 'S-I', 3, NULL, NULL, NULL, NULL, NULL),
(1027, 'AGRI-WORKER', 'S-I', 3, NULL, NULL, NULL, NULL, NULL),
(1028, 'TEL/OPERATOR', 'S-II', 3, NULL, NULL, NULL, NULL, NULL),
(1029, 'PRODUCTION MANAGER', 'M-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1030, 'T/M', 'M-I', 3, NULL, NULL, NULL, NULL, NULL),
(1031, 'SUPERVISOR', 'S-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1032, 'SHIFT INCHARGE', 'S-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1033, 'SHIFT INCHARGE', 'S-III', 3, NULL, NULL, NULL, NULL, NULL),
(1034, 'GARDNER', 'S-I', 3, NULL, NULL, NULL, NULL, NULL),
(1035, 'ACCOUNTANT', 'S-V', 3, NULL, NULL, NULL, NULL, NULL),
(1036, 'ELECTRITION', 'S-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1037, 'ELECTRITION', 'S-V', 3, NULL, NULL, NULL, NULL, NULL),
(1038, 'P/A', 'S-I', 3, NULL, NULL, NULL, NULL, NULL),
(1039, 'FARM MANAGER', 'M-II', 3, NULL, NULL, NULL, NULL, NULL),
(1040, 'HATCHERY MANAGER', 'M-I', 3, NULL, NULL, NULL, NULL, NULL),
(1041, 'D.G.MANAGER', 'M-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1042, 'SECURITY GUARD', 'S-III', 3, NULL, NULL, NULL, NULL, NULL),
(1043, 'CLEANER', 'S-I', 3, NULL, NULL, NULL, NULL, NULL),
(1044, 'COMM. ASSISTANT', 'S-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1045, 'ADMIN MANAGER', 'M-III', 3, NULL, NULL, NULL, NULL, NULL),
(1046, 'COMM. ASSISTANT', 'S-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1047, 'TRANSPORT SUPERVISOR', 'S-III', 3, NULL, NULL, NULL, NULL, NULL),
(1048, 'LAND RECORD KEEPER', 'S-VI', 3, NULL, NULL, NULL, NULL, NULL),
(1049, 'ASST. COMM. OFFICER', 'S-V', 3, NULL, NULL, NULL, NULL, NULL),
(1050, 'VEHICLE SUPERVISOR', 'S-V', 3, NULL, NULL, NULL, NULL, NULL),
(1051, 'OFFICE ATTENDANT', 'S-I', 3, NULL, NULL, NULL, NULL, NULL),
(1052, 'ASST. ELLECTRICIAN', 'S-III', 3, NULL, NULL, NULL, NULL, NULL),
(1053, 'ASSTT. SYSTEM ADMINISTRATOR', '', 3, NULL, NULL, NULL, NULL, NULL),
(1054, 'CHILLER OPERATOR', 'S-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1055, 'ASST. CHILLER OPERATOR', 'S-V', 3, NULL, NULL, NULL, NULL, NULL),
(1056, 'TRAINEE ACCOUNT ASSTT.', 'S-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1057, 'ASSTT.ADMIN OFFICER', 'S-V', 3, NULL, NULL, NULL, NULL, NULL),
(1058, 'TRAKKING BASE OPERATOR STATION.', 'S-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1059, 'WELDER', 'S-III', 3, NULL, NULL, NULL, NULL, NULL),
(1060, 'FARM OFFICER', 'M-I', 3, NULL, NULL, NULL, NULL, NULL),
(1061, 'MANAGER TRAINING & QUALITY CONTROL', 'M-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1062, 'ASSTT. VEHICLE ELECTRICIAN', 'S-II', 3, NULL, NULL, NULL, NULL, NULL),
(1063, 'SENIOR MANAGER PRODUCTION', '', 3, NULL, NULL, NULL, NULL, NULL),
(1064, 'SENIOR POULTRY ATTENDANT', 'S-II', 3, NULL, NULL, NULL, NULL, NULL),
(1065, 'MANAGER HUMAN RESOURCE', 'M-II', 3, NULL, NULL, NULL, NULL, NULL),
(1066, 'SENIOR MANAGER HATCHERY', 'M-III', 3, NULL, NULL, NULL, NULL, NULL),
(1067, 'R&D OFFICER', 'M-1', 3, NULL, NULL, NULL, NULL, NULL),
(1068, 'SENIOR FARM MANAGER', 'M-II', 3, NULL, NULL, NULL, NULL, NULL),
(1069, 'TECHNICAL OFFICER', 'M-I', 3, NULL, NULL, NULL, NULL, NULL),
(1070, 'ASSISTANT PRODUCTION MANAGER', 'M-III', 3, NULL, NULL, NULL, NULL, NULL),
(1071, 'ASSISTANT NETWORK ADMINISTRATOR', 'S-V', 3, NULL, NULL, NULL, NULL, NULL),
(1072, 'OFFICE ATTENDANT', 'S-I', 3, NULL, NULL, NULL, NULL, NULL),
(1073, 'HORTICULTURIST', 'M-I', 3, NULL, NULL, NULL, NULL, NULL),
(1074, 'ASSTT. MANAGER CIVIL PROJECTS', 'M-I', 3, NULL, NULL, NULL, NULL, NULL),
(1075, 'STORE ASSISTANT', 'S-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1076, 'SENIOR HATCHERY ATTENDANT', 'S-II', 3, NULL, NULL, NULL, NULL, NULL),
(1077, 'PURCHASE ASSISTANT', 'S-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1078, 'FLEET MONITORING ASSISTANT', '', 3, NULL, NULL, NULL, NULL, NULL),
(1079, 'HR ASSOCIATE/COORDINATOR', '', 3, NULL, NULL, NULL, NULL, NULL),
(1080, 'PURCHASE ASSOCIATE/COORDINATOR', '', 3, NULL, NULL, NULL, NULL, NULL),
(1081, 'FINANCE ASSOCIATE/COORDINATOR', '', 3, NULL, NULL, NULL, NULL, NULL),
(1082, 'SR. SALES OFFICER', '', 3, NULL, NULL, NULL, NULL, NULL),
(1083, 'AGM / CFO', '', 3, NULL, NULL, NULL, NULL, NULL),
(1084, 'ELECTRICIAN SUPERVISOR', '', 3, NULL, NULL, NULL, NULL, NULL),
(1085, 'RECOVERY ASSISTANT', 'S-IV', 3, NULL, NULL, NULL, NULL, NULL),
(1086, 'FIELD RIDER', 'S-III', 3, NULL, NULL, NULL, NULL, NULL),
(1087, 'SOFTWARE DEVELOPER', 'M-I III', 3, NULL, NULL, NULL, NULL, NULL),
(1088, 'MANAGER HEALTH, VETERINARY CONTROL & MAN', '', 3, NULL, NULL, NULL, NULL, NULL),
(1089, 'COUNTRY MANAGER MARKETING & SALES', '', 3, NULL, NULL, NULL, NULL, NULL),
(1090, 'ACCOUNTS ASSOCIATE', '', 3, NULL, NULL, NULL, NULL, NULL),
(1091, 'PAINTER', '', 3, NULL, NULL, NULL, NULL, NULL),
(1092, 'HR ASSISTANT', '', 3, NULL, NULL, NULL, NULL, NULL),
(1093, 'O.B CUM RIDER', '', 3, NULL, NULL, NULL, NULL, NULL),
(1094, 'CASHIER', '', 3, NULL, NULL, NULL, NULL, NULL),
(1095, 'QC INCHARGE', '', 3, NULL, NULL, NULL, NULL, NULL),
(1096, 'ASSISTANT ERP FINANCIAL COORDINATOR', '', 3, NULL, NULL, NULL, NULL, NULL),
(1097, 'ADMIN COORDINATOR (FIELD)', '', 3, NULL, NULL, NULL, NULL, NULL),
(1098, 'RECORD ASSIATANT', '', 3, NULL, NULL, NULL, NULL, NULL),
(1099, 'OFFICER CORPORATE AFFAIRS', 'M-I (II)', 3, NULL, NULL, NULL, NULL, NULL),
(1100, 'PURCHASER', '', 3, NULL, NULL, NULL, NULL, NULL),
(1101, 'ASSISTANT FARM MANAGER', '', 3, NULL, NULL, NULL, NULL, NULL),
(1102, 'SALES AND RECOVERY COORDINATOR', '', 3, NULL, NULL, NULL, NULL, NULL),
(1103, 'SALES AND RECOVERY ASSOCIATE', '', 3, NULL, NULL, NULL, NULL, NULL),
(1104, 'STORE ASSOCIATE', '', 3, NULL, NULL, NULL, NULL, NULL),
(1105, 'DATA ENTRY OPERATOR', '', 3, NULL, NULL, NULL, NULL, NULL),
(1106, 'ELECTRICIAN HELPER', '', 3, NULL, NULL, NULL, NULL, NULL),
(1107, 'ADMIN & ACCOUNTS OFFICER', '', 3, NULL, NULL, NULL, NULL, NULL),
(1108, 'ASSISTANT MANAGER ACCOUNTS', '', 3, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(255) DEFAULT NULL,
  `employee_name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `station_id` smallint(6) NOT NULL,
  `department_id` smallint(6) NOT NULL,
  `company_id` smallint(6) NOT NULL,
  `temparary_address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `residence_number` varchar(100) NOT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `emergency_contact_number` varchar(100) NOT NULL,
  `spouse_name` varchar(100) NOT NULL,
  `male_childs` tinyint(2) NOT NULL,
  `female_childs` tinyint(2) NOT NULL,
  `others` varchar(2) NOT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `id_mark` varchar(100) NOT NULL,
  `date_of_brith` date DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `last_permanent_date` date NOT NULL,
  `bank_account` varchar(255) DEFAULT NULL,
  `bank_id` smallint(6) DEFAULT NULL,
  `eobi_no` varchar(255) DEFAULT NULL,
  `tax_no` varchar(100) NOT NULL,
  `Tax_deduction` int(11) DEFAULT NULL,
  `no_of_increment` smallint(6) NOT NULL,
  `advance_deduction` int(11) DEFAULT NULL,
  `social_security_no` varchar(255) DEFAULT NULL,
  `designation_id` smallint(6) DEFAULT NULL,
  `payscale_id` smallint(6) DEFAULT NULL,
  `anual_increment` smallint(6) DEFAULT NULL,
  `new_increment` smallint(6) NOT NULL,
  `basic_pay` int(11) DEFAULT NULL,
  `dearness_allowance` smallint(6) DEFAULT NULL,
  `mess_allowance` smallint(6) DEFAULT NULL,
  `gpa_allowance` smallint(6) DEFAULT NULL,
  `other_allowance` smallint(6) DEFAULT NULL,
  `leaving_date` date DEFAULT NULL,
  `leaving_reason` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT '0',
  `is_active` tinyint(1) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_no`, `employee_name`, `father_name`, `gender`, `station_id`, `department_id`, `company_id`, `temparary_address`, `permanent_address`, `city`, `contact_name`, `contact_number`, `residence_number`, `mobile_number`, `emergency_contact_number`, `spouse_name`, `male_childs`, `female_childs`, `others`, `cnic`, `id_mark`, `date_of_brith`, `appointment_date`, `last_permanent_date`, `bank_account`, `bank_id`, `eobi_no`, `tax_no`, `Tax_deduction`, `no_of_increment`, `advance_deduction`, `social_security_no`, `designation_id`, `payscale_id`, `anual_increment`, `new_increment`, `basic_pay`, `dearness_allowance`, `mess_allowance`, `gpa_allowance`, `other_allowance`, `leaving_date`, `leaving_reason`, `created`, `modified`, `modified_by`, `is_active`, `user_id`) VALUES
(2, 'BB-0000102-222333', 'Nadeem Bhatti112', 'Muneer Bhatti112', 'Male', 1000, 1018, 1, 'Lahore Bhatta Chowk', 'Lalamusa', 'Lahore', '', NULL, '', NULL, '', '', 0, 0, '', '66666-6666666-6', 'any mark', '2165-02-01', NULL, '0000-00-00', NULL, NULL, NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-03 07:48:44', '2017-02-17 12:06:48', 5, NULL, NULL),
(3, '5555', '555', '555', 'Male', 1000, 1001, 1, '555', '555', '5555', '', NULL, '', NULL, '', '', 0, 0, '', '88888-8888888-8', '55', '2169-01-12', NULL, '0000-00-00', NULL, NULL, NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-12 09:50:16', '2017-01-12 09:50:16', NULL, NULL, NULL),
(4, '55558888888888888', '555hfghfghfghfghfgh', '555', 'Male', 1000, 1001, 1, '555', '555', '5555', '', NULL, '', NULL, '', '', 0, 0, '', '88888-8888888-8', '55', '2169-01-12', NULL, '0000-00-00', NULL, NULL, NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-12 09:53:03', '2017-01-12 09:53:03', NULL, NULL, NULL),
(5, '55558888888888888', '555hfghfghfghfghfgh', '555', 'Male', 1000, 1001, 1, '555', '555', '5555', '', NULL, '', NULL, '', '', 0, 0, '', '88888-8888888-8', '55', '2169-01-12', NULL, '0000-00-00', NULL, NULL, NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-12 09:53:20', '2017-01-12 09:53:20', NULL, NULL, NULL),
(6, '55558888888888888', '555hfghfghfghfghfgh', '555', 'Male', 1000, 1001, 1, '555', '555', '5555', 'ggghhhhhh', 'sfg', '555', '555', '55', '55', 1, 1, '1', '88888-8888888-8', '55', '2169-01-12', '2017-12-01', '2017-03-01', '4444', NULL, '', '', NULL, 0, NULL, '', NULL, NULL, NULL, 0, 50000, NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-12 09:54:27', '2017-01-12 10:00:35', NULL, NULL, NULL),
(7, 'dddd', 'adfasdf', 'asdfadf', 'Male', 1031, 1019, 1, '44', '44', '444', '', NULL, '', NULL, '', '', 0, 0, '', '44444-4444444-4', '44', '2166-03-03', NULL, '0000-00-00', NULL, NULL, NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-02-13 10:57:39', '2017-02-13 10:57:39', NULL, NULL, NULL),
(8, 'ddddGG', 'adfasdf', 'asdfadf', 'Male', 1032, 1020, 1, '55', '55', '5555', '', NULL, '', NULL, '', '', 0, 0, '', '45555-5555555-5', '555', '2165-02-01', NULL, '0000-00-00', NULL, NULL, NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-02-13 11:16:05', '2017-02-13 11:16:05', NULL, NULL, 1);

--
-- Triggers `employees`
--
DROP TRIGGER IF EXISTS `emp__ai`;
DELIMITER //
CREATE TRIGGER `emp__ai` AFTER INSERT ON `employees`
 FOR EACH ROW INSERT INTO employees_bkp SELECT 'insert', NULL, NOW(), d.* , (select user_id from tblaction where atable='employees' and pid=d.id)
    FROM employees AS d WHERE d.id = NEW.id
//
DELIMITER ;
DROP TRIGGER IF EXISTS `emp__au`;
DELIMITER //
CREATE TRIGGER `emp__au` AFTER UPDATE ON `employees`
 FOR EACH ROW INSERT INTO employees_bkp SELECT  d.*,'update', NULL, NOW(), (select user_id from tblaction where atable='employees' and pid=d.id)
    FROM employees AS d WHERE d.id = NEW.id
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `employees_bkp`
--

CREATE TABLE IF NOT EXISTS `employees_bkp` (
  `id` int(11) NOT NULL,
  `employee_no` varchar(255) DEFAULT NULL,
  `employee_name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `station_id` smallint(6) NOT NULL,
  `department_id` smallint(6) NOT NULL,
  `company_id` smallint(6) NOT NULL,
  `temparary_address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `residence_number` varchar(100) NOT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `emergency_contact_number` varchar(100) NOT NULL,
  `spouse_name` varchar(100) NOT NULL,
  `male_childs` tinyint(2) NOT NULL,
  `female_childs` tinyint(2) NOT NULL,
  `others` varchar(2) NOT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `id_mark` varchar(100) NOT NULL,
  `date_of_brith` date DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `last_permanent_date` date NOT NULL,
  `bank_account` varchar(255) DEFAULT NULL,
  `bank_id` smallint(6) DEFAULT NULL,
  `eobi_no` varchar(255) DEFAULT NULL,
  `tax_no` varchar(100) NOT NULL,
  `Tax_deduction` int(11) DEFAULT NULL,
  `no_of_increment` smallint(6) NOT NULL,
  `advance_deduction` int(11) DEFAULT NULL,
  `social_security_no` varchar(255) DEFAULT NULL,
  `designation_id` smallint(6) DEFAULT NULL,
  `payscale_id` smallint(6) DEFAULT NULL,
  `anual_increment` smallint(6) DEFAULT NULL,
  `new_increment` smallint(6) NOT NULL,
  `basic_pay` int(11) DEFAULT NULL,
  `dearness_allowance` smallint(6) DEFAULT NULL,
  `mess_allowance` smallint(6) DEFAULT NULL,
  `gpa_allowance` smallint(6) DEFAULT NULL,
  `other_allowance` smallint(6) DEFAULT NULL,
  `leaving_date` date DEFAULT NULL,
  `leaving_reason` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT '0',
  `is_active` tinyint(1) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `action` varchar(8) DEFAULT 'insert',
  `revision` int(6) NOT NULL AUTO_INCREMENT,
  `action_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `action_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`revision`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `employees_bkp`
--

INSERT INTO `employees_bkp` (`id`, `employee_no`, `employee_name`, `father_name`, `gender`, `station_id`, `department_id`, `company_id`, `temparary_address`, `permanent_address`, `city`, `contact_name`, `contact_number`, `residence_number`, `mobile_number`, `emergency_contact_number`, `spouse_name`, `male_childs`, `female_childs`, `others`, `cnic`, `id_mark`, `date_of_brith`, `appointment_date`, `last_permanent_date`, `bank_account`, `bank_id`, `eobi_no`, `tax_no`, `Tax_deduction`, `no_of_increment`, `advance_deduction`, `social_security_no`, `designation_id`, `payscale_id`, `anual_increment`, `new_increment`, `basic_pay`, `dearness_allowance`, `mess_allowance`, `gpa_allowance`, `other_allowance`, `leaving_date`, `leaving_reason`, `created`, `modified`, `modified_by`, `is_active`, `user_id`, `action`, `revision`, `action_date`, `action_user_id`) VALUES
(2, 'BB-0000102222', 'Nadeem Bhatti11', 'Muneer Bhatti11', 'Male', 1000, 1018, 1, 'Lahore Bhatta Chowk', 'Lalamusa', 'Lahore', '', NULL, '', NULL, '', '', 0, 0, '', '66666-6666666-6', 'any mark', '2172-12-06', NULL, '0000-00-00', NULL, NULL, NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-03 07:48:44', '2017-02-17 10:40:00', 5, NULL, NULL, 'update', 1, '2017-02-17 10:40:00', 5),
(2, 'BB-0000102-222333', 'Nadeem Bhatti112', 'Muneer Bhatti112', 'Male', 1000, 1018, 1, 'Lahore Bhatta Chowk', 'Lalamusa', 'Lahore', '', NULL, '', NULL, '', '', 0, 0, '', '66666-6666666-6', 'any mark', '2165-02-01', NULL, '0000-00-00', NULL, NULL, NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-03 07:48:44', '2017-02-17 12:06:48', 5, NULL, NULL, 'update', 2, '2017-02-17 12:06:48', 5);

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `duties` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `employee_id`, `company_name`, `designation`, `start_date`, `end_date`, `duties`, `contact_number`, `user_id`, `created`, `modified`, `modified_by`, `is_active`) VALUES
(5, 2, 'ggg', 'hhhh', 'hhh', 'hhhjjj', 'jjjjj', 'jjjj', NULL, '2017-01-11', '2017-01-11', NULL, 1),
(6, 2, 'ddd', 'fff', 'ggg', 'hhh', 'jjjj', 'kkkk', NULL, '2017-01-11', '2017-01-11', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `form_templates`
--

CREATE TABLE IF NOT EXISTS `form_templates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `form_name` varchar(255) DEFAULT NULL,
  `fields` text,
  `is_active` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `group_details`
--

CREATE TABLE IF NOT EXISTS `group_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` smallint(6) DEFAULT NULL,
  `user_id` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE IF NOT EXISTS `managers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `controller` varchar(255) NOT NULL,
  `srno` tinyint(4) DEFAULT NULL,
  `action` varchar(255) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `controller`, `srno`, `action`, `icon`, `created`, `modified`) VALUES
(1, 'Employees', 'Employees', 1, 'index', 'fa-user', '0000-00-00 00:00:00', NULL),
(2, 'Users', 'Users', 1, 'index', 'fa-users', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payscales`
--

CREATE TABLE IF NOT EXISTS `payscales` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `min_basic` float DEFAULT NULL,
  `max_basic` float DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `payscales`
--

INSERT INTO `payscales` (`id`, `code`, `name`, `description`, `min_basic`, `max_basic`, `user_id`, `created`, `modified`, `modified_by`, `is_active`) VALUES
(1, 'S-VI', '1.Staff Scale', 'Sr. Staff Members', 11500, 23000, NULL, NULL, NULL, NULL, NULL),
(2, 'M-I(II)', '2.Managment Scale', 'Nill', 24000, 48000, NULL, NULL, NULL, NULL, NULL),
(3, 'M-I(III)', '2.Managment Scale', 'Nill', 28000, 56000, NULL, NULL, NULL, NULL, NULL),
(4, 'E-I', '3.Executive Staff', 'Nill', 100000, 200000, NULL, NULL, NULL, NULL, NULL),
(5, 'E-II', '3.Executive Staff', 'Nill', 200000, 400000, NULL, NULL, NULL, NULL, NULL),
(6, 'M-I', '2. Managment Scale', 'Sales Officer, Assit. Farm Manager, Account officer, Admin Officer, Farm Officer', 13552, 28752, NULL, NULL, NULL, NULL, NULL),
(7, 'S-IIIA', '1. Staff Scale', 'Driver', 5249.75, 9217.25, NULL, NULL, NULL, NULL, NULL),
(8, 'M-I(I)', '2. Managment Scale', 'Sales Executive, Assit. Farm Manager, Account officer, Admin Officer, Farm Officer, Trainee Officer,', 23345, 49611, NULL, NULL, NULL, NULL, NULL),
(9, 'M-II', '2. Managment Scale', 'Farm Manager, S.Farm Manager, Sales Manager, S.Sales Manager, C.Accountant, S.Accounts Officer, Admi', 29900, 63135, NULL, NULL, NULL, NULL, NULL),
(10, 'M-III', '2. Managment Scale', 'Asst. Prod. Manager, Executive Sales Manager, Area Sales Incharge, Deputy Finance Manager', 43240, 77740, NULL, NULL, NULL, NULL, NULL),
(11, 'M-IV', '2. Managment Scale', 'Production Manager, Asst. General manager, Senior Executive Manager, Area General Manager, Finance M', 50715, 90390, NULL, NULL, NULL, NULL, NULL),
(12, 'M-V', '2. Managment Scale', 'Deputy General Manager(Sales), Deputy General Manager(Production), Deputy General Manager(Finance)', 56350, 105915, NULL, NULL, NULL, NULL, NULL),
(13, 'M-VI', '2. Managment Scale', 'Managing Director, Chairman', 60835, 115460, NULL, NULL, NULL, NULL, NULL),
(14, 'S-I', '1. Staff Scale', 'PEON, WORKER, COOK, POULTRY ATTENDANT', 4237.75, 6422.75, NULL, NULL, NULL, NULL, NULL),
(15, 'S-II', '1. Staff Scale', 'CHOKIDAR, SENIOR ATTENDANT,GUARD', 4680.5, 8303, NULL, NULL, NULL, NULL, NULL),
(16, 'S-III', '1. Staff Scale', 'DRIVER, CLERK, VACCINATOR, TYPIST, STORE KEEPER, ASSTT. ELECTRIATION, SHIFT INCHARGE, RECEPTRIONEST', 5249.75, 11862.2, NULL, NULL, NULL, NULL, NULL),
(17, 'S-IV', '1. Staff Scale', 'Asst. Supervisor, Asst. Accountant, Steno Typist, Electrician, Asst. Sale Officer,Security Incharge', 5692.5, 14030, NULL, NULL, NULL, NULL, NULL),
(18, 'S-V', '1. Staff Scale', 'Supervisor, Stenographer, Accountant, Asst. Accounts Officer, General Assistant', 7273.75, 24696.2, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE IF NOT EXISTS `qualifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `gpa` varchar(100) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`id`, `employee_id`, `degree`, `duration`, `institute`, `gpa`, `user_id`, `created`, `modified`, `is_active`) VALUES
(15, 6, 'asdf', 'asdf', 'sdffdff', 'gggggg', NULL, '2017-01-12', '2017-01-12', 1),
(18, 2, 'ylllllllllllllll', 'yy', 'yyy', 'yyyy', NULL, '2017-02-11', '2017-02-11', 1),
(19, 2, 'uu555555', 'uuu', 'uuu', 'uuuu', NULL, '2017-02-11', '2017-02-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `salary_masters`
--

CREATE TABLE IF NOT EXISTS `salary_masters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) unsigned DEFAULT NULL,
  `station_id` smallint(6) DEFAULT NULL,
  `department_id` smallint(6) DEFAULT NULL,
  `designation_id` smallint(6) DEFAULT NULL,
  `peno` varchar(255) DEFAULT NULL,
  `salary_month` varchar(255) DEFAULT NULL,
  `working_days` smallint(6) DEFAULT NULL,
  `actual_basic` float DEFAULT NULL,
  `basic_pay` float DEFAULT NULL,
  `house_rent_allowance` float DEFAULT NULL,
  `medical_allowance` float DEFAULT NULL,
  `over_time_days` smallint(6) DEFAULT NULL,
  `over_time_days_amount` smallint(6) DEFAULT NULL,
  `over_time_hours` smallint(6) DEFAULT NULL,
  `over_time_hours_amount` smallint(6) DEFAULT NULL,
  `over_time_amount` smallint(6) DEFAULT NULL,
  `gross_salary` smallint(6) DEFAULT NULL,
  `tax_deduction` smallint(6) DEFAULT NULL,
  `eobi_deduction` smallint(6) DEFAULT NULL,
  `advance_deduction` smallint(6) DEFAULT NULL,
  `other_deduction` smallint(6) DEFAULT NULL,
  `mess_deduction` smallint(6) DEFAULT NULL,
  `net_salary` int(11) DEFAULT NULL,
  `bank_id` smallint(6) DEFAULT NULL,
  `is_bank` tinyint(1) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE IF NOT EXISTS `stations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `manager_id` smallint(6) DEFAULT NULL,
  `company_id` smallint(6) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2000 ;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `name`, `manager_id`, `company_id`, `user_id`, `created`, `modified`, `modified_by`, `is_active`) VALUES
(1000, 'HEAD OFFICE', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1001, 'PROCESSING PLANT', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1002, 'HEAD OFFICE (SALE)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1006, 'RAJA JANG FARM', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1008, 'K.R.K FARM               (H-6)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1009, 'A-P FARM', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1012, 'WATNA FARM               (H-4)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1020, 'BOI ASIL FARM            (H-4)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1021, 'HANDHAL FARM             (H-6)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1022, 'HALOKI FARM', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1023, 'LALYANI FARM', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1024, 'MITHRA DAS FARM          (H-2)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1025, 'MAHMOOD FARM', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1026, 'KASUR FARM', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1027, 'N.R.G. FARM', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1028, 'PAK POULTRY FARM         (H-2)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1029, 'WATNA FARM-II            (H-2)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1030, 'KAMRAN PROTEEN FARM      (H-4)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1031, 'LAHORE PROTEEN FARM      (H-4)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1032, 'NADEEM PROTEIN FARM', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1033, 'AP FARM                  (H-4)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1034, 'blank', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1035, 'BLANK', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1036, 'BLANK', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1051, 'JALAL PUR FARM           (H-2)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1052, 'Bird Plus Farm', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1053, 'Bhullay Shah Farm', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1054, 'AZAM PROTEEN             (H-1)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1055, 'AL-WAHID P/F             (H-2)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1056, 'SUFI P/F', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1057, 'SUNDAR FARM              (H-2)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1058, 'MIAN GEE FARM            (H-1)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1059, 'RASHEED P/F              (H-3)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1060, 'Safari Farm', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1061, 'CHAUDHARY FARM           (H-4)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1062, 'BARAK ULLAH FARM         (H-2)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1063, 'SADIQ P/F                (H-2)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1064, 'WADANA FARM              (H-4)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1065, 'MILLAT FARM', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1066, 'NADIR FARM               (H-1)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1067, 'WALEED P/F               (H-2)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1068, 'R.M.H FARM               (H-4)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1069, 'A.B.S. FARM              (H-2)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1070, 'M.N.A. FARM              (H-1)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1071, 'PUNJAB FARM              (H-2)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1072, 'AL-RAFAY FARM            (H-3)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1083, 'RAWALPINDI OFFICE', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1084, 'KARACHI SALES OFFICE', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1085, 'Sialkot Sales Office', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1086, 'GUJRANWALA SALES OFFICE', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1087, 'FAISALABAD SALES OFFICE', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1088, 'Okara Sales Office', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1089, 'MULTAN SALES OFFICE', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1090, 'GUJRAT SALES OFFICE', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1091, 'Sargodha Sales Office', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1092, 'Mardan Sales Office', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1093, 'LAHORE OUTLETS', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1094, 'Quetta Sales Office', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1095, 'Hyderabad Sales Office', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1096, 'Abbotabad Office', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1097, 'Jhelum Office', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1098, 'Peshawar Office', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1099, 'LHR(DHA Q BLOCK)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1100, 'LHR (MAIN MARKET GULBERG)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1101, 'LHR(CANTT REHAT BAKERY)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1102, 'LHR(ISLAMPURA)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1103, 'LHR(IQBAL TOWN HUNZA BLOCK)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1104, 'LHR(MODEL TOWN C-BLOCK)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1105, 'LHR(PIA E-BLOCK)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1106, 'LHR(TOWNSHIP COLLEGE ROAD)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1107, 'LHR(JOHAR TOWN G-BLOCK)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1108, 'LHR(BAHRIA TOWN)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1109, 'Promoter LHR', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1110, 'ISD(F-10 MARKAZ)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1111, 'ISD(F-11 MARKAZ)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1112, 'Promoter RWP', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1113, 'Wah Cantt', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1114, 'PROMOTER SOUTH', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1115, 'OKARA SHOP', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1116, 'SIALKOT SHOP', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1117, 'Promoter (FSD)', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1118, 'Promoter Sargodha', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1119, 'Jhelum Promoter', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1120, 'Promoter peshawar', NULL, 3, NULL, NULL, NULL, NULL, 1),
(1999, 'Vaccination & Sale', NULL, 3, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblaction`
--

CREATE TABLE IF NOT EXISTS `tblaction` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `atable` varchar(100) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `department_id` smallint(6) DEFAULT NULL,
  `station_id` smallint(6) DEFAULT NULL,
  `company_id` smallint(6) NOT NULL,
  `user_role_id` smallint(6) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `email`, `password`, `department_id`, `station_id`, `company_id`, `user_role_id`, `photo`, `user_id`, `is_active`, `created`, `modified`, `modified_by`) VALUES
(8, 'nbhatti2001', 'Nadeem Bhattii3', 'bb@gmail.com', '$2y$10$aVwr0doI1P2dqaUYdA23w.OrFf7awAPGKXDeFb6Klr6wjNSSZjPhK', 1016, 1023, 1, 1, NULL, 8, 1, '2017-02-18 05:18:08', '2017-02-18 05:31:05', 8);

--
-- Triggers `users`
--
DROP TRIGGER IF EXISTS `data__ai`;
DELIMITER //
CREATE TRIGGER `data__ai` AFTER INSERT ON `users`
 FOR EACH ROW INSERT INTO users_bkp SELECT d.*,'insert', NULL, NOW()  ,0
    FROM users AS d WHERE d.id = NEW.id
//
DELIMITER ;
DROP TRIGGER IF EXISTS `data__au`;
DELIMITER //
CREATE TRIGGER `data__au` AFTER UPDATE ON `users`
 FOR EACH ROW INSERT INTO users_bkp SELECT d.*,  'update', NULL, NOW() , (select user_id from tblaction where atable='users' and pid=d.id)
    FROM users AS d WHERE d.id = NEW.id
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users_bkp`
--

CREATE TABLE IF NOT EXISTS `users_bkp` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `department_id` smallint(6) DEFAULT NULL,
  `station_id` smallint(6) DEFAULT NULL,
  `company_id` smallint(6) NOT NULL,
  `user_role_id` smallint(6) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `action` varchar(8) DEFAULT 'insert',
  `revision` int(6) NOT NULL AUTO_INCREMENT,
  `action_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `action_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`revision`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `users_bkp`
--

INSERT INTO `users_bkp` (`id`, `username`, `full_name`, `email`, `password`, `department_id`, `station_id`, `company_id`, `user_role_id`, `photo`, `user_id`, `is_active`, `created`, `modified`, `modified_by`, `action`, `revision`, `action_date`, `action_user_id`) VALUES
(8, 'nbhatti2001', 'Nadeem Bhatti', 'bb@gmail.com', '$2y$10$XWZGxC4uhoaPowZicxMtEOASKGednnun9KwLk6P//72WbVfxISJsu', 1016, 1023, 1, NULL, NULL, NULL, 1, '2017-02-18 05:18:08', '2017-02-18 05:18:08', NULL, 'insert', 1, '2017-02-18 05:18:08', 0),
(8, 'nbhatti2001', 'Nadeem Bhattii', 'bb@gmail.com', '$2y$10$s2wfGFG9LU3qFgLqs/X4H.GoZSp7IKVnse6EMaqSbLtDZnb03hfXi', 1016, 1023, 1, NULL, NULL, NULL, 1, '2017-02-18 05:18:08', '2017-02-18 05:18:36', 5, 'update', 2, '2017-02-18 05:18:36', 2017),
(8, 'nbhatti2001', 'Nadeem Bhattii1', 'bb@gmail.com', '$2y$10$ueruDKWuoOByHtHZxBUIl.aaCa9sO9aV.Yivh3E074b9A5hy2L.CC', 1016, 1023, 1, NULL, NULL, NULL, 1, '2017-02-18 05:18:08', '2017-02-18 05:21:28', 5, 'update', 3, '2017-02-18 05:21:28', NULL),
(8, 'nbhatti2001', 'Nadeem Bhattii2', 'bb@gmail.com', '$2y$10$gIWyNReSJwkIGgeJPGsPBO5XFuiFpAaa9CYMLaNalAzV3TCUgUp6i', 1016, 1023, 1, NULL, NULL, NULL, 1, '2017-02-18 05:18:08', '2017-02-18 05:26:25', 5, 'update', 4, '2017-02-18 05:26:25', NULL),
(8, 'nbhatti2001', 'Nadeem Bhattii2', 'bb@gmail.com', '$2y$10$gIWyNReSJwkIGgeJPGsPBO5XFuiFpAaa9CYMLaNalAzV3TCUgUp6i', 1016, 1023, 1, 1, NULL, NULL, 1, '2017-02-18 05:18:08', '2017-02-18 05:26:25', 5, 'update', 5, '2017-02-18 05:30:20', NULL),
(8, 'nbhatti2001', 'Nadeem Bhattii2', 'bb@gmail.com', '$2y$10$gIWyNReSJwkIGgeJPGsPBO5XFuiFpAaa9CYMLaNalAzV3TCUgUp6i', 1016, 1023, 1, 1, NULL, 8, 1, '2017-02-18 05:18:08', '2017-02-18 05:26:25', 5, 'update', 6, '2017-02-18 05:30:25', NULL),
(8, 'nbhatti2001', 'Nadeem Bhattii3', 'bb@gmail.com', '$2y$10$aVwr0doI1P2dqaUYdA23w.OrFf7awAPGKXDeFb6Klr6wjNSSZjPhK', 1016, 1023, 1, 1, NULL, 8, 1, '2017-02-18 05:18:08', '2017-02-18 05:31:05', 8, 'update', 7, '2017-02-18 05:31:05', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `action` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `session_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE IF NOT EXISTS `user_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(9) NOT NULL,
  `role_id` int(9) NOT NULL,
  `read` int(1) NOT NULL,
  `write` int(1) DEFAULT NULL,
  `edit` int(1) DEFAULT NULL,
  `delete` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `menu_id`, `role_id`, `read`, `write`, `edit`, `delete`) VALUES
(1, 1, 1, 1, 1, 1, 1),
(2, 2, 1, 1, 1, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
