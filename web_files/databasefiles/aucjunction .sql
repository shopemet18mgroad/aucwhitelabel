-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2020 at 08:48 AM
-- Server version: 8.0.22-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

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
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `id` int NOT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `scompanyname` varchar(100) DEFAULT NULL,
  `scompanyid` int DEFAULT NULL,
  `scategory` varchar(200) DEFAULT NULL,
  `sauctionid` int DEFAULT NULL,
  `svinspection` varchar(200) DEFAULT NULL,
  `sonlineaucdate_time` datetime DEFAULT NULL,
  `sterms_condiaccept` tinyint(1) DEFAULT NULL,
  `sterms_condiupload` tinyint(1) DEFAULT NULL,
  `sterms_conditype` varchar(225) DEFAULT NULL,
  `slotno` int DEFAULT NULL,
  `slotname` varchar(200) DEFAULT NULL,
  `sdescription` varchar(225) DEFAULT NULL,
  `slotlocation` varchar(225) DEFAULT NULL,
  `sfrominpectdate_time` datetime(6) DEFAULT NULL,
  `stoinpectdate_time` datetime(6) DEFAULT NULL,
  `semddetail` varchar(200) DEFAULT NULL,
  `slastdateemdsub` date DEFAULT NULL,
  `sprice` int DEFAULT NULL,
  `sstartbidprice` int DEFAULT NULL,
  `sqty` int DEFAULT NULL,
  `sunitmeasurment` int DEFAULT NULL,
  `sbidbase` int DEFAULT NULL,
  `sgst` int DEFAULT NULL,
  `sothertax` varchar(225) DEFAULT NULL,
  `semdamount` int DEFAULT NULL,
  `sliftingperiod` varchar(200) DEFAULT NULL,
  `sliftingperiod2` date DEFAULT NULL,
  `spcbcertificate` tinyint(1) DEFAULT NULL,
  `adminapprovalstatus` tinyint(1) DEFAULT NULL,
  `sapproval` varchar(200) DEFAULT NULL,
  `sdownload` blob,
  `saction` varchar(1) DEFAULT NULL,
  `sauctionstatus` tinyint(1) DEFAULT NULL,
  `saucstartdate_time` datetime(6) DEFAULT NULL,
  `saucclosedate_time` datetime(6) DEFAULT NULL,
  `adstatus` tinyint(1) DEFAULT NULL,
  `adaction` tinyint(1) DEFAULT NULL,
  `reauction` varchar(225) DEFAULT NULL,
  `stotalauction` int DEFAULT NULL,
  `bwishlist` tinyint(1) DEFAULT NULL,
  `bemdstatus` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `autobid`
--

