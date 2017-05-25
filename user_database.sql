-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 07:31 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(11) NOT NULL,
  `username` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `firstname`, `lastname`) VALUES
(2, 'asdasd', 'asd', 'asd'),
(0, 'admin', 'Philip', 'Zuniga');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `authority` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `address` text NOT NULL,
  `birthDay` int(11) NOT NULL,
  `birthYear` int(11) NOT NULL,
  `birthMonth` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `authority`, `firstname`, `lastname`, `address`, `birthDay`, `birthYear`, `birthMonth`) VALUES
(0, 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1, 'Philip', 'Zuniga', '0', 1, 1, 'January'),
(1, 'paupau', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 0, 'Paulo', 'Santiago', 'Bahay ni Paolo', 31, 1995, 'January'),
(2, 'asdasd', '00ea1da4192a2030f9ae023de3b3143ed647bbab', 1, 'asd', 'asd', 'asd', 12, 123, 'asd'),
(3, 'dsadsa', 'c04ebbb302a98076f6a932b924603625d702405e', 0, 'asd', 'sdasd', 'asd', 12, 1029, 'April');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
