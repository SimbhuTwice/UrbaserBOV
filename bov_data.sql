-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 10:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bov_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'urbaser', 'urbaser@123', '2021-10-15 23:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `public_bov_table`
--

CREATE TABLE `public_bov_table` (
  `Id` varchar(200) NOT NULL,
  `vehicle_number` text NOT NULL,
  `march_in_date` text NOT NULL,
  `march_in_time` text NOT NULL,
  `march_out_date` text NOT NULL,
  `march_out_time` text NOT NULL,
  `bin_in_counted` text NOT NULL,
  `bin_out_counted` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `public_bov_table`
--

INSERT INTO `public_bov_table` (`Id`, `vehicle_number`, `march_in_date`, `march_in_time`, `march_out_date`, `march_out_time`, `bin_in_counted`, `bin_out_counted`, `status`) VALUES
('1', 'TN01BL4367', '04-10-2021', '13:03', '-', '-', '8', '-', '-'),
('2', 'TN01BL4353', '04-10-2021', '13:03', '-', '-', '', '6', '-'),
('3', 'TN01BL4367', '-', '-', '04-10-2021', '13:04', '4', '-', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `public_bov_table`
--
ALTER TABLE `public_bov_table`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
