-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 04:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `innocentia`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodsurvey`
--

CREATE TABLE `foodsurvey` (
  `ID` int(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `FirstNames` varchar(50) NOT NULL,
  `ContactNumber` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Age` int(50) NOT NULL,
  `Pizza` varchar(50) DEFAULT NULL,
  `Pasta` varchar(50) DEFAULT NULL,
  `PapAndWors` varchar(50) DEFAULT NULL,
  `ChickenStirFry` varchar(50) DEFAULT NULL,
  `BeefStirFry` varchar(50) DEFAULT NULL,
  `Other` varchar(50) DEFAULT NULL,
  `EatOut` varchar(50) NOT NULL,
  `WatchMovies` varchar(50) NOT NULL,
  `WatchTV` varchar(50) NOT NULL,
  `ListeningToRadio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surveytable`
--

CREATE TABLE `surveytable` (
  `surname` varchar(100) NOT NULL,
  `fullnames` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `age` int(11) NOT NULL,
  `pizza` varchar(50) DEFAULT NULL,
  `pasta` varchar(50) DEFAULT NULL,
  `Pap_and_wors` varchar(50) DEFAULT NULL,
  `Chicken_stir_fry` varchar(50) DEFAULT NULL,
  `Beef_stir_fry` varchar(50) DEFAULT NULL,
  `other` varchar(50) DEFAULT NULL,
  `EatOut` varchar(50) NOT NULL,
  `WatchMovies` varchar(50) NOT NULL,
  `WatchTV` varchar(50) NOT NULL,
  `ListenRadio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surveytable`
--

INSERT INTO `surveytable` (`surname`, `fullnames`, `contact`, `date`, `age`, `pizza`, `pasta`, `Pap_and_wors`, `Chicken_stir_fry`, `Beef_stir_fry`, `other`, `EatOut`, `WatchMovies`, `WatchTV`, `ListenRadio`) VALUES
('Mokgalaka', 'Adzuniwe', '0725565955', '2021-10-20', 15, '', 'Pasta', '', 'Chicken_stir_fry', '', '', 'Strongly Agree (1)', 'Agree (2)', 'Neutral (3)', 'Disgree (4)'),
('Ndlovu', 'Ntsakiso', '0482245677', '2021-10-15', 20, '', '', 'Pap_and_Wors', '', 'Beef_stir_fry', 'Other', 'Strongly Agree (1)', 'Agree (2)', 'Strongly disagree (5)', 'Disgree (4)'),
('Sekhwela', 'Karabo', '083145555', '2021-10-23', 32, '', '', '', 'Chicken_stir_fry', 'Beef_stir_fry', 'Other', 'Strongly disagree (5)', 'Neutral(3)', 'Agree (2)', 'Disgree (4)'),
('Mabasa', 'Matimba', '0717011824', '2021-12-10', 22, '', 'Pasta', 'Pap_and_Wors', 'Chicken_stir_fry', 'Beef_stir_fry', 'Other', 'Strongly Agree (1)', 'Strongly Agree (5)', 'Neutral (3)', 'Strongly disgree (5)'),
('Chauke', 'Inno', '061225456', '2021-08-28', 28, '', '', 'Pap_and_Wors', 'Chicken_stir_fry', '', 'Other', 'Neutral (3)', 'Agree (2)', 'Disagree (4)', 'Strongly Agree (1)'),
('Ntombi', 'hgkussd', '025435412', '2021-10-10', 23, '', '', '', '', '', '', '', '', '', ''),
('Inno', 'mokha', '01221455225', '2021-10-25', 3, '', 'Pasta', 'Pap_and_Wors', 'Chicken_stir_fry', '', '', 'Strongly Agree (1) ', 'Agree (2)', 'Neutral (3)', 'Disgree (4)'),
('Girl', 'Boy', '0123586665', '2021-10-25', 3, '', 'Pasta', '', '', 'Beef_stir_fry', '', 'Disagree (4)', 'Neutral(3)', 'Agree (2)', 'Strongly disgree (5)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodsurvey`
--
ALTER TABLE `foodsurvey`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodsurvey`
--
ALTER TABLE `foodsurvey`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
