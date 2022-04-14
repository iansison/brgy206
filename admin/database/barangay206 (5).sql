-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 04:52 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangay206`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `cnumber` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `password`, `img`, `role`, `cnumber`) VALUES
(4, 'Aeron Pecdasen', 'aeron@gmail.com', '$2y$10$ecwdF2ZeV6tKLuZaVNS8b.SLKGDcibPHBWJ6LVrk75zGfR9f/JeSO', '1-magic-emperor-122.png', '1', '123');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `uemail` varchar(255) DEFAULT NULL,
  `upurpose` varchar(255) DEFAULT NULL,
  `uaddress` varchar(255) DEFAULT NULL,
  `businessName` varchar(255) DEFAULT NULL,
  `businessType` varchar(255) DEFAULT NULL,
  `businessAddress` varchar(255) DEFAULT NULL,
  `urbi` varchar(255) DEFAULT NULL,
  `udate` varchar(255) DEFAULT NULL,
  `ustatus` varchar(255) DEFAULT NULL,
  `udate_approve` varchar(255) DEFAULT NULL,
  `applicationId` varchar(255) DEFAULT NULL,
  `permit_type` varchar(255) DEFAULT NULL,
  `ucontactno` varchar(255) DEFAULT NULL,
  `to_travel` varchar(255) DEFAULT NULL,
  `owner` varchar(255) NOT NULL,
  `receiptImg` varchar(255) DEFAULT NULL,
  `pickupMode` varchar(255) DEFAULT NULL,
  `residentId` varchar(255) DEFAULT NULL,
  `permit_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `uname`, `uemail`, `upurpose`, `uaddress`, `businessName`, `businessType`, `businessAddress`, `urbi`, `udate`, `ustatus`, `udate_approve`, `applicationId`, `permit_type`, `ucontactno`, `to_travel`, `owner`, `receiptImg`, `pickupMode`, `residentId`, `permit_status`) VALUES
