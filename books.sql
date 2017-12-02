-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 07:18 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slim_api_practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_title` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `amazon_url` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_title`, `author`, `amazon_url`) VALUES
(16, 'Indie Writer Survival Guide', 'Susan Kaye Quinn', 'bla bla'),
(3, 'The Writerâ€™s Journey', 'Vogler', 'bla bla'),
(15, 'Write. Publish. Repeat.', 'Sean Platt and Johnny ', 'bla bla'),
(14, 'On Writing', 'Stephen King', 'bla bla'),
(13, 'Zen in the Art of Writing', 'Ray Bradbury', 'bla bla'),
(12, 'Self-Editing for Fiction Writers', 'Renni Browne and Dave King', 'bla bla'),
(17, 'Story Genius', 'Lisa Cron', 'bla bla'),
(18, 'Steering the Craft', 'Ursula K. LeGuin', 'bla bla'),
(19, 'Steering the Craft', 'Ursula K. LeGuin', 'bla bla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
