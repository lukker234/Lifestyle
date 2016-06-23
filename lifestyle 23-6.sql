-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 23 jun 2016 om 10:38
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `lifestyle`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fingercheck`
--

CREATE TABLE IF NOT EXISTS `fingercheck` (
  `fingerCheckId` int(11) NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  PRIMARY KEY (`fingerCheckId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden geëxporteerd voor tabel `fingercheck`
--

INSERT INTO `fingercheck` (`fingerCheckId`, `value`) VALUES
(1, 'false'),
(2, 'Daniel Richtersz');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `questionanswer`
--

CREATE TABLE IF NOT EXISTS `questionanswer` (
  `questionAnswerId` int(11) NOT NULL AUTO_INCREMENT,
  `answer1` text NOT NULL,
  `answer2` text NOT NULL,
  `answer3` text NOT NULL,
  `answer4` text NOT NULL,
  `answer5` text NOT NULL,
  PRIMARY KEY (`questionAnswerId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `city` text NOT NULL,
  `political` text NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`userId`, `firstname`, `lastname`, `gender`, `city`, `political`) VALUES
(7, 'asdf', 'nogiets', 'male', 'nl_NL', 'null'),
(8, 'Danielle', 'nogiets', 'male', 'nl_NL', 'null');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
