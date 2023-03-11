-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 01:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `class_data`
--

CREATE TABLE `class_data` (
  `id` int(11) NOT NULL,
  `add_class` varchar(256) NOT NULL,
  `add_class_section` varchar(256) NOT NULL,
  `add_class_fees` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_data`
--

INSERT INTO `class_data` (`id`, `add_class`, `add_class_section`, `add_class_fees`) VALUES
(21, '10', 'B', '500000'),
(22, '9', 'A', '100000'),
(23, '12', 'C', '14200');

-- --------------------------------------------------------

--
-- Table structure for table `expenses_data`
--

CREATE TABLE `expenses_data` (
  `id` int(11) NOT NULL,
  `expenses_id` varchar(255) NOT NULL,
  `expenses_item_name` varchar(255) NOT NULL,
  `expenses_item_quality` varchar(255) NOT NULL,
  `expense_amout` varchar(255) NOT NULL,
  `expenses_sop` varchar(255) NOT NULL,
  `expenses_date` varchar(255) NOT NULL,
  `expenses_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses_data`
--

INSERT INTO `expenses_data` (`id`, `expenses_id`, `expenses_item_name`, `expenses_item_quality`, `expense_amout`, `expenses_sop`, `expenses_date`, `expenses_by`) VALUES
(6, '123', '123', '123', '123', '123', '1123-12-23', '123');

-- --------------------------------------------------------

--
-- Table structure for table `fees_data`
--

CREATE TABLE `fees_data` (
  `id` int(11) NOT NULL,
  `fees_class` varchar(256) NOT NULL,
  `fees_std` varchar(256) NOT NULL,
  `fee_type` varchar(256) NOT NULL,
  `fees_amount` varchar(256) NOT NULL,
  `fees_amount_paid` varchar(256) NOT NULL,
  `fee_paid_date` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees_data`
--

INSERT INTO `fees_data` (`id`, `fees_class`, `fees_std`, `fee_type`, `fees_amount`, `fees_amount_paid`, `fee_paid_date`) VALUES
(25, '21', '19', 'class', '100000', '14200', '2023-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `salary_data`
--

CREATE TABLE `salary_data` (
  `id` int(11) NOT NULL,
  `teacher_name` varchar(256) NOT NULL,
  `t_salary` varchar(256) NOT NULL,
  `paid_date` varchar(256) NOT NULL,
  `teacher_paid_amount` varchar(256) NOT NULL,
  `reduction_type` varchar(256) NOT NULL,
  `teacher_fine` varchar(256) NOT NULL,
  `teacher_advance` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary_data`
--

INSERT INTO `salary_data` (`id`, `teacher_name`, `t_salary`, `paid_date`, `teacher_paid_amount`, `reduction_type`, `teacher_fine`, `teacher_advance`) VALUES
(7, '10', '34000', '2023-01-15', '14500', 'Both', '10', '10'),
(8, '9', '90000', '2023-02-02', '54000', 'Both', '1450', '1450'),
(9, '10', '34000', '2023-01-15', '524', 'Fine', '425', ''),
(10, '10', '34000', '2023-01-15', '', 'Fine', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `std_data`
--

CREATE TABLE `std_data` (
  `id` int(11) NOT NULL,
  `std_f_name` varchar(255) NOT NULL,
  `std_l_name` varchar(255) NOT NULL,
  `std_class` int(11) NOT NULL,
  `std_fee_discount` int(11) NOT NULL,
  `std_id` varchar(255) NOT NULL,
  `std_admission_number` varchar(255) NOT NULL,
  `std_gender` varchar(255) NOT NULL,
  `std_dob` date NOT NULL,
  `std_joining_date` date NOT NULL,
  `std_religion` varchar(255) NOT NULL,
  `std_father_name` varchar(255) NOT NULL,
  `std_father_occupation` varchar(255) NOT NULL,
  `std_father_mobile` int(11) NOT NULL,
  `std_father_cnic` int(11) NOT NULL,
  `std_father_email` varchar(255) NOT NULL,
  `std_mother_name` varchar(255) NOT NULL,
  `std_mother_occupation` varchar(255) NOT NULL,
  `std_mother_mobile_number` varchar(255) NOT NULL,
  `std_mother_email` varchar(255) NOT NULL,
  `std_present_address` varchar(255) NOT NULL,
  `std_permanent_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_data`
--

INSERT INTO `std_data` (`id`, `std_f_name`, `std_l_name`, `std_class`, `std_fee_discount`, `std_id`, `std_admission_number`, `std_gender`, `std_dob`, `std_joining_date`, `std_religion`, `std_father_name`, `std_father_occupation`, `std_father_mobile`, `std_father_cnic`, `std_father_email`, `std_mother_name`, `std_mother_occupation`, `std_mother_mobile_number`, `std_mother_email`, `std_present_address`, `std_permanent_address`) VALUES
(19, 'Ali', 'Raza', 21, 400000, 'BUI-887', 'BUI-2', 'Male', '2023-01-15', '2023-01-15', 'Muslim', 'Father\'s Name', 'Father\'s Occupation', 300, 33100, 'father@gmail.com', 'Mother Name', 'Mother\'s Occupation', 'Mother\'s Mobile', 'Mother@gmail.com', 'Present Address', 'Permanent Address'),
(20, 'Sahib', 'Bilal', 22, 35600, 'BUI-554', 'BUI-4', 'Male', '2023-01-15', '2023-01-15', 'Muslim', 'Father\'s Name', 'Father\'s Occupation', 300, 33100, 'father@gmail.com', 'Mother Name', 'Mother\'s Occupation', 'Mother\'s Mobile', 'Mother@gmail.com', 'Present Address', 'Permanent Address');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_data`
--

CREATE TABLE `teacher_data` (
  `id` int(11) NOT NULL,
  `teacher_name` varchar(256) NOT NULL,
  `t_gender` varchar(256) NOT NULL,
  `t_dob` varchar(256) NOT NULL,
  `t_mobile` varchar(256) NOT NULL,
  `t_joining_date` varchar(256) NOT NULL,
  `t_qualification` varchar(255) NOT NULL,
  `t_experience` varchar(255) NOT NULL,
  `t_salary` varchar(256) NOT NULL,
  `t_address` varchar(256) NOT NULL,
  `t_city` varchar(256) NOT NULL,
  `t_state` varchar(256) NOT NULL,
  `t_zipcode` varchar(256) NOT NULL,
  `t_country` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_data`
--

INSERT INTO `teacher_data` (`id`, `teacher_name`, `t_gender`, `t_dob`, `t_mobile`, `t_joining_date`, `t_qualification`, `t_experience`, `t_salary`, `t_address`, `t_city`, `t_state`, `t_zipcode`, `t_country`) VALUES
(9, 'Hania', 'female', '1995-04-04', '03037654322', '2022-04-04', 'BA', 'entry level', '90000', 'road street 2 house#34', 'karachi', 'punjab', '34000', 'Pakistan'),
(10, 'Laiba', 'female', '2000-05-04', '03037654387', '2023-03-07', 'phd', 'excellent', '34000', 'road street 2 house#32', 'karachi', 'punjab', '37000', 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`) VALUES
(16, 'admin123', '$2y$10$qlLoFJ2WgLhS8meIIqMy2.dS5E86gA7Ccy./LmCzQUbbOaacKIBMy', '123@gmail.com', '2023-01-05 14:34:28'),
(17, 'admin', '$2y$10$t2NjgjcFCQ9XgLycbDo7ZuX.cfWWL7YYr1jnk/TqxfzXDQAJXel3.', '123@gmail.com', '2023-01-13 15:26:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_data`
--
ALTER TABLE `class_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses_data`
--
ALTER TABLE `expenses_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_data`
--
ALTER TABLE `fees_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_data`
--
ALTER TABLE `salary_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_data`
--
ALTER TABLE `std_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_data`
--
ALTER TABLE `teacher_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_data`
--
ALTER TABLE `class_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `expenses_data`
--
ALTER TABLE `expenses_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fees_data`
--
ALTER TABLE `fees_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `salary_data`
--
ALTER TABLE `salary_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `std_data`
--
ALTER TABLE `std_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `teacher_data`
--
ALTER TABLE `teacher_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
