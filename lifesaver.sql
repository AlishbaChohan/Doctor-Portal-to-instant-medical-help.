-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 09:01 PM
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
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `cnic` varchar(300) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL,
  `v_code` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`id`, `name`, `cnic`, `contact`, `email`, `password`, `v_code`, `status`, `created_at`) VALUES
(1, 'alishba', '4444444444', '0000', 'alishbajalil@yahoo.com', '202cb962ac59075b964b07152d234b70', 'lsalishbajalil@yahoo.com1638205574', 'active', '2021-11-29 22:06:14'),
(2, 'alishba', '4444444444', 'ghi', 'alishbajalil1@gmail.com', 'ac627ab1ccbdb62ec96e702f07f6425b', 'lsalishbajalil1@gmail.com1638205703', 'active', '2021-11-29 22:08:23'),
(6, 'aj', '222', '00333', '123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'ls123@gmail.com1638206518', 'active', '2021-11-29 22:21:58'),
(8, 'saddiqa', '000000', '09090', 'saddiqa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'lssaddiqa@gmail.com1638284052', 'active', '2021-11-30 19:54:12'),
(13, 'alishba', '1115', '090909', 'king@yahoo.com', 'b66dc44cd9882859d84670604ae276e6', 'lsking@yahoo.com1639328400', 'active', '2021-12-12 22:00:00');

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

-- --------------------------------------------------------

--
-- Table structure for table `doctor_exp`
--

CREATE TABLE `doctor_exp` (
  `id` int(11) NOT NULL,
  `dr_id` int(11) NOT NULL,
  `institute` varchar(300) NOT NULL,
  `rank` varchar(300) NOT NULL,
  `start_year` varchar(300) NOT NULL,
  `end_year` varchar(300) NOT NULL,
  `duties` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `province` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `profile_pic` varchar(300) NOT NULL,
  `v_code` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`id`, `name`, `contact`, `email`, `password`, `cnic`, `province`, `city`, `address`, `dob`, `profile_pic`, `v_code`, `status`, `created_at`) VALUES
(1, 'alishba', '', 'alishbajalil1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', 'lsalishbajalil1@gmail.com1638205306', 'active', '2021-11-29 22:01:46'),
(7, 'alishba', '', 'aqsa101@yahoo.com', 'c20ad4d76fe97759aa27a0c99bff6710', '', '', '', '', '', '', 'lsaqsa101@yahoo.com1638205520', 'active', '2021-11-29 22:05:20'),
(8, 'alishba', '', 'alishbajalil@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', '', 'lsalishbajalil@yahoo.com1638969587', 'active', '2021-12-08 18:19:47');

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
  `c_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_age` varchar(200) NOT NULL,
  `client_relation` varchar(200) NOT NULL,
  `dr_loc` varchar(300) NOT NULL,
  `c_loc` varchar(300) NOT NULL,
  `dr_check_detail` varchar(500) NOT NULL,
  `bill` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `doctor_edu`
--
ALTER TABLE `doctor_edu`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `email` (`email`);

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
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctor_edu`
--
ALTER TABLE `doctor_edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_exp`
--
ALTER TABLE `doctor_exp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_info`
--
ALTER TABLE `doctor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctor_liscense`
--
ALTER TABLE `doctor_liscense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visit_history`
--
ALTER TABLE `visit_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
