-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Agu 2020 pada 14.05
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sokormuni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `add_stock`
--

CREATE TABLE `add_stock` (
  `id` int(6) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `total` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `add_stock`
--

INSERT INTO `add_stock` (`id`, `date`, `total`, `product_id`, `created_at`, `updated_at`) VALUES
(16, '2020-08-02 17:00:00', '48', '40', '2020-08-07 02:27:37', '2020-08-07 09:27:37'),
(17, '2020-08-02 17:00:00', '58', '39', '2020-08-07 02:29:22', '2020-08-07 09:29:22'),
(18, '2020-08-02 17:00:00', '15', '41', '2020-08-07 07:33:46', '2020-08-07 14:33:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(6, 'kaos laki\"', '2020-07-28 06:27:11', '2020-07-29 09:24:55'),
(7, 'kaos jadi', '2020-07-28 06:28:16', '2020-07-29 13:28:39'),
(11, 'kaos anak', '2020-07-29 02:24:26', '2020-07-29 09:24:26'),
(16, 'kaos coba', '2020-08-03 07:12:44', '2020-08-03 14:13:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `id` int(6) UNSIGNED NOT NULL,
  `user_id` bigint(50) NOT NULL,
  `id_ongkir` int(50) NOT NULL,
  `total_pembelian` bigint(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `checkout`
--

INSERT INTO `checkout` (`id`, `user_id`, `id_ongkir`, `total_pembelian`, `created_at`, `updated_at`) VALUES
(4, 4, 0, 90000, '2020-08-19 03:28:51', '2020-08-19 10:28:51'),
(5, 4, 1, 90000, '2020-08-19 03:30:05', '2020-08-19 10:30:05'),
(6, 4, 2, 110000, '2020-08-19 03:41:14', '2020-08-19 10:41:14'),
(7, 4, 2, 110000, '2020-08-19 03:41:35', '2020-08-19 10:41:35'),
(8, 4, 2, 110000, '2020-08-19 03:46:52', '2020-08-19 10:46:52'),
(9, 4, 1, 120000, '2020-08-19 04:13:14', '2020-08-19 11:13:14'),
(10, 4, 2, 110000, '2020-08-19 05:07:04', '2020-08-19 12:07:04'),
(11, 4, 1, 120000, '2020-08-19 05:08:00', '2020-08-19 12:08:00'),
(12, 4, 2, 110000, '2020-08-19 05:08:47', '2020-08-19 12:08:47'),
(13, 4, 3, 120000, '2020-08-19 05:09:14', '2020-08-19 12:09:14'),
(14, 4, 2, 110000, '2020-08-19 05:13:13', '2020-08-19 12:13:13'),
(15, 4, 1, 120000, '2020-08-19 05:13:38', '2020-08-19 12:13:38'),
(16, 4, 3, 120000, '2020-08-19 05:17:05', '2020-08-19 12:17:05'),
(17, 4, 2, 110000, '2020-08-19 06:18:05', '2020-08-19 13:18:05'),
(18, 4, 0, 180000, '2020-08-19 08:25:42', '2020-08-19 15:25:42'),
(19, 4, 0, 45000, '2020-08-19 08:36:56', '2020-08-19 15:36:56'),
(20, 4, 1, 75000, '2020-08-19 08:43:51', '2020-08-19 15:43:51'),
(21, 4, 1, 165000, '2020-08-21 03:04:39', '2020-08-21 10:04:39'),
(37, 4, 1, 75000, '2020-08-21 10:09:53', '2020-08-21 17:09:53'),
(38, 4, 1, 75000, '2020-08-21 10:10:50', '2020-08-21 17:10:50'),
(39, 4, 1, 75000, '2020-08-21 10:14:33', '2020-08-21 17:14:33'),
(40, 4, 3, 60000, '2020-08-21 10:21:20', '2020-08-21 17:21:20'),
(41, 4, 1, 75000, '2020-08-21 10:24:17', '2020-08-21 17:24:17'),
(42, 4, 1, 75000, '2020-08-21 10:34:33', '2020-08-21 17:34:33'),
(43, 4, 2, 65000, '2020-08-21 10:36:09', '2020-08-21 17:36:09'),
(44, 4, 2, 65000, '2020-08-21 10:46:47', '2020-08-21 17:46:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout_product`
--

CREATE TABLE `checkout_product` (
  `product_id` varchar(255) NOT NULL,
  `checkout_id` varchar(255) NOT NULL,
  `jumlah` bigint(50) NOT NULL,
  `price_item` bigint(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `checkout_product`
--

INSERT INTO `checkout_product` (`product_id`, `checkout_id`, `jumlah`, `price_item`, `datetime`, `created_at`, `updated_at`) VALUES
('72', '0', 1, 110000, '20-08-19', '2020-08-19 04:11:50', '2020-08-19 11:11:50'),
('71', '0', 1, 110000, '20-08-19', '2020-08-19 04:11:50', '2020-08-19 11:11:50'),
('72', '9', 1, 120000, '20-08-19', '2020-08-19 04:13:14', '2020-08-19 11:13:14'),
('71', '9', 1, 120000, '20-08-19', '2020-08-19 04:13:14', '2020-08-19 11:13:14'),
('72', '10', 1, 110000, '20-08-19', '2020-08-19 05:07:04', '2020-08-19 12:07:04'),
('71', '10', 1, 110000, '20-08-19', '2020-08-19 05:07:04', '2020-08-19 12:07:04'),
('72', '11', 1, 120000, '20-08-19', '2020-08-19 05:08:00', '2020-08-19 12:08:00'),
('71', '11', 1, 120000, '20-08-19', '2020-08-19 05:08:00', '2020-08-19 12:08:00'),
('72', '12', 1, 110000, '20-08-19', '2020-08-19 05:08:47', '2020-08-19 12:08:47'),
('71', '12', 1, 110000, '20-08-19', '2020-08-19 05:08:47', '2020-08-19 12:08:47'),
('72', '13', 1, 120000, '20-08-19', '2020-08-19 05:09:14', '2020-08-19 12:09:14'),
('71', '13', 1, 120000, '20-08-19', '2020-08-19 05:09:14', '2020-08-19 12:09:14'),
('72', '14', 1, 110000, '20-08-19', '2020-08-19 05:13:13', '2020-08-19 12:13:13'),
('71', '14', 1, 110000, '20-08-19', '2020-08-19 05:13:13', '2020-08-19 12:13:13'),
('72', '15', 1, 120000, '20-08-19', '2020-08-19 05:13:38', '2020-08-19 12:13:38'),
('71', '15', 1, 120000, '20-08-19', '2020-08-19 05:13:38', '2020-08-19 12:13:38'),
('72', '16', 1, 120000, '20-08-19', '2020-08-19 05:17:05', '2020-08-19 12:17:05'),
('71', '16', 1, 120000, '20-08-19', '2020-08-19 05:17:05', '2020-08-19 12:17:05'),
('72', '17', 1, 110000, '20-08-19', '2020-08-19 06:18:05', '2020-08-19 13:18:05'),
('71', '17', 1, 110000, '20-08-19', '2020-08-19 06:18:05', '2020-08-19 13:18:05'),
('72', '18', 3, 180000, '20-08-19', '2020-08-19 08:25:42', '2020-08-19 15:25:42'),
('71', '18', 1, 180000, '20-08-19', '2020-08-19 08:25:42', '2020-08-19 15:25:42'),
('71', '19', 1, 45000, '20-08-19', '2020-08-19 08:36:56', '2020-08-19 15:36:56'),
('72', '20', 1, 75000, '20-08-19', '2020-08-19 08:43:51', '2020-08-19 15:43:51'),
('72', '21', 2, 165000, '20-08-21', '2020-08-21 03:04:39', '2020-08-21 10:04:39'),
('69', '21', 1, 165000, '20-08-21', '2020-08-21 03:04:39', '2020-08-21 10:04:39'),
('71', '22', 2, 150000, '20-08-21', '2020-08-21 03:08:48', '2020-08-21 10:08:48'),
('70', '22', 1, 150000, '20-08-21', '2020-08-21 03:08:48', '2020-08-21 10:08:48'),
('72', '23', 1, 120000, '20-08-21', '2020-08-21 04:22:16', '2020-08-21 11:22:16'),
('71', '23', 1, 120000, '20-08-21', '2020-08-21 04:22:16', '2020-08-21 11:22:16'),
('72', '24', 1, 120000, '20-08-21', '2020-08-21 04:24:09', '2020-08-21 11:24:09'),
('69', '24', 1, 120000, '20-08-21', '2020-08-21 04:24:09', '2020-08-21 11:24:09'),
('72', '25', 1, 105000, '20-08-21', '2020-08-21 08:54:10', '2020-08-21 15:54:10'),
('69', '25', 1, 105000, '20-08-21', '2020-08-21 08:54:10', '2020-08-21 15:54:10'),
('71', '26', 1, 75000, '20-08-21', '2020-08-21 09:20:05', '2020-08-21 16:20:05'),
('72', '27', 1, 75000, '20-08-21', '2020-08-21 09:36:50', '2020-08-21 16:36:50'),
('71', '28', 1, 75000, '20-08-21', '2020-08-21 09:40:11', '2020-08-21 16:40:11'),
('71', '29', 1, 75000, '20-08-21', '2020-08-21 09:47:46', '2020-08-21 16:47:46'),
('71', '30', 1, 60000, '20-08-21', '2020-08-21 09:50:25', '2020-08-21 16:50:25'),
('71', '31', 1, 60000, '20-08-21', '2020-08-21 09:50:54', '2020-08-21 16:50:54'),
('71', '32', 1, 75000, '20-08-21', '2020-08-21 09:51:02', '2020-08-21 16:51:02'),
('70', '33', 1, 75000, '20-08-21', '2020-08-21 09:51:34', '2020-08-21 16:51:34'),
('70', '34', 1, 75000, '20-08-21', '2020-08-21 09:54:15', '2020-08-21 16:54:15'),
('70', '35', 1, 75000, '20-08-21', '2020-08-21 09:59:47', '2020-08-21 16:59:47'),
('72', '36', 1, 65000, '20-08-21', '2020-08-21 10:04:04', '2020-08-21 17:04:04'),
('72', '37', 1, 75000, '20-08-21', '2020-08-21 10:09:53', '2020-08-21 17:09:53'),
('72', '38', 1, 75000, '20-08-21', '2020-08-21 10:10:50', '2020-08-21 17:10:50'),
('72', '39', 1, 75000, '20-08-21', '2020-08-21 10:14:33', '2020-08-21 17:14:33'),
('72', '40', 1, 60000, '20-08-21', '2020-08-21 10:21:20', '2020-08-21 17:21:20'),
('72', '41', 1, 75000, '20-08-21', '2020-08-21 10:24:17', '2020-08-21 17:24:17'),
('72', '42', 1, 75000, '20-08-21', '2020-08-21 10:34:33', '2020-08-21 17:34:33'),
('71', '43', 1, 65000, '20-08-21', '2020-08-21 10:36:09', '2020-08-21 17:36:09'),
('72', '44', 1, 65000, '20-08-21', '2020-08-21 10:46:47', '2020-08-21 17:46:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `colors`
--

CREATE TABLE `colors` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `colors`
--

INSERT INTO `colors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(6, 'White', '2020-07-22 09:11:57', '2020-08-12 15:07:07'),
(7, 'Navy', '2020-07-29 02:25:35', '2020-08-12 15:06:56'),
(8, 'Misty', '2020-07-29 02:25:50', '2020-08-12 15:06:42'),
(10, 'Maroon', '2020-07-30 07:23:38', '2020-08-12 15:06:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `id` int(6) UNSIGNED NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `stock` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail`
--

INSERT INTO `detail` (`id`, `product_id`, `nama`, `stock`, `created_at`, `updated_at`) VALUES
(26, '32', '', '123', '2020-08-04 06:52:08', '2020-08-04 13:52:08'),
(27, '33', '', '123', '2020-08-04 06:52:38', '2020-08-04 13:52:38'),
(28, '34', '', '200', '2020-08-04 07:23:12', '2020-08-04 14:23:12'),
(29, '35', 'kaos vvv', '13435', '2020-08-04 08:08:49', '2020-08-04 15:08:49'),
(30, '36', 'beta', '1233', '2020-08-05 02:21:37', '2020-08-05 09:21:37'),
(31, '37', 'scdscvdsvdsv', '12323', '2020-08-05 02:24:02', '2020-08-05 09:24:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id` int(6) UNSIGNED NOT NULL,
  `checkout_id` varchar(255) NOT NULL,
  `no_invoice` bigint(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` bigint(255) NOT NULL,
  `total_price` bigint(255) NOT NULL,
  `date` date NOT NULL,
  `no_hp` bigint(100) NOT NULL,
  `ongkos_kirim` bigint(255) NOT NULL,
  `ekspedisi` varchar(255) NOT NULL,
  `harga_item` bigint(255) NOT NULL,
  `sub_total` bigint(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `nama_pemilik_rekening` varchar(255) NOT NULL,
  `nomor_rekening` bigint(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`id`, `checkout_id`, `no_invoice`, `name_user`, `address`, `postal_code`, `total_price`, `date`, `no_hp`, `ongkos_kirim`, `ekspedisi`, `harga_item`, `sub_total`, `bank`, `nama_pemilik_rekening`, `nomor_rekening`, `created_at`, `updated_at`) VALUES
(1, '12', 200819001, 'coba edit', 'JL.SEBUKU 5 NO.98', 1231566, 110000, '0000-00-00', 0, 0, '', 0, 0, '', '', 0, '2020-08-19 05:08:47', '2020-08-19 12:08:47'),
(2, '13', 200819001, 'coba edit', 'JL.SEBUKU 5 NO.98', 1231566, 120000, '0000-00-00', 0, 0, '', 0, 0, '', '', 0, '2020-08-19 05:09:14', '2020-08-19 12:09:14'),
(3, '14', 2008191, 'coba edit', 'JL.SEBUKU 5 NO.98', 1231566, 110000, '0000-00-00', 0, 0, '', 0, 0, '', '', 0, '2020-08-19 05:13:13', '2020-08-19 12:13:13'),
(4, '15', 2008191, 'coba edit', 'JL.SEBUKU 5 NO.98', 1231566, 120000, '0000-00-00', 0, 0, '', 0, 0, '', '', 0, '2020-08-19 05:13:38', '2020-08-19 12:13:38'),
(5, '16', 2008194, 'coba edit', 'JL.SEBUKU 5 NO.98', 1231566, 120000, '0000-00-00', 0, 0, '', 0, 0, '', '', 0, '2020-08-19 05:17:05', '2020-08-19 12:17:05'),
(6, '17', 2008194, 'coba edit', 'JL.SEBUKU 5 NO.98', 1231566, 110000, '0000-00-00', 0, 0, '', 0, 0, '', '', 0, '2020-08-19 06:18:05', '2020-08-19 13:18:05'),
(7, '18', 2008194, 'coba edit', 'JL.SEBUKU 5 NO.98', 1231566, 180000, '2020-08-19', 89111141888, 0, '', 45000, 0, 'Bank_BCA 123-666-879_AN.sokormuni', '', 0, '2020-08-19 08:25:42', '2020-08-19 15:25:42'),
(8, '19', 2008194, 'coba edit', 'JL.SEBUKU 5 NO.98', 1231566, 45000, '2020-08-19', 89111141888, 0, '', 45000, 0, 'Bank_Mandiri_132-144-155_AN.sokormuni', '', 0, '2020-08-19 08:36:56', '2020-08-19 15:36:56'),
(9, '20', 2008194, 'dvbnghgjm/', 'JL.SEBUKU 5 NO.98', 1231566, 75000, '2020-08-19', 23456789809, 30000, 'Jakarta', 45000, 0, 'Bank_BRI_467-356-267_AN.sokormuni', '', 0, '2020-08-19 08:43:51', '2020-08-19 15:43:51'),
(10, '21', 2008214, 'coba', 'JL.SEBUKU 5 NO.98', 1231566, 165000, '2020-08-21', 89111141888, 30000, 'JNE', 45000, 135000, 'Bank_BCA 123-666-879_AN.sokormuni', '', 0, '2020-08-21 03:04:39', '2020-08-21 10:04:39'),
(11, '22', 2008214, 'coba', 'JL.malang 5 NO.98', 1231566, 150000, '2020-08-21', 378438573485, 15000, 'TIKI', 45000, 135000, 'Bank_BRI_467-356-267_AN.sokormuni', '', 0, '2020-08-21 03:08:48', '2020-08-21 10:08:48'),
(12, '23', 2008214, 'dfbgnhmj,k', 'JL.SEBUKU 5 NO.98', 1231566, 120000, '2020-08-21', 345678, 30000, 'JNE', 45000, 90000, 'Bank_Mandiri_132-144-155_AN.sokormuni', '', 0, '2020-08-21 04:22:16', '2020-08-21 11:22:16'),
(13, '27', 2008214, 'dfbgnhmj,k', 'JL.SEBUKU 5 NO.98', 1231566, 75000, '2020-08-21', 89111141888, 30000, 'JNE', 45000, 45000, 'Bank_BNI_982-244-235_AN.sokormuni', '', 0, '2020-08-21 09:36:50', '2020-08-21 16:36:50'),
(14, '39', 2008214, 'Byan Chris', 'JL.SEBUKU 5 NO.98', 1231566, 75000, '2020-08-21', 89111141888, 30000, 'JNE', 45000, 45000, 'Bank BNI 982-244-235 AN.sokormuni', '', 0, '2020-08-21 10:14:33', '2020-08-21 17:14:33'),
(15, '40', 2008214, 'Byan Chris', 'JL.SEBUKU 5 NO.98', 1231566, 60000, '2020-08-21', 89111141888, 15000, 'TIKI', 45000, 45000, 'Bank BRI 467-356-267 AN.sokormuni', '', 0, '2020-08-21 10:21:20', '2020-08-21 17:21:20'),
(16, '41', 2008214, 'coba edit', 'JL.SEBUKU 5 NO.98', 1231566, 75000, '2020-08-21', 89111141888, 30000, 'JNE', 45000, 45000, 'Bank BCA 123-666-879 AN.sokormuni', 'coba', 1234567890, '2020-08-21 10:24:17', '2020-08-21 17:24:17'),
(17, '42', 2008214, 'coba edit', 'JL.SEBUKU 5 NO.98', 1231566, 75000, '2020-08-21', 89111141888, 30000, 'JNE', 45000, 45000, 'Bank BCA 123-666-879 AN.sokormuni', 'saya coba', 1234567890, '2020-08-21 10:34:33', '2020-08-21 17:34:33'),
(18, '43', 2008214, 'coba edit', 'JL.SEBUKU 5 NO.98', 1231566, 65000, '2020-08-21', 89111141888, 20000, 'J&T', 45000, 45000, 'Bank BRI 467-356-267 AN.sokormuni', 'joko', 3234354534, '2020-08-21 10:36:09', '2020-08-21 17:36:09'),
(19, '44', 2008214, 'coba edit', 'JL.SEBUKU 5 NO.98', 1231566, 65000, '2020-08-21', 89111141888, 20000, 'J&T', 45000, 45000, 'Bank Mandiri 132-144-155 AN.sokormuni', 'ini', 2435465667676, '2020-08-21 10:46:47', '2020-08-21 17:46:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materials`
--

CREATE TABLE `materials` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materials`
--

INSERT INTO `materials` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(6, 'Pique', 'Pique merupakan jenis rajutan ', '2020-07-24 07:12:17', '2020-07-29 09:48:29'),
(17, 'Single Knit', ' Single Knit adalah jenis raju', '2020-07-29 02:48:00', '2020-07-29 09:48:00'),
(18, 'katun bambu', 'coba katun bambu', '2020-07-29 06:49:12', '2020-07-29 13:49:12'),
(19, 'Terry', 'Bagian luar dan dalamnya berbe', '2020-08-03 07:18:23', '2020-08-03 14:18:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ongkir`
--

CREATE TABLE `ongkir` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama_kota` varchar(255) NOT NULL,
  `harga` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ongkir`
--

INSERT INTO `ongkir` (`id`, `nama_kota`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'JNE', 30000, '2020-08-18 10:02:01', '2020-08-19 16:15:40'),
(2, 'J&T', 20000, '2020-08-18 10:02:58', '2020-08-19 16:15:51'),
(3, 'TIKI', 15000, '2020-08-18 10:02:58', '2020-08-19 16:16:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `category_id` varchar(30) NOT NULL,
  `material` varchar(30) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `size` varchar(30) DEFAULT NULL,
  `stock` varchar(255) NOT NULL,
  `description` varchar(30) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `material`, `color`, `size`, `stock`, `description`, `image`, `image1`, `image2`, `harga`, `created_at`, `updated_at`) VALUES
(69, 'Sokormuni Maroon', '11', 'katun bambu', 'Maroon', 'XL,L ,M ,S ', '12', 'Sokormuni \"Maroon\" ', '130820201125401.jpg', '130820201125401nobg.jpg', '13082020112540size.jpg', '45000', '2020-08-13 09:25:40', '2020-08-13 16:25:40'),
(70, 'Sokormuni Misty', '11', 'katun bambu', 'Misty', 'XL,L ,M ,S ', '13', 'Sokormuni \"Misty\"', '130820201126352.jpg', '130820201126352nobg.jpg', '13082020112635size.jpg', '45000', '2020-08-13 09:26:35', '2020-08-13 16:26:35'),
(71, 'Sokormuni Navy', '11', 'katun bambu', 'Navy', 'XL,L ,M ,S ', '15', 'Sokormuni \"Navy\"', '130820201127323.jpg', '130820201127323nobg.jpg', '13082020112732size.jpg', '45000', '2020-08-13 09:27:32', '2020-08-13 16:27:32'),
(72, 'Sokormuni \"White\"', '11', 'katun bambu', 'White', 'XL,L ,M ,S ', '13', 'Sokormuni \"White\"', '130820201128244.jpg', '130820201128244nobg.jpg', '13082020112824size.jpg', '45000', '2020-08-13 09:28:24', '2020-08-13 16:28:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sizes`
--

CREATE TABLE `sizes` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(11, 'S ', '( 3 bulan - 6 bulan )', '2020-08-12 08:03:20', '2020-08-12 15:03:49'),
(12, 'M ', '( 6 bulan - 1 tahun )', '2020-08-12 08:03:38', '2020-08-12 15:03:38'),
(13, 'L ', '( 1 tahun - 2 tahun )', '2020-08-12 08:04:12', '2020-08-12 15:04:12'),
(14, 'XL', '( 2 tahun - 3 tahun )', '2020-08-12 08:04:35', '2020-08-12 15:04:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `level` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `kode_pos` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `no_hp`, `level`, `jenis_kelamin`, `address`, `kode_pos`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'annisa', 'PasswordNYa1357', 'miss.coklat.mail@gmail.com', '082333161749', 'Admin', 'perempuan', 'JL.SEBUKU 2E NO.14', '1234552', '2020-08-10 04:03:26', '2020-08-10 11:09:48'),
(4, 'coba edit', 'Muezza', '862eyw^%EWQ0odmwkls', 'acatherine996@gmail.com', '089111141888', 'User', 'perempuan', 'JL.SEBUKU 5 NO.98', '1231566', '2020-08-10 04:21:11', '2020-08-10 11:49:22'),
(8, 'user', 'beta', '108709IJLNUInI*9', 'miss.coklat.mail@gmail.com', '234567543212', 'User', 'Pria', 'JL.SEBUKU 2E NO.14', '23123e123', '2020-08-13 05:04:46', '2020-08-13 12:04:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `add_stock`
--
ALTER TABLE `add_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `add_stock`
--
ALTER TABLE `add_stock`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
