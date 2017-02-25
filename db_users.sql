-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 24 Feb 2017 pada 07.37
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_users`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `city`
--

CREATE TABLE IF NOT EXISTS `city` (
`id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `province_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `city`
--

INSERT INTO `city` (`id`, `nama`, `province_id`) VALUES
(1, 'semarang', 2),
(2, 'boyolali', 2),
(3, 'ciamis', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `country`
--

CREATE TABLE IF NOT EXISTS `country` (
`id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `country`
--

INSERT INTO `country` (`id`, `nama`) VALUES
(1, 'indo'),
(2, 'malaysia'),
(3, 'singapore'),
(4, 'America'),
(5, 'Canada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `province`
--

CREATE TABLE IF NOT EXISTS `province` (
`id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `province`
--

INSERT INTO `province` (`id`, `nama`, `country_id`) VALUES
(1, 'Yogyakarta', 1),
(2, 'jawa tengah ', 1),
(3, 'bogor', 1),
(4, 'jawa barat', 1),
(5, 'jawa timur', 1),
(6, 'jakarta', 1),
(7, 'bali', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE IF NOT EXISTS `tb_users` (
`id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `birdthday` date NOT NULL,
  `gender` enum('L','P') NOT NULL DEFAULT 'L',
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `number_phone` int(20) DEFAULT NULL,
  `country` int(11) NOT NULL,
  `province` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `address` text,
  `type_user` varchar(50) NOT NULL,
  `aktive` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `full_name`, `birdthday`, `gender`, `email`, `password`, `number_phone`, `country`, `province`, `city`, `address`, `type_user`, `aktive`) VALUES
(37, 'aaabbbbbb', '2017-02-17', 'P', 'yahya@yahya.com', '$2y$10$rtSkhQ3bt13F2SqmgVRwXuUcXM/Oy6z9u48oxij2xbiJ9xQ5FFm.u', 7878787, 2, 2, 2, 'rfghfgh', '2', NULL),
(45, 'ajib', '2017-02-18', 'P', 'ajib@ajib.com', '$2y$10$zj5lvw5jUy.h6xyc7SrTi.U8hD5K94JniEqvS9W6CFqR2SkJHb65u', 25252525, 2, 2, 1, 'asdfasf', '1', 1),
(52, 'super admin', '2017-02-15', 'P', 'a@a.com', '$2y$10$fF1a5HEy7hzYV/64vRWw9ejHhmwjLHBIPS0oHF8qpqit8MTchRDf2', 114474147, 1, 1, 1, 'aaaaaaaaaaaaaaaaaaa', '1', 1),
(57, 'super admin', '2017-02-14', 'P', 'b@b.com', '$2y$10$nY46BMCFseeAhCpiMC3AUelFKdk9Td68pehMA9GEojVAuN3eb9rgu', 11, 2, 2, 2, 'bbbbbbbbb', '4', 1),
(58, 'admin', '2017-02-21', 'P', 's@s.com', '$2y$10$LntilrR/IZtpEJ5/KyRQh.HrlMJjvpTviszZ.k7Uu.744krS2DyY2', 147, 1, 7, 2, 'asdfa', '4', 1),
(59, 'dinal', '2017-02-09', 'P', 'dinal@dinal.com', '$2y$10$mllhDkBqiICQ4TbRN3LvH.pMw2xZOOqEzT59z1aqh34fAnnzYTLDG', 2454502, 2, 1, 1, 'dsfsdf', '2', 1),
(60, 'yahya asmi', '2017-02-06', 'P', 'yahya@yahya.com', '$2y$10$vSJ4A33tLo9x/lR5/e.fguiNEa4B2q9eei5oogG.I0FuSnuDh1rXa', 114474147, 2, 1, 1, '001112', '1', 1),
(61, 'fasasa', '2017-02-07', 'P', 'sankjib@yahoo.com', '$2y$10$yL.PBn8GdLT1admJzqnjyOMAICP7WPFhNMOoZ8SUYveLMsJrItDKW', 115, 1, 7, 1, '25258', '4', 1),
(63, 'jamila', '2017-02-16', 'P', 'asdf@asdf.com', '$2y$10$FyzE4STSIcuZKkN3AGayUeEan.nUmivhJ3fFjH2tM7vwlaiGc48za', 147, 2, 2, 1, 'bandung', '4', 1),
(64, 'sdfasdfasdf', '2017-02-21', 'P', 'asf@s.com', '$2y$10$tODPZdodZuO6k.ELYndvEOQWKMDGQv8uGqGtXeIyi6PRTY9UtyUAi', 121212, 2, 2, 2, 'ghjgfhj', '3', 1),
(65, 'faisol', '2017-02-23', 'P', 'faisol@failsol.com', '$2y$10$ocWd9o/j1md5JnqYlVGHJO312sWHvD/bO.ZoJuaa0tYPiDNsSqaYK', 125478, 2, 3, 2, 'asdf', '4', 1),
(66, 'salim', '2017-02-21', 'P', 'salim@salim.com', '$2y$10$NVBEYvSskLZrRdFxbjpcT.5/UnsofnSKceZ.1qW.1Ai/YT8Wvafu6', 12121212, 4, 3, 2, 'asdfasf', '3', 1),
(67, 'taufik', '2017-02-24', 'P', 'yaufil@taufik.com', '$2y$10$XxBiVytZ84lPn4d4QaXzvet4ojVW9aPHNUSXYMJBAc0j8DMSe.qu6', 2151, 3, 3, 3, '2adfasf', '4', 1),
(68, 'zazan', '2017-02-23', 'P', 'zezen@zezen.com', '$2y$10$JhKQ9QKcahYO1eqsZu4UUurSUZa8kQHe9OOm3LAWW22J2nNUnwzsi', 114474147, 1, 1, 1, 'fasdf', '1', 1),
(69, 'aisi', '1990-01-01', 'P', 'adi@adai.com', '$2y$10$vCNxC9odavFWm6/.bVyqnuKk0Gx1yIcNmq4Mgk2Ey2Z4XG5awkm/O', 255550, 1, 1, 1, 'ASDNF', '1', 1),
(71, 'muhammad ulul ajib', '1997-12-21', 'P', 'sankjib@yahoo.com', '$2y$10$6qQF4H5ML2Dt/tFPdskzW.nvYZJCXSfv.cA8.sJpr18ytkEZ.ZN/G', 82445548, 3, 2, 2, 'semarang', '4', 1),
(72, 'asdfa', '2017-02-15', 'P', 'asdf@asdf.com', '$2y$10$1Rt4ltExi.kk6hKc7/BEbOD3iygDE.2GjmRTI5OJulesH5aA227xy', 2145456, 3, 3, 2, '266asdf', '2', 1),
(73, 'mas jajal yooo', '2017-02-09', 'P', 'asdf@asdf.com', '$2y$10$JHsiHCa7d5kcoP7OJLZPnewQZid8I07.njjVkmhqU/G0j.wKOnYwi', 82445548, 2, 5, 2, '5asdf', '1', 1),
(74, 'jabalas', '2017-02-23', 'P', 'jabla@jabak.com', '$2y$10$TzbFdHzoEk9LiIPEKQ12xeV4QK5SXDDC7Oh49OcAOcrMCO6wmeES2', 211, 3, 2, 2, 'asdfasf', '1', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_group`
--

CREATE TABLE IF NOT EXISTS `user_group` (
`id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_group`
--

INSERT INTO `user_group` (`id`, `nama`, `is_admin`) VALUES
(1, 'gold', 0),
(2, 'silver', 0),
(3, 'admin', 1),
(4, 'super admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
