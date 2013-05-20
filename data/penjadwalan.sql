-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2013 at 10:44 PM
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
