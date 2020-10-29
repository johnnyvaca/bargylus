-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           8.0.21 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour bargylus_db
DROP DATABASE IF EXISTS `bargylus_db`;
CREATE DATABASE IF NOT EXISTS `bargylus_db` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bargylus_db`;

-- Listage de la structure de la table bargylus_db. deliveries
DROP TABLE IF EXISTS `deliveries`;
CREATE TABLE IF NOT EXISTS `deliveries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lastname` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `street` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `zip` int unsigned NOT NULL,
  `city` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `user_id` int NOT NULL,
  `visibility` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_deliveries_users1_idx` (`user_id`),
  CONSTRAINT `fk_deliveries_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Listage des données de la table bargylus_db.deliveries : ~4 rows (environ)
DELETE FROM `deliveries`;
/*!40000 ALTER TABLE `deliveries` DISABLE KEYS */;
INSERT INTO `deliveries` (`id`, `firstname`, `lastname`, `street`, `zip`, `city`, `user_id`, `visibility`) VALUES
	(7, 'Johnny', 'Vaca', 'Chemin de renens 13', 1004, 'Lausanne', 13, 1),
	(8, 'Patricia', 'Portilla', 'Chemin des retraires 2', 1002, 'Zurich', 13, 0),
	(17, 'Johnny2', 'Vaca', 'Chemin de renens 13', 1004, 'Lausanne', 13, 0),
	(18, 'Bargylus1', 'Admin', 'Chemin de renens 12', 1004, 'Lausanne', 13, 0);
/*!40000 ALTER TABLE `deliveries` ENABLE KEYS */;

-- Listage de la structure de la table bargylus_db. discounts
DROP TABLE IF EXISTS `discounts`;
CREATE TABLE IF NOT EXISTS `discounts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `percentage` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`start_date`,`end_date`,`percentage`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Listage des données de la table bargylus_db.discounts : ~3 rows (environ)
DELETE FROM `discounts`;
/*!40000 ALTER TABLE `discounts` DISABLE KEYS */;
INSERT INTO `discounts` (`id`, `start_date`, `end_date`, `percentage`) VALUES
	(3, '2001-01-01', '2002-02-02', 13),
	(2, '2012-12-12', '2013-12-12', 12),
	(1, '2020-09-20', '2900-09-21', 0);
/*!40000 ALTER TABLE `discounts` ENABLE KEYS */;

-- Listage de la structure de la table bargylus_db. grapes
DROP TABLE IF EXISTS `grapes`;
CREATE TABLE IF NOT EXISTS `grapes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `color` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `name_2` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Listage des données de la table bargylus_db.grapes : ~12 rows (environ)
DELETE FROM `grapes`;
/*!40000 ALTER TABLE `grapes` DISABLE KEYS */;
INSERT INTO `grapes` (`id`, `name`, `color`) VALUES
	(1, 'Couderc', 'blanc'),
	(2, 'Landal', 'blanc'),
	(3, 'Plant de Brunel', 'blanc'),
	(4, 'Prunelard', 'blanc'),
	(5, 'Alphonse Lavallée', 'blanc'),
	(6, 'Aubun', 'blanc'),
	(7, 'Béclan', 'blanc'),
	(8, 'Aramon', 'blanc'),
	(9, 'Couston', 'Rouge'),
	(10, 'Poulsar', 'Rouge'),
	(11, 'Malvoisie', 'blanc'),
	(12, 'Macabeuie', 'Rouge');
/*!40000 ALTER TABLE `grapes` ENABLE KEYS */;

-- Listage de la structure de la table bargylus_db. invoices
DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `lastname` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `street` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `zip` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `city` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `visibility` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_invoices_users1_idx` (`user_id`),
  CONSTRAINT `fk_invoices_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Listage des données de la table bargylus_db.invoices : ~4 rows (environ)
DELETE FROM `invoices`;
/*!40000 ALTER TABLE `invoices` DISABLE KEYS */;
INSERT INTO `invoices` (`id`, `firstname`, `lastname`, `street`, `zip`, `city`, `user_id`, `visibility`) VALUES
	(1, 'johnny', 'vaca', 'chemin de Renens 13', '1004', 'Lausanne', 13, 0),
	(2, 'Patricia2', 'Jaramillo', 'Chemin des Retraites 2', '1004', 'Lausanne', 13, 1),
	(3, 'Johnnya', 'Vacaa', 'Chemin de renensa', '1004', 'Lausanne', 13, 0),
	(4, 'Johnny2', 'Vaca', 'Chemin de renens 13', '1004', 'Lausanne', 13, 0);
/*!40000 ALTER TABLE `invoices` ENABLE KEYS */;

-- Listage de la structure de la table bargylus_db. modes_payments
DROP TABLE IF EXISTS `modes_payments`;
CREATE TABLE IF NOT EXISTS `modes_payments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Listage des données de la table bargylus_db.modes_payments : ~4 rows (environ)
DELETE FROM `modes_payments`;
/*!40000 ALTER TABLE `modes_payments` DISABLE KEYS */;
INSERT INTO `modes_payments` (`id`, `name`) VALUES
	(3, 'PayPal'),
	(4, 'mastercard'),
	(1, 'postefinane'),
	(2, 'visacard');
