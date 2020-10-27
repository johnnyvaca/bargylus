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

-- Listage des données de la table bargylus_db.discounts : ~3 rows (environ)
DELETE FROM `discounts`;
/*!40000 ALTER TABLE `discounts` DISABLE KEYS */;
INSERT INTO `discounts` (`id`, `start_date`, `end_date`, `percentage`) VALUES
	(3, '2001-01-01', '2002-02-02', 13),
	(2, '2012-12-12', '2013-12-12', 12),
	(1, '2020-09-20', '2900-09-21', 0);
/*!40000 ALTER TABLE `discounts` ENABLE KEYS */;

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

-- Listage des données de la table bargylus_db.modes_payments : ~4 rows (environ)
DELETE FROM `modes_payments`;
/*!40000 ALTER TABLE `modes_payments` DISABLE KEYS */;
INSERT INTO `modes_payments` (`id`, `name`) VALUES
	(3, 'PayPal'),
	(4, 'mastercard'),
	(1, 'postefinane'),
	(2, 'visacard');
/*!40000 ALTER TABLE `modes_payments` ENABLE KEYS */;

-- Listage des données de la table bargylus_db.orders : ~2 rows (environ)
DELETE FROM `orders`;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `number`, `total_price`, `user_id`, `states_id`, `date_purchase`) VALUES
	(4, 23423423, 45345, 13, 1, '2020-10-07'),
	(5, 8765423, 6643, 13, 1, '2020-10-07');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

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

-- Listage des données de la table bargylus_db.states : ~3 rows (environ)
DELETE FROM `states`;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` (`id`, `name`) VALUES
	(1, 'au magasin (2 à 3 jours)'),
	(2, 'en cours (1 à 2 jours)'),
	(3, 'chez vous');
/*!40000 ALTER TABLE `states` ENABLE KEYS */;

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

-- Listage des données de la table bargylus_db.users_choose_mode : ~47 rows (environ)
DELETE FROM `users_choose_mode`;
/*!40000 ALTER TABLE `users_choose_mode` DISABLE KEYS */;
INSERT INTO `users_choose_mode` (`id`, `user_id`, `mode_id`, `date`) VALUES
	(1, 6, 3, '2019-05-15'),
	(2, 4, 3, '2018-10-19'),
	(3, 6, 4, '2019-04-09'),
	(4, 3, 2, '2019-06-12'),
	(5, 8, 2, '2018-05-17'),
	(7, 3, 2, '2019-07-21'),
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

-- Listage des données de la table bargylus_db.wines : ~12 rows (environ)
DELETE FROM `wines`;
/*!40000 ALTER TABLE `wines` DISABLE KEYS */;
INSERT INTO `wines` (`id`, `year`, `winename`, `alcohol`, `basic_price`, `size`, `stock`, `photo`, `discounts_id`) VALUES
	(1, 2011, 'Amigne', 17, 32, 2, 20, 'wine_1.png', 2),
	(2, 2012, 'Païen', 18, 30, 1, 3, 'wine_2.png', 3),
	(3, 2013, 'Emitage', 16, 24, 2, 26, 'wine_3.png', 1),
	(4, 2014, 'Altesse', 20, 30, 1, 27, 'wine_4.png', 3),
	(5, 2015, 'petite-Arvine', 18, 30, 2, 23, 'wine_5.png', 1),
	(6, 2016, 'Arvine', 17, 28, 2, 30, 'wine_6.png', 2),
	(7, 2017, 'Aligoté', 20, 24, 2, 30, 'wine_7.png', 1),
	(8, 2018, 'Muscat', 17, 32, 1, 30, 'wine_1.png', 1),
	(9, 2019, 'Réze', 16, 38, 1, 19, 'wine_2.png', 3),
	(10, 2010, 'Lafnetscha', 16, 38, 1, 30, 'wine_3.png', 1),
	(11, 2009, 'Joubertin', 16, 38, 1, 30, 'wine_4.png', 3),
	(12, 2008, 'Johannisberg', 20, 32, 1, 30, 'wine_1.png', 1);
/*!40000 ALTER TABLE `wines` ENABLE KEYS */;

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