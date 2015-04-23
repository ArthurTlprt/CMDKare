-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 23 Avril 2015 à 19:43
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cake2x`
--

-- --------------------------------------------------------

--
-- Structure de la table `legal_monitorings`
--

CREATE TABLE IF NOT EXISTS `legal_monitorings` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  `title` varchar(400) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `legal_monitorings`
--

INSERT INTO `legal_monitorings` (`id`, `date`, `title`, `content`) VALUES
(4, '0000-00-00', 'un qatrième', 'du blabla\r\n'),
(5, '0000-00-00', 'un cinquièmeblabla', ''),
(6, '', 'encore', 'et encore des tests'),
(7, '', 'encore', 'et encore des tests'),
(10, '', 'yutr', 'oiuiytgfv yutere\r\nuytrer'),
(11, 'Le 23/04/2015 à 13h', 'Un énième test', 'du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!du blabla!'),
(12, 'Le 23/04/2015 à 13h', 'CA MAAAAARCHE', 'youpi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
