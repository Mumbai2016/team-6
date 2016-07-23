-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2016 at 06:34 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `activity`:
--   `a_paid`
--       `priority_areas` -> `paid`
--   `a_sid`
--       `strategy_category` -> `sid`
--

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`aid`, `a_paid`, `a_sid`, `a_name`, `a_funds`) VALUES
(1, 1, 11, 'activity1', NULL),
(2, 1, 12, 'activity2', NULL),
(3, 1, 13, 'activity3', NULL),
(4, 1, 14, 'activity4', NULL),
(5, 2, 15, 'activity5', NULL),
(6, 2, 16, 'activity6', NULL),
(7, 2, 17, 'activity7', NULL),
(8, 3, 18, 'activity8', NULL),
(9, 3, 19, 'activity9', NULL),
(10, 4, 20, 'activity10', NULL),
(11, 4, 21, 'activity11', NULL),
(12, 4, 22, 'activity12', NULL),
(13, 5, 23, 'activity13', NULL),
(14, 5, 24, 'activity14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE IF NOT EXISTS `interests` (
`i_id` int(11) NOT NULL,
  `i_uid` int(11) DEFAULT NULL,
  `i_interest` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `interests`:
--   `i_uid`
--       `user` -> `uid`
--

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`i_id`, `i_uid`, `i_interest`) VALUES
(1, 3, 'art'),
(2, 3, 'technology'),
(3, 4, 'sports'),
(4, 4, 'art'),
(5, 5, 'technology'),
(6, 2, 'public speaking'),
(7, 6, 'finance'),
(8, 6, 'management');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE IF NOT EXISTS `ngo` (
`ngo_id` int(11) NOT NULL,
  `ngo_add` varchar(250) DEFAULT NULL,
  `ngo_name` varchar(100) DEFAULT NULL,
  `pm_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `ngo`:
--   `pm_id`
--       `user` -> `uid`
--

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`ngo_id`, `ngo_add`, `ngo_name`, `pm_id`) VALUES
(1, 'virar', 'ngo1', 1),
(2, 'nalasopara', 'ngo2', 1),
(3, 'vasai', 'ngo3', 1),
(4, 'naigaon', 'ngo4', 1),
(5, 'bhyandar', 'ngo5', 2),
(6, 'mira road', 'ngo6', 2),
(7, 'dahisar', 'ngo7', 2),
(8, 'borivali', 'ngo8', 2);

-- --------------------------------------------------------

--
-- Table structure for table `od`
--

CREATE TABLE IF NOT EXISTS `od` (
`odid` int(11) NOT NULL,
  `od_name` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `od`
--

INSERT INTO `od` (`odid`, `od_name`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `pm`
--

CREATE TABLE IF NOT EXISTS `pm` (
`pm_id` int(11) NOT NULL,
  `pm_uid` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `pm`:
--   `pm_uid`
--       `user` -> `uid`
--

--
-- Dumping data for table `pm`
--

INSERT INTO `pm` (`pm_id`, `pm_uid`) VALUES
(1, 2),
(2, 6);

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
  `status` varchar(45) DEFAULT NULL,
  `odid` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `projects`:
--   `aid`
--       `activity` -> `aid`
--   `ngo_id`
--       `ngo` -> `ngo_id`
--   `odid`
--       `od` -> `odid`
--

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pid`, `aid`, `ngo_id`, `p_name`, `target_s_date`, `target_e_date`, `s_date`, `e_date`, `status`, `odid`) VALUES
(1, 1, 1, 'project1', '2016-01-14', '2016-04-15', NULL, NULL, 'complete', 1),
(2, 2, 1, 'project2', '2016-05-14', '2016-11-26', NULL, NULL, 'completed', 2),
(3, 3, 2, 'project3', '2016-02-11', '2016-04-03', NULL, NULL, 'ongoing', 1),
(4, 4, 2, 'project4', '2016-04-12', '2016-09-24', NULL, NULL, 'ongoing', 4),
(5, 5, 1, 'project5', '2016-01-04', '2016-04-14', NULL, NULL, 'ongoing', 3),
(6, 6, 1, 'project6', '2016-06-04', '2016-10-26', NULL, NULL, 'ongoing', 4),
(7, 7, 2, 'project8', '2016-11-14', '2017-12-14', NULL, NULL, 'not started', 2),
(8, 8, 1, 'project9', '2017-02-08', '2017-06-29', NULL, NULL, 'ongoing', 5),
(9, 9, 2, 'project10', '2016-05-14', '2016-08-14', NULL, NULL, 'ongoing', 3),
(10, 10, 1, 'project11', '2017-02-14', '2017-03-14', NULL, NULL, 'not started', 6),
(11, 11, 2, 'project12', '2017-05-24', '2017-08-24', NULL, NULL, 'not started', 5),
(12, 12, 2, 'project13', '2017-07-14', '2017-09-14', NULL, NULL, 'not started', 6),
(13, 13, 1, 'project14', '2017-03-14', '2017-07-14', NULL, NULL, 'not started', 7),
(14, 14, 2, 'project15', '2017-10-14', '2017-12-14', NULL, NULL, 'not started', 7);

-- --------------------------------------------------------

--
-- Table structure for table `p_vol`
--

