-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 27, 2013 at 07:41 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=193 ;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `full_name`, `NI`) VALUES
(1, 'Hira Meidia, B.Eng., Ph.D.', '108001'),
(2, 'Aryaning Arya Kresna', '110006'),
(3, 'Dipl.-Inform. Nofriyadi Nurdam, M.Kom.', '410059'),
(4, 'Dr. Ir. A. A. N. Ananda Kusuma', '409019'),
(5, 'Ir. I Made Astawa, M.Kom.', '409020'),
(6, 'Ford Lumban Gaol', '103443'),
(7, 'Eka Gautama, M.Sc.', '409086'),
(8, 'Theresia A Riana The', '409018'),
(9, ' Alexander Aur, S.S.', '409047'),
(10, 'Drs. Widia Nursianto, M.Sc.', '34343'),
(11, 'Aemy Widiati, S.E., M.Si.', '410031'),
(12, 'Yulius Aris Widiantoro, S.Th., M.Hum.', '410062'),
(13, 'Ang Yencie Hendrawan', '53635656'),
(14, 'Tan Thing Heng, MStat', '410068'),
(15, 'Adhitio Satyo Bayangkari Karno, S.Si., M.T.I.', '411062'),
(16, 'Agatha Maisie Tjandra, S.Sn.', '113036'),
(18, 'Agus Kustiwa, S.Sos.', '413002'),
(19, 'Agus Salim, S.Si., M.M.', '413015'),
(20, 'Agustinus Eko Rahardjo, S.Sos.', '412051'),
(21, 'Ambang Priyonggo, S.S., M.A.', '109017'),
(22, 'Ananta Hari Noorsasetya, S.Sn.', '412077'),
(23, 'Andreas, S.Sn., M.Ds.', '412071'),
(24, 'Ardiles Akyuwen, S.Sn.', '409065'),
(25, 'Ardyansyah, S.Sn., M.M.', '408015'),
(26, ' Ari Dina Krestiawan, S.Sos.', '411107'),
(27, 'Ari Santosa, S.Sn.', '408049'),
(28, 'Aris Rahmansyah, S.Sn., M.Ds.', '413030'),
(29, 'Asrarul Rahman, S.ST., Akt., MBIS (Prof), CFE', '413023'),
(30, ' Bian Harnansa, S.Sos', '409022'),
(31, 'Bonifasius Hendar Putranto, S.S, M. HUM', '108023'),
(32, 'Christo Wahyudi Rahardjo, S.Sn', '410077'),
(33, 'Clemens Felix Setiyawan, S.Sn.', '412002'),
(34, 'Cosmas Gatot Haryono, S.Sos., M.Si.', '410057'),
(35, 'Darfi Rizkavirwan, S.Sn., M.Ds.', '411050'),
(36, 'Desy Sandrayani H., S.Sn', '411032'),
(37, ' Dian Anggraeni, S.S., M.Si.', '410013'),
(38, 'Dippy Diviantoro Wijayanto, S.Sn.', '410033'),
(39, 'Dr. Jefri Audi Wempi, S.Sn., M.Si', '411040'),
(40, 'Dr. Matius Ali, S.Sn., M.Hum.', '412090'),
(41, 'Edy Chandra, S.Sn., M.IKom ', '410048'),
(42, 'Eko Nugroho, S.Sos., M.Si.', '412055'),
(43, 'Erwin Alfian, S.Sn., M.Ds ', '411051'),
(44, 'F.X. Lilik Dwi Mardjianto, S.S., M.A. ', '112019'),
(45, 'Ferdy Tanumihardjo, S.Sn, M.Ds', '410074'),
(46, 'Gratianus Aditya, S.Sn., M.M. ', '408047'),
(47, 'Greysia Susilo, S.E., S.Sn., M.Hum. ', '413033'),
(48, 'Gustina Romaria, S.Sos., M.Si. ', '412022'),
(49, 'Hanif Suranto, S.Sos. ', '412057'),
(50, 'Harifa Ali Albar Siregar, S.Sos., M.Ds. ', '412031'),
(51, 'Hariyani, S.Sos', '411037'),
(52, 'Hendri Prasetya, S.Sos., M.Si.', '411099'),
(53, 'Heri Budianto, S.Sos., M.Si.', '412024'),
(54, 'Ignasius Tommy Febrian, S.Sn ', '411059'),
(55, 'Iqbal Maimun Umar, S.Sn ', '410078'),
(56, 'Jeffri Kusumajaya, S.Sn.', '108018'),
(57, 'Johan Hartomo, S.Sn. ', '413034'),
(58, 'Joni Nur Budi Kawulur, S.Sn., M.Ds. ', '113033'),
(59, 'Juliana Moa, S.Sos., M.A. ', '412086'),
(60, 'Kartika Aryani, S.Sos., M.I.Kom. ', '413003'),
(61, 'Leonardo Adi Dharma Widya, S.Sn ', '410075'),
(62, 'Liesna Sri Sulistiowati, S.Sn., M.Ds. ', '410108'),
(63, 'M. V. Santi Hendrawati Lukianto, S.Sos., M. Hum. N', '110010'),
(64, 'Martin Suryajaya, S.S., M.Hum. ', '413027'),
(65, 'Mediana Handayani, S.Sos., M.Si. ', '410103'),
(66, 'Mochammad Kresna Noer, S.Sos., M.Si.', '413029'),
(67, 'Muhamad Ramdhan Dwiputra, S.S. ', '413009'),
(68, 'Naldo Yanuar Heryanto, S.Sn., M.T. ', '410029'),
(69, 'Ramdhani Mangku Alam, S.Sn. ', '413010'),
(70, 'Ratna Cahaya Rina Wirawan Putri, S.Sos., M.Ds.', '111003'),
(71, 'Salima Hakim, S.Sn., M.Hum. ', '411045'),
(72, 'Santa Margaretha Niken Restaty, S.Sos., M.Si', '411098'),
(73, 'Santo Tjhin, S.Sn., M.M.', '410030'),
(74, 'Syarifah Amelia, S.Sos, M.Si. ', '113004'),
(75, 'Vonny Ratna Indah, S.Sn. ', '411054'),
(76, 'Wagiman, S.S., S.H., M.H. ', '411109'),
(77, 'Wira Munggana, S.Si., M.Sc. ', '108007'),
(78, 'Yassir Rusdi Malik, S.Sn., M.A. ', '411018'),
(79, 'A. Yudhie Setiawan, S.E., M.Si. ', '409042'),
(80, 'Adhi Kusnadi, M.Si ', '410093'),
(81, 'Aditiyawan, S.Komp., M.Si. ', '410004'),
(83, 'Affan Abdullah Alamudi, S.E., M.Sc.', '413007'),
(84, 'Albertus Fani Prasetyawan, S.E., Ak., M.Sc.', '113029'),
(85, 'Anna Riana Putriya, S.E., M.Si. ', '107006'),
(86, 'Ariadi Diannegara, S.E., M.Sc. ', '412094'),
(87, 'Benny Siga Butarbutar, M.Si.', '410083'),
(88, 'Cita Ichtiara, S.T., M.Sc.', '413020'),
(90, 'Dani Miftahul Akhyar, S.T, M.Si', '410036'),
(91, 'Dennis Andika Suryawijaya, S.Kom., M.Sc.', '410064'),
(94, 'Dr. Rajab Ritonga, M.Si.', '413004'),
(95, 'Dr. Waluyo, M.Sc., Ak.', '410043'),
(96, 'Dr. Zaroni, S.E., M.Si.', '112023'),
(97, 'Dra. Bherta Sri Eko Murtiningsih, M.Si.', '106004'),
(98, 'Dra. Joice Caroll Siagian, M.Si.', '109027'),
(99, 'Dra. Mathilda Agnes Maria Wowor, M.Si.', '41203'),
(100, 'Dra. Ratnawati Kurnia, Ak., M.Si., CPA', '10800'),
(101, 'Drs. Amin Sar Manihuruk, M.SI.', '412082'),
(102, 'Drs. Indiwan Seto Wahjuwibowo, M.Si.', '110026'),
(103, 'Drs. Zain Saifullah, M.Sc.', '411117'),
(104, 'Drs. Zulham, M.Si.', '411088'),
(105, 'Ebnu Yufriadi, S.IP., M.Si.', '413005'),
(106, 'Eduard Depari, M.A, M.Sc', '408012'),
(109, 'F. Anthon Pangruruk, M.Si.', '408041'),
(110, 'Faizal Yan Aulia, S.Fil., M.Sc.', ' 412058'),
(111, 'Ferdian, S.T., M.Sc., PD.Eng.', '412095'),
(112, 'Friska Melani, S.Hum., M.Si.', '411103'),
(113, 'Gun Gun Heryanto, S.Ag., M.Si.', '412053'),
(115, 'Hargyo Tri Nugroho Ignatius, S.Kom., M.Sc.', '111019'),
(117, 'Henny Wirianata, S.E., M.Si., Ak.', '412012'),
(119, 'Iding Rosyidin, S.Ag., M.Si.', '412050'),
(120, 'Inco Hary Perdana, S.Ikom., M.Si.', '112022'),
(121, 'Ir. Andrey Andoko, M.Sc.', '001898'),
(122, 'Ir. Andrey Andoko, M.Sc.', '93004'),
(123, 'Ir. Aziz Luthfi, M.Sc.', '411069'),
(124, 'Ir. Joko Santosa, M.Sc.', '408036'),
(125, 'Iwan Adhicandra, S.T., M.Sc., Ph.D.', '112003'),
(126, 'Januar Wahjudi, S.Kom., M.Sc.', '108015'),
(127, 'Jemmi Sutiono, S.E., S.H., S.Akt., M.M., M.Si.', '412039'),
(128, 'M.S. Gumelar, M.A.', '107005'),
(130, 'Michell Suharli, S.E., M.Si., Ak.', '409011'),
(132, 'Mochammad Riyadh Rizky Adam, S.T., M.S.M.', '112025'),
(133, 'Mohamad Subekti, B.E., M.Sc.', '411065'),
(134, 'Muh. Arief Effendi, S.E., M.Si., Ak., QIA, CPMA', '412017'),
(135, 'Nosami Rikadi, S.E., M.Si', '410116'),
(136, 'Novita Damayanti, M.Si.', '409009'),
(137, 'Panata Bangar Hasioan Sianipar, S.E., Ak., M.Si.', '412040'),
(138, 'Purnamaningsih, S.E., M.S.M.', '112032'),
(139, 'Rene Johannes, M.Si., M.M., M.Si., Ak.', '41008'),
(140, 'Rikip Ginanjar, M.Sc.', '410096'),
(141, ' Rinaningsih, S.E. Ak., M.Si', '411025'),
(142, 'Rony Agustino Siahaan, M.Si', '111009'),
(144, 'Siauw Yohanes Darmawan, S.Kom., M.Sc.', '111018'),
(145, 'Sigit Widodo, S.T., M.Si.', '410072'),
(146, 'Sunarya Djajaprawira, M.Sc.', '411067'),
(148, 'Toufiq Panji Wisesa, S.Ds., M.Sn.', '410110'),
(149, 'Willyanto Tjatur Setyotomo, S.Kom., M.Sc.', '611001'),
(150, 'Yani Prabowo, S.Kom., M.Si', '411010'),
(154, 'Ir. Arief Pramuhanto, MBA', '410097'),
(158, 'Ir. Puji Satyawan Eko Putranto, M.M., M.Min.', '411071'),
(159, 'Ir. Raymond Sunardi Oetama, MCIS', '111001'),
(160, 'Ir. Sasotya Pratama, M.T.E.', '413031'),
(161, 'Ir. Susilo Suhardjo, S.E., M.M.', '412066'),
(162, 'Ir. Widodo, M.M.', '412007'),
(163, 'Ir. Y. Budi Susanto, M.M.', '000928'),
(164, 'Ir. Y. Budi Susanto, M.M.', '88093'),
(166, 'Agus Sulaiman, S.Kom., M.M.', '409074'),
(167, 'David Solichin, S.Kom.', '409071'),
(169, 'Djon Irwanto, S.Kom., M.M.', '411113'),
(170, 'Dodick Zulaimi Sudirman, S.Kom, B.App.Sc., M.T.I N', '110024'),
(171, 'Dr. P M Winarno, M.Kom.', '85201'),
(172, 'Dr. P.M. Winarno, M.Kom.', '000632'),
(173, 'Dwi Kristiawan Ms, S.Kom.', '109012'),
(175, 'Hadi Hemanda, S.Kom., M.M.', '409024'),
(177, 'Harijanto Pangestu, S.Kom., M.Kom.', '410065'),
(180, ' Iwan Kurniawan Widjaya, S.Kom., M.Kom., M.T.', '411068'),
(181, 'Johan Setiawan, S.Kom., M.M., M.B.A.', '109023'),
(183, 'Maria Irmina Prasetiyowati, S.Kom., M.T.', '108012'),
(184, 'Markus Fresnel, S.Kom., M.M.', '412049'),
(185, 'Maukar, S.I.Kom., M.M.T.', '410003'),
(186, 'Nanang Krisdianto, S.T., M.Kom.', '410067'),
(187, 'Santo Fernandi Wijaya, S.Kom., M.M.', '408038'),
(191, 'Yonatan, S.Kom', ']410086'),
(192, 'Yustinus Eko Soelistio, S. Kom., M.M.', '113026');

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
-- Table structure for table `kurikulum`
--

