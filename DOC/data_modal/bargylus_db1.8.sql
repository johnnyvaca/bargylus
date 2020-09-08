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
CREATE DATABASE IF NOT EXISTS `bargylus_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bargylus_db`;

-- Listage de la structure de la table bargylus_db. grapes_varieties
CREATE TABLE IF NOT EXISTS `grapes_varieties` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `name_2` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- Listage des données de la table bargylus_db.grapes_varieties : ~51 rows (environ)
DELETE FROM `grapes_varieties`;
/*!40000 ALTER TABLE `grapes_varieties` DISABLE KEYS */;
INSERT INTO `grapes_varieties` (`id`, `name`, `color`) VALUES
	(0, 'Persan noir', 'noir'),
	(1, 'Couderc noir', 'noir'),
	(2, 'Landal noir', 'noir'),
	(3, 'Plant de Brunel noir', 'noir'),
	(4, 'Prunelard noir', 'noir'),
	(5, 'Alphonse Lavallée noir', 'noir'),
	(6, 'Aubun noir', 'noir'),
	(7, 'Béclan noir', 'noir'),
	(8, 'Aramon noir', 'noir'),
	(9, 'Couston noir', 'noir'),
	(10, 'Poulsard noir', 'noir'),
	(11, 'Joubertin noir', 'noir'),
	(12, 'Muscat à petits grains rouges', 'noir'),
	(13, 'Gamay de Bouze noir', 'noir'),
	(14, 'Béquignol noir', 'noir'),
	(15, 'Fleurien noir', 'noir'),
	(16, 'Aléatico noir', 'noir'),
	(17, 'Ganson noir', 'noir'),
	(18, 'Chatus noir', 'noir'),
	(19, 'Brun Fourca noir', 'noir'),
	(20, 'Calitor noir', 'noir'),
	(21, 'Sauvignon gris', 'gris'),
	(22, 'Pinot Gris', 'gris'),
	(23, 'Grenache gris', 'gris'),
	(24, 'Piquepoul gris', 'gris'),
	(25, 'Terret gris', 'gris'),
	(26, 'Aramon gris', 'gris'),
	(27, 'Grolleau gris', 'gris'),
	(28, 'Rivairenc', 'gris'),
	(29, 'Trousseau gris', 'gris'),
	(30, 'Cardinal rouge', 'rouge'),
	(31, 'Barbaroux rosé', 'rosé'),
	(32, 'Chasselas rosé', 'rosé'),
	(33, 'Clairette rosé', 'rosé'),
	(34, 'Gewurztraminer rosé', 'rosé'),
	(35, 'Mauzac rosé', 'rosé'),
	(36, 'Mustac à petits grains rosé', 'rosé'),
	(37, 'Rosé du Var rosé', 'rosé'),
	(38, 'Rubilande rosé', 'rosé'),
	(39, 'Savagnin rosé', 'rosé'),
	(40, 'Velteliner rouge précoce rosé', 'rosé'),
	(41, 'Cinsault rosé', 'rosé'),
	(42, 'Codivarta blanc', 'blanc'),
	(43, 'Len de l’El blanc', 'blanc'),
	(44, 'Claverie blanc', 'blanc'),
	(45, 'Perdea blanc', 'blanc'),
	(46, 'Pinot blanc', 'blanc'),
	(47, 'Folignan blanc', 'blanc'),
	(48, 'Muscat d’Alexandrie blanc', 'blanc'),
	(49, 'Baco blanc', 'blanc'),
	(50, 'Macabeu blanc', 'blanc');
/*!40000 ALTER TABLE `grapes_varieties` ENABLE KEYS */;

-- Listage de la structure de la table bargylus_db. modes_payments
CREATE TABLE IF NOT EXISTS `modes_payments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Listage des données de la table bargylus_db.modes_payments : ~4 rows (environ)
DELETE FROM `modes_payments`;
/*!40000 ALTER TABLE `modes_payments` DISABLE KEYS */;
INSERT INTO `modes_payments` (`id`, `name`) VALUES
	(4, 'mastercard'),
	(3, 'PayPal'),
	(1, 'postefinane'),
	(2, 'visacard');
/*!40000 ALTER TABLE `modes_payments` ENABLE KEYS */;

-- Listage de la structure de la table bargylus_db. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  `registration_date` date NOT NULL,
  `birth_date` date NOT NULL,
  `street_home` varchar(45) NOT NULL,
  `zip` int NOT NULL,
  `city` varchar(45) NOT NULL,
  `canton` varchar(45) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `droits` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Listage des données de la table bargylus_db.users : ~10 rows (environ)
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
	(13, 'johnny.vaca-jaramillo@cpnv.ch', 'Vaca', 'Johnny', '0763317057', '2020-09-08', '1999-10-16', 'Chemin de renens 13', 1004, 'Lausanne', 'Vaud', '$2y$10$uLuh6JQGpj68wqvLtnmRDeQCjsay4miG9dvD5MaNWi3LWhw3I/gMy', 0),
	(15, 'yogo-jv@hotmail.com', 'Jaramillo', 'Ismael', '076 343 71 20', '2020-09-08', '1999-10-16', 'chemin de renens 13', 1004, 'Lausanne', 'Vaud', '$2y$10$B0Glu8a4OKp/oAvfI4NA3eRbKkUwKUPm2aawpazzaBI5QlizRw6sC', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Listage de la structure de la table bargylus_db. users_buy_wines
CREATE TABLE IF NOT EXISTS `users_buy_wines` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `wine_id` int DEFAULT NULL,
  `mode_id` int NOT NULL,
  `date` date DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Users_has_Wines_Wines1_idx` (`wine_id`),
  KEY `fk_Users_has_Wines_Users1_idx` (`user_id`),
  KEY `fk_Users_buy_Wines_ModesOfPayments1_idx` (`mode_id`),
  CONSTRAINT `fk_Users_buy_Wines_ModesOfPayments1` FOREIGN KEY (`mode_id`) REFERENCES `modes_payments` (`id`),
  CONSTRAINT `fk_Users_has_Wines_Users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_Users_has_Wines_Wines1` FOREIGN KEY (`wine_id`) REFERENCES `wines` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table bargylus_db.users_buy_wines : ~50 rows (environ)
