-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 28 Avril 2015 à 12:54
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
-- Structure de la table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_page` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `contents`
--

INSERT INTO `contents` (`id`, `id_page`, `type`, `body`) VALUES
(1, 0, 'titre1', 'Mon grand titre:'),
(2, 0, 'titre 2', 'Mon plus petit titre'),
(3, 0, 'article', 'Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. Mon contenu. '),
(4, 1, 'titre1', 'un dexième truc'),
(5, 1, 'body', 'My future is coming on, is coming on, is coming on. My future is coming on, is coming on, coming on, coming on ...'),
(6, 1, 'body', 'My future is coming on, is coming on, is coming on. My future is coming on, is coming on, coming on, coming on ...'),
(7, 3, 'title1', 'Lorsque foreach démarre, le pointeur interne du tableau est automatiquement ramené au premier élément du tableau. Cela signifie que vous n''aurez pas à faire appel à reset() avant foreach.\r\nVu que foreach utilise le pointeur interne du tableau à chaque itération, il conviendra d''en tenir compte lors d''une utilisation future du tableau dans votre code.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
