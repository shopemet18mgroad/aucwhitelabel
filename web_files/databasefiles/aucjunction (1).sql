-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 12:45 PM
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
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `id` int(11) NOT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `scompanyname` varchar(100) DEFAULT NULL,
  `scompanyid` int(200) DEFAULT NULL,
  `scategory` varchar(200) DEFAULT NULL,
  `sauctionid` int(225) DEFAULT NULL,
  `svinspection` varchar(200) DEFAULT NULL,
  `sonlineaucdate_time` datetime DEFAULT NULL,
  `sterms_condiaccept` tinyint(1) DEFAULT NULL,
  `sterms_condiupload` tinyint(1) DEFAULT NULL,
  `sterms_conditype` varchar(225) DEFAULT NULL,
  `slotno` int(100) DEFAULT NULL,
  `slotname` varchar(200) DEFAULT NULL,
  `sdescription` varchar(225) DEFAULT NULL,
  `slotlocation` varchar(225) DEFAULT NULL,
  `sfrominpectdate_time` datetime(6) DEFAULT NULL,
  `stoinpectdate_time` datetime(6) DEFAULT NULL,
  `semddetail` varchar(200) DEFAULT NULL,
  `slastdateemdsub` date DEFAULT NULL,
  `sprice` int(225) DEFAULT NULL,
  `sstartbidprice` int(225) DEFAULT NULL,
  `sqty` int(225) DEFAULT NULL,
  `sunitmeasurment` int(225) DEFAULT NULL,
  `sbidbase` int(200) DEFAULT NULL,
  `sgst` int(200) DEFAULT NULL,
  `sothertax` varchar(225) DEFAULT NULL,
  `semdamount` int(255) DEFAULT NULL,
  `sliftingperiod` varchar(200) DEFAULT NULL,
  `spcbcertificate` tinyint(1) DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `autobid`
--

CREATE TABLE `autobid` (
  `id` int(11) NOT NULL,
  `sauctionid` varchar(225) DEFAULT NULL,
  `bfinalbid` int(225) DEFAULT NULL,
  `bidperunit` int(225) DEFAULT NULL,
  `bidmax` int(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `bcin` varchar(225) DEFAULT NULL,
  `baddress` varchar(225) DEFAULT NULL,
  `bcity` varchar(50) DEFAULT NULL,
  `bpin` int(50) DEFAULT NULL,
  `bstate` varchar(50) DEFAULT NULL,
  `bcountry` varchar(11) DEFAULT NULL,
  `bemail` varchar(100) DEFAULT NULL,
  `bphone` int(11) DEFAULT NULL,
  `bpan` int(11) DEFAULT NULL,
  `busername` int(50) DEFAULT NULL,
  `bpassword` int(11) DEFAULT NULL,
  `boldpassword` int(11) DEFAULT NULL,
  `bnewpassword` int(11) DEFAULT NULL,
  `bconfirmpassword` int(11) DEFAULT NULL,
  `bgst` int(11) DEFAULT NULL,
  `bpcb` varchar(225) DEFAULT NULL,
  `bcapcha` varchar(50) DEFAULT NULL,
  `bbankname` varchar(50) DEFAULT NULL,
  `baccountnumber` int(50) DEFAULT NULL,
  `bbranch` varchar(50) DEFAULT NULL,
  `bifsccode` varchar(50) DEFAULT NULL,
  `buploadimage1` blob DEFAULT NULL,
  `buploadimage2` blob DEFAULT NULL,
  `buploadimage3` blob DEFAULT NULL,
  `bsigneddocument` blob DEFAULT NULL,
  `bsigneddocument1` blob DEFAULT NULL,
  `bsigneddocument2` blob DEFAULT NULL,
  `bsigneddocument3` blob DEFAULT NULL,
  `bsigneddocument4` blob DEFAULT NULL,
  `bsigneddocument5` blob DEFAULT NULL,
  `bemd` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `ssellertype` int(220) DEFAULT NULL,
  `scontactperson` varchar(200) DEFAULT NULL,
  `sdesignation` varchar(100) DEFAULT NULL,
  `sagreement` tinyint(1) DEFAULT NULL,
  `sagreementdate` date DEFAULT NULL,
  `sterms_condi` tinyint(1) DEFAULT NULL,
  `scin` varchar(225) DEFAULT NULL,
  `scompanytype` varchar(50) DEFAULT NULL,
  `saddress` tinytext DEFAULT NULL,
  `saddresscount` int(2) DEFAULT NULL,
  `sstreet` varchar(100) DEFAULT NULL,
  `scity` varchar(100) DEFAULT NULL,
  `span` int(225) DEFAULT NULL,
  `spin` int(200) DEFAULT NULL,
  `sstate` varchar(100) DEFAULT NULL,
  `scountry` varchar(100) DEFAULT NULL,
  `slocation` varchar(225) DEFAULT NULL,
  `semail` varchar(200) DEFAULT NULL,
  `sphone` int(11) DEFAULT NULL,
  `susername` varchar(50) DEFAULT NULL,
  `spassword` varchar(10) DEFAULT NULL,
  `soldpassword` varchar(50) DEFAULT NULL,
  `snewpassword` varchar(50) DEFAULT NULL,
  `sconfirmpassword` varchar(10) DEFAULT NULL,
  `sgst` int(12) DEFAULT NULL,
  `spcb` varchar(225) DEFAULT NULL,
  `scapcha` varchar(12) DEFAULT NULL,
  `sbankername` varchar(200) DEFAULT NULL,
  `saccountnumber` int(200) DEFAULT NULL,
  `sbranch` varchar(100) DEFAULT NULL,
  `sifsccode` varchar(200) DEFAULT NULL,
  `suploadprofilepic` varchar(200) DEFAULT NULL,
  `ssigneddocument` varchar(200) DEFAULT NULL,
  `adaction` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `autobid`
--
ALTER TABLE `autobid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `biddercart`
--
ALTER TABLE `biddercart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyerprofile`
--
ALTER TABLE `buyerprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
