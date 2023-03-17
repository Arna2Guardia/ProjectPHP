-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 13 Janvier 2023 à 02:21
-- Version du serveur :  5.6.20-log
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `grp13`
--
CREATE DATABASE IF NOT EXISTS `grp13` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `grp13`;

-- --------------------------------------------------------

--
-- Structure de la table `index_content`
--

CREATE TABLE `index_content` (
  `id_index_content` int(11) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `image_1` varchar(200) NOT NULL DEFAULT '../img/background.jpg',
  `image_2` varchar(200) NOT NULL DEFAULT '../img/arnamoi.jpg',
  `image_3` varchar(200) NOT NULL DEFAULT '../img/matthieu.jpg',
  `subtitle_1` varchar(50) NOT NULL,
  `subtitle_2` varchar(50) NOT NULL,
  `subtitle_3` varchar(50) NOT NULL,
  `text_1` text NOT NULL,
  `text_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `index_content`
--

INSERT INTO `index_content` (`id_index_content`, `title`, `image_1`, `image_2`, `image_3`, `subtitle_1`, `subtitle_2`, `subtitle_3`, `text_1`, `text_2`) VALUES
(1, 'Portfolio | Lucas - Matthieu', '../img/background.jpg', '../img/arnamoi.jpg', '../img/matthieu.jpg', 'Lucas', 'Matthieu', 'Our projects', 'I am a 21 years old Guardia student.<br>I am from Bordeaux and i left University after I have graduated my second years in mathematics and computering.<br>I already know few langages such as C and python but I am new to HTML, CSS and JavaScript.', 'I am a 18 years old Guardia student.<br>I am from Montpellier and I just graduated High School where I specialized in Mathematics and Physics.<br>I know a litlle about programming, but I\'m learning everyday with Guardia.');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id_message`, `email`, `name`, `firstname`, `message`) VALUES
(1, 'aa@aa.fr', 'AAAAAAH', 'Arna', 'aaa'),
(2, 'aa@aa.fr', '<script>alert("hello");</script>', '<script>alert("hello");</script>', '<script>alert("hello");</script>'),
(3, 'aaqsd@qsd', 'aaa', 'aaa', 'aa');

-- --------------------------------------------------------

--
-- Structure de la table `navbar_content`
--

