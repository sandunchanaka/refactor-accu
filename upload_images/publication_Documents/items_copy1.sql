-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2008 at 03:46 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `pos_coop`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(8) NOT NULL auto_increment,
  `item_name` varchar(30) NOT NULL,
  `item_name_s` varchar(50) default NULL,
  `item_number` varchar(20) default NULL,
  `description` blob,
  `brand_id` int(8) NOT NULL,
  `category_id` int(8) NOT NULL,
  `supplier_id` int(8) NOT NULL,
  `buy_price` varchar(30) NOT NULL,
  `unit_price` varchar(30) NOT NULL,
  `supplier_item_number` varchar(50) default NULL,
  `tax_percent` varchar(10) NOT NULL,
  `total_cost` varchar(30) NOT NULL,
  `quantity` int(8) default NULL,
  `reorder_level` int(8) default NULL,
  `image` varchar(80) default 'images/items/item.gif',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `item_name_s`, `item_number`, `description`, `brand_id`, `category_id`, `supplier_id`, `buy_price`, `unit_price`, `supplier_item_number`, `tax_percent`, `total_cost`, `quantity`, `reorder_level`, `image`) VALUES
(1, 'Singer TCL TV ', NULL, 'I255', '', 1, 1, 1, '251000', '25700', 'Sp1002', '0', '25700.00', 10, 1, 'images/items/20070810_37.jpg'),
(2, 'players ', '', 'I105', 0x49313035, 1, 3, 1, '100000', '12500', 'Sp1004', '0', '12500.00', -5, 2, 'images/items/dbrestore.png'),
(3, 'Item_test1_e', 'Item_ test S)_e', 'sadasd+e', 0x7361646173645f65646974, 3, 4, 1, '25622_e', '200', 'Sp100111_e', '3', '206.00', 100, 10, 'images/items/Graphic2.jpg');
