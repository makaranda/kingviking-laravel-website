-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2025 at 07:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_kingvikingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_slider`
--

CREATE TABLE `main_slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner` varchar(255) NOT NULL DEFAULT 'main_banner.jpg',
  `heading` varchar(255) NOT NULL DEFAULT 'Website Name',
  `sub_heading` varchar(255) NOT NULL DEFAULT 'Website Short Description',
  `switch` tinyint(1) NOT NULL DEFAULT 0,
  `music_area_switch` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_slider`
--

INSERT INTO `main_slider` (`id`, `banner`, `heading`, `sub_heading`, `switch`, `music_area_switch`, `created_at`, `updated_at`) VALUES
(1, 'main-banner-poster-001.jpg', 'King Viking', 'King Viking is a musician from Canada. He is known for his unique style of music and his ability to connect with his audience.', 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(50, '2014_10_12_000000_create_users_table', 1),
(51, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(52, '2019_08_19_000000_create_failed_jobs_table', 1),
(53, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(54, '2025_03_11_083804_create_user_details_table', 1),
(55, '2025_03_11_084015_create_settings_table', 1),
(56, '2025_03_11_084227_create_main_slider_table', 1),
(57, '2025_03_11_084457_create_music_tracks_table', 1),
(58, '2025_03_13_172223_create_pages_table', 1),
(59, '2025_03_13_173140_create_visitors_counts_table', 1),
(60, '2025_03_13_175207_create_orders_table', 1),
(61, '2025_03_13_175232_create_order_items_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `music_tracks`
--

CREATE TABLE `music_tracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `track_code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `track` varchar(255) NOT NULL,
  `track_image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `music_tracks`
--

INSERT INTO `music_tracks` (`id`, `track_code`, `title`, `sub_title`, `description`, `track`, `track_image`, `type`, `price`, `qty`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BET0001', 'Beat - 01', '', '', 'peter-pan-beat7.mp3', 'music-symbol-icon-latest.png', 'beat', '50', '1', 1, 1, NULL, NULL),
(2, 'BET0002', 'Beat - 02', '', '', 'sugarcane-beat-8.mp3', 'music-symbol-icon-latest.png', 'beat', '50', '1', 2, 1, NULL, NULL),
(3, 'BET0001', 'Do You Know the Reason Master', '', '', 'do-you-know-the-reason-master_2_147bpm.mp3', 'king-viking-banner-audio-poster.jpg', 'audio', '50', '1', 0, 1, NULL, NULL),
(4, 'AUD0001', 'Hold On (to my side of the story)', '', '', '7010-fvr-master_3.mp3', 'hold-on.jpg', 'audio', '50', '1', 1, 1, NULL, NULL),
(5, 'AUD0002', 'I Am Fallin', '', '', 'i-am-fallin-king-viking-26Oct2024.mp3', 'i-am-fallin.jpg', 'audio', '50', '1', 2, 1, NULL, NULL),
(6, 'AUD0003', 'Stay With Me V2 MIX', '', '', 'stay-with-me-remix.mp3', 'stay-with-me-remix.jpg', 'audio', '50', '1', 3, 1, NULL, NULL),
(7, 'AUD0004', 'Stay WIth Me', '', '', 'stay-with-me-sample-mix-128.mp3', 'stay-with-me.jpg', 'audio', '50', '1', 4, 1, NULL, NULL),
(8, 'AUD0005', 'Sing to you', '', '', 'stay-with-me-sample-mix-128.mp3', 'stay-with-me.jpg', 'audio', '50', '1', 5, 1, NULL, NULL),
(9, 'AUD0006', 'The Joker', '', '', 'stay-with-me-sample-mix-128.mp3', 'stay-with-me.jpg', 'audio', '50', '1', 6, 1, NULL, NULL),
(10, 'AUD0007', 'Do you know the reason', '', '', 'stay-with-me-sample-mix-128.mp3', 'stay-with-me.jpg', 'audio', '50', '1', 7, 1, NULL, NULL),
(11, 'VID0001', 'The  Joker', 'First Albem', '', 'do-you-know-the-reason.mp4', 'the-joker-video-thumbnail.jpg', 'video', '50', '1', 1, 1, NULL, NULL),
(12, 'VID0002', 'Do you Know the Reason', 'First Albem', '', 'do-you-know-the-reason.mp4', 'do-you-know-the-reason-video-thumbnail.jpg', 'video', '50', '1', 2, 1, NULL, NULL),
(13, 'VID0003', 'Stay with me', 'First Albem', '', 'do-you-know-the-reason.mp4', 'stay-with-me-video-thumbnail.jpg', 'video', '50', '1', 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `total` decimal(10,2) NOT NULL,
  `confirmation` tinyint(1) NOT NULL DEFAULT 0,
  `status` enum('pending','processing','completed','cancelled') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `item_code` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `total` decimal(10,2) NOT NULL,
  `status` enum('pending','shipped','delivered','returned') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `sub_description` text DEFAULT NULL,
  `feature_image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `seo_keywords` text DEFAULT NULL,
  `seo_description` text DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `sub_description`, `feature_image`, `slug`, `seo_keywords`, `seo_description`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'In another lifetime, Things could have turned any number of ways. I could have been a bee keeper, an elephant handler (yes, for real), and even climbing a coconut tree for a daily wage - its a real “thing\" where I come from. But those possibilities were taken out of the equation very early in life. Luck for me (I think)!', 'I look back and music has been the only constant. Regardless of what I did, the love for song writing was there waiting to color any lane I picked. It heals, finds solutions to complex problems and brings it home. So I keep writing music. But I cant help think about those other possibilities that could have narrated this life. I am greatful to music. I am always greatful for those that made it possible for me. Doesnt matter where it goes from here, because of you, I consider mine to be a successful story.', 'king-viking-about-poster.jpg', 'about-us', '', '', 1, 1, NULL, NULL),
(2, 'Home', NULL, NULL, NULL, 'home', NULL, NULL, 1, 1, NULL, NULL),
(3, 'Contact Us', NULL, NULL, NULL, 'contact-us', NULL, NULL, 1, 1, NULL, NULL),
(4, 'Music Tracks', NULL, NULL, NULL, 'music-tracks', NULL, NULL, 1, 1, NULL, NULL),
(5, 'Music Videos', NULL, NULL, NULL, 'music-videos', NULL, NULL, 1, 1, NULL, NULL);

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
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_logo` varchar(255) NOT NULL DEFAULT 'logo.png',
  `fevicon_logo` varchar(255) NOT NULL DEFAULT 'fevicon.png',
  `website_title` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `google_map` text NOT NULL,
  `social_facebook` varchar(255) NOT NULL,
  `social_twitter` varchar(255) NOT NULL,
  `social_youtube` varchar(255) NOT NULL,
  `social_instagram` varchar(255) NOT NULL,
  `footer_content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `main_logo`, `fevicon_logo`, `website_title`, `contact_number`, `email_address`, `address`, `google_map`, `social_facebook`, `social_twitter`, `social_youtube`, `social_instagram`, `footer_content`, `created_at`, `updated_at`) VALUES
(1, 'king-viking-logo.jpg', 'king-viking-logo.jpg', 'King Viking | Music Store', '94773944180', 'info@kingviking.com', '600/D, Canada', 'https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d39970.61252233662!2d-79.40594099633311!3d43.663568319643446!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%20Ontario%20Canada!3m2!1d43.653226!2d-79.3831843!5e0!3m2!1sen!2slk!4v1739695286635!5m2!1sen!2slk', '#', '#', '#', '#', 'Looking back, music has been my constant. No matter the path, songwriting was always there—healing, solving, and guiding me. Im grateful for music and those who made it possible. Wherever it leads, my story is already a success.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','customer') NOT NULL DEFAULT 'customer',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Makaranda', 'makarandapathirana@gmail.com', 'admin', '$2y$12$RV86ku0QNl6O5av4qrhJlO1Wf3qco7r2grLeBhmhDRka24BxV2kSK', 'admin', NULL, NULL, NULL),
(2, 'Raveen', 'donraveen@gmail.com ', 'raveen', '$2y$12$8oT0P0ozup1rdzrnecXSl.X1DVkJKtCbgvowmywc5DnMEV8k0v8Oi', 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitors_counts`
--

CREATE TABLE `visitors_counts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `mac_address` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `main_slider`
--
ALTER TABLE `main_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music_tracks`
--
ALTER TABLE `music_tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_id_unique` (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `visitors_counts`
--
ALTER TABLE `visitors_counts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visitors_counts_page_id_foreign` (`page_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_slider`
--
ALTER TABLE `main_slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `music_tracks`
--
ALTER TABLE `music_tracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitors_counts`
--
ALTER TABLE `visitors_counts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `visitors_counts`
--
ALTER TABLE `visitors_counts`
  ADD CONSTRAINT `visitors_counts_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
