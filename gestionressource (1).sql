-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mer. 27 avr. 2022 à 16:32
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
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idAdmin` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `Password`, `email`) VALUES
('admin1', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `idCours` varchar(30) NOT NULL,
  `libelle` varchar(30) NOT NULL,
  `creneau` int(11) NOT NULL,
  PRIMARY KEY (`idCours`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`idCours`, `libelle`, `creneau`) VALUES
('12', 'IPDL', 40),
('11', 'Maths', 20),
('13', 'POO', 40),
('23', 'POO Avancee', 30),
('14', 'Langage C', 40),
('15', 'UML', 20);

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
  `classe` varchar(30) NOT NULL,
  `nbPointage` int(11) NOT NULL,
  `tosupp` int(11) NOT NULL AUTO_INCREMENT,
  `PointAuj` tinyint(1) NOT NULL,
  PRIMARY KEY (`tosupp`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `edt`
--

INSERT INTO `edt` (`idEDT`, `salle`, `id_Prof`, `id_Cours`, `HeureDebut`, `HeureFin`, `JOUR`, `classe`, `nbPointage`, `tosupp`, `PointAuj`) VALUES
('L3-I-A', 'NIANING', 'bassirou.toure', '12', '14:40:00', '16:30:00', 'Monday', 'Licence Informatique A', 0, 1, 0),
('L3-I-A', '103', 'bassirou.toure', '14', '08:00:00', '10:00:00', 'Wednesday', 'Licence Informatique A', 0, 2, 0),
('L3-I-B', '205', 'mouhamed.diop', '13', '10:00:00', '12:00:00', 'Wednesday', 'Licence Informatique B', 0, 3, 0),
('M1-I-A', 'KARABANE', 'mouhamed.diop', '23', '14:30:00', '16:30:00', 'Tuesday', 'Master1 Informatique A', 0, 4, 0),
('M2-I-A', '201', 'mouhamed.diop', '13', '08:00:00', '10:00:00', 'Friday', 'Master2 Informatique A', 0, 5, 0),
('M1-I-B', 'E4', 'mouhamed.diop', '23', '08:00:00', '10:00:00', 'Thursday', 'Master 1 Informatique B', 0, 6, 0),
('L3-I-B', '101', 'mouhamed.diop', '13', '10:00:00', '12:00:00', 'Friday', 'Licence Informatique B', 4, 7, 1),
('M1-Tr-A', '103', 'mouhamed.diop', '13', '11:00:00', '13:00:00', 'Saturday', 'Master 1 Telecoms A', 4, 8, 1),
('L3-I-A', '102', 'mouhamed.diop', '13', '13:00:00', '15:00:00', 'Friday', 'Licence Informatique A', 9, 9, 0),
('L3-I-A', 'Saint-Louis', 'seydou.kane', '15', '08:00:00', '10:00:00', 'Monday', 'Licence Informatique A', 0, 10, 0);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `idEt` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `NomEt` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `PrenomEt` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`idEt`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idEt`, `NomEt`, `PrenomEt`, `Password`, `email`) VALUES
('khady.diop', 'Diop', 'Khady', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 'khady.diop@esp.sn'),
('3336', 'Fall', 'Astou', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'fall.astou@esp.sn'),
('moustapha.diop', 'Diop', 'Moustapha', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 'moustapha.diop@esp.sn');

-- --------------------------------------------------------

--
-- Structure de la table `pointage`
--

DROP TABLE IF EXISTS `pointage`;
CREATE TABLE IF NOT EXISTS `pointage` (
  `Jour` date NOT NULL,
  `heureP` time NOT NULL,
  `prof` varchar(30) NOT NULL,
  `classe` varchar(30) NOT NULL,
  `matiere` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
('momo.fall2', 'Fall', 'Momo', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'fall.momo@esp.sn'),
('seydou.kane', 'Kane', 'Seydou', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'zeydou.kane@esp.sn');

-- --------------------------------------------------------

--
-- Structure de la table `surveillant`
--

DROP TABLE IF EXISTS `surveillant`;
CREATE TABLE IF NOT EXISTS `surveillant` (
  `idSu` varchar(30) NOT NULL,
  `NomSu` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `PrenomSu` varchar(30) NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`idSu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `surveillant`
--

INSERT INTO `surveillant` (`idSu`, `NomSu`, `PrenomSu`, `Password`, `email`) VALUES
('modou.fall', 'Fall', 'Modou', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 'modou.fall@esp.sn');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
