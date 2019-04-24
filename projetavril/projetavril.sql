-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 15 avr. 2019 à 13:06
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
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `maison` varchar(20) NOT NULL,
  `nom_prenom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `catalina`
--

INSERT INTO `catalina` (`id`, `email`, `password`, `maison`, `nom_prenom`) VALUES
(4, 'sylla@gmail.com', 'a3d2de7675556553a5f08e4c88d2c228', 'villa', 'sylla maimouna'),
(5, 'mriko@gmail.com', 'eab71244afb687f16d8c4f5ee9d6ef0e', 'villa', 'mariko'),
(6, 'ousmane@gmail.com', 'a3d2de7675556553a5f08e4c88d2c228', 'duplex', 'samake ousmane'),
(7, 'fally@gmail.com', '14b8f0494c6f1460c3720d0ce692dbca', 'villa 1', 'fally ipupa');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nation` varchar(20) NOT NULL,
  `maison` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `prenom`, `nation`, `maison`, `email`, `password`, `date`) VALUES
(1, 'mariko', 'aicha', 'malienne', '', 'mouss@gail.com', '8d9c307cb7f3c4a32822a51922d1ceaa', '0000-00-00'),
(2, 'm', 'kkk', 'malienne', '', 'mo@gmail.com', '9cdfb439c7876e703e307864c9167a15', '0000-00-00'),
(3, 'mari', 'mass', 'nn', '', 'na@gmail.com', 'a3d2de7675556553a5f08e4c88d2c228', '0000-00-00'),
(4, 'mari', 'mass', 'niger', '', 'na@gmail.com', '9cdfb439c7876e703e307864c9167a15', '0000-00-00'),
(5, 'sidine', 'aicha', 'ghana', '', 'aicha@gmail.com', 'f022b8970604d7f4472189cb21df2c20', '2019-04-16');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `catalina`
--
ALTER TABLE `catalina`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
