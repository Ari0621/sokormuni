-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Agu 2020 pada 12.31
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
(6, 'Pique', 'Pique merupakan jenis rajutan ', '2020-07-24 07:12:17', '2020-07-29 09:48:29'),
(17, 'Single Knit', ' Single Knit adalah jenis raju', '2020-07-29 02:48:00', '2020-07-29 09:48:00'),
(18, 'katun bambu', 'coba katun bambu', '2020-07-29 06:49:12', '2020-07-29 13:49:12'),
(19, 'Terry', 'Bagian luar dan dalamnya berbe', '2020-08-03 07:18:23', '2020-08-03 14:18:23');

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
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
