-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 10 2018 г., 06:56
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
-- Структура таблицы `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(20) DEFAULT NULL,
  `sex` varchar(1) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `size` varchar(20) NOT NULL,
  `info` varchar(250) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dogs`
--

INSERT INTO `dogs` (`id`, `name`, `age`, `sex`, `breed`, `size`, `info`, `user_id`) VALUES
(1, 'бобиктРЕдаченный', '1', 'м', 'овчарка', 'большая\'\'', 'Пример', 1),
(2, 'бобик2', '2', 'ж', 'овчарка', 'очень большая', 'Пример текстового инфо', 1),
(3, 'бобик3', '3', 'м', 'овчарка', 'очень большая', 'Пример текстового инфо', 1);

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
(1, 'test@mail.ru', '$2y$10$qS0cCwU4pA6yC2g9mZhFFe8wqiNme1UI/PUtzrShqE3QFyV/87EzK', 'Дмитрий', 'Россия, Санкт-Петербург, Дворцовая площадь, 6-8', '+71233211221', 0, 'Пример текстового инфо', '2018-11-09', '2018-11-09', 'D9oFkO7rHXUeZioyA4KJFK6xMYeZV95mTa91PGVebLzJgDJ1wyS3PqpZdaoN'),
(2, 'test2@mail.ru', '$2y$10$.Qp/3z46rY0DS5Uj8qxBTuEgb9Gr3G3lF.rQmeOpgqWI5.BpR1a16', NULL, NULL, NULL, 0, NULL, '2018-11-09', '2018-11-09', 'M0BiOwst6QJUhdVvHNymF7SkEpeUuEiu3srEEKESwxgpDwzTp7huDQGQNNQl');

-- --------------------------------------------------------

--
-- Структура таблицы `walks`
--

CREATE TABLE `walks` (
  `id` int(11) NOT NULL,
  `dog_id` int(11) NOT NULL,
  `dt_list` datetime NOT NULL,
  `dt_w_start` datetime NOT NULL,
  `dt_w_duration` int(11) NOT NULL,
  `dt_a_start` datetime NOT NULL,
  `dt_a_finish` datetime NOT NULL,
  `price_start` double NOT NULL,
  `last_bet_id` int(11) DEFAULT NULL,
  `adress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `walks`
--

INSERT INTO `walks` (`id`, `dog_id`, `dt_list`, `dt_w_start`, `dt_w_duration`, `dt_a_start`, `dt_a_finish`, `price_start`, `last_bet_id`, `adress`) VALUES
(1, 1, '2018-11-10 08:00:00', '2018-11-11 12:00:00', 50, '2018-11-10 08:00:00', '2018-11-11 08:00:00', 450, NULL, 'Санкт-Петербург, Дворцовая площадь, 6-8'),
(2, 2, '2018-11-10 05:00:00', '2018-11-12 10:00:00', 45, '2018-11-10 05:00:00', '2018-11-12 06:00:00', 400, NULL, 'Санкт-Петербург, Дворцовая площадь, 10');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `walks`
--
ALTER TABLE `walks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dog_id` (`dog_id`),
  ADD KEY `last_bet_id` (`last_bet_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `walks`
--
ALTER TABLE `walks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `dogs`
--
ALTER TABLE `dogs`
  ADD CONSTRAINT `dogs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `walks`
--
ALTER TABLE `walks`
  ADD CONSTRAINT `walks_ibfk_1` FOREIGN KEY (`dog_id`) REFERENCES `dogs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
