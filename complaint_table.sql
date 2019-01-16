-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 03:25 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaintbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint_table`
--

CREATE TABLE `complaint_table` (
  `Sr_no` int(2) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Branch` varchar(10) NOT NULL,
  `Complaint_against` varchar(10) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Complaint_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_table`
--

INSERT INTO `complaint_table` (`Sr_no`, `Name`, `Year`, `Branch`, `Complaint_against`, `Subject`, `Complaint_detail`) VALUES
(1, 'pareshx', 'FE', 'COMPS', 'Other', 'qs', 'qs'),
(2, 'pareshx', 'FE', 'COMPS', 'Other', 'qs', 'qs'),
(3, 'Starlord', 'SE', 'COMPS', 'NON-teachi', 'not teaching well', 'rahul sir is bad teacher ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
