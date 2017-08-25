-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2017 at 07:32 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `society`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `title`, `date`, `description`, `status`, `user`) VALUES
(2, 'abcdf', '25/11/17', 'dgk dkfndksjngkjdsbgdsgsdbnh bdsu bg', 0, '8'),
(3, 'vckjscb', '23/4/56', ' fklenkjfneskjnfkjesdgkjebgjb', 1, ''),
(4, 'ghgh gh hggh', '23/4/56', ' kdjnsakjfnkjsnfk bsndkf kj nfkj bdfj gdjfgjads fj', 1, 'abc'),
(6, 'tesst title', '34 jan 2018', 'test description', 0, 'abc'),
(7, 'mehfooz 75 q hai?', '7 Aug 2017', 'http://www.bbc.com/news/world-asia-40846959', 1, 'Nooralam Shaikh'),
(8, 'lift not working', '25/11/17', 'lift not working plz do something', 1, 'sufiyan'),
(9, 'parking lights not working', '34 jan 2018', 'parking lights not working', 0, 'sufiyan'),
(10, 'lift', '8/8/17', 'lift not working properly', 0, 'junaid');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `date`, `description`) VALUES
(4, 'Independence day meeting', '15/8/17', 'Independence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meeting'),
(8, 'abcdfr', 'rrytrhth', ' fhndknfdnfndk fnkdnfioj fjasjfioj afoijaofadio fioafadsf'),
(9, 'abcdfr', '25/11/17', ' fhndknfdnfndk fnkdnfioj fjasjfioj afoijaofadio fioafadsf'),
(10, 'Independence day meeting', '14 August 2017', 'Independence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meetingIndependence day meeting');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `amount` int(20) NOT NULL DEFAULT '0',
  `date` varchar(20) NOT NULL,
  `paid_status` tinyint(1) NOT NULL DEFAULT '1',
  `by_user` varchar(10) NOT NULL,
  `p_ref_no` varchar(500) NOT NULL,
  `account_no` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `amount`, `date`, `paid_status`, `by_user`, `p_ref_no`, `account_no`) VALUES
(7, 2400, 'august 2017', 1, '8', 'zgdDGpd5CljyU7gh1rg', 'abcd456734'),
(8, 1200, 'july 2017', 1, '12', '7GiwUHL0cyaRbXzbzupX', 'asdfg123456'),
(9, 1234, 'december 2017', 1, '12', 'VJr4K9BJFyW8LSGXnUym', 'ASDCV345678'),
(10, 1234, '12/1/17', 1, '13', '4mOZp3icPbJl7MDDEWVg', 'hbjgu68y6709y789'),
(11, 1200, 'july 17', 1, '17', 'QNp6AdhPwYvM48eATxPD', 'SBI13546541'),
(12, 1000, 'july 18', 1, '17', '052ZXXXN8x1dUPbiTuuH', 'SBI13546541');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `password`, `type`) VALUES
(8, 'abc', 'abc', 'abc', 'resident'),
(11, 'secr1', '201,moonlight society,abc,kharghar', '123', 'secretary'),
(12, 'sufiyan', '1234,fdgds,dsgdsg,dsgdsg', '123', 'resident'),
(13, 'Nooralam Shaikh', 'Bainganwadi, Govandi', '12345678', 'resident'),
(14, 'pradnyesh', 'asd asdkgkjs ouwqoj', '123456', 'secretary'),
(16, 'pawaskar', '201,moonlight society,abc,kharghar', '123', 'secretary'),
(17, 'junaid', '201.taloja', '123', 'resident');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `amount` int(10) NOT NULL,
  `month` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `type`, `amount`, `month`, `status`) VALUES
(1, 'security', 5000, 'jan 2017', 1),
(2, 'security', 5000, 'jan 2017', 1),
(3, 'house keeping', 3440, 'december 2017', 1),
(4, 'house keeping', 3440, 'december 2017', 1),
(5, 'lift service man', 2345, 'december 2017', 1),
(6, 'Republic day decoration', 2345, '26 jan 2017', 1),
(7, 'gopal mama', 3440, 'december 2017', 1),
(8, 'lift man', 1234, 'december 2017', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
