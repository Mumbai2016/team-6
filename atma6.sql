-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2016 at 01:19 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atma6`
--

-- --------------------------------------------------------

--
-- Table structure for table `priority_areas`
--

CREATE TABLE IF NOT EXISTS `priority_areas` (
  `paid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `priority_areas`
--

INSERT INTO `priority_areas` (`paid`, `pname`) VALUES
(1, 'Quality & Cost Efficiency'),
(2, 'Successful Outcomes'),
(3, 'External Recognition'),
(4, 'Funding'),
(5, 'Talent & Partner Acquisition and Retention');

-- --------------------------------------------------------

--
-- Table structure for table `strategy_category`
--

CREATE TABLE IF NOT EXISTS `strategy_category` (
  `sid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strategy_category`
--

INSERT INTO `strategy_category` (`sid`, `sname`) VALUES
(1, 'Administration'),
(2, 'Finance'),
(3, 'Fundraising'),
(4, 'Monitoring & Evaluation'),
(5, 'Human Resources'),
(6, 'Governance'),
(7, 'Leadership'),
(8, 'Strategy'),
(9, 'Development'),
(10, 'Programs and Marketing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `priority_areas`
--
ALTER TABLE `priority_areas`
  ADD PRIMARY KEY (`paid`);

--
-- Indexes for table `strategy_category`
--
ALTER TABLE `strategy_category`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `priority_areas`
--
ALTER TABLE `priority_areas`
  MODIFY `paid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `strategy_category`
--
ALTER TABLE `strategy_category`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
