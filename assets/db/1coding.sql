-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 04:35 AM
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
-- Table structure for table `kepalakejuruan`
--

CREATE TABLE `kepalakejuruan` (
  `nama_kepalakejuruan` varchar(35) NOT NULL,
  `nama_jurusan` varchar(35) NOT NULL,
  `gambar` varchar(35) NOT NULL,
  `jumlah_guru` int(5) NOT NULL,
  `jumlah_siswa` int(5) NOT NULL,
  `jumlah_kelas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepalakejuruan`
--

INSERT INTO `kepalakejuruan` (`nama_kepalakejuruan`, `nama_jurusan`, `gambar`, `jumlah_guru`, `jumlah_siswa`, `jumlah_kelas`) VALUES
('Satrio Nugroho S.SI', 'Akuntansi', 'akuntansi.jpg', 5, 126, 1),
('Galinggih Septiar S.SI', 'Komputer dan Jaringan', ' tkj.jpg', 21, 505, 4),
('Ahmad Daniawan S.SI', 'Otomotif', 'otomotif.jpg', 15, 378, 3),
('Rahmat Afriyadi S.SI  ', 'Rekayasa Perangkat Lunak', 'rpl.jpg', 11, 260, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kepalakejuruan`
--
ALTER TABLE `kepalakejuruan`
  ADD PRIMARY KEY (`nama_jurusan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

