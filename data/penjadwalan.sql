-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2013 at 10:12 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penjadwalan`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `name`, `start_time`, `end_time`) VALUES
(1, 'UNIVERSITAS MULTIMEDIA NUSANTARA', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE IF NOT EXISTS `day` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `day` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`id`, `day`) VALUES
(1, 'senin'),
(2, 'selasa'),
(3, 'rabu'),
(4, 'kamis'),
(5, 'jumat'),
(6, 'sabtu'),
(7, 'minggu');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `NI` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NI` (`NI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE IF NOT EXISTS `fakultas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fakultas` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `fakultas`) VALUES
(1, 'Ekonomi'),
(2, 'Teknologi Informasi dan Komunikasi'),
(3, 'Komunikasi'),
(4, 'Seni dan Design');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mata_kuliah` varchar(50) NOT NULL,
  `mata_kuliah_code` varchar(50) NOT NULL,
  `praktek` int(1) NOT NULL,
  `sks` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mata_kuliah_code` (`mata_kuliah_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id`, `mata_kuliah`, `mata_kuliah_code`, `praktek`, `sks`) VALUES
(1, 'Pengantar Akuntansi 1', 'EA100', 0, 3),
(2, 'Pengantar Akuntansi 2', 'EA201', 0, 3),
(3, 'Ekonomi Mikro', 'EM170 ', 0, 3),
(4, 'Ekonomi Makro', 'EM270', 0, 3),
(5, 'Dasar-dasar Bisnis', 'EM100', 0, 3),
(6, 'Dasar-dasar Manajemen', 'EM201', 0, 3),
(7, 'Statistik Bisnis 1', 'EM281', 0, 3),
(9, 'Statistik Bisnis 2', 'EM382', 0, 3),
(10, 'Manajemen Keuangan 1', 'EM330', 0, 3),
(11, 'Manajemen Keuangan 2', 'EM431', 0, 3),
(12, 'Matematika Bisnis', 'EM180', 0, 3),
(13, 'Manajemen Pemasaran', 'EM320', 0, 3),
(14, 'Kalkulus 1', 'SK101', 0, 3),
(15, 'Kalkulus 2', 'SK201', 0, 3),
(16, 'Aljabar Linear', 'SK202', 0, 3),
(17, 'Sistem Digital', 'SK211', 0, 3),
(18, 'Probabilitas dan Multimedia Statistika', 'SK304', 0, 3),
(19, 'Jaringan Komputer', 'SK430', 0, 3),
(20, 'Jaringan Komputer', 'SK430P', 1, 3),
(21, 'Keamanan Komputer dan Jaringan', 'SK532', 0, 3),
(22, 'Sistem Terdistribusi', 'SK734', 0, 3),
(23, 'Manajemen Operasional', 'SI214', 0, 3),
(24, 'Sistem Informasi Manajemen', 'SI301', 0, 3),
(25, 'Konsep Sistem Operasi', 'SI325', 0, 3),
(26, 'Pengantar Teknologi Internet', 'TI330', 0, 3),
(27, 'Pemograman Web', 'TI532', 0, 3),
(28, 'Algoritma dan Pemrograman', 'TI100', 0, 3),
(29, 'Pengantar Teknologi Multimedia', 'TI110', 0, 3),
(30, 'Metode Perancangan Program', 'TI220', 0, 3),
(31, 'Pemrograman Sistem Mobile', 'TI735', 0, 3),
(32, 'Sistem Operasi', 'TI405', 0, 3),
(33, 'Pengantar Ilmu Komunikasi', 'IK100', 0, 3),
(34, 'Critical & Creative Thinking', 'IK112', 0, 3),
(35, 'Teori Komunikasi', 'IK201', 0, 3),
(36, 'Perkembangan Teknologi Komunikasi', 'IK202', 0, 3),
(37, 'Komunikasi Antar Pribadi', 'IK203', 0, 3),
(38, 'Multimedia Laboratory', 'IK214', 0, 3),
(39, 'Pengantar Public Relations', 'PR210', 0, 3),
(40, 'Creative Writing', 'IK354', 0, 3),
(41, 'Komunikasi Interpersonal', 'IK402', 0, 3),
(42, 'Drawing Principles', 'DA110', 0, 3),
(43, 'Illustration', 'DA213', 0, 3),
(44, 'West Art History', 'DV113', 0, 3),
(45, 'East & Indonesian Art History', 'DV132', 0, 3),
(46, 'Academic Writing', 'DA501', 0, 3),
(47, 'Traditional Sculpting', 'DA211', 0, 3),
(48, 'Digital Publishing – II', 'DG200', 0, 3),
(49, '3D Digital Visualization', 'DA311', 0, 3),
(50, 'Psychology in Art and Design', 'DA321', 0, 3),
(53, 'Sociology in Art and Design', 'DV200', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE IF NOT EXISTS `periode` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tahun_ajar` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tahun_ajar_semester` (`tahun_ajar`,`semester`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id`, `tahun_ajar`, `semester`, `flag`) VALUES
(1, '2013-2014', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fakultas_id` int(10) NOT NULL,
  `prodi_name` varchar(50) NOT NULL,
  `prodi_code` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `prodi_code` (`prodi_code`),
  KEY `FK_prodi_fakultas2` (`fakultas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `fakultas_id`, `prodi_name`, `prodi_code`) VALUES
