-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2023 pada 17.36
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
-- Database: `crud1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `status` text NOT NULL,
  `departemen` varchar(20) NOT NULL,
  `grade` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `alamat`, `nik`, `ttl`, `pendidikan`, `status`, `departemen`, `grade`) VALUES
(1, 'Zulfikar', 'Kediri', 2783213, 'kediri,22 01 2002', 'Sarjana', 'Aktif', 'FINANCE', 1),
(2, 'Saleh', 'Jombang', 2434324, 'Jombang, 21 02 2002', 'Diploma', 'Non Aktif\r\n', 'FINANCE', 3),
(3, 'Akhirul', 'kediri', 2147483647, 'Kediri', 'sma', 'Aktif', 'IT', 2),
(4, 'Budi', 'Jombang', 334234, 'Surabaya', 'Sarjana', 'Aktif', 'Logistik', 5),
(5, 'Rudi', 'Mojokerto', 35212393, 'Nganjuk,22 01 2001', 'Sarjana', 'Aktif', 'PR', 4),
(6, 'Sinta', 'Nganjuk', 342525, 'Trengalek', 'Diploma', 'Aktif', 'PR', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` int(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`, `level`, `id`) VALUES
('HR', 'HR', 1, 1),
('IT', 'IT1', 2, 2),
('FINANCE', 'FINANCE', 3, 3),
('PURCHASING', 'PURCHASING', 4, 4),
('LOGISTIK', 'LOGISTIK', 5, 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
