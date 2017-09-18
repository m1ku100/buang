-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 02:15 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukang`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `vidio` varchar(255) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `foto`, `vidio`, `isi`) VALUES
(127, 'ilham puji saputra', NULL, NULL, 'bagikan saja'),
(128, 'ilham puji saputra', NULL, NULL, ''),
(129, 'ilham puji saputra', NULL, NULL, 'is magic'),
(130, 'Fiqy Ainuzzaqy', NULL, NULL, 'sasa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `prodi` varchar(40) NOT NULL,
  `alamat_asal` varchar(40) NOT NULL,
  `alamat_sby` varchar(40) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama`, `prodi`, `alamat_asal`, `alamat_sby`, `no_telp`, `foto`, `password`) VALUES
('15050623011', 'Ferdana Rizky M', 'D3 MI', 'Perum. Candi, Nganjuk', 'Ketintang Baru 17', '085645286833', 'ferdana.jpg', ''),
('15050623012', 'Derry Ajeng Saraswati', 'D3 MI', 'Perum. Candi, Nganjuk', 'Ketintang Baru 17', '085645286833', 'derry.jpg', '123456'),
('15050974003', 'Alvin Rachmadani', 'S1 PTI', 'Perum. Candi, Nganjuk', 'Ketintang Baru 17', '085645286833', 'alvin.jpg', ''),
('15050974004', 'Mohammad Nur Khakiki', 'S1 PTI', 'Perum. Candi, Nganjuk', 'Ketintang Baru 17', '085645286833', 'kiki.jpg', ''),
('15051204001', 'Farikhatur Ro\'isa', 'S1 TI', 'Perum. Candi, Nganjuk', 'Ketintang Baru 17', '085645286833', 'farikha.jpg', ''),
('15051204002', 'Diaz Ardian Alvianto', 'S1 TI', 'Perum. Candi, Nganjuk', 'Ketintang Baru 17', '085645286833', 'diaz.jpg', ''),
('15051204003', 'Mifta Dwi Rahmawati', 'S1 TI', 'Perum. Candi, Nganjuk', 'Ketintang Baru 17', '085645286833', 'mifta.jpg', ''),
('15051204004', 'Fiqqi Zanuar Prakoso', 'S1 TI', 'Perum. Candi, Nganjuk', 'Ketintang Baru 17', '085645286833', 'fiqqi.jpg', ''),
('15051204005', 'Lilik Asih I.', 'S1 TI', 'Perum. Candi, Nganjuk', 'Ketintang Baru 17', '085645286833', 'lilik.jpg', ''),
('15051214002', 'Rahma Melati Sivana', 'S1 SI', 'Perum. Candi, Nganjuk', 'Ketintang Baru 17', '085645286833', 'rahma.jpg', ''),
('15051214003', 'Diah Widyaningsih', 'S1 SI', 'Perum. Candi, Nganjuk', 'Ketintang Baru 17', '085645286833', 'diah.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat_asal` text NOT NULL,
  `alamat_tinggal` text NOT NULL,
  `foto` varchar(45) NOT NULL,
  `notelp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nim`, `nama`, `prodi`, `email`, `password`, `alamat_asal`, `alamat_tinggal`, `foto`, `notelp`) VALUES
(1, '15050623027', 'ilham puji saputra', 'D3 Manajemen Informatika', 'email.email@email.com', '123456', 'jauh', 'dekat', '', ''),
(2, '123', 'saya saya', '', 'email.100@email.com', '123456', '', '', '', ''),
(3, '1232123', 'jkjksdsdjk', '', 'e@g.vom', '111', '', '', '', ''),
(4, '12323', 'dfs', '', 'e@g.vsom', 'asdasd', '', '', '', ''),
(5, 'ewrwer', 'werwer', '', 'ewr@gh.mo', 'asdasd', '', '', '', ''),
(6, '4654', 'llasdj', '', 'l@gsm.om', '451236', '', '', '', ''),
(7, 'qwe', 'qweqwe', 'S1 Sistem Informasi', 'sd@as.fgh', 'asasdasd', '', '', '', ''),
(8, '15050623012', 'Derry Ajeng Saraswati', 'D3 Manajemen Informatika', 'Derrysaraswati@mhs.unesa.ac.id', 'a1s2d3f4g5', '', '', '', ''),
(9, '15050623016', 'Fiqy Ainuzzaqy', 'D3 Manajemen Informatika', 'fiqy@mhs.unesa.ac.id', '15050623016', '', '', '', ''),
(10, '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
