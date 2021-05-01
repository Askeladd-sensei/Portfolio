-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 20 avr. 2021 à 21:02
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `demek`
--

-- --------------------------------------------------------

--
-- Structure de la table `formulaire_demande`
--

DROP TABLE IF EXISTS `formulaire_demande`;
CREATE TABLE IF NOT EXISTS `formulaire_demande` (
  `NumDem` int NOT NULL AUTO_INCREMENT,
  `NomPat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `PrePat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Contact` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `TypePrel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Wilaya` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `LieuPrel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`NumDem`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formulaire_don`
--

DROP TABLE IF EXISTS `formulaire_don`;
CREATE TABLE IF NOT EXISTS `formulaire_don` (
  `Ndon` int NOT NULL AUTO_INCREMENT,
  `Datedon` date NOT NULL,
  `Etat` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`Ndon`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `formulaire_don`
--

INSERT INTO `formulaire_don` (`Ndon`, `Datedon`, `Etat`) VALUES
(11, '2021-04-13', 1),
(12, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Adresse` varchar(50) NOT NULL,
  `Nom` varchar(10) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Sexe` varchar(5) NOT NULL,
  `Gs` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Mdp` varchar(16) NOT NULL,
  `DateN` date NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Adresse_3` (`Adresse`),
  UNIQUE KEY `Adresse_5` (`Adresse`),
  KEY `Adresse` (`Adresse`),
  KEY `Adresse_2` (`Adresse`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `Adresse`, `Nom`, `Prenom`, `Sexe`, `Gs`, `Mdp`, `DateN`) VALUES
(1, 'user@user.com', 'User', 'Username', 'Femme', 'A+', '123456', '2021-04-06'),
(8, 'qdfdf@gmail.dz', 'sds', 'sdfsd', 'Homme', 'A+ ', 'sdfs', '2000-12-14'),
(10, 'mohammedouss63@gmail.com', 'Oussada', 'Mohammed Amine', 'Homme', 'O+ ', 'Dyhia', '2000-12-14'),
(11, 'ihm@gmail.com', 'Mohammed', 'Soualah', 'Homme', 'B+ ', 'admin', '1985-04-21'),
(12, '', '', '', '', '', '', '0000-00-00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur` ADD FULLTEXT KEY `Adresse_4` (`Adresse`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `formulaire_demande`
--
ALTER TABLE `formulaire_demande`
  ADD CONSTRAINT `formulaire_demande_ibfk_1` FOREIGN KEY (`NumDem`) REFERENCES `utilisateur` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `formulaire_don`
--
ALTER TABLE `formulaire_don`
  ADD CONSTRAINT `formulaire_don_ibfk_1` FOREIGN KEY (`Ndon`) REFERENCES `utilisateur` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
