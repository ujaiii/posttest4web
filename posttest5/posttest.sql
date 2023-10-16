-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2022 pada 17.53
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
-- Database: `posttest`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_customer`
--

CREATE TABLE `data_customer` (
  `id` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis_barang` varchar(30) NOT NULL,
  `jumlah_barang` int(3) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `metode_pembayaran` varchar(30) NOT NULL,
  `tanggal_pemesanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_customer`
--

INSERT INTO `data_customer` (`id`, `nama`, `jenis_barang`, `jumlah_barang`, `alamat`, `metode_pembayaran`, `tanggal_pemesanan`) VALUES
(1, 'dwd', 'Gitar Elektrik', 2, 'fs', 'Credit', '2013-04-21'),
(2, 'dwd', 'Gitar Elektrik', 2, 'fs', 'Credit', '2013-04-21'),
(3, 'Ahmad', 'Gitar Akustik', 2, 'Jl. Kebaktian', 'Cash', '2022-10-19'),
(4, 'Ahmad', 'Gitar Akustik', 2, 'Jl. Kebaktian', 'Cash', '2022-10-19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_customer`
--
ALTER TABLE `data_customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_customer`
--
ALTER TABLE `data_customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
