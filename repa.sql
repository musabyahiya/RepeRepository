-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 31, 2018 at 10:35 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wwwrepao_repa`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificatesession`
--

CREATE TABLE `certificatesession` (
  `CertificateSessionId` int(11) NOT NULL,
  `CertificateSession` varchar(250) NOT NULL,
  `IsActive` tinyint(4) NOT NULL DEFAULT '1',
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificatesession`
--

INSERT INTO `certificatesession` (`CertificateSessionId`, `CertificateSession`, `IsActive`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(1, 'Jan - Mar', 1, -1, '2018-12-12 14:43:59', NULL, NULL),
(2, 'Apr - Jun', 1, -1, '2018-12-12 14:45:18', NULL, NULL),
(3, 'July - Sep', 1, -1, '2018-12-12 14:45:18', NULL, NULL),
(4, 'Oct - Dec', 1, -1, '2018-12-12 14:45:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `CountryId` int(11) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`CountryId`, `Country`, `IsActive`) VALUES
(1, 'Pakistan', 1),
(2, 'India', 1),
(3, 'Greece', 1),
(4, 'Germany', 1),
(5, 'Bangladesh', 1),
(6, 'USA', 1),
(7, 'Saudi Arabia', 1),
(8, 'Vietnam', 1),
(9, 'United Kingdom', 1),
(10, 'Turkey', 1),
(11, 'Thailand', 1),
(12, 'Taiwan', 1),
(13, 'Switzerland', 1),
(14, 'Sweden', 1),
(15, 'Russia', 1),
(16, 'Qatar', 1),
(17, 'Philippines', 1),
(18, 'Panama', 1),
(19, 'Oman', 1),
(20, 'Norway', 1),
(21, 'New Zealand', 1),
(22, 'Netherlands', 1),
(23, 'Morocco', 1),
(24, 'Mexico', 1),
(25, 'Malaysia', 1),
(26, 'Libya', 1),
(27, 'Kuwait', 1),
(28, 'Japan', 1),
(29, 'Jordan', 1),
(30, 'Iceland', 1),
(31, 'Indonesia', 1),
(32, 'Iran', 1),
(33, 'Iraq', 1),
(34, 'Ireland', 1),
(35, 'Italy', 1),
(36, 'Hungary', 1),
(37, 'France', 1),
(38, 'Egypt', 1),
(39, 'Denmark', 1),
(40, 'Croatia', 1),
(41, 'China', 1),
(42, 'Canada', 1),
(43, 'Chile', 1),
(44, 'Brazil', 1),
(45, 'Belgium', 1),
(46, 'Bahrain', 1),
(47, 'Brunei', 1),
(48, 'Azerbaijan', 1),
(49, 'Argentina', 1),
(50, 'Australia', 1),
(51, 'Afghanistan', 1),
(52, 'Algeria', 1),
(53, 'Belarus', 1),
(54, 'Colombia', 1),
(55, 'Korea, South', 1),
(56, 'Korea, North', 1),
(57, 'Romania', 1),
(58, 'Zimbabwe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `decipline`
--

CREATE TABLE `decipline` (
  `DeciplineId` int(11) NOT NULL,
  `Decipline` varchar(250) NOT NULL,
  `IsActive` tinyint(4) NOT NULL DEFAULT '1',
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decipline`
--

INSERT INTO `decipline` (`DeciplineId`, `Decipline`, `IsActive`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(1, 'Real Estate Management', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(2, 'Business Administration/Management', 1, -1, '2018-12-12 14:35:02', NULL, NULL),
(3, 'Public Administrationt', 1, -1, '2018-12-12 14:35:02', NULL, NULL),
(4, 'Engineering & Technology', 1, -1, '2018-12-12 14:35:02', NULL, NULL),
(5, 'Environmental Studies', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(6, 'Finance/Accounting Management', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(7, 'Quality Management', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(8, 'Computer Sciences', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(9, 'Human Resources Management', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(10, 'Medical/Medicine', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(11, 'Civil/Construction Management', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(12, 'Architecture & Design', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(13, 'Law', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(14, 'Education', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(15, 'Physics', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(16, 'Chemistry', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(17, 'Mathematics/Statistics', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(18, 'Economics', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(19, 'Geography', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(20, 'History', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(21, 'Linguistics & Languages', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(22, 'Arts/Humanities', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(23, 'Political Science/Mass Communication/IR', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(24, 'Islamic Studies', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(25, 'Geology', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(26, 'Agriculture', 1, -1, '2018-12-12 14:29:52', NULL, NULL),
(27, 'Military/Armed Forces', 1, -1, '2018-12-12 14:29:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `DesignationId` int(11) NOT NULL,
  `ParentDesignationId` int(11) DEFAULT NULL,
  `Designation` varchar(100) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`DesignationId`, `ParentDesignationId`, `Designation`, `IsActive`) VALUES
(1, 1, 'President', 1),
(2, 1, 'Vice President', 1),
(3, 1, 'Genernal Secretary', 1),
(4, 1, 'Joint Secretary', 1),
(5, 1, 'Treasurer', 1),
(7, 2, 'Sports', 1),
(8, 2, 'Documentation', 1),
(9, 2, 'Shariah', 1),
(10, 1, 'Member', 1);

-- --------------------------------------------------------

--
-- Table structure for table `diplomasession`
--

CREATE TABLE `diplomasession` (
  `DiplomaSessionId` int(11) NOT NULL,
  `DiplomaSession` varchar(250) NOT NULL,
  `IsActive` tinyint(4) NOT NULL DEFAULT '1',
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diplomasession`
--

INSERT INTO `diplomasession` (`DiplomaSessionId`, `DiplomaSession`, `IsActive`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(1, 'Jan - Jun', 1, -1, '2018-12-12 14:38:34', NULL, NULL),
(2, 'Jul - Dec', 1, -1, '2018-12-12 14:41:11', NULL, NULL),
(3, 'Apr - Sep', 1, -1, '2018-12-12 14:41:11', NULL, NULL),
(4, 'Oct - Mar', 1, -1, '2018-12-12 14:41:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `MembershipId` int(11) NOT NULL,
  `TitleId` int(11) NOT NULL DEFAULT '0',
  `FirstName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `Dob` datetime DEFAULT NULL,
  `NationalityId` int(50) NOT NULL DEFAULT '0',
  `City` varchar(50) DEFAULT NULL,
  `DiplomaSessionId` int(11) DEFAULT '0',
  `CertificateSessionId` int(11) DEFAULT '0',
  `CertificateYear` int(11) NOT NULL DEFAULT '0',
  `DiplomaYear` int(11) NOT NULL DEFAULT '0',
  `FatherName` varchar(250) DEFAULT NULL,
  `QualificationType` int(11) NOT NULL DEFAULT '0',
  `PostalCode` varchar(50) DEFAULT NULL,
  `PresentAddress` varchar(500) DEFAULT NULL,
  `PermanentAddress` varchar(500) DEFAULT NULL,
  `Landline` text,
  `CellNo` text,
  `WhatsAppNo` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `CNIC` varchar(100) DEFAULT NULL,
  `RealEstate` varchar(50) DEFAULT NULL,
  `DeciplineId` int(11) DEFAULT NULL,
  `BusinessStartedYear` int(11) DEFAULT NULL,
  `Location` varchar(200) DEFAULT NULL,
  `AgentDesignation` varchar(250) DEFAULT NULL,
  `WorkArea` text,
  `Dealership` text,
  `Linkdin` varchar(250) DEFAULT NULL,
  `Facebook` varchar(250) DEFAULT NULL,
  `Website` varchar(250) DEFAULT NULL,
  `QualificationId` int(11) NOT NULL DEFAULT '0',
  `Specialization` varchar(100) DEFAULT NULL,
  `Institute` varchar(200) DEFAULT NULL,
  `CountryId` int(11) NOT NULL DEFAULT '0',
  `PassedYear` int(11) DEFAULT NULL,
  `MembershipTypeId` int(11) NOT NULL DEFAULT '0',
  `MembershipFeeId` int(11) NOT NULL DEFAULT '0',
  `DesignationId` int(11) NOT NULL DEFAULT '0',
  `StartDate` datetime DEFAULT NULL,
  `EndDate` datetime DEFAULT NULL,
  `JsonWorkInfo` text,
  `FileImage` text,
  `FileCNIC` text,
  `IsMember` int(11) NOT NULL DEFAULT '0',
  `MembershipNo` varchar(250) NOT NULL DEFAULT '000',
  `ParentDesignationId` int(11) NOT NULL DEFAULT '0',
  `SubDesignationId` int(11) NOT NULL DEFAULT '0',
  `IsMailSent` int(11) NOT NULL DEFAULT '0',
  `IsActive` tinyint(1) NOT NULL DEFAULT '1',
  `CreatedBy` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`MembershipId`, `TitleId`, `FirstName`, `LastName`, `Gender`, `Dob`, `NationalityId`, `City`, `DiplomaSessionId`, `CertificateSessionId`, `CertificateYear`, `DiplomaYear`, `FatherName`, `QualificationType`, `PostalCode`, `PresentAddress`, `PermanentAddress`, `Landline`, `CellNo`, `WhatsAppNo`, `Email`, `CNIC`, `RealEstate`, `DeciplineId`, `BusinessStartedYear`, `Location`, `AgentDesignation`, `WorkArea`, `Dealership`, `Linkdin`, `Facebook`, `Website`, `QualificationId`, `Specialization`, `Institute`, `CountryId`, `PassedYear`, `MembershipTypeId`, `MembershipFeeId`, `DesignationId`, `StartDate`, `EndDate`, `JsonWorkInfo`, `FileImage`, `FileCNIC`, `IsMember`, `MembershipNo`, `ParentDesignationId`, `SubDesignationId`, `IsMailSent`, `IsActive`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(4, 1, 'Fahad', 'Khalid', 'Male', '2018-11-20 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '78508', 'Surjani Town', 'Surjani Town', '02136546548', '03212547601', '03433563517', 'musabyahiya@hotmail.com', '424011856139', 'Chocolate', NULL, 1989, 'Gulzar e Hijri', NULL, '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', NULL, NULL, NULL, 3, 'Software', 'ILMA', 0, 1996, 4, 17, 10, '2018-11-27 13:51:32', '2018-11-27 13:51:32', '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', '', '', 0, '0', 1, 1, 0, 0, 1, '2018-11-03 11:46:22', 1, '2018-11-17 09:38:03'),
(5, 1, 'Fahad', 'Nizam', 'Male', '1994-05-29 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '75850', '-', '-', '-', '03432101016', '-', 'm.fahad2016@gmail.com', '424011856139', 'Real Estate', NULL, 1981, 'North Karachi', NULL, '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', NULL, NULL, NULL, 5, 'Web', 'Ilma', 0, 2018, 5, 27, 10, '2018-11-27 13:51:32', '2018-11-27 13:51:32', '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'architecture-photography-hd-wallpaper-free-stock-photos-we-have-about-8162-offices-smart-beast-test-page-cookie-policy-the-cave-collection-home-inspiration-modern-living-room-professionals-76.jpg', 'LP.JPG', 0, '0', 1, 1, 0, 0, 1, '2018-11-03 12:50:27', 0, '2018-11-17 09:36:53'),
(6, 1, 'Zohair', 'Ahmed', 'Male', '1986-10-20 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '75300', 'R-180 Malir', 'R-180 Malir', '-', '03343417150', '03102167571', 'zkbrother@yahoo.com', '424011856139', 'chocolate Real Properties', NULL, 2016, 'Gulzar e hijri', NULL, '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', NULL, NULL, NULL, 5, '-', 'PIBSAT', 0, 2015, 2, 2, 10, '2018-11-27 13:51:32', '2018-11-27 13:51:32', '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'architecture-photography-hd-wallpaper-free-stock-photos-we-have-about-8162-offices-smart-beast-test-page-cookie-policy-the-cave-collection-home-inspiration-modern-living-room-professionals-76.jpg', 'LP.JPG', 0, '0', 1, 1, 0, 0, 1, '2018-11-03 16:12:28', 1, '2018-11-17 06:36:23'),
(8, 1, 'Viqar', 'Husain', 'Male', '1960-11-29 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '75850', 'House R-180 sector 000', 'N/A', 'N/A', '03432101016', 'N/A', 'prof.viqarhusain@yahoo.com', '424011856139', 'Ak associatee', NULL, 2007, 'Safora Chowrangi', NULL, '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', NULL, NULL, NULL, 3, 'Environment and water', 'Karachii university', 0, 2005, 3, 29, 10, '2018-11-27 13:51:32', '2018-11-27 13:51:32', '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'architecture-photography-hd-wallpaper-free-stock-photos-we-have-about-8162-offices-smart-beast-test-page-cookie-policy-the-cave-collection-home-inspiration-modern-living-room-professionals-76.jpg', 'color.png', 0, '0', 1, 1, 0, 0, 1, '2018-11-03 19:17:43', 1, '2018-11-06 11:04:37'),
(12, 1, 'umair', 'shahab', 'Male', '1995-03-06 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '75850', 'ld-dsj', 'N/A', 'N/A', '03052135361', 'N/A', 'umair@gmail.com', '424011856139', 'real', NULL, 2015, 'Malir', NULL, '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', NULL, NULL, NULL, 5, 'Software', 'KU', 0, 2018, 2, 2, 10, '2018-11-27 13:51:32', '2018-11-27 13:51:32', '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', '14141914_1355856504442728_1882893588682874992_n.jpg', 'm.png', 0, '0', 1, 1, 0, 0, -1, '2018-11-04 03:32:14', 1, '2018-11-17 06:36:55'),
(15, 1, 'Ashraf', 'Hussain', 'Male', '2018-11-01 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '34567', '1/22, ABC Karachi, Pakistan, That the quick brown fox jumps right over the lazy dog.', 'N/A', '02134690011', '03353383321', 'N/A', 'ash.hussain@crealproperties.com', '42000-0445950-3', 'Chocolate Real Properties', NULL, 2016, 'Suite # F-9, 1st Floor, AK House, A-166/167, Quetta Town Sector 18-A, Scheme 33 Karachi-75330, ', 'CEO', '[{\"WorkArea\":\"Scheme 33 43 45\"},{\"WorkArea\":\"DCK/DHA\"},{\"WorkArea\":\"Bahria\"},{\"WorkArea\":\"Gwadar\"},{\"WorkArea\":\"Korangi\"},\r\n{\"WorkArea\":\"Nooriabad\"},{\"WorkArea\":\"Metroville\"},{\"WorkArea\":\"Super Hihgway ph I/II\"}]', '[{\"Dealership\":\"Nawal Anchorage Gwadar\"}]', NULL, NULL, NULL, 4, 'GSCM', 'Indianapolis USA', 0, 2015, 4, 19, 3, '2018-11-27 13:51:32', '2018-11-27 13:51:32', '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'ash.jpg', 'ash.jpeg', 1, '0', 1, 1, 0, 0, -1, '2018-11-04 15:32:40', 1, '2018-11-17 06:34:44'),
(17, 1, 'Ali', 'Khan', 'Male', '1990-06-27 00:00:00', 128, 'Berlin', NULL, NULL, 0, 0, NULL, 0, '10115', 'House A-32 Berlin', 'N/A', 'N/A', '01511234567', 'N/A', 'm.fahad2016@gmail.com', '424011856139', 'Thai Real Estate', NULL, 2008, 'Berlin Germany', NULL, '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', NULL, NULL, NULL, 5, 'Java programming ', 'Technical University of Munich', 0, 2013, 4, 19, 10, '2018-11-27 13:51:32', '2018-11-27 13:51:32', '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', ' \r\n\r\nali.jpg', ' \r\nali.jpg', 0, '0', 1, 1, 0, 0, -1, '2018-11-06 12:51:43', 1, '2018-12-02 09:13:38'),
(18, 1, 'viqar', 'Hussain', 'Male', '1962-11-06 00:00:00', 2, 'Up', NULL, NULL, 0, 0, NULL, 0, '39206', 'House RS-208 area Up', 'N/A', 'N/A', '056666541165', 'N/A', 'prof.viqarhusain@yhaoo.com', '424011856139', 'we Property', NULL, 2001, 'karachi', NULL, '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', NULL, NULL, NULL, 3, 'soil', 'UOK', 0, 1990, 3, 29, 10, '2018-11-27 13:51:32', '2018-11-27 13:51:32', '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', ' viqr.jpg', ' \n\"ev9.jpg\"', 0, '0', 1, 1, 0, 0, 1, '2018-11-06 13:22:29', 0, '2018-11-17 08:51:14'),
(19, 1, 'engr', 'engr', 'Male', '2018-12-05 00:00:00', 36, 'engr', NULL, NULL, 0, 0, NULL, 0, 'engr', 'engr', 'N/A', 'N/A', 'engr', 'N/A', 'engr@gmail.com', '424011856139', 'engr', NULL, 1978, 'engr', NULL, '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', NULL, NULL, NULL, 4, 'engr', 'engr', 0, 1965, 6, 34, 10, '2018-11-27 13:51:32', '2018-11-27 13:51:32', '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', '1.png', '3.png', 0, '0', 1, 1, 0, 0, -1, '2018-11-06 13:37:34', 1, '2018-11-17 06:34:51'),
(20, 1, 'da', '!H3ll1s4C#2l', 'Male', '2018-11-27 00:00:00', 36, '!H3ll1s4C#2l', NULL, NULL, 0, 0, NULL, 0, '!H3ll1s4C#2l', '!H3ll1s4C#2l', 'N/A', 'N/A', '!H3ll1s4C#2l', 'N/A', 'm.fahad@gmail.com', '42403121', '!H3ll1s4C#2l', NULL, 1975, '!H3ll1s4C#2l', '454', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'http://localhost:8080/RepaWebsite/admin/Pages/RegistrationForm.php#', NULL, NULL, 3, '!H3ll1s4C#2l', '!H3ll1s4C#2l', 0, 1972, 2, 3, 10, '2018-11-27 00:00:00', '2018-11-27 00:00:00', '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'download.jpg', 'WhatsApp Image 2018-11-21 at 2.28.50 PM (9).jpeg', 0, '0', 1, 1, 0, 0, -1, '2018-11-06 14:24:32', 30, '2018-11-30 18:57:20'),
(21, 1, 'Arshad', 'Hussain', 'Male', '1969-07-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '75300', 'madras society scheme 33', 'N/A', 'N/A', '03352200161', 'N/A', 'arshed@crealproperties.com', '424011856139', 'Chocolate Real Properties', NULL, 2013, 'Suite # F-9, 1st Floor, AK House, A-166/167, Quetta Town Sector 18-A, Scheme 33 Karachi', NULL, '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', NULL, NULL, NULL, 6, 'Mathematics ', '-', 0, 1980, 5, 26, 10, '2018-11-27 13:51:32', '2018-11-27 13:51:32', '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', '10389958_290490561130757_3560783219763692661_n.jpg', '10389958_290490561130757_3560783219763692661_n.jpg', 1, '0', 1, 1, 0, 0, 1, '2018-11-17 06:47:29', 1, '2018-12-02 09:13:15'),
(22, 1, 'Rajab', 'Raza', 'Male', '1993-08-25 00:00:00', 1, 'Krachi', NULL, NULL, 0, 0, NULL, 0, '74900', 'Korangi', 'N/A', 'N/A', '03009221711', 'N/A', 'mrraza@crealproperties.com', '424011856139', 'Chocolate Real Properties', NULL, 2018, 'Scheme 33', NULL, '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', NULL, NULL, NULL, 5, 'Web & Software Development', 'Iqra University', 0, 2017, 2, 3, 10, '2018-11-27 13:51:32', '2018-11-27 13:51:32', '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', '39453561_2049300845131872_4097814892520669184_o.jpg', '39453561_2049300845131872_4097814892520669184_o.jpg', 1, '0', 1, 1, 0, 0, -1, '2018-11-17 07:02:15', 1, '2018-12-02 09:13:13'),
(23, 1, 'Musab', 'Yahiya', 'Male', '2018-10-28 00:00:00', 24, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '75300', 'Surjani Town ', 'N/A', 'N/A', '03432101016', '03433563517', 'musabyahiya@hotmail.com', '4240136713349', 'Thai Real Properties', NULL, 2010, 'karachi', 'Sales Manager', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'http://localhost:8080/RepaWebsite/admin/Pages/RegistrationForm.php#', NULL, NULL, 5, 'organic', 'UOK', 0, 1965, 5, 25, 10, '2018-03-06 00:00:00', '2018-11-07 00:00:00', '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'dp.jpeg', 'WhatsApp Image 2018-11-21 at 2.28.50 PM (9).jpeg', 1, '0', 1, 1, 0, 0, 1, '2018-11-28 18:31:12', 1, '2018-12-02 09:13:53'),
(24, 1, 'test', 'test', 'Male', '2018-12-28 00:00:00', 1, 'test', NULL, NULL, 0, 0, NULL, 0, '3232', 'test', 'N/A', 'N/A', '03131300', 'N/A', 'abc@gmail.com', '12215212.01', 'choco', NULL, 1975, 'dsfnbjnhbd', 'sales', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'http://localhost/Repa/form.php#', NULL, NULL, 4, 'q', 'sds', 0, 2015, 4, 18, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'convo4.PNG', 'Membership list.png', 0, '0', 1, 1, 0, 0, -1, '2018-12-02 08:55:18', NULL, NULL),
(26, 1, 'Mohammad', 'Touqeer', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '12345', '.', 'N/A', 'N/A', '03001234567', 'N/A', 'abc@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'https://linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'IMG_3991.jpg', 'IMG_3991.jpg', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 00:36:49', 1, '2018-12-03 02:06:42'),
(27, 1, 'Jawaid', 'Kaimkhani', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03018260077', 'N/A', 'kaimkhani68@hotmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'img7.jpg', 'img7.jpg', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 00:41:55', 1, '2018-12-03 02:06:39'),
(28, 1, 'Hafeez', 'Abbasi', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03001234567', 'N/A', 'abc@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'IMG_4053.jpg', 'IMG_4053.jpg', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 00:45:22', 1, '2018-12-03 02:06:37'),
(29, 1, 'Maqsood', 'Ahmed', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03213764921', 'N/A', 'maqsoodahmedrepa@gmail.lcom', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'IMG_40511.jpg', 'IMG_40511.jpg', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 00:49:17', 1, '2018-12-03 02:06:35'),
(30, 1, 'Danish', 'Khan', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03001234567', 'N/A', 'abc@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'IMG-4055.jpg', 'IMG-4055.jpg', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 00:52:20', 1, '2018-12-03 02:06:34'),
(31, 1, 'Mohammad', 'Rafique', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03318312052', 'N/A', 'rafiqjamai@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'IMG-4710.JPG', 'IMG-4710.JPG', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 00:55:10', 1, '2018-12-03 02:06:28'),
(32, 1, 'Nasir', 'Bhutto', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03001234567', 'N/A', 'abc@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'IMG-4711.JPG', 'IMG-4711.JPG', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 00:57:15', 1, '2018-12-03 02:06:31'),
(33, 1, 'Syed ', 'Shafiq', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03333200582', 'N/A', 'eskee70@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:01:02', 1, '2018-12-03 02:06:25'),
(34, 1, 'Khalil', 'Shamsi', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03013261973', 'N/A', 'waleedshamsi_2004@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:02:59', 1, '2018-12-03 02:06:23'),
(35, 1, 'Mohammad', 'Hassan', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03042206866', 'N/A', 'smhamdaan@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:04:29', 1, '2018-12-03 02:06:18'),
(36, 1, 'Behlum', 'Nadeem', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03033160007', 'N/A', 'nadeem_mohammd10@yahoo.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:06:07', 1, '2018-12-03 02:06:16'),
(37, 1, 'Mohammad', 'Iqbal', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03008202404', 'N/A', 'artycommunication@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'img6.jpg', 'img6.jpg', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:07:27', 1, '2018-12-03 02:06:14'),
(38, 1, 'Abdul', 'Qayyum', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03333121601', 'N/A', 'abdulqayyum011@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:08:38', 1, '2018-12-03 02:06:10'),
(39, 1, 'Noshad', 'Butt', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03453007814', 'N/A', 'noshadbutt@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:09:58', 1, '2018-12-03 02:06:08'),
(40, 1, 'Asif', 'Khan', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03360090222', 'N/A', 'saimkhi@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:11:18', 1, '2018-12-03 02:06:07'),
(41, 1, 'Riaz', 'Sheikh', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03333090711', 'N/A', 'riazsheikh_786@yahoo.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:13:32', 1, '2018-12-03 02:06:03'),
(42, 1, 'Azhar', 'Abbas', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03002841516', 'N/A', 'azhar2841516@yahoo.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:16:18', 1, '2018-12-03 02:06:01'),
(43, 1, 'Mohammad', 'Ali', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03202550696', 'N/A', 'ruhab3355@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:17:47', 1, '2018-12-03 02:05:59'),
(44, 1, 'Ahsan', 'Ahmed', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03456189234', 'N/A', 'aash9234@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:19:05', 1, '2018-12-03 02:05:56'),
(45, 1, 'Nadeem', 'Rehman', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03162999444', 'N/A', 'aziznaeem@hotmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:20:19', 1, '2018-12-03 02:05:54'),
(46, 1, 'Ehsan', 'Qadir', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03414463941', 'N/A', 'ehsanqadir21@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:22:19', 1, '2018-12-03 02:05:49'),
(47, 1, 'Mohammad', 'Ibrahim', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03363003486', 'N/A', 'abro.ibrahim1@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:23:40', 1, '2018-12-03 02:05:47'),
(48, 1, 'Ejaz', 'Shaikh', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03002530959', 'N/A', 'aejee_63@hotmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:25:10', 1, '2018-12-03 02:05:44'),
(49, 1, 'Aqeel', 'Ansari', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03012308527', 'N/A', 'abc@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:26:31', 1, '2018-12-03 02:05:40'),
(50, 1, 'Mohammad', 'Hussain', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03323028906', 'N/A', 'hamzahussain623@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:27:59', 1, '2018-12-03 02:05:34'),
(51, 1, 'Aftab', 'Ahmed', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03131101015', 'N/A', 'qualityimpression@yahoo.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:29:53', 1, '2018-12-03 02:05:36'),
(52, 1, 'Mohammad', 'Yasin', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03352282500', 'N/A', 'muhammad.yasin2426@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:31:21', 1, '2018-12-03 02:05:30'),
(53, 1, 'Akhtar', 'Khan', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03352918899', 'N/A', 'amk.marketing@yahoo.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:32:37', 1, '2018-12-03 02:05:24'),
(54, 1, 'Rizwan', 'Ali', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03325122503', 'N/A', 'abc@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:33:56', 1, '2018-12-03 02:05:21'),
(55, 1, 'Rehan', 'Khan', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03343223630', 'N/A', 'rehan03343223630@yahoo.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:35:05', 1, '2018-12-03 02:05:17'),
(56, 1, 'Shahzaib', 'Rao', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03018235215', 'N/A', 'shahzaib.sr@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:36:46', 1, '2018-12-03 02:05:12'),
(57, 1, 'Shariq', 'Khan', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03002180966', 'N/A', 'shariqkhan@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:37:45', 1, '2018-12-03 02:05:08'),
(58, 1, 'Aadil', 'Hameed', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03333038822', 'N/A', 'adilkk2017@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:39:18', 1, '2018-12-03 02:05:05'),
(59, 1, 'Shehroz', 'Aftab', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03002314308', 'N/A', 'shehrozaftab311@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:40:45', 1, '2018-12-03 02:05:02'),
(60, 1, 'Syed', 'Abbas', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03120003029', 'N/A', 'syedwalishear5@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:42:03', 1, '2018-12-03 02:04:24'),
(61, 1, 'Fahim', 'Akhtar', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03328331903', 'N/A', 'Pibsat@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 'IMG-4708.JPG', 'IMG-4708.JPG', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:43:50', 1, '2018-12-03 02:04:20'),
(62, 1, 'Amanullah', 'Panjwani', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '75300', 'Gulshan-e-Iqbal', 'N/A', 'N/A', '03001234567', 'N/A', 'pibsat@gmail.com', '00', 'Panjwani', NULL, 2000, 'Gulshan-e-Iqbal', 'CEO', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'https://linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 4, 'Management', 'Pibsat', 0, 2000, 3, 29, 10, NULL, NULL, '[{\"Organization\":\".\",\"Designation\":\".\",\"Experience\":\"1\"}]', 't1.jpg', 't1.jpg', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:55:44', 1, '2018-12-03 02:04:16'),
(63, 1, 'Naushad', 'Butt', 'Male', '2019-01-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '.', '.', 'N/A', 'N/A', '03453007814', 'N/A', 'noshadbutt@gmail.com', '.', '.', NULL, 2018, '.', '.', '[{\"WorkArea\":\"DHA\"}]', '[{\"Dealership\":\"Bahria\"}]', 'https://linkedin.com/in/muhammad-fahad-35b7059b/', NULL, NULL, 5, '.', '.', 0, 2018, 2, 2, 10, '2018-12-03 00:00:00', '2019-01-31 00:00:00', '[{\"Organization\":\"Org\",\"Designation\":\"Des\",\"Experience\":\"1\"}]', 'user.png', 'user.png', 1, '0', 1, 1, 0, 0, -1, '2018-12-03 01:58:17', 1, '2018-12-03 02:04:14'),
(64, 1, 'Muhamamd', 'uddin', 'Male', '2018-12-02 00:00:00', 1, 'Karachi', NULL, NULL, 0, 0, NULL, 0, '75850', 'North karachi', 'N/A', '[{\"Landline\":\"021343384\"}]', '[{\"CellNo\":\"03433563517\"}]', 'N/A', 'm.fahad2016@gmal.com', '4210180375753', 'Chocolate Real Properties', NULL, 2018, 'North Karchi', 'AgentDesignation', '[{\"WorkArea\":\"Abc\"}]', '[{\"Dealership\":\"ABC\"}]', 'nkedin.com/in/muhammad-fahad-35b7059b/', 'linknkedin.com/in/muhammad-fahad-35b7059b/', 'nkedin.com/in/muhammad-fahad-35b7059b/', 5, 'Web', 'ilma uni', 0, 2018, 3, 29, 7, '2018-12-08 00:00:00', '2018-12-19 00:00:00', '[{\"Organization\":\"Web Developer\",\"Designation\":\"Web Developer\",\"Experience\":\"1\"}]', 'ash.jpg', 'wcPRtM.png', 1, '0', 1, 1, 0, 0, 1, '2018-12-03 06:38:54', 1, '2018-12-04 02:42:38'),
(65, 1, 'Musab', 'Yahiya', 'Male', '2018-12-09 00:00:00', 1, 'Karachi', 1, 2, 2017, 2002, 'Ghulam Yahiya', 2, '75850', 'Surjani town', 'N/A', '[{\"Landline\":\"N/A\"}]', '[{\"CellNo\":\"03433563517\"},{\"CellNo\":\"03323693381\"}]', 'N/A', 'musabyahiya@hotmail.com', '4240136713349', 'Chocolate', 1, 1963, 'Gulzar e Hijri', 'IT Engineer', '[{\"WorkArea\":\"Software\"}]', '[{\"Dealership\":\"Naval\"}]', 'http://localhost:8080/RepaNew/admin/Pages/Membership.php#', 'http://localhost:8080/RepaNew/admin/Pages/Membership.php#', 'www.chocolate.com', 1, 'Software', 'Ilma', 0, 1975, 2, 3, 2, '2017-12-09 00:00:00', '2018-12-09 00:00:00', '[{\"Organization\":\"MAK\",\"Designation\":\"Software Engineer\",\"Experience\":\"12\"}]', 'download (1).png', 'Fb.JPG', 1, '0', 1, 0, 0, 1, 1, '2018-12-15 00:52:55', 1, '2018-12-29 04:01:56'),
(66, 1, 'Muhammad', 'Fahad', 'Male', '2018-12-11 00:00:00', 1, 'Karachi', 1, 0, 0, 2002, 'Nizam Uddin', 2, '75850', 'Surjani town', 'N/A', '[{\"Landline\":\"N/A\"}]', '[{\"CellNo\":\"03433563517\"},{\"CellNo\":\"03323693381\"}]', 'N/A', 'musabyahiya@hotmail.com', '4240136713349', 'Chocolate', 1, 1963, 'Gulzar e Hijri', 'IT Engineer', '[{\"WorkArea\":\"Software\"}]', '[{\"Dealership\":\"Naval\"}]', 'http://localhost:8080/RepaNew/admin/Pages/Membership.php#', 'http://localhost:8080/RepaNew/admin/Pages/Membership.php#', 'www.chocolate.com', 1, 'Software', 'Ilma', 0, 1975, 2, 3, 2, '2017-12-19 00:00:00', '2018-12-19 00:00:00', '[{\"Organization\":\"MAK\",\"Designation\":\"Software Engineer\",\"Experience\":\"12\"}]', 'download (1).png', 'Fb.JPG', 1, '0', 1, 0, 0, 1, 1, '2018-12-15 00:52:55', 1, '2018-12-29 03:59:26'),
(68, 1, 'Umair', 'Sahab', 'Male', '2018-12-18 00:00:00', 1, 'Karachi', 0, 3, 2013, 0, 'Sahab', 1, '75850', 'Karachi', 'N/A', '[{\"Landline\":\"N/A\"}]', '[{\"CellNo\":\"0213454887\"}]', 'N/A', 'fahad@femtogen.com', '4240180375753', 'Chocolate', 8, 1964, 'Karachi', 'Sales', '[{\"WorkArea\":\"Scheme 33\"},{\"WorkArea\":\"Surjani\"}]', '[{\"Dealership\":\"Naval\"}]', 'www.repa.org.pk', 'https://repa.org.pk/Live/admin/Pages/Membership.php', 'https://repa.org.pk/Live/admin/Pages/Membership.php', 5, 'Java', 'Iqra university', 0, 1960, 4, 18, 1, '2018-12-19 00:00:00', '2018-12-18 00:00:00', '[{\"Organization\":\"Viftech\",\"Designation\":\"Software engineer\",\"Experience\":\"3\"},{\"Organization\":\"Hudson\",\"Designation\":\"IT Officer\",\"Experience\":\"1\"}]', 'ash.jpg', 'ash.jpg', 0, '0', 1, 0, 0, 1, -1, '2018-12-26 09:20:43', 1, '2018-12-29 03:36:33'),
(69, 1, 'Musab', 'Yahiya', 'Male', '2018-12-03 00:00:00', 1, 'Karachi', 0, 2, 2001, 0, 'Ghulam', 1, '75850', 'Karachi', 'N/A', '[{\"Landline\":\"02130120149\"}]', '[{\"CellNo\":\"03545455454\"}]', 'N/A', 'fahad@femtogen.com', '424015878788', 'https://repa.org.pk/Live/form', 3, 1961, 'Karachi', 'Software', '[{\"WorkArea\":\"Sceme 33\"}]', '[{\"Dealership\":\"Naval\"}]', 'https://repa.org.pk/Live/form', 'https://repa.org.pk/Live/admin/Pages/Membership.php', 'https://repa.org.pk/Live/admin/Pages/Membership.php', 6, 'Spec', 'Ilma', 0, 1976, 3, 29, 2, '2018-11-20 00:00:00', '2018-12-28 00:00:00', '[{\"Organization\":\"Org\",\"Designation\":\"des\",\"Experience\":\"3\"}]', 'dp.jpg', 'gatsby.jpg', 0, '0', 1, 0, 0, 1, -1, '2018-12-26 09:42:39', 1, '2018-12-29 03:55:51'),
(70, 2, 'as', 'as', 'Male', '2018-03-12 00:00:00', 2, 'katarc', 2, 3, 2001, 2009, 'as', 3, '154', 'fhad', 'Karachi', '[{\"Landline\":\"0321544888\"}]', '[{\"CellNo\":\"02563517555\"}]', '03222254888', 'abc@gmail.com', '541103210320', 'chcol', 16, 1966, 'Gulzare', 'CEO', '[{\"WorkArea\":\"Scghem 33\"}]', '[{\"Dealership\":\"Naval\"}]', 'https://repa.org.pk/Live/form', 'https://repa.org.pk/Live/form', 'repa.org.pk', 4, 'asd', 'asd', 0, 2018, 3, 29, 2, '2018-12-18 00:00:00', '2018-12-26 00:00:00', '[{\"Organization\":\"asd\",\"Designation\":\"asd\",\"Experience\":\"15\"},{\"Organization\":\"as\",\"Designation\":\"sd\",\"Experience\":\"16\"}]', 'img3.jpg', 'contt.png', 0, '5555', 1, 0, 0, 1, -1, '2018-12-30 10:48:00', 1, '2018-12-31 07:05:34'),
(71, 4, 'Ashraf', 'Hussain', 'Male', '1971-06-12 00:00:00', 1, 'Karachi', 1, 1, 2017, 2016, 'Ali Hussain', 1, '75300', 'A-48, Madras Cooperative Housing Society, Sector 17A, Scheme-33, Karachi', 'Karachi', '[{\"Landline\":\"0213546455\"},{\"Landline\":\"021254448888\"}]', '[{\"CellNo\":\"00923023383804\"},{\"CellNo\":\"00923353383321\"},{\"CellNo\":\"00923169944990\"}]', '03433563517', 'ash.hussain@crealproperties.com', '4200004459503', 'Chocolate Real Properties', 2, 2017, 'Suit # 09, Plot # 166/167, Quetta Town, Sector 18A, Scheme-33, Karachi, Pakistan', 'CEO', '[{\"WorkArea\":\"Scheme-33\"},{\"WorkArea\":\"Scheme-43\"},{\"WorkArea\":\"Scheme-45\"},{\"WorkArea\":\"DHA/DCK\"},{\"WorkArea\":\"Bahria Town-Karachi\"},{\"WorkArea\":\"Industrial Site-I & II, Nooriabad\"},{\"WorkArea\":\"Gwadar\"}]', '[{\"Dealership\":\"Naval Anchorage -Gwadar\"}]', 'https://repa.org.pk/Live/form#', 'https://repa.org.pk/Live/form#', 'www.crealproperties.com', 4, 'Global Supply Chain Management', 'Indianapolis University', 0, 2013, 3, 29, 3, '2017-06-01 00:00:00', '2019-05-31 00:00:00', '[{\"Organization\":\"Chocolate Real Properties \",\"Designation\":\"CEO\",\"Experience\":\"2\"},{\"Organization\":\"ENOC-Emirates National Oil Company-UAE\",\"Designation\":\"Leader-Supply Chain, Quality & Contracts Management\",\"Experience\":\"8\"},{\"Organization\":\"Engro Vopak Terminals Ltd.\",\"Designation\":\"Supervisor-Procurement/Contracts\",\"Experience\":\"8\"}]', 'gatsby.jpg', 'gatsby.jpg', 1, '447', 1, 0, 0, 1, -1, '2018-12-30 11:01:38', 1, '2018-12-31 06:48:03'),
(72, 1, 'Shezad', 'Khan', 'Male', '2018-12-04 00:00:00', 1, 'Karachi', 1, 1, 2001, 2016, 'Shezad Saleem', 3, '75850', 'Surjani town', 'Permanent Address', '[{\"Landline\":\"02155665566\"},{\"Landline\":\"02155445985\"}]', '[{\"CellNo\":\"0322223322332\"},{\"CellNo\":\"032622222222\"}]', '03432101016', 'musabyahiya@hotmail.com', '4240136713349', 'Real Estate', 3, 1961, 'Gulzar e Hijri', 'Software Engineer', '[{\"WorkArea\":\"Naval\"}]', '[{\"Dealership\":\"Scheme 33\"},{\"Dealership\":\"Bahria\"}]', 'https://repa.org.pk/Live/form#', 'https://repa.org.pk/Live/form#', 'https://repa.org.pk/Live/form#', 3, 'Software eng', 'Ilma', 0, 2018, 2, 3, 1, '2018-12-10 00:00:00', '2019-02-06 00:00:00', '[{\"Organization\":\"Femtogen\",\"Designation\":\"Software Engineer\",\"Experience\":\"18\"}]', 'logo2 (1).png', 'faa_rev-logo (1).png', 1, '444', 1, 0, 0, 1, -1, '2018-12-31 03:29:08', 1, '2018-12-31 09:27:29'),
(73, 4, 'Muhammad', 'Ali', 'Male', '2009-05-03 00:00:00', 1, 'Karachi', 2, 0, 0, 2012, 'Khan', 2, '75850', 'House L-190 Sector 5-A/3 North Karachi', 'House L-190 Sector 5-A/3 North Karachi', '[{\"Landline\":\"021544888\"},{}]', '[{\"CellNo\":\"03433563517\"},{\"CellNo\":\"434434434\"}]', '031770020065', 'fahad@femtogen.com', '4210180375753', 'AK Associate', 8, 2015, 'Noth Nazimabad karachi', 'Sales & operations', '[{\"WorkArea\":\"Naval\"},{\"WorkArea\":\"Gulshan\"},{\"WorkArea\":\"Surjani\"},{\"WorkArea\":\"Maymar\"}]', '[{\"Dealership\":\"Scheme 33\"},{\"Dealership\":\"SKDC\"}]', 'https://repa.org.pk/Live/List', 'https://repa.org.pk/Live/List', 'www.segmite.org', 5, 'Software engineering', 'UBIT', 0, 2018, 2, 5, 8, '2018-12-07 00:00:00', '2018-12-16 00:00:00', '[{\"Organization\":\"Horizon soft\",\"Designation\":\"Wordpress Developer\",\"Experience\":\"1\"},{\"Organization\":\"Femtogen\",\"Designation\":\"SEO\",\"Experience\":\"4\"}]', 'ash.jpg', 'ash.jpg', 1, '12345', 2, 2, 0, 1, -1, '2018-12-31 07:40:46', 1, '2018-12-31 09:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `membershipfee`
--

CREATE TABLE `membershipfee` (
  `MembershipFeeId` int(11) NOT NULL,
  `MembershipFeeName` varchar(100) DEFAULT NULL,
  `MembershipFee` double NOT NULL,
  `MembershipTypeId` int(11) NOT NULL,
  `OtherFee` double DEFAULT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membershipfee`
--

INSERT INTO `membershipfee` (`MembershipFeeId`, `MembershipFeeName`, `MembershipFee`, `MembershipTypeId`, `OtherFee`, `IsActive`) VALUES
(2, '1 year = 5000 PKR', 5000, 2, NULL, 1),
(3, '2 year = 9000 PKR', 9000, 2, NULL, 1),
(4, '3 year = 13000 PKR', 13000, 2, NULL, 1),
(5, '4 year = 16000 PKR', 16000, 2, NULL, 1),
(6, '5 year = 20000 PKR', 20000, 2, NULL, 1),
(7, 'Lifetime = 25000 PKR', 25000, 2, NULL, 1),
(16, '1 year = 5000 PKR', 5000, 4, NULL, 1),
(17, '2 year = 9000 PKR', 9000, 4, NULL, 1),
(18, '3 year = 13000 PKR', 13000, 4, NULL, 1),
(19, '4 year = 16000 PKR', 16000, 4, NULL, 1),
(20, '5 year = 20000 PKR', 20000, 4, NULL, 1),
(22, '1 year = 5000 PKR', 5000, 5, NULL, 1),
(24, '2 year = 9000 PKR', 9000, 5, NULL, 1),
(25, '3 year = 13000 PKR', 13000, 5, NULL, 1),
(26, '4 year = 16000 PKR', 16000, 5, NULL, 1),
(27, '5 year = 20000 PKR', 20000, 5, NULL, 1),
(28, 'Lifetime = 25000 PKR', 25000, 5, NULL, 1),
(29, 'Lifetime = 25000 PKR', 25000, 3, NULL, 1),
(30, 'Lifetime = 25000 PKR', 25000, 4, NULL, 1),
(31, '1 year = 5000 PKR', 5000, 6, NULL, 1),
(32, '2 year = 9000 PKR', 9000, 6, NULL, 1),
(33, '3 year = 13000 PKR', 13000, 6, NULL, 1),
(34, '4 year = 16000 PKR', 16000, 6, NULL, 1),
(35, '5 year = 20000 PKR', 20000, 6, NULL, 1),
(36, 'Lifetime = 25000 PKR', 25000, 6, NULL, 1),
(37, '5000 PKR', 5000, 7, NULL, 1),
(38, '10000 PKR', 10000, 7, NULL, 1),
(39, '20000 PKR', 20000, 7, NULL, 1),
(40, '30000 PKR', 30000, 7, NULL, 1),
(41, '40000 PKR', 40000, 7, NULL, 1),
(42, '50000 PKR', 50000, 7, NULL, 1),
(43, '75000 PKR', 75000, 7, NULL, 1),
(44, '100000 PKR', 100000, 7, NULL, 1),
(45, '125000 PKR', 125000, 7, NULL, 1),
(46, '150000 PKR', 150000, 7, NULL, 1),
(47, '200000 PKR', 200000, 7, NULL, 1),
(48, '250000 PKR', 250000, 7, NULL, 1),
(49, '300000 PKR', 300000, 7, NULL, 1),
(50, '400000 PKR', 400000, 7, NULL, 1),
(51, '500000 PKR', 500000, 7, NULL, 1),
(52, '1 million', 1000000, 7, NULL, 1),
(53, '2 million', 2000000, 7, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `membershiptype`
--

CREATE TABLE `membershiptype` (
  `MembershipTypeId` int(11) NOT NULL,
  `MembershipType` varchar(100) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membershiptype`
--

INSERT INTO `membershiptype` (`MembershipTypeId`, `MembershipType`, `IsActive`) VALUES
(2, 'Prime Member', 1),
(3, 'Lifetime Member', 1),
(4, 'Associate Member', 1),
(5, 'Corporate Member', 1),
(6, 'Life Corporate Member', 1),
(7, 'Well Wishers/Donars', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menuitems`
--

CREATE TABLE `menuitems` (
  `MenuItemId` int(11) NOT NULL,
  `MenuItemName` varchar(100) NOT NULL,
  `MenuItemURL` varchar(500) NOT NULL,
  `ParentId` int(11) DEFAULT NULL,
  `SortOrder` int(11) DEFAULT NULL,
  `IsParent` int(11) NOT NULL DEFAULT '0',
  `IsActive` tinyint(1) NOT NULL DEFAULT '1',
  `Icon` varchar(100) DEFAULT NULL,
  `MenuOrder` int(11) DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuitems`
--

INSERT INTO `menuitems` (`MenuItemId`, `MenuItemName`, `MenuItemURL`, `ParentId`, `SortOrder`, `IsParent`, `IsActive`, `Icon`, `MenuOrder`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(1, 'Dashboard', '#', 0, 1, 1, 1, 'fa fa-th-large', 1, -1, '2018-09-09 17:02:35', NULL, NULL),
(6, 'Registration Form', 'RegistrationForm.php', 0, 2, 0, 0, 'fas fa-users', 0, -1, '2018-10-03 00:00:00', NULL, NULL),
(7, 'Membership', '#', 0, 0, 1, 1, 'fa fa-users', 2, -1, '2018-11-12 00:00:00', NULL, NULL),
(8, 'Membership Form', 'Membership.php', 7, 2, 0, 1, NULL, 0, -1, '2018-12-11 00:00:00', NULL, NULL),
(9, 'Pass Over', 'PassOver.php', 7, 3, 0, 1, NULL, 0, -1, '2018-12-11 00:00:00', NULL, NULL),
(10, 'Dashboard', 'Dashboard.php', 1, 1, 0, 1, 'far fa-list-alt', 0, -1, '2018-09-09 17:02:35', NULL, NULL),
(11, 'Reports', '#', 0, 0, 1, 1, 'fa fa-area-chart', 3, -1, '2018-09-09 17:02:35', NULL, NULL),
(12, 'Reports', 'Reports.php', 11, 1, 0, 1, NULL, 0, -1, '2018-12-11 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE `nationality` (
  `NationalityId` int(11) NOT NULL,
  `Nationality` varchar(100) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`NationalityId`, `Nationality`, `IsActive`) VALUES
(1, 'Pakistani', 1),
(2, 'Indian', 1),
(23, 'Afghans', 1),
(24, 'Albanians', 1),
(25, 'Algerians', 1),
(26, 'Americans', 1),
(27, 'Australians', 1),
(28, 'Austrians', 1),
(29, 'Argentines', 1),
(30, 'Armenians', 1),
(31, 'Arubans', 1),
(32, 'Azerbaijanis', 1),
(33, 'Bahamians', 1),
(34, 'Bahrainis', 1),
(35, 'Burundians', 1),
(36, 'Cambodians', 1),
(37, 'Cameroonians', 1),
(38, 'Canadians', 1),
(39, 'Catalans', 1),
(40, 'Cape Verdeans', 1),
(41, 'Chadians', 1),
(42, 'Chileans', 1),
(43, 'Chinese', 1),
(44, 'Colombians', 1),
(45, 'Comorians', 1),
(46, 'Congolese', 1),
(47, 'Costa Ricans', 1),
(48, 'Croatians', 1),
(49, 'Cubans', 1),
(50, 'Cypriots', 1),
(51, 'Czechs', 1),
(52, 'Danes', 1),
(53, 'Greenlanders', 1),
(54, 'Djiboutians', 1),
(55, 'Dominicans (Commonwealth)', 1),
(56, 'Dominicans (Republic)', 1),
(57, 'Dutch', 1),
(58, 'East Timorese', 1),
(59, 'Ecuadorians', 1),
(60, 'Egyptians', 1),
(61, 'Emiratis', 1),
(62, 'English', 1),
(63, 'Equatoguineans', 1),
(64, 'Eritreans', 1),
(65, 'Estonians', 1),
(66, 'Ethiopians', 1),
(67, 'Falkland Islanders', 1),
(68, 'Faroese', 1),
(69, 'Fijians', 1),
(70, 'Finns', 1),
(71, 'Finnish Swedish', 1),
(72, 'Filipinos', 1),
(73, 'Afghans', 1),
(74, 'Albanians', 1),
(75, 'Algerians', 1),
(76, 'Americans', 1),
(77, 'Australians', 1),
(78, 'Austrians', 1),
(79, 'Argentines', 1),
(80, 'Armenians', 1),
(81, 'Arubans', 1),
(82, 'Azerbaijanis', 1),
(83, 'Bahamians', 1),
(84, 'Bahrainis', 1),
(85, 'Bangladeshis', 1),
(86, 'Burundians', 1),
(87, 'Cambodians', 1),
(88, 'Cameroonians', 1),
(89, 'Canadians', 1),
(90, 'Catalans', 1),
(91, 'Cape Verdeans', 1),
(92, 'Chadians', 1),
(93, 'Chileans', 1),
(94, 'Chinese', 1),
(95, 'Colombians', 1),
(96, 'Comorians', 1),
(97, 'Congolese', 1),
(98, 'Costa Ricans', 1),
(99, 'Croatians', 1),
(100, 'Cubans', 1),
(101, 'Cypriots', 1),
(102, 'Czechs', 1),
(103, 'Danes', 1),
(104, 'Greenlanders', 1),
(105, 'Djiboutians', 1),
(106, 'Dominicans (Commonwealth)', 1),
(107, 'Dominicans (Republic)', 1),
(108, 'Dutch', 1),
(109, 'East Timorese', 1),
(110, 'Ecuadorians', 1),
(111, 'Egyptians', 1),
(112, 'Emiratis', 1),
(113, 'English', 1),
(114, 'Equatoguineans', 1),
(115, 'Eritreans', 1),
(116, 'Estonians', 1),
(117, 'Ethiopians', 1),
(118, 'Falkland Islanders', 1),
(119, 'Faroese', 1),
(120, 'Fijians', 1),
(121, 'Finns', 1),
(122, 'Finnish Swedish', 1),
(123, 'Filipinos', 1),
(124, 'French citizens', 1),
(125, 'Gabonese', 1),
(126, 'Gambians', 1),
(127, 'Georgians', 1),
(128, 'Germans', 1),
(129, 'Baltic Germans', 1),
(130, 'Ghanaians', 1),
(131, 'Greeks', 1),
(132, 'Greek Macedonians', 1),
(133, 'Grenadians', 1),
(134, 'Guatemalans', 1),
(135, 'Guianese (French)', 1),
(136, 'Haitians', 1),
(137, 'Hondurans', 1),
(138, 'Hong Kongers', 1),
(139, 'Hungarians', 1),
(140, 'Icelanders', 1),
(141, 'Indians', 1),
(142, 'Indonesians', 1),
(143, 'Iranians', 1),
(144, 'Iraqis', 1),
(145, 'Irish', 1),
(146, 'Israelis', 1),
(147, 'Italians', 1),
(148, 'Ivoirians', 1),
(149, 'Jamaicans', 1),
(150, 'Japanese', 1),
(151, 'Jordanians', 1),
(152, 'Kazakhs', 1),
(153, 'Kenyans', 1),
(154, 'Koreans', 1),
(155, 'Indonesians', 1),
(156, 'Iranians', 1),
(157, 'Iraqis', 1),
(158, 'Irish', 1),
(159, 'Israelis', 1),
(160, 'Italians', 1),
(161, 'Ivoirians', 1),
(162, 'Saudis', 1),
(163, 'Scots', 1),
(164, 'Swedes', 1),
(165, 'Swiss', 1),
(166, 'Syriacs', 1),
(167, 'Syrians', 1),
(168, 'Georgians', 1),
(169, 'Thais', 1),
(170, 'Ugandans', 1),
(171, 'Ukrainians', 1),
(172, 'Uruguayans', 1),
(173, 'Uzbeks', 1),
(174, 'Vanuatuans', 1),
(175, 'Venezuelans', 1),
(176, 'Vietnamese', 1),
(177, 'Vincentians', 1),
(178, 'Welsh', 1),
(179, 'Yemenis', 1),
(180, 'Zambians', 1),
(181, 'Zimbabweans', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `NotificationId` int(11) NOT NULL,
  `NotificationTypeId` int(11) NOT NULL DEFAULT '0',
  `MembershipId` int(11) NOT NULL DEFAULT '0',
  `Message` text NOT NULL,
  `IsActive` int(11) NOT NULL DEFAULT '1',
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`NotificationId`, `NotificationTypeId`, `MembershipId`, `Message`, `IsActive`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(18, 3, 65, 'Test', 1, 1, '2018-12-24 16:37:56', NULL, NULL),
(19, 1, 65, 'This member has paid his fees', 1, 1, '2018-12-24 16:38:17', NULL, NULL),
(20, 3, 66, 'Non payment', 1, 1, '2018-12-24 17:07:11', NULL, NULL),
(21, 1, 66, 'Payment has been received', 1, 1, '2018-12-24 17:07:38', NULL, NULL),
(22, 3, 65, 'Non payment', 1, 1, '2018-12-26 04:18:42', NULL, NULL),
(23, 3, 65, 'Non payment', 1, 1, '2018-12-26 04:18:43', NULL, NULL),
(24, 1, 65, ',', 1, 1, '2018-12-26 04:19:45', NULL, NULL),
(25, 1, 69, 'Payment Received', 1, 1, '2018-12-26 11:50:35', NULL, NULL),
(26, 3, 69, 'Payment not received', 1, 1, '2018-12-26 11:52:28', NULL, NULL),
(27, 1, 71, 'Payment received.', 1, 1, '2018-12-30 11:21:53', NULL, NULL),
(28, 1, 72, 'Payment received', 1, 1, '2018-12-31 04:48:40', NULL, NULL),
(29, 1, 73, 'This member has been received', 1, 1, '2018-12-31 07:45:55', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notificationtype`
--

CREATE TABLE `notificationtype` (
  `NotificationTypeId` int(11) NOT NULL,
  `IsActivated` int(11) NOT NULL DEFAULT '0',
  `NotificationType` varchar(250) NOT NULL,
  `IsActive` tinyint(4) NOT NULL DEFAULT '1',
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notificationtype`
--

INSERT INTO `notificationtype` (`NotificationTypeId`, `IsActivated`, `NotificationType`, `IsActive`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(1, 0, 'Payment Received', 1, -1, '2018-12-12 13:33:16', NULL, NULL),
(2, 0, 'Apologize accepted by board', 1, -1, '2018-12-12 13:34:09', NULL, NULL),
(3, 1, 'Due to non payment', 1, -1, '2018-12-12 13:34:10', NULL, NULL),
(4, 1, 'Due to disciplinary action', 1, -1, '2018-12-12 13:34:10', NULL, NULL),
(5, 1, 'Due to not abiding by laws', 1, -1, '2018-12-12 13:35:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parentdesignation`
--

CREATE TABLE `parentdesignation` (
  `ParentDesignationId` int(11) NOT NULL,
  `ParentDesignation` varchar(250) NOT NULL,
  `IsActive` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parentdesignation`
--

INSERT INTO `parentdesignation` (`ParentDesignationId`, `ParentDesignation`, `IsActive`) VALUES
(1, 'Management Committee', 1),
(2, 'Sub Committee', 1);

-- --------------------------------------------------------

--
-- Table structure for table `passover`
--

CREATE TABLE `passover` (
  `PassOverId` int(11) NOT NULL,
  `MembershipId` int(11) NOT NULL,
  `IsMailSend` int(11) NOT NULL DEFAULT '0',
  `IsActive` int(11) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `QualificationId` int(11) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`QualificationId`, `Qualification`, `IsActive`) VALUES
(1, 'Prof.', 1),
(3, 'PhD', 1),
(4, 'Master', 1),
(5, 'Bachelor', 1),
(6, 'A Levels/Intermediate', 1),
(7, 'O Levels/Matric', 1),
(8, 'Secondary', 1),
(9, 'Middle ', 1),
(10, 'Primary ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `ReportId` int(11) NOT NULL,
  `Report` varchar(250) NOT NULL,
  `ButtonClass` varchar(250) NOT NULL,
  `IsActive` int(11) NOT NULL DEFAULT '0',
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`ReportId`, `Report`, `ButtonClass`, `IsActive`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(1, 'Consolidated Members Sheet', 'btnConsolidated', 1, -1, '2018-12-20 17:28:52', NULL, NULL),
(2, 'Consolidated Concise Members Sheet', 'btnConsolidatedConcise', 1, -1, '2018-12-20 17:30:46', NULL, NULL),
(3, 'REPA Members Genernal List', 'btnGenernalList', 1, -1, '2018-12-20 17:30:46', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `RoleId` int(11) NOT NULL,
  `Role` varchar(100) NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`RoleId`, `Role`, `IsActive`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(1, 'Administrator', 1, -1, '2018-09-09 13:15:25', NULL, NULL),
(2, 'User', 1, -1, '2018-09-09 13:15:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rolemenumapping`
--

CREATE TABLE `rolemenumapping` (
  `RoleMenuId` int(11) NOT NULL,
  `RoleId` int(11) NOT NULL,
  `MenuItemId` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1',
  `CreatedBy` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rolemenumapping`
--

INSERT INTO `rolemenumapping` (`RoleMenuId`, `RoleId`, `MenuItemId`, `IsActive`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(1, 1, 1, 1, NULL, NULL, NULL, NULL),
(2, 1, 2, 1, NULL, NULL, NULL, NULL),
(3, 1, 3, 1, NULL, NULL, NULL, NULL),
(4, 1, 4, 1, NULL, NULL, NULL, NULL),
(19, 1, 5, 1, -1, '2018-09-09 18:31:36', NULL, NULL),
(20, 1, 6, 1, -1, '2018-09-09 19:31:18', NULL, NULL),
(21, 1, 7, 1, -1, '2018-09-09 19:31:18', NULL, NULL),
(22, 1, 8, 1, -1, '2018-09-09 19:31:18', NULL, NULL),
(23, 1, 9, 1, -1, '2018-09-09 19:31:18', NULL, NULL),
(24, 1, 10, 1, -1, '2018-09-09 19:31:18', NULL, NULL),
(25, 1, 11, 1, -1, '2018-09-11 00:18:31', NULL, NULL),
(26, 1, 12, 1, -1, '2018-09-21 15:35:25', NULL, NULL),
(27, 1, 13, 1, -1, '2018-09-21 15:35:26', NULL, NULL),
(28, 1, 14, 1, -1, '2018-09-21 15:35:26', NULL, NULL),
(29, 1, 15, 1, -1, '2018-09-21 15:35:26', NULL, NULL),
(30, 1, 16, 1, -1, '2018-09-21 15:35:26', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subdesignation`
--

CREATE TABLE `subdesignation` (
  `SubDesignationId` int(11) NOT NULL,
  `ParentDesignationId` int(11) DEFAULT NULL,
  `SubDesignation` varchar(100) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdesignation`
--

INSERT INTO `subdesignation` (`SubDesignationId`, `ParentDesignationId`, `SubDesignation`, `IsActive`) VALUES
(1, 2, 'Member', 1),
(2, 2, 'Chairman', 1);

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `TitleId` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `IsActive` tinyint(4) NOT NULL DEFAULT '1',
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`TitleId`, `Title`, `IsActive`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(1, 'Prof.', 1, -1, '2018-12-12 13:33:16', NULL, NULL),
(2, 'Dr', 1, -1, '2018-12-12 13:34:09', NULL, NULL),
(3, 'Engr', 1, -1, '2018-12-12 13:34:10', NULL, NULL),
(4, 'Mr', 1, -1, '2018-12-12 13:34:10', NULL, NULL),
(5, 'Ms', 1, -1, '2018-12-12 13:35:08', NULL, NULL),
(6, 'Mrs', 1, -1, '2018-12-12 13:35:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(250) NOT NULL,
  `MidleName` varchar(250) NOT NULL,
  `LastName` varchar(250) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `WhatsAppNo` varchar(100) NOT NULL,
  `Landline` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `CityId` int(11) NOT NULL,
  `RoleId` int(11) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `FirstName`, `MidleName`, `LastName`, `Phone`, `WhatsAppNo`, `Landline`, `Email`, `Password`, `Address`, `CityId`, `RoleId`, `CreatedBy`, `CreatedDate`, `IsActive`, `ModifiedBy`, `ModifiedDate`) VALUES
(1, 'Musab', '', 'Yahiya', '03433563517', '03433563517', '', 'musabyahiya@hotmail.com', 'abc', 'FLat # K-3, K.D>A Flat Sector 5/E, Surjani Town, Karachi', 1, 1, -1, '2018-09-09 13:18:19', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `YearId` int(11) NOT NULL,
  `Year` bigint(20) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`YearId`, `Year`, `IsActive`) VALUES
(1, 1980, 1),
(2, 1981, 1),
(3, 1982, 1),
(4, 1983, 1),
(5, 1984, 1),
(6, 1985, 1),
(7, 1986, 1),
(8, 1987, 1),
(9, 1988, 1),
(10, 1989, 1),
(11, 1990, 1),
(12, 1991, 1),
(13, 1992, 1),
(14, 1993, 1),
(15, 1994, 1),
(16, 1995, 1),
(17, 1996, 1),
(18, 1997, 1),
(19, 1998, 1),
(20, 2000, 1),
(21, 2001, 1),
(22, 2002, 1),
(23, 2003, 1),
(24, 2004, 1),
(25, 2005, 1),
(26, 2006, 1),
(27, 2007, 1),
(28, 2008, 1),
(29, 2009, 1),
(30, 2010, 1),
(31, 2011, 1),
(32, 2012, 1),
(33, 2013, 1),
(34, 2014, 1),
(35, 2015, 1),
(36, 2016, 1),
(37, 2017, 1),
(38, 2018, 1),
(39, 1960, 1),
(40, 1961, 1),
(41, 1962, 1),
(42, 1963, 1),
(43, 1964, 1),
(44, 1965, 1),
(45, 1966, 1),
(46, 1967, 1),
(47, 1968, 1),
(48, 1969, 1),
(49, 1970, 1),
(50, 1971, 1),
(51, 1972, 1),
(52, 1973, 1),
(53, 1974, 1),
(54, 1975, 1),
(55, 1976, 1),
(56, 1977, 1),
(57, 1978, 1),
(58, 1979, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificatesession`
--
ALTER TABLE `certificatesession`
  ADD PRIMARY KEY (`CertificateSessionId`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`CountryId`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`MembershipId`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`NotificationId`);

--
-- Indexes for table `passover`
--
ALTER TABLE `passover`
  ADD PRIMARY KEY (`PassOverId`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`ReportId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `CountryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `MembershipId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `NotificationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `passover`
--
ALTER TABLE `passover`
  MODIFY `PassOverId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `ReportId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
