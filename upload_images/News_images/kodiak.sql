-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2009 at 05:06 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `kodiak`
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
  `access_level` int(11) NOT NULL,
  `add_date` date default NULL,
  `update_date` date default NULL,
  PRIMARY KEY  (`adminId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `userName`, `pass`, `email`, `access_level`, `add_date`, `update_date`) VALUES
(1, 'Admin', '123', 'sandunchanaka@gmail.com', 0, NULL, NULL),
(2, 'Ishara', '111', 'asdasd@gasdmi.cpm', 1, '2009-01-06', '2009-01-06'),
(3, 'Chanaka', '456', 'sandunchnka@gmail.com', 22, '2009-01-19', '2009-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `artical_categary`
--

CREATE TABLE IF NOT EXISTS `artical_categary` (
  `cat_id` int(11) NOT NULL auto_increment,
  `title` varchar(150) NOT NULL,
  PRIMARY KEY  (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `artical_categary`
--

INSERT INTO `artical_categary` (`cat_id`, `title`) VALUES
(1, 'home'),
(2, 'news'),
(3, 'sign up text'),
(4, 'kodiak hours'),
(5, 'contact'),
(6, 'phone'),
(7, 'directions'),
(8, 'kodiak event'),
(9, 'kodiak menu'),
(10, 'parties'),
(11, 'virtual tours'),
(12, 'Menu'),
(13, 'Tours');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `article_id` int(11) NOT NULL auto_increment,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `publushed` int(11) NOT NULL,
  `add_date` date NOT NULL,
  `update_date` date default NULL,
  `display` int(11) NOT NULL,
  PRIMARY KEY  (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `title`, `description`, `publushed`, `add_date`, `update_date`, `display`) VALUES
(1, 'The Kodiak Bar & Grill is Anchorage''s newest alternative night club.', '<p>The bar was founded by Doug &amp; Kalvin long time life partners. Their vision was to bring their vast knowledge of Las Vegas &ldquo;Alternative Life Style Bar&rdquo; They wanted to show how classy and upscale an alternative lifestyle bar could be. The bar boast state of the art TV monitors, Wood Floors throughout and high end type furniture with a bar atmosphere second to none in Anchorage. You will most certainly have fun on our pole dance floor with wall mirrors. Join many of our patrons as they dance the night away well into the night even after all other bars close throughout Anchorage. The Kodiak also boast an unbeatable after hours breakfast with reasonable prices</p>', 1, '0000-00-00', '2009-02-24', 1),
(3, 'KODIAK NEWS', '<p>Kodiak will be launching our new winter menu on the 12th December which will see some exciting new dishes to go side by side with some old favourites. Expect to see hearty and tasty dishes...</p>', 1, '2009-01-16', '2009-02-24', 2),
(6, 'Hours', '<p>Lunch :<br />\r\nMonday &ndash; Friday, 12:00PM - 2:15PM<br />\r\n<br />\r\nBar Opens: 3 p.m. to 2:30 a.m.<br />\r\nSunday: 5:00 p.m. to 2:30 a.m.<br />\r\n<br />\r\nDinner<br />\r\nMonday &ndash; Thursday, 5:30PM - 10:00PM<br />\r\nFriday, 5:30PM - 11:00PM<br />\r\nSaturday, 5:00PM &ndash; 11:00PM<br />\r\nSunday, 5:00PM &ndash; 10:00PM</p>', 1, '2009-02-24', NULL, 4),
(7, 'Contact :', '<p>Kodiak Bar &amp; Grill<br />\r\n225 East 5th Avenue<br />\r\nAnchorage , AK 99501<br />\r\nAcross from Office Depot on Fifth Avenue</p>', 1, '2009-02-24', NULL, 5),
(8, 'Phone :', '<p>907 - 258 - 5233</p>', 1, '2009-02-24', NULL, 6),
(9, 'Kodiak Events', '<p><strong>Monday</strong> &ndash; Join us for Monday night Football.<br />\r\n<br />\r\n<strong>Tuesday </strong> -  Karaoke Night<br />\r\n<br />\r\n<strong> Wednesday </strong> Join us for Hump night &quot;come on guys the weekends almost here&quot; Join us for Drag Queen bingo starting at 9 p.m. Prizes for each round include products, gift cards and other &quot;fun&quot; stuff donated by the local community to raise money toward different charitys that support the GLBT community. Grand Prize is $200.00. Cards cost $1.00 However, higher donations are accepted. There will be four rounds of bingo and you may buy as many cards as you wish per round. Remember all monies go to support a good cause in the community so bring ALL your friends.<br />\r\n<br />\r\n<strong>Thursday</strong> -  Movie Night:  Join us on Thursday for high definition movies on our plasma TV''s.<br />\r\n<br />\r\n<strong>Friday </strong> - Thank God Its Friday&hellip;Time to relax..Time to let your hair down&hellip;ENJOY!!!<br />\r\nOur friendly staff will encourage you to bring your week to a close with that drink that will allow you to relax and perhaps either get your groove on or shake your groove thing. In any case our friendly bartenders or waiters will put you in your right frame of mind to enjoy your weekend. Enjoy our high definition TV''s playing high energy music videos. Don''t forget to bring your friends! As always enjoy our $2.00 Jello Shots.<br />\r\n<br />\r\n<strong> Saturday </strong> -  Well weekend is almost over so come join us for another night of entertainment.<br />\r\n<br />\r\n<strong> Sunday </strong> - Join us for our famous happy hang over Bloody Mary hangover special just $4.00. It''s the best way to cure a weekend hangover. Later enjoy our Always FREE Diner hosted by none other than Kalven the magnificent. Remember Prior to the start of Diner service we will host a Do or Die Bingo Game and you could win $200.00. One free game card at entr&eacute;e of door and then additional game cards cost $1.00. Again, all proceeds go to a GLB charity.</p>', 1, '2009-02-24', NULL, 8),
(10, 'welcome to our parties', '<p>Let us cater all your private parties, either in our downstairs or upstairs area. If you choose to use the upstairs area we can close the bar up to 10 p.m. after which regular patrons may join your fun. Meet with Doug and he can give you a price either way</p>', 1, '2009-02-24', NULL, 10),
(11, 'welcome to our menu', '<p>(Will be loaded latter)</p>', 1, '2009-02-24', NULL, 12),
(12, 'Virtual Tour ', '<p>(To be loaded later)</p>', 1, '2009-02-24', NULL, 13);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL auto_increment,
  `event_name` varchar(200) NOT NULL,
  `event_start_date` varchar(50) default NULL,
  `event_end_date` varchar(50) default NULL,
  `event_image` varchar(200) default NULL,
  `short_desc` varchar(200) NOT NULL,
  `long_desc` text NOT NULL,
  `event_home` int(11) NOT NULL,
  `add_date` date default NULL,
  `update_date` date default NULL,
  PRIMARY KEY  (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_start_date`, `event_end_date`, `event_image`, `short_desc`, `long_desc`, `event_home`, `add_date`, `update_date`) VALUES
