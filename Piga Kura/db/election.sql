-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 09:02 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Table structure for table `scadministrators`
--

CREATE TABLE `scadministrators` (
  `admin_id` int(5) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scadministrators`
--

INSERT INTO `scadministrators` (`admin_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Harry', 'Annan', 'admin@test.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Will', 'Smith', 'wsmith@gmail.com', 'a66e44736e753d4533746ced572ca821'),
(3, 'Bob', 'Marley', 'bmarley@gmail.com', 'b8475e743330c36f9080fb8f64f837b6'),
(4, 'Pop', 'Smoke', 'psmoke@gmail.com', 'fdfa02ecf86feac3801254da57c1c9ba');

-- --------------------------------------------------------

--
-- Table structure for table `sccandidates`
--

CREATE TABLE `sccandidates` (
  `candidate_id` int(5) NOT NULL,
  `candidate_name` varchar(45) NOT NULL,
  `candidate_position` varchar(45) NOT NULL,
  `candidate_votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sccandidates`
--

INSERT INTO `sccandidates` (`candidate_id`, `candidate_name`, `candidate_position`, `candidate_votes`) VALUES
(1, 'Agnes Mahone', 'Treasurer', 2);

-- --------------------------------------------------------

--
-- Table structure for table `scmembers`
--

CREATE TABLE `scmembers` (
  `member_id` int(5) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scmembers`
--

INSERT INTO `scmembers` (`member_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Agnes', 'Mahone', 'amahone@gmail.com', 'ac38ccb1779542ec60a1efd8cf665750'),
(2, 'Jeff', 'Bezos', 'jbezos@gmail.com', '83b3335d71138a7d33a1d9ea63e19fba');

-- --------------------------------------------------------

--
-- Table structure for table `scpositions`
--

CREATE TABLE `scpositions` (
  `position_id` int(5) NOT NULL,
  `position_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scpositions`
--

INSERT INTO `scpositions` (`position_id`, `position_name`) VALUES
(1, 'Chairperson'),
(2, 'Treasurer'),
(3, 'Secretary'),
(4, 'Vice-Chairperson');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scadministrators`
--
ALTER TABLE `scadministrators`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `sccandidates`
--
ALTER TABLE `sccandidates`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `scmembers`
--
ALTER TABLE `scmembers`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `scpositions`
--
ALTER TABLE `scpositions`
  ADD PRIMARY KEY (`position_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scadministrators`
--
ALTER TABLE `scadministrators`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sccandidates`
--
ALTER TABLE `sccandidates`
  MODIFY `candidate_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scmembers`
--
ALTER TABLE `scmembers`
  MODIFY `member_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `scpositions`
--
ALTER TABLE `scpositions`
  MODIFY `position_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
