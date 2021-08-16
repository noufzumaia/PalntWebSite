-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 08:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment` varchar(1000) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plantname`
--

CREATE TABLE `plantname` (
  `plantname` varchar(150) NOT NULL,
  `description` varchar(300) NOT NULL,
  `photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plantname`
--

INSERT INTO `plantname` (`plantname`, `description`, `photo`) VALUES
('African violet', 'There are a fair few types including standard, trailers, miniatures, and chimeras (a basic way to put them into a category). Various species includes different sizes, flower colors and foliage type/', 0x61762d6c696768742d707572706c652d312e6a7067),
('aglaonema', ' slow growing plant varieties includes, plain green, speckled, blotched and variegated types. One of the most popular and sought after is the silver queen which has leaves covered in silver mainly with some small green patches.', 0x61676c616f6e656d612e6a7067),
('bunny cacti', 'The Bunny cacti is native to northern Mexico and desert regions stretching into Arizona. This plant has the appearance of a shrub, and spreads out to cover between 2-5 feet of ground as a mature plant. Named for its visual appearance, the Bunny Ear Cactus, also called the Polka-Dot Cactus, has the s', 0x4f70756e7469612d6d6963726f64617379732e6a7067),
('calathea', 'Calathea Crocata, also commonly known as the Eternal Flame due to its yellow flowers, will make a colorful and exotic addition to your home.\r\n\r\n\r\n\r\nThis plant is native to Brazil and tropical America. Due to environmental damage it is hard to find in the wild nowadays.\r\n\r\nThis species loves heat and', 0x63616c61746865612e6a7067),
('calla lily', ' an outdoor plant by nature, the Calla Lily will perform wonderfully as an indoor plant. Keeping this rhizome happy indoors is a matter of paying attention to some very basic growing conditions.\r\n\r\n\r\n\r\nThe Zantedeschia aethiopica is native to southern Africa. As such, this plant is used to very diff', 0x63616c6c612d6c696c792d666c6f7765722e6a7067),
('lavender', ' Lavender, an herb with many culinary uses, also makes a stunning addition to borders and perennial gardens, providing sweeping drifts of color from early summer into fall. With its silvery-green foliage, upright flower spikes and compact shrub-like form.', 0x4c6176656e6465722e6a706567),
('mint', '   Mint, genus of 25 species of fragrant herbs of the mint family (Lamiaceae). Native to Eurasia, North America, southern Africa, and Australia, mints are widely distributed throughout the temperate areas of the world and have naturalized in many places. A number of species, particularly peppermint ', 0x6d696e742d6c656166732d2e6a7067),
('Rose', 'Flower , red', 0x52656420526f73652e6a666966),
('thyum', 'members of the genus Thymus of aromatic perennial evergreen herbs in the mint family Lamiaceae. Thymes are relatives of the oregano genus Origanum. They have culinary, medicinal, and ornamental uses, and the species most commonly cultivated and used for culinary purposes is Thymus vulgaris.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `plantname`
--
ALTER TABLE `plantname`
  ADD PRIMARY KEY (`plantname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
