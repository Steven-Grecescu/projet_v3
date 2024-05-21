-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le : mar. 21 mai 2024 à 19:48
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `exercice_symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240308171347', '2024-03-08 17:34:38', 62),
('DoctrineMigrations\\Version20240312215055', '2024-03-12 21:51:57', 50);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
CREATE TABLE IF NOT EXISTS `messenger_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `possession`
--

DROP TABLE IF EXISTS `possession`;
CREATE TABLE IF NOT EXISTS `possession` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) COLLATE utf8mb4_et_0900_as_cs NOT NULL,
  `valeur` double NOT NULL,
  `type` varchar(40) COLLATE utf8mb4_et_0900_as_cs NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_et_0900_as_cs;

--
-- Déchargement des données de la table `possession`
--

INSERT INTO `possession` (`Id`, `nom`, `valeur`, `type`) VALUES
(1, 'voiture', 50000, 'tesla'),
(3, 'Honda', 1500, 'moto'),
(4, 'Orbea', 800, 'velo');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(40) COLLATE utf8mb4_et_0900_as_cs NOT NULL,
  `prenom` varchar(40) COLLATE utf8mb4_et_0900_as_cs NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_et_0900_as_cs NOT NULL,
  `adresse` varchar(40) COLLATE utf8mb4_et_0900_as_cs NOT NULL,
  `tel` varchar(40) COLLATE utf8mb4_et_0900_as_cs NOT NULL,
  `birth_date` date NOT NULL,
  `possession_id` int DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `IDX_1483A5E9A337924` (`possession_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_et_0900_as_cs;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Id`, `Nom`, `prenom`, `email`, `adresse`, `tel`, `birth_date`, `possession_id`) VALUES
(1, 'Jean', 'Paul', 'JP@gmail.com', 'jp rue des plantes', '0152536894', '1993-03-04', 1),
(22, 'Test', 'test', 'test@gmail.com', 'test rue des test', '06 56 47 29 84', '1935-04-18', NULL),
(23, 'test2', 'test2', 'test2@gmail.com', 'test2', '05 56 68 42 14', '1985-04-04', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
