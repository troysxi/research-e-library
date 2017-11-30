-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2017 at 06:52 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `researchdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bsits`
--

CREATE TABLE `bsits` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Faculty_Involved` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Researchers` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Abstract` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bsits`
--

INSERT INTO `bsits` (`id`, `Title`, `Faculty_Involved`, `Researchers`, `Abstract`, `created_at`, `updated_at`) VALUES
(1, 'asdad', 'dsa', 'asd', 'asdasds', '2017-10-13 08:35:11', '2017-10-13 08:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `created_at`, `updated_at`) VALUES
(20, 'LEVEL OF AWARENESS ABOUT THE DETERMINAL EFFECTS OF UNHEALTHY LIFESTYLE AMONG THE GRADE 9 STUDENTS OF PAMPANGA HIGH SCHOOL.docx', '67785', '2017-11-23 10:48:13', '2017-11-23 10:48:13'),
(21, 'STUDENTS ARE ENCOURAGE TO WIN A TEAM-ORIENTED SPORTS BUT THEY ARE HANDLED BY A TEACHER WITH NO KNOWLEDGE IN THE SPORT.docx', '68537', '2017-11-23 10:51:07', '2017-11-23 10:51:07'),
(22, 'CONFLICT IN SCHEDULKE OF TRAINING BETWEEN STUDENT- ATHLETES AND THE TEACHERS-COACHES.docx', '67415', '2017-11-23 10:54:40', '2017-11-23 10:54:40'),
(23, 'development of an enrollemnt system with barcode.docx', '67668', '2017-11-23 10:59:38', '2017-11-23 10:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Faculty_Involved` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Researchers` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Abstract` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin123', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_09_23_035641_create_items_table', 1),
('2017_09_28_020357_create_bsits_table', 1),
('2017_09_29_045754_create_files_table', 1),
('2017_10_02_151854_create_logins_table', 1),
('2017_10_14_200000_create_records_table', 1),
('2017_10_13_165255_create_records_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Abstract` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `Faculty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Researcher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `Title`, `Abstract`, `Faculty`, `Researcher`, `created_at`, `updated_at`) VALUES
(131, 'LEVEL OF AWARENESS ABOUT THE DETERMINAL EFFECTS OF UNHEALTHY LIFESTYLE AMONG THE GRADE 9 STUDENTS OF PAMPANGA HIGH SCHOOL', '\r\nA lifestyle is a mere reflection of person’s way of life. Most of the aspects of lifestyle are voluntary. An individual’s healthy lifestyle choices play a vital role in lowering the risks and negative effects of suffering from illness, poor social skills, and low level of productivity in school or in everyday life.\r\n\r\n\r\nUnhealthy lifestyle is manifested thru engagement in activities that are known to be harmful to one’s health. Vices, unbalances diet and lack of exercise are just some of the attributes of unhealthy lifestyle that lead to several detrimental effects in the different aspects of an individual.\r\n\r\n\r\nIt has becoming increasingly clear that millennia’s’ high perceived susceptibility to the addictive quality of some video games and internet use; cravings for junk foods; lack of proper and regular exercise; decreased socialization among students; and the impact on their behaviors, coping skills and physical fitness usually result to isolation, depression and lifestyle diseases.\r\n\r\n\r\nThe main causes of the problem are lack of awareness and motivational factors to change the health behavior of students. Hence, teachers should make use of effective pedagogical approaches and apply appropriate health theories/models to addr0ess the problem.\r\n', 'EDUCATION', 'Educ Students', '2017-11-22 16:00:00', '2017-11-23 10:47:27'),
(132, 'STUDENTS ARE ENCOURAGE TO WIN A TEAM-ORIENTED SPORTS BUT THEY ARE HANDLED BY A TEACHER WITH NO KNOWLEDGE IN THE SPORT', '\r\nTeam sport are a good sport that is played with five (5) or more players especially if it is played by the students which is good. They have a good potential of a good athlete if they have the proper training. Cut sometimes, they are paired with a teacher-coach who has no knowledge to the sport itself. And that pairing affects both the players and the teacher-coach negatively.\r\n\r\nStudent who are really good in sports should have the right to be honed and to improve for them to be a good and rightful competitive athlete.\r\n\r\nIn this study, it will focus on the relationship of the two aspects. The quality of performance of the teacher that acts as a coach. The first set of the factors are, fundamental competencies, core training, present standing in school meets, quality of performance and the teacher’s eagerness. Then the second set of factors are coaching skills, teacher’s motivation, encouragement skills, preparation of training program and the sport competition.\r\n\r\nThis study will be conducted with the sets of theories that have been presented to the chapter II of this study. The study claims the four theories that affect the quality of performance of the teachers that acts as a trainer and also a coach to their athlete. With the four theories that can be should to the study, it will be a great gain to be added to it. Also, a group of related literature will be presented as well together with its citation to serve as background in the composed questionnaire that will be presented and can be viewed in the chapter III of this study.\r\n\r\nThere will be questionnaire to be given to the sets of respondents that correspond to the need of the study. It will be given to the athletes of Dalandan National High School. There the athletes will be asked for some of the basic or primary information that will serve as a profile for the researcher to be consumed as a basis for the study. Next, a Fifty (50) Item part II questionnaire toppled with shading only answers to be answered by the respondents based from their own observation, experience and understanding.\r\n\r\nAfterwards, these will be tailed one by one, according to the rate per item of the questionnaire. Each of the items will be interpreted using the Big Five Theory from 1, which is the lowest rate per item and 5 which serves as the highest of all rate.\r\n\r\nLastly, from the interpretation there will derive a suggested course of action per each factor of I and II from the significant questions to be done as a solution for the study itself.\r\n', 'Education', 'Educ. Students', '2017-11-22 16:00:00', '2017-11-23 10:50:20'),
(133, 'CONFLICT IN SCHEDULKE OF TRAINING BETWEEN  STUDENT- ATHLETES AND THE TEACHERS-COACHES', 'Scheduling is a touchy issue, needing care to prevent unnecessary outcomes. It is difficult for some athletes to train at the same time attend their classes regularly. As for the teacher-coach, their primary obligation is to meet their classes regularly and should find time as well to meet their players.\r\n\r\nAcademic conflicts always take precedence. After all, student-athlete are in school to get an education and meet all their academic requirements. On the scheduling aspects, academics are always the priority of the students. Teacher-coaches realize that training makes better players. Unfortunately, because of their teaching tasks, conflicts in schedule of training arise.\r\n\r\nMAPEH teachers are hired typically to teach at the same time to coach. Some see themselves as teacher and some more as coaches. The conflict to perform both roles can cause conflict, such as finding time and energy to perform both task as well.\r\n', 'Education', 'Educ. Students', '2016-10-22 16:00:00', '2017-11-23 10:54:24'),
(134, 'DEVELOPMENT OF AN ENROLLMENT SYSTEM WITH BARCODE TECHNOLOGY FOR CIEVEROSE COLLEGE INC.', 'Due to the manual system of Cieverose College incorporated the process of enrollment in the school done hand by hand and takes a lot of time to accommodate the growing population of students in CCI, resulting to a laborious work.\r\n\r\nThe proponents lead to the development of enrollment system with barcode technology. Automation of the system will give a big help in terms of storing and retrieving of data, also lessen the paper works and processing of data simultaneously will be easy. Automation also of the system could help for the betterment of the enrollment processes.\r\n\r\nThe programming platform is Visual Basic and the database is Microsoft Access and the Software Development Life Cycle used as method in the system development.\r\n\r\nThe proponents of evaluated 20 Information Technology students, 3 professionals and CCI staffs to determine the level of acceptability. To evaluate the acceptability of the system the proponents used a survey questionnaire. The respondents evaluated the acceptability of the system in the terms of Functionality, Reliability, Usability, Maintainability, Portability and Training and Documentation. The functionality has a mean of 4.10, the reliability has 4.00, the usability has 4.24, the maintainability has 4.22, the portability has 4.02, the training and documentation has 4.23 and the overall weighted mean is 4.14, which means the system is very acceptable when interpreted.\r\n', 'EDUCATION', 'BSIT', '2016-03-14 16:00:00', '2017-11-23 10:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bsits`
--
ALTER TABLE `bsits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bsits`
--
ALTER TABLE `bsits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
