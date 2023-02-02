-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 10:04 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_training`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id_area` varchar(50) NOT NULL,
  `nama_area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id_area`, `nama_area`) VALUES
('01', 'Cilegon'),
('02', 'Tangerang');

-- --------------------------------------------------------

--
-- Table structure for table `auth_admin`
--

CREATE TABLE `auth_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_admin`
--

INSERT INTO `auth_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `auth_spv`
--

CREATE TABLE `auth_spv` (
  `id_spv` varchar(11) NOT NULL,
  `password_spv` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_spv`
--

INSERT INTO `auth_spv` (`id_spv`, `password_spv`) VALUES
('spv01', 'spv01'),
('spv02', 'spv02');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pelatihan`
--

CREATE TABLE `detail_pelatihan` (
  `id` int(11) NOT NULL,
  `id_nama_pelatihan` varchar(50) NOT NULL,
  `tanggal_mulai` datetime NOT NULL,
  `tanggal_selesai` datetime NOT NULL,
  `nama_jenis_pelatihan` varchar(50) NOT NULL,
  `provider` varchar(50) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `tempat_pelatihan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pelatihan`
--

INSERT INTO `detail_pelatihan` (`id`, `id_nama_pelatihan`, `tanggal_mulai`, `tanggal_selesai`, `nama_jenis_pelatihan`, `provider`, `catatan`, `tempat_pelatihan`) VALUES
(17, 't02', '2023-01-26 10:33:00', '2023-01-28 10:33:00', 'Internal', 'asd', 'asd', 'sa'),
(19, 't03', '2023-01-28 10:34:00', '2023-01-24 10:34:00', 'External', 'asdsd', '', 'serang');

-- --------------------------------------------------------

--
-- Table structure for table `histori_pelatihan`
--

CREATE TABLE `histori_pelatihan` (
  `id` int(11) NOT NULL,
  `id_karyawan` varchar(50) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `cost_center` varchar(50) NOT NULL,
  `plant` varchar(50) NOT NULL,
  `cost_center_name` varchar(100) NOT NULL,
  `date_of_expired` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_pelatihan`
--

INSERT INTO `histori_pelatihan` (`id`, `id_karyawan`, `nama_karyawan`, `posisi`, `cost_center`, `plant`, `cost_center_name`, `date_of_expired`) VALUES
(2, '114031', 'shidqi', 'ad2', 'asd2', 'd2', 'asd', '2023-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pelatihan`
--

CREATE TABLE `jenis_pelatihan` (
  `id` int(11) NOT NULL,
  `id_jenis_pelatihan` varchar(50) NOT NULL,
  `nama_jenis_pelatihan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_pelatihan`
--

INSERT INTO `jenis_pelatihan` (`id`, `id_jenis_pelatihan`, `nama_jenis_pelatihan`) VALUES
(1, 'j01', 'Internal'),
(2, 'j02', 'External');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `id_karyawan` varchar(11) NOT NULL,
  `password_karyawan` varchar(50) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jabatan_karyawan` varchar(50) NOT NULL,
  `alamat_karyawan` varchar(100) NOT NULL,
  `area_karyawan` varchar(50) NOT NULL,
  `hp_karyawan` int(11) NOT NULL,
  `email_karyawan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `id_karyawan`, `password_karyawan`, `nama_karyawan`, `tempat_lahir`, `tanggal_lahir`, `jabatan_karyawan`, `alamat_karyawan`, `area_karyawan`, `hp_karyawan`, `email_karyawan`) VALUES
(41, 'a01', '123', 'shidqi aqil', 'serang', '2023-01-02', 'team member', 'cilegon', 'Cilegon', 89102, 's@gmail.com'),
(42, 'a02', 'aaaa', 'FIRHAN', 'serang', '2023-01-09', 'spv', 'cilegon', 'Cilegon', 89102, 's@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id` int(11) NOT NULL,
  `id_pelatihan` varchar(11) NOT NULL,
  `nama_pelatihan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id`, `id_pelatihan`, `nama_pelatihan`) VALUES
(11, 't02', 'safety'),
(18, 't03', 'berenang'),
(19, 's', 'dd'),
(20, 'asd', 'a'),
(21, 'fd', 'fg'),
(22, 'fdg', ''),
(32, 'dfsdf', 'q'),
(33, 'fgr', 'df'),
(34, 'dfwe3', 'fgfd'),
(35, 'sdg4', 'ad');

-- --------------------------------------------------------

--
-- Table structure for table `penjadwalan`
--

CREATE TABLE `penjadwalan` (
  `id` int(11) NOT NULL,
  `id_nama_pelatihan` varchar(11) NOT NULL,
  `nama_pelatihan` varchar(100) NOT NULL,
  `id_karyawan` varchar(11) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `jabatan_karyawan` varchar(100) NOT NULL,
  `id_detail_pelatihan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjadwalan`
--

INSERT INTO `penjadwalan` (`id`, `id_nama_pelatihan`, `nama_pelatihan`, `id_karyawan`, `nama_karyawan`, `jabatan_karyawan`, `id_detail_pelatihan`) VALUES
(138, 't03', 'berenang', 'a02', 'FIRHAN', 'spv', '19'),
(155, 't02', 'safety', 'a02', 'FIRHAN', 'spv', '17'),
(156, 't02', 'safety', 'a01', 'shidqi aqil', 'team member', '17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indexes for table `auth_admin`
--
ALTER TABLE `auth_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_spv`
--
ALTER TABLE `auth_spv`
  ADD PRIMARY KEY (`id_spv`);

--
-- Indexes for table `detail_pelatihan`
--
ALTER TABLE `detail_pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_pelatihan`
--
ALTER TABLE `histori_pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_pelatihan`
--
ALTER TABLE `jenis_pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjadwalan`
--
ALTER TABLE `penjadwalan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_admin`
--
ALTER TABLE `auth_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_pelatihan`
--
ALTER TABLE `detail_pelatihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `histori_pelatihan`
--
ALTER TABLE `histori_pelatihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_pelatihan`
--
ALTER TABLE `jenis_pelatihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `penjadwalan`
--
ALTER TABLE `penjadwalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
