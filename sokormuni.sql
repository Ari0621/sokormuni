-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2020 pada 10.26
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
(4, 'ungu', '2020-07-22 03:48:37', '2020-07-29 13:44:18'),
(5, 'biru', '2020-07-22 09:11:32', '2020-07-29 13:43:45'),
(6, 'putih', '2020-07-22 09:11:57', '2020-07-27 15:22:45'),
(7, 'merah maroon', '2020-07-29 02:25:35', '2020-07-29 09:25:35'),
(8, 'merah muda', '2020-07-29 02:25:50', '2020-07-29 09:26:14'),
(10, 'Jingga', '2020-07-30 07:23:38', '2020-08-03 14:16:16'),
(11, 'hitam', '2020-08-03 07:13:38', '2020-08-03 14:13:38');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `material`, `color`, `size`, `stock`, `description`, `created_at`, `updated_at`) VALUES
(17, 'jokosdcscs', '1', 'Pique,katun', 'BIru,merah', 'M', '', 'dsdvcsvsv', '2020-07-28 04:42:13', '2020-07-28 11:42:13'),
(21, 'admin', '9', 'Pique', 'putih,BIru', 'M', '', 'dscdsvd', '2020-07-28 07:24:46', '2020-07-28 14:24:46'),
(29, 'kaos a', '8', 'katun bambu', 'hitam', 'L', '', 'kaos terbaik', '2020-07-30 07:24:27', '2020-07-30 14:24:27'),
(39, 'user', '11', 'katun bambu,Single Knit', 'Jingga', 'L', '58', 'user', '2020-08-05 07:30:27', '2020-08-07 09:29:22'),
(40, 'katun bambu', '11', 'katun bambu', 'merah muda', 'L', '48', 'katun', '2020-08-05 07:32:41', '2020-08-07 09:27:37'),
(41, 'betafdghg', '6', 'katun bambu', 'merah muda', 'XL', '15', 'fdgfhg', '2020-08-07 07:33:21', '2020-08-07 14:33:46');

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
(3, 'S', 'ukuran S', '2020-07-22 04:03:50', '2020-07-28 16:10:27'),
(8, 'XL', 'Lebar 123X17', '2020-07-29 02:49:12', '2020-07-29 09:49:12'),
(9, 'L', '16 x 7', '2020-07-29 06:54:36', '2020-07-29 13:56:26'),
(10, 'M', 'P x L', '2020-08-03 07:20:19', '2020-08-03 14:20:19');

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
(4, 'coba edit', 'Muezza', '862eyw^%EWQ0odmwkls', 'acatherine996@gmail.com', '089111141888', 'User', 'perempuan', 'JL.SEBUKU 5 NO.98', '1231566', '2020-08-10 04:21:11', '2020-08-10 11:49:22');

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
-- AUTO_INCREMENT untuk tabel `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
