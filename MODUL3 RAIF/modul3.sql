-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 04:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_raif_table`
--

CREATE TABLE `showroom_raif_table` (
  `id_mobil` int(11) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom_raif_table`
--

INSERT INTO `showroom_raif_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status`) VALUES
(1, 'Innova', 'Raif', 'Toyota', '2022-11-18', 'contoh 1', 'pic2.png', 'lunas'),
(2, 'Agera R1', 'Fawwazdzaky', 'Koenigsegg', '2022-11-13', 'contoh 2', 'pic3.png', 'belum lunas'),
(35, 'Innova', 'Raif', 'Yotata', '1122-11-22', 'keren', 'pic1.jpg', 'lunas'),
(51, 'Alphard', 'kamu', 'Toyota', '2022-11-19', 'Mobil besar buat keluarga', 'mobil.jfif', 'lunas'),
(52, 'Yaris', 'Zuki', 'Toyotas', '2022-10-21', 'mobil kecil', 'pic4.jpg', 'lunas'),
(53, 'Black Adam', 'GOD', 'DC', '1222-11-11', 'bukan mobil ini', 'wp9247651.png', 'lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_raif_table`
--
ALTER TABLE `showroom_raif_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_raif_table`
--
ALTER TABLE `showroom_raif_table`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
