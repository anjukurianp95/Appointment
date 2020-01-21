-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 11:49 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(11) NOT NULL,
  `Did` int(11) NOT NULL,
  `Dname` varchar(20) NOT NULL,
  `Uname` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Slot` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `Did`, `Dname`, `Uname`, `Date`, `Slot`, `Status`) VALUES
(7, 1, 'John', 'Anju', '2020-01-20', '10 AM', 'Pending'),
(8, 2, 'Priya', 'Anju', '2020-01-21', '10 AM', 'Approved'),
(10, 12, 'Catherin', 'David', '2020-01-21', '12 AM', 'Approved'),
(12, 2, 'Priya', 'David', '2020-02-23', '12 AM', 'Pending'),
(14, 12, 'Catherin', 'David', '2020-01-24', '4 PM', 'Rejected'),
(15, 7, 'Mathew', 'David', '2020-02-24', '11 AM', 'Approved'),
(16, 13, 'Lilly', 'Anju', '2020-01-24', '3 PM', 'Pending'),
(17, 1, 'John', 'Anju', '2020-01-25', '11 AM', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Did` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `MobileNo` bigint(20) NOT NULL,
  `Emailid` varchar(30) NOT NULL,
  `Nationalid` varchar(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Experience` varchar(50) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `ClinicAddress` varchar(50) NOT NULL,
  `ClinicTiming` varchar(30) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'requested'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Did`, `Name`, `MobileNo`, `Emailid`, `Nationalid`, `Qualification`, `Experience`, `Department`, `ClinicAddress`, `ClinicTiming`, `Username`, `Password`, `Status`) VALUES
(1, 'John', 8809876545, 'j@gmail.com', '123456', 'MBBS', '3 years', 'ENT', 'Chavadimmukku Jn', '9 am - 6 pm', 'john', 'john123', 'Accepted'),
(2, 'Priya', 9034311056, 'priyadr@gmail.com', '123455', 'MBBS, MD', '5 years', 'Gynaecology', 'Kazhakkuttam', '9 am - 6 pm', 'priyapriya', '123priya', 'Accepted'),
(7, 'Mathew', 7845123654, 'm@gmail.com', '784512', 'MBBS, MD', '10 years', 'Neurology', 'Pattam', '9 am - 6 pm', 'mathew', 'mathew123', 'Accepted'),
(12, 'Catherin', 9234567890, 'c@gmail.com', '675383', 'MBBS, MD', '3 years', 'Cardiology', 'Sreekaryam', '9 am - 6 pm', 'cat', 'cat123', 'Accepted'),
(13, 'Lilly', 8547342312, 'l@gmail.com', '9908765', 'MBBS', '5 years', 'Cardiology', 'Palayam', '9 am - 6 pm', 'lilly', 'lilly123', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Uid` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` int(11) NOT NULL,
  `Nationalid` bigint(20) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Emailid` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Uid`, `Name`, `Gender`, `Age`, `Nationalid`, `Mobile`, `Emailid`, `Username`, `Password`) VALUES
(1, 'Anju', 'female', 24, 6373, 7034311056, 'anju@gmail.com', 'anjukurian', '123anju'),
(5, 'David', 'Male', 45, 34322, 7012519730, 'd@gmail.com', 'david', 'david123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Did`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
