-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2021 年 6 月 27 日 00:54
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `dog_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `t_table`
--

CREATE TABLE `t_table` (
  `id` int(12) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `t_table`
--

INSERT INTO `t_table` (`id`, `name`, `email`, `pass`, `indate`) VALUES
(0, 'test0', 'test0@test.com', '0', '2021-06-25 15:25:46'),
(1, 'test1', 'test1@test.com', '1', '2021-06-25 18:51:37'),
(2, 'test2', 'test2@test.com', '2', '2021-06-25 23:31:25'),
(9, 'tes3', 'test3@test.com', '3', '2021-06-25 23:41:35');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `t_table`
--
ALTER TABLE `t_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `t_table`
--
ALTER TABLE `t_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
