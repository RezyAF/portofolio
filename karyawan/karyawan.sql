-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2023 pada 05.44
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_hadir`
--

CREATE TABLE `daftar_hadir` (
  `id` int(11) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi_absen` varchar(50) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_hadir`
--

INSERT INTO `daftar_hadir` (`id`, `nama_karyawan`, `tanggal`, `lokasi_absen`, `jam_masuk`, `jam_keluar`) VALUES
(3, 'Bani Ahmad', '2023-06-24', 'Unpam Viktor', '22:39:00', '22:38:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_izin`
--

CREATE TABLE `daftar_izin` (
  `id_izin` int(11) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `nama_izin` varchar(32) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `keterangan` varchar(32) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_izin`
--

INSERT INTO `daftar_izin` (`id_izin`, `nama_karyawan`, `nama_izin`, `tanggal`, `jam`, `keterangan`, `status`) VALUES
(4, 'sadas', 'dsadas', '2023-06-25', '23:02:00', 'sdad', 'Dipersetujui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_lembur`
--

CREATE TABLE `daftar_lembur` (
  `id_lembur` int(11) NOT NULL,
  `nama_karyawan` varchar(32) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_masuk_lembur` time NOT NULL,
  `jam_keluar_lembur` time NOT NULL,
  `keperluan` varchar(32) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_lembur`
--

INSERT INTO `daftar_lembur` (`id_lembur`, `nama_karyawan`, `tanggal`, `jam_masuk_lembur`, `jam_keluar_lembur`, `keperluan`, `status`) VALUES
(2, 'adasda', '2023-06-25', '10:31:00', '10:37:00', 'benerin printer', 'Menunggu Konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `kd_divisi` varchar(32) NOT NULL,
  `nama_divisi` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`kd_divisi`, `nama_divisi`) VALUES
('003', 'Kasubag'),
('004', 'ASdas'),
('005', 'Kocheng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `kd_jabatan` varchar(32) NOT NULL,
  `nama_jabatan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`kd_jabatan`, `nama_jabatan`) VALUES
('JAB001', 'Umum'),
('JAB002', 'SI'),
('JAB003', 'Bag');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `kode_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `divisi` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`kode_karyawan`, `nama_karyawan`, `email`, `alamat`, `jabatan`, `divisi`) VALUES
('001', 'syam', 'syam@gmail.com', 'curug', 'Umum', 'Kasubag');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_hadir`
--
ALTER TABLE `daftar_hadir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_izin`
--
ALTER TABLE `daftar_izin`
  ADD PRIMARY KEY (`id_izin`);

--
-- Indeks untuk tabel `daftar_lembur`
--
ALTER TABLE `daftar_lembur`
  ADD PRIMARY KEY (`id_lembur`);

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`kd_divisi`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kd_jabatan`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`kode_karyawan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_hadir`
--
ALTER TABLE `daftar_hadir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `daftar_izin`
--
ALTER TABLE `daftar_izin`
  MODIFY `id_izin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `daftar_lembur`
--
ALTER TABLE `daftar_lembur`
  MODIFY `id_lembur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
