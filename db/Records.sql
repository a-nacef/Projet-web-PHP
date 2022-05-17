-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 17 mai 2022 à 19:15
-- Version du serveur :  8.0.29-0ubuntu0.20.04.3
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Records`
--

-- --------------------------------------------------------

--
-- Structure de la table `gn-users`
--

CREATE TABLE `gn-users` (
  `first-name` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `id` varchar(10) NOT NULL,
  `age` int NOT NULL,
  `password` varchar(10) NOT NULL,
  `admin` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `gn-users`
--

INSERT INTO `gn-users` (`first-name`, `lastname`, `id`, `age`, `password`, `admin`) VALUES
('ahmed', 'hamadi', 'idfirst', 22, 'pass', 1),
('ammar', 'mehdi', 'idsecond', 25, 'pass2', 0),
('ahmed', 'hamadi', 'myid', 22, 'pass', 1),
('ammar', 'mehdi', 'myid2', 25, 'pass2', 0);

-- --------------------------------------------------------

--
-- Structure de la table `holders`
--

CREATE TABLE `holders` (
  `name` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `record` longtext NOT NULL,
  `year` int NOT NULL,
  `ref` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `holders`
--

INSERT INTO `holders` (`name`, `lastname`, `record`, `year`, `ref`) VALUES
('Personne2', 'Hypothetique', 'World\'s strongest man.', 2017, '1abc'),
('Personne', 'hypothetique', 'World\'s fastest swimmer', 2016, '2abc'),
('Personne2', 'Hypothetique', 'World\'s strongest man.', 2017, 'abc1'),
('Personne', 'hypothetique', 'World\'s fastest swimmer', 2016, 'abc2');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `gn-users`
--
ALTER TABLE `gn-users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `holders`
--
ALTER TABLE `holders`
  ADD PRIMARY KEY (`ref`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
