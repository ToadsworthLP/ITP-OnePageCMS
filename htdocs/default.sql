-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 03:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `de-press`
--
USE `de-press`;

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `block` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`id`, `block`, `name`) VALUES
(133, 31, '2-1-textarea'),
(134, 31, '2-2-textarea'),
(125, 31, 'background-color'),
(128, 31, 'separator'),
(127, 31, 'subtitle'),
(129, 31, 'textarea'),
(126, 31, 'title'),
(138, 33, '2-1-background-image'),
(141, 33, '2-2-separator'),
(140, 33, '2-2-subtitle'),
(142, 33, '2-2-textarea'),
(139, 33, '2-2-title'),
(137, 33, 'background-color'),
(136, 33, 'menu-option'),
(164, 33, 'menu-text'),
(135, 33, 'selector'),
(149, 34, '2-1-separator'),
(148, 34, '2-1-subtitle'),
(150, 34, '2-1-textarea'),
(147, 34, '2-1-title'),
(151, 34, '2-2-background-image'),
(145, 34, 'background-color'),
(159, 34, 'menu-option'),
(144, 34, 'selector'),
(146, 34, 'title'),
(155, 35, '2-1-background-image'),
(163, 35, '2-2-separator'),
(157, 35, '2-2-subtitle'),
(158, 35, '2-2-textarea'),
(156, 35, '2-2-title'),
(153, 35, 'background-color'),
(160, 35, 'menu-option'),
(152, 35, 'selector'),
(154, 35, 'title');

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` bigint(20) UNSIGNED NOT NULL,
  `site` bigint(20) UNSIGNED NOT NULL,
  `block_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`id`, `type`, `site`, `block_order`) VALUES
(31, 2, 1, 0),
(33, 2, 1, 1),
(34, 2, 1, 2),
(35, 2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `blocktype`
--

CREATE TABLE `blocktype` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(256) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blocktype`
--

INSERT INTO `blocktype` (`id`, `filename`, `name`) VALUES
(1, 'section-col-1.php', 'One Column'),
(2, 'section-col-2.php', 'Two Columns'),
(3, 'section-col-3.php', 'Three Columns'),
(4, 'section-col-4.php', 'Four Columns'),
(5, 'section-col-3-1.php', 'Two Columns (first big, second small)'),
(6, 'section-col-1-3.php', 'Two Columns (first small, second big)');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(256) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `size` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `filename`, `timestamp`, `size`) VALUES
(89, 'ES-Logo_Test2.png', '2021-06-16 19:23:58', 17384),
(90, 'eas-logo-klein-2-1-300x173.png', '2021-06-16 19:25:48', 23594),
(91, 'iStock-1141158004-1-1024x687.jpg', '2021-06-16 19:39:35', 99726),
(92, 'iStock-1048265236-1024x683.jpg', '2021-06-16 19:39:42', 62274),
(93, 'iStock-855050326-1024x683.jpg', '2021-06-16 19:39:50', 113211);

-- --------------------------------------------------------

--
-- Table structure for table `file_attribute`
--

CREATE TABLE `file_attribute` (
  `parent` bigint(20) UNSIGNED NOT NULL,
  `file` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file_attribute`
--

INSERT INTO `file_attribute` (`parent`, `file`) VALUES
(138, 91),
(151, 92),
(155, 93);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `permissions` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `permissions`) VALUES
(0, 'Admin', 1000),
(1, 'Staff', 500);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `name` varchar(256) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`name`, `value`) VALUES
('companyAddress', 'Schulstraße 11'),
('companyCommercialCourt', 'Innsbruck'),
('companyCorporateObject', 'Athletiktrainer, Rehabilitation und Physiotherapie'),
('companyHeadquarters', 'Absam'),
('companyLocation', 'Absam, 6067'),
('companyMail', 'office@es-athletics.com'),
('companyName', 'es-athletics e.U.'),
('companyNumber', 'FN 123456 a'),
('companyOwner', 'Edin Smajlovic'),
('companyPhone', '+43 (0) 676 7207509'),
('contactAddress', 'office@es-athletics.com'),
('contactEmailFooter', 'Dies ist eine automatische Benachrichtigung von es-athletics.com.'),
('contactEmailHeader', 'Vielen Dank für Ihr Interesse an ES-ATHLETICS\r\nWir bearbeiten Ihre Anfrage in Regel innerhalb von 24-Stunden.'),
('contactName', 'ES-ATHLETICS | Edin Smajlovic'),
('darkBackground', '#f4f4f4'),
('dataProtectionCustomText', 'Persönliche Daten, die Sie auf dieser Website elektronisch übermitteln, wie zum Beispiel Name, E-Mail-Adresse, Adresse oder andere persönlichen Angaben, werden von uns nur zum jeweils angegebenen Zweck verwendet, sicher verwahrt und nicht an Dritte weitergegeben. Der Provider erhebt und speichert automatisch Informationen am Webserver wie verwendeter Browser, Betriebssystem, Verweisseite, IP-Adresse, Uhrzeit des Zugriffs usw. Diese Daten können ohne Prüfung weiterer Datenquellen keinen bestimmten Personen zugeordnet werden und wir werten diese Daten auch nicht weiter aus solange keine rechtswidrige Nutzung unserer Webseite vorliegt.'),
('facebookLink', 'https://www.facebook.com/ES-Athletics-105447451105056'),
('favicon', '90'),
('footerDarkBackground', '#202624'),
('footerDescription', 'Jede Leistung beginnt mit der Entscheidung es zu versuchen.'),
('footerFontColor', '#707070'),
('footerLightBackground', '#2d3331'),
('footerLogo', '90'),
('fullWidth', '0'),
('instagramLink', 'https://www.instagram.com/e.s_athletics/'),
('lightBackground', '#ffffff'),
('menuLogo', '89'),
('pageDescription', 'Egal ob jung oder alt, Hobby- oder Leistungsspoertler, ich möchte mein Wissen an dich weitergeben, um gemeinsam das Maximum aus deinem Potential zu schöpfen.'),
('pageTitle', 'ES-ATHLETICS'),
('primaryColor', '#38d1bc'),
('secondaryColor', '#a61832'),
('showContactForm', '1'),
('showSlider', '1'),
('sliderDelay', '5000'),
('sliderShowIndicators', '1'),
('sliderShowNavigation', '1');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `required_permissions` int(10) UNSIGNED NOT NULL,
  `published` tinyint(1) NOT NULL,
  `menu_option` tinyint(1) NOT NULL,
  `theme` bigint(20) UNSIGNED NOT NULL,
  `show_slider` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `name`, `required_permissions`, `published`, `menu_option`, `theme`, `show_slider`) VALUES
