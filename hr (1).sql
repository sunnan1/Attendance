-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 08:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkinout`
--

CREATE TABLE `checkinout` (
  `ID` bigint(20) NOT NULL,
  `ACCESS_ID` bigint(20) NOT NULL,
  `USERID` int(11) NOT NULL,
  `CHECKTIME` datetime DEFAULT NULL,
  `CHECKTYPE` varchar(10) DEFAULT NULL,
  `MACHINE_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkinout`
--

INSERT INTO `checkinout` (`ID`, `ACCESS_ID`, `USERID`, `CHECKTIME`, `CHECKTYPE`, `MACHINE_ID`) VALUES
(160, 1, 1, '2020-12-31 13:34:58', 'I', 1),
(161, 2, 2, '2020-12-31 13:35:19', 'I', 1),
(162, 3, 3, '2020-12-31 11:32:13', 'I', 1),
(163, 4, 3, '2020-12-31 11:34:24', 'I', 1),
(164, 5, 3, '2020-12-31 11:40:26', 'I', 1),
(165, 6, 3, '2020-12-31 11:41:13', 'I', 4),
(166, 7, 3, '2020-12-31 11:41:17', 'I', 4),
(167, 8, 3, '2020-12-31 11:41:20', 'I', 4),
(168, 9, 3, '2020-12-31 11:41:26', 'I', 4),
(169, 10, 3, '2020-12-31 11:41:28', 'I', 4),
(170, 11, 1, '2020-12-31 11:49:50', 'I', 1),
(171, 12, 2, '2020-12-31 13:35:54', 'O', 1),
(172, 13, 2, '2020-12-31 13:35:59', 'O', 1),
(173, 14, 2, '2020-12-31 13:36:54', 'O', 1),
(174, 15, 2, '2020-12-31 13:36:57', 'O', 1),
(175, 16, 2, '2020-12-31 13:36:59', 'O', 1),
(176, 17, 2, '2020-12-31 13:37:05', 'O', 1),
(177, 18, 2, '2020-12-31 13:37:07', 'O', 1),
(178, 19, 2, '2020-12-31 13:37:14', 'I', 1),
(179, 20, 1, '2020-12-31 13:49:52', 'I', 1),
(180, 21, 1, '2020-12-31 13:51:14', 'I', 1),
(181, 22, 1, '2020-12-31 13:53:03', 'O', 1),
(182, 23, 1, '2021-01-05 09:47:01', 'I', 1),
(183, 24, 2, '2021-01-05 09:32:49', 'I', 1),
(184, 25, 1, '2021-01-05 09:58:38', 'I', 1),
(185, 26, 4, '2021-01-05 10:03:13', 'I', 1),
(186, 27, 4, '2021-01-05 10:04:08', 'I', 1),
(187, 28, 1, '2021-01-05 11:20:07', 'I', 1),
(189, 30, 1, '2021-01-05 11:21:30', 'I', 1),
(190, 31, 2, '2021-01-05 11:24:44', 'I', 4),
(191, 32, 2, '2021-01-05 11:24:52', 'I', 4),
(192, 33, 2, '2021-01-05 11:33:07', 'I', 1),
(193, 34, 2, '2021-01-05 11:34:25', 'I', 4),
(194, 35, 2, '2021-01-05 11:31:16', 'I', 1),
(195, 36, 2, '2021-01-05 11:32:15', 'I', 4),
(196, 37, 1, '2021-01-05 11:32:49', 'I', 1),
(197, 38, 2, '2021-01-05 11:34:18', 'I', 4),
(198, 39, 2, '2021-01-05 11:34:19', 'I', 4),
(199, 40, 2, '2021-01-05 11:34:23', 'I', 4),
(200, 41, 2, '2021-01-05 11:35:11', 'I', 4),
(201, 42, 2, '2021-01-05 11:35:16', 'I', 1),
(202, 43, 2, '2021-01-05 11:35:18', 'I', 4),
(203, 44, 2, '2021-01-05 11:37:56', 'I', 4),
(204, 45, 2, '2021-01-05 11:37:58', 'I', 4),
(205, 46, 2, '2021-01-05 11:37:59', 'I', 4),
(206, 47, 2, '2021-01-05 11:38:00', 'I', 4),
(207, 48, 2, '2021-01-05 11:38:02', 'I', 4),
(208, 49, 2, '2021-01-05 11:37:19', 'I', 4),
(209, 50, 2, '2021-01-05 11:40:14', 'I', 4),
(210, 51, 2, '2021-01-05 11:40:40', 'I', 4),
(211, 52, 2, '2021-01-05 11:41:26', 'I', 4),
(212, 53, 2, '2021-01-05 11:41:30', 'I', 1);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `ID` int(11) NOT NULL,
  `DEPT_NAME` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`ID`, `DEPT_NAME`) VALUES
(1, 'ICT');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `ACTIVE` varchar(10) DEFAULT NULL,
  `TYPE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`ID`, `username`, `password`, `ACTIVE`, `TYPE`) VALUES
