-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2019 at 10:31 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbbarang`
--

CREATE TABLE `tbbarang` (
  `kodebarang` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `hargabeli` double NOT NULL,
  `hargajual` double NOT NULL,
  `hargareseller` double NOT NULL,
  `kode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbbarang`
--

INSERT INTO `tbbarang` (`kodebarang`, `nama`, `type`, `satuan`, `jumlah`, `hargabeli`, `hargajual`, `hargareseller`, `kode`) VALUES
(1, 'Coba', 'Acc', 'pcs', 100, 1000, 2000, 1500, ''),
(2, 'xiaomi', 'HP', 'pcs', 1, 3250000, 3300000, 3280000, '08123S734DFHA');

-- --------------------------------------------------------

--
-- Table structure for table `tbbeli`
--

CREATE TABLE `tbbeli` (
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

CREATE TABLE `tbbelidetil` (
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

CREATE TABLE `tbjual` (
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

CREATE TABLE `tbjualdetil` (
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

CREATE TABLE `tbpelanggan` (
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

CREATE TABLE `tbsales` (
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

CREATE TABLE `tbsupplier` (
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

CREATE TABLE `tbuser` (
  `kodeuser` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`kodeuser`, `username`, `pass`, `status`, `alamat`, `telp`) VALUES
(1, 'admin', 'YWRtaW4xMjM=', 'admin', 'admin', '08999999206'),
(2, 'admin123', 'YWRtaW4xMjM=', 'user', 'admin', '08999999206');

-- --------------------------------------------------------

--
-- Table structure for table `tempbeli`
--

CREATE TABLE `tempbeli` (
  `notempbeli` int(5) NOT NULL,
  `nobeli` varchar(10) NOT NULL,
  `kodebarang` varchar(12) NOT NULL,
  `jlh` double NOT NULL,
  `harga` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempbeli`
--

INSERT INTO `tempbeli` (`notempbeli`, `nobeli`, `kodebarang`, `jlh`, `harga`, `total`) VALUES
(1, 'B-2015-1', 'c', 12, 15000, 180000);

-- --------------------------------------------------------

--
-- Table structure for table `tempjual`
--

CREATE TABLE `tempjual` (
  `notempjual` int(5) NOT NULL,
  `nojual` varchar(10) NOT NULL,
  `kodebarang` varchar(12) NOT NULL,
  `jlh` double NOT NULL,
  `harga` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempjual`
--

INSERT INTO `tempjual` (`notempjual`, `nojual`, `kodebarang`, `jlh`, `harga`, `total`) VALUES
(3, 'B-1', '1', 3, 2000, 6000),
(4, 'B-1', '', 0, 0, 0),
(5, 'B-1', '2', 1, 3300000, 3300000);

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
-- AUTO_INCREMENT for table `tbbarang`
--
ALTER TABLE `tbbarang`
  MODIFY `kodebarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `kodeuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tempbeli`
--
ALTER TABLE `tempbeli`
  MODIFY `notempbeli` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tempjual`
--
ALTER TABLE `tempjual`
  MODIFY `notempjual` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
