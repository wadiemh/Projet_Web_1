-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2020 at 05:46 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `incidents`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `numTicket` int(11) NOT NULL,
  `idUtil` varchar(30) DEFAULT NULL,
  `IDadmin` varchar(20) DEFAULT NULL,
  `etat` varchar(150) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `reponse` text DEFAULT NULL,
  `dateOuverture` datetime DEFAULT NULL,
  `Datedetraitement` datetime DEFAULT NULL,
  `dateFermeture` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`numTicket`, `idUtil`, `IDadmin`, `etat`, `message`, `reponse`, `dateOuverture`, `Datedetraitement`, `dateFermeture`) VALUES
(1, NULL, 'boss', 'traitement', NULL, 'OK c\'est fermÃ©', '0000-00-00 00:00:00', '2020-02-02 22:02:52', '2020-02-02 22:03:43'),
(4, NULL, NULL, 'ouvert', NULL, NULL, '2020-01-22 16:14:20', NULL, NULL),
(5, NULL, NULL, 'ouvert', NULL, NULL, '2020-01-22 16:32:33', NULL, NULL),
(6, 'boss', NULL, 'ouvert', 'j\'ai un probleme', NULL, '2020-01-27 10:46:54', NULL, NULL),
(89, 'user', 'boss', 'traitement', 'OK 1', 'WHATEVER', '2020-02-03 22:49:26', '2020-02-05 19:26:49', NULL),
(90, 'user', 'boss', 'traitement', 'OK 3', NULL, '2020-02-03 22:49:33', '2020-02-05 19:32:59', NULL),
(92, 'ME', 'boss', 'traitement', 'OK 8', 'MAYBE YES', '2020-02-05 19:25:52', '2020-02-05 19:27:53', NULL),
(93, 'ME', 'boss', 'fermÃ©', 'OK 10000', 'LLKAKA', '2020-02-05 20:31:50', '2020-02-06 10:39:16', '2020-02-06 10:39:25'),
(95, 'boss', 'boss', 'fermÃ©', 'THIS IS ADMIN TICKET', 'OK', '2020-02-05 22:55:09', '2020-02-06 10:29:02', '2020-02-06 10:34:46'),
(96, 'ME', NULL, 'ouvert', 'ANOTHER TICKET 1', NULL, '2020-02-06 10:48:59', NULL, NULL),
(97, 'ME', 'boss', 'fermÃ©', 'LOl 2', 'OK YEP', '2020-02-06 10:49:13', '2020-02-06 11:57:50', '2020-02-06 11:57:56'),
(98, 'ME', 'boss', 'fermÃ©', 'lol 3', 'OK yep', '2020-02-06 10:51:40', '2020-02-06 11:57:36', '2020-02-06 11:57:44'),
(99, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:38:07', NULL, NULL),
(100, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:40:29', NULL, NULL),
(101, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:40:32', NULL, NULL),
(102, 'boss', NULL, 'ouvert', 'OK WHAT ABOUT NOW HEIN', NULL, '2020-02-07 20:41:53', NULL, NULL),
(103, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:43:02', NULL, NULL),
(104, 'boss', NULL, 'ouvert', 'What about now', NULL, '2020-02-07 20:43:11', NULL, NULL),
(105, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:44:18', NULL, NULL),
(106, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:44:32', NULL, NULL),
(107, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:44:51', NULL, NULL),
(108, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:45:26', NULL, NULL),
(109, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:45:47', NULL, NULL),
(110, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:57:16', NULL, NULL),
(111, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:57:20', NULL, NULL),
(112, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:58:00', NULL, NULL),
(113, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:58:09', NULL, NULL),
(114, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:58:20', NULL, NULL),
(115, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:58:24', NULL, NULL),
(116, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:58:30', NULL, NULL),
(117, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:58:43', NULL, NULL),
(118, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:58:46', NULL, NULL),
(119, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 20:58:49', NULL, NULL),
(120, 'boss', 'boss', 'traitement', '', NULL, '2020-02-07 22:31:40', '2020-02-07 22:48:58', NULL),
(121, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 22:31:49', NULL, NULL),
(122, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 22:32:22', NULL, NULL),
(123, 'boss', NULL, 'ouvert', '', NULL, '2020-02-07 22:32:27', NULL, NULL),
(124, 'boss', NULL, 'ouvert', 'OK here im', NULL, '2020-02-07 22:32:32', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUtil` varchar(30) NOT NULL,
  `pass` varchar(150) DEFAULT NULL,
  `droits` varchar(20) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtil`, `pass`, `droits`, `nom`, `prenom`) VALUES
('boss', '$2y$10$PlCfNR2323s5IR0X8kddJeU0eW6NOm3tt2CJqPCu5BhDKJb3Rntje', 'admin', NULL, NULL),
('boss2', '$2y$10$GAI032BKUru1Q1x0GKylN.quVPw1byUVbxu.1Cz0tsl003Mz97yxG', 'client', NULL, NULL),
('haha', '$2y$10$ZXS7v1i9WO6P.qRcbNok4.gIR8paCNnxgyzu4vj9/4eeNB7i2qnom', 'client', NULL, NULL),
('ME', '$2y$10$tuh/X75EZ80hC.SQA45lceWqpket6z4O75eXGoGlLmvqStFGjfrjC', 'client', NULL, NULL),
('MYname', '$2y$10$AjmuImp1Go14ImBhA06gnOba3UrWlykGU1KZONporhUom6ZqoGrm2', 'admin', NULL, NULL),
('some', '$2y$10$MqaAZtxcEOiAf7Aehx2PI.4BKk9uGArJ.cxOc1EtNkURkkTxhqGGW', 'client', NULL, NULL),
('some 1', '$2y$10$nFw2L0p3EdLIzgkLbQlE8.BJJghTagtBziQloLHbYifVp2uECiv3K', 'client', NULL, NULL),
('steph', '$2y$10$PuEc/7TPc0/UwYXFI9kPxueJnHKzT9v.kze4150YEkm.HYli1cOAi', 'client', NULL, NULL),
('user', '$2y$10$E2L23VyD50Ie.L6N90EmYedvEgRB/XTY0wL5xxIHaHN260OX4rQbm', 'client', NULL, NULL),
('wadia', '$2y$10$eAmM8JWepEXcp33bgFQyVO4XA3z7JARidrF7YAb9XUW.e87I93SPq', 'client', NULL, NULL),
('wadie', '$2y$10$rslsayCPxFdYEDwI40C3me9QLk7r26l9ER5vQG1PsW.k5XlL/J2km', 'client', NULL, NULL),
('who', '$2y$10$VfCM21eSm97dj4aEAAH2qOx5vT29zvwnFzA5ZkxKXRVd6r5zrNLNK', 'client', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`numTicket`),
  ADD KEY `idUtil` (`idUtil`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `numTicket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`idUtil`) REFERENCES `utilisateur` (`idUtil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
