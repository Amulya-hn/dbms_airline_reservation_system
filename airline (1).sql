-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 03, 2018 at 01:35 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `procedure1`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `procedure1` (IN `city1` VARCHAR(50), IN `city2` VARCHAR(50))  BEGIN

select fno, fname, fromf, tof, dtime, atime, fare, datef, noofseats from flight where fromf=city1 and tof=city2;

END$$

DROP PROCEDURE IF EXISTS `procedure2`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `procedure2` (IN `a` VARCHAR(50), IN `b` VARCHAR(50), IN `c` VARCHAR(50), IN `d` VARCHAR(50))  BEGIN

insert into passenger(pname, gender, dob, paddress) values ('a','b','c','d');

END$$

DROP PROCEDURE IF EXISTS `procedure3`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `procedure3` (IN `a` VARCHAR(50), IN `b` VARCHAR(50))  BEGIN

select pno, pname, gender, dob, paddress from passenger where pname=a and paddress=b; 


END$$

DROP PROCEDURE IF EXISTS `procedure4`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `procedure4` ()  NO SQL
BEGIN

select distinct flight.fno, fname, fromf, tof, dtime, atime, fare, datef, noofseats, nooftickf from flight, ticketstatus where flight.fno=ticketstatus.fno;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `pname` varchar(50) NOT NULL,
  `pno` int(11) NOT NULL AUTO_INCREMENT,
  `fno` int(11) NOT NULL,
  PRIMARY KEY (`pno`,`fno`),
  KEY `fno` (`fno`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`pname`, `pno`, `fno`) VALUES
('apoorva', 1, 1),
('apoorva n', 2, 1),
('harish', 3, 2),
('anitha', 4, 2),
('aksh', 5, 4),
('satish', 6, 4),
('kav', 7, 4);

--
-- Triggers `admin`
--
DROP TRIGGER IF EXISTS `trigger1`;
DELIMITER $$
CREATE TRIGGER `trigger1` AFTER INSERT ON `admin` FOR EACH ROW update ticketstatus set nooftickf=nooftickf+1
where ticketstatus.fno=new.fno
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

DROP TABLE IF EXISTS `flight`;
CREATE TABLE IF NOT EXISTS `flight` (
  `fno` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `fromf` varchar(50) NOT NULL,
  `tof` varchar(50) NOT NULL,
  `dtime` varchar(50) NOT NULL,
  `atime` varchar(50) NOT NULL,
  `fare` int(11) NOT NULL,
  `datef` varchar(50) NOT NULL,
  `noofseats` int(11) DEFAULT NULL,
  PRIMARY KEY (`fno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`fno`, `fname`, `fromf`, `tof`, `dtime`, `atime`, `fare`, `datef`, `noofseats`) VALUES
(1, 'indigo', 'bangalore', 'mumbai', '12.30', '14.30', 6000, '24-11-2018', 30),
(2, 'air asia', 'delhi', 'goa', '18.00', '20.30', 6000, '25-11-2018', 30),
(3, 'go air', 'bangalore', 'goa', '10.00', '11.00', 6000, '24-11-2018', 30),
(4, 'air india', 'mumbai', 'pune', '15.00', '16.30', 6000, '25-11-2018', 30),
(5, 'indigo', 'bangalore', 'pune', '11.00', '12.00', 6000, '24-11-2018', 30),
(6, 'go air', 'bangalore', 'kolkata', '18.00', '20.30', 6000, '25-11-2018', 30),
(7, 'air asia', 'bangalore', 'delhi', '9.00', '11.30', 6000, '24-11-2018', 30);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

DROP TABLE IF EXISTS `passenger`;
CREATE TABLE IF NOT EXISTS `passenger` (
  `pno` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `paddress` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pno`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`pno`, `pname`, `gender`, `dob`, `paddress`) VALUES
(1, 'amulya', 'f', '1999-01-15', 'blore'),
(2, 'apoorva n', 'f', '1997-12-23', 'blore'),
(3, 'anitha', 'f', '1999-01-15', 'mysore'),
(4, 'harish', 'm', '1997-12-23', 'blore'),
(5, 'kav', 'f', '2018-12-05', 'blore'),
(6, 'aksh', 'm', '2018-12-26', 'blore'),
(7, 'satish', 'm', '2018-12-13', 'mysore');

--
-- Triggers `passenger`
--
DROP TRIGGER IF EXISTS `a`;
DELIMITER $$
CREATE TRIGGER `a` AFTER DELETE ON `passenger` FOR EACH ROW delete from admin where pno=old.pno
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `b`;
DELIMITER $$
CREATE TRIGGER `b` AFTER DELETE ON `passenger` FOR EACH ROW delete from payment where pno=old.pno
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `trigger3`;
DELIMITER $$
CREATE TRIGGER `trigger3` AFTER UPDATE ON `passenger` FOR EACH ROW update admin set pname=new.pname 
where pno=new.pno
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `name` varchar(50) NOT NULL,
  `cardno` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `fno` int(11) NOT NULL,
  `pno` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`pno`,`fno`),
  KEY `fno` (`fno`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`name`, `cardno`, `cvv`, `fno`, `pno`) VALUES
('amulya', 1234567876, 123, 1, 1),
('amulya', 1234567876, 123, 1, 2),
('harish', 1234567834, 357, 2, 3),
('harish', 1234567834, 357, 2, 4),
('kav', 1345678900, 111, 4, 5),
('kav', 1345678900, 111, 4, 6),
('kav', 1345678900, 111, 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`) VALUES
(1, 'amulya', 'amulya@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'amul', 'a@gmail.com', '145'),
(3, 'amulya', 'a@gmail.vv', '111'),
(4, 'bruhathi', 'bruhathi.bhushan22@gmail.com', '123'),
(5, 'Ankitha', 'ankitha@gmail.com', '1234'),
(6, 'Amulya', 'aer@gmail.com', 'qwertyuiop');

--
-- Triggers `signup`
--
DROP TRIGGER IF EXISTS `trigger2`;
DELIMITER $$
CREATE TRIGGER `trigger2` AFTER INSERT ON `signup` FOR EACH ROW BEGIN
if (length(new.password)<4)
THEN
update signup set password=new.username where id=new.id;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ticketstatus`
--

DROP TABLE IF EXISTS `ticketstatus`;
CREATE TABLE IF NOT EXISTS `ticketstatus` (
  `fno` int(11) NOT NULL,
  `nooftickf` int(11) NOT NULL,
  PRIMARY KEY (`fno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketstatus`
--

INSERT INTO `ticketstatus` (`fno`, `nooftickf`) VALUES
(1, 17),
(2, 15),
(3, 5),
(4, 3),
(5, 3),
(6, 0),
(7, 7);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
