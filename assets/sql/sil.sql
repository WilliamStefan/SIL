-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2015 at 05:29 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sil`
--
CREATE DATABASE IF NOT EXISTS `sil` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sil`;

-- --------------------------------------------------------

--
-- Table structure for table `histori_penjualan`
--

CREATE TABLE IF NOT EXISTS `histori_penjualan` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `pembeli` varchar(100) NOT NULL,
  `komponen` varchar(100) NOT NULL,
  `jumlah_komponen` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `komponen` (`komponen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `histori_penjualan`
--

INSERT INTO `histori_penjualan` (`id`, `tanggal`, `pembeli`, `komponen`, `jumlah_komponen`) VALUES
(1, '2015-11-25', 'Budi', 'K-1', 100),
(2, '2015-11-18', 'Budi', 'K-2', 20),
(3, '2015-12-12', 'Andi', 'K-1', 100),
(4, '2015-10-02', 'Andi', 'K-5', 1),
(5, '2015-11-28', 'Sasa', 'K-2', 10),
(6, '2015-11-28', 'Lala', 'K-6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `komponen`
--

CREATE TABLE IF NOT EXISTS `komponen` (
  `id_komponen` varchar(100) NOT NULL,
  `nama_komponen` varchar(100) NOT NULL,
  `stok_tersedia` int(11) NOT NULL,
  `stok_minimal` int(11) NOT NULL,
  PRIMARY KEY (`id_komponen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komponen`
--

INSERT INTO `komponen` (`id_komponen`, `nama_komponen`, `stok_tersedia`, `stok_minimal`) VALUES
('K-1', 'Komponen 1', 4, 10),
('K-2', 'Komponen 2', 100, 10),
('K-3', 'Komponen 3', 100, 10),
('K-4', 'Komponen 4', 2147483647, 10000),
('K-5', 'Komponen 5', 10, 1),
('K-6', 'Komponen 6', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id_supplier` varchar(30) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `lokasi_supplier` varchar(100) NOT NULL,
  `waktu_pengiriman` int(11) NOT NULL,
  `komponen` text NOT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `lokasi_supplier`, `waktu_pengiriman`, `komponen`) VALUES
('S-1', 'Andiiiiiiiii', 'Jakarta', 1, 'Komponen 1, Komponen 2'),
('s-2', 'supplier2', 'bandung', 10, 'komponen1');

-- --------------------------------------------------------

--
-- Table structure for table `supplierbarang`
--

CREATE TABLE IF NOT EXISTS `supplierbarang` (
  `id_supplierbarang` int(11) NOT NULL AUTO_INCREMENT,
  `id_supplier` varchar(30) NOT NULL,
  `id_barang` varchar(100) NOT NULL,
  `harga_beli_komponen` int(9) NOT NULL,
  PRIMARY KEY (`id_supplierbarang`),
  KEY `id_supplier` (`id_supplier`,`id_barang`),
  KEY `id_barang` (`id_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `supplierbarang`
--

INSERT INTO `supplierbarang` (`id_supplierbarang`, `id_supplier`, `id_barang`, `harga_beli_komponen`) VALUES
(1, 'S-1', 'K-1', 10000),
(2, 'S-1', 'K-2', 20000),
(3, 'S-1', 'K-3', 30000),
(4, 's-2', 'K-2', 40000),
(5, 's-2', 'K-3', 50000),
(6, 's-2', 'K-4', 60000),
(7, 'S-1', 'K-5', 70000),
(8, 's-2', 'K-5', 80000),
(10, 'S-1', 'K-6', 20000),
(11, 's-2', 'K-1', 120000);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `histori_penjualan`
--
ALTER TABLE `histori_penjualan`
  ADD CONSTRAINT `histori_penjualan_ibfk_1` FOREIGN KEY (`komponen`) REFERENCES `komponen` (`id_komponen`);

--
-- Constraints for table `supplierbarang`
--
ALTER TABLE `supplierbarang`
  ADD CONSTRAINT `supplierbarang_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supplierbarang_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `komponen` (`id_komponen`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