CREATE TABLE IF NOT EXISTS `kurikulum` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mata_kuliah_id` int(10) NOT NULL DEFAULT '0',
  `jumlah_kelas` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=127 ;

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
(21, 'Keamanan Komputer dan Jaringan', 'SK532', 0, 3),
(22, 'Sistem Terdistribusi', 'SK734', 0, 3),
(23, 'Manajemen Operasional', 'SI214', 0, 3),
(24, 'Sistem Informasi Manajemen', 'SI301', 0, 3),
(25, 'Konsep Sistem Operasi', 'SI325', 0, 3),
(28, 'Algoritma dan Pemrograman', 'TI100', 0, 3),
(29, 'Pengantar Teknologi Multimedia', 'TI110', 0, 3),
(30, 'Metode Perancangan Program', 'TI220', 0, 3),
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
(53, 'Sociology in Art and Design', 'DV200', 0, 3),
(55, 'Pendidikan Kewarganegaraan', 'UM160', 0, 3),
(57, 'Rekayasa Piranti Lunak', 'TI421', 0, 4),
(58, 'Algoritma dan Pemrograman', ' TI100 ', 0, 4),
(59, 'Bahasa Inggris 1', 'UM121', 0, 2),
(60, 'Agama', 'UM151', 0, 3),
(64, 'Arsitektur dan Organisasi Komputer', 'SK320', 0, 3),
(69, 'Matematika Diskrit', 'TI101', 0, 3),
(70, 'Pengantar Manajemen & Bisnis', 'EM190', 0, 3),
(74, 'Riset Teknologi Informasi', 'TI728', 0, 2),
(80, 'Pemrograman Sistem Mobile', 'TI735', 0, 2),
(81, 'Pemrograman Sistem Mobile', 'TI735P', 1, 1),
(82, 'Jaringan Komputer', 'SK430', 0, 3),
(83, 'Jaringan Komputer', 'SK430P', 1, 1),
(84, 'Pengantar Teknologi Internet', 'TI330', 0, 2),
(85, 'Pengantar Teknologi Internet', 'TI330P', 1, 1),
(86, 'Sistem Basis Data', 'TI403', 0, 3),
(87, 'Sistem Basis Data', 'TI403P', 1, 1),
(88, 'Struktur Data', 'TI202', 0, 3),
(89, 'Struktur Data', 'TI202P', 1, 1),
(91, 'Grafika Komputer dan Animasi', 'TI624', 0, 2),
(92, 'Grafika Komputer dan Animasi', 'TI624P', 1, 1),
(93, 'Pemrograman Lanjutan 1', 'TI533', 0, 2),
(94, 'Pemrograman Lanjutan 1', 'TI533P', 1, 1),
(96, 'Pemrograman Berorientasi Objek', 'TI331', 0, 2),
(97, 'Pemrograman Berorientasi Objek', 'TI331P', 1, 1),
(98, 'Pemograman Web', 'TI532', 0, 2),
(99, 'Pemograman Web', 'TI532P', 1, 1),
(100, 'Database Lanjutan', 'SI541', 0, 2),
(101, 'Database Lanjutan', 'SI541P', 1, 1),
(102, 'Analisis Perancangan dan Algoritma', 'TI507', 0, 3),
(103, 'Pemrograman Lanjutan 2', 'TI634', 0, 2),
(104, 'Pemrograman Lanjutan 2', 'TI634P', 1, 1),
(105, 'Technopreneurship', 'EM604', 0, 2),
(106, 'Administrasi Database 2', 'SI744', 0, 2),
(107, 'Administrasi Database 2', 'SI744P', 1, 1),
(108, 'Komputer dan Masyarakat', 'TI311', 0, 2),
(109, 'Interaksi Manusia dan Komputer', 'TI423', 0, 3),
(111, 'Intelegensia Semu', 'TI508', 0, 3),
(113, 'Konsep Bahasa Pemrograman', 'TI506', 0, 3),
(114, 'Bahasa Indonesia', 'UM141', 0, 3),
(116, 'Analisis dan Perancangan Sistem', 'TI336', 0, 3),
(117, 'Manajemen Proyek Piranti Lunak', 'TI726', 0, 3),
(118, 'Seminar ICT', 'TI751', 0, 3),
(119, 'Magang Kerja', 'TI727', 0, 4),
(122, 'Bahasa Inggris 2', 'UM222', 0, 2),
(123, 'Administrasi Database 1', 'SI642', 0, 2),
(124, 'Administrasi Database 1', 'SI642P', 1, 1),
(125, 'Teori Bahasa dan Otomata', 'TI608', 0, 2),
(126, 'Komunikasi Nirkabel', 'SK653', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE IF NOT EXISTS `periode` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tahun_ajar` varchar(50) NOT NULL,
  `semester_id` int(10) NOT NULL,
  `flag` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_periode_semester` (`semester_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id`, `tahun_ajar`, `semester_id`, `flag`) VALUES
(2, '2013-2014', 1, 1),
(6, '2014-2015', 1, 0),
(7, '2014-2015', 2, 0),
(9, '2015-2016', 1, 0);

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
-- Table structure for table `ruang_kelas`
--

CREATE TABLE IF NOT EXISTS `ruang_kelas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `praktek` int(10) NOT NULL,
  `number` varchar(50) NOT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number_floor` (`number`),
  KEY `FK_ruang_kelas_room_type` (`praktek`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=272 ;

--
-- Dumping data for table `ruang_kelas`
--

INSERT INTO `ruang_kelas` (`id`, `praktek`, `number`, `keterangan`) VALUES
(3, 0, 'B202', ''),
(4, 0, 'B203', NULL),
(5, 0, 'B201', ''),
(6, 0, 'B204', ''),
(7, 0, 'B205', ''),
(8, 0, 'B206', ''),
(9, 0, 'B207', ''),
(10, 0, 'B208', ''),
(11, 0, 'B301', ''),
(12, 0, 'B302', ''),
(13, 0, 'B303', ''),
(14, 0, 'B304', ''),
(15, 0, 'B305', ''),
(16, 0, 'B306', ''),
(17, 0, 'B307', ''),
(18, 0, 'B308', ''),
(19, 0, 'B309', ''),
(20, 0, 'B310', ''),
(21, 0, 'B311', ''),
(23, 0, 'B312', ''),
(24, 0, 'B313', ''),
(25, 0, 'B314', ''),
(26, 0, 'B315', ''),
(27, 0, 'B316', ''),
(29, 0, 'B317', ''),
(30, 0, 'B318', ''),
(31, 0, 'B319', ''),
(32, 0, 'B320', ''),
(33, 1, 'B501', 'SISMUL'),
(34, 1, 'B502', 'SISMUL'),
(35, 1, 'B503', 'GKA'),
(36, 1, 'B504', 'GKA'),
(37, 1, 'B505', 'GKA'),
(38, 1, 'B506', 'SISMUL, GKA'),
(39, 1, 'B507', 'ORACLE, SAP'),
(40, 1, 'B508', 'ORACLE, SAP'),
(41, 1, 'B509', 'ORACLE, SAP'),
(42, 1, 'B510', 'ORACLE, SAP'),
(43, 1, 'B511', 'ORACLE, SAP'),
(44, 1, 'B512', 'CISCO'),
(46, 1, 'B513', 'CISCO'),
(47, 1, 'B514', 'CISCO'),
(48, 1, 'B515', ''),
(49, 1, 'B516', ''),
(50, 1, 'B517', ''),
(51, 1, 'B518', ''),
(52, 1, 'B519', ''),
(53, 1, 'B520', ''),
(54, 0, 'B601', ''),
(55, 0, 'B602', ''),
(56, 0, 'B603', ''),
(57, 0, 'B604', ''),
(58, 0, 'B605', ''),
(59, 0, 'B606', ''),
(60, 0, 'B607', ''),
(61, 0, 'B608', ''),
(63, 0, 'B609', ''),
(64, 0, 'B610', ''),
(65, 0, 'B611', ''),
(66, 0, 'B612', ''),
(67, 0, 'B613', ''),
(68, 0, 'B614', ''),
(69, 0, 'B615', ''),
(70, 0, 'B616', ''),
(71, 0, 'B617', ''),
(72, 0, 'B618', ''),
(73, 0, 'B619', ''),
(74, 0, 'B620', ''),
(75, 0, 'C201', ''),
(76, 0, 'C202', ''),
(77, 0, 'C203', ''),
(78, 0, 'C204', ''),
(81, 0, 'C205', NULL),
(82, 0, 'C206', NULL),
(83, 0, 'C207', NULL),
(84, 0, 'C208', NULL),
(85, 0, 'C209', NULL),
(86, 0, 'C210', NULL),
(87, 0, 'C211', NULL),
(88, 0, 'C212', NULL),
(89, 0, 'C213', NULL),
(90, 0, 'C214', NULL),
(91, 0, 'C215', NULL),
(92, 0, 'C216', NULL),
(93, 0, 'C217', NULL),
(94, 0, 'C218', NULL),
(95, 0, 'C219', NULL),
(96, 0, 'C220', NULL),
(97, 0, 'C301', NULL),
(98, 0, 'C302', NULL),
(99, 0, 'C303', NULL),
(100, 0, 'C304', NULL),
(101, 0, 'C305', NULL),
(102, 0, 'C306', NULL),
(103, 0, 'C307', NULL),
(104, 0, 'C308', NULL),
(105, 0, 'C309', NULL),
(106, 0, 'C310', NULL),
(107, 0, 'C311', NULL),
(108, 0, 'C312', NULL),
(109, 0, 'C313', NULL),
(110, 0, 'C314', NULL),
(111, 0, 'C315', NULL),
(112, 0, 'C316', NULL),
(113, 0, 'C317', NULL),
(114, 0, 'C318', NULL),
(115, 0, 'C319', NULL),
(116, 0, 'C320', NULL),
(157, 0, 'C403', NULL),
(175, 0, 'C404', NULL),
(176, 0, 'C405', NULL),
(177, 0, 'C406', NULL),
(178, 0, 'C407', NULL),
(179, 0, 'C408', NULL),
(180, 0, 'C409', NULL),
(181, 0, 'C410', NULL),
(182, 0, 'C411', NULL),
(183, 0, 'C412', NULL),
(184, 0, 'C413', NULL),
(185, 0, 'C414', NULL),
(186, 0, 'C415', NULL),
(187, 0, 'C416', NULL),
(188, 0, 'C417', NULL),
(189, 0, 'C418', NULL),
(190, 0, 'C419', NULL),
(191, 0, 'C420', NULL),
(192, 0, 'C501', NULL),
(193, 0, 'C502', NULL),
(194, 0, 'C503', NULL),
(195, 0, 'C504', NULL),
(196, 0, 'C505', NULL),
(197, 0, 'C506', NULL),
(198, 0, 'C507', NULL),
(199, 0, 'C508', NULL),
(200, 0, 'C509', NULL),
(201, 0, 'C510', NULL),
(202, 0, 'C511', NULL),
(203, 0, 'C512', NULL),
(204, 0, 'C513', NULL),
(205, 0, 'C514', NULL),
(206, 0, 'C515', NULL),
(207, 0, 'C516', NULL),
(208, 0, 'C517', NULL),
(209, 0, 'C518', NULL),
(210, 0, 'C519', NULL),
(211, 0, 'C520', NULL),
(212, 0, 'C601', NULL),
(213, 0, 'C602', NULL),
(214, 0, 'C603', NULL),
(215, 0, 'C604', NULL),
(216, 0, 'C605', NULL),
(217, 0, 'C606', NULL),
(218, 0, 'C607', NULL),
(219, 0, 'C608', NULL),
(220, 0, 'C609', NULL),
(221, 0, 'C610', NULL),
(222, 0, 'C611', NULL),
(223, 0, 'C612', NULL),
(224, 0, 'C613', NULL),
(225, 0, 'C614', NULL),
(226, 0, 'C615', NULL),
(227, 0, 'C616', NULL),
(228, 0, 'C617', NULL),
(229, 0, 'C618', NULL),
(230, 0, 'C619', NULL),
(231, 0, 'C620', NULL),
(252, 0, 'C701', NULL),
(253, 0, 'C702', NULL),
(254, 0, 'C703', NULL),
(255, 0, 'C704', NULL),
(256, 0, 'C705', NULL),
(257, 0, 'C706', NULL),
(258, 0, 'C707', NULL),
(259, 0, 'C708', NULL),
(260, 0, 'C709', NULL),
(261, 0, 'C710', NULL),
(262, 0, 'C711', NULL),
(263, 0, 'C712', NULL),
(264, 0, 'C713', NULL),
(265, 0, 'C714', NULL),
(266, 0, 'C715', NULL),
(267, 0, 'C716', NULL),
(268, 0, 'C717', NULL),
(269, 0, 'C718', NULL),
(270, 0, 'C719', NULL),
(271, 0, 'C720', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `name`) VALUES
(1, 'ganjil'),
(2, 'genap');

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
-- Constraints for table `periode`
--
ALTER TABLE `periode`
  ADD CONSTRAINT `FK_periode_semester` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`);

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `FK_prodi_fakultas2` FOREIGN KEY (`fakultas_id`) REFERENCES `fakultas` (`id`);

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
