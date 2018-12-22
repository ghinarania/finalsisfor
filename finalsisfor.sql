-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2018 pada 09.25
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalsisfor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `telp` varchar(35) NOT NULL,
  `instagram` varchar(35) NOT NULL,
  `tanggallahir` varchar(35) NOT NULL,
  `pekerjaan` varchar(35) NOT NULL,
  `instansi` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `nama`, `email`, `telp`, `instagram`, `tanggallahir`, `pekerjaan`, `instansi`) VALUES
(1, 'Ghina Syukriyah Rania', 'ghinarania14@gmail.com', '082348202008', '@ghnsykryh', '14/10/1998', 'Mahasiswa', 'Universitas Hasanuddin'),
(2, 'Sitti Nur Fadillah', 'sittinurfadillah1312@gmail.com', '082348201410', '@adillah', '13/12/1998', 'Mahasiswa', 'Universitas Hasanuddin'),
(3, 'Dhinda Fitri Wiludjeng', 'dhindafw@gmail.com', '082348160198', '@dhindafw', '16/01/1999', 'Mahasiswa', 'Universitas Hasanuddin'),
(4, 'Cici Purnamasari', 'cicipurnamasari14@gmail.com', '082348141097', '@chiciandira', '14/10/1997', 'Mahasiswa', 'Universitas Hasanuddin'),
(5, 'Andi Marimar Muchtamar', 'andinoni16@gmail.com', '082348190199', '@noniandi', '19/01/1999', 'Mahasiswa', 'Universitas Hasanuddin'),
(6, 'Putri Angriani', 'putriangriani14@gmail.com', '082348141198', '@putriangrianii', '14/11/1998', 'Mahasiswa', 'Universitas Hasanuddin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
