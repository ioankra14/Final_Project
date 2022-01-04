-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2022 pada 14.24
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
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `isbn` varchar(17) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `halaman` varchar(4) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `foto_buku` varchar(500) NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`isbn`, `judul_buku`, `penerbit`, `kategori`, `halaman`, `tahun_terbit`, `created_at`, `foto_buku`, `updated_at`) VALUES
('9786022893257', 'Metode Penelitian Kualitatif', 'Alfabeta', 'Buku', '274', '2017', '2022-01-04 02:55:37', '1641286537_f5a1a98f63c1366b807f.jpg', '2022-01-04 02:55:37'),
('9786026232779', 'Analisis Perancangan Sistem Berorientasi Objek dengan UML (Unified Modeling Language)', 'Informatika', 'Buku', '268', '2018', '2022-01-04 02:48:28', '1641286108_eec11781da3730e9090a.jpg', '2022-01-04 02:48:28'),
('9786027825666', 'Metode Penelitian Manajemen', 'Alfabeta', 'Buku', '806', '2016', '2022-01-04 02:53:43', '1641286423_b8f7d43093b9baf7c236.jpg', '2022-01-04 02:53:43'),
('9786236897638', 'Pengantar Teknologi Informasi', 'CV. Insan Cendekia Mandiri', 'Buku', '172', '2020', '2022-01-04 02:38:40', '1641285620_a1e56cee9abde52215b9.png', '2022-01-04 02:40:20'),
('9789792970241', 'Metoda Pengumpulan dan Teknik Analisis Data', 'Andi', 'Buku', '326', '2018', '2022-01-04 02:58:19', '1641286699_44e28dbaecf9f32006e9.jpg', '2022-01-04 02:58:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `jenis_kelamin` enum('pria','wanita') NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `foto` varchar(500) NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`, `jenis_kelamin`, `no_telp`, `email`, `alamat`, `created_at`, `foto`, `updated_at`) VALUES
('C1857201060', 'Yolfin Angeliani Labi', 'Sistem Informasi', 'wanita', '08990652021', 'yolfin12@gmail.com', 'Jl. Perjuangan', '2021-12-02 01:56:35', '1638431795_a9a3f547ecbee27f161d.jpeg', '2021-12-02 01:56:35'),
('C1955201003', 'Rhico Stevenson', 'Teknik Informatika', 'pria', '082149682140', 'RhicoStev@gmail.com', 'Jln. G.obos XXV block D&E', '2022-01-04 03:11:38', '1641287498_472f522bd6dc95009f35.jpg', '2022-01-04 03:11:38'),
('C1955201059', 'Ali Khoirul Anam', 'Teknik Informatika', 'pria', '082149503417', 'Anam22@gmail.com', 'Jl. Hiu', '2022-01-04 03:35:44', '1641288944_52d220dc81cc247b8055.jpg', '2022-01-04 03:35:44'),
('C1955201063', 'Merry Chrystina', 'Teknik Informatika', 'wanita', '083150163126', 'Mermer24@gmail.com', 'Jl. Mahir Mahar', '2022-01-04 03:29:25', '1641288565_254cbff89f70f4c643c3.jpg', '2022-01-04 03:29:25'),
('C1955201070', 'Cindy Adilla', 'Teknik Informatika', 'wanita', '085252223484', 'CindyA13@gmail.com', 'Jl. G. Obos XII', '2022-01-04 03:39:26', '1641289166_c4448a9202b278fe1b5b.jpg', '2022-01-04 03:39:26'),
('C1955201074', 'Kezia Sinta Asih', 'Teknik Informatika', 'wanita', '082152057081', 'Keziasa74@gmail.com', 'Jl. G. Obos XX', '2022-01-04 03:19:58', '1641287998_0e2c9b725b03262c1d8f.jpg', '2022-01-04 03:19:58'),
('C1955201075', 'Muhamad Nahlipan', 'Teknik Informatika', 'pria', '082353159203', 'ipan26@gmail.com', 'Jl. Kecipir', '2022-01-04 03:03:04', '1641286984_cfc3853d17ff1a224da5.jpeg', '2022-01-04 03:03:04'),
('C1955201078', 'Sunia Isanasinta', 'Teknik Informatika', 'wanita', '085246370384', 'Suniasun123@gmail.com', 'Jl. G. Obos VI Gang I', '2022-01-04 03:32:10', '1641288730_4bfbf1cb93bcce47df7b.jpg', '2022-01-04 03:32:10'),
('C1955201084', 'Christine Anggraini Putri', 'Teknik Informatika', 'wanita', '082151024558', 'Christine84@gmail.com', 'Jl. G. Obos VI', '2022-01-04 03:16:45', '1641287805_7feaae19ef0a253828be.jpg', '2022-01-04 03:16:45'),
('C1955201087', 'Maylinda Diah Wardani', 'Teknik Informatika', 'wanita', '085249686954', 'Meylin19@gmail.com', 'Jl. G. Obos VI Gang 13A', '2022-01-04 03:41:56', '1641289316_951931e7971bb79f46de.jpg', '2022-01-04 03:41:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(3, '2021-10-14-042156', 'App\\Database\\Migrations\\Users', 'default', 'App', 1638183613, 1),
(4, '2021-11-19-043508', 'App\\Database\\Migrations\\Mahasiswa', 'default', 'App', 1638183613, 1),
(8, '2021-12-29-230343', 'App\\Database\\Migrations\\Buku', 'default', 'App', 1640819044, 2),
(20, '2022-01-04-050015', 'App\\Database\\Migrations\\Riwayat', 'default', 'App', 1641272446, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isbn` varchar(17) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `lama_peminjaman` varchar(2) NOT NULL,
  `status_pengembalian` enum('Late','On-time') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`nim`, `nama`, `isbn`, `judul_buku`, `lama_peminjaman`, `status_pengembalian`, `created_at`, `updated_at`) VALUES
('C1955201063', 'Merry Chrystina', '9789792970241', 'Metoda Pengumpulan dan Teknik Analisis Data', '7', 'Late', '2022-01-04 03:47:59', '2022-01-04 03:48:54'),
('C1955201070', 'Cindy Adilla', '9786026232779', 'Analisis Perancangan Sistem Berorientasi Objek dengan UML (Unified Modeling Language)', '14', 'On-time', '2022-01-04 03:43:58', '2022-01-04 03:49:04'),
('C1955201074', 'Kezia Sinta Asih', '9786236897638', 'Pengantar Teknologi Informasi', '7', 'On-time', '2022-01-04 03:46:58', '2022-01-04 03:49:20'),
('C1955201075', 'Muhamad Nahlipan', '9786022893257', 'Metode Penelitian Kualitatif', '7', 'Late', '2022-01-04 03:22:03', '2022-01-04 03:22:03'),
('C1955201078', 'Sunia Isanasinta', '9786027825666', 'Metode Penelitian Manajemen', '7', 'Late', '2022-01-04 03:45:35', '2022-01-04 03:45:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `created_at`, `updated_at`) VALUES
('Anton', '$2y$10$1amkqBxW8RWwi6OVVXtLXOX5w.7o4FYpr7Zz7Mq.7nyHwXt74Qium', 'Anton Kurnia', '2021-11-29 05:36:40', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`isbn`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