CREATE TABLE IF NOT EXISTS `p_vol` (
`p_vol_id` int(11) NOT NULL,
  `hours` int(11) DEFAULT NULL,
  `p_uid` int(11) DEFAULT NULL,
  `p_pid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `p_vol`:
--   `p_pid`
--       `projects` -> `pid`
--   `p_uid`
--       `user` -> `uid`
--

--
-- Dumping data for table `p_vol`
--

INSERT INTO `p_vol` (`p_vol_id`, `hours`, `p_uid`, `p_pid`) VALUES
(22, 8, 2, 1),
(23, 7, 3, 1),
(24, 6, 5, 3),
(25, 5, 6, 4),
(26, 4, 3, 5),
(27, 6, 4, 2),
(28, 7, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `strategy_category`
--

CREATE TABLE IF NOT EXISTS `strategy_category` (
`sid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strategy_category`
--

INSERT INTO `strategy_category` (`sid`, `sname`) VALUES
(11, 'strategy1'),
(12, 'strategy2'),
(13, 'strategy3'),
(14, 'strategy4'),
(15, 'strategy5'),
(16, 'strategy6'),
(17, 'strategy7'),
(18, 'strategy8'),
(19, 'strategy9'),
(20, 'strategy10'),
(21, 'strategy11'),
(22, 'strategy12'),
(23, 'strategy13'),
(24, 'strategy14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`uid` int(11) NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `u_pwd` varchar(50) NOT NULL,
  `u_type` int(11) DEFAULT NULL,
  `name` varchar(125) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `user`:
--   `u_type`
--       `user_type` -> `u_type`
--

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `u_pwd`, `u_type`, `name`, `address`, `email`) VALUES
(1, 'tdurden', 'abc123', 0, 'Tyler Durden', 'c-102,Pepper street,Andheri(w)', 'tdurden@gmail.com'),
(2, 'sholmes', 'abc123', 1, 'Sherlock holmes', 'd-203,Baker Street,Saki Naka', 'sholmes@gmail.com'),
(3, 'ejaeger', 'abc123', 2, 'Eren Jaeger', 'a-001,washington lane,Ulhasnagar', 'ejaeger@ymail.com'),
(4, 'jlannister', 'abc123', 2, 'Jamie Lannister', 'Row House 3,Westeros,Virar(W)', 'jlannister@hotmail.com'),
(5, 'tlannister', 'abc123', 2, 'Tyrion Lannister', 'Row House 3,Westeros,Virar(W)', 'tlannister@gmail.com'),
(6, 'nuzumaki', 'abc123', 1, 'Naruto Uzumaki', 'b-302,Leaf Village,Borivali', 'nuzumaki@aol.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `u_type` int(11) NOT NULL,
  `u_type_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`u_type`, `u_type_name`) VALUES
(0, 'Supervisor'),
(1, 'Patnership Manager'),
(2, 'Volunteer');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
`vid` int(11) NOT NULL,
  `v_uid` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `volunteer`:
--   `v_uid`
--       `user` -> `uid`
--

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`vid`, `v_uid`) VALUES
(1, 3),
(4, 3),
(2, 4),
(3, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
 ADD PRIMARY KEY (`aid`), ADD KEY `a_paid_idx` (`a_paid`), ADD KEY `fk_sid_idx` (`a_sid`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
 ADD PRIMARY KEY (`i_id`), ADD KEY `fk_uid_idx` (`i_uid`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
 ADD PRIMARY KEY (`ngo_id`), ADD KEY `fk_pm_id_idx` (`pm_id`);

--
-- Indexes for table `od`
--
ALTER TABLE `od`
 ADD PRIMARY KEY (`odid`);

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
 ADD PRIMARY KEY (`pid`), ADD KEY `fk_aid_idx` (`aid`), ADD KEY `fk_ngoid_idx` (`ngo_id`), ADD KEY `fk_odid_idx` (`odid`);

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
 ADD PRIMARY KEY (`uid`), ADD KEY `fk_utype_idx` (`u_type`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
 ADD PRIMARY KEY (`u_type`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
 ADD PRIMARY KEY (`vid`), ADD KEY `fk_uid_idx` (`v_uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
MODIFY `ngo_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `od`
--
ALTER TABLE `od`
MODIFY `odid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pm`
--
ALTER TABLE `pm`
MODIFY `pm_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `priority_areas`
--
ALTER TABLE `priority_areas`
MODIFY `paid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `p_vol`
--
ALTER TABLE `p_vol`
MODIFY `p_vol_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `strategy_category`
--
ALTER TABLE `strategy_category`
MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
-- Constraints for table `interests`
--
ALTER TABLE `interests`
ADD CONSTRAINT `fk_int_uid` FOREIGN KEY (`i_uid`) REFERENCES `user` (`uid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ngo`
--
ALTER TABLE `ngo`
ADD CONSTRAINT `fk_pm_id` FOREIGN KEY (`pm_id`) REFERENCES `user` (`uid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
ADD CONSTRAINT `fk_ngoid` FOREIGN KEY (`ngo_id`) REFERENCES `ngo` (`ngo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_odid` FOREIGN KEY (`odid`) REFERENCES `od` (`odid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `p_vol`
--
ALTER TABLE `p_vol`
ADD CONSTRAINT `fk_ppid` FOREIGN KEY (`p_pid`) REFERENCES `projects` (`pid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_puid` FOREIGN KEY (`p_uid`) REFERENCES `user` (`uid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `fk_utype` FOREIGN KEY (`u_type`) REFERENCES `user_type` (`u_type`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `volunteer`
--
ALTER TABLE `volunteer`
ADD CONSTRAINT `fk_uid` FOREIGN KEY (`v_uid`) REFERENCES `user` (`uid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
