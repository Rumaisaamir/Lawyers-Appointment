-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 10:14 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `law`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bid` int(11) NOT NULL,
  `lid` int(11) DEFAULT NULL,
  `cs_id` int(11) DEFAULT NULL,
  `bdate` date NOT NULL,
  `btime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bid`, `lid`, `cs_id`, `bdate`, `btime`) VALUES
(2, 13, 1, '2022-07-21', '15:59:00'),
(3, 16, 1, '2022-07-28', '13:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_details` varchar(100) NOT NULL,
  `c_icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `c_name`, `c_details`, `c_icon`) VALUES
(1, 'Business Law', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'stats'),
(2, 'Family Law', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'family'),
(3, 'Criminal Law', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'handcuffs'),
(4, 'Real Estate Law', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'stay-home'),
(5, 'Personal Injury Law', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'injury'),
(6, 'Judicial Law', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'auction');

-- --------------------------------------------------------

--
-- Table structure for table `consultant`
--

CREATE TABLE `consultant` (
  `cl_id` int(11) NOT NULL,
  `cl_name` varchar(50) NOT NULL,
  `cl_mail` varchar(50) NOT NULL,
  `cl_msg` varchar(500) NOT NULL,
  `cid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultant`
--

INSERT INTO `consultant` (`cl_id`, `cl_name`, `cl_mail`, `cl_msg`, `cid`) VALUES
(1, 'Junaid Akmal', 'junaidakmal123@gmail.com', 'Someone is trying to sell my property without my permission with duplicate paper of my property. Can you help me in my problem', 4),
(2, 'Kamal Khan', 'kami123@gmail.com', 'Some of my relative is willing to kill me because of some property issue ', 5),
(3, 'Sana Warsi', 'sanawarsi123@gmail.com', 'I have some business related problem Please look after my problem', 1),
(4, 'Hamza Wasti', 'hamzawasti789@gmail.com', 'I have some issues related to family property distribution. Please look after my problem', 2),
(5, 'Nemza Khan ', 'nemzakhan482@gmail.com', 'I have issues with a very big gangster related to some personal issues Can  you provide me a lawyer related to this. ', 3),
(7, 'Khadija Asad', 'djay101@gmail.com', 'I have to go to another country .Please can you guide me to goverment Policies.', 6);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cs_id` int(11) NOT NULL,
  `Cname` varchar(50) NOT NULL,
  `Cmail` varchar(50) NOT NULL,
  `Cpassword` varchar(50) NOT NULL,
  `Ccontact` varchar(50) NOT NULL,
  `Ccnic` varchar(50) NOT NULL,
  `Cpic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cs_id`, `Cname`, `Cmail`, `Cpassword`, `Ccontact`, `Ccnic`, `Cpic`) VALUES