(1, 'Home', 1000, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slide_order` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `text` text DEFAULT NULL,
  `button_text` text DEFAULT NULL,
  `button_link` text DEFAULT NULL,
  `button_color` varchar(7) NOT NULL DEFAULT '#ffffff',
  `button_hover_color` varchar(7) NOT NULL DEFAULT '#cccccc',
  `button_text_color` varchar(7) NOT NULL DEFAULT '#000000',
  `image` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slide_order`, `title`, `text`, `button_text`, `button_link`, `button_color`, `button_hover_color`, `button_text_color`, `image`) VALUES
(18, 0, 'PREHAB', 'SEI STÄRKER ALS DEINE STÄRKSTE AUSREDE', 'Mehr Infos', '#33', '#38d1bc', '#a61832', '#ffffff', 91),
(19, 1, 'REHAB', 'AUF DIE RICHTIGE DOSIS KOMMT ES AN', 'Mehr Infos', '#34', '#38d1bc', '#a61832', '#ffffff', 92),
(20, 2, 'ATHLETIC', 'HARD WORK BEATS TALENT WHEN TALENT DOSN\'T WORK HARD', 'Mehr Infos', '#35', '#38d1bc', '#a61832', '#ffffff', 93);

-- --------------------------------------------------------

--
-- Table structure for table `text_attribute`
--

CREATE TABLE `text_attribute` (
  `parent` bigint(20) UNSIGNED NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `text_attribute`
--

INSERT INTO `text_attribute` (`parent`, `text`) VALUES
(125, '#ffffff'),
(126, 'DAS BIN ICH'),
(127, 'EDIN SMAJLOVIC'),
(128, '1'),
(129, 'Hi, es freut mich, dass du auf meiner Seite gelandet bist und wir mindestens eine Gemeisamkeit – die freude am Sport- teilen.  Seit ca. 11 Jahren bin ich in der Fitness- und Gesundheitsbranche als medizinischer Trainingstherapeut und Athletiktrainer tätig und durfte schon einige Sportler aus dem Leistungssport und Breitensport auf ihrem Weg zum Ziel begleiten und unterstützen.\r\n\r\n'),
(133, 'An der Bundessportakademie absolvierte ich den Dipl. Athletiktrainer und Tennislehrer. Durch die Fortbildung zum medizinischen Trainingstherapeuten in Nürnberg, kann ich meine Kunden nicht nur im präventiven Bereich beraten sonder auch bei Verletzungen betreuen.'),
(134, 'Um mein Leistungsportfolio weiter auszubauen, schloss ich das Sportwissenschaftsstudium, an der DHGS in Ismaning mit dem Schwerpunkt Leistungsaufbau im Kinder- und Jungenalter, an.Egal ob jung oder alt, Hobby- oder Leistungsspoertler.'),
(135, 'Prehab'),
(136, '1'),
(137, '#ffffff'),
(139, 'PREHAB'),
(140, 'FRÜHER AN SPÄTER DENKEN'),
(141, '1'),
(142, 'Der innere Schweinehund hat bei meinen Workouts keine Chance. Wer einmal bei XHIT (Xtreme-High-Intensity-Training) mitgemacht hat weiß, dass an seine Grenzen gehen richtig Spaß machen kann.\r\n\r\nDie beste Altersvorsorge ist ein gesunder Körper. Mit meinem ganzheitlichen Ansatz möchte ich dich unterstützen deine Ziele zu erreichen. Die persönliche und individuelle Betreuung ist dabei für mich von höchster Bedeutung, weshalb das Training auf dein jeweiliges Leistungsniveau bzw. deine Ziele angepasst und ständig optimiert werden.'),
(144, '34'),
(145, '#ffffff'),
(146, 'REHAB'),
(147, 'REHAB'),
(148, 'COME BACK STRONGER'),
(149, '1'),
(150, 'Ganz egal ob du ein Freizeit- oder Leistungssportler bist, ich mache dich wieder fit für deinen Alltag und Sport. Ein systematischer Rehabilitationsaufbau nach einer Verletzung und ein Netzwerk aus Ärzten und Physiotherapeuten steht dir zu Seite.'),
(152, '35'),
(153, '#ffffff'),
(154, 'ATHLETIC'),
(156, 'ATHLETIC'),
(157, 'JEDER TAG ZÄHLT'),
(158, 'Egal aus welcher Sportart du kommst, bei allen körperlichen Aktivitäten kommt es auf schnelle, gut koordinierte und kraftvolle Bewegungen an. Effiziente Bewegungsmuster verbessern die Performance und verringern das Verletzungsrisiko. Ich sehe den Körper als eine Einheit. Im Athletiktraining unterscheide ich nicht zwischen verschiedenen Muskelgruppen, Organsystemen oder Körperteilen; sie alle sind ein großes Ganzes und so gehören sie auch trainiert.'),
(159, '1'),
(160, '1'),
(163, '1'),
(164, 'PREHAB');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `filename` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `name`, `filename`) VALUES
(1, 'Test', 'test.css');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(256) NOT NULL,
  `role` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `role`) VALUES
