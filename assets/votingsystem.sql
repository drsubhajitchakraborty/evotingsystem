-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 09:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(255) NOT NULL,
  `Aadhaar` varchar(255) NOT NULL,
  `Epic` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Aadhaar`, `Epic`, `Designation`) VALUES
('SUBHAJIT CHAKRABORTY', '9999', '6666', 'SOFTWARE DEVELOPER');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `NAME` varchar(255) NOT NULL,
  `CANDIDATE NAME` varchar(255) NOT NULL,
  `VOTE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`NAME`, `CANDIDATE NAME`, `VOTE`) VALUES
('Aam Admi Party', 'Arvind Kejriwal', '1'),
('All India Trinamool Congress', 'Mamata Banerjee	', '0'),
('Bharatiya Janata Party', 'Narendra Modi', '0'),
('Communist Party of India (Marxist)', 'Buddhadeb Bhattacharya', '0'),
('Indian National Congress', 'Rahul Gandhi	', '0'),
('NOTA', 'WXYZ', '2');

-- --------------------------------------------------------

--
-- Table structure for table `publicdata`
--

CREATE TABLE `publicdata` (
  `Aadhar` varchar(255) NOT NULL,
  `epic` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Constituency` varchar(255) NOT NULL DEFAULT 'Tollygunge',
  `Vote` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publicdata`
--

INSERT INTO `publicdata` (`Aadhar`, `epic`, `Name`, `Constituency`, `Vote`) VALUES
('1', 'A1', 'SUBHAJIT CHAKRABORTY', 'Tollygunge', 'Done'),
('2', 'A2', 'SATADRU CHAKRABORTY', 'DURGPUR', 'Done'),
('3', 'A3', 'Rohit PATRA', 'MIDNAPORE', 'Done'),
('4', 'A4', 'SASWATI SAIKIA', 'KOLKATA', ''),
('5', 'A5', 'SAURAV KUNDU', 'BAGUIHATI', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`NAME`),
  ADD UNIQUE KEY `CANDIDATE NAME` (`CANDIDATE NAME`);

--
-- Indexes for table `publicdata`
--
ALTER TABLE `publicdata`
  ADD PRIMARY KEY (`Aadhar`(12));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
