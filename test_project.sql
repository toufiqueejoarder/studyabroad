-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 10:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `program_category`, `created_at`, `updated_at`) VALUES
(1, 'Masters of Science', '2021-03-06 09:28:38', '2021-03-06 09:28:38'),
(2, 'Bachelor of Science', '2021-03-06 09:28:38', '2021-03-06 09:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `disciplines`
--

CREATE TABLE `disciplines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discipline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disciplines`
--

INSERT INTO `disciplines` (`id`, `discipline`, `created_at`, `updated_at`) VALUES
(1, 'Computer Science and Engineering', '2021-03-06 09:28:54', '2021-03-06 09:28:54'),
(2, 'Electronics and Communication Engineering', '2021-03-06 09:39:02', '2021-03-06 09:39:02'),
(3, 'Electrical and Electronics Engineering', '2021-03-06 14:20:03', '2021-03-06 14:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(4, '2021_03_03_132146_create_universities_table', 1),
(5, '2021_03_04_184525_create_disciplines_table', 1),
(6, '2021_03_04_185704_create_categories_table', 1),
(7, '2021_03_05_145615_create_programs_table', 1);

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
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discipline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `study_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fees` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_end` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Overview` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_structure` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_requirement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `english_requirement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_requirement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `funding` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_permit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `email`, `course`, `program`, `discipline`, `delivery`, `duration`, `study_status`, `about`, `fees`, `apply_start`, `apply_end`, `language`, `Overview`, `program_structure`, `academic_requirement`, `english_requirement`, `other_requirement`, `funding`, `visa`, `work_permit`, `created_at`, `updated_at`) VALUES
(1, 'university1@gmail.com', 'Artificial Intelligence', 'Masters of Science', 'Computer Science and Engineering', 'On Campus', '1.5 Years', 'Full Time', 'Artificial Intelligence Course full time. Masters of Science.', '2500 Euros /Year', '2-3-2021', '1-8-2021', 'English', 'Some Overview Texts', 'Program Structure', 'CGPA above 3.25/4.00', 'IELTS Band 6.5 or above', 'Having Publication is better but not mandatory', 'Research assistantship is available', 'Student Visa', 'Allowed 21 hrs a week', NULL, NULL),
(2, 'university2@gmail.com', 'Cyber Security', 'Masters of Science', 'Computer Science and Engineering', 'Online', '1.5 Years', 'Full Time', 'some texts', '2000 Euros /Year', '2-3-2021', '1-8-2021', 'English', 'Some texts', 'some texts', 'CGPA above 3.25/4.00', 'IELTS Band 6.5 or above', 'Cisco Certified Network Associate Certification', 'Research assistantship is available', 'Student Visa', 'Allowed 21 hrs a week', NULL, NULL),
(3, 'university1@gmail.com', 'Artificial Intelligence and IoT', 'Masters of Science', 'Computer Science and Engineering', 'On Campus', '1.5 Years', 'Full Time', 'Artificial Intelligence Course full time. Masters of Science.', '2500 Euros /Year', '2-3-2021', '1-8-2021', 'English', 'Some Overview Texts', 'Program Structure', 'CGPA above 3.25/4.00', 'IELTS Band 6.5 or above', 'Having Publication is better but not mandatory', 'Research assistantship is available', 'Student Visa', 'Allowed 21 hrs a week', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `email`, `tagline`, `address`, `address2`, `state`, `provience`, `country`, `website`, `university_logo`, `created_at`, `updated_at`) VALUES
(1, 'university1@gmail.com', NULL, '77 Massachusetts Ave', NULL, 'Cambridge', 'MA 02139', 'U.S.A', 'www.mit.edu', 'images/5WHmu.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `organization`, `role`, `provider_id`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MIT User', 'university1@gmail.com', 'MIT', 2, NULL, NULL, NULL, '$2y$10$ltumtO4INFOwpxgrsJ0gQ.FBIxLxxgYRwpdp1tYh78Akn.sjEyPfm', NULL, '2021-03-06 09:27:24', '2021-03-06 09:27:24'),
(2, 'Admin', 'admin@gmail.com', 'Admin', 3, NULL, NULL, NULL, '$2y$10$9t4TgiRYBK7W8gbgH49Ml.glcZGohRqPIU6qTMldmbu069E24zDEe', NULL, '2021-03-06 09:27:58', '2021-03-06 09:27:58'),
(4, 'Student 1', 'student1@gmail.com', 'University', 1, NULL, NULL, NULL, '$2y$10$ObuuKMK.xhVJIE8Thf0C1.b7PuYKTWNNECt9c1y3bX0qSys0gUY8.', NULL, '2021-03-06 14:25:38', '2021-03-06 14:25:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disciplines`
--
ALTER TABLE `disciplines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `universities_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `disciplines`
--
ALTER TABLE `disciplines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
