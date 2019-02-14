-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 09:46 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukudns`
--

CREATE TABLE `bukudns` (
  `id` int(10) UNSIGNED NOT NULL,
  `namaBuku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaPenerbit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahunTerbit` int(11) NOT NULL,
  `kotaPenerbit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mataPelajaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkatPendidikan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edisi` int(11) NOT NULL,
  `rakBuku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahBuku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarBukuDepan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukudns`
--

INSERT INTO `bukudns` (`id`, `namaBuku`, `penulis`, `namaPenerbit`, `tahunTerbit`, `kotaPenerbit`, `mataPelajaran`, `bahasa`, `tingkatPendidikan`, `jurusan`, `edisi`, `rakBuku`, `jumlahBuku`, `gambarBukuDepan`, `created_at`, `updated_at`) VALUES
(17, 'Pendidikan Pelajaran Kewarganegaraan', 'Tim Penulis Buku PPKN', '2012', 2012, 'Jakarta', 'Pendidiikan Pelajaran Kewarganegaraan', 'Indonesia', 'SMA', 'IPA', 10, 'dsc21', '10', 'ppkn2_1537627709.jpg', '2018-09-21 22:58:49', '2018-09-22 07:48:29'),
(18, 'PPKn', 'Tim Penulis Buku Sakti', '2019', 2019, 'Bandung', 'PPKn', 'indonesia', 'SD', NULL, 2, 'fdaa12', '22', 'ppkn_1537606445.jpg', '2018-09-22 01:54:05', '2018-09-22 01:54:05'),
(19, 'PPKn', 'asd', '52123', 52123, 'zer12', 'zasg', 'asdf', 'SMP', 'IPA', 210, 'asdf23', '22', 'bbb_1537606553.jpg', '2018-09-22 01:55:53', '2018-09-22 01:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `bukulns`
--

CREATE TABLE `bukulns` (
  `id` int(10) UNSIGNED NOT NULL,
  `namaBuku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaPenerbit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahunTerbit` int(11) NOT NULL,
  `kotaPenerbit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `negeriPenerbit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mataPelajaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkatPendidikan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edisi` int(11) NOT NULL,
  `rakBuku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahBuku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarBukuDepan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukulns`
--

INSERT INTO `bukulns` (`id`, `namaBuku`, `penulis`, `namaPenerbit`, `tahunTerbit`, `kotaPenerbit`, `negeriPenerbit`, `mataPelajaran`, `bahasa`, `tingkatPendidikan`, `jurusan`, `edisi`, `rakBuku`, `jumlahBuku`, `gambarBukuDepan`, `created_at`, `updated_at`) VALUES
(5, 'Java Programming', 'Murach', '2010', 2010, 'New York', 'United State of America', 'Java', 'Inggris', 'SD', 'Ilmu Komputer', 4, 'asd20', '5', 'java_1537628208.jpg', '2018-09-21 23:01:33', '2018-09-22 07:56:48'),
(6, 'Java', 'John Wick', '2010', 2010, 'California', 'USA', 'Programming', 'English', 'SMK', 'Rekayasa Perangkat Lunak', 21, 'vc21', '21', 'java_1537606761.jpg', '2018-09-22 01:59:21', '2018-09-22 01:59:21');

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
(3, '2018_08_03_050520_create_bukudns_table', 1),
(4, '2018_08_20_123958_create_bukulns_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', '$2y$10$.qkNu8ks2kTGsDgZU/VP4uVE/uY9m0CPM.PC3x5DM45NxpQ4UeFIa', 'Cj1NIFOHq5lmrNONuPJRXNBwHfahXzvD4RApCgrGMCk9y3QCxb5oLOrS6JEM', '2018-08-30 07:50:24', '2018-08-30 07:50:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukudns`
--
ALTER TABLE `bukudns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukulns`
--
ALTER TABLE `bukulns`
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
-- AUTO_INCREMENT for table `bukudns`
--
ALTER TABLE `bukudns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `bukulns`
--
ALTER TABLE `bukulns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