CREATE TABLE `navbar_content` (
  `id_navbar_content` int(11) NOT NULL,
  `image_1` varchar(200) NOT NULL,
  `alt_img_1` varchar(100) NOT NULL,
  `link_1` varchar(200) NOT NULL,
  `link_2` varchar(200) NOT NULL,
  `link_3` varchar(200) NOT NULL,
  `link_4` varchar(200) NOT NULL,
  `link_5` varchar(200) NOT NULL,
  `link_6` varchar(200) NOT NULL,
  `link_7` varchar(200) NOT NULL,
  `text_1` varchar(50) NOT NULL,
  `text_2` varchar(50) NOT NULL,
  `text_3` varchar(50) NOT NULL,
  `text_4` varchar(50) NOT NULL,
  `icon_1` varchar(20) NOT NULL,
  `icon_2` varchar(20) NOT NULL,
  `icon_3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `navbar_content`
--

INSERT INTO `navbar_content` (`id_navbar_content`, `image_1`, `alt_img_1`, `link_1`, `link_2`, `link_3`, `link_4`, `link_5`, `link_6`, `link_7`, `text_1`, `text_2`, `text_3`, `text_4`, `icon_1`, `icon_2`, `icon_3`) VALUES
(1, 'guardia_logo.png', 'Guardia Cybersecuritty School\'s logo', 'https://guardia.school', 'index.php?id=1', 'project.php?id=1', 'project.php?id=2', 'project.php?id=3', '#modal1', '', 'Home', 'Project 1', 'Project 2', 'Project 3', 'chat', 'person', 'menu');

-- --------------------------------------------------------

--
-- Structure de la table `project_content`
--

CREATE TABLE `project_content` (
  `id_project_content` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image_1` varchar(200) NOT NULL,
  `image_2` varchar(200) NOT NULL,
  `image_3` varchar(200) NOT NULL,
  `image_4` varchar(200) NOT NULL,
  `text_1` text NOT NULL,
  `text_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `project_content`
--

INSERT INTO `project_content` (`id_project_content`, `title`, `image_1`, `image_2`, `image_3`, `image_4`, `text_1`, `text_2`) VALUES
(1, 'Introduction to computer systems', '../img/server.jpg', '../img/ssh_logo.png', '../img/http_logo.png', '../img/ftp_logo.png', 'Our first project was about the client-server connection. We learnt how to set up a Windows server, how to set up a server on a debian virtual machine and how to configure a DNS, a webmail and a website through ISP-Config.', 'We also learnt how to use the SSH protocol, and how the SSH,HTTP and FTP protocols work.'),
(2, 'Rock paper scissors and <br> noughts & crosses', '../img/pfc.png', '../img/morpion.jpg', '../img/python_logo.png', '../img/larp_logo.jpg', 'First of all we had to create a Rock paper scissors game with a pseudo code software named LARP. Then we had to code it with Python. <br> <br> We could add some easter eggs (YES, we did rick roll our professor) and whatever we wanted since this project was about algorithmic more than the game or python itself.', 'On the other hand, we had to create a noughts and crosses game. We made a bot that could not lose. <br> We even made a bot versus bot mode, where you can watch two bots fighting at this very interesting game (as you can see on your right).'),
(3, 'HTML5 & CSS3: The Beginning', '../img/html5_css3.png', '../img/metro1.jpg', '../img/metro2.jpg', '../img/metro3.jpg', 'In this project, we had one week to create a showcase website about a video game. We did it about the game Metro Exodus.', 'This was our first time creating a website, and our first time using HTML and CSS. It was a lot of work, nights were shorts but the result was kinda good ! <br> <br> We managed to code a good fan-made website, with a clean navbar, a lot of flexbox to align our items, some borders, few youtube videos and a form.'),
(12, 'aaaammmmooogggguuuussss', '../img/amogus.jpg', '../img/', '../img/', '../img/', '', ''),
(13, 'romain', '../img/amogus4.jpg', '../img/singe.jpg', '../img/', '../img/', 'AMOGUS', ''),
(14, 'SiNGE', '../img/singe.jpg', '../img/amogus.jpg', '../img/amogus3.png', '../img/amogus4.jpg', 'qsdqsd', 'azdqsd'),
(17, 'Singe qui fume', '../img/smoke_singe.jpg', '../img/', '../img/', '../img/', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `sign_up_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `admin`, `sign_up_date`, `name`) VALUES
(1, 'test@gmail.com', 'rty456fgh123', 1, '2023-01-08 03:09:08', 'Lucas'),
(7, 'arthur@gmail.com', 'arthur123', 0, '2023-01-09 09:44:29', 'arthur'),
(9, 'monsieur@mail.fr', 'monsieur', 0, '2023-01-09 10:35:40', 'Monsieur'),
(11, 'testeurfou@mail.com', '$2y$10$N2W7mxH1IfKThy3R5.B16OES12vjV0oWrWbLutYbvbRTGYZ/3w4E.', 1, '2023-01-10 12:52:57', 'testeurfou'),
(18, 'pwd@pwd.com', '$2y$10$DhRNMgDFtmwx9n8slNGh0ey.bnFYQL59dCBIUl3rharznh3y5iOmq', 0, '2023-01-10 16:35:18', 'testpwd'),
(19, 'chat@gpt.open', '$2y$10$NWLmdymFnPMTITaIXvCvkuGy42Att05wXMcpPzWSclZHrFPt62mOe', 0, '2023-01-10 17:37:19', 'CHAT'),
(20, 'kevin@kevin.com', '$2y$10$RQlZMuWOQY6TEipQn/DSC.cYDvPFId5U0sXBnhzD4ULrZELw5P5wa', 0, '2023-01-12 08:07:38', 'Kevin Chedozeau'),
(21, 'paul@gmail.com', '$2y$10$ZNuSE8GYckBJBkc1yYHiH.5CY2sAtrUVtoTO/IJfo06MwXiIj68Ne', 0, '2023-01-12 19:15:46', 'Paul'),
(24, 'matthieu@gmail.fr', '$2y$10$cfoWZN9IBhMHyaADzHHtveosrxkcCF0n5tJUe1n2TIFPLoPgBaby.', 0, '2023-01-12 22:14:58', 'matthieu'),
(25, 'a@a', '$2y$10$XzOfip/OjhqZIsNVeT50LefczBYJVHFUsIvxD9gDxplbtw285EatO', 0, '2023-01-12 22:23:41', '&lt;script&gt;alert(&quot;hello&quot;);&lt;/script'),
(26, '1@1', '$2y$10$1PQhbiQneecjj47e0SQGIeo6hNiUpZGMEC1Q/72kQ2kSaZw.Eplwi', 0, '2023-01-13 01:57:47', '1');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `index_content`
--
ALTER TABLE `index_content`
  ADD PRIMARY KEY (`id_index_content`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `navbar_content`
--
ALTER TABLE `navbar_content`
  ADD PRIMARY KEY (`id_navbar_content`);

--
-- Index pour la table `project_content`
--
ALTER TABLE `project_content`
  ADD PRIMARY KEY (`id_project_content`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `mail_address` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `index_content`
--
ALTER TABLE `index_content`
  MODIFY `id_index_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `navbar_content`
--
ALTER TABLE `navbar_content`
  MODIFY `id_navbar_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `project_content`
--
ALTER TABLE `project_content`
  MODIFY `id_project_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
