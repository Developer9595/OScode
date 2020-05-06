-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 04 2020 г., 00:21
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `v91178na_oscoderu`
--

-- --------------------------------------------------------

--
-- Структура таблицы `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(24) CHARACTER SET utf8 NOT NULL,
  `user_password` varchar(24) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `signup`
--

CREATE TABLE `signup` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_repassword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `signup`
--

INSERT INTO `signup` (`id`, `user_name`, `user_surname`, `user_email`, `user_password`, `user_repassword`) VALUES
(3, 'Амирджон', 'Раджабов', 'admn@oscode.ru', '$2y$10$U.R5FtMutrDTz9HKv0glM.J2pEWq1IrDcbD3vX5mb7Wd1j8l6EF4a', '$2y$10$MXBxytZs8HRiMzZ8KrLjOOqUJY0ZsDMyFPC6HG6qfrax0cre8ok/C'),
(4, 'q', 'q', 'q@q.r', '$2y$10$ncpKr8YAb1Z084Cm2iMCrudG8wsGqSvcfGOj5p8trVyE35XC.OXKO', '$2y$10$rTbPy.eYlrfJdyUqFeUX.uZyeEfT/7geQ.NT0XeFWv9rzTSUZs2tG'),
(5, 'q', 'w', 'qw@qw.we', '$2y$10$uvx8JinC7JDAMkMLxe.ZsuMB5tdU/0j5pqvLRABLC.JKcS1ZNj/X6', '$2y$10$A8pFCFZJEoqam0BK1KBKYe/8iRMxIYS6.WLdF8cIVoohrG4q2K/vC'),
(6, 'Али', 'Валиев', 'ali@gmail.com', '$2y$10$4MnxQ8Gu8MCYYcwm4XSx0emowIRvAAkKzSauD8.BqygsAKZEzTWzu', '$2y$10$c84Z2oCPsN4NSQZ8kJtQmOxuIIVAvAH.hkp855leW9kDTzayqmS5G'),
(7, 'ewrgh', 'weghj', 'egh@er.tr', '$2y$10$xePdQnxEQmMYrj4CEOZGe.jAloNbPAl7WkqO03lr6zuY/deY8Zgdq', '$2y$10$e2JZhGjWRAlQ6YYDG/s6J.jMVoO4asGXn1oz9Ut9Kgz332ZsErmRO'),
(8, 'test', 'test', 'test@t.r', '$2y$10$C4g60zZHcAw0hVlhMMuC0OEeKZduBDN3Q0uT.GOrjsrqi5MNp6GyG', '$2y$10$Kmp.NaOdaKrx/jPIBp8.ZOXlN3SuvaJKK8qjeKSihZ4Z4kQYbwYeW'),
(9, 'q', 'q', 'q@q.q', '$2y$10$/jkG.zBsqJ3jyR5ePgQvLOzkpVe1O3ziNsrFBVeP0srJRJaEdWuou', '$2y$10$gANShgeEiP9aGIN.BiIYde63GUmXU8sENyOVm4ZNIC4KsFr3qNM5y'),
(10, 'a', 'a', 'a@a.a', '$2y$10$epCXmW1oHYUYWjD8mfCVwuQ1YW.Ui30G/K.mQYssWTMrNrtl3vkJS', '$2y$10$aRFCwhk/.QtUfse0EyLR4OBEGgy9z9LnMKhh5PYaHPu/df1ZncCxi'),
(11, 'z', 'z', 'z@z.z', '$2y$10$PF3EnLr1JY2JALSZpiLQKeJt0tv2VF5RYfR8dijAxa.yFffvSfp7u', '$2y$10$hwgIL5WX0/NZbG7E5KvUcuZVwKvveSIbJ1l9TcsWmCOFXsxNByTJW');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
