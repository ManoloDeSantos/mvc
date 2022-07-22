-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 21 juil. 2022 à 15:36
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id` int(11) NOT NULL,
  `formation` varchar(10) NOT NULL,
  `formateur` varchar(25) NOT NULL,
  `commence` date NOT NULL,
  `semaines` int(4) NOT NULL,
  `prix` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id`, `formation`, `formateur`, `commence`, `semaines`, `prix`) VALUES
(4, 'COBOL', 'Jean', '2025-02-18', 17, 225),
(7, 'php', 'Robin', '2023-06-05', 12, 140),
(8, 'JS', 'Paul', '2024-01-15', 16, 400),
(9, 'c++', 'Jhony', '2023-03-10', 25, 120),
(10, 'PHP', 'Fred', '2022-01-10', 5, 22),
(11, 'CSS3', 'Antoine', '2024-02-16', 25, 280),
(12, 'HTML5', 'Ruth', '2022-11-12', 15, 625),
(13, 'PHP', 'Pierre', '2024-05-19', 14, 310);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
