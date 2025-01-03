-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 03, 2025 at 06:46 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gempadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('77de68daecd823babbb58edb1c8e14d7106e83bb', 'i:1;', 1735479452),
('77de68daecd823babbb58edb1c8e14d7106e83bb:timer', 'i:1735479452;', 1735479452),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1735693459),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1735693459;', 1735693459),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', 'i:1;', 1735819504),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4:timer', 'i:1735819504;', 1735819504),
('da4b9237bacccdf19c0760cab7aec4a8359010b0', 'i:2;', 1735640942),
('da4b9237bacccdf19c0760cab7aec4a8359010b0:timer', 'i:1735640942;', 1735640942);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactdarurats`
--

CREATE TABLE `contactdarurats` (
  `id` bigint UNSIGNED NOT NULL,
  `Nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NomorTelepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactdarurats`
--

INSERT INTO `contactdarurats` (`id`, `Nama`, `NomorTelepon`, `Asal`, `created_at`, `updated_at`) VALUES
(1, 'Retno', '085695628567', 'Bekasi', '2025-01-02 04:58:59', '2025-01-02 04:58:59');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` bigint UNSIGNED NOT NULL,
  `Nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NomorTelepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SkalaGempa` enum('Tidak dirasakan','Dirasakan','Kerusakan Ringan','Kerusakan Sedang','Kerusakan Berat') COLLATE utf8mb4_unicode_ci NOT NULL,
  `KataKata` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin_comment` text COLLATE utf8mb4_unicode_ci,
  `is_valid` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `Nama`, `NomorTelepon`, `Asal`, `SkalaGempa`, `KataKata`, `created_at`, `updated_at`, `admin_comment`, `is_valid`) VALUES
(1, 'Vexilla', '085695628505', 'Bekasi', 'Kerusakan Sedang', 'Terjadi Kerusakan Sendang', '2024-12-31 03:57:17', '2024-12-31 18:02:24', NULL, 1),
(2, 'Regis', '085695628506', 'Bekasi', 'Tidak dirasakan', 'Tidak terlalu terasa', '2025-01-02 05:00:09', '2025-01-02 05:08:31', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_12_10_034116_create_form_table', 1),
(2, '2024_12_10_103619_create_sessions_table', 1),
(3, '2024_12_17_043119_create_contactdarurats_table', 1),
(4, '2024_12_28_081225_create_users_table', 1),
(5, '2024_12_28_082745_create_cache_table', 1),
(6, '2024_12_29_081214_create_news_table', 2),
(7, '2024_12_31_105215_add_validation_fields_to_form_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `status`, `published_at`, `created_at`, `updated_at`) VALUES
(7, 'Gempa Bumi Di Cianjur ', '<p>&nbsp;Sebuah gempa berkekuatan 6,3 skala Richter mengguncang Tokyo dan sekitarnya pada pagi hari. Pusat gempa berada di kedalaman 50 km di bawah permukaan laut di wilayah Kanto. Meski tidak ada laporan kerusakan besar, gempa ini menyebabkan gangguan pada layanan kereta cepat dan peringatan tsunami sementara&nbsp;</p>', 'news-images/01JGE3WAYDX14CWMNV0BJ24442.jpg', 1, '2024-12-10 01:25:35', '2024-12-31 03:23:44', '2024-12-31 03:23:44'),
(8, 'Gempa Terjadi Di Jepang!!', '<p>&nbsp;Sebuah gempa berkekuatan 6,3 skala Richter mengguncang Tokyo dan sekitarnya pada pagi hari. Pusat gempa berada di kedalaman 50 km di bawah permukaan laut di wilayah Kanto. Meski tidak ada laporan kerusakan besar, gempa ini menyebabkan gangguan pada layanan kereta cepat dan peringatan tsunami sementara.&nbsp;</p>', 'news-images/01JGE3XE1VMSEDJMHXSNMGWW67.jpeg', 1, '2024-12-16 13:26:16', '2024-12-31 03:24:20', '2024-12-31 03:24:20'),
(9, 'Gempa Dahsyat di Turki Timur', '<p>&nbsp;Turki mengalami gempa berkekuatan 7,1 di provinsi Erzurum. Gempa ini menyebabkan ratusan bangunan runtuh, dan tim penyelamat masih berupaya mengevakuasi korban yang terjebak di bawah reruntuhan. Pemerintah setempat telah mengumumkan keadaan darurat di wilayah terdampak.&nbsp;</p>', 'news-images/01JGKEDVG3T9EBMK30EEDAA4C1.jpeg', 1, '2024-12-11 10:28:43', '2024-12-31 03:25:08', '2025-01-02 05:04:16'),
(10, 'Gempa Bumi di Pasifik Selatan', '<p>Wilayah Kepulauan Fiji diguncang gempa berkekuatan 6,8 yang berpusat di Samudra Pasifik. Meskipun pusat gempa berada di lautan dalam, getaran terasa hingga ke pantai utama. Tidak ada peringatan tsunami yang dikeluarkan.</p>', 'news-images/01JGE41DPWPYT5YWSCQNMWPVVG.jpeg', 1, '2024-12-06 15:31:28', '2024-12-31 03:26:30', '2024-12-31 03:26:30'),
(11, 'Gempa di Chile, Wilayah Andes', '<p>Chile mengalami gempa berkekuatan 7,0 di dekat wilayah Andes. Getaran terasa hingga ke ibu kota Santiago. Pemerintah mendesak warga untuk menjauhi daerah pantai sebagai langkah antisipasi potensi tsunami.&nbsp;</p>', 'news-images/01JGE42QTXVV2ZF3S3M65ZB15K.jpeg', 1, '2024-12-11 13:29:02', '2024-12-31 03:27:13', '2024-12-31 03:27:13'),
(12, 'Gempa Berkekuatan 5,9 di Yunani', '<p>&nbsp;Sebuah gempa mengguncang Pulau Kreta di Yunani dengan kekuatan 5,9. Gempa ini menyebabkan beberapa kerusakan ringan pada bangunan tua dan memicu kepanikan di kalangan wisatawan dan penduduk setempat.&nbsp;</p>', 'news-images/01JGE43SH94XT4PK8AK07WJFV8.jpeg', 1, '2024-12-28 13:31:40', '2024-12-31 03:27:48', '2024-12-31 03:27:48'),
(13, 'Gempa di Indonesia, Wilayah Sumatra', '<p>&nbsp;Indonesia kembali mengalami gempa dengan kekuatan 6,5 di wilayah Sumatra Barat. Gempa ini dirasakan hingga kota Padang. Beberapa rumah mengalami kerusakan, namun tidak ada laporan korban jiwa sejauh ini. Warga diminta tetap waspada terhadap potensi gempa susulan.&nbsp;</p>', 'news-images/01JGE44F29KM71HDRNPVW3G9ND.jpg', 1, '2025-01-02 14:30:05', '2024-12-31 03:28:10', '2024-12-31 03:28:10'),
(14, 'Gempa Bumi di Pasifik Selatan', '<p>&nbsp;Wilayah Kepulauan Fiji diguncang gempa berkekuatan 6,8 yang berpusat di Samudra Pasifik. Meskipun pusat gempa berada di lautan dalam, getaran terasa hingga ke pantai utama. Tidak ada peringatan tsunami yang dikeluarkan.&nbsp;</p>', 'news-images/01JGE45B29MBBAB7BKG9SS4V8F.png', 1, '2024-12-18 12:31:36', '2024-12-31 03:28:39', '2025-01-02 05:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('tuBy9Brds4Nzabwjpc003SmYjU1QoQqJzXWW7tEo', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidWhkZ3E1RHFvemNhMk5DV2RYWjZuMndiYTZaZWhCbEU4R05wcjhPNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9pbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiR1RmVuSDhVUmdJY0FGc01xTDd4TzBlT1FCdjFZM3QuVWNjVmkvVUJ6NFdHNW0xOWtZUHlhLiI7czo4OiJmaWxhbWVudCI7YTowOnt9fQ==', 1735819982);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', NULL, '$2y$12$KZwF5DzduLEjUThWlj.7C.Ma/orLfERWp8wPWf5rahQqQJadVc.aC', NULL, '2024-12-29 00:32:44', '2024-12-29 00:32:44'),
(5, 'Rena', 'Rena@gmail.com', NULL, '$2y$12$uFenH8URgIcAFsMqL7xO0eOQBv1Y3t.UccVi/UBz4WG5m19kYPya.', NULL, '2025-01-02 04:51:55', '2025-01-02 04:51:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contactdarurats`
--
ALTER TABLE `contactdarurats`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `contactdarurats`
--
ALTER TABLE `contactdarurats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
