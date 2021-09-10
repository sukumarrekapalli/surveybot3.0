-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 24, 2021 at 11:57 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaiwa_internal`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects_table`
--

CREATE TABLE `projects_table` (
  `id` int(11) NOT NULL,
  `Project_name` text NOT NULL,
  `Organisation_name` text NOT NULL,
  `question_list` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects_table`
--

INSERT INTO `projects_table` (`id`, `Project_name`, `Organisation_name`, `question_list`) VALUES
(1, 'test', 'culturelytics', ''),
(2, 'test', 'culturelytics', '1'),
(3, 'test', 'culturelytics', ''),
(4, 'test', 'culturelytics', '3'),
(5, 'test', 'culturelytics', '2'),
(6, 'test', 'culturelytics', '3,2'),
(7, 'test', 'culturelytics', '4'),
(8, 'test', 'culturelytics', '4'),
(9, 'testproject', 'culturelytics', '5,3'),
(10, 'asd', 'culturelytics', '5,3'),
(11, 'ads', 'asd', '4'),
(12, 'test', 'culturelytics', '5,4,3,2,1'),
(13, 'test', 'culturelytics', '6'),
(17, 'fsdf', 'sdfsdf', ''),
(18, 'ads', 'asdad', ''),
(19, 'asdad', 'asdad', ''),
(20, 'adad', 'asda', ''),
(21, 'abc', 'asda', ''),
(22, 'asdad', 'ad', ''),
(23, 'asda', 'ad', ''),
(24, 'czc', 'ads', ''),
(25, 'test', 'test', ''),
(26, 'fsdf', 'sdfs', ''),
(27, 'ADA', 'ASDA', ''),
(28, 'sda', 'asd', ''),
(29, 'asda', 'ad', ''),
(30, 'afa', 'dasf', ''),
(31, 'asd', 'asd', ''),
(32, 'das', 'asd', ''),
(33, 'as', 'as', ''),
(34, 'AFD', 'SADF', ''),
(35, 'fcSD', 'SFDA', ''),
(36, 'SD', 'ASD', ''),
(37, 'AD', 'ASD', ''),
(38, 'ASD', 'ASD', ''),
(39, 'asd', 'asd', ''),
(40, 'asd', 'ads', ''),
(41, 'afa', 'af', ''),
(42, 'asd', 'asd', ''),
(43, 'safd', 'saf', ''),
(44, 'test', 'ad', ''),
(45, '', '', ''),
(46, 'test', 'ad', ''),
(47, 'as', 'ad', ''),
(48, 'safd', 'saf', ''),
(49, 'saf', 'safd', ''),
(50, 'af', 'af', ''),
(51, 'sa', 'as', ''),
(52, 'as', 'asd', ''),
(53, 'as', 'as', ''),
(54, 'as', 'as', ''),
(55, 'hgf', 'hgfh', ''),
(56, 'sf', 'sfg', ''),
(57, 'adad', 'adad', ''),
(58, 'asd', 'ad', ''),
(59, 'asdc', 'qwed', ''),
(60, 'as', 'sada', ''),
(61, 'af', 'sf', ''),
(62, 'test', 'qer', ''),
(63, 'test', 'ad', ''),
(64, 'dsa', 'asdad', ''),
(65, 'sad', 'asd', ''),
(66, 'asd', 'asd', ''),
(67, 'afds', 'sadfa', ''),
(68, 'fsdf', 'wfw', ''),
(69, 'wrt', 'twa', ''),
(70, 'asda', 'asdad', ''),
(71, 'asdcADs', 'ASD', ''),
(72, 'af', 'adf', ''),
(73, 'qfrwqwer', 'qrw', ''),
(74, 'asd', 'ads', ''),
(75, 'asd', 'ad', ''),
(76, 'asd', 'ads', ''),
(77, 'as', 'test', ''),
(78, 'ads', 'asd', ''),
(79, 'asd', 'asd', ''),
(80, 'asd', 'asd', ''),
(81, 'asd', 'asd', ''),
(82, 'ads', 'asd', ''),
(83, 'afds', 'adf', ''),
(84, 'asd', 'asd', ''),
(85, 'asd', 'asd', ''),
(86, '', '', ''),
(87, 'asd', 'asd', ''),
(88, 'ad', 'sad', ''),
(89, 'ASD', 'asd', ''),
(90, 'sad', 'asd', ''),
(91, 'afadf', 'af', ''),
(92, 'adf', 'asdf', ''),
(93, 'adfa', 'culturelytics', ''),
(94, 'as', 'dasf', ''),
(95, 'dsfs', 'sdf', ''),
(96, 'as', 'sad', ''),
(97, 'asd', 'adsad', ''),
(98, 'asc', 'ASDA', ''),
(99, 'test', 'test', ''),
(100, 'asdc', 'ASDA', ''),
(101, 'ads', 'asda', ''),
(102, 'asdad', 'ASDA', ''),
(103, 'adf', 'asfd', ''),
(104, 'wf', 'fw', ''),
(105, 'test', 'test', ''),
(106, 'asd', 'asda', ''),
(107, 'asd', 'asa', ''),
(108, 'asd', 'asdad', ''),
(109, 'asdf', 'sadf', '45,41'),
(110, 'ad', 'asda', '46,45,44,43,42,41,40,39,38,37,35,34,33,32,31,30,29,28,24,9,3'),
(111, 'ads', 'asda', '46,45'),
(112, 'test', 'ad', '45,44'),
(113, 'asd', 'asdad', '45'),
(114, 'as', 'asda', '45,44'),
(115, 'ad', 'test', '45'),
(116, 'as', 'test', '45'),
(117, 'ad', 'abc', '46'),
(118, 'ad', 'ad', '45'),
(119, 'ad', 'asda', '45'),
(120, 'ad', 'asda', '46,45'),
(121, 'asd', 'test', '45,42'),
(122, 'asd', 'test', '44,43'),
(123, 'ads', 'asda', '46,45'),
(124, 'ads', 'ad', '45,44'),
(125, 'zv', 'CV', '44,43'),
(126, 'asd', 'test', '45,44'),
(127, 'asd', 'test', '46'),
(128, 'asd', 'test', '46,45'),
(129, 'test', 'culturelytics', '45'),
(130, 'as', 'test', '47'),
(131, 'ad', 'test', '46'),
(132, 'as', 'test', '47'),
(133, 'as', 'test', '45'),
(134, 'asd', 'test', '46'),
(135, 'ad', 'asda', '45'),
(136, 'asd', 'asa', '45,44'),
(137, 'ad', 'asda', '46'),
(138, 'wf', 'fw', '46'),
(139, 'test', 'culturelytics', '47'),
(140, 'test', 'culturelytics', '47'),
(141, 'ad', 'asda', '46'),
(142, 'test', 'testing', '47,43'),
(143, 'test', 'testing', ''),
(144, 'test', 'testing', ''),
(145, 'ad', 'asda', ''),
(146, 'as', 'test', ''),
(147, 'ads', 'test', ''),
(148, 'ad', 'asda', ''),
(149, 'asd', 'ad', ''),
(150, 'as', 'asda', ''),
(151, 'asd', 'asda', ''),
(152, 'asd', 'asda', ''),
(153, 'asd', 'test', ''),
(154, 'test', 'asda', ''),
(155, 'asdf', 'asd', ''),
(156, 'test', 'ad', ''),
(157, 'd', 'test', ''),
(158, 'sf', 'asda', ''),
(159, 'asd', 'ad', ''),
(160, 'asd', 'test', ''),
(161, 'asd', 'asda', ''),
(162, 'lknh', 'hghj', ''),
(163, 'test', 'ad', ''),
(164, 'sdfa', 'afs', ''),
(165, 'ad', 'asda', ''),
(166, 'asd', 'daasda', ''),
(167, 'ad', 'test', ''),
(168, 'ads', 'ad', ''),
(169, 'ad', 'asda', ''),
(170, 'ad', 'ad', ''),
(171, 'ad', 'test', ''),
(172, 'as', 'ad', ''),
(173, 'ads', 'asda', ''),
(174, 'asd', 'test', ''),
(175, 'asd', 'test', ''),
(176, 'asd', 'asda', ''),
(177, 'test', 'abc', ''),
(178, 'sga', 'safg', ''),
(179, 'fdsf', 'sfsf', ''),
(180, 'test', 'test', ''),
(181, 'test', 'test', ''),
(182, 'ads', 'test', ''),
(183, 'as', 'asda', ''),
(184, 'as', 'abc', ''),
(185, 'ad', 'test', ''),
(186, '', '', ''),
(187, 'cfgcf', 'gcfg', ''),
(188, 'asd', 'ad', ''),
(189, 'test', 'ad', ''),
(190, 'dyr', 'dy', ''),
(191, 'stgz', 'zdgf', ''),
(192, 'hb', 'fchjcgfh', ''),
(193, '', '', ''),
(194, '', '', ''),
(195, '', '', ''),
(196, '', '', ''),
(197, '', '', ''),
(198, 'test', 'ad', ''),
(199, 'asd', 'ad', ''),
(200, 'asd', 'ad', '51'),
(201, '', '', ''),
(202, '', '', ''),
(203, '', '', ''),
(204, '', '', ''),
(205, '', '', ''),
(206, '', '', ''),
(207, '', '', ''),
(208, '', '', ''),
(209, '', '', ''),
(210, '', '', ''),
(211, '', '', ''),
(212, '', '', ''),
(213, '', '', ''),
(214, '', '', ''),
(215, '', '', '52'),
(216, '', '', ''),
(217, '', '', ''),
(218, '', '', '43'),
(219, 'test', 'culturelytics', '43'),
(220, '', '', '37'),
(221, '', '', '52,51,50'),
(222, 'zsagfrsdg', 'sFS', ''),
(223, 'asd', 'ad', ''),
(224, 'test', 'test', '53,52'),
(225, 'test', 'test', '54,53'),
(226, 'test', 'test', '55'),
(227, 'test', 'asda', ''),
(228, 'sas', 'as', ''),
(229, 'test', 'test', ''),
(230, 'as', 'abc', ''),
(231, 'ads', 'asda', ''),
(232, 'ads', 'abc', '55'),
(233, 'as', 'asda', '44'),
(234, 'adf', 'culturelytics', ''),
(235, 'hdz', 'dh', ''),
(236, 'ad', 'ad', ''),
(237, 'ads', 'ad', ''),
(238, 'ads', 'ad', ''),
(239, 'as', 'abc', ''),
(240, 'as', 'abc', ''),
(241, 'as', 'abc', ''),
(242, 'asd', 'asd', ''),
(243, 'asd', 'asd', ''),
(244, 'asd', 'asd', ''),
(245, 'test', 'asda', ''),
(246, 'test', 'asda', ''),
(247, 'test', 'asda', ''),
(248, 'asd', 'asd', ''),
(249, 'asda', 'asd', ''),
(250, 'adf', 'ad', ''),
(251, 'ads', 'ad', ''),
(252, 'sdas', 'asd', ''),
(253, 'sdas', 'asd', ''),
(254, 'ad', 'asda', ''),
(255, 'ad', 'asda', ''),
(256, 'sdas', 'asd', ''),
(257, 'asc', 'asd', ''),
(258, 'asc', 'asd', '83,82,81'),
(259, 'ad', 'asda', '84,85,86'),
(260, 'adf', 'culturelytics', '85,81,80,77'),
(261, 'Tech tean test', 'E2EPeople', '87,89'),
(262, 'Tech tean test', 'E2EPeople', '90');

-- --------------------------------------------------------

--
-- Table structure for table `questions_table`
--

CREATE TABLE `questions_table` (
  `Id` int(10) NOT NULL,
  `Questions` varchar(3000) NOT NULL,
  `question_text` varchar(100) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions_table`
--

INSERT INTO `questions_table` (`Id`, `Questions`, `question_text`, `project_id`) VALUES
(1, '<input type=\"text\"name=\"1\" cf-questions=\"how are you?\">', 'how are you?', 0),
(2, '<fieldset cf-questions=\"how are you?\"  cf-input-placeholder=\"Please select one of the above options\"><input type=\"radio\" name=\"2\" cf-label=\"nice\"value=\"nice\"/></fieldset> <cf-robot-message cf-questions=\"adfsdf\" cf-conditional-2=\"nice\"></cf-robot-message>', 'how are you?', 0),
(3, '<fieldset cf-questions=\"test mcq\"  cf-input-placeholder=\"Please select one of the above options\"><input type=\"radio\" name=\"3\" cf-label=\"nice\"value=\"nice\"/></fieldset> <cf-robot-message cf-questions=\"nice\" cf-conditional-3=\"nice\"></cf-robot-message>', 'test mcq', 0),
(4, '<input type=\"text\"name=\"4\" cf-questions=\"How are you?\">', 'How are you?', 0),
(5, '<input type=\"text\"name=\"5\" cf-questions=\"what you doing\">', 'what you doing', 0),
(6, '<input type=\"text\"name=\"6\" cf-questions=\"how is my demo\">', 'how is my demo', 0),
(7, '<input type=\"text\"name=\"7\" cf-questions=\"asd\">', 'asd', 0),
(8, '<input type=\"text\"name=\"8\" cf-questions=\"asf\">', 'asf', 0),
(9, '<input type=\"text\"name=\"9\" cf-questions=\"how are you?\">', 'how are you?', 0),
(10, '<input type=\"text\"name=\"10\" cf-questions=\"how are you?\">', 'how are you?', 0),
(17, '  <fieldset cf-questions=\"how are you?\"  cf-input-placeholder=\"Please select one of the above options\">\r\n         \r\n         <input type=\"radio\" name=\"17\" cf-label=\"Strongly Agree\"value=\"Strongly agree\"required/>\r\n         <input type=\"radio\" name=\"17\" cf-label=\"Agree\" value=\"Agree\" />\r\n         <input type=\"radio\" name=\"17\" cf-label=\"Neither agree nor disagree\" value=\"Neither agree nor disagree\" />\r\n         <input type=\"radio\" name=\"17\" cf-label=\"Disagree\" value=\"Disagree\" />\r\n         <input type=\"radio\" name=\"17\" cf-label=\"Strongly Disagree\" value=\"Strongly_disagree\" />\r\n        \r\n       </fieldset>\r\n       \r\n       <cf-robot-message cf-questions=\"sg\" cf-conditional-17=\"Strongly agree\"></cf-robot-message>\r\n         \r\n       <cf-robot-message cf-questions=\"sgf\" cf-conditional-17=\"Agree\"></cf-robot-message>\r\n      \r\n       <cf-robot-message cf-questions=\"sg\" cf-conditional-17=\"Neither agree nor disagree\"></cf-robot-message>    \r\n      \r\n         <cf-robot-message cf-questions=\"sg\" cf-conditional-17=\"Disagree\"></cf-robot-message>\r\n        \r\n         <cf-robot-message cf-questions=\"sfg\" cf-conditional-17=\"Strongly_disagree\"></cf-robot-message>\r\n\r\n       \r\n       ', 'how are you?', 0),
(18, '  <fieldset cf-questions=\"asd\"  cf-input-placeholder=\"Please select one of the above options\">\r\n         \r\n         <input type=\"radio\" name=\"18\" cf-label=\"Strongly Agree\"value=\"Strongly agree\"required/>\r\n         <input type=\"radio\" name=\"18\" cf-label=\"Agree\" value=\"Agree\" />\r\n         <input type=\"radio\" name=\"18\" cf-label=\"Neither agree nor disagree\" value=\"Neither agree nor disagree\" />\r\n         <input type=\"radio\" name=\"18\" cf-label=\"Disagree\" value=\"Disagree\" />\r\n         <input type=\"radio\" name=\"18\" cf-label=\"Strongly Disagree\" value=\"Strongly_disagree\" />\r\n        \r\n       </fieldset>\r\n       \r\n       <cf-robot-message cf-questions=\"ad\" cf-conditional-18=\"Strongly agree\"></cf-robot-message>\r\n         \r\n       <cf-robot-message cf-questions=\"ads\" cf-conditional-18=\"Agree\"></cf-robot-message>\r\n      \r\n       <cf-robot-message cf-questions=\"ads\" cf-conditional-18=\"Neither agree nor disagree\"></cf-robot-message>    \r\n      \r\n         <cf-robot-message cf-questions=\"ads\" cf-conditional-18=\"Disagree\"></cf-robot-message>\r\n        \r\n         <cf-robot-message cf-questions=\"ads\" cf-conditional-18=\"Strongly_disagree\"></cf-robot-message>\r\n\r\n       \r\n       ', 'asd', 0),
(19, '  <fieldset cf-questions=\"asd\"  cf-input-placeholder=\"Please select one of the above options\">\r\n         \r\n         <input type=\"radio\" name=\"19\" cf-label=\"Strongly Agree\"value=\"Strongly agree\"required/>\r\n         <input type=\"radio\" name=\"19\" cf-label=\"Agree\" value=\"Agree\" />\r\n         <input type=\"radio\" name=\"19\" cf-label=\"Neither agree nor disagree\" value=\"Neither agree nor disagree\" />\r\n         <input type=\"radio\" name=\"19\" cf-label=\"Disagree\" value=\"Disagree\" />\r\n         <input type=\"radio\" name=\"19\" cf-label=\"Strongly Disagree\" value=\"Strongly_disagree\" />\r\n        \r\n       </fieldset>\r\n       \r\n       <cf-robot-message cf-questions=\"asd\" cf-conditional-19=\"Strongly agree\"></cf-robot-message>\r\n         \r\n       <cf-robot-message cf-questions=\"asd\" cf-conditional-19=\"Agree\"></cf-robot-message>\r\n      \r\n       <cf-robot-message cf-questions=\"asd\" cf-conditional-19=\"Neither agree nor disagree\"></cf-robot-message>    \r\n      \r\n         <cf-robot-message cf-questions=\"asd\" cf-conditional-19=\"Disagree\"></cf-robot-message>\r\n        \r\n         <cf-robot-message cf-questions=\"asd\" cf-conditional-19=\"Strongly_disagree\"></cf-robot-message>\r\n\r\n       \r\n       ', 'asd', 0),
(20, '  <fieldset cf-questions=\"qwd\"  cf-input-placeholder=\"Please select one of the above options\">\r\n         \r\n         <input type=\"radio\" name=\"20\" cf-label=\"Strongly Agree\"value=\"Strongly agree\"required/>\r\n         <input type=\"radio\" name=\"20\" cf-label=\"Agree\" value=\"Agree\" />\r\n         <input type=\"radio\" name=\"20\" cf-label=\"Neither agree nor disagree\" value=\"Neither agree nor disagree\" />\r\n         <input type=\"radio\" name=\"20\" cf-label=\"Disagree\" value=\"Disagree\" />\r\n         <input type=\"radio\" name=\"20\" cf-label=\"Strongly Disagree\" value=\"Strongly_disagree\" />\r\n        \r\n       </fieldset>\r\n       \r\n       <cf-robot-message cf-questions=\"qwe\" cf-conditional-20=\"Strongly agree\"></cf-robot-message>\r\n         \r\n       <cf-robot-message cf-questions=\"qwed\" cf-conditional-20=\"Agree\"></cf-robot-message>\r\n      \r\n       <cf-robot-message cf-questions=\"qwe\" cf-conditional-20=\"Neither agree nor disagree\"></cf-robot-message>    \r\n      \r\n         <cf-robot-message cf-questions=\"qew\" cf-conditional-20=\"Disagree\"></cf-robot-message>\r\n        \r\n         <cf-robot-message cf-questions=\"qe\" cf-conditional-20=\"Strongly_disagree\"></cf-robot-message>\r\n\r\n       \r\n       ', 'qwd', 0),
(21, '  <fieldset cf-questions=\"dasfa\"  cf-input-placeholder=\"Please select one of the above options\">\r\n         \r\n         <input type=\"radio\" name=\"21\" cf-label=\"Strongly Agree\"value=\"Strongly agree\"required/>\r\n         <input type=\"radio\" name=\"21\" cf-label=\"Agree\" value=\"Agree\" />\r\n         <input type=\"radio\" name=\"21\" cf-label=\"Neither agree nor disagree\" value=\"Neither agree nor disagree\" />\r\n         <input type=\"radio\" name=\"21\" cf-label=\"Disagree\" value=\"Disagree\" />\r\n         <input type=\"radio\" name=\"21\" cf-label=\"Strongly Disagree\" value=\"Strongly_disagree\" />\r\n        \r\n       </fieldset>\r\n       \r\n       <cf-robot-message cf-questions=\"asd\" cf-conditional-21=\"Strongly agree\"></cf-robot-message>\r\n         \r\n       <cf-robot-message cf-questions=\"asd\" cf-conditional-21=\"Agree\"></cf-robot-message>\r\n      \r\n       <cf-robot-message cf-questions=\"asd\" cf-conditional-21=\"Neither agree nor disagree\"></cf-robot-message>    \r\n      \r\n         <cf-robot-message cf-questions=\"asd\" cf-conditional-21=\"Disagree\"></cf-robot-message>\r\n        \r\n         <cf-robot-message cf-questions=\"asd\" cf-conditional-21=\"Strongly_disagree\"></cf-robot-message>\r\n\r\n       \r\n       ', 'dasfa', 0),
(22, '<input type=\"text\"name=\"22\" cf-questions=\"fsf\">', 'fsf', 0),
(23, '<input type=\"text\"name=\"23\" cf-questions=\"how are you?\">', 'how are you?', 0),
(24, '<input type=\"text\"name=\"24\" cf-questions=\"wfa\">', 'wfa', 0),
(25, '<input type=\"text\"name=\"25\" cf-questions=\"how are you?\">', 'how are you?', 0),
(26, '  <fieldset cf-questions=\"TQW\"  cf-input-placeholder=\"Please select one of the above options\">\r\n         \r\n         <input type=\"radio\" name=\"26\" cf-label=\"Strongly Agree\"value=\"Strongly agree\"required/>\r\n         <input type=\"radio\" name=\"26\" cf-label=\"Agree\" value=\"Agree\" />\r\n         <input type=\"radio\" name=\"26\" cf-label=\"Neither agree nor disagree\" value=\"Neither agree nor disagree\" />\r\n         <input type=\"radio\" name=\"26\" cf-label=\"Disagree\" value=\"Disagree\" />\r\n         <input type=\"radio\" name=\"26\" cf-label=\"Strongly Disagree\" value=\"Strongly_disagree\" />\r\n        \r\n       </fieldset>\r\n       \r\n       <cf-robot-message cf-questions=\"TA\" cf-conditional-26=\"Strongly agree\"></cf-robot-message>\r\n         \r\n       <cf-robot-message cf-questions=\"TEA\" cf-conditional-26=\"Agree\"></cf-robot-message>\r\n      \r\n       <cf-robot-message cf-questions=\"WT\" cf-conditional-26=\"Neither agree nor disagree\"></cf-robot-message>    \r\n      \r\n         <cf-robot-message cf-questions=\"ETR\" cf-conditional-26=\"Disagree\"></cf-robot-message>\r\n        \r\n         <cf-robot-message cf-questions=\"RWT\" cf-conditional-26=\"Strongly_disagree\"></cf-robot-message>\r\n\r\n       \r\n       ', 'TQW', 0),
(27, '<input type=\"text\"name=\"27\" cf-questions=\"asd\">', 'asd', 0),
(28, '<input type=\"text\"name=\"28\" cf-questions=\"asd\">', 'asd', 0),
(29, '<input type=\"text\"name=\"29\" cf-questions=\"sdf\">', 'sdf', 0),
(30, '  <fieldset cf-questions=\"afaf\"  cf-input-placeholder=\"Please select one of the above options\">\r\n         \r\n         <input type=\"radio\" name=\"30\" cf-label=\"Strongly Agree\"value=\"Strongly agree\"required/>\r\n         <input type=\"radio\" name=\"30\" cf-label=\"Agree\" value=\"Agree\" />\r\n         <input type=\"radio\" name=\"30\" cf-label=\"Neither agree nor disagree\" value=\"Neither agree nor disagree\" />\r\n         <input type=\"radio\" name=\"30\" cf-label=\"Disagree\" value=\"Disagree\" />\r\n         <input type=\"radio\" name=\"30\" cf-label=\"Strongly Disagree\" value=\"Strongly_disagree\" />\r\n        \r\n       </fieldset>\r\n       \r\n       <cf-robot-message cf-questions=\"sadf\" cf-conditional-30=\"Strongly agree\"></cf-robot-message>\r\n         \r\n       <cf-robot-message cf-questions=\"asdf\" cf-conditional-30=\"Agree\"></cf-robot-message>\r\n      \r\n       <cf-robot-message cf-questions=\"asfd\" cf-conditional-30=\"Neither agree nor disagree\"></cf-robot-message>    \r\n      \r\n         <cf-robot-message cf-questions=\"sadf\" cf-conditional-30=\"Disagree\"></cf-robot-message>\r\n        \r\n         <cf-robot-message cf-questions=\"sadf\" cf-conditional-30=\"Strongly_disagree\"></cf-robot-message>\r\n\r\n       \r\n       ', 'afaf', 0),
(31, '  <fieldset cf-questions=\"wq\"  cf-input-placeholder=\"Please select one of the above options\">\r\n         \r\n         <input type=\"radio\" name=\"31\" cf-label=\"Strongly Agree\"value=\"Strongly agree\"required/>\r\n         <input type=\"radio\" name=\"31\" cf-label=\"Agree\" value=\"Agree\" />\r\n         <input type=\"radio\" name=\"31\" cf-label=\"Neither agree nor disagree\" value=\"Neither agree nor disagree\" />\r\n         <input type=\"radio\" name=\"31\" cf-label=\"Disagree\" value=\"Disagree\" />\r\n         <input type=\"radio\" name=\"31\" cf-label=\"Strongly Disagree\" value=\"Strongly_disagree\" />\r\n        \r\n       </fieldset>\r\n       \r\n       <cf-robot-message cf-questions=\"qwr\" cf-conditional-31=\"Strongly agree\"></cf-robot-message>\r\n         \r\n       <cf-robot-message cf-questions=\"qwr\" cf-conditional-31=\"Agree\"></cf-robot-message>\r\n      \r\n       <cf-robot-message cf-questions=\"wqer\" cf-conditional-31=\"Neither agree nor disagree\"></cf-robot-message>    \r\n      \r\n         <cf-robot-message cf-questions=\"wqe\" cf-conditional-31=\"Disagree\"></cf-robot-message>\r\n        \r\n         <cf-robot-message cf-questions=\"qwr\" cf-conditional-31=\"Strongly_disagree\"></cf-robot-message>\r\n\r\n       \r\n       ', 'wq', 0),
(32, '<input type=\"text\"name=\"32\" cf-questions=\"fsf\">', 'fsf', 0),
(33, '  <fieldset cf-questions=\"asdasasd\"  cf-input-placeholder=\"Please select one of the above options\">\r\n         \r\n         <input type=\"radio\" name=\"33\" cf-label=\"Strongly Agree\"value=\"Strongly agree\"required/>\r\n         <input type=\"radio\" name=\"33\" cf-label=\"Agree\" value=\"Agree\" />\r\n         <input type=\"radio\" name=\"33\" cf-label=\"Neither agree nor disagree\" value=\"Neither agree nor disagree\" />\r\n         <input type=\"radio\" name=\"33\" cf-label=\"Disagree\" value=\"Disagree\" />\r\n         <input type=\"radio\" name=\"33\" cf-label=\"Strongly Disagree\" value=\"Strongly_disagree\" />\r\n        \r\n       </fieldset>\r\n       \r\n       <cf-robot-message cf-questions=\"asd\" cf-conditional-33=\"Strongly agree\"></cf-robot-message>\r\n         \r\n       <cf-robot-message cf-questions=\"asd\" cf-conditional-33=\"Agree\"></cf-robot-message>\r\n      \r\n       <cf-robot-message cf-questions=\"asd\" cf-conditional-33=\"Neither agree nor disagree\"></cf-robot-message>    \r\n      \r\n         <cf-robot-message cf-questions=\"asd\" cf-conditional-33=\"Disagree\"></cf-robot-message>\r\n        \r\n         <cf-robot-message cf-questions=\"asd\" cf-conditional-33=\"Strongly_disagree\"></cf-robot-message>\r\n\r\n       \r\n       ', 'asdasasd', 0),
(34, '<input type=\"text\"name=\"34\" cf-questions=\"asd\">', 'asd', 0),
(35, '<input type=\"text\"name=\"35\" cf-questions=\"asd\">', 'asd', 0),
(36, '  <fieldset cf-questions=\"adf\"  cf-input-placeholder=\"Please select one of the above options\">\r\n         \r\n         <input type=\"radio\" name=\"36\" cf-label=\"Strongly Agree\"value=\"Strongly agree\"required/>\r\n         <input type=\"radio\" name=\"36\" cf-label=\"Agree\" value=\"Agree\" />\r\n         <input type=\"radio\" name=\"36\" cf-label=\"Neither agree nor disagree\" value=\"Neither agree nor disagree\" />\r\n         <input type=\"radio\" name=\"36\" cf-label=\"Disagree\" value=\"Disagree\" />\r\n         <input type=\"radio\" name=\"36\" cf-label=\"Strongly Disagree\" value=\"Strongly_disagree\" />\r\n        \r\n       </fieldset>\r\n       \r\n       <cf-robot-message cf-questions=\"aDS\" cf-conditional-36=\"Strongly agree\"></cf-robot-message>\r\n         \r\n       <cf-robot-message cf-questions=\"ads\" cf-conditional-36=\"Agree\"></cf-robot-message>\r\n      \r\n       <cf-robot-message cf-questions=\"asd\" cf-conditional-36=\"Neither agree nor disagree\"></cf-robot-message>    \r\n      \r\n         <cf-robot-message cf-questions=\"Ads\" cf-conditional-36=\"Disagree\"></cf-robot-message>\r\n        \r\n         <cf-robot-message cf-questions=\"asd\" cf-conditional-36=\"Strongly_disagree\"></cf-robot-message>\r\n\r\n       \r\n       ', 'adf', 0),
(37, '<fieldset cf-questions=\"wqr\"  cf-input-placeholder=\"Please select one of the above options\"><input type=\"radio\" name=\"37\" cf-label=\"wqer\"value=\"wqer\"/></fieldset> <cf-robot-message cf-questions=\"qrw\" cf-conditional-37=\"wqer\"></cf-robot-message>', 'wqr', 0),
(38, '<fieldset cf-questions=\"asd\"  cf-input-placeholder=\"Please select one of the above options\"><input type=\"radio\" name=\"38\" cf-label=\"asd\"value=\"asd\"/></fieldset> <cf-robot-message cf-questions=\"asd\" cf-conditional-38=\"asd\"></cf-robot-message>', 'asd', 0),
(39, '<fieldset cf-questions=\"asd\"  cf-input-placeholder=\"Please select one of the above options\"><input type=\"radio\" name=\"39\" cf-label=\"ADFA\"value=\"ADFA\"/></fieldset> <cf-robot-message cf-questions=\"adfsdf\" cf-conditional-39=\"ADFA\"></cf-robot-message>', 'asd', 0),
(40, '<fieldset cf-questions=\"asd\"  cf-input-placeholder=\"Please select one of the above options\"><input type=\"radio\" name=\"40\" cf-label=\"adsf\"value=\"adsf\"/></fieldset> <cf-robot-message cf-questions=\"asd\" cf-conditional-40=\"adsf\"></cf-robot-message>', 'asd', 0),
(41, '<fieldset cf-questions=\"adf\"  cf-input-placeholder=\"Please select one of the above options\"><input type=\"radio\" name=\"41\" cf-label=\"ADFA\"value=\"ADFA\"/></fieldset> <cf-robot-message cf-questions=\"adfsdf\" cf-conditional-41=\"ADFA\"></cf-robot-message>', 'adf', 0),
(42, '<input type=\"text\"name=\"42\" cf-questions=\"asd\">', 'asd', 0),
(43, '<input type=\"text\"name=\"43\" cf-questions=\"now\">', 'now', 0),
(44, '<input type=\"text\"name=\"44\" cf-questions=\"how are you?\">', 'how are you?', 0),
(45, '<input type=\"text\"name=\"45\" cf-questions=\"test question\">', 'test question', 0),
(46, '<input type=\"text\"name=\"46\" cf-questions=\"how are you?\">', 'how are you?', 0),
(47, '<input type=\"text\"name=\"47\" cf-questions=\"how are you?\">', 'how are you?', 0),
(48, '<input type=\"text\"name=\"48\" cf-questions=\"asfgsag\">', 'asfgsag', 0),
(49, '<input type=\"text\"name=\"49\" cf-questions=\"testnow\">', 'testnow', 0),
(50, '<input type=\"text\"name=\"50\" cf-questions=\"hvjhv\">', 'hvjhv', 0),
(51, '<input type=\"text\"name=\"51\" cf-questions=\"now\">', 'now', 0),
(52, '<input type=\"text\"name=\"52\" cf-questions=\"adding now\">', 'adding now', 0),
(53, '<input type=\"text\"name=\"53\" cf-questions=\"new question now\">', 'new question now', 0),
(54, '  <fieldset cf-questions=\"test\"  cf-input-placeholder=\"Please select one of the above options\">\r\n         \r\n         <input type=\"radio\" name=\"54\" cf-label=\"Strongly Agree\"value=\"Strongly agree\"required/>\r\n         <input type=\"radio\" name=\"54\" cf-label=\"Agree\" value=\"Agree\" />\r\n         <input type=\"radio\" name=\"54\" cf-label=\"Neither agree nor disagree\" value=\"Neither agree nor disagree\" />\r\n         <input type=\"radio\" name=\"54\" cf-label=\"Disagree\" value=\"Disagree\" />\r\n         <input type=\"radio\" name=\"54\" cf-label=\"Strongly Disagree\" value=\"Strongly_disagree\" />\r\n        \r\n       </fieldset>\r\n       \r\n       <cf-robot-message cf-questions=\"asd\" cf-conditional-54=\"Strongly agree\"></cf-robot-message>\r\n         \r\n       <cf-robot-message cf-questions=\"caac\" cf-conditional-54=\"Agree\"></cf-robot-message>\r\n      \r\n       <cf-robot-message cf-questions=\"asd\" cf-conditional-54=\"Neither agree nor disagree\"></cf-robot-message>    \r\n      \r\n         <cf-robot-message cf-questions=\"adc\" cf-conditional-54=\"Disagree\"></cf-robot-message>\r\n        \r\n         <cf-robot-message cf-questions=\"asd\" cf-conditional-54=\"Strongly_disagree\"></cf-robot-message>\r\n\r\n       \r\n       ', 'test', 0),
(55, '<fieldset cf-questions=\"you are good\"  cf-input-placeholder=\"Please select one of the above options\"><input type=\"radio\" name=\"55\" cf-label=\"qwq\"value=\"qwq\"/><input type=\"radio\" name=\"55\" cf-label=\"2\"value=\"2\"/><input type=\"radio\" name=\"55\" cf-label=\"3\"value=\"3\"/></fieldset> <cf-robot-message cf-questions=\"qer\" cf-conditional-55=\"qwq\"></cf-robot-message> <cf-robot-message cf-questions=\"2\" cf-conditional-55=\"2\"></cf-robot-message> <cf-robot-message cf-questions=\"3\" cf-conditional-55=\"3\"></cf-robot-message>', 'you are good', 0),
(56, '<input type=\"text\"name=\"56\" cf-questions=\"check\">', 'check', 0),
(57, '<input type=\"text\"name=\"57\" cf-questions=\"testing final\">', 'testing final', 0),
(58, '<input type=\"text\"name=\"58\" cf-questions=\"239\">', '239', 0),
(59, '<input type=\"text\"name=\"59\" cf-questions=\"sfd\">', 'sfd', 0),
(60, '<input type=\"text\"name=\"60\" cf-questions=\"sfsd\">', 'sfsd', 0),
(61, '<input type=\"text\"name=\"61\" cf-questions=\"how are you?\">', 'how are you?', 0),
(62, '<input type=\"text\"name=\"62\" cf-questions=\"how are you?\">', 'how are you?', 0),
(63, '<input type=\"text\"name=\"63\" cf-questions=\"how are you?\">', 'how are you?', 0),
(64, '<input type=\"text\"name=\"64\" cf-questions=\"asd\">', 'asd', 0),
(65, '<input type=\"text\"name=\"65\" cf-questions=\"how are you?\">', 'how are you?', 251),
(66, '<input type=\"text\"name=\"66\" cf-questions=\"text question test\">', 'text question test', 0),
(67, '', 'text question test', 0),
(68, '  <fieldset cf-questions=\"how are you?\"  cf-input-placeholder=\"Please select one of the above options\">\r\n         \r\n         <input type=\"radio\" name=\"68\" cf-label=\"Strongly Agree\"value=\"Strongly agree\"required/>\r\n         <input type=\"radio\" name=\"68\" cf-label=\"Agree\" value=\"Agree\" />\r\n         <input type=\"radio\" name=\"68\" cf-label=\"Neither agree nor disagree\" value=\"Neither agree nor disagree\" />\r\n         <input type=\"radio\" name=\"68\" cf-label=\"Disagree\" value=\"Disagree\" />\r\n         <input type=\"radio\" name=\"68\" cf-label=\"Strongly Disagree\" value=\"Strongly_disagree\" />\r\n        \r\n       </fieldset>\r\n       \r\n       <cf-robot-message cf-questions=\"awesome!\" cf-conditional-68=\"Strongly agree\"></cf-robot-message>\r\n         \r\n       <cf-robot-message cf-questions=\"nice\" cf-conditional-68=\"Agree\"></cf-robot-message>\r\n      \r\n       <cf-robot-message cf-questions=\"asd\" cf-conditional-68=\"Neither agree nor disagree\"></cf-robot-message>    \r\n      \r\n         <cf-robot-message cf-questions=\"don worry\" cf-conditional-68=\"Disagree\"></cf-robot-message>\r\n        \r\n         <cf-robot-message cf-questions=\"sad\" cf-conditional-68=\"Strongly_disagree\"></cf-robot-message>\r\n\r\n       \r\n       ', 'how are you?', 0),
(69, '', 'how are you?', 0),
(70, '<fieldset cf-questions=\"how are you?\"  cf-input-placeholder=\"Please select one of the above options\"><input type=\"radio\" name=\"70\" cf-label=\"1\"value=\"1\"/><input type=\"radio\" name=\"70\" cf-label=\"2\"value=\"2\"/><input type=\"radio\" name=\"70\" cf-label=\"afsdff\"value=\"afsdff\"/></fieldset> <cf-robot-message cf-questions=\"1\" cf-conditional-70=\"1\"></cf-robot-message> <cf-robot-message cf-questions=\"2\" cf-conditional-70=\"2\"></cf-robot-message> <cf-robot-message cf-questions=\"asfd\" cf-conditional-70=\"afsdff\"></cf-robot-message>', 'how are you?', 0),
(71, '', 'how are you?', 0),
(72, '<input type=\"text\"name=\"72\" cf-questions=\"text\">', 'text', 0),
(73, '', 'text', 0),
(74, '<input type=\"text\"name=\"74\" cf-questions=\"how are you?\">', 'how are you?', 254),
(75, '<input type=\"text\"name=\"75\" cf-questions=\"text\">', 'text', 255),
(76, '  <fieldset cf-questions=\"likert test\"  cf-input-placeholder=\"Please select one of the above options\">\r\n         \r\n         <input type=\"radio\" name=\"76\" cf-label=\"Strongly Agree\"value=\"Strongly agree\"required/>\r\n         <input type=\"radio\" name=\"76\" cf-label=\"Agree\" value=\"Agree\" />\r\n         <input type=\"radio\" name=\"76\" cf-label=\"Neither agree nor disagree\" value=\"Neither agree nor disagree\" />\r\n         <input type=\"radio\" name=\"76\" cf-label=\"Disagree\" value=\"Disagree\" />\r\n         <input type=\"radio\" name=\"76\" cf-label=\"Strongly Disagree\" value=\"Strongly_disagree\" />\r\n        \r\n       </fieldset>\r\n       \r\n       <cf-robot-message cf-questions=\"sga\" cf-conditional-76=\"Strongly agree\"></cf-robot-message>\r\n         \r\n       <cf-robot-message cf-questions=\"safg\" cf-conditional-76=\"Agree\"></cf-robot-message>\r\n      \r\n       <cf-robot-message cf-questions=\"dfag\" cf-conditional-76=\"Neither agree nor disagree\"></cf-robot-message>    \r\n      \r\n         <cf-robot-message cf-questions=\"gdf\" cf-conditional-76=\"Disagree\"></cf-robot-message>\r\n        \r\n         <cf-robot-message cf-questions=\"sfd\" cf-conditional-76=\"Strongly_disagree\"></cf-robot-message>\r\n\r\n       \r\n       ', 'likert test', 0),
(77, '', 'likert test', 0),
(78, '<input type=\"text\"name=\"78\" cf-questions=\"text\">', 'text', 256),
(79, '  <fieldset cf-questions=\"likert test\"  cf-input-placeholder=\"Please select one of the above options\">\r\n         \r\n         <input type=\"radio\" name=\"79\" cf-label=\"Strongly Agree\"value=\"Strongly agree\"required/>\r\n         <input type=\"radio\" name=\"79\" cf-label=\"Agree\" value=\"Agree\" />\r\n         <input type=\"radio\" name=\"79\" cf-label=\"Neither agree nor disagree\" value=\"Neither agree nor disagree\" />\r\n         <input type=\"radio\" name=\"79\" cf-label=\"Disagree\" value=\"Disagree\" />\r\n         <input type=\"radio\" name=\"79\" cf-label=\"Strongly Disagree\" value=\"Strongly_disagree\" />\r\n        \r\n       </fieldset>\r\n       \r\n       <cf-robot-message cf-questions=\"ar\" cf-conditional-79=\"Strongly agree\"></cf-robot-message>\r\n         \r\n       <cf-robot-message cf-questions=\"re\" cf-conditional-79=\"Agree\"></cf-robot-message>\r\n      \r\n       <cf-robot-message cf-questions=\"a\" cf-conditional-79=\"Neither agree nor disagree\"></cf-robot-message>    \r\n      \r\n         <cf-robot-message cf-questions=\"waer\" cf-conditional-79=\"Disagree\"></cf-robot-message>\r\n        \r\n         <cf-robot-message cf-questions=\"ewr\" cf-conditional-79=\"Strongly_disagree\"></cf-robot-message>\r\n\r\n       \r\n       ', 'likert test', 256),
(80, '<fieldset cf-questions=\"mcq for test\"  cf-input-placeholder=\"Please select one of the above options\"><input type=\"radio\" name=\"80\" cf-label=\"art\"value=\"art\"/><input type=\"radio\" name=\"80\" cf-label=\"2\"value=\"2\"/></fieldset> <cf-robot-message cf-questions=\"wrt\" cf-conditional-80=\"art\"></cf-robot-message> <cf-robot-message cf-questions=\"2\" cf-conditional-80=\"2\"></cf-robot-message>', 'mcq for test', 0),
(81, '<input type=\"text\"name=\"81\" cf-questions=\"text\">', 'text', 258),
(82, '  <fieldset cf-questions=\"likert\"  cf-input-placeholder=\"Please select one of the above options\">\r\n         \r\n         <input type=\"radio\" name=\"82\" cf-label=\"Strongly Agree\"value=\"Strongly agree\"required/>\r\n         <input type=\"radio\" name=\"82\" cf-label=\"Agree\" value=\"Agree\" />\r\n         <input type=\"radio\" name=\"82\" cf-label=\"Neither agree nor disagree\" value=\"Neither agree nor disagree\" />\r\n         <input type=\"radio\" name=\"82\" cf-label=\"Disagree\" value=\"Disagree\" />\r\n         <input type=\"radio\" name=\"82\" cf-label=\"Strongly Disagree\" value=\"Strongly_disagree\" />\r\n        \r\n       </fieldset>\r\n       \r\n       <cf-robot-message cf-questions=\"dfA\" cf-conditional-82=\"Strongly agree\"></cf-robot-message>\r\n         \r\n       <cf-robot-message cf-questions=\"AFDS\" cf-conditional-82=\"Agree\"></cf-robot-message>\r\n      \r\n       <cf-robot-message cf-questions=\"SADF\" cf-conditional-82=\"Neither agree nor disagree\"></cf-robot-message>    \r\n      \r\n         <cf-robot-message cf-questions=\"ASFD\" cf-conditional-82=\"Disagree\"></cf-robot-message>\r\n        \r\n         <cf-robot-message cf-questions=\"ASF\" cf-conditional-82=\"Strongly_disagree\"></cf-robot-message>\r\n\r\n       \r\n       ', 'likert', 258),
(83, '<fieldset cf-questions=\"mcq for test\"  cf-input-placeholder=\"Please select one of the above options\"><input type=\"radio\" name=\"83\" cf-label=\"1\"value=\"1\"/><input type=\"radio\" name=\"83\" cf-label=\"2\"value=\"2\"/></fieldset> <cf-robot-message cf-questions=\"1\" cf-conditional-83=\"1\"></cf-robot-message> <cf-robot-message cf-questions=\"2\" cf-conditional-83=\"2\"></cf-robot-message>', 'mcq for test', 258),
(84, '<input type=\"text\"name=\"84\" cf-questions=\"text\">', 'text', 259),
(85, '  <fieldset cf-questions=\"how are you?\"  cf-input-placeholder=\"Please select one of the above options\">\r\n         \r\n         <input type=\"radio\" name=\"85\" cf-label=\"Strongly Agree\"value=\"Strongly agree\"required/>\r\n         <input type=\"radio\" name=\"85\" cf-label=\"Agree\" value=\"Agree\" />\r\n         <input type=\"radio\" name=\"85\" cf-label=\"Neither agree nor disagree\" value=\"Neither agree nor disagree\" />\r\n         <input type=\"radio\" name=\"85\" cf-label=\"Disagree\" value=\"Disagree\" />\r\n         <input type=\"radio\" name=\"85\" cf-label=\"Strongly Disagree\" value=\"Strongly_disagree\" />\r\n        \r\n       </fieldset>\r\n       \r\n       <cf-robot-message cf-questions=\"ADA\" cf-conditional-85=\"Strongly agree\"></cf-robot-message>\r\n         \r\n       <cf-robot-message cf-questions=\"ads\" cf-conditional-85=\"Agree\"></cf-robot-message>\r\n      \r\n       <cf-robot-message cf-questions=\"ads\" cf-conditional-85=\"Neither agree nor disagree\"></cf-robot-message>    \r\n      \r\n         <cf-robot-message cf-questions=\"ads\" cf-conditional-85=\"Disagree\"></cf-robot-message>\r\n        \r\n         <cf-robot-message cf-questions=\"AD\" cf-conditional-85=\"Strongly_disagree\"></cf-robot-message>\r\n\r\n       \r\n       ', 'how are you?', 259),
(86, '<fieldset cf-questions=\"MCQ\"  cf-input-placeholder=\"Please select one of the above options\"></fieldset>', 'MCQ', 259),
(87, '<input type=\"text\"name=\"87\" cf-questions=\"how are you?\">', 'how are you?', 261),
(88, '  <fieldset cf-questions=\"you are good\"  cf-input-placeholder=\"Please select one of the above options\">\r\n         \r\n         <input type=\"radio\" name=\"88\" cf-label=\"Strongly Agree\"value=\"Strongly agree\"required/>\r\n         <input type=\"radio\" name=\"88\" cf-label=\"Agree\" value=\"Agree\" />\r\n         <input type=\"radio\" name=\"88\" cf-label=\"Neither agree nor disagree\" value=\"Neither agree nor disagree\" />\r\n         <input type=\"radio\" name=\"88\" cf-label=\"Disagree\" value=\"Disagree\" />\r\n         <input type=\"radio\" name=\"88\" cf-label=\"Strongly Disagree\" value=\"Strongly_disagree\" />\r\n        \r\n       </fieldset>\r\n       \r\n       <cf-robot-message cf-questions=\"\" cf-conditional-88=\"Strongly agree\"></cf-robot-message>\r\n         \r\n       <cf-robot-message cf-questions=\"\" cf-conditional-88=\"Agree\"></cf-robot-message>\r\n      \r\n       <cf-robot-message cf-questions=\"\" cf-conditional-88=\"Neither agree nor disagree\"></cf-robot-message>    \r\n      \r\n         <cf-robot-message cf-questions=\"\" cf-conditional-88=\"Disagree\"></cf-robot-message>\r\n        \r\n         <cf-robot-message cf-questions=\"\" cf-conditional-88=\"Strongly_disagree\"></cf-robot-message>\r\n\r\n       \r\n       ', 'you are good', 261),
(89, '<fieldset cf-questions=\"What u=is my question>\"  cf-input-placeholder=\"Please select one of the above options\"></fieldset>', 'What u=is my question>', 261),
(90, '<input type=\"text\"name=\"90\" cf-questions=\"Test?\">', 'Test?', 262);

-- --------------------------------------------------------

--
-- Table structure for table `response_table`
--

CREATE TABLE `response_table` (
  `id` int(11) NOT NULL,
  `Survey_link` varchar(10) NOT NULL,
  `Questions` text NOT NULL,
  `Answers` text NOT NULL,
  `Project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `response_table`
--

INSERT INTO `response_table` (`id`, `Survey_link`, `Questions`, `Answers`, `Project_id`) VALUES
(1, 'ot2SKVJ', '3', 'nice', 6),
(2, 'ot2SKVJ', '2', 'nice', 6),
(3, '9DSMksf', '4', 'iam good', 7),
(4, 'dA7ho5Q', '5', 'sfgs', 9),
(5, 'dA7ho5Q', '3', 'nice', 9),
(6, 'MBSgp1p', '4', 'csac', 11),
(7, 'MBSgp1p', '4', 'csac', 11),
(8, 'z56ik40', '5', 'setgwetg', 12),
(9, 'z56ik40', '4', 'etyerty', 12),
(10, 'z56ik40', '3', 'nice', 12),
(11, 'z56ik40', '2', 'nice', 12),
(12, 'z56ik40', '1', 'lkj', 12),
(13, '6oMZlAy', '6', 'jhgjkh', 13),
(14, 'wMoYOYI', '44', 'asfs', 122),
(15, 'wMoYOYI', '43', 'sf', 122),
(16, 'y6TSjud', '45', 'axas', 126),
(17, 'y6TSjud', '44', 'asas', 126),
(18, '4QHWefl', '47', 'jk,hkj', 142),
(19, '4QHWefl', '43', 'jhvhj', 142),
(20, 'EoB2K3d', '52', 'jhgbih', 221),
(21, 'EoB2K3d', '51', 'ihniu', 221),
(22, 'EoB2K3d', '50', 'hbnijk', 221),
(23, 'XIF8oDU', '53', 'asd', 224),
(24, 'XIF8oDU', '52', 'asd', 224),
(25, 'DXZCeup', '55', '2', 226),
(26, 'DXZCeup', '55', '2', 226),
(27, 'DXZCeup', '55', '2', 226),
(28, 'VTJqvZo', '54', 'Disagree', 225),
(29, 'VTJqvZo', '53', 'ssdh', 225),
(30, 'VTJqvZo', '54', 'Disagree', 225),
(31, 'VTJqvZo', '53', 'ssdh', 225),
(32, 'VTJqvZo', '54', 'Disagree', 225),
(33, 'VTJqvZo', '53', 'ssdh', 225),
(34, 'VTJqvZo', '54', 'Disagree', 225),
(35, 'VTJqvZo', '53', 'ssdh', 225),
(36, 'VTJqvZo', '54', 'Disagree', 225),
(37, 'VTJqvZo', '53', 'ssdh', 225),
(38, 'VTJqvZo', '54', 'Disagree', 225),
(39, 'VTJqvZo', '53', 'ssdh', 225),
(40, 'Rm6iMSc', '44', 'adae', 233),
(41, 'IY8hIic', '83', '2', 258),
(42, 'IY8hIic', '82', 'Neither agree nor disagree', 258),
(43, 'IY8hIic', '81', 'JH', 258),
(44, 'M01wgoD', '85', 'Neither agree nor disagree', 260),
(45, 'M01wgoD', '81', 'wf', 260),
(46, 'M01wgoD', '80', '2', 260),
(47, 'vAdheNN', '90', 'gdgh', 262);

-- --------------------------------------------------------

--
-- Table structure for table `survey_table`
--

CREATE TABLE `survey_table` (
  `id` int(11) NOT NULL,
  `Project_id` int(11) NOT NULL,
  `Employee_name` text NOT NULL,
  `Survey_link` varchar(15) NOT NULL,
  `Employee_mail` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey_table`
--

INSERT INTO `survey_table` (`id`, `Project_id`, `Employee_name`, `Survey_link`, `Employee_mail`) VALUES
(1, 2, 'sukumar', 'bftfMbp', ''),
(2, 4, 'sukumar', 'zdjQMhL', ''),
(3, 5, 'sukumar', 'a639O7J', ''),
(4, 5, 'haider', 'sSuP6n5', ''),
(5, 5, 'ajay', 'djOMAMk', ''),
(6, 6, 'ajay', 'ot2SKVJ', ''),
(7, 6, 'sukumar', 'NdsURBA', ''),
(8, 6, 'haider', 'Q1wQZUD', ''),
(9, 6, 'vikas', 'cs1nn91', ''),
(10, 7, 'sukumar', '9DSMksf', ''),
(11, 7, 'haider', 'YEjra1r', ''),
(12, 8, 'sukumar', 'lbhXur3', 'sukumar@e2epeoplepractices.com'),
(13, 9, 'sukumar', 'dA7ho5Q', ''),
(14, 11, 'sukumar', 'MBSgp1p', ''),
(15, 12, 'sukumar', 'z56ik40', ''),
(16, 13, 'sukumar', '6oMZlAy', ''),
(17, 0, 'sukumar', 'V6IosvZ', ''),
(18, 121, 'sukumar', 'jQLelOU', ''),
(19, 121, 'sukumar', 'O8wEZUh', ''),
(20, 121, 'sukumar', 'dpKTT4x', ''),
(21, 121, 'sukumar', 'jKr5D2T', ''),
(22, 122, 'sukumar', 'wMoYOYI', ''),
(23, 0, '?T?ҷ', 'uwCjqJH', '?4\'򌗴?Ȓ??(??%KAI\"SJU?Y?m{VNX?\Z_|?/?'),
(24, 0, '?˔??E?????D??Ҍy^ĂeL?Ԡ??c?*? ?doq??', 'ZQCREi5', ''),
(25, 0, '?y??64N??N??Y', '34p1PuU', '??Ku?VC?D??-??R?=????\\K?g?k?g%?/???X???F?`??+>$??h?=7\rϗ'),
(26, 0, '?h?V?Q???j?0?`b???????@?$??BΈJ?Jd', 'HnGe9z7', ''),
(27, 0, '????sY?+0?<?r?x9g>r?????z7????ꁜ?[?͔0?~\Z]A?o?3$J????)dw??X????;????sL?s?n/t??`?????c;?8a?b??ǜT*??SC????&?6?m?bɁƫ??L?h?؛?O?F7?Py=4???H?&@&?~}9n??#KT', 'BTmrP9a', ''),
(28, 0, '?K??_??R`??z????Q?0??e?我??R}F??7??׷???p??N2???{?i?붏?$?g??]??s??WЭ?????_?a׾??״ǝ?????w;???3????x????g???N???~???', 'twGPMW8', 'S\"ԝ ?\Z>97t9\"???ǖ??>5?\0\0??\0PK\0\0\0\0\0!\0?>???\0\0\0?\0\0\Z\0xl/_rels/workbook.'),
(29, 0, '???0W.?e?п????k?N??????4?$v?eE4?	??<?', 'XVJ4kGU', '????-?hnlb??? '),
(30, 0, '}?C)\r4?З????6?=3????8?˦?%kX??w?|s??7]?t/??N9aIۭ^??N?lB?Y۽5????J&????%???ݏ???vD?c??}?wPۍ?????|͈_`s???)Kc$?6??\'):?1-?*??#??N?bp{}:%c??Kww??O?6\\6?iz ]c?Ba\'?U??K??9B??B?v<????P?<h????w/??NnD?[?n??r??`rXS}??ѺS?󽠳??\0Tl???~???\0??0Ҍ???ﶺ=??j???????ի^?_???????+P????!D??+P??-1i?B??+P?6??J??5?E?$??????hא)?W????\r\Z??y??jXW??b????bt??\0H E?$?X?????CD?(%??EPxs?0͕ZeP????ԕ???H????	?h?|>N?\\??O???A??{v?????_O=:y?s޷re?]A?L?{??W}????/߿|?u??i<??/~???o???=????o??x????_???c??N?F:|Hb̝k?ع?b????of1?1', 'Zz3MW0F', 'P?-??\"2?ז??p]l??v'),
(31, 0, '*c^^?5?D?BK?W??\0?3F?', 'HcPLHlT', '????K??p??읧w?#[?!J??s?WbsFؠy??D?N?p?3v??etw1??O?)?l*?;??\"b\rɐ??B*??????'),
(32, 0, '?i???2{??dH?A49vFt??DPb~?*8!??Y4\'?3?BV?ߩ?)?]?@Q?P֎?<B????yW\"?????1???1C@7C8??	??gݳ?j9M4?9?P9k????M?\Z?b5Xeҭ?\r?к?J??P?????kL\Z??3??d?)?R??V??9.?H[⶞#??xۙ?NW?? V?JU??Ç?m????x??xAW??/)?E_v????\"?D?F?+g???{??w??懥J??W)5?N????z??W+?n?L', 'wFLlUcK', '??~??e\0Qt?zQ??_??Yۅ1??L}^)+???K?????C@t??A????V?3(y?n??\n?n???ޠ??????)?ש?'),
(33, 0, '㦸??4\'??^*?1p?;?Ԛ???F??(?X&Q????????/???a[ƙ?;', 'OmDFhU7', '??bu??J?-?]8#?ׅsy??8???Z5?2\'??UU??????KL? ?\r)?q=???oD?aM?-ʒJI?x?j?IQD'),
(34, 0, 'VR}??}?', 'QDuCGgp', ''),
(35, 0, 'ZY?|?	I?p??+?(d?I$?׸ ?m5?j??{qd?ڃ?`?{+ĖG?&KZ?????Z???l?)?|??^?%?+?j?ë7???5?*??{???O??&?0?\'?9̒??%?ј|??^?%?Vb?lwo????w???V˒?????ۼ???)(??vԾVϢ?*O?\"??L???x?@?c??_\0?oF!????#u??׭?R??Ivޜ???p[???s?vRPۈ@??hehaܦqU????X????c????\08v?gR?g%x\"???M?G?\'͙|??s ?ۖqäe?pc6?s???9??$jb?[??G????\Z??\\{<1??V?????1E??gZ?V?n?nأ2\"E??\'۫??R?????4ÿ?j??????e??`??g?4???z?ǳ??f?/?(??9ٷGl[?y??\rg???N?C??ۃ', 'ejkBNse', 'E?KO?M)Оr_F??<??\rB6\'1???<??|????x?=~?Vp??ݒ?W?	'),
(36, 0, '?1?j??T', 'dCrhGbY', ''),
(37, 0, 'E??+A??????~\0\0??\0PK\0\0\0\0\0!\0????\0\0\0?\0\0\0\0\0\0xl/sharedStrings.xmlT?Mn?0??H???}???d$????r??j<N=c???@???ޏ?9??Yݰp?da????B\"?.?_;P', 'uWHH8fh', '??gB??pt??aպ?&???5?	??./H͹撼4YF?KA???(i?۾???Gr%??U)?V<??3????&_?g????}'),
(38, 0, '6]?X?ɱQ?yzxQ*??>2)?P??x7|??چ?u???pQ`kM[)???t1?d?9`me62?^А|??\'?0ޘ?0)ȇi?tIm??v?g??5?5??VHۤ?/\r?l?*?|?۲.k????q??7?A?c?i=Ʃ]?v??=?q?7??\0\0\0??\0PK\0\0\0\0\0!\0\\+\\U\0\0g\0\0\0docProps/core.xml ?(?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0|?QK?0???C?{??ss???=9?(?!???$????i??\r???s??9?dӝ)?/p^W6Gl@QVVJ?U?^3<A??*QVr?????U&k.+O???\r>?$빬s????x?#? :l??3\"ħ[?ZȍXI)A(i??????T?G?[Wv\0%	?`?O؀?o\0g???r?4:????????A??;?{c?4?f?ň?y??>wU????$?\"S?K\"T????????Y{?R?0??^jPw?B{#t???#??~f??%R?4?$???\'?ux????\"2F??1-؄?[???6??~?00??S?i??Ⴅ???azF<?.???(?\0\0??\0PK\0\0\0\0\0!\0aI	?\0\0\0\0\0docProps/app.xml ?(?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0??Ao?0????9?P??bHW??a??gM?c??$????׏????z???{x?DI?:_????P???k??x??]~?	??1@%???F_|R?dr?G?DK?VR?m?3?`9?????6?el\Zg?6ڗɫ???p 5ԗ?(??UO\r????qwL?շ?????????9bl??~????????`_???.???jk??5??x%??̰??q??iՃ??txmW??m?J?&;???Ԍ?OHY????-\0??l??c9??k?E/G??!`a?q???j6&?;??9??0?N8ہo:s?7^?O?\'{?d?S?Åg|H?xk^?y>T??d??N?>\r?=o2?!dݚ??????0<??????zQ~.?]g3%????\0\0??\0PK-\0\0\0\0\0\0!\0b??h^\0\0?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0[Content_Types].xmlPK-\0\0\0\0\0\0!\0?U0#?\0\0\0L\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0?\0\0_rels/.relsPK-\0\0\0\0\0\0!\0i?m?\0\0?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0?\0\0xl/workbook.xmlPK-\0\0\0\0\0\0!\0?>???\0\0\0?\0\0\Z\0\0\0\0\0\0\0\0\0\0\0\0\0?	\0\0xl/_rels/workbook.xml.relsPK-\0\0\0\0\0\0!\0??V?:\0\0?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0?\0\0xl/worksheets/sheet1.xmlPK-\0\0\0\0\0\0!\0u>?i?\0\0?\Z\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0d\0\0xl/theme/theme1.xmlPK-\0\0\0\0\0\0!\0??N?\0\0?\0\0\r\0\0\0\0\0\0\0\0\0\0\0\0\0(\0\0xl/styles.xmlPK-\0\0\0\0\0\0!\0????\0\0\0?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0X\0\0xl/sharedStrings.xmlPK-\0\0\0\0\0\0!\0V?#?\0\0\0L\0\0#\0\0\0\0\0\0\0\0\0\0\0\0\0=\0\0xl/worksheets/_rels/sheet1.xml.relsPK-\0\0\0\0\0\0!\0\\+\\U\0\0g\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0Y\Z\0\0docProps/core.xmlPK-\0\0\0\0\0\0!\0aI	?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0?\0\0docProps/app.xmlPK\0\0\0\0\0\0?\0\0?\0\0\0\0', '72h1KUk', ''),
(39, 123, '?T?ҷ', '1rIlXjg', '?4\'򌗴?Ȓ??(??%KAI\"SJU?Y?m{VNX?\Z_|?/?'),
(40, 123, '?˔??E?????D??Ҍy^ĂeL?Ԡ??c?*? ?doq??', '6GLzVoU', ''),
(41, 123, '?y??64N??N??Y', 'Dy6NpiI', '??Ku?VC?D??-??R?=????\\K?g?k?g%?/???X???F?`??+>$??h?=7\rϗ'),
(42, 123, '?h?V?Q???j?0?`b???????@?$??BΈJ?Jd', 'bQ4gMAK', ''),
(43, 123, '????sY?+0?<?r?x9g>r?????z7????ꁜ?[?͔0?~\Z]A?o?3$J????)dw??X????;????sL?s?n/t??`?????c;?8a?b??ǜT*??SC????&?6?m?bɁƫ??L?h?؛?O?F7?Py=4???H?&@&?~}9n??#KT', 'Mb5Y5iX', ''),
(44, 123, '?K??_??R`??z????Q?0??e?我??R}F??7??׷???p??N2???{?i?붏?$?g??]??s??WЭ?????_?a׾??״ǝ?????w;???3????x????g???N???~???', 'yNrQQSv', 'S\"ԝ ?\Z>97t9\"???ǖ??>5?\0\0??\0PK\0\0\0\0\0!\0?>???\0\0\0?\0\0\Z\0xl/_rels/workbook.'),
(45, 123, '???0W.?e?п????k?N??????4?$v?eE4?	??<?', 'nGGfcgD', '????-?hnlb??? '),
(46, 123, '}?C)\r4?З????6?=3????8?˦?%kX??w?|s??7]?t/??N9aIۭ^??N?lB?Y۽5????J&????%???ݏ???vD?c??}?wPۍ?????|͈_`s???)Kc$?6??\'):?1-?*??#??N?bp{}:%c??Kww??O?6\\6?iz ]c?Ba\'?U??K??9B??B?v<????P?<h????w/??NnD?[?n??r??`rXS}??ѺS?󽠳??\0Tl???~???\0??0Ҍ???ﶺ=??j???????ի^?_???????+P????!D??+P??-1i?B??+P?6??J??5?E?$??????hא)?W????\r\Z??y??jXW??b????bt??\0H E?$?X?????CD?(%??EPxs?0͕ZeP????ԕ???H????	?h?|>N?\\??O???A??{v?????_O=:y?s޷re?]A?L?{??W}????/߿|?u??i<??/~???o???=????o??x????_???c??N?F:|Hb̝k?ع?b????of1?1', 'K1082s0', 'P?-??\"2?ז??p]l??v'),
(47, 123, '*c^^?5?D?BK?W??\0?3F?', '1oUDd4j', '????K??p??읧w?#[?!J??s?WbsFؠy??D?N?p?3v??etw1??O?)?l*?;??\"b\rɐ??B*??????'),
(48, 123, '?i???2{??dH?A49vFt??DPb~?*8!??Y4\'?3?BV?ߩ?)?]?@Q?P֎?<B????yW\"?????1???1C@7C8??	??gݳ?j9M4?9?P9k????M?\Z?b5Xeҭ?\r?к?J??P?????kL\Z??3??d?)?R??V??9.?H[⶞#??xۙ?NW?? V?JU??Ç?m????x??xAW??/)?E_v????\"?D?F?+g???{??w??懥J??W)5?N????z??W+?n?L', 'Zq7A1ab', '??~??e\0Qt?zQ??_??Yۅ1??L}^)+???K?????C@t??A????V?3(y?n??\n?n???ޠ??????)?ש?'),
(49, 123, '㦸??4\'??^*?1p?;?Ԛ???F??(?X&Q????????/???a[ƙ?;', 'Nw5TeyR', '??bu??J?-?]8#?ׅsy??8???Z5?2\'??UU??????KL? ?\r)?q=???oD?aM?-ʒJI?x?j?IQD'),
(50, 123, 'VR}??}?', 'tFzUt32', ''),
(51, 123, 'ZY?|?	I?p??+?(d?I$?׸ ?m5?j??{qd?ڃ?`?{+ĖG?&KZ?????Z???l?)?|??^?%?+?j?ë7???5?*??{???O??&?0?\'?9̒??%?ј|??^?%?Vb?lwo????w???V˒?????ۼ???)(??vԾVϢ?*O?\"??L???x?@?c??_\0?oF!????#u??׭?R??Ivޜ???p[???s?vRPۈ@??hehaܦqU????X????c????\08v?gR?g%x\"???M?G?\'͙|??s ?ۖqäe?pc6?s???9??$jb?[??G????\Z??\\{<1??V?????1E??gZ?V?n?nأ2\"E??\'۫??R?????4ÿ?j??????e??`??g?4???z?ǳ??f?/?(??9ٷGl[?y??\rg???N?C??ۃ', '3WyJSrU', 'E?KO?M)Оr_F??<??\rB6\'1???<??|????x?=~?Vp??ݒ?W?	'),
(52, 123, '?1?j??T', 'iPnfP60', ''),
(53, 123, 'E??+A??????~\0\0??\0PK\0\0\0\0\0!\0????\0\0\0?\0\0\0\0\0\0xl/sharedStrings.xmlT?Mn?0??H???}???d$????r??j<N=c???@???ޏ?9??Yݰp?da????B\"?.?_;P', 'uh1XwGh', '??gB??pt??aպ?&???5?	??./H͹撼4YF?KA???(i?۾???Gr%??U)?V<??3????&_?g????}'),
(54, 123, '6]?X?ɱQ?yzxQ*??>2)?P??x7|??چ?u???pQ`kM[)???t1?d?9`me62?^А|??\'?0ޘ?0)ȇi?tIm??v?g??5?5??VHۤ?/\r?l?*?|?۲.k????q??7?A?c?i=Ʃ]?v??=?q?7??\0\0\0??\0PK\0\0\0\0\0!\0\\+\\U\0\0g\0\0\0docProps/core.xml ?(?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0|?QK?0???C?{??ss???=9?(?!???$????i??\r???s??9?dӝ)?/p^W6Gl@QVVJ?U?^3<A??*QVr?????U&k.+O???\r>?$빬s????x?#? :l??3\"ħ[?ZȍXI)A(i??????T?G?[Wv\0%	?`?O؀?o\0g???r?4:????????A??;?{c?4?f?ň?y??>wU????$?\"S?K\"T????????Y{?R?0??^jPw?B{#t???#??~f??%R?4?$???\'?ux????\"2F??1-؄?[???6??~?00??S?i??Ⴅ???azF<?.???(?\0\0??\0PK\0\0\0\0\0!\0aI	?\0\0\0\0\0docProps/app.xml ?(?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0??Ao?0????9?P??bHW??a??gM?c??$????׏????z???{x?DI?:_????P???k??x??]~?	??1@%???F_|R?dr?G?DK?VR?m?3?`9?????6?el\Zg?6ڗɫ???p 5ԗ?(??UO\r????qwL?շ?????????9bl??~????????`_???.???jk??5??x%??̰??q??iՃ??txmW??m?J?&;???Ԍ?OHY????-\0??l??c9??k?E/G??!`a?q???j6&?;??9??0?N8ہo:s?7^?O?\'{?d?S?Åg|H?xk^?y>T??d??N?>\r?=o2?!dݚ??????0<??????zQ~.?]g3%????\0\0??\0PK-\0\0\0\0\0\0!\0b??h^\0\0?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0[Content_Types].xmlPK-\0\0\0\0\0\0!\0?U0#?\0\0\0L\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0?\0\0_rels/.relsPK-\0\0\0\0\0\0!\0i?m?\0\0?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0?\0\0xl/workbook.xmlPK-\0\0\0\0\0\0!\0?>???\0\0\0?\0\0\Z\0\0\0\0\0\0\0\0\0\0\0\0\0?	\0\0xl/_rels/workbook.xml.relsPK-\0\0\0\0\0\0!\0??V?:\0\0?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0?\0\0xl/worksheets/sheet1.xmlPK-\0\0\0\0\0\0!\0u>?i?\0\0?\Z\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0d\0\0xl/theme/theme1.xmlPK-\0\0\0\0\0\0!\0??N?\0\0?\0\0\r\0\0\0\0\0\0\0\0\0\0\0\0\0(\0\0xl/styles.xmlPK-\0\0\0\0\0\0!\0????\0\0\0?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0X\0\0xl/sharedStrings.xmlPK-\0\0\0\0\0\0!\0V?#?\0\0\0L\0\0#\0\0\0\0\0\0\0\0\0\0\0\0\0=\0\0xl/worksheets/_rels/sheet1.xml.relsPK-\0\0\0\0\0\0!\0\\+\\U\0\0g\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0Y\Z\0\0docProps/core.xmlPK-\0\0\0\0\0\0!\0aI	?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0?\0\0docProps/app.xmlPK\0\0\0\0\0\0?\0\0?\0\0\0\0', 'OLbphNJ', ''),
(55, 126, 'sukumar', 'grGpQ0a', 'sukumar@mnagenome.com'),
(56, 126, 'sukumar', 'y6TSjud', 'sukumar@mnagenome.com'),
(57, 127, 'sukumar', 'ruqi8dh', 'sukumar@mnagenome.com'),
(58, 128, 'sukumar', '1vlAz5r', 'sukumar@mnagenome.com'),
(59, 129, 'sukumar', 'kQ9MiZi', 'sukumar@mnagenome.com'),
(60, 133, 'sukumar', 'ybp9TFS', 'sukumar@mnagenome.com'),
(61, 134, 'sukumar', 'z1Cuxbx', 'sukumar@mnagenome.com'),
(62, 136, 'sukumar', 'TmbWO4V', 'sukumar@mnagenome.com'),
(63, 137, '	\0\0!?\0	\0', 'BGbvrmZ', '\0\0\0\0?'),
(64, 137, 'H????*\\Ȱ?Ç#J?H??ŋ3j?ȱ?Ǐ ?C?I??ɓ(S?\\ɲ???b?', 'lR1tV5z', '??e??ϟ?w(???:?*]?t?P?`?2?J(P???Y?k?D?N???lٰb?0??l??KpmK??\0?p?  P'),
(65, 137, 'ͤ???{??ӶO?n?\0??ȓ#7??2??$?\Z????????Nb?߫?Ç?^?1?', '7G0DGLg', ''),
(66, 137, '?~?a??7?{??????~???|???X?????Azu%???yG|N0[?1h?r}=??u?? ]?m8aY???jt??_?^U?b??U\"\'v%??4??\"w0V\0?D@???UF??IVa?(.???(??KI?v?!??eX2?֏?A?c?Y???J?)?Y\\rǢW', 'mfT4XIW', ''),
(67, 137, '?ɣ?S?w\0[vJ9&?p???Yܱ?T?????Rq?֤R?N	??e??$s1????JA?eY\0?$?*\Z?????X?S?\Z??JA???Siz????Jap???c?3????h?O?^?֍??????e?:?m?v%??3.Kl??r??????W???k?????>%k??e????*', 'CbM4gIC', ''),
(68, 137, 'K?m?z畺N?Z?K?', 'SzcfaRj', ''),
(69, 137, '???Z??O?B??_iƺ$?@?*?Y???)MXr', 'j8HUUmp', ''),
(70, 137, 'T??Fj.??屢l5?n?#??|??', 'qX7DEMp', '???ٕ?.?w?OkR\\??\Z#??|??=%????'),
(71, 137, 'm_ϭ??O4+????K?(uuT\Z?tOo??]R=???Q\0??!-??X??aj??r?ϝ??Q*ݗ?Щ-?݉❷?{\r??h?#W?&?<?h??3J9?c?K?ŊC?9?3Up???^??Vi??al?:?Q??c?~A??a?s?+???2?o??????ζZm?cм??A???Sϔ??c?=??w/???w???n??œ_???˗9???_B~?u??(?????Yȇ?\0ަ\0??R\r????*?R???/????N*e??a?0??Lj?????(L?', 'hbUhm58', ''),
(72, 137, 'W?????0??gH?\Z???8̡w?????@??H?\"\Z??HL????&:??P???H?*Z??X̢???.Dz??`??H?2???hL?\Z???6???p???H?:???x̣???>????? I?B\Z???L?\"??[D\0\0!?\0	\0', 'OBBslJB', '?\0u\0A\0B\0\0?0?I???\"??`(?	Qd??%ʾ?e??L??]z???T?lCP?&?%???I\"DSM??p9???xL.??%'),
(73, 137, 'h??E?Ms?C??=?߳rS~#???T_I}Iq????B?7e?g??L???4???`??	???t??T?C?????S????V??v???v?????????m?f??~?$֥?xH???g??:???O?:?G???͐??4\0!?\0	\0', 'Kof2U83', '?\0u\0A\0B\0\0?0?I??!?D??%?di?ĩ??P l'),
(74, 137, 'j??U???f*?+T0?31?R$J?0´01???F', 'xCQweTm', ''),
(75, 137, '?7S??N2?Td?N#E?̬Ym??k!4??fb(\Z?U?���???(b]M?j?68??l?', '4b1P7Zz', ''),
(76, 137, 'X4??J|?\Z	??D\0\0!?\0	\0', 'ZwSztgx', '?\0u\0@\0B\0\0?0?I??!?DR??%?dIuf??l???d?4}?x?_)?	?Ȥ??l:/???)?ZS??v;	V?\\Rh?\r??K?	'),
(77, 137, '?$?G?}???P}Gt`4yeHc???\"ylhJ?oyU?*??MQs?m?.?g?|yA?N???\\????ma?????iZ???9?+?p?B$??\0?$?I???j???V???r???\"?H??̝?????????\0??\0A9?????B??xh!?<?a6L?', 'WoRuGtg', '?č*+F?02?|%?H)???;+Y?a?rf?;.os1Og?U_r?`?F\0!?\0	\0'),
(78, 137, '?????pH', '9NjmHSK', '\Z?3?d?KSO\Z=?Uԇ?͞BA?{:8/W?6?V	'),
(79, 137, 'K?m^?$#PM?-\r?l\0!?\0	\0', '0L0SMkk', '?\0u\0A\03\0\0?0?I??\"?D??%?di?F1?g?&?K??lk?E??ƣ???V?\r????$~?C??E?????;?]oK\Z?R˶%?'),
(80, 137, '2??A2=I??2??%*f?C %L	6Mn?P3?O?;\'D??2ZP?\rsb;:?[??\"\0\0!?\0	\0', 'ObIwIFk', '?\0u\0>\06\0\0?0?I???I??`(b?&\"F7?l\"\0FK?l???끷ߏ?\r???yA??S??A??(f?jW??u?IG?b?'),
(81, 137, '??????Z????\rgM??yn?WoXwX?7?~?@X;?Z???5???y?x|Fr?w??????\0Zj??G???D?H?N?[?D?`?H???u?N?I?I???p?Cȵp?C?C?Hp???j????j??[?<\0??j?e????p?e?????????m A?A ??<?7f4??', 'bJSmT06', ''),
(82, 137, '??*B???E? 1?J?_?H>?3p?????$D\0\0!?\0	\0', 'CbtTRaX', '?\0u\0*\0;\0\0?0?I??5뭯?\\~$(?ej?????+c?|\r?A?@?6e()?H?I2%?\' ?-?ͧ???_?x򺎻?3??s9'),
(83, 137, 's???I\0!?\0	\0', 'WXWkOC3', '?\0{\0!\07\0\0?0?9???꽱?\\(}d&Rej?j˶???Lk???Da???`Ui'),
(84, 137, '????&?!.?|R?;R?z?z\\??', 'C6auZ1I', ''),
(85, 137, '??[3E?(?5??{s???	Ę|ǃwxp}s}?o???\Z?Pb?????I?????t?ku????{??	????????U\0???????Ó??j?Ư???~?????ӳ?׌\'??a?I??a??o?????jG???s=?Bj\0!?\0	\0', 'RCgtQYO', '?\0?\0$\00\0\0?0?I+\r8k˻????_h??u?i?????L??-??????`\0??ʡ@?5???Ќ=1??9?H[??ՅS??R?\\'),
(86, 137, '$`?M\0!?\0	\0', 'vlfO8Kk', '?\0?\0\'\0(\0\0?0?I??!??w??֍Xh?dw?hZ???±?и???Γ?\Z?3 ?\'00\\?d?I??.Y?J?ڶ?	?i??kMD???'),
(87, 137, '??=?X?qQ ??\"????h??C{?:I?\'?+', 'IRFLt3n', '?\0x???f??\"0??VKb?\\*fɭ??`?]????S????r???o??w|eInebG??u?\Z?%6$V??:\0?3'),
(88, 137, '8?]I1`QC?qU??', 'flXFzjO', 'e??\rl?e?5J??	??ꄽbEpL?ʉ?8$F%??z?Lc?.?D???L?|Mc\0a1?gw??x?(ۣYNzQ:u>:5?3'),
(89, 137, '', 'HdhG7lq', ''),
(90, 137, 's ?qC.?JʙXVT????R~???y?2??\"3%?k??S??Ia?}???xh-??;t?UP\\???nW? ?v~??{???????????Q????????\"???????????u?Ľ???;??ŏ?Ϝ?M?֝k??Rz???Y???^???/??????\'???z?\0?y	(PB\0!?\0	\0', 'cjKCETR', '?\0u\0.\09\0\0?0?I??bRʾ`(jb??A?'),
(91, 137, '?>?W?????j?k?DgCb?&??5??\"\0\0!?\0	\0', 'BHuREmm', '?\0u\08\06\0\0?0?I????mv!?%???$?_閄?Nj?ίP?8]???h\'??V????SR???R??@W??*?\"?.&w?EHa?R9'),
(92, 137, '*?? ??`?\0\0!?\0	\0', '6xFmZ2Z', '?\0u\0A\0:\0\0?0?I?????`(?Vv?Ӏ??W?ԩ????x.?z??>/?!?^>????\r?K??zFW*?z?'),
(93, 137, '~?.:\"?????X?-?w:???>vb ????~9m?8f????v?I??\"?)Qx>q]?k?=??e?? ?9?nH8?r?+?]???!?', 'SO3P4o3', '??#? ?:???Bz?c??a>????[??8????????:Y???????0?	???(???u??X8?G??\''),
(94, 137, 'O??θ????=?GA??\'?l?F?H ', 'fnVadjP', 'J]???ʝl?$?LNP?ٲz})?\0l?9?:Х?{s????N_?;c?3??!y??I?;vn\\??W??.\0?L?\"?????B?'),
(95, 137, 'ɮ?	?#?\'?@?9?$~4GԈS????l???3a:3??CEf??v?\09-?T?ϣ??\Z???@^]??\0\0!?\0	\0', 'uF9fRDX', '?\0u\0A\0B\0\0?0?I??!?K?C?]di??Fj\0!*????T?|:?0H?K???\"?'),
(96, 137, 'f?4C?g7??\\?????6????;?Jz?{yJ8sr?D?\"?Dk\"|?=J_?=s??8?)??m\"??2N??2??A?[!~G??GW?????i<????T=?HR???(?\'?<Ρ?a?L??F\'Q3U?צ??c(?R???+??d??????3?4????Q??>?P??h???M?\0????X', 'P6AWTSc', '??#???Ǐl?? ????*??!??'),
(97, 137, '%???To?]Cۮ/???fZ8?q?????o??}????r~jm?/uk?_?z? ?S?#????d?\"??!L?O??(?YV	?C??o?m&??Q???i???s????????+?P??ӟ?&???n]????fC???o???6?i-??s??s???????i?Oҽ???!?0QCS??! я??i(b??m??/?Y??QEH$K?PGC??UH.Rq#???\\?ęm??N>)?', 'Um4k70x', ''),
(98, 137, 'I?H>\0\0!?\0	\0', 'umKiNR1', '?\0u\0A\0B\0\0?0?I??????`(zFAdc???tl'),
(99, 137, '?=.s', 'f9OiZCH', ''),
(100, 137, '?;??\"?0?ǀ?M?4?CFM?ijE?0ADn$-m?2T1?-%(\03&?\\5S?????g?Z?[i?E??4??RD?*TL*?㟩o???ꅫ???4????{', '4yK3DkI', 'hmq7??Vgà?G???Pc+ř?\"\0!?\0	\0'),
(101, 137, '\'?3D??`Np?bA??:?d3?V;??;D???????	}~*(y?;l?4u	e?9??CG?0?L???5??4	?J\'fEos?9~?;2SJ?5?z???!????f???ţ?)???̪zf$?J\Z????۷?????', 'I6wiVSw', '???ο??????????????؇???????s2`?5??Z???FD2pT?j\0;'),
(102, 138, 'sukumar', '90XTEg0', 'sukumar@mnagenome.com'),
(103, 139, 'sukumar', 'r5IG6ni', 'sukumar@mnagenome.com'),
(104, 140, 'sukumar', '7XyHauM', 'sukumar@mnagenome.com'),
(105, 142, 'sukumar', '4QHWefl', 'sukumar@mnagenome.com'),
(106, 200, 'sukumar', 'gJeMKKy', 'sukumar@mnagenome.com'),
(107, 220, 'sukumar', '7TTxyV8', 'sukumar@mnagenome.com'),
(108, 221, 'sukumar', 'EoB2K3d', 'sukumar@mnagenome.com'),
(109, 224, 'sukumar', 'XIF8oDU', 'sukumar@mnagenome.com'),
(110, 225, 'sukumar', 'VTJqvZo', 'sukumar@mnagenome.com'),
(111, 226, 'sukumar', 'DXZCeup', 'sukumar@mnagenome.com'),
(112, 229, 'sukumar', 'Nu20pDA', 'sukumar@mnagenome.com'),
(113, 230, 'sukumar', 'u3X7D5I', 'sukumar@mnagenome.com'),
(114, 231, 'sukumar', 'jQUD5nt', 'sukumar@mnagenome.com'),
(115, 232, 'sukumar', 'z3QrK7m', 'sukumar@mnagenome.com'),
(116, 233, 'sukumar', 'Rm6iMSc', 'sukumar@mnagenome.com'),
(117, 258, 'sukumar', 'IY8hIic', 'sukumar@mnagenome.com'),
(118, 259, 'sukumar', 'iFI24kd', 'sukumar@mnagenome.com'),
(119, 260, 'sukumar', 'M01wgoD', ''),
(120, 262, 'sukumar', 'vAdheNN', 'sukumar@mnagenome.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects_table`
--
ALTER TABLE `projects_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions_table`
--
ALTER TABLE `questions_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `response_table`
--
ALTER TABLE `response_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_table`
--
ALTER TABLE `survey_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects_table`
--
ALTER TABLE `projects_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT for table `questions_table`
--
ALTER TABLE `questions_table`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `response_table`
--
ALTER TABLE `response_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `survey_table`
--
ALTER TABLE `survey_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
