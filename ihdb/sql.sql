-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 10:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `constituents`
--

CREATE TABLE `constituents` (
  `constituent_id` int(11) NOT NULL,
  `constituent_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `herb`
--

CREATE TABLE `herb` (
  `herb_id` int(11) NOT NULL,
  `common_name` varchar(255) NOT NULL,
  `common_names` varchar(255) NOT NULL,
  `scientific_name` varchar(255) NOT NULL,
  `family` varchar(255) NOT NULL,
  `POISON` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `herb`
--

INSERT INTO `herb` (`herb_id`, `common_name`, `common_names`, `scientific_name`, `family`, `POISON`) VALUES
(13, 'All-Heal', 'It is called All-heal, Hercules’s All-heal, and Hercules’s Woundwort, because it is supposed that Hercules learned the herb and its virtues from Chiron, when he learned physic of him. Some call it Panay, and others Opopane-wort.', '', '', 0),
(14, 'Alkanet', '', '', '', 0),
(15, 'Adder\'s Tongue or Serpent\'s Tongue', '', '', '', 0),
(16, 'Agrimony', '', '', '', 0),
(17, 'Water Agrinomy', '', '', '', 0),
(18, 'Alehoof', 'Ground Ivy', '', '', 0),
(19, 'Alexander', '', '', '', 0),
(20, 'Alder Tree, The Black', '', '', '', 0),
(21, 'Alder Tree, The Common', '', '', '', 0),
(22, 'Angelica', '', '', '', 0),
(23, 'Amaranthus', '', '', '', 0),
(24, 'Anemone', '', '', '', 0),
(25, 'Arrach, Garden', '', '', '', 0),
(26, 'Arrach, Wild and Stinking', '', '', '', 0),
(27, 'Archangel', '', '', '', 0),
(28, 'Arssmart', '', '', '', 0),
(29, 'Asarabacca', '', '', '', 0),
(30, 'Asparagus', 'Sparagus, or Sperage', '', '', 0),
(31, 'Prickly Asparagus', 'Sperage', '', '', 0),
(32, 'Ash Tree', '', '', '', 0),
(33, 'Avens', 'Colewort, Herb Bonet', '', '', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `herbal`
--

INSERT INTO `herbal` (`herbal_id`, `name`, `author`, `year`, `bce_ad`, `link`) VALUES
(6, 'Culpeper\'s Complete Herbal', 'Nicholas Culpeper', 1652, '', ''),
(7, 'The Herball or Generall Historie of Plantes', 'John Gerarde', 1597, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `herbal_herb`
--

CREATE TABLE `herbal_herb` (
  `herbal_id` int(11) NOT NULL,
  `herb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `herbal_herb`
--

INSERT INTO `herbal_herb` (`herbal_id`, `herb_id`) VALUES
(1, 1),
(2, 1),
(1, 2),
(1, 3),
(2, 4),
(6, 51),
(6, 52),
(6, 53),
(6, 54),
(6, 55),
(6, 56),
(6, 57),
(6, 58),
(6, 59),
(6, 60),
(6, 61),
(6, 62),
(6, 63),
(6, 64),
(6, 65),
(6, 66),
(6, 67),
(6, 68),
(6, 69),
(6, 70),
(6, 71),
(6, 72),
(6, 73),
(6, 74),
(6, 75),
(6, 76),
(6, 77),
(6, 78),
(6, 79),
(6, 80),
(6, 81),
(6, 82),
(6, 83),
(6, 84),
(6, 85),
(6, 86),
(6, 87),
(6, 88),
(6, 89),
(6, 90),
(6, 91),
(6, 92),
(6, 93),
(6, 94),
(6, 95),
(6, 96),
(6, 97),
(6, 98),
(6, 99),
(6, 100),
(6, 101),
(6, 102),
(6, 103),
(6, 104),
(6, 105),
(6, 106),
(6, 107),
(6, 108),
(6, 109),
(6, 110),
(6, 111),
(6, 112),
(6, 113),
(6, 114),
(6, 115),
(6, 116),
(6, 117),
(6, 118),
(6, 119),
(6, 120),
(6, 121),
(6, 122),
(6, 123),
(6, 124),
(6, 125),
(6, 126),
(6, 127),
(6, 128),
(6, 129),
(6, 130),
(6, 131);

-- --------------------------------------------------------

--
-- Table structure for table `herbal_images`
--

CREATE TABLE `herbal_images` (
  `herbal_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `herb_ailments`
--

CREATE TABLE `herb_ailments` (
  `herb_id` int(11) NOT NULL,
  `ailment_id` int(11) NOT NULL,
  `blurb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `herb_ailments`
--

INSERT INTO `herb_ailments` (`herb_id`, `ailment_id`, `blurb_id`) VALUES
(0, 3, 0),
(0, 9, 0),
(0, 10, 0),
(0, 10, 0),
(3, 12, 5),
(3, 13, 5),
(3, 14, 5),
(3, 15, 5),
(3, 16, 5),
(3, 17, 5),
(3, 18, 5),
(3, 19, 5),
(3, 20, 5),
(3, 21, 5),
(3, 22, 5),
(3, 23, 5);

-- --------------------------------------------------------

--
-- Table structure for table `herb_constituent`
--

CREATE TABLE `herb_constituent` (
  `herb_id` int(11) NOT NULL,
  `constituent_id` int(11) NOT NULL,
  `blurb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `herb_constituent`
--

INSERT INTO `herb_constituent` (`herb_id`, `constituent_id`, `blurb_id`) VALUES
(0, 1, 0),
(0, 4, 0),
(8, 6, 21),
(8, 7, 21);

-- --------------------------------------------------------

--
-- Table structure for table `herb_images`
--

CREATE TABLE `herb_images` (
  `herb_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `herb_medical_terms`
--

CREATE TABLE `herb_medical_terms` (
  `herb_id` int(11) NOT NULL,
  `medterm_id` int(11) NOT NULL,
  `blurb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `herb_medical_terms`
--

INSERT INTO `herb_medical_terms` (`herb_id`, `medterm_id`, `blurb_id`) VALUES
(0, 1, 0),
(0, 5, 0),
(3, 6, 5),
(3, 7, 5),
(3, 8, 5),
(3, 9, 5),
(7, 10, 17);

-- --------------------------------------------------------

--
-- Table structure for table `herb_recipes`
--

CREATE TABLE `herb_recipes` (
  `herb_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `blurb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `herb_uses`
--

CREATE TABLE `herb_uses` (
  `herb_id` int(11) NOT NULL,
  `uses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `image_type_id` int(11) NOT NULL,
  `image_src` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_terms`
--

CREATE TABLE `medical_terms` (
  `medterms_id` int(11) NOT NULL,
  `word` varchar(255) NOT NULL,
  `definition` text NOT NULL,
  `herb_ids` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL,
  `blurb` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `uses`
--

INSERT INTO `uses` (`uses_id`, `use_name`, `use_type_id`, `herb_id`, `herbal_id`, `use_blurb`) VALUES
(51, '', 12, 13, 6, 'Its root is long, thick, and exceeding full of juice, of a hot and biting taste, the leaves are great and large, and winged almost like ash-tree leaves, but that they are something hairy, each leaf consisting of five or six pair of such wings set one against the other upon foot-stalks, broad below, but narrow towards the end; one of the leaves is a little deeper at the bottom than the other, of a fair yellowish fresh green colour: they are of a bitterish taste, being chewed in the mouth; from among these rises up a stalk, green in colour, round in form, great and strong in magnitude, five or six feet in altitude, with many joints, and some leaves thereat; towards the top come forth umbels of small yellow flowers, after which are passed away, you may find whitish, yellow, short, flat seeds, bitter also in taste.'),
(52, '', 13, 13, 6, 'Having given you a description of the herb from bottom to top, give me leave to tell you, that there are other herbs called by this name; but because they are strangers in England, I give only the description of this, which is easily to be had in the gardens of divers places.'),
(53, '', 14, 13, 6, 'Although Gerrard saith, that they flower from the beginning of May to the end of December, experience teaches them that keep it in their gardens, that it flowers not till the latter end of the summer, and sheds its seeds presently after.'),
(54, '', 12, 13, 6, 'It is under the dominion of Mars, hot, biting, and choleric; and remedies what evils Mars inflicts the body of man with, by sympathy, as vipers’ flesh attracts poison, and the loadstone iron. It kills the worms, helps the gout, cramp, and convulsions, provokes urine, and helps all joint-aches. It helps all cold griefs of the head, the vertigo, falling-sickness, the lethargy, the wind cholic, obstructions of the liver and spleen, stone in the kidneys and bladder. It provokes the terms, expels the dead birth: it is excellent good for the griefs of the sinews, itch, stone, and tooth-ache, the biting of mad dogs and venomous beasts, and purges choler very gently.'),
(55, '', 36, 13, 6, 'It is called All-heal, Hercules’s All-heal, and Hercules’s Woundwort, because it is supposed that Hercules learned the herb and its virtues from Chiron, when he learned physic of him. Some call it Panay, and others Opopane-wort.'),
(56, '', 36, 14, 6, 'Besides the common name, it is called Orchanet, and Spanish Bugloss, and by apothecaries, Enchusa.'),
(57, '', 12, 14, 6, 'Of the many sorts of this herb, there is but one known to grow commonly in this nation; of which one take this description: It hath a great and thick root, of a reddish colour, long, narrow, hairy leaves, green like the leaves of Bugloss, which lie very thick upon the ground; the stalks rise up compassed round about, thick with leaves, which are less and narrower than the former; they are tender, and slender, the flowers are hollow, small, and of a reddish colour.'),
(58, '', 13, 14, 6, 'It grows in Kent near Rochester, and in many places in the West Country, both in Devonshire and Cornwall.'),
(59, '', 14, 14, 6, 'They flower in July and the beginning of August, and the seed is ripe soon after, but the root is in its prime, as carrots and parsnips are, before the herb runs up to stalk.'),
(60, '', 15, 14, 6, 'It is an herb under the dominion of Venus, and indeed one of her darlings, though somewhat hard to come by. It helps old ulcers, hot inflammations, burnings by common fire, and St. Anthony’s fire, by antipathy to Mars; for these uses, your best way is to make it into an ointment; also, if you make a vinegar of it, as you make vinegar of roses, it helps the morphew and leprosy; if you apply the herb to the privities, it draws forth the dead child. It helps the yellow jaundice, spleen, and gravel in the kidneys. Dioscorides saith it helps such as are bitten by a venomous beast, whether it be taken inwardly, or applied to the wound; nay, he saith further, if any one that hath newly eaten it, do but spit into the mouth of a serpent, the serpent instantly dies. It stays the flux of the belly, kills worms, helps the fits of the mother. Its decoction made in wine, and drank, strengthens the back, and eases the pains thereof: It helps bruises and falls, and is as gallant a remedy to drive out the small pox and measles as any is; an ointment made of it, is excellent for green wounds, pricks or thrusts.'),
(61, '', 12, 15, 6, 'This herb has but one leaf, which grows with the stalk a finger’s length above the ground, being flat and of a fresh green colour; broad like Water Plantain, but less, without any rib in it; from the bottom of which leaf, on the inside, rises up (ordinarily) one, sometimes two or three slender stalks, the upper half whereof is somewhat bigger, and dented with small dents of a yellowish green colour, like the tongue of an adder serpent (only this is as useful as they are formidable). The roots continue all the year.'),
(62, '', 13, 15, 6, 'It grows in moist meadows, and such like places.'),
(63, '', 14, 15, 6, 'It is to be found in May or April, for it quickly perishes with a little heat.'),
(64, '', 15, 15, 6, 'It is an herb under the dominion of the Moon and Cancer, and therefore if the weakness of the retentive faculty be caused by an evil influence of Saturn in any part of the body governed by the Moon, or under the dominion of Cancer, this herb cures it by sympathy: It cures these diseases after specified, in any part of the body under the influence of Saturn, by antipathy.<br><br>It is temperate in respect of heat, but dry in the second degree. The juice of the leaves, drank with the distilled water of Horse-tail, is a singular remedy for all manner of wounds in the breast, bowels, or other parts of the body, and is given with good success to those that are troubled with casting, vomiting, or bleeding at the mouth or nose, or otherwise downwards. The said juice given in the distilled water of Oaken-buds, is very good for women who[4] have their usual courses, or the whites flowing down too abundantly. It helps sore eyes. Of the leaves infused or boiled in oil, omphacine or unripe olives, set in the sun four certain days, or the green leaves sufficiently boiled in the said oil, is made an excellent green balsam, not only for green and fresh wounds, but also for old and inveterate ulcers, especially if a little fine clear turpentine be dissolved therein. It also stays and refreshes all inflammations that arise upon pains by hurts and wounds.<br><br>What parts of the body are under each planet and sign, and also what disease may be found in my astrological judgment of diseases; and for the internal work of nature in the body of man; as vital, animal, natural and procreative spirits of man; the apprehension, judgment, memory; the external senses, viz. seeing, hearing, smelling, tasting and feeling; the virtuous, attractive, retentive, digestive, expulsive, &c. under the dominion of what planets they are, may be found in my Ephemeris for the year 1651. In both which you shall find the chaff of authors blown away by the fame of Dr. Reason, and nothing but rational truths left for the ingenious to feed upon.<br><br>Lastly. To avoid blotting paper with one thing many times, and also to ease your purses in the price of the book, and withal to make you studious in physic; you have at the latter end of the book, the way of preserving all herbs either in juice, conserve, oil, ointment or plaister, electuary, pills, or troches.'),
(65, '', 12, 16, 6, 'This has divers long leaves (some greater, some smaller) set upon a stalk, all of them dented about the edges, green above, and greyish underneath, and a little hairy withal. Among which arises up usually but one strong, round, hairy, brown stalk, two or three feet high, with smaller leaves set here and there upon it. At the top thereof grow many small yellow flowers, one above another, in long spikes; after which come rough heads of seed, hanging downwards, which will cleave to and stick upon garments, or any thing that shall rub against them. The knot is black, long, and somewhat woody, abiding many years, and shooting afresh every Spring; which root, though small, hath a reasonable good scent.'),
(66, '', 13, 16, 6, 'It grows upon banks, near the sides of hedges.'),
(67, '', 14, 16, 6, ' It flowers in July and August, the seed being ripe shortly after.'),
(68, '', 15, 16, 6, 'It is an herb under Jupiter, and the sign Cancer; and strengthens those parts under the planet and sign, and removes diseases in them by sympathy, and those under Saturn, Mars and Mercury by antipathy, if they happen in any part of the body governed by Jupiter, or under the signs Cancer, Sagitarius or Pisces, and therefore must needs be good for the gout, either used outwardly in oil or ointment, or inwardly in an electuary, or syrup, or concerted juice: for which see the latter end of this book.<br><br>It is of a cleansing and cutting faculty, without any manifest heat, moderately drying and binding. It opens and cleanses the liver, helps the jaundice, and is very beneficial to the bowels, healing all inward wounds, bruises, hurts, and other distempers. The decoction of the herb made with wine, and drank, is good against the biting and stinging of serpents, and helps them that make foul, troubled or bloody water.<br><br>This herb also helps the cholic, cleanses the breast, and rids away the cough. A draught of the decoction taken warm before the fit, first removes, and in time rids away the tertian or quartan agues. The leaves and seeds taken in wine, stays the bloody flux; outwardly applied, being stamped with old swine’s grease, it helps[5] old sores, cancers, and inveterate ulcers, and draws forth thorns and splinters of wood, nails, or any other such things gotten in the flesh. It helps to strengthen the members that be out of joint: and being bruised and applied, or the juice dropped in it, helps foul and imposthumed ears.<br><br>The distilled water of the herb is good to all the said purposes, either inward or outward, but a great deal weaker.<br><br>It is a most admirable remedy for such whose livers are annoyed either by heat or cold. The liver is the former of blood, and blood the nourisher of the body, and Agrimony a strengthener of the liver.<br><br>I cannot stand to give you a reason in every herb why it cures such diseases; but if you please to pursue my judgment in the herb Wormwood, you shall find them there, and it will be well worth your while to consider it in every herb, you shall find them true throughout the book.'),
(69, '', 36, 17, 6, 'It is called in some countries, Water Hemp, Bastard Hemp, and Bastard Agrimony, Eupatorium, and Hepatorium, because it strengthens the liver.'),
(70, '', 12, 17, 6, 'The root continues a long time, having many long slender strings. The stalk grows up about two feet high, sometimes higher. They are of a dark purple colour. The branches are many, growing at distances the one from the other, the one from the one side of the stalk, the other from the opposite point. The leaves are fringed, and much indented at the edges. The flowers grow at the top of the branches, of a brown yellow colour, spotted with black spots, having a substance within the midst of them like that of a Daisy: If you rub them between your fingers, they smell like rosin or cedar when it is burnt. The seeds are long, and easily stick to any woollen thing they touch.'),
(71, '', 13, 17, 6, 'They delight not in heat, and therefore they are not so frequently found in the Southern parts of England as in the Northern, where they grow frequently: You may look for them in cold grounds, by ponds and ditches’ sides, and also by running waters; sometimes you shall find them grow in the midst of waters.'),
(72, '', 14, 17, 6, 'They all flower in July or August, and the seed is ripe presently after.'),
(73, '', 15, 17, 6, 'It is a plant of Jupiter, as well as the other Agrimony, only this belongs to the celestial sign Cancer. It heals and dries, cuts and cleanses thick and tough humours of the breast, and for this I hold it inferior to but few herbs that grow. It helps the cachexia or evil disposition of the body, the dropsy and yellow-jaundice. It opens obstructions of the liver, mollifies the hardness of the spleen, being applied outwardly. It breaks imposthumes away inwardly: It is an excellent remedy for the third day ague. It provokes urine and the terms; it kills worms, and cleanses the body of sharp humours, which are the cause of itch and scabs; the herb being burnt, the smoke thereof drives away flies, wasps, &c. It strengthens the lungs exceedingly. Country people give it to their cattle when they are troubled with the cough, or broken-winded.'),
(74, '', 36, 18, 6, 'Several counties give it different names, so that there is scarcely any herb growing of that bigness that has got so many: It is called Cat’s-foot, Ground-ivy, Gill-go-by-ground, and Gill-creep-by-ground, Turn-hoof, Haymaids, and Alehoof.'),
(75, '', 12, 18, 6, 'This well known herb lies, spreads and creeps upon the ground, shoots forth roots, at the corners of tender jointed stalks, set with two round leaves at every joint somewhat hairy, crumpled and unevenly dented about the edges with round dents; at the joints likewise, with the leaves towards the end of the branches, come forth[6] hollow, long flowers, of a blueish purple colour, with small white spots upon the lips that hang down. The root is small with strings.'),
(76, '', 13, 18, 6, 'It is commonly found under hedges, and on the sides of ditches, under houses, or in shadowed lanes, and other waste grounds, in almost every part of this land.'),
(77, '', 14, 18, 6, 'They flower somewhat early, and abide a great while; the leaves continue green until Winter, and sometimes abide, except the Winter be very sharp and cold.'),
(78, '', 15, 18, 6, 'It is an herb of Venus, and therefore cures the diseases she causes by sympathy, and those of Mars by antipathy; you may usually find it all the year long except the year be extremely frosty; it is quick, sharp, and bitter in taste, and is thereby found to be hot and dry; a singular herb for all inward wounds, exulcerated lungs, or other parts, either by itself, or boiled with other the like herbs; and being drank, in a short time it eases all griping pains, windy and choleric humours in the stomach, spleen or belly; helps the yellow jaundice, by opening the stoppings of the gall and liver, and melancholy, by opening the stoppings of the spleen; expels venom or poison, and also the plague; it provokes urine and women’s courses; the decoction of it in wine drank for some time together, procures ease to them that are troubled with the sciatica, or hip-gout: as also the gout in hands, knees or feet; if you put to the decoction some honey and a little burnt alum, it is excellently good to gargle any sore mouth or throat, and to wash the sores and ulcers in the privy parts of man or woman; it speedily helps green wounds, being bruised and bound thereto. The juice of it boiled with a little honey and verdigrease, doth wonderfully cleanse fistulas, ulcers, and stays the spreading or eating of cancers and ulcers; it helps the itch, scabs, wheals, and other breakings out in any part of the body. The juice of Celandine, Field-daisies, and Ground-ivy clarified, and a little fine sugar dissolved therein, and dropped into the eyes, is a sovereign remedy for all pains, redness, and watering of them; as also for the pin and web, skins and films growing over the sight, it helps beasts as well as men. The juice dropped into the ears, wonderfully helps the noise and singing of them, and helps the hearing which is decayed. It is good to tun up with new drink, for it will clarify it in a night, that it will be the fitter to be drank the next morning; or if any drink be thick with removing, or any other accident, it will do the like in a few hours.'),
(79, '', 36, 19, 6, 'It is called Alisander, Horse-parsley, and Wild-parsley, and the Black Pot-herb; the seed of it is that which is usually sold in apothecaries’ shops for Macedonian Parsley-seed.'),
(80, '', 12, 19, 6, 'It is usually sown in all the gardens in Europe, and so well known, that it needs no farther description.'),
(81, '', 14, 19, 6, 'It flowers in June and July; the seed is ripe in August.'),
(82, '', 15, 19, 6, 'It is an herb of Jupiter, and therefore friendly to nature, for it warms a cold stomach, and opens a stoppage of the liver and spleen; it is good to move women’s courses, to expel the afterbirth, to break wind, to provoke urine, and helps the stranguary; and these things the seeds will do likewise. If either of them be boiled in wine, or being bruised and taken in wine, is also effectual against the biting of serpents. And you know what Alexander pottage is good for, that you may no longer eat it out of ignorance but out of knowledge.'),
(83, '', 12, 20, 6, 'This tree seldom grows to any great bigness, but for the most part[7] abideth like a hedge-bush, or a tree spreading its branches, the woods of the body being white, and a dark red colet or heart; the outward bark is of a blackish colour, with many whitish spots therein; but the inner bark next the wood is yellow, which being chewed, will turn the spittle near into a saffron colour. The leaves are somewhat like those of an ordinary Alder-tree, or the Female Cornet, or Dogberry-tree, called in Sussex Dog-wood, but blacker, and not so long. The flowers are white, coming forth with the leaves at the joints, which turn into small round berries, first green, afterwards red, but blackish when they are thorough ripe, divided, as it were, into two parts, wherein is contained two small round and flat seeds. The root runneth not deep into the ground, but spreads rather under the upper crust of the earth.'),
(84, '', 13, 20, 6, 'This tree or shrub may be found plentifully in St. John’s Wood by Hornsey, and the woods upon Hampstead Heath; as also a wood called the Old Park, in Barcomb, in Essex, near the brook’s sides.'),
(85, '', 14, 20, 6, 'It flowers in May, and the berries are ripe in September.'),
(86, '', 15, 20, 6, ' It is a tree of Venus, and perhaps under the celestial sign Cancer. The inner yellow bark hereof purges downwards both choler and phlegm, and the watery humours of such that have the dropsy, and strengthens the inward parts again by binding. If the bark hereof be boiled with Agrimony, Wormwood, Dodder, Hops, and some Fennel, with Smallage, Endive, and Succory-roots, and a reasonable draught taken every morning for some time together, it is very effectual against the jaundice, dropsy, and the evil disposition of the body, especially if some suitable purging medicines have been taken before, to void the grosser excrements: It purges and strengthens the liver and spleen, cleansing them from such evil humours and hardness as they are afflicted with. It is to be understood that these things are performed by the dried bark; for the fresh green bark taken inwardly provokes strong vomitings, pains in the stomach, and gripings in the belly; yet if the decoction may stand and settle two or three days, until the yellow colour be changed black, it will not work so strongly as before, but will strengthen the stomach, and procure an appetite to meat. The outward bark contrariwise doth bind the body, and is helpful for all lasks and fluxes thereof, but this also must be dried first, whereby it will work the better. The inner bark thereof boiled in vinegar is an approved remedy to kill lice, to cure the itch, and take away scabs, by drying them up in a short time. It is singularly good to wash the teeth, to take away the pains, to fasten those that are loose, to cleanse them, and to keep them sound. The leaves are good fodder for kine, to make them give more milk.<br><br>If in the Spring-time you use the herbs before mentioned, and will take but a handful of each of them, and to them add an handful of Elder buds, and having bruised them all, boil them in a gallon of ordinary beer, when it is new; and having boiled them half an hour, add to this three gallons more, and let them work together, and drink a draught of it every morning, half a pint or thereabouts; it is an excellent purge for the Spring, to consume the phlegmatic quality the Winter hath left behind it, and withal to keep your body in health, and consume those evil humours which the heat of Summer will readily stir up. Esteem it as a jewel.'),
(87, '', 12, 21, 6, 'This grows to a reasonable height, and spreads much if it like the place. It is so generally known to country people, that I conceive it needless to tell that which is no news.'),
(88, '', 13, 21, 6, 'It delights to grow in[8] moist woods, and watery places; flowering in April or May, and yielding ripe seed in September.'),
(89, '', 15, 21, 6, 'It is a tree under the dominion of Venus, and of some watery sign or others, I suppose Pisces; and therefore the decoction, or distilled water of the leaves, is excellent against burnings and inflammations, either with wounds or without, to bathe the place grieved with, and especially for that inflammation in the breast, which the vulgar call an ague.<br><br>If you cannot get the leaves (as in Winter it is impossible) make use of the bark in the same manner.<br><br>The leaves and bark of the Alder-tree are cooling, drying, and binding. The fresh leaves, laid upon swellings, dissolve them, and stay the inflammation. The leaves put under the bare feet galled with travelling, are a great refreshing to them. The said leaves, gathered while the morning dew is on them, and brought into a chamber troubled with fleas, will gather them thereunto, which being suddenly cast out, will rid the chamber of those troublesome bed-fellows.'),
(90, '', 36, 22, 6, 'To write a discription of that which is so well known to be growing almost in every garden, I suppose is altogether needless; yet for its virtue it is of admirable use.<br><br>In time of Heathenism, when men had found out any excellent herb, they dedicated it to their gods; as the bay-tree to Apollo, the Oak to Jupiter, the Vine to Bacchus, the Poplar to Hercules. These the idolators following as the Patriarchs they dedicate to their Saints; as our Lady’s Thistle to the Blessed Virgin, St. John’s Wort to St. John and another Wort to St. Peter, &c. Our physicians must imitate like apes (though they cannot come off half so cleverly) for they blasphemously call Phansies or Hearts-ease, an herb of the Trinity, because it is of three colours; and a certain ointment, an ointment of the Apostles, because it consists of twelve ingredients. Alas I am sorry for their folly, and grieved at their blasphemy, God send them wisdom the rest of their age, for they have their share of ignorance already. Oh! Why must ours be blasphemous, because the Heathens and infidels were idolatrous? Certainly they have read so much in old rusty authors, that they have lost all their divinity; for unless it were amongst the Ranters, I never read or heard of such blasphemy. The Heathens and infidels were bad, and ours worse; the idolaters give idolatrous names to herbs for their virtues sake, not for their fair looks; and therefore some called this an herb of the Holy Ghost; others, more moderate, called it Angelica, because of its angelical virtues, and that name it retains still, and all nations follow it so near as their dialect will permit.'),
(91, '', 15, 22, 6, 'It is an herb of the Sun in Leo; let it be gathered when he is there, the Moon applying to his good aspect; let it be gathered either in his hour, or in the hour of Jupiter, let Sol be angular; observe the like in gathering the herbs of other planets, and you may happen to do wonders. In all epidemical diseases caused by Saturn, that is as good a preservative as grows: It resists poison, by defending and comforting the heart, blood, and spirits; it doth the like against the plague and all epidemical diseases, if the root be taken in powder to the weight of half a dram at a time, with some good treacle in Carduus water, and the party thereupon laid to sweat in his bed; if treacle be not to be had take it alone in Carduus or Angelica-water. The stalks or roots candied and eaten fasting, are good preservatives in time of infection; and at other times to warm and comfort a cold stomach. The root also steeped in vinegar, and a little of that vinegar taken sometimes fasting, and[9] the root smelled unto, is good for the same purpose. A water distilled from the root simply, as steeped in wine, and distilled in a glass, is much more effectual than the water of the leaves; and this water, drank two or three spoonfuls at a time, easeth all pains and torments coming of cold and wind, so that the body be not bound; and taken with some of the root in powder at the beginning, helpeth the pleurisy, as also all other diseases of the lungs and breast, as coughs, phthysic, and shortness of breath; and a syrup of the stalks do the like. It helps pains of the cholic, the stranguary and stoppage of the urine, procureth womens’ courses, and expelleth the after-birth, openeth the stoppings of the liver and spleen, and briefly easeth and discusseth all windiness and inward swellings. The decoction drank before the fit of an ague, that they may sweat (if possible) before the fit comes, will, in two or three times taking, rid it quite away; it helps digestion and is a remedy for a surfeit. The juice or the water, being dropped into the eyes or ears, helps dimness of sight and deafness; the juice put into the hollow teeth, easeth their pains. The root in powder, made up into a plaster with a little pitch, and laid on the biting of mad dogs, or any other venomous creature, doth wonderfully help. The juice or the waters dropped, or tent wet therein, and put into filthy dead ulcers, or the powder of the root (in want of either) doth cleanse and cause them to heal quickly, by covering the naked bones with flesh; the distilled water applied to places pained with the gout, or sciatica, doth give a great deal of ease.<br><br>The wild Angelica is not so effectual as the garden; although it may be safely used to all the purposes aforesaid.'),
(92, '', 36, 23, 6, 'Besides its common name, by which it is best known by the florists of our days, it is called Flower Gentle, Flower Velure Floramor, and Velvet Flower.'),
(93, '', 12, 23, 6, 'It being a garden flower, and well known to every one that keeps it, I might forbear the description; yet, notwithstanding, because some desire it, I shall give it. It runs up with a stalk a cubit high, streaked, and somewhat reddish towards the root, but very smooth, divided towards the top with small branches, among which stand long broad leaves of a reddish green colour, slippery; the flowers are not properly flowers, but tuffs, very beautiful to behold, but of no smell, of reddish colour; if you bruise them, they yield juice of the same colour, being gathered, they keep their beauty a long time; the seed is of a shining black colour.'),
(94, '', 14, 23, 6, 'They continue in flower from August till the time the frost nips them.'),
(95, '', 15, 23, 6, 'It is under the dominion of Saturn, and is an excellent qualifier of the unruly actions and passions of Venus, though Mars also should join with her. The flowers dried and beaten into powder, stop the terms in women, and so do almost all other red things. And by the icon, or image of every herb, the ancients at first found out their virtues. Modern writers laugh at them for it; but I wonder in my heart, how the virtues of herbs came at first to be known, if not by their signatures; the moderns have them from the writings of the ancients; the ancients had no writings to have them from: but to proceed. The flowers stop all fluxes of blood; whether in man or woman, bleeding either at the nose or wound. There is also a sort of Amaranthus that bears a white flower, which stops the whites in women, and the running of the reins in men, and is a most gallant antivenereal, and a singular remedy for the French pox.'),
(96, '', 36, 24, 6, 'Called also Wind flower, because they[10] say the flowers never open but when the wind blows. Pliny is my author; if it be not so, blame him. The seed also (if it bears any at all) flies away with the wind.'),
(97, '', 13, 24, 6, 'They are sown usually in the gardens of the curious, and flower in the Spring-time. As for discription I shall pass it, being well known to all those that sow them.'),
(98, '', 15, 24, 6, 'It is under the dominion of Mars, being supposed to be a kind of Crow-foot. The leaves provoke the terms mightily, being boiled, and the decoction drank. The body being bathed with the decoction of them, cures the leprosy. The leaves being stamped and the juice snuffed up in the nose, purges the head mightily; so does the root, being chewed in the mouth, for it procures much spitting, and brings away many watery and phlegmatic humours, and is therefore excellent for the lethargy. And when all is done, let physicians prate what they please, all the pills in the dispensatory purge not the head like to hot things held in the mouth. Being made into an ointment, and the eyelids anointed with it, it helps inflammations of the eyes, whereby it is palpable, that every stronger draws its weaker like. The same ointment is excellently good to cleanse malignant and corroding ulcers.'),
(99, '', 36, 25, 6, 'Called also Orach, and Arage; it is cultivated for domestic uses.'),
(100, '', 12, 25, 6, 'It is so commonly known to every housewife, it were labour lost to describe it.'),
(101, '', 14, 25, 6, 'It flowers and seeds from June to the end of August.'),
(102, '', 15, 25, 6, 'It is under the government of the Moon; in quality cold and moist like unto her. It softens and loosens the body of man being eaten, and fortifies the expulsive faculty in him. The herb, whether it be bruised and applied to the throat, or boiled, and in like manner applied, it matters not much, it is excellently good for swellings in the throat: the best way, I suppose, is to boil it, apply the herb outwardly: the decoction of it, besides, is an excellent remedy for the yellow jaundice.'),
(103, '', 36, 26, 6, 'Called also Vulvaria, from that part of the body upon which the operation is most; also Dog’s Arrach, Goat’s Arrach, and Stinking Motherwort.'),
(104, '', 12, 26, 6, 'This has small and almost round leaves, yet a little pointed and without dent or cut, of a dusky mealy colour, growing on the slender stalks and branches that spread on the ground, with small flowers set with the leaves, and small seeds succeeding like the rest, perishing yearly, and rising again with its own sowing. It smells like rotten fish, or something worse.'),
(105, '', 13, 26, 6, 'It grows usually upon dunghills.'),
(106, '', 14, 26, 6, 'They flower in June and July, and their seed is ripe quickly after.'),
(107, '', 15, 26, 6, 'Stinking Arrach is used as a remedy to women pained, and almost strangled with the mother, by smelling to it; but inwardly taken there is no better remedy under the moon for that disease. I would be large in commendation of this herb, were I but eloquent. It is an herb under the dominion of Venus, and under the sign Scorpio; it is common almost upon every dunghill. The works of God are freely given to man, his medicines are common and cheap, and easily to be found. I commend it for an universal medicine for the womb, and such a medicine as will easily, safely, and speedily cure any disease thereof, as the fits of the mother, dislocation, or falling out thereof; cools the womb being over-heated. And let me tell you this, and I will tell you the truth, heat of the womb is one of the greatest causes[11] of hard labour in child-birth. It makes barren women fruitful. It cleanseth the womb if it be foul, and strengthens it exceedingly; it provokes the terms if they be stopped, and stops them if they flow immoderately; you can desire no good to your womb, but this herb will affect it; therefore if you love children, if you love health, if you love ease, keep a syrup always by you, made of the juice of this herb, and sugar (or honey, if it be to cleanse the womb), and let such as be rich keep it for their poor neighbours; and bestow it as freely as I bestow my studies upon them, or else let them look to answer it another day, when the Lord shall come to make inquisition for blood.'),
(108, '', 36, 27, 6, 'To put a gloss upon their practice, the physicians call a herb (which country people vulgarly know by the name of Dead Nettle) Archangel; whether they favour more of superstition or folly, I leave to the judicious reader. There is more curiosity than courtesy to my countrymen used by others in the explanation as well of the names, as discription of this so well known herb; which that I may not also be guilty of, take this short discription: first, of the Red Archangel. This is likewise called Bee Nettle.'),
(109, '', 12, 27, 6, 'This has divers square stalks, somewhat hairy, at the joints whereof grow two sad green leaves dented about the edges, opposite to one another to the lowermost, upon long foot stalks, but without any toward the tops, which are somewhat round, yet pointed, and a little crumpled and hairy; round about the upper joints, where the leaves grow thick, are sundry gaping flowers of a pale reddish colour; after which come the seeds three or four in a husk. The root is small and thready, perishing every year; the whole plant hath a strong smell but not stinking.<br><br>White Archangel hath divers square stalks, none standing straight upward, but bending downward, whereon stand two leaves at a joint, larger and more pointed than the other, dented about the edges, and greener also, more like unto Nettle leaves, but not stinking, yet hairy. At the joints, with the leaves, stand larger and more open gaping white flowers, husks round about the stalks, but not with such a bush of leaves as flowers set in the top, as is on the other, wherein stand small roundish black seeds: the root is white, with many strings at it, not growing downward but lying under the upper crust of the earth, and abides many years increasing; this has not so strong a scent as the former.<br><br>Yellow Archangel is like the White in the stalks and leaves; but that the stalks are more straight and upright, and the joints with leaves are farther asunder, having longer leaves than the former, and the flowers a little larger and more gaping, of a fair yellow colour in most, in some paler. The roots are like the white, only they creep not so much under the ground.'),
(110, '', 13, 27, 6, 'They grow almost every where (unless it be in the middle of the street), the yellow most usually in the wet grounds of woods, and sometimes in the dryer, in divers counties of this nation.'),
(111, '', 14, 27, 6, 'They flower from the beginning of the Spring all the Summer long.'),
(112, '', 15, 27, 6, 'The Archangels are somewhat hot and drier than the stinging Nettles, and used with better success for the stopping and hardness of the spleen, than they, by using the decoction of the herb in wine, and afterwards applying the herb hot into the region of the spleen as a plaister, or the decoction with spunges. Flowers of the White Archangel are preserved or conserved to be used to stay the whites, and the flowers of the red to stay the reds in women. It makes the heart merry, drives away melancholy, quickens[12] the spirits, is good against quartan agues, stancheth bleeding at mouth and nose, if it be stamped and applied to the nape of the neck; the herb also bruised, and with some salt and vinegar and hog’s-grease, laid upon a hard tumour or swelling, or that vulgarly called the king’s evil, do help to dissolve or discuss them; and being in like manner applied, doth much allay the pains, and give ease to the gout, sciatica, and other pains of the joints and sinews. It is also very effectual to heal green wounds, and old ulcers; also to stay their fretting, gnawing, and spreading. It draws forth splinters, and such like things gotten into the flesh, and is very good against bruises and burnings. But the Yellow Archangel is most commended for old, filthy, corrupt sores and ulcers, yea although they grow to be hollow, and to dissolve tumours. The chief use of them is for women, it being a herb of Venus.'),
(113, '', 36, 28, 6, 'The hot Arssmart is called also Water-pepper, or Culrage. The mild Arssmart is called dead Arssmart Persicaria, or Peach-wort, because the leaves are so like the leaves of a peach-tree; it is also called Plumbago.'),
(114, '', 12, 28, 6, 'This has broad leaves set at the great red joint of the stalks; with semicircular blackish marks on them, usually either blueish or whitish, with such like seed following. The root is long, with many strings thereat, perishing yearly; this has no sharp taste (as another sort has, which is quick and biting) but rather sour like sorrel, or else a little drying, or without taste.'),
(115, '', 13, 28, 6, 'It grows in watery places, ditches, and the like, which for the most part are dry in summer.'),
(116, '', 14, 28, 6, 'It flowers in June, and the seed is ripe in August.'),
(117, '', 15, 28, 6, 'As the virtue of both these is various, so is also their government; for that which is hot and biting, is under the dominion of Mars, but Saturn, challenges the other, as appears by that leaden coloured spot he hath placed upon the leaf.<br><br>It is of a cooling and drying quality, and very effectual for putrified ulcers in man or beast, to kill worms, and cleanse the putrified places. The juice thereof dropped in, or otherwise applied, consumes all colds, swellings, and dissolveth the congealed blood of bruises by strokes, falls, &c. A piece of the root, or some of the seeds bruised, and held to an aching tooth, takes away the pain. The leaves bruised and laid to the joint that has a felon thereon, takes it away. The juice destroys worms in the ears, being dropped into them; if the hot Arssmart be strewed in a chamber, it will soon kill all the fleas; and the herb or juice of the cold Arssmart, put to a horse or other cattle’s sores, will drive away the fly in the hottest time of Summer; a good handful of the hot biting Arssmart put under a horse’s saddle, will make him travel the better, although he were half tired before. The mild Arssmart is good against all imposthumes and inflammations at the beginning, and to heal green wounds.<br><br>All authors chop the virtues of both sorts of Arssmart together, as men chop herbs for the pot, when both of them are of contrary qualities. The hot Arssmart grows not so high or tall as the mild doth, but has many leaves of the colour of peach leaves, very seldom or never spotted; in other particulars it is like the former, but may easily be known from it, if you will but be pleased to break a leaf of it cross your tongue, for the hot will make your tongue to smart, but the cold will not. If you see them both together, you may easily distinguish them, because the mild hath far broader leaves.'),
(118, '', 12, 29, 6, 'Asarabacca appears like an evergreen, keeping its leaves all the Winter, but putting forth new ones in the time of Spring. It has many heads rising from the roots, from whence come many smooth leaves, every one upon his foot stalks, which are rounder and bigger than Violet leaves, thicker also, and of a dark green shining colour on the upper side, and of a pale yellow green underneath, little or nothing dented about the edges, from among which rise small, round, hollow, brown green husks, upon short stalks, about an inch long, divided at the brims into five divisions, very like the cups or heads of the Henbane seed, but that they are smaller; and these be all the flower it carries, which are somewhat sweet, being smelled to, and wherein, when they are ripe, is contained small cornered rough seeds, very like the kernels or stones of grapes or raisins. The roots are small and whitish, spreading divers ways in the ground, increasing into divers heads; but not running or creeping under the ground, as some other creeping herbs do. They are somewhat sweet in smell, resembling Nardus, but more when they are dry than green; and of a sharp and not unpleasant taste.'),
(119, '', 13, 29, 6, 'It grows frequently in gardens.'),
(120, '', 14, 29, 6, 'They keep their leaves green all Winter; but shoot forth new in the Spring, and with them come forth those heads or flowers which give ripe seed about Midsummer, or somewhat after.'),
(121, '', 15, 29, 6, 'It is a plant under the dominion of Mars, and therefore inimical to nature. This herb being drank, not only provokes vomiting, but purges downwards, and by urine also, purges both choler and phlegm: If you add to it some spikenard, with the whey of goat’s milk, or honeyed water, it is made more strong, but it purges phlegm more manifestly than choler, and therefore does much help pains in the hips, and other parts; being boiled in whey, it wonderfully helps the obstructions of the liver and spleen, and therefore profitable for the dropsy and jaundice; being steeped in wine and drank, it helps those continual agues that come by the plenty of stubborn humours; an oil made thereof by setting in the sun, with some laudanum added to it, provokes sweating (the ridge of the back being anointed therewith), and thereby drives away the shaking fits of the ague. It will not abide any long boiling, for it loseth its chief strength thereby; nor much beating, for the finer powder provokes vomits and urine, and the coarser purgeth downwards.<br><br>The common use hereof is, to take the juice of five or seven leaves in a little drink to cause vomiting; the roots have also the same virtue, though they do not operate so forcibly; they are very effectual against the biting of serpents, and therefore are put as an ingredient both into Mithridite and Venice treacle. The leaves and roots being boiled in lye, and the head often washed therewith while it is warm, comforts the head and brain that is ill affected by taking cold, and helps the memory.<br><br>I shall desire ignorant people to forbear the use of the leaves; the roots purge more gently, and may prove beneficial to such as have cancers, or old putrified ulcers, or fistulas upon their bodies, to take a dram of them in powder in a quarter of a pint of white wine in the morning. The truth is, I fancy purging and vomiting medicines as little as any man breathing doth, for they weaken nature, nor shall ever advise them to be used, unless upon urgent necessity. If a physician be nature’s servant, it is his duty to strengthen his mistress as much as he can, and weaken her as little as may be.'),
(122, '', 12, 30, 6, 'It rises up at first with divers[14] white and green scaly heads, very brittle or easy to break while they are young, which afterwards rise up in very long and slender green stalks of the bigness of an ordinary riding wand, at the bottom of most, or bigger, or lesser, as the roots are of growth; on which are set divers branches of green leaves shorter and smaller than fennel to the top; at the joints whereof come forth small yellowish flowers, which turn into round berries, green at first and of an excellent red colour when they are ripe, shewing like bead or coral, wherein are contained exceeding hard black seeds; the roots are dispersed from a spongeous head into many long, thick, and round strings, wherein is sucked much nourishment out of the ground, and increaseth plentifully thereby.'),
(123, '', 12, 31, 6, 'This grows usually in gardens, and some of it grows wild in Appleton meadows in Gloucestershire, where the poor people gather the buds of young shoots, and sell them cheaper that our garden Asparagus is sold in London.'),
(124, '', 14, 31, 6, 'For the most part they flower, and bear their berries late in the year, or not at all, although they are housed in Winter.'),
(125, '', 15, 31, 6, 'They are both under the dominion of Jupiter. The young buds or branches boiled in ordinary broth, make the belly soluble and open, and boiled in white wine, provoke urine, being stopped, and is good against the stranguary or difficulty of making water; it expelleth the gravel and stone out of the kidneys, and helpeth pains in the reins. And boiled in white wine or vinegar, it is prevalent for them that have their arteries loosened, or are troubled with the hip-gout or sciatica. The decoction of the roots boiled in wine and taken, is good to clear the sight, and being held in the mouth easeth the toothache. The garden asparagus nourisheth more than the wild, yet hath it the same effects in all the afore-mentioned diseases. The decoction of the root in white wine, and the back and belly bathed therewith, or kneeling or lying down in the same, or sitting therein as a bath, has been found effectual against pains of the reins and bladder, pains of the mother and cholic, and generally against all pains that happen to the lower parts of the body, and no less effectual against stiff and benumbed sinews, or those that are shrunk by cramps and convulsions, and helps the sciatica.'),
(126, '', 36, 32, 6, 'This is so well known, that time would be misspent in writing a description of it; therefore I shall only insist upon the virtues of it.'),
(127, '', 15, 32, 6, 'It is governed by the Sun: and the young tender tops, with the leaves, taken inwardly, and some of them outwardly applied, are singularly good against the bitings of viper, adder, or any other venomous beast; and the water distilled therefrom being taken, a small quantity every morning fasting, is a singular medicine for those that are subject to dropsy, or to abate the greatness of those that are too gross or fat. The decoction of the leaves in white wine helps to break the stone, and expel it, and cures the jaundice. The ashes of the bark of the Ash made into lye, and those heads bathed therewith which are leprous, scabby, or scald, they are thereby cured. The kernels within the husks, commonly called Ashen Keys, prevail against stitches and pains in the sides, proceeding of wind, and voideth away the stone by provoking urine.<br><br>I can justly except against none of all this, save only the first, viz. That Ash-tree tops and leaves are good against the bitings of serpents and vipers. I suppose this had its rise from Gerrard or Pliny, both which hold that there is such an antipathy between an[15] adder and an Ash-tree, that if an adder be encompassed round with Ash-tree leaves, she will sooner run through the fire than through the leaves: The contrary to which is the truth, as both my eyes are witnesses. The rest are virtues something likely, only if it be in Winter when you cannot get the leaves, you may safely use the bark instead of them. The keys you may easily keep all the year, gathering them when they are ripe.'),
(128, '', 12, 33, 6, 'The ordinary Avens hath many long, rough, dark green, winged leaves, rising from the root, every one made of many leaves set on each side of the middle rib, the largest three whereof grow at the end, and are snipped or dented round about the edges; the other being small pieces, sometimes two and sometimes four, standing on each side of the middle rib underneath them. Among which do rise up divers rough or hairy stalks about two feet high, branching forth with leaves at every joint not so long as those below, but almost as much cut in on the edges, some into three parts, some into more. On the tops of the branches stand small, pale, yellow flowers consisting of five leaves, like the flowers of Cinquefoil, but large, in the middle whereof stand a small green herb, which when the flower is fallen, grows to be round, being made of many long greenish purple seeds, (like grains) which will stick upon your clothes. The root consists of many brownish strings or fibres, smelling somewhat like unto cloves, especially those which grow in the higher, hotter, and drier grounds, and in free and clear air.'),
(129, '', 13, 33, 6, 'They grow wild in many places under hedge’s sides, and by the path-ways in fields; yet they rather delight to grow in shadowy than sunny places.'),
(130, '', 14, 33, 6, 'They flower in May or June for the most part, and their seed is ripe in July at the farthest.'),
(131, '', 15, 33, 6, 'It is governed by Jupiter, and that gives hopes of a wholesome healthful herb. It is good for the diseases of the chest or breast, for pains, and stiches in the side, and to expel crude and raw humours from the belly and stomach, by the sweet savour and warming quality. It dissolves the inward congealed blood happening by falls or bruises, and the spitting of blood, if the roots, either green or dry, be boiled in wine and drank; as also all manner of inward wounds or outward, if washed or bathed therewith. The decoction also being drank, comforts the heart, and strengthens the stomach and a cold brain, and therefore is good in the spring times to open obstructions of the liver, and helps the wind cholic; it also helps those that have fluxes, or are bursten, or have a rupture; it takes away spots or marks in the face, being washed therewith. The juice of the fresh root, or powder of the dried root, has the same effect with the decoction. The root in the Spring-time steeped in wine, gives it a delicate savour and taste, and being drank fasting every morning, comforts the heart, and is a good preservative against the plague, or any other poison. It helps indigestion, and warms a cold stomach, and opens obstructions of the liver and spleen.<br><br>It is very safe: you need have no dose prescribed; and is very fit to be kept in every body’s house.');

-- --------------------------------------------------------

--
-- Table structure for table `use_type`
--

CREATE TABLE `use_type` (
  `use_type_id` int(11) NOT NULL,
  `use_type_name` varchar(255) NOT NULL,
  `type_order` int(11) NOT NULL,
  `herbal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `use_type`
--

INSERT INTO `use_type` (`use_type_id`, `use_type_name`, `type_order`, `herbal_id`) VALUES
(1, 'Medicinal Action and Uses', 3, 1),
(2, 'Culinary', 5, 1),
(3, 'Cosmetic', 6, 1),
(4, 'Economic', 7, 1),
(5, 'History', 9, 1),
(6, 'Dosages', 4, 1),
(7, 'Other Species', 10, 1),
(8, 'Recipes', 8, 1),
(9, 'Habitat', 2, 1),
(10, 'Cultivation', 11, 1),
(11, 'Description', 2, 1),
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
(25, 'The Place and Time.', 10, 7),
(26, 'Synonym', 1, 1),
(27, 'Constituents', 3, 1),
(28, 'Part used', 1, 1),
(29, 'Adulteration', 3, 1),
(30, 'Chemical Constituents', 3, 1),
(31, 'Dose', 5, 1),
(32, 'Poisoning from, and Antidotes', 5, 1),
(33, 'Other Varieties', 9, 1),
(34, 'Preparations', 8, 1),
(35, 'Dosage and Preparations', 7, 1),
(36, '', 0, 6);

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
  MODIFY `ailment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `constituents`
--
ALTER TABLE `constituents`
  MODIFY `constituent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `herb`
--
ALTER TABLE `herb`
  MODIFY `herb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
  MODIFY `medterms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uses`
--
ALTER TABLE `uses`
  MODIFY `uses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `use_type`
--
ALTER TABLE `use_type`
  MODIFY `use_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
