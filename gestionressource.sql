-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  ven. 25 mars 2022 à 18:44
-- Version du serveur :  8.0.18
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
-- Base de données :  `gestionressource`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `idCours` varchar(30) NOT NULL,
  `libelle` varchar(30) NOT NULL,
  PRIMARY KEY (`idCours`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`idCours`, `libelle`) VALUES
('12', 'IPDL'),
('11', 'Maths'),
('13', 'POO'),
('23', 'POO Avancee'),
('14', 'Langage C'),
('15', 'UML');

-- --------------------------------------------------------

--
-- Structure de la table `edt`
--

DROP TABLE IF EXISTS `edt`;
CREATE TABLE IF NOT EXISTS `edt` (
  `idEDT` varchar(30) NOT NULL,
  `salle` varchar(30) NOT NULL,
  `id_Prof` varchar(30) NOT NULL,
  `id_Cours` varchar(30) NOT NULL,
  `HeureDebut` time NOT NULL,
  `HeureFin` time NOT NULL,
  `JOUR` varchar(30) NOT NULL,
  `classe` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `edt`
--

INSERT INTO `edt` (`idEDT`, `salle`, `id_Prof`, `id_Cours`, `HeureDebut`, `HeureFin`, `JOUR`, `classe`) VALUES
('L3', 'NIANING', 'bassirou.toure', '12', '14:40:00', '16:30:00', 'Monday', 'Licence Informatique'),
('L3', '103', 'bassirou.toure', '14', '08:00:00', '10:00:00', 'Wednesday', 'Licence Informatique'),
('L3', '205', 'mouhamed.diop', '13', '10:00:00', '12:00:00', 'Wednesday', 'Licence Informatique'),
('M1', 'KARABANE', 'mouhamed.diop', '23', '14:30:00', '16:30:00', 'Tuesday', 'Master1 Informatique'),
('M2', '201', 'mouhamed.diop', '13', '08:00:00', '10:00:00', 'Wednesday', 'Master2 Informatique'),
('M1', 'E4', 'mouhamed.diop', '23', '08:00:00', '10:00:00', 'Thursday', 'Master 1 Informatique'),
('L3', '101', 'mouhamed.diop', '13', '10:00:00', '12:00:00', 'Friday', 'Licence Informatique');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `idProf` varchar(30) NOT NULL,
  `NomProf` varchar(30) NOT NULL,
  `PrenomProf` varchar(30) NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`idProf`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`idProf`, `NomProf`, `PrenomProf`, `Password`, `email`) VALUES
('bassirou.toure', 'Toure', 'Bassirou', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 'bassirou.toure@esp.sn'),
('mouhamed.diop', 'Diop', 'Mouhamed', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 'mouhamed.diop@esp.sn'),
('momo.fall', 'Fall', 'Momo', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 'fall.momo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
