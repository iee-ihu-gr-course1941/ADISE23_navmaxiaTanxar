-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 17 Ιαν 2024 στις 11:33:31
-- Έκδοση διακομιστή: 10.4.24-MariaDB
-- Έκδοση PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `navmaxia`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `logged_in` varchar(10) NOT NULL,
  `player_turn` varchar(10) NOT NULL,
  `game_status` varchar(10) NOT NULL,
  `ships` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `ships_hits` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `logged_in`, `player_turn`, `game_status`, `ships`, `ships_hits`) VALUES
(1, 'player1', '$2y$10$QdIcCkfVH2/NYKZJ6Dnbi.u61322yWuM6yBoTHhhB12A88cdrzlDy', '1', 'no', 'left', '{\"ships\":[{\"id\":\"ship3\",\"coordinates\":[{\"x\":\"B\",\"y\":5},{\"x\":\"C\",\"y\":5},{\"x\":\"D\",\"y\":5}]},{\"id\":\"ship2\",\"coordinates\":[{\"x\":\"D\",\"y\":1},{\"x\":\"D\",\"y\":2}]},{\"id\":\"ship1\",\"coordinates\":[{\"x\":\"B\",\"y\":2}]}]}', '{\"hits\":[{\"x\":\"A\",\"y\":3},{\"x\":\"D\",\"y\":1},{\"x\":\"C\",\"y\":4},{\"x\":\"B\",\"y\":1},{\"x\":\"B\",\"y\":2},{\"x\":\"B\",\"y\":3},{\"x\":\"C\",\"y\":2}]}'),
(2, 'player2', '$2y$10$LdoQdjY2M5t75QtcqSfcC.g8Q7wqTN2YBJ5VKmOrx32xUoUVAE4m.', '1', 'yes', 'left', '{\"ships\":[{\"id\":\"ship3\",\"coordinates\":[{\"x\":\"D\",\"y\":3},{\"x\":\"D\",\"y\":4},{\"x\":\"D\",\"y\":5}]},{\"id\":\"ship2\",\"coordinates\":[{\"x\":\"B\",\"y\":1},{\"x\":\"B\",\"y\":2}]},{\"id\":\"ship1\",\"coordinates\":[{\"x\":\"A\",\"y\":4}]}]}', '{\"hits\":[{\"x\":\"A\",\"y\":1},{\"x\":\"C\",\"y\":2},{\"x\":\"D\",\"y\":4},{\"x\":\"A\",\"y\":4},{\"x\":\"C\",\"y\":3}]}');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
