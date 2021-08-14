-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 14 2021 г., 21:37
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `eventspro`
--
CREATE DATABASE IF NOT EXISTS `eventspro` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `eventspro`;

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL COMMENT '№',
  `text` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Комментарий',
  `events_id` int NOT NULL COMMENT 'id события',
  `users_id` int NOT NULL COMMENT 'id пользователя'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `text`, `events_id`, `users_id`) VALUES
(16, 'Интересно! Нужно сходить!', 2, 18),
(17, 'Что-то новенькое!!!!!!!', 3, 18),
(18, 'Будет весело!! Приходите!', 2, 17),
(19, 'Билеты уже в продаже!', 2, 17),
(20, 'Только для вас)', 3, 17),
(21, 'Спасибо)', 3, 18);

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` int NOT NULL,
  `caption` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Заголовок',
  `text` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Новости',
  `picture` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Имя файла'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `caption`, `text`, `picture`) VALUES
(2, 'РОК ФЕСТ', 'РОК-ФЕСТ\r\n13 ноября 2021\r\nМИНСК Дворец Спорта\r\nВадим Самойлов «Агата Кристи»\r\nВадим Самойлов – основатель и лидер легендарной рок-группы «Агата Кристи», на песнях которой выросло не одно поколение слушателей. Группа выпустила 10 номерных альбомов, десятки песен с которых стали всенародными хитами. «Агата Кристи» просуществовала более 20 лет. В 2010 году творческие пути братьев Самойловых разошлись. В настоящее\r\nвремя Вадим выступает с сольными концертами и ведёт активную гастрольную деятельность, а также продолжил проект «Агата Кристи», выпустив к 30-летию группы сингл «Где-то между». Помимо работы в «Агате Кристи» за плечами Вадима две сольные пластинки «Полуострова» и «Полуострова-2», совместный с группой «Пикник» альбом «Тень вампира», работа над саундтреками к фильмам Сергея Бодрова «Сестры» и Алексея Балабанова «Мне не больно». Песни в его исполнении также звучат в таких картинах как «Брат-2», «Жмурки», «Кочегар», «Быстрее, чем кролики», «Антикиллер Д.К.» и др.', 'рок фест.png'),
(3, 'Дельфинарий', 'Лучшие морские артисты: веселые котики, лев и удивительные дельфины приглашают Вас на свои представления ежедневно.\r\n\r\nОткройте для себя удивительный мир морских животных и окунитесь в атмосферу праздника с дельфинарием «Немо»!\r\n\r\nДетям до 5 лет посещение бесплатно, с 5 лет- полная стоимость билета. Обращаем Ваше внимание, что бесплатное посещение для ребенка до 5 лет предоставляется без посадочного места, согласно одному купленному билету', 'дельфинарий.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `likes`
--

CREATE TABLE `likes` (
  `id` int NOT NULL,
  `users_id` int DEFAULT NULL COMMENT 'id пользователя',
  `events_id` int DEFAULT NULL COMMENT 'id события'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `likes`
--

INSERT INTO `likes` (`id`, `users_id`, `events_id`) VALUES
(10, 1, 2),
(11, 1, 3),
(13, 17, 2),
(14, 17, 3),
(15, 18, 2),
(16, 18, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL COMMENT '№',
  `login` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Логин',
  `pass` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Пароль',
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Имя',
  `user_groups_id` int NOT NULL COMMENT 'Группа'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`, `user_groups_id`) VALUES
(1, 'user3', 'e7518dbed9007d7ee6041e7e5298b8a6', 'Стас Леонидович', 2),
(17, 'admin', '3c2b7b63bc7531b7bb544f33e4deba6e', 'Иван Иванович', 1),
(18, 'user', '50721e8a26c9ecb89fc8e62754869158', 'Илья Олегович', 2),
(20, 'user2', '7de7c0e0f80506e1a3943a343bdcee6d', 'Леонид Юрьевич', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Название',
  `code` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Группа'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `user_groups`
--

INSERT INTO `user_groups` (`id`, `name`, `code`) VALUES
(1, 'Администратор', 'admin'),
(2, 'Пользователь', 'user'),
(3, 'Гости', 'guest');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_id` (`users_id`),
  ADD KEY `users_id` (`events_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`events_id`) REFERENCES `events` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
