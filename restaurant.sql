-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 07:43 PM
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
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `title` varchar(100) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `videolink` varchar(100) NOT NULL,
  `mainpicture` varchar(100) NOT NULL,
  `minipicture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`title`, `about`, `videolink`, `mainpicture`, `minipicture`) VALUES
('Welcome!', 'If you\'ve been looking for hottest food, then you\'ve come to the right place. At Spicy Mystery\'s 50/50 in Pasadena, Calif., the 50 Alarm Burger is so hot you have to eat it while wearing gloves. The patty is made with half beef and half spicy chorizo. Toppings include ghost pepper Colby Jack cheese, habanero jam, freshly sliced jalapenos and, to take it over the top, deep-fried habanero poppers stuffed with cream cheese. You will definitely want to ask for one of the restaurants popular milk shakes to cool down your palate.', 'https://www.youtube.com/watch?v=lcU3pruVyUw', 'images/aboutus.jpg', 'images/eating.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `imageurl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `password`, `email`, `firstname`, `lastname`, `imageurl`) VALUES
(5, '123', 'asad.ikram53@gmail.com', 'Asad', 'Ikram', 'Asad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL,
  `reply` varchar(400) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `phone`, `email`, `message`, `reply`, `cid`) VALUES
('Asad Ikram', 900021212, 'asad.ikram53@gmail.com', 'Hi please send price of cheese cake 2 pounds', '300 usd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventid` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `eventimage` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventid`, `name`, `eventimage`) VALUES
(1, 'Wedding', 'eventimages/wedding.jpg'),
(2, 'Anniversary', 'eventimages/anniversary.jpg'),
(3, 'Birthdays', 'eventimages/birthdays.jpg'),
(4, 'Corporate Meetings', 'eventimages/corporatemeetings.jpg'),
(5, 'Social Gathering', 'eventimages/socialgathering.jpg'),
(6, 'Private Events', 'eventimages/privateevents.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuid` int(11) NOT NULL,
  `menutypeid` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` decimal(20,4) DEFAULT NULL,
  `about` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuid`, `menutypeid`, `name`, `price`, `about`) VALUES
(1, 1, 'Murgh Tikka Masala', '20.0000', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(2, 1, 'Fish Moilee', '35.0000', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(3, 1, 'Safed Gosht', '15.0000', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(4, 1, 'French Toast Combo', '10.0000', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(5, 1, 'Vegie Omelet', '8.3500', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(6, 1, 'Chorizo & Egg Omelet', '22.0000', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(7, 2, 'Banana Split', '11.0000', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(8, 2, 'Sticky Toffee Pudding', '72.0000', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(9, 2, 'Pecan', '26.0000', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(10, 2, 'Apple Strudel', '42.0000', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(11, 2, 'Pancakes', '7.3500', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(12, 2, 'Ice Cream Sundae', '22.0000', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(13, 3, 'Spring Water', '32.0000', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(14, 3, 'Coke, Diet Coke, Coke Zero', '14.0000', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(15, 3, 'Orange Fanta', '93.0000', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(16, 3, 'Lemonade, Lemon Squash', '18.0000', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(17, 3, 'Sparkling Mineral Water', '38.3500', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(18, 3, 'Lemon, Lime & Bitters', '69.0000', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.');

-- --------------------------------------------------------

--
-- Table structure for table `menutype`
--

CREATE TABLE `menutype` (
  `typeid` int(11) NOT NULL,
  `typename` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menutype`
--

INSERT INTO `menutype` (`typeid`, `typename`) VALUES
(1, 'MAINS'),
(2, 'DESSERTS'),
(3, 'DRINKS');

-- --------------------------------------------------------

--
-- Table structure for table `officers`
--

CREATE TABLE `officers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(80) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `about` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`id`, `name`, `role`, `picture`, `about`) VALUES
(1, 'Raghav', 'President', 'images-roles/person_4.jpg', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.'),
(2, 'Jane Williams', 'Business Manager', 'images-roles/person_1.jpg', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.'),
(3, 'Jeffrey Neddery', 'Marketing Director', 'images-roles/person_2.jpg', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.');

-- --------------------------------------------------------

--
-- Table structure for table `openinghours`
--

CREATE TABLE `openinghours` (
  `id` int(11) NOT NULL,
  `Day` varchar(100) NOT NULL,
  `Hours` varchar(100) NOT NULL,
  `orderid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `openinghours`
--

INSERT INTO `openinghours` (`id`, `Day`, `Hours`, `orderid`) VALUES
(1, 'Monday', '11 am - 9 pm', 1),
(2, 'Tuesday', '11 am - 9 pm', 2),
(3, 'Wednesday', '11 am - 9 pm', 3),
(4, 'Thursday', '11 am - 9 pm', 4),
(5, 'Friday', '11 am - 9 pm', 5),
(6, 'Saturday', '11 am - 11 pm', 6),
(7, 'Sunday', '11 am - 11 pm', 7),
(8, 'Monday', '11 am - 10 pm', 1),
(9, 'Tuesday', '11 am - 10 pm', 2),
(10, 'Wednesday', '11 am - 10 pm', 3),
(11, 'Monday', '11 am - 11 pm', 1),
(12, 'Wednesday', '11 am - 11 pm', 3),
(13, 'Thursday', '11 am - 11 pm', 4);

-- --------------------------------------------------------

--
-- Table structure for table `websiteinfo`
--

CREATE TABLE `websiteinfo` (
  `address` varchar(400) NOT NULL,
  `longitude` decimal(10,3) NOT NULL,
  `latitude` decimal(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `websiteinfo`
--

INSERT INTO `websiteinfo` (`address`, `longitude`, `latitude`) VALUES
('98 West 21th Street, Suite 721 New York NY 10016', '150.644', '-34.397');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuid`),
  ADD KEY `menutypeid` (`menutypeid`);

--
-- Indexes for table `menutype`
--
ALTER TABLE `menutype`
  ADD PRIMARY KEY (`typeid`);

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`menutypeid`) REFERENCES `menutype` (`typeid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
