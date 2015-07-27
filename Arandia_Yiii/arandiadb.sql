-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2015 at 12:23 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arandiadb`
--
CREATE DATABASE IF NOT EXISTS `arandiadb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `arandiadb`;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `Class_id` char(10) NOT NULL,
  `Section` varchar(45) NOT NULL,
  `Subject_Code` char(20) NOT NULL,
  `Student_id` char(10) NOT NULL,
  `Teacher_id` char(10) NOT NULL,
  PRIMARY KEY (`Class_id`),
  KEY `classes_ibfk_1` (`Subject_Code`),
  KEY `classes_ibfk_2` (`Student_id`),
  KEY `Section` (`Section`),
  KEY `Teacher_id` (`Teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `1st_grading` decimal(10,0) NOT NULL,
  `2nd_grading` decimal(10,0) NOT NULL,
  `3rd_grading` decimal(10,0) NOT NULL,
  `4th_grading` decimal(10,0) NOT NULL,
  `Final_grading` date NOT NULL,
  `Subject_code` char(20) NOT NULL,
  `Student_id` char(15) NOT NULL,
  PRIMARY KEY (`Student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Student_id` char(15) NOT NULL,
  `Student_lname` varchar(45) NOT NULL,
  `Student_fname` varchar(45) NOT NULL,
  `Student_mname` varchar(45) NOT NULL,
  `Student_email` varchar(45) NOT NULL,
  `Student_addr` varchar(100) NOT NULL,
  `Student_cont` varchar(45) NOT NULL,
  PRIMARY KEY (`Student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `Subject_code` char(20) NOT NULL,
  `Subject_desc` varchar(45) NOT NULL,
  `Teacher_id` int(10) NOT NULL,
  PRIMARY KEY (`Subject_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `Teacher_id` char(10) NOT NULL,
  `Teacher_lname` varchar(45) NOT NULL,
  `Teacher_fname` varchar(45) NOT NULL,
  `Teacher_mname` varchar(45) NOT NULL,
  `Teacher_email` varchar(45) NOT NULL,
  `Teacher_addr` varchar(100) NOT NULL,
  `Teacher_cont` varchar(20) NOT NULL,
  `Teacher_stat` varchar(10) NOT NULL,
  PRIMARY KEY (`Teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`Subject_Code`) REFERENCES `subject` (`Subject_code`),
  ADD CONSTRAINT `classes_ibfk_2` FOREIGN KEY (`Student_id`) REFERENCES `student` (`Student_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
