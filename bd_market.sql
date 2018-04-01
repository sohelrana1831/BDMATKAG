-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 02:57 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'sohelrana', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `history_img`
--

CREATE TABLE `history_img` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history_img`
--

INSERT INTO `history_img` (`id`, `image`) VALUES
(3, 'images/s1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(255) NOT NULL,
  `dhaka_text` varchar(255) NOT NULL,
  `dhaka_time` varchar(255) NOT NULL,
  `chittagong_text` varchar(555) NOT NULL,
  `chittagong_time` varchar(255) NOT NULL,
  `sylet_text` varchar(255) NOT NULL,
  `sylet_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `dhaka_text`, `dhaka_time`, `chittagong_text`, `chittagong_time`, `sylet_text`, `sylet_time`) VALUES
(1, '480 x 21 x 480', '12:30 AM TO 3:30 AM', '567 x89 x 370', '2:30 AM TO 5:30 AM', '09:15 PM TO 12:30 AM', '555 x55 x 55555');

-- --------------------------------------------------------

--
-- Table structure for table `live_day`
--

CREATE TABLE `live_day` (
  `id` int(255) NOT NULL,
  `dhaka_fr` varchar(255) NOT NULL,
  `chittagong_fr` varchar(255) NOT NULL,
  `sylet_fr` varchar(255) NOT NULL,
  `dhaka_sa` varchar(255) NOT NULL,
  `chittagong_sa` varchar(255) NOT NULL,
  `sylet_sa` varchar(255) NOT NULL,
  `dhaka_su` varchar(255) NOT NULL,
  `chittagong_su` varchar(255) NOT NULL,
  `sylet_su` varchar(255) NOT NULL,
  `dhaka_mo` varchar(255) NOT NULL,
  `chittagong_mo` varchar(255) NOT NULL,
  `sylet_mo` varchar(255) NOT NULL,
  `dhaka_tu` varchar(255) NOT NULL,
  `chittagong_tu` varchar(255) NOT NULL,
  `sylet_tu` varchar(255) NOT NULL,
  `dhaka_we` varchar(255) NOT NULL,
  `chittagong_we` varchar(255) NOT NULL,
  `sylet_we` varchar(255) NOT NULL,
  `dhaka_th` varchar(255) NOT NULL,
  `chittagong_th` varchar(255) NOT NULL,
  `sylet_th` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `live_day`
--

INSERT INTO `live_day` (`id`, `dhaka_fr`, `chittagong_fr`, `sylet_fr`, `dhaka_sa`, `chittagong_sa`, `sylet_sa`, `dhaka_su`, `chittagong_su`, `sylet_su`, `dhaka_mo`, `chittagong_mo`, `sylet_mo`, `dhaka_tu`, `chittagong_tu`, `sylet_tu`, `dhaka_we`, `chittagong_we`, `sylet_we`, `dhaka_th`, `chittagong_th`, `sylet_th`) VALUES
(1, '1', '2', '3', 'fdhfd', 'fhfd', 'fghfd', 'fghfd', 'fghfdh', 'fgh', 'fdghfd', 'fhd', 'fdgh', 'fgh', 'fdh', 'fdh', 'dfgh', 'fdh', 'dfhg', 'fdgh', 'fgh', 'fdgh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_img`
--
ALTER TABLE `history_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_day`
--
ALTER TABLE `live_day`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `history_img`
--
ALTER TABLE `history_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `live_day`
--
ALTER TABLE `live_day`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
