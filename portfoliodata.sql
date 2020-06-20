-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 07:32 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfoliodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `areaofinterest`
--

CREATE TABLE `areaofinterest` (
  `interest` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `areaofinterest`
--

INSERT INTO `areaofinterest` (`interest`) VALUES
('Reading Books'),
('Playing Cricket'),
('Novel Writing'),
('Prediction Based Model'),
('Data Analytics');

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `certid` varchar(11) NOT NULL,
  `certname` varchar(50) NOT NULL,
  `certorganization` varchar(50) NOT NULL,
  `certdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`certid`, `certname`, `certorganization`, `certdate`) VALUES
('12561', 'Internet Connection: How to Get Online?', 'Coursera', '2019-09-11'),
('13545', 'Introduction to HTML5', 'Coursera', '2020-06-07'),
('171219', 'Programming for Everybody (Getting Started with Py', 'Coursera', '2019-09-30'),
('64645', 'How to think about Machine Learning Algorithm', 'Plural Sight', '2020-04-23'),
('73637', 'Python Data Structures', 'Coursera', '2019-12-14'),
('9489', 'Understanding of Machine Learning With Python', 'Plural Sight', '2020-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `institution` varchar(50) NOT NULL,
  `degreename` varchar(50) NOT NULL,
  `Board` varchar(50) NOT NULL,
  `pyear` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`institution`, `degreename`, `Board`, `pyear`) VALUES
('Intelligentsia Science College Moro', 'SSC I-II', 'BISE Sukkur', '2014'),
('IBA Community College NF', 'FSC I-II', 'Aga Khan Karachi', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `destName` varchar(100) NOT NULL,
  `Companyname` varchar(100) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`destName`, `Companyname`, `startdate`, `enddate`) VALUES
('Front End Developer', 'AWA Software House karachi', '2019-02-01', '2019-05-31'),
('Laravel developer', 'Netsol Software House karachi', '2019-06-01', '2019-08-01'),
('Full Stack Developer', 'Freelancing', '2020-01-01', '2020-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `itprojects`
--

CREATE TABLE `itprojects` (
  `PROJECTName` varchar(50) NOT NULL,
  `ProgrammingLanguage` varchar(50) NOT NULL,
  `GUI` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itprojects`
--

INSERT INTO `itprojects` (`PROJECTName`, `ProgrammingLanguage`, `GUI`) VALUES
('ATM Machine', 'C++', 'No'),
('Employee Management System', 'Java', 'Yes'),
('IOT based Sensing System', 'Aurdino', 'Yes'),
('English to English Dictionary ', 'Java + Data Structures', 'Yes'),
('Library Management System', 'Java + Databases', 'Yes'),
('Ludo Star Game', 'C#', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`certid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
