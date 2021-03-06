-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 07:18 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
(177, 36, '2-1-background-image'),
(179, 36, '2-2-buttonlink'),
(180, 36, '2-2-buttontext'),
(178, 36, '2-2-textarea'),
(170, 36, 'background-color'),
(169, 36, 'menu-option'),
(168, 36, 'menu-text'),
(167, 36, 'selector'),
(173, 36, 'separator'),
(171, 36, 'title');

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
(36, 2, 1, -1);

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
(103, 'de-press-icon.png', '2021-06-28 16:30:19', 8608),
(104, 'de-press-logo.png', '2021-06-28 16:36:30', 89838),
(105, 'background.png', '2021-06-28 16:39:48', 100866);

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
(177, 103);

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
('companyName', 'Musterfirma'),
('darkBackground', '#f4f4f4'),
('favicon', '103'),
('footerDarkBackground', '#202624'),
('footerFontColor', '#707070'),
('footerLightBackground', '#2d3331'),
('footerLogo', '103'),
('fullWidth', '0'),
('lightBackground', '#ffffff'),
('menuLogo', '104'),
('pageDescription', 'Eine Beispielseite'),
('pageTitle', 'Neue Seite'),
('primaryColor', '#6200c8'),
('secondaryColor', '#1f1926'),
('showContactForm', '0'),
('showSlider', '1'),
('sliderDelay', '5000'),
('sliderShowIndicators', '0'),
('sliderShowNavigation', '0');

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
(21, -1, 'Hello World!', '', '', '', '#6200c8', '#1f1926', '#3d3d3d', 105);

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
(167, 'Willkommen'),
(168, 'Willkommen'),
(169, '1'),
(170, '#ffffff'),
(171, 'Willkommen bei de-press'),
(173, '1'),
(178, 'Sie k??nnen diese Seite im Seiteneditor bearbeiten!\r\nHier etwas mehr Platzhaltertext: Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'),
(179, 'http://localhost/admin.php?page=4'),
(180, 'Zum Seiteneditor');

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
(0, 'admin', '$2y$10$jKhIMJZq1VsxjG9..TPRxuFhP1CTICIxEdZcEedDLA5.Sn2EmDd7q', '', 0);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `blocktype`
--
ALTER TABLE `blocktype`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `file_attribute`
--
ALTER TABLE `file_attribute`
  MODIFY `parent` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `text_attribute`
--
ALTER TABLE `text_attribute`
  MODIFY `parent` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
