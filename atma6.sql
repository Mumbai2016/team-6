-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2016 at 01:49 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atma6`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--
-- Creation: Jul 23, 2016 at 11:47 AM
--

CREATE TABLE IF NOT EXISTS `activity` (
`aid` int(11) NOT NULL,
  `a_paid` int(11) NOT NULL,
  `a_sid` int(11) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_y1` varchar(100) NOT NULL,
  `a_y2` varchar(100) NOT NULL,
  `a_y3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `activity`:
--   `a_paid`
--       `priority_areas` -> `paid`
--   `a_sid`
--       `strategy_category` -> `sid`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
 ADD PRIMARY KEY (`aid`), ADD KEY `a_paid_idx` (`a_paid`), ADD KEY `fk_sid_idx` (`a_sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
ADD CONSTRAINT `fk_paid` FOREIGN KEY (`a_paid`) REFERENCES `priority_areas` (`paid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_sid` FOREIGN KEY (`a_sid`) REFERENCES `strategy_category` (`sid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
