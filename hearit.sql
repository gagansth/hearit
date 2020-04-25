-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 08:08 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hearit`
--

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE `channels` (
  `channelid` int(11) NOT NULL,
  `channelname` varchar(255) DEFAULT NULL,
  `channelphoto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`channelid`, `channelname`, `channelphoto`) VALUES
(1, 'MrSuicideSheep', 'Pictures/channelicons/mrsuicidesheep.jpg'),
(2, 'Proximity', 'Pictures/channelicons/proximity.jpg'),
(3, 'Airwave Music Tv', 'Pictures/channelicons/airwavemusictv.jpg'),
(4, 'Koala Kontrol', 'Pictures/channelicons/koalakontrol.jpg'),
(5, 'No Copyright Sounds', 'Pictures/channelicons/ncs.jpg'),
(6, 'Monstercat', 'Pictures/channelicons/monstercat.jpg'),
(7, 'xKito Music', 'Pictures/channelicons/xkito.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `edm`
--

CREATE TABLE `edm` (
  `id` int(11) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `songname` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `channelname` varchar(255) DEFAULT NULL,
  `channelid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edm`
--

INSERT INTO `edm` (`id`, `artist`, `songname`, `url`, `channelname`, `channelid`) VALUES
(1, 'Deadmau5', 'Strobe', 'https://www.youtube.com/watch?v=tKi9Z-f6qX4', '', 0),
(2, 'Deadmau5 ft Chris James', 'The Veldt', 'https://www.youtube.com/watch?v=uiUAq4aVTjY', '', 0),
(3, 'Eric Prydz', 'Opus', 'https://www.youtube.com/watch?v=iRA82xLsb_w', '', 0),
(6, 'Ollie', 'Stuck', 'https://www.youtube.com/watch?v=ZWq_GMSO4rk', 'MrSuicideSheep', 1),
(7, 'Skrillex, Boys Noize, Ty Dolla $ign', 'Midnight Hour', 'https://www.youtube.com/watch?v=B9k1ma-WoAQ', '', NULL),
(10, 'TOKYO MACHINE', 'DIGITAL MIRAGE 2020', 'https://www.youtube.com/watch?v=nqwZ0C5jsZs', NULL, 2),
(11, 'Cartoon', 'On & On(ft. Daniel Levi)', 'https://www.youtube.com/watch?v=K4DyBUG242c', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `englishsongs`
--

CREATE TABLE `englishsongs` (
  `id` int(11) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `songname` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `englishsongs`
--

INSERT INTO `englishsongs` (`id`, `artist`, `songname`, `url`) VALUES
(2, 'Sean Kingston & Justin Bieber', 'Eenie meenie', 'https://www.youtube.com/watch?v=prmmCg5bKxA'),
(3, 'Post Malone & Swae Lee', 'Sunflower', 'https://www.youtube.com/watch?v=ApXoWvfEYVU'),
(4, 'Imagine Dragons', 'Bad Liar', 'https://www.youtube.com/watch?v=I-QfPUz1es8'),
(5, 'Lauv', 'Sad Forever', 'https://www.youtube.com/watch?v=Klsi8CbSm8Y');

-- --------------------------------------------------------

--
-- Table structure for table `hindisongs`
--

CREATE TABLE `hindisongs` (
  `id` int(11) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `songname` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hindisongs`
--

INSERT INTO `hindisongs` (`id`, `artist`, `songname`, `url`) VALUES
(1, 'Dhvani Bhanushali', 'Vaaste', 'https://www.youtube.com/watch?v=BBAyRBTfsOU'),
(3, 'Yeh Dillagi', 'Ole Ole', 'https://www.youtube.com/watch?v=hcCvSmjHwGY'),
(4, 'Megha Chatterji', 'Mere Naseeb Mein', 'https://www.youtube.com/watch?v=YAQdrO3FCww'),
(5, 'Kabir Singh', 'Tera ban jaunga', 'https://www.youtube.com/watch?v=Qdz5n1Xe5Qo'),
(6, 'Kabir Singh', 'Tujhe kitna chahne lage', 'https://www.youtube.com/watch?v=Q_6UGBT0pRk'),
(7, 'Kabir Singh', 'Bekhayali', 'https://www.youtube.com/watch?v=fhBYrqYU13w'),
(11, 'KGF', 'Gali Gali Mein', 'https://www.youtube.com/watch?v=VID289p3GTc'),
(12, 'Love Aaj Kal 2', 'Shayad', 'https://www.youtube.com/watch?v=iZH_ydGn9i0');

-- --------------------------------------------------------

--
-- Table structure for table `rock`
--

CREATE TABLE `rock` (
  `id` int(11) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `songname` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rock`
--

INSERT INTO `rock` (`id`, `artist`, `songname`, `url`) VALUES
(1, 'Paramore', 'Decode', 'https://www.youtube.com/watch?v=RvnkAtWcKYg'),
(2, 'Evanescence', 'Bring Me To Life', 'https://www.youtube.com/watch?v=3YxaaGgTQYM'),
(3, 'Bon Jovi', 'It\'s my life', 'https://www.youtube.com/watch?v=vx2u5uUu3DE'),
(4, 'Guns\' N Roses', 'November Rain', 'https://www.youtube.com/watch?v=8SbUC-UaAxE'),
(5, 'Guns\' N Roses', 'Sweet Child O\' Mine', 'https://www.youtube.com/watch?v=1w7OgIMMRc4'),
(6, 'AC/DC', 'Highway To Hell', 'https://www.youtube.com/watch?v=gEPmA3USJdI'),
(7, 'Three Days Grace', 'Never Too Late', 'https://www.youtube.com/watch?v=lL2ZwXj1tXM'),
(8, 'Three Days Grace', 'I Hate Everything About You', 'https://www.youtube.com/watch?v=d8ekz_CSBVg'),
(9, 'Three Days Grace', 'Animal I Have Become', 'https://www.youtube.com/watch?v=xqds0B_meys'),
(10, 'GreenDay', '21 Guns', 'https://www.youtube.com/watch?v=Mke9EHMQMYI'),
(11, 'GreenDay', 'Boulevard Of Broken Dreams', 'https://www.youtube.com/watch?v=Soa3gO7tL-c'),
(12, 'GreenDay', 'Wake Me Up When September Ends', 'https://www.youtube.com/watch?v=rdpBZ5_b48g'),
(13, 'GreenDay', 'American Idiot', 'https://www.youtube.com/watch?v=V9NFs7qPwuk'),
(14, 'GreenDay', 'Know Your Enemy', 'https://www.youtube.com/watch?v=9IclmVdWNbI'),
(15, 'GreenDay', 'Good Riddance(Time of your life)', 'https://www.youtube.com/watch?v=CnQ8N1KacJc'),
(16, 'My Darkest Days', 'Without You', 'https://www.youtube.com/watch?v=N8Sqjtdtzw0'),
(17, 'Audioslave', 'Like A Stone', 'https://www.youtube.com/watch?v=7QU1nvuxaMA'),
(18, 'Audioslave', 'Be Yourself', 'https://www.youtube.com/watch?v=WC5FdFlUcl0'),
(19, 'Nirvana', 'Smells Like Teen Spirit', 'https://www.youtube.com/watch?v=hTWKbfoikeg'),
(20, 'Metallica', 'Nothing Else Matters', 'https://www.youtube.com/watch?v=Tj75Arhq5ho'),
(21, 'Scorpions', 'Wind Of Change', 'https://www.youtube.com/watch?v=n4RjJKxsamQ'),
(22, 'Survivor', 'Eye Of The Tiger', 'https://www.youtube.com/watch?v=btPJPFnesV4'),
(23, '3 Doors Down', 'Here Without You', 'https://www.youtube.com/watch?v=kPBzTxZQG5Q'),
(24, 'Hoobastank', 'The Reason', 'https://www.youtube.com/watch?v=fV4DiAyExN0'),
(25, 'Hoobastand', 'Disappear', 'https://www.youtube.com/watch?v=P0KyIeHcCzs'),
(26, 'Tokio Hotel', 'World Behind My Wall', 'https://www.youtube.com/watch?v=zlLkscjDWsA'),
(27, 'Blink-182', 'I Miss You', 'https://www.youtube.com/watch?v=s1tAYmMjLdY'),
(28, 'Blink-182', 'After Midnight', 'https://www.youtube.com/watch?v=H86730HjLVA'),
(29, 'Blink-182', 'Wishing Well', 'https://www.youtube.com/watch?v=OeYLdKs3Z7o'),
(30, 'Lamb Of God', 'Set To Fail', 'https://www.youtube.com/watch?v=E813VYySueM'),
(31, 'Disturbed', 'Down With The Sickness', 'https://www.youtube.com/watch?v=_wA5NmQESx8');

-- --------------------------------------------------------

--
-- Table structure for table `shuffledplaylist`
--

CREATE TABLE `shuffledplaylist` (
  `id` int(11) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `songname` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shuffledplaylist`
--

INSERT INTO `shuffledplaylist` (`id`, `artist`, `songname`, `url`) VALUES
(2, 'Jay Sean', 'Do you remember', 'https://www.youtube.com/watch?v=a81eP2E8MEQ'),
(4, 'Iyaz', 'Solo', 'https://www.youtube.com/watch?v=140ImixpY7M'),
(5, 'Jay Sean ft Lil Wayne', 'Down', 'https://www.youtube.com/watch?v=oUbpGmR1-QM'),
(6, 'RIhanna & Calvin Harris', 'We found love', 'https://www.youtube.com/watch?v=tg00YEETFzg'),
(7, 'Gotye ft Kimbra', 'Somebody that i used to know', 'https://www.youtube.com/watch?v=8UVNT4wvIGY'),
(8, 'Chris Brown', 'Turn up the music', 'https://www.youtube.com/watch?v=eQWG8BVeryU'),
(9, 'Backstreet Boys', 'I want it that way', 'https://www.youtube.com/watch?v=4fndeDfaWCg'),
(10, 'Backstreet Boys', 'Quit playing games', 'https://www.youtube.com/watch?v=Ug88HO2mg44'),
(11, 'Backstreet Boys', 'As long as you love me', 'https://www.youtube.com/watch?v=0Gl2QnHNpkA'),
(12, 'Usher ft will.i.am', 'OMG', 'https://www.youtube.com/watch?v=1RnPB76mjxI'),
(13, 'Ne-yo', 'One in a million', 'https://www.youtube.com/watch?v=6tpl9LtkRRw'),
(14, 'Ne-yo', 'Miss Independent', 'https://www.youtube.com/watch?v=k6M5C-oKw9k'),
(15, 'Chris Brown', 'Forever', 'https://www.youtube.com/watch?v=5sMKX22BHeE'),
(16, 'Chris Brown ', 'With you', 'https://www.youtube.com/watch?v=nmjdaBaZe8Y'),
(17, 'Charice ft Iyaz', 'Pyramid', 'https://www.youtube.com/watch?v=vGPG91x5eMY'),
(18, 'Conor Maynard', 'Vegas Girl', 'https://www.youtube.com/watch?v=uMTGcwZxdGg'),
(19, 'Conor Maynard ft Ne-yo', 'Turn Around', 'https://www.youtube.com/watch?v=OwP6U0LRzQM'),
(20, 'Far East Movement ', 'Like a G6 ft The Cataracs & DEV', 'https://www.youtube.com/watch?v=w4s6H4ku6ZY'),
(21, 'Cody Simpson', 'All Day', 'https://www.youtube.com/watch?v=MYRNGeIJMiQ'),
(22, 'Cody Simpson', 'On my mind', 'https://www.youtube.com/watch?v=F-zDy7j7NVw'),
(23, 'Cody Simpson', 'Pretty Brown Eyes', 'https://www.youtube.com/watch?v=EGDlVvIGTZk'),
(24, 'Akon', 'Right Now(na na na)', 'https://www.youtube.com/watch?v=vIaH35-MLsk'),
(25, 'Akon', 'Beautiful', 'https://www.youtube.com/watch?v=rSOzN0eihsE'),
(26, 'Akon', 'Sorry,Blame it on me', 'https://www.youtube.com/watch?v=ynMk2EwRi4Q');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `songname` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `artist`, `songname`, `url`) VALUES
(1, 'Jatrai Jatra', 'Jiban Jatra Ho', 'https://www.youtube.com/watch?v=XtI6VO4Lf2U'),
(3, 'Bulbul', 'Maya Oye Oye(Khudra Khadri Maya)', 'https://www.youtube.com/watch?v=nPbIR_Gt4pA'),
(4, 'Dal Bhat Tarkari', 'Visit Visama', 'https://www.youtube.com/watch?v=hvvBJWYAHJs'),
(5, 'Samir Acharya ft Bidhya Tiwari', 'Ghamma sukaideu', 'https://www.youtube.com/watch?v=z85ORGAK7Js'),
(6, 'Mr RJ & Sirjana Khatri', 'Nautanki Maya', 'https://www.youtube.com/watch?v=JpzxsygPOp8'),
(7, 'Samir Acharya & Bidhya Tiwari ft Mr Rj', 'Pitch Road', 'https://www.youtube.com/watch?v=RV8_VniF19o'),
(8, 'Aashish Sachin & Melina Rai', 'Pirim Nalaune', 'https://www.youtube.com/watch?v=vxtOglAcYZQ'),
(10, 'Ekdev Limbu', 'Lai Lai', 'https://www.youtube.com/watch?v=dKsvYFH7XjM'),
(11, 'Bir Bikram 2', 'Piratiko Mitho Tirsana', 'https://www.youtube.com/watch?v=7QUtEmBT_-w'),
(12, 'Sanjib Parajuli', 'Sochama', 'https://www.youtube.com/watch?v=1ruVMEe-5IY'),
(13, 'Kabaddi x3', 'Dubo Phulyo', 'https://www.youtube.com/watch?v=sTbBZFoVk3U'),
(14, 'Ahsmita Adhikari', 'Timro Mayale Badhera Raakha', 'https://www.youtube.com/watch?v=04cL3gTS_94'),
(15, 'Trishna Gurung', 'Maya Pirati', 'https://www.youtube.com/watch?v=ptboVrLu3b0'),
(16, 'Jatrai Jatra', 'Maya Pirim', 'https://www.youtube.com/watch?v=aeQF6KdUdj8'),
(17, 'Kagazpatra', 'Maya Sansar', 'https://www.youtube.com/watch?v=GK3iGqcWGMQ'),
(18, 'Maruni', 'Jam Na Maya Jam', 'https://www.youtube.com/watch?v=tg7pfEtjdrU'),
(19, 'Sushant KC', 'Sathi', 'https://www.youtube.com/watch?v=7aoDZ8UeUxU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`channelid`);

--
-- Indexes for table `edm`
--
ALTER TABLE `edm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `englishsongs`
--
ALTER TABLE `englishsongs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hindisongs`
--
ALTER TABLE `hindisongs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rock`
--
ALTER TABLE `rock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shuffledplaylist`
--
ALTER TABLE `shuffledplaylist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `channels`
--
ALTER TABLE `channels`
  MODIFY `channelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `edm`
--
ALTER TABLE `edm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `englishsongs`
--
ALTER TABLE `englishsongs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hindisongs`
--
ALTER TABLE `hindisongs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rock`
--
ALTER TABLE `rock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `shuffledplaylist`
--
ALTER TABLE `shuffledplaylist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
