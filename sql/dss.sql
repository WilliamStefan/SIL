-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2015 at 01:29 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dss`
--

-- --------------------------------------------------------

--
-- Table structure for table `histor_penjualan`
--

CREATE TABLE IF NOT EXISTS `histor_penjualan` (
  `id` int(6) NOT NULL,
  `tanggal` date NOT NULL,
  `pembeli` varchar(64) NOT NULL,
  `komponen` varchar(5) NOT NULL,
  `jumlah_komponen` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komponen`
--

CREATE TABLE IF NOT EXISTS `komponen` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `stok_tersedia` int(11) NOT NULL,
  `stok_minimal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `lokasi` int(11) NOT NULL,
  `waktu_pengiriman` int(11) NOT NULL,
  `komponen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `histor_penjualan`
--
ALTER TABLE `histor_penjualan`
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
-- AUTO_INCREMENT for table `histor_penjualan`
--
ALTER TABLE `histor_penjualan`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `histor_penjualan`
--
ALTER TABLE `histor_penjualan`
ADD CONSTRAINT `histor_penjualan_ibfk_1` FOREIGN KEY (`komponen`) REFERENCES `komponen` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
