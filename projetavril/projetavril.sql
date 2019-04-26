-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 26 avr. 2019 à 10:14
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetavril`
--

-- --------------------------------------------------------

--
-- Structure de la table `catalina`
--

CREATE TABLE `catalina` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `nation` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `catalina`
--

INSERT INTO `catalina` (`id`, `nom`, `prenom`, `date`, `nation`, `email`, `password`) VALUES
(1, 'coulibaly hamed', 'hamed@gmail.com', '0000-00-00', 'b74df323e3939b563635a2cba7a7afba', '', ''),
(2, 'traore mariam', 'mariam@gmail.com', '0000-00-00', 'a3d2de7675556553a5f08e4c88d2c228', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `maison` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `nom`, `prenom`, `maison`, `email`, `contact`, `date`) VALUES
(6, 'mariko', 'moussokoro', 'villa2', 'moussokoro.mariko2017@gmail.co', 45678, '2019-04-26'),
(15, 'ismo', 'toure', 'duplex 4pcs', 'ismo@gmail.com', 456789, '2019-04-26');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nation` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `prenom`, `nation`, `email`, `password`, `date`) VALUES
(1, 'mariko', 'aicha', 'malienne', 'mouss@gail.com', '8d9c307cb7f3c4a32822a51922d1ceaa', '0000-00-00'),
(2, 'm', 'kkk', 'malienne', 'mo@gmail.com', '9cdfb439c7876e703e307864c9167a15', '0000-00-00'),
(3, 'mari', 'mass', 'nn', 'na@gmail.com', 'a3d2de7675556553a5f08e4c88d2c228', '0000-00-00'),
(4, 'mari', 'mass', 'niger', 'na@gmail.com', '9cdfb439c7876e703e307864c9167a15', '0000-00-00'),
(5, 'sidine', 'aicha', 'ghana', 'aicha@gmail.com', 'f022b8970604d7f4472189cb21df2c20', '2019-04-16'),
(6, 'mari', 'mariam', 'niger', 'mriko@gmail.com', 'a3d2de7675556553a5f08e4c88d2c228', '2019-04-17'),
(7, 'mariko', 'moussokoro', 'niger', 'moussokoro.mariko2017@gmail.com', 'a3d2de7675556553a5f08e4c88d2c228', '2019-04-18'),
(12, 'kone', 'sali', 'ivoirien', 'kone@gmail.com', 'a3d2de7675556553a5f08e4c88d2c228', '2019-04-11'),
(14, 'ariko', 'icha', 'niger', 'aicha19@gmail.com', 'a3d2de7675556553a5f08e4c88d2c228', '2019-04-12'),
(15, 'keta', 'kade', 'ivoirien', 'kader@gmail.com', 'a3d2de7675556553a5f08e4c88d2c228', '2019-04-18'),
(16, 'mariko', 'solo', 'ivoirien', 'solo@gmail.com', 'a3d2de7675556553a5f08e4c88d2c228', '2019-04-26'),
(17, 'kouame', 'patrick', 'ivoirien', 'kouame@gmail.com', 'a3d2de7675556553a5f08e4c88d2c228', '2019-04-17'),
(18, 'diarra', 'fatoumata', 'nigeria', 'diarra@gmail.com', '9cdfb439c7876e703e307864c9167a15', '2019-04-17'),
(22, 'ismo', 'toure', 'ivoirien', 'ismo@gmail.com', 'a3d2de7675556553a5f08e4c88d2c228', '2019-04-09'),
(23, 'kra', 'eunice', 'ivoirien', 'kra@gmail.com', 'd40b913237b22c538b948e7e44aeb9cf', '2019-04-08');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `catalina`
--
ALTER TABLE `catalina`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `catalina`
--
ALTER TABLE `catalina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
