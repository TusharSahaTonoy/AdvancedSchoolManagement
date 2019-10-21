-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2019 at 04:28 PM
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
(21, '1', 'a', '1', '1900001', 'admin', '2019-10-23', '2019-10-19 09:14:28', '2019-10-19 09:14:28'),
(22, '1', 'a', '1', '1900003', 'admin', '2019-10-23', '2019-10-19 09:14:28', '2019-10-19 09:14:28'),
(23, '1', 'a', '1', '1900004', 'admin', '2019-10-23', '2019-10-19 09:14:28', '2019-10-19 09:14:28'),
(24, '1', 'b', '1', '1900005', 'admin', '2019-10-15', '2019-10-19 09:15:52', '2019-10-19 09:15:52');

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
(5, 'soc-05', 'Social Science', 100, '5', '2019-10-15 06:36:51', '2019-10-15 06:36:51'),
(6, 'mat-01', 'Math', 100, '1', '2019-10-19 11:20:17', '2019-10-19 11:20:17');

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
(13, 'Mariah VonRueden', 'Business', '01360657507', 'f1571349158.jpg', 'ya Rodriguez', 'H Wife', '01360657507', 'm1571349158.png', 'p-1900001', '1900001', '2019-10-17 15:52:39', '2019-10-17 15:52:39'),
(14, 'Prof. Maggie', 'Business', '01360657507', 'f1571349342.jpg', 'Gwendolyn Strosin', 'H Wife', '01360657507', 'm1571349342.jpg', 'p-1900002', '1900002', '2019-10-17 15:55:42', '2019-10-17 15:55:42'),
(15, 'Nova O\'Reilly', 'Business', '01360657507', 'f1571349535.png', 'VonRuede nMariah', 'H Wife', '01360657507', 'm1571349535.jpg', 'p-1900003', '1900003', '2019-10-17 15:58:56', '2019-10-17 15:58:56'),
(16, 'Maolamx', 'Business', '01360657507', 'f1571349825.jpg', 'Wilderman DVM', 'H Wife', '01360657507', 'm1571349825.jpg', 'p-1900004', '1900004', '2019-10-17 16:03:46', '2019-10-17 16:03:46'),
(17, 'Tracy Friesen', 'Business', '01360657507', 'f1571350108.png', 'Blanda V', 'H Wife', '01360657507', 'm1571350108.jpg', 'p-1900005', '1900005', '2019-10-17 16:08:29', '2019-10-17 16:08:29'),
(18, 'Tracy Friesen', 'Business', '01360657507', 'f1571350687.png', 'Wilderman', 'H Wife', '01360657507', 'm1571350687.png', 'p-1900006', '1900006', '2019-10-17 16:18:08', '2019-10-17 16:18:08'),
(19, 'Albertha Mraz', 'Business', '01360657507', 'f1571351606.jpg', 'Dina Rogahn', 'H Wife', '01360657507', 'm1571351606.png', 'p-1900007', '1900007', '2019-10-17 16:33:26', '2019-10-17 16:33:26'),
(20, 'Rico Lemke', 'Business', '01360657507', 'f1571504008.png', 'Gregory Sanford', 'H Wife', '01360657507', 'm1571504008.jpg', 'p-1900008', '1900008', '2019-10-19 10:53:28', '2019-10-19 10:53:28'),
(21, 'Kane Bruen', 'Business', '01360657507', 'f1571504221.png', 'Shannon Nienow', 'H Wife', '01360657507', 'm1571504221.jpg', 'p-1900009', '1900009', '2019-10-19 10:57:02', '2019-10-19 10:57:02');

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
(16, 'Maggie Klocko', 'Female', 'Islam', '2019-10-10', '2019-10-22', '983 Koss Spur Laramie,', 'WY 82073', 's1571349158.png', '1900001', '2019-10-17 15:52:39', '2019-10-17 15:52:39'),
(17, 'Klocko MD', 'Female', 'Hindu', '2019-10-11', '2019-10-27', '983 Koss Spur Laramie, WY 82073', '13372 Francisca Pike Suite 510 Pearce, AZ 85625', 's1571349342.png', '1900002', '2019-10-17 15:55:42', '2019-10-17 15:55:42'),
(18, 'Maggie Klocko', 'Male', 'Hindu', '2019-10-29', '2019-10-13', '13372 Francisca AZ 85625', 'Pike Suite 510 Pearce,', 's1571349535.png', '1900003', '2019-10-17 15:58:55', '2019-10-17 15:58:55'),
(19, 'O\'Reilly Cdwa', 'Male', 'Christian', '2019-10-13', '2019-10-31', '6786 Conn Overpass Suite 391 Reading, PA 19609', '86218 Zoe Ports Las Vegas, NV 89103', 's1571349825.jpg', '1900004', '2019-10-17 16:03:45', '2019-10-17 16:03:45'),
(20, 'Mrs. Lydia', 'Male', 'Buddha', '2019-10-21', '2019-10-27', '6786 Conn Overpass Suite', '391 Reading, PA 19609', 's1571350108.png', '1900005', '2019-10-17 16:08:28', '2019-10-17 16:08:28'),
(21, 'Friesen Lydia Wilderman DVM', 'Female', 'Christian', '2019-10-06', '2019-10-28', '7529 Yoshiko Club Suite', '191 Buffalo, OH 43722', 's1571350687.png', '1900006', '2019-10-17 16:18:08', '2019-10-17 16:18:08'),
(22, 'Jordane Torp II', 'Male', 'Hindu', '2019-10-06', '2019-10-22', '6786 Conn Overpass Suite', '391 Reading, PA 19609', 's1571351606.jpg', '1900007', '2019-10-17 16:33:26', '2019-10-17 16:33:26'),
(23, 'Ashly Davis', 'Female', 'Christian', '2019-10-22', '2019-10-23', '1884 Emmanuelle Forges Suite', '973 Greenbank, WA 98253', 's1571504008.jpg', '1900008', '2019-10-19 10:53:28', '2019-10-19 10:53:28'),
(24, 'Zakary Wisoky', 'Male', 'Islam', '2019-10-08', '2019-10-30', '9884 Karelle Crest Apt. 198 Toledo, OH 43617', '79578 Rickey Ferry Newtonville, NY 12128', 's1571504221.png', '1900009', '2019-10-19 10:57:02', '2019-10-19 10:57:02');

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
(12, '1', 'a', '10', 'T-111', '2019', '1900001', '2019-10-17 15:52:39', '2019-10-17 15:52:39'),
(13, '2', 'b', '112', 'T-112', '2019', '1900002', '2019-10-17 15:55:43', '2019-10-17 15:55:43'),
(14, '1', 'a', '101', 'T-tusar123', '2019', '1900003', '2019-10-17 15:58:56', '2019-10-17 15:58:56'),
(15, '1', 'a', '104', 'T-111', '2019', '1900004', '2019-10-17 16:03:46', '2019-10-17 16:03:46'),
(16, '1', 'b', '104', 'T-tusar123', '2019', '1900005', '2019-10-17 16:08:29', '2019-10-17 16:08:29'),
(17, '2', 'a', '201', 'T-112', '2019', '1900006', '2019-10-17 16:18:08', '2019-10-17 16:18:08'),
(18, '2', 'a', '202', 'T-111', '2019', '1900007', '2019-10-17 16:33:27', '2019-10-17 16:33:27'),
(19, '1', 'b', '105', 'T-121', '2019', '1900008', '2019-10-19 10:53:28', '2019-10-19 10:53:28'),
(20, '2', 'b', '204', 'T-121', '2019', '1900009', '2019-10-19 10:57:02', '2019-10-19 10:57:02');

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
(11, '1', 'ban-01', 'T-1231', '1900001', 10.00, 20.00, 10.50, 40.00, '2019-10-19 10:59:19', '2019-10-19 11:00:12'),
(12, '1', 'ban-01', 'T-1231', '1900003', 12.00, 20.00, 30.00, 4.50, '2019-10-19 10:59:19', '2019-10-19 11:00:12'),
(13, '1', 'ban-01', 'T-1231', '1900004', 10.00, 20.00, 45.00, 30.00, '2019-10-19 10:59:19', '2019-10-19 11:00:12'),
(14, '1', 'eng-01', 'T-1231', '1900001', 10.00, 20.00, 50.00, 15.00, '2019-10-19 11:00:31', '2019-10-19 11:13:38'),
(15, '1', 'eng-01', 'T-1231', '1900003', 15.00, 25.00, 36.00, 10.00, '2019-10-19 11:00:31', '2019-10-19 11:13:38'),
(16, '1', 'eng-01', 'T-1231', '1900004', 25.00, 10.00, 30.00, 24.00, '2019-10-19 11:00:31', '2019-10-19 11:13:38'),
(17, '2', 'mat-02', 'T-1231', '1900002', 10.00, 10.00, 20.00, 40.00, '2019-10-19 11:14:07', '2019-10-19 11:14:38'),
(18, '2', 'mat-02', 'T-1231', '1900009', 20.00, 20.00, 30.00, 10.00, '2019-10-19 11:14:07', '2019-10-19 11:14:38'),
(19, '2', 'ban-02', 'T-1231', '1900002', 10.00, 32.00, 21.00, 12.00, '2019-10-19 11:15:16', '2019-10-19 11:15:39'),
(20, '2', 'ban-02', 'T-1231', '1900009', 14.00, 41.00, 24.00, 20.00, '2019-10-19 11:15:16', '2019-10-19 11:15:39'),
(21, '1', 'mat-01', 'T-111', '1900001', 10.00, 10.00, 20.00, 32.00, '2019-10-19 11:23:11', '2019-10-19 11:26:50'),
(22, '1', 'mat-01', 'T-111', '1900003', 5.00, 10.00, 20.00, 30.00, '2019-10-19 11:23:11', '2019-10-19 11:26:50'),
(23, '1', 'mat-01', 'T-111', '1900004', 10.00, 10.00, 21.00, 21.00, '2019-10-19 11:23:12', '2019-10-19 11:26:50');

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
(10, '5', 'a', 'soc-05', 'T-tusar123', '2019-10-15 06:37:42', '2019-10-15 06:44:40'),
(11, '1', 'c', 'eng-01', 'T-121', '2019-10-19 10:57:41', '2019-10-19 10:57:41'),
(12, '1', 'a', 'mat-01', 'T-111', '2019-10-19 11:22:02', '2019-10-19 11:22:02');

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
(2, 'William J. Mattingly', 'Bangla', '734-273-6061', 'image.jpg', '2019-10-30', 'T-1231', '2019-10-13 11:32:21', '2019-10-13 11:32:21'),
(3, 'Shaun D. Hess', 'English', '0123456', 'image.jpg', '2019-10-20', 'T-112', '2019-10-13 11:33:25', '2019-10-13 11:33:25'),
(4, 'Ludwig Blick', 'English', '0123456123123', 'image.jpg', '2019-10-29', 'T-111', '2019-10-14 03:52:24', '2019-10-14 03:52:24'),
(5, 'Tushar Saha', 'English', '01630657507', 'image.jpg', '2019-10-15', 'T-tusar123', '2019-10-15 06:40:09', '2019-10-15 06:40:09'),
(6, 'Marianne Rath', 'Bangla', '01360657507', 't1571485824.jpg', '2019-10-23', 'T-121', '2019-10-19 05:50:24', '2019-10-19 05:50:24');

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
(1, 'admin', 'Tushar Saha', '$2y$10$XVcxbxxZ5mPX1DrAOVEDQ.bbD2kyVoUt7PyqCuUuQJ2gUOmTmZ.WC', 'admin', 'admin', 'admin', 'CeQftGOArwW89kUiusqj8ne5yHWnPSc87QvVI57LSHOi6GSOjITF4fbB9KZr', '2019-10-13 07:18:21', '2019-10-13 07:18:21'),
(5, 'T-1231', 'William J. Mattingly', '$2y$10$aRVvxIuiFFiMM4Xb9gH56.NdshGaG9BrpF7Vav.lz1GJ5BOyr39yK', 'teacher', 'subject teacher', 'admin', NULL, '2019-10-13 11:32:21', '2019-10-13 11:32:21'),
(6, 'T-112', 'Shaun D. Hess', '$2y$10$TXbdmjoaXtItYDglagRHVug7txF0ts9WW9KaC3gKNyi6SlcqhanuW', 'teacher', 'subject teacher', 'admin', NULL, '2019-10-13 11:33:24', '2019-10-13 11:33:24'),
(27, 'T-111', 'Ludwig Blick', '$2y$10$GMsCIPbjvNcseO3tt006k.k2HRIGj3v7hfY3HV4SLmcKsHWEvGGTa', 'teacher', 'subject teacher', 'admin', '4tDpst3S2qXXpjFWbxsuclSQCSll0l523kJsKSPJsVKsIE43xXcpxbtc2tiO', '2019-10-14 03:52:24', '2019-10-14 03:52:24'),
(30, 'T-tusar123', 'Tushar Saha', '$2y$10$zsxJ76p8PUQTtOCNUG8EU.lWxQIHQestj/VuRTwxRYMG85tvNzBDa', 'teacher', 'subject teacher', 'admin', NULL, '2019-10-15 06:40:09', '2019-10-15 06:40:09'),
(38, '1900001', 'Maggie Klocko', '$2y$10$bAp6slE.06FjzgB/HYqiSOUvKvbdCxMm2yPPOMAT0j1/WYvz4rj72', 'student', 'none', 'admin', NULL, '2019-10-17 15:52:39', '2019-10-17 15:52:39'),
(39, 'p-1900001', 'Parents', '$2y$10$zIWyOPUvpL5FeK9wraRh1u4XfgtB9N9.8uHutB/FfRiXGmBLO/bN2', 'parents', 'none', 'admin', NULL, '2019-10-17 15:52:39', '2019-10-17 15:52:39'),
(40, '1900002', 'Klocko MD', '$2y$10$2gRYbg1BPdKQL385RUf.su4OSp6Kce0tcw8/QA1age/yE6XPofVTC', 'student', 'none', 'admin', NULL, '2019-10-17 15:55:42', '2019-10-17 15:55:42'),
(41, 'p-1900002', 'Parents', '$2y$10$.I.lJ/v0sSHMogNaPtHXeOMGesBiE0m1Wm.mIbUeTIgvry253XWQO', 'parents', 'none', 'admin', NULL, '2019-10-17 15:55:42', '2019-10-17 15:55:42'),
(42, '1900003', 'Maggie Klocko', '$2y$10$z8TgN9876KN5Vu0iYlQpOuwqSL5RSTfh34w/gJI0JLDh/kzrLkRlS', 'student', 'none', 'admin', NULL, '2019-10-17 15:58:55', '2019-10-17 15:58:55'),
(43, 'p-1900003', 'Parents', '$2y$10$wNWgAuvRS0ceXgorzKwxQug4GfxSEzQo1bSuOt31aejMBc8Hd4NoO', 'parents', 'none', 'admin', NULL, '2019-10-17 15:58:56', '2019-10-17 15:58:56'),
(44, '1900004', 'O\'Reilly Cdwa', '$2y$10$BFk0kh0c6mnCnRoGlpon8uuc.4hZR5Seh9F0BWchw28TgdJnYF1Na', 'student', 'none', 'admin', NULL, '2019-10-17 16:03:45', '2019-10-17 16:03:45'),
(45, 'p-1900004', 'Parents', '$2y$10$17cSywINR3nGsj3dTDd82uhfVGVTn4AUXugG.0hBmdyMbWyzv4GG6', 'parents', 'none', 'admin', NULL, '2019-10-17 16:03:45', '2019-10-17 16:03:45'),
(46, '1900005', 'Mrs. Lydia', '$2y$10$QIhr3icbPgFKpKX0NadT8unE.a5zBEXp4i2faK.ZFv0lLjrX58cWe', 'student', 'none', 'admin', NULL, '2019-10-17 16:08:28', '2019-10-17 16:08:28'),
(47, 'p-1900005', 'Parents', '$2y$10$m1bfEUrV.Mkk05ggKsGycubE4XP.VC9y8x6CueoekvUaaEHNv6EbO', 'parents', 'none', 'admin', NULL, '2019-10-17 16:08:29', '2019-10-17 16:08:29'),
(48, '1900006', 'Friesen Lydia Wilderman DVM', '$2y$10$rgaMXr2DjbE8.oKy6Tkd6OEtsVgkkKeC0NIxhxrvuoiXHojq5qi5.', 'student', 'none', 'admin', NULL, '2019-10-17 16:18:08', '2019-10-17 16:18:08'),
(49, 'p-1900006', 'Parents', '$2y$10$glhK2N08nI/2vEHVdYI72.bi0kp8GWVKPMnvzYaBdm5yWlVyBKbXa', 'parents', 'none', 'admin', NULL, '2019-10-17 16:18:08', '2019-10-17 16:18:08'),
(50, '1900007', 'Jordane Torp II', '$2y$10$RbTE8Ltt/mYjctGm0tegieKu3VgUvxo8DlQ87U4zzvtg4tq1bxeU.', 'student', 'none', 'admin', NULL, '2019-10-17 16:33:26', '2019-10-17 16:33:26'),
(51, 'p-1900007', 'Parents', '$2y$10$ePJvzxzNr1ZyaTFBbZc8IOqMfUKXPPEoyoYuEWz86bPSUemVtjvua', 'parents', 'none', 'admin', NULL, '2019-10-17 16:33:26', '2019-10-17 16:33:26'),
(52, 'T-121', 'Marianne Rath', '$2y$10$JsJH647r3dRBq207YZUcDeBc3QmBZbkF9au0ItqoGPSYAOalygzD6', 'teacher', 'subject teacher', 'admin', NULL, '2019-10-19 05:50:24', '2019-10-19 05:50:24'),
(53, '1900008', 'Ashly Davis', '$2y$10$k73tP1tMOZnTI7SWk86HTO7GkDkvOiIua4FSkb2ub2toPG/o1YFbG', 'student', 'none', 'admin', NULL, '2019-10-19 10:53:28', '2019-10-19 10:53:28'),
(54, 'p-1900008', 'Parents', '$2y$10$M5a3Oduc7xhqRHApnOaYzu9APeEu7GEhAnqw/k2KcxzD5F8wl5OMe', 'parents', 'none', 'admin', NULL, '2019-10-19 10:53:28', '2019-10-19 10:53:28'),
(55, '1900009', 'Zakary Wisoky', '$2y$10$doP16j2DNi0ZJCWBg1eB8.3i6ZXPTGk23CvWsk.fuinSwf04IMlXS', 'student', 'none', 'admin', NULL, '2019-10-19 10:57:01', '2019-10-19 10:57:01'),
(56, 'p-1900009', 'Parents', '$2y$10$6S3u4/aGGJ2k5nIpH/SOJ.Pmq53Hm56/0GR7owY1qjbHOaSf5zHBu', 'parents', 'none', 'admin', NULL, '2019-10-19 10:57:02', '2019-10-19 10:57:02');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `class_sections`
--
ALTER TABLE `class_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `class_subjects`
--
ALTER TABLE `class_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `student_school_infos`
--
ALTER TABLE `student_school_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subject_marks`
--
ALTER TABLE `subject_marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `subject_teachers`
--
ALTER TABLE `subject_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