(1, 'Neha Mehmood', 'nehamehmood789@gmail.com', '12345', '0333-1500072', '42201-1488852-4', 'uploads/IMG_16556642926675309.jpg'),
(2, 'Rumaisa Amir', 'rumaisaamir101@gmail.com', '123456', '0309-2887475', '42201-1488852-4', 'uploads/IMG_16556765621781694.jpg'),
(3, 'Syed Kaif Ali Zaidi', 'akaif123@gmail.com', '12345', '0333-1234567', '42201-1488852-4', 'uploads/IMG_16566950081230773.jpg'),
(4, 'Habiba Nasir', 'habibanasir101@gmail.com', '123456', '0333-12345678', '42201-1488852-7', 'uploads/IMG_16567427628993137.jpg'),
(5, 'Samra Sheikh', 'sheikhsam766@gmail.com', 'xamrah', '0346-5176818', '42201-1488852-7', 'uploads/IMG_16567431211815851.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `lid` int(11) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `Lmail` varchar(50) NOT NULL,
  `Lpass` varchar(50) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `l_detail` varchar(200) NOT NULL,
  `l_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`lid`, `l_name`, `Lmail`, `Lpass`, `cid`, `l_detail`, `l_pic`) VALUES
(4, 'Atty. Lloyd Wilson', 'wilson123@gmail.com', '12345', 1, 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'uploads/IMG_16554316109908729.png'),
(5, 'Atty. Rachel Parker', 'parker123@gmail.com', '12345', 2, 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'uploads/IMG_16554316574968771.png'),
(6, 'Atty. Ian Smith', 'smith123@gmail.com', '12345', 3, 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'uploads/IMG_16554317062917330.jpg'),
(7, 'Atty. Alicia Henderson', 'henderson123@gmail.com', '12345', 4, 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'uploads/IMG_16554317681605208.png'),
(8, 'Atty. Lloyd Toms', 'loyd123@gmail.com', '12345', 5, 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'uploads/IMG_16554318412055096.jpg'),
(9, 'Atty. Rachel Fred', 'Fred123@gmail.com', '12345', 6, 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'uploads/IMG_16554318864087527.jpg'),
(10, 'Atty. Ian Rachel', 'lan123@gmail.com', '12345', 1, 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'uploads/IMG_16554319388336602.jpg'),
(11, 'Atty. Fred Henderson', 'fredhenderson123@gmail.com', '12345', 2, 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'uploads/IMG_16554319977423264.jpg'),
(13, 'Atty. Nelson Wilson', 'nelson123@gmail.com', '12345', 3, 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'uploads/IMG_16554347394837603.jpg'),
(14, 'Atty. Mike William', 'mike123@gmail.com', '12345', 4, 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'uploads/IMG_16554347803163086.jpg'),
(15, 'Atty. Alice Henderson', 'alice123@gmail.com', '12345', 5, 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'uploads/IMG_16554348539786201.jpg'),
(16, 'Atty. Mia Harry', 'mia123@gmail.com', '12345', 6, 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'uploads/IMG_16554349704676845.jpg'),
(17, 'Atty. Ramly Parker', 'Ramly123@gmial.com', '12345', 2, 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'uploads/IMG_16554350311349416.png');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `rid` int(11) NOT NULL,
  `cs_id` int(11) DEFAULT NULL,
  `r_msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`rid`, `cs_id`, `r_msg`) VALUES
(1, 1, 'Good customer service costs less than bad customer service'),
(2, 2, 'You are serving a  good customer care, not a life sentence.'),
(3, 3, 'I am very happy with your fast services and your advices.');

-- --------------------------------------------------------

--
-- Table structure for table `usermsg`
--

CREATE TABLE `usermsg` (
  `Uid` int(11) NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `Umail` varchar(50) NOT NULL,
  `Usubject` varchar(50) NOT NULL,
  `Umessage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usermsg`
--

INSERT INTO `usermsg` (`Uid`, `Uname`, `Umail`, `Usubject`, `Umessage`) VALUES
(1, 'Javed Sheikh', 'javed934@gmail.com', 'For Job', 'I have to join your firm. I have 5 years of experi'),
(2, 'Neha Mehmood', 'nehamehmood2011@hotmail.com', '😘😘🖖🖖🙌💅🥰🥰', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `fk_lawyer` (`lid`),
  ADD KEY `fk_cus` (`cs_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `consultant`
--
ALTER TABLE `consultant`
  ADD PRIMARY KEY (`cl_id`),
  ADD KEY `cat_index` (`cid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cs_id`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`lid`),
  ADD KEY `fk_category` (`cid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `Cust_index` (`cs_id`);

--
-- Indexes for table `usermsg`
--
ALTER TABLE `usermsg`
  ADD PRIMARY KEY (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `consultant`
--
ALTER TABLE `consultant`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usermsg`
--
ALTER TABLE `usermsg`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `fk_Customer` FOREIGN KEY (`cs_id`) REFERENCES `customer` (`cs_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_lawyer` FOREIGN KEY (`lid`) REFERENCES `lawyers` (`lid`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `consultant`
--
ALTER TABLE `consultant`
  ADD CONSTRAINT `cate_fk` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD CONSTRAINT `cat_fk` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `cus_fk` FOREIGN KEY (`cs_id`) REFERENCES `customer` (`cs_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