(1, 'Event name Required', '2008-12-21', '2008-12-21', '0014410-R1-046-21A.jpg', 'we host some of the best shows in anchorage. join we ewery friday for trivia and win a trip to hawai . place make rervations. <br><br><strong> thank you ben </strong>', '', 1, '2008-12-22', '2008-12-22'),
(2, 'XMas Special', '2008-12-25', '2008-12-25', '0014410-R1-004-0A.jpg', 'They say it is the most important meal of the day ...', '', 0, '2008-12-21', '2008-12-21'),
(3, '31 st Night', '2008-12-31', '2008-12-31', '0014410-R1-046-21A.jpg', 'Special Offers for 31 st night ', '', 0, '2008-12-21', '2008-12-21'),
(8, 'Nugegoda New Crimas Party', '2005-12-04', '2005-10-05', NULL, 'asdfadsf ', '<p>adf ad fad fad fad fad fadf adfad fad f</p>', 0, '2008-12-25', NULL),
(9, 'Galle Xmas daya edit ', '2008-05-05', '2008-05-05', '0014410-R1-022-9A.jpg', 'asd    hg hffg hg', '<p><b>&nbsp;asdassfd dystydrtryu hhg htrhsh addsgsf gfdfdkjk hdkd hfk jkk k k jkjfijgkljdfkl dfgdf gdfgd</b> <img alt="" src="/kodiak_autocode/admin/FCKeditor/editor/images/smiley/msn/angry_smile.gif" /></p>', 0, '2008-12-25', NULL),
(10, 'asd as', '2008-05-04', '0000-00-00', NULL, 'asda', '<p>as dassadasd</p>', 0, '2008-12-27', NULL),
(11, 'Join us for Monday night Football edit ', 'Monday edit ', NULL, '8.jpg', 'Join us for Monday night  Football eeeeeeeeeeeeee', '<p>Join us for Monday night Football eeeeeeeeeeeeeeeeeee</p>', 0, '2009-01-06', NULL),
(12, 'sd', ' fsdf ', NULL, NULL, 'sd d ', '<p>sd fsdf sd fsdf</p>', 0, '2009-01-06', NULL),
(13, 'test New Event 44', '21 th of January44', NULL, NULL, 'short dESC4444', '<p>dETAILs Description4444</p>', 0, '2009-01-19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `friend_recover_id` int(11) NOT NULL auto_increment,
  `name` varchar(250) default NULL,
  `f_address` varchar(200) default NULL,
  `phone_no` varchar(100) default NULL,
  `fax` varchar(100) default NULL,
  `e_mail` varchar(100) default NULL,
  `url` varchar(100) default NULL,
  `imag` varchar(100) default NULL,
  PRIMARY KEY  (`friend_recover_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `friends`
--


-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `image_id` int(11) NOT NULL auto_increment,
  `image_name` varchar(100) default NULL,
  `alt_text` varchar(200) default NULL,
  `image_cat` varchar(100) default NULL,
  PRIMARY KEY  (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`image_id`, `image_name`, `alt_text`, `image_cat`) VALUES
(2, 'bill_field_delivering_an_opening_message.jpg', 'Image Gallery 2008', 'Image Gallery 2008'),
(4, 'building_castle_in_the_air__a_vision_exercise.jpg', 'Image Gallery 2008', 'Image Gallery 2008'),
(6, 'cimg4212_copy1.jpg', 'Image Gallery 2008', 'Image Gallery 2008'),
(8, NULL, 'Image Gallery 2008', 'Image Gallery 2008'),
(9, 'dsc01989.jpg', 'Image Gallery 2008', 'Image Gallery 2008'),
(10, 'dsc01996.jpg', 'Image Gallery 2008', 'Image Gallery 2008'),
(11, 'img_2562_copy1.jpg', 'Image Gallery 2007New Image Catagery', 'Image Gallery 2007'),
(12, 'krr10d.jpg', 'Image Gallery 2008', 'Image Gallery 2008'),
(13, 'vietnamese_participants_prepare_action_plan.jpg', 'Image Gallery 2007', 'Image Gallery 2007'),
(14, 'img_2381_copy2.jpg', 'Image Gallery 2007', 'Image Gallery 2007'),
(15, 'img_1531.jpg', 'Image Gallery 2007', 'Image Gallery 2007'),
(16, NULL, 'Image Gallery 2007_E', 'Image Gallery 2007'),
(17, 'img_2266.jpg', 'Image Gallery 2007', 'Image Gallery 2007'),
(18, 'dscn1412.jpg', 'Image Gallery 2007', 'Image Gallery 2007'),
(19, 'dsc02684_copy1.jpg', 'Image Gallery 2007', 'Image Gallery 2007'),
(20, 'dscn0588.jpg', 'Image Gallery 2007', 'Image Gallery 2007'),
(24, '0014410-R1-020-8A.jpg', 'New Image Gallery Images', 'Image Gallery 2000'),
(25, '35465821.bmp', 'Test Image Catagery', 'test new catagaery edit'),
(26, '8.jpg', 'Test Image Catagery', 'test new catagaery edit');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `menu_id` int(11) NOT NULL auto_increment,
  `menu_title` varchar(150) default NULL,
  `menu_desc` text,
  `menu_type` varchar(10) default NULL,
  `menu_image` varchar(100) default NULL,
  `pdf_menu` varchar(100) default NULL,
  `add_date` date default NULL,
  `update_date` date default NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY  (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_title`, `menu_desc`, `menu_type`, `menu_image`, `pdf_menu`, `add_date`, `update_date`, `order_id`) VALUES
(1, 'APPETIZERS', 'The “Basket Case” $5\r\nA basket of one of your choice: Hand-cut French fries, waffle fries, Cajun fries or onion rings. \r\nCheese Quesadillas $8\r\nTwo flour tortillas loaded with pico de gallo, Monterey jack and cheddar cheese server with sour cream and guacamole. \r\nAdd grilled vegetables $9\r\nAdd grilled chicken $10 \r\nAdd grilled steak or shrimp $11 \r\nMozzarella Stix $7\r\nFour beer-battered mozzarella cheese stix fried golden brown & served with a side of marinara sauce for “double dipping”. \r\nUltra Thin Crust Pizza $8\r\nOur own thin crust pie with home-made tomato sauce and shredded mozzarella cheese. \r\nToppings $2 each additional. \r\nSpinach and Artichoke Dip $9\r\nChopped spinach & artichoke hearts mixed with our own “secret blend” then served hot with melted Monterey jack cheese and crispy tortilla chips for “dipping”. \r\nChicken Tenders $9\r\nCorn-flake crusted chicken strips served with a side of honey mustard. \r\nOr, if your heart desires: \r\n“Buffalo-Style” – we’ll smother them in buffalo wing sauce and serve ‘em with bleu cheese dressing. \r\nPotato “Skinners” $9\r\nPotato skins (8 pieces) topped with melted Monterey jack & cheddar cheese, hickory-smoked bacon bits and sour cream on the side. Or “Veggie-style” skins served with mixed vegetables. \r\nMad River “Mini-Bites” A Mad River Favorite $10\r\nThree bite-sized burgers served with melted American cheese, lettuce and tomato. \r\nSteak Tips “Montana Style” $10\r\nGrilled and marinated sirloin steak “tips” served on toasted Italian bread. \r\nWith melted Monterey jack cheese $11 \r\n', 'a', NULL, NULL, '2008-10-03', '2008-10-03', 0),
(4, 'asdasdasd', '<p>asdasdasdasd</p>', 'Y', 'news.jpg', '', '2008-10-02', '2008-10-02', 0),
(5, 'sdssdsd', '<p>sdsd</p>', 'Y', 'technical_reports.jpg', 'Array', '2008-10-02', '2008-10-02', 0),
(6, 'Ishara Menu new d EE', '<p>sadasdasdsadasddEEE</p>', 'Y', 'logo_3.jpg', 'accu_management_report_march_2007.pdf', '2008-10-03', '2008-12-11', 0),
(8, 'Ishara Title  New Edit q', '<p>aaa netst  sdf sd f&nbsp; edit kjlkQ EDIT</p>\r\n<br />', '1', NULL, NULL, '0000-00-00', '2008-12-25', 2),
(9, 'Test Menu Title new', 'Test Body', 'economic', 'C:\\Users\\Osama\\Desktop\\Kodiac_last\\images\\upload\\0014410-R1-004-0A.jpg', 'C:\\Users\\Osama\\Desktop\\Kodiac_last\\images\\upload\\0014410-R1-020-8A.jpg', '2008-12-23', NULL, 1),
(17, 'ffffffffffffffffffffffffffffffffffffffff', 'fffffffffffffffffffffff', 'economic', 'frame_gallery.jpg', NULL, '2008-12-23', NULL, 1),
(20, 'New Food Menu Documet', '<p>sdf d ffsd sfjgfgjdfkgjkdfj fdgijdfigudifjgidf dfjgijdfigjdfijgkdfjkgdfgidfjgjdfigfd&nbsp; g ifdgjdfjgkdf gdfjkgdfkgjdfkjgkdfjgdfgkdfjgkjjdfjgdfkgjdfjgjdfkgjkdfjgkdfkgkdfgkjdfkgkdfkgjdkfjgdfkgjkdfgdfkjgkjdfkg</p>', '1', NULL, NULL, '2008-12-27', '2008-12-27', 1),
(21, 'New Kodiac Menu ', '<p>Description Of the new Menu pls Enter an Menu Descriotion</p>', '1', NULL, NULL, '2009-01-06', '2009-01-06', 5),
(22, 'New Test Menu_e', '<p>Menu Test cording__e</p>', '0', NULL, NULL, '2009-01-19', '2009-01-19', 20),
(23, 'Insert Testing menu_e', '<p>test eeeeeeeeeeeeeeeeeeeeeeeeeeeeeee</p>', 'Type 2', NULL, NULL, '2009-01-19', '2009-01-19', 15);

-- --------------------------------------------------------

--
-- Table structure for table `menu_type`
--

CREATE TABLE IF NOT EXISTS `menu_type` (
  `menu_type_id` int(11) NOT NULL auto_increment,
  `menu_type_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`menu_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menu_type`
--

INSERT INTO `menu_type` (`menu_type_id`, `menu_type_name`) VALUES
(1, 'Type 1'),
(2, 'Type 2');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL auto_increment,
  `news_title` varchar(150) default NULL,
  `short_desc` varchar(200) default NULL,
  `desc` text,
  `news_date` varchar(100) default NULL,
  `news_image` varchar(100) default NULL,
  `add_date` date default NULL,
  `update_date` date default NULL,
  PRIMARY KEY  (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `short_desc`, `desc`, `news_date`, `news_image`, `add_date`, `update_date`) VALUES
(1, 'New Winter Menu', 'Kodiak will be launching our new winter menu on the 12th December which will see some exciting new dishes to go side by side with some old favourites. Expect to see hearty and tasty dishes made from f', 'Kodiak will be launching our new winter menu on the 12th December which will see some exciting new dishes to go side by side with some old favourites. Expect to see hearty and tasty dishes made from fresh, local produce. Our new menu is available to download now so click on Dining to start deciding what you will choose first!', '02 November 2008', '', '2008-12-26', '2008-12-26'),
(2, 'Photo Gallery', 'New photographs have been added to our photo gallery so check them out as you might just see some familiar faces. For regular photo updates, keep logging on.', 'New photographs have been added to our photo gallery so check them out as you might just see some familiar faces. For regular photo updates, keep logging on.', '18 October 2008', '', '2008-12-26', '2008-12-26'),
(3, 'Sundays at Kodiak', 'As winter draws ever nearer, the ideal way to spend your Sunday is tucking into our fantastic, locally reared roast here at Kodiak. Prices start from just £8.95 for one course or £12.95 for a fantasti', 'As winter draws ever nearer, the ideal way to spend your Sunday is tucking into our fantastic, locally reared roast here at Kodiak. Prices start from just £8.95 for one course or £12.95 for a fantastic two course deal.', '18 October 2008', '', '2008-12-26', '2008-12-26'),
(4, 'New Test cdadta As News edit ', 'test Tes tets Tes tette Test tetst Tet ttest tetst \r\nedit asdf', '<p>Damio ndami ndamai MdamDamai Dami Dami Dami asEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE</p>', '21 th of junery ee', NULL, '2009-01-06', '2009-01-06'),
(5, 'test New News ee', 'tet dataeee', '<p>testeeeee</p>', '21 th of dexceee', NULL, '2009-01-19', '2009-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `package_id` int(11) NOT NULL auto_increment,
  `package_name` varchar(250) default NULL,
  `package_desc` text,
  `package_image` varchar(100) default NULL,
  `pdffile` varchar(100) default NULL,
  `add_date` date default NULL,
  `update_date` date default NULL,
  PRIMARY KEY  (`package_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_name`, `package_desc`, `package_image`, `pdffile`, `add_date`, `update_date`) VALUES
(1, 'White Water Package', NULL, NULL, NULL, NULL, NULL),
(2, 'Blue Waterzc Package', ' fsd f', 'fs sd', ' sdf', NULL, '2008-12-26'),
(3, 'MR Platinum Package', NULL, NULL, NULL, NULL, NULL),
(4, 'Party Menu Packages', NULL, NULL, NULL, NULL, NULL),
(8, 'New Party Package', 'New post ', 'cc', 'c c', '2000-02-02', NULL),
(9, 'New Party Part Xmas', 'Xmas', '0014410-R1-018-7A.jpg', 'napa_food_menu.pdf', '0000-00-00', NULL),
(10, 'dfs fgstd dg', ' ddf gdfg df', '0014410-R1-020-8A.jpg', 'napa_food_menu.pdf', '0000-00-00', NULL),
(11, 'Ishanra Globle Party Packages', '<p>&nbsp;FSDF SD FSD SD S</p>\r\n<p>S</p>\r\n<p>F SD</p>\r\n<p>&nbsp;F</p>\r\n<p>&nbsp;</p>\r\n<p>SDF </p>\r\n<p>SD FSD</p>\r\n<p>&nbsp;F</p>\r\n<p>SD F</p>\r\n<p>&nbsp;</p>\r\n<p>SD</p>\r\n<p>F </p>\r\n<p>SD </p>\r\n<p>FSD</p>\r\n<p>&nbsp;F</p>\r\n<p>SD</p>\r\n<p>&nbsp;F</p>\r\n<p>SD </p>\r\n<p>F</p>\r\n<p>SD </p>\r\n<p>S</p>\r\n<p>DF </p>\r\n<p>SD</p>\r\n<p>&nbsp;</p>\r\n<p>FSD</p>\r\n<p>F </p>\r\n<p>SD</p>\r\n<p>F</p>\r\n<p>&nbsp;S</p>\r\n<p>DF </p>\r\n<p>SD</p>\r\n<p>&nbsp;</p>\r\n<p>F</p>\r\n<p>S </p>\r\n<p>DF</p>\r\n<p>SD F</p>\r\n<p>SD F</p>', 'frame_gallery.jpg', 'napa_food_menu.pdf', '2008-12-26', '2008-12-26'),
(12, 'New Holoday Package  ee', '<p>test Data new Holiday Package ... ajkajfk as kas jkjaks k asjfkjask jkj&nbsp; kafkasdfk jaskf eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee</p>', 'AnnReportFrontCover0607.png', '2007_october_management_report.pdf', '2009-01-06', '2009-01-06'),
(13, 'test package 18 22', '<p>test 1822</p>', NULL, NULL, '2009-01-19', '2009-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `r_white`
--

CREATE TABLE IF NOT EXISTS `r_white` (
  `reiver_id` int(11) NOT NULL auto_increment,
  `Title` varchar(150) default NULL,
  `r_date` varchar(50) default NULL,
  `desc` text,
  PRIMARY KEY  (`reiver_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `r_white`
--

INSERT INTO `r_white` (`reiver_id`, `Title`, `r_date`, `desc`) VALUES
(1, 'Our Guests ', 'FEBRUARY 20, 2006:', 'I don''t think i''ve ever had a bad night at Mad River -- always fun and eventful. if you''re looking for a fun night of dancing, this is a great bar to go to with a big group of friends. The crowd is great - young, good-looking and always looking for a good time----NYC socialite'),
(2, 'OUR GUESTS', 'JANUARY 20, 2006:', 'Mad River is dyno-mite. Great crowd if you are 21-35 looking to have a good time, relax, drink a few brews and dance with some hotties. Great place to be b/c the morons that start fights don''t show up. The service is excellent, all the bartenders are quick and always are smiling. ----Andrew Sampson, Socialite'),
(3, 'sdfsd', 'fdsfds', '');

-- --------------------------------------------------------

--
-- Table structure for table `special_offers`
--

CREATE TABLE IF NOT EXISTS `special_offers` (
  `offer_id` int(11) NOT NULL auto_increment,
  `offer_name` varchar(150) NOT NULL,
  `short_desc` varchar(200) default NULL,
  `long_desc` text,
  `off_image` varchar(200) default NULL,
  `offer_attachment` varchar(200) default NULL,
  `offer_home` int(11) NOT NULL,
  `order_level` int(11) NOT NULL,
  `add_date` date default NULL,
  `update_date` date default NULL,
  PRIMARY KEY  (`offer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `special_offers`
--

INSERT INTO `special_offers` (`offer_id`, `offer_name`, `short_desc`, `long_desc`, `off_image`, `offer_attachment`, `offer_home`, `order_level`, `add_date`, `update_date`) VALUES
(1, 'Magarits <br> Long Island', 'Ice Tea', NULL, NULL, NULL, 1, 0, '2008-12-21', '2008-12-21'),
(2, 'Hot Dogs $99 <br> Strimp $25', 'Checken Wings Free', NULL, NULL, NULL, 1, 0, '2008-12-21', '2008-12-21'),
(3, 'Cheese Burgers $1.25', 'Water free', NULL, NULL, NULL, 0, 0, '0000-00-00', '0000-00-00'),
(7, 'edredrede', '2121251212221\r\n1111121212\r\n411232\r\n2512\r\n21222', '<p>754545</p>\r\n<p>21212</p>', NULL, NULL, 0, 2, '2008-12-26', '2008-12-26'),
(8, 'New Sp Offer  edit ', 'Short Desc test tTEtst tetestttetst edit', '<p style="text-align: justify;">test tetst eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee</p>', NULL, NULL, 0, 7, '2009-01-06', '2009-01-06'),
(9, 'test New Special s  ee', 'new test Specials eee', '<p>test New Specialseeee</p>', NULL, NULL, 1, 15, '2009-01-19', '2009-01-19');