(182, 'Aeron Pecdasens', 'aerskargu21@gmail.com', 'asd', '', NULL, NULL, NULL, '001', 'March 11, 2022 11:34:pm  ', 'Cancelled', '2022-03-25', '82', 'Barangay Clearance', '09512323123', NULL, '', 'none', 'Walk in', NULL, 'Archive'),
(183, 'asd asd', 'aerskargu21@gmail.com', 'asd', '', NULL, NULL, NULL, '001', 'March 21, 2022 8:40:pm  ', 'Cancelled', NULL, '85', 'Indigency', '09512323123', NULL, '', '1647866404_f1.PNG', 'pick up', NULL, 'none'),
(184, 'asd asd', 'aerskargu21@gmail.com', 'Business', NULL, 'asd', 'Sole Proprietership', 'asd', '001', 'March 25, 2022 7:52:pm  ', 'Cancelled', NULL, '85', 'Business Clearance', '09512323123', NULL, 'asd', 'none', 'walk in', NULL, 'Archive'),
(185, 'asd asd', 'aerskargu21@gmail.com', 'asd', '', NULL, NULL, NULL, '001', 'March 25, 2022 8:24:pm  ', 'Cancelled', '2022-03-25', '85', 'Barangay Clearance', '09512323123', NULL, '', 'none', 'Walk in', NULL, 'Archive'),
(186, 'asd asd', 'aerskargu21@gmail.com', 'asd', '', NULL, NULL, NULL, '001', 'March 25, 2022 10:43:pm  ', 'Cancelled', '2022-03-26', '85', 'Barangay Clearance', '09512323123', NULL, '', 'none', 'Walk in', NULL, 'Archive'),
(196, 'asd asd', 'aerskargu21@gmail.com', 'Business', NULL, 'asd', 'Sole Proprietership', 'asd', '0054', 'March 27, 2022 7:02:pm  ', 'Cancelled', NULL, '86', 'Business Clearance', '09512323123', NULL, 'asd', 'none', 'walk in', '0054-2-1', 'none'),
(197, 'asd asd', 'aerskargu21@gmail.com', 'asd', '', NULL, NULL, NULL, '0054', 'March 27, 2022 7:16:pm  ', 'Denied', '2022-03-27', '86', 'Barangay Clearance', '09512323123', NULL, '', 'none', 'Walk in', '0054-2-1', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `blotter`
--

CREATE TABLE `blotter` (
  `id` int(50) NOT NULL,
  `complainant` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `date_session` date NOT NULL,
  `details_session` varchar(255) NOT NULL,
  `complainantAge` varchar(255) DEFAULT NULL,
  `complainantAddress` varchar(255) DEFAULT NULL,
  `complainantContact` varchar(255) DEFAULT NULL,
  `complainee` varchar(255) DEFAULT NULL,
  `complaineeAge` varchar(255) DEFAULT NULL,
  `complaineeAddress` varchar(255) DEFAULT NULL,
  `complaineeContact` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `session_no` varchar(255) DEFAULT NULL,
  `blotter_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blotter`
--

INSERT INTO `blotter` (`id`, `complainant`, `location`, `status`, `details`, `date_session`, `details_session`, `complainantAge`, `complainantAddress`, `complainantContact`, `complainee`, `complaineeAge`, `complaineeAddress`, `complaineeContact`, `date`, `time`, `session_no`, `blotter_id`) VALUES
(36, 'Jem Ferrer', '', 'Active', 'asdasd', '0000-00-00', '', '21', 'asd', '0646543.0', 'vince baldog', '23', '1asd', '65432545', 'March 11, 2022 6:30:pm  ', '06:33 PM', '2', '17'),
(38, 'Jem Ferrer', '', 'Active', 'asd', '0000-00-00', '', '21', 'asd', '0646543.0', 'vince baldog', '23', '1asd', '65432545', 'March 21, 2022 1:07:pm  ', '01:09 PM', '3', '17'),
(39, 'Jem Ferrer', 'Manila', 'Active', 'asd', '0000-00-00', '', '21', 'asd', '123123', 'asd', '23', '1asd', '65432545', 'March 24, 2022 7:09:pm  ', '07:11 PM', '1', NULL),
(40, 'Jem Ferrer', '', 'Active', 'asd', '0000-00-00', '', '21', 'asd', '123123', 'asd', '23', '1asd', '65432545', 'March 24, 2022 7:11:pm  ', '07:13 PM', '4', '39');

-- --------------------------------------------------------

--
-- Table structure for table `brgy_account`
--

CREATE TABLE `brgy_account` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `uemail` varchar(255) NOT NULL,
  `upwd` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `image_picture` varchar(255) NOT NULL,
  `accountStatus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brgy_account`
--

INSERT INTO `brgy_account` (`id`, `fullname`, `position`, `contact_no`, `uemail`, `upwd`, `role`, `image_picture`, `accountStatus`) VALUES
(36, 'Administrator', '', '00009123456789', 'Admin@gmail.com', '$2y$10$DX7S.L5g2x8HwPGrpbqNz.F6vs2oTzuR2RTJsr.1DpNAQ.m8a3yVG', '1', '1648307688_miyuki.png', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `ID` int(11) NOT NULL,
  `businessName` varchar(128) NOT NULL,
  `businessType` varchar(128) NOT NULL,
  `businessProduct` varchar(128) NOT NULL,
  `businessContactno` varchar(128) NOT NULL,
  `businessEmail` varchar(128) NOT NULL,
  `openingHours` varchar(128) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `businessId` varchar(255) DEFAULT NULL,
  `date_set` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `businessImg` varchar(255) DEFAULT NULL,
  `bstatus` varchar(255) DEFAULT NULL,
  `urbi` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `uemail` varchar(255) DEFAULT NULL,
  `udate_approve` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`ID`, `businessName`, `businessType`, `businessProduct`, `businessContactno`, `businessEmail`, `openingHours`, `location`, `businessId`, `date_set`, `description`, `businessImg`, `bstatus`, `urbi`, `uname`, `uemail`, `udate_approve`, `status`) VALUES
(69, 'Cybercafe', '', '', '123123', 'aeron@gmail.com', '', '2219+Recto+Ave,+Sampaloc,+Manila,+1008+Metro+Manila', '68', '2022-03-04 10:21:57', 'asd', '1646360517_portfolio-details-3.jpg', 'Cancelled', '007', 'Aeron Pecdasen', 'aerskargu21@gmail.com', '2022-03-27', 'none'),
(72, 'Wanderer', '', '', '09231123344', 'aerskargu21@gmail.com', '', '2219+Recto+Ave,+Sampaloc,+Manila,+1008+Metro+Manila', '82', '2022-03-11 22:23:31', 'asd', '1647008611_DTCAM 070521n.jpg', 'Cancelled', '001', 'Aeron Pecdasens', 'aerskargu21@gmail.com', '2022-03-25', 'none'),
(75, 'Wanderer', '', '', '09232123456', 'aerskargu21@gmail.com', '', '2219+Recto+Ave,+Sampaloc,+Manila,+1008+Metro+Manila', '85', '2022-03-26 15:23:14', 'asd', '1648279394_75392e9324c4ce74de4ea976c6a0d4b3.png', 'Cancelled', '001', 'asd asd', 'aerskargu21@gmail.com', '2022-03-27', 'none'),
(76, 'Wanderer', '', '', '90123123', 'aerskargu21@gmail.com', '', 'asd', '86', '2022-03-27 19:20:34', 'asd', '1648380034_16712064_1574588412570230_2660634489918040697_n.jpg', 'Cancelled', '0054', 'asd asd', 'aerskargu21@gmail.com', NULL, 'Active'),
(77, 'asdaa', '', '', 'asd', 'asdasdasd@asd.com', '', 'asd', '86', '2022-03-27 19:27:21', 'asd', '1648380830_magic-emperor-122.png', 'Pending', '0054', 'asd asd', 'aerskargu21@gmail.com', '2022-03-27', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `businessclearance`
--

CREATE TABLE `businessclearance` (
  `ID` int(11) NOT NULL,
  `business_owner` varchar(255) NOT NULL,
  `businessName` varchar(255) NOT NULL,
  `businessType` varchar(255) NOT NULL,
  `businessAddress` varchar(255) NOT NULL,
  `businessEmail` varchar(255) NOT NULL,
  `businessContactno` varchar(255) NOT NULL,
  `time_upload` varchar(128) NOT NULL,
  `rbi` varchar(128) NOT NULL,
  `req_status` varchar(128) NOT NULL,
  `date_approve` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `ID` int(11) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `dates` varchar(128) NOT NULL,
  `defendant` varchar(128) NOT NULL,
  `timee` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `details` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_session` date NOT NULL,
  `details_session` varchar(255) NOT NULL,
  `complaintsId` varchar(255) NOT NULL,
  `narration` varchar(255) DEFAULT NULL,
  `urbi` varchar(255) DEFAULT NULL,
  `contactno` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`ID`, `fullname`, `dates`, `defendant`, `timee`, `email`, `details`, `status`, `date_session`, `details_session`, `complaintsId`, `narration`, `urbi`, `contactno`) VALUES
(25, 'Aeron Pecdasen', '2022-03-06 11:27:37', '', '', 'aerskargu21@gmail.com', 'asd', 'Active', '0000-00-00', '', '82', 'Littering', '001', '09512323123'),
(26, 'asd asd', '2022-03-22 11:12:38', '', '', 'aerskargu21@gmail.com', 'asdasd', 'Active', '0000-00-00', '', '85', 'Littering', '001', '09512323123');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `barangay_clearance` varchar(255) DEFAULT NULL,
  `business_clearance` varchar(255) DEFAULT NULL,
  `indigency` varchar(255) DEFAULT NULL,
  `delivery_fee` varchar(255) DEFAULT NULL,
  `aboutus` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `vission` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `barangay_clearance`, `business_clearance`, `indigency`, `delivery_fee`, `aboutus`, `mission`, `vission`) VALUES
(1, '0', '500', '0', '25', 'e-Barangay 206 is a milestone spearheaded by Barangay 206 Dinalupihan Tondo, Maynila government\r\n\r\nIt is created to empower Barangay 206 Dinalupihan to digitally transform its community by providing efficient access to different services at its community\'s convenience while implementing government transaparency.\r\n\r\ne-Barangay 206 is dedicated in enhancing its services to build a sustainable future for its community.', 'With the guidance of the divine providence, multi-sectoral developments in the barangay aimed to be realized thru self-reliant, supportive citizens, efficient and effective public leaders.', 'Envisions a Progressive, Healthy, Peaceful community, empowered constituents and collectively participating in decision making gearing towards good governance.');

-- --------------------------------------------------------

--
-- Table structure for table `generated_brgyclearance`
--

CREATE TABLE `generated_brgyclearance` (
  `id` int(11) NOT NULL,
  `uname` varchar(128) NOT NULL,
  `upurpose` varchar(128) NOT NULL,
  `uaddress` varchar(128) NOT NULL,
  `time_upload` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(128) NOT NULL,
  `news_img` varchar(128) DEFAULT NULL,
  `time_upload` varchar(128) DEFAULT NULL,
  `file_type` varchar(255) NOT NULL,
  `news_descri` varchar(255) DEFAULT NULL,
  `news_Status` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_img`, `time_upload`, `file_type`, `news_descri`, `news_Status`, `status`) VALUES
(120, 'WATER INTERRUPTION', 'news-61e468bb621ca1.01607201.jpg', 'January 17, 2022 2:49:am  ', 'img', '  On November 12, 2021, our barangay will be having a water interruption.', NULL, 'Publish'),
(121, 'AYUDA FOR SENIOR CITIZENS', 'news-61e46bbcacec97.77824531.jpg', 'January 17, 2022 2:57:am  ', 'img', '         Please be advised that the distribution of benefits for senior citizens will be held on November 22, 2021.', 'Archive', 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `id` int(11) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cnumber` bigint(50) NOT NULL,
  `position` varchar(128) NOT NULL,
  `img` varchar(128) NOT NULL,
  `role` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rbi_tenant`
--

CREATE TABLE `rbi_tenant` (
  `id` int(50) NOT NULL,
  `family_no` int(50) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `tenant` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `voter_status` varchar(255) NOT NULL,
  `rbi_id` varchar(255) DEFAULT NULL,
  `streetno` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `tenantOwner` varchar(255) DEFAULT NULL,
  `family_position` varchar(255) DEFAULT NULL,
  `relationship` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `resident_no` varchar(255) DEFAULT NULL,
  `rnumber` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rbi_tenant`
--

INSERT INTO `rbi_tenant` (`id`, `family_no`, `full_name`, `address`, `birth_place`, `birth_date`, `gender`, `civil_status`, `tenant`, `occupation`, `voter_status`, `rbi_id`, `streetno`, `firstname`, `middlename`, `lastname`, `tenantOwner`, `family_position`, `relationship`, `position`, `resident_no`, `rnumber`, `status`) VALUES
(185, 2, 'asd asd', '', 'asd', '2022-03-03', 'Male', 'Single', '', 'asd', 'Registered', '0054', 'asd', 'asd', 'asd', 'asd', NULL, 'Head', 'asd', NULL, '0054-2-1', '1', 'Transferred'),
(186, 3, 'asdqwe qwe', '', 'qwe', '2022-03-10', 'Male', 'Single', '', 'qwe', 'Registered', '0054', 'asd', 'asdqwe', 'qwe', 'qwe', NULL, 'Head', 'qwe', NULL, '0054-3-1', '1', 'Transferred'),
(187, 2, 'eqwe qwe', '', 'qwe', '2022-03-04', 'Male', 'Single', '', 'qwe', 'Registered', '0054', 'asd', 'eqwe', 'qwe', 'qwe', NULL, NULL, 'qwe', NULL, '0054-2-2', '2', 'Active'),
(188, 1, 'Jem Ferrer', '', 'asd', '2022-03-10', 'Male', 'Single', '', 'asd', 'Registered', '0061', 'asd', 'Jem', 'Baldog', 'Ferrer', 'Tenant', 'Head', '', '1', '0061-1-1', '1', 'Active'),
(189, 1, '123asd asd', '', 'asd', '2022-03-11', 'Male', 'Single', '', 'asd', 'Registered', '003', 'asd', '123asd', 'asdas', 'asd', 'Owner', 'Head', '', '1', '003-1-1', '1', 'Deceased'),
(190, 2, 'asdqwe asd', '', 'asd', '2022-03-11', 'Male', 'Single', '', 'asd', 'Registered', '003', 'asd', 'asdqwe', 'asd', 'asd', NULL, 'Head', 'asd', NULL, '003-2-1', '1', 'Active'),
(191, 1, 'asd asd', '', 'asd', '2022-03-03', 'Male', 'Single', '', 'asd', 'Registered', '003', 'asd', 'asd', 'asd', 'asd', NULL, NULL, NULL, NULL, '003-1-2', '2', 'Active'),
(192, 2, 'asd asd', '', 'asd', '2022-03-11', 'Male', 'Single', '', 'asd', 'Registered', '003', 'asd', 'asd', 'asd', 'asd', NULL, NULL, '', NULL, '003-2-2', '2', 'Transferred'),
(193, 2, 'asd asd', '', 'asd', '2022-03-04', 'Male', 'Single', '', 'asd', 'Registered', '003', 'asd', 'asd', 'asd', 'asd', NULL, NULL, '', NULL, '003-2-3', '3', 'Active'),
(194, 2, 'asd asd', '', 'asd', '2022-03-11', 'Male', 'Single', '', 'asd', 'Not-registered', '003', 'asd', 'asd', 'asd', 'asd', NULL, NULL, '', NULL, '003-2-4', '4', 'Transferred'),
(195, 2, 'asd asd', '', 'asd', '2022-03-11', 'Male', 'Single', '', 'asd', 'Registered', '0061', 'asd', 'asd', 'asd', 'asd', NULL, 'Head', 'asd', NULL, '0061-2-1', '1', 'Active'),
(196, 1, 'asd asd', '', 'asd', '2022-03-11', 'Female', 'Single', '', 'asd', 'Not-registered', '0061', 'asd', 'asd', 'asd', 'asd', NULL, NULL, '', NULL, '0061-1-2', '2', 'Active'),
(197, 2, 'asdasdas asd', '', 'asd', '2022-03-09', 'Male', 'Single', '', 'asd', 'Registered', '003', 'asd', 'asdasdas', 'asd', 'asd', NULL, NULL, '', NULL, '003-2-5', '5', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `ID` int(11) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `usersaddress` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tentreq` varchar(128) DEFAULT NULL,
  `tablereq` varchar(128) DEFAULT NULL,
  `chairreq` varchar(128) DEFAULT NULL,
  `projectorreq` varchar(128) DEFAULT NULL,
  `purpose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`ID`, `fullname`, `usersaddress`, `email`, `tentreq`, `tablereq`, `chairreq`, `projectorreq`, `purpose`) VALUES
(14, 'Aeron Paul M Pecdasen', 'Tondo Manila', 'aepol21@gmail.com', NULL, NULL, NULL, NULL, 'asd'),
(15, 'Aeron Paul M Pecdasen', 'Tondo Manila', 'aepol21@gmail.com', NULL, NULL, NULL, NULL, 'asd'),
(16, 'Aeron Paul M Pecdasen', 'Tondo Manila', 'aepol21@gmail.com', 'Tent 1x', NULL, NULL, NULL, 'bday'),
(17, 'Aeron Paul M Pecdasen', 'Tondo Manila', 'aepol21@gmail.com', 'Tent 2x', NULL, NULL, NULL, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `street`
--

CREATE TABLE `street` (
  `id` int(11) NOT NULL,
  `street` varchar(50) DEFAULT NULL,
  `householdNo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `street`
--

INSERT INTO `street` (`id`, `street`, `householdNo`) VALUES
(1, 'Manila', 'null'),
(3, 'Manila', '3'),
(4, 'Manila', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `ufullname` varchar(128) NOT NULL,
  `uhouseholdno` int(11) NOT NULL,
  `uemail` varchar(128) NOT NULL,
  `upwd` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `voter` varchar(128) NOT NULL,
  `position` varchar(255) NOT NULL,
  `image_picture` varchar(255) DEFAULT NULL,
  `role` int(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `urbi` varchar(255) DEFAULT NULL,
  `ucontactno` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `ustatus` varchar(255) DEFAULT NULL,
  `residentId` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `img`, `ufullname`, `uhouseholdno`, `uemail`, `upwd`, `gender`, `voter`, `position`, `image_picture`, `role`, `address`, `urbi`, `ucontactno`, `street`, `ustatus`, `residentId`) VALUES
(86, '', 'asd asd', 0, 'aerskargu21@gmail.com', '$2y$10$xT25Cecv4YmBszx884gOtO6jp/jJo9UCAcWW0N6VXAYxr069fWrTC', '', '', '', '1648377389_miyuki.png', 0, '', '0054', '09512323123', 'asd', 'Active', '0054-2-1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blotter`
--
ALTER TABLE `blotter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgy_account`
--
ALTER TABLE `brgy_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `businessclearance`
--
ALTER TABLE `businessclearance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generated_brgyclearance`
--
ALTER TABLE `generated_brgyclearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rbi_tenant`
--
ALTER TABLE `rbi_tenant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `street`
--
ALTER TABLE `street`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `blotter`
--
ALTER TABLE `blotter`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `brgy_account`
--
ALTER TABLE `brgy_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `businessclearance`
--
ALTER TABLE `businessclearance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `generated_brgyclearance`
--
ALTER TABLE `generated_brgyclearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `rbi_tenant`
--
ALTER TABLE `rbi_tenant`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `street`
--
ALTER TABLE `street`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
