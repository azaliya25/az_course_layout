-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 31 2024 г., 18:03
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `azalka`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int NOT NULL,
  `catalog_name` varchar(255) DEFAULT NULL,
  `catalog_photo` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `catalog_name`, `catalog_photo`, `parent_id`) VALUES
(1, 'шоколад', 'assets/img/categories/cocoa.jpg', 1),
(2, 'молочный шоколад', NULL, 1),
(3, 'взбитые сливки', NULL, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `categories_name` varchar(255) DEFAULT NULL,
  `categories_photo` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `categories_name`, `categories_photo`) VALUES
(1, 'шоколад и какао продукты', 'assets/img/categories/cocoa.jpg'),
(2, 'пищевые ингредиенты', 'assets/img/categories/cocoa.jpg'),
(3, 'инструменты для кондитера', 'assets/img/categories/cocoa.jpg'),
(4, 'пищевая печать', 'assets/img/categories/cocoa.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE `tovar` (
  `id` int NOT NULL,
  `type` enum('catalog','category','product') NOT NULL,
  `parent_id` int DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `article` varchar(255) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text,
  `tovar_foto` varchar(255) DEFAULT NULL,
  `tovar_fotos1` varchar(255) DEFAULT NULL,
  `tovar_fotos2` varchar(255) DEFAULT NULL,
  `tovar_fotos3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id`, `type`, `parent_id`, `name`, `article`, `size`, `color`, `price`, `description`, `tovar_foto`, `tovar_fotos1`, `tovar_fotos2`, `tovar_fotos3`) VALUES
(1, 'catalog', 1, 'форма для выпечки пай', '2an3jkz', '90*20мм/50гр', NULL, '110.00', 'бумажные одноразовые формы для выпечки кексов, тортов.', NULL, NULL, NULL, NULL),
(2, 'catalog', 1, 'форма для выпечки пай', '2an3jkg', '40*10мм/60гр', '#ff94d2', '110.00', 'бумажные одноразовые формы для выпечки кексов, тортов.', '', NULL, NULL, NULL),
(3, 'catalog', 2, 'форма для выпечки пай', '2an3jki', '90*20мм/50гр', NULL, '110.00', 'бумажные одноразовые формы для выпечки кексов, тортов.', NULL, NULL, NULL, NULL),
(4, 'catalog', 2, 'форма для выпечки пай', '2an3jkw', '90*20мм/50гр', NULL, '110.00', 'бумажные одноразовые формы для выпечки кексов, тортов.', NULL, NULL, NULL, NULL),
(5, 'catalog', 3, 'нег', NULL, 'нге', '#d09595', '456.00', 'ене', '', NULL, NULL, NULL),
(6, 'catalog', 3, 'нег', NULL, 'нге', '#d09595', '456.00', 'ене', '', NULL, NULL, NULL),
(9, 'catalog', 1, 'qwerty', NULL, '123', '#7a3333', '123.00', 'qwertyqwertyqwertyqwertyqwerty', 'assets/img/products/Vector (1).svg', NULL, NULL, NULL),
(10, 'catalog', NULL, 'sdffsd', NULL, 'sdfse3', '#000000', '423.00', 'sfsfd', '', NULL, NULL, NULL),
(11, 'catalog', 2, 'bgfvf', NULL, 'vb', '#000000', '11.00', 'vbv', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `city` varchar(255) DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `phone`, `email`, `password`, `created_at`, `city`, `postal_code`) VALUES
(1, 'Кадыева', 'Азалия', '89934187660', 'kadyeva_azaliya@mail.ru', '$2y$10$eUcHQlUYtBF5nLiBXQRV0u.6ffQovoHE7kj16B3w5QYAYG.rG3cUm', '2024-05-21 07:22:21', NULL, NULL),
(5, 'Пестов', 'Роман', '89991638492', 'roman@mail.ru', '$2y$10$mRkBl3LTYYpMFv81eGemDehAL/Nzi2eS/jj4nWYhMu8yZgeihQivu', '2024-05-22 12:44:34', NULL, NULL),
(7, 'Кадыева', 'гузель', '89274384838', 'guzel@mail.ru', '$2y$10$0JfzFmv4OFRbvx1tydf5HuYgLt9agHco0z2uI9iy9/uFfLcbi4jU2', '2024-05-22 13:24:02', NULL, NULL),
(8, 'Хайруллин', 'Султан', '89824850380', 'sultan@mail.ru', '$2y$10$FkLRUThNu.0CyW1LfNySb.pIKq/bBKNIu/G.Ciogh/ZjVFFCfJHHK', '2024-05-23 16:57:44', NULL, NULL),
(9, 'tyh', 'th', '89654323456', 'amaliya@mahil.ru', '$2y$10$fOIncVgu3KRFyTTOOingguVk.MEIkKWTMX.MMOIA9sfyZXCfkL1LG', '2024-05-23 17:34:15', NULL, NULL),
(10, 'ав', 'ва', '89456789635', 'liya@mail.ru', '$2y$10$LBrQyMdj3o4ovG7ZbAushu4Hef5l0D89ZuVKGEIFbDlousptriQFS', '2024-05-23 17:37:37', 'москва', '323754'),
(11, 'gff', 'gfhhfh', '89456784568', 'tgf@mail.ru', '$2y$10$bnA/BupwM2x9XBdGfyCA/uPUqXrfQeGaIFTLQpB8r9nMpq67g/nDe', '2024-05-24 15:13:04', 'санкт-петербург', '324555'),
(12, 'qwertyy', 'qwerty', '89047652123', 'qwerty@mail.ru', '$2y$10$JMh5JslxHiMb3ipdRPQtOuATgwBk8agSFwnw0kXfzmIaxWCmMykQy', '2024-05-27 07:54:49', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD CONSTRAINT `catalog_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`);

--
-- Ограничения внешнего ключа таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD CONSTRAINT `tovar_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `catalog` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
