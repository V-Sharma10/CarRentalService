-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2019 at 10:11 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `agentlogin`
--

CREATE TABLE `agentlogin` (
  `UserId` varchar(20) COLLATE utf8_bin NOT NULL,
  `Password` varchar(20) COLLATE utf8_bin NOT NULL,
  `Name` text COLLATE utf8_bin NOT NULL,
  `City` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `agentlogin`
--

INSERT INTO `agentlogin` (`UserId`, `Password`, `Name`, `City`) VALUES
('NIRAJ5517', 'NIRAJ', 'NIRAJ OSWAL', 'JAMSHEDPUR'),
('viveksharma', 'vivek123', 'Vivek Sharma', 'KOLKATA');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `BookingId` int(20) NOT NULL,
  `AgentId` varchar(20) COLLATE utf8_bin NOT NULL,
  `Destination` text COLLATE utf8_bin NOT NULL,
  `Source` text COLLATE utf8_bin NOT NULL,
  `VehicleId` varchar(20) COLLATE utf8_bin NOT NULL,
  `Amount` int(5) NOT NULL,
  `BookingTime` varchar(30) COLLATE utf8_bin NOT NULL,
  `ServiceTime` varchar(30) COLLATE utf8_bin NOT NULL,
  `flag` int(11) NOT NULL,
  `Distance` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`BookingId`, `AgentId`, `Destination`, `Source`, `VehicleId`, `Amount`, `BookingTime`, `ServiceTime`, `flag`, `Distance`) VALUES
