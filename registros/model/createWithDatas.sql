-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.28 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour registros
DROP DATABASE IF EXISTS `registros`;
CREATE DATABASE IF NOT EXISTS `registros` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `registros`;

-- Listage de la structure de la table registros. culte
DROP TABLE IF EXISTS `culte`;
CREATE TABLE IF NOT EXISTS `culte` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(45) DEFAULT NULL,
  `adultos` int DEFAULT NULL,
  `ninos` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`date`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table registros.culte : ~0 rows (environ)
DELETE FROM `culte`;
/*!40000 ALTER TABLE `culte` DISABLE KEYS */;
INSERT INTO `culte` (`id`, `date`, `adultos`, `ninos`) VALUES
	(11, '2022-03-10', 2000, 20),
	(12, '2022-03-08', 200, 20),
	(15, '2022-03-15', 1000, 10),
	(16, NULL, 100, 10),
	(17, '2022-04-20', 100, 10),
	(18, '2022-03-18', 100, 10);
/*!40000 ALTER TABLE `culte` ENABLE KEYS */;

-- Listage de la structure de la table registros. services
DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table registros.services : ~0 rows (environ)
DELETE FROM `services`;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `name`) VALUES
	(4, 'piano'),
	(5, 'bateria'),
	(6, 'direccion');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Listage de la structure de la table registros. users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table registros.users : ~0 rows (environ)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `firstname`, `lastname`) VALUES
	(6, 'ismael', 'vaca'),
	(7, 'kerly', 'vaca'),
	(8, 'patricia', 'jaramillo');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Listage de la structure de la table registros. users_has_services
DROP TABLE IF EXISTS `users_has_services`;
CREATE TABLE IF NOT EXISTS `users_has_services` (
  `users_id` int DEFAULT NULL,
  `services_id` int DEFAULT NULL,
  `culte_id` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`users_id`,`culte_id`),
  KEY `fk_users_has_services_services1_idx` (`services_id`),
  KEY `fk_users_has_services_users_idx` (`users_id`),
  KEY `fk_users_has_services_culte1_idx` (`culte_id`),
  CONSTRAINT `fk_users_has_services_culte1` FOREIGN KEY (`culte_id`) REFERENCES `culte` (`id`),
  CONSTRAINT `fk_users_has_services_services1` FOREIGN KEY (`services_id`) REFERENCES `services` (`id`),
  CONSTRAINT `fk_users_has_services_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table registros.users_has_services : ~0 rows (environ)
DELETE FROM `users_has_services`;
/*!40000 ALTER TABLE `users_has_services` DISABLE KEYS */;
INSERT INTO `users_has_services` (`users_id`, `services_id`, `culte_id`, `id`) VALUES
	(6, 5, 11, 1),
	(7, 4, 11, 2),
	(8, 6, 11, 3),
	(7, 5, 12, 4),
	(8, 6, 12, 5),
	(6, 4, 12, 6),
	(NULL, NULL, 15, 65),
	(NULL, NULL, 15, 66);
/*!40000 ALTER TABLE `users_has_services` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
