-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 09 2018 г., 20:39
-- Версия сервера: 10.1.34-MariaDB
-- Версия PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `walkie-doggie`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `adress` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `rights` tinyint(1) NOT NULL DEFAULT '0',
  `info` varchar(250) DEFAULT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `adress`, `phone`, `rights`, `info`, `updated_at`, `created_at`, `remember_token`) VALUES
(1, 'test@mail.ru', '$2y$10$qS0cCwU4pA6yC2g9mZhFFe8wqiNme1UI/PUtzrShqE3QFyV/87EzK', NULL, NULL, NULL, 0, NULL, '2018-11-09', '2018-11-09', 'YcOgAFPjKNRjq53UbTpOQJC0XIh4X803NLKUUKF98nSnWY8RFZILTBzT4Kno'),
(2, 'test2@mail.ru', '$2y$10$.Qp/3z46rY0DS5Uj8qxBTuEgb9Gr3G3lF.rQmeOpgqWI5.BpR1a16', NULL, NULL, NULL, 0, NULL, '2018-11-09', '2018-11-09', 'M0BiOwst6QJUhdVvHNymF7SkEpeUuEiu3srEEKESwxgpDwzTp7huDQGQNNQl');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
