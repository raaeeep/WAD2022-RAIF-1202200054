-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 03:12 PM
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
(1, 'Innova', 'Raif', 'Toyota', '2022-11-10', 'Contoh 1', 'pic1.jpg', 'lunas'),
(57, 'Agera RS', 'RAIFFF', 'Koenigsegg', '2022-10-11', 'Contoh 2', 'pic3.png', 'belum lunas');

-- --------------------------------------------------------

--
-- Table structure for table `users_raif`
--

CREATE TABLE `users_raif` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_raif`
--

INSERT INTO `users_raif` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(5, 'Raif', 'raif@gmail.com', '$2y$10$PKegc0YZPPWI9dzma7KRo.llBTYuQp0SmsYuTnSWqTQrW3uqkOYe.', '085880853125'),
(6, 'Raif2', 'raif2@gmail.com', '$2y$10$vVSz1OuOnjId5Ur/EqLbPOafian1kbppuMjhWl8f6kpEfwwslx6gK', '085880853125');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_raif_table`
--
ALTER TABLE `showroom_raif_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `users_raif`
--
ALTER TABLE `users_raif`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_raif_table`
--
ALTER TABLE `showroom_raif_table`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users_raif`
--
ALTER TABLE `users_raif`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
