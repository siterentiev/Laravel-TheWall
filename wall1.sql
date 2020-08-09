-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 09, 2020 at 06:07 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wall1`
--

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2020_08_06_101151_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date`, `user_id`, `_token`, `created_at`, `updated_at`) VALUES
(10, 'Первое по времени', 'В эти выходные собираемся на Таганай', '2020-08-07', 6, 'fr5OrBiOnTorqPEtsA4RVslCQS5dUtz6sIeseLBX', '2020-08-07 08:47:22', '2020-08-07 08:47:22'),
(11, 'Гроза!', 'На город надвигается большая туча', '2020-08-07', 7, 'fr5OrBiOnTorqPEtsA4RVslCQS5dUtz6sIeseLBX', '2020-08-07 11:10:05', '2020-08-07 11:10:05'),
(12, 'Интересная книга', 'Четвертая мировая война. Автор Курпатов. Рекомендуется к прочтению всем программистам', '2020-08-07', 7, 'fr5OrBiOnTorqPEtsA4RVslCQS5dUtz6sIeseLBX', '2020-08-07 11:54:36', '2020-08-07 11:54:36'),
(13, 'Всемирный потоп. Почти', 'Ну и залило же город сегодня ночью', '2020-08-08', 10, 'wFPn6snyOErnXrBYuNDNLwpXOVZ0YBU86sWQs9BS', '2020-08-07 23:49:45', '2020-08-07 23:49:45'),
(14, 'Пробки на Малышева', 'В связи с ремонтом теплотрассы, критически сужена проезжая часть. Днем большие пробки', '2020-08-08', 22, 'VBf5jbEP9RCsNPdRsnBjtnHg7UPI5Vp6eFC7Zlck', '2020-08-08 10:45:55', '2020-08-08 10:45:55'),
(18, 'Вот и закончилось лето', 'Так здорово было этим жарким летом. Мы купались и загорали, гуляли в парке и катались на роликах. Лето вернись!', '2020-08-09', 30, 'G8doeNrjQk5qkP0L2U7FYRUdcXsVEKaLiGucbqKW', '2020-08-09 09:56:57', '2020-08-09 09:56:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Mario', 'mario@email.com', '$2y$10$cPkuNOzo.DdLMkwKU3ikGe5K6/fDOh8Nmlv35stY6YNQ.cKtjcReG', 'psVI934FyQrvILNs2hqySvZLCC0bzDvJrxDooQx9X1hhJynm5IMdxlIEQqts', '2020-08-07 06:46:52', '2020-08-07 06:46:52'),
(7, 'Felicita', 'felicita@email.com', '$2y$10$FcKpugt46PdnnMI4TJKczusBdcgNUSUgJSmnOhVRsdQopeq7tItya', 'iTarpTPBGl50heYH0zgf1rtLynRlGT1g5nNV44HrtLtnRV06pRnMW4gJvVMF', '2020-08-07 11:09:16', '2020-08-07 11:09:16'),
(10, 'Mr Bean', 'boss@email.com', '$2y$10$8KQyHEEROt9.lpaDLs258O7gJWyaiTdH96NOwYeupTx6WjCW3Wvq2', NULL, '2020-08-07 23:48:14', '2020-08-07 23:48:14'),
(22, 'Иван Царевич', 'ivan@email.com', '$2y$10$d7AanspHq8OvvEiu/lh0TO1CydeOxEzxnPULINItDqEnPHYRFVc.W', NULL, '2020-08-08 10:42:49', '2020-08-08 10:42:49'),
(30, 'Фасолька', 'greenbean@email.com', '$2y$10$d645RIya8sSCFy9PxdmaZ.hcxjO490dvgIBAMA3ulYG.fAQ1pEi2K', 'hRHMEyDMvZbw8oM8OonZG8dydO336evc41YtVoyqDBQhTnKad7hkPep3oI0j', '2020-08-09 09:10:21', '2020-08-09 09:10:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
