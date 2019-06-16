-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2016 at 11:31 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `transaksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbbarang`
--

CREATE TABLE IF NOT EXISTS `tbbarang` (
  `kodebarang` varchar(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `jlhstok` double NOT NULL,
  `hargabeli` double NOT NULL,
  `hargajual` double NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbbarang`
--

INSERT INTO `tbbarang` (`kodebarang`, `nama`, `satuan`, `jlhstok`, `hargabeli`, `hargajual`, `link`) VALUES
('a', 'coklat', 'kotak', 95, 8000, 10000, 'img/coklat.jpg'),
('b', 'vanilla', 'kotak', 94, 7000, 8000, 'img/vanilla.jpg'),
('c', 'durian', 'kotak', 93, 10000, 15000, 'img/durian.jpg'),
('d', 'keju', 'kotak', 92, 9000, 13000, 'img/keju.jpg'),
('e', 'starberry', 'kotak', 93, 8000, 15000, 'img/strawberry.jpg'),
('f', 'pisang', 'kotak', 93, 15000, 16000, 'img/pisang.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbbeli`
--

CREATE TABLE IF NOT EXISTS `tbbeli` (
  `nobeli` varchar(10) NOT NULL,
  `tgl` date NOT NULL,
  `kodesup` varchar(10) NOT NULL,
  `kodeuser` varchar(10) NOT NULL,
  `subtotal` double NOT NULL,
  `disc` double NOT NULL,
  `pajak` double NOT NULL,
  `grandtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbbelidetil`
--

CREATE TABLE IF NOT EXISTS `tbbelidetil` (
  `nobeli` varchar(10) NOT NULL,
  `kodebarang` varchar(12) NOT NULL,
  `jlh` double NOT NULL,
  `harga` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbjual`
--

CREATE TABLE IF NOT EXISTS `tbjual` (
  `nojual` varchar(10) NOT NULL,
  `tgl` date NOT NULL,
  `kodepel` varchar(10) NOT NULL,
  `kodeuser` varchar(10) NOT NULL,
  `kodesales` varchar(7) NOT NULL,
  `subtotal` double NOT NULL,
  `disc` double NOT NULL,
  `pajak` double NOT NULL,
  `grandtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbjualdetil`
--

CREATE TABLE IF NOT EXISTS `tbjualdetil` (
  `nojual` varchar(10) NOT NULL,
  `kodebarang` varchar(12) NOT NULL,
  `jlh` double NOT NULL,
  `harga` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbpelanggan`
--

CREATE TABLE IF NOT EXISTS `tbpelanggan` (
  `kodepel` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpelanggan`
--

INSERT INTO `tbpelanggan` (`kodepel`, `nama`, `alamat`, `telp`) VALUES
('1', 'toni', 'nusa indah', '089392929'),
('2', 'tina', 'gajah mada', '0899553232');

-- --------------------------------------------------------

--
-- Table structure for table `tbsales`
--

CREATE TABLE IF NOT EXISTS `tbsales` (
  `kodesales` varchar(7) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsales`
--

INSERT INTO `tbsales` (`kodesales`, `nama`, `alamat`, `telp`) VALUES
('1', 'aju', 'jln nusa indah', '0833332121'),
('2', 'ajun', 'jln karyabaru', '08332131');

-- --------------------------------------------------------

--
-- Table structure for table `tbsupplier`
--

CREATE TABLE IF NOT EXISTS `tbsupplier` (
  `kodesup` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsupplier`
--

INSERT INTO `tbsupplier` (`kodesup`, `nama`, `alamat`, `telp`) VALUES
('1', 'guara', 'gambut', '015653433'),
('2', 'gon gon', 'jln.kemerdekaan', '0896666676666');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE IF NOT EXISTS `tbuser` (
  `kodeuser` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`kodeuser`, `nama`, `pass`) VALUES
('1', 'test', 'coba'),
('2', 'test1', 'test1'),
('3', 'test2', 'test2'),
('4', 'qwerty', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `tempbeli`
--

CREATE TABLE IF NOT EXISTS `tempbeli` (
`notempbeli` int(5) NOT NULL,
  `nobeli` varchar(10) NOT NULL,
  `kodebarang` varchar(12) NOT NULL,
  `jlh` double NOT NULL,
  `harga` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempbeli`
--

INSERT INTO `tempbeli` (`notempbeli`, `nobeli`, `kodebarang`, `jlh`, `harga`, `total`) VALUES
(1, 'B-2015-1', 'c', 12, 15000, 180000);

-- --------------------------------------------------------

--
-- Table structure for table `tempjual`
--

CREATE TABLE IF NOT EXISTS `tempjual` (
`notempjual` int(5) NOT NULL,
  `nojual` varchar(10) NOT NULL,
  `kodebarang` varchar(12) NOT NULL,
  `jlh` double NOT NULL,
  `harga` double NOT NULL,
  `total` double NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbbarang`
--
ALTER TABLE `tbbarang`
 ADD PRIMARY KEY (`kodebarang`);

--
-- Indexes for table `tbjual`
--
ALTER TABLE `tbjual`
 ADD PRIMARY KEY (`nojual`);

--
-- Indexes for table `tbpelanggan`
--
ALTER TABLE `tbpelanggan`
 ADD PRIMARY KEY (`kodepel`);

--
-- Indexes for table `tbsales`
--
ALTER TABLE `tbsales`
 ADD PRIMARY KEY (`kodesales`);

--
-- Indexes for table `tbsupplier`
--
ALTER TABLE `tbsupplier`
 ADD PRIMARY KEY (`kodesup`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
 ADD PRIMARY KEY (`kodeuser`);

--
-- Indexes for table `tempbeli`
--
ALTER TABLE `tempbeli`
 ADD PRIMARY KEY (`notempbeli`);

--
-- Indexes for table `tempjual`
--
ALTER TABLE `tempjual`
 ADD PRIMARY KEY (`notempjual`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tempbeli`
--
ALTER TABLE `tempbeli`
MODIFY `notempbeli` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tempjual`
--
ALTER TABLE `tempjual`
MODIFY `notempjual` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
