-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 29 mai 2020 à 10:01
-- Version du serveur :  5.7.29-32-log
-- Version de PHP : 7.4.5

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
(1, 'Castets noir', 'noir'),
(2, 'Egiodola noir', 'noir'),
(3, 'MaréchalFoch noir', 'noir'),
(4, 'Etraire de la Dui noir', 'noir'),
(5, 'Portugaisbleu noir', 'noir'),
(6, 'Corbeau noir', 'noir'),
(7, 'Fuellanera noir', 'noir'),
(8, 'Arrouya noir', 'noir'),
(9, 'Gouget noir', 'noir'),
(10, 'Mollard noir', 'noir'),
(11, 'Servanin noir', 'noir'),
(12, 'Monerac noir', 'noir'),
(13, 'Petitbrun noir', 'noir'),
(14, 'Gramon noir', 'noir'),
(15, 'Trousseau noir', 'noir'),
(16, 'Grolleau noir', 'noir'),
(17, 'Feunate noir', 'noir'),
(18, 'PetitVerdot noir', 'noir'),
(19, 'Duras noir', 'noir'),
(20, 'Grassen noir', 'noir'),
(21, 'Oberlin noir', 'noir'),
(22, 'Ferradou noir', 'noir'),
(23, 'César noir', 'noir'),
(24, 'Chambourcin noir', 'noir'),
(25, 'Arinarnoa noir', 'noir'),
(26, 'Abouriou noir', 'noir'),
(27, 'Gascon noir', 'noir'),
(28, 'Semebat noir', 'noir'),
(29, 'Sciaccarello noir', 'noir'),
(30, 'Persan noir', 'noir'),
(31, 'Couderc noir', 'noir'),
(32, 'Landal noir', 'noir'),
(33, 'Plant de Brunel noir', 'noir'),
(34, 'Prunelard noir', 'noir'),
(35, 'Alphonse Lavallée noir', 'noir'),
(36, 'Aubun noir', 'noir'),
(37, 'Béclan noir', 'noir'),
(38, 'Aramon noir', 'noir'),
(39, 'Couston noir', 'noir'),
(40, 'Poulsard noir', 'noir'),
(41, 'Joubertin noir', 'noir'),
(42, 'Muscat à petits grains rouges', 'noir'),
(43, 'Gamay de Bouze noir', 'noir'),
(44, 'Béquignol noir', 'noir'),
(45, 'Fleurien noir', 'noir'),
(46, 'Aléatico noir', 'noir'),
(47, 'Ganson noir', 'noir'),
(48, 'Chatus noir', 'noir'),
(49, 'Brun Fourca noir', 'noir'),
(50, 'Calitor noir', 'noir'),
(51, 'Sauvignon gris', 'gris'),
(52, 'Pinot Gris', 'gris'),
(53, 'Grenache gris', 'gris'),
(54, 'Piquepoul gris', 'gris'),
(55, 'Terret gris', 'gris'),
(56, 'Aramon gris', 'gris'),
(57, 'Grolleau gris', 'gris'),
(58, 'Rivairenc', 'gris'),
(59, 'Trousseau gris', 'gris'),
(60, 'Cardinal rouge', 'rouge'),
(61, 'Barbaroux rosé', 'rosé'),
(62, 'Chasselas rosé', 'rosé'),
(63, 'Clairette rosé', 'rosé'),
(64, 'Gewurztraminer rosé', 'rosé'),
(65, 'Mauzac rosé', 'rosé'),
(66, 'Mustac à petits grains rosé', 'rosé'),
(67, 'Rosé du Var rosé', 'rosé'),
(68, 'Rubilande rosé', 'rosé'),
(69, 'Savagnin rosé', 'rosé'),
(70, 'Velteliner rouge précoce rosé', 'rosé'),
(71, 'Cinsault rosé', 'rosé'),
(72, 'Codivarta blanc', 'blanc'),
(73, 'Len de l’El blanc', 'blanc'),
(74, 'Claverie blanc', 'blanc'),
(75, 'Perdea blanc', 'blanc'),
(76, 'Pinot blanc', 'blanc'),
(77, 'Folignan blanc', 'blanc'),
(78, 'Muscat d’Alexandrie blanc', 'blanc'),
(79, 'Baco blanc', 'blanc'),
(80, 'Macabeu blanc', 'blanc'),
(81, 'Panse muscade blanc', 'blanc'),
(82, 'Biancu Gentile blanc', 'blanc'),
(83, 'Altesse blanc', 'blanc'),
(84, 'Rivairenc blanc', 'blanc'),
(85, 'Furmint blanc', 'blanc'),
(86, 'Roussette d\'Ayze blanc', 'blanc'),
(87, 'Chardonnay blanc', 'blanc'),
(88, 'Clarin blanc', 'blanc'),
(89, 'Folle blanc', 'blanc'),
(90, 'Alvarinho blanc', 'blanc'),
(91, 'Grenache blanc', 'blanc'),
(92, 'Baroque blanc', 'blanc'),
(93, 'Auxerrois blanc', 'blanc'),
(94, 'Rayon d\'or blanc', 'blanc'),
(95, 'Araignan blanc', 'blanc'),
(96, 'blanc', 'blanc'),
(97, 'Muscat cendré blanc', 'blanc'),
(98, 'Saint-Côme blanc', 'blanc'),
(99, 'Ravat blanc', 'blanc'),
(100, 'Select blanc', 'blanc'),
(101, 'Genovèse blanc', 'blanc'),
(102, 'Carignan blanc', 'blanc'),
(103, 'he blanc', 'blanc'),
(104, 'Romorantin blanc', 'blanc'),
(105, 'Riesling blanc', 'blanc'),
(106, 'Meslier Saint-François blanc', 'blanc'),
(107, 'Aramon blanc', 'blanc'),
(108, 'Aligoté blanc', 'blanc'),
(109, 'Arriloba blanc', 'blanc'),
(110, 'Muscadelle blanc', 'blanc'),
(111, 'Aranel blanc', 'blanc'),
(112, 'Bourboulenc blanc', 'blanc'),
(113, 'Petit Meslier blanc', 'blanc'),
(114, 'Pagadebiti blanc', 'blanc'),
(115, 'Gringet blanc', 'blanc'),
(116, 'Merlot blanc', 'blanc'),
(117, 'Muscat Ottonel blanc', 'blanc'),
(118, 'Müller-Thurgau blanc', 'blanc'),
(119, 'Chasselas blanc', 'blanc'),
(120, 'Ondenc blanc', 'blanc');

-- --------------------------------------------------------

--
-- Structure de la table `modes_payments`
--

CREATE TABLE `modes_payments` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `canton` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wines`
--
ALTER TABLE `wines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
