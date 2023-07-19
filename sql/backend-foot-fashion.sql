-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 jul 2023 om 04:47
-- Serverversie: 10.4.28-MariaDB
-- PHP-versie: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backend-foot-fashion`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `schoenen`
--

CREATE TABLE `schoenen` (
  `id` int(11) NOT NULL,
  `benaming` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `afbeelding` varchar(100) NOT NULL,
  `uitverkocht` tinyint(1) NOT NULL,
  `prijs` int(11) NOT NULL,
  `typeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `schoenen`
--

INSERT INTO `schoenen` (`id`, `benaming`, `merk`, `afbeelding`, `uitverkocht`, `prijs`, `typeId`) VALUES
(1, 'LEATHER - Pantoffels', 'Marks & Spencer', 'images/marks-spencer.jpg', 0, 39, 4),
(2, 'LABEL - Sandalen', 'MOSCHINO', 'images/moschino.jpg', 0, 280, 3),
(3, 'Klassieke veterschoenen', 'Pier One', 'images/moschino.jpg', 0, 32, 1),
(4, 'OPEN TOE - Pantoffels', 'Mercader', 'images/mercader.jpg', 0, 146, 4),
(5, 'Klassieke veterschoenen', 'Pier One', 'images/pier-one.jpg', 0, 32, 1),
(6, 'RUNFALCON 3 0 - Sportschoenen', 'adidas Performance', 'images/adidas-performance.jpg', 0, 59, 2),
(7, 'Klassieke veterschoenen', 'Desa', 'images/desa.jpg', 1, 143, 1),
(8, 'Superstar - Sportschoenen', 'adidas Originals', 'images/adidas-originals.jpg', 1, 119, 2),
(9, 'Sandalen met plateauzool', 'Tamaris', 'images/tamaris.jpg', 1, 54, 3),
(10, 'BUCKLED CAGE - Sandalen', 'Massimo Dutti', 'images/massimo-duti.jpg', 1, 163, 3),
(11, 'Klassieke veterschoenen', 'Calvin Klein', 'images/calvin-klein.jpg', 1, 129, 1),
(12, 'Pantoffels', 'Anna Field', 'images/anna-field.jpg', 1, 21, 4),
(13, 'SEATTLE 365 - Sportschoenen', 'Jack Wolfskin', 'images/jack-wolfskin.jpg', 1, 59, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `schoentypes`
--

CREATE TABLE `schoentypes` (
  `typeId` int(11) NOT NULL,
  `typeNaam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `schoentypes`
--

INSERT INTO `schoentypes` (`typeId`, `typeNaam`) VALUES
(1, 'Klassieke schoenen'),
(2, 'Sportieve schoenen'),
(3, 'Sandalen'),
(4, 'Pantoffels');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `schoenen`
--
ALTER TABLE `schoenen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `schoentypes`
--
ALTER TABLE `schoentypes`
  ADD PRIMARY KEY (`typeId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `schoenen`
--
ALTER TABLE `schoenen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT voor een tabel `schoentypes`
--
ALTER TABLE `schoentypes`
  MODIFY `typeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