DELETE FROM `users_buy_wines`;
/*!40000 ALTER TABLE `users_buy_wines` DISABLE KEYS */;
INSERT INTO `users_buy_wines` (`id`, `user_id`, `wine_id`, `mode_id`, `date`, `price`, `quantity`) VALUES
	(1, 3, 7, 4, '2020-01-21', 41, 6),
	(2, 3, 8, 1, '2019-05-17', 41, 7),
	(3, 8, 7, 1, '2018-10-01', 116, 19),
	(4, 2, 5, 4, '2019-05-01', 75, 46),
	(5, 10, 1, 1, '2018-07-22', 169, 48),
	(6, 6, 8, 4, '2020-02-05', 98, 31),
	(7, 10, 1, 4, '2020-02-23', 184, 19),
	(8, 8, 3, 2, '2020-05-12', 76, 43),
	(9, 9, 2, 3, '2019-06-17', 120, 38),
	(10, 7, 1, 4, '2018-10-21', 45, 13),
	(11, 9, 4, 4, '2018-05-25', 76, 28),
	(12, 3, 7, 4, '2018-01-03', 67, 22),
	(13, 7, 8, 1, '2018-02-14', 27, 19),
	(14, 1, 1, 2, '2018-01-06', 154, 11),
	(15, 10, 2, 3, '2018-06-21', 24, 13),
	(16, 9, 3, 1, '2019-09-30', 72, 35),
	(17, 2, 5, 1, '2019-05-27', 179, 27),
	(18, 4, 4, 2, '2018-06-22', 74, 28),
	(19, 9, 3, 4, '2020-05-25', 167, 30),
	(20, 4, 3, 1, '2018-06-11', 184, 21),
	(21, 4, 4, 3, '2019-09-14', 133, 34),
	(22, 10, 2, 2, '2018-04-29', 28, 41),
	(23, 3, 2, 4, '2018-07-05', 183, 2),
	(24, 2, 3, 2, '2018-03-11', 25, 30),
	(25, 5, 7, 4, '2020-01-23', 77, 20),
	(26, 4, 3, 1, '2020-06-02', 154, 30),
	(27, 2, 1, 2, '2018-04-25', 200, 3),
	(28, 10, 10, 1, '2018-10-13', 28, 8),
	(29, 4, 7, 2, '2019-01-04', 88, 26),
	(30, 6, 7, 3, '2018-09-23', 160, 50),
	(31, 5, 3, 2, '2019-05-13', 143, 36),
	(32, 6, 6, 2, '2020-05-20', 47, 39),
	(33, 8, 9, 3, '2019-05-14', 176, 31),
	(34, 4, 8, 3, '2018-06-11', 28, 5),
	(35, 10, 9, 3, '2019-04-23', 129, 9),
	(36, 2, 9, 2, '2018-06-20', 179, 7),
	(37, 1, 4, 4, '2018-01-22', 180, 19),
	(38, 1, 10, 4, '2019-10-28', 23, 34),
	(39, 3, 3, 4, '2019-12-04', 138, 6),
	(40, 1, 1, 4, '2020-04-16', 60, 46),
	(41, 5, 10, 1, '2020-05-14', 40, 41),
	(42, 10, 7, 2, '2018-11-05', 111, 41),
	(43, 3, 2, 1, '2020-03-11', 91, 38),
	(44, 4, 5, 4, '2019-08-31', 91, 43),
	(45, 4, 4, 3, '2019-09-05', 56, 42),
	(46, 5, 7, 1, '2018-02-13', 152, 4),
	(47, 4, 8, 3, '2018-09-09', 84, 37),
	(48, 6, 8, 1, '2018-07-28', 25, 18),
	(49, 3, 2, 2, '2018-11-28', 119, 38),
	(50, 4, 7, 1, '2020-03-09', 149, 6);
