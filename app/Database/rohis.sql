-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2023 pada 12.05
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rohis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarhadir`
--

CREATE TABLE `daftarhadir` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `nama` varchar(126) NOT NULL,
  `nim` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(250) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `daftarhadir`
--

INSERT INTO `daftarhadir` (`id`, `id_kegiatan`, `nama`, `nim`, `tanggal`, `file`, `updated_at`) VALUES
(1, 1, 'Muhammad Barbara', 221910740, '2023-02-20', 'bukti-default1.png', '2023-05-09 16:31:21'),
(2, 1, 'Muhammad Sariro Niro Kakawin', 211913422, '2023-02-20', 'bukti-default2.png', '2023-05-09 16:31:21'),
(3, 1, 'Banendra Hayuk Saputri', 212008898, '2023-02-20', 'bukti-default3.png', '2023-05-09 16:31:21'),
(4, 1, 'Rhuhul Sulfahmi Kun', 221910845, '2023-02-20', 'bukti-default4.png', '2023-05-09 16:31:21'),
(5, 1, 'Siti Sowan Rumiyin', 222208451, '2023-02-20', 'bukti-default1.png', '2023-05-09 16:31:21'),
(11, 4, 'Banendra Hayuk Saputri', 212008898, '2023-04-05', 'bukti-default3.png', '2023-05-09 16:31:21'),
(12, 4, 'Rhuhul Sulfahmi Kun', 221910845, '2023-04-05', 'bukti-default1.png', '2023-05-09 16:31:21'),
(13, 4, 'Siti Sowan Rumiyin', 222208451, '2023-04-05', 'bukti-default2.png', '2023-05-09 16:31:21'),
(14, 4, 'Yoka Prasetia', 221910846, '2023-04-05', 'bukti-default2.png', '2023-05-09 16:31:21'),
(15, 7, 'Yoka Prasetia', 221910846, '2023-05-12', 'bukti-1683827204_e5e5c65886f1e01fa1a7.jpg', '2023-05-12 00:46:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuangan`
--

