-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 10:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aucjunction`
--

-- --------------------------------------------------------

--
-- Table structure for table `addlot`
--

CREATE TABLE `addlot` (
  `id` int(11) NOT NULL,
  `sauctionid` varchar(225) DEFAULT NULL,
  `slotno` varchar(100) DEFAULT NULL,
  `slotname` varchar(200) DEFAULT NULL,
  `scategory` varchar(200) DEFAULT NULL,
  `sdescription` varchar(225) DEFAULT NULL,
  `slotlocation` varchar(225) DEFAULT NULL,
  `sfrominpectdate_time` datetime DEFAULT NULL,
  `stoinpectdate_time` datetime DEFAULT NULL,
  `semddetail` varchar(200) DEFAULT NULL,
  `slastdateemdsub` date DEFAULT NULL,
  `sprice` int(225) DEFAULT NULL,
  `sstartbidprice` int(225) DEFAULT NULL,
  `sqty` int(225) DEFAULT NULL,
  `sunitmeasurment` varchar(225) DEFAULT NULL,
  `sbidbase` varchar(200) DEFAULT NULL,
  `sgst` int(200) DEFAULT NULL,
  `sothertax` varchar(225) DEFAULT NULL,
  `semdamount` int(225) DEFAULT NULL,
  `sliftingperiod` varchar(200) DEFAULT NULL,
  `sliftingperiod2` datetime DEFAULT NULL,
  `spcbcertificate` tinyint(1) NOT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `shsncode` int(200) DEFAULT NULL,
  `cbidval` varchar(20) DEFAULT '0',
  `cbidtime` datetime NOT NULL DEFAULT current_timestamp(),
  `scompanyname` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addlot`
--

