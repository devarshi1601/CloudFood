-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 05:22 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor_data`
--

CREATE TABLE `donor_data` (
  `name` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone_no` text NOT NULL,
  `address` text NOT NULL,
  `type_of_food` text NOT NULL,
  `quantity` varchar(8) NOT NULL,
  `cook_date` date NOT NULL,
  `cook_time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_data`
--

INSERT INTO `donor_data` (`name`, `email`, `phone_no`, `address`, `type_of_food`, `quantity`, `cook_date`, `cook_time`) VALUES
('devarshi', 'devarshishukla700@gmail.com', '9005404052', 'lucknow', 'food', '2kg', '2022-10-29', '21:29:00.000000'),
('sankalp', 'sankalp032006@gmail.com', '6307689048', 'lucknow', 'hot dog\r\n', '80kg', '2023-05-15', '13:45:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `name` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`name`, `password`) VALUES
('abc', 'abc'),
('Admin', '12345678'),
('Admin2', '987654321'),
('me', '098890'),
('sankalp', 'sankalp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_data`
--
ALTER TABLE `donor_data`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
