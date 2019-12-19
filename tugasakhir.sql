-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 05:02 PM
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
-- Database: `tugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Adi', 'admin01', 'admin01'),
(2, 'Ari', 'admin02', 'admin02');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(2) NOT NULL,
  `nama_makanan` varchar(1000) NOT NULL,
  `pagi` varchar(1000) NOT NULL,
  `siang` varchar(1000) NOT NULL,
  `malam` varchar(1000) NOT NULL,
  `kalori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `pagi`, `siang`, `malam`, `kalori`) VALUES
(1, 'Menu 1', 'Nasi putihSayur Kacang Merah1 buah pisang', 'Singkong rebus1 Buah apel', '2 Buah pisang', '<1000 kalori'),
(2, 'Menu 2', 'Ayam', 'Daging', 'Air', '200');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` varchar(8) NOT NULL,
  `nama_pasien` text NOT NULL,
  `umur` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `hemuglobin` int(11) NOT NULL,
  `lengan_atas` int(11) NOT NULL,
  `lengan_bawah` int(11) NOT NULL,
  `tingkat_aktivitas` varchar(255) NOT NULL,
  `tingkat_stres` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `umur`, `tinggi_badan`, `berat_badan`, `hemuglobin`, `lengan_atas`, `lengan_bawah`, `tingkat_aktivitas`, `tingkat_stres`) VALUES
('S01', 'Veda Anisah', 21, 163, 56, 11, 25, 20, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(8) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `penjelasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama_penyakit`, `penjelasan`) VALUES
('P01', 'Anemia', 'Anemia atau kurang darah adalah suatu kondisi dimana seseorang kekurangan sel darah merah yang mengandung hemoglobin sehingga asupan oksigen dalam tubuh berkurang. Sel darah merah berfungsi sebagai pembawa osigen yang disalurkan keseluruh tubuh. Oksigen yang dibawa nantinya akan diolah menjadi energi untuk kegiatan kita sehari-hari. Jika kita kekurangan sel darah merah atau kandungan hemoglobin yang rendah akan menyebabkan kita cepat lelah serta pengaruh lainnya.'),
('P02', 'Kurang Gizi', 'Kurang gizi atau malnutrisi adalah keadaan dimana seseorang mengalami kekurangan nutrisi secara terus menerus. Asupan nutrisi yang baik akan mempengaruhi tumbuh kembang ibu hamil dan janin. Oleh karena itu disarankan untuk mengkonsumsi makanan dengan gizi seimbang sehingga asupan nutrisi tubuh dapat terpenuhi.\r\n'),
('P05', 'Busung Lapar', 'Bad Habit baddd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
