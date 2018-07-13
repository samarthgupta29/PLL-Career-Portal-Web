-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2018 at 06:22 PM
-- Server version: 5.7.22-0ubuntu18.04.1
-- PHP Version: 7.2.5-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pllcareer`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `addressline1` varchar(100) NOT NULL,
  `addressline2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactdetails`
--

INSERT INTO `contactdetails` (`addressline1`, `addressline2`, `city`, `state`, `zipcode`, `telephone`, `mobile`) VALUES
('', '', '', '', '', '', ''),
('dvbawrjhfbvwhajb', 'vkfhrzbgrjhbg', 'new delhi', 'delhi', '000000', '1234567889', '123142536467'),
('test', 'test', 'test', 'test', 'test', 'test', 'test'),
('', '', '', '', '', '', ''),
('Manipal University Jaipur', 'YOHO Hostel', 'BAGRU', 'Dahmi Kalan', '303007', '07073804522', '7073804522'),
('dewf4r', 'derr24r', 'ef23', 'fwr', 'ega', 'frg', 'garg'),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('new delhi', 'delhi', 'delhi', 'delhi', '1100000', '12345', '12345'),
('test', 'test', 'test', 'test', 'test', 'test', 'test'),
('', '', 'test5', 'test5', 'test5', 'test5', ''),
('', '', '', '', '', '', ''),
('test2', 'test2', 'test2', 'test2', 'test2', 'test2', 'test2'),
('', '', '', '', '', '', ''),
('test3', 'test3', 'test3', 'test3', 'test3', 'test3', 'test3'),
('test3', 'test3', 'test3', 'test3', 'test3', 'test3', 'test3'),
('', '', '', '', '', '', ''),
('test4', 'test4', 'test4', 'test4', 'test4', 'test4', 'test4'),
('', '', '', '', '', '', ''),
('', '', 'test6', 'test6', 'test6', 'test6', ''),
('', '', '', '', '', '', ''),
('', '', 'test7', 'test7', 'test7', 'test7', ''),
('', '', 'test7', 'test7', 'test7', 'test7', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('test13', 'test13', 'test13', 'test13', 'test13', 'test13', 'test13'),
('', '', 'test13', 'test13', 'test13', 'test13', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('dwef', 'rsg', 'srg', 'gdfq', 'dfb', 'fbd', 'dgb'),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `ten_name` varchar(100) NOT NULL,
  `ten_major` varchar(100) NOT NULL,
  `ten_percentage` varchar(100) NOT NULL,
  `twelve_name` varchar(100) NOT NULL,
  `twelve_major` varchar(100) NOT NULL,
  `twelve_percentage` varchar(100) NOT NULL,
  `gradname` varchar(100) NOT NULL,
  `gradmajor` varchar(100) NOT NULL,
  `gradpercentage` varchar(100) NOT NULL,
  `postgradname` varchar(100) NOT NULL,
  `postgradmajor` varchar(100) NOT NULL,
  `postgradpercentage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`ten_name`, `ten_major`, `ten_percentage`, `twelve_name`, `twelve_major`, `twelve_percentage`, `gradname`, `gradmajor`, `gradpercentage`, `postgradname`, `postgradmajor`, `postgradpercentage`) VALUES
