-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 03, 2022 at 04:43 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `ID_author` int NOT NULL,
  `FIO` varchar(40) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Deathday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`ID_author`, `FIO`, `Birthday`, `Deathday`) VALUES
(1, 'Ф.М.Достоевский', '1821-11-11', '1881-01-29'),
(2, 'Н.В,Гоголь', '1809-03-19', '1852-03-04'),
(3, 'М.Ю.Лермонтов', '1814-10-15', '1841-07-27'),
(4, 'Л.Н.Толстой', '1828-09-09', '1910-11-20'),
(5, 'Ф.Тилье', '1973-10-15', NULL),
(6, 'А.К.Дойл', '1859-05-22', '1930-06-07'),
(7, 'Г.Ф.Лавкрафт', '1890-08-20', '1937-03-14'),
(8, 'К.Г.Маркс', '1818-05-05', '1883-03-14'),
(9, 'А.С.Пушкин', '1799-06-06', '1837-02-10'),
(10, 'Д.Алигъери', '1265-07-13', '1321-09-14'),
(33, 'Беляев А.Р', '1884-03-16', '1942-01-06'),
(34, 'Abob D.D', '2222-11-22', '2233-11-23'),
(37, 'Живаго А.А', '2011-12-20', '2022-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ID_book` int NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Description` text,
  `Year_of_creating` date DEFAULT NULL,
  `ID_author` int DEFAULT NULL,
  `ID_genre` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID_book`, `Name`, `Description`, `Year_of_creating`, `ID_author`, `ID_genre`) VALUES
(1, 'Преступление и наказ', 'Двойное убийство, совершенное студентом', '1866-09-12', 1, 1),
(2, 'Головоломка', 'Илан и хлое - охотники', '2013-05-04', 5, 2),
(3, 'Божественная комедия', 'Настоящая средневековая энциклопедия научных и т.д', '1321-04-12', 10, 5),
(4, 'Война и мир', 'роман описывающий русское обзество', '1863-12-12', 4, 1),
(5, 'Мертвые души', 'о дворянине Чичикове', '1842-06-13', 2, 1),
(6, 'Этюд в багр.тонах', 'Детективная повесть', '1887-03-02', 6, 2),
(7, 'Капитанская дочка', 'Исторический роман', '1836-07-07', 9, 1),
(8, 'Капитал', 'политическая экономика', '1867-01-20', 8, 4),
(9, 'Герой нашего времени', 'социально-псих. роман', '1840-02-14', 3, 1),
(10, 'Мифы ктулху', 'книга ужасов Лавкрафта', '1890-11-24', 7, 3),
(11, 'Переломы', 'застряли в ужасных условиях', '1994-04-12', 5, 2),
(12, 'Остров Кораблей', 'Приключенческий роман русского советского писателя-фантаста', '1926-11-12', 33, 1);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `ID_genre` int NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`ID_genre`, `Name`, `Description`) VALUES
(1, 'Классика', 'произведения великих авторов'),
(2, 'Детектив', 'остросюжетная литература о расследовании'),
(3, 'Ужасы', 'худ. литература, имеющая цель вызвать ужас'),
(4, 'Научно-Пуб', 'одна из форм воплощения определенной идеи'),
(5, 'Поэма', 'повествовательное стихотворное произведение большого объема');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`ID_author`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID_book`),
  ADD KEY `fk_id_author` (`ID_author`),
  ADD KEY `fk_id_genre` (`ID_genre`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`ID_genre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `ID_author` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `ID_book` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `ID_genre` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `fk_id_author` FOREIGN KEY (`ID_author`) REFERENCES `authors` (`ID_author`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_genre` FOREIGN KEY (`ID_genre`) REFERENCES `genre` (`ID_genre`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
