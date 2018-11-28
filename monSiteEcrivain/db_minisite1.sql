-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 28 nov. 2018 à 17:20
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
(1, 'La relation Homme-Nature', 'Par ces mots, Andy Fisher définit le sujet de l’écopsychologie : la relation homme-nature. Comme toute relation, la relation homme-nature nécessite une démarche dialogique, en ce sens qu’il est nécessaire de prendre en compte deux éléments disjoints, opposés et complémentaires : l’humain et le naturel(2). Par ailleurs, la relation homme-nature implique une double orientation en raison des deux versants, la nature à l’extérieur de soi et la nature à l’intérieur de soi, en sachant que l’une et l’autre interfèrent constamment et se fécondent mutuellement.<br><br>\r\n\r\nMais, qu’est-ce au juste que la nature ? Et qu’est-ce qu’une relation ?<br><br>\r\n\r\n \r\n\r\nQu’est-ce que la nature ?<br>\r\nQuand nous abordons le concept « nature », il faut savoir que nous nous situons alors selon une vision occidentale du monde qui oppose la nature aux hommes et aux œuvres humaines, autrement dit la nature à la culture. Dans d’autres sociétés, celles des peuples premiers, ce concept n’existe pas car plantes et animaux sont inclus dans la sphère globale dont eux-mêmes font partie.<br><br>\r\n« Le concept de nature est une invention de l’Occident(3). »<br><br>\r\n\r\n \r\n\r\n« Bien des sociétés dites “primitives” nous invitent à un tel dépassement, elles qui n’ont jamais songé que les frontières de l’humanité s’arrêtaient aux portes de l’espèce humaine, elles qui n’hésitent pas à inviter dans le concert de leur vie sociale les plus modestes plantes, les plus insignifiants des animaux(4). »', '2018-10-11 21:17:38', 5),
(2, '        Bruno Le Maire défend la place de Renault dans l’alliance Renault-Nissan-Mitsubishi', 'Une semaine après l’arrestation au Japon de Carlos Ghosn, Bruno Le Maire s’est opposé, mardi 27 novembre, à tout changement dans la gouvernance de l’alliance Renault-Nissan-Mitsubishi et « dans l’équilibre » des pouvoirs. Il estime notamment que le directeur général de Renault « doit rester le président de l’alliance » Renault-Nissan-Mitsubishi.\r\n\r\n« Dans la gouvernance, il est prévu que le directeur général de Renault soit le président de l’alliance. Cette règle ne doit pas changer », a déclaré le ministre sur LCI, en réponse à une question sur un possible bouleversement des équilibres au sein de l’alliance Renault-Nissan-Mitsubishi après l’interpellation du PDG de Renault pour des soupçons de malversations financières. « Le directeur général de Renault [actuellement Thierry Bolloré, directeur exécutif par intérim depuis l’interpellation de M. Ghosn] doit rester le président de l’alliance », a martelé M. Le Maire, alors que M. Ghosn a été déchu de ses fonctions de président de Nissan et Mitsubishi.<br>\r\n« Bon équilibre »<br>\r\nInterrogé sur le partage des pouvoirs au sein de l’alliance et une éventuelle utilisation par les Japonais des soupçons pesant sur M. Ghosn pour obtenir un rééquilibrage en leur faveur au sein de l’alliance, M. Le Maire a adopté une position ferme.', '2018-10-11 21:18:22', 5),
(3, '                        La nature subviendra de plus en plus difficilement aux besoins humains', 'Selon 23 scientifiques internationaux ayant traité statistiquement 2,38 millions de rapports sur l’état de la faune et la flore terrestres, la diversité des espèces a en effet baissé de 15,4 % sur plus de la moitié des terres émergées. Pour être soutenable, la perte de biodiversité doit rester inférieure à 10 %, selon une autre étude publiée dans Science en 2015. « Cette perte de biodiversité, si elle reste incontrôlée, sapera les efforts vers un développement durable de long terme », concluent-ils.\r\nTim Newbold, chercheur spécialisé dans l’impact humain sur la biodiversité au sein du University College of London, a dirigé ces recherches. Il est inquiet : « Les fonctions écosystémiques sont gravement menacées par cette disparition des espèces. Dans de nombreuses zones, l’intervention humaine devra bientôt remplacer les services rendus par la nature. »\r\nPollinisation, épuration des eaux, production d’oxygène…\r\nCes services écosystémiques sont aussi nombreux que vitaux. La pollinisation, la production de nutriments nécessaires à la croissance des plantes, l’épuration naturelle des eaux ou encore la production d’oxygène sont pourtant menacées par la baisse de la biodiversité des écosystèmes. Le directeur de recherches doute de la capacité de l’être humain à imiter la nature grâce aux innovations technologiques : « Je ne pense pas que quiconque puisse aujourd’hui affirmer que l’être humain en est capable. »', '2018-10-11 21:21:09', 5);

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
(2, 'livre_2.pdf', 'assets/booksProjet/livre_2.pdf', 5),
(3, 'livre_3.pdf', 'assets/booksProjet/livre_3.pdf', 5),
(4, 'Elle et lui.pdf', 'assets/booksProjet/Elle et lui.pdf', 5),
(5, 'Germinal.pdf', 'assets/booksProjet/Germinal.pdf', 5),
(6, 'Le prince.pdf', 'assets/booksProjet/Le prince.pdf', 5),
(7, 'Les misérables.pdf', 'assets/booksProjet/Les misérables.pdf', 5),
(8, 'L\'etrangair.pdf', 'assets/booksProjet/L\'etrangair.pdf', 5),
(9, 'Elle et lui.pdf', 'assets/booksProjet/Elle et lui.pdf', 5);

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
(0, 59, 5, 0),
(0, 60, 5, 0),
(0, 61, 5, 0),
(0, 62, 5, 0),
(0, 63, 5, 0),
(0, 64, 5, 0),
(0, 65, 5, 0),
(3, 66, 5, 0),
(3, 67, 5, 0),
(2, 68, 5, 0),
(2, 69, 5, 0),
(2, 70, 5, 0),
(1, 71, 5, 0),
(1, 72, 5, 0),
(1, 73, 5, 0),
(3, 74, 5, 0),
(2, 75, 5, 0),
(1, 76, 5, 0),
(1, 77, 5, 0),
(0, 78, 5, 1),
(0, 79, 5, 2),
(3, 79, 5, 0),
(0, 80, 5, 0),
(3, 81, 5, 0),
(2, 82, 5, 0),
(0, 83, 5, 0),
(0, 84, 5, 0),
(0, 85, 5, 3),
(3, 86, 5, 0),
(0, 87, 5, 4),
(3, 88, 5, 0),
(0, 89, 5, 2),
(0, 90, 5, 4),
(0, 91, 5, 1),
(0, 92, 5, 5),
(0, 93, 5, 2),
(0, 94, 5, 2),
(2, 95, 5, 0),
(1, 96, 5, 0),
(3, 97, 5, 0),
(3, 98, 5, 0),
(3, 99, 5, 0),
(3, 100, 5, 0),
(3, 101, 5, 0),
(3, 102, 5, 0),
(3, 103, 5, 0),
(3, 104, 5, 0),
(3, 105, 5, 0),
(3, 106, 5, 0),
(3, 107, 5, 0),
(3, 108, 5, 0),
(3, 109, 5, 0),
(0, 110, 5, 0),
(2, 111, 5, 0),
(0, 112, 5, 4),
(3, 112, 5, 0),
(3, 113, 5, 0),
(3, 114, 3, 0),
(0, 115, 3, 0),
(0, 116, 5, 4),
(0, 117, 5, 0),
(0, 118, 5, 0),
(0, 119, 5, 0),
(0, 120, 5, 0),
(2, 121, 5, 0),
(1, 122, 5, 0),
(1, 123, 5, 0),
(0, 124, 5, 7);

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
(112, 'tu m\'a bien aidé pour ma disserte je te remercie beaucoup :D', '2018-11-27 22:05:23', 2),
(113, 'Tu m\'as bien aidée et j\'ai eut une bonne note au bac blanc alors que je ne suis pas très forts en philo', '2018-11-27 22:05:59', 2),
(114, 'trop Cool. aider sur ce sujet\"le monde est devenus un village planétaire \"', '2018-11-27 22:06:30', 2),
(115, 'J\'aime beaucoup vos article', '2018-11-27 23:00:05', 1),
(116, 'J\'aime beaucoup ce livre :)', '2018-11-27 23:10:50', 3),
(117, 'Trop Cool. aider sur ce sujet\"le monde est devenus un village planétaire \"', '2018-11-27 23:25:04', 1),
(118, 'Pour moi c\'est bien mais ma la 3ieme partie qui pose problème car fallait développer l\'homme comme un être bioculturél c\'est à dire à la fois naturel et culturel pour mieux faire la synthèse', '2018-11-27 23:28:09', 1),
(119, 'Merci tu m\'as vraiment aidé en plus rien n\'a dire je suis sans mots', '2018-11-27 23:29:05', 1),
(120, 'J\'aime beaucoup vos article', '2018-11-27 23:30:40', 1),
(121, 'Soutien à vous', '2018-11-28 10:47:07', 2),
(122, 'Jolie article', '2018-11-28 16:15:29', 2),
(123, 'Grand merci à vous pour ces idées ', '2018-11-28 16:16:13', 2),
(124, 'Bravo à vous, j\'ai aimé beaucoup ce livre', '2018-11-28 16:28:39', 3);

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
(5, 'Hicham BOUSSELHAM', 'karizi', 'hichambousselham79@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2018-10-11 21:12:23', 1),
(6, 'samir BOUSSELHAM', 'karizi1', 'samir@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2018-11-21 21:36:54', 2),
(7, 'moha bousselham', 'karizi3', 'mohamed@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2018-11-21 21:38:30', 2),
(8, 'Bouchaib BOUSSELHAM', 'karizi4', 'bouchaib@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2018-11-21 22:46:24', 2),
(9, 'kadi', 'kadi', 'kadi@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2018-11-21 22:50:14', 2);

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
  MODIFY `idBook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
