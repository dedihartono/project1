-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 11:52 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE IF NOT EXISTS `markers` (
`id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(1, 'Love.Fish', '580 Darling Street, Rozelle, NSW', -33.861034, 151.171936, 'restaurant'),
(2, 'Young Henrys', '76 Wilford Street, Newtown, NSW', -33.898113, 151.174469, 'bar'),
(3, 'Hunter Gatherer', 'Greenwood Plaza, 36 Blue St, North Sydney NSW ', -33.840282, 151.207474, 'bar'),
(4, 'The Potting Shed', '7A, 2 Huntley Street, Alexandria, NSW', -33.910751, 151.194168, 'bar'),
(5, 'Nomad', '16 Foster Street, Surry Hills, NSW', -33.879917, 151.210449, 'bar'),
(6, 'Three Blue Ducks', '43 Macpherson Street, Bronte, NSW', -33.906357, 151.263763, 'restaurant'),
(7, 'Single Origin Roasters', '60-64 Reservoir Street, Surry Hills, NSW', -33.881123, 151.209656, 'restaurant'),
(8, 'Red Lantern', '60 Riley Street, Darlinghurst, NSW', -33.874737, 151.215530, 'restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_bangunan`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_bangunan` (
`id_jenis_bangunan` int(3) NOT NULL,
  `jenis_bangunan` varchar(32) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_bangunan`
--

INSERT INTO `tb_jenis_bangunan` (`id_jenis_bangunan`, `jenis_bangunan`) VALUES
(1, 'Tidak Bertingkat'),
(2, 'Bertingkat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kondisi`
--

CREATE TABLE IF NOT EXISTS `tb_kondisi` (
`id_kondisi` int(1) NOT NULL,
  `kondisi` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kondisi`
--

INSERT INTO `tb_kondisi` (`id_kondisi`, `kondisi`) VALUES
(1, 'Baik'),
(2, 'Tidak Baik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi_unit`
--

CREATE TABLE IF NOT EXISTS `tb_lokasi_unit` (
  `kode_lokasi` varchar(11) NOT NULL,
  `lokasi_unit` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lokasi_unit`
--

INSERT INTO `tb_lokasi_unit` (`kode_lokasi`, `lokasi_unit`) VALUES
('2147483647', 'Unit Cipunagara'),
('34345', 'Pagaden'),
('748575', 'Subang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tb_pelanggan` (
`id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(64) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`) VALUES
(1, 'Wati'),
(2, 'Dewi'),
(3, 'Kiti');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan_detail`
--

CREATE TABLE IF NOT EXISTS `tb_pelanggan_detail` (
`id_pel_detail` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `alamat` text,
  `telepon` varchar(13) NOT NULL,
  `pekerjaan` varchar(64) NOT NULL,
  `luas_bangunan` int(11) NOT NULL,
  `luas_tanah` int(11) NOT NULL,
  `jumlah_Penghuni` int(3) NOT NULL,
  `id_jenis_bangunan` int(3) NOT NULL,
  `id_status_rumah` int(3) NOT NULL,
  `id_peruntukan` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggan_detail`
--

INSERT INTO `tb_pelanggan_detail` (`id_pel_detail`, `id_pelanggan`, `alamat`, `telepon`, `pekerjaan`, `luas_bangunan`, `luas_tanah`, `jumlah_Penghuni`, `id_jenis_bangunan`, `id_status_rumah`, `id_peruntukan`) VALUES
(1, 1, 'Cipunagara', '0986778', 'Pedagang', 15, 40, 1, 1, 1, 1),
(2, 2, 'Parigi', '094873383', 'Wiraswasta', 15, 30, 4, 2, 2, 2),
(3, 3, 'Kiara Payung', '093', 'Pedagang', 30, 40, 3, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE IF NOT EXISTS `tb_pengguna` (
`id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(64) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `hak_akses` varchar(1) DEFAULT NULL,
  `gambar` varchar(64) DEFAULT 'default.png'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`, `hak_akses`, `gambar`) VALUES
(1, 'Milawati Dewi', 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', '1', 'superadmin.jpg'),
(2, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2', 'default.png'),
(3, 'Direktur', 'direktur', '4fbfd324f5ffcdff5dbf6f019b02eca8', '3', 'default.png'),
(4, 'Hublang', 'hublang', '8d534abf678e0aa0958e8d595d1544b3', '4', 'default.png'),
(5, 'Teknik', 'teknik', '58029eb6d2dd138b3da6ee4b2bb71d8c', '5', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peruntukan`
--

CREATE TABLE IF NOT EXISTS `tb_peruntukan` (
`id_peruntukan` int(3) NOT NULL,
  `peruntukan` varchar(64) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peruntukan`
--

INSERT INTO `tb_peruntukan` (`id_peruntukan`, `peruntukan`) VALUES
(1, 'Rumah Tinggal'),
(2, 'Ruko/Rumah Toko'),
(3, 'Toko/Pertokoan'),
(4, 'Kantor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE IF NOT EXISTS `tb_status` (
`id_status` int(1) NOT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `status`) VALUES
(1, 'Aktif'),
(2, 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_rumah`
--

CREATE TABLE IF NOT EXISTS `tb_status_rumah` (
`id_status_rumah` int(3) NOT NULL,
  `status_rumah` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_rumah`
--

INSERT INTO `tb_status_rumah` (`id_status_rumah`, `status_rumah`) VALUES
(1, 'Milik Sendiri'),
(2, 'Milik Keluarga'),
(3, 'Milik Negara/Perusahaan'),
(4, 'Sewa/Kontrak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_water_meter`
--

CREATE TABLE IF NOT EXISTS `tb_water_meter` (
`id_water_meter` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `kode_asset` varchar(11) DEFAULT NULL,
  `kode_lokasi` varchar(11) DEFAULT NULL,
  `merk` varchar(32) DEFAULT NULL,
  `type` varchar(12) DEFAULT NULL,
  `ukuran` varchar(12) DEFAULT NULL,
  `no_smb` varchar(12) DEFAULT NULL,
  `no_body` varchar(12) DEFAULT NULL,
  `id_status` int(1) DEFAULT '2',
  `id_kondisi` int(1) DEFAULT '1',
  `lat` double(10,8) DEFAULT NULL,
  `long` double(11,8) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_water_meter`
--

INSERT INTO `tb_water_meter` (`id_water_meter`, `id_pelanggan`, `kode_asset`, `kode_lokasi`, `merk`, `type`, `ukuran`, `no_smb`, `no_body`, `id_status`, `id_kondisi`, `lat`, `long`) VALUES
(1, 1, '0416010279', '2147483647', 'Onda', '', '1/2', '6943', '10000796', 1, 1, -6.54830541, 107.88812196),
(2, 2, '0416010279', '2147483647', 'Linflow', 'R50H', '1/2', '006941', '10000794', 1, 1, -6.55090349, 107.90162688),
(3, 3, '44', '2147483647', 'Fifo', 'Fe', '1/2', '45643', '333', 1, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jenis_bangunan`
--
ALTER TABLE `tb_jenis_bangunan`
 ADD PRIMARY KEY (`id_jenis_bangunan`);

--
-- Indexes for table `tb_kondisi`
--
ALTER TABLE `tb_kondisi`
 ADD PRIMARY KEY (`id_kondisi`);

--
-- Indexes for table `tb_lokasi_unit`
--
ALTER TABLE `tb_lokasi_unit`
 ADD PRIMARY KEY (`kode_lokasi`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
 ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_pelanggan_detail`
--
ALTER TABLE `tb_pelanggan_detail`
 ADD PRIMARY KEY (`id_pel_detail`), ADD KEY `id_pelanggan` (`id_pelanggan`), ADD KEY `id_jenis_bangunan` (`id_jenis_bangunan`), ADD KEY `id_status_rumah` (`id_status_rumah`), ADD KEY `id_peruntukan` (`id_peruntukan`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
 ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_peruntukan`
--
ALTER TABLE `tb_peruntukan`
 ADD PRIMARY KEY (`id_peruntukan`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
 ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_status_rumah`
--
ALTER TABLE `tb_status_rumah`
 ADD PRIMARY KEY (`id_status_rumah`);

--
-- Indexes for table `tb_water_meter`
--
ALTER TABLE `tb_water_meter`
 ADD PRIMARY KEY (`id_water_meter`), ADD KEY `id_pelanggan` (`id_pelanggan`), ADD KEY `kode_lokasi` (`kode_lokasi`), ADD KEY `id_status` (`id_status`), ADD KEY `id_kondisi` (`id_kondisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_jenis_bangunan`
--
ALTER TABLE `tb_jenis_bangunan`
MODIFY `id_jenis_bangunan` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_kondisi`
--
ALTER TABLE `tb_kondisi`
MODIFY `id_kondisi` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_pelanggan_detail`
--
ALTER TABLE `tb_pelanggan_detail`
MODIFY `id_pel_detail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_peruntukan`
--
ALTER TABLE `tb_peruntukan`
MODIFY `id_peruntukan` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
MODIFY `id_status` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_status_rumah`
--
ALTER TABLE `tb_status_rumah`
MODIFY `id_status_rumah` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_water_meter`
--
ALTER TABLE `tb_water_meter`
MODIFY `id_water_meter` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pelanggan_detail`
--
ALTER TABLE `tb_pelanggan_detail`
ADD CONSTRAINT `tb_pelanggan_detail_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON DELETE CASCADE,
ADD CONSTRAINT `tb_pelanggan_detail_ibfk_2` FOREIGN KEY (`id_jenis_bangunan`) REFERENCES `tb_jenis_bangunan` (`id_jenis_bangunan`),
ADD CONSTRAINT `tb_pelanggan_detail_ibfk_3` FOREIGN KEY (`id_status_rumah`) REFERENCES `tb_status_rumah` (`id_status_rumah`),
ADD CONSTRAINT `tb_pelanggan_detail_ibfk_4` FOREIGN KEY (`id_peruntukan`) REFERENCES `tb_peruntukan` (`id_peruntukan`);

--
-- Constraints for table `tb_water_meter`
--
ALTER TABLE `tb_water_meter`
ADD CONSTRAINT `tb_water_meter_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON DELETE CASCADE,
ADD CONSTRAINT `tb_water_meter_ibfk_2` FOREIGN KEY (`kode_lokasi`) REFERENCES `tb_lokasi_unit` (`kode_lokasi`),
ADD CONSTRAINT `tb_water_meter_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `tb_status` (`id_status`),
ADD CONSTRAINT `tb_water_meter_ibfk_4` FOREIGN KEY (`id_kondisi`) REFERENCES `tb_kondisi` (`id_kondisi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
