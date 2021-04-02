-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 09:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inflexion`
--

-- --------------------------------------------------------

--
-- Table structure for table `inflexion_groups`
--

CREATE TABLE `inflexion_groups` (
  `inflexion_group_id` int(11) NOT NULL,
  `inflexion_group_name` varchar(115) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inflexion_inbox`
--

CREATE TABLE `inflexion_inbox` (
  `inflexion_inbox_id` int(11) NOT NULL,
  `inflexion_inbox_owner` varchar(115) NOT NULL,
  `inflexion_inbox_subject` varchar(115) NOT NULL,
  `inflexion_inbox_message` longtext NOT NULL,
  `inflexion_inbox_rcpt` varchar(115) NOT NULL,
  `inflexion_inbox_date` datetime NOT NULL DEFAULT current_timestamp(),
  `inflexion_inbox_read` int(11) NOT NULL,
  `inflexion_inbox_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inflexion_inbox`
--

INSERT INTO `inflexion_inbox` (`inflexion_inbox_id`, `inflexion_inbox_owner`, `inflexion_inbox_subject`, `inflexion_inbox_message`, `inflexion_inbox_rcpt`, `inflexion_inbox_date`, `inflexion_inbox_read`, `inflexion_inbox_type`) VALUES
(65, '57', '1234', '1234', '58', '2021-03-30 07:12:07', 0, 1),
(66, '57', '1234', '1234', '58', '2021-03-30 07:24:12', 0, 0),
(67, '57', '1234', '1234', '58', '2021-03-30 07:24:35', 0, 0),
(68, '57', '1234', '1234', '58', '2021-03-30 07:25:14', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `inflexion_posts`
--

CREATE TABLE `inflexion_posts` (
  `inflexion_post_id` int(11) NOT NULL,
  `inflexion_post_message` longtext NOT NULL,
  `inflexion_post_timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `inflexion_post_poster` int(11) NOT NULL,
  `inflexion_post_like` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inflexion_posts`
--

INSERT INTO `inflexion_posts` (`inflexion_post_id`, `inflexion_post_message`, `inflexion_post_timestamp`, `inflexion_post_poster`, `inflexion_post_like`) VALUES
(22, 'Hello! My first post!', '2021-03-27 12:33:44', 57, 1),
(23, 'Post again!!!!', '2021-03-28 01:43:48', 58, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inflexion_test_answers`
--

CREATE TABLE `inflexion_test_answers` (
  `inflexion_answer_id` int(11) NOT NULL,
  `inflexion_answer_choice` varchar(115) NOT NULL,
  `inflexion_answer_test` int(11) NOT NULL,
  `inflexion_answer_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inflexion_test_answers`
--

INSERT INTO `inflexion_test_answers` (`inflexion_answer_id`, `inflexion_answer_choice`, `inflexion_answer_test`, `inflexion_answer_value`) VALUES
(1, 'path, paving', 2, 0),
(2, 'path and then paved', 2, 0),
(3, 'path before paving', 2, 0),
(4, 'path paved', 2, 1),
(5, 'NO CHANGE', 3, 0),
(6, 'in the completion of its route.', 3, 0),
(7, 'in twenty-eight minutes.', 3, 0),
(8, 'DELETE the underlined portion and end the sentence with a period.', 3, 1),
(9, 'NO CHANGE', 1, 0),
(10, 'that,', 1, 1),
(11, 'while,', 1, 0),
(12, 'that was,', 1, 0),
(13, 'NO CHANGE', 4, 0),
(14, 'in the field atop the old, wooden shed behind Amy’s house', 4, 0),
(15, 'atop the old, wooden shed in the field behind Amy’s house', 4, 1),
(16, 'behind Amy’s house in the field atop the old, wooden shed', 4, 0),
(17, 'NO CHANGE', 5, 1),
(18, 'distant', 5, 0),
(19, 'populated', 5, 0),
(20, 'historic', 5, 0),
(21, 'NO CHANGE', 6, 0),
(22, 'someone', 6, 0),
(23, 'a potter', 6, 0),
(24, 'OMIT the underlined portion.', 6, 1),
(25, 'support for the essay’s point about Nathan’s love of learning.', 7, 1),
(26, 'a direct link to the previous paragraph.', 7, 0),
(27, 'a humorous description of Nathan’s other interests.', 7, 0),
(28, 'an extensive digression about music', 7, 0),
(29, 'NO CHANGE', 8, 0),
(30, 'are also stepping', 8, 1),
(31, 'have also stepped', 8, 0),
(32, 'will also step', 8, 0),
(33, 'NO CHANGE', 9, 0),
(34, 'person,', 9, 1),
(35, 'person;', 9, 0),
(36, 'person who,', 9, 0),
(37, 'NO CHANGE', 10, 0),
(38, 'her cousin and herself', 10, 0),
(39, 'she and her cousin', 10, 1),
(40, 'her cousin and her', 10, 0),
(41, 'big, round, unusual, blue', 11, 0),
(42, 'old, ornate, English, metal', 11, 0),
(43, 'wide, rectangular, red, cooking', 11, 1),
(44, 'big, old, messy, plastic', 11, 0),
(45, 'pacify', 12, 0),
(46, 'console', 12, 0),
(47, 'mollify', 12, 0),
(48, 'diminish', 12, 1),
(49, 'am forgetting', 13, 0),
(50, 'forget', 13, 0),
(51, 'have forgotten', 13, 1),
(52, 'will be forgetting', 13, 0),
(53, 'Nobody else had stayed there', 14, 0),
(54, 'Nobody else was staying there', 14, 1),
(55, 'Nobody else even stayed there', 14, 0),
(56, 'Nobody else stayed there', 14, 0),
(57, 'on', 15, 0),
(58, 'at', 15, 0),
(59, 'in', 15, 1),
(60, 'by', 15, 0),
(61, 'going up', 16, 0),
(62, 'will have gone up', 16, 0),
(63, 'going to go up', 16, 0),
(64, 'gone up', 16, 1),
(65, 'Ben had been working at the company for five years when he got the promotion.', 17, 1),
(66, 'Steve was mowing the lawn yesterday when I went over there.', 17, 0),
(67, 'I had not known about it until Sarah showed me.', 17, 0),
(68, 'There simply wasn’t enough time for all of the scheduled activities.', 17, 0),
(69, 'illumination/radiance', 18, 0),
(70, 'furlough/recruit', 18, 1),
(71, 'model/representative', 18, 0),
(72, 'mushroom/expand', 18, 0),
(73, 'Mike will enjoy', 19, 0),
(74, 'Mike is going to enjoy', 19, 0),
(75, 'Mike is enjoying', 19, 1),
(76, 'Mike is enjoy', 19, 0),
(77, 'funguses, corps, culs-de-sac, dice', 20, 0),
(78, 'fungi, corps, cul-de-sacs, dice', 20, 0),
(79, 'fungi, corpses, culs-de-sac, dices', 20, 0),
(80, 'fungi, corps, culs-de-sac, dice', 20, 1),
(81, 'furniture/stock', 21, 1),
(82, 'elf/genius', 21, 0),
(83, 'index/means', 21, 0),
(84, 'octopus/pliers', 21, 0),
(85, 'themself', 22, 0),
(86, 'ourselves', 22, 0),
(87, 'themselves', 22, 1),
(88, 'herself', 22, 0),
(89, 'deprived', 23, 0),
(90, 'derived', 23, 1),
(91, 'depraved', 23, 0),
(92, 'devised', 23, 0),
(93, 'permission', 24, 0),
(94, 'consent', 24, 0),
(95, 'allowance', 24, 1),
(96, 'assent', 24, 0),
(97, 'plateaus', 25, 0),
(98, 'plateaux', 25, 1),
(99, 'plateaui', 25, 0),
(100, 'platesau', 25, 0),
(101, 'single, couple, few, many', 26, 0),
(102, 'few, many, couple, single', 26, 0),
(103, 'many, couple, few, single', 26, 0),
(104, 'many, few, couple, single', 26, 1),
(105, '9', 27, 1),
(106, '7', 27, 0),
(107, '11', 27, 0),
(108, '19', 27, 0),
(109, 'scissor', 28, 0),
(110, 'sciss', 28, 0),
(111, 'scissors', 28, 1),
(112, 'implantation', 29, 0),
(113, 'implementation', 29, 1),
(114, 'implication', 29, 0),
(115, 'insemination', 29, 0),
(116, 'effect', 30, 0),
(117, 'affect', 30, 1),
(118, 'infect', 30, 0),
(119, 'accept', 30, 0),
(120, 'sight, site', 31, 0),
(121, 'site, cite', 31, 1),
(122, 'cite, site', 31, 0),
(123, 'sight, cite', 31, 0),
(124, 'convivial ', 32, 0),
(125, 'conscience', 32, 0),
(126, 'conscientious', 32, 1),
(127, 'contrite', 32, 0),
(128, 'farther', 62, 1),
(130, 'farther', 33, 0),
(131, 'further', 33, 1),
(132, 'eminent', 34, 0),
(133, 'imminent', 34, 1),
(134, 'immanent', 34, 0),
(135, 'exceeded', 35, 0),
(136, 'surpassed', 35, 0),
(137, 'transcended', 35, 0),
(138, 'outranked', 35, 1),
(139, 'administrator', 36, 0),
(140, 'advocate', 36, 1),
(141, 'adversary', 36, 0),
(142, 'advisor', 36, 0),
(143, 'adamant', 37, 0),
(144, 'reliant', 37, 0),
(145, 'reluctant', 37, 1),
(146, 'adscititious', 37, 0),
(147, 'dog', 38, 1),
(148, 'woods', 38, 0),
(149, 'ball', 38, 0),
(150, 'skunk', 38, 0),
(151, 'was happening', 39, 0),
(152, 'is', 39, 0),
(153, 'was supposed to happen', 39, 1),
(154, 'was', 39, 0),
(155, 'they’re, there, their', 40, 0),
(156, 'their, there, They’re', 40, 1),
(157, 'their, they’re, There', 40, 0),
(158, 'their, there, they’re', 40, 0),
(159, 'un', 41, 0),
(160, 'il', 41, 1),
(161, 'non', 41, 0),
(162, 'in', 41, 0),
(163, 'un', 42, 0),
(164, 'mis', 42, 0),
(165, 'non', 42, 0),
(166, 'dis', 42, 1),
(167, 'inter', 43, 0),
(168, 'multi', 43, 1),
(169, 'poly', 43, 0),
(170, 'hemi', 43, 0),
(171, 'iridescence', 44, 0),
(172, 'color', 44, 0),
(173, 'luminosity', 44, 0),
(174, 'colour', 44, 1),
(175, 'foot', 63, 0),
(176, 'inch', 63, 0),
(177, 'kelvin', 63, 0),
(178, 'mile', 63, 1),
(179, 'research', 45, 0),
(180, 'money', 45, 0),
(181, 'hair', 45, 1),
(182, 'furniture', 45, 0),
(183, 'DELETE the space and put “is European” together.', 46, 0),
(184, 'an', 46, 1),
(185, 'a', 46, 0),
(186, 'we are landing', 47, 0),
(187, 'they were able to land', 47, 1),
(188, 'we had landed', 47, 0),
(189, 'they had landed', 47, 0),
(190, 'as like', 48, 0),
(191, 'as could', 48, 0),
(192, 'so as', 48, 0),
(193, 'as long as', 48, 1),
(194, 'haven\'t I told you', 49, 0),
(195, 'have I told', 49, 0),
(196, 'I told you', 49, 0),
(197, 'have I told you', 49, 1),
(198, 'you can have a', 50, 0),
(199, 'you wanted to have a', 50, 1),
(200, 'you will want to have a', 50, 0),
(201, 'you had a', 50, 0),
(202, 'principal’s', 51, 1),
(203, 'principle’s', 51, 0),
(204, 'principles', 51, 0),
(205, 'hunker', 52, 0),
(206, 'lay', 52, 0),
(207, 'huddle', 52, 0),
(208, 'lie', 52, 1),
(209, 'reluctant', 53, 0),
(210, 'reticent', 53, 1),
(211, 'unenthusiastic', 53, 0),
(212, 'opposed', 53, 0),
(213, 'who', 54, 1),
(214, 'that', 54, 0),
(215, 'which', 54, 0),
(216, 'further', 62, 0),
(217, 'allusion', 56, 0),
(218, 'inference', 56, 0),
(219, 'inappetence', 56, 1),
(220, 'insinuation', 56, 0),
(221, 'that', 55, 1),
(222, 'who', 55, 0),
(223, 'which', 55, 0),
(224, 'five’s', 57, 0),
(225, '5s', 57, 1),
(226, '5’s', 57, 0),
(227, 'fives', 57, 0),
(228, 'windy, wet, and unpredictable.', 58, 1),
(229, ';windy, wet, and unpredictable.', 58, 0),
(230, ':windy, wet, and unpredictable.', 58, 0),
(231, 'windy, wet and unpredictable.', 58, 0),
(232, 'Yes, this sentence has a comma splice.', 59, 1),
(233, 'No, this is a sentence fragment.', 59, 0),
(234, 'No, this is a run-on sentence.', 59, 0),
(235, 'Waiting for the storm to stop I was anxiously looking out the window.', 60, 0),
(236, 'Waiting for the storm to stop, I was anxiously looking out the window.', 60, 1),
(237, 'free', 61, 0),
(238, 'complimentary', 61, 0),
(239, 'complementary', 61, 1);

-- --------------------------------------------------------

--
-- Table structure for table `inflexion_test_questions`
--

CREATE TABLE `inflexion_test_questions` (
  `inflexion_test_id` int(11) NOT NULL,
  `inflexion_test_quest` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inflexion_test_questions`
--

INSERT INTO `inflexion_test_questions` (`inflexion_test_id`, `inflexion_test_quest`) VALUES
(1, 'The fresco is a dynamic work because, by capturing the energy, humanity, and collective achievement of the Detroit workers, celebrates all working men and women.\r\n\r\nWhich answer below will replace the underlined portion of the sentence to make it correct?\r\n'),
(2, 'The township cleared this path and paved it with packed gravel, so they would have a peaceful place to hike and bike.\r\n\r\nWhich of the following alternatives to the underlined portion would NOT be acceptable?\r\n'),
(3, 'The last train took twenty-eight minutes to complete the route, which ran from the main terminal to East 145th Street in under a half an hour.\r\n\r\nWhich answer below will replace the underlined portion of the sentence to make it correct?\r\n'),
(4, 'We talked much like we did in the past, when we would sit in the field behind Amy’s house atop the old, wooden shed and discuss our future plans.\r\n\r\nWhich answer below will replace the underlined portion of the sentence to make it correct?\r\n'),
(5, 'In some agricultural parts of Japan, for instance, these three stars are commonly referred to as Karasuki and represent a three-pronged plow.\r\n\r\nGiven that all the choices are true, which one provides a detail that has the most direct connection to the information that follows in this sentence?\r\n'),
(6, 'Unbricking a kiln after a firing is like a person uncovering buried treasure.\r\n\r\nWhich answer below will replace the underlined portion of the sentence to make it correct?\r\n'),
(7, 'Nathan lived and worked on the family farm. After his father died when he was just 14 years old, Nathan took over the responsibility of the farm and the care of his mother and younger brothers. In addition, he pursued studies in literature and science and taught himself to play the piano and cello.\r\n\r\nIf the writer were to delete the last part of the preceding sentence (ending the sentence with a period after the word science), the paragraph would primarily lose:\r\n'),
(8, 'As the dancers step to the music, they were also stepping in time to a sound that embodies their unique history and suggests the influence of outside cultures on their music.\r\n\r\nWhich answer below will replace the underlined portion of the sentence to make it correct?\r\n'),
(9, 'To add to the confusion, every New Year’s Day a person according to this Korean counting system, becomes a year older, regardless of his or her actual birthday.\r\n\r\nWhich answer below will replace the underlined portion of the sentence to make it correct?\r\n'),
(10, 'Some sixty years later, an elderly Frances Griffiths publicly admitted that her and her cousin had staged the photographs as a practical joke.\r\n\r\nWhich answer below will replace the underlined portion of the sentence to make it correct?\r\n'),
(11, 'Which of these adjective groupings appear in the correct order?\r\n	A. big, round, unusual, blue\r\n	B. old, ornate, English, metal\r\n	C. wide, rectangular, red, cooking\r\n	D. big, old, messy, plastic\r\n'),
(12, 'Mary was upset because she wasn’t able to _______ her boyfriend after a rough day at work.\r\nWhich of these synonyms does not fit in this sentence?\r\n'),
(13, 'I learned English in school, but I ___________ most of it.\r\nWhich is the correct form of forget for this sentence?\r\n'),
(14, 'We were the only guests at the hotel. __________________________'),
(15, 'I’m busy right now, but I’ll be with you ___ a moment'),
(16, 'Stock prices are very high. They’ve _______________ a lot in the last few years'),
(17, 'Which if these sentences uses a past perfect continuous verb?'),
(18, 'Which pair of words are not synonyms?'),
(19, 'Which of the three answers is wrong or very unlikely. She thinks _________________ living away from home when he goes to University.'),
(20, 'What are the plural forms of these 4 words: fungus, corps, cul-de-sac, die'),
(21, 'Which of these singular noun pairs will not end in “s” when pluralized?'),
(22, 'Very young children should not go swimming by ________________'),
(23, 'This medicine is ____________ from a tropical plant.'),
(24, 'Which answer does not fit in the blank?\r\n\r\nMy co-worker was fired for accessing the manager\'s computer without his ____________.\r\n'),
(25, 'What is the plural form of plateau?'),
(26, 'Put these words in order from the greatest to the smallest: few, couple, single, many'),
(27, 'A nonagon has how many sides?'),
(28, 'Sock is to socks as ________ is to scissors.'),
(29, 'Your idea was good in theory; there were just a few problems with the ________________.'),
(30, 'I didn’t know the weather would __________ my mood so much.'),
(31, 'One the __________, it should __________ their references.'),
(32, 'I made a __________ effort to complete the project to the best of my ability.\r\n\r\nChoose the best answer.\r\n	A. convivial 	\r\n	B. conscience		\r\n	C. conscientious\r\n	D. contrite\r\n'),
(33, 'He was _____________ annoyed by a second interruption.'),
(34, 'Cornered by 3 dogs, the cat realized he was in __________ threat.'),
(35, 'Your performance ___________ our expectations. Good job!\r\nChoose which answer does not fit this sentence.\r\n'),
(36, 'Senator Johnson is an ____________ for a higher minimum wage and believes that everyone deserves to make a fair living.'),
(37, 'I wasn\'t feeling well, so I was _____________ to go to the party.'),
(38, 'The dog ran into the woods to fetch his ball and encountered a skunk.\r\nWhat is the main subject of this sentence?\r\n'),
(39, 'The office meeting __________ yesterday but got postponed.'),
(40, 'Did you see ________ new house? It’s right over _________. _________ moving in on the 29th.'),
(41, 'Choose the correct prefix.\r\nIn many countries it is ___ legal to keep a gun in your house.\r\n'),
(42, 'Choose the correct prefix.\r\nThere was some _________agreement over the bill. The republican senators continued to oppose the democratic senators.\r\n'),
(43, 'Choose the correct prefix.\r\nShe works for a _________national company. It has offices in over 30 countries.\r\n'),
(44, 'Theatre is to cinema as _________ is to hue.'),
(45, 'Which of these is not an uncountable noun in its plural form?'),
(46, 'The photographer is ____________ European.\r\nWhich answer does not work with this sentence?\r\n'),
(47, 'If __________ a man on the moon, why can\'t they sort out paper-jams?'),
(48, 'It\'ll be fine __________ you do it the way I told you.'),
(49, 'How many times __________ not to do that?'),
(50, 'Fred said that __________ word with me.'),
(51, 'Jeff was misbehaving in class today and got called into the __________ office.'),
(52, 'I’m feeling a bit ill today. I think I’m going to _______ down for a bit.'),
(53, 'Choose the most appropriate answer out of the synonyms provided.\r\nThe shy girl was ___________ to speak in front of an audience.\r\n'),
(54, 'Anthony is the one __________ rescued the cat from the tree.'),
(55, 'I want a car _________ accelerates quickly.'),
(56, 'The beginning of the book has an _________ which hints at how the book ends.\r\nWhich word does not fit this sentence?\r\n'),
(57, 'My pin number has two ________. It\'s easy to remember.'),
(58, 'The weather this winter has been ____________________.'),
(59, 'Is this sentence correct?\r\n\r\nQuantum mechanics is a branch of physics, it was initially developed to explain atoms.\r\n'),
(60, 'Which of the following is correct?'),
(61, 'As a reward for their patronage, the couple received a __________ appetizer with their order.\r\nWhich answer does not fit the sentence.\r\n'),
(62, 'We didn’t realize how much ____________ we drove last year than this year.'),
(63, 'Gram is to pound as meter is to __________.');

-- --------------------------------------------------------

--
-- Table structure for table `inflexion_users`
--

CREATE TABLE `inflexion_users` (
  `inflexion_user_id` int(11) NOT NULL,
  `inflexion_username` varchar(115) NOT NULL,
  `inflexion_user_pass` varchar(115) NOT NULL,
  `inflexion_user_type` int(11) NOT NULL,
  `inflexion_user_status` varchar(45) NOT NULL,
  `inflexion_user_token` varchar(115) NOT NULL,
  `inflexion_user_tutor` decimal(11,2) DEFAULT NULL,
  `inflexion_user_take` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inflexion_users`
--

INSERT INTO `inflexion_users` (`inflexion_user_id`, `inflexion_username`, `inflexion_user_pass`, `inflexion_user_type`, `inflexion_user_status`, `inflexion_user_token`, `inflexion_user_tutor`, `inflexion_user_take`) VALUES
(57, 'gmd013@gmail.com', '$2y$10$nuNsqvrqSLgNTp4v/dpfR.Ye7GCfe.fq6FSUOvHkC0gHP3E.hpm86', 1, '2', 'Completed', NULL, NULL),
(58, 'r@r.com', '$2y$10$ZQlEgdDEjIMcSKrrUlqlBuTSciIYPtcYCq8pzj0veVyrJk9oxBSpG', 1, '2', 'Completed', NULL, NULL),
(63, 'a@a.com', '$2y$10$2ykhr20/N2AF3hDaVcvLge8Zl/.YEaZyhuRz9fnJOL11D/FbLCX52', 2, '3', 'Failed', '23.33', 1),
(64, 'x@x.com', '$2y$10$kXGEG0mQwe3NNDCq6PvXDubowFUzxXw4pGm4b850QPTobfHTIXQXu', 1, '2', 'Completed', NULL, NULL),
(65, 'j@j.com', '$2y$10$g3DmNdP4igkYP39/BjcK3eyrqHUbtmUNcG3ssi4YFhpcirKF6Pf2C', 1, '2', 'Completed', NULL, NULL),
(66, 't@t.com', '$2y$10$Rzo40KL8TxU3edg/c85NLOy2142qiIHcft6/DHtNmDjaSk4QEPJCC', 1, '2', 'Completed', NULL, NULL),
(67, 's@s.com', '$2y$10$AAtvL0c1VU5mV3ntlpsvfu3IIoUbCp60JUKlCJ.cfe5Mluf.O5ezC', 2, '4', 'For interview', '86.67', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inflexion_user_details`
--

CREATE TABLE `inflexion_user_details` (
  `inflexion_detail_id` int(11) NOT NULL,
  `inflexion_detail_first` varchar(115) NOT NULL,
  `inflexion_detail_middle` varchar(115) NOT NULL,
  `inflexion_detail_last` varchar(115) NOT NULL,
  `inflexion_detail_street` varchar(250) NOT NULL,
  `inflexion_detail_city` varchar(115) NOT NULL,
  `inflexion_detail_state` varchar(115) NOT NULL,
  `inflexion_detail_country` varchar(115) NOT NULL,
  `inflexion_detail_zip` int(11) NOT NULL,
  `inflexion_detail_contact` varchar(115) NOT NULL,
  `inflexion_detail_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inflexion_user_details`
--

INSERT INTO `inflexion_user_details` (`inflexion_detail_id`, `inflexion_detail_first`, `inflexion_detail_middle`, `inflexion_detail_last`, `inflexion_detail_street`, `inflexion_detail_city`, `inflexion_detail_state`, `inflexion_detail_country`, `inflexion_detail_zip`, `inflexion_detail_contact`, `inflexion_detail_birth`) VALUES
(57, 'Glenn Marlo', 'Javier', 'Dumaguing', '106 First Road Quezon Hill', 'Baguio', 'Benguet', 'Philippines', 2600, '09274160451', '1991-03-06'),
(58, 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Nepal', 28393, '90234283423423', '2021-12-31'),
(63, 'TUTOR AAAA', 'TUTOR AAAA', 'TUTOR AAAA', 'TUTOR AAAA', 'TUTOR AAAA', 'TUTOR AAAA', 'Afghanistan', 8234923, '21039423482334', '2021-04-02'),
(64, 'XXXX', 'XXXX', 'XXXX', 'XXXX', 'XXXX', 'XXXX', 'Yemen', 34573, '1231253545', '2021-04-01'),
(65, 'JJJJ', 'JJJJ', 'JJJJ', 'JJJJ', 'JJJJ', 'JJJJ', 'Philippines', 2037, '123432479', '2021-04-01'),
(66, 'TTTT', 'TTTT', 'TTTT', 'TTTT', 'TTTT', 'TTTT', 'Taiwan', 12312, '1233565343', '2021-04-01'),
(67, 'SSSS TUTOR', 'SSSS TUTOR', 'SSSS TUTOR', 'SSSS TUTOR', 'SSSS TUTOR', 'SSSS TUTOR', 'Australia', 12344, '28934621', '2021-04-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inflexion_groups`
--
ALTER TABLE `inflexion_groups`
  ADD PRIMARY KEY (`inflexion_group_id`);

--
-- Indexes for table `inflexion_inbox`
--
ALTER TABLE `inflexion_inbox`
  ADD PRIMARY KEY (`inflexion_inbox_id`);

--
-- Indexes for table `inflexion_posts`
--
ALTER TABLE `inflexion_posts`
  ADD PRIMARY KEY (`inflexion_post_id`);

--
-- Indexes for table `inflexion_test_answers`
--
ALTER TABLE `inflexion_test_answers`
  ADD PRIMARY KEY (`inflexion_answer_id`);

--
-- Indexes for table `inflexion_test_questions`
--
ALTER TABLE `inflexion_test_questions`
  ADD PRIMARY KEY (`inflexion_test_id`);

--
-- Indexes for table `inflexion_users`
--
ALTER TABLE `inflexion_users`
  ADD PRIMARY KEY (`inflexion_user_id`);

--
-- Indexes for table `inflexion_user_details`
--
ALTER TABLE `inflexion_user_details`
  ADD PRIMARY KEY (`inflexion_detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inflexion_groups`
--
ALTER TABLE `inflexion_groups`
  MODIFY `inflexion_group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inflexion_inbox`
--
ALTER TABLE `inflexion_inbox`
  MODIFY `inflexion_inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `inflexion_posts`
--
ALTER TABLE `inflexion_posts`
  MODIFY `inflexion_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `inflexion_test_answers`
--
ALTER TABLE `inflexion_test_answers`
  MODIFY `inflexion_answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `inflexion_test_questions`
--
ALTER TABLE `inflexion_test_questions`
  MODIFY `inflexion_test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `inflexion_users`
--
ALTER TABLE `inflexion_users`
  MODIFY `inflexion_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
