-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2023 pada 06.02
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
(1, 1, 'Ketua Rohis', 333312213, '2023-02-20', 'bukti-default1.png', '2023-07-19 17:33:44'),
(2, 1, 'Humas Rohis', 333310880, '2023-02-20', 'bukti-default3.png', '2023-07-19 17:33:44'),
(3, 1, 'Bendahara Rohis', 333310886, '2023-02-20', 'bukti-default4.png', '2023-07-19 17:33:44'),
(4, 1, 'Anggota Rohis Pertama', 333310740, '2023-02-20', 'bukti-default1.png', '2023-07-19 17:33:44'),
(5, 1, 'Anggota Rohis Kedua', 333313422, '2023-02-20', 'bukti-default2.png', '2023-07-19 17:33:44'),
(6, 2, 'Yoka Prasetia', 221910846, '2023-03-01', 'bukti-default2.png', '2023-07-19 17:33:44'),
(7, 3, 'Ketua Rohis', 333312213, '2023-03-30', 'bukti-default2.png', '2023-07-19 17:33:44'),
(8, 3, 'Yoka Prasetia', 221910846, '2023-03-30', 'bukti-default3.png', '2023-07-19 17:33:44'),
(9, 3, 'Humas Rohis', 333310880, '2023-03-30', 'bukti-default4.png', '2023-07-19 17:33:44'),
(10, 4, 'Ketua Rohis', 333312213, '2023-04-05', 'bukti-default3.png', '2023-07-19 17:33:44'),
(11, 4, 'Yoka Prasetia', 221910846, '2023-04-05', 'bukti-default1.png', '2023-07-19 17:33:44'),
(12, 4, 'Humas Rohis', 333310880, '2023-04-05', 'bukti-default2.png', '2023-07-19 17:33:44'),
(13, 4, 'Anggota Rohis Ketiga', 333308898, '2023-04-05', 'bukti-default2.png', '2023-07-19 17:33:44'),
(14, 5, 'Anggota Rohis Keempat', 333310845, '2023-04-05', 'bukti-default3.png', '2023-07-19 17:33:44'),
(15, 5, 'Anggota Rohis Kelima', 333308451, '2023-04-05', 'bukti-default1.png', '2023-07-19 17:33:44'),
(16, 5, 'Yoka Prasetia', 221910846, '2023-04-05', 'bukti-default1.png', '2023-07-19 17:33:44');

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
(1, 125000, '2023-04-24', 'Keluar', 'bukti-default1.png', 'Kas Rutinan Bulan Juli 2023', '2023-07-18 06:25:14'),
(2, 200000, '2023-01-24', 'Keluar', 'bukti-default2.png', 'Pembelian Peralatan Kajian', '2023-07-18 06:30:08'),
(3, 400000, '2023-04-01', 'Masuk', 'bukti-default3.png', 'Subsidi dari Kampus', '2023-07-15 14:42:02'),
(4, 325000, '2023-03-10', 'Masuk', 'bukti-default4.png', 'Danus Rutin', '2023-07-15 14:42:02'),
(8, 350000, '2023-07-18', 'Masuk', 'bukti-1689636456_db68a90c99d661037329.png', 'Pengadaan Kas Khusus', '2023-07-18 06:27:36');

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
(1, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-15 14:46:44', 'Login', '<i>(tidak ada)</i>', 'Login'),
(2, 'Humas Rohis', '212110880', 'Humas', '2023-07-15 14:47:16', 'Login', '<i>(tidak ada)</i>', 'Login'),
(3, 'Bendahara Rohis', '222210886', 'Bendahara', '2023-07-15 14:47:40', 'Login', '<i>(tidak ada)</i>', 'Login'),
(4, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 15:02:09', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-07-16', 'Tambah Pengumuman'),
(5, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 17:09:13', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-07-17', 'Tambah Pengumuman'),
(6, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 17:14:26', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-07-26', 'Tambah Pengumuman'),
(7, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 17:15:26', 'Menu Pengumuman', '8', 'Hapus Pengumuman'),
(8, 'Bendahara Rohis', '222210886', 'Bendahara', '2023-07-15 17:17:12', 'Login', '<i>(tidak ada)</i>', 'Login'),
(9, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-15 17:52:47', 'Login', '<i>(tidak ada)</i>', 'Login'),
(10, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 18:45:18', 'Menu Akun', '1', 'Update Akun Pengguna'),
(11, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 18:45:54', 'Menu Akun', '8', 'Ubah Status Pengguna'),
(12, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 18:46:07', 'Menu Akun', '8', 'Ubah Status Pengguna'),
(13, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 18:46:20', 'Menu Akun', '8', 'Ubah Status Pengguna'),
(14, 'Anggota Rohis 04', '221910845', 'Anggota', '2023-07-15 18:49:38', 'Login', '<i>(tidak ada)</i>', 'Login'),
(15, 'Anggota Rohis 04', '221910845', 'Anggota', '2023-07-15 18:49:51', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(16, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 18:49:58', 'Menu Akun', '8', 'Ubah Status Pengguna'),
(17, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 18:50:47', 'Menu Akun', '8', 'Ubah Status Pengguna'),
(18, 'Anggota Rohis 04', '221910845', 'Anggota', '2023-07-15 18:50:59', 'Login', '<i>(tidak ada)</i>', 'Login'),
(19, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 18:52:52', 'Menu Akun', '8', 'Ubah Status Pengguna'),
(20, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 18:58:57', 'Menu Akun', '8', 'Ubah Status Pengguna'),
(21, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 18:59:07', 'Menu Akun', '7', 'Ubah Status Pengguna'),
(22, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 18:59:14', 'Menu Akun', '8', 'Ubah Status Pengguna'),
(23, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 19:00:01', 'Menu Akun', '9', 'Ubah Password Pengguna'),
(24, 'Anggota Rohis 05', '222208451', 'Anggota', '2023-07-15 19:00:26', 'Login', '<i>(tidak ada)</i>', 'Login'),
(25, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 19:00:45', 'Menu Akun', '9', 'Ubah Password Pengguna'),
(26, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 19:01:01', 'Menu Akun', '9', 'Ubah Profil Pengguna'),
(27, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 19:02:01', 'Menu Profile', '1', 'Update User Profile'),
(28, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 19:02:13', 'Menu Profile', '1', 'Update User Password'),
(29, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 19:02:29', 'Menu Akun', '1', 'Ubah Password Pengguna'),
(30, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 19:02:37', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(31, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 19:02:45', 'Login', '<i>(tidak ada)</i>', 'Login'),
(32, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 19:11:17', 'Menu Akun', '7', 'Ubah Status Pengguna'),
(33, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 19:11:34', 'Menu Akun', '6', 'Ubah Status Pengguna'),
(34, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 19:11:41', 'Menu Akun', '5', 'Ubah Status Pengguna'),
(35, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 19:57:42', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-08-01', 'Tambah Pengumuman'),
(36, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 19:58:56', 'Menu Pengumuman', '9', 'Hapus Pengumuman'),
(37, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 19:59:37', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-07-27', 'Tambah Pengumuman'),
(38, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 20:04:44', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-07-25', 'Tambah Pengumuman'),
(39, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 20:04:58', 'Menu Pengumuman', '10', 'Hapus Pengumuman'),
(40, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 20:09:02', 'Menu Pengumuman', '11', 'Update Pengumuman'),
(41, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 20:56:54', 'Menu Pengumuman', '11', 'Update Pengumuman'),
(42, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 21:21:30', 'Menu Pengumuman', '11', 'Update Pengumuman'),
(43, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 21:21:43', 'Menu Pengumuman', '11', 'Update Pengumuman'),
(44, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 21:33:49', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(45, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 21:33:55', 'Login', '<i>(tidak ada)</i>', 'Login'),
(46, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 21:34:13', 'Menu Pengumuman', '11', 'Update Pengumuman'),
(47, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 21:35:20', 'Menu Akun', '2', 'Ubah Profil Pengguna'),
(48, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-15 21:35:40', 'Login', '<i>(tidak ada)</i>', 'Login'),
(49, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 21:36:21', 'Menu Pengumuman', '11', 'Update Pengumuman'),
(50, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 21:37:14', 'Menu Pengumuman', '11', 'Update Pengumuman'),
(51, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-15 21:37:29', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(52, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-15 21:37:41', 'Login', '<i>(tidak ada)</i>', 'Login'),
(53, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-15 21:38:44', 'Menu Profile', '2', 'Update User Profile'),
(54, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-15 21:41:34', 'Menu Pengumuman', '11', 'Update Pengumuman'),
(55, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-15 21:56:50', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(56, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-15 21:56:54', 'Login', '<i>(tidak ada)</i>', 'Login'),
(57, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 21:57:57', 'Menu Pengumuman', '11', 'Update Pengumuman'),
(58, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 21:58:27', 'Menu Akun', '2', 'Ubah Profil Pengguna'),
(59, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-15 21:58:32', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(60, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-15 21:58:37', 'Login', '<i>(tidak ada)</i>', 'Login'),
(61, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 21:59:40', 'Menu Pengumuman', '11', 'Update Pengumuman'),
(62, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-15 22:02:53', 'Menu Pengumuman', '11', 'Update Pengumuman'),
(63, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 22:03:11', 'Menu Pengumuman', '11', 'Update Pengumuman'),
(64, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 22:04:10', 'Menu Pengumuman', '11', 'Update Pengumuman'),
(65, 'Anggota Rohis 05', '222208451', 'Anggota', '2023-07-15 22:46:09', 'Login', '<i>(tidak ada)</i>', 'Login'),
(66, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-15 23:08:44', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(67, 'Humas Rohis', '212110880', 'Humas', '2023-07-15 23:08:54', 'Login', '<i>(tidak ada)</i>', 'Login'),
(68, 'Humas Rohis', '212110880', 'Humas', '2023-07-15 23:38:16', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(69, 'Bendahara Rohis', '222210886', 'Bendahara', '2023-07-15 23:38:20', 'Login', '<i>(tidak ada)</i>', 'Login'),
(70, 'Bendahara Rohis', '222210886', 'Bendahara', '2023-07-15 23:39:30', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(71, 'Humas Rohis', '212110880', 'Humas', '2023-07-15 23:39:34', 'Login', '<i>(tidak ada)</i>', 'Login'),
(72, 'Humas Rohis', '212110880', 'Humas', '2023-07-15 23:40:03', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(73, 'Anggota Rohis 03', '212008898', 'Anggota', '2023-07-15 23:40:07', 'Login', '<i>(tidak ada)</i>', 'Login'),
(74, 'Anggota Rohis 03', '212008898', 'Anggota', '2023-07-15 23:40:36', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(75, 'Bendahara Rohis', '222210886', 'Bendahara', '2023-07-15 23:40:40', 'Login', '<i>(tidak ada)</i>', 'Login'),
(76, 'Bendahara Rohis', '222210886', 'Bendahara', '2023-07-15 23:40:55', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(77, 'Humas Rohis', '212110880', 'Humas', '2023-07-15 23:41:07', 'Login', '<i>(tidak ada)</i>', 'Login'),
(78, 'Humas Rohis', '212110880', 'Humas', '2023-07-15 23:43:01', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(79, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-15 23:43:05', 'Login', '<i>(tidak ada)</i>', 'Login'),
(80, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-15 23:44:12', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(81, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 23:44:28', 'Menu Akun', '5', 'Ubah Status Pengguna'),
(82, 'Anggota Rohis 01', '221910740', 'Anggota', '2023-07-15 23:45:00', 'Login', '<i>(tidak ada)</i>', 'Login'),
(83, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-15 23:46:31', 'Menu Akun', '8', 'Ubah Status Pengguna'),
(84, 'Anggota Rohis 01', '221910740', 'Anggota', '2023-07-15 23:46:47', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(85, 'Anggota Rohis 04', '221910845', 'Anggota', '2023-07-15 23:46:51', 'Login', '<i>(tidak ada)</i>', 'Login'),
(86, 'Anggota Rohis 04', '221910845', 'Anggota', '2023-07-15 23:53:33', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(87, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-15 23:53:47', 'Login', '<i>(tidak ada)</i>', 'Login'),
(88, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-15 23:55:59', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(89, 'Anggota Rohis 04', '221910845', 'Anggota', '2023-07-15 23:56:03', 'Login', '<i>(tidak ada)</i>', 'Login'),
(90, 'Anggota Rohis 04', '221910845', 'Anggota', '2023-07-16 00:02:12', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(91, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 00:02:34', 'Menu Akun', '6', 'Ubah Status Pengguna'),
(92, 'Anggota Rohis 02', '211913422', 'Anggota', '2023-07-16 00:02:49', 'Login', '<i>(tidak ada)</i>', 'Login'),
(93, 'Anggota Rohis 02', '211913422', 'Anggota', '2023-07-16 00:03:01', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(94, 'Anggota Rohis 03', '212008898', 'Anggota', '2023-07-16 00:03:25', 'Login', '<i>(tidak ada)</i>', 'Login'),
(95, 'Anggota Rohis 03', '212008898', 'Anggota', '2023-07-16 00:03:48', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(96, 'Humas Rohis', '212110880', 'Humas', '2023-07-16 00:03:57', 'Login', '<i>(tidak ada)</i>', 'Login'),
(97, 'Humas Rohis', '212110880', 'Humas', '2023-07-16 00:04:35', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(98, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-16 00:04:40', 'Login', '<i>(tidak ada)</i>', 'Login'),
(99, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-16 00:04:57', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(100, 'Anggota Rohis 01', '221910740', 'Anggota', '2023-07-16 00:05:01', 'Login', '<i>(tidak ada)</i>', 'Login'),
(101, 'Anggota Rohis 01', '221910740', 'Anggota', '2023-07-16 00:05:13', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(102, 'Anggota Rohis 04', '221910845', 'Anggota', '2023-07-16 00:05:20', 'Login', '<i>(tidak ada)</i>', 'Login'),
(103, 'Anggota Rohis 04', '221910845', 'Anggota', '2023-07-16 00:05:32', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(104, 'Anggota Rohis 05', '222208451', 'Anggota', '2023-07-16 00:05:42', 'Login', '<i>(tidak ada)</i>', 'Login'),
(105, 'Anggota Rohis 05', '222208451', 'Anggota', '2023-07-16 00:06:27', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(106, 'Bendahara Rohis', '222210886', 'Bendahara', '2023-07-16 00:06:31', 'Login', '<i>(tidak ada)</i>', 'Login'),
(107, 'Bendahara Rohis', '222210886', 'Bendahara', '2023-07-16 00:09:28', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(108, 'Anggota Rohis 05', '222208451', 'Anggota', '2023-07-16 00:09:32', 'Login', '<i>(tidak ada)</i>', 'Login'),
(109, 'Humas Rohis', '212110880', 'Humas', '2023-07-16 00:11:01', 'Login', '<i>(tidak ada)</i>', 'Login'),
(110, 'Humas Rohis', '212110880', 'Humas', '2023-07-16 00:13:36', 'Menu Profile', '3', 'Update User Profile'),
(111, 'Humas Rohis', '212110880', 'Humas', '2023-07-16 00:14:03', 'Menu Profile', '3', 'Update User Profile'),
(112, 'Humas Rohis', '212110880', 'Humas', '2023-07-16 00:27:25', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(113, 'Humas Rohis', '212110880', 'Humas', '2023-07-16 00:27:43', 'Login', '<i>(tidak ada)</i>', 'Login'),
(114, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 11:41:02', 'Login', '<i>(tidak ada)</i>', 'Login'),
(115, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 11:41:28', 'Menu Akun', '6', 'Ubah Status Pengguna'),
(116, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 11:41:43', 'Menu Akun', '9', 'Ubah Status Pengguna'),
(117, 'Ketua Rohis', '221112213', 'Ketua', '2023-07-16 11:42:50', 'Login', '<i>(tidak ada)</i>', 'Login'),
(118, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 11:45:18', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-08-01', 'Tambah Pengumuman'),
(119, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 11:45:39', 'Menu Pengumuman', '12', 'Update Pengumuman'),
(120, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 11:46:06', 'Menu Pengumuman', '12', 'Hapus Pengumuman'),
(121, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 11:58:48', 'Menu Profile', '1', 'Update User Profile'),
(122, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 12:02:38', 'Menu Profile', '1', 'Update User Profile'),
(123, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 12:03:40', 'Menu Profile', '1', 'Update User Profile'),
(124, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 12:37:06', 'Menu Akun', '<i>(nim)</i> 221910007', 'Tambah Akun Pengguna'),
(125, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 12:41:54', 'Menu Akun', '10', 'Delete Akun Pengguna'),
(126, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 12:42:13', 'Menu Akun', '<i>(nim)</i> 221910007', 'Tambah Akun Pengguna'),
(127, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 12:54:29', 'Menu Profile', '1', 'Update User Profile'),
(128, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:02:46', 'Menu Profile', '1', 'Update User Profile'),
(129, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:03:29', 'Menu Profile', '1', 'Update User Profile'),
(130, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:03:39', 'Menu Profile', '1', 'Update User Profile'),
(131, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:12:44', 'Menu Profile', '1', 'Update User Profile'),
(132, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:13:06', 'Menu Profile', '1', 'Update User Profile'),
(133, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:15:15', 'Menu Profile', '1', 'Update User Profile'),
(134, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:15:43', 'Menu Profile', '1', 'Update User Profile'),
(135, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:15:58', 'Menu Profile', '1', 'Update User Profile'),
(136, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:18:48', 'Menu Profile', '1', 'Update User Profile'),
(137, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:19:22', 'Menu Profile', '1', 'Update User Profile'),
(138, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:20:59', 'Menu Profile', '1', 'Update User Profile'),
(139, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:22:08', 'Menu Profile', '1', 'Update User Profile'),
(140, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:22:25', 'Menu Profile', '1', 'Update User Profile'),
(141, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:22:38', 'Menu Profile', '1', 'Update User Profile'),
(142, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:22:53', 'Menu Profile', '1', 'Update User Profile'),
(143, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:24:11', 'Menu Profile', '1', 'Update User Profile'),
(144, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:26:13', 'Menu Profile', '1', 'Update User Profile'),
(145, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:26:38', 'Menu Profile', '1', 'Update User Profile'),
(146, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:26:58', 'Menu Profile', '1', 'Update User Profile'),
(147, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:33:15', 'Menu Profile', '1', 'Update User Profile'),
(148, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:33:45', 'Menu Profile', '1', 'Update User Profile'),
(149, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:34:33', 'Menu Profile', '1', 'Update User Profile'),
(150, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:35:31', 'Menu Profile', '1', 'Update User Profile'),
(151, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:35:43', 'Menu Profile', '1', 'Update User Profile'),
(152, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 13:43:54', 'Menu Profile', '1', 'Update User Profile'),
(153, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:02:32', 'Login', '<i>(tidak ada)</i>', 'Login'),
(154, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:06:16', 'Menu Profile', '1', 'Update User Profile'),
(155, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:06:38', 'Menu Profile', '1', 'Update User Profile'),
(156, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:08:08', 'Menu Profile', '1', 'Update User Profile'),
(157, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:08:35', 'Menu Profile', '1', 'Update User Profile'),
(158, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:09:56', 'Menu Profile', '1', 'Update User Profile'),
(159, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:10:10', 'Menu Profile', '1', 'Update User Profile'),
(160, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:10:31', 'Menu Profile', '1', 'Update User Profile'),
(161, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:10:44', 'Menu Profile', '1', 'Update User Profile'),
(162, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:11:41', 'Menu Profile', '1', 'Update User Profile'),
(163, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:12:01', 'Menu Profile', '1', 'Update User Profile'),
(164, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:12:13', 'Menu Profile', '1', 'Update User Profile'),
(165, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:22:28', 'Menu Profile', '1', 'Update User Profile'),
(166, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:23:25', 'Menu Profile', '1', 'Update User Profile'),
(167, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:35:40', 'Menu Profile', '1', 'Update User Profile'),
(168, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:36:29', 'Menu Profile', '1', 'Update User Profile'),
(169, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:36:57', 'Menu Profile', '1', 'Update User Profile'),
(170, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 16:37:13', 'Menu Profile', '1', 'Update User Profile'),
(171, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:03:33', 'Menu Profile', '1', 'Update User Profile'),
(172, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:03:59', 'Menu Profile', '1', 'Update User Profile'),
(173, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:04:43', 'Menu Profile', '1', 'Update User Profile'),
(174, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:05:05', 'Menu Profile', '1', 'Update User Profile'),
(175, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:11:32', 'Menu Profile', '1', 'Update User Profile'),
(176, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:11:42', 'Menu Profile', '1', 'Update User Profile'),
(177, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:11:56', 'Menu Profile', '1', 'Update User Profile'),
(178, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:12:10', 'Menu Profile', '1', 'Update User Profile'),
(179, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:12:21', 'Menu Profile', '1', 'Update User Profile'),
(180, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:13:43', 'Menu Profile', '1', 'Update User Profile'),
(181, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:14:30', 'Menu Profile', '1', 'Update User Profile'),
(182, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:14:41', 'Menu Profile', '1', 'Update User Profile'),
(183, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:14:52', 'Menu Profile', '1', 'Update User Profile'),
(184, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:17:56', 'Menu Profile', '1', 'Update User Profile'),
(185, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:19:04', 'Menu Profile', '1', 'Update User Profile'),
(186, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:20:01', 'Menu Profile', '1', 'Update User Profile'),
(187, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:20:38', 'Menu Profile', '1', 'Update User Profile'),
(188, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:21:19', 'Menu Profile', '1', 'Update User Profile'),
(189, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:23:59', 'Menu Profile', '1', 'Update User Profile'),
(190, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:24:25', 'Menu Profile', '1', 'Update User Profile'),
(191, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:28:28', 'Menu Profile', '1', 'Update User Profile'),
(192, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:31:54', 'Menu Profile', '1', 'Update User Profile'),
(193, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 17:35:16', 'Menu Profile', '1', 'Update User Profile'),
(194, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-16 23:45:57', 'Login', '<i>(tidak ada)</i>', 'Login'),
(195, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 00:26:01', 'Menu Akun', '1', 'Ubah Password Pengguna'),
(196, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 00:26:16', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(197, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 00:26:25', 'Login', '<i>(tidak ada)</i>', 'Login'),
(198, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 00:29:31', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(199, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 00:29:37', 'Login', '<i>(tidak ada)</i>', 'Login'),
(200, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 00:32:01', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(201, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 00:32:06', 'Login', '<i>(tidak ada)</i>', 'Login'),
(202, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 00:37:13', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(203, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 00:37:28', 'Login', '<i>(tidak ada)</i>', 'Login'),
(204, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 00:59:33', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(205, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 00:59:38', 'Login', '<i>(tidak ada)</i>', 'Login'),
(206, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 01:00:06', 'Menu Akun', '<i>(nim)</i> 2e2ew', 'Tambah Akun Pengguna'),
(207, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 01:00:11', 'Menu Akun', '12', 'Delete Akun Pengguna'),
(208, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 01:05:28', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(209, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 01:05:33', 'Login', '<i>(tidak ada)</i>', 'Login'),
(210, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 01:20:36', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(211, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 01:20:41', 'Login', '<i>(tidak ada)</i>', 'Login'),
(212, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 01:27:49', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(213, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 01:27:54', 'Login', '<i>(tidak ada)</i>', 'Login'),
(214, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 01:30:18', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(215, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 01:30:24', 'Login', '<i>(tidak ada)</i>', 'Login'),
(216, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 01:43:12', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(217, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 01:43:16', 'Login', '<i>(tidak ada)</i>', 'Login'),
(218, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 01:46:10', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(219, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 01:46:14', 'Login', '<i>(tidak ada)</i>', 'Login'),
(220, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 02:11:54', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(221, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 02:11:59', 'Login', '<i>(tidak ada)</i>', 'Login'),
(222, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 02:15:55', 'Menu Akun', '11', 'Delete Akun Pengguna'),
(223, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 07:35:10', 'Login', '<i>(tidak ada)</i>', 'Login'),
(224, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 07:57:52', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(225, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 07:57:59', 'Login', '<i>(tidak ada)</i>', 'Login'),
(226, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 08:16:32', 'Menu Akun', '5', 'Ubah Profil Pengguna'),
(227, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 09:19:26', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(228, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 09:19:31', 'Login', '<i>(tidak ada)</i>', 'Login'),
(229, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 10:03:57', 'Menu Akun', '<i>(nim)</i> ', 'Tambah Akun Pengguna'),
(230, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 10:04:03', 'Menu Akun', '13', 'Delete Akun Pengguna'),
(231, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 10:06:32', 'Menu Akun', '<i>(nim)</i> 221910847', 'Tambah Akun Pengguna'),
(232, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 10:15:02', 'Menu Akun', '14', 'Ubah Profil Pengguna'),
(233, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 10:15:55', 'Menu Akun', '14', 'Ubah Profil Pengguna'),
(234, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 10:16:22', 'Menu Akun', '7', 'Ubah Profil Pengguna'),
(235, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 10:19:02', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(236, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 10:19:08', 'Login', '<i>(tidak ada)</i>', 'Login'),
(237, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 10:33:32', 'Menu Akun', '7', 'Ubah Profil Pengguna'),
(238, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 10:33:43', 'Menu Akun', '8', 'Ubah Profil Pengguna'),
(239, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 11:19:59', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(240, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 11:20:05', 'Login', '<i>(tidak ada)</i>', 'Login'),
(241, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 11:38:14', 'Menu Akun', '5', 'Ubah Profil Pengguna'),
(242, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 11:45:25', 'Menu Akun', '3', 'Ubah Profil Pengguna'),
(243, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 11:45:43', 'Menu Akun', '8', 'Ubah Profil Pengguna'),
(244, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 15:33:15', 'Login', '<i>(tidak ada)</i>', 'Login'),
(245, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 16:18:39', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(246, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 16:18:45', 'Login', '<i>(tidak ada)</i>', 'Login'),
(247, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 17:01:41', 'Menu Akun', '5', 'Ubah Profil Pengguna'),
(248, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 17:04:35', 'Menu Akun', '14', 'Ubah Profil Pengguna'),
(249, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 17:08:05', 'Menu Akun', '7', 'Ubah Profil Pengguna'),
(250, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 17:08:39', 'Menu Akun', '8', 'Ubah Status Pengguna'),
(251, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 17:08:57', 'Menu Akun', '8', 'Ubah Status Pengguna'),
(252, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 17:09:43', 'Menu Akun', '6', 'Ubah Profil Pengguna'),
(253, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 17:10:25', 'Menu Akun', '5', 'Ubah Profil Pengguna'),
(254, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 17:11:06', 'Menu Akun', '4', 'Ubah Profil Pengguna'),
(255, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 17:13:32', 'Menu Akun', '3', 'Ubah Profil Pengguna'),
(256, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 17:14:29', 'Menu Akun', '8', 'Ubah Profil Pengguna'),
(257, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 17:15:12', 'Menu Akun', '9', 'Ubah Profil Pengguna'),
(258, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 17:27:08', 'Menu Akun', '5', 'Ubah Password Pengguna'),
(259, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 17:27:28', 'Menu Akun', '5', 'Ubah Password Pengguna'),
(260, 'Anggota Rohis Pertama', '221910740', 'Anggota', '2023-07-17 17:27:47', 'Login', '<i>(tidak ada)</i>', 'Login'),
(261, 'Anggota Rohis Pertama', '221910740', 'Anggota', '2023-07-17 17:27:59', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(262, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 17:29:41', 'Menu Akun', '5', 'Ubah Password Pengguna'),
(263, 'Anggota Rohis Pertama', '221910740', 'Anggota', '2023-07-17 17:29:56', 'Login', '<i>(tidak ada)</i>', 'Login'),
(264, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 18:58:17', 'Menu Akun', '<i>(tidak ada)</i> ', 'Download template file excel'),
(265, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 19:05:22', 'Menu Akun', '<i>(tidak ada)</i> ', 'Download template file excel'),
(266, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 19:44:47', 'Menu Akun', '7', 'Ubah Profil Pengguna'),
(267, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 19:46:09', 'Menu Akun', '7', 'Ubah Profil Pengguna'),
(268, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 20:11:13', 'Menu Akun', '15', 'Delete Akun Pengguna'),
(269, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 20:14:27', 'Menu Akun', '<i>(tidak ada)</i> ', 'Import Data User'),
(270, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 20:14:51', 'Menu Akun', '17', 'Delete Akun Pengguna'),
(271, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 20:14:58', 'Menu Akun', '16', 'Delete Akun Pengguna'),
(272, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 20:16:59', 'Menu Akun', '<i>(tidak ada)</i> ', 'Import Data User'),
(273, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 20:21:23', 'Menu Akun', '19', 'Delete Akun Pengguna'),
(274, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 20:21:31', 'Menu Akun', '18', 'Delete Akun Pengguna'),
(275, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 21:15:05', 'Menu Akun', '<i>(nim)</i> 221910846', 'Tambah Akun Pengguna'),
(276, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 21:16:18', 'Menu Akun', '20', 'Delete Akun Pengguna'),
(277, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 21:32:16', 'Login', '<i>(tidak ada)</i>', 'Login'),
(278, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 21:33:52', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(279, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 21:58:28', 'Menu Profile', '1', 'Update User Profile'),
(280, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 22:29:09', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-07-17', 'Tambah Pengumuman'),
(281, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 22:30:13', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-07-29', 'Tambah Pengumuman'),
(282, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 22:30:18', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(283, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 22:30:23', 'Login', '<i>(tidak ada)</i>', 'Login'),
(284, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 22:30:50', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-08-03', 'Tambah Pengumuman'),
(285, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 22:32:22', 'Menu Pengumuman', '15', 'Hapus Pengumuman'),
(286, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 22:32:28', 'Menu Pengumuman', '14', 'Hapus Pengumuman'),
(287, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 22:32:51', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-07-22', 'Tambah Pengumuman'),
(288, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 22:39:49', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-07-27', 'Tambah Pengumuman'),
(289, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 22:55:49', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-07-29', 'Tambah Pengumuman'),
(290, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 22:56:11', 'Menu Pengumuman', '17', 'Hapus Pengumuman'),
(291, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 22:56:17', 'Menu Pengumuman', '16', 'Hapus Pengumuman'),
(292, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 23:02:20', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-09-01', 'Tambah Pengumuman'),
(293, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 23:20:04', 'Menu Pengumuman', '19', 'Update Pengumuman'),
(294, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 23:20:48', 'Menu Pengumuman', '18', 'Update Pengumuman'),
(295, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 23:21:07', 'Menu Pengumuman', '19', 'Update Pengumuman'),
(296, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-17 23:21:08', 'Menu Pengumuman', '19', 'Update Pengumuman'),
(297, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 00:18:53', 'Menu Keuangan', '<i>(keterangan)</i> Kebutuhan Kajian Rutin 18 Juli 2023', 'Tambah Transaksi Keuangan'),
(298, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 01:06:35', 'Menu Keuangan', '5', 'Update Transaksi Keuangan'),
(299, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 01:06:52', 'Menu Keuangan', '1', 'Update Transaksi Keuangan'),
(300, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 01:08:12', 'Menu Keuangan', '<i>(keterangan)</i> Uji Coba', 'Tambah Transaksi Keuangan'),
(301, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 01:09:33', 'Menu Pengumuman', '6', 'Hapus Pengumuman'),
(302, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 01:09:39', 'Menu Pengumuman', '5', 'Hapus Pengumuman'),
(303, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 01:10:24', 'Menu Keuangan', '<i>(keterangan)</i> Uji Coba Serius', 'Tambah Transaksi Keuangan'),
(304, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 01:10:40', 'Menu Keuangan', '7', 'Update Transaksi Keuangan'),
(305, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 01:11:00', 'Menu Keuangan', '7', 'Update Transaksi Keuangan'),
(306, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 01:11:22', 'Menu Keuangan', '1', 'Update Transaksi Keuangan'),
(307, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 01:11:30', 'Menu Pengumuman', '7', 'Hapus Pengumuman'),
(308, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 01:15:37', 'Menu Akun', '<i>(tidak ada)</i> ', 'Import Data User'),
(309, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 01:15:48', 'Menu Akun', '21', 'Delete Akun Pengguna'),
(310, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 01:15:54', 'Menu Akun', '5', 'Delete Akun Pengguna'),
(311, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 05:59:06', 'Login', '<i>(tidak ada)</i>', 'Login'),
(312, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 06:25:14', 'Menu Keuangan', '1', 'Update Transaksi Keuangan'),
(313, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 06:27:36', 'Menu Keuangan', '<i>(keterangan)</i> Pengadaan Kas Khusus', 'Tambah Transaksi Keuangan'),
(314, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 06:28:31', 'Menu Keuangan', '<i>(keterangan)</i> Pengeluaran Besar Untuk Kegiatan Spesial', 'Tambah Transaksi Keuangan'),
(315, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 06:29:21', 'Menu Pengumuman', '9', 'Hapus Pengumuman'),
(316, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 06:29:41', 'Menu Keuangan', '2', 'Update Transaksi Keuangan'),
(317, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 06:30:08', 'Menu Keuangan', '2', 'Update Transaksi Keuangan'),
(318, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 06:37:31', 'Menu Pengumuman', '19', 'Hapus Pengumuman'),
(319, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 06:59:30', 'Menu Akun', '22', 'Delete Akun Pengguna'),
(320, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 07:35:38', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(321, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 07:35:45', 'Login', '<i>(tidak ada)</i>', 'Login'),
(322, 'Anggota Rohis Ketiga', '212008898', 'Anggota', '2023-07-18 07:36:27', 'Login', '<i>(tidak ada)</i>', 'Login'),
(323, 'Anggota Rohis Keenam', '221910847', 'Anggota', '2023-07-18 07:37:08', 'Login', '<i>(tidak ada)</i>', 'Login'),
(324, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 08:38:26', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(325, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 08:39:36', 'Login', '<i>(tidak ada)</i>', 'Login'),
(326, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 08:39:45', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(327, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 17:18:15', 'Login', '<i>(tidak ada)</i>', 'Login'),
(328, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 19:55:59', 'Login', '<i>(tidak ada)</i>', 'Login'),
(329, 'Anggota Rohis 01', '333310740', 'Anggota', '2023-07-18 21:33:12', 'Login', '<i>(tidak ada)</i>', 'Login'),
(330, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 22:40:38', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-08-04', 'Tambah Pengumuman'),
(331, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 22:44:35', 'Menu Pengumuman', '20', 'Hapus Pengumuman'),
(332, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 22:44:49', 'Menu Pengumuman', '18', 'Hapus Pengumuman'),
(333, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 22:47:33', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-08-05', 'Tambah Pengumuman'),
(334, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 22:49:46', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-08-04', 'Tambah Pengumuman'),
(335, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 22:50:40', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-08-06', 'Tambah Pengumuman'),
(336, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 22:57:11', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-08-10', 'Tambah Pengumuman'),
(337, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 23:14:32', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-08-05', 'Tambah Pengumuman'),
(338, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 23:28:37', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-08-04', 'Tambah Pengumuman'),
(339, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 23:36:46', 'Menu Pengumuman', '26', 'Hapus Pengumuman'),
(340, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 23:36:54', 'Menu Pengumuman', '25', 'Hapus Pengumuman'),
(341, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 23:37:01', 'Menu Pengumuman', '24', 'Hapus Pengumuman'),
(342, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 23:37:07', 'Menu Pengumuman', '23', 'Hapus Pengumuman'),
(343, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 23:37:13', 'Menu Pengumuman', '22', 'Hapus Pengumuman'),
(344, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 23:37:19', 'Menu Pengumuman', '21', 'Hapus Pengumuman'),
(345, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 23:38:30', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-07-28', 'Tambah Pengumuman'),
(346, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 23:41:53', 'Menu Pengumuman', '27', 'Update Pengumuman'),
(347, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 23:45:42', 'Menu Pengumuman', '27', 'Hapus Pengumuman'),
(348, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-18 23:48:12', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-07-20', 'Tambah Pengumuman'),
(349, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-19 16:46:10', 'Login', '<i>(tidak ada)</i>', 'Login'),
(350, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-19 16:48:38', 'Menu Akun', '5', 'Ubah Profil Pengguna'),
(351, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-19 17:25:07', 'Menu Akun', '6', 'Ubah Profil Pengguna'),
(352, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-19 17:25:20', 'Menu Akun', '6', 'Ubah Profil Pengguna'),
(353, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-19 17:25:31', 'Menu Akun', '7', 'Ubah Profil Pengguna'),
(354, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-19 17:25:54', 'Menu Akun', '8', 'Ubah Profil Pengguna'),
(355, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-19 17:26:37', 'Menu Akun', '9', 'Ubah Profil Pengguna'),
(356, 'Ketua Rohis', '333312213', 'Ketua', '2023-07-19 17:35:22', 'Login', '<i>(tidak ada)</i>', 'Login'),
(357, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-19 22:13:07', 'Login', '<i>(tidak ada)</i>', 'Login'),
(358, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-21 09:21:03', 'Login', '<i>(tidak ada)</i>', 'Login'),
(359, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-21 09:22:39', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-07-23', 'Tambah Pengumuman'),
(360, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-21 09:23:48', 'Menu Pengumuman', '29', 'Hapus Pengumuman'),
(361, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-21 20:15:23', 'Login', '<i>(tidak ada)</i>', 'Login'),
(362, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-23 09:58:40', 'Login', '<i>(tidak ada)</i>', 'Login'),
(363, 'Yoka Prasetia', '221910846', 'Admin', '2023-07-23 10:02:56', 'Menu Akun', '1', 'Ubah Status Pengguna');

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
(1, '2023-04-03-230500', 'App\\Database\\Migrations\\AddUsers', 'default', 'App', 1689406890, 1),
(2, '2023-04-05-010449', 'App\\Database\\Migrations\\AddPengumuman', 'default', 'App', 1689406890, 1),
(3, '2023-04-06-013357', 'App\\Database\\Migrations\\AddKeuangan', 'default', 'App', 1689406891, 1),
(4, '2023-04-07-041728', 'App\\Database\\Migrations\\AddQuotes', 'default', 'App', 1689406891, 1),
(5, '2023-04-08-045607', 'App\\Database\\Migrations\\AddDaftarHadir', 'default', 'App', 1689406891, 1),
(6, '2023-05-10-155446', 'App\\Database\\Migrations\\AddLogAktivitas', 'default', 'App', 1689406891, 1);

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
  `jenis_kelamin` varchar(250) NOT NULL,
  `link` varchar(250) DEFAULT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `nama`, `isi`, `tempat`, `tanggal`, `waktu_mulai`, `waktu_selesai`, `peserta`, `jenis_kelamin`, `link`, `updated_at`) VALUES
(1, 'Pengajian Rutin Hari Senin', 'Pengajian rutin dalam rangka mengendalikan mutu mahasiswa Politeknik Statistika STIS yang dihadiri wajib oleh mahasiswa tingkat III. Mahasiswa lain dan masyarakat umum juga boleh mengikuti kegiatan.', 'Masjid Kampus Politeknik Statistika STIS', '2023-02-20', '07:30:00', '11:00:00', 'Tingkat I, Tingkat II, Tingkat III, Tingkat IV, Umum', 'Laki-Laki, Perempuan', '', '2023-07-15 14:42:10'),
(2, 'Kajian Islam Spesial 2023', 'Dalam Rangka memperingati Isra\' Mi\'raj, Polstat STIS mengadakan pengajian spesial unutk menumbuhkan kesaradan mahasiswa terhadap peristiwa spesial yang dirasakan oleh Rasulullah.', 'Live Zoom STIS', '2023-03-01', '08:00:00', '10:00:00', 'Tingkat I, Tingkat II, Tingkat III, Tingkat IV, Umum', 'Laki-Laki, Perempuan', 'https://zoom.us/', '2023-07-15 14:42:10'),
(3, 'Peringatan Nuzulul Qur\'an', 'Memperingati Peristiwa Nuzulul Qur\'an dengan mengadakan pengajian terhadap seluruh mahasiswa STIS terutama tingkat I dan II', 'Online Melalui Zoom', '2023-03-30', '19:30:00', '21:00:00', 'Tingkat I, Tingkat II, Tingkat III, Tingkat IV, Umum', 'Laki-Laki, Perempuan', 'https://s.stis.ac.id/VBGOCPoisson2022', '2023-07-15 14:42:10'),
(4, 'Peringatan Maulid Nabi', 'Memperingati datangnya bulan Ramadhan, Rohis Polstat STIS mengadakan kajian islam spesial yang diikuti oleh seluruh mahasiswa', 'Auditorium STIS', '2023-04-05', '09:30:00', '11:30:00', 'Tingkat I, Tingkat II, Tingkat III, Tingkat IV, Umum', 'Laki-Laki, Perempuan', '', '2023-07-15 14:42:10'),
(5, 'Peringatan Lebaran', 'Menyambut Lebaran, Rohis Polstat STIS mengadakan kajian islam spesial yang diikuti oleh seluruh mahasiswa', 'Auditorium STIS', '2023-04-20', '09:30:00', '11:30:00', 'Tingkat I, Tingkat II, Tingkat III, Tingkat IV, Umum', 'Laki-Laki, Perempuan', '', '2023-07-15 14:42:10'),
(11, 'K-Nisaa\' Istimewa 2023 Big Meet', 'K-Nisaa\' Istimewa 2023 Big Meet', 'Auditorium', '2023-07-15', '08:00:00', '10:00:00', 'Tingkat I, Tingkat II, Tingkat III, Tingkat IV', 'Perempuan', '', '2023-07-15 22:04:10'),
(28, 'Kajian Rutin Tingkat 4 Spesial', 'Mengisi kegiatan dengan kajian spesial tahun baru islam', 'Auditorium STIS', '2023-07-20', '07:30:00', '10:00:00', 'Tingkat I, Tingkat II, Tingkat III, Tingkat IV', 'Laki-Laki, Perempuan', '', '2023-07-18 23:48:07');

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
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `no_hp`, `domisili`, `nim`, `kelas`, `angkatan`, `tingkat`, `tanggal_lahir`, `password`, `role`, `alamat_kost`, `jenis_kelamin`, `status`) VALUES
(1, 'Yoka Prasetia', '221910846@stis.ac.id', '0895379261962', 'Yogyakarta', '221910846', '4SI2', '61', 'Tingkat IV', '2002-01-20', '$2y$10$TS2KuvhlfhRqG2UpeHuCluD268k2nKIo/7YgIMxXrZeHkB1o09d4W', 'Admin', 'Jl. Solihun', 'Laki-Laki', 'Tidak Aktif'),
(2, 'Ketua Rohis', '333312213@stis.ac.id', '0895379261943', 'Jakarta', '333312213', '4SI1', '61', 'Tingkat IV', '2002-04-20', '$2y$10$eCYf0VI2i3HkfcGAdsPOZOsF/CGzUUzzHcNTI8yEIxXMfojuQzqu.', 'Ketua', 'Jl. Solihun', 'Perempuan', 'Aktif'),
(3, 'Humas Rohis', '333310880@stis.ac.id', '0895123456786', 'Tangerang', '333310880', '2KS3', '63', 'Tingkat II', '2003-08-24', '$2y$10$AEWEhGrTg2ySRlZxoW4hT.GPN/Ppif8BcD1Tm4szOq1WcFwo8eYQW', 'Humas', 'Jl. Sensus II', 'Laki-Laki', 'Aktif'),
(4, 'Bendahara Rohis', '333310886@stis.ac.id', '0895123456785', 'Bengkulu', '333310886', '1ST4', '64', 'Tingkat I', '2004-01-01', '$2y$10$HQW4O5HRmtD1Nv/v8EuyReXtoFpPOKVGihbJsNpCXj3lDFT5ih4xi', 'Bendahara', 'Gg. Asem', 'Perempuan', 'Aktif'),
(5, 'Anggota Rohis Pertama', '333310740@stis.ac.id', '0895123456784', 'Aceh', '333310740', '4SI2', '61', 'Tingkat IV', '2000-06-01', '$2y$10$L/b.Su5WV97YOdokk4wftOlEf8FSbemO97SqBzP7f/rKX.AZ0LrsO', 'Anggota', 'Gg. Ayub', 'Laki-Laki', 'Aktif'),
(6, 'Anggota Rohis Kedua', '333313422@stis.ac.id', '0895123456783', 'Bangka', '333313422', '4SK1', '61', 'Tingkat IV', '2001-01-23', '$2y$10$fpjvV.1/7Z.4FQdkNGv3aenbU5zwgAD3N778vkMspGSf6wgRmCNti', 'Anggota', 'Gg. Ayub', 'Laki-Laki', 'Aktif'),
(7, 'Anggota Rohis Ketiga', '333308898@stis.ac.id', '0895123456782', 'Yogyakarta', '333308898', '3D32', '62', 'Tingkat III', '2002-01-03', '$2y$10$IizOreDSzimk18bg9yKYfeVINkGqXjlzTuV2YFbWnB64SPqBpuqxe', 'Anggota', 'Gg. Santai', 'Perempuan', 'Aktif'),
(8, 'Anggota Rohis Keempat', '333310845@stis.ac.id', '0895123456781', 'Yogyakarta', '333310845', '4SK1', '62', 'Tingkat III', '2002-03-14', '$2y$10$UWn4R.tlecV00xokXvK2Ge5EGisfdpGn8yyKyZf0DiAUZ2NvIH1/q', 'Anggota', 'Gg. Ggu', 'Laki-Laki', 'Aktif'),
(9, 'Anggota Rohis Kelima', '333308451@stis.ac.id', '0895123456443', 'Jawa Timur', '333308451', '4SK1', '63', 'Tingkat II', '2002-03-14', '$2y$10$3pkqM4jjWQwBe.JMBGLgvuz7IKNht9vh0gVIioyt.XOIpb1tPYdGa', 'Anggota', 'Gg. Sempit', 'Perempuan', 'Aktif');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `logaktivitas`
--
ALTER TABLE `logaktivitas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
