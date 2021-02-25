-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 12:16 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(10) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`, `nama`, `email`) VALUES
('admin', 'CpiLv9ja0ag=', 'admin', 'admin@travelrabitat.com');

-- --------------------------------------------------------

--
-- Table structure for table `trv_cabang`
--

CREATE TABLE `trv_cabang` (
  `id_cbg` int(10) NOT NULL,
  `no_order` varchar(50) NOT NULL,
  `nm_hendel` varchar(50) NOT NULL,
  `nm_travel` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `no_order_pst` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trv_order`
--

CREATE TABLE `trv_order` (
  `id` int(10) NOT NULL,
  `id_cbg` int(10) NOT NULL,
  `tgl_order` date NOT NULL,
  `jam` time NOT NULL,
  `driver` varchar(50) NOT NULL,
  `bus` varchar(50) NOT NULL,
  `dari` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `biaya` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trv_pusat`
--

CREATE TABLE `trv_pusat` (
  `no_order_pst` int(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `trv_cabang`
--
ALTER TABLE `trv_cabang`
  ADD PRIMARY KEY (`id_cbg`),
  ADD KEY `no_order_pst` (`no_order_pst`);

--
-- Indexes for table `trv_order`
--
ALTER TABLE `trv_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cbg` (`id_cbg`);

--
-- Indexes for table `trv_pusat`
--
ALTER TABLE `trv_pusat`
  ADD PRIMARY KEY (`no_order_pst`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trv_order`
--
ALTER TABLE `trv_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trv_cabang`
--
ALTER TABLE `trv_cabang`
  ADD CONSTRAINT `trv_cabang_ibfk_1` FOREIGN KEY (`no_order_pst`) REFERENCES `trv_pusat` (`no_order_pst`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trv_order`
--
ALTER TABLE `trv_order`
  ADD CONSTRAINT `trv_order_ibfk_1` FOREIGN KEY (`id_cbg`) REFERENCES `trv_cabang` (`id_cbg`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
