-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 05 Mai 2015 à 18:05
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `contents`
--

INSERT INTO `contents` (`id`, `id_page`, `type`, `body`) VALUES
(1, 0, 'h1-"blue-text"', 'CMD Kare'),
(2, 0, 'p', 'CMDKare a été créé et conçu pour apporter un maximum de services à nos clients, qu’il s’agisse d’hôpitaux, de cliniques, de collectivités locales ou décideurs institutionnels, en maximisant leur potentiel   de flexibilité. \n    CMDKare est constitué de consultants expérimentés qui s’appuient sur le bureau d’étude ALTAO rompu aux analyses statistiques complexes et qui dispose des bases nationales : MCO, SSR et HAD. Les consultants sont entourés par des experts médicaux, soignants ou autres catégories professionnelles  sélectionnés et sollicités en fonction de la mission à effectuer.\n    CMDKare s’appuie sur les éléments positifs de vos organisations pour créer la dynamique nécessaire afin d’anticiper les opportunités de demain et accompagner le changement de vos organisations pour la performance de demain.\n    '),
(3, 0, 'p', 'CMDKare s’engage à vous apporter des solutions effectives, adéquates, opérationnelles en lien avec vos organisations tout en intégrant les innovations à mettre en place avec un accompagnement ciblé.'),
(4, 0, 'h3-"blue-text-darken"', 'Notre engagement : fournir l’approche et l’équipe nécessaire pour « Créer le Momentum de Demain » en s’appuyant sur vos forces.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
