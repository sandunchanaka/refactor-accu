-- phpMyAdmin SQL Dump
-- version 2.11.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2009 at 01:42 AM
-- Server version: 5.0.51
-- PHP Version: 4.4.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Brixt1_craigslist`
--

-- --------------------------------------------------------

--
-- Table structure for table `craigs_city`
--

CREATE TABLE `craigs_city` (
  `city_id` varchar(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`city_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `craigs_city`
--

INSERT INTO `craigs_city` (`city_id`, `city_name`) VALUES
('amp', 'Ampara'),
('anu', 'Anuradhapura'),
('bad', 'Badulla'),
('bat', 'Batticaloa'),
('col', 'Colombo'),
('gal', 'Galle'),
('gam', 'Gampaha'),
('ham', 'Hambantota'),
('jaf', 'Jaffna'),
('kal', 'Kalutara'),
('kan', 'Kandy'),
('keg', 'Kegalle'),
('kil', 'Kilinochchi'),
('kur', 'Kurunegala'),
('man', 'Mannar'),
('mtl', 'Matale'),
('mtr', 'Matara'),
('mon', 'Monaragala'),
('mul', 'Mullaitivu'),
('nuw', 'Nuwara Eliya'),
('pol', 'Polonnaruwa'),
('put', 'Puttalam'),
('rat', 'Ratnapura'),
('tri', 'Trincomalee'),
('vav', 'Vavuniya');

-- --------------------------------------------------------

--
-- Table structure for table `craigs_community`
--