/*!40000 ALTER TABLE `modes_payments` ENABLE KEYS */;

-- Listage de la structure de la table bargylus_db. orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `number` int NOT NULL,
  `total_price` float NOT NULL,
  `user_id` int NOT NULL,
  `states_id` int NOT NULL DEFAULT '1',
  `date_purchase` date NOT NULL,
  `mode_payment_id` int NOT NULL,
  `delivery_id` int DEFAULT NULL,
  `invoice_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`number`) USING BTREE,
  KEY `fk_orders_users1_idx` (`user_id`),
  KEY `fk_orders_states1_idx` (`states_id`),
  KEY `fk_orders_modes_payments1_idx` (`mode_payment_id`),
  KEY `fk_orders_deliveries1_idx1` (`delivery_id`),
  KEY `fk_orders_invoices1_idx` (`invoice_id`),
  CONSTRAINT `fk_orders_deliveries1` FOREIGN KEY (`delivery_id`) REFERENCES `deliveries` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_orders_invoices1` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`),
  CONSTRAINT `fk_orders_modes_payments1` FOREIGN KEY (`mode_payment_id`) REFERENCES `modes_payments` (`id`),
  CONSTRAINT `fk_orders_states1` FOREIGN KEY (`states_id`) REFERENCES `states` (`id`),
  CONSTRAINT `fk_orders_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Listage des données de la table bargylus_db.orders : ~2 rows (environ)
DELETE FROM `orders`;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `number`, `total_price`, `user_id`, `states_id`, `date_purchase`, `mode_payment_id`, `delivery_id`, `invoice_id`) VALUES
	(4, 23423423, 45345, 13, 1, '2020-10-07', 1, 7, 2),
	(5, 8765423, 6643, 13, 1, '2020-10-07', 1, 8, 1);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Listage de la structure de la table bargylus_db. orders_contain_wines
