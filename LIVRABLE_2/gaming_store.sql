-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 16 nov. 2022 à 11:08
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gaming_store`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'simo', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `ID_CAT` int(11) NOT NULL,
  `LIBELLE_CAT` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`ID_CAT`, `LIBELLE_CAT`) VALUES
(1, 'Computers'),
(2, 'Keyboards'),
(3, 'Mouses');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `LIBELLE` varchar(100) NOT NULL,
  `QUANTITE` int(11) NOT NULL,
  `PRIX` float NOT NULL,
  `IMAGE` varchar(255) NOT NULL,
  `ID_CAT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`ID`, `LIBELLE`, `QUANTITE`, `PRIX`, `IMAGE`, `ID_CAT`) VALUES
(1, 'TEST', 25, 500, 'computer1.jpg', 1),
(2, 'Computer2', 12, 600, 'computer2.webp', 2),
(3, 'Computer3', 15, 400, 'computer3.jpg', 3),
(5, 'Keyboard1', 35, 40, 'keyboard1.jpg', 1),
(6, 'Keyboard2', 45, 45, 'keyboard2.jpg', 2),
(7, 'Keyboard3', 25, 32, 'keyboard3.jpg', 3),
(9, 'Mouse1', 47, 20, 'mouse1.jpg', 1),
(10, 'Mouse2', 57, 17, 'mouse2.jpeg', 2),
(11, 'Mouse3', 60, 24, 'mouse3.jpg', 3),
(13, 'Speaker1', 31, 70, 'speaker1.jpg', 1),
(14, 'Speaker2', 37, 52, 'speaker2.jpg', 2),
(15, 'Speaker3', 87, 95, 'speaker3.jpg', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_CAT`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `product_ibfk_1` (`ID_CAT`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `ID_CAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ID_CAT`) REFERENCES `category` (`ID_CAT`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
