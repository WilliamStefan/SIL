-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2015 at 08:51 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sil`
--

-- --------------------------------------------------------

--
-- Table structure for table `histori_penjualan`
--

CREATE TABLE IF NOT EXISTS `histori_penjualan` (
`id` int(6) NOT NULL,
  `tanggal` date NOT NULL,
  `pembeli` varchar(100) NOT NULL,
  `komponen` varchar(100) NOT NULL,
  `jumlah_komponen` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `histori_penjualan`
--

INSERT INTO `histori_penjualan` (`id`, `tanggal`, `pembeli`, `komponen`, `jumlah_komponen`, `harga`) VALUES
(1, '2015-11-25', 'Budi', 'K-1', 100, 1000000),
(2, '2015-11-18', 'Budi', 'K-1', 20, 11500);

-- --------------------------------------------------------

--
-- Table structure for table `komponen`
--

CREATE TABLE IF NOT EXISTS `komponen` (
  `id` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `stok_tersedia` int(11) NOT NULL,
  `stok_minimal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komponen`
--

INSERT INTO `komponen` (`id`, `nama`, `stok_tersedia`, `stok_minimal`) VALUES
('K-1', 'Komponen 1', 100, 10),
('K-2', 'Komponen 2', 100, 10),
('K-3', 'Komponen 3', 100, 10),
('K-4', 'Komponen 4', 2147483647, 10000),
('K-5', 'Komponen 5', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `waktu_pengiriman` int(11) NOT NULL,
  `komponen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `nama`, `lokasi`, `waktu_pengiriman`, `komponen`) VALUES
('S-1', 'Andi', 'Bandung', 1, 'Komponen 1, Komponen 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `histori_penjualan`
--
ALTER TABLE `histori_penjualan`
 ADD PRIMARY KEY (`id`), ADD KEY `komponen` (`komponen`);

--
-- Indexes for table `komponen`
--
ALTER TABLE `komponen`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `histori_penjualan`
--
ALTER TABLE `histori_penjualan`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `histori_penjualan`
--
ALTER TABLE `histori_penjualan`
ADD CONSTRAINT `histori_penjualan_ibfk_1` FOREIGN KEY (`komponen`) REFERENCES `komponen` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
