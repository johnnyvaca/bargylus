-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 01 sep. 2020 à 21:33
-- Version du serveur :  5.7.29-32-log
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bargylus_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `grapes_varieties`
--

CREATE TABLE `grapes_varieties` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `grapes_varieties`
--

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

-- --------------------------------------------------------

--
-- Structure de la table `modes_payments`
--

CREATE TABLE `modes_payments` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `modes_payments`
--

INSERT INTO `modes_payments` (`id`, `name`) VALUES
(4, 'mastercard'),
(3, 'PayPal'),
(1, 'postefinane'),
(2, 'visacard');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  `registration_date` date DEFAULT NULL,
  `birth_date` date NOT NULL,
  `street_home` varchar(45) NOT NULL,
  `zip` int(11) NOT NULL,
  `city` varchar(45) NOT NULL,
  `canton` varchar(45) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `lastname`, `firstname`, `phone_number`, `registration_date`, `birth_date`, `street_home`, `zip`, `city`, `canton`, `password`) VALUES
(1, 'user@name.com', 'name', 'user', '0012 345 67 89', '0000-00-00', '0000-00-00', 'Ap #881-2825 Ipsum St.', 239369, 'Bellinzone', 'AR', '14c4b06b824ec593239362517f538b29'),
(2, 'scelerisque.lorem@sapien.net', 'Kieran', 'Celeste', '0041 74 11 12 29', '0000-00-00', '0000-00-00', 'P.O. Box 133, 9775 Neque Ave', 92976, 'Soleure', 'GL', ''),
(3, 'congue@Integeraliquamadipiscing.net', 'Jack', 'Hillary', '0041 54 71 24 08', '0000-00-00', '0000-00-00', '342-3175 Tempus Rd.', 5436, 'Köniz', 'VD', ''),
(4, 'lectus.ante@odio.net', 'Gregory', 'Kylee', '0041 19 73 50 68', '0000-00-00', '0000-00-00', '323-5213 Luctus Rd.', 40192, 'Horgen', 'SO', ''),
(5, 'nec.ligula@nisidictum.org', 'Neville', 'Callie', '0041 70 61 84 33', '0000-00-00', '0000-00-00', 'Ap #368-8278 Consectetuer Rd.', 1399, 'Kriens', 'JU', ''),
(6, 'Cras.convallis.convallis@non.com', 'Neil', 'Gillian', '0041 63 31 37 09', '0000-00-00', '0000-00-00', '4007 Vitae Av.', 108701, 'Schwytz', 'FR', ''),
(7, 'vitae.purus@montesnascetur.org', 'Carson', 'Tatyana', '0041 11 65 05 73', '0000-00-00', '0000-00-00', 'P.O. Box 525, 7914 Consequat Avenue', 66306, 'Bienne', 'SG', ''),
(8, 'diam.lorem.auctor@atvelitPellentesque.edu', 'Talon', 'Eugenia', '0041 73 82 31 70', '0000-00-00', '0000-00-00', 'Ap #223-191 Lorem, St.', 4871, 'Neuchâtel', 'VD', ''),
(9, 'nulla.Cras.eu@nuncinterdumfeugiat.org', 'Christen', 'Madison', '0041 79 98 33 12', '0000-00-00', '0000-00-00', '981-2253 Sem Avenue', 250381, 'Winterthour', 'VD', ''),
(10, 'ac.nulla.In@nec.org', 'Wallace', 'Alice', '0041 42 29 09 67', '0000-00-00', '0000-00-00', 'P.O. Box 377, 6484 Morbi St.', 22597, 'Küsnacht', 'JU', '');

-- --------------------------------------------------------

--
-- Structure de la table `users_buy_wines`
--

CREATE TABLE `users_buy_wines` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `wine_id` int(11) DEFAULT NULL,
  `mode_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users_buy_wines`
--

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

-- --------------------------------------------------------

--
-- Structure de la table `users_choose_mode`
--

CREATE TABLE `users_choose_mode` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mode_id` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users_choose_mode`
--

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

-- --------------------------------------------------------

--
-- Structure de la table `wines`
--

