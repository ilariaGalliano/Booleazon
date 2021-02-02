-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 02, 2021 at 03:36 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `beer-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `beers`
--

CREATE TABLE `beers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(4,2) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beers`
--

INSERT INTO `beers` (`id`, `title`, `type`, `origin`, `description`, `price`, `slug`, `path_img`, `created_at`, `updated_at`) VALUES
(9, 'Audace 32', 'Bionda', 'Italiana', 'Bionda, doppio malto e forte dedicato alle donne', 11.00, 'audace-32', 'images/Y6oBYkIuAeR1rCx7sMUteYhHi5ugIc7wAKaBUo8p.jpg', '2021-02-02 13:04:15', '2021-02-02 13:04:15'),
(10, 'Gjulia', 'Bionda', 'Italiana', 'Bionda senza glutine', 8.00, 'gjulia', 'images/zk37zzvgKcXeEETV6HOzbCOMoRwKdsTXeyVZaH8M.jpg', '2021-02-02 13:06:25', '2021-02-02 13:06:25'),
(11, 'Viola', 'Ambrata rossa', 'Italiana', 'Birra rossa doppio malto', 15.00, 'viola', 'images/66oGExZGoK7tbJYgCjgtxCyEquCfgdTxB8RMmsN8.jpg', '2021-02-02 13:07:21', '2021-02-02 13:07:21'),
(12, 'Ciära', 'Bionda', 'Italiana', 'Birra chiara non pastorizzata', 7.99, 'ciara', 'images/eXfiuO8hfCpD4NhRK0KwCGyHurNoIupctyNyriHq.jpg', '2021-02-02 13:09:14', '2021-02-02 13:09:14'),
(13, 'Vivaldi', 'Triplo malto', 'Italiana', 'Birra lager', 8.00, 'vivaldi', 'images/VQmjccVNTqZbSxIZ9Lx3Zrru1XHLf9JeX4Gr8dkN.jpg', '2021-02-02 13:10:22', '2021-02-02 13:10:22'),
(14, 'Bibock', 'Bionda', 'Tedesca', 'Birra bionda la prepotenza di qualità', 10.00, 'bibock', 'images/4WTomE0A0vs5TIh7wWQVrq4JPx1HmCJa56o3yleB.jpg', '2021-02-02 13:11:38', '2021-02-02 13:11:38'),
(15, 'Hell', 'Bionda senza glutine', 'Italiana', 'Birra inferno bionda, lievito di origine italiano senza glutine', 10.00, 'hell', 'images/g9wyyf0adGI5gWa3c6b9bFnjWNlUSDlee6QTVFyR.jpg', '2021-02-02 13:12:31', '2021-02-02 13:12:31'),
(16, 'Troubadour Magma', 'Bionda', 'Belga', 'Birra Troubadour Magma è una birra belga fabbricata dal birrificio Les Mousquetaires (The Musketeers), che produce birra dal 2000 in Belgio', 9.00, 'troubadour-magma', 'images/GdMTnV18w3AhMs2NtmH4dnHoPvXtJtLs6LEgzAzO.jpg', '2021-02-02 13:14:29', '2021-02-02 13:14:29'),
(17, 'Gjulia Rossa', 'Rossa', 'Italiana', 'Birra rossa saporita', 15.00, 'gjulia-rossa', 'images/Hyf5JvwjN0gO7WqOE1yLffsGk9Ry1qxU0RQicOCu.png', '2021-02-02 13:15:21', '2021-02-02 13:15:21'),
(19, 'Gaia La Polena', 'Bionda senza glutine', 'Italiana', 'La Polena è un progetto Food con la birra artigianale prodotto da Triskelia proprietaria del marchio LA POLENA', 12.00, 'gaia-la-polena', 'images/jsY1Qq4lqxsWkogvKXxtj2oyYXUJmFlUyi7UsUho.jpg', '2021-02-02 13:17:35', '2021-02-02 13:17:35'),
(20, 'Grisette BIO', 'Birra BIO', 'Italiana', 'Quando il presente tiene viva una tradizione dandone però un senso fuorviante rispetto alla realtà. E\' quel che accade con la Grisette, ...', 5.00, 'grisette-bio', 'images/lX52JfPNGylXnCxqyLX4KFLxAVfnXUpyFsodTVB6.jpg', '2021-02-02 13:18:57', '2021-02-02 13:18:57'),
(21, 'Killer beer', 'Birra doppio malto', 'Finlandese', 'Hai un locale e sei alla ricerca di una birra artigianale del territorio? Scopri A Killer Beer Birra Artigianale dell\'Anno 2018, premiata dalla Ass.', 8.00, 'killer-beer', 'images/2Tyyc4tghxQFgGLxX21VrCle2jbxKxooqTXAGk8D.jpg', '2021-02-02 13:20:11', '2021-02-02 13:20:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beers`
--
ALTER TABLE `beers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beers`
--
ALTER TABLE `beers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;