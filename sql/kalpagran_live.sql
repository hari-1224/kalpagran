-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 03:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalpagran_live`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `doj` varchar(191) DEFAULT NULL,
  `gender` varchar(191) DEFAULT NULL,
  `department` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `showpassword` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `dashboard` int(11) DEFAULT NULL,
  `employee` int(11) DEFAULT NULL,
  `production` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `customer` int(11) DEFAULT NULL,
  `quarry` int(11) DEFAULT NULL,
  `purchase` int(11) DEFAULT NULL,
  `setting` int(11) DEFAULT NULL,
  `attendance` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `emp_id`, `name`, `phone`, `email`, `doj`, `gender`, `department`, `address`, `photo`, `city`, `password`, `showpassword`, `role`, `dashboard`, `employee`, `production`, `stock`, `customer`, `quarry`, `purchase`, `setting`, `attendance`, `created_at`, `updated_at`) VALUES
(5, 'EM000005', 'DEMO', '7010383237', 'admin@gmail.com', '2722-29-02', 'male', 'Stocks Audit', 'sss', 'backend/images/portrait/small/avatar-s-11.jpg', NULL, '$2y$10$lXF3s08uHeCiDYkR1eNKVusncMZ.XuIONI/kjLZjri2KAbt.0VlnC', '', 1, 1, 1, 1, 1, NULL, 1, 1, 1, 1, '2022-07-14 17:58:36', '2022-07-14 17:58:36'),
(6, 'EM000006', 'TEST@', '9087654321', 'test@gmail.com', '2002-18-12', 'male', 'Stocks Audit', 'bbbb', 'backend/images/portrait/small/avatar-s-11.jpg', '1', '$2y$10$jLMfUkh2z5B7tin1w14BnO1CY2s6CLmHLA7RLXbzXQTcagMQtURTO', 'test', 3, 1, 1, 1, 1, NULL, 1, 1, 1, 1, '2022-07-18 16:01:45', '2022-08-03 15:05:26'),
(7, 'EM000007', 'alwin', '7010383237', 'alwin@gmail.com', '1998-03-27', 'male', 'Stocks Audit', 'Chennai', 'backend/images/portrait/small/avatar-s-11.jpg', NULL, '$2y$10$rKiBwqpZYasYq0mSfisYIOMwO2cJdNqwJXaoTx7T1C3EhJb6auqd6', '', 1, 1, 1, 1, 1, NULL, 1, 1, 1, 1, '2022-07-28 17:47:30', '2022-07-28 17:47:30'),
(8, 'EM000008', 'staff', '7708766932', 'staff@gmail.com', '1998-03-27', 'male', 'Stocks Audit', 'Chennai', 'backend/images/portrait/small/avatar-s-11.jpg', '1', '$2y$10$rKiBwqpZYasYq0mSfisYIOMwO2cJdNqwJXaoTx7T1C3EhJb6auqd6', 'staff', 2, 1, 1, 1, 1, NULL, 1, 1, 1, 1, '2022-07-28 18:30:41', '2022-08-03 14:43:08'),
(9, 'EM000009', 'staff2', '8248692561', 'staff2@gmail.com', '1998-03-21', 'male', 'Stocks Audit', 'Chennai', 'backend/images/portrait/small/avatar-s-11.jpg', '1', '$2y$10$KQWphpjxa2ZGyWL1wEUeo.U2b9BepSbNy16Xdby4xmWMy90zLhdf2', 'staff2', 2, 1, 1, 1, 1, NULL, 1, 1, 1, 1, '2022-07-28 18:33:48', '2022-08-03 15:04:57'),
(10, 'EM000010', 'staff3', '9087651234', 'staff3@gmail.com', '1998-03-20', 'male', 'Stocks Audit', 'Chennai', 'backend/images/portrait/small/avatar-s-11.jpg', '1', '$2y$10$DcjV4EdO0mouL3Nf.2jJRekplNH.zA7RCPQJxDZNuLcXafQIbQv7.', 'staff3', 2, 1, 1, 1, 1, NULL, 1, 1, 1, 1, '2022-07-28 18:37:39', '2022-08-03 15:04:41'),
(11, 'EM000011', 'staff4', '8248692561', 'staff4@gmail.com', '1998-03-25', 'male', 'Stocks Audit', 'Chennai', 'backend/images/portrait/small/avatar-s-11.jpg', '1', '$2y$10$SCYFMw5Tp8rV1.M47yYJZu/hsKyrN2uccMcCsfI6NAFyn1jBq8nKa', '12345', 2, 1, 1, 1, 1, NULL, 1, 1, 1, 1, '2022-07-28 18:38:36', '2022-08-03 15:02:28'),
(12, 'EM000012', 'emp', '9876543201', 'emp@gmail.com', '1998-03-25', 'male', 'Stocks Audit', 'Chennai', 'backend/images/portrait/small/avatar-s-11.jpg', '1', '$2y$10$K.ecZo7cfBorKolfpikQSe3EDaWN8mM8f8ELSabsFkfC51TK5A95e', 'emp', 3, 1, 1, 1, 1, NULL, 1, 1, 1, 1, '2022-08-03 14:24:20', '2022-08-03 15:26:19'),
(17, 'EM000013', 'Cecilia Pearson', '+1 (733) 789-4692', 'veserapys@mailinator.com', 'Eveniet perspiciati', 'male', 'https://www.qixy.net', 'Quidem nemo voluptat', 'backend/images/portrait/small/avatar-s-11.jpg', NULL, '$2y$10$iiU4pv4nRugbnKp2rf9Jqu6JcEPEqN01F4M658d14F/lFZTU2IV2u', 'Pa$$w0rd!', 2, NULL, 1, 1, 1, NULL, 1, 1, 1, NULL, '2022-10-28 20:14:22', '2022-10-28 20:14:22'),
(18, 'EM000014', 'DEMOooo', '1313513556', 'abc@gmail.com', '2022/2/2', 'male', 'Stocks Audit', 'UGFI', 'backend/images/portrait/small/avatar-s-11.jpg', NULL, '$2y$10$4xPAO/6i7RDd6P1qgR/rdeK2/Fi5l0DgOVHdmoYosv/W1OKwV6zDG', 'yfuyfuyfy', 1, 1, 1, 1, 1, NULL, 1, 1, 1, 1, '2022-10-28 20:22:54', '2022-10-28 20:22:54'),
(19, 'EM000015', 'mani', '1112144', 'mani@gmail.com', '2022/2/2', 'male', 'Stocks Audit', 'abcdefg', 'backend/images/portrait/small/avatar-s-11.jpg', NULL, '$2y$10$uX6UrROflANUfLb4Us4jg.n87xPwXyCS1ZBAcvzPn26NRKJ06lVmS', 'vdvgadbgadsbg', 2, 1, 1, 1, 1, NULL, 1, 1, 1, 1, '2022-10-28 20:25:11', '2022-10-28 20:25:11'),
(20, 'EM000016', 'DEMOooo', '54333', 'jifehjflehf@gmail.com', '454541411', 'male', 'Stocks Audit', 'UGFI', 'backend/images/portrait/small/avatar-s-11.jpg', NULL, '$2y$10$hFg9a1zwDT8BoTjS7U9MPujSWgXcBeizUxZOk0tzmoxLj8o7J1Kpy', '4224', 2, 1, 1, 1, 1, NULL, 1, 1, 1, 1, '2022-11-29 12:33:01', '2022-11-29 12:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` varchar(191) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attadence`
--

CREATE TABLE `attadence` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `attadence_status` int(10) NOT NULL,
  `date` date NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `attadence`
--

INSERT INTO `attadence` (`id`, `emp_id`, `attadence_status`, `date`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'EM000006', 1, '2022-07-29', 'DEMO-EM000005', '2022-07-29 19:01:01', '2022-07-29 20:17:11'),
(2, 'EM000008', 1, '2022-07-29', 'DEMO-EM000005', '2022-07-29 19:01:01', '2022-07-29 20:17:11'),
(3, 'EM000009', 1, '2022-07-29', 'DEMO-EM000005', '2022-07-29 19:01:01', '2022-07-29 20:17:11'),
(4, 'EM000010', 1, '2022-07-29', 'DEMO-EM000005', '2022-07-29 19:01:01', '2022-07-29 20:17:11'),
(5, 'EM000011', 1, '2022-07-29', 'DEMO-EM000005', '2022-07-29 19:01:01', '2022-07-29 20:17:11'),
(6, 'EM000006', 1, '2022-08-02', 'DEMO-EM000005', '2022-08-02 14:18:43', '2022-08-02 20:50:16'),
(7, 'EM000008', 1, '2022-08-02', 'DEMO-EM000005', '2022-08-02 14:18:43', '2022-08-02 20:50:16'),
(8, 'EM000009', 0, '2022-08-02', 'DEMO-EM000005', '2022-08-02 14:18:43', '2022-08-02 20:50:16'),
(9, 'EM000010', 0, '2022-08-02', 'DEMO-EM000005', '2022-08-02 14:18:43', '2022-08-02 20:50:16'),
(10, 'EM000011', 1, '2022-08-02', 'DEMO-EM000005', '2022-08-02 14:18:43', '2022-08-02 20:50:16'),
(11, 'EM000006', 1, '2022-08-01', 'DEMO-EM000005', '2022-08-02 20:49:33', '2022-08-02 20:52:28'),
(12, 'EM000008', 1, '2022-08-01', 'DEMO-EM000005', '2022-08-02 20:49:33', '2022-08-02 20:52:28'),
(13, 'EM000009', 1, '2022-08-01', 'DEMO-EM000005', '2022-08-02 20:49:33', '2022-08-02 20:52:28'),
(14, 'EM000010', 1, '2022-08-01', 'DEMO-EM000005', '2022-08-02 20:49:33', '2022-08-02 20:52:28'),
(15, 'EM000011', 1, '2022-08-01', 'DEMO-EM000005', '2022-08-02 20:49:33', '2022-08-02 20:52:28'),
(16, 'EM000006', 1, '2022-09-02', 'DEMO-EM000005', '2022-08-02 20:56:37', '2022-08-02 20:56:37'),
(17, 'EM000008', 1, '2022-09-02', 'DEMO-EM000005', '2022-08-02 20:56:37', '2022-08-02 20:56:37'),
(18, 'EM000009', 1, '2022-09-02', 'DEMO-EM000005', '2022-08-02 20:56:37', '2022-08-02 20:56:37'),
(19, 'EM000010', 1, '2022-09-02', 'DEMO-EM000005', '2022-08-02 20:56:37', '2022-08-02 20:56:37'),
(20, 'EM000011', 1, '2022-09-02', 'DEMO-EM000005', '2022-08-02 20:56:37', '2022-08-02 20:56:37'),
(21, 'EM000006', 1, '2022-08-03', 'DEMO-EM000005', '2022-08-02 20:57:12', '2022-08-03 15:42:54'),
(22, 'EM000008', 0, '2022-08-03', 'DEMO-EM000005', '2022-08-02 20:57:12', '2022-08-03 15:42:54'),
(23, 'EM000009', 1, '2022-08-03', 'DEMO-EM000005', '2022-08-02 20:57:12', '2022-08-03 15:42:54'),
(24, 'EM000010', 0, '2022-08-03', 'DEMO-EM000005', '2022-08-02 20:57:12', '2022-08-03 15:42:54'),
(25, 'EM000011', 1, '2022-08-03', 'DEMO-EM000005', '2022-08-02 20:57:12', '2022-08-03 15:42:54'),
(26, 'EM000006', 1, '2022-08-18', 'DEMO-EM000005', '2022-08-18 11:32:13', '2022-08-18 11:32:38'),
(27, 'EM000008', 1, '2022-08-18', 'DEMO-EM000005', '2022-08-18 11:32:13', '2022-08-18 11:32:38'),
(28, 'EM000009', 1, '2022-08-18', 'DEMO-EM000005', '2022-08-18 11:32:13', '2022-08-18 11:32:38'),
(29, 'EM000010', 1, '2022-08-18', 'DEMO-EM000005', '2022-08-18 11:32:13', '2022-08-18 11:32:38'),
(30, 'EM000011', 1, '2022-08-18', 'DEMO-EM000005', '2022-08-18 11:32:13', '2022-08-18 11:32:38'),
(31, 'EM000012', 1, '2022-08-18', 'DEMO-EM000005', '2022-08-18 11:32:13', '2022-08-18 11:32:38'),
(32, 'EM000006', 0, '2022-10-27', 'DEMO-EM000005', '2022-10-27 20:54:44', '2022-10-27 21:04:59'),
(33, 'EM000008', 0, '2022-10-27', 'DEMO-EM000005', '2022-10-27 20:54:44', '2022-10-27 21:04:59'),
(34, 'EM000009', 1, '2022-10-27', 'DEMO-EM000005', '2022-10-27 20:54:44', '2022-10-27 21:04:59'),
(35, 'EM000010', 1, '2022-10-27', 'DEMO-EM000005', '2022-10-27 20:54:44', '2022-10-27 21:04:59'),
(36, 'EM000011', 0, '2022-10-27', 'DEMO-EM000005', '2022-10-27 20:54:44', '2022-10-27 21:04:59'),
(37, 'EM000012', 0, '2022-10-27', 'DEMO-EM000005', '2022-10-27 20:54:44', '2022-10-27 21:04:59'),
(38, 'EM000006', 1, '2022-10-28', 'DEMO-EM000005', '2022-10-28 18:46:34', '2022-10-28 19:35:49'),
(39, 'EM000008', 0, '2022-10-28', 'DEMO-EM000005', '2022-10-28 18:46:34', '2022-10-28 19:35:49'),
(40, 'EM000009', 0, '2022-10-28', 'DEMO-EM000005', '2022-10-28 18:46:34', '2022-10-28 19:35:49'),
(41, 'EM000010', 1, '2022-10-28', 'DEMO-EM000005', '2022-10-28 18:46:34', '2022-10-28 19:35:49'),
(42, 'EM000011', 1, '2022-10-28', 'DEMO-EM000005', '2022-10-28 18:46:34', '2022-10-28 19:35:49'),
(43, 'EM000012', 1, '2022-10-28', 'DEMO-EM000005', '2022-10-28 18:46:34', '2022-10-28 19:35:49'),
(44, 'EM000006', 0, '2022-10-29', 'DEMO-EM000005', '2022-10-28 20:30:17', '2022-10-28 20:30:17'),
(45, 'EM000008', 0, '2022-10-29', 'DEMO-EM000005', '2022-10-28 20:30:17', '2022-10-28 20:30:17'),
(46, 'EM000009', 0, '2022-10-29', 'DEMO-EM000005', '2022-10-28 20:30:17', '2022-10-28 20:30:17'),
(47, 'EM000010', 0, '2022-10-29', 'DEMO-EM000005', '2022-10-28 20:30:17', '2022-10-28 20:30:17'),
(48, 'EM000011', 0, '2022-10-29', 'DEMO-EM000005', '2022-10-28 20:30:17', '2022-10-28 20:30:17'),
(49, 'EM000012', 0, '2022-10-29', 'DEMO-EM000005', '2022-10-28 20:30:17', '2022-10-28 20:30:17'),
(50, 'EM000013', 0, '2022-10-29', 'DEMO-EM000005', '2022-10-28 20:30:17', '2022-10-28 20:30:17'),
(51, 'EM000015', 1, '2022-10-29', 'DEMO-EM000005', '2022-10-28 20:30:17', '2022-10-28 20:30:17'),
(52, 'EM000006', 1, '2022-11-29', 'DEMO-EM000005', '2022-11-29 12:28:04', '2022-11-29 12:33:32'),
(53, 'EM000008', 1, '2022-11-29', 'DEMO-EM000005', '2022-11-29 12:28:04', '2022-11-29 12:33:32'),
(54, 'EM000009', 0, '2022-11-29', 'DEMO-EM000005', '2022-11-29 12:28:04', '2022-11-29 12:33:32'),
(55, 'EM000010', 0, '2022-11-29', 'DEMO-EM000005', '2022-11-29 12:28:04', '2022-11-29 12:33:32'),
(56, 'EM000011', 0, '2022-11-29', 'DEMO-EM000005', '2022-11-29 12:28:04', '2022-11-29 12:33:32'),
(57, 'EM000012', 0, '2022-11-29', 'DEMO-EM000005', '2022-11-29 12:28:04', '2022-11-29 12:33:32'),
(58, 'EM000013', 0, '2022-11-29', 'DEMO-EM000005', '2022-11-29 12:28:04', '2022-11-29 12:33:32'),
(59, 'EM000015', 0, '2022-11-29', 'DEMO-EM000005', '2022-11-29 12:28:04', '2022-11-29 12:33:32'),
(60, 'EM000006', 1, '2022-11-30', 'DEMO-EM000005', '2022-11-30 20:37:52', '2022-11-30 20:38:11'),
(61, 'EM000008', 0, '2022-11-30', 'DEMO-EM000005', '2022-11-30 20:37:52', '2022-11-30 20:38:11'),
(62, 'EM000009', 0, '2022-11-30', 'DEMO-EM000005', '2022-11-30 20:37:52', '2022-11-30 20:38:11'),
(63, 'EM000010', 0, '2022-11-30', 'DEMO-EM000005', '2022-11-30 20:37:52', '2022-11-30 20:38:11'),
(64, 'EM000011', 0, '2022-11-30', 'DEMO-EM000005', '2022-11-30 20:37:52', '2022-11-30 20:38:11'),
(65, 'EM000012', 0, '2022-11-30', 'DEMO-EM000005', '2022-11-30 20:37:52', '2022-11-30 20:38:11'),
(66, 'EM000013', 0, '2022-11-30', 'DEMO-EM000005', '2022-11-30 20:37:52', '2022-11-30 20:38:11'),
(67, 'EM000015', 0, '2022-11-30', 'DEMO-EM000005', '2022-11-30 20:37:52', '2022-11-30 20:38:11'),
(68, 'EM000016', 0, '2022-11-30', 'DEMO-EM000005', '2022-11-30 20:37:52', '2022-11-30 20:38:11'),
(69, 'EM000006', 1, '2022-12-09', 'DEMO-EM000005', '2022-12-09 17:06:07', '2022-12-09 17:33:47'),
(70, 'EM000008', 1, '2022-12-09', 'DEMO-EM000005', '2022-12-09 17:06:07', '2022-12-09 17:33:47'),
(71, 'EM000009', 1, '2022-12-09', 'DEMO-EM000005', '2022-12-09 17:06:07', '2022-12-09 17:33:47'),
(72, 'EM000010', 0, '2022-12-09', 'DEMO-EM000005', '2022-12-09 17:06:07', '2022-12-09 17:33:47'),
(73, 'EM000011', 1, '2022-12-09', 'DEMO-EM000005', '2022-12-09 17:06:07', '2022-12-09 17:33:47'),
(74, 'EM000012', 0, '2022-12-09', 'DEMO-EM000005', '2022-12-09 17:06:07', '2022-12-09 17:33:47'),
(75, 'EM000013', 1, '2022-12-09', 'DEMO-EM000005', '2022-12-09 17:06:07', '2022-12-09 17:33:47'),
(76, 'EM000015', 1, '2022-12-09', 'DEMO-EM000005', '2022-12-09 17:06:07', '2022-12-09 17:33:47'),
(77, 'EM000016', 0, '2022-12-09', 'DEMO-EM000005', '2022-12-09 17:06:07', '2022-12-09 17:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(191) NOT NULL,
  `pincode` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `pincode`, `created_at`, `updated_at`) VALUES
(1, 'Hosur', '635126', '2022-03-30 02:53:08', '2022-03-30 02:53:08'),
(2, 'Krishnagiri', '635001', '2022-03-30 07:28:56', '2022-03-30 07:28:56'),
(3, 'Chennai', '6000028', '2022-05-21 02:07:44', '2022-05-21 02:07:44'),
(4, 'city', '602315', '2022-05-24 14:40:11', '2022-05-24 14:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `message` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Mani', '9344139392', 'manigandanc@gmail.com', 'Testing', '2022-07-25 17:20:03', '2022-07-25 17:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` varchar(191) DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `gst` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `avatar` varchar(191) DEFAULT NULL,
  `credit` varchar(191) NOT NULL,
  `debit` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_id`, `name`, `gst`, `city`, `address`, `phone`, `email`, `avatar`, `credit`, `debit`, `created_at`, `updated_at`) VALUES
(7, 'CU00002', 'manju manju', '1582584', 'Bangalore HQ/Basavanagudi', 'balaji nagar,\r\nbederapalli', '08903567353', 'kumaran@gmail.com', '1647666452.jpg', '0', '0', '2022-03-18 23:37:33', '2022-03-19 00:07:31'),
(8, 'CU00003', 'mano ranjith', '1582584', 'Hosur', 'balaji nagar,\r\nbederapalli', '08903567353', 'mr.cjmano@gmail.com', '1647760916.jpg', '0', '0', '2022-03-20 01:51:56', '2022-03-20 01:51:56'),
(11, 'CU00004', 'manju manju', '1582584', 'Bangalore HQ/Basavanagudi', 'balaji nagar,\nbederapalli', '08903567353', 'kumaran@gmail.com', '1647666452.jpg', '0', '0', '2022-03-28 04:14:54', '2022-03-28 04:14:54'),
(12, 'CU00005', 'mano ranjith', '1582584', 'Hosur', 'balaji nagar,\r\nbederapalli', '08903567353', 'mr.cjmano@gmail.com', '1647760916.jpg', '0', '0', '2022-03-28 04:14:54', '2022-03-28 06:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `doj` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `role` int(11) NOT NULL,
  `dashboard` int(11) DEFAULT NULL,
  `employee` int(11) DEFAULT NULL,
  `production` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `customer` int(11) DEFAULT NULL,
  `quarry` int(11) DEFAULT NULL,
  `purchase` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `category` varchar(191) DEFAULT NULL,
  `avatar` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `category`, `avatar`, `created_at`, `updated_at`) VALUES
(3, 'Title', 'Category', '1653358211.jpg', '2022-05-23 20:34:16', '2022-05-23 20:40:11'),
(4, 'Title', 'Category', '1653358046.jpg', '2022-05-23 20:37:26', '2022-05-23 20:37:26'),
(5, 'Title', 'Category', '1676634415.JPG', '2023-02-17 18:46:56', '2023-02-17 18:46:56'),
(7, 'Title', 'Category', '1676634471.JPG', '2023-02-17 18:47:52', '2023-02-17 18:47:52'),
(12, 'Title', 'Category', '1676634532.png', '2023-02-17 18:48:53', '2023-02-17 18:48:53'),
(13, 'Title', 'Category', '1676634590.JPG', '2023-02-17 18:49:51', '2023-02-17 18:49:51'),
(15, 'Title', 'Category', '1676634643.JPG', '2023-02-17 18:50:44', '2023-02-17 18:50:44'),
(18, 'Title', 'Category', '1676634701.JPG', '2023-02-17 18:51:42', '2023-02-17 18:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_02_17_060226_create_sitesettings_table', 2),
(14, '2022_03_01_103230_create_customers_table', 6),
(17, '2022_03_19_101434_create_contacts_table', 9),
(29, '2022_03_01_095012_create_roughblocks_table', 10),
(35, '2022_03_01_065856_create_employees_table', 12),
(39, '2022_03_28_101133_create_stocks_table', 14),
(44, '2022_01_05_012413_create_admins_table', 16),
(51, '2022_03_29_120559_create_cities_table', 21),
(52, '2022_03_19_070027_create_quarries_table', 22),
(56, '2022_03_30_110541_create_qpayments_table', 24),
(61, '2022_04_06_035836_create_stockdtls_table', 25),
(62, '2022_03_29_172559_create_q_cuttings_table', 26),
(63, '2022_04_27_051001_create_appointments_table', 27),
(64, '2022_05_24_011626_create_galleries_table', 28),
(65, '2014_10_12_100000_create_password_reset_tokens_table', 29),
(66, '2023_08_29_100151_create_products_table', 29),
(67, '2023_09_05_163503_create_product_table', 30);

-- --------------------------------------------------------

--
-- Table structure for table `m_block_entries`
--

CREATE TABLE `m_block_entries` (
  `id` int(11) NOT NULL,
  `entry_time` varchar(255) NOT NULL,
  `vehicle_no` varchar(255) NOT NULL,
  `block_no` varchar(255) NOT NULL,
  `block_size` varchar(255) NOT NULL,
  `block_color` varchar(255) NOT NULL,
  `block_weight` varchar(255) NOT NULL,
  `quarry_name` varchar(255) NOT NULL,
  `transport_name` varchar(255) NOT NULL,
  `photo_upload` text DEFAULT NULL,
  `exit_time` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `m_block_entries`
--

INSERT INTO `m_block_entries` (`id`, `entry_time`, `vehicle_no`, `block_no`, `block_size`, `block_color`, `block_weight`, `quarry_name`, `transport_name`, `photo_upload`, `exit_time`, `status`, `updated_at`, `created_at`) VALUES
(1, '10:10', 'TN88 D4676', 'SG/300', '235*115*130=3.513', 'MILLENIUM CREAM', '9.926', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/2BvXEguYwowAJ1opfom78lOhRoaiaXpzD32QEynF.jpg', '12:10', 1, '2022-11-29 17:27:42', '2022-09-08 13:02:54'),
(2, '10:10', 'TN88 D4676', 'SG/299', '285*170*120=5.814', 'MILLENIUM CREAM', '16.441', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/EgKjkVzwvA4HZCyWOgvAxtUzTX6LP34u1hVcld3y.jpg', '12:10', 1, '2022-11-29 17:30:25', '2022-09-08 13:31:44'),
(3, '10:00', 'TN 03 W2115', 'SG/288', '360*185*150=9.99', 'KASHMIR GOLD', '27', 'KIPSI INTERNATIONAL', 'RAGAVA TRANSPORT', 'backend/images/BPuVaCdB9kQbsH1SI3RMP49blzl2QjH0iy5zuDvP.jpg', '11:20', 1, '2022-11-29 19:59:00', '2022-11-11 12:58:09'),
(4, '10:00', 'TN03 W2115', 'SG/287', '340*105*98=3.498', 'KASHMIR GOLD', '9.68', 'KIPSI INTERNATIONAL', 'RAGAVA TRANSPORT', 'backend/images/Lsw0KnxA2C1BTzW0MXlTfiacsV76ZVhOf8ycifTe.jpg', '11:20', 1, '2022-11-29 19:58:48', '2022-11-11 13:00:19'),
(5, '02:50', 'TN24 AD0739', 'SG/266', '250*105*150=3.937', 'COLONIAL WHITE', '11.891', 'KIPSI INTERNATIONAL', 'RAGAVA TRANSPORT', 'backend/images/x7jFTAhR8uwLKqeKZUeurZxoqV0V2FSpAKYPIOwn.jpg', '05:05', 1, '2022-11-29 19:59:13', '2022-11-11 20:56:52'),
(6, '10:00', 'TN 03 W2115', 'SG/286', '260*200*155=8.06', 'KASHMIR GOLD', '22', 'KIPSI INTERNATIONAL', 'RAGAVA TRANSPORT', 'backend/images/KjUyeTzQzxiiUJlCMimasceop0XR55K0u0xvBg4C.jpg', '11:20', 1, '2022-11-29 18:11:28', '2022-11-29 18:11:28'),
(7, '10:00', 'TN 03 W2115', 'SG/284', '260*100*97=2.52', 'KASHMIR GOLD', '6', 'KIPSI INTERNATIONAL', 'RAGAVA TRANSPORT', 'backend/images/Q957531IaIA69yMP08yBASCsRdv0K7cVscsERbUb.jpg', '11:20', 1, '2022-11-29 18:15:41', '2022-11-29 18:15:41'),
(8, '10:00', 'TN 03 W2115', 'SG/285', '255*105*125=3.346', 'KASHMIR GOLD', '9.978', 'KIPSI INTERNATIONAL', 'RAGAVA TRANSPORT', 'backend/images/ZH7VMirgzTxBdHiubKVTppFO38MBgJrcAdixhGu0.jpg', '11:20', 1, '2022-11-29 18:19:18', '2022-11-29 18:19:18'),
(9, '06:55', 'TN88 D4676', 'SG/257', '355*203*180=12.971', 'MILLENIUM CREAM', '42', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/RLGGiM3S2EtN42UdlHQT8rbuCJv5QQ9jrukcUulb.jpg', '09:09', 1, '2022-11-29 18:55:49', '2022-11-29 18:55:49'),
(10, '03:10', 'TN 03 W2129', 'SG/313', '355*110*74=2.889', 'MILLENIUM CREAM', '7', 'KALPA EXPORTS', 'RAGAVA TRANSPORT', 'backend/images/Yvrwx7hR0X1gKDHIHGBIANuIdgLAPR5MjirbEWIY.jpg', '05:15', 1, '2022-11-29 19:07:41', '2022-11-29 19:06:46'),
(11, '03:10', 'TN03 W2129', 'SG/309', '210*105*116=2.557', 'MILLENIUM CREAM', '6.95', 'KALPA EXPORTS', 'RAGAVA TRANSPORT', 'backend/images/qreS9bmUnPa4B5MyOxgbDB5LhcRdqyOXppd4c4t9.jpg', '05:15', 1, '2022-11-29 19:09:33', '2022-11-29 19:09:33'),
(12, '03:10', 'TN 03 W2129', 'SG/310', '225*105*130=3.071', 'MILLENIUM CREAM', '8.35', 'KALPA EXPORTS', 'RAGAVA TRANSPORT', 'backend/images/isILKrcVKUAvvSwg5I5nbGEKYEDtJN3mVGMdV4yF.jpg', '05:15', 1, '2022-11-29 19:12:21', '2022-11-29 19:12:21'),
(13, '06:55', 'TN88 D4676', 'SG/258', '297*185*150=8.241', 'MILLENIUM CREAM', '26', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/2rDmikck9dIu59bUhOhGLGQdbtH7t5aROyU1s98E.jpg', '09:00', 1, '2022-11-29 19:35:21', '2022-11-29 19:35:21'),
(14, '10:00', 'TN69 B9907', 'SG/292', '220*100*65=1.43', 'COLONIAL WHITE', '4.2', 'KIPSI INTERNATIONAL', 'RAGAVA TRANSPORT', 'backend/images/1T2YCEelxvpMeCoYMQrkPLAE6YXUr8JEcxjyNbHs.jpg', '11:30', 1, '2022-11-29 19:42:04', '2022-11-29 19:42:04'),
(15, '10:00', 'TN69 B9907', 'SG/291', '355*100*120=4.26', 'COLONIAL WHITE', '12.60', 'KIPSI INTERNATIONAL', 'RAGAVA TRANSPORT', 'backend/images/cOpwLHjdbrB9kE9uojTfH2xaIUyYDWKv07EHhiND.jpg', '11:30', 1, '2022-11-29 19:52:22', '2022-11-29 19:52:22'),
(16, '03:10', 'TN 03 W2129', 'SG/316', '365*140*120=6.132', 'MILLENIUM CREAM', '16', 'KALPA EXPORTS', 'RAGAVA TRANSPORT', 'backend/images/FL5RFohk5J8KtDzBOORgGNSQtIVjC0ukTfdMDWHF.jpg', '06:15', 1, '2022-11-29 19:54:32', '2022-11-29 19:54:32'),
(17, '02:50', 'TN24 AD0739', 'SG/265', '256*99*145=3.674', 'COLONIAL WHITE', '11', 'KIPSI INTERNATIONAL', 'RAGAVA TRANSPORT', 'backend/images/8OUpFOTHh2w5MeJrCPOLRZ116lUTWgwvKTvI1Mcl.jpg', '05:05', 1, '2022-11-30 14:06:22', '2022-11-30 14:06:22'),
(18, '10:00', 'TN 03 W2115', 'SG/282', '210*100*110=2.31', 'KASHMIR GOLD', '6.40', 'KIPSI INTERNATIONAL', 'RAGAVA TRANSPORT', 'backend/images/NCfOtv3KCcdQTtybJddGjUwYW2m1fWfxzADwn0ue.jpg', '11:20', 1, '2022-11-30 14:10:52', '2022-11-30 14:10:52'),
(19, '10:00', 'TN 03 W2115', 'SG/283', '210*105*105=2.31', 'KASHMIR GOLD', '6.40', 'KIPSI INTERNATIONAL', 'RAGAVA TRANSPORT', 'backend/images/OFCMVc9cYz5fbqi7lO9xaN9vRG8trUcCfCbDHNSs.jpg', '11:20', 1, '2022-11-30 14:14:30', '2022-11-30 14:14:30'),
(20, '10:10', 'TN88 D4676', 'SG/298', '265*116*130=3.996', 'MILLENIUM CREAM', '11.30', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/PA6WypjiU0GKc8bzYuWtLeeSJXspVstZMmmmdGXM.jpg', '00:10', 1, '2022-11-30 14:17:26', '2022-11-30 14:17:26'),
(21, '20:10', 'TN88 D4676', 'SG/328', '319*116*190= 7.030', 'MILLENIUM CREAM', '27.761', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/eNWnEjg6fgQ5EerOJm6YWbKNGsOzkPN8tx5fTsPY.jpg', '22:10', 1, '2022-12-09 12:44:42', '2022-12-09 12:44:42'),
(22, '20:10', 'TN88 D4676', 'SG/330', '258*76*130=2.549', 'MILLENIUM CREAM', '10.066', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/PEuT1IBN23pOj5kt8VsGU5Kon6jx0c5fqnAW8GGx.jpg', '22:10', 1, '2022-12-09 12:47:05', '2022-12-09 12:47:05'),
(23, '20:10', 'TN88 D4676', 'SG/327', '255*80*180=3.672', 'MILLENIUM CREAM', '14.500', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/qlkU722ru3CslceesnfxQg1FGJeD1nmlPJjco0Q7.jpg', '22:10', 1, '2022-12-09 12:48:46', '2022-12-09 12:48:46'),
(24, '08:08', 'TN88 D4676', 'SG/329', '200*96*130=2.496', 'MILLENIUM CREAM', '9.856', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/L12YkeTmlX9ktPQOPRVNrKbyIMovuiNrksl7B0Cr.jpg', '22:10', 1, '2022-12-09 12:50:31', '2022-12-09 12:50:31'),
(25, '20:10', 'TN88 D4676', 'SG/325', '353*75*160=4.236', 'MILLENIUM CREAM', '16.727', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/omxt8utw91XXSudLRRsGYd2zZP0SgxNzw4hfCDWi.jpg', '22:10', 1, '2022-12-09 12:52:00', '2022-12-09 12:52:00'),
(26, '08:10', 'TN88 D4676', 'SG/326', '335*80*150=4.020', 'MILLENIUM CREAM', '15.874', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/T3gxXh1GBEaZ5wj8Hh3pn4QqMvSNRKd3weUt6KVE.jpg', '22:10', 1, '2022-12-09 12:53:03', '2022-12-09 12:53:03'),
(27, '20:00', 'TN 88 E 6001', 'SG/323', '290*117*112=3.800', 'MILLENIUM CREAM', '10.852', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/14iPZ4a4bKXjUL0U4tLB3rzh7qKxaCJ7QK6xGv6o.jpg', '21:50', 1, '2022-12-09 12:58:36', '2022-12-09 12:58:36'),
(28, '20:00', 'TN88E6001', 'SG/324', '290*130*124', 'MILLENIUM CREAM', '13.348', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/9FThjOSR6nmTXD09LjO9TfmLveVVNxt8mAWzFKpj.jpg', '21:50', 1, '2022-12-09 12:59:59', '2022-12-09 12:59:59'),
(29, '20:00', 'TN88E6001', 'SG/322', '252*115*120=3.102', 'MILLENIUM CREAM', '8.859', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/00rjOVcqNXSw8OX0LTwDofZxhpBK2H3G2UJxgclW.jpg', '21:50', 1, '2022-12-09 13:03:02', '2022-12-09 13:03:02'),
(30, '20:00', 'TN88E6001', 'SG/318', '262*115*120=3.615', 'MILLENIUM CREAM', '10.324', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/6yEcC2bcw6yCj4IKRrOdJ9pQhQxes9UyHFHNHiHC.jpg', '21:50', 1, '2022-12-09 13:05:56', '2022-12-09 13:05:56'),
(31, '20:00', 'TN88E6001', 'SG/317', '305*112*106=3.602', 'MILLENIUM CREAM', '10.338', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/LcvKedOQMZDjtbvi6uIKmUr7n4O4ELwLUNl4Qmiz.jpg', '21:50', 1, '2022-12-09 13:07:20', '2022-12-09 13:07:20'),
(32, '20:00', 'TN88E6001', 'SG/320', '245*173*105=4.450', 'MILLENIUM CREAM', '12.709', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/zj5gR6TBueMJl2UpqHeSrOhk9okT7zGdoNChtePQ.jpg', '21:50', 1, '2022-12-09 13:08:36', '2022-12-09 13:08:36'),
(33, '20:00', 'TN88E6001', 'SG/319', '338*117*90=3.559', 'MILLENIUM CREAM', '10.164', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/rsJ27X59ZRoFCFyBXbCbSIyD1K63b9Uv73LIzK0s.jpg', '21:50', 1, '2022-12-09 13:09:42', '2022-12-09 13:09:42'),
(34, '20:00', 'TN88E6001', 'SG/182', '340*120*124=5.059', 'MILLENIUM CREAM', '14.448', 'KALPA EXPORTS', 'S.K TRANSPORT', 'backend/images/lcOL3jGXycIw3VG0OsO8CJiwymBMMzOmYNHrvfnS.jpg', '21:50', 1, '2022-12-09 13:10:56', '2022-12-09 13:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `m_dailyreport`
--

CREATE TABLE `m_dailyreport` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `no_of_slabs` varchar(255) NOT NULL,
  `slab_dimension` varchar(255) NOT NULL,
  `running_time` varchar(255) NOT NULL,
  `ideal_time` varchar(255) NOT NULL,
  `breakdown_time` varchar(255) NOT NULL,
  `powercut_time` varchar(255) NOT NULL,
  `photo_upload` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `m_dailyreport`
--

INSERT INTO `m_dailyreport` (`id`, `date`, `start_time`, `end_time`, `no_of_slabs`, `slab_dimension`, `running_time`, `ideal_time`, `breakdown_time`, `powercut_time`, `photo_upload`, `status`, `created_at`, `updated_at`) VALUES
(1, '2022-02-09', '06:00', '04:00', '132', '280*76', '01:41', '22:17', '19:36', '00:06', 'backend/images/jilAqpwwRG9H67wMiWfinTSGy0bc0pKEnFOuNeBe.jpg', 1, '2022-09-08 14:10:29', '2022-12-09 14:20:05'),
(2, '2022-12-09', '08:59', '06:08', '86', '74', '07:05', '07:05', '07:05', '07:05', 'backend/images/6z76OpUAWYXRqZdtNsOJlGKOpBNCQj4pt5LBJbR1.jpg', 1, '2022-11-11 21:00:41', '2022-12-10 16:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `m_dispatch`
--

CREATE TABLE `m_dispatch` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `invoice_value` varchar(255) NOT NULL,
  `gst_amount` varchar(255) NOT NULL,
  `slab_color` varchar(255) NOT NULL,
  `measurement` varchar(255) NOT NULL,
  `photo_upload` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `m_dispatch`
--

INSERT INTO `m_dispatch` (`id`, `date`, `customer_address`, `invoice_no`, `invoice_value`, `gst_amount`, `slab_color`, `measurement`, `photo_upload`, `status`, `created_at`, `updated_at`) VALUES
(1, '2022-12-01', 'MODI DECOR & STONES PRIVATE LIMITED C/O J KUMAR INFRA PROJECTS LTD SAHAR ROAD METRO STATION A/58, GROUND FLOOR, AZAD NAGAR, VEERA DESAI ROAD, ANDHERI(WEST) MUMBAI - 400 058', '4/22-23', '10,11,024', '154224', 'MILLENIUM CREAM', '4080', 'backend/images/0R7NtuM9MmLnXHk8yush1iICGiybnpbWS9Ia3u5s.jpg', 1, '2022-09-08 13:59:56', '2022-12-09 14:31:01'),
(2, '2022-12-01', 'BS GRANITE D.1. PLOT SIDCO INDUSTRIAL ESTATE KARUMALAIKUDDAL,METTUR DAM, SALEM DISTRICT, TAMIL NADU-636402', '050/22-23', '244826', '18673', 'MILLENIUM GOLD', '3990', 'backend/images/ARE4DNeF5i05FG5AYdw37ZCFmLEP0KMqHY6aV0Nc.jpg', 1, '2022-11-11 21:02:07', '2022-12-13 20:08:56'),
(3, '2022-12-02', 'PARADIGM GRANITE PVT LTD, NALLAGANAKOTHAPALLI, HPSUR TK KRISHNAGIRI DT', '51/22-23', '5,06,084', '253', 'MILLENIUM CREAM', '4134.03', 'backend/images/jKvcglWyYU9mt7eyht2GbilrAaVE147nKL8tYbDY.jpg', 1, '2022-12-13 20:08:11', '2022-12-13 20:08:11'),
(4, '2022-12-11', 'MODI DECOR & STONES PRIVATE LIMITED C/O J KUMAR INFRA PROJECTS LTD SAHAR ROAD METRO STATION A/58, GROUND FLOOR, AZAD NAGAR, VEERA DESAI ROAD, ANDHERI(WEST) MUMBAI - 400 058', '54/22-23', '9,48,181.', '1,44,638', 'MILLENIUM CREAM   3CM', '3952.500', 'backend/images/Mnu2qTxk4T9KzczsC9vzbLYvflhHmaeAXIg3btm3.jpg', 1, '2022-12-13 20:11:52', '2022-12-13 20:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `m_epoxy`
--

CREATE TABLE `m_epoxy` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `block_no` varchar(255) NOT NULL,
  `no_of_slabs` varchar(255) NOT NULL,
  `epoxy_make` varchar(255) NOT NULL,
  `running_time` varchar(255) NOT NULL,
  `consumption` varchar(255) NOT NULL,
  `operator_name` varchar(255) NOT NULL,
  `photo_upload` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `m_epoxy`
--

INSERT INTO `m_epoxy` (`id`, `date`, `block_no`, `no_of_slabs`, `epoxy_make`, `running_time`, `consumption`, `operator_name`, `photo_upload`, `status`, `created_at`, `updated_at`) VALUES
(1, '2022-12-10', 'SG/275 & SG/298 & SG/168', '62', 'STONERA', '10:00', '-', 'MAHENDREN', 'backend/images/MfBlWNbYpp02Yt3UE9NTVlumP4UKG0ojLXXr0llf.jpg', 1, '2022-09-08 14:04:09', '2022-12-15 13:09:40'),
(2, '2022-12-11', 'SG/208 & SG/260 & SG/275 & SG/258', '69 SLABS', 'STONERA', '00:00', '15 LITERS', 'MAHENDREN', 'backend/images/bZyBnQDpGykUUQHFK0f80HvfslmgcjDLRO4kWdiQ.jpg', 1, '2022-11-11 21:01:28', '2022-12-12 16:15:32'),
(3, '2022-12-12', 'SG/296 & SG/275  & SG/278', '75', 'STONERA', '12:02', '15 LITERS', 'MAHENDREN', 'backend/images/IVifkt2qESNl3HsuZ62BSGyZ9WO7mX6AQ7r1XLzo.jpg', 1, '2022-12-13 20:04:45', '2022-12-13 20:04:45'),
(4, '2022-12-13', 'SG/278 & SG/260 & SG/296', '28 & 22 & 29', 'STONERA', '12:00', '15 LIT', 'MAHENDRAN', 'backend/images/61tBEsJQeYTOKXuBWzxXpSApdpAA5Ij29P20LMWM.jpg', 1, '2022-12-15 13:09:18', '2022-12-15 13:09:18'),
(5, '2022-12-14', 'SG/296 & SG/321 & 268', '25/18/14', 'STONERA', '10:00', '15 LIT', 'MAHENDRAN', 'backend/images/ADfxcGXjpaGOzEGrPQ3kv2UCZpa9o65mV3Ysbc4b.jpg', 1, '2022-12-15 13:10:47', '2022-12-15 13:10:47'),
(6, '2022-12-15', 'SG/321 & SG/316 & SG/321 & SG/268 &', '99 SLABS', 'STONERA', '12:00', '15 LIT', 'MAHENDRAN', 'backend/images/q8rH5M6be6QISVobsE4s2HZTCnVtto4kBbu2801g.jpg', 1, '2022-12-16 13:15:17', '2022-12-16 13:15:17'),
(7, '2022-12-16', 'SG/268 & SG/258 & SG/239 & SG /271 & SG/317', '94', 'STONERA', '12:00', '15 LIT', 'MAHENDRAN', 'backend/images/XCKkTB80QVabPrLjvcioTAB3c5XBYB61o910Yl6k.jpg', 1, '2022-12-17 13:40:52', '2022-12-17 13:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `m_finished`
--

CREATE TABLE `m_finished` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `slab_color` varchar(255) NOT NULL,
  `slab_no` varchar(255) NOT NULL,
  `block_no` varchar(255) NOT NULL,
  `measurement` varchar(255) NOT NULL,
  `slab_dimension` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `m_finished`
--

INSERT INTO `m_finished` (`id`, `date`, `slab_color`, `slab_no`, `block_no`, `measurement`, `slab_dimension`, `status`, `created_at`, `updated_at`) VALUES
(1, '2022-09-20', 'black', '4365567', '567899', '90X20', '90,70', 1, '2022-09-08 13:57:45', '2022-09-08 13:57:45'),
(2, '2002-06-17', 'Est sed ad similiqu', 'Fugiat earum cillum', 'Veniam laborum laud', 'Velit explicabo As', 'Cupiditate asperiore', 1, '2022-11-11 13:32:02', '2022-11-11 13:32:02'),
(3, '2022-11-11', 'Kashmir Gold', '12', '180', '356', '356*99', 1, '2022-11-11 21:02:27', '2022-11-11 21:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `m_polishing`
--

CREATE TABLE `m_polishing` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `grind_polish` varchar(255) NOT NULL,
  `starting_time` varchar(255) NOT NULL,
  `ending_time` varchar(255) NOT NULL,
  `block_no` varchar(255) NOT NULL,
  `no_of_slabs` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `operator_name` varchar(255) NOT NULL,
  `slab_dimension` varchar(255) NOT NULL,
  `block_color` varchar(255) NOT NULL,
  `running_time` varchar(255) NOT NULL,
  `ideal_time` varchar(255) NOT NULL,
  `breakdown_time` varchar(255) NOT NULL,
  `powercut_time` varchar(255) NOT NULL,
  `photo_upload` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `m_polishing`
--

INSERT INTO `m_polishing` (`id`, `date`, `grind_polish`, `starting_time`, `ending_time`, `block_no`, `no_of_slabs`, `remarks`, `operator_name`, `slab_dimension`, `block_color`, `running_time`, `ideal_time`, `breakdown_time`, `powercut_time`, `photo_upload`, `status`, `created_at`, `updated_at`) VALUES
(1, '2022-12-08', 'Polishing', '13:44', '14:41', 'SG/305 , SG/293, SG/307, SG/295B', '72', 'GRINDING POLISHING', 'SAMMIM AKTHAR', '280*76', 'MILLENIUM CREAM', '08:38', '13:51', '19:28', '16:21', 'backend/images/BX9BuU92LyghwlG5g7zTwTaOt5hxs4zmfbBRismv.jpg', 1, '2022-09-08 14:15:56', '2022-12-09 14:11:43'),
(2, '2022-12-08', 'grind', '05:44', '07:06', '168', '62', 'GRINDING', 'BABLU NAIK', '356*99', 'MILLENIUM CREAM', '06:59', '06:07', '07:59', '05:04', 'backend/images/4u33S9PaZ0nrcwbblW2Dx0yqkGOuZ5f3JdGLlyby.jpg', 1, '2022-11-11 20:59:47', '2022-12-09 16:03:31'),
(3, '2022-12-10', 'grind', '06:06', '20:00', 'SG/22', '22 SLABS', '3 CM', 'SAMIM', '210*99', 'MILLENIUM CREAM', '21:00', '00:00', '14:00', '00:00', 'backend/images/KFe4SHdaVx1pfkox58KBkcFAqzz76APv2T4ImKUx.jpg', 1, '2022-12-11 19:23:45', '2022-12-11 19:23:59'),
(4, '2022-12-10', 'grind', '20:00', '04:00', 'SG/281', '40 SLABS', 'DIRECT POLISHING 3CM', 'KALI', '190*93', 'MILLENIUM CREAM', '20:08', '12:00', '12:00', '12:00', 'backend/images/SoJTC2seQSl7YZsf0LpclApRiyYhZz5HDYJ9uCNz.jpg', 1, '2022-12-11 19:26:26', '2022-12-11 19:26:26'),
(5, '2022-12-11', 'grind', '06:06', '18:00', 'SG/309 , SG/298, SG/278', '83', 'POLISHING AND GRINDING', 'SAMIM', '370*98/  205*100  / 256*64', 'MILLENIUM CREAM', '21:00', '12:00', '12:00', '12:00', 'backend/images/Qwe2RaPqUao8F1jv8L31hClZahvuJgfqx3NcyVXp.jpg', 1, '2022-12-11 19:30:15', '2022-12-11 19:30:38'),
(6, '2022-12-11', 'grind', '06:06', '18:06', 'SG/281 & SG/287 & SG/208 & SG/313', '44 slabs', 'GRINDING AND POLISHING', 'SAMIM', '102*340', 'MILLENIUM CREAM and KASHMIR GOLD', '12:00', '14:00', '13:00', '13:00', 'backend/images/c9yxyZz4iIMDNkBGUBiUComDGH1PXfZCIxu0JQRn.jpg', 1, '2022-12-12 16:09:49', '2022-12-12 16:09:49'),
(7, '2022-12-11', 'grind', '20:00', '04:00', 'SG/313 & SG 316', '42 SLABS', '3 CM', 'BABLU NAIK', '385*67', 'MILLENIUM CREAM', '08:00', '13:00', '13:00', '12:00', 'backend/images/pq3qj6h0oiiYogoo7CdPcdKcNU7sPY8xmz7VOyTu.jpg', 1, '2022-12-12 16:12:02', '2022-12-12 16:12:02'),
(8, '2022-12-12', 'polish', '06:06', '18:06', 'SG/287 & SG/296 & SG/149', '60 SLABS', 'POLISH & GRIND', 'SAMIM', '340*102  & 169*74', 'MILLENIUM CREAM & COLONIAL WHITE & CANYON GOLD', '12:00', '02:00', '22:00', '12:00', 'backend/images/HxjPijjdysX1WAGiHL73PKVqgpBgD69EsRN1tW3u.jpg', 1, '2022-12-13 19:58:41', '2022-12-13 19:58:41'),
(9, '2022-12-12', 'polish', '20:00', '04:00', 'SG 316  &  SG/168  &  SG/296', '75 SLABS', 'POLISHING AND GRINDING', 'BABLU NAIK', '385*67 &  169*74', 'MILLENIUM CREAM & COLONIAL WHITE & CANYON GOLD', '08:00', '12:00', '00:00', '12:00', 'backend/images/aJcLEQIRwmCuxDmqMGskgIt4QXodvd39Yje641u7.jpg', 1, '2022-12-13 20:02:10', '2022-12-13 20:02:10'),
(10, '2022-12-13', 'grind', '06:00', '06:00', 'SG/260 & SG/313 & SG/168 & SG/316', '63 SLABS', 'GRINDING AND POLISHING', 'SAMMIM AKTHAR', '365*75  /385*67/ & 191*67', 'MILLENIUM CREAM & COLONIAL WHITE', '12:00', '03:30', '01:00', '00:00', 'backend/images/9Yt27N6q0mE4KXngyqGfeYpK9NVnPK9SstR0oIte.jpg', 1, '2022-12-14 12:10:36', '2022-12-14 12:10:36'),
(11, '2022-12-13', 'grind', '08:00', '04:00', 'SG/321 & SG/296', '57 SLABS', '3CM POLISHING', 'BABLU NAIK', '340*77 & 64*73', 'MILLENIUM CREAM', '08:00', '00:00', '00:00', '00:00', 'backend/images/RsMuEqQBHUDrnFTKUYeYbqKepom3SlgTXA6XtkT2.jpg', 1, '2022-12-14 12:12:34', '2022-12-14 12:12:34'),
(12, '2022-12-14', 'grind', '08:00', '04:00', 'SG/312 & SG/321 & SG/296', '41 slabs', 'GRINDING 3CM', 'SAMMIM AKTHAR', '383*83 & 292*70 & 63*73', 'MILLENIUM CREAM', '08:00', '00:00', '00:00', '00:00', 'backend/images/zCYF6PnrDms23rpbVDcDNFttycoDUOJtbvRH4hE8.jpg', 1, '2022-12-15 12:51:03', '2022-12-15 12:51:03'),
(13, '2022-12-14', 'polish', '06:00', '06:00', 'SG/208 & SG/275 & SG/258 &', '57 SLABS', '3CM POLISHING', 'BABLU NAIK', '100*26 & 86 * 38 & 115*34', 'MILLENIUM CREAM', '00:00', '00:00', '00:00', '00:00', 'backend/images/ahb1i5I7dPnsiuNbxopMPy9WKEIVrYu5VyPljzKG.jpg', 1, '2022-12-15 13:05:51', '2022-12-15 13:05:51'),
(14, '2022-12-15', 'grind', '06:00', '06:00', 'SG/296 & SG/321', '79 SLABS', '3CM POLISHING', 'BABLU NAIK', '150*70', 'MILLENIUM CREAM', '12:00', '00:00', '01:00', '00:00', 'backend/images/eFiOHu7myPBkvDIsdix3HRSgrZyx6PiRpwNyHTKN.jpg', 1, '2022-12-16 13:10:07', '2022-12-16 13:10:53'),
(15, '2022-12-15', 'grind', '08:00', '02:00', 'SG/316 & SG/321', '34 SLABS', 'MACHINE STOPPED AT 2.00AM DUE TO ALARAM PROBLEM', 'SAMMIM AKTHAR', '383*80', 'MILLENIUM CREAM', '06:00', '04:00', '04:00', '00:00', 'backend/images/aclbBKE2V5xH3QwxQcVYfyYQRspJErKR83K9w0jx.jpg', 1, '2022-12-16 13:13:14', '2022-12-16 13:13:14'),
(16, '2022-12-16', 'polish', '06:06', '06:06', 'SG/320 & SG/317', '41 slabs', 'POLISHING', 'BABLU NAIK', '307*98', 'MILLENIUM CREAM', '07:00', '02:00', '20:00', '00:00', 'backend/images/dHnqU8HyQ1hx65sEiT8FQxKrSwo3GtbW1LYLyoTN.jpg', 1, '2022-12-17 13:36:01', '2022-12-17 13:36:01'),
(17, '2022-12-16', 'grind', '08:00', '04:00', 'SG/320 & SG 312', '49 SLABS', 'GRINDING AND POLISHING', 'SAMMIM AKTHAR', '264*80 & 383*83', 'MILLENIUM CREAM', '08:00', '01:00', '00:00', '00:00', 'backend/images/p3SkKns7MGKUp8rwAbphGhK79iBxDxhk3w6ym0Pe.jpg', 1, '2022-12-17 13:38:30', '2022-12-17 13:38:30'),
(18, '2022-12-17', 'polish', '20:00', '04:00', 'SG/325 & SG/320', '37 SLABS', 'POLISHING AND GRINDING', 'SAMIM', '264*80', 'MILLENIUM CREAM', '20:00', '03:00', '12:00', '00:00', 'backend/images/psPY0aRdF8wdE0BNYsr7yo30IjbbIVbBHGxEraVX.jpg', 1, '2022-12-19 12:48:26', '2022-12-19 12:48:26'),
(19, '2022-12-17', 'grind', '06:06', '18:06', 'SG/296 & SG/321', '71 SLABS', 'POLISHING AND GRINDING', 'BABLU NAIK', '169*74', 'MILLENIUM CREAM', '00:00', '01:00', '01:00', '00:00', 'backend/images/IUM1EWkFo7a99t49pEdJu9xrNOgLNu7rqgBT2yGu.jpg', 1, '2022-12-19 12:53:33', '2022-12-19 12:53:33'),
(20, '2022-12-18', 'polish', '20:00', '04:00', 'SG/258 & SG/325', '48 SLABS', 'POLISHING', 'SAMIM', '260*75', 'MILLENIUM CREAM', '00:00', '00:00', '00:00', '09:00', 'backend/images/GRoHjEGZizFtxK5hbU2mUERhtY8up5oIYTQOMp73.jpg', 1, '2022-12-19 12:56:57', '2022-12-19 12:56:57'),
(21, '2022-12-18', 'polish', '06:00', '18:50', 'SG/258 & SG/296 SG/325', '58 SLABS', 'POLISHING AND GRINDING', 'BABLU NAIK', '164*74', 'MILLENIUM CREAM', '00:00', '00:00', '00:00', '00:00', 'backend/images/LFH7MreenbQovePlQx6Fj7Y7eaoFxxegAKSciJCk.jpg', 1, '2022-12-19 12:59:25', '2022-12-19 12:59:25'),
(22, '2022-12-19', 'polish', '20:00', '16:00', 'SG/258 & SG/325', '58 SLABS', 'POLISHING', 'SAMIM', '3CM', 'MILLENIUM CREAM', '07:00', '14:00', '00:00', '00:00', 'backend/images/FIe982pSbZ4Bk8nFUOFFRQph6uboc20nBYauKg8C.jpg', 1, '2022-12-27 17:41:06', '2022-12-27 17:41:06'),
(23, '2022-12-19', 'grind', '06:00', '18:06', 'SG/325 & SG/128 & SG/260', '60 SLABS', 'POLISHING AND GRINDING', 'BABLU NAIK', '102*27 & 128*39 &', 'MILLENIUM CREAM', '08:00', '10:00', '00:00', '00:00', 'backend/images/gJcF04fqY0lSy8zTX6m51xj2ov1UiulhDT0bG8m2.jpg', 1, '2022-12-27 17:48:36', '2022-12-27 17:48:36'),
(24, '2022-12-20', 'grind', '00:00', '00:00', '-', 'POWER CUT', 'SHUT DOWN 9:00AM TO 7:00PM', 'SAMIM', '-', 'MILLENIUM CREAM', '00:00', '00:00', '00:00', '00:00', 'backend/images/4U7K0m4MjLLWL1Sh9if0DeP4VuBfUBqDHfUvSSAt.jpg', 1, '2022-12-27 17:52:06', '2022-12-27 17:52:06'),
(25, '2022-12-20', 'grind', '00:00', '00:00', '-', '-', 'SHUT DOWN 9:00AM TO 7:00PM', '-', '-', '-', '00:00', '00:00', '00:00', '00:00', 'backend/images/pN08vtcS0Y6AFIILJXQ5KNAIiLxarix0PXHsJuzd.jpg', 1, '2022-12-27 17:53:16', '2022-12-27 17:53:16'),
(26, '2022-12-21', 'polish', '06:00', '18:00', 'SG/268 & SG/271', '52 SLABS', 'POLISHING', 'SHAMIM', '3CM', 'MILLENIUM CREAM', '11:00', '01:00', '01:00', '00:00', 'backend/images/am4Fn8XBpKAByDT3R7D79dx1B7GBufv8DaqXfdEq.jpg', 1, '2023-01-03 12:27:27', '2023-01-03 12:27:27'),
(27, '2022-12-21', 'grind', '20:00', '16:00', 'SG/301 & SG/300', '64', '*-', 'BABLU NAIK', '101*27 & 100*26', 'MILLENIUM CREAM', '08:00', '00:00', '00:00', '00:00', 'backend/images/tMC2xoCQ6mKrCGFtn6JlfG9tCrioZ2WyIzLY2ri0.jpg', 1, '2023-01-03 12:30:27', '2023-01-03 12:30:27'),
(28, '2022-12-22', 'polish', '08:00', '17:06', 'SG/301 & SG/300 & SG/300', '46 SLABS', '-', 'SHAMIM', '101*27 & 100*26', 'MILLENIUM CREAM', '08:00', '00:00', '00:00', '00:00', 'backend/images/yxsLJaqwBF9n8tRKjAL1leUecqpNuPIxAgv1gxd0.jpg', 1, '2023-01-03 12:33:04', '2023-01-03 12:36:03'),
(29, '2022-12-22', 'polish', '20:00', '04:00', 'SG/300 & SG/301 & SG/343', '60', '-', 'BABLU NAIK', '100*26 & 101*27 & 86*27', 'MILLENIUM CREAM', '00:00', '00:00', '00:00', '00:00', 'backend/images/1l2imP7rmF7I2F21Y3rpdHwQb2Zc314zmzQq3FR1.jpg', 1, '2023-01-03 12:35:25', '2023-01-03 12:35:25'),
(30, '2022-12-23', 'grind', '06:00', '18:00', 'SG/319 & SG/343 & -', '46 SLABS', '-', 'SHAMIM', '3CM', 'MILLENIUM CREAM', '12:00', '00:00', '00:00', '00:00', 'backend/images/VTYPSVHPG6ra8bamc58rHYUwR0kQvaxmlXxVynG0.jpg', 1, '2023-01-03 12:37:57', '2023-01-03 12:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `m_production`
--

CREATE TABLE `m_production` (
  `id` int(11) NOT NULL,
  `cutting_machine` varchar(255) NOT NULL,
  `block_dimension` varchar(255) NOT NULL,
  `block_no` varchar(255) NOT NULL,
  `block_color` varchar(255) NOT NULL,
  `loading_time` varchar(255) NOT NULL,
  `unloading_time` varchar(255) NOT NULL,
  `no_of_slabs` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `operator_name` varchar(255) NOT NULL,
  `cutting_time` varchar(255) NOT NULL,
  `ideal_time` varchar(255) NOT NULL,
  `breakdown_time` varchar(255) NOT NULL,
  `powercut_time` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `m_production`
--

INSERT INTO `m_production` (`id`, `cutting_machine`, `block_dimension`, `block_no`, `block_color`, `loading_time`, `unloading_time`, `no_of_slabs`, `remarks`, `operator_name`, `cutting_time`, `ideal_time`, `breakdown_time`, `powercut_time`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Cutting 1', '222*99', 'SG/199', 'CANAYON GOLD', '18:31', '18:35', '23', 'backend/images/NDYBxfVCncm48N8LU4Qqe7wBk1OzEGqvnyfJJmmZ.jpg', 'OMA RAM', '19:28', '00:00', '12:00', '00:00', 1, '2022-12-10 19:19:26', '2022-09-08 14:23:37'),
(2, 'Cutting 2', '180*97', 'SG/161', 'COLONIAL WHITE', '18:31', '18:31', '24', 'backend/images/Jnl7gXUxx0Kza3VhAolgIz51JFmv8cE6LXuYesoo.jpg', 'OMA RAM', '03:45', '04:45', '04:07', '14:54', 1, '2022-12-10 16:06:59', '2022-11-11 20:58:20'),
(3, 'Cutting 3', '206*100 & 359*95', 'SG/309 & SG/298', 'MILLENIUM CREAM', '17:45', '00:00', '22 &', 'backend/images/ntgEPnCMz5vQTouY6Rhc03dltVsFy17WqNHcqDRk.jpg', 'KHAKESWER POI & SUREENDHAR KUMAR', '00:00', '16:07', '14:07', '16:55', 1, '2022-12-10 16:08:37', '2022-12-09 14:04:29'),
(4, 'Cutting 1', '255*64 & 359*79', '298B & 313', 'MILLENIUM CREAM', '21:22', '12:18', '28 & 19', 'backend/images/2CHws4bV0g58zAuZNECS3zmu9Mtc41FZO47cHu3z.png', 'SURRENDHAR KUMAR & KHAKESWER POI', '10:25', '08:24', '03:00', '12:00', 1, '2022-12-11 19:17:53', '2022-12-09 15:08:23'),
(5, 'Cutting 1', 'under process', 'SG/257', 'MILLENIUM CREAM', '10:11', '00:04', 'under process', 'backend/images/tReTOKCNIw8q9G1dWY5Pcyd1LLbrL6GZCgqF569w.png', 'FARHAN ALAM', '15:05', '04:00', '00:00', '02:00', 1, '2022-12-11 19:18:36', '2022-12-09 15:57:36'),
(6, 'Cutting 4', '340*77', 'SG/321', 'MILLENIUM CREAM', '17:00', '03:00', '30', 'backend/images/aUAfSM8Oz6DgG6Llkeqx2mtUG0YKDFjj0mZHSnXy.jpg', 'KHAKESWER POI & SUREENDHAR KUMAR', '12:22', '02:00', '02:00', '01:00', 1, '2022-12-13 19:51:22', '2022-12-10 14:32:26'),
(7, 'Cutting 2', '3CM', 'sg/296B', 'MILLENIUM CREAM', '17:00', '00:00', 'under process', 'backend/images/6YaKmsQ08bOVeQlAnkV4V5IzfSVWyGhbwGO2HhWB.jpg', 'FARHAN ALAM', '00:00', '12:00', '00:00', '12:00', 1, '2022-12-13 19:47:47', '2022-12-13 19:47:47'),
(8, 'Cutting 1', '3CM', 'SG/324', 'MILLENIUM CREAM', '13:20', '00:00', '30', 'backend/images/6N9y2qc7TmAM4CDWNeMw3XKJVHZqaDTNnHHPlzAU.jpg', 'OMA RAM', '00:00', '00:00', '00:00', '00:00', 1, '2022-12-14 12:02:43', '2022-12-13 19:52:58'),
(9, 'Cutting 4', '3CM', 'SG/312', 'MILLENIUM CREAM', '09:58', '10:00', '30', 'backend/images/gt7cWScLqhPsaXufgFCRPGZyTOleww19da6oGr03.jpg', 'KHAKESWER POI & RAVI KUMAR', '18:00', '12:00', '12:12', '12:00', 1, '2022-12-14 12:01:18', '2022-12-13 19:55:06'),
(10, 'Cutting 3', '3CM', 'SG/320', 'MILLENIUM CREAM', '08:30', '09:50', '42 SLABS', 'backend/images/me8sSLXgFkiYteQHUyhG478vl9pdajkCjHsHR6pU.jpg', 'KHAKESWER POI', '23:00', '00:00', '00:00', '00:00', 1, '2022-12-16 13:00:00', '2022-12-14 12:05:28'),
(11, 'Cutting 1', '260*75', 'SG/325', 'MILLENIUM CREAM', '10:00', '09:00', '37', 'backend/images/f8ov1PHX7Vj4yghWJmZYArk3On9ivWKWcJyYi8RE.jpg', 'FARHAN ALAM', '21:00', '21:00', '02:00', '03:59', 1, '2022-12-17 13:30:48', '2022-12-15 13:12:53'),
(12, 'Cutting 1', '2 CM', 'SG/258', 'MILLENIUM CREAM', '12:00', '00:00', 'UNDER PRO9CESS', 'backend/images/jG0nxxSLhOYa2fkNTup1YkNs4Yz0SwtYV13vabgZ.jpg', 'OMA RAM', '00:00', '00:00', '00:00', '00:00', 1, '2022-12-15 13:14:49', '2022-12-15 13:14:49'),
(13, 'Cutting 1', '3CM', 'SG/331A&B', 'COLONIAL WHITE', '08:30', '00:00', 'UNDER PRO9CESS', 'backend/images/ihM8t9QsyYsgiavRu2xdJI6BQLsq8Vrv6prBgnlY.jpg', 'KHAKESWER POI', '00:00', '00:00', '00:00', '00:00', 1, '2022-12-19 12:31:50', '2022-12-16 13:05:37'),
(14, 'Cutting 4', '3CM', 'SG/331', 'COLONIAL WHITE', '09:50', '00:00', 'UNDER PRO9CESS', 'backend/images/fA2U5Pd1C6RyayEgg75l7ayoDx2ldqiT55NLg6Qn.jpg', 'FARHAN ALAM', '00:00', '00:00', '00:00', '00:00', 1, '2022-12-16 13:06:51', '2022-12-16 13:06:51'),
(15, 'Cutting 2', '3CM', 'SG/335 A  & SG/335B', 'COLONIAL WHITE', '05:00', '00:00', '45', 'backend/images/8c7pzUvpetSN3vn9bIQXjjZW4qV5VOroFWaasPH3.jpg', 'FARHAN ALAM', '00:00', '00:00', '00:00', '00:00', 1, '2022-12-19 12:31:07', '2022-12-17 13:33:20'),
(16, 'Cutting 4', '3CM', 'SG/337', 'COLONIAL WHITE', '17:00', '11:05', 'under process', 'backend/images/6rFUNpWowdOjIClOlec6DSCmJTnaR5InUWZ0zuRs.jpg', 'KHAKESWER POI', '12:00', '00:00', '21:00', '00:00', 1, '2022-12-19 12:37:15', '2022-12-19 12:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `city_name`, `pincode`, `created_at`, `updated_at`) VALUES
(1, 'Hosur', '635126', '2022-03-29 21:23:08', '2022-03-29 21:23:08'),
(2, 'Krishnagiri', '635001', '2022-03-30 01:58:56', '2022-03-30 01:58:56'),
(3, 'Chennai', '6000028', '2022-05-20 20:37:44', '2022-05-20 20:37:44'),
(4, 'city', '602315', '2022-05-24 09:10:11', '2022-05-24 09:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `start` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `material` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `gst` varchar(255) DEFAULT NULL,
  `credit` varchar(255) DEFAULT NULL,
  `debit` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `avatar2` varchar(255) NOT NULL,
  `avatar3` varchar(255) NOT NULL,
  `avatar4` varchar(255) NOT NULL,
  `avatar5` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `start`, `name`, `city_id`, `material`, `address`, `phone`, `email`, `year`, `remark`, `gst`, `credit`, `debit`, `avatar`, `avatar2`, `avatar3`, `avatar4`, `avatar5`, `created_at`, `updated_at`) VALUES
(1, 'QR0000', 'March 9, 2016', 'Product (Unit - I)', NULL, 'Granites', 'address', '8876787889', 'jaseersair123@gmail.com', '2018', 'hi', '1234567899', '0', '0', '1694175744.jpg', '16941757442.jpg', '169417574428.jpg', '169417574480.jpg', '169417574552.jpg', '2023-09-01 06:03:54', '2023-09-08 07:16:03'),
(2, 'QR0001', '10-09-2022', 'Product (Unit - II)', 2, 'Granites', '77/7  anna nagar', '8876787889', 'alwin@gmail.com', '2020', 'hello', '1234567890', '0', '0', '16940656361.jpg', '16940656362.jpg', '169406563728.jpg', '169406563780.jpg', '169406563752.jpg', '2023-09-07 00:17:18', '2023-09-07 00:17:18'),
(3, 'QR0002', '10-09-2022', 'Product (Unit - V)', 3, 'Granites', '77/7  anna nagar', '8876787889', 'alwin@gmail.com', '2020', 'hello', '1234567890', '0', '0', '16940656431.jpg', '16940656432.jpg', '169406564428.jpg', '169406564480.jpg', '169406564452.jpg', '2023-09-07 00:17:24', '2023-09-07 00:17:24'),
(4, 'QR0003', 'November 10, 2009', 'Product (Unit - III)', 4, 'Granites ', 'address', '08825821243', 'alwin@gmail.com', '2018', 'product', '1234567890', '0', '0', '16940712921.jpg', '16940712922.jpg', '169407129328.jpg', '169407129380.jpg', '169407129352.jpg', '2023-09-07 01:51:33', '2023-09-07 01:51:33'),
(10, 'QR0004', '10-09-2022', 'Product (Unit - IV)', 2, 'clothes', '77/7  anna nagar', '8825821241', 'alwin@gmail.com', '2020', 'products', '1234567890', '0', '0', '16941714491.jpg', '16941714492.jpg', '169417144928.jpg', '169417144980.jpg', '169417144952.jpg', '2023-09-08 05:40:50', '2023-09-08 05:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `category`, `avatar`, `created_at`, `updated_at`) VALUES
(3, 'Title', 'Category', '1678432229.JPG', '2023-03-10 14:10:30', '2023-03-10 14:10:30'),
(4, 'Title', 'Category', '1678432987.JPG', '2023-03-10 14:23:08', '2023-03-10 14:23:08'),
(5, 'Title', 'Category', '1678433416.JPG', '2023-03-10 14:30:17', '2023-03-10 14:30:17'),
(6, 'Title', 'Category', '1678433578.JPG', '2023-03-10 14:32:59', '2023-03-10 14:32:59'),
(7, 'Title', 'Category', '1678433616.JPG', '2023-03-10 14:33:37', '2023-03-10 14:33:37'),
(8, 'Title', 'Category', '1678433701.JPG', '2023-03-10 14:35:02', '2023-03-10 14:35:02'),
(9, 'Title', 'Category', '1678433729.JPG', '2023-03-10 14:35:30', '2023-03-10 14:35:30'),
(10, 'Title', 'Category', '1678433929.JPG', '2023-03-10 14:38:50', '2023-03-10 14:38:50'),
(11, 'Title', 'Category', '1678433970.JPG', '2023-03-10 14:39:31', '2023-03-10 14:39:31'),
(12, 'Title', 'Category', '1678433991.JPG', '2023-03-10 14:39:52', '2023-03-10 14:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `qpayments`
--

CREATE TABLE `qpayments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qpayment_id` varchar(191) NOT NULL,
  `pqblock_id` varchar(191) NOT NULL,
  `pqcustomer_id` varchar(191) NOT NULL,
  `paid` int(11) NOT NULL,
  `total` varchar(191) NOT NULL,
  `balance` varchar(191) NOT NULL,
  `lorry` varchar(191) NOT NULL,
  `permit` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quarries`
