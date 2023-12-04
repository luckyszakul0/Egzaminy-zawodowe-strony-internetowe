-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Maj 2018, 10:59
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
-- Baza danych: `ee09`
--




-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `miasta`
--

CREATE TABLE `miasta` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `miasta`
--

INSERT INTO `miasta` (`id`, `nazwa`) VALUES
(1, 'Wroclaw'),
(2, 'Poznan'),
(3, 'Warszawa'),
(4, 'Gdansk'),
(5, 'Zielona Góra'),
(6, 'Lublin'),
(7, 'Tychy'),
(8, 'Katowice'),
(9, 'Opole'),
(10, 'Zakopane'),
(11, 'Kraków'),
(12, 'Szczecin'),
(13, 'Gdynia'),
(14, 'Koszalin'),
(15, 'Malbork');

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pogoda`
--

CREATE TABLE `pogoda` (
  `id` int(10) UNSIGNED NOT NULL,
  `miasta_id` int(10) UNSIGNED NOT NULL,
  `data_prognozy` date DEFAULT NULL,
  `temperatura_noc` int(11) DEFAULT NULL,
  `temperatura_dzien` int(11) DEFAULT NULL,
  `opady` int(10) UNSIGNED DEFAULT NULL,
  `cisnienie` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `pogoda`
--

INSERT INTO `pogoda` (`id`, `miasta_id`, `data_prognozy`, `temperatura_noc`, `temperatura_dzien`, `opady`, `cisnienie`) VALUES
(1, 1, '2019-05-31', 15, 23, 33, 1020),
(2, 1, '2019-05-10', 15, 23, 0, 1020),
(3, 1, '2019-05-11', 14, 22, 0, 1020),
(4, 1, '2019-05-12', 10, 14, 0, 1020),
(5, 1, '2019-05-13', 6, 15, 0, 1020),
(6, 1, '2019-05-14', 5, 11, 7, 1000),
(7, 1, '2019-05-15', 6, 11, 33, 1000),
(8, 1, '2019-05-16', 6, 15, 32, 997),
(9, 1, '2019-05-17', 12, 20, 11, 997),
(10, 2, '2019-05-11', 11, 23, 0, 1020),
(11, 2, '2019-05-12', 5, 20, 0, 1020),
(12, 2, '2019-05-13', 5, 20, 0, 1020),
(13, 2, '2019-05-14', 8, 23, 4, 1000),
(14, 2, '2019-05-15', 8, 19, 4, 1000),
(15, 2, '2019-05-16', 11, 17, 30, 995),
(16, 2, '2019-05-17', 11, 15, 30, 995),
(17, 2, '2019-05-18', 12, 15, 30, 996);

--
-- Indeksy dla zrzutów tabel
--


--
-- Indexes for table `miasta`
--
ALTER TABLE `miasta`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `pogoda`
--
ALTER TABLE `pogoda`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for dumped tables
--


--
-- AUTO_INCREMENT dla tabeli `miasta`
--
ALTER TABLE `miasta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;


--
-- AUTO_INCREMENT dla tabeli `pogoda`
--
ALTER TABLE `pogoda`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
