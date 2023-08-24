<?php
	//connect to MySQL
$mysqli = new mysqli("localhost", "ihdbuser", "]hY#Pko%Sdlpjw65", "id19726197_ihdb")
		or die("Hey loser, check your server connection.");

$sql = (" -- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 05:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ihdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ailments`
--

CREATE TABLE `ailments` (
  `ailment_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `constituents`
--

CREATE TABLE `constituents` (
  `constituent_id` int(11) NOT NULL,
  `constituent_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constituents`
--

INSERT INTO `constituents` (`constituent_id`, `constituent_name`) VALUES
(1, 'Wisconsin'),
(2, 'coughs'),
(3, 'United States'),
(4, 'dried');

-- --------------------------------------------------------

--
-- Table structure for table `herb`
--

CREATE TABLE `herb` (
  `herb_id` int(11) NOT NULL,
  `common_name` varchar(255) NOT NULL,
  `common_names` varchar(255) NOT NULL,
  `scientific_name` varchar(255) NOT NULL,
  `family` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `herb`
--

INSERT INTO `herb` (`herb_id`, `common_name`, `common_names`, `scientific_name`, `family`) VALUES
(1, 'Apple', '', 'not apple', ''),
(2, 'Chamomile', '', 'not chamomile', ''),
(3, 'Abscess Root', 'American Greek Valerian. Blue Bells. False Jacob\'s Ladder. Sweatroot.', 'Polemonium reptans', 'N.O. Polemoniaceae'),
(4, 'Marigold', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `herbal`
--

CREATE TABLE `herbal` (
  `herbal_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `bce_ad` set('AD','BC') NOT NULL DEFAULT 'AD',
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `herbal`
--

INSERT INTO `herbal` (`herbal_id`, `name`, `author`, `year`, `bce_ad`, `link`) VALUES
(1, 'A Modern Herbal', 'Mrs. M Grieve', 1931, '', 'http://www.botanical.com/botanical/mgmh/mgmh.html'),
(6, 'Culpeper\'s Complete Herbal', 'Nicholas Culpeper', 1652, '', ''),
(7, 'The Herball or Generall Historie of Plantes', 'John Gerarde', 1597, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `herbal_herb`
--

CREATE TABLE `herbal_herb` (
  `herbal_id` int(11) NOT NULL,
  `herb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `herbal_herb`
--

INSERT INTO `herbal_herb` (`herbal_id`, `herb_id`) VALUES
(1, 1),
(2, 1),
(1, 2),
(1, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `herbal_images`
--

CREATE TABLE `herbal_images` (
  `herbal_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `herb_ailments`
--

CREATE TABLE `herb_ailments` (
  `herb_id` int(11) NOT NULL,
  `ailment_id` int(11) NOT NULL,
  `blurb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `herb_ailments`
--

INSERT INTO `herb_ailments` (`herb_id`, `ailment_id`, `blurb_id`) VALUES
(0, 3, 0),
(0, 9, 0),
(0, 10, 0),
(0, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `herb_constituent`
--

CREATE TABLE `herb_constituent` (
  `herb_id` int(11) NOT NULL,
  `constituent_id` int(11) NOT NULL,
  `blurb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `herb_constituent`
--

INSERT INTO `herb_constituent` (`herb_id`, `constituent_id`, `blurb_id`) VALUES
(3, 3, 1),
(0, 1, 0),
(0, 4, 0),
(3, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `herb_images`
--

CREATE TABLE `herb_images` (
  `herb_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `herb_medical_terms`
--

CREATE TABLE `herb_medical_terms` (
  `herb_id` int(11) NOT NULL,
  `medterm_id` int(11) NOT NULL,
  `blurb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `herb_medical_terms`
--

INSERT INTO `herb_medical_terms` (`herb_id`, `medterm_id`, `blurb_id`) VALUES
(0, 1, 0),
(0, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `herb_recipes`
--

CREATE TABLE `herb_recipes` (
  `herb_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `blurb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `herb_recipes`
--

INSERT INTO `herb_recipes` (`herb_id`, `recipe_id`, `blurb_id`) VALUES
(3, 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `herb_uses`
--

CREATE TABLE `herb_uses` (
  `herb_id` int(11) NOT NULL,
  `uses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `image_type_id` int(11) NOT NULL,
  `image_src` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical_terms`
--

CREATE TABLE `medical_terms` (
  `medterms_id` int(11) NOT NULL,
  `word` varchar(255) NOT NULL,
  `definition` text NOT NULL,
  `herb_ids` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_terms`
--

INSERT INTO `medical_terms` (`medterms_id`, `word`, `definition`, `herb_ids`) VALUES
(2, 'alterative', '', 0),
(3, 'diaphoretic', '', 0),
(4, 'expectorant', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL,
  `blurb` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uses`
--

CREATE TABLE `uses` (
  `uses_id` int(11) NOT NULL,
  `use_name` varchar(255) NOT NULL,
  `use_type_id` int(11) NOT NULL,
  `herb_id` int(11) NOT NULL,
  `herbal_id` int(11) NOT NULL,
  `use_blurb` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uses`
--

INSERT INTO `uses` (`uses_id`, `use_name`, `use_type_id`, `herb_id`, `herbal_id`, `use_blurb`) VALUES
(1, '', 9, 3, 1, 'United States.'),
(2, '', 11, 1, 1, 'I am an apple!'),
(3, '', 10, 3, 7, 'hi'),
(4, '', 11, 3, 1, 'This plant grows from New York to Wisconsin, in woods, damp grounds, and along shady river-banks. It has creeping roots, by which it multiplies very quickly. The stems are 9 to 10 inches high, much branched, bearing pinnate leaves with six or seven pairs of leaflets. The nodding, blue flowers are in loose, terminal bunches. <br>The slender rootstock, when dried and used as the drug, is 1 to 2 inches long and 1/8 inch in diameter, with the bases of numerous stems on the upper surface, and tufts of pale, slender, smooth, wiry, brittle roots on the underside. The rootstock has a slightly bitter and acrid taste. '),
(5, '', 1, 3, 1, 'Astringent, alterative, diaphoretic, expectorant. The drug has been recommended for use in febrile and inflammatory eases, all scrofulous diseases, in bowel complaints requiring an astringent, for the bites of venomous snakes and insects, for bronchitis and laryngitis and whenever an alterative is required. It is reported to have cured consumption; an infusion of the root in wineglassful doses is useful in coughs, colds and all lung complaints, producing copious perspiration.<br><br>The tincture of the root is made of whisky. '),
(6, '', 6, 3, 1, '1 to 2 fluid ounces, two or three times a day.'),
(8, '', 15, 4, 6, 'Add to a bath'),
(9, '', 8, 2, 1, 'Make some tea'),
(10, '', 8, 2, 1, 'Put in a bath');

-- --------------------------------------------------------

--
-- Table structure for table `use_type`
--

CREATE TABLE `use_type` (
  `use_type_id` int(11) NOT NULL,
  `use_type_name` varchar(255) NOT NULL,
  `type_order` int(11) NOT NULL,
  `herbal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `use_type`
--

INSERT INTO `use_type` (`use_type_id`, `use_type_name`, `type_order`, `herbal_id`) VALUES
(1, 'Medicinal Action and Uses', 2, 1),
(2, 'Culinary', 4, 1),
(3, 'Cosmetic', 5, 1),
(4, 'Economic', 6, 1),
(5, 'History', 8, 1),
(6, 'Dosages', 3, 1),
(7, 'Other Species', 9, 1),
(8, 'Recipes', 7, 1),
(9, 'Habitat', 1, 1),
(10, 'Cultivation', 10, 1),
(11, 'Description', 1, 1),
(12, 'Descript.]', 1, 6),
(13, 'Place.]', 2, 6),
(14, 'Time.]', 3, 6),
(15, 'Government and virtues.] ', 4, 6),
(16, 'The Description', 1, 7),
(17, 'The Place', 2, 7),
(18, 'The Time', 3, 7),
(19, 'The Names', 4, 7),
(20, 'The Nature', 6, 7),
(21, 'The Virtues', 7, 7),
(22, 'The Names in particular.', 5, 7),
(23, 'The Nature and Virtues.', 8, 7),
(24, 'The Temperature and Virtues.', 9, 7),
(25, 'The Place and Time.', 10, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ailments`
--
ALTER TABLE `ailments`
  ADD PRIMARY KEY (`ailment_id`);

--
-- Indexes for table `constituents`
--
ALTER TABLE `constituents`
  ADD PRIMARY KEY (`constituent_id`);

--
-- Indexes for table `herb`
--
ALTER TABLE `herb`
  ADD PRIMARY KEY (`herb_id`);

--
-- Indexes for table `herbal`
--
ALTER TABLE `herbal`
  ADD PRIMARY KEY (`herbal_id`);

--
-- Indexes for table `herb_recipes`
--
ALTER TABLE `herb_recipes`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `medical_terms`
--
ALTER TABLE `medical_terms`
  ADD PRIMARY KEY (`medterms_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `uses`
--
ALTER TABLE `uses`
  ADD PRIMARY KEY (`uses_id`);

--
-- Indexes for table `use_type`
--
ALTER TABLE `use_type`
  ADD PRIMARY KEY (`use_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ailments`
--
ALTER TABLE `ailments`
  MODIFY `ailment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `constituents`
--
ALTER TABLE `constituents`
  MODIFY `constituent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `herb`
--
ALTER TABLE `herb`
  MODIFY `herb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `herbal`
--
ALTER TABLE `herbal`
  MODIFY `herbal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `herb_recipes`
--
ALTER TABLE `herb_recipes`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_terms`
--
ALTER TABLE `medical_terms`
  MODIFY `medterms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uses`
--
ALTER TABLE `uses`
  MODIFY `uses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `use_type`
--
ALTER TABLE `use_type`
  MODIFY `use_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */; ");
	$insert=$mysqli->prepare($sql);
	$insert->execute();