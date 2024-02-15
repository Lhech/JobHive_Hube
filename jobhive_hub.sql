-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 15 fév. 2024 à 14:51
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
-- Base de données : `jobhive_hub`
--

-- --------------------------------------------------------

--
-- Structure de la table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `id_user` int NOT NULL,
  `id_emploie` int NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_user`,`id_emploie`),
  KEY `bb` (`id_emploie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `emploie`
--

DROP TABLE IF EXISTS `emploie`;
CREATE TABLE IF NOT EXISTS `emploie` (
  `id_emploie` int NOT NULL AUTO_INCREMENT,
  `nom_du_société` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `titre` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `adresse` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `domaine` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `salaire` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `contrat` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_emploie`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `emploie`
--

INSERT INTO `emploie` (`id_emploie`, `nom_du_société`, `titre`, `description`, `adresse`, `domaine`, `salaire`, `contrat`) VALUES
(3, 'Same Team', 'Developpeur wordpres', 'best post', '24 rue de marseille , Tunis', 'developpement web', '350$', 'temps_complet');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nom_et_prenom` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `mot_de_passe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom_et_prenom`, `email`, `mot_de_passe`, `description`, `role`) VALUES
(25, 'ahmed ailaoui', 'ahmedailaoui2002@gmail.com', '$2y$10$.x..R3aT8jiCYFzFasr02O039WYvejQMOjGKdOJHr/C1dNpRLQl3y', 'kjqfjqkij', 'utilisateur'),
(26, 'ahmed ailaoui', 'ailaouiahmedezzine@gmail.com', '$2y$10$uJRyTxaEjnOWLCvvkvRINOfBHdo2l.48iZTTcNcff1VpDmNHvmP8q', 'dev', 'utilisateur'),
(27, 'oussema derouiche ', 'oussema@gmail.com', '$2y$10$/GQlOTtynTy69fs0ZprRRuHJ4TxPD9qCpl.Oq2Rs/exwbAxOQu34.', 'developpeur', 'employeur'),
(28, 'Sofien', 'sofien@gmail.com', '$2y$10$wmAahQudzqTzaav8lX6sv.e7n9iaggEjYPyrw0CJuyTQAKcK./u2a', 'devloppeur', 'utilisateur');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `aa` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `bb` FOREIGN KEY (`id_emploie`) REFERENCES `emploie` (`id_emploie`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