--

CREATE TABLE `quarries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quarry_id` varchar(191) NOT NULL,
  `start` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `material` varchar(191) NOT NULL,
  `address` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `year` mediumtext DEFAULT NULL,
  `remark` varchar(191) DEFAULT NULL,
  `gst` varchar(191) DEFAULT NULL,
  `credit` varchar(191) DEFAULT NULL,
  `debit` varchar(191) NOT NULL,
  `avatar` mediumtext NOT NULL,
  `avatar2` mediumtext NOT NULL,
  `avatar3` mediumtext NOT NULL,
  `avatar4` mediumtext NOT NULL,
  `avatar5` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quarries`
--

INSERT INTO `quarries` (`id`, `quarry_id`, `start`, `name`, `city_id`, `material`, `address`, `phone`, `email`, `year`, `remark`, `gst`, `credit`, `debit`, `avatar`, `avatar2`, `avatar3`, `avatar4`, `avatar5`, `created_at`, `updated_at`) VALUES
(8, 'OR00000', '10-09-2022', 'Quarry (Unit - I)', 3, 'quarries', 'address', '8876787889', 'alwin@gmail.com', '2020', 'quarries', '1234567899', '0', '0', '16940661891.jpg', '16940661892.jpg', '169406618928.jpg', '169406618980.jpg', '169406624952.jpg', '2023-09-07 00:26:30', '2023-09-07 00:27:56'),
(9, 'OR00000', '10-09-2022', 'Quarry (Unit - II)', 1, 'clothes', '77/7  anna nagar', '08825821243', 'jaseersait360@gmail.com', '2018', 'helo', '1234567890', '0', '0', '16940716801.jpg', '16940716802.jpg', '169407168028.jpg', '169407168080.jpg', '169407168052.jpg', '2023-09-07 01:58:00', '2023-09-07 01:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `q_cuttings`
--

CREATE TABLE `q_cuttings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qblock_id` varchar(191) NOT NULL,
  `length` varchar(191) NOT NULL,
  `breadth` varchar(191) NOT NULL,
  `height` varchar(191) NOT NULL,
  `price` varchar(191) DEFAULT NULL,
  `quarry_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `color` varchar(191) DEFAULT NULL,
  `cbm` varchar(191) DEFAULT NULL,
  `remark` varchar(191) DEFAULT NULL,
  `avatar` varchar(191) DEFAULT NULL,
  `blockmarking` varchar(191) DEFAULT NULL,
  `bm_date` varchar(191) DEFAULT NULL,
  `marker` varchar(191) DEFAULT NULL,
  `bm_length` varchar(191) DEFAULT NULL,
  `bm_breadth` varchar(191) DEFAULT NULL,
  `bm_height` varchar(191) DEFAULT NULL,
  `bm_cbm` varchar(191) DEFAULT NULL,
  `bm_remark` varchar(191) DEFAULT NULL,
  `bm_avatar` varchar(191) DEFAULT NULL,
  `blockdressing` varchar(191) DEFAULT NULL,
  `bd_date` varchar(191) DEFAULT NULL,
  `bd_length` varchar(191) DEFAULT NULL,
  `bd_breadth` varchar(191) DEFAULT NULL,
  `bd_height` varchar(191) DEFAULT NULL,
  `bd_cbm` varchar(191) DEFAULT NULL,
  `bd_remark` varchar(191) DEFAULT NULL,
  `bd_avatar` varchar(191) DEFAULT NULL,
  `in_date` varchar(191) DEFAULT NULL,
  `invoice` varchar(191) DEFAULT NULL,
  `document` varchar(191) DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `weight` varchar(191) DEFAULT NULL,
  `lorry` varchar(191) DEFAULT NULL,
  `permit` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roughblocks`
--

CREATE TABLE `roughblocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `block_id` varchar(191) NOT NULL,
  `length` varchar(191) NOT NULL,
  `breadth` varchar(191) NOT NULL,
  `height` varchar(191) NOT NULL,
  `price` varchar(191) DEFAULT NULL,
  `supplier` varchar(191) DEFAULT NULL,
  `supplier_id` varchar(191) DEFAULT NULL,
  `color` varchar(191) DEFAULT NULL,
  `marker` varchar(191) DEFAULT NULL,
  `cbm` varchar(191) DEFAULT NULL,
  `remark` varchar(191) DEFAULT NULL,
  `qsgst` varchar(191) DEFAULT NULL,
  `avatar` varchar(191) DEFAULT NULL,
  `blockdressing` varchar(191) DEFAULT NULL,
  `bd_length` varchar(191) DEFAULT NULL,
  `bd_breadth` varchar(191) DEFAULT NULL,
  `bd_height` varchar(191) DEFAULT NULL,
  `bd_cbm` varchar(191) DEFAULT NULL,
  `bd_remark` varchar(191) DEFAULT NULL,
  `bd_avatar` varchar(191) DEFAULT NULL,
  `blockcutting` varchar(191) DEFAULT NULL,
  `bc_length` varchar(191) DEFAULT NULL,
  `bc_breadth` varchar(191) DEFAULT NULL,
  `bc_machine` varchar(191) DEFAULT NULL,
  `bc_slabscount` varchar(191) DEFAULT NULL,
  `bc_sqft` varchar(191) DEFAULT NULL,
  `bc_remark` varchar(191) DEFAULT NULL,
  `bc_avatar` varchar(191) DEFAULT NULL,
  `grinding` varchar(191) DEFAULT NULL,
  `epoxy` varchar(191) DEFAULT NULL,
  `polish` varchar(191) DEFAULT NULL,
  `bp_gremark` varchar(191) DEFAULT NULL,
  `bp_eremark` varchar(191) DEFAULT NULL,
  `bp_premark` varchar(191) DEFAULT NULL,
  `bp_avatar` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roughblocks`
--

INSERT INTO `roughblocks` (`id`, `block_id`, `length`, `breadth`, `height`, `price`, `supplier`, `supplier_id`, `color`, `marker`, `cbm`, `remark`, `qsgst`, `avatar`, `blockdressing`, `bd_length`, `bd_breadth`, `bd_height`, `bd_cbm`, `bd_remark`, `bd_avatar`, `blockcutting`, `bc_length`, `bc_breadth`, `bc_machine`, `bc_slabscount`, `bc_sqft`, `bc_remark`, `bc_avatar`, `grinding`, `epoxy`, `polish`, `bp_gremark`, `bp_eremark`, `bp_premark`, `bp_avatar`, `created_at`, `updated_at`) VALUES
(1, 'RB000001', '5', '5', '5', '5', 'Supplier1', NULL, '5', '5', NULL, NULL, NULL, '1648558391.png', '1', '500', '800', '9650', '85220', 'description', '1654156204.jpg', '1', '50', '60', 'machine 1', '500', '500', 'Description', NULL, '1', '1', '1', 'Grinding Description', 'desc', 'Polish Description', '1654156306.jpg', '2022-03-29 07:23:11', '2022-06-02 14:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `sitesetting`
--

CREATE TABLE `sitesetting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone_one` varchar(191) DEFAULT NULL,
  `phone_two` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `site_name` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `facebook` varchar(191) DEFAULT NULL,
  `youtube` varchar(191) DEFAULT NULL,
  `instagram` varchar(191) DEFAULT NULL,
  `twitter` varchar(191) DEFAULT NULL,
  `pincode` varchar(191) DEFAULT NULL,
  `landmark` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `description` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitesetting`
