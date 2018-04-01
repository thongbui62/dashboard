-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 04:55 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `element_form`
--

CREATE TABLE `element_form` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_input` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_input` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_input` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_form` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `element_form`
--

INSERT INTO `element_form` (`id`, `name_input`, `type_input`, `place_input`, `id_form`, `created_at`, `updated_at`) VALUES
(66, 'getfullname', 'text', 'BÙI HUY THỐNG', 7, '2018-03-31 10:49:35', '2018-03-31 10:49:35'),
(67, 'gettel', 'number', '123456', 7, '2018-03-31 10:49:35', '2018-03-31 10:49:35'),
(68, 'get_name_main', 'text', 'THỐNG', 7, '2018-03-31 10:49:36', '2018-03-31 10:49:36'),
(69, 'get_tel_name_main', 'number', '98765', 7, '2018-03-31 10:49:36', '2018-03-31 10:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `des`, `created_at`, `updated_at`) VALUES
(6, 'FORM1', 'ĐÂY LÀ NHẬP FORM 1', '2018-03-31 10:24:15', '2018-03-31 10:24:15'),
(7, 'FORM 2', 'đây là mô tả cho form 2', '2018-03-31 10:28:11', '2018-03-31 13:55:29');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2018_03_30_145339_create_form_table', 1),
(9, '2018_03_30_145451_create_element_form', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'thong', 'thong1997@gmail.com', '$2y$10$SvnF2A6/3moGs2bc2NaSSOiXrfV/972Uv/HlU/TxTUjhiPIBwpy66', 'BkY6UqE4UflpLoGaPW2DPHJyz9PeFrRzs1UwpwAC1JNzPnfUIbPCLhUD3hWY', '2018-03-30 19:12:21', '2018-03-31 11:28:05'),
(3, 'buihuythong', 'thongbui62@gmail.com', '$2y$10$QhDGgJlualqNwLiQLuu0e.eX5Dc3HLvuBycY8sTqEc3GUh2fB91ha', NULL, '2018-03-31 13:33:39', '2018-03-31 13:33:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `element_form`
--
ALTER TABLE `element_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `element_form_id_form_foreign` (`id_form`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
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
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `element_form`
--
ALTER TABLE `element_form`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `element_form`
--
ALTER TABLE `element_form`
  ADD CONSTRAINT `element_form_id_form_foreign` FOREIGN KEY (`id_form`) REFERENCES `form` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
