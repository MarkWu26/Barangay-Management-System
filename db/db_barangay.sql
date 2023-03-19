-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220423.6d54ac471a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 11:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barangay`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblactivity`
--

CREATE TABLE `tblactivity` (
  `id` int(11) NOT NULL,
  `dateofactivity` date NOT NULL,
  `activity` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblactivity`
--

INSERT INTO `tblactivity` (`id`, `dateofactivity`, `activity`, `description`) VALUES
(10, '2017-01-03', 'activity', 'Description'),
(11, '2017-01-28', 'request', 'sdfsdfsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `tblactivityphoto`
--

CREATE TABLE `tblactivityphoto` (
  `id` int(11) NOT NULL,
  `activityid` int(11) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblactivityphoto`
--

INSERT INTO `tblactivityphoto` (`id`, `activityid`, `filename`) VALUES
(18, 7, '1485255503893ChibiMaker.jpg'),
(19, 7, '1485255504014dental.jpg'),
(20, 7, '1485255504108images.jpg'),
(21, 8, '1485255608251dfxfxfxdfxfxfxdf.png'),
(22, 8, '1485255608315easy-nail-art-designs-for-beginners-youtube.jpg'),
(23, 8, '1485255608404Easy-Winter-Nail-Art-Tutorials-2013-2014-For-Beginners-Learners-10.jpg'),
(24, 8, '1485255608513motherboard.png'),
(25, 9, '148525575293111041019_1012143402147589_9043399646875097729_n.jpg'),
(26, 9, '1485255753089bg.PNG'),
(44, 10, '16655930227870abbe546e479edc1eb62f5a8ccd66328.jpg'),
(46, 11, '1665593304040Doc-Sample-PH-COI.png'),
(47, 11, '1665637374115shrek4_disneyscreencaps.com_675.0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblblotter`
--

CREATE TABLE `tblblotter` (
  `id` int(11) NOT NULL,
  `yearRecorded` varchar(4) NOT NULL,
  `dateRecorded` date NOT NULL,
  `complainant` text NOT NULL,
  `cage` int(11) NOT NULL,
  `caddress` text NOT NULL,
  `ccontact` int(11) NOT NULL,
  `personToComplain` text NOT NULL,
  `page` int(11) NOT NULL,
  `paddress` text NOT NULL,
  `pcontact` int(11) NOT NULL,
  `complaint` text NOT NULL,
  `actionTaken` varchar(50) NOT NULL,
  `sStatus` varchar(50) NOT NULL,
  `locationOfIncidence` text NOT NULL,
  `recordedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblblotter`
--

INSERT INTO `tblblotter` (`id`, `yearRecorded`, `dateRecorded`, `complainant`, `cage`, `caddress`, `ccontact`, `personToComplain`, `page`, `paddress`, `pcontact`, `complaint`, `actionTaken`, `sStatus`, `locationOfIncidence`, `recordedby`) VALUES
(3, '2016', '2016-10-15', 'sda, as das', 2132, 'asda', 213, '11', 3213, 'dasda', 2123, '213asd', '1st Option', 'Solved', 'asdsa', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblclearance`
--

CREATE TABLE `tblclearance` (
  `id` int(11) NOT NULL,
  `clearanceNo` int(11) NOT NULL,
  `residentid` int(11) NOT NULL,
  `findings` text NOT NULL,
  `purpose` text NOT NULL,
  `orNo` int(11) NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `dateApproved` date NOT NULL,
  `Expire` date NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclearance`
--

INSERT INTO `tblclearance` (`id`, `clearanceNo`, `residentid`, `findings`, `purpose`, `orNo`, `samount`, `dateRecorded`, `dateApproved`, `Expire`, `recordedBy`, `status`) VALUES
(42, 123, 12, '23', 'SDF', 123, 23, '2022-11-08', '0000-00-00', '2023-11-08', 'admin', 'Approved'),
(43, 34, 12, 'er', 'dsfd', 123, 23, '2022-11-08', '0000-00-00', '2023-11-08', 'admin', 'Approved'),
(44, 2900, 19, 'sdf', 'work', 123, 12, '2022-11-08', '2022-11-13', '2023-11-13', 'Mark Stanley', 'Approved'),
(45, 1230, 19, 'okay', 'weh', 12323234, 1234, '2022-11-13', '2022-11-13', '2023-11-13', 'Mark Stanley', 'Approved'),
(46, 234, 19, 'koay', 'hadkok', 213, 32, '2022-11-13', '2022-11-13', '2023-11-13', 'Mark Stanley', 'Approved'),
(47, 12, 19, 'sdf', 'weh?', 23, 23, '2022-11-13', '2022-11-13', '2023-11-13', 'Mark Stanley', 'Approved'),
(48, 233, 19, 'sdf', 'hello', 2324, 1, '2022-11-13', '2022-11-13', '2023-11-13', 'Mark Stanley', 'Approved'),
(49, 2, 19, 'sdf', 'mkay', 123, 12, '2022-11-13', '2022-11-13', '2023-11-13', 'Mark Stanley', 'Approved'),
(50, 2343, 19, 'sdsf', 'fine', 123, 322, '2022-11-13', '2022-11-13', '2023-11-13', 'Mark Stanley', 'Approved'),
(51, 21233, 19, 'sdf', 'hii', 23434, 23, '2022-11-13', '2022-11-13', '2023-11-13', 'Mark Stanley', 'Approved'),
(52, 0, 19, '', 'hi2', 0, 0, '2022-11-13', '0000-00-00', '2023-11-13', 'Mark Stanley', 'New'),
(53, 0, 19, '', 'helloo', 0, 0, '2022-11-13', '0000-00-00', '2023-11-13', 'Mark Stanley', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `tblhousehold`
--

CREATE TABLE `tblhousehold` (
  `id` int(11) NOT NULL,
  `householdno` int(11) NOT NULL,
  `zone` varchar(11) NOT NULL,
  `totalhouseholdmembers` int(2) NOT NULL,
  `headoffamily` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhousehold`
--

INSERT INTO `tblhousehold` (`id`, `householdno`, `zone`, `totalhouseholdmembers`, `headoffamily`) VALUES
(3, 2, '2', 0, '12');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `logdate` datetime NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`id`, `user`, `logdate`, `action`) VALUES
(2, 'asd', '2017-01-04 00:00:00', 'Added Resident namedjayjay, asd asd'),
(3, 'asd', '2017-01-04 19:13:40', 'Update Resident named Sample1, User1 Brgy1'),
(4, 'sad', '2017-01-05 13:22:10', 'Update Official named eliezer a. vacalares, jr.'),
(7, 'sad', '2017-01-05 13:54:40', 'Update Household Number 1'),
(8, 'sad', '2017-01-05 14:00:08', 'Update Blotter Request sda, as das'),
(9, 'sad', '2017-01-05 14:15:39', 'Update Clearance with clearance number of 123131'),
(10, 'sad', '2017-01-05 14:25:03', 'Update Permit with business name of asda'),
(11, 'sad', '2017-01-05 14:25:25', 'Update Resident named Sample1, User1 Brgy1'),
(12, 'Administrator', '2017-01-24 16:32:40', 'Added Permit with business name of hahaha'),
(13, 'Administrator', '2017-01-24 16:35:41', 'Added Clearance with clearance number of 123'),
(14, 'Administrator', '2017-01-24 18:43:35', 'Added Activity sad'),
(15, 'Administrator', '2017-01-24 18:45:49', 'Added Activity qwe'),
(16, 'Administrator', '2017-01-24 18:46:20', 'Added Activity ss'),
(17, 'Administrator', '2017-01-24 18:47:39', 'Added Activity e'),
(18, 'Administrator', '2017-01-24 18:55:20', 'Added Activity activity'),
(19, 'Administrator', '2017-01-24 18:58:23', 'Added Activity Activity'),
(20, 'Administrator', '2017-01-24 19:00:07', 'Added Activity activity'),
(21, 'Administrator', '2017-01-24 19:02:32', 'Added Activity Activity'),
(22, 'Administrator', '2017-01-24 19:04:54', 'Added Activity activity'),
(23, 'Administrator', '2017-01-24 19:08:40', 'Update Activity activity'),
(24, 'Administrator', '2017-01-27 23:23:40', 'Added Activity teets'),
(25, 'Administrator', '2017-01-27 23:24:14', 'Update Resident named Sample1, User1 Brgy1'),
(26, 'Administrator', '2017-01-27 23:25:10', 'Update Resident named sda, as das'),
(27, 'Administrator', '2017-01-30 10:45:13', 'Added Resident named 2, 2 2'),
(28, 'Administrator', '2017-01-30 10:45:54', 'Added Resident named 2, 2 2'),
(29, 'Administrator', '2017-02-06 08:58:23', 'Update Resident named sda, as das'),
(30, 'Administrator', '2017-02-06 09:00:14', 'Update Resident named sda, as das'),
(31, 'Administrator', '2017-02-06 09:03:57', 'Added Household Number 2'),
(32, 'Administrator', '2017-02-06 09:04:25', 'Added Household Number 2'),
(33, 'Administrator', '2022-10-10 21:07:34', 'Added Resident named Wu, Mark Stanley S'),
(34, 'Administrator', '2022-10-10 21:35:16', 'Added Resident named Molina, Joshua '),
(35, 'Administrator', '2022-10-10 21:36:06', 'Added Resident named Molina, Joshua Philip '),
(36, 'Administrator', '2022-10-10 21:37:37', 'Added Resident named Molina, Joshua Philip '),
(37, 'Administrator', '2022-10-10 21:38:32', 'Added Resident named Molina, Joshua Philip '),
(38, 'Administrator', '2022-10-10 21:39:43', 'Added Resident named Molina, Joshua Philip '),
(39, 'Administrator', '2022-10-10 21:45:49', 'Added Resident named Molina, Joshua Philip T'),
(40, 'Administrator', '2022-10-10 22:04:36', 'Added Resident named , Joshua Philip T'),
(41, 'Administrator', '2022-10-10 22:05:43', 'Added Resident named , Joshua Philip T'),
(42, 'Administrator', '2022-10-10 22:06:04', 'Added Resident named Molina, Joshua Philip T'),
(43, 'Administrator', '2022-10-10 22:06:57', 'Added Resident named Molina, Joshua Philip T'),
(44, 'Administrator', '2022-10-10 22:07:53', 'Added Resident named Molina, Joshua Philip T'),
(45, 'Administrator', '2022-10-10 22:08:16', 'Added Resident named Molina, Joshua Philip T'),
(46, 'Administrator', '2022-10-10 22:08:44', 'Added Resident named Molina, Joshua Philip T'),
(47, 'Administrator', '2022-10-10 22:14:45', 'Update Resident named Wu, Mark Stanley S'),
(48, 'Administrator', '2022-10-10 22:15:40', 'Update Resident named Wu, Mark Stanley S'),
(49, 'Administrator', '2022-10-10 22:19:31', 'Update Resident named Wu, Mark Stanley S'),
(50, 'Administrator', '2022-10-10 22:23:53', 'Update Resident named Wu, Mark Stanley S'),
(51, 'Administrator', '2022-10-10 22:24:35', 'Update Resident named Wu, Mark Stanley S'),
(52, 'Administrator', '2022-10-10 22:36:26', 'Update Resident named Wu, Mark Stanley S'),
(53, 'Administrator', '2022-10-10 22:38:16', 'Update Resident named sda, as das'),
(54, 'Administrator', '2022-10-10 22:40:33', 'Update Resident named Wu, Mark Stanley S'),
(55, 'Administrator', '2022-10-10 22:42:30', 'Update Resident named wu, as das'),
(56, 'Administrator', '2022-10-10 22:46:09', 'Update Resident named mark, as das'),
(57, 'Administrator', '2022-10-10 22:47:14', 'Update Resident named wu, as das'),
(58, 'Administrator', '2022-10-10 22:47:23', 'Update Resident named marks, as das'),
(59, 'Administrator', '2022-10-10 22:49:00', 'Update Resident named marks, as das'),
(60, 'Administrator', '2022-10-10 22:49:30', 'Update Resident named Wu, Mark Stanley S'),
(61, 'Administrator', '2022-10-10 22:50:08', 'Update Resident named Wu, Mark Stanley S'),
(62, 'Administrator', '2022-10-10 22:50:40', 'Update Resident named Molina, Joshua Philip '),
(63, 'Administrator', '2022-10-10 22:51:08', 'Update Resident named Toribio, Janette das'),
(64, 'Administrator', '2022-10-10 22:51:15', 'Update Resident named Toribio, Janette '),
(65, 'Administrator', '2022-10-10 22:51:59', 'Update Resident named Idris, Jaco '),
(66, 'Administrator', '2022-10-10 22:52:33', 'Update Resident named Idris, Jaco '),
(67, 'Administrator', '2022-10-10 22:52:45', 'Update Resident named Idris, Jaco '),
(68, 'Administrator', '2022-10-10 22:53:31', 'Added Resident named Mariano, Luz Marie '),
(69, 'Administrator', '2022-10-10 22:54:29', 'Update Resident named , Luz Marie '),
(70, 'Administrator', '2022-10-10 22:54:30', 'Update Resident named , Luz Marie '),
(71, 'Administrator', '2022-10-10 22:55:46', 'Update Resident named , Luz Marie '),
(72, 'Administrator', '2022-10-10 22:57:08', 'Update Resident named Wu, Mark Stanley '),
(73, 'Administrator', '2022-10-10 23:12:40', 'Update Official named Jaco Idris'),
(74, 'Administrator', '2022-10-10 23:12:42', 'Update Official named Jaco Idris'),
(75, 'Administrator', '2022-10-10 23:12:42', 'Update Official named Jaco Idris'),
(76, 'Administrator', '2022-10-10 23:21:12', 'Added Staff with name of staff'),
(77, 'Administrator', '2022-10-10 23:21:46', 'Update Resident named hi, dfsd sdf'),
(78, 'Administrator', '2022-10-10 23:22:06', 'Update Resident named sd, dfsd sdf'),
(79, 'Administrator', '2022-10-10 23:22:16', 'Update Resident named dfdfdfdf, dfsd sdf'),
(80, 'Administrator', '2022-10-10 23:29:02', 'Update Resident named Wu, Mark Stanley '),
(81, 'Administrator', '2022-10-10 23:29:36', 'Added Resident named Mariano, Luz Marie '),
(82, 'Administrator', '2022-10-10 23:31:04', 'Update Resident named Mariano, Luz Marie '),
(83, 'Administrator', '2022-10-10 23:32:58', 'Update Resident named Wu, Mark Stanley '),
(84, 'Administrator', '2022-10-10 23:33:16', 'Update Resident named Idris, Jaco '),
(85, 'Administrator', '2022-10-10 23:33:34', 'Update Resident named Luz, Marie '),
(86, 'Administrator', '2022-10-10 23:37:59', 'Update Resident named Luz, Marie '),
(87, 'Administrator', '2022-10-10 23:38:17', 'Update Resident named Idris, Jaco '),
(88, 'Administrator', '2022-10-10 23:45:13', 'Update Activity request'),
(89, 'Administrator', '2022-10-10 23:45:14', 'Update Activity request'),
(90, 'Administrator', '2022-10-10 23:45:14', 'Update Activity request'),
(91, 'Administrator', '2022-10-10 23:45:14', 'Update Activity request'),
(92, 'Administrator', '2022-10-10 23:45:14', 'Update Activity request'),
(93, 'Administrator', '2022-10-10 23:45:14', 'Update Activity request'),
(94, 'Administrator', '2022-10-10 23:45:14', 'Update Activity request'),
(95, 'Administrator', '2022-10-10 23:45:14', 'Update Activity request'),
(96, 'Administrator', '2022-10-11 00:18:24', 'Update Official named Wu, Mark Stanley'),
(97, 'Administrator', '2022-10-11 00:18:26', 'Update Official named Wu, Mark Stanley'),
(98, 'Administrator', '2022-10-11 00:18:40', 'Added Official named Joshua Philip'),
(99, 'Administrator', '2022-10-11 00:18:56', 'Added Official named Joshua Molina'),
(100, 'Administrator', '2022-10-11 00:19:28', 'Added Official named Molina, Joshua'),
(101, 'Administrator', '2022-10-11 00:19:49', 'Added Official named Molina, Joshua'),
(102, 'Administrator', '2022-10-11 00:20:55', 'Added Official named Molina, Joshua'),
(103, 'Administrator', '2022-10-11 00:22:42', 'Added Official named sdfsdfsd'),
(104, 'Administrator', '2022-10-11 00:23:06', 'Added Official named sdfsd, sdfsdf, sdf '),
(105, 'Administrator', '2022-10-11 00:23:28', 'Added Official named sdfsdfs, sdfsd sdfdsf'),
(106, 'Administrator', '2022-10-11 00:30:13', 'Added Official named Wu, Mark Stanley'),
(107, 'Administrator', '2022-10-11 00:31:30', 'Added Official named sdfsdf'),
(108, 'Administrator', '2022-10-11 00:33:07', 'Added Official named dfgdfgdfg'),
(109, 'staff', '2022-10-11 00:41:47', 'Added Official named Molina, Joshua'),
(110, 'Administrator', '2022-10-11 22:41:35', 'Added Official named Molina, Joshua'),
(111, 'staff', '2022-10-11 22:43:56', 'Added Official named Molina, Joshua'),
(112, 'staff', '2022-10-11 22:47:39', 'Added Official named Molina, Joshua'),
(113, 'staff', '2022-10-11 22:48:29', 'Added Official named Molina, Joshua'),
(114, 'staff', '2022-10-11 22:57:43', 'Added Official named Jac'),
(115, 'Administrator', '2022-10-11 23:16:53', 'Added Official named Molina, Joshua'),
(116, 'Administrator', '2022-10-11 23:37:41', 'Added Official named Molina, Joshua'),
(117, 'Administrator', '2022-10-11 23:37:43', 'Added Official named Molina, Joshua'),
(118, 'Administrator', '2022-10-11 23:37:43', 'Added Official named Molina, Joshua'),
(119, 'Administrator', '2022-10-11 23:56:57', 'Added Official named Molina, Joshua'),
(120, 'Administrator', '2022-10-11 23:59:16', 'Added Official named Molina, Joshua'),
(121, 'Administrator', '2022-10-12 18:52:50', 'Update Official named Jaco Idris'),
(122, 'Administrator', '2022-10-12 18:54:55', 'Added Official named Jaco Idris'),
(123, 'Administrator', '2022-10-12 19:02:44', 'Update Resident named Wu, Mark Stanley '),
(124, 'Administrator', '2022-10-12 19:02:53', 'Update Resident named Luz, Marie '),
(125, 'Administrator', '2022-10-12 19:03:14', 'Update Resident named Wu, Mark Stanley '),
(126, 'Administrator', '2022-10-13 08:44:11', 'Added Official named jaco'),
(127, 'Administrator', '2022-10-13 08:44:50', 'Added Staff with name of Joshua'),
(128, 'Administrator', '2022-10-13 08:45:43', 'Update Resident named Wu, Mark Stanley '),
(129, 'Administrator', '2022-10-13 08:58:41', 'Added Official named Joshua Philip'),
(130, 'Administrator', '2022-10-24 10:48:01', 'Added Permit with business name of sdfsdf'),
(131, 'Administrator', '2022-10-24 14:25:22', 'Update Clearance with clearance number of 1234'),
(132, 'Administrator', '2022-10-24 22:02:26', 'Update Official named Mark Wu'),
(133, 'Administrator', '2022-10-24 22:02:39', 'Update Official named Janette Toribio'),
(134, 'Administrator', '2022-10-24 22:02:55', 'Added Official named Joshua Philip'),
(135, 'Administrator', '2022-10-24 22:03:16', 'Added Official named Jaco Idris'),
(136, 'Administrator', '2022-10-24 22:03:32', 'Added Official named Luz Marie'),
(137, 'Administrator', '2022-10-24 22:03:55', 'Added Official named Jadrain Lim'),
(138, 'Administrator', '2022-10-24 22:04:11', 'Added Official named Marife Borromeo'),
(139, 'Administrator', '2022-10-24 22:04:27', 'Added Official named Prince Cabir'),
(140, 'Administrator', '2022-10-24 22:04:42', 'Added Official named TOTS'),
(141, 'Administrator', '2022-10-24 22:04:59', 'Added Official named SUUUU'),
(142, 'Administrator', '2022-10-24 22:05:10', 'Added Official named sheesh'),
(143, 'Administrator', '2022-10-24 22:43:07', 'Update Official named Jadrian Lim'),
(144, 'Administrator', '2022-10-24 22:47:28', 'Update Resident named Wu, Mark Stanley '),
(145, 'Administrator', '2022-10-24 22:47:28', 'Update Resident named Wu, Mark Stanley '),
(146, 'Administrator', '2022-10-24 23:23:57', 'Update Resident named Wu, Mark Stanley '),
(147, 'Administrator', '2022-10-24 23:25:07', 'Update Resident named Pogi, Mark Stanley Sojor'),
(148, 'Administrator', '2022-10-24 23:50:18', 'Update Official named Tots'),
(149, 'Administrator', '2022-10-24 23:50:29', 'Update Official named tots 2'),
(150, 'Administrator', '2022-10-24 23:52:17', 'Update Resident named Pogi, Mark Stanley S'),
(151, 'Administrator', '2022-10-25 09:03:10', 'Update Official named SIUUUU'),
(152, 'Administrator', '2022-11-05 14:50:32', 'Added Resident named ,  '),
(153, 'Administrator', '2022-11-05 15:21:52', 'Update Resident named Idris,  '),
(154, 'Administrator', '2022-11-05 15:22:09', 'Update Resident named Idris, Jaco '),
(155, 'Administrator', '2022-11-07 18:25:56', 'Added Clearance with clearance number of 234'),
(156, 'Administrator', '2022-11-07 18:28:30', 'Update Official named Mark Pogi'),
(157, 'Administrator', '2022-11-07 19:05:02', 'Added Clearance with clearance number of 234'),
(158, 'Administrator', '2022-11-07 19:07:20', 'Added Clearance with clearance number of 123'),
(159, 'Administrator', '2022-11-07 19:09:16', 'Added Clearance with clearance number of 123'),
(160, 'Administrator', '2022-11-07 19:10:51', 'Added Clearance with clearance number of 123'),
(161, 'Administrator', '2022-11-07 19:15:36', 'Added Clearance with clearance number of 234'),
(162, 'Administrator', '2022-11-07 19:16:39', 'Added Clearance with clearance number of 345'),
(163, 'Administrator', '2022-11-07 19:17:29', 'Added Clearance with clearance number of 123'),
(164, 'Administrator', '2022-11-08 01:15:59', 'Added Clearance with clearance number of 123'),
(165, 'Administrator', '2022-11-08 01:16:16', 'Added Clearance with clearance number of 2343'),
(166, 'Administrator', '2022-11-08 01:35:27', 'Added Clearance with clearance number of 123'),
(167, 'Administrator', '2022-11-08 01:35:40', 'Added Clearance with clearance number of 123'),
(168, 'Administrator', '2022-11-08 01:35:58', 'Added Clearance with clearance number of 12332'),
(169, 'Administrator', '2022-11-08 01:46:50', 'Added Clearance with clearance number of 12321'),
(170, 'Administrator', '2022-11-08 01:47:06', 'Added Clearance with clearance number of 234234'),
(171, 'Administrator', '2022-11-08 08:56:30', 'Added Clearance with clearance number of 123'),
(172, 'Administrator', '2022-11-08 09:52:07', 'Added Clearance with clearance number of 123'),
(173, 'Administrator', '2022-11-08 17:12:30', 'Added Clearance with clearance number of 34'),
(174, 'Administrator', '2022-11-10 23:05:12', 'Added Resident named hadkok, sdfsd '),
(175, 'Administrator', '2022-11-10 23:05:52', 'Added Resident named wowowo, wowoff sdf'),
(176, 'Administrator', '2022-11-11 19:33:38', 'Added Resident named hahaahah, sdf sdf'),
(177, 'Administrator', '2022-11-11 19:36:09', 'Added Resident named hdooookk, adfsdf '),
(178, 'Administrator', '2022-11-11 19:47:16', 'Added Resident named owwwe, owshi '),
(179, 'Administrator', '2022-11-11 19:49:02', 'Added Resident named hahahahajsdnfksj, hasdjkfh kasdf'),
(180, 'Administrator', '2022-11-11 19:49:42', 'Added Resident named WEHHH, WEHH '),
(181, 'Administrator', '2022-11-11 19:51:07', 'Added Resident named MONGGO,  '),
(182, 'Administrator', '2022-11-11 20:07:47', 'Added Resident named SIUUUU,  '),
(183, 'Administrator', '2022-11-11 20:09:11', 'Added Resident named SIIUUUU,  '),
(184, 'Administrator', '2022-11-13 19:36:35', 'Update Resident named Pogi, Mark Stanley S'),
(185, 'Administrator', '2022-11-13 19:37:26', 'Update Resident named Pogi, Mark Stanley S'),
(186, 'Administrator', '2022-11-13 19:39:02', 'Update Resident named Pogi, Mark Stanley S'),
(187, 'Administrator', '2022-11-13 19:41:19', 'Added Resident named Wu, Mark '),
(188, 'Administrator', '2022-11-13 19:42:20', 'Added Resident named Wu, Mark '),
(189, 'Administrator', '2022-11-13 19:42:53', 'Added Resident named Wu, Mark '),
(190, 'Administrator', '2022-11-13 19:43:25', 'Added Resident named Wu, Mark '),
(191, 'Administrator', '2022-11-13 19:43:42', 'Added Resident named Wu, Mark '),
(192, 'Administrator', '2022-11-13 19:43:53', 'Added Resident named Wu, Mark '),
(193, 'Administrator', '2022-11-13 19:48:54', 'Added Resident named wu, mark '),
(194, 'Administrator', '2022-11-13 19:54:30', 'Added Resident named wu, mark '),
(195, 'Administrator', '2022-11-13 19:55:17', 'Added Resident named wu, mark '),
(196, 'Administrator', '2022-11-13 19:55:47', 'Added Resident named wu, mark '),
(197, 'Administrator', '2022-11-13 19:56:34', 'Added Resident named wu, mark '),
(198, 'Administrator', '2022-11-13 19:57:34', 'Added Resident named wu, mark '),
(199, 'Administrator', '2022-11-13 19:58:42', 'Added Resident named wu, mark '),
(200, 'Administrator', '2022-11-13 19:59:40', 'Added Resident named wu, mark '),
(201, 'Administrator', '2022-11-13 20:00:59', 'Added Resident named wu, mark '),
(202, 'Administrator', '2022-11-13 20:03:28', 'Update Resident named wu, mark '),
(203, 'Administrator', '2022-11-13 20:05:23', 'Update Resident named wu, mark '),
(204, 'Administrator', '2022-11-13 20:30:48', 'Update Resident named Pogi, Mark Stanley S');

-- --------------------------------------------------------

--
-- Table structure for table `tblofficial`
--

CREATE TABLE `tblofficial` (
  `id` int(11) NOT NULL,
  `sPosition` varchar(50) NOT NULL,
  `completeName` text NOT NULL,
  `pcontact` varchar(20) NOT NULL,
  `paddress` text NOT NULL,
  `termStart` date NOT NULL,
  `termEnd` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblofficial`
--

INSERT INTO `tblofficial` (`id`, `sPosition`, `completeName`, `pcontact`, `paddress`, `termStart`, `termEnd`, `status`) VALUES
(12, 'Captain', 'Mark Wu', '234234', 'dfgdfgdf', '2022-10-03', '2022-10-11', 'Ongoing Term'),
(16, 'Kagawad(Ordinance)', 'Janette Toribio', '234234', '', '2022-10-05', '2022-10-20', 'Ongoing Term'),
(17, 'Kagawad(Public Safety)', 'Joshua Philip', '234', '', '2022-10-03', '2022-10-11', 'Ongoing Term'),
(18, 'Kagawad(Tourism)', 'Tots', '434234', '', '2022-10-02', '2022-10-11', 'Ongoing Term'),
(19, 'Kagawad(Budget & Finance)', 'tots 2', '23423', '', '2022-10-04', '2022-10-12', 'Ongoing Term'),
(20, 'Kagawad(Agriculture)', 'Jadrian Lim', '21323', '', '2022-10-02', '2022-10-04', 'Ongoing Term'),
(21, 'Kagawad(Education)', 'Marife Borromeo', '234', '', '2022-10-03', '2022-10-11', 'Ongoing Term'),
(22, 'Kagawad(Infrastracture)', 'Prince Cabir', '234234', '', '2022-10-04', '2022-10-05', 'Ongoing Term'),
(23, 'SK Chairman', 'TOTS', '234234', '', '2022-10-03', '2022-10-04', 'Ongoing Term'),
(24, 'Secretary', 'Mark Pogi', '234234', '', '2022-10-01', '2022-10-04', 'Ongoing Term'),
(25, 'Treasurer', 'sheesh', '12323', '', '2022-10-01', '2022-10-07', 'Ongoing Term');

-- --------------------------------------------------------

--
-- Table structure for table `tblpermit`
--

CREATE TABLE `tblpermit` (
  `id` int(11) NOT NULL,
  `residentid` int(11) NOT NULL,
  `businessName` text NOT NULL,
  `businessAddress` text NOT NULL,
  `typeOfBusiness` varchar(50) NOT NULL,
  `orNo` int(11) NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpermit`
--

INSERT INTO `tblpermit` (`id`, `residentid`, `businessName`, `businessAddress`, `typeOfBusiness`, `orNo`, `samount`, `dateRecorded`, `recordedBy`, `status`) VALUES
(14, 19, 'sdfsdf', 'sdfsdf', 'Option 1', 0, 0, '2022-10-24', 'mark', 'Disapproved'),
(15, 19, 'hatdog', 'asdf', 'Option 1', 2323, 2312, '2022-10-24', 'mark', 'Approved'),
(16, 19, 'dfgdfg', 'dfg', 'Option 1', 0, 0, '2022-10-25', 'mark', 'Disapproved'),
(17, 19, 'sdfd', 'sdf', 'Option 1', 231, 2, '2022-10-25', 'mark', 'Approved'),
(18, 19, 'sdfsd', 'sdf', 'Option 2', 0, 0, '2022-10-25', 'mark', 'Disapproved');

-- --------------------------------------------------------

--
-- Table structure for table `tblresident`
--

CREATE TABLE `tblresident` (
  `id` int(11) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `bdate` varchar(20) NOT NULL,
  `bplace` text NOT NULL,
  `age` int(11) NOT NULL,
  `barangay` varchar(120) NOT NULL,
  `zone` varchar(5) NOT NULL,
  `totalhousehold` int(5) NOT NULL,
  `differentlyabledperson` varchar(100) NOT NULL,
  `relationtohead` varchar(50) NOT NULL,
  `maritalstatus` varchar(50) NOT NULL,
  `bloodtype` varchar(10) NOT NULL,
  `civilstatus` varchar(20) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `monthlyincome` int(12) NOT NULL,
  `householdnum` int(11) NOT NULL,
  `lengthofstay` int(11) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `skills` text NOT NULL,
  `igpitID` int(11) NOT NULL,
  `philhealthNo` int(12) NOT NULL,
  `highestEducationalAttainment` varchar(50) NOT NULL,
  `houseOwnershipStatus` varchar(50) NOT NULL,
  `landOwnershipStatus` varchar(20) NOT NULL,
  `dwellingtype` varchar(20) NOT NULL,
  `waterUsage` varchar(20) NOT NULL,
  `lightningFacilities` varchar(20) NOT NULL,
  `sanitaryToilet` varchar(20) NOT NULL,
  `num` varchar(30) NOT NULL,
  `remarks` text NOT NULL,
  `image` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresident`
--

INSERT INTO `tblresident` (`id`, `lname`, `fname`, `mname`, `bdate`, `bplace`, `age`, `barangay`, `zone`, `totalhousehold`, `differentlyabledperson`, `relationtohead`, `maritalstatus`, `bloodtype`, `civilstatus`, `occupation`, `monthlyincome`, `householdnum`, `lengthofstay`, `religion`, `nationality`, `gender`, `skills`, `igpitID`, `philhealthNo`, `highestEducationalAttainment`, `houseOwnershipStatus`, `landOwnershipStatus`, `dwellingtype`, `waterUsage`, `lightningFacilities`, `sanitaryToilet`, `num`, `remarks`, `image`, `username`, `password`) VALUES
(11, 'Luz', 'Marie', '', '2017-01-01', 'dfsd1', 5, '', '2', 0, 'asdf', '', 'saf', 'sadf', 'fsd', 'student', 1, 0, 0, 'asd', 'asd', 'Female', 'asda1', 0, 0, 'Doctorate degree', 'Live with Parents/Re', '1st Option', '1st Option', 'dsad11', '0', 'dsfs11', '0', 'fdgfd11', '1482037013441_bg.PNG', 'jaco', 'a'),
(12, 'Idris', 'Jaco', '', '2001-02-01', 'Zamboanga City', 21, '', '0', 0, '', '', '', '', '', 'Astronaut', 999999, 0, 0, 'catholic', 'sda', 'Male', 'asdfsf', 0, 0, 'Master’s degree', 'Rent', '2nd Option', '1st Option', 'sadas', '0', 'asdas', '0', 'dsadsa', 'default.png', 'asd', 'asda'),
(13, 'Molina', 'Joshua Philip', '', '2001-06-30', 'asdf', 21, '', '0', 0, '', '', '', '', '', 'student', 234, 0, 1, 'asd', 'asdf', 'Male', 'saf', 3, 3, 'No schooling completed', 'Own Home', '1st Option', '1st Option', 'asdf', '3', 'asdf', '0', 'asdf', 'default.png', '1', '1'),
(14, 'Toribio', 'Janette', '', '2001-06-01', 'dsf', 21, '', '0', 0, '', '', '', '', '', 'student', 234, 0, 3, 'asdf', 'asdf', 'Female', 'asf', 2, 2, 'No schooling completed', 'Own Home', '1st Option', '1st Option', 'asf', '2', 'asdf', '0', 'asd', '1482037013441_bg.PNG', 'asdf', 'asdf'),
(19, 'Pogi', 'Mark Stanley', 'S', '2000-06-10', 'Zamboanga City', 22, '', '', 0, '', '', 'single', 'A', 'single', 'student', 45, 0, 0, 'roman catholic', 'Filipino', 'Male', '', 0, 0, 'College, undergrad', 'Own Home', 'Owned', '1st Option', 'Faucet', '0', 'Water-sealed', '09164806566', '', '1665621943459_84e832cc-b853-40d1-bcf9-bd0d2aae2bec.sized-1000x1000.jpg', 'mark', 'mark'),
(29, 'SIIUUUU', '', '', '', '', 0, '', '', 0, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, 0, 'No schooling completed', 'Own Home', 'Owned', '1st Option', 'Faucet', 'Electric', 'Water-sealed', '0', '', '1668168551118_Risk Assessment Plan Group 3 1.png', 'admin', 'admin'),
(30, 'wu', 'mark', '', '', '', 0, '', '', 0, '', '', '', '', '', '', 20000, 0, 0, '', '', 'Male', '', 0, 0, 'No schooling completed', 'Own Home', 'Owned', '1st Option', 'Faucet', '0', 'Water-sealed', '0916480656', '', 'default.png', 'markwu', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`id`, `name`, `username`, `password`) VALUES
(2, 'staff', 'staff', 'staff'),
(3, 'Joshua', 'Josh', 'sdff');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'administrator'),
(2, 'staff', 'staff', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `tblzone`
--

CREATE TABLE `tblzone` (
  `id` int(5) NOT NULL,
  `zone` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblzone`
--

INSERT INTO `tblzone` (`id`, `zone`, `username`, `password`) VALUES
(2, '4', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblactivity`
--
ALTER TABLE `tblactivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblactivityphoto`
--
ALTER TABLE `tblactivityphoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblblotter`
--
ALTER TABLE `tblblotter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclearance`
--
ALTER TABLE `tblclearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblofficial`
--
ALTER TABLE `tblofficial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpermit`
--
ALTER TABLE `tblpermit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresident`
--
ALTER TABLE `tblresident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblzone`
--
ALTER TABLE `tblzone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblactivity`
--
ALTER TABLE `tblactivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblactivityphoto`
--
ALTER TABLE `tblactivityphoto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tblblotter`
--
ALTER TABLE `tblblotter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblclearance`
--
ALTER TABLE `tblclearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `tblofficial`
--
ALTER TABLE `tblofficial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblpermit`
--
ALTER TABLE `tblpermit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblresident`
--
ALTER TABLE `tblresident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