(1, 1, 'Manajemen', 'EM'),
(2, 1, 'Akuntansi', 'EA'),
(3, 2, 'Sistem Informasi', 'SI'),
(4, 2, 'Teknik Informatika', 'TI'),
(14, 2, 'Sistem Komputer', 'SK'),
(15, 3, 'Ilmu Komunikasi', 'IK'),
(16, 4, 'Desain Komunikasi Visual', 'DKV');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE IF NOT EXISTS `room_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `room_type` int(1) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `room_type_room_name` (`room_type`,`room_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ruang_kelas`
--

CREATE TABLE IF NOT EXISTS `ruang_kelas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `room_rype` int(10) NOT NULL,
  `number` varchar(50) NOT NULL,
  `floor` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number_floor` (`number`,`floor`),
  KEY `FK_ruang_kelas_room_type` (`room_rype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trx_dosen_makul`
--

CREATE TABLE IF NOT EXISTS `trx_dosen_makul` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dosen` int(10) NOT NULL,
  `makul` int(10) NOT NULL,
  `periode` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_trx_dosen_makul_dosen` (`dosen`),
  KEY `FK_trx_dosen_makul_mata_kuliah` (`makul`),
  KEY `FK_trx_dosen_makul_periode` (`periode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trx_dosen_prodi`
--

CREATE TABLE IF NOT EXISTS `trx_dosen_prodi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dosen` int(10) NOT NULL,
  `prodi` int(10) NOT NULL,
  `periode` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_trx_dosen_prodi_dosen` (`dosen`),
  KEY `FK_trx_dosen_prodi_prodi` (`prodi`),
  KEY `FK_trx_dosen_prodi_periode` (`periode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trx_dosen_time`
--

CREATE TABLE IF NOT EXISTS `trx_dosen_time` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `day` int(10) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_trx_dosen_time_day` (`day`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trx_jadwal`
--

CREATE TABLE IF NOT EXISTS `trx_jadwal` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dosen` int(10) NOT NULL,
  `mata_kuliah` int(10) NOT NULL,
  `ruang_kelas` int(10) NOT NULL,
  `periode` int(10) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_trx_jadwal_dosen` (`dosen`),
  KEY `FK_trx_jadwal_mata_kuliah` (`mata_kuliah`),
  KEY `FK_trx_jadwal_ruang_kelas` (`ruang_kelas`),
  KEY `FK_trx_jadwal_periode` (`periode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trx_jadwal_requirement`
--

CREATE TABLE IF NOT EXISTS `trx_jadwal_requirement` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mata_kuliah` int(10) DEFAULT NULL,
  `kelas` int(10) NOT NULL,
  `periode` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_trx_jadwal_requirement_mata_kuliah` (`mata_kuliah`),
  KEY `FK_trx_jadwal_requirement_periode` (`periode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `FK_prodi_fakultas2` FOREIGN KEY (`fakultas_id`) REFERENCES `fakultas` (`id`);

--
-- Constraints for table `ruang_kelas`
--
ALTER TABLE `ruang_kelas`
  ADD CONSTRAINT `FK_ruang_kelas_room_type` FOREIGN KEY (`room_rype`) REFERENCES `room_type` (`id`);

--
-- Constraints for table `trx_dosen_makul`
--
ALTER TABLE `trx_dosen_makul`
  ADD CONSTRAINT `FK_trx_dosen_makul_dosen` FOREIGN KEY (`dosen`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `FK_trx_dosen_makul_mata_kuliah` FOREIGN KEY (`makul`) REFERENCES `mata_kuliah` (`id`),
  ADD CONSTRAINT `FK_trx_dosen_makul_periode` FOREIGN KEY (`periode`) REFERENCES `periode` (`id`);

--
-- Constraints for table `trx_dosen_prodi`
--
ALTER TABLE `trx_dosen_prodi`
  ADD CONSTRAINT `FK_trx_dosen_prodi_dosen` FOREIGN KEY (`dosen`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `FK_trx_dosen_prodi_periode` FOREIGN KEY (`periode`) REFERENCES `periode` (`id`),
  ADD CONSTRAINT `FK_trx_dosen_prodi_prodi` FOREIGN KEY (`prodi`) REFERENCES `prodi` (`id`);

--
-- Constraints for table `trx_dosen_time`
--
ALTER TABLE `trx_dosen_time`
  ADD CONSTRAINT `FK_trx_dosen_time_day` FOREIGN KEY (`day`) REFERENCES `day` (`id`);

--
-- Constraints for table `trx_jadwal`
--
ALTER TABLE `trx_jadwal`
  ADD CONSTRAINT `FK_trx_jadwal_dosen` FOREIGN KEY (`dosen`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `FK_trx_jadwal_mata_kuliah` FOREIGN KEY (`mata_kuliah`) REFERENCES `mata_kuliah` (`id`),
  ADD CONSTRAINT `FK_trx_jadwal_periode` FOREIGN KEY (`periode`) REFERENCES `periode` (`id`),
  ADD CONSTRAINT `FK_trx_jadwal_ruang_kelas` FOREIGN KEY (`ruang_kelas`) REFERENCES `ruang_kelas` (`id`);

--
-- Constraints for table `trx_jadwal_requirement`
--
ALTER TABLE `trx_jadwal_requirement`
  ADD CONSTRAINT `FK_trx_jadwal_requirement_mata_kuliah` FOREIGN KEY (`mata_kuliah`) REFERENCES `mata_kuliah` (`id`),
  ADD CONSTRAINT `FK_trx_jadwal_requirement_periode` FOREIGN KEY (`periode`) REFERENCES `periode` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
