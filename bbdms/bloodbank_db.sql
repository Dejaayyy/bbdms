-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 11:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `height` float DEFAULT NULL,
  `lot` varchar(20) DEFAULT NULL,
  `blk` varchar(20) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `subdivision` varchar(50) DEFAULT NULL,
  `barangay` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `mobilenumber` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `blood_type` varchar(5) DEFAULT NULL,
  `bank_location` varchar(50) DEFAULT NULL,
  `e_name` varchar(100) DEFAULT NULL,
  `e_relationship` varchar(100) DEFAULT NULL,
  `e_mobile` varchar(15) DEFAULT NULL,
  `e_email` varchar(100) DEFAULT NULL,
  `blood_donation` varchar(3) DEFAULT NULL,
  `medical_conditions` varchar(3) DEFAULT NULL,
  `surgery` varchar(3) DEFAULT NULL,
  `allergies` varchar(3) DEFAULT NULL,
  `positive` varchar(3) DEFAULT NULL,
  `symptoms` varchar(3) DEFAULT NULL,
  `breastfeeding` varchar(3) DEFAULT NULL,
  `medication` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `gender`, `firstname`, `middlename`, `lastname`, `birthday`, `age`, `weight`, `height`, `lot`, `blk`, `street`, `subdivision`, `barangay`, `city`, `province`, `zip`, `mobilenumber`, `email`, `occupation`, `blood_type`, `bank_location`, `e_name`, `e_relationship`, `e_mobile`, `e_email`, `blood_donation`, `medical_conditions`, `surgery`, `allergies`, `positive`, `symptoms`, `breastfeeding`, `medication`) VALUES
(1, 'Male', 'Gabriel', 'Fundales', 'Mendoza', '2004-01-19', 20, 59.67, 5, '24', NULL, 'Camaro', 'None', 'Fairview', 'Quezon City', 'NCR', '1118', '09691954067', 'gabriel@yahoo.com', 'Student', 'AB+', 'Quezon City', 'Mendoza, Luchie', 'Mother', '09177361534', 'lucinamendoza@yahoo.com', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No'),
(2, 'Male', 'Gabriel', 'Fundales', 'Mendoza', '2004-01-19', 20, 59.67, 5, '24', NULL, 'Camaro', 'None', 'Fairview', 'Quezon City', 'NCR', '1118', '09691954067', 'gabriel@yahoo.com', 'Student', 'AB+', 'Quezon City', 'Mendoza, Luchie', 'Mother', '09177361534', 'lucinamendoza@yahoo.com', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No'),
(3, 'Male', 'Gabriel', 'Fundales', 'Mendoza', '2004-01-19', 20, 59.67, 5, '24', NULL, 'Camaro', 'None', 'Fairview', 'Quezon City', 'NCR', '1118', '09691954067', 'gabriel@yahoo.com', 'Student', 'AB+', 'Quezon City', 'Mendoza, Luchie', 'Mother', '09177361534', 'lucinamendoza@yahoo.com', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No'),
(4, NULL, '', '', '', '1970-01-01', 0, 0, 0, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, '', '', '', '1970-01-01', 0, 0, 0, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, '', '', '', '1970-01-01', 0, 0, 0, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, '', '', '', '1970-01-01', 0, 0, 0, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, '', '', '', '1970-01-01', 0, 0, 0, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, '', '', '', '1970-01-01', 0, 0, 0, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, '', '', '', '1970-01-01', 0, 0, 0, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, '', '', '', '1970-01-01', 0, 0, 0, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recipients`
--

CREATE TABLE `recipients` (
  `id` int(11) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `height` float DEFAULT NULL,
  `lot` varchar(10) DEFAULT NULL,
  `blk` varchar(10) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `subdivision` varchar(50) DEFAULT NULL,
  `barangay` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `mobilenumber` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `blood_type` varchar(5) DEFAULT NULL,
  `bank_location` varchar(50) DEFAULT NULL,
  `e_name` varchar(100) DEFAULT NULL,
  `e_relationship` varchar(50) DEFAULT NULL,
  `e_mobile` varchar(20) DEFAULT NULL,
  `e_email` varchar(50) DEFAULT NULL,
  `blood_donation` varchar(3) DEFAULT NULL,
  `medical_conditions` varchar(3) DEFAULT NULL,
  `surgery` varchar(3) DEFAULT NULL,
  `allergies` varchar(3) DEFAULT NULL,
  `positive` varchar(3) DEFAULT NULL,
  `symptoms` varchar(3) DEFAULT NULL,
  `breastfeeding` varchar(3) DEFAULT NULL,
  `medication` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipients`
--

INSERT INTO `recipients` (`id`, `gender`, `firstname`, `middlename`, `lastname`, `birthday`, `age`, `weight`, `height`, `lot`, `blk`, `street`, `subdivision`, `barangay`, `city`, `province`, `zip`, `mobilenumber`, `email`, `occupation`, `blood_type`, `bank_location`, `e_name`, `e_relationship`, `e_mobile`, `e_email`, `blood_donation`, `medical_conditions`, `surgery`, `allergies`, `positive`, `symptoms`, `breastfeeding`, `medication`) VALUES
(1, NULL, '', '', '', '1970-01-01', 0, 0, 0, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Male', 'Gabriel', 'Fundales', 'Mendoza', '2024-01-31', 19, 59.67, 5, '24', NULL, 'Camaro', 'None', 'Fairview', 'Quezon City', 'NCR', '1118', '09691954067', 'gabriel@yahoo.com', 'Student', '', '', 'Lucina Mendoza', 'Mother', '09177361534', 'lucinamendoza@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipients`
--
ALTER TABLE `recipients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `recipients`
--
ALTER TABLE `recipients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
