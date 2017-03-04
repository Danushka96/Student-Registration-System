-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql112.rf.gd
-- Generation Time: Mar 04, 2017 at 02:50 AM
-- Server version: 5.6.34-79.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rfgd_19758427_freshers`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `index1` varchar(8) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `school` varchar(30) NOT NULL,
  `address1` varchar(30) NOT NULL,
  `address2` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `district` varchar(12) NOT NULL,
  `phone` int(10) NOT NULL,
  `course` varchar(40) NOT NULL,
  PRIMARY KEY (`index1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`index1`, `fname`, `lname`, `school`, `address1`, `address2`, `city`, `district`, `phone`, `course`) VALUES
('1180', 'Danushka', 'Herath', 'Maliyadewa Adarsha Maha Vidyal', 'Alawwa', 'Kurunegala', 'Alawwa', 'Kurunegala', 717705526, 'Computer Science'),
('2078', 'Thisura', 'Rathnayake', 'D.S.Senanayake College, Colomb', '351/5', 'Munamalgahawatta Road, Dalugam', 'Kelaniya', 'Gampaha', 710416841, 'Information System');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
