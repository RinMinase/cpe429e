-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2016 at 06:10 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `come429e`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `idadmin_account` int(11) NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`idadmin_account`, `users_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `idfavorites` int(11) NOT NULL,
  `power_account_idpower_account` int(11) NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `last_viewed` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`idfavorites`, `power_account_idpower_account`, `users_id`, `last_viewed`) VALUES
(1, 1, 1, '2016-10-21 18:35:06'),
(2, 1, 2, '2016-10-21 18:20:38'),
(3, 1, 2, '2016-10-21 18:20:38'),
(4, 1, 2, '2016-10-21 18:20:38'),
(5, 1, 2, '2016-10-21 18:20:38'),
(6, 1, 2, '2016-10-21 18:20:38'),
(7, 1, 2, '2016-10-21 18:20:38'),
(8, 1, 2, '2016-10-21 18:20:38'),
(9, 1, 2, '2016-10-21 18:20:38'),
(10, 1, 2, '2016-10-21 18:20:38'),
(11, 1, 2, '2016-10-21 18:20:38'),
(12, 1, 2, '2016-10-21 18:20:38'),
(13, 1, 2, '2016-10-21 18:20:38'),
(14, 1, 2, '2016-10-21 18:20:38'),
(15, 1, 2, '2016-10-21 18:20:38'),
(16, 1, 2, '2016-10-21 18:20:38'),
(17, 1, 2, '2016-10-21 18:20:38'),
(18, 1, 2, '2016-10-21 18:20:38'),
(19, 1, 2, '2016-10-21 18:20:38'),
(20, 1, 2, '2016-10-21 18:20:38'),
(21, 1, 2, '2016-10-21 18:20:38'),
(22, 1, 2, '2016-10-21 18:20:38'),
(23, 1, 2, '2016-10-21 18:20:38'),
(24, 1, 2, '2016-10-21 18:20:38'),
(25, 1, 2, '2016-10-21 18:20:38'),
(26, 1, 2, '2016-10-21 18:20:38'),
(27, 1, 2, '2016-10-21 18:20:38'),
(28, 1, 3, '2016-10-21 18:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `idfeed` int(11) NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `mark` tinyint(1) DEFAULT '0',
  `posts_idposts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `idposts` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `poster` varchar(90) DEFAULT NULL,
  `info` mediumtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `power_account_idpower_account` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`idposts`, `title`, `poster`, `info`, `created_at`, `power_account_idpower_account`) VALUES
(1, 'Testing', NULL, 'Testing', '2016-10-21 13:27:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `power_account`
--

CREATE TABLE `power_account` (
  `idpower_account` int(11) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `banner` varchar(90) DEFAULT NULL,
  `post_limit` int(11) NOT NULL DEFAULT '200',
  `created_at` timestamp NULL DEFAULT NULL,
  `description` longtext,
  `address` varchar(55) DEFAULT NULL,
  `last_publish` timestamp NULL DEFAULT NULL,
  `users_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `power_account`
--

INSERT INTO `power_account` (`idpower_account`, `brand`, `banner`, `post_limit`, `created_at`, `description`, `address`, `last_publish`, `users_id`) VALUES
(1, 'bob', NULL, 200, '2016-10-21 06:02:42', NULL, NULL, '2016-10-21 06:02:42', 2),
(4, 'Pabugnawan', NULL, 2000, '2016-10-21 18:34:19', NULL, NULL, '2016-10-21 18:34:19', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Schwa ', 'joshv0611@yahoo.com', '$2y$10$8g/E4QtVqBh14oU3cuwe9OrcS60mO37vLXbZXGrtVoq3A3Z2fCHcC', 'OnL0sbPZF6UmY450JxoGNspVM6U8RQcqbFr88Zq0jbLUhaQQvmk6P2ntyUgD', '2016-10-20 15:31:07', '2016-10-21 18:39:06'),
(2, 'alunan', 'rin@yahoo.com', '$2y$10$a6auypGev7Z8lxFJ9E3O4.klJYVzgsnpDxbWYv1YJhu5K70EbHSWe', 'u8yMCjuEEVtH3hWR3cqGwB2I7Ucf8dUsK1r7QOHV70fniXXaGA9iBFLDs83B', '2016-10-21 00:36:18', '2016-10-21 18:20:44'),
(3, 'Camille', 'camille@yahoo.com', '$2y$10$WgF7..kvxTc.Fl4mkRxG/eW9/FPIgjIlX3kf21uwZ06GXdIbwqMMu', 'FpbKwaBNtFQGkp36lZRYvMwmS4XMOy4kG3js6NGbVXnKUd2jDS1y0e5Z7c0k', '2016-10-21 18:30:26', '2016-10-21 18:30:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`idadmin_account`),
  ADD KEY `fk_admin_account_users1_idx` (`users_id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`idfavorites`),
  ADD KEY `fk_favorites_users1_idx` (`users_id`),
  ADD KEY `fk_favorites_power_account1_idx` (`power_account_idpower_account`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`idfeed`),
  ADD KEY `fk_feed_users1_idx` (`users_id`),
  ADD KEY `fk_feed_posts1_idx` (`posts_idposts`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`idposts`),
  ADD KEY `fk_posts_power_account1_idx` (`power_account_idpower_account`);

--
-- Indexes for table `power_account`
--
ALTER TABLE `power_account`
  ADD PRIMARY KEY (`idpower_account`),
  ADD UNIQUE KEY `name_UNIQUE` (`brand`),
  ADD KEY `fk_power_account_users_idx` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `idadmin_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `idfavorites` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `idposts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `power_account`
--
ALTER TABLE `power_account`
  MODIFY `idpower_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD CONSTRAINT `fk_admin_account_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `fk_favorites_power_account1` FOREIGN KEY (`power_account_idpower_account`) REFERENCES `power_account` (`idpower_account`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_favorites_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `feed`
--
ALTER TABLE `feed`
  ADD CONSTRAINT `fk_feed_posts1` FOREIGN KEY (`posts_idposts`) REFERENCES `posts` (`idposts`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_feed_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_posts_power_account1` FOREIGN KEY (`power_account_idpower_account`) REFERENCES `power_account` (`idpower_account`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `power_account`
--
ALTER TABLE `power_account`
  ADD CONSTRAINT `fk_power_account_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
