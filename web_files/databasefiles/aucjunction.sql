-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 09:44 AM
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
  `sprice` int(225) DEFAULT NULL,
  `sstartbidprice` int(225) DEFAULT NULL,
  `sqty` int(225) DEFAULT NULL,
  `sunitmeasurment` int(225) DEFAULT NULL,
  `sbidbase` int(200) DEFAULT NULL,
  `sgst` int(200) DEFAULT NULL,
  `sothertax` varchar(225) DEFAULT NULL,
  `semdamount` int(225) DEFAULT NULL,
  `sliftingperiod` varchar(200) DEFAULT NULL,
  `sliftingperiod2` datetime DEFAULT NULL,
  `spcbcertificate` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addlot`
--

INSERT INTO `addlot` (`id`, `sauctionid`, `slotno`, `slotname`, `scategory`, `sdescription`, `slotlocation`, `sfrominpectdate_time`, `stoinpectdate_time`, `semddetail`, `slastdateemdsub`, `sprice`, `sstartbidprice`, `sqty`, `sunitmeasurment`, `sbidbase`, `sgst`, `sothertax`, `semdamount`, `sliftingperiod`, `sliftingperiod2`, `spcbcertificate`) VALUES
(1, 'AUC/xxx/Ferrous/15/43/33', 'M/xxx/Ferrous/15/43/55', 'xxx', 'Ferrous', 'xxx', 'five', '2020-10-30 15:45:00', '2020-10-30 15:46:00', 'xxxx', '2020-10-04', 0, 0, 0, 0, 0, 0, 'xxxx', 0, 'xxx', '2020-10-30 15:50:00', 0),
(2, '<div style=', '', 'sss', '\r\n<div style=', 'ddd', 'three', '2020-11-02 17:19:00', '2020-11-02 17:18:00', 'ddd', '2020-11-12', 0, 0, 0, 0, 0, 0, 'ddd', 0, 'ddd', '2020-11-02 17:20:00', 1),
(3, 'AUC/ddd/Granules/17/15/32', '', 'ddd', 'Granules', 'ddd', 'three', '2020-11-02 17:21:00', '2020-11-02 17:20:00', 'sss', '2020-11-07', 0, 0, 0, 0, 0, 0, 'ss', 0, 'ss', '2020-11-02 17:21:00', 0),
(4, 'AUC/seema/Minor Metals/14/45/43', 'A-14-45', 'Alluminium', 'Minor Metals', 'metel', 'three', '2020-11-04 14:50:00', '2020-11-04 14:50:00', 'Emd Details', '2020-11-01', 20000, 1000, 20, 0, 0, 20, 'yes', 2000, '2days', '2020-11-04 14:53:00', 1),
(5, 'AUC/sss/Minor Metals/17/28/6', 'A-17-14', 'sss', 'Minor Metals', 'sss', 'one', '2020-11-04 17:29:00', '2020-11-04 17:34:00', 'ssss', '2020-11-01', 0, 0, 0, 0, 0, 0, 'sss', 0, '2days', '2020-11-04 17:34:00', 1),
(6, 'AUC/sss/Minor Metals/17/29/52', 'A-17-6', 'sss', 'Minor Metals', 'sss', 'four', '2020-11-04 17:32:00', '2020-11-04 17:32:00', 'sss', '2020-12-06', 0, 0, 0, 0, 0, 0, 'sss', 0, '2', '2020-11-04 17:36:00', 0),
(7, 'AUC/Find/Ferrous/19/50/9', 'A-19-26', 'Find', 'Ferrous', 'Find', 'one', '2020-11-04 19:55:00', '2020-11-04 19:51:00', 'find', '2020-11-01', 1000000, 10000, 20000, 0, 0, 20000, '20000', 20000, '2days', '2020-11-04 19:56:00', 0),
(8, 'AUC/price/Non Ferrous/20/42/45', 'A-20-7', 'pride', 'Non Ferrous', 'mind', 'four', '2020-11-04 20:50:00', '2020-11-04 20:49:00', 'mind', '2020-11-29', 8522, 65656, 41343521, 0, 0, 20, '35453', 56413, '2days', '2020-11-04 20:50:00', 1),
(9, 'AUC/price/Non Ferrous/20/42/45', 'A-20-12', 'kit', 'Non Ferrous', 'hight', 'four', '2020-11-04 20:51:00', '2020-11-04 20:47:00', 'right', '2020-11-29', 545645, 545341, 135454, 0, 0, 5135453, '153143', 1351, '2days', '2020-11-04 20:51:00', 0);

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
  `bemdstatus` int(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`id`, `sname`, `scompanyname`, `scompanyid`, `scategory`, `sauctionid`, `svinspection`, `sonlineaucdate_time`, `sterms_condiaccept`, `sterms_condiupload`, `sterms_text`, `sterms_conditype`, `adminapprovalstatus`, `sapproval`, `sdownload`, `saction`, `sauctionstatus`, `saucstartdate_time`, `saucclosedate_time`, `adstatus`, `adaction`, `reauction`, `stotalauction`, `bwishlist`, `bemdstatus`) VALUES
(1, 'asdad', NULL, NULL, 'Minor Metals', 'AUC/asdad/Minor Metals/11/10/28', 'asdqda', '2020-11-04 19:53:00', 1, 'N;', '', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-19 20:13:59.000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'dsdasd', NULL, NULL, 'Select', 'AUC/dsdas/Non Ferrous/11/13/21', 'zxzZX', '2020-11-05 10:21:00', 1, 'N;', '', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-03 20:14:06.000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'dddd', NULL, NULL, 'Minor Metals', 'AUC/dddd/Minor Metals/11/14/40', 'dddd', '2020-10-30 11:20:00', 1, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'ASASA', NULL, NULL, 'Non Ferrous', 'AUC/ASASA/Non Ferrous/11/15/31', 'ASas', '2020-10-30 15:15:00', 1, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'sadasd', NULL, NULL, 'Minor Metals', 'AUC/sad/Minor Metals/11/16/50', 'asdasd', '2020-10-30 11:21:00', 1, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'erte', NULL, NULL, 'Minor Metals', 'AUC/erte/Minor Metals/11/17/35', 'ertert', '2020-10-30 11:23:00', 1, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'see', NULL, NULL, 'Minor Metals', 'AUC/see/Minor Metals/11/48/10', 'eee', '2020-10-30 11:53:00', 1, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'sasda', NULL, NULL, 'Minor Metals', 'AUC/sasda/Minor Metals/11/49/7', 'asdasd', '2020-10-30 11:54:00', 1, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'seee', NULL, NULL, 'Non Ferrous', 'AUC/seee/Minor Metals/11/53/47', 'saas', '2020-11-05 10:19:00', 1, 'a:2:{i:0;s:12:\"aug_(4)1.pdf\";i:1;s:13:\"aug_(5)23.pdf\";}', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'DDD', NULL, NULL, 'Non Ferrous', 'AUC/DDD/Non Ferrous/12/52/26', 'DDD', '2020-10-30 12:58:00', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'sss', NULL, NULL, 'Select', 'AUC/sss/Non Ferrous/13/12/11', 'ddd', '2020-11-04 17:36:00', 0, 'N;', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'www', NULL, NULL, 'Non Ferrous', 'AUC/www/Non Ferrous/13/14/15', 'www', '2020-10-30 13:20:00', 1, 'a:1:{i:0;s:14:\"Aluminium2.jpg\";}', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'eee', NULL, NULL, 'Non Ferrous', 'AUC/eee/Non Ferrous/13/35/44', 'eee', '2020-10-30 13:40:00', 1, 'a:1:{i:0;s:14:\"Aluminium3.jpg\";}', 'dddd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'xxx', NULL, NULL, 'Minor Metals', 'AUC/xxx/Minor Metals/13/40/0', 'xxxx', '2020-10-30 13:45:00', 1, NULL, 'xxxx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'ccc', NULL, NULL, 'All Construction Materials', 'AUC/ccc/All Construction Materials/13/46/44', 'ccc', '2020-10-30 13:51:00', 1, NULL, 'cccc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'zzzz', NULL, NULL, 'Minor Metals', 'AUC/zzzz/Minor Metals/13/49/16', 'zzzzzzzz', '2020-10-30 13:56:00', 1, NULL, 'sssssss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'sss', NULL, NULL, 'Select', 'AUC/sss/Non Ferrous/13/12/11', 'ddd', '2020-11-04 17:36:00', 0, 'N;', 'gggg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'qqq', NULL, NULL, 'Non Ferrous', 'AUC/qqq/Non Ferrous/13/56/20', 'qqqq', '2020-10-30 13:02:00', 1, 'a:1:{i:0;s:14:\"Aluminium4.jpg\";}', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'aaa', NULL, NULL, 'Non Ferrous', 'AUC/aaa/Non Ferrous/15/10/46', 'aaa', '2020-10-30 15:15:00', 1, 'a:1:{i:0;s:13:\"aug_(5)24.pdf\";}', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'aaa', NULL, NULL, 'Non Ferrous', '', 'aaa', '2020-10-30 15:15:00', 1, 'a:1:{i:0;s:13:\"aug_(5)25.pdf\";}', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'ccccc', NULL, NULL, 'Non Ferrous', 'AUC/ccccc/Non Ferrous/15/24/52', 'cccc', '2020-10-30 15:31:00', 1, NULL, 'cccc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'ccc', NULL, NULL, 'Non Ferrous', 'AUC/ccc/Non Ferrous/15/25/23', 'ccc', '2020-10-30 15:30:00', 1, 'a:1:{i:0;s:13:\"aug_(4)14.pdf\";}', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'xx', NULL, NULL, 'Non Ferrous', 'AUC/xx/Non Ferrous/15/42/9', 'xxx', '2020-10-30 15:47:00', 1, NULL, 'xxxx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'xxx', NULL, NULL, 'Ferrous', 'AUC/xxx/Ferrous/15/43/33', 'xxx', '2020-10-30 15:48:00', 1, NULL, 'xxxx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'sss', NULL, NULL, 'Select', 'AUC/sss/Non Ferrous/13/12/11', 'ddd', '2020-11-04 17:36:00', 0, 'N;', 'sss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'ddd', NULL, NULL, 'Granules', 'AUC/ddd/Granules/17/15/32', 'dd', '2020-11-02 17:19:00', 1, NULL, 'ddd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'ss', NULL, NULL, 'Plain paper', 'AUC/ss/Plain paper/17/28/0', 'sss', '2020-11-02 17:31:00', 1, NULL, 'ssss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'sss', NULL, NULL, 'Select', 'AUC/sss/Non Ferrous/13/12/11', 'ddd', '2020-11-04 17:36:00', 0, 'N;', 'dddd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'www', NULL, NULL, 'Ferrous', 'AUC/www/Ferrous/17/29/22', 'www', '2020-11-02 17:33:00', 1, NULL, 'www', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'sss', NULL, NULL, 'Select', 'AUC/sss/Non Ferrous/13/12/11', 'ddd', '2020-11-04 17:36:00', 0, 'N;', 'sss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'gggg', NULL, NULL, 'Minor Metals', 'AUC/gggg/Minor Metals/17/32/9', 'ggg', '2020-11-02 17:37:00', 1, NULL, 'ggg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'sss', NULL, NULL, 'Select', 'AUC/sss/Non Ferrous/13/12/11', 'ddd', '2020-11-04 17:36:00', 0, 'N;', 'sss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'sss', NULL, NULL, 'Select', 'AUC/sss/Non Ferrous/13/12/11', 'ddd', '2020-11-04 17:36:00', 0, 'N;', 'sss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, '9ol.', NULL, NULL, 'Minor Metals', 'AUC/9ol./Minor Metals/17/48/31', '9ol.', '2020-11-03 22:48:00', 1, NULL, '9ol.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'csd', NULL, NULL, 'Non Ferrous', 'AUC/csd/Non Ferrous/20/49/53', 'csd', '2020-11-03 20:49:00', 1, NULL, 'cwdscdec', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'XSS', NULL, NULL, 'Non Ferrous', 'AUC/XSS/Non Ferrous/20/58/36', 'DSDA', '2020-11-03 20:58:00', 1, NULL, 'DAD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'sss', NULL, NULL, 'Select', 'AUC/sss/Non Ferrous/13/12/11', 'ddd', '2020-11-04 17:36:00', 0, 'N;', 'DAD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'seema', 'seema.pvt.ltd.', NULL, 'Non Ferrous', 'AUC/seema/Minor Metals/14/45/43', 'fefwerwerw', '2020-11-04 14:53:00', 1, 'a:2:{i:0;s:9:\"iron4.jpg\";i:1;s:13:\"Aluminium.jpg\";}', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'sss', NULL, NULL, 'Select', 'AUC/sss/Non Ferrous/13/12/11', 'ddd', '2020-11-04 17:36:00', 0, 'N;', 'sss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'sss', NULL, NULL, 'Select', 'AUC/sss/Non Ferrous/13/12/11', 'ddd', '2020-11-04 17:36:00', 0, 'N;', 'sss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'seem', NULL, NULL, 'Minor Metals', 'AUC/seem/Minor Metals/19/45/18', 'see', '2020-11-04 19:51:00', 1, NULL, 'see', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'Find', NULL, NULL, 'Ferrous', 'AUC/Find/Ferrous/19/51/39', 'es', '2020-11-04 19:57:00', 1, 'N;', 'Find', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'price', NULL, NULL, 'Non Ferrous', 'AUC/price/Non Ferrous/20/42/45', 'pray', '2020-11-04 01:42:00', 1, 'a:1:{i:0;s:11:\"aug_(2).pdf\";}', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `biddercart`
--

CREATE TABLE `biddercart` (
  `id` int(11) NOT NULL,
  `bidderid` int(20) DEFAULT NULL,
  `auctiontype` tinyint(1) DEFAULT NULL,
  `auctionid` varchar(200) DEFAULT NULL,
  `lotno` varchar(200) DEFAULT NULL,
  `aucstartdate_time` datetime(6) DEFAULT NULL,
  `aucclosedate_time` datetime(6) DEFAULT NULL,
  `bidmaxvalue` int(225) DEFAULT NULL,
  `bidamount` int(225) DEFAULT NULL,
  `emdpaid` int(220) DEFAULT NULL,
  `emdrequest` varchar(225) DEFAULT NULL,
  `bided` tinyint(1) DEFAULT NULL,
  `emd_paiddd` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `biddingdata`
--

CREATE TABLE `biddingdata` (
  `id` int(11) NOT NULL,
  `bidderid` int(20) DEFAULT NULL,
  `sauctionid` varchar(200) DEFAULT NULL,
  `slotno` varchar(200) DEFAULT NULL,
  `bidvalue` int(225) DEFAULT NULL,
  `Date_time` datetime(6) DEFAULT NULL,
  `bidamount` int(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `bphone` int(11) DEFAULT NULL,
  `bpan` varchar(11) DEFAULT NULL,
  `busername` varchar(50) DEFAULT NULL,
  `bpassword` varchar(200) DEFAULT NULL,
  `boldpassword` varchar(11) DEFAULT NULL,
  `bnewpassword` varchar(11) DEFAULT NULL,
  `bconfirmpassword` int(11) DEFAULT NULL,
  `bgst` varchar(11) DEFAULT NULL,
  `bpcb` varchar(225) DEFAULT NULL,
  `bcapcha` varchar(50) DEFAULT NULL,
  `bbankname` varchar(50) DEFAULT NULL,
  `baccountnumber` int(11) DEFAULT NULL,
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
(1, NULL, 'abc', 'two', 'two', 'bangalore', 'bcd', NULL, 1, '2020-10-23', 1, NULL, 'yyyyyyyyyyyy', 'Hyd', 528589, 'twelve', NULL, 'CDSA@gmail.com', 2147483647, '4451', 'Seema', 'MTIzNA==', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, NULL, 'rgrfgf', 'three', 'two', '43t5434', 'rtrt', NULL, 1, '2020-10-23', 1, NULL, 'rtretrt', 'tret', 0, 'thirteen', NULL, 'ret@gmail.com', 654632, 'fbg1654', 'gbhfgbef', 'MTIzNA==', NULL, NULL, NULL, 'fgrfg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, NULL, 'TNB Enterprises', 'two', 'two', 'Bangalore', 'Tabrez Pasha', NULL, 1, '2020-10-28', 1, NULL, '#1&2, Choodenapura Village, Kengeri hobli', 'Bangalore', 560069, 'twelve', NULL, 'ttnbenterprises@gmail.com', 2147483647, 'BCCPT9788F', 'TNB', 'MTIzNDU2', NULL, NULL, NULL, '29BCCPT9788', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, NULL, 'E Friendly Waste Recyclers', 'two', 'two', 'Bangalore', 'Khadeer Pasha', NULL, 1, '2020-10-28', 1, NULL, '#17, 1st Floor, 1st Cross, Azeez Sait Indl. Town, Nayandanahalli', 'Bangalore', 560039, 'twelve', NULL, 'efriendly.ewaste@gmail.com', 2147483647, 'AAEFE8458Q', 'Efriendly', 'MTIzNDU2', NULL, NULL, NULL, '29AAEFE8458', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, NULL, 'Turbo Motor', 'two', 'two', 'Bangalore', 'Fairoz Khan', NULL, 1, '2020-10-28', NULL, NULL, '#12/2, 5th Cross, Nehru Road, New Guddadahalli, Mysore Road', 'Bangalore', 560026, 'twelve', NULL, 'turbomotors1@gmail.com', 2147483647, 'AKJPK4012B', 'Turbo', 'MTIzNDU2', NULL, NULL, NULL, '29AKJPK4012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, NULL, 'Turbo Motor', 'two', 'two', 'Bangalore', 'Fairoz Khan', NULL, NULL, NULL, NULL, NULL, '#12/2, 5th Cross, Nehru Road, New Guddadahalli, Mysore Road', 'Bangalore', 560026, 'twelve', NULL, 'turbomotors1@gmail.com', 2147483647, 'AKJPK4012B', 'Turbo Motor', 'MTIzNDU2', NULL, NULL, NULL, '29AKJPK4012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, NULL, 'Bharath Steels', 'two', 'two', 'Bangalore', 'Shabbir Ulla Khan', NULL, NULL, NULL, NULL, NULL, '#42/8, 2nd Cross, Fireworks Colony, JC Road', 'Bangalore', 560002, 'twelve', NULL, 'bharathsteels3577@gmail.com', 2147483647, 'ARQPK7074B', 'Bharath Steels', 'MTIzNDU2', NULL, NULL, NULL, '29ARQPK7074', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, NULL, 'Sidra Steels', 'two', 'two', 'Bangalore', 'Ziyaulla', NULL, NULL, NULL, NULL, NULL, '#12, Kambagundi Layout, Behind SJP Police Station', 'Bangalore', 560002, 'twelve', NULL, 'mziya25@yahoo.co.in', 2147483647, 'ABBPZ6919R', 'Sidra Steels', 'MTIzNDU2', NULL, NULL, NULL, '29ABBPZ6919', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(9, NULL, 'Subhan & Sons', 'two', 'two', 'Bangalore', 'Saleem Sheriff', NULL, 1, '2020-10-28', 1, NULL, '#13/6, Singasandra, Hosur Main Road', 'Bangalore', 560068, 'twelve', NULL, 'salimshariff174@gmail.com', 2147483647, 'HERPS3970D', 'Subhan', 'MTIzNDU2', NULL, NULL, NULL, '29HERPS3970', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(10, NULL, 'AS Trading Company', 'two', 'two', 'Bangalore', 'Mohammed Muyeed', NULL, 1, '2020-10-28', 1, NULL, 'Opp Singayanapalya Bus Stop, Whitefield Road, Mahadevapura Post', 'Bangalore', 560048, 'twelve', NULL, 'astdcompany@gmail.com', 2147483647, 'AFOPA4927P', 'Astrading', 'MTIzNDU2', NULL, NULL, NULL, '29AFOPA4927', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, NULL, 'ABC Pvt Ltd', 'one', 'one', 'Peenya', 'ABC', NULL, 1, '2020-11-02', 1, NULL, '#2222, 117th Cross, Peenya Industrial Area', 'Bangalore', 560058, 'twelve', NULL, 'abc@abc.com', 2147483647, 'ABCDE1234F', 'abc', 'CQphYmNAMTIz', NULL, NULL, NULL, '29ABCDE1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(12, NULL, 'bhel', 'four', 'two', 'bangalore', 'megha', NULL, 1, '2020-11-03', 1, NULL, 'kormangala', 'bangalore', 560047, 'twelve', NULL, 'meghasangmesh2@gmail.com', 2147483647, '12435456bnj', 'nishanth', '??;??', NULL, NULL, NULL, '1234rgthy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(13, NULL, 'qwer', 'three', 'two', 'qwer', 'qwer', NULL, 1, '2020-11-03', 1, NULL, 'qwer', 'qwer', 0, 'two', NULL, 'qwer@q.com', 0, 'qwer', 'qwer', 'cXdlcg==', NULL, NULL, NULL, 'qwer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

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
  `saccountnumber` int(11) DEFAULT NULL,
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
(1, NULL, 'hbbcnjbcn', '0', 'njbhb', 'rtrt', 1, '2020-10-23', 1, NULL, NULL, NULL, NULL, 'tdtt', 'thfg', '0', 6445, 'Karnataka', NULL, 'hgghgh', 'gfhgh@gmail.com', 5664613, 'thknjkh', 'MTIzNA==', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'NSPCL', 'Educational/Research Institutes', 'Nirmal', 'Software Developer', 1, '2020-10-23', 1, NULL, NULL, NULL, NULL, '12', 'Bangalore', '123tuyu', 490001, 'Karnataka', NULL, 'Bangalore', 'nirmal@gmail.com', 4561222, 'nirmal', 'MTIz', NULL, NULL, NULL, 'tyu890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'Coastal Heat Treatment Solutions', 'Other', 'Ashok Poojari', 'Director', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B-188/1, 5th main road, PIA, 2nd stage Bangalore 560058', 'Bangalore', 'AALFC1478K', 560068, 'Karnataka', NULL, 'Bangalore', 'coastalhts@gmail.com', 2147483647, 'coastalhts@gmail.com', 'MTIzNDU2', NULL, NULL, NULL, '29AALFC1478K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'JV Industries', 'Other', 'Jay Verma', 'Director', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '52/5, 4th main, Ward#103, Kaveripura, Kamakshipalya,', 'Bangalore', 'AQCPV5970E', 560079, 'Karnataka', NULL, 'Bangalore', 'jayverma900@gmail.com', 2147483647, 'jayverma900@gmail.com', 'MTIzNDU2', NULL, NULL, NULL, '29AQCPV5970E', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, 'Coastal Heat Treatment Solutions', 'Other', 'Ashok Poojari', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, 'B-188/1, 5th main road, PIA, 2nd stage', 'Bangalore', 'AALFC1478K', 560058, 'Karnataka', NULL, 'BANGALORE', 'coastalhts@gmail.com', 2147483647, 'Coastalheat', 'MTIzNDU2', NULL, NULL, NULL, '29AALFC1478K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, 'Coastal Heat Treatment Solutions', 'State PSU', 'Ashok Poojari', 'Manager', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, 'B-188/1, 5th main road, PIA, 2nd stage ', 'Bangalore', 'AALFC1478K', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'coastalhts@gmail.com', 2147483647, 'Coastal', 'MTIzNDU2', NULL, NULL, NULL, '29AALFC1478K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
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
(19, NULL, 'GK Industrial Corporation', 'State PSU', 'P Mani', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#18, Byrappa Lane, Ranasinghpet', 'Bangalore', 'AAPFG5532L', 560053, 'Karnataka', NULL, 'Ranasinghpet', 'gkinccorp@gmail.com', 2147483647, 'GK', 'MTIzNDU2', NULL, NULL, NULL, '29AAPFG5532L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, 'Flex Trans Technologies', 'State PSU', 'Mahendran A', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#B-183, 4th Main, 2nd Stage, PIA', 'Bangalore', 'DLTPS5305F', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'flextrans183@yahoo.com', 2147483647, 'flex', 'MTIzNDU2', NULL, NULL, NULL, '29DLTPS5305F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, 'KLAD ON DESIGHN PVT LTD', 'State PSU', 'Suresh R', 'Director', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, '# 5&6, Survey # 38/2, Nadekerappa indl estate, andrahalli main road,near peenya 2nd stage', 'Bangalore', 'AACCK7726J', 560058, 'Karnataka', NULL, 'Peenya', 'admin@kladon.com', 2147483647, 'KLAD', 'MTIzNDU2', NULL, NULL, NULL, '29AACCK7726J', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, 'Startronix Modular Systems Pvt. Ltd', 'State PSU', 'Shivaraj Mattigatti', 'Manager', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, '#46/1, Off Magadi Main Road,Near Vani School,Kachovalli, Dasanapura Hobli', 'Bangalore', 'AAECS5477J', 560091, 'Karnataka', NULL, 'Bangalore', 'shivaraj@startronixindia.com', 2147483647, 'Startronix', 'MTIzNDU2', NULL, NULL, NULL, '29AAECS5477J', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, 'Samantha Enterprises', 'State PSU', 'PANIRAJ', 'Manager', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, 'Shop Number- 2-58/5, 1st \'A\' Main, Magadi Main Rd, Vrishabhavathi Nagar, Kamakshipalya, Bengaluru', 'Bangalore', 'AADFMO342C', 560079, 'Karnataka', NULL, 'Bangalore', 'samanthaent@gmail.com', 2147483647, 'Samantha', 'MTIzNDU2', NULL, NULL, NULL, '29AADFMO342C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, 'Smile Electronics Ltd', 'State PSU', 'MH Nadeem', 'Manager', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, '29AACCS8765R1Z7', 'Bangalore', 'AACCS8765R', 560049, 'Karnataka', NULL, 'Bangalore', 'nadeem@smileelectronics.com', 2147483647, 'Smile', 'MTIzNDU2', NULL, NULL, NULL, '29AACCS8765R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(25, NULL, 'Sri Sairam Engineering Works', 'State PSU', 'Jagadeesh', 'Manager', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, '#103, 1st Main Road, Near Ambhamaheshwari Temple, Kamakshipalya', 'Bangalore', 'AZSPJ3145Q', 560079, 'Karnataka', NULL, 'Bangalore', 'sairamenggwork@gmail.com', 2147483647, 'Srisairam', 'MTIzNDU2', NULL, NULL, NULL, '29AZSPJ3145Q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(26, NULL, 'ANAGHA ENGINEERING SYSTEMS', 'Central/State Govt/UT/Local Authority', 'Mallikarjun B', 'Director', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '#22, 17th Cross,Doddanna Indl Estate', 'Bangalore', 'ADDPN1843Q', 560091, 'Karnataka', NULL, 'Peenya 2nd Stage', 'anagha_aes@rediffmail.com', 2147483647, 'ANAGHA', 'MTIzNDU2', NULL, NULL, NULL, '29ADDPN1843Q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, 'ANAGHA ENGINEERING SYSTEMS', 'State PSU', 'Mallikarjun B', 'Director', 1, '2020-10-29', 1, NULL, NULL, NULL, NULL, '#22, 17th Cross,Doddanna Indl Estate', 'Bangalore', 'ADDPN1843Q', 560091, 'Karnataka', NULL, 'Peenya 2nd Stage', 'anagha_aes@rediffmail.com', 2147483647, 'anaghaengineering', 'MTIzNDU2', NULL, NULL, NULL, '29ADDPN1843Q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, 'Mitra Metal Finishers', 'State PSU', '9880404666', 'Director', 1, '2020-10-29', 1, NULL, NULL, NULL, NULL, 'No.24, 100 Feet Road Jalahalli Cross', 'Bangalore', 'AOOPS8450G', 560057, 'Karnataka', NULL, ' T Dasarahalli', 'reiyanshaiju@gmail.com', 2147483647, 'Mitra', 'MTIzNDU2', NULL, NULL, NULL, '29AOOPS8450G', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, 'SeekVise Business Solutions Pvt Ltd', 'State PSU', 'Chethan Dev', 'Director', 1, '2020-10-30', 1, NULL, NULL, NULL, NULL, 'No 5560, 3rd Main', 'Bangalore', 'Apopd8852l', 560060, 'Karnataka', NULL, 'Bangalore', 'seekvise@gmail.com', 2147483647, 'seekvise', 'QmFuZ2Fsb3JlQA==', NULL, NULL, NULL, 'AXTNSSAIVNIE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, 'qwer', 'Central PSU', 'qwer', 'qwer', 1, '2020-10-31', 1, NULL, NULL, NULL, NULL, 'qwer', 'qwer', 'qwer', 0, 'West Bengal', NULL, 'qwer', 'qwer@123.com', 0, 'qwer', 'cXdlcg==', NULL, NULL, NULL, 'qwer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, NULL, 'ABC Pvt Ltd', 'State PSU', 'ABC', 'Director', 1, '2020-11-02', 1, NULL, NULL, NULL, NULL, '#2222, 117th Cross,Doddanna Indl Estate', 'Bangalore', 'ABCDE1234F', 560060, 'Karnataka', NULL, 'Kengeri', 'abc@abc.com', 2147483647, 'abc', 'Y1hkbGNnPT0=', NULL, NULL, NULL, '29ABCDE1234F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, NULL, 'qwer', 'Central/State Govt/UT/Local Authority', 'qwer', 'qwer', 1, '2020-11-03', 1, NULL, NULL, NULL, NULL, 'qwer', 'qwer', 'qwer', 0, 'Karnataka', NULL, 'qwer', 'qwer@q.com', 0, 'nirmaljose', 'cXdlcg==', NULL, NULL, NULL, 'qwer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'reqw', 'reqw', NULL, 'reqw', 'req', NULL, NULL, NULL, 'q', 'rewq', 'a:1:{i:0;s:11:\"Headquarter\";}', 'a:1:{i:0;s:5:\"rqwer\";}', NULL, NULL, NULL, 0, 'rewqre', NULL, NULL, 'rrew', 0, 'rewq', 'ZGVmYXVsdF9hdWMxMjM=', NULL, NULL, NULL, 'rweqw', 'qwer', NULL, 'rqwer', 0, 'qerqw', 'werw', 'a:1:{i:0;s:16:\"Lighthouse13.jpg\";}', 'a:1:{i:0;s:13:\"download8.jpg\";}', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `adminprofile`
--
ALTER TABLE `adminprofile`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `biddercart`
--
ALTER TABLE `biddercart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyerprofile`
--
ALTER TABLE `buyerprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
