-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2014 at 05:39 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `btp`
--
CREATE DATABASE IF NOT EXISTS `btp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `btp`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `blood_test`
--

CREATE TABLE IF NOT EXISTS `blood_test` (
  `patient_id` int(11) NOT NULL,
  `b_test_id` int(1) NOT NULL AUTO_INCREMENT,
  `test_date` date NOT NULL,
  `haemoglobin` varchar(100) NOT NULL,
  `tlc` varchar(50) NOT NULL,
  `lymphocytes` varchar(50) NOT NULL,
  `eoisnophil` varchar(50) NOT NULL,
  `monocytes` varchar(50) NOT NULL,
  `basophils` varchar(50) NOT NULL,
  PRIMARY KEY (`b_test_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE IF NOT EXISTS `doctor_info` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `sex` text NOT NULL,
  `designation` text NOT NULL,
  `specialisation` text NOT NULL,
  `experience` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `about` varchar(1000) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`fname`, `lname`, `emp_id`, `password`, `sex`, `designation`, `specialisation`, `experience`, `email`, `contact`, `about`) VALUES
('', '', '', '', '', '', '', '', '', '', ''),
('askjdhakj', 'asdhkjh', 'asdkjh', '123', 'F', 'aa', 'aa', 'aa', 'ashish@g.com', '9459784847', 'dajdhakjdh  aklsdj akldsjkjad jahsdkjh asdkjh ajkdhgadg kjadgsh agshdaghd kjagdagd hjagsdkjg asjdg akjdsg akjdg'),
('aa', 'aa', 'asdkjh1', '', 'F', '', '', '', 'ashish@g.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_record`
--

CREATE TABLE IF NOT EXISTS `doctor_record` (
  `name` varchar(50) NOT NULL,
  `emp_id` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `landline` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `registration` varchar(20) NOT NULL,
  `speciality` varchar(30) NOT NULL,
  `treatment` varchar(150) NOT NULL,
  `education` varchar(100) NOT NULL,
  `mon_avail` text NOT NULL,
  `mon_from` int(11) DEFAULT NULL,
  `mon_to` int(11) DEFAULT NULL,
  `tue_avail` text NOT NULL,
  `tue_from` int(11) DEFAULT NULL,
  `tue_to` int(11) DEFAULT NULL,
  `wed_avail` text NOT NULL,
  `wed_from` int(11) DEFAULT NULL,
  `wed_to` int(11) DEFAULT NULL,
  `thur_avail` text NOT NULL,
  `thur_from` int(11) DEFAULT NULL,
  `thur_to` int(11) DEFAULT NULL,
  `fri_avail` text NOT NULL,
  `fri_from` int(11) DEFAULT NULL,
  `fri_to` int(11) DEFAULT NULL,
  `sat_avail` text NOT NULL,
  `sat_from` int(11) DEFAULT NULL,
  `sat_to` int(11) DEFAULT NULL,
  `sun_avail` text NOT NULL,
  `sun_from` int(11) DEFAULT NULL,
  `sun_to` int(11) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_record`
--

INSERT INTO `doctor_record` (`name`, `emp_id`, `password`, `photo`, `email`, `degree`, `landline`, `mobile`, `registration`, `speciality`, `treatment`, `education`, `mon_avail`, `mon_from`, `mon_to`, `tue_avail`, `tue_from`, `tue_to`, `wed_avail`, `wed_from`, `wed_to`, `thur_avail`, `thur_from`, `thur_to`, `fri_avail`, `fri_from`, `fri_to`, `sat_avail`, `sat_from`, `sat_to`, `sun_avail`, `sun_from`, `sun_to`) VALUES
('Amit Pathak', 'D100010', 'abcd', 'Snapshot_20140124_1.JPG', 'ashishgenext@gmail.com', 'MD', '', '', 'H101', 'Dentist', ' asdasd czxc asdqisaj sd,cza e, asdad kaasd', ' asdancxcvpqr , dzncaqr , fa,sdjqjpydamd a', 'unavailable', 10, 16, 'unavailable', 10, 12, 'available', 10, 10, 'unavailable', 14, 17, 'unavailable', 10, 16, 'unavailable', 16, 18, '', NULL, NULL),
('Amit Agrawal', 'D100011', 'abcd', 'Snapshot_20131214_5878.jpg', 'ashishgennext@gmail.com', 'DNB', '', '', 'H1023', 'Pediatrician', ' asdasd czxc asdqisaj sd,cza e, asdad kaasd', ' asdancxcvpqr , dzncaqr , fa,sdjqjpydamd a', 'available', 10, 16, 'unavailable', 10, 12, 'available', 10, 15, 'unavailable', 14, 17, 'unavailable', 10, 16, 'available', 16, 18, '', NULL, NULL),
('Amit Mishra', 'D100012', 'abcd', 'mumbai-indian-ipl-2012.jpg', 'ashishgennext@gmail.com', 'DNB', '', '', 'H1024', 'Psychiatrist', ' asdasd czxc asdqisaj sd,cza e, asdad kaasd', ' asdancxcvpqr , dzncaqr , fa,sdjqjpydamd a', 'unavailable', 10, 16, 'unavailable', 10, 12, 'unavailable', 10, 15, 'unavailable', 14, 17, 'unavailable', 10, 16, 'available', 10, 18, '', NULL, NULL),
('Amit Singh', 'D100013', 'abcd', 'portrait___dexter_morgan_by_kimisz-d419z91.jpg', 'ashishgennext@gmail.com', 'DNB', '', '8988259967', 'H1025', 'SportsMedicineSpecialist', ' asdasd czxc asdqisaj sd,cza e, asdad kaasd', ' asdancxcvpqr , dzncaqr , fa,sdjqjpydamd a', 'available', 10, 16, 'unavailable', 10, 12, 'available', 10, 15, 'unavailable', 14, 17, 'unavailable', 10, 16, 'available', 10, 14, '', NULL, NULL),
('Amit Gore', 'D100014', 'abcd', 'Amit Gore.jpg', 'amitgore2009@gmail.com', 'MBBS', '', '', '', 'Acupuncturist', ' asdasd czxc asdqisaj sd,cza e, asdad kaasd', ' asdancxcvpqr , dzncaqr , fa,sdjqjpydamd a', 'available', 10, 16, 'available', 10, 16, 'unavailable', 10, 10, 'available', 10, 16, 'available', 10, 16, 'unavailable', 10, 10, '', NULL, NULL),
('Ashish Singh', 'D10007', 'abcd', '12385_603970073010554_1289422336_n.jpg', 'ashishgennext@gmail.com', 'MBBS', '', '', '', 'Allergist', ' asdasd czxc asdqisaj sd,cza e, asdad kaasd', ' asdancxcvpqr , dzncaqr , fa,sdjqjpydamd a', 'available', 10, 16, 'unavailable', 10, 16, 'unavailable', 10, 10, 'available', 10, 16, 'available', 10, 16, 'unavailable', 10, 10, '', NULL, NULL),
('Amit Sharma', 'D10008', 'abcd', 'Bharat.jpg', 'ashishgennext@gmail.com', 'MBBS', '', '', 'H101', 'ENT', ' asdasd czxc asdqisaj sd,cza e, asdad kaasd', ' asdancxcvpqr , dzncaqr , fa,sdjqjpydamd a', 'available', 10, 16, 'available', 10, 12, 'unavailable', 10, 10, 'available', 10, 12, 'available', 10, 16, 'available', 16, 18, '', NULL, NULL),
('Saveena', 'D10009', 'abcd', 'Saveena.jpg', 'ashishgennext@gmail.com', 'MBBS', '', '', 'H101', 'ENT', ' asdasd czxc asdqisaj sd,cza e, asdad kaasd', ' asdancxcvpqr , dzncaqr , fa,sdjqjpydamd a', 'available', 10, 16, 'available', 10, 12, 'unavailable', 10, 10, 'available', 14, 17, 'available', 10, 16, 'available', 16, 18, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `drug_manager`
--
CREATE TABLE IF NOT EXISTS `drug_manager` (
`fname` varchar(50)
,`lname` varchar(50)
,`emp_id` varchar(25)
,`password` varchar(20)
,`sex` text
,`dob` date
,`designation` varchar(50)
,`email` varchar(50)
,`contact` varchar(20)
,`address` varchar(500)
);
-- --------------------------------------------------------

--
-- Table structure for table `drug_record`
--

CREATE TABLE IF NOT EXISTS `drug_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `expiry_date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `drug_record`
--

INSERT INTO `drug_record` (`id`, `batch`, `name`, `expiry_date`, `quantity`) VALUES
(1, 2341, 'abc', '2014-04-10', 12),
(2, 222, 'bdf', '2014-04-15', 22),
(3, 33, 'as', '2014-04-02', 33),
(4, 22, 'iiue ', '2014-04-01', 4),
(5, 1111, 'asd asd ', '2014-04-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE IF NOT EXISTS `employee_info` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `emp_id` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `sex` text NOT NULL,
  `dob` date NOT NULL,
  `designation` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  PRIMARY KEY (`emp_id`),
  FULLTEXT KEY `designation` (`designation`),
  FULLTEXT KEY `designation_2` (`designation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`fname`, `lname`, `emp_id`, `password`, `sex`, `dob`, `designation`, `email`, `contact`, `address`) VALUES
('amit', 'gore', 'E10013', '123', 'F', '1991-11-19', 'Drug Manager', 'ashish.siingh@gmail.com', '43', 'lask dj'),
('amit', 'singh', 'E10014', '123', 'M', '1991-11-19', 'Nurse', 'ashish.siingh@gmail.com', '21', 'klkasdj l'),
('ashish', 'singh', 'E10015', '123', 'M', '1991-11-19', 'Nurse', 'ashish.siingh@gmail.com', '21', 'asdj asjkdh laskjdh laksjdh laksjdh l');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `medicine_details`
--

INSERT INTO `medicine_details` (`serial_no`, `request_id`, `name_of_supplier`, `medicines`, `tests`, `tests_cost`, `medicines_cost`) VALUES
(2, 'hWFXcdQagB_12', 'ashis', '78', 'tr', 12, 11),
(3, 'gH3Cmw6sEA_B10002', 'singh', 'xyzqq', 'name of test', 45, 566),
(4, 'CTAXQJ9fum_V10008', 'ashish', 'opew', 'singh', 76, 87),
(5, 'xwgs88F1eA_4563', 'ashish', 'ashsih', 'singh', 34, 77),
(6, '6HXbNFffP1_b1009', 'ashsih', 'xyz', 'blood', 234, 122),
(7, 'OxMBxrqNM1_87771', 'asihsh', 'crocin', 'blood', 11, 110),
(8, 'C1zXgfPqjy_123', 'amit', 'crocin', 'urine', 11, 113),
(9, 'n9cnelA82d_4552', 'tyu', 'crocin', 'hgt', 11, 111),
(10, 'R4w6tfSQoh_1224', 'vishal', 'crocin', 'fever', 111, 1122),
(11, 'oisv1xQ1Ba_B10002', 'Sampat', 'crocin', 'URINE', 122, 112),
(12, 'fhfdwNOltT_B10007', 'ashish', 'crocin', 'Blood', 122, 122),
(13, 'TyWmBDM1y2_B10002', 'ashihs', 'crocin', 'bood', 122, 322),
(14, 'aI8xa56bu0_B12234', 'wee', 'crocin', 'blood', 22, 12),
(15, 'lQSPhEvnVb_B10002', 'ASHISH', 'crocin', 'blood', 23, 22),
(16, 'pLMK7I4O95_B10007', 'amit', 'crocin', 'blood', 212, 122),
(17, 'quPLhHJtvI_B10007', 'vivek drugs', 'crocin', 'urine', 45, 77);

-- --------------------------------------------------------

--
-- Table structure for table `new_appointment`
--

CREATE TABLE IF NOT EXISTS `new_appointment` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_slot` varchar(11) NOT NULL,
  `app_date` date NOT NULL,
  `patient_id` varchar(20) NOT NULL,
  `patient_name` varchar(30) NOT NULL,
  `problems` text,
  `doctor_name` varchar(30) NOT NULL,
  `doctor_id` varchar(20) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `new_appointment`
--

INSERT INTO `new_appointment` (`app_id`, `app_slot`, `app_date`, `patient_id`, `patient_name`, `problems`, `doctor_name`, `doctor_id`) VALUES
(12, 'A', '2014-06-12', 'B10007', 'ashish', 'Blood', 'Amit pathak', 'D100010'),
(13, 'A', '2014-06-12', 'B10008', 'ashish', 'Blood', 'Amit pathak', 'D100010'),
(14, 'A', '2014-06-12', 'B10009', 'ashish', 'Blood', 'Amit pathak', 'D100010'),
(15, 'B', '2014-06-12', 'B10012', 'ashish', 'Blood', 'Amit pathak', 'D100010'),
(16, 'B', '2014-06-18', 'B10012', 'ashish', 'Blood', 'Amit Gore', 'D100014'),
(17, 'B', '2014-06-18', 'B10007', 'ashish', 'Blood', 'Amit Gore', 'D100014'),
(18, 'B', '2014-06-18', 'B10008', 'ashish', 'Blood', 'Amit Gore', 'D100014'),
(19, 'C', '2014-06-18', 'B10008', 'ashish', 'Blood', 'Amit Gore', 'D100014'),
(20, 'C', '2014-06-12', 'B10007', 'Ashish', '', 'Amit Singh', 'D100013'),
(21, 'A', '2014-06-08', 'B10007', 'asish singh', 'asdasd', 'Amit Singh', 'D100013');

-- --------------------------------------------------------

--
-- Stand-in structure for view `nurse`
--
CREATE TABLE IF NOT EXISTS `nurse` (
`fname` varchar(50)
,`lname` varchar(50)
,`emp_id` varchar(25)
,`password` varchar(20)
,`sex` text
,`dob` date
,`designation` varchar(50)
,`email` varchar(50)
,`contact` varchar(20)
,`address` varchar(500)
);
-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE IF NOT EXISTS `patient_info` (
  `patient_id` int(20) NOT NULL,
  `r_date` date NOT NULL,
  `record` varchar(200) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `test_report` varchar(300) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`patient_id`, `r_date`, `record`, `dept`, `test_report`) VALUES
(1, '2013-10-14', '', '', ''),
(2, '2014-04-07', 'adskj hasdkjh kasjdh kasjdh kjashkdh akjdh akjsdh kadh', 'B', 'Blood-23'),
(3, '2014-04-07', 'ds askljd kjadsh kjasdh kjahdsk', 'B', 'Blood-24'),
(4, '2014-04-07', 'askjd klasj dlajsdl kaj', 'B', 'Blood-28'),
(5, '2014-04-07', '', 'B', 'Blood-29'),
(6, '2014-04-08', 'dslfj skldjf kjlsdfh ldf;lkasljalkjas l;sa asd ', 'A', 'Blood-20'),
(7, '2014-04-08', 'kljewqv kljklsdaj lkjsa klasjd', 'B', 'Blood-2311'),
(8, '2014-04-09', 'sadj aklsdjklasdj ;laksdjalskjd lask;dj laskdj ;laskjd', 'B', 'Blood-222'),
(9, '2014-04-30', '', '', 'urine-11'),
(10, '2014-04-30', '', '', 'x-ray-bone'),
(11, '2014-05-30', '', 'B', ''),
(12, '2014-05-30', '', 'B', ''),
(13, '2014-06-08', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `prod_info`
--

CREATE TABLE IF NOT EXISTS `prod_info` (
  `prodName` varchar(20) NOT NULL,
  `prodCode` varchar(15) NOT NULL,
  `batchId` varchar(15) NOT NULL,
  `currentStock` int(11) NOT NULL,
  `shelf` varchar(20) NOT NULL,
  `drug_group` varchar(15) NOT NULL,
  `manufacture` varchar(20) NOT NULL,
  `genericName` varchar(20) NOT NULL,
  `contents` varchar(40) NOT NULL,
  `medicineFor` varchar(100) NOT NULL,
  `precautions` varchar(100) NOT NULL,
  `expDate` date NOT NULL,
  PRIMARY KEY (`prodCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod_info`
--

INSERT INTO `prod_info` (`prodName`, `prodCode`, `batchId`, `currentStock`, `shelf`, `drug_group`, `manufacture`, `genericName`, `contents`, `medicineFor`, `precautions`, `expDate`) VALUES
('Paracetamol1', 'fev1', 'batch1', 30, 'shelf1', 'fev1', 'IIT mandi industry', 'Fever tablet', 'fructose, glucose', 'Fever,pain', 'Keep away from sunlight', '2014-06-16'),
('Paracetamol2', 'fev3', 'batch3', 4, 'shelf1', 'fev2', 'IIT mandi industry', 'Fever tablet', 'fructose, glucose', 'Fever,pain', 'Keep away from sunlight', '2014-06-17'),
('Paracetamol234', 'fev4', 'batch4', 100, 'shelf1', 'fev2', 'IIT mandi industry', 'Fever tablet', 'fructose, glucose', 'Fever,pain', 'Keep away from sunlight', '2014-09-17'),
('Paracetamol2345', 'fev5', 'batch5', 100, 'shelf1', 'fev2', 'IIT mandi industry', 'Fever tablet', 'fructose, glucose', 'Fever,pain', 'Keep away from sunlight', '2014-06-17'),
('Paracetamol2345', 'fev6', 'batch5', 7, 'shelf1', 'fev2', 'IIT mandi industry', 'Fever tablet', 'fructose, glucose', 'Fever,pain', 'Keep away from sunlight', '2014-06-17'),
('Paracetamol23457', 'fev7', 'batch5', 450, 'shelf1', 'fev2', 'IIT mandi industry', 'Fever tablet', 'fructose, glucose', 'Fever,pain', 'Keep away from sunlight', '2015-06-17'),
('Paracetamol234578', 'fev8', 'batch5', 450, 'shelf1', 'fev2', 'IIT mandi industry', 'Fever tablet', 'fructose, glucose', 'Fever,pain', 'Keep away from sunlight', '2015-06-17');

-- --------------------------------------------------------

--
-- Stand-in structure for view `receptionist`
--
CREATE TABLE IF NOT EXISTS `receptionist` (
`fname` varchar(50)
,`lname` varchar(50)
,`emp_id` varchar(25)
,`password` varchar(20)
,`sex` text
,`dob` date
,`designation` varchar(50)
,`email` varchar(50)
,`contact` varchar(20)
,`address` varchar(500)
);
-- --------------------------------------------------------

--
-- Table structure for table `reimbursment`
--

CREATE TABLE IF NOT EXISTS `reimbursment` (
  `serial_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `employee_id` varchar(40) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `school_or_office` varchar(100) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `patient_age` varchar(10) NOT NULL,
  `relation` varchar(40) NOT NULL,
  `no_of_vouchers` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `comment` text NOT NULL,
  `request_id` varchar(40) NOT NULL,
  `path` varchar(1000) NOT NULL,
  PRIMARY KEY (`serial_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `reimbursment`
--

INSERT INTO `reimbursment` (`serial_no`, `name`, `designation`, `employee_id`, `email_id`, `school_or_office`, `patient_name`, `patient_age`, `relation`, `no_of_vouchers`, `status`, `comment`, `request_id`, `path`) VALUES
(13, 'ashish', 'student', 'B10007', 'ashishgenext@gmail.com', 'school', 'ashish', '23', 'Self', '', 'approved', '', 'quPLhHJtvI_B10007', 'upload/21.06.14/B10007'),
(12, 'ashish', 'student', 'B10007', 'ashishgenext@gmail.com', 'school', 'ashsish', '33', 'Self', '', 'pending', '', 'pLMK7I4O95_B10007', 'upload/11.06.14/B10007');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `guardian` varchar(50) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `sex` text NOT NULL,
  `dob` date NOT NULL,
  `branch` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `health_card` varchar(20) NOT NULL,
  `blood_grp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `hostel` text NOT NULL,
  `emergency` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `patient_id` int(20) NOT NULL,
  `image` mediumblob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `fname`, `lname`, `guardian`, `emp_id`, `password`, `sex`, `dob`, `branch`, `batch`, `designation`, `health_card`, `blood_grp`, `email`, `contact`, `hostel`, `emergency`, `address`, `patient_id`, `image`) VALUES
(1, 'ashis', 'singh', 'asihsh', 'B10007', '123', 'M', '1992-11-19', 'CSE', '2010', 'student', 'D10007', 'O+', 'ashishgenext@gmail.com', '8988259969', 'nako', '8988259960', ' 105,kamand  ', 1, ''),
(82, 'ashish', 'singh', 'asihsh', 'B10008', '123', 'M', '1992-11-19', 'CSE', '2010', 'student', 'D10008', 'O+', 'ashishgenext@gmail.com', '8988259969', 'nako', '8988259960', '105,kamand', 1, ''),
(83, 'amit', 'singh', 'asihsh', 'B10009', '123', 'M', '1992-11-19', 'CSE', '2010', 'student', 'D10009', 'O+', 'ashishgenext@gmail.com', '8988259969', 'nako', '8988259960', '105,kamand', 1, ''),
(84, 'amit', 'gore', 'asihsh', 'B10010', '123', 'M', '1992-11-19', 'CSE', '2010', 'student', 'D100010', 'O+', 'ashishgenext@gmail.com', '8988259969', 'nako', '8988259960', '105,kamand', 1, ''),
(85, 'ashish', 'gore', 'asihsh', 'B10011', '123', 'M', '1992-11-19', 'CSE', '2011', 'student', 'D100011', 'O+', 'ashishgenext@gmail.com', '8988259969', 'nako', '8988259960', '105,kamand', 1, ''),
(86, 'Saveena', 'Rajput', 'asihsh', 'B10012', '123', 'M', '1992-11-19', 'CSE', '2011', 'student', 'D100012', 'O+', 'ashishgenext@gmail.com', '8988259969', 'nako', '8988259960', '105,kamand', 1, ''),
(87, 'Saveena', 'Singh', 'asihsh', 'B10013', '123', 'M', '1992-11-19', 'CSE', '2011', 'student', 'D10001', 'O+', 'ashishgenext@gmail.com', '8988259969', 'nako', '8988259960', '105,kamand', 1, ''),
(88, 'Amit', 'Verma', 'ashish', 'B10014', '123', 'M', '1992-11-19', 'CSE', '2012', 'student', 'D100014', 'O+', 'ashishgenext@gmail.com', '8988259969', 'nako', '8988259960', '105,kamand', 1, ''),
(89, 'Ashish', 'Verma', 'ashish', 'B10015', '123', 'M', '1992-11-19', 'CSE', '2012', 'student', 'D10015', 'O+', 'ashishgenext@gmail.com', '8988259969', 'nako', '8988259960', '105,kamand', 1, ''),
(90, 'FAizal', 'khan', 'sardar khan', 'B10016', '123', 'M', '1992-11-19', 'CSE', '2012', 'student', 'D10016', 'O+', 'ashishgenext@gmail.com', '8988259969', 'nako', '8988259960', '105,kamand', 1, ''),
(91, 'vishal', 'verma', 'asihs', 'B10017', '123', 'M', '1992-11-19', 'CSE', '2009', 'student', 'D10017', 'O+', 'ashishgenext@gmail.com', '8988259969', 'nako', '8988259960', '105,kamand', 1, '');

--
-- Triggers `student_info`
--
DROP TRIGGER IF EXISTS `delete_appointment`;
DELIMITER //
CREATE TRIGGER `delete_appointment` AFTER DELETE ON `student_info`
 FOR EACH ROW DELETE FROM new_appointment
    WHERE new_appointment.patient_id = old.emp_id
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `unique_user`
--
CREATE TABLE IF NOT EXISTS `unique_user` (
`id` int(1)
,`fname` varchar(50)
,`lname` varchar(40)
,`guardian` varchar(50)
,`emp_id` varchar(20)
,`password` varchar(20)
,`sex` text
,`dob` date
,`branch` varchar(20)
,`batch` varchar(20)
,`designation` varchar(20)
,`health_card` varchar(20)
,`blood_grp` varchar(20)
,`email` varchar(50)
,`contact` varchar(20)
,`hostel` text
,`emergency` varchar(20)
,`address` varchar(500)
,`patient_id` int(20)
,`image` mediumblob
);
-- --------------------------------------------------------

--
-- Table structure for table `waste_record`
--

CREATE TABLE IF NOT EXISTS `waste_record` (
  `waste_date` date NOT NULL,
  `cat1` int(11) DEFAULT NULL,
  `cat6` int(11) DEFAULT NULL,
  `cat4` int(11) DEFAULT NULL,
  `cat7` int(11) DEFAULT NULL,
  `cat8` int(11) DEFAULT NULL,
  `cat10` int(11) DEFAULT NULL,
  PRIMARY KEY (`waste_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waste_record`
--

INSERT INTO `waste_record` (`waste_date`, `cat1`, `cat6`, `cat4`, `cat7`, `cat8`, `cat10`) VALUES
('2014-06-08', 87, 9, 0, 8, 12, 10),
('2014-06-13', 45, 13, 23, 12, 8, 6),
('2014-06-14', 23, 21, 8, 12, 34, 9),
('2014-06-15', 23, 12, 56, 12, 4, 90),
('2014-06-16', 73, 21, 67, 80, 34, 100),
('2014-07-01', 87, 9, 0, 8, 0, 10),
('2014-07-16', 87, 9, 0, 8, 0, 10),
('2014-08-16', 87, 9, 0, 8, 0, 10);

-- --------------------------------------------------------

--
-- Structure for view `drug_manager`
--
DROP TABLE IF EXISTS `drug_manager`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `drug_manager` AS select `employee_info`.`fname` AS `fname`,`employee_info`.`lname` AS `lname`,`employee_info`.`emp_id` AS `emp_id`,`employee_info`.`password` AS `password`,`employee_info`.`sex` AS `sex`,`employee_info`.`dob` AS `dob`,`employee_info`.`designation` AS `designation`,`employee_info`.`email` AS `email`,`employee_info`.`contact` AS `contact`,`employee_info`.`address` AS `address` from `employee_info` where (`employee_info`.`designation` = 'Drug Manager');

-- --------------------------------------------------------

--
-- Structure for view `nurse`
--
DROP TABLE IF EXISTS `nurse`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nurse` AS select `employee_info`.`fname` AS `fname`,`employee_info`.`lname` AS `lname`,`employee_info`.`emp_id` AS `emp_id`,`employee_info`.`password` AS `password`,`employee_info`.`sex` AS `sex`,`employee_info`.`dob` AS `dob`,`employee_info`.`designation` AS `designation`,`employee_info`.`email` AS `email`,`employee_info`.`contact` AS `contact`,`employee_info`.`address` AS `address` from `employee_info` where (`employee_info`.`designation` = 'nurse');

-- --------------------------------------------------------

--
-- Structure for view `receptionist`
--
DROP TABLE IF EXISTS `receptionist`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `receptionist` AS select `employee_info`.`fname` AS `fname`,`employee_info`.`lname` AS `lname`,`employee_info`.`emp_id` AS `emp_id`,`employee_info`.`password` AS `password`,`employee_info`.`sex` AS `sex`,`employee_info`.`dob` AS `dob`,`employee_info`.`designation` AS `designation`,`employee_info`.`email` AS `email`,`employee_info`.`contact` AS `contact`,`employee_info`.`address` AS `address` from `employee_info` where (`employee_info`.`designation` = 'receptionist');

-- --------------------------------------------------------

--
-- Structure for view `unique_user`
--
DROP TABLE IF EXISTS `unique_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `unique_user` AS select `student_info`.`id` AS `id`,`student_info`.`fname` AS `fname`,`student_info`.`lname` AS `lname`,`student_info`.`guardian` AS `guardian`,`student_info`.`emp_id` AS `emp_id`,`student_info`.`password` AS `password`,`student_info`.`sex` AS `sex`,`student_info`.`dob` AS `dob`,`student_info`.`branch` AS `branch`,`student_info`.`batch` AS `batch`,`student_info`.`designation` AS `designation`,`student_info`.`health_card` AS `health_card`,`student_info`.`blood_grp` AS `blood_grp`,`student_info`.`email` AS `email`,`student_info`.`contact` AS `contact`,`student_info`.`hostel` AS `hostel`,`student_info`.`emergency` AS `emergency`,`student_info`.`address` AS `address`,`student_info`.`patient_id` AS `patient_id`,`student_info`.`image` AS `image` from `student_info` where (`student_info`.`patient_id` = '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_info`
--
ALTER TABLE `student_info`
  ADD CONSTRAINT `student_info_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_info` (`patient_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