/*!40000 ALTER TABLE `users_buy_wines` ENABLE KEYS */;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
CREATE TABLE IF NOT EXISTS `wines` (
  `id` int NOT NULL AUTO_INCREMENT,
  `year` int NOT NULL,
  `alcohol` float NOT NULL,
  `basic_price` float NOT NULL,
  `name` varchar(45) NOT NULL,
  `size` int NOT NULL,
  `type` varchar(45) NOT NULL,
  `photo` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `year` (`year`,`name`,`size`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Listage des données de la table bargylus_db.wines : ~12 rows (environ)
DELETE FROM `wines`;
/*!40000 ALTER TABLE `wines` DISABLE KEYS */;
INSERT INTO `wines` (`id`, `year`, `alcohol`, `basic_price`, `name`, `size`, `type`, `photo`) VALUES
	(1, 2015, 17, 32, 'Amigne', 2, 'blanc', 'wine_1.png'),
	(2, 2013, 18, 30, 'Païen', 1, 'blanc', 'wine_2.png'),
	(3, 2019, 16, 24, 'Emitage', 2, 'blanc', 'wine_3.png'),
	(4, 2015, 20, 30, 'Altesse', 1, 'blanc', 'wine_4.png'),
	(5, 2018, 18, 30, 'petite-Arvine', 2, 'blanc', 'wine_5.png'),
	(6, 2012, 17, 28, 'Arvine', 2, 'blanc', 'wine_6.png'),
	(7, 2016, 20, 24, 'Aligoté', 2, 'blanc', 'wine_7.png'),
	(8, 2010, 17, 32, 'Muscat', 1, 'blanc', 'wine_1.png'),
	(9, 2012, 16, 38, 'Réze', 1, 'blanc', 'wine_2.png'),
	(10, 2016, 16, 38, 'Lafnetscha', 1, 'blanc', 'wine_3.png'),
	(11, 2017, 16, 38, 'Malvoisie', 1, 'blanc', 'wine_4.png'),
	(12, 2014, 20, 32, 'Johannisberg', 1, 'blanc', 'wine_1.png');
/*!40000 ALTER TABLE `wines` ENABLE KEYS */;

-- Listage de la structure de la table bargylus_db. wines_compose_grapes_varieties
CREATE TABLE IF NOT EXISTS `wines_compose_grapes_varieties` (
  `id` int NOT NULL,
  `wine_id` int NOT NULL,
  `grape_varietie_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Wines_has_Grapes_Varieties_Grapes_Varieties1_idx` (`grape_varietie_id`),
  KEY `fk_Wines_has_Grapes_Varieties_Wines1_idx` (`wine_id`),
  CONSTRAINT `fk_Wines_has_Grapes_Varieties_Grapes_Varieties1` FOREIGN KEY (`grape_varietie_id`) REFERENCES `grapes_varieties` (`id`),
  CONSTRAINT `fk_Wines_has_Grapes_Varieties_Wines1` FOREIGN KEY (`wine_id`) REFERENCES `wines` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table bargylus_db.wines_compose_grapes_varieties : ~50 rows (environ)
DELETE FROM `wines_compose_grapes_varieties`;
/*!40000 ALTER TABLE `wines_compose_grapes_varieties` DISABLE KEYS */;
INSERT INTO `wines_compose_grapes_varieties` (`id`, `wine_id`, `grape_varietie_id`) VALUES
	(1, 8, 35),
	(2, 1, 22),
	(3, 6, 43),
	(4, 1, 6),
	(5, 7, 2),
	(6, 6, 48),
	(7, 10, 15),
	(8, 10, 15),
	(9, 2, 1),
	(10, 2, 41),
	(11, 10, 25),
	(12, 6, 25),
	(13, 6, 5),
	(14, 5, 2),
	(15, 7, 42),
	(16, 3, 23),
	(17, 3, 39),
	(18, 8, 2),
	(19, 8, 25),
	(20, 4, 29),
	(21, 6, 42),
	(22, 5, 13),
	(23, 5, 38),
	(24, 5, 8),
	(25, 10, 22),
	(26, 4, 45),
	(27, 6, 45),
	(28, 4, 45),
	(29, 8, 37),
	(30, 5, 46),
	(31, 10, 42),
	(32, 1, 39),
	(33, 8, 9),
	(34, 8, 39),
	(35, 6, 26),
	(36, 8, 39),
	(37, 5, 49),
	(38, 10, 40),
	(39, 8, 46),
	(40, 6, 42),
	(41, 4, 49),
	(42, 6, 41),
	(43, 2, 36),
	(44, 3, 24),
	(45, 7, 34),
	(46, 8, 16),
	(47, 5, 15),
	(48, 4, 5),
	(49, 2, 36),
	(50, 9, 16);
/*!40000 ALTER TABLE `wines_compose_grapes_varieties` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
bargylus_db