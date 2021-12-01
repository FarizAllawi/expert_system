-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2021 pada 19.29
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disease-diagnosis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `password` int(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `aturan`
--

CREATE TABLE `aturan` (
  `kd_aturan` int(10) NOT NULL,
  `kd_gejala` int(10) NOT NULL,
  `kd_penyakit` int(10) NOT NULL,
  `nl_prob` decimal(2,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aturan`
--

INSERT INTO `aturan` (`kd_aturan`, `kd_gejala`, `kd_penyakit`, `nl_prob`) VALUES
(1, 1, 1, '0.7'),
(2, 2, 1, '0.8'),
(3, 3, 1, '0.7'),
(4, 4, 1, '0.6'),
(5, 5, 1, '0.8'),
(6, 6, 1, '0.6'),
(7, 7, 2, '0.9'),
(8, 8, 2, '0.8'),
(9, 9, 2, '0.8'),
(10, 10, 2, '0.6'),
(11, 2, 3, '0.8'),
(12, 11, 3, '0.7'),
(13, 12, 3, '0.6'),
(14, 13, 3, '0.8'),
(15, 14, 3, '0.7'),
(16, 15, 3, '0.7'),
(17, 16, 3, '0.6'),
(18, 17, 3, '0.8'),
(19, 12, 4, '0.6'),
(20, 18, 4, '0.7'),
(21, 19, 4, '0.8'),
(22, 20, 4, '0.7'),
(23, 21, 4, '0.7'),
(24, 22, 4, '0.5'),
(25, 23, 4, '0.6'),
(26, 1, 5, '0.5'),
(27, 2, 5, '0.5'),
(28, 24, 5, '0.7'),
(29, 25, 5, '0.7'),
(30, 26, 5, '0.8'),
(31, 27, 5, '0.6'),
(32, 28, 5, '0.3'),
(33, 29, 5, '0.3'),
(34, 30, 5, '0.8'),
(35, 31, 5, '0.6'),
(36, 4, 6, '0.5'),
(37, 32, 6, '0.6'),
(38, 33, 6, '0.8'),
(39, 34, 6, '0.4'),
(40, 35, 6, '0.3'),
(41, 36, 6, '0.6'),
(42, 1, 7, '0.5'),
(43, 2, 7, '0.7'),
(44, 4, 7, '0.3'),
(45, 20, 7, '0.3'),
(46, 37, 7, '0.4'),
(47, 38, 7, '0.7'),
(48, 39, 7, '0.5'),
(49, 40, 8, '0.7'),
(50, 41, 8, '0.5'),
(51, 2, 9, '0.7'),
(52, 4, 9, '0.6'),
(53, 19, 9, '0.3'),
(54, 20, 9, '0.6'),
(55, 22, 9, '0.5'),
(56, 25, 9, '0.7'),
(57, 32, 9, '0.7'),
(58, 42, 9, '0.5'),
(59, 43, 9, '0.2'),
(60, 44, 9, '0.5'),
(61, 45, 9, '0.4'),
(62, 46, 10, '0.6'),
(63, 47, 10, '0.5'),
(64, 48, 10, '0.4'),
(65, 49, 10, '0.5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` int(10) NOT NULL,
  `kd_pengunjung` int(10) NOT NULL,
  `kd_penyakit` int(10) NOT NULL,
  `persen` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `kd_gejala` int(10) NOT NULL,
  `nm_gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`kd_gejala`, `nm_gejala`) VALUES
(1, 'Demam'),
(2, 'Sakit Kepala'),
(3, 'Batuk Kering'),
(4, 'Nafsu Makan Berkurang'),
(5, 'Gatal Pada Kulit Seperti Bekas Gigitan Serangga'),
(6, 'Timbulnya Benjolan Berisi Cairan'),
(7, 'Timbulnya Gelembung Kecil Dikulit'),
(8, 'Gelembung Yang Memerah'),
(9, 'Gelembing Terasa Panas'),
(10, 'Gelembung Sangat Mudah Pecah'),
(11, 'Demam Ringan Sedang'),
(12, 'Nyeri tenggorokan'),
(13, 'Nyeri Leher'),
(14, 'Kaku Pada Otot'),
(15, 'Otot Lemas'),
(16, 'Kurangnya Kepekaan Sentuhan (Mati Rasa)'),
(17, 'Kelumpuhan Ringan'),
(18, 'Badan Panas'),
(19, 'Pilek'),
(20, 'Batuk'),
(21, 'Bercak Komlik'),
(22, 'Nyeri Otot'),
(23, 'Mata Merah'),
(24, 'Tidak Enak Badan Secara Keseluruhan'),
(25, 'Kelelahan'),
(26, 'Meriang'),
(27, 'Hilang Nafsu Makan'),
(28, 'Mual'),
(29, 'Muntah'),
(30, 'Diare'),
(31, 'Rasa Sakit Diperut'),
(32, 'Sakit Pada Tenggorokan'),
(33, 'Kenaikan Suhu Badan'),
(34, 'Telinga Sering Berdengung'),
(35, 'Muliut Terasa Nyeri dan Kaku Saat mengunyah Makanan'),
(36, 'Muncul Benjolan Kecil pada bagian leher'),
(37, 'Sesak nafas'),
(38, 'Infeksi Saluran Pernapasan Akut'),
(39, 'Radang Tenggorokan'),
(40, 'Terdapat Bintil-bintil Kecil pada Tubuh yang Keras dan Berakar'),
(41, 'Dalam Waktu Lama dan Tanpa Pengobatan Bintil akan Membesar'),
(42, 'Hidung Tersumbat'),
(43, 'Bersin'),
(44, 'Kelemahan Otot'),
(45, 'Mengigil Tak Terkendali'),
(46, 'Terbentuknya Pupil (Benjolan) Yang Cukup Banyak'),
(47, 'Benjolan Yang Berbatas Tegas, Licin, Berbentuk Kubah dan Sewarna Dengan kulit'),
(48, 'Benjolan Dapat Meradang Secara Spontan karena Akibat garukan'),
(49, 'Benjolan yang meradangan memberikan gambaran benjolan merah dan hangat'),
(50, 'Mengigil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala_pengunjung`
--

CREATE TABLE `gejala_pengunjung` (
  `id` int(10) NOT NULL,
  `kd_pengunjung` int(10) NOT NULL,
  `kd_gejala` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `kd_pengunjung` int(10) NOT NULL,
  `nm_pengunjung` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_diagnosa` date DEFAULT NULL,
  `gejala` text DEFAULT NULL,
  `kd_penyakit` int(10) DEFAULT NULL,
  `nl_bayes` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`kd_pengunjung`, `nm_pengunjung`, `email`, `alamat`, `tgl_diagnosa`, `gejala`, `kd_penyakit`, `nl_bayes`) VALUES
(1, 'Fariz Allawi Ghozi', 'farizallawi@example.com', 'Jl Sultan Agung', '2021-12-01', 'Badan Panas, Batuk, Batuk Kering', 4, '49.00'),
(2, 'Fariz  Allawi  Ghozi', 'fariz@example.com', 'Jl Sultan Agung', '2021-12-01', 'Badan Panas, Batuk, Batuk Kering', 4, '49.00'),
(3, 'Fariz  Allawi  Ghozi', 'fariz@example.com', 'Jl Sultan Agung', '2021-12-01', 'Batuk, Badan Panas, Bersin, Demam, Kenaikan Suhu Badan', 4, '30.00'),
(4, 'Fariz  Allawi  Ghozi', 'fariz@example.com', 'Jl Sultan Agung', '2021-12-01', 'Mual, Meriang, Mengigil Tak Terkendali', 5, '67.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `kd_penyakit` int(10) NOT NULL,
  `nm_penyakit` varchar(100) NOT NULL,
  `np_penyakit` float DEFAULT NULL,
  `pengobatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`kd_penyakit`, `nm_penyakit`, `np_penyakit`, `pengobatan`) VALUES
(1, 'Cacar Air', 0.7095, 'Mandi menggunakan air hangat, Menggunakan lotion dari dokter pada daerah yang gatal, Istirahat yang cukup, Makan makanan yang bergizi '),
(2, 'Herpes Simpleks', 0.7903, 'Pengobatan dengan asiklover, Pengobatan dengan valasiklovir dengan memakai asiklovir sebagai salah satu kandungan aktifnya, Pengobatan dengan famsiklovir yang mempunyai fungsi untuk menghabat terjadinya replika pada virus herpes'),
(3, 'Polio', 0.7211, 'Imunisasi polio yang dilakukan pada saat bayi atau anak-anak, Bila memasak air harus mendidih dengan sempurna, Biasakan menjalanai pola hidup yang sehat, Senitasi yang baik dan bersih'),
(4, 'Campak', 0.6696, 'Istirahat yang cukup, Mandi dengan air hangat, Minum banyak untuk menghindari dehidrasi, Gunakan parasetamol dan ibuprofen yang membantu mengatasi gejala-gejala penyakit campak'),
(5, 'Hepatitis', 0.65, 'Hindari mengkonsumsi alkohol, Hindari Obat-obatan yang dapat merusak hati seperti acetaminophen, Diet sehat dan berimbang, Penrbanyak makan buah dan sayur, Latihan fisik secara teratur, Istirahat yang cukup'),
(6, 'Gondok', 0.5813, 'Terapi pergantian hormon untuk hipotirodisme dengan mengganti hormon tiroid,Obat penurunan hormon tiroid untuk menurunkan kadar hormon tiroid dengan menghambat proses produksinya, Terapi iodin radioaktif untuk menghancurkan sel-sel tiroid, Langkah operasi jika benjolan terus membesar hingga menggangu pernapasan'),
(7, 'Sars', 0.5353, 'Tidak berkunjung ke wilayah yang sudah terjangkit sars, Hindari berdekatan dengan pernderita atau pependerita bergejala sama, Gunakan masker penutup hidung dan mulut serta sarung tangan dilakukan untuk menghindari penularan melalui cairan dan udara'),
(8, 'Kutil', 0.6167, 'Mandi bersih, Lakukan luluran, Hindari berganti baju dengan orang lain, Hindari seks bebas, Lakukan Imunisasi HPV'),
(9, 'Commond Cold', 0.5667, 'Pemberian obat analgetik untuk mengurangi rasa nyeri, Pemberian obat antipiretika untuk menurunkan panas badan, Pemberian obat antihistamin untuk mengurangi efek histamin tubuh, Pemberian obat tetes hidung'),
(10, 'MCV', 0.51, 'Hindari menyentuh atau menggaruk papul, Tidak pinjam meminjam barang pribadi seperti handuk, baju atau sisir, Hindari kontak seksual sampai papul telah diobati dan sembuh\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit_pengunjung`
--

CREATE TABLE `penyakit_pengunjung` (
  `id` int(10) NOT NULL,
  `kd_pengunjung` int(10) NOT NULL,
  `kd_penyakit` int(10) NOT NULL,
  `jml_gejala` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `aturan`
--
ALTER TABLE `aturan`
  ADD PRIMARY KEY (`kd_aturan`),
  ADD KEY `kd_gejala` (`kd_gejala`),
  ADD KEY `kd_penyakit` (`kd_penyakit`);

--
-- Indeks untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kd_pengunjung` (`kd_pengunjung`),
  ADD KEY `kd_penyakit` (`kd_penyakit`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kd_gejala`);

--
-- Indeks untuk tabel `gejala_pengunjung`
--
ALTER TABLE `gejala_pengunjung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kd_pengunjung` (`kd_pengunjung`),
  ADD KEY `kd_gejala` (`kd_gejala`);

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`kd_pengunjung`),
  ADD KEY `kd_penyakit` (`kd_penyakit`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kd_penyakit`);

--
-- Indeks untuk tabel `penyakit_pengunjung`
--
ALTER TABLE `penyakit_pengunjung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kd_penyakit` (`kd_penyakit`),
  ADD KEY `kd_pengunjung` (`kd_pengunjung`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `aturan`
--
ALTER TABLE `aturan`
  MODIFY `kd_aturan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `kd_gejala` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `gejala_pengunjung`
--
ALTER TABLE `gejala_pengunjung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `kd_pengunjung` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `kd_penyakit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `penyakit_pengunjung`
--
ALTER TABLE `penyakit_pengunjung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aturan`
--
ALTER TABLE `aturan`
  ADD CONSTRAINT `aturan_ibfk_1` FOREIGN KEY (`kd_penyakit`) REFERENCES `penyakit` (`kd_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aturan_ibfk_2` FOREIGN KEY (`kd_gejala`) REFERENCES `gejala` (`kd_gejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD CONSTRAINT `diagnosa_ibfk_1` FOREIGN KEY (`kd_pengunjung`) REFERENCES `pengunjung` (`kd_pengunjung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `diagnosa_ibfk_2` FOREIGN KEY (`kd_penyakit`) REFERENCES `penyakit` (`kd_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `gejala_pengunjung`
--
ALTER TABLE `gejala_pengunjung`
  ADD CONSTRAINT `gejala_pengunjung_ibfk_1` FOREIGN KEY (`kd_pengunjung`) REFERENCES `pengunjung` (`kd_pengunjung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gejala_pengunjung_ibfk_2` FOREIGN KEY (`kd_gejala`) REFERENCES `gejala` (`kd_gejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD CONSTRAINT `pengunjung_ibfk_1` FOREIGN KEY (`kd_penyakit`) REFERENCES `penyakit` (`kd_penyakit`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penyakit_pengunjung`
--
ALTER TABLE `penyakit_pengunjung`
  ADD CONSTRAINT `penyakit_pengunjung_ibfk_1` FOREIGN KEY (`kd_pengunjung`) REFERENCES `pengunjung` (`kd_pengunjung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penyakit_pengunjung_ibfk_2` FOREIGN KEY (`kd_penyakit`) REFERENCES `penyakit` (`kd_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
