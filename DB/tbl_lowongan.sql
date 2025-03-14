-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 25 Feb 2025 pada 04.19
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
-- Struktur dari tabel `tbl_lowongan`
--

CREATE TABLE `tbl_lowongan` (
  `id_lowongan` int NOT NULL,
  `nama_lowongan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `divisi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `wilayah` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_lowongan`
--

INSERT INTO `tbl_lowongan` (`id_lowongan`, `nama_lowongan`, `divisi`, `wilayah`, `kategori`, `tgl_awal`, `tgl_akhir`, `deskripsi`, `status`) VALUES
(2, 'Staff IT Mobile Programming (Fluter)', '', 'Yogyakarta', 'magang', '2024-01-15', '2024-03-31', '<p>Kualifikasi :</p><p>- Laki-laki/Perempuan minimal D3 Teknik Informatika, Ilmu Komputer atau Sejenisnya</p><p>- Menguasai SDK Flutter &amp; Dart</p><p>- Mampu dan terbiasa menggunakan Git</p><p>- Memahami cara kerja API dan Mampu mengintegrasikannya</p><p>- Mampu bekerja dengan tim maupun individu</p><p>- Memahami react.js lebih disukai</p><p>- Freshgraduate dipersilahkan melamar</p><p>- Penempatan&nbsp;Yogyakarta/Sleman</p>', ''),
(3, 'Packing Development', '', 'Yogyakarta', 'profesional', '2024-01-15', '2024-03-14', '<p>Kualifikasi :</p><ul><li>Laki-Laki Usia maksimal 35 Tahun</li><li>Berpengalaman dalam Pengembangan Kemasan selama 1 tahun.</li><li>Semua Jurusan Minimal SMK/SMA. (SMK Jurusan Teknik Kemasan sangat diminati).</li><li>Menguasai program adobe ilustrasi (AI) / Corel draw/ photoshop.</li><li>Memiliki keinginan tahuannya tinggi.</li><li>Mempunyai pengalaman terkait research.</li><li>Memahami spesifikasi / jenis-jenis packaging.</li></ul><p>Job : mendesain kemasan dari konsep hingga ke percetakan, melakukan pengembangan kemasan, bersedia untuk melakukan perjalanan dinas ke luar kota) jika diperlukan, melakukan trial di dalam produksi terkait kemasan.</p>', ''),
(5, 'Market Researcher/Market Researcher Analist', '', 'Yogyakarta', 'profesional', '2024-01-15', '2024-02-29', '<ul><li>Laki-laki Usia maksimal 35 Tahun ( Perempuan selama bersedia melakukan perjalanan dinas yang padat : ok)</li><li>Memiliki latar belakang pendidikan ekonomi, bisnis, komunikasi atau manajemen lebih diutamakan</li><li>Menyukai dan mampu melakukan penelitian (konsep, metode, pengumpulan data, analisis data, reporting, dan rekomendasi)</li><li>Memiliki rasa ingin tau yang tinggi</li><li>Memiliki ketertarikan mengenai trend minuman atau pangan olahan terkini (rasa, kemasan, dsb)</li><li>Memiliki kemampuan komunikasi yang baik</li><li>Bersedia melakukan perjalanan dinas<br> </li></ul><p>Jobdesc : Bertanggung jawab mempelajari kondisi pasar, menganalisis kompetitor, dan mempelajari perilaku konsumen dengan tujuan untuk penjualan produk</p><p><br> </p><p><br> </p><p><br> </p>', ''),
(6, 'Team Leader SPG', '', 'Yogyakarta', 'profesional', '2024-01-15', '2024-02-29', '<ul><li>Diutamakan Wanita mak 35 Tahun Memiliki kemampuan komunikasi yang baik.</li><li>Memiliki keterampilan interpersonal yang kuat. Maintenance produk dan outlet yang dicover. </li><li>Mampu menjadi decision maker dalam timnya. </li><li>Inisiatif tinggi dan suka terhadap tantangan. </li><li>Mampu berfikir kritis dan kreatif dalam mencapai target. </li><li>Memiliki keberanian dan ketegasan terhadap anggota tim. </li><li>Memiliki pengalaman sebagai pemimpin tim atau posisi sejenis. </li><li>Memiliki keterampilan komputer yang baik, terutama Ms. Excel. </li><li>Memiliki pengtahuan yagng luas tentang manajement strategi di tempat kerja.</li><li>Siap perjalanan dinas luar kota.</li></ul>', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  MODIFY `id_lowongan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
