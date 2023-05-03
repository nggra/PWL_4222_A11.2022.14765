-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 07:10 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `hrg` double NOT NULL,
  `jml` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `hrg`, `jml`, `keterangan`, `foto`) VALUES
(1, 'kaktus', 1000, 10, 'tajam berduri', 'kaktus.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `keterangan`, `foto`) VALUES
(7, 'mayra', 'sayang', 'kebab.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tborder`
--

CREATE TABLE `tborder` (
  `id` int(10) NOT NULL,
  `idmember` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `jenisbyr` varchar(20) DEFAULT NULL,
  `bank` varchar(40) DEFAULT NULL,
  `norek` varchar(40) DEFAULT NULL,
  `biayakirim` double DEFAULT NULL,
  `pembelian` double DEFAULT NULL,
  `totalbyr` double DEFAULT NULL,
  `ekspedisi` varchar(40) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tborder_detail`
--

CREATE TABLE `tborder_detail` (
  `idorder` int(11) NOT NULL,
  `idbarang` int(11) DEFAULT NULL,
  `jml` float DEFAULT NULL,
  `hrg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `foto`) VALUES
(4, 'admin3', '81dc9bdb52d04dc20036dbd8313ed055', NULL),
(5, 'aheng', '27b8549af995c04715472f602aac2d77', NULL),
(6, 'sua3', '57cd0970f3df427035f2ff3790639fe1', NULL),
(7, 'nunu', 'nunu', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tborder`
--
ALTER TABLE `tborder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tborder_detail`
--
ALTER TABLE `tborder_detail`
  ADD PRIMARY KEY (`idorder`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tborder`
--
ALTER TABLE `tborder`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tborder_detail`
--
ALTER TABLE `tborder_detail`
  MODIFY `idorder` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
