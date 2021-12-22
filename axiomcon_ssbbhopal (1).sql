-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 22, 2021 at 05:04 PM
-- Server version: 10.3.32-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `axiomcon_ssbbhopal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobileno` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mobileno`, `email`, `password`) VALUES
(1, 'Ankit', '9472283727', 'admin@gmail.com', '10ajanki');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `fathername` varchar(200) NOT NULL,
  `mobileno` varchar(50) NOT NULL,
  `alternetno` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pickuppoint` varchar(200) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `pickupdate` varchar(100) DEFAULT NULL,
  `pickuptime` varchar(100) DEFAULT NULL,
  `train_flight_no` varchar(100) DEFAULT NULL,
  `arriving_from` varchar(200) DEFAULT NULL,
  `ssb_date` varchar(20) DEFAULT NULL,
  `ssb_reporting_time` varchar(20) DEFAULT NULL,
  `payment_reciept` text DEFAULT NULL,
  `selectd_package_name` varchar(200) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fathername`, `mobileno`, `alternetno`, `email`, `pickuppoint`, `address`, `pickupdate`, `pickuptime`, `train_flight_no`, `arriving_from`, `ssb_date`, `ssb_reporting_time`, `payment_reciept`, `selectd_package_name`, `status`) VALUES
(15, 'gaurav singh', 'subedar om prakash', '9643177699', '11', 'a@a.a', '(Bhopal) Railway Station', 'rewadi haryana', '05-10-2021', '03:45', 'rajdhani', 'delhi', '06-10-2021', '06:00', 'WhatsApp Image 2021-09-23 at 12.16.20.jpeg', 'Package 2 (RS-1300/-)', 1),
(16, 'Akshit Katoch', 'Uttam Chand', '9717209109', '9873181379', 'akshitkatoch22@gmail.com', '(Bhopal) Railway Station', 'A-701, Dhauladhar Apartments, Sector-5, Plot No. 15, Dwarka, New Delhi 110075', '01-10-2021', '14:10', '12002', 'New Delhi-NDLS', '02-10-2021', '06:00', 'Adobe Scan 26 Sep 2021.pdf', 'Package 2 (RS-1300/-)', 1),
(25, 'Divy Meher Kapoor', 'Mr. Dheeraj Kapoor', '9354225352', '9810784943', 'divymeher29@gmail.com', 'Airport', '305 metro apartment jahangirpuri delhi 110033', '08-10-2021', '13:35', '6E-5183', 'New Delhi', '09-10-2021', '05:30', 'IMG-20211006-WA0002.jpg', 'Package 6 (RS-1700/-)', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
