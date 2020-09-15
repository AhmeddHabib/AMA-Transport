-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2016 at 07:23 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gestion_transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `reserv`
--

CREATE TABLE IF NOT EXISTS `reserv` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `ligne` varchar(20) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `tel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE IF NOT EXISTS `tarif` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ligne` varchar(20) NOT NULL,
  `tarif` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ligne` (`ligne`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trans_argents`
--

CREATE TABLE IF NOT EXISTS `trans_argents` (
  `id_argent` int(20) NOT NULL AUTO_INCREMENT,
  `tel_emetteur` int(20) NOT NULL,
  `tel_recepteur` int(20) NOT NULL,
  `montant` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `num_navette` varchar(20) NOT NULL,
  PRIMARY KEY (`id_argent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `trans_argents`
--

INSERT INTO `trans_argents` (`id_argent`, `tel_emetteur`, `tel_recepteur`, `montant`, `destination`, `date`, `num_navette`) VALUES
(2, 1245, 1245, 't', 't', 't', 't'),
(3, 1, 1, '1', '1', '1', '1'),
(4, 7, 7, '7', 'Nouakchott', '7', '88888'),
(5, 1, 1, '1', 'Adrar', '1', '1'),
(6, 700, 700, '007', 'Nouakchott', '007', '007'),
(7, 333, 333, '333', 'Nouakchott', '333', '333');

-- --------------------------------------------------------

--
-- Table structure for table `trans_bagages`
--

CREATE TABLE IF NOT EXISTS `trans_bagages` (
  `id_bagage` int(20) NOT NULL AUTO_INCREMENT,
  `destination` varchar(20) NOT NULL,
  `nom_emetteur` varchar(20) NOT NULL,
  `nom_recepteur` varchar(20) NOT NULL,
  `nom_colis` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `prix` varchar(20) NOT NULL,
  `num_navette` varchar(20) NOT NULL,
  PRIMARY KEY (`id_bagage`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `trans_bagages`
--

INSERT INTO `trans_bagages` (`id_bagage`, `destination`, `nom_emetteur`, `nom_recepteur`, `nom_colis`, `date`, `prix`, `num_navette`) VALUES
(1, 'Nktt', 'Mohamed', 'Ahmed', '', '12/12/12', '4000UM', '4545AA00'),
(2, 'saab', 'ff', 'df', 'df', 'dfd', 'dfd', 'dfd'),
(3, 'fiat', 'rtert', 'erte', 'ete', 'erte', 'et', 'ert'),
(4, '1', '2', '3', '', '5', '6', '7'),
(5, '1', '2', '3', '', '5', '6', '7'),
(6, 'nouadhibou', 'jfncsikf', 'sjdfsijF', 'sjldfksa', 'djafa', 'jwfi', 'wjkEFJKD'),
(7, 'SDJVK', 'JSFK', 'SJFKLC', '', 'WJEFN', 'JKWEF', 'WJF'),
(8, 'JKFDV', 'KDFVL', 'JVFS', '', 'EKRLFD', 'RJKF', 'KWFDL'),
(9, 'nouadhibou', 'q', 'q', 'q', 'q', 'q', ''),
(10, 'nkc', '1', '2', '', '', '', ''),
(11, 'Nouadhibou', '1', '2', '3', '4', '5', '6'),
(12, 'Hodh_Chargui', '6', '5', '4', '3', '2', '1'),
(13, 'Kiffa', '999', '999', '999', '999', '999', '999');

-- --------------------------------------------------------

--
-- Table structure for table `trans_personnes`
--

CREATE TABLE IF NOT EXISTS `trans_personnes` (
  `id_passager` int(30) NOT NULL AUTO_INCREMENT,
  `nom_prenom` varchar(30) NOT NULL,
  `telephone` int(30) NOT NULL,
  `p_depart` varchar(30) NOT NULL,
  `p_arriver` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `prix_ticket` varchar(30) NOT NULL,
  `num_navette` varchar(30) NOT NULL,
  PRIMARY KEY (`id_passager`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124584 ;

--
-- Dumping data for table `trans_personnes`
--

INSERT INTO `trans_personnes` (`id_passager`, `nom_prenom`, `telephone`, `p_depart`, `p_arriver`, `date`, `prix_ticket`, `num_navette`) VALUES
(1, 'ahmed', 44444, 'nk', 'nd', '12/12/12', '5000um', '1212AA00'),
(3, 'Didi aleya', 48484848, 'Zouerat', 'Atar', '12/12/12', '5000um', '1212AA00'),
(124579, '877887', 978879, '', '', '12/12/12', '', '4578AA07'),
(124580, '7', 777, '', '', '12/12/12', '', '4578AA07'),
(124581, '1', 2, '3', '4', '5', '', '7'),
(124582, '1', 2, '3', '4', '5', '', '8'),
(124583, '1', 2, '3', '4', '5', '', '8');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
