-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 08:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbabsen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblabsen`
--

CREATE TABLE `tblabsen` (
  `idabsen` int(50) NOT NULL,
  `tglabsen` date DEFAULT NULL,
  `absenmasuk` time(6) DEFAULT NULL,
  `absenkeluar` time(6) DEFAULT NULL,
  `iddosen` int(50) DEFAULT NULL,
  `sesi` int(50) DEFAULT NULL,
  `kelassesi` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbldosen`
--

CREATE TABLE `tbldosen` (
  `iddosen` int(50) NOT NULL,
  `nidn` int(50) DEFAULT NULL,
  `nip` int(50) DEFAULT NULL,
  `namadosen` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `idprodi` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbljadwal`
--

CREATE TABLE `tbljadwal` (
  `id` int(50) NOT NULL,
  `iddosen` int(50) DEFAULT NULL,
  `hari` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `thnakademik` int(50) NOT NULL,
  `semester` int(50) DEFAULT NULL,
  `idmk` int(50) DEFAULT NULL,
  `sesi` int(50) DEFAULT NULL,
  `jammasuk` time(6) DEFAULT NULL,
  `jamkeluar` time(6) DEFAULT NULL,
  `kelas` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ruang` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `kelassesi` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblmkkuliah`
--

CREATE TABLE `tblmkkuliah` (
  `idmk` int(50) NOT NULL,
  `namamk` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sks` int(50) DEFAULT NULL,
  `semester` int(50) DEFAULT NULL,
  `idprodi` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblprodi`
--

CREATE TABLE `tblprodi` (
  `idprodi` int(50) NOT NULL,
  `namaprodi` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblabsen`
--
ALTER TABLE `tblabsen`
  ADD PRIMARY KEY (`idabsen`),
  ADD KEY `absenmasuk` (`absenmasuk`),
  ADD KEY `absenkeluar` (`absenkeluar`),
  ADD KEY `iddosen` (`iddosen`),
  ADD KEY `sesi` (`sesi`),
  ADD KEY `kelassesi` (`kelassesi`);

--
-- Indexes for table `tbldosen`
--
ALTER TABLE `tbldosen`
  ADD PRIMARY KEY (`iddosen`),
  ADD KEY `nidn` (`nidn`),
  ADD KEY `nip` (`nip`),
  ADD KEY `namadosen` (`namadosen`),
  ADD KEY `idprodi` (`idprodi`);

--
-- Indexes for table `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddosen` (`iddosen`),
  ADD KEY `hari` (`hari`),
  ADD KEY `thnakademik` (`thnakademik`),
  ADD KEY `semester` (`semester`),
  ADD KEY `idmk` (`idmk`),
  ADD KEY `sesi` (`sesi`),
  ADD KEY `jammasuk` (`jammasuk`),
  ADD KEY `jamkeluar` (`jamkeluar`),
  ADD KEY `kelas` (`kelas`),
  ADD KEY `ruang` (`ruang`),
  ADD KEY `status` (`status`),
  ADD KEY `kelassesi` (`kelassesi`);

--
-- Indexes for table `tblmkkuliah`
--
ALTER TABLE `tblmkkuliah`
  ADD PRIMARY KEY (`idmk`),
  ADD KEY `namamk` (`namamk`),
  ADD KEY `sks` (`sks`),
  ADD KEY `semester` (`semester`),
  ADD KEY `idprodi` (`idprodi`);

--
-- Indexes for table `tblprodi`
--
ALTER TABLE `tblprodi`
  ADD PRIMARY KEY (`idprodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblprodi`
--
ALTER TABLE `tblprodi`
  MODIFY `idprodi` int(50) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbldosen`
--
ALTER TABLE `tbldosen`
  ADD CONSTRAINT `tbldosen_ibfk_1` FOREIGN KEY (`idprodi`) REFERENCES `tblprodi` (`idprodi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD CONSTRAINT `tbljadwal_ibfk_1` FOREIGN KEY (`iddosen`) REFERENCES `tbldosen` (`iddosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbljadwal_ibfk_2` FOREIGN KEY (`idmk`) REFERENCES `tblmkkuliah` (`idmk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblmkkuliah`
--
ALTER TABLE `tblmkkuliah`
  ADD CONSTRAINT `tblmkkuliah_ibfk_1` FOREIGN KEY (`idprodi`) REFERENCES `tblprodi` (`idprodi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
