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
DROP DATABASE IF EXISTS `bargylus_db`;
CREATE DATABASE IF NOT EXISTS `bargylus_db` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bargylus_db`;

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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `state` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`number`) USING BTREE /*!80000 INVISIBLE */,
  KEY `fk_orders_users1_idx` (`user_id`),
  CONSTRAINT `fk_orders_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Listage des données de la table bargylus_db.orders : ~3 rows (environ)
DELETE FROM `orders`;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `number`, `total_price`, `user_id`, `state`) VALUES
	(1, 1, 500, 1, 1),
	(2, 2, 400, 1, 2),
	(3, 3, 300, 1, 3);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Listage de la structure de la table bargylus_db. orders_contain_wines
DROP TABLE IF EXISTS `orders_contain_wines`;
CREATE TABLE IF NOT EXISTS `orders_contain_wines` (
  `id` int NOT NULL,
  `wine_id` int NOT NULL,
  `order_id` int DEFAULT NULL,
  `quantity` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_wines_has_orders_orders1_idx` (`order_id`),
  KEY `fk_wines_has_orders_wines1_idx` (`wine_id`),
  CONSTRAINT `fk_wines_has_orders_orders1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `fk_wines_has_orders_wines1` FOREIGN KEY (`wine_id`) REFERENCES `wines` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Listage des données de la table bargylus_db.orders_contain_wines : ~0 rows (environ)
DELETE FROM `orders_contain_wines`;
/*!40000 ALTER TABLE `orders_contain_wines` DISABLE KEYS */;
INSERT INTO `orders_contain_wines` (`id`, `wine_id`, `order_id`, `quantity`, `price`) VALUES
	(1, 1, 2, '3', 23),
	(2, 6, 2, '5', 67),
	(3, 2, 2, '12', 134);
/*!40000 ALTER TABLE `orders_contain_wines` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Listage des données de la table bargylus_db.users : ~14 rows (environ)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `lastname`, `firstname`, `phone_number`, `registration_date`, `birth_date`, `street_home`, `zip`, `city`, `canton`, `password`, `droits`) VALUES
	(1, 'user@name.com', 'name', 'user', '0012 345 67 89', '0000-00-00', '0000-00-00', 'Ap #881-2825 Ipsum St.', 239369, 'Bellinzone', 'AR', '$2y$10$W80ECFrJ7Sb15qcR99vw.O2XpC4/Ot/JJnaYD/TuW6DcBlxIRvvzu', 1),
	(2, 'scelerisque.lorem@sapien.net', 'Kieran', 'Celeste', '0041 74 11 12 29', '0000-00-00', '0000-00-00', 'P.O. Box 133, 9775 Neque Ave', 92976, 'Soleure', 'GL', '', 0),
	(3, 'congue@Integeraliquamadipiscing.net', 'Jack', 'Hillary', '0041 54 71 24 08', '0000-00-00', '0000-00-00', '342-3175 Tempus Rd.', 5436, 'Köniz', 'VD', '', 0),
	(4, 'lectus.ante@odio.net', 'Gregory', 'Kylee', '0041 19 73 50 68', '0000-00-00', '0000-00-00', '323-5213 Luctus Rd.', 40192, 'Horgen', 'SO', '', 0),
	(5, 'nec.ligula@nisidictum.org', 'Neville', 'Callie', '0041 70 61 84 33', '0000-00-00', '0000-00-00', 'Ap #368-8278 Consectetuer Rd.', 1399, 'Kriens', 'JU', '', 0),
	(6, 'Cras.convallis.convallis@non.com', 'Neil', 'Gillian', '0041 63 31 37 09', '0000-00-00', '0000-00-00', '4007 Vitae Av.', 108701, 'Schwytz', 'FR', '', 0),
	(7, 'vitae.purus@montesnascetur.org', 'Carson', 'Tatyana', '0041 11 65 05 73', '0000-00-00', '0000-00-00', 'P.O. Box 525, 7914 Consequat Avenue', 66306, 'Bienne', 'SG', '', 0),
	(8, 'diam.lorem.auctor@atvelitPellentesque.edu', 'Talon', 'Eugenia', '0041 73 82 31 70', '0000-00-00', '0000-00-00', 'Ap #223-191 Lorem, St.', 4871, 'Neuchâtel', 'VD', '', 0),
	(9, 'nulla.Cras.eu@nuncinterdumfeugiat.org', 'Christen', 'Madison', '0041 79 98 33 12', '0000-00-00', '0000-00-00', '981-2253 Sem Avenue', 250381, 'Winterthour', 'VD', '', 0),
	(10, 'ac.nulla.In@nec.org', 'Wallace', 'Alice', '0041 42 29 09 67', '0000-00-00', '0000-00-00', 'P.O. Box 377, 6484 Morbi St.', 22597, 'Küsnacht', 'JU', '', 0),
	(11, 'yogao-jv@hotmail.com', 'Vaca', 'Johnny', '0763317057', '2020-09-07', '2020-12-12', 'Chemin de renens', 1004, 'Lausanne', 'Vaud', '$2y$10$tICXcp3EJOENwL5s14TEyOIY34QXvsDRqz1RG66DTPiU0ed6sAYhy', 0),
	(12, 'root', 'root', 'root', 'root', '2020-09-07', '1999-12-12', 'root', 1002, 'root', 'root', '$2y$10$kIsa6cW4xx1Zxy2/sH5Ev.tYk7GR9.LS/22MQceDck359wsASm2Yu', 0),
	(13, 'johnny.vaca-jaramillo@cpnv.ch', 'Vaca', 'Johnny', '0763317057', '2020-09-08', '1999-10-16', 'Chemin de renens 13', 1004, 'Lausanne', 'Vaud', '$2y$10$uLuh6JQGpj68wqvLtnmRDeQCjsay4miG9dvD5MaNWi3LWhw3I/gMy', 1),
	(15, 'yogo-jv@hotmail.com', 'Jaramillo', 'Ismael', '076 343 71 20', '2020-09-08', '1999-10-16', 'chemin de renens 13', 1004, 'Lausanne', 'Vaud', '$2y$10$B0Glu8a4OKp/oAvfI4NA3eRbKkUwKUPm2aawpazzaBI5QlizRw6sC', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Listage de la structure de la table bargylus_db. users_choose_mode
DROP TABLE IF EXISTS `users_choose_mode`;
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

-- Listage des données de la table bargylus_db.users_choose_mode : ~50 rows (environ)
DELETE FROM `users_choose_mode`;
/*!40000 ALTER TABLE `users_choose_mode` DISABLE KEYS */;
INSERT INTO `users_choose_mode` (`id`, `user_id`, `mode_id`, `date`) VALUES
	(1, 6, 3, '2019-05-15'),
	(2, 4, 3, '2018-10-19'),
	(3, 6, 4, '2019-04-09'),
	(4, 3, 2, '2019-06-12'),
	(5, 8, 2, '2018-05-17'),
	(6, 5, 3, '2018-08-25'),
	(7, 3, 2, '2019-07-21'),
	(8, 5, 4, '2019-03-03'),
	(9, 6, 1, '2018-01-05'),
	(10, 2, 1, '2018-01-03'),
	(11, 9, 2, '2020-05-11'),
	(12, 3, 2, '2018-03-27'),
	(13, 8, 3, '2018-10-10'),
	(14, 8, 2, '2018-01-10'),
	(15, 7, 2, '2019-11-10'),
	(16, 3, 1, '2019-01-12'),
	(17, 7, 1, '2018-04-17'),
	(18, 6, 2, '2018-03-08'),
	(19, 2, 1, '2018-03-31'),
	(20, 8, 2, '2019-05-10'),
	(21, 9, 3, '2018-01-06'),
	(22, 8, 3, '2019-06-26'),
	(23, 7, 1, '2019-12-26'),
	(24, 3, 4, '2019-11-03'),
	(25, 2, 4, '2018-11-06'),
	(26, 5, 1, '2020-04-24'),
	(27, 9, 4, '2018-01-09'),
	(28, 6, 2, '2018-01-01'),
	(29, 4, 1, '2018-11-28'),
	(30, 6, 4, '2018-08-17'),
	(31, 10, 2, '2019-03-15'),
	(32, 1, 3, '2018-11-28'),
	(33, 4, 1, '2019-07-05'),
	(34, 2, 4, '2018-01-03'),
	(35, 4, 2, '2019-10-25'),
	(36, 7, 4, '2018-10-04'),
	(37, 5, 3, '2020-01-13'),
	(38, 4, 1, '2020-02-20'),
	(39, 1, 1, '2018-08-28'),
	(40, 10, 3, '2018-02-09'),
	(41, 4, 3, '2020-01-27'),
	(42, 1, 1, '2020-05-23'),
	(43, 7, 4, '2018-09-24'),
	(44, 10, 3, '2019-12-09'),
	(45, 7, 4, '2019-10-23'),
	(46, 1, 1, '2019-12-25'),
	(47, 5, 2, '2019-01-15'),
	(48, 4, 4, '2019-12-10'),
	(49, 6, 1, '2020-03-02'),
	(50, 2, 2, '2019-03-07');
/*!40000 ALTER TABLE `users_choose_mode` ENABLE KEYS */;

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
	(1, 2011, 'Amigne', 17, 32, 2, 29, 'wine_1.png', 2),
	(2, 2012, 'Païen', 18, 30, 1, 22, 'wine_2.png', 3),
	(3, 2013, 'Emitage', 16, 24, 2, 28, 'wine_3.png', 1),
	(4, 2014, 'Altesse', 20, 30, 1, 30, 'wine_4.png', 3),
	(5, 2015, 'petite-Arvine', 18, 30, 2, 28, 'wine_5.png', 1),
	(6, 2016, 'Arvine', 17, 28, 2, 30, 'wine_6.png', 2),
	(7, 2017, 'Aligoté', 20, 24, 2, 30, 'wine_7.png', 1),
	(8, 2018, 'Muscat', 17, 32, 1, 30, 'wine_1.png', 1),
	(9, 2019, 'Réze', 16, 38, 1, 24, 'wine_2.png', 3),
	(10, 2010, 'Lafnetscha', 16, 38, 1, 30, 'wine_3.png', 1),
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
bargylus_db