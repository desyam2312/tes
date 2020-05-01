-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2019 at 10:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu1`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id_anak` int(11) NOT NULL,
  `id_ibu` int(11) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `tmp_lahir` varchar(11) NOT NULL,
  `tagl_lahir` datetime NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `bbl` int(11) NOT NULL,
  `keadaan_anak` varchar(50) NOT NULL,
  `tgl_meninggal` datetime NOT NULL,
  `penyebab_meninggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bumil`
--

CREATE TABLE `bumil` (
  `id_bumil` int(11) NOT NULL,
  `id_ibu` int(11) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `daftar_usia_kehamilan` int(11) NOT NULL,
  `hamil_ke` int(11) NOT NULL,
  `tgl_persalinan` datetime NOT NULL,
  `penolong_persalinan` varchar(50) NOT NULL,
  `keadaan_bayi` varchar(50) NOT NULL,
  `bbl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ibu`
--

CREATE TABLE `ibu` (
  `id_ibu` int(11) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `temp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` datetime NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` int(11) NOT NULL,
  `nama_dasawisma` varchar(50) NOT NULL,
  `status_kontrasepsi` varchar(50) NOT NULL,
  `jenis_kontrasepsi` varchar(50) NOT NULL,
  `tgl_meniggal` datetime NOT NULL,
  `penyebab_meninggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kader`
--

CREATE TABLE `kader` (
  `id_kader` int(11) NOT NULL,
  `nama_kader` varchar(50) NOT NULL,
  `alamat_kader` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kader`
--

INSERT INTO `kader` (`id_kader`, `nama_kader`, `alamat_kader`) VALUES
(1201164269, 'desyam ardianto', 'sukapura');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`),
  ADD KEY `id_ibu` (`id_ibu`);

--
-- Indexes for table `bumil`
--
ALTER TABLE `bumil`
  ADD PRIMARY KEY (`id_bumil`),
  ADD KEY `id_ibu` (`id_ibu`);

--
-- Indexes for table `ibu`
--
ALTER TABLE `ibu`
  ADD PRIMARY KEY (`id_ibu`);

--
-- Indexes for table `kader`
--
ALTER TABLE `kader`
  ADD PRIMARY KEY (`nama_kader`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anak`
--
ALTER TABLE `anak`
  ADD CONSTRAINT `anak_ibfk_1` FOREIGN KEY (`id_ibu`) REFERENCES `ibu` (`id_ibu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bumil`
--
ALTER TABLE `bumil`
  ADD CONSTRAINT `bumil_ibfk_1` FOREIGN KEY (`id_ibu`) REFERENCES `ibu` (`id_ibu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
