-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2014 at 01:46 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `watch2`
--

-- --------------------------------------------------------

--
-- Table structure for table `additem`
--

CREATE TABLE IF NOT EXISTS `additem` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `category` varchar(30) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `display` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `additem`
--

INSERT INTO `additem` (`id`, `name`, `price`, `qty`, `category`, `remarks`, `image`, `display`) VALUES
(59, 'neha', 1000, 55, 'Men''s', '15', '59.jpg', 1),
(58, 'Titen', 5000, 20, 'Men''s', 'Alpahabet', '58.jpg', 1),
(60, 'Rado', 900, 9, 'Men''s', '8*****', '60.jpg', 1),
(61, 'Royal', 9000, 10, 'Men''s', '============', '61.jpg', 1),
(62, 'Saaaa', 999, 999, 'Men''s', '****', '62.jpg', 1),
(63, 'Titen', 9000, 9, 'Electronic', '---', '63.jpg', 1),
(78, 'New Gold', 552, 9, '', 'No Remarks', '77.jpg', 1),
(75, 'Ajanta', 500, 8, '', '=====', '75.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_payment`
--

CREATE TABLE IF NOT EXISTS `delivery_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `billno` int(8) NOT NULL,
  `billamt` int(8) NOT NULL,
  `deliveryaddress` varchar(255) NOT NULL,
  `ptype` varchar(50) NOT NULL,
  `pdetails` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sub` varchar(25) NOT NULL,
  `msg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `sub`, `msg`) VALUES
('Kinjal', 'k.dhaduk@yahoo.com', 'Feed Back', 'Excellent'),
('Ami', 'doshi.amee@ymail.com', 'Feed Back', 'Very Good\r\n'),
('nehal', 'nehal@gmail.com', 'php', '000'),
('neha', 'aaa@gmail.comm', 'php', 'jajskj'),
('Hello', 'Hi@gmail.com', 'HowRU', '------'),
('Hello', 'aaa@gmail.comm', 'php', 'dddd'),
('HHH', 'HHH', 'HHH', 'HHHH');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(20) NOT NULL,
  `pwd` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `pwd`) VALUES
('kinju', 'kinju'),
('ami', 'ami'),
('vandana', '1234'),
('vandu', '111'),
('zzz', 'zzz'),
('hakim', 'hakim'),
('KKK', 'kkk'),
('fine', 'fine');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_no` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_price` double NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salebill`
--

CREATE TABLE IF NOT EXISTS `salebill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `billno` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `itemname` varchar(20) NOT NULL,
  `price` int(8) NOT NULL,
  `qty` int(8) NOT NULL,
  `total` int(10) NOT NULL,
  `phid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `salebill`
--

INSERT INTO `salebill` (`id`, `billno`, `username`, `itemname`, `price`, `qty`, `total`, `phid`) VALUES
(17, 6, 'admin', 'Royal', 9000, 55, 495000, '61.jpg'),
(16, 5, 'Guest', 'neha', 1000, 7, 7000, '59.jpg'),
(14, 3, 'Guest', 'Rado', 900, 5, 4500, '60.jpg'),
(13, 2, 'admin', 'Titen', 5000, 50, 250000, '58.jpg'),
(19, 8, 'Guest', 'Quartz', 1200, 2, 2400, '64.jpg'),
(20, 9, 'Guest', 'New Gold', 552, 5, 2760, '77.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `u_nm` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `cpwd` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `lname`, `email`, `u_nm`, `pwd`, `cpwd`, `gender`) VALUES
('vandana', 'donga', 'vd@gmail.com', 'vandana', '1234', '1234', 'FEMALE'),
('neha', 'vandu', 'aaa@gmail.comm', 'vandu', '111', '111', 'FEMALE'),
('ZZZ', 'ZZZ', 'ZZZ@gmail.com', 'zzz', 'zzz', 'zzz', 'FEMALE'),
('hhhh', 'hhhhh', 'hakim@gmail.com', 'hakim', 'hakim', 'hakim', ''),
('KKK', 'KKK', 'KKK@gmail.com', 'KKK', 'kkk', 'kkk', 'MALE'),
('Hi', 'Hello', 'How@ru', 'fine', 'fine', 'fine', 'FEMALE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nm`) VALUES
('fine');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
