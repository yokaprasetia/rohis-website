-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql302.infinityfree.com
-- Waktu pembuatan: 17 Jun 2023 pada 10.01
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_34413829_rohis`
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
(13, 4, 'Siti Sowan Rumiyin', 222208451, '2023-04-05', 'bukti-default2.png', '2023-05-09 16:31:21'),
(14, 4, 'Yoka Prasetia', 221910846, '2023-04-05', 'bukti-default2.png', '2023-05-09 16:31:21'),
(15, 7, 'Yoka Prasetia', 221910846, '2023-05-12', 'bukti-1683827204_e5e5c65886f1e01fa1a7.jpg', '2023-05-12 00:46:44'),
(16, 13, 'Yoka Prasetia', 221910846, '2023-06-13', 'bukti-1686664486_633404b19116c28f56d8.png', '2023-06-13 20:54:46');

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
(1, 125000, '2023-04-24', 'Masuk', 'bukti-1686580666_3c6bef2744334bfac01b.png', 'Kas Rutinan', '2023-06-12 21:37:46'),
(2, 200000, '2023-01-24', 'Keluar', 'bukti-1686580698_a7677efd661fd5858f21.png', 'Pembelian Peralatan Kajian', '2023-06-12 21:38:18'),
(3, 400000, '2023-04-01', 'Masuk', 'bukti-1686580678_d4512346184dbc92e212.png', 'Subsidi dari Kampus', '2023-06-12 21:37:58'),
(4, 325000, '2023-03-10', 'Masuk', 'bukti-1686580690_eec161f3dbd50320bba1.png', 'Danus Rutin', '2023-06-12 21:38:10'),
(6, 105500, '2023-05-03', 'Keluar', 'bukti-1686580639_fb32925f9f3f1e81a1e0.png', 'Keperluan Tadarus Rutinan', '2023-06-12 21:37:19'),
(7, 185500, '2023-05-09', 'Masuk', 'bukti-1686580617_0e1cca974a22cdb7e3c5.png', 'Donasi Orang Luar', '2023-06-12 21:36:57'),
(8, 57000, '2023-05-01', 'Keluar', 'bukti-1686580652_36bb8b740e1606980766.png', 'Pembelian Perabot Mabes Rohis', '2023-06-12 21:37:32'),
(9, 85000, '2023-05-24', 'Keluar', 'bukti-1686580598_b5a9fe9637be8ef3fa3c.png', 'Keperluan Rapat Perdana', '2023-06-12 21:36:38');

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
(1, 'Ridwan Syech Nawawi', '221112213', 'Ketua', '2023-06-12 20:52:55', 'Login', '<i>(tidak ada)</i>', 'Login'),
(2, 'Ridwan Syech Nawawi', '221112213', 'Ketua', '2023-06-12 20:53:30', 'Menu Profile', '2', 'Update User Profile'),
(3, 'Ridwan Syech Nawawi', '221112213', 'Ketua', '2023-06-12 20:55:49', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-12-12', 'Tambah Pengumuman'),
(4, 'Ridwan Syech Nawawi', '221112213', 'Ketua', '2023-06-12 20:56:06', 'Menu Pengumuman', '11', 'Update Pengumuman'),
(5, 'Muhammad Sariro Niro Kakawin', '211913422', 'Anggota', '2023-06-12 20:57:38', 'Login', '<i>(tidak ada)</i>', 'Login'),
(6, 'Ridwan Syech Nawawi', '221112213', 'Ketua', '2023-06-12 20:57:57', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(7, 'Muhammad Sariro Niro Kakawin', '211913422', 'Anggota', '2023-06-12 20:58:03', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(8, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-12 21:36:38', 'Menu Keuangan', '9', 'Update Transaksi Keuangan'),
(9, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-12 21:36:57', 'Menu Keuangan', '7', 'Update Transaksi Keuangan'),
(10, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-12 21:37:19', 'Menu Keuangan', '6', 'Update Transaksi Keuangan'),
(11, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-12 21:37:31', 'Menu Keuangan', '8', 'Update Transaksi Keuangan'),
(12, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-12 21:37:32', 'Menu Keuangan', '8', 'Update Transaksi Keuangan'),
(13, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-12 21:37:46', 'Menu Keuangan', '1', 'Update Transaksi Keuangan'),
(14, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-12 21:37:58', 'Menu Keuangan', '3', 'Update Transaksi Keuangan'),
(15, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-12 21:38:10', 'Menu Keuangan', '4', 'Update Transaksi Keuangan'),
(16, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-12 21:38:18', 'Menu Keuangan', '2', 'Update Transaksi Keuangan'),
(17, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 10:42:16', 'Login', '<i>(tidak ada)</i>', 'Login'),
(18, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 10:55:07', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(19, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 10:56:04', 'Login', '<i>(tidak ada)</i>', 'Login'),
(20, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 10:56:10', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(21, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 10:57:44', 'Login', '<i>(tidak ada)</i>', 'Login'),
(22, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 10:58:42', 'Menu Pengumuman', '11', 'Update Pengumuman'),
(23, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 11:09:34', 'Login', '<i>(tidak ada)</i>', 'Login'),
(24, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 11:13:57', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(25, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 11:15:53', 'Login', '<i>(tidak ada)</i>', 'Login'),
(26, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 18:39:10', 'Login', '<i>(tidak ada)</i>', 'Login'),
(27, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 18:40:51', 'Menu Akun', '2', 'Update Akun Pengguna'),
(28, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 18:42:16', 'Menu Akun', '2', 'Delete Akun Pengguna'),
(29, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 18:42:50', 'Menu Akun', '<i>(nim)</i> 123456789', 'Tambah Akun Pengguna'),
(30, 'Ketua Rohis 01', '123456789', 'Ketua', '2023-06-13 18:43:05', 'Login', '<i>(tidak ada)</i>', 'Login'),
(31, 'Ketua Rohis 01', '123456789', 'Ketua', '2023-06-13 18:44:13', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(32, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 18:44:21', 'Menu Akun', '16', 'Delete Akun Pengguna'),
(33, 'Muhammad Sasmito', '212110880', 'Humas', '2023-06-13 18:44:32', 'Login', '<i>(tidak ada)</i>', 'Login'),
(34, 'Muhammad Sasmito', '212110880', 'Humas', '2023-06-13 18:45:21', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(35, 'Muhammad Sasmito', '212110880', 'Humas', '2023-06-13 18:45:30', 'Login', '<i>(tidak ada)</i>', 'Login'),
(36, 'Muhammad Sasmito', '212110880', 'Humas', '2023-06-13 18:45:34', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(37, 'Muhammad Sasmito', '212110880', 'Humas', '2023-06-13 18:45:39', 'Login', '<i>(tidak ada)</i>', 'Login'),
(38, 'Muhammad Sasmito', '212110880', 'Humas', '2023-06-13 18:45:49', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(39, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 18:46:21', 'Menu Akun', '3', 'Update Akun Pengguna'),
(40, 'Ketua Rohis 01', '212110880', 'Ketua', '2023-06-13 18:46:33', 'Login', '<i>(tidak ada)</i>', 'Login'),
(41, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 18:49:00', 'Menu Akun', '4', 'Update Akun Pengguna'),
(42, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 18:49:23', 'Menu Akun', '3', 'Update Akun Pengguna'),
(43, 'Ketua Rohis 01', '212110880', 'Ketua', '2023-06-13 18:49:36', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(44, 'Humas Rohis 01', '222210886', 'Humas', '2023-06-13 18:49:40', 'Login', '<i>(tidak ada)</i>', 'Login'),
(45, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 18:50:28', 'Menu Akun', '5', 'Update Akun Pengguna'),
(46, 'Humas Rohis 01', '222210886', 'Humas', '2023-06-13 18:50:40', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(47, 'Bendahara Rohis 01', '221910740', 'Bendahara', '2023-06-13 18:50:45', 'Login', '<i>(tidak ada)</i>', 'Login'),
(48, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 18:51:14', 'Menu Akun', '6', 'Update Akun Pengguna'),
(49, 'Bendahara Rohis 01', '221910740', 'Bendahara', '2023-06-13 18:51:22', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(50, 'Ketua Rohis 01', '212110880', 'Ketua', '2023-06-13 18:51:28', 'Login', '<i>(tidak ada)</i>', 'Login'),
(51, 'Ketua Rohis 01', '212110880', 'Ketua', '2023-06-13 18:53:02', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(52, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 20:37:36', 'Menu Profile', '1', 'Update User Profile'),
(53, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 20:37:57', 'Menu Profile', '1', 'Update User Password'),
(54, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 20:38:16', 'Menu Profile', '1', 'Update User Password'),
(55, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 20:38:54', 'Menu Akun', '15', 'Delete Akun Pengguna'),
(56, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 20:38:58', 'Menu Akun', '<i>(tidak ada)</i> ', 'Download template file excel'),
(57, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 20:43:16', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-07-07', 'Tambah Pengumuman'),
(58, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 20:43:40', 'Menu Pengumuman', '12', 'Update Pengumuman'),
(59, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 20:43:50', 'Menu Pengumuman', '12', 'Hapus Pengumuman'),
(60, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 20:54:05', 'Menu Pengumuman', '<i>(tanggal)</i> 2023-06-13', 'Tambah Pengumuman'),
(61, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-13 21:33:17', 'Menu Akun', '<i>(tidak ada)</i> ', 'Download template file excel'),
(62, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-14 07:18:24', 'Login', '<i>(tidak ada)</i>', 'Login'),
(63, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-15 16:24:36', 'Login', '<i>(tidak ada)</i>', 'Login'),
(64, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-15 16:31:43', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(65, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-15 19:49:31', 'Login', '<i>(tidak ada)</i>', 'Login'),
(66, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-15 19:50:06', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(67, 'Humas Rohis 01', '222210886', 'Humas', '2023-06-15 19:50:10', 'Login', '<i>(tidak ada)</i>', 'Login'),
(68, 'Humas Rohis 01', '222210886', 'Humas', '2023-06-15 19:53:57', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(69, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-15 19:54:22', 'Login', '<i>(tidak ada)</i>', 'Login'),
(70, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-15 20:10:01', 'Login', '<i>(tidak ada)</i>', 'Login'),
(71, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-15 20:10:15', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(72, 'Ketua Rohis 01', '212110880', 'Ketua', '2023-06-15 20:10:29', 'Login', '<i>(tidak ada)</i>', 'Login'),
(73, 'Ketua Rohis 01', '212110880', 'Ketua', '2023-06-15 20:10:38', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(74, 'Humas Rohis 01', '222210886', 'Humas', '2023-06-15 20:10:50', 'Login', '<i>(tidak ada)</i>', 'Login'),
(75, 'Humas Rohis 01', '222210886', 'Humas', '2023-06-15 20:10:50', 'Login', '<i>(tidak ada)</i>', 'Login'),
(76, 'Humas Rohis 01', '222210886', 'Humas', '2023-06-15 20:10:58', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(77, 'Bendahara Rohis 01', '221910740', 'Bendahara', '2023-06-15 20:11:28', 'Login', '<i>(tidak ada)</i>', 'Login'),
(78, 'Bendahara Rohis 01', '221910740', 'Bendahara', '2023-06-15 20:11:28', 'Login', '<i>(tidak ada)</i>', 'Login'),
(79, 'Bendahara Rohis 01', '221910740', 'Bendahara', '2023-06-15 20:11:42', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(80, 'Anggota Rohis 121', '211913422', 'Anggota', '2023-06-15 20:11:57', 'Login', '<i>(tidak ada)</i>', 'Login'),
(81, 'Anggota Rohis 121', '211913422', 'Anggota', '2023-06-15 20:12:58', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(82, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-15 20:13:07', 'Login', '<i>(tidak ada)</i>', 'Login'),
(83, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-15 20:13:08', 'Login', '<i>(tidak ada)</i>', 'Login'),
(84, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-15 20:13:21', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(85, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-15 21:51:40', 'Login', '<i>(tidak ada)</i>', 'Login'),
(86, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-15 22:52:50', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(87, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-15 22:54:06', 'Login', '<i>(tidak ada)</i>', 'Login'),
(88, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-15 22:54:25', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(89, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-15 22:54:47', 'Login', '<i>(tidak ada)</i>', 'Login'),
(90, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-15 23:09:14', 'Login', '<i>(tidak ada)</i>', 'Login'),
(91, 'Anggota Rohis 121', '211913422', 'Anggota', '2023-06-16 07:39:54', 'Login', '<i>(tidak ada)</i>', 'Login'),
(92, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-16 18:40:40', 'Login', '<i>(tidak ada)</i>', 'Login'),
(93, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-16 18:55:36', 'Menu Akun', '1', 'Update Akun Pengguna'),
(94, 'Humas Rohis 01', '222210886', 'Humas', '2023-06-16 18:59:28', 'Login', '<i>(tidak ada)</i>', 'Login'),
(95, 'Humas Rohis 01', '222210886', 'Humas', '2023-06-16 19:00:24', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(96, 'Bendahara Rohis 01', '221910740', 'Bendahara', '2023-06-16 19:00:28', 'Login', '<i>(tidak ada)</i>', 'Login'),
(97, 'Bendahara Rohis 01', '221910740', 'Bendahara', '2023-06-16 19:04:05', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(98, 'Humas Rohis 01', '222210886', 'Humas', '2023-06-16 19:04:09', 'Login', '<i>(tidak ada)</i>', 'Login'),
(99, 'Humas Rohis 01', '222210886', 'Humas', '2023-06-16 19:04:27', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(100, 'Anggota Rohis 121', '211913422', 'Anggota', '2023-06-16 19:04:33', 'Login', '<i>(tidak ada)</i>', 'Login'),
(101, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-16 23:13:43', 'Login', '<i>(tidak ada)</i>', 'Login'),
(102, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-17 08:15:10', 'Login', '<i>(tidak ada)</i>', 'Login'),
(103, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-17 08:43:49', 'Logout', '<i>(tidak ada)</i>', 'Logout'),
(104, 'Rhuhul Sulfahmi Kun', '221910845', 'Anggota', '2023-06-17 08:43:54', 'Login', '<i>(tidak ada)</i>', 'Login'),
(105, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-17 12:15:54', 'Login', '<i>(tidak ada)</i>', 'Login'),
(106, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-17 12:51:31', 'Login', '<i>(tidak ada)</i>', 'Login'),
(107, 'Ketua Rohis 01', '212110880', 'Ketua', '2023-06-17 12:54:37', 'Login', '<i>(tidak ada)</i>', 'Login'),
(108, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-17 20:43:05', 'Login', '<i>(tidak ada)</i>', 'Login'),
(109, 'Anggota Rohis 121', '211913422', 'Anggota', '2023-06-17 20:46:27', 'Login', '<i>(tidak ada)</i>', 'Login'),
(110, 'Rhuhul Sulfahmi Kun', '221910845', 'Anggota', '2023-06-17 20:53:42', 'Login', '<i>(tidak ada)</i>', 'Login'),
(111, 'Siti Sowan Rumiyin', '222208451', 'Anggota', '2023-06-17 20:56:23', 'Login', '<i>(tidak ada)</i>', 'Login'),
(112, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-17 20:59:45', 'Menu Pengumuman', '11', 'Hapus Pengumuman');

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
(4, 'Peringatan Maulid Nabi', 'Memperingati datangnya bulan Ramadhan, Rohis Polstat STIS mengadakan kajian islam spesial yang diikuti oleh seluruh mahasiswa', 'Auditorium STIS', '2023-04-05', '09:30:00', '11:30:00', 'Tingkat I, Tingkat II, Tingkat III, Tingkat IV', '', '2023-05-11 23:23:28'),
(7, 'Kegiatan Rutin Tingkat 4', 'Kegiatan Sharing Session Tingkat IV dalam rangka memperbaiki silaturahmi dan kebersamaan', 'Auditorium STIS', '2023-05-11', '00:51:00', '00:52:00', 'Tingkat IV', '', '2023-05-12 00:50:37'),
(13, 'Kajian Khusus Juni 2023', 'Mengisi Malam dengan Kajian Islam', 'Auditorium STIS dan Live Streaming melalui Zoom', '2023-06-13', '22:30:00', '23:30:00', 'Tingkat IV', 'https://s.stis.ac.id/GuidelineLombaInfografisStatistika2022', '2023-06-13 20:54:05');

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
(1, 'Yoka Prasetia', '221910846@stis.ac.id', '0895379261962', 'Yogyakarta', '221910846', '4SI2', '61', 'Tingkat IV', '2002-01-20', '$2y$10$LR7belHkjcequzPxqh5Htu6URJZsvpd6m/3KUdwxk8RUaMbb7hHLu', 'Admin', '61', 'Laki-Laki'),
(3, 'Ketua Rohis 01', '212110880@stis.ac.id', '0895123456786', 'Tangerang', '212110880', '2KS3', '62', 'Tingkat III', '2003-08-24', '$2y$10$lVXtG66NOAUPYAd9SOxCCe91L1UeUTMRPdX3iGRmmM6XbJuWzieDi', 'Ketua', 'Jl. Sensus', 'Laki-Laki'),
(4, 'Humas Rohis 01', '222210886@stis.ac.id', '0895123456785', 'Bengkulu', '222210886', '3SE4', '62', 'Tingkat III', '2004-01-01', '$2y$10$JbL6x5WksqERLaKLjHQlJuIVLf6VuPK915zVZ9vthrRY1wySc46jK', 'Humas', 'Jl. Hasbi', 'Laki-Laki'),
(5, 'Bendahara Rohis 01', '221910740@stis.ac.id', '0895123456784', 'Aceh', '221910740', '3SI2', '62', 'Tingkat III', '2000-06-01', '$2y$10$BG8SlyX4M1szj6QpWOhIre1GYhLGIqxsCcOwgDnSvozLPW8gNigmK', 'Bendahara', 'Jl. Masjid', 'Laki-Laki'),
(6, 'Anggota Rohis 121', '211913422@stis.ac.id', '0895123456783', 'Bangka', '211913422', '4SK1', '61', 'Tingkat IV', '2001-01-23', '$2y$10$KVKU/CGBLUw81DRvAOpqduxsvroovd4Aaw7I/id.I6hFIIsBd/Bnm', 'Anggota', 'Jl. Mawar', 'Perempuan'),
(7, 'Banendra Hayuk Saputri', '212008898@stis.ac.id', '0895123456782', 'Yogyakarta', '212008898', '3D32', '62', 'Tingkat III', '2002-01-03', '$2y$10$aQm.MIYvGdwkU19RvfgLD.559C18CKcVhO6J06yVlpMMk9XrCCQAm', 'Anggota', 'Gg. Santai', 'Perempuan'),
(8, 'Rhuhul Sulfahmi Kun', '221910845@stis.ac.id', '0895123456781', 'Yogyakarta', '221910845', '4SK1', '62', 'Tingkat III', '2002-03-14', '$2y$10$5Bu0Mscj5ZtajPk04iqevuyDIhiuC6jgx7P2.z2a5gP2T/JFZJIj6', 'Anggota', 'Gg. Ggu', 'Laki-Laki'),
(9, 'Siti Sowan Rumiyin', '222208451@stis.ac.id', '0895123456781', 'Jawa Timur', '222208451', '4SK1', '63', 'Tingkat II', '2002-03-14', '$2y$10$77NwwZCQZ9Fu1ku0xt4I5ucSVBdWsl50HOW2fKxcNFEaMfbC6MXzO', 'Anggota', 'Gg. Sempit', 'Perempuan');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `logaktivitas`
--
ALTER TABLE `logaktivitas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