CREATE TABLE `keuangan` (
  `id` int(11) UNSIGNED NOT NULL,
  `nominal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` varchar(126) NOT NULL,
  `file` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `keuangan`
--

INSERT INTO `keuangan` (`id`, `nominal`, `tanggal`, `jenis`, `file`, `keterangan`, `updated_at`) VALUES
(1, 125000, '2023-04-24', 'Masuk', 'bukti-default1.png', 'Kas Rutinan', '2023-05-09 16:31:29'),
(2, 200000, '2023-01-24', 'Keluar', 'bukti-default2.png', 'Pembelian Peralatan Kajian', '2023-05-09 16:31:29'),
(3, 400000, '2023-04-01', 'Masuk', 'bukti-default3.png', 'Subsidi dari Kampus', '2023-05-09 16:31:29'),
(4, 325000, '2023-03-10', 'Masuk', 'bukti-default4.png', 'Danus Rutin', '2023-05-09 16:31:29'),
(6, 105500, '2023-05-03', 'Keluar', 'bukti-1683732088_924437f254dd83e37eca.jpg', 'Keperluan Tadarus Rutinan', '2023-05-10 22:21:28'),
(7, 185500, '2023-05-09', 'Masuk', 'bukti-1683732121_62f89ba76162983f382e.jpg', 'Donasi Orang Luar', '2023-05-10 22:22:01'),
(8, 57000, '2023-05-01', 'Keluar', 'bukti-1683732161_08b888997d518d38eff2.jpg', 'Pembelian Perabot Mabes Rohis', '2023-05-10 22:22:41'),
(9, 15000, '2023-05-24', 'Keluar', 'bukti-1683733748_9f23aaf21a100017099e.jpg', 'Cuan Dong', '2023-05-10 22:49:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logaktivitas`
--

CREATE TABLE `logaktivitas` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_user` varchar(126) NOT NULL,
  `nim` varchar(126) NOT NULL,
  `jabatan` varchar(126) NOT NULL,
  `waktu` datetime NOT NULL,
  `jenis_aktivitas` varchar(126) NOT NULL,
  `id_aktivitas` varchar(255) NOT NULL,
  `aksi` varchar(126) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `logaktivitas`
--

INSERT INTO `logaktivitas` (`id`, `nama_user`, `nim`, `jabatan`, `waktu`, `jenis_aktivitas`, `id_aktivitas`, `aksi`) VALUES
(1, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-10 22:55:58', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(2, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-10 22:56:04', 'Login', '<i>(tidak ada)</i>', 'Login'),
(3, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 08:04:17', 'Login', '<i>(tidak ada)</i>', 'Login'),
(4, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 13:11:06', 'Login', '<i>(tidak ada)</i>', 'Login'),
(5, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 16:28:00', 'Login', '<i>(tidak ada)</i>', 'Login'),
(6, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 16:52:45', 'Menu Akun', '13', 'Delete Akun Pengguna'),
(7, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 16:53:37', 'Menu Akun', '<i>(tidak ada)</i> ', 'Import Data User'),
(8, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 16:55:15', 'Menu Akun', '14', 'Delete Akun Pengguna'),
(9, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 16:55:23', 'Menu Akun', '12', 'Delete Akun Pengguna'),
(10, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 16:55:32', 'Menu Akun', '<i>(tidak ada)</i> ', 'Import Data User'),
(11, 'Coba Import 1', '223234567', 'Anggota', '2023-05-11 16:56:57', 'Login', '<i>(tidak ada)</i>', 'Login'),
(12, 'Coba Import 1', '223234567', 'Anggota', '2023-05-11 16:58:42', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(13, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 16:59:12', 'Menu Akun', '15', 'Delete Akun Pengguna'),
(14, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 16:59:18', 'Menu Akun', '16', 'Delete Akun Pengguna'),
(15, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 16:59:24', 'Menu Akun', '17', 'Delete Akun Pengguna'),
(16, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 16:59:33', 'Menu Akun', '18', 'Delete Akun Pengguna'),
(17, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:01:50', 'Menu Akun', '<i>(tidak ada)</i> ', 'Import Data User'),
(18, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:09:44', 'Menu Akun', '<i>(tidak ada)</i> ', 'Import Data User'),
(19, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:11:57', 'Menu Akun', '26', 'Delete Akun Pengguna'),
(20, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:12:08', 'Menu Akun', '25', 'Delete Akun Pengguna'),
(21, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:12:16', 'Menu Akun', '24', 'Delete Akun Pengguna'),
(22, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:12:23', 'Menu Akun', '19', 'Delete Akun Pengguna'),
(23, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:13:51', 'Menu Akun', '23', 'Delete Akun Pengguna'),
(24, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:13:58', 'Menu Akun', '20', 'Delete Akun Pengguna'),
(25, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:14:03', 'Menu Akun', '21', 'Delete Akun Pengguna'),
(26, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:14:10', 'Menu Akun', '22', 'Delete Akun Pengguna'),
(27, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:16:22', 'Menu Akun', '<i>(tidak ada)</i> ', 'Import Data User'),
(28, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:17:44', 'Menu Akun', '27', 'Delete Akun Pengguna'),
(29, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:17:51', 'Menu Akun', '28', 'Delete Akun Pengguna'),
(30, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:17:59', 'Menu Akun', '<i>(tidak ada)</i> ', 'Import Data User'),
(31, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:18:32', 'Menu Akun', '29', 'Delete Akun Pengguna'),
(32, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:18:40', 'Menu Akun', '<i>(tidak ada)</i> ', 'Import Data User'),
(33, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:36:25', 'Menu Akun', '<i>(tidak ada)</i> ', 'Import Data User'),
(34, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:36:45', 'Menu Akun', '34', 'Delete Akun Pengguna'),
(35, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:36:52', 'Menu Akun', '35', 'Delete Akun Pengguna'),
(36, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:36:58', 'Menu Akun', '36', 'Delete Akun Pengguna'),
(37, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 17:37:04', 'Menu Akun', '37', 'Delete Akun Pengguna'),
(38, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 20:09:55', 'Login', '<i>(tidak ada)</i>', 'Login'),
(39, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 20:27:02', 'Menu Akun', '<i>(tidak ada)</i> ', 'Download template file excel'),
(40, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 21:09:20', 'Login', '<i>(tidak ada)</i>', 'Login'),
(41, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 21:20:58', 'Menu Akun', '<i>(tidak ada)</i> ', 'Download template file excel'),
(42, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 22:05:58', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-05-26', 'Tambah Pengumuman'),
(43, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 22:38:25', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-05-23', 'Tambah Pengumuman'),
(44, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 22:57:58', 'Menu Akun', '<i>(tidak ada)</i> ', 'Download template file excel'),
(45, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:10:15', 'Login', '<i>(tidak ada)</i>', 'Login'),
(46, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:23:58', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(47, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:24:04', 'Login', '<i>(tidak ada)</i>', 'Login'),
(48, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:25:46', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-06-10', 'Tambah Pengumuman'),
(49, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:26:52', 'Menu Profile', '1', 'Update User Profile'),
(50, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:28:15', 'Menu Profile', '1', 'Update User Profile'),
(51, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:28:31', 'Menu Profile', '1', 'Update User Profile'),
(52, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:28:39', 'Menu Profile', '1', 'Update User Profile'),
(53, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:33:55', 'Menu Akun', '<i>(tidak ada)</i> ', 'Download template file excel'),
(54, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:34:07', 'Menu Akun', '<i>(tidak ada)</i> ', 'Import Data User'),
(55, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:35:11', 'Menu Akun', '10', 'Delete Akun Pengguna'),
(56, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:35:23', 'Menu Akun', '<i>(tidak ada)</i> ', 'Import Data User'),
(57, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:35:31', 'Menu Akun', '11', 'Delete Akun Pengguna'),
(58, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:35:37', 'Menu Akun', '12', 'Delete Akun Pengguna'),
(59, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:35:44', 'Menu Akun', '13', 'Delete Akun Pengguna'),
(60, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:35:50', 'Menu Akun', '14', 'Delete Akun Pengguna'),
(61, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:38:15', 'Menu Akun', '<i>(nim)</i> 221910000', 'Tambah Akun Pengguna'),
(62, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:39:01', 'Menu Akun', '15', 'Update Akun Pengguna'),
(63, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:39:41', 'Menu Akun', '15', 'Update Akun Pengguna'),
(64, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:42:13', 'Menu Akun', '<i>(tidak ada)</i> ', 'Download template file excel'),
(65, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:58:05', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(66, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-11 23:58:13', 'Login', '<i>(tidak ada)</i>', 'Login'),
(67, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 00:00:53', 'Menu Profile', '1', 'Update User Profile'),
(68, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 00:01:17', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(69, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 00:01:24', 'Login', '<i>(tidak ada)</i>', 'Login'),
(70, 'Siti Marfuthoh', '222210886', 'Bendahara', '2023-05-12 00:02:20', 'Login', '<i>(tidak ada)</i>', 'Login'),
(71, 'Siti Marfuthoh', '222210886', 'Bendahara', '2023-05-12 00:29:49', 'Login', '<i>(tidak ada)</i>', 'Login'),
(72, 'Siti Marfuthoh', '222210886', 'Bendahara', '2023-05-12 00:30:37', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(73, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 00:45:54', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-05-12', 'Tambah Pengumuman'),
(74, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 00:48:31', 'Menu Pengumuman', '7', 'Update Pengumuman'),
(75, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 00:50:37', 'Menu Pengumuman', '7', 'Update Pengumuman'),
(76, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 01:05:26', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-06-09', 'Tambah Pengumuman'),
(77, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 01:05:56', 'Menu Pengumuman', '8', 'Update Pengumuman'),
(78, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 01:06:15', 'Menu Pengumuman', '8', 'Hapus Pengumuman'),
(79, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 01:06:30', 'Menu Pengumuman', '6', 'Update Pengumuman'),
(80, 'Muhammad Sasmito', '212110880', 'Humas', '2023-05-12 01:11:00', 'Login', '<i>(tidak ada)</i>', 'Login'),
(81, 'Muhammad Sasmito', '212110880', 'Humas', '2023-05-12 01:11:28', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(82, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 01:12:00', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(83, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 08:20:27', 'Login', '<i>(tidak ada)</i>', 'Login'),
(84, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 08:27:07', 'Login', '<i>(tidak ada)</i>', 'Login'),
(85, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 08:29:52', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(86, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 08:34:05', 'Login', '<i>(tidak ada)</i>', 'Login'),
(87, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 08:36:51', 'Login', '<i>(tidak ada)</i>', 'Login'),
(88, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 08:37:12', 'Login', '<i>(tidak ada)</i>', 'Login'),
(89, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 08:45:54', 'Login', '<i>(tidak ada)</i>', 'Login'),
(90, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 08:53:13', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(91, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 08:54:53', 'Login', '<i>(tidak ada)</i>', 'Login'),
(92, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 08:56:01', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(93, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 08:57:53', 'Login', '<i>(tidak ada)</i>', 'Login'),
(94, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 08:59:44', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(95, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 08:59:53', 'Login', '<i>(tidak ada)</i>', 'Login'),
(96, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:00:16', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(97, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:04:35', 'Login', '<i>(tidak ada)</i>', 'Login'),
(98, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:04:52', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(99, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:09:38', 'Login', '<i>(tidak ada)</i>', 'Login'),
(100, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:09:52', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(101, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:11:31', 'Login', '<i>(tidak ada)</i>', 'Login'),
(102, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:11:42', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(103, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:12:00', 'Login', '<i>(tidak ada)</i>', 'Login'),
(104, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:21:11', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(105, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:21:21', 'Login', '<i>(tidak ada)</i>', 'Login'),
(106, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:26:49', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(107, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:30:17', 'Login', '<i>(tidak ada)</i>', 'Login'),
(108, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:30:30', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(109, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:30:38', 'Login', '<i>(tidak ada)</i>', 'Login'),
(110, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:32:41', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(111, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:33:07', 'Login', '<i>(tidak ada)</i>', 'Login'),
(112, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:33:13', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(113, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:33:20', 'Login', '<i>(tidak ada)</i>', 'Login'),
(114, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:36:22', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(115, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:37:29', 'Login', '<i>(tidak ada)</i>', 'Login'),
(116, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:37:45', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(117, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:44:48', 'Login', '<i>(tidak ada)</i>', 'Login'),
(118, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:45:18', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(119, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:45:54', 'Login', '<i>(tidak ada)</i>', 'Login'),
(120, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:53:24', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(121, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:53:34', 'Login', '<i>(tidak ada)</i>', 'Login'),
(122, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:54:00', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(123, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:58:18', 'Login', '<i>(tidak ada)</i>', 'Login'),
(124, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:58:25', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(125, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:58:38', 'Login', '<i>(tidak ada)</i>', 'Login'),
(126, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:58:45', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(127, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:58:59', 'Login', '<i>(tidak ada)</i>', 'Login'),
(128, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 09:59:05', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(129, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 10:00:53', 'Login', '<i>(tidak ada)</i>', 'Login'),
(130, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 11:12:34', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(131, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 11:14:01', 'Login', '<i>(tidak ada)</i>', 'Login'),
(132, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 15:45:34', 'Login', '<i>(tidak ada)</i>', 'Login'),
(133, 'Yoka Prasetia', '221910846', 'Admin', '2023-05-12 16:44:56', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-05-12', 'Tambah Pengumuman');

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
(56, '2023-04-03-230500', 'App\\Database\\Migrations\\AddUsers', 'default', 'App', 1680929569, 1),
(57, '2023-04-05-010449', 'App\\Database\\Migrations\\AddPengumuman', 'default', 'App', 1680929569, 1),
(58, '2023-04-06-013357', 'App\\Database\\Migrations\\AddKeuangan', 'default', 'App', 1680929570, 1),
(59, '2023-04-07-041728', 'App\\Database\\Migrations\\AddQuotes', 'default', 'App', 1680929570, 1),
(60, '2023-04-07-151707', 'App\\Database\\Migrations\\AddDaftarHadir', 'default', 'App', 1680929571, 1),
(61, '2023-04-08-045607', 'App\\Database\\Migrations\\AddDaftarHadir', 'default', 'App', 1680929804, 2),
(62, '2023-05-10-115923', 'App\\Database\\Migrations\\AddLogAktivitas', 'default', 'App', 1683720244, 3),
(63, '2023-05-10-123730', 'App\\Database\\Migrations\\AddLogAktivitas', 'default', 'App', 1683722364, 4),
(64, '2023-05-10-155446', 'App\\Database\\Migrations\\AddLogAktivitas', 'default', 'App', 1683734129, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `tempat` varchar(126) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `peserta` varchar(250) NOT NULL,
  `link` varchar(250) DEFAULT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `nama`, `isi`, `tempat`, `tanggal`, `waktu_mulai`, `waktu_selesai`, `peserta`, `link`, `updated_at`) VALUES
(1, 'Pengajian Rutin Hari Senin', 'Pengajian rutin dalam rangka mengendalikan mutu mahasiswa Politeknik Statistika STIS yang dihadiri wajib oleh mahasiswa tingkat III. Mahasiswa lain dan masyarakat umum juga boleh mengikuti kegiatan.', 'Masjid Kampus Politeknik Statistika STIS', '2023-02-20', '07:30:00', '11:00:00', 'Tingkat I, Umum', '', '2023-05-11 23:23:28'),
(2, 'Kajian Islam Spesial 2023', 'Dalam Rangka memperingati Isra\' Mi\'raj, Polstat STIS mengadakan pengajian spesial unutk menumbuhkan kesaradan mahasiswa terhadap peristiwa spesial yang dirasakan oleh Rasulullah.', 'Live Zoom STIS', '2023-03-01', '08:00:00', '10:00:00', 'Tingkat I, Tingkat II, Tingkat III, Tingkat IV, Umum', 'https://zoom.us/', '2023-05-11 23:23:28'),
(3, 'Peringatan Nuzulul Qur\'an', 'Memperingati Peristiwa Nuzulul Qur\'an dengan mengadakan pengajian terhadap seluruh mahasiswa STIS terutama tingkat I dan II', 'Online Melalui Zoom', '2023-03-30', '19:30:00', '21:00:00', 'Tingkat IV, Umum', 'https://s.stis.ac.id/VBGOCPoisson2022', '2023-05-11 23:23:28'),
(4, 'Peringatan Maulid Nabi', 'Memperingati datangnya bulan Ramadhan, Rohis Polstat STIS mengadakan kajian islam spesial yang diikuti oleh seluruh mahasiswa', 'Auditorium STIS', '2023-04-05', '09:30:00', '11:30:00', 'Tingkat I, Tingkat II, Tingkat III, Tingkat IV', '', '2023-05-11 23:23:28'),
(5, 'Peringatan Lebaran', 'Menyambut Lebaran, Rohis Polstat STIS mengadakan kajian islam spesial yang diikuti oleh seluruh mahasiswa', 'Auditorium STIS', '2023-04-20', '09:30:00', '11:30:00', 'Tingkat IV, Umum', '', '2023-05-11 23:23:28'),
(6, 'Kajian Islam Spesial 2024', 'Memperingati Peristiwa Nuzulul Qur\'an dengan mengadakan pengajian terhadap seluruh mahasiswa STIS terutama tingkat I dan II', 'Auditorium STIS', '2023-06-10', '11:25:00', '23:25:00', 'Tingkat II, Tingkat IV, Umum', '', '2023-05-12 01:06:29'),
(7, 'Kegiatan Rutin Tingkat 4', 'Rutinan Setiap Bulan Sekali khusus tingkat 4', 'Auditorium STIS', '2023-05-11', '00:51:00', '00:52:00', 'Tingkat IV', '', '2023-05-12 00:50:37'),
(9, 'Latihan Kegiatan', 'Latihan Kegiatan', 'Auditorium STIS', '2023-05-11', '22:45:00', '23:50:00', 'Tingkat I, Tingkat II, Tingkat III, Tingkat IV, Umum', '', '2023-05-12 16:44:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) UNSIGNED NOT NULL,
  `quotes` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `quotes`
--

INSERT INTO `quotes` (`id`, `quotes`) VALUES
(1, '“Dan janganlah engkau mengira, bahwa Allah lengah dari apa yang diperbuat oleh orang yang zhalim.” [QS. Ibrahim: 42]'),
(2, '“Sungguh, apa yang dijanjikan kepadamu pasti terjadi.” [QS. Al-Mursalat: 7]'),
(3, '“Bagimu tidak ada seorang pun penolong maupun pemberi syafaat selain Dia.” [QS. As-Sajdah: 4]'),
(4, '“Mereka sedikit sekali tidur pada waktu malam.” [QS. Adz-Dzariyat: 17]'),
(5, '“Dan pada akhir malam mereka memohon ampunan (kepada Allah).” [QS. Adz-Dzariyat: 18]'),
(6, '“Dan berpegangteguhlah kepada Allah. Dialah Pelindungmu.” [QS. Al-Hajj: 78]'),
(7, '“Kami telah menentukan kematian masing-masing kamu.” [QS. Al-Waqi’ah: 60]'),
(8, '“Dan pada sebagian malam, lakukanlah shalat tahajud (sebagai suatu ibadah) tambahan bagimu.” [QS. Al-Isra’: 79]'),
(9, '“Semua yang ada di bumi akan binasa.” [QS. Ar-Rahman: 26]'),
(10, '“Dan Kami tidak menciptakan langit dan bumi dan segala apa yang ada di antara keduanya dengan main-main.” [QS. Al-Anbiya’: 16]'),
(11, '“Sesungguhnya segala yang kamu seru selain Allah tidak dapat menciptakan seekor lalat pun, walaupun mereka bersatu untuk menciptakannya.” [QS. Al-Hajj: 73]'),
(12, '“Barangsiapa tidak diberi cahaya (petunjuk) oleh Allah, maka dia tidak mempunyai cahaya sedikit pun.” [QS. An-Nur: 40]'),
(13, '“Allah kelak akan memberikan kelapangan setelah kesempitan.” [QS. At-Talaq: 7]'),
(14, '“Dan sungguh, kelak Tuhanmu pasti memberikan karunia-Nya kepadamu, sehingga engkau menjadi puas.” [QS. Ad-Dhuha: 5]'),
(15, '“Dan janganlah kamu berputus asa dari rahmat Allah.” [QS. Yusuf: 87]'),
(16, '“Mahasuci Allah, Pencipta yang paling baik.” [QS. Al-Mu’minun: 14]'),
(17, '“Dan aku menyerahkan urusanku kepada Allah.” [QS. Ghafir: 44]'),
(18, '“Dan janganlah engkau berjalan di bumi ini dengan sombong, karena sesungguhnya engkau tidak akan dapat menembus bumi dan tidak akan mampu menjulang setinggi gunung.” [QS. Al-Isra’: 37]'),
(19, '“Dan janganlah kamu jatuhkan (diri sendiri) ke dalam kebinasaan dengan tanganmu sendiri.” [QS. Al-Baqarah: 195]'),
(20, '“Dan janganlah kamu mencari-cari kesalahan orang lain dan janganlah ada di antara kamu yang menggunjing sebagian yang lain.” [QS. Al-Hujurat: 12]'),
(21, '“Ya Tuhan kami, janganlah Engkau hukum kami jika kami lupa atau kami melakukan kesalahan.” [QS. Al-Baqarah: 286]'),
(22, '“Maka tidakkah mereka menghayati Al-Qur’an ataukah hati mereka sudah terkunci?.” [QS. Muhammad: 24]'),
(23, '“Bukankah Kami telah menjadikan bumi sebagai hamparan, (6) dan gunung-gunung sebagai pasak? (7).” [QS. An-Naba’: 6-7]'),
(24, '“Jika kamu bersyukur, Dia meridhai kesyukuranmu itu.” [QS. Az-Zumar: 7]'),
(25, '“Dan surga didekatkan kepada orang-orang yang bertakwa pada tempat yang tidak jauh (dari mereka).” [QS. Qaf: 31]');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(126) NOT NULL,
  `email` varchar(126) NOT NULL,
  `no_hp` varchar(126) DEFAULT NULL,
  `domisili` text DEFAULT NULL,
  `nim` varchar(126) NOT NULL,
  `kelas` varchar(126) DEFAULT NULL,
  `angkatan` varchar(126) DEFAULT NULL,
  `tingkat` varchar(126) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `password` varchar(126) NOT NULL,
  `role` varchar(126) NOT NULL,
  `alamat_kost` varchar(126) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `no_hp`, `domisili`, `nim`, `kelas`, `angkatan`, `tingkat`, `tanggal_lahir`, `password`, `role`, `alamat_kost`, `jenis_kelamin`) VALUES
(1, 'Yoka Prasetia', '221910846@stis.ac.id', '0895379261962', 'Yogyakarta', '221910846', '4SI2', '61', 'Tingkat IV', '2002-01-20', '$2y$10$lPQj1joi2PjxzxtrviganeEN1y1PQfBJw/jC0UfkJToVBxLUM5xW.', 'Admin', 'Jl. Solihun', 'Laki-Laki'),
(2, 'Ridwan Syech Nawawi', '221112213@stis.ac.id', '0895379261943', 'Jakarta', '221112213', '4SI1', '61', 'Tingkat IV', '2002-04-20', '$2y$10$HTJNJLQDTPOqrKfuW8JE5OL5U6ThZ4JdQjYnpxH3IA9OpKQ3j10lK', 'Ketua', 'Jl. Solihun', 'laki-laki'),
(3, 'Muhammad Sasmito', '212110880@stis.ac.id', '0895123456786', 'Tangerang', '212110880', '2KS3', '63', 'Tingkat II', '2003-08-24', '$2y$10$lVXtG66NOAUPYAd9SOxCCe91L1UeUTMRPdX3iGRmmM6XbJuWzieDi', 'Humas', 'Jl. Sensus II', 'laki-laki'),
(4, 'Siti Marfuthoh', '222210886@stis.ac.id', '0895123456785', 'Bengkulu', '222210886', '1ST4', '64', 'Tingkat I', '2004-01-01', '$2y$10$JbL6x5WksqERLaKLjHQlJuIVLf6VuPK915zVZ9vthrRY1wySc46jK', 'Bendahara', 'Gg. Asem', 'Perempuan'),
(5, 'Muhammad Barbara', '221910740@stis.ac.id', '0895123456784', 'Aceh', '221910740', '4SI2', '61', 'Tingkat IV', '2000-06-01', '$2y$10$BG8SlyX4M1szj6QpWOhIre1GYhLGIqxsCcOwgDnSvozLPW8gNigmK', 'Anggota', 'Gg. Ayub', 'Laki-Laki'),
(6, 'Muhammad Sariro Niro Kakawin', '211913422@stis.ac.id', '0895123456783', 'Bangka', '211913422', '4SK1', '61', 'Tingkat IV', '2001-01-23', '$2y$10$KVKU/CGBLUw81DRvAOpqduxsvroovd4Aaw7I/id.I6hFIIsBd/Bnm', 'Anggota', 'Gg. Ayub', 'Laki-Laki'),
(7, 'Banendra Hayuk Saputri', '212008898@stis.ac.id', '0895123456782', 'Yogyakarta', '212008898', '3D32', '62', 'Tingkat III', '2002-01-03', '$2y$10$aQm.MIYvGdwkU19RvfgLD.559C18CKcVhO6J06yVlpMMk9XrCCQAm', 'Anggota', 'Gg. Santai', 'Perempuan'),
(8, 'Rhuhul Sulfahmi Kun', '221910845@stis.ac.id', '0895123456781', 'Yogyakarta', '221910845', '4SK1', '62', 'Tingkat III', '2002-03-14', '$2y$10$5Bu0Mscj5ZtajPk04iqevuyDIhiuC6jgx7P2.z2a5gP2T/JFZJIj6', 'Anggota', 'Gg. Ggu', 'Laki-Laki'),
(9, 'Siti Sowan Rumiyin', '222208451@stis.ac.id', '0895123456781', 'Jawa Timur', '222208451', '4SK1', '63', 'Tingkat II', '2002-03-14', '$2y$10$77NwwZCQZ9Fu1ku0xt4I5ucSVBdWsl50HOW2fKxcNFEaMfbC6MXzO', 'Anggota', 'Gg. Sempit', 'Perempuan'),
(15, 'Kajian Islam', '221910000@stis.ac.id', '081234567892', 'Jawa Tengah', '221910000', '4SE3', '61', 'Tingkat IV', '2023-05-20', '$2y$10$NUzUb6y5.xa3dyhh02OBdOGZkn44PXRuN7f306Yc911N7uTTYZ/fC', 'Anggota', 'Gang Solihun', 'Laki-Laki');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftarhadir`
--
ALTER TABLE `daftarhadir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `logaktivitas`
--
ALTER TABLE `logaktivitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `quotes`
--
ALTER TABLE `quotes`
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
-- AUTO_INCREMENT untuk tabel `daftarhadir`
--
ALTER TABLE `daftarhadir`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `logaktivitas`
--
ALTER TABLE `logaktivitas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
