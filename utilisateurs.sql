-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 15 déc. 2020 à 14:16
-- Version du serveur :  10.1.47-MariaDB-0+deb9u1
-- Version de PHP : 7.0.33-0+deb9u10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `utilisateurs`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `commantaire` varchar(500) NOT NULL,
  `idjeux` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Game`
--

CREATE TABLE `Game` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `Affiche` varchar(100) NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Game`
--

INSERT INTO `Game` (`id`, `nom`, `Affiche`, `texte`) VALUES
(1, 'thelast', 'Affiche', 'Le jeu suit Ellie, la fille qui était le protagoniste secondaire et le compagnon du personnage du joueur dans The Last of Us. Le jeu se déroule cinq ans après la fin de l\'original. Ellie (qui a maintenant 19 ans) et Joel ont survécu et vivent à Jackson, Wyoming, où Ellie sort avec une autre fille, Dina. Cependant, les personnages doivent faire face au culte pervers appelé les Séraphites, qui essaient de sacrifier leurs anciens membres. Une question de vengeance oblige Ellie et ses amis à entreprendre un voyage à Seattle, Washington, pour tuer leurs ennemis. Le thème principal de l\'intrigue est qu\'Ellie traite ses problèmes de haine.'),
(2, 'Fallout', 'Affiche', 'Octobre 2077 dans une petite banlieue de Boston. La pelouse est parfaite, les robots ramassent la moindre feuille que l’automne précipite vers le sol. Je me prépare à une journée tranquille dans cette amérique aseptisée où le communisme n’a pas la moindre chance de poser le pied. J’ai un fils de trois mois et une femme aimante. Je m’ennuie comme un rat mort et je sens déjà poindre le désespoir d’une vie morne qui me fera sombrer dans l’alcool et le buffout. Cinq minutes plus tard, les bombes atomiques pleuvent sur les Etats-Unis : une catastrophe, un drame, la fin du monde… mais pour moi, c’est une libération, le début d’une vraie vie.'),
(5, 'Watchdog', 'Affiche', 'Watch Dogs 2 est un jeu d\'aventure en monde ouvert faisant suite aux événements du premier épisode. Ce nouvel opus de la franchise nous entraîne au cœur de la ville de San Francisco dans la peau du nouveau héros Marcus Holloway, un jeune hacker surdoué victime des algorithmes prédictifs du ctOS 2.0 qui l’accusent d’un crime qu’il n’a pas commis. Dans sa quête de vérité, Marcus pourra hacker les infrastructures de la ville ainsi que les personnes qui sont connectées au réseau.'),
(6, 'call', 'Affiche', 'Call of Duty Modern Warfare est un jeu de tir à la première personne. Le joueur incarne tour à tour un soldat du SAS ou un combattant de la liberté d\'un pays du Proche-Orient. Le jeu adopte un ton sombre et mature, pour plus de réalisme.'),
(7, 'RedDead', 'Affiche', 'Suite du précédent volet multi récompensé, Red Dead Redemption II nous permet de nous replonger sur PS4 dans une ambiance western synonyme de vastes espaces sauvages et de villes malfamées. L\'histoire se déroule en 1899, avant le premier Red Dead Redemption, au moment où Arthur Morgan doit fuir avec sa bande à la suite d\'un braquage raté.'),
(8, 'division', 'Affiche', 'Tom Clancy\'s The Division est un jeu d\'action en ligne où le joueur est au cœur d\'un univers post-apocalyptique. Ce dernier doit jongler entre coopération, stratégie et technologie pour survivre dans un environnement hostile. Partez en compagnie de la Division pour sauver Washington D.C. de l\'effondrement.'),
(9, 'gta', 'Affiche', 'Jeu d\'action-aventure en monde ouvert, Grand Theft Auto (GTA) V vous place dans la peau de trois personnages inédits : Michael, Trevor et Franklin. Ces derniers ont élu domicile à Los Santos, ville de la région de San Andreas. Braquages et missions font partie du quotidien du joueur qui pourra également cohabiter avec 15 autres utilisateurs dans cet univers persistant s\'il joue sur PS3/Xbox 360 ou 29 s\'il joue sur PS4/Xbox One/PC.'),
(10, 'uncharted', 'Affiche', 'Quatrième opus de la série de jeu d\'action/aventure à succès de Naughty Dog, Uncharted 4 A Thief\'s End vous permet d\'incarner Nathan Drake pour la première fois sur PS4. Le célèbre explorateur devra révéler le complot qui se cache derrière un légendaire trésor de pirates'),
(11, 'GodofWar', 'Affiche', 'Dans ce nouvel épisode de God Of War, le héros évoluera dans un monde aux inspirations nordiques, très forestier et montagneux. Dans ce beat-them-all, un enfant accompagnera le héros principal, pouvant apprendre des actions du joueur, et même gagner de l\'expérience.');

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `id` int(50) NOT NULL,
  `MDP` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `Admin` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `User`
--

INSERT INTO `User` (`id`, `MDP`, `nom`, `Admin`) VALUES
(21, 'derrierevous', 'Louix', 'false'),
(22, '963', 'Woulfty', 'false'),
(23, '123', 'leo', 'true'),
(24, '456', 'lolo', 'false'),
(25, '789', 'titouantdu29', 'false'),
(26, 'vusbat-Roqniz-4kebma', 'Julien', 'false'),
(27, '789', 'lol', 'false');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commantaire` (`commantaire`(191),`idjeux`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idjeux` (`idjeux`);

--
-- Index pour la table `Game`
--
ALTER TABLE `Game`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nom` (`nom`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nom` (`nom`),
  ADD KEY `MDP` (`MDP`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Game`
--
ALTER TABLE `Game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `User` (`id`),
  ADD CONSTRAINT `commentaires_ibfk_2` FOREIGN KEY (`idjeux`) REFERENCES `Game` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
