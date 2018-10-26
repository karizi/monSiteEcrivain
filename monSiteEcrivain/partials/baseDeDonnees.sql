-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 26 oct. 2018 à 10:27
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_minisite`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `idBlog` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`idBlog`, `title`, `content`, `date`, `id`) VALUES
(1, 'Histoire de javascript', 'Le langage a Ã©tÃ© crÃ©Ã© en dix jours en mai 1995 pour le compte de la Netscape Communications Corporation par Brendan Eich, qui s\'est inspirÃ© de nombreux langages, notamment de Java mais en simplifiant la syntaxe pour les dÃ©butants7.\r\n\r\nBrendan Eich a initialement dÃ©veloppÃ© un langage de script cÃ´tÃ© serveur, appelÃ© LiveScript, pour renforcer l\'offre commerciale de serveur HTTP de Mosaic Communications Corporation. La sortie de LiveScript intervient Ã  l\'Ã©poque oÃ¹ le NCSA force Mosaic Communications Corporation Ã  changer de nom pour devenir Netscape Communications Corporation.\r\n\r\nNetscape travaille alors au dÃ©veloppement d\'une version orientÃ©e client de LiveScript. Quelques jours avant sa sortie, Netscape change le nom de LiveScript pour JavaScript. Sun Microsystems et Netscape Ã©taient partenaires, et la machine virtuelle Java de plus en plus populaire. Ce changement de nom servait les intÃ©rÃªts des deux sociÃ©tÃ©s.\r\n\r\nEn dÃ©cembre 1995, Sun et Netscape annoncent8 la sortie de JavaScript. En mars 1996, Netscape met en Å“uvre le moteur JavaScript dans son navigateur Web Netscape Navigator 2.0. Le succÃ¨s de ce navigateur contribue Ã  l\'adoption rapide de JavaScript dans le dÃ©veloppement web orientÃ© client. Microsoft rÃ©agit alors en dÃ©veloppant JScript, qu\'il inclut ensuite dans Internet Explorer 3.0 en aoÃ»t 1996 pour la sortie de son navigateur.\r\n\r\nJavaScript est dÃ©crit comme un complÃ©ment Ã  Java dans un communiquÃ© de presse8 commun de Netscape et Sun Microsystems, datÃ© du 4 dÃ©cembre 1995. Cette initiative a contribuÃ© Ã  crÃ©er auprÃ¨s du public une certaine confusion entre les deux langages, proches syntaxiquement mais pas du tout dans leurs concepts fondamentaux, et qui perdure encore de nos jours9.\r\n\r\nÂ«â€¯JavaScriptâ€¯Â» devient une marque dÃ©posÃ©e par Oracle aux Ã‰tats-Unis en mai 199710,11.\r\n\r\nNetscape soumet alors JavaScript Ã  Ecma International pour standardisation. Les travaux dÃ©butent en novembre 1996 et se terminent en juin 1997, donnant naissance Ã  la 1re Ã©dition du standard ECMA-262 qui spÃ©cifie le langage ECMAScript. Le standard est ensuite soumis Ã  l\'ISO/CEI et publiÃ© en avril 1998 en tant que standard international ISO/CEI 16262.', '2018-10-11 21:17:38', 5),
(2, 'Histoire de javascript', 'Le langage a Ã©tÃ© crÃ©Ã© en dix jours en mai 1995 pour le compte de la Netscape Communications Corporation par Brendan Eich, qui s\'est inspirÃ© de nombreux langages, notamment de Java mais en simplifiant la syntaxe pour les dÃ©butants7.\r\n\r\nBrendan Eich a initialement dÃ©veloppÃ© un langage de script cÃ´tÃ© serveur, appelÃ© LiveScript, pour renforcer l\'offre commerciale de serveur HTTP de Mosaic Communications Corporation. La sortie de LiveScript intervient Ã  l\'Ã©poque oÃ¹ le NCSA force Mosaic Communications Corporation Ã  changer de nom pour devenir Netscape Communications Corporation.\r\n\r\nNetscape travaille alors au dÃ©veloppement d\'une version orientÃ©e client de LiveScript. Quelques jours avant sa sortie, Netscape change le nom de LiveScript pour JavaScript. Sun Microsystems et Netscape Ã©taient partenaires, et la machine virtuelle Java de plus en plus populaire. Ce changement de nom servait les intÃ©rÃªts des deux sociÃ©tÃ©s.\r\n\r\nEn dÃ©cembre 1995, Sun et Netscape annoncent8 la sortie de JavaScript. En mars 1996, Netscape met en Å“uvre le moteur JavaScript dans son navigateur Web Netscape Navigator 2.0. Le succÃ¨s de ce navigateur contribue Ã  l\'adoption rapide de JavaScript dans le dÃ©veloppement web orientÃ© client. Microsoft rÃ©agit alors en dÃ©veloppant JScript, qu\'il inclut ensuite dans Internet Explorer 3.0 en aoÃ»t 1996 pour la sortie de son navigateur.\r\n\r\nJavaScript est dÃ©crit comme un complÃ©ment Ã  Java dans un communiquÃ© de presse8 commun de Netscape et Sun Microsystems, datÃ© du 4 dÃ©cembre 1995. Cette initiative a contribuÃ© Ã  crÃ©er auprÃ¨s du public une certaine confusion entre les deux langages, proches syntaxiquement mais pas du tout dans leurs concepts fondamentaux, et qui perdure encore de nos jours9.\r\n\r\nÂ«â€¯JavaScriptâ€¯Â» devient une marque dÃ©posÃ©e par Oracle aux Ã‰tats-Unis en mai 199710,11.\r\n\r\nNetscape soumet alors JavaScript Ã  Ecma International pour standardisation. Les travaux dÃ©butent en novembre 1996 et se terminent en juin 1997, donnant naissance Ã  la 1re Ã©dition du standard ECMA-262 qui spÃ©cifie le langage ECMAScript. Le standard est ensuite soumis Ã  l\'ISO/CEI et publiÃ© en avril 1998 en tant que standard international ISO/CEI 16262.', '2018-10-11 21:18:22', 5),
(3, 'Histoire de php', 'Le langage PHP a Ã©tÃ© crÃ©Ã© en 1994 par Rasmus Lerdorf pour son site web. C\'Ã©tait Ã  l\'origine une bibliothÃ¨que logicielle en C6 dont il se servait pour conserver une trace des visiteurs qui venaient consulter son CV. Au fur et Ã  mesure qu\'il ajoutait de nouvelles fonctionnalitÃ©s, Rasmus a transformÃ© la bibliothÃ¨que en une implÃ©mentation capable de communiquer avec des bases de donnÃ©es et de crÃ©er des applications dynamiques et simples pour le Web. Rasmus a alors dÃ©cidÃ©, en 1995, de publier son code, pour que tout le monde puisse l\'utiliser et en profiter7. PHP s\'appelait alors PHP/FI (pour Personal Home Page Tools/Form Interpreter). En 1997, deux Ã©tudiants, Andi Gutmans et Zeev Suraski, ont redÃ©veloppÃ© le cÅ“ur de PHP/FI. Ce travail a abouti un an plus tard Ã  la version 3 de PHP, devenu alors PHP: Hypertext Preprocessor. Peu de temps aprÃ¨s, Andi Gutmans et Zeev Suraski ont commencÃ© la rÃ©Ã©criture du moteur interne de PHP. Câ€™est ce nouveau moteur, appelÃ© Zend Engine â€” le mot Zend est la contraction de Zeev et Andi â€” qui a servi de base Ã  la version 4 de PHP8.\r\n\r\nUtilisation\r\n\r\nRÃ©partition des langages cÃ´tÃ© serveur des sites web, le 28 avril 2016.\r\nEn 2002, PHP est utilisÃ© par plus de 8 millions de sites Web Ã  travers le monde, en 2007 par plus de 20 millions10 et en 2013 par plus de 244 millions', '2018-10-11 21:21:09', 5);

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `idBook` int(11) NOT NULL,
  `nameBook` varchar(255) NOT NULL,
  `bookUrl` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`idBook`, `nameBook`, `bookUrl`, `id`) VALUES
(1, 'livre_1.pdf', 'assets/booksProjet/livre_1.pdf', 5),
(2, 'livre_2.pdf', 'assets/booksProjet/livre_2.pdf', 5);

-- --------------------------------------------------------

--
-- Structure de la table `commenter`
--

CREATE TABLE `commenter` (
  `idBlog` int(11) NOT NULL,
  `idComment` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `idBook` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commenter`
