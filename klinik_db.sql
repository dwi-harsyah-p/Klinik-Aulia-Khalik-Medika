-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2023 pada 11.48
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik_db`
--
CREATE DATABASE IF NOT EXISTS `klinik_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `klinik_db`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodatas`
--

CREATE TABLE `biodatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodatas`
--

INSERT INTO `biodatas` (`id`, `nik`, `name`, `gender`, `date_of_birth`, `address`, `created_at`, `updated_at`) VALUES
(1, 1604101002020762, 'Kameron Ledner', 'Perempuan', '1987-11-22', '8945 Kovacek Curve Suite 020\nPort Horacestad, WY 35205', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(2, 1604101002020831, 'Rex Connelly', 'Laki-laki', '1993-03-24', '5849 Rickey Divide\nStehrview, LA 41380', '2023-07-25 17:19:49', '2023-07-25 17:19:49'),
(3, 1604101002020914, 'Hermina Keeling', 'Laki-laki', '2003-07-10', '475 Hills Groves Suite 985\nCyrusview, AZ 61609-9546', '2023-07-25 17:19:49', '2023-07-25 17:19:49'),
(4, 1604101002020149, 'Roscoe Prosacco', 'Laki-laki', '1974-07-23', '2705 Yost Squares\nDewaynefort, ID 52131', '2023-07-25 17:19:49', '2023-07-25 17:19:49'),
(5, 1604101002020535, 'Brett Herman', 'Laki-laki', '1990-05-27', '24722 Rodriguez Causeway\nPort Elisabury, NM 26199-3917', '2023-07-25 17:19:49', '2023-07-25 17:19:49'),
(6, 1604101002020242, 'Tara Erdman', 'Laki-laki', '1997-04-04', '337 Nellie Motorway\nAnkundingmouth, ND 84411', '2023-07-25 17:19:49', '2023-07-25 17:19:49'),
(7, 1604101002020520, 'Gerda Durgan Jr.', 'Laki-laki', '2019-01-28', '670 Miller Island Apt. 459\nFriesenhaven, KY 57630', '2023-07-25 17:19:49', '2023-07-25 17:19:49'),
(8, 1604101002020391, 'Dr. Garnett Bergnaum IV', 'Perempuan', '1985-04-18', '25917 Lambert Overpass\nDestinland, ME 46043', '2023-07-25 17:19:49', '2023-07-25 17:19:49'),
(9, 1604101002020474, 'Bryana Emmerich', 'Laki-laki', '2022-10-25', '21155 Marvin Divide\nLake Kurtis, TX 55922-7307', '2023-07-25 17:19:49', '2023-07-25 17:19:49'),
(10, 1604101002020644, 'Albina Mohr', 'Laki-laki', '1995-12-31', '79280 Alan Light\nTorphybury, DC 43874', '2023-07-25 17:19:49', '2023-07-25 17:19:49'),
(11, 1604101002020710, 'Raymundo Little', 'Laki-laki', '1985-12-22', '4817 Ulises Crest\nKozeyburgh, SC 01134', '2023-07-25 17:19:49', '2023-07-25 17:19:49'),
(12, 1604101002020485, 'Barbara Prohaska', 'Laki-laki', '2002-05-27', '555 Nicolette Union Apt. 353\nMacejkovicmouth, MT 48613-6999', '2023-07-25 17:19:49', '2023-07-25 17:19:49'),
(13, 1604101002020375, 'Lexie Abshire', 'Laki-laki', '2008-02-20', '6810 Kohler Springs\nOrnside, MT 75808-2751', '2023-07-25 17:19:49', '2023-07-25 17:19:49'),
(14, 1604101002020973, 'Kennedi Frami', 'Perempuan', '2000-04-20', '1475 Norene Skyway Suite 998\nNorth Pollyfurt, PA 35218-3849', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(15, 1604101002020904, 'Mariano Hill', 'Laki-laki', '1970-02-06', '572 Mann Spring\nWilliammouth, OK 51162', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(16, 1604101002020411, 'Dr. Chadd Blick MD', 'Perempuan', '2011-08-15', '2803 Wehner Extension\nAronchester, NM 30426', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(17, 1604101002020695, 'Nicola Will', 'Laki-laki', '1978-06-29', '5767 Josiane Union Suite 526\nLake Samantha, IL 65817-3713', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(18, 1604101002020838, 'Dr. Zackery Goldner', 'Perempuan', '2022-12-08', '91069 Considine Fort Apt. 426\nLake Marianne, IN 01153-2184', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(19, 1604101002020890, 'Emmalee Tromp', 'Laki-laki', '1982-06-28', '986 Zachery Plaza Apt. 514\nStoltenbergchester, MA 29039', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(20, 1604101002020628, 'Tamia Stokes', 'Perempuan', '2014-06-25', '92496 Tremblay Parks Apt. 399\nWest Julianachester, SD 19620-6800', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(21, 1604101002020451, 'Brenda Collins', 'Perempuan', '1979-07-09', '22617 Ettie Harbors\nBruenberg, CO 75341', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(22, 1604101002020145, 'Cathryn Kihn', 'Perempuan', '2004-02-24', '844 Abshire Station\nNorth Ubaldomouth, UT 74376-4708', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(23, 1604101002020514, 'Oswald Blanda', 'Perempuan', '1981-03-28', '186 Alexandria Square\nEast Jarrett, TX 85394-0813', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(24, 1604101002020518, 'Sheldon Aufderhar', 'Laki-laki', '2004-07-16', '96935 Schneider Villages Apt. 040\nSchmelerville, MA 36962', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(25, 1604101002020588, 'Connor Considine DVM', 'Perempuan', '1990-10-01', '800 O\'Hara Highway\nLake Ezequiel, MT 47782', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(26, 1604101002020603, 'Yazmin Mayer', 'Laki-laki', '2002-10-23', '72752 Hartmann Brook Suite 415\nMyrlhaven, WA 11622-2740', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(27, 1604101002020240, 'Arnold Hyatt', 'Laki-laki', '1972-12-31', '63618 Cummings Mount\nWest Caroleville, NC 05405', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(28, 1604101002020899, 'Mr. Herbert Watsica', 'Laki-laki', '2010-04-08', '926 Carroll Springs\nTremblayfurt, VT 11711-1227', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(29, 1604101002020539, 'Miss Elta Wilkinson', 'Laki-laki', '2002-02-14', '504 Hyatt Estate\nEast Frederick, NV 02951', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(30, 1604101002020657, 'Aubrey Kiehn', 'Laki-laki', '1982-04-10', '91489 Jessika Path Apt. 337\nJohnsmouth, CT 19788-2875', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(31, 1604101002020592, 'Ethel Abbott', 'Perempuan', '1974-07-07', '6632 Hessel Hills Apt. 021\nLake Tressie, MD 42709-2316', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(32, 1604101002020627, 'Henriette Green', 'Laki-laki', '1998-06-13', '5617 Helena Knoll\nDenesikmouth, MN 03026-7774', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(33, 1604101002020318, 'Maritza Cremin', 'Perempuan', '1985-05-28', '113 Bettye Plains\nKoeppburgh, ME 98811-7252', '2023-07-25 17:19:50', '2023-07-25 17:19:50'),
(34, 1604101002020529, 'Irving Hand IV', 'Laki-laki', '2021-01-07', '225 Lorenza Lodge Suite 741\nJacobsonfort, MT 31689-8855', '2023-07-25 17:19:51', '2023-07-25 17:19:51'),
(35, 1604101002020977, 'Kathlyn Littel', 'Perempuan', '1970-08-29', '986 Freddy Springs\nPort Daishaborough, NC 34086-0498', '2023-07-25 17:19:51', '2023-07-25 17:19:51'),
(36, 1604101002020960, 'Kadin Hyatt', 'Perempuan', '2021-06-24', '5077 Emile Spring Suite 904\nLake Ted, WV 48937-0762', '2023-07-25 17:19:51', '2023-07-25 17:19:51'),
(37, 1604101002020924, 'Alisa Wunsch Jr.', 'Laki-laki', '2002-12-12', '9080 Pfannerstill Cliff Suite 278\nRaynorchester, OH 79900-6809', '2023-07-25 17:19:51', '2023-07-25 17:19:51'),
(38, 1604101002020670, 'Mr. Colt Satterfield V', 'Perempuan', '2004-06-23', '3316 Haylie Route\nKutchberg, GA 50490', '2023-07-25 17:19:51', '2023-07-25 17:19:51'),
(39, 1604101002020074, 'Alexandre Prohaska', 'Laki-laki', '2021-07-18', '333 Roscoe Freeway\nNolanmouth, AZ 53791-6112', '2023-07-25 17:19:51', '2023-07-25 17:19:51'),
(40, 1604101002020356, 'Prof. Kiera Krajcik', 'Perempuan', '1990-12-15', '448 Charles Plains\nWest Raleighville, NV 64554-9595', '2023-07-25 17:19:51', '2023-07-25 17:19:51'),
(41, 1604101002020497, 'Dr. Emil Dooley III', 'Perempuan', '2004-05-22', '8730 Stephania Plaza\nBrakuschester, MI 24548', '2023-07-25 17:19:51', '2023-07-25 17:19:51'),
(42, 1604101002020850, 'Amira Prosacco', 'Laki-laki', '2002-04-19', '749 Hayes Course Suite 002\nCullenchester, MT 34216', '2023-07-25 17:19:51', '2023-07-25 17:19:51'),
(43, 1604101002020265, 'Gabriel Brown', 'Perempuan', '2013-04-18', '175 Hettinger Club\nNorth Laurineshire, MN 76392', '2023-07-25 17:19:51', '2023-07-25 17:19:51'),
(44, 1604101002020629, 'Blanca Effertz', 'Perempuan', '1994-01-17', '9758 Schulist Camp Apt. 524\nOrphamouth, RI 37292', '2023-07-25 17:19:51', '2023-07-25 17:19:51'),
(45, 1604101002020112, 'Mckenna Kutch III', 'Perempuan', '2011-05-13', '826 Goldner Wall\nEast Myrtisville, OK 19582', '2023-07-25 17:19:51', '2023-07-25 17:19:51'),
(46, 1604101002020299, 'Harold Champlin', 'Perempuan', '1972-01-01', '15108 Hills Rest\nPort Geraldineport, ME 62709', '2023-07-25 17:19:51', '2023-07-25 17:19:51'),
(47, 1604101002020018, 'Aurelio Hackett', 'Perempuan', '1982-01-29', '460 Kelli Shore Apt. 111\nOlsonbury, VA 85016', '2023-07-25 17:19:51', '2023-07-25 17:19:51'),
(48, 1604101002020577, 'Fidel Conroy I', 'Laki-laki', '1991-04-19', '95313 Upton Corners Suite 085\nHeleneville, NH 82656', '2023-07-25 17:19:51', '2023-07-25 17:19:51'),
(49, 1604101002020475, 'Mr. Braxton Franecki II', 'Laki-laki', '2002-07-26', '64526 Willow Tunnel\nSouth Betteton, WV 71758-0972', '2023-07-25 17:19:52', '2023-07-25 17:19:52'),
(50, 1604101002020668, 'Mrs. Alycia O\'Reilly PhD', 'Perempuan', '2008-02-25', '27219 Jerde Fork\nNorth Adele, CA 35236', '2023-07-25 17:19:52', '2023-07-25 17:19:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Tablet', 'tablet', '2023-07-25 17:19:44', '2023-07-25 17:19:44'),
(2, 'Kapsul', 'kapsul', '2023-07-25 17:19:44', '2023-07-25 17:19:44'),
(3, 'Sirup', 'sirup', '2023-07-25 17:19:44', '2023-07-25 17:19:44'),
(4, 'Racik', 'racik', '2023-07-25 17:19:44', '2023-07-25 17:19:44'),
(5, 'Quae accusantium.', 'et-quasi-molestiae-omnis-rem', '2023-07-25 17:19:52', '2023-07-25 17:19:52'),
(6, 'Quis sed blanditiis.', 'molestias-explicabo-ut-nihil-natus-repellendus-et-eum', '2023-07-25 17:19:52', '2023-07-25 17:19:52'),
(7, 'Quisquam nesciunt molestiae.', 'recusandae-rem-et-similique-eum', '2023-07-25 17:19:52', '2023-07-25 17:19:52'),
(8, 'Itaque eligendi.', 'suscipit-est-dolor-consectetur-delectus-expedita', '2023-07-25 17:19:52', '2023-07-25 17:19:52'),
(9, 'Nihil corporis odit.', 'omnis-cumque-eligendi-praesentium-esse-consequatur-quidem', '2023-07-25 17:19:52', '2023-07-25 17:19:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `levels`
--

INSERT INTO `levels` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '2023-07-25 17:19:44', '2023-07-25 17:19:44'),
(2, 'Dokter', 'dokter', '2023-07-25 17:19:44', '2023-07-25 17:19:44'),
(3, 'Farmasi', 'farmasi', '2023-07-25 17:19:44', '2023-07-25 17:19:44'),
(4, 'Pasien', 'pasien', '2023-07-25 17:19:44', '2023-07-25 17:19:44'),
(5, 'Kasi', 'kasi', '2023-07-25 17:19:45', '2023-07-25 17:19:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_logs`
--

