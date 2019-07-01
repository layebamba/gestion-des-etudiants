-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 01 Juillet 2019 à 08:51
-- Version du serveur :  5.7.26-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `UNIVERSITE`
--

-- --------------------------------------------------------

--
-- Structure de la table `BATIMENT`
--

CREATE TABLE `BATIMENT` (
  `ID_BAT` int(11) NOT NULL,
  `NOM` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `BATIMENT`
--

INSERT INTO `BATIMENT` (`ID_BAT`, `NOM`) VALUES
(1, 'batimentA'),
(2, 'batiment B'),
(3, 'batiment C'),
(4, 'batiment G');

-- --------------------------------------------------------

--
-- Structure de la table `BOURSIER`
--

CREATE TABLE `BOURSIER` (
  `ID_B` int(11) NOT NULL,
  `ID_T` int(11) NOT NULL,
  `ID_E` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `BOURSIER`
--

INSERT INTO `BOURSIER` (`ID_B`, `ID_T`, `ID_E`) VALUES
(1, 1, 2),
(7, 1, 31),
(2, 2, 1),
(3, 2, 24),
(4, 2, 25),
(5, 2, 26),
(6, 2, 27);

-- --------------------------------------------------------

--
-- Structure de la table `CHAMBRE`
--

CREATE TABLE `CHAMBRE` (
  `ID_C` int(11) NOT NULL,
  `NUMERO` int(11) NOT NULL,
  `ID_BAT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `CHAMBRE`
--

INSERT INTO `CHAMBRE` (`ID_C`, `NUMERO`, `ID_BAT`) VALUES
(1, 5, 2),
(2, 1, 2),
(3, 4, 2),
(4, 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `ETUDIANT`
--

CREATE TABLE `ETUDIANT` (
  `ID_E` int(11) NOT NULL,
  `MATRICULE` varchar(11) NOT NULL,
  `NOM` varchar(25) NOT NULL,
  `PRENOM` varchar(25) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `TELEPHONE` int(11) NOT NULL,
  `DATENAISSANCE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ETUDIANT`
--

INSERT INTO `ETUDIANT` (`ID_E`, `MATRICULE`, `NOM`, `PRENOM`, `EMAIL`, `TELEPHONE`, `DATENAISSANCE`) VALUES
(1, 'AA01', 'fall', 'mbacke', 'fall@gmail.com', 778501230, '2019-06-02'),
(2, 'AB1', 'loum', 'modou', 'modou12@hotmail.com', 781204563, '2019-06-11'),
(3, 'A004', 'beye', 'dame', 'beye@gmail.com', 778541201, '2019-06-04'),
(9, 'AZY1', 'saye', 'dia', 'dia@gmail.com', 775210145, '1995-01-10'),
(13, '5784210', 'diop', 'babacar', 'diakhite@live.fr', 772025648, '2019-05-31'),
(14, 'ACD', 'diop', 'mbacke', 'diouffa@hotmail.fr', 778524123, '2019-06-05'),
(15, 'ACD', 'diop', 'mbacke', 'diouffa@hotmail.fr', 778524123, '2019-06-05'),
(16, 'ACD', 'diop', 'mbacke', 'diouffa@hotmail.fr', 778524123, '2019-06-05'),
(17, '5412AQ', 'diop', 'abdoulaye', 'diakhite@live.fr', 779127661, '2019-06-12'),
(18, '5412AQ', 'diop', 'abdoulaye', 'diakhite@live.fr', 779127661, '2019-06-12'),
(19, 'qsdfg7', 'popo', 'pipi', 'popo@gm.ml', 741258963, '2017-05-11'),
(20, 'qsdfg7', 'popo', 'pipi', 'popo@gm.ml', 741258963, '2017-05-11'),
(21, 'qsdfg7', 'popo', 'pipi', 'popo@gm.ml', 741258963, '2017-05-11'),
(22, 'qsdfg7', 'popo', 'pipi', 'popo@gm.ml', 741258963, '2017-05-11'),
(23, 'qsdfg7', 'popo', 'pipi', 'popo@gm.ml', 741258963, '2017-05-11'),
(24, 'qsdfg7', 'popo', 'pipi', 'popo@gm.ml', 741258963, '2017-05-11'),
(25, 'QAZc', 'diop', 'babacar', 'roky@gmail.com', 778524123, '2019-06-05'),
(26, 'QAZa', 'ngom', 'faye', 'faye12@hotmail.fr', 779127661, '2019-06-06'),
(27, 'QAZa', 'ngom', 'faye', 'faye12@hotmail.fr', 779127661, '2019-06-06'),
(28, 'QAZ', 'diop', 'bane', 'diouffa@hotmail.fr', 778524123, '2019-06-27'),
(29, 'QAZA', 'kane', 'oumar', 'mlkjhgf@gmail.com', 779127661, '2019-01-28'),
(30, 'QAA', 'ndao', 'khady', 'ndao@hotmail.com', 772025648, '2019-06-12'),
(31, 'ML', 'lam', 'lamine', 'lamine@lamine.com', 774520145, '2019-06-12'),
(32, 'AMQ', 'dieye', 'maty', 'maye@gmail.com', 779127661, '2019-05-28'),
(33, 'rez', 'gaye', 'gay', 'roky@gmail.com', 772025648, '2019-06-05'),
(34, 'AU8', 'diop', 'abdoulaye', 'diakhite@live.fr', 778524123, '2019-06-19'),
(35, 'AU8', 'diop', 'abdoulaye', 'diakhite@live.fr', 778524123, '2019-06-19'),
(36, 'AU8', 'diop', 'abdoulaye', 'diakhite@live.fr', 778524123, '2019-06-19'),
(37, 'AU80', 'diop', 'ghjk', 'diouffa@hotmail.fr', 779127661, '2019-06-05'),
(38, '578', 'ba', 'rokhy', 'diouffa@hotmail.fr', 778541203, '2019-06-12'),
(39, 'QAZs', 'diop', 'bane1', 'roky@gmail.com', 771457896, '2019-05-29'),
(40, 'QAZs', 'diop', 'bane1', 'roky@gmail.com', 771457896, '2019-05-29'),
(41, 'QAZs', 'diop', 'bane1', 'roky@gmail.com', 771457896, '2019-05-29'),
(42, 'QAZs', 'diop', 'bane1', 'roky@gmail.com', 771457896, '2019-05-29'),
(43, '000', 'leye', 'souleye', 'jull@jull.com', 770012541, '2019-05-29'),
(44, '000', 'leye', 'souleye', 'jull@jull.com', 770012541, '2019-05-29'),
(45, '000', 'leye', 'souleye', 'jull@jull.com', 770012541, '2019-05-29'),
(46, '000', 'leye', 'souleye', 'jull@jull.com', 770012541, '2019-05-29'),
(47, '000', 'leye', 'souleye', 'jull@jull.com', 770012541, '2019-05-29'),
(48, 'AU87', 'diop', 'mbaye', 'diakhite@live.fr', 778541203, '2019-06-12'),
(49, 'QAZN', 'dabo', 'baba', 'baba@gmail.com', 778524123, '2019-06-13');

-- --------------------------------------------------------

--
-- Structure de la table `LOGER`
--

CREATE TABLE `LOGER` (
  `ID_L` int(11) NOT NULL,
  `ID_B` int(11) NOT NULL,
  `ID_C` int(11) NOT NULL,
  `ID_EB` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `LOGER`
--

INSERT INTO `LOGER` (`ID_L`, `ID_B`, `ID_C`, `ID_EB`) VALUES
(1, 2, 1, 2),
(2, 3, 2, 1),
(3, 7, 3, 24),
(4, 7, 1, 25);

-- --------------------------------------------------------

--
-- Structure de la table `NONBOURSIER`
--

CREATE TABLE `NONBOURSIER` (
  `ID_NB` int(11) NOT NULL,
  `ID_E` int(11) NOT NULL,
  `ADRESSE` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `NONBOURSIER`
--

INSERT INTO `NONBOURSIER` (`ID_NB`, `ID_E`, `ADRESSE`) VALUES
(1, 3, 'pikine rue10'),
(2, 18, 'gwaye'),
(3, 33, 'pikine');

-- --------------------------------------------------------

--
-- Structure de la table `TYPE`
--

CREATE TABLE `TYPE` (
  `ID_T` int(11) NOT NULL,
  `LIBELLE` varchar(15) NOT NULL,
  `MONTANT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `TYPE`
--

INSERT INTO `TYPE` (`ID_T`, `LIBELLE`, `MONTANT`) VALUES
(1, 'bourse entiere', 40000),
(2, 'demi-bourse', 20000);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `BATIMENT`
--
ALTER TABLE `BATIMENT`
  ADD PRIMARY KEY (`ID_BAT`);

--
-- Index pour la table `BOURSIER`
--
ALTER TABLE `BOURSIER`
  ADD PRIMARY KEY (`ID_B`,`ID_E`),
  ADD KEY `ID_T` (`ID_T`),
  ADD KEY `ID_E` (`ID_E`);

--
-- Index pour la table `CHAMBRE`
--
ALTER TABLE `CHAMBRE`
  ADD PRIMARY KEY (`ID_C`),
  ADD KEY `ID_BAT` (`ID_BAT`);

--
-- Index pour la table `ETUDIANT`
--
ALTER TABLE `ETUDIANT`
  ADD PRIMARY KEY (`ID_E`);

--
-- Index pour la table `LOGER`
--
ALTER TABLE `LOGER`
  ADD PRIMARY KEY (`ID_L`,`ID_B`),
  ADD KEY `ID_C` (`ID_C`),
  ADD KEY `ID_B` (`ID_B`),
  ADD KEY `ID_EB` (`ID_EB`);

--
-- Index pour la table `NONBOURSIER`
--
ALTER TABLE `NONBOURSIER`
  ADD PRIMARY KEY (`ID_NB`,`ID_E`),
  ADD KEY `ID_E` (`ID_E`);

--
-- Index pour la table `TYPE`
--
ALTER TABLE `TYPE`
  ADD PRIMARY KEY (`ID_T`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `BATIMENT`
--
ALTER TABLE `BATIMENT`
  MODIFY `ID_BAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `BOURSIER`
--
ALTER TABLE `BOURSIER`
  MODIFY `ID_B` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `CHAMBRE`
--
ALTER TABLE `CHAMBRE`
  MODIFY `ID_C` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `ETUDIANT`
--
ALTER TABLE `ETUDIANT`
  MODIFY `ID_E` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT pour la table `LOGER`
--
ALTER TABLE `LOGER`
  MODIFY `ID_L` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `NONBOURSIER`
--
ALTER TABLE `NONBOURSIER`
  MODIFY `ID_NB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `TYPE`
--
ALTER TABLE `TYPE`
  MODIFY `ID_T` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `BOURSIER`
--
ALTER TABLE `BOURSIER`
  ADD CONSTRAINT `BOURSIER_ibfk_1` FOREIGN KEY (`ID_E`) REFERENCES `ETUDIANT` (`ID_E`),
  ADD CONSTRAINT `BOURSIER_ibfk_2` FOREIGN KEY (`ID_T`) REFERENCES `TYPE` (`ID_T`);

--
-- Contraintes pour la table `CHAMBRE`
--
ALTER TABLE `CHAMBRE`
  ADD CONSTRAINT `CHAMBRE_ibfk_2` FOREIGN KEY (`ID_BAT`) REFERENCES `BATIMENT` (`ID_BAT`);

--
-- Contraintes pour la table `LOGER`
--
ALTER TABLE `LOGER`
  ADD CONSTRAINT `LOGER_ibfk_2` FOREIGN KEY (`ID_C`) REFERENCES `CHAMBRE` (`ID_C`),
  ADD CONSTRAINT `LOGER_ibfk_3` FOREIGN KEY (`ID_EB`) REFERENCES `BOURSIER` (`ID_E`);

--
-- Contraintes pour la table `NONBOURSIER`
--
ALTER TABLE `NONBOURSIER`
  ADD CONSTRAINT `NONBOURSIER_ibfk_1` FOREIGN KEY (`ID_E`) REFERENCES `ETUDIANT` (`ID_E`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
