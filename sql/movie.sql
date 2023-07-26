-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 08:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(2) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `role`, `date_created`) VALUES
(1, 'Sunday', 'a@a.com', '123456', 1, '2022-08-17 18:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `movie_booking_info`
--

CREATE TABLE `movie_booking_info` (
  `id` int(30) NOT NULL,
  `movie_info_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `seat_no` int(5) NOT NULL,
  `charge` double NOT NULL,
  `pref` text NOT NULL,
  `pstatus` int(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie_info`
--

CREATE TABLE `movie_info` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `seat_no` int(30) NOT NULL,
  `charge` varchar(30) NOT NULL,
  `status` int(1) NOT NULL,
  `info` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_info`
--

INSERT INTO `movie_info` (`id`, `name`, `seat_no`, `charge`, `status`, `info`, `image`, `date`) VALUES
(1, 'Dragon: The weapon of God', 10, '3000', 0, 'Alex makes an exclusive hit back from the dead to fit against his killers, which happens to be his friends', 'movie-62fd2ca011b5d.jpeg', '2022-08-17 18:00:00'),
(2, 'Khaufnaak Roof', 30, '8000', 0, 'Story is a girl who seeks the blood of her emotional haters, She is a dream walker.', 'movie-62fd2d368763f.jpg', '2022-08-17 18:02:30'),
(3, 'Love Rewired', 20, '6000', 0, 'Seon falls in love with a spy sent to assassinate him', 'movie-62fd2dc98065b.png', '2022-08-17 18:04:57'),
(4, 'Bob&#039;s Berger', 34, '6300', 0, 'Epic cartoon serious of a family reunion from mars', '-movie-62fd2f92cabb1.png', '2022-08-17 18:12:34'),
(5, 'Luck', 22, '9000', 0, 'Lucy finds a cat pet who understands her emotion than anybody around her', '-movie-62fd31496b34d.jpg', '2022-08-17 18:19:53'),
(6, 'Sex Appeal', 42, '8000', 0, 'Jexi finds herself sexual attached to her cousin, she is confused and seeks for escape path', '-movie-62fd322ddb53a.png', '2022-08-17 18:23:41'),
(7, 'Vlad: The Impaler', 70, '15000', 0, 'Vlad who is a hunter hails from the family of kings, He returns back to take what is rightfully his', '-movie-62fd32ae32e1a.jpg', '2022-08-17 18:25:50'),
(8, 'Loser', 37, '11000', 0, 'Khan failed military test 30 times, but sets out to enroll in a war', '-movie-62fd332d76146.jpg', '2022-08-17 18:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_created` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_booking_info`
--
ALTER TABLE `movie_booking_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_info`
--
ALTER TABLE `movie_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `movie_booking_info`
--
ALTER TABLE `movie_booking_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movie_info`
--
ALTER TABLE `movie_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
