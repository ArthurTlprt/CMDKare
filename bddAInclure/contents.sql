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
(4, 0, 'h3-"blue-text"', 'Notre engagement : fournir l’approche et l’équipe nécessaire pour « Créer le Momentum de Demain » en s’appuyant sur vos forces.');
/* Actualites */
(5,0, 'h3', ' ');
(6,0, 'p', ' ');
(7,0, 'h3', ' ');
(8,0, 'p', ' ');
(9,0, 'h3', ' ');
(10,0, 'p', ' ');
(11,0, 'h3', ' ');
(12,0, 'p', ' ');
/* Carroussel Histoire */
(13,0, 'h3', 'A l’origine, de belles rencontres');
(14,0, 'p', 'A l’origine de beaucoup de belles histoires, il y a des rencontres : CMDKare n’échappe pas à la règle. Notre cabinet totalement indépendant s’est appuyé sur la fidélité et la complémentarité des femmes et des hommes qui le composent.');
(15,0, 'h3', 'Depuis 25 ans...');
(16,0,'p', 'CMDKare est une émanation de la branche stratégie d’ALTAO, leader indépendant depuis 25 ans de l’étude et du conseil pour l’ensemble des acteurs du système de soins.\n Dans un esprit de co-construction et avec l’envie de faire ensemble différemment, les membres fondateurs se sont associés en mars 2015 pour créer CMDKare.');
(16,0,'h3','Notre famille s’agrandit !');
(17,0,'p','Pour accompagner le développement de CMDKare, des femmes et des hommes de talents nous ont rejoints dans cette aventure ! Aujourd’hui, plus de 20 experts métiers issus du monde de la santé (experts médicaux, soignants, directeurs d’hôpitaux, gestionnaires du secteur médico-social…) nous entourent et se mobilisent pour vous accompagner dans le changement de vos organisations.');
(18,0,'h3','Notre défi');
(19,0,'p','CMDKare ose relever le défi pour « Créer le Momentum de Demain ». Nous nous appuyons sur les éléments positifs de vos organisations pour créer la dynamique nécessaire afin d’anticiper les opportunités de demain et accompagner le changement de vos organisations pour la performance de demain. Nous avons le courage de nos idées pour envisager le futur avec vous.');
/* Infos Associés */
(20,0,'h3','Marie Monier - Présidente Associée');
(21,0,'h4','Consultante Senior');
(22,0,'p','blabla');
(23,0,'h3','Marc Broucqsault - Associé');
(24,0,'h4','');
(25,0,'p','blabla');
(26,0,'h3','Charlotte Dupuis - Associé');
(27,0,'h4','Consultant Stratégie Hospitalière');
(28,0,'p','Charlotte est consultante en stratégie hospitalière. Elle accompagne des acteurs variés (établissements sanitaires, professionnels libéraux, décideurs politiques et institutionnels,) dans la gestion de leurs projets (projets médicaux, coopérations hospitalières, coopérations transfrontalières, projets de maisons de santé pluridisciplinaires…).Elle a auparavant travaillé à la Direction de l’Offre de Soins de l’Agence Régionale de Santé du Nord-Pas-de-Calais où elle était en charge du suivi des établissements sanitaires de la zone de proximité de Lens-Hénin et des coopérations en matière de santé.Juriste de formation, spécialisée en droit de la santé, Charlotte a travaillé dans le cadre de son master sur les enjeux de la coopération transfrontalière franco-belge en matière de santé.');
(29,0,'h3','Dan Rosenbaum - Associé');
(30,0,'h4','');
(31,0,'p','blabla');
(32,0,'h3','Viviane Desmyttère - Associée');
(33,0,'h4','');
(34,0,'p','blabla');
(35,0,'h3','Sébastien Gosselin – Associé');
(36,0,'h4','');
(37,0,'p','blabla');
(38,0,'h3','Nicolas Vaillant - Associé');
(39,0,'h4','');
(40,0,'p','blabla');
/* Valeurs Clées */
(41,0,'h4','Offrir la meilleure expérience client');
(42,0,'p','La satisfaction de nos clients est pour nous un gage de pérennité. Nous sommes à l’écoute de nos clients pour mieux les comprendre, répondre à leurs besoins et co-construire avec eux des relations durables. Nous cherchons sans cesse le meilleur moyen pour les aider à créer de la valeur. Ensemble, nous nous engageons dans une démarche continue d’amélioration de la qualité du service.');
(43,0,'h4','Développer une confiance mutuelle');
(44,0,'p','&nbsp Nous sommes collectivement engagés par nos promesses et nos responsabilités. Nous visons l’excellence dans les rapports avec nos clients, la performance des prestations effectuées et l’expertise des consultants.');
(45,0,'h4','Encourager l’innovation');
(46,0,'p','L’innovation est au cœur de la démarche CMDKare. Nous nous efforçons de façonner des réponses innovantes et adaptées pour créer toujours plus de valeur pour nos clients. L’innovation se traduit par les méthodes, outils et productions que nous réalisons en lien avec les évolutions du système de soins français, les mutations de territoires et les retours d’expériences multiples (françaises et étrangères).');
(47,0,'h4','S’épanouir en créant la différence');
(48,0,'p','Nous nous dépassons pour faire de CMDKare un partenaire de choix pour créer la dynamique nécessaire afin d’anticiper les opportunités de demain et accompagner le changement des organisations de nos clients pour la performance de demain.');
(49,0,'h4','Favoriser le travail collaboratif');
(50,0,'p','nous appliquons ces valeurs dans notre travail avec nos clients pour chaque mission (participation et concertation des acteurs) et également au sein de CMDKare. La philosophie du cabinet est de favoriser l’intelligence collective, par le travail collaboratif et le partage d’expérience et de connaissances.');
(51,0,'h4','Garantir notre indépendance');
(52,0,'p','&nbsp Nous sommes un cabinet de conseil indépendant de tout groupe industriel ou financier et de toute structure publique, afin de garantir objectivité et indépendance dans son expertise et ses recommandations auprès de nos clients. ');
/* Consultants */
(54,0,'h1 blue-text', 'Consultants CMD Kare');
(55,0,'p','Texte a ajouter');
/* Experts */
(56,0,'h1 blue-text','Aujourd’hui, plus de 20 experts métiers issus du monde de la santé nous entourent et se mobilisent pour vous accompagner dans le changement de vos organisations.Des experts métiers en très grande majorité des spécialistes techniques : experts médicaux - plusieurs spécialités représentées, cadres, soignants, directeurs d’hôpitaux, économistes de la santé, ingénieurs qualité, gestionnaires de structures médico-sociales, architectes, experts financiers, spécialistes du traitement de l’information médicale….Dans la pratique, CMDKare s’appuie sur le bureau d’études ALTAO composé de statisticiens de haut niveau rompus aux analyses statistiques complexes et qui disposent des bases nationales : MCO, SSR et HAD.Afin de mener à bien chaque mission, CMDKare constitue une équipe ad hoc en fonction des besoins de notre client, placée sous la tutelle d’un chef de mission qui est garant de la méthodologie, des échéances, de l’adéquation des intervenants et de la qualité des livrables.');
(57,0,'h2 blue-text','Notre Commité D’epxerts');
/* Expertises */
(58,0,'h1 blue-text','Nos Expertises');
(59,0,'p','Nous révélons vos points forts et les éléments positifs de vos organisations, nous vous aidons à créer la dynamique nécessaire afin d’anticiper les opportunités de demain et à renforcer le changement de vos organisations pour la performance de demain. CMDKare vous aide à choisir un positionnement stratégique porteur pour faire la différence, en apportant un autre angle de réflexion grâce à des approches spécifiques, de nouvelles méthodes en termes d’accompagnement au changement, des outils d’analyse solides, validés et en constante évolution.');
(60,0,'h2','Nous travaillons sur la différenciation pour proposer des solutions à plus forte valeur ajoutée.');
/* Lean Santé*/
(61,0,'p','Focus patient : le patient est au cœur des priorités et des décisions');
(62,0,'p',' Engagement des professionnels et acteurs clés dans l’identification des problèmes, le choix des solutions et l’implantation des solutions retenues');
(63,0,'p','Focus patient : Elimination du gaspillage et accroissement de la responsabilité');
(64,0,'p','Focus patient : Ramener la décision près de l’action');
(65,0,'p','Focus patient : Vision à long terme pour assurer pérennité');
/* ERAS */
(66,0,'p','La Récupération Rapide Après Chirurgie est une approche de prise en charge globale du patient en périopératoire visant au rétablissement rapide des capacités physiques et psychiques antérieures. Elle a aussi pour conséquence in fine de voir réduire les durées d’hospitalisations. Les expérimentations documentées mettent en avant une réduction de 30% des durées de séjours et une réduction des complications de 50%.Démarche extrêmement porteuse et avancée, elle correspond à une organisation spécifique des soins selon la notion de chemin clinique centrée autour du patient qui joue un rôle actif, accompagné d’une prise en charge multidisciplinaire. Ce parcours est réfléchi à chaque étape sous l’ange de l’optimisation de la prise en charge et permet d’optimiser les concepts de sécurité et qualité de la prise en charge, grâce à une protocolisation adaptée.');
(67,0,'div class="alert alert-info alert-dismissible"','CMDKare s’engage à vous apporter des solutions effectives, adéquates, opérationnelles en lien avec vos organisations tout en intégrant les innovations à mettre en place avec un accompagnement ciblé.');
(68,0,'strong','Notre engagement : fournir l’approche et l’équipe nécessaire pour « Créer le Momentum de Demain » en s’appuyant sur vos forces.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
