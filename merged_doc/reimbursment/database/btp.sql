-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2014 at 09:44 PM
-- Server version: 5.1.50
-- PHP Version: 5.3.26

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `btp`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicine_details`
--

CREATE TABLE IF NOT EXISTS `medicine_details` (
  `serial_no` int(10) NOT NULL AUTO_INCREMENT,
  `request_id` varchar(40) NOT NULL,
  `name_of_supplier` text NOT NULL,
  `medicines` text NOT NULL,
  `tests` text NOT NULL,
  `tests_cost` bigint(20) NOT NULL,
  `medicines_cost` bigint(20) NOT NULL,
  PRIMARY KEY (`serial_no`),
  UNIQUE KEY `serial_no` (`serial_no`),
  KEY `serial_no_2` (`serial_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reimbursment`
--

CREATE TABLE IF NOT EXISTS `reimbursment` (
  `serial_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `employee_id` varchar(40) NOT NULL,
  `school_or_office` varchar(100) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `patient_age` varchar(10) NOT NULL,
  `relation` varchar(40) NOT NULL,
  `no_of_vouchers` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `comment` text NOT NULL,
  `request_id` varchar(40) NOT NULL,
  PRIMARY KEY (`serial_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
