-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 12, 2023 at 02:01 PM
-- Server version: 10.3.39-MariaDB-0+deb10u1
-- PHP Version: 7.3.31-1~deb10u5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `racha2087329`
--

-- --------------------------------------------------------

--
-- Table structure for table `axes`
--

CREATE TABLE `axes` (
  `axe_id` int(11) NOT NULL,
  `axe_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `axes`
--

INSERT INTO `axes` (`axe_id`, `axe_name`) VALUES
(1, 'Financial'),
(2, 'Personal'),
(3, 'Family'),
(4, 'Health'),
(5, 'Entertainment'),
(6, 'Spiritual'),
(7, 'Social'),
(8, 'Academic'),
(9, 'Cultural');

-- --------------------------------------------------------

--
-- Table structure for table `habits`
--

CREATE TABLE `habits` (
  `habit_id` int(11) NOT NULL,
  `habit_name` varchar(100) NOT NULL,
  `time_per_day_min` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `path_id` int(11) DEFAULT NULL,
  `axe_id` int(11) DEFAULT NULL,
  `days` int(11) NOT NULL,
  `atchived_days` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `habits`
--

INSERT INTO `habits` (`habit_id`, `habit_name`, `time_per_day_min`, `user_id`, `path_id`, `axe_id`, `days`, `atchived_days`) VALUES
(1, 'marcher', 30, 2, 1, 4, 30, 2),
(2, 'deponse mois largent', 1, 2, 1, 1, 30, 1),
(3, 'ecnomise 1 euro', 1, 4, 2, 1, 30, 2),
(4, 'walking', 30, 4, 3, 4, 30, 3),
(5, 'basketball with friends', 20, 4, 3, 5, 30, 1),
(6, 'listen music classic', 30, 6, 4, 6, 30, 5),
(7, 'draw 1 drawing', 30, 8, 6, 2, 30, 4),
(8, 'faire du velo', 30, 9, 8, 4, 30, 4),
(9, 'randonnee avec des amis', 20, 9, 8, 7, 30, 2);

-- --------------------------------------------------------

--
-- Table structure for table `paths`
--

CREATE TABLE `paths` (
  `path_id` int(11) NOT NULL,
  `path_name` varchar(100) NOT NULL,
  `details` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `axe_id1` int(11) DEFAULT NULL,
  `axe_id2` int(11) DEFAULT NULL,
  `axe_id3` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paths`
--

INSERT INTO `paths` (`path_id`, `path_name`, `details`, `user_id`, `axe_id1`, `axe_id2`, `axe_id3`) VALUES
(1, 'arrete fumer', 'u fhgliu ghsid ghlukd ghjfkx ghxfkj hgjh gluif gfij hgdfihi g', 2, 4, 1, 3),
(2, 'gaining money', 'jhesg krseru glsiugy sui fhgsukgtsrj ghlsri hkrjthgdrjtgirltjojrit', 4, 1, 7, 2),
(3, 'live a healthy life style ', 'kushy lgisrhgihgbkdihfgkjdhfkjbndfmgv', 4, 4, 2, 5),
(4, 'larn musique', 'jd hglihtgixfg.kbxf,g', 6, 6, 4, 7),
(5, 'creative writing ', 'cghdrh drjydy', 8, 2, 5, 7),
(6, 'drawing', 'd ghslig hkdjg ;lixjhidothj uidoft rho', 8, 2, 7, 4),
(8, 'migrir', 'd khg,kjdghkxdjfghjdf', 9, 4, 7, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `last_name`, `first_name`, `birth_date`, `email`, `password`) VALUES
(1, 'gerard', '', '1990-04-11', 'william@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$hcVo5kGsxVfvF6iUtrgFKw$z9kCczXdwmNTmmLtQ0Ay5aGaDqaHxT/4SsG2XkMSgCE'),
(2, 'lumir', '', '1985-03-25', 'marie@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$R1V2MzMXhmgBwFYMi7usBA$Ej95BHv898HrIMJuA8m8evhE0NUhjsavT0y9oSDPg1g'),
(3, 'Toto', '', '1980-10-01', 'nancy@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$1oZwU4hoBOCSQZONwnelmQ$4VwD62q9kvvSVREkBBErbbX1UdXsRwLgBqKFbkp81XU'),
(4, 'koulali', '', '2003-04-27', 'hafssa@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$XprKZQ9dNk5hGL5rsc1Xhw$fVMYq5xPM2cJn56QNIib608xO7yf8WppmRmx1e7X9As'),
(5, 'alwafai', '', '1990-08-08', 'nada.alwafai.tr@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$trc/MiWxQpFjJ2uU4vCZ3g$IZ4hr4OT0iEO/Q2oBAqQ45ARpAItoBMD8Es9BS9nC74'),
(6, 'lara', '', '1980-04-04', 'nancyn@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$0qelprq6OVeZmirPYO21jg$dFFo0VeZr8Xdv7++kwIZqF2ZPQwYKqYJNl6QUat0UJw'),
(7, 'toto', 'titi', '2000-05-05', 'toto@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$y0K5ex4DGS9VMeqDUyCOqA$SBUkwkGj81cGQFc+GXzLFuw48D7V1rsMYlUZ7MZ2Wcs'),
(8, 'roro', 'riiiirii', '2000-05-01', 'roro@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$i7i7yUiSHmOASlR3TgjRvg$FHrHfCBzJb2zLStxGZAaBd3wwgoeXxIL+5YL6GiLU6E'),
(9, 'michel', 'michel', '1973-01-10', 'michel@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$VF33fcbAJ6OFRM2XWG7E7g$WIzA5dTYOJJmVLS9wVn/B8u+LBnfsxDbrSpQF4CTsyE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `axes`
--
ALTER TABLE `axes`
  ADD PRIMARY KEY (`axe_id`);

--
-- Indexes for table `habits`
--
ALTER TABLE `habits`
  ADD PRIMARY KEY (`habit_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `path_id` (`path_id`),
  ADD KEY `axe_id` (`axe_id`);

--
-- Indexes for table `paths`
--
ALTER TABLE `paths`
  ADD PRIMARY KEY (`path_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `axe_id1` (`axe_id1`),
  ADD KEY `axe_id2` (`axe_id2`),
  ADD KEY `axe_id3` (`axe_id3`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `axes`
--
ALTER TABLE `axes`
  MODIFY `axe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `habits`
--
ALTER TABLE `habits`
  MODIFY `habit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `paths`
--
ALTER TABLE `paths`
  MODIFY `path_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
