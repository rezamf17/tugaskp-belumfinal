-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 05:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esemka`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `absensi_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `keterangan` int(1) NOT NULL COMMENT 'hadir=1\r\nalfa=2\r\nsakit=3\r\nizin=4',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`absensi_id`, `tanggal`, `waktu`, `keterangan`, `user_id`) VALUES
(29, '1970-01-01', '01:00:01', 1, 29);

-- --------------------------------------------------------

--
-- Table structure for table `data_absen`
--

CREATE TABLE `data_absen` (
  `id_absen` int(11) NOT NULL,
  `nis` int(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `id_tanggal` varchar(50) NOT NULL,
  `jam_masuk` varchar(50) NOT NULL,
  `st_jam_msk` enum('Dikonfirmasi','Belum Absen','Menunggu','Ditolak') NOT NULL,
  `id_kelas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_absen`
--

INSERT INTO `data_absen` (`id_absen`, `nis`, `nama`, `id_tanggal`, `jam_masuk`, `st_jam_msk`, `id_kelas`) VALUES
(20, 25, 'Sule', '2020-09-18', '11:13:10', 'Menunggu', 'XII-RPL-1'),
(21, 21, 'Ariel Noah', '2020-09-16', '11:16:01', 'Menunggu', 'XI-RPL-1'),
(22, 24, 'Vicky Prasestyo', '2020-09-15', '11:16:38', 'Menunggu', 'X-RPL-1'),
(23, 29, 'Bertrand Peto', '2020-09-19', '11:18:05', 'Menunggu', 'XII-RPL-1'),
(25, 26, 'Luna Maya', '2020-09-14', '11:19:45', 'Menunggu', 'XI-RPL-1'),
(26, 21, 'Ariel Noah', '2020-09-20', '19:14:44', 'Menunggu', 'XI-RPL-1');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(12) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `level` int(11) NOT NULL COMMENT '1=admin 2=guru 3=siswa'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nis`, `username`, `password`, `name`, `jenis_kelamin`, `alamat`, `kelas`, `level`) VALUES
(1, '', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Muhamad Ridwan', '', 'Kopo', '', 1),
(10, '', 'reza', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Reza M Fauzi', '', 'clk', '', 1),
(11, '', 'fahmi', 'a1872e333d0e52644f6125da2276530f7ebe5e77', 'Fahmi', '', 'Toxic', '', 2),
(16, '2143423', 'sad', '1c6637a8f2e1f75e06ff9984894d6bd16a3a36a9', 'sad', 'Laki-laki', 'ff', 'XI-RPL-1', 3),
(17, 'zara', 'zarajkt48', '820b22172f58ac16c86ced115a0529d9ebec4f08', 'Adhisty Zara', 'Perempuan', 'Jatinangor', 'XII-RPL-1', 3),
(18, '2312425', 'iqbale', 'c7bf926e43330caed60eb1e7dd21b7a86d4bf5d0', 'Iqbal Ramadhan', 'Laki-laki', 'Garut', 'X-RPL-1', 3),
(21, '12423245', 'boril', '8cb2237d0679ca88db6464eac60da96345513964', 'Ariel Noah', 'Laki-laki', 'Antapani', 'XI-RPL-1', 3),
(22, '645633224', 'cuttari', '8cb2237d0679ca88db6464eac60da96345513964', 'Cut Tari', 'Perempuan', 'Aceh', 'XII-RPL-1', 3),
(23, '86729384', 'tyas', '8cb2237d0679ca88db6464eac60da96345513964', 'tyas mirasih', 'Perempuan', 'Sumedang', 'XII-RPL-1', 3),
(24, '238462983', 'vick', '8cb2237d0679ca88db6464eac60da96345513964', 'Vicky Prasestyo', 'Laki-laki', 'Cicalengka', 'X-RPL-1', 3),
(25, '13424454', 'Sule', '8cb2237d0679ca88db6464eac60da96345513964', 'Sule', 'Laki-laki', 'Cileunyi', 'XII-RPL-1', 3),
(26, '372645273', 'luna', '8cb2237d0679ca88db6464eac60da96345513964', 'Luna Maya', 'Perempuan', 'Bali', 'XI-RPL-1', 3),
(27, '', 'bambang', 'a1872e333d0e52644f6125da2276530f7ebe5e77', 'Bambang Pamungkas', 'Laki-laki', 'Cicadas', '', 2),
(28, '2384729', 'andre', '8cb2237d0679ca88db6464eac60da96345513964', 'Andre Taulany', 'Laki-laki', 'Medan', 'X-RPL-1', 3),
(29, '832642983', 'anakpungut', '8cb2237d0679ca88db6464eac60da96345513964', 'Bertrand Peto', 'Laki-laki', 'Maluku', 'XII-RPL-1', 3),
(30, '121298', 'wigidestian@gmail.com', 'de25b4672dde52698931526ae71ce6c5395d411c', 'Wigi', 'Laki-laki', 'majalaya\r\n', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`absensi_id`);

--
-- Indexes for table `data_absen`
--
ALTER TABLE `data_absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `absensi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `data_absen`
--
ALTER TABLE `data_absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
