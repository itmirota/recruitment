-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 14 Apr 2025 pada 04.53
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
-- Struktur dari tabel `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id_faq` int NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_faq`
--

INSERT INTO `tbl_faq` (`id_faq`, `pertanyaan`, `jawaban`) VALUES
(1, 'Siapa', 'jawaban');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kandidat`
--

CREATE TABLE `tbl_kandidat` (
  `id_kandidat` int NOT NULL,
  `nama_kandidat` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_panggilan` varchar(255) NOT NULL,
  `jenis_kelamin` char(2) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `golongan_darah` char(2) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `tinggi_berat_badan` varchar(50) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat_domisili` varchar(255) NOT NULL,
  `alamat_ktp` varchar(255) NOT NULL,
  `nomor_ktp` varchar(255) NOT NULL,
  `nomor_sim` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `kontak_darurat` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `info_lowongan` varchar(255) NOT NULL,
  `keterangan_lowongan` varchar(50) NOT NULL,
  `status_pernikahan` varchar(50) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `data_pasangan` text CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `data_anak` text NOT NULL,
  `hobi` text,
  `sakit_ringan` char(5) NOT NULL DEFAULT '',
  `riwayat_penyakit` varchar(255) NOT NULL DEFAULT '',
  `kecelakaan` char(5) NOT NULL DEFAULT '',
  `dampak_kecelakaan` varchar(255) NOT NULL DEFAULT '',
  `merokok` char(5) NOT NULL DEFAULT '',
  `alkoholik` char(5) NOT NULL DEFAULT '',
  `bekerja_shift` char(5) NOT NULL DEFAULT '',
  `luar_kota` char(5) NOT NULL DEFAULT '',
  `alasan` varchar(255) NOT NULL DEFAULT '',
  `tgl_bergabung` date DEFAULT NULL,
  `gaji_terakhir` int DEFAULT NULL,
  `gaji_diharapkan` int DEFAULT NULL,
  `pernyataan` char(5) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data untuk tabel `tbl_kandidat`
--

INSERT INTO `tbl_kandidat` (`id_kandidat`, `nama_kandidat`, `email`, `nama_panggilan`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `golongan_darah`, `tinggi_berat_badan`, `agama`, `alamat_domisili`, `alamat_ktp`, `nomor_ktp`, `nomor_sim`, `nomor_hp`, `kontak_darurat`, `info_lowongan`, `keterangan_lowongan`, `status_pernikahan`, `data_pasangan`, `data_anak`, `hobi`, `sakit_ringan`, `riwayat_penyakit`, `kecelakaan`, `dampak_kecelakaan`, `merokok`, `alkoholik`, `bekerja_shift`, `luar_kota`, `alasan`, `tgl_bergabung`, `gaji_terakhir`, `gaji_diharapkan`, `pernyataan`) VALUES
(10, 'tes', 'hajar@mirota.id', '', 'L', 'yogyakarta', '2025-03-13', 'AB', '', 'islam', '', '', '', '', '', '', 'Pilih...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, 0, ''),
(11, 'hajar', 'hajar@mirota.id', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, ''),
(12, 'hajar', 'hajar@mirota.id', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, ''),
(13, 'hajar', 'hajar@mirota.id', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, ''),
(14, 'user testing', 'user@user.com', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, ''),
(15, 'user tes nih', 'user@user.com', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, ''),
(16, 'Tri Cahya Wibawa', 'tricahyawbw@gmail.com', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kandidat_keluarga`
--

CREATE TABLE `tbl_kandidat_keluarga` (
  `id_keluarga` int NOT NULL,
  `kandidat_id` int NOT NULL,
  `nama_keluarga` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `hubungan_keluarga` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kandidat_keluarga`
--

INSERT INTO `tbl_kandidat_keluarga` (`id_keluarga`, `kandidat_id`, `nama_keluarga`, `hubungan_keluarga`, `no_hp`) VALUES
(1, 10, 'sudaryono', 'ayah', '087889'),
(2, 10, 'tes', 'ibu', '08993932779'),
(3, 10, '', '-- Pilih Hubungan --', ''),
(4, 10, '', '-- Pilih Hubungan --', ''),
(5, 10, '', '-- Pilih Hubungan --', ''),
(6, 10, 'tes', 'saudara', '08993932779'),
(7, 10, 'tes', 'saudara', '087889'),
(8, 10, '', '-- Pilih Hubungan --', ''),
(9, 10, '', '-- Pilih Hubungan --', ''),
(10, 10, '', '-- Pilih Hubungan --', ''),
(11, 10, '', '-- Pilih Hubungan --', ''),
(12, 10, '', '-- Pilih Hubungan --', ''),
(13, 10, '', '-- Pilih Hubungan --', ''),
(14, 10, '', '-- Pilih Hubungan --', ''),
(15, 10, '', '-- Pilih Hubungan --', ''),
(16, 10, '', '-- Pilih Hubungan --', ''),
(17, 10, '', '-- Pilih Hubungan --', ''),
(18, 10, '', '-- Pilih Hubungan --', ''),
(19, 10, '', '-- Pilih Hubungan --', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kandidat_pendidikan`
--

CREATE TABLE `tbl_kandidat_pendidikan` (
  `id_pendidikan` int NOT NULL,
  `kandidat_id` int NOT NULL,
  `nama_instansi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jenjang_pendidikan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jurusan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tahun_masuk` int NOT NULL,
  `tahun_lulus` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kandidat_pendidikan`
--

INSERT INTO `tbl_kandidat_pendidikan` (`id_pendidikan`, `kandidat_id`, `nama_instansi`, `jenjang_pendidikan`, `jurusan`, `tahun_masuk`, `tahun_lulus`) VALUES
(1, 10, '', 'SD', NULL, 2020, 2026),
(2, 10, '', '-- Pilih Jenjang Pendidikan --', NULL, 0, 0),
(3, 10, '', '-- Pilih Jenjang Pendidikan --', NULL, 0, 0),
(4, 10, '', '-- Pilih Jenjang Pendidikan --', NULL, 0, 0),
(5, 10, '', '-- Pilih Jenjang Pendidikan --', NULL, 0, 0),
(6, 10, '', '-- Pilih Jenjang Pendidikan --', NULL, 0, 0),
(7, 10, '', '-- Pilih Jenjang Pendidikan --', NULL, 0, 0),
(8, 10, '', '-- Pilih Jenjang Pendidikan --', NULL, 0, 0),
(9, 10, '', '-- Pilih Jenjang Pendidikan --', NULL, 0, 0),
(10, 10, '', '-- Pilih Jenjang Pendidikan --', NULL, 0, 0),
(11, 10, '', '-- Pilih Jenjang Pendidikan --', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kandidat_pengalamankerja`
--

CREATE TABLE `tbl_kandidat_pengalamankerja` (
  `id_pengalaman` int NOT NULL,
  `kandidat_id` int NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `divisi_bagian` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `nomor_referensi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kandidat_sertifikasi`
--

CREATE TABLE `tbl_kandidat_sertifikasi` (
  `id_sertifikasi` int NOT NULL,
  `kandidat_id` int NOT NULL,
  `judul_sertifikasi` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `lembaga_sertifikasi` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `tanggal_sertifikasi` date NOT NULL,
  `biaya_sertifikasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data untuk tabel `tbl_kandidat_sertifikasi`
--

INSERT INTO `tbl_kandidat_sertifikasi` (`id_sertifikasi`, `kandidat_id`, `judul_sertifikasi`, `lembaga_sertifikasi`, `tanggal_sertifikasi`, `biaya_sertifikasi`) VALUES
(1, 10, 'tes', 'tes', '2025-03-13', 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lowongan`
--

CREATE TABLE `tbl_lowongan` (
  `id_lowongan` int NOT NULL,
  `nama_lowongan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `divisi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pendidikan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
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

INSERT INTO `tbl_lowongan` (`id_lowongan`, `nama_lowongan`, `divisi`, `pendidikan`, `wilayah`, `kategori`, `tgl_awal`, `tgl_akhir`, `deskripsi`, `status`) VALUES
(2, 'Staff IT Mobile Programming (Fluter)', 'IT', 'D3/S1', 'Yogyakarta', 'magang', '2024-01-15', '2024-03-31', '<p>Kualifikasi :</p><p>- Laki-laki/Perempuan minimal D3 Teknik Informatika, Ilmu Komputer atau Sejenisnya</p><p>- Menguasai SDK Flutter &amp; Dart</p><p>- Mampu dan terbiasa menggunakan Git</p><p>- Memahami cara kerja API dan Mampu mengintegrasikannya</p><p>- Mampu bekerja dengan tim maupun individu</p><p>- Memahami react.js lebih disukai</p><p>- Freshgraduate dipersilahkan melamar</p><p>- Penempatan&nbsp;Yogyakarta/Sleman</p>', ''),
(3, 'Packing Development', 'Digital Marketing', 'SMK/SMA', 'Yogyakarta', 'profesional', '2024-01-15', '2024-03-14', '<p>Kualifikasi :</p><ul><li>Laki-Laki Usia maksimal 35 Tahun</li><li>Berpengalaman dalam Pengembangan Kemasan selama 1 tahun.</li><li>Semua Jurusan Minimal SMK/SMA. (SMK Jurusan Teknik Kemasan sangat diminati).</li><li>Menguasai program adobe ilustrasi (AI) / Corel draw/ photoshop.</li><li>Memiliki keinginan tahuannya tinggi.</li><li>Mempunyai pengalaman terkait research.</li><li>Memahami spesifikasi / jenis-jenis packaging.</li></ul><p>Job : mendesain kemasan dari konsep hingga ke percetakan, melakukan pengembangan kemasan, bersedia untuk melakukan perjalanan dinas ke luar kota) jika diperlukan, melakukan trial di dalam produksi terkait kemasan.</p>', ''),
(5, 'Market Researcher/Market Researcher Analist', 'MINA', 'S1', 'Yogyakarta', 'profesional', '2024-01-15', '2024-02-29', '<ul><li>Laki-laki Usia maksimal 35 Tahun ( Perempuan selama bersedia melakukan perjalanan dinas yang padat : ok)</li><li>Memiliki latar belakang pendidikan ekonomi, bisnis, komunikasi atau manajemen lebih diutamakan</li><li>Menyukai dan mampu melakukan penelitian (konsep, metode, pengumpulan data, analisis data, reporting, dan rekomendasi)</li><li>Memiliki rasa ingin tau yang tinggi</li><li>Memiliki ketertarikan mengenai trend minuman atau pangan olahan terkini (rasa, kemasan, dsb)</li><li>Memiliki kemampuan komunikasi yang baik</li><li>Bersedia melakukan perjalanan dinas<br> </li></ul><p>Jobdesc : Bertanggung jawab mempelajari kondisi pasar, menganalisis kompetitor, dan mempelajari perilaku konsumen dengan tujuan untuk penjualan produk</p><p><br> </p><p><br> </p><p><br> </p>', ''),
(6, 'Team Leader SPG', 'Commercial', 'S1', 'Yogyakarta', 'profesional', '2024-01-15', '2024-02-29', '<ul><li>Diutamakan Wanita mak 35 Tahun Memiliki kemampuan komunikasi yang baik.</li><li>Memiliki keterampilan interpersonal yang kuat. Maintenance produk dan outlet yang dicover. </li><li>Mampu menjadi decision maker dalam timnya. </li><li>Inisiatif tinggi dan suka terhadap tantangan. </li><li>Mampu berfikir kritis dan kreatif dalam mencapai target. </li><li>Memiliki keberanian dan ketegasan terhadap anggota tim. </li><li>Memiliki pengalaman sebagai pemimpin tim atau posisi sejenis. </li><li>Memiliki keterampilan komputer yang baik, terutama Ms. Excel. </li><li>Memiliki pengtahuan yagng luas tentang manajement strategi di tempat kerja.</li><li>Siap perjalanan dinas luar kota.</li></ul>', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_psikotes_hasil`
--

CREATE TABLE `tbl_psikotes_hasil` (
  `id` int NOT NULL,
  `ujian_id` int NOT NULL,
  `kandidat_id` int NOT NULL,
  `list_soal` longtext NOT NULL,
  `list_jawaban` longtext NOT NULL,
  `jml_benar` int NOT NULL,
  `nilai` decimal(10,2) NOT NULL,
  `nilai_bobot` decimal(10,2) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `tgl_selesai` datetime NOT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `tbl_psikotes_hasil`
--

INSERT INTO `tbl_psikotes_hasil` (`id`, `ujian_id`, `kandidat_id`, `list_soal`, `list_jawaban`, `jml_benar`, `nilai`, `nilai_bobot`, `tgl_mulai`, `tgl_selesai`, `status`) VALUES
(148, 22, 14, '90,91,92,93,94,95,96,97,98,99,202,203,204,205,206,207,208,209,210,211', '90::N,91::N,92::N,93::N,94::N,95::N,96::N,97::N,98::N,99::N,202::N,203::N,204::N,205::N,206::N,207::N,208::N,209::N,210::N,211::N', 0, 0.00, 100.00, '2025-04-08 15:32:14', '2025-04-08 15:33:14', 'N'),
(149, 23, 14, '100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,125,160', '100::N,101::N,102::N,103::N,104::N,105::N,106::N,107::N,108::N,109::N,110::N,111::N,112::N,113::N,114::N,115::N,116::N,117::N,118::N,119::N,125::N,160::N', 0, 0.00, 100.00, '2025-04-08 15:33:10', '2025-04-08 15:39:10', 'N'),
(150, 24, 14, '120,121,122,123,124,126,127,128,129,130,131,132,133,134,135,136,137,138,139', '120::N,121::N,122::N,123::N,124::N,126::N,127::N,128::N,129::N,130::N,131::N,132::N,133::N,134::N,135::N,136::N,137::N,138::N,139::N', 0, 0.00, 100.00, '2025-04-08 15:33:17', '2025-04-08 15:40:17', 'N'),
(151, 25, 14, '55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70', '55::N,56::N,57::N,58::N,59::N,60::N,61::N,62::N,63::N,64::N,65::N,66::N,67::N,68::N,69::N,70::N', 0, 0.00, 100.00, '2025-04-08 15:33:22', '2025-04-08 15:41:22', 'N'),
(152, 26, 14, '13,14,15,16,17,18,19,21,22,23,24,25,26,27,28,29,30,32,33,34', '13::N,14::N,15::N,16::N,17::N,18::N,19::N,21::N,22::N,23::N,24::N,25::N,26::N,27::N,28::N,29::N,30::N,32::N,33::N,34::N', 0, 0.00, 100.00, '2025-04-08 15:33:30', '2025-04-08 15:43:30', 'N'),
(153, 27, 14, '35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54', '35::N,36::N,37::N,38::N,39::N,40::N,41::N,42::N,43::N,44::N,45::N,46::N,47::N,48::N,49::N,50::N,51::N,52::N,53::N,54::N', 0, 0.00, 100.00, '2025-04-08 15:33:36', '2025-04-08 15:43:36', 'N'),
(154, 28, 14, '161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180', '161::N,162::N,163::N,164::N,165::N,166::N,167::N,168::N,169::N,170::N,171::N,172::N,173::N,174::N,175::N,176::N,177::N,178::N,179::N,180::N', 0, 0.00, 100.00, '2025-04-08 15:33:42', '2025-04-08 15:41:42', 'N'),
(155, 29, 14, '181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,197,198,199,200,201', '181::N,182::N,183::N,184::N,185::N,186::N,187::N,188::N,189::N,190::N,191::N,192::N,193::N,194::N,195::N,197::N,198::N,199::N,200::N,201::N', 0, 0.00, 100.00, '2025-04-08 15:33:50', '2025-04-08 15:42:50', 'N'),
(156, 31, 14, '219', '219::N', 0, 0.00, 100.00, '2025-04-08 15:33:57', '2025-04-08 15:36:57', 'N'),
(157, 32, 14, '140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159', '140::N,141::N,142::N,143::N,144::N,145::N,146::N,147::N,148::N,149::N,150::N,151::N,152::N,153::N,154::N,155::N,156::N,157::N,158::N,159::N', 0, 0.00, 100.00, '2025-04-08 15:34:09', '2025-04-08 15:40:09', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_psikotes_kategori`
--

CREATE TABLE `tbl_psikotes_kategori` (
  `id_kategoriPsikotes` int NOT NULL,
  `nama_kategoriPsikotes` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `slug` varchar(255) NOT NULL,
  `urutan_kategori` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `tbl_psikotes_kategori`
--

INSERT INTO `tbl_psikotes_kategori` (`id_kategoriPsikotes`, `nama_kategoriPsikotes`, `slug`, `urutan_kategori`) VALUES
(1, 'TES INTELIGENSI 1', 'tes-intelegensi-1', 1),
(18, 'TES EPPS', 'tes-epps', 2),
(20, 'tes kepemimpinan 1', 'tes-kepemimpinan-1', 0),
(21, 'tes kepemimpinan 2', 'tes-kepemimpinan-2', 0),
(22, 'Pengantar Tes Intelegensi Subtes I', '', 0),
(24, 'Tes Ujian Tulis', 'tes-ujian-tulis', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_psikotes_soal`
--

CREATE TABLE `tbl_psikotes_soal` (
  `id_soalPsikotes` int NOT NULL,
  `ujian_id` int NOT NULL,
  `bobot` int NOT NULL,
  `jumlah_opsi` int NOT NULL DEFAULT '5',
  `file` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `tipe_file` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `soal` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `opsi_a` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `opsi_b` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `opsi_c` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `opsi_d` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `opsi_e` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `opsi_f` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `opsi_g` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `opsi_h` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `file_a` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `file_b` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `file_c` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `file_d` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `file_e` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `file_f` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `file_g` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `file_h` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `jawaban` varchar(5) NOT NULL,
  `created_on` int NOT NULL,
  `updated_on` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `tbl_psikotes_soal`
--

INSERT INTO `tbl_psikotes_soal` (`id_soalPsikotes`, `ujian_id`, `bobot`, `jumlah_opsi`, `file`, `tipe_file`, `soal`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `opsi_e`, `opsi_f`, `opsi_g`, `opsi_h`, `file_a`, `file_b`, `file_c`, `file_d`, `file_e`, `file_f`, `file_g`, `file_h`, `jawaban`, `created_on`, `updated_on`) VALUES
(13, 26, 1, 1, '', '', '<p>77. Jika seorang anak memiliki 50 rupiah dan memberikan 15 rupiah kepada orang lain ,berapa rupiahkah yang masih tinggal padanya?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '35', 1660544798, 1663209027),
(14, 26, 1, 1, '', '', '<p>78. Berapa km-kah yang dapat ditempuh oleh kereta api dalam waktu 7 jam ,jika kecepatanya 40 km/jam?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '280', 1660544884, 1663209037),
(15, 26, 1, 1, '', '', '<p>79. 15 Peti buah -buahan beratnya 250 kg dan setiap peti kosong beratnya 3 kg, berapakah berat buah-buahan itu?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '250', 1660544977, 1663209046),
(16, 26, 1, 1, '', '', '<p>80. Seseorang mempunyai persediaan rumput yang cukup untuk 7 ekor kuda selama 78 hari. Berapa harikah persediaan itu cukup untuk 21 ekor kuda?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '26', 1660545073, 1663209058),
(17, 26, 1, 1, '', '', '<p>81. 3 Batang coklat harganya Rp. 5,- berapa batangkah yang dapat kita beli dengan Rp. 50,-?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '30', 1660545152, 1663209262),
(18, 26, 1, 1, '', '', '<p xss=removed>82. Seseorang dapat berjalan 1,75 m dalam waktu 1/4 detik.Berapa meterkah yang dapat ia tampuh dalam waktu 10 detik?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '70', 1660545364, 1663209273),
(19, 26, 1, 1, '', '', '<p>83. Jika sebuah batu terletak 15 m disebelah selatan dari sebatang pohon dan pohon  itu berada 30 m disebelah selatan dari sebuah rumah, berapa meterkah jarak antara batu dan rumah itu?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '45', 1660545516, 1663209294),
(21, 26, 1, 1, '', '', '<p xss=removed>84. Jika 4 <sup>1/2</sup> m bahan sandang harganya Rp.90,-berapa rupiahkah harganya 2 <sup>1/2</sup> m?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '50', 1660545831, 1663209316),
(22, 26, 1, 1, '', '', '<p>85. 7 Orang dapat menyelesaikan sesuatu pekerjaan dalam 6 hari. Berapa orangkah yang diperlukan untuk menyelesaikan pekerjaan itu dalam setengah hari?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '48', 1660545929, 1663209332),
(23, 26, 1, 1, '', '', '<p>86. Karena dipanaskan, kawat yang panjangnya 48 cm akan mengembang menjadi 52 cm. Setelah pemanasan, berapakah panjangnya kawat yang berukuran 72 cm?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '78', 1660546033, 1663209433),
(24, 26, 1, 1, '', '', '<p>87. Suatu pabrik dapat menghasilkan 304 batang pensiun dalam waktu 8 jam. Berapa batangkah yang dihasilkan dalam waktu setengah jam?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '9', 1660546167, 1663209423),
(25, 26, 1, 1, '', '', '<p>88. Untuk suatu campuran diperlukan 2 bagian perak dan 3 bagian timah. Berapa gramkah perak yang diperlukan untuk mendapatkan campuran itu yang beratnya 15 gram?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '6', 1660546306, 1663209401),
(26, 26, 1, 1, '', '', '<p>89. Untuk setiap Rp. 3,- yang dimiliki Sidin, Hamid memiliki Rp.5,- Jika mereka bersama mempunyai Rp.120,- berapa rupiahkah yang dimiliki Hamid?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5', 1660546478, 1663209447),
(27, 26, 1, 1, '', '', '<p>90. Mesin A menenun 60 m kain, sedangkan mesin B menenun 40 m. Berapa meterkah yang ditenun mesin A, jika mesin B menenun 60 m?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '90', 1660546592, 1663209468),
(28, 26, 1, 1, '', '', '<p>91. Seseorang membelikan <sup>1/10  </sup>dari uangnya untuk perangko dan 4 kali jumlah itu untuk alat tulis. Sisa uangnya masih Rp.60,- Berapa rupiahkah uangnya semula?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '120', 1660546730, 1663209479),
(29, 26, 1, 1, '', '', '<p>92. Didalam dua peti terdapat 43 buah piring. Di dalam peti yang satu terdapat 9 buah piring lebih banyak dari pada di dalam peti yang lain. Berapa buah piring terdapat didalam peti yang lebih kecil?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '17', 1660546858, 1663209494),
(30, 26, 1, 1, '', '', '<p>93. Suatu lembaran kain yang panjangnya 60 cm harus dibagi sedemikian rupa sehingga panjangmya satu bagian ialah <span xss=removed>2/3</span> dari bagian yang lain. Berapa panjangnya bagian yang terpendek?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 1660546996, 1660546996),
(32, 26, 1, 1, '', '', '<p>94. Suatu perusahaan mengekspor 3/4 dari hasil produksinya dan menjual 4/5 dari sisa itu didalam Negeri. Berapa % kah hasil produksi yang masih tinggal?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5', 1660547126, 1663209520),
(33, 26, 1, 1, '', '', '<p>95. Jika suatu botol berisi anggur hanya 7/8 bagian dan harganya ialah Rp. 84,- Berapakah harga anggur itu jika botol itu hanya terisi 1/2 penuh?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '48', 1660547259, 1663209539),
(34, 26, 1, 1, '', '', '<p>96. Didalam suatu keluarga setiap anak perempuan mempunyai jumlah saudara laki-laki yang sama dengan jumlah saudara perempuan dan setiap anak laki-laki mempunyai dua kali lebih banyak saudara perempuan dari pada saudara laki laki. Berapa anak laki-laki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3', 1660547474, 1663209552),
(35, 27, 1, 1, '', '', '<p>97)      6      9     12     15     18     21     24     ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '27', 1660547576, 1663209571),
(36, 27, 1, 1, '', '', '<p>98)          15     16     18     19     21     22     24     ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '25', 1660547672, 1663209589),
(37, 27, 1, 1, '', '', '<p>99)          19     18     22     21     25     24     28     ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '27', 1660547731, 1663209604),
(38, 27, 1, 1, '', '', '<p>100)          16     12     17     13     18     14     19     ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '15', 1660547783, 1663209618),
(39, 27, 1, 1, '', '', '<p>101)          2     4     8     10     20     22     44     ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '46', 1660547845, 1663209631),
(40, 27, 1, 1, '', '', '<p>102)          15     13     16     12     17     11     18     ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '10', 1660547903, 1663209645),
(41, 27, 1, 1, '', '', '<p>103)          25     22     11     33     30     15     45     ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '24', 1660547946, 1663209662),
(42, 27, 1, 1, '', '', '<p>104)          49     51     54     27     9     11     14     ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '7', 1660547993, 1663209680),
(43, 27, 1, 1, '', '', '<p>105)          2     3     1     3     4     2     4     ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5', 1660548036, 1663209698),
(44, 27, 1, 1, '', '', '<p>106)          19     17     20     16     21     15     22     ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '14', 1660548088, 1663209719),
(45, 27, 1, 1, '', '', '<p>107)          94     92     46     44     22     20     10     ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '8', 1660548134, 1663209742),
(46, 27, 1, 1, '', '', '<p>108)             5      8       9      8      11     12      11      ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '14', 1660548204, 1663209762),
(47, 27, 1, 1, '', '', '<p>109)             12      15       19      23      28       33      39      ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '45', 1660548261, 1663209781),
(48, 27, 1, 1, '', '', '<p>110)            7      5      10      7       21       17       68      ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '36', 1660548317, 1663209795),
(49, 27, 1, 1, '', '', '<p>111)            11     15      18      9      13       16       8      ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '12', 1660548368, 1663209815),
(50, 27, 1, 1, '', '', '<p>112)            3       8       15      24       35       48       63      ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '80', 1660548423, 1663209835),
(51, 27, 1, 1, '', '', '<p>113)             4     5     7      4      8       13      7      ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '14', 1660548475, 1663209848),
(52, 27, 1, 1, '', '', '<p>114)               8       5      15       18       6      3      9      ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '12', 1660548515, 1663209868),
(53, 27, 1, 1, '', '', '<p>115)            15      6      18       10      30       23      69      ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '36', 1660548561, 1663209883),
(54, 27, 1, 1, '', '', '<p>116)              5      35      28      4      11      77      70     ?</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '10', 1660548622, 1663209895),
(55, 25, 1, 1, '', '', '<p>61) mawar - melati</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', 1662626191, 1662626191),
(56, 25, 1, 1, '', '', '<p>62) mata-telinga</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', 1662626271, 1662626754),
(57, 25, 1, 1, '', '', '<p>63) Gula-Intan</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', 1662626491, 1663210096),
(58, 25, 1, 1, '', '', '<p>64) Hujan-Salju</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', 1662626530, 1662626684),
(59, 25, 1, 1, '', '', '<p>65) Pengantar surat-Telepon</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', 1662626802, 1662626802),
(60, 25, 1, 1, '', '', '<p>66) Kamera-Kacamata</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', 1662626843, 1662626843),
(61, 25, 1, 1, '', '', '<p>67) Lambung-Usus</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', 1662626878, 1662627186),
(62, 25, 1, 1, '', '', '<p>68) Banyak-sedikit</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', 1662626909, 1662626909),
(63, 25, 1, 1, '', '', '<p>69) Telur-Benih</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', 1662626943, 1663210122),
(64, 25, 1, 1, '', '', '<p>70) Bendera-Lencana </p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', 1662626981, 1662626981),
(65, 25, 1, 1, '', '', '<p>71) Rumput-Gajah</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', 1662627021, 1662627021),
(66, 25, 1, 1, '', '', '<p>72) Ember-Kantong</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', 1662627231, 1662627231),
(67, 25, 1, 1, '', '', '<p>73) Awal-Akhir</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', 1662627358, 1662627358),
(68, 25, 1, 1, '', '', '<p>74) Kikir-Boros</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', 1662627382, 1662627382),
(69, 25, 1, 1, '', '', '<p>75) Penawaran-Permintaan</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', 1662627432, 1662627432),
(70, 25, 1, 1, '', '', '<p>76) Atas-Bawah</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', 1662627466, 1662627466),
(90, 22, 1, 2, '', '', '<p>11. <span xss=removed>Suatu……\r\ntidak menyangkut persoalan pencegahan kecelakaan</span></p>', '<p>a) lampu lalu lintas</p>', '<p>b) kacamata pelindung</p>', '<p>c) kotak PPPK</p>', '<p>d) tanda peringatan</p>', '<p>e) palang kereta api</p>', '', '', '', '', '', '', '', '', '', '', '', 'C', 1653636078, 1653637582),
(91, 22, 1, 5, '', '', '<p>12. <span xss=removed>Mata\r\nuang logam Rp 500,- mempunyai garis tengah…mm</span></p>', '<p>a) 20</p>', '<p>b) 29</p>', '<p>c) 17</p>', '<p>d) 24</p>', '<p>e) 15</p>', '', '', '', '', '', '', '', '', '', '', '', 'D', 1653636168, 1653637513),
(92, 22, 1, 5, '', '', '<p>13. <span xss=removed>Seseorang\r\nyang bersikap menyangsikan setiap kemajuan ialah seseorang yang…</span></p>', '<p>a) demokratis</p>', '<p>b) radikal</p>', '<p>c) liberal</p>', '<p>d) konservatif</p>', '<p>e) anarkis</p>', '', '', '', '', '', '', '', '', '', '', '', 'D', 1653636259, 1653637466),
(93, 22, 1, 5, '', '', '<p>14. <span xss=removed>Lawannya\r\n“tidak pernah” ialah…</span></p>', '<p>a) sering</p>', '<p>b) kadang-kadang</p>', '<p>c) jarang</p>', '<p>d) kerap kali</p>', '<p>e) selalu</p>', '', '', '', '', '', '', '', '', '', '', '', 'E', 1653636445, 1653637444),
(94, 22, 1, 5, '', '', '<p>15. <span xss=removed>Jarak\r\nantara Jakarta – Surabaya kira-kira …km</span></p>', '<p>a) 650</p>', '<p>b) 1000</p>', '<p>c) 800</p>', '<p>d) 600</p>', '<p>e) 950</p>', '', '', '', '', '', '', '', '', '', '', '', 'C', 1653636771, 1653637414),
(95, 22, 1, 5, '', '', '<p>16. <span xss=removed>Untuk\r\ndapat membuat nada yang rendah dan mendalam, kita memerlukan banyak…</span></p>', '<p>a) kekuatan</p>', '<p>b) peranan</p>', '<p>c) ayunan</p>', '<p>d) berat</p>', '<p>e) suara</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1653636865, 1653637384),
(96, 22, 1, 5, '', '', '<p>17. <span xss=removed>Ayah……\r\nlebih berpengalaman dari pada anaknya</span></p>', '<p>a) selalu</p>', '<p>b) biasanya</p>', '<p>c) jauh</p>', '<p>d) jarang</p>', '<p>e) pada dasarnya</p>', '', '', '', '', '', '', '', '', '', '', '', 'B', 1653636957, 1653637364),
(97, 22, 1, 5, '', '', '<p>18. <span xss=removed>Di\r\nantara kota-kota berikut ini, maka kota……letaknya paling selatan</span></p>', '<p>a) Jakarta</p>', '<p>b) Bandung</p>', '<p>c) Cirebon</p>', '<p>d) Semarang</p>', '<p>e) Surabaya</p>', '', '', '', '', '', '', '', '', '', '', '', 'B', 1653637071, 1653637348),
(98, 22, 1, 5, '', '', '<p>19. <span xss=removed>Jika\r\nkita mengetahui jumlah presentase nomor-nomor lotere yang tidak menang, maka\r\nkita dapat menghitung…</span></p>', '<p>a) jumlah nomor yang menang</p>', '<p>b) pojok lotere</p>', '<p>c) kemungkinan menang</p>', '<p>d) jumlah pengikut</p>', '<p>e) tinggi keuntungan</p>', '', '', '', '', '', '', '', '', '', '', '', 'C', 1653637166, 1653637278),
(99, 22, 1, 5, '', '', '<p>20. <span xss=removed>Seorang\r\nanak yang berumur 10 tahun tingginya rata-rata……cm</span></p>', '<p>a) 150</p>', '<p>b) 130</p>', '<p>c) 110</p>', '<p>d) 105</p>', '<p>e) 115</p>', '', '', '', '', '', '', '', '', '', '', '', 'B', 1653637247, 1653637247),
(100, 23, 1, 5, '', '', '<p><span xss=\"removed\">21.</span></p><p><span xss=\"removed\">a) Lingkaran</span></p><p><span xss=\"removed\">b) Panah</span></p><p><span xss=\"removed\">c) Elips</span></p><p><span xss=\"removed\">d) Busur</span></p><p><span xss=\"removed\">e) lengkungan</span></p>', '<p>a) Lingkungan</p>', '<p>b) Panah</p>', '<p>C) Elips</p>', '<p>D) Busur</p>', '<p>E) Lengkungan</p>', '', '', '', '', '', '', '', '', '', '', '', 'B', 1653878786, 1687161388),
(101, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=\"removed\">22.</span></p><p><span xss=\"removed\">a) Mengetuk</span></p><p><span xss=\"removed\">b) Memaki</span></p><p><span xss=\"removed\">c) Menjahit</span></p><p><span xss=\"removed\">d) Menggergaji</span></p><p><span xss=\"removed\">e) Memukul</span></p></h5>', '<p>a) mengetuk</p>', '<p>b) memaki</p>', '<p>c) menjahit</p>', '<p>d) menggergaji</p>', '<p>e) memukul</p>', '', '', '', '', '', '', '', '', '', '', '', 'B', 1653879868, 1687161676),
(102, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=\"removed\">23. </span></p><p><span xss=\"removed\">a) Lebar</span></p><p><span xss=\"removed\">b) keliling</span></p><p><span xss=\"removed\">c) Luas</span></p><p><span xss=\"removed\">d) Isi</span></p><p><span xss=\"removed\">e) Panjang</span></p></h5>', '<p>a) lebar</p>', '<p>b) keliling</p>', '<p>c) luas</p>', '<p>d) isi</p>', '<p>e) panjang</p>', '', '', '', '', '', '', '', '', '', '', '', 'D', 1653879982, 1687161800),
(103, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=\"removed\">24. </span></p><p><span xss=\"removed\">a) Mengikat</span></p><p><span xss=\"removed\">b) Menyatukan</span></p><p>c) Melepaskan</p><p>d) Mengaitkan</p><p>e) Melekatkan</p></h5>', '<p>a) mengikat</p>', '<p>b) menyatukan</p>', '<p>c) melepaskan</p>', '<p>d) mengaitkan</p>', '<p>e) melekatkan</p>', '', '', '', '', '', '', '', '', '', '', '', 'C', 1653880082, 1687161924),
(104, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=\"removed\">25. </span></p><p><span xss=\"removed\">a) arah</span></p><p><span xss=\"removed\">b) timur</span></p><p>c) perjalanan</p><p>d) tujuan</p><p>e) selatan</p></h5>', '<p>a) arah</p>', '<p>b) timur </p>', '<p>c) perjalanan</p>', '<p>d) tujuan</p>', '<p>e) selatan</p>', '', '', '', '', '', '', '', '', '', '', '', 'C', 1653880183, 1687162030),
(105, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=\"removed\">26. </span></p><p><span xss=\"removed\">a) jarak</span></p><p><span xss=\"removed\">b) perpisahan</span></p><p><span xss=\"removed\">c) tugas</span></p><p><span xss=\"removed\">d) batas</span></p><p>e) perceraian</p></h5>', '<p>a) jarak</p>', '<p>b) perpisahan</p>', '<p>c) tugas</p>', '<p>d) batas</p>', '<p>e) perceraian</p>', '', '', '', '', '', '', '', '', '', '', '', 'C', 1653880256, 1687162121),
(106, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=\"removed\">27. </span></p><p><span xss=\"removed\">a) saringan</span></p><p><span xss=\"removed\">b) kelambu</span></p><p>c) payung</p><p>d) tapisan</p><p>e) jala</p></h5>', '<p>a) saringan</p>', '<p>b) kelambu</p>', '<p>c) payung</p>', '<p>d) tapisan</p>', '<p>e) jala</p>', '', '', '', '', '', '', '', '', '', '', '', 'C', 1653880322, 1687162224),
(107, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=\"removed\">28. </span></p><p><span xss=\"removed\">a) putih</span></p><p><span xss=\"removed\">b) pucat</span></p><p><span xss=\"removed\">c) buram</span></p><p><span xss=\"removed\">d) kasar</span></p><p><span xss=\"removed\">e) berkilauan</span></p></h5>', '<p>a) putih</p>', '<p>b) pucat</p>', '<p>c) buram</p>', '<p>d) kasar</p>', '<p>e) berkilauan</p>', '', '', '', '', '', '', '', '', '', '', '', 'D', 1653880400, 1687162346),
(108, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=\"removed\">29. </span></p><p><span xss=\"removed\">a) otobis</span></p><p><span xss=\"removed\">b) pesawat terbang</span></p><p><span xss=\"removed\">c) sepeda motor</span></p><p><span xss=\"removed\">d) sepeda</span></p><p><span xss=\"removed\">e) kapal api</span></p></h5>', '<p>a) otobis</p>', '<p>b) pesawat terbang</p>', '<p>c) sepeda motor</p>', '<p>d) sepeda</p>', '<p>e) kapal api</p>', '', '', '', '', '', '', '', '', '', '', '', 'D', 1653880542, 1687162443),
(109, 23, 1, 5, '', '', '<p>30. </p><p>a) biola</p><p>b) seruling</p><p>c) klarinet</p><p>d) terompet</p><p>e) saxophon</p>', '<p>a) biola</p>', '<p>b) seruling</p>', '<p>c) klarinet</p>', '<p>d) terompet</p>', '<p>e) saxophone</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1653880626, 1687162560),
(110, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=\"removed\">31. </span></p><p><span xss=\"removed\">a) bergelombang</span></p><p><span xss=\"removed\">b) kasar</span></p><p><span xss=\"removed\">c) berduri</span></p><p><span xss=\"removed\">d) licin</span></p><p><span xss=\"removed\">e) lurus</span></p></h5>', '<p>a) bergelombang</p>', '<p>b) kasar</p>', '<p>c) berduri</p>', '<p>d) licin</p>', '<p>e) lurus</p>', '', '', '', '', '', '', '', '', '', '', '', 'E', 1653880917, 1687162634),
(111, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=\"removed\">32. </span></p><p><span xss=\"removed\">a) jam</span></p><p><span xss=\"removed\">b) kompas</span></p><p><span xss=\"removed\">c) penunjuk jalan</span></p><p><span xss=\"removed\">d) bintang pari</span></p><p><span xss=\"removed\">e) arah</span></p></h5>', '<p>a) jam</p>', '<p>b) kompas</p>', '<p>c) penunjuk jalan</p>', '<p>d) bintang pari</p>', '<p>e) arah</p>', '', '', '', '', '', '', '', '', '', '', '', 'E', 1653881039, 1687162719),
(112, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=\"removed\">33.</span></p><p><span xss=\"removed\">a) kebijaksanaan</span></p><p><span xss=\"removed\">b) pendidikan</span></p><p><span xss=\"removed\">c) perecanaan</span></p><p><span xss=\"removed\">d) penempatan</span></p><p><span xss=\"removed\">e) pengerahan</span></p></h5>', '<p>a) kebiaksanaan</p>', '<p>b) pendidikan</p>', '<p>c) perencanaan</p>', '<p>d) penempatan</p>', '<p>e) pengerahan</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1653881617, 1687162803),
(113, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=\"removed\">34. </span></p><p><span xss=\"removed\">a) bermotor</span></p><p><span xss=\"removed\">b) berjalan</span></p><p><span xss=\"removed\">c) berlayar</span></p><p><span xss=\"removed\">d) bersepeda</span></p><p><span xss=\"removed\">e) berkuda</span></p></h5>', '<p>a) bermotor</p>', '<p>b) berjalan</p>', '<p>c) berlayar</p>', '<p>d) bersepeda</p>', '<p>e) berkuda</p>', '', '', '', '', '', '', '', '', '', '', '', 'B', 1653881687, 1687162871),
(114, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=\"removed\">35. </span></p><p><span xss=\"removed\">a) gambar</span></p><p><span xss=\"removed\">b) lukisan</span></p><p><span xss=\"removed\">c) potret</span></p><p><span xss=\"removed\">d) patung</span></p><p><span xss=\"removed\">e) ukiran</span></p></h5>', '<p>a) gambar</p>', '<p>b) lukisan</p>', '<p>c) potret</p>', '<p>d) patung</p>', '<p>e) ukiran</p>', '', '', '', '', '', '', '', '', '', '', '', 'C', 1653881959, 1687162942),
(115, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=\"removed\">36. </span></p><p><span xss=\"removed\">a) panjang</span></p><p><span xss=\"removed\">b) lonjong</span></p><p><span xss=\"removed\">c) runcing</span></p><p><span xss=\"removed\">d) bulat</span></p><p><span xss=\"removed\">e) bersudut</span></p></h5>', '<p>a) panjang</p>', '<p>b) lonjong</p>', '<p>c) runcing</p>', '<p>d) bulat</p>', '<p>e) bersudut</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1653882034, 1687163020),
(116, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=\"removed\">37.</span></p><p><span xss=\"removed\">a) kunci</span></p><p><span xss=\"removed\">b) palang pintu</span></p><p><span xss=\"removed\">c) gerendel</span></p><p><span xss=\"removed\">d) gunting</span></p><p><span xss=\"removed\">e) obeng</span></p></h5>', '<p>a) kunci</p>', '<p>b) palang pintu</p>', '<p>c) gerendel</p>', '<p>d) gunting</p>', '<p>e) obeng</p>', '', '', '', '', '', '', '', '', '', '', '', 'B', 1653882111, 1687163099),
(117, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=\"removed\">38.</span></p><p><span xss=\"removed\">a) jembatan</span></p><p><span xss=\"removed\">b) batas</span></p><p>c) perkawinan</p><p>d) pagar</p><p>e) masyarakart</p></h5>', '<p>a) jembatan</p>', '<p>b) batas</p>', '<p>c) perkawinan</p>', '<p>d) pagar</p>', '<p>e) masyarakat</p>', '', '', '', '', '', '', '', '', '', '', '', 'E', 1653882173, 1687163168),
(118, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=\"removed\">39. </span></p><p><span xss=\"removed\">a) mengetam</span></p><p><span xss=\"removed\">b) memahat</span></p><p><span xss=\"removed\">c) mengasah</span></p><p><span xss=\"removed\">d) melicinkan</span></p><p><span xss=\"removed\">e) menggosok</span></p></h5>', '<p>a) mengetam</p>', '<p>b) memahat</p>', '<p>c) mengasah</p>', '<p>d) melicinkan</p>', '<p>e) menggosok</p>', '', '', '', '', '', '', '', '', '', '', '', 'B', 1653882237, 1687163241),
(119, 23, 1, 5, '', '', '<h5 xss=\"removed\"><p><span xss=removed>40. </span></p><p><span xss=removed>a) batu</span><br></p><p><span xss=\"removed\">b) baja</span></p><p><span xss=\"removed\">c) bulu</span></p><p><span xss=\"removed\">d) karet</span></p><p><span xss=\"removed\">e) karet</span></p></h5>', '<p>a) batu</p>', '<p>b) baja</p>', '<p>c) bulu</p>', '<p>d) karet</p>', '<p>e) kayu</p>', '', '', '', '', '', '', '', '', '', '', '', 'D', 1653882300, 1687160483),
(120, 24, 1, 5, '', '', '<p>41. Menemukan : menghilangkan = Mengingat :</p>', '<p>a) menghapal</p>', '<p>b) mengenai</p>', '<p>c) melupakan</p>', '<p>d) berpikir</p>', '<p>e) memimpikan</p>', '', '', '', '', '', '', '', '', '', '', '', 'C', 1653882906, 1662627338),
(121, 24, 1, 5, '', '', '<p>42. Bunga : Jambangan = Burung : ?</p>', '<p>a) Sarang</p>', '<p>b) langit</p>', '<p>c) pagar</p>', '<p>d) pohon</p>', '<p>e) sangkar</p>', '', '', '', '', '', '', '', '', '', '', '', 'E', 1653883009, 1653883009),
(122, 24, 1, 5, '', '', '<p>43. Kereta api : rel = Otobis: ?</p>', '<p>a) roda</p>', '<p>b) poros</p>', '<p>c) ban</p>', '<p>d) jalan raya</p>', '<p>e) kecepatan</p>', '', '', '', '', '', '', '', '', '', '', '', 'D', 1653883276, 1653883276),
(123, 24, 1, 5, '', '', '<p>44. Perak : emas= CIncin : ?</p>', '<p>a) arloji</p>', '<p>b) berlian</p>', '<p>c) permata</p>', '<p>d) gelang</p>', '<p>e) platina</p>', '', '', '', '', '', '', '', '', '', '', '', 'D', 1653883445, 1653883445),
(124, 24, 1, 5, '', '', '<p>45. Lingkaran : bola = Bujur sangkar : ?</p>', '<p>a) bentuk</p>', '<p>b) gambar</p>', '<p>c) segi empat</p>', '<p>d) kubus</p>', '<p>e) piramida</p>', '', '', '', '', '', '', '', '', '', '', '', 'D', 1653883547, 1653883547),
(125, 24, 1, 5, '', '', '<p>46. Saran : keputusan = Merundingkan : ?</p>', '<p>a) menawarkan</p>', '<p>b) menentukan</p>', '<p>c) menilai</p>', '<p>d) menimbang</p>', '<p>e) merenungkan</p>', '', '', '', '', '', '', '', '', '', '', '', 'B', 1653883727, 1653883748),
(126, 24, 1, 5, '', '', '<p>47. Lidah : asam = Hidung : ?</p>', '<p>a) mencium</p>', '<p>b) bernapas</p>', '<p>c) mengecap</p>', '<p>d) tengik</p>', '<p>e) asin</p>', '', '', '', '', '', '', '', '', '', '', '', 'D', 1653883924, 1653883924),
(127, 24, 1, 5, '', '', '<p>48. Darah : pembuluh = Air : ?</p>', '<p>a) pintu air</p>', '<p>b) sungai</p>', '<p>c) talang</p>', '<p>d) hujan</p>', '<p>e) ember</p>', '', '', '', '', '', '', '', '', '', '', '', 'B', 1653884014, 1653884014),
(128, 24, 1, 5, '', '', '<p>49. Saraf : penyalur = Pupil : ?</p>', '<p>a) penyinaran</p>', '<p>b) mata</p>', '<p>c) melihat</p>', '<p>d) cahaya</p>', '<p>e) pelindung</p>', '', '', '', '', '', '', '', '', '', '', '', 'E', 1653884086, 1653884086),
(129, 24, 1, 5, '', '', '<p>50. Pengantar surat : pengantar telegram = Pandai besi : ?</p>', '<p>a) palu godam</p>', '<p>b) pedagang besi</p>', '<p>c) api</p>', '<p>d) tukang emas</p>', '<p>e. besi tempa</p>', '', '', '', '', '', '', '', '', '', '', '', 'D', 1653884184, 1653884184),
(130, 24, 1, 5, '', '', '<p>51. Buta : warna = Tuli : ?</p>', '<p>a) pendengaran</p>', '<p>b) mendengar</p>', '<p>c) nada</p>', '<p>d) kata </p>', '<p>e) telinga</p>', '', '', '', '', '', '', '', '', '', '', '', 'C', 1653884352, 1653884352),
(131, 24, 1, 5, '', '', '<p>52. Makanan : bumbu = Ceramah : ?</p>', '<p>a) penghinaan</p>', '<p>b) pidato</p>', '<p>c) kelakar</p>', '<p>d) kesan</p>', '<p>e) ayat</p>', '', '', '', '', '', '', '', '', '', '', '', 'C', 1653884455, 1653884455),
(132, 24, 1, 5, '', '', '<p>53. Marah : emosi = Duka cita : ?</p>', '<p>a) suka cita</p>', '<p>b) sakit hati</p>', '<p>c) suasana hati</p>', '<p>d) sedih</p>', '<p>e) rindu</p>', '', '', '', '', '', '', '', '', '', '', '', 'C', 1653884553, 1653884553),
(133, 24, 1, 5, '', '', '<p>54. Mantel : jubah = wool :?</p>', '<p>a) bahan sandang</p>', '<p>b) domba</p>', '<p>c) sutra</p>', '<p>d) jas </p>', '<p>e) tekstil</p>', '', '', '', '', '', '', '', '', '', '', '', 'C', 1653884791, 1653884791),
(134, 24, 1, 5, '', '', '<p>55. Ketinggian puncak : tekanan udara = ketinggian nada : ?</p>', '<p>a) garpu tala</p>', '<p>b) sopran</p>', '<p>c) nyanyian</p>', '<p>d) panjang senar</p>', '<p>e) suara</p>', '', '', '', '', '', '', '', '', '', '', '', 'E', 1653884885, 1653885003),
(135, 24, 1, 5, '', '', '<p>56. Negara: revolusi = Hidup: ?</p>', '<p>a) biologi</p>', '<p>b) keturunan </p>', '<p>c) mutasi</p>', '<p>d) seleksi </p>', '<p>e) ilmu hewan</p>', '', '', '', '', '', '', '', '', '', '', '', 'C', 1653884984, 1653884984),
(136, 24, 1, 5, '', '', '<p>57. Kekurangan : penemuan = Panas : ?</p>', '<p>a) haus</p>', '<p>b) khatulistiwa</p>', '<p>c) es</p>', '<p>d) matahari</p>', '<p>e) dingin</p>', '', '', '', '', '', '', '', '', '', '', '', 'C', 1653885092, 1653885092),
(137, 24, 1, 5, '', '', '<p>58. Kayu : diketam = Besi : ?</p>', '<p>a) dipalu</p>', '<p>b) digergaji</p>', '<p>c) dituang</p>', '<p>d) dikikir</p>', '<p>e) ditempa</p>', '', '', '', '', '', '', '', '', '', '', '', 'E', 1653885168, 1653885168),
(138, 24, 1, 5, '', '', '<p>59. Olahragawan : lembing = Cendekiawan : ?</p>', '<p>a) perpustakaan</p>', '<p>b) penelitian</p>', '<p>c) karya</p>', '<p>d) studi</p>', '<p>e) mikroskop</p>', '', '', '', '', '', '', '', '', '', '', '', 'E', 1653885303, 1653885303),
(139, 24, 1, 5, '', '', '<p>60. Keledai : kuda pacuan = pembakaran : ?</p>', '<p>a) pemadam api</p>', '<p>b) obor</p>', '<p>c) letupan </p>', '<p>d) korek api</p>', '<p>e) lautan api</p>', '', '', '', '', '', '', '', '', '', '', '', 'E', 1653885428, 1662437595),
(140, 32, 1, 5, '', '', '<p>157. Kata yang mempunyai huruf permulaan - A - adalah suatu............</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'D', 1660549133, 1663135217),
(141, 32, 1, 5, '', '', '<p>158.  Kata yang mempunyai huruf permulaan - B - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'E', 1660549297, 1663135248),
(142, 32, 1, 5, '', '', '<p>159.  Kata yang mempunyai huruf permulaan - C - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'B', 1660549401, 1663135279),
(143, 32, 1, 5, '', '', '<p>160.  Kata yang mempunyai huruf permulaan - D - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1660549492, 1660549492),
(144, 32, 1, 5, '', '', '<p>161.  Kata yang mempunyai huruf permulaan - E - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1660549590, 1660549590),
(145, 32, 1, 5, '', '', '<p>162.  Kata yang mempunyai huruf permulaan - F - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1660549677, 1660549677),
(146, 32, 1, 5, '', '', '<p>163.  Kata yang mempunyai huruf permulaan - G - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1660549763, 1660549763),
(147, 32, 1, 5, '', '', '<p>164.  Kata yang mempunyai huruf permulaan - H - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1660549861, 1660549861),
(148, 32, 1, 5, '', '', '<p>165.  Kata yang mempunyai huruf permulaan - I - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1660549939, 1660549939),
(149, 32, 1, 5, '', '', '<p>166.  Kata yang mempunyai huruf permulaan - J - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1660550013, 1660550013),
(150, 32, 1, 5, '', '', '<p>167.  Kata yang mempunyai huruf permulaan - K - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1660550168, 1660550168),
(151, 32, 1, 5, '', '', '<p>168. Kata yang mempunyai huruf permulaan - L - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1660550296, 1660550296),
(152, 32, 1, 5, '', '', '<p>169.  Kata yang mempunyai huruf permulaan - M - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e)binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1660550420, 1660550420),
(153, 32, 1, 5, '', '', '<p>170.  Kata yang mempunyai huruf permulaan - N - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1660550524, 1660550524),
(154, 32, 1, 5, '', '', '<p>171.  Kata yang mempunyai huruf permulaan - O - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1660550625, 1660550625),
(155, 32, 1, 5, '', '', '172.&nbsp; Kata yang mempunyai huruf permulaan - O - adalah suatu..........', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1660550733, 1660550733),
(156, 32, 1, 5, '', '', '<p>173.  Kata yang mempunyai huruf permulaan - R - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1660550845, 1660550845),
(157, 32, 1, 5, '', '', '<p>174.  Kata yang mempunyai huruf permulaan - S - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1660550956, 1660550956),
(158, 32, 1, 5, '', '', '<p>175.  Kata yang mempunyai huruf permulaan - T - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1660551152, 1660551152),
(159, 32, 1, 5, '', '', '<p>176.  Kata yang mempunyai huruf permulaan - O - adalah suatu..........</p>', '<p>a) bunga</p>', '<p>b) perkakas</p>', '<p>c) burung</p>', '<p>d) kesenian</p>', '<p>e) binatang</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1660551234, 1660551234),
(160, 23, 1, 5, 'cf9a1ea388d630f25fb9db374d1c23ec.png', 'image/png', '<p>Pilih mana gambar yang paling tepat</p>', '<p>Pilihan A</p>', '<p>Pilihan B</p>', '<p>Pilihan C</p>', '<p>Pilihan D</p>', '<p>Pilihan E</p>', '', '', '', '', '', '', '', '', '', '', '', 'E', 1662709040, 1662709334),
(161, 28, 1, 5, '2f8d5e4148dc953d778f9d83f917cc30.png', 'image/png', '<p>117.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '17245367aa8d53ea9439c60dbfe6a564.png', '38ed225e789cdcd794a6333544d3229f.png', 'c06ae53104510add77b3c730473a2e42.png', '33ced52fcffdf7ffeba38cff5345c960.png', 'bfaa798f0a44d4758aecc3ae8a714432.png', '', '', '', 'A', 1662955498, 1677721761),
(162, 28, 1, 5, 'f9ffe7e97ff366aa50cf243e3290a392.png', 'image/png', '<p>118.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '4912c3f44b1562f0064c1c6419f156e6.png', 'afb902dcc949c0a791fd9c147b66a029.png', '7f675458aa799b630c5a4d817b1fd03d.png', 'ce30c5aaa2f67d767aa68000c52077da.png', 'a2075583ee4746dc889f7389b93b714d.png', '', '', '', 'C', 1662955631, 1677722104),
(163, 28, 1, 5, 'a088c65bd30640df5419e93a161314f4.png', 'image/png', '<p>119.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '611994e9487a03f3d71b8455341ef9a9.png', '19a9f339e7678008695801026c23ffc9.png', '88418fae79a02068584c8912393fc299.png', '4b14ddd448c12003200a0d2836ae4ecc.png', 'ff8769b1a3308411505125445425bb51.png', '', '', '', 'B', 1662956655, 1677722529),
(164, 28, 1, 5, 'e7efbe77d60b3e9972b0f6bfa65a0dcc.png', 'image/png', '<p>120.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '93f9e6680d5559048ddf32dbd41a0b3f.png', '399610b9bd124f16f5e859ec26b60d04.png', 'c55d008f1bf0c8c0c23ae100c9ba657e.png', '573bc4e870e1f83b8ca818efd04ef635.png', '88ba0a793328473a4e69c95520c71b2b.png', '', '', '', 'A', 1662962114, 1677722697),
(165, 28, 1, 5, '142518c6f22c49fbd78a4d9c68e749b2.png', 'image/png', '<p>121.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '128d1b705ef01bd754391755886fd78d.png', '359bf565c11d4d45e8c240f37f793232.png', '36ce1e26612510138328659ff3f11fc3.png', '24bcb735dee6a0f1478f4c8d53681b5e.png', '0577a4aafbc1639790e0a25b5ce1f238.png', '', '', '', 'D', 1662962185, 1677722820),
(166, 28, 1, 5, '6ca4852437dd6c1b26a4df054b1c61a4.png', 'image/png', '<p>122.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '4d0d30fcf7b16fd14656eca6dfc6fbf3.png', '16b2549d8a584738cbb6ff89cbc6194f.png', 'fac722fedcd42cf593d703f4ac0887f8.png', 'b7fb1ada0c4aed376469a492f14ae2b1.png', '279c3fd808a17404cb978578202745d3.png', '', '', '', 'B', 1662962237, 1677722950),
(167, 28, 1, 5, '1ae4f9e35aeef64e05ce3ef3f23ec0b6.png', 'image/png', '<p>123.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', 'df50b6a9081aec781cb5badd0241c16f.png', '85a1c5c4ab3872d78b844ea338841489.png', 'c4da5cc9d8c1074e02aa66962dcba549.png', '05674290cc05e7e0c882cd946c196711.png', '0b4abb5b241d7aeacff81c8e2d6a9e56.png', '', '', '', 'C', 1662962278, 1677723044),
(168, 28, 1, 5, '06c30aa9186c5e1326ec2ddfcfe4b9ac.png', 'image/png', '<p>124.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '3d2b08a18735df9485773a267327c00b.png', 'bd30fc6455f3a1874f896df547bc4480.png', 'e5ed1e0029bf1bc1d4f57d83e733a607.png', '2e78268a48176911c05effcbaae2f3c1.png', '2f46eacaa20121059ff4cb44296c570a.png', '', '', '', 'E', 1662962330, 1677723157),
(169, 28, 1, 5, 'e4d55ad6d062acd90e5b21eeae98f3b6.png', 'image/png', '<p>125.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '561e6462f8e700be56a1e4718c93a71b.png', '4a9f176613cbee90bb087a401f21e931.png', '6274cd8db5ad27348cc99d2c9ab00b1e.png', '89170daac6594e13a87a24f0847a6df9.png', 'c5a89a3a51ec46475e08ce002ec5d9a0.png', '', '', '', 'E', 1662962370, 1677723265),
(170, 28, 1, 5, 'af4c9faf040657fc59bf7ff7a83533cd.png', 'image/png', '<p>126.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '80bf4f9ea2a5d038505af0a9385d3010.png', '6cd06a0fe2e7f3bb5f4caadb3f2bd355.png', '6f4729f02bd50de5d8f4c300e085d629.png', 'aab42fdab6aeb39c64be0ec85ed8ad63.png', 'e0b1ddf9934397aeaf16827625a361df.png', '', '', '', 'D', 1662962417, 1677723370),
(171, 28, 1, 5, '72be1a36ed698a77e38e8464a2a3f05b.png', 'image/png', '<p>127.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '15209d0c4e42133e68da3f2d643a9762.png', 'ecd68a0fb688291009d18e2af7eaf462.png', '7e3708a3e473e8900280a9a87b1570d7.png', '117f0058b12aca6c3b7b4637cc856e07.png', 'ca3e811e3d24972a20108e9946c4ed15.png', '', '', '', 'E', 1662962450, 1677723470),
(172, 28, 1, 5, 'a35c76f07382bbec4973f59a564fa6cb.png', 'image/png', '<p>128.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '429fd884fda9f7a1acadd1d358863a8d.png', '9fb277889ff19189e821e6b9b3f547cd.png', '3abfc6218d4af3d21932c3626e6a689c.png', 'db43dc0bdd1571c38c293ce18a187f7e.png', 'a2ca4342f43af2ef8e9fd702005d077d.png', '', '', '', 'B', 1662962481, 1677723559),
(173, 28, 1, 5, 'da45463dcf9bfe71868511046c49299e.png', 'image/png', '<p>129.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '5525ce0fefa7097c8aafa74be7058c7f.png', 'bfa20d34e32a2b256ede1d18eea1faff.png', '8527ce69e7c6bd66298fd56e26ac500e.png', 'd403afdc9a8e41ea154881b095c1eb24.png', '73fe83af18cc30020bf65c6350288c2d.png', '', '', '', 'D', 1662962539, 1677723643),
(174, 28, 1, 5, '329e340c05c107e3f3b2552e68c20656.png', 'image/png', '<p>130.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', 'b8ce2bdf2e52e3e325e762af57d782a4.png', '9b365b7e2d60042d4e638defdb4e7731.png', '9829ea102a82c028554dc562bec41b82.png', '5fafe07252fc9868096743e972259a22.png', '77b81bff6d618aac8cabd906f51e705b.png', '', '', '', 'C', 1662962598, 1677723750),
(175, 28, 1, 5, 'da1cdcf773e113c05a0677d8f3b8147a.png', 'image/png', '<p>131.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '603c916453cb81a7cd120de7a95479db.png', '470b65231238bf2b4a3f9d069132dcc5.png', 'a61e9ef6a3d9cc79e3e51f5b4ebd7ce2.png', 'ceec5c1dc9cfe078f0dbc2474c2494cc.png', '19628e1960bee1857453463b76e1ced6.png', '', '', '', 'B', 1662962642, 1677723836),
(176, 28, 1, 5, '478a1b0e77de21000790597ce61cd337.png', 'image/png', '<p>132.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', 'a95ed363a35c5afdbfbf6cd4fb6ec1bb.png', 'f618476dfbc961c7885196ab8d2428bd.png', 'a90c84c8a0bc9b533e615b75536dc163.png', 'e0d1860dd552c384535c8fab247c6e0a.png', '6f8705f368fb93ed1241703fbb704cc5.png', '', '', '', 'A', 1662962742, 1677723936),
(177, 28, 1, 5, 'ea3164e55d9f8944f7a47c7d6534e67d.png', 'image/png', '<p>133.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', 'ad3fbd794e6e8db6f386b14a0d15163e.png', '63049deb0e22ad5deb2fad6d0ad9253e.png', '6da10360b087f1ce52193a19decce3ae.png', 'ec874deee9890452e7b7b74154eeca94.png', '7b2dc05ccb40a092c120e3119bd5a6ab.png', '', '', '', 'B', 1662962774, 1677724009),
(178, 28, 1, 5, '7496a0cdcff835e623cbc408fa23cc32.png', 'image/png', '<p>134.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', 'bfe1bbd40d35fde6225c8d7db8118055.png', '4c8b86a5884851f6bdce8f2a6b50cf1d.png', '55bfab593192ebe6e6cfdf279ac800e7.png', '55618a8736dcf0354ac35fde17836b18.png', '52375980fec5f111a117f43090422e2f.png', '', '', '', 'D', 1662962806, 1677724090),
(179, 28, 1, 5, 'c007bebc1d89fd1f75aef151f13514b1.png', 'image/png', '<p>135.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', 'ceaa0294ad32f711b88e9577d3878ca5.png', '7ef126f8bf988e6cef28efcba811d969.png', 'fe06fe9586eb6ce14b2468e91cf9a7f5.png', 'd847e3654a5a693527d2f065ccce522d.png', '622a27c96a4674ff66b15e2df9a84e0e.png', '', '', '', 'C', 1662962840, 1677724219),
(180, 28, 1, 5, 'd9e2e71e80384124dad80a04ac07758b.png', 'image/png', '<p>136.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', 'ba05a773f0d8f39eef767038d0e6728d.png', 'b4410c8acc9ac70f2decf0a4c03afccf.png', 'cf789fadd759f6aff0e1a2b3d651b720.png', 'e5c85fc3d8f44cdb9c08e84c01a80064.png', '78dc1215ad62ed40da5e4559d9c24e97.png', '', '', '', 'C', 1662962870, 1677724495),
(181, 29, 1, 5, '57f5fe06946c659a4641bd71b0465a48.png', 'image/png', '<p>137.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '90b7f2e5600edaab35844ad73e9f907b.png', 'a097fdbc16b1c578bd796285b827e38c.png', '32c783c4622e50fa83da3d69331417b0.png', 'd23857062ebaf7ee80b45248549983cd.png', 'bb02dcc5a5825fcc11175100782b2002.png', '', '', '', 'A', 1662962989, 1677724694),
(182, 29, 1, 5, '0f22e5be6151b503aa91a510aff6ab1f.png', 'image/png', '<p>138.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', 'ecf9e9d7d76c86e5294e783c05c74e39.png', 'da7e12577bbf81f7a0583a4dc594b8a3.png', '883fc0541f9bbbad7ea2db57e576815d.png', '1f7ee85b8f94465d462414201a8b4e5a.png', '561a2a013862de73cab81b47b64a9be3.png', '', '', '', 'C', 1662963023, 1677724796),
(183, 29, 1, 5, 'f6cc9bcec8457807248fbce2669d0ec0.png', 'image/png', '<p>139.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '35aa1f2ed6d86189533ec80806da6447.png', 'c301382813140c533b00a4ef4bd0348a.png', '0472de9bab62296eda1a24e698869689.png', '37545439cffacf74599ff7f64a2a03da.png', 'c8b8cc6068e1d4212dfb97c789307745.png', '', '', '', 'D', 1662963056, 1677724863),
(184, 29, 1, 5, '6ef7d67a9a242088228327e64a293b1f.png', 'image/png', '<p>140.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '008e3c7b0ff81b00df582a187037acac.png', 'ae0dc91f843cdfee8d697fc1eeff41ec.png', '89df144046febdfab5aa8980f8d04509.png', 'd0d43392f994e4c849ac926595501c19.png', '621d0ee41d602e815fc13cb21f40d239.png', '', '', '', 'E', 1662963086, 1677724971),
(185, 29, 1, 5, '0f4aee8bd48eb84103b27165be410e2e.png', 'image/png', '<p>141.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', 'dab2de2496b64e35e43d5db724e6c739.png', '5e529e3d2c44702183fef643293b9736.png', '44f5add3af25799bb9ffa0864cd510c2.png', 'db795e70375d4fd68951e63a08ba8fed.png', '1e6c158fb00d82a52c42c940ec81a9e8.png', '', '', '', 'A', 1662963145, 1677725042),
(186, 29, 1, 5, 'f57f338b9858cd342160a0b12f1079ec.png', 'image/png', '<p>142.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '0d600f212c5465b5f6c1cb16ba8d5dce.png', '7bc3647a6b775023eb7aea640f6e951a.png', '7e5f8be055724c7e402678f366a30f92.png', '31794c072dc7dca7280806365984b8c0.png', '853e84e3b199c8a7a24528a7b0a2c10a.png', '', '', '', 'C', 1662963178, 1677725134),
(187, 29, 1, 5, 'c40fc32cefebce27575d5f55d09f071f.png', 'image/png', '<p>143.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '87957e90ced4caec886b9ba690313541.png', '44593acf33ad1bac0dd4a9c2fb63265f.png', '6ac86ced3935ccff5547e6b9407b04df.png', 'd19cdd64fbab6775939f4c4b398991b0.png', '8b0f4538a138fad0fb819532ae6b0de3.png', '', '', '', 'D', 1662963216, 1677725231),
(188, 29, 1, 5, '3e3c2c38350abcd9211864af690222e4.png', 'image/png', '<p>144.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '030679b33858c52f4c7ce41b88ded009.png', '92bda9483f5f33bf7c3c10857d0a8ff1.png', '2a8cfdc8ebfaf0f06422aca07c11047a.png', '47fa57efd73cc815a367c61acd3be3c4.png', '6084b1962d2ffc81c5a7c298ffba7ca0.png', '', '', '', 'C', 1662963245, 1677725345),
(189, 29, 1, 5, 'ea5ba4a395f2b8cd0d89819cad77e054.png', 'image/png', '<p>145.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', 'b0e782a8cf90198174f04acb2b0700db.png', '04e151aea7c8f0774ae593f742371d36.png', 'b2a0fdda5bab2f15d2f9574c11ce717f.png', '84f79eac3b0a650af298eb1a4584482b.png', 'd9327b3f43feb75c7f87a3cd5e99431e.png', '', '', '', 'E', 1662963275, 1677725449),
(190, 29, 1, 5, '4826f5fec299dc5b401268e1a1cfcadd.png', 'image/png', '<p>146.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', 'f0da8e5e8c1fb14938a7d3c74b04aca2.png', 'c6e8ed0b735888477a0ed07d55d86de0.png', 'f211249876daca63051e4ff261d17d15.png', '40bed53dcd359e0f0991cbcb920baae6.png', '76eb78767637a84701e9d36894ef1ea4.png', '', '', '', 'A', 1662963303, 1677725531),
(191, 29, 1, 5, '3636dfcacae879fb5fee36b3f1b32cfa.png', 'image/png', '<p>147.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', 'b343474ef8b70c6d798ed7f0d8d43985.png', '08af4ddc24e2271fa7c42d584ba1db30.png', 'c427b7547de83b22867174ad3084a2a9.png', '6098fdb158339972b0a2a73e779c0671.png', 'b5058da21ee80e57315d542fb0041a29.png', '', '', '', 'B', 1662963330, 1677725615),
(192, 29, 1, 5, 'ed645b5094e3a3ba3d4fc08e6e848ce5.png', 'image/png', '<p>148.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '0ab7b9ea74bdf3054a72b6a4085eca6d.png', 'b916756dc954d82bfb8ca4a49e91ed6d.png', '438cb05e3c248fca5ee1f3ef85ed8f24.png', 'b5d5cf0bb8bd962f2b35aa34bce5f1f2.png', '79cc6950df0178833bff1c8ca00ac66a.png', '', '', '', 'D', 1662963401, 1677725698),
(193, 29, 1, 5, '5fa92b693adbaaabaa3a80b2e24bf127.png', 'image/png', '<p>149.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '84404a6ac8a2561a76a29a8b9342d0de.png', 'bdadce327c3ee3c1e4f90a2546a039dd.png', '32c6a9e9d5b8bbc94d90dac0ffb0b383.png', '5841a7b3ab7d872beb7107f2ec96eda5.png', '34bb405cd15eb9771e7b564ec33da403.png', '', '', '', 'E', 1662963441, 1677725769),
(194, 29, 1, 5, '26a8ad997a7aa325d63d23bcdd5e3748.png', 'image/png', '<p>150.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', 'fde1458010be070484d10d012bca56ec.png', '717f9dbea8831d0276fde04cbf751e42.png', '379473850fd9976d38c1fb5cd01d6c2c.png', '02704726d1b3f6e2339828a50c4a8fe2.png', '6200047735e73c7e8692f66856fe7768.png', '', '', '', 'B', 1662963476, 1677725832),
(195, 29, 1, 5, '519386e8cefe3602c1dac266940955e8.png', 'image/png', '<p>151.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '0c48d73ebc49973e909b268e47c67fd7.png', '3954e7b291733c4c98e198d9b59ea946.png', 'f428186f01cfb699d874aa420dbc6e9c.png', '559adee83de11cc63bfe4214a51eba31.png', 'f1c6c046a0900502534880b15e0c0212.png', '', '', '', 'D', 1662963508, 1677725927),
(197, 29, 1, 5, '0a56fdfb42860b446fd88c351ae779ee.png', 'image/png', '<p>152.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', '70abe065f218dada1c11a3e291efdf30.png', 'ea5aa4657fa9bb3ffaa42dea158ade2c.png', '7128a350146a4b24baaa1b8ab6e7b550.png', '423c52a89ee96ea058161e2d277287f2.png', '5d0fc32f8ca5694bec76c089c010af7d.png', '', '', '', 'B', 1662963556, 1677726008);
INSERT INTO `tbl_psikotes_soal` (`id_soalPsikotes`, `ujian_id`, `bobot`, `jumlah_opsi`, `file`, `tipe_file`, `soal`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `opsi_e`, `opsi_f`, `opsi_g`, `opsi_h`, `file_a`, `file_b`, `file_c`, `file_d`, `file_e`, `file_f`, `file_g`, `file_h`, `jawaban`, `created_on`, `updated_on`) VALUES
(198, 29, 1, 5, 'bfdd6042fdb571db15215eadd5628dd5.png', 'image/png', '<p>153.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', 'd2ea13b1316179e2f5043268dd7e1050.png', '051a64723aaad3a1aa2a670b99de7799.png', '33a5e08114884350f32867fd56db44a3.png', '6ff553cf820b2fa34f5ead756b6cff66.png', '286f1f94750c3fbfd6533fdc66dc9601.png', '', '', '', 'A', 1662963587, 1677726094),
(199, 29, 1, 5, '6c5dabe97038ddc17fb8b0a80ac13c47.png', 'image/png', '<p>154.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', 'b398cd8b701aad75016c091df0441c14.png', '4ea88aac7f8de6e71910ba2785dd5d8f.png', '9d27eb33ae880bca490b536b253ae081.png', 'ee2aabc00fe97b06d20261fc660c39af.png', '24b72c1048b2a10c0a884a94be32f78b.png', '', '', '', 'E', 1662963620, 1677726240),
(200, 29, 1, 5, 'f3702e5d112420053dfb0297735081c7.png', 'image/png', '<p>155.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', 'f805bfd12903ee20a430414a5cb63f3a.png', '31ebaf62acf1686fb4c2a6c891cb05c6.png', '476939a62ccab4ecf38046cac9b87a19.png', 'a22d441a41e85bca639756c3099c8e26.png', '10bdd7585c0e7bfab8a1c69901522de8.png', '', '', '', 'B', 1662963652, 1677726341),
(201, 29, 1, 5, 'c5a75cf121a3820378ef90ba7b64ad37.png', 'image/png', '<p>156.</p>', '<p>a)</p>', '<p>b)</p>', '<p>c)</p>', '<p>d)</p>', '<p>e)</p>', '', '', '', 'fab5185daf2bf7113f1af72db3c9332f.png', '8a748cee915f19e5a73fa3baef1baa56.png', '71abde55fce1189bcf87a0b5ae0d7509.png', '1876138c2fe2c4a539a167e3e76f8925.png', 'a608b11dee0149f55838681e507f085d.png', '', '', '', 'C', 1662963691, 1677726425),
(202, 22, 1, 5, '', '', '<p>1. Pengaruh seseorang terhadap orang lain seharusnya bergantung pada...</p>', '<p>a) kekuasaan</p>', '<p>b) bujukan</p>', '<p>c) kekayaan</p>', '<p>d) keberanian</p>', '<p>e) kewibawaan</p>', '', '', '', '', '', '', '', '', '', '', '', 'E', 1664175730, 1664175730),
(203, 22, 1, 5, '', '', '<p>2. Lawannya \"hemat\" adalah...</p>', '<p>a) murah</p>', '<p>b) kikir</p>', '<p>c) boros</p>', '<p>d) bernilai</p>', '<p>e) kaya</p>', '', '', '', '', '', '', '', '', '', '', '', 'C', 1664175793, 1664175793),
(204, 22, 1, 5, '', '', '<p>3. ....... tidak termasuk cuaca.</p>', '<p>a) angin puyuh</p>', '<p>b) halilintar</p>', '<p>c) salju</p>', '<p>d) gempa bumi</p>', '<p>e) kabut</p>', '', '', '', '', '', '', '', '', '', '', '', 'D', 1664175856, 1664175856),
(205, 22, 1, 5, '', '', '<p>4. Lawannya \"setia\" adalah...</p>', '<p>a) cinta</p>', '<p>b) benci</p>', '<p>c) persahabatan</p>', '<p>d) khianat</p>', '<p>e) permusuhan</p>', '', '', '', '', '', '', '', '', '', '', '', 'D', 1664175929, 1664175929),
(206, 22, 1, 5, '', '', '<p>5. Seekor kuda selalu mempunyai...</p>', '<p>a) kandang</p>', '<p>b) ladam</p>', '<p>c) pelana</p>', '<p>d) kuku</p>', '<p>e) surai</p>', '', '', '', '', '', '', '', '', '', '', '', 'D', 1664175992, 1664175992),
(207, 22, 1, 5, '', '', '<p>6. Seorang paman.... lebih tua dari kemenakannya.</p>', '<p>a) jarang</p>', '<p>b) biasanya</p>', '<p>c) selalu</p>', '<p>d) tidak pernah</p>', '<p>e) kadang-kadang</p>', '', '', '', '', '', '', '', '', '', '', '', 'B', 1664176058, 1664176058),
(208, 22, 1, 5, '', '', '<p>7. Pada jumlah yang sama, nilai kalori yang tertinggi terdapat pada...</p>', '<p>a) ikan</p>', '<p>b) daging</p>', '<p>c) lemak</p>', '<p>d) tahu</p>', '<p>e) sayuran</p>', '', '', '', '', '', '', '', '', '', '', '', 'C', 1664176135, 1664176135),
(209, 22, 1, 5, '', '', '<p>8. Pada suatu pertandingan selalu terdapat...</p>', '<p>a) lawan</p>', '<p>b) wasit</p>', '<p>c) penonton</p>', '<p>d) sorak</p>', '<p>e) kemenangan</p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1664176201, 1664176201),
(210, 22, 1, 5, '', '', '<p>9. Suatu pernyataan yang belum dipastikan, disebut sebagai pernyataan yang...</p>', '<p>a) paradoks</p>', '<p>b) tergesa-gesa</p>', '<p>c) mempunyai arti rangkap</p>', '<p>d) menyesatkan</p>', '<p>e) hipotesis</p>', '', '', '', '', '', '', '', '', '', '', '', 'E', 1664176312, 1664176312),
(211, 22, 1, 5, '', '', '<p>10. Pada sepatu selalu terdapat...</p>', '<p>a) kulit</p>', '<p>b) sol</p>', '<p>c) tali sepatu</p>', '<p>d) gesper</p>', '<p>e) lidah</p>', '', '', '', '', '', '', '', '', '', '', '', 'B', 1664176371, 1664176371),
(219, 31, 1, 1, '', '', '<p>Hafalkan kata-kata berikut selama 3 menit.</p><p xss=\"removed\"></p><p xss=\"removed\">BUNGA  : Soka, Larat, Flamboyan, Yasmin, Dahlia</p><p xss=\"removed\">PERKAKAS  : Wajan, Jarum, Kikir, Cangkul, Palu</p><p xss=\"removed\">BURUNG  : Itik, Elang, Walet, Tekukur, Nuri</p><p xss=\"removed\">KESENIAN  : Quintet, Arca, Opera, Gamelan, Ukiran</p><p xss=\"removed\">BINTANG  : Musang, Rusa, Beruang, Zebra, Harimau</p>', '<p>hafal</p>', '<p>hafal<br></p>', '<p>hafal<br></p>', '<p>hafal<br></p>', '<p>hafal<br></p>', '', '', '', '', '', '', '', '', '', '', '', 'A', 1722908161, 1722911140);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_psikotes_ujian`
--

CREATE TABLE `tbl_psikotes_ujian` (
  `id_ujian` int NOT NULL,
  `kategoriPsikotes_id` int NOT NULL,
  `nama_ujian` varchar(200) NOT NULL,
  `urutan` int DEFAULT NULL,
  `instruksi` text NOT NULL,
  `jumlah_soal` int NOT NULL,
  `waktu` int NOT NULL,
  `jenis` enum('acak','urut') NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `terlambat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `tbl_psikotes_ujian`
--

INSERT INTO `tbl_psikotes_ujian` (`id_ujian`, `kategoriPsikotes_id`, `nama_ujian`, `urutan`, `instruksi`, `jumlah_soal`, `waktu`, `jenis`, `tgl_mulai`, `terlambat`) VALUES
(22, 1, 'SUBTES A', 1, '<p xss=removed>Lengkapilah pernyataan berikut dengan memilih\nsalah satu jawaban di\npilihan ganda…</p><p xss=removed></p><p xss=removed>Contoh: </p><p xss=removed>Seekor kuda memiliki kesamaan terbanyak dengan seekor…</p><p>\n\n\n\n\n\n\n\n</p><div xss=removed>a.Kucing  b. Bajing  c.\nKeledai  d. Lembu  e.\nAnjing</div>', 20, 1, 'urut', '2024-11-29 08:00:00', '2025-03-31 23:00:00'),
(23, 1, 'SUBTES B', 2, '<p xss=removed>Bagian\r\nsoal berikut terdiri dari\r\nlima kata (a, b, c, d, dan e). Empat dari\r\nlima kata tersebut memiliki kesamaan. Carilah\r\nkata kelima\r\nyang tidak memiliki kesamaan dengan\r\nkata lainnya</p>', 20, 6, 'urut', '2024-11-29 08:00:00', '2025-02-27 23:00:00'),
(24, 1, 'SUBTES C', 3, '<p xss=removed>Terdapat tiga\r\nkata. Antara kata pertama dan kata kedua punya hubungan. Antara kata ketiga dan salah satu diantara\r\nkata pilihan harus\r\njuga terdapat hubungan\r\nyang sama, maka carilah\r\nkata yang dimaksud.<br><br></p><p xss=removed>Hutan : Pohon = tembok :\r\n?</p><p xss=removed>\r\n\r\n</p><p xss=removed>a.\r\nBatu bata  b. rumah  c.\r\nsemen  d. putih  e.\r\ndinding</p>', 20, 7, 'urut', '2024-11-29 08:00:00', '2025-02-27 23:00:00'),
(25, 1, 'SUBTES D', 4, '<p>Ditentukan dua kata.</p><p>Carilah satu perkataan yang meliputi pengertian kedua kata tadi.</p><p>Tulislah perkataan itu pada kolom yang tersedia.</p><p><br></p><p>Contoh</p><p>Ayam - itik</p><p>Perkataan \"burung\" dapat meliputi kedua kata tadi.</p><p>Maka tulis di kolom: burung</p>', 16, 8, 'urut', '2024-11-29 08:00:00', '2025-02-27 23:00:00'),
(26, 1, 'SUBTES E', 5, '<p>Persoalan berikutnya ialah soal-soal hitungan.</p><p>Contoh</p><p>Sebatang pensil harganya 25 rupiah. Berapakah harga 3 batang?</p><p>Jawabannya ialah: 75 </p><p>Cukup tulis angkanya saja, TANPA menulis satuan (rp/ meter)</p>', 20, 10, 'urut', '2024-11-29 08:00:00', '2025-02-27 23:00:00'),
(27, 1, 'SUBTES F', 6, '<p>Pada persoalan berikut akan diberikan deret angka.</p><p>Contoh</p><p>2, 4, 6, 8, 10, 12, 14, ?</p><p>Jawaban: 16</p>', 20, 10, 'urut', '2024-11-29 08:00:00', '2025-02-27 23:00:00'),
(28, 1, 'SUBTES G', 7, '<p xss=removed>Terdapat gambar a, b, c, d, dan e. Soal-soal berikut terdiri dari potongan-potongan gambar yang\r\napabila digabungkan, disusun sedemikan rupa akan menjadi gambar utuh tanpa kelebihan sudut/ruang. Carilah gambar tersebut</p>', 20, 8, 'urut', '2024-11-29 08:00:00', '2025-02-27 23:00:00'),
(29, 1, 'SUBTES H', 8, '<p xss=removed>Terdapat kubus a, b, c, d, dan e. Setiap kubus memiliki 6 sisi setiap sisi terdapat tanda yang\r\nberlainan, 3 tanda bisa terlihat dan\r\n3 tanda lain\r\nbelum terlihat. Kubus-kubus ini berbeda, artinya kubus-kubus itu\r\npunya tanda yang\r\nsama, tetapi susunannya berlainan.</p><p xss=removed></p><p>\r\n\r\n\r\n\r\n</p><p xss=removed>Setiap soal merupakan salah satu dari 5 kubus dengan posisi/kedudukan yang berbeda. Tugas Anda, carilah kubus yang dimaksud. Kubus ini dapat diputar, digulingkan, diputar dan digulingkan di pikiran Anda sehingga mungkin saja terdapat tanda baru.</p>', 20, 9, 'urut', '2024-11-29 08:00:00', '2025-02-27 23:00:00'),
(31, 1, 'PENGANTAR SUBTES I', 9, '<p>Silakan hafalkan kata-kata berikut untuk menjawab soal Tes Intelegensi 1 Subtest I</p>', 1, 3, 'urut', '2024-11-29 10:57:40', '2025-02-27 23:00:00'),
(32, 1, 'SUBTES I', 10, '<p>Sebelum memulai pastikan saudara telah membuka bagian \"PENGANTAR TES INTELEGENSI 1 SUBTEST 1\".</p><p>Pada bagian ini adalah soal dari kata-kata yang telah anda hafalkan pada bagian \"PENGANTAR TES INTELEGENSI 1 SUBTEST 1\"</p>', 20, 6, 'urut', '2024-11-29 08:00:00', '2025-03-01 23:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(128) NOT NULL COMMENT 'login username',
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `kandidat_id` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
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

INSERT INTO `tbl_users` (`userId`, `nama_lengkap`, `username`, `email`, `password`, `kandidat_id`, `roleId`, `hash_key`, `hash_expiry`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'Super Admin', 'superadmin', 'tricahyawbw@gmail.com', '$2y$10$gJa8Tzy.L7vFpsquEmXDhecVMIEE8rXowlS1LjNlPgVXfafziWTb6', '10', 1, NULL, NULL, 1, '2024-12-18 02:26:08', NULL, NULL),
(2, 'Tri Cahya Wibawa', 'user', 'user@user.com', '$2y$10$NNdktlDdv5tNJVvSJ27EduJ61272dj8EJoE3AGtfoZifQKoyOC7hG', '14', 2, NULL, NULL, 2, '2025-03-24 10:38:27', NULL, NULL),
(3, '', 'user2', 'user@user.com', '$2y$10$gq/LQyPicACEYpRk5tzQz.N.NR/TiGQ9h5PVJCRXVvUSxdSoQHfcW', '15', 2, NULL, NULL, 3, '2025-03-24 10:42:31', NULL, NULL),
(4, 'Tri Cahya Wibawa', 'tricahya', 'tricahyawbw@gmail.com', '$2y$10$wX8BqVIfgpnbqV5whLW6HuiYZyFTt0MqmTpXVZEIHKRwf3SYmDiIu', '16', 2, NULL, NULL, 4, '2025-03-24 10:58:22', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indeks untuk tabel `tbl_kandidat`
--
ALTER TABLE `tbl_kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indeks untuk tabel `tbl_kandidat_keluarga`
--
ALTER TABLE `tbl_kandidat_keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indeks untuk tabel `tbl_kandidat_pendidikan`
--
ALTER TABLE `tbl_kandidat_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `tbl_kandidat_pengalamankerja`
--
ALTER TABLE `tbl_kandidat_pengalamankerja`
  ADD PRIMARY KEY (`id_pengalaman`),
  ADD KEY `kandidat_id` (`kandidat_id`);

--
-- Indeks untuk tabel `tbl_kandidat_sertifikasi`
--
ALTER TABLE `tbl_kandidat_sertifikasi`
  ADD PRIMARY KEY (`id_sertifikasi`);

--
-- Indeks untuk tabel `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indeks untuk tabel `tbl_psikotes_hasil`
--
ALTER TABLE `tbl_psikotes_hasil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ujian_id` (`ujian_id`),
  ADD KEY `mahasiswa_id` (`kandidat_id`);

--
-- Indeks untuk tabel `tbl_psikotes_kategori`
--
ALTER TABLE `tbl_psikotes_kategori`
  ADD PRIMARY KEY (`id_kategoriPsikotes`);

--
-- Indeks untuk tabel `tbl_psikotes_soal`
--
ALTER TABLE `tbl_psikotes_soal`
  ADD PRIMARY KEY (`id_soalPsikotes`),
  ADD KEY `tb_soal_ibfk_1` (`ujian_id`);

--
-- Indeks untuk tabel `tbl_psikotes_ujian`
--
ALTER TABLE `tbl_psikotes_ujian`
  ADD PRIMARY KEY (`id_ujian`),
  ADD KEY `matkul_id` (`kategoriPsikotes_id`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id_faq` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_kandidat`
--
ALTER TABLE `tbl_kandidat`
  MODIFY `id_kandidat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_kandidat_keluarga`
--
ALTER TABLE `tbl_kandidat_keluarga`
  MODIFY `id_keluarga` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tbl_kandidat_pendidikan`
--
ALTER TABLE `tbl_kandidat_pendidikan`
  MODIFY `id_pendidikan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_kandidat_pengalamankerja`
--
ALTER TABLE `tbl_kandidat_pengalamankerja`
  MODIFY `id_pengalaman` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_kandidat_sertifikasi`
--
ALTER TABLE `tbl_kandidat_sertifikasi`
  MODIFY `id_sertifikasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  MODIFY `id_lowongan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `tbl_psikotes_hasil`
--
ALTER TABLE `tbl_psikotes_hasil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT untuk tabel `tbl_psikotes_kategori`
--
ALTER TABLE `tbl_psikotes_kategori`
  MODIFY `id_kategoriPsikotes` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tbl_psikotes_soal`
--
ALTER TABLE `tbl_psikotes_soal`
  MODIFY `id_soalPsikotes` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT untuk tabel `tbl_psikotes_ujian`
--
ALTER TABLE `tbl_psikotes_ujian`
  MODIFY `id_ujian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
