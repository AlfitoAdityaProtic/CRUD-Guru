-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_ukt
CREATE DATABASE IF NOT EXISTS `db_ukt` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_ukt`;

-- Dumping structure for table db_ukt.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` char(9) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `angkatan` char(4) DEFAULT NULL,
  `no_daftar` varchar(10) DEFAULT NULL,
  `no_va_daftar` varchar(16) DEFAULT NULL,
  `no_va_ukt` varchar(16) DEFAULT NULL,
  `tarif_spi` int(11) DEFAULT NULL,
  `tarif_ukt_awal` int(11) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_ukt.mahasiswa: ~1 rows (approximately)
DELETE FROM `mahasiswa`;
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` (`nim`, `nama`, `angkatan`, `no_daftar`, `no_va_daftar`, `no_va_ukt`, `tarif_spi`, `tarif_ukt_awal`) VALUES
	('190202910', 'Arifin', '2019', '0123456789', '9880098723456789', '9880098790202910', 5500000, 5000000),
	('200302091', 'Talia', '2020', '12345', '9880098712345', '9880098700302091', 5000000, 2500000);
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;

-- Dumping structure for table db_ukt.spi
CREATE TABLE IF NOT EXISTS `spi` (
  `id_spi` int(11) NOT NULL AUTO_INCREMENT,
  `nim` char(9) DEFAULT NULL,
  `tarif_spi` int(11) DEFAULT NULL,
  `sisa_spi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_spi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_ukt.spi: ~0 rows (approximately)
DELETE FROM `spi`;
/*!40000 ALTER TABLE `spi` DISABLE KEYS */;
INSERT INTO `spi` (`id_spi`, `nim`, `tarif_spi`, `sisa_spi`) VALUES
	(1, '190202910', 5500000, NULL),
	(2, '200302091', 5000000, NULL);
/*!40000 ALTER TABLE `spi` ENABLE KEYS */;

-- Dumping structure for table db_ukt.tb_calon
CREATE TABLE IF NOT EXISTS `tb_calon` (
  `id_calon` int(11) NOT NULL AUTO_INCREMENT,
  `organisasi` enum('Badan Perwakilan Mahasiswa','Badan Eksekutif Mahasiswa','','') NOT NULL,
  `no_urut` int(2) NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `foto_calon` varchar(200) NOT NULL,
  `visimisi_calon` varchar(200) NOT NULL,
  PRIMARY KEY (`id_calon`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ukt.tb_calon: ~4 rows (approximately)
DELETE FROM `tb_calon`;
/*!40000 ALTER TABLE `tb_calon` DISABLE KEYS */;
INSERT INTO `tb_calon` (`id_calon`, `organisasi`, `no_urut`, `nama_calon`, `foto_calon`, `visimisi_calon`) VALUES
	(1, 'Badan Perwakilan Mahasiswa', 1, 'Rafli', 'coconut-wit.jpg', 'coconut-wit.jpg'),
	(2, 'Badan Perwakilan Mahasiswa', 2, 'Lalala', 'coconut-wit.jpg', 'coconut-wit.jpg'),
	(3, 'Badan Eksekutif Mahasiswa', 1, 'Hello', 'coconut-wit.jpg', 'coconut-wit.jpg'),
	(4, 'Badan Eksekutif Mahasiswa', 2, 'Lalala', 'coconut-wit.jpg', 'coconut-wit.jpg');
/*!40000 ALTER TABLE `tb_calon` ENABLE KEYS */;

-- Dumping structure for table db_ukt.tb_pengguna
CREATE TABLE IF NOT EXISTS `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `jurusan` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Administrator','Petugas','Pemilih') NOT NULL,
  `status` enum('2','1','0') NOT NULL,
  `jenis` enum('PST','PAN') NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ukt.tb_pengguna: ~7 rows (approximately)
DELETE FROM `tb_pengguna`;
/*!40000 ALTER TABLE `tb_pengguna` DISABLE KEYS */;
INSERT INTO `tb_pengguna` (`id_pengguna`, `jurusan`, `username`, `password`, `level`, `status`, `jenis`) VALUES
	(1, 'TI', 'admin', '1', 'Administrator', '1', 'PAN'),
	(2, 'TI', 'tugas', '1', 'Petugas', '1', 'PAN'),
	(3, 'TI', 'joni1', '5763', 'Pemilih', '0', 'PST'),
	(4, 'TI', 'somat2', '5406', 'Pemilih', '0', 'PST'),
	(5, 'TI', 'jum', '1319', 'Pemilih', '0', 'PST'),
	(6, 'TI', 'darto13', '9507', 'Pemilih', '1', 'PST'),
	(7, 'TI', 'tes', '9294', 'Pemilih', '0', 'PST');
/*!40000 ALTER TABLE `tb_pengguna` ENABLE KEYS */;

-- Dumping structure for table db_ukt.tb_vote
CREATE TABLE IF NOT EXISTS `tb_vote` (
  `id_vote` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemilih` int(11) NOT NULL,
  `id_calon` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_vote`),
  KEY `id_calon` (`id_calon`),
  CONSTRAINT `tb_vote_ibfk_1` FOREIGN KEY (`id_calon`) REFERENCES `tb_calon` (`id_calon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_ukt.tb_vote: ~0 rows (approximately)
DELETE FROM `tb_vote`;
/*!40000 ALTER TABLE `tb_vote` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_vote` ENABLE KEYS */;

-- Dumping structure for table db_ukt.tb_votebem
CREATE TABLE IF NOT EXISTS `tb_votebem` (
  `id_votebem` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemilih` int(11) NOT NULL,
  `id_calon` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_votebem`),
  KEY `id_calon` (`id_calon`),
  CONSTRAINT `tb_votebem_ibfk_1` FOREIGN KEY (`id_calon`) REFERENCES `tb_calon` (`id_calon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_ukt.tb_votebem: ~0 rows (approximately)
DELETE FROM `tb_votebem`;
/*!40000 ALTER TABLE `tb_votebem` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_votebem` ENABLE KEYS */;

-- Dumping structure for trigger db_ukt.trg_mhs_spi
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `trg_mhs_spi` AFTER INSERT ON `mahasiswa` FOR EACH ROW BEGIN
	INSERT INTO spi VALUES (NULL, new.nim, new.tarif_spi, NULL);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger db_ukt.trg_va
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `trg_va` BEFORE INSERT ON `mahasiswa` FOR EACH ROW BEGIN
	SET new.no_va_daftar = CONCAT('98800987', RIGHT(new.no_daftar,8));
	SET new.no_va_ukt = CONCAT('98800987', RIGHT(new.nim,8));
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
