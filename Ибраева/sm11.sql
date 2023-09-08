-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 03 2023 г., 15:54
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sm11`
--

-- --------------------------------------------------------

--
-- Структура таблицы `item`
--

CREATE TABLE `item` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `categories` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `opisanie` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `color` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `item`
--

INSERT INTO `item` (`id`, `name`, `categories`, `price`, `opisanie`, `color`) VALUES
(1, '\r\nМужские кроссовки Nike Air Force', 'Мужская обувь', 7999, 'Модель для баскетб', 'Цвет модели: белый'),
(2, 'Мужские кроссовки Nike Air Force', 'Мужская обувь', 7999, 'Модель для баскетбольного матча в парке, воскресного барбекю и солнечной погоды. Пусть солнце сияет для тебя с кроссовками Nike Air Force 1 \'07. Это обновленная версия классической баскетбольной модели из кожи с прошитыми накладками и идеальным сиянием, выполненная полностью в оригинальной белой расцветке.', 'Цвет модели: белый');

-- --------------------------------------------------------

--
-- Структура таблицы `will`
--

CREATE TABLE `will` (
  `id` int NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `text` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `will`
--

INSERT INTO `will` (`id`, `name`, `text`, `price`) VALUES
(1, 'Willpower', 'tex text text', '986678 р.'),
(2, 'Willpower', 'tex text text', '986678'),
(3, 'Willpower', 'tex text text', '986678'),
(4, 'Willpower', 'tex text text', '986678'),
(5, 'Willpower', 'tex text text', '986678'),
(6, 'Willpower', 'tex text text', '986678'),
(7, 'Willpower', 'tex text text', '986678'),
(8, 'Willpower', 'tex text text', '986678');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `will`
--
ALTER TABLE `will`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `will`
--
ALTER TABLE `will`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