(0, 'root', '$2y$10$2tEBCFakAlu0/rDQmNZFue/WkvdywFU1PXvZiE0yneWOG3o6LCAf.', 'test@test.com', 0),
(1, 'Testuser', '$2y$10$ZPv862JyLd4fUgm368KTA.LWZxqabfjRIgD.X68PDCXp2I/m2YJtS', 'if20b105@technikum-wien.at', 0),
(6, 'Test User', '$2y$10$pV58j7KLclz6no29NOJC1uf433h0HxCvkAAg04iQpHaV90cUQ2cVa', 'testmail@test.com', 0),
(15, 'testuser2', '$2y$10$N1GR/vLVZOA1yRowafyd3eSA.pC6aQzoJ/WzSo18UmZ/b2KxOBi/q', 'test@mail.com', 0),
(21, 'Testuser3', '$2y$10$ynpDQ1I/D2ESdspnbbLIMujluVg0CiD441wxBxkJAIluqfuLKVXkS', 'test@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `block` (`block`,`name`);

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_block_site` (`site`),
  ADD KEY `fk_block_type` (`type`);

--
-- Indexes for table `blocktype`
--
ALTER TABLE `blocktype`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `file_attribute`
--
ALTER TABLE `file_attribute`
  ADD PRIMARY KEY (`parent`),
  ADD UNIQUE KEY `id` (`parent`),
  ADD KEY `fk_attribute_file` (`file`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_site_theme` (`theme`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_slider_image` (`image`);

--
-- Indexes for table `text_attribute`
--
ALTER TABLE `text_attribute`
  ADD PRIMARY KEY (`parent`),
  ADD UNIQUE KEY `id` (`parent`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `fk_user_role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `blocktype`
--
ALTER TABLE `blocktype`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `file_attribute`
--
ALTER TABLE `file_attribute`
  MODIFY `parent` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `text_attribute`
--
ALTER TABLE `text_attribute`
  MODIFY `parent` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attribute`
--
ALTER TABLE `attribute`
  ADD CONSTRAINT `fk_attribute_block` FOREIGN KEY (`block`) REFERENCES `block` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `block`
--
ALTER TABLE `block`
  ADD CONSTRAINT `fk_block_site` FOREIGN KEY (`site`) REFERENCES `site` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_block_type` FOREIGN KEY (`type`) REFERENCES `blocktype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `file_attribute`
--
ALTER TABLE `file_attribute`
  ADD CONSTRAINT `fk_attribute_file` FOREIGN KEY (`file`) REFERENCES `file` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_file_attribute_parent` FOREIGN KEY (`parent`) REFERENCES `attribute` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `site`
--
ALTER TABLE `site`
  ADD CONSTRAINT `fk_site_theme` FOREIGN KEY (`theme`) REFERENCES `theme` (`id`);

--
-- Constraints for table `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `fk_slider_image` FOREIGN KEY (`image`) REFERENCES `file` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `text_attribute`
--
ALTER TABLE `text_attribute`
  ADD CONSTRAINT `fk_text_attribute_parent` FOREIGN KEY (`parent`) REFERENCES `attribute` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_role` FOREIGN KEY (`role`) REFERENCES `role` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
