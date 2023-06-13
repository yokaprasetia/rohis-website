-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2023 pada 00.47
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
(16, 'Yoka Prasetia', '221910846', 'Admin', '2023-06-12 21:38:18', 'Menu Keuangan', '2', 'Update Transaksi Keuangan');

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
(10, 'Kajian Gabungan Spesial 2023', 'Memperingati semangat mahasiswa dalam menuntut ilmu', 'Online Melalui Zoom', '2023-05-31', '08:00:00', '11:00:00', 'Umum', 'https://s.stis.ac.id/ZoomPengajiangabungan', '2023-05-28 20:59:54'),
(11, 'Kajian Islam Spesial 2024', 'Pembekalan iman dan takwa', 'Auditorium STIS dan Live Streaming melalui Zoom', '2023-12-12', '10:10:00', '14:20:00', 'Tingkat I, Tingkat II, Tingkat IV', 'https://s.stis.ac.id/VBGOCPoisson2022', '2023-06-12 20:56:06');

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
(2, 'Ridwan Syech Nawawi', '221112213@stis.ac.id', '0895379232433', 'DKI Jakarta', '221112213', '4SI1', '61', 'Tingkat IV', '2002-04-20', '$2y$10$HTJNJLQDTPOqrKfuW8JE5OL5U6ThZ4JdQjYnpxH3IA9OpKQ3j10lK', 'Ketua', 'Jl. Solihun', 'Laki-Laki'),
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
