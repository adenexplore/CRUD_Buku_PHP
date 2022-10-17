-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2021 pada 03.46
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penerbit_buku` varchar(50) NOT NULL,
  `Genre_buku` varchar(20) NOT NULL,
  `harga_buku` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penerbit_buku`, `Genre_buku`, `harga_buku`) VALUES
(5, 'dsdsdsds fsfdfsfs', 'babad 222', 'dongeng 222', '222'),
(12, 'indepent', 'persib', 'sejarah', '50000'),
(13, 'kekasih  yang terbaik', 'susi', 'novel', '15000'),
(14, 'rumahku negaraku', 'lusi we es', 'novel', '20000'),
(15, 'kenangan abadi', 'aris dark', 'cerita', '20000'),
(26, 'rumahku negaraku', 'lusi we es', 'novel', '50000'),
(31, 'jonathan refresh', 'pt.jonathan', 'novel', '20000'),

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginlogin`
--

CREATE TABLE `loginlogin` (
  `id_user` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `loginlogin`
--

INSERT INTO `loginlogin` (`id_user`, `fullname`, `username`, `password`) VALUES
(1, 'ADENRIFAI', 'adenajah', 'adenajah'),
(2, 'ADEN AHMAD RIFAI', 'ADEN', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `loginlogin`
--
ALTER TABLE `loginlogin`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `loginlogin`
--
ALTER TABLE `loginlogin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
