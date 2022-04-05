-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 12:01 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ufilmid`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(100) NOT NULL,
  `judul` text NOT NULL,
  `poster` text NOT NULL,
  `vidio` varchar(500) NOT NULL,
  `genre` varchar(500) NOT NULL,
  `deskripsi` text NOT NULL,
  `rate` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `negara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul`, `poster`, `vidio`, `genre`, `deskripsi`, `rate`, `tahun`, `waktu`, `negara`) VALUES
(1, 'Scooby-Doo! Meets Courage the Cowardly Dog', 'Scooby-Doo.jpg', 'Scooby-Doo.mp4', 'Animasi, Komedi', 'Film ini melibatkan Scooby-Doo dan teman-temannya menemukan benda aneh di tengah Nowhere, Kansas, kampung halaman Courage dan pemiliknya, Eustace dan Muriel Bagge.', '6.6', '2021', '1 jam 18 menit', 'USA'),
(22, 'Riam Fighting Angel', 'download.jfif', 'gm21.link.Riamfightingangel2020.mp4', 'Action, Adventure, Comedy', 'Setelah keluarga tersayangnya diculik oleh sekelompok gangster brutal, dengan tujuan memaksanya untuk menikah dengan bos mereka, maka Riam harus menemukan cara untuk menyelamatkan anggota keluarganya dan untuk keluar dari keadaan gila / mematikan ini.', '5.4', '2020', '1 jam 43 menit 29 detik', 'Thailand'),
(23, 'Interstellar', '250px-Interstellar_film_poster.jpg', 'gm21.Interstellar.mp4', 'Adventure, Drama, Sci-Fi', 'Masa depan bumi telah diliputi oleh bencana, kelaparan, dan kekeringan. Hanya ada satu cara untuk memastikan kelangsungan hidup umat manusia: perjalanan antarbintang. Lubang cacing yang baru ditemukan di tata surya kita memungkinkan tim astronot pergi ke tempat yang belum pernah dikunjungi manusia sebelumnya, sebuah planet yang mungkin memiliki lingkungan yang tepat untuk menopang kehidupan manusia.', '8.6', '2014', '2 jam 49 menit 3 detik', 'USA'),
(24, 'The Medium', '052211500_1634361315-MV5BMjVlYzJhMGQtZjMzNC00ZDc1LWFjZDMtZDk1ZTQxZTdhNDZjXkEyXkFqcGdeQXVyNzEyMTA5MTU_._V1_FMjpg_UY720_.jpg', '[SAVEFILM21.INFO] The.Medium.2021.720P.Web-Dl.mp4', 'Horror', 'Sebuah kisah mengerikan tentang warisan seorang dukun di wilayah Isan Thailand. Apa yang bisa dimiliki anggota keluarga mungkin bukan Dewi yang mereka bayangkan.', '6.7', '2021', '2 jam 10 menit 36 detik', 'Thailand'),
(25, 'I Leave My Heart In Lebanon', 'MV5BZTllZGUzNmQtMGI3OS00OTcyLTg0YWUtYjIwMmFlM2E4YTU3XkEyXkFqcGdeQXVyMjU0ODQ5NTA@._V1_.jpg', 'driveid-117258-terbit21-com-pasukan-garuda-i-leave-my-heart-in-lebanon-2016.mp4', 'Action, Drama, War', 'Anggota Kontingen Garuda, Kapten Satria, Letnan Arga, dan Sersan Gulamo, ditugaskan ke Lebanon sebagai pasukan penjaga perdamaian. Satria antara lain harus menengahi perselisihan antara tentara Israel dan tentara Lebanon, dan berhasil membebaskan tentara Spanyol dari pasukan Hizbullah. Selama menjalankan misi di Lebanon, Kontingen Garuda juga memberikan bantuan sosial kepada warga sekitar. Kapten Satria bertemu dengan Rania, seorang guru sekolah dasar, saat berkunjung ke sekolah dalam rangka memberikan pemeriksaan dan informasi kesehatan. Selama di Indonesia, Diah, pacar Satria, semakin pusing, sejak muncul Andri, pemuda lulusan Inggris yang sukses di bisnis properti. Andri mencintai Diah dan dia didukung oleh ibunya. Ayah Diah, di sisi lain, menyuruh Diah menunggu Satria. Selanjutnya, di Lebanon Satria tidak mungkin menikahi Rania dan tetap di sana, kecuali dia keluar dari TNI.', '5.9', '2016', '1 jam 30 menit 14 detik', 'Indonesia'),
(26, 'Confinement', '2149_The_Aftermath_Confinement-998034242-large.jpg', 'gm21.link.2149theaftermath.mp4', 'Sci-Fi', 'Ditetapkan di masa depan yang menindas di mana semua orang terhubung melalui komputer, 2149: The Aftermath menceritakan petualangan seorang pemuda (diperankan oleh Nick Krause) yang dipaksa keluar ke dunia nyata dan menemukan kebenaran tentang dunia itu dan hidupnya sendiri yang tidak pernah dia ketahui. diimpikan.', '5.1', '2016', '1 jam 16 menit 57 detik', 'Canada'),
(27, 'Finch', 'MV5BZTMxYjk3MmItMzk1OC00NmRhLThlMjYtNmQyNzA0MzgxMWI2XkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_FMjpg_UX1000_.jpg', 'driveid-132413-webdl-1080-terbit21-com-finch-2021.mp4', 'Adventure, Drama, Sci-Fi', 'Di bumi pasca-apokaliptik, sebuah robot, yang dibangun untuk melindungi kehidupan anjing kesayangan penciptanya, belajar tentang kehidupan, cinta, persahabatan, dan apa artinya menjadi manusia.', '6.9', '2021', '1 jam 55 menit 39 detik', 'UK, USA');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(100) NOT NULL,
  `id_film` int(100) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `id_film`, `nama`, `komentar`, `tanggal`) VALUES
(4, 1, 'Penonton', 'Bagus Filmnya', '2021-12-16'),
(6, 1, 'Penonton 2', 'Film Scooby Doo terbaru nih', '2021-12-16'),
(7, 1, 'Rafli', 'Bagus bet dah', '2021-12-16'),
(8, 9, 'sdfsdf', 'asdgasdfgasdfgasdfg', '2021-12-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
