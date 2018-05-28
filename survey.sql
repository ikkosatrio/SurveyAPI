-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.30-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for dbsurvey
CREATE DATABASE IF NOT EXISTS `dbsurvey` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbsurvey`;

-- Dumping structure for table dbsurvey.Lampu
CREATE TABLE IF NOT EXISTS `Lampu` (
  `IDLampu` int(11) NOT NULL AUTO_INCREMENT,
  `IDPel` int(11) NOT NULL DEFAULT '0',
  `KondisiLampu` varchar(255) NOT NULL DEFAULT '0',
  `Latitude` varchar(255) NOT NULL DEFAULT '0',
  `Longitude` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDLampu`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table dbsurvey.Lampu: ~3 rows (approximately)
/*!40000 ALTER TABLE `Lampu` DISABLE KEYS */;
INSERT INTO `Lampu` (`IDLampu`, `IDPel`, `KondisiLampu`, `Latitude`, `Longitude`) VALUES
	(1, 1, 'test', '-7.321225', '112.76889'),
	(2, 1, 'test2', '-7.3188414', '112.7776473'),
	(3, 1, 'test3', '-7.314054', '112.775857');
/*!40000 ALTER TABLE `Lampu` ENABLE KEYS */;

-- Dumping structure for table dbsurvey.Survey
CREATE TABLE IF NOT EXISTS `Survey` (
  `NoUrut` int(11) DEFAULT NULL,
  `IDPel` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Provinsi` char(50) NOT NULL,
  `KabupatenKota` char(50) NOT NULL,
  `Kecamatan` char(50) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Wilayah` varchar(255) DEFAULT NULL,
  `Daya` int(11) DEFAULT NULL,
  `JumlahLampu` int(11) DEFAULT NULL,
  `KWhMeter` enum('Belum Pilih','Berfungsi','Ada','Tidak Ada') DEFAULT 'Belum Pilih',
  `PembatasDaya` enum('Belum Pilih','Berfungsi','Ada','Tidak Ada') DEFAULT 'Belum Pilih',
  `MCB` enum('Belum Pilih','Berfungsi','Ada','Tidak Ada') DEFAULT 'Belum Pilih',
  `JumlahMCB` int(11) DEFAULT NULL,
  `Kontaktor` enum('Belum Pilih','Berfungsi','Ada','Tidak Ada') DEFAULT 'Belum Pilih',
  `Switchs` enum('Belum Pilih','Timer','PhotoCell','Manual') DEFAULT 'Belum Pilih',
  `Grounding` enum('Belum Pilih','Ada','Tidak Ada') DEFAULT 'Belum Pilih',
  `KondisiBox` varchar(255) DEFAULT NULL,
  `Latitude` decimal(11,8) NOT NULL,
  `Longitude` decimal(11,8) DEFAULT NULL,
  `CosPhi` double DEFAULT NULL,
  `Amphere` double DEFAULT NULL,
  `VoltAmpere` double DEFAULT NULL,
  `Watt` double DEFAULT NULL,
  `Tanggal1` datetime DEFAULT NULL,
  `Tanggal2` datetime DEFAULT NULL,
  `StandKWH1` double DEFAULT NULL,
  `StandKWH2` double DEFAULT NULL,
  `Keterangan` enum('Belum Pilih','Berfungsi','Ada','Tidak Ada') DEFAULT 'Belum Pilih',
  PRIMARY KEY (`IDPel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dbsurvey.Survey: ~0 rows (approximately)
/*!40000 ALTER TABLE `Survey` DISABLE KEYS */;
INSERT INTO `Survey` (`NoUrut`, `IDPel`, `Nama`, `Provinsi`, `KabupatenKota`, `Kecamatan`, `Alamat`, `Wilayah`, `Daya`, `JumlahLampu`, `KWhMeter`, `PembatasDaya`, `MCB`, `JumlahMCB`, `Kontaktor`, `Switchs`, `Grounding`, `KondisiBox`, `Latitude`, `Longitude`, `CosPhi`, `Amphere`, `VoltAmpere`, `Watt`, `Tanggal1`, `Tanggal2`, `StandKWH1`, `StandKWH2`, `Keterangan`) VALUES
	(1, 1, 'Ikko', '0', '0', '0', 'asd', 'Surabaya', 100, 12, '', '', '', 10, '', '', '', '==[Pilih Kondisi]==', -7.31402838, 112.77533554, 12, 12, 12, 12, '2005-07-18 00:00:00', '2018-05-13 22:16:25', 12, 12, '');
/*!40000 ALTER TABLE `Survey` ENABLE KEYS */;

-- Dumping structure for table dbsurvey.tulungagung
CREATE TABLE IF NOT EXISTS `tulungagung` (
  `no` int(3) NOT NULL,
  `id_pel` char(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prov` char(2) NOT NULL,
  `kabkot` char(2) NOT NULL,
  `kec` char(2) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `wilayah` varchar(50) NOT NULL,
  `lat` decimal(9,5) NOT NULL,
  `lon` decimal(9,5) NOT NULL,
  `tgl` char(10) NOT NULL,
  `jml_lp` int(2) NOT NULL,
  `kwh` varchar(10) NOT NULL,
  `batas` varchar(10) NOT NULL,
  `kontaktor` varchar(10) NOT NULL,
  `mcb` varchar(10) NOT NULL,
  `jml_mcb` int(1) NOT NULL,
  `switch` varchar(10) NOT NULL,
  `grnd` varchar(10) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `cospi` decimal(3,2) NOT NULL,
  `ampere` int(5) NOT NULL,
  `va` int(6) NOT NULL,
  `standm` int(6) NOT NULL,
  `ket` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table dbsurvey.tulungagung: 8 rows
/*!40000 ALTER TABLE `tulungagung` DISABLE KEYS */;
INSERT INTO `tulungagung` (`no`, `id_pel`, `nama`, `prov`, `kabkot`, `kec`, `alamat`, `wilayah`, `lat`, `lon`, `tgl`, `jml_lp`, `kwh`, `batas`, `kontaktor`, `mcb`, `jml_mcb`, `switch`, `grnd`, `kondisi`, `cospi`, `ampere`, `va`, `standm`, `ket`) VALUES
	(1, '514030345879', 'PJU', '35', '04', '02', 'GAPURAPERBATASAN', 'NGANTRU_METERISASI_LAMA', -7.31405, 112.77533, '12/12/12\r\n', 2, 'BERFUNGSI', 'TIDAK_ADA', 'BERFUNGSI', 'TIDAK_ADA', 2, 'FOTO_SEL', 'ADA', 'BAIK', 1.00, 2, 2, 2, 'BERFUNGSI'),
	(2, '514030345887', 'PJU', '35', '04', '', 'PATIMURANGANTRU', 'NGANTRU_METERISASI_LAMA', -7.29758, 112.76679, '', 0, 'BERFUNGSI', 'BERFUNGSI', 'BERFUNGSI', '==[Pilih M', 0, 'MANUAL', 'ADA', 'BAIK', 0.00, 0, 0, 0, 'BERFUNGSI'),
	(3, '514030345990', 'PJU', '35', '04', '', 'DSJABALSARI', 'SUMBERGEMPOL_METERISASI_LAMA', -7.29758, 112.76679, '', 0, 'BERFUNGSI', 'BERFUNGSI', 'BERFUNGSI', '==[Pilih M', 3, 'MANUAL', 'ADA', 'BAIK', 0.00, 0, 0, 0, 'BERFUNGSI'),
	(4, '514030354175', 'PJU', '35', '04', '', 'DSPULEREJO', 'NGANTRU_METERISASI_LAMA', 0.00000, 0.00000, '', 0, '', '', '', '', 0, '', '', '', 0.00, 0, 0, 0, ''),
	(5, '514030354183', 'PJU', '35', '04', '', 'DSNGANTRU', 'NGANTRU_METERISASI_LAMA', 0.00000, 0.00000, '', 0, '', '', '', '', 0, '', '', '', 0.00, 0, 0, 0, ''),
	(6, '514030386590', 'PJU', '35', '04', '', 'DSSRIKATON', 'NGANTRU_METERISASI_LAMA', 0.00000, 0.00000, '', 0, '', '', '', '', 0, '', '', '', 0.00, 0, 0, 0, ''),
	(7, '514030386603', 'PJU', '35', '04', '', 'DSPAKELNGANTRU', 'NGANTRU_METERISASI_LAMA', 0.00000, 0.00000, '', 0, '', '', '', '', 0, '', '', '', 0.00, 0, 0, 0, ''),
	(8, '514030386611', 'PJU', '35', '04', '', 'RAYANGANTRU', 'NGANTRU_METERISASI_LAMA', 0.00000, 0.00000, '', 0, '', '', '', '', 0, '', '', '', 0.00, 0, 0, 0, '');
/*!40000 ALTER TABLE `tulungagung` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
