-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 17, 2017 at 08:23 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subtitely`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `hash_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imdb_rating` float NOT NULL,
  `mpaa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `release_date` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `hash_id`, `title`, `genre`, `imdb_rating`, `mpaa`, `release_date`, `created_at`, `updated_at`) VALUES
(1, NULL, 'The dark knight rises', 'Action, Drama', 8.9, 'PG-13', 765675765, 2017, 2017),
(2, NULL, 'The dark knight rises 2', 'Action, Drama', 8.9, 'PG-13', 765675765, 2017, 2017),
(3, NULL, 'The dark knight rises 3', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(4, NULL, 'Anas Abudayah', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(5, NULL, 'Anas Abudayah', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(6, NULL, 'Anas Abudayah', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(7, NULL, 'Anas Abudayah', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(8, NULL, 'Anas Abudayah', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(9, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(10, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(11, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(12, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(13, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(14, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(15, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(16, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(17, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(18, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(19, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(20, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(21, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(22, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(23, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(24, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(25, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(26, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(27, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(28, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(29, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(30, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(31, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(32, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(33, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(34, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(35, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(36, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(37, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(38, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(39, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(40, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(41, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(42, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(43, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(44, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(45, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(46, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(47, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(48, NULL, 'Hasan Zahran', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(49, NULL, 'TEst Test', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(50, NULL, 'TEst Test', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(51, NULL, 'TEst Test', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(52, NULL, 'TEst Test', 'Action, Drama', 8.9, 'PG-13', 324, 2017, 2017),
(53, NULL, 'Hello', 'Action, Drama', 8.9, 'PG-13', 2213, 2017, 2017),
(54, NULL, 'The dark knight rises', 'Action, Drama', 8.9, 'PG-13', 2213, 2017, 2017),
(55, NULL, 'The dark knight rises', 'Action, Drama', 8.9, 'PG-13', 2213, 2017, 2017),
(56, 'xk9', 'The dark knight rises', 'Action, Drama', 8.9, 'PG-13', 2213, 2017, 2017),
(57, 'yP7', 'The dark knight rises', 'Action, Drama', 8.9, 'PG-13', 2213, 2017, 2017),
(58, 'zpY', 'hellooooo', 'Action, Drama', 8.9, 'PG-13', 2213, 2017, 2017),
(59, 'ADO', 'hellooooo', 'Action, Drama', 8.9, 'PG-13', 2213, 2017, 2017),
(60, 'BBX', 'hellooooo', 'Action, Drama', 8.9, 'PG-13', 2213, 0, 0),
(61, 'Dkx', 'hellooooo', 'Action, Drama', 8.9, 'PG-13', 2213, 2147483647, 2147483647),
(62, 'ERv', 'hellooooo', 'Action, Drama', 8.9, 'PG-13', 2213, 2147483647, 2147483647),
(63, 'G67', 'Fast Five', 'Action, Drama', 8.9, 'PG-13', 2213, 0, 0),
(64, 'J62', 'Fast Five', 'Action, Drama', 8.9, 'PG-13', 2213, 2147483647, 2147483647),
(65, 'KrR', 'Fast Five', 'Action, Drama', 8.9, 'PG-13', 2213, 2147483647, 2147483647),
(66, 'L9w', 'The dark knight rises', 'Action, Drama', 8.9, 'PG-13', 2213, 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `subtitles`
--

CREATE TABLE `subtitles` (
  `id` int(11) NOT NULL,
  `hash_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `movie_id` int(11) NOT NULL,
  `language` varchar(2) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ISO 639-1',
  `source_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `votes_up` int(11) NOT NULL DEFAULT '0',
  `votes_down` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subtitles`
--

INSERT INTO `subtitles` (`id`, `hash_id`, `movie_id`, `language`, `source_url`, `votes_up`, `votes_down`, `created_at`, `updated_at`) VALUES
(1, 'werwe', 50, 'ar', 'fast-five.src', 234, 32, 23453245, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subtitles`
--
ALTER TABLE `subtitles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hash_id` (`hash_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `subtitles`
--
ALTER TABLE `subtitles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `subtitles`
--
ALTER TABLE `subtitles`
  ADD CONSTRAINT `subtitles_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
