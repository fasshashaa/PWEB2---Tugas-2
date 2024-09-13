-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2024 at 01:22 AM
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
-- Database: `pweb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `name` varchar(45) NOT NULL,
  `sks` int(10) NOT NULL,
  `hours` int(11) NOT NULL,
  `meeting` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `name`, `sks`, `hours`, `meeting`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 'A101', 'Object Oriented Programming', 2, 2, 8, NULL, '2024-09-13 08:08:59', '2024-09-13 08:08:59'),
(5, 'B201', 'Desain Interaksi Pengguna', 2, 2, 8, NULL, '2024-09-13 08:09:27', '2024-09-13 08:09:27'),
(6, 'C301', 'Mathematics', 3, 3, 8, NULL, '2024-09-13 08:09:55', '2024-09-13 08:09:55'),
(7, 'D401', 'Management Information System', 2, 2, 8, NULL, '2024-09-13 08:10:29', '2024-09-13 08:10:29'),
(8, 'E501', 'K3', 3, 3, 8, NULL, '2024-09-13 08:11:30', '2024-09-13 08:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `course_lecturers`
--

CREATE TABLE `course_lecturers` (
  `id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_lecturers`
--

INSERT INTO `course_lecturers` (`id`, `lecturer_id`, `course_id`, `deleted_at`, `created_at`, `update_at`) VALUES
(8, 6, 4, NULL, '2024-09-13 08:12:04', '2024-09-13 08:12:04'),
(9, 7, 5, NULL, '2024-09-13 08:12:16', '2024-09-13 08:12:16'),
(10, 10, 8, NULL, '2024-09-13 08:12:35', '2024-09-13 08:12:35'),
(11, 9, 7, NULL, '2024-09-13 08:12:46', '2024-09-13 08:12:46'),
(12, 8, 4, NULL, '2024-09-13 08:13:04', '2024-09-13 08:13:04');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `number_phone` varchar(15) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `signature` varchar(30) NOT NULL,
  `nidn` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `name`, `number_phone`, `address`, `signature`, `nidn`, `nip`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, 'Dimas Muh. Marzuki', '08123456789', 'Kebumen', 'YD', 928374653, 123462847, 4, NULL, '2024-09-13 08:03:06', '2024-09-13 08:03:06'),
(7, 'Fassha Fanny Purwanto', '082126661464', 'Bekasi', 'Cat', 22142214, 14221422, 3, NULL, '2024-09-13 08:03:58', '2024-09-13 08:03:58'),
(8, 'Senantha', '0987654321', 'Jakarta', 'Meng', 2525252, 2626262, 1, NULL, '2024-09-13 08:04:35', '2024-09-13 08:04:35'),
(9, 'Abyan Jaya Prakasa', '081263721929', 'Jakarta Selatan', 'Cars', 261762762, 625261722, 2, NULL, '2024-09-13 08:05:21', '2024-09-13 08:05:21'),
(10, 'Ami Riyanti', '081317250014', 'Jakarta Utara', 'Red', 14141414, 41414141, 5, NULL, '2024-09-13 08:05:56', '2024-09-13 08:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `avatar` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(20) NOT NULL,
  `remember_token` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `update_at`) VALUES
(1, 'Senantha', 'cat', 'sena@gmail.com', '2024-09-12 06:13:27', '12345', '12345', '2024-09-12 06:13:27', '2024-09-12 06:13:27'),
(2, 'Abyan Jaya', 'Dog', 'abyan@gmail.com', '2024-09-12 07:27:03', '321123', '321123', '2024-09-12 07:27:03', '2024-09-12 07:27:03'),
(3, 'Fassha', 'caty', 'sha@gmail.com', '2024-09-12 07:27:34', '221422', '221422', '2024-09-12 07:27:34', '2024-09-12 07:27:34'),
(4, 'dimas', 'cat', 'dim@gmail.com', '2024-09-13 03:16:54', '9988776', '9988776', '2024-09-13 03:16:54', '2024-09-13 03:16:54'),
(5, 'Ami Riyanti', 'Bird', 'ami@gmail.com', '2024-09-13 08:00:59', '22131213', '221321331', '2024-09-13 08:00:59', '2024-09-13 08:00:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_lecturers`
--
ALTER TABLE `course_lecturers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lecturer_id` (`lecturer_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course_lecturers`
--
ALTER TABLE `course_lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_lecturers`
--
ALTER TABLE `course_lecturers`
  ADD CONSTRAINT `course_lecturers_ibfk_1` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`id`),
  ADD CONSTRAINT `course_lecturers_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD CONSTRAINT `lecturers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