('gfc', 'dawd', 'g', 'fg', 'ghv', 'gvhgv', 'hgvh', 'hvh', 'vhvhv', 'hvhv', 'hvhvh', 'hv'),
('ytfds', 'dsvf', 'dvdf', 'dafwf', 'efsgvw', 'fbdfg', 'fs', 'vsg', 'fgh', 'fg', 'fg', 'ghyn'),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('test13', 'test13', 'test13', '', '', '', '', '', '', '', '', ''),
('test14', 'test14', 'test14', 'test14', 'test14', 'test14', '', '', '', '', '', ''),
('test15', 'test15', 'test15', 'test15', 'test15', 'test15', 'test15', 'test15', 'test15', 'test15', 'test15', 'test15'),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `firstname`, `middlename`, `lastname`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, 'Peter', 'Parker', 'test'),
(4, 'test', 'test', 'test'),
(5, 'Peter', 'Parker', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `personalinformation`
--

CREATE TABLE `personalinformation` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `aadhar` varchar(100) NOT NULL,
  `pan` varchar(100) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personalinformation`
--

INSERT INTO `personalinformation` (`id`, `firstname`, `middlename`, `lastname`, `email`, `aadhar`, `pan`, `dob`, `gender`) VALUES
(1, '', '', '', '', '', '', NULL, ''),
(2, '', '', '', '', '', '', NULL, ''),
(3, '', '', '', '', '', '', NULL, ''),
(4, '', '', '', '', '', '', NULL, ''),
(5, '', '', '', '', '', '', NULL, ''),
(6, '', '', '', '', '', '', NULL, ''),
(7, 'test', 'test', 'test', '', '', '', NULL, ''),
(8, 'test', 'test', 'test', 'test', 'test', 'test', NULL, ''),
(9, '', '', '', '', '', '', NULL, ''),
(10, 'test', 'test', 'test', 'test', 'test', 'test', NULL, 'male'),
(11, 'test', 'test', 'test', 'test', 'test', 'test', NULL, 'male'),
(12, 'Samarth', 'test', 'Gupta', 'samarthgupta29@gmail.com', '123456789', '123456789', NULL, 'male'),
(13, '', '', '', '', '', '', NULL, ''),
(14, '', '', '', '', '', '', NULL, ''),
(15, 'test5', 'test5', 'test5', 'test5', 'test5', 'test5', NULL, 'male'),
(16, 'test2', 'test2', 'test2', 'test2', 'test2', 'test2', NULL, 'male'),
(17, '', '', '', '', '', '', NULL, ''),
(18, 'test3', 'test3', 'test3', 'test3', 'test3', 'test3', NULL, 'male'),
(19, '', '', '', '', '', '', NULL, ''),
(20, '', '', '', '', '', '', NULL, ''),
(21, 'test4', 'test4', 'test4', 'test4', 'test4', 'test4', NULL, 'male'),
(22, '', '', '', '', '', '', NULL, ''),
(23, 'test6', 'test6', 'test6', 'test6', 'test6', 'test6', NULL, 'male'),
(24, '', '', '', '', '', '', NULL, ''),
(25, 'test7', 'test7', 'test7', 'test7', 'test7', 'test7', NULL, 'male'),
(26, '', '', '', '', '', '', NULL, ''),
(27, '', '', '', '', '', '', NULL, ''),
(28, 'test7', 'test7', 'test7', 'test7', 'test7', 'test7', NULL, 'male'),
(29, '', '', '', '', '', '', NULL, 'male'),
(30, '', '', '', '', '', '', NULL, ''),
(31, '', '', '', '', '', '', NULL, 'male'),
(32, '', '', '', '', '', '', NULL, ''),
(33, 'test8', 'test8', 'test8', 'test8', 'test8', 'test8', NULL, 'male'),
(34, 'test9', 'test9', 'test9', 'test9', 'test9', 'test9', NULL, 'male'),
(35, 'test10', 'test10', 'test10', 'test10', 'test10', 'test10', NULL, 'male'),
(36, '', '', '', '', '', '', NULL, 'male'),
(37, 'test11', 'test11', 'test11', 'test11', 'test11', 'test11', NULL, 'male'),
(38, 'test12', 'test12', 'test12', 'test12', 'test12', 'test12', NULL, 'male'),
(39, '', '', '', '', '', '', NULL, 'male'),
(40, '', '', '', '', '', '', NULL, ''),
(41, '', '', '', '', '', '', NULL, 'male'),
(42, '', '', '', '', '', '', NULL, ''),
(43, '', '', '', '', '', '', NULL, ''),
(44, '', '', '', '', '', '', NULL, ''),
(45, '', '', '', '', '', '', NULL, ''),
(46, '', '', '', '', '', '', NULL, 'male'),
(47, '', '', '', '', '', '', NULL, ''),
(48, '', '', '', '', '', '', NULL, ''),
(49, '', '', '', '', '', '', NULL, ''),
(50, '', '', '', '', '', '', NULL, 'male'),
(51, '', '', '', '', '', '', NULL, ''),
(52, '', '', '', '', '', '', NULL, ''),
(53, '', '', '', '', '', '', NULL, ''),
(54, '', '', '', '', '', '', NULL, ''),
(55, '', '', '', '', '', '', NULL, ''),
(56, '', '', '', '', '', '', NULL, ''),
(57, '', '', '', '', '', '', NULL, ''),
(58, '', '', '', '', '', '', NULL, ''),
(59, '', '', '', '', '', '', NULL, ''),
(60, '', '', '', '', '', '', NULL, 'male'),
(61, '', '', '', '', '', '', NULL, ''),
(62, '', '', '', '', '', '', NULL, ''),
(63, '', '', '', '', '', '', NULL, ''),
(64, 'test13', 'test13', 'test13', 'test13', 'test13', 'test13', NULL, 'male'),
(65, 'test13', 'test13', 'test13', 'test13', 'test13', 'test13', NULL, 'male'),
(66, '', '', '', '', '', '', NULL, ''),
(67, '', '', '', '', '', '', NULL, ''),
(68, '', '', '', '', '', '', NULL, ''),
(69, '', '', '', '', '', '', NULL, ''),
(70, '', '', '', '', '', '', NULL, ''),
(71, 'Manish', '', 'Chaudhary', 'm@m.com', 'test', '12345', NULL, 'male'),
(72, 'session1', 'session2', '', '', '', '', NULL, 'male'),
(73, 'session3', 'session4', '', '', '', '', NULL, 'male'),
(74, '', '', '', '', '', '', NULL, 'male'),
(75, 'test', 'test', '', '', '', '', NULL, 'male'),
(76, '', '', '', '', '', '', NULL, ''),
(77, '', '', '', '', '', '', NULL, ''),
(78, 'testname', 'testname', 'testname', 'testemail', 'testno.', 'testno.', NULL, 'male'),
(79, 'Blaze', '', 'Cluster', 'blaze@gmail.com', '', '', NULL, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `one` int(11) NOT NULL,
  `two` int(11) NOT NULL,
  `three` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`one`, `two`, `three`) VALUES
(1, 2, 3),
(123, 456, 789),
(111, 222, 333);

-- --------------------------------------------------------

--
-- Table structure for table `workexperience`
--

CREATE TABLE `workexperience` (
  `nameoforganization` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `payrate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workexperience`
--

INSERT INTO `workexperience` (`nameoforganization`, `address`, `city`, `state`, `zipcode`, `telephone`, `designation`, `payrate`) VALUES
('test', 'test', 'test', 'test', 'test', 'test', 'test', 'test'),
('', '', '', '', '', '', '', ''),
('', '', 'test2', 'test2', 'test2', 'test2', '', ''),
('', '', '', '', '', '', '', ''),
('', '', 'test3', 'test3', 'test3', 'test3', '', ''),
('', '', 'test3', 'test3', 'test3', 'test3', '', ''),
('', '', '', '', '', '', '', ''),
('', '', 'test4', 'test4', 'test4', 'test4', '', ''),
('', '', '', '', '', '', '', ''),
('test6', 'test6', 'test6', 'test6', 'test6', 'test6', 'test6', 'test6'),
('', '', '', '', '', '', '', ''),
('test7', 'test7', 'test7', 'test7', 'test7', 'test7', 'test7', 'test7'),
('test7', 'test7', 'test7', 'test7', 'test7', 'test7', 'test7', 'test7'),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', 'test13', 'test13', 'test13', 'test13', '', ''),
('test13', 'test13', 'test13', 'test13', 'test13', 'test13', 'test13', 'test13'),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', 'srg', 'gdfq', 'dfb', 'fbd', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personalinformation`
--
ALTER TABLE `personalinformation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `personalinformation`
--
ALTER TABLE `personalinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
