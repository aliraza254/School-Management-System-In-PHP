-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 02:13 PM
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
-- Table structure for table `salary_data`
--

CREATE TABLE `salary_data` (
  `id` int(11) NOT NULL,
  `teacher_name` varchar(256) NOT NULL,
  `t_salary` varchar(256) NOT NULL,
  `paid_date` varchar(256) NOT NULL,
  `month` varchar(256) NOT NULL,
  `reduction_type` varchar(256) NOT NULL,
  `teacher_fine` varchar(256) NOT NULL,
  `teacher_advance` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary_data`
--

INSERT INTO `salary_data` (`id`, `teacher_name`, `t_salary`, `paid_date`, `month`, `reduction_type`, `teacher_fine`, `teacher_advance`) VALUES
(1, 'Saad', '', '3332-03-23', '2023-07', '', '2000', '10000'),
(2, 'Saad', '', '2022-06-05', '2023-10', '', '1000', '20000'),
(3, 'Arooba', '70000', '2022-05-04', '2023-12', 'Advance', '1000', '1000'),
(4, 'Hania', '34000', '2011-03-23', '2023-05', 'Fine', '3000', '3000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `salary_data`
--
ALTER TABLE `salary_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `salary_data`
--
ALTER TABLE `salary_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
