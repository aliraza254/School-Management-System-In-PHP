-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 11:26 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bab-ul-islam`
--

-- --------------------------------------------------------

--
-- Table structure for table `teacher_data`
--

CREATE TABLE `teacher_data` (
  `id` int(11) NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `t_gender` varchar(255) NOT NULL,
  `t_dob` varchar(255) NOT NULL,
  `t_mobile` varchar(255) NOT NULL,
  `t_joining_date` varchar(255) NOT NULL,
  `t_qualification` varchar(255) NOT NULL,
  `t_experience` varchar(255) NOT NULL,
  `t_salary` varchar(255) NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `t_password` varchar(255) NOT NULL,
  `t_repeat_password` varchar(255) NOT NULL,
  `t_address` varchar(255) NOT NULL,
  `t_city` varchar(255) NOT NULL,
  `t_state` varchar(255) NOT NULL,
  `t_zipcode` varchar(255) NOT NULL,
  `t_country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_data`
--

INSERT INTO `teacher_data` (`id`, `teacher_id`, `teacher_name`, `t_gender`, `t_dob`, `t_mobile`, `t_joining_date`, `t_qualification`, `t_experience`, `t_salary`, `t_email`, `t_password`, `t_repeat_password`, `t_address`, `t_city`, `t_state`, `t_zipcode`, `t_country`) VALUES
(21, '', 'Hania', 'male', '1998-07-08', '0302784438', '2021-06-05', 'Masters', 'excellent', '60000', '', '', '', ' mall road 2 house#32', 'islamabad', 'punjab', '38000', 'Pakistann');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacher_data`
--
ALTER TABLE `teacher_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teacher_data`
--
ALTER TABLE `teacher_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