(1, 'admin@pic.edu.pk', '$2y$10$fHFoYLIAMfoe6xAGQfrnnuZfxGoPjvnh.HByCAMAFl/v5rapnyusO', '1', 'ADMIN'),
(2, 'sunnan.fazal95@hotmail.com', '$2y$10$fHFoYLIAMfoe6xAGQfrnnuZfxGoPjvnh.HByCAMAFl/v5rapnyusO', '1', 'CANDIDATE'),
(7, 'sunnan.fazal2495@gmail.com', '$2y$10$GIcOd4KwGFJGALaJ4h9ooOkDAz7oARx612pVhRhLYYnEUgqC/T.B6', '1', 'CANDIDATE');

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `ID` int(11) NOT NULL,
  `SHIFT_NAME` varchar(500) DEFAULT NULL,
  `SHIFT_START` varchar(50) DEFAULT NULL,
  `SHIFT_END` varchar(50) DEFAULT NULL,
  `NEXT_DAY_END` varchar(1) DEFAULT NULL,
  `START_GRACE_TIME` varchar(50) DEFAULT NULL,
  `END_GRACE_TIME` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shifts`
--

INSERT INTO `shifts` (`ID`, `SHIFT_NAME`, `SHIFT_START`, `SHIFT_END`, `NEXT_DAY_END`, `START_GRACE_TIME`, `END_GRACE_TIME`) VALUES
(1, 'Morning', '08:00', '16:30', '1', '15', '5');

-- --------------------------------------------------------

--
-- Table structure for table `sys_logs`
--

CREATE TABLE `sys_logs` (
  `id` bigint(20) NOT NULL,
  `system_name` varchar(500) NOT NULL,
  `action` text NOT NULL,
  `action_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `ID` int(11) NOT NULL,
  `BADGENUMBER` varchar(500) DEFAULT NULL,
  `SSN` varchar(500) DEFAULT NULL,
  `NAME` varchar(500) DEFAULT NULL,
  `GENDER` varchar(100) DEFAULT NULL,
  `TITLE` varchar(100) DEFAULT NULL,
  `CARDNO` varchar(200) DEFAULT NULL,
  `DEPT_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`ID`, `BADGENUMBER`, `SSN`, `NAME`, `GENDER`, `TITLE`, `CARDNO`, `DEPT_ID`) VALUES
(1, '61', '', 'Sunnan Fazal', 'M', '', '', 1),
(2, '16', '6866462', 'Ali', 'M', 'Manager ICT', '0006866462', 1),
(3, '1122', '', '1122', '', '', '', -1),
(4, '1123', '76', 'Salman Atta', 'M', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkinout`
--
ALTER TABLE `checkinout`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sys_logs`
--
ALTER TABLE `sys_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkinout`
--
ALTER TABLE `checkinout`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sys_logs`
--
ALTER TABLE `sys_logs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=350;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
