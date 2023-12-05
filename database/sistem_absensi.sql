-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 08:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` bigint(20) UNSIGNED NOT NULL,
  `waktu_absensi` datetime NOT NULL,
  `id_jadwal` bigint(20) UNSIGNED NOT NULL,
  `id_penggajian` bigint(20) UNSIGNED NOT NULL,
  `pendapatan` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `waktu_absensi`, `id_jadwal`, `id_penggajian`, `pendapatan`, `created_at`, `updated_at`) VALUES
(1, '2023-01-01 05:58:20', 2, 1, 100000, '2023-11-22 04:58:20', '2023-02-01 03:48:33'),
(2, '2023-11-19 05:58:20', 2, 1, 100000, '2023-11-22 04:58:20', '2023-02-01 03:48:33'),
(3, '2023-11-19 07:43:52', 5, 1, 100000, NULL, NULL),
(4, '2023-11-19 07:43:52', 5, 1, 100000, NULL, NULL);

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
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` bigint(20) UNSIGNED NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu') NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `total_jp` int(11) NOT NULL,
  `id_mapel` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `id_guru` bigint(20) UNSIGNED NOT NULL,
  `id_tahun_ajaran` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `hari`, `jam_mulai`, `jam_selesai`, `total_jp`, `id_mapel`, `id_kelas`, `id_guru`, `id_tahun_ajaran`, `created_at`, `updated_at`) VALUES
(2, 'Senin', '07:20:00', '08:40:00', 2, 1, 1, 6, 3, NULL, NULL),
(3, 'Sabtu', '12:40:00', '14:00:00', 2, 1, 1, 6, 3, NULL, NULL),
(4, 'Senin', '07:40:00', '09:40:00', 3, 1, 1, 6, 3, NULL, NULL),
(5, 'Senin', '07:20:00', '08:40:00', 2, 1, 1, 9, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `tingkat_kelas` enum('X','XI','XII') NOT NULL,
  `id_prodi` bigint(20) UNSIGNED NOT NULL,
  `grup` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `tingkat_kelas`, `id_prodi`, `grup`, `created_at`, `updated_at`) VALUES
