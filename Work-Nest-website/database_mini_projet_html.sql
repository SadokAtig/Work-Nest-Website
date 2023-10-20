-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 avr. 2023 à 17:47
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `mail` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `stat` varchar(50) NOT NULL,
  `adr` varchar(50) NOT NULL,
  `University` varchar(50) NOT NULL,
  `diplomascv` varchar(50) NOT NULL,
  `competancecv` varchar(50) NOT NULL,
  `experiencecv` int(50) NOT NULL,
  `pseudo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `cv`
--

INSERT INTO `cv` (`name`, `date`, `mail`, `phone`, `stat`, `adr`, `University`, `diplomascv`, `competancecv`, `experiencecv`, `pseudo`) VALUES
('sadok L ghaly', '2023-03-23', 'sadif@gmail.com', 50804571, 'Married', 'mornageia', 'IHEC -Tunis-', 'baccalaureate Pro', 'Réseaux et sécurité informatique:Wireshark, Nmap', 4, ''),
('atigmouhamed', '2022-08-25', 'hama@gmail.com', 52585604, 'Married', '42 zamakhchari street', 'ISG -Tunis-', 'License', 'Oracle', 6, ''),
('azizbougatfa', '2023-04-30', 'aziz@gmail.com', 52696837, 'Bachelor', '42 zamakhchari street', 'Others', 'General and technological baccalaureate', 'framework: React, Angular, Vue.js', 15, ''),
('ahemdahmedjeljli', '2023-04-27', 'ahmed@gmail.com', 58558858, 'Bachelor', 'manouba', 'Paris-Saclay -PARIS', 'Master\'s degree', 'Cloud Computing:AWS, Azure, Google Cloud', 20, 'jil'),
('khalilkhalil', '2023-04-27', 'khalil@gmail.com', 2147483647, 'Bachelor', 'denden', 'ISG -Tunis-', 'License', 'Oracle', 5, 'kal'),
('moezmoez', '2023-04-22', 'moez@gmail.com', 48645454, 'Bachelor', 'manouba', 'ISG -Tunis-', 'General and technological baccalaureate', 'Java, C#, SQL server database, C++', 6, 'zizou'),
('bachirbachir', '2023-04-22', 'bachir@gmail.com', 508045796, 'Married', 'manouba', 'Paris-Saclay -PARIS', 'Master\'s degree', 'Cloud Computing:AWS, Azure, Google Cloud', 1, 'bach'),
('yassyass', '2001-08-14', 'yass@gmail.com', 48645454, 'Married', 'manouba', 'ISG -Tunis-', 'BTS', 'Cloud Computing:AWS, Azure, Google Cloud', 2, 'yass'),
('manelmanel', '2023-04-20', 'manel@gmail.com', 57575757, 'Bachelor', 'kkdkdkd', 'ISG -Tunis-', 'BTS', 'Cloud Computing:AWS, Azure, Google Cloud', 2, 'manel'),
('mouhibmouhib', '2023-04-06', 'mouhib@gmail.com', 777778788, 'Bachelor', '555757', 'ISG -Tunis-', 'License', 'Oracle', 1, 'mouhib'),
('dhouhabouhlel', '2002-08-11', 'dhou@gmail.com', 50967841, 'Married', 'rades', 'ISG -Tunis-', 'License', 'Oracle', 18, 'dawdaw'),
('lamialamia', '2023-04-16', 'lamia@gmail.com', 52987368, 'Married', 'manouba', 'ISI -TUNIS', 'Master\'s degree', 'HTML, CSS, PHP ,SQL, JS', 0, 'lamia'),
('malikm', '2023-04-20', 'malik@gmail.com', 8188181, 'Bachelor', 'manouba', 'ISG -Tunis-', 'Master\'s degree', 'Analyse de données:R, Excel, Tableau', 30, 'malik');

-- --------------------------------------------------------

--
-- Structure de la table `offer`
--

CREATE TABLE `offer` (
  `job` varchar(50) NOT NULL,
  `diplomas` varchar(50) NOT NULL,
  `competance` varchar(50) NOT NULL,
  `experience` int(50) NOT NULL,
  `salary` int(50) NOT NULL,
  `dis` varchar(100) NOT NULL,
  `pseudo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `offer`
--

INSERT INTO `offer` (`job`, `diplomas`, `competance`, `experience`, `salary`, `dis`, `pseudo`) VALUES
('oracle', 'License', 'Oracle', 6, 3000, 'nkzefkjzfjkzf', 'boh'),
('programmer', 'General and technological baccalaureate', 'Java, C#, SQL server database, C++', 5, 8000, 'z,fnjzkfzzfzklf', 'bak'),
('programmer', 'BTS', 'Cloud Computing:AWS, Azure, Google Cloud', 2, 3000, 'sdfghjklm', 'dhou'),
('cybersecurity', 'Master\'s degree', 'Java, Python, C#, C++', 39, 3000, 'effeeffefefeef', 'dhou');

-- --------------------------------------------------------

--
-- Structure de la table `projet1`
--

CREATE TABLE `projet1` (
  `name` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `identity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `projet1`
--

INSERT INTO `projet1` (`name`, `last`, `mail`, `pseudo`, `pass`, `identity`) VALUES
('atig', 'sadok', 'atigsadek@gmail.com', 'sadok', 'sadek', 14367017),
('mejri', 'yassmine', 'yassmine@gmail.com', 'yass', 'yassmine', 14253698),
('benarfa', 'saif', 'sadif@gmail.com', 'sisko', 'sisko', 14859736),
('atig', 'mouhamed', 'hama@gmail.com', 'hama', 'hama', 14257839),
('khalil', 'khalil', 'khalil@gmail.com', 'kal', 'kal', 81881818),
('moez', 'moez', 'moez@gmail.com', 'zizou', 'zizou', 84848484),
('bachir', 'bachir', 'bachir@gmail.com', 'bach', 'bach', 5555555),
('yass', 'yass', 'yass@gmail.com', 'yass', 'yass', 1234),
('manel', 'manel', 'manel@gmail.com', 'manel', 'manel', 57575757),
('ahmed', 'ahmed', 'ahmed@gmail.com', 'ahmed', 'ahmed', 54455454),
('mouhib', 'mouhib', 'mouhib@gmail.com', 'mouhib', 'mouhib', 8888888),
('dhouha', 'bouhlel', 'bouhlel@gmail.com', 'dawdaw', 'dawdaw', 14367017),
('lamia', 'lamia', 'lamia@gmail.com', 'lamia', 'lamia', 14257839),
('malik', 'm', 'malik@gmail.com', 'malik', 'malik', 11551515);

-- --------------------------------------------------------

--
-- Structure de la table `sadok`
--

CREATE TABLE `sadok` (
  `name` varchar(50) NOT NULL,
  `full` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `code` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `sadok`
--

INSERT INTO `sadok` (`name`, `full`, `mail`, `pseudo`, `pass`, `code`) VALUES
('moon', 'AtigSadok', 'atigsadek@gmail.com', 'moon', 'Moon', 25698746),
('apple', 'benarfasaif', 'apple@gmail.com', 'apple', 'apple', 4185963),
('tesla', 'elonmask', 'tesla@gmail.com', 'tes', 'test', 17586931),
('bakchich', 'ahmedaribi', 'bakchich@gmail.com', 'bak', 'back', 78964203),
('samir', 'samir', 'sami@gmail.com', 'sam', 'samir', 89868153),
('bouha', 'belhsan', 'belha@gmail.com', 'boh', 'hfhfhfh', 18152542),
('dhou', 'dhou', 'dhou@gmail.com', 'dhou', 'dhou', 17171717);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
