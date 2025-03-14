-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 21 Feb 2025 pada 06.29
-- Versi server: 8.0.30
-- Versi PHP: 7.4.33

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
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int NOT NULL,
  `username` varchar(128) NOT NULL COMMENT 'login username',
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `pelamar_id` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `roleId` tinyint NOT NULL,
  `hash_key` varchar(255) DEFAULT NULL,
  `hash_expiry` varchar(255) DEFAULT NULL,
  `createdBy` int NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `username`, `email`, `password`, `pelamar_id`, `roleId`, `hash_key`, `hash_expiry`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'superadmin', 'tricahyawbw@gmail.com', '$2y$10$gJa8Tzy.L7vFpsquEmXDhecVMIEE8rXowlS1LjNlPgVXfafziWTb6', '1', 1, NULL, NULL, 1, '2024-12-18 02:26:08', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=344;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
