-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Versie:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van schoenmerken wordt geschreven
CREATE DATABASE IF NOT EXISTS `schoenmerken` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `schoenmerken`;
merken
-- Structuur van  tabel schoenmerken.merken wordt geschreven
CREATE TABLE IF NOT EXISTS `merken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `maat_37` int(11) DEFAULT NULL,
  `maat_38` int(11) DEFAULT NULL,
  `maat_39` int(11) DEFAULT NULL,
  `maat_40` int(11) DEFAULT NULL,
  `maat_41` int(11) DEFAULT NULL,
  `maat_42` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel schoenmerken.merken: ~6 rows (ongeveer)
/*!40000 ALTER TABLE `merken` DISABLE KEYS */;
INSERT INTO `merken` (`id`, `name`, `maat_37`, `maat_38`, `maat_39`, `maat_40`, `maat_41`, `maat_42`) VALUES
	(1, 'vans', 35, 30, 25, 30, 15, 12),
	(2, 'timberlands', 30, 25, 20, 36, 40, 16),
	(3, 'adidas', 30, 25, 20, 40, 20, 14),
	(4, 'crocs', 60, 50, 40, 70, 55, 32),
	(5, 'converse', 50, 40, 30, 60, 52, 49),
	(6, 'steve madden', 12, 10, 5, 15, 13, 11);
/*!40000 ALTER TABLE `merken` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
