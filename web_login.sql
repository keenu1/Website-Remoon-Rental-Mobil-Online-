-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 11:59 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_merk`
--

CREATE TABLE `tbl_merk` (
  `id` int(11) NOT NULL,
  `merk` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_merk`
--

INSERT INTO `tbl_merk` (`id`, `merk`) VALUES
(1, 'Toyota'),
(32, 'Mitsubishi'),
(33, 'Honda'),
(34, 'lexus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mobil`
--

CREATE TABLE `tbl_mobil` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `warna` varchar(20) DEFAULT NULL,
  `no_polisi` varchar(10) DEFAULT NULL,
  `jumlah_kursi` int(1) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL,
  `gambar` varchar(500) DEFAULT NULL,
  `id_merk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mobil`
--

INSERT INTO `tbl_mobil` (`id`, `nama`, `warna`, `no_polisi`, `jumlah_kursi`, `harga`, `gambar`, `id_merk`) VALUES
(38, 'Xpander', 'silver', 'B 8743 HJS', 7, 450000, '31.jpg', 32),
(39, 'Alphard', 'putih', 'B 9839 OPS', 7, 850000, '52.jpg', 1),
(40, 'Civic', 'putih', 'B 8347 KJS', 4, 450000, 'civic_type_R.jpg', 33),
(41, 'Rx 350 L', 'Merah', 'B 1234 ABC', 7, 650000, 'lexus_rx_350.jpg', 34),
(42, 'Jazz', 'orange', 'B 8731 KJD', 4, 450000, 'jazz.jpg', 33),
(43, 'Fortuner', 'Putih', 'B 9843 JKS', 7, 500000, 'fortuner.jpg', 1),
(44, 'Avanza', 'Silver', 'B 8273 ISD', 7, 350000, 'avanza1.jpg', 1),
(45, 'CR-V', 'Silver', 'B 7634 TYC', 7, 450000, '11.jpg', 33);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesan`
--

CREATE TABLE `tbl_pemesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pemesan`
--

INSERT INTO `tbl_pemesan` (`id`, `nama`, `alamat`, `jenis_kelamin`, `foto`) VALUES
(6, 'Fakhrul', 'Sidareja', 'L', 'fakhrul-1579004931.jpg'),
(7, 'Fanani', 'Sidareja', 'L', 'fanani-1579275545.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perjalanan`
--

CREATE TABLE `tbl_perjalanan` (
  `id` int(11) NOT NULL,
  `asal` varchar(20) DEFAULT NULL,
  `tujuan` varchar(20) DEFAULT NULL,
  `jarak` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_perjalanan`
--

INSERT INTO `tbl_perjalanan` (`id`, `asal`, `tujuan`, `jarak`) VALUES
(3, 'Cilacap', 'Jogjakarta', 300),
(4, 'Cilacap', 'Ciamis', 70);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `id` int(11) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `id_pemesan` int(11) DEFAULT NULL,
  `id_mobil` int(11) DEFAULT NULL,
  `id_perjalanan` int(11) DEFAULT NULL,
  `id_jenis_bayar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`id`, `harga`, `tgl_pinjam`, `tgl_kembali`, `id_pemesan`, `id_mobil`, `id_perjalanan`, `id_jenis_bayar`) VALUES
(1, 1000000, '2020-01-01', '2020-01-04', NULL, NULL, NULL, NULL),
(6, 2000000, '2020-01-17', '2020-01-20', 6, NULL, 3, 3),
(8, 1500000, '2020-01-18', '2020-01-21', 7, NULL, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sewa`
--

CREATE TABLE `tbl_sewa` (
  `id_sewa` int(11) NOT NULL,
  `lama_sewa` int(5) DEFAULT NULL,
  `tanggal_ambil` date DEFAULT NULL,
  `jaminan` varchar(25) DEFAULT NULL,
  `jenis_bayar` varchar(25) DEFAULT NULL,
  `id_mobil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sewa`
--

INSERT INTO `tbl_sewa` (`id_sewa`, `lama_sewa`, `tanggal_ambil`, `jaminan`, `jenis_bayar`, `id_mobil`) VALUES
(7, 3, '2020-06-10', 'sim', 'cash', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `lama_sewa` int(11) DEFAULT NULL,
  `tanggal_ambil` date DEFAULT NULL,
  `jaminan` varchar(25) DEFAULT NULL,
  `jenis_bayar` varchar(25) DEFAULT NULL,
  `id_mobil` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `lama_sewa`, `tanggal_ambil`, `jaminan`, `jenis_bayar`, `id_mobil`, `id_user`) VALUES
(89, 4, '2020-06-10', 'ktp', 'cash', 41, 25),
(90, 10, '2020-06-17', 'stnk', 'kredit', 39, 25),
(92, 3, '2020-06-10', 'ktp', 'cash', 44, 25),
(93, 1, '2020-06-14', 'sim', 'cash', 45, 27),
(94, 2, '2020-06-13', 'sim', 'cash', 38, 27);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `phone_number` varchar(25) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone_number`, `address`, `image`, `role_id`) VALUES
(16, 'Administrator', 'addinfa@gmail.com', '$2y$10$NzWA6JYTrevdOjWj9QVHye09I1RIuh/ztkk74hjd5P6cWnwz2tmH6', NULL, NULL, NULL, 1),
(18, 'addin', 'addin@gmail.com', '$2y$10$c74vuQV9vISUFGavazbZY.8fIceTel9uBd5Y0j7nQqAhsoDwyul3u', NULL, NULL, NULL, 2),
(25, 'addin firdaus', 'addinfirdaus@gmail.com', '$2y$10$M8ZxLGNNNZe1T5uEqsoO9OKSG3OuhUJJPK18PxSjiLSIg.16J99fO', NULL, NULL, NULL, 2),
(26, 'adinda', 'adinda@gmail.com', '$2y$10$siJhyCnh69Mv3DIfCjBtQ.wSflZz7CKcpTirTm4g6hB6BiMuNk9oG', NULL, NULL, NULL, 2),
(27, 'Muhamad Rizki Nugroho', 'nugrohorizki191@gmail.com', '$2y$10$hsTS9U1szsBQ6Bc55BXBROxF1hLPD4dMP9tIiM5agd80ZsGBGBDzm', '087779994959', 'jln flamboyan', NULL, 1),
(28, 'Group 2 Remoon', 'group2@remoon.com', '$2y$10$YCNzHRPkowdvv541E3Rtz.SUO3sGl92BBAh5cBMZLpwP.rJWZCB9y', '100', 'unsika', NULL, 2),
(29, 'admin', 'admin@remoon.com', '$2y$10$qBSogmqtspmvQv8RMEuy9e0sZMrgTD5X3/Sr.PvSOO9uXPHAZtZ0q', '100', 'unsika', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(4, 1, 3),
(5, 1, 4),
(6, 2, 5),
(7, 2, 6),
(8, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Mobil'),
(4, 'pesanan'),
(5, 'profile'),
(6, 'pesanan'),
(7, 'akun');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'Dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(4, 2, 'Beranda', 'Beranda', 'fas fa-fw fa-home', 1),
(6, 5, 'Profile', 'Profile', 'fas fa-fw fa-user', 1),
(7, 6, 'Pesanan', 'Pesanan/index', 'fas fa-fw fa-clipboard-list', 1),
(8, 3, 'Merk', 'Merk', 'fas fa-fw fa-columns', 1),
(9, 3, 'Mobil', 'Mobil', 'fas fa-fw fa-car-alt', 1),
(10, 7, 'Manajemen Akun', 'User/akun', 'fas fa-fw fa-cog', 1),
(11, 4, 'Pesanan', 'Pesanan/admin', 'fas fa-fw fa-receipt', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_merk`
--
ALTER TABLE `tbl_merk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_mobil_ibfk_2` (`id_merk`);

--
-- Indexes for table `tbl_pemesan`
--
ALTER TABLE `tbl_pemesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_perjalanan`
--
ALTER TABLE `tbl_perjalanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pemesan` (`id_pemesan`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `id_perjalanan` (`id_perjalanan`),
  ADD KEY `id_jenis_bayar` (`id_jenis_bayar`);

--
-- Indexes for table `tbl_sewa`
--
ALTER TABLE `tbl_sewa`
  ADD PRIMARY KEY (`id_sewa`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_merk`
--
ALTER TABLE `tbl_merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_pemesan`
--
ALTER TABLE `tbl_pemesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_perjalanan`
--
ALTER TABLE `tbl_perjalanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_sewa`
--
ALTER TABLE `tbl_sewa`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  ADD CONSTRAINT `tbl_mobil_ibfk_2` FOREIGN KEY (`id_merk`) REFERENCES `tbl_merk` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `tbl_sewa`
--
ALTER TABLE `tbl_sewa`
  ADD CONSTRAINT `tbl_sewa_ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `tbl_mobil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
