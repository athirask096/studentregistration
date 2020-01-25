-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 11:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvcdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `adminid`) VALUES
('amitha', 'amitha', 103),
('vijith', 'vijith', 102),
('gana', 'gana', 105);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `semester` int(11) NOT NULL,
  `noticeid` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `beginningdate` date NOT NULL,
  `author` varchar(20) NOT NULL,
  `endingdate` date NOT NULL,
  `description` varchar(25) NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`semester`, `noticeid`, `title`, `beginningdate`, `author`, `endingdate`, `description`, `adminid`) VALUES
(2, 1, 'seminar', '2020-01-25', 'haridev', '2020-01-26', 'java', 102),
(2, 2, 'workshop', '2020-01-28', 'Hari', '2020-01-30', 'web design', 102);

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `name` varchar(10) NOT NULL,
  `reg_no` int(11) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `semester` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`name`, `reg_no`, `dob`, `email`, `gender`, `phoneno`, `qualification`, `batch`, `semester`, `username`, `password`) VALUES
('athira', 44, '1996-03-05', 'athira@gmail.com', 'female', 92345678, 'B.tech', 'ECE', 2, 'athira', 'athira'),
('Jasmine', 55, '1998-06-30', 'jas@gmail.com', 'female', 934578225, 'B.tech', 'CSE', 2, 'jasmine', 'jasmine'),
('nima', 53, '1998-12-05', 'nima@gmail.com', 'female', 924688124, 'b.tech', 'ece', 2, 'nima', 'nima'),
('leena', 45, '1998-08-02', 'leena@gmail.com', 'female', 86543290, 'b.tech', 'cse', 2, 'leena', 'leena'),
('bini', 74, '1996-08-01', 'bini@gmail.com', 'female', 82390273, 'b.tech', 'cse', 2, 'bini', 'bini'),
('anu', 22, '1997-08-01', 'anu@gmail.com', 'female', 823401234, 'b.tech', 'UI', 3, 'anu', 'anu');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `reg_no` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `coursecode` int(11) NOT NULL,
  `subjectname` varchar(20) NOT NULL,
  `result` varchar(10) NOT NULL,
  `credit` int(11) NOT NULL,
  `totalgpa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`reg_no`, `username`, `coursecode`, `subjectname`, `result`, `credit`, `totalgpa`) VALUES
(44, 'athira', 203, 'physics', 'A', 3, 9),
(55, 'jasmine', 203, 'physics', 'A', 3, 9),
(44, 'athira', 205, 'maths', 'A', 4, 9),
(44, 'athira', 202, 'english', 'B', 3, 9),
(44, 'athira', 206, 'Integrated circuits', 'A', 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `code` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `year` bigint(20) NOT NULL,
  `credit` int(11) NOT NULL,
  `subjectname` varchar(20) NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`code`, `semester`, `year`, `credit`, `subjectname`, `adminid`) VALUES
(203, 2, 2020, 3, 'physics', 102),
(202, 2, 2020, 3, 'english', 102),
(204, 2, 2020, 4, 'electronics', 102),
(205, 2, 2020, 4, 'maths', 102),
(206, 2, 2020, 3, 'integrated circuits', 102),
(303, 3, 2020, 4, 'c', 102);

-- --------------------------------------------------------

--
-- Table structure for table `subjectlist`
--

CREATE TABLE `subjectlist` (
  `subname` varchar(20) NOT NULL,
  `coursecode` int(11) NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjectlist`
--

INSERT INTO `subjectlist` (`subname`, `coursecode`, `adminid`) VALUES
('english', 202, 102),
('electronics', 204, 102),
('maths', 205, 102),
('integrated circuits', 206, 102),
('c', 303, 102);

-- --------------------------------------------------------

--
-- Table structure for table `superuser`
--

CREATE TABLE `superuser` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superuser`
--

INSERT INTO `superuser` (`username`, `password`) VALUES
('superuser', 'user123');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `day` varchar(10) NOT NULL,
  `coursename` varchar(10) NOT NULL,
  `semester` int(11) NOT NULL,
  `subjectname` varchar(10) NOT NULL,
  `time` time NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`day`, `coursename`, `semester`, `subjectname`, `time`, `adminid`) VALUES
('monday', 'jsd2', 2, 'java', '09:00:00', 102),
('tuesday', 'jsd2', 2, 'physics', '09:00:00', 102),
('wednesday', 'jsd2', 2, 'maths', '09:00:00', 102),
('thursday', 'jsd2', 2, 'integrated', '09:00:00', 102);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
