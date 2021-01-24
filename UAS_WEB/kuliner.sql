-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 02:43 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliner`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `NIK` int(10) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `NIK`, `password`) VALUES
(7, 1810520023, '$2y$10$hSgA/2.vxJh970WdiEl.j.ntJ5ZA3UycLxgBZMTn1CVkYYxCrGIPe'),
(8, 1810650032, '$2y$10$9ZfAd29rvkaw6jbfsc5zXeCXJRVwFNUrEAADwMnX85HYN5PN25XFS');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `harga`, `gambar`) VALUES
(7, 'Bakso Biasa', 15000, '60055985bd688.$ekstensigambar'),
(8, 'Nasi Goreng', 17000, '600559c27ab3b.$ekstensigambar'),
(9, 'Sambal Cumi', 24000, '600559f6cb6a5.$ekstensigambar'),
(10, 'Beberok Udang', 18000, '60055bf440375.$ekstensigambar'),
(11, 'Mie Ayam', 15000, '60055c876a0be.$ekstensigambar'),
(12, 'Ayam Bakar', 55000, '60055cc982bb1.$ekstensigambar'),
(13, 'Ayam Geprek', 13000, '60055d0dae0b5.$ekstensigambar'),
(14, 'Tempe Swete', 16500, '60055d9d613be.$ekstensigambar'),
(15, 'Gado-Gado', 17000, '60055dd028737.$ekstensigambar'),
(16, 'Lalapan Lele', 23000, '60055e38b9d7c.$ekstensigambar'),
(17, 'Mie Aceh', 12000, '60055e6e4debd.$ekstensigambar'),
(18, 'Nasi Padang', 13000, '60055ee4ddda4.$ekstensigambar'),
(19, 'Sate Ayam', 23000, '60055f08a9f6c.$ekstensigambar'),
(20, 'Ikan Air Tawar', 27000, '60055f7eef637.$ekstensigambar');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(10) NOT NULL,
  `NIK` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `NIK`, `nama`, `alamat`, `bagian`) VALUES
(1, 1810530034, 'Anggi Samudra', 'Kelambik kec. Aik Belek Kab. Lombok Utara', 'Gudang'),
(2, 1810520032, 'Ahmad Dery Dustury', 'Songak Kec. Rumbuk Kab. Lombok Timur', 'Toko'),
(3, 1810520054, 'Reza Maulana Riswan', 'Kenaot Baru Desa. Suangi Kec. Sakra ', 'Toko'),
(4, 1810520065, 'Anas In Ilman', 'Selanggor Kec. Sumbawa Kab. Sumbawa Besar', 'Gudang'),
(5, 1810520031, 'M. Zaenul Satriawan', 'Serumbung Kec. Lembar Kab. Lombok Barat', 'Gudang'),
(6, 1810530041, 'Laela Sonia Putri', 'Keselet Kec. Rumbuk Kab. Lombok Timur', 'Kasir'),
(7, 1810520020, 'Janil Pandi', 'Kenaot Kec. Sakra Kab. Lombok Timur', 'Cheaf Store');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
