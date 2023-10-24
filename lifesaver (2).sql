-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 01:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifesaver`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'aqsa', 'aqsa@yahoo.com', '1234', '2021-12-17 04:27:38'),
(2, 'muzna', 'muzna@yahoo.com', '1234', '2021-12-17 04:27:38'),
(3, 'alishba', 'alishba@yahoo.com', '1234', '2021-12-17 04:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `cnic` varchar(300) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `profile_pic` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `v_code` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`id`, `name`, `cnic`, `contact`, `email`, `profile_pic`, `password`, `v_code`, `status`, `created_at`) VALUES
(1, 'alishba', '4444444444', '0000', 'alishbajalil@yahoo.com', '', '202cb962ac59075b964b07152d234b70', 'lsalishbajalil@yahoo.com1638205574', 'active', '2021-11-29 22:06:14'),
(2, 'alishba', '4444444444', 'ghi', 'alishbajalil1@gmail.com', '', 'ac627ab1ccbdb62ec96e702f07f6425b', 'lsalishbajalil1@gmail.com1638205703', 'active', '2021-11-29 22:08:23'),
(6, 'aj', '222', '00333', '123@gmail.com', '', '827ccb0eea8a706c4c34a16891f84e7b', 'ls123@gmail.com1638206518', 'active', '2021-11-29 22:21:58'),
(8, 'saddiqa', '000000', '09090', 'saddiqa@gmail.com', 'user_files/essay.jpg', '827ccb0eea8a706c4c34a16891f84e7b', 'lssaddiqa@gmail.com1638284052', 'active', '2021-11-30 19:54:12'),
(13, 'alishba', '1115', '090909', 'king@yahoo.com', '', 'b66dc44cd9882859d84670604ae276e6', 'lsking@yahoo.com1639328400', 'active', '2021-12-12 22:00:00'),
(15, 'alishba', 'oooooooo', '999999999', 'alishbajalil8@yahoo.com', '', '81dc9bdb52d04dc20036dbd8313ed055', 'lsalishbajalil8@yahoo.com1639599658', 'active', '2021-12-16 01:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_edu`
--

