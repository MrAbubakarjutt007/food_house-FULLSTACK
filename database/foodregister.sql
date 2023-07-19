-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 09:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `admenpassword`
--

CREATE TABLE `admenpassword` (
  `admenname` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `passworddata` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admenpassword`
--

INSERT INTO `admenpassword` (`admenname`, `passworddata`) VALUES
('abubakar', 'abubakar123');

-- --------------------------------------------------------

--
-- Table structure for table `enterfood`
--

CREATE TABLE `enterfood` (
  `userid` int(250) NOT NULL,
  `fooddata` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `mobiledata` varchar(250) NOT NULL,
  `useraddress` varchar(250) NOT NULL,
  `useritem` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `enterfood`
--

INSERT INTO `enterfood` (`userid`, `fooddata`, `username`, `mobiledata`, `useraddress`, `useritem`) VALUES
(1, 'pattys', 'gohar', '04534254545', 'johartown', 'empty'),
(36, 'ZINGER BERGER WITH FRIZES', 'admin', '03282828201', 'ashraf colony gojra', 'empty'),
(37, 'ZINGER CHISE BERGER WITH FRIZES', 'ALI', '03898989453', 'johar town', 'empty'),
(39, 'ZINGER BERGER WITH FRIZES', 'fahadali', '03456789898', 'kamaltown', 'empty');

-- --------------------------------------------------------

--
-- Table structure for table `registertable`
--

CREATE TABLE `registertable` (
  `id` int(5) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passdetail` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registertable`
--

INSERT INTO `registertable` (`id`, `userid`, `email`, `passdetail`) VALUES
(48, 'fahad', 'fathadali1232GEMAIL.COM', '6767'),
(50, 'tahar', 'taher132@gemil.com', '8987'),
(52, 'JUNAID', 'junaid234@gemail.com', '5647');

-- --------------------------------------------------------

--
-- Table structure for table `singleitem`
--

CREATE TABLE `singleitem` (
  `id` int(100) NOT NULL,
  `codedata` varchar(255) NOT NULL,
  `namedata` varchar(255) NOT NULL,
  `addressdetail` varchar(255) NOT NULL,
  `enternumber` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `singleitem`
--

INSERT INTO `singleitem` (`id`, `codedata`, `namedata`, `addressdetail`, `enternumber`) VALUES
(1, '#4556', 'hares', 'modeltown', '03455656780'),
(6, ' #6745', 'abubakar jutt', 'kamaltown', ' 0367674545'),
(7, ' #4569', 'gohar', 'sarag town', ' 0324242424'),
(9, ' #4569', 'jameelali', 'modelcity', ' 0345678989'),
(10, ' #4569', 'tahar', 'tagcolony', ' 0345465763'),
(11, ' #6745', 'tayab', 'tayabtown', ' 0314141213'),
(12, ' #4569', 'abubakar jutt', 'kamaltown', ' 0453567547');

-- --------------------------------------------------------

--
-- Table structure for table `tablecollection`
--

CREATE TABLE `tablecollection` (
  `idsno` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `dataemail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tablecollection`
--

INSERT INTO `tablecollection` (`idsno`, `username`, `dataemail`, `password`, `datetime`) VALUES
(1, 'ali', 'ali@gmail.com', '3434', '2023-07-06 08:40:06'),
(2, 'tanver', 'tanver@gmail.com', 'tan', '2023-07-06 08:53:42'),
(3, '', '', '', '2023-07-07 04:21:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enterfood`
--
ALTER TABLE `enterfood`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `registertable`
--
ALTER TABLE `registertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `singleitem`
--
ALTER TABLE `singleitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tablecollection`
--
ALTER TABLE `tablecollection`
  ADD PRIMARY KEY (`idsno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enterfood`
--
ALTER TABLE `enterfood`
  MODIFY `userid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `registertable`
--
ALTER TABLE `registertable`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `singleitem`
--
ALTER TABLE `singleitem`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tablecollection`
--
ALTER TABLE `tablecollection`
  MODIFY `idsno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