DROP TABLE IF EXISTS `orders_contain_wines`;
CREATE TABLE IF NOT EXISTS `orders_contain_wines` (
  `id` int NOT NULL,
  `wine_id` int NOT NULL,
  `order_id` int DEFAULT NULL,
  `quantity` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_wines_has_orders_orders1_idx` (`order_id`),
  KEY `fk_wines_has_orders_wines1_idx` (`wine_id`),
  CONSTRAINT `fk_wines_has_orders_orders1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `fk_wines_has_orders_wines1` FOREIGN KEY (`wine_id`) REFERENCES `wines` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Listage des données de la table bargylus_db.orders_contain_wines : ~5 rows (environ)
DELETE FROM `orders_contain_wines`;
/*!40000 ALTER TABLE `orders_contain_wines` DISABLE KEYS */;
INSERT INTO `orders_contain_wines` (`id`, `wine_id`, `order_id`, `quantity`, `price`) VALUES
	(1, 5, 4, '10', 123),
	(2, 12, 4, '11', 345),
	(4, 1, 4, '23', 22),
	(5, 10, 5, '4', 44),
	(6, 9, 5, '34', 34);
/*!40000 ALTER TABLE `orders_contain_wines` ENABLE KEYS */;

-- Listage de la structure de la table bargylus_db. states
DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Listage des données de la table bargylus_db.states : ~3 rows (environ)
DELETE FROM `states`;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` (`id`, `name`) VALUES
	(1, 'au magasin (2 à 3 jours)'),
	(2, 'en cours (1 à 2 jours)'),
	(3, 'chez vous');
/*!40000 ALTER TABLE `states` ENABLE KEYS */;

-- Listage de la structure de la table bargylus_db. users
DROP TABLE IF EXISTS `users`;
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Listage des données de la table bargylus_db.users : ~15 rows (environ)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `lastname`, `firstname`, `phone_number`, `registration_date`, `birth_date`, `street_home`, `zip`, `city`, `canton`, `password`, `droits`) VALUES
	(1, 'altins.zili@cpnv.ch', 'name', 'user', '0012 345 67 89', '0000-00-00', '0000-00-00', 'Ap #881-2825 Ipsum St.', 239369, 'Bellinzone', 'AR', '$2y$10$W80ECFrJ7Sb15qcR99vw.O2XpC4/Ot/JJnaYD/TuW6DcBlxIRvvzu', 1),
	(2, 'johnnyismael1999@gmail.com', 'Kieran', 'Celeste', '0041 74 11 12 29', '0000-00-00', '0000-00-00', 'P.O. Box 133, 9775 Neque Ave', 92976, 'Soleure', 'GL', '', 0),
	(3, 'congue@Integeraliquamadipiscing.net', 'Jack', 'Hillary', '0041 54 71 24 08', '0000-00-00', '0000-00-00', '342-3175 Tempus Rd.', 5436, 'Köniz', 'VD', '', 0),
	(4, 'lectus.ante@odio.net', 'Gregory', 'Kylee', '0041 19 73 50 68', '0000-00-00', '0000-00-00', '323-5213 Luctus Rd.', 40192, 'Horgen', 'SO', '', 0),
	(5, 'jajja@dfsdf.cg', 'sdf', 'sdf', '0041 70 61 84 33', '0000-00-00', '0000-00-00', 'Ap #368-8278 Consectetuer Rd.', 1399, 'Kriens', 'JU', '$2y$10$kIsa6cW4xx1Zxy2/sH5Ev.tYk7GR9.LS/22MQceDck359wsASm2Yu', 0),
	(6, 'Cras.convallis.convallis@non.com', 'Neil', 'Gillian', '0041 63 31 37 09', '0000-00-00', '0000-00-00', '4007 Vitae Av.', 108701, 'Schwytz', 'FR', '', 0),
	(7, 'vitae.purus@montesnascetur.org', 'Carson', 'Tatyana', '0041 11 65 05 73', '0000-00-00', '0000-00-00', 'P.O. Box 525, 7914 Consequat Avenue', 66306, 'Bienne', 'SG', '', 0),
	(8, 'diam.lorem.auctor@atvelitPellentesque.edu', 'Talon', 'Eugenia', '0041 73 82 31 70', '0000-00-00', '0000-00-00', 'Ap #223-191 Lorem, St.', 4871, 'Neuchâtel', 'VD', '', 0),
	(9, 'altin.zili@cpnv.ch', 'Christen', 'Madison', '0041 79 98 33 12', '0000-00-00', '0000-00-00', '981-2253 Sem Avenue', 250381, 'Winterthour', 'VD', '', 0),
	(10, 'marwan.alhelo@cpnv.ch', 'Wallace', 'Alice', '0041 42 29 09 67', '0000-00-00', '0000-00-00', 'P.O. Box 377, 6484 Morbi St.', 22597, 'Küsnacht', 'JU', '', 0),
	(11, 'yogao-jv@hotmail.com', 'Vaca', 'Johnny', '0763317057', '2020-09-07', '2020-12-12', 'Chemin de renens', 1004, 'Lausanne', 'Vaud', '$2y$10$tICXcp3EJOENwL5s14TEyOIY34QXvsDRqz1RG66DTPiU0ed6sAYhy', 0),
	(13, 'johnny.vaca-jaramillo@cpnv.ch', 'Vaca', 'Johnny', '0763317057', '2020-09-08', '1999-10-16', 'Chemin de renens 13', 1004, 'Lausanne', 'Vaud', '$2y$10$uLuh6JQGpj68wqvLtnmRDeQCjsay4miG9dvD5MaNWi3LWhw3I/gMy', 0),
	(15, 'yogo-jv@hotmail.com', 'Jaramillo', 'Ismael', '076 343 71 20', '2020-09-08', '1999-10-16', 'chemin de renens 13', 1004, 'Lausanne', 'Vaud', '$2y$10$B0Glu8a4OKp/oAvfI4NA3eRbKkUwKUPm2aawpazzaBI5QlizRw6sC', 0),
	(17, 'julien.ithurbide@cpnv.ch', 'Ithurbide', 'Julien', '', '2020-10-07', '2003-01-01', '', 0, '', '', '$2y$10$i7.RTJFweuSPFE5YYlq3aeiLG3X2MC0gWvrqDMC/I8wj5NpcvfsDG', 0),
	(18, 'root', 'root', 'root', '0763317057', '2020-10-11', '2004-01-01', 'Chemin de renens 13', 1004, 'Lausanne', 'Vaud', '$2y$10$YW4cLlLUpkuum8Zn9GN24ODvO6mqyk1wbJKgJb8vtZXLfrEAjh3li', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Listage de la structure de la table bargylus_db. wines
DROP TABLE IF EXISTS `wines`;
CREATE TABLE IF NOT EXISTS `wines` (
  `id` int NOT NULL AUTO_INCREMENT,
  `year` int NOT NULL,
  `winename` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `alcohol` float NOT NULL,
  `basic_price` float NOT NULL,
  `size` int NOT NULL,
  `stock` int NOT NULL,
  `photo` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `discounts_id` int DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniques` (`size`,`winename`,`year`),
  KEY `fk_DiscoutsOfWines_idx` (`discounts_id`),
  CONSTRAINT `fk_DiscoutsOfWines_idx` FOREIGN KEY (`discounts_id`) REFERENCES `discounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Listage des données de la table bargylus_db.wines : ~12 rows (environ)
DELETE FROM `wines`;
/*!40000 ALTER TABLE `wines` DISABLE KEYS */;
INSERT INTO `wines` (`id`, `year`, `winename`, `alcohol`, `basic_price`, `size`, `stock`, `photo`, `discounts_id`) VALUES
	(1, 2011, 'Amigne', 17, 32, 2, 17, 'wine_1.png', 2),
	(2, 2012, 'Païen', 18, 30, 1, 22, 'wine_2.png', 3),
	(3, 2013, 'Emitage', 16, 24, 2, 26, 'wine_3.png', 1),
	(4, 2014, 'Altesse', 20, 30, 1, 19, 'wine_4.png', 3),
	(5, 2015, 'petite-Arvine', 18, 30, 2, 12, 'wine_5.png', 1),
	(6, 2016, 'Arvine', 17, 28, 2, 28, 'wine_6.png', 2),
	(7, 2017, 'Aligoté', 20, 24, 2, 30, 'wine_7.png', 1),
	(8, 2018, 'Muscat', 17, 32, 1, 30, 'wine_1.png', 1),
	(9, 2019, 'Réze', 16, 38, 1, 14, 'wine_2.png', 3),
	(10, 2010, 'Lafnetscha', 16, 38, 1, 27, 'wine_3.png', 1),
	(11, 2009, 'Joubertin', 16, 38, 1, 30, 'wine_4.png', 3),
	(12, 2008, 'Johannisberg', 20, 32, 1, 30, 'wine_1.png', 1);
/*!40000 ALTER TABLE `wines` ENABLE KEYS */;

-- Listage de la structure de la table bargylus_db. wines_compose_grapes
DROP TABLE IF EXISTS `wines_compose_grapes`;
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

-- Listage des données de la table bargylus_db.wines_compose_grapes : ~12 rows (environ)
DELETE FROM `wines_compose_grapes`;
/*!40000 ALTER TABLE `wines_compose_grapes` DISABLE KEYS */;
INSERT INTO `wines_compose_grapes` (`id`, `wine_id`, `grape_id`) VALUES
	(1, 1, 1),
	(2, 2, 2),
	(3, 3, 3),
	(4, 4, 4),
	(5, 5, 5),
	(6, 6, 6),
	(7, 7, 7),
	(8, 8, 8),
	(9, 9, 9),
	(10, 10, 10),
	(11, 11, 11),
	(12, 12, 12);
/*!40000 ALTER TABLE `wines_compose_grapes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
