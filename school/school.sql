-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 May 2022, 19:37:33
-- Sunucu sürümü: 10.4.20-MariaDB
-- PHP Sürümü: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `school`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `city`
--

CREATE TABLE `city` (
  `id` bigint(20) NOT NULL,
  `city` varchar(70) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `city`
--

INSERT INTO `city` (`id`, `city`) VALUES
(1, 'Adana');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `episode`
--

CREATE TABLE `episode` (
  `episode_id` bigint(20) NOT NULL,
  `episode_name` varchar(70) COLLATE utf8_turkish_ci DEFAULT NULL,
  `episode_faculty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `episode`
--

INSERT INTO `episode` (`episode_id`, `episode_name`, `episode_faculty`) VALUES
(1, 'Yönetim Bilişim Sistemleri', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `faculty_slug` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `faculty_slug`) VALUES
(1, 'İktisadi Ve İdari Bilimler Fakültesi', 'iktisadi-idari-bilimler-fakultesi'),
(13, 'Fen Edebiyat Fakültesi', 'fen-edebiyat-fakultesi'),
(14, 'Tıp Fakültesi', 'tıp-fakültesi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
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
-- Tablo için tablo yapısı `grade`
--

CREATE TABLE `grade` (
  `grade_id` bigint(20) NOT NULL,
  `class_name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `class_code` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `compulsory` varchar(5) COLLATE utf8_turkish_ci DEFAULT NULL,
  `class_akts` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `class_class` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `class_quota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `grade`
--

INSERT INTO `grade` (`grade_id`, `class_name`, `class_code`, `compulsory`, `class_akts`, `class_class`, `class_quota`) VALUES
(1, 'Yapay Zeka', 'YBS402', 'S', '6', '4-2', 10),
(2, 'Derin Öğrenme', 'YBS403', 'S', '6', '4-2', 10),
(3, 'Algoritma', 'YBS101', 'Z', '6', '1-1', 10),
(4, 'İşletme Bilimi 1', 'YBS102', 'S', '6', '1-1', 10),
(5, 'Pazarlama', 'YBS201', 'Z', '6', '2-1', 10),
(6, 'Veri Madenciliği', 'YBS202', 'Z', '6', '2-1', 10),
(7, 'İşletme Bilimi 2', 'YBS121', 'Z', '6', '1-2', 10),
(8, 'İşletim Sistemleri', 'YBS122', 'Z', '6', '1-2', 10),
(9, 'Web Tasarımın Temelleri', 'YBS220', 'Z', '6', '2-2', 10),
(10, 'Bilgisayar Mimarisi', 'YBS221', 'Z', '6', '2-2', 10),
(11, 'Sosyal Bilimlerde Araştırma Yöntemleri', 'YBS301', 'Z', '6', '3-1', 10),
(12, 'Sistem Analizi Ve Tasarımı', 'YBS302', 'Z', '6', '3-1', 10),
(13, 'Bilişim Hukuku Ve Etiği', 'YBS321', 'Z', '6', '3-2', 10),
(14, 'Yönetim Bilişim Sistemleri', 'YBS322', 'Z', '6', '3-2', 10);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
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
-- Tablo için tablo yapısı `record`
--

CREATE TABLE `record` (
  `id` bigint(20) NOT NULL,
  `users_id` bigint(20) DEFAULT NULL,
  `grade_id` bigint(20) DEFAULT NULL,
  `grade_class_class` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `grade_class_akts` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `active` varchar(11) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `school_city`
--

CREATE TABLE `school_city` (
  `sc_id` bigint(20) NOT NULL,
  `school_city_name` varchar(70) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `school_city`
--

INSERT INTO `school_city` (`sc_id`, `school_city_name`) VALUES
(1, 'Adana');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identity` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faculty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `episode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `county` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verify` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `random` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `agno` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `identity`, `gender`, `birth`, `number`, `faculty`, `class`, `episode`, `school_city`, `city`, `county`, `address`, `post_code`, `email`, `email_verify`, `phone`, `file`, `password`, `permission_level`, `random`, `is_active`, `credit`, `created_at`, `updated_at`, `agno`) VALUES
(1, 'Hudson', 'Hornet', '30554103438', '1', '01/01/1999', '128745', '1', '1-1', '1', '1', 'Adana', 'Sarıçam', 'esentepe mahallesi', '01250', 'ufukdemirel234@gmail.com', 'df7Ufv', '05413441269', '1650318458748pp.jpg', '$2y$10$GGcLzhDvmgiZQeBwTccDv.A1ICVt5mEy47IoLGL6NGbuuaDSoKQL.', 'admin', 'df7Ufv', '1', NULL, NULL, '2022-03-27 08:45:01', NULL),
(5, 'Ufuk', 'Demirel', '30554103438', '1', '01/01/1999', '365897', '1', '2-1', '1', '1', 'Adana', 'Sarıçam', 'esentepe mahallesi', '01250', 'demirelu456@gmail.com', 'xGn9JR', '05413441269', '1649337480616IMG-0211.JPG', '$2y$10$7PU.hDuYRxUfcGt.JbgoNeRdQKwVZJZ5HS.FNtYBZ8aKzE/YN/5i2', 'user', 'xGn9JR', '1', '12', NULL, '2022-05-16 14:31:45', '2.99'),
(7, 'Ebubekir', 'Kahriman', '30554103438', '1', '01/01/1999', '685204', '1', '2-1', '1', '1', 'Adana', 'Sarıçam', 'esentepe mahallesi', '01250', 'demirelu012@gmail.com', 'xskDyn', '05413441269', '1650205530681Screenshot_2022-04-08-17-35-57-691_com.instagram.android.jpg', '$2y$10$.n1gsi5oUGRVWoBLFcb3L.LAp/tJiVjXwOOz/.kcT6W.rHcA7e5y6', 'user', 'xskDyn', '1', '12', NULL, NULL, '2.90');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`episode_id`);

--
-- Tablo için indeksler `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `school_city`
--
ALTER TABLE `school_city`
  ADD PRIMARY KEY (`sc_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `city`
--
ALTER TABLE `city`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `episode`
--
ALTER TABLE `episode`
  MODIFY `episode_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `grade`
--
ALTER TABLE `grade`
  MODIFY `grade_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `record`
--
ALTER TABLE `record`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `school_city`
--
ALTER TABLE `school_city`
  MODIFY `sc_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
