-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 11:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_employee_salaries`
--

CREATE TABLE `account_employee_salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id = user_id',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_employee_salaries`
--

INSERT INTO `account_employee_salaries` (`id`, `employee_id`, `date`, `amount`, `created_at`, `updated_at`) VALUES
(2, 17, '2023-02', 55000, '2023-02-19 22:40:20', '2023-02-19 22:40:20'),
(4, 18, '2023-01', 10000, '2023-02-19 23:01:58', '2023-02-19 23:01:58'),
(5, 19, '2023-01', 15000, '2023-02-19 23:01:58', '2023-02-19 23:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `account_other_costs`
--

CREATE TABLE `account_other_costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_other_costs`
--

INSERT INTO `account_other_costs` (`id`, `date`, `amount`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, '2023-02-21', 300, 'Cat food', '202302200708Eagle Pack Natural Dry Dog Food.png', '2023-02-20 01:08:52', '2023-02-20 03:03:21'),
(2, '2023-02-20', 300, 'Dog food', '202302200709images (7).jpg', '2023-02-20 01:09:44', '2023-02-20 03:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `account_student_fees`
--

CREATE TABLE `account_student_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `fee_category_id` int(11) DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'father name',
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'mother name',
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `address`, `gender`, `image`, `fname`, `mname`, `religion`, `id_no`, `code`, `join_date`, `designation_id`, `salary`, `status`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'eurosia', 'mubineurosia@gmail.com', NULL, 'dc647eb65e6711e155375218212b3964', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `assign_students`
--

CREATE TABLE `assign_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL COMMENT 'user_id=student_id',
  `roll` int(11) DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `shift_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_students`
--

INSERT INTO `assign_students` (`id`, `student_id`, `roll`, `class_id`, `year_id`, `group_id`, `shift_id`, `created_at`, `updated_at`) VALUES
(1, 6, 47, 6, 1, 1, 3, '2023-02-07 04:39:37', '2023-02-11 06:30:21'),
(3, 6, 126, 10, 5, 1, 2, '2023-02-07 06:09:20', '2023-02-07 06:09:20'),
(4, 5, 444, 8, 1, 1, 2, '2023-02-08 01:27:44', '2023-02-10 22:11:47'),
(6, 8, 9956, 10, 5, 2, 2, '2023-02-08 22:48:57', '2023-02-08 22:48:57'),
(8, 6, 1474, 7, 5, 1, 3, '2023-02-08 23:48:53', '2023-02-09 05:34:48'),
(9, 3, 154102, 10, 1, 1, 3, '2023-02-08 23:49:28', '2023-02-08 23:49:28'),
(10, 3, 544, 6, 5, 1, 3, '2023-02-08 23:50:11', '2023-02-08 23:50:11'),
(11, 9, 741, 9, 5, 1, 2, '2023-02-09 02:47:08', '2023-02-09 05:34:15'),
(12, 10, 424, 8, 5, 2, 3, '2023-02-11 01:22:18', '2023-02-11 01:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `assign_subjects`
--

CREATE TABLE `assign_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `full_mark` double NOT NULL,
  `pass_mark` double NOT NULL,
  `subjective_mark` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_subjects`
--

INSERT INTO `assign_subjects` (`id`, `class_id`, `subject_id`, `full_mark`, `pass_mark`, `subjective_mark`, `created_at`, `updated_at`) VALUES
(17, 5, 4, 100, 33, 88, '2023-07-16 06:17:13', '2023-07-16 06:17:13'),
(18, 8, 4, 100, 33, 88, '2023-07-16 06:17:25', '2023-07-16 06:17:25'),
(19, 8, 5, 100, 33, 88, '2023-07-16 06:17:25', '2023-07-16 06:17:25'),
(20, 8, 6, 100, 33, 8, '2023-07-16 06:17:25', '2023-07-16 06:17:25'),
(21, 8, 7, 100, 33, 88, '2023-07-16 06:17:25', '2023-07-16 06:17:25'),
(22, 6, 4, 100, 50, 40, '2023-07-16 06:19:00', '2023-07-16 06:19:00'),
(23, 6, 5, 100, 50, 33, '2023-07-16 06:19:00', '2023-07-16 06:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `class_routines`
--

CREATE TABLE `class_routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_time_tables`
--

CREATE TABLE `class_time_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Head Teacher', '2023-02-05 01:10:44', '2023-02-12 03:31:11'),
(5, 'Assistant Teacher', '2023-02-12 03:31:23', '2023-02-12 03:31:23'),
(6, 'Principal', '2023-02-12 03:31:34', '2023-02-12 03:31:34'),
(7, 'Vice Principal', '2023-02-12 03:31:49', '2023-02-12 03:31:49'),
(8, 'Department Head', '2023-02-12 03:32:04', '2023-02-12 03:32:04'),
(9, 'Curriculum Coordinator', '2023-02-12 03:32:21', '2023-02-12 03:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `discount_students`
--

CREATE TABLE `discount_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assign_student_id` int(11) NOT NULL,
  `fee_category_id` int(11) DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount_students`
--

INSERT INTO `discount_students` (`id`, `assign_student_id`, `fee_category_id`, `discount`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 5, '2023-02-07 04:39:37', '2023-02-11 03:43:34'),
(2, 2, 1, 544, '2023-02-07 05:02:57', '2023-02-07 05:02:57'),
(3, 3, 1, 544, '2023-02-07 06:09:20', '2023-02-07 06:09:20'),
(5, 5, 1, 414, '2023-02-08 01:48:31', '2023-02-08 01:48:31'),
(6, 6, 1, 5, '2023-02-08 22:48:57', '2023-02-08 22:48:57'),
(7, 8, NULL, 10, '2023-02-08 23:48:53', '2023-02-08 23:48:53'),
(8, 9, NULL, 544, '2023-02-08 23:49:28', '2023-02-08 23:49:28'),
(9, 10, NULL, 544, '2023-02-08 23:50:11', '2023-02-08 23:50:11'),
(10, 11, 1, 41, '2023-02-09 02:47:08', '2023-02-09 02:47:08'),
(11, 12, 1, 5, '2023-02-11 01:22:18', '2023-02-11 01:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `employee_attendances`
--

CREATE TABLE `employee_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id=user_id',
  `date` date NOT NULL,
  `attend_sataus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_attendances`
--

INSERT INTO `employee_attendances` (`id`, `employee_id`, `date`, `attend_sataus`, `created_at`, `updated_at`) VALUES
(31, 15, '2023-02-24', 'Present', '2023-02-16 00:42:58', '2023-02-16 00:42:58'),
(32, 17, '2023-02-24', 'Leave', '2023-02-16 00:42:58', '2023-02-16 00:42:58'),
(33, 15, '2023-01-20', 'Present', '2023-02-19 22:48:16', '2023-02-19 22:48:16'),
(34, 17, '2023-01-20', 'Present', '2023-02-19 22:48:16', '2023-02-19 22:48:16'),
(35, 18, '2023-01-20', 'Present', '2023-02-19 22:48:16', '2023-02-19 22:48:16'),
(36, 19, '2023-01-20', 'Present', '2023-02-19 22:48:16', '2023-02-19 22:48:16'),
(37, 20, '2023-01-20', 'Present', '2023-02-19 22:48:16', '2023-02-19 22:48:16'),
(38, 15, '2022-12-22', 'Present', '2023-02-22 03:51:25', '2023-02-22 03:51:25'),
(39, 17, '2022-12-22', 'Present', '2023-02-22 03:51:25', '2023-02-22 03:51:25'),
(40, 18, '2022-12-22', 'Present', '2023-02-22 03:51:25', '2023-02-22 03:51:25'),
(41, 19, '2022-12-22', 'Present', '2023-02-22 03:51:25', '2023-02-22 03:51:25'),
(42, 20, '2022-12-22', 'Present', '2023-02-22 03:51:25', '2023-02-22 03:51:25'),
(43, 15, '2022-11-16', 'Absent', '2023-02-22 03:51:44', '2023-02-22 03:51:44'),
(44, 17, '2022-11-16', 'Absent', '2023-02-22 03:51:44', '2023-02-22 03:51:44'),
(45, 18, '2022-11-16', 'Absent', '2023-02-22 03:51:44', '2023-02-22 03:51:44'),
(46, 19, '2022-11-16', 'Absent', '2023-02-22 03:51:44', '2023-02-22 03:51:44'),
(47, 20, '2022-11-16', 'Absent', '2023-02-22 03:51:44', '2023-02-22 03:51:44');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leaves`
--

CREATE TABLE `employee_leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emplyee_id` int(11) NOT NULL COMMENT 'emplyee_id=user_id',
  `leave_purpose_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_leaves`
--

INSERT INTO `employee_leaves` (`id`, `emplyee_id`, `leave_purpose_id`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 15, 3, '2023-02-15', '2023-02-17', '2023-02-14 04:07:25', '2023-02-14 04:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `employee_sallary_logs`
--

CREATE TABLE `employee_sallary_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id=User_id',
  `previous_sallary` int(11) NOT NULL,
  `increment_sallary` int(11) NOT NULL,
  `present_sallary` int(11) NOT NULL,
  `effected_sallary` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_sallary_logs`
--

INSERT INTO `employee_sallary_logs` (`id`, `employee_id`, `previous_sallary`, `increment_sallary`, `present_sallary`, `effected_sallary`, `created_at`, `updated_at`) VALUES
(1, 14, 20000, 0, 20000, '2023-02-05', '2023-02-13 00:46:27', '2023-02-13 00:46:27'),
(2, 15, 23000, 0, 23000, '2023-01-20', '2023-02-13 01:13:10', '2023-02-13 01:13:10'),
(3, 16, 23000, 0, 23000, '2022-10-20', '2023-02-13 04:47:56', '2023-02-13 04:47:56'),
(4, 17, 54444, 0, 54444, '2023-02-12', '2023-02-13 05:15:40', '2023-02-13 05:15:40'),
(5, 15, 25000, 2000, 27000, '2023-03-01', '2023-02-13 23:21:09', '2023-02-13 23:21:09'),
(6, 17, 54444, 556, 55000, '2023-04-21', '2023-02-13 23:28:26', '2023-02-13 23:28:26'),
(7, 18, 10000, 0, 10000, '2023-02-01', '2023-02-16 00:41:24', '2023-02-16 00:41:24'),
(8, 19, 15000, 0, 15000, '2022-09-20', '2023-02-19 22:45:16', '2023-02-19 22:45:16'),
(9, 20, 10000, 0, 10000, '2023-01-20', '2023-02-19 22:47:26', '2023-02-19 22:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `exam_types`
--

CREATE TABLE `exam_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_types`
--

INSERT INTO `exam_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Final Exam', '2023-02-12 00:27:29', '2023-02-12 00:27:29'),
(5, 'Midterm Exam', '2023-02-12 00:27:45', '2023-02-12 00:27:45'),
(6, 'Pop Quiz', '2023-02-12 00:28:06', '2023-02-12 00:28:06'),
(7, 'Unit Test', '2023-02-12 00:28:24', '2023-02-12 00:28:24'),
(8, 'Comprehensive Exam', '2023-02-12 00:28:41', '2023-02-12 00:28:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_categories`
--

CREATE TABLE `fee_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_categories`
--

INSERT INTO `fee_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Registration Fee', '2023-02-01 23:28:28', '2023-02-01 23:28:28'),
(5, 'Monthly Fee', '2023-02-01 23:28:53', '2023-02-01 23:28:53'),
(6, 'Exam Fee', '2023-02-01 23:29:08', '2023-02-01 23:29:08');

-- --------------------------------------------------------

--
-- Table structure for table `fee_category_amounts`
--

CREATE TABLE `fee_category_amounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fee_category_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_category_amounts`
--

INSERT INTO `fee_category_amounts` (`id`, `fee_category_id`, `class_id`, `amount`, `created_at`, `updated_at`) VALUES
(8, 4, 5, 3000, '2023-02-02 04:24:10', '2023-02-02 04:24:10'),
(9, 4, 5, 3000, '2023-02-02 04:24:10', '2023-02-02 04:24:10'),
(10, 4, 6, 4000, '2023-02-02 04:24:10', '2023-02-02 04:24:10'),
(11, 4, 6, 400, '2023-02-02 04:24:10', '2023-02-02 04:24:10'),
(12, 4, 7, 500, '2023-02-02 04:24:10', '2023-02-02 04:24:10'),
(13, 4, 7, 500, '2023-02-02 04:24:10', '2023-02-02 04:24:10'),
(14, 5, 6, 3000, '2023-02-02 05:27:17', '2023-02-02 05:27:17'),
(15, 6, 7, 3000, '2023-02-02 05:27:47', '2023-02-02 05:27:47'),
(16, 6, 6, 3000, '2023-02-02 05:27:47', '2023-02-02 05:27:47'),
(17, 6, 5, 200, '2023-02-02 05:27:47', '2023-02-02 05:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `home_features`
--

CREATE TABLE `home_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `features_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features_btn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_features`
--

INSERT INTO `home_features` (`id`, `features_title`, `features_icon`, `features_details`, `features_btn`, `created_at`, `updated_at`) VALUES
(1, 'Features Title', 'Features Icon', 'Features Details', 'Features Button', '2023-10-15 04:03:30', '2023-10-15 04:03:30'),
(2, 'Features Title', 'Features Icon', 'Features Details', 'Features Button', '2023-10-16 00:32:13', '2023-10-16 00:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `sub_title`, `title`, `button_text`, `created_at`, `updated_at`) VALUES
(1, 'Sub Title', 'Title', 'Button Text', '2023-10-15 04:13:40', '2023-10-15 04:13:40');

-- --------------------------------------------------------

--
-- Table structure for table `leave_purposes`
--

CREATE TABLE `leave_purposes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_purposes`
--

INSERT INTO `leave_purposes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Family Purpose  ', NULL, NULL),
(2, 'Personal Problems   ', NULL, NULL),
(3, 'sick', '2023-02-14 03:59:59', '2023-02-14 03:59:59'),
(5, 'pet batha', '2023-02-14 04:03:25', '2023-02-14 04:03:25'),
(7, 'friend sick', '2023-02-14 04:07:25', '2023-02-14 04:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `marks_grades`
--

CREATE TABLE `marks_grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grade_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marks_grades`
--

INSERT INTO `marks_grades` (`id`, `grade_name`, `grade_point`, `start_marks`, `end_marks`, `start_point`, `end_point`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'A+', '5', '80', '100', '5', '5', 'Excellent', '2023-02-17 23:26:44', '2023-02-22 00:23:36'),
(2, 'A', '4', '70', '79', '4', '4.99', 'Very Good', '2023-02-18 00:05:20', '2023-02-22 00:36:44'),
(4, 'A-', '3.5', '60', '69', '3.5', '3.99', 'Good', '2023-02-18 00:07:23', '2023-02-22 00:40:03'),
(5, 'B', '3', '50', '59', '3', '3.49', 'Average', '2023-02-22 00:42:40', '2023-02-22 00:42:40'),
(6, 'C', '2', '40', '49', '2', '2.99', 'Disappoint', '2023-02-22 00:44:06', '2023-02-22 00:44:06'),
(7, 'D', '1', '33', '39', '1', '1.99', 'Bad', '2023-02-22 00:45:11', '2023-02-22 00:45:11'),
(8, 'F', '0', '32', '0', '0', '0.99', 'Fall', '2023-02-22 00:46:27', '2023-02-22 00:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_01_29_074446_create_sessions_table', 1),
(8, '2023_02_01_043335_create_student_classes_table', 3),
(9, '2023_02_01_063753_create_student_years_table', 4),
(10, '2023_02_01_081020_create_student_groups_table', 5),
(11, '2023_02_01_100334_create_student_shifts_table', 6),
(12, '2023_02_01_110602_create_fee_categories_table', 7),
(13, '2023_02_02_044242_create_fee_category_amounts_table', 8),
(14, '2023_02_02_113945_create_exam_types_table', 9),
(15, '2023_02_04_052108_create_school_subjects_table', 10),
(16, '2023_02_04_055656_create_assign_subjects_table', 11),
(17, '2023_02_05_054940_create_designations_table', 12),
(18, '2014_10_12_000000_create_users_table', 13),
(19, '2023_02_05_095725_create_assign_students_table', 14),
(20, '2023_02_05_100624_create_discount_students_table', 14),
(21, '2023_02_12_093516_create_employee_sallary_logs_table', 15),
(22, '2023_02_14_062017_create_leave_purposes_table', 16),
(23, '2023_02_14_062400_create_employee_leaves_table', 16),
(24, '2023_02_14_113046_create_employee_attendances_table', 17),
(25, '2023_02_16_054317_create_student_marks_table', 18),
(26, '2023_02_16_113415_create_marks_grades_table', 19),
(27, '2023_02_18_062342_create_account_student_fees_table', 20),
(28, '2023_02_19_070303_create_account_employee_salaries_table', 21),
(29, '2023_02_20_054056_create_account_other_costs_table', 22),
(31, '2023_02_26_061407_create_admins_table', 23),
(32, '2023_03_04_075033_create_class_routines_table', 24),
(34, '2023_06_26_101922_create_class_time_tables_table', 25),
(35, '2023_10_03_112033_create_home_pages_table', 26),
(36, '2023_10_04_092600_create_home_pages_table', 27),
(37, '2023_10_14_105407_create_home_features_table', 28);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('azizeurosia@gmail.com', '$2y$10$ry0vW3TRVCNTsamcTLW9leOzxb7Z9sQ8mbLiQ953YQnI778kUzVam', '2023-03-04 00:10:15'),
('mubineurosia@gmail.com', '$2y$10$.wl3xpIErUdK.4URYh/7nupncjbybVvKh15rCxXkAz9/Tsfi9RhZK', '2023-02-28 03:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_subjects`
--

CREATE TABLE `school_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_subjects`
--

INSERT INTO `school_subjects` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'CSE', '2023-02-03 23:45:40', '2023-06-19 02:07:25'),
(3, 'BBA', '2023-02-03 23:45:49', '2023-02-03 23:45:49'),
(4, 'Mathematics', '2023-02-04 01:26:40', '2023-02-04 01:26:40'),
(5, 'English', '2023-02-04 01:26:48', '2023-02-04 01:26:48'),
(6, 'Science', '2023-02-04 01:26:56', '2023-02-04 01:26:56'),
(7, 'History', '2023-02-04 01:27:04', '2023-02-04 01:27:04'),
(8, 'Geography', '2023-02-04 01:27:12', '2023-02-04 01:27:12'),
(9, 'Physics', '2023-02-04 01:27:19', '2023-02-04 01:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('NNC5igtFBwAu2hYSco9q86Pqako1VDY6FrjgHZFV', 22, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSWFFM2lFSjVpM0NUeElIQ2tueFBxcGNtMUFacmhKR0pKUmtRUmVzVSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyMjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCROdTBvenc1d2pObWlFdXA3cjFzS1RPOTNSNi8ybFNWeXBPSjlPYlFWZjVpbUR0ak9ubFA5NiI7fQ==', 1697439011);

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE `student_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(5, 'Class One', '2023-02-02 01:19:02', '2023-02-02 01:19:02'),
(6, 'Class Two', '2023-02-02 01:19:24', '2023-02-02 01:19:24'),
(7, 'Class Three', '2023-02-02 01:19:36', '2023-02-04 01:25:15'),
(8, 'Class Four', '2023-02-04 01:25:30', '2023-02-04 01:25:30'),
(9, 'Class Five', '2023-02-04 01:25:43', '2023-02-04 01:25:43'),
(10, 'Class Six', '2023-02-04 01:25:57', '2023-02-04 01:25:57'),
(12, 'class seven', '2023-02-18 04:45:15', '2023-02-23 03:08:49'),
(13, 'Class 8', '2023-02-25 00:31:19', '2023-02-25 00:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `student_groups`
--

CREATE TABLE `student_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_groups`
--

INSERT INTO `student_groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'A Group', '2023-02-01 03:22:17', '2023-02-01 03:22:17'),
(2, 'Group', '2023-02-01 03:35:33', '2023-02-01 04:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL COMMENT 'student_id=user_id',
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `assign_subject_id` int(11) DEFAULT NULL,
  `exam_type_id` int(255) DEFAULT NULL,
  `marks` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`id`, `student_id`, `id_no`, `year_id`, `class_id`, `assign_subject_id`, `exam_type_id`, `marks`, `created_at`, `updated_at`) VALUES
(5, 10, '20250010', 5, 8, 14, 2, 60, '2023-02-16 04:51:16', '2023-02-16 04:51:16'),
(6, 10, '20250010', 5, 8, 14, 2, 50, '2023-02-16 04:51:16', '2023-02-16 04:51:16'),
(7, 10, '20250010', 5, 8, 14, 4, 50, '2023-02-22 03:23:02', '2023-02-22 03:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `student_shifts`
--

CREATE TABLE `student_shifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_shifts`
--

INSERT INTO `student_shifts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'A', '2023-02-01 04:56:29', '2023-02-01 04:56:29'),
(5, 'B', '2023-07-16 06:13:51', '2023-07-16 06:14:49'),
(6, 'C', '2023-07-16 06:14:58', '2023-07-16 06:14:58'),
(7, 'D', '2023-07-16 06:15:09', '2023-07-16 06:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `student_years`
--

CREATE TABLE `student_years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_years`
--

INSERT INTO `student_years` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '2020', '2023-02-01 01:06:15', '2023-02-01 01:06:15'),
(2, '2015', '2023-02-01 01:08:35', '2023-02-01 01:28:24'),
(5, '2025', '2023-02-01 01:39:50', '2023-02-01 01:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Student,Employee,Admin',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'father name',
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'mother name',
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL COMMENT 'date of birth',
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'admin=head of software,operator, computer operator, user=employee',
  `join_date` date DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `address`, `gender`, `image`, `fname`, `mname`, `religion`, `id_no`, `dob`, `code`, `role`, `join_date`, `designation_id`, `salary`, `status`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', NULL, '$2y$10$BW/GLmh2kz4b83s8V6dR3e8oi6ao/ixcF6D7/SgJBitqbF/iFSy.a', '017425141210', 'dhaka Bangladesh', 'Male', '202309241129Picture2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'Admin', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2023-09-24 05:29:33'),
(2, 'Admin', 'jon', 'jon@gmail.com', NULL, '$2y$10$IVTzUNK5ENXw5pTYWnbBnOspmk.ixMkkaCnsHRRJNoCmR7NKJaequ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2701', 'Admin', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2023-02-07 03:31:50', '2023-02-07 03:31:50'),
(3, 'Student', 'jon', NULL, NULL, '$2y$10$8uZiqXi.Kf6qVYayoCfDnuj0PcPD9dcIy5EuT4zpEDDFzkgxa3pXi', '017425141210', 'dhaka Bangladesh', 'Male', '202302071039Eurosia.png', 'Eurosi', 'mia', 'Islam', '20200001', '2022-02-22', '2965', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2023-02-07 04:39:37', '2023-02-07 04:39:37'),
(6, 'Student', 'Sarah Johnson', NULL, NULL, '$2y$10$Hjf.Gsn809SRr0thCsMkIegqpoEZT3yFEXdgobm7ivXtpZ9SC57OK', '017425141210', '123 Main Street, New York, NY 10001', 'Male', '202302080727Eurosia.png', 'Susan Johnson', 'Michael Johnson', 'Islam', '20200005', '2022-02-02', '6273', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2023-02-08 01:27:44', '2023-02-08 01:27:44'),
(7, 'Student', 'Sarah Johnson', NULL, NULL, '$2y$10$oa/0a2TqjtPMxAjY/R/NqOYK8AWwe9YRBrFCTqJob3aurk/gGVn1q', '(555) 555-5555', '123 Main St, Anytown USA 12345', 'Male', '202302080748Eurosia.png', 'Maria Johnson', 'David Johnson', 'Islam', '20250007', '2025-02-04', '2698', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2023-02-08 01:48:31', '2023-02-08 01:48:31'),
(8, 'Student', 'Artemus', NULL, NULL, '$2y$10$5ZHPtBpK/YMuzEaxfrX8eOfjeOd7Lr9IsZVXhamC48gLsX6oQU5p6', '017425141210', 'Suite 26', 'Male', '202302090448ef6110d9b81484672c56c8ca9813d4fb--pomeranians-chihuahuas.jpg', 'Stévina', 'Stéphanie', 'Islam', '20250008', '2022-05-05', '46', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2023-02-08 22:48:57', '2023-02-08 22:48:57'),
(9, 'Student', 'Levon', NULL, NULL, '$2y$10$JX8y/MWQJqihkKp9qUaTb.HU95YmM6DUYJ5UqBO5yU.3yDtzL/fc.', '017425141210', 'PO Box 23054', 'Male', '202302090847shirt pant.jpg', 'Geneviève', 'Ruì', 'Hinduism', '20250009', '2022-02-22', '1735', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2023-02-09 02:47:08', '2023-02-09 02:47:08'),
(10, 'Student', 'John Smith', NULL, NULL, '$2y$10$dfo.3QYd8MyNAxJ5B7YR0.ESd841mu.HN3KeEymO3DyVxIvavFi12', '555-1234', '123 Main Street', 'Male', '202302110722images (4).png', 'William Smith', 'Elizabeth Smith', 'Islam', '20250010', '2023-02-22', '8564', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2023-02-11 01:22:18', '2023-02-11 01:22:18'),
(15, 'employee', 'Susan Johnson', NULL, NULL, '$2y$10$96S0CS//qSTF8Uie.lbhdOWsvVIxCFLDf5WKi77GRAwWuoBi8Cxe6', '555-1234', '123 Main Street, New York, NY 10001', 'Female', '202302130713images (2).jpg', 'John Johnson', 'Susan Brown', 'Hinduism', '2023010015', NULL, '6635', NULL, '2023-01-20', 5, 27000, 1, NULL, NULL, NULL, '2023-02-13 01:13:10', '2023-02-13 23:21:09'),
(17, 'employee', 'David Brown', NULL, NULL, '$2y$10$OhkEUAT0Yr8IdmUHliy5z.gONIcuLPpcerutpEINDqmBvJFyNrHiK', '0144-123-4567', '123 Main St, Anytown USA 12345', 'Male', '202302131115shirt pant.jpg', 'Susan Johnson', 'Susan Johnson', 'Hinduism', '2023020016', '2022-02-22', '9023', NULL, '2023-02-12', 6, 55000, 1, NULL, NULL, NULL, '2023-02-13 05:15:40', '2023-02-13 23:28:26'),
(18, 'employee', 'Hassan', NULL, NULL, '$2y$10$V3n.TPeSMLjhsfsXXgYGKu6OC.SQB/8.pDpR2wLzMB29efZ3WyWQ2', '0144-123-4567', 'dhaka Bangladesh', 'Male', '202302160641shirt pant.jpg', 'Hassan Eurosia', 'Mother', 'Islam', '2023020018', '2003-01-16', '8005', NULL, '2023-02-01', 4, 10000, 1, NULL, NULL, NULL, '2023-02-16 00:41:24', '2023-02-16 00:41:24'),
(19, 'employee', 'Hassen Eurosia', NULL, NULL, '$2y$10$yM0UBsSdbuTdO2X99my4JuAwcgbDpqJcIe/KGHK81Sj4tNQXQriUy', '017425141210', 'dhaka Bangladesh', 'Male', '2023022004452cecf9b1-4d2a-4e2c-b018-e2af3b7c46d0.jpg', 'i don\'t know', 'i don\'t know', 'Islam', '2022090019', '2023-02-21', '2315', NULL, '2022-09-20', 4, 15000, 1, NULL, NULL, NULL, '2023-02-19 22:45:16', '2023-02-19 22:45:16'),
(20, 'employee', 'Aber Eurosia', NULL, NULL, '$2y$10$FrCAdTRLL2f.FoFaQvV22ecPFthCLh8byaUsXuw6v6Krasv6AdoRi', '555-1234', 'dhaka Bangladesh', 'Male', '2023022004472cecf9b1-4d2a-4e2c-b018-e2af3b7c46d0.jpg', 'i don\'t know', 'i don\'t know', 'Islam', '2023010020', '1997-06-20', '3653', NULL, '2023-01-20', 4, 10000, 1, NULL, NULL, NULL, '2023-02-19 22:47:26', '2023-02-19 22:47:26'),
(21, 'Admin', 'Mubin', 'mubineurosia@gmail.com', NULL, '$2y$10$L9XkxXTNj20P/20ka7P3feMKn5U.PhxtbWY800KdWw2WMLUFilg86', '017425141210', 'dhaka Bangladesh', 'Male', '2023022810592cecf9b1-4d2a-4e2c-b018-e2af3b7c46d0-removebg-preview.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2023-02-28 04:58:04', '2023-02-28 04:59:09'),
(22, NULL, 'Admin', 'azizeurosia@gmail.com', NULL, '$2y$10$Nu0ozw5wjNmiEup7r1sKTO93R6/2lSVypOJ9ObQVf5imDtjOnlP96', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2023-02-28 05:00:51', '2023-02-28 05:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `week`
--

CREATE TABLE `week` (
  `id_no` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `week`
--

INSERT INTO `week` (`id_no`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sunday', '2023-06-19 07:48:59', '2023-06-19 07:48:59'),
(2, 'Monday', '2023-06-19 07:48:59', '2023-06-19 07:48:59'),
(3, 'Tuesday', '2023-06-19 07:48:59', '2023-06-19 07:48:59'),
(4, 'Wednesday', '2023-06-19 07:48:59', '2023-06-19 07:48:59'),
(5, 'Thursday', '2023-06-19 07:48:59', '2023-06-19 07:48:59'),
(6, 'Friday', '2023-06-19 07:48:59', '2023-06-19 07:48:59'),
(7, 'Saturday', '2023-06-19 07:48:59', '2023-06-19 07:48:59'),
(8, 'Sunday', '2023-06-19 07:48:59', '2023-06-19 07:48:59'),
(9, 'Monday', '2023-06-19 07:48:59', '2023-06-19 07:48:59'),
(10, 'Tuesday', '2023-06-19 07:48:59', '2023-06-19 07:48:59'),
(11, 'Wednesday', '2023-06-19 07:48:59', '2023-06-19 07:48:59'),
(12, 'Thursday', '2023-06-19 07:48:59', '2023-06-19 07:48:59'),
(13, 'Friday', '2023-06-19 07:48:59', '2023-06-19 07:48:59'),
(14, 'Saturday', '2023-06-19 07:48:59', '2023-06-19 07:48:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_employee_salaries`
--
ALTER TABLE `account_employee_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_other_costs`
--
ALTER TABLE `account_other_costs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_student_fees`
--
ALTER TABLE `account_student_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_students`
--
ALTER TABLE `assign_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_subjects`
--
ALTER TABLE `assign_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_routines`
--
ALTER TABLE `class_routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_time_tables`
--
ALTER TABLE `class_time_tables`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `class_time_tables_name_unique` (`name`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `designations_name_unique` (`name`);

--
-- Indexes for table `discount_students`
--
ALTER TABLE `discount_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_attendances`
--
ALTER TABLE `employee_attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_sallary_logs`
--
ALTER TABLE `employee_sallary_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_types`
--
ALTER TABLE `exam_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exam_types_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fee_categories`
--
ALTER TABLE `fee_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fee_categories_name_unique` (`name`);

--
-- Indexes for table `fee_category_amounts`
--
ALTER TABLE `fee_category_amounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_features`
--
ALTER TABLE `home_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_purposes`
--
ALTER TABLE `leave_purposes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `leave_purposes_name_unique` (`name`);

--
-- Indexes for table `marks_grades`
--
ALTER TABLE `marks_grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `school_subjects`
--
ALTER TABLE `school_subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `school_subjects_name_unique` (`name`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_classes_name_unique` (`name`);

--
-- Indexes for table `student_groups`
--
ALTER TABLE `student_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_groups_name_unique` (`name`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_shifts`
--
ALTER TABLE `student_shifts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_shifts_name_unique` (`name`);

--
-- Indexes for table `student_years`
--
ALTER TABLE `student_years`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_years_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `week`
--
ALTER TABLE `week`
  ADD PRIMARY KEY (`id_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_employee_salaries`
--
ALTER TABLE `account_employee_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `account_other_costs`
--
ALTER TABLE `account_other_costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `account_student_fees`
--
ALTER TABLE `account_student_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assign_students`
--
ALTER TABLE `assign_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `assign_subjects`
--
ALTER TABLE `assign_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `class_routines`
--
ALTER TABLE `class_routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_time_tables`
--
ALTER TABLE `class_time_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `discount_students`
--
ALTER TABLE `discount_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee_attendances`
--
ALTER TABLE `employee_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_sallary_logs`
--
ALTER TABLE `employee_sallary_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `exam_types`
--
ALTER TABLE `exam_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_categories`
--
ALTER TABLE `fee_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fee_category_amounts`
--
ALTER TABLE `fee_category_amounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `home_features`
--
ALTER TABLE `home_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leave_purposes`
--
ALTER TABLE `leave_purposes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `marks_grades`
--
ALTER TABLE `marks_grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_subjects`
--
ALTER TABLE `school_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_groups`
--
ALTER TABLE `student_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_marks`
--
ALTER TABLE `student_marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_shifts`
--
ALTER TABLE `student_shifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_years`
--
ALTER TABLE `student_years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `week`
--
ALTER TABLE `week`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
