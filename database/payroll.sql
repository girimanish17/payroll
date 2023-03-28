-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 11:06 AM
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
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `summary` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `department_id`, `title`, `start_date`, `end_date`, `summary`, `message`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'ttttttttgfnvg', '2022-07-04', '2022-07-13', 'jhgrfe', 'hgvghmhmghvg yjgy\"', 'fe1b7f1b362ea6fdc04e9973770788a3vlcsnap-2018-02-02-23h46m39s393.png.jpg', '2022-07-04 08:17:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `attendence_date` date NOT NULL,
  `checkIn` time NOT NULL,
  `checkOut` time NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'HR Department', '2022-06-28 08:27:53', '0000-00-00 00:00:00'),
(3, 'Backend Department', '2022-06-28 11:31:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `department_id`, `designation_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hr Intern', 'Testing', '2022-06-28 11:21:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `overtime_request`
--

CREATE TABLE `overtime_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `Intime` time NOT NULL,
  `outTime` time NOT NULL,
  `reason` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'testing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '712be9111d790f0307482baeb43b592cScreenshot (1).png.jpg', '2022-07-04 11:44:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '3=superAdmin,2=admin,1=employee',
  `username` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `local_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `user_role` varchar(30) NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `basic_salary` float(100,2) NOT NULL,
  `hourly_rate` float(100,2) NOT NULL,
  `credit_leaves` int(11) NOT NULL,
  `date_of_joining` varchar(100) NOT NULL,
  `payslip` varchar(100) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL COMMENT '1=deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `emp_id`, `user_type`, `username`, `first_name`, `last_name`, `father_name`, `email`, `phone`, `password`, `gender`, `dob`, `country`, `local_address`, `permanent_address`, `user_role`, `department_id`, `designation_id`, `basic_salary`, `hourly_rate`, `credit_leaves`, `date_of_joining`, `payslip`, `profile_img`, `status`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, '', 3, 'SuperAdmin', '', '', '', 'superadmin@gmail.com', '', '$2y$10$uFqFyodYkBuvjC6R6ubwB.SM90fZfJtL3CIFpZ./mBZ7eqHnwBQlW', '', '', '', '', '', '', 0, 0, 0.00, 0.00, 0, '', '', '', 1, '2022-06-25 08:19:52', '0000-00-00 00:00:00', 0),
(2, '', 2, 'Manish', 'Manish', '', '', 'admin@gmail.com', '', '$2y$10$uFqFyodYkBuvjC6R6ubwB.SM90fZfJtL3CIFpZ./mBZ7eqHnwBQlW', '', '', '', '', '', '', 0, 0, 0.00, 0.00, 0, '', '', '', 1, '2022-06-29 12:56:28', '0000-00-00 00:00:00', 0),
(4, 'EB123', 1, '', 'Reshmi', 'Singh', 'Pritam singh', 'reshmi@gmail.com', '', '$2y$10$40dRBzjE1ea0DhrbuHWtgOHOTzNae7B2Hmeym9TYQraYqm9fWWSuK', 'Male', '2022-07-07', '', 'indore', 'indore', '', 0, 0, 0.00, 0.00, 0, '', '', '6103f1a441ef937fc13fe2ad2158300fScreenshot (1).png.jpg', 1, '2022-07-07 12:22:17', '2022-07-07 02:18:49', 0),
(5, 'EB1235', 1, '', 'Reshmi', 'Singh', 'Pritam singh', 'employee@example.com', '77675656', '$2y$10$shviHmRauH3u4LEfss7ZkOopchgD8Ujv6CeTbcgQoSjFLYkd6bcUm', 'Female', '2022-07-07', '', 'indore', 'indore', '', 0, 0, 0.00, 0.00, 0, '', '', 'bc94b45354f970eb4ba6d2a2e9b5d5b0vlcsnap-2018-02-02-23h46m39s393.png.jpg', 1, '2022-07-07 14:16:55', '2022-07-07 04:16:55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_bank_detail`
--

CREATE TABLE `user_bank_detail` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_holder_name` varchar(50) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `bank_ifsc_code` varchar(50) NOT NULL,
  `branch_location` varchar(50) NOT NULL,
  `tax_payer_id` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_bank_detail`
--

INSERT INTO `user_bank_detail` (`id`, `user_id`, `account_holder_name`, `account_number`, `bank_name`, `bank_ifsc_code`, `branch_location`, `tax_payer_id`, `created_at`, `updated_at`) VALUES
(1, 4, '', '', '', '', '', '', '2022-07-06 20:48:49', '2022-07-07 02:18:49'),
(2, 5, '', '', '', '', '', '', '2022-07-06 22:46:55', '2022-07-07 04:16:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_document`
--

CREATE TABLE `user_document` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `offer_letter` varchar(255) NOT NULL,
  `joining_letter` varchar(255) NOT NULL,
  `contract_letter` varchar(100) NOT NULL,
  `id_proof` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_document`
--

INSERT INTO `user_document` (`id`, `user_id`, `resume`, `offer_letter`, `joining_letter`, `contract_letter`, `id_proof`, `created_at`, `updated_at`) VALUES
(1, 1, 'dc21c55acbb99b971eb077dc0f63d230.jpg', 'dc21c55acbb99b971eb077dc0f63d230.jpg', 'dc21c55acbb99b971eb077dc0f63d230.jpg', 'dc21c55acbb99b971eb077dc0f63d230.jpg', 'dc21c55acbb99b971eb077dc0f63d230.jpg', '2022-07-07 14:16:55', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overtime_request`
--
ALTER TABLE `overtime_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_bank_detail`
--
ALTER TABLE `user_bank_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_document`
--
ALTER TABLE `user_document`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `overtime_request`
--
ALTER TABLE `overtime_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_bank_detail`
--
ALTER TABLE `user_bank_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_document`
--
ALTER TABLE `user_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
