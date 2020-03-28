SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `ticket` (
  `numTicket` int(11) NOT NULL,
  `idUtil` varchar(30) DEFAULT NULL,
  `etat` varchar(150) DEFAULT NULL,
  `message` text,
  `reponse` text,
  `dateOuverture` datetime DEFAULT NULL,
  `dateFermeture` datetime DEFAULT NULL,
  `idAdmin` varchar(20) DEFAULT NULL,
  `datedetraitement` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `utilisateur` (
  `idUtil` varchar(30) NOT NULL,
  `pass` varchar(150) DEFAULT NULL,
  `droits` varchar(20) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `ticket`
  ADD PRIMARY KEY (`numTicket`),
  ADD KEY `idUtil` (`idUtil`),
  ADD KEY `idAdmin` (`idAdmin`);

ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtil`);


ALTER TABLE `ticket`
  MODIFY `numTicket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`idUtil`) REFERENCES `utilisateur` (`idUtil`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`idAdmin`) REFERENCES `utilisateur` (`idUtil`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
