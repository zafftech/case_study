-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2024 at 08:11 AM
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
-- Database: `pms_nursery`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `day_nursery` varchar(50) NOT NULL,
  `child_full_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age_of_child` int(2) DEFAULT NULL,
  `sex_of_child` enum('Boy','Girl') NOT NULL,
  `religion_faith` varchar(100) DEFAULT NULL,
  `home_address` text NOT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `parent1_name` varchar(255) DEFAULT NULL,
  `parent1_relationship` varchar(100) DEFAULT NULL,
  `parent1_mobile` varchar(15) DEFAULT NULL,
  `parent1_tel` varchar(15) DEFAULT NULL,
  `parent1_email` varchar(255) DEFAULT NULL,
  `parent2_name` varchar(255) DEFAULT NULL,
  `parent2_relationship` varchar(100) DEFAULT NULL,
  `parent2_mobile` varchar(15) DEFAULT NULL,
  `parent2_tel` varchar(15) DEFAULT NULL,
  `parent2_email` varchar(255) DEFAULT NULL,
  `legal_guardian` varchar(255) DEFAULT NULL,
  `guardian_relationship` varchar(100) DEFAULT NULL,
  `guardian_mobile` varchar(15) DEFAULT NULL,
  `home_tel` varchar(15) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `day_nursery`, `child_full_name`, `date_of_birth`, `age_of_child`, `sex_of_child`, `religion_faith`, `home_address`, `postcode`, `parent1_name`, `parent1_relationship`, `parent1_mobile`, `parent1_tel`, `parent1_email`, `parent2_name`, `parent2_relationship`, `parent2_mobile`, `parent2_tel`, `parent2_email`, `legal_guardian`, `guardian_relationship`, `guardian_mobile`, `home_tel`, `email_address`) VALUES
(1, 'Hockers Lane', 'MUHAMMAD ZAFRAN', '2004-10-26', 20, 'Boy', '', 'No.2 Jalan DI 12, Taman Desa Idaman, 76100 Durian Tunggal, Melaka', '76100', 'MOHD ASID', 'father', '0108213699', '-', 'zafranasid@gmail.com', 'NOR AZILAH', 'MOTHER', '0108213699', '-', 'zafranasid@gmail.com', 'KHAIRUNNISA', 'SISTER', '0108213699', '-', 'zafranasid@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
