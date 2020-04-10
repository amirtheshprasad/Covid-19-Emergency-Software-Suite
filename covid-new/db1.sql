-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 08:55 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `euser`
--

CREATE TABLE `euser` (
  `eid` int(11) NOT NULL,
  `eno` int(11) NOT NULL,
  `epin` int(11) NOT NULL,
  `ecountry` varchar(255) NOT NULL,
  `ecity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `euser`
--

INSERT INTO `euser` (`eid`, `eno`, `epin`, `ecountry`, `ecity`) VALUES
(3, 1234, 333, '', ''),
(4, 1, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `guser`
--

CREATE TABLE `guser` (
  `gid` int(225) NOT NULL,
  `gno` int(225) NOT NULL,
  `gname` varchar(225) NOT NULL,
  `gcough` varchar(225) NOT NULL,
  `gfever` varchar(225) NOT NULL,
  `gtired` varchar(225) NOT NULL,
  `gshortbreathe` varchar(225) NOT NULL,
  `gother` varchar(225) NOT NULL,
  `gmdetails` varchar(225) DEFAULT NULL,
  `gpin` int(225) NOT NULL,
  `gcountry` varchar(255) NOT NULL,
  `gcity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `lid` int(255) NOT NULL,
  `oid` int(255) NOT NULL,
  `gid` int(225) NOT NULL,
  `eid` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ouser`
--

CREATE TABLE `ouser` (
  `oid` int(255) NOT NULL,
  `ouname` varchar(255) NOT NULL,
  `oupass` varchar(255) NOT NULL,
  `privilege` varchar(255) NOT NULL,
  `oemail` varchar(255) NOT NULL,
  `ocountry` varchar(255) NOT NULL,
  `ocity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ouser`
--

INSERT INTO `ouser` (`oid`, `ouname`, `oupass`, `privilege`, `oemail`, `ocountry`, `ocity`) VALUES
(1, 'ak', 'amith', '', 'amith@y.com', '', ''),
(2, '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `euser`
--
ALTER TABLE `euser`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `guser`
--
ALTER TABLE `guser`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`lid`),
  ADD KEY `gidf` (`gid`),
  ADD KEY `eidf` (`eid`),
  ADD KEY `oidf` (`oid`);

--
-- Indexes for table `ouser`
--
ALTER TABLE `ouser`
  ADD PRIMARY KEY (`oid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `euser`
--
ALTER TABLE `euser`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guser`
--
ALTER TABLE `guser`
  MODIFY `gid` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `lid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ouser`
--
ALTER TABLE `ouser`
  MODIFY `oid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `eidf` FOREIGN KEY (`eid`) REFERENCES `euser` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gidf` FOREIGN KEY (`gid`) REFERENCES `guser` (`gid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `oidf` FOREIGN KEY (`oid`) REFERENCES `ouser` (`oid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
