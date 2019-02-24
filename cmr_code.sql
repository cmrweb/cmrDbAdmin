-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 24 fév. 2019 à 00:58
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cmr_code`
--

-- --------------------------------------------------------

--
-- Structure de la table `code`
--

DROP TABLE IF EXISTS `code`;
CREATE TABLE IF NOT EXISTS `code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `code`
--

INSERT INTO `code` (`id`, `name`) VALUES
(1, 'SELECT * FROM var'),
(2, 'SELECT var FROM var WHERE var '),
(3, 'SELECT var FROM var WHERE var LIKE var'),
(4, 'SELECT var FROM var INNER JOIN var WHERE var '),
(5, 'SELECT var FROM var LEFT JOIN var WHERE  var'),
(6, 'SELECT var FROM var RIGHT JOIN var WHERE var '),
(7, 'SELECT var FROM var INNER JOIN var ON  '),
(8, 'SELECT var FROM var LEFT JOIN var ON  var'),
(9, 'SELECT var FROM var RIGHT JOIN var ON var'),
(10, 'INSERT INTO var (var) VALUES (var),(var),(var)'),
(11, 'INSERT INTO var (var) SELECT var FROM var WHERE var AND var'),
(12, 'UPDATE var SET var'),
(13, 'UPDATE var SET var WHERE var=var'),
(14, 'DELETE FROM var'),
(15, 'DELETE FROM var  WHERE var'),
(16, 'CREATE DATABASE var'),
(17, 'DROP DATABASE var'),
(18, 'CREATE TABLE var'),
(19, 'DROP TABLE var'),
(20, 'ALTER TABLE var'),
(21, 'ALTER TABLE  var  TO  var '),
(22, 'TRUNCATE TABLE var '),
(23, 'CREATE TABLE var '),
(24, 'DROP TABLE IF EXISTS var ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
