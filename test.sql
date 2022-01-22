-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 21 Ιαν 2022 στις 10:12:14
-- Έκδοση διακομιστή: 10.4.22-MariaDB
-- Έκδοση PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `test`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `test2`
--

CREATE TABLE `test2` (
  `Submit_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Vessel` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `e_vessel` varchar(20) NOT NULL,
  `Evonews` varchar(20) NOT NULL,
  `Outlook` varchar(20) NOT NULL,
  `PMS` varchar(20) NOT NULL,
  `Findaport` varchar(20) NOT NULL,
  `Hydrus` varchar(20) NOT NULL,
  `Voyager` varchar(20) NOT NULL,
  `Loading_pc` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `test2`
--

INSERT INTO `test2` (`Submit_Date`, `Vessel`, `Email`, `e_vessel`, `Evonews`, `Outlook`, `PMS`, `Findaport`, `Hydrus`, `Voyager`, `Loading_pc`, `message`) VALUES
('2022-01-20 21:00:53', 'Cape Syros', 'kennedy@cape.gr', 'Work', 'Work', 'Work', 'Work', 'Work', 'Work', 'Work', 'Work', ''),
('2022-01-21 09:05:43', 'Cape Kasos', '', '', '', '', '', '', '', '', 'Work', ''),
('2022-01-21 09:07:18', 'Cape Kennedy', 'orient@cape.gr', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
