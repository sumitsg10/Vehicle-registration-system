-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 11:55 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `AdminEmail` varchar(100) DEFAULT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) NOT NULL,
  `UpdationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `FullName`, `AdminEmail`, `UserName`, `Password`, `UpdationDate`) VALUES
(1, 'Ashish Pal', 'demo@gmail.com', 'Admin', 'f925916e2754e5e03f75dd58a5733251', '2018-07-20 11:20:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl2wheeler`
--

CREATE TABLE `tbl2wheeler` (
  `id` int(11) NOT NULL,
  `PermitNumber` int(5) NOT NULL,
  `VehicleType` varchar(11) DEFAULT NULL,
  `EmpCd` varchar(100) DEFAULT NULL,
  `EmpName` varchar(100) DEFAULT NULL,
  `RegsNo` varchar(100) NOT NULL,
  `ModelNo` varchar(100) DEFAULT NULL,
  `Colour` varchar(100) DEFAULT NULL,
  `MobileNo` char(11) DEFAULT NULL,
  `EmailId` varchar(100) NOT NULL,
  `GatePassValidFrom` date DEFAULT NULL,
  `GatePassValidUpto` date NOT NULL,
  `DLNo` varchar(20) NOT NULL,
  `DLUpto` date NOT NULL,
  `InsuranceNo` varchar(20) NOT NULL,
  `InsuranceUpto` date NOT NULL,
  `Remarks` varchar(500) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl2wheeler`
--

INSERT INTO `tbl2wheeler` (`id`, `PermitNumber`, `VehicleType`, `EmpCd`, `EmpName`, `RegsNo`, `ModelNo`, `Colour`, `MobileNo`, `EmailId`, `GatePassValidFrom`, `GatePassValidUpto`, `DLNo`, `DLUpto`, `InsuranceNo`, `InsuranceUpto`, `Remarks`, `CreationDate`, `UpdationDate`) VALUES
(8, 3000, '2 Wheeler', '009', 'Ashish Pal', 'fds79f79sd9', 'LA', 'Red', '0834028403', 'demo2@gmail.com', '2018-07-03', '2018-07-22', '98r39', '2018-07-25', '97fda9s7a', '2018-07-26', 'Two 1 Entry', '2018-07-22 16:34:56', '2018-07-22 16:34:56'),
(9, 90001, 'Two Wheeler', '0f80f80ds', 'Ashish Singh', '08fsa8fs', 'DW', 'White', '7382684398', 'demo3@gmail.com', '2018-07-01', '2018-07-23', 'f9ds8f7d', '2018-07-28', 'fg79ds9gds7', '2018-07-25', 'fasfdsfdsfdsfdsfsfsasd', '2018-07-22 16:37:09', '2018-07-22 16:37:09'),
(10, 90, 'Two ', '09', 'fajifdj', '042djs', '0cus', 'fcksajfi', '8676767575', 'dem2@mail.com', '2018-07-04', '2018-07-23', 'fd6as86f', '2018-07-24', 'fas6f76s', '2018-07-23', 'ds86f8dss', '2018-07-22 20:48:27', '2018-07-22 20:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl4wheeler`
--

CREATE TABLE `tbl4wheeler` (
  `id` int(11) NOT NULL,
  `PermitNumber` int(5) NOT NULL,
  `VehicleType` varchar(11) DEFAULT NULL,
  `EmpCd` varchar(100) DEFAULT NULL,
  `EmpName` varchar(100) DEFAULT NULL,
  `RegsNo` varchar(100) NOT NULL,
  `ModelNo` varchar(100) DEFAULT NULL,
  `Colour` varchar(100) DEFAULT NULL,
  `MobileNo` char(11) DEFAULT NULL,
  `EmailId` varchar(100) NOT NULL,
  `GatePassValidFrom` date DEFAULT NULL,
  `GatePassValidUpto` date NOT NULL,
  `DLNo` varchar(20) NOT NULL,
  `DLUpto` date NOT NULL,
  `InsuranceNo` varchar(20) NOT NULL,
  `InsuranceUpto` date NOT NULL,
  `Remarks` varchar(500) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatioDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl4wheeler`
--

INSERT INTO `tbl4wheeler` (`id`, `PermitNumber`, `VehicleType`, `EmpCd`, `EmpName`, `RegsNo`, `ModelNo`, `Colour`, `MobileNo`, `EmailId`, `GatePassValidFrom`, `GatePassValidUpto`, `DLNo`, `DLUpto`, `InsuranceNo`, `InsuranceUpto`, `Remarks`, `CreationDate`, `UpdatioDate`) VALUES
(1, 9001, '4 Wheeler', 'E801', 'Ashish Pal', '5032805', 'AB', 'Red', '53295329593', 'demo1@gmail.com', '0000-00-00', '0000-00-00', 'kfdi7978re', '0000-00-00', 'FOSUR9389R', '0000-00-00', 'New Four Wheeler Entry', '2018-07-21 19:52:34', '2018-07-21 19:52:34'),
(2, 9999, '4 wheeler', '04320', 'Ashish', '90430', 'AL', 'Blue', '0432080830', 'etst@gmail.com', '2018-07-15', '2018-07-22', '432reww', '2018-07-22', 'rcrewcr3', '2018-07-22', 'First Entry', '2018-07-22 16:29:59', '2018-07-22 16:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `EmpCd` varchar(100) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `EmailId` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` int(1) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `EmpCd`, `FullName`, `EmailId`, `Password`, `Status`, `RegDate`, `UpdationDate`) VALUES
(1, 'E801', 'Ashish Pal', 'demo@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 1, '2018-07-20 11:21:47', '2018-07-22 17:10:40'),
(3, 'E803', 'Manish Gupta', 'test1@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 0, '2018-07-20 11:23:28', '2018-07-22 17:09:57'),
(5, '90901', 'Ashish Pal', 'test2@gmail.com', 'Test@123', 1, '2018-07-22 16:57:47', '2018-07-22 17:10:47'),
(6, '90109', 'Ashish Pal', 'test3@gmail.com', 'Test@123', 0, '2018-07-22 16:59:28', '2018-07-22 16:59:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl2wheeler`
--
ALTER TABLE `tbl2wheeler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl4wheeler`
--
ALTER TABLE `tbl4wheeler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl2wheeler`
--
ALTER TABLE `tbl2wheeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl4wheeler`
--
ALTER TABLE `tbl4wheeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
