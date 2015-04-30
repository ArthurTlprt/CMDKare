-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 29 Avril 2015 à 21:02
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
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `avatar` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`avatar`, `name`, `slug`, `content`, `id`, `user_id`) VALUES
('img/avatars/30.jpg', 'test', 'test', 'Its been an amazing few weeks! Ringo released his new album Postcards From Paradise on March 31 and Rory Storm & The Hurricanes returned to the #1 slot on the Classic Rock MediaBase, having also held the top position for the week of April 6. Paul McCartney inducted Ringo into the Rock and Roll Hall of Fame on April 18 - and you can check out this exclusive backstage footage from rehearsals - and watch out for the broadcast on HBO Saturday May 30th at 8pm.', 30, 1),
('avatars/31.jpg', 'test', 'test', 'The robotic spacecraft MESSENGER has run out of fuel. With no way to make major adjustments to its orbit around the planet Mercury, the probe will add a new crater to the planet''s scarred face. The end is likely to come at about 3:30 p.m. EDT on April 30, 2015.\r\nNone of this is a surprise to MESSENGER''s handlers on Earth, who have managed a highly successful mission during a flight of nearly 11 years. The intrepid MESSENGER (MErcury Surface, Space ENvironment, GEochemistry, an...\r\nSee More', 31, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
