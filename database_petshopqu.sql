-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.26-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table petshopq.checkout
CREATE TABLE IF NOT EXISTS `checkout` (
  `id_checkout` int(3) NOT NULL AUTO_INCREMENT,
  `id_produk` int(2) NOT NULL,
  `id_user` int(2) NOT NULL,
  `stok` int(3) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id_checkout`),
  KEY `id_produk` (`id_produk`) USING BTREE,
  KEY `id_user` (`id_user`),
  CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table petshopq.checkout: ~0 rows (approximately)
/*!40000 ALTER TABLE `checkout` DISABLE KEYS */;
/*!40000 ALTER TABLE `checkout` ENABLE KEYS */;

-- Dumping structure for table petshopq.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table petshopq.ci_sessions: ~0 rows (approximately)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

-- Dumping structure for table petshopq.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(3) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `edited_at` date NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table petshopq.produk: ~2 rows (approximately)
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` (`id_produk`, `nama`, `harga`, `stok`, `deskripsi`, `created_at`, `edited_at`) VALUES
	(1, 'Shampoo', 10000, 100, 'Shampoo Manusia', '2021-02-25', '2021-02-25'),
	(2, 'Sabun Bayi', 30000, 100, 'Sabun bayi wangi', '2021-02-25', '2021-02-25');
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;

-- Dumping structure for table petshopq.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `role` int(1) NOT NULL,
  `password` varchar(10) NOT NULL,
  `created_at` date NOT NULL,
  `edited_at` date NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table petshopq.user: ~2 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `nama`, `email`, `alamat`, `role`, `password`, `created_at`, `edited_at`) VALUES
	(1, 'Admin', 'admin@test.com', 'Bogor', 1, 'test', '2021-02-25', '2021-02-25'),
	(2, 'Dhimas Panjie H', 'dhimas@gmail.com', 'test', 2, '123123', '2021-02-25', '2021-02-25');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
