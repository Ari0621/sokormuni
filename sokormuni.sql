-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2020 pada 06.25
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
  `detail_product_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'kaos anak', '2020-07-22 03:51:08', '2020-07-22 10:51:08'),
(5, 'kaos perempuan', '2020-07-22 04:01:23', '2020-07-22 11:01:23');

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
(4, 'merah', '2020-07-22 03:48:37', '2020-07-22 10:48:37'),
(5, 'x  d', '2020-07-22 09:11:32', '2020-07-22 16:11:32'),
(6, 'admin', '2020-07-22 09:11:57', '2020-07-22 16:11:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_product`
--

CREATE TABLE `detail_product` (
  `id` int(6) UNSIGNED NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `stock` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 'joko', 'ksajcsdjvjdsbvkjdsbvjvbdjkdvkj', '2020-07-21 07:12:26', '2020-07-21 14:19:04'),
(6, 'joko', 'oke siap', '2020-07-24 07:12:17', '2020-07-24 14:12:36');

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
  `description` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `material`, `color`, `size`, `description`, `created_at`, `updated_at`) VALUES
(1, 'catherine', 'koas ', 'coba', 'merah', 'S', 'kaos ini', '2020-07-22 09:11:03', '2020-07-23 15:53:15'),
(2, 'admin', 'kaos bayi', 'katun', 'biru', 'M', 'coba PRODUK', '2020-07-23 07:37:19', '2020-07-23 15:53:27'),
(5, 'user', 'koas ', 'katun', 'merah', 'S', 'bagus', '2020-07-24 07:14:37', '2020-07-24 14:14:55'),
(6, '', 'Pria', 'joko,joko', '', '', '', '2020-07-27 03:51:51', '2020-07-27 10:51:51');

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
(2, 'M', 'vfdvfdbdbd', '2020-07-21 07:40:36', '2020-07-22 11:04:09'),
(3, 's', 'ccx', '2020-07-22 04:03:50', '2020-07-22 11:03:50');

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
-- Indeks untuk tabel `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_product`
--
ALTER TABLE `detail_product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materials`
--
ALTER TABLE `materials`
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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `add_stock`
--
ALTER TABLE `add_stock`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `detail_product`
--
ALTER TABLE `detail_product`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
