-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2014 at 06:33 PM
-- Server version: 5.5.33
-- PHP Version: 5.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `agama_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `agama_nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`agama_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`agama_id`, `agama_nama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katholik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Lainya');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `berita_judul` varchar(255) DEFAULT NULL,
  `berita_tgl` datetime DEFAULT NULL,
  `berita_author` int(11) DEFAULT NULL,
  `berita_isi` text,
  `berita_gambar` varchar(255) DEFAULT NULL,
  `berita_aktif` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`berita_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kurikulum_id` int(11) DEFAULT '0',
  `mapel_id` int(11) DEFAULT '0',
  `user_id` int(11) DEFAULT '0',
  `course_judul` varchar(255) DEFAULT NULL,
  `course_file` varchar(255) DEFAULT NULL,
  `course_tgl` datetime DEFAULT '0000-00-00 00:00:00',
  `course_publish` int(11) DEFAULT '0',
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `dosen_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dosen_nip` int(11) DEFAULT NULL,
  `dosen_nama` varchar(255) DEFAULT NULL,
  `dosen_jk` tinyint(2) DEFAULT NULL,
  `dosen_agama` tinyint(2) DEFAULT NULL,
  `dosen_alamat` varchar(11) DEFAULT NULL,
  `dosen_matkul_id` int(11) DEFAULT NULL,
  `dosen_foto` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`dosen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`dosen_id`, `dosen_nip`, `dosen_nama`, `dosen_jk`, `dosen_agama`, `dosen_alamat`, `dosen_matkul_id`, `dosen_foto`, `user_id`) VALUES
(1, 1234, 'Nama guru edit', 2, 1, 'Alamat edit', 5, '1234_1395408186.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `grup_users`
--

CREATE TABLE `grup_users` (
  `grup_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `grup_nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`grup_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `grup_users`
--

INSERT INTO `grup_users` (`grup_id`, `grup_nama`) VALUES
(1, 'Administrator'),
(2, 'Guru'),
(3, 'Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kelas_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kelas_nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kelas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kelas_id`, `kelas_nama`) VALUES
(1, 'X A'),
(2, 'X B'),
(3, 'X C'),
(4, 'X D'),
(5, 'X E'),
(6, 'X F');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `kurikulum_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kurikulum_nama` varchar(255) DEFAULT NULL,
  `kurikulum_tahun_pertama` int(11) DEFAULT NULL,
  `kurikulum_tahun_kedua` int(11) DEFAULT NULL,
  PRIMARY KEY (`kurikulum_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`kurikulum_id`, `kurikulum_nama`, `kurikulum_tahun_pertama`, `kurikulum_tahun_kedua`) VALUES
(1, '2012/2013', 2012, 2013),
(2, '2013/2014', 2013, 2014),
(3, '2014/2015', 2014, 2015),
(4, '2015/2016', 2015, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mahasiswa_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `mahasiswa_nis` int(11) DEFAULT NULL,
  `mahasiswa_nama` varchar(255) DEFAULT NULL,
  `mahasiswa_kelas_id` int(11) DEFAULT NULL,
  `mahasiswa_jk` tinyint(2) DEFAULT NULL,
  `mahasiswa_alamat` varchar(255) DEFAULT NULL,
  `mahasiswa_tempat_lahir` varchar(255) DEFAULT NULL,
  `mahasiswa_tgl_lahir` varchar(20) DEFAULT NULL,
  `mahasiswa_agama` tinyint(2) DEFAULT NULL,
  `mahasiswa_foto` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`mahasiswa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`mahasiswa_id`, `mahasiswa_nis`, `mahasiswa_nama`, `mahasiswa_kelas_id`, `mahasiswa_jk`, `mahasiswa_alamat`, `mahasiswa_tempat_lahir`, `mahasiswa_tgl_lahir`, `mahasiswa_agama`, `mahasiswa_foto`, `user_id`) VALUES
(1, 123, '234', 1, 1, 'rewrewrewr', '234', '1980-01-01', 1, '_1394190146.jpg', 3),
(2, 3456, 'Hoka-hoka', 2, 2, 'efdfsdfdsf', 'eeeee', '1998-05-13', 2, '3456_1395407742.jpg', 4),
(3, 999888, 'dfdfdsfdsf', 1, 1, 'dfsdfsdfds', 'sdfdsfsdf', '1980-01-01', 1, '999888_1394191456.jpg', 5),
(4, 34000, 'Nama mhasiswa', 1, 1, 'dfsdfdsfsdfsdf', 'asdasdasdasd', '1980-01-01', 1, NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `matkul_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `matkul_nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`matkul_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`matkul_id`, `matkul_nama`) VALUES
(1, 'Pemrograman'),
(2, 'Basis Data'),
(3, 'Kalkulus'),
(4, 'Pemrograman tingkat lanjut'),
(5, 'Teori Bahasa dan Otomata'),
(6, 'Pemrograman Web'),
(7, 'Pendidikan Agama'),
(8, 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `grup_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `grup_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, '123', 'd41d8cd98f00b204e9800998ecf8427e', NULL),
(3, '123', 'd41d8cd98f00b204e9800998ecf8427e', NULL),
(4, '456666', 'd41d8cd98f00b204e9800998ecf8427e', NULL),
(5, '999888', '698d51a19d8a121ce581499d7b701668', NULL),
(6, '', '202cb962ac59075b964b07152d234b70', 2),
(7, '3333', 'bcbe3365e6ac95ea2c0343a2395834dd', 2),
(8, '3333', '6948905ec82700140afa38540ab7344d', 2),
(9, '34000', '202cb962ac59075b964b07152d234b70', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
