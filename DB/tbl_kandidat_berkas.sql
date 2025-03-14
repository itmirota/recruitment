-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2025 at 08:11 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `susukita_recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kandidat_berkas`
--

CREATE TABLE `tbl_kandidat_berkas` (
  `id_berkas` text NOT NULL,
  `kandidat_id` text CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `identitas` text NOT NULL,
  `cv` text NOT NULL,
  `ijazah` text NOT NULL,
  `doc_pendukung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tbl_kandidat_berkas`
--

INSERT INTO `tbl_kandidat_berkas` (`id_berkas`, `kandidat_id`, `identitas`, `cv`, `ijazah`, `doc_pendukung`) VALUES
('', '10', 'Form_Perawatan_dan_Pengecekan_Perangkat4.pdf', '', '', ''),
('', '10', '4.JPG', '1.JPG', '2.JPG', '3.JPG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
