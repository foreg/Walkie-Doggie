-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 09 2018 г., 20:45
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `walkie_dogie`
--

-- --------------------------------------------------------

--
-- Структура таблицы `walks`
--

CREATE TABLE `walks` (
  `id_walk` int(11) NOT NULL,
  `dog_id` int(11) NOT NULL,
  `dt_list` datetime NOT NULL,
  `dt_w_start` datetime NOT NULL,
  `dt_w_finish` datetime NOT NULL,
  `dt_a_start` datetime NOT NULL,
  `dt_a_finish` datetime NOT NULL,
  `price_start` double NOT NULL,
  `last_bet_id` int(11) DEFAULT NULL,
  `adress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `walks`
--
ALTER TABLE `walks`
  ADD PRIMARY KEY (`id_walk`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `walks`
--
ALTER TABLE `walks`
  MODIFY `id_walk` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
