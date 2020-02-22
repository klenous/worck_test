-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 21 2020 г., 20:48
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test_3`
--

-- --------------------------------------------------------

--
-- Структура таблицы ` articles`
--

CREATE TABLE IF NOT EXISTS ` articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `top` varchar(30) NOT NULL,
  `sdes` text NOT NULL,
  `pre` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы ` articles`
--

INSERT INTO ` articles` (`id`, `top`, `sdes`, `pre`) VALUES
(1, 'Тестовый пост*1', '<p>оченьинтересный контетнет</p>', 'https://via.placeholder.com/300'),
(2, 'Тестовый пост*2', 'sfjckhskjhklvsdkljdslkjvklsdjnlkjdkjm', 'https://via.placeholder.com/300'),
(3, 'Тестовый пост*3', 'lfdopijgioudifojugoisjdfvohfdof', 'https://via.placeholder.com/300'),
(4, 'Тестовый пост*4', '54865441468', 'https://via.placeholder.com/300'),
(5, 'Тестовый пост*5', 'rsdjklfdcgvhbnjm,lkjufg', 'https://via.placeholder.com/300');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
