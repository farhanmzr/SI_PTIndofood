-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 10:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptindofood`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` bigint(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `alamat`, `email`, `no_hp`) VALUES
(311313131, 'SUPERINDO', 'Tembalang', 'superindo@gmail.com', '0811123717123'),
(21120117140001, 'PT Indomaret', 'Jalan Depok Sari Raya No.64 Semarang', 'toko_indomaret@gmail.com', '081227157854'),
(33120917130510, 'PT Alfamidi', 'Jalan Soekarno-Hatta No.58, Pedurungan, Semarang', 'alfamidimarket@yahoo.com', '082245831745'),
(34055197155101, 'PT Alfamart', 'Jalan Gondang Raya, Tembalang', 'alfamartmarket@gmail.com', '085325727428'),
(41020517439901, 'PT CeriaMarket', 'Jalan Mulawarman I, Tembalang, Semarang', 'ceriamarket@gmail.com', '081558257575'),
(53129117130963, 'PT GosekMarket', 'Jalan Tanjungsari IV, Banyumanik, Semarang', 'gosekmarket@gmail.com', '085325113865'),
(53720199136209, 'PT Bright', 'Jalan Sisingamangaraja II, Semarang', 'brightmytoko@gmail.com', '081725179335'),
(69125137050941, 'PT Lawson', 'Jalan Ngablak Timur VI, Mrican, Semarang', 'lawsonshop@gmail.com', '085665732590'),
(71150137493301, 'PT Yomart', 'Jalan Candi Sari Raya No.19, Semarang', 'yomartsmg@yahoo.com', '088765331790'),
(88427557239501, 'PT Circle K', 'Jalan Kelud Raya IV, Sampangan, Semarang', 'circleklife@gmail.com', '089757831443');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `stok` varchar(20) NOT NULL,
  `detail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `harga`, `stok`, `detail`) VALUES
(9999901, 'Indomie', '2500', '65', 'Noodles'),
(9999902, 'Pop Mie', '5500', '62', 'Noodles'),
(9999903, 'Sarimi', '1500', '40', 'Noodles'),
(9999904, 'Indomilk', '10000', '83', 'Makanan Hasil Olahan Susu'),
(9999905, 'Cap Enak', '18250', '20', 'Makanan Hasil Olahan Susu'),
(9999906, 'Kremer', '24500', '37', 'Makanan Hasil Olahan Susu'),
(9999907, 'Milkuat', '2750', '56', 'Makanan Hasil Olahan Susu'),
(9999908, 'Indoeskrim', '7000', '55', 'Makanan Hasil Olahan Susu'),
(9999909, 'Orchid Butter', '67500', '18', 'Makanan Hasil Olahan Susu'),
(9999910, 'Chitato', '7500', '76', 'Makanan Ringan'),
(9999911, 'Jetz', '1750', '30', 'Makanan Ringan'),
(9999912, 'Lays', '8000', '12', 'Makanan Ringan'),
(9999913, 'Qtella', '6750', '52', 'Makanan Ringan'),
(9999914, 'Cheetos', '3250', '69', 'Makanan Ringan'),
(9999915, 'Trenz', '2500', '57', 'Makanan Ringan'),
(9999916, 'Doritos', '3000', '43', 'Makanan Ringan'),
(9999917, 'Ichi Ocha', '4000', '103', 'Minuman'),
(9999918, 'Frutamin', '2000', '38', 'Minuman'),
(9999919, 'Club', '1500', '45', 'Minuman'),
(9999920, 'Indofood Kecap Manis', '11500', '89', 'Bumbu Dapur'),
(9999921, 'Bumbu Racik', '2500', '34', 'Bumbu Dapur'),
(9999922, 'Sambal Indofood', '9000', '29', 'Bumbu Dapur'),
(9999923, 'Promina', '42500', '34', 'Makanan Nutrisi'),
(9999924, 'SUN', '33750', '21', 'Makanan Nutrisi'),
(9999925, 'Segitiga Biru', '60000', '15', 'Tepung'),
(9999926, 'Cakra Kembar', '80000', '14', 'Tepung'),
(9999927, 'Kunci Biru', '36500', '12', 'Tepung'),
(9999928, 'Lencana Merah', '47500', '24', 'Tepung'),
(9999929, 'La Fonte', '13000', '37', 'Pasta'),
(9999930, 'Bimoli', '23500', '29', 'Minyak '),
(9999931, 'Palmia', '16250', '25', 'Minyak');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_order` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_pembeli` bigint(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga` varchar(11) NOT NULL,
  `jml` int(30) NOT NULL,
  `total` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_order`, `tgl_transaksi`, `id_pembeli`, `nama`, `id_produk`, `harga`, `jml`, `total`) VALUES
(11, '2019-10-24', 34055197155101, 'PT Alfamart', 9999902, '5500', 15, '82500'),
(12, '2019-11-07', 88427557239501, 'PT Circle K', 9999912, '8000', 25, '200000'),
(13, '2019-12-01', 53129117130963, 'PT GosekMarket', 9999902, '5500', 38, '209000'),
(14, '2019-11-26', 53129117130963, 'PT GosekMarket', 9999901, '2500', 10, '25000'),
(15, '2019-12-02', 311313131, 'SUPERINDO', 9999905, '18250', 5, '91250');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'f21e7e5edf1f6d8ccb0afa01badf3ec0', 'admin'),
(2, 'pembeli', '7f822c4db73b183e4a71b6c8b176f606', 'pembeli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_pembeli` (`id_pembeli`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9999933;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
