-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 08:40 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket`
--

-- --------------------------------------------------------

--
-- Table structure for table `best`
--

CREATE TABLE `best` (
  `playerid` varchar(100) DEFAULT NULL,
  `bclub` varchar(100) DEFAULT NULL,
  `oponame` varchar(100) DEFAULT NULL,
  `eventid` varchar(100) DEFAULT NULL,
  `matchid` varchar(100) DEFAULT NULL,
  `runs` int(100) DEFAULT NULL,
  `wickets` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club1`
--

CREATE TABLE `club1` (
  `playerid` varchar(100) DEFAULT NULL,
  `clubid` varchar(100) DEFAULT NULL,
  `clubname` varchar(100) DEFAULT NULL,
  `pfirstname` varchar(100) DEFAULT NULL,
  `pmiddlename` varchar(100) DEFAULT NULL,
  `plastname` varchar(100) DEFAULT NULL,
  `pdesignation` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club2`
--

CREATE TABLE `club2` (
  `clubname` varchar(100) DEFAULT NULL,
  `dateofest` varchar(100) DEFAULT NULL,
  `chouseno` varchar(100) DEFAULT NULL,
  `clocation` varchar(100) DEFAULT NULL,
  `cvillage` varchar(100) DEFAULT NULL,
  `cthana` varchar(100) DEFAULT NULL,
  `cdistrict` varchar(100) DEFAULT NULL,
  `cpostcode` int(100) DEFAULT NULL,
  `presidentname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club4`
--

CREATE TABLE `club4` (
  `playerid` varchar(100) DEFAULT NULL,
  `clubid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coach4`
--

CREATE TABLE `coach4` (
  `playerid` varchar(100) DEFAULT NULL,
  `coachid` varchar(100) DEFAULT NULL,
  `coachname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contract1`
--

CREATE TABLE `contract1` (
  `playerid` varchar(100) DEFAULT NULL,
  `startdate` varchar(100) DEFAULT NULL,
  `enddate` varchar(100) DEFAULT NULL,
  `camount` int(100) DEFAULT NULL,
  `witness1` varchar(100) DEFAULT NULL,
  `witness2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `edu`
--

CREATE TABLE `edu` (
  `playerid` varchar(100) DEFAULT NULL,
  `degreename` varchar(100) DEFAULT NULL,
  `institute` varchar(100) DEFAULT NULL,
  `board` varchar(100) DEFAULT NULL,
  `year` int(100) DEFAULT NULL,
  `result` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event3`
--

CREATE TABLE `event3` (
  `matchid` varchar(100) DEFAULT NULL,
  `eventid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event3`
--

INSERT INTO `event3` (`matchid`, `eventid`) VALUES
('463fh', '');

-- --------------------------------------------------------

--
-- Table structure for table `event4`
--

CREATE TABLE `event4` (
  `playerid` varchar(100) DEFAULT NULL,
  `eventid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `generalinfo`
--

CREATE TABLE `generalinfo` (
  `playerid` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `fathersname` varchar(100) DEFAULT NULL,
  `mothersname` varchar(100) DEFAULT NULL,
  `phouseno` varchar(100) DEFAULT NULL,
  `plocation` varchar(100) DEFAULT NULL,
  `pvillage` varchar(100) DEFAULT NULL,
  `pthana` varchar(100) DEFAULT NULL,
  `pdistrict` varchar(100) DEFAULT NULL,
  `ppostcode` int(100) DEFAULT NULL,
  `houseno` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `village` varchar(100) DEFAULT NULL,
  `thana` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `postcode` int(100) DEFAULT NULL,
  `dateofbirth` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matches2`
--

CREATE TABLE `matches2` (
  `playerid` varchar(100) DEFAULT NULL,
  `matchid` varchar(100) DEFAULT NULL,
  `matchdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matches3`
--

CREATE TABLE `matches3` (
  `matchid` varchar(100) DEFAULT NULL,
  `matchdate` varchar(100) DEFAULT NULL,
  `manmatch` varchar(100) DEFAULT NULL,
  `umpire` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches3`
--

INSERT INTO `matches3` (`matchid`, `matchdate`, `manmatch`, `umpire`) VALUES
('463fh', '', 'dfhfd', 'dhdfh');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `playerid` varchar(100) DEFAULT NULL,
  `membership` varchar(100) DEFAULT NULL,
  `otherorg` varchar(100) DEFAULT NULL,
  `signature` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment1`
--

CREATE TABLE `payment1` (
  `playerid` varchar(100) DEFAULT NULL,
  `serialno` varchar(100) DEFAULT NULL,
  `paydate` varchar(100) DEFAULT NULL,
  `duedate` varchar(100) DEFAULT NULL,
  `amount` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `player1`
--

CREATE TABLE `player1` (
  `playerid` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `player2`
--

CREATE TABLE `player2` (
  `playerid` varchar(100) DEFAULT NULL,
  `totwick` int(100) DEFAULT NULL,
  `totrun` int(100) DEFAULT NULL,
  `performance` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `player4`
--

CREATE TABLE `player4` (
  `playerid` varchar(100) DEFAULT NULL,
  `pname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prevhis`
--

CREATE TABLE `prevhis` (
  `playerid` varchar(100) DEFAULT NULL,
  `clubname` varchar(100) DEFAULT NULL,
  `fom` varchar(100) DEFAULT NULL,
  `ta` varchar(100) DEFAULT NULL,
  `totalruns` varchar(100) DEFAULT NULL,
  `totalwickets` varchar(100) DEFAULT NULL,
  `teamleader` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team4`
--

CREATE TABLE `team4` (
  `playerid` varchar(100) DEFAULT NULL,
  `leaderid` varchar(100) DEFAULT NULL,
  `leadername` varchar(100) DEFAULT NULL,
  `formdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `venue2`
--

CREATE TABLE `venue2` (
  `playerid` varchar(100) DEFAULT NULL,
  `venueid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `venue3`
--

CREATE TABLE `venue3` (
  `matchid` varchar(100) DEFAULT NULL,
  `venueid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue3`
--

INSERT INTO `venue3` (`matchid`, `venueid`) VALUES
('463fh', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