(1, 'XI', 2, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `matapelajaran`
--

CREATE TABLE `matapelajaran` (
  `id_mapel` bigint(20) UNSIGNED NOT NULL,
  `nama_mapel` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matapelajaran`
--

INSERT INTO `matapelajaran` (`id_mapel`, `nama_mapel`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_07_031833_create_programstudi_table', 1),
(6, '2023_08_07_032139_create_kelas_table', 1),
(7, '2023_08_07_132932_create_matapelajaran_table', 1),
(8, '2023_08_07_133033_create_jadwal_table', 1),
(9, '2023_08_07_133806_create_penggajian_table', 1),
(10, '2023_08_07_134328_create_absensi_table', 1),
(11, '2023_11_18_132633_create_tahun_ajaran_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penggajian`
--

CREATE TABLE `penggajian` (
  `id_penggajian` bigint(20) UNSIGNED NOT NULL,
  `keterangan` enum('Hadir','Tidak Hadir','Izin') NOT NULL,
  `total_gaji` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penggajian`
--

INSERT INTO `penggajian` (`id_penggajian`, `keterangan`, `total_gaji`, `created_at`, `updated_at`) VALUES
(1, 'Hadir', 100000, NULL, NULL),
(2, 'Tidak Hadir', 0, NULL, NULL),
(3, 'Izin', 20000, NULL, NULL);

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
-- Table structure for table `programstudi`
--

CREATE TABLE `programstudi` (
  `id_prodi` bigint(20) UNSIGNED NOT NULL,
  `nama_prodi` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programstudi`
--

INSERT INTO `programstudi` (`id_prodi`, `nama_prodi`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Multimedia', 0, NULL, NULL),
(2, 'Teknik Sepeda Motor', 1, NULL, NULL),
(3, 'Akuntansi', 1, NULL, NULL),
(4, 'Tata Busana', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` bigint(20) UNSIGNED NOT NULL,
  `tahun_mulai` varchar(25) NOT NULL,
  `tahun_selesai` varchar(25) NOT NULL,
  `isSemesterGanjil` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun_ajaran`, `tahun_mulai`, `tahun_selesai`, `isSemesterGanjil`, `created_at`, `updated_at`) VALUES
(1, '2023', '2024', 1, NULL, NULL),
(3, '2023', '2024', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `level` enum('Admin','Guru','Kepala Sekolah','Tata Usaha') NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_Active` tinyint(1) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `image`, `tanggal_lahir`, `tempat_lahir`, `level`, `email_verified_at`, `password`, `is_Active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'anantapk03@gmail.com', 'hana.jfif', '0000-00-00', 'Cirebon', 'Admin', NULL, '$2y$10$4AKUQk9K55wwD9AZ0k1fUOcjNyHbwAFCaYu7OexBs8h923N6L8xqS', 1, NULL, NULL, NULL),
(2, 'ANANTA PADMA KUSUMA', 'developers@gmail.com', 'hana.jfif', '0003-10-10', 'CIREBON', 'Admin', NULL, '$2y$10$FZhufjP7F7lG5C7pAqn0nu6xe8NBbSVZ5u.yXDNjXFzY2xXnvoSPu', 1, NULL, '2023-11-18 06:48:04', '2023-11-18 07:08:21'),
(3, 'ANANTA PADMA KUSUMA', 'developers2@gmail.com', 'hana.jfif', '2003-10-10', 'CIREBON', 'Admin', NULL, '$2y$10$//nPATF.md33cqnBMwoOi.rOGQmxcf1Qq8v/ndsR7vUFE4icEe5ae', 1, NULL, '2023-11-18 06:51:23', '2023-11-18 06:51:23'),
(4, 'Kepala Sekolah', 'kepalasekolah@gmail.com', NULL, '2001-10-10', 'CIREBON', 'Kepala Sekolah', NULL, '$2y$10$Mpu1k2h8Me7syRaeG0VzYeyVeshZk8gHwi7W/KIf1ypb7RLVmbWMy', 1, NULL, '2023-11-18 07:10:28', '2023-11-18 07:18:07'),
(5, 'Kepala Sekolah 2', 'kepalasekolah2@gmail.com', 'hana.jfif', '1998-12-11', 'CIREBON', 'Kepala Sekolah', NULL, '$2y$10$PiEmGJY8ufu6NiFqnKVPreeT85uUWtEuZ2hrA3F6quF9BX15BCpvq', 1, NULL, '2023-11-18 07:17:49', '2023-11-18 07:17:49'),
(6, 'Guru', 'gurutest@gmail.com', 'hana.jfif', '1980-02-11', 'CIREBON', 'Guru', NULL, '$2y$10$y.9NzsJjdrGcwQsYFeTO5OdLP98Dj8WzrKBuYgZ9kBeG9m3xAKzVK', 1, NULL, '2023-11-18 07:21:30', '2023-11-18 21:17:27'),
(7, 'Tata Usaha', 'tatausaha@gmail.com', 'hana.jfif', '2003-10-10', 'CIREBON', 'Tata Usaha', NULL, '$2y$10$gvV50mEgDCdr02R9OpdifeDN.vOzaFHne/Hfc/fAvb7c8ft8Y6hJu', 0, NULL, '2023-11-18 07:24:56', '2023-11-18 07:25:10'),
(8, 'Guru 2', 'gurutest2@gmail.com', 'hana.jfif', '1998-10-10', 'CIREBON', 'Guru', NULL, '$2y$10$Jcvh3T6F2yzja6jeu5CIuOaM1oLnmuAnFm96MS3YZgyyLisPcFdAO', 0, NULL, '2023-11-18 21:15:07', '2023-11-18 21:17:58'),
(9, 'KHOIRUN NISA, S.Si', 'guru1@gmail.com', 'hana.jfif', '1980-10-10', 'CIREBON', 'Guru', NULL, '$2y$10$2vEK1G39lmOo955.CaeEhO7R8SmTd8NUJaJ9aMXLcYABTwq6FIYuK', 1, NULL, '2023-11-18 23:18:26', '2023-11-18 23:18:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `absensi_id_jadwal_foreign` (`id_jadwal`),
  ADD KEY `absensi_id_penggajian_foreign` (`id_penggajian`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `jadwal_id_mapel_foreign` (`id_mapel`),
  ADD KEY `jadwal_id_kelas_foreign` (`id_kelas`),
  ADD KEY `jadwal_id_guru_foreign` (`id_guru`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `kelas_id_prodi_foreign` (`id_prodi`);

--
-- Indexes for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  ADD PRIMARY KEY (`id_mapel`);

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
-- Indexes for table `penggajian`
--
ALTER TABLE `penggajian`
  ADD PRIMARY KEY (`id_penggajian`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `programstudi`
--
ALTER TABLE `programstudi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  MODIFY `id_mapel` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penggajian`
--
ALTER TABLE `penggajian`
  MODIFY `id_penggajian` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programstudi`
--
ALTER TABLE `programstudi`
  MODIFY `id_prodi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun_ajaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_id_jadwal_foreign` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`),
  ADD CONSTRAINT `absensi_id_penggajian_foreign` FOREIGN KEY (`id_penggajian`) REFERENCES `penggajian` (`id_penggajian`);

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`),
  ADD CONSTRAINT `jadwal_id_guru_foreign` FOREIGN KEY (`id_guru`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `jadwal_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `jadwal_id_mapel_foreign` FOREIGN KEY (`id_mapel`) REFERENCES `matapelajaran` (`id_mapel`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_id_prodi_foreign` FOREIGN KEY (`id_prodi`) REFERENCES `programstudi` (`id_prodi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