CREATE TABLE `doctor_edu` (
  `id` int(11) NOT NULL,
  `dr_id` varchar(200) NOT NULL,
  `deg_title` varchar(200) NOT NULL,
  `institute` varchar(200) NOT NULL,
  `start_year` varchar(200) NOT NULL,
  `passing_year` varchar(200) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `deg_pic` varchar(300) NOT NULL,
  `created at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor_edu`
--

INSERT INTO `doctor_edu` (`id`, `dr_id`, `deg_title`, `institute`, `start_year`, `passing_year`, `remarks`, `deg_pic`, `created at`) VALUES
(1, '9', 'Matric', 'mn', 'nn', 'mm', 'mm', '', '2021-12-17 00:10:28'),
(4, '9', 'Intermediate', 'mn', 'kk', 'kk', 'kk', '', '2021-12-17 00:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_exp`
--

CREATE TABLE `doctor_exp` (
  `id` int(11) NOT NULL,
  `dr_id` int(11) NOT NULL,
  `institute` varchar(300) NOT NULL,
  `position` varchar(300) NOT NULL,
  `start_year` varchar(300) NOT NULL,
  `end_year` varchar(300) NOT NULL,
  `duties` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor_exp`
--

INSERT INTO `doctor_exp` (`id`, `dr_id`, `institute`, `position`, `start_year`, `end_year`, `duties`, `created_at`) VALUES
(1, 9, 'mn', 'mm', 'nn', 'mm', 'kn', '2021-12-16 23:46:45'),
(2, 9, 'mn', 'mm', 'nn', 'mm', 'mm', '2021-12-16 23:50:06'),
(3, 9, 'mn', 'mm', 'mm', 'mm', 'mm', '2021-12-16 23:50:20'),
(4, 9, 'mn', 'mm', 'nn', 'mm', 'kn', '2021-12-16 23:50:32'),
(5, 9, 'mn', 'mm', 'mm', 'mm', 'mm', '2021-12-16 23:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE `doctor_info` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL,
  `cnic` varchar(200) NOT NULL,
  `prov` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `spec` varchar(100) NOT NULL,
  `profile_pic` varchar(300) NOT NULL,
  `v_code` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`id`, `name`, `contact`, `email`, `password`, `cnic`, `prov`, `city`, `address`, `dob`, `spec`, `profile_pic`, `v_code`, `status`, `created_at`) VALUES
(9, 'JALIL BARKAT', '003339090', 'king3@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '4444444444', 'ict', 'ISLAMABAD', 'STREET 37 HOUSE 129-B  F-10/1', '2021-12-23', 'cardiology', 'user_files/biwrmdp-logo1.png', 'lsking3@yahoo.com1639601892', 'active', '2021-12-16 01:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_liscense`
--

CREATE TABLE `doctor_liscense` (
  `id` int(11) NOT NULL,
  `dr_id` int(11) NOT NULL,
  `pmc_vide_no` varchar(300) NOT NULL,
  `pmc_issue` varchar(300) NOT NULL,
  `pmc_valid` varchar(300) NOT NULL,
  `lis_pic` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor_liscense`
--

INSERT INTO `doctor_liscense` (`id`, `dr_id`, `pmc_vide_no`, `pmc_issue`, `pmc_valid`, `lis_pic`, `created_at`) VALUES
(1, 9, 'abc', '2021-12-16', '2021-12-23', '', '2021-12-16 23:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(11) NOT NULL,
  `med_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `id` int(11) NOT NULL,
  `symp_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `visit_history`
--

CREATE TABLE `visit_history` (
  `id` int(11) NOT NULL,
  `dr_id` int(11) NOT NULL,
  `dr_name` varchar(100) NOT NULL,
  `dr_contact` varchar(100) NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_age` varchar(200) NOT NULL,
  `p_contact` varchar(100) NOT NULL,
  `client_relation` varchar(200) NOT NULL,
  `dr_loc` varchar(300) NOT NULL,
  `p_loc` varchar(500) NOT NULL,
  `p_prov` varchar(200) NOT NULL,
  `p_city` varchar(200) NOT NULL,
  `p_symp` varchar(500) NOT NULL,
  `dr_prescript` varchar(500) NOT NULL,
  `bill` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visit_history`
--

INSERT INTO `visit_history` (`id`, `dr_id`, `dr_name`, `dr_contact`, `c_id`, `p_name`, `p_age`, `p_contact`, `client_relation`, `dr_loc`, `p_loc`, `p_prov`, `p_city`, `p_symp`, `dr_prescript`, `bill`, `status`, `created_at`) VALUES
(17, 0, '', '', 8, 'JALIL BARKAT', '00', '09090', '', '', 'STREET 37 HOUSE 129-B  F-10/1,ISLAMABAD,MBBS&BDS', '', '', 'wwww', '', '', '', '2021-12-15 19:24:33'),
(18, 0, '', '', 8, 'JALIL BARKAT', '00', '', '', '', 'STREET 37 HOUSE 129-B  F-10/1,ISLAMABAD,MBBS&BDS', '', '', 'wwww', '', '', '', '2021-12-15 19:24:33'),
(19, 0, '', '', 8, 'JALIL BARKAT', '9', '09090', '', '', 'STREET 37 HOUSE 129-B  F-10/1,ISLAMABAD,ict', '', '', 'jjj', '', '', '', '2021-12-15 19:25:12'),
(20, 0, '', '', 8, 'JALIL BARKAT', '9', '', '', '', 'STREET 37 HOUSE 129-B  F-10/1,ISLAMABAD,ict', '', '', 'jjj', '', '', '', '2021-12-15 19:25:12'),
(21, 0, '', '', 8, 'JALIL BARKAT', '9', '09090', '', '', 'STREET 37 HOUSE 129-B  F-10/1,ISLAMABAD,ict', '', '', 'jjj', '', '', '', '2021-12-15 19:26:16'),
(22, 0, '', '', 8, 'JALIL BARKAT', '88', '09090', '', '', 'STREET 37 HOUSE 129-B  F-10/1,ISLAMABAD,ICT', '', '', 'none', '', '', 'processed', '2021-12-15 20:44:31'),
(23, 0, '', '', 8, 'JALIL BARKAT', '88', '09090', '', '', 'STREET 37 HOUSE 129-B  F-10/1,ISLAMABAD,ICT', '', '', 'non', '', '', 'processed', '2021-12-15 20:48:07'),
(24, 0, '', '', 8, '', '', '', '', '', ',,', '', '', '', '', '', 'Received', '2021-12-16 00:47:21'),
(25, 0, '', '', 15, 'JALIL BARKAT', '0', '999999999', '', '', 'yyyyyyyy,ISLAMABAD,ICT', 'ICT', 'ISLAMABAD', 'flue', '', '', 'processing', '2021-12-17 02:17:23'),
(26, 0, '', '', 15, 'JALIL BARKAT', '8', '999999999', '', '', 'STREET 37 HOUSE 129-B  F-10/1,ISLAMABAD,ICT', 'ICT', 'ISLAMABAD', 'flue', '', '', 'processing', '2021-12-17 02:17:51'),
(27, 9, '', '', 15, 'JALIL BARKAT', '0', '999999999', '', '', '9999,ISLAMABAD,ICT', 'ICT', 'ISLAMABAD', 'fever nfd flu', 'panadol', '', 'completed', '2021-12-17 02:18:07'),
(28, 0, '', '', 15, 'JALIL BARKAT', '0', '999999999', '', '', 'STREET 37 HOUSE 129-B  F-10/1,ISLAMABAD,ICT', 'ICT', 'ISLAMABAD', 'oooo', '', '', 'Processin', '2021-12-17 02:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `visit_medicines`
--

CREATE TABLE `visit_medicines` (
  `id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `visit_symptoms`
--

CREATE TABLE `visit_symptoms` (
  `id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact` (`contact`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `doctor_edu`
--
ALTER TABLE `doctor_edu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dr_id` (`dr_id`,`deg_title`);

--
-- Indexes for table `doctor_exp`
--
ALTER TABLE `doctor_exp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_info`
--
ALTER TABLE `doctor_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `doctor_liscense`
--
ALTER TABLE `doctor_liscense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit_history`
--
ALTER TABLE `visit_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit_medicines`
--
ALTER TABLE `visit_medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit_symptoms`
--
ALTER TABLE `visit_symptoms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `doctor_edu`
--
ALTER TABLE `doctor_edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_exp`
--
ALTER TABLE `doctor_exp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor_info`
--
ALTER TABLE `doctor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctor_liscense`
--
ALTER TABLE `doctor_liscense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visit_history`
--
ALTER TABLE `visit_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `visit_medicines`
--
ALTER TABLE `visit_medicines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visit_symptoms`
--
ALTER TABLE `visit_symptoms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
