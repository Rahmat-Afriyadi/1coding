-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 05:43 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1coding`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(2) NOT NULL,
  `nama_kepalakejuruan` varchar(35) NOT NULL,
  `nama_jurusan` varchar(35) NOT NULL,
  `gambar` varchar(35) NOT NULL,
  `jumlah_guru` int(5) NOT NULL,
  `jumlah_siswa` int(5) NOT NULL,
  `jumlah_kelas` int(5) NOT NULL,
  `Deskripsi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_kepalakejuruan`, `nama_jurusan`, `gambar`, `jumlah_guru`, `jumlah_siswa`, `jumlah_kelas`, `Deskripsi`) VALUES
(1, 'Satrio Nugroho S.SI', 'Akuntansi', 'akuntansi.jpg', 5, 126, 1, 'Di jurusan Akuntansi ini mempelajari tentang Akuntansi Keuangan, Akuntansi Manajemen, Akuntansi Biaya, Analisis Laporan Keuangan, Perpajakan, Pengauditan, Sistem Informasi Akuntansi, Akuntansi Sektor '),
(2, 'Galinggih Septiar S.SI', 'Komputer dan Jaringan', ' tkj.jpg', 21, 505, 4, 'Pelajaran yang dibahas di jurusan TKJ tentunya mendalami dunia jaringan komputer, mulai dari dasar hingga membangun jaringan sendiri melalui Router. Mengatur komputer agar bisa saling terhubung ke int'),
(3, 'Ahmad Daniawan S.SI', 'Otomotif', 'otomotif.jpg', 15, 378, 3, 'Teknik Kendaraan Ringan Otomotif, dengan fokus materi pada mobil bensin dan diesel. Materi yang dipelajari adalah Teknologi Dasar Otomotif, Pekerjaan Dasar Teknik otomotif, Gambar Teknik, Pemeliharaan'),
(4, 'Rahmat Afriyadi S.SI  ', 'Rekayasa Perangkat Lunak', 'rpl.jpg', 11, 260, 2, 'RPL (Rekayasa Perangkat Lunak) itu Gampang ! tidak jauh jauh sama 3 hal ini yaitu:\r\n1. Coding\r\n2. Desain\r\n3. Algoritma. selain itu jurusan RPL juga mempelajari tentang Perakitan Komputer, Jaringan Das');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
