-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 12:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `djnow`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_notifikasi`
--

CREATE TABLE `jenis_notifikasi` (
  `id` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_notifikasi`
--

INSERT INTO `jenis_notifikasi` (`id`, `jenis`) VALUES
(1, 'suka'),
(2, 'komentar');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_postingan`
--

CREATE TABLE `kategori_postingan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL DEFAULT 'desain',
  `warna` varchar(100) NOT NULL DEFAULT 'grey',
  `logo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_postingan`
--

INSERT INTO `kategori_postingan` (`id`, `nama`, `warna`, `logo`) VALUES
(1, 'desain', 'grey', 'Desain.png'),
(2, 'arsitektur', '#787EB4', 'Arsitektur.png'),
(3, 'busana', '#8EEC8D', 'Busana.png'),
(4, 'grafis', '#D76BCC', 'Grafis.png'),
(5, 'wajah', '#FFD300', 'Wajah.png');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_postingan` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `id_postingan`, `username`, `isi`) VALUES
(1, 1, 'marisanrbt', 'Wah cantik banget kak, aku juga mau dong dilukis begituu!!'),
(2, 9, 'ibnu', 'wah mantep mas desainnya. kapan-kapan boleh nih pesen desain baju keluarga, hehe...'),
(3, 9, 'ardhana_reza17', 'tes komentar'),
(5, 9, 'ardhana_reza17', 'hai'),
(6, 9, 'ardhana_reza17', 'mantap bangg'),
(9, 1, 'ardhana_reza17', 'mari mba di whatsapp'),
(10, 8, 'ardhana_reza17', 'kerennn,, jurusan arsitektur ya bang?'),
(12, 7, 'ardhana_reza17', 'mantep mbaa, udah mirip sama saya, hehe...');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id` int(11) NOT NULL,
  `jenis` int(1) NOT NULL,
  `dari_username` varchar(100) NOT NULL,
  `id_postingan` int(11) NOT NULL,
  `id_like_komentar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id`, `jenis`, `dari_username`, `id_postingan`, `id_like_komentar`) VALUES
(1, 2, 'marisanrbt', 1, 1),
(2, 2, 'ibnu', 9, 2),
(3, 2, 'ardhana_reza17', 9, 3),
(4, 2, 'ardhana_reza17', 9, 5),
(5, 2, 'ardhana_reza17', 9, 6),
(6, 2, 'ardhana_reza17', 1, 9),
(7, 2, 'ardhana_reza17', 8, 10),
(8, 2, 'ardhana_reza17', 7, 12),
(9, 1, 'ardhana_reza17', 1, 1),
(10, 1, 'marisanrbt', 1, 2),
(11, 1, 'ronsu', 1, 3),
(12, 1, 'ibnu', 1, 4),
(13, 1, 'ronsu', 8, 5),
(14, 1, 'ardhana_reza17', 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `kategori` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`id`, `username`, `foto`, `kategori`) VALUES
(1, 'ardhana_reza17', '1.jpg', 5),
(2, 'ardhana_reza17', '2.jpg', 5),
(3, 'ardhana_reza17', '3.jpg', 5),
(4, 'ronsu', '4.jpg', 5),
(5, 'ibnu', '5.jpg', 2),
(6, 'marisanrbt', '6.jpg', 5),
(7, 'marisanrbt', '7.jpg', 5),
(8, 'ronsu', '8.jpg', 2),
(9, 'ronsu', 'busana.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `suka`
--

CREATE TABLE `suka` (
  `id` int(11) NOT NULL,
  `id_postingan` int(11) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suka`
--

INSERT INTO `suka` (`id`, `id_postingan`, `username`) VALUES
(1, 1, 'ardhana_reza17'),
(2, 1, 'marisanrbt'),
(3, 1, 'ronsu'),
(4, 1, 'ibnu'),
(5, 8, 'ronsu'),
(6, 8, 'ardhana_reza17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `kontak` varchar(20) NOT NULL DEFAULT '+62-8xx-xxxx-xxxx',
  `foto` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `user_bio` text NOT NULL DEFAULT 'Hai, salam kenal teman-teman desainerku!'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `username`, `email`, `tanggal_lahir`, `password`, `kontak`, `foto`, `role_id`, `is_active`, `user_bio`) VALUES
(1, 'Muhammad Reza Ardhana', 'ardhana_reza17', 'ardhana_reza17@apps.ipb.ac.id', '2000-10-17', '$2y$10$wWnBaR9hERrAxIeK7dVpG.oNh6vSoU3bwUWwdRR8su1mj77/iYJ1O', '0896-8934-3008', 'ardhana_reza171.jpg', 2, 1, 'Gua ga jago banget sih, mohon bimbingannya para master desain ^^'),
(3, 'admin 1', 'admin1', 'rezaardhana67@gmail.com', '2000-10-17', '$2y$10$vt0OgqxmiwRqYrIlpBR/Ze56CjoZ7LG.GHhB/qKWHjeolK42Rmrry', '+628xxxxxxxxxx', 'default.jpg', 1, 1, 'Hai, salam kenal teman-teman desainerku!'),
(4, 'Roni Sudarwan', 'ronsu', 'ronisudarwan@gmail.com', '1999-06-02', '$2y$10$/UG76h5c6d5n3LiroOML/uN8xVRaypLivrJMvrexBxbnXZhDxeI8K', '0899-9999-9999', 'ronsu1.jpg', 2, 1, 'Hai, salam kenal teman-teman desainerku!'),
(5, 'Ibnu Fajar', 'ibnu', 'ibnu_fajar586@apps.ipb.ac.id', '1999-08-01', '$2y$10$EMDHLrCbmSzfOBM5pPVmOuOJ2So8g8YlRAKQmSCT77YDk2E60kk0y', '+628xxxxxxxxxx', 'default.jpg', 2, 1, 'Hai, salam kenal teman-teman desainerku!'),
(6, 'Marisa Nurbaiti', 'marisanrbt', 'marisanrbt@gmail.com', '2000-08-13', '$2y$10$lqBJrMZZcXd0SRgfkDk24eZI.XTU13Y2rKCcD26esF2ZvPLu.4MKy', '+628xxxxxxxxxx', 'default.jpg', 2, 1, 'Hai, salam kenal teman-teman desainerku!');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_postingan`
--
ALTER TABLE `kategori_postingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suka`
--
ALTER TABLE `suka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_postingan`
--
ALTER TABLE `kategori_postingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `suka`
--
ALTER TABLE `suka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
