-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 11, 2016 at 10:41 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atms`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Index` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `subid` int(5) NOT NULL,
  `regno` int(11) NOT NULL,
  `presence` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Index`, `date`, `subid`, `regno`, `presence`) VALUES
(1, '2016-04-28', 1, 20134048, 1),
(2, '2016-04-28', 1, 20134042, 1),
(3, '2016-04-28', 1, 20134165, 0),
(4, '2016-04-28', 1, 20134058, 1),
(5, '2016-04-21', 1, 20134048, 0),
(6, '2016-04-21', 1, 20134042, 1),
(7, '2016-04-21', 1, 20134165, 0),
(8, '2016-04-21', 1, 20134058, 1),
(9, '2016-04-21', 1, 20134048, 1),
(10, '2016-04-21', 1, 20134042, 0),
(11, '2016-04-21', 1, 20134165, 0),
(12, '2016-04-21', 1, 20134058, 1),
(13, '2016-04-12', 1, 20134048, 1),
(14, '2016-04-12', 1, 20134042, 1),
(15, '2016-04-12', 1, 20134165, 1),
(16, '2016-04-12', 1, 20134058, 1),
(17, '2016-04-15', 1, 20134048, 0),
(18, '2016-04-15', 1, 20134042, 0),
(19, '2016-04-15', 1, 20134165, 0),
(20, '2016-04-15', 1, 20134058, 0),
(21, '2016-06-21', 1, 20134048, 0),
(22, '2016-06-21', 1, 20134042, 0),
(23, '2016-06-21', 1, 20134165, 0),
(24, '2016-06-21', 1, 20134058, 0),
(25, '2016-06-22', 1, 20134048, 0),
(26, '2016-06-22', 1, 20134042, 0),
(27, '2016-06-22', 1, 20134165, 0),
(28, '2016-06-22', 1, 20134058, 0),
(29, '2016-06-22', 1, 20134048, 0),
(30, '2016-06-22', 1, 20134042, 1),
(31, '2016-06-22', 1, 20134165, 0),
(32, '2016-06-22', 1, 20134058, 0),
(33, '2016-08-11', 3, 20134048, 0),
(34, '2016-08-11', 3, 20134042, 0),
(35, '2016-08-11', 3, 20134165, 0),
(36, '2016-08-11', 3, 20134058, 0),
(37, '2016-08-09', 3, 20134048, 1),
(38, '2016-08-09', 3, 20134042, 1),
(39, '2016-08-09', 3, 20134165, 1),
(40, '2016-08-09', 3, 20134058, 1);

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE `example` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` varchar(20) NOT NULL,
  `regno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `regno`) VALUES
('neeraj', 20134042),
('Krishna', 20134048),
('rakesh', 20134058),
('nikhil', 20134165);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `username` varchar(15) NOT NULL,
  `subid` int(5) NOT NULL,
  `subname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`username`, `subid`, `subname`) VALUES
('rajitha', 1, 'dbms'),
('manoj', 2, 'scientific c'),
('anurag', 3, 'software e'),
('supriya', 4, 'wns'),
('rajitha', 9, 'dblab');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `name` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`name`, `username`, `password`) VALUES
('anurag jaiswal', 'anurag', 'anurag'),
('manoj mishra', 'manoj', 'manoj'),
('nikhil', 'nikhil', 'nikhil'),
('Rajitha B.', 'rajitha', 'rajitha'),
('supriya dubey', 'supriya', 'supriya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Index`),
  ADD UNIQUE KEY `Index` (`Index`);

--
-- Indexes for table `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `regno` (`regno`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `Index` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
