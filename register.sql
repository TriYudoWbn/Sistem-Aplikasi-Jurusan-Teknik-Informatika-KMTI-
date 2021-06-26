-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 04:23 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(10) NOT NULL,
  `password` int(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `password`, `status`) VALUES
('admin', 202, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif'),
('admin', 854, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `nim` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `minat` varchar(20) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `jekel` enum('L','P') DEFAULT NULL,
  `alasan` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `nilai` int(5) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
