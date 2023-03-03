-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 03 2023 г., 09:31
-- Версия сервера: 5.6.51
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `music_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Basket`
--

CREATE TABLE `Basket` (
  `Id` int(11) NOT NULL,
  `User` int(11) NOT NULL,
  `Product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Category`
--

CREATE TABLE `Category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Category`
--

INSERT INTO `Category` (`Id`, `Name`) VALUES
(1, 'Струнные'),
(2, 'Клавишные');

-- --------------------------------------------------------

--
-- Структура таблицы `Product`
--

CREATE TABLE `Product` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cost` float NOT NULL,
  `Country` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Year` int(11) NOT NULL,
  `Count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Product`
--

INSERT INTO `Product` (`Id`, `Name`, `Description`, `Image`, `Cost`, `Country`, `Category`, `Date`, `Year`, `Count`) VALUES
(1, 'Черная гитара', 'Чудесная гитара, достойная покупки', 'dcc2056b19c1c8cc30b0539235719a36', 1550, 'Россия', 1, '2022-12-29 19:26:08', 1984, 12),
(2, 'Древесная гитара', 'Превосходная ослепительная древесная гитара', '9e1e3bf9c49924a6f73cf10b6f0d3a91', 6654, 'Россия', 1, '2022-12-29 19:30:08', 2077, 64),
(3, 'Красная гитара', 'Прекрасный выбор для серенад в 4 утра под окном любимой', 'b0b8537c31a8db2e313085f53ceedb8f', 8988, 'Япония', 1, '2022-12-29 19:30:08', 1999, 5),
(4, 'Не гитара', 'Это даже не гитара, вау, вот это разнообразие', 'b28b73ae0e2e324c2859b070762755e6', 10000000, 'Россия', 1, '2022-12-29 19:43:49', 1461, 1),
(5, 'Скрипка самого Страдивари', 'Эта скрипка единственная в своем роде', 'bc3f295c155fe95474fd70350b6860b7', 24654600000000, 'Китай', 1, '2022-12-29 19:43:49', 1700, 2),
(6, 'Почти золотая гитара', 'Её прекрасное звучание наполнит ваш дом тревогой и депрессией благодаря вашим навыкам', 'ca41b0a3824f7aa1d155a726162e9f5d', 6565, 'Россия', 1, '2023-01-04 19:56:06', 2021, 5),
(7, 'Синяя электрогитара', 'Прекрасная синяя электрогитара для электрика из Мурманска', 'e9a917c442e68e8721fb6dcece67ea7c', 19990, 'Япония', 1, '2023-01-04 19:56:06', 2020, 255),
(8, 'Просто гитара', 'Вау, гитара, как оригинально', '6b8ff4aa5dbb588a6060bdd0aa681d06', 2344, 'Россия', 1, '2023-01-20 17:30:34', 1984, 25),
(10, 'Синтезирующий синтезатор', 'Идеальное звучание для вашего музыкального вечера', '08202cb04c25c43386510f49e8a0f18f', 2348, 'Россия', 2, '2023-01-20 17:33:32', 2000, 64),
(11, 'Кнопочное безумие', 'Пусть все думают что вы продвинутый музыкант', 'e1ff08ec4e7e75ce79595f17698b79fd', 1111, 'Италия', 2, '2023-01-20 17:33:32', 1999, 23);

-- --------------------------------------------------------

--
-- Структура таблицы `Role`
--

CREATE TABLE `Role` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Role`
--

INSERT INTO `Role` (`Id`, `Name`) VALUES
(1, 'Чел'),
(2, 'Админ');

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `Id` int(11) NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Surename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Patronymic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Login` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`Id`, `Name`, `Surename`, `Patronymic`, `Login`, `Email`, `Password`) VALUES
(1, '1', '1', '1', '1', '1', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Basket`
--
ALTER TABLE `Basket`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Category` (`Category`);

--
-- Индексы таблицы `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Basket`
--
ALTER TABLE `Basket`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Category`
--
ALTER TABLE `Category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Product`
--
ALTER TABLE `Product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `Role`
--
ALTER TABLE `Role`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
