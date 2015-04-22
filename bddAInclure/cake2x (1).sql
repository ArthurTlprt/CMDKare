-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 22 Avril 2015 à 18:52
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
  `id_page` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`name`, `slug`, `content`, `id`, `user_id`) VALUES
('un test', 'un_test', 'du blabla', 3, 5),
('un truc', 'un_truc', 'peut être un test. CakePhp c''est trop cool.\r\n', 4, 5),
('En anglais', 'en_anglais', 'encore un test\r\nJe suis admin donc je peux aussi modifier les posts', 5, 5),
('Je suis Admin', 'je_suis_admin', 'Je suis donc le seul à accéder à ces infos eheheh', 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT 'customer',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`, `email`) VALUES
(1, 'marie monier', '$2a$10$CR9o2bi9pC2wdeKuHWnyfu5JCGrfmAOcYAiv9JZvRsIiQSXfD6/vK', 'admin', '2015-04-18 12:27:28', '2015-04-18 12:27:28', 'mmonier@cmdkare.fr'),
(3, 'Arthur Talpaert', '$2a$10$TTf03/tUBAv/Py5PIQZMw.nctjMzmf4ikpPkcnl173DzYtN00BqtK', 'author', '2015-04-18 12:39:25', '2015-04-18 12:39:25', 'arthur.talpaert@isen-lille.fr'),
(4, 'utilisateur lambda', '$2a$10$QFZmwE/nCZ9TKXxhaK5fVOxx299Og0.v8.FbmS25X.L.Mz6e1trbu', 'author', '2015-04-18 13:18:38', '2015-04-18 13:18:38', 'lambda@anything.random'),
(5, 'Testo Stérone', '$2a$10$Im2f3Gaqp7hwOxS6mKgYVugPlKFNKTO7goENOVF6BzIEQAwbIicWe', 'admin', '2015-04-18 19:46:25', '2015-04-20 13:00:19', 'testo.sterone@isen-lille.fr'),
(6, 'toto', 'toto', 'admin', '2015-04-18 20:06:05', '2015-04-18 20:06:05', 'toto@toto.fr'),
(7, 'tata', 'tata', 'author', '2015-04-19 18:59:11', '2015-04-19 18:59:11', 'tata@tata.fr'),
(8, 'ID9609', '$2a$10$X7ADOaJSgsFg2hwpT7myou7Fwkw59AAMkZeueTsIfFCbZ9BWzzReC', 'customer', '2015-04-21 19:03:37', '2015-04-21 19:03:37', 'arthur.talpaert@isen-lille.fr'),
(9, 'ID8157', '$2a$10$7ueOCKKGiOHraL007X95auiTFIioQczrkFabajdjtzZyvnLZaVEqm', 'customer', '2015-04-21 19:21:38', '2015-04-21 19:21:38', 'moi@truc.fr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
