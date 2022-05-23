-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 23 mai 2022 à 13:55
-- Version du serveur : 5.7.33
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laboutiquefrancaise`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Manteaux'),
(2, 'T-shirts'),
(3, 'Echarpes'),
(4, 'Bonnets');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220511160906', '2022-05-11 17:04:28', 129),
('DoctrineMigrations\\Version20220512132303', '2022-05-12 16:42:35', 80),
('DoctrineMigrations\\Version20220520184148', '2022-05-23 06:32:24', 60),
('DoctrineMigrations\\Version20220520205933', '2022-05-23 06:32:24', 84);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `illustration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `slug`, `illustration`, `subtitle`, `description`, `price`) VALUES
(1, 4, 'bonnet rouge', 'bonnet-rouge', '442ab1facc3ccbd68ea5f8497ebc98304ef49f39.jpg', 'bonnet rouge avec pompon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit suscipit eros vitae semper. Nullam interdum, nisl ac tincidunt pulvinar, felis felis rhoncus nibh, ut aliquet ligula risus in metus. Vivamus suscipit diam vel lectus fringilla, eu vulputate lectus varius. Suspendisse potenti. Etiam blandit eu dolor sed ullamcorper. Aenean et erat id turpis congue faucibus. Phasellus nec purus quam. Nam cursus consectetur tellus sed faucibus.', 2300),
(2, 4, 'bonnet bi colore', 'bonnet-bi-colore', '4e1e9840822f6314ce29bcb1a8c06506a7e1a925.jpg', 'bonnet 2 couleurs', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit suscipit eros vitae semper. Nullam interdum, nisl ac tincidunt pulvinar, felis felis rhoncus nibh, ut aliquet ligula risus in metus. Vivamus suscipit diam vel lectus fringilla, eu vulputate lectus varius. Suspendisse potenti. Etiam blandit eu dolor sed ullamcorper. Aenean et erat id turpis congue faucibus. Phasellus nec purus quam. Nam cursus consectetur tellus sed faucibus.', 2800),
(3, 3, 'echarpe rouge', 'echarpe-rouge', 'f39d6b73ac5b517fed9a4f2ad8289c47e8cad1ee.jpg', 'echarpe toute douce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit suscipit eros vitae semper. Nullam interdum, nisl ac tincidunt pulvinar, felis felis rhoncus nibh, ut aliquet ligula risus in metus. Vivamus suscipit diam vel lectus fringilla, eu vulputate lectus varius. Suspendisse potenti. Etiam blandit eu dolor sed ullamcorper. Aenean et erat id turpis congue faucibus. Phasellus nec purus quam. Nam cursus consectetur tellus sed faucibus.', 4000),
(4, 3, 'echarpe vintage', 'echarpe-vintage', 'a84a0e89f006cd3233b4888f37848515da2ec16e.jpg', 'echarpe à l\'ancienne', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit suscipit eros vitae semper. Nullam interdum, nisl ac tincidunt pulvinar, felis felis rhoncus nibh, ut aliquet ligula risus in metus. Vivamus suscipit diam vel lectus fringilla, eu vulputate lectus varius. Suspendisse potenti. Etiam blandit eu dolor sed ullamcorper. Aenean et erat id turpis congue faucibus. Phasellus nec purus quam. Nam cursus consectetur tellus sed faucibus.', 1500),
(5, 1, 'manteau chic', 'manteau-chic', '377e22e601ffa94b0efe1d54ed1c4a4a1435e5f3.jpg', 'manteau gris pour madame', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit suscipit eros vitae semper. Nullam interdum, nisl ac tincidunt pulvinar, felis felis rhoncus nibh, ut aliquet ligula risus in metus. Vivamus suscipit diam vel lectus fringilla, eu vulputate lectus varius. Suspendisse potenti. Etiam blandit eu dolor sed ullamcorper. Aenean et erat id turpis congue faucibus. Phasellus nec purus quam. Nam cursus consectetur tellus sed faucibus.', 12000),
(6, 1, 'manteau enfant', 'manteau-enfant', '393168af691de7e39df9cf60550e8f24d9d77bb3.jpg', 'manteau pour les petits', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit suscipit eros vitae semper. Nullam interdum, nisl ac tincidunt pulvinar, felis felis rhoncus nibh, ut aliquet ligula risus in metus. Vivamus suscipit diam vel lectus fringilla, eu vulputate lectus varius. Suspendisse potenti. Etiam blandit eu dolor sed ullamcorper. Aenean et erat id turpis congue faucibus. Phasellus nec purus quam. Nam cursus consectetur tellus sed faucibus.', 9500),
(7, 2, 't shirt blanc', 't-shirt-blanc', '62700dade1b7db43265d90ca9276337eeb451240.jpg', 't shirt basique', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit suscipit eros vitae semper. Nullam interdum, nisl ac tincidunt pulvinar, felis felis rhoncus nibh, ut aliquet ligula risus in metus. Vivamus suscipit diam vel lectus fringilla, eu vulputate lectus varius. Suspendisse potenti. Etiam blandit eu dolor sed ullamcorper. Aenean et erat id turpis congue faucibus. Phasellus nec purus quam. Nam cursus consectetur tellus sed faucibus.', 1500),
(8, 2, 't shirt manches longues', 't-shirt-manches-longues', 'fcb19b3a2206aece9506df1c09b810361bb0d204.jpg', 't shirt mi saison', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit suscipit eros vitae semper. Nullam interdum, nisl ac tincidunt pulvinar, felis felis rhoncus nibh, ut aliquet ligula risus in metus. Vivamus suscipit diam vel lectus fringilla, eu vulputate lectus varius. Suspendisse potenti. Etiam blandit eu dolor sed ullamcorper. Aenean et erat id turpis congue faucibus. Phasellus nec purus quam. Nam cursus consectetur tellus sed faucibus.', 2800);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `firstname`, `lastname`) VALUES
(1, 'motard66670@gmail.com', '[]', '1234', 'arnaud', 'CAILLE'),
(2, 'tatayoyo@gmail.com', '[]', '$2y$13$8YeCWQ6HYKyXCWN7dmH6qeng69xFnDSMV.jlJtYIBiMqdeC7N5sTq', 'tata', 'yoyo');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D34A04AD12469DE2` (`category_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
