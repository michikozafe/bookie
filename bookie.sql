-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 04:35 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookie`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `img` varchar(255) DEFAULT 'https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `isbn`, `author`, `genre`, `year`, `img`) VALUES
(1, 'Peter Pan', 'SN134567NN', 'J.M. Barrie', 'Kids', 2015, '../assets/images/1566481871.png'),
(2, 'The Little Prince', 'RP008567ZZ', 'Antoine de Saint-Exupery', 'Kids', 2017, '../assets/images/1566482092.jpg'),
(3, 'Sketchbook Dares', 'PO688522TT', 'Laura Lee Gulledge', 'Arts', 2018, '../assets/images/1566482231.jpg'),
(4, 'All About Cake', 'DN987544PP', 'Christina Tosi', 'Food', 2018, '../assets/images/1566483104.jpg'),
(5, 'Bills Everyday Asian', 'TS098765BB', 'Bill Granger', 'Food', 1978, '../assets/images/1566483842.jpg'),
(20, 'Cribsheet', 'UY789652PP', 'Emily Oster', 'Family', 2019, '../assets/images/1566483947.jpg'),
(21, 'Emotional Intelligence', 'OP906667NN', 'Daniel Goleman', 'Health', 1996, '../assets/images/1566484074.jpg'),
(22, 'Essential Glow', 'BN999643XV', 'Stephanie Gerber', 'Health', 2017, '../assets/images/1566484291.jpg'),
(23, 'Auggie & Me', 'AM888559MN', 'R.J. Palacio', 'Kids', 2015, '../assets/images/1566484389.jpg'),
(24, 'Dog Man', 'DM992212GH', 'Dav Pilkey', 'Kids', 2019, '../assets/images/1566484494.jpg');

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
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
