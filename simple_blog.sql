-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Jul 21, 2023 at 08:59 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_entry`
--

DROP TABLE IF EXISTS `blog_entry`;
CREATE TABLE IF NOT EXISTS `blog_entry` (
  `entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `entry_text` text,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`entry_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_entry`
--

INSERT INTO `blog_entry` (`entry_id`, `title`, `entry_text`, `date_created`) VALUES
(1, 'news 1', 'This is news1 Entry.', '2023-07-18 08:32:58'),
(6, 'blog news 7', '$exceptionMessage = \"<p>You tried to run this sql: $sql <p>\r\n<p>Exception: $e</p>\";\r\ntrigger_error($exceptionMessage);', '2023-07-21 08:56:45'),
(3, 'news 3', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2023-07-18 08:34:24'),
(4, 'news 4', 'This is New3 data: with \"Double Quotes\".', '2023-07-18 08:50:31'),
(5, 'blog news 6', '$exceptionMessage = \"<p>You tried to run this sql: $sql <p>\r\n<p>Exception: $e</p>\";\r\ntrigger_error($exceptionMessage);', '2023-07-21 07:03:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
