-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `osadnicy`
--

-- --------------------------------------------------------

--
--Struktura tabeli dla tabeli `uzytkownicy`

   CREATE TABLE IF NOT EXISTS `uzytkownicy` (
   `id` int(10) NOT NULL AUTO_INCREMENT,
   `login` varchar(255) NOT NULL,
   `haslo` varchar(255) NOT NULL,
   `email` varchar(255) NOT NULL,
   `rejestracja` int(10) NOT NULL,
   `logowanie` int(10) NOT NULL,
   `ip` varchar(15) NOT NULL,
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`, `email`, `drewno`, `kamien`, `zboze`, `dnipremium`)
VALUES
(1, 'admin', 'admin1', 'adam@gmail.com', 213, 5675, 342, 0)

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
