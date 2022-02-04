-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 03:43 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rentalmobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_tlp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_tlp`, `admin_email`, `admin_address`) VALUES
(1, 'Miranti Nurfahira', 'admin', '21232f297a57a5a743894a0e4a801fc3', '081292824031', 'mirantinurfahia@gmail.com', 'Jl. Siliwangi, Kota Bogor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembeli`
--

CREATE TABLE `tb_pembeli` (
  `pem_nama` varchar(50) NOT NULL,
  `pem_no` int(13) NOT NULL,
  `produk_name` varchar(50) NOT NULL,
  `pem_hari` int(50) NOT NULL,
  `produk_price` int(50) NOT NULL,
  `pem_tanggal` date NOT NULL,
  `pem_alamat` varchar(50) NOT NULL,
  `pem_id` int(11) NOT NULL,
  `pem_atm` varchar(25) NOT NULL,
  `no_rek` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembeli`
--

INSERT INTO `tb_pembeli` (`pem_nama`, `pem_no`, `produk_name`, `pem_hari`, `produk_price`, `pem_tanggal`, `pem_alamat`, `pem_id`, `pem_atm`, `no_rek`) VALUES
('zahwa', 2147483647, 'alphard', 350000, 700000, '2021-06-24', 'jambu dua', 26, 'BCA', 597243);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `produk_id` int(11) NOT NULL,
  `produk_name` varchar(100) NOT NULL,
  `produk_price` int(11) NOT NULL,
  `produk_deskripsi` text NOT NULL,
  `produk_gambar` varchar(100) NOT NULL,
  `produk_status` tinyint(1) NOT NULL,
  `data_created` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`produk_id`, `produk_name`, `produk_price`, `produk_deskripsi`, `produk_gambar`, `produk_status`, `data_created`) VALUES
(8, 'Sienta', 550000, 'Tempat Duduk	7 Kursi,\r\nMesin	1497 cc,\r\nTenaga	106 hp,\r\nPower Steering	Ya,\r\nKantong Udara Pengemudi	Ya,\r\nAnti Lock Braking System	Ya,\r\nGround Clearance	133 mm,', 'mobil1624451997.png', 1, NULL),
(9, 'rush', 350000, 'Tempat Duduk 7 Kursi,\r\nMesin	2494 cc,\r\nTenaga	178 hp,\r\nPower Steering = Ya,\r\nKantong Udara Pengemudi	Ya,\r\nAnti Lock Braking System	Ya,\r\nGround Clearance	160 mm,\r\n', 'mobil1624539087.png', 1, NULL),
(14, 'Raize', 970000, 'Ditenagai dua pilihan mesin Bensin berkapasitas 998 cc. Raize tersedia dengan transmisi Manual and CVT tergantung variannya. Raize adalah SUV 5 seater dengan panjang 4030 mm, lebar 1710 mm, wheelbase 2525 mm. serta ground clearance 200 mm.', 'mobil1627443967.png', 1, NULL),
(15, 'Avanza', 250000, 'Jumlah pintu: 5\r\nKapasitas tangki BBM: 45 l\r\nDimensi: 4.190 mm P x 1.660 mm L x 1.695 mm T\r\nHarga: Mulai Rp 187,6 juta\r\nMesin: 1,3L 4-silinder', 'mobil1627444082.png', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD PRIMARY KEY (`pem_id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  MODIFY `pem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