--

INSERT INTO `commenter` (`idBlog`, `idComment`, `id`, `idBook`) VALUES
(2, 53, 5, 0),
(0, 54, 5, 0),
(0, 55, 5, 1),
(0, 56, 5, 0),
(3, 57, 5, 0),
(3, 52, 5, 0),
(0, 53, 5, 0),
(0, 54, 5, 0),
(0, 55, 5, 0),
(0, 56, 5, 0),
(0, 57, 5, 0),
(0, 58, 5, 0),
(0, 59, 5, 0);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `idComment` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `idTypeComment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`idComment`, `comment`, `date`, `idTypeComment`) VALUES
(1, 'commentaire portfolio 1111', '2018-10-09 20:26:02', 1),
(2, 'Commentaire portfolio 1111', '2018-10-11 19:49:06', 1),
(3, 'Commentaire portfolio 1111', '2018-10-11 20:17:31', 1),
(4, 'Commentaire portfolio 1111', '2018-10-11 20:17:55', 1),
(5, 'Commentaire portfolio 1111', '2018-10-11 20:18:10', 1),
(6, 'Commentaire portfolio 1111', '2018-10-11 20:18:13', 1),
(7, 'commentaire portfolio 2222222', '2018-10-11 20:19:10', 1),
(8, 'commentaire article 11111', '2018-10-11 21:22:17', 2),
(9, 'commentaire article 11111', '2018-10-11 21:38:55', 2),
(10, '2 Commentaire article 11111', '2018-10-11 21:39:32', 2),
(11, '2 Commentaire article 11111', '2018-10-11 21:39:58', 2),
(12, '3 commentaire article 1111111', '2018-10-11 21:42:02', 2),
(13, '4 commentaire article 1111111', '2018-10-11 21:46:46', 2),
(14, '5 commentaire article 1111111', '2018-10-11 21:47:34', 2),
(15, '5 commentaire article 1111111', '2018-10-11 21:48:05', 2),
(16, '6 commentaire article 1111', '2018-10-11 21:48:39', 2),
(17, '6 commentaire article 1111', '2018-10-11 21:49:04', 2),
(18, '7 commentaire article 1111', '2018-10-11 21:49:31', 2),
(19, '1 commentaire article 3333', '2018-10-12 12:22:52', 2),
(20, '2 commentaire article 3333', '2018-10-12 13:48:31', 2),
(21, '3 commentaire article 3333', '2018-10-12 14:06:16', 2),
(22, '4 commentaire article 3333', '2018-10-12 14:07:42', 2),
(23, '5 commentaire article 3333', '2018-10-12 14:24:21', 2),
(24, '6 commentaire article 3333', '2018-10-12 14:24:57', 2),
(25, '7 commentaire 3333', '2018-10-12 14:25:39', 2),
(26, '8 commentaire article 3', '2018-10-12 14:30:54', 2),
(27, '9 commentaire article 3333', '2018-10-12 14:33:23', 2),
(28, '1 commentaire article 1111', '2018-10-12 14:45:30', 2),
(29, '2commentaire111', '2018-10-12 14:47:44', 2),
(30, '123456789 commentaire', '2018-10-12 14:48:21', 2),
(31, 'azertyuio 123456789', '2018-10-12 15:13:39', 2),
(32, 'azertyuio 123456789', '2018-10-12 15:37:54', 2),
(33, 'azertyuio 123456789', '2018-10-12 15:38:47', 2),
(34, 'azertyuio 123456789', '2018-10-12 15:40:52', 2),
(35, 'azertyuio 123456789', '2018-10-12 15:55:30', 2),
(36, 'azertyuio 123456789', '2018-10-12 15:56:41', 2),
(37, 'azertyuiopqsdfghjklm', '2018-10-12 16:43:32', 2),
(38, '2000wxcvbnqsdfghjklm', '2018-10-12 17:13:30', 2),
(39, '1000kjqfndkbjqnbbqgf', '2018-10-12 17:15:33', 2),
(40, '3000jhglyuflufcucf', '2018-10-12 17:17:28', 2),
(41, '80000azerrtuuioio', '2018-10-13 12:05:43', 2),
(42, '5000liygouyfyrdxtydclhblihvkyfx', '2018-10-13 12:12:17', 2),
(43, '111 livre magnifique', '2018-10-13 12:20:27', 3),
(44, '222 livre beau', '2018-10-13 12:22:56', 3),
(45, '3333 livre bonne', '2018-10-13 12:30:11', 3),
(46, '4444 commentaire livres', '2018-10-13 12:37:07', 3),
(47, 'kghkhkj', '2018-10-13 12:37:35', 1),
(48, 'nbvnbvbnv', '2018-10-13 12:38:06', 2),
(49, 'jkjhkjhjk', '2018-10-13 12:38:26', 3),
(50, '22213jbhogbiihqÃ¹oitaggihoGHIOTRGH', '2018-10-13 12:40:41', 3),
(51, '1212hhjbm', '2018-10-13 12:41:21', 2),
(52, 'mon premier commentaire', '2018-10-19 10:27:27', 2),
(53, 'mon premier commentaire portfolio', '2018-10-19 10:29:12', 1),
(54, 'mon deuxiÃ©me commentaire', '2018-10-19 10:29:55', 1),
(55, 'mon troisiÃ©me portfolio', '2018-10-19 10:39:38', 1),
(56, 'mon quatriÃ©me commentaire portfolio', '2018-10-19 10:50:18', 1),
(57, 'mon 5eme commentaire portfolio', '2018-10-21 20:00:49', 1),
(58, 'mon 5eme commentaire portfolio', '2018-10-21 20:03:41', 1),
(59, 'mon 6Ã©me commentaire portfolio', '2018-10-21 20:07:49', 1);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `idType` int(11) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`idType`, `type`) VALUES
(1, 'admin'),
(2, 'fan');

-- --------------------------------------------------------

--
-- Structure de la table `typescomments`
--

CREATE TABLE `typescomments` (
  `idTypeComment` int(11) NOT NULL,
  `typeComment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typescomments`
--

INSERT INTO `typescomments` (`idTypeComment`, `typeComment`) VALUES
(1, 'typeCommentPortfolio'),
(2, 'typeCommentBlog'),
(3, 'typeCommentBook');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pseudo` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  `idType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `pseudo`, `email`, `password`, `confirmed_at`, `idType`) VALUES
(3, 'Rachid BOUSSELHAM', 'brono', 'rachidbousselham@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2018-10-09 17:07:24', 2),
(4, 'Yassine BOUSSELHAM', 'brono1', 'yassinebousselham@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2018-10-09 17:08:31', 2),
(5, 'Hicham BOUSSELHAM', 'karizi', 'hichambousselham79@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2018-10-11 21:12:23', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`idBlog`),
  ADD KEY `articles_users_FK` (`id`);

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`idBook`),
  ADD KEY `books_users_FK` (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idComment`) USING BTREE,
  ADD KEY `comments_typesComments_FK` (`idTypeComment`) USING BTREE;

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idType`);

--
-- Index pour la table `typescomments`
--
ALTER TABLE `typescomments`
  ADD PRIMARY KEY (`idTypeComment`) USING BTREE;

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_type_FK` (`idType`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `idBlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `idBook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `typescomments`
--
ALTER TABLE `typescomments`
  MODIFY `idTypeComment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_users_FK` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_users_FK` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_typesComments_FK` FOREIGN KEY (`idTypeComment`) REFERENCES `typescomments` (`idTypeComment`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_type_FK` FOREIGN KEY (`idType`) REFERENCES `type` (`idType`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