--

INSERT INTO `sitesetting` (`id`, `phone_one`, `phone_two`, `email`, `site_name`, `address`, `facebook`, `youtube`, `instagram`, `twitter`, `pincode`, `landmark`, `city`, `description`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'sasikumar.zigainfotech@gmail.com', 'Kalpa Granites Pvt Ltd', '#1223-1224, Sappadi Village Road, Hosur-Krishnagiri.', 'facebook', 'youtube', 'landmark', 'twitter', '635109', 'landmark', 'city', 'Established in the year 2009, Sun Granites India Pvt.Ltd. has emerged as one of the top tile companies in India. Sun Granite leadership is marked by many successful challenges in its incessan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stockdtls`
--

CREATE TABLE `stockdtls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stockdtl_id` bigint(20) UNSIGNED DEFAULT NULL,
  `stcredit` varchar(191) DEFAULT NULL,
  `stdebit` varchar(191) DEFAULT NULL,
  `stqty` varchar(191) DEFAULT NULL,
  `stprice` varchar(191) DEFAULT NULL,
  `ststatus` int(11) DEFAULT NULL,
  `stavatar` varchar(191) DEFAULT NULL,
  `stremark` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stockdtls`
--

INSERT INTO `stockdtls` (`id`, `stockdtl_id`, `stcredit`, `stdebit`, `stqty`, `stprice`, `ststatus`, `stavatar`, `stremark`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, NULL, '1', '1', NULL, '1649226312.png', NULL, '2022-04-06 00:55:12', '2022-04-06 00:55:12'),
(2, 3, NULL, NULL, '1', NULL, 1, NULL, NULL, '2022-04-06 02:20:56', '2022-04-06 02:20:56'),
(3, 3, NULL, NULL, '20', NULL, 1, NULL, NULL, '2022-04-06 02:23:34', '2022-04-06 02:23:34'),
(4, 3, NULL, NULL, '2', '1', 1, NULL, NULL, '2022-04-06 02:24:39', '2022-04-06 02:24:39'),
(5, 2, NULL, NULL, '20', '2', 1, NULL, NULL, '2022-04-06 02:25:15', '2022-04-06 02:25:15'),
(6, 2, NULL, NULL, '2', '2', 1, NULL, '2', '2022-04-06 02:26:00', '2022-04-06 02:26:00'),
(7, 4, NULL, NULL, '2', '200', NULL, '1649232029.png', 'remark', '2022-04-06 02:30:29', '2022-04-06 02:30:29'),
(8, 4, NULL, NULL, '2', '256', 1, NULL, 'ders', '2022-04-06 02:30:52', '2022-04-06 02:30:52'),
(9, 4, NULL, '256', '2', '256', 1, NULL, '2', '2022-04-06 02:33:31', '2022-04-06 02:33:31'),
(10, 4, '500', NULL, '2', '500', NULL, '1649232252.png', 'remar', '2022-04-06 02:34:12', '2022-04-06 02:34:12'),
(11, 4, NULL, '256', '2', '256', 1, NULL, '200', '2022-04-06 16:36:31', '2022-04-06 16:36:31'),
(12, 4, '2', NULL, '2', '2', NULL, '1649282816.png', 'remart', '2022-04-06 16:36:56', '2022-04-06 16:36:56'),
(13, 4, NULL, '256', '1', '256', 1, NULL, NULL, '2022-05-21 02:14:19', '2022-05-21 02:14:19'),
(14, 3, NULL, '1', '50', '1', 1, NULL, 'pic', '2022-05-24 15:07:59', '2022-05-24 15:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stock_id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `price` varchar(191) DEFAULT NULL,
  `quantity` varchar(191) DEFAULT NULL,
  `remark` varchar(191) DEFAULT NULL,
  `category` varchar(191) DEFAULT NULL,
  `avatar` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `stock_id`, `name`, `description`, `price`, `quantity`, `remark`, `category`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'ST000001', 'stock1', 'des', '500', '50', 'rem', 'consumable', '1648573078.png', '2022-03-29 11:27:58', '2022-03-29 11:27:58'),
(2, 'ST000002', '2', '2', '2', '2', '2', 'nonconsumable', '1649216847.jpg', '2022-04-05 22:17:28', '2022-04-05 22:17:28'),
(3, 'ST000003', '1', '1', '1', '11', '1', 'consumable', '1649225866.jpg', '2022-04-06 00:47:46', '2022-04-06 00:47:46'),
(4, 'ST000004', 'product', 'descc', '256', '1', 'remark', 'consumable', '1649231998.jpg', '2022-04-06 02:29:59', '2022-04-06 02:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attadence`
--
ALTER TABLE `attadence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_block_entries`
--
ALTER TABLE `m_block_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_dailyreport`
--
ALTER TABLE `m_dailyreport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_dispatch`
--
ALTER TABLE `m_dispatch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_epoxy`
--
ALTER TABLE `m_epoxy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_finished`
--
ALTER TABLE `m_finished`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_polishing`
--
ALTER TABLE `m_polishing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_production`
--
ALTER TABLE `m_production`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_city_id_foreign` (`city_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qpayments`
--
ALTER TABLE `qpayments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quarries`
--
ALTER TABLE `quarries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quarries_city_id_foreign` (`city_id`);

--
-- Indexes for table `q_cuttings`
--
ALTER TABLE `q_cuttings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `q_cuttings_quarry_id_foreign` (`quarry_id`),
  ADD KEY `q_cuttings_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `roughblocks`
--
ALTER TABLE `roughblocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesetting`
--
ALTER TABLE `sitesetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockdtls`
--
ALTER TABLE `stockdtls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stockdtls_stockdtl_id_foreign` (`stockdtl_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attadence`
--
ALTER TABLE `attadence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `m_block_entries`
--
ALTER TABLE `m_block_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `m_dailyreport`
--
ALTER TABLE `m_dailyreport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_dispatch`
--
ALTER TABLE `m_dispatch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_epoxy`
--
ALTER TABLE `m_epoxy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `m_finished`
--
ALTER TABLE `m_finished`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_polishing`
--
ALTER TABLE `m_polishing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `m_production`
--
ALTER TABLE `m_production`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `qpayments`
--
ALTER TABLE `qpayments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quarries`
--
ALTER TABLE `quarries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `q_cuttings`
--
ALTER TABLE `q_cuttings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roughblocks`
--
ALTER TABLE `roughblocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sitesetting`
--
ALTER TABLE `sitesetting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stockdtls`
--
ALTER TABLE `stockdtls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quarries`
--
ALTER TABLE `quarries`
  ADD CONSTRAINT `quarries_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `q_cuttings`
--
ALTER TABLE `q_cuttings`
  ADD CONSTRAINT `q_cuttings_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `q_cuttings_quarry_id_foreign` FOREIGN KEY (`quarry_id`) REFERENCES `quarries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stockdtls`
--
ALTER TABLE `stockdtls`
  ADD CONSTRAINT `stockdtls_stockdtl_id_foreign` FOREIGN KEY (`stockdtl_id`) REFERENCES `stocks` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
