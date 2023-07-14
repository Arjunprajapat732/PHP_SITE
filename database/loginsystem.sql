-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 07:31 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginsystem`
--

CREATE TABLE `loginsystem` (
  `id` int(11) NOT NULL,
  `first-name` text NOT NULL,
  `last-name` text NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `created-at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginsystem`
--

INSERT INTO `loginsystem` (`id`, `first-name`, `last-name`, `email`, `password`, `created-at`) VALUES
(1, 'Arjun ', 'Prajapat', 'arjun@itradicals.com', '7626d28b710e7f9e98d9dfbe9bf0d123', '2023-06-11 13:36:46'),
(2, 'devendra', 'Prajapat', 'prajapatarjun732@gmail.com', '7626d28b710e7f9e98d9dfbe9bf0d123', '2023-06-13 21:18:32'),
(3, 'Arjun ', 'Prajapat', 'prajapatarjun73222@gmail.com', 'bdc46a405a6afc390903922f3db2b858', '2023-07-14 22:31:50');

-- --------------------------------------------------------

--
-- Table structure for table `tudo`
--

CREATE TABLE `tudo` (
  `id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `title` varchar(500) NOT NULL,
  `message` varchar(900) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tudo`
--

INSERT INTO `tudo` (`id`, `user_name`, `title`, `message`, `status`, `created_at`) VALUES
(1, '1', 'first', 'arjun', 'incomplete', '2023-06-13 22:01:42'),
(2, '1', 'my name is arjun', 'this', 'incomplete', '2023-06-13 22:02:00'),
(3, '3', 'secound', 'taskthis', 'pending', '2023-07-14 22:41:53'),
(4, '3', 'secound', 'three', 'pending', '2023-07-14 22:42:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginsystem`
--
ALTER TABLE `loginsystem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tudo`
--
ALTER TABLE `tudo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginsystem`
--
ALTER TABLE `loginsystem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tudo`
--
ALTER TABLE `tudo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