CREATE TABLE `login_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip_address` varchar(45) DEFAULT NULL,
  `device_info` text DEFAULT NULL,
  `keterangan` enum('login','logout') NOT NULL DEFAULT 'login',
  `status` enum('success','failed') NOT NULL DEFAULT 'failed',
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `login_logs`
--

INSERT INTO `login_logs` (`id`, `user_id`, `email`, `login_time`, `ip_address`, `device_info`, `keterangan`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'email@email.com', '2023-07-25 17:20:47', '127.0.0.1', '\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36\"', 'login', 'success', 'Login successful.', '2023-07-25 17:20:47', '2023-07-25 17:20:47'),
(2, 1, 'email@email.com', '2023-07-25 17:20:47', '127.0.0.1', '\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36\"', 'logout', 'success', 'Logout successful.', '2023-07-25 17:20:58', '2023-07-25 17:20:58'),
(3, 1, 'email@email.com', '2023-07-25 17:25:25', '127.0.0.1', '\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36\"', 'login', 'success', 'Login successful.', '2023-07-25 17:25:25', '2023-07-25 17:25:25'),
(4, 2, 'lehner.katheryn@example.org', '2023-07-25 17:25:46', '127.0.0.1', '\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36\"', 'login', 'success', 'Login successful.', '2023-07-25 17:25:46', '2023-07-25 17:25:46'),
(5, 2, 'lehner.katheryn@example.org', '2023-07-25 17:25:46', '127.0.0.1', '\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36\"', 'logout', 'success', 'Logout successful.', '2023-07-25 17:50:28', '2023-07-25 17:50:28'),
(6, NULL, 'email@email.com', '2023-07-25 17:51:00', '127.0.0.1', '\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36\"', 'login', 'failed', 'Login failed. Email or Password is incorrect.', '2023-07-25 17:51:00', '2023-07-25 17:51:00'),
(7, 1, 'email@email.com', '2023-07-25 17:25:25', '127.0.0.1', '\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36\"', 'logout', 'success', 'Logout successful.', '2023-07-25 18:22:37', '2023-07-25 18:22:37'),
(8, 1, 'email@email.com', '2023-07-25 18:22:43', '127.0.0.1', '\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36\"', 'login', 'success', 'Login successful.', '2023-07-25 18:22:43', '2023-07-25 18:22:43'),
(9, 1, 'email@email.com', '2023-07-25 18:22:43', '127.0.0.1', '\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36\"', 'logout', 'success', 'Logout successful.', '2023-07-25 18:31:05', '2023-07-25 18:31:05'),
(10, 1, 'email@email.com', '2023-07-25 18:31:12', '127.0.0.1', '\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36\"', 'login', 'success', 'Login successful.', '2023-07-25 18:31:12', '2023-07-25 18:31:12'),
(11, NULL, 'julius.von@example.org', '2023-07-25 18:32:47', '127.0.0.1', '\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36\"', 'login', 'failed', 'Login failed. Email or Password is incorrect.', '2023-07-25 18:32:47', '2023-07-25 18:32:47'),
(12, 4, 'julius.von@example.org', '2023-07-25 18:32:53', '127.0.0.1', '\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36\"', 'login', 'success', 'Login successful.', '2023-07-25 18:32:53', '2023-07-25 18:32:53'),
(13, 4, 'julius.von@example.org', '2023-07-25 18:32:53', '127.0.0.1', '\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36\"', 'logout', 'success', 'Logout successful.', '2023-07-25 18:33:16', '2023-07-25 18:33:16'),
(14, 1, 'email@email.com', '2023-07-25 18:31:12', '127.0.0.1', '\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36\"', 'logout', 'success', 'Logout successful.', '2023-07-25 18:33:26', '2023-07-25 18:33:26'),
(15, 1, 'email@email.com', '2023-07-26 09:36:37', '127.0.0.1', '\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36\"', 'login', 'success', 'Login successful.', '2023-07-26 09:36:37', '2023-07-26 09:36:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `dosis` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `medicines`
--

INSERT INTO `medicines` (`id`, `category_id`, `name`, `dosis`, `stock`, `created_at`, `updated_at`) VALUES
(1, 4, 'Tempore.', 'Earum in.', 17, '2023-07-25 17:19:52', '2023-07-25 17:19:52'),
(2, 3, 'Iste.', 'Soluta.', 17, '2023-07-25 17:19:52', '2023-07-25 17:19:52'),
(3, 1, 'Magnam.', 'Et praesentium.', 13, '2023-07-25 17:19:52', '2023-07-25 17:19:52'),
(4, 4, 'Possimus.', 'Sapiente.', 11, '2023-07-25 17:19:52', '2023-07-25 17:19:52'),
(5, 4, 'Enim.', 'Laudantium.', 17, '2023-07-25 17:19:52', '2023-07-25 17:19:52'),
(6, 1, 'Et.', 'Qui magni.', 19, '2023-07-25 17:19:53', '2023-07-25 17:19:53'),
(7, 3, 'Doloremque est.', 'Mollitia tempore.', 15, '2023-07-25 17:19:53', '2023-07-25 17:19:53'),
(8, 3, 'Autem.', 'Maxime tenetur.', 12, '2023-07-25 17:19:53', '2023-07-25 17:19:53'),
(9, 3, 'Porro vero.', 'Quo sequi.', 10, '2023-07-25 17:19:53', '2023-07-25 17:19:53'),
(10, 3, 'Est.', 'Sit alias.', 20, '2023-07-25 17:19:53', '2023-07-25 17:19:53'),
(11, 4, 'Nostrum distinctio.', 'Nobis aliquid.', 20, '2023-07-25 17:19:53', '2023-07-25 17:19:53'),
(12, 4, 'Dicta.', 'Accusamus iste.', 17, '2023-07-25 17:19:53', '2023-07-25 17:19:53'),
(13, 2, 'Omnis optio.', 'Aut.', 17, '2023-07-25 17:19:53', '2023-07-25 17:19:53'),
(14, 2, 'Aut.', 'Reprehenderit molestiae.', 12, '2023-07-25 17:19:53', '2023-07-25 17:19:53'),
(15, 1, 'Nobis.', 'Asperiores animi.', 14, '2023-07-25 17:19:53', '2023-07-25 17:19:53'),
(16, 1, 'Laborum est.', 'Sit.', 13, '2023-07-25 17:19:53', '2023-07-25 17:19:53'),
(17, 2, 'Possimus.', 'Eaque.', 11, '2023-07-25 17:19:53', '2023-07-25 17:19:53'),
(18, 4, 'Et eos.', 'Esse fuga.', 11, '2023-07-25 17:19:53', '2023-07-25 17:19:53'),
(19, 1, 'Ducimus.', 'Alias.', 12, '2023-07-25 17:19:53', '2023-07-25 17:19:53'),
(20, 1, 'Ratione quisquam.', 'Accusamus.', 19, '2023-07-25 17:19:53', '2023-07-25 17:19:53'),
(21, 1, 'Iste.', 'Nihil.', 17, '2023-07-25 17:19:53', '2023-07-25 17:19:53'),
(22, 4, 'Nihil.', 'Dolorem.', 18, '2023-07-25 17:19:53', '2023-07-25 17:19:53'),
(23, 3, 'Et quae.', 'Cumque earum.', 13, '2023-07-25 17:19:54', '2023-07-25 17:19:54'),
(24, 1, 'Ea pariatur.', 'Labore officiis.', 11, '2023-07-25 17:19:54', '2023-07-25 17:19:54'),
(25, 4, 'Blanditiis sunt.', 'Est vel.', 16, '2023-07-25 17:19:54', '2023-07-25 17:19:54'),
(26, 3, 'Sint qui.', 'Nobis rerum.', 12, '2023-07-25 17:19:54', '2023-07-25 17:19:54'),
(27, 2, 'Aut.', 'Non.', 15, '2023-07-25 17:19:54', '2023-07-25 17:19:54'),
(28, 3, 'Veritatis ea.', 'Cum et.', 12, '2023-07-25 17:19:54', '2023-07-25 17:19:54'),
(29, 1, 'Voluptatem rerum.', 'Temporibus et.', 19, '2023-07-25 17:19:54', '2023-07-25 17:19:54'),
(30, 1, 'Assumenda harum.', 'Quibusdam.', 15, '2023-07-25 17:19:54', '2023-07-25 17:19:54'),
(31, 3, 'Assumenda quia.', 'Sequi.', 11, '2023-07-25 17:19:54', '2023-07-25 17:19:54'),
(32, 1, 'In odit.', 'Dolorum sapiente.', 10, '2023-07-25 17:19:54', '2023-07-25 17:19:54'),
(33, 1, 'Autem minima.', 'Alias ratione.', 17, '2023-07-25 17:19:54', '2023-07-25 17:19:54'),
(34, 2, 'Voluptas a.', 'Quam in.', 15, '2023-07-25 17:19:54', '2023-07-25 17:19:54'),
(35, 3, 'A.', 'At.', 19, '2023-07-25 17:19:54', '2023-07-25 17:19:54'),
(36, 1, 'Autem.', 'Inventore.', 17, '2023-07-25 17:19:54', '2023-07-25 17:19:54'),
(37, 1, 'Non.', 'Error quia.', 15, '2023-07-25 17:19:54', '2023-07-25 17:19:54'),
(38, 1, 'Architecto et.', 'Libero quia.', 20, '2023-07-25 17:19:54', '2023-07-25 17:19:54'),
(39, 1, 'Consequuntur vel.', 'Quas unde.', 11, '2023-07-25 17:19:54', '2023-07-25 17:19:54'),
(40, 2, 'Eum ut.', 'Ducimus est.', 10, '2023-07-25 17:19:55', '2023-07-25 17:19:55'),
(41, 3, 'Fugiat harum.', 'Mollitia.', 14, '2023-07-25 17:19:55', '2023-07-25 17:19:55'),
(42, 3, 'Dolores similique.', 'Ut laudantium.', 16, '2023-07-25 17:19:55', '2023-07-25 17:19:55'),
(43, 2, 'Quibusdam et.', 'Eveniet temporibus.', 10, '2023-07-25 17:19:55', '2023-07-25 17:19:55'),
(44, 4, 'Pariatur tenetur.', 'Maxime est.', 15, '2023-07-25 17:19:55', '2023-07-25 17:19:55'),
(45, 3, 'Doloribus eveniet.', 'Et voluptatem.', 14, '2023-07-25 17:19:55', '2023-07-25 17:19:55'),
(46, 3, 'Voluptate.', 'Ut deleniti.', 10, '2023-07-25 17:19:55', '2023-07-25 17:19:55'),
(47, 1, 'Est nesciunt.', 'Ullam dolores.', 12, '2023-07-25 17:19:55', '2023-07-25 17:19:55'),
(48, 3, 'Quis voluptatem.', 'Et et.', 13, '2023-07-25 17:19:55', '2023-07-25 17:19:55'),
(49, 2, 'Assumenda et.', 'Nulla.', 19, '2023-07-25 17:19:55', '2023-07-25 17:19:55'),
(50, 2, 'Et eos.', 'Molestias.', 10, '2023-07-25 17:19:55', '2023-07-25 17:19:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_15_045537_create_medicines_table', 1),
(6, '2022_07_15_045722_create_categories_table', 1),
(7, '2022_07_15_051117_create_biodatas_table', 1),
(8, '2022_07_15_230445_create_levels_table', 1),
(9, '2022_07_15_235151_create_records_table', 1),
(10, '2022_07_16_054021_create_queues_table', 1),
(11, '2023_07_25_232301_create_loginlogs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `queues`
--

CREATE TABLE `queues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_done` tinyint(1) NOT NULL DEFAULT 0,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `records`
--

CREATE TABLE `records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `complaint` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `medicine_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `poly` varchar(255) NOT NULL,
  `refferal` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `records`
--

INSERT INTO `records` (`id`, `complaint`, `diagnosis`, `action`, `medicine_id`, `qty`, `user_id`, `poly`, `refferal`, `created_at`, `updated_at`) VALUES
(1, 'Suscipit impedit.', 'Ipsam et.', 'A et.', 16, 7, 1, 'Cumque.', 'Aliquam nostrum.', '2023-07-25 17:19:56', '2023-07-25 17:19:56'),
(2, 'Eos quo corporis.', 'Et error nemo.', 'In modi.', 3, 8, 36, 'Amet.', 'Dolore sed.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(3, 'Eligendi sapiente quia.', 'Ullam maxime.', 'Quis ratione.', 20, 3, 15, 'Facere nam.', 'Tenetur.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(4, 'Ut necessitatibus.', 'Perspiciatis eligendi quisquam.', 'Dolore ut.', 16, 5, 1, 'Voluptas voluptatem.', 'Dolorem.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(5, 'Numquam mollitia.', 'Odit dignissimos accusantium.', 'Enim.', 7, 5, 36, 'Expedita.', 'Libero sint.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(6, 'Magnam debitis et.', 'Sunt velit.', 'Voluptatem.', 10, 5, 50, 'Est.', 'Fugiat totam.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(7, 'Voluptate distinctio.', 'Cupiditate libero laudantium.', 'Nesciunt aut.', 7, 9, 4, 'Blanditiis.', 'Libero necessitatibus.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(8, 'Omnis ea voluptatem.', 'In aut accusantium.', 'Iure quo.', 11, 1, 37, 'Necessitatibus ut.', 'Quasi et.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(9, 'Laboriosam neque recusandae.', 'Voluptatem velit.', 'Praesentium.', 4, 3, 36, 'Maxime.', 'Vel rem.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(10, 'Quae enim.', 'Molestiae ea.', 'Placeat.', 6, 5, 47, 'Aut sed.', 'Iste veritatis.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(11, 'Sed itaque illo.', 'Voluptatem alias.', 'Recusandae blanditiis.', 20, 1, 47, 'Sed sunt.', 'Quo earum.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(12, 'Amet consequatur non.', 'Quae inventore.', 'Nobis.', 10, 6, 42, 'Repellendus fugiat.', 'Et.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(13, 'Velit facere exercitationem.', 'Magni rerum maiores.', 'Impedit qui.', 10, 3, 42, 'Odio sed.', 'Qui sit.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(14, 'Pariatur itaque in.', 'Recusandae saepe.', 'Eius.', 13, 5, 47, 'Itaque.', 'Qui.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(15, 'Alias est corporis.', 'Quisquam doloribus cum.', 'Minima.', 2, 1, 25, 'Quisquam qui.', 'Vel.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(16, 'Aut nihil tenetur.', 'Officiis ad molestiae.', 'Enim sunt.', 15, 6, 4, 'Et rerum.', 'Aut.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(17, 'In impedit.', 'Cupiditate consequatur in.', 'Consequatur.', 11, 4, 26, 'Dolorem eos.', 'Autem.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(18, 'Asperiores enim.', 'Delectus assumenda est.', 'Repudiandae dicta.', 10, 8, 1, 'Harum.', 'Qui sit.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(19, 'Sit itaque.', 'Praesentium ut.', 'Eligendi nihil.', 6, 7, 4, 'Consectetur.', 'Sapiente perspiciatis.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(20, 'Quis vero sit.', 'Veniam atque incidunt.', 'Nihil.', 19, 3, 40, 'Earum consectetur.', 'Doloremque a.', '2023-07-25 17:19:57', '2023-07-25 17:19:57'),
(21, 'Eius voluptatem.', 'Velit molestias.', 'Et laborum.', 2, 9, 1, 'Rerum.', 'Illum.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(22, 'Reiciendis sunt consectetur.', 'Est iure dolore.', 'Mollitia beatae.', 14, 5, 1, 'Similique.', 'Dolores.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(23, 'Quia qui officiis.', 'Necessitatibus nulla.', 'Dolor.', 18, 8, 26, 'Nam nihil.', 'Aut.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(24, 'Saepe tempora.', 'Sequi non.', 'Dicta.', 3, 8, 37, 'Amet maiores.', 'Eius eos.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(25, 'Doloremque id.', 'Et omnis.', 'Et.', 11, 3, 37, 'Ipsam.', 'Aut.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(26, 'Sint cupiditate omnis.', 'Molestiae quia aspernatur.', 'Suscipit consequuntur.', 19, 6, 26, 'Illum.', 'Illo.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(27, 'Corporis laboriosam placeat.', 'Asperiores quam ratione.', 'Distinctio.', 18, 7, 25, 'Quam.', 'Molestias aut.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(28, 'Est velit.', 'Est unde.', 'Eos.', 19, 3, 15, 'Dolorum et.', 'Sed beatae.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(29, 'Alias alias incidunt.', 'Quas aut.', 'Nihil.', 15, 5, 36, 'Dignissimos.', 'Nulla.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(30, 'Minus cumque possimus.', 'Voluptates quam.', 'Modi.', 6, 6, 15, 'In tempore.', 'Aut recusandae.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(31, 'Ipsam fugit aut.', 'Optio asperiores quibusdam.', 'A culpa.', 11, 5, 47, 'Impedit doloremque.', 'Consectetur.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(32, 'Placeat voluptatem repudiandae.', 'Vel laboriosam.', 'Possimus.', 9, 2, 47, 'Minima.', 'Vero.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(33, 'Architecto voluptatem.', 'Asperiores laudantium quisquam.', 'Minima animi.', 13, 7, 47, 'Aut.', 'Dolor assumenda.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(34, 'Vel sapiente.', 'Quibusdam reprehenderit delectus.', 'Animi.', 11, 10, 26, 'Aperiam est.', 'Repellendus.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(35, 'Eligendi doloribus omnis.', 'Itaque aut.', 'Modi ut.', 11, 10, 47, 'Eaque.', 'Asperiores.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(36, 'Illum est.', 'Illum aliquid ea.', 'Placeat pariatur.', 5, 3, 50, 'Placeat.', 'Maxime unde.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(37, 'Nemo enim molestiae.', 'Sit quisquam incidunt.', 'Id animi.', 2, 4, 1, 'Eum et.', 'Nihil.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(38, 'Ut vel.', 'Odio quidem odio.', 'Sed.', 13, 6, 50, 'Voluptatem accusamus.', 'Exercitationem.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(39, 'Id enim.', 'Neque vel.', 'Impedit.', 11, 9, 32, 'Perferendis voluptatem.', 'Vel.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(40, 'Ea odio.', 'Dolores ut quaerat.', 'Eos.', 17, 3, 1, 'Tempore deserunt.', 'Distinctio.', '2023-07-25 17:19:58', '2023-07-25 17:19:58'),
(41, 'Nam voluptatem.', 'Quasi ad.', 'Hic.', 17, 2, 32, 'Sunt necessitatibus.', 'Ratione veniam.', '2023-07-25 17:19:59', '2023-07-25 17:19:59'),
(42, 'Repudiandae quibusdam.', 'In ut autem.', 'Molestiae natus.', 7, 5, 38, 'Alias unde.', 'Minima.', '2023-07-25 17:19:59', '2023-07-25 17:19:59'),
(43, 'Quo eius eius.', 'Aspernatur maxime.', 'Blanditiis.', 19, 6, 1, 'Rerum.', 'Architecto sapiente.', '2023-07-25 17:19:59', '2023-07-25 17:19:59'),
(44, 'Molestias quisquam qui.', 'Non et.', 'Reiciendis est.', 12, 7, 1, 'Dicta.', 'Soluta saepe.', '2023-07-25 17:19:59', '2023-07-25 17:19:59'),
(45, 'Saepe autem.', 'Cumque quae.', 'Esse est.', 11, 2, 13, 'Qui.', 'Odit laboriosam.', '2023-07-25 17:19:59', '2023-07-25 17:19:59'),
(46, 'Enim adipisci.', 'Quia ut.', 'Voluptate id.', 6, 1, 38, 'Vel.', 'Labore accusantium.', '2023-07-25 17:19:59', '2023-07-25 17:19:59'),
(47, 'Nihil quibusdam nulla.', 'Explicabo minus optio.', 'Voluptas neque.', 6, 4, 15, 'Autem facilis.', 'Eveniet doloribus.', '2023-07-25 17:19:59', '2023-07-25 17:19:59'),
(48, 'Delectus voluptatem.', 'Itaque magnam.', 'Modi soluta.', 18, 6, 25, 'Voluptatibus.', 'Est.', '2023-07-25 17:19:59', '2023-07-25 17:19:59'),
(49, 'Dolor fugiat.', 'Vitae ut.', 'Neque.', 1, 1, 50, 'Odit.', 'Iste quos.', '2023-07-25 17:19:59', '2023-07-25 17:19:59'),
(50, 'Assumenda veniam sed.', 'Cum omnis.', 'Error.', 20, 3, 47, 'Quod.', 'Labore ad.', '2023-07-25 17:19:59', '2023-07-25 17:19:59'),
(51, 'Quis sit.', 'Deserunt veritatis.', 'Quam.', 13, 9, 26, 'Iure et.', 'Ut.', '2023-07-25 17:19:59', '2023-07-25 17:19:59'),
(52, 'Et qui ut.', 'Voluptatem ut voluptatem.', 'Dolore totam.', 15, 3, 42, 'Eveniet sunt.', 'Omnis.', '2023-07-25 17:19:59', '2023-07-25 17:19:59'),
(53, 'Quam consectetur.', 'Aut accusantium voluptatem.', 'Ratione consectetur.', 6, 9, 47, 'Sapiente pariatur.', 'Est.', '2023-07-25 17:19:59', '2023-07-25 17:19:59'),
(54, 'Ad aut.', 'Quibusdam consequuntur quos.', 'Non iste.', 19, 4, 26, 'Consequatur.', 'Qui.', '2023-07-25 17:19:59', '2023-07-25 17:19:59'),
(55, 'Voluptas ea iusto.', 'Sit magni.', 'Minima doloremque.', 10, 5, 38, 'Accusamus.', 'Ducimus doloremque.', '2023-07-25 17:19:59', '2023-07-25 17:19:59'),
(56, 'Adipisci voluptatem tenetur.', 'Quos sint suscipit.', 'Dolore aut.', 4, 10, 38, 'Placeat corrupti.', 'Repudiandae.', '2023-07-25 17:19:59', '2023-07-25 17:19:59'),
(57, 'Error reiciendis.', 'Accusantium dolor.', 'Voluptatem.', 10, 2, 40, 'Quaerat odit.', 'Magni.', '2023-07-25 17:20:00', '2023-07-25 17:20:00'),
(58, 'Iusto asperiores eaque.', 'Autem et.', 'Dolorem ut.', 5, 9, 25, 'Quia.', 'Fuga incidunt.', '2023-07-25 17:20:00', '2023-07-25 17:20:00'),
(59, 'Qui eveniet.', 'Eos saepe dolor.', 'Error.', 5, 8, 36, 'Est.', 'Consequuntur facilis.', '2023-07-25 17:20:00', '2023-07-25 17:20:00'),
(60, 'Quasi sequi ea.', 'Atque aspernatur modi.', 'Aut.', 5, 3, 36, 'Aut.', 'Dolorem.', '2023-07-25 17:20:00', '2023-07-25 17:20:00'),
(61, 'Voluptatem excepturi.', 'Fuga quia asperiores.', 'Quisquam tempora.', 9, 3, 47, 'Unde.', 'Sed sunt.', '2023-07-25 17:20:00', '2023-07-25 17:20:00'),
(62, 'Est rerum quis.', 'Omnis totam quibusdam.', 'Neque.', 6, 10, 25, 'Autem deserunt.', 'Optio molestias.', '2023-07-25 17:20:00', '2023-07-25 17:20:00'),
(63, 'Corporis voluptas.', 'Eum nam natus.', 'Quis aut.', 18, 2, 13, 'Facilis.', 'Pariatur.', '2023-07-25 17:20:00', '2023-07-25 17:20:00'),
(64, 'Quaerat veritatis.', 'Corporis dolores.', 'Fuga quod.', 9, 6, 36, 'Autem.', 'Saepe.', '2023-07-25 17:20:00', '2023-07-25 17:20:00'),
(65, 'Iste ut ad.', 'Quibusdam temporibus.', 'Est.', 16, 10, 38, 'Quas quia.', 'Sunt.', '2023-07-25 17:20:00', '2023-07-25 17:20:00'),
(66, 'Ab doloribus dolorem.', 'Qui ratione.', 'Dicta aut.', 17, 8, 40, 'Voluptas.', 'In.', '2023-07-25 17:20:00', '2023-07-25 17:20:00'),
(67, 'Sed et atque.', 'Odit animi in.', 'Ducimus.', 14, 8, 32, 'Sed.', 'Aut illo.', '2023-07-25 17:20:00', '2023-07-25 17:20:00'),
(68, 'Cumque hic.', 'Nihil et maiores.', 'Commodi.', 4, 3, 40, 'Enim.', 'Quaerat.', '2023-07-25 17:20:00', '2023-07-25 17:20:00'),
(69, 'Quo aut velit.', 'Et alias.', 'Provident.', 6, 4, 32, 'Dicta.', 'Veritatis.', '2023-07-25 17:20:00', '2023-07-25 17:20:00'),
(70, 'Ut impedit.', 'Quod voluptas.', 'Autem enim.', 7, 8, 36, 'Voluptatibus tempore.', 'Error dolorem.', '2023-07-25 17:20:00', '2023-07-25 17:20:00'),
(71, 'Aperiam quas.', 'Enim ut repellat.', 'Vel.', 14, 6, 40, 'Reprehenderit eos.', 'Ducimus fugiat.', '2023-07-25 17:20:00', '2023-07-25 17:20:00'),
(72, 'Explicabo error vero.', 'Unde qui.', 'Asperiores eligendi.', 3, 2, 42, 'Molestiae quibusdam.', 'Molestias aut.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(73, 'Dolore et sint.', 'Et pariatur.', 'In.', 20, 10, 36, 'Eius eaque.', 'Quos consequatur.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(74, 'Amet nisi.', 'Ut porro.', 'Perferendis.', 1, 9, 32, 'Ipsum.', 'Esse rerum.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(75, 'Magnam accusamus sit.', 'Maiores cumque nulla.', 'Ratione ut.', 3, 10, 15, 'Consequatur.', 'Mollitia.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(76, 'Qui error accusantium.', 'Quidem blanditiis qui.', 'Ut.', 20, 1, 25, 'Sit omnis.', 'Culpa.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(77, 'Dolor qui.', 'Sed qui beatae.', 'Quas.', 11, 3, 50, 'Minima.', 'Reiciendis qui.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(78, 'Dolorem laboriosam non.', 'Excepturi dolor.', 'Quisquam.', 3, 5, 36, 'Rerum.', 'Molestiae nisi.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(79, 'Possimus quos ex.', 'Ea necessitatibus.', 'Eum.', 19, 1, 13, 'Cumque aut.', 'Ut earum.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(80, 'Qui ut quibusdam.', 'Beatae odit.', 'Odio.', 12, 5, 13, 'Harum.', 'Numquam mollitia.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(81, 'Eligendi aut doloremque.', 'Incidunt nemo.', 'Mollitia.', 2, 8, 15, 'Deleniti qui.', 'Consectetur.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(82, 'Quia ipsam maiores.', 'Rem alias.', 'Aut.', 12, 6, 4, 'Maxime quia.', 'Eum non.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(83, 'Vero repellat.', 'Velit ratione.', 'Aspernatur iste.', 11, 10, 36, 'Et.', 'Necessitatibus officia.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(84, 'Quos ab nulla.', 'Officiis accusamus.', 'Commodi.', 8, 1, 38, 'Sunt doloremque.', 'Et.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(85, 'Id ut.', 'Sit eligendi.', 'Aperiam.', 11, 7, 26, 'Odit.', 'Molestiae repellat.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(86, 'Maiores ab aut.', 'Consequuntur rerum doloremque.', 'Voluptatibus minima.', 17, 5, 25, 'Eveniet hic.', 'Fugit omnis.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(87, 'Quod et quo.', 'Non suscipit.', 'Sint.', 16, 7, 13, 'Autem iste.', 'Dolorum sed.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(88, 'Est sint laboriosam.', 'Pariatur fugiat.', 'Mollitia perferendis.', 18, 5, 32, 'Aut.', 'Sequi et.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(89, 'Alias velit.', 'Sed minima exercitationem.', 'Est.', 1, 2, 40, 'Atque fugit.', 'Optio aperiam.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(90, 'Iure quo enim.', 'Officia veritatis molestias.', 'Dicta quos.', 6, 10, 1, 'Blanditiis.', 'Ipsum.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(91, 'Saepe deserunt eaque.', 'Cupiditate culpa officia.', 'Qui.', 15, 9, 36, 'Voluptatibus.', 'In voluptas.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(92, 'Officiis nulla illum.', 'Illo aut.', 'Voluptas.', 2, 4, 36, 'Assumenda voluptatibus.', 'Ex corrupti.', '2023-07-25 17:20:01', '2023-07-25 17:20:01'),
(93, 'Mollitia eligendi enim.', 'Quis quibusdam consequatur.', 'Placeat.', 9, 10, 40, 'Et soluta.', 'Dolorum velit.', '2023-07-25 17:20:02', '2023-07-25 17:20:02'),
(94, 'Et excepturi dolores.', 'Sequi labore voluptatem.', 'Iure quisquam.', 5, 9, 50, 'Rerum et.', 'Totam.', '2023-07-25 17:20:02', '2023-07-25 17:20:02'),
(95, 'Mollitia dolor.', 'Quo amet rerum.', 'Dolorum aliquam.', 4, 4, 36, 'Consequatur qui.', 'Sunt.', '2023-07-25 17:20:02', '2023-07-25 17:20:02'),
(96, 'Eum perferendis quasi.', 'Ullam qui.', 'Nulla.', 17, 9, 40, 'Et.', 'Est neque.', '2023-07-25 17:20:02', '2023-07-25 17:20:02'),
(97, 'Maiores rerum.', 'Ea voluptas.', 'Nesciunt.', 15, 8, 37, 'Rerum inventore.', 'Error molestiae.', '2023-07-25 17:20:02', '2023-07-25 17:20:02'),
(98, 'Necessitatibus numquam ullam.', 'Beatae quasi iste.', 'Omnis officiis.', 19, 7, 37, 'Impedit corrupti.', 'A.', '2023-07-25 17:20:02', '2023-07-25 17:20:02'),
(99, 'Odit et est.', 'Rem hic.', 'Ipsum consectetur.', 10, 5, 1, 'Iste.', 'Explicabo.', '2023-07-25 17:20:02', '2023-07-25 17:20:02'),
(100, 'Corrupti et ea.', 'Nesciunt est impedit.', 'Illo et.', 10, 10, 1, 'Autem.', 'Blanditiis dolor.', '2023-07-25 17:20:02', '2023-07-25 17:20:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `biodata_id` bigint(20) UNSIGNED NOT NULL,
  `level_id` bigint(20) UNSIGNED NOT NULL DEFAULT 4,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `biodata_id`, `level_id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 25, 1, 'ruby.nolan', 'email@email.com', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FiI2GBLFVdfd1XMEd0uyIKUmiEk7qCjNZGzLGCqcF4aMLc9Tw4ZrhALAfNQG', '2023-07-25 17:19:45', '2023-07-25 17:19:45'),
(2, 49, 1, 'eric.adams', 'lehner.katheryn@example.org', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GSqKjQr12tNDzoqRal20GRXClO1vQb5OQqUYoCL404FGwU9NreKVmGQpN12L', '2023-07-25 17:19:45', '2023-07-25 17:19:45'),
(3, 18, 1, 'pfeffer.kale', 'darien56@example.net', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wyFA53CHm9', '2023-07-25 17:19:45', '2023-07-25 17:19:45'),
(4, 1, 4, 'tre.dubuque', 'julius.von@example.org', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RZMGlGB8qROzhy66ssEnAw4l96ejHICgQ5IRmEdwBmAMlub7pGLiX0bwE6d1', '2023-07-25 17:19:45', '2023-07-25 17:19:45'),
(5, 23, 3, 'sanford.summer', 'murazik.noemi@example.net', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AC0RHbgxlW', '2023-07-25 17:19:46', '2023-07-25 17:19:46'),
(6, 4, 3, 'viviane.funk', 'boyle.rosalyn@example.com', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IklRyaiIB9', '2023-07-25 17:19:46', '2023-07-25 17:19:46'),
(7, 19, 2, 'chamill', 'kuhic.rashad@example.net', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'F7lokPGDGl', '2023-07-25 17:19:46', '2023-07-25 17:19:46'),
(8, 42, 3, 'schowalter.milo', 'ashly.schowalter@example.com', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'O9GSA02MXT', '2023-07-25 17:19:46', '2023-07-25 17:19:46'),
(9, 8, 1, 'anissa.hagenes', 'metz.queen@example.com', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JGB20ZINFa', '2023-07-25 17:19:46', '2023-07-25 17:19:46'),
(10, 43, 3, 'marietta.maggio', 'qglover@example.com', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'd6IDwb8FQ5', '2023-07-25 17:19:46', '2023-07-25 17:19:46'),
(11, 15, 3, 'mann.erika', 'lhackett@example.com', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aTXs2d8o8i', '2023-07-25 17:19:46', '2023-07-25 17:19:46'),
(12, 3, 3, 'saltenwerth', 'daugherty.meda@example.org', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'b3Ij82nzxB', '2023-07-25 17:19:46', '2023-07-25 17:19:46'),
(13, 30, 4, 'schmeler.timothy', 'wwelch@example.net', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ns0CoIT2Bk', '2023-07-25 17:19:46', '2023-07-25 17:19:46'),
(14, 37, 2, 'rjenkins', 'aric.schimmel@example.org', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uO8r1Ccfd8', '2023-07-25 17:19:46', '2023-07-25 17:19:46'),
(15, 14, 4, 'kathryne36', 'wsipes@example.net', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4zQhOiBFFK', '2023-07-25 17:19:46', '2023-07-25 17:19:46'),
(16, 26, 2, 'darron70', 'katlynn41@example.org', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'U3HPad1B0x', '2023-07-25 17:19:46', '2023-07-25 17:19:46'),
(17, 38, 2, 'wrutherford', 'dallas86@example.org', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kqJu2BD96E', '2023-07-25 17:19:46', '2023-07-25 17:19:46'),
(18, 44, 3, 'akonopelski', 'xheller@example.com', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'iRCNAKQi9y', '2023-07-25 17:19:46', '2023-07-25 17:19:46'),
(19, 11, 1, 'npouros', 'gprosacco@example.net', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'u16n3gf5ET', '2023-07-25 17:19:46', '2023-07-25 17:19:46'),
(20, 29, 1, 'katarina.walter', 'helena61@example.net', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8sfOuRmNtv', '2023-07-25 17:19:47', '2023-07-25 17:19:47'),
(21, 10, 1, 'gruecker', 'torp.dominique@example.net', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'btqZjTFqHn', '2023-07-25 17:19:47', '2023-07-25 17:19:47'),
(22, 33, 1, 'graham.ibrahim', 'augusta.lowe@example.net', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jV3K1KWS9t', '2023-07-25 17:19:47', '2023-07-25 17:19:47'),
(23, 41, 3, 'nat.schumm', 'gdamore@example.net', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gODKltJGmr', '2023-07-25 17:19:47', '2023-07-25 17:19:47'),
(24, 36, 3, 'jorge38', 'adeline.labadie@example.org', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5sa1jwYnhm', '2023-07-25 17:19:47', '2023-07-25 17:19:47'),
(25, 6, 4, 'gilbert65', 'rrunolfsdottir@example.net', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JW4I3aY7v5', '2023-07-25 17:19:47', '2023-07-25 17:19:47'),
(26, 13, 4, 'vkling', 'karolann75@example.org', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'I2t587Xnfn', '2023-07-25 17:19:47', '2023-07-25 17:19:47'),
(27, 5, 1, 'yasmine00', 'kris.karlee@example.org', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1iKgqghnCB', '2023-07-25 17:19:47', '2023-07-25 17:19:47'),
(28, 7, 3, 'schoen.eliza', 'yrosenbaum@example.org', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1gAxk6MCyI', '2023-07-25 17:19:47', '2023-07-25 17:19:47'),
(29, 45, 3, 'fritsch.turner', 'royal.becker@example.org', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DKlD1khB2Q', '2023-07-25 17:19:47', '2023-07-25 17:19:47'),
(30, 32, 3, 'tromp.andreanne', 'kristopher.white@example.com', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pTZqmuXjYd', '2023-07-25 17:19:47', '2023-07-25 17:19:47'),
(31, 35, 1, 'xpagac', 'cleuschke@example.net', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'EuMZrNDLyX', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(32, 46, 4, 'murray.sandra', 'patsy.wilderman@example.org', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zTEsOd2k0v', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(33, 21, 2, 'lon70', 'cmraz@example.com', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YzEQP3RLqX', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(34, 47, 3, 'cory.smitham', 'alberta63@example.net', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yviKE8AQIQ', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(35, 12, 3, 'myrtie.ledner', 'schamberger.aida@example.org', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qWUQ7QmToI', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(36, 2, 4, 'jamar.kutch', 'cyril.olson@example.org', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kojKIsWozE', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(37, 9, 4, 'jmante', 'miracle.cronin@example.org', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'i3PMtOsSGs', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(38, 16, 4, 'wiza.rosemary', 'reichert.enrico@example.com', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1iyxNksMHe', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(39, 28, 2, 'wilfred06', 'danielle.sporer@example.net', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RVyG8kPig2', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(40, 20, 4, 'adrian37', 'marquardt.maureen@example.com', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '72VG7ZUM3B', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(41, 48, 2, 'rosetta29', 'nikolaus.crawford@example.net', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'emt9m6EgQp', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(42, 40, 4, 'zieme.ebony', 'donna.pollich@example.net', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MlbYxTzati', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(43, 34, 2, 'kevin31', 'gretchen.lebsack@example.com', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 's2hzLwLZ0P', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(44, 31, 2, 'pfannerstill.edgardo', 'wfahey@example.com', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Tgj01qbk5t', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(45, 27, 1, 'fgrady', 'valerie.mccullough@example.com', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aABrht6m3a', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(46, 39, 3, 'vorn', 'fritz77@example.com', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JzHBL6jikn', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(47, 17, 4, 'gwilliamson', 'kstoltenberg@example.net', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YZV0Wh5gcQ', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(48, 24, 1, 'pschimmel', 'otoy@example.com', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qfsKqTtdjB', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(49, 50, 2, 'nader.guy', 'pstehr@example.org', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nEVAaeHzfS', '2023-07-25 17:19:48', '2023-07-25 17:19:48'),
(50, 22, 4, 'gdurgan', 'homenick.hillary@example.com', '2023-07-25 17:19:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lJuyR4AiAi', '2023-07-25 17:19:48', '2023-07-25 17:19:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodatas`
--
ALTER TABLE `biodatas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `biodatas_nik_unique` (`nik`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `levels_name_unique` (`name`),
  ADD UNIQUE KEY `levels_slug_unique` (`slug`);

--
-- Indeks untuk tabel `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_logs_user_id_foreign` (`user_id`),
  ADD KEY `login_logs_email_index` (`email`),
  ADD KEY `login_logs_ip_address_index` (`ip_address`),
  ADD KEY `login_logs_status_index` (`status`);

--
-- Indeks untuk tabel `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `queues`
--
ALTER TABLE `queues`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_biodata_id_unique` (`biodata_id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodatas`
--
ALTER TABLE `biodatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `queues`
--
ALTER TABLE `queues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `records`
--
ALTER TABLE `records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `login_logs`
--
ALTER TABLE `login_logs`
  ADD CONSTRAINT `login_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
