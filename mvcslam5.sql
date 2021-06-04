-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 17 nov. 2020 à 10:45
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mvcslam5`
--

-- --------------------------------------------------------

--
-- Structure de la table `caroussel`
--

DROP TABLE IF EXISTS `caroussel`;
CREATE TABLE IF NOT EXISTS `caroussel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nocaroussel` int(2) NOT NULL DEFAULT 0,
  `ordre` int(5) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL DEFAULT '',
  `titre_une` varchar(150) NOT NULL DEFAULT '',
  `descript_une` text NOT NULL,
  `nombouton` varchar(50) NOT NULL DEFAULT '',
  `lien` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=213 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `caroussel`
--

INSERT INTO `caroussel` (`id`, `nocaroussel`, `ordre`, `image`, `titre_une`, `descript_une`, `nombouton`, `lien`) VALUES
(1, 1, 1, 'accueil.jpg', 'Bienvenue sur le site du garage Chartreuse', 'Vous pouvez retrouver les véhicules disponible par catégorie ou par marque', 'En savoir plus', 'http://localhost/slam5_2018'),
(2, 1, 3, 'SUV.jpg', 'SUV', '', 'En savoir plus', ''),
(3, 1, 4, 'berline.jpg', 'Berlines', '', 'En savoir plus', ''),
(4, 1, 3, '4x4.jpg', '4X4', '', 'En savoir plus', '');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `ordre` int(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `name`, `ordre`) VALUES
(1, 'citadine', 2),
(2, 'SUV', 3),
(3, '4X4', 4),
(4, 'berline', 1),
(5, 'Voiture de sport', 5),
(6, 'Camion', 7),
(7, 'Car', 99);

-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--

DROP TABLE IF EXISTS `couleur`;
CREATE TABLE IF NOT EXISTS `couleur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libcouleur` varchar(200) NOT NULL DEFAULT '',
  `metal` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `couleur`
--

INSERT INTO `couleur` (`id`, `libcouleur`, `metal`) VALUES
(1, 'Blanc', 0),
(2, 'Gris', 1),
(3, 'Noir', 1),
(4, 'Bordeaux', 1),
(5, 'Bleu', 1),
(6, 'rouge', 0);

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(200) NOT NULL DEFAULT '',
  `logo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id`, `libelle`, `logo`) VALUES
(2, 'Peugeot', ''),
(3, 'Nissan', ''),
(4, 'BMW', ''),
(5, 'Mercedes', ''),
(6, 'Porsche', '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL DEFAULT '',
  `nom` varchar(100) NOT NULL DEFAULT '',
  `prenom` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `role` varchar(30) NOT NULL DEFAULT 'user',
  `email` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `nom`, `prenom`, `password`, `role`, `email`) VALUES
(1, 'admin', 'demars', 'francis', '098f6bcd4621d373cade4e832627b4f6', 'admin', 'francis.demars@free.fr');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

DROP TABLE IF EXISTS `vehicule`;
CREATE TABLE IF NOT EXISTS `vehicule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `detail` text NOT NULL,
  `categorie` int(11) NOT NULL DEFAULT 0,
  `marque` int(11) NOT NULL DEFAULT 0,
  `couleur` int(11) NOT NULL DEFAULT 0,
  `immat` varchar(15) NOT NULL DEFAULT '',
  `prix` double NOT NULL DEFAULT 0,
  `km` int(11) NOT NULL DEFAULT 0,
  `image` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `categorie` (`categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `name`, `detail`, `categorie`, `marque`, `couleur`, `immat`, `prix`, `km`, `image`) VALUES
(1, 'Grand Scenic', 'Prix neuf : de 25 000 â‚¬ Ã  41 200 â‚¬\r\nDisponible en : Diesel, Essence, Hybride diesel Ã©lectrique\r\nEmission de CO2 entre 94 et 136 g/km*\r\n', 2, 1, 5, 'xxx gh 456', 14500, 22560, 'Grand Scenic.jpg'),
(3, '208 puretech', '											', 1, 2, 1, 'cccf fff78', 12000, 15080, '208 puretech.jpg'),
(4, 'porsche carerra', '																		Porsche 991 Carrera GTS 450 CH\r\nEco taxe (malus ecologique) inclus dans le prix\r\n\r\nDate immatriculation 03/2018\r\nTransmission Boite automatique\r\nCarburant Essence\r\nPuissance 331 kW (450 Ch DIN)\r\nCouleur Blanc Peinture mÃ©tallisÃ©e\r\n															', 5, 6, 1, '444 zz 78', 85050, 65420, 'porsche carerra.jpg'),
(5, '2008 annï¿½e 2020', 'La deuxiÃ¨me gÃ©nÃ©ration du Peugeot 2008 s\'Ã©tire de 14 cm. Une hausse qui concerne aussi l\'espace intÃ©rieur, la puissance des moteurs, l\'Ã©quipement technologique... et les prix, devenus intimidants pour un SUV urbain. ', 2, 2, 6, 'aa-456-hh', 25000, 0, '2008 annee 2020.jpg'),
(6, 'Kangoo', 'detail kangoo', 2, 1, 2, 'aa-55-hh', 8000, 0, 'Kangoo.jpg');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `vehicule_ibfk_1` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
