-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 08:28 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `blogid` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `catname`, `blogid`, `heading`, `date`, `text`, `image`) VALUES
(10, 'Feeling', 'feeling1', 'Feeling suffocated', '2019-02-23', 'Feeling suffocated is a general feeling with not only teenagers but many in adulthood as well as in old age. The reason for suffocation may vary. For a normal layman, suffocation is only caused when we are not able to breathe because of polluted air or when we are enclosed in a closed room.\r\nBut, but the scenario is totally different for a teenager. They are sometimes suffocated by the constant nagging by the parentsâ€¦baby donâ€™t do this, donâ€™t do that. The load of expectation from parents sometimes becomes so high that the child starts feeling suffocated. The charm and happiness of the child takes a second seat when the wishes and aspirations of the parents take the front seat.\r\nIf father could not fulfill his dream of becoming an engineer, he expects his son to become so. The mother sees her dream of being a doctor through the eyes of the daughter. They both forget, they are suffocating their kids with their invisible masks of a pride of being an achiever.\r\nWho is to be blamed? Is that the parents are wrong if they expect from their children? Or the kids are wrong as they take all this not as an advise or mentorship but a burden imposed on them.\r\nSurely a manthan of thoughts is required. Parents must rethink and initially close their aspirations and desires for sometime. Take an eagle view, observe and empathaize with the kid. They must observe what the child enjoys, what are his/her interest areas. If required take a call, take counseling. Get the psychometric test done which can easily identify the interest areas and the zones where the child can excel.\r\nThe DMIT(Dermatoglyphics Multiple Intelligence test) can surely help to identify the inborn talents of the child and thereby choosing the profession or lines where he/she can take the lead and become an outstanding performer.\r\nLife is precious. Especially the life we have given birth to. Nothing in life should be as important as giving a clean and cared breathes to our child. Making him/her feel loved, cared and most of the heard of. The child only feels low and under depression as he is not able to give an outburst to his emotions, his stresses, his questions, his insecurities, his fears.\r\nSo lets bridge this gap. If I am a parent. Lets give time to our kids, a special time where only you and them and nobody else.\r\nIf I am a child, lets write on a piece of paper â€œI NEED YOUâ€ and hand it to our mother or father who so ever is close. Share with them atleast once, what we are feeling, what we are undergoing, what is shaking us and stopping us what we want to achieve.\r\nSPEAK UP! ITS YOUR LIFE! \r\nYOU WILL SURELY BE HEARD. LETS BRIDGE THE COMMUNICATION GAP. \r\n', 'images/images.jpg'),
(11, 'Relation With maid', 'Relation01', 'Relation With Maid', '2019-02-23', 'â€œRelationship with maidâ€sounds strange.  One may think what is the use of maintaining a healthy relationship with your maid. But imagine one instance like you had a party last night, with lots of guests are there in your house. Your house is a complete mess. The next morning you receive a call from a maid that she is not coming. This would be worse than a nightmare. So a maid is the spinal cord for the successful management at the homefront. Without domestic help you cannot live your dreams. So to maintain a healthy relationship is an integral part. Questions arises why and how .\r\nWhy to maintain?\r\nYour helper is doing such a great job. You are tension free and stress free.\r\nIt creates a positive living environment both for her and other family members.\r\nHelper is also a human being. He/She also needs support, respect and care.\r\n\r\nHow ?\r\n1.Be empathetic\r\n2.Be supportive\r\n3.Try to communicate\r\n4.Celebrate special occasions\r\n5.Be generous\r\n6.Build your confidence\r\n7.Stop bullying\r\n8.Keep your tone soft and polite\r\n9.Remember your helper is sharing a large portion of your burden.\r\n10.Build trust\r\n11.Respect her feelings.\r\n12.Sometimes praise her work. \r\n\r\n', 'images/9639-shutterstock-67102216.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `catid` varchar(255) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catid`, `catname`, `image`) VALUES
(10, 'A1', 'Feeling ', 'images/images.png'),
(11, 'relation01', 'Relation With maid', 'images/9639-shutterstock-67102216.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `mobile`, `password`, `image`) VALUES
(2, 'ravi', 'raavi2555@gmail.com', 8519983, '52c48d91323beb43f52025dde4f8ee99', 'images/1458058986.jpg'),
(3, 'ravi', 'raavi2555@gmail.com', 8519983, '52c48d91323beb43f52025dde4f8ee99', 'images/124350779.jpg'),
(4, 'ravi', 'raavi2555@gmail.com', 8519983, '262117fcb87972711c0949b6234b54f9', 'images/IMG_20180625_202010.JPG.jpg'),
(5, 'ravi', 'raavi2555@gmail.com', 8519983, '916571d318fb9d28fd1244c66a2cf274', 'images/IMG_20180625_202010.JPG'),
(6, '', 'raavi2555@gmail.com', 2147483647, '19f1beb402b9a7ff539637c068fee5d7', 'images/logofinal-01 (1).png'),
(7, 'Ravendra', 'thab@gmail.com', 2147483647, '256be15e7e964ef7f54b45b84ecf0820', 'images/wp1828986-programmer-wallpapers.jpg'),
(8, 'Raavi', 'thakur@gmail.com', 2147483647, '52c48d91323beb43f52025dde4f8ee99', 'images/wp1828986-programmer-wallpapers.jpg'),
(9, 'Ravendra Kumar', 'raavi2555@gmail.com', 2147483647, '19f1beb402b9a7ff539637c068fee5d7', 'images/twoteenagesons.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogid` (`blogid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `catname` (`catname`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
