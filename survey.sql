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

-- Dumping structure for table dbsurvey.JenisKabel
CREATE TABLE IF NOT EXISTS `JenisKabel` (
  `IDJenisKabel` int(11) DEFAULT NULL,
  `NmJenisKabel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dbsurvey.JenisKabel: ~0 rows (approximately)
/*!40000 ALTER TABLE `JenisKabel` DISABLE KEYS */;
INSERT INTO `JenisKabel` (`IDJenisKabel`, `NmJenisKabel`) VALUES
	(1, 'jenis kabel 1');
/*!40000 ALTER TABLE `JenisKabel` ENABLE KEYS */;

-- Dumping structure for table dbsurvey.JenisLampu
CREATE TABLE IF NOT EXISTS `JenisLampu` (
  `IDJenisLampu` int(11) NOT NULL AUTO_INCREMENT,
  `NmJenisLampu` varchar(50) DEFAULT NULL,
  `NmJenisLampuPDK` varchar(50) DEFAULT NULL,
  `FAktif` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDJenisLampu`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table dbsurvey.JenisLampu: ~0 rows (approximately)
/*!40000 ALTER TABLE `JenisLampu` DISABLE KEYS */;
INSERT INTO `JenisLampu` (`IDJenisLampu`, `NmJenisLampu`, `NmJenisLampuPDK`, `FAktif`) VALUES
	(1, 'jenis lampu', 'jnslmp', NULL);
/*!40000 ALTER TABLE `JenisLampu` ENABLE KEYS */;

-- Dumping structure for table dbsurvey.JenisTiang
CREATE TABLE IF NOT EXISTS `JenisTiang` (
  `IDJenisTiang` int(11) NOT NULL AUTO_INCREMENT,
  `NmJenisTiang` varchar(50) DEFAULT NULL,
  `NmJenisTiangPDK` varchar(50) DEFAULT NULL,
  `FAktif` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDJenisTiang`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table dbsurvey.JenisTiang: ~0 rows (approximately)
/*!40000 ALTER TABLE `JenisTiang` DISABLE KEYS */;
INSERT INTO `JenisTiang` (`IDJenisTiang`, `NmJenisTiang`, `NmJenisTiangPDK`, `FAktif`) VALUES
	(1, 'Jenis Tiang', 'NMJenis', NULL);
/*!40000 ALTER TABLE `JenisTiang` ENABLE KEYS */;

-- Dumping structure for table dbsurvey.Lampu
CREATE TABLE IF NOT EXISTS `Lampu` (
  `IDLampu` int(11) NOT NULL AUTO_INCREMENT,
  `IDJenisLampu` int(11) NOT NULL DEFAULT '0',
  `WattLampu` int(11) NOT NULL DEFAULT '0',
  `VALampu` int(11) NOT NULL DEFAULT '0',
  `FAktif` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDLampu`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table dbsurvey.Lampu: ~3 rows (approximately)
/*!40000 ALTER TABLE `Lampu` DISABLE KEYS */;
INSERT INTO `Lampu` (`IDLampu`, `IDJenisLampu`, `WattLampu`, `VALampu`, `FAktif`) VALUES
	(1, 1, 100, 100, 100),
	(2, 1, 200, 200, 2000),
	(3, 1, 300, 300, 300);
/*!40000 ALTER TABLE `Lampu` ENABLE KEYS */;

-- Dumping structure for table dbsurvey.LampuPJU
CREATE TABLE IF NOT EXISTS `LampuPJU` (
  `IDLampuPJU` int(11) NOT NULL AUTO_INCREMENT,
  `IDTiang` int(11) DEFAULT NULL,
  `IDLampu` int(11) DEFAULT NULL,
  `KondisiLampu` varchar(50) DEFAULT NULL,
  `Jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDLampuPJU`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table dbsurvey.LampuPJU: ~3 rows (approximately)
/*!40000 ALTER TABLE `LampuPJU` DISABLE KEYS */;
INSERT INTO `LampuPJU` (`IDLampuPJU`, `IDTiang`, `IDLampu`, `KondisiLampu`, `Jumlah`) VALUES
	(1, 5, 1, '3.jpg', 10),
	(2, 5, 2, '3.jpg', 56),
	(3, 5, 1, '3.jpg', 5);
/*!40000 ALTER TABLE `LampuPJU` ENABLE KEYS */;

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
  `Switchs` enum('Belum Pilih','Timer','PHOTO_CELL','Manual') NOT NULL DEFAULT 'Belum Pilih',
  `Grounding` enum('Belum Pilih','Ada','Tidak Ada') DEFAULT 'Belum Pilih',
  `KondisiBox` varchar(255) DEFAULT NULL,
  `Latitude` decimal(11,8) NOT NULL,
  `Longitude` decimal(11,8) DEFAULT NULL,
  `CosPhi` double DEFAULT NULL,
  `Amphere` double DEFAULT NULL,
  `VoltAmpere` double DEFAULT NULL,
  `Watt` double DEFAULT NULL,
  `KabelInner` varchar(50) DEFAULT NULL,
  `KabelOuter` varchar(50) DEFAULT NULL,
  `Tanggal1` datetime DEFAULT NULL,
  `Tanggal2` datetime DEFAULT NULL,
  `StandKWH1` double DEFAULT NULL,
  `StandKWH2` double DEFAULT NULL,
  `Keterangan` enum('Belum Pilih','Berfungsi','Ada','Tidak Ada') DEFAULT 'Belum Pilih',
  PRIMARY KEY (`IDPel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dbsurvey.Survey: ~4 rows (approximately)
/*!40000 ALTER TABLE `Survey` DISABLE KEYS */;
INSERT INTO `Survey` (`NoUrut`, `IDPel`, `Nama`, `Provinsi`, `KabupatenKota`, `Kecamatan`, `Alamat`, `Wilayah`, `Daya`, `JumlahLampu`, `KWhMeter`, `PembatasDaya`, `MCB`, `JumlahMCB`, `Kontaktor`, `Switchs`, `Grounding`, `KondisiBox`, `Latitude`, `Longitude`, `CosPhi`, `Amphere`, `VoltAmpere`, `Watt`, `KabelInner`, `KabelOuter`, `Tanggal1`, `Tanggal2`, `StandKWH1`, `StandKWH2`, `Keterangan`) VALUES
	(1, 1, 'Ikko', '0', '0', '0', 'asd', 'Surabaya', 100, 12, 'Ada', 'Ada', 'Berfungsi', 10, 'Ada', 'Belum Pilih', 'Ada', '==[Pilih Kondisi]==', -7.31404930, 112.77535560, 12, 12, 12, 12, NULL, NULL, '0000-00-00 00:00:00', '2018-05-13 22:16:25', 12, 12, 'Berfungsi'),
	(NULL, 2, '', '', '', '', '', NULL, NULL, NULL, 'Belum Pilih', 'Belum Pilih', 'Belum Pilih', NULL, 'Belum Pilih', 'Belum Pilih', 'Belum Pilih', NULL, 0.00000000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Pilih'),
	(NULL, 3, '', '', '', '', '', NULL, NULL, NULL, 'Belum Pilih', 'Belum Pilih', 'Belum Pilih', NULL, 'Belum Pilih', 'Belum Pilih', 'Belum Pilih', NULL, 0.00000000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Pilih'),
	(4, 5, 'ikkoo', 'test', 'tost', 'kexmem', 'kedung', 'Surabaya', 200, 2, 'Berfungsi', 'Berfungsi', 'Berfungsi', 45, 'Berfungsi', 'PHOTO_CELL', 'Ada', '==[Pilih Kondisi]==', -7.31410510, 112.77533280, 2, 2, 5, 5, NULL, NULL, '0002-11-30 00:00:00', NULL, 5, NULL, 'Berfungsi');
/*!40000 ALTER TABLE `Survey` ENABLE KEYS */;

-- Dumping structure for table dbsurvey.Tiang
CREATE TABLE IF NOT EXISTS `Tiang` (
  `IDTiang` int(11) NOT NULL AUTO_INCREMENT,
  `IDPel` int(11) DEFAULT NULL,
  `IDJenisTiang` int(11) DEFAULT NULL,
  `IDJenisKabel` int(11) DEFAULT NULL,
  `LatitudeTiang` double DEFAULT NULL,
  `LongitudeTiang` double DEFAULT NULL,
  `KeteranganTiang` varchar(50) DEFAULT NULL,
  `FotoTiang` varchar(50) DEFAULT NULL,
  `StatusTiang` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IDTiang`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table dbsurvey.Tiang: ~3 rows (approximately)
/*!40000 ALTER TABLE `Tiang` DISABLE KEYS */;
INSERT INTO `Tiang` (`IDTiang`, `IDPel`, `IDJenisTiang`, `IDJenisKabel`, `LatitudeTiang`, `LongitudeTiang`, `KeteranganTiang`, `FotoTiang`, `StatusTiang`) VALUES
	(5, 5, 1, 1, -7.3140414, 112.7753242, 'true', NULL, 'TERSEBAR'),
	(6, 5, 0, 1, -7.3140433, 112.7753259, 'true', NULL, 'GROUP'),
	(7, 5, 1, 1, -7.314044, 112.7753256, 'true', NULL, 'TERSEBAR');
/*!40000 ALTER TABLE `Tiang` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
