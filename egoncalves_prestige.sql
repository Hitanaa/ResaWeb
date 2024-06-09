-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 08 juin 2024 à 22:17
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
-- Base de données : `egoncalves_prestige`
--

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lien` varchar(150) NOT NULL,
  `idMoto` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idMoto` (`idMoto`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `lien`, `idMoto`) VALUES
(1, 'Images/moto_1.png', 1),
(2, 'Images/transparent 1.png', 1),
(3, 'Images/roue_1.png', 1),
(4, 'Images/moteur_1.png', 1),
(5, 'Images/moto_2.png', 2),
(6, 'Images/transparent 2.png', 2),
(7, 'Images/roue_2.png', 2),
(8, 'Images/moteur_2.png', 2),
(9, 'Images/moto_3.png', 3),
(10, 'Images/transparent 3.png', 3),
(11, 'Images/roue_3.png', 3),
(12, 'Images/moteur_3.png', 3),
(13, 'Images/moto_4.png', 4),
(14, 'Images/transparent 4.png', 4),
(17, 'Images/roue_4.png', 4),
(18, 'Images/moteur_4.png', 4),
(21, 'Images/moto_5.png', 5),
(22, 'Images/transparent 5.png', 5),
(23, 'Images/roue_5.png', 5),
(24, 'Images/moteur_5.png', 5),
(25, 'Images/moto_6.png', 6),
(26, 'Images/transparent 6.png', 6),
(29, 'Images/roue_6.png', 6),
(30, 'Images/moteur_6.png', 6);

-- --------------------------------------------------------

--
-- Structure de la table `moto`
--

