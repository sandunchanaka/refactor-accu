-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2009 at 03:00 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `rajeeda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminId` int(11) NOT NULL auto_increment,
  `userName` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY  (`adminId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `userName`, `pass`, `email`) VALUES
(1, 'Admin', '123', 'dkchamara@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_info`
--

CREATE TABLE IF NOT EXISTS `contact_us_info` (
  `id` int(50) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contact_us_info`
--

INSERT INTO `contact_us_info` (`id`, `name`, `address`, `telephone`, `email`, `message`) VALUES
(1, 'Kasun', '0776891652', '0776891652', 'dkchamara@gmail.com', 'Install new system'),
(2, 'Kasun', '0776891652', '0776891652', 'dkchamara@gmail.com', 'Install new system'),
(3, 'Kasun', '0776891652', '0776891652', 'dkchamara@gmail.com', 'Install new system'),
(4, 'bc', 'zvb', 'zvb', 'zcvb', 'bbzbvbvbv'),
(5, 'bc', 'zvb', 'zvb', 'zcvb', 'bbzbvbvbv'),
(6, 'Test', 'Test', 'Test', 'Test', 'Test'),
(7, 'Test', 'Test', 'Test', 'Test', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `district_id` int(11) NOT NULL auto_increment,
  `district_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`district_id`),
  UNIQUE KEY `district_id` (`district_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`) VALUES
(1, 'Ampara'),
(2, 'Anuradapura'),
(3, 'Badulla'),
(4, 'Batticalo'),
(5, 'Colombo'),
(6, 'Galle'),
(7, 'Gampaha'),
(8, 'Jaffna'),
(9, 'Kandy'),
(10, 'Kalutara'),
(11, 'Kegalle'),
(12, 'Kurunegala'),
(13, 'Killinochchi'),
(14, 'Matara'),
(15, 'Matale'),
(16, 'Mannar'),
(17, 'Mulative'),
(18, 'Monaragala'),
(19, 'Nuwara Eliya'),
(20, 'Puttalam'),
(21, 'Potuvil'),
(22, 'Ratnapura'),
(23, 'Trincomalee'),
(24, 'Vauniya');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(50) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  PRIMARY KEY  (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `title`, `description`, `start_date`, `end_date`) VALUES
(1, 'Launch www.rajeeda.org', 'We are lanch our organization web site in a new look.It has more usefull to all of you', '2008.11.07', ''),
(2, 'Get together-Chilaw', 'Working directors get together at bingiriya conference hall', '2008.11.29', ''),
(3, 'Technical training-Kalutara', 'Technical training of Coop-MIS software and administrative tools', '2008.11.13', ''),
(4, 'Technical training for Credit unions -  Nikaweratiya', 'Technical training for Credit unions -  Nikaweratiya', '2008.11.20', '');

-- --------------------------------------------------------

--
-- Table structure for table `gl_acc`
--

CREATE TABLE IF NOT EXISTS `gl_acc` (
  `GLAccNo` varchar(25) NOT NULL,
  `GLAccNam` varchar(75) default NULL,
  `SecID` varchar(15) default NULL,
  `AccTypID` varchar(2) default NULL,
  `NID` varchar(2) default NULL,
  `CatE` varchar(100) default NULL,
  `Bud` double default NULL,
  `OpeDeb` double default NULL,
  `OpeCre` double default NULL,
  `LasDeb` double default NULL,
  `LasCre` double default NULL,
  `Des` varchar(255) default NULL,
  `Act` varchar(1) default NULL,
  PRIMARY KEY  (`GLAccNo`),
  KEY `{1070337C-71D8-4324-A17A-172474CC8B92}` (`AccTypID`),
  KEY `{59730A42-B1AC-4633-A618-79BC52EF20A0}` (`CatE`),
  KEY `AccTypID` (`AccTypID`),
  KEY `CatE` (`CatE`),
  KEY `GLAccNam` (`GLAccNam`),
  KEY `NID` (`NID`),
  KEY `SecID` (`SecID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gl_acc`
--

INSERT INTO `gl_acc` (`GLAccNo`, `GLAccNam`, `SecID`, `AccTypID`, `NID`, `CatE`, `Bud`, `OpeDeb`, `OpeCre`, `LasDeb`, `LasCre`, `Des`, `Act`) VALUES
('1', 'Sales', 's1', '5', 'aa', 'aaaa', 14.25, 55.5, 25.36, 553.58, 5.568, 'aa', 'a'),
('2', 'salary', 's2', '4', 'ww', 'aaaa', 4.5, 5.56, 535.5, 55.5, 5.5, 'h', '4');

-- --------------------------------------------------------

--
-- Table structure for table `gl_acc_type`
--

CREATE TABLE IF NOT EXISTS `gl_acc_type` (
  `acc_type_id` int(11) NOT NULL,
  `cat_e` varchar(50) NOT NULL,
  `cat_s` varchar(50) NOT NULL,
  `des_e` varchar(50) NOT NULL,
  `des_s` varchar(50) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `n_cat_e` varchar(50) NOT NULL,
  `n_cat_s` varchar(50) NOT NULL,
  `n_des_e` varchar(50) NOT NULL,
  `n_des_s` varchar(50) NOT NULL,
  PRIMARY KEY  (`acc_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gl_acc_type`
--

INSERT INTO `gl_acc_type` (`acc_type_id`, `cat_e`, `cat_s`, `des_e`, `des_s`, `nid`, `n_cat_e`, `n_cat_s`, `n_des_e`, `n_des_s`) VALUES
(20, 'Cash', 'Cash', '-', '-', '', '', '', '', ''),
(21, 'Current Account', 'Current Account', '-', '-', '', '', '', '', ''),
(54, 'Income', 'Income', '-', '-', '', '', '', '', ''),
(66, 'Expenses', 'Expenses', '-', '-', '-', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gl_sec`
--

CREATE TABLE IF NOT EXISTS `gl_sec` (
  `sec_id` int(11) NOT NULL,
  `ins_id` int(11) NOT NULL,
  `sec_name_e` varchar(100) NOT NULL,
  `sec_name_s` varchar(100) NOT NULL,
  `cas_d` varchar(50) NOT NULL,
  `des` varchar(50) NOT NULL,
  PRIMARY KEY  (`sec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gl_sec`
--

INSERT INTO `gl_sec` (`sec_id`, `ins_id`, `sec_name_e`, `sec_name_s`, `cas_d`, `des`) VALUES
(10, 1, 'Banking Software ', 'Banking Software', '0', 'CBFI-MIS'),
(11, 1, 'Hardware and services ', 'Hardware and services ', '0', 'HW'),
(12, 1, 'Information solutions ', 'Information solutions ', '0', 'IS'),
(13, 1, 'Training, Printing and others ', 'Training, Printing and others ', '0', 'Training');

-- --------------------------------------------------------

--
-- Table structure for table `gl_tb`
--

CREATE TABLE IF NOT EXISTS `gl_tb` (
  `gl_acc_no` int(11) NOT NULL,
  `acc_type_id` int(11) NOT NULL,
  `last_debite` float NOT NULL,
  `last_credit` float NOT NULL,
  `open_debite` float NOT NULL,
  `open_credit` float NOT NULL,
  `upd_debite` float NOT NULL,
  `upd_credit` float NOT NULL,
  `thi_debite` float NOT NULL,
  `thi_credit` float NOT NULL,
  `clo_debite` float NOT NULL,
  `clo_credit` float NOT NULL,
  PRIMARY KEY  (`gl_acc_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gl_tb`
--


-- --------------------------------------------------------

--
-- Table structure for table `gl_tra`
--

CREATE TABLE IF NOT EXISTS `gl_tra` (
  `ID` int(11) NOT NULL auto_increment,
  `TraNo` varchar(15) default NULL,
  `GLAccNo` varchar(25) default NULL,
  `TraDat` datetime default NULL,
  `ConDat` datetime default NULL,
  `Debit` double default NULL,
  `Credit` double default NULL,
  `Name` varchar(100) default NULL,
  `Add` varchar(255) default NULL,
  `Che` varchar(30) default NULL,
  `CheDat` datetime default NULL,
  `Des` varchar(255) default NULL,
  `CasBID` varchar(25) default NULL,
  `Typ` varchar(1) default NULL,
  `EmpNo` varchar(4) default NULL,
  `Upd` varchar(1) default NULL,
  `Cod` int(11) default NULL,
  PRIMARY KEY  (`ID`),
  KEY `{17746AB4-F0A0-4308-A3AA-90ED621EDD31}` (`GLAccNo`),
  KEY `CasBID` (`CasBID`),
  KEY `Che` (`Che`),
  KEY `Des` (`Des`),
  KEY `EmpNo` (`EmpNo`),
  KEY `GLAccNo` (`GLAccNo`),
  KEY `ID` (`ID`),
  KEY `TraNo` (`TraNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gl_tra`
--

INSERT INTO `gl_tra` (`ID`, `TraNo`, `GLAccNo`, `TraDat`, `ConDat`, `Debit`, `Credit`, `Name`, `Add`, `Che`, `CheDat`, `Des`, `CasBID`, `Typ`, `EmpNo`, `Upd`, `Cod`) VALUES
(1, '550', '1', '2009-02-01 20:52:42', '2009-02-20 20:52:51', 225.36, 4656.5, 'upul', 'Suresh', '14555', '2009-02-13 20:53:10', 'fdfddfdfdfdfd', 'dfdfdfdf', 'a', '01d', 'a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(50) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `add_date` varchar(50) NOT NULL,
  PRIMARY KEY  (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `description`, `add_date`) VALUES
(1, 'Implementation - Nelliya', 'Coop-MIS software installation start at nelliya sanasa society of wariyapola division', ' 2008.11.05'),
(2, 'Software launch - Ibbawala ', 'Completes of instrallation of Coop-MIS software and operning ceremany at Ibbawala sanasa society of Nikaweratiya division', '2008.11.01'),
(4, 'Software launch - Timbiriwewa ', 'Finalise of Coop-MIS software and operning ceremany at Timbitiwewa sanasa society of Nikaweratiya division. Chif guest - cooperative comissioner and chairmen of nikaweratiya sanasa union', '2008.10.31'),
(5, 'Software launch - Galatabendiwewa ', 'Completes of instrallation of Coop-MIS software and operning ceremany at Timbitiwewa sanasa society of Nikaweratiya division', '2008.10.23');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `index_no` int(50) NOT NULL auto_increment,
  `cus_id` varchar(100) NOT NULL,
  `organization_name` varchar(100) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `reg_date` varchar(50) NOT NULL,
  `organization_type` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `aga_division` varchar(100) NOT NULL,
  `district_id` varchar(50) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `con_no` varchar(50) NOT NULL,
  `con_person` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `permenent_emp` varchar(50) NOT NULL,
  `other_emp` varchar(50) NOT NULL,
  `no_of_members` varchar(50) NOT NULL,
  `decription` varchar(500) NOT NULL,
  `reg_p_file_upload` int(11) NOT NULL,
  `reg_p_email` int(11) NOT NULL,
  `reg_p_tec_sup` int(11) NOT NULL,
  `reg_p_other` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY  (`index_no`),
  UNIQUE KEY `cus_id` (`cus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`index_no`, `cus_id`, `organization_name`, `reg_no`, `reg_date`, `organization_type`, `address`, `aga_division`, `district_id`, `company_email`, `con_no`, `con_person`, `email`, `permenent_emp`, `other_emp`, `no_of_members`, `decription`, `reg_p_file_upload`, `reg_p_email`, `reg_p_tec_sup`, `reg_p_other`, `date`, `user_name`, `password`) VALUES
(1, '101', 'Bingiriya Sanasa Society', '', '', '', '', '', '20', '', '032-2246132', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', 'bingiriya', '202cb962ac59075b964b07152d234b70'),
(2, '102', 'Bodirajapura Sanasa Society', '', '', '', '', '', '20', '', '0777-117099', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(3, '103', 'Madampe Sanasa Society', '', '', '', '', '', '20', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(4, '104', 'Sahana Sanasa Society', '', '', '', '', '', '20', '', '032-4860495', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(5, '105', 'Merawala Sanasa Society', '', '', '', '', '', '20', '', '032-2220672', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(6, '106', 'Kachchakaduwa Sanasa Society', '', '', '', '', '', '20', '', '032-2240536', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(7, '107', 'Arukwatta Sanasa Society', '', '', '', '', '', '5', '', '011-2858564', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(8, '108', 'Bope Sanasa Society', '', '', '', '', '', '5', '', '011-2759784', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(9, '109', 'Telawala Sanasa Society', '', '', '', '', '', '5', '', '011-2605257', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(10, '110', 'Seetapura Sanasa Society', '', '', '', '', '', '5', '', '036-2230799', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(11, '111', 'Pannipitiya Sanasa Society', '', '', '', '', '', '5', '', '011-2839158', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(12, '112', 'Panaluwa Sanasa', '', '', '', '', '', '5', '', '060-2175972', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(13, '113', 'Wishwakala Sanasa', '', '', '', '', '', '5', '', '011-4974410', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(14, '114', 'Udahamulla Sanasa', '', '', '', '', '', '5', '', '011-2834814', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(15, '115', 'Small  & Medium Businessmen Coop Society  ', '', '', '', '', '', '15', '', '066-4924880', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(16, '116', 'Pahalawewa Sanasa Society', '', '', '', '', '', '15', '', '066-2285259', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(17, '117', 'Dambulla MPCCS', '', '', '', '', '', '15', '', '066-5682082', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(18, '118', 'Galewela MPCCS', '', '', '', '', '', '15', '', '066-2289214', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(19, '119', 'Godakanda North Sanasa', '', '', '', '', '', '6', '', '091-4931863', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(20, '120', 'Paranatanayamgoda Sanasa Society', '', '', '', '', '', '6', '', '091-5677338', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(21, '121', 'Pituwala Sanasa Society', '', '', '', '', '', '6', '', '091-2291657', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(22, '122', 'Uduwelivitiya Sanasa Society', '', '', '', '', '', '6', '', '091-5670889', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(23, '123', 'Niyagama Sanasa Society', '', '', '', '', '', '6', '', '091-5612553', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(24, '124', 'Yatalamatta Sanasa', '', '', '', '', '', '6', '', '091-2296782', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(25, '125', 'Watugedara Sanasa Society', '', '', '', '', '', '6', '', '091-2259640', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(26, '126', 'Ampegama Sanasa Society', '', '', '', '', '', '6', '', '060-2938069', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(27, '127', 'Gampha City Sanasa Society', '', '', '', '', '', '7', '', '033-5670320', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(28, '128', 'Hettimulla Sanasa Society', '', '', '', '', '', '7', '', '033-2272339', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(29, '129', 'Pahala Mapitigama Sanasa Society', '', '', '', '', '', '7', '', '011-2450943', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(30, '130', 'Biyagama Sanasa Society', '', '', '', '', '', '7', '', '011-2488177', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(31, '131', 'Boragodawatta Sanasa Society', '', '', '', '', '', '7', '', '011-2298571', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(32, '132', 'Mahabellana Sanasa Society', '', '', '', '', '', '10', '', '038-2244392', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(33, '133', 'Weekada Sanasa Society', '', '', '', '', '', '10', '', '060-2388533', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(34, '134', 'Nargoda North Sanasa Society', '', '', '', '', '', '10', '', '034-2281348', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(35, '135', 'Yatadolawatta Sanasa Society', '', '', '', '', '', '10', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(36, '136', 'Remunagoda Sanasa Society', '', '', '', '', '', '10', '', '034-2289815', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(37, '137', 'Rajawatta Sanasa Society', '', '', '', '', '', '10', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(38, '138', 'Hakahinna Sanasa Society', '', '', '', '', '', '11', '', '035-2282779', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(39, '139', 'liyangaswagura Sanasa', '', '', '', '', '', '9', '', '060-2814294', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(40, '140', 'Narendrasinghe Sanasa Society', '', '', '', '', '', '9', '', '081-2420190', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(41, '141', 'Senarathgama Sanasa Society', '', '', '', '', '', '9', '', '081-2491715', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(42, '142', 'Deegalla Sanasa Society', '', '', '', '', '', '12', '', '037-2283542', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(43, '143', 'Dummalasuriya Sanasa Society', '', '', '', '', '', '12', '', '077-6187748', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(44, '144', 'Kuliyapitiya City Sanasa Society', '', '', '', '', '', '12', '', '037-2282263', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(45, '145', 'Hapugammana Sanasa Society', '', '', '', '', '', '12', '', '037-4925820', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(46, '146', 'Mahagama Sanasa Society', '', '', '', '', '', '12', '', '037-2286277', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(47, '147', 'Kuliyapitiya Sanasa Union', '', '', '', '', '', '12', '', '037-2281239', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(48, '148', 'Ketapathwehera Sanasa Society', '', '', '', '', '', '12', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(49, '149', 'Wariyapola Pension Sanasa', '', '', '', '', '', '12', '', '037-2267846', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(50, '150', 'Ihalahalmillakotuwa Sanasa Society', '', '', '', '', '', '12', '', '037-4929108', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(51, '151', 'Kobeigane Sanasa Society', '', '', '', '', '', '12', '', '037-2293449', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(52, '152', 'Nikweratiya Sanasa Union', '', '', '', '', '', '12', '', '037-2260537', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(53, '153', 'Vithikuliya Sanasa Society', '', '', '', '', '', '12', '', '037-2260145', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(54, '154', 'Vithikuliya Sanasa Society', '', '', '', '', '', '12', '', '037-2260145', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(55, '155', 'Pahala Halmillakotuwa Sanasa Society', '', '', '', '', '', '12', '', '037-2293480', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(56, '156', 'Gurugoda Waduressa Sanasa Society', '', '', '', '', '', '12', '', '037-4902004', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(57, '157', 'Magallegama Sanasa Society', '', '', '', '', '', '12', '', '060-2379795', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(58, '158', 'Katagamuwa Sanasa Society', '', '', '', '', '', '12', '', '078-8872897', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(59, '159', 'Hatalawa Sanasa Society', '', '', '', '', '', '12', '', '037-5626010', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(60, '160', 'Timbitiwewa Sanasa Society', '', '', '', '', '', '12', '', '060-2986780', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(61, '161', 'Balagollagama Sanasa Society', '', '', '', '', '', '12', '', '037-5678220', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(62, '162', 'Ibbawala Sanasa Society', '', '', '', '', '', '12', '', 'Ibbawala Sanasa Society', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(63, '163', 'Galatabendiwewa Sanasa Society', '', '', '', '', '', '12', '', '037-5679692', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(64, '164', 'Ahugoda Sanasa Society', '', '', '', '', '', '12', '', '037-2237692', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(65, '165', 'Panaliya Sanasa Society', '', '', '', '', '', '12', '', '037-2244359', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(66, '166', 'Rathmalgoda Sanasa Society', '', '', '', '', '', '12', '', '037-2244713', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(67, '167', 'Pothuhera Sanasa Society', '', '', '', '', '', '12', '', '037-5622589', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(68, '168', 'Wadakada Sanasa', '', '', '', '', '', '12', '', '060-2372707', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(69, '169', 'Godawela Sanasa', '', '', '', '', '', '12', '', '037-2244984', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(70, '170', 'Polgahawela Union', '', '', '', '', '', '12', '', '037-2243659', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(71, '171', 'Imbulakanda Sanasa Society', '', '', '', '', '', '22', '', '045-2224682', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(72, '172', 'Karavita Sanasa Society', '', '', '', '', '', '22', '', '045-2279526', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(73, '173', 'Malwala Sanasa Society', '', '', '', '', '', '22', '', '045-2229582', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(74, '174', 'Demataluwa Women Sanasa Society', '', '', '', '', '', '12', '', '037-5670184', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(75, '175', 'Kohanegama SaÃ­sa Society', '', '', '', '', '', '12', '', '037-5677665', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(76, '176', 'Sundaragama Sanasa Society', '', '', '', '', '', '12', '', '037-5677610', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(77, '177', 'Wariyapola Sanasa Societies Union', '', '', '', '', '', '12', '', '037-2268068', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(78, '178', 'Pennitawa Sanasa Society', '', '', '', '', '', '12', '', '037-2293697', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(79, '179', 'Walpola Sanasa Society', '', '', '', '', '', '12', '', '035-5677996', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(80, '180', 'Rabukana Sanasa Society', '', '', '', '', '', '12', '', '060-2379586', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(81, '181', 'Dehenakagama Sanasa Society', '', '', '', '', '', '12', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(82, '182', 'Balagahayaya Sanasa Society', '', '', '', '', '', '12', '', '037-5677874', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(83, '183', 'Nelliya Sanasa Society', '', '', '', '', '', '12', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(84, '184', 'Mathara Distric Sanasa Unions', '', '', '', '', '', '14', '', '041-2222674', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(85, '185', 'Akuressa Sanasa Soceity', '', '', '', '', '', '14', '', '041-2283090', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(86, '186', 'Makulwewa Sanasa Society', '', '', '', '', '', '12', '', '037-2264417', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(87, '187', 'Lahugala Womens Coperative Society', '', '', '', '', '', '1', '', '060-2631124', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(88, '188', 'Panama Womens Coperative Society', '', '', '', '', '', '1', '', '060-2631236', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(89, '189', 'Pothuvil Womens Coperative Society', '', '', '', '', '', '1', '', '060-2631743', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(90, '190', 'Samandipoo Womens Coperative Society', '', '', '', '', '', '1', '', '060-2631717', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(91, '191', 'Munnakare Sanasa Society', '', '', '', '', '', '20', '', '031-5670876', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(92, '192', 'Agra State Cooperative Society', '', '', '', '', '', '19', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(93, '193', 'Kew State Cooperative Society', '', '', '', '', '', '19', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '10.11.08', '', ''),
(94, '250', 'Kasun', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 'aa', 'aa'),
(95, '100', 'Rajeeda Holdings,Head Office', '', '', 'Office', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 'admin', 'admin'),
(96, '99', 'Wasana', '04444', '2006-01-16', 'Service', 'Wasana,Godakanda,Galle', 'Galle', '6', 'wasanaservicecenter@gmail.com', '0715281452', '0715281452', 'upulsuresh@gmail.com', '8', '2', '10', 'Service', 1, 0, 1, 0, '06.02.09', 'upul', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL auto_increment,
  `ta_id` varchar(100) NOT NULL,
  `cus_id` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `type_of_work` varchar(500) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `previouse_visit` date NOT NULL,
  `note` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `service`
--


-- --------------------------------------------------------

--
-- Table structure for table `technical_advisor`
--

CREATE TABLE IF NOT EXISTS `technical_advisor` (
  `ta_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technical_advisor`
--

INSERT INTO `technical_advisor` (`ta_id`, `name`, `location`, `address`, `mobile`, `email`, `user_name`, `password`) VALUES
('001', 'Amila', 'Kaduwela', 'Kaduwela', 711234567, 'amila@yahoo.com', 'amila', '202cb962ac59075b964b07152d234b70'),
('002', 'Thushara', 'Nugegoda', 'Nugegoda', 711234567, 'thushara@yahoo.com', 'thushara', '202cb962ac59075b964b07152d234b70'),
('003', 'Rohitha', 'Kalutara', 'Kalutara', 71789456, 'rohitha@yahoo.com', 'rohitha', '202cb962ac59075b964b07152d234b70'),
('004', 'Upali', 'Kurunegala', 'Kurunegala', 71456789, 'upali@yahoo.com', 'upali', '202cb962ac59075b964b07152d234b70'),
('005', 'Kasun', 'office', 'office', 776891652, 'dkchamara@gmail.com', 'a', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `technical_advisor_task`
--

CREATE TABLE IF NOT EXISTS `technical_advisor_task` (
  `adv_task_id` int(11) NOT NULL auto_increment,
  `ta_id` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `cus_id` varchar(100) NOT NULL,
  `duty` varchar(500) NOT NULL,
  `note` varchar(500) NOT NULL,
  `next_visit` date NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `business_note` varchar(500) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY  (`adv_task_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `technical_advisor_task`
--

INSERT INTO `technical_advisor_task` (`adv_task_id`, `ta_id`, `date`, `start_time`, `end_time`, `cus_id`, `duty`, `note`, `next_visit`, `contact_person`, `business_note`, `date_time`) VALUES
(1, '002', '2008-10-29', '09:25:00', '14:25:00', '101', 'update', 'note\r\naaaa', '2008-12-25', 'Upul', 'asasasasasa', '2008-10-29 10:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE IF NOT EXISTS `upload_files` (
  `file_id` int(11) NOT NULL auto_increment,
  `record_id` int(11) NOT NULL,
  `file_name` varchar(150) NOT NULL,
  `file_data` varchar(150) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `record_type` varchar(50) NOT NULL,
  PRIMARY KEY  (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `upload_files`
--


-- --------------------------------------------------------

--
-- Table structure for table `up_db`
--

CREATE TABLE IF NOT EXISTS `up_db` (
  `up_id` int(11) NOT NULL auto_increment,
  `cus_id` varchar(100) NOT NULL,
  `organization_name` varchar(100) NOT NULL,
  `name_person` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `backup_name` varchar(50) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `backup_location` varchar(50) NOT NULL,
  `sys_date_time` datetime NOT NULL,
  PRIMARY KEY  (`up_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `up_db`
--

INSERT INTO `up_db` (`up_id`, `cus_id`, `organization_name`, `name_person`, `date`, `backup_name`, `file_name`, `backup_location`, `sys_date_time`) VALUES
(1, '101', 'Bingiriya Sanasa Society', 'Upul', '2009-08-06', 'Suresh', 'rajeeda_copy5.sql', '../upload_images/back_up/Bingiriya Sanasa Society/', '2009-02-11 00:00:00'),
(2, '101', 'Bingiriya Sanasa Society', 'Upul', '2005-06-04', 'Rajeeda', 'upload_files_copy1.sql', '../upload_images/back_up/Bingiriya Sanasa Society/', '2009-02-11 01:04:16'),
(6, '101', 'Bingiriya Sanasa Society', 'aaaaaa', '2009-02-10', 'aaaaaaaa', 'payroll.sql', '../upload_images/back_up/Bingiriya Sanasa Society/', '2009-02-11 05:15:47'),
(7, '101', 'Bingiriya Sanasa Society', 'bbbbbbbbbbbb', '2009-02-03', 'bbbbbbbbbbbbbbbbb', 'functionlist.txt', '../upload_images/back_up/Bingiriya Sanasa Society/', '2009-02-11 05:16:08'),
(8, '101', 'Bingiriya Sanasa Society', 'cccccccccc', '2009-02-11', 'cccccccccccccccc', 'checkin.php', '../upload_images/back_up/Bingiriya Sanasa Society/', '2009-02-11 05:16:19'),
(9, '101', 'Bingiriya Sanasa Society', 'dddddddddddddddd', '2009-02-11', 'ddddddddddddddd', 'accountmanager.php', '../upload_images/back_up/Bingiriya Sanasa Society/', '2009-02-11 05:16:32'),
(10, '101', 'Bingiriya Sanasa Society', 'eeeeeeeeeeeee', '2009-02-01', 'eeeeeeeeeeeee', 'header.php', '../upload_images/back_up/Bingiriya Sanasa Society/', '2009-02-11 05:16:44'),
(11, '101', 'Bingiriya Sanasa Society', 'ffffffffffffffff', '2009-02-14', 'fffffffffff', 'emaildept.php', '../upload_images/back_up/Bingiriya Sanasa Society/', '2009-02-11 05:17:09'),
(12, '101', 'Bingiriya Sanasa Society', 'ggggggggg', '2009-02-05', 'ggggggggggg', 'precheckout.php', '../upload_images/back_up/Bingiriya Sanasa Society/', '2009-02-11 05:17:22'),
(13, '101', 'Bingiriya Sanasa Society', 'hhhhhhhhh', '2009-01-27', 'hhhhhh', 'install.sh', '../upload_images/back_up/Bingiriya Sanasa Society/', '2009-02-11 05:17:35'),
(14, '101', 'Bingiriya Sanasa Society', 'iiiiiiiiiiiiii', '2009-02-05', 'iiiiiiiiiiiiiiiiiiiiii', 'round.php', '../upload_images/back_up/Bingiriya Sanasa Society/', '2009-02-11 05:17:55'),
(15, '101', 'Bingiriya Sanasa Society', 'jjjjjjjjjjjjjjjjjjjjj', '2009-02-05', 'jjjjjjjjjjjjjjjjjjjjjjjjj', 'index1.php', '../upload_images/back_up/Bingiriya Sanasa Society/', '2009-02-11 05:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `uses`
--

CREATE TABLE IF NOT EXISTS `uses` (
  `adminId` int(11) NOT NULL auto_increment,
  `userName` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `active` varchar(15) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY  (`adminId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `uses`
--

INSERT INTO `uses` (`adminId`, `userName`, `pass`, `email`, `active`, `reg_date`) VALUES
(1, 'admin', 'admin', 'dkchamara@gmail.com', '1', '2009-01-12');
