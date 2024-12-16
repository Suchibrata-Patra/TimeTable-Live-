-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 15, 2024 at 06:15 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Timora`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_schedule_new`
--

CREATE TABLE `class_schedule_new` (
  `ID` int(11) NOT NULL,
  `Weekday` varchar(20) NOT NULL DEFAULT 'Monday',
  `Class` varchar(10) DEFAULT NULL,
  `Subject` varchar(30) DEFAULT NULL,
  `Teacher_ID` int(11) DEFAULT NULL,
  `Class_Time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class_schedule_new`
--

INSERT INTO `class_schedule_new` (`ID`, `Weekday`, `Class`, `Subject`, `Teacher_ID`, `Class_Time`) VALUES
(1568, 'Monday', '5A', 'Paribesh', 2, '2nd'),
(1569, 'Monday', '5A', 'Mathematics', 1, '1st'),
(1570, 'Monday', '5A', 'English', 3, '3rd'),
(1571, 'Monday', '5A', 'Bengali', 4, '4th'),
(1572, 'Monday', '5A', 'Mathematics', 5, '5th'),
(1573, 'Monday', '5A', 'Physical Education', 2, '6th'),
(1574, 'Monday', '5B', 'Bengali', 6, '1st'),
(1575, 'Monday', '5B', 'Computer', 7, '2nd'),
(1576, 'Monday', '5B', 'Mathematics', 8, '3rd'),
(1577, 'Monday', '5B', 'Bengali', 9, '4th'),
(1578, 'Monday', '5B', 'English', 3, '5th'),
(1579, 'Monday', '5B', 'G.K', 10, '6th'),
(1580, 'Monday', '5C', 'Paribesh', 2, '1st'),
(1581, 'Monday', '5', 'Geography', 11, '2nd'),
(1582, 'Monday', '5', 'Mathematics', 5, '3rd'),
(1583, 'Monday', '5', 'Bengali', 6, '4th'),
(1584, 'Monday', '5', 'Geography', 11, '5th'),
(1585, 'Monday', '5', 'Dharma', 12, '6th'),
(1586, 'Monday', '6A', 'English', 13, '1st'),
(1587, 'Monday', '6A', 'Sc.', 14, '2nd'),
(1588, 'Monday', '6A', 'Work Education', 15, '3rd'),
(1589, 'Monday', '6A', 'English', 13, '4th'),
(1590, 'Monday', '6A', 'Geography', 16, '5th'),
(1591, 'Monday', '6A', 'Sc.', 17, '6th'),
(1592, 'Monday', '6A', 'Physical Education', 1, '7th'),
(1593, 'Monday', '6B', 'Bengali', 9, '1st'),
(1594, 'Monday', '6B', 'English', 3, '2nd'),
(1595, 'Monday', '6B', 'Mathematics', 1, '3rd'),
(1596, 'Monday', '6B', 'Geography', 18, '4th'),
(1597, 'Monday', '6B', 'History', 19, '5th'),
(1598, 'Monday', '6B', 'English', 20, '6th'),
(1599, 'Monday', '6B', 'Dharma', 18, '7th'),
(1600, 'Monday', '6C', 'History', 21, '1st'),
(1601, 'Monday', '6C', 'Mathematics', 22, '2nd'),
(1602, 'Monday', '6C', 'Geography', 11, '3rd'),
(1603, 'Monday', '6C', 'Work Education', 15, '4th'),
(1604, 'Monday', '6C', 'Bengali', 6, '5th'),
(1605, 'Monday', '6C', 'Mathematics', 8, '6th'),
(1606, 'Monday', '6C', 'Sc.', 17, '7th');
-- --------------------------------------------------------

--
-- Table structure for table `teacher_profile_new`
--

CREATE TABLE `teacher_profile_new` (
  `Teacher_ID` int(11) NOT NULL,
  `Teacher_Name` varchar(100) NOT NULL,
  `5_allowed` int(1) NOT NULL DEFAULT '1',
  `6_allowed` int(1) NOT NULL DEFAULT '1',
  `7_allowed` int(1) NOT NULL DEFAULT '1',
  `8_allowed` int(1) NOT NULL DEFAULT '1',
  `9_allowed` int(1) NOT NULL DEFAULT '1',
  `10_allowed` int(1) NOT NULL DEFAULT '1',
  `11_allowed` int(1) NOT NULL DEFAULT '1',
  `12_allowed` int(1) NOT NULL DEFAULT '1',
  `1st_period_present_or_absent` int(1) NOT NULL DEFAULT '1',
  `2nd_period_present_or_absent` int(1) NOT NULL DEFAULT '1',
  `3rd_period_present_or_absent` int(1) NOT NULL DEFAULT '1',
  `4th_period_present_or_absent` int(1) NOT NULL DEFAULT '1',
  `5th_period_present_or_absent` int(1) NOT NULL DEFAULT '1',
  `6th_period_present_or_absent` int(1) NOT NULL DEFAULT '1',
  `7th_period_present_or_absent` int(1) NOT NULL DEFAULT '1',
  `8th_period_present_or_absent` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_profile_new`
--

INSERT INTO `teacher_profile_new` (`Teacher_ID`, `Teacher_Name`, `5_allowed`, `6_allowed`, `7_allowed`, `8_allowed`, `9_allowed`, `10_allowed`, `11_allowed`, `12_allowed`, `1st_period_present_or_absent`, `2nd_period_present_or_absent`, `3rd_period_present_or_absent`, `4th_period_present_or_absent`, `5th_period_present_or_absent`, `6th_period_present_or_absent`, `7th_period_present_or_absent`, `8th_period_present_or_absent`) VALUES
(1, 'S.M', 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'R.J.M', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(3, 'P.B', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(4, 'A.K.S', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(5, 'A.P', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(6, 'S.M.B', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(7, 'G.C.N', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(8, 'D.S', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(9, 'D.B', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(10, 'M.S', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(11, 'R.S', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(12, 'S.M.P', 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'S.D', 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'U.M', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(15, 'P.P', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(16, 'G.B', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(17, 'B.M', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(18, 'K.H', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(19, 'S.H', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(20, 'B.C.B', 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'R.M', 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'B.B', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(23, 'S.B', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(24, 'B.B.H', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(25, 'P.D', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(26, 'M.K.H', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(27, 'J.K', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(28, 'S.Dey', 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 'B.D', 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 'P.M', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1),
(31, 'S.K.M', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(32, 'G.M', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(33, 'A.B', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(34, 'H.M', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_schedule_new`
--
ALTER TABLE `class_schedule_new`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Teacher_ID` (`Teacher_ID`);

--
-- Indexes for table `teacher_profile_new`
--
ALTER TABLE `teacher_profile_new`
  ADD PRIMARY KEY (`Teacher_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_schedule_new`
--
ALTER TABLE `class_schedule_new`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1796;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_schedule_new`
--
ALTER TABLE `class_schedule_new`
  ADD CONSTRAINT `class_schedule_new_ibfk_1` FOREIGN KEY (`Teacher_ID`) REFERENCES `teacher_profile_new` (`Teacher_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