INSERT INTO `addlot` (`id`, `sauctionid`, `slotno`, `slotname`, `scategory`, `sdescription`, `slotlocation`, `sfrominpectdate_time`, `stoinpectdate_time`, `semddetail`, `slastdateemdsub`, `sprice`, `sstartbidprice`, `sqty`, `sunitmeasurment`, `sbidbase`, `sgst`, `sothertax`, `semdamount`, `sliftingperiod`, `sliftingperiod2`, `spcbcertificate`, `sname`, `status`, `shsncode`, `cbidval`, `cbidtime`, `scompanyname`) VALUES
(1, 'AUC/Anita/Ferrous/16/53/37', 'A-16-15', 'Paper', 'Ferrous', 'Scrap Ferrous Paper', 'Bangalore', '2020-11-21 16:00:00', '2020-11-27 16:56:00', 'By cheque', '2020-11-08', 200, 654, 654545, 'KG', 'KG', 5454, '564654', 654654, '30 days', '2020-11-06 16:01:00', 0, 'Anita', 1, 0, '10', '2020-11-17 20:47:30', NULL),
(2, 'AUC/Anita/Ferrous/16/53/37', 'A-16-33', 'Plastice', 'Ferrous', 'Cash', 'Mumbai', '2020-11-06 16:56:00', '2020-11-06 16:56:00', 'Paid', '2020-12-06', 54512, 512, 15125, 'KG', 'KG', 55454, '5554', 54654, '20days', '2020-11-06 16:02:00', 1, 'Anita', 1, 0, '0', '2020-11-17 20:47:30', NULL),
(4, 'AUC/Dhanr/Minor Metals/15/41/14', 'A-15-47', 'Plastic', 'Minor Metals', 'Wastage', 'Mysore', '2020-11-09 15:43:00', '2020-11-09 15:44:00', 'Paid', '2020-11-01', 285, 333, 654654, 'Matric Tone', 'Matric Tone', 5341351, '65654', 14, '2days', '2020-11-09 15:47:00', 1, 'Dhanraj', 0, 0, '49875', '2020-11-17 20:47:30', NULL),
(5, 'AUC/Dhanr/Minor Metals/15/41/14', 'A-15-34', 'Paper', 'Minor Metals', 'waste', 'Mysore', '2020-11-09 15:44:00', '2020-11-09 15:48:00', '16461', '2020-11-01', 564654, 654, 54354, 'Matric Tone', 'Matric Tone', 14465465, '4354654', 6465, '2days', '2020-11-09 15:49:00', 1, 'Dhanraj', 0, 0, '2823280', '2020-11-17 20:47:30', NULL),
(6, 'AUC/Meena/Minor Metals/13/32/41', 'A-13-33', 'Mine', 'Minor Metals', 'Good', 'Mysore', '2020-11-11 13:35:00', '2020-11-11 13:35:00', 'Paid', '2020-12-06', 6548465, 465, 46546, 'Lot', 'Lot', 454, '54654', 6544654, '2DAYS', '2020-11-11 13:39:00', 1, 'Meena', 0, 0, '0', '2020-11-17 20:47:30', NULL),
(7, 'AUC/Meena/Minor Metals/13/32/41', 'A-13-19', 'JKNKJ', 'Minor Metals', 'NKJBKM', 'Bangalore', '2020-11-11 13:36:00', '2020-11-11 13:40:00', 'MNBJ,', '2020-11-29', 36465, 354, 16465, 'KG', 'KG', 65646, '135135', 16516, '3DAYS', '2020-11-11 13:39:00', 0, 'Meena', 0, 0, '0', '2020-11-17 20:47:30', NULL),
(8, 'AUC/Seema/Non Ferrous/16/56/55', 'A-13-5', 'paper', 'Non Ferrous', 'Non Ferrous', 'Mangalore', '2020-11-11 13:51:00', '2020-11-11 13:55:00', '64631', '2020-11-29', 1654654, 654, 1651, 'Lot', 'Lot', 316545, '16541', 13135, '2days', '2020-11-11 13:56:00', 0, 'Seema', 1, 0, '0', '2020-11-17 20:47:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `adminprofile`
--

CREATE TABLE `adminprofile` (
  `sl_no` int(11) NOT NULL,
  `ausername` varchar(200) NOT NULL,
  `apassword` varchar(40) NOT NULL,
  `aname` varchar(200) NOT NULL,
  `adaction` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminprofile`
--

INSERT INTO `adminprofile` (`sl_no`, `ausername`, `apassword`, `aname`, `adaction`) VALUES
(1, 'charith_dev', 'MTIzNDU2', 'charith_dev', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `id` int(11) NOT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `scompanyname` varchar(100) DEFAULT NULL,
  `scompanyid` int(200) DEFAULT NULL,
  `scategory` varchar(200) DEFAULT NULL,
  `sauctionid` varchar(225) DEFAULT NULL,
  `svinspection` varchar(200) DEFAULT NULL,
  `sonlineaucdate_time` datetime DEFAULT NULL,
  `sterms_condiaccept` tinyint(1) DEFAULT NULL,
  `sterms_condiupload` text DEFAULT NULL,
  `sterms_text` varchar(225) DEFAULT NULL,
  `sterms_conditype` varchar(225) DEFAULT NULL,
  `adminapprovalstatus` tinyint(1) DEFAULT NULL,
  `sapproval` varchar(200) DEFAULT NULL,
  `sdownload` blob DEFAULT NULL,
  `saction` varchar(1) DEFAULT NULL,
  `sauctionstatus` tinyint(1) DEFAULT NULL,
  `saucstartdate_time` datetime(6) DEFAULT NULL,
  `saucclosedate_time` datetime(6) DEFAULT NULL,
  `adstatus` tinyint(1) DEFAULT NULL,
  `adaction` tinyint(1) DEFAULT NULL,
  `reauction` varchar(225) DEFAULT NULL,
  `stotalauction` int(225) DEFAULT NULL,
  `bwishlist` tinyint(1) DEFAULT NULL,
  `bemdstatus` int(225) DEFAULT NULL,
  `sstartbidprice` int(225) DEFAULT NULL,
  `sfrominpectdate_time` datetime DEFAULT NULL,
  `stoinpectdate_time` datetime DEFAULT NULL,
  `slastdateemdsub` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`id`, `sname`, `scompanyname`, `scompanyid`, `scategory`, `sauctionid`, `svinspection`, `sonlineaucdate_time`, `sterms_condiaccept`, `sterms_condiupload`, `sterms_text`, `sterms_conditype`, `adminapprovalstatus`, `sapproval`, `sdownload`, `saction`, `sauctionstatus`, `saucstartdate_time`, `saucclosedate_time`, `adstatus`, `adaction`, `reauction`, `stotalauction`, `bwishlist`, `bemdstatus`, `sstartbidprice`, `sfrominpectdate_time`, `stoinpectdate_time`, `slastdateemdsub`) VALUES
(1, 'Anita', NULL, NULL, 'Select', 'AUC/Anita/Ferrous/16/53/37', 'Alfa Tea Gardens', '2020-11-07 16:32:00', 1, 'a:1:{i:0;s:24:\"TEST_FILE_-_OCT_-_7.xlsx\";}', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Seema', NULL, NULL, 'Non Ferrous', 'AUC/Seema/Non Ferrous/16/56/55', 'Bangalore', '2020-11-06 16:03:00', 1, 'a:1:{i:0;s:25:\"industrial_survey_(1).pdf\";}', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'ea', NULL, NULL, 'Ferrous', 'AUC/ea/Ferrous/20/48/31', 'ADq', '2020-11-08 20:48:00', 1, 'a:1:{i:0;s:13:\"DSC_00311.JPG\";}', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Dhanraj', 'Dhanraj.ltd', NULL, 'Minor Metals', 'AUC/Dhanr/Minor Metals/15/41/14', 'Bangalore', NULL, 1, NULL, 'NA', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-09 15:44:00.000000', '2020-11-18 15:46:00.000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'ddd', 'ddd', NULL, 'Minor Metals', 'AUC/ddd/Minor Metals/17/4/36', 'ddd', NULL, 1, NULL, 'ddd', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-09 17:05:00.000000', '2020-11-17 20:08:00.000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Meena', 'Mines', NULL, 'Minor Metals', 'AUC/Meena/Minor Metals/13/32/41', 'Bangalore', NULL, 1, NULL, 'nnn', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-11 13:33:00.000000', '2020-11-11 13:37:00.000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Mina', 'Mina', NULL, 'Non Ferrous', 'AUC/Mina/Non Ferrous/13/49/47', 'paid', NULL, 1, NULL, 'asdasd', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-11 13:50:00.000000', '2020-11-11 13:55:00.000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `biddercart`
--

CREATE TABLE `biddercart` (
  `id` int(11) NOT NULL,
  `bidderusername` varchar(100) DEFAULT NULL,
  `auctiontype` tinyint(1) DEFAULT NULL,
  `auctionid` varchar(200) DEFAULT NULL,
  `lotno` varchar(200) DEFAULT NULL,
  `aucstartdate_time` datetime(6) DEFAULT NULL,
  `aucclosedate_time` datetime(6) DEFAULT NULL,
  `bidstart` varchar(50) DEFAULT NULL,
  `bidprice` varchar(50) DEFAULT NULL,
  `bidmaxvalue` varchar(100) DEFAULT NULL,
  `bidamount` varchar(100) DEFAULT NULL,
  `emdpaid` tinyint(1) DEFAULT NULL,
  `emdrequest` tinyint(1) DEFAULT NULL,
  `emd_paid_dd` tinyint(1) DEFAULT NULL,
  `upload_dd` text DEFAULT NULL,
  `mybid_val` varchar(200) DEFAULT NULL,
  `abidmaxvalue` varchar(50) DEFAULT NULL,
  `abidslab` varchar(50) DEFAULT NULL,
  `abidding` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biddercart`
--

INSERT INTO `biddercart` (`id`, `bidderusername`, `auctiontype`, `auctionid`, `lotno`, `aucstartdate_time`, `aucclosedate_time`, `bidstart`, `bidprice`, `bidmaxvalue`, `bidamount`, `emdpaid`, `emdrequest`, `emd_paid_dd`, `upload_dd`, `mybid_val`, `abidmaxvalue`, `abidslab`, `abidding`) VALUES
(1, 'nirmal', NULL, 'AUC/Anita/Ferrous/16/53/37', 'A-16-15', NULL, NULL, '654', '10000', NULL, '2,000000', 1, 1, 1, 'a:1:{i:0;s:15:\"Lighthouse4.jpg\";}', NULL, NULL, NULL, 0),
(2, 'anita', NULL, 'AUC/Anita/Ferrous/16/53/37', 'A-16-33', NULL, NULL, '515152', '54512', NULL, NULL, 0, 1, 1, NULL, NULL, NULL, NULL, 0),
(3, 'avinash@gmail.com', NULL, 'AUC/Dhanr/Minor Metals/15/41/14', 'A-15-47', '2020-11-17 15:44:00.000000', '2020-11-24 18:07:00.000000', '5565', '545', NULL, NULL, 1, 1, 1, NULL, '49875', NULL, NULL, 0),
(4, 'Bharath Steels', NULL, 'AUC/Meena/Minor Metals/13/32/41', 'A-13-19', '2020-11-11 13:33:00.000000', '2020-11-11 13:37:00.000000', '6546354', '36465', NULL, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0),
(5, 'Bharath Steels', NULL, 'AUC/Meena/Minor Metals/13/32/41', 'A-13-33', '2020-11-11 13:33:00.000000', '2020-11-11 13:37:00.000000', '45646465', '6548465', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, 'avinash@gmail.com', NULL, 'AUC/Anita/Ferrous/16/53/37', 'A-16-15', '2020-11-17 00:00:00.000000', '2020-11-20 07:00:00.000000', '654', '10000', NULL, NULL, 0, NULL, 1, 'a:1:{i:0;s:8:\"img9.jpg\";}', NULL, NULL, NULL, 0),
(7, 'avinash@gmail.com', NULL, 'AUC/Dhanr/Minor Metals/15/41/14', 'A-15-34', '2020-11-09 15:44:00.000000', '2020-11-24 23:58:00.442000', '5565', '545', NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:45:\"WhatsApp_Image_2020-06-10_at_1_18_14_PM32.jpg\";}', '2823280', '564654', '654', 0),
(8, 'avinash@gmail.com', NULL, 'AUC/Seema/Non Ferrous/16/56/55', 'A-13-5', NULL, NULL, '654', '1654654', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `biddingdata`
--

CREATE TABLE `biddingdata` (
  `id` int(50) NOT NULL,
  `bidderusername` varchar(200) DEFAULT NULL,
  `sauctionid` varchar(200) DEFAULT NULL,
  `slotno` varchar(200) DEFAULT NULL,
  `bidvalue` int(225) DEFAULT NULL,
  `Date_time` datetime(6) DEFAULT NULL,
  `bidamount` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biddingdata`
--

INSERT INTO `biddingdata` (`id`, `bidderusername`, `sauctionid`, `slotno`, `bidvalue`, `Date_time`, `bidamount`) VALUES
(1, 'avinash@gmail.com', 'abcd', 'a-11', NULL, '2020-11-20 00:00:00.000000', 1000),
(2, 'nirmal', 'abcd', 'a-11', NULL, '2020-11-20 00:00:00.000000', 1001),
(3, 'avinash@gmail.com', 'AUC/Dhanr/Minor Metals/15/41/14', 'A-15-47', NULL, '2020-11-20 17:50:19.000000', 49020),
(4, 'avinash@gmail.com', 'AUC/Dhanr/Minor Metals/15/41/14', 'A-15-47', NULL, '2020-11-23 13:27:38.000000', 1129308),
(5, 'avinash@gmail.com', 'AUC/Dhanr/Minor Metals/15/41/14', 'A-15-34', NULL, '2020-11-23 14:20:46.000000', 1129508),
(6, 'avinash@gmail.com', 'AUC/Dhanr/Minor Metals/15/41/14', 'A-15-34', NULL, '2020-11-24 15:43:17.000000', 1693962),
(7, 'avinash@gmail.com', 'AUC/Dhanr/Minor Metals/15/41/14', 'A-15-34', NULL, '2020-11-24 17:53:45.000000', 1693977),
(8, 'avinash@gmail.com', 'AUC/Dhanr/Minor Metals/15/41/14', 'A-15-34', NULL, '2020-11-24 18:26:56.000000', 2258618),
(9, 'avinash@gmail.com', 'AUC/Dhanr/Minor Metals/15/41/14', 'A-15-34', NULL, '2020-11-24 18:27:42.000000', 2268728),
(10, 'avinash@gmail.com', 'AUC/Dhanr/Minor Metals/15/41/14', 'A-15-34', NULL, '2020-11-24 22:35:02.000000', 2268729),
(11, 'avinash@gmail.com', 'AUC/Dhanr/Minor Metals/15/41/14', 'A-15-34', NULL, '2020-11-24 23:00:12.000000', 2823270),
(12, 'avinash@gmail.com', 'AUC/Dhanr/Minor Metals/15/41/14', 'A-15-34', NULL, '2020-11-24 23:02:11.000000', 2823280);

-- --------------------------------------------------------

--
-- Table structure for table `buyerprofile`
--

CREATE TABLE `buyerprofile` (
  `id` int(11) NOT NULL,
  `bname` varchar(50) DEFAULT NULL,
  `bcompany` varchar(100) DEFAULT NULL,
  `bcomptype` varchar(100) DEFAULT NULL,
  `bbuyertype` varchar(100) DEFAULT NULL,
  `bbuyerlocation` varchar(100) DEFAULT NULL,
  `bcontactperson` varchar(50) DEFAULT NULL,
  `bdesignation` varchar(200) DEFAULT NULL,
  `bagreement` tinyint(1) DEFAULT NULL,
  `bagreementdate` date DEFAULT NULL,
  `bterms_condi` tinyint(1) DEFAULT NULL,
  `bcin` varchar(225) DEFAULT NULL,
  `baddress` varchar(225) DEFAULT NULL,
  `bcity` varchar(50) DEFAULT NULL,
  `bpin` int(11) DEFAULT NULL,
  `bstate` varchar(50) DEFAULT NULL,
  `bcountry` varchar(11) DEFAULT NULL,
  `bemail` varchar(100) DEFAULT NULL,
  `bphone` varchar(20) DEFAULT NULL,
  `bpan` varchar(11) DEFAULT NULL,
  `busername` varchar(50) DEFAULT NULL,
  `bpassword` varchar(200) DEFAULT NULL,
  `boldpassword` varchar(200) DEFAULT NULL,
  `bnewpassword` varchar(200) DEFAULT NULL,
  `bconfirmpassword` varchar(200) DEFAULT NULL,
  `bgst` varchar(11) DEFAULT NULL,
  `bpcb` varchar(225) DEFAULT NULL,
  `bcapcha` varchar(50) DEFAULT NULL,
  `bbankname` varchar(50) DEFAULT NULL,
  `baccountnumber` varchar(200) DEFAULT NULL,
  `bbranch` varchar(50) DEFAULT NULL,
  `bifsccode` varchar(50) DEFAULT NULL,
  `buploadimagepic` varchar(200) DEFAULT NULL,
  `bsigneddocument` varchar(200) DEFAULT NULL,
  `bemd` tinyint(1) DEFAULT NULL,
  `adaction` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyerprofile`
--

INSERT INTO `buyerprofile` (`id`, `bname`, `bcompany`, `bcomptype`, `bbuyertype`, `bbuyerlocation`, `bcontactperson`, `bdesignation`, `bagreement`, `bagreementdate`, `bterms_condi`, `bcin`, `baddress`, `bcity`, `bpin`, `bstate`, `bcountry`, `bemail`, `bphone`, `bpan`, `busername`, `bpassword`, `boldpassword`, `bnewpassword`, `bconfirmpassword`, `bgst`, `bpcb`, `bcapcha`, `bbankname`, `baccountnumber`, `bbranch`, `bifsccode`, `buploadimagepic`, `bsigneddocument`, `bemd`, `adaction`) VALUES
(1, '', 'abc', 'two', 'two', 'bangalore', 'bcd', NULL, 1, '2020-10-23', 1, '', 'Delhi punjab', 'Hyd', 454948, 'twelve', NULL, 'CDSA@gmail.com', '2147483647', '4451', NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, '0', '', NULL, '', '0', '', '', 'a:1:{i:0;s:19:\"Chrysanthemum11.jpg\";}', 'N;', NULL, 1),
(2, '', 'rgrfgf', 'three', 'two', '43t5434', 'rtrt', NULL, 1, '2020-10-23', 1, '', 'Delhi punjab', 'tret', 454948, '', NULL, 'ret@gmail.com', '654632', 'fbg1654', NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, 'fgrfg', '', NULL, '', '0', '', '', 's:13:\"profileimage2\";', 'a:2:{i:0;s:21:\"aucjunction-SRS20.pdf\";i:1;s:22:\"Rawmet_UI_Design25.pdf\";}', NULL, 1),
(3, NULL, 'TNB Enterprises', 'two', 'two', 'Bangalore', 'Tabrez Pasha', NULL, 1, '2020-10-28', 1, NULL, '#1&2, Choodenapura Village, Kengeri hobli', 'Bangalore', 560069, 'twelve', NULL, 'ttnbenterprises@gmail.com', '2147483647', 'BCCPT9788F', 'TNB', 'MTIzNDU2', NULL, NULL, NULL, '29BCCPT9788', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N;', NULL, 1),
(4, '', 'E Friendly Waste Recyclers', 'two', 'two', 'Bangalore', 'Khadeer Pasha', NULL, 1, '2020-10-28', 1, '', 'Delhi punjab', 'Bangalore', 454948, 'twelve', NULL, 'efriendly.ewaste@gmail.com', '2147483647', 'AAEFE8458Q', NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, '29AAEFE8458', '', NULL, '', '0', '', '', 'a:1:{i:0;s:21:\"aucjunction-SRS25.pdf\";}', 'N;', NULL, 1),
(5, '', 'Turbo Motor', 'two', 'two', 'Bangalore', 'Fairoz Khan', NULL, 1, '2020-10-28', NULL, '', 'Delhi punjab', 'Bangalore', 454948, NULL, NULL, 'turbomotors1@gmail.com', '2147483647', 'AKJPK4012B', NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, '29AKJPK4012', '', NULL, '', '0', '', '', 'a:1:{i:0;s:11:\"Tulips1.jpg\";}', 'a:1:{i:0;s:11:\"Tulips2.jpg\";}', NULL, 1),
(6, '', 'Turbo Motor', 'two', 'two', 'Bangalore', 'Fairoz Khan', NULL, NULL, NULL, NULL, '', 'Delhi punjab', 'Bangalore', 454948, NULL, NULL, 'turbomotors1@gmail.com', '2147483647', 'AKJPK4012B', NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, '29AKJPK4012', '', NULL, '', '0', '', '', 'a:1:{i:0;s:11:\"Tulips1.jpg\";}', 'a:1:{i:0;s:11:\"Tulips2.jpg\";}', NULL, 1),
(7, NULL, 'Bharath Steels', 'two', 'two', 'Bangalore', 'Shabbir Ulla Khan', NULL, NULL, NULL, NULL, NULL, '#42/8, 2nd Cross, Fireworks Colony, JC Road', 'Bangalore', 560002, 'twelve', NULL, 'bharathsteels3577@gmail.com', '2147483647', 'ARQPK7074B', 'Bharath Steels', 'MTIzNDU2', NULL, NULL, NULL, '29ARQPK7074', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N;', NULL, 1),
(8, NULL, 'Sidra Steels', 'two', 'two', 'Bangalore', 'Ziyaulla', NULL, NULL, NULL, NULL, NULL, '#12, Kambagundi Layout, Behind SJP Police Station', 'Bangalore', 560002, 'twelve', NULL, 'mziya25@yahoo.co.in', '2147483647', 'ABBPZ6919R', 'Sidra Steels', 'MTIzNDU2', NULL, NULL, NULL, '29ABBPZ6919', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N;', NULL, 1),
(9, NULL, 'Subhan & Sons', 'two', 'two', 'Bangalore', 'Saleem Sheriff', NULL, 1, '2020-10-28', 1, NULL, '#13/6, Singasandra, Hosur Main Road', 'Bangalore', 560068, 'twelve', NULL, 'salimshariff174@gmail.com', '2147483647', 'HERPS3970D', 'Subhan', 'MTIzNDU2', NULL, NULL, NULL, '29HERPS3970', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N;', NULL, 0),
(10, NULL, 'AS Trading Company', 'two', 'two', 'Bangalore', 'Mohammed Muyeed', NULL, 1, '2020-10-28', 1, NULL, 'Opp Singayanapalya Bus Stop, Whitefield Road, Mahadevapura Post', 'Bangalore', 560048, 'twelve', NULL, 'astdcompany@gmail.com', '2147483647', 'AFOPA4927P', 'Astrading', 'MTIzNDU2', NULL, NULL, NULL, '29AFOPA4927', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N;', NULL, 1),
(11, NULL, 'ABC Pvt Ltd', 'one', 'one', 'Peenya', 'ABC', NULL, 1, '2020-11-02', 1, NULL, '#2222, 117th Cross, Peenya Industrial Area', 'Bangalore', 560058, NULL, NULL, 'abc@abc.com', '2147483647', 'ABCDE1234F', 'abc', 'CQphYmNAMTIz', NULL, NULL, NULL, '29ABCDE1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N;', NULL, 1),
(12, '', 'bhel', 'four', 'two', 'bangalore', 'megha', NULL, 1, '2020-11-03', 1, '', 'Delhi punjab', 'bangalore', 454948, NULL, NULL, 'meghasangmesh2@gmail.com', '2147483647', '12435456bnj', NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, '1234rgthy', '', NULL, '', '0', '', '', 's:13:\"profileimage2\";', 'a:1:{i:0;s:13:\"Jellyfish.jpg\";}', NULL, 1),
(13, NULL, 'qwer', 'three', 'two', 'qwer', 'qwer', NULL, 1, '2020-11-03', 1, NULL, 'qwer', 'qwer', 0, 'two', 'India', 'qwer@q.com', '0', 'qwer', 'qwer', 'cXdlcg==', NULL, NULL, NULL, 'qwer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N;', NULL, 1),
(14, 'avinash tripathi', 'tripathi ltd', 'Govt', NULL, NULL, 'Avinash', NULL, NULL, NULL, NULL, '213', 'Delhi cat', NULL, 4549488, 'Delhi', NULL, 'avinashtripha@gmail.com', '21474836', NULL, 'avinash@gmail.com', 'c3Nzcw==', NULL, '', NULL, '12', '15649', NULL, 'Sbi  ', '54545523322', 'Indra nagar 3', '4848434', 'a:1:{i:0;s:18:\"Chrysanthemum8.jpg\";}', 'a:6:{i:0;s:20:\"Rawmet-vendcust.docx\";i:1;s:21:\"aucjunction-SRS26.pdf\";i:2;s:22:\"Rawmet_UI_Design28.pdf\";i:3;s:18:\"Rawmet24-SRS17.pdf\";i:4;s:18:\"Rawmet24-SRS16.pdf\";i:5;s:21:\"aucjunction-SRS22.pdf\";}', NULL, 0),
(15, 'qwer', 'rewq', 'qwer', NULL, NULL, 'q2er', NULL, NULL, NULL, NULL, 'qwre', 'qwer', NULL, 0, 'qwer', 'INDIA', 'qwer', 'qwer', NULL, 'qwer@gmail.com', 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, 'qwer', 'qwer', NULL, 'qwer', 'qwer', 'qwer', 'qwer', 'a:1:{i:0;s:19:\"Chrysanthemum10.jpg\";}', 'a:1:{i:0;s:11:\"Desert9.jpg\";}', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Ferrous Metals'),
(2, 'Non Ferrous Metals'),
(3, 'Minor Metals'),
(4, 'Paper Materials'),
(5, 'Plastic Materials'),
(6, 'Construction Materials');

-- --------------------------------------------------------

--
-- Table structure for table `liveauction`
--

CREATE TABLE `liveauction` (
  `id` int(11) NOT NULL,
  `sauctionid` varchar(225) DEFAULT NULL,
  `closetime` time(6) DEFAULT NULL,
  `timeleft` time(6) DEFAULT NULL,
  `livestatus` int(225) DEFAULT NULL,
  `bidvalue` int(225) DEFAULT NULL,
  `bidamount` int(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sellerprofile`
--

CREATE TABLE `sellerprofile` (
  `id` int(11) NOT NULL,
  `sname` varchar(50) DEFAULT NULL,
  `scomapnyname` varchar(225) DEFAULT NULL,
  `ssellertype` varchar(220) DEFAULT NULL,
  `scontactperson` varchar(200) DEFAULT NULL,
  `sdesignation` varchar(100) DEFAULT NULL,
  `sagreement` tinyint(1) DEFAULT NULL,
  `sagreementdate` date DEFAULT NULL,
  `sterms_condi` tinyint(1) DEFAULT NULL,
  `scin` varchar(225) DEFAULT NULL,
  `scompanytype` varchar(50) DEFAULT NULL,
  `saddress` tinytext DEFAULT NULL,
  `saddresscount` varchar(100) DEFAULT NULL,
  `sstreet` varchar(100) DEFAULT NULL,
  `scity` varchar(100) DEFAULT NULL,
  `span` varchar(225) DEFAULT NULL,
  `spin` int(11) DEFAULT NULL,
  `sstate` varchar(100) DEFAULT NULL,
  `scountry` varchar(100) DEFAULT NULL,
  `slocation` varchar(225) DEFAULT NULL,
  `semail` varchar(200) DEFAULT NULL,
  `sphone` int(11) DEFAULT NULL,
  `susername` varchar(50) DEFAULT NULL,
  `spassword` varchar(100) DEFAULT NULL,
  `soldpassword` varchar(50) DEFAULT NULL,
  `snewpassword` varchar(50) DEFAULT NULL,
  `sconfirmpassword` varchar(10) DEFAULT NULL,
  `sgst` varchar(12) DEFAULT NULL,
  `spcb` varchar(225) DEFAULT NULL,
  `scapcha` varchar(12) DEFAULT NULL,
  `sbankername` varchar(200) DEFAULT NULL,
  `saccountnumber` varchar(200) DEFAULT NULL,
  `sbranch` varchar(100) DEFAULT NULL,
  `sifsccode` varchar(200) DEFAULT NULL,
  `suploadprofilepic` varchar(200) DEFAULT NULL,
  `ssigneddocument` varchar(200) DEFAULT NULL,
  `adaction` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellerprofile`
--

INSERT INTO `sellerprofile` (`id`, `sname`, `scomapnyname`, `ssellertype`, `scontactperson`, `sdesignation`, `sagreement`, `sagreementdate`, `sterms_condi`, `scin`, `scompanytype`, `saddress`, `saddresscount`, `sstreet`, `scity`, `span`, `spin`, `sstate`, `scountry`, `slocation`, `semail`, `sphone`, `susername`, `spassword`, `soldpassword`, `snewpassword`, `sconfirmpassword`, `sgst`, `spcb`, `scapcha`, `sbankername`, `saccountnumber`, `sbranch`, `sifsccode`, `suploadprofilepic`, `ssigneddocument`, `adaction`) VALUES
(2, 'Anita', 'NSPCL', 'Educational/Research Institutes', 'Nirmal', 'Software Developer', 1, '2020-10-23', 1, NULL, NULL, NULL, NULL, '12', 'Bangalore', '123tuyu', 490001, 'Karnataka', NULL, 'Bangalore', 'nirmal@gmail.com', 4561222, 'nirmal', 'MTIz', NULL, NULL, NULL, 'tyu890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'Coastal Heat Treatment Solutions', 'Other', 'Ashok Poojari', NULL, NULL, NULL, NULL, '', '', 'a:1:{i:0;s:16:\"Corporate-Office\";}', 'a:1:{i:0;s:0:\"\";}', 'B-188/1, 5th main road, PIA, 2nd stage Bangalore 560058', 'Bangalore', 'AALFC1478K', 560068, 'Karnataka', NULL, 'Bangalore', 'coastalhts@gmail.com', 2147483647, NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, '29AALFC1478K', '', NULL, '', '0', '', '', 'a:1:{i:0;s:14:\"download14.jpg\";}', 'N;', NULL),
(4, '', 'JV Industries', 'Other', 'Jay Verma', 'Director', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '52/5, 4th main, Ward#103, Kaveripura, Kamakshipalya,', 'Bangalore', 'AQCPV5970E', 560079, 'Karnataka', NULL, 'Bangalore', 'jayverma900@gmail.com', 2147483647, 'jayverma900@gmail.com', 'MTIzNDU2', NULL, NULL, NULL, '29AQCPV5970E', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '', 'Coastal Heat Treatment Solutions', 'Other', 'Ashok Poojari', NULL, 1, '2020-10-27', 1, '', '', 'a:1:{i:0;s:16:\"Corporate-Office\";}', 'a:1:{i:0;s:0:\"\";}', 'B-188/1, 5th main road, PIA, 2nd stage', 'Bangalore', 'AALFC1478K', 560068, 'Karnataka', NULL, 'BANGALORE', 'coastalhts@gmail.com', 2147483647, NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, '29AALFC1478K', '', NULL, '', '0', '', '', 'a:1:{i:0;s:14:\"download14.jpg\";}', 'N;', NULL),
(6, '', 'Coastal Heat Treatment Solutions', 'State PSU', 'Ashok Poojari', NULL, 1, '2020-10-27', 1, '', '', 'a:1:{i:0;s:16:\"Corporate-Office\";}', 'a:1:{i:0;s:0:\"\";}', 'B-188/1, 5th main road, PIA, 2nd stage ', 'Bangalore', 'AALFC1478K', 560068, 'Karnataka', NULL, 'Peenya 2nd Stage', 'coastalhts@gmail.com', 2147483647, NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, '29AALFC1478K', '', NULL, '', '0', '', '', 'a:1:{i:0;s:14:\"download14.jpg\";}', 'N;', NULL),
(7, NULL, 'BRAHANS RUBBER PRODUCTS', 'State PSU', 'SHANTHARAM SHETTY', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#78,10th A cross,balaji nagar,tigalarpalya main road', 'Bangalore', 'AAAPS8485P', 560058, 'Karnataka', NULL, 'Tigalarpalya', 'brahansbangalore@gmail.com', 2147483647, 'brahans', 'MTIzNDU2', NULL, NULL, NULL, '29AAAPS8485P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, 'JV Industries', 'State PSU', 'Prakash Verma', 'Manager', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '52/5, 4th main, Ward#103, Kaveripura, Kamakshipalya', 'Bangalore', 'AQCPV5970E', 560079, 'Karnataka', NULL, 'Kamakshipalya', 'jayverma900@gmail.com', 2147483647, 'JVIndustries', 'MTIzNDU2', NULL, NULL, NULL, '29AQCPV5970E', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, 'SURYA HYDRAULICS', 'State PSU', 'AS Suresh Kumar', 'Manager', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#24,11th cross,4th phase,peenya industrial area,ganapathi nagar', 'Bangalore', 'AKPPA1332E', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'suryahydraulic@gmail.com', 2147483647, 'SURYA', 'MTIzNDU2', NULL, NULL, NULL, '29AKPPA1332E', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, 'N K SHEET METAL WORKS PVT LTD', 'State PSU', 'KUBENDRAN', 'Manager', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#3B/415/33-34, PIA, 2nd Phase, KIADB Main Road', 'Bangalore', 'AACCN9849F', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'nksmw2009@gmail.com', 2147483647, 'NKSHEET', 'MTIzNDU2', NULL, NULL, NULL, '29AACCN9849F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, 'MM Equipments', 'State PSU', 'TS Umesh', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#B-387, 100Ft Road, Peenya 1st Stage, PIA', 'Bangalore', 'AADPU0333R', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'mm.equipments@yahoo.com', 80, 'MMEQUIPE', 'MTIzNDU2', NULL, NULL, NULL, '29AADPU0333R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, 'Altec Industries', 'State PSU', 'R Deepak', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, 'B-181, 4th main Road, 2nd Stage, PIA', 'Bangalore', 'ACGPN3126J', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'altec181@gmail.com', 2147483647, 'Altec', 'MTIzNDU2', NULL, NULL, NULL, '29ACGPN3126J', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, 'Multipak Electronics India Pvt Ltd', 'State PSU', 'SB Raju', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#28P, KIADB Industrial Area, Bommasandra to Jigani Link Road, 4th phase', 'Bangalore', 'AABCM1455D', 560099, 'Karnataka', NULL, 'Bommasandra', 'sbraju@multipackelectronics.com', 2147483647, 'Multipak', 'MTIzNDU2', NULL, NULL, NULL, '29AABCM1455D', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, 'SAS PRESS TECH', 'State PSU', 'Ashvin Sreenivasan', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#5, 2nd Main, Ramamandir Road,Kaveripura, Kamakshipalya', 'Bangalore', 'ABBFS3543E', 560079, 'Karnataka', NULL, 'Kamakshipalya', 'ashvin@saspresstech.com', 2147483647, 'Saspress', 'MTIzNDU2', NULL, NULL, NULL, '29ABBFS3543E', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, 'ENGINEERING STEEL FABRICATING WORKS', 'State PSU', 'SRIKANTH MR', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#61, 10th Main, 3rd Phase,Peenya Industrial Area', 'Bangalore', 'AABFE5721B', 560058, 'Karnataka', NULL, 'peenya 3rd phase', 'esfworks@gmail.com', 2147483647, 'steelfabrication', 'MTIzNDU2', NULL, NULL, NULL, '29AABFE5721B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, 'SRINU ENGINEERING INDUSTRIES', 'State PSU', 'Sridhar Babu', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '# B -120 3rd main, 2nd stage,peenya indl area', 'Bangalore', 'AAOFS1558D', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'srinu@srinuengg.in', 2147483647, 'srinu', 'MTIzNDU2', NULL, NULL, NULL, '29AAOFS1558D', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, 'SRI RAJESHWARI INDUSTRIES', 'State PSU', 'Pradeep Kumar', 'Manager', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '30/1, 1st Main Road, 4th Cross, Robert Son Block, Ramachandrapura', 'Bangalore', 'AFGPB0958P', 560021, 'Karnataka', NULL, 'Ramachandrapura', 'pradeep_baburao@rediffmail.com', 2147483647, 'Rajeshwari', 'MTIzNDU2', NULL, NULL, NULL, '29AFGPB0958P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, 'UNIQUE PUNCH SYSTEMS PVT LTD', 'State PSU', 'Chandrashekar K', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#485/7, 14th Cross, IV Phase,Peenya Industrial Area', 'Bangalore', 'AAACU2508A', 560058, 'Karnataka', NULL, 'peenya4th phase', 'kcs@uniquepunch.com', 2147483647, 'kcs', 'MTIzNDU2', NULL, NULL, NULL, '29AAACU2508A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '', 'GK Industrial Corporation', 'State PSU', 'P Mani', NULL, 1, '2020-10-27', 1, '', '', 'a:1:{i:0;s:16:\"Corporate-Office\";}', 'a:1:{i:0;s:0:\"\";}', '#18, Byrappa Lane, Ranasinghpet', 'Bangalore', 'AAPFG5532L', 560053, 'Karnataka', NULL, 'Ranasinghpet', 'gkinccorp@gmail.com', 2147483647, NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, '29AAPFG5532L', '', NULL, '', '0', '', '', 'a:1:{i:0;s:14:\"download13.jpg\";}', 'N;', NULL),
(20, NULL, 'Flex Trans Technologies', 'State PSU', 'Mahendran A', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#B-183, 4th Main, 2nd Stage, PIA', 'Bangalore', 'DLTPS5305F', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'flextrans183@yahoo.com', 2147483647, 'flex', 'MTIzNDU2', NULL, NULL, NULL, '29DLTPS5305F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, 'KLAD ON DESIGHN PVT LTD', 'State PSU', 'Suresh R', 'Director', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, '# 5&6, Survey # 38/2, Nadekerappa indl estate, andrahalli main road,near peenya 2nd stage', 'Bangalore', 'AACCK7726J', 560058, 'Karnataka', NULL, 'Peenya', 'admin@kladon.com', 2147483647, 'KLAD', 'MTIzNDU2', NULL, NULL, NULL, '29AACCK7726J', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, 'Startronix Modular Systems Pvt. Ltd', 'State PSU', 'Shivaraj Mattigatti', 'Manager', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, '#46/1, Off Magadi Main Road,Near Vani School,Kachovalli, Dasanapura Hobli', 'Bangalore', 'AAECS5477J', 560091, 'Karnataka', NULL, 'Bangalore', 'shivaraj@startronixindia.com', 2147483647, 'Startronix', 'MTIzNDU2', NULL, NULL, NULL, '29AAECS5477J', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, 'Samantha Enterprises', 'State PSU', 'PANIRAJ', 'Manager', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, 'Shop Number- 2-58/5, 1st \'A\' Main, Magadi Main Rd, Vrishabhavathi Nagar, Kamakshipalya, Bengaluru', 'Bangalore', 'AADFMO342C', 560079, 'Karnataka', NULL, 'Bangalore', 'samanthaent@gmail.com', 2147483647, 'Samantha', 'MTIzNDU2', NULL, NULL, NULL, '29AADFMO342C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, 'Smile Electronics Ltd', 'State PSU', 'MH Nadeem', 'Manager', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, '29AACCS8765R1Z7', 'Bangalore', 'AACCS8765R', 560049, 'Karnataka', NULL, 'Bangalore', 'nadeem@smileelectronics.com', 2147483647, 'Smile', 'MTIzNDU2', NULL, NULL, NULL, '29AACCS8765R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(25, NULL, 'Sri Sairam Engineering Works', 'State PSU', 'Jagadeesh', 'Manager', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, '#103, 1st Main Road, Near Ambhamaheshwari Temple, Kamakshipalya', 'Bangalore', 'AZSPJ3145Q', 560079, 'Karnataka', NULL, 'Bangalore', 'sairamenggwork@gmail.com', 2147483647, 'Srisairam', 'MTIzNDU2', NULL, NULL, NULL, '29AZSPJ3145Q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(26, 'Seema', 'ANAGHA ENGINEERING SYSTEMS', 'Central/State Govt/UT/Local Authority', 'Mallikarjun B', 'Director', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '#22, 17th Cross,Doddanna Indl Estate', 'Bangalore', 'ADDPN1843Q', 560091, 'Karnataka', NULL, 'Peenya 2nd Stage', 'anagha_aes@rediffmail.com', 2147483647, 'ANAGHA', 'MTIzNDU2', NULL, NULL, NULL, '29ADDPN1843Q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, 'ANAGHA ENGINEERING SYSTEMS', 'State PSU', 'Mallikarjun B', 'Director', 1, '2020-10-29', 1, NULL, NULL, NULL, NULL, '#22, 17th Cross,Doddanna Indl Estate', 'Bangalore', 'ADDPN1843Q', 560091, 'Karnataka', NULL, 'Peenya 2nd Stage', 'anagha_aes@rediffmail.com', 2147483647, 'anaghaengineering', 'MTIzNDU2', NULL, NULL, NULL, '29ADDPN1843Q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Mitra', 'Mitra Metal Finishers', 'State PSU', '9880404666', NULL, 1, '2020-10-29', 1, '', '', 'a:1:{i:0;s:16:\"Corporate-Office\";}', 'a:1:{i:0;s:0:\"\";}', 'No.24, 100 Feet Road Jalahalli Cross', 'Bangalore', 'AOOPS8450G', 560057, 'Karnataka', NULL, ' T Dasarahalli', 'reiyanshaiju@gmail.com', 2147483647, NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, '29AOOPS8450G', '', NULL, '', '0', '', '', 'a:1:{i:0;s:14:\"download18.jpg\";}', 'a:1:{i:0;s:29:\"Mail_validation_-_Copy17.xlsx\";}', NULL),
(29, NULL, 'SeekVise Business Solutions Pvt Ltd', 'State PSU', 'Chethan Dev', 'Director', 1, '2020-10-30', 1, NULL, NULL, NULL, NULL, 'No 5560, 3rd Main', 'Bangalore', 'Apopd8852l', 560060, 'Karnataka', NULL, 'Bangalore', 'seekvise@gmail.com', 2147483647, 'seekvise', 'QmFuZ2Fsb3JlQA==', NULL, NULL, NULL, 'AXTNSSAIVNIE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'ABC', 'ABC Pvt Ltd', 'State PSU', 'ABC', NULL, 1, '2020-11-02', 1, '', '', 'a:1:{i:0;s:16:\"Corporate-Office\";}', 'a:1:{i:0;s:0:\"\";}', '#2222, 117th Cross,Doddanna Indl Estate', 'Bangalore', 'ABCDE1234F', 560060, 'Karnataka', NULL, 'Kengeri', 'abc@abc.com', 2147483647, NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, '29ABCDE1234F', '', NULL, '', '0', '', '', 'a:1:{i:0;s:16:\"Lighthouse16.jpg\";}', 'a:1:{i:0;s:29:\"Mail_validation_-_Copy16.xlsx\";}', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `description`) VALUES
(1, 'IRON', 'Type: Pipes, Sheets, Rods, Blocks & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(2, 'STAINLESS STEEL', 'Type: Blocks, Pipes, Sheets, Rods & Etc\r\nUsage/Application: Industrial\r\nState of Matter : Solid\r\nForm: Kilogram'),
(3, 'CAST IRON', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(4, 'STEEL ALLOYS', 'Type: Pipes, Sheets, Rods, Blocks & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(5, 'HEAVY STEEL', 'Type: Blocks, Pipes, Sheets, Rods & Etc\r\nUsage/Application: Industrial\r\nState of Matter : Solid\r\nForm: Kilogram'),
(6, 'Others', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(7, 'COPPER', 'Type: Pipes, Sheets, Rods, Blocks & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(8, 'ALUMINIUM', 'Type: Blocks, Pipes, Sheets, Rods & Etc\r\nUsage/Application: Industrial\r\nState of Matter : Solid\r\nForm: Kilogram'),
(9, 'LEAD', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(10, 'TIN', 'Type: Pipes, Sheets, Rods, Blocks & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(11, 'ZINC', 'Type: Blocks, Pipes, Sheets, Rods & Etc\r\nUsage/Application: Industrial\r\nState of Matter : Solid\r\nForm: Kilogram'),
(12, 'NICKEL', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(13, 'MAGNESIUM', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(14, 'BRASS', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(15, 'OTHERS', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(16, 'COBALT', 'Type: Pipes, Sheets, Rods, Blocks & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(17, 'BISMUTH', 'Type: Blocks, Pipes, Sheets, Rods & Etc\r\nUsage/Application: Industrial\r\nState of Matter : Solid\r\nForm: Kilogram'),
(18, 'CADMIUM', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(19, 'SELENIUM', 'Type: Blocks, Pipes, Sheets, Rods & Etc\r\nUsage/Application: Industrial\r\nState of Matter : Solid\r\nForm: Kilogram'),
(20, 'ANTIMONY', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(21, 'GERMANIUM', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(22, 'TUNGSTEN', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(23, 'MOLYBDENUM', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(24, 'MERCURY', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(25, 'TITANIUM', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(26, 'ARSENIC', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(27, 'INDIUM', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(28, 'VANADIUM', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(29, 'LITHIUM', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(30, 'TANTALUM', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(31, 'CHROMIUM', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(32, 'ZIRCONIUM', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(33, 'OTHERS', 'Type: Blocks, Pipes, Rods, Sheets & Etc\r\nUsage/Application: Industrial\r\nState of Matter: Solid\r\nForm: Kilogram'),
(34, 'NEW PAPER', 'Type: Rolls, Boxes, Sheets, Etc\r\nUsage/Application: Industrial / Printing, Paper Mills\r\nState of Matter: Fold able / versatile\r\nForm: Kilograms / Meters / Square Ft Etc.'),
(35, 'SCRAPS', 'Type: Books, Papers, Craft Boxes, Etc\r\nUsage/Application:Industrial / Paper Mills\r\nState of Matter : Fold able / versatile / Scrap Bundles\r\nForm: Kilograms / Nos Etc.'),
(36, 'NEW PLASTIC', 'Type: Granules, Pipes, Bends, Sheets etc\r\nUsage/Application: Industrial / Constructions / Manufacturing\r\nState of Matter: Synthetic, Semi synthetic, Malleable\r\nForm: Kilograms, Full Bags, Now Etc.'),
(37, 'SCRAPS', 'Type: Granules, Pipes, Bends, Sheets etc\r\nUsage/Application: Industrial / Secondary Manufacturing\r\nState of Matter : Synthetic, Semi synthetic, Malleable\r\nForm: Kilograms, Metric Tons, Bulk Quantity Etc.'),
(38, 'STEELS', 'Type: Sheets, Roofing, Rods, Angles & Etc\r\nUsage/Application: Industrial & Constructions\r\nState of Matter: Solid\r\nForm: Kilograms / Nos / Meters Etc.'),
(39, 'METALS', 'Type: Sheets, Roofing, Rods, Angles & Etc\r\nUsage/Application: Industrial & Constructions\r\nState of Matter : Solid\r\nForm: Kilograms / Nos / Meters Etc.'),
(40, 'PLASTICS', 'Type: Sheets, Roofing, Rods, Angles & Etc\r\nUsage/Application: Industrial & Constructions\r\nState of Matter: Solid\r\nForm: Kilograms / Nos / Meters Etc.'),
(41, 'INTERIORS & EXTERIORS', 'Type: Decorative, Pop\'s, Sheets, Designing, Electrical Etc\r\nUsage/Application: Industrial & Construction.\r\nState of Matter: Solid\r\nForm: Nos, Meters, Pieces, Kilograms Etc.'),
(42, 'ELECTRICAL and ELECTRONICS\r\n', 'Type: Switches, Wires And Coils, Electrical Etc\r\nUsage/Application: Industrial & Constructions\r\nState of Matter: Solid / Semi Solid\r\nForm: Pieces / Nos / Kilograms Etc.'),
(43, 'WOODS and TIMBERS', 'Type: Flats, Sheets, Rods Etc\r\nUsage/Application: Industrial & Constructions\r\nState of Matter : Solid/Semi Solid\r\nForm: Meters / Square Ft, Pieces / Nos.'),
(44, 'PLUMBING and CERAMICS', 'Type: Flats, Sheets, Rods Etc\r\nUsage/Application: Industrial & Constructions\r\nState of Matter: Solid/Semi Solid\r\nForm: Meters / Square Ft, Pieces / Nos.'),
(45, 'OTHERS', 'Type: Decorative, Pop\'s, Sheets, Designing, Electrical Etc\r\nUsage/Application: Industrial & Construction.\r\nState of Matter : Solid\r\nForm: Nos, Meters, Pieces, Kilograms Etc.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addlot`
--
ALTER TABLE `addlot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminprofile`
--
ALTER TABLE `adminprofile`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biddercart`
--
ALTER TABLE `biddercart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biddingdata`
--
ALTER TABLE `biddingdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyerprofile`
--
ALTER TABLE `buyerprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liveauction`
--
ALTER TABLE `liveauction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellerprofile`
--
ALTER TABLE `sellerprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addlot`
--
ALTER TABLE `addlot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `adminprofile`
--
ALTER TABLE `adminprofile`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `biddercart`
--
ALTER TABLE `biddercart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `biddingdata`
--
ALTER TABLE `biddingdata`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `buyerprofile`
--
ALTER TABLE `buyerprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `liveauction`
--
ALTER TABLE `liveauction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellerprofile`
--
ALTER TABLE `sellerprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
