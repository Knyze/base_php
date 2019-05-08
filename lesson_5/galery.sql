-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 08 2019 г., 15:35
-- Версия сервера: 5.7.25
-- Версия PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `geek_brains`
--

-- --------------------------------------------------------

--
-- Структура таблицы `galery`
--

CREATE TABLE `galery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` text NOT NULL,
  `picture` text NOT NULL,
  `name` varchar(32) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `galery`
--

INSERT INTO `galery` (`id`, `icon`, `picture`, `name`, `count`) VALUES
(1, 'img/icon_1.jpg', 'img/picture_1.jpg', 'photo1', 2),
(2, 'img/icon_2.jpg', 'img/picture_2.jpg', 'photo2', 3),
(3, 'img/icon_3.jpg', 'img/picture_3.jpg', 'photo3', 0),
(4, 'img/icon_4.jpg', 'img/picture_4.jpg', 'photo4', 5),
(5, 'img/icon_5.jpg', 'img/picture_5.jpg', 'photo5', 1),
(6, 'img/icon_6.jpg', 'img/picture_6.jpg', 'photo6', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `galery`
--
ALTER TABLE `galery`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `galery`
--
ALTER TABLE `galery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
