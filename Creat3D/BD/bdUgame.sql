-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- GÃ©nÃ©rÃ© le: Mar 25 Mars 2014 Ã  14:17
-- Version du serveur: 5.5.32
-- Version de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de donnÃ©es: `ugame`
--
CREATE DATABASE IF NOT EXISTS `ugame` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ugame`;

-- --------------------------------------------------------

--
-- Structure de la table `t_client`
--

CREATE TABLE IF NOT EXISTS `t_client` (
  `CLI_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CLI_PRENOM` varchar(50) DEFAULT NULL,
  `CLI_NOM` varchar(50) DEFAULT NULL,
  `CLI_ADRESSE` varchar(50) DEFAULT NULL,
  `CLI_CODEPOSTAL` varchar(10) DEFAULT NULL,
  `CLI_VILLE` varchar(50) DEFAULT NULL,
  `CLI_COURRIEL` varchar(50) NOT NULL,
  `CLI_MDP` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CLI_ID`),
  UNIQUE KEY `CLI_COURRIEL` (`CLI_COURRIEL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `t_client`
--

INSERT INTO  `ugame`.`t_client` (
`CLI_ID` ,
`CLI_PRENOM` ,
`CLI_NOM` ,
`CLI_ADRESSE` ,
`CLI_CODEPOSTAL` ,
`CLI_VILLE` ,
`CLI_COURRIEL` ,
`CLI_MDP`
)
VALUES (
NULL ,  'Laura',  'Prémillieu',  '125 chemin du gaz du soulier',  '01250',  'TOSSIAT',  'premillieu.laura@iut-valence.fr',  '123456'
);

--
-- Structure de la table `t_genre`
--

CREATE TABLE IF NOT EXISTS `t_genre` (
  `GEN_ID` int(11) NOT NULL AUTO_INCREMENT,
  `GEN_NOM` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`GEN_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `t_genre`
--

INSERT INTO `t_genre` (`GEN_ID`, `GEN_NOM`) VALUES
(1, 'Action / RPG'),
(2, 'RPG'),
(3, 'FPS'),
(4, 'Point&Click');

-- --------------------------------------------------------

--
-- Structure de la table `t_jeu`
--

CREATE TABLE IF NOT EXISTS `t_jeu` (
  `JEU_ID` int(11) NOT NULL AUTO_INCREMENT,
  `JEU_NOM` varchar(255) DEFAULT NULL,
  `JEU_DATEAJOUT` date DEFAULT NULL,
  `JEU_PRIX` decimal(4,2) NOT NULL,
  `JEU_IMAGE` varchar(255) DEFAULT NULL,
  `STU_ID` int(11) DEFAULT NULL,
  `GEN_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`JEU_ID`),
  KEY `STU_ID` (`STU_ID`),
  KEY `GEN_ID` (`GEN_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `t_jeu`
--

INSERT INTO `t_jeu` (`JEU_ID`, `JEU_NOM`, `JEU_DATEAJOUT`, `JEU_PRIX`, `JEU_IMAGE`, `STU_ID`, `GEN_ID`) VALUES
(1, 'Morrowind', '2014-02-02', '25.00', 'Image_Morrowind', 1, 2),
(2, 'Fallout 3', '2013-12-10', '24.50', 'Image_Fallout3', 1, 1),
(3, 'Halo Combat Evolved', '2013-09-09', '29.99', 'Image_Halo', 2, 3),
(4, 'Halo 2', '2013-10-08', '24.99', 'Image_Halo2', 2, 3),
(5, 'Runaway', '2013-08-12', '35.00', 'Image_Runaway', 3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `t_studio`
--

CREATE TABLE IF NOT EXISTS `t_studio` (
  `STU_ID` int(11) NOT NULL AUTO_INCREMENT,
  `STU_NOM` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`STU_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `t_studio`
--

INSERT INTO `t_studio` (`STU_ID`, `STU_NOM`) VALUES
(1, 'Bethesda'),
(2, 'Bungie'),
(3, 'Pendulo Studio');

--
-- Contraintes pour les tables exportÃ©es
--

--
-- Contraintes pour la table `t_jeu`
--
ALTER TABLE `t_jeu`
  ADD CONSTRAINT `t_jeu_ibfk_1` FOREIGN KEY (`STU_ID`) REFERENCES `t_studio` (`STU_ID`),
  ADD CONSTRAINT `t_jeu_ibfk_2` FOREIGN KEY (`GEN_ID`) REFERENCES `t_genre` (`GEN_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