CREATE TABLE `wines` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `alcohol` float NOT NULL,
  `basic_price` float NOT NULL,
  `name` varchar(45) NOT NULL,
  `size` int(11) NOT NULL,
  `photo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `wines`
--

INSERT INTO `wines` (`id`, `year`, `alcohol`, `basic_price`, `name`, `size`,`photo`) VALUES
(1, 2015, 17, 32, 'Amigne/b', 2 , 'wine_1.png'),
(2, 2013, 18, 30, 'Païen/b', 1, 'wine_2.png'),
(3, 2019, 16, 24, 'Amigne/b', 2, 'wine_3.png'),
(4, 2015, 20, 30, 'Altesse/b', 1, 'wine_4.png'),
(5, 2018, 18, 30, 'Altesse/b', 2, 'wine_3.png'),
(6, 2012, 17, 28, 'Arvien/b', 2, 'wine_4.png'),
(7, 2016, 20, 24, 'Aligoté/b', 2, 'wine_2.png'),
(8, 2010, 17, 32, 'Amigne/b', 1, 'wine_1.png'),
(9, 2014, 16, 38, 'Païen/b', 1, 'wine_3.png'),
(10, 2014, 20, 32, 'Amigne/b', 1, 'wine_1.png');

-- --------------------------------------------------------

--
-- Structure de la table `wines_compose_grapes_varieties`
--

CREATE TABLE `wines_compose_grapes_varieties` (
  `id` int(11) NOT NULL,
  `wine_id` int(11) NOT NULL,
  `grape_varietie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `wines_compose_grapes_varieties`
--

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

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `grapes_varieties`
--
ALTER TABLE `grapes_varieties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `name_2` (`name`);

--
-- Index pour la table `modes_payments`
--
ALTER TABLE `modes_payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `users_buy_wines`
--
ALTER TABLE `users_buy_wines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Users_has_Wines_Wines1_idx` (`wine_id`),
  ADD KEY `fk_Users_has_Wines_Users1_idx` (`user_id`),
  ADD KEY `fk_Users_buy_Wines_ModesOfPayments1_idx` (`mode_id`);

--
-- Index pour la table `users_choose_mode`
--
ALTER TABLE `users_choose_mode`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Users_has_ModesOfPayments_ModesOfPayments1_idx` (`mode_id`),
  ADD KEY `fk_Users_has_ModesOfPayments_Users_idx` (`user_id`);

--
-- Index pour la table `wines`
--
ALTER TABLE `wines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `year` (`year`,`name`,`size`);

--
-- Index pour la table `wines_compose_grapes_varieties`
--
ALTER TABLE `wines_compose_grapes_varieties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Wines_has_Grapes_Varieties_Grapes_Varieties1_idx` (`grape_varietie_id`),
  ADD KEY `fk_Wines_has_Grapes_Varieties_Wines1_idx` (`wine_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `grapes_varieties`
--
ALTER TABLE `grapes_varieties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `modes_payments`
--
ALTER TABLE `modes_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `wines`
--
ALTER TABLE `wines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `users_buy_wines`
--
ALTER TABLE `users_buy_wines`
  ADD CONSTRAINT `fk_Users_buy_Wines_ModesOfPayments1` FOREIGN KEY (`mode_id`) REFERENCES `modes_payments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Users_has_Wines_Users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Users_has_Wines_Wines1` FOREIGN KEY (`wine_id`) REFERENCES `wines` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `users_choose_mode`
--
ALTER TABLE `users_choose_mode`
  ADD CONSTRAINT `fk_Users_has_ModesOfPayments_ModesOfPayments1` FOREIGN KEY (`mode_id`) REFERENCES `modes_payments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Users_has_ModesOfPayments_Users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `wines_compose_grapes_varieties`
--
ALTER TABLE `wines_compose_grapes_varieties`
  ADD CONSTRAINT `fk_Wines_has_Grapes_Varieties_Grapes_Varieties1` FOREIGN KEY (`grape_varietie_id`) REFERENCES `grapes_varieties` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Wines_has_Grapes_Varieties_Wines1` FOREIGN KEY (`wine_id`) REFERENCES `wines` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
