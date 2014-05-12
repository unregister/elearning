-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2014 at 05:29 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

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

CREATE TABLE IF NOT EXISTS `agama` (
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

CREATE TABLE IF NOT EXISTS `berita` (
  `berita_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `berita_judul` varchar(255) DEFAULT NULL,
  `berita_tanggal` datetime DEFAULT NULL,
  `berita_author` int(11) DEFAULT NULL,
  `berita_isi` text,
  `berita_gambar` varchar(255) DEFAULT NULL,
  `berita_aktif` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`berita_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`berita_id`, `berita_judul`, `berita_tanggal`, `berita_author`, `berita_isi`, `berita_gambar`, `berita_aktif`) VALUES
(1, 'Create a full stable CRUD in just 30 seconds', '2014-05-11 15:43:57', 1, ' As a php web developer you will often have the problem to create a simple, stable and secure backoffice system. How many CRUD different did you create for you customers? I suppose many . How much time did you spend to create them? It actually takes a lot of time (sometimes weeks) to create all the business logic, the models and the views again from the beginning for each table. As you can see there are similar things in those projects. The Create (or else Add) the Update (or else Edit) , the Delete and of course the listing grid .\r\n\r\nWith grocery CRUD and with the power of Codeigniter framework , you can create a full CRUD system in just one minute. With this Codeigniter CRUD generator , you don''t have to copy all your css, JavaScripts, tables, forms, grid, functions , models, libraries, views again and again to your backoffice system. Just few lines of code and you are ready to have your own CMS. The CRUD is working well with Codeigniter 2.0.x and 2.1.x', NULL, 1),
(2, 'Stable CRUD in just 30 seconds', '2014-05-11 15:44:23', 1, ' As a php web developer you will often have the problem to create a simple, stable and secure backoffice system. How many CRUD different did you create for you customers? I suppose many . How much time did you spend to create them? It actually takes a lot of time (sometimes weeks) to create all the business logic, the models and the views again from the beginning for each table. As you can see there are similar things in those projects. The Create (or else Add) the Update (or else Edit) , the Delete and of course the listing grid .\r\n\r\nWith grocery CRUD and with the power of Codeigniter framework , you can create a full CRUD system in just one minute. With this Codeigniter CRUD generator , you don''t have to copy all your css, JavaScripts, tables, forms, grid, functions , models, libraries, views again and again to your backoffice system. Just few lines of code and you are ready to have your own CMS. The CRUD is working well with Codeigniter 2.0.x and 2.1.x\r\n\r\nBelow there are some examples of the basic features of the codeigniter CRUD', NULL, 1),
(3, 'A full stable CRUD in just 30 seconds', '2014-05-11 15:44:26', 1, ' As a php web developer you will often have the problem to create a simple, stable and secure backoffice system. How many CRUD different did you create for you customers? I suppose many . How much time did you spend to create them? It actually takes a lot of time (sometimes weeks) to create all the business logic, the models and the views again from the beginning for each table. As you can see there are similar things in those projects. The Create (or else Add) the Update (or else Edit) , the Delete and of course the listing grid .\r\n\r\nWith grocery CRUD and with the power of Codeigniter framework , you can create a full CRUD system in just one minute. With this Codeigniter CRUD generator , you don''t have to copy all your css, JavaScripts, tables, forms, grid, functions , models, libraries, views again and again to your backoffice system. Just few lines of code and you are ready to have your own CMS. The CRUD is working well with Codeigniter 2.0.x and 2.1.x\r\n\r\nBelow there are some examples of the basic features of the codeigniter CRUD', NULL, 1),
(4, 'CRUD in just 30 seconds', '2014-05-11 15:44:27', 2, ' As a php web developer you will often have the problem to create a simple, stable and secure backoffice system. How many CRUD different did you create for you customers? I suppose many . How much time did you spend to create them? It actually takes a lot of time (sometimes weeks) to create all the business logic, the models and the views again from the beginning for each table. As you can see there are similar things in those projects. The Create (or else Add) the Update (or else Edit) , the Delete and of course the listing grid .\r\n\r\nWith grocery CRUD and with the power of Codeigniter framework , you can create a full CRUD system in just one minute. With this Codeigniter CRUD generator , you don''t have to copy all your css, JavaScripts, tables, forms, grid, functions , models, libraries, views again and again to your backoffice system. Just few lines of code and you are ready to have your own CMS. The CRUD is working well with Codeigniter 2.0.x and 2.1.x\r\n\r\nBelow there are some examples of the basic features of the codeigniter CRUD', NULL, 1),
(5, 'Full stable CRUD in just 30 seconds', '2014-05-11 15:44:28', 2, ' As a php web developer you will often have the problem to create a simple, stable and secure backoffice system. How many CRUD different did you create for you customers? I suppose many . How much time did you spend to create them? It actually takes a lot of time (sometimes weeks) to create all the business logic, the models and the views again from the beginning for each table. As you can see there are similar things in those projects. The Create (or else Add) the Update (or else Edit) , the Delete and of course the listing grid .\r\n\r\nWith grocery CRUD and with the power of Codeigniter framework , you can create a full CRUD system in just one minute. With this Codeigniter CRUD generator , you don''t have to copy all your css, JavaScripts, tables, forms, grid, functions , models, libraries, views again and again to your backoffice system. Just few lines of code and you are ready to have your own CMS. The CRUD is working well with Codeigniter 2.0.x and 2.1.x\r\n\r\nBelow there are some examples of the basic features of the codeigniter CRUD', NULL, 1),
(6, 'Create a full stable CRUD in just 30 seconds', '2014-05-11 15:44:29', 3, ' As a php web developer you will often have the problem to create a simple, stable and secure backoffice system. How many CRUD different did you create for you customers? I suppose many . How much time did you spend to create them? It actually takes a lot of time (sometimes weeks) to create all the business logic, the models and the views again from the beginning for each table. As you can see there are similar things in those projects. The Create (or else Add) the Update (or else Edit) , the Delete and of course the listing grid .\r\n\r\nWith grocery CRUD and with the power of Codeigniter framework , you can create a full CRUD system in just one minute. With this Codeigniter CRUD generator , you don''t have to copy all your css, JavaScripts, tables, forms, grid, functions , models, libraries, views again and again to your backoffice system. Just few lines of code and you are ready to have your own CMS. The CRUD is working well with Codeigniter 2.0.x and 2.1.x\r\n\r\nBelow there are some examples of the basic features of the codeigniter CRUD', NULL, 1),
(7, 'A full stable CRUD in just 30 seconds', '2014-05-11 15:44:30', 3, ' As a php web developer you will often have the problem to create a simple, stable and secure backoffice system. How many CRUD different did you create for you customers? I suppose many . How much time did you spend to create them? It actually takes a lot of time (sometimes weeks) to create all the business logic, the models and the views again from the beginning for each table. As you can see there are similar things in those projects. The Create (or else Add) the Update (or else Edit) , the Delete and of course the listing grid .\r\n\r\nWith grocery CRUD and with the power of Codeigniter framework , you can create a full CRUD system in just one minute. With this Codeigniter CRUD generator , you don''t have to copy all your css, JavaScripts, tables, forms, grid, functions , models, libraries, views again and again to your backoffice system. Just few lines of code and you are ready to have your own CMS. The CRUD is working well with Codeigniter 2.0.x and 2.1.x\r\n\r\nBelow there are some examples of the basic features of the codeigniter CRUD', NULL, 1),
(8, 'CRUD in just 30 seconds', '2014-05-11 15:44:30', 4, ' As a php web developer you will often have the problem to create a simple, stable and secure backoffice system. How many CRUD different did you create for you customers? I suppose many . How much time did you spend to create them? It actually takes a lot of time (sometimes weeks) to create all the business logic, the models and the views again from the beginning for each table. As you can see there are similar things in those projects. The Create (or else Add) the Update (or else Edit) , the Delete and of course the listing grid .\r\n\r\nWith grocery CRUD and with the power of Codeigniter framework , you can create a full CRUD system in just one minute. With this Codeigniter CRUD generator , you don''t have to copy all your css, JavaScripts, tables, forms, grid, functions , models, libraries, views again and again to your backoffice system. Just few lines of code and you are ready to have your own CMS. The CRUD is working well with Codeigniter 2.0.x and 2.1.x\r\n\r\nBelow there are some examples of the basic features of the codeigniter CRUD', NULL, 1),
(9, 'Full stable CRUD in just 30 seconds', '2014-05-11 15:44:31', 4, ' As a php web developer you will often have the problem to create a simple, stable and secure backoffice system. How many CRUD different did you create for you customers? I suppose many . How much time did you spend to create them? It actually takes a lot of time (sometimes weeks) to create all the business logic, the models and the views again from the beginning for each table. As you can see there are similar things in those projects. The Create (or else Add) the Update (or else Edit) , the Delete and of course the listing grid .\r\n\r\nWith grocery CRUD and with the power of Codeigniter framework , you can create a full CRUD system in just one minute. With this Codeigniter CRUD generator , you don''t have to copy all your css, JavaScripts, tables, forms, grid, functions , models, libraries, views again and again to your backoffice system. Just few lines of code and you are ready to have your own CMS. The CRUD is working well with Codeigniter 2.0.x and 2.1.x\r\n\r\nBelow there are some examples of the basic features of the codeigniter CRUD', NULL, 1),
(10, 'Stable CRUD in just 30 seconds', '2014-05-11 15:44:32', 1, ' As a php web developer you will often have the problem to create a simple, stable and secure backoffice system. How many CRUD different did you create for you customers? I suppose many . How much time did you spend to create them? It actually takes a lot of time (sometimes weeks) to create all the business logic, the models and the views again from the beginning for each table. As you can see there are similar things in those projects. The Create (or else Add) the Update (or else Edit) , the Delete and of course the listing grid .\r\n\r\nWith grocery CRUD and with the power of Codeigniter framework , you can create a full CRUD system in just one minute. With this Codeigniter CRUD generator , you don''t have to copy all your css, JavaScripts, tables, forms, grid, functions , models, libraries, views again and again to your backoffice system. Just few lines of code and you are ready to have your own CMS. The CRUD is working well with Codeigniter 2.0.x and 2.1.x\r\n\r\nBelow there are some examples of the basic features of the codeigniter CRUD', NULL, 1),
(11, 'A full stable CRUD in just 30 seconds', '2014-05-11 15:44:32', 2, ' As a php web developer you will often have the problem to create a simple, stable and secure backoffice system. How many CRUD different did you create for you customers? I suppose many . How much time did you spend to create them? It actually takes a lot of time (sometimes weeks) to create all the business logic, the models and the views again from the beginning for each table. As you can see there are similar things in those projects. The Create (or else Add) the Update (or else Edit) , the Delete and of course the listing grid .\r\n\r\nWith grocery CRUD and with the power of Codeigniter framework , you can create a full CRUD system in just one minute. With this Codeigniter CRUD generator , you don''t have to copy all your css, JavaScripts, tables, forms, grid, functions , models, libraries, views again and again to your backoffice system. Just few lines of code and you are ready to have your own CMS. The CRUD is working well with Codeigniter 2.0.x and 2.1.x\r\n\r\nBelow there are some examples of the basic features of the codeigniter CRUD', NULL, 1),
(12, 'CRUD in just 30 seconds', '2014-05-11 15:44:33', 3, ' As a php web developer you will often have the problem to create a simple, stable and secure backoffice system. How many CRUD different did you create for you customers? I suppose many . How much time did you spend to create them? It actually takes a lot of time (sometimes weeks) to create all the business logic, the models and the views again from the beginning for each table. As you can see there are similar things in those projects. The Create (or else Add) the Update (or else Edit) , the Delete and of course the listing grid .\r\n\r\nWith grocery CRUD and with the power of Codeigniter framework , you can create a full CRUD system in just one minute. With this Codeigniter CRUD generator , you don''t have to copy all your css, JavaScripts, tables, forms, grid, functions , models, libraries, views again and again to your backoffice system. Just few lines of code and you are ready to have your own CMS. The CRUD is working well with Codeigniter 2.0.x and 2.1.x\r\n\r\nBelow there are some examples of the basic features of the codeigniter CRUD', NULL, 1),
(13, 'A full stable CRUD in just 30 seconds', '2014-05-11 16:23:08', 1, ' As a php web developer you will often have the problem to create a simple, stable and secure backoffice system. How many CRUD different did you create for you customers? I suppose many . How much time did you spend to create them? It actually takes a lot of time (sometimes weeks) to create all the business logic, the models and the views again from the beginning for each table. As you can see there are similar things in those projects. The Create (or else Add) the Update (or else Edit) , the Delete and of course the listing grid .\r\n\r\nWith grocery CRUD and with the power of Codeigniter framework , you can create a full CRUD system in just one minute. With this Codeigniter CRUD generator , you don''t have to copy all your css, JavaScripts, tables, forms, grid, functions , models, libraries, views again and again to your backoffice system. Just few lines of code and you are ready to have your own CMS. The CRUD is working well with Codeigniter 2.0.x and 2.1.x\r\n\r\nBelow there are some examples of the basic features of the codeigniter CRUD', '536f875125dbe.jpg', 1),
(14, 'Stable CRUD in just 30 seconds', '2014-05-11 15:44:35', 1, ' As a php web developer you will often have the problem to create a simple, stable and secure backoffice system. How many CRUD different did you create for you customers? I suppose many . How much time did you spend to create them? It actually takes a lot of time (sometimes weeks) to create all the business logic, the models and the views again from the beginning for each table. As you can see there are similar things in those projects. The Create (or else Add) the Update (or else Edit) , the Delete and of course the listing grid .\r\n\r\nWith grocery CRUD and with the power of Codeigniter framework , you can create a full CRUD system in just one minute. With this Codeigniter CRUD generator , you don''t have to copy all your css, JavaScripts, tables, forms, grid, functions , models, libraries, views again and again to your backoffice system. Just few lines of code and you are ready to have your own CMS. The CRUD is working well with Codeigniter 2.0.x and 2.1.x\r\n\r\nBelow there are some examples of the basic features of the codeigniter CRUD', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `semester` tinyint(2) DEFAULT '0',
  `kategori_id` int(11) DEFAULT '0',
  `user_id` int(11) DEFAULT '0',
  `course_judul` varchar(255) DEFAULT NULL,
  `course_deskripsi` text,
  `course_file` varchar(255) DEFAULT NULL,
  `course_tgl` datetime DEFAULT '0000-00-00 00:00:00',
  `course_publish` int(11) DEFAULT '0',
  `course_download` int(11) DEFAULT '0',
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `semester`, `kategori_id`, `user_id`, `course_judul`, `course_deskripsi`, `course_file`, `course_tgl`, `course_publish`, `course_download`) VALUES
(1, 2, 11, 1, 'Label within a horizontal form', 'When you need to place plain text next to a form label within a horizontal form', '110514164828_Label_within_a_horizontal_form.pdf', '2014-05-11 16:48:28', 1, 1),
(2, 1, 13, 1, 'Pemrograman BAsis data', 'When you need to place plain text next to a form label within a horizontal form', '17_04_2014_Pemrograman_BAsis_data.pdf', '2014-04-17 18:45:07', 0, 0),
(3, 1, 13, 1, 'Pemrograman BAsis data', 'When you need to place plain text next to a form label within a horizontal form', '17_04_2014_Pemrograman_BAsis_data.pdf', '2014-04-17 18:45:24', 0, 0),
(4, 1, 13, 1, 'Pemrograman BAsis data', 'When you need to place plain text next to a form label within a horizontal form', '170414184637_Pemrograman_BAsis_data.pdf', '2014-04-17 18:46:37', 0, 0),
(5, 1, 13, 1, 'Teori Bahasa dan Otomata', 'When you need to place plain text next to a form label within a horizontal form', '170414185000_Teori_Bahasa_dan_Otomata.xlsx', '2014-04-17 18:50:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`dosen_id`, `dosen_nip`, `dosen_nama`, `dosen_jk`, `dosen_agama`, `dosen_alamat`, `dosen_matkul_id`, `dosen_foto`, `user_id`) VALUES
(1, 11111, 'Yani', 2, 1, 'Alamat edit', 5, '1234_1395408186.jpg', 6),
(2, 22222, 'Joko', 1, 1, 'Jogjakarta', 1, '12345678_1397284244.jpg', 10),
(3, 33333, 'Wawan', 1, 1, 'Alamat', 1, '33333_1399816107.jpg', 12),
(4, 44444, 'Agus', 1, 1, 'Alamat', 4, '44444_1399816222.jpg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `grup_users`
--

CREATE TABLE IF NOT EXISTS `grup_users` (
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
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_parent_id` int(11) DEFAULT '0',
  `kategori_nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_parent_id`, `kategori_nama`) VALUES
(1, 0, 'MATERI KULIAH'),
(2, 0, 'TUGAS'),
(3, 0, 'SOAL-SOAL'),
(4, 0, 'KARYA TULIS'),
(6, 0, 'LAIN-LAIN'),
(7, 0, 'DOWNLOAD'),
(8, 7, 'SOFTWARE'),
(9, 7, 'TUTORIAL'),
(10, 8, 'SOFTWARE OKE'),
(11, 1, 'PEMROGRAMAN'),
(12, 1, 'KALKULUS'),
(13, 1, 'BASIS DATA'),
(14, 1, 'JARINGAN');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kelas_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kelas_nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kelas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kelas_id`, `kelas_nama`) VALUES
(1, '2.2.1'),
(2, '2.2.2'),
(3, '2.2.3'),
(4, 'X D'),
(5, 'X E'),
(6, 'X F');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE IF NOT EXISTS `kurikulum` (
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

CREATE TABLE IF NOT EXISTS `mahasiswa` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`mahasiswa_id`, `mahasiswa_nis`, `mahasiswa_nama`, `mahasiswa_kelas_id`, `mahasiswa_jk`, `mahasiswa_alamat`, `mahasiswa_tempat_lahir`, `mahasiswa_tgl_lahir`, `mahasiswa_agama`, `mahasiswa_foto`, `user_id`) VALUES
(1, 123, '234', 1, 1, 'rewrewrewr', '234', '1980-01-01', 1, '_1394190146.jpg', 3),
(2, 3456, 'Hoka-hoka', 2, 2, 'efdfsdfdsf', 'eeeee', '1998-05-13', 2, '3456_1395407742.jpg', 4),
(3, 999888, 'dfdfdsfdsf', 1, 1, 'dfsdfsdfds', 'sdfdsfsdf', '1980-01-01', 1, '999888_1394191456.jpg', 5),
(4, 34000, 'Nama mhasiswa', 1, 1, 'dfsdfdsfsdfsdf', 'asdasdasdasd', '1980-01-01', 1, NULL, 9),
(5, 1111, '111', 2, 1, 'Jogja', 'Jogja', '1980-01-01', 1, '1111_1397737319.jpg', 11);

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah` (
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

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `grup_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

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
(9, '34000', '202cb962ac59075b964b07152d234b70', 3),
(10, '12345678', '202cb962ac59075b964b07152d234b70', 2),
(11, '1111', '698d51a19d8a121ce581499d7b701668', 3),
(12, '33333', '2be9bd7a3434f7038ca27d1918de58bd', 2),
(13, '44444', '79b7cdcd14db14e9cb498f1793817d69', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
