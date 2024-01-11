-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2024 at 10:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `navmaxia`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `logged_in` varchar(10) NOT NULL,
  `player_turn` varchar(10) NOT NULL,
  `in_game` varchar(10) NOT NULL,
  `ships` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`ships`)),
  `ships_hits` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`ships_hits`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `logged_in`, `player_turn`, `in_game`, `ships`, `ships_hits`) VALUES
(1, 'player1', '$2y$10$QdIcCkfVH2/NYKZJ6Dnbi.u61322yWuM6yBoTHhhB12A88cdrzlDy', '1', 'no', '0', '{\"ships\":[{\"id\":\"ship3\",\"coordinates\":[{\"x\":\"A\",\"y\":5},{\"x\":\"B\",\"y\":5},{\"x\":\"C\",\"y\":5}]},{\"id\":\"ship2\",\"coordinates\":[{\"x\":\"B\",\"y\":2},{\"x\":\"C\",\"y\":2}]},{\"id\":\"ship1\",\"coordinates\":[{\"x\":\"E\",\"y\":4}]}]}', '{\"hits\":[{\"x\":\"C\",\"y\":3},{\"x\":\"A\",\"y\":1},{\"x\":\"A\",\"y\":2},{\"x\":\"B\",\"y\":5},{\"x\":\"C\",\"y\":1}]}'),
(2, 'player2', '$2y$10$LdoQdjY2M5t75QtcqSfcC.g8Q7wqTN2YBJ5VKmOrx32xUoUVAE4m.', '1', 'yes', '0', '{\"ships\":[{\"id\":\"ship3\",\"coordinates\":[{\"x\":\"A\",\"y\":3},{\"x\":\"A\",\"y\":4},{\"x\":\"A\",\"y\":5}]},{\"id\":\"ship2\",\"coordinates\":[{\"x\":\"C\",\"y\":4},{\"x\":\"D\",\"y\":4}]},{\"id\":\"ship1\",\"coordinates\":[{\"x\":\"E\",\"y\":1}]}]}', '{\"hits\":[{\"x\":\"D\",\"y\":3},{\"x\":\"A\",\"y\":2},{\"x\":\"D\",\"y\":2},{\"x\":\"B\",\"y\":2}]}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
