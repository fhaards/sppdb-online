-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2020 pada 18.33
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gelombang`
--

CREATE TABLE `gelombang` (
  `id_gel` int(2) NOT NULL,
  `nm_gel` varchar(30) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `total_mhs` int(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `kd_jurusan` varchar(10) NOT NULL,
  `nm_jurusan` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`kd_jurusan`, `nm_jurusan`, `status`) VALUES
('AK001', 'Akuntansi Manajemen', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_bayar_daftar`
--

CREATE TABLE `peserta_bayar_daftar` (
  `no_pembayaran` int(30) NOT NULL,
  `no_pendaftaran` int(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_dokumen`
--

CREATE TABLE `peserta_dokumen` (
  `no_dokumen` int(30) NOT NULL,
  `no_pendaftaran` int(30) NOT NULL,
  `img_ijasah` text NOT NULL,
  `img_ktp` text NOT NULL,
  `img_skhun` text NOT NULL,
  `img_raport_s4` text NOT NULL,
  `img_raport_s5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_orangtua`
--

CREATE TABLE `peserta_orangtua` (
  `kd_orangtua` int(30) NOT NULL,
  `no_pendaftaran` int(30) NOT NULL,
  `nm_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `gaji_ayah` varchar(20) NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `gaji_ibu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_pendaftar`
--

CREATE TABLE `peserta_pendaftar` (
  `no_pendaftaran` int(30) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `riwayat_penyakit` text NOT NULL,
  `prestasi` text NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kodepos` int(12) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `level`) VALUES
(1, 'Super User', 'thisadmin@mail.com', '$2y$10$C2PPLZLv.g.Tqd2BdI4/ruVpDP/V0o6BDrxkBoL5eNsBrl58kZn3y', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_berita`
--

CREATE TABLE `_berita` (
  `id_berita` int(10) NOT NULL,
  `judul_berita` varchar(150) NOT NULL,
  `isi_berita` text NOT NULL,
  `tgl_berita` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_info`
--

CREATE TABLE `_info` (
  `id_info` int(1) NOT NULL,
  `cara_mendaftar` text NOT NULL,
  `dokumen` text NOT NULL,
  `info_pembayaran` text NOT NULL,
  `welcome_msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `_info`
--

INSERT INTO `_info` (`id_info`, `cara_mendaftar`, `dokumen`, `info_pembayaran`, `welcome_msg`) VALUES
(1, '', '', '', 'SELAMAT DATANG DI APLIKASI PENERIMAAN MAHASISWA BARU (PMB) UNIVERSITAS ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_sekolah`
--

CREATE TABLE `_sekolah` (
  `nm_universitas` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gelombang`
--
ALTER TABLE `gelombang`
  ADD PRIMARY KEY (`id_gel`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kd_jurusan`);

--
-- Indeks untuk tabel `peserta_bayar_daftar`
--
ALTER TABLE `peserta_bayar_daftar`
  ADD PRIMARY KEY (`no_pembayaran`),
  ADD KEY `no_pendaftaran` (`no_pendaftaran`);

--
-- Indeks untuk tabel `peserta_dokumen`
--
ALTER TABLE `peserta_dokumen`
  ADD PRIMARY KEY (`no_dokumen`),
  ADD KEY `no_pendaftaran` (`no_pendaftaran`);

--
-- Indeks untuk tabel `peserta_orangtua`
--
ALTER TABLE `peserta_orangtua`
  ADD PRIMARY KEY (`kd_orangtua`),
  ADD KEY `no_pendaftaran` (`no_pendaftaran`);

--
-- Indeks untuk tabel `peserta_pendaftar`
--
ALTER TABLE `peserta_pendaftar`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `_berita`
--
ALTER TABLE `_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `_info`
--
ALTER TABLE `_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indeks untuk tabel `_sekolah`
--
ALTER TABLE `_sekolah`
  ADD PRIMARY KEY (`nm_universitas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gelombang`
--
ALTER TABLE `gelombang`
  MODIFY `id_gel` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peserta_bayar_daftar`
--
ALTER TABLE `peserta_bayar_daftar`
  MODIFY `no_pembayaran` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peserta_dokumen`
--
ALTER TABLE `peserta_dokumen`
  MODIFY `no_dokumen` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peserta_orangtua`
--
ALTER TABLE `peserta_orangtua`
  MODIFY `kd_orangtua` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `_berita`
--
ALTER TABLE `_berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `_info`
--
ALTER TABLE `_info`
  MODIFY `id_info` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
