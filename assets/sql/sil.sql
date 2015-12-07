-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2015 at 02:34 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=184 ;

--
-- Dumping data for table `histori_penjualan`
--

INSERT INTO `histori_penjualan` (`id`, `tanggal`, `pembeli`, `komponen`, `jumlah_komponen`) VALUES
(2, '2015-11-18', 'Budi', 'K-2', 20),
(4, '2015-10-02', 'Andi', 'K-5', 1),
(33, '2013-10-20', 'pt a', 'K-1', 80),
(34, '2013-10-20', 'pt b', 'K-2', 40),
(35, '2013-10-20', 'pt c', 'K-3', 80),
(36, '2013-10-20', 'pt d', 'K-4', 5),
(37, '2013-10-20', 'pt e', 'K-5', 32),
(38, '2013-10-20', 'pt f', 'K-6', 150),
(39, '2013-11-20', 'pt a', 'K-1', 50),
(40, '2013-11-20', 'pt b', 'K-2', 10),
(41, '2013-11-20', 'pt c', 'K-3', 20),
(42, '2013-11-20', 'pt d', 'K-4', 4),
(43, '2013-11-20', 'pt e', 'K-5', 40),
(44, '2013-11-20', 'pt f', 'K-6', 100),
(45, '2014-01-09', 'pt y', 'K-1', 45),
(46, '2014-01-09', 'pt o ', 'K-2', 15),
(47, '2014-01-09', 'pt u', 'K-3', 40),
(48, '2014-01-09', 'pt 4', 'K-4', 3),
(49, '2014-01-09', 'pt e', 'K-5', 20),
(50, '2014-01-09', 'pt f', 'K-6', 80),
(51, '2014-02-09', 'pt a', 'K-1', 30),
(52, '2014-02-09', 'pt b', 'K-2', 20),
(53, '2014-02-09', 'pt c', 'K-3', 20),
(54, '2014-02-09', 'pt d', 'K-4', 1),
(55, '2014-02-09', 'pt e', 'K-5', 30),
(56, '2014-02-09', 'pt f', 'K-6', 70),
(57, '2014-03-09', 'pt a', 'K-1', 65),
(58, '2014-03-09', 'pt b', 'K-2', 25),
(59, '2014-03-09', 'pt c', 'K-3', 40),
(60, '2014-03-09', 'pt d', 'K-4', 2),
(61, '2014-03-09', 'pt e', 'K-5', 25),
(62, '2014-03-09', 'pt f', 'K-6', 90),
(63, '2014-04-09', 'pt a', 'K-1', 60),
(64, '2014-04-09', 'pt b', 'K-2', 15),
(65, '2014-04-09', 'pt c', 'K-3', 65),
(66, '2014-04-09', 'pt d', 'K-4', 2),
(67, '2014-04-09', 'pt e', 'K-5', 40),
(68, '2014-04-09', 'pt f', 'K-6', 120),
(69, '2014-05-09', 'pt a', 'K-1', 80),
(70, '2014-05-09', 'pt b', 'K-2', 20),
(71, '2014-05-09', 'pt c', 'K-3', 70),
(72, '2014-05-09', 'pt d', 'K-4', 3),
(73, '2014-05-09', 'pt e', 'K-5', 20),
(74, '2014-05-09', 'pt f', 'K-6', 105),
(75, '2014-06-09', 'pt a', 'K-1', 45),
(76, '2014-06-09', 'pt b', 'K-2', 10),
(77, '2014-06-09', 'pt c', 'K-3', 50),
(78, '2014-06-09', 'pt d', 'K-4', 0),
(79, '2014-06-09', 'pt e', 'K-5', 35),
(80, '2014-06-09', 'pt f', 'K-6', 100),
(81, '2014-07-09', 'pt a', 'K-1', 100),
(82, '2014-07-09', 'pt b', 'K-2', 10),
(83, '2014-07-09', 'pt c', 'K-3', 55),
(84, '2014-07-09', 'pt d', 'K-4', 4),
(85, '2014-07-09', 'pt e', 'K-5', 40),
(86, '2014-07-09', 'pt f', 'K-6', 90),
(88, '2014-08-09', 'pt a', 'K-1', 80),
(89, '2014-08-10', 'pt b', 'K-2', 30),
(90, '2014-08-11', 'pt c', 'K-3', 40),
(91, '2014-08-12', 'pt a', 'K-4', 2),
(92, '2014-08-13', 'pt b', 'K-5', 20),
(93, '2014-08-14', 'pt c', 'K-6', 120),
(94, '2014-09-04', 'pt a', 'K-1', 70),
(95, '2014-09-05', 'pt b', 'K-2', 25),
(96, '2014-09-06', 'pt c', 'K-3', 70),
(97, '2014-09-07', 'pt a', 'K-4', 0),
(98, '2014-09-08', 'pt b', 'K-5', 20),
(99, '2014-09-09', 'pt c', 'K-6', 130),
(100, '2014-10-04', 'pt a', 'K-1', 110),
(101, '2014-10-05', 'pt b', 'K-2', 20),
(102, '2014-10-06', 'pt c', 'K-3', 50),
(103, '2014-10-07', 'pt a', 'K-4', 1),
(104, '2014-10-08', 'pt b', 'K-5', 10),
(105, '2014-10-09', 'pt c', 'K-6', 110),
(106, '2014-11-04', 'pt a', 'K-1', 90),
(107, '2014-11-05', 'pt b', 'K-2', 40),
(108, '2014-11-06', 'pt c', 'K-3', 120),
(109, '2014-11-07', 'pt a', 'K-4', 3),
(110, '2014-11-08', 'pt b', 'K-5', 40),
(111, '2014-11-09', 'pt c', 'K-6', 90),
(112, '2014-12-04', 'pt a', 'K-1', 120),
(113, '2014-12-05', 'pt b', 'K-2', 60),
(114, '2014-12-06', 'pt c', 'K-3', 110),
(115, '2014-12-07', 'pt a', 'K-4', 5),
(116, '2014-12-08', 'pt b', 'K-5', 35),
(117, '2014-12-09', 'pt c', 'K-6', 150),
(118, '2015-01-04', 'pt a', 'K-1', 130),
(119, '2015-01-05', 'pt b', 'K-2', 60),
(120, '2015-01-06', 'pt c', 'K-3', 90),
(121, '2015-01-07', 'pt a', 'K-4', 2),
(122, '2015-01-08', 'pt b', 'K-5', 40),
(123, '2015-01-09', 'pt c', 'K-6', 100),
(124, '2015-02-04', 'pt a', 'K-1', 110),
(125, '2015-02-05', 'pt b', 'K-2', 50),
(126, '2015-02-06', 'pt c', 'K-3', 110),
(127, '2015-02-07', 'pt a', 'K-4', 0),
(128, '2015-02-08', 'pt b', 'K-5', 40),
(129, '2015-02-09', 'pt c', 'K-6', 120),
(130, '2015-03-04', 'pt a', 'K-1', 150),
(131, '2015-03-05', 'pt b', 'K-2', 75),
(132, '2015-03-06', 'pt c', 'K-3', 100),
(133, '2015-03-07', 'pt a', 'K-4', 0),
(134, '2015-03-08', 'pt b', 'K-5', 45),
(135, '2015-03-09', 'pt c', 'K-6', 110),
(136, '2015-04-06', 'pt a', 'K-1', 70),
(137, '2015-04-07', 'pt b', 'K-2', 60),
(138, '2015-04-08', 'pt c', 'K-3', 90),
(139, '2015-04-09', 'pt a', 'K-4', 4),
(140, '2015-04-10', 'pt b', 'K-5', 30),
(141, '2015-04-11', 'pt c', 'K-6', 120),
(142, '2015-05-02', 'pt a', 'K-1', 80),
(143, '2015-05-03', 'pt b', 'K-2', 40),
(144, '2015-05-04', 'pt c', 'K-3', 80),
(145, '2015-05-05', 'pt a', 'K-4', 5),
(146, '2015-05-06', 'pt b', 'K-5', 35),
(147, '2015-05-07', 'pt c', 'K-6', 125),
(148, '2015-06-08', 'pt a', 'K-1', 100),
(149, '2015-06-09', 'pt b', 'K-2', 30),
(150, '2015-06-10', 'pt c', 'K-3', 120),
(151, '2015-06-11', 'pt a', 'K-4', 3),
(152, '2015-06-12', 'pt b', 'K-5', 45),
(153, '2015-06-13', 'pt c', 'K-6', 130),
(154, '2015-07-14', 'pt a', 'K-1', 120),
(155, '2015-07-15', 'pt b', 'K-2', 80),
(156, '2015-07-16', 'pt c', 'K-3', 110),
(157, '2015-07-17', 'pt a', 'K-4', 4),
(158, '2015-07-18', 'pt b', 'K-5', 20),
(159, '2015-07-19', 'pt c', 'K-6', 140),
(160, '2015-08-02', 'pt a', 'K-1', 140),
(161, '2015-08-03', 'pt b', 'K-2', 60),
(162, '2015-08-04', 'pt c', 'K-3', 110),
(163, '2015-08-05', 'pt a', 'K-4', 4),
(164, '2015-08-06', 'pt b', 'K-5', 40),
(165, '2015-08-07', 'pt c', 'K-6', 135),
(166, '2015-09-08', 'pt a', 'K-1', 70),
(167, '2015-09-09', 'pt b', 'K-2', 70),
(168, '2015-09-10', 'pt c', 'K-3', 90),
(169, '2015-09-11', 'pt a', 'K-4', 3),
(170, '2015-09-12', 'pt b', 'K-5', 35),
(171, '2015-09-13', 'pt c', 'K-6', 120),
(172, '2015-10-14', 'pt a', 'K-1', 80),
(173, '2015-10-15', 'pt b', 'K-2', 70),
(174, '2015-10-16', 'pt c', 'K-3', 70),
(175, '2015-10-17', 'pt a', 'K-4', 5),
(176, '2015-10-18', 'pt b', 'K-5', 45),
(177, '2015-10-19', 'pt c', 'K-6', 140),
(178, '2015-11-20', 'pt a', 'K-1', 100),
(179, '2015-11-21', 'pt b', 'K-2', 40),
(180, '2015-11-22', 'pt c', 'K-3', 100),
(181, '2015-11-23', 'pt a', 'K-4', 6),
(182, '2015-11-24', 'pt b', 'K-5', 45),
(183, '2015-11-25', 'pt c', 'K-6', 150);

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
('K-2', 'Komponen 2', 1, 10),
('K-3', 'Komponen 3', 100, 10),
('K-4', 'Komponen 4', 217, 10000),
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
('S-1', 'Andiiiiiiiii', 'Jakarta', 6, 'Komponen 1, Komponen 2'),
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