DROP TABLE IF EXISTS `moto`;
CREATE TABLE IF NOT EXISTS `moto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(150) NOT NULL,
  `prix` int NOT NULL,
  `img` varchar(200) NOT NULL,
  `description1` varchar(300) DEFAULT NULL,
  `description2` varchar(700) DEFAULT NULL,
  `description3` varchar(700) DEFAULT NULL,
  `description4` varchar(700) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `moto`
--

INSERT INTO `moto` (`id`, `titre`, `prix`, `img`, `description1`, `description2`, `description3`, `description4`) VALUES
(1, 'Diamant', 5000, 'Images/moto_1.png', 'Sa <b>silhouette blanche</b> éblouissante, rehaussée de touches <b>dorées</b>, offre une esthétique à <b>couper le souffle</b>.', 'Elle marie <b>puissance</b> et <b>élégance</b> pour une expérience de conduite <b>sans pareille</b>.', 'D\'un blanc éclatant, elles incarnent la <b>rareté</b> et l\'<b>élégance</b> à l\'état pur. Chaque rayon est une <b>œuvre d\'art</b>, chaque contour une <b>symphonie visuelle</b>. Leur beauté exceptionnelle est une invitation à l\'<b>aventure</b> sur chaque kilomètre parcouru.', 'Constitué d\'<b>or pur</b>, chaque composant, chaque détail brillant, témoigne d\'une <b>ingénierie précise</b> et d\'un <b>savoir-faire artisanal incomparable</b>. <br>Ce moteur n\'est pas seulement une <b>source de puissance</b>, mais aussi une <b>pièce de collection</b>.'),
(2, 'Saphir', 3000, 'Images/moto_2.png', 'Sa silhouette bleu <b>éclatant</b>, sublimée par des accents rouges, dégage une <b>allure</b> à la fois <b>dynamique</b> et <b>élégante</b>.', 'Elle allie <b>puissance</b> et <b>style</b> pour une expérience de conduite <b>inégalée</b>.', 'D\'un bleu profond rehaussé de touches rouges, elles incarnent l\'<b>audace</b> et la <b>passion</b>.  \r\nChaque courbe est une création <b>artistique</b>, chaque nuance une <b>symphonie</b> pour les yeux.\r\nLeur allure <b>exceptionnelle</b> inspire l\'<b>aventure</b> à chaque kilomètre parcouru.', 'Habillée d\'un bleu intense et de rouge vibrant, chaque élément, chaque touche éclatante, illustre une précision d\'<b>ingénierie</b> et un savoir-faire artisanal <b>hors pair</b>.\r\nCette moto ne se contente pas d\'être <b>performante</b> ; elle est aussi une pièce de collection <b>unique</b> en son genre.'),
(3, 'Améthyste', 3000, 'Images/moto_3.png', 'Sa silhouette rose vif, rehaussée de touches dorées, émane une <b>élégance audacieuse</b> et une <b>énergie captivante</b>.', 'Elle fusionne habilement <b>performance</b> et <b>esthétique</b> pour une expérience de conduite <b>incomparable</b>.', 'Revêtue d\'un rose saisissant agrémenté de touches dorées, elle incarne l\'<b>audace</b> et le <b>raffinement</b>. Chaque ligne est une <b>œuvre d\'art</b>, chaque détail une symphonie visuelle. Son charisme exceptionnel invite à l\'<b>évasion</b> à chaque virage de la route.', 'Sa conception <b>méticuleuse</b>, mêlant le rose éclatant et l\'or étincelant, témoigne d\'une ingénierie d\'<b>exception</b> et d\'un artisanat d\'<b>excellence</b>. Cette moto ne se distingue pas uniquement par ses <b>performances</b> ; elle est également une pièce de collection <b>unique</b>, à <b>admirer</b> et à <b>apprécier</b>.'),
(4, 'Opale', 3500, 'Images/moto_4.png', 'Sa silhouette noire intense, parsemée d\'éclaboussures multicolores, évoque une allure <b>artistique</b> et une <b>énergie vibrante</b>.', 'Elle combine harmonieusement <b>puissance</b> et <b>design</b> pour une expérience de conduite <b>exceptionnelle</b>.', 'Habillée d\'un noir profond agrémenté de touches éclatantes de toutes les couleurs, elle symbolise l\'<b>audace</b> et la <b>créativité</b>. Chaque courbe est une œuvre d\'<b>art</b>, chaque nuance une <b>explosion</b> visuelle. Son style unique inspire l\'<b>aventure</b> à chaque trajet.', 'Sa conception soignée, associant un noir élégant à des éclaboussures colorées, reflète une <b>ingénierie minutieuse</b> et un artisanat <b>remarquable</b>.\r\nCette moto se démarque non seulement par ses <b>performances</b>, mais aussi par son caractère <b>unique</b> en tant que <b>pièce de collection</b>, à <b>admirer</b> et à <b>chérir</b>.'),
(5, 'Onyx', 3500, 'Images/moto_5.png', 'Sa silhouette entièrement noire dégage une <b>élégance mystérieuse</b> et une <b>puissance discrète</b>.', 'Elle allie <b>performance</b> et <b>sobriété</b> pour une expérience de conduite <b>raffinée</b>.', 'Revêtue d\'un noir profond, elle incarne le <b>minimalisme</b> et la <b>sophistication</b>. Chaque ligne est une <b>déclaration de style</b>, chaque détail une <b>harmonie</b> visuelle. \r\nSon design <b>intemporel</b> invite à une <b>aventure</b> empreinte de <b>classe</b> à chaque virage de la route.', 'Sa conception <b>épurée</b>, entièrement noire, témoigne d\'une ingénierie de <b>précision</b> et d\'un savoir-faire <b>exceptionnel</b>. \r\nCette moto se distingue non seulement par ses performances <b>impeccables</b>, mais aussi par son allure <b>unique</b>, faisant d\'elle une pièce de collection <b>sobre</b> et <b>élégante</b>.'),
(6, 'Quartz', 2500, 'Images/moto_6.png', 'Sa silhouette entièrement blanche irradie une <b>pureté raffinée</b> et une <b>grâce intemporelle</b>.', 'Elle marie avec brio <b>performance</b> et <b>élégance</b> pour une expérience de conduite <b>exceptionnelle</b>.', 'Habillée d\'un blanc immaculé, elle symbolise la <b>simplicité</b> et le <b>raffinement</b>. Chaque courbe est une manifestation de <b>sophistication</b>, chaque détail une <b>symphonie</b> visuelle. \r\nSon design éclatant incite à l\'<b>évasion</b> avec une touche de <b>distinction</b> à chaque virage de la route.', 'Sa conception <b>immaculée</b>, entièrement blanche, reflète une <b>ingénierie méticuleuse</b> et un savoir-faire hors <b>pair</b>. \r\nCette moto se démarque non seulement par ses performances <b>exceptionnelles</b>, la rendant une pièce de <b>collection lumineuse</b> et <b>élégante</b>.');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`idMoto`) REFERENCES `moto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
