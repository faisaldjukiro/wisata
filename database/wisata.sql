-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 12:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_adat`
--

CREATE TABLE `tb_adat` (
  `id_pakaian` int(11) NOT NULL,
  `id_daerah` int(11) NOT NULL,
  `nama_pakaian` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_adat`
--

INSERT INTO `tb_adat` (`id_pakaian`, `id_daerah`, `nama_pakaian`, `foto`, `keterangan`) VALUES
(3, 25, 'sdd', 'sd5.jpg', '<p>dafes</p>\r\n'),
(4, 25, 'Bili\'u', 'jefferson-santos-9SoCnyQmkzI-unsplash1.jpg', '<p>qefesf</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daerah`
--

CREATE TABLE `tb_daerah` (
  `id_daerah` int(11) NOT NULL,
  `nama_daerah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_daerah`
--

INSERT INTO `tb_daerah` (`id_daerah`, `nama_daerah`) VALUES
(24, 'Kota Gorontalo'),
(25, 'Kabupaten Gorontalo'),
(26, 'Kabupaten Bualemo');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peninggalan`
--

CREATE TABLE `tb_peninggalan` (
  `id_peninggalan` int(11) NOT NULL,
  `id_daerah` int(11) NOT NULL,
  `nama_peninggalan` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peninggalan`
--

INSERT INTO `tb_peninggalan` (`id_peninggalan`, `id_daerah`, `nama_peninggalan`, `foto`, `keterangan`, `lokasi`, `latitude`, `longitude`) VALUES
(30, 26, 'Skak Mat', 'sd6.jpg', '<p>a efgrsgfew</p>\r\n', '0.5523619928423832 123.03690537267525', '0.5523619928423832', '123.03690537267525'),
(31, 26, 'Sini saja', 'asds.png', '<p>Sini</p>\r\n', '0.5564816730089656 123.03107073460347', '0.5564816730089656', '123.03107073460347'),
(32, 25, 'Minanga beach', 'ewe.jpg', '<p>1. kjbkjhibijkbiug<br>\r\n2. jhohoiuhiuo</p>\r\n', '0.5489289238545115 123.05269321686943', '0.5489289238545115', '123.05269321686943'),
(33, 24, 'Patung Saronde', 'ewr.JPG', '<p>qasfdesfeesd refwrwr</p>\r\n\r\n<p>tyr5yurtuyhfttrhdr g </p>\r\n\r\n<p>fuernwthtr,juku</p>\r\n\r\n<p>ygjtynu<', '0.572960364691969 123.02557931053592', '0.572960364691969', '123.02557931053592'),
(34, 26, 'Atinggola Bae', 'ewe1.jpg', '<ol>\r\n <li>Sskjhfkjbdsf</li>\r\n <li>sakjdfbhkjshfb</li>\r\n <li>asjfbdsjifb</li>\r\n <li>sdfnojdsnof</li>', '0.5501304982250708 123.05406607288633', '0.5501304982250708', '123.05406607288633'),
(35, 26, 'Atinggola Bae', 'ewe3.jpg', 'kjhwfkjdshfkjhdsgjkhdgk\r\nsdfojkdsljfldjsg\r\ndskfhdsjhgg', '0.5611163097563592 123.028839843576', '0.5611163097563592', '123.028839843576'),
(36, 25, 'Bentang Otanaha', 'tuytfyu1.jpg', 'isal djukiro\r\n', '0.749728726099525 122.93434321899221', '0.749728726099525', '122.93434321899221'),
(37, 26, 'dssa', 'ewr2.JPG', 'Perlu diingat, tertawa dapat memperbaiki suasana hati yang sedang tidak baik, yang disebabkan banyak hal dalam kehidupan sehari-hari.\r\n\r\nCerita lucu biasanya bersumber dari pengalaman sehari-hari seseorang atau kamu bisa mendapatkannya di berbagai media.\r\n\r\nCerita lucu dapat kamu bacakan saat berkumpul bersama teman-teman. Aktivitas ini dapat mencairkan suasana sehingga saat berkumpul menjadi lebih ceria dan seru.\r\n\r\nMembacakan cerita lucu memang perlu memiliki keterampilan tersendiri sehingga cerita lucu yang kamu bawakan mudah dimengerti orang dan memancing tawa lepas.\r\n\r\nNamun, kamu harus memahami, saat membagikan cerita lucu, kamu jangan sampai menyinggung perasaan orang lain karena hal tersebut dapat merusak suasana. Kamu juga tak boleh menjadikan kekurangan seseorang sebagai bahan candaan.\r\n\r\nBerikut 11 cerita lucu pendek, yang dapat kamu jadikan sebagai hiburan dan memancing tawa, seperti disadur dari Liputan6, Rabu (24/2/2021).', '0.5417194725796209 123.03021269959291', '0.5417194725796209', '123.03021269959291');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama`, `email`, `alamat`, `tgl_lahir`) VALUES
(1, 'isal', '43c2a5745cd71241f50207cbfa266fd3', 'Faisal Djukiro', 'faisaldjukiro98@gmail.com', 'kayuogu', '1998-07-02'),
(4, 'tia', 'e7292d5ba58672ce7f6fc3c0b646ab63', 'Tia Akuba', 'Tia@gmail.com', 'Suwawa', '2000-10-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_adat`
--
ALTER TABLE `tb_adat`
  ADD PRIMARY KEY (`id_pakaian`),
  ADD KEY `id_daerah` (`id_daerah`);

--
-- Indexes for table `tb_daerah`
--
ALTER TABLE `tb_daerah`
  ADD PRIMARY KEY (`id_daerah`);

--
-- Indexes for table `tb_peninggalan`
--
ALTER TABLE `tb_peninggalan`
  ADD PRIMARY KEY (`id_peninggalan`),
  ADD KEY `id_darah` (`id_daerah`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_adat`
--
ALTER TABLE `tb_adat`
  MODIFY `id_pakaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_daerah`
--
ALTER TABLE `tb_daerah`
  MODIFY `id_daerah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_peninggalan`
--
ALTER TABLE `tb_peninggalan`
  MODIFY `id_peninggalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
