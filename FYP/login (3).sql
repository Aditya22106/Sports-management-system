-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 08:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `createdOn` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `username`, `password`, `createdOn`) VALUES
(2, 'Aditya', 'aditya@gmail.com', '057829fa5a65fc1ace408f490be486ac', '2023-03-10 01:20:57'),
(3, 'admin\r\n\r\n\r\n', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2023-04-08 11:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `venue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `date`, `time`, `venue`) VALUES
(15, 'Cricket', '13 Players  Needed', '2023-12-31', '12:58:00', 'g2 VIT'),
(16, 'Chess', '1 player Required.\r\n', '2023-04-17', '12:55:00', 'Den'),
(17, 'Table Tennis', '2 player team Required.\r\n', '2023-04-17', '12:55:00', 'Den'),
(18, 'Cricket', '13 Players team ', '2023-05-07', '22:37:00', 'g2 VIT');

-- --------------------------------------------------------

--
-- Table structure for table `femalecricket`
--

CREATE TABLE `femalecricket` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `roll2` varchar(50) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `roll3` varchar(50) NOT NULL,
  `name4` varchar(50) NOT NULL,
  `roll4` varchar(50) NOT NULL,
  `name5` varchar(50) NOT NULL,
  `roll5` varchar(50) NOT NULL,
  `name6` varchar(50) NOT NULL,
  `roll6` varchar(50) NOT NULL,
  `name7` varchar(50) NOT NULL,
  `roll7` varchar(50) NOT NULL,
  `name8` varchar(50) NOT NULL,
  `roll8` varchar(50) NOT NULL,
  `name9` varchar(50) NOT NULL,
  `roll9` varchar(50) NOT NULL,
  `name10` varchar(50) NOT NULL,
  `roll10` varchar(50) NOT NULL,
  `name11` varchar(50) NOT NULL,
  `roll11` varchar(50) NOT NULL,
  `name12` varchar(50) NOT NULL,
  `roll12` varchar(50) NOT NULL,
  `name13` varchar(50) NOT NULL,
  `roll13` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `femalefootballl`
--

CREATE TABLE `femalefootballl` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `roll2` varchar(50) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `roll3` varchar(50) NOT NULL,
  `name4` varchar(50) NOT NULL,
  `roll4` varchar(50) NOT NULL,
  `name5` varchar(50) NOT NULL,
  `roll5` varchar(50) NOT NULL,
  `name6` varchar(50) NOT NULL,
  `roll6` varchar(50) NOT NULL,
  `name7` varchar(50) NOT NULL,
  `roll7` varchar(50) NOT NULL,
  `name8` varchar(50) NOT NULL,
  `roll8` varchar(50) NOT NULL,
  `name9` varchar(50) NOT NULL,
  `roll9` varchar(50) NOT NULL,
  `name10` varchar(50) NOT NULL,
  `roll10` varchar(50) NOT NULL,
  `name11` varchar(50) NOT NULL,
  `roll11` varchar(50) NOT NULL,
  `name12` varchar(50) NOT NULL,
  `roll12` varchar(50) NOT NULL,
  `name13` varchar(50) NOT NULL,
  `roll13` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `malechess`
--

CREATE TABLE `malechess` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `malechess`
--

INSERT INTO `malechess` (`ID`, `name`, `roll`, `phone`, `email`) VALUES
(5, 'sahil', '20203C0050', '', 'sahil@gmail.com'),
(6, 'sahil', '20203C0050', '', 'sahil@gmail.com'),
(13, 'sahil', '20203C0050', '01245964558', 'sahil@gmail.com'),
(14, 'aditya', '20203C0050', '215532321', 'aditya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `malecricket`
--

CREATE TABLE `malecricket` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `roll2` varchar(50) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `roll3` varchar(50) NOT NULL,
  `name4` varchar(50) NOT NULL,
  `roll4` varchar(50) NOT NULL,
  `name5` varchar(50) NOT NULL,
  `roll5` varchar(50) NOT NULL,
  `name6` varchar(50) NOT NULL,
  `roll6` varchar(50) NOT NULL,
  `name7` varchar(50) NOT NULL,
  `roll7` varchar(50) NOT NULL,
  `name8` varchar(50) NOT NULL,
  `roll8` varchar(50) NOT NULL,
  `name9` varchar(50) NOT NULL,
  `roll9` varchar(50) NOT NULL,
  `name10` varchar(50) NOT NULL,
  `roll10` varchar(50) NOT NULL,
  `name11` varchar(50) NOT NULL,
  `roll11` varchar(50) NOT NULL,
  `name12` varchar(50) NOT NULL,
  `roll12` varchar(50) NOT NULL,
  `name13` varchar(50) NOT NULL,
  `roll13` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `malecricket`
--

INSERT INTO `malecricket` (`ID`, `name`, `roll`, `phone`, `email`, `name2`, `roll2`, `name3`, `roll3`, `name4`, `roll4`, `name5`, `roll5`, `name6`, `roll6`, `name7`, `roll7`, `name8`, `roll8`, `name9`, `roll9`, `name10`, `roll10`, `name11`, `roll11`, `name12`, `roll12`, `name13`, `roll13`) VALUES
(0, 'sahil', '', '01245964558', 'sahil@gmail.com', 'sahil', '963', 'dgh', '963.', 'dvbnm', '63.', 'azxcvghji', '78632', 'wsdcvghui', '742698', 'rtyukn', '987412', 'rtyujnn', '9874123', 'fgtyujkm', '984123', 'fgyuikm,', '89632', 'gvbnm', '6321', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `malefootballl`
--

CREATE TABLE `malefootballl` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `roll2` varchar(50) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `roll3` varchar(50) NOT NULL,
  `name4` varchar(50) NOT NULL,
  `roll4` varchar(50) NOT NULL,
  `name5` varchar(50) NOT NULL,
  `roll5` varchar(50) NOT NULL,
  `name6` varchar(50) NOT NULL,
  `roll6` varchar(50) NOT NULL,
  `name7` varchar(50) NOT NULL,
  `roll7` varchar(50) NOT NULL,
  `name8` varchar(50) NOT NULL,
  `roll8` varchar(50) NOT NULL,
  `name9` varchar(50) NOT NULL,
  `roll9` varchar(50) NOT NULL,
  `name10` varchar(50) NOT NULL,
  `roll10` varchar(50) NOT NULL,
  `name11` varchar(50) NOT NULL,
  `roll11` varchar(50) NOT NULL,
  `name12` varchar(50) NOT NULL,
  `roll12` varchar(50) NOT NULL,
  `name13` varchar(50) NOT NULL,
  `roll13` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `ID` int(11) NOT NULL,
  `game` varchar(50) NOT NULL,
  `win` varchar(50) NOT NULL,
  `sec` varchar(50) NOT NULL,
  `thr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`ID`, `game`, `win`, `sec`, `thr`) VALUES
(1, 'chess', 'CO5IC', 'CO5IC', 'CO6IC'),
(2, 'cricket', 'CO5IC', 'CO5IC', 'CO6IC');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `createdOn` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`id`, `name`, `email`, `password`, `createdOn`) VALUES
(2, 'Aditya ', 'adityayeole33@gmail.com', '22d7fe8c185003c98f97e5d6ced420c7', '2023-03-09 19:27:56'),
(3, 'Aditya ', 'aditya@gmail.com', '057829fa5a65fc1ace408f490be486ac', '2023-03-10 01:16:27'),
(4, 'sahil', 'sahil@gmail.com', '1006f0ae5a7ece19828a67ac62288e05', '2023-03-17 22:40:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `femalecricket`
--
ALTER TABLE `femalecricket`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `malechess`
--
ALTER TABLE `malechess`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `femalecricket`
--
ALTER TABLE `femalecricket`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `malechess`
--
ALTER TABLE `malechess`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentlogin`
--
ALTER TABLE `studentlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
