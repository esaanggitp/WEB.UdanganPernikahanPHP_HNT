-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Okt 2019 pada 08.22
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `undangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(200) NOT NULL,
  `pass_admin` varchar(200) NOT NULL,
  `namaa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `pass_admin`, `namaa`) VALUES
(1, 'esa@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'esa'),
(2, 'esa1@gmail.com', '25d55ad283aa400af464c76d713c07ad', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `kode_produk` varchar(200) NOT NULL,
  `gambar_produk` varchar(200) NOT NULL,
  `deskripsi_produk` varchar(200) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `kode_produk`, `gambar_produk`, `deskripsi_produk`, `harga`) VALUES
(1, 'undangan pernikahan ', 'Avis 92', '1709201907121201082019041815gambar1.png', 'sds', '1500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slid`
--

CREATE TABLE `slid` (
  `id_slid` int(11) NOT NULL,
  `nama_slid` varchar(200) NOT NULL,
  `gambar_slid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slid`
--

INSERT INTO `slid` (`id_slid`, `nama_slid`, `gambar_slid`) VALUES
(1, 'undangan Avis 94', '01082019022111gambar6.png'),
(2, 'undangan avis 92', '01082019025511gambar1.png'),
(3, 'undangan kode rizki 15', '01082019032259riski15.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `web`
--

CREATE TABLE `web` (
  `id_web` int(11) NOT NULL,
  `nama_web` varchar(200) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `ket_wa` varchar(200) NOT NULL,
  `ket_web1` varchar(200) NOT NULL,
  `ket_web` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `web`
--

INSERT INTO `web` (`id_web`, `nama_web`, `no_hp`, `ket_wa`, `ket_web1`, `ket_web`) VALUES
(1, 'web undangan', '6285242631031', 'Hallo admin saya tertarik produk anda', 'ww', 'ww1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `slid`
--
ALTER TABLE `slid`
  ADD PRIMARY KEY (`id_slid`);

--
-- Indeks untuk tabel `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id_web`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `slid`
--
ALTER TABLE `slid`
  MODIFY `id_slid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `web`
--
ALTER TABLE `web`
  MODIFY `id_web` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
