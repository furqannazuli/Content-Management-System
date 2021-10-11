-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2021 pada 11.25
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
-- Database: `update`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `app_report`
--

CREATE TABLE `app_report` (
  `id` int(11) NOT NULL,
  `hari` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `aplikasi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `app_report`
--

INSERT INTO `app_report` (`id`, `hari`, `aplikasi`, `keterangan`) VALUES
(2, 'monday', 'CISEA', '1'),
(3, 'tuesday', 'CISEA', '2'),
(4, 'wednesday', 'CISEA', '1'),
(5, 'thrusday', 'CISEA', '1'),
(6, 'friday', 'CISEA', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_warehouse`
--

CREATE TABLE `data_warehouse` (
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `konten` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `data_warehouse`
--

INSERT INTO `data_warehouse` (`title`, `id`, `konten`) VALUES
('BOOTSTRAP', 2, '<p>Bootstrap adalah sebuah framework yang berguna untuk</p>'),
('LARAVEL', 3, '<p>laravel adalah sebuah bla bla yang digunakan untuk bla bla</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `eclipse`
--

CREATE TABLE `eclipse` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `konten` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `eclipse`
--

INSERT INTO `eclipse` (`id`, `title`, `konten`) VALUES
(2, 'DATABASE', '<p>Database adalah bla bla bla</p>'),
(3, 'BOOTSTRAP', '<p>Bootstrap adalah bla bla bla</p>'),
(4, 'LARAVEL', '<p><strong></strong>sebuah fraework dalam menmuat sebuah website bla bla bla</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `slide_duration` int(11) NOT NULL,
  `music` text NOT NULL,
  `id_konfigurasi` int(11) NOT NULL,
  `home_setting` varchar(20) NOT NULL,
  `namaweb` varchar(200) NOT NULL,
  `tagline` varchar(200) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`slide_duration`, `music`, `id_konfigurasi`, `home_setting`, `namaweb`, `tagline`, `icon`) VALUES
(10, '02_The_Script_Superheroes.mp3', 1, '', 'PT Bukit Asam Tbk', 'Beyond Coal', 'ptba.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide_konten`
--

CREATE TABLE `slide_konten` (
  `header_title` text COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `judul` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pengertian` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `manfaat` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `output` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `gambar` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `slide_konten`
--

INSERT INTO `slide_konten` (`header_title`, `id`, `judul`, `pengertian`, `manfaat`, `output`, `gambar`, `video`) VALUES
('B. PT Bukit Asam Tbk', 20, 'Bukit Asam Bertransformasi', 'MANAJEMEN Bukit Asam memutuskan untuk menjadi perusahan energi dan kimia yang peduli lingkungan.', 'Tentu saja, bukan tanpa alasan yang kuat kenapa Bukit Asam mau bertansformasi. Fuad I. Z. Fachroeddin (Fu), Direktur Pengembangan Usaha Bukit Asam, menjelaskannya dengan gamblang. “Ada tekanan dunia atas keberadaan batu bara dengan memprioritaskan green energy ke depan, hal ini wajar kalau kita katakan mengancam eksistensi bisnis batu bara,” ungkapnya dalam wawancara dengan redaksi Majalah BeyondCoal.', '<ol>\r\n<li>&ldquo;Namun, kebutuhan dunia dan Indonesia akan feedstock (bahan baku) batu bara</li>\r\n<li>Untuk menyalakan PLTU&nbsp;tetap dominan dibutuhkan sampai dengan 2050,&rdquo;</li>\r\n<li>&rdquo;Dan, kita harus bersyukur, bahwa Bukit Asam sekian lama ini punya kinerja yang sangat-sangat positif</li>\r\n</ol>', 'mesin4.jpg', 'videoplayback_(23)3.mp4'),
('A. Zoom Overview', 21, 'Mengenal Aplikasi Meeting Zoom: Fitur dan Cara Menggunakannya Baca selengkapnya di artikel ', 'Aplikasi meeting daring menjadi pilihan bagi para pekerja yang terpaksa harus menyelesaikan pekerjaannya di rumah atau work form home karena wabah COVID-19', 'Salah satu dari aplikasi tersebut adalah Zoom. Seperti apakah aplikasi tersebut? Zoom merupakan aplikasi komunikasi dengan menggunakan video.', '<ol>\r\n<li>Video dan audio HD Dengan menggunakan aplikasi ini.</li>\r\n<li>Alat kolaborasi bawaan Beberapa pengguna dapat berbagi layar secara bersamaan</li>\r\n<li>Keamanan Terkait keamanannya</li>\r\n</ol>', 'zoom3.png', 'Veralent_Stratomict_2018.mp4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(3, 'okaayy', 'okay@gmail.com', 'coba', 'coba');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `app_report`
--
ALTER TABLE `app_report`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_warehouse`
--
ALTER TABLE `data_warehouse`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `eclipse`
--
ALTER TABLE `eclipse`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `slide_konten`
--
ALTER TABLE `slide_konten`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `app_report`
--
ALTER TABLE `app_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_warehouse`
--
ALTER TABLE `data_warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `eclipse`
--
ALTER TABLE `eclipse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `slide_konten`
--
ALTER TABLE `slide_konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
