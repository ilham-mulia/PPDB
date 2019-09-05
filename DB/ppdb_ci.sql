-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2017 at 09:36 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ppdb_ci`
--
CREATE DATABASE IF NOT EXISTS `ppdb_ci` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ppdb_ci`;

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE IF NOT EXISTS `agama` (
`id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `nama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Buda'),
(4, 'Katolik');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
`id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `text_home` text NOT NULL,
  `text_pengumuman` text NOT NULL,
  `about` text NOT NULL,
  `informasi` text NOT NULL,
  `alamat` text NOT NULL,
  `pemilik` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `judul`, `text_home`, `text_pengumuman`, `about`, `informasi`, `alamat`, `pemilik`) VALUES
(1, 'PPDB', '<p style="text-align:center"><span style="font-size:48px">Welcome To PPDB Online</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style="margin-left:21.3pt; margin-right:0cm; text-align:justify"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif">SMK Negeri 2 Kec.Guguak berdiri pada tahun 2012 yang terletak di Jalan Tuanku Nan Biru , Jorong Ampang Gadang, Kenagarian VII Koto Talago, Kec.Guguak. Sekolah ini terdiri dari 2 Program Keahlian yaitu Teknik Informatika dan Komputer dan BIsnis Manajemen. Sekolah menggunakan Kurikulum 2006 dimana pelaksanaan prakerin ditetapkan/disepakati pada semester V.Dimana prakerin dilaksanakan selama kurang lebih 6 bulan bagi seluruh program keahlian. </span></span></p>\r\n\r\n<p style="margin-left:21.3pt; margin-right:0cm; text-align:justify"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Namun pada tahun ajaran 2015/2016 mulai ditetapkan pelaksanaan prakerin dengan dua periode/gelombang yaitu periode pertama Jan-Juli (semester 4) dan yang kedua Juli - Desember (semester 5). Hal ini dilakukan karena ada pertimbangan dari pihak sekolah dan sesuai dengan tuntutan dunia industri.</span></span></p>\r\n\r\n<p style="margin-left:21.3pt; margin-right:0cm; text-align:justify"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Praktek</span></span> <span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Kerja Industri (PRAKERIN) adalah suatu bentuk penyelenggaraan kegiatan dari sekolah yang memadukan secara sistematik dan sinkron antara program pendidikan di sekolah dan program perusahaan yang diperoleh melalui kegiatan bekerja langsung di dunia kerja untuk mencapai suatu tingkat keahlian profesional. Dimana keahlian profesional tersebut hanya dapat dibentuk melalui tiga unsur utama yaitu ilmu pengetahuan, teknik dan kiat. Ilmu pengetahuan dan teknik dapat dipelajari dan dikuasai kapan dan dimana saja kita berada, sedangkan kiat tidak dapat diajarkan tetapi dapat dikuasai melalui proses mengerjakan langsung pekerjaan&nbsp; pada bidang profesi itu sendiri. Praktek Kerja Industri dilaksanakan untuk memenuhi kebutuhan tenaga kerja yang professional di bidangnya.</span></span></p>\r\n', '<p style="text-align:center"><span style="font-size:48px">Pengumuman&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style="margin-left:21.3pt; margin-right:0cm; text-align:justify"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif">SMK Negeri 2 Kec.Guguak berdiri pada tahun 2012 yang terletak di Jalan Tuanku Nan Biru , Jorong Ampang Gadang, Kenagarian VII Koto Talago, Kec.Guguak. Sekolah ini terdiri dari 2 Program Keahlian yaitu Teknik Informatika dan Komputer dan BIsnis Manajemen. Sekolah menggunakan Kurikulum 2006 dimana pelaksanaan prakerin ditetapkan/disepakati pada semester V.Dimana prakerin dilaksanakan selama kurang lebih 6 bulan bagi seluruh program keahlian. </span></span></p>\r\n\r\n<p style="margin-left:21.3pt; margin-right:0cm; text-align:justify"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Namun pada tahun ajaran 2015/2016 mulai ditetapkan pelaksanaan prakerin dengan dua periode/gelombang yaitu periode pertama Jan-Juli (semester 4) dan yang kedua Juli - Desember (semester 5). Hal ini dilakukan karena ada pertimbangan dari pihak sekolah dan sesuai dengan tuntutan dunia industri.</span></span></p>\r\n\r\n<p style="margin-left:21.3pt; margin-right:0cm; text-align:justify"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Praktek</span></span> <span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Kerja Industri (PRAKERIN) adalah suatu bentuk penyelenggaraan kegiatan dari sekolah yang memadukan secara sistematik dan sinkron antara program pendidikan di sekolah dan program perusahaan yang diperoleh melalui kegiatan bekerja langsung di dunia kerja untuk mencapai suatu tingkat keahlian profesional. Dimana keahlian profesional tersebut hanya dapat dibentuk melalui tiga unsur utama yaitu ilmu pengetahuan, teknik dan kiat. Ilmu pengetahuan dan teknik dapat dipelajari dan dikuasai kapan dan dimana saja kita berada, sedangkan kiat tidak dapat diajarkan tetapi dapat dikuasai melalui proses mengerjakan langsung pekerjaan&nbsp; pada bidang profesi itu sendiri. Praktek Kerja Industri dilaksanakan untuk memenuhi kebutuhan tenaga kerja yang professional di bidangnya.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'PPDB online ini adalah sebuah sistem yang di gunakan untuk penerimaan siswa baru bagi peserta didik yang ingin mendaftar ke sekolah yang dia inginkan', 'PPDB online akan di adakan pada tangal 20 Desember 2018,\r\nakan berakir pada tanggal 3 januari 2019\r\njangan sampai lupa!!!! ', 'Sumatera Barat <br>\r\nPadang - Payakumbuh - Taeh Baruah <br>\r\n26251\r\n', 'Ilham Mulia');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
`id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `nama` varchar(200) NOT NULL,
  `nisn` int(20) NOT NULL,
  `tmp_lahir` varchar(200) NOT NULL,
  `tgl_lahir` varchar(200) NOT NULL,
  `kelamin` varchar(200) NOT NULL,
  `nik` int(20) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `asal_sekolah` varchar(200) NOT NULL,
  `gbr1` text NOT NULL,
  `prodi1` varchar(200) NOT NULL,
  `prodi2` varchar(200) NOT NULL,
  `ipa1` int(11) NOT NULL,
  `ipa2` int(11) NOT NULL,
  `ipa3` int(11) NOT NULL,
  `ipa4` int(11) NOT NULL,
  `ipa5` int(11) NOT NULL,
  `mtk1` int(11) NOT NULL,
  `mtk2` int(11) NOT NULL,
  `mtk3` int(11) NOT NULL,
  `mtk4` int(11) NOT NULL,
  `mtk5` int(11) NOT NULL,
  `indo1` int(11) NOT NULL,
  `indo2` int(11) NOT NULL,
  `indo3` int(11) NOT NULL,
  `indo4` int(11) NOT NULL,
  `indo5` int(11) NOT NULL,
  `status` varchar(99) NOT NULL DEFAULT 'Sedang Di Proses'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `username`, `password`, `email`, `level`, `nama`, `nisn`, `tmp_lahir`, `tgl_lahir`, `kelamin`, `nik`, `agama`, `alamat`, `asal_sekolah`, `gbr1`, `prodi1`, `prodi2`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `mtk1`, `mtk2`, `mtk3`, `mtk4`, `mtk5`, `indo1`, `indo2`, `indo3`, `indo4`, `indo5`, `status`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 99, 'ilham', 99, '99', '99', 'Laki-Laki', 99, 'Islam', '99', '99', '', '99', '99', 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 'Admin'),