CREATE TABLE `craigs_community` (
  `community_id` int(20) NOT NULL auto_increment,
  `community_name` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`community_id`),
  UNIQUE KEY `id` (`community_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=114 ;

--
-- Dumping data for table `craigs_community`
--

INSERT INTO `craigs_community` (`community_id`, `community_name`) VALUES
(100, 'Activities'),
(101, 'Artists'),
(102, 'Childcare'),
(103, 'General'),
(104, 'Groups'),
(105, 'Pets'),
(106, 'Events'),
(107, 'Lost+Found'),
(108, 'Musicians'),
(109, 'Local News'),
(110, 'Politics'),
(111, 'Rideshare'),
(112, 'Volunteers'),
(113, 'Classes');

-- --------------------------------------------------------

--
-- Table structure for table `craigs_for_sale`
--

CREATE TABLE `craigs_for_sale` (
  `for_sale_id` int(20) NOT NULL auto_increment,
  `for_sale_name` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`for_sale_id`),
  UNIQUE KEY `id` (`for_sale_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED AUTO_INCREMENT=231 ;

--
-- Dumping data for table `craigs_for_sale`
--

INSERT INTO `craigs_for_sale` (`for_sale_id`, `for_sale_name`) VALUES
(200, 'Barter'),
(201, 'Business'),
(202, 'Boats'),
(203, 'Books'),
(204, 'Computer'),
(205, 'Free'),
(206, 'Furniture'),
(207, 'General'),
(208, 'Jewelry'),
(209, 'Material'),
(210, 'RVS'),
(211, 'Sporting'),
(212, 'Tickets'),
(213, 'Tools'),
(214, 'Arts+Crafts'),
(215, 'Auto Parts'),
(216, 'Baby+Kids'),
(217, 'Cars+Trucks'),
(218, 'CDS/DVD/VHS'),
(219, 'Clothes+ACC'),
(220, 'Collectibles'),
(221, 'Electronics'),
(222, 'Farm+Garden'),
(223, 'Games+Toys'),
(224, 'Garage Sale'),
(225, 'Household'),
(226, 'Motorcycles'),
(227, 'Music Instr'),
(228, 'Photo+Video'),
(229, 'Wanted'),
(230, 'Bikes');

-- --------------------------------------------------------

--
-- Table structure for table `craigs_gigs`
--

CREATE TABLE `craigs_gigs` (
  `gigs_id` int(20) NOT NULL auto_increment,
  `gigs_name` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`gigs_id`),
  UNIQUE KEY `id` (`gigs_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=308 ;

--
-- Dumping data for table `craigs_gigs`
--

INSERT INTO `craigs_gigs` (`gigs_id`, `gigs_name`) VALUES
(300, 'Computer'),
(301, 'Creative'),
(302, 'Crew'),
(303, 'Domestic'),
(304, 'Labor'),
(305, 'Writing'),
(306, 'Talent'),
(307, 'Adult');

-- --------------------------------------------------------

--
-- Table structure for table `craigs_housing`
--

CREATE TABLE `craigs_housing` (
  `housing_id` int(20) NOT NULL auto_increment,
  `housing_name` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`housing_id`),
  UNIQUE KEY `id` (`housing_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=409 ;

--
-- Dumping data for table `craigs_housing`
--

INSERT INTO `craigs_housing` (`housing_id`, `housing_name`) VALUES
(400, 'Apts / Housing'),
(401, 'Rooms / Shared'),
(402, 'Sublets / Temporary'),
(403, 'Housing Wanted'),
(404, 'Housing Swap'),
(405, 'Vacation Rentals'),
(406, 'Parking / Storage'),
(407, 'Office / Commercial'),
(408, 'Real Estate For Sale');

-- --------------------------------------------------------

--
-- Table structure for table `craigs_jobs`
--

CREATE TABLE `craigs_jobs` (
  `jobs_id` int(20) NOT NULL auto_increment,
  `jobs_name` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`jobs_id`),
  UNIQUE KEY `id` (`jobs_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=533 ;

--
-- Dumping data for table `craigs_jobs`
--

INSERT INTO `craigs_jobs` (`jobs_id`, `jobs_name`) VALUES
(500, 'Accounting+Finance'),
(501, 'Admin / Office'),
(502, 'Arch / Engineering'),
(503, 'Art / Media / Design'),
(504, 'Biotech / Science'),
(505, 'Business / Mgmt'),
(506, 'Customer Service'),
(507, 'Education'),
(508, 'Food / Bev / Hosp'),
(509, 'General Labor'),
(510, 'Government'),
(511, 'Human Resources'),
(512, 'Internet Engineers'),
(513, 'Legal / Paralegal'),
(514, 'Manufacturing'),
(515, 'Marketing / PR / AD'),
(516, 'Medical / Health'),
(517, 'Nonprofit Sector'),
(518, 'Real Estate'),
(519, 'Retail / Wholesale'),
(520, 'Sales / Biz Dev'),
(521, 'Salon / SPA / Fitness'),
(522, 'Security'),
(523, 'Skilled Trade / Craft'),
(524, 'Software / QA / DBA'),
(525, 'Systems / Network'),
(526, 'Technical Support'),
(527, 'Transport'),
(528, 'TV / Film / Video'),
(529, 'Web / Info Design'),
(530, 'Writing / Editing'),
(531, '[ETC]'),
(532, '[Part Time]');

-- --------------------------------------------------------

--
-- Table structure for table `craigs_personals`
--

CREATE TABLE `craigs_personals` (
  `personals_id` int(20) NOT NULL auto_increment,
  `personals_name` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`personals_id`),
  UNIQUE KEY `id` (`personals_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=609 ;

--
-- Dumping data for table `craigs_personals`
--

INSERT INTO `craigs_personals` (`personals_id`, `personals_name`) VALUES
(600, 'Strictly Platonic'),
(601, 'Women Seek Somen'),
(602, 'Women Seeking Men'),
(603, 'Men Seeking Women'),
(604, 'Men Seeking Men'),
(605, 'Misc Romance'),
(606, 'Casual Encounters'),
(607, 'Missed Connections'),
(608, 'Rants And Raves');

-- --------------------------------------------------------

--
-- Table structure for table `craigs_services`
--

CREATE TABLE `craigs_services` (
  `services_id` int(20) NOT NULL auto_increment,
  `services_name` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`services_id`),
  UNIQUE KEY `id` (`services_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=717 ;

--
-- Dumping data for table `craigs_services`
--

INSERT INTO `craigs_services` (`services_id`, `services_name`) VALUES
(700, 'Beauty'),
(701, 'Computer'),
(702, 'Creative'),
(703, 'Event'),
(704, 'Financial'),
(705, 'Legal'),
(706, 'Lessons'),
(707, 'Adult'),
(708, 'Automotive'),
(709, 'Household'),
(710, 'Labor/Move'),
(711, 'Skill''d Trade'),
(712, 'Real Estate'),
(713, 'Sm Biz Ads'),
(714, 'Therapeutic'),
(715, 'Travel/Vac'),
(716, 'Write/ED/TR8');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(25) NOT NULL auto_increment,
  `email_ad` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `confirm` int(11) NOT NULL,
  `reg_date` date NOT NULL,
  `last_log_date` date NOT NULL,
  PRIMARY KEY  (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1004 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `email_ad`, `pass`, `confirm`, `reg_date`, `last_log_date`) VALUES
(1000, 'upul@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2009-06-11', '2009-06-12');
