-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 05:55 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advance_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `class`, `section`, `status`, `student_id`, `teacher_id`, `date`, `created_at`, `updated_at`) VALUES
(1, '1', 'a', '0', '1910000', 'admin', '2019-10-23', '2019-10-14 03:29:35', '2019-10-14 03:29:35'),
(2, '1', 'a', '1', '1920000', 'admin', '2019-10-23', '2019-10-14 03:29:35', '2019-10-14 03:29:35'),
(3, '1', 'a', '0', '1910000', 'T-111', '2019-10-15', '2019-10-14 04:54:35', '2019-10-14 04:54:35'),
(4, '1', 'a', '1', '1920000', 'T-111', '2019-10-15', '2019-10-14 04:54:35', '2019-10-14 04:54:35'),
(5, '2', 'a', '1', '1950000', 'T-1231', '2019-10-08', '2019-10-14 04:58:22', '2019-10-14 04:58:22'),
(6, '2', 'a', '0', '1960000', 'T-1231', '2019-10-08', '2019-10-14 04:58:22', '2019-10-14 04:58:22'),
(7, '2', 'a', '0', '1950000', 'T-1231', '2019-10-14', '2019-10-14 05:00:42', '2019-10-14 05:00:42'),
(8, '2', 'a', '0', '1960000', 'T-1231', '2019-10-14', '2019-10-14 05:00:42', '2019-10-14 05:00:42'),
(9, '1', 'b', '1', '1930000', 'T-1231', '2019-10-21', '2019-10-14 05:06:33', '2019-10-14 05:06:33'),
(10, '1', 'b', '1', '1990000', 'T-1231', '2019-10-21', '2019-10-14 05:06:33', '2019-10-14 05:06:33'),
(11, '1', 'a', '1', '1910000', 'T-111', '2019-10-14', '2019-10-14 07:37:44', '2019-10-14 07:37:44'),
(12, '1', 'a', '1', '1920000', 'T-111', '2019-10-14', '2019-10-14 07:37:44', '2019-10-14 07:37:44'),
(13, '1', 'a', '1', '1910000', 'T-111', '2019-10-24', '2019-10-14 07:37:58', '2019-10-14 07:37:58'),
(14, '1', 'a', '1', '1920000', 'T-111', '2019-10-24', '2019-10-14 07:37:58', '2019-10-14 07:37:58'),
(15, '1', 'a', '1', '1910000', 'T-111', '2019-10-22', '2019-10-14 07:47:03', '2019-10-14 07:47:03'),
(16, '1', 'a', '1', '1920000', 'T-111', '2019-10-22', '2019-10-14 07:47:03', '2019-10-14 07:47:03'),
(17, '1', 'a', '1', '1910000', 'T-111', '2019-10-31', '2019-10-14 07:47:42', '2019-10-14 07:47:42'),
(18, '1', 'a', '1', '1920000', 'T-111', '2019-10-31', '2019-10-14 07:47:42', '2019-10-14 07:47:42'),
(19, '1', 'a', '1', '1910000', 'admin', '2019-10-15', '2019-10-15 06:51:47', '2019-10-15 06:51:47'),
(20, '1', 'a', '0', '1920000', 'admin', '2019-10-15', '2019-10-15 06:51:47', '2019-10-15 06:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `class_sections`
--

CREATE TABLE `class_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_sections`
--

INSERT INTO `class_sections` (`id`, `section`, `class`, `created_at`, `updated_at`) VALUES
(1, 'a', '1', '2019-10-14 01:59:13', '2019-10-14 01:59:13'),
(2, 'b', '1', '2019-10-14 01:59:23', '2019-10-14 01:59:23'),
(3, 'a', '2', '2019-10-14 01:59:37', '2019-10-14 01:59:37'),
(4, 'b', '2', '2019-10-14 02:00:36', '2019-10-14 02:00:36'),
(5, 'c', '1', '2019-10-14 14:44:40', '2019-10-14 14:44:40'),
(6, 'a', '5', '2019-10-15 06:32:20', '2019-10-15 06:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `class_subjects`
--

CREATE TABLE `class_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_mark` int(11) NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_subjects`
--

INSERT INTO `class_subjects` (`id`, `subject_id`, `subject_name`, `subject_mark`, `class`, `created_at`, `updated_at`) VALUES
(1, 'ban-01', 'Bangla', 100, '1', '2019-10-14 02:02:39', '2019-10-14 02:02:39'),
(2, 'eng-01', 'English', 100, '1', '2019-10-14 02:03:00', '2019-10-14 02:03:00'),
(3, 'ban-02', 'Bangla', 100, '2', '2019-10-14 02:03:22', '2019-10-14 02:03:22'),
(4, 'mat-02', 'Math', 100, '2', '2019-10-14 02:03:37', '2019-10-14 02:03:37'),
(5, 'soc-05', 'Social Science', 100, '5', '2019-10-15 06:36:51', '2019-10-15 06:36:51');

-- --------------------------------------------------------

--
-- Table structure for table `class_teachers`
--

CREATE TABLE `class_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_teachers`
--

INSERT INTO `class_teachers` (`id`, `class`, `section`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, '1', 'a', 'T-1231', '2019-10-14 02:07:25', '2019-10-15 06:20:55'),
(2, '1', 'b', 'T-112', '2019-10-14 02:07:25', '2019-10-15 06:20:55'),
(4, '2', 'b', 'T-112', '2019-10-14 02:13:20', '2019-10-14 02:13:20'),
(5, '2', 'a', 'T-1231', '2019-10-14 03:54:18', '2019-10-14 03:54:18'),
(6, '1', 'c', 'T-111', '2019-10-15 06:20:56', '2019-10-15 06:20:56'),
(7, '5', 'a', 'T-tusar123', '2019-10-15 06:47:02', '2019-10-15 06:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_09_18_045310_create_teachers_table', 1),
(5, '2019_09_18_045409_create_students_table', 1),
(6, '2019_09_18_045616_create_parents_table', 1),
(7, '2019_09_18_045830_create_student_school_infos_table', 1),
(8, '2019_09_18_050015_create_attendances_table', 1),
(9, '2019_09_18_050359_create_class_subjects_table', 1),
(10, '2019_09_18_050446_create_class_sections_table', 1),
(11, '2019_09_18_050554_create_subject_marks_table', 1),
(12, '2019_09_22_071812_create_class_teachers_table', 1),
(13, '2019_09_22_071854_create_subject_teachers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_occu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_occu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `father_name`, `father_occu`, `father_mobile`, `father_image`, `mother_name`, `mother_occu`, `mother_mobile`, `mother_image`, `user_id`, `student_id`, `created_at`, `updated_at`) VALUES
(2, 'Dennis L. Moore', 'Business', '01201258', 'image', 'Ramola', 'H Wife', '01202302365', 'image', 'p-1910000', '1910000', '2019-10-14 01:34:29', '2019-10-14 01:34:29'),
(3, 'Umayr Aziz Mikhail', 'Business', '01201258', 'image', 'Sulafah Atiya Assaf', 'H Wife', '01202302365', 'image', 'p-1920000', '1920000', '2019-10-14 01:37:14', '2019-10-14 01:37:14'),
(4, 'Atyaf Fawzah', 'Business', '01201258', 'image', 'Mbaeefa', 'H Wife', '01202302365', 'image', 'p-1930000', '1930000', '2019-10-14 01:40:27', '2019-10-14 01:40:27'),
(5, 'Fomals', 'Business', '01201258', 'image', 'Ramola', 'H Wife', '01202302365', 'image', 'p-1940000', '1940000', '2019-10-14 01:42:40', '2019-10-14 01:42:40'),
(6, 'Hamish', 'Business', '01201258', 'image', 'Aalisa', 'H Wife', '01202302365', 'image', 'p-1950000', '1950000', '2019-10-14 01:49:43', '2019-10-14 01:49:43'),
(7, 'kaslm', 'Business', '01201258', 'image', 'Samantha Moriarty', 'H Wife', '01202302365', 'image', 'p-1960000', '1960000', '2019-10-14 01:51:07', '2019-10-14 01:51:07'),
(8, 'Liam Hawthorn', 'Business', '01201258', 'image', 'Bethany Scobie', 'H Wife', '01202302365', 'image', 'p-1970000', '1970000', '2019-10-14 01:56:11', '2019-10-14 01:56:11'),
(9, 'Luca Quirk', 'Business', '01201258', 'image', 'Neighbour', 'H Wife', '01202302365', 'image', 'p-1980000', '1980000', '2019-10-14 01:58:20', '2019-10-14 01:58:20'),
(10, 'Johann Bauch', 'Business', '01201258', 'image', 'Aalisa', 'H Wife', '01202302365', 'image', 'p-1990000', '1990000', '2019-10-14 05:05:14', '2019-10-14 05:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `admission_date` date NOT NULL,
  `present_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `gender`, `religion`, `dob`, `admission_date`, `present_address`, `permanent_address`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'Mary C. West', 'Famale', 'Christian', '2010-02-23', '2019-11-21', 'Address1', 'Address2', 'image', '1910000', '2019-10-14 01:34:29', '2019-10-14 01:34:29'),
(4, 'Sadid Sahl Nassar', 'Male', 'Islam', '2009-09-27', '2019-11-26', 'Address1', 'Address2', 'image', '1920000', '2019-10-14 01:37:14', '2019-10-14 01:37:14'),
(5, 'Jud Lujayn', 'Famale', 'Islam', '2009-05-26', '2019-10-17', 'Address1', 'Address2', 'image', '1930000', '2019-10-14 01:40:26', '2019-10-14 01:40:26'),
(6, 'Fahim', 'Male', 'Islam', '2019-11-04', '2019-10-22', 'Address1', 'Address2', 'image', '1940000', '2019-10-14 01:42:39', '2019-10-14 01:42:39'),
(7, 'Hamish Sommerlad', 'Male', 'Christian', '2019-10-14', '2019-10-22', 'Address1', 'Address2', 'image', '1950000', '2019-10-14 01:49:42', '2019-10-14 01:49:42'),
(8, 'Gabrielle McLaughlin', 'Famale', 'Christian', '2019-10-06', '2019-10-21', 'Address1', 'Address2', 'image', '1960000', '2019-10-14 01:51:07', '2019-10-14 01:51:07'),
(9, 'Bailey Tunbridge', 'Male', 'Islam', '2019-10-08', '2019-10-09', 'Address1', 'Address2', 'image', '1970000', '2019-10-14 01:56:11', '2019-10-14 01:56:11'),
(10, 'Kayla Murnin', 'Male', 'Islam', '2019-10-08', '2019-10-30', 'Address1', 'Address2', 'image', '1980000', '2019-10-14 01:58:20', '2019-10-14 01:58:20'),
(11, 'Morton Wilderman', 'Male', 'Christian', '2019-10-15', '2019-10-16', 'Address1', 'Address2', 'image', '1990000', '2019-10-14 05:05:14', '2019-10-14 05:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `student_school_infos`
--

CREATE TABLE `student_school_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guide_teacher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_school_infos`
--

INSERT INTO `student_school_infos` (`id`, `class`, `section`, `roll`, `guide_teacher`, `year`, `student_id`, `created_at`, `updated_at`) VALUES
(1, '1', 'a', '101', 'T-112', '2019', '1910000', '2019-10-14 01:34:29', '2019-10-14 01:34:29'),
(2, '1', 'a', '102', 'T-112', '2019', '1920000', '2019-10-14 01:37:15', '2019-10-14 01:37:15'),
(3, '1', 'b', '103', 'T-1231', '2019', '1930000', '2019-10-14 01:40:27', '2019-10-14 01:40:27'),
(5, '2', 'a', '105', 'T-1231', '2019', '1950000', '2019-10-14 01:49:43', '2019-10-14 01:49:43'),
(6, '2', 'a', '106', 'T-1231', '2019', '1960000', '2019-10-14 01:51:07', '2019-10-14 01:51:07'),
(7, '2', 'b', '107', 'T-112', '2019', '1970000', '2019-10-14 01:56:11', '2019-10-14 01:56:11'),
(8, '2', 'b', '108', 'T-112', '2019', '1980000', '2019-10-14 01:58:21', '2019-10-14 01:58:21'),
(9, '1', 'b', '109', 'T-112', '2019', '1990000', '2019-10-14 05:05:14', '2019-10-14 05:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `subject_marks`
--

CREATE TABLE `subject_marks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quiz1` double(8,2) NOT NULL DEFAULT '0.00',
  `quiz2` double(8,2) NOT NULL DEFAULT '0.00',
  `mid` double(8,2) NOT NULL DEFAULT '0.00',
  `final` double(8,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject_marks`
--

INSERT INTO `subject_marks` (`id`, `class`, `subject_id`, `teacher_id`, `student_id`, `quiz1`, `quiz2`, `mid`, `final`, `created_at`, `updated_at`) VALUES
(1, '1', 'eng-01', 'T-1231', '1910000', 10.00, 14.00, 10.00, 50.00, '2019-10-14 05:30:54', '2019-10-14 06:53:05'),
(2, '1', 'eng-01', 'T-1231', '1920000', 12.00, 10.00, 42.00, 4.00, '2019-10-14 05:30:54', '2019-10-14 06:53:05'),
(3, '2', 'mat-02', 'T-1231', '1970000', 15.00, 36.00, 2.50, 2.00, '2019-10-14 06:02:44', '2019-10-14 06:03:23'),
(4, '2', 'mat-02', 'T-1231', '1980000', 52.00, 1.00, 40.00, 2.00, '2019-10-14 06:02:44', '2019-10-14 06:03:23'),
(5, '2', 'ban-02', 'T-1231', '1970000', 10.00, 63.00, 0.00, 6.00, '2019-10-14 06:05:46', '2019-10-14 06:08:34'),
(6, '2', 'ban-02', 'T-1231', '1980000', 53.00, 15.00, 1.00, 3.00, '2019-10-14 06:05:46', '2019-10-14 06:08:34'),
(7, '1', 'ban-01', 'T-111', '1910000', 10.00, 40.00, 10.00, 10.00, '2019-10-14 07:19:08', '2019-10-15 06:14:00'),
(8, '1', 'ban-01', 'T-111', '1920000', 10.00, 50.00, 30.00, 2.00, '2019-10-14 07:19:08', '2019-10-15 06:14:00'),
(9, '1', 'ban-01', 'T-1231', '1910000', 0.00, 0.00, 0.00, 0.00, '2019-10-15 06:26:44', '2019-10-15 06:26:44'),
(10, '1', 'ban-01', 'T-1231', '1920000', 0.00, 0.00, 0.00, 0.00, '2019-10-15 06:26:44', '2019-10-15 06:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `subject_teachers`
--

CREATE TABLE `subject_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject_teachers`
--

INSERT INTO `subject_teachers` (`id`, `class`, `section`, `subject_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, '1', 'a', 'ban-01', 'T-1231', '2019-10-14 05:10:28', '2019-10-15 06:25:17'),
(2, '1', 'a', 'eng-01', 'T-1231', '2019-10-14 05:10:38', '2019-10-14 05:10:38'),
(3, '1', 'b', 'ban-01', 'T-112', '2019-10-14 05:10:47', '2019-10-14 05:10:47'),
(4, '1', 'b', 'eng-01', 'T-112', '2019-10-14 05:11:43', '2019-10-14 05:11:43'),
(5, '2', 'b', 'mat-02', 'T-1231', '2019-10-14 05:12:06', '2019-10-14 05:12:06'),
(6, '2', 'b', 'ban-02', 'T-1231', '2019-10-14 05:12:14', '2019-10-14 05:12:14'),
(7, '2', 'a', 'ban-02', 'T-112', '2019-10-14 05:12:23', '2019-10-14 05:12:23'),
(8, '2', 'a', 'mat-02', 'T-111', '2019-10-14 05:29:38', '2019-10-14 05:29:51'),
(9, '1', 'c', 'ban-01', 'T-111', '2019-10-15 06:25:33', '2019-10-15 06:25:33'),
(10, '5', 'a', 'soc-05', 'T-tusar123', '2019-10-15 06:37:42', '2019-10-15 06:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `join_date` date NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `subject`, `phone`, `image`, `join_date`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'William J. Mattingly', 'Bangla', '734-273-6061', 'image', '2019-10-30', 'T-1231', '2019-10-13 11:32:21', '2019-10-13 11:32:21'),
(3, 'Shaun D. Hess', 'English', '0123456', 'image', '2019-10-20', 'T-112', '2019-10-13 11:33:25', '2019-10-13 11:33:25'),
(4, 'Ludwig Blick', 'English', '0123456123123', 'image', '2019-10-29', 'T-111', '2019-10-14 03:52:24', '2019-10-14 03:52:24'),
(5, 'Tushar Saha', 'English', '01630657507', 'image', '2019-10-15', 'T-tusar123', '2019-10-15 06:40:09', '2019-10-15 06:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `type`, `role`, `added_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Tushar Saha', '$2y$10$XVcxbxxZ5mPX1DrAOVEDQ.bbD2kyVoUt7PyqCuUuQJ2gUOmTmZ.WC', 'admin', 'admin', 'admin', 'je2Abei4uhYPvLldZ9gJh3L1rQKXUsGi2Utlucm9wBAzFhrjIMnDEWDspEUI', '2019-10-13 07:18:21', '2019-10-13 07:18:21'),
(5, 'T-1231', 'William J. Mattingly', '$2y$10$aRVvxIuiFFiMM4Xb9gH56.NdshGaG9BrpF7Vav.lz1GJ5BOyr39yK', 'teacher', 'subject teacher', 'admin', NULL, '2019-10-13 11:32:21', '2019-10-13 11:32:21'),
(6, 'T-112', 'Shaun D. Hess', '$2y$10$TXbdmjoaXtItYDglagRHVug7txF0ts9WW9KaC3gKNyi6SlcqhanuW', 'teacher', 'subject teacher', 'admin', NULL, '2019-10-13 11:33:24', '2019-10-13 11:33:24'),
(11, '1910000', 'Mary C. West', '$2y$10$eKBybelKElrkY4PQQ5xXzOHaqO0gJr0U2sFBlMG9oEG3jrqwkQ6Gy', 'student', 'none', 'admin', NULL, '2019-10-14 01:34:29', '2019-10-14 01:34:29'),
(12, 'p-1910000', 'Parents', '$2y$10$wv1SWkegdEnHjj80gll0B.GjWP4.xbXkHQHPeK8n5RV/zjMGRu2Re', 'parents', 'none', 'admin', NULL, '2019-10-14 01:34:29', '2019-10-14 01:34:29'),
(13, '1920000', 'Sadid Sahl Nassar', '$2y$10$uzA0v/dculhei8lxsSS7yOliRqkL32pY6h/nX3u5MO5ot16pRgvR.', 'student', 'none', 'admin', NULL, '2019-10-14 01:37:14', '2019-10-14 01:37:14'),
(14, 'p-1920000', 'Parents', '$2y$10$ZIIUMrbW9kuCoJMTOPmWNOjEOo6mzKfgWUM3b88LVc869jSbwQxDi', 'parents', 'none', 'admin', NULL, '2019-10-14 01:37:14', '2019-10-14 01:37:14'),
(15, '1930000', 'Jud Lujayn', '$2y$10$tWrLuLsamy4Is46hI9H7C.NsaqUi4M5nZkW2eMwDM4woGP9JDwWY2', 'student', 'none', 'admin', NULL, '2019-10-14 01:40:26', '2019-10-14 01:40:26'),
(16, 'p-1930000', 'Parents', '$2y$10$XMHPSqvcrRc7P1nMKqC2vO1IIaWonexW1nHkqlKWM2BF8hFBGwREu', 'parents', 'none', 'admin', NULL, '2019-10-14 01:40:27', '2019-10-14 01:40:27'),
(17, '1940000', 'Fahim', '$2y$10$4I2aP/LRIv.uMQ6vpxG5zeSwjuKR6JwSPcTAUT.NKABqWiyJrzw5q', 'student', 'none', 'admin', NULL, '2019-10-14 01:42:39', '2019-10-14 01:42:39'),
(18, 'p-1940000', 'Parents', '$2y$10$HqANr.171JFs/MTJTzJniu4Ug4QB5NvfqMkvdvCuVD4u3.9odaMre', 'parents', 'none', 'admin', NULL, '2019-10-14 01:42:40', '2019-10-14 01:42:40'),
(19, '1950000', 'Hamish Sommerlad', '$2y$10$VOlmid8JBozpKZuA/Dd0CO54kwNNCekNzeezp9a5HoUiAnbLuuhGS', 'student', 'none', 'admin', NULL, '2019-10-14 01:49:42', '2019-10-14 01:49:42'),
(20, 'p-1950000', 'Parents', '$2y$10$/2vLYKASEK0MAJUAdHTJEuJr9KDhMtPtnWZ.22GgaAZlzoM9zRNIm', 'parents', 'none', 'admin', NULL, '2019-10-14 01:49:43', '2019-10-14 01:49:43'),
(21, '1960000', 'Gabrielle McLaughlin', '$2y$10$oBefbysTsid0D6103yznS.BOpmEYGKXvvxgIzt6WRXVh7VLyWkdFq', 'student', 'none', 'admin', NULL, '2019-10-14 01:51:07', '2019-10-14 01:51:07'),
(22, 'p-1960000', 'Parents', '$2y$10$aklqEnmJvs99jhZKtPxzuuFZQSLfyc1JYO31HJaaTh588hV7cr.Ai', 'parents', 'none', 'admin', NULL, '2019-10-14 01:51:07', '2019-10-14 01:51:07'),
(23, '1970000', 'Bailey Tunbridge', '$2y$10$z1cHal2GRuyHKFF.E8d1M.4erurqZ6p68.imef8ac4L39tB1zxopK', 'student', 'none', 'admin', NULL, '2019-10-14 01:56:11', '2019-10-14 01:56:11'),
(24, 'p-1970000', 'Parents', '$2y$10$iOwkFIlxmza00CVNLYL1s.0sOytMIvmvsmBT25pxHjktUaKMHrxSq', 'parents', 'none', 'admin', NULL, '2019-10-14 01:56:11', '2019-10-14 01:56:11'),
(25, '1980000', 'Kayla Murnin', '$2y$10$lGZoVvp7usEreMeOADL/NOKYZiRN5Y2MOUWlCh.NP6o1Z4x6WGkTm', 'student', 'none', 'admin', NULL, '2019-10-14 01:58:20', '2019-10-14 01:58:20'),
(26, 'p-1980000', 'Parents', '$2y$10$bFqHcZvpKytyX1CuWrLRceSBFJZjsejmwQn7iU/SnCUp3.WHYlNN.', 'parents', 'none', 'admin', NULL, '2019-10-14 01:58:20', '2019-10-14 01:58:20'),
(27, 'T-111', 'Ludwig Blick', '$2y$10$GMsCIPbjvNcseO3tt006k.k2HRIGj3v7hfY3HV4SLmcKsHWEvGGTa', 'teacher', 'subject teacher', 'admin', 'LXD2Coo6oJbp93A3R2zQbzYfQAjsUbZ7KQq8Az3EbzbVIh4exOGwijrffuDO', '2019-10-14 03:52:24', '2019-10-14 03:52:24'),
(28, '1990000', 'Morton Wilderman', '$2y$10$5cxs5uPGj8/RSdwa.rBMw.kgvmomU9ed42ablcFZlE6VTo3.lt.IK', 'student', 'none', 'admin', NULL, '2019-10-14 05:05:14', '2019-10-14 05:05:14'),
(29, 'p-1990000', 'Parents', '$2y$10$7/Mvn3MRMSNJGa0JJHBlreQ7d.bGoC37ZCreY8dYfejsVU20FaWyK', 'parents', 'none', 'admin', NULL, '2019-10-14 05:05:14', '2019-10-14 05:05:14'),
(30, 'T-tusar123', 'Tushar Saha', '$2y$10$zsxJ76p8PUQTtOCNUG8EU.lWxQIHQestj/VuRTwxRYMG85tvNzBDa', 'teacher', 'subject teacher', 'admin', NULL, '2019-10-15 06:40:09', '2019-10-15 06:40:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendances_student_id_foreign` (`student_id`);

--
-- Indexes for table `class_sections`
--
ALTER TABLE `class_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_subjects`
--
ALTER TABLE `class_subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `class_subjects_subject_id_unique` (`subject_id`);

--
-- Indexes for table `class_teachers`
--
ALTER TABLE `class_teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_teachers_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parents_user_id_foreign` (`user_id`),
  ADD KEY `parents_student_id_foreign` (`student_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_user_id_foreign` (`user_id`);

--
-- Indexes for table `student_school_infos`
--
ALTER TABLE `student_school_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_school_infos_guide_teacher_foreign` (`guide_teacher`),
  ADD KEY `student_school_infos_student_id_foreign` (`student_id`);

--
-- Indexes for table `subject_marks`
--
ALTER TABLE `subject_marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_marks_teacher_id_foreign` (`teacher_id`),
  ADD KEY `subject_marks_student_id_foreign` (`student_id`);

--
-- Indexes for table `subject_teachers`
--
ALTER TABLE `subject_teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_teachers_subject_id_foreign` (`subject_id`),
  ADD KEY `subject_teachers_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_id_unique` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `class_sections`
--
ALTER TABLE `class_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `class_subjects`
--
ALTER TABLE `class_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `class_teachers`
--
ALTER TABLE `class_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_school_infos`
--
ALTER TABLE `student_school_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subject_marks`
--
ALTER TABLE `subject_marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subject_teachers`
--
ALTER TABLE `subject_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `class_teachers`
--
ALTER TABLE `class_teachers`
  ADD CONSTRAINT `class_teachers_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `parents_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `parents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `student_school_infos`
--
ALTER TABLE `student_school_infos`
  ADD CONSTRAINT `student_school_infos_guide_teacher_foreign` FOREIGN KEY (`guide_teacher`) REFERENCES `teachers` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_school_infos_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `subject_marks`
--
ALTER TABLE `subject_marks`
  ADD CONSTRAINT `subject_marks_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subject_marks_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `subject_teachers`
--
ALTER TABLE `subject_teachers`
  ADD CONSTRAINT `subject_teachers_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `class_subjects` (`subject_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subject_teachers_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
