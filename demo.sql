-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 28 Novembre 2016 à 22:22
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `demo`
--

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
  `reset_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_token`, `confirmation_token`, `confirmed_at`, `reset_token`, `reset_at`) VALUES
(1, 'Paul', 'julien.paul95@gmail.com', '$2y$10$KBOpkcMPLSL7u1wojjqhLeyzIb5NwIiYpxm66qrhjiY.vqndD15dq', 'dwQGoZBttYq2H9F5CGg8mG2IowIosh8wPR31D9eaSz9zBdyBZysfoVhEd07hwGLEGoPdrDzT7etpnLCQEhrfaze5WtrdqdA7381CxVzENtGlSDqqIomiQMH6yikHicxbdAnZSewM8pQPuYST3f2CG1c9pEXYq7aXh8c2a01TxNb7SpYnRylSM8fPcOMnomUY5DrRioarAwjNtB5x09f0soA5g3droWNHi7OCd1IM29xTGYlnTnFDiws68p', '7wOLRgglm0Eic72UJaLVWFnpOq4EIjvvLBfdwiUBJI0J2JnZSu99QA5Ogtl8', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(2, 'test', 'test@gmail.com', '$2y$10$tR8k3RotbO1AaQOuSxsu7er4Ihg9jEQ5EmLPKJmGtYC9NDyVVE29K', '', 'C8QpDcUOMAVvxFIXfl7NstVC6c2AU3sf8oxFzeeRwuQRhYTD5tWhsN34rmRW', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(3, 'tete', 'tete@gmail.com', '$2y$10$IN0LLPcF8NEm8HDPIc/QRuo4uJWZaZxQgpPATdRwXofAXcwf.cfyi', '', 'hjUKwbfWRKoIGalGTo4nHyq9YFiSY8aZKSm8Djbn7JuqdukV4754DXhhqHdG', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(4, 'tata', 'tata@gmail.com', '$2y$10$Wf8GEuJIWRLDO63q4SbPIuo3LU6AnEs/D9gac9cQFu6wTTCFQdEAq', '', 'Kt40KZNAccKFKoPUDX1hsw0ZGy8LADxZ1BkZjXSPa1EXv7W6g5HYopSvAw8t', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;