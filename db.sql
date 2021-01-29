-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 29, 2021 at 01:25 PM
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
(1, 'Poretti', 'Bionda ', 'Italiana', 'Birra chiara italiana ', 1.50, '', NULL, '2021-01-27 15:32:42', '2021-01-27 15:32:42'),
(2, 'Moretti', 'Rossi', 'italia', 'Birra rossa italiana ', 1.80, '', NULL, '2021-01-27 15:32:42', '2021-01-27 15:32:42'),
(3, 'Heineken', 'Chiara', 'Olandese', 'Birra olandese', 2.00, '', NULL, '2021-01-27 15:34:00', '2021-01-27 15:34:00'),
(4, 'efwef', 'wdaw', 'daf', 'dsfs', 1.00, 'efwef', NULL, '2021-01-27 16:50:12', '2021-01-27 16:50:12');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;