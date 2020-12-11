-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 09:10 AM
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
  `sprice` varchar(225) DEFAULT NULL,
  `sstartbidprice` varchar(225) DEFAULT NULL,
  `sqty` varchar(225) DEFAULT NULL,
  `sunitmeasurment` varchar(225) DEFAULT NULL,
  `sbidbase` varchar(200) DEFAULT NULL,
  `sgst` varchar(200) DEFAULT NULL,
  `sothertax` varchar(225) DEFAULT NULL,
  `semdamount` int(225) DEFAULT NULL,
  `sliftingperiod` varchar(200) DEFAULT NULL,
  `sliftingperiod2` datetime DEFAULT NULL,
  `spcbcertificate` tinyint(1) DEFAULT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `shsncode` varchar(200) DEFAULT NULL,
  `cbidval` varchar(20) DEFAULT '0',
  `cbidtime` datetime NOT NULL DEFAULT current_timestamp(),
  `scompanyname` varchar(200) DEFAULT NULL,
  `lotno` int(11) DEFAULT 0,
  `sminincre` int(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `srefid` varchar(200) DEFAULT NULL,
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
  `sstartbidprice` varchar(225) DEFAULT NULL,
  `sfrominpectdate_time` datetime DEFAULT NULL,
  `stoinpectdate_time` datetime DEFAULT NULL,
  `slastdateemdsub` date DEFAULT NULL,
  `semddetail` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `emdpaid` tinyint(1) NOT NULL,
  `emdrequest` tinyint(1) NOT NULL DEFAULT 0,
  `emd_paid_dd` tinyint(1) NOT NULL,
  `upload_dd` text DEFAULT NULL,
  `mybid_val` varchar(200) DEFAULT NULL,
  `abidmaxvalue` varchar(50) DEFAULT NULL,
  `abidslab` varchar(50) DEFAULT NULL,
  `abidding` tinyint(1) NOT NULL DEFAULT 0,
  `sapproval` tinyint(1) NOT NULL,
  `description` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biddercart`
--

INSERT INTO `biddercart` (`id`, `bidderusername`, `auctiontype`, `auctionid`, `lotno`, `aucstartdate_time`, `aucclosedate_time`, `bidstart`, `bidprice`, `bidmaxvalue`, `bidamount`, `emdpaid`, `emdrequest`, `emd_paid_dd`, `upload_dd`, `mybid_val`, `abidmaxvalue`, `abidslab`, `abidding`, `sapproval`, `description`) VALUES
(1, 'Bharath Steels', NULL, 'AUC/Iron/Minor Metals/13/54/49', '2', '2020-12-09 11:55:00.000000', '2020-12-09 15:55:00.000000', '5145', '5654', NULL, NULL, 0, 1, 0, NULL, NULL, NULL, NULL, 0, 0, NULL),
(2, 'Bharath Steels', NULL, 'AUC/plast/Plain paper/14/24/15', '2', '2021-01-09 14:25:00.000000', '2021-01-09 14:25:00.000000', '465465', '54153', NULL, NULL, 0, 3, 0, 'a:1:{i:0;s:28:\"bidder_survey_form_(1)10.pdf\";}', NULL, NULL, NULL, 0, 0, NULL),
(3, 'Bharath Steels', NULL, 'AUC/Iron/Minor Metals/13/54/49', '1', '2020-12-09 11:55:00.000000', '2020-12-09 15:55:00.000000', '5465465', '56465555', NULL, NULL, 0, 3, 0, NULL, NULL, NULL, NULL, 0, 0, NULL),
(4, 'Bharath Steels', NULL, 'AUC/plast/Plain paper/14/24/15', '1', '2020-12-10 14:25:00.000000', '2020-12-10 16:00:00.000000', '456', '5465', NULL, NULL, 0, 0, 0, NULL, '5466', NULL, NULL, 0, 0, NULL),
(5, 'Bharath Steels', NULL, 'AUC/ddd/Non Ferrous/15/40/48', '1', '2020-12-10 15:41:00.000000', '2020-12-10 18:41:00.000000', '54654', '5465', NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, 0, 0, 'ddd');

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
  `bidamount` int(100) DEFAULT NULL,
  `sapproval` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biddingdata`
--

INSERT INTO `biddingdata` (`id`, `bidderusername`, `sauctionid`, `slotno`, `bidvalue`, `Date_time`, `bidamount`, `sapproval`) VALUES
(1, 'Bharath Steels', 'AUC/plast/Plain paper/14/24/15', '1', NULL, '2020-12-10 15:48:12.000000', 5465, NULL),
(2, 'Bharath Steels', 'AUC/plast/Plain paper/14/24/15', '1', NULL, '2020-12-10 15:48:35.000000', 5466, NULL);

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
(15, 'qwer', 'rewq', 'qwer', NULL, NULL, 'q2er', NULL, NULL, NULL, NULL, 'qwre', 'qwer', NULL, 0, 'qwer', 'INDIA', 'qwer', 'qwer', NULL, 'qwer@gmail.com', 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, 'qwer', 'qwer', NULL, 'qwer', 'qwer', 'qwer', 'qwer', 'a:1:{i:0;s:19:\"Chrysanthemum10.jpg\";}', 'a:1:{i:0;s:11:\"Desert9.jpg\";}', NULL, 0),
(17, 'xvxcvx', 'xcvxv', 'Central/State Govt/UT/Local Authority', NULL, 'xvxvxv', NULL, NULL, 1, '2020-12-03', NULL, NULL, 'xcvxcvxcvxcvx', 'xzxvxcv', 0, 'two', NULL, 'zXcvvxcv@gmail.com', '21546513203', '2154123', 'sdfdf', 'MTIz', NULL, NULL, NULL, '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(18, 'SFFSF', 'sfdsFDSF', 'Central/State Govt/UT/Local Authority', NULL, 'FSFSDF', NULL, NULL, 1, '2020-12-03', 1, NULL, 'DSFSFDS', 'SDFSFD', 51684532, 'two', NULL, 'SDFSADF@GMAIL.COM', '25968496', '484656', 'SDFSAFGSD', 'MTIz', NULL, NULL, NULL, '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(19, 'SFSFD', 'SDFSDF', 'Central/State Govt/UT/Local Authority', NULL, 'SDFSDF', NULL, NULL, 1, '2020-12-03', 1, NULL, 'SDFSDF', 'DFSDFSDF', 12395, 'two', NULL, 'SDFSDF@GMAIL.COM', '254986123', '218462', 'FSfsdfsf', 'MTIz', NULL, NULL, NULL, 'fsfsdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(20, 'sdfsdf', 'sfsfdsfd', 'Central/State Govt/UT/Local Authority', NULL, 'sdfsdf', NULL, NULL, 1, '2020-12-03', 1, NULL, 'sdfsdf', 'sdfsdf', 6589456, 'two', NULL, 'sdfsdf@gmail.com', '21654161', '1526965', 'sFSf', 'MTIz', NULL, NULL, NULL, 'sfSDF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(21, 'asdadasd', 'sdasd', 'Central/State Govt/UT/Local Authority', NULL, 'asdasd', NULL, NULL, 1, '2020-12-03', NULL, NULL, 'sdasdasd', 'asdasdads', 6, 'two', NULL, 'asdasd@gmail.com', '26546502', '251651', 'fsfsfsdfss', 'MTIz', NULL, NULL, NULL, '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(22, 'asdasd', 'sdaasd', 'Central/State Govt/UT/Local Authority', NULL, 'asdasd', NULL, NULL, 1, '2020-12-03', NULL, NULL, 'adasd', 'sdasd', 654132, 'two', NULL, 'sasd@gmail.com', '5698653', 'sdas5d48545', 'dfsdfdf', 'MTIz', NULL, NULL, NULL, 'dfsdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(23, 'sdfdf', 'sdsfsdf', 'Central/State Govt/UT/Local Authority', NULL, 'sdfsdf', NULL, NULL, 1, '2020-12-03', 1, NULL, 'sdfsdf', 'sfddsf', 8765415, 'two', NULL, 'asdff@gmai.com', '548946515', 'asdsad84874', 'saddad', 'MTIz', NULL, NULL, NULL, 'asdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(24, 'asdasd', 'asdasda', 'Central/State Govt/UT/Local Authority', NULL, 'asdasd', NULL, NULL, 1, '2020-12-03', 1, NULL, 'asdasd', 'asdasd', 549861, 'two', NULL, 'asdasd@gmail.com', '59684123', '165532', 'SDFSFSF', 'MTIz', NULL, NULL, NULL, 'FSFSDF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(25, 'fgdfg', 'vgfg', 'Central/State Govt/UT/Local Authority', NULL, 'fgdfg', NULL, NULL, 1, '2020-12-03', 1, NULL, 'dfgdfg', 'dgdg', 5462, 'two', NULL, 'dsgsdg@gmail.com', '1465464654654654', '4784818dasd', 'sdasdasd', 'MTIz', NULL, NULL, NULL, 'dasdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(26, 'sdfsdf', 'sdsadf', 'Central/State Govt/UT/Local Authority', NULL, 'sfsdf', NULL, NULL, 1, '2020-12-03', 1, NULL, 'sdfsdf', 'sdfsdf', 4594632, 'two', NULL, 'sdfsdf@gmail.com', '145521', 'asdasd15612', 'assad', 'MjM0NTIx', NULL, NULL, NULL, 'dsfdsf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(27, 'asdad', 'asdasd', 'Central/State Govt/UT/Local Authority', NULL, 'asdasd', NULL, NULL, 1, '2020-12-03', 1, NULL, 'asdds', 'asdasd', 8598526, 'two', NULL, 'asdasd@gmail.com', '48798651324', 'sfamnu45584', 'sadbjh', 'MTIz', NULL, NULL, NULL, 'sasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(28, 'asdasd', 'adads', 'Central/State Govt/UT/Local Authority', NULL, 'asdasd', NULL, NULL, 1, '2020-12-03', 1, NULL, 'asdasd', 'asdasd', 0, 'two', NULL, 'asdas@gmail.com', '265984152', '15123', 'sasd', 'MTIz', NULL, NULL, NULL, 'ad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(29, 'gdfg', 'fdfgdfg', 'Central/State Govt/UT/Local Authority', NULL, 'dfgfg', NULL, NULL, 1, '2020-12-03', 1, NULL, 'dfgdfg', 'dfgdfg', 0, 'two', NULL, 'dfgdfg@gmail.com', 'dfgdfg', 'dfgdfg', 'dfgdfg', 'ZGZnZGY=', NULL, NULL, NULL, '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(30, 'asdsad', 'asdasd', 'Central/State Govt/UT/Local Authority', NULL, 'adasd', NULL, NULL, 1, '2020-12-03', 1, NULL, 'asdasd', 'asdasd', 598456, 'two', NULL, 'asdsa@gmail.com', '065489641231', 'as59856', 'asdads', 'MTIz', NULL, NULL, NULL, 'cdsf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(31, 'asdasd', 'asdasd', 'Central/State Govt/UT/Local Authority', NULL, 'asdasd', NULL, NULL, 1, '2020-12-03', 1, NULL, 'sadasd', 'asdasd', 0, 'two', NULL, 'asdsa@gmail.com', '598412', 'sdfdf48945', 'sfdsdf', 'MTIz', NULL, NULL, NULL, 'sdd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(32, 'sdfsdf', 'sfsdfsdf', 'Central/State Govt/UT/Local Authority', NULL, 'sdfsfds', NULL, NULL, 1, '2020-12-03', 1, NULL, 'sdfsdf', 'sdfsdf', 6254652, 'two', NULL, 'sdfsf@gmail.com', '15841221', 'dff54984153', 'SDFDFDSF', 'MTIz', NULL, NULL, NULL, '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(33, 'sdasdasd', 'asdasda', 'Govt Regd Company', NULL, 'jnjhbjh', 'jhjhj', NULL, 1, '2020-12-11', 1, '54242', 'kjhkjkj', 'kjkj', 546584, 'Andra Pradesh', NULL, 'bjbjh@gmail.com', '1456897554', 'AAAAA1245A', 'OOOOOO', 'TzEyMzQ1Njc=', NULL, NULL, NULL, '12AAAAA1245', '15542', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

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
-- Table structure for table `latestnews`
--

CREATE TABLE `latestnews` (
  `id` int(10) NOT NULL,
  `tittle` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latestnews`
--

INSERT INTO `latestnews` (`id`, `tittle`, `description`, `content`) VALUES
(1, 'Recycled scrap ', 'Scrap Ferrous Paper', ' scrap recycling diverts 135 million short tons (121,000,000 long tons; 122,000,000 t) of materials away from landfills. Recycled scrap is a raw material feedstock for nearly 60% of steel made in the US'),
(2, 'Recycled scrap ', 'Scrap Ferrous Paper', ' Recycled scrap is a raw material feedstock for nearly 60% of steel made in the US, for almost 50% of the copper and copper alloys produced in the US, for more than 75% of the US paper industry\'s needs, and for 50% of US aluminum.'),
(5, 'AUC/Anita/Ferrous/16/53/37', 'Scrap Ferrous Paper', 'FERROUS CR Steel Scrap – BENGALURU, KARNATAKA on October 2020'),
(6, 'AUC/Dhanr/Minor Metals/15/41/14', 'Scrap Ferrous Paper', 'FERROUS CR Steel Scrap – BENGALURU, KARNATAKA on October 2020');

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
  `adaction` tinyint(1) NOT NULL,
  `servperc` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellerprofile`
--

INSERT INTO `sellerprofile` (`id`, `sname`, `scomapnyname`, `ssellertype`, `scontactperson`, `sdesignation`, `sagreement`, `sagreementdate`, `sterms_condi`, `scin`, `scompanytype`, `saddress`, `saddresscount`, `sstreet`, `scity`, `span`, `spin`, `sstate`, `scountry`, `slocation`, `semail`, `sphone`, `susername`, `spassword`, `soldpassword`, `snewpassword`, `sconfirmpassword`, `sgst`, `spcb`, `scapcha`, `sbankername`, `saccountnumber`, `sbranch`, `sifsccode`, `suploadprofilepic`, `ssigneddocument`, `adaction`, `servperc`) VALUES
(2, 'Anita', 'NSPCL', 'Educational/Research Institutes', 'Nirmal', 'Software Developer', 1, '2020-10-23', 1, NULL, NULL, NULL, NULL, '12', 'Bangalore', '123tuyu', 490001, 'Karnataka', NULL, 'Bangalore', 'nirmal@gmail.com', 4561222, 'nirmal', 'MTIz', NULL, NULL, NULL, 'tyu890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(3, NULL, 'Coastal Heat Treatment Solutions', 'Other', 'Ashok Poojari', NULL, NULL, NULL, NULL, '', '', 'a:1:{i:0;s:16:\"Corporate-Office\";}', 'a:1:{i:0;s:0:\"\";}', 'B-188/1, 5th main road, PIA, 2nd stage Bangalore 560058', 'Bangalore', 'AALFC1478K', 560068, 'Karnataka', NULL, 'Bangalore', 'coastalhts@gmail.com', 2147483647, NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, '29AALFC1478K', '', NULL, '', '0', '', '', 'a:1:{i:0;s:14:\"download14.jpg\";}', 'N;', 0, NULL),
(4, '', 'JV Industries', 'Other', 'Jay Verma', 'Director', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '52/5, 4th main, Ward#103, Kaveripura, Kamakshipalya,', 'Bangalore', 'AQCPV5970E', 560079, 'Karnataka', NULL, 'Bangalore', 'jayverma900@gmail.com', 2147483647, 'jayverma900@gmail.com', 'MTIzNDU2', NULL, NULL, NULL, '29AQCPV5970E', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(5, '', 'Coastal Heat Treatment Solutions', 'Other', 'Ashok Poojari', NULL, 1, '2020-10-27', 1, '', '', 'a:1:{i:0;s:16:\"Corporate-Office\";}', 'a:1:{i:0;s:0:\"\";}', 'B-188/1, 5th main road, PIA, 2nd stage', 'Bangalore', 'AALFC1478K', 560068, 'Karnataka', NULL, 'BANGALORE', 'coastalhts@gmail.com', 2147483647, NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, '29AALFC1478K', '', NULL, '', '0', '', '', 'a:1:{i:0;s:14:\"download14.jpg\";}', 'N;', 0, NULL),
(6, 'Mohan', 'Coastal Heat Treatment Solutions', 'State PSU', 'Ashok Poojari', NULL, 1, '2020-10-27', 1, '', '', 'a:1:{i:0;s:16:\"Corporate-Office\";}', 'a:1:{i:0;s:0:\"\";}', 'B-188/1, 5th main road, PIA, 2nd stage ', 'Bangalore', 'AALFC1478K', 560068, 'Karnataka', NULL, 'Peenya 2nd Stage', 'coastalhts@gmail.com', 2147483647, NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, '29AALFC1478K', '', NULL, '', '0', '', '', 'a:1:{i:0;s:14:\"download14.jpg\";}', 'N;', 0, NULL),
(7, 'Dhavan', 'BRAHANS RUBBER PRODUCTS', 'State PSU', 'SHANTHARAM SHETTY', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#78,10th A cross,balaji nagar,tigalarpalya main road', 'Bangalore', 'AAAPS8485P', 560058, 'Karnataka', NULL, 'Tigalarpalya', 'brahansbangalore@gmail.com', 2147483647, 'brahans', 'MTIzNDU2', NULL, NULL, NULL, '29AAAPS8485P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(8, 'Madhav', 'JV Industries', 'State PSU', 'Prakash Verma', 'Manager', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '52/5, 4th main, Ward#103, Kaveripura, Kamakshipalya', 'Bangalore', 'AQCPV5970E', 560079, 'Karnataka', NULL, 'Kamakshipalya', 'jayverma900@gmail.com', 2147483647, 'JVIndustries', 'MTIzNDU2', NULL, NULL, NULL, '29AQCPV5970E', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(9, 'SURYA', 'SURYA HYDRAULICS', 'State PSU', 'AS Suresh Kumar', 'Manager', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#24,11th cross,4th phase,peenya industrial area,ganapathi nagar', 'Bangalore', 'AKPPA1332E', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'suryahydraulic@gmail.com', 2147483647, 'SURYA', 'MTIzNDU2', NULL, NULL, NULL, '29AKPPA1332E', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(10, 'Ritika', 'N K SHEET METAL WORKS PVT LTD', 'State PSU', 'KUBENDRAN', 'Manager', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#3B/415/33-34, PIA, 2nd Phase, KIADB Main Road', 'Bangalore', 'AACCN9849F', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'nksmw2009@gmail.com', 2147483647, 'NKSHEET', 'MTIzNDU2', NULL, NULL, NULL, '29AACCN9849F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(11, 'Nitin', 'MM Equipments', 'State PSU', 'TS Umesh', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#B-387, 100Ft Road, Peenya 1st Stage, PIA', 'Bangalore', 'AADPU0333R', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'mm.equipments@yahoo.com', 80, 'MMEQUIPE', 'MTIzNDU2', NULL, NULL, NULL, '29AADPU0333R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(12, 'Kamal', 'Altec Industries', 'State PSU', 'R Deepak', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, 'B-181, 4th main Road, 2nd Stage, PIA', 'Bangalore', 'ACGPN3126J', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'altec181@gmail.com', 2147483647, 'Altec', 'MTIzNDU2', NULL, NULL, NULL, '29ACGPN3126J', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(13, NULL, 'Multipak Electronics India Pvt Ltd', 'State PSU', 'SB Raju', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#28P, KIADB Industrial Area, Bommasandra to Jigani Link Road, 4th phase', 'Bangalore', 'AABCM1455D', 560099, 'Karnataka', NULL, 'Bommasandra', 'sbraju@multipackelectronics.com', 2147483647, 'Multipak', 'MTIzNDU2', NULL, NULL, NULL, '29AABCM1455D', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(14, NULL, 'SAS PRESS TECH', 'State PSU', 'Ashvin Sreenivasan', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#5, 2nd Main, Ramamandir Road,Kaveripura, Kamakshipalya', 'Bangalore', 'ABBFS3543E', 560079, 'Karnataka', NULL, 'Kamakshipalya', 'ashvin@saspresstech.com', 2147483647, 'Saspress', 'MTIzNDU2', NULL, NULL, NULL, '29ABBFS3543E', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(15, 'Vivek', 'ENGINEERING STEEL FABRICATING WORKS', 'State PSU', 'SRIKANTH MR', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#61, 10th Main, 3rd Phase,Peenya Industrial Area', 'Bangalore', 'AABFE5721B', 560058, 'Karnataka', NULL, 'peenya 3rd phase', 'esfworks@gmail.com', 2147483647, 'steelfabrication', 'MTIzNDU2', NULL, NULL, NULL, '29AABFE5721B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(16, 'Meena', 'SRINU ENGINEERING INDUSTRIES', 'State PSU', 'Sridhar Babu', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '# B -120 3rd main, 2nd stage,peenya indl area', 'Bangalore', 'AAOFS1558D', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'srinu@srinuengg.in', 2147483647, 'srinu', 'MTIzNDU2', NULL, NULL, NULL, '29AAOFS1558D', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(17, ' Sameer', 'SRI RAJESHWARI INDUSTRIES', 'State PSU', 'Pradeep Kumar', 'Manager', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '30/1, 1st Main Road, 4th Cross, Robert Son Block, Ramachandrapura', 'Bangalore', 'AFGPB0958P', 560021, 'Karnataka', NULL, 'Ramachandrapura', 'pradeep_baburao@rediffmail.com', 2147483647, 'Rajeshwari', 'MTIzNDU2', NULL, NULL, NULL, '29AFGPB0958P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(18, 'Mehta', 'UNIQUE PUNCH SYSTEMS PVT LTD', 'State PSU', 'Chandrashekar K', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#485/7, 14th Cross, IV Phase,Peenya Industrial Area', 'Bangalore', 'AAACU2508A', 560058, 'Karnataka', NULL, 'peenya4th phase', 'kcs@uniquepunch.com', 2147483647, 'kcs', 'MTIzNDU2', NULL, NULL, NULL, '29AAACU2508A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(19, 'Nitin', 'GK Industrial Corporation', 'State PSU', 'P Mani', NULL, 1, '2020-10-27', 1, '', '', 'a:1:{i:0;s:16:\"Corporate-Office\";}', 'a:1:{i:0;s:0:\"\";}', '#18, Byrappa Lane, Ranasinghpet', 'Bangalore', 'AAPFG5532L', 560053, 'Karnataka', NULL, 'Ranasinghpet', 'gkinccorp@gmail.com', 2147483647, NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, '29AAPFG5532L', '', NULL, '', '0', '', '', 'a:1:{i:0;s:14:\"download13.jpg\";}', 'N;', 0, NULL),
(20, 'Mohan', 'Flex Trans Technologies', 'State PSU', 'Mahendran A', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#B-183, 4th Main, 2nd Stage, PIA', 'Bangalore', 'DLTPS5305F', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'flextrans183@yahoo.com', 2147483647, 'flex', 'MTIzNDU2', NULL, NULL, NULL, '29DLTPS5305F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(21, 'Anita', 'KLAD ON DESIGHN PVT LTD', 'State PSU', 'Suresh R', 'Director', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, '# 5&6, Survey # 38/2, Nadekerappa indl estate, andrahalli main road,near peenya 2nd stage', 'Bangalore', 'AACCK7726J', 560058, 'Karnataka', NULL, 'Peenya', 'admin@kladon.com', 2147483647, 'KLAD', 'MTIzNDU2', NULL, NULL, NULL, '29AACCK7726J', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(22, NULL, 'Startronix Modular Systems Pvt. Ltd', 'State PSU', 'Shivaraj Mattigatti', 'Manager', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, '#46/1, Off Magadi Main Road,Near Vani School,Kachovalli, Dasanapura Hobli', 'Bangalore', 'AAECS5477J', 560091, 'Karnataka', NULL, 'Bangalore', 'shivaraj@startronixindia.com', 2147483647, 'Startronix', 'MTIzNDU2', NULL, NULL, NULL, '29AAECS5477J', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(23, NULL, 'Samantha Enterprises', 'State PSU', 'PANIRAJ', 'Manager', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, 'Shop Number- 2-58/5, 1st \'A\' Main, Magadi Main Rd, Vrishabhavathi Nagar, Kamakshipalya, Bengaluru', 'Bangalore', 'AADFMO342C', 560079, 'Karnataka', NULL, 'Bangalore', 'samanthaent@gmail.com', 2147483647, 'Samantha', 'MTIzNDU2', NULL, NULL, NULL, '29AADFMO342C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(24, NULL, 'Smile Electronics Ltd', 'State PSU', 'MH Nadeem', 'Manager', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, '29AACCS8765R1Z7', 'Bangalore', 'AACCS8765R', 560049, 'Karnataka', NULL, 'Bangalore', 'nadeem@smileelectronics.com', 2147483647, 'Smile', 'MTIzNDU2', NULL, NULL, NULL, '29AACCS8765R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(25, NULL, 'Sri Sairam Engineering Works', 'State PSU', 'Jagadeesh', 'Manager', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, '#103, 1st Main Road, Near Ambhamaheshwari Temple, Kamakshipalya', 'Bangalore', 'AZSPJ3145Q', 560079, 'Karnataka', NULL, 'Bangalore', 'sairamenggwork@gmail.com', 2147483647, 'Srisairam', 'MTIzNDU2', NULL, NULL, NULL, '29AZSPJ3145Q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(26, 'Seema', 'ANAGHA ENGINEERING SYSTEMS', 'Central/State Govt/UT/Local Authority', 'Mallikarjun B', 'Director', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '#22, 17th Cross,Doddanna Indl Estate', 'Bangalore', 'ADDPN1843Q', 560091, 'Karnataka', NULL, 'Peenya 2nd Stage', 'anagha_aes@rediffmail.com', 2147483647, 'ANAGHA', 'MTIzNDU2', NULL, NULL, NULL, '29ADDPN1843Q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(27, 'Sohan', 'ANAGHA ENGINEERING SYSTEMS', 'State PSU', 'Mallikarjun B', 'Director', 1, '2020-10-29', 1, NULL, NULL, NULL, NULL, '#22, 17th Cross,Doddanna Indl Estate', 'Bangalore', 'ADDPN1843Q', 560091, 'Karnataka', NULL, 'Peenya 2nd Stage', 'anagha_aes@rediffmail.com', 2147483647, 'anaghaengineering', 'MTIzNDU2', NULL, NULL, NULL, '29ADDPN1843Q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(28, 'Mitra', 'Mitra Metal Finishers', 'State PSU', '9880404666', NULL, 1, '2020-10-29', 1, '', '', 'a:1:{i:0;s:16:\"Corporate-Office\";}', 'a:1:{i:0;s:0:\"\";}', 'No.24, 100 Feet Road Jalahalli Cross', 'Bangalore', 'AOOPS8450G', 560057, 'Karnataka', NULL, ' T Dasarahalli', 'reiyanshaiju@gmail.com', 2147483647, NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, '29AOOPS8450G', '', NULL, '', '0', '', '', 'a:1:{i:0;s:14:\"download18.jpg\";}', 'a:1:{i:0;s:29:\"Mail_validation_-_Copy17.xlsx\";}', 1, NULL),
(29, NULL, 'SeekVise Business Solutions Pvt Ltd', 'State PSU', 'Chethan Dev', 'Director', 1, '2020-10-30', 1, NULL, NULL, NULL, NULL, 'No 5560, 3rd Main', 'Bangalore', 'Apopd8852l', 560060, 'Karnataka', NULL, 'Bangalore', 'seekvise@gmail.com', 2147483647, 'seekvise', 'QmFuZ2Fsb3JlQA==', NULL, NULL, NULL, 'AXTNSSAIVNIE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(31, 'ABC', 'ABC Pvt Ltd', 'State PSU', 'ABC', NULL, 1, '2020-11-02', 1, '', '', 'a:1:{i:0;s:16:\"Corporate-Office\";}', 'a:1:{i:0;s:0:\"\";}', '#2222, 117th Cross,Doddanna Indl Estate', 'Bangalore', 'ABCDE1234F', 560060, 'Karnataka', NULL, 'Kengeri', 'abc@abc.com', 2147483647, NULL, 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, '29ABCDE1234F', '', NULL, '', '0', '', '', 'a:1:{i:0;s:16:\"Lighthouse16.jpg\";}', 'a:1:{i:0;s:29:\"Mail_validation_-_Copy16.xlsx\";}', 0, NULL),
(36, 'Parse', 'Miltton', 'Central/State Govt/UT/Local Authority', NULL, 'Software developer', 1, '2020-12-01', 1, NULL, NULL, 'Shanti Nagar Metro Station ', NULL, NULL, 'Bangalore', 'dfer565465', 6561965, 'Karnataka', NULL, 'Shanti Nagar', 'Nishi@gmail.com', 2147483647, 'Nishi', 'TmlzaGkxMQ==', NULL, NULL, NULL, '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(37, 'Mohan', 'MVC pvt Ltd', 'State PSU', NULL, 'Manager', 1, '2020-12-01', 1, NULL, NULL, 'Trinity circle', NULL, NULL, 'Bangalore', 'sdfsf655461', 6562320, 'Karnataka', NULL, 'MG road', 'Mohan@gmail.com', 2147483647, 'Mohan', 'TW9oYW4xMg==', NULL, NULL, NULL, '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(54, 'Akash', 'Akash hospital', 'Central PSU', NULL, 'Programmer', 1, '2020-12-01', 1, NULL, NULL, 'a:1:{i:0;s:11:\"Headquarter\";}', 'a:1:{i:0;s:13:\"vishal colony\";}', NULL, 'bangalore', '12345', 7484122, 'Mizoram', NULL, 'vishal colony', 'akash@gmail.com', 677878998, 'akash', 'YWthc2gxMg==', NULL, NULL, NULL, '778', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(55, 'Mansi', 'BBMP', 'Ltd, Pvt Ltd, LLP, Corp', 'Mohit', 'knkjn', NULL, NULL, NULL, '65646132', NULL, 'a:1:{i:0;s:18:\"Manufacturing Unit\";}', 'a:1:{i:0;s:9:\"sdfegerge\";}', NULL, 'dffrf', 'AAAAA1235A', 468465, 'Chhattishgarh', NULL, 'bangalore', 'adsd@gmail.com', 2147483647, 'Mohit', 'TTEyMzQ1Njc=', NULL, NULL, NULL, '12AAAAA1235A', '656656', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(56, 'asdasda', 'asad', 'Partnership, Proprietorship, OPC', 'asdasd', 'asdasd', NULL, NULL, NULL, '54654645', NULL, 'a:1:{i:0;s:16:\"Corporate Office\";}', 'a:1:{i:0;s:9:\"dasasfasf\";}', NULL, 'dasdasd', 'AAAAA1245A', 123654, 'Maharashtra', NULL, 'sdadasd', 'sadasd@gmail.co', 2147483647, 'njbkj', 'QTEyMzQ1Njc=', NULL, NULL, NULL, '12AAAAA1245A', '565464654', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(57, 'nnnnnnnn', 'nnnnnn', 'Govt Regd Company', 'nnnnnnnn', 'nnnnnnnnnnnn', 1, '2020-12-10', 1, '5646545', NULL, 'a:1:{i:0;s:18:\"Manufacturing Unit\";}', 'a:1:{i:0;s:10:\"nnnnnnnnnn\";}', NULL, 'nnnnnnnnn', 'NNNNN1234A', 784596, 'Karnataka', NULL, 'nnnnnnn', 'nnnnn@gmail.com', 2147483647, 'nnnnn', 'TjEyMzQ1Njc=', NULL, NULL, NULL, '15AAAAA1255A', '5465456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(58, 'mmmmmmmmmm', 'mmmmmm', 'Govt Regd Company', 'mmmmmmmm', 'mmmmm', NULL, NULL, NULL, '45654646', NULL, 'a:1:{i:0;s:18:\"Manufacturing Unit\";}', 'a:1:{i:0;s:8:\"sdasdads\";}', NULL, 'mmmmmmmmmm', 'MMMMM1234M', 0, 'Karnataka', NULL, 'mmmmmm', 'mmm@gmail.com', 2147483647, 'mmmmm', 'TTEyMzQ1Njc=', NULL, NULL, NULL, '45MMMMM1254M', '654654', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(59, 'sdfsdfsdf', 'sdfsdfsd', 'Ltd, Pvt Ltd, LLP, Corp', 'sdfsdfsdf', 'sdfsdfsdf', NULL, NULL, NULL, '5468465135', NULL, 'a:1:{i:0;s:16:\"Corporate Office\";}', 'a:1:{i:0;s:8:\"fsdfsdff\";}', NULL, 'sdfsdfsdf', 'AAAAA2323A', 123656, 'Karnataka', NULL, 'sdfsdfsdf', 'sdfsdf@gmail.com', 2147483647, 'ggggggg', 'RzEyMzQ1Njc=', NULL, NULL, NULL, '15AAAAA1252A', '6546546', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(60, 'sdfsdfsdf', 'sfsdfsdf', 'Govt Regd Company', 'sfsdfsf', 'sdfsdfsdf', NULL, NULL, NULL, '456465435', NULL, 'a:1:{i:0;s:18:\"Manufacturing Unit\";}', 'a:1:{i:0;s:8:\"sadsdsad\";}', NULL, 'sdsdsadd', 'AAAAA1245A', 4562388, 'Karnataka', NULL, 'sadasdasdasdasd', 'asdas@gmail.com', 2147483647, 'HHHHHHHH', 'SDEyMzQ1Njc=', NULL, NULL, NULL, '56AAAAA1245A', '3543543', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(61, 'dsfvdsfsdf', 'sdfsdfsdf', 'Govt Regd Company', 'dfsdfsdf', 'sfsdfsfd', NULL, NULL, NULL, '65465415', NULL, 'a:1:{i:0;s:16:\"Corporate Office\";}', 'a:1:{i:0;s:7:\"asdassd\";}', NULL, 'sdfsfsd', 'AAAAA1245A', 965656, 'Karnataka', NULL, 'sfsdfsdf', 'sdfs@gmail.com', 2147483647, 'JJJJJJJJJJJJ', 'SjEyMzQ1Njc=', NULL, NULL, NULL, '85AAAAA1454A', '54454', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(62, 'ASSAFSDFF', 'ssDFSDFSD', 'Govt Regd Company', 'SDFSDFSDF', 'ASSFFF', 1, '2020-12-11', 1, '4845445145', NULL, 'a:1:{i:0;s:16:\"Corporate Office\";}', 'a:1:{i:0;s:7:\"sdasasd\";}', NULL, 'sadasdafsda', 'AAAAA1245A', 1245684, 'Karnataka', NULL, 'asaffasdf', 'sasdf@gmail.com', 2147483647, 'LLLLLLLLL', 'TDEyMzQ1Njc=', NULL, NULL, NULL, '12AAAAA1245A', '5456454', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(63, 'dfdsfsdfsfd', 'asdasdasd', 'Partnership, Proprietorship, OPC', 'sdfsdfsdf', 'sdfsdfsdf', 1, '2020-12-11', 1, '56464646', NULL, 'a:1:{i:0;s:18:\"Manufacturing Unit\";}', 'a:1:{i:0;s:12:\"asdsadasdasd\";}', NULL, 'asdasdasdasd', 'AAAAA2211A', 124568, 'Karnataka', NULL, 'sdfsdfsdf', 'sads@gmail.com', 2147483647, 'PPPPPPPPPP', 'UDEyMzQ1Njc=', NULL, NULL, NULL, '12AAAAA1212A', '468468464', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(64, 'sdfsdfsdf', 'assfsdfsdf', 'Govt Regd Company', 'dsfsdgdfg', 'sdfdfgdfg', NULL, NULL, NULL, '85484654', NULL, 'a:1:{i:0;s:16:\"Corporate Office\";}', 'a:1:{i:0;s:8:\"afsdfsdg\";}', NULL, 'sdfsdfsd', 'AAAAA1212A', 144561, 'Karnataka', NULL, 'sdfsfg', 'Adfsdf@gmail.com', 2147483647, 'KKKKKKKKK', 'SzEyMzQ1Njc=', NULL, NULL, NULL, '58AAAAA1245A', '5464654', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(65, 'qwsfsg', 'fsdfsfsdf', 'Govt Regd Company', 'efwfgwef', 'ffsfsf', 1, '2020-12-11', 1, '5468468465', NULL, 'a:1:{i:0;s:16:\"Corporate Office\";}', 'a:1:{i:0;s:12:\"sdfsdfsdfsdf\";}', NULL, 'sdsfsdff', 'AAAAA1245A', 1245635, 'Karnataka', NULL, 'sdfsdgdfg', 'sfdsdf@gmail.com', 2147483647, 'RRRRRRRRRRR', 'UjEyMzQ1Njc=', NULL, NULL, NULL, '78AAAAA2525A', '4654654', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(66, 'dsfsdfsfd', 'sfsdfsdfs', 'Govt Regd Company', 'sfsdfgd', 'sfsdfgdsg', 1, '2020-12-11', 1, '56584685465', NULL, 'a:1:{i:0;s:16:\"Corporate Office\";}', 'a:1:{i:0;s:10:\"sfdfsdfsdf\";}', NULL, 'sfsdfsdf', 'AAAAA5645A', 124563, 'Karnataka', NULL, 'sfsdfsdgdfsg', 'svdfgdf@gmail.com', 2147483647, 'TTTTTTTT', 'VDEyMzQ1Njc=', NULL, NULL, NULL, '78AAAAA1111A', '468465465', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(67, 'SDFSDFSDF', 'SSDFSDFSDF', 'Govt Regd Company', 'SDFSDFSDF', 'SFSDFSDF', 1, '2020-12-11', 1, '5464654654', NULL, 'a:1:{i:0;s:16:\"Corporate Office\";}', 'a:1:{i:0;s:8:\"SDFSFSDF\";}', NULL, 'DSFSDFSDF', 'AAAAA1245A', 544565, 'Karnataka', NULL, 'SADSfsdf', 'sdfsdf@gmail.com', 1234567890, 'WWWWWWWWWWWW', 'VzEyMzQ1Njc=', NULL, NULL, NULL, '45AAAAA1245A', '465465465', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL);

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
-- Indexes for table `latestnews`
--
ALTER TABLE `latestnews`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminprofile`
--
ALTER TABLE `adminprofile`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `biddercart`
--
ALTER TABLE `biddercart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `biddingdata`
--
ALTER TABLE `biddingdata`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buyerprofile`
--
ALTER TABLE `buyerprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `latestnews`
--
ALTER TABLE `latestnews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `liveauction`
--
ALTER TABLE `liveauction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellerprofile`
--
ALTER TABLE `sellerprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
