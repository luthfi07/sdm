-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 07:37 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata_artis`
--

CREATE TABLE `biodata_artis` (
  `uuid` int(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `alamat_tinggal` varchar(255) DEFAULT NULL,
  `id_kecamatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `biodata_artis`
--

INSERT INTO `biodata_artis` (`uuid`, `nama`, `tempat_lahir`, `tanggal_lahir`, `foto`, `alamat_tinggal`, `id_kecamatan`) VALUES
(1, 'ateng', 'pekanbaru', '2021-03-02', 'kkkk', 'jl.nangka', '14'),
(2, 'aa', 'aa', '2021-03-03', 'ada', 'aa', NULL),
(3, 'sfwe', 'aawda', '2021-03-04', 'wda', 'wdaw', NULL),
(4, 'aa', 'aa', '2021-03-19', 'wd', 'wdad', '110116'),
(5, 'aaa', 'aaa', '2021-03-11', 'aaa', 'aaa', '110114');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata_artis`
--
ALTER TABLE `biodata_artis`
  ADD PRIMARY KEY (`uuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata_artis`
--
ALTER TABLE `biodata_artis`
  MODIFY `uuid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
