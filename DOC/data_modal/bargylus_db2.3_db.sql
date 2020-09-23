-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           8.0.20 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour bargylus_db
CREATE DATABASE IF NOT EXISTS `bargylus_db` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bargylus_db`;

-- Listage de la structure de la table bargylus_db. discounts
CREATE TABLE IF NOT EXISTS `discounts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `percentage` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`start_date`,`end_date`,`percentage`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table bargylus_db. grapes
CREATE TABLE IF NOT EXISTS `grapes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `color` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `name_2` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table bargylus_db. modes_payments
CREATE TABLE IF NOT EXISTS `modes_payments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table bargylus_db. states
CREATE TABLE IF NOT EXISTS `states` (
  `id` int unsigned NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index 2` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table bargylus_db. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lastname` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `firstname` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone_number` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `registration_date` date NOT NULL,
  `birth_date` date NOT NULL,
  `street_home` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `zip` int NOT NULL,
  `city` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `canton` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `droits` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table bargylus_db. users_buy_wines
CREATE TABLE IF NOT EXISTS `users_buy_wines` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `wine_id` int DEFAULT NULL,
  `mode_id` int NOT NULL,
  `date` date DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `state_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Users_has_Wines_Wines1_idx` (`wine_id`),
  KEY `fk_Users_has_Wines_Users1_idx` (`user_id`),
  KEY `fk_Users_buy_Wines_ModesOfPayments1_idx` (`mode_id`),
  KEY `fk_States_has_Buys` (`state_id`),
  CONSTRAINT `fk_Users_buy_Wines_ModesOfPayments1` FOREIGN KEY (`mode_id`) REFERENCES `modes_payments` (`id`),
  CONSTRAINT `fk_Users_has_Wines_Users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_Users_has_Wines_Wines1` FOREIGN KEY (`wine_id`) REFERENCES `wines` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table bargylus_db. users_choose_mode
CREATE TABLE IF NOT EXISTS `users_choose_mode` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `mode_id` int NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Users_has_ModesOfPayments_ModesOfPayments1_idx` (`mode_id`),
  KEY `fk_Users_has_ModesOfPayments_Users_idx` (`user_id`),
  CONSTRAINT `fk_Users_has_ModesOfPayments_ModesOfPayments1` FOREIGN KEY (`mode_id`) REFERENCES `modes_payments` (`id`),
  CONSTRAINT `fk_Users_has_ModesOfPayments_Users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table bargylus_db. wines
CREATE TABLE IF NOT EXISTS `wines` (
  `id` int NOT NULL AUTO_INCREMENT,
  `year` int NOT NULL,
  `winename` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `alcohol` float NOT NULL,
  `basic_price` float NOT NULL,
  `size` int NOT NULL,
  `stock` int NOT NULL,
  `photo` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `discounts_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniques` (`size`,`winename`,`year`),
  KEY `fk_DiscoutsOfWines_idx` (`discounts_id`),
  CONSTRAINT `fk_DiscoutsOfWines_idx` FOREIGN KEY (`discounts_id`) REFERENCES `discounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table bargylus_db. wines_compose_grapes
CREATE TABLE IF NOT EXISTS `wines_compose_grapes` (
  `id` int NOT NULL,
  `wine_id` int NOT NULL,
  `grape_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Wines_has_Grapes_Bottle1_idx` (`grape_id`),
  KEY `fk_Wines_has_Grapes_Wines1_idx` (`wine_id`),
  CONSTRAINT `fk_Wines_has_Bottles_Bottles1` FOREIGN KEY (`grape_id`) REFERENCES `grapes` (`id`),
  CONSTRAINT `fk_Wines_has_Bottles_Wines1` FOREIGN KEY (`wine_id`) REFERENCES `wines` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Les données exportées n'étaient pas sélectionnées.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
