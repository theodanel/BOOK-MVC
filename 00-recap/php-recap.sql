-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 03 nov. 2023 à 15:05
-- Version du serveur : 11.1.2-MariaDB
-- Version de PHP : 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php-recap`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `isbn` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `published_at` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `title`, `price`, `discount`, `isbn`, `author`, `published_at`, `image`) VALUES
(1, 'Quae dolor itaque natus reiciendis ad quae.', 38, 19, '8248827583739', 'Denise-Sabine Bernard', '2014-08-18', 'uploads/06.jpg'),
(2, 'In in facilis quam vitae.', 26, 0, '3680780915', 'Nicolas de la Courtois', '1987-10-22', 'uploads/05.jpg'),
(3, 'Dolorum sit veritatis atque rerum cum quaerat.', 78, 20, '0432990694820', 'Aimé Martineau', '2008-08-07', 'uploads/02.jpg'),
(4, 'Illo deleniti commodi ex.', 29, 18, '7445094667310', 'Arthur Allard', '1991-07-23', 'uploads/01.jpg'),
(5, 'Et modi sit dolorum.', 45, 18, '0857622132295', 'Alphonse Gros', '1981-10-04', 'uploads/02.jpg'),
(6, 'Quam iusto natus eos.', 62, 11, '9478341825490', 'Théodore Francois', '2013-02-09', 'uploads/03.jpg'),
(7, 'Natus possimus modi sint hic ut tempore.', 68, 10, '0873356029069', 'René Joly', '1996-01-30', 'uploads/06.jpg'),
(8, 'Maxime vel ut similique.', 25, 10, '0593548548504', 'Henriette Gomes', '1975-08-20', 'uploads/05.jpg'),
(9, 'Quia officia dignissimos et natus a.', 50, 11, '1309708700366', 'Guillaume Leleu', '2021-09-29', 'uploads/05.jpg'),
(10, 'Enim et omnis aliquid.', 60, 14, '1223719243691', 'Louise Guyon', '1994-04-24', 'uploads/05.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `message`) VALUES
(1, 'Fiorella', 'Un message'),
(2, 'Matt', 'Un autre message'),
(8, 'Fiorella', 'Mon messageeeee'),
(11, '&lt;script&gt;alert(&#039;Ok&#039;);&lt;/script&gt;', 'Messageeeeeeeee');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