CREATE TABLE `autobid` (
  `id` int NOT NULL,
  `sauctionid` varchar(225) DEFAULT NULL,
  `bfinalbid` int DEFAULT NULL,
  `bidperunit` int DEFAULT NULL,
  `bidmax` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `biddercart`
--

CREATE TABLE `biddercart` (
  `id` int NOT NULL,
  `bidderid` int DEFAULT NULL,
  `auctiontype` tinyint(1) DEFAULT NULL,
  `auctionid` varchar(200) DEFAULT NULL,
  `lotno` varchar(200) DEFAULT NULL,
  `aucstartdate_time` datetime(6) DEFAULT NULL,
  `aucclosedate_time` datetime(6) DEFAULT NULL,
  `bidmaxvalue` int DEFAULT NULL,
  `bidamount` int DEFAULT NULL,
  `emdpaid` int DEFAULT NULL,
  `emdrequest` varchar(225) DEFAULT NULL,
  `bided` tinyint(1) DEFAULT NULL,
  `emd_paiddd` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `biddingdata`
--

CREATE TABLE `biddingdata` (
  `id` int NOT NULL,
  `bidderid` int DEFAULT NULL,
  `sauctionid` varchar(200) DEFAULT NULL,
  `slotno` varchar(200) DEFAULT NULL,
  `bidvalue` int DEFAULT NULL,
  `Date_time` datetime(6) DEFAULT NULL,
  `bidamount` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buyerprofile`
--

CREATE TABLE `buyerprofile` (
  `id` int NOT NULL,
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
  `bpin` int DEFAULT NULL,
  `bstate` varchar(50) DEFAULT NULL,
  `bcountry` varchar(11) DEFAULT NULL,
  `bemail` varchar(100) DEFAULT NULL,
  `bphone` int DEFAULT NULL,
  `bpan` varchar(11) DEFAULT NULL,
  `busername` varchar(50) DEFAULT NULL,
  `bpassword` varchar(11) DEFAULT NULL,
  `boldpassword` varchar(11) DEFAULT NULL,
  `bnewpassword` varchar(11) DEFAULT NULL,
  `bconfirmpassword` int DEFAULT NULL,
  `bgst` varchar(11) DEFAULT NULL,
  `bpcb` varchar(225) DEFAULT NULL,
  `bcapcha` varchar(50) DEFAULT NULL,
  `bbankname` varchar(50) DEFAULT NULL,
  `baccountnumber` int DEFAULT NULL,
  `bbranch` varchar(50) DEFAULT NULL,
  `bifsccode` varchar(50) DEFAULT NULL,
  `buploadimagepic` varchar(200) DEFAULT NULL,
  `bsigneddocument` varchar(200) DEFAULT NULL,
  `bemd` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buyerprofile`
--

INSERT INTO `buyerprofile` (`id`, `bname`, `bcompany`, `bcomptype`, `bbuyertype`, `bbuyerlocation`, `bcontactperson`, `bdesignation`, `bagreement`, `bagreementdate`, `bterms_condi`, `bcin`, `baddress`, `bcity`, `bpin`, `bstate`, `bcountry`, `bemail`, `bphone`, `bpan`, `busername`, `bpassword`, `boldpassword`, `bnewpassword`, `bconfirmpassword`, `bgst`, `bpcb`, `bcapcha`, `bbankname`, `baccountnumber`, `bbranch`, `bifsccode`, `buploadimagepic`, `bsigneddocument`, `bemd`) VALUES
(1, NULL, 'abc', 'two', 'two', 'bangalore', 'bcd', NULL, 1, '2020-10-23', 1, NULL, 'yyyyyyyyyyyy', 'Hyd', 528589, 'twelve', NULL, 'CDSA@gmail.com', 2147483647, '4451', 'Seema', '1234', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'rgrfgf', 'three', 'two', '43t5434', 'rtrt', NULL, 1, '2020-10-23', 1, NULL, 'rtretrt', 'tret', 0, 'thirteen', NULL, 'ret@gmail.com', 654632, 'fbg1654', 'gbhfgbef', '1234', NULL, NULL, NULL, 'fgrfg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'TNB Enterprises', 'two', 'two', 'Bangalore', 'Tabrez Pasha', NULL, 1, '2020-10-28', 1, NULL, '#1&2, Choodenapura Village, Kengeri hobli', 'Bangalore', 560069, 'twelve', NULL, 'ttnbenterprises@gmail.com', 2147483647, 'BCCPT9788F', 'TNB', '123456', NULL, NULL, NULL, '29BCCPT9788', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'E Friendly Waste Recyclers', 'two', 'two', 'Bangalore', 'Khadeer Pasha', NULL, 1, '2020-10-28', 1, NULL, '#17, 1st Floor, 1st Cross, Azeez Sait Indl. Town, Nayandanahalli', 'Bangalore', 560039, 'twelve', NULL, 'efriendly.ewaste@gmail.com', 2147483647, 'AAEFE8458Q', 'Efriendly', '123456', NULL, NULL, NULL, '29AAEFE8458', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, 'Turbo Motor', 'two', 'two', 'Bangalore', 'Fairoz Khan', NULL, 1, '2020-10-28', NULL, NULL, '#12/2, 5th Cross, Nehru Road, New Guddadahalli, Mysore Road', 'Bangalore', 560026, 'twelve', NULL, 'turbomotors1@gmail.com', 2147483647, 'AKJPK4012B', 'Turbo', '123456', NULL, NULL, NULL, '29AKJPK4012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, 'Turbo Motor', 'two', 'two', 'Bangalore', 'Fairoz Khan', NULL, NULL, NULL, NULL, NULL, '#12/2, 5th Cross, Nehru Road, New Guddadahalli, Mysore Road', 'Bangalore', 560026, 'twelve', NULL, 'turbomotors1@gmail.com', 2147483647, 'AKJPK4012B', 'Turbo Motor', '123456', NULL, NULL, NULL, '29AKJPK4012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, 'Bharath Steels', 'two', 'two', 'Bangalore', 'Shabbir Ulla Khan', NULL, NULL, NULL, NULL, NULL, '#42/8, 2nd Cross, Fireworks Colony, JC Road', 'Bangalore', 560002, 'twelve', NULL, 'bharathsteels3577@gmail.com', 2147483647, 'ARQPK7074B', 'Bharath Steels', '123456', NULL, NULL, NULL, '29ARQPK7074', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, 'Sidra Steels', 'two', 'two', 'Bangalore', 'Ziyaulla', NULL, NULL, NULL, NULL, NULL, '#12, Kambagundi Layout, Behind SJP Police Station', 'Bangalore', 560002, 'twelve', NULL, 'mziya25@yahoo.co.in', 2147483647, 'ABBPZ6919R', 'Sidra Steels', '123456', NULL, NULL, NULL, '29ABBPZ6919', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, 'Subhan & Sons', 'two', 'two', 'Bangalore', 'Saleem Sheriff', NULL, 1, '2020-10-28', 1, NULL, '#13/6, Singasandra, Hosur Main Road', 'Bangalore', 560068, 'twelve', NULL, 'salimshariff174@gmail.com', 2147483647, 'HERPS3970D', 'Subhan', '123456', NULL, NULL, NULL, '29HERPS3970', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, 'AS Trading Company', 'two', 'two', 'Bangalore', 'Mohammed Muyeed', NULL, 1, '2020-10-28', 1, NULL, 'Opp Singayanapalya Bus Stop, Whitefield Road, Mahadevapura Post', 'Bangalore', 560048, 'twelve', NULL, 'astdcompany@gmail.com', 2147483647, 'AFOPA4927P', 'Astrading', '123456', NULL, NULL, NULL, '29AFOPA4927', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, 'ABC Pvt Ltd', 'one', 'one', 'Peenya', 'ABC', NULL, 1, '2020-11-02', 1, NULL, '#2222, 117th Cross, Peenya Industrial Area', 'Bangalore', 560058, 'twelve', NULL, 'abc@abc.com', 2147483647, 'ABCDE1234F', 'abc', 'abc@123', NULL, NULL, NULL, '29ABCDE1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `id` int NOT NULL,
  `sauctionid` varchar(225) DEFAULT NULL,
  `closetime` time(6) DEFAULT NULL,
  `timeleft` time(6) DEFAULT NULL,
  `livestatus` int DEFAULT NULL,
  `bidvalue` int DEFAULT NULL,
  `bidamount` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sellerprofile`
--

CREATE TABLE `sellerprofile` (
  `id` int NOT NULL,
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
  `saddress` tinytext,
  `saddresscount` int DEFAULT NULL,
  `sstreet` varchar(100) DEFAULT NULL,
  `scity` varchar(100) DEFAULT NULL,
  `span` varchar(225) DEFAULT NULL,
  `spin` int DEFAULT NULL,
  `sstate` varchar(100) DEFAULT NULL,
  `scountry` varchar(100) DEFAULT NULL,
  `slocation` varchar(225) DEFAULT NULL,
  `semail` varchar(200) DEFAULT NULL,
  `sphone` int DEFAULT NULL,
  `susername` varchar(50) DEFAULT NULL,
  `spassword` varchar(10) DEFAULT NULL,
  `soldpassword` varchar(50) DEFAULT NULL,
  `snewpassword` varchar(50) DEFAULT NULL,
  `sconfirmpassword` varchar(10) DEFAULT NULL,
  `sgst` varchar(12) DEFAULT NULL,
  `spcb` varchar(225) DEFAULT NULL,
  `scapcha` varchar(12) DEFAULT NULL,
  `sbankername` varchar(200) DEFAULT NULL,
  `saccountnumber` int DEFAULT NULL,
  `sbranch` varchar(100) DEFAULT NULL,
  `sifsccode` varchar(200) DEFAULT NULL,
  `suploadprofilepic` varchar(200) DEFAULT NULL,
  `ssigneddocument` varchar(200) DEFAULT NULL,
  `adaction` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sellerprofile`
--

INSERT INTO `sellerprofile` (`id`, `sname`, `scomapnyname`, `ssellertype`, `scontactperson`, `sdesignation`, `sagreement`, `sagreementdate`, `sterms_condi`, `scin`, `scompanytype`, `saddress`, `saddresscount`, `sstreet`, `scity`, `span`, `spin`, `sstate`, `scountry`, `slocation`, `semail`, `sphone`, `susername`, `spassword`, `soldpassword`, `snewpassword`, `sconfirmpassword`, `sgst`, `spcb`, `scapcha`, `sbankername`, `saccountnumber`, `sbranch`, `sifsccode`, `suploadprofilepic`, `ssigneddocument`, `adaction`) VALUES
(1, NULL, 'hbbcnjbcn', '0', 'njbhb', 'rtrt', 1, '2020-10-23', 1, NULL, NULL, NULL, NULL, 'tdtt', 'thfg', '0', 6445, 'Karnataka', NULL, 'hgghgh', 'gfhgh@gmail.com', 5664613, 'thknjkh', '1234', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'NSPCL', 'Educational/Research Institutes', 'Nirmal', 'Software Developer', 1, '2020-10-23', 1, NULL, NULL, NULL, NULL, '12', 'Bangalore', '123tuyu', 490001, 'Karnataka', NULL, 'Bangalore', 'nirmal@gmail.com', 4561222, 'nirmal', '123', NULL, NULL, NULL, 'tyu890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'Coastal Heat Treatment Solutions', 'Other', 'Ashok Poojari', 'Director', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B-188/1, 5th main road, PIA, 2nd stage Bangalore 560058', 'Bangalore', 'AALFC1478K', 560068, 'Karnataka', NULL, 'Bangalore', 'coastalhts@gmail.com', 2147483647, 'coastalhts@gmail.com', '123456', NULL, NULL, NULL, '29AALFC1478K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'JV Industries', 'Other', 'Jay Verma', 'Director', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '52/5, 4th main, Ward#103, Kaveripura, Kamakshipalya,', 'Bangalore', 'AQCPV5970E', 560079, 'Karnataka', NULL, 'Bangalore', 'jayverma900@gmail.com', 2147483647, 'jayverma900@gmail.com', '123456', NULL, NULL, NULL, '29AQCPV5970E', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, 'Coastal Heat Treatment Solutions', 'Other', 'Ashok Poojari', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, 'B-188/1, 5th main road, PIA, 2nd stage', 'Bangalore', 'AALFC1478K', 560058, 'Karnataka', NULL, 'BANGALORE', 'coastalhts@gmail.com', 2147483647, 'Coastalheat', '123456', NULL, NULL, NULL, '29AALFC1478K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, 'Coastal Heat Treatment Solutions', 'State PSU', 'Ashok Poojari', 'Manager', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, 'B-188/1, 5th main road, PIA, 2nd stage ', 'Bangalore', 'AALFC1478K', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'coastalhts@gmail.com', 2147483647, 'Coastal', '123456', NULL, NULL, NULL, '29AALFC1478K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, 'BRAHANS RUBBER PRODUCTS', 'State PSU', 'SHANTHARAM SHETTY', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#78,10th A cross,balaji nagar,tigalarpalya main road', 'Bangalore', 'AAAPS8485P', 560058, 'Karnataka', NULL, 'Tigalarpalya', 'brahansbangalore@gmail.com', 2147483647, 'brahans', '123456', NULL, NULL, NULL, '29AAAPS8485P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, 'JV Industries', 'State PSU', 'Prakash Verma', 'Manager', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '52/5, 4th main, Ward#103, Kaveripura, Kamakshipalya', 'Bangalore', 'AQCPV5970E', 560079, 'Karnataka', NULL, 'Kamakshipalya', 'jayverma900@gmail.com', 2147483647, 'JVIndustries', '123456', NULL, NULL, NULL, '29AQCPV5970E', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, 'SURYA HYDRAULICS', 'State PSU', 'AS Suresh Kumar', 'Manager', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#24,11th cross,4th phase,peenya industrial area,ganapathi nagar', 'Bangalore', 'AKPPA1332E', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'suryahydraulic@gmail.com', 2147483647, 'SURYA', '123456', NULL, NULL, NULL, '29AKPPA1332E', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, 'N K SHEET METAL WORKS PVT LTD', 'State PSU', 'KUBENDRAN', 'Manager', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#3B/415/33-34, PIA, 2nd Phase, KIADB Main Road', 'Bangalore', 'AACCN9849F', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'nksmw2009@gmail.com', 2147483647, 'NKSHEET', '123456', NULL, NULL, NULL, '29AACCN9849F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, 'MM Equipments', 'State PSU', 'TS Umesh', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#B-387, 100Ft Road, Peenya 1st Stage, PIA', 'Bangalore', 'AADPU0333R', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'mm.equipments@yahoo.com', 80, 'MMEQUIPE', '123456', NULL, NULL, NULL, '29AADPU0333R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, 'Altec Industries', 'State PSU', 'R Deepak', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, 'B-181, 4th main Road, 2nd Stage, PIA', 'Bangalore', 'ACGPN3126J', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'altec181@gmail.com', 2147483647, 'Altec', '123456', NULL, NULL, NULL, '29ACGPN3126J', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, 'Multipak Electronics India Pvt Ltd', 'State PSU', 'SB Raju', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#28P, KIADB Industrial Area, Bommasandra to Jigani Link Road, 4th phase', 'Bangalore', 'AABCM1455D', 560099, 'Karnataka', NULL, 'Bommasandra', 'sbraju@multipackelectronics.com', 2147483647, 'Multipak', '123456', NULL, NULL, NULL, '29AABCM1455D', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, 'SAS PRESS TECH', 'State PSU', 'Ashvin Sreenivasan', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#5, 2nd Main, Ramamandir Road,Kaveripura, Kamakshipalya', 'Bangalore', 'ABBFS3543E', 560079, 'Karnataka', NULL, 'Kamakshipalya', 'ashvin@saspresstech.com', 2147483647, 'Saspress', '123456', NULL, NULL, NULL, '29ABBFS3543E', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, 'ENGINEERING STEEL FABRICATING WORKS', 'State PSU', 'SRIKANTH MR', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#61, 10th Main, 3rd Phase,Peenya Industrial Area', 'Bangalore', 'AABFE5721B', 560058, 'Karnataka', NULL, 'peenya 3rd phase', 'esfworks@gmail.com', 2147483647, 'steelfabrication', '123456', NULL, NULL, NULL, '29AABFE5721B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, 'SRINU ENGINEERING INDUSTRIES', 'State PSU', 'Sridhar Babu', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '# B -120 3rd main, 2nd stage,peenya indl area', 'Bangalore', 'AAOFS1558D', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'srinu@srinuengg.in', 2147483647, 'srinu', '123456', NULL, NULL, NULL, '29AAOFS1558D', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, 'SRI RAJESHWARI INDUSTRIES', 'State PSU', 'Pradeep Kumar', 'Manager', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '30/1, 1st Main Road, 4th Cross, Robert Son Block, Ramachandrapura', 'Bangalore', 'AFGPB0958P', 560021, 'Karnataka', NULL, 'Ramachandrapura', 'pradeep_baburao@rediffmail.com', 2147483647, 'Rajeshwari', '123456', NULL, NULL, NULL, '29AFGPB0958P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, 'UNIQUE PUNCH SYSTEMS PVT LTD', 'State PSU', 'Chandrashekar K', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#485/7, 14th Cross, IV Phase,Peenya Industrial Area', 'Bangalore', 'AAACU2508A', 560058, 'Karnataka', NULL, 'peenya4th phase', 'kcs@uniquepunch.com', 2147483647, 'kcs', '123456', NULL, NULL, NULL, '29AAACU2508A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, 'GK Industrial Corporation', 'State PSU', 'P Mani', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#18, Byrappa Lane, Ranasinghpet', 'Bangalore', 'AAPFG5532L', 560053, 'Karnataka', NULL, 'Ranasinghpet', 'gkinccorp@gmail.com', 2147483647, 'GK', '123456', NULL, NULL, NULL, '29AAPFG5532L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, 'Flex Trans Technologies', 'State PSU', 'Mahendran A', 'Director', 1, '2020-10-27', 1, NULL, NULL, NULL, NULL, '#B-183, 4th Main, 2nd Stage, PIA', 'Bangalore', 'DLTPS5305F', 560058, 'Karnataka', NULL, 'Peenya 2nd Stage', 'flextrans183@yahoo.com', 2147483647, 'flex', '123456', NULL, NULL, NULL, '29DLTPS5305F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, 'KLAD ON DESIGHN PVT LTD', 'State PSU', 'Suresh R', 'Director', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, '# 5&6, Survey # 38/2, Nadekerappa indl estate, andrahalli main road,near peenya 2nd stage', 'Bangalore', 'AACCK7726J', 560058, 'Karnataka', NULL, 'Peenya', 'admin@kladon.com', 2147483647, 'KLAD', '123456', NULL, NULL, NULL, '29AACCK7726J', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, 'Startronix Modular Systems Pvt. Ltd', 'State PSU', 'Shivaraj Mattigatti', 'Manager', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, '#46/1, Off Magadi Main Road,Near Vani School,Kachovalli, Dasanapura Hobli', 'Bangalore', 'AAECS5477J', 560091, 'Karnataka', NULL, 'Bangalore', 'shivaraj@startronixindia.com', 2147483647, 'Startronix', '123456', NULL, NULL, NULL, '29AAECS5477J', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, 'Samantha Enterprises', 'State PSU', 'PANIRAJ', 'Manager', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, 'Shop Number- 2-58/5, 1st \'A\' Main, Magadi Main Rd, Vrishabhavathi Nagar, Kamakshipalya, Bengaluru', 'Bangalore', 'AADFMO342C', 560079, 'Karnataka', NULL, 'Bangalore', 'samanthaent@gmail.com', 2147483647, 'Samantha', '123456', NULL, NULL, NULL, '29AADFMO342C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, 'Smile Electronics Ltd', 'State PSU', 'MH Nadeem', 'Manager', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, '29AACCS8765R1Z7', 'Bangalore', 'AACCS8765R', 560049, 'Karnataka', NULL, 'Bangalore', 'nadeem@smileelectronics.com', 2147483647, 'Smile', '123456', NULL, NULL, NULL, '29AACCS8765R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, NULL, 'Sri Sairam Engineering Works', 'State PSU', 'Jagadeesh', 'Manager', 1, '2020-10-28', 1, NULL, NULL, NULL, NULL, '#103, 1st Main Road, Near Ambhamaheshwari Temple, Kamakshipalya', 'Bangalore', 'AZSPJ3145Q', 560079, 'Karnataka', NULL, 'Bangalore', 'sairamenggwork@gmail.com', 2147483647, 'Srisairam', '123456', NULL, NULL, NULL, '29AZSPJ3145Q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, NULL, 'ANAGHA ENGINEERING SYSTEMS', 'Central/State Govt/UT/Local Authority', 'Mallikarjun B', 'Director', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '#22, 17th Cross,Doddanna Indl Estate', 'Bangalore', 'ADDPN1843Q', 560091, 'Karnataka', NULL, 'Peenya 2nd Stage', 'anagha_aes@rediffmail.com', 2147483647, 'ANAGHA', '123456', NULL, NULL, NULL, '29ADDPN1843Q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, 'ANAGHA ENGINEERING SYSTEMS', 'State PSU', 'Mallikarjun B', 'Director', 1, '2020-10-29', 1, NULL, NULL, NULL, NULL, '#22, 17th Cross,Doddanna Indl Estate', 'Bangalore', 'ADDPN1843Q', 560091, 'Karnataka', NULL, 'Peenya 2nd Stage', 'anagha_aes@rediffmail.com', 2147483647, 'anaghaengineering', '123456', NULL, NULL, NULL, '29ADDPN1843Q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, 'Mitra Metal Finishers', 'State PSU', '9880404666', 'Director', 1, '2020-10-29', 1, NULL, NULL, NULL, NULL, 'No.24, 100 Feet Road Jalahalli Cross', 'Bangalore', 'AOOPS8450G', 560057, 'Karnataka', NULL, ' T Dasarahalli', 'reiyanshaiju@gmail.com', 2147483647, 'Mitra', '123456', NULL, NULL, NULL, '29AOOPS8450G', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, 'SeekVise Business Solutions Pvt Ltd', 'State PSU', 'Chethan Dev', 'Director', 1, '2020-10-30', 1, NULL, NULL, NULL, NULL, 'No 5560, 3rd Main', 'Bangalore', 'Apopd8852l', 560060, 'Karnataka', NULL, 'Bangalore', 'seekvise@gmail.com', 2147483647, 'seekvise', 'Bangalore@', NULL, NULL, NULL, 'AXTNSSAIVNIE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, 'qwer', 'Central PSU', 'qwer', 'qwer', 1, '2020-10-31', 1, NULL, NULL, NULL, NULL, 'qwer', 'qwer', 'qwer', 0, 'West Bengal', NULL, 'qwer', 'qwer@123.com', 0, 'qwer', 'qwer', NULL, NULL, NULL, 'qwer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, NULL, 'ABC Pvt Ltd', 'State PSU', 'ABC', 'Director', 1, '2020-11-02', 1, NULL, NULL, NULL, NULL, '#2222, 117th Cross,Doddanna Indl Estate', 'Bangalore', 'ABCDE1234F', 560060, 'Karnataka', NULL, 'Kengeri', 'abc@abc.com', 2147483647, 'abc', 'abc@123', NULL, NULL, NULL, '29ABCDE1234F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `autobid`
--
ALTER TABLE `autobid`
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
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `autobid`
--
ALTER TABLE `autobid`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `biddercart`
--
ALTER TABLE `biddercart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyerprofile`
--
ALTER TABLE `buyerprofile`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `liveauction`
--
ALTER TABLE `liveauction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellerprofile`
--
ALTER TABLE `sellerprofile`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
