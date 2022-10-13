-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 08:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pindai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_app`
--

CREATE TABLE `tbl_app` (
  `id_app` int(11) NOT NULL,
  `nama_app` varchar(50) NOT NULL,
  `kategori_app` varchar(50) NOT NULL,
  `link` text NOT NULL,
  `sub_kategori_app` varchar(50) NOT NULL,
  `catatan` text NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_app`
--

INSERT INTO `tbl_app` (`id_app`, `nama_app`, `kategori_app`, `link`, `sub_kategori_app`, `catatan`, `author_id`) VALUES
(1, 'Simpel Sampel', 'Balai', 'https://simpel.bpommanado.id/ns/', 'Internal', 'Sistem Pelayanan Digital Pengujian Sampel Eksternal Berbasis Online', 4),
(3, 'Midal', 'Balai', 'http://simpel.bpommanado.id/midal', 'Internal', 'Monitoring Administrasi Pelayanan Internal\nBalai Besar POM di Manado', 4),
(4, 'e-Sertifikasi Badan POM', 'Pusat', 'https://e-sertifikasi.pom.go.id/pendaftaran', 'Internal & Eksternal', 'Sistem Informasi e-Sertifikasi Badan Pengawas Obat dan Makanan', 4),
(5, 'Registrasi Pangan', 'Pusat', 'https://registrasipangan.pom.go.id/', 'Internal & Eksternal', 'Direktorat Registrasi Pangan Olahan Deputi Bidang Pengawasan Pangan Olahan - Badan POM RI', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bidang`
--

CREATE TABLE `tbl_bidang` (
  `id_bidang` int(11) NOT NULL,
  `nama_bidang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penindakan_perkara`
--

CREATE TABLE `tbl_penindakan_perkara` (
  `id_penindakan` int(11) NOT NULL,
  `komoditi` varchar(50) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `author_id` int(11) NOT NULL,
  `date_post` date NOT NULL,
  `verified` int(4) NOT NULL DEFAULT 1023
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penindakan_perkara`
--

INSERT INTO `tbl_penindakan_perkara` (`id_penindakan`, `komoditi`, `tahun`, `jumlah`, `author_id`, `date_post`, `verified`) VALUES
(1, 'Obat', 2018, '1', 4, '2022-10-03', 1023),
(2, 'Kosmetik', 2018, '1', 4, '2022-10-03', 1023),
(3, 'Obat Tradisional', 2018, '1', 4, '2022-10-03', 1023),
(4, 'Pangan', 2018, '4', 4, '2022-10-03', 1023),
(5, 'Obat', 2019, '4', 4, '2022-10-03', 1023),
(6, 'Obat Tradisional', 2019, '1', 4, '2022-10-03', 1023),
(7, 'Kosmetik', 2019, '3', 4, '2022-10-03', 1023),
(8, 'Pangan', 2019, '1', 4, '2022-10-03', 1023),
(9, 'Obat', 2020, '14', 4, '2022-10-03', 1023),
(10, 'Obat Tradisional', 2020, '1', 4, '2022-10-03', 1023),
(11, 'Kosmetik', 2020, '1', 4, '2022-10-03', 1023),
(12, 'Obat', 2021, '13', 4, '2022-10-03', 1023);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rb`
--

CREATE TABLE `tbl_rb` (
  `id_rb` int(11) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah_rb` varchar(20) NOT NULL,
  `author_id` int(11) NOT NULL,
  `date_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rb`
--

INSERT INTO `tbl_rb` (`id_rb`, `bulan`, `tahun`, `jumlah_rb`, `author_id`, `date_post`) VALUES
(1, 'Januari', 2020, '3.09', 4, '2022-10-04'),
(2, 'Juli', 2020, '3.29', 4, '2022-10-04'),
(3, 'Januari', 2021, '3.22', 4, '2022-10-04'),
(4, 'Juli', 2021, '3.34', 4, '2022-10-04'),
(5, 'Januari', 2022, '3.41', 4, '2022-10-04'),
(6, 'Juli', 2022, '3.58', 4, '2022-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `idUser` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `namaLengkap` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `status` int(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`idUser`, `username`, `password`, `namaLengkap`, `level`, `status`) VALUES
(4, 'admin', '$2y$10$jgXY4pPyigqDvfWT69N3IuFvsiEzSj1kR7VB1fMQMyzg2H1310HMG', 'Akbar', 'Juragan', 989898),
(5, 'ikhsan', '$2y$10$4wFGkR9JcsIsomSEZpe/Su/B1kJvpqcye9AUDvPsrSc9wy13Jlr2a', 'Ikhsan Doating', 'Administrator', 989898),
(6, 'aldo', '$2y$10$wDHwjlqKSZIdpfi.Wrl/6./hgTNrxixTX1z36H2hm0Hnmd8QULkQy', 'Aldo', 'Administrator', 1023),
(7, 'aldo', '$2y$10$IMCcC87NwfZuJclg/0/Nv.re1M5OnyaGmKFGkK521bJMLpsxeEhVa', '&lt;h2&gt;Bjorka&lt;/h2&gt;', 'Juragan', 1023),
(8, 'asdasd', '$2y$10$GQ6gPM27/41XAxlg7FVuEu/RxyH8raAk746ZtC82S6sPutNy533G6', '&lt;h1&gt;Bjorka&lt;/h1&gt;', 'Juragan', 989898),
(10, 'ikhsan', '$2y$10$E1XyxTrLon3cFPzKkjF4V.eeQbgCRbZX9LXHym2kxBQTrat2D7U1S', 'AKBAR', 'Juragan', 1023),
(11, 'sAS', '$2y$10$ZHvkhyRWt.QnAlLGooBKZ.D5bV809cAVL.IS.h.OxCVhdDqYvfdTm', 'ASA', 'Juragan', 989898);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_app`
--
ALTER TABLE `tbl_app`
  ADD PRIMARY KEY (`id_app`);

--
-- Indexes for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tbl_penindakan_perkara`
--
ALTER TABLE `tbl_penindakan_perkara`
  ADD PRIMARY KEY (`id_penindakan`);

--
-- Indexes for table `tbl_rb`
--
ALTER TABLE `tbl_rb`
  ADD PRIMARY KEY (`id_rb`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_app`
--
ALTER TABLE `tbl_app`
  MODIFY `id_app` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_penindakan_perkara`
--
ALTER TABLE `tbl_penindakan_perkara`
  MODIFY `id_penindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_rb`
--
ALTER TABLE `tbl_rb`
  MODIFY `id_rb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
