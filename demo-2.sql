-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mar 06 Décembre 2016 à 20:51
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `demo`
--

-- --------------------------------------------------------

--
-- Structure de la table `case`
--

CREATE TABLE `case` (
  `id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `case`
--

INSERT INTO `case` (`id`, `type`) VALUES
(1, 'qcm');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `enonce` varchar(255) NOT NULL,
  `id_case` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `questions`
--

INSERT INTO `questions` (`id`, `enonce`, `id_case`) VALUES
(1, 'Quelle est la couleur du logo de la SG?', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `id` int(11) NOT NULL,
  `texte` text NOT NULL,
  `valeur` tinyint(1) NOT NULL,
  `id_question` int(11) NOT NULL,
  `explication` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `reponses`
--

INSERT INTO `reponses` (`id`, `texte`, `valeur`, `id_question`, `explication`) VALUES
(1, 'Bleu', 0, 1, ''),
(2, 'Rouge', 1, 1, ''),
(3, 'Blanc', 0, 1, ''),
(4, 'Marron', 0, 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `confirmation_token` varchar(255) NOT NULL,
  `confirmed_at` datetime NOT NULL,
  `reset_token` varchar(255) NOT NULL,
  `reset_at` datetime NOT NULL,
  `score` int(11) NOT NULL,
  `avancement` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_token`, `confirmation_token`, `confirmed_at`, `reset_token`, `reset_at`, `score`, `avancement`) VALUES
(1, 'Test1', 'test@test.com', '$2y$10$yfJhQ.smqt2Rg/GeRuvtiuH62LELfyLB33nDnB/.7LyEMjghflR8C', '82NSLBsd64tolnsY41J167bWtU1lXAZ91VIHwPJhbiBR16BJtnb5Nq4IlZfVifNQVAm0FQkDyUBa53SOJiYaiaMVRbBt7hrHzS1TUWkrNB1zPXRqkqFYYaryAO52dDRgySuBK7K8ScRj561lqV8ynTt9WUwLbDHBawEpebZQcyBM4WhhNnhGRXfA3SX6dFZ4jMSePXsbTabU6Y1fYgeLhil4TvUfhujsRhUYawwkWjxddAYspUINH1Imcl', 'tCdt8IcXxA6TsbqTcjAAwXD7IcoYvtJBoIV7mfubzYIuG0byOPmLpltD5NQL', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0, '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `case`
--
ALTER TABLE `case`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `case`
--
ALTER TABLE `case`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
