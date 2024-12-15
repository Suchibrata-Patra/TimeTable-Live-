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
-- Table structure for table `class_schedule`
--

CREATE TABLE `class_schedule` (
  `ID` int(11) NOT NULL,
  `Weekday` varchar(20) NOT NULL DEFAULT 'Monday',
  `Class` varchar(10) DEFAULT NULL,
  `Subject` varchar(30) DEFAULT NULL,
  `Teacher_ID` int(11) DEFAULT NULL,
  `Class_Time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class_schedule`
--

INSERT INTO `class_schedule` (`ID`, `Weekday`, `Class`, `Subject`, `Teacher_ID`, `Class_Time`) VALUES
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
(1606, 'Monday', '6C', 'Sc.', 17, '7th'),
(1607, 'Monday', '7A', 'Mathematics', 23, '1st'),
(1608, 'Monday', '7A', 'Life Science', 10, '2nd'),
(1609, 'Monday', '7A', 'Bengali', 4, '3rd'),
(1610, 'Monday', '7A', 'Physical Education', 2, '4th'),
(1611, 'Monday', '7A', 'English', 20, '5th'),
(1612, 'Monday', '7A', 'Sanskrit', 24, '6th'),
(1613, 'Monday', '7A', 'Sc.', 12, '7th'),
(1614, 'Monday', '7A', 'Computer', 25, '8th'),
(1615, 'Monday', '7B', 'Sc.', 12, '1st'),
(1616, 'Monday', '7B', 'Geography', 16, '2nd'),
(1617, 'Monday', '7B', 'History', 19, '3rd'),
(1618, 'Monday', '7B', 'English', 26, '4th'),
(1619, 'Monday', '7B', 'Mathematics', 27, '5th'),
(1620, 'Monday', '7B', 'English', 20, '6th'),
(1621, 'Monday', '7B', 'Sanskrit', 28, '7th'),
(1622, 'Monday', '7B', 'Dharma', 5, '8th'),
(1623, 'Monday', '7C', 'Sc.', 17, '1st'),
(1624, 'Monday', '7C', 'Sanskrit', 24, '2nd'),
(1625, 'Monday', '7C', 'Geography', 11, '3rd'),
(1626, 'Monday', '7C', 'Computer', 7, '4th'),
(1627, 'Monday', '7C', 'Bengali', 29, '5th'),
(1628, 'Monday', '7C', 'English', 30, '6th'),
(1629, 'Monday', '7C', 'Mathematics', 23, '7th'),
(1630, 'Monday', '7C', 'History', 19, '8th'),
(1631, 'Monday', '8A', 'Sanskrit', 28, '1st'),
(1632, 'Monday', '8A', 'English', 13, '2nd'),
(1633, 'Monday', '8A', 'Bengali', 9, '3rd'),
(1634, 'Monday', '8A', 'Sc.', 17, '4th'),
(1635, 'Monday', '8A', 'English', 5, '5th'),
(1636, 'Monday', '8A', 'Geography', 11, '6th'),
(1637, 'Monday', '8A', 'Work Education', 15, '7th'),
(1638, 'Monday', '8A', 'Physical Education', 2, '8th'),
(1639, 'Monday', '8B', 'English', 30, '1st'),
(1640, 'Monday', '8B', 'Sanskrit', 28, '2nd'),
(1641, 'Monday', '8B', 'Bengali', 24, '3rd'),
(1642, 'Monday', '8B', 'History', 31, '4th'),
(1643, 'Monday', '8B', 'Physical Education', 1, '5th'),
(1644, 'Monday', '8B', 'English', 20, '6th'),
(1645, 'Monday', '8B', 'Bengali', 9, '7th'),
(1646, 'Monday', '8B', 'G.K', 14, '8th'),
(1647, 'Monday', '8C', 'Geography', 18, '1st'),
(1648, 'Monday', '8C', 'History', 19, '2nd'),
(1649, 'Monday', '8C', 'Sc.', 14, '3rd'),
(1650, 'Monday', '8C', 'Mathematics', 8, '4th'),
(1651, 'Monday', '8C', 'English', 13, '5th'),
(1652, 'Monday', '8C', 'Dharma', 7, '6th'),
(1653, 'Monday', '8C', 'Bengali', 24, '8th'),
(1654, 'Monday', '8C', 'English', 20, '8th'),
(1655, 'Monday', '9A', 'Mathematics', 27, '1st'),
(1656, 'Monday', '9A', 'Bengali', 6, '2nd'),
(1657, 'Monday', '9A', 'Geography', 16, '3rd'),
(1658, 'Monday', '9A', 'Life Science', 10, '4th'),
(1659, 'Monday', '9A', 'History', 21, '5th'),
(1660, 'Monday', '9A', 'Bengali', 29, '6th'),
(1661, 'Monday', '9A', 'Physical Science', 14, '7th'),
(1662, 'Monday', '9A', 'English', 3, '8th'),
(1663, 'Monday', '9B', 'Life Science', 10, '1st'),
(1664, 'Monday', '9B', 'English', 30, '2nd'),
(1665, 'Monday', '9B', 'History', 21, '3rd'),
(1666, 'Monday', '9B', 'Mathematics', 27, '4th'),
(1667, 'Monday', '9B', 'Physical Science', 14, '5th'),
(1668, 'Monday', '9B', 'Mathematics', 32, '6th'),
(1669, 'Monday', '9B', 'English', 11, '7th'),
(1670, 'Monday', '9B', 'Bengali', 4, '8th'),
(1671, 'Monday', '9C', 'Physical Science', 22, '1st'),
(1672, 'Monday', '9C', 'History', 11, '2nd'),
(1673, 'Monday', '9C', 'Life Science', 17, '3rd'),
(1674, 'Monday', '9C', 'Mathematics', 23, '4th'),
(1675, 'Monday', '9C', 'Geography', 18, '5th'),
(1676, 'Monday', '9C', 'History', 21, '6th'),
(1677, 'Monday', '9C', 'English', 30, '7th'),
(1678, 'Monday', '9C', 'Bengali', 29, '8th'),
(1679, 'Monday', '10A', 'Bengali', 4, '1st'),
(1680, 'Monday', '10A', 'English', 26, '2nd'),
(1681, 'Monday', '10A', 'History', 31, '3rd'),
(1682, 'Monday', '10A', 'Mathematics', 32, '4th'),
(1683, 'Monday', '10A', 'Physical Science', 22, '5th'),
(1684, 'Monday', '10A', 'English', 13, '6th'),
(1685, 'Monday', '10A', 'Mathematics', 27, '7th'),
(1686, 'Monday', '10A', 'Geography', 18, '8th'),
(1687, 'Monday', '10B', 'Life Science', 33, '1st'),
(1688, 'Monday', '10B', 'Bengali', 29, '2nd'),
(1689, 'Monday', '10B', 'Mathematics', 32, '3rd'),
(1690, 'Monday', '10B', 'English', 30, '4th'),
(1691, 'Monday', '10B', 'Life Science', 10, '5th'),
(1692, 'Monday', '10B', 'English', 26, '6th'),
(1693, 'Monday', '10B', 'History', 31, '7th'),
(1694, 'Monday', '10B', 'English', 33, '1st'),
(1695, 'Monday', '11 SCIENCE', 'English', 13, '1st'),
(1696, 'Monday', '11 SCIENCE', 'Mathematics', 23, '2nd'),
(1697, 'Monday', '11 SCIENCE', 'Physics', 12, '3rd'),
(1698, 'Monday', '11 SCIENCE', 'Chemistry', 5, '4th'),
(1699, 'Monday', '11 SCIENCE', 'Mathematics', 32, '5th'),
(1700, 'Monday', '11 SCIENCE', 'Bengali', 4, '6th'),
(1701, 'Monday', '11 SCIENCE', 'Life Science', 33, '7th'),
(1702, 'Monday', '11 SCIENCE', 'Life Science', 33, '8th'),
(1703, 'Monday', '11 SCIENCE', 'Comp. Science', 33, '7th'),
(1704, 'Monday', '11 ARTS', 'English', 13, '1st'),
(1705, 'Monday', '11 ARTS', 'Physical Education', 1, '2nd'),
(1706, 'Monday', '11 ARTS', 'Geography', 1, '2nd'),
(1707, 'Monday', '11 ARTS', 'Comp. Application', 1, '2nd'),
(1708, 'Monday', '11 ARTS', 'Sanskrit', 28, '4th'),
(1709, 'Monday', '11 ARTS', 'History', 28, '4th'),
(1710, 'Monday', '11 ARTS', 'Physical Education', 2, '5th'),
(1711, 'Monday', '11 ARTS', 'Comp. Application', 2, '5th'),
(1712, 'Monday', '11 ARTS', 'Bengali', 4, '6th'),
(1713, 'Monday', '11 ARTS', 'Education', 34, '7th'),
(1714, 'Monday', '12 SCIENCE', 'English', 26, '1st'),
(1715, 'Monday', '12 SCIENCE', 'Chemistry', 5, '2nd'),
(1716, 'Monday', '12 SCIENCE', 'Mathematics', 27, '3rd'),
(1717, 'Monday', '12 SCIENCE', 'Bengali', 29, '4th'),
(1718, 'Monday', '12 SCIENCE', 'Life Science', 33, '5th'),
(1719, 'Monday', '12 SCIENCE', 'Comp. Science', 33, '5th'),
(1720, 'Monday', '12 SCIENCE', 'Mathematics', 23, '6th'),
(1721, 'Monday', '12 SCIENCE', 'Chemistry', 22, '7th'),
(1722, 'Monday', '12 SCIENCE', 'Chemistry', 22, '8th'),
(1723, 'Monday', '12 ARTS', 'English', 26, '1st'),
(1724, 'Monday', '12 ARTS', 'Education', 34, '2nd'),
(1725, 'Monday', '12 ARTS', 'Comp. Application', 34, '2nd'),
(1726, 'Monday', '12 ARTS', 'Bengali', 29, '4th'),
(1727, 'Monday', '12 ARTS', 'Sanskrit', 28, '5th'),
(1728, 'Monday', '12 ARTS', 'History', 28, '5th'),
(1729, 'Monday', '12 ARTS', 'Geography', 16, '6th'),
(1730, 'Monday', '12 ARTS', 'Geography', 16, '7th'),
(1731, 'Monday', '12 ARTS', NULL, 34, '2nd'),
(1732, 'Monday', '5A', NULL, 4, '4th'),
(1733, 'Monday', '12 SCIENCE', NULL, 33, '5th'),
(1734, 'Monday', '11 SCIENCE', NULL, 33, '7th'),
(1735, 'Monday', '11 ARTS', NULL, 2, '5th'),
(1736, 'Monday', '11 ARTS', NULL, 1, '2nd'),
(1737, 'Monday', '11 ARTS', NULL, 28, '4th'),
(1738, 'Monday', '12 ARTS', NULL, 28, '5th'),
(1739, 'Monday', '11 ARTS', NULL, 2, '5th'),
(1740, 'Monday', '9A', NULL, 10, '4th'),
(1741, 'Monday', '11 ARTS', NULL, 1, '2nd'),
(1742, 'Monday', '12 ARTS', NULL, 28, '5th'),
(1743, 'Monday', '11 ARTS', NULL, 2, '5th'),
(1744, 'Monday', '5A', NULL, 4, '4th'),
(1745, 'Monday', '11 ARTS', NULL, 1, '2nd'),
(1746, 'Monday', '12 ARTS', NULL, 28, '5th'),
(1747, 'Monday', '11 ARTS', NULL, 2, '5th'),
(1748, 'Monday', '5A', NULL, 4, '4th'),
(1749, 'Monday', '11 ARTS', NULL, 1, '2nd'),
(1750, 'Monday', '10A', NULL, 22, '5th'),
(1751, 'Monday', '12 ARTS', NULL, 28, '5th'),
(1752, 'Monday', '11 ARTS', NULL, 2, '5th'),
(1753, 'Monday', '5A', NULL, 4, '4th'),
(1754, 'Monday', '11 ARTS', NULL, 1, '2nd'),
(1755, 'Monday', '10A', NULL, 22, '5th'),
(1756, 'Monday', '12 ARTS', NULL, 28, '5th'),
(1757, 'Monday', '11 ARTS', NULL, 2, '5th'),
(1758, 'Monday', '5A', NULL, 4, '4th'),
(1759, 'Monday', '11 ARTS', NULL, 1, '2nd'),
(1760, 'Monday', '10A', NULL, 22, '5th'),
(1761, 'Monday', '12 ARTS', NULL, 28, '5th'),
(1762, 'Monday', '5B', NULL, 6, '1st'),
(1763, 'Monday', '11 ARTS', NULL, 2, '5th'),
(1764, 'Monday', '5A', NULL, 4, '4th'),
(1765, 'Monday', '11 ARTS', NULL, 1, '2nd'),
(1766, 'Monday', '10A', NULL, 22, '5th'),
(1767, 'Monday', '12 ARTS', NULL, 28, '5th'),
(1768, 'Monday', '11 SCIENCE', NULL, 23, '2nd'),
(1769, 'Monday', '11 ARTS', NULL, 2, '5th'),
(1770, 'Monday', '5A', NULL, 4, '4th'),
(1771, 'Monday', '11 ARTS', NULL, 1, '2nd'),
(1772, 'Monday', '10A', NULL, 22, '5th'),
(1773, 'Monday', '12 ARTS', NULL, 28, '5th'),
(1774, 'Monday', '6A', NULL, 1, '1st'),
(1775, 'Monday', '11 ARTS', NULL, 2, '5th'),
(1776, 'Monday', '5A', NULL, 4, '4th'),
(1777, 'Monday', '11 ARTS', NULL, 1, '2nd'),
(1778, 'Monday', '10A', NULL, 22, '5th'),
(1779, 'Monday', '12 ARTS', NULL, 28, '5th'),
(1780, 'Monday', '5B', NULL, 6, '1st'),
(1781, 'Monday', '11 ARTS', NULL, 2, '5th'),
(1782, 'Monday', '5A', NULL, 4, '4th'),
(1783, 'Monday', '11 ARTS', NULL, 1, '2nd'),
(1784, 'Monday', '10A', NULL, 22, '5th'),
(1785, 'Monday', '12 ARTS', NULL, 28, '5th'),
(1786, 'Monday', '11 ARTS', NULL, 2, '5th'),
(1787, 'Monday', '5A', NULL, 4, '4th'),
(1788, 'Monday', '11 ARTS', NULL, 1, '2nd'),
(1789, 'Monday', '10A', NULL, 22, '5th'),
(1790, 'Monday', '12 ARTS', NULL, 28, '5th'),
(1791, 'Monday', '11 ARTS', NULL, 7, '5th'),
(1792, 'Monday', '5A', NULL, 11, '4th'),
(1793, 'Monday', '11 ARTS', NULL, 18, '2nd'),
(1794, 'Monday', '10A', NULL, 23, '5th'),
(1795, 'Monday', '12 ARTS', NULL, 31, '5th');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_profile`
--

CREATE TABLE `teacher_profile` (
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
  `1st_period` int(1) NOT NULL DEFAULT '1',
  `2nd_period` int(1) NOT NULL DEFAULT '1',
  `3rd_period` int(1) NOT NULL DEFAULT '1',
  `4th_period` int(1) NOT NULL DEFAULT '1',
  `5th_period` int(1) NOT NULL DEFAULT '1',
  `6th_period` int(1) NOT NULL DEFAULT '1',
  `7th_period` int(1) NOT NULL DEFAULT '1',
  `8th_period` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_profile`
--

INSERT INTO `teacher_profile` (`Teacher_ID`, `Teacher_Name`, `5_allowed`, `6_allowed`, `7_allowed`, `8_allowed`, `9_allowed`, `10_allowed`, `11_allowed`, `12_allowed`, `1st_period`, `2nd_period`, `3rd_period`, `4th_period`, `5th_period`, `6th_period`, `7th_period`, `8th_period`) VALUES
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
-- Indexes for table `class_schedule`
--
ALTER TABLE `class_schedule`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Teacher_ID` (`Teacher_ID`);

--
-- Indexes for table `teacher_profile`
--
ALTER TABLE `teacher_profile`
  ADD PRIMARY KEY (`Teacher_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_schedule`
--
ALTER TABLE `class_schedule`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1796;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_schedule`
--
ALTER TABLE `class_schedule`
  ADD CONSTRAINT `class_schedule_ibfk_1` FOREIGN KEY (`Teacher_ID`) REFERENCES `teacher_profile` (`Teacher_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
