-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 06:47 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_modul6`
--

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `Nim` varchar(10) NOT NULL,
  `kode_file` varchar(30) NOT NULL,
  `caption` text NOT NULL,
  `file_gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`Nim`, `kode_file`, `caption`, `file_gambar`) VALUES
('6701174091', '', 'juga menyimpan anggrek aneka jenis dan fauna yang hanya terdapat di Mentawai. Siamang kerdil, lutung Mentawai dan beruk Simakobu adalah contoh primata yang menarik untuk bahan penelitian dan objek wisata.\r\nContoh deskripsi berupa fiksi:\r\n\r\nSalju tipis melapis rumput, putih berkilau diseling warna jingga; bayang matahari senja yang memantul. Angin awal musim dingin bertiup menggigilkan, mempermainkan daun-daun sisa musim gugur dan menderaikan bulu-bulu burung berwarna kuning kecoklatan yang sedang meloncat-loncat dari satu ranting ke ranting yang lain.\r\nTopik yang tepat untuk deskripsi misalnya: Keindahan Bukit Kintamani, Suasana pelaksanaan, Promosi, Kompetensi Siswa SMK Tingkat Nasional, Keadaan ruang praktik, Keadaan daerah yang dilanda bencana.\r\n\r\nLangkah menyusun deskripsi: Tentukan objek atau tema yang akan dideskripsikan, Tentukan tujuan, Tentukan aspek-aspek yang akan dideskripsikan dengan melakukan pengamatan, Susunlah aspek-aspek tersebut ke dalam urutan yang baik, apakah urutan lokasi, urutan waktu, atau urutan menurut kepentingan, Kembangkan kerangka menjadi deskripsi\r\n\r\nNarasi', 'IMG_6455.jpeg'),
('6701174091', '', 'juga menyimpan anggrek aneka jenis dan fauna yang hanya terdapat di Mentawai. Siamang kerdil, lutung Mentawai dan beruk Simakobu adalah contoh primata yang menarik untuk bahan penelitian dan objek wisata.\r\nContoh deskripsi berupa fiksi:\r\n\r\nSalju tipis melapis rumput, putih berkilau diseling warna jingga; bayang matahari senja yang memantul. Angin awal musim dingin bertiup menggigilkan, mempermainkan daun-daun sisa musim gugur dan menderaikan bulu-bulu burung berwarna kuning kecoklatan yang sedang meloncat-loncat dari satu ranting ke ranting yang lain.\r\nTopik yang tepat untuk deskripsi misalnya: Keindahan Bukit Kintamani, Suasana pelaksanaan, Promosi, Kompetensi Siswa SMK Tingkat Nasional, Keadaan ruang praktik, Keadaan daerah yang dilanda bencana.\r\n\r\nLangkah menyusun deskripsi: Tentukan objek atau tema yang akan dideskripsikan, Tentukan tujuan, Tentukan aspek-aspek yang akan dideskripsikan dengan melakukan pengamatan, Susunlah aspek-aspek tersebut ke dalam urutan yang baik, apakah urutan lokasi, urutan waktu, atau urutan menurut kepentingan, Kembangkan kerangka menjadi deskripsi\r\n\r\nNarasi', 'IMG_6455.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `Nama` varchar(35) NOT NULL,
  `Nim` varchar(10) NOT NULL,
  `Kelas` varchar(15) NOT NULL,
  `Jeniskelamin` varchar(10) NOT NULL,
  `Hobi` text NOT NULL,
  `Fakultas` varchar(35) NOT NULL,
  `Alamat` text NOT NULL,
  `Password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`Nama`, `Nim`, `Kelas`, `Jeniskelamin`, `Hobi`, `Fakultas`, `Alamat`, `Password`) VALUES
('alvin', '6701174091', 'D3MI-41-02', 'Laki-Laki', 'Futsal, Basket, ', 'FIT', 'pbb', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
