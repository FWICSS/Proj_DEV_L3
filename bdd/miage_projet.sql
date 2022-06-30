-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 28 juin 2022 à 17:36
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `miage_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VILLE` longtext,
  `CODEPOSTALE` int(11) DEFAULT NULL,
  `MAIL` longtext,
  `TEL` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

DROP TABLE IF EXISTS `avoir`;
CREATE TABLE IF NOT EXISTS `avoir` (
  `ETUDIANT_ID` int(11) NOT NULL,
  `PARENT_ID` int(11) NOT NULL,
  PRIMARY KEY (`ETUDIANT_ID`,`PARENT_ID`),
  KEY `FK_AVOIR2` (`PARENT_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avoir_contact`
--

DROP TABLE IF EXISTS `avoir_contact`;
CREATE TABLE IF NOT EXISTS `avoir_contact` (
  `ETUDIANT_ID` int(11) NOT NULL,
  `ENTREPRISE_ID` int(11) NOT NULL,
  PRIMARY KEY (`ETUDIANT_ID`,`ENTREPRISE_ID`),
  KEY `FK_AVOIR_CONTACT2` (`ENTREPRISE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `candidater`
--

DROP TABLE IF EXISTS `candidater`;
CREATE TABLE IF NOT EXISTS `candidater` (
  `ETUDIANT_ID` int(11) NOT NULL,
  `FORMATION_ID` int(11) NOT NULL,
  `DATE` date DEFAULT NULL,
  PRIMARY KEY (`ETUDIANT_ID`,`FORMATION_ID`),
  KEY `FK_CANDIDATER2` (`FORMATION_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `diplome`
--

DROP TABLE IF EXISTS `diplome`;
CREATE TABLE IF NOT EXISTS `diplome` (
  `ID` int(11) NOT NULL,
  `SERIE` longtext,
  `INTITULE` longtext,
  `MENTION` varchar(1024) DEFAULT NULL,
  `ANNEE` int(11) DEFAULT NULL,
  `LIEU` longtext,
  `MOYENNE` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `ID` int(11) NOT NULL,
  `NOM` longtext,
  `PROPOSITION_FERME` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ADR_ID` int(11) DEFAULT NULL,
  `NOM` longtext,
  `PRENOM` text,
  `LOGIN` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `NOM_JEUNE_FILLE` text,
  `DDN` date DEFAULT NULL,
  PRIMARY KEY (`ID`),
    CONSTRAINT FK_adresseId FOREIGN KEY (`ADR_ID`) REFERENCES adresse (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `ID` int(11) NOT NULL,
  `INTITULE` longtext,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `parent`
--

DROP TABLE IF EXISTS `parent`;
CREATE TABLE IF NOT EXISTS `parent` (
  `ID` int(11) NOT NULL,
  `ADR_ID` int(11) NOT NULL,
  `NOM` longtext,
  `PRENOM` text,
  `DDN` date DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_HABITER` (`ADR_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `piece_jointe`
--

DROP TABLE IF EXISTS `piece_jointe`;
CREATE TABLE IF NOT EXISTS `piece_jointe` (
  `ID` int(11) NOT NULL,
  `NUMERO` int(11) DEFAULT NULL,
  `NOM` longtext,
  `TAILLE` int(11) DEFAULT NULL,
  `TYPE` longtext,
  `BIN` longblob,
  KEY `FK_RATTACHER` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `porter_sur`
--

DROP TABLE IF EXISTS `porter_sur`;
CREATE TABLE IF NOT EXISTS `porter_sur` (
  `STAGE_ID` int(11) NOT NULL,
  `THEME_ID` int(11) NOT NULL,
  PRIMARY KEY (`STAGE_ID`,`THEME_ID`),
  KEY `FK_PORTER_SUR2` (`THEME_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `posseder`
--

DROP TABLE IF EXISTS `posseder`;
CREATE TABLE IF NOT EXISTS `posseder` (
  `ETUDIANT_ID` int(11) NOT NULL,
  `DIPLOME_ID` int(11) NOT NULL,
  PRIMARY KEY (`ETUDIANT_ID`,`DIPLOME_ID`),
  KEY `FK_POSSEDER2` (`DIPLOME_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

DROP TABLE IF EXISTS `stage`;
CREATE TABLE IF NOT EXISTS `stage` (
  `ID` int(11) NOT NULL,
  `ENT_ID` int(11) NOT NULL,
  `ETU_ID` int(11) NOT NULL,
  `ANNEE` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_AVOIR_LIEU` (`ENT_ID`),
  KEY `FK_EFFECTUER` (`ETU_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

DROP TABLE IF EXISTS `theme`;
CREATE TABLE IF NOT EXISTS `theme` (
  `ID` int(11) NOT NULL,
  `LIBELLE` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
