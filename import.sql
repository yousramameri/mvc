-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 03 déc. 2022 à 16:40
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.2

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
-- Structure de la table `mvc_news`
--

CREATE TABLE `mvc_news` (
  `news_id` int NOT NULL,
  `news_title` varchar(65) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_date` date NOT NULL,
  `news_content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mvc_news`
--

INSERT INTO `mvc_news` (`news_id`, `news_title`, `news_date`, `news_content`) VALUES
(1, 'Ma première news', '2022-10-12', 'Ceci est la première news, un peu courte vous en conviendrez, mais elle a le mérite d\'exister...'),
(2, 'On passe la seconde', '2022-10-14', 'Incroyable, voilà que j\'écris de nouveau, aurais-je des visiteurs sur ce site imaginaire ??'),
(3, 'Où suis-je ?', '2022-11-04', 'Oué, j\'ai été pas mal malade...'),
(4, 'Le début de la fin', '2022-12-02', 'Ainsi s\'en va, ce qui n\'a jamais vraiment commencé.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `mvc_news`
--
ALTER TABLE `mvc_news`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `mvc_news`
--
ALTER TABLE `mvc_news`
  MODIFY `news_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
