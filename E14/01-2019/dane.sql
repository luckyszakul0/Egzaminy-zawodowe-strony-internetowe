-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Lis 2017, 10:54
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dane`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy`
--

CREATE TABLE `filmy` (
  `id` int(10) UNSIGNED NOT NULL,
  `gatunki_id` int(10) UNSIGNED NOT NULL,
  `rezyserzy_id` int(10) UNSIGNED NOT NULL,
  `tytul` text,
  `rok` year(4) DEFAULT NULL,
  `ocena` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `filmy`
--

INSERT INTO `filmy` (`id`, `gatunki_id`, `rezyserzy_id`, `tytul`, `rok`, `ocena`) VALUES
(1, 1, 1, 'Arrival', 2016, 4),
(2, 2, 2, 'Vaiana: Skarb oceanu', 2016, 5),
(3, 3, 3, 'Sully', 2016, 5),
(4, 3, 4, 'Milczenie', 2017, 6),
(5, 4, 5, 'Uciekaj!', 2017, 5),
(6, 5, 6, 'W starym, dobrym stylu', 2017, 6),
(7, 5, 7, 'Bodyguard Zawodowiec', 2017, 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gatunki`
--

CREATE TABLE `gatunki` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `gatunki`
--

INSERT INTO `gatunki` (`id`, `nazwa`) VALUES
(1, 'Sci-Fi'),
(2, 'animacja'),
(3, 'dramat'),
(4, 'horror'),
(5, 'komedia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezyserzy`
--

CREATE TABLE `rezyserzy` (
  `id` int(10) UNSIGNED NOT NULL,
  `imie` text,
  `nazwisko` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `rezyserzy`
--

INSERT INTO `rezyserzy` (`id`, `imie`, `nazwisko`) VALUES
(1, 'Denis', 'Villeneuve'),
(2, 'Ron', 'Clements'),
(3, 'Clint', 'Eastwood'),
(4, 'Martin', 'Scorseze'),
(5, 'Jordan', 'Peele'),
(6, 'Zach', 'Braff'),
(7, 'Patrick', 'Hughes'),
(8, 'Francis', 'Coppola');


--
-- Indeksy dla zrzutów tabel
--



--
-- Indexes for table `filmy`
--
ALTER TABLE `filmy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gatunki`
--
ALTER TABLE `gatunki`
  ADD PRIMARY KEY (`id`);



--
-- Indexes for table `rezyserzy`
--
ALTER TABLE `rezyserzy`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for dumped tables
--


--
-- AUTO_INCREMENT dla tabeli `filmy`
--
ALTER TABLE `filmy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `gatunki`
--
ALTER TABLE `gatunki`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `rezyserzy`
--
ALTER TABLE `rezyserzy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
