-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 14, 2020 at 04:30 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `path` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `path`) VALUES
(36, 'gallery_img-04.jpg', 'https://github.com/saafkhallid/Portfolio'),
(42, 'gallery_img-05.jpg', 'https://www.google.com/'),
(43, 'gallery_img-02.jpg', 'https://www.google.com/'),
(38, 'gallery_img-05.jpg', 'https://www.youtube.com/playlist?list=PLJAFEg3vkcQOsIqI5mzirso0lkbnGlaAu'),
(39, 'git-logo_bv0ydu.jpg', 'https://www.youtube.com/playlist?list=PLJAFEg3vkcQOsIqI5mzirso0lkbnGlaAu'),
(40, 'gallery_img-05.jpg', 'https://github.com/saafkhallid/Portfolio'),
(41, 'gallery_img-05.jpg', 'https://github.com/saafkhallid/Portfolio');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `service_image` text NOT NULL,
  `service_titre` varchar(100) NOT NULL,
  `service_text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_image`, `service_titre`, `service_text`) VALUES
(27, 'google-docs.png', 'support', '        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sint architecto doloribus pariatur eum, tempora assumenda laudantium obcaecati natus repellendus in necessitatibus corrupti odio vitae quibusdam fuga explicabo. Iusto, illo.'),
(28, 'idea (1).png', 'support', '        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sint architecto doloribus pariatur eum, tempora assumenda laudantium obcaecati natus repellendus in necessitatibus corrupti odio vitae quibusdam fuga explicabo. Iusto, illo.'),
(33, 'idea (1).png', 'support', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sint architecto doloribus pariatur eum, tempora assumenda laudantium obcaecati natus repellendus in necessitatibus corrupti odio vitae quibusdam fuga explicabo. Iusto, illo'),
(35, 'idea.png', 'support', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sint architecto doloribus pariatur eum, tempora assumenda laudantium obcaecati natus repellendus in necessitatibus corrupti odio vitae quibusdam fuga explicabo. Iusto, illo.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'khalid', '$2y$10$t7gFR.RPQxQ/S0PQhWfA7uX2jRuM9Z4rzTsTuO8KG8KGQVRoPzwi6', '2020-08-12 00:15:24'),
(2, 'sana', '$2y$10$44Ni.ll5KAf2uRTdUuzN9OprnbrxTS6AqIAC5jpG8./C/VDXB05Km', '2020-08-12 21:35:37'),
(3, 'hisoka', '$2y$10$S5wCUi6fPqt.wFSOYShMPe9Kvju9SiObTGRiKusc2rl6ntnH7ilWG', '2020-08-12 21:37:10'),
(4, 'khalidsaaf', '$2y$10$21VuwQfqo5wiCwROfbzjLOe4fOYdzGq74I.Q.TYzaTU43zCjbrw62', '2020-08-12 21:42:30'),
(5, 'imanesaaf', '$2y$10$qjrglJ1lxcdN75NH0p66yuGDDtmtqbWmFBDlVHKoE2hLX3iFc6KMO', '2020-08-12 23:26:27'),
(6, 'ahmedsaaf', '$2y$10$EZSs5Np3cZPEmyf9JzSA1OSpCCXyU2w3Y.HFpydC5QCfKgM9xbTWy', '2020-08-14 00:04:12'),
(7, 'salma rachid', '$2y$10$9PNylAjcLkm8hBCtT.dVOeayU3QM1.iXK/ukJIHGB1UthVWZL69ym', '2020-08-16 00:53:48'),
(8, 'hassan saaf', '$2y$10$DqbZhAAbUBTVVzs1O.MbDuce4nQ5gmdEHkXqMMtfudawXRsYd5oVi', '2020-08-18 17:27:18'),
(9, 'hirochi', '$2y$10$VOq7mbu/bj.3IBPjLHYopu8rTD/knEvVGmEma/TvsnaS7ACEB8rU6', '2020-08-18 17:34:20'),
(10, 'achraf', '$2y$10$QWmpMVpOv5YYeFu7Bmid5OVVuMtWeWu5yRwvgHpPDXsmtbLDRDTou', '2020-09-11 23:31:14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
