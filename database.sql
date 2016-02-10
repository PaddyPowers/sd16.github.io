-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 10, 2016 at 05:01 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `sd16`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` smallint(2) NOT NULL,
  `publicationDate` date NOT NULL,
  `fullName` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8_czech_ci DEFAULT NULL,
  `imageExtension` longtext COLLATE utf8_czech_ci,
  `course` mediumtext COLLATE utf8_czech_ci,
  `twitter` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `publicationDate`, `fullName`, `content`, `imageExtension`, `course`, `twitter`, `linkedin`, `website`) VALUES
(1, '2015-10-17', 'Daniel Ronan', 'This is a story all about how my life got flipped turned upside down.', '.jpg', 'Interaction Design', 'www.twitter.com/danielronan_', '', 'https://www.danielronan.co.uk'),
(2, '2015-10-08', 'Petr Chutny', ' ', '.jpg', 'Interaction Design', 'www.twitter.com/petrchutny', 'in/petrchutny', 'https://petrchutny.cz'),
(3, '2015-10-09', 'Rich Cahill', 'Looking at creating a digital tool to help individuals understand what triggers their anxious episodes & encourage rational understanding of altered thinking.', '.jpg', 'Interaction Design', 'www.twitter.com/rich_cahill', 'richcahill', 'https://rc3.me'),
(4, '2015-10-08', 'Iona Broadhurst', 'Exploring alternative ways of providing portable power for mobile devices through the use of conductive electro-textiles.', '.jpg', 'Product Design', 'www.twitter.com/ionabroadhurst', 'in/ionabroadhurst', 'ionabroadhurst.wordpress.com'),
(5, '2015-10-06', 'Hazel Wyllie', 'Discovering the social experiences, interactions and valuable skills that baking provides. ', '.jpg', 'Interaction Design', 'www.twitter.com/HazelKate', 'in/hazelwyllie', 'hazelwyllie.wordpress.com'),
(6, '2015-10-10', 'Rachael Walker', '', '.jpg', 'Choose a course', NULL, NULL, NULL),
(7, '2015-10-09', 'Ciaran Hynd', '', '.jpg', 'Interaction Design', 'www.twitter.com/CiaranFraserHyn', 'ciaranhynd', 'https://ciaranhynd.com'),
(8, '2015-10-11', 'Leanne Fischier', 'Exploring value in consumer design with an aim to design lasting relationships with products.', '.jpg', 'Product Design', 'www.twitter.com/leannefischler', 'leannefischler', 'https://leannefischler.co.uk'),
(9, '2015-10-13', 'Megan McKee', '', '.jpg', 'Choose a course', NULL, NULL, NULL),
(10, '2015-10-11', 'Molly Barnes', 'Designing with the aim to ease the negative emotional affects on siblings caused by their separation within the foster care system.  ', '.jpg', 'Interaction Design', 'www.twitter.com/MollyRebecca818', 'molly-barnes-26b44475', 'https://mollybarnesdesign.com'),
(11, '2015-10-13', 'Alice Malcolm', '', '.jpg', 'Choose a course', NULL, NULL, NULL),
(12, '2015-10-10', 'Joanna Stronska', 'Investigating the problems urban cyclists are facing on the road every day, aiming to encourage more people to cycle.', '.jpg', 'Product Design', 'www.twitter.com/stronska', '/in/stronska', 'stronska.wordpress.com'),
(13, '2015-10-12', 'Lewis Hall', '', '.jpg', 'Product Design', 'www.twitter.com/lewishall_mark', 'lewishallmark', 'https://thelewishallmark.co.uk/'),
(14, '2015-10-10', 'Duncan Gordon', 'Investigating the home-brew beer process and crafting a bespoke micro batch kit designed to enhance the entire home-brew experience.', '.jpg', 'Product Design', 'https://twitter.com/duncanchatter', 'https://uk.linkedin.com/in/duncanstuartgordon', 'https://duncanstuartgordon.com'),
(15, '2015-10-12', 'Sophia Bradley', 'An interactive solution to provide social anxiety sufferers with discreet reassurance during any social engagement.', '.jpg', 'Interaction Design', 'www.twitter.com/sophia_bradley', 'sophiabradley', 'https://sbradley.me'),
(16, '2015-10-11', 'Rebecca Smith', '', '.jpg', 'Product Design', 'www.twitter.com/RESmith_Design', '', 'HTTPS://www.rebeccasmith-design.co.uk'),
(17, '1994-07-28', 'Ryan Hutcheon', 'Interaction designer focusing on digital knowledge sharing platforms.', '.jpg', 'Interaction Design', 'www.twitter.com/ryanhutcheon', 'in/ryan-hutcheon-852178b2', 'https://ryanhutcheon.co.uk'),
(18, '2015-10-12', 'Rhiannon Walker', '', '.jpg', 'Interaction Design', '', '', ''),
(19, '2015-10-13', 'Rebecca Wallace', '', '.jpg', 'Choose a course', NULL, NULL, NULL),
(20, '2015-10-11', 'Dean Taylor', 'Creating tangible products that use natural interactions for the exploration of sound design.', '.jpg', 'Interaction Design', 'www.twitter.com/dean__', 'deantaylordesign', 'https://deantaylordesign.com'),
(21, '2015-10-13', 'Ross Cassells', '', '.jpg', 'Choose a course', NULL, NULL, NULL),
(22, '2015-10-13', 'Dominic Bell', '', '.jpg', 'Choose a course', NULL, NULL, NULL),
(23, '2015-10-11', 'Amy Lowe', 'Focussing on reducing the anxiety children experience in a hospital environment by creating child-centred medical equipment. ', '.jpg', 'Product Design', 'https://twitter.com/AmyElisaLoweDes', 'https://www.linkedin.com/pub/amy-lowe/a3/513/160', ''),
(24, '2015-10-12', 'Jessica Borwell', '', '.jpg', 'Interaction Design', '', '', ''),
(25, '2015-10-08', 'Andrew Stewart', 'Researching and designing for Body Dysmorphic Disorder (BDD), an anxiety disorder that causes a person to establish a distorted view of his or her own body. ''A mind that hates its body''.', '.jpg', 'Product Design', 'www.twitter.com/awj_stewart', 'in/awjstewart', 'awjstewart.wordpress.com'),
(26, '2015-10-13', 'Sophie Mackenzie', '', '.jpg', 'Choose a course', NULL, NULL, NULL),
(27, '2015-10-13', 'Rachael Farquharson', '', '.jpg', 'Choose a course', NULL, NULL, NULL),
(28, '2015-10-10', 'Kirsty Sneddon', 'I''m designing an interactive experience for small communities to collect data which is then communicated to the local governing body.', '.jpg', 'Interaction Design', 'www.twitter.com/ksnedd_', 'in/kirsty-sneddon-5a1a7180', 'https://kirstysneddon.com'),
(29, '2015-10-13', 'Hannah Lucas', '', '.jpg', 'Choose a course', NULL, NULL, NULL),
(30, '2015-10-12', 'Patrick Drabble', '', '.jpg', 'Interaction Design', 'www.twitter.com/patrickdrabble', ' ', 'https://patrickdrabble.co.uk'),
(31, '2015-10-12', 'Connal McCullough', 'Kickstarting a healthier lifestyle through exploring the relationship between people and nutrition. ', '.jpg', 'Product Design', 'https://twitter.com/ConnalMcC', 'https://www.linkedin.com/pub/connal-mccullough/97/b55/ba', 'website currently down'),
(32, '2015-10-22', 'Ali Munns', 'Banter', '.jpg', 'Product Design', NULL, NULL, NULL),
(33, '2015-10-08', 'Claire Wright', 'Researching and designing to improve the DIY experience of repairing mobile phones.', '.jpg', 'Product Design', 'www.twitter.com/ClaireWrightUoD', 'profile/view?id=AAIAABTqyWMBXAqkVR6dTLF4GLz35BDvBgm7pdM&trk=nav_responsive_tab_profile_pic', 'https://clairewrightdesign.com'),
(34, '2015-10-13', 'Nicola Petrie', '', '.jpg', 'Choose a course', NULL, NULL, NULL),
(35, '2015-10-13', 'Terry Mclean', '', '.jpg', 'Choose a course', NULL, NULL, NULL),
(36, '2015-10-13', 'Alan Reeve', '', '.jpg', 'Choose a course', NULL, NULL, NULL),
(38, '2015-10-12', 'Ching Chao', '', '.jpg', 'Product Design', '', '', ''),
(39, '2015-10-13', 'Ian Lu', '', '.jpg', 'Choose a course', NULL, NULL, NULL),
(40, '2015-10-13', 'April Woo', '', '.jpg', 'Choose a course', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` smallint(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
