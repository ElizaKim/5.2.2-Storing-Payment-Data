-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


-- Table structure for table `payment`

CREATE TABLE `payment` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `cardnum` int(16) NOT NULL,
  `cvv` int(3) NOT NULL,
  `edate` date NOT NULL,
  `stname` varchar(50) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `sname` text NOT NULL,
  `zip` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
