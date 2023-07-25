-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2023 pada 07.40
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
(1, 1604101002020606, 'Miss Annabelle Hammes', 'Laki-laki', '1984-11-23', '620 Chet Fall Suite 318\nMerlefurt, NC 11897', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(2, 1604101002020049, 'Prof. Tyson McKenzie V', 'Laki-laki', '1970-04-18', '24484 Hillard Park\nBlandaside, AZ 45525', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(3, 1604101002020398, 'Prof. Glen Ruecker', 'Perempuan', '1987-07-17', '71071 Funk Lakes Suite 235\nRettafurt, VA 00250', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(4, 1604101002020597, 'Marielle Mayert DVM', 'Laki-laki', '1987-06-11', '756 Haleigh Crossing Apt. 906\nWest Melody, MI 37771-3193', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(5, 1604101002020554, 'Mr. Alexis Grant', 'Laki-laki', '1988-12-19', '397 Vicenta Way Suite 031\nNorth Piper, VT 26534', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(6, 1604101002020738, 'Sofia Stark', 'Laki-laki', '2001-12-10', '3875 Ernser Tunnel\nSatterfieldland, MN 73147-0757', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(7, 1604101002020139, 'Syble Nolan', 'Perempuan', '2003-08-02', '310 Lemke Road Apt. 314\nFarrellbury, MS 67136', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(8, 1604101002020601, 'Ms. Marilou Monahan Jr.', 'Perempuan', '1998-11-08', '7863 Clint Gateway\nLake Isabelfort, MS 63750-4879', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(9, 1604101002020629, 'Miss Colleen Mayer IV', 'Laki-laki', '1973-06-02', '349 Windler Drives Apt. 635\nWest Tevin, CT 98350', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(10, 1604101002020354, 'Mekhi Effertz', 'Laki-laki', '1987-08-17', '379 Berenice Walk Apt. 086\nNew Blanche, NH 99880-6137', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(11, 1604101002020932, 'Maegan Breitenberg', 'Laki-laki', '1986-12-29', '8620 Aimee Views Apt. 627\nNorth Rae, OH 99467', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(12, 1604101002020697, 'Sunny Dicki', 'Laki-laki', '1986-08-22', '754 Grayson Fall\nLake Alison, IL 54006-4663', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(13, 1604101002020321, 'Ms. Tessie Feil V', 'Laki-laki', '1978-12-22', '395 Estella Plains Apt. 976\nO\'Haratown, HI 22657', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(14, 1604101002020806, 'Doyle Lakin', 'Perempuan', '1974-03-07', '4645 Shanny Vista Suite 013\nWest Adrielview, IN 86480-6632', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(15, 1604101002020899, 'Olaf Koepp', 'Laki-laki', '2018-09-24', '8305 O\'Conner Glens Apt. 162\nNorth Edgar, TN 02508-6571', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(16, 1604101002020184, 'Dr. Marcel Harvey IV', 'Perempuan', '2014-09-10', '187 Yost Road Apt. 864\nSchummbury, HI 62137', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(17, 1604101002020257, 'Jaeden Hintz', 'Perempuan', '2007-10-19', '4525 Larkin Station Apt. 753\nKarlieborough, IL 80666', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(18, 1604101002020684, 'Belle Ledner', 'Laki-laki', '2020-01-07', '231 Cassandre Square Suite 715\nOttilieshire, WY 43579', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(19, 1604101002020126, 'Corbin Collier', 'Perempuan', '2008-02-13', '20582 Jaskolski Mission\nWindlerhaven, WI 63700', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(20, 1604101002020432, 'Norene Hoeger', 'Laki-laki', '1995-12-19', '893 Boyle Station\nAbeshire, IA 28474-3941', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(21, 1604101002020147, 'Mr. Hal Flatley', 'Laki-laki', '2012-08-26', '79042 Jack Coves\nBeryltown, MI 63896-7633', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(22, 1604101002020089, 'Dr. Giuseppe Quitzon', 'Perempuan', '1995-08-31', '8749 Williamson Valley Suite 244\nSouth Clyde, MT 21493-0535', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(23, 1604101002020066, 'Brooklyn Spinka Sr.', 'Perempuan', '2022-08-07', '6160 Vesta Pines Apt. 405\nWest Holdenport, TX 36297-7949', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(24, 1604101002020339, 'Beaulah Nolan', 'Laki-laki', '2000-08-04', '9463 Keebler Wall Suite 271\nNorth Lonborough, DC 13248', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(25, 1604101002020196, 'Fredy Gusikowski V', 'Laki-laki', '1986-09-03', '96971 Melany Field Apt. 864\nEthelynstad, OH 26336', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(26, 1604101002020430, 'Edward Windler', 'Perempuan', '1977-12-23', '77200 Marshall Trail\nNorth Adolphusfort, MS 93063', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(27, 1604101002020099, 'Orlando Hammes DDS', 'Perempuan', '1972-10-12', '443 Jasen Corner\nEast Rubyefort, PA 58878-3234', '2023-07-09 05:38:23', '2023-07-09 05:38:23'),
(28, 1604101002020725, 'Terrence Swaniawski', 'Perempuan', '2000-11-30', '21388 Odie Green Suite 499\nLake Myrticefort, DE 40563', '2023-07-09 05:38:24', '2023-07-09 05:38:24'),
(29, 1604101002020916, 'Ruben Christiansen', 'Laki-laki', '2012-06-15', '87842 Kemmer Via Apt. 392\nNew Lomaview, NC 66610-5526', '2023-07-09 05:38:24', '2023-07-09 05:38:24'),
(30, 1604101002020925, 'Darion Brakus', 'Perempuan', '2023-05-14', '570 Jett Streets Apt. 035\nLefflerchester, KY 59675-8894', '2023-07-09 05:38:24', '2023-07-09 05:38:24'),
(31, 1604101002020050, 'Dameon Dickens', 'Laki-laki', '2007-10-02', '270 Ryan Spurs\nNew Cliftonborough, ME 41063', '2023-07-09 05:38:24', '2023-07-09 05:38:24'),
(32, 1604101002020154, 'Nicole Weimann', 'Laki-laki', '1976-07-12', '838 Tremblay Mountain\nJarretmouth, AL 20693', '2023-07-09 05:38:24', '2023-07-09 05:38:24'),
(33, 1604101002020277, 'Dr. Katrina Hermiston', 'Perempuan', '1995-10-18', '7250 Piper Passage Apt. 896\nNew Halieton, ME 87138-2070', '2023-07-09 05:38:24', '2023-07-09 05:38:24'),
(34, 1604101002020015, 'Miss Retta Schumm', 'Perempuan', '2020-09-28', '683 Anya Haven Apt. 289\nStreichton, TN 69313-0546', '2023-07-09 05:38:24', '2023-07-09 05:38:24'),
(35, 1604101002020207, 'Ramiro Prohaska', 'Laki-laki', '1992-09-07', '81936 Toy View\nEast Madeline, WY 61113', '2023-07-09 05:38:24', '2023-07-09 05:38:24'),
(36, 1604101002020458, 'Orion Altenwerth', 'Perempuan', '2008-12-11', '7350 Zoe Gateway Suite 597\nEmmerichmouth, TN 33193', '2023-07-09 05:38:24', '2023-07-09 05:38:24'),
(37, 1604101002020771, 'Mack Brekke Jr.', 'Laki-laki', '2003-08-30', '7296 Adams Ford\nPort Tyreek, MD 55175-5937', '2023-07-09 05:38:24', '2023-07-09 05:38:24'),
(38, 1604101002020362, 'Mr. Colby Ratke', 'Laki-laki', '2013-07-29', '1817 Mozelle Lock Suite 537\nQuitzonport, AZ 07128-5756', '2023-07-09 05:38:24', '2023-07-09 05:38:24'),
(39, 1604101002020955, 'Dr. Rudolph Gleichner PhD', 'Perempuan', '1988-02-19', '622 Lizzie Lake\nSouth Estefaniaside, MT 89845-2754', '2023-07-09 05:38:24', '2023-07-09 05:38:24'),
(40, 1604101002020003, 'Tillman Wilderman', 'Laki-laki', '1987-11-14', '5504 Avis Parkway Apt. 425\nLoyport, OR 84918-0833', '2023-07-09 05:38:25', '2023-07-09 05:38:25'),
(41, 1604101002020161, 'Ms. Kaylie Fisher', 'Perempuan', '1993-08-28', '57442 Hyatt Meadows Apt. 168\nWest Twilaton, OH 67977', '2023-07-09 05:38:25', '2023-07-09 05:38:25'),
(42, 1604101002020967, 'Dr. Rosella Barrows', 'Perempuan', '1981-12-23', '3424 Howe Expressway Apt. 546\nNew Abigale, MD 65994-2921', '2023-07-09 05:38:25', '2023-07-09 05:38:25'),
(43, 1604101002020095, 'Susan Yundt III', 'Perempuan', '2016-12-26', '8834 Hilario Ville\nNew Callie, SD 22796-1420', '2023-07-09 05:38:25', '2023-07-09 05:38:25'),
(44, 1604101002020743, 'Mr. Brayan Kling', 'Perempuan', '1998-05-31', '1796 Bradley Lake\nPort Kaia, ID 94364', '2023-07-09 05:38:25', '2023-07-09 05:38:25'),
(45, 1604101002020959, 'Allan Donnelly', 'Perempuan', '1974-02-08', '96440 Conn Forks\nWestside, ME 73506', '2023-07-09 05:38:25', '2023-07-09 05:38:25'),
(46, 1604101002020709, 'Mrs. Sincere Balistreri III', 'Perempuan', '1975-01-01', '2635 Rosalinda Glens Suite 903\nGrantmouth, SC 72820-9903', '2023-07-09 05:38:25', '2023-07-09 05:38:25'),
(47, 1604101002020676, 'Eloy Smitham', 'Perempuan', '1995-12-01', '269 Hermiston Pike Apt. 686\nLamberttown, CO 11613', '2023-07-09 05:38:25', '2023-07-09 05:38:25'),
(48, 1604101002020072, 'Moises Bashirian', 'Laki-laki', '2019-06-18', '475 Glen Branch\nBethhaven, ME 29281-3918', '2023-07-09 05:38:25', '2023-07-09 05:38:25'),
(49, 1604101002020234, 'Prof. Velva O\'Keefe DVM', 'Perempuan', '1985-11-11', '7846 Kuvalis Union\nSanfordport, AL 81246', '2023-07-09 05:38:25', '2023-07-09 05:38:25'),
(50, 1604101002020661, 'Nyah Gibson', 'Perempuan', '2022-03-16', '9423 Gerald Lakes\nEast Devinhaven, MS 55901-3452', '2023-07-09 05:38:25', '2023-07-09 05:38:25');

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
(1, 'Tablet', 'tablet', '2023-07-09 05:38:17', '2023-07-09 05:38:17'),
(2, 'Kapsul', 'kapsul', '2023-07-09 05:38:17', '2023-07-09 05:38:17'),
(3, 'Sirup', 'sirup', '2023-07-09 05:38:17', '2023-07-09 05:38:17'),
(4, 'Racik', 'racik', '2023-07-09 05:38:17', '2023-07-09 05:38:17'),
(5, 'Quia culpa repudiandae.', 'occaecati-id-repellendus-cum-placeat-nesciunt-enim', '2023-07-09 05:38:26', '2023-07-09 05:38:26'),
(6, 'Aut et excepturi.', 'consequatur-enim-eum-earum-laborum', '2023-07-09 05:38:26', '2023-07-09 05:38:26'),
(7, 'Quisquam et dolorum.', 'atque-perferendis-ipsum-aut-impedit-aut', '2023-07-09 05:38:26', '2023-07-09 05:38:26'),
(8, 'Et temporibus.', 'accusantium-praesentium-et-molestiae-excepturi-dolores-ut', '2023-07-09 05:38:26', '2023-07-09 05:38:26'),
(9, 'Nobis porro ducimus.', 'molestiae-omnis-velit-aperiam-laborum', '2023-07-09 05:38:26', '2023-07-09 05:38:26');

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
(1, 'Admin', 'admin', '2023-07-09 05:38:18', '2023-07-09 05:38:18'),
(2, 'Dokter', 'dokter', '2023-07-09 05:38:18', '2023-07-09 05:38:18'),
(3, 'Farmasi', 'farmasi', '2023-07-09 05:38:18', '2023-07-09 05:38:18'),
(4, 'Pasien', 'pasien', '2023-07-09 05:38:18', '2023-07-09 05:38:18'),
(5, 'Kasi', 'kasi', '2023-07-09 05:38:18', '2023-07-09 05:38:18');

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
(1, 1, 'Aut voluptatem.', 'Sint minus.', 16, '2023-07-09 05:38:26', '2023-07-09 05:38:26'),
(2, 4, 'Voluptatem quia.', 'Fugiat modi.', 12, '2023-07-09 05:38:27', '2023-07-09 05:38:27'),
(3, 2, 'Corporis.', 'Omnis modi.', 11, '2023-07-09 05:38:27', '2023-07-09 05:38:27'),
(4, 2, 'Rerum voluptas.', 'Natus.', 20, '2023-07-09 05:38:27', '2023-07-09 05:38:27'),
(5, 2, 'Expedita quis.', 'Necessitatibus vel.', 14, '2023-07-09 05:38:27', '2023-07-09 05:38:27'),
(6, 1, 'Beatae id.', 'Eveniet.', 14, '2023-07-09 05:38:27', '2023-07-09 05:38:27'),
(7, 3, 'Ducimus rem.', 'Sit est.', 13, '2023-07-09 05:38:27', '2023-07-09 05:38:27'),
(8, 3, 'Natus.', 'Molestias cupiditate.', 19, '2023-07-09 05:38:27', '2023-07-09 05:38:27'),
(9, 4, 'Omnis et.', 'Mollitia libero.', 20, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(10, 1, 'Ducimus.', 'Dolorem consequuntur.', 10, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(11, 1, 'Illum.', 'Saepe id.', 15, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(12, 3, 'Temporibus omnis.', 'Aut.', 10, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(13, 3, 'Adipisci.', 'Ut.', 10, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(14, 1, 'Qui reiciendis.', 'Culpa eum.', 16, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(15, 3, 'Esse.', 'Quia.', 18, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(16, 2, 'Enim.', 'Excepturi sunt.', 13, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(17, 2, 'Dolore animi.', 'Quo voluptatem.', 20, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(18, 2, 'Dolores expedita.', 'Eum.', 17, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(19, 3, 'Qui.', 'Ex.', 13, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(20, 4, 'Est.', 'Eos veniam.', 13, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(21, 1, 'Quas soluta.', 'Quaerat tempora.', 19, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(22, 1, 'Nesciunt iusto.', 'Quae necessitatibus.', 18, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(23, 4, 'Est.', 'Assumenda veritatis.', 11, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(24, 3, 'Ullam eveniet.', 'Soluta.', 17, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(25, 3, 'Consectetur soluta.', 'Ad.', 15, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(26, 2, 'Nemo.', 'Corrupti.', 18, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(27, 1, 'Fuga labore.', 'Veritatis vero.', 13, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(28, 2, 'Dolore.', 'Autem similique.', 14, '2023-07-09 05:38:28', '2023-07-09 05:38:28'),
(29, 1, 'Repellat tempore.', 'Minus.', 14, '2023-07-09 05:38:29', '2023-07-09 05:38:29'),
(30, 3, 'Ipsam.', 'Occaecati ut.', 12, '2023-07-09 05:38:29', '2023-07-09 05:38:29'),
(31, 4, 'Autem omnis.', 'Voluptatum.', 12, '2023-07-09 05:38:29', '2023-07-09 05:38:29'),
(32, 3, 'Dolor.', 'Cumque atque.', 16, '2023-07-09 05:38:29', '2023-07-09 05:38:29'),
(33, 2, 'Porro.', 'Omnis ut.', 13, '2023-07-09 05:38:29', '2023-07-09 05:38:29'),
(34, 3, 'Accusamus.', 'Voluptas.', 16, '2023-07-09 05:38:29', '2023-07-09 05:38:29'),
(35, 2, 'Doloribus qui.', 'Molestias.', 12, '2023-07-09 05:38:29', '2023-07-09 05:38:29'),
(36, 3, 'Non totam.', 'Nihil possimus.', 15, '2023-07-09 05:38:29', '2023-07-09 05:38:29'),
(37, 3, 'Est.', 'Soluta.', 12, '2023-07-09 05:38:29', '2023-07-09 05:38:29'),
(38, 1, 'Molestiae.', 'Veniam.', 12, '2023-07-09 05:38:29', '2023-07-09 05:38:29'),
(39, 3, 'Illo autem.', 'Minima.', 18, '2023-07-09 05:38:30', '2023-07-09 05:38:30'),
(40, 4, 'Unde accusamus.', 'Aut sed.', 13, '2023-07-09 05:38:30', '2023-07-09 05:38:30'),
(41, 4, 'Et.', 'Id voluptates.', 10, '2023-07-09 05:38:30', '2023-07-09 05:38:30'),
(42, 3, 'Dignissimos.', 'Totam.', 12, '2023-07-09 05:38:30', '2023-07-09 05:38:30'),
(43, 1, 'Ducimus aut.', 'Possimus.', 15, '2023-07-09 05:38:30', '2023-07-09 05:38:30'),
(44, 3, 'Optio.', 'Quisquam et.', 13, '2023-07-09 05:38:30', '2023-07-09 05:38:30'),
(45, 4, 'Molestias et.', 'Et at.', 12, '2023-07-09 05:38:30', '2023-07-09 05:38:30'),
(46, 1, 'Maxime.', 'Sapiente ut.', 15, '2023-07-09 05:38:30', '2023-07-09 05:38:30'),
(47, 4, 'Optio.', 'Consequatur temporibus.', 20, '2023-07-09 05:38:30', '2023-07-09 05:38:30'),
(48, 2, 'Suscipit sit.', 'Placeat similique.', 10, '2023-07-09 05:38:30', '2023-07-09 05:38:30'),
(49, 3, 'Nostrum labore.', 'Aut occaecati.', 10, '2023-07-09 05:38:30', '2023-07-09 05:38:30'),
(50, 2, 'Quasi autem.', 'Culpa.', 18, '2023-07-09 05:38:30', '2023-07-09 05:38:30');

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
(10, '2022_07_16_054021_create_queues_table', 1);

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
(1, 'Ut assumenda nihil.', 'Et nostrum minus.', 'Omnis.', 3, 4, 19, 'Ut quia.', 'Perferendis.', '2023-07-09 05:38:31', '2023-07-09 05:38:31'),
(2, 'Autem sed.', 'Quasi commodi sunt.', 'Sit.', 9, 2, 40, 'Adipisci ullam.', 'Fuga.', '2023-07-09 05:38:31', '2023-07-09 05:38:31'),
(3, 'Sed dolorem.', 'Commodi similique.', 'Ut.', 8, 9, 4, 'Blanditiis.', 'Quia omnis.', '2023-07-09 05:38:31', '2023-07-09 05:38:31'),
(4, 'Ut cupiditate.', 'Pariatur eligendi facilis.', 'Aut.', 9, 6, 7, 'Pariatur.', 'Facilis.', '2023-07-09 05:38:31', '2023-07-09 05:38:31'),
(5, 'Aliquid sit.', 'Provident dolore omnis.', 'Minima blanditiis.', 1, 3, 11, 'Fugiat.', 'Delectus architecto.', '2023-07-09 05:38:31', '2023-07-09 05:38:31'),
(6, 'Distinctio dolorum.', 'Tempora dolores.', 'Fugiat.', 15, 2, 40, 'Beatae est.', 'Cumque.', '2023-07-09 05:38:31', '2023-07-09 05:38:31'),
(7, 'Eos sed velit.', 'Modi molestiae voluptatum.', 'Maiores numquam.', 17, 4, 35, 'Dolore occaecati.', 'Inventore.', '2023-07-09 05:38:31', '2023-07-09 05:38:31'),
(8, 'Consequatur voluptas laborum.', 'Corporis omnis rerum.', 'Tenetur asperiores.', 5, 5, 40, 'In.', 'Alias exercitationem.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(9, 'Sit cumque.', 'Quisquam quae.', 'Eum aperiam.', 4, 9, 19, 'Quaerat qui.', 'Inventore pariatur.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(10, 'Minima et ducimus.', 'Est et.', 'Minus.', 16, 7, 6, 'Rem.', 'Sint eos.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(11, 'Ut et.', 'Est sunt.', 'Maxime.', 13, 5, 10, 'Architecto.', 'Ea error.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(12, 'A excepturi.', 'Eos tenetur.', 'Et.', 12, 2, 7, 'Ex magni.', 'Tempora ullam.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(13, 'Aut autem.', 'Veniam quia.', 'Ipsa quisquam.', 15, 2, 10, 'Iure.', 'Numquam natus.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(14, 'Aliquam iste blanditiis.', 'Aut placeat.', 'Perferendis.', 9, 1, 15, 'Unde.', 'Adipisci.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(15, 'Aut sequi quam.', 'Vel velit.', 'Quaerat.', 2, 2, 19, 'Dolorum.', 'Aut.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(16, 'Expedita et magnam.', 'Ut laborum molestiae.', 'Ut iste.', 5, 7, 35, 'Ab.', 'Aut.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(17, 'Quis repellendus eum.', 'Corrupti ipsa eum.', 'Fuga.', 19, 10, 15, 'Eos voluptatem.', 'Et illo.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(18, 'Voluptatem aut.', 'Quod sed.', 'Non.', 11, 9, 15, 'Molestiae saepe.', 'Fugit sed.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(19, 'Et ratione.', 'Eos sit neque.', 'Fugiat dolorem.', 11, 4, 4, 'Est aut.', 'Sint consequuntur.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(20, 'Porro sequi atque.', 'A accusantium qui.', 'Et.', 13, 2, 50, 'Aut.', 'Commodi qui.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(21, 'Doloribus illum.', 'Molestiae laudantium.', 'Doloremque.', 5, 2, 4, 'Et.', 'Totam omnis.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(22, 'Eveniet ipsum porro.', 'Expedita fuga.', 'Cum nihil.', 1, 4, 19, 'Officiis nihil.', 'Aliquid et.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(23, 'Quisquam sit voluptatem.', 'Minima non consequatur.', 'Temporibus temporibus.', 9, 3, 40, 'A quis.', 'Ea.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(24, 'Hic ratione.', 'Quia accusamus.', 'Sapiente.', 17, 10, 10, 'Vel occaecati.', 'Omnis aperiam.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(25, 'Ea esse.', 'Odio fugiat consequatur.', 'Asperiores quaerat.', 6, 7, 50, 'Dolor quisquam.', 'Voluptate.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(26, 'Provident consequatur.', 'Dolores minus.', 'Assumenda ullam.', 10, 4, 11, 'Modi.', 'Rerum distinctio.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(27, 'Sed aspernatur et.', 'Et eum unde.', 'Omnis nulla.', 4, 8, 10, 'Sint aperiam.', 'Est.', '2023-07-09 05:38:32', '2023-07-09 05:38:32'),
(28, 'Minus adipisci.', 'Facilis voluptates et.', 'Commodi recusandae.', 19, 8, 19, 'Consectetur.', 'Autem libero.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(29, 'Quo ipsum.', 'Sunt qui.', 'Molestiae.', 6, 2, 40, 'Quia.', 'Et.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(30, 'Voluptatibus atque et.', 'Quo perferendis.', 'Voluptas voluptatem.', 3, 8, 24, 'Et.', 'Nihil.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(31, 'Nemo id iure.', 'Eos cupiditate facilis.', 'Enim.', 4, 5, 42, 'Magni iste.', 'Exercitationem ullam.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(32, 'Provident autem laudantium.', 'Dolor fugit velit.', 'Dolorem.', 8, 9, 6, 'Animi.', 'Cumque.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(33, 'Est aut.', 'Odio nihil occaecati.', 'Consequatur qui.', 12, 5, 10, 'Blanditiis.', 'Nemo.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(34, 'Officia architecto.', 'Qui qui.', 'Facilis.', 20, 3, 24, 'Aperiam et.', 'Et reprehenderit.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(35, 'Dignissimos aut.', 'Alias quis.', 'Architecto.', 19, 5, 35, 'Reprehenderit non.', 'Eum delectus.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(36, 'Eveniet provident qui.', 'Dolore dolor.', 'Velit.', 18, 9, 19, 'Voluptas expedita.', 'Optio rerum.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(37, 'Asperiores rem.', 'Saepe aut.', 'Quae.', 3, 8, 4, 'Aut.', 'Quia numquam.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(38, 'Fugit id quam.', 'Excepturi quasi.', 'Aspernatur in.', 1, 1, 42, 'Ea quas.', 'Minus.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(39, 'Ullam sed.', 'Est praesentium ea.', 'Sit.', 3, 8, 42, 'Perferendis suscipit.', 'Cum doloremque.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(40, 'Voluptatum et.', 'At alias.', 'Aut aut.', 5, 4, 7, 'Sunt.', 'Debitis.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(41, 'Fuga enim.', 'A sed.', 'Eius.', 9, 6, 42, 'Velit.', 'Non.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(42, 'In sit.', 'Atque fugit dolorem.', 'Voluptas.', 19, 10, 6, 'Tenetur.', 'Nesciunt.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(43, 'Dolores rerum.', 'Dolorum aut beatae.', 'Nisi et.', 14, 3, 10, 'Sunt.', 'Autem.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(44, 'Et harum.', 'Dolor aut.', 'Sapiente.', 15, 3, 7, 'Quaerat ut.', 'Voluptates incidunt.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(45, 'Sed voluptatibus ipsa.', 'In dolores laudantium.', 'Voluptas.', 15, 5, 11, 'Recusandae.', 'Perferendis explicabo.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(46, 'Id fugiat.', 'Numquam sequi aut.', 'Ea beatae.', 11, 6, 7, 'Iusto cupiditate.', 'Et.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(47, 'Quo molestiae.', 'Nulla facere minima.', 'Ipsa et.', 13, 8, 6, 'Quo nemo.', 'Consequuntur sed.', '2023-07-09 05:38:33', '2023-07-09 05:38:33'),
(48, 'Harum sapiente illo.', 'Dolore iure.', 'Aspernatur nulla.', 1, 1, 50, 'Adipisci debitis.', 'Et magni.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(49, 'Sed ipsa.', 'Optio ut.', 'Nihil.', 14, 2, 40, 'Quod.', 'Iure.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(50, 'Praesentium voluptas non.', 'Eum animi.', 'Provident ea.', 6, 7, 7, 'Debitis optio.', 'Hic molestiae.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(51, 'Similique ullam occaecati.', 'Sit quo dolor.', 'Est consequatur.', 13, 6, 40, 'Et rerum.', 'Nostrum.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(52, 'Veritatis quae.', 'Earum maiores eaque.', 'Magni.', 6, 1, 50, 'Quia hic.', 'Provident consequatur.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(53, 'Repellat qui.', 'Est non dolores.', 'Non est.', 11, 2, 19, 'Quos.', 'Quis voluptas.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(54, 'Harum nostrum unde.', 'Illum qui.', 'Incidunt.', 10, 3, 11, 'Debitis ex.', 'Dolor.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(55, 'Illo inventore.', 'Eligendi consequatur at.', 'Voluptatem.', 5, 2, 4, 'Amet dignissimos.', 'Recusandae.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(56, 'Impedit dolorem suscipit.', 'Odit possimus quia.', 'Nihil ut.', 17, 1, 35, 'Optio assumenda.', 'Qui a.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(57, 'Reprehenderit exercitationem.', 'Aut eum.', 'Quasi sunt.', 2, 7, 50, 'Non.', 'Ut qui.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(58, 'Quam eos aliquid.', 'Nobis a esse.', 'Rerum ex.', 4, 10, 19, 'Ducimus consectetur.', 'Veritatis dolor.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(59, 'Est quo quod.', 'Aut tenetur non.', 'Veniam.', 20, 2, 10, 'Similique dolorum.', 'Ipsum quis.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(60, 'Autem perspiciatis.', 'Nesciunt qui.', 'Earum.', 4, 3, 14, 'Eius.', 'Quidem.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(61, 'Dolorem qui dicta.', 'Consequatur eaque.', 'Rerum.', 13, 8, 7, 'Similique.', 'Cum.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(62, 'Quia consequatur molestiae.', 'Voluptatem sequi debitis.', 'Quaerat eveniet.', 11, 2, 35, 'Inventore quo.', 'Ipsam suscipit.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(63, 'Eligendi harum.', 'Optio nobis quasi.', 'Quam.', 2, 9, 19, 'Maiores itaque.', 'Voluptatem.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(64, 'Placeat voluptatibus.', 'Quas consequatur.', 'Quia.', 18, 4, 4, 'Fuga.', 'Autem.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(65, 'Id architecto.', 'Amet molestias quod.', 'Voluptatem consequatur.', 1, 7, 24, 'Ipsam facere.', 'Voluptate.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(66, 'Quia sit.', 'Totam debitis.', 'Nemo minus.', 3, 9, 35, 'Sint magni.', 'Vero.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(67, 'Non in.', 'Totam culpa.', 'Qui cumque.', 8, 3, 42, 'Ducimus ipsa.', 'Rerum.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(68, 'Qui aliquid laborum.', 'Mollitia ipsa minima.', 'Ut molestiae.', 19, 9, 40, 'Sit.', 'Alias beatae.', '2023-07-09 05:38:34', '2023-07-09 05:38:34'),
(69, 'Sint et.', 'Repellendus quisquam voluptatibus.', 'Maiores id.', 6, 7, 6, 'Optio.', 'Veritatis dolor.', '2023-07-09 05:38:35', '2023-07-09 05:38:35'),
(70, 'Voluptas est.', 'Voluptate veritatis.', 'Accusantium magni.', 13, 5, 14, 'Iure.', 'Vel.', '2023-07-09 05:38:35', '2023-07-09 05:38:35'),
(71, 'Ipsam sunt.', 'Aspernatur modi ut.', 'Reiciendis.', 7, 9, 7, 'Officia.', 'Quae.', '2023-07-09 05:38:35', '2023-07-09 05:38:35'),
(72, 'Voluptas quis harum.', 'Praesentium unde.', 'Optio aperiam.', 8, 4, 35, 'Rem quibusdam.', 'Quaerat dignissimos.', '2023-07-09 05:38:35', '2023-07-09 05:38:35'),
(73, 'Distinctio ipsa.', 'In nemo.', 'Quos iste.', 10, 3, 11, 'Ut distinctio.', 'Excepturi impedit.', '2023-07-09 05:38:35', '2023-07-09 05:38:35'),
(74, 'Occaecati laboriosam nobis.', 'Praesentium praesentium.', 'Est.', 20, 9, 14, 'Nostrum neque.', 'Sint ullam.', '2023-07-09 05:38:35', '2023-07-09 05:38:35'),
(75, 'Deleniti dolorem.', 'Ut officiis soluta.', 'Atque.', 17, 9, 35, 'Aut.', 'Nihil aut.', '2023-07-09 05:38:35', '2023-07-09 05:38:35'),
(76, 'Commodi quo.', 'Earum sit quia.', 'Ex.', 10, 6, 15, 'Facilis eum.', 'Consequatur.', '2023-07-09 05:38:35', '2023-07-09 05:38:35'),
(77, 'Aut est voluptas.', 'Voluptates architecto.', 'Sed ut.', 17, 4, 11, 'Asperiores.', 'Qui.', '2023-07-09 05:38:35', '2023-07-09 05:38:35'),
(78, 'Autem non est.', 'Qui sed.', 'Quasi sit.', 3, 10, 4, 'Nisi repellendus.', 'Delectus nisi.', '2023-07-09 05:38:35', '2023-07-09 05:38:35'),
(79, 'Quia architecto rem.', 'Odit error accusantium.', 'Officiis doloremque.', 5, 1, 19, 'Consectetur.', 'Fuga.', '2023-07-09 05:38:35', '2023-07-09 05:38:35'),
(80, 'Voluptatum earum aliquam.', 'Rem accusantium omnis.', 'Eveniet dolor.', 15, 5, 50, 'Ducimus omnis.', 'Nemo.', '2023-07-09 05:38:35', '2023-07-09 05:38:35'),
(81, 'Et ullam nulla.', 'In vel dolorem.', 'Ea.', 3, 4, 35, 'Illum asperiores.', 'Illum laborum.', '2023-07-09 05:38:35', '2023-07-09 05:38:35'),
(82, 'Tenetur voluptatibus.', 'Et aut.', 'Dolor.', 4, 2, 35, 'Voluptatem.', 'Sed impedit.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(83, 'Minus est.', 'Nulla illo quaerat.', 'Ipsa nobis.', 2, 6, 11, 'Aspernatur.', 'Dolor similique.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(84, 'Labore dolorum.', 'Cumque non quae.', 'Quia.', 18, 9, 35, 'Sapiente dolores.', 'Minus deserunt.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(85, 'Optio beatae.', 'Esse ut dolorum.', 'Possimus.', 10, 4, 14, 'Neque.', 'Quas repellat.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(86, 'Facere adipisci.', 'Qui dolorum et.', 'Debitis.', 9, 6, 40, 'Praesentium totam.', 'Sequi vel.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(87, 'Assumenda veniam.', 'Temporibus impedit.', 'Ratione doloremque.', 11, 3, 11, 'Non maxime.', 'Et enim.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(88, 'Corrupti dignissimos nihil.', 'Suscipit ullam.', 'Voluptas.', 16, 5, 11, 'Sed.', 'Ut debitis.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(89, 'Praesentium maiores aliquid.', 'Unde velit dolorem.', 'Id.', 16, 10, 15, 'Totam a.', 'Quis.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(90, 'Dicta id.', 'Totam laudantium.', 'Suscipit.', 20, 6, 6, 'Doloremque.', 'Ut.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(91, 'Qui illo asperiores.', 'Nisi nulla qui.', 'Facere error.', 17, 2, 14, 'Quod laudantium.', 'Beatae.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(92, 'Laboriosam perspiciatis.', 'Fugit ut et.', 'Mollitia.', 16, 8, 6, 'Atque.', 'Dolore.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(93, 'Ut impedit.', 'Voluptates voluptas.', 'Corporis soluta.', 14, 1, 19, 'Dolorum quia.', 'Totam.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(94, 'Magni voluptatem.', 'Quia saepe quis.', 'Quam laborum.', 3, 10, 24, 'Debitis deleniti.', 'Veniam quo.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(95, 'Omnis beatae laboriosam.', 'Voluptatem dolores sit.', 'Doloremque.', 15, 1, 10, 'Quod dolorem.', 'Est.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(96, 'Officiis nostrum quia.', 'Asperiores consequatur.', 'Corrupti.', 12, 7, 24, 'Cumque.', 'Voluptatem.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(97, 'Laudantium et.', 'Doloremque nihil.', 'Dolores eveniet.', 2, 1, 4, 'Dolorem.', 'Tenetur.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(98, 'Vel facilis.', 'Ut adipisci aut.', 'Voluptates veritatis.', 2, 7, 50, 'Dolores.', 'Esse.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(99, 'Qui dolor.', 'Enim nihil.', 'Dicta tempore.', 11, 7, 10, 'Et porro.', 'Aut.', '2023-07-09 05:38:36', '2023-07-09 05:38:36'),
(100, 'Similique at fugiat.', 'Ex esse.', 'Pariatur.', 7, 8, 10, 'Molestiae.', 'Modi in.', '2023-07-09 05:38:36', '2023-07-09 05:38:36');

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
(1, 7, 1, 'abartoletti', 'email@email.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bt1K7qgAfq', '2023-07-09 05:38:19', '2023-07-09 05:38:19'),
(2, 29, 2, 'lind.catherine', 'davis.katelyn@example.net', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2KOSEQSZWi', '2023-07-09 05:38:20', '2023-07-09 05:38:20'),
(3, 23, 1, 'hboyle', 'dangelo.bogan@example.net', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vTydU2GpSp', '2023-07-09 05:38:20', '2023-07-09 05:38:20'),
(4, 22, 4, 'katelyn14', 'fsmitham@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DpkXqBwpDx', '2023-07-09 05:38:20', '2023-07-09 05:38:20'),
(5, 15, 1, 'djohnson', 'dallin.osinski@example.net', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fugoR0U5LM', '2023-07-09 05:38:20', '2023-07-09 05:38:20'),
(6, 19, 4, 'cristina.romaguera', 'zpadberg@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'U4YJUxuCOq', '2023-07-09 05:38:20', '2023-07-09 05:38:20'),
(7, 6, 4, 'raynor.ashlynn', 'valentine66@example.org', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'W9mMsYOUx4', '2023-07-09 05:38:20', '2023-07-09 05:38:20'),
(8, 38, 2, 'carmella66', 'mbergnaum@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'X8tx2U6S0d', '2023-07-09 05:38:20', '2023-07-09 05:38:20'),
(9, 13, 3, 'macejkovic.curtis', 'adriana.simonis@example.org', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LZx7K3mFfk', '2023-07-09 05:38:20', '2023-07-09 05:38:20'),
(10, 17, 4, 'micah.vonrueden', 'chesley.cruickshank@example.net', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1Q6OE1iKaP', '2023-07-09 05:38:20', '2023-07-09 05:38:20'),
(11, 21, 4, 'ykuhlman', 'bogisich.kamron@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Rq5wUePpyp', '2023-07-09 05:38:20', '2023-07-09 05:38:20'),
(12, 36, 1, 'ines.johnston', 'timothy.wilderman@example.org', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LGqDSEn3T4', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(13, 12, 1, 'woodrow.ruecker', 'psmith@example.net', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '50e1k889VW', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(14, 9, 4, 'pstamm', 'chasity.hackett@example.net', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RqSYyUR4Cb', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(15, 40, 4, 'sam80', 'romaguera.armando@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8zdJonn76L', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(16, 50, 3, 'langosh.theo', 'xcummings@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sn2kcDzEIQ', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(17, 35, 2, 'osbaldo12', 'agerlach@example.net', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'U4C3DJOG7x', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(18, 43, 3, 'legros.maurice', 'psporer@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yJlIKb7hIn', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(19, 16, 4, 'vtorphy', 'schinner.kristin@example.org', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RSEzakEUG0', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(20, 11, 1, 'carolanne.bartoletti', 'ernestina.mante@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vhN5rebZsD', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(21, 46, 2, 'dooley.elvie', 'coby79@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yAgKpwkfp5', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(22, 3, 1, 'sylvan.botsford', 'faye12@example.org', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ksnscNOS7S', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(23, 41, 2, 'krempel', 'doris.smitham@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YNAzvtsI9T', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(24, 14, 4, 'neil43', 'mcdermott.winston@example.org', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lo8lwsH6Rt', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(25, 39, 3, 'german.hansen', 'gregorio06@example.net', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RAoRftfhAJ', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(26, 37, 2, 'bheathcote', 'marisol73@example.org', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KqizBZT80y', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(27, 8, 3, 'maryse32', 'gunnar.auer@example.org', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Q7HszDjoRZ', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(28, 5, 1, 'malvina.gottlieb', 'schulist.clark@example.net', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9FfSF3gWcU', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(29, 25, 1, 'vonrueden.renee', 'addie.stoltenberg@example.org', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DjJRxJAWmZ', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(30, 48, 2, 'keebler.kasey', 'qhermiston@example.org', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bPfYQlFhdb', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(31, 28, 2, 'mcdermott.vladimir', 'bstark@example.org', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tULfYnkJ7E', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(32, 27, 1, 'kgleason', 'emmy.gerhold@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OHWnA9FIBN', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(33, 26, 1, 'abshire.darian', 'collier.leonora@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ixSzkY8ioD', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(34, 42, 3, 'jermey28', 'dietrich.sid@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3cUR8fJQEM', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(35, 44, 4, 'doyle.kattie', 'steuber.aron@example.org', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eMREAPss8i', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(36, 33, 1, 'cstoltenberg', 'antwon.rolfson@example.org', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GCp89g7Yi7', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(37, 49, 2, 'jratke', 'hailee07@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TMUlohslp1', '2023-07-09 05:38:21', '2023-07-09 05:38:21'),
(38, 32, 3, 'hane.juana', 'nbauch@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cwMCqh8JX2', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(39, 1, 2, 'nhill', 'wdickens@example.net', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'iANf15JJug', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(40, 4, 4, 'jjerde', 'imedhurst@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'L0xaltn47S', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(41, 45, 2, 'emard.devin', 'zbashirian@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4IKwYf1dvx', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(42, 20, 4, 'wyman.geraldine', 'kertzmann.euna@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SD49lb0RGt', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(43, 10, 2, 'lschroeder', 'hobart.ebert@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dLtS1zL0Sv', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(44, 31, 3, 'aliyah79', 'billy.hand@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cVTt0iTTEv', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(45, 30, 1, 'zula.wehner', 'kmohr@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kvmJxmUNKi', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(46, 34, 2, 'michele29', 'tsteuber@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qPVEg4WEH7', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(47, 2, 2, 'shawna.renner', 'vebert@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dli99Jq9Lt', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(48, 18, 1, 'morissette.major', 'quinten.bahringer@example.net', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mk9upTLEqb', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(49, 24, 2, 'glennie.hoeger', 'gwintheiser@example.com', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VgRYByhz97', '2023-07-09 05:38:22', '2023-07-09 05:38:22'),
(50, 47, 4, 'marguerite99', 'eugenia.mueller@example.org', '2023-07-09 05:38:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'K4ovPDZgIV', '2023-07-09 05:38:22', '2023-07-09 05:38:22');

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
-- AUTO_INCREMENT untuk tabel `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
