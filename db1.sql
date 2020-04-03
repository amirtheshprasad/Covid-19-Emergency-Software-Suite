-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.12-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for proj-cov
DROP DATABASE IF EXISTS `proj-cov`;
CREATE DATABASE IF NOT EXISTS `proj-cov` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `proj-cov`;

-- Dumping structure for table proj-cov.euser
DROP TABLE IF EXISTS `euser`;
CREATE TABLE IF NOT EXISTS `euser` (
  `eid` int(100) NOT NULL AUTO_INCREMENT,
  `eno` int(100) NOT NULL,
  `epin` int(100) NOT NULL,
  `ephone` bigint(20) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='emergency user\r\n';

-- Data exporting was unselected.

-- Dumping structure for table proj-cov.guser
DROP TABLE IF EXISTS `guser`;
CREATE TABLE IF NOT EXISTS `guser` (
  `gid` int(100) NOT NULL AUTO_INCREMENT,
  `gno` int(100) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `gage` int(11) NOT NULL,
  `gcough` varchar(50) NOT NULL,
  `gfever` varchar(50) NOT NULL,
  `gtired` varchar(50) NOT NULL,
  `gshortbreathe` varchar(50) NOT NULL,
  `gmdetails` varchar(50) NOT NULL,
  `gpin` int(100) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='general user\r\n';

-- Data exporting was unselected.

-- Dumping structure for table proj-cov.log
DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `oid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  PRIMARY KEY (`lid`),
  KEY `oid` (`oid`),
  KEY `gid` (`gid`),
  KEY `eid` (`eid`),
  CONSTRAINT `eid` FOREIGN KEY (`eid`) REFERENCES `euser` (`eid`),
  CONSTRAINT `gid` FOREIGN KEY (`gid`) REFERENCES `guser` (`gid`),
  CONSTRAINT `oid` FOREIGN KEY (`oid`) REFERENCES `ouser` (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='will have the login details of the respective user and patient .';

-- Data exporting was unselected.

-- Dumping structure for table proj-cov.ouser
DROP TABLE IF EXISTS `ouser`;
CREATE TABLE IF NOT EXISTS `ouser` (
  `oid` int(100) NOT NULL AUTO_INCREMENT COMMENT 'PRIMARY KEY',
  `ouname` varchar(100) NOT NULL,
  `outpass` varchar(100) NOT NULL,
  `privelege` varchar(100) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='the table for official users\r\n';

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
