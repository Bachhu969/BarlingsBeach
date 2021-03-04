-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2021 at 03:14 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barlingsbeach`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `room_name` text NOT NULL,
  `arrivaldate` text NOT NULL,
  `departuredate` text NOT NULL,
  `fullname` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `room_id`, `room_name`, `arrivaldate`, `departuredate`, `fullname`, `address`, `email`, `phone`) VALUES
(73, 1, 'Luxury Town House--kfnebjridq79ihmrcd2taevo1k', '31-03-2021', '01-04-2021', 'Kabindra Bakey', '', '', ''),
(68, 3, 'Shack House--9ekunbp6cmbvnf4blhi74ke8e9', '18-02-2021', '19-02-2021', 'Bacchu shrestha', '10 watervirew', 'edvin@mail.com', '0433994928'),
(69, 3, 'Shack House--9ekunbp6cmbvnf4blhi74ke8e9', '18-02-2021', '19-02-2021', 'Bacchu shrestha', '10 watervirew', 'edvin@mail.com', '0433994928'),
(70, 1, 'Luxury Town House--9ekunbp6cmbvnf4blhi74ke8e9', '10-02-2021', '11-02-2021', 'Bacchu shrestha', '10 watervirew', 'bachhu_shr14@hotmail.com', '0433994928'),
(71, 2, 'SeaSide House--auupcab4vc9o1nj1cq5ubtugjt', '25-02-2021', '28-02-2021', 'Kabindra Bakey', '10 watervirew', 'bachhu_shr14@hotmail.com', '0433994928'),
(72, 2, 'SeaSide House--urngo9qso1qsrt50kdk1rbcsc7', '01-03-2021', '05-03-2021', 'Edvin Jirel', 'Kalanki', 'edvin@email.com', '98510162279');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `RoomID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `NormalCharges` int(11) NOT NULL,
  `PeakCharges` int(11) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `pageURL` varchar(255) NOT NULL,
  `picurl` text NOT NULL,
  PRIMARY KEY (`RoomID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`RoomID`, `Name`, `NormalCharges`, `PeakCharges`, `Description`, `pageURL`, `picurl`) VALUES
(1, 'Luxury Town House', 180, 240, 'Our luxury 2 Bedroom Townhouse has views from the deck and it\'s just 2 minutes walk to the beach The townhouse offers a spacious living area with a leather lounge suite that overlooks a sun drenched, tree-filled garden. A separate kitchen has everything you need to make your stay relaxed and comfortable TVs in the loungeroom and in each bedroom are sure to make everyone happy. An undercover BBQ area with seating offers plenty of space to stretch out and enjoy that cup of freshly brewed coffee or a glass of wine Each bedroom has a Queen bed and spacious en-suite facilities. Plus there is a powder room for general use A daily cleaning service provides a general tidy-up of the kitchen and bathrooms. This cleaning service also includes a changeover of towels and bedding on every third day of your stay in our luxuriously appointed townhouse This is the perfect place for your luxury home-away-from-home holiday.', 'reservation_1.php', 'The accommodation is for a maximum of 2 couples \r\nThe townhouse is strictly non-smoking and it is pet-friendly \r\nUnlimited wifi is available throughout your stay  \r\nThe cleaning service is as indicated unless alternatives are negotiated before your arrival \r\nA 15% deposit is payable on confirmation of your booking with the balance due 30 days before your arrival \r\nA full refund is available with 10 days notice of cancellation in writing \r\nA 50% refund is available with less than 5 days notice of cancellation in writing \r\n'),
(2, 'SeaSide House', 160, 200, 'This comfortable house has direct access to the beach through a gate in the backyard It offers accommodation with three bedrooms and two bathrooms for 4-6 people. The master bedroom has a Queen bed and an en-suite bathroom, the second bedroom has a Queen bed that can be separated into two large single beds, and the third bedroom has bunk beds for 2 singles.The generous, open plan living area and kitchen looks over a water-wise garden of native plantings. You can relax indoors or laze away your time in this shaded garden There is a large TV in the living room along with a DVD player and a selection of movies. Unlimited Wi-Fi is provided in the accommodation fee Sit back and relax. Read a book, go for a walk along the beach, catch some waves or have a sleep-in. It\'s your private space to enjoy A twice-weekly cleaning service includes a general tidy-up of the kitchen and bathrooms plus a weekly replacement of towels and bedding.', 'reservation_1.php', 'The accommodation is for a maximum of 6 people \r\nThe house is strictly non-smoking and it is pet-friendly \r\nUnlimited wifi is available throughout your stay  \r\nThe cleaning service is as indicated unless alternatives are negotiated before your arrival \r\nA 15% deposit is payable on confirmation of your booking with the balance due 30 days before your arrival \r\nA full refund is available with 10 days notice of cancellation in writing \r\nA 50% refund is available with less than 5 days notice of cancellation in writing \r\n'),
(3, 'Shack House', 140, 160, 'Comfortable 3 Bedroom House with lots of character This comfortable 3 Bedroom house has lots of character. There are wonderful views over the water with direct access to a dog-friendly beach. It has a large veranda for lazing away your holiday time. There\'s plenty of space for you to enjoy BBQs and sunset drinks at the end of each day It is just 10 minutes walk, or a short drive, to a restaurant, cafes and other essential shopping needs at Barlings Beach The house can accommodate eight people: with a queen-size bed in the main bedroom, a queen-size bed that can be separated into two single beds in the second bedroom and two sets of bunks in the third bedroom. The centrally-located bathroom has a full-size bath, a separate shower, a toilet and plenty of hanging space for all your beach towels. There is an outdoor shower for use at the end of each visit to the beach An open plan living area has comfy couches, a cinema tv and a kitchen area with the basics you need to make your stay relaxed and comfortable A weekly cleaning service provides a general tidy-up of the kitchen and bathroom. This cleaning service includes removal of rubbish and a changeover of towels and bedding. This is a character-filled place for you to enjoy a casual, memorable beach holiday with family and friends.', 'reservation_1.php', 'The accommodation is for a maximum of 8 people \r\nThe house is strictly non-smoking and it is pet-friendly \r\nUnlimited wifi is available throughout your stay  \r\nThe cleaning service is as indicated unless alternatives are negotiated before your arrival \r\nA 15% deposit is payable on confirmation of your booking with the balance due 30 days before your arrival \r\nA full refund is available with 10 days notice of cancellation in writing \r\nA 50% refund is available with less than 5 days notice of cancellation in writing \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `room_over_view`
--

DROP TABLE IF EXISTS `room_over_view`;
CREATE TABLE IF NOT EXISTS `room_over_view` (
  `RoomID` int(11) NOT NULL,
  `overviewid` int(11) NOT NULL,
  `SHORT_DESCRIPTION` text NOT NULL,
  `LONG_DESCRIPTION` text NOT NULL,
  PRIMARY KEY (`RoomID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_over_view`
--

INSERT INTO `room_over_view` (`RoomID`, `overviewid`, `SHORT_DESCRIPTION`, `LONG_DESCRIPTION`) VALUES
(1, 1, 'BARLINGS BEACH LUXURY TOWNHOUSE ', 'The accommodation is for a maximum of 2 couples.\r\nhe townhouse is strictly non-smoking and it is pet-friendly.	\r\nUnlimited wifi is available throughout your stay.	\r\nThe cleaning service is as indicated unless alternatives are negotiated before your arrival');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
