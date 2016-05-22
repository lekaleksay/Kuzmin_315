-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 23 2016 г., 02:28
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `url`) VALUES
(1, 'Бензин', 'Petroleum'),
(2, 'Керосин', 'Kerosene'),
(3, 'Пропан', 'Propain'),
(4, 'Дизель', 'Dizel');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `name` varchar(100) NOT NULL,
  `adress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`name`, `adress`) VALUES
('Location', 'Россия, г. Санкт-Петербург, Улица Пушкина, Дом Колотушкина'),
('Post/Index', '191000'),
('E-Mail', 'leksayleksay@gmail.com'),
('Number', '+0 (000) 000-00-00'),
('Web', 'localhost/g315/index.php');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `characteristics` text NOT NULL COMMENT 'Описание товара',
  `price` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_category` (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `id_category`, `name`, `characteristics`, `price`) VALUES
(1, 1, 'petroleum-92', 'rub/L', 34),
(4, 1, 'petroleum-98', 'rub/L', 43),
(5, 4, 'diesel fuel', 'rub/L', 38),
(6, 3, 'Propain', 'rub/L', 19),
(7, 2, 'Kerosene', 'rub/L', 124),
(9, 1, 'petroleum-95', 'rub/L', 38),
(10, 1, 'petroleum-80', 'rub/L', 32);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
