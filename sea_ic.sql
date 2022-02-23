-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 03:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sea_ic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` varchar(20) NOT NULL,
  `adminPass` char(200) DEFAULT NULL,
  `userID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminPass`, `userID`) VALUES
('SEA-IC', 'seaic@21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `imageID` int(20) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `postID` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`imageID`, `picture`, `time`, `postID`) VALUES
(431, '1.jpeg', '2022-02-23 18:38:06', 208),
(432, '2.jpeg', '2022-02-23 18:38:06', 208),
(433, '3.jpeg', '2022-02-23 18:38:06', 208),
(434, 'WhatsApp Image 2022-02-23 at 21.43.58.jpeg', '2022-02-23 21:44:30', NULL),
(435, 'WhatsApp Image 2022-02-23 at 21.49.26.jpeg', '2022-02-23 21:50:19', NULL),
(436, 'conf-poster.jpg', '2022-02-23 22:27:06', 209);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `pageID` int(20) NOT NULL,
  `pageName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`pageID`, `pageName`) VALUES
(1, 'service'),
(2, 'csr'),
(3, 'conference'),
(4, 'archive');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postID` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(1000) NOT NULL,
  `archive` int(20) NOT NULL,
  `time` datetime NOT NULL,
  `adminID` varchar(20) NOT NULL,
  `pageID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `title`, `caption`, `archive`, `time`, `adminID`, `pageID`) VALUES
(208, '💻 INTERNET OF THINGS (IoT) IN INDUSTRY 💻', ' Boiler & Safety Engineering Club (BoSEC) akan menganjurkan webinar Internet of Things (IoT) In Industry yang terbuka untuk semua penyertaan. Webinar ini akan memberi pendedahan tentang penyelidikan terhadap sistem IoT, merangkumi penilaian kelebihan, kekurangan serta kesesuai sistem terhadap pelbagai bidang yang berbeza. \r\n\r\nBerikut merupakan butiran program:\r\n\r\nTarikh 📆  : 30 Oktober 2021\r\nWaktu ⏰ : 9.00 AM - 1.00 PM\r\nPlatform 🎥: Microsoft Teams\r\n\r\n💵 Yuran Pendaftaran : RM 15\r\n\r\n📜 Sijil Penyertaan akan disediakan\r\n\r\n👨🏻‍💼Panel Jemputan:\r\nASSOC. PROF. TS. DR. ZULKIFLI BIN MOHAMED\r\nHead of Sports Engineering & Artificial Intelligence Centre (SEA-IC)', 2, '2022-02-23 18:38:06', 'SEA-IC', 2),
(209, '1st COLLOQUIUM ON SYSTEM & SPORTS ENGINEERING (COSSE 2019)', '', 3, '2022-02-23 22:27:06', 'SEA-IC', 3);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projectID` int(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `postID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` int(20) NOT NULL,
  `studentName` varchar(50) NOT NULL,
  `eduLevel` varchar(20) NOT NULL,
  `research` varchar(50) NOT NULL,
  `imageID` int(20) NOT NULL,
  `adminID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `studentName`, `eduLevel`, `research`, `imageID`, `adminID`) VALUES
(53, 'MOHAMAD IDLAN NAZMI BIN MOHAMMAD ', 'Internship', 'DIPLOMA IN COMPUTER SCIENCE AND MATHEMATICS', 434, 'SEA-IC'),
(54, 'MUHAMMAD SOFEE BIN ABDUL RAHMAN', 'Internship', 'DIPLOMA IN COMPUTER SCIENCE AND MATHEMATICS', 435, 'SEA-IC');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamID` int(20) NOT NULL,
  `teamName` varchar(50) DEFAULT NULL,
  `teamTitle` varchar(20) DEFAULT NULL,
  `imageID` int(20) NOT NULL,
  `adminID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(10) NOT NULL,
  `userType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userType`) VALUES
(1, 'ADMINISTRATOR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`),
  ADD UNIQUE KEY `userID` (`userID`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`imageID`),
  ADD KEY `postID` (`postID`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`pageID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `adminID` (`adminID`),
  ADD KEY `pageID` (`pageID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectID`),
  ADD KEY `postID` (`postID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`),
  ADD UNIQUE KEY `imageID` (`imageID`),
  ADD KEY `adminID` (`adminID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamID`),
  ADD KEY `imageID` (`imageID`),
  ADD KEY `adminID` (`adminID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `imageID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=437;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `projectID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `teamID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
