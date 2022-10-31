-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Окт 31 2022 г., 07:14
-- Версия сервера: 10.5.16-MariaDB
-- Версия PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `id19689702_speedway_riders`
--
CREATE DATABASE IF NOT EXISTS `id19689702_speedway_riders` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id19689702_speedway_riders`;

-- --------------------------------------------------------

--
-- Структура таблицы `riders`
--

CREATE TABLE `riders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `nationality` varchar(1000) NOT NULL,
  `league` varchar(1000) NOT NULL,
  `team` varchar(1000) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `riders`
--

INSERT INTO `riders` (`id`, `name`, `surname`, `nationality`, `league`, `team`, `birthday`, `number`) VALUES
(1, 'Andzejs', 'Lebedevs', 'https://i.ibb.co/L9t88Cv/latvia.png', 'https://i.ibb.co/VjM616Z/ewinner-1-liga.png', 'https://i.ibb.co/Svmcq3J/wilki-krosno.png', '1994-11-04', 29),
(2, 'Bartosz', 'Zmarzlik', 'https://i.ibb.co/0sC1PGC/poland.png', 'https://i.ibb.co/GpjWjc3/pge-ekstraliga.png', 'https://i.ibb.co/Wyv0MSJ/stal-gorzow.png', '1995-04-12', 95),
(3, 'Leon', 'Madsen', 'https://i.ibb.co/G5yzpSH/denmark.png', 'https://i.ibb.co/GpjWjc3/pge-ekstraliga.png', 'https://i.ibb.co/0J8pTjY/wlokniarz-czestochowa.png', '1988-09-5', 30),
(4, 'Fredrik', 'Lindgren', 'https://i.ibb.co/wrdW76m/sweden.png', 'https://i.ibb.co/GpjWjc3/pge-ekstraliga.png', 'https://i.ibb.co/0J8pTjY/wlokniarz-czestochowa.png', '1985-09-15', 66),
(5, 'Maciej', 'Janowski', 'https://i.ibb.co/0sC1PGC/poland.png', 'https://i.ibb.co/GpjWjc3/pge-ekstraliga.png', 'https://i.ibb.co/1JphLc4/wts-sparta-wroclaw.png', '1991-08-06', 71),
(7, 'Dan', 'Bewley', 'https://i.ibb.co/4K8CR4x/great-britain.png', 'https://i.ibb.co/GpjWjc3/pge-ekstraliga.png', 'https://i.ibb.co/1JphLc4/wts-sparta-wroclaw.png', '1999-05-20', 99),
(8, 'Tai', 'Woffinden', 'https://i.ibb.co/4K8CR4x/great-britain.png', 'https://i.ibb.co/GpjWjc3/pge-ekstraliga.png', 'https://i.ibb.co/1JphLc4/wts-sparta-wroclaw.png', '1990-08-10', 108),
(9, 'Robert', 'Lambert', 'https://i.ibb.co/4K8CR4x/great-britain.png', 'https://i.ibb.co/GpjWjc3/pge-ekstraliga.png', 'https://i.ibb.co/C8gF9n4/ks-torun.png', '1998-04-05', 505),
(10, 'Patryk', 'Dudek', 'https://i.ibb.co/0sC1PGC/poland.png', 'https://i.ibb.co/GpjWjc3/pge-ekstraliga.png', 'https://i.ibb.co/C8gF9n4/ks-torun.png', '1992-06-20', 692),
(11, 'Martin', 'Vaculik', 'https://i.ibb.co/Vmp7cVY/slovakia.png', 'https://i.ibb.co/GpjWjc3/pge-ekstraliga.png', 'https://i.ibb.co/Wyv0MSJ/stal-gorzow.png', '1990-04-05', 54),
(12, 'Anders', 'Thomsen', 'https://i.ibb.co/G5yzpSH/denmark.png', 'https://i.ibb.co/GpjWjc3/pge-ekstraliga.png', 'https://i.ibb.co/Wyv0MSJ/stal-gorzow.png', '1994-01-01', 105),
(13, 'Pawel', 'Przedpelski', 'https://i.ibb.co/0sC1PGC/poland.png', 'https://i.ibb.co/GpjWjc3/pge-ekstraliga.png', 'https://i.ibb.co/C8gF9n4/ks-torun.png', '1995-06-23', 323),
(14, 'Jack', 'Holder', 'https://i.ibb.co/Y70gfCH/australia.png', 'https://i.ibb.co/GpjWjc3/pge-ekstraliga.png', 'https://i.ibb.co/C8gF9n4/ks-torun.png', '1996-03-23', 25),
(15, 'Jason', 'Doyle', 'https://i.ibb.co/Y70gfCH/australia.png', 'https://i.ibb.co/GpjWjc3/pge-ekstraliga.png', 'https://i.ibb.co/TwKLC5X/unia-leszno.png', '1985-10-06', 69),
(16, 'Mikkel', 'Michelsen', 'https://i.ibb.co/G5yzpSH/denmark.png', 'https://i.ibb.co/GpjWjc3/pge-ekstraliga.png', 'https://i.ibb.co/qrVspxq/motor-lublin.png', '1994-08-19', 155),
(17, 'Max', 'Fricke', 'https://i.ibb.co/Y70gfCH/australia.png', 'https://i.ibb.co/VjM616Z/ewinner-1-liga.png', 'https://i.ibb.co/B6FPhRg/falubaz-zielona-gora.png', '1996-03-29', 46);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `riders`
--
ALTER TABLE `riders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `riders`
--
ALTER TABLE `riders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