(5, 'ilham', 'b63d204bf086017e34d8bd27ab969f28', 'ilham1@gmail.com', 1, 'Ilham Mulia 1', 1507004521, 'Bogor', '15 October, 2017', 'Laki-Laki', 100028281, 'Islam', 'PAYAKUMBUH\r\n', 'SMK N2 GUGUAK', '1509709469.jpg', 'MultiMedia', 'MultiMedia', 11, 21, 31, 41, 51, 61, 71, 81, 91, 101, 11, 121, 131, 141, 151, 'Lulus'),
(6, 'mintailmu1', '27a6941f3d3fb8cfc127e68e0f8a03b1', 'mintailmu1@gmail.com', 1, 'Ilham Minta ilmu', 10001, 'bogor', '1 March, 2016', 'Laki-Laki', 1, 'Islam', 'PADANG', 'SMKN 2 GUGUAK', '', 'Rekayasa Perangkat Lunak', 'MultiMedia', 10, 10, 10, 10, 10, 10, 10, 101, 10, 10, 10, 101, 1, 111, 11, 'Lulus'),
(7, 'robet', '86ec96d8d22e0bbc3ca9a10ecea5bdc1', 'robet@gmail.com', 1, 'robet kanfreto', 15070044, 'pyk', '4 October, 2017', 'Laki-Laki', 99382891, 'Islam', 'ok', 'slta 22', '', 'Teknik Jaringan Komputer', 'MultiMedia', 10, 20, 30, 40, 50, 10, 20, 30, 40, 50, 10, 20, 30, 40, 50, 'Sedang Di Proses'),
(8, 'didi', 'c19c8f9b6caad92726f88434d1493ad5', 'didi@gmail.com', 1, 'didi', 1111, 'pyk', '18 October, 2017', 'Laki-Laki', 9922121, 'Islam', 'pyk', 'smk 4', '', 'Rekayasa Perangkat Lunak', 'MultiMedia', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 'lulus bona'),
(9, 'ok', '444bcb3a3fcf8389296c49467f27e1d6', 'ok@gmail.com', 1, 'ok', 732189, 'djaskjdh', '27 October, 2017', 'Laki-Laki', 22372897, 'Islam', 'hdsjkas', 'sdjkas', '', 'Rekayasa Perangkat Lunak', 'Rekayasa Perangkat Lunak', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sedang Di Proses'),
(10, 'igp', '427b420550992db0281716393c4b3b84', 'igp@iniemail.oncom', 1, 'IGP', 150700476, 'Di Rumah Sakit (Mungkin)', '31 October, 2017', 'Laki-Laki', 150700476, 'Islam', 'Jln. In Aja', 'Dari SD sampai SMK', '', 'Rekayasa Perangkat Lunak', 'Rekayasa Perangkat Lunak', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 'Tidak Lulus'),
(11, 'silfia', 'a0e111685fa128933cf83641d9c03325', 'silfia@gmail.com', 1, 'silfia', 100022, 'ok', '3 November, 2017', 'Laki-Laki', 1820, 'Kristen', 'silfia', 'silfia', '1509710264.jpg', 'Rekayasa Perangkat Lunak', 'MultiMedia', 100, 90, 90, 9, 83, 87, 78, 78, 78, 78, 78, 787, 87, 87, 87, 'Sedang Di Proses');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
`id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama`) VALUES
(1, 'Rekayasa Perangkat Lunak'),
(2, 'MultiMedia'),
(3, 'Teknik Jaringan Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
`id` int(11) NOT NULL,
  `nama` varchar(99) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `nama`) VALUES
(1, 'Lulus'),
(2, 'Tidak Lulus'),
(3, 'lulus bona'),
(4, 'ok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