(1, 'NIRAJ5517', 'DELHI', 'JAMSHEDPUR', 'ASD1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, ''),
(2, 'NIRAJ5517', 'DELHI', 'JAMSHEDPUR', 'ASD1', 9080, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, ''),
(3, 'NIRAJ5517', 'DELHI', 'JAMSHEDPUR', 'ASD1', 9080, '2019-04-12 09:10:55', '0000-00-00 00:00:00', 0, ''),
(4, 'NIRAJ5517', 'DELHI', 'JAMSHEDPUR', 'ASD1', 9080, '2019-04-12 12:43:40', '0000-00-00 00:00:00', 0, ''),
(5, 'NIRAJ5517', 'DELHI', 'JAMSHEDPUR', 'ASD1', 9080, '2019-04-12 19:02:50', '0000-00-00 00:00:00', 1, ''),
(6, 'NIRAJ5517', 'DELHI', 'JAMSHEDPUR', 'ASD1', 9080, '2019-04-12 19:15:06', '0000-00-00 00:00:00', 1, ''),
(7, 'NIRAJ5517', 'DELHI', 'JAMSHEDPUR', 'ASD1', 9080, '2019-04-12 19:03:50', '0000-00-00 00:00:00', 1, ''),
(8, 'NIRAJ5517', 'DELHI', 'JAMSHEDPUR', 'ASD1', 9080, '2019-04-12 01:33:37', '0000-00-00 00:00:00', 1, ''),
(9, 'NIRAJ5517', 'DELHI', 'JAMSHEDPUR', '1', 9080, '2019-04-12 19:03:19', '0000-00-00 00:00:00', 1, ''),
(10, 'NIRAJ5517', 'DELHI', 'KOLKATA', '56', 19975, '2019-04-05 08:08:33pm', '2019-04-09 08:30:00am', 0, '200'),
(11, 'NIRAJ5517', 'JAIPUR', 'KOLKATA', '56', 20800, '2019-04-12 08:51:29pm', '2019-04-14 07:30:00am', 0, '1360'),
(12, 'NIRAJ5517', 'JAIPUR', 'KOLKATA', '56', 20800, '2019-04-12 08:52:19pm', '2019-04-14 07:30:00am', 0, '1360'),
(13, 'NIRAJ5517', 'JAIPUR', 'KOLKATA', '56', 20800, '2019-04-12 08:57:00pm', '2019-04-14 07:30:00am', 1, '1360'),
(14, 'NIRAJ5517', 'JAIPUR', 'KOLKATA', '56', 20800, '2019-04-12 09:00:25pm', '2019-04-14 07:30:00am', 0, '1360'),
(15, 'NIRAJ5517', 'JAIPUR', 'KOLKATA', '56', 20800, '2019-04-12 09:03:14pm', '2019-04-14 07:30:00am', 0, '1360'),
(16, 'NIRAJ5517', 'JAIPUR', 'KOLKATA', '56', 20800, '2019-04-12 09:05:34pm', '2019-04-14 07:30:00am', 0, '1360'),
(17, 'NIRAJ5517', 'JAIPUR', 'KOLKATA', '56', 20800, '2019-04-12 09:06:41pm', '2019-04-14 07:30:00am', 1, '1360'),
(18, 'NIRAJ5517', 'JAIPUR', 'KOLKATA', '56', 20800, '2019-04-12 09:07:22pm', '2019-04-14 07:30:00am', 0, '1360'),
(19, 'NIRAJ5517', 'BENGALURU', 'JAMSHEDPUR', 'ASD1', 11592, '2019-04-12 10:09:00pm', '2019-04-17 04:30:00pm', 0, '1424'),
(20, 'NIRAJ5517', 'BENGALURU', 'JAMSHEDPUR', 'ASD1', 11592, '2019-04-12 10:11:13pm', '2019-04-17 04:30:00pm', 0, '1424'),
(21, 'NIRAJ5517', 'BENGALURU', 'JAMSHEDPUR', 'ASD1', 11592, '2019-04-12 10:12:36pm', '2019-04-17 04:30:00pm', 0, '1424'),
(22, 'NIRAJ5517', 'BENGALURU', 'JAMSHEDPUR', 'ASD1', 11592, '2019-04-12 10:13:48pm', '2019-04-17 04:30:00pm', 0, '1424'),
(23, 'NIRAJ5517', 'JAIPUR', 'JAMSHEDPUR', '1', 9376, '2019-04-12 10:30:20pm', '2019-04-14 04:30:00am', 1, '1147'),
(24, 'NIRAJ5517', 'BENGALURU', 'JAIPUR', '1', 12712, '2019-04-12 11:38:27pm', '2019-04-03 02:00:00am', 0, '1564'),
(25, 'NIRAJ5517', 'BENGALURU', 'JAIPUR', '56', 23860, '2019-04-12 11:42:15pm', '2019-04-03 05:30:00am', 0, '1564');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `type` text COLLATE utf8_bin NOT NULL,
  `seater` int(11) NOT NULL,
  `base_fare` int(11) NOT NULL,
  `perkm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`type`, `seater`, `base_fare`, `perkm`) VALUES
('A', 4, 200, 8),
('B', 4, 250, 10),
('A', 6, 350, 12),
('B', 6, 400, 15),
('A', 8, 500, 20),
('B', 8, 600, 25);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `BookingId` varchar(20) COLLATE utf8_bin NOT NULL,
  `Name` text COLLATE utf8_bin NOT NULL,
  `Address` text COLLATE utf8_bin NOT NULL,
  `Mobile` varchar(20) COLLATE utf8_bin NOT NULL,
  `Email` varchar(30) COLLATE utf8_bin NOT NULL,
  `AadhaarNo` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`BookingId`, `Name`, `Address`, `Mobile`, `Email`, `AadhaarNo`) VALUES
('5', 'NIRAJ OSWAL', 'kota', '2147483647', '', ''),
('6', 'NIRAJ OSWAL', 'kota', '2147483647', '', ''),
('7', 'NIRAJ OSWAL', 'kota', '2147483647', '', ''),
('8', 'NIRAJ OSWAL', 'kota', '9900997788', '', ''),
('9', 'NIRAJ OSWAL', 'kota', '9900997788', '', ''),
('', 'VIVEK KUMAR SHARMA', 'ASDF SDFGYH SRT 454@ State:JHARKHAND Country:INDIA', '8899889988', 'BGHR@GMAIL.COM', '1234567898765'),
('10', 'VIVEK KUMAR SHARMA', 'ASDF SDFGYH SRT 454@ State:JHARKHAND Country:INDIA', '8899889988', 'BGHR@GMAIL.COM', '1234567898765'),
('', 'RITIK  RAJ', 'QWER AWERTY State:JHARKHAND Country:INDIA', '5566556677', 'ASDFG', '1234567898765'),
('11', 'RITIK  RAJ', 'QWER AWERTY State:JHARKHAND Country:INDIA', '5566556677', 'ASDFG', '1234567898765'),
('12', 'RITIK  RAJ', 'QWER AWERTY State:JHARKHAND Country:INDIA', '5566556677', 'ASDFG', '1234567898765'),
('13', 'RITIK  RAJ', 'QWER AWERTY State:JHARKHAND Country:INDIA', '5566556677', 'ASDFG', '1234567898765'),
('0', 'RITIK  RAJ', 'QWER AWERTY State:JHARKHAND Country:INDIA', '5566556677', 'ASDFG', '1234567898765'),
('0', 'RITIK  RAJ', 'QWER AWERTY State:JHARKHAND Country:INDIA', '5566556677', 'ASDFG', '1234567898765'),
('0', 'RITIK  RAJ', 'QWER AWERTY State:JHARKHAND Country:INDIA', '5566556677', 'ASDFG', '1234567898765'),
('17', 'RITIK  RAJ', 'QWER AWERTY State:JHARKHAND Country:INDIA', '5566556677', 'ASDFG', '1234567898765'),
('0', 'RITIK  RAJ', 'QWER AWERTY State:JHARKHAND Country:INDIA', '5566556677', 'ASDFG', '1234567898765'),
('0', 'NIKHIL  RAJ', 'ASDFGH SDFGHJ State:JHARKHAND Country:INDIA', '765438765432', 'JHGFD', '123456789'),
('0', 'NIKHIL  RAJ', 'ASDFGH SDFGHJ State:JHARKHAND Country:INDIA', '765438765432', 'JHGFD', '123456789'),
('0', 'NIKHIL  RAJ', 'ASDFGH SDFGHJ State:JHARKHAND Country:INDIA', '765438765432', 'JHGFD', '123456789'),
('0', 'NIKHIL  RAJ', 'ASDFGH SDFGHJ State:JHARKHAND Country:INDIA', '765438765432', 'JHGFD', '123456789'),
('23', 'NBVCX  KJHGF', 'JHGF KJHGFDS State:JHGFD Country:JHGFX', '8754E3W', 'JHGFD', '98765432'),
('24', '765432 UYTRE UYTREW', 'KKJHGFD LKJHGFDS State:KJHGFDS Country:JHGFDS', '8765432', 'JKJHGFDS', '987654321'),
('25', 'qqwerty  jhgfd', 'jhgfdsa State:jhgfds Country:jhgfds', 'jhgtfrde', 'hgfd', 'hgfds');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `Vehicle_id` varchar(20) COLLATE utf8_bin NOT NULL,
  `Vehicle_Name` varchar(20) COLLATE utf8_bin NOT NULL,
  `Type` varchar(20) COLLATE utf8_bin NOT NULL,
  `Seats` int(2) NOT NULL,
  `City` text COLLATE utf8_bin NOT NULL,
  `AvailableTime` varchar(30) COLLATE utf8_bin NOT NULL,
  `img_path` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`Vehicle_id`, `Vehicle_Name`, `Type`, `Seats`, `City`, `AvailableTime`, `img_path`) VALUES
('1', 'nano', 'A', 4, 'BENGALURU', '2019-04-04 04:04:00am', 'car3.jpg'),
('56', 'AUDI', 'B', 6, 'BENGALURU', '2019-04-04 07:34:00am', 'download.jpeg'),
('ASD1', 'nano', 'A', 4, 'BENGALURU', '2019-04-18 04:14:00pm', '268042.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agentlogin`
--
ALTER TABLE `agentlogin`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`Vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `BookingId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
