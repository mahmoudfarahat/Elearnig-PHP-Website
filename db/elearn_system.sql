-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 05:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearn_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_relation`
--

CREATE TABLE `cart_relation` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `bought` int(11) NOT NULL,
  `oncart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart_relation`
--

INSERT INTO `cart_relation` (`id`, `course_id`, `student_id`, `bought`, `oncart`) VALUES
(4, 42, 10, 0, 0),
(17, 42, 13, 0, 0),
(19, 43, 13, 0, 0),
(50, 41, 12, 1, 0),
(52, 41, 12, 1, 0),
(53, 47, 12, 1, 0),
(55, 48, 12, 1, 0),
(56, 44, 12, 1, 0),
(58, 42, 12, 1, 0),
(59, 41, 15, 0, 1),
(60, 41, 15, 1, 0),
(61, 42, 15, 1, 0),
(62, 42, 15, 1, 0),
(63, 48, 15, 1, 0),
(64, 48, 15, 1, 0),
(65, 43, 15, 1, 0),
(67, 42, 16, 1, 0),
(68, 48, 16, 1, 0),
(72, 41, 17, 1, 0),
(73, 43, 17, 1, 0),
(74, 42, 17, 1, 0),
(75, 47, 17, 1, 0),
(78, 41, 17, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `cover` char(30) NOT NULL,
  `category` char(20) NOT NULL,
  `target` char(200) NOT NULL,
  `price` int(11) NOT NULL,
  `coupon` char(20) NOT NULL,
  `instructor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `cover`, `category`, `target`, `price`, `coupon`, `instructor_id`) VALUES
(41, 'PHP tech', '7750288361625157367.jpg', 'Back end', 'log in log out', 800, '1000', 40),
(42, 'node js', '15542935801624819546.png', 'Back end', 'nderstand the Javascript and technical concepts behind NodeJS\r\nStructure a Node application in modules', 30, '2000', 38),
(43, 'HTML CSS', '20671105691624916925.png', 'web development', 'you will learn how to design web pages', 40, '1000', 38),
(44, 'HTML', '3490507111624968807.png', 'web development', 'you will learn how to build your own websites', 15, '5000', 38),
(47, 'C Sharp and OOP', '15677241581625099314.png', 'Back end', 'C Sharp and OOP', 30, '1000', 41),
(48, 'laravel', '6850918171625157250.jpg', 'Back end', 'sigin in login', 12, '1000', 42);

-- --------------------------------------------------------

--
-- Table structure for table `course_content`
--

CREATE TABLE `course_content` (
  `id` int(11) NOT NULL,
  `video_topic` char(20) NOT NULL,
  `video_file` char(50) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_content`
--

INSERT INTO `course_content` (`id`, `video_topic`, `video_file`, `course_id`) VALUES
(8, 'anglusds', '13921100271625130211.mp4', 41);

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` int(11) NOT NULL,
  `Name` char(20) NOT NULL,
  `password` char(50) NOT NULL,
  `email` char(30) NOT NULL,
  `Profession` char(20) NOT NULL,
  `About_me` char(200) NOT NULL,
  `Website` char(30) NOT NULL,
  `Twitter` char(50) NOT NULL,
  `Linkedin` char(50) NOT NULL,
  `picture` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `Name`, `password`, `email`, `Profession`, `About_me`, `Website`, `Twitter`, `Linkedin`, `picture`) VALUES
