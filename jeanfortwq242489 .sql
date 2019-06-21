-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 21 juin 2019 à 11:21
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `jeanfortwq242489`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `alert` int(11) DEFAULT NULL,
  `added_datetime` datetime NOT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `content`, `alert`, `added_datetime`, `updated_datetime`) VALUES
(1, 5, 'Test utilisateur', 'Merci pour ce chapitre, hâte de découvrir la suite !! ', 0, '2019-06-18 18:24:05', NULL),
(2, 5, 'Test utilisateur', 'Horrible chapitre, je déteste , c\'est nul ! ', 0, '2019-06-19 18:24:38', NULL),
(3, 5, 'Test utilisateur', 'Merci, super chapitre ! ', 3, '2019-06-20 18:26:00', '2019-06-20 18:27:25');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `added_datetime` datetime NOT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `author`, `title`, `content`, `added_datetime`, `updated_datetime`) VALUES
(1, 'Jean Forteroche', 'Chapitre 1 || Billet simple pour l\'Alaska', '', '2019-06-18 18:04:30', NULL),
(2, 'Jean Forteroche', 'Chapitre 2 || Billet simple pour l\'Alaska', '', '2019-06-18 18:06:55', NULL),
(3, 'Jean Forteroche', 'Chapitre 3 || Billet simple pour l\'Alaska', '', '2019-06-19 18:07:25', NULL),
(4, 'Jean Forteroche', 'Chapitre 4 || Billet simple pour l\'Alaska', '', '2019-06-19 18:08:41', NULL),
(5, 'Jean Forteroche', 'Chapitre 5 || Billet simple pour l\'Alaska', '', '2019-06-20 18:09:41', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `email`) VALUES
(3, 'admin', '$2y$10$K5ABdxECRbfeywfYqaH9kOn7.HgmGe4qlzIt2d36sMeod28jhDyeu', 'jeanforteroche@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
