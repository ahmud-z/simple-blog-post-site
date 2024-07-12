-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 08:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posts_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_title` varchar(255) DEFAULT NULL,
  `post_contents` longtext NOT NULL,
  `is_public` tinyint(2) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post_title`, `post_contents`, `is_public`, `file_name`) VALUES
(19, 1, 'The Power of Kindness', 'Kindness is a universal language that transcends barriers and  Stay informed and curious about the latest trends to understand how AI will impact our world.\n\n touches hearts.', 1, 'Default_full_earth_from_deep_space_blue_hue_realistic_smooth_1-gigapixel-standard-scale-4_00x.jpg'),
(22, 1, 'How Small Changes Lead to Big Results', 'Habits shape our daily lives and determine our long-term success. By making small, consistent changes, we can create powerful habits that drive us toward our goals. Start by identifying one small change you can make today, and commit to it.\r\n\r\n', 1, 'Default_an_asteroid_orbiting_the_earth_realistic_smooth_lighti_2 (2)-gigapixel-standard-scale-4_00x.jpg'),
(24, 1, 'My First Blog About Cybersecurity', 'With the increasing amount of time we spend online, cybersecurity is more important than ever. Protect yourself by using strong, unique passwords for different accounts, enabling two-factor authentication, and being cautious of phishing scams.', 1, ''),
(25, 1, 'Benefits and Challenges', 'Remote work has become a norm for many, offering flexibility and work-life balance. However, it also comes with challenges such as isolation and difficulty in separating work from personal life.', 1, 'Default_A_Turtles_swims_alone_in_the_deep_ocean_0-gigapixel-standard-scale-4_00x.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Ahmudul Hossain', 'abc@com', '123'),
(7, 'admin', 'xyz@com', '123456'),
(8, 'tanim', 'a@com', '123456'),
(9, 'admin', 'admin@com', '123'),
(10, 'user1', 'user1@com', '123'),
(11, 'user2', 'user2@com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