(1, 'sad', 'sadsad', 'sadsa', 'dsad', 'sadsad', 'dsadsa', 'dsadsa', 'dsad', 'sadsad'),
(2, 'Joshua Cardenas', 'ac748cb38ff28d1ea98458b1669573', 'zecicepuqi@mailinator.com', '', '', '', '', '', ''),
(3, 'Echo Craft', 'ac748cb38ff28d1ea98458b1669573', 'juqubebav@mailinator.com', '', '', '', '', '', ''),
(4, 'Lacy Wright', 'ac748cb38ff28d1ea98458b1669573', 'cirum@mailinator.com', '', '', '', '', '', ''),
(5, '', 'da39a3ee5e6b4b0d3255bfef956018', '', '', '', '', '', '', ''),
(6, 'Rhonda Duran', 'ac748cb38ff28d1ea98458b1669573', 'luzuse@mailinator.com', '', '', '', '', '', ''),
(7, 'Rhonda Duran', 'ac748cb38ff28d1ea98458b1669573', 'luzuse@mailinator.com', '', '', '', '', '', ''),
(8, 'Zephr Vance', 'ac748cb38ff28d1ea98458b1669573', 'dijuqahyqo@mailinator.com', '', '', '', '', '', ''),
(9, 'Petra Green', 'ac748cb38ff28d1ea98458b1669573', 'zibiti@mailinator.com', '', '', '', '', '', ''),
(10, '', 'da39a3ee5e6b4b0d3255bfef956018', '', '', '', '', '', '', ''),
(11, '', 'da39a3ee5e6b4b0d3255bfef956018', '', '', '', '', '', '', ''),
(12, '', 'da39a3ee5e6b4b0d3255bfef956018', '', '', '', '', '', '', ''),
(13, 'Griffith Carpenter', 'ac748cb38ff28d1ea98458b1669573', 'zademi@mailinator.com', '', '', '', '', '', ''),
(14, '', 'da39a3ee5e6b4b0d3255bfef956018', '', '', '', '', '', '', ''),
(15, '', 'da39a3ee5e6b4b0d3255bfef956018', '', '', '', '', '', '', ''),
(16, '', 'da39a3ee5e6b4b0d3255bfef956018', '', '', '', '', '', '', ''),
(17, 'Ursa Nielsen', 'ac748cb38ff28d1ea98458b1669573', 'tapikuzos@mailinator.com', '', '', '', '', '', ''),
(18, 'Geraldine Good', 'ac748cb38ff28d1ea98458b1669573', 'mecenytyp@mailinator.com', '', '', '', '', '', ''),
(19, 'Dawn Koch', 'ac748cb38ff28d1ea98458b1669573', 'burecefuk@mailinator.com', '', '', '', '', '', ''),
(20, 'Abel Cooke', 'ac748cb38ff28d1ea98458b1669573', 'fiwopu@mailinator.com', '', '', '', '', '', ''),
(21, 'Erica Sellers', 'ac748cb38ff28d1ea98458b1669573', 'vusadiz@mailinator.com', '', '', '', '', '', ''),
(22, 'Ursula Graves', 'ac748cb38ff28d1ea98458b1669573', 'ganuteno@mailinator.com', '', '', '', '', '', ''),
(23, 'Davis Gates', 'ac748cb38ff28d1ea98458b1669573', 'kimawifemu@mailinator.com', '', '', '', '', '', ''),
(24, 'Brianna Dale', 'ac748cb38ff28d1ea98458b1669573', 'guse@mailinator.com', '', '', '', '', '', ''),
(25, 'Brianna Dale', 'ac748cb38ff28d1ea98458b1669573', 'guse@mailinator.com', '', '', '', '', '', ''),
(26, 'Emerson Hampton', 'ac748cb38ff28d1ea98458b1669573', 'webyby@mailinator.com', '', '', '', '', '', ''),
(27, 'Kane Gaines', 'ac748cb38ff28d1ea98458b1669573', 'lutiqody@mailinator.com', '', '', '', '', '', ''),
(28, 'Martha Vang', 'ac748cb38ff28d1ea98458b1669573', 'zobyru@mailinator.com', '', '', '', '', '', ''),
(29, 'Suki Spears', 'ac748cb38ff28d1ea98458b1669573', 'kuquno@mailinator.com', '', '', '', '', '', ''),
(30, 'Larissa Reese', 'ac748cb38ff28d1ea98458b1669573', 'kudax@mailinator.com', '', '', '', '', '', ''),
(31, 'Xerxes Joseph', 'ac748cb38ff28d1ea98458b1669573', 'geqydymag@mailinator.com', '', '', '', '', '', ''),
(32, 'Roary Torres', 'ac748cb38ff28d1ea98458b1669573', 'tuxesej@mailinator.com', '', '', '', '', '', ''),
(33, 'Christopher Wilkerso', '7c4a8d09ca3762af61e59520943dc2', 'test2@test.com', '', '', '', '', '', ''),
(34, 'Dolan Carroll', 'e10adc3949ba59abbe56e057f20f88', 'test3@test.com', '', '', '', '', '', ''),
(35, 'Dennis Leblanc', '7c4a8d09ca3762af61e59520943dc2', 'test4@test.com', '', '', '', '', '', ''),
(36, 'Martena Atkins', 'f7c3bc1d808e04732adf679965ccc3', 'test5@test.com', '', '', '', '', '', ''),
(37, 'Salvador Morton', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'me@me.com', 'fdfdsfds', '', '', '', '', ''),
(38, 'Mahmoiud', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'test9@test.com', 'backend developer', 'I\'m a web developer who is passionate about teaching and helping people understand the core concepts of web development and other technologies.', 'https://github.com/mahmoudfara', 'https://www.youtube.com/', 'https://www.linkedin.com/in/mahmoud-farahat-a03857', '14358886351624819364.png'),
(39, 'Ahmed', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'teacher@test.com', '', '', '', '', '', ''),
(40, 'Mahmoud Farahat', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'mahmoud@test.com', 'MEAN STACK develpoer', '', '', '', '', '8330839011624790936.png'),
(41, 'Omar Mahomed', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'test10@test.com', '', '', '', '', '', '2664887921625098842.jpg'),
(42, 'ahmed', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'teacher2@test.com', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `reviews` char(250) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `reviews`, `student_id`, `course_id`) VALUES
(1, 'this course is so perfect', 12, 42),
(2, 'this cousre is gooooooooood', 10, 42),
(3, 'dsadsad', 10, 42),
(20, '', 12, 42),
(21, '', 12, 42),
(22, 'good course', 12, 42),
(23, '', 12, 42),
(24, 'hello', 12, 42),
(25, 'dsds', 12, 42),
(26, 'good coursedsds', 12, 42),
(27, 'asdsadsa', 12, 42),
(28, 'Dasdsadasd', 12, 42),
(29, 'aaaaa', 12, 42),
(30, 'sfgsdg', 12, 42),
(31, 'hello', 12, 41),
(32, 'this is a very good course', 12, 41),
(33, 'yes', 12, 41),
(34, 'this course is good', 12, 41);

