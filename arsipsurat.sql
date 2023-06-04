-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for arsip_surat_magang
CREATE DATABASE IF NOT EXISTS `arsip_surat_magang` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `arsip_surat_magang`;

-- Dumping structure for table arsip_surat_magang.surat_keluar
CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL DEFAULT '',
  `noHP` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamatTujuan` varchar(200) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table arsip_surat_magang.surat_masuk
CREATE TABLE IF NOT EXISTS `surat_masuk` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL DEFAULT '',
  `noHP` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  `alamatTujuan` varchar(200) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.


-- Dumping database structure for arsip_surat_penelitian
CREATE DATABASE IF NOT EXISTS `arsip_surat_penelitian` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `arsip_surat_penelitian`;

-- Dumping structure for table arsip_surat_penelitian.surat_keluar
CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `noHP` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  `alamatTujuan` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table arsip_surat_penelitian.surat_masuk
CREATE TABLE IF NOT EXISTS `surat_masuk` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `noHP` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  `alamatTujuan` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
