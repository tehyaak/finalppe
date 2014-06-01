-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 27 Mars 2014 à 08:28
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ppe14`
--

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE IF NOT EXISTS `competence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parcours` int(1) NOT NULL,
  `obligatoire` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=61 ;

--
-- Contenu de la table `competence`
--

INSERT INTO `competence` (`id`, `description`, `parcours`, `obligatoire`) VALUES
(1, 'Participation à un projet d’évolution d’un SI (solution applicative et d’infrastructure portant prioritairement sur le domaine de spécialité du candidat)', 0, 1),
(2, 'Prise en charge d’incidents et de demandes d’assistance liés au domaine de spécialité du candidat', 0, 1),
(3, 'Elaboration de documents relatifs à la production et à la fourniture de services', 0, 1),
(4, 'Productions relatives à la mise en place d’un dispositif de veille technologique et à l’étude d’une technologie, d’un composant, d’un outil ou d’une méthode', 0, 1),
(5, 'A1.1.1 , Analyse du cahier des charges d''un service à produire', 0, 0),
(6, 'A1.1.2 , Étude de l''impact de l''intégration d''un service sur le système informatique', 0, 0),
(7, 'A1.1.3 , Étude des exigences liées à la qualité attendue d''un service', 0, 0),
(8, 'A1.2.1 , Élaboration et présentation d''un dossier de choix de solution technique', 0, 0),
(9, 'A1.2.2 , Rédaction des spécifications techniques de la solution retenue', 0, 0),
(10, 'A1.2.3 , Évaluation des risques liés à l''utilisation d''un service', 0, 0),
(11, 'A1.2.4 , Détermination des tests nécessaires à la validation d''un service', 0, 0),
(12, 'A1.2.5 , Définition des niveaux d''habilitation associés à un service', 0, 0),
(13, 'A1.3.1 , Test d''intégration et d''acceptation d''un service', 0, 0),
(14, 'A1.3.2 , Définition des éléments nécessaires à la continuité d''un service', 0, 0),
(15, 'A1.3.3 , Accompagnement de la mise en place d''un nouveau service', 0, 0),
(16, 'A1.3.4 , Déploiement d''un service', 0, 0),
(17, 'A1.4.1 , Participation à un projet', 0, 0),
(18, 'A1.4.2 , Évaluation des indicateurs de suivi d''un projet et justification des écarts', 0, 0),
(19, 'A1.4.3 , Gestion des ressources', 0, 0),
(20, 'A2.1.1 , Accompagnement des utilisateurs dans la prise en main d''un service', 0, 0),
(21, 'A2.1.2 , Évaluation et maintien de la qualité d''un service', 0, 0),
(22, 'A2.2.1 , Suivi et résolution d''incidents', 0, 0),
(23, 'A2.2.2 , Suivi et réponse à des demandes d''assistance', 0, 0),
(24, 'A2.2.3 , Réponse à une interruption de service', 0, 0),
(25, 'A2.3.1 , Identification, qualification et évaluation d''un problème', 0, 0),
(26, 'A2.3.2 , Proposition d''amélioration d''un service', 0, 0),
(27, 'A3.1.2 , Maquettage et prototypage d''une solution d''infrastructure', 2, 0),
(28, 'A3.1.3 , Prise en compte du niveau de sécurité nécessaire à une infrastructure', 2, 0),
(29, 'A3.2.1 , Installation et configuration d''éléments d''infrastructure', 0, 0),
(30, 'A3.2.2 , Remplacement ou mise à jour d''éléments défectueux ou obsolètes', 0, 0),
(31, 'A3.2.3 , Mise à jour de la documentation technique d''une solution d''infrastructure', 2, 0),
(32, 'A3.3.1 , Administration sur site ou à distance des éléments d''un réseau, de serveurs', 2, 0),
(33, 'A3.3.2 , Planification des sauvegardes et gestion des restauration', 2, 0),
(34, 'A3.3.3 , Gestion des identités et des habilitations', 2, 0),
(35, 'A3.3.4 , Automatisation des tâches d''administration', 2, 0),
(36, 'A3.3.5 , Gestion des indicateurs et des fichiers d''activité', 2, 0),
(37, 'A4.1.1 , Proposition d''une solution applicative', 1, 0),
(38, 'A4.1.2 , Conception ou adaptation de l''interface utilisateur d''une solution applicative', 0, 0),
(39, 'A4.1.3 , Conception ou adaptation d''une base de données', 0, 0),
(40, 'A4.1.4 , Définition des caractéristiques d''une solution applicative', 1, 0),
(41, 'A4.1.5 , Prototypage de composants logiciels', 1, 0),
(42, 'A4.1.6 , Gestion d''environnements de développement et de test', 1, 0),
(43, 'A4.1.7 , Développement, utilisation ou adaptation de composants logiciels', 0, 0),
(44, 'A4.1.8 , Réalisation des tests nécessaires à la validation d''éléments adaptés ou développés', 0, 0),
(45, 'A4.1.9 , Rédaction d''une documentation technique', 0, 0),
(46, 'A4.1.10 ,  Rédaction d''une documentation d''utilisation', 1, 0),
(47, 'A4.2.1 , Analyse et correction d''un dysfonctionnement, d''un problème de qualité de …', 1, 0),
(48, 'A4.2.2 , Adaptation d''une solution applicative aux évolutions de ses composants', 1, 0),
(49, 'A4.2.3 , Réalisation des tests nécessaires à la mise en production d''éléments mis à jour', 1, 0),
(50, 'A4.2.4 , Mise à jour d''une documentation technique', 1, 0),
(51, 'A5.1.1 , Mise en place d''une gestion de configuration', 0, 0),
(52, 'A5.1.2 , Recueil d''informations sur une configuration et ses éléments', 0, 0),
(53, 'A5.1.3 , Suivi d''une configuration et de ses éléments', 0, 0),
(54, 'A5.1.4 , Étude de propositions de contrat de service (client, fournisseur)', 0, 0),
(55, 'A5.1.5 , Évaluation d''un élément de configuration ou d''une configuration', 0, 0),
(56, 'A5.1.6 , Évaluation d''un investissement informatique', 0, 0),
(57, 'A5.2.1 , Exploitation des référentiels, normes et standards adoptés par le prestataire', 0, 0),
(58, 'A5.2.2 , Veille technologique', 0, 0),
(59, 'A5.2.3 , Repérage des compléments de formation ou d''auto-formation ...', 0, 0),
(60, 'A5.2.4 , Étude d''une technologie, d''un composant, d''un outil ou d''une méthode', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
