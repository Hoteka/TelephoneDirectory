-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 13 2022 г., 14:28
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `telephone_directory`
--

-- --------------------------------------------------------

--
-- Структура таблицы `directory`
--

CREATE TABLE `directory` (
  `id` int NOT NULL,
  `secondName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `firstName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `telephone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `organization` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `directory`
--

INSERT INTO `directory` (`id`, `secondName`, `firstName`, `lastName`, `telephone`, `organization`) VALUES
(1, 'Уланова ', 'Яна ', 'Васильевна', '+7 (974) 376-56-64', 'Банк'),
(2, 'Троицкий ', 'Епифан ', 'Николаевич', '+7 (949) 621-96-04', 'Банк'),
(3, 'Садовский', 'Сильвестр ', 'Алексеевич', '+7 (956) 239-58-37', 'ООО \"Радуга\"'),
(4, 'Ермилова ', 'Регина ', 'Филипповна', '+7 (997) 669-06-59', 'ООО \"Восток\"'),
(5, 'Соловьева ', 'Эмма ', 'Львовна', '+7 (961) 554-68-39', 'ООО \"Радуга\"'),
(16, '123', '123', '123', '+7 (974) 376-56-64', '123'),
(17, '123', '123', '123', '+7 (956) 239-58-37', '123'),
(18, '123', '123', '123', '+7 (997) 669-06-59', '123'),
(22, '123', '123', '123', '123', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `directory`
--
ALTER TABLE `directory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `directory`
--
ALTER TABLE `directory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
