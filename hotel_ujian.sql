-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2022 pada 04.56
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_ujian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris_tamu`
--

CREATE TABLE `inventaris_tamu` (
  `id` int(11) NOT NULL,
  `id_transaksi` varchar(255) NOT NULL,
  `cek_in` varchar(255) NOT NULL,
  `cek_out` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inventaris_tamu`
--

INSERT INTO `inventaris_tamu` (`id`, `id_transaksi`, `cek_in`, `cek_out`, `jumlah`, `jenis`, `firstname`, `lastname`, `email`, `notelp`) VALUES
(1, '12', '19-Sep-2022', '22-Sep-2022', 1, 'deluxe', 'fikri', 'kurnia', 'fikri@gmail.com', '0821352'),
(2, '15', '22-Sep-2022', '24-Sep-2022', 2, 'Single', 'anton', 'kurnia', 'anton@gmail.com', '3622352342'),
(3, '14', '20-Sep-2022', '21-Sep-2022', 1, 'deluxe', 'joko', 'anwar', 'joko@gmail.com', '0841721312'),
(4, '16', '20-Sep-2022', '21-Sep-2022', 1, 'Deluxe', 'wahyu', 'kuwat', 'wahyukuwat@gmail.com', '3513432432532'),
(5, '17', '20-Sep-2022', '21-Sep-2022', 1, 'Deluxe', 'joko', 'anwar', 'joko@gmail.com', '0841721312'),
(6, '18', '23-Sep-2022', '24-Sep-2022', 2, 'Single', 'falah', 'junaidi', 'falah@gmail.com', '5346452');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id`, `gambar`, `jenis`, `jumlah`, `harga`) VALUES
(1, 'single.jpg', 'Single', 10, 200000),
(2, 'deluxe.jpg', 'Deluxe', 10, 250000),
(3, 'twin.jpg', 'Twin', 10, 350000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `cek_in` varchar(255) NOT NULL,
  `cek_out` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` varchar(100) NOT NULL,
  `status` enum('confirm','pending') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `cek_in`, `cek_out`, `jumlah`, `jenis`, `firstname`, `lastname`, `email`, `notelp`, `status`) VALUES
(19, '23-Sep-2022', '25-Sep-2022', 1, 'Single', 'fadel', 'maulana', 'fadel@gmail.com', '087784467864', 'confirm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT 'guest123',
  `notelp` varchar(200) NOT NULL,
  `akses` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `notelp`, `akses`) VALUES
(1, 'joko', 'anwar', 'joko@gmail.com', '12345', '0841721312', 'user'),
(2, 'fikri', 'anwar', 'fikrianwar@gmail.com', '12345', '0841721312', 'admin'),
(3, 'fikri', 'kurnia', 'fikri@gmail.com', '54321', '0821352', 'user'),
(4, 'anton', 'kurnia', 'anton@gmail.com', 'guest123', '3622352342', 'user'),
(5, 'anton', 'kurnia', 'anton@gmail.com', 'guest123', '3622352342', 'user'),
(7, 'wahyu', 'kuwat', 'wahyukuwat@gmail.com', 'wahyu123', '3513432432532', 'user'),
(8, 'falah', 'junaidi', 'falah@gmail.com', 'guest123', '5346452', 'user'),
(9, 'fadel', 'maulana', 'fadel@gmail.com', 'fadel1808', '087784467864', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `inventaris_tamu`
--
ALTER TABLE `inventaris_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `inventaris_tamu`
--
ALTER TABLE `inventaris_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
