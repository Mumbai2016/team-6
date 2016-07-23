-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2016 at 04:10 PM
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

CREATE TABLE IF NOT EXISTS `activity` (
`aid` int(11) NOT NULL,
  `a_paid` int(11) NOT NULL,
  `a_sid` int(11) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_funds` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `activity`:
--   `a_paid`
--       `priority_areas` -> `paid`
--   `a_sid`
--       `strategy_category` -> `sid`
--

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE IF NOT EXISTS `ngo` (
`ngo_id` int(11) NOT NULL,
  `ngo_add` varchar(250) DEFAULT NULL,
  `ngo_name` varchar(100) DEFAULT NULL,
  `pm_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `ngo`:
--   `pm_id`
--       `pm` -> `pm_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `pm`
--

CREATE TABLE IF NOT EXISTS `pm` (
`pm_id` int(11) NOT NULL,
  `pm_uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `pm`:
--   `pm_uid`
--       `user` -> `uid`
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
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`pid` int(11) NOT NULL,
  `aid` int(11) DEFAULT NULL,
  `ngo_id` int(11) DEFAULT NULL,
  `p_name` varchar(45) DEFAULT NULL,
  `target_s_date` date DEFAULT NULL,
  `target_e_date` date DEFAULT NULL,
  `s_date` date DEFAULT NULL,
  `e_date` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `projects`:
--   `aid`
--       `activity` -> `aid`
--   `ngo_id`
--       `ngo` -> `ngo_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `p_vol`
--

CREATE TABLE IF NOT EXISTS `p_vol` (
`p_vol_id` int(11) NOT NULL,
  `hours` int(11) DEFAULT NULL,
  `p_status` varchar(20) DEFAULT NULL,
  `p_uid` int(11) DEFAULT NULL,
  `p_pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `p_vol`:
--   `p_pid`
--       `projects` -> `pid`
--   `p_uid`
--       `user` -> `uid`
--   `p_vol_id`
--       `volunteer` -> `vid`
--

-- --------------------------------------------------------

--
-- Table structure for table `strategy_category`
--

CREATE TABLE IF NOT EXISTS `strategy_category` (
`sid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`uid` int(11) NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `u_pwd` varchar(50) NOT NULL,
  `u_type` varchar(50) DEFAULT NULL,
  `name` varchar(125) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
`vid` int(11) NOT NULL,
  `v_interest` varchar(50) NOT NULL,
  `v_uid` int(11) DEFAULT NULL,
  `v_pid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `volunteer`:
--   `v_uid`
--       `user` -> `uid`
--   `v_pid`
--       `projects` -> `pid`
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
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
 ADD PRIMARY KEY (`ngo_id`), ADD KEY `fk_pm_id_idx` (`pm_id`);

--
-- Indexes for table `pm`
--
ALTER TABLE `pm`
 ADD PRIMARY KEY (`pm_id`), ADD KEY `fk_uid_idx` (`pm_uid`);

--
-- Indexes for table `priority_areas`
--
ALTER TABLE `priority_areas`
 ADD PRIMARY KEY (`paid`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`pid`), ADD KEY `fk_aid_idx` (`aid`), ADD KEY `fk_ngoid_idx` (`ngo_id`);

--
-- Indexes for table `p_vol`
--
ALTER TABLE `p_vol`
 ADD PRIMARY KEY (`p_vol_id`,`p_pid`), ADD KEY `fk_ppid_idx` (`p_pid`), ADD KEY `fk_puid_idx` (`p_uid`);

--
-- Indexes for table `strategy_category`
--
ALTER TABLE `strategy_category`
 ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
 ADD PRIMARY KEY (`vid`), ADD KEY `fk_uid_idx` (`v_uid`), ADD KEY `fk_v_pid_idx` (`v_pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
MODIFY `ngo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pm`
--
ALTER TABLE `pm`
MODIFY `pm_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `priority_areas`
--
ALTER TABLE `priority_areas`
MODIFY `paid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `p_vol`
--
ALTER TABLE `p_vol`
MODIFY `p_vol_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `strategy_category`
--
ALTER TABLE `strategy_category`
MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
ADD CONSTRAINT `fk_paid` FOREIGN KEY (`a_paid`) REFERENCES `priority_areas` (`paid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_sid` FOREIGN KEY (`a_sid`) REFERENCES `strategy_category` (`sid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ngo`
--
ALTER TABLE `ngo`
ADD CONSTRAINT `fk_pm_id` FOREIGN KEY (`pm_id`) REFERENCES `pm` (`pm_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pm`
--
ALTER TABLE `pm`
ADD CONSTRAINT `fk_pm_uid` FOREIGN KEY (`pm_uid`) REFERENCES `user` (`uid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
ADD CONSTRAINT `fk_aid` FOREIGN KEY (`aid`) REFERENCES `activity` (`aid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_ngoid` FOREIGN KEY (`ngo_id`) REFERENCES `ngo` (`ngo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `p_vol`
--
ALTER TABLE `p_vol`
ADD CONSTRAINT `fk_ppid` FOREIGN KEY (`p_pid`) REFERENCES `projects` (`pid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_puid` FOREIGN KEY (`p_uid`) REFERENCES `user` (`uid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_pvolid` FOREIGN KEY (`p_vol_id`) REFERENCES `volunteer` (`vid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `volunteer`
--
ALTER TABLE `volunteer`
ADD CONSTRAINT `fk_uid` FOREIGN KEY (`v_uid`) REFERENCES `user` (`uid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_v_pid` FOREIGN KEY (`v_pid`) REFERENCES `projects` (`pid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
