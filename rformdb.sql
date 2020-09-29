-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 04:35 PM
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
-- Database: `rformdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pformdb`
--

CREATE TABLE `pformdb` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` bigint(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pformdb`
--

INSERT INTO `pformdb` (`id`, `name`, `price`, `description`) VALUES
(1, 'Biscuit', 10, 'g'),
(2, 'Rusk Toast', 30, '200g'),
(3, 'Rusk Toast', 30, '130g'),
(4, 'Rusk Toast', 30, '130g'),
(5, 'Bread', 30, 'Quantity-20');

-- --------------------------------------------------------

--
-- Table structure for table `usersdb`
--

CREATE TABLE `usersdb` (
  `id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mob_no` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersdb`
--

INSERT INTO `usersdb` (`id`, `fname`, `address`, `DOB`, `email`, `gender`, `mob_no`, `username`, `password`) VALUES
(1, 'Neha Mulik', 'Ajara', '2019-08-09', 'nmulik@gmail.com', 'female', 9874586547, 'neham', '12345'),
(2, 'Neha Mulik', 'Ajara', '2019-07-18', 'nm987@gmail.com', 'female', 9874586547, 'neham', '12345'),
(3, 'Om Kale', 'Pune', '0000-00-00', 'ss432@gmail.com', 'Male', 7584698821, 'om', '12345'),
(4, 'Divesh Naik', 'Maopusa Goa ', '0000-00-00', 'naik.divesh28@gmial.', 'Male', 9988776655, 'aaaa', '12345'),
(5, 'Omkar Mulik', 'Pune', '2020-09-11', 'omyamulik@gmail.com', 'Male', 8654879542, 'asdf', 'om'),
(6, 'Prachi Patil', 'Pune', '2019-08-08', 'prachi123@gmail.com', 'Female', 8974561235, 'prachu', '123456'),
(7, 'Sakshi Rote', 'Satara', '2019-07-17', 'sakshi@gmail.com', 'Female', 9877546598, 'srk', 'srk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pformdb`
--
ALTER TABLE `pformdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersdb`
--
ALTER TABLE `usersdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pformdb`
--
ALTER TABLE `pformdb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usersdb`
--
ALTER TABLE `usersdb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
