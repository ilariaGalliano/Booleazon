-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 02, 2021 at 01:21 PM
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
(5, 'Collesi', 'Birra bionda', 'Italiana', 'Birra bionda artigianale', 3.00, 'collesi', 'images/dNeBtQerNBIGV5FjVmOsCgw5U6tRNpYdDwlJ0uiF.jpg', '2021-02-01 17:56:23', '2021-02-01 17:56:23'),
(6, 'Poretti', 'Bionda', 'Italiana', 'Birra chiara italiana', 1.99, 'poretti', 'images/FyKVMHi3Ra9mBDD33Kjh8A9S68KODZ85RiQjgSMp.jpg', '2021-02-01 18:21:12', '2021-02-01 18:21:12'),
(7, 'Moretti', 'Rossa', 'Italiana', 'Birra rossa italiana', 2.99, 'moretti', 'images/DS5Jigxp4EJkB9YSHdgOwfrFUVfCvR2ncPZYt88n.jpg', '2021-02-01 18:22:44', '2021-02-01 18:22:44'),
(8, 'Heineken', 'Chiara leggera', 'olandese', 'Birra chiara bionda', 3.00, 'heineken', 'images/LCLpEj63wrX0OGVEbwkKfRkQw1ty3aFi0iLLciKy.jpg', '2021-02-01 18:23:24', '2021-02-01 18:23:24');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