-- --------------------------------------------------------

--
-- Table structure for table `studends_courses`
--

CREATE TABLE `studends_courses` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `email` char(30) NOT NULL,
  `password` char(50) NOT NULL,
  `picture` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`, `picture`) VALUES
(1, 'Ursula Graves', 'ganuteno@mailinator.com', 'ac748cb38ff28d1ea98458b1669573', NULL),
(2, 'Ainsley Miles', 'depegenuf@mailinator.com', 'ac748cb38ff28d1ea98458b1669573', NULL),
(3, 'Davis Gates', 'kimawifemu@mailinator.com', 'ac748cb38ff28d1ea98458b1669573', NULL),
(4, 'Illana Conway', 'mywaduqal@mailinator.com', 'ac748cb38ff28d1ea98458b1669573', NULL),
(5, 'Keely Fox', 'hiwizukoz@mailinator.com', 'ac748cb38ff28d1ea98458b1669573', NULL),
(6, 'Armando Graves', 'java@mailinator.com', 'ac748cb38ff28d1ea98458b1669573', NULL),
(7, 'Armando Graves', 'java@mailinator.com', 'ac748cb38ff28d1ea98458b1669573', NULL),
(8, 'Kellie Wilkins', 'wydi@mailinator.com', 'ac748cb38ff28d1ea98458b1669573', NULL),
(9, 'Jeanette Reynolds', 'locuwyz@mailinator.com', 'ac748cb38ff28d1ea98458b1669573', NULL),
(10, 'Sopoline Mcfarland', 'test@test.com', '7c4a8d09ca3762af61e59520943dc2', NULL),
(12, 'Ali Tamer', 'student@test.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '13564411781624902650.png'),
(13, 'omar ali', 'omar@test.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL),
(14, 'ali ahmed', 'student2@test.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL),
(15, 'test', 'test@test.test', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL),
(16, 'mona', 'mona@mona.mona', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL),
(17, 'hello Herman', 'on@on.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2505644351625237379.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_relation`
--
ALTER TABLE `cart_relation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructor_id` (`instructor_id`);

--
-- Indexes for table `course_content`
--
ALTER TABLE `course_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `studends_courses`
--
ALTER TABLE `studends_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_relation`
--
ALTER TABLE `cart_relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `course_content`
--
ALTER TABLE `course_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `studends_courses`
--
ALTER TABLE `studends_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_relation`
--
ALTER TABLE `cart_relation`
  ADD CONSTRAINT `course_id` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_id` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `instructorRelation` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_content`
--
ALTER TABLE `course_content`
  ADD CONSTRAINT `course_content_relation` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `course_review_relation` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `studnet_review_relation` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studends_courses`
--
ALTER TABLE `studends_courses`
  ADD CONSTRAINT `course_relation` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_relation` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
