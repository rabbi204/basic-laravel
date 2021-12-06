-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 11:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel8`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_image`, `created_at`, `updated_at`) VALUES
(2, 'lotto', 'image/brand/1717759710238360.png', '2021-11-29 04:55:17', '2021-11-29 04:55:17'),
(3, 'samsung', 'image/brand/1717759723248639.png', '2021-11-29 04:55:29', '2021-11-29 04:55:29'),
(4, 'raymond', 'image/brand/1717759734693497.png', '2021-11-29 04:55:40', '2021-11-29 04:55:40'),
(5, 'oppo', 'image/brand/1717759750931869.png', '2021-11-29 04:55:56', '2021-11-29 04:55:56'),
(6, 'vivo', 'image/brand/1717764816611024.png', '2021-11-29 04:56:04', '2021-11-29 06:16:27'),
(7, 'Nokia', 'image/brand/1717780708626712.jpg', '2021-11-29 10:29:03', '2021-11-29 10:29:03'),
(8, 'apple', 'image/brand/1717931272911011.png', '2021-12-01 02:22:12', '2021-12-01 02:22:12'),
(9, 'applexx', 'image/brand/1717951003712006.jpg', '2021-12-01 07:35:49', '2021-12-01 07:35:49');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `category_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'men item', NULL, '2021-11-28 19:56:00', '2021-11-28 19:56:00'),
(2, 1, 'women item', NULL, '2021-11-28 19:56:24', '2021-11-28 19:56:24'),
(3, 1, 'Mans Fashion', NULL, '2021-11-28 20:03:36', '2021-11-28 20:03:36'),
(4, 1, 'Women Fashion', NULL, '2021-11-28 20:04:33', '2021-11-28 20:04:33'),
(5, 1, 'Football', NULL, '2021-11-28 20:05:27', '2021-11-28 20:05:27'),
(6, 1, 'footbal', NULL, '2021-11-28 20:06:07', '2021-11-28 20:06:07'),
(7, 1, 'Cricket', NULL, '2021-11-28 20:06:51', '2021-11-28 20:06:51'),
(9, 1, 'hello', NULL, '2021-11-28 20:09:22', '2021-11-28 20:09:22'),
(11, 1, 'what', NULL, '2021-11-28 20:11:56', '2021-11-28 20:11:56'),
(13, 1, 'badminton', NULL, '2021-11-29 00:04:00', '2021-11-29 00:04:00'),
(14, 2, 'bangladesh team', NULL, '2021-11-29 00:58:35', '2021-11-29 02:39:34'),
(15, 1, 'tttttttt', NULL, '2021-12-01 02:05:53', '2021-12-01 02:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'House- 239/40, Road-2, Block- Cha, Mirpur-2, Dhaka- 1216', 'messi.web@gmail.com', '01729673493', '2021-12-06 02:37:35', '2021-12-06 03:20:22'),
(2, 'Mirpur-1, Block-B, Dhaka-1216', 'rabbi@gmail.com', '01910597276', '2021-12-06 02:39:38', '2021-12-06 02:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Md. Rabbi', 'rabbi@gmail.com', 'Apply for full free', 'Build your own free website with Websitebuilder.com. Choose from thousands of templates to create a stunning website in minutes. Free domain name included.', '2021-12-06 04:04:08', '2021-12-06 04:04:08'),
(3, 'messi', 'messi@gmail.com', 'Apply for full tea', 'Copyright Sleek Dashboard Bootstrap Templa', '2021-12-06 04:05:58', '2021-12-06 04:05:58');

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
-- Table structure for table `home_abouts`
--

CREATE TABLE `home_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_abouts`
--

INSERT INTO `home_abouts` (`id`, `title`, `short_desc`, `long_desc`, `created_at`, `updated_at`) VALUES
(1, 'de Finibus Bonorum et Malorum\",', 'rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.ddkk', '2021-12-02 05:02:18', '2021-12-02 06:04:41');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_11_28_163053_create_sessions_table', 1),
(7, '2021_11_28_181151_create_categories_table', 2),
(8, '2021_11_29_091832_create_brands_table', 3),
(9, '2021_11_29_163247_create_multipics_table', 4),
(15, '2021_12_01_085604_create_sliders_table', 5),
(16, '2021_12_02_102443_create_home_abouts_table', 6),
(18, '2021_12_06_063632_create_contacts_table', 7),
(19, '2021_12_06_094645_create_contact_forms_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `multipics`
--

CREATE TABLE `multipics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multipics`
--

INSERT INTO `multipics` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'image/multi/1717782858283272.png', '2021-11-29 11:03:13', '2021-11-29 11:03:13'),
(2, 'image/multi/1717782858544812.jpg', '2021-11-29 11:03:13', '2021-11-29 11:03:13'),
(3, 'image/multi/1717782858575451.jpg', '2021-11-29 11:03:15', '2021-11-29 11:03:15'),
(4, 'image/multi/1717930688095926.png', '2021-12-01 02:12:54', '2021-12-01 02:12:54'),
(5, 'image/multi/1717930694353851.png', '2021-12-01 02:13:00', '2021-12-01 02:13:00'),
(6, 'image/multi/1717930694384620.png', '2021-12-01 02:13:00', '2021-12-01 02:13:00'),
(7, 'image/multi/1717930694409835.png', '2021-12-01 02:13:00', '2021-12-01 02:13:00'),
(8, 'image/multi/1717930694434710.png', '2021-12-01 02:13:00', '2021-12-01 02:13:00'),
(9, 'image/multi/1717930694458462.png', '2021-12-01 02:13:00', '2021-12-01 02:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('eXNLKA2Q0DqnB5HxEfpKONu54yq5sDwk0i0JcA8U', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoibEVyYTVqd1JodDhtUzU0TzRzd2RObzBsUkJBVHdrQmVHbTZVMUpzayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9tZXNzYWdlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRWS0RkMy4xdmlSSU1BUGFUTDdJanpleVRDQVU0b21RR1VqWFFQLkYzS0hYaWh1SHpiOUMzQyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkVktEZDMuMXZpUklNQVBhVEw3SWp6ZXlUQ0FVNG9tUUdValhRUC5GM0tIWGlodUh6YjlDM0MiO30=', 1638786586),
('Rn8g3F8lt564Vueo8nmSzdYepmSxNcTT9RME2NXd', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiRDBlek5qeEVOa2xnVkw3bTJFSEtBdkhzTW5peGE0TVBkNTJ1UGN0eiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkVktEZDMuMXZpUklNQVBhVEw3SWp6ZXlUQ0FVNG9tUUdValhRUC5GM0tIWGlodUh6YjlDM0MiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFZLRGQzLjF2aVJJTUFQYVRMN0lqemV5VENBVTRvbVFHVWpYUVAuRjNLSFhpaHVIemI5QzNDIjt9', 1638446692);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(1, 'What is Lorem Ipsum?', 'the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'image/slider/1718029360452417.jpg', '2021-12-02 04:21:16', '2021-12-02 04:21:16'),
(2, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters', 'image/slider/1718029396930652.jpg', '2021-12-02 04:21:50', '2021-12-02 04:21:50'),
(3, 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'image/slider/1718029425423317.jpg', '2021-12-02 04:22:18', '2021-12-02 04:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'rabbi', 'rabbi@gmail.com', '2021-11-29 11:47:43', '$2y$10$VKDd3.1viRIMAPaTL7IjzeyTCAU4omQGUjXQP.F3KHXihuHzb9C3C', NULL, NULL, 'tfnmcJN2aSSVasVJVkxOsgLNTaIzKOEaOHoGoabANTCmYuvLR9fLkf3GkgCF', NULL, 'profile-photos/HbX9aPr7LTdWlA4G4QLjI85nmC10uRKYtBMxU6AK.jpg', '2021-11-28 10:38:30', '2021-11-29 11:47:43'),
(2, 'test', 'test@gmail.com', NULL, '$2y$10$MU2D8QU3tVueVAHX7U3b5O.HyiSyUps4eDzopcYph4uEoHu4lQegO', NULL, NULL, NULL, NULL, NULL, '2021-11-28 11:53:26', '2021-11-28 11:53:26'),
(3, 'messi', 'messi@gmail.com', '2021-11-30 06:47:24', '$2y$10$00W5Vkh9dtuDZ8cONHyD2OX/eFCxC14wz0RQodpdlX2WHbmceOH3m', NULL, NULL, NULL, NULL, NULL, '2021-11-30 06:39:44', '2021-11-30 06:47:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_abouts`
--
ALTER TABLE `home_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multipics`
--
ALTER TABLE `multipics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_abouts`
--
ALTER TABLE `home_abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `multipics`
--
ALTER TABLE `multipics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
